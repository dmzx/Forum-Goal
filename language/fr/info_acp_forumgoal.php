<?php
/**
*
* @package phpBB Extension - Forum Goal
* French translation by Taka51 (http://webdvdbdhd.com)
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
	'FORUM_GOALS_SETTINGS' 		=> 'Paramétres des Objectifs du Forum',
	'FGDT_ENABLE'		 		=> 'Afficher les Objectifs du Forum en haut de l\'index du forum',
	'FGDB_ENABLE'		 		=> 'Afficher les Objectifs du Forum en bas de l\'index du forum',
	'FGP_ENABLE' 				=> 'Activer où Désactiver les objectifs de messages',
	'FGP_NUMBER'				=> 'Fixé pour objectif les messages du forum',
	'FGT_ENABLE' 				=> 'Activer où Désactiver les objectifs de sujets',
	'FGT_NUMBER'				=> 'Fixé pour objectif les sujets du forum',
	'FUG_ENABLE' 				=> 'Activer où Désactiver les objectifs de membres',
	'FUG_NUMBER'				=> 'Fixé pour objectif les membres du forum',
	'FFG_ENABLE' 				=> 'Activer où Désactiver les objectifs de fichier joint',
	'FFG_NUMBER'				=> 'Fixé pour objectif les fichiers joints du forum',
	'FTVG_ENABLE' 				=> 'Activer où Désactiver les objectifs de vues',
	'FTVG_NUMBER'				=> 'Fixé pour objectif la vue du forum',
	'FGG_ENABLE' 				=> 'Activer où Désactiver les objectifs d\image',
	'FGG_NUMBER'				=> 'Fixé pour objectif les images du forum (Addon phpBB Gallery)',
));