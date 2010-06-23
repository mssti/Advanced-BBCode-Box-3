<?php
/**
* @package: phpBB3 :: Advanced BBCode box 3
* @version: $Id: functions_abbcode.php, v 1.0.9 2008/05/01 05:01:00 leviatan21 Exp $
* @copyright: leviatan21 < info@mssti.com > (Gabriel) http://www.mssti.com/phpbb3/
* @license: http://opensource.org/licenses/gpl-license.php GNU Public License 
* @author: leviatan21 - http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=345763
*
**/

/**
* @ignore
*/
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : '../';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup();

$mode           = request_var('mode', '');
$abbcode_bbcode = request_var('abbc3', '');
$atcaret_pos    = request_var('caret', '');
$form_name	    = request_var('form_name', '');
$text_name	    = request_var('text_name', '');

// Load the appropriate file
switch ($mode)
{
	case 'wizards':
		
		switch ($abbcode_bbcode)
		{
			case 'abbc3_upload':
				abbcode_upload_file( $atcaret_pos, $form_name, $text_name );
				break;
			default:
				abbcode_wizards( $abbcode_bbcode, $atcaret_pos, $form_name, $text_name );
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
* 109 ABBC3 help page...
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
					'ABBC3_HELP_DESC'	=> &$user->lang[$abbcode_name . '_MOVER'],
					'ABBC3_HELP_WRITE'	=> &$user->lang[$abbcode_name . '_TIP'],
					'ABBC3_HELP_NOTE'	=> &$user->lang[$abbcode_name . '_NOTE'] ,
					'ABBC3_HELP_EXAMPLE'=> &$user->lang[$abbcode_name . '_EXAMPLE'] ,
					'ABBC3_HELP_VIEW'	=> &$user->lang[$abbcode_name . '_VIEW'],
				));
			}
		}
	}

	// Output page
	page_header($user->lang['ABBC3_HELP_TITLE']);
	
	$template->set_filenames(array(
		'body' => 'posting_abbcode_help.html')
	);
	
	page_footer();
}

/**
* 109 Upload files - Simple way, code from //http://www.php.net/manual/es/features.file-upload.php
* 
* @return bbcode tag with link
*/
function abbcode_upload_file( $atcaret_pos, $form_name, $text_name )
{
	global $template, $user, $phpbb_root_path, $config, $phpEx;

	include_once($phpbb_root_path . 'includes/functions_upload.' . $phpEx);
	$upload = new fileupload();
	
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
		'ATCARET_POST'				=> $atcaret_pos,
		'FORM_NAME'					=> $form_name,
		'TEXT_NAME'					=> $text_name,

		'ABBC3_UPLOAD_FILESIZE'		=> ( $max_size ) ? $max_size : $user->lang['ATTACH_MAX_FILESIZE_EXPLAIN'],
		'ABBC3_UPLOAD_SIZEFORMAT'	=> ( $max_size ) ? $size_format : '',
		'ABBC3_UPLOAD_EXTENSION'	=> $aveilable_types,
	));

	if ( $add_file )
	{
		$fileupload = $_FILES['promptbox1'];
		$file_uploaded = false;
		
		$file = new filespec( $fileupload, $upload );
		
		$fileupload['name']		 = basename($file->realname);
		$fileupload['tmp_name']	 = $file->filename;
		$fileupload['extension'] = strtolower($file->get_extension($file->realname));
		$fileupload['size']		 = $file->filesize;
		$fileupload['mimetype']	 = $file->mimetype;
		$fileupload['image']	 = $file->is_image();
		
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
	}
	unset($fileupload);
	
	// Output page ...
	page_header($user->lang['ABBC3_UPLOAD_TITLE']);
		
	$template->set_filenames(array(
		'body' => 'posting_abbcode_wizards.html')
	);
	
	page_footer();
}

/**
* Search script path
*
* @return url page
*/
function abbcode_script_path ()
{
	$server_name = (!empty($_SERVER['SERVER_NAME'])) ? $_SERVER['SERVER_NAME'] : getenv('SERVER_NAME');
	$server_port = (!empty($_SERVER['SERVER_PORT'])) ? (int) $_SERVER['SERVER_PORT'] : (int) getenv('SERVER_PORT');
	$secure = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 1 : 0;

	$script_name = (!empty($_SERVER['PHP_SELF'])) ? $_SERVER['PHP_SELF'] : getenv('PHP_SELF');
	if (!$script_name)
	{
		$script_name = (!empty($_SERVER['REQUEST_URI'])) ? $_SERVER['REQUEST_URI'] : getenv('REQUEST_URI');
	}

	// Replace any number of consecutive backslashes and/or slashes with a single slash (could happen on some proxy setups and/or Windows servers)
	$script_path = trim(dirname($script_name)) . '/install/index.' . $phpEx;
	$script_path = preg_replace('#[\\\\/]{2,}#', '/', $script_path);

	$url = (($secure) ? 'https://' : 'http://') . $server_name;

	if ($server_port && (($secure && $server_port <> 443) || (!$secure && $server_port <> 80)))
	{
		$url .= ':' . $server_port;
	}

	$url .= $script_path;
	
	return $url;
}

