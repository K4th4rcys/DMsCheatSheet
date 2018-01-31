<div id="side_nav">
  <ui id="nav_list">
    <?php
    $place=basename(getcwd());
      echo"<li id='' class='nav_list_item'>Home</li>";
    if($place !== "characters"){
      echo"<li id='' class='nav_list_item'>

      </li>";
    }
    if($place !== "campaigns"){
      echo"<li id='' class='nav_list_item'>

      </li>";
    }
    if($place !== "items"){
      echo"<li id='' class='nav_list_item'>

      </li>";
    }
    if($place !== "rngenerator"){
      echo"<li id='' class='nav_list_item'>

      </li>";
    }
    if($place !== "dm_screen"){
      echo"<li id='' class='nav_list_item'>

      </li>";
    }
    if($place !== "creatures"){
      echo"<li id='' class='nav_list_item'>

      </li>";
    }
    if($place !== "spellbook"){
      echo"<li id='' class='nav_list_item'>

      </li>";
    }
    if($place !== "encounters"){
      echo"<li id='' class='nav_list_item'>

      </li>";
    }
    ?>
  </ui>
</div>
