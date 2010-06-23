<?php
/**
* @package: phpBB3 :: Advanced BBCode box 3 -> Install layout
* @version: $Id: install.php, v 1.0.10 2008/08/01 01:08:08 leviatan21 Exp $
* @copyright: (c) 2008 nickvergessen: http://www.flying-bits.org/ - nickvergessen@gmx.de
* @license: http://opensource.org/licenses/gpl-license.php GNU Public License
* @author: Installer Author nickvergessen: nickvergessen@gmx.de - http://www.flying-bits.org/
**/

if (!defined('IN_PHPBB'))
{
	exit;
}

$debug_output = '';
if ( defined('DEBUG_EXTRA') )
{
	$mtime = explode(' ', microtime());
	$totaltime = $mtime[0] + $mtime[1] - $starttime;
	$debug_output = sprintf('Time : %.3fs | ' . $db->sql_num_queries() . ' Queries | GZIP : ' . (($config['gzip_compress']) ? 'On' : 'Off') . (($user->load) ? ' | Load : ' . $user->load : ''), $totaltime);
	
	if (function_exists('memory_get_usage'))
	{
		if ($memory_usage = memory_get_usage())
		{
			global $base_memory_usage;
			
			$memory_usage -= $base_memory_usage;
			$memory_usage = get_formatted_filesize($memory_usage);
			$debug_output .= ' | Memory Usage: ' . $memory_usage;
		}
	}
}

$activemenu = ' id="activemenu"';

echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">';
echo '<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" xml:lang="en-gb" lang="en-gb">';
echo '<head>';
echo '	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">';
echo '	<meta http-equiv="Content-Style-Type" content="text/css">';
echo '	<meta http-equiv="Content-Language" content="en-gb">';
echo '	<meta http-equiv="imagetoolbar" content="no"><title>' . $page_title . '</title>';
if ( $meta_url )
{
echo '	<meta http-equiv="refresh" content="2 ;url=' . $meta_url . '" />';
}
echo '	<link href="../adm/style/admin.css" rel="stylesheet" type="text/css" media="screen">';
echo '</head>';
echo '<body class="ltr">';
echo '<div id="wrap">';
echo '	<div id="page-header">';
echo '		<h1>' . $page_title . '</h1>';
echo '		<p><a href="' . $phpbb_root_path . '">' . $user->lang['INDEX'] . '</a></p>';
echo '		<p id="skip"><a href="#acp">Skip to content</a></p>';
echo '	</div>';
echo '	<div id="page-body">';
echo '		<div id="acp">';
echo '		<div class="panel">';
echo '			<span class="corners-top"><span></span></span>';
echo '				<div id="content">';
echo '					<div id="menu">';
echo '						<ul>';
echo '							<li' . (($mode == 'else') ? $activemenu : '') . '><a href="' . addslashes(append_sid("{$phpbb_root_install}install.$phpEx")) . '"><span>' . $user->lang['INSTALLER_INTRO'] . '</span></a></li>';
echo '							<li class="header">' . $user->lang['INSTALLER_INSTALL_MENU'] . '</li>';
echo '							<li' . (($mode == 'install') ? $activemenu : '') . '><a href="' . addslashes(append_sid("{$phpbb_root_install}install.$phpEx", "mode=install")) . '"><span>' . sprintf($user->lang['INSTALLER_INSTALL_VERSION'], $mod_version) . '</span></a></li>';
echo '							<li' . (($mode == 'update') ? $activemenu : '') . '><a href="' . addslashes(append_sid("{$phpbb_root_install}install.$phpEx", "mode=update")) . '"><span>' . sprintf($user->lang['INSTALLER_UPDATE_VERSION'], $mod_version) . '</span></a></li>';
echo '							<li' . (($mode == 'delete') ? $activemenu : '') . '><a href="' . addslashes(append_sid("{$phpbb_root_install}install.$phpEx", "mode=delete")) . '"><span>' . sprintf($user->lang['INSTALLER_DELETE_VERSION'], $mod_version) . '</span></a></li>';
echo '							<li class="header">' . $user->lang['INSTALLER_EXTRA_MENU'] . '</li>';
echo '							<li' . (($mode == 'reparsePost') ? $activemenu : '') . '><a href="' . addslashes(append_sid("{$phpbb_root_install}install.$phpEx", "mode=reparsePost")) . '"><span>' . $user->lang['INSTALLER_REPARSE_POST'] . '</span></a></li>';
echo '							<li' . (($mode == 'reparseSig') ? $activemenu : '') . '><a href="' . addslashes(append_sid("{$phpbb_root_install}install.$phpEx", "mode=reparseSig")) . '"><span>' . $user->lang['INSTALLER_REPARSE_SIG'] . '</span></a></li>';
echo '							<li' . (($mode == 'reparsePM') ? $activemenu : '') . '><a href="' . addslashes(append_sid("{$phpbb_root_install}install.$phpEx", "mode=reparsePM")) . '"><span>' . $user->lang['INSTALLER_REPARSE_PM'] . '</span></a></li>';
echo '						</ul>';
echo '					</div>';
echo '					<div id="main">';
echo '<a name="maincontent"></a>';
if ( $mode == 'install' || $mode == 'update' )
{
	// Set default config data
	if ($start_step == 1)
	{
		if (sizeof($ary_msg_ok))
		{
			echo '<div class="successbox">';
			echo '	<h3>' . $user->lang['INFORMATION'] . '</h3>';
			echo '	<p>' . (($mode == 'install') ? $user->lang['INSTALLER_INSTALL_SUCCESSFUL'] : $user->lang['INSTALLER_UPDATE_SUCCESSFUL']) . '</p>';
			echo '</div>';
			echo '	<p>';
			foreach ($ary_msg_ok as $msg_text)
			{
				echo $msg_text . '<br />';
			}
		}
		
		if ($ary_msg_err)
		{
			echo '<div class="errorbox">';
			echo '	<h3>' . $user->lang['WARNING'] . '</h3>';
			echo '	<p>' . (($mode == 'install') ? $user->lang['INSTALLER_INSTALL_UNSUCCESSFUL'] : $user->lang['INSTALLER_UPDATE_UNSUCCESSFUL']) . '</p>';
			echo '</div>';
			echo '	<p>';
			foreach ($ary_msg_err as $msg_text)
			{
				echo $msg_text . '<br />';
			}
		}
		echo '	</p>' . btn_link(2, $mode);
	}
	// bbcodes new rows
	elseif ($start_step == 2)
	{
		if (sizeof($ary_msg_ok))
		{
			echo '<div class="successbox">';
			echo '	<h3>' . $user->lang['INFORMATION'] . '</h3>';
			echo '	<p>' . (($mode == 'install') ? $user->lang['INSTALLER_INSTALL_SUCCESSFUL'] : $user->lang['INSTALLER_UPDATE_SUCCESSFUL']) . '</p>';
			echo '</div>';
			echo '	<p>';
			foreach ($ary_msg_ok as $msg_text)
			{
				echo $msg_text . '<br />';
			}
		}
		
		if ($ary_msg_err)
		{
			echo '<div class="errorbox">';
			echo '	<h3>' . $user->lang['WARNING'] . '</h3>';
			echo '	<p>' . (($mode == 'install') ? $user->lang['INSTALLER_INSTALL_UNSUCCESSFUL'] : $user->lang['INSTALLER_UPDATE_UNSUCCESSFUL']) . '</p>';
			echo '</div>';
			echo '	<p>';
			foreach ($ary_msg_err as $msg_text)
			{
				echo $msg_text . '<br />';
			}
		}
		echo '	</p>' . btn_link(3, $mode);
	}
	// BBcodes add
	elseif ($start_step == 3)
	{
		if (sizeof($ary_msg_ok))
		{
			echo '<div class="successbox">';
			echo '	<h3>' . $user->lang['INFORMATION'] . '</h3>';
			echo '	<p>' . (($mode == 'install') ? $user->lang['INSTALLER_INSTALL_SUCCESSFUL'] : $user->lang['INSTALLER_UPDATE_SUCCESSFUL']) . '</p>';
			echo '</div>';
			echo '	<p>';
			foreach ($ary_msg_ok as $msg_text)
			{
				echo $msg_text . '<br />';
			}
		}
		
		if ($ary_msg_err)
		{
			echo '<div class="errorbox">';
			echo '	<h3>' . $user->lang['WARNING'] . '</h3>';
			echo '	<p>' . (($mode == 'install') ? $user->lang['INSTALLER_INSTALL_UNSUCCESSFUL'] : $user->lang['INSTALLER_UPDATE_UNSUCCESSFUL']) . '</p>';
			echo '</div>';
			echo '	<p>';
			foreach ($ary_msg_err as $msg_text)
			{
				echo $msg_text . '<br />';
			}
		}
		echo '	</p>' . btn_link(4, $mode);
	}
	// add Modules
	elseif ($start_step == 4)
	{
		if (sizeof($ary_msg_ok))
		{
			echo '<div class="successbox">';
			echo '	<h3>' . $user->lang['INFORMATION'] . '</h3>';
			echo '	<p>' . (($mode == 'install') ? $user->lang['INSTALLER_INSTALL_SUCCESSFUL'] : $user->lang['INSTALLER_UPDATE_SUCCESSFUL']) . '</p>';
			echo '</div>';
			echo '	<p>';
			foreach ($ary_msg_ok as $msg_text)
			{
				echo $msg_text . '<br />';
			}
		}
		
		if ($ary_msg_err)
		{
			echo '<div class="errorbox">';
			echo '	<h3>' . $user->lang['WARNING'] . '</h3>';
			echo '	<p>' . (($mode == 'install') ? $user->lang['INSTALLER_INSTALL_UNSUCCESSFUL'] : $user->lang['INSTALLER_UPDATE_UNSUCCESSFUL']) . '</p>';
			echo '</div>';
			echo '	<p>';
			foreach ($ary_msg_err as $msg_text)
			{
				echo $msg_text . '<br />';
			}
		}
		echo '	</p>' . btn_link(5, $mode);
	}
	// add Modules
	elseif ($start_step == 5)
	{
		echo '<div class="successbox">';
		echo '	<h3>' . $user->lang['INFORMATION'] . '</h3>';
		echo '	<p>' . (($mode == 'install') ? $user->lang['INSTALLER_INSTALL_SUCCESSFUL'] : $user->lang['INSTALLER_UPDATE_SUCCESSFUL']) . '</p>';
		echo '</div>';
		echo '  <p>' . sprintf($user->lang['INSTALLER_INSTALL_END'], $user->lang['INSTALLER_TITLE'], $mod_version) . '</p>';
		echo '	<p>' . (($mode == 'update') ? $user->lang['INSTALLER_UPDATE_END'] : '') . '</p>';
	}

	else
	{
		echo '<h1>' . (($mode == 'install') ? $user->lang['INSTALLER_INSTALL_WELCOME'] : $user->lang['INSTALLER_UPDATE_WELCOME']) . '</h1>';
		echo '<p>' . (($mode == 'install') ? $user->lang['INSTALLER_INSTALL_WELCOME_NOTE'] : $user->lang['INSTALLER_UPDATE_WELCOME_NOTE']) . '</p>';
		if ( !isset($config['ABBC3_MOD']) && ($mode == 'update') )
		{
			echo '<div class="errorbox">';
			echo '	<h3>' . $user->lang['INSTALLER_DELETE_INFORMATION'] . '</h3>';
			echo '</div>';
		}
		echo '<form id="acp_board" method="post" action="' . append_sid("{$phpbb_root_install}install.$phpEx", "mode=" . (($mode == 'install') ? 'install' : 'update') . "&amp;start_step=1") . '">';
		echo '	<fieldset>';
		echo '		<legend>' . (($mode == 'install') ? $user->lang['INSTALLER_INSTALL'] : $user->lang['INSTALLER_UPDATE'] ) . '</legend>';
		echo '		<dl>';
		echo '			<dt><label for="install">' . (($mode == 'install') ? sprintf($user->lang['INSTALLER_INSTALL_VERSION'], $mod_version) : sprintf($user->lang['INSTALLER_UPDATE_VERSION'], $mod_version) ) . ' : </label></dt>';
		echo '			<dd><label><input name="install" value="1" class="radio" type="radio" />' . $user->lang['YES'] . '</label><label><input name="install" value="0" class="radio" type="radio" checked="checked" />' . $user->lang['NO'] . '</label></dd>';
		echo '		</dl>';
		echo '		<p class="submit-buttons">';
		echo '			<input class="button1" id="submit" name="submit" value="' . $user->lang['SUBMIT'] . '" type="submit" />&nbsp;';
		echo '			<input class="button2" id="reset" name="reset" value="' . $user->lang['RESET'] . '" type="reset" />';
		echo '		</p>';
		echo '	</fieldset>';
		echo '</form>';
	}
}

