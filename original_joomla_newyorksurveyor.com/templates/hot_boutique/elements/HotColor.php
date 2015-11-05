<?php

defined('JPATH_BASE') or die();

class JElementHotColor extends JElement
{
	var	$_name 			= 'HotColor';
	var $_JsIFR3Params 	= null;

	function fetchElement($name, $value, &$node, $control_name)
	{

		$document	= &JFactory::getDocument();
		$option 	= JRequest::getCmd('option');

		// Color Picker
		JHTML::stylesheet( 'picker.css', JURI::root().'/templates/hot_boutique/css/' );
		$document->addScript(JURI::root().'/templates/hot_boutique/js/picker.js');

		$size = ( $node->attributes('size') ? 'size="'.$node->attributes('size').'"' : '' );
		$class = ( $node->attributes('class') ? 'class="'.$node->attributes('class').'"' : 'class="text_area"' );
        $onchange = ( $node->attributes('onchange') ? 'onchange="'.$node->attributes('onchange').'"' : '' );

        $value = htmlspecialchars(html_entity_decode($value, ENT_QUOTES), ENT_QUOTES);

        $background = ' style="background-color: '.$value.'"';

		$html ='<input type="text" name="'.$control_name.'['.$name.']" id="'.$control_name.$name.'" value="'.$value.'" '.$class.' '.$size.' '.$background.' '.$onchange.' onfocus="this.style.background=\'#ffffff\';" />';
		
		// Color Picker
		$html .= '<span style="margin-left:10px" onclick="openPicker(\''.$control_name.$name.'\')"  class="picker_buttons">' . JText::_('Pick color') . '</span>';
		
	return $html;
	}

}
?>