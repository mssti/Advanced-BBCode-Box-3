<?php
/**
* @package: phpBB3 :: Advanced BBCode box 3
* @version: $Id: abbcode_functions.php, v 1.0.11 2008/10/11 11:10:08 leviatan21 Exp $
* @copyright: leviatan21 < info@mssti.com > (Gabriel) http://www.mssti.com/phpbb3/
* @license: http://opensource.org/licenses/gpl-license.php GNU Public License 
* @author: leviatan21 - http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=345763
*
**/

/**
* @ignore
**/
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup();

$mode           = request_var('mode', '');
$abbcode_bbcode = request_var('abbc3', '');
$form_name	    = request_var('form_name', '');
$text_name	    = request_var('text_name', '');

// Load the appropriate file
switch ($mode)
{
	case 'wizards':
		switch ($abbcode_bbcode)
		{
			case 'abbc3_upload':
				abbcode_upload_file( $form_name, $text_name );
				break;
			default:
				abbcode_wizards( $abbcode_bbcode, $form_name, $text_name );
				break;
		}

	case 'click':
		abbcode_click_file();
		break;

	default:
	case 'help':
		abbcode_show_help();
		break;
}

/**
* ABBC3 help page...
* @version 1.0.11
**/
function abbcode_show_help()
{
	global $template, $db, $user, $config, $phpbb_root_path, $phpEx;

	if (!class_exists('abbcode'))
	{
		include($phpbb_root_path . 'includes/abbcode.' . $phpEx);
	}
	$abbcode = new abbcode();
	$abbcode->abbcode_init();

	$user->add_lang(array('viewtopic', 'mods/abbcode'));

	$sql = "SELECT abbcode, bbcode_order, bbcode_id, bbcode_tag, bbcode_helpline, bbcode_image, display_on_posting 
			FROM " . BBCODES_TABLE . "
			ORDER BY bbcode_order";
	$result = $db->sql_query($sql);

	while ($row = $db->sql_fetchrow($result))
	{
		/** Some fixes **/
		$abbcode_name	= (($row['abbcode']) ? 'ABBC3_' : '' ) . strtoupper( str_replace('=', '', trim($row['bbcode_tag']) ) );
		$display		= $row['display_on_posting'];

		if ( $display )
		{
			if ( substr($abbcode_name,0,11) != 'ABBC3_BREAK' && substr($abbcode_name,0,14) != 'ABBC3_DIVISION' ) // is a breck line or division ?
			{
				$template->assign_block_vars('bbc_row', array(
					'ABBC3_HELP_DESC'	=> (isset($user->lang[$abbcode_name . '_MOVER']  )) ? $user->lang[$abbcode_name . '_MOVER'] : '',
					'ABBC3_HELP_WRITE'	=> (isset($user->lang[$abbcode_name . '_TIP']    )) ? str_replace('\"','"', $user->lang[$abbcode_name . '_TIP'] ) : '',
					'ABBC3_HELP_NOTE'	=> (isset($user->lang[$abbcode_name . '_NOTE']   )) ? $user->lang[$abbcode_name . '_NOTE'] : '' ,
					'ABBC3_HELP_EXAMPLE'=> (isset($user->lang[$abbcode_name . '_EXAMPLE'])) ? $user->lang[$abbcode_name . '_EXAMPLE'] : '',
					'ABBC3_HELP_VIEW'	=> (isset($user->lang[$abbcode_name . '_VIEW']   )) ? $user->lang[$abbcode_name . '_VIEW'] : '',
				));
			}
		}
	}
	$template->assign_vars(array(
		'S_BBCODE_ALLOWED'	=> true,
		'S_ABBC3_MAX_THUM_WIDTH' => $config['ABBC3_MAX_THUM_WIDTH']
	));

	// Output page
	page_header($user->lang['ABBC3_HELP_TITLE']);

	$template->set_filenames(array(
		'body' => 'posting_abbcode_help.html')
	);

	page_footer();
}

