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
	'FORUM_GOALS_SETTINGS' 		=> 'Forum Hedefleri Ayarı',
	'FGDT_ENABLE'		 		=> 'Hedefleri anasayfanın üst kısmında göster',
	'FGDB_ENABLE'		 		=> 'Hedefleri anasayfanın alt kısmında göster',
	'FGP_ENABLE' 				=> 'Hedeflenen mesaj sayısını etkinleştirin veya devre dışı bırakın',
	'FGP_NUMBER'				=> 'Mesajlar için hedef belirleyin',
	'FGT_ENABLE' 				=> 'Hedeflenen konu sayısını etkinleştirin veya devre dışı bırakın',
	'FGT_NUMBER'				=> 'Konular için hedef belirleyin',
	'FUG_ENABLE' 				=> 'Hedeflenen kullanıcı sayısını etkinleştirin veya devre dışı bırakın',
	'FUG_NUMBER'				=> 'Kullanıcı sayısı için hedef belirleyin',
	'FFG_ENABLE' 				=> 'Hedeflenen dosya sayısını etkinleştirin veya devre dışı bırakın',
	'FFG_NUMBER'				=> 'Dosya sayısı için hedef belirleyin (Ekler)',
	'FTVG_ENABLE' 				=> 'Hedefleri görüntülemeyi etkinleştirin veya devre dışı bırakın',
	'FTVG_NUMBER'				=> 'Forum görüntüleme için hedef belirleyin',
	'FGG_ENABLE' 				=> 'Hedeflenen resim sayısını etkinleştirin veya devre dışı bırakın',
	'FGG_NUMBER'				=> 'Resim sayısı için hedef belirleyin',
));
