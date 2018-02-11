<?php
$pass = hash('sha256', $_POST['new_pass']);
$name = $_POST['name'];
$user = $_POST['new_user'];
$reply;
$reply['name'] = $name;
$reply['username'] = $user;
$reply['pass'] = $pass;

$db = new mysqli('localhost', 'max', 'password', 'users');

if ($db->connect_errno > 0) {
    $reply['error1'] = 'Unable to connect to database [' . $db->connect_error . ']';
}


$sql = <<<SQL
INSERT INTO users (name, username, password) VALUES ('{$name}', '{$user}', '{$pass}')
SQL;

$reply['sql'] = $sql;
$reply['compare'] = $db->query($sql);
if (!$result = $db->query($sql)) {
    $reply['error2'] = 'There was an error running the query [' . $db->error . ']';
}

if ($result == $pass) {
    $_SESSION['user'] = $user;
    $reply['status'] = 'success';
} else {
    $reply['status'] = 'failed';
    unset($_SESSION['user']);
}
echo json_encode($reply);