/**
* Upload files - Simple way, code from //http://www.php.net/manual/es/features.file-upload.php
* 
* @return bbcode tag with link
* @version 1.0.11
**/
function abbcode_upload_file( $form_name, $text_name )
{
	global $config, $template, $user, $phpbb_root_path, $phpEx;

	if (!class_exists('abbcode'))
	{
		include($phpbb_root_path . 'includes/abbcode.' . $phpEx);
	}
	$abbcode = new abbcode();
	$abbcode->abbcode_init();

	$add_file   = (isset($_POST['add_file'])) ? true : false;
	$upload_dir = $config['upload_path'] . '/';

	$aveilable_types = $config['ABBC3_UPLOAD_EXTENSION'];
	$types_ary  = preg_split("/[\s,]+/",$aveilable_types);

	$max_size   = (int) $config['ABBC3_UPLOAD_MAX_SIZE'];

	$size_format = ($max_size >= 1048576) ? 'mb' : (($max_size >= 1024) ? 'kb' : 'b');

	$user->add_lang(array('posting', 'mods/abbcode', 'acp/attachments'));

	$template->assign_vars(array(
		'S_UPLOAD'					=> true,
		'FORM_NAME'					=> $form_name,
		'TEXT_NAME'					=> $text_name,

		'ABBC3_UPLOAD_FILESIZE'		=> ( $max_size ) ? $max_size : $user->lang['ATTACH_MAX_FILESIZE_EXPLAIN'],
		'ABBC3_UPLOAD_SIZEFORMAT'	=> ( $max_size ) ? $size_format : '',
		'ABBC3_UPLOAD_EXTENSION'	=> $aveilable_types,
	));

	if ( $add_file )
	{
		include_once($phpbb_root_path . 'includes/functions_upload.' . $phpEx);

		$upload = new fileupload();

		$upload->set_allowed_extensions( $types_ary );

		$fileupload = $_FILES['promptbox1'];
		$fileupload['error'] = array();
		$file_uploaded = false;

		$file = new filespec( $fileupload, $upload );

		$fileupload['name']		 = $user->data['user_id'] . '_' . basename($file->realname);
		$fileupload['tmp_name']	 = $file->filename;
		$fileupload['extension'] = strtolower($file->get_extension($file->realname));
		$fileupload['size']		 = $file->filesize;
		$fileupload['mimetype']	 = $file->mimetype;
		$fileupload['image']	 = $file->is_image();

		// Check the first 256 bytes for forbidden content
		if ($config['check_attachment_content'])
		{
			$upload->set_disallowed_content(explode('|', $config['mime_triggers']));

			if ( !$file->check_content($upload->disallowed_content) )
			{
				$fileupload['error'] = $user->lang['AVATAR_DISALLOWED_CONTENT'];					
			}
		}

		if( !sizeof($fileupload['error'] ) )
		{
			// Check for empty file name
			if( $fileupload['name'] )
			{
				// Check for filesize
				if( ($max_size == 0) || ( $fileupload['size'] < $max_size ) )
				{
					// Check for file extension
					if ( in_array($fileupload['extension'] , $types_ary ) )
					{
						// Check for file errors
						// Error 1: El tamaño es mayor a lo que el servidor soporta.
						// Error 2: El tamaño es mayor a lo que el formulario soporta.
						// Error 3: El archivo se subio PARCIALMENTE
						// Error 4: El archivo no se subio.
						if ( !$fileupload['error'] )
						{
							// Check if file exist on server
							if ( !file_exists( $phpbb_root_path . $upload_dir . $fileupload['name'] ) )
							{
								if ( !@move_uploaded_file( $fileupload['tmp_name'], $phpbb_root_path . $upload_dir . $fileupload['name'] ) )
								{
										if ( !@copy( $fileupload['tmp_name'], $phpbb_root_path . $upload_dir . $fileupload['name'] ) )
								{
										$fileupload['error'] = sprintf($user->lang['ABBC3_UPLOAD_NOT_UPLOADED'], $fileupload['name']);
									}
									else
									{
										$fileupload['error'] = sprintf($user->lang['ABBC3_UPLOAD_UPLOADED'], $fileupload['name']);
										$file_uploaded = true;
									}
								}
								else
								{
									$fileupload['error'] = sprintf($user->lang['ABBC3_UPLOAD_UPLOADED'], $fileupload['name']);
									$file_uploaded = true;
								}
							}
							else
							{
								$fileupload['error'] = sprintf($user->lang['ABBC3_UPLOAD_ALREADY'], $fileupload['name']);
							}
						}
						else
						{
							$fileupload['error'] = sprintf($user->lang['ABBC3_UPLOAD_ERROR'], $fileupload['name'], $fileupload["error"]);
						}
					}
					else
					{
						$fileupload['error'] = sprintf($user->lang['ABBC3_UPLOAD_DISABLED'], $fileupload['extension']);
					}
				}
				else
				{
					$fileupload['error'] = sprintf($user->lang['ABBC3_UPLOAD_NOSIZE'], $fileupload['size'], $max_size);
				}
			}
			else
			{
				$fileupload['error'] = $user->lang['ABBC3_UPLOAD_EMPTY'];
			}
		}
	
		$open_tag  = ( $fileupload['extension'] == 'swf') ? '[flash]'  : '' ;
		$close_tag = ( $fileupload['extension'] == 'swf') ? '[/flash]' : '';
		$open_tag  = ( $fileupload['image'] ) ? '[img]'  : $open_tag ;
		$close_tag = ( $fileupload['image'] ) ? '[/img]' : $close_tag;
		
		if ( sizeof($fileupload['error'] ) )
		{
			$template->assign_vars(array(
				'ADDED_FILE'		=> $file_uploaded,
				'OPEN_TAG'			=> $open_tag,
				'CLOSE_TAG'			=> $close_tag,
				'ADDED_FILE_NAME'	=> ($file_uploaded) ? append_sid( generate_board_url() . '/' . $upload_dir . $fileupload['name'] ) : '',
				'ERROR'				=> ($file_uploaded) ? '' : $fileupload['error'],
			));
		}
		$upload->reset_vars();
	}
	
	// Output page ...
	page_header($user->lang['ABBC3_UPLOAD_TITLE']);
		
	$template->set_filenames(array(
		'body' => 'posting_abbcode_wizards.html')
	);

	unset($fileupload);
	
	page_footer();
}

