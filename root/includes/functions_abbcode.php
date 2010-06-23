<?php
/**
*
* @package phpBB3
* @version $Id: functions_abbcde.php,v 1.0.7 2008/02/20 23:30:06 leviatan21 Exp $
* @copyright leviatan21 < info@mssti.com > (Gabriel) http://www.mssti.com/phpbb3/
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

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

$mode   = request_var('mode', '');

// Load the appropriate file
switch ($mode)
{
	case 'upload':
		abbcode_upload_file();
		break;
	
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
**/
function abbcode_show_help()
{
	global $template, $user;
	
	$abbcode3 = new abbcode3();
	$abbcode3->abbcode3_init();
	$abbcode3->display_abbc3();
	
	$user->add_lang('viewtopic');
	$user->add_lang('mods/abbcode');
	
	// Pull the array data from the lang pack
	$help_blocks = array();
	if ( sizeof( $abbcode3->abbcode_ary ) )
	{
		foreach ( $abbcode3->abbcode_ary as $abbcode_name => $abbcode_data )
		{
			if ( $abbcode_data['display'] ) // true ?
			{
				if ( substr($abbcode_name,0,11) != 'ABBC3_BREAK' && substr($abbcode_name,0,14) != 'ABBC3_DIVISION' ) // is a breck line or division ?
				{
					$template->assign_block_vars('bbc_row', array(
						'ABBC3_HELP_DESC'		=> $user->lang[$abbcode_name . '_MOVER'],
						'ABBC3_HELP_WRITE'		=> $user->lang[$abbcode_name . '_TIP'] . '<br/>' . $user->lang[$abbcode_name . '_NOTE'],
						'ABBC3_HELP_VIEW'		=> $user->lang[$abbcode_name . '_VIEW'],
					));
				}
			}
		}
	}
	
	if ( sizeof( $abbcode3->abbcode_custom_ary ) )
	{
		foreach ( $abbcode3->abbcode_custom_ary as $abbcode_custom_name => $abbcode_custom_data )
		{
			if ( $abbcode_custom_data['display'] ) // true ?
			{
				if ( substr($abbcode_custom_name,0,11) != 'ABBC3_BREAK' && substr($abbcode_custom_name,0,14) != 'ABBC3_DIVISION' ) // is a breck line or division ?
				{
					$template->assign_block_vars('bbc_custom_row', array(
						'ABBC3_HELP_DESC'		=> $user->lang[$abbcode_custom_name . '_MOVER'],
						'ABBC3_HELP_WRITE'		=> $user->lang[$abbcode_custom_name . '_TIP'],
						'ABBC3_HELP_VIEW'		=> $user->lang[$abbcode_custom_name . '_VIEW'],
					));
				}
			}
		}
	}
	
	// Output page
	page_header($user->lang['ABBC3_HELP_TITLE']);
	
	$template->set_filenames(array(
		'body' => 'posting_abbcodes_help_body.html')
	);
	
	page_footer();
}

/**
* Upload files - Simple way, code from //http://www.php.net/manual/es/features.file-upload.php
*/
function abbcode_upload_file( )
{
	global $template, $user, $phpbb_root_path, $config, $phpEx;

	include_once($phpbb_root_path . 'includes/functions_upload.' . $phpEx);
	$upload = new fileupload();

	$form_name  = 'fileupload';
	$add_file   = (isset($_POST['add_file'])) ? true : false;
	$upload_dir = $config['upload_path'] . '/';
	
	// Add / change or delete this to your liking. Example add : ,'zip'
	$types_ary  = array('swf', 'gif', 'jpg', 'jpeg', 'png', 'psd', 'bmp', 'tif', 'tiff', 'swc', 'iff', 'wbmp', 'xbm');
	
	// Set-up max file size change this to your liking, Set to 0 for disable. Example : $max_size   = 0;
	$max_size   = 0; // / You can use the default phphbb3 : $max_size = $config['max_filesize'];
	
	$user->add_lang('posting');
	$user->add_lang('mods/abbcode');
	
	for ($i = 0, $end = sizeof($types_ary); $i < $end; ++$i)
	{
		$aveilable_types .= ( $i < count( $types_ary)-1) ? $types_ary[$i] . ', ' : $types_ary[$i].'.';
	}
	
	$template->assign_vars(array(
		'ABBC3_ATTACH_PAGE'			=> append_sid("{$phpbb_root_path}includes/functions_abbcode.$phpEx", 'mode=upload'),	// Link to ABBC3 attachment page
		'ABBC3_ATTACH_FILESIZE'		=> $max_size,
		'ABBC3_ATTACH_EXTENSION'	=> $aveilable_types,
	));

	if ( $add_file )
	{
		$fileupload = $_FILES['fileupload'];
		$file_uploaded = false;
		
		$file = new filespec( $fileupload, $this );
		
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
						if ( file_exists( $phpbb_root_path . $upload_dir . $fileupload['name'] ) )
						{
							@unlink( $phpbb_root_path . $upload_dir . $fileupload['name'] );
						}

						if ( !@move_uploaded_file( $fileupload['tmp_name'], $phpbb_root_path . $upload_dir . $fileupload['name'] ) )
						{
							if ( !@copy( $fileupload['tmp_name'], $phpbb_root_path . $upload_dir . $fileupload['name'] ) )
							{
								$fileupload['error'] = sprintf($user->lang['ABBC3_ATTACH_NOT_UPLOADED'], $fileupload['name']);
							}
							else
							{
								$fileupload['error'] = sprintf($user->lang['ABBC3_ATTACH_UPLOADED'], $fileupload['name']);
								$file_uploaded = true;
							}
						}
						else
						{
							$fileupload['error'] = sprintf($user->lang['ABBC3_ATTACH_UPLOADED'], $fileupload['name']);
							$file_uploaded = true;
						}
					}
					else
					{
						$fileupload['error'] = sprintf($user->lang['ABBC3_ATTACH_ERROR'], $fileupload['name'], $fileupload["error"]);
					}
				}
				else
				{
					$fileupload['error'] = sprintf($user->lang['ABBC3_ATTACH_DISABLED'], $fileupload['extension']);
				}
			}
			else
			{
				$fileupload['error'] = sprintf($user->lang['ABBC3_ATTACH_SIZE'], $fileupload['size'], $max_size);
			}
		}
		else
		{
			$fileupload['error'] = $user->lang['ABBC3_ATTACH_EMPTY'];
		}	//	echo "2 name=[".$fileupload['name']."] file_uploaded=[".$file_uploaded."] extension=[".$fileupload['extension']."]<br/>";
		
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
	page_header($user->lang['ABBC3_ATTACH_TITLE']);
		
	$template->set_filenames(array(
		'body' => 'posting_abbcode_attach_body.html')
	);
	
	page_footer();
}

/**
* Search script path
*
* @return url page
*/
function abbc3_script_path ()
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

// MOD : add-on Clicks Counter feature - START
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
// MOD : add-on Clicks Counter feature - END
?>