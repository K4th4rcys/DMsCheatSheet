<?php
  $pass = hash('sha256', $_POST['password']);
  $user = $_POST['username'];
  $reply;
  $reply['username'] = $user;
  $reply['pass'] = $pass;

  $db = mysqli_connect('localhost', 'max', 'password', 'users');

  if ($db->connect_errno > 0) {
      $reply['error1'] = 'Unable to connect to database [' . $db->connect_error . ']';
  }



$sql = "SELECT password FROM users.users WHERE username='$user'";


if (!$result = mysqli_query($db, $sql)) {
    $reply['error2'] = 'There was an error running the query [' . $db->error . ']';
}
$row = mysqli_fetch_assoc($result);
$reply['sql'] = $row['password'];

if ($row['password'] == $pass) {
    $_SESSION['user'] = $user;
    $reply['status'] = 'success';
    header('/index.php?'.SID);
} else {
    $reply['status'] = 'failed';
    unset($_SESSION['user']);
}
  echo json_encode($reply);
