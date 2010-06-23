<?php
/**
* @package: phpBB3 :: Advanced BBCode box 3
* @version: $Id: abbcode.php, v 1.0.10 2008/08/01 01:08:08 leviatan21 Exp $
* @copyright: leviatan21 < info@mssti.com > (Gabriel) http://www.mssti.com/phpbb3/
* @license: http://opensource.org/licenses/gpl-license.php GNU Public License 
* @author: leviatan21 - http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=345763
*
**/

/**
* @ignore
* @todo submit on phpbb3 moddb ?
* Base article :
*	http://www.phpbb.com/community/viewtopic.php?f=46&t=579376
* 	http://www.phpbb.com/kb/article/adding-custom-bbcodes-in-phpbb3/
*	http://www.phpbb.com/community/viewtopic.php?p=5009915#p5009915
* 
* If you are using phpBB2, you can find compatible BBCode MODs in the BBCode section of the MOD database.
* 	http://www.phpbb.com/mods/db/index.php?i=browse&mode=group:category&sub=bbcode
* 
* Need New Ions ? :
*	http://www.famfamfam.com/lab/icons/silk/ 
**/

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* Advanced BBCode Box 3 class
*
* @package phpBB3
**/
class abbcode
{
	var $abbcode_config		= array();
	var $abbcode_video_ary	= array();
	var $abbc3_unique_id;

	/** Initializate config vars **/
	function abbcode_init( )
	{
		global $phpbb_admin_path, $phpbb_root_path, $phpEx, $template, $config, $user ;

		$user->add_lang('mods/abbcode');

		//$abbc3_root_path = ( $phpbb_admin_path ) ? $phpbb_admin_path : $phpbb_root_path ;
		$this->abbc3_unique_id = substr(base_convert(unique_id(), 16, 36), 0, 8);

		$this->abbcode_config = array(
			// Display ABBC3 ?
			'ABBC3_PATH'			=> $phpbb_root_path . $config['ABBC3_PATH'],
			'ABBC3_MOD'				=> $config['ABBC3_MOD'],
			// Display thumbnails with greybox ?
			'ABBC3_ADVANCEDBOX'		=> ( $config['ABBC3_RESIZE_METHOD'] == 'AdvancedBox' ? true : false ),
			// Display icon division for tags ?
			'ABBC3_TAB'				=> $config['ABBC3_TAB'],
			// Resize larger images ?
			'ABBC3_RESIZE'			=> ( $config['ABBC3_RESIZE_METHOD'] != 'none' ? true : false ),
			// Resize if images is bigger than...
			'ABBC3_MAX_IMG_WIDTH'	=> $config['ABBC3_MAX_IMG_WIDTH'],
			'ABBC3_MAX_IMG_HEIGHT'	=> $config['ABBC3_MAX_IMG_HEIGHT'],
			'ABBC3_MAX_THUM_WIDTH'	=> $config['ABBC3_MAX_THUM_WIDTH'] . 'px',
			'PHPBB_MAX_THUM_WIDTH'	=> $config['img_max_thumb_width'] . 'px',
			// 'advancedbox' 'enlarge' 'samewindow' 'newwindow'
			'ABBC3_RESIZE_METHOD'	=> $config['ABBC3_RESIZE_METHOD'],
			 // Resize posting textarea ?
			'ABBC3_BOXRESIZE'		=> $config['ABBC3_BOXRESIZE'],
			// Width for posted video ?
			'ABBC3_VIDEO_width'		=> $config['ABBC3_VIDEO_width'],
			// Height for posted video ?
			'ABBC3_VIDEO_height'	=> $config['ABBC3_VIDEO_height'],
			// Set-up max file size change this to your liking, Set to 0 for unlimited
			'ABBC3_UPLOAD_MAX_SIZE'	=> $config['ABBC3_UPLOAD_MAX_SIZE'],
			// Add, change or delete this to your liking. Example add : ,'zip'
			'ABBC3_UPLOAD_EXTENSION'=> $config['ABBC3_UPLOAD_EXTENSION'],
			// Usename posting 
			'POST_AUTHOR'			=> @$user->data['username'],
			// Link to ABBC3 help page
			'ABBC3_HELP_PAGE'		=> addslashes(append_sid("{$phpbb_root_path}includes/functions_abbcode.$phpEx", 'mode=help')),
			// Link to ABBC3 upload page
			'ABBC3_UPLOAD_PAGE'		=> addslashes(append_sid("{$phpbb_root_path}includes/functions_abbcode.$phpEx", 'mode=upload')),
			// Link to ABBC3 wizards page
			'ABBC3_WIZARD_PAGE'		=> addslashes(append_sid("{$phpbb_root_path}includes/functions_abbcode.$phpEx", "mode=wizards")),
			// Bakground image, or leave it blank for fit to your style, Ex : 'ABCC3_BG'				=> '',
			'ABBC3_BG'				=> $config['ABBC3_BG'],
		);

		/** Display options **/
		foreach ( $this->abbcode_config as $abbcode_template => $abbcode_value )
		{
			$template->assign_vars(array(
				 'S_' . $abbcode_template => $abbcode_value
			));
		}
	}

	/**
	* Display posting page
	*
	* @param unknown_type $what
	**/
	function abbcode_display( $mode )
	{
		global $config, $db, $template, $user;

		$user->add_lang('mods/abbcode');

		/** Get proper auth **/
		// UCP page mode = signature
		// ACP page mode = sig
		// Posting page mode = post, edit, quote, reply
		// else should be PM
		$display = ( $mode == 'signature' || $mode == 'sig') ? 'display_on_sig' : ( ( $mode == 'post' || $mode == 'edit' || $mode == 'quote' || $mode == 'reply' ) ? 'display_on_posting' : 'display_on_pm' );

		$need_permissions  = array( 'ABBC3_QUOTE', 'ABBC3_URL', 'ABBC3_IMG', 'ABBC3_THUMBNAIL', 'ABBC3_FLASH', 'ABBC3_FLV' );

		$bbcode_num = 0;

		$sql = "SELECT abbcode, bbcode_order, bbcode_id, bbcode_group, bbcode_tag, bbcode_helpline, bbcode_image, display_on_posting 
				FROM " . BBCODES_TABLE . " 
				WHERE $display = 1 
				ORDER BY bbcode_order";
		$result = $db->sql_query($sql);

		while ($row = $db->sql_fetchrow($result))
		{
			/** Some fixes **/
			$abbcode		= $row['abbcode'];
			$abbcode_name	= ( ($row['abbcode']) ? 'ABBC3_' : '' ) . strtoupper( str_replace('=', '', trim($row['bbcode_tag']) ) );
			$abbcode_name	= ( $row['bbcode_helpline'] == 'ABBC3_ED2K_TIP') ? 'ABBC3_ED2K' : $abbcode_name;
			$abbcode_image	= trim($row['bbcode_image']);

			// Check phpbb permissions status
			if ( in_array( $abbcode_name, $need_permissions ) )
			{
				$abbode_auth = $this->abbode_auth( $abbcode_name, $mode );
				if ( !$abbode_auth )
				{
					continue;
				}
			}

			// Check ABBC3 groups permission
			if ( $row['bbcode_group'] != 0 && !in_array( $user->data['group_id'], split(',', $row['bbcode_group'])) )
			{
				continue;
			}

			// Haven't image ? Should be a dropdown...
			if ( !$abbcode_image )
			{
				if ( $row['abbcode'] )
				{
					$template->assign_vars(array(
						'S_' . $abbcode_name	=> true,
						$abbcode_name . '_NAME'	=> strtolower($abbcode_name),
						$abbcode_name . '_MOVER'=> @$user->lang[$abbcode_name . '_MOVER'],
						$abbcode_name . '_TIP'	=> @$user->lang[$abbcode_name . '_TIP'],
						$abbcode_name . '_NOTE'	=> @$user->lang[$abbcode_name . '_NOTE'],
					));
				}
			}
			else
			{
				switch ($abbcode_name)
				{
					// Is a breack line ?
					case ( substr($abbcode_name,0,11)=='ABBC3_BREAK' ) :
						$template->assign_block_vars('abbc3_tags', array(
							'S_ABBC3_BREAK'      => true,
						));
						break;
					// Is a division line ?
					case ( substr($abbcode_name,0,14)=='ABBC3_DIVISION' ) :
						$template->assign_block_vars('abbc3_tags', array(
							'S_ABBC3_DIVISION'   => true,
						));
						break;
					default:
						$template->assign_block_vars('abbc3_tags', array(
							'TAG_SRC'		=> $abbcode_image,
							'TAG_NAME'		=> strtolower($abbcode_name),
							'TAG_MOVER'		=> ( @$user->lang[$abbcode_name . '_MOVER'] ) ? $user->lang[$abbcode_name . '_MOVER']	: $abbcode_name,
							'TAG_TIP'		=> ( $abbcode ) ? @$user->lang[$abbcode_name . '_TIP'] : $row['bbcode_helpline'],
							'TAG_NOTE'		=> @$user->lang[$abbcode_name . '_NOTE'],
							'TAG_EXAMPLE'	=> @$user->lang[$abbcode_name . '_EXAMPLE'],
						));
				}
			}
		}
		$db->sql_freeresult($result);

		// Hidden fields & Cookie
		$this->abbc3_cookie_name	= $config['cookie_name'] . '_abbc';
		$this->abbc3_cookie_value	= request_var($this->abbc3_cookie_name, 0, false);

		$s_hidden_fields = array(
			$this->abbc3_cookie_name => $this->abbc3_cookie_value,
		);

		$template->assign_vars(array(		
			// Hidden fields & Cookie
			'S_ABBC3_COOKIE_NAME'	=> $this->abbc3_cookie_name,
			'S_ABBC3_COOKIE_VALUE'	=> $this->abbc3_cookie_value,
			'S_ABBC3_HIDDEN_FIELDS'	=> build_hidden_fields($s_hidden_fields),
		));
	}

