<?php
/** 
*
* abbcode [Spanish]
* @package language
* @version $Id: abbcode.php, v 1.0.7b 2008/02/21 02:05:07 leviatan21 Exp $
* @Spanish version $Id: $ phpBB 3.0.0 - 1.0.7b
* @copyright leviatan21 < info@mssti.com > (Gabriel) http://www.mssti.com/phpbb3/
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
* @translator: leviatan21 - http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=345763
*
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
	'BBCODE_STYLES_TIP'			=> 'Consejo: Pueden aplicarse estilos r√°pidamente al texto seleccionado.',
	
	// Help
	'ABBC3_HELP_TITLE'			=> 'Advanced BBCode box 3 :: P√°gina de ayuda',
	'ABBC3_HELP_CUSTOM_TITLE'	=> 'Advanced BBCode box 3 ::  BBCode personales, P√°gina de ayuda',
	'ABBC3_HELP_DESC'			=> 'Descripci√≥n',
	'ABBC3_HELP_WRITE'			=> 'Usted escribe',
	'ABBC3_HELP_VIEW'			=> 'Se muestra',
	'ABBC3_HELP_ABOUT'			=> 'Advanced BBCode Box 3 por <a href="http://www.mssti.com/phpbb3">mssti</a>',
	
	// Dropdown titles options
	'ABBC3_FONTTYPE_MOVER'		=> 'Tipo de fuente',
	'ABBC3_FONTTYPE_TIP'		=> ' [font=Comic Sans MS]texto[/font]',
	'ABBC3_FONTTYPE_VIEW'		=> '<span style="font-family:Comic Sans MS">Esto es una muestra de texto</span>',

	'ABBC3_FONT_GIANT'			=> 'Gigante',

	'ABBC3_FONTCOLOR_MOVER'		=> 'Color de texto',
	'ABBC3_FONTCOLOR_TIP'		=> ' [color=red]texto[/color] Nota: puede usar colores HTML (color=#FF0000 o color=red)',
	'ABBC3_FONTCOLOR_VIEW'		=> '<span style="color:red">Esto es una muestra de texto</span>',

	'ABBC3_FONTSIZE_MOVER'		=> 'Tama√±o de texto',
	'ABBC3_FONTSIZE_TIP'		=> ' [size=150]texto grande[/size] Nota: el valor debe ser expresado en porcentaje',
	'ABBC3_FONTSIZE_VIEW'		=> '<span style="font-size: 150%; line-height: 116%;">Esto es una muestra de texto</span>',

	'ABBC3_FONTHILI_MOVER'		=> 'Texto Resaltado',
	'ABBC3_FONTHILI_TIP'		=> ' [highlight=yellow]texto[/highlight] Nota: puede usar colores HTML (color=#FF0000 o color=red)',
	'ABBC3_FONTHILI_VIEW'		=> '<span style="background-color: yellow;">Esto es una muestra de texto</span>',

	// Text to be applied to the helpline & mouseover & help page
	'ABBC3_JUSTIFY_MOVER'		=> 'Texto justificado',
	'ABBC3_JUSTIFY_TIP'			=> ' [align=justify]texto[/align]',
	'ABBC3_JUSTIFY_VIEW'		=> '<div style="text-align:justify">Esto es una muestra de texto</div>',

	'ABBC3_RIGHT_MOVER'			=> 'Texto alineado a la derecha',
	'ABBC3_RIGHT_TIP'			=> ' [align=right]texto[/align]',
	'ABBC3_RIGHT_VIEW'			=> '<div style="text-align:right">Esto es una muestra de texto</div>',

	'ABBC3_CENTER_MOVER'		=> 'Texto alineado al centro',
	'ABBC3_CENTER_TIP'			=> ' [align=center]texto[/align]',
	'ABBC3_CENTER_VIEW'			=> '<div style="text-align:center">Esto es una muestra de texto</div>',

	'ABBC3_LEFT_MOVER'			=> 'Texto alineado a la izquierda',
	'ABBC3_LEFT_TIP'			=> ' [align=left]texto[/align]',
	'ABBC3_LEFT_VIEW'			=> '<div style="text-left:justify">Esto es una muestra de texto</div>',

	'ABBC3_PRE_MOVER'			=> 'Texto preformateado',
	'ABBC3_PRE_TIP'				=> ' [pre]texto[/pre]',
	'ABBC3_PRE_VIEW'			=> '<pre>Esto es una muestra de texto</pre>',

	'ABBC3_SUP_MOVER'			=> 'Texto super√≠ndice',
	'ABBC3_SUP_TIP'				=> ' [sup]texto[/sup]',
	'ABBC3_SUP_VIEW'			=> '<sup>Esto es una muestra de texto</sup>',

	'ABBC3_SUB_MOVER'			=> 'Texto sub√≠ndice',
	'ABBC3_SUB_TIP'				=> ' [sub]texto[/sub]',
	'ABBC3_SUB_VIEW'			=> '<sub>Esto es una muestra de texto</sub>',

	'ABBC3_BOLD_MOVER'			=> 'Texto en negrita',
	'ABBC3_BOLD_TIP'			=> ' [b]texto[/b]',
	'ABBC3_BOLD_VIEW'			=> '<strong>Esto es una muestra de texto</strong>',

	'ABBC3_ITALIC_MOVER'		=> 'Texto en it√°lica',
	'ABBC3_ITALIC_TIP'			=> ' [i]texto[/i]',
	'ABBC3_ITALIC_VIEW'			=> '<em>This is a sample text</em>',

	'ABBC3_UNDERLINE_MOVER'		=> 'Texto subrayado',
	'ABBC3_UNDERLINE_TIP'		=> ' [u]texto[/u]',
	'ABBC3_UNDERLINE_VIEW'		=> '<span style="text-decoration: underline">Esto es una muestra de texto</span>',

	'ABBC3_STRIKE_MOVER'		=> 'Texto tachado',
	'ABBC3_STRIKE_TIP'			=> ' [s]texto[/s]',
	'ABBC3_STRIKE_VIEW'			=> '<strike>Esto es una muestra de texto</strike>',

	'ABBC3_FADE_MOVER'			=> 'Texto descolorido',
	'ABBC3_FADE_TIP'			=> ' [fade]texto[/fade]',
	'ABBC3_FADE_VIEW'			=> '<span class="fade_link">Esto es una muestra de texto</span> <script type="text/javascript">fade_ontimer()</script>',

	'ABBC3_GRAD_MOVER'			=> 'Texto arcoiris',
	'ABBC3_GRAD_TIP'			=> '',
	'ABBC3_GRAD_VIEW'			=> '<span style="color: #FF0000">E</span><span style="color: #F60009">s</span><span style="color: #EC0013">t</span><span style="color: #E3001C">o</span> <span style="color: #D0002F">e</span><span style="color: #C60039">s</span> <span style="color: #B3004C">u</span><span style="color: #AA0055">n</span><span style="color: #A1005E">a</span> <span style="color: #8E0071">m</span><span style="color: #84007B">u</span><span style="color: #7B0084">e</span><span style="color: #71008E">s</span><span style="color: #680097">t</span><span style="color: #5E00A1">r</span><span style="color: #5500AA">a</span> <span style="color: #4200BD">d</span><span style="color: #3900C6">e</span> <span style="color: #2600D9">t</span><span style="color: #1C00E3">e</span><span style="color: #1300EC">x</span><span style="color: #0900F6">t</span><span style="color: #0000FF">o</span>',

	'ABBC3_RTL_MOVER'			=> 'Texto con lectura derecha a izquierda',
	'ABBC3_RTL_TIP'				=> ' [dir=rtl]texto[/dir]',
	'ABBC3_RTL_VIEW'			=> '<BDO dir="rtl">Esto es una muestra de texto</BDO>',

	'ABBC3_LTR_MOVER'			=> 'Texto con lectura izquierda a derecha',
	'ABBC3_LTR_TIP'				=> ' [dir=ltr]texto[/dir]',
	'ABBC3_LTR_VIEW'			=> '<BDO dir="ltr">Esto es una muestra de texto</BDO>',

	'ABBC3_MARQD_MOVER'			=> 'Desplazamiento de texto hacia abajo',
	'ABBC3_MARQD_TIP'			=> ' [marq=down]texto[/marq]',
	'ABBC3_MARQD_VIEW'			=> '<marquee direction="down" scrolldelay="120">Esto es una muestra de texto</marquee>',

	'ABBC3_MARQU_MOVER'			=> 'Desplazamiento de texto hacia arriba',
	'ABBC3_MARQU_TIP'			=> ' [marq=up]texto[/marq]',
	'ABBC3_MARQU_VIEW'			=> '<marquee direction="up" scrolldelay="120">Esto es una muestra de texto</marquee>',

	'ABBC3_MARQR_MOVER'			=> 'Desplazamiento de texto hacia la derecha',
	'ABBC3_MARQR_TIP'			=> ' [marq=right]texto[/marq]',
	'ABBC3_MARQR_VIEW'			=> '<marquee direction="right" scrolldelay="120">Esto es una muestra de texto</marquee>',

	'ABBC3_MARQL_MOVER'			=> 'Desplazamiento de texto hacia la izquierda',
	'ABBC3_MARQL_TIP'			=> ' [marq=left]texto[/marq]',
	'ABBC3_MARQL_VIEW'			=> '<marquee direction="left" scrolldelay="120">Esto es una muestra de texto</marquee>',

	'ABBC3_TABLE_MOVER'			=> 'Insertar una tabla',
	'ABBC3_TABLE_TIP'			=> ' [table=(ccs style)][tr=(ccs style)][td=(ccs style)]text[/td][/tr][/table]',
	'ABBC3_TABLE_VIEW'			=> '<table style="width:50%;border:1px solid #cccccc;" cellspacing="0" cellpadding="0"><tr style="text-align:center;"><td style="border:1px solid #cccccc;">Esto es una muestra de texto</td></tr></table>',

	'ABBC3_QUOTE_MOVER'			=> 'Citar',
	'ABBC3_QUOTE_TIP'			=> ' [quote]texto[/quote] o [quote=\"miembro\"]texto[/quote]',
	'ABBC3_QUOTE_VIEW'			=> '<blockquote><div><cite>miembro '. $lang['WROTE'] .':</cite>Esto es una muestra de texto</div></blockquote>',

	'ABBC3_CODE_MOVER'			=> 'C√≥digo',
	'ABBC3_CODE_TIP'			=> ' [code]texto c√≥digo[/code]',
	'ABBC3_CODE_VIEW'			=> '<dl class="codebox"><dt>'. $lang['CODE'] .': <a href="#" onclick="selectCode(this); return false;">'. $lang['SELECT_ALL_CODE'] .'</a></dt><dd><code>Esto es una muestra de texto</code></dd></dl>',

	'ABBC3_SPOIL_MOVER'			=> 'Ocultar texto',
	'ABBC3_SPOIL_TIP'			=> ' [spoil]texto[/spoil]',
	'ABBC3_SPOIL_VIEW'			=> '<div class="spoilwrapper"><div class="spoiltitle"><input class="btnspoil" type="button" value="Ver el Spoiler" onClick="javascript:if (this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display != \'\') { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'\'; this.innerText = \'\'; this.value = \'Ocultar el Spoiler\'; } else { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'none\'; this.innerText = \'\'; this.value = \'Ver el Spoiler\'; }" onfocus="this.blur();"></div><div class="spoilcontent"><div style="display: none;">Esto es una muestra de texto</div></div></div>',

	'ABBC3_ED2K_MOVER'			=> 'Enlace eD2K',
	'ABBC3_ED2K_TIP'			=> ' [url]enlace ed2k[/url] o [url=enlace ed2k]Nombre ed2k[/url]',
	'ABBC3_ED2K_VIEW'			=> '<a href="ed2k://|file|Robin.Hood.S02E01.Sisterhood.HDTV.XviD-BiA.avi|367335424|6EB031138DE4A80997A13C272760202F|h=CJZXHKH25ZONIMWVUOENVQKJSZDV5JI6|/" class="postlink">Robin.Hood.S02E01.Sisterhood.HDTV.XviD-BiA.avi</a>',

	'ABBC3_URL_MOVER'			=> 'Enlace Web',	
	'ABBC3_URL_TIP'				=> ' [url]http://...[/url] o [url=http://...]Nombre de Web[/url]',
	'ABBC3_URL_VIEW'			=> '<a href="http://www.google.com" class="postlink">Google</a>',

	'ABBC3_EMAIL_MOVER'			=> 'Correo electr√≥nico',
	'ABBC3_EMAIL_TIP'			=> ' [email]nombre@servidor.ext[/email] o [email=nombre@servidor.ext]Mi correo[/email]',
	'ABBC3_EMAIL_VIEW'			=> '<a href="mailto:user@server.ext">user@server.ext</a>',

	'ABBC3_WEB_MOVER'			=> 'Insertar  p√°gina web en el mensaje',
	'ABBC3_WEB_TIP'				=> ' [web width=200 height=100 ]URL p√°gina[/web]',
	'ABBC3_WEB_VIEW'			=> '<iframe width="100%" height="100" src="http://www.google.com" style="font-size: 2px;"></iframe><br/>',
	
	'ABBC3_IMG_MOVER'			=> 'Insertar image',
	'ABBC3_IMG_TIP'				=> ' [img=(left|center|right)]http://...[/img]',
	'ABBC3_IMG_VIEW'			=> '<div align="center"><img src="http://www.google.com/intl/en_com/images/logo_plain.png" /></div>',

	'ABBC3_THUMB_MOVER'			=> 'Insertar miniatura',
	'ABBC3_THUMB_TIP'			=> ' [thumbnail(=left|right)]http://...[/thumbnail]',
	'ABBC3_THUMB_VIEW'			=> '<a href="http://www.google.com/intl/en_com/images/logo_plain.png" rel="lightbox[]" alt="http://www.google.com/intl/en_com/images/logo_plain.png" title="" class="hoverbox"><img src="http://www.google.com/intl/en_com/images/logo_plain.png" border="0" width="100px" align="right"/></a>',

	'ABBC3_IMGSHACK_MOVER'		=> 'Insertar imagen desde imageshack',
	'ABBC3_IMGSHACK_TIP'		=> ' [url=http://imageshack.us][img=http://...][/img][/url]',
	'ABBC3_IMGSHACK_VIEW'		=> '<a href="http://img207.imageshack.us/my.php?image=advancedbbcodebox3prosidd3.gif" class="postlink"><img src="http://img207.imageshack.us/img207/1773/advancedbbcodebox3prosidd3.th.gif" alt="Image" /></a>',

	'ABBC3_FLASH_MOVER'			=> 'Insertar archivo de flash',
	'ABBC3_FLASH_TIP'			=> ' [flash width=# height=#]URL flash[/flash]',
	'ABBC3_FLASH_VIEW'			=> '<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0" width="200" height="100"><param name="movie" value="http://www.adobe.com/support/flash/ts/documents/test_version/version.swf" /><param name="play" value="true" /><param name="loop" value="true" /><param name="quality" value="high" /><param name="allowScriptAccess" value="never" /><param name="allowNetworking" value="internal" /><embed src="http://www.adobe.com/support/flash/ts/documents/test_version/version.swf" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" width="200" height="100" play="true" loop="true" quality="high" allowscriptaccess="never" allownetworking="internal"></embed></object>',

	'ABBC3_VIDEO_MOVER'			=> 'Insertar video',
	'ABBC3_VIDEO_TIP'			=> ' [video width=# height=#]URL video[/video]',
	'ABBC3_VIDEO_VIEW'			=> '<object width="200" height="100" classid="CLSID:6BF52A52-394A-11d3-B153-00C04F79FAA6" id="wmstream_"><param name="url" value="$3" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /><param name="src" value="$3" /><!--[if !IE]>--><object width="200" height="100" type="video/x-ms-wmv" data="$3"><param name="src" value="$3" /><param name="controller" value="1" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /></object><!--<![endif]--></object>',

	'ABBC3_STREAM_MOVER'		=> 'Insertar sonido',
	'ABBC3_STREAM_TIP'			=> ' [stream]URL Archivo[/stream]',
	'ABBC3_STREAM_VIEW'			=> '<object width="200" height="45" classid="CLSID:6BF52A52-394A-11d3-B153-00C04F79FAA6" id="wmstream_"><param name="url" value="$1" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /><param name="src" value="$1" /><!--[if !IE]>--><object width="200" height="45" type="video/x-ms-wmv" data="$1"><param name="src" value="$1" /><param name="controller" value="1" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /></object><!--<![endif]--></object>',

	'ABBC3_RAM_MOVER'			=> 'Insertar Real Media',
	'ABBC3_RAM_TIP'				=> ' [ram]URL Real Media[/ram]',
	'ABBC3_RAM_VIEW'			=> '<object id="rmstream_" classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" width="200" height="100"><param name="src" value="$3" /><param name="autostart" value="false" /><param name="controls" value="ImageWindow" /><param name="console" value="ctrls_" /><param name="prefetch" value="false" /><embed name="rmstream_" type="audio/x-pn-realaudio-plugin" src="$3" width="200" height="100" autostart="false" controls="ImageWindow" console="ctrls_" prefetch="false"></embed></object><br /><object id="ctrls_" classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" width="200" height="36"><param name="controls" value="ControlPanel" /><param name="console" value="ctrls_{_file.ATTACH_ID}" /><embed name="ctrls_" type="audio/x-pn-realaudio-plugin" width="200" height="36" controls="ControlPanel" console="ctrls_"></embed></object>',

	'ABBC3_QUICKTIME_MOVER'		=> 'Insertar Quick time',
	'ABBC3_QUICKTIME_TIP'		=> ' [quicktime width=# height=#]URL Quick time[/quicktime]',
	'ABBC3_QUICKTIME_VIEW'		=> '<object id="qtstream_" classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab#version=6,0,2,0" width="200" height="100"><param name="src" value="http://www.nature.com/neuro/journal/v3/n3/extref/Li_control.mov.qt" /><param name="controller" value="true" /><param name="autoplay" value="false" /><param name="type" value="video/quicktime" /><embed name="qtstream_" src="http://www.nature.com/neuro/journal/v3/n3/extref/Li_control.mov.qt" pluginspage="http://www.apple.com/quicktime/download/" enablejavascript="true" controller="true" width="200" height="100" type="video/quicktime" autoplay="false"></embed></object>',

	'ABBC3_STAGE6_MOVER'		=> 'Insertar video desde Stage6', // from http://www.stage6.com/
	'ABBC3_STAGE6_TIP'			=> ' [stage6]Stage6 ID[/stage6]',
	'ABBC3_STAGE6_VIEW'			=> '<object  classid="clsid:67DABFBF-D0AB-41fa-9C46-CC0F21721616" codebase="http://download.divx.com/player/DivXBrowserPlugin.cab" width="200" height="100" ><param name="src" value="http://video.stage6.com/2068715/.divx" /><param name="autoplay" value="false" /><param name="custommode" value="Stage6" /><param name="showpostplaybackad" value="false" /><embed type="video/divx" src="http://video.stage6.com/2068715/.divx" pluginspage="http://go.divx.com/plugin/download/" showpostplaybackad="false" custommode="Stage6" autoplay="false" width="200" height="100" /></object><br />',

	'ABBC3_GVIDEO_MOVER'		=> 'Insertar video desde Google',
	'ABBC3_GVIDEO_TIP'			=> ' [GVideo]URL video[/GVideo]',
	'ABBC3_GVIDEO_VIEW'			=> '<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0" width="200" height="100"><param name="movie" value="http://video.google.com/googleplayer.swf?docid=-8351924403384451128" /><param name="play" value="false" /><param name="loop" value="false" /><param name="quality" value="high" /><param name="allowScriptAccess" value="never" /><param name="allowNetworking" value="internal" /><embed src="http://video.google.com/googleplayer.swf?docid=-8351924403384451128" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" width="200" height="100" play="false" loop="false" quality="high" allowscriptaccess="never" allownetworking="internal"></embed></object>',

	'ABBC3_YOUTUBE_MOVER'		=> 'Insertar video desde Youtube',
	'ABBC3_YOUTUBE_TIP'			=> ' [youtube]URL video[/youtube]',
	'ABBC3_YOUTUBE_VIEW'		=> '<object width="200" height="100"><param name="movie" value="http://www.youtube.com/v/TA4hm97m494" /><param name="wmode" value="transparent" /><embed src="http://www.youtube.com/v/TA4hm97m494" type="application/x-shockwave-flash" wmode="transparent" width="200" height="100"></embed></object>',

	'ABBC3_LISTB_MOVER'			=> 'Lista Desordenada',
	'ABBC3_LISTB_TIP'			=> ' [list]texto[/list] Nota: usted puede usar [*] para insertar puntos',
	'ABBC3_LISTB_VIEW'			=> '<ul><li>Item1</li><li>Item2</li><li>Item3</li></ul>',

	'ABBC3_LISTO_MOVER'			=> 'Lista Ordenada',
	'ABBC3_LISTO_TIP'			=> ' [list=1|a]texto[/list] Nota: usted puede usar [*] para insertar puntos',
	'ABBC3_LISTO_VIEW'			=> '<ol style="list-style-type: lower-alpha"><li>Item1</li><li>Item2</li><li>Item3</li></ol>',

	'ABBC3_HR_MOVER'			=> 'L√≠nea divisoria',
	'ABBC3_HR_TIP'				=> ' [hr] Nota: Crea una lÌnea para separar texto.',
	'ABBC3_HR_VIEW'				=> '<hr noshade color="#000000" size="1px">',

	'ABBC3_CUT_MOVER'			=> 'Borrar el texto seleccionado',
	'ABBC3_COPY_MOVER'			=> 'Copiar el texto seleccionado',
	'ABBC3_PASTE_MOVER'			=> 'Pegar el texto copiado',
	'ABBC3_PLAIN_MOVER'			=> 'Quitar las etiquetas BBCodes del texto seleccionado',
	'ABBC3_PASTE_ERROR'			=> 'Por favor, primero copie un texto, luego peguelo ',
	'ABBC3_NOSELECT_ERROR'		=> 'Por favor, primero seleccione el texto ',

	// Wizard texts
	'ABBC3_ERROR'				=> 'Error : ',
	'ABBC3_ERROR_TAG'			=> 'Error inesperado al utilizar etiqueta : ',
	
	'ABBC3_ID'					=> 'Introduzca identificador :',
	'ABBC3_NOID'				=> 'Usted no escribi√≥ el identificador',
	'ABBC3_LINK'				=> 'Introduzca el enlace a ',
	'ABBC3_DESC'				=> 'Introduzca la descripci√≥n del enlace a ',
	'ABBC3_NAME'				=> 'Descripci√≥n',
	'ABBC3_NOLINK'				=> 'Usted no escribi√≥ el enlace a ',
	'ABBC3_NODESC'				=> 'Usted no escribi√≥ la descripci√≥n a ',
	'ABBC3_WIDTH'				=> 'Introduzca el ancho',
	'ABBC3_WIDTH_NOTE'			=> 'Nota: el valor puede ser expresado en porcentaje',
	'ABBC3_NOWIDTH'				=> 'Usted no escribi√≥ la anchura',
	'ABBC3_HEIGHT'				=> 'Introduzca el alto',
	'ABBC3_HEIGHT_NOTE'			=> 'Nota: el valor puede ser expresado en porcentaje',
	'ABBC3_NOHEIGHT'			=> 'Usted no escribi√≥ la altura',
	
	'ABBC3_ED2K_TAG'			=> 'ed2k',
	'ABBC3_ED2K_NOTE' 			=> '', //'Ejemplo: ed2k://|file|Robin.Hood.S02E01.Sisterhood.HDTV.XviD-BiA.avi|367335424|6EB031138DE4A80997A13C272760202F|h=CJZXHKH25ZONIMWVUOENVQKJSZDV5JI6|/',
	'ABBC3_ED2K_ADD'			=> 'Agregar los enlaces selecionados a su cliente ed2k',

	'ABBC3_URL_TAG'				=> 'p√°gina',
	'ABBC3_URL_NOTE' 			=> 'Ejemplo: http://www.google.com',

	'ABBC3_WEB_TAG'				=> 'web',
	'ABBC3_WEB_NOTE'			=> 'Ejemplo: http://www.google.com',

	'ABBC3_EMAIL_TAG'			=> 'correo electr√≥nico',
	'ABBC3_EMAIL_NOTE' 			=> 'Ejemplo: user@server.ext',

	'ABBC3_IMG_TAG'				=> 'imagen',
	'ABBC3_IMG_NOTE'			=> 'Ejemplo: http://www.google.com/intl/en_com/images/logo_plain.png',

	'ABBC3_THUMB_TAG'			=> 'miniatura',
	'ABBC3_THUMB_NOTE'			=> 'Ejemplo: http://www.google.com/intl/en_com/images/logo_plain.png',

	'ABBC3_FLASH_TAG'			=> 'flash',
	'ABBC3_FLASH_NOTE'			=> 'Ejemplo: http://www.adobe.com/support/flash/ts/documents/test_version/version.swf',

	'ABBC3_VIDEO_TAG'			=> 'video',
	'ABBC3_VIDEO_NOTE'			=> '', //'Ejemplo: ???',

	'ABBC3_STREAM_TAG'			=> 'sonido',
	'ABBC3_STREAM_NOTE'			=> '', //'Ejemplo: ???',

	'ABBC3_RAM_TAG'				=> 'Real Media',
	'ABBC3_RAM_NOTE'			=> '', //'Ejemplo: ???',

	'ABBC3_QUICKTIME_TAG'		=> 'Quick time',
	'ABBC3_QUICKTIME_NOTE'		=> 'Ejemplo: http://www.nature.com/neuro/journal/v3/n3/extref/Li_control.mov.qt' . '<br/>' .'http://www.carnivalmidways.com/images/Music/thisisatest.mp3',

	'ABBC3_STAGE6_TAG'			=> 'Stage6 Video',
	'ABBC3_STAGE6_NOTE'			=> 'Ejemplo: 2068715',

	'ABBC3_GVIDEO_TAG'			=> 'Google Video',
	'ABBC3_GVIDEO_NOTE'			=> 'Ejemplo: http://video.google.com/videoplay?docid=-8351924403384451128',

	'ABBC3_YOUTUBE_TAG'			=> 'Youtube Video',
	'ABBC3_YOUTUBE_NOTE'		=> 'Ejemplo: http://www.youtube.com/watch?v=aabbcc12',
	
	'ABBC3_TABLE_STYLE'			=> 'Introduzca estilo de tabla',
	'ABBC3_TABLE_NOTE'			=> 'Ejemplo: width:50%;border:1px solid #cccccc;',
	
	'ABBC3_ROW_NUMBER'			=> 'Introduzca cantidad de filas',
	'ABBC3_ROW_ERROR'			=> 'Usted no escribi√≥ la cantidad de filas',
	'ABBC3_ROW_STYLE'			=> 'Introduzca estilo de filas',
	'ABBC3_ROW_NOTE'			=> 'Ejemplo: text-align:center;',
	
	'ABBC3_CELL_NUMBER'			=> 'Introduzca cantidad de columnas',
	'ABBC3_CELL_ERROR'			=> 'Usted no escribi√≥ la cantidad de columnas',
	'ABBC3_CELL_STYLE'			=> 'Introduzca estilo de filas',
	'ABBC3_CELL_NOTE'			=> 'Ejemplo: border:1px solid #cccccc;',
	
	'ABBC3_GRAD_MIN_ERROR'		=> 'Por favor, primero seleccione el texto : ',
	'ABBC3_GRAD_MAX_ERROR'		=> 'Solo se permite un tama√±o inferior a 120 caracteres : ',
	
	'SPOILER_SHOW'				=> 'Ver el Spoiler',
	'SPOILER_HIDE'				=> 'Ocultar el Spoiler',

	// Custom bbcodes

	// MOD : add-on hide bbcode - START
	// [hide]text[/hide] Code..
	'ABBC3_HIDE_MOVER'			=> 'Ocultar el mensage',
	'ABBC3_HIDE_TIP'			=> ' [hide]mensage[/hide]',
	'ABBC3_HIDE_VIEW'			=> '<dl class="hidebox"><dt class="hide">Mensaje Oculto:</dt><dd>Tienes que responder a este tema para ver el mensaje oculto.</dd></dl>',
	// MOD : add-on hide bbcode - END

	// MOD : add-on Dailymotion bbcode - START
	// [dm]Dailymotion ID[/dm] Code..
	'ABBC3_DMOTION_MOVER'		=> 'Insertar video desde dailymotion', // from http://www.dailymotion.com/
	'ABBC3_DMOTION_TIP'			=> ' [dm]Dailymotion ID[/dm]',
	'ABBC3_DMOTION_VIEW'		=> '<object width="200" height="100"><param name="movie" value="http://www.dailymotion.com/swf/x3hm7o" /><param name="allowFullScreen" value="true" /><param name="allowScriptAccess" value="never" /><embed src="http://www.dailymotion.com/swf/x3hm7o" type="application/x-shockwave-flash" width="200" height="100" allowFullScreen="true" allowScriptAccess="never"></embed></object>',
	// MOD : add-on Dailymotion bbcode - END

	// MOD : add-on Moderator bbcode - START
	// [mod=name]text[/mod] Code..
	'ABBC3_MODERATOR_MOVER'		=> 'Mensaje del moderator',
	'ABBC3_MODERATOR_TIP'		=> ' [mod=nombre]texto[/mod]',
	'ABBC3_MODERATOR_VIEW'		=> '<table id="ModTable" width="100%" cellspacing="5" cellpadding="0" border="0" align="center"><tr><td class="row1" rowspan="2" align="middle" vAlign="center" width="1%"><span class="exclamation" title="Moderator warning">&nbsp;!&nbsp;</span></td><td class="row2"><span class="genmed"><b>Mod Name:</b></span></td></tr><tr><td>Esto es una muestra de texto</td></tr></table>',
	// MOD : add-on Moderator bbcode - END
	
	// MOD : add-on Veoh bbcode - START
	// [veoh]URL video[/veoh] Code..
	'ABBC3_VEOH_MOVER'			=> 'Insertar video desde Veoh',
	'ABBC3_VEOH_TIP'			=> ' [veoh]URL video[/veoh].',
	'ABBC3_VEOH_TAG'			=> ' Veoh.',
	'ABBC3_VEOH_NOTE'			=> 'Ejemplo: http://www.veoh.com/videos/v1409404EqT5SJjM.',
	'ABBC3_VEOH_VIEW'			=> '<embed src="http://www.veoh.com/videodetails2.swf?permalinkId=v1409404EqT5SJjM&id=anonymous&player=videodetailsembedded&videoAutoPlay=0" allowFullScreen="true" width="200" height="100" bgcolor="#000000" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>',
	// MOD : add-on Veoh bbcode - END
	
	// MOD : add-on offtopic bbcode - START
	// [offtopic]text[/offtopic] Code..
	'ABBC3_OFFTOPIC'			=> 'Fuera de tema',
	'ABBC3_OFFTOPIC_MOVER'		=> 'Insertar texto fuera de tema',
	'ABBC3_OFFTOPIC_TIP'		=> ' [offtopic]texto[/offtopic]',
	'ABBC3_OFFTOPIC_VIEW'		=> '<i><b><font color="#114499">Fuera de tema: </font></b><br/><font color="#2277DD">Esto es una muestra de texto</font></i>',
	// MOD : add-on offtopic bbcode - END

	// MOD : add-on Gamespot bbcode - START
	// [gamespot] Gamespot video URL [gamespot] Code..
	'ABBC3_GAMESPOT_MOVER'		=> 'Insertar video desde Gamespot',
	'ABBC3_GAMESPOT_TIP'		=> ' [gamespot]Gamespot video URL [gamespot]',
	'ABBC3_GAMESPOT_NOTE'		=> ' Ejemplo : http://www.gamespot.com/video/944074/6185798/tom-clancys-rainbow-six-vegas-2-official-trailer-3',
	'ABBC3_GAMESPOT_VIEW'		=> '<embed id="mymovie" width="200" height="100" flashvars="paramsURI=http%3A%2F%2Fwww%2Egamespot%2Ecom%2Fpages%2Fvideo%5Fplayer%2Fproteus%5Fxml%2Ephp%3Fadseg%3D%26adgrp%3D%26sid%3D6185798%26pid%3D944074%26mb%3D%26onid%3D%26nc%3D1202626246593%26embedded%3D1%26showWatermark%3D0%26autoPlay%3D0" allowfullscreen="true" allowscriptaccess="never" quality="high" name="mymovie" src="http://image.com.com/gamespot/images/cne_flash/production/media_player/proteus/gs/proteus_embed.swf" type="application/x-shockwave-flash"/>',
	// MOD : add-on Gamespot bbcode - END

	// MOD : add-on Gametrailers bbcode - START
	// [gametrailers] Gametrailers video URL [gametrailers] Code..
	'ABBC3_GAMETRAILERS_MOVER'	=> 'Insertar video desde Gametrailers',
	'ABBC3_GAMETRAILERS_TIP'	=> ' [gametrailers]Gametrailers video URL[/gametrailers]',
	'ABBC3_GAMETRAILERS_NOTE'	=> ' Ejemplo : http://www.gametrailers.com/player/30461.html',
	'ABBC3_GAMETRAILERS_VIEW'	=> '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"  codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" id="gtembed" width="200" height="100"><param name="allowScriptAccess" value="never" /><param name="allowFullScreen" value="true" /><param name="movie" value="http://www.gametrailers.com/remote_wrap.php?mid=30461" /><param name="quality" value="high" /><embed src="http://www.gametrailers.com/remote_wrap.php?mid=30461" swLiveConnect="true" name="gtembed" align="middle" allowScriptAccess="never" allowFullScreen="true" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="200" height="100"></embed></object>',
	// MOD : add-on Gametrailers bbcode - END

	// MOD : add-on IGN video bbcode - START
	// [ignvideo] ING video URL [ignvideo] Code..
	'ABBC3_IGNVIDEO_MOVER'		=> 'Insertar video desde Ign',
	'ABBC3_IGNVIDEO_TIP'		=> ' [ignvideo]ING video URL[/ignvideo]',
	'ABBC3_IGNVIDEO_NOTE'		=> ' Ejemplo: object_ID=967025&downloadURL=http://tvmovies.ign.com/tv/video/article/850/850894/knightrider_trailer_020808_flvlow.flv',
	'ABBC3_IGNVIDEO_VIEW'		=> '<embed src="http://videomedia.ign.com/ev/ev.swf" flashvars="object_ID=967025&downloadURL=http://tvmovies.ign.com/tv/video/article/850/850894/knightrider_trailer_020808_flvlow.flv" type="application/x-shockwave-flash" width="200" height="100" ></embed>',
	// MOD : add-on IGN video bbcode - END

	// MOD : add-on liveleak bbcode - START
	// [liveleak] Liveleak video URL [liveleak] Code..
	'ABBC3_LIVELEAK_MOVER'		=> 'Insertar video desde Liveleak',
	'ABBC3_LIVELEAK_TIP'		=> ' [liveleak]Liveleak video URL[/liveleak]',
	'ABBC3_LIVELEAK_NOTE'		=> ' Ejemplo: http://www.liveleak.com/view?i=413_1202590393',
	'ABBC3_LIVELEAK_VIEW'		=> '<object type="application/x-shockwave-flash" width="200" height="100" wmode="transparent" data="http://www.liveleak.com/player.swf?autostart=false&token=i=413_1202590393"><param name="movie" value="http://www.liveleak.com/player.swf?autostart=false&token=$1" /><param name="wmode" value="transparent" /><param name="quality" value="high" /></object>',
	// MOD : add-on liveleak bbcode - End

	// MOD : add-on NFO bbcode - START
	// [nfo]NFO text[/nfo] Code..
	'ABBC3_NFO_MOVER'			=> 'Texto NFO (Mejor vista en Internet explorer)',
	'ABBC3_NFO_TIP'				=> ' [nfo]Texto NFO[/nfo]',
	'ABBC3_NFO_VIEW'			=> '<table cellspacing="0" cellpadding="0" border="0" ><tr><td><span class="genmed"><b>NFO:</b></span></td></tr><tr><td class="nfo">' . str_replace(" ", "&nbsp;", '    ≤ €€€€ €€±±∞                                  ∞∞∞±±±±≤≤≤€€€€€€€€€€€  €   €€ €€€') . '</td></tr></table>',
	// MOD : add-on NFO bbcode - End

	// MOD : add-on glow bbcode - START
	// [glow=color]Text[/glow] Code..
	'ABBC3_GLOW_MOVER'			=> 'Texto Resplandor (S√≥lo en Internet explorer)',
	'ABBC3_GLOW_TIP'			=> ' [glow=(color)]texto[/glow]',
	'ABBC3_GLOW_VIEW'			=> '<div style="filter:Glow(color=red,strength=4);color:#ffffff;height:110%">Esto es una muestra de texto</div>',
	// MOD : add-on glow bbcode - END

	// MOD : add-on shadow bbcode - START
	// [shadow=(color)]text[/shadow] Code..
	'ABBC3_SHADOW_MOVER'		=> 'Texto doble (S√≥lo en Internet explorer)',
	'ABBC3_SHADOW_TIP'			=> ' [shadow=(color)]texto[/shadow]',
	'ABBC3_SHADOW_VIEW'			=> '<div style="filter:shadow(color=black,strength=4);color:blue;height:110%">Esto es una muestra de texto</div>',
	// MOD : add-on shadow bbcode - End

	// MOD : add-on dropshadow bbcode - START
	// [dropshadow=(color)]text[/dropshadow] Code..
	'ABBC3_DROPSHADOW_MOVER'	=> 'Texto con sombra (S√≥lo en Internet explorer)',
	'ABBC3_DROPSHADOW_TIP'		=> ' [dropshadow=(color)]texto[/dropshadow]',
	'ABBC3_DROPSHADOW_VIEW'		=> '<div style="filter:dropshadow(color=#999999,strength=4);color:blue;height:110%">Esto es una muestra de texto</div>',
	// MOD : add-on dropshadow bbcode - End

	// MOD : add-on Blur bbcode - START
	// [blur=(color)]text[/blur] Code..
	'ABBC3_BLUR_MOVER'			=> 'Texto esfumado (S√≥lo en Internet explorer)',
	'ABBC3_BLUR_TIP'			=> ' [blur=(color)]texto[/blur]',
	'ABBC3_BLUR_VIEW'			=> '<div style="filter:Blur(strength=7);color:blue;height:110%">Esto es una muestra de texto</div>',
	// MOD : add-on Blur bbcode - End

	// MOD : add-on Wave bbcode - START
	// [wave=(color)]text[/wave] Code
	'ABBC3_WAVE_MOVER'			=> 'Text ondeado(S√≥lo en Internet explorer)',
	'ABBC3_WAVE_TIP'			=> ' [wave=(color)]texto[/wave]',
	'ABBC3_WAVE_VIEW'			=> '<div style="filter:Wave(strength=2);color:blue;height:110%">Esto es una muestra de texto</div>',
	// MOD : add-on Wave bbcode - End

	// MOD : add-on Search bbcode - START
	// [search(=(msn|yahoo|google))]text[/search] Code..
	'ABBC3_SEARCH_MOVER'		=> 'Insertar enlace a buscador ',
	'ABBC3_SEARCH_TIP'			=> ' [search(=(msn|yahoo|google))]texto[/search]',
	'ABBC3_SEARCH_VIEW'			=> $lang['SEARCH_MINI'] . ' ' . $config['sitename'] . ' : <a href="search.php?keywords=Advanced BBcode box 3">"Advanced BBcode box 3"</a><br/><br/>' . $lang['SEARCH_MINI'] . ' msn : <a href="http://search.live.com/results.aspx?q=Advanced BBcode box 3&mkt=tr-TR&lf=1" target="_blank">"Advanced BBcode box 3"</a><br/><br/>' .$lang['SEARCH_MINI'] . ' yahoo : <a href="http://search.yahoo.com/search?p=Advanced BBcode box 3" target="_blank">"Advanced BBcode box 3"</a><br/><br/>' . $lang['SEARCH_MINI'] . ' google : <a href="http://www.google.com.tr/search?q=Advanced BBcode box 3" target="_blank">"Advanced BBcode box 3"</a>',
	// MOD : add-on Search bbcode - End


));

?>