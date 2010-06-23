<?php
/**
* @package: phpBB3 :: Advanced BBCode box 3 -> language [sq][Shqip]
* @version: $Id: abbcode.php, v 1.0.10 2008/08/01 08:08:01 leviatan21 Exp $
* @copyright: ReniX <live@lirent.net > (COX) http://www.lirenti.com/
* @license: http://opensource.org/licenses/gpl-license.php GNU Public License 
* @author: leviatan21 - http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=345763
*
**/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
// Reference : http://www.phpbb.com/mods/documentation/phpbb-documentation/language/index.php#lang-use-php

// This lines are the same as root/language/en/acp/common.php
$lang = array_merge($lang, array(
	'ACP_ABBCODES'				=> 'Advanced BBcodes Box 3',
	'ACP_ABBC3_SETTINGS'		=> 'ABBC3 Preferenca',
	'ACP_ABBC3_BBCODES'			=> 'ABBC3 BBCodes',
	'LOG_CONFIG_ABBCODES'		=> '<strong>Altered ABBC3 Preferencat</strong>',
	'LOG_CONFIG_ABBCODES_ERROR'	=> '<strong>Gabim duke shpetuar preferencat e ABBC3</strong>',
	'LOG_CONFIG_ADD'			=> '<strong>Preferencat ju shtuan bordit</strong><br />» %s',
	'LOG_DATABASE_SCHEMA'		=> '<strong>Azhornimi rregjistrit</strong><br />» %s',
	'LOG_DELETE_ABBCODES'		=> '<strong>Fshi MOD ABBC3 nga rregjistri</strong>',
));

// abbc3_details
$lang = array_merge($lang, array(
	'ACP_ABBCODES'						=> 'Advanced BBcodes Box 3',
	'ACP_ABBCODES_EXPLAIN'				=> 'Ketu mund te manaxhoni stilin per <strong>[ <a href="http://www.mssti.com/phpbb3" target="_blank">ABBC3</a> ]</strong> per bordin tuaj.<br />Ju mund te modifikonin stilin ekzitues, rifreskoni, disativoni apo riaktivoni. <br /><em>The current default style is noted by the presence of an asterisk (*). Also listed is the total user count for each style.</em>',

	'ABBCODES_DISABLE'					=> 'ABBC3',
	'ABBCODES_DISABLE_EXPLAIN'			=> 'Aktivizo ose disaktivizo <strong>Advanced BBodes Box 3</strong> te perdoruesit, dhe/ose te perdorni butotant standart.',
	'ABBCODES_BG'						=> 'Imazhi sfondit',
	'ABBCODES_BG_EXPLAIN'				=> 'Kjo do te lejon nje sfond per ikonat e imazhit.<br />Set to <em>no image</em> for fit to your style.',
	'ABBCODES_TAB'						=> 'Shfaq ikonat per narjen e tag',
	'ABBCODES_BOXRESIZE'				=> 'Resize posting textarea',
	'ABBCODES_BOXRESIZE_EXPLAIN'		=> 'Display buttons to resize posting textarea.',

	'ABBCODES_RESIZE'					=> 'Zvogelo imazhet e medha',
	'ABBCODES_RESIZE_EXPLAIN'			=> 'This corrects the error of the [img] bbcode, when someone publishes a picture that exceeds the width of your forum.',
	'ABBCODES_JAVASCRIPT_EXPLAIN'		=> '<strong>Shenim : </strong> <em>AdvancedBox JS</em> is an JavaScript software used to display images in full size.<br />In <em>contrib</em> folder you will find how to use <strong>ABBC3</strong> with Highslide JS | LiteBox | GreyBox.<br />This modifications are totally optionals. Each script have his own support. I\'m not responsible about it. I will not answer question/problem/bug or any kind of issues about them.<br />Unfortunately Internet Explorer doesn\'t understand how to manage some attached images with those softwares.',
	'ABBCODES_RESIZE_METHOD'			=> 'Menyre zvogelimit',
	'ABBCODES_RESIZE_METHOD_EXPLAIN'	=> 'Choose how to display resized images to full size, in all possible situations.',
	//	for translate :							   don't 			Yes				don't		 Yes		don't			yes			   don't		  yes			don't	  yes
	'ABBCODES_RESIZE_METHODS'			=> array( 'AdvancedBox' => 'AdvancedBox JS', 'enlarge' => 'enlarge', 'samewindow' => 'same window', 'newwindow' => 'new window', 'none' => 'no resize'),

	'ABBCODES_MAX_IMAGE_WIDTH'			=> 'Imazhi maksimum width in pixel',
	'ABBCODES_MAX_IMAGE_WIDTH_EXPLAIN'	=> 'Imazhi do te zvogelohet nqs do te kaloj gjeresine.',
	'ABBCODES_MAX_IMAGE_HEIGHT'			=> 'Imazhi maksimum height in pixel',
	'ABBCODES_MAX_IMAGE_HEIGHT_EXPLAIN'	=> 'Imazhi do te zvogelohet nqs do te kaloj lartesine.',

	'ABBCODES_MAX_THUMB_WIDTH'			=> 'Maximum thumbnail width in pixel',
	'ABBCODES_MAX_THUMB_WIDTH_EXPLAIN'	=> 'A generated thumbnail will not exceed the width set here.',

	'ABBCODES_VIDEO_SIZE'				=> 'Dimesione e videos',
	'ABBCODES_VIDEO_SIZE_EXPLAIN'		=> 'Default width and height for posted video.',
));

