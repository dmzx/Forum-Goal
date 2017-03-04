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
	'FORUM_GOALS_SETTINGS' 		=> 'Ajustes de Objetivos del Foro',
	'FGDT_ENABLE'		 		=> 'Mostrar los objetivos del foro en la parte superior del índice del foro',
	'FGDB_ENABLE'		 		=> 'Mostrar los objetivos del foro en la parte inferior del índice del foro',
	'FGP_ENABLE' 				=> 'Habilitar o deshabilitar Objetivo de mensajes del foro',
	'FGP_NUMBER'				=> 'Establecer el objetivo para mensajes del foro',
	'FGT_ENABLE' 				=> 'Habilitar o deshabilitar Objetivo de temas del foro',
	'FGT_NUMBER'				=> 'Establecer el objetivo para temas del foro',
	'FUG_ENABLE' 				=> 'Habilitar o deshabilitar Objetivo de usuarios del foro',
	'FUG_NUMBER'				=> 'Establecer el objetivo para usuarios del foro',
	'FFG_ENABLE' 				=> 'Habilitar o deshabilitar Objetivo de archivos del foro',
	'FFG_NUMBER'				=> 'Establecer el objetivo para archivos del foro (Adjuntos)',
	'FTVG_ENABLE' 				=> 'Habilitar o deshabilitar Objetivo de vistas del foro',
	'FTVG_NUMBER'				=> 'Establecer el objetivo para vistas del foro',
	'FGG_ENABLE' 				=> 'Habilitar o deshabilitar Objetivo de imágenes del foro',
	'FGG_NUMBER'				=> 'Establecer el objetivo para imágenes del foro (phpBB Gallery ADDON)',
));
