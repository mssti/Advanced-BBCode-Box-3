<?php
/** 
*
* abbcode [Turkish]
* @package language
* @version $Id: abbcode.php, v 1.0.7b 2008/02/20 18:05:07 leviatan21 Exp $
* @Turkish version $Id: $ phpBB 3.0.0 - 1.0.7
* @copyright leviatan21 < info@mssti.com > (Gabriel) http://www.mssti.com/phpbb3/
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
* @translator: muiketi - muiketi@gmail.com
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
* � - é
* � - è
* � - ê
* � - ë
* � - �
* � - â
* � - ä
* � - î
* � - ï
* � - ò
* � - ô
* � - ù
* � - û
* � - ç
* � = á
* � = �  XX
* � = é
* � = É XX
* � = í
* � = �?
* � = ó
* � = Ó
* � = ú
* � = Ú
* � = ñ
* � = Ñ
* ? = ¿
********************************************************************/

$lang = array_merge($lang, array(
	'BBCODE_STYLES_TIP'			=> 'Kullanım: Stiller kolayca seçili metinlere uygulanır',

	// Help
	'ABBC3_HELP_TITLE'			=> 'Advanced BBCode box 3 :: Yardım Sayfası',
	'ABBC3_HELP_CUSTOM_TITLE'	=> 'Advanced BBCode box 3 :: Özel BBCode Yardım Sayfası',
	'ABBC3_HELP_DESC'			=> 'Tanım',
	'ABBC3_HELP_WRITE'			=> 'Siz yazıyorsunuz',
	'ABBC3_HELP_VIEW'			=> 'Biz gösteriyoruz',
	'ABBC3_HELP_ABOUT'			=> 'Advanced BBCode Box 3 <a href="http://www.mssti.com/phpbb3">mssti</a>',

	// Dropdown titles options
	'ABBC3_FONTTYPE_MOVER'		=> 'Yazı tipi',
	'ABBC3_FONTTYPE_TIP'		=> ' [font=Comic Sans MS]metin[/font]',
	'ABBC3_FONTTYPE_VIEW'		=> '<span style="font-family:Comic Sans MS">Bu basit bir metindir</span>',

	'ABBC3_FONT_GIANT'			=> 'Devasa',

	'ABBC3_FONTCOLOR_MOVER'		=> 'Yazı rengi',
	'ABBC3_FONTCOLOR_TIP'		=> ' [color=red]metin[/color] Not: Renk değerini color=#FF0000 veya (color=red olarak belirtebilirsiniz)',
	'ABBC3_FONTCOLOR_VIEW'		=> '<span style="color:red">Bu basit bir metindir</span>',

	'ABBC3_FONTSIZE_MOVER'		=> 'Yazı boyutu',
	'ABBC3_FONTSIZE_TIP'		=> ' [size=150]text large[/size] Not: Değerler yüzde cinsinden alınacaktır',
	'ABBC3_FONTSIZE_VIEW'		=> '<span style="font-size: 150%; line-height: 116%;">Bu basit bir metindir</span>',

	'ABBC3_FONTHILI_MOVER'		=> 'Artalanı renklendirilmiş metin',
	'ABBC3_FONTHILI_TIP'		=> ' [highlight=yellow]metin[/highlight] Not: Renk değerini color=#FF0000 veya (color=red olarak belirtebilirsiniz)',
	'ABBC3_FONTHILI_VIEW'		=> '<span style="background-color: yellow;">Bu basit bir metindir</span>',

	// Text to be applied to the helpline & mouseover & help page
	'ABBC3_JUSTIFY_MOVER'		=> 'İki yana yaslanmış metin',
	'ABBC3_JUSTIFY_TIP'			=> ' [align=justify]metin[/align]',
	'ABBC3_JUSTIFY_VIEW'		=> '<div style="text-align:justify">Bu basit bir metindir</div>',

	'ABBC3_RIGHT_MOVER'			=> 'Sağa dayalı metin',
	'ABBC3_RIGHT_TIP'			=> ' [align=right]metin[/align]',
	'ABBC3_RIGHT_VIEW'			=> '<div style="text-align:right">Bu basit bir metindir</div>',

	'ABBC3_CENTER_MOVER'		=> 'Ortalanmış metin',
	'ABBC3_CENTER_TIP'			=> ' [align=center]metin[/align]',
	'ABBC3_CENTER_VIEW'			=> '<div style="text-align:center">Bu basit bir metindir</div>',

	'ABBC3_LEFT_MOVER'			=> 'Sola dayalı metin',
	'ABBC3_LEFT_TIP'			=> ' [align=left]metin[/align]',
	'ABBC3_LEFT_VIEW'			=> '<div style="text-left:justify">Bu basit bir metindir</div>',

	'ABBC3_PRE_MOVER'			=> 'Biçimlendirilmemiş metin',
	'ABBC3_PRE_TIP'				=> ' [pre]metin[/pre]',
	'ABBC3_PRE_VIEW'			=> '<pre>Bu basit bir metindir</pre>',

	'ABBC3_SUP_MOVER'			=> 'Yazıyı üst-indis olarak göster',
	'ABBC3_SUP_TIP'				=> ' [sup]metin[/sup]',
	'ABBC3_SUP_VIEW'			=> 'Bu basit <sup>bir metindir</sup>',

	'ABBC3_SUB_MOVER'			=> 'Yazıyı alt-indis olarak göster',
	'ABBC3_SUB_TIP'				=> ' [sub]metin[/sub]',
	'ABBC3_SUB_VIEW'			=> 'Bu basit <sub>bir metindir</sub>',

	'ABBC3_BOLD_MOVER'			=> 'Kalın metin',
	'ABBC3_BOLD_TIP'			=> ' [b]metin[/b]',
	'ABBC3_BOLD_VIEW'			=> '<strong>Bu basit bir metindir</strong>',

	'ABBC3_ITALIC_MOVER'		=> 'Eğik metin',
	'ABBC3_ITALIC_TIP'			=> ' [i]metin[/i]',
	'ABBC3_ITALIC_VIEW'			=> '<em>Bu basit bir metindir</em>',

	'ABBC3_UNDERLINE_MOVER'		=> 'Altı çizili metin',
	'ABBC3_UNDERLINE_TIP'		=> ' [u]metin[/u]',
	'ABBC3_UNDERLINE_VIEW'		=> '<span style="text-decoration: underline">Bu basit bir metindir</span>',

	'ABBC3_STRIKE_MOVER'		=> 'Üstü çizili metin',
	'ABBC3_STRIKE_TIP'			=> ' [s]metin[/s]',
	'ABBC3_STRIKE_VIEW'			=> '<strike>Bu basit bir metindir</strike>',

	'ABBC3_FADE_MOVER'			=> 'Soluklaşan metin',
	'ABBC3_FADE_TIP'			=> ' [fade]metin[/fade]',
	'ABBC3_FADE_VIEW'			=> '<span class="fade_link">Bu basit bir metindir</span> <script type="text/javascript">fade_ontimer()</script>',

	'ABBC3_GRAD_MOVER'			=> 'Rengarenk metin',
	'ABBC3_GRAD_TIP'			=> '',
	'ABBC3_GRAD_VIEW'			=> '<span style="color: #FF0000">B</span><span style="color: #F2000D">u</span> <span style="color: #D90026">b</span><span style="color: #CC0033">a</span><span style="color: #BF0040">s</span><span style="color: #B3004D">i</span><span style="color: #A60059">t</span> <span style="color: #8C0073">b</span><span style="color: #800080">i</span><span style="color: #73008C">r</span> <span style="color: #5900A6">m</span><span style="color: #4D00B3">e</span><span style="color: #4000BF">t</span><span style="color: #3300CC">i</span><span style="color: #2600D9">n</span><span style="color: #1A00E6">d</span><span style="color: #0D00F2">i</span><span style="color: #0000FF">r</span>',

	'ABBC3_RTL_MOVER'			=> 'Sağdan sola okunan metin',
	'ABBC3_RTL_TIP'				=> ' [dir=rtl]metin[/dir]',
	'ABBC3_RTL_VIEW'			=> '<BDO dir="rtl">Bu basit bir metindir</BDO>',

	'ABBC3_LTR_MOVER'			=> 'Soldan sağa okunan metin',
	'ABBC3_LTR_TIP'				=> ' [dir=ltr]metin[/dir]',
	'ABBC3_LTR_VIEW'			=> '<BDO dir="ltr">Bu basit bir metindir</BDO>',

	'ABBC3_MARQD_MOVER'			=> 'Aşağı kayan metin',
	'ABBC3_MARQD_TIP'			=> ' [marq=down]metin[/marq]',
	'ABBC3_MARQD_VIEW'			=> '<marquee direction="down" scrolldelay="120">Bu basit bir metindir</marquee>',

	'ABBC3_MARQU_MOVER'			=> 'Yukarı kayan metin',
	'ABBC3_MARQU_TIP'			=> ' [marq=up]metin[/marq]',
	'ABBC3_MARQU_VIEW'			=> '<marquee direction="up" scrolldelay="120">Bu basit bir metindir</marquee>',

	'ABBC3_MARQR_MOVER'			=> 'Sağa kayan metin',
	'ABBC3_MARQR_TIP'			=> ' [marq=right]metin[/marq]',
	'ABBC3_MARQR_VIEW'			=> '<marquee direction="right" scrolldelay="120">Bu basit bir metindir</marquee>',

	'ABBC3_MARQL_MOVER'			=> 'Sola kayan metin',
	'ABBC3_MARQL_TIP'			=> ' [marq=left]metin[/marq]',
	'ABBC3_MARQL_VIEW'			=> '<marquee direction="left" scrolldelay="120">Bu basit bir metindir</marquee>',

	'ABBC3_TABLE_MOVER'			=> 'Tablo giriniz',
	'ABBC3_TABLE_TIP'			=> ' [table=(ccs style)][tr=(ccs style)][td=(ccs style)]metin[/td][/tr][/table]',
	'ABBC3_TABLE_VIEW'			=> '<table style="width:50%;border:1px solid #cccccc;" cellspacing="0" cellpadding="0"><tr style="text-align:center;"><td style="border:1px solid #cccccc;">Bu basit bir metindir</td></tr></table>',

	'ABBC3_QUOTE_MOVER'			=> 'Alıntı',
	'ABBC3_QUOTE_TIP'			=> ' [quote]metin[/quote] or [quote=\"member\"]metin[/quote]',
	'ABBC3_QUOTE_VIEW'			=> '<blockquote><div><cite>member '. $lang['WROTE'] .':</cite>Bu basit bir metindir</div></blockquote>',

	'ABBC3_CODE_MOVER'			=> 'Kod',
	'ABBC3_CODE_TIP'			=> ' [code]kod[/code]',
	'ABBC3_CODE_VIEW'			=> '<dl class="codebox"><dt>'. $lang['CODE'] .': <a href="#" onclick="selectCode(this); return false;">'. $lang['SELECT_ALL_CODE'] .'</a></dt><dd><code>Bu basit bir metindir</code></dd></dl>',

	'ABBC3_SPOIL_MOVER'			=> 'Dipnot metin',
	'ABBC3_SPOIL_TIP'			=> ' [spoil]metin[/spoil]',
	'ABBC3_SPOIL_VIEW'			=> '<div class="spoilwrapper"><div class="spoiltitle"><input class="btnspoil" type="button" value="Dipnotu Göster" onClick="javascript:if (this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display != \'\') { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'\'; this.innerText = \'\'; this.value = \'Dipnotu Gizle\'; } else { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'none\'; this.innerText = \'\'; this.value = \'Dipnotu Göster\'; }" onfocus="this.blur();"></div><div class="spoilcontent"><div style="display: none;">Bu basit bir metindir</div></div></div>',

	'ABBC3_ED2K_MOVER'			=> 'eD2K linki',
	'ABBC3_ED2K_TIP'			=> ' [url]link ed2k[/url] or [url=link ed2k]Görüntülenecek isim[/url]',
	'ABBC3_ED2K_VIEW'			=> '<a href="ed2k://|file|Robin.Hood.S02E01.Sisterhood.HDTV.XviD-BiA.avi|367335424|6EB031138DE4A80997A13C272760202F|h=CJZXHKH25ZONIMWVUOENVQKJSZDV5JI6|/" class="postlink">Robin.Hood.S02E01.Sisterhood.HDTV.XviD-BiA.avi</a>',

	'ABBC3_URL_MOVER'			=> 'Web adresi',	
	'ABBC3_URL_TIP'				=> ' [url]http://...[/url] or [url=http://...]Görüntülenecek isim[/url]',
	'ABBC3_URL_VIEW'			=> '<a href="http://www.google.com" class="postlink">Google</a>',

	'ABBC3_EMAIL_MOVER'			=> 'E-Posta',
	'ABBC3_EMAIL_TIP'			=> ' [email]kullanici@sunucu.uzanti[/email] or [email=kullanici@sunucu.uzanti]e-posta adresim[/email]',
	'ABBC3_EMAIL_VIEW'			=> '<a href="mailto:kullanici@sunucu.uzanti">kullanici@sunucu.uzanti</a>',

	'ABBC3_WEB_MOVER'			=> 'İletide gösterilecek site',
	'ABBC3_WEB_TIP'				=> ' [web width=200 height=100 ]Site adresi[/web]',
	'ABBC3_WEB_VIEW'			=> '<iframe width="100%" height="100" src="http://www.google.com" style="font-size: 2px;"></iframe><br/>',

	'ABBC3_IMG_MOVER'			=> 'Resim ekle',
	'ABBC3_IMG_TIP'				=> ' [img=(left|center|right)]http://...[/img]',
	'ABBC3_IMG_VIEW'			=> '<div align="center"><img src="http://www.google.com/intl/en_com/images/logo_plain.png" /></div>',

	'ABBC3_THUMB_MOVER'			=> 'Küçük resim ekle',
	'ABBC3_THUMB_TIP'			=> ' [thumbnail(=left|right)]http://...[/thumbnail]',
	'ABBC3_THUMB_VIEW'			=> '<a href="http://www.google.com/intl/en_com/images/logo_plain.png" rel="lightbox[]" alt="http://www.google.com/intl/en_com/images/logo_plain.png" title="" class="hoverbox"><img src="http://www.google.com/intl/en_com/images/logo_plain.png" border="0" width="100px" align="right"/></a>',

	'ABBC3_IMGSHACK_MOVER'		=> 'Resim ekle (imageshack sitesinden)',
	'ABBC3_IMGSHACK_TIP'		=> ' [url=http://imageshack.us][img=http://...][/img][/url]',
	'ABBC3_IMGSHACK_VIEW'		=> '<a href="http://img207.imageshack.us/my.php?image=advancedbbcodebox3prosidd3.gif" class="postlink"><img src="http://img207.imageshack.us/img207/1773/advancedbbcodebox3prosidd3.th.gif" alt="Image" /></a>',

	'ABBC3_FLASH_MOVER'			=> 'Flash dosyası ekle',
	'ABBC3_FLASH_TIP'			=> ' [flash width=# height=#]Flash dosyasının adresi[/flash]',
	'ABBC3_FLASH_VIEW'			=> '<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0" width="200" height="100"><param name="movie" value="http://www.adobe.com/support/flash/ts/documents/test_version/version.swf" /><param name="play" value="true" /><param name="loop" value="true" /><param name="quality" value="high" /><param name="allowScriptAccess" value="never" /><param name="allowNetworking" value="internal" /><embed src="http://www.adobe.com/support/flash/ts/documents/test_version/version.swf" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" width="200" height="100" play="true" loop="true" quality="high" allowscriptaccess="never" allownetworking="internal"></embed></object>',

	'ABBC3_VIDEO_MOVER'			=> 'Video ekle',
	'ABBC3_VIDEO_TIP'			=> ' [video width=# height=#]Video dosyasının adresi[/video]',
	'ABBC3_VIDEO_VIEW'			=> '<object width="200" height="100" classid="CLSID:6BF52A52-394A-11d3-B153-00C04F79FAA6" id="wmstream_"><param name="url" value="$3" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /><param name="src" value="$3" /><!--[if !IE]>--><object width="200" height="100" type="video/x-ms-wmv" data="$3"><param name="src" value="$3" /><param name="controller" value="1" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /></object><!--<![endif]--></object>',

	'ABBC3_STREAM_MOVER'		=> 'Ses dosyası ekle',
	'ABBC3_STREAM_TIP'			=> ' [stream]Ses dosyasının adresi[/stream]',
	'ABBC3_STREAM_VIEW'			=> '<object width="200" height="45" classid="CLSID:6BF52A52-394A-11d3-B153-00C04F79FAA6" id="wmstream_"><param name="url" value="$1" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /><param name="src" value="$1" /><!--[if !IE]>--><object width="200" height="45" type="video/x-ms-wmv" data="$1"><param name="src" value="$1" /><param name="controller" value="1" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /></object><!--<![endif]--></object>',

	'ABBC3_RAM_MOVER'			=> 'Real Media dosyası ekle',
	'ABBC3_RAM_TIP'				=> ' [ram]Real Media dosyasının adresi[/ram]',
	'ABBC3_RAM_VIEW'			=> '<object id="rmstream_" classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" width="200" height="100"><param name="src" value="$3" /><param name="autostart" value="false" /><param name="controls" value="ImageWindow" /><param name="console" value="ctrls_" /><param name="prefetch" value="false" /><embed name="rmstream_" type="audio/x-pn-realaudio-plugin" src="$3" width="200" height="100" autostart="false" controls="ImageWindow" console="ctrls_" prefetch="false"></embed></object><br /><object id="ctrls_" classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" width="200" height="36"><param name="controls" value="ControlPanel" /><param name="console" value="ctrls_{_file.ATTACH_ID}" /><embed name="ctrls_" type="audio/x-pn-realaudio-plugin" width="200" height="36" controls="ControlPanel" console="ctrls_"></embed></object>',

	'ABBC3_QUICKTIME_MOVER'		=> 'Quick time dosyası ekle',
	'ABBC3_QUICKTIME_TIP'		=> ' [quicktime width=# height=#]Quick time dosyasının adresi[/quicktime]',
	'ABBC3_QUICKTIME_VIEW'		=> '<object id="qtstream_" classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab#version=6,0,2,0" width="200" height="100"><param name="src" value="http://www.nature.com/neuro/journal/v3/n3/extref/Li_control.mov.qt" /><param name="controller" value="true" /><param name="autoplay" value="false" /><param name="type" value="video/quicktime" /><embed name="qtstream_" src="http://www.nature.com/neuro/journal/v3/n3/extref/Li_control.mov.qt" pluginspage="http://www.apple.com/quicktime/download/" enablejavascript="true" controller="true" width="200" height="100" type="video/quicktime" autoplay="false"></embed></object>',

	'ABBC3_STAGE6_MOVER'		=> 'Stage6 sitesinden video ekle', // from http://www.stage6.com/
	'ABBC3_STAGE6_TIP'			=> ' [stage6]Stage6 ID[/stage6]',
	'ABBC3_STAGE6_VIEW'			=> '<object  classid="clsid:67DABFBF-D0AB-41fa-9C46-CC0F21721616" codebase="http://download.divx.com/player/DivXBrowserPlugin.cab" width="200" height="100" ><param name="src" value="http://video.stage6.com/2068715/.divx" /><param name="autoplay" value="false" /><param name="custommode" value="Stage6" /><param name="showpostplaybackad" value="false" /><embed type="video/divx" src="http://video.stage6.com/2068715/.divx" pluginspage="http://go.divx.com/plugin/download/" showpostplaybackad="false" custommode="Stage6" autoplay="false" width="200" height="100" /></object><br />',

	'ABBC3_GVIDEO_MOVER'		=> 'Google videosu ekle',
	'ABBC3_GVIDEO_TIP'			=> ' [GVideo]Video dosyasının adresi[/GVideo]',
	'ABBC3_GVIDEO_VIEW'			=> '<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0" width="200" height="100"><param name="movie" value="http://video.google.com/googleplayer.swf?docid=-8351924403384451128" /><param name="play" value="false" /><param name="loop" value="false" /><param name="quality" value="high" /><param name="allowScriptAccess" value="never" /><param name="allowNetworking" value="internal" /><embed src="http://video.google.com/googleplayer.swf?docid=-8351924403384451128" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" width="200" height="100" play="false" loop="false" quality="high" allowscriptaccess="never" allownetworking="internal"></embed></object>',

	'ABBC3_YOUTUBE_MOVER'		=> 'Youtube videosu ekle',
	'ABBC3_YOUTUBE_TIP'			=> ' [youtube]Video dosyasının adresi[/youtube]',
	'ABBC3_YOUTUBE_VIEW'		=> '<object width="200" height="100"><param name="movie" value="http://www.youtube.com/v/TA4hm97m494" /><param name="wmode" value="transparent" /><embed src="http://www.youtube.com/v/TA4hm97m494" type="application/x-shockwave-flash" wmode="transparent" width="200" height="100"></embed></object>',

	'ABBC3_LISTB_MOVER'			=> 'Sırasız liste',
	'ABBC3_LISTB_TIP'			=> ' [list]metin[/list] Not: [*] kullanarak yeni liste öğesi oluşturabilirsiniz',
	'ABBC3_LISTB_VIEW'			=> '<ul><li>Liste Öğesi 1</li><li>Liste Öğesi 2</li><li>Liste Öğesi 3</li></ul>',

	'ABBC3_LISTO_MOVER'			=> 'Sıralı liste',
	'ABBC3_LISTO_TIP'			=> ' [list=1|a]metin[/list] Not: [*] kullanarak yeni liste öğesi oluşturabilirsiniz',
	'ABBC3_LISTO_VIEW'			=> '<ol style="list-style-type: lower-alpha"><li>Liste Öğesi 1</li><li>IListe Öğesi 2</li><li>Liste Öğesi 3</li></ol>',

	'ABBC3_HR_MOVER'			=> 'Yatay çizgi',
	'ABBC3_HR_TIP'				=> ' [hr] Not: Metni ayırmak için yatay bir çizgi oluşturur',
	'ABBC3_HR_VIEW'				=> '<hr noshade color="#000000" size="1px">',

	'ABBC3_CUT_MOVER'			=> 'Seçili metni sil',
	'ABBC3_COPY_MOVER'			=> 'Seçili metni kopyala',
	'ABBC3_PASTE_MOVER'			=> 'Kopyalanan metni yapıştır',
	'ABBC3_PLAIN_MOVER'			=> 'Seçili metindeki BBCodeları kaldır',
	'ABBC3_PASTE_ERROR'			=> 'Lütfen önce bir metin seçiniz daha sonra yapıştırınız',
	'ABBC3_NOSELECT_ERROR'		=> 'Lütfen önce metni seçiniz ',

	// Wizard texts
	'ABBC3_ERROR'				=> 'Hata : ',
	'ABBC3_ERROR_TAG'			=> 'Etiket kullanımında beklenmeyen hata : ',

	'ABBC3_ID'					=> 'Tanımlayıcı giriniz :',
	'ABBC3_NOID'				=> 'Tanımlayıcıyı belirtmediniz',
	'ABBC3_LINK'				=> 'Linki giriniz ',
	'ABBC3_DESC'				=> 'Açıklama giriniz ',
	'ABBC3_NAME'				=> 'Açıklama',
	'ABBC3_NOLINK'				=> 'Link belirtmediniz. ',
	'ABBC3_NODESC'				=> 'Herhangi bir açıklama belirtmediniz. ',
	'ABBC3_WIDTH'				=> 'Genişliği giriniz',
	'ABBC3_WIDTH_NOTE'			=> 'Not: Yüzde cinsinden değer belirtebilirsiniz',
	'ABBC3_NOWIDTH'				=> 'Genişliği belirtmediniz',
	'ABBC3_HEIGHT'				=> 'Yüksekliği giriniz',
	'ABBC3_HEIGHT_NOTE'			=> 'Not: Yüzde cinsinden değer belirtebilirsiniz',
	'ABBC3_NOHEIGHT'			=> 'Yüksekliği belirtmediniz',

	'ABBC3_ED2K_TAG'			=> 'ed2k',
	'ABBC3_ED2K_NOTE' 			=> '', //'Örnek: ed2k://|file|Robin.Hood.S02E01.Sisterhood.HDTV.XviD-BiA.avi|367335424|6EB031138DE4A80997A13C272760202F|h=CJZXHKH25ZONIMWVUOENVQKJSZDV5JI6|/',
	'ABBC3_ED2K_ADD'			=> 'Seçili bağlantıları ed2k istemcinize ekleyin',

	'ABBC3_URL_TAG'				=> 'sayfa',
	'ABBC3_URL_NOTE' 			=> 'Örnek: http://www.google.com',

	'ABBC3_WEB_TAG'				=> 'web adresi',
	'ABBC3_WEB_NOTE'			=> 'Örnek: http://www.google.com',

	'ABBC3_EMAIL_TAG'			=> 'e-posta',
	'ABBC3_EMAIL_NOTE' 			=> 'Örnek: kullanici@sunucu.uzanti',

	'ABBC3_IMG_TAG'				=> 'resim',
	'ABBC3_IMG_NOTE'			=> 'Örnek: http://www.google.com/intl/en_com/images/logo_plain.png',

	'ABBC3_THUMB_TAG'			=> 'küçük resim',
	'ABBC3_THUMB_NOTE'			=> 'Örnek: http://www.google.com/intl/en_com/images/logo_plain.png',

	'ABBC3_FLASH_TAG'			=> 'flash',
	'ABBC3_FLASH_NOTE'			=> 'Örnek: http://www.adobe.com/support/flash/ts/documents/test_version/version.swf',

	'ABBC3_VIDEO_TAG'			=> 'video',
	'ABBC3_VIDEO_NOTE'			=> '', //'Örnek: ???',

	'ABBC3_STREAM_TAG'			=> 'sound',
	'ABBC3_STREAM_NOTE'			=> '', //'Örnek: ???',

	'ABBC3_RAM_TAG'				=> 'Real Media',
	'ABBC3_RAM_NOTE'			=> '', //'Örnek: ???',

	'ABBC3_QUICKTIME_TAG'		=> 'Quick time dosyası',
	'ABBC3_QUICKTIME_NOTE'		=> 'Örnek: http://www.nature.com/neuro/journal/v3/n3/extref/Li_control.mov.qt' . '<br/>' .'http://www.carnivalmidways.com/images/Music/thisisatest.mp3',

	'ABBC3_STAGE6_TAG'			=> 'Stage6 Video',
	'ABBC3_STAGE6_NOTE'			=> 'Örnek: 2068715',

	'ABBC3_GVIDEO_TAG'			=> 'Google Video',
	'ABBC3_GVIDEO_NOTE'			=> 'Örnek: http://video.google.com/videoplay?docid=-8351924403384451128',

	'ABBC3_YOUTUBE_TAG'			=> 'Youtube Video',
	'ABBC3_YOUTUBE_NOTE'		=> 'Örnek: http://www.youtube.com/watch?v=TA4hm97m494',

	'ABBC3_TABLE_STYLE'			=> 'Tablo stilini giriniz',
	'ABBC3_TABLE_NOTE'			=> 'Örnek: width:50%;border:1px solid #cccccc;',
	
	'ABBC3_ROW_NUMBER'			=> 'Satır sayısı',
	'ABBC3_ROW_ERROR'			=> 'Satır sayısı belirtmediniz',
	'ABBC3_ROW_STYLE'			=> 'Satır stili',
	'ABBC3_ROW_NOTE'			=> 'Örnek: text-align:center;',
	
	'ABBC3_CELL_NUMBER'			=> 'Hücre sayısı',
	'ABBC3_CELL_ERROR'			=> 'Hücre sayısı belirtmediniz',
	'ABBC3_CELL_STYLE'			=> 'Hücre stili',
	'ABBC3_CELL_NOTE'			=> 'Örnek: border:1px solid #cccccc;',

	'ABBC3_GRAD_MIN_ERROR'		=> 'Lütfen önce metni seçiniz : ',
	'ABBC3_GRAD_MAX_ERROR'		=> 'Sadece 120 karakter ve altı : ',

	'SPOILER_SHOW'				=> 'Dipnotu Göster',
	'SPOILER_HIDE'				=> 'Dipnotu Gizle',

	// Custom bbcodes

	// MOD : add-on hide bbcode - START
	// [hide]metin[/hide] Code..
	'ABBC3_HIDE_MOVER'			=> 'Gizli içerik',
	'ABBC3_HIDE_TIP'			=> ' [hide]message[/hide]',
	'ABBC3_HIDE_VIEW'			=> '<dl class="hidebox"><dt class="hide">HIDE: ON</dt><dd>You need to reply to this topic before you can view the hidden message</dd></dl>',
	// MOD : add-on hide bbcode - END

	// MOD : add-on Dailymotion bbcode - START
	// [dm]Dailymotion ID[/dm] Code..
	'ABBC3_DMOTION_MOVER'		=> 'Dailymotion sitesinden video ekle', // from http://www.dailymotion.com/
	'ABBC3_DMOTION_TIP'			=> ' [dm]Dailymotion ID[/dm]',
	'ABBC3_DMOTION_VIEW'		=> '<object width="200" height="100"><param name="movie" value="http://www.dailymotion.com/swf/x3hm7o" /><param name="allowFullScreen" value="true" /><param name="allowScriptAccess" value="never" /><embed src="http://www.dailymotion.com/swf/x3hm7o" type="application/x-shockwave-flash" width="200" height="100" allowFullScreen="true" allowScriptAccess="never"></embed></object>',
	// MOD : add-on Dailymotion bbcode - END

	// MOD : add-on Moderator bbcode - START
	// [mod=name]text[/mod] Code..
	'ABBC3_MODERATOR_MOVER'		=> 'Yetkili mesajı',
	'ABBC3_MODERATOR_TIP'		=> ' [mod=name]metin[/mod]',
	'ABBC3_MODERATOR_VIEW'		=> '<table id="ModTable" width="100%" cellspacing="5" cellpadding="0" border="0" align="center"><tr><td class="row1" rowspan="2" align="middle" vAlign="center" width="1%"><span class="exclamation" title="Moderator warning">&nbsp;!&nbsp;</span></td><td class="row2"><span class="genmed"><b>Mod Name:</b></span></td></tr><tr><td>Bu basit bir metindir</td></tr></table>',
	// MOD : add-on Moderator bbcode - END
	
	// MOD : add-on Veoh bbcode - START
	// [veoh]URL video[/veoh] Code..
	'ABBC3_VEOH_MOVER'			=> 'Veoh sitesinden video dosyası',
	'ABBC3_VEOH_TIP'			=> ' [veoh]Video dosyasının adresi[/veoh]',
	'ABBC3_VEOH_TAG'			=> ' Veoh',
	'ABBC3_VEOH_NOTE'			=> 'Örnek: http://www.veoh.com/videos/v1409404EqT5SJjM',
	'ABBC3_VEOH_VIEW'			=> '<embed src="http://www.veoh.com/videodetails2.swf?permalinkId=v1409404EqT5SJjM&id=anonymous&player=videodetailsembedded&videoAutoPlay=0" allowFullScreen="true" width="200" height="100" bgcolor="#000000" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>',
	// MOD : add-on Veoh bbcode - END
	
	// MOD : add-on offtopic bbcode - START
	// [offtopic]text[/offtopic] Code..
	'ABBC3_OFFTOPIC'			=> 'Konudışı',
	'ABBC3_OFFTOPIC_MOVER'		=> 'Konudışı metnini giriniz',
	'ABBC3_OFFTOPIC_TIP'		=> ' [offtopic]metin[/offtopic]',
	'ABBC3_OFFTOPIC_VIEW'		=> '<i><b><font color="#114499">Konudışı: </font></b><br/><font color="#2277DD">Bu basit bir metindir</font></i>',
	// MOD : add-on offtopic bbcode - END

	// MOD : add-on Gamespot bbcode - START
	// [gamespot] Gamespot video URL [gamespot] Code..
	'ABBC3_GAMESPOT_MOVER'		=> 'Gamespot sitesinden video ekle',
	'ABBC3_GAMESPOT_TIP'		=> ' [gamespot]Video dosyasının adresi[gamespot]',
	'ABBC3_GAMESPOT_NOTE'		=> ' Örnek: http://www.gamespot.com/video/944074/6185798/tom-clancys-rainbow-six-vegas-2-official-trailer-3',
	'ABBC3_GAMESPOT_VIEW'		=> '<embed id="mymovie" width="200" height="100" flashvars="paramsURI=http%3A%2F%2Fwww%2Egamespot%2Ecom%2Fpages%2Fvideo%5Fplayer%2Fproteus%5Fxml%2Ephp%3Fadseg%3D%26adgrp%3D%26sid%3D6185798%26pid%3D944074%26mb%3D%26onid%3D%26nc%3D1202626246593%26embedded%3D1%26showWatermark%3D0%26autoPlay%3D0" allowfullscreen="true" allowscriptaccess="never" quality="high" name="mymovie" src="http://image.com.com/gamespot/images/cne_flash/production/media_player/proteus/gs/proteus_embed.swf" type="application/x-shockwave-flash"/>',
	// MOD : add-on Gamespot bbcode - END

	// MOD : add-on Gametrailers bbcode - START
	// [gametrailers] Gametrailers video URL [gametrailers] Code..
	'ABBC3_GAMETRAILERS_MOVER'	=> 'Gametrailers sitesinden video ekle',
	'ABBC3_GAMETRAILERS_TIP'	=> ' [gametrailers]Video dosyasının adresi[/gametrailers]',
	'ABBC3_GAMETRAILERS_NOTE'	=> ' Example : http://www.gametrailers.com/player/30461.html',
	'ABBC3_GAMETRAILERS_VIEW'	=> '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"  codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" id="gtembed" width="200" height="100"><param name="allowScriptAccess" value="never" /><param name="allowFullScreen" value="true" /><param name="movie" value="http://www.gametrailers.com/remote_wrap.php?mid=30461" /><param name="quality" value="high" /><embed src="http://www.gametrailers.com/remote_wrap.php?mid=30461" swLiveConnect="true" name="gtembed" align="middle" allowScriptAccess="never" allowFullScreen="true" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="200" height="100"></embed></object>',
	// MOD : add-on Gamespot bbcode - END

	// MOD : add-on IGN video bbcode - START
	// [ignvideo] ING video URL [ignvideo] Code..
	'ABBC3_IGNVIDEO_MOVER'		=> 'Ign sitesinden video ekle',
	'ABBC3_IGNVIDEO_TIP'		=> ' [ignvideo]ING video URL[/ignvideo]',
	'ABBC3_IGNVIDEO_NOTE'		=> ' Örnek: object_ID=967025&downloadURL=http://tvmovies.ign.com/tv/video/article/850/850894/knightrider_trailer_020808_flvlow.flv',
	'ABBC3_IGNVIDEO_VIEW'		=> 	'<embed src="http://videomedia.ign.com/ev/ev.swf" flashvars="object_ID=967025&downloadURL=http://tvmovies.ign.com/tv/video/article/850/850894/knightrider_trailer_020808_flvlow.flv" type="application/x-shockwave-flash" width="200" height="100" ></embed>',
	// MOD : add-on IGN video bbcode - END

	// MOD : add-on liveleak bbcode - START
	// [liveleak] Liveleak video URL [liveleak] Code..
	'ABBC3_LIVELEAK_MOVER'		=> 'Liveleak sitesinden video ekle',
	'ABBC3_LIVELEAK_TIP'		=> ' [liveleak]Video dosyasının adresi[/liveleak]',
	'ABBC3_LIVELEAK_NOTE'		=> ' Örnek: http://www.liveleak.com/view?i=413_1202590393',
	'ABBC3_LIVELEAK_VIEW'		=> '<object type="application/x-shockwave-flash" width="200" height="100" wmode="transparent" data="http://www.liveleak.com/player.swf?autostart=false&token=i=413_1202590393"><param name="movie" value="http://www.liveleak.com/player.swf?autostart=false&token=$1" /><param name="wmode" value="transparent" /><param name="quality" value="high" /></object>',
	// MOD : add-on liveleak bbcode - End

	// MOD : add-on NFO bbcode - START
	// [nfo]NFO text[/nfo] Code..
	'ABBC3_NFO_MOVER'			=> 'NFO belgesi (Internet Exploler\'da daha iyi)',
	'ABBC3_NFO_TIP'				=> ' [nfo]NFO belgesi[/nfo]',
	'ABBC3_NFO_VIEW'			=> '<table cellspacing="0" cellpadding="0" border="0" ><tr><td><span class="genmed"><b>NFO:</b></span></td></tr><tr><td class="nfo">' . str_replace(" ", "&nbsp;", '    � ���� �۱��                                  ���������������������  �   �� ���') . '</td></tr></table>',
	// MOD : add-on NFO bbcode - End

	// MOD : add-on glow bbcode - START
	// [glow=color]Text[/glow] Code..
	'ABBC3_GLOW_MOVER'			=> 'Kızarık metin (Sadece Internet Exploler)',
	'ABBC3_GLOW_TIP'			=> ' [glow=(color)]metin[/glow]',
	'ABBC3_GLOW_VIEW'			=> '<div style="filter:Glow(color=red,strength=4);color:#ffffff;height:110%">Bu basit bir metindir</div>',
	// MOD : add-on glow bbcode - END

	// MOD : add-on shadow bbcode - START
	// [shadow=(color)]text[/shadow] Code..
	'ABBC3_SHADOW_MOVER'		=> 'Gölgeli metin (Sadece Internet Exploler)',
	'ABBC3_SHADOW_TIP'			=> ' [shadow=(color)]metin[/shadow]',
	'ABBC3_SHADOW_VIEW'			=> '<div style="filter:shadow(color=black,strength=4);color:blue;height:110%">Bu basit bir metindir</div>',
	// MOD : add-on shadow bbcode - End

	// MOD : add-on dropshadow bbcode - START
	// [dropshadow=(color)]text[/dropshadow] Code..
	'ABBC3_DROPSHADOW_MOVER'	=> 'Dropshadow metin (Sadece Internet Exploler)',
	'ABBC3_DROPSHADOW_TIP'		=> ' [dropshadow=(color)]metin[/dropshadow]',
	'ABBC3_DROPSHADOW_VIEW'		=> '<div style="filter:dropshadow(color=#999999,strength=4);color:blue;height:110%">Bu basit bir metindir</div>',
	// MOD : add-on dropshadow bbcode - End

	// MOD : add-on Blur bbcode - START
	// [blur=(color)]text[/blur] Code..
	'ABBC3_BLUR_MOVER'			=> 'Bulanık metin (Sadece Internet Exploler)',
	'ABBC3_BLUR_TIP'			=> ' [blur=(color)]metin[/blur]',
	'ABBC3_BLUR_VIEW'			=> '<div style="filter:Blur(strength=7);color:blue;height:110%">Bu basit bir metindir</div>',
	// MOD : add-on Blur bbcode - End

	// MOD : add-on Wave bbcode - START
	// [wave=(color)]text[/wave] Code
	'ABBC3_WAVE_MOVER'			=> 'Dalgalı metin (Sadece Internet Exploler)',
	'ABBC3_WAVE_TIP'			=> ' [wave=(color)]metin[/wave]',
	'ABBC3_WAVE_VIEW'			=> '<div style="filter:Wave(strength=2);color:blue;height:110%">Bu basit bir metindir</div>',
	// MOD : add-on Wave bbcode - End

	// MOD : add-on Search bbcode - START
	// [search(=(msn|yahoo|google))]text[/search] Code..
	'ABBC3_SEARCH_MOVER'		=> 'Aranacak kelimeyi giriniz',
	'ABBC3_SEARCH_TIP'			=> ' [search(=(msn|yahoo|google))]metin[/search]',
	'ABBC3_SEARCH_VIEW'			=> $lang['SEARCH_MINI'] . ' ' . $config['sitename'] . ' : <a href="search.php?keywords=Advanced BBcode box 3">"Advanced BBcode box 3"</a><br/><br/>' . $lang['SEARCH_MINI'] . ' msn :  <a href="http://search.live.com/results.aspx?q=Advanced BBcode box 3&mkt=tr-TR&lf=1" target="_blank">"Advanced BBcode box 3"</a><br/><br/>' .$lang['SEARCH_MINI'] . ' yahoo :  <a href="http://search.yahoo.com/search?p=Advanced BBcode box 3" target="_blank">"Advanced BBcode box 3"</a><br/><br/>' . $lang['SEARCH_MINI'] . ' google : <a href="http://www.google.com.tr/search?q=Advanced BBcode box 3" target="_blank">"Advanced BBcode box 3"</a>',
	// MOD : add-on Search bbcode - End


));

?>