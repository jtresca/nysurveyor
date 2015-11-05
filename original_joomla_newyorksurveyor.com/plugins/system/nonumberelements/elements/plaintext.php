<?php
// No direct access
defined( '_JEXEC' ) or die();

require_once str_replace( DS.'elements'.DS, DS.'fields'.DS, __FILE__ );

if ( version_compare( JVERSION, '1.6.0', 'l' ) ) {
	// For Joomla 1.5
	class JElementPlainText extends JElementNN_PlainText
	{
	}
} else {
	// For Joomla 1.6
	class JFormFieldPlainText extends JFormFieldNN_PlainText
	{
	}
}