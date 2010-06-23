<?php
/** 
*
* abbcode [hebrew]
* @package language
* @version $Id: abbcode.php, v 1.0.8 2008/03/31 03:01:00 leviatan21 Exp $
* @Hebrew version $Id: $ phpBB 3.0.0 - 1.0.8
* @copyright leviatan21 < info@mssti.com > (Gabriel) http://www.mssti.com/phpbb3/
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
* @translator: ttuu - http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=465465
* @translator: leviatan21 - http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=345763
*/

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
//
// Reference : http://www.phpbb.com/mods/documentation/phpbb-documentation/language/index.php#lang-use-php

/**
* NOTE: Most of the language items are used in javascript
* If you want to use quotes or other chars that need escaped, be sure you escape them double 
* (Especially for ', you must use \\\' instead of \'. For " you only need to use \".
*/

/**
* ******************************************************************
* Some characters you may want to copy&paste:
* ******************************************************************
* ׳™ - ײ³ֲ©
* ׳˜ - ײ³ֲ¨
* ׳ - ײ³ֳ—
* ׳› - ײ³ֲ«
* ׳? - ײ³
* ׳’ - ײ³ֲ¢
* ׳” - ײ³ג‚×
* ׳ - ײ³ֲ®
* ׳ - ײ³ֲ¯
* ׳¢ - ײ³ֲ²
* ׳₪ - ײ³ֲ´
* ׳© - ײ³ֲ¹
* ן¢” - ײ³ֲ»
* ׳— - ײ³ֲ§
* ׳‘ = ײ³ֲ¡
* ײ± = ײ³  XX
* ׳™ = ײ³ֲ©
* ײ¹ = ײ³ג€° XX
* ׳? = ײ³ֲ­
* ײ½ = ײ³?
* ׳£ = ײ³ֲ³
* ׳ƒ = ײ³ג€
* ׳× = ײ³ֳ·
* ן¢ = ײ³ֲ
* ׳¡ = ײ³ֲ±
* ׳? = ײ³ג€˜
* ? = ײ²ֲ¿
********************************************************************/

