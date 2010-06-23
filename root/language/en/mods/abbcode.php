<?php
/**
* @package: phpBB3 :: Advanced BBCode box 3 -> language [en][English]
* @version: $Id: abbcode.php, v 1.0.11 2008/10/11 11:10:08 leviatan21 Exp $
* @copyright: leviatan21 < info@mssti.com > (Gabriel) http://www.mssti.com/phpbb3/
* @license: http://opensource.org/licenses/gpl-license.php GNU Public License 
* @author: leviatan21 - http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=345763
* @translator: leviatan21 - http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=345763
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

// Image Resizer JS
	'ABBC3_RESIZE_SMALL'		=> 'Click this bar to view the full image.',
	'ABBC3_RESIZE_ZOOM_IN'		=> 'Zoom in (real dimensions: %1$s x %2$s)',
	'ABBC3_RESIZE_CLOSE'		=> 'Close',
	'ABBC3_RESIZE_ZOOM_OUT'		=> 'Zoom out',
	'ABBC3_RESIZE_FILESIZE'		=> 'This image has been resized. Click this bar to view the full image. The original image is sized %1$s x %2$s and weights %3$sKB.',
	'ABBC3_RESIZE_NOFILESIZE'	=> 'This image has been resized. Click this bar to view the full image. The original image is sized %1$s x %2$s.',
	'ABBC3_RESIZE_FULLSIZE'		=> 'Image resized to : %1$s % of its original size [ %2$s x %3$s ]',
	'ABBC3_RESIZE_NUMBER'		=> 'Image %1$s of %2$s',
	'ABBC3_RESIZE_PLAY'			=> 'Play slideshow',
	'ABBC3_RESIZE_PAUSE'		=> 'Pause slideshow',
	'ABBC3_POPBOX_REVERSETEXT'	=> 'Click the image to shrink it.',

// Highslide JS - http://vikjavev.no/highslide/forum/viewtopic.php?t=2119
	'ABBC3_HIGHSLIDE_LOADINGTEXT'		=> 'Loading...',
	'ABBC3_HIGHSLIDE_LOADINGTITLE'		=> 'Click to cancel',
	'ABBC3_HIGHSLIDE_FOCUSTITLE'		=> 'Click to bring to front',
	'ABBC3_HIGHSLIDE_FULLEXPANDTITLE'	=> 'Expand to actual size',
	'ABBC3_HIGHSLIDE_FULLEXPANDTEXT'	=> 'Full size',
	'ABBC3_HIGHSLIDE_CREDITSTEXT'		=> 'Powered by <i>Highslide JS</i>',
	'ABBC3_HIGHSLIDE_CREDITSTITLE'		=> 'Go to the Highslide JS homepage',
	'ABBC3_HIGHSLIDE_PREVIOUSTEXT'		=> 'Previous',
	'ABBC3_HIGHSLIDE_PREVIOUSTITLE'		=> 'Previous (arrow left)',
	'ABBC3_HIGHSLIDE_NEXTTEXT'			=> 'Next',
	'ABBC3_HIGHSLIDE_NEXTTITLE'			=> 'Next (arrow right)',
	'ABBC3_HIGHSLIDE_MOVETITLE'			=> 'Move',
	'ABBC3_HIGHSLIDE_MOVETEXT'			=> 'Move',
	'ABBC3_HIGHSLIDE_CLOSETEXT'			=> 'Close',
	'ABBC3_HIGHSLIDE_CLOSETITLE'		=> 'Close (esc)',
	'ABBC3_HIGHSLIDE_RESIZETITLE'		=> 'Resize',
	'ABBC3_HIGHSLIDE_PLAYTEXT'			=> 'Play',
	'ABBC3_HIGHSLIDE_PLAYTITLE'			=> 'Play slideshow (spacebar)',
	'ABBC3_HIGHSLIDE_PAUSETEXT'			=> 'Pause',
	'ABBC3_HIGHSLIDE_PAUSETITLE'		=> 'Pause slideshow (spacebar)',
	'ABBC3_HIGHSLIDE_NUMBER'			=> 'Image %1 of %2',
	'ABBC3_HIGHSLIDE_RESTORETITLE'		=> 'Click to close image, click and drag to move. Use arrow keys for next and previous.',

// Text to be applied to the helpline & mouseover & help page & Wizard texts
	'BBCODE_STYLES_TIP'			=> 'Tip: Styles can be applied quickly to selected text.',

	'ABBC3_ERROR'				=> 'Error : ',
	'ABBC3_ERROR_TAG'			=> 'Unexpected Error using tag : ',
	'ABBC3_NO_EXAMPLE'			=> 'No data example',

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
	'ABBC3_UNAUTHORISED'		=> 'You cannot use certain words : <br /><strong> %s </strong>',
	'SAMPLE_TEXT'				=> 'This is a sample text' //	' . $lang['SAMPLE_TEXT'] . '
));

//
// TRANSLATORS PLEASE NOTE 
// Several lines have an special note like "##	For translate : " follow for one or more "yes" 
// These means that you can/have to translate the word under
//

$lang = array_merge($lang, array(
// bbcodes texts
	// Font Type Dropdown
	'ABBC3_FONT_MOVER'			=> 'Font type',
	'ABBC3_FONT_TIP'			=> '[font=Comic Sans MS]text[/font]',
	'ABBC3_FONT_NOTE'			=> 'Note: You can use your own font-family',
	'ABBC3_FONT_VIEW'			=> '<span style="font-family:Comic Sans MS">' . $lang['SAMPLE_TEXT'] . '</span>',

	// Font family Groups
	'ABBC3_FONT_ABBC3'			=> 'ABBC Box 3',
	'ABBC3_FONT_SAFE'			=> 'Safe list',
	'ABBC3_FONT_WIN'			=> 'Win default',

	// Font Size Dropdown
	'ABBC3_FONT_GIANT'			=> 'Giant',
	'ABBC3_SIZE_MOVER'			=> 'Font size',
	'ABBC3_SIZE_TIP'			=> '[size=150]text large[/size]',
	'ABBC3_SIZE_NOTE'			=> 'Note: The value will be interpreted as a percentage',
	'ABBC3_SIZE_VIEW'			=> '<span style="font-size: 150%; line-height: 116%;">' . $lang['SAMPLE_TEXT'] . '</span>',

	// Highlight Font Color Dropdown
	'ABBC3_HIGHLIGHT_MOVER'		=> 'Text highlighted',
	'ABBC3_HIGHLIGHT_TIP'		=> '[highlight=yellow]text[/highlight]',
	'ABBC3_HIGHLIGHT_NOTE'		=> 'Note: You can use html colors (color=#FF0000 or color=red)',
	'ABBC3_HIGHLIGHT_VIEW'		=> '<span style="background-color: yellow;">' . $lang['SAMPLE_TEXT'] . '</span>',

	// Font Color Dropdown
	'ABBC3_COLOR_MOVER'			=> 'Font colour',
	'ABBC3_COLOR_TIP'			=> '[color=red]text[/color]',
	'ABBC3_COLOR_NOTE'			=> 'Note: You can use html colors (color=#FF0000 or color=red)',
	'ABBC3_COLOR_VIEW'			=> '<span style="color:red">' . $lang['SAMPLE_TEXT'] . '</span>',

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
	'ABBC3_CODE_TIP'			=> '[code]code[/code]',
	'ABBC3_CODE_VIEW'			=> '<dl class="codebox"><dt>'. $lang['CODE'] .': <a href="#" onclick="selectCode(this); return false;">'. $lang['SELECT_ALL_CODE'] .'</a></dt><dd><code>' . $lang['SAMPLE_TEXT'] . '</code></dd></dl>',

	// Quote
	'ABBC3_QUOTE_MOVER'			=> 'Quote',
	'ABBC3_QUOTE_TIP'			=> '[quote]text[/quote] or [quote=\"member\"]text[/quote]',
##	For translate :                                        yes
	'ABBC3_QUOTE_VIEW'			=> '<blockquote><div><cite>member '. $lang['WROTE'] .':</cite>' . $lang['SAMPLE_TEXT'] . '</div></blockquote>',

	// html
//	'ABBC3_HTML_MOVER'			=> 'HTML code',
//	'ABBC3_HTML_TIP'			=> '[html]xhtml code[/html]',
//	'ABBC3_HTML_EXAMPLE'		=> '[html]&lt;a href=\"http://www.mssti.com/phpbb3\"&gt;link to mssti&lt;/a&gt;[/html]',
//	'ABBC3_HTML_VIEW'			=> '<a href="http://www.mssti.com/phpbb3">link to mssti</a>',

	// Spoiler
	'ABBC3_SPOIL_MOVER'			=> 'Spoiler text',
	'ABBC3_SPOIL_TIP'			=> '[spoil]text[/spoil]',
##	For translate :                                                                                                                               yes                                                      yes               yes
	'ABBC3_SPOIL_VIEW'			=> '<div class="spoilwrapper"><div class="spoiltitle"><input id="1" class="btnspoil button2" type="button" value="Show Spoiler" onClick="javascript:abbc3_spoiler( 1, 2, \'Hide Spoiler\', \'Show Spoiler\' )"></div><div class="spoilcontent"><div id="2" style="display: none;">' . $lang['SAMPLE_TEXT'] . '</div></div></div>',
	'SPOILER_SHOW'				=> 'Show Spoiler',
	'SPOILER_HIDE'				=> 'Hide Spoiler',

	// hidden
	'ABBC3_HIDDEN_MOVER'		=>	'Hide content to guest',
	'ABBC3_HIDDEN_TIP'			=>	'[hidden]text[/hidden]',
	'HIDDEN_OFF'				=>	'Hidden is OFF',
	'HIDDEN_ON'					=>	'Hidden is ON',
	'HIDDEN_EXPLAIN'			=>	'The board requires you to be registered and logged in before you can view the hidden message',

	// Moderator tag
	'ABBC3_MOD_MOVER'			=> 'Moderator message',
	'ABBC3_MOD_TIP'				=> '[mod=name]text[/mod]',
##	For translate :                                                                                                                                                                               yes
	'ABBC3_MOD_VIEW'			=> '<table class="ModTable" width="100%" cellspacing="5" cellpadding="0" border="0"><tr><td class="exclamation" rowspan="2">&nbsp;!&nbsp;</td><td class="rowuser">Moderator_name '. $lang['WROTE'] .':</td></tr><tr><td class="rowtext">' . $lang['SAMPLE_TEXT'] . '</td></tr></table>',

	// Off topic tag
	'OFFTOPIC'					=> 'Offtopic',
	'ABBC3_OFFTOPIC_MOVER'		=> 'Insert Off topic text',
	'ABBC3_OFFTOPIC_TIP'		=> '[offtopic]text[/offtopic]',
##	For translate :                                                                yes
	'ABBC3_OFFTOPIC_VIEW'		=> '<dl class="OffTopic"><dt class="OffTopicTitle">Offtopic: </dt><dd class="OffTopicText">' . $lang['SAMPLE_TEXT'] . '</dd></dl>',

	// NFO
	'ABBC3_NFO_TITLE'			=> 'NFO text',
	'ABBC3_NFO_MOVER'			=> 'NFO text (Better on Internet explorer)',
	'ABBC3_NFO_TIP'				=> '[nfo]NFO text[/nfo]',
	'ABBC3_NFO_VIEW'			=> '<table cellspacing="0" cellpadding="0" border="0" ><tr><td><span class="genmed"><b>NFO:</b></span></td></tr><tr><td class="nfo">' . str_replace(" ", "&nbsp;", '    Ü²Ü  Û Û²²     ÛÛÛÛ  Û ÛÛÛÛÛÛÛÛÛÛÛÛÛÛÛÛÛÛÛÛÛÛÛÛÛÛÛÛ     ÛÛÛÛ Û  Û ÛÛÛÛÛ ²² ±') . '</td></tr></table>',

	// Justify Align
	'ABBC3_ALIGNJUSTIFY_MOVER'	=> 'Text justified',
	'ABBC3_ALIGNJUSTIFY_TIP'	=> '[align=justify]text[/align]',
##	For translate :                                                 yes          yes
	'ABBC3_ALIGNJUSTIFY_VIEW'	=> '<div style="text-align:justify">This is <br />a sample text</div>',

	// Right Align
	'ABBC3_ALIGNRIGHT_MOVER'	=> 'Text right aligned',
	'ABBC3_ALIGNRIGHT_TIP'		=> '[align=right]text[/align]',
	'ABBC3_ALIGNRIGHT_VIEW'		=> '<div style="text-align:right">' . $lang['SAMPLE_TEXT'] . '</div>',

	// Center Align
	'ABBC3_ALIGNCENTER_MOVER'	=> 'Text aligned to the center',
	'ABBC3_ALIGNCENTER_TIP'		=> '[align=center]text[/align]',
	'ABBC3_ALIGNCENTER_VIEW'	=> '<div style="text-align:center">' . $lang['SAMPLE_TEXT'] . '</div>',

	// Left Align
	'ABBC3_ALIGNLEFT_MOVER'		=> 'Text left aligned',
	'ABBC3_ALIGNLEFT_TIP'		=> '[align=left]text[/align]',
	'ABBC3_ALIGNLEFT_VIEW'		=> '<div style="text-left:justify">' . $lang['SAMPLE_TEXT'] . '</div>',

	// Preformat
	'ABBC3_PRE_MOVER'			=> 'Text preformatted',
	'ABBC3_PRE_TIP'				=> '[pre]text[/pre]',
	'ABBC3_PRE_VIEW'			=> '<pre>' . $lang['SAMPLE_TEXT'] . '</pre>',

	// Tab
	'ABBC3_TAB_MOVER'			=> 'Creates a normal indent',
	'ABBC3_TAB_TIP'				=> '[tab=nn]',
	'ABBC3_TAB_NOTE'			=> 'Enter a number that will be a margin measured in pixels.',
	'ABBC3_TAB_VIEW'			=> '<span style="margin-left:20px;"></span>' . $lang['SAMPLE_TEXT'] . '',

	// Superscript
	'ABBC3_SUP_MOVER'			=> 'Sets the text as superscripts',
	'ABBC3_SUP_TIP'				=> '[sup]text[/sup]',
##	For translate :                 yes                                                                 yes
	'ABBC3_SUP_VIEW'			=> 'This is a normal text <sup>' . $lang['SAMPLE_TEXT'] . '</sup> this is a normal text',

	// Subscript
	'ABBC3_SUB_MOVER'			=> 'Sets the text as subscripts',
	'ABBC3_SUB_TIP'				=> '[sub]text[/sub]',
##	For translate :                 yes                                                                 yes
	'ABBC3_SUB_VIEW'			=> 'This is a normal text <sub>' . $lang['SAMPLE_TEXT'] . '</sub> this is a normal text',

	// Bold
	'ABBC3_B_MOVER'				=> 'Text in bold',
	'ABBC3_B_TIP'				=> '[b]text[/b]',
	'ABBC3_B_VIEW'				=> '<strong>' . $lang['SAMPLE_TEXT'] . '</strong>',

	// Italic
	'ABBC3_I_MOVER'				=> 'Text in italics',
	'ABBC3_I_TIP'				=> '[i]text[/i]',
	'ABBC3_I_VIEW'				=> '<em>' . $lang['SAMPLE_TEXT'] . '</em>',

	// Underline
	'ABBC3_U_MOVER'				=> 'Text underlined',
	'ABBC3_U_TIP'				=> '[u]text[/u]',
	'ABBC3_U_VIEW'				=> '<span style="text-decoration: underline">' . $lang['SAMPLE_TEXT'] . '</span>',

	// Strikethrough
	'ABBC3_S_MOVER'				=> 'Text strikethrough',
	'ABBC3_S_TIP'				=> '[s]text[/s]',
	'ABBC3_S_VIEW'				=> '<span style="text-decoration: line-through;">' . $lang['SAMPLE_TEXT'] . '</span>',

	// Text Fade
	'ABBC3_FADE_MOVER'			=> 'Text fadein fadeout',
	'ABBC3_FADE_TIP'			=> '[fade]text[/fade]',
	'ABBC3_FADE_VIEW'			=> '<span class="fade_link">' . $lang['SAMPLE_TEXT'] . '</span> <script type="text/javascript">fade_ontimer()</script>',

	// Text Gradient
	'ABBC3_GRAD_MOVER'			=> 'Text gradient',
	'ABBC3_GRAD_TIP'			=> '',
##For translate (The separate words are "This is a sample text") yes                                  yes                                  yes                                  yes                                   yes                                  yes                                   yes                                   yes                                  yes                                  yes                                  yes                                  yes                                  yes                                   yes                                  yes                                  yes                                  yes
	'ABBC3_GRAD_VIEW'			=> '<span style="color: #FF0000">T</span><span style="color: #F2000D">h</span><span style="color: #E6001A">i</span><span style="color: #D90026">s</span> <span style="color: #BF0040">i</span><span style="color: #B3004D">s</span> <span style="color: #990066">a</span> <span style="color: #800080">s</span><span style="color: #73008C">a</span><span style="color: #660099">m</span><span style="color: #5900A6">p</span><span style="color: #4D00B3">l</span><span style="color: #4000BF">e</span> <span style="color: #2600D9">t</span><span style="color: #1A00E6">e</span><span style="color: #0D00F2">x</span><span style="color: #0000FF">t</span>',
	'ABBC3_GRAD_MIN_ERROR'		=> 'Please, first select the text : ',
	'ABBC3_GRAD_MAX_ERROR'		=> 'Only allows less than 120 characters : ',
	'ABBC3_GRAD_COLORS'			=> 'Pre Selected Colors',

	// Glow text
	'ABBC3_GLOW_MOVER'			=> 'Glow text (Only Internet explorer)',
	'ABBC3_GLOW_TIP'			=> '[glow=(color)]text[/glow]',
	'ABBC3_GLOW_VIEW'			=> '<div style="filter:Glow(color=red,strength=4);color:#ffffff;height:110%">' . $lang['SAMPLE_TEXT'] . '</div>',

	// Shadow text
	'ABBC3_SHADOW_MOVER'		=> 'Shadow text (Only Internet explorer)',
	'ABBC3_SHADOW_TIP'			=> '[shadow=(color)]text[/shadow]',
	'ABBC3_SHADOW_VIEW'			=> '<div style="filter:shadow(color=black,strength=4);color:blue;height:110%">' . $lang['SAMPLE_TEXT'] . '</div>',

	// Dropshadow text
	'ABBC3_DROPSHADOW_MOVER'	=> 'Dropshadow text (Only Internet explorer)',
	'ABBC3_DROPSHADOW_TIP'		=> '[dropshadow=(color)]text[/dropshadow]',
	'ABBC3_DROPSHADOW_VIEW'		=> '<div style="filter:dropshadow(color=#999999,strength=4);color:blue;height:110%">' . $lang['SAMPLE_TEXT'] . '</div>',

	// Blur text
	'ABBC3_BLUR_MOVER'			=> 'Blur text (Only Internet explorer)',
	'ABBC3_BLUR_TIP'			=> '[blur=(color)]text[/blur]',
	'ABBC3_BLUR_VIEW'			=> '<div style="filter:Blur(strength=7);color:blue;height:110%">' . $lang['SAMPLE_TEXT'] . '</div>',

	// Wave text
	'ABBC3_WAVE_MOVER'			=> 'Wave text (Only Internet explorer)',
	'ABBC3_WAVE_TIP'			=> '[wave=(color)]text[/wave]',
	'ABBC3_WAVE_VIEW'			=> '<div style="filter:Wave(strength=2);color:blue;height:110%">' . $lang['SAMPLE_TEXT'] . '</div>',

	// Unordered List
	'ABBC3_LISTB_MOVER'			=> 'Bullet list',
	'ABBC3_LISTB_TIP'			=> '[list]text[/list]',
	'ABBC3_LISTB_NOTE'			=> 'Note: Use [*] to create bullets',
##	For translate :                         yes           yes           yes                   yes              yes              yes                yes
	'ABBC3_LISTB_VIEW'			=> '<ul><li>Item1</li><li>Item2</li><li>Item3</li></ul><br /> or <br /><ul><li>Item disc<ul><li>Item circle<ul><li>item square</li></ul></li></ul></li></ul><br />',

	// Ordered List
	'ABBC3_LISTO_MOVER'			=> 'Ordered list',
	'ABBC3_LISTO_TIP'			=> '[list=1|a|A|i|I]text[/list]',
	'ABBC3_LISTO_NOTE'			=> 'Note: Use [*] to create bullets',
##	For translate :                                                                  yes          yes           yes             yes                                                   yes           yes           yes             yes                                                   yes            yes            yes              yes                                                   yes            yes             yes                yes                                                   yes            yes             yes
	'ABBC3_LISTO_VIEW'			=> '<ol style="list-style-type: arabic-numbers"><li>Item1</li><li>Item2</li><li>Item3</li></ol> or <br /><ol style="list-style-type: lower-alpha"><li>Item1</li><li>Item2</li><li>Item3</li></ol> or <br /><ol style="list-style-type: upper-alpha"><li>item A</li><li>item B</li><li>item C</li></ol> or <br /><ol style="list-style-type: lower-roman"><li>Item i</li><li>Item ii</li><li>Item iii</li></ol> or <br /><ol style="list-style-type: upper-roman"><li>Item I</li><li>Item II</li><li>Item III</li></ol>',

	// List item
	'ABBC3_LISTITEM_MOVER'		=> 'List item',
	'ABBC3_LISTITEM_TIP'		=> '[*]',
	'ABBC3_LISTITEM_NOTE'		=> 'Note: Create bullets inside list',

	// Line Break
	'ABBC3_HR_MOVER'			=> 'Header',
	'ABBC3_HR_TIP'				=> '[hr]',
	'ABBC3_HR_NOTE'				=> 'Note: Creates a header line row to seperate text',
	'ABBC3_HR_VIEW'				=> '<hr noshade color="#000000" size="1px">',

	// Message Box text direction Left to right
	'ABBC3_DIRRTL_MOVER'		=> 'Text with reading right-to-left',
	'ABBC3_DIRRTL_TIP'			=> '[dir=rtl]text[/dir]',
	'ABBC3_DIRRTL_VIEW'			=> '<BDO dir="rtl">' . $lang['SAMPLE_TEXT'] . '</BDO>',

	// Message Box text direction right to Left
	'ABBC3_DIRLTR_MOVER'		=> 'Text with reading left-to-right',
	'ABBC3_DIRLTR_TIP'			=> '[dir=ltr]text[/dir]',
	'ABBC3_DIRLTR_VIEW'			=> '<BDO dir="ltr">' . $lang['SAMPLE_TEXT'] . '</BDO>',

	// Marquee Down
	'ABBC3_MARQDOWN_MOVER'		=> 'Scrolling text down',
	'ABBC3_MARQDOWN_TIP'		=> '[marq=down]text[/marq]',
	'ABBC3_MARQDOWN_VIEW'		=> '<marquee direction="down" scrolldelay="120" height="80px">' . $lang['SAMPLE_TEXT'] . '</marquee>',

	// Marquee Up
	'ABBC3_MARQUP_MOVER'		=> 'Scrolling text upwards',
	'ABBC3_MARQUP_TIP'			=> '[marq=up]text[/marq]',
	'ABBC3_MARQUP_VIEW'			=> '<marquee direction="up" scrolldelay="120" height="80px">' . $lang['SAMPLE_TEXT'] . '</marquee>',

	// Marquee Right
	'ABBC3_MARQRIGHT_MOVER'		=> 'Displacement text to the right',
	'ABBC3_MARQRIGHT_TIP'		=> '[marq=right]text[/marq]',
	'ABBC3_MARQRIGHT_VIEW'		=> '<marquee direction="right" scrolldelay="120">' . $lang['SAMPLE_TEXT'] . '</marquee>',

	// Marquee Left
	'ABBC3_MARQLEFT_MOVER'		=> 'Displacement text to the left',
	'ABBC3_MARQLEFT_TIP'		=> '[marq=left]text[/marq]',
	'ABBC3_MARQLEFT_VIEW'		=> '<marquee direction="left" scrolldelay="120">' . $lang['SAMPLE_TEXT'] . '</marquee>',

	// Table row cell wizard
	'ABBC3_TABLE_MOVER'			=> 'Insert a table',
	'ABBC3_TABLE_TIP'			=> '[table=(ccs style)][tr=(ccs style)][td=(ccs style)]text[/td][/tr][/table]',
	'ABBC3_TABLE_VIEW'			=> '<table style="width:50%;border:1px solid #cccccc;" cellspacing="0" cellpadding="0"><tr style="text-align:center;"><td style="border:1px solid #cccccc;">' . $lang['SAMPLE_TEXT'] . '</td></tr></table>',

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
	'ABBC3_ED2K_FRIEND'			=> 'ed2k friend',
	'ABBC3_ED2K_SERVER'			=> 'ed2k server',
	'ABBC3_ED2K_SERVERLIST'		=> 'ed2k serverlist',

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
	'ABBC3_THUMBNAIL_VIEW'		=> '<img src="http://www.google.com/intl/en_com/images/logo_plain.png" alt="' . $user->lang['IMAGE'] . '" border="0" width="200px" class="hoverbox resize_me" />',

	// Imgshack
	'ABBC3_IMGSHACK_MOVER'		=> 'Insert image from imageshack',
	'ABBC3_IMGSHACK_TIP'		=> '[url=http://imageshack.us][img=http://...][/img][/url]',
	'ABBC3_IMGSHACK_VIEW'		=> '<a href="http://img207.imageshack.us/my.php?image=advancedbbcodebox3prosidd3.gif" class="postlink"><img src="http://img207.imageshack.us/img207/1773/advancedbbcodebox3prosidd3.th.gif" alt="Image" /></a>',

	// Rapid share checker
	'ABBC3_FOPEN_ERROR'			=> '<strong>Error : </strong> Sorry but it appears that <strong>allow_url_fopen</strong> is disabled., this function requires the PHP directive allow_url_fopen to be enabled.',
	'ABBC3_RAPIDSHARE_TAG'		=> 'rapidshare',
	'ABBC3_RAPIDSHARE_MOVER'	=> 'Insert a file from rapidshare',
	'ABBC3_RAPIDSHARE_TIP'		=> '[rapidshare]http://rapidshare.com/files/...[/rapidshare]',
	'ABBC3_RAPIDSHARE_EXAMPLE'	=> 'http://rapidshare.com/files/86587996/ABBC3_v108.zip.html',
	'ABBC3_RAPIDSHARE_VIEW'		=> '<a href="http://rapidshare.com/files/86587996/ABBC3_v108.zip.html" >http://rapidshare.com/files/86587996/ABBC3_v108.zip.html</a> <font color="green" size="4" >File not found !</font><br />',
	'ABBC3_RAPIDSHARE_GOOD'		=> 'File found on server !',
	'ABBC3_RAPIDSHARE_WRONG'	=> 'File not found !',

	// testlink
	'ABBC3_CURL_ERROR'			=> '<strong>Error : </strong> Sorry but it appears that CURL is not loaded, Please install it to use this function.',
	'ABBC3_LOGIN_EXPLAIN_VIEW'	=> 'The board requires you to be registered and logged in to view links.',
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
	'ABBC3_CLICK_ERROR'			=> '<strong>ERROR:</strong> Please enter a VALID click ID in URL',

	// Search tag
	'ABBC3_SEARCH_MOVER'		=> 'Insert search word',
	'ABBC3_SEARCH_TIP'			=> '[search(=(msn|yahoo|google|altavista|lycos|wikipedia))]text[/search]',
	'ABBC3_SEARCH_VIEW'			=> $lang['SEARCH_MINI'] . ' ' . $config['sitename'] . ' : <a href="search.php?keywords=Advanced BBcode box 3">"Advanced BBcode box 3"</a><br/><br/>' . $lang['SEARCH_MINI'] . ' msn : <a href="http://search.live.com/results.aspx?q=Advanced BBcode box 3&mkt=tr-TR&lf=1" target="_blank">"Advanced BBcode box 3"</a><br/><br/>' .$lang['SEARCH_MINI'] . ' yahoo : <a href="http://search.yahoo.com/search?p=Advanced BBcode box 3" target="_blank">"Advanced BBcode box 3"</a><br/><br/>' . $lang['SEARCH_MINI'] . ' google : <a href="http://www.google.com.tr/search?q=Advanced BBcode box 3" target="_blank">"Advanced BBcode box 3"</a>',

	// BBvideo Wizard
	'ABBC3_BBVIDEO_TAG'			=> 'BBvideo',
	'ABBC3_BBVIDEO_MOVER'		=> 'Insert web video',
	'ABBC3_BBVIDEO_TIP'			=> '[BBvideo]Video URL[/BBvideo]',
	'ABBC3_BBVIDEO_EXAMPLE'		=> 'http://www.youtube.com/watch?v=TA4hm97m494',
	'ABBC3_BBVIDEO_VIEW'		=> '<object width="200" height="100"><param name="movie" value="http://www.youtube.com/v/TA4hm97m494" /><param name="wmode" value="transparent" /><embed src="http://www.youtube.com/v/TA4hm97m494" type="application/x-shockwave-flash" wmode="transparent" width="200" height="100"></embed></object>',
	'ABBC3_BBVIDEO_FILE'		=> 'Video format',
	'ABBC3_BBVIDEO_VIDEO'		=> 'Video from',

	// Flash (swf) Wizard
	'ABBC3_FLASH_TAG'			=> 'flash',
	'ABBC3_FLASH_MOVER'			=> 'Insert flash file (swf)',
	'ABBC3_FLASH_TIP'			=> '[flash width=# height=#]URL flash[/flash] or [flash width,height]URL flash[/flash]',
	'ABBC3_FLASH_EXAMPLE'		=> 'http://www.adobe.com/support/flash/ts/documents/test_version/version.swf',
	'ABBC3_FLASH_VIEW'			=> '<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0" width="200" height="100"><param name="movie" value="http://www.adobe.com/support/flash/ts/documents/test_version/version.swf" /><param name="play" value="true" /><param name="loop" value="true" /><param name="quality" value="high" /><param name="allowScriptAccess" value="never" /><param name="allowNetworking" value="internal" /><embed src="http://www.adobe.com/support/flash/ts/documents/test_version/version.swf" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" width="200" height="100" play="true" loop="true" quality="high" allowscriptaccess="never" allownetworking="internal"></embed></object>',

	// Flash (flv) Wizard
	'ABBC3_FLV_TAG'				=> 'flash',
	'ABBC3_FLV_MOVER'			=> 'Insert flash video (flv)',
	'ABBC3_FLV_TIP'				=> '[flv width=# height=#]URL flash video[/flv] or [flv width,height]URL flash video[/flv]',
	'ABBC3_FLV_EXAMPLE' 		=> 'http://www.channel-ai.com/video/eyn/demo1.flv',
	'ABBC3_FLV_VIEW'			=> '<embed src="../images/flvplayer.swf" width="200" height="100" bgcolor="#FFFFFF" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="file=../files/demo1.flv&autostart=false" />',

	// Streaming Video Wizard
	'ABBC3_VIDEO_TAG'			=> 'video',
	'ABBC3_VIDEO_MOVER'			=> 'Insert video',
	'ABBC3_VIDEO_TIP'			=> '[video width=# height=#]URL video[/video]',
	'ABBC3_VIDEO_EXAMPLE'		=> 'http://www.sarahsnotecards.com/catalunyalive/fishstore.wmv',
	'ABBC3_VIDEO_VIEW'			=> '<object classid="CLSID:6BF52A52-394A-11d3-B153-00C04F79FAA6" id="player"  width="200" height="100"><param name="url" value="http://www.sarahsnotecards.com/catalunyalive/fishstore.wmv" /><param name="src" value="http://www.sarahsnotecards.com/catalunyalive/fishstore.wmv" /><param name="showcontrols" value="true" /><param name="autostart" value="false" /><!--[if !IE]>--><object type="video/x-ms-wmv" data="http://www.sarahsnotecards.com/catalunyalive/fishstore.wmv" width="200" height="100" ><param name="src" value="http://www.sarahsnotecards.com/catalunyalive/fishstore.wmv" /><param name="autostart" value="false" /><param name="controller" value="true" /></object><!--<![endif]--></object>',

	// Streaming Audio Wizard
	'ABBC3_STREAM_TAG'			=> 'sound',
	'ABBC3_STREAM_MOVER'		=> 'Insert sound',
	'ABBC3_STREAM_TIP'			=> '[stream]URL stream[/stream]',
	'ABBC3_STREAM_EXAMPLE'		=> 'http://realdev1.realise.com/rossa/mov/demo.mp3',
	'ABBC3_STREAM_VIEW'			=> '<object width="200" height="45" classid="CLSID:6BF52A52-394A-11d3-B153-00C04F79FAA6" id="wmstream_"><param name="url" value="http://realdev1.realise.com/rossa/mov/demo.mp3" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /><param name="src" value="http://realdev1.realise.com/rossa/mov/demo.mp3" /><!--[if !IE]>--><object width="200" height="45" type="video/x-ms-wmv" data="http://realdev1.realise.com/rossa/mov/demo.mp3"><param name="src" value="http://realdev1.realise.com/rossa/mov/demo.mp3" /><param name="controller" value="1" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /></object><!--<![endif]--></object>',

	// Quick time
	'ABBC3_QUICKTIME_TAG'		=> 'Quick time',
	'ABBC3_QUICKTIME_MOVER'		=> 'Insert Quick time',
	'ABBC3_QUICKTIME_TIP'		=> '[quicktime width=# height=#]URL Quick time[/quicktime]',
	'ABBC3_QUICKTIME_EXAMPLE'	=> 'http://www.nature.com/neuro/journal/v3/n3/extref/Li_control.mov.qt' . ' ' . 'http://www.carnivalmidways.com/images/Music/thisisatest.mp3',
	'ABBC3_QUICKTIME_VIEW'		=> '<object id="qtstream_" classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab#version=6,0,2,0" width="200" height="100"><param name="src" value="http://www.nature.com/neuro/journal/v3/n3/extref/Li_control.mov.qt" /><param name="controller" value="true" /><param name="autoplay" value="false" /><param name="type" value="video/quicktime" /><embed name="qtstream_" src="http://www.nature.com/neuro/journal/v3/n3/extref/Li_control.mov.qt" pluginspage="http://www.apple.com/quicktime/download/" enablejavascript="true" controller="true" width="200" height="100" type="video/quicktime" autoplay="false"></embed></object>',

	// Real Media Wizard
	'ABBC3_RAM_TAG'				=> 'Real Media',
	'ABBC3_RAM_MOVER'			=> 'Insert Real Media',
	'ABBC3_RAM_TIP'				=> '[ram]URL Real Media[/ram]',
	'ABBC3_RAM_EXAMPLE'			=> 'http://www.bbc.co.uk/scotland/radioscotland/media/radioscotland.ram',
	'ABBC3_RAM_VIEW'			=> '<object id="rmstream_" classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" width="200" height="100"><param name="src" value="http://www.bbc.co.uk/scotland/radioscotland/media/radioscotland.ram" /><param name="autostart" value="false" /><param name="controls" value="ImageWindow" /><param name="console" value="ctrls_" /><param name="prefetch" value="false" /><embed name="rmstream_" type="audio/x-pn-realaudio-plugin" src="http://www.bbc.co.uk/scotland/radioscotland/media/radioscotland.ram" width="200" height="100" autostart="false" controls="ImageWindow" console="ctrls_" prefetch="false"></embed></object><br /><object id="ctrls_" classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" width="200" height="36"><param name="controls" value="ControlPanel" /><param name="console" value="ctrls_" /><embed name="ctrls_" type="audio/x-pn-realaudio-plugin" width="200" height="36" controls="ControlPanel" console="ctrls_"></embed></object>',

//	// Stage6 video Wizard
//	'ABBC3_STAGE6_TAG'			=> 'Stage6 Video',
//	'ABBC3_STAGE6_MOVER'		=> 'Insert video from Stage6', // from http://www.stage6.com/
//	'ABBC3_STAGE6_TIP'			=> '[stage6]Stage6 ID[/stage6]',
//	'ABBC3_STAGE6_EXAMPLE'		=> '2068715',
//	'ABBC3_STAGE6_VIEW'			=> '<object  classid="clsid:67DABFBF-D0AB-41fa-9C46-CC0F21721616" codebase="http://download.divx.com/player/DivXBrowserPlugin.cab" width="200" height="100" ><param name="src" value="http://video.stage6.com/2068715/.divx" /><param name="autoplay" value="false" /><param name="custommode" value="Stage6" /><param name="showpostplaybackad" value="false" /><embed type="video/divx" src="http://video.stage6.com/2068715/.divx" pluginspage="http://go.divx.com/plugin/download/" showpostplaybackad="false" custommode="Stage6" autoplay="false" width="200" height="100" /></object><br />',

	// Google video Wizard
	'ABBC3_GVIDEO_TAG'			=> 'Google Video',
	'ABBC3_GVIDEO_MOVER'		=> 'Insert video from Google',
	'ABBC3_GVIDEO_TIP'			=> '[GVideo]URL video[/GVideo]',
	'ABBC3_GVIDEO_EXAMPLE'		=> 'http://video.google.com/videoplay?docid=-8351924403384451128',
	'ABBC3_GVIDEO_VIEW'			=> '<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0" width="200" height="100"><param name="movie" value="http://video.google.com/googleplayer.swf?docid=-8351924403384451128" /><param name="play" value="false" /><param name="loop" value="false" /><param name="quality" value="high" /><param name="allowScriptAccess" value="never" /><param name="allowNetworking" value="internal" /><embed src="http://video.google.com/googleplayer.swf?docid=-8351924403384451128" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" width="200" height="100" play="false" loop="false" quality="high" allowscriptaccess="never" allownetworking="internal"></embed></object>',

	// Youtube video Wizard
	'ABBC3_YOUTUBE_TAG'			=> 'Youtube Video',
	'ABBC3_YOUTUBE_MOVER'		=> 'Insert video from Youtube',
	'ABBC3_YOUTUBE_TIP'			=> '[youtube]URL video[/youtube]',
	'ABBC3_YOUTUBE_EXAMPLE'		=> 'http://www.youtube.com/watch?v=TA4hm97m494',
	'ABBC3_YOUTUBE_VIEW'		=> '<object width="200" height="100"><param name="movie" value="http://www.youtube.com/v/TA4hm97m494" /><param name="wmode" value="transparent" /><embed src="http://www.youtube.com/v/TA4hm97m494" type="application/x-shockwave-flash" wmode="transparent" width="200" height="100"></embed></object>',

	// Veoh video
	'ABBC3_VEOH_TAG'			=> 'Veoh',
	'ABBC3_VEOH_MOVER'			=> 'Insert video from Veoh',
	'ABBC3_VEOH_TIP'			=> '[veoh]URL video[/veoh]',
	'ABBC3_VEOH_EXAMPLE'		=> 'http://www.veoh.com/videos/v1409404EqT5SJjM',
	'ABBC3_VEOH_VIEW'			=> '<embed src="http://www.veoh.com/videodetails2.swf?permalinkId=v1409404EqT5SJjM&id=anonymous&player=videodetailsembedded&videoAutoPlay=0" allowFullScreen="true" width="200" height="100" bgcolor="#000000" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>',

	// Collegehumor video
	'ABBC3_COLLEGEHOMOR_TAG'	=> 'collegehumor',
	'ABBC3_COLLEGEHUMOR_MOVER'	=> 'Insert video from collegehumor',
	'ABBC3_COLLEGEHUMOR_TIP'	=> '[collegehumor]collegehumor video URL[/collegehumor]',
	'ABBC3_COLLEGEHUMOR_EXAMPLE'=> 'http://www.collegehumor.com/video:1802097',
	'ABBC3_COLLEGEHUMOR_VIEW'	=> '<object type="application/x-shockwave-flash" data="http://www.collegehumor.com/moogaloop/moogaloop.swf?clip_id=1802097&fullscreen=1" width="200" height="100" ><param name="allowfullscreen" value="true" /><param name="movie" quality="best" value="http://www.collegehumor.com/moogaloop/moogaloop.swf?clip_id=1802097&fullscreen=1" /></object>',

	// Dailymotion video
	'ABBC3_DM_MOVER'			=> 'Insert video from dailymotion', // from http://www.dailymotion.com/
	'ABBC3_DM_TIP'				=> '[dm]Dailymotion ID[/dm]',
	'ABBC3_DM_EXAMPLE'			=> 'http://www.dailymotion.com/swf/x3hm7o',
	'ABBC3_DM_VIEW'				=> '<object width="200" height="100"><param name="movie" value="http://www.dailymotion.com/swf/x3hm7o" /><param name="allowFullScreen" value="true" /><param name="allowScriptAccess" value="never" /><embed src="http://www.dailymotion.com/swf/x3hm7o" type="application/x-shockwave-flash" width="200" height="100" allowFullScreen="true" allowScriptAccess="never"></embed></object>',

	// Gamespot video
	'ABBC3_GAMESPOT_MOVER'		=> 'Insert video from Gamespot',
	'ABBC3_GAMESPOT_TIP'		=> '[gamespot]Gamespot video URL[gamespot]',
	'ABBC3_GAMESPOT_EXAMPLE'	=> 'http://www.gamespot.com/video/944074/6185798/tom-clancys-rainbow-six-vegas-2-official-trailer-3',
	'ABBC3_GAMESPOT_VIEW'		=> '<embed id="mymovie" width="200" height="100" flashvars="paramsURI=http%3A%2F%2Fwww%2Egamespot%2Ecom%2Fpages%2Fvideo%5Fplayer%2Fproteus%5Fxml%2Ephp%3Fadseg%3D%26adgrp%3D%26sid%3D6185798%26pid%3D944074%26mb%3D%26onid%3D%26nc%3D1202626246593%26embedded%3D1%26showWatermark%3D0%26autoPlay%3D0" allowfullscreen="true" allowscriptaccess="never" quality="high" name="mymovie" src="http://image.com.com/gamespot/images/cne_flash/production/media_player/proteus/gs/proteus_embed.swf" type="application/x-shockwave-flash"/>',

	// Gametrailers video
	'ABBC3_GAMETRAILERS_MOVER'	=> 'Insert video from Gametrailers',
	'ABBC3_GAMETRAILERS_TIP'	=> '[gametrailers]Gametrailers video URL[/gametrailers]',
	'ABBC3_GAMETRAILERS_EXAMPLE'=> 'http://www.gametrailers.com/player/30461.html',
	'ABBC3_GAMETRAILERS_VIEW'	=> '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"  codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" id="gtembed" width="200" height="100"><param name="allowScriptAccess" value="never" /><param name="allowFullScreen" value="true" /><param name="movie" value="http://www.gametrailers.com/remote_wrap.php?mid=30461" /><param name="quality" value="high" /><embed src="http://www.gametrailers.com/remote_wrap.php?mid=30461" swLiveConnect="true" name="gtembed" align="middle" allowScriptAccess="never" allowFullScreen="true" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="200" height="100"></embed></object>',

	// IGN video
	'ABBC3_IGNVIDEO_MOVER'		=> 'Insert video from Ign',
	'ABBC3_IGNVIDEO_TIP'		=> '[ignvideo]ING video URL[/ignvideo]',
	'ABBC3_IGNVIDEO_EXAMPLE'	=> 'object_ID=967025&downloadURL=http://tvmovies.ign.com/tv/video/article/850/850894/knightrider_trailer_020808_flvlow.flv',
	'ABBC3_IGNVIDEO_VIEW'		=> '<embed src="http://videomedia.ign.com/ev/ev.swf" flashvars="object_ID=967025&downloadURL=http://tvmovies.ign.com/tv/video/article/850/850894/knightrider_trailer_020808_flvlow.flv" type="application/x-shockwave-flash" width="200" height="100" ></embed>',

	// LiveLeak video
	'ABBC3_LIVELEAK_MOVER'		=> 'Insert video from Liveleak',
	'ABBC3_LIVELEAK_TIP'		=> '[liveleak]Liveleak video URL[/liveleak]',
	'ABBC3_LIVELEAK_EXAMPLE'	=> 'http://www.liveleak.com/view?i=413_1202590393',
	'ABBC3_LIVELEAK_VIEW'		=> '<object type="application/x-shockwave-flash" width="200" height="100" wmode="transparent" data="http://www.liveleak.com/player.swf?autostart=false&token=i=413_1202590393"><param name="movie" value="http://www.liveleak.com/player.swf?autostart=false&token=$1" /><param name="wmode" value="transparent" /><param name="quality" value="high" /></object>',

	// Custom BBcodes
	// Deezer audio
	'DEEZER_TAG'			=> 'Deezer',
	'DEEZER_MOVER'			=> 'Insert audio from Deezer',
	'DEEZER_TIP'			=> '[Deezer]Deezer audio URL[/Deezer]',
	'DEEZER_EXAMPLE'		=> 'http://www.deezer.com/track/351534',
	'DEEZER_VIEW'			=> '<object width="180" height="220"><param name="movie" value="http://www.deezer.com/embedded/widget.swf?path=696108&lang=en&autoplay=true&id=351534"></param><embed src="http://www.deezer.com/embedded/widget.swf?path=696108&lang=en&autoplay=true&id=351534" type="application/x-shockwave-flash" width="180" height="220"></embed></object>',

));
?>