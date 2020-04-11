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
      <div id="how-much">
          <h4>LANDSCAPE MATERIAL CALCULATOR</h4>
      </div>
      <form id="calc-form">
          <div class="form-group">
              <select onchange="clearFields()" name="product" class="custom-select" id="product">
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
          </div>
          <div class="form-row">
              <div class="col-md-4 mb-3">
                  <label>Length (ft):
                      <input id="length" name="length" class="idle form-control" type="text">
                  </label>
              </div>

              <div class="col-md-4 mb-3">
                  <label>Width (ft):
                      <input id="width" name="width" class="idle form-control" type="text">
                  </label>
              </div>

              <div class="col-md-4 mb-3">
                  <label>Depth (in):
                      <input id="depth" name="depth" class="idle form-control" type="text">
                  </label>
              </div>
          </div>

          <div class="row">
              <div class="col-md-7">
                  <span id="total-needed">Total Quantity Needed:</span>
              </div>
              <div class="col-md-5 mb-4">
                  <span id="needed"></span><span id="qty"> Tons</span>
              </div>
          </div>
  </div>
  </form>

  </div>
  <?php
}

add_shortcode('landscaping_calculator', 'landscaping_calculator_function');
add_action('wp_enqueue_scripts','calc_js_init');

function calc_js_init() {
    wp_enqueue_script( 'calc-js', plugins_url( 'calc.js', __FILE__ ), array('jquery'));
}

function landscape_calculator_stylesheet() {
    wp_enqueue_style( 'landscape', plugins_url( 'landscape.css', __FILE__ ) );
}
add_action( 'wp_enqueue_scripts', 'landscape_calculator_stylesheet' );

?>
