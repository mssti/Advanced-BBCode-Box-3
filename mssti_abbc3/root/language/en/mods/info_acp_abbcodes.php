<?php
/**
* @package: phpBB :: Advanced BBCode Box 3 -> root/language/en/mods :: [en][English]
* @version: $Id: acp_abbcode.php, v 3.0.10 10/27/11 10:17 PM VSE Exp $
* @copyright: leviatan21 < info@mssti.com > (Gabriel) http://www.mssti.com/phpbb3/
* @license: http://opensource.org/licenses/gpl-license.php GNU Public License 
* @author: leviatan21 - http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=345763
* @translator: VSE - http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=868795
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

// This lines are the same as root/language/en/acp/common.php
$lang = array_merge($lang, array(
	'ACP_ABBCODES'				=> 'Advanced BBCode Box 3',
	'ACP_ABBC3_SETTINGS'		=> 'ABBC3 Settings',
	'ACP_ABBC3_BBCODES'			=> 'ABBC3 BBCodes',
	'LOG_CONFIG_ABBCODES'		=> '<strong>Altered ABBC3 settings</strong>',
	'LOG_CONFIG_ABBCODES_ERROR'	=> '<strong>Error while saving ABBC3 settings</strong>',
));

// This lines are for the UCP
$lang = array_merge($lang, array(
	'UCP_ABBCODES'					=> 'Advanced BBCode Box 3',
	'UCP_ABBC3_SETTINGS'			=> 'Message editor BBCode interface',
	'UCP_ABBC3_SETTINGS_EXPLAIN'	=> 'Note that in <i>Limited</i> mode, not all BBCodes will be available and must be typed in manually.',
	'UCP_ABBC3_LIMITED'				=> 'Limited - Basic BBCodes only with no icons',
	'UCP_ABBC3_COMPACT'				=> 'Compact - All BBCodes in a compact drop menu',
	'UCP_ABBC3_STANDARD'			=> 'Standard - Full BBCodes toolbar',
));

// abbc3_details
$lang = array_merge($lang, array(
	'ABBCODES_DISABLE'					=> 'ABBC3',
	'ABBCODES_DISABLE_EXPLAIN'			=> 'Enable <strong>Advanced BBCode Box 3</strong> or disable to continue using the standard phpBB3 BBCode buttons.',
//	'ABBCODES_PATH'						=> 'Script path',
//	'ABBCODES_PATH_EXPLAIN'				=> 'Path to ABBC3 files in your phpBB root directory, e.g. <samp>styles/abbcode</samp>',
	'ABBCODES_BG'						=> 'Background image',
	'ABBCODES_BG_EXPLAIN'				=> 'This will set the background image for icons.<br />Set to <em>no image</em> to use your style’s default colour.',
	'ABBCODES_TAB'						=> 'Display icon divisions between tags',
	'ABBCODES_BOXRESIZE'				=> 'Resize post editors',
	'ABBCODES_BOXRESIZE_EXPLAIN'		=> 'Display +/- buttons to resize the post editor textarea.',

	'ABBCODES_RESIZER'					=> 'Image Resizer',
	'ABBCODES_RESIZE'					=> 'Resize large images',
	'ABBCODES_RESIZE_EXPLAIN'			=> 'This will resize images posted using the [img] BBCode or uploaded as attachments that exceed the defined maximum width and/or height settings below.',
	'ABBCODES_JAVASCRIPT_EXPLAIN'		=> '<strong>Note : </strong> <em>AdvancedBox JS</em> is a JavaScript application used to display images in full size.<br />You can also use <strong>ABBC3</strong> with any of the other included scripts. These modifications are totally optional. Each script has its own support. ABBC3 is not responsible for any issues from using a 3rd party script. All questions/problems/bugs should be directed to the developer of the script you are using.',
	'ABBCODES_RESIZE_METHOD'			=> 'Resize method',
	'ABBCODES_RESIZE_METHOD_EXPLAIN'	=> 'Choose how to display resized images in full size, in all possible situations.',
	'ABBCODES_RESIZE_BAR'				=> 'Resizer Info Bar',
	'ABBCODES_RESIZE_BAR_EXPLAIN'		=> 'Display an Info Bar along the top of resized images.',
##	For translate :                                	 Don't				Yes
	'ABBCODES_RESIZE_METHODS'			=> array(	'AdvancedBox'	=> 'Advanced Box JS',
													'HighslideBox'	=> 'Highslide JS',
													'LiteBox'		=> 'Lightbox2 JS',
													'GreyBox'		=> 'GreyBox JS',
													'Lightview'		=> 'Lightview JS',
													'Shadowbox'		=> 'Shadowbox JS',
													'PopBox'		=> 'PopBox JS',
													'pop-up'		=> 'Pop Up window',
													'enlarge'		=> 'Enlarge',
													'samewindow'	=> 'Same window',
													'newwindow'		=> 'New window',
													'none'			=> 'No resize'),

	'NO_EXIST_EXPLAIN_ADVANCEDBOX'		=> 'The file <strong>AdvancedBox.js</strong> is not in the <em>%1$s</em> folder',
	'NO_EXIST_EXPLAIN_OTHERS'			=> 'The file <strong>%1$s version %2$s</strong> is not present in the <em>%3$s</em> folder.<br />If you wish to use %4$s, you must first download the %4$s file(s) from <a href="%5$s" onclick="window.open(this.href);return false;">here</a> and upload the downloaded file(s) into the <em>%3$s</em> directory.',

	'ABBCODES_MAX_IMAGE_WIDTH'			=> 'Maximum image width in pixels',
	'ABBCODES_MAX_IMAGE_WIDTH_EXPLAIN'	=> 'Image will be resized if it exceeds the width set here.',
	'ABBCODES_MAX_IMAGE_HEIGHT'			=> 'Maximum image height in pixels',
	'ABBCODES_MAX_IMAGE_HEIGHT_EXPLAIN'	=> 'Image will be resized if it exceeds the height set here.',
	'ABBCODES_MAX_THUMB_WIDTH'			=> 'Maximum thumbnail width in pixels',
	'ABBCODES_MAX_THUMB_WIDTH_EXPLAIN'	=> 'A generated thumbnail will not exceed the width set here.',
	'ABBCODES_RESIZE_SIGNATURE'			=> 'Resize large images in signatures',
	'ABBCODES_RESIZE_SIGNATURE_EXPLAIN'	=> 'Also resize large images in user signatures?',
	'ABBCODES_SIG_IMAGE_WIDTH'			=> 'Maximum signature image width in pixels',
	'ABBCODES_SIG_IMAGE_WIDTH_EXPLAIN'	=> 'Images in signatures will be resized if they exceed the width set here.',
	'ABBCODES_SIG_IMAGE_HEIGHT'			=> 'Maximum signature image height in pixels',
	'ABBCODES_SIG_IMAGE_HEIGHT_EXPLAIN'	=> 'Images in signatures will be resized if they exceed the height set here.',

	'ABBCODES_VIDEO_SIZE'				=> 'Video dimensions',
	'ABBCODES_VIDEO_SIZE_EXPLAIN'		=> 'Default width and height for posted video.',
	'ABBCODES_VIDEO_ALLOWED'			=> 'Video types allowed',
	'ABBCODES_VIDEO_ALLOWED_EXPLAIN'	=> 'Select the video sites and/or formats you would like to allow users to embed in their posts when the BBvideo BBCode is enabled <em class="error">(*)</em>',
	'ABBCODES_VIDEO_ALLOWED_NOTE'		=> '<em class="error">(*)</em> In order to select (or deselect) multiple items, you must CTRL+CLICK (or CMD+CLICK on Mac) items to add them. If you forget to hold down CTRL/CMD when clicking an item, then all the previously selected items will be deselected.',
	'ABBCODES_VIDEO_WMODE'				=> 'Transparent window mode',
	'ABBCODES_VIDEO_WMODE_EXPLAIN'		=> 'Sets the Flash variable “wmode” to transparent. This is only needed if your forum has a layered static object (such as a footer toolbar) and the embedded videos are being rendered on top of the static object.',

	'ABBCODES_COLOUR_MODE'				=> 'Choose the colour picker mode',
##	For translate :                                	 Don't			Yes
	'ABBCODES_COLOUR_SELECTOR'			=> array(	'phpbb'		=> 'phpBB style Default',
													'dropdown'	=> 'Drop Down Menu',
													'fancy'		=> '“fancy” selector',
													'tigra'		=> 'Tigra color picker'),
	'ABBCODES_WIZARD_MODE'				=> 'Choose the wizards mode',
##	For translate :                                	Don't			Yes
	'ABBCODES_WIZARD_SELECTOR'			=> array(	'0'			=> 'Disable wizards',
													'1'			=> 'Pop Up window',
													'2'			=> 'In post'),
	'ABBCODES_UCP_MODE'					=> 'UCP Control options',
	'ABBCODES_UCP_MODE_EXPLAIN'			=> 'Allow users to select their own BBCode button interface, by choosing between the ABBC3 “Standard”, ABBC3 “Compact” or default phpBB3 “Limited” style BBCode buttons.',

	'ABBCODES_WIZARD'					=> 'Wizard',
	'ABBCODES_WIZARD_SIZE'				=> 'Wizard dimensions',
	'ABBCODES_WIZARD_SIZE_EXPLAIN'		=> 'Default width and height for pop-up wizard window.',

	'ABBCODES_DESELECT_ALL'				=> 'Deselect all',
	'ABBCODES_SELECT_ALL'				=> 'Select all',

	'ABBCODES_VERSION_CHECK'			=> 'Version Check',
	'ABBCODES_CURRENT_VERSION'			=> 'Current Installed Version',
	'ABBCODES_LATEST_VERSION'			=> 'Latest Released Version',
	'ABBCODES_DOWNLOAD_LATEST'			=> 'Download Latest Version',
));

// bbcodes_edit
$lang = array_merge($lang, array(
	'ABBCODES_SETINGS'					=> 'ABBC3 Settings',
	'ABBCODES_SETINGS_EXPLAIN'			=> 'Here you can configure <strong>ABBC3</strong>. You can set the appearance and options of the BBCodes bar. The “Wizard” settings configure ABBC3’s helper dialogs. The “Image Resizer” section configures how posted/attached images should be handled and/or resized. The “BBvideo” section configures the settings for the BBvideo BBCode.',

	'ABBCODES_EDIT'						=> 'ABBC3 BBCode options',
	'ABBCODES_EDIT_EXPLAIN'				=> 'Here you can determine where this BBCode will be displayed, who can use it, and assign and icon to it.',

	'ABBCODES_CONFIG'					=> 'ABBC3 BBCodes',
	'ABBCODES_CONFIG_EXPLAIN'			=> 'Here you can configure the order of the BBCodes on the posting page and edit the options for each of the BBCodes.',
	'ABBCODES_GROUPS_EXPLAIN'			=> '<strong>Manage groups : </strong>If there are no selected groups then all users can use this BBCode.<br />In order to select (or deselect) multiple groups, you must CTRL+CLICK (or CMD+CLICK on Mac) items to add them. If you forget to hold down CTRL/CMD when clicking an item, then all the previously selected items will be deselected.',

	'ABBCODES_TIP'						=> 'Tag tip',
	'ABBCODES_NAME'						=> 'BBCode tag',
	'ABBCODES_TAG'						=> 'Tag image icon',
	'ABBCODES_ORDER'					=> 'Tag order',
	'ABBCODES_CUSTOM'					=> 'Custom BBCode',

	'ABBCODES_BREAK_MOVER'				=> '<strong><i>Line break</i></strong>',
	'ABBCODES_DIVISION_MOVER'			=> '<strong><i>Division</i></strong>',
	'ABBCODES_ADD_DIVISION'				=> 'Add new Division',
	'ABBCODES_ADD_BREAK'				=> 'Add new Line break',
	'ABBCODES_SYNC'						=> 'Synchronise order',
	'ABBCODES_RESYNC_SUCCESS'			=> 'The BBCode order has been resynchronised.',

	'ABBCODES_MOD_DISABLE'				=> '<strong>Advanced BBCode Box 3</strong> is disabled.<br />',
	'ABBCODES_STATUS'					=> 'status',
	'ABBCODES_ACTIVATED'				=> 'activated',
	'ABBCODES_DEACTIVATED'				=> 'deactivated',
));

// UMIL Installer 
$lang = array_merge($lang, array(
// Main
	'INSTALLER_TITLE'					=> 'Advanced BBCode Box 3',
	'INSTALLER_TITLE_EXPLAIN'			=> 'Welcome to the <strong>ABBC3</strong> Installation menu',

	'INSTALLER_INSTALL_WELCOME'			=> 'Before installing ABBC3',
	'INSTALLER_INSTALL_WELCOME_NOTE'	=> 'Please be advised that this process might overwrite existing custom BBCodes and as a result, those BBCodes might not display correctly due to the changes introduced by ABBC3’s BBCodes.
	<br /><br />If you experience problems with BBCodes no longer working in exisiting posts, use the <a href="http://www.phpbb.com/support/stk/" title="" onclick="window.open(this.href);return false;">Support Toolkit <em>(STK)</em></a> <strong>Admin tools » Reparse BBCode</strong> feature.
	<br /><br />Before adding this MOD to your board, you should backup all related files and the database before proceeding.',
//	'INSTALLER_INSTALL_END'				=> 'You should now <a href="./index.php">login to your board</a> and check if everything is working fine. <br />Do not forget to delete, rename or move this file! <strong><em>install_abbc3.php</em></strong>',
// Stages
	'INSTALLER_CONFIGS_ADD'				=> 'ABBC3 config',
	'INSTALLER_BBCODES_ADD'				=> 'ABBC3 bbcodes',
// Misc
	'INSTALLER_RESIZE_CHECK'			=> 'Resizer Method update check complete',
	'INSTALLER_BBVIDEO_UPDATER'			=> 'BBvideos have been updated',
));

?>