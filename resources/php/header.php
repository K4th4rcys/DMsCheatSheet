<?php
  session_start();
  // echo("header here");
  // if(!isset($_SESSION['user'])) {
  // header("Location: /login.php");
  // }
  session_commit();


echo "<meta charset=\"UTF-8\">";
echo "<title>Ye Olde Inn | {$page_title}</title>";
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"{$_SERVER['DOCUMENT_ROOT']}/resources/css/{$cssfile}.css\">";
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"{$_SERVER['DOCUMENT_ROOT']}/resources/css/master.css\">";
echo "<link rel=\"icon\" href=\"{$_SERVER['DOCUMENT_ROOT']}/favicon.ico\" type=\"image/x-icon\" />";


 ?>