	/**
	* Check some bbcodes permissions status
	* @param string		$abbcode_name
	* @return boolean	true / false
	**/
	function abbode_auth( $abbcode_name, $mode )
	{
		global $user, $config, $auth, $forum_id;
		/** Get proper auth **/
		// UCP page mode = signature
		// ACP page mode = sig
		// Posting page mode = post, edit, quote, reply
		// else should be PM

		// Get phpbb bbcodes status
		if ( $mode == 'post' || $mode == 'edit' || $mode == 'quote' || $mode == 'reply' )
		{	// POSTING
			$bbcode_status	= ($config['allow_bbcode'] && $auth->acl_get('f_bbcode', $forum_id)) ? true : false;
			$status_ary  = array(
			//	'SMILES'	=> ($bbcode_status && $config['allow_smilies'] && $auth->acl_get('f_smilies', $forum_id)) ? true : false ,
				'IMG'		=> ($bbcode_status && $auth->acl_get('f_img', $forum_id)) ? true : false ,
				'URL'		=> ($config['allow_post_links']) ? true : false ,
				'FLASH'		=> ($bbcode_status && $auth->acl_get('f_flash', $forum_id) && $config['allow_post_flash']) ? true : false ,
				'QUOTE'		=> ($auth->acl_get('f_reply', $forum_id)) ? true : false ,
				'MOD'		=> ($auth->acl_get('a_', $forum_id) || $auth->acl_get('m_', $forum_id) ) ? true : false ,
				'UPLOAD'	=> ($auth->acl_get('a_', $forum_id) || $auth->acl_get('m_', $forum_id) ) ? true : false ,
				'HTML'		=> ($auth->acl_get('a_', $forum_id) ) ? true : false ,
			);
		}
		elseif ( $mode == 'signature' || $mode == 'sig')
		{	// SIG
			$bbcode_status = ($config['allow_sig_bbcode']) ? true : false;
			$status_ary  = array(
			//	'SMILES'	=> ($config['allow_sig_smilies']) ? true : false ,
				'IMG'		=> ($bbcode_status && $config['allow_sig_img']) ? true : false ,
				'URL'		=> ($bbcode_status && $config['allow_sig_links']) ? true : false ,
				'FLASH'		=> ($bbcode_status && $config['allow_sig_flash']) ? true : false ,
				'QUOTE'		=> $bbcode_status,
				'MOD'		=> ( ( $auth->acl_get('a_') || $auth->acl_get('m_') ) ? true : false ),
				'UPLOAD'	=> ( ( $auth->acl_get('a_') || $auth->acl_get('m_') ) ? true : false ),
				'HTML'		=> ($auth->acl_get('a_', $forum_id) ) ? true : false ,
			);
		}
		else
		{	// PM
			$bbcode_status	= ($config['allow_bbcode'] && $config['auth_bbcode_pm'] && $auth->acl_get('u_pm_bbcode')) ? true : false;
			$status_ary  = array(
			//	'SMILES'	=> ($config['allow_smilies'] && $config['auth_smilies_pm'] && $auth->acl_get('u_pm_smilies')) ? true : false ,
				'IMG'		=> ($config['auth_img_pm'] && $auth->acl_get('u_pm_img')) ? true : false ,
				'URL'		=> ($config['allow_post_links']) ? true : false ,
				'FLASH'		=> ($config['auth_flash_pm'] && $auth->acl_get('u_pm_flash')) ? true : false ,
				'QUOTE'		=> $bbcode_status,
				'MOD'		=> ( ( $auth->acl_get('a_') || $auth->acl_get('m_') ) ? true : false ),
				'UPLOAD'	=> ( ( $auth->acl_get('a_') || $auth->acl_get('m_') ) ? true : false ),
				'HTML'		=> ($auth->acl_get('a_', $forum_id) ) ? true : false ,
			);
		}

		list( $garbage, $auth_tag ) = split( '_', $abbcode_name );
		$auth_tag = ( $auth_tag == 'THUMBNAIL') ? 'IMG' : ( ( $auth_tag == 'FLV') ? 'FLASH' : $auth_tag );

		foreach ( $status_ary as $phpbb3_bbcode => $value )
		{
			if ( strtoupper($auth_tag) == $phpbb3_bbcode )
			{
				return $value;
			}
		}
	}

	/**
	* Parsing the tables  - Second pass.
	*
	* @param string		$stx	table style
	* @param string		$in 	post text between [table] & [/table]
	* @return string	table
	**/
	function table_pass( $stx, $in )
	{
		$stx = str_replace(array("\r\n", '\"', '\'', '(', ')'), array("\n", '"', '&#39;', '&#40;', '&#41;'), trim($stx));
		$in	 = str_replace(array("\r\n", '\"', '\'', '(', ')'), array("\n", '"', '&#39;', '&#40;', '&#41;'), trim($in)) ;

		$in = str_replace(array ('<br />', "\n"), array ("\n", "\r"), $in);

		$table_ary = array(
		//	"#\[table=(.*?)\](.*?)\[/table\]#is"	=>	'<table style="$1" cellspacing="0" cellpadding="0">$2</table>',
			"#\[tr=(.*?)\](.*?)\[/tr\]#is"			=>	'<tr style="$1">' . str_replace(array("\r\n", '\"', '\'', '(', ')'), array("\n", '"', '&#39;', '&#40;', '&#41;'), trim('$2')) . '</tr>',
			"#\[td=(.*?)\](.*?)\[/td\]#is"			=>	'<td style="$1">' . str_replace(array("\r\n", '\"', '\'', '(', ')'), array("\n", '"', '&#39;', '&#40;', '&#41;'), trim('$2')) . '</td>',
		);

		foreach ( $table_ary as $abbcode_found => $abbcode_replace )
		{
			if ( preg_match( $abbcode_found, $in ) )
			{
				$in = preg_replace( $abbcode_found, $abbcode_replace, $in );
			}
		}
		return '<table style="' . $stx . '" cellspacing="0" cellpadding="0">' . $in .'</table>';
	}

	/**
	* Parsing the e-links  - Second pass.
	* 
	* Inspired in :	MOD Title: eD2k links processing with availability statistics
	* 				MOD Author: Meithar, then updated by Bill Hicks, C0de_m0nkey and DonGato (current maintainer)
	*
	* @param string		$bbcode_id
	* @param string		$var1		ed2k url
	* @param string		$var2		ed2k name
	* @return bbcode template replacement
	* 
	* Enlaces eD2k básicos					: ed2k://|file|>nombre del archivo<|>tamaño del archivo<|>hash del archivo<|/
	* Enlaces eD2k con conjunto de hashes	: ed2k://|file|>nombre del archivo<|>tamaño del archivo<|>hash del archivo<|p=>conjunto de hashes<|/
	* Enlaces eD2k con fuentes				: ed2k://|file|>nombre del archivo<|>tamaño del archivo<|>hash del archivo<|/|sources,>IP:puerto<|/
	* Enlace eD2k con host					: ed2k://|file|>nombre del archivo<|>tamaño del archivo<|>hash del archivo<|/|sources,>nombre del host:puerto<|/
	* Enlace eD2k en HTML					: <a href= "ed2k://|file|>archivo<|>tamaño del archivo<|>hash del archivo<|/">nombre mostrado en la página web
	* Enlace eD2k con fuentes HTTP			: ed2k://|file|>nombre del archivo<|>tamaño del archivo<|>hash del archivo<|s=http://cualquierweb.net/archivo|/
	* Enlaces eD2k con Hash Raíz			: ed2k://|file|>nombre de archivo<|>tamaño del archivo<|>hash del archivo<|h=>hash raíz<|/
	**/
	function ed2k_pass( $bbcode_id, $var1, $var2)
	{
		global $user, $config, $phpbb_root_path;

		$var1 = str_replace(array("\r\n", '\"', '\'', '(', ')'), array("\n", '"', '&#39;', '&#40;', '&#41;'), trim($var1));
		$var2 = str_replace(array("\r\n", '\"', '\'', '(', ')'), array("\n", '"', '&#39;', '&#40;', '&#41;'), trim($var2));

		$link = str_replace(array(' ', '%20'), array('',''), ( ($var1) ? $var1 : $var2 ));

		$matches = preg_match_all("#(^|(?<=[^\w\"']))(ed2k://\|(file|server|friend)\|([^\\/\|:<>\*\?\"]+?)\|(\d+?)\|([a-f0-9]{32})\|(.*?)/?)(?![\"'])(?=([,\.]*?[\s<\[])|[,\.]*?$)#i", $link, $match);

		if ( $matches )
		{
			foreach ( $match[0] as $i => $m )
			{
				$ed2k_icon	= $phpbb_root_path . $config['ABBC3_PATH'] . '/images/emule.gif';
				$ed2k_stat	= $phpbb_root_path . $config['ABBC3_PATH'] . '/images/stats.gif';

				$ed2k_link	= htmlspecialchars( @$match[2][$i] );
				$ed2k_type	= @$match[3][$i];
				$ed2k_size	= @$match[5][$i];
				$ed2k_hash	= @$match[6][$i];

				$ed2k_icon	= '<img src="' . $ed2k_icon . '" border="0" title="" style="vertical-align: text-bottom;" />';
				$ed2k_stat	= '<img src="' . $ed2k_stat . '" border="0" title="" style="vertical-align: text-bottom;" />';
				$ed2k_stat	= '<a href="http://tothbenedek.hu/ed2kstats/ed2k?hash=' . $ed2k_hash . '" target="_blank">' . $ed2k_stat . '</a>';

				$max_len	= 100;
				$ed2k_name	= ( !$var2 ) ? @$match[4][$i] : $var2;

				if ( !$var2 )
				{
					$ed2k_name	= (strlen($ed2k_name) > $max_len) ? substr($ed2k_name, 0, $max_len - 19) . '...' . substr($ed2k_name, -16) : $ed2k_name;
				}
				return $ed2k_icon . '&nbsp;' . '<a href="' . $ed2k_link . '" class="postlink">' . $ed2k_name . '</a>&nbsp;[' . humanize_size_abbc3($ed2k_size) . ']&nbsp;' . $ed2k_stat;
			}
		}
		else
		{
			if( preg_match("#(^|(?<=[^\w\"']))(ed2k://\|server\|([\d\.]+?)\|(\d+?)\|/?)#i", $link) )
			{
				return preg_replace("#(^|(?<=[^\w\"']))(ed2k://\|server\|([\d\.]+?)\|(\d+?)\|/?)#i", 'ed2k server: <a href="$2" class="postLink">$3:$4</a>', $link);
			}
			// ed2k://|serverlist|url
			elseif( preg_match("#(^|(?<=[^\w\"']))(ed2k://\|serverlist\|". get_preg_expression('url') ."\|/?)#i", $link) )
			{
				return preg_replace("#(^|(?<=[^\w\"']))(ed2k://\|serverlist\|". get_preg_expression('url') ."\|/?)#i", 'ed2k serverlist: <a href="$2" class="postLink">$2</a>', $link);
			}
			// ed2k://|friend|name|clientIP|clientPort
			elseif( preg_match("#(^|(?<=[^\w\"']))(ed2k://\|friend\|([^\\/\|:<>\*\?\"]+?)\|([\d\.]+?)\|(\d+?)\|/?)#i", $link) )
			{
				return preg_replace("#(^|(?<=[^\w\"']))(ed2k://\|friend\|([^\\/\|:<>\*\?\"]+?)\|([\d\.]+?)\|(\d+?)\|/?)#i", 'ed2k friend: <a href="$2" class="postLink">$3</a>', $link);
			}
			else
			{
				$var2 = ($var1) ? $var1 : $var2;
				return str_replace('$1', $var1, str_replace('$2', $var2, $this->bbcode_tpl('url', $bbcode_id, true)));
			}
		}
	}

