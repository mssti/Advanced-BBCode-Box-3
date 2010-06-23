<?php
/**
* @package: phpBB3 :: Advanced BBCode box 3 -> acp
* @version: $Id: acp_abbcode.php, v 1.0.8 2008/03/31 03:01:00 leviatan21 Exp $
* @copyright: leviatan21 < info@mssti.com > (Gabriel) http://www.mssti.com/phpbb3/
* @license: http://opensource.org/licenses/gpl-license.php GNU Public License 
* @author: leviatan21 - http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=345763
*
**/

/**
* @ignore
**/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (!class_exists('abbcode'))
{
	include($phpbb_root_path . 'includes/abbcode.' . $phpEx);
}

/**
* @package acp
**/
class acp_abbcodes extends abbcode
{
	var $u_action;
	var $u_back;
	var $submit;
	
	function main($id, $mode)
	{
		global $user, $db, $phpbb_root_path;
		
		$user->add_lang(array('acp/styles', 'mods/acp_abbcodes', 'mods/abbcode'));
		
		$this->tpl_name		= 'acp_abbcodes';
		$this->page_title	= 'ACP_ABBCODES';
		
		$action				= request_var('action', '');
		$style_id			= request_var('id', 0);
		$bbcode				= request_var('bbcode', '');
		
		$this->u_back 		= $this->u_action;
		$this->submit		= (isset($_POST['submit'])) ? true : false;
		
		// Chech if ABBC3 is enabled or disabled in each styles
		$sql = 'SELECT s.style_id, c.theme_data, c.theme_path, c.theme_name, c.theme_mtime, i.*, t.template_path
			FROM ' . STYLES_TABLE . ' s, ' . STYLES_TEMPLATE_TABLE . ' t, ' . STYLES_THEME_TABLE . ' c, ' . STYLES_IMAGESET_TABLE . ' i
			WHERE s.style_id = ' . $style_id . '
				AND t.template_id = s.template_id
				AND c.theme_id = s.theme_id
				AND i.imageset_id = s.imageset_id';
		$result = $db->sql_query($sql);
		$template_row = $db->sql_fetchrow($result);
		$db->sql_freeresult($result);
		
		$this->abbcode_init();
		$this->abbcode_dir = "{$phpbb_root_path}styles/" . $template_row['template_path'] . "/imageset/abbcode";
		$this->obtain_abbcodes_config();
		
		// Execute overall actions
		switch ($mode)
		{
			case 'settings':
				
				switch ($action)
				{
					case 'details':
						$this->template_details($id, $mode, $action, $style_id);
						break;
					
					case 'refresh':
						$this->template_refresh($id, $mode, $action, $style_id);
						break;
					
					case 'purge_cache':
						$this->purge_cache($id, $mode, $action, $style_id);
						break;
					
					case 'reset_config':
						$this->bbcodes_reset($id, $mode, $action, $style_id);
						break;
					
		// EX case 'bbcodes' :
					case 'reset_abbcodes':
						$this->bbcodes_reset($id, $mode, $action, $style_id);
					// no break;
					case 'move_up':
					case 'move_down':
					// no break;
					case 'edit':
						$this->bbcodes_edit($id, $mode, $action, $style_id, $bbcode);
						break;
					
				}
			$this->frontend('settings', array('details','edit'), array('refresh'));
			break;
		}
	}

