<?php
/**
*
* @package phpBB Extension - Forum Goal
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'FORUM_GOALS_SETTINGS' 		=> 'Forum Goal Settings',
	'FGDT_ENABLE'		 		=> 'Display Forum Goals at the top of forum index',
	'FGDB_ENABLE'		 		=> 'Display Forum Goals at the bottom of forum index',
	'FGP_ENABLE' 				=> 'Enable or disable Forum Post Goal',
	'FGP_NUMBER'				=> 'Set the goal for Forum Posts',
	'FGT_ENABLE' 				=> 'Enable or disable Forum Topic Goal',
	'FGT_NUMBER'				=> 'Set the goal for Forum Topics',
	'FUG_ENABLE' 				=> 'Enable or disable Forum User Goal',
	'FUG_NUMBER'				=> 'Set the goal for Forum Users',
	'FFG_ENABLE' 				=> 'Enable or disable Forum File Goal',
	'FFG_NUMBER'				=> 'Set the goal for Forum Files (Attachments)',
	'FTVG_ENABLE' 				=> 'Enable or disable Forum Views Goal',
	'FTVG_NUMBER'				=> 'Set the goal for Forum Views',
	'FGG_ENABLE' 				=> 'Enable or disable Forum Image Goal',
	'FGG_NUMBER'				=> 'Set the goal for Forum Images (phpBB Gallery ADDON)',
));
