<?php
/**
* @package: phpBB3 :: Advanced BBCode box 3 -> language [en][English]
* @version: $Id: acp_abbcode.php, v 1.0.9 2008/05/01 05:01:00 leviatan21 Exp $
* @copyright: leviatan21 < info@mssti.com > (Gabriel) http://www.mssti.com/phpbb3/
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
						
$lang = array_merge($lang, array(
	'ACP_ABBCODES'						=> 'Advanced BBcodes Box 3',
	'ACP_ABBCODES_EXPLAIN'				=> 'Here you can manage the available styles for <strong>[ <a href="http://www.mssti.com/phpbb3" target="_blank">ABBC3</a> ]</strong> on your board.<br/>You may alter existing styles, refresh, deactivate, reactivate. You can also see what a style will look like using the preview function. <br/><em>The current default style is noted by the presence of an asterisk (*). Also listed is the total user count for each style.</em>',
	
	'ABBCODES_DISABLE'					=> 'ABBC3',
	'ABBCODES_DISABLE_EXPLAIN'			=> 'Enable or disable <strong>Advanced BBodes Box 3</strong> to users, and/or use standard phpbb3 posting buttons.',
	'ABBCODES_BG'						=> 'Background image',
	'ABBCODES_BG_EXPLAIN'				=> 'This will set the back ground image for icons.<br/>Set to <em>no image</em> for fit to your style.',
	'ABBCODES_TAB'						=> 'Display icon division for tags',
	'ABBCODES_BOXRESIZE'				=> 'Resize posting textarea',
	'ABBCODES_BOXRESIZE_EXPLAIN'		=> 'Display buttons to resize posting textarea.',
	
	'ABBCODES_GREYBOX'					=> 'Use GreyBox &reg;',
	'ABBCODES_GREYBOX_EXPLAIN'			=> 'GreyBox &reg; is a function used to dispplay <em>thumbnail</em> and <em>resized images</em> in full size. If NO, a new browser window will open.',
	'ABBCODES_RESIZE'					=> 'Resize larger images',
	'ABBCODES_RESIZE_EXPLAIN'			=> 'This fix for bug of [img] bbcode when someone add a huge image has width larger than the width of post content.',
	'ABBCODES_MAX_IMAGE_SIZE'			=> 'Maximum image width in pixel',
	'ABBCODES_RESIZE_METHOD'			=> 'Resize method',
	'ABBCODES_RESIZE_METHOD_EXPLAIN'	=> 'Choose how to display resized images to full size.',
	//	for translate :							   don't 		Yes			don't		Yes			don't			yes				don't		yes
	'ABBCODES_RESIZE_METHODS'			=> array( 'greybox' => 'grey box', 'enlarge' => 'enlarge', 'samewindow' => 'same window', 'newwindow' => 'new window'),
	
	'ABBCODES_MAX_IMAGE_SIZE_EXPLAIN'	=> 'Image will be resized if exceed the width set here.',
	'ABBCODES_MAX_THUMB_WIDTH'			=> 'Maximum thumbnail width in pixel',
	'ABBCODES_MAX_THUMB_WIDTH_EXPLAIN'	=> 'A generated thumbnail will not exceed the width set here.',
	
	'ABBCODES_CUSTOM_BBCODES'			=> 'Custom bbcodes',
	'ABBCODES_CUSTOM_BBCODES_EXPLAIN'	=> 'Display custom bbcodes icons. This function enable the compatibility with other videos bbcodes like [youtube] and add your own bbcodes (if you have).',
	'ABBCODES_VIDEO_SIZE'				=> 'Video dimensions',
	'ABBCODES_VIDEO_SIZE_EXPLAIN'		=> 'Default width and height for posted video.',

));

$lang = array_merge($lang, array(
	'ABBCODES_SETINGS'					=> 'ABBC3 settings',
	'ABBCODES_SETINGS_EXPLAIN'			=> 'Here you can determine the basic operation of <strong>ABBC3</strong>, enable or disable, and among other settings adjust the default values for the background.',
	
	'ABBCODES_CONFIG'					=> 'ABBC3 Component config',
	'ABBCODES_CONFIG_EXPLAIN'			=> 'From this page you can alter the order of tags on posting page or edit the icons,',
	
	'ABBCODES_NAME'						=> 'Tag name',
	'ABBCODES_TAG'						=> 'Tag image icon',
	'ABBCODES_ORDER'					=> 'Tag order',
	'RESET_TO_DEFAULT'					=> 'Reset to default',
	'ABBCODES_BREAK_MOVER'				=> '<strong><i>Line break</i></strong>',
	'ABBCODES_DIVISION_MOVER'			=> '<strong><i>Division</i></strong>',
	
	'ABBCODES_MOD_DISABLE'				=> '<strong>Advanced BBcodes Box 3</strong> is disabled.<br/>',
	'ABBCODES_STATUS'					=> 'status',
	'ABBCODES_ACTIVATED'				=> 'activated',
	'ABBCODES_DEACTIVATED'				=> 'deactivated',
	
));
?>