	/**
	* Build Frontend with supplied options
	**/
	function frontend($mode, $options = '', $actions = '')
	{
		global $user, $template, $db, $config, $phpbb_root_path, $phpEx;
		
		$style_count = array();
		
		// Count used style
		$sql = 'SELECT user_style, COUNT(user_style) AS style_count
				FROM ' . USERS_TABLE . '
				GROUP BY user_style';
		$result = $db->sql_query($sql);
		
		while ($row = $db->sql_fetchrow($result))
		{
			$style_count[$row['user_style']] = $row['style_count'];
		}
		$db->sql_freeresult($result);
		
		$l_prefix = strtoupper($mode);
		
		$template->assign_vars(array(
			'S_FRONTEND'		=> true,
			'L_TITLE'			=> $user->lang['ACP_ABBCODES'],
			'L_EXPLAIN'			=> $user->lang['ACP_ABBCODES_EXPLAIN'],
			'L_NAME'			=> $user->lang['STYLE_NAME'],
			'U_ACTION'			=> $this->u_action,
			'S_FOUNDER'			=> ($user->data['user_type'] == USER_FOUNDER) ? true : false,
			'NO_FOUNDER'		=> $user->lang['NO_AUTH_OPERATION']
		));
		
		$sql = 'SELECT *
				FROM ' .STYLES_TABLE ;
		$result = $db->sql_query($sql);
		
		while ($row = $db->sql_fetchrow($result))
		{
			// Chech if ABBC3 is enabled or disabled in each styles
			$oridir = $this->abbcode_dir;
			$this->abbcode_dir = "{$phpbb_root_path}styles/" . $row['style_name'] . "/imageset/abbcode";
			$this->obtain_abbcodes_config();
			$stylevis = ($this->abbcode_config['ABBC3_MOD']) ? 'activated' : 'deactivated';
			$this->abbcode_dir = $oridir;
			
			$s_options = array();
			foreach ($options as $option)
			{
				$s_options[] = '<a href="' . $this->u_action . "&amp;action=$option&amp;id=" . $row['style_id'] . '">' . $user->lang[strtoupper($option)] . '</a>';
			}
			
			$s_actions = array();
			foreach ($actions as $option)
			{
				// get the template ID for refresh
				if ( $option == 'refresh')
				{
					$sql2 = 'SELECT *
							FROM ' . STYLES_TEMPLATE_TABLE . "
							WHERE template_name = '" . $row['style_name'] . "'";
					$result2 = $db->sql_query($sql2);
					$templaterow = $db->sql_fetchrow($result2);
					
					$s_actions[] = '<a href="' . $this->u_action . "&amp;action=$option&amp;id=" . $templaterow['template_id'] . '">' . $user->lang[strtoupper($option)] . '</a>';
				}
				else
				{
					$s_actions[] = '<a href="' . $this->u_action . "&amp;action=$option&amp;id=" . $row['style_id'] . '">' . $user->lang[strtoupper($option)] . '</a>';					
				}
			}
			
			$template->assign_block_vars('installed', array(
				'STYLE_NAME'			=> $row['style_name'],
				'S_DEFAULT_STYLE'		=> ($row['style_id'] == $config['default_style']) ? true : false,
				'STYLE_COUNT'			=> (isset($style_count[$row['style_id']])) ? $style_count[$row['style_id']] : 0,
				'L_STYLE_ACT_DEACT'		=> $user->lang['ABBCODES_' . strtoupper($stylevis)],
				
				'S_OPTIONS'				=> implode(' | ', $s_options),
				'S_ACTIONS'				=> implode(' | ', $s_actions),
				'U_PREVIEW'				=> append_sid("{$phpbb_root_path}posting.$phpEx", "style=" . $row['style_id'] . "&mode=post&f=2" ),
			));
		}
		$db->sql_freeresult($result);
	}