/**
* ABBC3 simple redirect page
**/
function abbcode_click_file()
{
	global $db;
		
	header( "Cache-Control: no-cache, must-revalidate" );
	header( "Expires: Sat, 26 Jul 1997 05:00:00 GMT" );
	
	// Initial var setup
	$id	= request_var('id', 0);
	
	$id = ( is_numeric($_GET['id'])) ? $_GET['id'] : '';
	
	if( !$id )
	{
		echo '<strong>ERROR:</strong> Please enter a VALID click ID in URL';
		exit;
	}
	
	$data_select = array(
		'id' 	=> $id,
	);
	
	$sql = 'SELECT url, clicks FROM '.CLICKS_TABLE.' WHERE ' . $db->sql_build_array('SELECT', $data_select);
	$result = $db->sql_query($sql);
	$row = $db->sql_fetchrow($result);
	
	$data_update = array(
		'clicks' 	=> $row['clicks']+1,
	);
	
	$sql = 'UPDATE '.CLICKS_TABLE.' SET ' . $db->sql_build_array('UPDATE', $data_update) . '
		WHERE id = ' . $id;
	$db->sql_query($sql);
	
	$row['url'] = ($row['url']) ? stripslashes($row['url']) : 'http://www.google.com/';
	
	header( "Status: 301 Moved Permanently", false, 301);
	header( "Location: " . trim($row['url'] ) );
	exit;
}

/**
* Upload files - Simple way, code from //http://www.php.net/manual/es/features.file-upload.php
* 
* @return bbcode tag with link
*/
function abbcode_wizards( $abbcode_bbcode, $atcaret_pos, $form_name, $text_name )
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
					$example = &$video_data['example'];
					$video_options .= '<option value="' . ( ( $example ) ? $example : @$user->lang['ABBC3_NO_EXAMPLE'] ) . '" >' . $video_name . '</option>';
				}
			}
		}
	}

	$temparray  = @split( '_', ( $abbcode_bbcode == 'abbc3_ed2k' ) ? 'abbc3_url' : $abbcode_bbcode );
	$tag = $temparray[sizeof($temparray)-1]; //list( $garbage, $tag ) = @split( '_', ( $abbcode_bbcode == 'abbc3_ed2k' ) ? 'abbc3_url' : $abbcode_bbcode );
	
	$need_description  = array( 'url', 'email', 'click' );
	$need_width_height = array( 'web', 'flash', 'flv', 'video', 'quicktime', 'ram', 'bbvideo' );
	
	// General setings
	$template->assign_vars(array(
		'S_WIZARD_GENERAL'	=> ( $abbcode_bbcode == 'abbc3_table') ? false : ( $abbcode_bbcode == 'abbc3_grad' ) ? false : true ,
		'S_WIZARD_TABLE'	=> ( $abbcode_bbcode == 'abbc3_table') ? true  : false,
		'S_WIZARD_GRAD'		=> ( $abbcode_bbcode == 'abbc3_grad' ) ? true  : false,
		'S_BBVIDEO_OPTIONS'	=> ( $abbcode_bbcode == 'abbc3_bbvideo' ) ? $video_options : '',
		
		'ATCARET_POST'		=> $atcaret_pos,
		'FORM_NAME'			=> $form_name,
		'TEXT_NAME'			=> $text_name,
		'BBCODE'			=> $abbcode_bbcode,
		'BBNAME'			=> $abbcode_name,
		'POST_AUTHOR'		=> $user_cache[$poster_id]['username'],

		'ABBC3_OPEN'		=> $tag,
		'ABBC3_CLOSE'		=> '/' . $tag,
		'ABBC3_TAG'			=> &$user->lang[$abbcode_name . '_TAG'],
		'ABBC3_MOVER'		=> &$user->lang[$abbcode_name . '_MOVER'],
		'ABBC3_NOTE'		=> &$user->lang[$abbcode_name . '_NOTE'],
		'ABBC3_EXAMPLE'		=> &$user->lang[$abbcode_name . '_EXAMPLE'],
		'ABBC3_DESC'		=> ( in_array( $tag, $need_description  ) ) ? true : false,
		'ABBC3_W_H'			=> ( in_array( $tag, $need_width_height ) ) ? true : false,
		'ABBC3_WIDTH'		=> $config['ABBC3_VIDEO_width'],
		'ABBC3_HEIGHT'		=> $config['ABBC3_VIDEO_height'],

	));

	// Output page ...
	page_header( $abbcode_bbcode );
	$template->set_filenames(array(
		'body' => 'posting_abbcode_wizards.html')
	);
	
	page_footer();
}

?>