	/**
	* Parsing the serch text - Second pass.
	*
	* @param string		$stx	have search name param?
	* @param string		$in		post text between [search] & [/search]
	* @param string		$search (msn|yahoo|google)
	* @return string	link
	**/
	function search_pass( $stx, $in , $search)
	{
		global $user, $config;
		
		$search = str_replace(array("\r\n", '\"', '\'', '(', ')'), array("\n", '"', '&#39;', '&#40;', '&#41;'), trim($search));
		$in	 	= str_replace(array("\r\n", '\"', '\'', '(', ')'), array("\n", '"', '&#39;', '&#40;', '&#41;'), trim($in)) ;

		switch ( $in )
		{
			case 'msn' :
				$echo = '<a href="http://search.live.com/results.aspx?q=' . str_replace(' ', '+',$search) . '" target="_blank">';
				break;
			case 'yahoo' :
				$echo = '<a href="http://search.yahoo.com/search?p=' . str_replace(' ', '+',$search) . '" target="_blank">';
				break;
			case 'google' :
				$echo = '<a href="http://www.google.com.tr/search?q=' . str_replace(' ', '+',$search) . '" target="_blank">';
				break;
			default :
				$echo = '<a href="search.php?keywords=' . $search . '">'; $in = $config['sitename'];
				break;
		}
		return ucfirst($in) . ' ' . strtolower($user->lang['SEARCH_MINI']) . ' : ' . $echo  . $search . '</a>';
	}

	/**
	* Parsing thumbnail images - Second pass.
	*
	* @param string		$stx	align (right|center|left)
	* @param string		$in		URL = post text between [thumbnail=(right|center|left)] & [/thumbnail]
	* @return string	image
	**/
	function thumb_pass( $stx, $in )
	{
		global $user, $config ;

		$stx = str_replace(array("\r\n", '\"', '\'', '(', ')'), array("\n", '"', '&#39;', '&#40;', '&#41;'), trim($stx));
		$in	 = str_replace(array("\r\n", '\"', '\'', '(', ')'), array("\n", '"', '&#39;', '&#40;', '&#41;'), trim($in)) ;

		/** If you don't like the way to align the image you can use following return **/
	//	return '<div class="' . $stx . '"><img src="' . $in . '" alt="' . $user->lang['IMAGE'] . '" width="' . $config['ABBC3_MAX_THUM_WIDTH'] . '" class="hoverbox" /></div>';

		switch ( $stx )
		{
			case 'left':
			case 'right':
				return '<div style="text-align:' . $stx . '"><img src="' . $in . '" alt="' . $user->lang['IMAGE'] . '" width="' . $config['ABBC3_MAX_THUM_WIDTH'] . '" class="hoverbox" /></div>';
				break;
			case 'center':
				return '<center><img src="' . $in . '" alt="' . $user->lang['IMAGE'] . '" width="' . $config['ABBC3_MAX_THUM_WIDTH'] . '" class="hoverbox" /></center>';
				break;
			default:
			return '<img src="' . $in . '" alt="' . $user->lang['IMAGE'] . '" width="' . $config['ABBC3_MAX_THUM_WIDTH'] . '" class="hoverbox" />';
				break;
		}
	}

	/**
	* Parsing the images aligned - Second pass.
	*
	* @param string		$stx	align (right|center|left)
	* @param string		$in		post text between [img=(right|center|left)] & [/img]
	* @return string	image
	* $this->img_pass( '$2','$3')
	**/
	function img_pass( $stx, $in )
	{
		global $user, $config;

		$stx = str_replace(array("\r\n", '\"', '\'', '(', ')'), array("\n", '"', '&#39;', '&#40;', '&#41;'), trim($stx));
		$in	 = str_replace(array("\r\n", '\"', '\'', '(', ')'), array("\n", '"', '&#39;', '&#40;', '&#41;'), trim($in)) ;

		return '<div align="' . $stx . '" ><img src="' . $in . '" alt="' . $user->lang['IMAGE'] . '" /></div>';	
		/** If you don't like the way to align the image you can use following return **/
		switch ( $stx )
		{
			case 'right':
				return '<img src="' . $in . '" alt="' . $user->lang['IMAGE'] . '" style="float:right;padding:10px;" /></span>';
				break;
			case 'center':
				return '<center><img src="' . $in . '" alt="' . $user->lang['IMAGE'] . '" align="middle" style="padding:10px;" /></center>';
				break;
			case 'left':
			default:
				return '<img src="' . $in . '" alt="' . $user->lang['IMAGE'] . '" style="float:left;padding:10px;" />';
				break;
		}
	}

	/**
	* Parsing the NFO text - Second pass.
	*
	* @param string		$in		post text between [nfo] & [/nfo]
	* @return string	table with nfo data
	**/
	function nfo_pass( $in )
	{
		$in = htmlentities($in, ENT_NOQUOTES, 'UTF-8');

		return '<table cellspacing="0" cellpadding="0" border="0" ><tr><td><span class="genmed"><b>NFO:</b></span></td></tr><tr><td class="nfo">' . str_replace(" ", "&nbsp;", $in) . '</td></tr></table>';
	}
	
	/**
	* Parsing the NFO text - Second pass.
	*
	* @param string		$in		post text between [nfo] & [/nfo]
	* @return string	table with nfo data
	**/
	function html_pass( $in )
	{
		return htmlspecialchars_decode( $in );
	}

	/**
	* Enter link checker
	*
	* @param string		$in 	post text between [testlink] &[/testlink]
	* @return string	link with text ok/wrong
	**/
	function testlink_pass( $in )
	{
		global $user, $config ;

		// Safety Check if CURL is present
		if ( ! function_exists ( 'curl_init') )
		{
			// Output an error message
			$linktest_echo = $user->lang['ABBC3_CURL_ERROR'];
		}
		else
		{
			$in	= trim($in);
			$linktest_good	 = $user->lang['ABBC3_TESTLINK_GOOD'];
			$linktest_wrong	 = $user->lang['ABBC3_TESTLINK_WRONG'];

			$linktest = new linktest();
			$linktest_links	 = explode( "\n", $in );
			$linktest_result = array();
			$linktest_echo	 = '';
			$linktest_round  = 2;
			$linktest_format = 'KB';

			foreach ($linktest_links as $linktest_value)
			{
				if (trim($linktest_value) !== '')
				{
					// undo make_clickable_callback();
					$linktest_value		= trim(str_replace('\"', '',preg_replace('#<!-- m --><a class=(.*?) href=(.*?)>(.*?)</a><!-- m -->#si','$2',$linktest_value)));
					$linktest_return	= $linktest->test($linktest_value);

					if (!$linktest_return)
					{
						$linktest_msg	= "<font color='red' size='4' >$linktest_wrong</font>";
						$linktest_pic	= "<img src='" . $config['ABBC3_PATH'] . "/images/error.gif' class='postimage' type='image' name='abbcode_linktest' alt='$linktest_wrong' title='$linktest_wrong' />&nbsp;";
					}
					else
					{
						$linktest_msg	= "<font color='green' size='4' >$linktest_good</font>";
						$linktest_pic	= "<img src='" . $config['ABBC3_PATH'] . "/images/ok.gif'    class='postimage' type='image' name='abbcode_linktest' alt='$linktest_good'  title='$linktest_good'  />&nbsp;";
					}

					$linktest_value		= "<a href='$linktest_value' onclick='window.open(this.href);return false;' title='' alt='' rel='external' >$linktest_value</a>";
					$linktest_result[]	= array('link' => $linktest_value, 'pic' => $linktest_pic, 'msg' => $linktest_msg);
				}
			}

			if (count($linktest_result) > 0)
			{
				foreach ($linktest_result as $linktest_data => $linktest_value)
				{
				//	If you don't like the image you can use a text message :
				//	$linktest_echo .= $linktest_value['msg'] . $linktest_value['link'] . "<br />";
					$linktest_echo .= $linktest_value['pic'] . $linktest_value['link'] . "<br />";
				}
			}
			unset( $linktest, $linktest_result );
		}

		return '<dl class="testlink"><dd>'. $linktest_echo . '</dd></dl>';
	}

	/**
	* Enter rapidshare checker
	*
	* @param string		$in 	post text between [rapidshare] &[/rapidshare]
	* @return string	link with text ok/wrong
	**/
	function rapidshare_pass( $in )
	{
		global $user, $config, $phpbb_root_path;

		$in = trim($in);

		$rapidshare_links	 = explode( "\n", $in );
		if ( sizeof($rapidshare_links) > 1 )
		{
			return "[rapidshare]" . str_replace('\"', '',preg_replace('#<!-- m --><a class=(.*?) href=(.*?)>(.*?)</a><!-- m -->#si','$2',$in)) . "[/rapidshare]";
		}

		$rapidshare_msg = '<font color="red" size="3" >' . $user->lang['ABBC3_RAPIDSHARE_WRONG'] . '</font>';
		$rapidshare_pic = '<img src="' . $config['ABBC3_PATH'] . '/images/error.gif" class="postimage" type="image" name="abbc_rapidshare" alt="' . $user->lang['ABBC3_RAPIDSHARE_WRONG'] . '" title="' . $user->lang['ABBC3_RAPIDSHARE_WRONG'] . '" />';

		$rs_checkfiles = fopen ( "http://rapidshare.com/cgi-bin/checkfiles.cgi?urls=" . $in, "r" );	
		while ( !feof ( $rs_checkfiles ) )
		{
			$buffer = fgets ( $rs_checkfiles, 4096 );
			if ( eregi( 'File is on server number', $buffer ) )
			{
				$rapidshare_msg = '<font color="green" size="3" >' . $user->lang['ABBC3_RAPIDSHARE_GOOD'] . '</font>';
				$rapidshare_pic = '<img src="' . $config['ABBC3_PATH'] . '/images/ok.gif" class="postimage" type="image" name="abbc_rapidshare" alt="' . $user->lang['ABBC3_RAPIDSHARE_GOOD'] . '" title="' . $user->lang['ABBC3_RAPIDSHARE_GOOD'] .'" />';
				break;
			}
		}
		fclose ( $rs_checkfiles );

	//	If you don't like the image you can use a text message :
	//	return '<a href="' . $in . '" title="' . $in . '" alt="' . $in . '" target="_blanc">' . $in . '</a>&nbsp;' . $rapidshare_msg;
		return '<a href="' . $in . '" title="' . $in . '" alt="' . $in . '" target="_blanc">' . $in . '</a>&nbsp;' . $rapidshare_pic;
	}

