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

class acp_listener implements EventSubscriberInterface
{
	static public function getSubscribedEvents()
	{
		return array(
			'core.acp_board_config_edit_add'	=>	'add_options',
		);
	}

	public function add_options($event)
	{
		if (($event['mode'] == 'features' || $event['mode'] == 'load') && isset($event['display_vars']['vars']['load_jumpbox']))
		{
			// Store display_vars event in a local variable
			$display_vars = $event['display_vars'];

			// Define config vars
			$config_vars = array(
				'legend4'						=> 'FORUM_GOALS_SETTINGS',
				'forum_goals_display_top'		=> array('lang' => 'FGDT_ENABLE',	'validate' => 'bool',	'type' => 'radio:yes_no', 'explain' => false),
				'forum_goals_display_bottom'	=> array('lang' => 'FGDB_ENABLE',	'validate' => 'bool',	'type' => 'radio:yes_no', 'explain' => false),
				'forum_goals_posts_enable'		=> array('lang' => 'FGP_ENABLE',	'validate' => 'bool',	'type' => 'radio:yes_no', 'explain' => false),
				'forum_goals_posts'				=> array('lang' => 'FGP_NUMBER',	'validate' => 'int',	'type' => 'text:15:8', 'explain' => false),
				'forum_goals_topics_enable'		=> array('lang' => 'FGT_ENABLE',	'validate' => 'bool',	'type' => 'radio:yes_no', 'explain' => false),
				'forum_goals_topics'			=> array('lang' => 'FGT_NUMBER',	'validate' => 'int',	'type' => 'text:15:8', 'explain' => false),
				'forum_goals_users_enable'		=> array('lang' => 'FUG_ENABLE',	'validate' => 'bool',	'type' => 'radio:yes_no', 'explain' => false),
				'forum_goals_users'				=> array('lang' => 'FUG_NUMBER',	'validate' => 'int',	'type' => 'text:15:8', 'explain' => false),
				'forum_goals_files_enable'		=> array('lang' => 'FFG_ENABLE',	'validate' => 'bool',	'type' => 'radio:yes_no', 'explain' => false),
				'forum_goals_files'				=> array('lang' => 'FFG_NUMBER',	'validate' => 'int',	'type' => 'text:15:8', 'explain' => false),
				'forum_goals_views_enable'		=> array('lang' => 'FTVG_ENABLE',	'validate' => 'bool',	'type' => 'radio:yes_no', 'explain' => false),
				'forum_goals_views'				=> array('lang' => 'FTVG_NUMBER',	'validate' => 'int',	'type' => 'text:15:8', 'explain' => false),
			);

			$display_vars['vars'] = phpbb_insert_config_array($display_vars['vars'], $config_vars, array('after' => 'load_cpf_viewtopic'));

			// Update the display_vars	event with the new array
			$event['display_vars'] = array('title' => $display_vars['title'], 'vars' => $display_vars['vars']);
		}
	}
}
