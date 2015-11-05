--
-- Database query file
-- For manual installation
--
-- @package     Tabber
-- @version     1.5.2
--
-- @author      Peter van Westen <peter@nonumber.nl>
-- @link        http://www.nonumber.nl
-- @copyright   Copyright © 2011 NoNumber! All Rights Reserved
-- @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
--

--
-- NOTE 1: These queries are for Joomla 1.5 setups
-- NOTE 2: The queries assume you are using 'jos_' as the prefix.
--         Please change that if you are using another prefix.
--

--
-- Insert the editor button plugin record
--
INSERT INTO `jos_plugins` (`id`, `name`, `element`, `folder`, `access`, `ordering`, `published`, `iscore`, `client_id`, `checked_out`, `checked_out_time`, `params`) VALUES
(NULL, 'Editor Button - Tabber', 'tabber', 'editors-xtd', 0, 0, 1, 0, 0, 0, 0, '');

--
-- Insert the system plugin record
--
INSERT INTO `jos_plugins` (`id`, `name`, `element`, `folder`, `access`, `ordering`, `published`, `iscore`, `client_id`, `checked_out`, `checked_out_time`, `params`) VALUES
(NULL, 'System - Tabber', 'tabber', 'system', 0, 0, 1, 0, 0, 0, 0, '');

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