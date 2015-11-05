<?php
/**
 * Element: Sections
 * Displays a selectbox of available sections
 *
 * @package     NoNumber! Elements
 * @version     2.5.0
 *
 * @author      Peter van Westen <peter@nonumber.nl>
 * @link        http://www.nonumber.nl
 * @copyright   Copyright © 2011 NoNumber! All Rights Reserved
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

// Ensure this file is being included by a parent file
defined( '_JEXEC' ) or die( 'Restricted access' );

/**
 * Sections Element
 */
class nnElementSections
{
	function getInput( $name, $id, $value, $params, $children, $j15 = 0 )
	{
		$this->params = $params;

		global $CT_filter_sectionid;
		$CT_filter_sectionid = $value;

		$category = $this->def( 'category', 'category' );

		$db =& JFactory::getDBO();

		$query = 'SELECT id, title FROM #__sections WHERE published = 1 AND scope = "content" ORDER BY ordering';
		$db->setQuery( $query );
		$sections = $db->loadObjectList();
		for ( $i = 0; $i < count( $sections ); $i++ ) {
			$title = explode( "\n",wordwrap( $sections[$i]->title, 86, "\n" ) );;
			$title = $title['0'];
			$title = ( $title != $sections[$i]->title ) ? $title.'...' : $title;
			$sections[$i]->title = $title;
		}

		array_unshift( $sections, JHTML::_( 'select.option', '0', JText::_( 'Uncategorized' ), 'id', 'title' ) );
		array_unshift( $sections, JHTML::_( 'select.option', '-1', '- '.JText::_( 'Select section' ).' -', 'id', 'title' ) );

		$onchange = ' onchange="changeDynaList( \'params'.$category.'\', sectioncategories, document.adminForm.'.$id.'.options[document.adminForm.'.$id.'.selectedIndex].value, 0, 0 );"';

		return JHTML::_( 'select.genericlist',  $sections, ''.$name.'[]', $onchange.' class="inputbox" size="1"', 'id', 'title', $value, $id );
	}

	private function def( $val, $default = '' )
	{
		return ( isset( $this->params[$val] ) && (string) $this->params[$val] != '' ) ? (string) $this->params[$val] : $default;
	}
}

if ( version_compare( JVERSION, '1.6.0', 'l' ) ) {
	// For Joomla 1.5
	class JElementSections extends JElement
	{
		/**
		 * Element name
		 *
		 * @access	protected
		 * @var		string
		 */
		var	$_name = 'Sections';

		function fetchElement( $name, $value, &$node, $control_name )
		{
			$this->_nnelement = new nnElementSections();
			return $this->_nnelement->getInput( $control_name.'['.$name.']', $control_name.$name, $value, $node->attributes(), $node->children(), 1 );
		}
	}
} else {
	// For Joomla 1.6
	class JFormFieldSections extends JFormField
	{
		/**
		 * The form field type
		 *
		 * @var		string
		 */
		public $type = 'Sections';

		protected function getInput()
		{
			$this->_nnelement = new nnElementSections();
			return $this->_nnelement->getInput( $this->name, $this->id, $this->value, $this->element->attributes(), $this->element->children() );
		}
	}
}