	/**
	* Count the number of click on a link or image
	*
	* @param string		$var1	post text after [click(=(.*))]
	* @param string		$var2	post text between [click] &[/click]
	* @return string	link or none
	**/
	function click_pass( $var1, $var2 )
	{
		global $db, $user, $phpbb_root_path, $phpEx;

		$var1 = str_replace("\r\n", "\n", str_replace('\"', '"', trim($var1)));
		$var2 = str_replace("\r\n", "\n", str_replace('\"', '"', trim($var2)));

		$url = ($var1) ? $var1 : $var2;

		if ($var1 && !$var2)
		{
			$var2 = $var1;
		}

		if (!$url)
		{
			return '[click' . ( ($var1) ? '=' . $var1 : '' ) . ']' . $var2 . '[/click]';
		}

		$valid = false;

		$url = str_replace(' ', '%20', $url);

		// Checking urls
		if (preg_match('#^' . get_preg_expression('url') . '$#i', $url) ||
			preg_match('#^' . get_preg_expression('www_url') . '$#i', $url) ||
			preg_match('#^' . preg_quote(generate_board_url(), '#') . get_preg_expression('relative_url') . '$#i', $url))
		{
			$valid	= true;
			$data	= array(
				'url' => str_replace( array( '&#58;', '&#46;' ), array( ':', '.' ), addslashes( $url ) ) ,
			);
		}

		// Checking image urls/src
		if ( preg_match("#<img((.*?))\/>#si", $url) )
		{
			// Fix for thumbnail
			if ( !preg_match("#gb_imageset#si", $url) )
			{
				$valid	= true;
			}
			$url	= str_replace('%20 ', ' ', $var2);
			$data	= array(
				'url' => preg_replace('#<img src="(.*?)"((.*?))\/>#si', '$1', $var2 ),
			);
		}		

		if ( $valid )
		{
			$sql = 'SELECT id, clicks FROM ' . CLICKS_TABLE . ' WHERE ' . $db->sql_build_array( 'SELECT', $data );
			$result = $db->sql_query($sql);

			if( $row = $db->sql_fetchrow( $result ) )
			{
				$clicks_id = $row['id'];
				$clicks_val= $row['clicks'];
			}
			else
			{
				$sql = 'INSERT INTO ' . CLICKS_TABLE . ' ' . $db->sql_build_array( 'INSERT', $data );
				$db->sql_query($sql);

				$clicks_id = $db->sql_nextid();
				$clicks_val= '0';
			}

			$user->add_lang('mods/abbcode');
			// Link to ABBC3 simple redirect page
			$redirect = append_sid("{$phpbb_root_path}includes/functions_abbcode.$phpEx", "mode=click&amp;id=$clicks_id");
			return '<a href="' . $redirect . '" onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false;" >' . ( ($var1) ? $var2 : $url ) . '</a> ' . sprintf( ( ( $clicks_val == 1 ) ? $user->lang['ABBC3_CLICK_TIME'] : $user->lang['ABBC3_CLICK_TIMES'] ), $clicks_val );
		}
		return '[click' . ( ($var1) ? '=' . $var1 : '' ) . ']' . $var2 . '[/click]';
	}

