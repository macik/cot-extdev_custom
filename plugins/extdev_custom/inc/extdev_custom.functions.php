<?php
/**
 * Custom config  plugin API
 * @package extdev_custom
 * @author Andrey Matsovkin
 * @copyright Copyright (c) 2011-2012
 * @license Distributed under BSD license.
 */

defined('COT_CODE') or die('Wrong URL');

$R['color_select'] = '<label for="{$id}">{$c}: {$input}</label><br />';

/**
 * Generates HTML code for input RGB color triple
 * @param string $name Name of config variable
 * @param string $value Value of config variable (here array of RGB components)
 * @return text Html code for custom UI element
 */
function color_select_input($name,$value){
	//$control_tpl = new XTemplate(cot_tplfile('extdev_custom', 'plug'));
	$form = '';
	$color = str_replace('#','',$value);
	$components = array('R','G','B');
	$i = 0;
	for ($i = 0; $i < sizeof($components); $i++) {
		$c = $components[$i];
		$colors[$c] = hexdec(substr($color,$i*2,2));
		$id = $name.'_'.$c;
		$input_field = cot_inputbox('text', $name."[$c]",$colors[$c],array('id'=>$id));
		$form .= cot_rc($name, array('id'=>$id,'c'=>$c,'input'=>$input_field) );
	}
	return $form;
}


?>