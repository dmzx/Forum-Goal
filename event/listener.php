<?php
/**
*
* @package phpBB Extension - Forum Goal
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\forumgoal\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\db\driver\driver_interface */
	protected $db;

	/** @var \phpbb\user */
	protected $user;

	public function __construct(
		\phpbb\template\template $template,
		\phpbb\config\config $config,
		\phpbb\db\driver\driver_interface $db,
		\phpbb\user $user
	)
	{
		$this->template = $template;
		$this->config 	= $config;
		$this->db 		= $db;
		$this->user 	= $user;
	}

	static public function getSubscribedEvents()
	{
		return array(
			'core.page_header'	=> 'add_page_header_link',
		);
	}

	public function add_page_header_link($event)
	{
		$this->user->add_lang_ext('dmzx/forumgoal', 'common');

		if (!empty($this->config['forum_goals_posts_enable']) &&	$this->config['forum_goals_posts'] > 0)
		{
			$total_posts = $this->config['num_posts'];
			$forum_goals_posts_percent = ($total_posts * 100) / $this->config['forum_goals_posts'];
			$forum_goals_posts_rest = $this->config['forum_goals_posts'] - $total_posts;

			$this->template->assign_vars(array(
				'FPG_ENABLE'					=> $this->config['forum_goals_posts_enable'],
				'FORUM_POST_GOAL'				=> number_format($this->config['forum_goals_posts']),
				'FORUM_POST_PERCENT'			=> round($forum_goals_posts_percent),
				'FORUM_POST_REST'				=> number_format($forum_goals_posts_rest),
			 ));
		}

		if (!empty($this->config['forum_goals_topics_enable']) &&	$this->config['forum_goals_topics'] > 0)
		{
			$total_topics = $this->config['num_topics'];
			$forum_goals_topics_percent = ($total_topics * 100) / $this->config['forum_goals_topics'];
			$forum_goals_topics_rest = $this->config['forum_goals_topics'] - $total_topics;

			$this->template->assign_vars(array(
				'FTG_ENABLE'					=> $this->config['forum_goals_topics_enable'],
				'FORUM_TOPIC_GOAL'				=> number_format($this->config['forum_goals_topics']),
				'FORUM_TOPIC_PERCENT'			=> round($forum_goals_topics_percent),
				'FORUM_TOPIC_REST'				=> number_format($forum_goals_topics_rest),
			));
		}

		if (!empty($this->config['forum_goals_users_enable']) &&	$this->config['forum_goals_users'] > 0)
		{
			$total_users = $this->config['num_users'];
			$forum_goals_users_percent = ($total_users * 100) / $this->config['forum_goals_users'];
			$forum_goals_users_rest = $this->config['forum_goals_users'] - $total_users;

			$this->template->assign_vars(array(
				'FUG_ENABLE'					=> $this->config['forum_goals_users_enable'],
				'FORUM_USER_GOAL'				=> number_format($this->config['forum_goals_users']),
				'FORUM_USER_PERCENT'			=> round($forum_goals_users_percent),
				'FORUM_USER_REST'				=> number_format($forum_goals_users_rest),
			));
		}

		if (!empty($this->config['forum_goals_files_enable']) &&	$this->config['forum_goals_files'] > 0)
		{
			$total_files	= $this->config['num_files'];
			$l_total_file_s = ($total_files == 0) ? 'TOTAL_FILES_ZERO' : 'TOTAL_FILES_OTHER';
			$forum_goals_files_percent = ($total_files * 100) / $this->config['forum_goals_files'];
			$forum_goals_files_rest = $this->config['forum_goals_files'] - $total_files;

			$this->template->assign_vars(array(
				'FFG_ENABLE'					=> $this->config['forum_goals_files_enable'],
				'TOTAL_FILES'					=> sprintf($this->user->lang[$l_total_file_s], number_format($total_files)),
				'FORUM_FILES_GOAL'				=> number_format($this->config['forum_goals_files']),
				'FORUM_FILES_PERCENT'			=> round($forum_goals_files_percent),
				'FORUM_FILES_REST'				=> number_format($forum_goals_files_rest),
			));
		}

		if ((class_exists('phpbb_gallery_integration')) && !empty($this->config['forum_goals_gallery_enable']) &&	$this->config['forum_goals_gallery'] > 0)
		{
			$forum_goals_gallery_percent = (phpbb_gallery_config::get('num_images') * 100) / $this->config['forum_goals_gallery'];
			$forum_goals_gallery_rest = $this->config['forum_goals_gallery'] - phpbb_gallery_config::get('num_images');

			$this->template->assign_vars(array(
				'FGG_ENABLE'					=> $this->config['forum_goals_gallery_enable'],
				'FORUM_GALLERY_GOAL'			=> number_format($this->config['forum_goals_gallery']),
				'FORUM_GALLERY_PERCENT'			=> round($forum_goals_gallery_percent),
				'FORUM_GALLERY_REST'			=> number_format($forum_goals_gallery_rest),
			));
		}

		if (!empty($this->config['forum_goals_views_enable']) &&	$this->config['forum_goals_views'] > 0)
		{
			$sql = 'SELECT SUM(topic_views) AS count
				FROM ' . TOPICS_TABLE . '
				WHERE topic_posts_approved = 1';
			$result = $this->db->sql_query($sql);
			$total_views = (int) $this->db->sql_fetchfield('count');

			$forum_goals_views_percent = ($total_views * 100) / $this->config['forum_goals_views'];
			$forum_goals_views_rest = $this->config['forum_goals_views'] - $total_views;

			$this->template->assign_vars(array(
				'FTVG_ENABLE'					=> $this->config['forum_goals_views_enable'],
				'TOTAL_VIEWS'					=> $total_views,
				'FORUM_VIEW_GOAL'				=> number_format($this->config['forum_goals_views']),
				'FORUM_VIEW_PERCENT'			=> round($forum_goals_views_percent),
				'FORUM_VIEW_REST'				=> number_format($forum_goals_views_rest),
			));
		}

		if (!empty($this->config['donation_goal_enable']) &&	$this->config['donation_goal'] > 0)
		{
			$donation_goal_number = ($this->config['donation_achievement'] * 100) / $this->config['donation_goal'];
			$donation_goal_rest = $this->config['donation_goal'] - $this->config['donation_achievement'];

			$this->template->assign_vars(array(
				'DONATION_GOAL_NUMBER'			=> number_format($donation_goal_number),
				'DONATION_GOAL_REST'			=> number_format($donation_goal_rest),
			));
		}

		$this->template->assign_vars(array(
			'FORUM_GOAL_TOP'				=> (!empty($this->config['forum_goals_display_top'])) ? true : false,
			'FORUM_GOAL_BOTTOM'				=> (!empty($this->config['forum_goals_display_bottom'])) ? true : false,
		));
	}
}