	/**
	* Enter description here...
	**/
	function template_refresh($id, $mode, $action, $style_id)
	{
		global $db, $user, $template, $phpbb_root_path, $phpbb_admin_path, $phpEx;
		
		include('acp_styles.' . $phpEx);
		
		$user->add_lang('acp/styles');
		
		$acp_styles = new acp_styles('styles', 'template', 'refresh', $style_id );
		
		$sql = 'SELECT *
				FROM ' . STYLES_TEMPLATE_TABLE . "
				WHERE template_id = $style_id";
		$result = $db->sql_query($sql);
		$template_row = $db->sql_fetchrow($result);
		$db->sql_freeresult($result);
		
		if (!$template_row)
		{
			trigger_error($user->lang['NO_TEMPLATE'] . adm_back_link($this->u_action), E_USER_WARNING);
		}
		//	http://ultimarena.net/adm/index.php?i=styles&mode=template&action=refresh&id=20

		if (confirm_box(true))
		{
			$template_refreshed = '';
			
			// Only refresh database if the template is stored in the database
			if ($template_row['template_storedb'] && file_exists("{$phpbb_root_path}styles/{$template_row['template_path']}/template/"))
			{
				$filelist = array('' => array());
				
				$sql = 'SELECT template_filename, template_mtime
						FROM ' . STYLES_TEMPLATE_DATA_TABLE . "
						WHERE template_id = $style_id";
				$result = $db->sql_query($sql);
				
				while ($row = $db->sql_fetchrow($result))
				{
//					if (@filemtime("{$phpbb_root_path}styles/{$template_row['template_path']}/template/" . $row['template_filename']) > $row['template_mtime'])
//					{
						// get folder info from the filename
						if (($slash_pos = strrpos($row['template_filename'], '/')) === false)
						{
							$filelist[''][] = $row['template_filename'];
						}
						else
						{
							$filelist[substr($row['template_filename'], 0, $slash_pos + 1)][] = substr($row['template_filename'], $slash_pos + 1, strlen($row['template_filename']) - $slash_pos - 1);
						}
//					}
				}
				$db->sql_freeresult($result);
				
				$acp_styles->store_templates('update', $style_id, $template_row['template_path'], $filelist);
				unset($filelist);
				
				$template_refreshed = $user->lang['TEMPLATE_REFRESHED'] . '<br />';
				add_log('admin', 'LOG_TEMPLATE_REFRESHED', $template_row['template_name']);
			}
			
			$acp_styles->clear_template_cache($template_row);
			
			trigger_error($template_refreshed . $user->lang['TEMPLATE_CACHE_CLEARED'] . adm_back_link($this->u_action));
		}
		else
		{
			confirm_box(false, ($template_row['template_storedb']) ? $user->lang['CONFIRM_TEMPLATE_REFRESH'] : $user->lang['CONFIRM_TEMPLATE_CLEAR_CACHE'], build_hidden_fields(array(
				'i'			=> $id,
				'mode'		=> $mode,
				'action'	=> $action,
				'id'		=> $style_id
			)),'confirm_body.html', "{$phpbb_admin_path}adm/index.$phpEx?i=$id&mode=$mode" );
		}
		
		return;
	}

	/**
	* Enter description here...
	**/
	function purge_cache($id, $mode, $action, $style_id)
	{
		global $user, $auth, $phpbb_admin_path, $phpEx;
		
		if ((int) $user->data['user_type'] !== USER_FOUNDER)
		{
			trigger_error($user->lang['NO_AUTH_OPERATION'] . adm_back_link($this->u_action), E_USER_WARNING);
		}
		
		if (confirm_box(true))
		{
			global $cache;
			$cache->purge();
			
			// Clear permissions
			$auth->acl_clear_prefetch();
			cache_moderators();
			
			add_log('admin', 'LOG_PURGE_CACHE');
			
			trigger_error( $user->lang['LOG_PURGE_CACHE'] . adm_back_link($this->u_action));
		}
		else
		{
			confirm_box(false, $user->lang['PURGE_CACHE_CONFIRM'], build_hidden_fields(array(
				'i'			=> $id,
				'mode'		=> $mode,
				'action'	=> $action,
				'id'		=> $style_id
			)),'confirm_body.html', "{$phpbb_admin_path}adm/index.$phpEx?i=$id&mode=$mode" );
		}
	}

