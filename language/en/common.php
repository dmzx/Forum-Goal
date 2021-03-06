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
	'FORUM_GOALS'				=> 'Forum Goals',
	'TOTAL_FORUM_POST_GOAL'		=> 'Post goal',
	'GOAL_REMAINING'			=> 'Remaining',
	'GOAL_REMAINING_ZERO'		=> 'Goal reached!',
	'TOTAL_FORUM_TOPIC_GOAL'	=> 'Topic goal',
	'TOTAL_FORUM_USER_GOAL'		=> 'User goal',
	'TOTAL_FORUM_FILES_GOAL'	=> 'File goal',
	'TOTAL_FORUM_GALLERY_GOAL'	=> 'Image goal',
	'TOTAL_FILES_OTHER'			=> 'Total files <strong>%d</strong>',
	'TOTAL_FILES_ZERO'			=> 'Total files <strong>0</strong>',
	'TOTAL_FORUM_VIEW_GOAL'		=> 'Views goal',
	'TOTAL_FORUM_VIEWS'			=> 'Total views',
	'TOTAL_FORUM_DONATION_GOAL'	=> 'Donation goal',
	'TOTAL_FORUM_DONATIONS'		=> 'Total donations',
));