	/**
	* Initialize Video array
	**/
	function video_init()
	{
		/** Patterns and replacements for ABBC3_BBVIDEO bbcode processing **/
		$this->abbcode_video_ary = array(
			'uncutvideo.aol.com'=> array ( 'display' => true	,'image' => 'aol.gif'			,'example' => "http://uncutvideo.aol.com/categories/News/month/007c338a423704ba813dadd72fb75408?index=0"										,'found' => "#http://uncutvideo.aol.com/([^[]*\/([0-9A-Za-z-_]*)?)?([^[]*)?#si"							,'regexp' => '<object width="{WIDTH}" height="{HEIGHT}"><param name="wmode" value="opaque" /><param name="movie" value="http://uncutvideo.aol.com/v7.0017/en-US/uc_videoplayer.swf" /><param name="FlashVars" value="aID=1$2&site=http://uncutvideo.aol.com/"/><embed src="http://uncutvideo.aol.com/v7.0017/en-US/uc_videoplayer.swf" wmode="opaque" FlashVars="aID=1$2&site=http://uncutvideo.aol.com/" width="{WIDTH}" height="{HEIGHT}" type="application/x-shockwave-flash"></embed></object>' ),
			'clipfish.(de|co)'	=> array ( 'display' => true	,'image' => 'clipfish.gif'		,'example' => "http://www.clipfish.de/player.php?videoid=NTU2Mzd8MTk5NTM1Nw=="																	,'found' => "#http://www.clipfish.(.*?)/player.php\?videoid=([^[]*)?#si"								,'regexp' => '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="{WIDTH}" height="{HEIGHT}" id="player" align="middle"><param name="allowScriptAccess" value="always" /><param name="movie" value="http://www.clipfish.$1/videoplayer.swf?as=0&videoid=$2==&r=1&c=0067B3" /><param name="quality" value="high" /><param name="bgcolor" value="#0067B3" /><param name="allowFullScreen" value="true" /><embed src="http://www.clipfish.$1/videoplayer.swf?as=0&videoid=$2==&r=1&c=0067B3" quality="high" bgcolor="#0067B3" width="{WIDTH}" height="{HEIGHT}" name="player" align="middle" allowFullScreen="true" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed></object>' ),
			'collegehumor.com'	=> array ( 'display' => true	,'image' => 'collegehumor.gif'	,'example' => "http://www.collegehumor.com/video:1802097"																						,'found' => "#http://www.collegehumor.com/video:([0-9]+)#si"											,'regexp' => '<object type="application/x-shockwave-flash" data="http://www.collegehumor.com/moogaloop/moogaloop.swf?clip_id=$1&fullscreen=1" width="{WIDTH}" height="{HEIGHT}" ><param name="allowfullscreen" value="true" /><param name="movie" quality="best" value="http://www.collegehumor.com/moogaloop/moogaloop.swf?clip_id=$1&fullscreen=1" /></object>' ),
			'crackle.com'		=> array ( 'display' => true	,'image' => 'crackle.gif'		,'example' => "http://crackle.com/c/High_Wire/Fall_Out_Boy_Songs/2185986"																		,'found' => "#http://crackle.com/([A-Za-z-_/]+)?([0-9]+)?([^[]*)?#is"									,'regexp' => '<embed src="http://crackle.com/flash/ReferrerRedirect.ashx" quality="high" bgcolor="#869ca7" width="{WIDTH}" height="{HEIGHT}" name="mtgPlayer" align="middle" play="false" loop="false" allowFullScreen="true" flashvars="mu=0&ap=0&ml=o%3D12%26fi%3D%26fpl%3D2839&id=$2" quality="high" allowScriptAccess="never" type="application/x-shockwave-flash" pluginspage="http://www.adobe.com/go/getflashplayer"/>' ),
			'dailymotion.com'	=> array ( 'display' => true	,'image' => 'dailymotion.gif'	,'example' => "http://www.dailymotion.com/video/x4ez1x_alberto-contra-el-heliocentrismo_sport"													,'found' => "#http://www.dailymotion.com/video/([0-9A-Za-z]+)([0-9A-Za-z-_]+)?#si"						,'regexp' => '<object width="{WIDTH}" height="{HEIGHT}"><param name="movie" value="http://www.dailymotion.com/swf/$1&v3=1&related=1"/><param name="allowFullScreen" value="true" /><param name="allowScriptAccess" value="always" /><embed src="http://www.dailymotion.com/swf/$1&v3=1&related=1" type="application/x-shockwave-flash" width="{WIDTH}" height="{HEIGHT}" allowFullScreen="true" allowScriptAccess="always"></embed></object>' ),
			'gamespot.com'		=> array ( 'display' => true	,'image' => 'gamespot.gif'		,'example' => "http://www.gamespot.com/video/928334/6185856/lost-odyssey-official-trailer-8"													,'found' => "#http://www.gamespot.com/video/([0-9]+)?/([0-9]+)?(/[^/]+)?#si"							,'regexp' => '<embed id="mymovie" width="{WIDTH}" height="{HEIGHT}" flashvars="paramsURI=http%3A%2F%2Fwww%2Egamespot%2Ecom%2Fpages%2Fvideo%5Fplayer%2Fproteus%5Fxml%2Ephp%3Fadseg%3D%26adgrp%3D%26sid%3D$2%26pid%3D$1%26mb%3D%26onid%3D%26nc%3D1202626246593%26embedded%3D1%26showWatermark%3D0%26autoPlay%3D0" allowfullscreen="true" allowscriptaccess="never" quality="high" name="mymovie" src="http://image.com.com/gamespot/images/cne_flash/production/media_player/proteus/gs/proteus_embed.swf" type="application/x-shockwave-flash"/>' ),
			'gametrailers.com'	=> array ( 'display' => true	,'image' => 'gametrailers.gif'	,'example' => "http://www.gametrailers.com/player/30461.html"																					,'found' => "#http://www.gametrailers.com/player/([0-9]+).html#si"										,'regexp' => '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"  codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" id="gtembed" width="{WIDTH}" height="{HEIGHT}"><param name="allowScriptAccess" value="sameDomain" /><param name="allowFullScreen" value="true" /><param name="movie" value="http://www.gametrailers.com/remote_wrap.php?mid=$1" /><param name="quality" value="high" /><embed src="http://www.gametrailers.com/remote_wrap.php?mid=$1" swLiveConnect="true" name="gtembed" align="middle" allowScriptAccess="sameDomain" allowFullScreen="true" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="{WIDTH}" height="{HEIGHT}"></embed></object>' ),
			'gamevideos(.*?).com'	=> array ( 'display' => true	,'image' => 'gamevideos.gif'	,'example' => "http://www.gamevideos.com/video/id/17766"																						,'found' => "#http://(.*?)gamevideos(.*?).com/video/id/([^[]*)?#si"										,'regexp' => '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="{WIDTH}" height="{HEIGHT}" id="gamevideos6" align="middle"><param name="quality" value="high" /><param name="play" value="true" /><param name="loop" value="true" /><param name="scale" value="showall" /><param name="wmode" value="window" /><param name="devicefont" value="false" /><param name="bgcolor" value="#000000" /><param name="menu" value="true" /><param name="allowScriptAccess" value="sameDomain" /><param name="allowFullScreen" value="true" /><param name="salign" value="" /><param name="movie" value="http://www.gamevideos.com/swf/gamevideos11.swf?embedded=1&amp;fullscreen=1&amp;autoplay=0&amp;src=http://$1gamevideos$2.com/video/videoListXML%3Fid%3D$3%26ordinal%3D%26adPlay%3Dfalse" /><param name="quality" value="high" /><param name="bgcolor" value="#000000" /><embed src="http://www.gamevideos.com/swf/gamevideos11.swf?embedded=1&amp;fullscreen=1&amp;autoplay=0&amp;src=http://$1gamevideos$2.com/video/videoListXML%3Fid%3D$3%26ordinal%3D%26adPlay%3Dfalse" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" play="true" loop="true" scale="showall" wmode="window" devicefont="false" id="gamevideos6" bgcolor="#000000" name="gamevideos6" menu="true" allowscriptaccess="sameDomain" allowFullScreen="true" type="application/x-shockwave-flash" align="middle" height="{HEIGHT}" width="{WIDTH}" /></object>' ),
			'godtube.com'		=> array ( 'display' => true	,'image' => 'godtube.gif'		,'example' => "http://www.godtube.com/view_video.php?viewkey=25ec0b736884cda85a16"																,'found' => "#http://www.godtube.com/view_video.php\?viewkey=([^[]*)?#si"								,'regexp' => '<embed src="http://godtube.com/flvplayer.swf" FlashVars="viewkey=$1" wmode="transparent" quality="high" width="{WIDTH}" height="{HEIGHT}" name="godtube" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" /></embed>' ),
			'ign.com'			=> array ( 'display' => true	,'image' => 'ign.gif'			,'example' => "object_ID=967025&downloadURL=http://tvmovies.ign.com/tv/video/article/850/850894/knightrider_trailer_020808_flvlow.flv"			,'found' => "#object_ID=([0-9]+)?([^/]+[^[]*)?#si"														,'regexp' => '<embed src="http://videomedia.ign.com/ev/ev.swf" flashvars="object_ID=$1$2 type="application/x-shockwave-flash" width="{WIDTH}" height="{HEIGHT}" ></embed>' ),
			'liveleak.com'		=> array ( 'display' => true	,'image' => 'liveleak.gif'		,'example' => "http://www.liveleak.com/view?i=2ac_1203907789&p=1"																				,'found' => "#http://www.liveleak.com/view\?i=([0-9A-Za-z-_]+)?(\&[^/]+)?#si"							,'regexp' => '<object type="application/x-shockwave-flash" width="{WIDTH}" height="{HEIGHT}" wmode="transparent" data="http://www.liveleak.com/player.swf?autostart=false&token=$1"><param name="movie" value="http://www.liveleak.com/player.swf?autostart=false&token=$1" /><param name="wmode" value="transparent" /><param name="quality" value="high" /></object>' ),
			'livevideo.com'		=> array ( 'display' => true	,'image' => 'livevideo.gif'		,'example' => "http://www.livevideo.com/video/UKUFO/D930AEB5460D4707B2F6DC0CD8D3C258/haiti-and-the-dominican-republ.aspx"						,'found' => "#http://www.livevideo.com/video/([^[]*)/([^[]*)/([^[]*)#is"								,'regexp' => '<embed src="http://www.livevideo.com/flvplayer/embed/$2&autoStart=0" type="application/x-shockwave-flash" quality="high" width="{WIDTH}" height="{HEIGHT}" wmode="transparent"></embed>' ),
			'megavideo.com'		=> array ( 'display' => true	,'image' => 'megavideo.gif'		,'example' => "http://www.megavideo.com/?v=0Q8S7E29"																							,'found' => "#http://www.megavideo.com/\?v=([^[]*)#ise"													,'regexp' => "\$this->external_video( '\$0', 'object' )" ),
			'metacafe.com'		=> array ( 'display' => true	,'image' => 'metacafe.gif'		,'example' => "http://www.metacafe.com/watch/966360/merry_christmas_with_crazy_frog/"															,'found' => "#http://www.metacafe.com/watch/([0-9]+)?((/[^/]+)/?)?#si"									,'regexp' => '<embed src="http://www.metacafe.com/fplayer/$1/.swf" width="{WIDTH}" height="{HEIGHT}" wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash"></embed>' ),
			'myspacetv.com'		=> array ( 'display' => true	,'image' => 'myspacetv.gif'		,'example' => "http://myspacetv.com/index.cfm?fuseaction=vids.individual&videoid=25769593"														,'found' => "#http://myspacetv.com/index.cfm([^[]*)?videoid=([^[]*)?#si"								,'regexp' => '<embed src="http://lads.myspace.com/videos/vplayer.swf" flashvars="m=$2&v=2&type=video" type="application/x-shockwave-flash" width="{WIDTH}" height="{HEIGHT}"></embed>' ),
			'vids.myspace.com'	=> array ( 'display' => true	,'image' => 'vidsmyspace.gif'	,'example' => "http://vids.myspace.com/index.cfm?fuseaction=vids.individual&VideoID=28799328"													,'found' => "#http://vids.myspace.com/index.cfm([^[]*)?videoid=([^[]*)?#si"								,'regexp' => '<embed src="http://lads.myspace.com/videos/vplayer.swf" flashvars="m=$2&v=2&type=video" type="application/x-shockwave-flash" width="{WIDTH}" height="{HEIGHT}"></embed>' ),
			'myvideo.(de|be|nl)'=> array ( 'display' => true	,'image' => 'myvideo.gif'		,'example' => "http://www.myvideo.de/watch/2668372"																								,'found' => "#http://www.myvideo.(.*?)/(.*?)/([^[]*)?#si"												,'regexp' => '<object style="width:{WIDTH}px;height:{HEIGHT}px;" type="application/x-shockwave-flash" data="http://www.myvideo.$1/movie/$3"> <param name="movie" value="http://www.myvideo.$1/movie/$3" /><param name="AllowFullscreen" value="true" /></object>' ),
			'photobucket.com'	=> array ( 'display' => true	,'image' => 'photobucket.gif'	,'example' => "http://s0006.photobucket.com/albums/0006/pbhomepage/video2/?action=view&current=dedc9ad8.flv"									,'found' => "#http://(.*?).photobucket.com/albums/(.*?)([^[]+)?\?([^[]*\w=([^[]*)?)?#si"				,'regexp' => '<embed width="{WIDTH}" height="{HEIGHT}" type="application/x-shockwave-flash" wmode="transparent" src="http://i$2.photobucket.com/player.swf?file=http://vid$2.photobucket.com/albums/$2$3$5&amp;sr=1">' ),
			'sevenload.com'		=> array ( 'display' => true	,'image' => 'sevenload.gif'		,'example' => "http://en.sevenload.com/videos/Cf6wyZr/Zoom"																						,'found' => "#http://(.*?).sevenload.com/(.*?)/([0-9A-Za-z-_]+)?([^[]*)?#is"							,'regexp' => '<object width="{WIDTH}" height="{HEIGHT}"><param name="FlashVars" value="apiHost=api.sevenload.com"/><param name="AllowScriptAccess" value="always"/><param name="movie" value="http://en.sevenload.com/pl/$3/425x350/swf" /><embed src="http://en.sevenload.com/pl/$3/425x350/swf" type="application/x-shockwave-flash" width="{WIDTH}" height="{HEIGHT}" allowfullscreen="true" AllowScriptAccess="always" FlashVars="apiHost=api.sevenload.com"></embed></object>' ),
			'spike.com'			=> array ( 'display' => true	,'image' => 'spike.gif'			,'example' => "http://www.spike.com/video/2946505"																								,'found' => "#http://www.spike.com/video/([0-9]+)[^[]*#si"												,'regexp' => '<embed width="{WIDTH}" height="{HEIGHT}" src="http://www.spike.com/efp" quality="high" bgcolor="000000" name="efp" align="middle" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="flvbaseclip=$1&"></embed>' ),
			'stage6.com'		=> array ( 'display' => true	,'image' => 'stage6.gif'		,'example' => "http://www.stage6.com/user/TheNelAware/video/2217443/Indiana-Jones-4-Trailer.."													,'found' => "#http://www.stage6.com/user/TheNelAware/video/([0-9]+)/([0-9]+)?(/[^/]+)?#si"				,'regexp' => '<object codebase="http://go.divx.com/plugin/DivXBrowserPlugin.cab" height="{HEIGHT}" width="{WIDTH}" classid="clsid:67DABFBF-D0AB-41fa-9C46-CC0F21721616"><param name="autoplay" value="false"/><param name="src" value="http://video.stage6.com/$1/.divx" /><param name="custommode" value="Stage6" /><param name="showpostplaybackad" value="false" /><embed type="video/divx" src="http://video.stage6.com/$1/.divx" pluginspage="http://go.divx.com/plugin/download/" showpostplaybackad="false" custommode="Stage6" autoplay="false" height="{HEIGHT}" width="{WIDTH}" /></object>' ),
			'starsclips.net'	=> array ( 'display' => true	,'image' => 'starsclips.gif'	,'example' => "http://www.starsclips.net/videos.aspx/video~incredible_aerobatic_fly_formation/Incredible_aerobatic_fly_formation"				,'found' => "#http://www.starsclips.net/videos.aspx/video~([0-9A-Za-z-_]+)(/[0-9A-Za-z-_]+)?(/[^/]+)?#si",'regexp' => '<object width="{WIDTH}" height="{HEIGHT}"><param name="movie" value="http://www.starsclips.net/emb.aspx/video~$1"></param><param name="wmode" value="transparent"></param><embed src="http://www.starsclips.net/emb.aspx/video~$1" type="application/x-shockwave-flash" wmode="transparent" width="{WIDTH}" height="{HEIGHT}"></embed></object>' ),
			'tu.tv'				=> array ( 'display' => true	,'image' => 'tutv.gif'			,'example' => "http://tu.tv/videos/el-gato-boxeador"																							,'found' => "#http://((.*?)?)tu.tv/videos/([^[]*)?#sie"													,'regexp' => "\$this->external_video( '\$0', 'object' )" ),
			'vbox7.com'			=> array ( 'display' => true	,'image' => 'vbox7.gif'			,'example' => "http://www.vbox7.com/play:93ab2ba5"																								,'found' => "#http://www.vbox7.com/play:([^[]+)?#si"													,'regexp' => '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0" width="{WIDTH}" height="{HEIGHT}"><param name="movie" value="http://i47.vbox7.com/player/ext.swf?vid=$1"><param name="quality" value="high"><embed src="http://i47.vbox7.com/player/ext.swf?vid=$1" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="{WIDTH}" height="{HEIGHT}"></embed></object>' ),
			'veoh.com'			=> array ( 'display' => true	,'image' => 'veoh.gif'			,'example' => "http://www.veoh.com/videos/v1409404EqT5SJjM"																						,'found' => "#http://(.*?).veoh.com/videos/([0-9A-Za-z-_]+)#si" 										,'regexp' => '<embed src="http://$1.veoh.com/videodetails2.swf?permalinkId=$2&id=anonymous&player=videodetailsembedded&videoAutoPlay=0" allowFullScreen="true" width="{WIDTH}" height="{HEIGHT}" bgcolor="#000000" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>' ),
			'videu.de'			=> array ( 'display' => true	,'image' => 'videu.gif'			,'example' => "http://www.videu.de/video/38"																									,'found' => "#http://www.videu.de/video/([^[]*)?#si"													,'regexp' => '<object width="{WIDTH}" height="{HEIGHT}"><param name="movie" value="http://www.videu.de/flv/player2.swf?iid=$1"></param><param name="wmode" value="transparent"></param><embed src="http://www.videu.de/flv/player2.swf?iid=$1" type="application/x-shockwave-flash" wmode="transparent" width="{WIDTH}" height="{HEIGHT}"></embed></object>' ),
			'vidiac.com'		=> array ( 'display' => true	,'image' => 'vidiac.gif'		,'example' => "http://www.vidiac.com/video/d9ec881e-8a1c-41a7-8e4a-919180b0f538.htm"															,'found' => "#http://www.vidiac.com/video/([^[]*).htm#si"												,'regexp' => '<embed src="http://www.vidiac.com/vidiac.swf" FlashVars="video=$1" quality="high" bgcolor="#ffffff" width="{WIDTH}" height="{HEIGHT}" name="ePlayer" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>' ),
			'vidilife.com'		=> array ( 'display' => true	,'image' => 'vidilife.gif'		,'example' => "http://www.vidiLife.com/video_play_1136791_Really_Bad_Driver_Drives_Off_Parking_Garage.htm"										,'found' => "#http://www.vidiLife.com/([^[]*)?#sie"														,'regexp' => "\$this->external_video( '\$0', 'embed' )" ),
			'vimeo.com'			=> array ( 'display' => true	,'image' => 'vimeo.gif'			,'example' => "http://vimeo.com/725441"																											,'found' => "#http://vimeo.com/([^[]*)?#si"																,'regexp' => '<object type="application/x-shockwave-flash" width="{WIDTH}" height="{HEIGHT}" data="http://www.vimeo.com/moogaloop.swf?clip_id=$1&amp;server=www.vimeo.com&amp;fullscreen=1&amp;show_title=1&amp;show_byline=1&amp;show_portrait=0&amp;color="><param name="quality" value="best" /><param name="allowfullscreen" value="true" /><param name="scale" value="showAll" /><param name="movie" value="http://www.vimeo.com/moogaloop.swf?clip_id=$1&amp;server=www.vimeo.com&amp;fullscreen=1&amp;show_title=1&amp;show_byline=1&amp;show_portrait=0&amp;color=" /></object>' ),
			'video.google'		=> array ( 'display' => true	,'image' => 'googlevid.gif'		,'example' => "http://video.google.com/videoplay?docid=-8351924403384451128"																	,'found' => "#http://video.google.(.*?)/(videoplay|googleplayer.swf)\?docid=([0-9A-Za-z-_]+)#si"		,'regexp' => '<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0" width="{WIDTH}" height="{HEIGHT}"><param name="movie" value="http://video.google.$1/googleplayer.swf?docid=$3" /><param name="play" value="false" /><param name="loop" value="false" /><param name="quality" value="high" /><param name="allowScriptAccess" value="never" /><param name="allowNetworking" value="internal" /><embed src="http://video.google.$1/googleplayer.swf?docid=$3" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" width="{WIDTH}" height="{HEIGHT}" play="false" loop="false" quality="high" allowscriptaccess="never" allownetworking="internal"></embed></object>' ),
			'video.yahoo'		=> array ( 'display' => true	,'image' => 'yahoovid.gif'		,'example' => "http://video.yahoo.com/watch/2057334/6491459?v=2057334"																			,'found' => "#http://video.yahoo.com/watch/([0-9]+)/([0-9]+)[^[]*#si"									,'regexp' => '<object width="{WIDTH}" height="{HEIGHT}"><param name="movie" value="http://d.yimg.com/static.video.yahoo.com/yep/YV_YEP.swf?ver=2.0.44" /><param name="allowFullScreen" value="true" /><param name="flashVars" value="id=$2&vid=$2&lang=en-US&intl=us&thumbUrl=http://us.i1.yimg.com/us.yimg.com/i/us/sch/cn/video04/$1_rnd618da3dd_19.jpg" /><embed src="http://d.yimg.com/static.video.yahoo.com/yep/YV_YEP.swf?ver=2.0.44" type="application/x-shockwave-flash" width="{WIDTH}" height="{HEIGHT}" allowFullScreen="true" flashVars="id=$2&vid=$1&lang=en-US&intl=us&thumbUrl=http://us.i1.yimg.com/us.yimg.com/i/us/sch/cn/video04/$1_rnd618da3dd_19.jpg" ></embed></object>' ),
			'vsocial.com'		=> array ( 'display' => true	,'image' => 'vsocial.gif'		,'example' => "http://www.vsocial.com/video/?d=2893"																							,'found' => "#http://www.vsocial.com/video/\?d=([^[]*)#is"												,'regexp' => '<embed allowScriptAccess="always" id="flash_player" name="flash_player" width="{WIDTH}" height="{HEIGHT}" src="http://static.vsocial.com/flash/upsl3.0.2/ups3.0.2.swf?d=$2&a=1&s=false&url=http://www.vsocial.com/xml/upsl/vsocial/template.php"></embed>' ),
			'wat.tv'			=> array ( 'display' => true	,'image' => 'wattv.gif'			,'example' => "http://www.wat.tv/playlist/564333"																								,'found' => "#http://(.*?).wat.tv/playlist/([^[]*)?#is"													,'regexp' => '<object width="{WIDTH}" height="{HEIGHT}"><param name="movie" value="http://www.wat.tv/images/v2.5/flash/loaderexport.swf?revision=2.5.108&mediaID=$2&baseUrl=www.wat.tv&referer=www.wat.tv&request=/playlist/$2" /><param name="allowScriptAccess" value="always" /><param name="allowFullScreen" value="true" /><embed src="http://www.wat.tv/images/v2.5/flash/loaderexport.swf?revision=2.5.108&mediaID=$2&baseUrl=www.wat.tv&referer=www.wat.tv&request=/playlist/$2" type="application/x-shockwave-flash" width="{WIDTH}" height="{HEIGHT}" allowScriptAccess="always" allowFullScreen="true"></embed></object>' ),
			'youtube.com'		=> array ( 'display' => true	,'image' => 'youtube.gif'		,'example' => "http://mx.youtube.com/watch?v=TA4hm97m494&rel=1"																					,'found' => "#http://((.*?)?)youtube.com/(|watch\?)v(/|=)([0-9A-Za-z-_]+)?([^[]*)?#is"					,'regexp' => '<object width="{WIDTH}" height="{HEIGHT}"><param name="movie" value="http://$2youtube.com/v/$5" /><param name="wmode" value="transparent"/><embed src="http://$2youtube.com/v/$5" type="application/x-shockwave-flash" wmode="transparent" width="{WIDTH}" height="{HEIGHT}"></embed></object>' ),

			'swf'				=> array ( 'display' => true	,'image' => 'flash.gif'			,'example' => "http://www.adobe.com/support/flash/ts/documents/test_version/version.swf"														,'found' => "#([^[]+)?.swf#si"																			,'regexp' => '<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0" width="{WIDTH}" height="{HEIGHT}"><param name="movie" value="$0" /><param name="play" value="true" /><param name="loop" value="true" /><param name="quality" value="high" /><param name="allowScriptAccess" value="never" /><param name="allowNetworking" value="internal" /><embed src="$0" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" width="{WIDTH}" height="{HEIGHT}" play="true" loop="true" quality="high" allowscriptaccess="never" allownetworking="internal"></embed></object>'),
			'flv'				=> array ( 'display' => true	,'image' => 'flashflv.gif'		,'example' => "http://www.channel-ai.com/video/eyn/demo1.flv"																					,'found' => "#([^[]+)?.flv#si"																			,'regexp' => '<embed src="./images/flvplayer.swf" width="{WIDTH}" height="{HEIGHT}" bgcolor="#FFFFFF" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="file=$0&autostart=false" />'),
			'(wmv|mpg)'			=> array ( 'display' => true	,'image' => 'video.gif'			,'example' => "http://www.sarahsnotecards.com/catalunyalive/fishstore.wmv"																		,'found' => "#([^[]+)?.(wmv|mpg)#si"																	,'regexp' => '<object width="{WIDTH}" height="{HEIGHT}" classid="CLSID:6BF52A52-394A-11d3-B153-00C04F79FAA6" id="wmstream_' . $this->abbc3_unique_id . '"><param name="url" value="$0" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="false" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /><param name="src" value="$0" /><!--[if !IE]>--><object width="{WIDTH}" height="{HEIGHT}" type="video/x-ms-wmv" data="$0"><param name="src" value="$0" /><param name="controller" value="1" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="false" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /></object><!--<![endif]--></object>'),
			'(mp3|qt)'			=> array ( 'display' => true	,'image' => 'quicktime.gif'		,'example' => "http://www.nature.com/neuro/journal/v3/n3/extref/Li_control.mov.qt | http://www.carnivalmidways.com/images/Music/thisisatest.mp3",'found' => "#([^[]+)?.(mp3|qt)#si"																		,'regexp' => '<object id="qtstream_' . $this->abbc3_unique_id . '" classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab#version=6,0,2,0" width="{WIDTH}" height="{HEIGHT}"><param name="src" value="$0" /><param name="controller" value="true" /><param name="autoplay" value="false" /><param name="type" value="video/quicktime" /><embed name="qtstream_' . $this->abbc3_unique_id . '" src="$0" pluginspage="http://www.apple.com/quicktime/download/" enablejavascript="true" controller="true" width="{WIDTH}" height="{HEIGHT}" type="video/quicktime" autoplay="false"></embed></object>'),
			'ram'				=> array ( 'display' => true	,'image' => 'ram.gif'			,'example' => "http://www.bbc.co.uk/scotland/radioscotland/media/radioscotland.ram"																,'found' => "#([^[]+)?.ram#si"																			,'regexp' => '<object id="rmstream_' . $this->abbc3_unique_id . '" classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" width="{WIDTH}" height="{HEIGHT}"><param name="src" value="$0" /><param name="autostart" value="false" /><param name="controls" value="ImageWindow" /><param name="console" value="ctrls_' . $this->abbc3_unique_id . '" /><param name="prefetch" value="false" /><embed name="rmstream_' . $this->abbc3_unique_id . '" type="audio/x-pn-realaudio-plugin" src="$0" width="{WIDTH}" height="{HEIGHT}" autostart="false" controls="ImageWindow" console="ctrls_' . $this->abbc3_unique_id . '" prefetch="false"></embed></object><br /><object id="ctrls_' . $this->abbc3_unique_id . '" classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" width="{WIDTH}" height="36"><param name="controls" value="ControlPanel" /><param name="console" value="ctrls_' . $this->abbc3_unique_id . '" /><embed name="ctrls_' . $this->abbc3_unique_id . '" type="audio/x-pn-realaudio-plugin" width="{WIDTH}" height="36" controls="ControlPanel" console="ctrls_' . $this->abbc3_unique_id . '"></embed></object>'),
		);
	}

