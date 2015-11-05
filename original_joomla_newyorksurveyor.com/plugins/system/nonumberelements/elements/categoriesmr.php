<?php
// No direct access
defined( '_JEXEC' ) or die();

require_once str_replace( DS.'elements'.DS, DS.'fields'.DS, __FILE__ );

if ( version_compare( JVERSION, '1.6.0', 'l' ) ) {
	// For Joomla 1.5
	class JElementCategoriesMR extends JElementNN_CategoriesMR
	{
	}
} else {
	// For Joomla 1.6
	class JFormFieldCategoriesMR extends JFormFieldNN_CategoriesMR
	{
	}
}