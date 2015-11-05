<?php
/**
 * Extension Install File
 * Does the stuff for the specific extensions
 *
 * @package     NoNumber! Extension Manager
 * @version     2.4.0
 *
 * @author      Peter van Westen <peter@nonumber.nl>
 * @link        http://www.nonumber.nl
 * @copyright   Copyright © 2011 NoNumber! All Rights Reserved
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

$db =& JFactory::getDBO();

$name = 'NoNumber! Extension Manager';
$alias = 'nonumbermanager';
$ext = $name.' (component)';

// COMPONENT
$states[] = installExtension( $alias, $name, 'component', array( 'link'=>'', 'admin_menu_img'=>'components/com_'.$alias.'/images/icon-nonumber.png' ) );

// Stuff to do after installation / update
function afterInstall( &$db ) {
	$queries = array();

	// main table
	$queries[] = "CREATE TABLE IF NOT EXISTS `#__nonumber_licenses` (
	  `extension` varchar(255) NOT NULL,
	  `code` varchar(255) NOT NULL,
	  PRIMARY KEY  (`extension`)
	) ENGINE=MyISAM CHARACTER SET `utf8`;";

	// REMOVE SUB MENU
	$queries[] = "DELETE FROM `#__components`
		 WHERE `option` = 'com_nonumbermanager'
		 AND parent != 0
	";

	foreach ( $queries as $query ) {
		$db->setQuery( $query );
		$db->query();
	}
}