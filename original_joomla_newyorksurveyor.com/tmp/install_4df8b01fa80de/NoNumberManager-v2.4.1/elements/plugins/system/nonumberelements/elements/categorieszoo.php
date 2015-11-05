<?php
/**
 * Element: CategoriesZOO
 * Displays a multiselectbox of available ZOO categories
 *
 * @package     NoNumber! Elements
 * @version     2.5.1
 *
 * @author      Peter van Westen <peter@nonumber.nl>
 * @link        http://www.nonumber.nl
 * @copyright   Copyright © 2011 NoNumber! All Rights Reserved
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

/**
 * CategoriesZOO Element
 */
class nnElementCategoriesZOO
{
	function getInput( $name, $id, $value, $params, $children, $j15 = 0 )
	{
		$this->params = $params;

		if ( !file_exists( JPATH_ADMINISTRATOR.DS.'components'.DS.'com_zoo'.DS.'zoo.php' ) ) {
			return 'ZOO files not found...';
		}

		$db =& JFactory::getDBO();
		$sql = "SHOW tables like '".$db->getPrefix()."zoo_category'";
		$db->setQuery( $sql );
		$tables = $db->loadObjectList();

		if ( !count( $tables ) ) {
			return 'ZOO category table not found in database...';
		}

		$multiple =			$this->def( 'multiple' );
		$size =				$this->def( 'size', 0 );

		if ( !is_array( $value ) ) {
			$value = explode( ',', $value );
		}

		$sql = "SELECT id, name FROM #__zoo_application";
		$db->setQuery( $sql );
		$apps = $db->loadObjectList();

		$options =	array();
		foreach ( $apps as $i => $app ) {
			$sql = "SELECT id, parent, name FROM #__zoo_category WHERE published = 1 AND application_id = ".(int) $app->id;
			$db->setQuery( $sql );
			$menuItems = $db->loadObjectList();

			if ( $i ) {
				$options[] = JHTML::_( 'select.option', '-', '&nbsp;', 'value', 'text', 1 );
			}

			// establish the hierarchy of the menu
			// TODO: use node model
			$children = array();

			if ( $menuItems)
			{
				// first pass - collect children
				foreach ( $menuItems as $v )
				{
					$pt =	$v->parent;
					$list =	@$children[$pt] ? $children[$pt] : array();
					array_push( $list, $v );
					$children[$pt] = $list;
				}
			}

			// second pass - get an indent list of the items
			require_once JPATH_LIBRARIES.DS.'joomla'.DS.'html'.DS.'html'.DS.'menu.php';
			$list = JHTMLMenu::treerecurse( 0, '', array(), $children, 9999, 0, 0 );

			// assemble items to the array
			$options[] = JHTML::_( 'select.option', 'app'.$app->id, '['.$app->name.']', 'value', 'text', 0 );
			foreach ( $list as $item ) {
				$item_name = $item->treename;

				$padding = 1;
				while ( strpos( $item_name, '&nbsp;&nbsp;' ) === 0 ) {
					$padding++;
					$item_name = substr( $item_name, 12 );
				}
				$item_name = preg_replace( '#^- #', '', $item_name );
				$style = 'padding-left:'.$padding.'em;';

				if ( $style ) {
					$item_name = '[[:'.$style.':]]'.$item_name;
				}

				$options[] = JHTML::_( 'select.option', $item->id, $item_name, 'value', 'text', 0 );
			}
		}

		$attribs = 'class="inputbox"';
		if ( $size ) {
			$attribs .= ' size="'.$size.'"';
		} else {
			$attribs .= ' size="'.( ( count( $options) > 10 ) ? 10 : count( $options) ).'"';
		}
		if( $multiple ) $attribs .= ' multiple="multiple"';

		$html = JHTML::_( 'select.genericlist', $options, ''.$name.'[]', $attribs, 'value', 'text', $value, $id );

		$html = preg_replace( '#>\[\[\:(.*?)\:\]\]#si', ' style="\1">', $html );

		return $html;
	}

	private function def( $val, $default = '' )
	{
		return ( isset( $this->params[$val] ) && (string) $this->params[$val] != '' ) ? (string) $this->params[$val] : $default;
	}
}

if ( version_compare( JVERSION, '1.6.0', 'l' ) ) {
	// For Joomla 1.5
	class JElementCategoriesZOO extends JElement
	{
		/**
		 * Element name
		 *
		 * @access	protected
		 * @var		string
		 */
		var	$_name = 'CategoriesZOO';

		function fetchElement( $name, $value, &$node, $control_name )
		{
			$this->_nnelement = new nnElementCategoriesZOO();
			return $this->_nnelement->getInput( $control_name.'['.$name.']', $control_name.$name, $value, $node->attributes(), $node->children(), 1 );
		}
	}
} else {
	// For Joomla 1.6
	class JFormFieldCategoriesZOO extends JFormField
	{
		/**
		 * The form field type
		 *
		 * @var		string
		 */
		public $type = 'CategoriesZOO';

		protected function getInput()
		{
			$this->_nnelement = new nnElementCategoriesZOO();
			return $this->_nnelement->getInput( $this->name, $this->id, $this->value, $this->element->attributes(), $this->element->children() );
		}
	}
}