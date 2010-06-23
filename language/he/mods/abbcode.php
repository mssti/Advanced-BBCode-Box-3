<?php
/**
* @package: phpBB3 :: Advanced BBCode box 3 -> language [he][hebrew]
* @version: $Id: abbcode.php, v 1.0.10 2008/08/01 08:08:01 leviatan21 Exp $
* @copyright: leviatan21 < info@mssti.com > (Gabriel) http://www.mssti.com/phpbb3/
* @license: http://opensource.org/licenses/gpl-license.php GNU Public License 
* @author: idanbe - http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=535715
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
	'ABBC3_HELP_TITLE'			=> 'דף עזרה',
	'ABBC3_HELP_DESC'			=> 'תי�?ור',
	'ABBC3_HELP_WRITE'			=> 'כתוב �?ת העיצוב שלך',
	'ABBC3_HELP_VIEW'			=> 'מציג �?ת העיצובי�? שלנו',
	'ABBC3_HELP_ABOUT'			=> 'Advanced BBCode Box 3 נוצר על ידי <a href="http://www.mssti.com/phpbb3">mssti</a>',
	'ABBC3_HELP_ALT'			=> 'Advanced BBCode Box 3 (aka ABBC3)',

// Image Resizer JS
	'ABBC3_RESIZE_SMALL'		=> 'לחץ כדי לר�?ות �?ת התמונה בגודלה המקורי.',
	'ABBC3_RESIZE_ZOOM_IN'		=> 'זו�? פנימה (רזולוציה מקורית: %1$s x %2$s)',
	'ABBC3_RESIZE_CLOSE'		=> 'סגור',
	'ABBC3_RESIZE_ZOOM_OUT'		=> 'זו�? החוצה',
	'ABBC3_RESIZE_FILESIZE'		=> 'תמונה זו הוקטנה. לחץ כדי לר�?ות �?ת התמונה בגודלה המקורי. גודל התמונה המקורית הו�? %1$sx%2$s בנפח %3$sKB.',
	'ABBC3_RESIZE_NOFILESIZE'	=> 'תמונה זו הוקטנה. לחץ כדי לר�?ות �?ת התמונה בגודלה המקורי. גודל התמונה המקורית הו�? %1$sx%2$s.',
	'ABBC3_RESIZE_FULLSIZE'		=> 'לחץ כדי לצפות בתמונה הקטנה.',
	'ABBC3_RESIZE_NUMBER'		=> 'תמונה %1$s מ %2$s',
	'ABBC3_RESIZE_PLAY'			=> 'הפעל מצגת',
	'ABBC3_RESIZE_PAUSE'		=> 'השהה מצגת',

// Highslide JS - http://vikjavev.no/highslide/forum/viewtopic.php?t=2119
	'ABBC3_HIGHSLIDE_LOADINGTEXT'		=> 'טוען...',
	'ABBC3_HIGHSLIDE_LOADINGTITLE'		=> 'לחץ לביטול',
	'ABBC3_HIGHSLIDE_FOCUSTITLE'		=> 'לחץ להבי�? לקדימה',
	'ABBC3_HIGHSLIDE_FULLEXPANDTITLE'	=> 'הרחב לגודל �?מיתי',
	'ABBC3_HIGHSLIDE_FULLEXPANDTEXT'	=> 'גודל מל�?',
	'ABBC3_HIGHSLIDE_CREDITSTEXT'		=> 'מתוחזק ע"י <i>Highslide JS</i>',
	'ABBC3_HIGHSLIDE_CREDITSTITLE'		=> 'עבור ל�?תר הבית של Highslide JS',
	'ABBC3_HIGHSLIDE_PREVIOUSTEXT'		=> 'הקוד�?',
	'ABBC3_HIGHSLIDE_PREVIOUSTITLE'		=> 'הקוד�? (חץ שמ�?לי)',
	'ABBC3_HIGHSLIDE_NEXTTEXT'			=> 'הב�?',
	'ABBC3_HIGHSLIDE_NEXTTITLE'			=> 'הב�? (חץ ימני)',
	'ABBC3_HIGHSLIDE_MOVETITLE'			=> 'העבר',
	'ABBC3_HIGHSLIDE_MOVETEXT'			=> 'העבר',
	'ABBC3_HIGHSLIDE_CLOSETEXT'			=> 'סגור',
	'ABBC3_HIGHSLIDE_CLOSETITLE'		=> 'סגור (לחצן esc)',
	'ABBC3_HIGHSLIDE_RESIZETITLE'		=> 'שינוי גודל',
	'ABBC3_HIGHSLIDE_PLAYTEXT'			=> 'הפעל',
	'ABBC3_HIGHSLIDE_PLAYTITLE'			=> 'הפעל מצגת (לחצן spacebar)',
	'ABBC3_HIGHSLIDE_PAUSETEXT'			=> 'השהה',
	'ABBC3_HIGHSLIDE_PAUSETITLE'		=> 'השהה מצגת (לחצן spacebar)',
	'ABBC3_HIGHSLIDE_NUMBER'			=> 'תמונה %1 מ %2',
	'ABBC3_HIGHSLIDE_RESTORETITLE'		=> 'לחץ כדי לסגור תמונה, לחץ וגרור כדי להזיז. השתמש החצי�? לקוד�? והב�?.',

// Text to be applied to the helpline & mouseover & help page & Wizard texts
	'BBCODE_STYLES_TIP'			=> 'טיפ: עיצובי�? יכולי�? להיות שימושיי�? במהירות לבחירת טקסט.',

	'ABBC3_ERROR'				=> 'שגי�?ה : ',
	'ABBC3_ERROR_TAG'			=> 'שגי�?ת תג ל�? צפויה : ',
	'ABBC3_NO_EXAMPLE'			=> 'דוגמ�? �?ין מידע',

	'ABBC3_ID'					=> 'הכנס מזהה :',
	'ABBC3_NOID'				=> 'ל�? הכנס מזהה',
	'ABBC3_LINK'				=> 'הכנס קישור ל',
	'ABBC3_DESC'				=> 'הכנס תי�?ור ל',
	'ABBC3_NAME'				=> 'תי�?ור',
	'ABBC3_NOLINK'				=> 'ל�? כתבת קישור ל',
	'ABBC3_NODESC'				=> 'ל�? כתבת תי�?ור ל',
	'ABBC3_WIDTH'				=> 'הכנס רוחב',
	'ABBC3_WIDTH_NOTE'			=> 'הערה: הערך יכול להיות מפורש ב�?חוזי�?',
	'ABBC3_NOWIDTH'				=> 'ל�? הכנסת רוחב',
	'ABBC3_HEIGHT'				=> 'הכנס גובה',
	'ABBC3_HEIGHT_NOTE'			=> 'הערה: הערך יכול להיות מפורש ב�?חוזי�?',
	'ABBC3_NOHEIGHT'			=> 'ל�? הכנסת גובה',

	'ABBC3_NOTE'				=> 'הערה',
	'ABBC3_EXAMPLE'				=> 'דוגמ�?',
	'ABBC3_EXAMPLES'			=> 'דוגמ�?ות',

// bbcodes texts	
	// Font Type Dropdown
	'ABBC3_FONT_MOVER'			=> 'סוג גופן',
	'ABBC3_FONT_TIP'			=> '[font=Comic Sans MS]טקסט[/font]',
	'ABBC3_FONT_NOTE'			=> 'הערה: �?תה יכול להשתמש בפונטי�? שלך.',
	'ABBC3_FONT_VIEW'			=> '<span style="font-family:Comic Sans MS">זהו טקסט הדגמה</span>',

	// Font Size Dropdown
	'ABBC3_FONT_GIANT'			=> 'ענק',
	'ABBC3_SIZE_MOVER'			=> 'גודל גופן',
	'ABBC3_SIZE_TIP'			=> '[size=150]טקסט ענק[/size]',
	'ABBC3_SIZE_NOTE'			=> 'הערה: הערך מתו�?ר ב�?חוזי�?',
	'ABBC3_SIZE_VIEW'			=> '<span style="font-size: 150%; line-height: 116%;">זהו טקסט הדגמה</span>',
	
	// Highlight Font Color Dropdown
	'ABBC3_HIGHLIGHT_MOVER'		=> 'טקסט מובלט',
	'ABBC3_HIGHLIGHT_TIP'		=> '[highlight=yellow]טקסט[/highlight]',
	'ABBC3_HIGHLIGHT_NOTE'		=> 'הערה: �?תה יכול להשתמש ג�? בקוד צבע (color=#FF0000 �?ו color=red)',
	'ABBC3_HIGHLIGHT_VIEW'		=> '<span style="background-color: yellow;">זהו טקסט הדגמה</span>',

	// Font Color Dropdown
	'ABBC3_COLOR_MOVER'			=> 'צבע גופן',
	'ABBC3_COLOR_TIP'			=> '[color=red]טקסט[/color]',
	'ABBC3_COLOR_NOTE'			=> 'הערה: �?תה יכול להשתמש ג�? בקוד צבע (color=#FF0000 �?ו color=red)',
	'ABBC3_COLOR_VIEW'			=> '<span style="color:red">זהו טקסט הדגמה</span>',
	
	// Cut selected text
	'ABBC3_CUT_MOVER'			=> 'מוחק טקסט שנבחר',
	// Copy selected text
	'ABBC3_COPY_MOVER'			=> 'העתק טקסט שנבחר',
	// Paste previously copy text
	'ABBC3_PASTE_MOVER'			=> 'הדבק טקסט שהועתק',
	'ABBC3_PASTE_ERROR'			=> 'תחילה העתק טקסט. ל�?חר מכן תוכל להדביקו ',
	// Remove BBCode (Removes all BBCode tags from selected text)
	'ABBC3_PLAIN_MOVER'			=> 'מסיר �?ת כל התגי�? מהטקסט שנבחר',
	'ABBC3_NOSELECT_ERROR'		=> 'תחילה בחר טקסט לפעולה ',

	// Code
	'ABBC3_CODE_MOVER'			=> 'קוד',
	'ABBC3_CODE_TIP'			=> '[code]קטע קוד[/code]',
	'ABBC3_CODE_VIEW'			=> '<dl class="codebox"><dt>'. $lang['CODE'] .': <a href="#" onclick="selectCode(this); return false;">'. $lang['SELECT_ALL_CODE'] .'</a></dt><dd><code>זהו טקסט הדגמה</code></dd></dl>',
	
	// Quote
	'ABBC3_QUOTE_MOVER'			=> 'ציטוט',
	'ABBC3_QUOTE_TIP'			=> '[quote]טקסט[/quote] �?ו [quote=\"member\"]טקסט[/quote]',
	'ABBC3_QUOTE_VIEW'			=> '<blockquote><div><cite>member '. $lang['WROTE'] .':</cite>זהו טקסט הדגמה</div></blockquote>',

	// html
	'ABBC3_HTML_MOVER'			=> 'קוד HTML',
	'ABBC3_HTML_TIP'			=> '[html]קוד xhtml[/html]',
//	'ABBC3_HTML_EXAMPLE'		=> '[html]&lt;a href=\"http://www.mssti.com/phpbb3\"&gt;link to mssti&lt;/a&gt;[/html]',
	'ABBC3_HTML_VIEW'			=> '<a href="http://www.mssti.com/phpbb3">קישור ל�?תר MSSTI</a>',

	// Spoiler
	'ABBC3_SPOIL_MOVER'			=> 'ספוילר',
	'ABBC3_SPOIL_TIP'			=> '[spoil]טקסט[/spoil]',
	'ABBC3_SPOIL_VIEW'			=> '<div class="spoilwrapper"><div class="spoiltitle"><input class="btnspoil" type="button" value="Show Spoiler" onclick="javascript:if (this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display != \'\') { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'\'; this.innerText = \'\'; this.value = \'Hide Spoiler\'; } else { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'none\'; this.innerText = \'\'; this.value = \'Show Spoiler\'; }" onfocus="this.blur();" /></div><div class="spoilcontent"><div style="display: none;">זהו טקסט הדגמה</div></div></div>',
	'SPOILER_SHOW'				=> 'הצג',
	'SPOILER_HIDE'				=> 'החב�?',

	// Moderator tag
	'ABBC3_MOD_MOVER'			=> 'הודעת מנהל ר�?שי',
	'ABBC3_MOD_TIP'				=> '[mod=name]טקסט[/mod]',
	'ABBC3_MOD_VIEW'			=> '<table id="ModTable" width="100%" cellspacing="5" cellpadding="0" border="0" align="center"><tr><td class="row1" rowspan="2" align="middle" vAlign="center" width="1%"><span class="exclamation" title="Moderator warning" style="font-size:25px">&nbsp;!&nbsp;</span></td><td class="row2"><span class="genmed"><b>Mod Name:</b></span></td></tr><tr><td>זהו טקסט הדגמה</td></tr></table>',
	
	// Off topic tag
	'OFFTOPIC'					=> 'מחוץ לנוש�?',
	'ABBC3_OFFTOPIC_MOVER'		=> 'הכנס טקסט מחוץ לנוש�? ה�?שכול',
	'ABBC3_OFFTOPIC_TIP'		=> '[offtopic]טקסט[/offtopic]',
	'ABBC3_OFFTOPIC_VIEW'		=> '<i><b><font color="#114499">Offtopic: </font></b><br/><font color="#2277DD">זהו טקסט הדגמה</font></i>',

	// NFO
	'ABBC3_NFO_MOVER'			=> 'טקסט מידע (מוצג כר�?וי ב�?ינטרנט �?קספלורר)',
	'ABBC3_NFO_TIP'				=> '[nfo]טקסט מידע[/nfo]',
	'ABBC3_NFO_VIEW'			=> '<table cellspacing="0" cellpadding="0" border="0" ><tr><td><span class="genmed"><b>NFO:</b></span></td></tr><tr><td class="nfo">' . str_replace(" ", "&nbsp;", '    ² �?�?�?�? �?�?±±°                                  °°°±±±±²²²�?�?�?�?�?�?�?�?�?�?�?  �?   �?�? �?�?�?') . '</td></tr></table>',
	
	// Justify Align
	'ABBC3_ALIGNJUSTIFY_MOVER'	=> 'טקסט מיושר לשתי הצדדי�?',
	'ABBC3_ALIGNJUSTIFY_TIP'	=> '[align=justify]טקסט[/align]',
	'ABBC3_ALIGNJUSTIFY_VIEW'	=> '<div style="text-align:justify">This is <br/>זהו טקסט הדגמה</div>',
	
	// Right Align
	'ABBC3_ALIGNRIGHT_MOVER'	=> 'טקסט מיושר לימין',
	'ABBC3_ALIGNRIGHT_TIP'		=> '[align=right]טקסט[/align]',
	'ABBC3_ALIGNRIGHT_VIEW'		=> '<div style="text-align:right">זהו טקסט הדגמה</div>',
	
	// Center Align
	'ABBC3_ALIGNCENTER_MOVER'	=> 'טקסט ממורכז ל�?מצע',
	'ABBC3_ALIGNCENTER_TIP'		=> '[align=center]טקסט[/align]',
	'ABBC3_ALIGNCENTER_VIEW'	=> '<div style="text-align:center">זהו טקסט הדגמה</div>',
	
	// Left Align
	'ABBC3_ALIGNLEFT_MOVER'		=> 'טקסט מיושר לשמ�?ל',
	'ABBC3_ALIGNLEFT_TIP'		=> '[align=left]טקסט[/align]',
	'ABBC3_ALIGNLEFT_VIEW'		=> '<div style="text-left:justify">זהו טקסט הדגמה</div>',

	// Preformat
	'ABBC3_PRE_MOVER'			=> 'טקסט ל�? רציף',
	'ABBC3_PRE_TIP'				=> '[pre]טקסט[/pre]',
	'ABBC3_PRE_VIEW'			=> '<pre>זהו טקסט הדגמה</pre>',

	// Tab
	'ABBC3_TAB_MOVER'			=> 'Creates a normal indent',
	'ABBC3_TAB_TIP'				=> '[tab=nn]',
	'ABBC3_TAB_NOTE'			=> 'Enter a number that will be a margin measured in pixels.',
	'ABBC3_TAB_VIEW'			=> '<span style="margin-left:20px;"></span>זהו טקסט הדגמה',
	
	// Superscript
	'ABBC3_SUP_MOVER'			=> 'טקסט עילי',
	'ABBC3_SUP_TIP'				=> '[sup]טקסט[/sup]',
	'ABBC3_SUP_VIEW'			=> '<sup>זהו טקסט הדגמה</sup>',

	// Subscript
	'ABBC3_SUB_MOVER'			=> 'טקסט תחתי',
	'ABBC3_SUB_TIP'				=> '[sub]טקסט[/sub]',
	'ABBC3_SUB_VIEW'			=> '<sub>זהו טקסט הדגמה</sub>',
	
	// Bold
	'ABBC3_B_MOVER'				=> 'טקסט מודגש',
	'ABBC3_B_TIP'				=> '[b]טקסט[/b]',
	'ABBC3_B_VIEW'				=> '<strong>זהו טקסט הדגמה</strong>',
	
	// Italic
	'ABBC3_I_MOVER'				=> 'טקסט נטוי',
	'ABBC3_I_TIP'				=> '[i]טקסט[/i]',
	'ABBC3_I_VIEW'				=> '<em>זהו טקסט הדגמה</em>',
	
	// Underline
	'ABBC3_U_MOVER'				=> 'קו מתחת לטקסט',
	'ABBC3_U_TIP'				=> '[u]טקסט[/u]',
	'ABBC3_U_VIEW'				=> '<span style="text-decoration: underline">זהו טקסט הדגמה</span>',

	// Strikethrough
	'ABBC3_S_MOVER'				=> 'קו ב�?מצע הטקסט',
	'ABBC3_S_TIP'				=> '[s]טקסט[/s]',
	'ABBC3_S_VIEW'				=> '<span style="text-decoration: line-through;">זהו טקסט הדגמה</span>',
	
	// Text Fade
	'ABBC3_FADE_MOVER'			=> 'טקסט בגווני �?פור',
	'ABBC3_FADE_TIP'			=> '[fade]טקסט[/fade]',
	'ABBC3_FADE_VIEW'			=> '<span class="fade_link">זהו טקסט הדגמה</span> <script type="text/javascript">fade_ontimer()</script>',
	
	// Text Gradient
	'ABBC3_GRAD_MOVER'			=> 'טקסט צבעוני',
	'ABBC3_GRAD_TIP'			=> '',
	'ABBC3_GRAD_VIEW'			=> '<span style="color: #FF0000">T</span><span style="color: #F2000D">h</span><span style="color: #E6001A">i</span><span style="color: #D90026">s</span> <span style="color: #BF0040">i</span><span style="color: #B3004D">s</span> <span style="color: #990066">a</span> <span style="color: #800080">s</span><span style="color: #73008C">i</span><span style="color: #660099">m</span><span style="color: #5900A6">p</span><span style="color: #4D00B3">l</span><span style="color: #4000BF">e</span> <span style="color: #2600D9">t</span><span style="color: #1A00E6">e</span><span style="color: #0D00F2">x</span><span style="color: #0000FF">t</span>',
	'ABBC3_GRAD_MIN_ERROR'		=> 'תחילה בחר �?ת הטקסט : ',
	'ABBC3_GRAD_MAX_ERROR'		=> 'ניתן לבחור טקסט ב�?ורך של עד 120 תווי�? : ',

	// Glow text
	'ABBC3_GLOW_MOVER'			=> 'טקסט זוהר (פועל רק ב�?ינטרנט �?קספלורר)',
	'ABBC3_GLOW_TIP'			=> '[glow=(color)]טקסט[/glow]',
	'ABBC3_GLOW_VIEW'			=> '<div style="filter:Glow(color=red,strength=4);color:#ffffff;height:110%">זהו טקסט הדגמה</div>',
	
	// Shadow text
	'ABBC3_SHADOW_MOVER'		=> 'טקסט צל (פועל רק ב�?ינטרנט �?קספלורר)',
	'ABBC3_SHADOW_TIP'			=> '[shadow=(color)]טקסט[/shadow]',
	'ABBC3_SHADOW_VIEW'			=> '<div style="filter:shadow(color=black,strength=4);color:blue;height:110%">זהו טקסט הדגמה</div>',
	
	// Dropshadow text
	'ABBC3_DROPSHADOW_MOVER'	=> 'טקסט צל נופל (פועל רק ב�?ינטרנט �?קספלורר)',
	'ABBC3_DROPSHADOW_TIP'		=> '[dropshadow=(color)]טקסט[/dropshadow]',
	'ABBC3_DROPSHADOW_VIEW'		=> '<div style="filter:dropshadow(color=#999999,strength=4);color:blue;height:110%">זהו טקסט הדגמה</div>',

	// Blur text
	'ABBC3_BLUR_MOVER'			=> 'טקסט מטושטש (פועל רק ב�?ינטרנט �?קספלורר)',
	'ABBC3_BLUR_TIP'			=> '[blur=(color)]טקסט[/blur]',
	'ABBC3_BLUR_VIEW'			=> '<div style="filter:Blur(strength=7);color:blue;height:110%">זהו טקסט הדגמה</div>',
	
	// Wave text
	'ABBC3_WAVE_MOVER'			=> 'טקסט גלי (פועל רק ב�?ינטרנט �?קספלורר)',
	'ABBC3_WAVE_TIP'			=> '[wave=(color)]טקסט[/wave]',
	'ABBC3_WAVE_VIEW'			=> '<div style="filter:Wave(strength=2);color:blue;height:110%">זהו טקסט הדגמה</div>',
	
	// Unordered List
	'ABBC3_LISTB_MOVER'			=> 'רשימה',
	'ABBC3_LISTB_TIP'			=> '[list]טקסט[/list]',
	'ABBC3_LISTB_NOTE'			=> 'הערה: כתוב [*] לפני כל שורה',
	'ABBC3_LISTB_VIEW'			=> '<ul><li>�?ברה�?</li><li>יצחק</li><li>יעקב</li></ul>',
	
	// Ordered List
	'ABBC3_LISTO_MOVER'			=> 'רשימה מסודרת',
	'ABBC3_LISTO_TIP'			=> '[list=1|a]טקסט[/list]',
	'ABBC3_LISTO_NOTE'			=> ' הערה: כתוב [*] לפני כל שורה',
	'ABBC3_LISTO_VIEW'			=> '<ol style="list-style-type: lower-alpha"><li>�?ברה�?</li><li>יצחק</li><li>יעקב</li></ol>',

	// List item
	'ABBC3_LISTITEM_MOVER'		=> 'רשימת פריטי�?',
	'ABBC3_LISTITEM_TIP'		=> '[*]',
	'ABBC3_LISTITEM_NOTE'		=> 'הערה: צור שורות ברשימה',
	
	// Line Break
	'ABBC3_HR_MOVER'			=> 'קו חוצץ',
	'ABBC3_HR_TIP'				=> '[hr]',
	'ABBC3_HR_NOTE'				=> 'הערה: הקו החוצץ יווצר מעל השורה שלפניה הוצב התג',
	'ABBC3_HR_VIEW'				=> '<hr noshade color="#000000" size="1px">',
	
	// Message Box text direction Left to right
	'ABBC3_DIRRTL_MOVER'		=> 'כיוון טקסט מימין לשמ�?ל',
	'ABBC3_DIRRTL_TIP'			=> '[dir=rtl]טקסט[/dir]',
	'ABBC3_DIRRTL_VIEW'			=> '<BDO dir="rtl">זהו טקסט הדגמה</BDO>',
	
	// Message Box text direction right to Left
	'ABBC3_DIRLTR_MOVER'		=> 'כיוון טקסט משמ�?ל לימין',
	'ABBC3_DIRLTR_TIP'			=> '[dir=ltr]טקסט[/dir]',
	'ABBC3_DIRLTR_VIEW'			=> '<BDO dir="ltr">זהו טקסט הדגמה</BDO>',

	// Marquee Down
	'ABBC3_MARQDOWN_MOVER'		=> 'טקסט מתגלגל מלמעלה ללמטה',
	'ABBC3_MARQDOWN_TIP'		=> '[marq=down]טקסט[/marq]',
	'ABBC3_MARQDOWN_VIEW'		=> '<marquee direction="down" scrolldelay="120" height="80px">זהו טקסט הדגמה</marquee>',
	
	// Marquee Up
	'ABBC3_MARQUP_MOVER'		=> 'טקסט מתגלגל מלמטה ללמעלה',
	'ABBC3_MARQUP_TIP'			=> '[marq=up]טקסט[/marq]',
	'ABBC3_MARQUP_VIEW'			=> '<marquee direction="up" scrolldelay="120" height="80px">זהו טקסט הדגמה</marquee>',
	
	// Marquee Right
	'ABBC3_MARQRIGHT_MOVER'		=> 'טקסט עובר מימין לשמ�?ל',
	'ABBC3_MARQRIGHT_TIP'		=> '[marq=right]טקסט[/marq]',
	'ABBC3_MARQRIGHT_VIEW'		=> '<marquee direction="right" scrolldelay="120">זהו טקסט הדגמה</marquee>',
	
	// Marquee Left
	'ABBC3_MARQLEFT_MOVER'		=> 'טקסט עובר משמ�?ל לימין',
	'ABBC3_MARQLEFT_TIP'		=> '[marq=left]טקסט[/marq]',
	'ABBC3_MARQLEFT_VIEW'		=> '<marquee direction="left" scrolldelay="120">זהו טקסט הדגמה</marquee>',

	// Table row cell wizard
	'ABBC3_TABLE_MOVER'			=> 'הוסף טבלה',
	'ABBC3_TABLE_TIP'			=> '[table=(ccs style)][tr=(ccs style)][td=(ccs style)]טקסט[/td][/tr][/table]',
	'ABBC3_TABLE_VIEW'			=> '<table style="width:50%;border:1px solid #cccccc;" cellspacing="0" cellpadding="0"><tr style="text-align:center;"><td style="border:1px solid #cccccc;">זהו טקסט הדגמה</td></tr></table>',
	
	'ABBC3_TABLE_STYLE'			=> 'הכנס עיצוב טבלה',
	'ABBC3_TABLE_EXAMPLE'		=> 'width:50%;border:1px solid #ccccc;',
	
	'ABBC3_ROW_NUMBER'			=> 'הכנס �?ת מספר השורות',
	'ABBC3_ROW_ERROR'			=> 'ל�? הכנסת �?ת מספר השורות',
	'ABBC3_ROW_STYLE'			=> 'הכנס �?ת עיצוב השורות',
	'ABBC3_ROW_EXAMPLE'			=> 'text-align:center;',
	
	'ABBC3_CELL_NUMBER'			=> 'הכנס �?ת מספר העמודות',
	'ABBC3_CELL_ERROR'			=> 'ל�? הכנסת �?ת מספר העמודות',
	'ABBC3_CELL_STYLE'			=> 'הכנס �?ת עיצוב העמודות',
	'ABBC3_CELL_EXAMPLE'		=> 'border:1px solid #ccccc;',

	// Simple upload files
	'ABBC3_UPLOAD_TITLE'		=> 'דף העל�?ת קבצי�?',
	'ABBC3_UPLOAD_MOVER'		=> 'העלה קובץ',
	'ABBC3_UPLOAD_LINK'			=> 'זה הקישור לקובץ שהעלת:',
	'ABBC3_UPLOAD_UPLOADED'		=> 'הקובץ  %s נשלח בהצלחה!',
	'ABBC3_UPLOAD_NOT_UPLOADED'	=> 'הקובץ %s ל�? נשלח בהצלחה',
	'ABBC3_UPLOAD_ALREADY'		=> 'הקובץ %s כבר קיי�?, בבקשה חפש �?לטרנטיבה �?חרת לשליחת הקובץ �?ו שנה �?ת שמו ושלח שוב',
	'ABBC3_UPLOAD_ERROR'		=> '�?ינך יכול להעלות קבצי�? �?ל %s. התקבלה השגי�?ה הב�?ה: %d',
	'ABBC3_UPLOAD_EXTENSION'	=> 'סיומות �?פשריות',
	'ABBC3_UPLOAD_EXTENSION_EXPLAIN'	=> '�?תה יכול להוסיף\לערוך\למחוק נתוני�?. הפרד סיומות ע�? פסיק (,)',
	'ABBC3_UPLOAD_DISABLED'		=> 'סיומת הקובץ %s �?ינה מותרת',
	'ABBC3_UPLOAD_SIZE'			=> 'גודל מקסימלי',
	'ABBC3_UPLOAD_NOSIZE'		=> 'הקובץ %d גדול מידיי. מקסימו�? גודל הקובץ לשליחה הו�? %d KB',
	'ABBC3_UPLOAD_EMPTY'		=> 'שורת הקובץ ריקה, �?נ�? בחר תחילה קובץ לשליחה',
	
	// Hyperlink Wizard
	'ABBC3_URL_TAG'				=> 'דף',
	'ABBC3_URL_MOVER'			=> 'כתובת �?תר',	
	'ABBC3_URL_TIP'				=> '[url]http://...[/url] �?ו [url=http://...]ש�? ה�?תר[/url]',
	'ABBC3_URL_EXAMPLE'			=> 'http://www.google.com',
	'ABBC3_URL_VIEW'			=> '<a href="http://www.google.com" class="postlink">Google</a>',

	// Email Wizard
	'ABBC3_EMAIL_TAG'			=> 'דו�?ר �?לקטרוני',
	'ABBC3_EMAIL_MOVER'			=> 'כתובת דו�?ר �?לקטרוני',
	'ABBC3_EMAIL_TIP'			=> '[email]user@server.ext[/email] �?ו [email=user@server.ext]כתובת דו�?ר ה�?לקטרוני שלי[/email]',
	'ABBC3_EMAIL_EXAMPLE'		=> 'user@server.ext',
	'ABBC3_EMAIL_VIEW'			=> '<a href="mailto:user@server.ext">user@server.ext</a>',
	
	// Ed2k link Wizard
	'ABBC3_ED2K_TAG'			=> 'ed2k',
	'ABBC3_ED2K_MOVER'			=> 'קישור eD2K',
	'ABBC3_ED2K_TIP'			=> '[url]link ed2k[/url] �?ו [url=link ed2k]ש�? ed2k[/url]',
	'ABBC3_ED2K_EXAMPLE'		=> 'ed2k://|file|The_Two_Towers-The_Purist_Edit-Trailer.avi|14997504|965c013e991ee246d63d45ea71954c4d|/',
	'ABBC3_ED2K_VIEW'			=> '<a href="ed2k://|file|The_Two_Towers-The_Purist_Edit-Trailer.avi|14997504|965c013e991ee246d63d45ea71954c4d|/" class="postlink">The_Two_Towers-The_Purist_Edit-Trailer.avi</a>',
	'ABBC3_ED2K_ADD'			=> 'הוסף �?ת הקישורי�? שבחרת כקישורי ed2k',

	// Web included by iframe
	'ABBC3_WEB_TAG'				=> '�?תר',
	'ABBC3_WEB_MOVER'			=> 'הכנס �?תר בשורה',
	'ABBC3_WEB_TIP'				=> '[web width=200 height=100]קישור ל�?תר[/web]',
	'ABBC3_WEB_EXAMPLE'			=> 'http://www.google.com',
	'ABBC3_WEB_VIEW'			=> '<iframe width="100%" height="100" src="http://www.google.com" style="font-size: 2px;"></iframe><br/>',
	
	// Image Wizard
	'ABBC3_IMG_TAG'				=> 'תמונה',
	'ABBC3_IMG_MOVER'			=> 'הכנס תמונה',
	'ABBC3_IMG_TIP'				=> '[img=(left|center|right)]http://...[/img]',
	'ABBC3_IMG_EXAMPLE'			=> 'http://www.google.com/intl/en_com/images/logo_plain.png',
	'ABBC3_IMG_VIEW'			=> '<div align="center"><img src="http://www.google.com/intl/en_com/images/logo_plain.png" alt="" /></div>',
	
	// Thumbnail
	'ABBC3_THUMBNAIL_TAG'		=> 'תמונה מוקטנת',
	'ABBC3_THUMBNAIL_MOVER'		=> 'הכנס תמונה מוקטנת',
	'ABBC3_THUMBNAIL_TIP'		=> '[thumbnail(=left|right)]http://...[/thumbnail]',
	'ABBC3_THUMBNAIL_EXAMPLE'	=> 'http://www.google.com/intl/en_com/images/logo_plain.png',
	'ABBC3_THUMBNAIL_VIEW'		=> '<a href="http://www.google.com/intl/en_com/images/logo_plain.png" rel="gb_imageset[]" alt="http://www.google.com/intl/en_com/images/logo_plain.png" title="" class="hoverbox"><img src="http://www.google.com/intl/en_com/images/logo_plain.png" alt="" border="0" width="100px" align="right"/></a>',

	// Imgshack
	'ABBC3_IMGSHACK_MOVER'		=> 'imageshack הוסף תמונה מ�?תר',
	'ABBC3_IMGSHACK_TIP'		=> '[url=http://imageshack.us][img=http://...][/img][/url]',
	'ABBC3_IMGSHACK_VIEW'		=> '<a href="http://img207.imageshack.us/my.php?image=advancedbbcodebox3prosidd3.gif" class="postlink"><img src="http://img207.imageshack.us/img207/1773/advancedbbcodebox3prosidd3.th.gif" alt="Image" /></a>',
	
	// Rapid share checker
	'ABBC3_RAPIDSHARE_TAG'		=> 'ר�?פיד-שר',
	'ABBC3_RAPIDSHARE_MOVER'	=> 'הכנס קובץ מ�?תר ר�?פיד-שר',
	'ABBC3_RAPIDSHARE_TIP'		=> '[rapidshare]http://rapidshare.com/files/...[/rapidshare]',
	'ABBC3_RAPIDSHARE_EXAMPLE'	=> 'http://rapidshare.com/files/86587996/ABBC3_v108.zip.html',
	'ABBC3_RAPIDSHARE_VIEW'		=> '<a href="http://rapidshare.com/files/86587996/ABBC3_v108.zip.html" >http://rapidshare.com/files/86587996/ABBC3_v108.zip.html</a> <font color="green" size="4" >File not found !</font><br />',
	'ABBC3_RAPIDSHARE_GOOD'		=> 'הקובץ קיי�? על השרת!',
	'ABBC3_RAPIDSHARE_WRONG'	=> 'הקובץ ל�? קיי�? על השרת!',

	// testlink
	'ABBC3_CURL_ERROR'			=> '<strong>Error : </strong> Sorry but it appears that CURL is not loaded, Please install it to use this function.',
	'ABBC3_TESTLINK_TAG'		=> 'בודק קישורי�?',
	'ABBC3_TESTLINK_MOVER'		=> 'בכנס קובץ שמ�?וחסן ב�?תר ציבורי',
	'ABBC3_TESTLINK_TIP'		=> '[testlink]http://rapidshare.com/files/...[/testlink]',
	'ABBC3_TESTLINK_NOTE'		=> 'Valid servers:rapidshare,megaupload,megarotic,depositfiles,megashares .',
	'ABBC3_TESTLINK_EXAMPLE'	=> 'http://rapidshare.com/files/86587996/ABBC3_v108.zip.html',
	'ABBC3_TESTLINK_VIEW'		=> '<dl class="testlink"><dd><font color="red" size="4" >X</font>&nbsp;<a href="http://rapidshare.com/files/86587996/ABBC3_v108.zip.html" >http://rapidshare.com/files/86587996/ABBC3_v108.zip.html</a><br /></dd></dl>',
	'ABBC3_TESTLINK_GOOD'		=> 'הקובץ קיי�? על השרת!',
	'ABBC3_TESTLINK_WRONG'		=> 'הקובץ ל�? קיי�? על השרת!',

	// Click counter
	'ABBC3_CLICK_TAG'			=> 'לחצן',
	'ABBC3_CLICK_MOVER'			=> 'הכנס מונה לחיצות',
	'ABBC3_CLICK_TIP'			=> '[click]http://...[/click] �?ו [click=http://...]ש�? ה�?תר[/click] �?ו [click][img]http://...[/img][/click]',
	'ABBC3_CLICK_EXAMPLE' 		=> 'http://www.google.com ' . ' ' . 'http://www.google.com/intl/en_com/images/logo_plain.png' ,
	'ABBC3_CLICK_VIEW'			=> '<a href="./click.php?id=1" >http://www.phpbb.com</a> ( נלחץ 1 פעמי�? )<br />',
	'ABBC3_CLICK_TIME'			=> '( נלחץ %d פע�? )',
	'ABBC3_CLICK_TIMES'			=> '( נלחץ %d פעמי�? )',
	
	// Search tag
	'ABBC3_SEARCH_MOVER'		=> 'הכנס מילה לחיפוש',
	'ABBC3_SEARCH_TIP'			=> '[search(=(msn|yahoo|google))]טקסט[/search]',
	'ABBC3_SEARCH_VIEW'			=> $lang['SEARCH_MINI'] . ' ' . $config['sitename'] . ' : <a href="search.php?keywords=Advanced BBcode box 3">"Advanced BBcode box 3"</a><br/><br/>' . $lang['SEARCH_MINI'] . ' msn : <a href="http://search.live.com/results.aspx?q=Advanced BBcode box 3&mkt=tr-TR&lf=1" target="_blank">"Advanced BBcode box 3"</a><br/><br/>' .$lang['SEARCH_MINI'] . ' yahoo : <a href="http://search.yahoo.com/search?p=Advanced BBcode box 3" target="_blank">"Advanced BBcode box 3"</a><br/><br/>' . $lang['SEARCH_MINI'] . ' google : <a href="http://www.google.com.tr/search?q=Advanced BBcode box 3" target="_blank">"Advanced BBcode box 3"</a>',
	
	// BBvideo Wizard
	'ABBC3_BBVIDEO_TAG'			=> 'BBvideo',
	'ABBC3_BBVIDEO_MOVER'		=> 'הכנס כתובת ויד�?ו',
	'ABBC3_BBVIDEO_TIP'			=> '[BBvideo]כתובת הוידי�?ו[/BBvideo]',
	'ABBC3_BBVIDEO_EXAMPLE'		=> 'http://www.youtube.com/watch?v=TA4hm97m494',
	'ABBC3_BBVIDEO_VIEW'		=> '<object width="200" height="100"><param name="movie" value="http://www.youtube.com/v/TA4hm97m494" /><param name="wmode" value="transparent" /><embed src="http://www.youtube.com/v/TA4hm97m494" type="application/x-shockwave-flash" wmode="transparent" width="200" height="100"></embed></object>',
	'ABBC3_BBVIDEO_FILE'		=> 'פורמט הויד�?ו',
	'ABBC3_BBVIDEO_VIDEO'		=> 'נלקח מ',

	// Flash (swf) Wizard
	'ABBC3_FLASH_TAG'			=> 'פל�?ש',
	'ABBC3_FLASH_MOVER'			=> 'הוסף קובץ פל�?ש (swf)',
	'ABBC3_FLASH_TIP'			=> '[flash width=# height=#]כתובת קובץ הפל�?ש[/flash] �?ו [flash width,height]כתובת קובץ הפל�?ש[/flash]',
	'ABBC3_FLASH_EXAMPLE'		=> 'http://www.adobe.com/support/flash/ts/documents/test_version/version.swf',
	'ABBC3_FLASH_VIEW'			=> '<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0" width="200" height="100"><param name="movie" value="http://www.adobe.com/support/flash/ts/documents/test_version/version.swf" /><param name="play" value="true" /><param name="loop" value="true" /><param name="quality" value="high" /><param name="allowScriptAccess" value="never" /><param name="allowNetworking" value="internal" /><embed src="http://www.adobe.com/support/flash/ts/documents/test_version/version.swf" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" width="200" height="100" play="true" loop="true" quality="high" allowscriptaccess="never" allownetworking="internal"></embed></object>',
	
	// Flash (flv) Wizard
	'ABBC3_FLV_TAG'				=> 'ויד�?ו פל�?ש',
	'ABBC3_FLV_MOVER'			=> 'הכנס קובץ ויד�?ו פל�?ש (flv)',
	'ABBC3_FLV_TIP'				=> '[flv width=# height=#]כתובת קובץ הויד�?ו פל�?ש[/flv] �?ו [flv width,height]כתובת קובץ הויד�?ו פל�?ש[/flv]',
	'ABBC3_FLV_EXAMPLE' 		=> 'http://www.channel-ai.com/video/eyn/demo1.flv',
	'ABBC3_FLV_VIEW'			=> '<embed src="../images/flvplayer.swf" width="200" height="100" bgcolor="#FFFFFF" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="file=../files/demo1.flv&autostart=false" />',
	
	// Streaming Video Wizard
	'ABBC3_VIDEO_TAG'			=> 'ויד�?ו',
	'ABBC3_VIDEO_MOVER'			=> 'הוסף קובץ וידי�?ו',
	'ABBC3_VIDEO_TIP'			=> '[video width=# height=#]כתובת קובץ הוידי�?ו[/video]',
	'ABBC3_VIDEO_EXAMPLE'		=> 'http://www.sarahsnotecards.com/catalunyalive/fishstore.wmv',
	'ABBC3_VIDEO_VIEW'			=> '<object classid="CLSID:6BF52A52-394A-11d3-B153-00C04F79FAA6" id="player"  width="200" height="100"><param name="url" value="http://www.sarahsnotecards.com/catalunyalive/fishstore.wmv" /><param name="src" value="http://www.sarahsnotecards.com/catalunyalive/fishstore.wmv" /><param name="showcontrols" value="true" /><param name="autostart" value="false" /><!--[if !IE]>--><object type="video/x-ms-wmv" data="http://www.sarahsnotecards.com/catalunyalive/fishstore.wmv" width="200" height="100" ><param name="src" value="http://www.sarahsnotecards.com/catalunyalive/fishstore.wmv" /><param name="autostart" value="false" /><param name="controller" value="true" /></object><!--<![endif]--></object>',
	
	// Streaming Audio Wizard
	'ABBC3_STREAM_TAG'			=> 'שמע',
	'ABBC3_STREAM_MOVER'		=> 'הוסף קובץ שמע',
	'ABBC3_STREAM_TIP'			=> '[stream]כתובת קובץ השמע[/stream]',
	'ABBC3_STREAM_EXAMPLE'		=> 'http://realdev1.realise.com/rossa/mov/demo.mp3',
	'ABBC3_STREAM_VIEW'			=> '<object width="200" height="45" classid="CLSID:6BF52A52-394A-11d3-B153-00C04F79FAA6" id="wmstream_"><param name="url" value="http://realdev1.realise.com/rossa/mov/demo.mp3" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /><param name="src" value="http://realdev1.realise.com/rossa/mov/demo.mp3" /><!--[if !IE]>--><object width="200" height="45" type="video/x-ms-wmv" data="http://realdev1.realise.com/rossa/mov/demo.mp3"><param name="src" value="http://realdev1.realise.com/rossa/mov/demo.mp3" /><param name="controller" value="1" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /></object><!--<![endif]--></object>',
	
	// Quick time
	'ABBC3_QUICKTIME_TAG'		=> 'QuickTime',
	'ABBC3_QUICKTIME_MOVER'		=> 'הוסף קובץ קוויק טיי�?',
	'ABBC3_QUICKTIME_TIP'		=> '[quicktime width=# height=#]כתובת קובץ קוויק טיי�?[/quicktime]',
	'ABBC3_QUICKTIME_EXAMPLE'	=> 'http://www.nature.com/neuro/journal/v3/n3/extref/Li_control.mov.qt' . ' ' . 'http://www.carnivalmidways.com/images/Music/thisisatest.mp3',
	'ABBC3_QUICKTIME_VIEW'		=> '<object id="qtstream_" classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab#version=6,0,2,0" width="200" height="100"><param name="src" value="http://www.nature.com/neuro/journal/v3/n3/extref/Li_control.mov.qt" /><param name="controller" value="true" /><param name="autoplay" value="false" /><param name="type" value="video/quicktime" /><embed name="qtstream_" src="http://www.nature.com/neuro/journal/v3/n3/extref/Li_control.mov.qt" pluginspage="http://www.apple.com/quicktime/download/" enablejavascript="true" controller="true" width="200" height="100" type="video/quicktime" autoplay="false"></embed></object>',

	// Real Media Wizard
	'ABBC3_RAM_TAG'				=> 'RealMedia',
	'ABBC3_RAM_MOVER'			=> 'הוסף קובץ רי�?ל פלייר',
	'ABBC3_RAM_TIP'				=> '[ram]כתובת קובץ רי�?ל פלייר[/ram]',
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
	'ABBC3_GVIDEO_MOVER'		=> 'Google הוסף וידי�?ו מ�?תר',
	'ABBC3_GVIDEO_TIP'			=> '[GVideo]כתובת הוידי�?ו[/GVideo]',
	'ABBC3_GVIDEO_EXAMPLE'		=> 'http://video.google.com/videoplay?docid=-8351924403384451128',
	'ABBC3_GVIDEO_VIEW'			=> '<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0" width="200" height="100"><param name="movie" value="http://video.google.com/googleplayer.swf?docid=-8351924403384451128" /><param name="play" value="false" /><param name="loop" value="false" /><param name="quality" value="high" /><param name="allowScriptAccess" value="never" /><param name="allowNetworking" value="internal" /><embed src="http://video.google.com/googleplayer.swf?docid=-8351924403384451128" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" width="200" height="100" play="false" loop="false" quality="high" allowscriptaccess="never" allownetworking="internal"></embed></object>',
	
	// Youtube video Wizard
	'ABBC3_YOUTUBE_TAG'			=> 'Youtube Video',
	'ABBC3_YOUTUBE_MOVER'		=> 'Youtube הוסף וידי�?ו מ�?תר',
	'ABBC3_YOUTUBE_TIP'			=> '[youtube]כתובת הוידי�?ו[/youtube]',
	'ABBC3_YOUTUBE_EXAMPLE'		=> 'http://www.youtube.com/watch?v=TA4hm97m494',
	'ABBC3_YOUTUBE_VIEW'		=> '<object width="200" height="100"><param name="movie" value="http://www.youtube.com/v/TA4hm97m494" /><param name="wmode" value="transparent" /><embed src="http://www.youtube.com/v/TA4hm97m494" type="application/x-shockwave-flash" wmode="transparent" width="200" height="100"></embed></object>',
	
	// Veoh video
	'ABBC3_VEOH_TAG'			=> 'Veoh',
	'ABBC3_VEOH_MOVER'			=> 'הוסף וידי�?ו מ�?תר Veoh',
	'ABBC3_VEOH_TIP'			=> '[veoh]כתובת הוידי�?ו[/veoh]',
	'ABBC3_VEOH_EXAMPLE'		=> 'http://www.veoh.com/videos/v1409404EqT5SJjM',
	'ABBC3_VEOH_VIEW'			=> '<embed src="http://www.veoh.com/videodetails2.swf?permalinkId=v1409404EqT5SJjM&id=anonymous&player=videodetailsembedded&videoAutoPlay=0" allowFullScreen="true" width="200" height="100" bgcolor="#000000" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>',

	// Collegehumor video
	'ABBC3_COLLEGEHUMOR_TAG'	=> 'collegehumor',
	'ABBC3_COLLEGEHUMOR_MOVER'	=> 'הוסף וידי�?ו מ�?תר collegehumor',
	'ABBC3_COLLEGEHUMOR_TIP'	=> '[collegehumor]כתובת הוידי�?ו[/collegehumor]',
	'ABBC3_COLLEGEHUMOR_EXAMPLE'=> 'http://www.collegehumor.com/video:1802097',
	'ABBC3_COLLEGEHUMOR_VIEW'	=> '<object type="application/x-shockwave-flash" data="http://www.collegehumor.com/moogaloop/moogaloop.swf?clip_id=1802097&fullscreen=1" width="200" height="100" ><param name="allowfullscreen" value="true" /><param name="movie" quality="best" value="http://www.collegehumor.com/moogaloop/moogaloop.swf?clip_id=1802097&fullscreen=1" /></object>',

	// Dailymotion video
	'ABBC3_DM_MOVER'			=> 'הוסף וידי�?ו מ�?תר dailymotion', // from http://www.dailymotion.com/
	'ABBC3_DM_TIP'				=> '[dm]Dailymotion זיהוי[/dm]',
	'ABBC3_DM_EXAMPLE'			=> 'http://www.dailymotion.com/swf/x3hm7o',
	'ABBC3_DM_VIEW'				=> '<object width="200" height="100"><param name="movie" value="http://www.dailymotion.com/swf/x3hm7o" /><param name="allowFullScreen" value="true" /><param name="allowScriptAccess" value="never" /><embed src="http://www.dailymotion.com/swf/x3hm7o" type="application/x-shockwave-flash" width="200" height="100" allowFullScreen="true" allowScriptAccess="never"></embed></object>',
	
	// Gamespot video
	'ABBC3_GAMESPOT_MOVER'		=> 'הוסף וידי�?ו מ�?תר Gamespot',
	'ABBC3_GAMESPOT_TIP'		=> '[gamespot]כתובת הוידי�?ו[gamespot]',
	'ABBC3_GAMESPOT_EXAMPLE'	=> 'http://www.gamespot.com/video/944074/6185798/tom-clancys-rainbow-six-vegas-2-official-trailer-3',
	'ABBC3_GAMESPOT_VIEW'		=> '<embed id="mymovie" width="200" height="100" flashvars="paramsURI=http%3A%2F%2Fwww%2Egamespot%2Ecom%2Fpages%2Fvideo%5Fplayer%2Fproteus%5Fxml%2Ephp%3Fadseg%3D%26adgrp%3D%26sid%3D6185798%26pid%3D944074%26mb%3D%26onid%3D%26nc%3D1202626246593%26embedded%3D1%26showWatermark%3D0%26autoPlay%3D0" allowfullscreen="true" allowscriptaccess="never" quality="high" name="mymovie" src="http://image.com.com/gamespot/images/cne_flash/production/media_player/proteus/gs/proteus_embed.swf" type="application/x-shockwave-flash"/>',
	
	// Gametrailers video
	'ABBC3_GAMETRAILERS_MOVER'	=> 'הוסף וידי�?ו מ�?תר Gametrailers',
	'ABBC3_GAMETRAILERS_TIP'	=> '[gametrailers]כתובת הוידי�?ו[/gametrailers]',
	'ABBC3_GAMETRAILERS_EXAMPLE'=> 'http://www.gametrailers.com/player/30461.html',
	'ABBC3_GAMETRAILERS_VIEW'	=> '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"  codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" id="gtembed" width="200" height="100"><param name="allowScriptAccess" value="never" /><param name="allowFullScreen" value="true" /><param name="movie" value="http://www.gametrailers.com/remote_wrap.php?mid=30461" /><param name="quality" value="high" /><embed src="http://www.gametrailers.com/remote_wrap.php?mid=30461" swLiveConnect="true" name="gtembed" align="middle" allowScriptAccess="never" allowFullScreen="true" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="200" height="100"></embed></object>',
	
	// IGN video
	'ABBC3_IGNVIDEO_MOVER'		=> 'הוסף וידי�?ו מ�?תר Ign',
	'ABBC3_IGNVIDEO_TIP'		=> '[ignvideo]כתובת הוידי�?ו[/ignvideo]',
	'ABBC3_IGNVIDEO_EXAMPLE'	=> 'object_ID=967025&downloadURL=http://tvmovies.ign.com/tv/video/article/850/850894/knightrider_trailer_020808_flvlow.flv',
	'ABBC3_IGNVIDEO_VIEW'		=> '<embed src="http://videomedia.ign.com/ev/ev.swf" flashvars="object_ID=967025&downloadURL=http://tvmovies.ign.com/tv/video/article/850/850894/knightrider_trailer_020808_flvlow.flv" type="application/x-shockwave-flash" width="200" height="100" ></embed>',
	
	// LiveLeak video
	'ABBC3_LIVELEAK_MOVER'		=> 'הוסף וידי�?ו מ�?תר Liveleak',
	'ABBC3_LIVELEAK_TIP'		=> '[liveleak]כתובת הוידי�?ו[/liveleak]',
	'ABBC3_LIVELEAK_EXAMPLE'	=> 'http://www.liveleak.com/view?i=413_1202590393',
	'ABBC3_LIVELEAK_VIEW'		=> '<object type="application/x-shockwave-flash" width="200" height="100" wmode="transparent" data="http://www.liveleak.com/player.swf?autostart=false&token=i=413_1202590393"><param name="movie" value="http://www.liveleak.com/player.swf?autostart=false&token=$1" /><param name="wmode" value="transparent" /><param name="quality" value="high" /></object>',

	// Custom BBcodes
));

?>