	/**
	* Parsing the web videos - Second pass.
	*
	* @param string		$in		post text between [BBvideo] & [/BBvideo]
	* @param string		$w		value for video width
	* @param string		$h		value for video Height
	* @return embed video
	**/
	function BBvideo_pass( $in, $w, $h )
	{
		global $user, $config, $phpbb_root_path;

		$this->video_init( );

		$w = ( intval( $w ) ) ? $w : $config['ABBC3_VIDEO_width'] ;
		$h = ( intval( $h ) ) ? $h : $config['ABBC3_VIDEO_height'] ;

		foreach ( $this->abbcode_video_ary as $video_name => $video_data )
		{
			// Fisrt check that video url is one of the list and if it's enabled to parse.
			if ( ( preg_match( '#' . $video_name . '#si', $in ) ) && ( $video_data['display'] ) )
			{
				// Second check if video have data to search and parse
				if ( $video_data['found'] != '' && $video_data['regexp'] != '' )
				{
					if ( preg_match( $video_data['found'], $in ) )
					{
						if ( preg_match( '#\.#si', $video_name ) )
						{
							preg_match('@^(?:http://)?([^/]+)@i',$in, $video_name);
							$img = '<img src="' . $config['ABBC3_PATH'] . '/images/' . $video_data['image'] .'" class="postimage" type="image" alt="' . $video_name . '" title="' . $video_name . '" /> <strong>' . $user->lang['ABBC3_BBVIDEO_VIDEO'] .' : <a href="' . $in . '" target="_blank" >' . $video_name[1] . '</a></strong>';
						}
						else
						{
							$img = '<img src="' . $config['ABBC3_PATH']  . '/images/' . $video_data['image'] .'" class="postimage" type="image" alt="' . $video_name . '" title="' . $video_name . '" /> <strong>' . $user->lang['ABBC3_BBVIDEO_FILE'] .' : </strong>' . $video_name;
						}

						$video_data['regexp'] = str_replace( array ('{WIDTH}','{HEIGHT}') , array ($w, $h) , $video_data['regexp'] );

						$out = preg_replace( $video_data['found'], $video_data['regexp'], str_replace(' ', '', trim( $in ) ) );

						return "<br />$img<br />$out<br />";
					}
				}
			}
		}
		return '[BBvideo]' . $in . '[/BBvideo]' ;
	}

