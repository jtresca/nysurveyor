<?php
// No direct access
defined( '_JEXEC' ) or die();

require_once str_replace( DS.'elements'.DS, DS.'fields'.DS, __FILE__ );

if ( version_compare( JVERSION, '1.6.0', 'l' ) ) {
	// For Joomla 1.5
	class JElementSecsCats extends JElementNN_SecsCats
	{
	}
} else {
	// For Joomla 1.6
	class JFormFieldSecsCats extends JFormFieldNN_SecsCats
	{
	}
}