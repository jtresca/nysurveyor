<?php
/**
 * Install File
 * Does the stuff for the specific extensions
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

$name = 'Slider';
$alias = 'slider';
$ext = $name.' (editor button & system plugin)';

// EDITOR BUTTON PLUGIN
$states[] = installExtension( $alias, 'System - '.$name, 'plugin', array( 'folder'=>'system' ) );
$states[] = installExtension( $alias, 'Editor Button - '.$name, 'plugin', array( 'folder'=>'editors-xtd' ) );