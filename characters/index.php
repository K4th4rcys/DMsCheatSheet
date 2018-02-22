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
    // if ($(window).width() <= 800) {
    //   window.location = "mobile.php";
    // }
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
          <button class="char_tab active_tab" id="pc">PCs</button>
          <button class="char_tab" id="npc">NPCs</button>
          <button class="char_tab" id="boss">Bosses</button>
        </div>
        <div class="tables active_table" id="pc_table">
          <table id="pcs">

          </table>
        </div>
        <div class="tables" id="npc_table">
          <table id="npcs">

          </table>
        </div>
        <div class="tables" id="boss_table">
          <table id="bosses">

          </table>
        </div>
        <div class="addremove" id="newchar">
          <div id="newchar_text">
            New Character
          </div>
        </div>
        <div id="charsep">

        </div>
        <div class="addremove" id="delchar">
          <div id="delchar_text">
            Delete Character
          </div>

        </div>
      </div>
      <div id="sheet_info">
      <div class="sheet_type active_sheet_type" id="pc_sheet">
        <div id="char_sheets_tabs">
          <button class="sheet_tab active_sheet_tab" id="stats_tab">Stats</button>
          <button class="sheet_tab" id="inventory_tab">Inventory</button>
          <button class="sheet_tab" id="combat_tab">Combat</button>
          <button class="sheet_tab" id="powers_tab">Powers</button>
          <button class="sheet_tab" id="features_tab">Features</button>
        </div>
        <div class="char_sheets active_sheet_table" id="stats_table">
          <table id="stats_tb">
              <tr id="pc_sheet_header">
                <th id="charname">

                </th>
                <th id="charlevel">

                </th>
                <th id="charrace">

                </th>
                <th id="charclass">

                </th>
                <th id="background">

                </th>
              </tr>
              <tr>
                <td id="">

                </td>
                <td id="">

                </td>
                <td id="">

                </td>
                <td id="">

                </td>
              </tr>
          </table>
        </div>
        <div class="char_sheets" id="inventory_table">
          <table id="inventory_tab">

          </table>
        </div>
        <div class="char_sheets" id="combat_table">
          <table id="combat_tab">

          </table>
        </div>
        <div class="char_sheets" id="powers_tab">
          <table id="powers_tab">

          </table>
        </div>
        <div class="char_sheets" id="features_tab">
          <table id="features_tab">

          </table>
        </div>
      </div>
      </div>
  </div>

  <script type='text/javascript' src='/resources/js/characters.js'></script>
</body>

</html>
