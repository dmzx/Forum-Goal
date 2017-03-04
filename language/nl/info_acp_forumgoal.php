<?php
/**
*
* @package phpBB Extension - Forum Goal
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* Nederlandse vertaling @ Solidjeuh <https://www.froddelpower.be>
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
	'FORUM_GOALS_SETTINGS' 		=> 'Forum Doel Instellingen',
	'FGDT_ENABLE'		 		=> 'Toon Forum Doelen bovenaan de forum index',
	'FGDB_ENABLE'		 		=> 'Toon Forum Doelen onderaan de forum index',
	'FGP_ENABLE' 				=> 'Schakel Forum Post doelen in of uit',
	'FGP_NUMBER'				=> 'Stel het doel in voor forum Berichten',
	'FGT_ENABLE' 				=> 'Schakel Forum Topic Doelen in of uit',
	'FGT_NUMBER'				=> 'Stel het doel in voor Forum Onderwerpen',
	'FUG_ENABLE' 				=> 'Schakel Forum Gebruiker doel in of uit',
	'FUG_NUMBER'				=> 'Stel het doel in voor Forum Gebruikers',
	'FFG_ENABLE' 				=> 'Schakel Forum Bestanden doel in of uit',
	'FFG_NUMBER'				=> 'Stel het doel in voor Forum Bestanden (Bijlagen)',
	'FTVG_ENABLE' 				=> 'Schakel Aantal Keer Bekeken Forum doel in of uit',
	'FTVG_NUMBER'				=> 'Stel het doel in voor Forum Aantal Keer Bekeken',
	'FGG_ENABLE' 				=> 'Schakel Forum Afbeeldingen doel in of uit',
	'FGG_NUMBER'				=> 'Stel het doel in voor Forum Afbeeldingen (phpBB Gallery ADDON)',
));