	/**
	* Enter description here...
	* http://www.famfamfam.com/lab/icons/silk/
	**/
	function template_details($id, $mode, $action, $style_id)
	{
		global $db, $user, $template, $phpbb_root_path, $config;
		
		$this->page_title = 'ABBCODES_SETINGS';
		
		if (!$style_id)
		{
			trigger_error($user->lang['NO_IMAGESET'] . adm_back_link($this->u_action), E_USER_WARNING);
		}
		$sql = 'SELECT style_name, style_id
				FROM ' . STYLES_TABLE . '
				WHERE style_id = ' . $style_id;
		$result = $db->sql_query($sql);
		$template_row = $db->sql_fetchrow($result);
		$style_name = $template_row['style_name'];
		$db->sql_freeresult($result);
		
		$form_key = 'acp_abbcodes';
		add_form_key($form_key);
		
		$display_vars = array(
			'title'	=> 'ABBCODES_SETINGS',
			'lang'	=> array('mods/acp_abbcodes', 'acp/attachments'),
			'vars'	=> array(
				'legend1'				=> 'GENERAL_OPTIONS',
				'ABBC3_MOD'				=> array('lang' => 'ABBCODES_DISABLE',			'validate' => 'bool',	'type' => 'radio:yes_no',	'explain' => true),
				'ABBC3_BG'				=> array('lang' => 'ABBCODES_BG',				'validate' => 'string',	'type' => 'custom',			'function' => 'image_select', 'params' => array($this->abbcode_dir . '/images/bg', '{CONFIG_VALUE}', 'config_abbc3_bg', true, $this->u_action), 'explain' => true),
				'config_abbc3_bg'		=> false,
				'ABBC3_TAB'				=> array('lang' => 'ABBCODES_TAB',				'validate' => 'bool',	'type' => 'radio:yes_no',	'explain' => true, 'append' => '&nbsp;&nbsp;<span>[ <img src="' . $this->abbcode_dir . '/images/dots.gif" alt="" /> ]</span>'),
				'ABBC3_BOXRESIZE'		=> array('lang' => 'ABBCODES_BOXRESIZE',		'validate' => 'bool',	'type' => 'radio:yes_no',	'explain' => true),
				
				'legend2'				=> 'CAT_IMAGES',
				'ABBC3_RESIZE'			=> array('lang' => 'ABBCODES_RESIZE',			'validate' => 'bool', 	'type' => 'radio:yes_no',	'explain' => true),
				'ABBC3_RESIZE_METHOD'	=> array('lang' => 'ABBCODES_RESIZE_METHOD',	'validate' => 'string',	'type' => 'custom',			'function' => 'method_select', 'params' => array('{CONFIG_VALUE}', 'config_abbc3_method'), 'explain' => true),
				'ABBC3_GREYBOX'			=> array('lang' => 'ABBCODES_GREYBOX',			'validate' => 'bool',	'type' => 'radio:yes_no',	'explain' => true, 'append' => '&nbsp;&nbsp;<span>[ <a href="http://www.orangoo.com/labs/GreyBox/" target="_blank">GreyBox</a> ]</span>'),
				
				'ABBC3_MAX_IMG_WIDTH'	=> array('lang' => 'ABBCODES_MAX_IMAGE_SIZE',	'validate' => 'int',	'type' => 'text:7:15',		'explain' => true, 'append' => ' px'),
				'ABBC3_MAX_THUM_WIDTH'	=> array('lang' => 'ABBCODES_MAX_THUMB_WIDTH',	'validate' => 'int',	'type' => 'text:7:15',		'explain' => true, 'append' => ' px'),
				
				'legend3'				=> 'ABBCODES_CUSTOM_BBCODES',
				'ABBC3_CUSTOM_BBCODES'	=> array('lang' => 'ABBCODES_CUSTOM_BBCODES',	'validate' => 'bool',	'type' => 'radio:yes_no',	'explain' => true),
				
				'legend4'				=> 'ABBC3_BBVIDEO_TAG',
				'ABBC3_VIDEO'			=> array('lang' => 'ABBCODES_VIDEO_SIZE',		'validate' => 'int',	'type' => 'dimension:3:4',	'explain' => true, 'append' => ' px'),
				'ABBC3_VIDEO_width'		=> false,
				'ABBC3_VIDEO_height'	=> false,
				
				'legend5'				=> 'ABBC3_UPLOAD_MOVER',
				'UPLOAD_DIR'			=> array('lang'	=> 'UPLOAD_DIR',										'type' => 'string',			'explain' => true, 'append' => ' ' . $config['upload_path'] . '/'),
				'ABBC3_UPLOAD_MAX_SIZE'	=> array('lang'	=> 'ATTACH_MAX_FILESIZE',		'validate' => 'int',	'type' => 'text:7:15',		'explain' => true, 'append' => ' ' . $user->lang['BYTES']),
				'ABBC3_UPLOAD_EXTENSION'=> array('lang'	=> 'ABBC3_UPLOAD_EXTENSION',	'validate' => 'string',	'type' => 'textarea:5:40',	'explain' => true),
			)
		);

		if (isset($display_vars['lang']))
		{
			$user->add_lang($display_vars['lang']);
		}

		$this->new_config = $this->abbcode_config;
		
		$cfg_array = (isset($_REQUEST['config'])) ? utf8_normalize_nfc(request_var('config', array('' => ''), true)) : $this->new_config;
		$error = array();
		
		// We validate the complete config if whished
		validate_config_vars($display_vars['vars'], $cfg_array, $error);
		
		// Check the config path permissions
		$this->check_permissions( $this->abbcode_dir . '/config', $this->abbcode_dir . '/config/abbc3config.txt', $error );
		$this->check_permissions( $phpbb_root_path . $config['upload_path'], false, $error );
				
		if ($this->submit && !check_form_key($form_key))
		{
			$error[] = $user->lang['FORM_INVALID'];
		}
		// Do not write values if there is an error
		if (sizeof($error))
		{
			$this->submit = false;
		}
		
		// We go through the display_vars to make sure no one is trying to set variables he/she is not allowed to...
		foreach ($display_vars['vars'] as $config_name => $null)
		{
			if (!isset($cfg_array[$config_name]) || strpos($config_name, 'legend') !== false)
			{
				continue;
			}
			
			if ($config_name == 'auth_method')
			{
				continue;
			}
			
			if ($this->submit)
			{
				$abbcode_config_name[]  = $config_name;
				$abbcode_config_value[] = $cfg_array[$config_name];
			}
			
			$this->new_config[$config_name] = $config_value = $cfg_array[$config_name];
		}
		
		if ($this->submit)
		{
			$abbcode_config_name[] = 'ABBC3_BG'				; $abbcode_config_value[] = request_var('config_abbc3_bg','');
			$abbcode_config_name[] = 'ABBC3_RESIZE_METHOD'	; $abbcode_config_value[] = request_var('config_abbc3_method','');
			
			if ( $this->config_submit($abbcode_config_name, $abbcode_config_value) )
			{
				add_log('admin', 'LOG_CONFIG_ABBCODES');
				
				trigger_error($user->lang['CONFIG_UPDATED'] . adm_back_link($this->u_action));
			}
			else
			{
				trigger_error($user->lang['LOG_CONFIG_ABBCODES_ERROR'] . adm_back_link($this->u_action), E_USER_WARNING);
			}
		}
		
		$this->u_action = $this->u_back . "&amp;action=$action&amp;id=$style_id";
		
		$template->assign_vars(array(
			'S_EDIT'			=> true,
			
			'L_TITLE_EDIT'		=> $user->lang['ABBCODES_SETINGS'],
			'L_TITLE_EXPLAIN'	=> $user->lang['ABBCODES_SETINGS_EXPLAIN'],
			'ICON_BASEDIR'		=> $this->abbcode_dir,
			
			'S_ERROR'			=> (sizeof($error)) ? true : false,
			'ERROR_MSG'			=> implode('<br />', $error),
			
			'U_RESET'			=> $this->u_action . "&amp;action=reset_config&amp;id=$style_id",
			'U_BACK'			=> $this->u_back,
			'U_ACTION'			=> $this->u_action,
		));
		
		// Output relevant page
		foreach ($display_vars['vars'] as $config_key => $vars)
		{
			if (!is_array($vars) && strpos($config_key, 'legend') === false)
			{
				continue;
			}
			
			if (strpos($config_key, 'legend') !== false)
			{
				$template->assign_block_vars('options', array(
					'S_LEGEND'		=> true,
					'LEGEND'		=> ((isset($user->lang[$vars])) ? $user->lang[$vars] : $vars ) . ' [' . $style_name  .']',
				));
				continue;
			}
			
			$type = explode(':', $vars['type']);
			
			$l_explain = '';
			if ($vars['explain'] && isset($vars['lang_explain']))
			{
				$l_explain = (isset($user->lang[$vars['lang_explain']])) ? $user->lang[$vars['lang_explain']] : $vars['lang_explain'];
			}
			else if ($vars['explain'])
			{
				$l_explain = (isset($user->lang[$vars['lang'] . '_EXPLAIN'])) ? $user->lang[$vars['lang'] . '_EXPLAIN'] : '';
			}
			
			$template->assign_block_vars('options', array(
				'KEY'			=> $config_key,
				'TITLE'			=> (isset($user->lang[$vars['lang']])) ? $user->lang[$vars['lang']] : $vars['lang'],
				'S_EXPLAIN'		=> $vars['explain'],
				'TITLE_EXPLAIN'	=> $l_explain,
				'CONTENT'		=> build_cfg_template($type, $config_key, $this->new_config, $config_key, $vars),
				)
			);
			
			unset($display_vars['vars'][$config_key]);
		}
	}

