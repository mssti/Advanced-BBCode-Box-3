<?php
/** 
*
* abbcode [Dutch]
* @package language
* @version $Id: abbcode.php, v 1.0.7b 2008/02/20 18:05:07 leviatan21 Exp $
* @English version $Id: $ phpBB 3.0.0 - 1.0.7
* @copyright leviatan21 < info@mssti.com > (Gabriel) http://www.mssti.com/phpbb3/
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
* @translator: pavabe - http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=158257
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
// equally where a string contains only two placeholders which are used to wrap tekst
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
* È - √©
* Ë - √®
* Í - √™
* Î - √´
* ‡ - √
* ‚ - √¢
* ‰ - √§
* Ó - √Æ
* Ô - √Ø
* Ú - √≤
* Ù - √¥
* ˘ - √π
* ˚ - √ª
* Á - √ß
* · = √°
* ¡ = √  XX
* È = √©
* … = √â XX
* Ì = √≠
* Õ = √?
* Û = √≥
* ” = √ì
* ˙ = √∫
* ⁄ = √ö
* Ò = √±
* — = √ë
* ? = ¬ø
********************************************************************/

$lang = array_merge($lang, array(
	'BBCODE_STYLES_TIP'			=> 'Tip: Op de geselecteerde tekst kun je de stijl snel veranderen.',
	
	// Help
	'ABBC3_HELP_TITLE'			=> 'Advanced BBCode box 3 :: Help Pagina',
	'ABBC3_HELP_CUSTOM_TITLE'	=> 'Advanced BBCode box 3 :: Gebruikers BBCode Help Pagina',
	'ABBC3_HELP_DESC'			=> 'Omschrijving',
	'ABBC3_HELP_WRITE'			=> 'Jouw schrijf formaat',
	'ABBC3_HELP_VIEW'			=> 'Ons show formaat',
	'ABBC3_HELP_ABOUT'			=> 'Advanced BBCode Box 3 by <a href="http://www.mssti.com/phpbb3">mssti</a>',
	
	// Dropdown titles options
	'ABBC3_FONTTYPE_MOVER'		=> 'Letter type',
	'ABBC3_FONTTYPE_TIP'		=> ' [font=Comic Sans MS]tekst[/font]',
	'ABBC3_FONTTYPE_VIEW'		=> '<span style="font-family:Comic Sans MS">Dit is een voorbeeld tekst</span>',
	
	'ABBC3_FONT_GIANT'			=> 'Heel groot',
	
	'ABBC3_FONTCOLOR_MOVER'		=> 'Letter kleur',
	'ABBC3_FONTCOLOR_TIP'		=> ' [color=red]tekst[/color] Tip: Je kan ook html kleur codes gebruiken (color=#FF0000 of color=red)',
	'ABBC3_FONTCOLOR_VIEW'		=> '<span style="color:red">Dit is een voorbeeld tekst</span>',
	
	'ABBC3_FONTSIZE_MOVER'		=> 'Letter grote',
	'ABBC3_FONTSIZE_TIP'		=> ' [size=150]tekst groot[/size] Tip: De invoer is in percentage',
	'ABBC3_FONTSIZE_VIEW'		=> '<span style="font-size: 150%; line-height: 116%;">Dit is een voorbeeld tekst</span>',
	
	'ABBC3_FONTHILI_MOVER'		=> 'tekst gemarkeerd',
	'ABBC3_FONTHILI_TIP'		=> ' [highlight=yellow]tekst[/highlight] Tip: Je kan ook html kleur codes gebruiken color=#FF0000 of color=red)',
	'ABBC3_FONTHILI_VIEW'		=> '<span style="background-color: yellow;">Dit is een voorbeeld tekst</span>',
	
	// text to be applied to the helpline & mouseover & help page
	'ABBC3_JUSTIFY_MOVER'		=> 'tekst uitgelijnd',
	'ABBC3_JUSTIFY_TIP'			=> ' [align=justify]tekst[/align]',
	'ABBC3_JUSTIFY_VIEW'		=> '<div style="tekst-align:justify">Dit is een voorbeeld tekst</div>',
	
	'ABBC3_RIGHT_MOVER'			=> 'tekst rechts uitgelijnd',
	'ABBC3_RIGHT_TIP'			=> ' [align=right]tekst[/align]',
	'ABBC3_RIGHT_VIEW'			=> '<div style="tekst-align:right">Dit is een voorbeeld tekst</div>',
	
	'ABBC3_CENTER_MOVER'		=> 'tekst uitgelijnd in het midden',
	'ABBC3_CENTER_TIP'			=> ' [align=center]tekst[/align]',
	'ABBC3_CENTER_VIEW'			=> '<div style="tekst-align:center">Dit is een voorbeeld tekst</div>',
	
	'ABBC3_LEFT_MOVER'			=> 'tekst links uitgelijnd',
	'ABBC3_LEFT_TIP'			=> ' [align=left]tekst[/align]',
	'ABBC3_LEFT_VIEW'			=> '<div style="tekst-left:justify">Dit is een voorbeeld tekst</div>',
	
	'ABBC3_PRE_MOVER'			=> 'tekst vooraf opgemaakt',
	'ABBC3_PRE_TIP'				=> ' [pre]tekst[/pre]',
	'ABBC3_PRE_VIEW'			=> '<pre>Dit is een voorbeeld tekst</pre>',
	
	'ABBC3_SUP_MOVER'			=> 'Zet de tekst als superscripts',
	'ABBC3_SUP_TIP'				=> ' [sup]tekst[/sup]',
	'ABBC3_SUP_VIEW'			=> '<sup>Dit is een voorbeeld tekst</sup>',
	
	'ABBC3_SUB_MOVER'			=> 'Zet de tekst als subscripts',
	'ABBC3_SUB_TIP'				=> ' [sub]tekst[/sub]',
	'ABBC3_SUB_VIEW'			=> '<sub>Dit is een voorbeeld tekst</sub>',
	
	'ABBC3_BOLD_MOVER'			=> 'Vette tekst',
	'ABBC3_BOLD_TIP'			=> ' [b]tekst[/b]',
	'ABBC3_BOLD_VIEW'			=> '<strong>Dit is een voorbeeld tekst</strong>',
	
	'ABBC3_ITALIC_MOVER'		=> 'Cursieve tekst',
	'ABBC3_ITALIC_TIP'			=> ' [i]tekst[/i]',
	'ABBC3_ITALIC_VIEW'			=> '<em>Dit is een voorbeeld tekst</em>',
	
	'ABBC3_UNDERLINE_MOVER'		=> 'Onderstreepte tekst',
	'ABBC3_UNDERLINE_TIP'		=> ' [u]tekst[/u]',
	'ABBC3_UNDERLINE_VIEW'		=> '<span style="tekst-decoration: underline">Dit is een voorbeeld tekst</span>',
	
	'ABBC3_STRIKE_MOVER'		=> 'Doorstreepte tekst',
	'ABBC3_STRIKE_TIP'			=> ' [s]tekst[/s]',
	'ABBC3_STRIKE_VIEW'			=> '<strike>Dit is een voorbeeld tekst</strike>',
	
	'ABBC3_FADE_MOVER'			=> 'tekst fadein fadeout',
	'ABBC3_FADE_TIP'			=> ' [fade]tekst[/fade]',
	'ABBC3_FADE_VIEW'			=> '<span class="fade_link">Dit is een voorbeeld tekst</span> <script type="tekst/javascript">fade_ontimer()</script>',
	
	'ABBC3_GRAD_MOVER'			=> 'Tekst gradi√´nt',
	'ABBC3_GRAD_TIP'            => '',
	'ABBC3_GRAD_VIEW'			=> '<span style="color: #FF0000">D</span><span style="color: #F5000A">i</span><span style="color: #EB0014">t</span> <span style="color: #D60029">i</span><span style="color: #CC0033">s</span> <span style="color: #B80047">e</span><span style="color: #AD0052">e</span><span style="color: #A3005C">n</span> <span style="color: #8F0070">v</span><span style="color: #85007A">o</span><span style="color: #7A0085">o</span><span style="color: #70008F">r</span><span style="color: #660099">b</span><span style="color: #5C00A3">e</span><span style="color: #5200AD">e</span><span style="color: #4700B8">l</span><span style="color: #3D00C2">d</span> <span style="color: #2900D6">t</span><span style="color: #1F00E0">e</span><span style="color: #1400EB">k</span><span style="color: #0A00F5">s</span><span style="color: #0000FF">t</span>',
	
	'ABBC3_RTL_MOVER'			=> 'Tekst letters van rechts naar links',
	'ABBC3_RTL_TIP'				=> ' [dir=rtl]tekst[/dir]',
	'ABBC3_RTL_VIEW'			=> '<BDO dir="rtl">Dit is een voorbeeld tekst</BDO>',
	
	'ABBC3_LTR_MOVER'			=> 'Tekst letters van links naar rechts',
	'ABBC3_LTR_TIP'				=> ' [dir=ltr]tekst[/dir]',
	'ABBC3_LTR_VIEW'			=> '<BDO dir="ltr">Dit is een voorbeeld tekst</BDO>',
	
	'ABBC3_MARQD_MOVER'			=> 'Tekst beweegt van boven naar beneden',
	'ABBC3_MARQD_TIP'			=> ' [marq=down]tekst[/marq]',
	'ABBC3_MARQD_VIEW'			=> '<marquee direction="down" scrolldelay="120">Dit is een voorbeeld tekst</marquee>',
	
	'ABBC3_MARQU_MOVER'			=> 'Tekst beweegt van onder naar boven',
	'ABBC3_MARQU_TIP'			=> ' [marq=up]tekst[/marq]',
	'ABBC3_MARQU_VIEW'			=> '<marquee direction="up" scrolldelay="120">Dit is een voorbeeld tekst</marquee>',
	
	'ABBC3_MARQR_MOVER'			=> 'Tekst beweegt van links naar rechts',
	'ABBC3_MARQR_TIP'			=> ' [marq=right]tekst[/marq]',
	'ABBC3_MARQR_VIEW'			=> '<marquee direction="right" scrolldelay="120">Dit is een voorbeeld tekst</marquee>',
	
	'ABBC3_MARQL_MOVER'			=> 'Tekst beweegt van rechts naar links',
	'ABBC3_MARQL_TIP'			=> ' [marq=left]tekst[/marq]',
	'ABBC3_MARQL_VIEW'			=> '<marquee direction="left" scrolldelay="120">Dit is een voorbeeld tekst</marquee>',
	
	'ABBC3_TABLE_MOVER'			=> 'Voeg een tabel in',
	'ABBC3_TABLE_TIP'			=> ' [table=(ccs style)][tr=(ccs style)][td=(ccs style)]tekst[/td][/tr][/table]',
	'ABBC3_TABLE_VIEW'			=> '<table style="width:50%;border:1px solid #cccccc;" cellspacing="0" cellpadding="0"><tr style="tekst-align:center;"><td style="border:1px solid #cccccc;">Dit is een voorbeeld tekst</td></tr></table>',

	'ABBC3_QUOTE_MOVER'			=> 'Citeer tekst',
	'ABBC3_QUOTE_TIP'			=> ' [quote]tekst[/quote] of [quote=\"member\"]tekst[/quote]',
	'ABBC3_QUOTE_VIEW'			=> '<blockquote><div><cite>member '. $lang['WROTE'] .':</cite>Dit is een voorbeeld tekst</div></blockquote>',
	
	'ABBC3_CODE_MOVER'			=> 'Code weergave',
	'ABBC3_CODE_TIP'			=> ' [code]tekst[/code]',
	'ABBC3_CODE_VIEW'			=> '<dl class="codebox"><dt>'. $lang['CODE'] .': <a href="#" onclick="selectCode(this); return false;">'. $lang['SELECT_ALL_CODE'] .'</a></dt><dd><code>Dit is een voorbeeld tekst</code></dd></dl>',
	
	'ABBC3_SPOIL_MOVER'			=> 'Spoiler tekst',
	'ABBC3_SPOIL_TIP'			=> ' [spoil]tekst[/spoil]',
	'ABBC3_SPOIL_VIEW'			=> '<div class="spoilwrapper"><div class="spoiltitle"><input class="btnspoil" type="button" value="Toon Spoiler" onClick="javascript&#058;if (this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display != \'\') { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'\'; this.innertekst = \'\'; this.value = \'Verberg Spoiler\'; } else { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'none\'; this.innertekst = \'\'; this.value = \'Toon Spoiler\'; }" onfocus="this.blur();"></div><div class="spoilcontent"><div style="display: none;">Dit is een voorbeeld tekst</div></div></div>',
	
	'ABBC3_ED2K_MOVER'			=> 'Link eD2K',
	'ABBC3_ED2K_TIP'			=> ' [url]link ed2k[/url] of [url=link ed2k]Naam ed2k[/url]',
	'ABBC3_ED2K_VIEW'			=> '<a href="ed2k://|file|Robin.Hood.S02E01.Sisterhood.HDTV.XviD-BiA.avi|367335424|6EB031138DE4A80997A13C272760202F|h=CJZXHKH25ZONIMWVUOENVQKJSZDV5JI6|/" class="postlink">Robin.Hood.S02E01.Sisterhood.HDTV.XviD-BiA.avi</a>',
	
	'ABBC3_URL_MOVER'			=> 'Web adres',
	'ABBC3_URL_TIP'				=> ' [url]http://...[/url] of [url=http://...]Naam Web[/url]',
	'ABBC3_URL_VIEW'			=> '<a href="http://www.google.com" class="postlink">Google</a>',
	
	'ABBC3_EMAIL_MOVER'			=> 'Email',
	'ABBC3_EMAIL_TIP'			=> ' [email]gebruiker@server.ext[/email] of [email=gebruiker@server.ext]Mijn email[/email]',
	'ABBC3_EMAIL_VIEW'			=> '<a href="mailto:user@server.ext">gebruiker@server.ext</a>',
	
	'ABBC3_WEB_MOVER'			=> 'Voeg een website toe in het bericht',
	'ABBC3_WEB_TIP'				=> ' [web width=200 height=100 ]URL web[/web]',
	'ABBC3_WEB_VIEW'			=> '<iframe width="100%" height="100" src="http://www.google.com" style="font-size: 2px;"></iframe><br/>',
	
	'ABBC3_IMG_MOVER'			=> 'Voeg een afbeelding toe',
	'ABBC3_IMG_TIP'				=> ' [img=(left|center|right)]http://...[/img]',
	'ABBC3_IMG_VIEW'			=> '<div align="center"><img src="http://www.google.com/intl/en_com/images/logo_plain.png" /></div>',
	
	'ABBC3_THUMB_MOVER'			=> 'Voeg een thumbnail toe',
	'ABBC3_THUMB_TIP'			=> ' [thumbnail(=left|right)]http://...[/thumbnail]',
	'ABBC3_THUMB_VIEW'			=> '<a href="http://www.google.com/intl/en_com/images/logo_plain.png" rel="lightbox[]" alt="http://www.google.com/intl/en_com/images/logo_plain.png" title="" class="hoverbox"><img src="http://www.google.com/intl/en_com/images/logo_plain.png" border="0" width="100px" align="right"/></a>',
	
	'ABBC3_IMGSHACK_MOVER'		=> 'Voeg een afbeelding toe via imageshack',
	'ABBC3_IMGSHACK_TIP'		=> ' [url=http://imageshack.us][img=http://...][/img][/url]',
	'ABBC3_IMGSHACK_VIEW'		=> '<a href="http://img207.imageshack.us/my.php?image=advancedbbcodebox3prosidd3.gif" class="postlink"><img src="http://img207.imageshack.us/img207/1773/advancedbbcodebox3prosidd3.th.gif" alt="Image" /></a>',
	
	'ABBC3_FLASH_MOVER'			=> 'Voeg een flash bestand toe',
	'ABBC3_FLASH_TIP'			=> ' [flash width=# height=#]URL flash[/flash]',
	'ABBC3_FLASH_VIEW'			=> '<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0" width="200" height="100"><param name="movie" value="http://www.adobe.com/support/flash/ts/documents/test_version/version.swf" /><param name="play" value="true" /><param name="loop" value="true" /><param name="quality" value="high" /><param name="allowScriptAccess" value="never" /><param name="allowNetworking" value="internal" /><embed src="http://www.adobe.com/support/flash/ts/documents/test_version/version.swf" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" width="200" height="100" play="true" loop="true" quality="high" allowscriptaccess="never" allownetworking="internal"></embed></object>',
	
	'ABBC3_VIDEO_MOVER'			=> 'Voeg een video toe',
	'ABBC3_VIDEO_TIP'			=> ' [video width=# height=#]URL video[/video]',
	'ABBC3_VIDEO_VIEW'			=> '<object width="200" height="100" classid="CLSID:6BF52A52-394A-11d3-B153-00C04F79FAA6" id="wmstream_"><param name="url" value="$3" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /><param name="src" value="$3" /><!--[if !IE]>--><object width="200" height="100" type="video/x-ms-wmv" data="$3"><param name="src" value="$3" /><param name="controller" value="1" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /></object><!--<![endif]--></object>',
	
	'ABBC3_STREAM_MOVER'		=> 'Voeg geluid toe',
	'ABBC3_STREAM_TIP'			=> ' [stream]URL stream[/stream]',
	'ABBC3_STREAM_VIEW'			=> '<object width="200" height="45" classid="CLSID:6BF52A52-394A-11d3-B153-00C04F79FAA6" id="wmstream_"><param name="url" value="$1" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /><param name="src" value="$1" /><!--[if !IE]>--><object width="200" height="45" type="video/x-ms-wmv" data="$1"><param name="src" value="$1" /><param name="controller" value="1" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /></object><!--<![endif]--></object>',
	
	'ABBC3_RAM_MOVER'			=> 'Voeg een Real Media toe',
	'ABBC3_RAM_TIP'				=> ' [ram]URL Real Media[/ram]',
	'ABBC3_RAM_VIEW'			=> '<object id="rmstream_" classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" width="200" height="100"><param name="src" value="$3" /><param name="autostart" value="false" /><param name="controls" value="ImageWindow" /><param name="console" value="ctrls_" /><param name="prefetch" value="false" /><embed name="rmstream_" type="audio/x-pn-realaudio-plugin" src="$3" width="200" height="100" autostart="false" controls="ImageWindow" console="ctrls_" prefetch="false"></embed></object><br /><object id="ctrls_" classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" width="200" height="36"><param name="controls" value="ControlPanel" /><param name="console" value="ctrls_{_file.ATTACH_ID}" /><embed name="ctrls_" type="audio/x-pn-realaudio-plugin" width="200" height="36" controls="ControlPanel" console="ctrls_"></embed></object>',
	
	'ABBC3_QUICKTIME_MOVER'		=> 'Voeg een Quick time toe',
	'ABBC3_QUICKTIME_TIP'		=> ' [quicktime width=# height=#]URL Quick time[/quicktime]',
	'ABBC3_QUICKTIME_VIEW'		=> '<object id="qtstream_" classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab#version=6,0,2,0" width="200" height="100"><param name="src" value="http://www.nature.com/neuro/journal/v3/n3/extref/Li_control.mov.qt" /><param name="controller" value="true" /><param name="autoplay" value="false" /><param name="type" value="video/quicktime" /><embed name="qtstream_" src="http://www.nature.com/neuro/journal/v3/n3/extref/Li_control.mov.qt" pluginspage="http://www.apple.com/quicktime/download/" enablejavascript="true" controller="true" width="200" height="100" type="video/quicktime" autoplay="false"></embed></object>',
	
	'ABBC3_STAGE6_MOVER'		=> 'Voeg een video van Stage6 toe', // from http://www.stage6.com/
	'ABBC3_STAGE6_TIP'			=> ' [stage6]Stage6 ID[/stage6]',
	'ABBC3_STAGE6_VIEW'			=> '<object  classid="clsid:67DABFBF-D0AB-41fa-9C46-CC0F21721616" codebase="http://download.divx.com/player/DivXBrowserPlugin.cab" width="200" height="100" ><param name="src" value="http://video.stage6.com/2068715/.divx" /><param name="autoplay" value="false" /><param name="custommode" value="Stage6" /><param name="showpostplaybackad" value="false" /><embed type="video/divx" src="http://video.stage6.com/2068715/.divx" pluginspage="http://go.divx.com/plugin/download/" showpostplaybackad="false" custommode="Stage6" autoplay="false" width="200" height="100" /></object><br />',
	
	'ABBC3_GVIDEO_MOVER'		=> 'Voeg een video van Google toe',
	'ABBC3_GVIDEO_TIP'			=> ' [GVideo]URL video[/GVideo]',
	'ABBC3_GVIDEO_VIEW'			=> '<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0" width="200" height="100"><param name="movie" value="http://video.google.com/googleplayer.swf?docid=-8351924403384451128" /><param name="play" value="false" /><param name="loop" value="false" /><param name="quality" value="high" /><param name="allowScriptAccess" value="never" /><param name="allowNetworking" value="internal" /><embed src="http://video.google.com/googleplayer.swf?docid=-8351924403384451128" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" width="200" height="100" play="false" loop="false" quality="high" allowscriptaccess="never" allownetworking="internal"></embed></object>',
	
	'ABBC3_YOUTUBE_MOVER'		=> 'Voeg een video van Youtube toe',
	'ABBC3_YOUTUBE_TIP'			=> ' [youtube]URL video[/youtube]',
	'ABBC3_YOUTUBE_VIEW'		=> '<object width="200" height="100"><param name="movie" value="http://www.youtube.com/v/TA4hm97m494" /><param name="wmode" value="transparent" /><embed src="http://www.youtube.com/v/TA4hm97m494" type="application/x-shockwave-flash" wmode="transparent" width="200" height="100"></embed></object>',
	
	'ABBC3_LISTB_MOVER'			=> 'Lijst punt',
	'ABBC3_LISTB_TIP'			=> ' [list]tekst[/list] Tip: Gebruik [*] om dots te cre√´ren',
	'ABBC3_LISTB_VIEW'			=> '<ul><li>Item1</li><li>Item2</li><li>Item3</li></ul>',
	
	'ABBC3_LISTO_MOVER'			=> 'Geordende lijst',
	'ABBC3_LISTO_TIP'			=> ' [list=1|a]tekst[/list] Tip: Gebruik [*] om dots te cre√´ren',
	'ABBC3_LISTO_VIEW'			=> '<ol style="list-style-type: lower-alpha"><li>Item1</li><li>Item2</li><li>Item3</li></ol>',
	
	'ABBC3_HR_MOVER'			=> 'Lijn',
	'ABBC3_HR_TIP'				=> ' [hr] Tip: Cre√´ert een lijn over de breedte',
	'ABBC3_HR_VIEW'				=> '<hr noshade color="#000000" size="1px">',
	
	'ABBC3_CUT_MOVER'			=> 'Verwijderd de geselecteerde tekst',
	'ABBC3_COPY_MOVER'			=> 'Kopieert de geselecteerde tekst',
	'ABBC3_PASTE_MOVER'			=> 'Plak de gekopieerde tekst',
	'ABBC3_PLAIN_MOVER'			=> 'Verwijder de BBCodes van de geselecteerde tekst',
	'ABBC3_PASTE_ERROR'			=> 'Eerst de tekst kopieren, dan pas plakken ',
	'ABBC3_NOSELECT_ERROR'		=> 'Eerst de tekst selecteren ',
	
	// Wizard teksts
	'ABBC3_ERROR'				=> 'Fout : ',
	'ABBC3_ERROR_TAG'			=> 'Onverwachte fout bij het gebruik van de markering : ',
	
	'ABBC3_ID'					=> 'Voer een herkenningsteken in :',
	'ABBC3_NOID'				=> 'Je hebt geen herkenningsteken ingevoerd',
	'ABBC3_LINK'				=> 'Voer een link in voor ',
	'ABBC3_DESC'				=> 'Voer een omschrijving in voor ',
	'ABBC3_NAME'				=> 'Omschrijving',
	'ABBC3_NOLINK'				=> 'Je hebt geen link ingevoerd voor ',
	'ABBC3_NODESC'				=> 'Je hebt geen omschrijving ingevoerd voor ',
	'ABBC3_WIDTH'				=> 'Voer de breedte in',
	'ABBC3_WIDTH_NOTE'			=> 'Tip: De invoer kan als percentage worden ingevoerd',
	'ABBC3_NOWIDTH'				=> 'Je hebt geen breedte ingevoerd',
	'ABBC3_HEIGHT'				=> 'Voer de hoogte in',
	'ABBC3_HEIGHT_NOTE'			=> 'Tip: De invoer kan als percentage worden ingevoerd',
	'ABBC3_NOHEIGHT'			=> 'Je hebt geen hoogte ingevoerd',
	
	'ABBC3_ED2K_TAG'			=> 'ed2k',
	'ABBC3_ED2K_NOTE'			=> '', //'Voorbeeld: ed2k://|file|Robin.Hood.S02E01.Sisterhood.HDTV.XviD-BiA.avi|367335424|6EB031138DE4A80997A13C272760202F|h=CJZXHKH25ZONIMWVUOENVQKJSZDV5JI6|/',
	'ABBC3_ED2K_ADD'			=> 'Voeg geselecteerde links aan uw ed2k cli√´nt toe',
	
	'ABBC3_URL_TAG'				=> 'pagina',
	'ABBC3_URL_NOTE'			=> 'Voorbeeld: http://www.google.com',
	
	'ABBC3_WEB_TAG'				=> 'web',
	'ABBC3_WEB_NOTE'			=> 'Voorbeeld: http://www.google.com',
	
	'ABBC3_EMAIL_TAG'			=> 'email',
	'ABBC3_EMAIL_NOTE'			=> 'Voorbeeld: gebruiker@server.ext',
	
	'ABBC3_IMG_TAG'				=> 'afbeelind',
	'ABBC3_IMG_NOTE'			=> 'Voorbeeld: http://www.google.com/intl/en_com/images/logo_plain.png',
	
	'ABBC3_THUMB_TAG'			=> 'thumbnail',
	'ABBC3_THUMB_NOTE'			=> 'Voorbeeld: http://www.google.com/intl/en_com/images/logo_plain.png',
	
	'ABBC3_FLASH_TAG'			=> 'flash',
	'ABBC3_FLASH_NOTE'			=> 'Voorbeeld: http://www.adobe.com/support/flash/ts/documents/test_version/version.swf',
	
	'ABBC3_VIDEO_TAG'			=> 'video',
	'ABBC3_VIDEO_NOTE'			=> '', //'Voorbeeld: ???',
	
	'ABBC3_STREAM_TAG'			=> 'geluid',
	'ABBC3_STREAM_NOTE'			=> '', //'Voorbeeld: ???',
	
	'ABBC3_RAM_TAG'				=> 'Real Media',
	'ABBC3_RAM_NOTE'			=> '', //'Voorbeeld: ???',
	
	'ABBC3_QUICKTIME_TAG'		=> 'Quick time',
	'ABBC3_QUICKTIME_NOTE'		=> 'Voorbeeld: http://www.nature.com/neuro/journal/v3/n3/extref/Li_control.mov.qt' . '<br/>' .'http://www.carnivalmidways.com/images/Music/thisisatest.mp3',

	'ABBC3_STAGE6_TAG'			=> 'Stage6 Video',
	'ABBC3_STAGE6_NOTE'			=> 'Voorbeeld: 2068715',
	
	'ABBC3_GVIDEO_TAG'			=> 'Google Video',
	'ABBC3_GVIDEO_NOTE'			=> 'Voorbeeld: http://video.google.com/videoplay?docid=-8351924403384451128',
	
	'ABBC3_YOUTUBE_TAG'			=> 'Youtube Video',
	'ABBC3_YOUTUBE_NOTE'		=> 'Voorbeeld: http://www.youtube.com/watch?v=TA4hm97m494',
	
	'ABBC3_TABLE_STYLE'			=> 'Voer de stijl in van de tabel',
	'ABBC3_TABLE_NOTE'			=> 'Voorbeeld: width:50%;border:1px solid #cccccc;',
	
	'ABBC3_ROW_NUMBER'			=> 'Voer het aantal rijen in',
	'ABBC3_ROW_ERROR'			=> 'Je hebt geen aantal rijen ingevoerd',
	'ABBC3_ROW_STYLE'			=> 'Voer de stijl in van de rijen',
	'ABBC3_ROW_NOTE'			=> 'Voorbeeld: text-align:center;',
	
	'ABBC3_CELL_NUMBER'			=> 'Voer het aantal cellen in',
	'ABBC3_CELL_ERROR'			=> 'Je hebt geen aantal cellen ingevoerd',
	'ABBC3_CELL_STYLE'			=> 'Voer de stijl in van de cellen',
	'ABBC3_CELL_NOTE'			=> 'Voorbeeld: border:1px solid #cccccc;',
	
	'ABBC3_GRAD_MIN_ERROR'		=> 'Eerst de tekst selecteren : ',
	'ABBC3_GRAD_MAX_ERROR'		=> 'Maximaal 120 of minder karakters toegestaan : ',
	
	'SPOILER_SHOW'				=> 'Toon Spoiler',
	'SPOILER_HIDE'				=> 'Verberg Spoiler',
	
	// Custom bbcodes

	// MOD : add-on hide bbcode - START
	// [hide]tekst[/hide] Code..
	'ABBC3_HIDE_MOVER'			=> 'Verberg bericht',
	'ABBC3_HIDE_TIP'			=> ' [hide]bericht[/hide]',
	'ABBC3_HIDE_VIEW'			=> '<dl class="hidebox"><dt class="hide">HIDE: AAN</dt><dd>Je moet een antwoord geven op dit bericht, voordat je het verborgen bericht kan lezen</dd></dl>',
	// MOD : add-on hide bbcode - END
	
	// MOD : add-on Dailymotion bbcode - START
	// [dm]Dailymotion ID[/dm] Code..
	'ABBC3_DMOTION_MOVER'		=> 'Voeg een video van dailymotion toe', // from http://www.dailymotion.com/
	'ABBC3_DMOTION_TIP'			=> ' [dm]Dailymotion ID[/dm]',
	'ABBC3_DMOTION_VIEW'		=> '<object width="200" height="100"><param name="movie" value="http://www.dailymotion.com/swf/x3hm7o" /><param name="allowFullScreen" value="true" /><param name="allowScriptAccess" value="never" /><embed src="http://www.dailymotion.com/swf/x3hm7o" type="application/x-shockwave-flash" width="200" height="100" allowFullScreen="true" allowScriptAccess="never"></embed></object>',
	// MOD : add-on Dailymotion bbcode - END
	
	// MOD : add-on Moderator bbcode - START
	// [mod=name]text[/mod] Code..
	'ABBC3_MODERATOR_MOVER'		=> 'Moderator bericht',
	'ABBC3_MODERATOR_TIP'		=> ' [mod=naam]tekst[/mod]',
	'ABBC3_MODERATOR_VIEW'		=> '<table id="ModTable" width="100%" cellspacing="5" cellpadding="0" border="0" align="center"><tr><td class="row1" rowspan="2" align="middle" vAlign="center" width="1%"><span class="exclamation" title="Moderator waarschuwing">&nbsp;!&nbsp;</span></td><td class="row2"><span class="genmed"><b>Mod Naam:</b></span></td></tr><tr><td>Dit is een voorbeeld tekst</td></tr></table>',
	// MOD : add-on Moderator bbcode - END
	
	// MOD : add-on Veoh bbcode - START
	// [veoh]URL video[/veoh] Code..
	'ABBC3_VEOH_MOVER'			=> 'Voeg een video van Veoh toe',
	'ABBC3_VEOH_TIP'			=> ' [veoh]URL video[/veoh].',
	'ABBC3_VEOH_TAG'			=> ' Veoh.',
	'ABBC3_VEOH_NOTE'			=> 'Voorbeeld: http://www.veoh.com/videos/v1409404EqT5SJjM.',
	'ABBC3_VEOH_VIEW'			=> '<embed src="http://www.veoh.com/videodetails2.swf?permalinkId=v1409404EqT5SJjM&id=anonymous&player=videodetailsembedded&videoAutoPlay=0" allowFullScreen="true" width="200" height="100" bgcolor="#000000" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>',
	// MOD : add-on Veoh bbcode - END
	
	// MOD : add-on offtopic bbcode - START
	// [offtopic]text[/offtopic] Code..
	'ABBC3_OFFTOPIC'			=> 'Offtopic',
	'ABBC3_OFFTOPIC_MOVER'		=> 'Voeg een Off topic tekst toe',
	'ABBC3_OFFTOPIC_TIP'		=> ' [offtopic]tekst[/offtopic]',
	'ABBC3_OFFTOPIC_VIEW'		=> '<i><b><font color="#114499">Offtopic: </font></b><br/><font color="#2277DD">Dit is een voorbeeld tekst</font></i>',
	// MOD : add-on offtopic bbcode - END
	
	// MOD : add-on Gamespot bbcode - START
	// [gamespot] Gamespot video URL [gamespot] Code..
	'ABBC3_GAMESPOT_MOVER'		=> 'Voeg een video van Gamespot toe',
	'ABBC3_GAMESPOT_TIP'		=> ' [gamespot]Gamespot video URL[gamespot]',
	'ABBC3_GAMESPOT_NOTE'		=> ' Voorbeeld : http://www.gamespot.com/video/944074/6185798/tom-clancys-rainbow-six-vegas-2-official-trailer-3',
	'ABBC3_GAMESPOT_VIEW'		=> '<embed id="mymovie" width="200" height="100" flashvars="paramsURI=http%3A%2F%2Fwww%2Egamespot%2Ecom%2Fpages%2Fvideo%5Fplayer%2Fproteus%5Fxml%2Ephp%3Fadseg%3D%26adgrp%3D%26sid%3D6185798%26pid%3D944074%26mb%3D%26onid%3D%26nc%3D1202626246593%26embedded%3D1%26showWatermark%3D0%26autoPlay%3D0" allowfullscreen="true" allowscriptaccess="never" quality="high" name="mymovie" src="http://image.com.com/gamespot/images/cne_flash/production/media_player/proteus/gs/proteus_embed.swf" type="application/x-shockwave-flash"/>',
	// MOD : add-on Gamespot bbcode - END
	
	// MOD : add-on Gametrailers bbcode - START
	// [gametrailers] Gametrailers video URL [gametrailers] Code..
	'ABBC3_GAMETRAILERS_MOVER'	=> 'Voeg een video van Gametrailers toe',
	'ABBC3_GAMETRAILERS_TIP'	=> ' [gametrailers]Gametrailers video URL[/gametrailers]',
	'ABBC3_GAMETRAILERS_NOTE'	=> ' Voorbeeld : http://www.gametrailers.com/player/30461.html',
	'ABBC3_GAMETRAILERS_VIEW'	=> '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"  codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" id="gtembed" width="200" height="100"><param name="allowScriptAccess" value="never" /><param name="allowFullScreen" value="true" /><param name="movie" value="http://www.gametrailers.com/remote_wrap.php?mid=30461" /><param name="quality" value="high" /><embed src="http://www.gametrailers.com/remote_wrap.php?mid=30461" swLiveConnect="true" name="gtembed" align="middle" allowScriptAccess="never" allowFullScreen="true" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="200" height="100"></embed></object>',
	// MOD : add-on Gamespot bbcode - END
	
	// MOD : add-on IGN video bbcode - START
	// [ignvideo] ING video URL [ignvideo] Code..
	'ABBC3_IGNVIDEO_MOVER'		=> 'Voeg een video van Ign toe',
	'ABBC3_IGNVIDEO_TIP'		=> ' [ignvideo]ING video URL[/ignvideo]',
	'ABBC3_IGNVIDEO_NOTE'		=> ' Voorbeeld: object_ID=967025&downloadURL=http://tvmovies.ign.com/tv/video/article/850/850894/knightrider_trailer_020808_flvlow.flv',
	'ABBC3_IGNVIDEO_VIEW'		=> '<embed src="http://videomedia.ign.com/ev/ev.swf" flashvars="object_ID=967025&downloadURL=http://tvmovies.ign.com/tv/video/article/850/850894/knightrider_trailer_020808_flvlow.flv" type="application/x-shockwave-flash" width="200" height="100" ></embed>',
	// MOD : add-on IGN video bbcode - END
	
	// MOD : add-on liveleak bbcode - START
	// [liveleak] Liveleak video URL [liveleak] Code..
	'ABBC3_LIVELEAK_MOVER'		=> 'Voeg een video van Liveleak toe',
	'ABBC3_LIVELEAK_TIP'		=> ' [liveleak]Liveleak video URL[/liveleak]',
	'ABBC3_LIVELEAK_NOTE'		=> ' Voorbeeld: http://www.liveleak.com/view?i=413_1202590393',
	'ABBC3_LIVELEAK_VIEW'		=> '<object type="application/x-shockwave-flash" width="200" height="100" wmode="transparent" data="http://www.liveleak.com/player.swf?autostart=false&token=i=413_1202590393"><param name="movie" value="http://www.liveleak.com/player.swf?autostart=false&token=$1" /><param name="wmode" value="transparent" /><param name="quality" value="high" /></object>',
	// MOD : add-on liveleak bbcode - End
	
	// MOD : add-on NFO bbcode - START
	// [nfo]NFO text[/nfo] Code..
	'ABBC3_NFO_MOVER'			=> 'NFO tekst (Beter met Internet explorer)',
	'ABBC3_NFO_TIP'				=> ' [nfo]NFO tekst[/nfo]',
	'ABBC3_NFO_VIEW'			=> '<table cellspacing="0" cellpadding="0" border="0" ><tr><td><span class="genmed"><b>NFO:</b></span></td></tr><tr><td class="nfo">' . str_replace(" ", "&nbsp;", '    ≤ €€€€ €€±±∞                                  ∞∞∞±±±±≤≤≤€€€€€€€€€€€  €   €€ €€€') . '</td></tr></table>',
	// MOD : add-on NFO bbcode - End
	
	// MOD : add-on glow bbcode - START
	// [glow=color]Text[/glow] Code..
	'ABBC3_GLOW_MOVER'			=> 'Gloed tekst (Alleen Internet explorer)',
	'ABBC3_GLOW_TIP'			=> ' [glow=(color)]tekst[/glow]',
	'ABBC3_GLOW_VIEW'			=> '<div style="filter:Glow(color=red,strength=4);color:#ffffff;height:110%">Dit is een voorbeeld tekst</div>',
	// MOD : add-on glow bbcode - END
	
	// MOD : add-on shadow bbcode - START
	// [shadow=(color)]text[/shadow] Code..
	'ABBC3_SHADOW_MOVER'		=> 'Schaduw tekst (Alleen Internet explorer)',
	'ABBC3_SHADOW_TIP'			=> ' [shadow=(color)]tekst[/shadow]',
	'ABBC3_SHADOW_VIEW'			=> '<div style="filter:shadow(color=black,strength=4);color:blue;height:110%">Dit is een voorbeeld tekst</div>',
	// MOD : add-on shadow bbcode - End
	
	// MOD : add-on dropshadow bbcode - START
	// [dropshadow=(color)]text[/dropshadow] Code..
	'ABBC3_DROPSHADOW_MOVER'	=> 'Lagere schaduw tekst (Alleen Internet explorer)',
	'ABBC3_DROPSHADOW_TIP'		=> ' [dropshadow=(color)]tekst[/dropshadow]',
	'ABBC3_DROPSHADOW_VIEW'		=> '<div style="filter:dropshadow(color=#999999,strength=4);color:blue;height:110%">Dit is een voorbeeld tekst</div>',
	// MOD : add-on dropshadow bbcode - End
	
	// MOD : add-on Blur bbcode - START
	// [blur=(color)]text[/blur] Code..
	'ABBC3_BLUR_MOVER'			=> 'Onduidelijke tekst (Only Internet explorer)',
	'ABBC3_BLUR_TIP'			=> ' [blur=(color)]tekst[/blur]',
	'ABBC3_BLUR_VIEW'			=> '<div style="filter:Blur(strength=7);color:blue;height:110%">Dit is een voorbeeld tekst</div>',
	// MOD : add-on Blur bbcode - End
	
	// MOD : add-on Wave bbcode - START
	// [wave=(color)]text[/wave] Code
	'ABBC3_WAVE_MOVER'			=> 'Golvende tekst (Only Internet explorer)',
	'ABBC3_WAVE_TIP'			=> ' [wave=(color)]tekst[/wave]',
	'ABBC3_WAVE_VIEW'			=> '<div style="filter:Wave(strength=2);color:blue;height:110%">Dit is een voorbeeld tekst</div>',
	// MOD : add-on Wave bbcode - End
	
	// MOD : add-on Search bbcode - START
	// [search(=(msn|yahoo|google))]text[/search] Code..
	'ABBC3_SEARCH_MOVER'		=> 'Geef een zoek woord',
	'ABBC3_SEARCH_TIP'			=> ' [search(=(msn|yahoo|google))]tekst[/search]',
	'ABBC3_SEARCH_VIEW'			=> $lang['SEARCH_MINI'] . ' ' . $config['sitename'] . ' : <a href="search.php?keywords=Advanced BBcode box 3">"Advanced BBcode box 3"</a><br/><br/>' . $lang['SEARCH_MINI'] . ' msn :  <a href="http://search.live.com/results.aspx?q=Advanced BBcode box 3&mkt=tr-TR&lf=1" target="_blank">"Advanced BBcode box 3"</a><br/><br/>' .$lang['SEARCH_MINI'] . ' yahoo :  <a href="http://search.yahoo.com/search?p=Advanced BBcode box 3" target="_blank">"Advanced BBcode box 3"</a><br/><br/>' . $lang['SEARCH_MINI'] . ' google : <a href="http://www.google.com.tr/search?q=Advanced BBcode box 3" target="_blank">"Advanced BBcode box 3"</a>',
	// MOD : add-on Search bbcode - End


));

?>