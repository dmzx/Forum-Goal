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