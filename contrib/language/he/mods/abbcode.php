<?php
/**
* @package: phpBB3 :: Advanced BBCode box 3 -> language [he][hebrew]
* @version: $Id: abbcode.php, v 1.0.11 2008/10/11 11:10:08 leviatan21 Exp $
* @copyright: leviatan21 < info@mssti.com > (Gabriel) http://www.mssti.com/phpbb3/
* @license: http://opensource.org/licenses/gpl-license.php GNU Public License 
* @author: leviatan21 - http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=345763
* @translator: oferxxx - http://www.phpbb.co.il/memberlist.php?mode=viewprofile&u=16660
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
	'ABBC3_HELP_DESC'			=> 'תיאור',
	'ABBC3_HELP_WRITE'			=> 'כתוב את העיצוב שלך',
	'ABBC3_HELP_VIEW'			=> 'מציג את העיצובים שלנו',
	'ABBC3_HELP_ABOUT'			=> 'Advanced BBCode Box 3 נוצר על ידי <a href="http://www.mssti.com/phpbb3">mssti</a>',
	'ABBC3_HELP_ALT'			=> 'Advanced BBCode Box 3 (גם ABBC3)',

// Image Resizer JS
	'ABBC3_RESIZE_SMALL'		=> 'לחץ כדי לראות את התמונה בגודלה המקורי.',
	'ABBC3_RESIZE_ZOOM_IN'		=> 'התקרב (גודל אמיתי: %1$s x %2$s)',
	'ABBC3_RESIZE_CLOSE'		=> 'סגור',
	'ABBC3_RESIZE_ZOOM_OUT'		=> 'התרחק',
	'ABBC3_RESIZE_FILESIZE'		=> 'תמונה זו הוקטנה. לחץ כדי לראות את התמונה בגודלה המקורי. גודל התמונה המקורית הוא %1$sx%2$s בנפח %3$sKB.',
	'ABBC3_RESIZE_NOFILESIZE'	=> 'תמונה זו הוקטנה. לחץ כדי לראות את התמונה בגודלה המקורי. גודל התמונה המקורית הוא %1$sx%2$s.',
	'ABBC3_RESIZE_FULLSIZE'		=> 'לחץ כדי לצפות בתמונה הקטנה.',
	'ABBC3_RESIZE_NUMBER'		=> 'תמונה %1$s מ %2$s',
	'ABBC3_RESIZE_PLAY'			=> 'הפעל תצוגת סליידר',
	'ABBC3_RESIZE_PAUSE'		=> 'השהה תצוגת סליידר',
	'ABBC3_POPBOX_REVERSETEXT'	=> 'לחץ על התמונה כדי להקטינה.',

// Highslide JS - http://vikjavev.no/highslide/forum/viewtopic.php?t=2119
	'ABBC3_HIGHSLIDE_LOADINGTEXT'		=> 'טוען...',
	'ABBC3_HIGHSLIDE_LOADINGTITLE'		=> 'בטל',
	'ABBC3_HIGHSLIDE_FOCUSTITLE'		=> 'הבא לקידמה',
	'ABBC3_HIGHSLIDE_FULLEXPANDTITLE'	=> 'הרחב לגודל אמיתי',
	'ABBC3_HIGHSLIDE_FULLEXPANDTEXT'	=> 'תצוגה מלאה',
	'ABBC3_HIGHSLIDE_CREDITSTEXT'		=> 'מבוסס על <i>Highslide JS</i>',
	'ABBC3_HIGHSLIDE_CREDITSTITLE'		=> 'עבור לדף הבית של Highslide JS',
	'ABBC3_HIGHSLIDE_PREVIOUSTEXT'		=> 'הקודם',
	'ABBC3_HIGHSLIDE_PREVIOUSTITLE'		=> 'הקודם (חץ שמאלה)',
	'ABBC3_HIGHSLIDE_NEXTTEXT'			=> 'הבא',
	'ABBC3_HIGHSLIDE_NEXTTITLE'			=> 'הבא (חץ ימינה)',
	'ABBC3_HIGHSLIDE_MOVETITLE'			=> 'הזז',
	'ABBC3_HIGHSLIDE_MOVETEXT'			=> 'הזז',
	'ABBC3_HIGHSLIDE_CLOSETEXT'			=> 'סגור',
	'ABBC3_HIGHSLIDE_CLOSETITLE'		=> 'סגור (esc)',
	'ABBC3_HIGHSLIDE_RESIZETITLE'		=> 'שנה גודל',
	'ABBC3_HIGHSLIDE_PLAYTEXT'			=> 'הפעל',
	'ABBC3_HIGHSLIDE_PLAYTITLE'			=> 'הפעל תצוגת סליידר (מקש רווח)',
	'ABBC3_HIGHSLIDE_PAUSETEXT'			=> 'השהה',
	'ABBC3_HIGHSLIDE_PAUSETITLE'		=> 'השהה תצוגת סליידר (מקש רווח)',
	'ABBC3_HIGHSLIDE_NUMBER'			=> 'תמונה %1 מ %2',
	'ABBC3_HIGHSLIDE_RESTORETITLE'		=> 'לחץ כדי לסגור תמונה, לחץ וגרור כדי להזיז. השתמש במקשי החצים כדי להגיע לתמונה הבאה או הקודמת.',

// Text to be applied to the helpline & mouseover & help page & Wizard texts
	'BBCODE_STYLES_TIP'			=> 'טיפ: ניתן לשנות עיצוב לטקסט במיידית על ידי בחירת טקסט ולחיצה על התגית הרצויה.',

	'ABBC3_ERROR'				=> 'שגיאה : ',
	'ABBC3_ERROR_TAG'			=> 'שגיאה לא צפויה ביצירת התג : ',
	'ABBC3_NO_EXAMPLE'			=> 'אין הסבר מידע',

	'ABBC3_ID'					=> 'הכנס מזהה :',
	'ABBC3_NOID'				=> 'לא הכנסת את המזהה',
	'ABBC3_LINK'				=> 'הכנס קישור עבור ',
	'ABBC3_DESC'				=> 'הכנס תיאור עבור ',
	'ABBC3_NAME'				=> 'תיאור',
	'ABBC3_NOLINK'				=> 'לא הכנסת את הקישור עבור ',
	'ABBC3_NODESC'				=> 'לא הכנסת את התיאור עבור ',
	'ABBC3_WIDTH'				=> 'ציין את הרוחב',
	'ABBC3_WIDTH_NOTE'			=> 'הערה: הערך מתואר באחוזים',
	'ABBC3_NOWIDTH'				=> 'לא ציינת רוחב',
	'ABBC3_HEIGHT'				=> 'ציין את הגובה',
	'ABBC3_HEIGHT_NOTE'			=> 'הערה: הערך מתואר באחוזים',
	'ABBC3_NOHEIGHT'			=> 'לא ציינת גובה',

	'ABBC3_NOTE'				=> 'הערה',
	'ABBC3_EXAMPLE'				=> 'דוגמא',
	'ABBC3_EXAMPLES'			=> 'דוגמאות',
	'ABBC3_UNAUTHORISED'		=> 'אתה לא יכול להשתמש במילים מסוימות : <br /><strong> %s </strong>',
	'SAMPLE_TEXT'				=> 'זהו טקסט לדוגמה' //	' . $lang['SAMPLE_TEXT'] . '
));

//
// TRANSLATORS PLEASE NOTE 
// Several lines have an special note like "##	For translate : " follow for one or more "yes" 
// These means that you can/have to translate the word under
//

$lang = array_merge($lang, array(
// bbcodes texts
	// Font Type Dropdown
	'ABBC3_FONT_MOVER'			=> 'סוג גופן',
	'ABBC3_FONT_TIP'			=> '[font=Comic Sans MS]טקסט[/font]',
	'ABBC3_FONT_NOTE'			=> 'הערה: אתה יכול להשתמש בפונטים שלך.',
	'ABBC3_FONT_VIEW'			=> '<span style="font-family:Comic Sans MS">זהו טקסט הדגמה</span>',

	// Font family Groups
	'ABBC3_FONT_ABBC3'			=> 'ABBC Box 3',
	'ABBC3_FONT_SAFE'			=> 'רשימה בטוחה',
	'ABBC3_FONT_WIN'			=> 'ברירת מחדל ווינדוס',

	// Font Size Dropdown
	'ABBC3_FONT_GIANT'			=> 'ענק',
	'ABBC3_SIZE_MOVER'			=> 'גודל גופן',
	'ABBC3_SIZE_TIP'			=> '[size=150]טקסט ענק[/size]',
	'ABBC3_SIZE_NOTE'			=> 'הערה: הערך מתואר באחוזים',
	'ABBC3_SIZE_VIEW'			=> '<span style="font-size: 150%; line-height: 116%;">זהו טקסט הדגמה</span>',

	// Highlight Font Color Dropdown
	'ABBC3_HIGHLIGHT_MOVER'		=> 'טקסט מובלט',
	'ABBC3_HIGHLIGHT_TIP'		=> '[highlight=yellow]טקסט[/highlight]',
	'ABBC3_HIGHLIGHT_NOTE'		=> 'הערה: אתה יכול להשתמש גם בקוד צבע (color=#FF0000 או color=red)',
	'ABBC3_HIGHLIGHT_VIEW'		=> '<span style="background-color: yellow;">' . $lang['SAMPLE_TEXT'] . '</span>',

	// Font Color Dropdown
	'ABBC3_COLOR_MOVER'			=> 'צבע גופן',
	'ABBC3_COLOR_TIP'			=> '[color=red]טקסט[/color]',
	'ABBC3_COLOR_NOTE'			=> 'הערה: אתה יכול להשתמש גם בקוד צבע (color=#FF0000 או color=red)',
	'ABBC3_COLOR_VIEW'			=> '<span style="color:red">' . $lang['SAMPLE_TEXT'] . '</span>',

	// Cut selected text
	'ABBC3_CUT_MOVER'			=> 'מוחק טקסט שנבחר',
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
	'ABBC3_CODE_TIP'			=> '[code]קטע קוד[/code]',
	'ABBC3_CODE_VIEW'			=> '<dl class="codebox"><dt>'. $lang['CODE'] .': <a href="#" onclick="selectCode(this); return false;">'. $lang['SELECT_ALL_CODE'] .'</a></dt><dd><code>' . $lang['SAMPLE_TEXT'] . '</code></dd></dl>',

	// Quote
	'ABBC3_QUOTE_MOVER'			=> 'ציטוט',
	'ABBC3_QUOTE_TIP'			=> '[quote]טקסט[/quote] או [quote=\"member\"]טקסט[/quote]',
##	For translate :                                        yes
	'ABBC3_QUOTE_VIEW'			=> '<blockquote><div><cite>member '. $lang['WROTE'] .':</cite>' . $lang['SAMPLE_TEXT'] . '</div></blockquote>',

	// html
//	'ABBC3_HTML_MOVER'			=> 'HTML code',
//	'ABBC3_HTML_TIP'			=> '[html]xhtml code[/html]',
//	'ABBC3_HTML_EXAMPLE'		=> '[html]&lt;a href=\"http://www.mssti.com/phpbb3\"&gt;link to mssti&lt;/a&gt;[/html]',
//	'ABBC3_HTML_VIEW'			=> '<a href="http://www.mssti.com/phpbb3">link to mssti</a>',

	// Spoiler
	'ABBC3_SPOIL_MOVER'			=> 'ספוילר',
	'ABBC3_SPOIL_TIP'			=> '[spoil]טקסט[/spoil]',
##	For translate :                                                                                                                               yes                                                      yes               yes
	'ABBC3_SPOIL_VIEW'			=> '<div class="spoilwrapper"><div class="spoiltitle"><input id="1" class="btnspoil button2" type="button" value="Show Spoiler" onClick="javascript:abbc3_spoiler( 1, 2, \'Hide Spoiler\', \'Show Spoiler\' )"></div><div class="spoilcontent"><div id="2" style="display: none;">' . $lang['SAMPLE_TEXT'] . '</div></div></div>',
	'SPOILER_SHOW'				=> 'הצג ספויילר',
	'SPOILER_HIDE'				=> 'החבא ספויילר',

	// hidden
	'ABBC3_HIDDEN_MOVER'		=>	'תוכן מוסתר לאורחים',
	'ABBC3_HIDDEN_TIP'			=>	'[hidden]טקסט[/hidden]',
	'HIDDEN_OFF'				=>	'מוסתר לא פעיל',
	'HIDDEN_ON'					=>	'מוסתר פעיל',
	'HIDDEN_EXPLAIN'			=>	'המערכת דורשת ממך להיות רשום ולהתחבר לפני שתוכל לצפות בהודעה המוסתרת',

	// Moderator tag
	'ABBC3_MOD_MOVER'			=> 'הודעת מנהל ראשי',
	'ABBC3_MOD_TIP'				=> '[mod=name]טקסט[/mod]',
##	For translate :                                                                                                                                                                               yes
	'ABBC3_MOD_VIEW'			=> '<table class="ModTable" width="100%" cellspacing="5" cellpadding="0" border="0"><tr><td class="exclamation" rowspan="2">&nbsp;!&nbsp;</td><td class="rowuser">Moderator_name '. $lang['WROTE'] .':</td></tr><tr><td class="rowtext">' . $lang['SAMPLE_TEXT'] . '</td></tr></table>',

	// Off topic tag
	'OFFTOPIC'					=> 'מחוץ לנושא',
	'ABBC3_OFFTOPIC_MOVER'		=> 'הכנס טקסט מחוץ לנושא האשכול',
	'ABBC3_OFFTOPIC_TIP'		=> '[offtopic]טקסט[/offtopic]',
##	For translate :                                                                yes
	'ABBC3_OFFTOPIC_VIEW'		=> '<dl class="OffTopic"><dt class="OffTopicTitle">Offtopic: </dt><dd class="OffTopicText">' . $lang['SAMPLE_TEXT'] . '</dd></dl>',

	// NFO
	'ABBC3_NFO_TITLE'			=> 'טקסט מידע',
	'ABBC3_NFO_MOVER'			=> 'טקסט מידע (מוצג כראוי באינטרנט אקספלורר)',
	'ABBC3_NFO_TIP'				=> '[nfo]טקסט מידע[/nfo]',
	'ABBC3_NFO_VIEW'			=> '<table cellspacing="0" cellpadding="0" border="0" ><tr><td><span class="genmed"><b>NFO:</b></span></td></tr><tr><td class="nfo">' . str_replace(" ", "&nbsp;", '    ²  ±±°                                  °°°±±±±²²²      ') . '</td></tr></table>',

	// Justify Align
	'ABBC3_ALIGNJUSTIFY_MOVER'	=> 'טקסט מיושר לשתי הצדדים',
	'ABBC3_ALIGNJUSTIFY_TIP'	=> '[align=justify]טקסט[/align]',
##	For translate :                                                 yes          yes
	'ABBC3_ALIGNJUSTIFY_VIEW'	=> '<div style="text-align:justify">This is <br />a sample text</div>',

	// Right Align
	'ABBC3_ALIGNRIGHT_MOVER'	=> 'טקסט מיושר לימין',
	'ABBC3_ALIGNRIGHT_TIP'		=> '[align=right]טקסט[/align]',
	'ABBC3_ALIGNRIGHT_VIEW'		=> '<div style="text-align:right">' . $lang['SAMPLE_TEXT'] . '</div>',

	// Center Align
	'ABBC3_ALIGNCENTER_MOVER'	=> 'טקסט ממורכז לאמצע',
	'ABBC3_ALIGNCENTER_TIP'		=> '[align=center]טקסט[/align]',
	'ABBC3_ALIGNCENTER_VIEW'	=> '<div style="text-align:center">' . $lang['SAMPLE_TEXT'] . '</div>',

	// Left Align
	'ABBC3_ALIGNLEFT_MOVER'		=> 'טקסט מיושר לשמאל',
	'ABBC3_ALIGNLEFT_TIP'		=> '[align=left]טקסט[/align]',
	'ABBC3_ALIGNLEFT_VIEW'		=> '<div style="text-left:justify">' . $lang['SAMPLE_TEXT'] . '</div>',

	// Preformat
	'ABBC3_PRE_MOVER'			=> 'טקסט לא רציף',
	'ABBC3_PRE_TIP'				=> '[pre]טקסט[/pre]',
	'ABBC3_PRE_VIEW'			=> '<pre>' . $lang['SAMPLE_TEXT'] . '</pre>',

	// Tab
	'ABBC3_TAB_MOVER'			=> 'יוצר מרחק שוליים רגיל',
	'ABBC3_TAB_TIP'				=> '[tab=nn]',
	'ABBC3_TAB_NOTE'			=> 'הזן מספר בפיקסלים שיהווה מרחק מן השוליים.',
	'ABBC3_TAB_VIEW'			=> '<span style="margin-left:20px;"></span>' . $lang['SAMPLE_TEXT'] . '',

	// Superscript
	'ABBC3_SUP_MOVER'			=> 'כתב עילי',
	'ABBC3_SUP_TIP'				=> '[sup]טקסט[/sup]',
##	For translate :                 yes                                                                 yes
	'ABBC3_SUP_VIEW'			=> 'זהו טקסט רגיל <sup>' . $lang['SAMPLE_TEXT'] . '</sup> זהו טקסט רגיל',

	// Subscript
	'ABBC3_SUB_MOVER'			=> 'כתב תחתי',
	'ABBC3_SUB_TIP'				=> '[sub]טקסט[/sub]',
##	For translate :                 yes                                                                 yes
	'ABBC3_SUB_VIEW'			=> 'זהו טקסט רגיל <sub>' . $lang['SAMPLE_TEXT'] . '</sub> זהו טקסט רגיל',

	// Bold
	'ABBC3_B_MOVER'				=> 'מודגש',
	'ABBC3_B_TIP'				=> '[b]טקסט[/b]',
	'ABBC3_B_VIEW'				=> '<strong>' . $lang['SAMPLE_TEXT'] . '</strong>',

	// Italic
	'ABBC3_I_MOVER'				=> 'נטוי',
	'ABBC3_I_TIP'				=> '[i]טקסט[/i]',
	'ABBC3_I_VIEW'				=> '<em>' . $lang['SAMPLE_TEXT'] . '</em>',

	// Underline
	'ABBC3_U_MOVER'				=> 'קו תחתון',
	'ABBC3_U_TIP'				=> '[u]טקסט[/u]',
	'ABBC3_U_VIEW'				=> '<span style="text-decoration: underline">' . $lang['SAMPLE_TEXT'] . '</span>',

	// Strikethrough
	'ABBC3_S_MOVER'				=> 'קו חוצה',
	'ABBC3_S_TIP'				=> '[s]טקסט[/s]',
	'ABBC3_S_VIEW'				=> '<span style="text-decoration: line-through;">' . $lang['SAMPLE_TEXT'] . '</span>',

	// Text Fade
	'ABBC3_FADE_MOVER'			=> 'טקסט בגווני אפור',
	'ABBC3_FADE_TIP'			=> '[fade]טקסט[/fade]',
	'ABBC3_FADE_VIEW'			=> '<span class="fade_link">' . $lang['SAMPLE_TEXT'] . '</span> <script type="text/javascript">fade_ontimer()</script>',

	// Text Gradient
	'ABBC3_GRAD_MOVER'			=> 'טקסט צבעוני',
	'ABBC3_GRAD_TIP'			=> '',
##For translate (The separate words are "This is a sample text") yes                                  yes                                  yes                                  yes                                   yes                                  yes                                   yes                                   yes                                  yes                                  yes                                  yes                                  yes                                  yes                                   yes                                  yes                                  yes                                  yes
	'ABBC3_GRAD_VIEW'			=> '<span style="color: #FF0000">T</span><span style="color: #F2000D">h</span><span style="color: #E6001A">i</span><span style="color: #D90026">s</span> <span style="color: #BF0040">i</span><span style="color: #B3004D">s</span> <span style="color: #990066">a</span> <span style="color: #800080">s</span><span style="color: #73008C">a</span><span style="color: #660099">m</span><span style="color: #5900A6">p</span><span style="color: #4D00B3">l</span><span style="color: #4000BF">e</span> <span style="color: #2600D9">t</span><span style="color: #1A00E6">e</span><span style="color: #0D00F2">x</span><span style="color: #0000FF">t</span>',
	'ABBC3_GRAD_MIN_ERROR'		=> 'תחילה בחר את הטקסט : ',
	'ABBC3_GRAD_MAX_ERROR'		=> 'ניתן לבחור טקסט באורך של עד 120 תווים : ',
	'ABBC3_GRAD_COLORS'			=> 'צבעים שנבחרו מראש',

	// Glow text
	'ABBC3_GLOW_MOVER'			=> 'טקסט זוהר (פועל רק באינטרנט אקספלורר)',
	'ABBC3_GLOW_TIP'			=> '[glow=(color)]טקסט[/glow]',
	'ABBC3_GLOW_VIEW'			=> '<div style="filter:Glow(color=red,strength=4);color:#ffffff;height:110%">' . $lang['SAMPLE_TEXT'] . '</div>',

	// Shadow text
	'ABBC3_SHADOW_MOVER'		=> 'טקסט צל (פועל רק באינטרנט אקספלורר)',
	'ABBC3_SHADOW_TIP'			=> '[shadow=(color)]טקסט[/shadow]',
	'ABBC3_SHADOW_VIEW'			=> '<div style="filter:shadow(color=black,strength=4);color:blue;height:110%">' . $lang['SAMPLE_TEXT'] . '</div>',

	// Dropshadow text
	'ABBC3_DROPSHADOW_MOVER'	=> 'צל לטקסט (פועל רק באינטרנט אקספלורר)',
	'ABBC3_DROPSHADOW_TIP'		=> '[dropshadow=(color)]טקסט[/dropshadow]',
	'ABBC3_DROPSHADOW_VIEW'		=> '<div style="filter:dropshadow(color=#999999,strength=4);color:blue;height:110%">' . $lang['SAMPLE_TEXT'] . '</div>',

	// Blur text
	'ABBC3_BLUR_MOVER'			=> 'טקסט מטושטש (פועל רק באינטרנט אקספלורר)',
	'ABBC3_BLUR_TIP'			=> '[blur=(color)]טקסט[/blur]',
	'ABBC3_BLUR_VIEW'			=> '<div style="filter:Blur(strength=7);color:blue;height:110%">' . $lang['SAMPLE_TEXT'] . '</div>',

	// Wave text
	'ABBC3_WAVE_MOVER'			=> 'טקסט גלי (פועל רק באינטרנט אקספלורר)',
	'ABBC3_WAVE_TIP'			=> '[wave=(color)]טקסט[/wave]',
	'ABBC3_WAVE_VIEW'			=> '<div style="filter:Wave(strength=2);color:blue;height:110%">' . $lang['SAMPLE_TEXT'] . '</div>',

	// Unordered List
	'ABBC3_LISTB_MOVER'			=> 'רשימה',
	'ABBC3_LISTB_TIP'			=> '[list]טקסט[/list]',
	'ABBC3_LISTB_NOTE'			=> 'הערה: כתוב [*] לפני כל שורה',
##	For translate :                         yes           yes           yes                   yes              yes              yes                yes
	'ABBC3_LISTB_VIEW'			=> '<ul><li>פריט1</li><li>פריט2</li><li>פריט3</li></ul><br /> או <br /><ul><li>דיסק<ul><li>עיגול<ul><li>ריבוע</li></ul></li></ul></li></ul><br />',

	// Ordered List
	'ABBC3_LISTO_MOVER'			=> 'רשימה מסודרת',
	'ABBC3_LISTO_TIP'			=> '[list=1|a|A|i|I]טקסט[/list]',
	'ABBC3_LISTO_NOTE'			=> ' הערה: כתוב [*] לפני כל שורה',
##	For translate :                                                                  yes          yes           yes             yes                                                   yes           yes           yes             yes                                                   yes            yes            yes              yes                                                   yes            yes             yes                yes                                                   yes            yes             yes
	'ABBC3_LISTO_VIEW'			=> '<ol style="list-style-type: arabic-numbers"><li>פריט1</li><li>פריט2</li><li>פריט3</li></ol> או <br /><ol style="list-style-type: lower-alpha"><li>פריט1</li><li>פריט2</li><li>פריט3</li></ol> או <br /><ol style="list-style-type: upper-alpha"><li>פריט א</li><li>פריט ב</li><li>פריט ג</li></ol> או <br /><ol style="list-style-type: lower-roman"><li>פריט i</li><li>פריט ii</li><li>פריט iii</li></ol> או <br /><ol style="list-style-type: upper-roman"><li>פריט I</li><li>פריט II</li><li>פריט III</li></ol>',

	// List item
	'ABBC3_LISTITEM_MOVER'		=> 'רשימת פריטים',
	'ABBC3_LISTITEM_TIP'		=> '[*]',
	'ABBC3_LISTITEM_NOTE'		=> 'הערה: צור שורות ברשימה',

	// Line Break
	'ABBC3_HR_MOVER'			=> 'קו חוצץ',
	'ABBC3_HR_TIP'				=> '[hr]',
	'ABBC3_HR_NOTE'				=> 'הערה: הקו החוצץ יווצר מעל השורה שלפניה הוצב התג',
	'ABBC3_HR_VIEW'				=> '<hr noshade color="#000000" size="1px">',

	// Message Box text direction Left to right
	'ABBC3_DIRRTL_MOVER'		=> 'כיוון טקסט מימין לשמאל',
	'ABBC3_DIRRTL_TIP'			=> '[dir=rtl]טקסט[/dir]',
	'ABBC3_DIRRTL_VIEW'			=> '<BDO dir="rtl">' . $lang['SAMPLE_TEXT'] . '</BDO>',

	// Message Box text direction right to Left
	'ABBC3_DIRLTR_MOVER'		=> 'כיוון טקסט משמאל לימין',
	'ABBC3_DIRLTR_TIP'			=> '[dir=ltr]טקסט[/dir]',
	'ABBC3_DIRLTR_VIEW'			=> '<BDO dir="ltr">' . $lang['SAMPLE_TEXT'] . '</BDO>',

	// Marquee Down
	'ABBC3_MARQDOWN_MOVER'		=> 'טקסט מתגלגל מלמעלה ללמטה',
	'ABBC3_MARQDOWN_TIP'		=> '[marq=down]טקסט[/marq]',
	'ABBC3_MARQDOWN_VIEW'		=> '<marquee direction="down" scrolldelay="120" height="80px">' . $lang['SAMPLE_TEXT'] . '</marquee>',

	// Marquee Up
	'ABBC3_MARQUP_MOVER'		=> 'טקסט מתגלגל מלמטה ללמעלה',
	'ABBC3_MARQUP_TIP'			=> '[marq=up]טקסט[/marq]',
	'ABBC3_MARQUP_VIEW'			=> '<marquee direction="up" scrolldelay="120" height="80px">' . $lang['SAMPLE_TEXT'] . '</marquee>',

	// Marquee Right
	'ABBC3_MARQRIGHT_MOVER'		=> 'טקסט עובר מימין לשמאל',
	'ABBC3_MARQRIGHT_TIP'		=> '[marq=right]טקסט[/marq]',
	'ABBC3_MARQRIGHT_VIEW'		=> '<marquee direction="right" scrolldelay="120">' . $lang['SAMPLE_TEXT'] . '</marquee>',

	// Marquee Left
	'ABBC3_MARQLEFT_MOVER'		=> 'טקסט עובר משמאל לימין',
	'ABBC3_MARQLEFT_TIP'		=> '[marq=left]טקסט[/marq]',
	'ABBC3_MARQLEFT_VIEW'		=> '<marquee direction="left" scrolldelay="120">' . $lang['SAMPLE_TEXT'] . '</marquee>',

	// Table row cell wizard
	'ABBC3_TABLE_MOVER'			=> 'הוסף טבלה',
	'ABBC3_TABLE_TIP'			=> '[table=(ccs style)][tr=(ccs style)][td=(ccs style)]טקסט[/td][/tr][/table]',
	'ABBC3_TABLE_VIEW'			=> '<table style="width:50%;border:1px solid #cccccc;" cellspacing="0" cellpadding="0"><tr style="text-align:center;"><td style="border:1px solid #cccccc;">' . $lang['SAMPLE_TEXT'] . '</td></tr></table>',

	'ABBC3_TABLE_STYLE'			=> 'הכנס עיצוב טבלה',
	'ABBC3_TABLE_EXAMPLE'		=> 'width:50%;border:1px solid #cccccc;',

	'ABBC3_ROW_NUMBER'			=> 'הכנס את מספר השורות',
	'ABBC3_ROW_ERROR'			=> 'לא הכנסת את מספר השורות',
	'ABBC3_ROW_STYLE'			=> 'הכנס את עיצוב השורות',
	'ABBC3_ROW_EXAMPLE'			=> 'text-align:center;',

	'ABBC3_CELL_NUMBER'			=> 'הכנס את מספר העמודות',
	'ABBC3_CELL_ERROR'			=> 'לא הכנסת את מספר העמודות',
	'ABBC3_CELL_STYLE'			=> 'הכנס את עיצוב העמודות',
	'ABBC3_CELL_EXAMPLE'		=> 'border:1px solid #cccccc;',

	// Simple upload files
	'ABBC3_UPLOAD_TITLE'		=> 'עמוד העלאת קבצים',
	'ABBC3_UPLOAD_MOVER'		=> 'העלה קובץ',
	'ABBC3_UPLOAD_LINK'			=> 'זה הקישור לקובץ שהעלת:',
	'ABBC3_UPLOAD_UPLOADED'		=> 'הקובץ  %s נשלח בהצלחה!',
	'ABBC3_UPLOAD_NOT_UPLOADED'	=> 'הקובץ %s לא נשלח בהצלחה',
	'ABBC3_UPLOAD_ALREADY'		=> 'הקובץ %s כבר קיים, בבקשה חפש אלטרנטיבה אחרת לשליחת הקובץ או שנה את שמו ושלח שוב',
	'ABBC3_UPLOAD_ERROR'		=> 'אינך יכול להעלות קבצים אל %s. התקבלה השגיאה הבאה: %d',
	'ABBC3_UPLOAD_EXTENSION'	=> 'סיומות אפשריות',

	'ABBC3_UPLOAD_DISABLED'		=> 'סיומת הקובץ %s אינה מותרת',
	'ABBC3_UPLOAD_SIZE'			=> 'גודל מקסימלי',
	'ABBC3_UPLOAD_NOSIZE'		=> 'הקובץ %d גדול מידיי. מקסימום גודל הקובץ לשליחה הוא %d KB',
	'ABBC3_UPLOAD_EMPTY'		=> 'שורת הקובץ ריקה, אנא בחר תחילה קובץ לשליחה',

	// Hyperlink Wizard
	'ABBC3_URL_TAG'				=> 'דף',
	'ABBC3_URL_MOVER'			=> 'כתובת אתר',	
	'ABBC3_URL_TIP'				=> '[url]http://...[/url] או [url=http://...]שם האתר[/url]',
	'ABBC3_URL_EXAMPLE'			=> 'http://www.google.com',
	'ABBC3_URL_VIEW'			=> '<a href="http://www.google.com" class="postlink">Google</a>',

	// Email Wizard
	'ABBC3_EMAIL_TAG'			=> 'דואר אלקטרוני',
	'ABBC3_EMAIL_MOVER'			=> 'כתובת דואר אלקטרוני',
	'ABBC3_EMAIL_TIP'			=> '[email]user@server.ext[/email] או [email=user@server.ext]כתובת דואר אלקטרוני שלי[/email]',
	'ABBC3_EMAIL_EXAMPLE'		=> 'user@server.ext',
	'ABBC3_EMAIL_VIEW'			=> '<a href="mailto:user@server.ext">user@server.ext</a>',

	// Ed2k link Wizard
	'ABBC3_ED2K_TAG'			=> 'ed2k',
	'ABBC3_ED2K_MOVER'			=> 'קישור eD2K',
	'ABBC3_ED2K_TIP'			=> '[url]link ed2k[/url] או [url=link ed2k]שם ed2k[/url]',
	'ABBC3_ED2K_EXAMPLE'		=> 'ed2k://|file|The_Two_Towers-The_Purist_Edit-Trailer.avi|14997504|965c013e991ee246d63d45ea71954c4d|/',
	'ABBC3_ED2K_VIEW'			=> '<a href="ed2k://|file|The_Two_Towers-The_Purist_Edit-Trailer.avi|14997504|965c013e991ee246d63d45ea71954c4d|/" class="postlink">The_Two_Towers-The_Purist_Edit-Trailer.avi</a>',
	'ABBC3_ED2K_ADD'			=> 'הוסף את הקישורים שבחרת כקישורי ed2k',
	'ABBC3_ED2K_FRIEND'			=> 'חבר ed2k',
	'ABBC3_ED2K_SERVER'			=> 'שרת ed2k',
	'ABBC3_ED2K_SERVERLIST'		=> 'רשימת שרתי ed2k',

	// Web included by iframe
	'ABBC3_WEB_TAG'				=> 'אתר',
	'ABBC3_WEB_MOVER'			=> 'הכנס אתר בשורה',
	'ABBC3_WEB_TIP'				=> '[web width=200 height=100]קישור לאתר[/web]',
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
	'ABBC3_THUMBNAIL_VIEW'		=> '<img src="http://www.google.com/intl/en_com/images/logo_plain.png" alt="' . $user->lang['IMAGE'] . '" border="0" width="200px" class="hoverbox resize_me" />',

	// Imgshack
	'ABBC3_IMGSHACK_MOVER'		=> 'imageshack הוסף תמונה מאתר',
	'ABBC3_IMGSHACK_TIP'		=> '[url=http://imageshack.us][img=http://...][/img][/url]',
	'ABBC3_IMGSHACK_VIEW'		=> '<a href="http://img207.imageshack.us/my.php?image=advancedbbcodebox3prosidd3.gif" class="postlink"><img src="http://img207.imageshack.us/img207/1773/advancedbbcodebox3prosidd3.th.gif" alt="Image" /></a>',

	// Rapid share checker
	'ABBC3_FOPEN_ERROR'			=> '<strong>שגיאה : </strong> מצטערים, אך נראה כי <strong>allow_url_fopen</strong> לא פעיל., פונקציה זו מחייבת את PHP allow_url_fopen להיות מופעלת.',
	'ABBC3_RAPIDSHARE_TAG'		=> 'ראפיד-שר',
	'ABBC3_RAPIDSHARE_MOVER'	=> 'הכנס קובץ מאתר ראפיד-שר',
	'ABBC3_RAPIDSHARE_TIP'		=> '[rapidshare]http://rapidshare.com/files/...[/rapidshare]',
	'ABBC3_RAPIDSHARE_EXAMPLE'	=> 'http://rapidshare.com/files/86587996/ABBC3_v108.zip.html',
	'ABBC3_RAPIDSHARE_VIEW'		=> '<a href="http://rapidshare.com/files/86587996/ABBC3_v108.zip.html" >http://rapidshare.com/files/86587996/ABBC3_v108.zip.html</a> <font color="green" size="4" >File not found !</font><br />',
	'ABBC3_RAPIDSHARE_GOOD'		=> 'הקובץ קיים על השרת!',
	'ABBC3_RAPIDSHARE_WRONG'	=> 'הקובץ לא קיים על השרת!',

	// testlink
	'ABBC3_CURL_ERROR'			=> '<strong>שגיאה : </strong> מצטערים, אך נראה כי ה-CURL לא טעון, אנא התקן אותו בכדי להשתמש באפשרות זו.',
	'ABBC3_LOGIN_EXPLAIN_VIEW'	=> 'המערכת דורשת ממך להיות רשום ולהתחבר כדי שתוכל לצפות בקישורים.',
	'ABBC3_TESTLINK_TAG'		=> 'בודק קישור',
	'ABBC3_TESTLINK_MOVER'		=> 'הוסף קובץ המאוחסן על שרת ציבורי',
	'ABBC3_TESTLINK_TIP'		=> '[testlink]http://rapidshare.com/files/...[/testlink]',
	'ABBC3_TESTLINK_NOTE'		=> 'שרתים מותרים:rapidshare,megaupload,megarotic,depositfiles,megashares .',
	'ABBC3_TESTLINK_EXAMPLE'	=> 'http://rapidshare.com/files/86587996/ABBC3_v108.zip.html',
	'ABBC3_TESTLINK_VIEW'		=> '<dl class="testlink"><dd><font color="red" size="4" >X</font>&nbsp;<a href="http://rapidshare.com/files/86587996/ABBC3_v108.zip.html" >http://rapidshare.com/files/86587996/ABBC3_v108.zip.html</a><br /></dd></dl>',
	'ABBC3_TESTLINK_GOOD'		=> 'הקובץ נמצא בשרת !',
	'ABBC3_TESTLINK_WRONG'		=> 'קובץ לא נמצא !',

	// Click counter
	'ABBC3_CLICK_TAG'			=> 'לחצן',
	'ABBC3_CLICK_MOVER'			=> 'הכנס מונה לחיצות',
	'ABBC3_CLICK_TIP'			=> '[click]http://...[/click] או [click=http://...]Name Web[/click] או [click][img]http://...[/img][/click]',
	'ABBC3_CLICK_EXAMPLE' 		=> 'http://www.google.com ' . ' ' . 'http://www.google.com/intl/en_com/images/logo_plain.png' ,
	'ABBC3_CLICK_VIEW'			=> '<a href="./click.php?id=1" >http://www.phpbb.com</a> ( נלחץ פעם 1 )<br />',
	'ABBC3_CLICK_TIME'			=> '( נלחץ %d פעם )',
	'ABBC3_CLICK_TIMES'			=> '( נלחץ %d פעמים )',
	'ABBC3_CLICK_ERROR'			=> '<strong>שגיאה:</strong> נא להזין מספר זיהוי תקף של לחיצות בקישור',

	// Search tag
	'ABBC3_SEARCH_MOVER'		=> 'הכנס מילה לחיפוש',
	'ABBC3_SEARCH_TIP'			=> '[search(=(msn|yahoo|google|altavista|lycos|wikipedia))]טקסט[/search]',
	'ABBC3_SEARCH_VIEW'			=> $lang['SEARCH_MINI'] . ' ' . $config['sitename'] . ' : <a href="search.php?keywords=Advanced BBcode box 3">"Advanced BBcode box 3"</a><br/><br/>' . $lang['SEARCH_MINI'] . ' msn : <a href="http://search.live.com/results.aspx?q=Advanced BBcode box 3&mkt=tr-TR&lf=1" target="_blank">"Advanced BBcode box 3"</a><br/><br/>' .$lang['SEARCH_MINI'] . ' yahoo : <a href="http://search.yahoo.com/search?p=Advanced BBcode box 3" target="_blank">"Advanced BBcode box 3"</a><br/><br/>' . $lang['SEARCH_MINI'] . ' google : <a href="http://www.google.com.tr/search?q=Advanced BBcode box 3" target="_blank">"Advanced BBcode box 3"</a>',

	// BBvideo Wizard
	'ABBC3_BBVIDEO_TAG'			=> 'BBvideo',
	'ABBC3_BBVIDEO_MOVER'		=> 'הכנס כתובת וידאו',
	'ABBC3_BBVIDEO_TIP'			=> '[BBvideo]כתובת הוידיאו[/BBvideo]',
	'ABBC3_BBVIDEO_EXAMPLE'		=> 'http://www.youtube.com/watch?v=TA4hm97m494',
	'ABBC3_BBVIDEO_VIEW'		=> '<object width="200" height="100"><param name="movie" value="http://www.youtube.com/v/TA4hm97m494" /><param name="wmode" value="transparent" /><embed src="http://www.youtube.com/v/TA4hm97m494" type="application/x-shockwave-flash" wmode="transparent" width="200" height="100"></embed></object>',
	'ABBC3_BBVIDEO_FILE'		=> 'פורמט הוידאו',
	'ABBC3_BBVIDEO_VIDEO'		=> 'נלקח מ',

	// Flash (swf) Wizard
	'ABBC3_FLASH_TAG'			=> 'פלאש',
	'ABBC3_FLASH_MOVER'			=> 'הוסף קובץ פלאש (swf)',
	'ABBC3_FLASH_TIP'			=> '[flash width=# height=#]כתובת קובץ הפלאש[/flash] או [flash width,height]כתובת קובץ הפלאש[/flash]',
	'ABBC3_FLASH_EXAMPLE'		=> 'http://www.adobe.com/support/flash/ts/documents/test_version/version.swf',
	'ABBC3_FLASH_VIEW'			=> '<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0" width="200" height="100"><param name="movie" value="http://www.adobe.com/support/flash/ts/documents/test_version/version.swf" /><param name="play" value="true" /><param name="loop" value="true" /><param name="quality" value="high" /><param name="allowScriptAccess" value="never" /><param name="allowNetworking" value="internal" /><embed src="http://www.adobe.com/support/flash/ts/documents/test_version/version.swf" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" width="200" height="100" play="true" loop="true" quality="high" allowscriptaccess="never" allownetworking="internal"></embed></object>',

	// Flash (flv) Wizard
	'ABBC3_FLV_TAG'				=> 'וידאו פלאש',
	'ABBC3_FLV_MOVER'			=> 'הכנס קובץ וידאו פלאש (flv)',
	'ABBC3_FLV_TIP'				=> '[flv width=# height=#]URL flash video[/flv] or [flv width,height]URL flash video[/flv]',
	'ABBC3_FLV_EXAMPLE' 		=> 'http://www.channel-ai.com/video/eyn/demo1.flv',
	'ABBC3_FLV_VIEW'			=> '<embed src="../images/flvplayer.swf" width="200" height="100" bgcolor="#FFFFFF" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="file=../files/demo1.flv&autostart=false" />',

	// Streaming Video Wizard
	'ABBC3_VIDEO_TAG'			=> 'וידאו',
	'ABBC3_VIDEO_MOVER'			=> 'הוסף קובץ וידיאו',
	'ABBC3_VIDEO_TIP'			=> '[video width=# height=#]כתובת קובץ הוידיאו[/video]',
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
	'ABBC3_QUICKTIME_MOVER'		=> 'הוסף קובץ קוויק טיים',
	'ABBC3_QUICKTIME_TIP'		=> '[quicktime width=# height=#]כתובת קובץ קוויק טיים[/quicktime]',
	'ABBC3_QUICKTIME_EXAMPLE'	=> 'http://www.nature.com/neuro/journal/v3/n3/extref/Li_control.mov.qt' . ' ' . 'http://www.carnivalmidways.com/images/Music/thisisatest.mp3',
	'ABBC3_QUICKTIME_VIEW'		=> '<object id="qtstream_" classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab#version=6,0,2,0" width="200" height="100"><param name="src" value="http://www.nature.com/neuro/journal/v3/n3/extref/Li_control.mov.qt" /><param name="controller" value="true" /><param name="autoplay" value="false" /><param name="type" value="video/quicktime" /><embed name="qtstream_" src="http://www.nature.com/neuro/journal/v3/n3/extref/Li_control.mov.qt" pluginspage="http://www.apple.com/quicktime/download/" enablejavascript="true" controller="true" width="200" height="100" type="video/quicktime" autoplay="false"></embed></object>',

	// Real Media Wizard
	'ABBC3_RAM_TAG'				=> 'RealMedia',
	'ABBC3_RAM_MOVER'			=> 'הוסף קובץ ריאל פלייר',
	'ABBC3_RAM_TIP'				=> '[ram]כתובת קובץ ריאל פלייר[/ram]',
	'ABBC3_RAM_EXAMPLE'			=> 'http://www.bbc.co.uk/scotland/radioscotland/media/radioscotland.ram',
	'ABBC3_RAM_VIEW'			=> '<object id="rmstream_" classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" width="200" height="100"><param name="src" value="http://www.bbc.co.uk/scotland/radioscotland/media/radioscotland.ram" /><param name="autostart" value="false" /><param name="controls" value="ImageWindow" /><param name="console" value="ctrls_" /><param name="prefetch" value="false" /><embed name="rmstream_" type="audio/x-pn-realaudio-plugin" src="http://www.bbc.co.uk/scotland/radioscotland/media/radioscotland.ram" width="200" height="100" autostart="false" controls="ImageWindow" console="ctrls_" prefetch="false"></embed></object><br /><object id="ctrls_" classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" width="200" height="36"><param name="controls" value="ControlPanel" /><param name="console" value="ctrls_" /><embed name="ctrls_" type="audio/x-pn-realaudio-plugin" width="200" height="36" controls="ControlPanel" console="ctrls_"></embed></object>',

//	// Stage6 video Wizard
//	'ABBC3_STAGE6_TAG'			=> 'Stage6 Video',
//	'ABBC3_STAGE6_MOVER'		=> 'Insert video from Stage6', // from http://www.stage6.com/
//	'ABBC3_STAGE6_TIP'			=> '[stage6]Stage6 ID[/stage6]',
//	'ABBC3_STAGE6_EXAMPLE'		=> '2068715',
//	'ABBC3_STAGE6_VIEW'			=> '<object  classid="clsid:67DABFBF-D0AB-41fa-9C46-CC0F21721616" codebase="http://download.divx.com/player/DivXBrowserPlugin.cab" width="200" height="100" ><param name="src" value="http://video.stage6.com/2068715/.divx" /><param name="autoplay" value="false" /><param name="custommode" value="Stage6" /><param name="showpostplaybackad" value="false" /><embed type="video/divx" src="http://video.stage6.com/2068715/.divx" pluginspage="http://go.divx.com/plugin/download/" showpostplaybackad="false" custommode="Stage6" autoplay="false" width="200" height="100" /></object><br />',

	// Google video Wizard
	'ABBC3_GVIDEO_TAG'			=> 'גוגל וידאו',
	'ABBC3_GVIDEO_MOVER'		=> 'Google הוסף וידיאו מאתר',
	'ABBC3_GVIDEO_TIP'			=> '[GVideo]כתובת הוידיאו[/GVideo]',
	'ABBC3_GVIDEO_EXAMPLE'		=> 'http://video.google.com/videoplay?docid=-8351924403384451128',
	'ABBC3_GVIDEO_VIEW'			=> '<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0" width="200" height="100"><param name="movie" value="http://video.google.com/googleplayer.swf?docid=-8351924403384451128" /><param name="play" value="false" /><param name="loop" value="false" /><param name="quality" value="high" /><param name="allowScriptAccess" value="never" /><param name="allowNetworking" value="internal" /><embed src="http://video.google.com/googleplayer.swf?docid=-8351924403384451128" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" width="200" height="100" play="false" loop="false" quality="high" allowscriptaccess="never" allownetworking="internal"></embed></object>',

	// Youtube video Wizard
	'ABBC3_YOUTUBE_TAG'			=> 'יוטוב וידאו',
	'ABBC3_YOUTUBE_MOVER'		=> 'Youtube הוסף וידיאו מאתר',
	'ABBC3_YOUTUBE_TIP'			=> '[youtube]כתובת הוידיאו[/youtube]',
	'ABBC3_YOUTUBE_EXAMPLE'		=> 'http://www.youtube.com/watch?v=TA4hm97m494',
	'ABBC3_YOUTUBE_VIEW'		=> '<object width="200" height="100"><param name="movie" value="http://www.youtube.com/v/TA4hm97m494" /><param name="wmode" value="transparent" /><embed src="http://www.youtube.com/v/TA4hm97m494" type="application/x-shockwave-flash" wmode="transparent" width="200" height="100"></embed></object>',

	// Veoh video
	'ABBC3_VEOH_TAG'			=> 'Veoh',
	'ABBC3_VEOH_MOVER'			=> 'הוסף וידיאו מאתר Veoh',
	'ABBC3_VEOH_TIP'			=> '[veoh]כתובת הוידיאו[/veoh]',
	'ABBC3_VEOH_EXAMPLE'		=> 'http://www.veoh.com/videos/v1409404EqT5SJjM',
	'ABBC3_VEOH_VIEW'			=> '<embed src="http://www.veoh.com/videodetails2.swf?permalinkId=v1409404EqT5SJjM&id=anonymous&player=videodetailsembedded&videoAutoPlay=0" allowFullScreen="true" width="200" height="100" bgcolor="#000000" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>',

	// Collegehumor video
	'ABBC3_COLLEGEHUMOR_TAG'	=> 'collegehumor',
	'ABBC3_COLLEGEHUMOR_MOVER'	=> 'הוסף וידיאו מאתר collegehumor',
	'ABBC3_COLLEGEHUMOR_TIP'	=> '[collegehumor]כתובת הוידיאו[/collegehumor]',
	'ABBC3_COLLEGEHUMOR_EXAMPLE'=> 'http://www.collegehumor.com/video:1802097',
	'ABBC3_COLLEGEHUMOR_VIEW'	=> '<object type="application/x-shockwave-flash" data="http://www.collegehumor.com/moogaloop/moogaloop.swf?clip_id=1802097&fullscreen=1" width="200" height="100" ><param name="allowfullscreen" value="true" /><param name="movie" quality="best" value="http://www.collegehumor.com/moogaloop/moogaloop.swf?clip_id=1802097&fullscreen=1" /></object>',

	// Dailymotion video
	'ABBC3_DM_MOVER'			=> 'הוסף וידיאו מאתר dailymotion', // from http://www.dailymotion.com/
	'ABBC3_DM_TIP'				=> '[dm]Dailymotion זיהוי[/dm]',
	'ABBC3_DM_EXAMPLE'			=> 'http://www.dailymotion.com/swf/x3hm7o',
	'ABBC3_DM_VIEW'				=> '<object width="200" height="100"><param name="movie" value="http://www.dailymotion.com/swf/x3hm7o" /><param name="allowFullScreen" value="true" /><param name="allowScriptAccess" value="never" /><embed src="http://www.dailymotion.com/swf/x3hm7o" type="application/x-shockwave-flash" width="200" height="100" allowFullScreen="true" allowScriptAccess="never"></embed></object>',

	// Gamespot video
	'ABBC3_GAMESPOT_MOVER'		=> 'הוסף וידיאו מאתר Gamespot',
	'ABBC3_GAMESPOT_TIP'		=> '[gamespot]כתובת הוידיאו[gamespot]',
	'ABBC3_GAMESPOT_EXAMPLE'	=> 'http://www.gamespot.com/video/944074/6185798/tom-clancys-rainbow-six-vegas-2-official-trailer-3',
	'ABBC3_GAMESPOT_VIEW'		=> '<embed id="mymovie" width="200" height="100" flashvars="paramsURI=http%3A%2F%2Fwww%2Egamespot%2Ecom%2Fpages%2Fvideo%5Fplayer%2Fproteus%5Fxml%2Ephp%3Fadseg%3D%26adgrp%3D%26sid%3D6185798%26pid%3D944074%26mb%3D%26onid%3D%26nc%3D1202626246593%26embedded%3D1%26showWatermark%3D0%26autoPlay%3D0" allowfullscreen="true" allowscriptaccess="never" quality="high" name="mymovie" src="http://image.com.com/gamespot/images/cne_flash/production/media_player/proteus/gs/proteus_embed.swf" type="application/x-shockwave-flash"/>',

	// Gametrailers video
	'ABBC3_GAMETRAILERS_MOVER'	=> 'הוסף וידיאו מאתר Gametrailers',
	'ABBC3_GAMETRAILERS_TIP'	=> '[gametrailers]כתובת הוידיאו[/gametrailers]',
	'ABBC3_GAMETRAILERS_EXAMPLE'=> 'http://www.gametrailers.com/player/30461.html',
	'ABBC3_GAMETRAILERS_VIEW'	=> '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"  codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" id="gtembed" width="200" height="100"><param name="allowScriptAccess" value="never" /><param name="allowFullScreen" value="true" /><param name="movie" value="http://www.gametrailers.com/remote_wrap.php?mid=30461" /><param name="quality" value="high" /><embed src="http://www.gametrailers.com/remote_wrap.php?mid=30461" swLiveConnect="true" name="gtembed" align="middle" allowScriptAccess="never" allowFullScreen="true" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="200" height="100"></embed></object>',

	// IGN video
	'ABBC3_IGNVIDEO_MOVER'		=> 'הוסף וידיאו מאתר Ign',
	'ABBC3_IGNVIDEO_TIP'		=> '[ignvideo]כתובת הוידיאו[/ignvideo]',
	'ABBC3_IGNVIDEO_EXAMPLE'	=> 'object_ID=967025&downloadURL=http://tvmovies.ign.com/tv/video/article/850/850894/knightrider_trailer_020808_flvlow.flv',
	'ABBC3_IGNVIDEO_VIEW'		=> '<embed src="http://videomedia.ign.com/ev/ev.swf" flashvars="object_ID=967025&downloadURL=http://tvmovies.ign.com/tv/video/article/850/850894/knightrider_trailer_020808_flvlow.flv" type="application/x-shockwave-flash" width="200" height="100" ></embed>',

	// LiveLeak video
	'ABBC3_LIVELEAK_MOVER'		=> 'הוסף וידיאו מאתר Liveleak',
	'ABBC3_LIVELEAK_TIP'		=> '[liveleak]כתובת הוידיאו[/liveleak]',
	'ABBC3_LIVELEAK_EXAMPLE'	=> 'http://www.liveleak.com/view?i=413_1202590393',
	'ABBC3_LIVELEAK_VIEW'		=> '<object type="application/x-shockwave-flash" width="200" height="100" wmode="transparent" data="http://www.liveleak.com/player.swf?autostart=false&token=i=413_1202590393"><param name="movie" value="http://www.liveleak.com/player.swf?autostart=false&token=$1" /><param name="wmode" value="transparent" /><param name="quality" value="high" /></object>',

	// Custom BBcodes
	// Deezer audio
	'DEEZER_TAG'			=> 'Deezer',
	'DEEZER_MOVER'			=> 'הוסף שמע מאתר Deezer',
	'DEEZER_TIP'			=> '[Deezer]כתובת השמע[/Deezer]',
	'DEEZER_EXAMPLE'		=> 'http://www.deezer.com/track/351534',
	'DEEZER_VIEW'			=> '<object width="180" height="220"><param name="movie" value="http://www.deezer.com/embedded/widget.swf?path=696108&lang=en&autoplay=true&id=351534"></param><embed src="http://www.deezer.com/embedded/widget.swf?path=696108&lang=en&autoplay=true&id=351534" type="application/x-shockwave-flash" width="180" height="220"></embed></object>',

));
?>