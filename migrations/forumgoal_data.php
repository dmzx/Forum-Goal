<?php
/**
*
* @package phpBB Extension - Forum Goal
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\forumgoal\migrations;

class forumgoal_data extends \phpbb\db\migration\migration
{
	public function update_data()
	{
		return array(
			// Add configs
			array('config.add', array('forum_goals_display_top', 0)),
			array('config.add', array('forum_goals_display_bottom', 1)),
			array('config.add', array('forum_goals_posts_enable', 0)),
			array('config.add', array('forum_goals_posts', 0)),
			array('config.add', array('forum_goals_topics_enable', 0)),
			array('config.add', array('forum_goals_topics', 0)),
			array('config.add', array('forum_goals_users_enable', 0)),
			array('config.add', array('forum_goals_users', 0)),
			array('config.add', array('forum_goals_files_enable', 0)),
			array('config.add', array('forum_goals_files', 0)),
			array('config.add', array('forum_goals_gallery_enable', 0)),
			array('config.add', array('forum_goals_gallery', 0)),
			array('config.add', array('forum_goals_views_enable', 0)),
			array('config.add', array('forum_goals_views', 0)),
		);
	}
}