else if ($mode == 'delete')
{
	if ($delete == 1)
	{
		if ($deleted)
		{
			echo '<div class="successbox">';
			echo '	<h3>' . $user->lang['INFORMATION'] . '</h3>';
			echo '</div>';
			echo '<p>' . sprintf($user->lang['INSTALLER_DELETE_SUCCESSFUL'], $user->lang['INSTALLER_TITLE'] , $mod_version) . '</p>';
		}
		else
		{
			echo '<div class="errorbox">';
			echo '	<h3>' . $user->lang['WARNING'] . '</h3>';
			echo '</div>';
			echo '<p>' . sprintf($user->lang['INSTALLER_DELETE_UNSUCCESSFUL'], $user->lang['INSTALLER_TITLE'] , $mod_version) . '</p>';
		}
	}
	else
	{
		echo '<h1>' . $user->lang['INSTALLER_DELETE_WELCOME'] . '</h1>';
		echo '<p>' . $user->lang['INSTALLER_DELETE_WELCOME_NOTE'] . '</p>';
		if ( !isset($config['ABBC3_MOD']) )
		{
			echo '<div class="errorbox">';
			echo '	<h3>' . $user->lang['INSTALLER_DELETE_INFORMATION'] . '</h3>';
			echo '</div>';
		}
		echo '<form id="acp_board" method="post" action="' . append_sid("{$phpbb_root_install}install.$phpEx", "mode=delete") . '">';
		echo '	<fieldset>';
		echo '		<legend>' . $user->lang['INSTALLER_DELETE'] . '</legend>';
		echo '		<dl>';
		echo '			<dt><label for="delete">' . sprintf($user->lang['INSTALLER_DELETE_VERSION'], $mod_version) . ':</label></dt>';
		echo '			<dd><label><input name="delete" value="1" class="radio" type="radio" />' . $user->lang['YES'] . '</label><label><input name="delete" value="0" checked="checked" class="radio" type="radio" />' . $user->lang['NO'] . '</label></dd>';
		echo '		</dl>';
		echo '		<p class="submit-buttons">';
		echo '			<input class="button1" id="submit" name="submit" value="' . $user->lang['SUBMIT'] . '" type="submit" />&nbsp;';
		echo '			<input class="button2" id="reset" name="reset" value="' . $user->lang['RESET'] . '" type="reset" />';
		echo '		</p>';
		echo '	</fieldset>';
		echo '</form>';
	}
}

