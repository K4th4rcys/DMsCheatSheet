<?php
  session_start();
  // echo("header here");
  // if(!isset($_SESSION['user'])) {
  // header("Location: /login.php");
  // }
  session_commit();


$header = "<meta charset=\"UTF-8\">";
$header .= "<title>Ye Olde Inn | {$page_title}</title>";
$header .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"/resources/css/master.css\" />";
$header .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"/resources/css/{$cssfile}.css\" />";
$header .= "<link rel=\"icon\" href=\"/resources/images/favicon.ico\" type=\"image/x-icon\" />";
$header .= "<script type='text/javascript' src='/resources/js/jquery-3.2.1.js'></script>";

 ?>
