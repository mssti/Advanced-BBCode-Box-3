<?php
/** 
*
* abbcode [hebrew]
* @package language
* @version $Id: abbcode.php, v 1.0.7b 2008/02/21 02:10:07 leviatan21 Exp $
* @Hebrew version $Id: $ phpBB 3.0.0 - 1.0.7b
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
* י - ֳ©
* ט - ֳ¨
* ך - ֳ×
* כ - ֳ«
* �? - ֳ
* ג - ֳ¢
* ה - ֳ₪
* מ - ֳ®
* ן - ֳ¯
* ע - ֳ²
* פ - ֳ´
* ש - ֳ¹
*  - ֳ»
* ח - ֳ§
* ב = ֳ¡
* ֱ = ֳ  XX
* י = ֳ©
* ֹ = ֳ‰ XX
* �? = ֳ­
* ֽ = ֳ?
* ף = ֳ³
* ׃ = ֳ“
* ת = ֳ÷
*  = ֳ
* ס = ֳ±
* �? = ֳ‘
* ? = ֲ¿
********************************************************************/

$lang = array_merge($lang, array(
	'BBCODE_STYLES_TIP'			=> 'טיפ: ניתן לשנות עיצוב לטקסט במיידית על ידי בחירת טקסט ולחיצה על התגית הרצויה.',

	// Help
	'ABBC3_HELP_TITLE'			=> 'דף עזרה',
	'ABBC3_HELP_CUSTOM_TITLE'	=> 'דף עזרה לתגיות מות�?�? �?ישית',
	'ABBC3_HELP_DESC'			=> 'תי�?ור',
	'ABBC3_HELP_WRITE'			=> 'כתוב �?ת העיצוב שלך',
	'ABBC3_HELP_VIEW'			=> 'מציג �?ת העיצובי�? שלנו',
	'ABBC3_HELP_ABOUT'			=> 'Advanced BBCode Box 3 נוצר על ידי <a href="http://www.mssti.com/phpbb3">mssti</a>',
		
	// Dropdown titles options
	'ABBC3_FONTTYPE_MOVER'		=> 'סוג גופן',
	'ABBC3_FONTTYPE_TIP'		=> ' [font=Comic Sans MS]טקסט[/font]',
	'ABBC3_FONTTYPE_VIEW'		=> '<span style="font-family:Comic Sans MS">זהו טקסט הדגמה</span>',

	'ABBC3_FONT_GIANT'			=> 'ענק',

	'ABBC3_FONTCOLOR_MOVER'		=> 'צבע גופן',
	'ABBC3_FONTCOLOR_TIP'		=> ' [color=red]טקסט[/color] הערה: �?תה יכול להשתמש ג�? בקוד צבע (color=#FF0000 or color=red)',
	'ABBC3_FONTCOLOR_VIEW'		=> '<span style="color:red">זהו טקסט הדגמה</span>',

	'ABBC3_FONTSIZE_MOVER'		=> 'גודל גופן',
	'ABBC3_FONTSIZE_TIP'		=> ' [size=150]טקסט ענק[/size] הגודל מתו�?ר ב�?חוזי�?',
	'ABBC3_FONTSIZE_VIEW'		=> '<span style="font-size: 150%; line-height: 116%;">זהו טקסט הדגמה</span>',

	'ABBC3_FONTHILI_MOVER'		=> 'מסומן בצבע',
	'ABBC3_FONTHILI_TIP'		=> ' [highlight=yellow]טקסט[/highlight] הערה: �?תה יכול להשתמש ג�? בקוד צבע color=#FF0000 or color=red)',
	'ABBC3_FONTHILI_VIEW'		=> '<span style="background-color: yellow;">זהו טקסט הדגמה</span>',
		
	// Text to be applied to the helpline & mouseover & help page
	'ABBC3_JUSTIFY_MOVER'		=> 'טקסט מיושר לשתי הצדדי�?',
	'ABBC3_JUSTIFY_TIP'			=> ' [align=justify]טקסט[/align]',
	'ABBC3_JUSTIFY_VIEW'		=> '<div style="text-align:justify">זהו טקסט הדגמה</div>',

	'ABBC3_RIGHT_MOVER'			=> 'טקסט מיושר לימין',
	'ABBC3_RIGHT_TIP'			=> ' [align=right]טקסט[/align]',
	'ABBC3_RIGHT_VIEW'			=> '<div style="text-align:right">זהו טקסט הדגמה</div>',

	'ABBC3_CENTER_MOVER'		=> 'טקסט ממורכז ל�?מצע',
	'ABBC3_CENTER_TIP'			=> ' [align=center]טקסט[/align]',
	'ABBC3_CENTER_VIEW'			=> '<div style="text-align:center">זהו טקסט הדגמה</div>',

	'ABBC3_LEFT_MOVER'			=> 'טקסט מיושר לשמ�?ל',
	'ABBC3_LEFT_TIP'			=> ' [align=left]טקסט[/align]',
	'ABBC3_LEFT_VIEW'			=> '<div style="text-left:justify">זהו טקסט הדגמה</div>',

	'ABBC3_PRE_MOVER'			=> 'טקסט ל�? רציף',
	'ABBC3_PRE_TIP'				=> ' [pre]טקסט[/pre]',
	'ABBC3_PRE_VIEW'			=> '<pre>זהו טקסט הדגמה</pre>',

	'ABBC3_SUP_MOVER'			=> 'טקסט עילי',
	'ABBC3_SUP_TIP'				=> ' [sup]טקסט[/sup]',
	'ABBC3_SUP_VIEW'			=> '<sup>זהו טקסט הדגמה</sup>',

	'ABBC3_SUB_MOVER'			=> 'טקסט תחתי',
	'ABBC3_SUB_TIP'				=> ' [sub]טקסט[/sub]',
	'ABBC3_SUB_VIEW'			=> '<sub>זהו טקסט הדגמה</sub>',

	'ABBC3_BOLD_MOVER'			=> 'טקסט מודגש',
	'ABBC3_BOLD_TIP'			=> ' [b]טקסט[/b]',
	'ABBC3_BOLD_VIEW'			=> '<strong>זהו טקסט הדגמה</strong>',

	'ABBC3_ITALIC_MOVER'		=> 'טקסט נטוי',
	'ABBC3_ITALIC_TIP'			=> ' [i]טקסט[/i]',
	'ABBC3_ITALIC_VIEW'			=> '<em>זהו טקסט הדגמה</em>',

	'ABBC3_UNDERLINE_MOVER'		=> 'קו מתחת לטקסט',
	'ABBC3_UNDERLINE_TIP'		=> ' [u]טקסט[/u]',
	'ABBC3_UNDERLINE_VIEW'		=> '<span style="text-decoration: underline">זהו טקסט הדגמה</span>',

	'ABBC3_STRIKE_MOVER'		=> 'קו ב�?מצע הטקסט',
	'ABBC3_STRIKE_TIP'			=> ' [s]טקסט[/s]',
	'ABBC3_STRIKE_VIEW'			=> '<strike>זהו טקסט הדגמה</strike>',

	'ABBC3_FADE_MOVER'			=> 'טקסט בגווני �?פור',
	'ABBC3_FADE_TIP'			=> ' [fade]טקסט[/fade]',
	'ABBC3_FADE_VIEW'			=> '<span class="fade_link">זהו טקסט הדגמה</span> <script type="text/javascript">fade_ontimer()</script>',

	'ABBC3_GRAD_MOVER'			=> 'טקסט צבעוני',
	'ABBC3_GRAD_TIP'			=> '',
	'ABBC3_GRAD_VIEW'			=> '<span style="color: #FF0000">�</span><span style="color: #F5000A">�</span><span style="color: #EB0014">�</span><span style="color: #E0001F">�</span><span style="color: #D60029">�</span><span style="color: #CC0033">�</span> <span style="color: #B80047">�</span><span style="color: #AD0052">�</span><span style="color: #A3005C">�</span><span style="color: #990066">�</span><span style="color: #8F0070">�</span><span style="color: #85007A">�</span><span style="color: #7A0085">�</span><span style="color: #70008F">�</span> <span style="color: #5C00A3">�</span><span style="color: #5200AD">�</span><span style="color: #4700B8">�</span><span style="color: #3D00C2">�</span><span style="color: #3300CC">�</span><span style="color: #2900D6">�</span><span style="color: #1F00E0">�</span><span style="color: #1400EB">�</span><span style="color: #0A00F5">�</span><span style="color: #0000FF">�</span>',
	
	'ABBC3_RTL_MOVER'			=> 'כיוון טקסט מימין לשמ�?ל',
	'ABBC3_RTL_TIP'				=> ' [dir=rtl]טקסט[/dir]',
	'ABBC3_RTL_VIEW'			=> '<BDO dir="rtl">זהו טקסט הדגמה</BDO>',

	'ABBC3_LTR_MOVER'			=> 'כיוון טקסט משמ�?ל לימין',
	'ABBC3_LTR_TIP'				=> ' [dir=ltr]טקסט[/dir]',
	'ABBC3_LTR_VIEW'			=> '<BDO dir="ltr">זהו טקסט הדגמה</BDO>',

	'ABBC3_MARQD_MOVER'			=> 'טקסט מתגלגל מלמעלה ללמטה',
	'ABBC3_MARQD_TIP'			=> ' [marq=down]טקסט[/marq]',
	'ABBC3_MARQD_VIEW'			=> '<marquee direction="down" scrolldelay="120">זהו טקסט הדגמה</marquee>',

	'ABBC3_MARQU_MOVER'			=> 'טקסט מתגלגל מלמטה ללמעלה',
	'ABBC3_MARQU_TIP'			=> ' [marq=up]טקסט[/marq]',
	'ABBC3_MARQU_VIEW'			=> '<marquee direction="up" scrolldelay="120">זהו טקסט הדגמה</marquee>',

	'ABBC3_MARQR_MOVER'			=> 'טקסט עובר מימין לשמ�?ל',
	'ABBC3_MARQR_TIP'			=> ' [marq=right]טקסט[/marq]',
	'ABBC3_MARQR_VIEW'			=> '<marquee direction="right" scrolldelay="120">זהו טקסט הדגמה</marquee>',

	'ABBC3_MARQL_MOVER'			=> 'טקסט עובר משמ�?ל לימין',
	'ABBC3_MARQL_TIP'			=> ' [marq=left]טקסט[/marq]',
	'ABBC3_MARQL_VIEW'			=> '<marquee direction="left" scrolldelay="120">זהו טקסט הדגמה</marquee>',

	'ABBC3_TABLE_MOVER'			=> 'הוסף טבלה',
	'ABBC3_TABLE_TIP'			=> ' [table=(ccs style)][tr=(ccs style)][td=(ccs style)]טקסט[/td][/tr][/table]',
	'ABBC3_TABLE_VIEW'			=> '<table style="width:50%;border:1px solid #cccccc;" cellspacing="0" cellpadding="0"><tr style="text-align:center;"><td style="border:1px solid #cccccc;">זהו טקסט הדגמה</td></tr></table>',

	'ABBC3_QUOTE_MOVER'			=> 'ציטוט',
	'ABBC3_QUOTE_TIP'			=> ' [quote]טקסט[/quote] �?ו [quote=\"member\"]טקסט[/quote]',
	'ABBC3_QUOTE_VIEW'			=> '<blockquote><div><cite>member '. $lang['WROTE'] .':</cite>זהו טקסט הדגמה</div></blockquote>',

	'ABBC3_CODE_MOVER'			=> 'קוד',
	'ABBC3_CODE_TIP'			=> ' [code]קטע קוד[/code]',
	'ABBC3_CODE_VIEW'			=> '<dl class="codebox"><dt>'. $lang['CODE'] .': <a href="#" onclick="selectCode(this); return false;">'. $lang['SELECT_ALL_CODE'] .'</a></dt><dd><code>זהו טקסט הדגמה</code></dd></dl>',

	'ABBC3_SPOIL_MOVER'			=> 'ספוילר',
	'ABBC3_SPOIL_TIP'			=> ' [spoil]טקסט[/spoil]',
	'ABBC3_SPOIL_VIEW'			=> '<div class="spoilwrapper"><div class="spoiltitle"><input class="btnspoil" type="button" value="הצג ספויילר" onClick="javascript:if (this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display != \'\') { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'\'; this.innerText = \'\'; this.value = \'הסתר ספויילר\'; } else { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'none\'; this.innerText = \'\'; this.value = \'הצג ספויילר\'; }" onfocus="this.blur();"></div><div class="spoilcontent"><div style="display: none;">זהו טקסט הדגמה</div></div></div>',

	'ABBC3_ED2K_MOVER'			=> 'eD2K קישור',
	'ABBC3_ED2K_TIP'			=> ' [url]link ed2k[/url] �?ו [url=link ed2k]Name ed2k[/url]',
	'ABBC3_ED2K_VIEW'			=> '<a href="ed2k://|file|Robin.Hood.S02E01.Sisterhood.HDTV.XviD-BiA.avi|367335424|6EB031138DE4A80997A13C272760202F|h=CJZXHKH25ZONIMWVUOENVQKJSZDV5JI6|/" class="postlink">Robin.Hood.S02E01.Sisterhood.HDTV.XviD-BiA.avi</a>',

	'ABBC3_URL_MOVER'			=> 'כתובת �?ינטרנט',	
	'ABBC3_URL_TIP'				=> ' [url]http://...[/url] �?ו [url=http://...]ש�? ה�?תר[/url]',
	'ABBC3_URL_VIEW'			=> '<a href="http://www.google.com" class="postlink">גוגל</a>',

	'ABBC3_EMAIL_MOVER'			=> 'דו�?ר �?לקטרוני',
	'ABBC3_EMAIL_TIP'			=> ' [email]user@server.ext[/email] �?ו [email=user@server.ext]ה�?ימייל שלי[/email]',
	'ABBC3_EMAIL_VIEW'			=> '<a href="mailto:user@server.ext">ה�?ימייל שלי</a>',

	'ABBC3_WEB_MOVER'			=> 'תצוגת דף �?ינטרנט בחלון ההודעה',
	'ABBC3_WEB_TIP'				=> ' [web width=200 height=100 ]כתובת ה�?תר[/web]',
	'ABBC3_WEB_VIEW'			=> '<iframe width="100%" height="100" src="http://www.google.com" style="font-size: 2px;"></iframe><br/>',

	'ABBC3_IMG_MOVER'			=> 'הוסף כתובת תמונה',
	'ABBC3_IMG_TIP'				=> ' [img=(left|center|right)]http://...[/img]',
	'ABBC3_IMG_VIEW'			=> '<div align="center"><img src="http://www.google.com/intl/en_com/images/logo_plain.png" /></div>',

	'ABBC3_THUMB_MOVER'			=> 'הוסף כתובת תמונה ממוזערת',
	'ABBC3_THUMB_TIP'			=> ' [thumbnail(=left|right)]http://...[/thumbnail]',
	'ABBC3_THUMB_VIEW'			=> '<a href="http://www.google.com/intl/en_com/images/logo_plain.png" rel="lightbox[]" alt="http://www.google.com/intl/en_com/images/logo_plain.png" title="" class="hoverbox"><img src="http://www.google.com/intl/en_com/images/logo_plain.png" border="0" width="100px" align="right"/></a>',

	'ABBC3_IMGSHACK_MOVER'		=> 'imageshack הוסף תמונה מ�?תר',
	'ABBC3_IMGSHACK_TIP'		=> ' [url=http://imageshack.us][img=http://...][/img][/url]',
	'ABBC3_IMGSHACK_VIEW'		=> '<a href="http://img207.imageshack.us/my.php?image=advancedbbcodebox3prosidd3.gif" class="postlink"><img src="http://img207.imageshack.us/img207/1773/advancedbbcodebox3prosidd3.th.gif" alt="Image" /></a>',

	'ABBC3_FLASH_MOVER'			=> 'הוסף קובץ פל�?ש',
	'ABBC3_FLASH_TIP'			=> ' [flash width=# height=#]כתובת קובץ הפל�?ש[/flash]',
	'ABBC3_FLASH_VIEW'			=> '<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0" width="200" height="100"><param name="movie" value="http://www.adobe.com/support/flash/ts/documents/test_version/version.swf" /><param name="play" value="true" /><param name="loop" value="true" /><param name="quality" value="high" /><param name="allowScriptAccess" value="never" /><param name="allowNetworking" value="internal" /><embed src="http://www.adobe.com/support/flash/ts/documents/test_version/version.swf" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" width="200" height="100" play="true" loop="true" quality="high" allowscriptaccess="never" allownetworking="internal"></embed></object>',

	'ABBC3_VIDEO_MOVER'			=> 'הוסף קובץ וידי�?ו',
	'ABBC3_VIDEO_TIP'			=> ' [video width=# height=#]כתובת קובץ הוידי�?ו[/video]',
	'ABBC3_VIDEO_VIEW'			=> '<object width="200" height="100" classid="CLSID:6BF52A52-394A-11d3-B153-00C04F79FAA6" id="wmstream_"><param name="url" value="$3" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /><param name="src" value="$3" /><!--[if !IE]>--><object width="200" height="100" type="video/x-ms-wmv" data="$3"><param name="src" value="$3" /><param name="controller" value="1" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /></object><!--<![endif]--></object>',

	'ABBC3_STREAM_MOVER'		=> 'הוסף קובץ שמע',
	'ABBC3_STREAM_TIP'			=> ' [stream]כתובת קובץ השמע[/stream]',
	'ABBC3_STREAM_VIEW'			=> '<object width="200" height="45" classid="CLSID:6BF52A52-394A-11d3-B153-00C04F79FAA6" id="wmstream_"><param name="url" value="$1" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /><param name="src" value="$1" /><!--[if !IE]>--><object width="200" height="45" type="video/x-ms-wmv" data="$1"><param name="src" value="$1" /><param name="controller" value="1" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /></object><!--<![endif]--></object>',

	'ABBC3_RAM_MOVER'			=> 'הוסף קובץ רי�?ל פלייר',
	'ABBC3_RAM_TIP'				=> ' [ram]כתובת קובץ רי�?ל פלייר[/ram]',
	'ABBC3_RAM_VIEW'			=> '<object id="rmstream_" classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" width="200" height="100"><param name="src" value="$3" /><param name="autostart" value="false" /><param name="controls" value="ImageWindow" /><param name="console" value="ctrls_" /><param name="prefetch" value="false" /><embed name="rmstream_" type="audio/x-pn-realaudio-plugin" src="$3" width="200" height="100" autostart="false" controls="ImageWindow" console="ctrls_" prefetch="false"></embed></object><br /><object id="ctrls_" classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" width="200" height="36"><param name="controls" value="ControlPanel" /><param name="console" value="ctrls_{_file.ATTACH_ID}" /><embed name="ctrls_" type="audio/x-pn-realaudio-plugin" width="200" height="36" controls="ControlPanel" console="ctrls_"></embed></object>',

	'ABBC3_QUICKTIME_MOVER'		=> 'הוסף קובץ קוויק טיי�?',
	'ABBC3_QUICKTIME_TIP'		=> ' [quicktime width=# height=#]כתובת קובץ קוויק טיי�?[/quicktime]',
	'ABBC3_QUICKTIME_VIEW'		=> '<object id="qtstream_" classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab#version=6,0,2,0" width="200" height="100"><param name="src" value="http://www.nature.com/neuro/journal/v3/n3/extref/Li_control.mov.qt" /><param name="controller" value="true" /><param name="autoplay" value="false" /><param name="type" value="video/quicktime" /><embed name="qtstream_" src="http://www.nature.com/neuro/journal/v3/n3/extref/Li_control.mov.qt" pluginspage="http://www.apple.com/quicktime/download/" enablejavascript="true" controller="true" width="200" height="100" type="video/quicktime" autoplay="false"></embed></object>',

	'ABBC3_STAGE6_MOVER'		=> 'Stage6 הוסף וידי�?ו מ�?תר', // from http://www.stage6.com/
	'ABBC3_STAGE6_TIP'			=> ' [stage6]Stage6 ID[/stage6]',
	'ABBC3_STAGE6_VIEW'			=> '<object  classid="clsid:67DABFBF-D0AB-41fa-9C46-CC0F21721616" codebase="http://download.divx.com/player/DivXBrowserPlugin.cab" width="200" height="100" ><param name="src" value="http://video.stage6.com/2068715/.divx" /><param name="autoplay" value="false" /><param name="custommode" value="Stage6" /><param name="showpostplaybackad" value="false" /><embed type="video/divx" src="http://video.stage6.com/2068715/.divx" pluginspage="http://go.divx.com/plugin/download/" showpostplaybackad="false" custommode="Stage6" autoplay="false" width="200" height="100" /></object><br />',

	'ABBC3_GVIDEO_MOVER'		=> 'Google הוסף וידי�?ו מ�?תר',
	'ABBC3_GVIDEO_TIP'			=> ' [GVideo]כתובת הוידי�?ו[/GVideo]',
	'ABBC3_GVIDEO_VIEW'			=> '<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0" width="200" height="100"><param name="movie" value="http://video.google.com/googleplayer.swf?docid=-8351924403384451128" /><param name="play" value="false" /><param name="loop" value="false" /><param name="quality" value="high" /><param name="allowScriptAccess" value="never" /><param name="allowNetworking" value="internal" /><embed src="http://video.google.com/googleplayer.swf?docid=-8351924403384451128" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" width="200" height="100" play="false" loop="false" quality="high" allowscriptaccess="never" allownetworking="internal"></embed></object>',

	'ABBC3_YOUTUBE_MOVER'		=> 'Youtube הוסף וידי�?ו מ�?תר',
	'ABBC3_YOUTUBE_TIP'			=> ' [youtube]כתובת הוידי�?ו[/youtube]',
	'ABBC3_YOUTUBE_VIEW'		=> '<object width="200" height="100"><param name="movie" value="http://www.youtube.com/v/TA4hm97m494" /><param name="wmode" value="transparent" /><embed src="http://www.youtube.com/v/TA4hm97m494" type="application/x-shockwave-flash" wmode="transparent" width="200" height="100"></embed></object>',

	'ABBC3_LISTB_MOVER'			=> 'רשימה',
	'ABBC3_LISTB_TIP'			=> ' [list]טקסט[/list] הערה: כתוב [*] לפני כל שורה',
	'ABBC3_LISTB_VIEW'			=> '<ul><li>�?ברה�?</li><li>יצחק</li><li>יעקב</li></ul>',

	'ABBC3_LISTO_MOVER'			=> 'רשימה מסודרת',
	'ABBC3_LISTO_TIP'			=> ' [list=1|a]טקסט[/list] הערה: כתוב [*] לפני כל שורה',
	'ABBC3_LISTO_VIEW'			=> '<ol style="list-style-type: lower-alpha"><li>�?ברה�?</li><li>יצחק</li><li>יעקב</li></ol>',

	'ABBC3_HR_MOVER'			=> 'קו חוצץ',
	'ABBC3_HR_TIP'				=> ' [hr] הערה: הקו החוצץ יווצר מעל השורה שלפניה הוצב התג',
	'ABBC3_HR_VIEW'				=> '<hr noshade color="#000000" size="1px">',
	
	'ABBC3_CUT_MOVER'			=> 'מוחק טקסט שנבחר',
	'ABBC3_COPY_MOVER'			=> 'העתק טקסט שנבחר',
	'ABBC3_PASTE_MOVER'			=> 'הדבק טקסט שהועתק',
	'ABBC3_PLAIN_MOVER'			=> 'מסיר �?ת כל התגי�? מהטקסט שנבחר',
	'ABBC3_PASTE_ERROR'			=> 'תחילה העתק טקסט. ל�?חר מכן תוכל להדביקו ',
	'ABBC3_NOSELECT_ERROR'		=> 'תחילה בחר טקסט לפעולה ',
	
	// Wizard texts
	'ABBC3_ERROR'				=> 'שגי�?ה : ',
	'ABBC3_ERROR_TAG'			=> 'שגי�?ה ל�? צפויה ביצירת התג : ',
	
	'ABBC3_ID'					=> 'הכנס מזהה :',
	'ABBC3_NOID'				=> 'ל�? הכנסת �?ת המזהה',
	'ABBC3_LINK'				=> 'הכנס קישור עבור ',
	'ABBC3_DESC'				=> 'הכנס תי�?ור עבור ',
	'ABBC3_NAME'				=> 'תי�?ור',
	'ABBC3_NOLINK'				=> 'ל�? הכנסת �?ת הקישור עבור ',
	'ABBC3_NODESC'				=> 'ל�? הכנסת �?ת התי�?ור עבור ',
	'ABBC3_WIDTH'				=> 'ציין �?ת הרוחב',
	'ABBC3_WIDTH_NOTE'			=> 'הערה: הערך מתו�?ר ב�?חוזי�?',
	'ABBC3_NOWIDTH'				=> 'ל�? ציינת רוחב',
	'ABBC3_HEIGHT'				=> 'ציין �?ת הגובה',
	'ABBC3_HEIGHT_NOTE'			=> 'הערה: הערך מתו�?ר ב�?חוזי�?',
	'ABBC3_NOHEIGHT'			=> 'ל�? ציינת גובה',
	
	'ABBC3_ED2K_TAG'			=> 'ed2k',
	'ABBC3_ED2K_NOTE' 			=> '', //'דוגמ�?: ed2k://|file|Robin.Hood.S02E01.Sisterhood.HDTV.XviD-BiA.avi|367335424|6EB031138DE4A80997A13C272760202F|h=CJZXHKH25ZONIMWVUOENVQKJSZDV5JI6|/',
	'ABBC3_ED2K_ADD'			=> 'הוסף �?ת הקישורי�? שבחרת כקישורי ed2k',
	
	'ABBC3_URL_TAG'				=> 'דף',
	'ABBC3_URL_NOTE' 			=> 'דוגמ�?: http://www.google.com דוגמ�?:',

	'ABBC3_WEB_TAG'				=> '�?תר',
	'ABBC3_WEB_NOTE'			=> 'דוגמ�?: http://www.google.com דוגמ�?:',

	'ABBC3_EMAIL_TAG'			=> 'דו�?ר �?לקטרוני',
	'ABBC3_EMAIL_NOTE'	 		=> 'דוגמ�?: user@server.ext דוגמ�?:',
	
	'ABBC3_IMG_TAG'				=> 'תמונה',
	'ABBC3_IMG_NOTE'			=> 'דוגמ�?: http://www.google.com/intl/en_com/images/logo_plain.png דוגמ�?:',

	'ABBC3_THUMB_TAG'			=> 'תמונה מוקטנת',
	'ABBC3_THUMB_NOTE'			=> 'http://www.google.com/intl/en_com/images/logo_plain.png דוגמ�?:',
	
	'ABBC3_FLASH_TAG'			=> 'פל�?ש',
	'ABBC3_FLASH_NOTE'			=> 'http://www.adobe.com/support/flash/ts/documents/test_version/version.swf דוגמ�?:',
	
	'ABBC3_VIDEO_TAG'			=> 'וידי�?ו',
	'ABBC3_VIDEO_NOTE'			=> 'דוגמ�?: http://s25wm.castup.net/992150003-52.wmv', 
		
	'ABBC3_STREAM_TAG'			=> 'קובץ קול',
	'ABBC3_STREAM_NOTE'			=> 'דוגמ�?: http://www.carnivalmidways.com/images/Music/thisisatest.mp3', 
	
	'ABBC3_RAM_TAG'				=> 'רי�?ל פלייר',
	'ABBC3_RAM_NOTE'			=> '', // 'דוגמ�? ???',
	
	'ABBC3_QUICKTIME_TAG'		=> 'קוויק טיי�?',
	'ABBC3_QUICKTIME_NOTE'		=> 'דוגמ�?: http://www.nature.com/neuro/journal/v3/n3/extref/Li_control.mov.qt' . '<br/>',
	
	'ABBC3_STAGE6_TAG'			=> 'Stage6 Video',
	'ABBC3_STAGE6_NOTE'			=> 'דוגמ�?: 2068715',
	
	'ABBC3_GVIDEO_TAG'			=> 'Google Video',
	'ABBC3_GVIDEO_NOTE'			=> 'דוגמ�?: http://video.google.com/videoplay?docid=-8351924403384451128',
	
	'ABBC3_YOUTUBE_TAG'			=> 'Youtube Video',
	'ABBC3_YOUTUBE_NOTE'		=> 'דוגמ�?: http://www.youtube.com/watch?v=aabbcc12',

	'ABBC3_TABLE_STYLE'			=> 'הכנס עיצוב טבלה',
	'ABBC3_TABLE_NOTE'			=> 'דוגמ�?: width:50%;border:1px solid #ccccc;',
	
	'ABBC3_ROW_NUMBER'			=> 'הכנס �?ת מספר השורות',
	'ABBC3_ROW_ERROR'			=> 'ל�? הכנסת �?ת מספר השורות',
	'ABBC3_ROW_STYLE'			=> 'הכנס �?ת עיצוב השורות',
	'ABBC3_ROW_NOTE'			=> 'דוגמ�?: text-align:center;',
	
	'ABBC3_CELL_NUMBER'			=> 'הכנס �?ת מספר העמודות',
	'ABBC3_CELL_ERROR'			=> 'ל�? הכנסת �?ת מספר העמודות',
	'ABBC3_CELL_STYLE'			=> 'הכנס �?ת עיצוב העמודות',
	'ABBC3_CELL_NOTE'			=> 'דוגמ�?: border:1px solid #ccccc;',

	'ABBC3_GRAD_MIN_ERROR'		=> 'תחילה בחר �?ת הטקסט : ',
	'ABBC3_GRAD_MAX_ERROR'		=> 'ניתן לבחור טקסט ב�?ורך של עד 120 תווי�?',
	
	'SPOILER_SHOW'				=> 'הצג ספויילר',
	'SPOILER_HIDE'				=> 'הסתר ספויילר',
	
	// Custom bbcodes

	// MOD : add-on hide bbcode - START
	// [hide]text[/hide] Code..
	'ABBC3_HIDE_MOVER'			=> 'הודעה מוסתרת',
	'ABBC3_HIDE_TIP'			=> ' [hide]הודעה[/hide]',
	'ABBC3_HIDE_VIEW'			=> '<dl class="hidebox"><dt class="hide">HIDE: ON</dt><dd>�?תה חייב להגיב ל�?שכול זה על מנת לצפות בתוכנו</dd></dl>',
	// MOD : add-on hide bbcode - END

	// MOD : add-on Dailymotion bbcode - START
	// [dm]Dailymotion ID[/dm] Code..
	'ABBC3_DMOTION_MOVER'		=> 'הוסף וידי�?ו מ�?תר dailymotion', // from http://www.dailymotion.com/
	'ABBC3_DMOTION_TIP'			=> ' [dm]Dailymotion ID[/dm]',
	'ABBC3_DMOTION_VIEW'		=> '<object width="200" height="100"><param name="movie" value="http://www.dailymotion.com/swf/x3hm7o" /><param name="allowFullScreen" value="true" /><param name="allowScriptAccess" value="never" /><embed src="http://www.dailymotion.com/swf/x3hm7o" type="application/x-shockwave-flash" width="200" height="100" allowFullScreen="true" allowScriptAccess="never"></embed></object>',
	// MOD : add-on Dailymotion bbcode - END

	// MOD : add-on Moderator bbcode - START
	// [mod=name]text[/mod] Code..
	'ABBC3_MODERATOR_MOVER'		=> 'הודעת מנהל',
	'ABBC3_MODERATOR_TIP'		=> ' [mod=name]טקסט[/mod]',
	'ABBC3_MODERATOR_VIEW'		=> '<table id="ModTable" width="100%" cellspacing="5" cellpadding="0" border="0" align="center"><tr><td class="row1" rowspan="2" align="middle" vAlign="center" width="1%"><span class="exclamation" title="Moderator warning">&nbsp;!&nbsp;</span></td><td class="row2"><span class="genmed"><b>Mod Name:</b></span></td></tr><tr><td>זהו טקסט הדגמה</td></tr></table>',
	// MOD : add-on Moderator bbcode - END
	
	// MOD : add-on Veoh bbcode - START
	// [veoh]URL video[/veoh] Code..
	'ABBC3_VEOH_MOVER'			=> 'הוסף וידי�?ו מ�?תר Veoh',
	'ABBC3_VEOH_TIP'			=> ' [veoh]כתובת הוידי�?ו[/veoh].',
	'ABBC3_VEOH_TAG'			=> ' Veoh.',
	'ABBC3_VEOH_NOTE'			=> 'דוגמ�?: http://www.veoh.com/videos/v1409404EqT5SJjM.',
	'ABBC3_VEOH_VIEW'			=> '<embed src="http://www.veoh.com/videodetails2.swf?permalinkId=v1409404EqT5SJjM&id=anonymous&player=videodetailsembedded&videoAutoPlay=0" allowFullScreen="true" width="200" height="100" bgcolor="#000000" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>',
	// MOD : add-on Veoh bbcode - END
	
	// MOD : add-on offtopic bbcode - START
	// [offtopic]text[/offtopic] Code..
	'ABBC3_OFFTOPIC'			=> 'מחוץ לנוש�?',
	'ABBC3_OFFTOPIC_MOVER'		=> 'הכנס טקסט מחוץ לנוש�? ה�?שכול',
	'ABBC3_OFFTOPIC_TIP'		=> ' [offtopic]טקסט[/offtopic]',
	'ABBC3_OFFTOPIC_VIEW'		=> '<i><b><font color="#114499">Offtopic: </font></b><br/><font color="#2277DD">זהו טקסט הדגמה</font></i>',
	// MOD : add-on offtopic bbcode - END

	// MOD : add-on Gamespot bbcode - START
	// [gamespot] Gamespot video URL [gamespot] Code..
	'ABBC3_GAMESPOT_MOVER'		=> 'הוסף וידי�?ו מ�?תר Gamespot',
	'ABBC3_GAMESPOT_TIP'		=> ' [gamespot]Gamespot video URL [gamespot]',
	'ABBC3_GAMESPOT_NOTE'		=> ' דוגמ�? : http://www.gamespot.com/video/944074/6185798/tom-clancys-rainbow-six-vegas-2-official-trailer-3',
	'ABBC3_GAMESPOT_VIEW'		=> '<embed id="mymovie" width="200" height="100" flashvars="paramsURI=http%3A%2F%2Fwww%2Egamespot%2Ecom%2Fpages%2Fvideo%5Fplayer%2Fproteus%5Fxml%2Ephp%3Fadseg%3D%26adgrp%3D%26sid%3D6185798%26pid%3D944074%26mb%3D%26onid%3D%26nc%3D1202626246593%26embedded%3D1%26showWatermark%3D0%26autoPlay%3D0" allowfullscreen="true" allowscriptaccess="never" quality="high" name="mymovie" src="http://image.com.com/gamespot/images/cne_flash/production/media_player/proteus/gs/proteus_embed.swf" type="application/x-shockwave-flash"/>',
	// MOD : add-on Gamespot bbcode - END

	// MOD : add-on Gametrailers bbcode - START
	// [gametrailers] Gametrailers video URL [gametrailers] Code..
	'ABBC3_GAMETRAILERS_MOVER'	=> 'הוסף וידי�?ו מ�?תר Gametrailers',
	'ABBC3_GAMETRAILERS_TIP'	=> ' [gametrailers]Gametrailers video URL[/gametrailers]',
	'ABBC3_GAMETRAILERS_NOTE'	=> ' דוגמ�? : http://www.gametrailers.com/player/30461.html',
	'ABBC3_GAMETRAILERS_VIEW'	=> '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"  codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" id="gtembed" width="200" height="100"><param name="allowScriptAccess" value="never" /><param name="allowFullScreen" value="true" /><param name="movie" value="http://www.gametrailers.com/remote_wrap.php?mid=30461" /><param name="quality" value="high" /><embed src="http://www.gametrailers.com/remote_wrap.php?mid=30461" swLiveConnect="true" name="gtembed" align="middle" allowScriptAccess="never" allowFullScreen="true" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="200" height="100"></embed></object>',
	// MOD : add-on Gametrailers bbcode - END

	// MOD : add-on IGN video bbcode - START
	// [ignvideo] ING video URL [ignvideo] Code..
	'ABBC3_IGNVIDEO_MOVER'		=> 'הוסף וידי�?ו מ�?תר Ign',
	'ABBC3_IGNVIDEO_TIP'		=> ' [ignvideo]ING video URL[/ignvideo]',
	'ABBC3_IGNVIDEO_NOTE'		=> ' דוגמ�?: object_ID=967025&downloadURL=http://tvmovies.ign.com/tv/video/article/850/850894/knightrider_trailer_020808_flvlow.flv',
	'ABBC3_IGNVIDEO_VIEW'		=> 	'<embed src="http://videomedia.ign.com/ev/ev.swf" flashvars="object_ID=967025&downloadURL=http://tvmovies.ign.com/tv/video/article/850/850894/knightrider_trailer_020808_flvlow.flv" type="application/x-shockwave-flash" width="200" height="100" ></embed>',
	// MOD : add-on IGN video bbcode - END

	// MOD : add-on liveleak bbcode - START
	// [liveleak] Liveleak video URL [liveleak] Code..
	'ABBC3_LIVELEAK_MOVER'		=> 'הוסף וידי�?ו מ�?תר Liveleak',
	'ABBC3_LIVELEAK_TIP'		=> ' [liveleak]Liveleak video URL[/liveleak]',
	'ABBC3_LIVELEAK_NOTE'		=> ' דוגמ�?: http://www.liveleak.com/view?i=413_1202590393',
	'ABBC3_LIVELEAK_VIEW'		=> '<object type="application/x-shockwave-flash" width="200" height="100" wmode="transparent" data="http://www.liveleak.com/player.swf?autostart=false&token=i=413_1202590393"><param name="movie" value="http://www.liveleak.com/player.swf?autostart=false&token=$1" /><param name="wmode" value="transparent" /><param name="quality" value="high" /></object>',
	// MOD : add-on liveleak bbcode - End

	// MOD : add-on NFO bbcode - START
	// [nfo]NFO text[/nfo] Code..
	'ABBC3_NFO_MOVER'			=> 'טקסט מידע (מוצג כר�?וי ב�?ינטרנט �?קספלורר)',
	'ABBC3_NFO_TIP'				=> ' [nfo]טקסט מידע[/nfo]',
	'ABBC3_NFO_VIEW'			=> '<table cellspacing="0" cellpadding="0" border="0" ><tr><td><span class="genmed"><b>NFO:</b></span></td></tr><tr><td class="nfo">' . str_replace(" ", "&nbsp;", '    � ���� �۱��                                  ���������������������  �   �� ���') . '</td></tr></table>',
	// MOD : add-on NFO bbcode - End

	// MOD : add-on glow bbcode - START
	// [glow=color]Text[/glow] Code..
	'ABBC3_GLOW_MOVER'			=> 'טקסט זוהר (פועל רק ב�?ינטרנט �?קספלורר)',
	'ABBC3_GLOW_TIP'			=> ' [glow=(color)]טקסט[/glow]',
	'ABBC3_GLOW_VIEW'			=> '<div style="filter:Glow(color=red,strength=4);color:#ffffff;height:110%">זהו טקסט הדגמה</div>',
	// MOD : add-on glow bbcode - END

	// MOD : add-on shadow bbcode - START
	// [shadow=(color)]text[/shadow] Code..
	'ABBC3_SHADOW_MOVER'		=> 'טקסט צל (פועל רק ב�?ינטרנט �?קספלורר)',
	'ABBC3_SHADOW_TIP'			=> ' [shadow=(color)]טקסט[/shadow]',
	'ABBC3_SHADOW_VIEW'			=> '<div style="filter:shadow(color=black,strength=4);color:blue;height:110%">זהו טקסט הדגמה</div>',
	// MOD : add-on shadow bbcode - End

	// MOD : add-on dropshadow bbcode - START
	// [dropshadow=(color)]text[/dropshadow] Code..
	'ABBC3_DROPSHADOW_MOVER'	=> 'טקסט צל נופל (פועל רק ב�?ינטרנט �?קספלורר)',
	'ABBC3_DROPSHADOW_TIP'		=> ' [dropshadow=(color)]טקסט[/dropshadow]',
	'ABBC3_DROPSHADOW_VIEW'		=> '<div style="filter:dropshadow(color=#999999,strength=4);color:blue;height:110%">זהו טקסט הדגמה</div>',
	// MOD : add-on dropshadow bbcode - End

	// MOD : add-on Blur bbcode - START
	// [blur=(color)]text[/blur] Code..
	'ABBC3_BLUR_MOVER'			=> 'טקסט מלוכלך (פועל רק ב�?ינטרנט �?קספלורר)',
	'ABBC3_BLUR_TIP'			=> ' [blur=(color)]טקסט[/blur]',
	'ABBC3_BLUR_VIEW'			=> '<div style="filter:Blur(strength=7);color:blue;height:110%">זהו טקסט הדגמה</div>',
	// MOD : add-on Blur bbcode - End

	// MOD : add-on Wave bbcode - START
	// [wave=(color)]text[/wave] Code
	'ABBC3_WAVE_MOVER'			=> 'טקסט גלי (פועל רק ב�?ינטרנט �?קספלורר)',
	'ABBC3_WAVE_TIP'			=> ' [wave=(color)]טקסט[/wave]',
	'ABBC3_WAVE_VIEW'			=> '<div style="filter:Wave(strength=2);color:blue;height:110%">זהו טקסט הדגמה</div>',
	// MOD : add-on Wave bbcode - End

	// MOD : add-on Search bbcode - START
	// [search(=(msn|yahoo|google))]text[/search] Code..
	'ABBC3_SEARCH_MOVER'		=> 'הכנס מילה לחיפוש',
	'ABBC3_SEARCH_TIP'			=> ' [search(=(msn|yahoo|google))]טקסט[/search]',
	'ABBC3_SEARCH_VIEW'			=> $lang['SEARCH_MINI'] . ' ' . $config['sitename'] . ' : <a href="search.php?keywords=Advanced BBcode box 3">"Advanced BBcode box 3"</a><br/><br/>' . $lang['SEARCH_MINI'] . ' msn : <a href="http://search.live.com/results.aspx?q=Advanced BBcode box 3&mkt=tr-TR&lf=1" target="_blank">"Advanced BBcode box 3"</a><br/><br/>' .$lang['SEARCH_MINI'] . ' yahoo : <a href="http://search.yahoo.com/search?p=Advanced BBcode box 3" target="_blank">"Advanced BBcode box 3"</a><br/><br/>' . $lang['SEARCH_MINI'] . ' google : <a href="http://www.google.com.tr/search?q=Advanced BBcode box 3" target="_blank">"Advanced BBcode box 3"</a>',
	// MOD : add-on Search bbcode - End


));

?>