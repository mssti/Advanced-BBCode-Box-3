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
// equally where a string contains only two placeholders which are used to wrap tekst
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
// Reference : http://www.phpbb.com/mods/documentation/phpbb-documentation/language/index.php#lang-use-php

$lang = array_merge($lang, array(
// Help page
	'ABBC3_HELP_TITLE'			=> 'Advanced BBCode box 3 :: Ndihma',
	'ABBC3_HELP_DESC'			=> 'Pershkrimi',
	'ABBC3_HELP_WRITE'			=> 'Formati juaj i shrimit',
	'ABBC3_HELP_VIEW'			=> 'Formati yne i pamjes',
	'ABBC3_HELP_ABOUT'			=> 'Advanced BBCode Box 3 nga <a href="http://www.mssti.com/phpbb3">mssti</a>',
	'ABBC3_HELP_ALT'			=> 'Advanced BBCode Box 3 (aka ABBC3)',

// Image Resizer JS
	'ABBC3_RESIZE_SMALL'		=> 'Kliko per te pare imazhin komplet.',
	'ABBC3_RESIZE_ZOOM_IN'		=> 'Zoom ne (dimesionet reale: %1$s x %2$s)',
	'ABBC3_RESIZE_CLOSE'		=> 'Mbyll',
	'ABBC3_RESIZE_ZOOM_OUT'		=> 'Zoom jazhte',
	'ABBC3_RESIZE_FILESIZE'		=> 'Ky imazh eshte zvogeluar. Klikoni kete zhirit per te shfaqur imazhin e plote. Imazhi origjinal eshte me permasa %1$s x %2$s dhe madhesi %3$sKB.',
	'ABBC3_RESIZE_NOFILESIZE'	=> 'Ky imazh eshte zvogeluar. Klikoni kete zhirit per te shfaqur imazhin e plote. Imazhi origjinal eshte me permasa %1$s x %2$s.',
	'ABBC3_RESIZE_FULLSIZE'		=> 'Klikoni kete zhirit per te shfaqur imazhin e zvogeluar.',
	'ABBC3_RESIZE_NUMBER'		=> 'Imazhi %1$s of %2$s',
	'ABBC3_RESIZE_PLAY'			=> 'Play slideshow',
	'ABBC3_RESIZE_PAUSE'		=> 'Pause slideshow',

// Highslide JS - http://vikjavev.no/highslide/forum/viewtopic.php?t=2119
	'ABBC3_HIGHSLIDE_LOADINGTEXT'		=> 'Loading...',
	'ABBC3_HIGHSLIDE_LOADINGTITLE'		=> 'Kliko per ta hequr',
	'ABBC3_HIGHSLIDE_FOCUSTITLE'		=> 'Kliko per ta zjell perpara',
	'ABBC3_HIGHSLIDE_FULLEXPANDTITLE'	=> 'Shfaq permasat aktuale',
	'ABBC3_HIGHSLIDE_FULLEXPANDTEXT'	=> 'Permasat e plota',
	'ABBC3_HIGHSLIDE_CREDITSTEXT'		=> 'Powered by <i>Highslide JS</i>',
	'ABBC3_HIGHSLIDE_CREDITSTITLE'		=> 'Shko tek Highslide JS homepage',
	'ABBC3_HIGHSLIDE_PREVIOUSTEXT'		=> 'Previous',
	'ABBC3_HIGHSLIDE_PREVIOUSTITLE'		=> 'Previous (arrow left)',
	'ABBC3_HIGHSLIDE_NEXTTEXT'			=> 'Tjetra',
	'ABBC3_HIGHSLIDE_NEXTTITLE'			=> 'Tjetra (arrow right)',
	'ABBC3_HIGHSLIDE_MOVETITLE'			=> 'Leviz',
	'ABBC3_HIGHSLIDE_MOVETEXT'			=> 'Leviz',
	'ABBC3_HIGHSLIDE_CLOSETEXT'			=> 'Mbyll',
	'ABBC3_HIGHSLIDE_CLOSETITLE'		=> 'Mbyll (esc)',
	'ABBC3_HIGHSLIDE_RESIZETITLE'		=> 'Zvogelo',
	'ABBC3_HIGHSLIDE_PLAYTEXT'			=> 'Play',
	'ABBC3_HIGHSLIDE_PLAYTITLE'			=> 'Play slideshow (spacebar)',
	'ABBC3_HIGHSLIDE_PAUSETEXT'			=> 'Pause',
	'ABBC3_HIGHSLIDE_PAUSETITLE'		=> 'Pause slideshow (spacebar)',
	'ABBC3_HIGHSLIDE_NUMBER'			=> 'Imazhi %1 of %2',
	'ABBC3_HIGHSLIDE_RESTORETITLE'		=> 'Kliko per te mbyllur imazhin, Kliko dhe terhiq per te mbullur. Perdor shigjetat per te levizur.',

// Text to be applied to the helpline & mouseover & help page & Wizard texts
	'BBCODE_STYLES_TIP'			=> 'Keshille: Stili mund ti aplikohet me shpejt tesktit seleksionuar.',

	'ABBC3_ERROR'				=> 'Gabim : ',
	'ABBC3_ERROR_TAG'			=> 'Ndodhi nje gabim ne tag : ',
	'ABBC3_NO_EXAMPLE'			=> 'Ska shembull',

	'ABBC3_ID'					=> 'Shkruaj Identifikuesin :',
	'ABBC3_NOID'				=> 'A shkruajtet identifikimin',
	'ABBC3_LINK'				=> 'Vendos nje link per ',
	'ABBC3_DESC'				=> 'Shkruaj nje pershkrim per ',
	'ABBC3_NAME'				=> 'Pershkrim',
	'ABBC3_NOLINK'				=> 'Ju nuk vendoset nje link ',
	'ABBC3_NODESC'				=> 'Ju nuk shkruajtet nje pershkrim per',
	'ABBC3_WIDTH'				=> 'Shkruaj gjeresin',
	'ABBC3_WIDTH_NOTE'			=> 'Shenim: Kjo vlere mund te shprehet me perqindje',
	'ABBC3_NOWIDTH'				=> 'Ju nuk vendoset gjeresin',
	'ABBC3_HEIGHT'				=> 'Vendos lartesine',
	'ABBC3_HEIGHT_NOTE'			=> 'Shenim: Kjo vlere mund te shprehet me perqindje',
	'ABBC3_NOHEIGHT'			=> 'Ju nuk vendoset lartesine',

	'ABBC3_NOTE'				=> 'Shenim',
	'ABBC3_EXAMPLE'				=> 'Shembull',
	'ABBC3_EXAMPLES'			=> 'Shembuj',

// bbcodes texts	
	// Font Type Dropdown
	'ABBC3_FONT_MOVER'			=> 'Pamje shkrimit type',
	'ABBC3_FONT_TIP'			=> '[font=Comic Sans MS]text[/font]',
	'ABBC3_FONT_NOTE'			=> 'Shenim: Ju mund te perdorni your own font-family',
	'ABBC3_FONT_VIEW'			=> '<span style="font-family:Comic Sans MS">Ky eshte nje tekst shembull</span>',

	// Font Size Dropdown
	'ABBC3_FONT_GIANT'			=> 'Giant',
	'ABBC3_SIZE_MOVER'			=> 'Font size',
	'ABBC3_SIZE_TIP'			=> '[size=150]tekst large[/size]',
	'ABBC3_SIZE_NOTE'			=> 'Shenim: The value will be interpreted as a percentage',
	'ABBC3_SIZE_VIEW'			=> '<span style="font-size: 150%; line-height: 116%;">Ky eshte nje tekst shembull</span>',

	// Highlight Font Color Dropdown
	'ABBC3_HIGHLIGHT_MOVER'		=> 'tekst highlighted',
	'ABBC3_HIGHLIGHT_TIP'		=> '[highlight=yellow]tekst[/highlight]',
	'ABBC3_HIGHLIGHT_NOTE'		=> 'Shenim: Ju mund te perdorni html colors (color=#FF0000 or color=red)',
	'ABBC3_HIGHLIGHT_VIEW'		=> '<span style="background-color: yellow;">Ky eshte nje tekst shembull</span>',

	// Font Color Dropdown
	'ABBC3_COLOR_MOVER'			=> 'Font colour',
	'ABBC3_COLOR_TIP'			=> '[color=red]tekst[/color]',
	'ABBC3_COLOR_NOTE'			=> 'Shenim: Ju mund te perdorni html colors (color=#FF0000 or color=red)',
	'ABBC3_COLOR_VIEW'			=> '<span style="color:red">Ky eshte nje tekst shembull</span>',

	// Cut selected tekst
	'ABBC3_CUT_MOVER'			=> 'Removes selected tekst',
	// Copy selected tekst
	'ABBC3_COPY_MOVER'			=> 'Kopjo selected tekst',
	// Paste previously copy tekst
	'ABBC3_PASTE_MOVER'			=> 'Paste copied tekst',
	'ABBC3_PASTE_ERROR'			=> 'Please, first copy a tekst, them paste it ',
	// Remove BBCode (Removes all BBCode tags from selected tekst)
	'ABBC3_PLAIN_MOVER'			=> 'Remove labels BBCodes the selected tekst',
	'ABBC3_NOSELECT_ERROR'		=> 'Please, first select the tekst ',

	// Code
	'ABBC3_CODE_MOVER'			=> 'Codi',
	'ABBC3_CODE_TIP'			=> '[code]codi[/code]',
	'ABBC3_CODE_VIEW'			=> '<dl class="codebox"><dt>'. $lang['CODE'] .': <a href="#" onclick="selectCode(this); return false;">'. $lang['SELECT_ALL_CODE'] .'</a></dt><dd><code>Ky eshte nje tekst shembull</code></dd></dl>',

	// Quote
	'ABBC3_QUOTE_MOVER'			=> 'Cito',
	'ABBC3_QUOTE_TIP'			=> '[quote]tekst[/quote] or [quote=\"member\"]tekst[/quote]',
	'ABBC3_QUOTE_VIEW'			=> '<blockquote><div><cite>member '. $lang['WROTE'] .':</cite>Ky eshte nje tekst shembull</div></blockquote>',

	// html
	'ABBC3_HTML_MOVER'			=> 'HTML code',
	'ABBC3_HTML_TIP'			=> '[html]xhtml code[/html]',
//	'ABBC3_HTML_EXAMPLE'		=> '[html]&lt;a href=\"http://www.mssti.com/phpbb3\"&gt;link to mssti&lt;/a&gt;[/html]',
	'ABBC3_HTML_VIEW'			=> '<a href="http://www.mssti.com/phpbb3">link to mssti</a>',

	// Spoiler
	'ABBC3_SPOIL_MOVER'			=> 'Spoiler tekst',
	'ABBC3_SPOIL_TIP'			=> '[spoil]tekst[/spoil]',
	'ABBC3_SPOIL_VIEW'			=> '<div class="spoilwrapper"><div class="spoiltitle"><input class="btnspoil" type="button" value="Show Spoiler" onclick="javascript:if (this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display != \'\') { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'\'; this.innerText = \'\'; this.value = \'Hide Spoiler\'; } else { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'none\'; this.innerText = \'\'; this.value = \'Show Spoiler\'; }" onfocus="this.blur();" /></div><div class="spoilcontent"><div style="display: none;">Ky eshte nje tekst shembull</div></div></div>',
	'SPOILER_SHOW'				=> 'Show Spoiler',
	'SPOILER_HIDE'				=> 'Hide Spoiler',

	// Moderator tag
	'ABBC3_MOD_MOVER'			=> 'Mesazh Moderatori',
	'ABBC3_MOD_TIP'				=> '[mod=name]tekst[/mod]',
	'ABBC3_MOD_VIEW'			=> '<table id="ModTable" width="100%" cellspacing="5" cellpadding="0" border="0" align="center"><tr><td class="row1" rowspan="2" align="middle" vAlign="center" width="1%"><span class="exclamation" title="Moderator warning" style="font-size:25px">&nbsp;!&nbsp;</span></td><td class="row2"><span class="genmed"><b>Mod Name:</b></span></td></tr><tr><td>Ky eshte nje tekst shembull</td></tr></table>',

	// Off topic tag
	'OFFTOPIC'					=> 'Offtopic',
	'ABBC3_OFFTOPIC_MOVER'		=> 'Insert Off topic tekst',
	'ABBC3_OFFTOPIC_TIP'		=> '[offtopic]tekst[/offtopic]',
	'ABBC3_OFFTOPIC_VIEW'		=> '<i><b><font color="#114499">Offtopic: </font></b><br/><font color="#2277DD">Ky eshte nje tekst shembull</font></i>',

	// NFO
	'ABBC3_NFO_MOVER'			=> 'NFO tekst (Better on Internet explorer)',
	'ABBC3_NFO_TIP'				=> '[nfo]NFO tekst[/nfo]',
	'ABBC3_NFO_VIEW'			=> '<table cellspacing="0" cellpadding="0" border="0" ><tr><td><span class="genmed"><b>NFO:</b></span></td></tr><tr><td class="nfo">' . str_replace(" ", "&nbsp;", '    ≤ €€€€ €€±±∞                                  ∞∞∞±±±±≤≤≤€€€€€€€€€€€  €   €€ €€€') . '</td></tr></table>',

	// Justify Align
	'ABBC3_ALIGNJUSTIFY_MOVER'	=> 'tekst justified',
	'ABBC3_ALIGNJUSTIFY_TIP'	=> '[align=justify]tekst[/align]',
	'ABBC3_ALIGNJUSTIFY_VIEW'	=> '<div style="text-align:justify">This is <br/>a sample tekst</div>',

	// Right Align
	'ABBC3_ALIGNRIGHT_MOVER'	=> 'tekst right aligned',
	'ABBC3_ALIGNRIGHT_TIP'		=> '[align=right]tekst[/align]',
	'ABBC3_ALIGNRIGHT_VIEW'		=> '<div style="text-align:right">Ky eshte nje tekst shembull</div>',

	// Center Align
	'ABBC3_ALIGNCENTER_MOVER'	=> 'Text aligned to the center',
	'ABBC3_ALIGNCENTER_TIP'		=> '[align=center]text[/align]',
	'ABBC3_ALIGNCENTER_VIEW'	=> '<div style="text-align:center">This is a sample text</div>',

	// Left Align
	'ABBC3_ALIGNLEFT_MOVER'		=> 'tekst left aligned',
	'ABBC3_ALIGNLEFT_TIP'		=> '[align=left]tekst[/align]',
	'ABBC3_ALIGNLEFT_VIEW'		=> '<div style="text-left:justify">Ky eshte nje tekst shembull</div>',

	// Preformat
	'ABBC3_PRE_MOVER'			=> 'Text preformatted',
	'ABBC3_PRE_TIP'				=> '[pre]tekst[/pre]',
	'ABBC3_PRE_VIEW'			=> '<pre>Ky eshte nje tekst shembull</pre>',

	// Tab
	'ABBC3_TAB_MOVER'			=> 'Creates a normal indent',
	'ABBC3_TAB_TIP'				=> '[tab=nn]',
	'ABBC3_TAB_NOTE'			=> 'Enter a number that will be a margin measured in pixels.',
	'ABBC3_TAB_VIEW'			=> '<span style="margin-left:20px;"></span>Ky eshte nje tekst shembull',

	// Superscript
	'ABBC3_SUP_MOVER'			=> 'Sets the tekst as superscripts',
	'ABBC3_SUP_TIP'				=> '[sup]tekst[/sup]',
	'ABBC3_SUP_VIEW'			=> '<sup>Ky eshte nje tekst shembull</sup>',

	// Subscript
	'ABBC3_SUB_MOVER'			=> 'Sets the tekst as subscripts',
	'ABBC3_SUB_TIP'				=> '[sub]tekst[/sub]',
	'ABBC3_SUB_VIEW'			=> '<sub>Ky eshte nje tekst shembull</sub>',

	// Bold
	'ABBC3_B_MOVER'				=> 'tekst in bold',
	'ABBC3_B_TIP'				=> '[b]tekst[/b]',
	'ABBC3_B_VIEW'				=> '<strong>Ky eshte nje tekst shembull</strong>',

	// Italic
	'ABBC3_I_MOVER'				=> 'tekst in italics',
	'ABBC3_I_TIP'				=> '[i]tekst[/i]',
	'ABBC3_I_VIEW'				=> '<em>Ky eshte nje tekst shembull</em>',

	// Underline
	'ABBC3_U_MOVER'				=> 'tekst underlined',
	'ABBC3_U_TIP'				=> '[u]tekst[/u]',
	'ABBC3_U_VIEW'				=> '<span style="text-decoration: underline">Ky eshte nje tekst shembull</span>',

	// Strikethrough
	'ABBC3_S_MOVER'				=> 'tekst strikethrough',
	'ABBC3_S_TIP'				=> '[s]tekst[/s]',
	'ABBC3_S_VIEW'				=> '<span style="text-decoration: line-through;">Ky eshte nje tekst shembull</span>',

	// tekst Fade
	'ABBC3_FADE_MOVER'			=> 'tekst fadein fadeout',
	'ABBC3_FADE_TIP'			=> '[fade]tekst[/fade]',
	'ABBC3_FADE_VIEW'			=> '<span class="fade_link">Ky eshte nje tekst shembull</span> <script type="text/javascript">fade_ontimer()</script>',

	// Text Gradient
	'ABBC3_GRAD_MOVER'			=> 'tekst gradient',
	'ABBC3_GRAD_TIP'			=> '',
	'ABBC3_GRAD_VIEW'			=> '<span style="color: #FF0000">T</span><span style="color: #F2000D">h</span><span style="color: #E6001A">i</span><span style="color: #D90026">s</span> <span style="color: #BF0040">i</span><span style="color: #B3004D">s</span> <span style="color: #990066">a</span> <span style="color: #800080">s</span><span style="color: #73008C">i</span><span style="color: #660099">m</span><span style="color: #5900A6">p</span><span style="color: #4D00B3">l</span><span style="color: #4000BF">e</span> <span style="color: #2600D9">t</span><span style="color: #1A00E6">e</span><span style="color: #0D00F2">x</span><span style="color: #0000FF">t</span>',
	'ABBC3_GRAD_MIN_ERROR'		=> 'Please, first select the tekst : ',
	'ABBC3_GRAD_MAX_ERROR'		=> 'Only allows less than 120 characters : ',

	// Glow text
	'ABBC3_GLOW_MOVER'			=> 'Glow tekst (Only Internet explorer)',
	'ABBC3_GLOW_TIP'			=> '[glow=(color)]tekst[/glow]',
	'ABBC3_GLOW_VIEW'			=> '<div style="filter:Glow(color=red,strength=4);color:#ffffff;height:110%">Ky eshte nje tekst shembull</div>',

	// Shadow text
	'ABBC3_SHADOW_MOVER'		=> 'Shadow tekst (Only Internet explorer)',
	'ABBC3_SHADOW_TIP'			=> '[shadow=(color)]tekst[/shadow]',
	'ABBC3_SHADOW_VIEW'			=> '<div style="filter:shadow(color=black,strength=4);color:blue;height:110%">Ky eshte nje tekst shembull</div>',

	// Dropshadow tekst
	'ABBC3_DROPSHADOW_MOVER'	=> 'Dropshadow tekst (Only Internet explorer)',
	'ABBC3_DROPSHADOW_TIP'		=> '[dropshadow=(color)]tekst[/dropshadow]',
	'ABBC3_DROPSHADOW_VIEW'		=> '<div style="filter:dropshadow(color=#999999,strength=4);color:blue;height:110%">Ky eshte nje tekst shembull</div>',

	// Blur tekst
	'ABBC3_BLUR_MOVER'			=> 'Blur tekst (Only Internet explorer)',
	'ABBC3_BLUR_TIP'			=> '[blur=(color)]tekst[/blur]',
	'ABBC3_BLUR_VIEW'			=> '<div style="filter:Blur(strength=7);color:blue;height:110%">Ky eshte nje tekst shembull</div>',

	// Wave tekst
	'ABBC3_WAVE_MOVER'			=> 'Wave tekst (Only Internet explorer)',
	'ABBC3_WAVE_TIP'			=> '[wave=(color)]tekst[/wave]',
	'ABBC3_WAVE_VIEW'			=> '<div style="filter:Wave(strength=2);color:blue;height:110%">Ky eshte nje tekst shembull</div>',

	// Unordered List
	'ABBC3_LISTB_MOVER'			=> 'Bullet list',
	'ABBC3_LISTB_TIP'			=> '[list]tekst[/list]',
	'ABBC3_LISTB_NOTE'			=> 'Shenim: Use [*] to create bullets',
	'ABBC3_LISTB_VIEW'			=> '<ul><li>Item1</li><li>Item2</li><li>Item3</li></ul>',

	// Ordered List
	'ABBC3_LISTO_MOVER'			=> 'Ordered list',
	'ABBC3_LISTO_TIP'			=> '[list=1|a]tekst[/list]',
	'ABBC3_LISTO_NOTE'			=> 'Shenim: Use [*] to create bullets',
	'ABBC3_LISTO_VIEW'			=> '<ol style="list-style-type: lower-alpha"><li>Item1</li><li>Item2</li><li>Item3</li></ol>',

	// List item
	'ABBC3_LISTITEM_MOVER'		=> 'List item',
	'ABBC3_LISTITEM_TIP'		=> '[*]',
	'ABBC3_LISTITEM_NOTE'		=> 'Shenim: Create bullets inside list',

	// Line Break
	'ABBC3_HR_MOVER'			=> 'Header',
	'ABBC3_HR_TIP'				=> '[hr]',
	'ABBC3_HR_NOTE'				=> 'Shenim: Creates a header line row to seperate tekst',
	'ABBC3_HR_VIEW'				=> '<hr noshade color="#000000" size="1px">',

	// Message Box tekst direction Left to right
	'ABBC3_DIRRTL_MOVER'		=> 'tekst with reading right-to-left',
	'ABBC3_DIRRTL_TIP'			=> '[dir=rtl]tekst[/dir]',
	'ABBC3_DIRRTL_VIEW'			=> '<BDO dir="rtl">Ky eshte nje tekst shembull</BDO>',

	// Message Box tekst direction right to Left
	'ABBC3_DIRLTR_MOVER'		=> 'tekst with reading left-to-right',
	'ABBC3_DIRLTR_TIP'			=> '[dir=ltr]tekst[/dir]',
	'ABBC3_DIRLTR_VIEW'			=> '<BDO dir="ltr">Ky eshte nje tekst shembull</BDO>',

	// Marquee Down
	'ABBC3_MARQDOWN_MOVER'		=> 'Scrolling tekst down',
	'ABBC3_MARQDOWN_TIP'		=> '[marq=down]tekst[/marq]',
	'ABBC3_MARQDOWN_VIEW'		=> '<marquee direction="down" scrolldelay="120" height="80px">Ky eshte nje tekst shembull</marquee>',

	// Marquee Up
	'ABBC3_MARQUP_MOVER'		=> 'Scrolling tekst upwards',
	'ABBC3_MARQUP_TIP'			=> '[marq=up]tekst[/marq]',
	'ABBC3_MARQUP_VIEW'			=> '<marquee direction="up" scrolldelay="120" height="80px">Ky eshte nje tekst shembull</marquee>',

	// Marquee Right
	'ABBC3_MARQRIGHT_MOVER'		=> 'Displacement tekst to the right',
	'ABBC3_MARQRIGHT_TIP'		=> '[marq=right]tekst[/marq]',
	'ABBC3_MARQRIGHT_VIEW'		=> '<marquee direction="right" scrolldelay="120">Ky eshte nje tekst shembull</marquee>',

	// Marquee Left
	'ABBC3_MARQLEFT_MOVER'		=> 'Displacement tekst to the left',
	'ABBC3_MARQLEFT_TIP'		=> '[marq=left]tekst[/marq]',
	'ABBC3_MARQLEFT_VIEW'		=> '<marquee direction="left" scrolldelay="120">Ky eshte nje tekst shembull</marquee>',

	// Table row cell wizard
	'ABBC3_TABLE_MOVER'			=> 'Insert a table',
	'ABBC3_TABLE_TIP'			=> '[table=(ccs style)][tr=(ccs style)][td=(ccs style)]tekst[/td][/tr][/table]',
	'ABBC3_TABLE_VIEW'			=> '<table style="width:50%;border:1px solid #cccccc;" cellspacing="0" cellpadding="0"><tr style="tekst-align:center;"><td style="border:1px solid #cccccc;">Ky eshte nje tekst shembull</td></tr></table>',

	'ABBC3_TABLE_STYLE'			=> 'Enter style table',
	'ABBC3_TABLE_EXAMPLE'		=> 'width:50%;border:1px solid #cccccc;',

	'ABBC3_ROW_NUMBER'			=> 'Enter number of rows',
	'ABBC3_ROW_ERROR'			=> 'You did not write the number of rows',
	'ABBC3_ROW_STYLE'			=> 'Enter style rows',
	'ABBC3_ROW_EXAMPLE'			=> 'tekst-align:center;',

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

	// Rapid share checker
	'ABBC3_RAPIDSHARE_TAG'		=> 'rapidshare',
	'ABBC3_RAPIDSHARE_MOVER'	=> 'Insert a file from rapidshare',
	'ABBC3_RAPIDSHARE_TIP'		=> '[rapidshare]http://rapidshare.com/files/...[/rapidshare]',
	'ABBC3_RAPIDSHARE_EXAMPLE'	=> 'http://rapidshare.com/files/86587996/ABBC3_v108.zip.html',
	'ABBC3_RAPIDSHARE_VIEW'		=> '<a href="http://rapidshare.com/files/86587996/ABBC3_v108.zip.html" >http://rapidshare.com/files/86587996/ABBC3_v108.zip.html</a> <font color="green" size="4" >File not found !</font><br />',
	'ABBC3_RAPIDSHARE_GOOD'		=> 'File found on server !',
	'ABBC3_RAPIDSHARE_WRONG'	=> 'File not found !',

	// testlink
	'ABBC3_CURL_ERROR'			=> '<strong>Error : </strong> Sorry but it appears that CURL is not loaded, Please install it to use this function.',
	'ABBC3_TESTLINK_TAG'		=> 'link checker',
	'ABBC3_TESTLINK_MOVER'		=> 'Insert a file stored on public server',
	'ABBC3_TESTLINK_TIP'		=> '[testlink]http://rapidshare.com/files/...[/testlink]',
	'ABBC3_TESTLINK_NOTE'		=> 'Valid servers:rapidshare,megaupload,megarotic,depositfiles,megashares .',
	'ABBC3_TESTLINK_EXAMPLE'	=> 'http://rapidshare.com/files/86587996/ABBC3_v108.zip.html',
	'ABBC3_TESTLINK_VIEW'		=> '<dl class="testlink"><dd><font color="red" size="4" >X</font>&nbsp;<a href="http://rapidshare.com/files/86587996/ABBC3_v108.zip.html" >http://rapidshare.com/files/86587996/ABBC3_v108.zip.html</a><br /></dd></dl>',
	'ABBC3_TESTLINK_GOOD'		=> 'File found on server !',
	'ABBC3_TESTLINK_WRONG'		=> 'File not found !',

	// Click counter
	'ABBC3_CLICK_TAG'			=> 'Kliko',
	'ABBC3_CLICK_MOVER'			=> 'Insert Clicks Counter',
	'ABBC3_CLICK_TIP'			=> '[click]http://...[/click] or [click=http://...]Name Web[/click] or [click][img]http://...[/img][/click]',
	'ABBC3_CLICK_EXAMPLE' 		=> 'http://www.google.com ' . ' ' . 'http://www.google.com/intl/en_com/images/logo_plain.png' ,
	'ABBC3_CLICK_VIEW'			=> '<a href="./click.php?id=1" >http://www.phpbb.com</a> ( Clicked 1 time )<br />',
	'ABBC3_CLICK_TIME'			=> '( Clicked %d time )',
	'ABBC3_CLICK_TIMES'			=> '( Clicked %d times )',

	// Search tag
	'ABBC3_SEARCH_MOVER'		=> 'Insert search word',
	'ABBC3_SEARCH_TIP'			=> '[search(=(msn|yahoo|google))]tekst[/search]',
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
//	'ABBC3_STAGE6_MOVER'		=> 'Vendos video nga Stage6', // from http://www.stage6.com/
//	'ABBC3_STAGE6_TIP'			=> '[stage6]Stage6 ID[/stage6]',
//	'ABBC3_STAGE6_EXAMPLE'		=> '2068715',
//	'ABBC3_STAGE6_VIEW'			=> '<object  classid="clsid:67DABFBF-D0AB-41fa-9C46-CC0F21721616" codebase="http://download.divx.com/player/DivXBrowserPlugin.cab" width="200" height="100" ><param name="src" value="http://video.stage6.com/2068715/.divx" /><param name="autoplay" value="false" /><param name="custommode" value="Stage6" /><param name="showpostplaybackad" value="false" /><embed type="video/divx" src="http://video.stage6.com/2068715/.divx" pluginspage="http://go.divx.com/plugin/download/" showpostplaybackad="false" custommode="Stage6" autoplay="false" width="200" height="100" /></object><br />',

	// Google video Wizard
	'ABBC3_GVIDEO_TAG'			=> 'Google Video',
	'ABBC3_GVIDEO_MOVER'		=> 'Vendos video nga Google',
	'ABBC3_GVIDEO_TIP'			=> '[GVideo]URL video[/GVideo]',
	'ABBC3_GVIDEO_EXAMPLE'		=> 'http://video.google.com/videoplay?docid=-8351924403384451128',
	'ABBC3_GVIDEO_VIEW'			=> '<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0" width="200" height="100"><param name="movie" value="http://video.google.com/googleplayer.swf?docid=-8351924403384451128" /><param name="play" value="false" /><param name="loop" value="false" /><param name="quality" value="high" /><param name="allowScriptAccess" value="never" /><param name="allowNetworking" value="internal" /><embed src="http://video.google.com/googleplayer.swf?docid=-8351924403384451128" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" width="200" height="100" play="false" loop="false" quality="high" allowscriptaccess="never" allownetworking="internal"></embed></object>',

	// Youtube video Wizard
	'ABBC3_YOUTUBE_TAG'			=> 'Youtube Video',
	'ABBC3_YOUTUBE_MOVER'		=> 'Vendos video nga Youtube',
	'ABBC3_YOUTUBE_TIP'			=> '[youtube]URL video[/youtube]',
	'ABBC3_YOUTUBE_EXAMPLE'		=> 'http://www.youtube.com/watch?v=TA4hm97m494',
	'ABBC3_YOUTUBE_VIEW'		=> '<object width="200" height="100"><param name="movie" value="http://www.youtube.com/v/TA4hm97m494" /><param name="wmode" value="transparent" /><embed src="http://www.youtube.com/v/TA4hm97m494" type="application/x-shockwave-flash" wmode="transparent" width="200" height="100"></embed></object>',

	// Veoh video
	'ABBC3_VEOH_TAG'			=> 'Veoh',
	'ABBC3_VEOH_MOVER'			=> 'Vendos video nga Veoh',
	'ABBC3_VEOH_TIP'			=> '[veoh]URL video[/veoh]',
	'ABBC3_VEOH_EXAMPLE'		=> 'http://www.veoh.com/videos/v1409404EqT5SJjM',
	'ABBC3_VEOH_VIEW'			=> '<embed src="http://www.veoh.com/videodetails2.swf?permalinkId=v1409404EqT5SJjM&id=anonymous&player=videodetailsembedded&videoAutoPlay=0" allowFullScreen="true" width="200" height="100" bgcolor="#000000" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>',

	// Collegehumor video
	'ABBC3_COLLEGEHOMOR_TAG'	=> 'collegehumor',
	'ABBC3_COLLEGEHUMOR_MOVER'	=> 'Vendos video nga collegehumor',
	'ABBC3_COLLEGEHUMOR_TIP'	=> '[collegehumor]collegehumor video URL[/collegehumor]',
	'ABBC3_COLLEGEHUMOR_EXAMPLE'=> 'http://www.collegehumor.com/video:1802097',
	'ABBC3_COLLEGEHUMOR_VIEW'	=> '<object type="application/x-shockwave-flash" data="http://www.collegehumor.com/moogaloop/moogaloop.swf?clip_id=1802097&fullscreen=1" width="200" height="100" ><param name="allowfullscreen" value="true" /><param name="movie" quality="best" value="http://www.collegehumor.com/moogaloop/moogaloop.swf?clip_id=1802097&fullscreen=1" /></object>',

	// Dailymotion video
	'ABBC3_DM_MOVER'			=> 'Vendos video nga dailymotion', // from http://www.dailymotion.com/
	'ABBC3_DM_TIP'				=> '[dm]Dailymotion ID[/dm]',
	'ABBC3_DM_EXAMPLE'			=> 'http://www.dailymotion.com/swf/x3hm7o',
	'ABBC3_DM_VIEW'				=> '<object width="200" height="100"><param name="movie" value="http://www.dailymotion.com/swf/x3hm7o" /><param name="allowFullScreen" value="true" /><param name="allowScriptAccess" value="never" /><embed src="http://www.dailymotion.com/swf/x3hm7o" type="application/x-shockwave-flash" width="200" height="100" allowFullScreen="true" allowScriptAccess="never"></embed></object>',

	// Gamespot video
	'ABBC3_GAMESPOT_MOVER'		=> 'Vendos video nga Gamespot',
	'ABBC3_GAMESPOT_TIP'		=> '[gamespot]Gamespot video URL[gamespot]',
	'ABBC3_GAMESPOT_EXAMPLE'	=> 'http://www.gamespot.com/video/944074/6185798/tom-clancys-rainbow-six-vegas-2-official-trailer-3',
	'ABBC3_GAMESPOT_VIEW'		=> '<embed id="mymovie" width="200" height="100" flashvars="paramsURI=http%3A%2F%2Fwww%2Egamespot%2Ecom%2Fpages%2Fvideo%5Fplayer%2Fproteus%5Fxml%2Ephp%3Fadseg%3D%26adgrp%3D%26sid%3D6185798%26pid%3D944074%26mb%3D%26onid%3D%26nc%3D1202626246593%26embedded%3D1%26showWatermark%3D0%26autoPlay%3D0" allowfullscreen="true" allowscriptaccess="never" quality="high" name="mymovie" src="http://image.com.com/gamespot/images/cne_flash/production/media_player/proteus/gs/proteus_embed.swf" type="application/x-shockwave-flash"/>',

	// Gametrailers video
	'ABBC3_GAMETRAILERS_MOVER'	=> 'Vendos video nga Gametrailers',
	'ABBC3_GAMETRAILERS_TIP'	=> '[gametrailers]Gametrailers video URL[/gametrailers]',
	'ABBC3_GAMETRAILERS_EXAMPLE'=> 'http://www.gametrailers.com/player/30461.html',
	'ABBC3_GAMETRAILERS_VIEW'	=> '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"  codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" id="gtembed" width="200" height="100"><param name="allowScriptAccess" value="never" /><param name="allowFullScreen" value="true" /><param name="movie" value="http://www.gametrailers.com/remote_wrap.php?mid=30461" /><param name="quality" value="high" /><embed src="http://www.gametrailers.com/remote_wrap.php?mid=30461" swLiveConnect="true" name="gtembed" align="middle" allowScriptAccess="never" allowFullScreen="true" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="200" height="100"></embed></object>',

	// IGN video
	'ABBC3_IGNVIDEO_MOVER'		=> 'Vendos video nga Ign',
	'ABBC3_IGNVIDEO_TIP'		=> '[ignvideo]ING video URL[/ignvideo]',
	'ABBC3_IGNVIDEO_EXAMPLE'	=> 'object_ID=967025&downloadURL=http://tvmovies.ign.com/tv/video/article/850/850894/knightrider_trailer_020808_flvlow.flv',
	'ABBC3_IGNVIDEO_VIEW'		=> '<embed src="http://videomedia.ign.com/ev/ev.swf" flashvars="object_ID=967025&downloadURL=http://tvmovies.ign.com/tv/video/article/850/850894/knightrider_trailer_020808_flvlow.flv" type="application/x-shockwave-flash" width="200" height="100" ></embed>',

	// LiveLeak video
	'ABBC3_LIVELEAK_MOVER'		=> 'Vendos video nga Liveleak',
	'ABBC3_LIVELEAK_TIP'		=> '[liveleak]Liveleak video URL[/liveleak]',
	'ABBC3_LIVELEAK_EXAMPLE'	=> 'http://www.liveleak.com/view?i=413_1202590393',
	'ABBC3_LIVELEAK_VIEW'		=> '<object type="application/x-shockwave-flash" width="200" height="100" wmode="transparent" data="http://www.liveleak.com/player.swf?autostart=false&token=i=413_1202590393"><param name="movie" value="http://www.liveleak.com/player.swf?autostart=false&token=$1" /><param name="wmode" value="transparent" /><param name="quality" value="high" /></object>',

	// Custom BBcodes
));

?>