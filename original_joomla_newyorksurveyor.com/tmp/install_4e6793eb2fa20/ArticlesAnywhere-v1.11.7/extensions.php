<?php
/**
 * Extension Install File
 * Does the stuff for the specific extensions
 *
 * @package     Articles Anywhere
 * @version     1.11.7
 *
 * @author      Peter van Westen <peter@nonumber.nl>
 * @link        http://www.nonumber.nl
 * @copyright   Copyright © 2011 NoNumber! All Rights Reserved
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

// No direct access
defined( '_JEXEC' ) or die();

$name = 'Articles Anywhere';
$alias = 'articlesanywhere';
$ext = $name.' (system plugin)';

// SYSTEM PLUGIN
$states[] = installExtension( $alias, 'System - '.$name, 'plugin', array( 'folder'=>'system' ) );

// EDITOR BUTTON PLUGIN
$states[] = installExtension( $alias, 'Editor Button - '.$name, 'plugin', array( 'folder'=>'editors-xtd' ) );