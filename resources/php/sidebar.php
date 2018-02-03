<div id="side_nav">
  <span id="side_logo">
    <img id="intro_img" src="/resources/images/tavern_sign.png" />
  </span>
  <ui id="nav_list">
    <li id='home' class='nav_list_item'>
      <a id='home_link' href='/'>
      <img class='bar_img' id='home_img' src='/resources/images/d20.png'/>
      <span class='link_text'>| Home</span></a>
    </li>
    <?php
    $place=basename(getcwd());

    if ($place !== "characters") {
      echo"<li id=char'' class='nav_list_item'>
              <a id='char_link' href='/characters/'>
              <img class='bar_img' id='char_img' src='/resources/images/humanoid.png'/>
              <span class='link_text'>| Character Management</span></a>
            </li>";
    }
    if ($place !== "campaigns") {
        echo"<li id='campaign' class='nav_list_item'>
                <a id='camp_link' href='/campaigns/'>
                <img class='bar_img' id='campaign_img' src='/resources/images/scroll.png'/>
                <span class='link_text'>| Campaigns</span></a>
              </li>";
    }
    if ($place !== "items") {
        echo"<li id='items' class='nav_list_item'>
              <a id='item_link' href='/items'>
              <img class='bar_img' id='item_img' src='/resources/images/potion.png'/>
              <span class='link_text'>| Items</span></a>
            </li>";
    }
    if ($place !== "player_space") {
        echo"<li id='player' class='nav_list_item'>
                <a id='playspace_link' href='/player_space/'>
                <img class='bar_img' id='player_img' src='/resources/images/rabbithat.png'/>
                <span class='link_text'>| Player's Space</span></a>
              </li>";
    }
    if ($place !== "dm_screen") {
        echo"<li id='dm_screen' class='nav_list_item'>
              <a id='dm_link' href='/dm_screen/'>
              <img class='bar_img' id='dm_img' src='/resources/images/dm_screen.png'/>
              <span class='link_text'>| DM's Screen</span></a>
            </li>";
    }
    if ($place !== "creatures") {
        echo"<li id='creatures' class='nav_list_item'>
              <a id='creat_link' href='/creatures/'>
              <img class='bar_img' id='crea_img' src='/resources/images/creature.png'/>
              <span class='link_text'>| Bestiary</span></a>
            </li>";
    }
    if ($place !== "spellbook") {
        echo"<li id='spellbook' class='nav_list_item'>
              <a id='spell_link' href='/spellbook/'>
              <img class='bar_img' id='nav_img' src='/resources/images/spellbook.png'/>
              <span class='link_text'>| Spellbook</span></a>
            </li>";
    }
    if ($place !== "encounters") {
        echo"<li id='encounters' class='nav_list_item'>
              <a id='enc_link' href='/encounters/'>
              <img class='bar_img' id='encounter_img' src='/resources/images/encounter.png'/>
              <span class='link_text'>| Encounter Builder</span></a>
            </li>";
    }
    ?>
  </ui>
</div>
