<?php
/*
Plugin Name: Landscaping Calculator
Plugin URI:  http://downingmedia.com
Description: Calculates amount of product needed for your landscaping project
Version:     1.1
Author:      Eric Downing
Author URI:  http://downingmedia.com
License:     GPL2 etc
License URI: http://link to your plugin license
*/


function landscaping_calculator_function()
{
  ?>
  <div id="calc">
    <span class="how-much">HOW MUCH DO I NEED?</span>
      <div id="calc-form">
        <select onchange="clearFields()" name="product" id="product">
          <option value="" selected="">Select Material</option>
          <option value="mulch">Mulch</option>
          <option value="topsoil">Topsoil</option>
          <option value="sand">Fill Lake Sand</option>
          <option value="lime1257">#1, #2 or #57 Limestone</option>
          <option value="lime304411">#304 or #411 Limestone</option>
          <option value="limefine">Limestone Fines</option>
          <option value="lime34">#3 &amp; #4 Washed Gravel</option>
          <option value="washed57">#57 Washed Gravel</option>
          <option value="washed8">#8 Washed Gravel</option>
          <option value="recycled57">#57 Recycled</option>
          <option value="recycled304">#304 Recycled</option>
          <option value="recycledscreenings">Recycled Screenings</option>
        </select>
    <label>Length (ft):<input id="length" name="length" class="idle" type="text"></label>
    <label>Width (ft):<input id="width" name="width" class="idle" type="text"></label>
    <label>Depth (in):<input id="depth" name="depth" class="idle" type="text"></label>

    <span id="total-needed">Total Quantity Needed:</span><br>
    <span id="needed" style="font-weight:bold;"></span><span style="margin-left:5px;font-weight:bold;" id="qty">cubic yards</span>
    </div><br>
  </div>
  <?php
}



add_shortcode('landscaping_calculator', 'landscaping_calculator_function');
add_action('wp_enqueue_scripts','calc_js_init');

function calc_js_init() {
    wp_enqueue_script( 'calc-js', plugins_url( 'calc.js', __FILE__ ), array('jquery'));

}

?>