/**
* ABBC3 simple redirect page
* @version 1.0.11
**/
function abbcode_click_file()
{
	global $db, $user;
		
	header( "Cache-Control: no-cache, must-revalidate" );
	header( "Expires: Sat, 26 Jul 1997 05:00:00 GMT" );
	
	// Initial var setup
	$id	= request_var('id', 0);
	
	if( !$id )
	{
		$user->add_lang('mods/abbcode');
		echo $user->lang['ABBC3_CLICK_ERROR'];
		exit;
	}
	
	$data_select = array(
		'id' 	=> $id,
	);
	
	$sql = 'SELECT url, clicks 
			FROM ' . CLICKS_TABLE . ' 
			WHERE ' . $db->sql_build_array('SELECT', $data_select);
	$result = $db->sql_query($sql);
	$row = $db->sql_fetchrow($result);
	
	$data_update = array(
		'clicks' 	=> $row['clicks']+1,
	);
	
	$sql = 'UPDATE ' . CLICKS_TABLE . ' 
			SET ' . $db->sql_build_array('UPDATE', $data_update) . '
			WHERE id = ' . $id;
	$db->sql_query($sql);
	
	$row['url'] = ($row['url']) ? stripslashes($row['url']) : 'http://www.google.com/';

	// if there is no scheme, then add http schema
	if (!preg_match('#^[a-z][a-z\d+\-.]*:/{2}#i', $row['url']))
	{
		$row['url'] = 'http://' . $row['url'];
	}
					
	header( "Status: 301 Moved Permanently", false, 301);
	header( "Location: " . trim($row['url'] ) );
	exit;
}

