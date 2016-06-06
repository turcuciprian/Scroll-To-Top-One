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
        wp_enqueue_script('script-name', plugin_dir_url(__FILE__).'/script.js');
    }
    add_action('wp_enqueue_scripts', 'stto_register_style');

    function your_function()
    {
        global $abGen;
      //get button style
      $buttonStyle = $abGen->getField('abOption_cPage_sTTO', 'tab1', 'buttonStyle');
        $buttonStyle = (!empty($buttonStyle)) ? $buttonStyle : 0;
        $buttonSize = $abGen->getField('abOption_cPage_sTTO', 'tab1', 'buttonSize');
        $buttonSize = (!empty($buttonSize)) ? $buttonSize : '32x32';
        $colorpicker1 = $abGen->getField('abOption_cPage_sTTO', 'tab1', 'colorpicker1');
        $colorpicker1 = (!empty($colorpicker1)) ? $colorpicker1 : '#000';

        $cPadding = $abGen->getField('abOption_cPage_sTTO', 'tab1', 'cPadding');
        $cPadding = (!empty($cPadding)) ? $cPadding : 5;

        $customIcon = $abGen->getField('abOption_cPage_sTTO', 'tab1', 'customIcon');

        $imgUrl = plugin_dir_url(__FILE__).'img/0-'.$buttonSize.'x'.$buttonSize.'.png';
        if (!empty($customIcon)) {
            $imgUrl = $customIcon;
        }
        ?>
      <a onclick="scrollToTop();return false" href="javascript:void(0);" class="stoContainer <?php echo $buttonStyle?>" style="background:<?php echo $colorpicker1;
        ?>;padding:<?php echo $cPadding;
        ?>px;">
        <img src="<?php echo $imgUrl;
        ?>" alt="Scroll To Top One" />
      </a>
      <?php

    }
    add_action('wp_footer', 'your_function');
}
