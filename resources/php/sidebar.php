<div id="side_nav">
  <span id="side_logo">
    <img id="intro_img" src="/resources/images/tavern_sign.png" />
  </span>
  <ui id="nav_list">
    <li id='home' class='nav_list_item'>
      <label for='home_link'>
        <table>
          <tr>
            <td>
              <img class='bar_img' id='home_img' src='/resources/images/d20.png'/>
            </td>
            <td colspan='2'>
              <a id='home_link' href='/'>| Home</a>
            </td>
          </tr>
        </table>
      </label>
    </li>
    <?php
    $place=basename(getcwd());

    if($place !== "characters"){
      echo"<li id=char'' class='nav_list_item'>
      <label for='char_link'>
        <table>
          <tr>
            <td>
              <img class='bar_img' id='char_img' src='/resources/images/humanoid.png'/>
            </td>
            <td colspan='2'>
              <a id='char_link' href='/characters/'>| Character Management</a>
            </td>
          </tr>
        </table>
      </label>
      </li>";
    }
    if($place !== "campaigns"){
      echo"<li id='campaign' class='nav_list_item'>
      <label for='camp_link'>
        <table>
          <tr>
            <td>
              <img class='bar_img' id='campaign' src='/resources/images/scroll.png'/>
            </td>
            <td colspan='2'>
              <a id='camp_link' href='/campaigns/'>| Campaigns</a>
            </td>
          </tr>
        </table>
      </label>
      </li>";
    }
    if($place !== "items"){
      echo"<li id='items' class='nav_list_item'>
      <label for='item_link'>
        <table>
          <tr>
            <td>
              <img class='bar_img' id='home_img' src='/resources/images/potion.png'/>
            </td>
            <td colspan='2'>
              <a id='item_link' href='/items'>| Items</a>
            </td>
          </tr>
        </table>
      </label>
      </li>";
    }
    if($place !== "rngenerator"){
      echo"<li id='rng' class='nav_list_item'>
      <label for='rng_link'>
        <table>
          <tr>
            <td>
              <img class='bar_img' id='home_img' src='/resources/images/rabbithat.png'/>
            </td>
            <td colspan='2'>
              <a id='rng_link' href='/rngenerator/'>| Random Generator</a>
            </td>
          </tr>
        </table>
      </label>
      </li>";
    }
    if($place !== "dm_screen"){
      echo"<li id='dm_screen' class='nav_list_item'>
      <label for='dm_link'>
        <table>
          <tr>
            <td>
              <img class='bar_img' id='home_img' src='/resources/images/dm_screen.png'/>
            </td>
            <td colspan='2'>
              <a id='dm_link' href='/dm_screen/'>| DM's Screen</a>
            </td>
          </tr>
        </table>
      </label>
      </li>";
    }
    if($place !== "creatures"){
      echo"<li id='creatures' class='nav_list_item'>
      <label for='creat_link'>
        <table>
          <tr>
            <td>
              <img class='bar_img' id='home_img' src='/resources/images/creature.png'/>
            </td>
            <td colspan='2'>
              <a id='creat_link' href='/creatures/'>| Bestiary</a>
            </td>
          </tr>
        </table>
      </label>
      </li>";
    }
    if($place !== "spellbook"){
      echo"<li id='spellbook' class='nav_list_item'>
      <label for='spell_link'>
        <table>
          <tr>
            <td>
              <img class='bar_img' id='home_img' src='/resources/images/spellbook.png'/>
            </td>
            <td colspan='2'>
              <a id='spell_link' href='/spellbook/'>| Spellbook</a>
            </td>
          </tr>
        </table>
      </label>
      </li>";
    }
    if($place !== "encounters"){
      echo"<li id='encounters' class='nav_list_item'>
      <label for='enc_link'>
        <table>
          <tr>
            <td>
              <img class='bar_img' id='home_img' src='/resources/images/encounter.png'/>
            </td>
            <td colspan='2'>
              <a id='enc_link' href='/encounters/'>| Encounter Builder</a>
            </td>
          </tr>
        </table>
      </label>
      </li>";
    }
    ?>
  </ui>
</div>
