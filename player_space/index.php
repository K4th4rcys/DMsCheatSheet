<!DOCTYPE html>
<!--
The code contained in this web application is to remain in this application and not
be used in any other location except with the express permission of it's creator,
Maxwell Gariety. This includes on personal projects.
-->
<html>

<head>
  <script type='text/javascript' src='/DMCS/resources/js/jquery-3.2.1.js'></script>
  <script type='text/javascript'>
    if ($(window).width() <= 800) {
      window.location = "localhost/mobile.php";
    }
  </script>
  <?php
        //include("resources/php/header.php");
      ?>
    <meta charset="UTF-8">
    <title>Character Manager || Ye Olde Inn</title>
    <link rel="stylesheet" type="text/css" href="/DMCS/resources/css/style.css">
    <!-- <link rel="stylesheet" type="text/css" href="resources/css/master.css"> -->
</head>

<body>
  <div id="maindiv">
    <div w3-include-html="/DMCS/sidebar.php"></div>
  </div>
  <span id="intro_img_div">
        <img id="intro_img" src="/DMCS/resources/images/tavern_sign.png" />
      </span>
  </div>

  <script type='text/javascript' src='/DMCS/resources/js/main.js'></script>
</body>

</html>
