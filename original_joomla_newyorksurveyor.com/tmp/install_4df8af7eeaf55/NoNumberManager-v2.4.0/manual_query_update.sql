--
-- Database query file
-- For manual update
--
-- @package     NoNumber! Extension Manager
-- @version     2.4.0
--
-- @author      Peter van Westen <peter@nonumber.nl>
-- @link        http://www.nonumber.nl
-- @copyright   Copyright © 2011 NoNumber! All Rights Reserved
-- @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
--

--
-- NOTE: The queries assume you are using 'jos_' as the prefix.
--       Please change that if you are using another prefix.
--

--
-- Remove admin component link in menus
--
UPDATE `jos_components` SET `link` = '' WHERE `option` = 'com_contenttemplater';

--
-- Repair old param name 'content_title' -> 'title'
--
UPDATE `jos_contenttemplater` set `params` = replace( `params`, 'content_title=', 'title=' );

--
-- Repair old param name 'content_alias' -> 'alias'
--
UPDATE `jos_contenttemplater` set `params` = replace( `params`, 'content_alias=', 'alias=' );

--
-- Delete old submenu links
--
DELETE FROM `jos_components` WHERE `option` = 'com_nonumbermanager' AND parent != 0;

--
-- Insert the system plugin record for NoNumber! Elements (if not exists)
--
INSERT IGNORE INTO `jos_plugins` (`id`, `name`, `element`, `folder`, `access`, `ordering`, `published`, `iscore`, `client_id`, `checked_out`, `checked_out_time`, `params`) VALUES
( ( SELECT `id` FROM `jos_plugins` as x WHERE x.`element` = 'nonumberelements' ), 'System - NoNumber! Elements', 'nonumberelements', 'system', 0, 0, 1, 0, 0, 0, 0, '');
--
-- If above line causes an error, try this instead:
--
-- DELETE FROM `jos_plugins` WHERE `element` = 'nonumberelements'
-- INSERT INTO `jos_plugins` (`id`, `name`, `element`, `folder`, `access`, `ordering`, `published`, `iscore`, `client_id`, `checked_out`, `checked_out_time`, `params`) VALUES
-- ( NULL, 'System - NoNumber! Elements', 'nonumberelements', 'system', 0, 0, 1, 0, 0, 0, 0, '');