	/**
	* Parsing the web videos without a clear link.
	*
	* @param string		$in		post text between [BBvideo] & [/BBvideo]
	* @param string		object or embed
	* @return embed video
	**/
	function external_video( $link, $search )
	{
		$file_contents = '';
		if ( (ini_get('allow_url_fopen') != 1) || ( false !== ( $file_contents = file_get_contents ( str_replace( ' ', '+', $link) ) ) ) )
		{
			// Safety Check if CURL is present
			if ( function_exists ('curl_init') )
			{
				$ch = curl_init();
				$timeout = 5; // set to zero for no timeout
				curl_setopt ($ch, CURLOPT_URL, $link);
				curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
				$file_contents = curl_exec($ch);
				curl_close($ch);
			}
		}

		if ( $file_contents )
		{
			$ini  = strpos( $file_contents, '<' . $search );
			$last = strpos( $file_contents, $search . '>' );
			if ( $search == 'object')
			{
				$last++ ;
			}

			$video_data = substr( $file_contents, $ini, ( ($last+6)-$ini) );

			return $video_data;
		}
		else
		{
			return $link;
		}
	}
}
// End of abbcode3 class

	/**
	* eD2k Add all links feature
	*
	* @param string		$text		post text
	* @param int		$post_id	post id
	* @return string	display table with ed2k links features
	**/
	function make_addalled2k_link_abbc3($text, $post_id)
	{
		global $user;
		$user->add_lang('mods/abbcode');

		$abbc3_unique_id = substr(base_convert(unique_id(), 16, 36), 0, 8);

		// padding
		$ret = ' ' . $text;
		$t_ed2k_raw = array();

		// dig through the message for all ed2k links! split up by "ed2k:"
		$t_ed2k_raw = explode("ed2k:", $text);
		$t_ed2kinsert1 = '';
		$t_ed2kinsert2 = '';
		$t_ed2kinsert3 = '';

		// The first item is garbage
		unset($t_ed2k_raw[0]);

		// no need to dig through it if there are not at least 2 links!
		if ( count($t_ed2k_raw) > 1)
		{
			foreach ($t_ed2k_raw as $t_ed2k_raw_line)
			{
				$t_ed2k_parts = explode("|", $t_ed2k_raw_line);
				// This looks now like this (only important parts included
				/**
				[1] => string(4) "file"
				[2] => string(46) "filename.extension"
				[3] => string(9) "321456789"
				[4] => string(32) "112233445566778899AABBCCDDEEFF11"
				[5] => string(?) "source or AICH hash"
				**/

				// Check the obvious things
				if (strlen($t_ed2k_parts[1]) == 4 AND $t_ed2k_parts[1] == "file" AND strlen($t_ed2k_parts[2]) > 0 AND floatval($t_ed2k_parts[3]) > 0 AND strlen($t_ed2k_parts[4]) == 32)
				{
					// This is a true link, lets paste it together and put it in an array
					if ( substr( $t_ed2k_parts[5], 0, 2 ) == "h=" || substr( $t_ed2k_parts[5], 0, 7 ) == "sources" )
					{
						$t_ed2k_reallinks[] = "ed2k://|file|" . str_replace( "'", "\'", $t_ed2k_parts[2] ) . "|" . $t_ed2k_parts[3] . "|" . $t_ed2k_parts[4] . "|" . $t_ed2k_parts[5] . "|/";
					}
					else
					{
						$t_ed2k_reallinks[] = "ed2k://|file|" . str_replace( "'", "\'", $t_ed2k_parts[2] ) . "|" . $t_ed2k_parts[3] . "|" . $t_ed2k_parts[4] . "|/";
					}
				}
			}

			// Now lets see if we have 2 or more links, only then, we do our little trick, because otherwise, it would be wasted for one link alone!
			if ( count( $t_ed2k_reallinks ) > 1 )
			{
				$t_ed2kinsert1 = '<br /><hr noshade color="#000000" size="1px"><div class="ed2k_div1"><a href="javascript:toggle_ed2k(\'' . $abbc3_unique_id . '\');">' . $user->lang['ABBC3_ED2K_TAG'] . '</a></div> <div id="posttable' . $abbc3_unique_id . '" class="ed2k_div2" ><table border="0" cellspacing="0" cellpadding="0" class="ed2k_table">';

				$i = 0;
				foreach( $t_ed2k_reallinks as $t_ed2klink )
				{
					$t_ed2k_parts = explode( "|", $t_ed2klink );
					$t_ed2kinsert2 .= '<tr><td class="ed2k_col1" ><input type="checkbox" name="lnk" value="' . $t_ed2klink . '"></td><td class="ed2k_col2" >' . $t_ed2k_parts[2] . '</td></tr>';
					$i++;
				}

				$t_ed2kinsert3 = '<tr><td colspan="2" class="ed2k_col1"><input type="button" value="' . @$user->lang['SELECT_ALL_CODE'] . '" class="button2" onclick=checkAll(\'lnk\')>&nbsp;&nbsp;<input type="button" value="' . @$user->lang['ABBC3_ED2K_ADD'] . '" class="button2" onclick=download(\'lnk\',0,1)></td></tr></table></div>';
			}
			unset($t_ed2k_reallinks);
		}

		// remove padding
		return( substr( $ret . $t_ed2kinsert1 . $t_ed2kinsert2 . $t_ed2kinsert3, 1) );
	}

	function humanize_size_abbc3 ($size, $rounder = 0)
	{
		$sizes		= array('Bytes', 'Kb', 'Mb', 'Gb', 'Tb', 'Pb', 'Eb', 'Zb', 'Yb');
		$rounders	= array(0, 1, 2, 2, 2, 3, 3, 3, 3);
		$ext		= $sizes[0];
		$rnd		= $rounders[0];

		if ($size < 1024)
		{
			$rounder	= 0;
			$format		= '%.' . $rounder . 'f Bytes';
		}
		else
		{
			for ($i = 1, $cnt = count($sizes); ($i < $cnt && $size >= 1024); $i++)
			{
				$size	= $size / 1024;
				$ext	= $sizes[$i];
				$rnd	= $rounders[$i];
				$format	= '%.' . $rnd . 'f ' . $ext;
			}
		}

		if (!$rounder)
		{
			$rounder = $rnd;
		}
		return sprintf($format, round($size, $rounder));
	}	

/**
 * linktest class
 * 
 * This class is used to check the validity of file host links (also called one-click hosts). 
 * It does so by looking for the file size that the host displays. It requires that you have
 * curl installed and a version of PHP that supports preg_match and preg_replace.
 * 
 * @license 	GPL license
 * @author	 	Max Power
 * @copyright	2008, Max Power
 */
class linktest
{
	// global variables shared by all methods
	var $url, $method, $format, $domain, $adjustment, $filters;
	
	// class constants
	var $PATTERN 	= "@([\d\.,\s]+)(KB|MB|GB)@i";
	var $CONVERSION = 1024;
	
