<!DOCTYPE html>
<!--
The code contained in this web application is to remain in this application and not
be used in any other location except with the express permission of it's creator,
Maxwell Gariety. This includes on personal projects.
-->
<html>
    <head>
      <script type='text/javascript' src='resources/js/jquery-3.2.1.js'></script>
      <script type='text/javascript'>
        if($(window).width() <= 800){
          window.location = "localhost/mobile.php";
        }
      </script>
      <?php
        //include("resources/php/header.php");
      ?>
        <meta charset="UTF-8">
        <title>Ye Olde Inn | Home</title>
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    </head>
    <body>
      <div w3-include-html="sidebar.php"></div>
      <img id="intro_img" src="resources/images/tavern_sign.png" />
      <table id="mainmenu">
        <tr>
          <td class="maintd">
            <a class="mainlink" href="new_pages/new_char.php">New Character</a>
          </td>
          <td class="maintd">
            <a class="mainlink" href="new_pages/"></a>
          </td>
        </tr>
        <tr>
          <td class="maintd">
            <a class="mainlink" href="new_pages/"></a>
          </td>
          <td class="maintd">
            <a class="mainlink" href="new_pages/"></a>
          </td>
        </tr>
        <tr>
          <td class="maintd">
            <a class="mainlink" href="new_pages/"></a>
          </td>
          <td class="maintd">
            <a class="mainlink" href="new_pages/"></a>
          </td>
        </tr>
        <tr>
          <td class="maintd">
            <a class="mainlink" href="new_pages/"></a>
          </td>
          <td class="maintd">
            <a class="mainlink" href="new_pages/"></a>
          </td>
        </tr>
      </table>
      <script type='text/javascript' src='resources/js/main.js'></script>
    </body>
</html>
