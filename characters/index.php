<!DOCTYPE html>
<!--
The code contained in this web application is to remain in this application and not
be used in any other location except with the express permission of it's creator,
Maxwell Gariety. This includes on personal projects.
-->
<html>

<head>
  <script type='text/javascript' src='/resources/js/jquery-3.2.1.js'></script>
  <script type='text/javascript'>
    if ($(window).width() <= 800) {
      window.location = "localhost/mobile.php";
    }
  </script>
  <?php
        include("{$_SERVER['DOCUMENT_ROOT']}/resources/php/header.php");
      ?>
    <meta charset="UTF-8">
    <title>Character Manager || Ye Olde Inn</title>
    <link rel="stylesheet" type="text/css" href="/resources/css/characters.css">
    <!-- <link rel="stylesheet" type="text/css" href="resources/css/master.css"> -->
</head>

<body>
  <div id="maindiv">
    <?php
    include_once("{$_SERVER['DOCUMENT_ROOT']}/resources/php/sidebar.php");
    ?>
    <div id="char_selector">
      <div id="charopt_tabs">
        <div class="char_tab active_tab" id="pcs">PCs</div>
        <div class="char_tab" id="npcs">NPCs</div>
        <div class="char_tab" id="boss">Bosses</div>
      </div>
      <div class="tables active_table" id="pc_table">

      </div>
      <div class="tables" id="npc_table">

      </div>
      <div class="tables" id="boss_table">

      </div>
    </div>
  </div>

  <script type='text/javascript' src='/resources/js/main.js'></script>
</body>

</html>
