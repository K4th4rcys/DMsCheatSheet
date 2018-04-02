#include <stdio.h>
#include <string.h>    //strlen
#include <fstream>
#include <sys/types.h>
#include <sys/socket.h>
#include <arpa/inet.h> //inet_addr
#include <ros/ros.h>
#include "lcnc_comm/SendShell.h"
#include "lcnc_comm/user_settings.h"

std::string string;
int socketnum = 0;
const char* ip = "10.10.31.35";
int port = 6000;
int set = 0;
//struct hostent *host;

int iniSockets(int sock, struct sockaddr_in server);
void file_logger(const std::string text, int lvl);
bool shellCallback(lcnc_comm::SendShell::Request  &req, lcnc_comm::SendShell::Response &res);
bool serverConnect(int sock, struct sockaddr_in server);
int serverLoop(int sock, struct sockaddr_in server);
void subCallback(const lcnc_comm::user_settings& msg_in);

int main(int argc, char *argv[])
{

	if( remove( "/home/automation/robotlogs/shells.log" ) != 0)
		ROS_INFO( "Error deleting file" );
	else
		ROS_INFO( "File successfully deleted" );

	remove( "/home/gariety/robotlogs/shells.log" );

	file_logger("main function initialized", 3);


	int count = 0;


	file_logger("creating node", 3);
	//create node
	ros::init(argc, argv, "shellServ");

	ROS_INFO("Initalizing shell service");

	ros::NodeHandle shell;
	ros::NodeHandle n;
	file_logger("shell service being advertized", 4);
  ros::ServiceServer shells = shell.advertiseService("/super_robot_node/shell_comm", shellCallback);

	ros::Subscriber user_set = n.subscribe("user_settings", 1000, subCallback);

	file_logger("shell service initialized", 3);
	ros::spin();
	// close(sock);
	file_logger("shut down", 4);
}

int iniSockets(	int sock,	struct sockaddr_in server) {


	close(sock);

	sock = socket(AF_INET, SOCK_STREAM, 0);

	if(sock < 0) {
		while(sock < 0) {
			sock = socket(AF_INET, SOCK_STREAM, 0);
			socketnum++;
			file_logger("socket creation failed line 65", 1);
		}
	}

	server.sin_addr.s_addr = inet_addr(ip);
	server.sin_family = AF_INET;
	server.sin_port = htons( port );

	//Connect to remote server
  serverLoop(sock, server);
}

void file_logger(std::string text, int lvl)
{

	if(lvl <= set) {
		//memset(text, 0, sizeof(text));
		std::ofstream of;
		// open a file for writing (append)
		of.open("/home/automation/robotlogs/shells.log", std::ios::app);
		// write
		of << text<< std::endl;
		// close file
		of.close();

		//memset(text, 0, sizeof(text));
		std::ofstream fo;
		// open a file for writing (append)
		fo.open("/home/gariety/robotlogs/shells.log", std::ios::app);
		// write
		fo << text<< std::endl;
		// close file
		fo.close();
		usleep(400);
	}
}

bool shellCallback(lcnc_comm::SendShell::Request  &req, lcnc_comm::SendShell::Response &res)
{
	int sock;
	struct sockaddr_in server;
	// char server_reply[2000];
	char command[1000];
	int i = 0;
	int q;
	std::string response = "OK";
	std::string cmd = req.cmd.c_str();

	memset(command, 0, sizeof(command));
	// memset(server_reply, 0, sizeof(server_reply));

  iniSockets(sock, server);

	for (i = 0; i < cmd.length(); i++)
	{
		command[i] = cmd[i];
	}

	if(q = send(sock, command, sizeof(command), 0)<0) {

    while (q < 0) {
      close(sock);
			ROS_INFO("closed");
      iniSockets(sock, server);
      q = send(sock, command, sizeof(command), 0)<0;
    }
		ROS_INFO(req.cmd.c_str());
    ROS_INFO("had some issues, but reconnected");
	} else {
		ROS_INFO(req.cmd.c_str());
		ROS_INFO("sent");
	}
	// close(sock);
	res.stat = response;
	file_logger(res.stat, 4);
	file_logger("------------------------------------------", 4);
	return true;
}

int serverLoop(int sock, struct sockaddr_in server){
	bool connection = false;
	int counter = 0;
	file_logger("connection initializing", 3);
	while(connection == false) {
		connection = serverConnect(sock, server);
		if (connection == false) {
			usleep(300);
			counter++;
		}
		if (counter > 1000) {
			close(sock);
			ROS_INFO("closed");
			sock = socket(AF_INET, SOCK_STREAM, 0);
			counter = 0;
			socketnum++;
		}
	}
	return socketnum;
}

bool serverConnect(int sock, struct sockaddr_in server) {
	if(connect(sock, (struct sockaddr *)&server, sizeof(server)) < 0) {
		return true;
	}
	return false;
}

void subCallback(const lcnc_comm::user_settings& msg_in){
	ip = msg_in.ip.c_str();
	port = msg_in.port2;
	set = msg_in.debug;
}
