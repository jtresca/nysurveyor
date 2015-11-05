<?php
/**
 * Install File
 * Does the stuff for the specific extensions
 *
 * @package     Advanced Module Manager
 * @version     2.0.2
 *
 * @author      Peter van Westen <peter@nonumber.nl>
 * @link        http://www.nonumber.nl
 * @copyright   Copyright © 2011 NoNumber! All Rights Reserved
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

// No direct access
defined( '_JEXEC' ) or die();

$name = 'Advanced Module Manager';
$alias = 'advancedmodules';
$ext = $name.' (admin component & system plugin)';

// COMPONENT
$states[] = installExtension( $alias, $name, 'component', array( 'link'=>'', 'admin_menu_link'=>'' ) );

// SYSTEM PLUGIN
$states[] = installExtension( $alias, 'System - '.$name, 'plugin', array( 'folder'=>'system' ) );

// Stuff to do after installation / update
// Joomal 1.6+
function afterInstall( &$db ) {
	$queries = array();

	// main table (not used in this version yet)
	$queries[] = "CREATE TABLE IF NOT EXISTS `#__advancedmodules` (
		`moduleid` int(11) NOT NULL default '0',
		`params` text NOT NULL,
		PRIMARY KEY (`moduleid`)
	) ENGINE=MyISAM CHARACTER SET `utf8`;";

	// hide admin menu
	$queries[] = "UPDATE `#__menu`
		SET	`parent_id` = 0
		WHERE `path` = 'advancedmodules'
		AND `type` = 'component'
		AND `client_id` = 1";

	foreach ( $queries as $query ) {
		$db->setQuery( $query );
		$db->query();
	}
}

// Joomal 1.5
function afterInstall_15( &$db ) {
	$queries = array();

	// main table (not used in this version yet)
	$queries[] = "CREATE TABLE IF NOT EXISTS `#__advancedmodules` (
		`moduleid` int(11) NOT NULL default '0',
		`params` text NOT NULL,
		PRIMARY KEY (`moduleid`)
	) ENGINE=MyISAM CHARACTER SET `utf8`;";

	// Rename limit variables to new assignment names
	$queries[] = "UPDATE `#__advancedmodules`
		SET	`params` = replace( replace( replace( replace( replace( replace( `params`,
			'\nlimit_', '\nassignto_' ),
			'_ids=', '_selection=' ),
			'on_children', 'assignto_menuitems_inc_children' ),
			'seccats', 'secscats' ),
			'\npublish_up', '\nassignto_date_publish_up' ),
			'\npublish_down', '\nassignto_date_publish_down' );";

	// remove the extra association table (from before v1.6.0)
	$queries[] = "DROP TABLE IF EXISTS `#__advancedmodules_menu`";

	// fix the published = 2 from the first patch version
	$queries[] = "UPDATE `#__modules`
		SET `published` = 1
		WHERE `published` = 2";

	// Rename old component name
	$queries[] = "UPDATE `#__components`
		SET	`name` = 'Advanced Module Manager',
			`admin_menu_alt` = 'Advanced Module Manager'
		WHERE `name` = 'Advanced Modules'";

	// Rename old plugin name
	$queries[] = "UPDATE `#__plugins`
		SET `name` = 'System - Advanced Module Manager'
		WHERE `name` = 'System - Advanced Modules'";

	foreach ( $queries as $query ) {
		$db->setQuery( $query );
		$db->query();
	}

	// FIX STUFF FROM OLDER VERSIONS
	fixOldDBs( $db );
	updateOldParams( $db );
}

function fixOldDBs( &$db ) {
	$query = "SHOW COLUMNS FROM `#__advancedmodules` LIKE 'id'";
	$db->setQuery( $query );
	$dofix = $db->loadResult();

	if ( $dofix ) {
		// Fix stuff in older database tables
		$query = "SELECT COUNT(*) as count, moduleid, id
			FROM `#__advancedmodules`
			GROUP BY moduleid
			HAVING count > 1";
		$db->setQuery( $query );
		$duplicates = $db->loadObjectList();
		foreach( $duplicates as $duplicate ) {
			$query = "DELETE FROM `#__advancedmodules`
				WHERE moduleid = ". (int) $duplicate->moduleid."
				AND id != ". (int) $duplicate->id;
			$db->setQuery( $query );
			$db->query();
		}

		$query = "ALTER TABLE `#__advancedmodules` DROP id";
		$db->setQuery( $query );
		$db->query();
	}
}
function updateOldParams( &$db ) {
	// move plugin params to component
	$query = "SELECT params FROM #__components
		WHERE `option` = 'com_advancedmodules'
		LIMIT 1
	";
	$db->setQuery( $query );
	$params = $db->loadResult();
	if ( strpos( $params, 'show_activemodules' ) === false ) {
		$query = "SELECT params FROM #__plugins
			WHERE `folder` = 'system'
			AND `element` = 'advancedmodules'
			LIMIT 1
		";
		$db->setQuery( $query );
		$plugin_params = $db->loadResult();
		$query = "UPDATE #__components
			SET `params` = ".$db->quote( trim( $params )."\n".trim( $plugin_params ) )."
			WHERE `option` = 'com_advancedmodules'
		";
		$db->setQuery( $query );
		$db->query();
		$query = "UPDATE #__plugins
			SET `params` = ''
			WHERE `folder` = 'system'
			AND `element` = 'advancedmodules'
		";
		$db->setQuery( $query );
		$db->query();
	}

	// Add assignto_menuitems params
	$query = 'SELECT * FROM #__advancedmodules';
	$db->setQuery( $query );
	$modules = $db->loadObjectList();
	foreach ( $modules as $module ) {
		if ( strpos( $module->params, 'assignto_menuitems=' ) === false ) {
			$assignto_menuitems = 2;

			// Check if old association table exists
			$db->setQuery( 'show tables like '.$db->quote( $db->getPrefix().'advancedmodules_menu' ) );
			$exists = $db->loadResult();
			if ( $exists ) {
				$query = 'SELECT menuid'
					.' FROM #__advancedmodules_menu'
					.' WHERE moduleid = '.(int) $module->moduleid;
				$db->setQuery( $query );
				$selections = $db->loadResultArray();

				if ( empty( $selections ) ) {
					$exists = 0;
				} else {
					$db->setQuery( $query );
					// Flip the menu selection
					// So when Advanced Menus is disabled, the excluded items are unselected
					$query = 'SELECT id'
						.' FROM #__menu'
						.' WHERE published = 1'
						;
					$db->setQuery( $query );
					$menuitems = $db->loadResultArray();
					$selections = array_diff( $menuitems, $selections );
				}
			}
			if ( !$exists ) {
				$assignto_menuitems = 1;

				$query = 'SELECT menuid'
					.' FROM #__modules_menu'
					.' WHERE moduleid = '.(int) $module->moduleid;
				$db->setQuery( $query );
				$selections = $db->loadResultArray();

				if ( !empty( $selections ) ) {
					if ( $selections['0'] == 0 ) {
						$assignto_menuitems = 0;
					}
				}
			}
			$params = $module->params
				."\n".'assignto_menuitems='.$assignto_menuitems
				."\n".'assignto_menuitems_selection='.implode( '|', $selections );
			$query = 'UPDATE #__advancedmodules'
				.' SET params = '.$db->quote( $params )
				.' WHERE moduleid = '.(int) $module->moduleid
				;
			$db->setQuery( $query );
			$db->query();

			// delete old module to menu item associations
			$query = 'DELETE FROM #__modules_menu'
				.' WHERE moduleid = '.(int) $module->moduleid
				;
			$db->setQuery( $query );
			$db->query();

			$selections = array_unique( $selections );
			foreach ( $selections as $menuid ) {
				// this check for the blank spaces in the select box that have been added for cosmetic reasons
				if ( (int) $menuid >= 0 ) {
					// assign new module to menu item associations
					$query = 'INSERT INTO #__modules_menu'
						.' SET moduleid = '.(int) $module->moduleid .', menuid = '.(int) $menuid
						;
					$db->setQuery( $query );
					$db->query();
				}
			}
		}
	}
}