	/**
	* Save ABBC3 settings
	**/
	function config_submit($config_name, $config_value, $is_dynamic = false)
	{
		if ( sizeof( $config_name ) )
		{
			$config_file = $this->abbcode_dir . '/config/abbc3config.txt';
			
			$new_line = '';
			$error = true;
			
			for ($i = 0; $i < sizeof( $config_name ); $i++)
			{
				$new_line .= $config_name[$i] . ':' . $config_value[$i] . "\r\n";
			}
			
			if ($fp = @fopen($config_file, 'w+'))
			{
				@flock($fp, LOCK_EX);
				$error = fwrite($fp, $new_line);
				@flock($fp, LOCK_UN);
				fclose($fp);
				@chmod($config_file, 0777);
			}
		}
		return $error;
	}

	/**
	* Show/edit bbcodes
	**/
	function bbcodes_edit($id, $mode, $action, $style_id, $bbcode = '')
	{
		global $user, $db, $template;
		
		$user->add_lang(array('acp/posting', 'mods/acp_abbcodes', 'mods/abbcode'));
		
		// Is this ABBC3 is disables on this style
		if ( !$this->abbcode_config['ABBC3_MOD'] )
		{
			trigger_error($user->lang['ABBCODES_MOD_DISABLE'] . adm_back_link($this->u_action), E_USER_WARNING);
		}
		
		$error = array();
		// Check if the path is writable
		$this->check_permissions( $this->abbcode_dir . '/config', $this->abbcode_dir . '/config/abbc3config.txt', $error );
		
		$sql = 'SELECT style_name, style_id
				FROM ' . STYLES_TABLE . '
				WHERE style_id = ' . $style_id;
		$result = $db->sql_query($sql);
		$template_row = $db->sql_fetchrow($result);
		$style_name = $template_row['style_name'];
		$db->sql_freeresult($result);

		
		if ( sizeof( $this->abbcode_ary ) )
		{
			// Make sure the list of bbcodes is sorted by order
			$this->abbcode_ary = $this->sortmddata( $this->abbcode_ary, 'id', 'ASC', 'num');
			
			// If submit changes 
			if ( $this->submit || ( $action == 'move_up' || $action == 'move_down' ) )
			{
				$this->abbcode_ary = $this->bbcodes_submit($this->abbcode_ary, $bbcode, $action);
				$bbcode = '';
			}
			
			$template->assign_vars(array(
				'S_BBCODES'			=> true,
				
				'L_TITLE_BBCODES'	=> $user->lang['ABBCODES_CONFIG'],
				'STYLE_NAME'		=> $style_name,
				'L_EXPLAIN_BBCODES'	=> $user->lang['ABBCODES_CONFIG_EXPLAIN'],
				
				'S_BBCODE_EDIT'		=> ( $bbcode ) ? true :false,
				'ICON_BASEDIR'		=> $this->abbcode_dir,
				
				'S_ERROR'			=> (sizeof($error)) ? true : false,
				'ERROR_MSG'			=> implode('<br />', $error),

				'U_BACK'			=> (( $bbcode ) ? $this->u_back . "&amp;action=$action&amp;id=$style_id" : $this->u_back),
				'F_ACTION'			=> $this->u_action . "&amp;mode=$mode&amp;action=$action&amp;id=$style_id",
				'U_RESET'			=> $this->u_action . "&amp;action=reset_abbcodes&amp;id=$style_id" ,
			));
			
			$display_count = 0;
			foreach ( $this->abbcode_ary as $abbcode_name => $abbcode_data )
			{
				if ( $abbcode_data['display'])
				{
					$display_count++;
				}
				$abbcode_tag_name = $abbcode_name;
				
				// is a breck line or division ?
				if ( ( substr($abbcode_name,0,11) == 'ABBC3_BREAK') || ( substr($abbcode_name,0,14) == 'ABBC3_DIVISION' ) )
				{	#	continue;
					if ( substr($abbcode_name,0,14) == 'ABBC3_DIVISION' )
					{
						if ( $this->abbcode_config['ABBC3_TAB'] )
						{
							$abbcode_tag_name = 'ABBCODES_DIVISION';
						}
						else
						{
							continue;
						}
					}
					else
					{
							$abbcode_tag_name = 'ABBCODES_BREAK';
					}
				}
				
				if ( ( $bbcode && ( $abbcode_name != $bbcode) ) || ( !@$this->abbcode_ary[$abbcode_name]['id'] ) )
				{
					continue;
				}
				
				$template->assign_block_vars('items', array(
					'TAG_NAME'				=> &$user->lang[$abbcode_tag_name . '_MOVER'],
					'IMG_SRC'				=> ( $bbcode ) ? (($abbcode_data['image']) ? ($abbcode_data['image'] != 'spacer.gif') ? $this->abbcode_dir . '/images/'. $abbcode_data['image'] : '' : '') : '',
					'NAME'					=> $abbcode_name,
					'S_NEW_IMG'				=> ( $bbcode ) ? (image_select($this->abbcode_dir . '/images', $abbcode_data['image'], 'image', false, $this->u_action)) : '',
					'POSTING_CHECKED'		=> ( $bbcode ) ? (($abbcode_data['display']) ? ' checked="checked"' : '') : '',
					'ID'					=> $abbcode_data['id'],
					'L_STYLE_ACT_DEACT'		=> ($abbcode_data['display']) ? $user->lang['ENABLED'] : $user->lang['DISABLED'],
					'U_EDIT'				=> $this->u_action . "&amp;mode=$mode&amp;action=edit&amp;id=$style_id&amp;bbcode=$abbcode_name",
					'U_MOVE_UP'				=> $this->u_action . "&amp;mode=$mode&amp;action=move_up&amp;id=$style_id'&amp;bbcode=$abbcode_name",
					'U_MOVE_DOWN'			=> $this->u_action . "&amp;mode=$mode&amp;action=move_down&amp;id=$style_id&amp;bbcode=$abbcode_name",
				));
			}
		}
		else
		{
			trigger_error($user->lang['NO_IMAGESET'] . adm_back_link($this->u_action), E_USER_WARNING);
		}
	}

