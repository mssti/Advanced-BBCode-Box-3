<?php
/** 
*
* abbcode [Bulgarian]
* @package language
* @version $Id: abbcode.php, v 1.0.7b 2008/02/21 02:05:07 leviatan21 Exp $
* @English version $Id: $ phpBB 3.0.0 - 1.0.7b
* @copyright leviatan21 < info@mssti.com > (Gabriel) http://www.mssti.com/phpbb3/
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
* @translator: alfa - http://www.boinc-bulgaria.net
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
* й - Г©
* и - ГЁ
* к - ГЄ
* л - Г«
* а - Г
* в - Гў
* д - Г¤
* о - Г®
* п - ГЇ
* т - ГІ
* ф - Гґ
* щ - Г№
* ы - Г»
* з - Г§
* б = ГЎ
* Б = Г  XX
* й = Г©
* Й = Г‰ XX
* н = Г­
* Н = Г?
* у = Гі
* У = Г“
* ъ = Гє
* Ъ = Гљ
* с = Г±
* С = Г‘
* ? = Вї
********************************************************************/

$lang = array_merge($lang, array(
	'BBCODE_STYLES_TIP'			=> 'Съвет: Стиловете може да бъдат приложени към текста бързо.',

	// Help
	'ABBC3_HELP_TITLE'			=> 'Advanced BBCode box 3 :: Помощ',
	'ABBC3_HELP_CUSTOM_TITLE'	=> 'Advanced BBCode box 3 :: Помощ за собствени BBCode ',
	'ABBC3_HELP_DESC'			=> 'Описание',
	'ABBC3_HELP_WRITE'			=> 'Вашият формат за писане',
	'ABBC3_HELP_VIEW'			=> 'Нашият формат за показване',
	'ABBC3_HELP_ABOUT'			=> 'Advanced BBCode Box 3 от <a href="http://www.mssti.com/phpbb3">mssti</a>',

	// Dropdown titles options
	'ABBC3_FONTTYPE_MOVER'		=> 'Вид шрифт',
	'ABBC3_FONTTYPE_TIP'		=> ' [font=Comic Sans MS]текст[/font]',
	'ABBC3_FONTTYPE_VIEW'		=> '<span style="font-family:Comic Sans MS">Това е примерен текст</span>',

	'ABBC3_FONT_GIANT'			=> 'Огромен',

	'ABBC3_FONTCOLOR_MOVER'		=> 'Цвят на шрифта',
	'ABBC3_FONTCOLOR_TIP'		=> ' [color=red]текст[/color] Бележка: можете да използвате html цветове (color=#FF0000 или color=red)',
	'ABBC3_FONTCOLOR_VIEW'		=> '<span style="color:red">Това е примерен текст</span>',

	'ABBC3_FONTSIZE_MOVER'		=> 'Големина на шрифта',
	'ABBC3_FONTSIZE_TIP'		=> ' [size=150голям текст[/size] Бележка: данните ще бъдат интерпретирани като процент',
	'ABBC3_FONTSIZE_VIEW'		=> '<span style="font-size: 150%; line-height: 116%;">Това е примерен текстt</span>',

	'ABBC3_FONTHILI_MOVER'		=> 'Маркиран текст',
	'ABBC3_FONTHILI_TIP'		=> ' [highlight=yellow]текст[/highlight] Бележка: можете да използвате html цветове color=#FF0000 или color=red)',
	'ABBC3_FONTHILI_VIEW'		=> '<span style="background-color: yellow;">Това е примерен текст</span>',

	// Text to be applied to the helpline & mouseover & help page
	'ABBC3_JUSTIFY_MOVER'		=> 'Равностранно',
	'ABBC3_JUSTIFY_TIP'			=> ' [align=justify]текст[/align]',
	'ABBC3_JUSTIFY_VIEW'		=> '<div style="text-align:justify">Това е примерен текст</div>',

	'ABBC3_RIGHT_MOVER'			=> 'Подравни надясно',
	'ABBC3_RIGHT_TIP'			=> ' [align=right]текст[/align]',
	'ABBC3_RIGHT_VIEW'			=> '<div style="text-align:right">Това е примерен текст</div>',

	'ABBC3_CENTER_MOVER'		=> 'Центрирай',
	'ABBC3_CENTER_TIP'			=> ' [align=center]текст[/align]',
	'ABBC3_CENTER_VIEW'			=> '<div style="text-align:center">Това е примерен текст</div>',

	'ABBC3_LEFT_MOVER'			=> 'Подравни наляво',
	'ABBC3_LEFT_TIP'			=> ' [align=left]текст[/align]',
	'ABBC3_LEFT_VIEW'			=> '<div style="text-left:justify">Това е примерен текст</div>',

	'ABBC3_PRE_MOVER'			=> 'Преформатиран текст',
	'ABBC3_PRE_TIP'				=> ' [pre]текст[/pre]',
	'ABBC3_PRE_VIEW'			=> '<pre>Това е примерен текст</pre>',

	'ABBC3_SUP_MOVER'			=> 'Наглася текста като горен индекс',
	'ABBC3_SUP_TIP'				=> ' [sup]текст[/sup]',
	'ABBC3_SUP_VIEW'			=> '<sup>Това е примерен текст</sup>',

	'ABBC3_SUB_MOVER'			=> 'Наглася текста като долен индекс',
	'ABBC3_SUB_TIP'				=> ' [sub]текст[/sub]',
	'ABBC3_SUB_VIEW'			=> '<sub>Това е примерен текст</sub>',

	'ABBC3_BOLD_MOVER'			=> 'Удебелен',
	'ABBC3_BOLD_TIP'			=> ' [b]текст[/b]',
	'ABBC3_BOLD_VIEW'			=> '<strong>Това е примерен текст</strong>',

	'ABBC3_ITALIC_MOVER'		=> 'Наклонен',
	'ABBC3_ITALIC_TIP'			=> ' [i]текст[/i]',
	'ABBC3_ITALIC_VIEW'			=> '<em>Това е примерен текст</em>',

	'ABBC3_UNDERLINE_MOVER'		=> 'Подчертан',
	'ABBC3_UNDERLINE_TIP'		=> ' [u]текст[/u]',
	'ABBC3_UNDERLINE_VIEW'		=> '<span style="text-decoration: underline">Това е примерен текст</span>',

	'ABBC3_STRIKE_MOVER'		=> 'Задраскан',
	'ABBC3_STRIKE_TIP'			=> ' [s]текст[/s]',
	'ABBC3_STRIKE_VIEW'			=> '<strike>Това е примерен текст</strike>',

	'ABBC3_FADE_MOVER'			=> 'Обезцветен текст',
	'ABBC3_FADE_TIP'			=> ' [fade]текст[/fade]',
	'ABBC3_FADE_VIEW'			=> '<span class="fade_link">Това е примерен текст</span> <script type="text/javascript">fade_ontimer()</script>',

	'ABBC3_GRAD_MOVER'			=> 'Градиент',
	'ABBC3_GRAD_TIP'			=> '',
	'ABBC3_GRAD_VIEW'			=> '<span style="color: #FF0000">Т</span><span style="color: #F2000D">о</span><span style="color: #E6001A">в</span><span style="color: #D90026">а</span> <span style="color: #BF0040">е</span> <span style="color: #A60059">п</span><span style="color: #990066">р</span><span style="color: #8C0073">и</span><span style="color: #800080">м</span><span style="color: #73008C">е</span><span style="color: #660099">р</span><span style="color: #5900A6">е</span><span style="color: #4D00B3">н</span> <span style="color: #3300CC">т</span><span style="color: #2600D9">е</span><span style="color: #1A00E6">к</span><span style="color: #0D00F2">с</span><span style="color: #0000FF">т</span></span>',

	'ABBC3_RTL_MOVER'			=> 'Текст с разчитане от дясно на ляво',
	'ABBC3_RTL_TIP'				=> ' [dir=rtl]текст[/dir]',
	'ABBC3_RTL_VIEW'			=> '<BDO dir="rtl">Това е примерен текст</BDO>',

	'ABBC3_LTR_MOVER'			=> 'Текст с разчитане от ляво на дясно',
	'ABBC3_LTR_TIP'				=> ' [dir=ltr]текст[/dir]',
	'ABBC3_LTR_VIEW'			=> '<BDO dir="ltr">Това е примерен текст</BDO>',

	'ABBC3_MARQD_MOVER'			=> 'Измести надолу',
	'ABBC3_MARQD_TIP'			=> ' [marq=down]текст[/marq]',
	'ABBC3_MARQD_VIEW'			=> '<marquee direction="down" scrolldelay="120">Това е примерен текст</marquee>',

	'ABBC3_MARQU_MOVER'			=> 'Измести нагоре',
	'ABBC3_MARQU_TIP'			=> ' [marq=up]текст[/marq]',
	'ABBC3_MARQU_VIEW'			=> '<marquee direction="up" scrolldelay="120">Това е примерен текст</marquee>',

	'ABBC3_MARQR_MOVER'			=> 'Измести надясно',
	'ABBC3_MARQR_TIP'			=> ' [marq=right]текст[/marq]',
	'ABBC3_MARQR_VIEW'			=> '<marquee direction="right" scrolldelay="120">Това е примерен текст</marquee>',

	'ABBC3_MARQL_MOVER'			=> 'Измести наляво',
	'ABBC3_MARQL_TIP'			=> ' [marq=left]текст[/marq]',
	'ABBC3_MARQL_VIEW'			=> '<marquee direction="left" scrolldelay="120">Това е примерен текст</marquee>',

	'ABBC3_TABLE_MOVER'			=> 'Въведи таблица',
	'ABBC3_TABLE_TIP'			=> ' [table=(ccs стил)][tr=(ccs стил)][td=(ccs стил)]текст[/td][/tr][/table]',
	'ABBC3_TABLE_VIEW'			=> '<table style="width:50%;border:1px solid #cccccc;" cellspacing="0" cellpadding="0"><tr style="text-align:center;"><td style="border:1px solid #cccccc;">Това е примерен текст</td></tr></table>',

	'ABBC3_QUOTE_MOVER'			=> 'Цитат',
	'ABBC3_QUOTE_TIP'			=> ' [quote]текст[/quote] или [quote=\"потребител\"]текст[/quote]',
	'ABBC3_QUOTE_VIEW'			=> '<blockquote><div><cite>member '. $lang['WROTE'] .':</cite>Това е примерен текст</div></blockquote>',

	'ABBC3_CODE_MOVER'			=> 'Код',
	'ABBC3_CODE_TIP'			=> ' [code]Код[/code]',
	'ABBC3_CODE_VIEW'			=> '<dl class="codebox"><dt>'. $lang['CODE'] .': <a href="#" onclick="selectCode(this); return false;">'. $lang['SELECT_ALL_CODE'] .'</a></dt><dd><code>Това е примерен текст</code></dd></dl>',

	'ABBC3_SPOIL_MOVER'			=> 'Скрит текст',
	'ABBC3_SPOIL_TIP'			=> ' [spoil]текст[/spoil]',
	'ABBC3_SPOIL_VIEW'			=> '<div class="spoilwrapper"><div class="spoiltitle"><input class="btnspoil" type="button" value="Покажи" onClick="javascript:if (this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display != \'\') { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'\'; this.innerText = \'\'; this.value = \'Скрии текста\'; } else { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'none\'; this.innerText = \'\'; this.value = \'Покажи текста\'; }" onfocus="this.blur();"></div><div class="spoilcontent"><div style="display: none;">Това е примерен текст</div></div></div>',

	'ABBC3_ED2K_MOVER'			=> 'ed2k адрес',
	'ABBC3_ED2K_TIP'			=> ' [url]ed2k адрес[/url] или [url=link ed2k]адрес[/url]',
	'ABBC3_ED2K_VIEW'			=> '<a href="ed2k://|file|Robin.Hood.S02E01.Sisterhood.HDTV.XviD-BiA.avi|367335424|6EB031138DE4A80997A13C272760202F|h=CJZXHKH25ZONIMWVUOENVQKJSZDV5JI6|/" class="postlink">Robin.Hood.S02E01.Sisterhood.HDTV.XviD-BiA.avi</a>',

	'ABBC3_URL_MOVER'			=> 'Сайт',	
	'ABBC3_URL_TIP'				=> ' [url]http://...[/url] или [url=http://...]Име на страница[/url]',
	'ABBC3_URL_VIEW'			=> '<a href="http://www.google.com" class="postlink">Google</a>',

	'ABBC3_EMAIL_MOVER'			=> 'email',
	'ABBC3_EMAIL_TIP'			=> ' [email]user@server.ext[/email] или [email=user@server.ext]Моят мейл[/email]',
	'ABBC3_EMAIL_VIEW'			=> '<a href="mailto:user@server.ext">user@server.ext</a>',

	'ABBC3_WEB_MOVER'			=> 'Въведи страница в мнението',
	'ABBC3_WEB_TIP'				=> ' [web width=200 height=100 ]Адрес на страницата[/web]',
	'ABBC3_WEB_VIEW'			=> '<iframe width="100%" height="100" src="http://www.google.com" style="font-size: 2px;"></iframe><br/>',

	'ABBC3_IMG_MOVER'			=> 'Въведи картинка',
	'ABBC3_IMG_TIP'				=> ' [img=(left|center|right)]http://...[/img]',
	'ABBC3_IMG_VIEW'			=> '<div align="center"><img src="http://www.google.com/intl/en_com/images/logo_plain.png" /></div>',

	'ABBC3_THUMB_MOVER'			=> 'Въведи миниатура',
	'ABBC3_THUMB_TIP'			=> ' [thumbnail(=left|right)]http://...[/thumbnail]',
	'ABBC3_THUMB_VIEW'			=> '<a href="http://www.google.com/intl/en_com/images/logo_plain.png" rel="lightbox[]" alt="http://www.google.com/intl/en_com/images/logo_plain.png" title="" class="hoverbox"><img src="http://www.google.com/intl/en_com/images/logo_plain.png" border="0" width="100px" align="right"/></a>',

	'ABBC3_IMGSHACK_MOVER'		=> 'Въведи картинка от imageshack',
	'ABBC3_IMGSHACK_TIP'		=> ' [url=http://imageshack.us][img=http://...][/img][/url]',
	'ABBC3_IMGSHACK_VIEW'		=> '<a href="http://img207.imageshack.us/my.php?image=advancedbbcodebox3prosidd3.gif" class="postlink"><img src="http://img207.imageshack.us/img207/1773/advancedbbcodebox3prosidd3.th.gif" alt="Картинка" /></a>',

	'ABBC3_FLASH_MOVER'			=> 'Въведи flash файл',
	'ABBC3_FLASH_TIP'			=> ' [flash width=# height=#]Flash адрес[/flash]',
	'ABBC3_FLASH_VIEW'			=> '<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0" width="200" height="100"><param name="movie" value="http://www.adobe.com/support/flash/ts/documents/test_version/version.swf" /><param name="play" value="true" /><param name="loop" value="true" /><param name="quality" value="high" /><param name="allowScriptAccess" value="never" /><param name="allowNetworking" value="internal" /><embed src="http://www.adobe.com/support/flash/ts/documents/test_version/version.swf" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" width="200" height="100" play="true" loop="true" quality="high" allowscriptaccess="never" allownetworking="internal"></embed></object>',

	'ABBC3_VIDEO_MOVER'			=> 'Въведи видео',
	'ABBC3_VIDEO_TIP'			=> ' [video width=# height=#]Видео адрес[/video]',
	'ABBC3_VIDEO_VIEW'			=> '<object width="200" height="100" classid="CLSID:6BF52A52-394A-11d3-B153-00C04F79FAA6" id="wmstream_"><param name="url" value="$3" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /><param name="src" value="$3" /><!--[if !IE]>--><object width="200" height="100" type="video/x-ms-wmv" data="$3"><param name="src" value="$3" /><param name="controller" value="1" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /></object><!--<![endif]--></object>',

	'ABBC3_STREAM_MOVER'		=> 'Въведи аудио',
	'ABBC3_STREAM_TIP'			=> ' [stream]Адрес[/stream]',
	'ABBC3_STREAM_VIEW'			=> '<object width="200" height="45" classid="CLSID:6BF52A52-394A-11d3-B153-00C04F79FAA6" id="wmstream_"><param name="url" value="$1" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /><param name="src" value="$1" /><!--[if !IE]>--><object width="200" height="45" type="video/x-ms-wmv" data="$1"><param name="src" value="$1" /><param name="controller" value="1" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /></object><!--<![endif]--></object>',

	'ABBC3_RAM_MOVER'			=> 'Въведи Real Media',
	'ABBC3_RAM_TIP'				=> ' [ram]Real Media адрес[/ram]',
	'ABBC3_RAM_VIEW'			=> '<object id="rmstream_" classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" width="200" height="100"><param name="src" value="$3" /><param name="autostart" value="false" /><param name="controls" value="ImageWindow" /><param name="console" value="ctrls_" /><param name="prefetch" value="false" /><embed name="rmstream_" type="audio/x-pn-realaudio-plugin" src="$3" width="200" height="100" autostart="false" controls="ImageWindow" console="ctrls_" prefetch="false"></embed></object><br /><object id="ctrls_" classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" width="200" height="36"><param name="controls" value="ControlPanel" /><param name="console" value="ctrls_{_file.ATTACH_ID}" /><embed name="ctrls_" type="audio/x-pn-realaudio-plugin" width="200" height="36" controls="ControlPanel" console="ctrls_"></embed></object>',

	'ABBC3_QUICKTIME_MOVER'		=> 'Въведи Quick time',
	'ABBC3_QUICKTIME_TIP'		=> ' [quicktime width=# height=#]Quick time адрес[/quicktime]',
	'ABBC3_QUICKTIME_VIEW'		=> '<object id="qtstream_" classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab#version=6,0,2,0" width="200" height="100"><param name="src" value="http://www.nature.com/neuro/journal/v3/n3/extref/Li_control.mov.qt" /><param name="controller" value="true" /><param name="autoplay" value="false" /><param name="type" value="video/quicktime" /><embed name="qtstream_" src="http://www.nature.com/neuro/journal/v3/n3/extref/Li_control.mov.qt" pluginspage="http://www.apple.com/quicktime/download/" enablejavascript="true" controller="true" width="200" height="100" type="video/quicktime" autoplay="false"></embed></object>',

	'ABBC3_STAGE6_MOVER'		=> 'Въведи видео от Stage6', // от http://www.stage6.com/
	'ABBC3_STAGE6_TIP'			=> ' [stage6]Stage6 ID[/stage6]',
	'ABBC3_STAGE6_VIEW'			=> '<object  classid="clsid:67DABFBF-D0AB-41fa-9C46-CC0F21721616" codebase="http://download.divx.com/player/DivXBrowserPlugin.cab" width="200" height="100" ><param name="src" value="http://video.stage6.com/2068715/.divx" /><param name="autoplay" value="false" /><param name="custommode" value="Stage6" /><param name="showpostplaybackad" value="false" /><embed type="video/divx" src="http://video.stage6.com/2068715/.divx" pluginspage="http://go.divx.com/plugin/download/" showpostplaybackad="false" custommode="Stage6" autoplay="false" width="200" height="100" /></object><br />',

	'ABBC3_GVIDEO_MOVER'		=> 'Въведи видео от Google',
	'ABBC3_GVIDEO_TIP'			=> ' [GVideo]Видео адрес[/GVideo]',
	'ABBC3_GVIDEO_VIEW'			=> '<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0" width="200" height="100"><param name="movie" value="http://video.google.com/googleplayer.swf?docid=-8351924403384451128" /><param name="play" value="false" /><param name="loop" value="false" /><param name="quality" value="high" /><param name="allowScriptAccess" value="never" /><param name="allowNetworking" value="internal" /><embed src="http://video.google.com/googleplayer.swf?docid=-8351924403384451128" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" width="200" height="100" play="false" loop="false" quality="high" allowscriptaccess="never" allownetworking="internal"></embed></object>',

	'ABBC3_YOUTUBE_MOVER'		=> 'Въведи видео от Youtube',
	'ABBC3_YOUTUBE_TIP'			=> ' [youtube]Видео адрес[/youtube]',
	'ABBC3_YOUTUBE_VIEW'		=> '<object width="200" height="100"><param name="movie" value="http://www.youtube.com/v/TA4hm97m494" /><param name="wmode" value="transparent" /><embed src="http://www.youtube.com/v/TA4hm97m494" type="application/x-shockwave-flash" wmode="transparent" width="200" height="100"></embed></object>',

	'ABBC3_LISTB_MOVER'			=> 'Подредете по точки',
	'ABBC3_LISTB_TIP'			=> ' [list]текст[/list] Бележка: използвайте [*] за да създадете точка',
	'ABBC3_LISTB_VIEW'			=> '<ul><li>Item1</li><li>Item2</li><li>Item3</li></ul>',

	'ABBC3_LISTO_MOVER'			=> 'Нумериран списък',
	'ABBC3_LISTO_TIP'			=> ' [list=1|a]text[/list] Бележка: използвайте [*] за да създадете точка',
	'ABBC3_LISTO_VIEW'			=> '<ol style="list-style-type: lower-alpha"><li>Item1</li><li>Item2</li><li>Item3</li></ol>',

	'ABBC3_HR_MOVER'			=> 'Заглавие',
	'ABBC3_HR_TIP'				=> ' [hr] Бележка: Създава заглавие на една линия',
	'ABBC3_HR_VIEW'				=> '<hr noshade color="#000000" size="1px">',

	'ABBC3_CUT_MOVER'			=> 'Премахва избрания текст',
	'ABBC3_COPY_MOVER'			=> 'Копира избрания текст',
	'ABBC3_PASTE_MOVER'			=> 'Залепва избрания текст',
	'ABBC3_PLAIN_MOVER'			=> 'Премахва BBкодовете от избрания текст',
	'ABBC3_PASTE_ERROR'			=> 'Моля, пъвро копирайте текст, после го залепете ',
	'ABBC3_NOSELECT_ERROR'		=> 'Моля, първо изберете текст ',

	// Wizard texts
	'ABBC3_ERROR'				=> 'Грешка : ',
	'ABBC3_ERROR_TAG'			=> 'Неочаквана грешка използвайки етикет : ',

	'ABBC3_ID'					=> 'Въведете идентификатор :',
	'ABBC3_NOID'				=> 'Вие не написахте идентификатора',
	'ABBC3_LINK'				=> 'Въведете адрес за ',
	'ABBC3_DESC'				=> 'Въведете описание за ',
	'ABBC3_NAME'				=> 'Описание',
	'ABBC3_NOLINK'				=> 'Вие не написахте адрес за ',
	'ABBC3_NODESC'				=> 'Вие не написахте описание за ',
	'ABBC3_WIDTH'				=> 'Въведете широчина',
	'ABBC3_WIDTH_NOTE'			=> 'Бележка: данните може да бъдат интерпретирани като процент',
	'ABBC3_NOWIDTH'				=> 'Не въведохте широчината',
	'ABBC3_HEIGHT'				=> 'Въведете дължина',
	'ABBC3_HEIGHT_NOTE'			=> 'Бележка: данните може да бъдат интерпретирани като процент',
	'ABBC3_NOHEIGHT'			=> 'Не въведохте дължината',

	'ABBC3_ED2K_TAG'			=> 'ed2k',
	'ABBC3_ED2K_NOTE' 			=> '', //'Пример: ed2k://|file|Robin.Hood.S02E01.Sisterhood.HDTV.XviD-BiA.avi|367335424|6EB031138DE4A80997A13C272760202F|h=CJZXHKH25ZONIMWVUOENVQKJSZDV5JI6|/',
	'ABBC3_ED2K_ADD'			=> 'Въведете адреса във вашият ed2k клиент',

	'ABBC3_URL_TAG'				=> 'страница',
	'ABBC3_URL_NOTE' 			=> 'Пример: http://www.google.com',

	'ABBC3_WEB_TAG'				=> 'сайт',
	'ABBC3_WEB_NOTE'			=> 'Пример: http://www.google.com',

	'ABBC3_EMAIL_TAG'			=> 'email',
	'ABBC3_EMAIL_NOTE' 			=> 'Пример: user@server.ext',

	'ABBC3_IMG_TAG'				=> 'снимка',
	'ABBC3_IMG_NOTE'			=> 'Пример: http://www.google.com/intl/en_com/images/logo_plain.png',

	'ABBC3_THUMB_TAG'			=> 'миниатура',
	'ABBC3_THUMB_NOTE'			=> 'Пример: http://www.google.com/intl/en_com/images/logo_plain.png',

	'ABBC3_FLASH_TAG'			=> 'flash',
	'ABBC3_FLASH_NOTE'			=> 'Пример: http://www.adobe.com/support/flash/ts/documents/test_version/version.swf',

	'ABBC3_VIDEO_TAG'			=> 'видео',
	'ABBC3_VIDEO_NOTE'			=> '', //'Пример: ???',

	'ABBC3_STREAM_TAG'			=> 'аудио',
	'ABBC3_STREAM_NOTE'			=> '', //'Пример: ???',

	'ABBC3_RAM_TAG'				=> 'Real Media',
	'ABBC3_RAM_NOTE'			=> '', //'Пример: ???',

	'ABBC3_QUICKTIME_TAG'		=> 'Quick time',
	'ABBC3_QUICKTIME_NOTE'		=> 'Пример: http://www.nature.com/neuro/journal/v3/n3/extref/Li_control.mov.qt' . '<br/>' .'http://www.carnivalmidways.com/images/Music/thisisatest.mp3',

	'ABBC3_STAGE6_TAG'			=> 'Stage6 Видео',
	'ABBC3_STAGE6_NOTE'			=> 'Пример: 2068715',

	'ABBC3_GVIDEO_TAG'			=> 'Google Видео',
	'ABBC3_GVIDEO_NOTE'			=> 'Видео: http://video.google.com/videoplay?docid=-8351924403384451128',

	'ABBC3_YOUTUBE_TAG'			=> 'Youtube Видео',
	'ABBC3_YOUTUBE_NOTE'		=> 'Пример: http://www.youtube.com/watch?v=TA4hm97m494',

	'ABBC3_TABLE_STYLE'			=> 'Въведете стил на таблица',
	'ABBC3_TABLE_NOTE'			=> 'Пример: width:50%;border:1px solid #cccccc;',
	
	'ABBC3_ROW_NUMBER'			=> 'Въведете брой на редици',
	'ABBC3_ROW_ERROR'			=> 'Не въведохте брой за редиците',
	'ABBC3_ROW_STYLE'			=> 'Въведете стил за редиците',
	'ABBC3_ROW_NOTE'			=> 'Пример: text-align:center;',
	
	'ABBC3_CELL_NUMBER'			=> 'Въведете брой на колонките',
	'ABBC3_CELL_ERROR'			=> 'Не въведохте брой на колонките',
	'ABBC3_CELL_STYLE'			=> 'Въведете стил на колонките',
	'ABBC3_CELL_NOTE'			=> 'Пример: border:1px solid #cccccc;',

	'ABBC3_GRAD_MIN_ERROR'		=> 'Моля, първо изберете текст : ',
	'ABBC3_GRAD_MAX_ERROR'		=> 'Позволено е по-малко от 120 знака : ',

	'SPOILER_SHOW'				=> 'Покажи текст',
	'SPOILER_HIDE'				=> 'Скрий текст',

	// Custom bbcodes

	// MOD : add-on hide bbcode - START
	// [hide]text[/hide] Code..
	'ABBC3_HIDE_MOVER'			=> 'Скрий съобщението',
	'ABBC3_HIDE_TIP'			=> ' [hide]съобщение[/hide]',
	'ABBC3_HIDE_VIEW'			=> '<dl class="hidebox"><dt class="hide">Скриване: Включено</dt><dd>Първо трябва да отговорите на тази тема преди да видите съобщението</dd></dl>',
	// MOD : add-on hide bbcode - END

	// MOD : add-on Dailymotion bbcode - START
	// [dm]Dailymotion ID[/dm] Code..
	'ABBC3_DMOTION_MOVER'		=> 'Въведи видео от dailymotion', // от http://www.dailymotion.com/
	'ABBC3_DMOTION_TIP'			=> ' [dm]Dailymotion ID[/dm]',
	'ABBC3_DMOTION_VIEW'		=> '<object width="200" height="100"><param name="movie" value="http://www.dailymotion.com/swf/x3hm7o" /><param name="allowFullScreen" value="true" /><param name="allowScriptAccess" value="never" /><embed src="http://www.dailymotion.com/swf/x3hm7o" type="application/x-shockwave-flash" width="200" height="100" allowFullScreen="true" allowScriptAccess="never"></embed></object>',
	// MOD : add-on Dailymotion bbcode - END

	// MOD : add-on Moderator bbcode - START
	// [mod=name]text[/mod] Code..
	'ABBC3_MODERATOR_MOVER'		=> 'Модераторско съобщение',
	'ABBC3_MODERATOR_TIP'		=> ' [mod=name]текст[/mod]',
	'ABBC3_MODERATOR_VIEW'		=> '<table id="ModTable" width="100%" cellspacing="5" cellpadding="0" border="0" align="center"><tr><td class="row1" rowspan="2" align="middle" vAlign="center" width="1%"><span class="exclamation" title="Модераторско предупреждение">&nbsp;!&nbsp;</span></td><td class="row2"><span class="genmed"><b>Име на модератор:</b></span></td></tr><tr><td>Това е примерен текст</td></tr></table>',
	// MOD : add-on Moderator bbcode - END
	
	// MOD : add-on Veoh bbcode - START
	// [veoh]URL video[/veoh] Code..
	'ABBC3_VEOH_MOVER'			=> 'Въведи видео от Veoh',
	'ABBC3_VEOH_TIP'			=> ' [veoh]Видео адрес[/veoh].',
	'ABBC3_VEOH_TAG'			=> ' Veoh.',
	'ABBC3_VEOH_NOTE'			=> 'Пример: http://www.veoh.com/videos/v1409404EqT5SJjM.',
	'ABBC3_VEOH_VIEW'			=> '<embed src="http://www.veoh.com/videodetails2.swf?permalinkId=v1409404EqT5SJjM&id=anonymous&player=videodetailsembedded&videoAutoPlay=0" allowFullScreen="true" width="200" height="100" bgcolor="#000000" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>',
	// MOD : add-on Veoh bbcode - END
	
	// MOD : add-on offtopic bbcode - START
	// [offtopic]text[/offtopic] Code..
	'ABBC3_OFFTOPIC'			=> 'Извън темата',
	'ABBC3_OFFTOPIC_MOVER'		=> 'Въведете текст извън темата',
	'ABBC3_OFFTOPIC_TIP'		=> ' [offtopic]текст[/offtopic]',
	'ABBC3_OFFTOPIC_VIEW'		=> '<i><b><font color="#114499">Извън темата: </font></b><br/><font color="#2277DD">Това е примерен текст</font></i>',
	// MOD : add-on offtopic bbcode - END

	// MOD : add-on Gamespot bbcode - START
	// [gamespot] Gamespot video URL [gamespot] Code..
	'ABBC3_GAMESPOT_MOVER'		=> 'Въведи видео от Gamespot',
	'ABBC3_GAMESPOT_TIP'		=> ' [gamespot]Gamespot видео адрес [gamespot]',
	'ABBC3_GAMESPOT_NOTE'		=> ' Пример : http://www.gamespot.com/video/944074/6185798/tom-clancys-rainbow-six-vegas-2-official-trailer-3',
	'ABBC3_GAMESPOT_VIEW'		=> '<embed id="mymovie" width="200" height="100" flashvars="paramsURI=http%3A%2F%2Fwww%2Egamespot%2Ecom%2Fpages%2Fvideo%5Fplayer%2Fproteus%5Fxml%2Ephp%3Fadseg%3D%26adgrp%3D%26sid%3D6185798%26pid%3D944074%26mb%3D%26onid%3D%26nc%3D1202626246593%26embedded%3D1%26showWatermark%3D0%26autoPlay%3D0" allowfullscreen="true" allowscriptaccess="never" quality="high" name="mymovie" src="http://image.com.com/gamespot/images/cne_flash/production/media_player/proteus/gs/proteus_embed.swf" type="application/x-shockwave-flash"/>',
	// MOD : add-on Gamespot bbcode - END

	// MOD : add-on Gametrailers bbcode - START
	// [gametrailers] Gametrailers video URL [gametrailers] Code..
	'ABBC3_GAMETRAILERS_MOVER'	=> 'Въведи видео от Gametrailers',
	'ABBC3_GAMETRAILERS_TIP'	=> ' [gametrailers]Gametrailers видео адрес[/gametrailers]',
	'ABBC3_GAMETRAILERS_NOTE'	=> ' Пример : http://www.gametrailers.com/player/30461.html',
	'ABBC3_GAMETRAILERS_VIEW'	=> '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"  codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" id="gtembed" width="200" height="100"><param name="allowScriptAccess" value="never" /><param name="allowFullScreen" value="true" /><param name="movie" value="http://www.gametrailers.com/remote_wrap.php?mid=30461" /><param name="quality" value="high" /><embed src="http://www.gametrailers.com/remote_wrap.php?mid=30461" swLiveConnect="true" name="gtembed" align="middle" allowScriptAccess="never" allowFullScreen="true" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="200" height="100"></embed></object>',
	// MOD : add-on Gametrailers bbcode - END

	// MOD : add-on IGN video bbcode - START
	// [ignvideo] ING video URL [ignvideo] Code..
	'ABBC3_IGNVIDEO_MOVER'		=> 'Въведи видео от IGN',
	'ABBC3_IGNVIDEO_TIP'		=> ' [ignvideo]IGN видео адрес[/ignvideo]',
	'ABBC3_IGNVIDEO_NOTE'		=> ' Пример: object_ID=967025&downloadURL=http://tvmovies.ign.com/tv/video/article/850/850894/knightrider_trailer_020808_flvlow.flv',
	'ABBC3_IGNVIDEO_VIEW'		=> 	'<embed src="http://videomedia.ign.com/ev/ev.swf" flashvars="object_ID=967025&downloadURL=http://tvmovies.ign.com/tv/video/article/850/850894/knightrider_trailer_020808_flvlow.flv" type="application/x-shockwave-flash" width="200" height="100" ></embed>',
	// MOD : add-on IGN video bbcode - END

	// MOD : add-on liveleak bbcode - START
	// [liveleak] Liveleak video URL [liveleak] Code..
	'ABBC3_LIVELEAK_MOVER'		=> 'Въведи видео от Liveleak',
	'ABBC3_LIVELEAK_TIP'		=> ' [liveleak]Liveleak видео адрес[/liveleak]',
	'ABBC3_LIVELEAK_NOTE'		=> ' Пример: http://www.liveleak.com/view?i=413_1202590393',
	'ABBC3_LIVELEAK_VIEW'		=> '<object type="application/x-shockwave-flash" width="200" height="100" wmode="transparent" data="http://www.liveleak.com/player.swf?autostart=false&token=i=413_1202590393"><param name="movie" value="http://www.liveleak.com/player.swf?autostart=false&token=$1" /><param name="wmode" value="transparent" /><param name="quality" value="high" /></object>',
	// MOD : add-on liveleak bbcode - End

	// MOD : add-on NFO bbcode - START
	// [nfo]NFO text[/nfo] Code..
	'ABBC3_NFO_MOVER'			=> 'НЛО текст (Вижда се по-добре на Internet Explorer)',
	'ABBC3_NFO_TIP'				=> ' [nfo]НЛО текст[/nfo]',
	'ABBC3_NFO_VIEW'			=> '<table cellspacing="0" cellpadding="0" border="0" ><tr><td><span class="genmed"><b>NFO:</b></span></td></tr><tr><td class="nfo">' . str_replace(" ", "&nbsp;", '    І ЫЫЫЫ ЫЫ±±°                                  °°°±±±±ІІІЫЫЫЫЫЫЫЫЫЫЫ  Ы   ЫЫ ЫЫЫ') . '</td></tr></table>',
	// MOD : add-on NFO bbcode - End

	// MOD : add-on glow bbcode - START
	// [glow=color]Text[/glow] Code..
	'ABBC3_GLOW_MOVER'			=> 'Текст с блясък (Само за Internet Explorer)',
	'ABBC3_GLOW_TIP'			=> ' [glow=(color)]текст[/glow]',
	'ABBC3_GLOW_VIEW'			=> '<div style="filter:Glow(color=red,strength=4);color:#ffffff;height:110%">Това е примерен текст</div>',
	// MOD : add-on glow bbcode - END

	// MOD : add-on shadow bbcode - START
	// [shadow=(color)]text[/shadow] Code..
	'ABBC3_SHADOW_MOVER'		=> 'Текст със сянка (Само за Internet Explorer)',
	'ABBC3_SHADOW_TIP'			=> ' [shadow=(color)]текст[/shadow]',
	'ABBC3_SHADOW_VIEW'			=> '<div style="filter:shadow(color=black,strength=4);color:blue;height:110%">Това е примерен текст</div>',
	// MOD : add-on shadow bbcode - End

	// MOD : add-on dropshadow bbcode - START
	// [dropshadow=(color)]text[/dropshadow] Code..
	'ABBC3_DROPSHADOW_MOVER'	=> 'Сянка (Само за Internet Explorer)',
	'ABBC3_DROPSHADOW_TIP'		=> ' [dropshadow=(color)]текст[/dropshadow]',
	'ABBC3_DROPSHADOW_VIEW'		=> '<div style="filter:dropshadow(color=#999999,strength=4);color:blue;height:110%">Това е примерен текст</div>',
	// MOD : add-on dropshadow bbcode - End

	// MOD : add-on Blur bbcode - START
	// [blur=(color)]text[/blur] Code..
	'ABBC3_BLUR_MOVER'			=> 'Blur текст (Само за Internet Explorer)',
	'ABBC3_BLUR_TIP'			=> ' [blur=(color)]текст[/blur]',
	'ABBC3_BLUR_VIEW'			=> '<div style="filter:Blur(strength=7);color:blue;height:110%">Това е примерен текст</div>',
	// MOD : add-on Blur bbcode - End

	// MOD : add-on Wave bbcode - START
	// [wave=(color)]text[/wave] Code
	'ABBC3_WAVE_MOVER'			=> 'Текст на вълнички (Само за Internet Explorer)',
	'ABBC3_WAVE_TIP'			=> ' [wave=(color)]текст[/wave]',
	'ABBC3_WAVE_VIEW'			=> '<div style="filter:Wave(strength=2);color:blue;height:110%">Това е примерен текст</div>',
	// MOD : add-on Wave bbcode - End

	// MOD : add-on Search bbcode - START
	// [search(=(msn|yahoo|google))]text[/search] Code..
	'ABBC3_SEARCH_MOVER'		=> 'Въведете дума за търсене',
	'ABBC3_SEARCH_TIP'			=> ' [search(=(msn|yahoo|google))]текст[/search]',
	'ABBC3_SEARCH_VIEW'			=> $lang['SEARCH_MINI'] . $config['sitename'] . ' :  <a href="search.php?keywords=Advanced BBcode box 3">"Advanced BBcode box 3" </a><br/><br/>' . $lang['SEARCH_MINI'] . 'msn :  <a href="http://search.live.com/results.aspx?q=Advanced BBcode box 3&mkt=tr-TR&lf=1" target="_blank">"Advanced BBcode box 3" </a><br/><br/>' .$lang['SEARCH_MINI'] . 'yahoo :  <a href="http://search.yahoo.com/search?p=Advanced BBcode box 3" target="_blank">"Advanced BBcode box 3" </a><br/><br/>' . $lang['SEARCH_MINI'] . 'google : <a href="http://www.google.com.tr/search?q=Advanced BBcode box 3" target="_blank">"Advanced BBcode box 3" </a>',
	// MOD : add-on Search bbcode - End


));

?>