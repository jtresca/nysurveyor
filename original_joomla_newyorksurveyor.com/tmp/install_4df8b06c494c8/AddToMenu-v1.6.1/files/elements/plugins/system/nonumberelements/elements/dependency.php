<?php
/**
 * Element: Dependency
 * Displays an error if given file is not found
 *
 * @package     NoNumber! Elements
 * @version     2.3.1
 *
 * @author      Peter van Westen <peter@nonumber.nl>
 * @link        http://www.nonumber.nl
 * @copyright   Copyright © 2011 NoNumber! All Rights Reserved
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

// Ensure this file is being included by a parent file
defined( '_JEXEC' ) or die( 'Restricted access' );

/**
 * Dependency Element
 *
 * Available extra parameters:
 * label	The name of the extension that is needed
 * file		The file to check (from the root)
 */
class JElementDependency extends JElement
{
	/**
	 * Element name
	 *
	 * @access	protected
	 * @var		string
	 */
	var	$_name = 'Dependency';

	function fetchTooltip()
	{
		return;
	}

	function fetchElement( $name, $value, &$node, $control_name )
	{
		require_once JPATH_PLUGINS.DS.'system'.DS.'nonumberelements'.DS.'helpers'.DS.'functions.php';
		$this->functions =& NNFunctions::getFunctions();
		$mt_version = $this->functions->getJSVersion();

		$document =& JFactory::getDocument();
		$document->addScript( JURI::root(true).'/plugins/system/nonumberelements/js/script'.$mt_version.'.js' );

		$file = $node->attributes( 'file' );
		if ( !$file ) {
			$path = ( $node->attributes( 'path' ) == 'site' ) ? '' : DS.'administrator' ;
			$label = $node->attributes( 'label' );
			$file = $this->def( $node->attributes( 'alias' ), $node->attributes( 'label' ) );
			$file = preg_replace( '#[^a-z-]#', '', strtolower( $file ) );
			$extension = $node->attributes( 'extension' );
			switch( $extension ) {
				case 'com';
					$file = $path.DS.'components'.DS.'com_'.$file.DS.'com_'.$file.'.xml';
					break;
				case 'mod';
					$file = $path.DS.'modules'.DS.'mod_'.$file.DS.'mod_'.$file.'.xml';
					break;
				case 'plg_editors-xtd';
					$file = DS.'plugins'.DS.'editors-xtd'.DS.$file.'.xml';
					break;
				default:
					$file = DS.'plugins'.DS.'system'.DS.$file.'.xml';
					break;
			}
			$label = JText::_( $label ).' ('.JText::_( 'NN_'.strtoupper( $extension ) ).')';
		} else {
			$label = $this->def( $node->attributes( 'label' ), 'the main extension' );
			$file = str_replace( '/', DS, $file );
		}

		$this->setMessage( $file, $label );

		$random = rand( 100000, 999999 );
		$html = '<div id="end-'.$random.'"></div><script type="text/javascript">NoNumberElementsHideTD( "end-'.$random.'" );</script>';

		return $html;
	}

	function setMessage( $file, $name )
	{
		jimport( 'joomla.filesystem.file' );

		if ( strpos( $file, '/administrator' ) === 0 ) {
			$file = str_replace( '/', DS, str_replace( '/administrator', JPATH_ADMINISTRATOR, $file ) );
		} else {
			$file = JPATH_SITE.str_replace( '/', DS, $file );
		}

		$file_alt = preg_replace( '#(com|mod)_([a-z-_]+\.)#', '\2', $file );

		if ( !JFile::exists( $file ) && !JFile::exists( $file_alt ) ) {
			$mainframe =& JFactory::getApplication();
			$msg = JText::sprintf( 'NN_THIS_EXTENSION_NEEDS_THE_MAIN_EXTENSION_TO_FUNCTION', JText::_( $name ) );
			$message_set = 0;
			$messageQueue = $mainframe->getMessageQueue();
			foreach ( $messageQueue as $queue_message ) {
				if ( $queue_message['type'] == 'error' && $queue_message['message'] == $msg ) {
					$message_set = 1;
					break;
				}
			}
			if ( !$message_set ) {
				$mainframe->enqueueMessage( $msg, 'error' );
			}
		}
	}

	function def( $val, $default )
	{
		return ( $val == '' ) ? $default : $val;
	}
}