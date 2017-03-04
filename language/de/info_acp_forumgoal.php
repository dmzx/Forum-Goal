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
	'FORUM_GOALS_SETTINGS' 		=> 'Forum Goal Einstellungen',
	'FGDT_ENABLE'		 		=> 'Zeige Forenziele oben auf der Indexseite an',
	'FGDB_ENABLE'		 		=> 'Zeige Forenziele unten auf der Indexseite an',
	'FGP_ENABLE' 				=> 'Aktiviere oder deaktiviere Foren-Beitragsziel',
	'FGP_NUMBER'				=> 'Setze das Ziel für Forenbeiträge',
	'FGT_ENABLE' 				=> 'Aktiviere oder deaktiviere Foren-Themenziel',
	'FGT_NUMBER'				=> 'Setze das Ziel für Forenthemen',
	'FUG_ENABLE' 				=> 'Aktiviere oder deaktiviere Foren-Benutzerziel',
	'FUG_NUMBER'				=> 'Setze das Ziel für Forenbenutzer',
	'FFG_ENABLE' 				=> 'Aktivere oder deaktivere Foren-Dateienziel',
	'FFG_NUMBER'				=> 'Setze das Ziel für Forendateien (Dateianhänge)',
	'FTVG_ENABLE' 				=> 'Aktiviere oder deaktiviere Foren-Aufrufeziel',
	'FTVG_NUMBER'				=> 'Setze das Ziel für Forenaufrufe',
	'FGG_ENABLE' 				=> 'Aktiviere oder deaktiviere Foren-Bilderziel',
	'FGG_NUMBER'				=> 'Setze das Ziel für Forenbilder (phpBB Gallery ADDON)',
));