	/**
	* Save ABBC3 bbcodes settings
	**/
	function bbcodes_submit( $array, $bbcode = '', $action= '' )
	{
		// Edit tag
		$abbcode_name						 = ( isset($_POST['name'])				) ? request_var('name', '') : '';
		if ( $abbcode_name )
		{
			$array[$abbcode_name]['image'] 	 = ( isset($_POST['image'])				) ? request_var('image', '') : '';
			$array[$abbcode_name]['display'] = ( isset($_POST['display_on_posting'])) ? request_var('display_on_posting', '') : '';
		}
		
		// on move_down, switch position with next order_id...
		// on move_up, switch position with previous order_id...
		if ( $bbcode && $action != '')
		{
			$array[$bbcode]['id']			= ( ($action == 'move_down') ? $array[$bbcode]['id'] +1 : $array[$bbcode]['id'] -1 );
			
			// Get current order id...
			$current_order = $array[$bbcode]['id'];
			
			// Only update the other entry too if the previous entry got updated
			foreach ( $array as $abbcode_name => $abbcode_data )
			{
				if( (@$abbcode_data['id'] == $current_order) && ($abbcode_name != $bbcode) )
				{
					$this->abbcode_ary[$abbcode_name]['id']	= ( ($action == 'move_down') ? $this->abbcode_ary[$abbcode_name]['id'] -1 : $this->abbcode_ary[$abbcode_name]['id'] +1 );
				}
			}
		}
		
		// Save 
		$new_line = '';
		foreach ( $array as $name => $data )
		{
			if ( !@$data['id'] ) { continue; }
			
			$new_line .= $name . ':' . $array[$name]['id'] . ':' . (($array[$name]['display']) ? '1' : '0') . ':' . $array[$name]['image'] . ':' . ((@$array[$name]['custom']) ? '1' : '') . "\r\n";
		}
		
		$abbcodes_file = $this->abbcode_dir . '/config/abbc3bbcodes.txt';
		
		if ($fp = @fopen($abbcodes_file, 'w+'))
		{
			@flock($fp, LOCK_EX);
			fwrite($fp, $new_line);
			@flock($fp, LOCK_UN);
			fclose($fp);
			@chmod($abbcodes_file, 0777);
		}
		return $array ;
	}
	