/**
* Some bbcodes have help wizards :)
* 
* @return bbcode tag with link
* @version 1.0.10
**/
function abbcode_wizards( $abbcode_bbcode, $form_name, $text_name )
{
	global $template, $config, $phpbb_root_path, $phpEx, $user, $user_cache, $poster_id, $mode;

	if (!class_exists('abbcode'))
	{
		include($phpbb_root_path . 'includes/abbcode.' . $phpEx);
	}
	$abbcode = new abbcode();
	$abbcode->abbcode_init( );

	$user->add_lang(array('posting', 'mods/abbcode'));

	$abbcode_name = strtoupper($abbcode_bbcode);
	
	if ( $abbcode_bbcode == 'abbc3_bbvideo' )
	{
		$abbcode->video_init();
		if ( sizeof( $abbcode->abbcode_video_ary ) )
		{
			$video_options = '';
			foreach ( $abbcode->abbcode_video_ary as $video_name => $video_data )
			{
				if ( $video_data['display'] )
				{
					$example = (isset($video_data['example']) ? $video_data['example'] : $user->lang['ABBC3_NO_EXAMPLE'] );
					$selected = ($video_name == 'youtube.com') ? ' selected="selected"' : '';
					$video_options .= '<option value="' . $example . '"' . $selected . '>' . $video_name . '</option>';
				}
			}
		}
	}

	if ( strpos($abbcode_bbcode, '_') )
	{
		list( $garbage, $tag )	= split( '_', ( $abbcode_bbcode == 'abbc3_ed2k' ) ? 'abbc3_url' : $abbcode_bbcode );
	}
	else
	{
		$tag = $abbcode_bbcode;
	}

	$need_description		= array( 'url', 'email', 'click' );
	$need_width_height		= array( 'web', 'flash', 'flv', 'video', 'quicktime', 'ram', 'bbvideo' );
	$abbc3_width			= $abbcode_bbcode == 'abbc3_web' ? '100%' : $config['ABBC3_VIDEO_width'];
	$abbc3_height			= $config['ABBC3_VIDEO_height'];

	// General setings
	$template->assign_vars(array(
		'S_ABBC3_PATH'		=> $phpbb_root_path . $config['ABBC3_PATH'],
		'S_WIZARD_GENERAL'	=> ( $abbcode_bbcode == 'abbc3_table') ? false : ( $abbcode_bbcode == 'abbc3_grad' ) ? false : true ,
		'S_WIZARD_TABLE'	=> ( $abbcode_bbcode == 'abbc3_table') ? true  : false,
		'S_WIZARD_GRAD'		=> ( $abbcode_bbcode == 'abbc3_grad' ) ? true  : false,
		'S_BBVIDEO_OPTIONS'	=> ( $abbcode_bbcode == 'abbc3_bbvideo' ) ? $video_options : '',
		
		'FORM_NAME'			=> $form_name,
		'TEXT_NAME'			=> $text_name,
//		'BBCODE'			=> $abbcode_bbcode,
//		'BBNAME'			=> $abbcode_name,
//		'POST_AUTHOR'		=> $user_cache[$poster_id]['username'],

		'ABBC3_OPEN'		=> $tag,
		'ABBC3_CLOSE'		=> '/' . $tag,
		
		'ABBC3_TAG'			=> (isset($user->lang[$abbcode_name . '_TAG']    )) ? $user->lang[$abbcode_name . '_TAG'] : '',
		'ABBC3_MOVER'		=> (isset($user->lang[$abbcode_name . '_MOVER']  )) ? $user->lang[$abbcode_name . '_MOVER'] : '',
		'ABBC3_NOTE'		=> (isset($user->lang[$abbcode_name . '_NOTE']   )) ? $user->lang[$abbcode_name . '_NOTE'] : '',
		'ABBC3_EXAMPLE'		=> (isset($user->lang[$abbcode_name . '_EXAMPLE'])) ? $user->lang[$abbcode_name . '_EXAMPLE'] : '',
		'ABBC3_DESC'		=> ( in_array( $tag, $need_description  ) ) ? true : false,
		'ABBC3_W_H'			=> ( in_array( $tag, $need_width_height ) ) ? true : false,
		'ABBC3_WIDTH'		=> $abbc3_width,
		'ABBC3_HEIGHT'		=> $abbc3_height,

	));

	// Output page ...
	page_header( $user->lang[$abbcode_name . '_MOVER'] );
	
	$template->set_filenames(array(
		'body' => 'posting_abbcode_wizards.html')
	);
	
	page_footer();
}

?>