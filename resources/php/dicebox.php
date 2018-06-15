<?php

//Code to pull dice history from the Session



?>

<link rel="stylesheet" type="text/css" href="/resources/css/master.css" />
<div id='dicebox_container'>
  <div id="dicebox_header">
  </div>
  <div class="dicebox_selector" id="dice_type">
    <form id="type_radio_form">
      <input type="radio" id="dice4" value="4" class="dice_type_input" name="dtype" hidden/>
      <label class="dchooser" id="d4" for="dice4">d4</label>
      <input type="radio" id="dice6" value="6" class="dice_type_input" name="dtype" hidden/>
      <label class="dchooser" id="d6" for="dice6">d6</label>
      <input type="radio" id="dice8" value="8" class="dice_type_input" name="dtype" hidden/>
      <label class="dchooser" id="d8" for="dice8">d8</label>
      <input type="radio" id="dice10" value="10" class="dice_type_input" name="dtype" hidden/>
      <label class="dchooser" id="d10" for="dice10">d10</label>
      <input type="radio" id="dice12" value="12" class="dice_type_input" name="dtype" hidden/>
      <label class="dchooser" id="d12" for="dice12">d12</label>
      <input type="radio" id="dice20" value="20" class="dice_type_input" name="dtype" hidden/>
      <label class="dchooser" id="d20" for="dice20">d20</label>
      <input type="radio" id="dice100" value="100" class="dice_type_input" name="dtype" hidden/>
      <label class="dchooser" id="d100" for="dice100">%</label>
    </form>
  </div>
  <div class="dicebox_selector" id="dice_quantity">
    <form id="dice_quantity_form">
      <input type="radio" id="1dice" value="1" class="dnum_input"  name="dquant" hidden/>
      <label class="dnum" id="1d" for="1dice" style="left:7pt;"><span class="drac_nums">1</span><span class="text_over">1</span></label>
      <input type="radio" id="2dice" value="2" class="dnum_input"  name="dquant" hidden/>
      <label class="dnum" id="2d" for="2dice" style="left:55pt;"><span class="drac_nums">2</span><span class="text_over">2</span></label>
      <input type="radio" id="4dice" value="4" class="dnum_input"  name="dquant" hidden/>
      <label class="dnum" id="4d" for="4dice" style="left:103pt;"><span class="drac_nums">4</span><span class="text_over">4</span></label>
      <input type="radio" id="6dice" value="6" class="dnum_input"  name="dquant" hidden/>
      <label class="dnum" id="6d" for="6dice" style="left:151pt;"><span class="drac_nums">6</span><span class="text_over">6</span></label>
      <input type="radio" id="8dice" value="8" class="dnum_input"  name="dquant" hidden/>
      <label class="dnum" id="8d" for="8dice" style="left:199pt;"><span class="drac_nums">8</span><span class="text_over">8</span></label>
      <input type="radio" id="12dice" value="12" class="dnum_input"  name="dquant" hidden/>
      <label class="dnum" id="12d" for="12dice" style="left:247pt;"><span class="drac_nums">9</span><span class="text_over">12</span></label>
      <input type="radio" id="custnum" value="customnumber" class="dnum_input"  name="dquant" hidden/>
      <label class="dnum" id="customd" for="custnum" style="left:295pt;"><span class="drac_nums">z</span><input type="number" id="customnumber" /></label>
    </form>
  </div>
  <div id="roll_selector">
    <form id="mod_sel_form">
      <input type="radio" id="add_mod" value="plus" class="roll_mod_input"  name="roll_type" hidden/>
      <label class="roll_sel" id="add_label" for="add_mod"><span class="drac_nums">A</span><span class="text_over">+</span></label>
      <input type="radio" id="sub_mod" value="minus" class="roll_mod_input"  name="roll_type" hidden/>
      <label class="roll_sel" id="sub_label" for="sub_mod"><span class="drac_nums">S</span><span class="text_over">-</span></label>
      <div class="roll_sel" id="mod_val_cont"><span class="drac_nums">MODVALUE</span><input type="number" id="mod_value" /></div>
    </form>
  </div>

  <script type='text/javascript' src='/resources/js/dicebox.js'></script>
</div>