	/**
	* Delete ABBC3 user config
	**/
	function bbcodes_reset($id, $mode, $action, $style_id)
	{
		global $phpbb_admin_path, $phpEx, $user;
		
		$abbcodes_file = ( $action == 'reset_abbcodes' ) ? $this->abbcode_dir . '/config/abbc3bbcodes.txt' : $this->abbcode_dir . '/config/abbc3config.txt' ;
		
		if (confirm_box(true))
		{
			if ($fp = @unlink($abbcodes_file))
			{
				add_log('admin', 'LOG_RESET_ABBCODES');
				
				trigger_error( $user->lang['LOG_RESET_ABBCODES'] . adm_back_link($this->u_action));
			}
			else
			{
				trigger_error( $user->lang['LOG_RESET_ABBCODES_ERROR'] . adm_back_link($this->u_action), E_USER_WARNING);
			}
		}
		else
		{
			confirm_box(false, $user->lang[strtoupper($action) . '_EXPLAIN'], build_hidden_fields(array(
				'i'			=> $id,
				'mode'		=> $mode,
				'action'	=> $action,
				'id'		=> $style_id
			)),'confirm_body.html',  "{$phpbb_admin_path}adm/index.$phpEx?i=$id&mode=settings" );
		}
	}
	
	/**
	* Check permissions...
	**/
	function check_permissions( $dir, $file, &$error )
	{
		global $user;
		
		if ( $dir )
		{
			// Check if the $dir exist
			if ( !@file_exists( $dir ) )
			{
				$error[] = sprintf($user->lang['DIRECTORY_DOES_NOT_EXIST'], $dir );
				return false;
			}
			// Check if the $dir is a dir
			if ( file_exists( $dir ) && !@is_dir( $dir ) )
			{
				$error[] = sprintf($user->lang['DIRECTORY_NOT_DIR'], $dir );
				return false;
			}
			// Check if the $dir is writable
			if ( !@is_writable( $dir ) )
			{
				$error[] = sprintf($user->lang['DIRECTORY_NOT_WRITABLE'], $dir);
				return false;
			}
		}
		
		if ( $file )
		{
			// Check if the $file is writable
			if ( @file_exists( $file ) && !@is_writable( $file ) )
			{
				$error[] = sprintf($user->lang['DIRECTORY_NOT_WRITABLE'], $file);
				return false;
			}
		}
		return true;
	}
}

	/**
	* Select list of images in current style folder
	**/
	function image_select($dir, $current, $name, $show = false, $u_action)
	{
		global $user;
		
		// Read the folder and get images
		$dp = @opendir($dir);
		$count = 0;
		
		if ($dp)
		{
			while (($file = readdir($dp)) !== false)
			{
				if (preg_match('#\.(?:gif|jpg|png)$#', $file))
				{
					$imagesetlist[$count] = $file;
					$count++;
				}
			}
			closedir($dp);
		}
		else
		{
			trigger_error($user->lang['NO_IMAGESET'] . adm_back_link($u_action), E_USER_WARNING);
		}

		if (sizeof( $imagesetlist ))
		{
			// Make sure the list of possible images is sorted alphabetically
			sort($imagesetlist);
			
			$icons_list = '<select id="image_select" name="' . $name . '" onchange="update_image(this.options[selectedIndex].value);">' . "\n";
			$icons_list .= '<option value="" ' . (($current == '') ? ' selected="selected"' : ''). '>' . $user->lang['NO_IMAGE'] . '</option>' . "\n";
			
			for( $i = 0; $i < count($imagesetlist); $i++ )
			{
				$selected = ($imagesetlist[$i] == $current) ? ' selected="selected"' : '';
				$icons_list .= '<option value="' . $imagesetlist[$i] . '"' . $selected . '>' . $imagesetlist[$i] . '</option>' . "\n";
			}
			$icons_list .= '</select>'. (($show) ? '&nbsp; <label>' . $user->lang['CURRENT_IMAGE'] . '</label><span><img src="' . $dir . '/' . $current .'" id="newimg" name="' . $name .'" alt="" width="80" height="30" /></span>' : '' );
		}
		return $icons_list;
	}

	/**
	* Select list of display full size image
	**/
	function method_select($selected_method = 'greybox', $name)
	{
		global $user;
		
		$method_options = $user->lang['ABBCODES_RESIZE_METHODS'];
		
		$s_method_options = '<select name="' . $name . '">';
		foreach($method_options as $method_name => $method_value)
		{
			$selected = ($selected_method == $method_name) ? ' selected="selected"' : '';
			$s_method_options .= '<option value="' . $method_name . '"' . $selected . ' >' . $method_value . '</option>';
		}
		$s_method_options.= '</select>';
		
		return $s_method_options;
	}

?>