--
-- Database query file
-- For manual installation
--
-- @package     NoNumber! Extension Manager
-- @version     2.4.1
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
-- Table structure for table `jos_nonumbermanager`
--
CREATE TABLE IF NOT EXISTS `jos_nonumberlicenses` (
	  `extension` varchar(255) NOT NULL,
	  `code` varchar(255) NOT NULL,
	  PRIMARY KEY  (`extension`)
) ENGINE=MyISAM CHARACTER SET `utf8`;

--
-- Insert the component records
--
INSERT INTO `jos_components` (`id`, `name`, `link`, `menuid`, `parent`, `admin_menu_link`, `admin_menu_alt`, `option`, `ordering`, `admin_menu_img`, `iscore`, `params`, `enabled`) VALUES
( NULL, 'NoNumber! Extension Manager', '', 0, 0, 'option=com_nonumbermanager', 'NoNumber! Extension Manager', 'com_nonumbermanager', 0, 'components/com_nonumbermanager/images/icon-nonumbermanager.png', 0, '', 1 );

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