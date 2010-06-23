<?php
/**
* The file must be named install_abbc3.php
**/

define('IN_PHPBB', true);
$phpbb_root_path = ((isset($phpbb_root_path)) ? $phpbb_root_path : './');
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);

include($phpbb_root_path . 'includes/db/db_tools.' . $phpEx);

$db_tools = new phpbb_db_tools($db);

// start_step session management
$user->session_begin();
$auth->acl($user->data);
$user->setup('posting');

$user->add_lang('install');

$start_step = request_var('start_step', 0);

$no_updates	= 1;
$error_ary	= array();
$error_ary['sql'][0] = '';
$msg_error	= '';
$msg_text	= '';
$msg		= '';

if ( $start_step == 0 )
{
	$user->lang['WELCOME'] = str_replace('phpBB3', 'Advanced Bbcode box 3', $user->lang['WELCOME_INSTALL']);
	trigger_error( '<h2>' . $user->lang['WELCOME'] . '</h2><br/><br/>' . $user->lang['INSTALL_INTRO_NEXT'] . '<br/><br/>' . btn_link(1, 'INSTALL_START') );
}
elseif ( $start_step == 1)
{
	$max_filesize		 = ( $config['max_filesize']		) ? $config['max_filesize']			: 0	;
	$img_max_width		 = ( $config['img_max_width']		) ? $config['img_max_width']		: 500 ;
	$img_max_thumb_width = ( $config['img_max_thumb_width']	) ? $config['img_max_thumb_width']	: 200 ;
	
	// Set default config data
	$sql_ary = array(
		'INSERT INTO ' . CONFIG_TABLE . ' (config_name, config_value, is_dynamic) 
			VALUES ("ABBC3_MOD"				,"1"	,"1" )',
		'INSERT INTO ' . CONFIG_TABLE . ' (config_name, config_value,is_dynamic) 
			VALUES ("ABBC3_PATH"				,"styles/abbcode"	,"1" )',
		'INSERT INTO ' . CONFIG_TABLE . ' (config_name, config_value, is_dynamic) 
			VALUES ("ABBC3_TAB"				,"1"	,"1" )',
		'INSERT INTO ' . CONFIG_TABLE . ' (config_name, config_value, is_dynamic) 
			VALUES ("ABBC3_BG"				,"bg_abbc3.gif"	,"1" )',
		'INSERT INTO ' . CONFIG_TABLE . ' (config_name, config_value, is_dynamic) 
			VALUES ("ABBC3_BOXRESIZE"			,"1"	,"1" )',
		'INSERT INTO ' . CONFIG_TABLE . ' (config_name, config_value, is_dynamic) 
			VALUES ("ABBC3_MAX_IMG_HEIGHT"	,"' . $img_max_width . '"	,"1" )',
 		'INSERT INTO ' . CONFIG_TABLE . ' (config_name, config_value, is_dynamic) 
 			VALUES ("ABBC3_MAX_IMG_WIDTH"		,"500"	,"1" )',
		'INSERT INTO ' . CONFIG_TABLE . ' (config_name, config_value, is_dynamic) 
			VALUES ("ABBC3_MAX_THUM_WIDTH"	,"' . $img_max_thumb_width . '"	,"1" )',
		'INSERT INTO ' . CONFIG_TABLE . ' (config_name, config_value, is_dynamic) 
			VALUES ("ABBC3_GREYBOX"			,"1"	,"1" )',
		'INSERT INTO ' . CONFIG_TABLE . ' (config_name, config_value, is_dynamic) 
			VALUES ("ABBC3_RESIZE"			,"1"	,"1" )',
		'INSERT INTO ' . CONFIG_TABLE . ' (config_name, config_value, is_dynamic) 
			VALUES ("ABBC3_RESIZE_METHOD"		,"greybox"	,"1" )',
		'INSERT INTO ' . CONFIG_TABLE . ' (config_name, config_value, is_dynamic) 
			VALUES ("ABBC3_VIDEO_height"		,"350"	,"1" )',
		'INSERT INTO ' . CONFIG_TABLE . ' (config_name, config_value, is_dynamic) 
			VALUES ("ABBC3_VIDEO_width"			,"425"	,"1" )',
		'INSERT INTO ' . CONFIG_TABLE . ' (config_name, config_value, is_dynamic) 
			VALUES ("ABBC3_UPLOAD_MAX_SIZE"		,"' . $max_filesize . '"	,"1" )',
		'INSERT INTO ' . CONFIG_TABLE . ' (config_name, config_value, is_dynamic) 
			VALUES ("ABBC3_UPLOAD_EXTENSION"	,"swf, gif, jpg, jpeg, png, psd, bmp, tif, tiff"	,"1" )',
	);
	
	$no_updates	= 1;
	$error_ary	= array();
	$msg_error	= '';
	$msg_text	= '';
	$msg		= '';

	$db->sql_return_on_error(true);
	foreach ($sql_ary as $sql)
	{	
		list( $garbage, $row_value ) = split( 'VALUES', $sql );
		list( $garbage, $row_name ) = split( '"', $sql );
		
		$msg = sprintf($user->lang['STEP_PERCENT_COMPLETED'], $no_updates, sizeof($sql_ary)) . ' ::  &raquo; [' . $row_name . '] ';
		
		$result = $db->sql_query($sql);
		
		if ($db->sql_error_triggered)
		{
			$msg_error .= $msg . $user->lang['LINE_UNMODIFIED'] . '<br/>';
		}
		else
		{
			$msg_error .= $msg . $user->lang['LINE_ADDED'] . '<br/>';
		}
		
		$no_updates++;
	}
	
	$db->sql_return_on_error(false);
		
	$msg = sprintf($user->lang['STEP_PERCENT_COMPLETED'], 1, 7) . ' :: ' . $user->lang['UPDATE_DATABASE_SCHEMA'] . '<br/><br/>';
	$msg_text = $msg . btn_link(2, 'NEXT_STEP') . '<br/><hr /><p style="text-align:left;">' . $msg_error . '</p>';
	
	msg_handler(E_USER_WARNING, $msg_text, '','');

}

// bbcodes new rows
elseif ( $start_step == 2)
{
	// Only an example, but also commented out
	$database_update_info = array(
		// Changes from 3.0.RC2 to the next version
		'108'	=> array(
			// Add the following columns
			'add_columns'		=> array(
				BBCODES_TABLE	=> array(
					'display_on_pm'	=> array('TINT:1', 1),
					'display_on_sig'=> array('TINT:1', 1),
					'abbcode'		=> array('TINT:1', 0),
					'bbcode_image'	=> array('VCHAR' , ' '),
					'bbcode_order'	=> array('UINT', NULL)
				//	'bbcode_order'	=> array('UINT', NULL, "auto_increment"),<- Dosen't work :(
				),
			),
			// Add indexes
			'add_index'			=> array(
				BBCODES_TABLE	=> array(
					'display_order'	=> array('bbcode_order'),
				),
			),
		),
	);
	
	$no_updates	= 1;
	$error_ary	= array();
	$msg_error	= '';
	$msg_text	= '';
	$msg		= '';

	$db->sql_return_on_error(true);

	$column_exists = false;
	foreach ($database_update_info as $version => $schema_changes)
	{
		// Add columns?
		if (!empty($schema_changes['add_columns']))
		{
			foreach ($schema_changes['add_columns'] as $table => $columns)
			{
				foreach ($columns as $column_name => $column_data)
				{
					// Only add the column if it does not exist yet
					$column_exists = column_exists($db_tools->sql_layer, $table, $column_name);
					if ( !$column_exists )
					{
						sql_column_add($db_tools->sql_layer, $table, $column_name, $column_data);
					}
				}
			}
		}
		
		// Add indexes?
		if (!empty($schema_changes['add_index']))
		{
			foreach ($schema_changes['add_index'] as $table => $index_array)
			{
				foreach ($index_array as $index_name => $column)
				{
					sql_create_index($db_tools->sql_layer, $index_name, $table, $column);
				}
			}
		}
	}
	$db->sql_return_on_error(false);
	
	for ($i = 0; $i < sizeof($error_ary['sql']); $i++)
	{
		$msg_error .= $error_ary['sql'][$i];
	}

	$msg = sprintf($user->lang['STEP_PERCENT_COMPLETED'], 2, 7) . ' :: ' . $user->lang['UPDATE_DATABASE_SCHEMA'] . ' <br/><br/>';
	$msg_text = $msg . btn_link(3, 'NEXT_STEP') . '<br/><hr /><p style="text-align:left;">' . $msg_error . '</p>';
	
	msg_handler(E_USER_WARNING, $msg_text, '','');	
}

