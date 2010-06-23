<?php
/**
* @package: phpBB3 :: Advanced BBCode box 3 -> language [en][English]
* @version: $Id: abbcode.php, v 1.0.8 2008/03/31 03:01:00 leviatan21 Exp $
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
// Help page
	'ABBC3_HELP_TITLE'			=> 'Advanced BBCode box 3 :: Help Page',
	'ABBC3_HELP_DESC'			=> 'Description',
	'ABBC3_HELP_WRITE'			=> 'Your write format',
	'ABBC3_HELP_VIEW'			=> 'Our show format',
	'ABBC3_HELP_ABOUT'			=> 'Advanced BBCode Box 3 by <a href="http://www.mssti.com/phpbb3">mssti</a>',
	'ABBC3_HELP_ALT'			=> 'Advanced BBCode Box 3 (aka ABBC3)',
	
// Image Resizer JS - Start
	'ABBC3_RESIZE_SMALL'		=> 'Click this bar to view the full image.',
	'ABBC3_RESIZE_FILESIZE'		=> 'This image has been resized. Click this bar to view the full image. The original image is sized %1$sx%2$s and weights %3$sKB.',
	'ABBC3_RESIZE_NOFILESIZE'	=> 'This image has been resized. Click this bar to view the full image. The original image is sized %1$sx%2$s.',
	'ABBC3_RESIZE_FULLSIZE'		=> 'Click this bar to view the small image.',
	
// Text to be applied to the helpline & mouseover & help page & Wizard texts
	'BBCODE_STYLES_TIP'			=> 'Tip: Styles can be applied quickly to selected text.',
	
	'ABBC3_ERROR'				=> 'Error : ',
	'ABBC3_ERROR_TAG'			=> 'Unexpected Error using tag : ',
	
	'ABBC3_ID'					=> 'Enter identifier :',
	'ABBC3_NOID'				=> 'You did not write the identifier',
	'ABBC3_LINK'				=> 'Enter a link for ',
	'ABBC3_DESC'				=> 'Enter a description for ',
	'ABBC3_NAME'				=> 'Description',
	'ABBC3_NOLINK'				=> 'You did not write a link for ',
	'ABBC3_NODESC'				=> 'You did not write a description for ',
	'ABBC3_WIDTH'				=> 'Enter the width',
	'ABBC3_WIDTH_NOTE'			=> 'Note: The value can be expressed as a percentage',
	'ABBC3_NOWIDTH'				=> 'You did not write the width',
	'ABBC3_HEIGHT'				=> 'Enter the height',
	'ABBC3_HEIGHT_NOTE'			=> 'Note: The value can be expressed as a percentage',
	'ABBC3_NOHEIGHT'			=> 'You did not write the height',
	
	'ABBC3_NOTE'				=> 'Note',
	'ABBC3_EXAMPLE'				=> 'Example',
	'ABBC3_EXAMPLES'			=> 'Examples',
	
// bbcodes texts	
	// Font Type Dropdown
	'ABBC3_FONTTYPE_MOVER'		=> 'Font type',
	'ABBC3_FONTTYPE_TIP'		=> '[font=Comic Sans MS]text[/font]',
	'ABBC3_FONTTYPE_NOTE'		=> 'Note: You can use your own font-family',
	'ABBC3_FONTTYPE_VIEW'		=> '<span style="font-family:Comic Sans MS">This is a sample text</span>',
	
	// Font Size Dropdown
	'ABBC3_FONT_GIANT'			=> 'Giant',
	'ABBC3_FONTSIZE_MOVER'		=> 'Font size',
	'ABBC3_FONTSIZE_TIP'		=> '[size=150]text large[/size]',
	'ABBC3_FONTSIZE_NOTE'		=> 'Note: The value will be interpreted as a percentage',
	'ABBC3_FONTSIZE_VIEW'		=> '<span style="font-size: 150%; line-height: 116%;">This is a sample text</span>',
	
	// Highlight Font Color Dropdown
	'ABBC3_FONTHILI_MOVER'		=> 'Text highlighted',
	'ABBC3_FONTHILI_TIP'		=> '[highlight=yellow]text[/highlight]',
	'ABBC3_FONTHILI_NOTE'		=> 'Note: You can use html colors (color=#FF0000 or color=red)',
	'ABBC3_FONTHILI_VIEW'		=> '<span style="background-color: yellow;">This is a sample text</span>',
	
	// Font Color Dropdown
	'ABBC3_FONTCOLOR_MOVER'		=> 'Font colour',
	'ABBC3_FONTCOLOR_TIP'		=> '[color=red]text[/color]',
	'ABBC3_FONTCOLOR_NOTE'		=> 'Note: You can use html colors (color=#FF0000 or color=red)',
	'ABBC3_FONTCOLOR_VIEW'		=> '<span style="color:red">This is a sample text</span>',
	
	// Cut selected text
	'ABBC3_CUT_MOVER'			=> 'Removes selected text',
	// Copy selected text
	'ABBC3_COPY_MOVER'			=> 'Copy selected text',
	// Paste previously copy text
	'ABBC3_PASTE_MOVER'			=> 'Paste copied text',
	'ABBC3_PASTE_ERROR'			=> 'Please, first copy a text, them paste it ',
	// Remove BBCode (Removes all BBCode tags from selected text)
	'ABBC3_PLAIN_MOVER'			=> 'Remove labels BBCodes the selected text',
	'ABBC3_NOSELECT_ERROR'		=> 'Please, first select the text ',
	
	// Code
	'ABBC3_CODE_MOVER'			=> 'Code',
	'ABBC3_CODE_TIP'			=> '[code]codigo[/code]',
	'ABBC3_CODE_VIEW'			=> '<dl class="codebox"><dt>'. $lang['CODE'] .': <a href="#" onclick="selectCode(this); return false;">'. $lang['SELECT_ALL_CODE'] .'</a></dt><dd><code>This is a sample text</code></dd></dl>',
	
	// Quote
	'ABBC3_QUOTE_MOVER'			=> 'Quote',
	'ABBC3_QUOTE_TIP'			=> '[quote]text[/quote] or [quote=\"member\"]text[/quote]',
	'ABBC3_QUOTE_VIEW'			=> '<blockquote><div><cite>member '. $lang['WROTE'] .':</cite>This is a sample text</div></blockquote>',
	
	// Spoiler
	'ABBC3_SPOIL_MOVER'			=> 'Spoiler text',
	'ABBC3_SPOIL_TIP'			=> '[spoil]text[/spoil]',
	'ABBC3_SPOIL_VIEW'			=> '<div class="spoilwrapper"><div class="spoiltitle"><input class="btnspoil" type="button" value="Show Spoiler" onclick="javascript:if (this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display != \'\') { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'\'; this.innerText = \'\'; this.value = \'Hide Spoiler\'; } else { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'none\'; this.innerText = \'\'; this.value = \'Show Spoiler\'; }" onfocus="this.blur();" /></div><div class="spoilcontent"><div style="display: none;">This is a sample text</div></div></div>',
	'SPOILER_SHOW'				=> 'Show Spoiler',
	'SPOILER_HIDE'				=> 'Hide Spoiler',
	
	// Hide tag
	'ABBC3_HIDE_MOVER'			=> 'Hide message',
	'ABBC3_HIDE_TIP'			=> '[hide]message[/hide]',
	'ABBC3_HIDE_VIEW'			=> '<dl class="hidebox"><dt class="hide">HIDE: ON</dt><dd>You need to reply to this topic before you can view the hidden message</dd></dl>',
	
	// Moderator tag
	'ABBC3_MODERATOR_MOVER'		=> 'Moderator message',
	'ABBC3_MODERATOR_TIP'		=> '[mod=name]text[/mod]',
	'ABBC3_MODERATOR_VIEW'		=> '<table id="ModTable" width="100%" cellspacing="5" cellpadding="0" border="0" align="center"><tr><td class="row1" rowspan="2" align="middle" vAlign="center" width="1%"><span class="exclamation" title="Moderator warning" style="font-size:25px">&nbsp;!&nbsp;</span></td><td class="row2"><span class="genmed"><b>Mod Name:</b></span></td></tr><tr><td>This is a sample text</td></tr></table>',
	
	// Off topic tag
	'ABBC3_OFFTOPIC'			=> 'Offtopic',
	'ABBC3_OFFTOPIC_MOVER'		=> 'Insert Off topic text',
	'ABBC3_OFFTOPIC_TIP'		=> '[offtopic]text[/offtopic]',
	'ABBC3_OFFTOPIC_VIEW'		=> '<i><b><font color="#114499">Offtopic: </font></b><br/><font color="#2277DD">This is a sample text</font></i>',
	
	// NFO
	'ABBC3_NFO_MOVER'			=> 'NFO text (Better on Internet explorer)',
	'ABBC3_NFO_TIP'				=> '[nfo]NFO text[/nfo]',
	'ABBC3_NFO_VIEW'			=> '<table cellspacing="0" cellpadding="0" border="0" ><tr><td><span class="genmed"><b>NFO:</b></span></td></tr><tr><td class="nfo">' . str_replace(" ", "&nbsp;", '    ≤ €€€€ €€±±∞                                  ∞∞∞±±±±≤≤≤€€€€€€€€€€€  €   €€ €€€') . '</td></tr></table>',
	
	// Justify Align
	'ABBC3_JUSTIFY_MOVER'		=> 'Text justified',
	'ABBC3_JUSTIFY_TIP'			=> '[align=justify]text[/align]',
	'ABBC3_JUSTIFY_VIEW'		=> '<div style="text-align:justify">This is <br/>a sample text</div>',
	
	// Right Align
	'ABBC3_RIGHT_MOVER'			=> 'Text right aligned',
	'ABBC3_RIGHT_TIP'			=> '[align=right]text[/align]',
	'ABBC3_RIGHT_VIEW'			=> '<div style="text-align:right">This is a sample text</div>',
	
	// Center Align
	'ABBC3_CENTER_MOVER'		=> 'Text aligned to the center',
	'ABBC3_CENTER_TIP'			=> '[align=center]text[/align]',
	'ABBC3_CENTER_VIEW'			=> '<div style="text-align:center">This is a sample text</div>',
	
	// Left Align
	'ABBC3_LEFT_MOVER'			=> 'Text left aligned',
	'ABBC3_LEFT_TIP'			=> '[align=left]text[/align]',
	'ABBC3_LEFT_VIEW'			=> '<div style="text-left:justify">This is a sample text</div>',
	
	// Preformat
	'ABBC3_PRE_MOVER'			=> 'Text preformatted',
	'ABBC3_PRE_TIP'				=> '[pre]text[/pre]',
	'ABBC3_PRE_VIEW'			=> '<pre>This is a sample text</pre>',

	// Tab
	'ABBC3_TAB_MOVER'			=> 'Creates a normal indent',
	'ABBC3_TAB_TIP'				=> '[tab=nn]',
	'ABBC3_TAB_NOTE'			=> 'Enter a number that will be a margin measured in pixels.',
	'ABBC3_TAB_VIEW'			=> '<span style="margin-left:20px;"></span>This is a sample text',
	
	// Superscript
	'ABBC3_SUP_MOVER'			=> 'Sets the text as superscripts',
	'ABBC3_SUP_TIP'				=> '[sup]text[/sup]',
	'ABBC3_SUP_VIEW'			=> '<sup>This is a sample text</sup>',
	
	// Subscript
	'ABBC3_SUB_MOVER'			=> 'Sets the text as subscripts',
	'ABBC3_SUB_TIP'				=> '[sub]text[/sub]',
	'ABBC3_SUB_VIEW'			=> '<sub>This is a sample text</sub>',
	
	// Bold
	'ABBC3_BOLD_MOVER'			=> 'Text in bold',
	'ABBC3_BOLD_TIP'			=> '[b]text[/b]',
	'ABBC3_BOLD_VIEW'			=> '<strong>This is a sample text</strong>',
	
	// Italic
	'ABBC3_ITALIC_MOVER'		=> 'Text in italics',
	'ABBC3_ITALIC_TIP'			=> '[i]text[/i]',
	'ABBC3_ITALIC_VIEW'			=> '<em>This is a sample text</em>',
	
	// Underline
	'ABBC3_UNDERLINE_MOVER'		=> 'Text underlined',
	'ABBC3_UNDERLINE_TIP'		=> '[u]text[/u]',
	'ABBC3_UNDERLINE_VIEW'		=> '<span style="text-decoration: underline">This is a sample text</span>',
	
	// Strikethrough
	'ABBC3_STRIKE_MOVER'		=> 'Text strikethrough',
	'ABBC3_STRIKE_TIP'			=> '[s]text[/s]',
	'ABBC3_STRIKE_VIEW'			=> '<span style="text-decoration: line-through;">This is a sample text</span>',
	
	// Text Fade
	'ABBC3_FADE_MOVER'			=> 'Text fadein fadeout',
	'ABBC3_FADE_TIP'			=> '[fade]text[/fade]',
	'ABBC3_FADE_VIEW'			=> '<span class="fade_link">This is a sample text</span> <script type="text/javascript">fade_ontimer()</script>',
	
	// Text Gradient
	'ABBC3_GRAD_MOVER'			=> 'Text gradient',
	'ABBC3_GRAD_TIP'			=> '',
	'ABBC3_GRAD_VIEW'			=> '<span style="color: #FF0000">T</span><span style="color: #F2000D">h</span><span style="color: #E6001A">i</span><span style="color: #D90026">s</span> <span style="color: #BF0040">i</span><span style="color: #B3004D">s</span> <span style="color: #990066">a</span> <span style="color: #800080">s</span><span style="color: #73008C">i</span><span style="color: #660099">m</span><span style="color: #5900A6">p</span><span style="color: #4D00B3">l</span><span style="color: #4000BF">e</span> <span style="color: #2600D9">t</span><span style="color: #1A00E6">e</span><span style="color: #0D00F2">x</span><span style="color: #0000FF">t</span>',
	'ABBC3_GRAD_MIN_ERROR'		=> 'Please, first select the text : ',
	'ABBC3_GRAD_MAX_ERROR'		=> 'Only allows less than 120 characters : ',
	
	// Glow text
	'ABBC3_GLOW_MOVER'			=> 'Glow text (Only Internet explorer)',
	'ABBC3_GLOW_TIP'			=> '[glow=(color)]text[/glow]',
	'ABBC3_GLOW_VIEW'			=> '<div style="filter:Glow(color=red,strength=4);color:#ffffff;height:110%">This is a sample text</div>',
	
	// Shadow text
	'ABBC3_SHADOW_MOVER'		=> 'Shadow text (Only Internet explorer)',
	'ABBC3_SHADOW_TIP'			=> '[shadow=(color)]text[/shadow]',
	'ABBC3_SHADOW_VIEW'			=> '<div style="filter:shadow(color=black,strength=4);color:blue;height:110%">This is a sample text</div>',
	
	// Dropshadow text
	'ABBC3_DROPSHADOW_MOVER'	=> 'Dropshadow text (Only Internet explorer)',
	'ABBC3_DROPSHADOW_TIP'		=> '[dropshadow=(color)]text[/dropshadow]',
	'ABBC3_DROPSHADOW_VIEW'		=> '<div style="filter:dropshadow(color=#999999,strength=4);color:blue;height:110%">This is a sample text</div>',
	
	// Blur text
	'ABBC3_BLUR_MOVER'			=> 'Blur text (Only Internet explorer)',
	'ABBC3_BLUR_TIP'			=> '[blur=(color)]text[/blur]',
	'ABBC3_BLUR_VIEW'			=> '<div style="filter:Blur(strength=7);color:blue;height:110%">This is a sample text</div>',
	
	// Wave text
	'ABBC3_WAVE_MOVER'			=> 'Wave text (Only Internet explorer)',
	'ABBC3_WAVE_TIP'			=> '[wave=(color)]text[/wave]',
	'ABBC3_WAVE_VIEW'			=> '<div style="filter:Wave(strength=2);color:blue;height:110%">This is a sample text</div>',
	
	// Unordered List
	'ABBC3_LISTB_MOVER'			=> 'Bullet list',
	'ABBC3_LISTB_TIP'			=> '[list]text[/list]',
	'ABBC3_LISTB_NOTE'			=> 'Note: Use [*] to create bullets',
	'ABBC3_LISTB_VIEW'			=> '<ul><li>Item1</li><li>Item2</li><li>Item3</li></ul>',
	
	// Ordered List
	'ABBC3_LISTO_MOVER'			=> 'Ordered list',
	'ABBC3_LISTO_TIP'			=> '[list=1|a]text[/list]',
	'ABBC3_LISTO_NOTE'			=> 'Note: Use [*] to create bullets',
	'ABBC3_LISTO_VIEW'			=> '<ol style="list-style-type: lower-alpha"><li>Item1</li><li>Item2</li><li>Item3</li></ol>',
	
	// List item
	'ABBC3_LISTITEM_MOVER'		=> 'List item',
	'ABBC3_LISTITEM_TIP'		=> '[*]',
	'ABBC3_LISTITEM_NOTE'		=> 'Note: Create bullets inside list',
	
	// Line Break
	'ABBC3_HR_MOVER'			=> 'Header',
	'ABBC3_HR_TIP'				=> '[hr]',
	'ABBC3_HR_NOTE'				=> 'Note: Creates a header line row to seperate text',
	'ABBC3_HR_VIEW'				=> '<hr noshade color="#000000" size="1px">',
	
	// Message Box text direction Left to Light
	'ABBC3_RTL_MOVER'			=> 'Text with reading right-to-left',
	'ABBC3_RTL_TIP'				=> '[dir=rtl]text[/dir]',
	'ABBC3_RTL_VIEW'			=> '<BDO dir="rtl">This is a sample text</BDO>',
	
	// Message Box text direction right to Left
	'ABBC3_LTR_MOVER'			=> 'Text with reading left-to-right',
	'ABBC3_LTR_TIP'				=> '[dir=ltr]text[/dir]',
	'ABBC3_LTR_VIEW'			=> '<BDO dir="ltr">This is a sample text</BDO>',
	
	// Marquee Down
	'ABBC3_MARQD_MOVER'			=> 'Scrolling text down',
	'ABBC3_MARQD_TIP'			=> '[marq=down]text[/marq]',
	'ABBC3_MARQD_VIEW'			=> '<marquee direction="down" scrolldelay="120" height="80px">This is a sample text</marquee>',
	
	// Marquee Up
	'ABBC3_MARQU_MOVER'			=> 'Scrolling text upwards',
	'ABBC3_MARQU_TIP'			=> '[marq=up]text[/marq]',
	'ABBC3_MARQU_VIEW'			=> '<marquee direction="up" scrolldelay="120" height="80px">This is a sample text</marquee>',
	
	// Marquee Right
	'ABBC3_MARQR_MOVER'			=> 'Displacement text to the right',
	'ABBC3_MARQR_TIP'			=> '[marq=right]text[/marq]',
	'ABBC3_MARQR_VIEW'			=> '<marquee direction="right" scrolldelay="120">This is a sample text</marquee>',
	
	// Marquee Left
	'ABBC3_MARQL_MOVER'			=> 'Displacement text to the left',
	'ABBC3_MARQL_TIP'			=> '[marq=left]text[/marq]',
	'ABBC3_MARQL_VIEW'			=> '<marquee direction="left" scrolldelay="120">This is a sample text</marquee>',
	
	// Table row cell wizard
	'ABBC3_TABLE_MOVER'			=> 'Insert a table',
	'ABBC3_TABLE_TIP'			=> '[table=(ccs style)][tr=(ccs style)][td=(ccs style)]text[/td][/tr][/table]',
	'ABBC3_TABLE_VIEW'			=> '<table style="width:50%;border:1px solid #cccccc;" cellspacing="0" cellpadding="0"><tr style="text-align:center;"><td style="border:1px solid #cccccc;">This is a sample text</td></tr></table>',
	
	'ABBC3_TABLE_STYLE'			=> 'Enter style table',
	'ABBC3_TABLE_EXAMPLE'		=> 'width:50%;border:1px solid #cccccc;',
	
	'ABBC3_ROW_NUMBER'			=> 'Enter number of rows',
	'ABBC3_ROW_ERROR'			=> 'You did not write the number of rows',
	'ABBC3_ROW_STYLE'			=> 'Enter style rows',
	'ABBC3_ROW_EXAMPLE'			=> 'text-align:center;',
	
	'ABBC3_CELL_NUMBER'			=> 'Enter number of cells',
	'ABBC3_CELL_ERROR'			=> 'You did not write the number of cells',
	'ABBC3_CELL_STYLE'			=> 'Enter style cell',
	'ABBC3_CELL_EXAMPLE'		=> 'border:1px solid #cccccc;',
	
	// Simple upload files
	'ABBC3_UPLOAD_TITLE'		=> 'Advanced BBCode box 3 :: Upload File Page',
	'ABBC3_UPLOAD_MOVER'		=> 'Upload File',
	'ABBC3_UPLOAD_LINK'			=> 'This is the link to your uploaded file',
	'ABBC3_UPLOAD_UPLOADED'		=> 'Upload %s was successful!',
	'ABBC3_UPLOAD_NOT_UPLOADED'	=> 'Upload %s could not be uploaded',
	'ABBC3_UPLOAD_ALREADY'		=> 'Attach %s already exist, please choose an alternative or rename your file and try again',
	'ABBC3_UPLOAD_ERROR'		=> 'Could not upload file to %s. Return error code : %d',
	'ABBC3_UPLOAD_EXTENSION'	=> 'Available extensions',
	'ABBC3_UPLOAD_EXTENSION_EXPLAIN'	=> 'You can add/change/delete allowed datatypes. Separate extensions with a comma (,)',
	'ABBC3_UPLOAD_DISABLED'		=> 'The upload extension %s is not allowed',
	'ABBC3_UPLOAD_SIZE'			=> 'The maximum size',
	'ABBC3_UPLOAD_NOSIZE'		=> 'The upload filesize %d is too large. The maximum allowed upload size is %d KB',
	'ABBC3_UPLOAD_EMPTY'		=> 'The upload file is empty, Please select a file first',
	
	// Hyperlink Wizard
	'ABBC3_URL_TAG'				=> 'page',
	'ABBC3_URL_MOVER'			=> 'Web address',	
	'ABBC3_URL_TIP'				=> '[url]http://...[/url] or [url=http://...]Name Web[/url]',
	'ABBC3_URL_EXAMPLE'			=> 'http://www.google.com',
	'ABBC3_URL_VIEW'			=> '<a href="http://www.google.com" class="postlink">Google</a>',
	
	// Email Wizard
	'ABBC3_EMAIL_TAG'			=> 'email',
	'ABBC3_EMAIL_MOVER'			=> 'Email',
	'ABBC3_EMAIL_TIP'			=> '[email]user@server.ext[/email] or [email=user@server.ext]My email[/email]',
	'ABBC3_EMAIL_EXAMPLE'		=> 'user@server.ext',
	'ABBC3_EMAIL_VIEW'			=> '<a href="mailto:user@server.ext">user@server.ext</a>',
	
	// Ed2k link Wizard
	'ABBC3_ED2K_TAG'			=> 'ed2k',
	'ABBC3_ED2K_MOVER'			=> 'Link eD2K',
	'ABBC3_ED2K_TIP'			=> '[url]link ed2k[/url] or [url=link ed2k]Name ed2k[/url]',
	'ABBC3_ED2K_EXAMPLE'		=> 'ed2k://|file|The_Two_Towers-The_Purist_Edit-Trailer.avi|14997504|965c013e991ee246d63d45ea71954c4d|/',
	'ABBC3_ED2K_VIEW'			=> '<a href="ed2k://|file|The_Two_Towers-The_Purist_Edit-Trailer.avi|14997504|965c013e991ee246d63d45ea71954c4d|/" class="postlink">The_Two_Towers-The_Purist_Edit-Trailer.avi</a>',
	'ABBC3_ED2K_ADD'			=> 'Add selected links to your ed2k client',
	
	// Web included by iframe
	'ABBC3_WEB_TAG'				=> 'web',
	'ABBC3_WEB_MOVER'			=> 'Insert site in the post',
	'ABBC3_WEB_TIP'				=> '[web width=200 height=100]URL web[/web]',
	'ABBC3_WEB_EXAMPLE'			=> 'http://www.google.com',
	'ABBC3_WEB_VIEW'			=> '<iframe width="100%" height="100" src="http://www.google.com" style="font-size: 2px;"></iframe><br/>',
	
	// Image Wizard
	'ABBC3_IMG_TAG'				=> 'image',
	'ABBC3_IMG_MOVER'			=> 'Insert image',
	'ABBC3_IMG_TIP'				=> '[img=(left|center|right)]http://...[/img]',
	'ABBC3_IMG_EXAMPLE'			=> 'http://www.google.com/intl/en_com/images/logo_plain.png',
	'ABBC3_IMG_VIEW'			=> '<div align="center"><img src="http://www.google.com/intl/en_com/images/logo_plain.png" alt="" /></div>',
	
	// Thumbnail
	'ABBC3_THUMBNAIL_TAG'		=> 'thumbnail',
	'ABBC3_THUMBNAIL_MOVER'		=> 'Insert thumbnail',
	'ABBC3_THUMBNAIL_TIP'		=> '[thumbnail(=left|right)]http://...[/thumbnail]',
	'ABBC3_THUMBNAIL_EXAMPLE'	=> 'http://www.google.com/intl/en_com/images/logo_plain.png',
	'ABBC3_THUMBNAIL_VIEW'		=> '<a href="http://www.google.com/intl/en_com/images/logo_plain.png" rel="gb_imageset[]" alt="http://www.google.com/intl/en_com/images/logo_plain.png" title="" class="hoverbox"><img src="http://www.google.com/intl/en_com/images/logo_plain.png" alt="" border="0" width="100px" align="right"/></a>',
	
	// Imgshack
	'ABBC3_IMGSHACK_MOVER'		=> 'Insert image from imageshack',
	'ABBC3_IMGSHACK_TIP'		=> '[url=http://imageshack.us][img=http://...][/img][/url]',
	'ABBC3_IMGSHACK_VIEW'		=> '<a href="http://img207.imageshack.us/my.php?image=advancedbbcodebox3prosidd3.gif" class="postlink"><img src="http://img207.imageshack.us/img207/1773/advancedbbcodebox3prosidd3.th.gif" alt="Image" /></a>',
	
	// testlink
	'ABBC3_TESTLINK_TAG'		=> 'link checker',
	'ABBC3_TESTLINK_MOVER'		=> 'Insert a file stored on public server',
	'ABBC3_TESTLINK_TIP'		=> '[testlink]http://rapidshare.com/files/...[/testlink]',
	'ABBC3_TESTLINK_NOTE'		=> 'Valid servers:rapidshare,megaupload,megarotic,depositfiles,megashares .',
	'ABBC3_TESTLINK_EXAMPLE'	=> 'http://rapidshare.com/files/86587996/ABBC3_v108.zip.html',
	'ABBC3_TESTLINK_VIEW'		=> '<dl class="testlink"><dd><font color="red" size="4" >X</font>&nbsp;<a href="http://rapidshare.com/files/86587996/ABBC3_v108.zip.html" >http://rapidshare.com/files/86587996/ABBC3_v108.zip.html</a><br /></dd></dl>',
	'ABBC3_TESTLINK_GOOD'		=> 'File found on server !',
	'ABBC3_TESTLINK_WRONG'		=> 'File not found !',
	
	// Click counter
	'ABBC3_CLICK_TAG'			=> 'click',
	'ABBC3_CLICK_MOVER'			=> 'Insert Clicks Counter',
	'ABBC3_CLICK_TIP'			=> '[click]http://...[/click] or [click=http://...]Name Web[/click] or [click][img]http://...[/img][/click]',
	'ABBC3_CLICK_EXAMPLE' 		=> 'http://www.google.com ' . ' ' . 'http://www.google.com/intl/en_com/images/logo_plain.png' ,
	'ABBC3_CLICK_VIEW'			=> '<a href="./click.php?id=1" >http://www.phpbb.com</a> ( Clicked 1 time )<br />',
	'ABBC3_CLICK_TIME'			=> '( Clicked %d time )',
	'ABBC3_CLICK_TIMES'			=> '( Clicked %d times )',
	
	// Search tag
	'ABBC3_SEARCH_MOVER'		=> 'Insert search word',
	'ABBC3_SEARCH_TIP'			=> '[search(=(msn|yahoo|google))]text[/search]',
	'ABBC3_SEARCH_VIEW'			=> $lang['SEARCH_MINI'] . ' ' . $config['sitename'] . ' : <a href="search.php?keywords=Advanced BBcode box 3">"Advanced BBcode box 3"</a><br/><br/>' . $lang['SEARCH_MINI'] . ' msn : <a href="http://search.live.com/results.aspx?q=Advanced BBcode box 3&mkt=tr-TR&lf=1" target="_blank">"Advanced BBcode box 3"</a><br/><br/>' .$lang['SEARCH_MINI'] . ' yahoo : <a href="http://search.yahoo.com/search?p=Advanced BBcode box 3" target="_blank">"Advanced BBcode box 3"</a><br/><br/>' . $lang['SEARCH_MINI'] . ' google : <a href="http://www.google.com.tr/search?q=Advanced BBcode box 3" target="_blank">"Advanced BBcode box 3"</a>',
	
	// BBvideo Wizard
	'ABBC3_BBVIDEO_TAG'			=> 'BBvideo',
	'ABBC3_BBVIDEO_MOVER'		=> 'Insert web video',
	'ABBC3_BBVIDEO_TIP'			=> '[BBvideo]Video URL[/BBvideo]',
	'ABBC3_BBVIDEO_EXAMPLE'		=> 'http://www.youtube.com/watch?v=TA4hm97m494',
	'ABBC3_BBVIDEO_VIEW'		=> '<object width="200" height="100"><param name="movie" value="http://www.youtube.com/v/TA4hm97m494" /><param name="wmode" value="transparent" /><embed src="http://www.youtube.com/v/TA4hm97m494" type="application/x-shockwave-flash" wmode="transparent" width="200" height="100"></embed></object>',
	'ABBC3_BBVIDEO_FILE'		=> 'Video format',
	'ABBC3_BBVIDEO_VIDEO'		=> 'Video from',
	
	// Custom bbcodes
	
));

?>