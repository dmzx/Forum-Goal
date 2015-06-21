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
	'TOTAL_FORUM_DONATION_GOAL'		=> 'Donation goal',
	'TOTAL_FORUM_DONATIONS'			=> 'Total donations',
	'TOTAL_FORUM_DONATION_GOAL'		=> 'Donation goal',
	'TOTAL_FORUM_DONATIONS'		 => 'Total donations',
));