// BBcodes add
elseif ( $start_step == 3 )
{
	// get last bbcode id - start_step
	$sql = 'SELECT MAX(bbcode_id) as max_bbcode_id
		FROM ' . BBCODES_TABLE;
	$result = $db->sql_query($sql);
	$row = $db->sql_fetchrow($result);
	$db->sql_freeresult($result);
	
	if ($row)
	{
		$bbcode_id = $row['max_bbcode_id'] + 1;
		
		// Make sure it is greater than the core bbcode ids...
		if ($bbcode_id <= NUM_CORE_BBCODES)
		{
			$bbcode_id = NUM_CORE_BBCODES + 1;
		}
	}
	else
	{
		$bbcode_id = NUM_CORE_BBCODES + 1;
	}
	
	if ($bbcode_id > 1511)
	{
		trigger_error( $user->lang['TOO_MANY_BBCODES'] . btn_link(4, 'NEXT_STEP') );
	}
	
	$next_bbcode_id = (int) $bbcode_id;
	// get last bbcode id - End
	
	// get all bbcode tag - Start
	$bbcode_tag_ary = array();
	$sql = 'SELECT bbcode_id, bbcode_tag
		FROM ' . BBCODES_TABLE ;
	$result = $db->sql_query($sql);
	while ($row = $db->sql_fetchrow($result))
	{
		$bbcode_tag_ary[$row['bbcode_tag']] = $row['bbcode_tag'];
	}
	$db->sql_freeresult($result);
	// get all bbcode tag - End

	$sql_ary = array(
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("font=",		 1, ' . ($next_bbcode_id+ 1) . ', "ABBC3_FONT_TIP", "[font={TEXT1}]{TEXT2}[/font]", "<span style=\"font-family:{TEXT1};\">{TEXT2}</span>", "!\\\[font\\\=(.*?)\\\](.*?)\\\[/font\\\]!ies", "\'[font=\'.str_replace(array(\"\\\r\\\n\", \'\\\\\"\', \'\\\\\'\', \'(\', \')\'), array(\"\\\n\", \'\"\', \'&#39;\', \'&#40;\', \'&#41;\'), trim(\'${1}\')).\':$uid]\'.str_replace(array(\"\\\r\\\n\", \'\\\\\"\', \'\\\\\'\', \'(\', \')\'), array(\"\\\n\", \'\"\', \'&#39;\', \'&#40;\', \'&#41;\'), trim(\'${2}\')).\'[/font:$uid]\'", "!\\\[font\\\=(.*?):$uid\\\](.*?)\\\[/font:$uid\\\]!s", "<span style=\"font-family:${1};\">${2}</span>", 1, 1, 1, 1, " ")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("size",			 2,						 -2		, "ABBC3_SIZE_TIP", ".", ".", ".", ".", ".", ".", 1, 1, 1, 1, " ")',
 		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("highlight=",	 3, ' . ($next_bbcode_id+ 2) . ', "ABBC3_HIGHLIGHT_TIP", "[highlight={COLOR}]{TEXT}[/highlight]", "<span style=\"background-color: {COLOR};\">{TEXT}</span>", "!\\\[highlight=([a-z]+|#[0-9abcdef]+)\\\](.*?)\\\[/highlight\\\]!ies", "\'[highlight=${1}:$uid]\'.str_replace(array(\"\\\r\\\n\", \'\\\\\"\', \'\\\\\'\', \'(\', \')\'), array(\"\\\n\", \'\"\', \'&#39;\', \'&#40;\', \'&#41;\'), trim(\'${2}\')).\'[/highlight:$uid]\'", "!\\\[highlight\\\=([a-zA-Z]+|#[0-9abcdefABCDEF]+):$uid\\\](.*?)\\\[/highlight:$uid\\\]!s", "<span style=\"background-color: ${1};\">${2}</span>", 1, 1, 1, 1, " ")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("color",		 4,						 -4		, "ABBC3_COLOR_TIP", ".", ".", ".", ".", ".", ".", 0, 0, 0, 1, " ")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("cut",			 5,						 -5		, "ABBC3_CUT_MOVER", ".", ".", ".", ".", ".", ".", 1, 1, 1, 1, "cut.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("copy",			 6,						 -6		, "ABBC3_COPY_MOVER", ".", ".", ".", ".", ".", ".", 1, 1, 1, 1, "copy.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("paste",		 7,						 -7		, "ABBC3_PASTE_MOVER", ".", ".", ".", ".", ".", ".", 1, 1, 1, 1, "paste.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("plain",		 8,						 -8		, "ABBC3_PLAIN_MOVER", ".", ".", ".", ".", ".", ".", 1, 1, 1, 1, "plain.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("division1",	 9,						 -9		, "ABBC3_DIVISION", ".", ".", ".", ".", ".", ".", 1, 1, 1, 1, "dots.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("listb",		10,						-10		, "ABBC3_LISTB_TIP", ".", ".", ".", ".", ".", ".", 1, 1, 1, 1, "listb.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("listo",		11,						-11		, "ABBC3_LISTO_TIP", ".", ".", ".", ".", ".", ".", 1, 1, 1, 1, "listo.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("listitem",		12,						-12		, "ABBC3_LISTITEM_TIP", ".", ".", ".", ".", ".", ".", 1, 1, 1, 1, "listitem.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("hr",			13, ' . ($next_bbcode_id+ 3) . ', "ABBC3_HR_TIP", "[hr]", "<hr noshade color=\"#000000\" size=\"1px\">", "!\\\[hr\\\]!ies", "\'[hr:$uid]\'", "!\\\[hr:$uid\\\]!s", "<hr noshade color=\"#000000\" size=\"1px\">", 1, 1, 1, 1, "hr.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("break1",		14,						-14		, "ABBC3_BREAK", ".", ".", ".", ".", ".", ".", 0, 0, 0, 1, "spacer.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("b",			15,						-15		, "ABBC3_B_TIP", ".", ".", ".", ".", ".", ".", 1, 1, 1, 1, "bold.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("i",			16,						-16		, "ABBC3_I_TIP", ".", ".", ".", ".", ".", ".", 1, 1, 1, 1, "italic.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("u",			17,						-17		, "ABBC3_U_TIP", ".", ".", ".", ".", ".", ".", 1, 1, 1, 1, "under.gif")',		
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("s",			18, ' . ($next_bbcode_id+ 4) . ', "ABBC3_STRIKE_TIP", "[s]{TEXT}[/s]", "<span style=\"text-decoration: line-through;\">{TEXT}</span>", "!\\\[s\\\](.*?)\\\[/s\\\]!ies", "\'[s:$uid]\'.str_replace(array(\"\\\r\\\n\", \'\\\\\"\', \'\\\\\'\', \'(\', \')\'), array(\"\\\n\", \'\"\', \'&#39;\', \'&#40;\', \'&#41;\'), trim(\'${1}\')).\'[/s:$uid]\'", "!\\\[s:$uid\\\](.*?)\\\[/s:$uid\\\]!s", "<span style=\"text-decoration: line-through;\">${1}</span>", 1, 1, 1, 1, "strike.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("sup",			19, ' . ($next_bbcode_id+ 5) . ', "ABBC3_SUP_TIP", "[sup]{TEXT}[/sup]", "<sup>{TEXT}</sup>", "!\\\[sup\\\](.*?)\\\[/sup\\\]!ies", "\'[sup:$uid]\'.str_replace(array(\"\\\r\\\n\", \'\\\\\"\', \'\\\\\'\', \'(\', \')\'), array(\"\\\n\", \'\"\', \'&#39;\', \'&#40;\', \'&#41;\'), trim(\'${1}\')).\'[/sup:$uid]\'", "!\\\[sup:$uid\\\](.*?)\\\[/sup:$uid\\\]!s", "<sup>${1}</sup>", 1, 1, 1, 1, "sup.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("sub",			20, ' . ($next_bbcode_id+ 6) . ', "ABBC3_SUB_TIP", "[sub]{TEXT}[/sub]", "<sub>{TEXT}</sub>", "!\\\[sub\\\](.*?)\\\[/sub\\\]!ies", "\'[sub:$uid]\'.str_replace(array(\"\\\r\\\n\", \'\\\\\"\', \'\\\\\'\', \'(\', \')\'), array(\"\\\n\", \'\"\', \'&#39;\', \'&#40;\', \'&#41;\'), trim(\'${1}\')).\'[/sub:$uid]\'", "!\\\[sub:$uid\\\](.*?)\\\[/sub:$uid\\\]!s", "<sub>${1}</sub>", 1, 1, 1, 1, "sub.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("glow=",		21, ' . ($next_bbcode_id+ 7) . ', "ABBC3_GLOW_TIP", "[glow={COLOR}]{TEXT}[/glow]", "<span style=\"background-color: {COLOR};\">{TEXT}</span>", "!\\\[glow=([a-z]+|#[0-9abcdef]+)\\\](.*?)\\\[/glow\\\]!ies", "\'[glow=${1}:$uid]\'.str_replace(array(\"\\\r\\\n\", \'\\\\\"\', \'\\\\\'\', \'(\', \')\'), array(\"\\\n\", \'\"\', \'&#39;\', \'&#40;\', \'&#41;\'), trim(\'${2}\')).\'[/glow:$uid]\'", "!\\\[glow\\\=([a-zA-Z]+|#[0-9abcdefABCDEF]+):$uid\\\](.*?)\\\[/glow:$uid\\\]!s", "<div style=\"filter:Glow(color=${1},strength=4);color:#ffffff;height:110%\">${2}</div>", 1, 1, 1, 1, "glow.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("shadow=",		22, ' . ($next_bbcode_id+ 8) . ', "ABBC3_SHADOW_TIP", "[shadow={COLOR}]{TEXT}[/shadow]", "<span style=\"background-color: {COLOR};\">{TEXT}</span>", "!\\\[shadow=([a-z]+|#[0-9abcdef]+)\\\](.*?)\\\[/shadow\\\]!ies", "\'[shadow=${1}:$uid]\'.str_replace(array(\"\\\r\\\n\", \'\\\\\"\', \'\\\\\'\', \'(\', \')\'), array(\"\\\n\", \'\"\', \'&#39;\', \'&#40;\', \'&#41;\'), trim(\'${2}\')).\'[/shadow:$uid]\'", "!\\\[shadow\\\=([a-zA-Z]+|#[0-9abcdefABCDEF]+):$uid\\\](.*?)\\\[/shadow:$uid\\\]!s", "<div style=\"filter:shadow(color=black,strength=4);color:${1};height:110%\">${2}</div>", 1, 1, 1, 1, "shadow.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("dropshadow=",	23, ' . ($next_bbcode_id+ 9) . ', "ABBC3_DROPSHADOW_TIP", "[dropshadow={COLOR}]{TEXT}[/dropshadow]", "<span style=\"background-color: {COLOR};\">{TEXT}</span>", "!\\\[dropshadow=([a-z]+|#[0-9abcdef]+)\\\](.*?)\\\[/dropshadow\\\]!ies", "\'[dropshadow=${1}:$uid]\'.str_replace(array(\"\\\r\\\n\", \'\\\\\"\', \'\\\\\'\', \'(\', \')\'), array(\"\\\n\", \'\"\', \'&#39;\', \'&#40;\', \'&#41;\'), trim(\'${2}\')).\'[/dropshadow:$uid]\'", "!\\\[dropshadow\\\=([a-zA-Z]+|#[0-9abcdefABCDEF]+):$uid\\\](.*?)\\\[/dropshadow:$uid\\\]!s", "<div style=\"filter:dropshadow(color=#999999,strength=4);color:${1};height:110%\">${2}</div>", 1, 1, 1, 1, "dropshadow.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("blur=",		24, ' . ($next_bbcode_id+10) . ', "ABBC3_BLUR_TIP", "[blur={COLOR}]{TEXT}[/blur]", "<span style=\"background-color: {COLOR};\">{TEXT}</span>", "!\\\[blur=([a-z]+|#[0-9abcdef]+)\\\](.*?)\\\[/blur\\\]!ies", "\'[blur=${1}:$uid]\'.str_replace(array(\"\\\r\\\n\", \'\\\\\"\', \'\\\\\'\', \'(\', \')\'), array(\"\\\n\", \'\"\', \'&#39;\', \'&#40;\', \'&#41;\'), trim(\'${2}\')).\'[/blur:$uid]\'", "!\\\[blur\\\=([a-zA-Z]+|#[0-9abcdefABCDEF]+):$uid\\\](.*?)\\\[/blur:$uid\\\]!s", "<div style=\"filter:Blur(strength=7);color:${1};height:110%\">${2}</div>", 1, 1, 1, 1, "blur.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("wave=",		25, ' . ($next_bbcode_id+11) . ', "ABBC3_WAVE_TIP", "[wave={COLOR}]{TEXT}[/wave]", "<span style=\"background-color: {COLOR};\">{TEXT}</span>", "!\\\[wave=([a-z]+|#[0-9abcdef]+)\\\](.*?)\\\[/wave\\\]!ies", "\'[wave=${1}:$uid]\'.str_replace(array(\"\\\r\\\n\", \'\\\\\"\', \'\\\\\'\', \'(\', \')\'), array(\"\\\n\", \'\"\', \'&#39;\', \'&#40;\', \'&#41;\'), trim(\'${2}\')).\'[/wave:$uid]\'", "!\\\[wave\\\=([a-zA-Z]+|#[0-9abcdefABCDEF]+):$uid\\\](.*?)\\\[/wave:$uid\\\]!s", "<div style=\"filter:Wave(strength=2);color:${1};height:110%\">${2}</div>", 1, 1, 1, 1, "wave.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("fade",			26, ' . ($next_bbcode_id+12) . ', "ABBC3_FADE_TIP", "[fade]{TEXT}[/fade]", "<span class=\"fade_link\">{TEXT}</span>", "!\\\[fade\\\](.*?)\\\[/fade\\\]!ies", "\'[fade:$uid]\'.str_replace(array(\"\\\r\\\n\", \'\\\\\"\', \'\\\\\'\', \'(\', \')\'), array(\"\\\n\", \'\"\', \'&#39;\', \'&#40;\', \'&#41;\'), trim(\'${1}\')).\'[/fade:$uid]\'", "!\\\[fade:$uid\\\](.*?)\\\[/fade:$uid\\\]!s", "<span class=\"fade_link\">${1}</span> <script type=\"text/javascript\">fade_ontimer();</script>", 1, 1, 1, 1, "fade.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("grad",			27,						-27		, "ABBC3_GRAD_TIP", ".", ".", ".", ".", ".", ".", 1, 1, 1, 1, "grad.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("align=justify",28, ' . ($next_bbcode_id+13) . ', "ABBC3_JUSTIFY_TIP", "[align=justify]{TEXT}[/align]", "<div style=\"text-align:justify\">{TEXT}</div>", "!\\\[align\\=justify\\\](.*?)\\\[/align\\\]!ies", "\'[align=justify:$uid]\'.str_replace(array(\"\\\r\\\n\", \'\\\\\"\', \'\\\\\'\', \'(\', \')\'), array(\"\\\n\", \'\"\', \'&#39;\', \'&#40;\', \'&#41;\'), trim(\'${1}\')).\'[/align:$uid]\'", "!\\\[align\\=justify:$uid\\\](.*?)\\\[/align:$uid\\\]!si", "<div style=\"text-align:justify\">${1}</div>", 1, 1, 1, 1, "justify.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("align=left",	29, ' . ($next_bbcode_id+14) . ', "ABBC3_LEFT_TIP", "[align=left]{TEXT}[/align]", "<div style=\"text-align:left\">{TEXT}</div>", "!\\\[align\\=left\\\](.*?)\\\[/align\\\]!ies", "\'[align=left:$uid]\'.str_replace(array(\"\\\r\\\n\", \'\\\\\"\', \'\\\\\'\', \'(\', \')\'), array(\"\\\n\", \'\"\', \'&#39;\', \'&#40;\', \'&#41;\'), trim(\'${1}\')).\'[/align:$uid]\'", "!\\\[align\\=left:$uid\\\](.*?)\\\[/align:$uid\\\]!si", "<div style=\"text-align:left\">${1}</div>", 1, 1, 1, 1, "left.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("align=center",	30, ' . ($next_bbcode_id+15) . ', "ABBC3_CENTER_TIP", "[align=center]{TEXT}[/align]", "<div style=\"text-align:center\">{TEXT}</div>", "!\\\[align\\=center\\\](.*?)\\\[/align\\\]!ies", "\'[align=center:$uid]\'.str_replace(array(\"\\\r\\\n\", \'\\\\\"\', \'\\\\\'\', \'(\', \')\'), array(\"\\\n\", \'\"\', \'&#39;\', \'&#40;\', \'&#41;\'), trim(\'${1}\')).\'[/align:$uid]\'", "!\\\[align\\=center:$uid\\\](.*?)\\\[/align:$uid\\\]!si", "<div style=\"text-align:center\">${1}</div>", 1, 1, 1, 1, "center.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image)
			VALUES ("center",		31, ' . ($next_bbcode_id+16) . ', "[center]your text here[/center]", "[center]{TEXT}[/center]", "<div align=\"center\">{TEXT}</div>", "!\\\[center\\\](.*?)\\\[/center\\\]!ies", "\'[center:$uid]\'.str_replace(array(\"\\\r\\\n\", \'\\\\\"\', \'\\\\\'\', \'(\', \')\'), array(\"\\\n\", \'\"\', \'&#39;\', \'&#40;\', \'&#41;\'), trim(\'${1}\')).\'[/center:$uid]\'", "!\\\[center:$uid\\\](.*?)\\\[/center:$uid\\\]!s", "<div align=\"center\">${1}</div>", 1, 1, 1, 0, " ")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("align=right",	32, ' . ($next_bbcode_id+17) . ', "ABBC3_RIGHT_TIP", "[align=right]{TEXT}[/align]", "<div style=\"text-align:right\">{TEXT}</div>", "!\\\[align\\=right\\\](.*?)\\\[/align\\\]!ies", "\'[align=right:$uid]\'.str_replace(array(\"\\\r\\\n\", \'\\\\\"\', \'\\\\\'\', \'(\', \')\'), array(\"\\\n\", \'\"\', \'&#39;\', \'&#40;\', \'&#41;\'), trim(\'${1}\')).\'[/align:$uid]\'", "!\\\[align\\=right:$uid\\\](.*?)\\\[/align:$uid\\\]!si", "<div style=\"text-align:right\">${1}</div>", 1, 1, 1, 1, "right.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("pre",			33, ' . ($next_bbcode_id+18) . ', "ABBC3_PRE_TIP", "[pre]{TEXT}[/pre]", "<pre>{TEXT}</pre>", "!\\\[pre\\\](.*?)\\\[/pre\\\]!ies", "\'[pre:$uid]\'.str_replace(array(\"\\\r\\\n\", \'\\\\\"\', \'\\\\\'\', \'(\', \')\'), array(\"\\\n\", \'\"\', \'&#39;\', \'&#40;\', \'&#41;\'), trim(\'${1}\')).\'[/pre:$uid]\'", "!\\\[pre:$uid\\\](.*?)\\\[/pre:$uid\\\]!s", "<pre>${1}</pre>", 1, 1, 1, 1, "preformat.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("division2",	34,						-34		, "ABBC3_DIVISION", ".", ".", ".", ".", ".", ".", 1, 1, 1, 1, "dots.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("tab=",			35, ' . ($next_bbcode_id+19) . ', "ABBC3_TAB_TIP", "[tab={NUMBER}]", "<span style=\"margin-left:{NUMBER}px;\"></span>", "!\\\[tab=([0-9]?[0-9]?[0-9])\\\]!ies", "\'[tab=${1}:$uid]\'", "!\\\[tab\\=([0-9]?[0-9]?[0-9]):$uid\\\]!s", "<span style=\"margin-left:${1}px;\"></span>", 1, 1, 1, 1, "tab.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("dir=ltr",		36, ' . ($next_bbcode_id+20) . ', "ABBC3_LTR_TIP", "[dir=ltr]{TEXT}[/dir]", "<BDO dir=\"ltr\">{TEXT}</BDO>", "!\\\[dir=ltr\\\](.*?)\\\[/dir\\\]!ies", "\'[dir=ltr:$uid]\'.str_replace(array(\"\\\r\\\n\", \'\\\\\"\', \'\\\\\'\', \'(\', \')\'), array(\"\\\n\", \'\"\', \'&#39;\', \'&#40;\', \'&#41;\'), trim(\'${1}\')).\'[/dir:$uid]\'", "!\\\[dir\\=ltr:$uid\\\](.*?)\\\[/dir:$uid\\\]!s", "<BDO dir=\"ltr\">${1}</BDO>", 1, 1, 1, 1, "ltr.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("dir=rtl",		37, ' . ($next_bbcode_id+21) . ', "ABBC3_RTL_TIP", "[dir=rtl]{TEXT}[/dir]", "<BDO dir=\"rtl\">{TEXT}</BDO>", "!\\\[dir=rtl\\\](.*?)\\\[/dir\\\]!ies", "\'[dir=rtl:$uid]\'.str_replace(array(\"\\\r\\\n\", \'\\\\\"\', \'\\\\\'\', \'(\', \')\'), array(\"\\\n\", \'\"\', \'&#39;\', \'&#40;\', \'&#41;\'), trim(\'${1}\')).\'[/dir:$uid]\'", "!\\\[dir\\=rtl:$uid\\\](.*?)\\\[/dir:$uid\\\]!s", "<BDO dir=\"rtl\">${1}</BDO>", 1, 1, 1, 1, "rtl.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("marq=up",		38, ' . ($next_bbcode_id+22) . ', "ABBC3_MARQU_TIP", "[marq=up]{TEXT}[/marq]", "<marquee direction=\"up\">{TEXT}</marquee>", "!\\\[marq\\=up\\\](.*?)\\\[/marq\\\]!ies", "\'[marq=up:$uid]\'.str_replace(array(\"\\\r\\\n\", \'\\\\\"\', \'\\\\\'\', \'(\', \')\'), array(\"\\\n\", \'\"\', \'&#39;\', \'&#40;\', \'&#41;\'), trim(\'${1}\')).\'[/marq:$uid]\'", "!\\\[marq\\=up:$uid\\\](.*?)\\\[/marq:$uid\\\]!s", "<marquee direction=\"up\" scrolldelay=\"100\" onmouseover=\"this.scrollDelay=10000000\" onmouseout=\"this.scrollDelay=100\">${1}</marquee>", 1, 1, 1, 1, "marqu.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("marq=down",	39, ' . ($next_bbcode_id+23) . ', "ABBC3_MARQD_TIP", "[marq=down]{TEXT}[/marq]", "<marquee direction=\"down\">{TEXT}</marquee>", "!\\\[marq\\=down\\\](.*?)\\\[/marq\\\]!ies", "\'[marq=down:$uid]\'.str_replace(array(\"\\\r\\\n\", \'\\\\\"\', \'\\\\\'\', \'(\', \')\'), array(\"\\\n\", \'\"\', \'&#39;\', \'&#40;\', \'&#41;\'), trim(\'${1}\')).\'[/marq:$uid]\'", "!\\\[marq\\=down:$uid\\\](.*?)\\\[/marq:$uid\\\]!s", "<marquee direction=\"down\" scrolldelay=\"100\" onmouseover=\"this.scrollDelay=10000000\" onmouseout=\"this.scrollDelay=100\">${1}</marquee>", 1, 1, 1, 1, "marqd.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("marq=left",	40, ' . ($next_bbcode_id+24) . ', "ABBC3_MARQL_TIP", "[marq=left]{TEXT}[/marq]", "<marquee direction=\"left\">{TEXT}</marquee>", "!\\\[marq\\=left\\\](.*?)\\\[/marq\\\]!ies", "\'[marq=left:$uid]\'.str_replace(array(\"\\\r\\\n\", \'\\\\\"\', \'\\\\\'\', \'(\', \')\'), array(\"\\\n\", \'\"\', \'&#39;\', \'&#40;\', \'&#41;\'), trim(\'${1}\')).\'[/marq:$uid]\'", "!\\\[marq\\=left:$uid\\\](.*?)\\\[/marq:$uid\\\]!s", "<marquee direction=\"left\" scrolldelay=\"100\" onmouseover=\"this.scrollDelay=10000000\" onmouseout=\"this.scrollDelay=100\">${1}</marquee>", 1, 1, 1, 1, "marql.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("marq=right",	41, ' . ($next_bbcode_id+25) . ', "ABBC3_MARQR_TIP", "[marq=right]{TEXT}[/marq]", "<marquee direction=\"right\">{TEXT}</marquee>", "!\\\[marq\\=right\\\](.*?)\\\[/marq\\\]!ies", "\'[marq=right:$uid]\'.str_replace(array(\"\\\r\\\n\", \'\\\\\"\', \'\\\\\'\', \'(\', \')\'), array(\"\\\n\", \'\"\', \'&#39;\', \'&#40;\', \'&#41;\'), trim(\'${1}\')).\'[/marq:$uid]\'", "!\\\[marq\\=right:$uid\\\](.*?)\\\[/marq:$uid\\\]!s", "<marquee direction=\"right\" scrolldelay=\"100\" onmouseover=\"this.scrollDelay=10000000\" onmouseout=\"this.scrollDelay=100\">${1}</marquee>", 1, 1, 1, 1, "marqr.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("break2",		42,						-42		, "ABBC3_BREAK", ".", ".", ".", ".", ".", ".", 0, 0, 0, 1, "spacer.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("code",			43,						-43		, "ABBC3_CODE_TIP", ".", ".", ".", ".", ".", ".", 1, 1, 1, 1, "code.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("quote",		44,						-44		, "ABBC3_QUOTE_TIP", ".", ".", ".", ".", ".", ".", 1, 1, 1, 1, "quote.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("spoil",		45, ' . ($next_bbcode_id+26) . ', "ABBC3_SPOIL_TIP", "[spoil]{TEXT}[/spoil]", "<b>{TEXT}</b>", "!\\\[spoil\\\](.*?)\\\[/spoil\\\]!ies", "\'[spoil:$uid]\'.str_replace(array(\"\\\r\\\n\", \'\\\\\"\', \'\\\\\'\', \'(\', \')\'), array(\"\\\n\", \'\"\', \'&#39;\', \'&#40;\', \'&#41;\'), trim(\'${1}\')).\'[/spoil:$uid]\'", "!\\\[spoil:$uid\\\](.*?)\\\[/spoil:$uid\\\]!s", "<div class=\"spoilwrapper\">\r\n<div class=\"spoiltitle\">\r\n<input class=\"btnspoil button2\" type=\"button\" value=\"{L_SPOILER_SHOW}\" onClick=\"javascript:if (this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display !=\'\') { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display=\'\'; this.innerText=\'\'; this.value=\'{L_SPOILER_HIDE}\'; } else { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display=\'none\'; this.innerText=\'\'; this.value=\'{L_SPOILER_SHOW}\'; }\" onfocus=\"this.blur();\"></div>\r\n<div class=\"spoilcontent\"><div style=\"display: none;\">${1}</div>\r\n</div>\r\n</div>", 1, 1, 1, 1, "spoil.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("mod=",			46, ' . ($next_bbcode_id+27) . ', "ABBC3_MODERATOR_TIP", "[mod={TEXT1}]{TEXT2}[/mod]", "{TEXT1}<b>{TEXT2}</b>", "!\\\[mod=(.*?)\\\](.*?)\\\[/mod\\\]!ies", "\'[mod=\'.str_replace(array(\"\\\r\\\n\", \'\\\\\"\', \'\\\\\'\', \'(\', \')\'), array(\"\\\n\", \'\"\', \'&#39;\', \'&#40;\', \'&#41;\'), trim(\'${1}\')).\':$uid]\'.str_replace(array(\"\\\r\\\n\", \'\\\\\"\', \'\\\\\'\', \'(\', \')\'), array(\"\\\n\", \'\"\', \'&#39;\', \'&#40;\', \'&#41;\'), trim(\'${2}\')).\'[/mod:$uid]\'", "!\\\[mod\\=(.*?):$uid\\\](.*?)\\\[/mod:$uid\\\]!s", "<table id=\"ModTable\" width=\"100%\" cellspacing=\"5\" cellpadding=\"0\" border=\"0\" align=\"center\">\r\n<tr>\r\n<td class=\"row1\" rowspan=\"2\" align=\"middle\" vAlign=\"center\" width=\"1%\">\r\n<span class=\"exclamation\" title=\"Moderator warning\">&nbsp;!&nbsp;</span>\r\n</td>\r\n<td class=\"row2\">\r\n<span class=\"genmed\"><b>${1}:</b></span>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n${2}\r\n</td>\r\n</tr>\r\n</table>", 1, 1, 1, 1, "moderator.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("offtopic",		47, ' . ($next_bbcode_id+28) . ', "ABBC3_OFFTOPIC", "[offtopic]{TEXT}[/offtopic]", "<b>TEXT</b>", "!\\\[offtopic\\\](.*?)\\\[/offtopic\\\]!ies", "\'[offtopic:$uid]\'.str_replace(array(\"\\\r\\\n\", \'\\\\\"\', \'\\\\\'\', \'(\', \')\'), array(\"\\\n\", \'\"\', \'&#39;\', \'&#40;\', \'&#41;\'), trim(\'${1}\')).\'[/offtopic:$uid]\'", "!\\\[offtopic:$uid\\\](.*?)\\\[/offtopic:$uid\\\]!s", "<i><b><font color=\"#114499\">{L_OFFTOPIC}</font></b><br/><font color=\"#2277DD\">${1}</font></i>", 1, 1, 1, 1, "offtopic.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("nfo",			48, ' . ($next_bbcode_id+29) . ', "ABBC3_NFO_TIP", "[nfo]{TEXT}[/nfo]", "<b>{TEXT}</b>", "!\\\[nfo\\\](.*?)\\\[/nfo\\\]!ies", "\'[nfo:$uid]${1}[/nfo:$uid]\'", "!\\\[nfo:$uid\\\](.*?)\\\[/nfo:$uid\\\]!ies", "$this->nfo_pass(\'$1\')", 1, 1, 1, 1, "nfo.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("table=",		49, ' . ($next_bbcode_id+30) . ', "ABBC3_TABLE_TIP", "[table={TEXT1}]{TEXT2}[/table]", "{TEXT1}<b>{TEXT2}</b>", "!\\\[table=(.*?)\\\](.*?)\\\[/table\\\]!ies", "\'[table=\'.str_replace(array(\"\\\r\\\n\", \'\\\\\"\', \'\\\\\'\', \'(\', \')\'), array(\"\\\n\", \'\"\', \'&#39;\', \'&#40;\', \'&#41;\'), trim(\'${1}\')) . \':$uid]\'.str_replace(array(\"\\\r\\\n\", \'\\\\\"\', \'\\\\\'\', \'(\', \')\'), array(\"\\\n\", \'\"\', \'&#39;\', \'&#40;\', \'&#41;\'), trim(\'${2}\')).\'[/table:$uid]\'", "!\\\[table\\=(.*?):$uid\\\](.*?)\\\[/table:$uid\\\]!ies", "$this->table_pass( \'$1\', \'$2\' )", 1, 1, 1, 1, "table.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("division3",	50,						-50		, "ABBC3_DIVISION", ".", ".", ".", ".", ".", ".", 1, 1, 1, 1, "dots.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("upload",		51,						-51		, "ABBC3_UPLOAD_MOVER", ".", ".", ".", ".", ".", ".", 1, 0, 0, 1, "upload.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("url",			52,						-52		, "ABBC3_URL_TIP", ".", ".", ".", ".", ".", ".", 1, 1, 1, 1, "url.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("email",		53,						-53		, "ABBC3_EMAIL_TIP", ".", ".", ".", ".", ".", ".", 1, 1, 1, 1, "email.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("web",			54, ' . ($next_bbcode_id+31) . ', "ABBC3_WEB_TIP", "[web{TEXT}]{URL}[/web]", "<a src=\"{URL}\">{TEXT}</a>", "!\\\[web(\\=| )?(.*?)\\\](.*?)\\\[/web\\\]!ies", "\'[web${1}${2}:$uid]${3}[/web:$uid]\'", "!\\\[web((=| )?(width=)?([0-9]?[0-9]?[0-9][(%|\\\w+)?])(,| )(height=)?([0-9]?[0-9]?[0-9][(%|\\\w+)?]))?:$uid\\\](.*?)\\\[/web:$uid\\\]!s", "<iframe width=\"${4}\" height=\"${7}\" src=\"${8}\" style=\"font-size: 2px;\"></iframe>", 0, 0, 0, 1, "web.gif")',
//		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
//			VALUES ("url",			55,-55, "ABBC3_ED2K_TIP", "[url{TEXT1}]{TEXT2}[/url]", "<a href=\"{TEXT1}\" >{TEXT2}</a>", "!\\\[url(.*?)\\\](.*?)\\\[/url\\\]!ies", "\'[url${1}:$uid]${2}[/url:$uid]\'","!\\\[url(.*?):$uid\\\](.*?)\\\[/url:$uid\\\]!ies", "$this->ed2k_pass( \\\$bbcode_id, str_replace(array(\"\\\r\\\n\", \'\\\\\"\', \'\\\\\'\', \'(\', \')\'), array(\"\\\n\", \'\"\', \'&#39;\', \'&#40;\', \'&#41;\'), trim(\'${1}\')), str_replace(array(\"\\\r\\\n\", \'\\\\\"\', \'\\\\\'\', \'(\', \')\'), array(\"\\\n\", \'\"\', \'&#39;\', \'&#40;\', \'&#41;\'), trim(\'${2}\')))", 1, 1, 0, 1, "emule.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("url",			55,						-55		, "ABBC3_ED2K_TIP", ".", ".", ".", ".",".", ".", 1, 1, 0, 1, "emule.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("img=",			56, ' . ($next_bbcode_id+32) . ', "ABBC3_IMG_TIP", "[img{TEXT}]{URL}[/img]", "<img src=\"{URL}\" alt=\"{L_IMAGE}\" />", "!\\\[img(\\=| )?(left|center|right)?\\\](.*?)\\\[/img\\\]!ies", "\'[img${1}${2}:$uid]${3}[/img:$uid]\'", "!\\\[img(=| )?(left|center|right)?:$uid\\\](.*?)\\\[/img:$uid\\\]!ies", "$this->img_pass( \'$2\',\'$3\')", 1, 1, 1, 1, "img.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("thumbnail",	57, ' . ($next_bbcode_id+33) . ', "ABBC3_THUMBNAIL_TIP", "[thumbnail{TEXT}]{URL}[/thumbnail]", "<img src=\"{URL}\" border=\"0\"  align=\"{TEXT}\"/>", "!\\\[thumbnail(\\=(left|center|right))?\\\](.*?)\\\[/thumbnail\\\]!ies", "\'[thumbnail${1}:$uid]${3}[/thumbnail:$uid]\'", "!\\\[thumbnail(\\=(left|center|right))?:$uid\\\](.*?)\\\[/thumbnail:$uid\\\]!ies", "$this->thumb_pass( \'$2\',\'$3\')", 1, 1, 1, 1, "thumb.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("imgshack",		58,						-58		, "ABBC3_IMGSHACK_MOVER", ".", ".", ".", ".", ".", ".", 1, 1, 1, 1, "imgshack.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("rapidshare",	59, ' . ($next_bbcode_id+34) . ', "ABBC3_RAPIDSHARE_TIP", "[rapidshare]{URL}[/rapidshare]", "<a src=\"{URL}\">{URL}</a>", "!\\\[rapidshare\\\](.*?)\\\[/rapidshare\\\]!ies", "\'[rapidshare:$uid]${1}[/rapidshare:$uid]\'", "!\\\[rapidshare:$uid\\\](.*?)\\\[/rapidshare:$uid\\\]!ies", "$this->rapidshare_pass(\'$1\')", 0, 0, 0, 1, "rapidshare.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("testlink",		60, ' . ($next_bbcode_id+35) . ', "ABBC3_TESTLINK_TIP", "[testlink]{TEXT}[/testlink]", "<a src=\"{TEXT}\">{TEXT}</a>", "!\\\[testlink\\\](.*?)\\\[/testlink\\\]!ies", "\'[testlink:$uid]${1}[/testlink:$uid]\'", "!\\\[testlink:$uid\\\](.*?)\\\[/testlink:$uid\\\]!ies", "$this->testlink_pass(\'$1\')", 0, 0, 0, 1, "testlink.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("click",		61, ' . ($next_bbcode_id+36) . ', "ABBC3_CLICK_TIP", "[click{URL}]{URL}[/click]", "<a src=\"{URL}\">{URL}</a>", "!\\\[click(\\=(.*?))?\\\](.*?)\\\[/click\\\]!ies", "\'[click${1}:$uid]${3}[/click:$uid]\'", "!\\\[click(\\=(.*?))?:$uid\\\](.*?)\\\[/click:$uid\\\]!ies", "$this->click_pass(\'$2\', \'$3\')", 0, 0, 0, 1, "click.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("search",		62, ' . ($next_bbcode_id+37) . ', "ABBC3_SEARCH_TIP", "[search{TEXT1}]{TEXT2}[/search]", "<a src=\"{TEXT1}\">{TEXT2}</a>", "!\\\[search(\\=(msn|yahoo|google))?\\\](.*?)\\\[/search\\\]!ies", "\'[search${1}:$uid]\'.str_replace(array(\"\\\r\\\n\", \'\\\\\"\', \'\\\\\'\', \'(\', \')\'), array(\"\\\n\", \'\"\', \'&#39;\', \'&#40;\', \'&#41;\'), trim(\'${3}\')).\'[/search:$uid]\'", "!\\\[search(\\=(msn|yahoo|google))?:$uid\\\](.*?)\\\[/search:$uid\\\]!ies", "$this->search_pass(\'$1\', \'$2\', \'$3\')", 1, 1, 1, 1, "search.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("division4",	63,						-63		, "ABBC3_DIVISION", ".", ".", ".", ".", ".", ".", 1, 1, 1, 1, "dots.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("BBvideo",		64, ' . ($next_bbcode_id+38) . ', "ABBC3_BBVIDEO_TIP", "[BBvideo{TEXT1}]{TEXT2}[/BBvideo]", "<a src=\"{TEXT1}\">{TEXT2}</a>", "!\\\[BBvideo(\\=| )?(.*?)\\\](.*?)\\\[/BBvideo\\\]!ies", "\'[BBvideo${1}${2}:$uid]${3}[/BBvideo:$uid]\'", "!\\\[BBvideo((=| )?(width=)?([0-9]?[0-9]?[0-9])(,| )(height=)?([0-9]?[0-9]?[0-9]))?:$uid\\\](.*?)\\\[/BBvideo:$uid\\\]!ies", "$this->BBvideo_pass(\'$8\', \'$4\', \'$7\')", 1, 0, 0, 1, "bbvideo.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("flash",		65, ' . ($next_bbcode_id+39) . ', "ABBC3_FLASH_TIP", "[flash{TEXT}]{URL}[/flash]", "<a src=\"{URL}\">{TEXT}</a>", "!\\\[flash(\\=| )?(.*?)\\\](.*?)\\\[/flash\\\]!ies", "\'[flash${1}${2}:$uid]${3}[/flash:$uid]\'", "!\\\[flash((=| )?(width=)?([0-9]?[0-9]?[0-9])(,| )(height=)?([0-9]?[0-9]?[0-9]))?:$uid\\\](.*?)\\\[/flash:$uid\\\]!s", "<object classid=\"clsid:D27CDB6E-AE6D-11CF-96B8-444553540000\" codebase=\"http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0\" width=\"${4}\" height=\"${7}\">\r\n<param name=\"movie\" value=\"${8}\" />\r\n<param name=\"play\" value=\"true\" />\r\n<param name=\"loop\" value=\"true\" />\r\n<param name=\"quality\" value=\"high\" />\r\n<param name=\"allowScriptAccess\" value=\"never\" />\r\n<param name=\"allowNetworking\" value=\"internal\" />\r\n<embed src=\"${8}\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash\" width=\"${4}\" height=\"${7}\" play=\"true\" loop=\"true\" quality=\"high\" allowscriptaccess=\"never\" allownetworking=\"internal\"></embed>\r\n</object>\r\n<br/>", 0, 0, 0, 1, "flash.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("flv",			66, ' . ($next_bbcode_id+40) . ', "ABBC3_FLV_TIP", "[flv{TEXT}]{URL}[/flv]", "<a src=\"{URL}\">{TEXT}</a>", "!\\\[flv(\\=| )?(.*?)\\\](.*?)\\\[/flv\\\]!ies", "\'[flv${1}${2}:$uid]${3}[/flv:$uid]\'", "!\\\[flv((=| )?(width=)?([0-9]?[0-9]?[0-9])(,| )(height=)?([0-9]?[0-9]?[0-9]))?:$uid\\\](.*?)\\\[/flv:$uid\\\]!s", "<embed src=\"./images/flvplayer.swf\" width=\"${4}\" height=\"${7}\" bgcolor=\"#FFFFFF\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\" flashvars=\"file=${8}&autostart_step=false\" /><br/>", 0, 0, 0, 1, "flashflv.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("video",		67, ' . ($next_bbcode_id+41) . ', "ABBC3_VIDEO_TIP", "[video{TEXT}]{URL}[/video]", "<a src=\"{URL}\">{TEXT}</a>", "!\\\[video(\\=| )?(.*?)\\\](.*?)\\\[/video\\\]!ies", "\'[video${1}${2}:$uid]${3}[/video:$uid]\'", "!\\\[video((=| )?(width=)?([0-9]?[0-9]?[0-9])(,| )(height=)?([0-9]?[0-9]?[0-9]))?:$uid\\\](.*?)\\\[/video:$uid\\\]!s", "<object classid=\"CLSID:6BF52A52-394A-11d3-B153-00C04F79FAA6\" id=\"player_${8}\" width=\"${4}\" height=\"${7}\">\r\n<param name=\"url\" value=\"${8}\" />\r\n<param name=\"src\" value=\"${8}\" />\r\n<param name=\"showcontrols\" value=\"1\" />\r\n<param name=\"autostart_step\" value=\"0\" />\r\n<!--[if !IE]>-->\r\n<object type=\"video/x-ms-wmv\" data=\"${8}\" width=\"${4}\" height=\"${7}\" >\r\n<param name=\"src\" value=\"${8}\" />\r\n<param name=\"autostart_step\" value=\"0\" />\r\n<param name=\"controller\" value=\"1\" />\r\n</object>\r\n<!--<![endif]-->\r\n</object><br/>", 0, 0, 0, 1, "video.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("stream",		68, ' . ($next_bbcode_id+42) . ', "ABBC3_STREAM_TIP", "[stream]{URL}[/stream]", "<a src=\"{URL}\">{URL}</a>", "!\\\[stream\\\](.*?)\\\[/stream\\\]!ies", "\'[stream:$uid]${1}[/stream:$uid]\'", "!\\\[stream:$uid\\\](.*?)\\\[/stream:$uid\\\]!s", "<object width=\"320\" height=\"45\" classid=\"CLSID:6BF52A52-394A-11d3-B153-00C04F79FAA6\" id=\"wmstream_${1}\">\r\n<param name=\"url\" value=\"${1}\" />\r\n<param name=\"showcontrols\" value=\"1\" />\r\n<param name=\"showdisplay\" value=\"0\" />\r\n<param name=\"showstatusbar\" value=\"0\" />\r\n<param name=\"autosize\" value=\"1\" />\r\n<param name=\"autostart_step\" value=\"0\" />\r\n<param name=\"visible\" value=\"1\" />\r\n<param name=\"animationstart_step\" value=\"0\" />\r\n<param name=\"loop\" value=\"0\" />\r\n<param name=\"src\" value=\"${1}\" />\r\n<!--[if !IE]>-->\r\n<object width=\"320\" height=\"45\" type=\"video/x-ms-wmv\" data=\"${1}\">\r\n<param name=\"src\" value=\"${1}\" />\r\n<param name=\"controller\" value=\"1\" />\r\n<param name=\"showcontrols\" value=\"1\" />\r\n<param name=\"showdisplay\" value=\"0\" />\r\n<param name=\"showstatusbar\" value=\"0\" />\r\n<param name=\"autosize\" value=\"1\" />\r\n<param name=\"autostart_step\" value=\"0\" />\r\n<param name=\"visible\" value=\"1\" />\r\n<param name=\"animationstart_step\" value=\"0\" />\r\n<param name=\"loop\" value=\"0\" />\r\n</object>\r\n<!--<![endif]-->\r\n</object>\r\n<br/>", 0, 0, 0, 1, "sound.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("quicktime",	69, ' . ($next_bbcode_id+43) . ', "ABBC3_QUICKTIME_TIP", "[quicktime{TEXT}]{URL}[/quicktime]", "<a src=\"{URL}\">{TEXT}</a>", "!\\\[quicktime(\\=| )?(.*?)\\\](.*?)\\\[/quicktime\\\]!ies", "\'[quicktime${1}${2}:$uid]${3}[/quicktime:$uid]\'", "!\\\[quicktime((=| )?(width=)?([0-9]?[0-9]?[0-9])(,| )(height=)?([0-9]?[0-9]?[0-9]))?:$uid\\\](.*?)\\\[/quicktime:$uid\\\]!s", "<object classid=\"clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B\" codebase=\"http://www.apple.com/qtactivex/qtplugin.cab\" width=\"${4}\" height=\"${7}\">\r\n<param name=\"src\" value=\"${8}\" />\r\n<param name=\"controller\" value=\"1\" />\r\n<param name=\"autoplay\" value=\"0\" />\r\n<!--[if !IE]>-->\r\n<object type=\"video/quicktime\" data=\"${8}\" width=\"${4}\" height=\"${7}\">\r\n<param name=\"autoplay\" value=\"0\" />\r\n<param name=\"controller\" value=\"1\" />\r\n</object>\r\n<!--<![endif]-->\r\n</object><br/>", 0, 0, 0, 1, "quicktime.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("ram",			70, ' . ($next_bbcode_id+44) . ', "ABBC3_RAM_TIP", "[ram{TEXT}]{URL}[/ram]", "<a src=\"{URL}\">{TEXT}</a>", "!\\\[ram(\\=| )?(.*?)\\\](.*?)\\\[/ram\\\]!ies", "\'[ram${1}${2}:$uid]${3}[/ram:$uid]\'", "!\\\[ram((=| )?(width=)?([0-9]?[0-9]?[0-9])(,| )(height=)?([0-9]?[0-9]?[0-9]))?:$uid\\\](.*?)\\\[/ram:$uid\\\]!s", "<object id=\"rmstream_${8}\" classid=\"clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA\" width=\"$(4)\" height=\"${7}\">\r\n<param name=\"src\" value=\"${8}\" />\r\n<param name=\"autostart_step\" value=\"false\" />\r\n<param name=\"controls\" value=\"ImageWindow\" />\r\n<param name=\"console\" value=\"ctrls_${8}\" />\r\n<param name=\"prefetch\" value=\"false\" />\r\n<embed name=\"rmstream_${8}\" type=\"audio/x-pn-realaudio-plugin\" src=\"${8}\" width=\"${4}\" height=\"${7}\" autostart_step=\"false\" controls=\"ImageWindow\" console=\"ctrls_${8}\" prefetch=\"false\"></embed>\r\n</object>\r\n<br />\r\n<object id=\"ctrls_${8}\" classid=\"clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA\" width=\"${4}\" height=\"36\">\r\n<param name=\"controls\" value=\"ControlPanel\" />\r\n<param name=\"console\" value=\"ctrls_${8}\" />\r\n<embed name=\"ctrls_${8}\" type=\"audio/x-pn-realaudio-plugin\" width=\"${4}\" height=\"36\" controls=\"ControlPanel\" console=\"ctrls_${8}\"></embed>\r\n</object><br/>", 0, 0, 0, 1, "ram.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("gvideo",		71, ' . ($next_bbcode_id+45) . ', "ABBC3_GVIDEO_TIP", "[GVideo]{URL}[/GVideo]", "<a src=\"{URL}\">{URL}</a>", "!\\\[Gvideo\\\]http://video.google.(.*?)/videoplay\\\?docid\\\=(.*?)\\\[/Gvideo\\\]!ies", "\'[Gvideo:$uid]http://video.google.${1}/videoplay?docid=${2}[/Gvideo:$uid]\'", "!\\\[Gvideo:$uid\\\]http://video.google.(.*?)/videoplay\\\?docid\\\=(.*?)\\\[/Gvideo:$uid\\\]!s", "<object classid=\"clsid:D27CDB6E-AE6D-11CF-96B8-444553540000\" codebase=\"http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0\" width=\"425\" height=\"350\">\r\n<param name=\"movie\" value=\"http://video.google.$1/googleplayer.swf?docid=$2\" />\r\n<param name=\"play\" value=\"false\" />\r\n<param name=\"loop\" value=\"false\" />\r\n<param name=\"quality\" value=\"high\" />\r\n<param name=\"allowScriptAccess\" value=\"never\" />\r\n<param name=\"allowNetworking\" value=\"internal\" />\r\n<embed src=\"http://video.google.$1/googleplayer.swf?docid=$2\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash\" width=\"425\" height=\"350\" play=\"false\" loop=\"false\" quality=\"high\" allowscriptaccess=\"never\" allownetworking=\"internal\"></embed>\r\n</object>\r\n<br/>", 0, 0, 0, 1, "googlevid.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("youtube",		72, ' . ($next_bbcode_id+46) . ', "ABBC3_YOUTUBE_TIP", "[youtube]{URL}[/youtube]", "<a src=\"{URL}\">{URL}</a>", "!\\\[youtube\\\]http://((.*?)?)youtube.com/watch\\\?v\\\=([0-9A-Za-z-_]{11})[^[]*\\\[/youtube\\\]!ies", "\'[youtube:$uid]http://${1}youtube.com/watch?v=${3}[/youtube:$uid]\'", "!\\\[youtube:$uid\\\]http://((.*?)?)youtube.com/watch\\\?v\\\=([0-9A-Za-z-_]{11})[^[]*\\\[/youtube:$uid\\\]!s", "<object width=\"425\" height=\"350\">\r\n<param name=\"movie\" value=\"http://${2}youtube.com/v/${3}\" />\r\n<param name=\"wmode\" value=\"transparent\" />\r\n<embed src=\"http://${2}youtube.com/v/${3}\" type=\"application/x-shockwave-flash\" wmode=\"transparent\" width=\"425\" height=\"350\"></embed>\r\n</object>\r\n<br/>", 0, 0, 0, 1, "youtube.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("veoh", 		73, ' . ($next_bbcode_id+47) . ', "ABBC3_VEOH_TIP", "[veoh]{URL}[/veoh]", "<a src=\"{URL}\">{URL}</a>", "!\\\[veoh\\\]http://(.*?).veoh.com/videos/(.*?)\\\[/veoh\\\]!ies", "\'[veoh:$uid]http://${1}.veoh.com/videos/${2}[/veoh:$uid]\'", "!\\\[veoh:$uid\\\]http://(.*?).veoh.com/videos/(.*?)\\\[/veoh:$uid\\\]!s", "<embed src=\"http://${1}.veoh.com/videodetails2.swf?permalinkId=${2}&id=anonymous&player=videodetailsembedded&videoAutoPlay=0\" allowFullScreen=\"true\" width=\"540\" height=\"438\" bgcolor=\"#000000\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\"></embed><br/>", 0, 0, 0, 1, "veoh.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("collegehumor", 74, ' . ($next_bbcode_id+48) . ', "ABBC3_COLLEGE_TIP", "[collegehumor]{URL}[/collegehumor]", "<a src=\"{URL}\">{URL}</a>", "!\\\[collegehumor\\\]http://www.collegehumor.com/video:(.*?)\\\[/collegehumor\\\]!ies", "\'[collegehumor:$uid]http://www.collegehumor.com/video:${1}[/collegehumor:$uid]\'", "!\\\[collegehumor:$uid\\\]http://www.collegehumor.com/video:(.*?)\\\[/collegehumor:$uid\\\]!s", "<object type=\"application/x-shockwave-flash\" data=\"http://www.collegehumor.com/moogaloop/moogaloop.swf?clip_id=${1}&fullscreen=1\" width=\"480\" height=\"360\" >\r\n<param name=\"allowfullscreen\" value=\"true\" />\r\n<param name=\"movie\" quality=\"best\" value=\"http://www.collegehumor.com/moogaloop/moogaloop.swf?clip_id=${1}&fullscreen=1\" />\r\n</object><br/>", 0, 0, 0, 1, "collegehumor.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("dm", 			75, ' . ($next_bbcode_id+49) . ', "ABBC3_DMOTION_TIP", "[dm]{URL}[/dm]", "<a src=\"{URL}\">{URL}</a>", "!\\\[dm\\\](.*?)\\\[/dm\\\]!ies", "\'[dm:$uid]${1}[/dm:$uid]\'", "!\\\[dm:$uid\\\](.*?)\\\[/dm:$uid\\\]!s", "<object width=\"420\" height=\"352\">\r\n<param name=\"movie\" value=\"${1}\" />\r\n<param name=\"allowFullScreen\" value=\"true\" />\r\n<param name=\"allowScriptAccess\" value=\"never\" />\r\n<embed src=\"${1}\" type=\"application/x-shockwave-flash\" width=\"420\" height=\"352\" allowFullScreen=\"true\" allowScriptAccess=\"never\"></embed>\r\n</object><br/>", 0, 0, 0, 1, "dailymotion.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("gamespot",		76, ' . ($next_bbcode_id+50) . ', "ABBC3_GAMESPOT_TIP", "[gamespot]{URL}[/gamespot]", "<a src=\"{URL}\">{URL}</a>", "!\\\[gamespot\\\]http://www.gamespot.com/video/(.*?)/(.*?)\\\[/gamespot\\\]!ies", "\'[gamespot:$uid]http://www.gamespot.com/video/${1}/${2}[/gamespot:$uid]\'", "!\\\[gamespot:$uid\\\]http://www.gamespot.com/video/(.*?)/(.*?)\\\[/gamespot:$uid\\\]!s", "<embed id=\"mymovie\" width=\"432\" height=\"355\" flashvars=\"paramsURI=http%3A%2F%2Fwww%2Egamespot%2Ecom%2Fpages%2Fvideo%5Fplayer%2Fproteus%5Fxml%2Ephp%3Fadseg%3D%26adgrp%3D%26sid%3D${2}%26pid%3D${1}%26mb%3D%26onid%3D%26nc%3D1202626246593%26embedded%3D1%26showWatermark%3D0%26autoPlay%3D0\" allowfullscreen=\"true\" allowscriptaccess=\"never\" quality=\"high\" name=\"mymovie\" src=\"http://image.com.com/gamespot/images/cne_flash/production/media_player/proteus/gs/proteus_embed.swf\" type=\"application/x-shockwave-flash\"/><br/>", 0, 0, 0, 1, "gamespot.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("gametrailers", 77, ' . ($next_bbcode_id+51) . ', "ABBC3_GAMETRAILERS_TIP", "[gametrailers]{URL}[/gametrailers]", "<a src=\"{URL}\">{URL}</a>", "!\\\[gametrailers\\\]http://www.gametrailers.com/player/(.*?).html\\\[/gametrailers\\\]!ies", "\'[gametrailers:$uid]http://www.gametrailers.com/player/${1}.html[/gametrailers:$uid]\'", "!\\\[gametrailers:$uid\\\]http://www.gametrailers.com/player/(.*?).html\\\[/gametrailers:$uid\\\]!s", "<object classid=\"clsid:d27cdb6e-ae6d-11cf-96b8-444553540000\" codebase=\"http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0\" id=\"gtembed\" width=\"480\" height=\"392\">\r\n<param name=\"allowScriptAccess\" value=\"never\" />\r\n<param name=\"allowFullScreen\" value=\"true\" />\r\n<param name=\"movie\" value=\"http://www.gametrailers.com/remote_wrap.php?mid=${1}\" />\r\n<param name=\"quality\" value=\"high\" />\r\n<embed src=\"http://www.gametrailers.com/remote_wrap.php?mid=${1}\" swLiveConnect=\"true\" name=\"gtembed\" align=\"middle\" allowScriptAccess=\"never\" allowFullScreen=\"true\" quality=\"high\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\" type=\"application/x-shockwave-flash\" width=\"480\" height=\"392\"></embed>\r\n</object><br/>", 0, 0, 0, 1, "gametrailers.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("ignvideo", 	78, ' . ($next_bbcode_id+52) . ', "ABBC3_IGNVIDEO_TIP", "[ignvideo]{URL}[/ignvideo]", "<a src=\"{URL}\">{URL}</a>", "!\\\[ignvideo\\\](.*?)\\\[/ignvideo\\\]!ies", "\'[ignvideo:$uid]${1}[/ignvideo:$uid]\'", "!\\\[ignvideo:$uid\\\](.*?)\\\[/ignvideo:$uid\\\]!s", "<embed src=\"http://videomedia.ign.com/ev/ev.swf\" flashvars=\"${1}\" type=\"application/x-shockwave-flash\" width=\"433\" height=\"360\" ></embed><br/>", 0, 0, 0, 1, "ign.gif")',
		'INSERT INTO ' . BBCODES_TABLE . ' (bbcode_tag, bbcode_order, bbcode_id, bbcode_helpline, bbcode_match, bbcode_tpl, first_pass_match, first_pass_replace, second_pass_match, second_pass_replace, display_on_posting, display_on_pm, display_on_sig, abbcode, bbcode_image) 
			VALUES ("liveleak",		79, ' . ($next_bbcode_id+53) . ', "ABBC3_LIVELEAK_TIP", "[liveleak]{URL}[/liveleak]", "<a src=\"{URL}\">{URL}</a>", "!\\\[liveleak\\\]http://www.liveleak.com/view\\\?i\\\=(.*?)\\\[/liveleak\\\]!ies", "\'[liveleak:$uid]http://www.liveleak.com/view?i=${1}[/liveleak:$uid]\'", "!\\\[liveleak:$uid\\\]http://www.liveleak.com/view\\\?i\\\=(.*?)\\\[/liveleak:$uid\\\]!s", "<object type=\"application/x-shockwave-flash\" width=\"450\" height=\"370\" wmode=\"transparent\" data=\"http://www.liveleak.com/player.swf?autostart_step=false&token=${1}\">\r\n<param name=\"movie\" value=\"http://www.liveleak.com/player.swf?autostart_step=false&token=${1}\" />\r\n<param name=\"wmode\" value=\"transparent\" />\r\n<param name=\"quality\" value=\"high\" />\r\n</object><br/>", 0, 0, 0, 1, "liveleak.gif")',
	);
	
	$no_updates	= 1;
	$error_ary	= array();
	$msg_error	= '';
	$msg_text	= '';
	$msg		= '';

	$db->sql_return_on_error(true);
	foreach ($sql_ary as $sql)
	{
		list( $garbage, $row_value ) = split( 'VALUES', $sql );
		list( $garbage, $row_name ) = split( '"', $row_value );
		
		$msg = sprintf($user->lang['STEP_PERCENT_COMPLETED'], $no_updates, sizeof($sql_ary)) . ' ::  &raquo; [' . $row_name . '] ';

		if ( in_array($row_name, $bbcode_tag_ary))
		{
			$msg_error .= $msg . $user->lang['LINE_UNMODIFIED'] . '<br/>';
		}
		else
		{
			$result = $db->sql_query($sql);
		
			if ($db->sql_error_triggered)
			{
				$msg_error .= $msg . $user->lang['LINE_UNMODIFIED'] . '<br/>';
			}
			else 
			{
				$msg_error .= $msg . $user->lang['LINE_ADDED'] . '<br/>';
			}
		}
		$no_updates++;
	}
	$db->sql_return_on_error(false);
	
	$msg = sprintf($user->lang['STEP_PERCENT_COMPLETED'], 3, 7) . ' :: ' . $user->lang['UPDATE_DATABASE_SCHEMA'] . '<br/><br/>';
	$msg_text = $msg . btn_link(4, 'NEXT_STEP') . '<br/><hr /><p style="text-align:left;">' . $msg_error . '</p>';
	msg_handler(E_USER_WARNING, $msg_text, '',''); //trigger_error( $msg . btn_link(4, 'NEXT_STEP') );
}

elseif ( $start_step == 4 )
{
	$msg = sprintf($user->lang['STEP_PERCENT_COMPLETED'], 4, 7) . ' :: ' . $user->lang['POSTS'] . '<br/><br/>' ;
	trigger_error( $msg . $user->lang['PERFORM_DATABASE_UPDATE_EXPLAIN'] . '<br/><br/>' . btn_link(8, 'SKIP'). btn_link(5, 'NEXT_STEP') );
}

// Now adjust posts
elseif ( $start_step == 5 )
{
	$limit = 200;
	$start = intval(request_var('start', 0));
	
	include($phpbb_root_path . 'includes/message_parser.' . $phpEx);
	
	$sql = 'SELECT * FROM ' . POSTS_TABLE . ' p, ' . TOPICS_TABLE . ' t 
		WHERE t.topic_id = p.topic_id 
		ORDER BY p.post_id ASC 
		LIMIT ' . $start . ', ' . $limit;
	$result = $db->sql_query($sql);
	
	$db->sql_return_on_error(true);
	while ($row = $db->sql_fetchrow($result))
	{
		decode_message($row['post_text'], $row['bbcode_uid']);
		
		$message_parser = new parse_message();
		$message_parser->message = str_replace('"', '&quot;', html_entity_decode($row['post_text']));

		$bbcode_status		= ($config['allow_bbcode']) ? true : false;
		$allow_bbcode		= ($bbcode_status) ? $row['enable_bbcode'] : false ;
		$allow_magic_url	= ($config['allow_post_links']) ? $row['enable_magic_url'] : false;
		$allow_smilies		= $row['enable_smilies'];
		$allow_img_bbcode	= ($bbcode_status) ? true : false;
		$allow_flash_bbcode	= ($bbcode_status && $config['allow_post_flash']) ? true : false;
		$allow_quote_bbcode	= true;
		$allow_url_bbcode	= $config['allow_post_links'];
		$update_this_message= true;
		$mode				= 'post';
				
		$message_parser->parse( $allow_bbcode, $allow_magic_url, $allow_smilies, $allow_img_bbcode, $allow_flash_bbcode, $allow_quote_bbcode, $allow_url_bbcode, $update_this_message, $mode);

		if ($row['poll_title'] && $row['post_id'] == $row['topic_first_post_id'])
		{
			$row['poll_option_text'] = '';
			$sql = 'SELECT * FROM ' . POLL_OPTIONS_TABLE . ' WHERE topic_id = ' . $row['topic_id'];
			$result2 = $db->sql_query($sql);
			
			while ($row2 = $db->sql_fetchrow($result2))
			{
				$row['poll_option_text'] .= $row2['poll_option_text'] . "\n";
			}
			$db->sql_freeresult($result2);
			
			$poll = array(
				'poll_title'		=> $row['poll_title'],
				'poll_length'		=> $row['poll_length'],
				'poll_max_options'	=> $row['poll_max_options'],
				'poll_option_text'	=> $row['poll_option_text'],
				'poll_start'		=> $row['poll_start'],
				'poll_last_vote'	=> $row['poll_last_vote'],
				'poll_vote_change'	=> $row['poll_vote_change'],
				'enable_bbcode'		=> $row['enable_bbcode'],
				'enable_urls'		=> $row['enable_magic_url'],
				'enable_smilies'	=> $row['enable_smilies'],
				'img_status'		=> $allow_img_bbcode
			);
			
			$message_parser->parse_poll($poll);
		}
		
		$sql_data = array(
			'post_text'				=> $message_parser->message,
			'post_checksum'			=> md5($message_parser->message),
			'bbcode_bitfield'		=> $message_parser->bbcode_bitfield,
			'bbcode_uid'			=> $message_parser->bbcode_uid,
		);
		
		$sql = 'UPDATE ' . POSTS_TABLE . ' SET ' . $db->sql_build_array('UPDATE', $sql_data) . ' 
			WHERE post_id = ' . $row['post_id'];
		$result_error = $db->sql_query($sql);
		
		if (!$result_error)
		{
			$error_ary['sql'][] = $user->lang['POST'] . ' ( ' . $row['post_id'] . ' ) :: ' . $user->lang['LINE_UNMODIFIED'] . '<br/>';
		}
		else
		{
			$error_ary['sql'][0] = $user->lang['POSTS'] . ' :: ' . $user->lang['DONE'] . '<br/>';
		}
		
		if ($row['poll_title'] && $row['post_id'] == $row['topic_first_post_id'])
		{
			$sql_data = array(
				'poll_title'      => str_replace($row['bbcode_uid'], $message_parser->bbcode_uid, $poll['poll_title']),
			);
			
			$sql = 'UPDATE ' . TOPICS_TABLE . ' SET ' . $db->sql_build_array('UPDATE', $sql_data) . ' 
				WHERE topic_id = ' . $row['topic_id'];
			$db->sql_query($sql);
			
			$sql = 'SELECT * FROM ' . POLL_OPTIONS_TABLE . ' WHERE topic_id = ' . $row['topic_id'];
			$result2 = $db->sql_query($sql);
			
			while ($row2 = $db->sql_fetchrow($result2))
			{
				$sql_data = array(
					'poll_option_text'      => str_replace($row['bbcode_uid'], $message_parser->bbcode_uid, $row2['poll_option_text']),
				);
				
				$sql = 'UPDATE ' . POLL_OPTIONS_TABLE . ' SET ' . $db->sql_build_array('UPDATE', $sql_data) . ' 
					WHERE topic_id = ' . $row['topic_id'] . ' 
					AND poll_option_id = ' . $row2['poll_option_id'];
				$db->sql_query($sql);
			}
		}
	}

	$sql = 'SELECT count(post_id) as post_cnt FROM ' . POSTS_TABLE;
	$result = $db->sql_query($sql);
	$cnt = $db->sql_fetchrow($result);
	
	$db->sql_return_on_error(false);

	if ($cnt['post_cnt'] > ($start + $limit))
	{
		$msg = sprintf($user->lang['STEP_PERCENT_COMPLETED'], (($start + $limit) / $limit), intval($cnt['post_cnt'] / $limit)  . ' :: ' ) ;

		meta_refresh(1, './install_abbc3.' . $phpEx . '?start_step=5&amp;start=' . ($start + $limit));
		trigger_error( $user->lang['LONG_SCRIPT_EXECUTION'] . "<p>$msg</p>" );
	}
	else
	{
		for ($i = 0; $i < sizeof($error_ary['sql']); $i++)
		{
			$msg_error .= $error_ary['sql'][$i];
		}

		$msg = sprintf($user->lang['STEP_PERCENT_COMPLETED'], 5, 7) . ' :: ' . $user->lang['PM'] . '<br/><br/>' ;
		$msg_text = $msg . $user->lang['PERFORM_DATABASE_UPDATE_EXPLAIN'] . '<br/><br/>' . btn_link(8, 'SKIP'). btn_link(6, 'NEXT_STEP') . '<br/><hr /><p style="text-align:left;">' . $msg_error . '</p>';
	//	trigger_error( $msg . $user->lang['PERFORM_DATABASE_UPDATE_EXPLAIN'] . '<br/><br/>' . btn_link(8, 'SKIP'). btn_link(6, 'NEXT_STEP') );
		msg_handler(E_USER_WARNING, $msg_text, '','');
	}
}

// Now Update pms
elseif ( $start_step == 6 )
{
	$limit = 200;
	$start = intval(request_var('start', 0));	
	
	include($phpbb_root_path . 'includes/message_parser.' . $phpEx);
	
	$sql = 'SELECT * FROM ' . PRIVMSGS_TABLE . ' 
		ORDER BY msg_id ASC 
		LIMIT ' . $start . ', ' . $limit;
	$result = $db->sql_query($sql);
	
	$db->sql_return_on_error(true);
	while ($row = $db->sql_fetchrow($result))
	{
		decode_message($row['message_text'], $row['bbcode_uid']);
		
		$message_parser = new parse_message();
		$message_parser->message = str_replace('"', '&quot;', html_entity_decode($row['message_text']));

		$bbcode_status		= ($config['allow_bbcode'] && $config['auth_bbcode_pm']) ? true : false;
		$allow_bbcode		= ($bbcode_status) ? $row['enable_bbcode'] : false ;
		$allow_magic_url	= ($bbcode_status && $config['allow_post_links']) ? $row['enable_magic_url'] : false;
		$allow_smilies		= ($bbcode_status && $row['enable_smilies']) ? true : false;
		$allow_img_bbcode	= ($bbcode_status && $config['auth_img_pm']) ? true : false;
		$allow_flash_bbcode	= ($bbcode_status && $config['auth_flash_pm']) ? true : false;
		$allow_quote_bbcode	= $bbcode_status;
		$allow_url_bbcode	= ($bbcode_status && $config['allow_post_links']) ? true : false;
		$update_this_message= true;
		$mode				= 'post';
				
		$message_parser->parse( $allow_bbcode, $allow_magic_url, $allow_smilies, $allow_img_bbcode, $allow_flash_bbcode, $allow_quote_bbcode, $allow_url_bbcode, $update_this_message, $mode);

		$sql_data = array(
			'message_text'			=> $message_parser->message,
			'bbcode_bitfield'		=> $message_parser->bbcode_bitfield,
			'bbcode_uid'			=> $message_parser->bbcode_uid,
		);
		
		$sql = 'UPDATE ' . PRIVMSGS_TABLE . ' SET ' . $db->sql_build_array('UPDATE', $sql_data) . ' 
			WHERE msg_id = ' . $row['msg_id'];
		$result_error = $db->sql_query($sql);
		
		if (!$result_error)
		{
			$error_ary['sql'][] = $user->lang['PM'] . ' ( ' . $row['msg_id'] . ' ) :: ' . $user->lang['LINE_UNMODIFIED'] . '<br/>';
		}
		else
		{
			$error_ary['sql'][0] = $user->lang['PM'] . ' :: ' . $user->lang['DONE'] . '<br/>';
		}
	}

	$sql = 'SELECT count(msg_id) as post_cnt FROM ' . PRIVMSGS_TABLE;
	$result = $db->sql_query($sql);
	$cnt = $db->sql_fetchrow($result);
	
	$db->sql_return_on_error(false);

	if ($cnt['post_cnt'] > ($start + $limit))
	{
		$msg = sprintf($user->lang['STEP_PERCENT_COMPLETED'], (($start + $limit) / $limit), intval($cnt['post_cnt'] / $limit)  . ' :: ' ) ;

		meta_refresh(1, './install_abbc3.' . $phpEx . '?start_step=6&amp;start=' . ($start + $limit));
		trigger_error( $user->lang['LONG_SCRIPT_EXECUTION'] . "<p>$msg</p>" );
	}
	else
	{
		for ($i = 0; $i < sizeof($error_ary['sql']); $i++)
		{
			$msg_error .= $error_ary['sql'][$i];
		}

		$msg = sprintf($user->lang['STEP_PERCENT_COMPLETED'], 6, 7) . ' :: ' . $user->lang['SIGNATURE'] . '<br/><br/>' ;
		$msg_text = $msg . $user->lang['PERFORM_DATABASE_UPDATE_EXPLAIN'] . '<br/><br/>' . btn_link(8, 'SKIP'). btn_link(7, 'NEXT_STEP') . '<br/><hr /><p style="text-align:left;">' . $msg_error . '</p>';
	//	trigger_error( $msg . $user->lang['PERFORM_DATABASE_UPDATE_EXPLAIN'] . '<br/><br/>' . btn_link(8, 'SKIP'). btn_link(7, 'NEXT_STEP') );
		msg_handler(E_USER_WARNING, $msg_text, '','');
	}
}

// Adjust user signatures
elseif ( $start_step == 7 )
{
	$limit = 200;
	$start = intval(request_var('start', 0));	
	
	include($phpbb_root_path . 'includes/message_parser.' . $phpEx);
	
	$sql = 'SELECT * FROM ' . USERS_TABLE . ' 
		ORDER BY user_id ASC 
		LIMIT ' . $start . ', ' . $limit;
	$result = $db->sql_query($sql);
	
	$db->sql_return_on_error(true);
	while ($row = $db->sql_fetchrow($result))
	{
		decode_message($row['user_sig'], $row['user_sig_bbcode_uid']);
		
		$message_parser = new parse_message();
		$message_parser->message = str_replace('"', '&quot;', html_entity_decode($row['user_sig']));

		$bbcode_status		= ($config['allow_bbcode'] && $config['allow_sig_bbcode']) ? true : false;
		$allow_bbcode		= ($bbcode_status) ? true : false;
		$allow_magic_url	= ($bbcode_status && $config['allow_sig_links']) ? true : false;
		$allow_smilies		= ($bbcode_status && $config['allow_sig_smilies']) ? true : false;
		$allow_img_bbcode	= ($bbcode_status && $config['allow_sig_img'] ) ? true : false;
		$allow_flash_bbcode	= ($bbcode_status && $config['allow_sig_flash']) ? true : false;
		$allow_quote_bbcode	= $bbcode_status;
		$allow_url_bbcode	= ($bbcode_status && $config['allow_sig_links']) ? true : false;
		$update_this_message= true;
		$mode				= 'post';

		$message_parser->parse( $allow_bbcode, $allow_magic_url, $allow_smilies, $allow_img_bbcode, $allow_flash_bbcode, $allow_quote_bbcode, $allow_url_bbcode, $update_this_message, $mode);

		$sql_data = array(
			'user_sig'					=> $message_parser->message,
			'user_sig_bbcode_bitfield'	=> $message_parser->bbcode_bitfield,
			'user_sig_bbcode_uid'		=> $message_parser->bbcode_uid,
		);
		
		$sql = 'UPDATE ' . USERS_TABLE . ' SET ' . $db->sql_build_array('UPDATE', $sql_data) . ' 
			WHERE user_id = ' . $row['user_id'];
		$result_error = $db->sql_query($sql);
		
		if (!$result_error)
		{
			$error_ary['sql'][] = $user->lang['SIGNATURE'] . ' ( ' . $row['user_id'] . ' ) :: ' . $user->lang['LINE_UNMODIFIED'] . '<br/>';
		}
		else
		{
			$error_ary['sql'][0] = $user->lang['SIGNATURE'] . ' :: ' . $user->lang['DONE'] . '<br/>';
		}
	}

	$sql = 'SELECT count(user_id) as post_cnt FROM ' . USERS_TABLE;
	$result = $db->sql_query($sql);
	$cnt = $db->sql_fetchrow($result);
	
	$db->sql_return_on_error(false);

	if ($cnt['post_cnt'] > ($start + $limit))
	{
		$msg = sprintf($user->lang['STEP_PERCENT_COMPLETED'], (($start + $limit) / $limit), intval($cnt['post_cnt'] / $limit)  . ' :: ' ) ;

		meta_refresh(1, './install_abbc3.' . $phpEx . '?start_step=7&amp;start=' . ($start + $limit));
		trigger_error( $user->lang['LONG_SCRIPT_EXECUTION'] . "<p>$msg</p>" );
	}
	else
	{
		$user->lang['COMPLETE_TO_BOARD'] = str_replace('install', 'install_abbc3.' . $phpEx , $user->lang['COMPLETE_LOGIN_TO_BOARD']);
		$user->lang['COMPLETE_TO_BOARD'] = str_replace('../ucp.php?mode=login', 'index.' . $phpEx , $user->lang['COMPLETE_TO_BOARD']);


		for ($i = 0; $i < sizeof($error_ary['sql']); $i++)
		{
			$msg_error .= $error_ary['sql'][$i];
		}

		$msg_text = "<p>" . $user->lang['UPDATE_COMPLETED'] . "</p><br/><p>" . $user->lang['COMPLETE_TO_BOARD'] . "</p>";
	//	trigger_error( "<p>" . $user->lang['UPDATE_COMPLETED'] . "</p><br/><p>" . $user->lang['COMPLETE_TO_BOARD'] . "</p>" );
		msg_handler(E_USER_WARNING, $msg_text, '','');
	}
}

elseif ( $start_step == 8 )
{
	$user->lang['COMPLETE_TO_BOARD'] = str_replace('install', 'install_abbc3.' . $phpEx , $user->lang['COMPLETE_LOGIN_TO_BOARD']);
	$user->lang['COMPLETE_TO_BOARD'] = str_replace('../ucp.php?mode=login', 'index.' . $phpEx , $user->lang['COMPLETE_TO_BOARD']);

	trigger_error( "<p>" . $user->lang['UPDATE_COMPLETED'] . "</p><br/><p>" . $user->lang['COMPLETE_TO_BOARD'] . "</p>" );
}
print_r( $user->lang['UPDATE_COMPLETED'] );

function btn_link($action, $lang)
{
	global $user, $phpEx;
	return '<p><center><b><a href="install_abbc3.' . $phpEx . '?start_step=' . $action . '" class="button2 btnlite">' . $user->lang[$lang] . '</a></b></center></p><br/>';
}

function _sql($sql, &$errored, &$error_ary, $echo_dot = true)
{
	global $db, $user;

#	if (defined('DEBUG_EXTRA'))
#	{
#		echo "<br />\n{$sql}\n<br />";
#	}

	$db->sql_return_on_error(true);

	$result = $db->sql_query($sql);
	
	if ($db->sql_error_triggered)
	{
		$error_ary['sql'][] = $user->lang['LINE_UNMODIFIED'] . '<br/>';
	}
	else
	{
		$error_ary['sql'][] = $user->lang['LINE_ADDED'] . '<br/>';
	}

#	if ($db->sql_error_triggered)
#	{
#		$errored = true;
#		$error_ary['sql'][] = $db->sql_error_sql;
#		$error_ary['error_code'][] = $db->_sql_error();
#	}

	$db->sql_return_on_error(false);

#	if ($echo_dot)
#	{
#		echo ". \n";
#		flush();
#	}
	return $result;
}

/**
* Check if a specified column exist
*/
function column_exists($dbms, $table, $column_name)
{
	global $db;
	
	// Determine mapping database type
	switch ($dbms)
	{
		case 'mysql_40':
		case 'mysql_41'://mysql_41
			$sql = "SHOW COLUMNS
				FROM $table";
			$result = $db->sql_query($sql);
			while ($row = $db->sql_fetchrow($result))
			{
				// lower case just in case
				if (strtolower($row['Field']) == $column_name)
				{
					$db->sql_freeresult($result);
					return 1;
				}
			}
			$db->sql_freeresult($result);
			return 0;
		break;

		// PostgreSQL has a way of doing this in a much simpler way but would
		// not allow us to support all versions of PostgreSQL
		case 'postgres':
			$sql = "SELECT a.attname
				FROM pg_class c, pg_attribute a
				WHERE c.relname = '{$table}'
					AND a.attnum > 0
					AND a.attrelid = c.oid";
			$result = $db->sql_query($sql);
			while ($row = $db->sql_fetchrow($result))
			{
				// lower case just in case
				if (strtolower($row['attname']) == $column_name)
				{
					$db->sql_freeresult($result);
					return 1;
				}
			}
			$db->sql_freeresult($result);
			return 0;
		break;

		// same deal with PostgreSQL, we must perform more complex operations than
		// we technically could
		case 'mssql':
			$sql = "SELECT c.name
				FROM syscolumns c
				LEFT JOIN sysobjects o ON c.id = o.id
				WHERE o.name = '{$table}'";
			$result = $db->sql_query($sql);
			while ($row = $db->sql_fetchrow($result))
			{
				// lower case just in case
				if (strtolower($row['name']) == $column_name)
				{
					$db->sql_freeresult($result);
					return 1;
				}
			}
			$db->sql_freeresult($result);
			return 0;
		break;

		case 'oracle':
			$sql = "SELECT column_name
				FROM user_tab_columns
				WHERE table_name = '{$table}'";
			$result = $db->sql_query($sql);
			while ($row = $db->sql_fetchrow($result))
			{
				// lower case just in case
				if (strtolower($row['column_name']) == $column_name)
				{
					$db->sql_freeresult($result);
					return 1;
				}
			}
			$db->sql_freeresult($result);
			return 0;
		break;

		case 'firebird':
			$sql = "SELECT RDB\$FIELD_NAME as FNAME
				FROM RDB\$RELATION_FIELDS
				WHERE RDB\$RELATION_NAME = '{$table}'";
			$result = $db->sql_query($sql);
			while ($row = $db->sql_fetchrow($result))
			{
				// lower case just in case
				if (strtolower($row['fname']) == $column_name)
				{
					$db->sql_freeresult($result);
					return 1;
				}
			}
			$db->sql_freeresult($result);
			return 0;
		break;

		// ugh, SQLite
		case 'sqlite':
			$sql = "SELECT sql
				FROM sqlite_master
				WHERE type = 'table'
					AND name = '{$table}'";
			$result = $db->sql_query($sql);

			if (!$result)
			{
				return 0;
			}

			$row = $db->sql_fetchrow($result);
			$db->sql_freeresult($result);

			preg_match('#\((.*)\)#s', $row['sql'], $matches);

			$cols = trim($matches[1]);
			$col_array = preg_split('/,(?![\s\w]+\))/m', $cols);

			foreach ($col_array as $declaration)
			{
				$entities = preg_split('#\s+#', trim($declaration));
				if ($entities[0] == 'PRIMARY')
				{
					continue;
				}

				if (strtolower($entities[0]) == $column_name)
				{
					return 1;
				}
			}
			return 0;
		break;
	}
}


function sql_create_index($dbms, $index_name, $table_name, $column)
{
	global $dbms_type_map, $db;
	global $errored, $error_ary;

	switch ($dbms)
	{
		case 'firebird':
		case 'postgres':
		case 'oracle':
		case 'sqlite':
			$sql = 'CREATE INDEX ' . $table_name . '_' . $index_name . ' ON ' . $table_name . '(' . implode(', ', $column) . ')';
			_sql($sql, $errored, $error_ary);
		break;

		case 'mysql_40':
		case 'mysql_41':
			$sql = 'CREATE INDEX ' . $index_name . ' ON ' . $table_name . '(' . implode(', ', $column) . ')';
			_sql($sql, $errored, $error_ary);
		break;

		case 'mssql':
			$sql = 'CREATE INDEX ' . $index_name . ' ON ' . $table_name . '(' . implode(', ', $column) . ') ON [PRIMARY]';
			_sql($sql, $errored, $error_ary);
		break;
	}
}

/**
* Add new column
*/
function sql_column_add($dbms, $table_name, $column_name, $column_data)
{
	global $errored, $error_ary;

	$column_data = prepare_column_data($dbms, $column_data, $table_name, $column_name);

	switch ($dbms)
	{
		case 'firebird':
			$sql = 'ALTER TABLE "' . $table_name . '" ADD "' . $column_name . '" ' . $column_data['column_type_sql'];
			_sql($sql, $errored, $error_ary);
		break;

		case 'mssql':
			$sql = 'ALTER TABLE [' . $table_name . '] ADD [' . $column_name . '] ' . $column_data['column_type_sql_default'];
			_sql($sql, $errored, $error_ary);
		break;

		case 'mysql_40':
		case 'mysql_41':
			$sql = 'ALTER TABLE `' . $table_name . '` ADD COLUMN `' . $column_name . '` ' . $column_data['column_type_sql'];
			_sql($sql, $errored, $error_ary);
		break;

		case 'oracle':
			$sql = 'ALTER TABLE ' . $table_name . ' ADD ' . $column_name . ' ' . $column_data['column_type_sql'];
			_sql($sql, $errored, $error_ary);
		break;

		case 'postgres':
			$sql = 'ALTER TABLE ' . $table_name . ' ADD COLUMN "' . $column_name . '" ' . $column_data['column_type_sql'];
			_sql($sql, $errored, $error_ary);
		break;

		case 'sqlite':
			if (version_compare(sqlite_libversion(), '3.0') == -1)
			{
				global $db;
				$sql = "SELECT sql
					FROM sqlite_master
					WHERE type = 'table'
						AND name = '{$table_name}'
					ORDER BY type DESC, name;";
				$result = $db->sql_query($sql);

				if (!$result)
				{
					break;
				}

				$row = $db->sql_fetchrow($result);
				$db->sql_freeresult($result);

				$db->sql_transaction('begin');

				// Create a backup table and populate it, destroy the existing one
				$db->sql_query(preg_replace('#CREATE\s+TABLE\s+"?' . $table_name . '"?#i', 'CREATE TEMPORARY TABLE ' . $table_name . '_temp', $row['sql']));
				$db->sql_query('INSERT INTO ' . $table_name . '_temp SELECT * FROM ' . $table_name);
				$db->sql_query('DROP TABLE ' . $table_name);

				preg_match('#\((.*)\)#s', $row['sql'], $matches);

				$new_table_cols = trim($matches[1]);
				$old_table_cols = preg_split('/,(?![\s\w]+\))/m', $new_table_cols);
				$column_list = array();

				foreach ($old_table_cols as $declaration)
				{
					$entities = preg_split('#\s+#', trim($declaration));
					if ($entities[0] == 'PRIMARY')
					{
						continue;
					}
					$column_list[] = $entities[0];
				}

				$columns = implode(',', $column_list);

				$new_table_cols = $column_name . ' ' . $column_data['column_type_sql'] . ',' . $new_table_cols;

				// create a new table and fill it up. destroy the temp one
				$db->sql_query('CREATE TABLE ' . $table_name . ' (' . $new_table_cols . ');');
				$db->sql_query('INSERT INTO ' . $table_name . ' (' . $columns . ') SELECT ' . $columns . ' FROM ' . $table_name . '_temp;');
				$db->sql_query('DROP TABLE ' . $table_name . '_temp');

				$db->sql_transaction('commit');
			}
			else
			{
				$sql = 'ALTER TABLE ' . $table_name . ' ADD ' . $column_name . ' [' . $column_data['column_type_sql'] . ']';
				_sql($sql, $errored, $error_ary);
			}
		break;
	}
}

/**
* Function to prepare some column information for better usage
*/
function prepare_column_data($dbms, $column_data, $table_name, $column_name)
{
	global $dbms_type_map, $unsigned_types;

	global $phpbb_root_path, $phpEx, $db;
	include_once($phpbb_root_path . 'includes/db/db_tools.' . $phpEx);
	$db_tools = new phpbb_db_tools($db);
	$dbms_type_map = $db_tools->dbms_type_map;
	$dbms = $db_tools->sql_layer;
	
//	print_r($dbms_type_map);

	// Get type
	if (strpos($column_data[0], ':') !== false)
	{
		list($orig_column_type, $column_length) = explode(':', $column_data[0]);

		if (!is_array($dbms_type_map[$dbms][$orig_column_type . ':']))
		{
			$column_type = sprintf($dbms_type_map[$dbms][$orig_column_type . ':'], $column_length);
		}
		else
		{
			if (isset($dbms_type_map[$dbms][$orig_column_type . ':']['rule']))
			{
				switch ($dbms_type_map[$dbms][$orig_column_type . ':']['rule'][0])
				{
					case 'div':
						$column_length /= $dbms_type_map[$dbms][$orig_column_type . ':']['rule'][1];
						$column_length = ceil($column_length);
						$column_type = sprintf($dbms_type_map[$dbms][$orig_column_type . ':'][0], $column_length);
					break;
				}
			}

			if (isset($dbms_type_map[$dbms][$orig_column_type . ':']['limit']))
			{
				switch ($dbms_type_map[$dbms][$orig_column_type . ':']['limit'][0])
				{
					case 'mult':
						$column_length *= $dbms_type_map[$dbms][$orig_column_type . ':']['limit'][1];
						if ($column_length > $dbms_type_map[$dbms][$orig_column_type . ':']['limit'][2])
						{
							$column_type = $dbms_type_map[$dbms][$orig_column_type . ':']['limit'][3];
						}
						else
						{
							$column_type = sprintf($dbms_type_map[$dbms][$orig_column_type . ':'][0], $column_length);
						}
					break;
				}
			}
		}
		$orig_column_type .= ':';
	}
	else
	{
		$orig_column_type = $column_data[0];
		$column_type = $dbms_type_map[$dbms][$column_data[0]];
	}

	// Adjust default value if db-dependant specified
	if (is_array($column_data[1]))
	{
		$column_data[1] = (isset($column_data[1][$dbms])) ? $column_data[1][$dbms] : $column_data[1]['default'];
	}

	$sql = '';
	$return_array = array();

	switch ($dbms)
	{
		case 'firebird':
			$sql .= " {$column_type} ";

			if (!is_null($column_data[1]))
			{
				$sql .= 'DEFAULT ' . ((is_numeric($column_data[1])) ? $column_data[1] : "'{$column_data[1]}'") . ' ';
			}

			$sql .= 'NOT NULL';

			// This is a UNICODE column and thus should be given it's fair share
			if (preg_match('/^X?STEXT_UNI|VCHAR_(CI|UNI:?)/', $column_data[0]))
			{
				$sql .= ' COLLATE UNICODE';
			}

		break;

		case 'mssql':
			$sql .= " {$column_type} ";
			$sql_default = " {$column_type} ";

			// For adding columns we need the default definition
			if (!is_null($column_data[1]))
			{
				// For hexadecimal values do not use single quotes
				if (strpos($column_data[1], '0x') === 0)
				{
					$sql_default .= 'DEFAULT (' . $column_data[1] . ') ';
				}
				else
				{
					$sql_default .= 'DEFAULT (' . ((is_numeric($column_data[1])) ? $column_data[1] : "'{$column_data[1]}'") . ') ';
				}
			}

			$sql .= 'NOT NULL';
			$sql_default .= 'NOT NULL';

			$return_array['column_type_sql_default'] = $sql_default;
		break;

		case 'mysql_40':
		case 'mysql_41':
			$sql .= " {$column_type} ";

			// For hexadecimal values do not use single quotes
			if (!is_null($column_data[1]) && substr($column_type, -4) !== 'text' && substr($column_type, -4) !== 'blob')
			{
				$sql .= (strpos($column_data[1], '0x') === 0) ? "DEFAULT {$column_data[1]} " : "DEFAULT '{$column_data[1]}' ";
			}
			$sql .= 'NOT NULL';

			if (isset($column_data[2]))
			{
				if ($column_data[2] == 'auto_increment')
				{
					$sql .= ' auto_increment';
				}
				else if ($dbms === 'mysql_41' && $column_data[2] == 'true_sort')
				{
					$sql .= ' COLLATE utf8_unicode_ci';
				}
			}

		break;

		case 'oracle':
			$sql .= " {$column_type} ";
			$sql .= (!is_null($column_data[1])) ? "DEFAULT '{$column_data[1]}' " : '';

			// In Oracle empty strings ('') are treated as NULL.
			// Therefore in oracle we allow NULL's for all DEFAULT '' entries
			// Oracle does not like setting NOT NULL on a column that is already NOT NULL (this happens only on number fields)
			if (preg_match('/number/i', $column_type))
			{
				$sql .= ($column_data[1] === '') ? '' : 'NOT NULL';
			}
		break;

		case 'postgres':
			$return_array['column_type'] = $column_type;

			$sql .= " {$column_type} ";

			if (isset($column_data[2]) && $column_data[2] == 'auto_increment')
			{
				$default_val = "nextval('{$table_name}_seq')";
			}
			else if (!is_null($column_data[1]))
			{
				$default_val = "'" . $column_data[1] . "'";
				$return_array['null'] = 'NOT NULL';
				$sql .= 'NOT NULL ';
			}

			$return_array['default'] = $default_val;

			$sql .= "DEFAULT {$default_val}";

			// Unsigned? Then add a CHECK contraint
			if (in_array($orig_column_type, $unsigned_types))
			{
				$return_array['constraint'] = "CHECK ({$column_name} >= 0)";
				$sql .= " CHECK ({$column_name} >= 0)";
			}
		break;

		case 'sqlite':
			if (isset($column_data[2]) && $column_data[2] == 'auto_increment')
			{
				$sql .= ' INTEGER PRIMARY KEY';
			}
			else
			{
				$sql .= ' ' . $column_type;
			}

			$sql .= ' NOT NULL ';
			$sql .= (!is_null($column_data[1])) ? "DEFAULT '{$column_data[1]}'" : '';
		break;
	}

	$return_array['column_type_sql'] = $sql;

	return $return_array;
}
?>
