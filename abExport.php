<?php

$pathToSource = realpath(dirname(__FILE__));
   if (strpos($pathToSource, 'themes') !== false) {
       //theme
   $rootURL = get_template_directory_uri().'/admin-builder-wordpress/';
       $rootDIR = get_template_directory().'/admin-builder-wordpress/';
   } else {
       //plugin
     $rootURL = plugin_dir_url(__FILE__).'admin-builder-wordpress/';
       $rootDIR = plugin_dir_path(__FILE__).'admin-builder-wordpress/';
   }

$exportFile = $rootDIR.'admin_builder.php';

if (is_file($exportFile)) {
    require_once $exportFile;
}
if (class_exists('loadFromPlugin')) {
    $theJson = '{"menus":[{"label":"Posts","type":"post","name":"posts","unique":true,"children":[],"$$hashKey":"object:1669"},{"label":"Pages","type":"page","name":"pages","unique":true,"children":[],"$$hashKey":"object:1670"},{"label":"Scroll To Top One","type":"cPage","name":"sTTO","unique":false,"children":[{"label":"Tab1","name":"tab1","context":"normal","priority":"default","fields":[{"name":"buttonStyle","type":"select","label":"Button Style","description":"Select The style of the button background container that will show","selectType":"custom","oArr":[{"label":"Default","value":"rEdges","$$hashKey":"object:2002"},{"label":"Round","value":"round","$$hashKey":"object:2013"},{"label":"Rounded Edges","value":"rEdges","$$hashKey":"object:2022"}],"$$hashKey":"object:1911"},{"name":"buttonSize","type":"select","label":"Button Size","description":"The size of the Scroll to top Button","selectType":"custom","oArr":[{"label":"Default","value":"32x32","$$hashKey":"object:604"},{"label":"64 x 64","value":"64","$$hashKey":"object:615"},{"label":"32 x 32","value":"32","$$hashKey":"object:624"},{"label":"24 x 24","value":"24","$$hashKey":"object:633"},{"label":"20 x 20","value":"20","$$hashKey":"object:642"}],"$$hashKey":"object:513"},{"name":"colorpicker1","type":"colorpicker","label":"Background Color","description":"The background color of the button","format":"hex","opacity":true,"$$hashKey":"object:2064"},{"name":"customIcon","type":"upload","label":"Custom Icon","description":"Upload a custom image for icon to use","tSizes":[],"$$hashKey":"object:2173"},{"name":"cPadding","type":"textbox","label":"Container Padding","description":"Integer. In Pixels. Default 5 (if left empty).","$$hashKey":"object:2795"}],"$$hashKey":"object:1732"}],"capability":"manage_options","handler":"ab_sTTO_handler","pageTitle":"Scroll To Top One Settings","$$hashKey":"object:1691"}]}';
    $lfp = new loadFromPlugin();
    $lfp->load($theJson);
}