	/**
	* The test method is the only public method and the only method necessary for interfacing
	* with this class. The list of supported hosts is in this method. Only six hosts are used
	* as default but many others are available as needed and need to be uncommented for use.
	* 
	* @param string url (required) - must be a full url including http://
	* @param string format (optional) - only accepted strings are 'KB', 'MB', and 'GB'
	* @param boolean supported (optional) - to only allow supported hosts or not
	* @return array result - zero index is either a number or false
	**/ 
	function test($url, $format = 'MB', $supported = false)
	{
		/** check for valid hostname in url **/
		$pattern = '@^https?://?([^/]+)@i';
		
		if (preg_match($pattern, $url, $matches))
		{
			$hostname = $matches[1];
		}
		else
		{
			$result[0] = false;
			$result[1] = 'invalid url';
			$result[2] = "The link provided is not a valid url";
			return $result;
		}
		
		/** set format to 'MB' if variable is not KB, MB or GB **/
		$format = strtoupper($format);
		
		if ($format !== 'KB' && $format !== 'MB' && $format !== 'GB')
		{
			$format = 'MB';
		}
		
		/** set supported to true if variable is not true or false **/
		if ($supported !== true && $supported !== false)
		{
			$supported = true;
		}
		
		// set global variables
		$this->url = $url;
		$this->format = $format;
		
		/** FILE HOST PROCESSING
		* array of hosts to check against url
		* important: do not change key names
		* the following is the format of the hosts array:
		* $hosts[method name][domain name] = array(domain pattern, url retrieve method, size adjustment, filters array);
		**/
		
		/* most popular hosts */
		$hosts['rapidshare']['rapidshare.com'] 		= array("@rapidshare\.com@i", 'curl', 1000/$this->CONVERSION, array('@<u>100 MB</u>@i'));
		$hosts['rapidshare']['rapidshare.de'] 		= array("@rapidshare\.de@i", 'curl', 1, array('@>300 MB<@i'));
		$hosts['other']['megaupload.com'] 			= array("@megaupload\.com@i", 'curl', 1);
		$hosts['other']['megarotic.com'] 			= array("@megarotic\.com@i", 'curl', 1);
		$hosts['other']['depositfiles.com'] 		= array("@depositfiles\.com@i", 'file', 1);
		$hosts['other']['megashares.com'] 			= array("@megashares\.com@i", 'curl', 1, array('@ 10GB@i'));
		
		/** lesser known hosts these hosts are commented out but can be used as needed **/
		//$hosts['other']['filefactory.com'] 		= array("@filefactory\.com@i", 'curl', 1);
		//$hosts['other']['sendspace.com'] 			= array("@sendspace\.com@i", 'file', 1);
		//$hosts['other']['badongo.com'] 			= array("@badongo\.com@i", 'curl', 1);
		//$hosts['other']['filecloud.com'] 			= array("@filecloud\.com@i", 'curl', 1);
		//$hosts['other']['filefront.com'] 			= array("@filefront\.com@i", 'curl', 1);
		//$hosts['other']['gigasize.com'] 			= array("@gigasize\.com@i", 'curl', 1);
		//$hosts['other']['uploadmb.com'] 			= array("@uploadmb\.com@i", 'curl', pow(1000/self::CONVERSION, 2));
		//$hosts['other']['speedshare.org'] 		= array("@speedshare\.org@i", 'curl', 1);
		//$hosts['other']['uploading.com'] 			= array("@uploading\.com@i", 'curl', 1);
		//$hosts['other']['furk.net'] 				= array("@furk\.net@i", 'curl', 1);
		//$hosts['other']['savefile.info'] 			= array("@savefile\.info@i", 'curl', 1);
		//$hosts['other']['arbup.org'] 				= array("@arbup\.org@i", 'curl', 1, array('@x 120MB p@i'));
		//$hosts['other']['getupload.com']			= array("@getupload\.com@i", 'curl', 1);
		//$hosts['other']['turboupload.com'] 		= array("@turboupload\.com@i", 'curl', 1);
		//$hosts['other']['titanicshare.com'] 		= array("@titanicshare\.com@i", 'curl', 1);
		//$hosts['other']['file2you.net'] 			= array("@file2you\.net@i", 'curl', 1);
		//$hosts['other']['upitus.com'] 			= array("@upitus\.com@i", 'curl', 1, array('@o 80 MB \(@i'));
		//$hosts['other']['egoshare.com'] 			= array("@egoshare\.com@i", 'curl', 1);
		//$hosts['other']['tornadodrive.com'] 		= array("@tornadodrive\.com@i", 'curl', 1);
		//$hosts['other']['uploadpalace.com'] 		= array("@uploadpalace\.com@i", 'curl', 1);
		//$hosts['other']['4filehosting.com'] 		= array("@4filehosting\.com@i", 'curl', 1);
		//$hosts['other']['primeupload.com'] 		= array("@primeupload\.com@i", 'curl', 1);
		//$hosts['other']['yousendit.com'] 			= array("@yousendit\.com@i", 'file', 1);
		//$hosts['other']['transferbigfiles.com']	= array("@transferbigfiles\.com@i", 'file', 1, array('@o 1gb p@i', '@>~300kb<@i'));
		//$hosts['other']['mailbigfile.com'] 		= array("@mailbigfile\.com@i", 'curl', 1);
		//$hosts['other']['friendlyfiles.net'] 		= array("@friendlyfiles\.net@i", 'curl', 1);
		//$hosts['other']['bigupload.com'] 			= array("@bigupload\.com@i", 'file', 1);
		//$hosts['other']['axifile.com'] 			= array("@axifile\.com@i", 'curl', 1, array('@ 200 @i'));
		//$hosts['other']['speedyshare.com'] 		= array("@speedyshare\.com@i", 'curl', 1);
		//$hosts['other']['justupit.com'] 			= array("@justupit\.com@i", 'curl', 1, array('@>170mb!!<@i'));
		//$hosts['other']['momoshare.com'] 			= array("@momoshare\.com@i", 'curl', 1);
		//$hosts['other']['internetfiles.org'] 		= array("@internetfiles\.org@i", 'curl', 1);
		//$hosts['other']['ultrashare.net'] 		= array("@ultrashare\.net@i", 'curl', 1, array('@ 100MB P@i'));
		//$hosts['other']['upload2.net'] 			= array("@upload2\.net@i", 'curl', 1, array('@s 25Mb@i'));
		//$hosts['other']['webfilehost.com'] 		= array("@webfilehost\.com@i", 'curl', 1, array('@500\s?MB@i'));
		//$hosts['other']['rapidfile.net'] 			= array("@rapidfile\.net@i", 'file', 1, array('@o 300 MB U@i'));
		//$hosts['other']['zshare.net'] 			= array("@zshare\.net@i", 'file', 1);*/
		
		/** find out which host to check and set variables from array **/
		$host = false;
		
		foreach ($hosts as $key => $value)
		{
			foreach ($value as $domain => $pattern)
			{
				if (preg_match($pattern[0], $hostname, $matches))
				{
					$host = $key;
					$this->domain		= $domain;
					$this->method		= $pattern[1];
					$this->adjustment	= $pattern[2];
					$this->filters		= (@$pattern[3]) ? $pattern[3] : '' ;
				}
			}
		}
		
		/** return false if no supported hosts were matched or set default variables if supported is false **/
		if (!$host)
		{
			if ($supported == true)
			{
				$result[0] = false;
				$result[1] = 'invalid host';
				$result[2] = "The domain $hostname is not a supported host";
				return $result;
			}
			else
			{
				$host = 'other';
				$this->domain = $hostname;
				$this->method = 'curl';
				$this->adjustment = 1;
				$this->filters = null;
			}
		}
		
		/** dynamic function call **/
		$result = $this->$host();
		
		return $result;
	}
	
	/**
	* Rapidshare requires a two step process in order to view the file size. To make it more
	* complicated, the second page can only be reached using POST. This method gathers the 
	* information required to make the POST call and passes it to the other function, which
	* the other domains use. If other hosts require a two step process, this rapidshare method
	* can be used as a template.
	* 
	* @return array result
	**/
	function rapidshare()
	{
		/** get rapidshare submit form url **/
		$pattern	= '@<form.*.action="(.*)".*.method@i';
		$matches	= $this->match($this->url, $pattern);
	#	$url		= $matches[1];
	#	$params		= "dl.start=Free";
		
		/** get rapidshare.de hidden param **/
		if ($this->domain == 'rapidshare.de')
		{
			$pattern	= '@<input.*.hidden.*.value="(.*)">@i';
			$matches	= $this->match($this->url, $pattern);
	#		$param		= $matches[1];
	#		if (!is_null($param))
	#		{
	#			$params = "$params&uri=$param";
	#		}
		}
		
		/** get file size **/
	#	$this->url	= $url;
	#	$result		= $this->other($params);
		
	#	return $result;
		return $matches;
	}
	
	/**
	* The other method is used to get the file size by all domains other than rapidshare. It
	* contains the standard pattern for finding the file size and also makes the call to the
	* match method and convertSize method.
	* 
	* @param string params (optional) - params is used for passing POST parameters
	* @return array result
	**/
	function other($params = null)
	{
		/** get file size and format **/
		$pattern		= $this->PATTERN;
		$matches		= $this->match($this->url, $pattern, $params);
	#	$size			= $matches[1];
	#	$sourceFormat	= strtoupper($matches[2]);
		
	#	if (is_null($size) || rtrim($size) == '')
	#	{
	#		$result[0] = false;
	#		$result[1] = 'invalid link';
	#		$result[2] = "This link for $this->domain is invalid";
	#		return $result;
	#	}
	#	else
	#	{
	#		$result[0] = true;
	#		$result[1] = 'Valid link';
	#		$result[2] = "This link for $this->domain is valid !";
	#	}
		// convert size to requested format
	#	$result = $this->convertSize($size, $sourceFormat);
		
	#	return $result;
		return $matches;
	}
	
	/**
	* The match method is used by the other methods to get the HTML and perform the preg_replace
	* and preg_match. First, it gets the HTML using the curl or file_get_contents method accodding
	* to the global method variable. Next, the HTML is filtered for common problems and then for
	* the domain specific filters that are stored in the global fitlers array. Finally, the filtered
	* HTML is matched against the pattern that is passed into the method.
	* 
	* @param string url (required) - this url may not always be the same as the global url so it must be passed
	* @param string params (optional) - params is used for passing POST parameters
	* @return array result
	**/
	function match($url, $pattern, $params = null)
	{
		/** get html from url **/
		if ($this->method == 'curl')
		{
			$curl = curl_init();
			
			if (!is_null($params))
			{
				curl_setopt($curl, CURLOPT_POST, 1);
				curl_setopt($curl, CURLOPT_POSTFIELDS, $params);
			}
			curl_setopt($curl, CURLOPT_URL, $url);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
			$html = curl_exec($curl);
			curl_close($curl);
		}
		else
		{
			if (!is_null($params))
			{
				$options = array('http' => array('method' => 'POST', 'content' => $params));
				$context = stream_context_create($options);
				$html = file_get_contents($url, null, $context);
			}
			else
			{
				$html = file_get_contents($url);
			}
		}
		
		/** uncomment line below to test unfiltered html **/
		// echo "<xmp>$html</xmp>"; exit;
		
		/** setup patterns for preg_replace to remove common-problem text **/
		$patterns[] = '@<title>.*?</title>@i';
		$patterns[] = '@<meta.*?>@i';
		$patterns[] = '@<noscript>(.|\n)*?</noscript>@i';
		$patterns[] = '@&nbsp;@i';
		$patterns[] = '@</b>@i';
		
		/** add custom patterns from filters array **/
		if (is_array($this->filters))
		{
			foreach ($this->filters as $value)
			{
				$patterns[] = $value;
			}
		}
		
		/** process patterns with preg_replace **/
		foreach ($patterns as $value)
		{
			$test = preg_replace($value, ' ', $html);
			if (!is_null($test))
			{
				$html = $test;
			}
		}
		
		/** uncomment line below to test filtered html **/
		// echo "<xmp>$html</xmp>"; exit;
		
		/** check html against pattern and return result **/
		if (preg_match($pattern, $html, $matches))
		{
			return $matches;
		}
		else
		{
			return false;
		}
	}
	
	/**
	* The convertSize method is used to change the file size from the format that the host
	* uses (KB, MB, or GB) to the file size format that was requested from the test method.
	* It also uses the adjustment variable, which is used if the host converts their file
	* sizes wrong (the most noteable example is rapidshare.com, which needs adjustment).
	* 
	* @param number size (required) - the file size that was matched from the host
	* @param string sourceFormat (required) - the format that the host uses (not the requested format)
	* @return array result
	**/
	function convertSize($size, $sourceFormat)
	{
		/** set variables for equation **/
		$size				= str_replace(',', '', $size);
		$conversion			= $this->CONVERSION;
		$adjustment			= $this->adjustment;
		$format['source']	= $sourceFormat;
		$format['final']	= $this->format;
		
		/** set multiplier and divsor for equation **/
		foreach ($format as $key => $value)
		{
			switch ($value)
			{
				case 'KB':
					$x[$key] = 1;
					break;
				case 'MB':
					$x[$key] = $conversion;
					break;
				case 'GB':
					$x[$key] = $conversion * $conversion;
					break;
			}
		}
		
		/** convert size to KB then convert to final format **/
		$size = $size * $adjustment;
		$size = ($size * $x['source']) / $x['final'];
		$result[0] = $size;
		
		return $result;
	}
}

?>