$lang = array_merge($lang, array(
// Help page
	'ABBC3_HELP_TITLE'			=> 'דף עזרה',
	'ABBC3_HELP_DESC'			=> 'תיאור',
	'ABBC3_HELP_WRITE'			=> 'כתוב את העיצוב שלך',
	'ABBC3_HELP_VIEW'			=> 'מציג את העיצובים שלנו',
	'ABBC3_HELP_ABOUT'			=> 'Advanced BBCode Box 3 נוצר על ידי <a href="http://www.mssti.com/phpbb3">mssti</a>',
	'ABBC3_HELP_ALT'			=> 'Advanced BBCode Box 3 (aka ABBC3)',
	
// Image Resizer JS - Start
	'ABBC3_RESIZE_SMALL'		=> 'לחץ על סרגל זה על מנת להציג את התמונה בגודל מלא.',
	'ABBC3_RESIZE_FILESIZE'		=> 'תמונה זו מוצגת בגודל הלא מקורי שלה. לחץ על סרגל זה על מנת להציג את התמונה בגודל מלא. גודל התמונה המקורי הוא %1$ sx%2$s בנפח %3$ sKB.',
	'ABBC3_RESIZE_NOFILESIZE'	=> 'תמונה זו מוצגת בגודל הלא מקורי שלה. לחץ על סרגל זה על מנת להציג את התמונה בגודל מלא. גודל התמונה המקורי הוא %1$ sx%2$s.',
	'ABBC3_RESIZE_FULLSIZE'		=> 'לחץ על סרגל זה על מנת להציג תצוגה מוקטנת של התמונה.',
	
// Text to be applied to the helpline & mouseover & help page & Wizard texts
	'BBCODE_STYLES_TIP'			=> 'טיפ: ניתן לשנות עיצוב לטקסט במיידית על ידי בחירת טקסט ולחיצה על התגית הרצויה.',
	
	'ABBC3_ERROR'				=> 'שגיאה : ',
	'ABBC3_ERROR_TAG'			=> 'שגיאה לא צפויה ביצירת התג : ',
	
	'ABBC3_ID'				=> 'הכנס מזהה :',
	'ABBC3_NOID'				=> 'לא הכנסת את המזהה',
	'ABBC3_LINK'				=> 'הכנס קישור עבור ',
	'ABBC3_DESC'				=> 'הכנס תיאור עבור ',
	'ABBC3_NAME'				=> 'תיאור',
	'ABBC3_NOLINK'			=> 'לא הכנסת את הקישור עבור ',
	'ABBC3_NODESC'			=> 'לא הכנסת את התיאור עבור ',
	'ABBC3_WIDTH'				=> 'ציין את הרוחב',
	'ABBC3_WIDTH_NOTE'		=> 'הערה: הערך מתואר באחוזים',
	'ABBC3_NOWIDTH'			=> 'לא ציינת רוחב',
	'ABBC3_HEIGHT'			=> 'ציין את הגובה',
	'ABBC3_HEIGHT_NOTE'		=> 'הערה: הערך מתואר באחוזים',
	'ABBC3_NOHEIGHT'			=> 'לא ציינת גובה',
	
	'ABBC3_NOTE'				=> 'הערה',	
	'ABBC3_EXAMPLE'				=> 'דוגמא',
	'ABBC3_EXAMPLES'			=> 'דוגמאות',
	
// bbcodes texts	
	// Font Type Dropdown
	'ABBC3_FONTTYPE_MOVER'		=> 'סוג גופן',
	'ABBC3_FONTTYPE_TIP'		=> '[font=Comic Sans MS]טקסט[/font]',
	'ABBC3_FONTTYPE_NOTE'		=> 'הערה: אתה יכול להשתמש במשפחת סוגי הפונטים שלך',	
	'ABBC3_FONTTYPE_VIEW'		=> '<span style="font-family:Comic Sans MS">זהו טקסט הדגמה</span>',
	
	// Font Size Dropdown
	'ABBC3_FONT_GIANT'			=> 'ענק',
	'ABBC3_FONTSIZE_MOVER'		=> 'גודל גופן',
	'ABBC3_FONTSIZE_TIP'		=> '[size=150]טקסט ענק[/size]',
	'ABBC3_FONTSIZE_NOTE'		=> 'הערה: הגודל מתואר באחוזים',
	'ABBC3_FONTSIZE_VIEW'		=> '<span style="font-size: 150%; line-height: 116%;">זהו טקסט הדגמה</span>',
	
	// Highlight Font Color Dropdown
	'ABBC3_FONTHILI_MOVER'		=> 'מסומן בצבע',
	'ABBC3_FONTHILI_TIP'		=> ' [highlight=yellow]טקסט[/highlight]',
	'ABBC3_FONTHILI_NOTE'		=> 'הערה: אתה יכול להשתמש גם בקוד צבע (color=#FF0000 או color=red)',
	'ABBC3_FONTHILI_VIEW'		=> '<span style="background-color: yellow;">זהו טקסט הדגמה</span>',
	
	// Font Color Dropdown
	'ABBC3_FONTCOLOR_MOVER'		=> 'צבע גופן',
	'ABBC3_FONTCOLOR_TIP'		=> '[color=red]טקסט[/color]',
	'ABBC3_FONTCOLOR_NOTE'		=> 'הערה: אתה יכול להשתמש גם בקוד צבע (color=#FF0000 או color=red)',
	'ABBC3_FONTCOLOR_VIEW'		=> '<span style="color:red">זהו טקסט הדגמה</span>',
	
	// Cut selected text
	'ABBC3_CUT_MOVER'			=> 'גוזר טקסט שנבחר',
	// Copy selected text
	'ABBC3_COPY_MOVER'			=> 'העתק טקסט שנבחר',
	// Paste previously copy text
	'ABBC3_PASTE_MOVER'			=> 'הדבק טקסט שהועתק',
	'ABBC3_PASTE_ERROR'			=> 'תחילה העתק טקסט. לאחר מכן תוכל להדביקו ',
	// Remove BBCode (Removes all BBCode tags from selected text)
	'ABBC3_PLAIN_MOVER'			=> 'מסיר את כל התגים מהטקסט שנבחר',
	'ABBC3_NOSELECT_ERROR'		=> 'תחילה בחר טקסט לפעולה ',
	
	// Code
	'ABBC3_CODE_MOVER'			=> 'קוד',
	'ABBC3_CODE_TIP'			=> ' [code]קטע קוד[/code]',
	'ABBC3_CODE_VIEW'			=> '<dl class="codebox"><dt>'. $lang['CODE'] .': <a href="#" onclick="selectCode(this); return false;">'. $lang['SELECT_ALL_CODE'] .'</a></dt><dd><code>זהו טקסט הדגמה</code></dd></dl>',
	
	// Quote
	'ABBC3_QUOTE_MOVER'			=> 'ציטוט',
	'ABBC3_QUOTE_TIP'			=> ' [quote]טקסט[/quote] או [quote=\"member\"]טקסט[/quote]',
	'ABBC3_QUOTE_VIEW'			=> '<blockquote><div><cite>member '. $lang['WROTE'] .':</cite>זהו טקסט הדגמה</div></blockquote>',
	
	// Spoiler
	'ABBC3_SPOIL_MOVER'			=> 'ספוילר',
	'ABBC3_SPOIL_TIP'			=> ' [spoil]טקסט[/spoil]',
	'ABBC3_SPOIL_VIEW'			=> '<div class="spoilwrapper"><div class="spoiltitle"><input class="btnspoil" type="button" value="Show Spoiler" onClick="javascript:if (this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display != \'\') { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'\'; this.innerText = \'\'; this.value = \'Hide Spoiler\'; } else { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'none\'; this.innerText = \'\'; this.value = \'Show Spoiler\'; }" onfocus="this.blur();"></div><div class="spoilcontent"><div style="display: none;">זהו טקסט הדגמה</div></div></div>',
	'SPOILER_SHOW'				=> 'הצג ספויילר',
	'SPOILER_HIDE'				=> 'הסתר ספויילר',
	
	// Hide tag
	'ABBC3_HIDE_MOVER'			=> 'הודעה מוסתרת',
	'ABBC3_HIDE_TIP'			=> ' [hide]הודעה[/hide]',
	'ABBC3_HIDE_VIEW'			=> '<dl class="hidebox"><dt class="hide">HIDE: ON</dt><dd>אתה חייב להגיב לאשכול זה על מנת לצפות בתוכנו</dd></dl>',
	
	// Moderator tag
	'ABBC3_MODERATOR_MOVER'		=> 'הודעת מנהל',
	'ABBC3_MODERATOR_TIP'		=> ' [mod=name]טקסט[/mod]',
	'ABBC3_MODERATOR_VIEW'		=> '<table id="ModTable" width="100%" cellspacing="5" cellpadding="0" border="0" align="center"><tr><td class="row1" rowspan="2" align="middle" vAlign="center" width="1%"><span class="exclamation" title="Moderator warning">&nbsp;!&nbsp;</span></td><td class="row2"><span class="genmed"><b>Mod Name:</b></span></td></tr><tr><td>זהו טקסט הדגמה</td></tr></table>',
	
	// Off topic tag
	'ABBC3_OFFTOPIC'			=> 'מחוץ לנושא',
	'ABBC3_OFFTOPIC_MOVER'		=> 'הכנס טקסט מחוץ לנושא האשכול',
	'ABBC3_OFFTOPIC_TIP'		=> ' [offtopic]טקסט[/offtopic]',
	'ABBC3_OFFTOPIC_VIEW'		=> '<i><b><font color="#114499">Offtopic: </font></b><br/><font color="#2277DD">זהו טקסט הדגמה</font></i>',
	
	// NFO
	'ABBC3_NFO_MOVER'			=> 'טקסט מידע (מוצג כראוי באינטרנט אקספלורר)',
	'ABBC3_NFO_TIP'				=> ' [nfo]טקסט מידע[/nfo]',
	'ABBC3_NFO_VIEW'			=> '<table cellspacing="0" cellpadding="0" border="0" ><tr><td><span class="genmed"><b>NFO:</b></span></td></tr><tr><td class="nfo">' . str_replace(" ", "&nbsp;", '    ²  ±±°                                  °°°±±±±²²²      ') . '</td></tr></table>',
	
	// Justify Align
	'ABBC3_JUSTIFY_MOVER'		=> 'טקסט מיושר לשתי הצדדים',
	'ABBC3_JUSTIFY_TIP'			=> ' [align=justify]טקסט[/align]',
	'ABBC3_JUSTIFY_VIEW'		=> '<div style="text-align:justify">זהו טקסט הדגמה</div>',
	
	// Right Align
	'ABBC3_RIGHT_MOVER'			=> 'טקסט מיושר לימין',
	'ABBC3_RIGHT_TIP'			=> ' [align=right]טקסט[/align]',
	'ABBC3_RIGHT_VIEW'			=> '<div style="text-align:right">זהו טקסט הדגמה</div>',

	// Center Align
	'ABBC3_CENTER_MOVER'		=> 'טקסט ממורכז לאמצע',
	'ABBC3_CENTER_TIP'			=> ' [align=center]טקסט[/align]',
	'ABBC3_CENTER_VIEW'			=> '<div style="text-align:center">זהו טקסט הדגמה</div>',

	// Left Align
	'ABBC3_LEFT_MOVER'			=> 'טקסט מיושר לשמאל',
	'ABBC3_LEFT_TIP'			=> ' [align=left]טקסט[/align]',
	'ABBC3_LEFT_VIEW'			=> '<div style="text-left:justify">זהו טקסט הדגמה</div>',
	
	// Preformat
	'ABBC3_PRE_MOVER'			=> 'טקסט לא רציף',
	'ABBC3_PRE_TIP'				=> ' [pre]טקסט[/pre]',
	'ABBC3_PRE_VIEW'			=> '<pre>זהו טקסט הדגמה</pre>',
	
	// Superscript
	'ABBC3_SUP_MOVER'			=> 'טקסט עילי',
	'ABBC3_SUP_TIP'				=> ' [sup]טקסט[/sup]',
	'ABBC3_SUP_VIEW'			=> '<sup>זהו טקסט הדגמה</sup>',
	
	// Subscript
	'ABBC3_SUB_MOVER'			=> 'טקסט תחתי',
	'ABBC3_SUB_TIP'				=> ' [sub]טקסט[/sub]',
	'ABBC3_SUB_VIEW'			=> '<sub>זהו טקסט הדגמה</sub>',
	
	// Bold
	'ABBC3_BOLD_MOVER'			=> 'טקסט מודגש',
	'ABBC3_BOLD_TIP'			=> ' [b]טקסט[/b]',
	'ABBC3_BOLD_VIEW'			=> '<strong>זהו טקסט הדגמה</strong>',
	
	// Italic
	'ABBC3_ITALIC_MOVER'		=> 'טקסט נטוי',
	'ABBC3_ITALIC_TIP'			=> ' [i]טקסט[/i]',
	'ABBC3_ITALIC_VIEW'			=> '<em>זהו טקסט הדגמה</em>',
		
	// Underline
	'ABBC3_UNDERLINE_MOVER'		=> 'קו מתחת לטקסט',
	'ABBC3_UNDERLINE_TIP'		=> ' [u]טקסט[/u]',
	'ABBC3_UNDERLINE_VIEW'		=> '<span style="text-decoration: underline">זהו טקסט הדגמה</span>',
	
	// Strikethrough
	'ABBC3_STRIKE_MOVER'		=> 'קו באמצע הטקסט',
	'ABBC3_STRIKE_TIP'			=> ' [s]טקסט[/s]',
	'ABBC3_STRIKE_VIEW'			=> '<strike>זהו טקסט הדגמה</strike>',
	
	// Text Fade
	'ABBC3_FADE_MOVER'			=> 'טקסט בגווני אפור',
	'ABBC3_FADE_TIP'			=> ' [fade]טקסט[/fade]',
	'ABBC3_FADE_VIEW'			=> '<span class="fade_link">זהו טקסט הדגמה</span> <script type="text/javascript">fade_ontimer()</script>',
	
	// Text Gradient
	'ABBC3_GRAD_MOVER'			=> 'טקסט צבעוני',
	'ABBC3_GRAD_TIP'			=> '',
	'ABBC3_GRAD_VIEW'			=> '<span style="color: #FF0000">T</span><span style="color: #F2000D">h</span><span style="color: #E6001A">i</span><span style="color: #D90026">s</span> <span style="color: #BF0040">i</span><span style="color: #B3004D">s</span> <span style="color: #990066">a</span> <span style="color: #800080">s</span><span style="color: #73008C">i</span><span style="color: #660099">m</span><span style="color: #5900A6">p</span><span style="color: #4D00B3">l</span><span style="color: #4000BF">e</span> <span style="color: #2600D9">t</span><span style="color: #1A00E6">e</span><span style="color: #0D00F2">x</span><span style="color: #0000FF">t</span>',
	'ABBC3_GRAD_MIN_ERROR'	=> 'תחילה בחר את הטקסט : ',
	'ABBC3_GRAD_MAX_ERROR'	=> 'ניתן לבחור טקסט באורך של עד 120 תווים',
	
	// Glow text
	'ABBC3_GLOW_MOVER'			=> 'טקסט זוהר (פועל רק באינטרנט אקספלורר)',
	'ABBC3_GLOW_TIP'			=> ' [glow=(color)]טקסט[/glow]',
	'ABBC3_GLOW_VIEW'			=> '<div style="filter:Glow(color=red,strength=4);color:#ffffff;height:110%">זהו טקסט הדגמה</div>',
	
	// Shadow text
	'ABBC3_SHADOW_MOVER'		=> 'טקסט צל (פועל רק באינטרנט אקספלורר)',
	'ABBC3_SHADOW_TIP'			=> ' [shadow=(color)]טקסט[/shadow]',
	'ABBC3_SHADOW_VIEW'			=> '<div style="filter:shadow(color=black,strength=4);color:blue;height:110%">זהו טקסט הדגמה</div>',
	
	// Dropshadow text
	'ABBC3_DROPSHADOW_MOVER'	=> 'טקסט צל נופל (פועל רק באינטרנט אקספלורר)',
	'ABBC3_DROPSHADOW_TIP'		=> ' [dropshadow=(color)]טקסט[/dropshadow]',
	'ABBC3_DROPSHADOW_VIEW'		=> '<div style="filter:dropshadow(color=#999999,strength=4);color:blue;height:110%">זהו טקסט הדגמה</div>',
	
	// Blur text
	'ABBC3_BLUR_MOVER'			=> 'טקסט מלוכלך (פועל רק באינטרנט אקספלורר)',
	'ABBC3_BLUR_TIP'			=> ' [blur=(color)]טקסט[/blur]',
	'ABBC3_BLUR_VIEW'			=> '<div style="filter:Blur(strength=7);color:blue;height:110%">זהו טקסט הדגמה</div>',
	
	// Wave text
	'ABBC3_WAVE_MOVER'			=> 'טקסט גלי (פועל רק באינטרנט אקספלורר)',
	'ABBC3_WAVE_TIP'			=> ' [wave=(color)]טקסט[/wave]',
	'ABBC3_WAVE_VIEW'			=> '<div style="filter:Wave(strength=2);color:blue;height:110%">זהו טקסט הדגמה</div>',
	
	// Unordered List
	'ABBC3_LISTB_MOVER'			=> 'רשימה',
	'ABBC3_LISTB_TIP'			=> ' [list]טקסט[/list]',
	'ABBC3_LISTB_NOTE'			=> ' הערה: כתוב [*] לפני כל שורה',
	'ABBC3_LISTB_VIEW'			=> '<ul><li>אברהם</li><li>יצחק</li><li>יעקב</li></ul>',
	
	// Ordered List
	'ABBC3_LISTO_MOVER'			=> 'רשימה מסודרת',
	'ABBC3_LISTO_TIP'			=> ' [list=1|a]טקסט[/list]',
	'ABBC3_LISTO_NOTE'			=> ' הערה: כתוב [*] לפני כל שורה',
	'ABBC3_LISTO_VIEW'			=> '<ol style="list-style-type: lower-alpha"><li>אברהם</li><li>יצחק</li><li>יעקב</li></ol>',
	
	// List item
	'ABBC3_LISTITEM_MOVER'		=> 'רשימת פריטים',
	'ABBC3_LISTITEM_TIP'		=> '[*]',
	'ABBC3_LISTITEM_NOTE'		=> 'הערה: יוצר נקודה בתחילת כל פריט',
	
	// Line Break
	'ABBC3_HR_MOVER'			=> 'קו חוצץ',
	'ABBC3_HR_TIP'				=> ' [hr]',
	'ABBC3_HR_NOTE'				=> ' הערה: הקו החוצץ יווצר מעל השורה שלפניה הוצב התג',
	'ABBC3_HR_VIEW'				=> '<hr noshade color="#000000" size="1px">',
	
	// Message Box text direction Left to Light
	'ABBC3_RTL_MOVER'			=> 'כיוון טקסט מימין לשמאל',
	'ABBC3_RTL_TIP'				=> ' [dir=rtl]טקסט[/dir]',
	'ABBC3_RTL_VIEW'			=> '<BDO dir="rtl">זהו טקסט הדגמה</BDO>',
	
	// Message Box text direction right to Left
	'ABBC3_LTR_MOVER'			=> 'כיוון טקסט משמאל לימין',
	'ABBC3_LTR_TIP'				=> ' [dir=ltr]טקסט[/dir]',
	'ABBC3_LTR_VIEW'			=> '<BDO dir="ltr">זהו טקסט הדגמה</BDO>',
	
	// Marquee Down
	'ABBC3_MARQD_MOVER'			=> 'טקסט מתגלגל מלמעלה ללמטה',
	'ABBC3_MARQD_TIP'			=> ' [marq=down]טקסט[/marq]',
	'ABBC3_MARQD_VIEW'			=> '<marquee direction="down" scrolldelay="120">זהו טקסט הדגמה</marquee>',
	
	// Marquee Up
	'ABBC3_MARQU_MOVER'			=> 'טקסט מתגלגל מלמטה ללמעלה',
	'ABBC3_MARQU_TIP'			=> ' [marq=up]טקסט[/marq]',
	'ABBC3_MARQU_VIEW'			=> '<marquee direction="up" scrolldelay="120">זהו טקסט הדגמה</marquee>',
	
	// Marquee Right
	'ABBC3_MARQR_MOVER'			=> 'טקסט עובר מימין לשמאל',
	'ABBC3_MARQR_TIP'			=> ' [marq=right]טקסט[/marq]',
	'ABBC3_MARQR_VIEW'			=> '<marquee direction="right" scrolldelay="120">זהו טקסט הדגמה</marquee>',
	
	// Marquee Left
	'ABBC3_MARQL_MOVER'			=> 'טקסט עובר משמאל לימין',
	'ABBC3_MARQL_TIP'			=> ' [marq=left]טקסט[/marq]',
	'ABBC3_MARQL_VIEW'			=> '<marquee direction="left" scrolldelay="120">זהו טקסט הדגמה</marquee>',
	
	// Table row cell wizard
	'ABBC3_TABLE_MOVER'			=> 'הוסף טבלה',
	'ABBC3_TABLE_TIP'			=> ' [table=(ccs style)][tr=(ccs style)][td=(ccs style)]טקסט[/td][/tr][/table]',
	'ABBC3_TABLE_VIEW'			=> '<table style="width:50%;border:1px solid #cccccc;" cellspacing="0" cellpadding="0"><tr style="text-align:center;"><td style="border:1px solid #cccccc;">זהו טקסט הדגמה</td></tr></table>',

	'ABBC3_TABLE_STYLE'	    	=> 'הכנס עיצוב טבלה',
	'ABBC3_TABLE_EXAMPLE'		=> 'דוגמא: width:50%;border:1px solid #ccccc;',
	
	'ABBC3_ROW_NUMBER'	     	=> 'הכנס את מספר השורות',
	'ABBC3_ROW_ERROR'			=> 'לא הכנסת את מספר השורות',
	'ABBC3_ROW_STYLE'			=> 'הכנס את עיצוב השורות',
	'ABBC3_ROW_EXAMPLE'			=> 'דוגמא: text-align:center;',
	
	'ABBC3_CELL_NUMBER'	    	=> 'הכנס את מספר העמודות',
	'ABBC3_CELL_ERROR'	    	=> 'לא הכנסת את מספר העמודות',
	'ABBC3_CELL_STYLE'	    	=> 'הכנס את עיצוב העמודות',
	'ABBC3_CELL_EXAMPLE'		=> 'דוגמא: border:1px solid #ccccc;',
	
	// Simple upload files
	'ABBC3_UPLOAD_TITLE'		=> 'Advanced BBCode box 3 :: מסך העלאת קבצים',
	'ABBC3_UPLOAD_MOVER'		=> 'העלה קובץ',
	'ABBC3_UPLOAD_LINK'			=> 'זהו הלינק לקובץ שהעלת',
	'ABBC3_UPLOAD_UPLOADED'		=> 'העלאת הקובץ %s בוצעה בהצלחה!',
	'ABBC3_UPLOAD_NOT_UPLOADED'	=> 'העלאת הקובץ %s נכשלה',
	'ABBC3_UPLOAD_ALREADY'		=> 'הקובץ %s כבר קיים בשרת, בחר בקובץ אחר או שנה את שמו של הקובץ שאתה מנסה להעלות ונסה שנית',
	'ABBC3_UPLOAD_ERROR'		=> 'אינך יכול להעלות קבצים ל %s. הוחזרה השגיאה: %d',
	'ABBC3_UPLOAD_EXTENSION'	=> 'סיומות אפשריות',
	'ABBC3_UPLOAD_EXTENSION_EXPLAIN'	=> 'כאן אתה יכול להוסיף/לשנות/למחוק את רשימת הסיומות המותרות להעלאה. הפרד סיומות על ידי סימון פסיק (,)',	
	'ABBC3_UPLOAD_DISABLED'		=> 'סיומת הקובץ %s אינה מאופשרת',
	'ABBC3_UPLOAD_SIZE'			=> 'מקסימום הגודל המותר',
	'ABBC3_UPLOAD_NOSIZE'		=> 'גודל הקובץ %d גדול מעבר למותר. הגודל המקסימלי המותר להעלאה הוא %d KB',
	'ABBC3_UPLOAD_EMPTY'		=> 'לא נבחר קובץ לשליחה, אנא בחר תחילה קובץ ספציפי לשליחה',
	
	// Hyperlink Wizard
	'ABBC3_URL_TAG'		    	=> 'דף',
	'ABBC3_URL_MOVER'			=> 'כתובת אינטרנט',	
	'ABBC3_URL_TIP'				=> ' [url]http://...[/url] או [url=http://...]שם האתר[/url]',
	'ABBC3_URL_EXAMPLE' 		=> 'http://www.google.com דוגמא:',	
	'ABBC3_URL_VIEW'			=> '<a href="http://www.google.com" class="postlink">גוגל</a>',
	
	// Email Wizard
	'ABBC3_EMAIL_TAG'			=> 'דואר אלקטרוני',
	'ABBC3_EMAIL_MOVER'			=> 'דואר אלקטרוני',
	'ABBC3_EMAIL_TIP'			=> ' [email]user@server.ext[/email] או [email=user@server.ext]האימייל שלי[/email]',
	'ABBC3_EMAIL_NOTE' 	    	=> 'user@server.ext דוגמא:',
	'ABBC3_EMAIL_VIEW'			=> '<a href="mailto:user@server.ext">האימייל שלי</a>',
	
	// Ed2k link Wizard
	'ABBC3_ED2K_TAG'			=> 'ed2k',
	'ABBC3_ED2K_MOVER'			=> 'eD2K קישור',
	'ABBC3_ED2K_TIP'			=> ' [url]link ed2k[/url] או [url=link ed2k]Name ed2k[/url]',
	'ABBC3_ED2K_EXAMPLE'		=> 'ed2k://|file|The_Two_Towers-The_Purist_Edit-Trailer.avi|14997504|965c013e991ee246d63d45ea71954c4d|/',
	'ABBC3_ED2K_VIEW'			=> '<a href="ed2k://|file|The_Two_Towers-The_Purist_Edit-Trailer.avi|14997504|965c013e991ee246d63d45ea71954c4d|/" class="postlink">Robin.Hood.S02E01.Sisterhood.HDTV.XviD-BiA.avi</a>',
	'ABBC3_ED2K_ADD'			=> 'הוסף את הלינקים שבחרת אל תוכנת ההורדות שלך',
	
	// Web included by iframe
	'ABBC3_WEB_TAG'		    	=> 'אתר',
	'ABBC3_WEB_MOVER'			=> 'תצוגת דף אינטרנט בחלון ההודעה',
	'ABBC3_WEB_TIP'				=> ' [web width=200 height=100 ]כתובת האתר[/web]',
	'ABBC3_WEB_EXAMPLE'			=> 'http://www.google.com דוגמא:',
	'ABBC3_WEB_VIEW'			=> '<iframe width="100%" height="100" src="http://www.google.com" style="font-size: 2px;"></iframe><br/>',
	
	// Image Wizard
	'ABBC3_IMG_TAG'		    	=> 'תמונה',
	'ABBC3_IMG_MOVER'			=> 'הוסף כתובת תמונה',
	'ABBC3_IMG_TIP'				=> ' [img=(left|center|right)]http://...[/img]',
	'ABBC3_IMG_EXAMPLE'			=> 'http://www.google.com/intl/en_com/images/logo_plain.png דוגמא:',
	'ABBC3_IMG_VIEW'			=> '<div align="center"><img src="http://www.google.com/intl/en_com/images/logo_plain.png" /></div>',
	
	// Thumbnail
	'ABBC3_THUMBNAIL_TAG'		=> 'תמונה מוקטנת',
	'ABBC3_THUMBNAIL_MOVER'		=> 'הוסף כתובת תמונה ממוזערת',
	'ABBC3_THUMBNAIL_TIP'		=> '[thumbnail(=left|right)]http://...[/thumbnail]',
	'ABBC3_THUMBNAIL_EXAMPLE'			=> 'http://www.google.com/intl/en_com/images/logo_plain.png דוגמא:',
	'ABBC3_THUMBNAIL_VIEW'		=> '<a href="http://www.google.com/intl/en_com/images/logo_plain.png" rel="lightbox[]" alt="http://www.google.com/intl/en_com/images/logo_plain.png" title="" class="hoverbox"><img src="http://www.google.com/intl/en_com/images/logo_plain.png" border="0" width="100px" align="right"/></a>',
	
	// Imgshack
	'ABBC3_IMGSHACK_MOVER'		=> 'imageshack הוסף תמונה מאתר',
	'ABBC3_IMGSHACK_TIP'		=> ' [url=http://imageshack.us][img=http://...][/img][/url]',
	'ABBC3_IMGSHACK_VIEW'		=> '<a href="http://img207.imageshack.us/my.php?image=advancedbbcodebox3prosidd3.gif" class="postlink"><img src="http://img207.imageshack.us/img207/1773/advancedbbcodebox3prosidd3.th.gif" alt="Image" /></a>',

	// testlink
	'ABBC3_TESTLINK_TAG'		=> 'בודק הלינקים',
	'ABBC3_TESTLINK_MOVER'		=> 'הכנס כתובת קובץ מאתר שיתוף קבצים',
    'ABBC3_TESTLINK_TIP'		=> '[testlink]http://rapidshare.com/files/...[/testlink]',
	'ABBC3_TESTLINK_NOTE'		=> 'אתרים נתמכים : rapidshare, megaupload, megarotic, depositfiles, megashares .',
	'ABBC3_TESTLINK_EXAMPLE'	=> 'http://rapidshare.com/files/86587996/Advanced_BBCode_Box_3_v1.0.5.zip.html',
	'ABBC3_TESTLINK_VIEW'		=> '<a href="http://rapidshare.com/files/86587996/Advanced_BBCode_Box_3_v1.0.5.zip.html" >http://rapidshare.com/files/86587996/Advanced_BBCode_Box_3_v1.0.5.zip.html</a> <font color="green" size="4" >הקובץ קיים על השרת !</font><br />',
	'ABBC3_TESTLINK_GOOD'		=> 'הקובץ קיים על השרת!',
	'ABBC3_TESTLINK_WRONG'		=> 'הקובץ כבר לא קיים על השרת!',
	
	// Click counter
	'ABBC3_CLICK_TAG'			=> 'מונה לחיצות',
	'ABBC3_CLICKS_MOVER'		=> 'הכנס מונה לחיצות',
	'ABBC3_CLICKS_TIP'			=> ' [click]http://...[/click] או [click=http://...]שם האתר[/click] או [click][img]http://...[/img][/click]',
	'ABBC3_CLICK_EXAMPLE' 		=> 'http://www.google.com ' . ' ' . 'http://www.google.com/intl/en_com/images/logo_plain.png' ,
	'ABBC3_CLICK_VIEW'			=> '<a href="./click.php?id=1" >http://www.phpbb.com</a> ( נלחץ פעם 1 )<br />',
	'ABBC3_CLICKS_TIME'			=> '( נלחץ %d פעם )',
	'ABBC3_CLICKS_TIMES'		=> '( נלחץ %d פעמים )',
	
	// Search tag
	'ABBC3_SEARCH_MOVER'		=> 'הכנס מילה לחיפוש',
	'ABBC3_SEARCH_TIP'			=> ' [search(=(msn|yahoo|google))]טקסט[/search]',
	'ABBC3_SEARCH_VIEW'			=> $lang['SEARCH_MINI'] . $config['sitename'] . ' :  <a href="search.php?keywords=Advanced BBcode box 3">"Advanced BBcode box 3" </a><br/<br/>' . $lang['SEARCH_MINI'] . 'msn :  <a href="http://search.live.com/results.aspx?q=Advanced BBcode box 3&mkt=tr-TR&lf=1" target="_blank">"Advanced BBcode box 3" </a><br/><br/>' .$lang['SEARCH_MINI'] . 'yahoo :  <a href="http://search.yahoo.com/search?p=Advanced BBcode box 3" target="_blank">"Advanced BBcode box 3" </a><br/><br/>' . $lang['SEARCH_MINI'] . 'google : <a href="http://www.google.com.tr/search?q=Advanced BBcode box 3" target="_blank">"Advanced BBcode box 3" </a>',

	// BBvideo Wizard
	'ABBC3_BBVIDEO_TAG'			=> 'BBvideo',
	'ABBC3_BBVIDEO_MOVER'		=> 'הכנס כתובת וידיאו',
	'ABBC3_BBVIDEO_TIP'			=> '[BBvideo]כתובת וידיאו[/BBvideo]',
	'ABBC3_BBVIDEO_EXAMPLE'		=> 'http://www.youtube.com/watch?v=TA4hm97m494',
	'ABBC3_BBVIDEO_FILE'		=> 'פורמט קובץ הוידיאו',
	'ABBC3_BBVIDEO_VIDEO'		=> 'סרטון מ',	
	
	// Custom bbcodes

));

?>