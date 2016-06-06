<?php
/*
  Plugin Name: Scroll To Top One
  Plugin URI: http://admin-builder.com
  Description: Add a custom/dinamic scroll to top button to your site
  Version: 1.0
  Author: rootabout
  Author URI: http://admin-builder.com
  License: GPLv2 or later
  Text Domain: Scroll To Top One
 */

 require_once 'abExport.php';

if (!function_exists('stto_register_style')) {
    function stto_register_style()
    {
        wp_enqueue_style('style-name', plugin_dir_url(__FILE__).'/style.css');
    }
    add_action('wp_enqueue_scripts', 'stto_register_style');

    function your_function()
    {
      global $abGen;
      //get button style
      $arrowStyle = $abGen->getField('abOption_cPage_sTTO','tab1','arrowStyle');
      $arrowStyle = (!empty($arrowStyle))?$arrowStyle:0;
      //button style
      $buttonStyle = $abGen->getField('abOption_cPage_sTTO','tab1','buttonStyle');
      $buttonStyle = (!empty($buttonStyle))?$buttonStyle:0;
      $buttonSize = $abGen->getField('abOption_cPage_sTTO','tab1','buttonSize');
      $buttonSize = (!empty($buttonSize))?$buttonSize:'32x32';
      $colorpicker1 = $abGen->getField('abOption_cPage_sTTO','tab1','colorpicker1');
      $colorpicker1 = (!empty($colorpicker1))?$colorpicker1:'#000';
      ?>
      <a href="javascript:void(0);" class="stoContainer" style="background:<?php echo $colorpicker1;?>">
        <img src="<?php echo plugin_dir_url(__FILE__);?>img/0-<?php echo $buttonSize;?>.png" alt="Scroll To Top One" />
      </a>
      <?php
    }
    add_action('wp_footer', 'your_function');
}