else if ( $mode == 'reparsePost' || $mode == 'reparseSig' || $mode == 'reparsePM')
{
	if ($reparse == 3 )
	{
		echo '<div class="successbox">';
		echo '	<h3>' . $user->lang['INFORMATION'] . '</h3>';
		echo '<p>' . sprintf($user->lang['INSTALLER_REPARSE_SUCCESSFUL'], $parsee_title) . '</p>';
		echo '</div>';
		echo '<p>' . $msg . '</p>';
	}
	elseif ( $reparse == 2)
	{
		echo '<div class="errorbox">';
		echo '	<h3>' . $user->lang['LONG_SCRIPT_EXECUTION'] . '</h3>';
		echo '</div>';
		echo '<p>' . $msg . '</p>';
	}
	else
	{
		echo '<h1>' . $user->lang['INSTALLER_REPARSE_WELCOME'] . '</h1>';
		echo '<p>' . $user->lang['INSTALLER_REPARSE_WELCOME_NOTE'] . '</p>';
		echo '<div class="errorbox">';
		echo '	<h3>' . $user->lang['WARNING'] . '</h3>';
		echo '<p>' . $user->lang['INSTALLER_REPARSE_NOTE'] . '</p>';
		echo '<p>' . $user->lang['INSTALLER_REPARSE_WARNING'] . '</p>';
		echo '</div>';
		echo '<form id="acp_board" method="post" action="' . append_sid("{$phpbb_root_install}install.$phpEx", "mode=$mode&amp;reparse=1") . '">';
		echo '	<fieldset>';
		echo '		<legend>' . $user->lang['INSTALLER_REPARSE'] . '</legend>';
		echo '		<dl>';
		echo '			<dt><label for="parse">' . $user->lang['INSTALLER_REPARSE'] . ':</label></dt>';
		echo '			<dd><label><input name="parse" value="1" class="radio" type="radio" />' . $user->lang['YES'] . '</label><label><input name="delete" value="0" checked="checked" class="radio" type="radio" />' . $user->lang['NO'] . '</label></dd>';
		echo '		</dl>';
		echo '		<p class="submit-buttons">';
		echo '			<input class="button1" id="submit" name="submit" value="' . $user->lang['SUBMIT'] . '" type="submit" />&nbsp;';
		echo '			<input class="button2" id="reset" name="reset" value="' . $user->lang['RESET'] . '" type="reset" />';
		echo '		</p>';
		echo '	</fieldset>';
		echo '</form>';
	}
}
else
{
	echo '<h1>' . sprintf($user->lang['INSTALLER_INTRO_WELCOME'], $user->lang['INSTALLER_TITLE']) . '</h1>';
	echo '<p>' . $user->lang['INSTALLER_INTRO_WELCOME_NOTE'] . '</p>';
	echo '	<fieldset>';
	echo '		<legend>' . $user->lang['WARNING'] . '</legend>';
	echo '		<dl style="color:#ff0000;">'. $user->lang['INSTALLER_NOTE'] .'</dl>';
	echo '	</fieldset>';
	
}
echo '						</div>';
echo '					</div>';
echo '				<span class="corners-bottom"><span></span></span>';
echo '			</div>';
echo '		</div>';
echo '	</div>';
echo '	<!--';
echo '		We request you retain the full copyright notice below including the link to www.phpbb.com.';
echo '		This not only gives respect to the large amount of time given freely by the developers';
echo '		but also helps build interest, traffic and use of phpBB. If you (honestly) cannot retain';
echo '		the full copyright we ask you at least leave in place the "Powered by phpBB" line, with';
echo '		"phpBB" linked to www.phpbb.com. If you refuse to include even this then support on our';
echo '		forums may be affected.';
echo '		The phpBB Group : 2006';
echo '	// -->';
echo '<div id="page-footer">Powered by phpBB &copy; 2000, 2002, 2005, 2007 <a href="http://www.phpbb.com/">phpBB Group</a><br />Installer by <a href="http://www.flying-bits.org/">nickvergessen</a><br />' . $debug_output . '</div>';
echo '</div>';
echo '</body>';
echo '</html>';
?>