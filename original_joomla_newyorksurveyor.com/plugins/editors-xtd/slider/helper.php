<?php
/**
 * Plugin Helper File
 *
 * @package     Slider
 * @version     1.5.2
 *
 * @author      Peter van Westen <peter@nonumber.nl>
 * @link        http://www.nonumber.nl
 * @copyright   Copyright © 2011 NoNumber! All Rights Reserved
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

// No direct access
defined( '_JEXEC' ) or die();

/**
** Plugin that places the button
*/
class plgButtonSliderHelper
{
	function __construct( &$params )
	{
		$this->params = $params;
	}

	/**
	* Display the button
	*
	* @return array A two element array of ( imageName, textToInsert )
	*/
	function render( $name )
	{
		$mainframe =& JFactory::getApplication();

		$button = new JObject();

		if ( $mainframe->isSite() ) {
			$enable_frontend = $this->params->enable_frontend;
			if ( !$enable_frontend ) {
				return $button;
			}
		}

		$this->params->tag_open =		preg_replace( '#[^a-z0-9-_]#s', '', $this->params->tag_open );
		$this->params->tag_close =		preg_replace( '#[^a-z0-9-_]#s', '', $this->params->tag_close );
		$this->params->tag_delimiter =	( $this->params->tag_delimiter == 'space' ) ? ' ' : '=';

		$text = '{'.$this->params->tag_open.$this->params->tag_delimiter.JText::_( 'SLD_TITLE' ).' 1}\n'.
			'<p>'.JText::_( 'SLD_TEXT' ).'</p>\n'.
			'<p>{'.$this->params->tag_open.$this->params->tag_delimiter.JText::_( 'SLD_TITLE' ).' 2}</p>\n'.
			'<p>'.JText::_( 'SLD_TEXT' ).'</p>\n'.
			'<p>{/'.$this->params->tag_close.'}</p>';
		$text = str_replace( '\\\\n', '\\n', addslashes( $text ) );
		$text = str_replace( '{', '{\'+\'', $text );

		$document =& JFactory::getDocument();
		$js = "
			function insertSlider(editor) {
				jInsertEditorText('".$text."', editor);
			}
		";
		$document->addScriptDeclaration($js);

		$button_style = 'slider';
		if ( !$this->params->button_icon ) {
			$button_style = 'blank blank_slider';
		}
		$document->addStyleSheet( JURI::root( true ).'/plugins/editors-xtd/slider/css/style.css' );

		$text = JText::_( str_replace( ' ', '_', $this->params->button_text ) );
		if ( $text == str_replace( ' ', '_', $this->params->button_text ) ) {
			$text = JText::_( $this->params->button_text );
		}

		$button->set( 'modal', false );
		$button->set( 'link', '#' );
		$button->set( 'onclick', 'insertSlider(\''.$name.'\');return false;');
		$button->set( 'text', $text );
		$button->set( 'name', $button_style );

		return $button;
	}
}