// bbcodes_edit
$lang = array_merge($lang, array(
	'ABBCODES_SETINGS'					=> 'ABBC3 Impostimet',
	'ABBCODES_SETINGS_EXPLAIN'			=> 'Here you can determine the basic operation of <strong>ABBC3</strong>, enable or disable, and among other settings adjust the default values for the background.',

	'ABBCODES_EDIT'						=> 'ABBC3 edito bbcode',
	'ABBCODES_EDIT_EXPLAIN'				=> 'Here you can determine where will be displayed or who can use it and the image of each bbcode.',

	'ABBCODES_CONFIG'					=> 'ABBC3 Component config',
	'ABBCODES_CONFIG_EXPLAIN'			=> 'From this page you can alter the order of tags on posting page or edit the icons,',
	'ABBCODES_GROUPS_EXPLAIN'			=> '<strong>Manage groups : </strong>If there are no selected groups all users can use this bbcode.<br />In order to select (or un-select) multiple groups, you must use Ctrl-Click (or Cmd-Click on Mac) items to add them. If you forget to hold down Ctrl/Cmd when clicking an item, then all the previously selected items are lost.',

	'ABBCODES_NAME'						=> 'Tag emri',
	'ABBCODES_TAG'						=> 'Tag image icon',
	'ABBCODES_ORDER'					=> 'Tag order',

	'ABBCODES_BREAK_MOVER'				=> '<strong><i>Line break</i></strong>',
	'ABBCODES_DIVISION_MOVER'			=> '<strong><i>Division</i></strong>',
	'ABBCODES_ADD_DIVISION'				=> 'Add new Division',
	'ABBCODES_ADD_BREAK'				=> 'Add new Line break',

	'ABBCODES_MOD_DISABLE'				=> '<strong>Advanced BBcodes Box 3</strong> is disabled.<br />',
	'ABBCODES_STATUS'					=> 'statusi',
	'ABBCODES_ACTIVATED'				=> 'aktivizo',
	'ABBCODES_DEACTIVATED'				=> 'disaktivizo',
));

