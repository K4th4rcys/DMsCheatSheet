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
    if ($(window).width() <= 800) {
      window.location = "localhost/mobile.php";
    }
  </script>
  <?php
        //include("resources/php/header.php");
      ?>
    <meta charset="UTF-8">
    <title>Ye Olde Inn | Home</title>
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    <link rel="stylesheet" type="text/css" href="resources/css/master.css">
</head>

<body>
  <div id="maindiv">
    <div w3-include-html="sidebar.php"></div>
    </div>
    <div id="intro_img">
      <img src="resources/images/tavern_sign.png" />
    </div>
    </div>
    <table id="mainmenu">
      <tr class="maintr">
        <td class="maintd">
          <div class="shadow">
            <div class="mainlink">
            <a href="new_pages/new_char.php">New Character</a>
          </div>
        </div>
        </td>
        <td class="maintd">
          <div class="shadow">
            <div class="mainlink">
            <a href="new_pages/new_char.php">New Character</a>
          </div>
        </div>
        </td>
      </tr>
      <tr class="maintr">
        <td class="maintd">
          <div class="shadow">
            <div class="mainlink">
            <a href="new_pages/new_char.php">New Character</a>
          </div>
        </div>
        </td>
        <td class="maintd">
          <div class="shadow">
            <div class="mainlink">
            <a href="new_pages/new_char.php">New Character</a>
          </div>
        </div>
        </td>
      </tr>
      <tr class="maintr">
        <td class="maintd">
          <div class="shadow">
            <div class="mainlink">
            <a href="new_pages/new_char.php">New Character</a>
          </div>
        </div>
        </td>
        <td class="maintd">
          <div class="shadow">
            <div class="mainlink">
            <a href="new_pages/new_char.php">New Character</a>
          </div>
        </div>
        </td>
      </tr>
      <tr class="maintr">
        <td class="maintd">
          <div class="shadow">
            <div class="mainlink">
            <a href="new_pages/new_char.php">New Character</a>
          </div>
        </div>
        </td>
        <td class="maintd">
          <div class="shadow">
            <div class="mainlink">
            <a href="new_pages/new_char.php">New Character</a>
          </div>
        </div>
        </td>
      </tr>
    </table>
  </div>
  </div>
  <script type='text/javascript' src='resources/js/main.js'></script>
</body>

</html>