// Installer 
$lang = array_merge($lang, array(
	// Main
	'INSTALLER_TITLE'					=> 'Advanced BBcodes Box 3',
	'INSTALLER_VERSION'					=> ' version : %1$s',

	'INSTALLER_INTRO'					=> 'Intro',
	'INSTALLER_INTRO_WELCOME'			=> 'Mire se vini tek <strong>%1$s</strong> Installation',
	'INSTALLER_INTRO_WELCOME_NOTE'		=> 'Zgjidhi çfare doni te beni.',
	'INSTALLER_INSTALL_MENU'			=> 'Menu',
	'INSTALLER_EXTRA_MENU'				=> 'Ekstrs',

	// Install
	'INSTALLER_INSTALL'					=> 'Instalo',
	'INSTALLER_INSTALL_WELCOME'			=> 'Mire se vini tek <strong>ABBC3</strong> Installation menu',
	'INSTALLER_INSTALL_WELCOME_NOTE'	=> 'When you choose to instalo ABBC3, any database of previous versions will be dropped.',
	'INSTALLER_INSTALL_SUCCESSFUL'		=> 'Installation of ABBC3 was successful.',
	'INSTALLER_INSTALL_UNSUCCESSFUL'	=> 'Installation of ABBC3 was <strong>not</strong> successful.',
	'INSTALLER_INSTALL_VERSION'			=> 'Shenim version : %1$s',
	'INSTALLER_INSTALL_END'				=> 'Instalimo i <strong>%1$s version : %2$s</strong> was successful. <br /> <p>You should now <a href="../index.php">login to your board</a> and check if everything is working fine. <br />Do not forget to Elemino, rename or move your <strong>install_abbc3</strong> directory!</p>',

	// Update
	'INSTALLER_UPDATE'					=> 'Azhorno',
	'INSTALLER_UPDATE_WELCOME'			=> 'Mire se vini tek <strong>ABBC3</strong> Update menu',
	'INSTALLER_UPDATE_WELCOME_NOTE'		=> 'When you choose to Update ABBC3, any database of previous versions will be dropped.',
	'INSTALLER_UPDATE_SUCCESSFUL'		=> 'Update of ABBC3 was successful.',
	'INSTALLER_UPDATE_UNSUCCESSFUL'		=> 'Update of ABBC3 was <strong>not</strong> successful.',
	'INSTALLER_UPDATE_VERSION'			=> 'Update to version : %1$s',
	'INSTALLER_UPDATE_END'				=> 'Please be advised that some BBCodes might <strong>not</strong> display correctly due to the changes introduced in BBCodes, if you experience problems please run <strong>Extras » Re-parse</strong> Steps',

	// Uninstall
	'INSTALLER_DELETE'					=> 'Elemino',
	'INSTALLER_DELETE_WELCOME'			=> 'Mire se vini tek <strong>ABBC3</strong> Elemino menu',
	'INSTALLER_DELETE_WELCOME_NOTE'		=> 'When you choose to Elemino the MOD, we remove all sql-data insert by the installation.',
	'INSTALLER_DELETE_VERSION'			=> 'Elemino version : %1$s',
	'INSTALLER_DELETE_NOTE'				=> 'Elemino',
	'INSTALLER_DELETE_SUCCESSFUL'		=> 'Deleted the <strong>%1$s version : %2$s</strong> was successfully.<br />Now Elemino all files.',
	'INSTALLER_DELETE_UNSUCCESSFUL'		=> 'Could <strong>not</strong> Elemino %1$s version :%2$s .',

	// Re-parse
	'INSTALLER_REPARSE'					=> 'Re-parse',
	'INSTALLER_REPARSE_WELCOME'			=> 'Mire se vini tek Re-parse menu',
	'INSTALLER_REPARSE_WELCOME_NOTE'	=> 'When you choose to <strong>Re-parse</strong> simply reparses BBCodes upon a click -- it is useful if you change the syntax of a BBCode, Only adjust some values, do not rewrite text...',
	'INSTALLER_REPARSE_NOTE'			=> 'Please Shenim that while the chance of any database damage is unlikely, you are running it at your own risk and I am not responsible if something goes wrong.',
	'INSTALLER_REPARSE_WARNING'			=> 'You should make a backup from your users, posts and privmsgs table in case something goes wrong.',
	'INSTALLER_REPARSE_POST'			=> 'Re-parse post content',
	'INSTALLER_REPARSE_SIG'				=> 'Re-parse signatures',
	'INSTALLER_REPARSE_PM'				=> 'Re-parse Private messages',
	'INSTALLER_REPARSE_SUCCESSFUL'		=> '%1$s was successfully.',
	'INSTALLER_REPARSE_UNSUCCESSFUL'	=> 'Could <strong>not</strong> %1$s.',
	
	'STEP_PERCENT_COMPLETED'			=> 'Hapi <strong>%d</strong> of <strong>%d</strong>',
	'INSTALLER_NOTE'					=> '<strong>Shenim :</strong> Before adding this MOD to your forum, you should back up the database and all files related to this MOD!',
	'INSTALLER_DELETE_INFORMATION'		=> 'Could <strong>not</strong> find ABBC3 installed !.',
	'INSTALLER_NEEDS_FOUNDER'			=> 'Ju duhet te jeni si nje themelues.',
	'MISSING_PARENT_MODULE'				=> 'Moduli #%1$s mungon si parent i modulit "%2$s".',
	'WARNING'							=> 'Kujdes',
));

?>