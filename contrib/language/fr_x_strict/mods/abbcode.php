<?php
/** 
*
* abbcode [French]
* @package language
* @version $Id: abbcode.php, v 1.0.7 2008/01/30 18:05:07 leviatan21 Exp $
* @English version $Id: $ phpBB 3.0.0 - 1.0.7
* @copyright leviatan21 < info@mssti.com > (Gabriel) http://www.mssti.com/phpbb3/
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
* @translator: joebart72 - http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=297204
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
	'BBCODE_STYLES_TIP'			=> 'Astuce : Les mises en forme peuvent être rapidement appliqués au Texte sélectionné',
	
	// Help
	'ABBC3_HELP_TITLE'			=> 'Advanced BBCode box 3 :: Page d’aide',
	'ABBC3_HELP_CUSTOM_TITLE'	=> 'Advanced BBCode box 3 :: Page d’aides des BBCodes personnalisables',
	'ABBC3_HELP_DESC'			=> 'Description',
	'ABBC3_HELP_WRITE'			=> 'Votre format d’écriture',
	'ABBC3_HELP_VIEW'			=> 'Notre format d’affichage',
	'ABBC3_HELP_ABOUT'			=> 'Advanced BBCode Box 3 par <a href="http://www.mssti.com/phpbb3">mssti</a>',
	
	// Dropdown titles options
	'ABBC3_FONTTYPE_MOVER'		=> 'Police',
	'ABBC3_FONTTYPE_TIP'		=> ' [font=Comic Sans MS]Texte[/font]',
	'ABBC3_FONTTYPE_VIEW'		=> '<span style="font-family:Comic Sans MS">Voici un exemple de texte</span>',

	'ABBC3_FONT_GIANT'			=> 'Géant',

	'ABBC3_FONTCOLOR_MOVER'		=> 'Couleur de la police',
	'ABBC3_FONTCOLOR_TIP'		=> ' [color=red]Texte[/color] Note : Vous pouvez utiliser le HTML (color=#FF0000 ou color=red)',
	'ABBC3_FONTCOLOR_VIEW'		=> '<span style="color:red">Voici un exemple de texte</span>',

	'ABBC3_FONTSIZE_MOVER'		=> 'Taille de la police',
	'ABBC3_FONTSIZE_TIP'		=> ' [size=150]Txte large[/size] Note : La valeur sera interprétée comme un pourcentage',
	'ABBC3_FONTSIZE_VIEW'		=> '<span style="font-size: 150%; line-height: 116%;">Voici un exemple de texte</span>',

	'ABBC3_FONTHILI_MOVER'		=> 'Texte surligné',
	'ABBC3_FONTHILI_TIP'		=> ' [highlight=yellow]Texte[/highlight] Note : Vous pouvez utiliser le HTML (color=#FF0000 ou color=red)',
	'ABBC3_FONTHILI_VIEW'		=> '<span style="background-color: yellow;">Voici un exemple de texte</span>',	
	
	// Text to be applied to the helpline & mouseover 
	'ABBC3_JUSTIFY_MOVER'		=> 'Texte justifié',
	'ABBC3_JUSTIFY_TIP'			=> ' [align=justify]Texte[/align]',
	'ABBC3_JUSTIFY_VIEW'		=> '<div style="text-align:justify">Voici un exemple de texte</div>',	

	'ABBC3_RIGHT_MOVER'			=> 'Texte aligné sur la droite',
	'ABBC3_RIGHT_TIP'			=> ' [align=right]Texte[/align]',
	'ABBC3_RIGHT_VIEW'			=> '<div style="text-align:right">Voici un exemple de texte</div>',	
	
	'ABBC3_CENTER_MOVER'		=> 'Texte centré',
	'ABBC3_CENTER_TIP'			=> ' [align=center]Texte[/align]',
	'ABBC3_CENTER_VIEW'			=> '<div style="text-align:center">Voici un exemple de texte</div>',	
	
	'ABBC3_LEFT_MOVER'			=> 'Texte aligné sur la gauche',
	'ABBC3_LEFT_TIP'			=> ' [align=left]Texte[/align]',
	'ABBC3_LEFT_VIEW'			=> '<div style="text-left:justify">Voici un exemple de texte</div>',	
	
	'ABBC3_PRE_MOVER'			=> 'Texte préformaté',
	'ABBC3_PRE_TIP'				=> ' [pre]Texte[/pre]',
	'ABBC3_PRE_VIEW'			=> '<pre>Voici un exemple de texte</pre>',	
	
	'ABBC3_SUP_MOVER'			=> 'Texte en exposant',
	'ABBC3_SUP_TIP'				=> ' [sup]Texte[/sup]',
	'ABBC3_SUP_VIEW'			=> '<sup>Voici un exemple de texte</sup>',	
	
	'ABBC3_SUB_MOVER'			=> 'Texte en indice',
	'ABBC3_SUB_TIP'				=> ' [sub]Texte[/sub]',
	'ABBC3_SUB_VIEW'			=> '<sub>Voici un exemple de texte</sub>',	
	
	'ABBC3_BOLD_MOVER'			=> 'Texte en gras',
	'ABBC3_BOLD_HELP'			=> ' [b]Texte[/b]',
	
	'ABBC3_ITALIC_MOVER'		=> 'Texte en italique',
	'ABBC3_ITALIC_TIP'			=> ' [i]Texte[/i]',
	'ABBC3_ITALIC_VIEW'			=> '<em>Voici un exemple de texte</em>',	
	
	'ABBC3_UNDERLINE_MOVER'		=> 'Texte souligné',
	'ABBC3_UNDERLINE_TIP'		=> ' [u]Texte[/u]',
	'ABBC3_UNDERLINE_VIEW'		=> '<span style="text-decoration: underline">Voici un exemple de texte</span>',	
	
	'ABBC3_STRIKE_MOVER'		=> 'Texte barré',
	'ABBC3_STRIKE_TIP'			=> ' [s]Texte[/s]',
	'ABBC3_STRIKE_VIEW'			=> '<strike>Voici un exemple de texte</strike>',	
	
	'ABBC3_FADE_MOVER'			=> 'Texte en fondu',
	'ABBC3_FADE_TIP'			=> ' [fade]Texte[/fade]',
	'ABBC3_FADE_VIEW'			=> '<span class="fade_link">Voici un exemple de texte</span> <script type="text/javascript">fade_ontimer()</script>',	
	
	'ABBC3_GRAD_MOVER'			=> 'Texte en arc en ciel',
	'ABBC3_GRAD_TIP'			=> ' [grad]Texte[/grad]',
	'ABBC3_GRAD_VIEW'			=> '<span style="color: #FF0000">V</span><span style="color: #F4000B">o</span><span style="color: #EA0015">i</span><span style="color: #DF0020">c</span><span style="color: #D5002B">i</span> <span style="color: #BF0040">u</span><span style="color: #B5004A">n</span> <span style="color: #9F0060">e</span><span style="color: #95006A">x</span><span style="color: #8A0075">e</span><span style="color: #800080">m</span><span style="color: #75008A">p</span><span style="color: #6A0095">l</span><span style="color: #60009F">e</span> <span style="color: #4A00B5">d</span><span style="color: #4000BF">e</span> <span style="color: #2B00D5">t</span><span style="color: #2000DF">e</span><span style="color: #1500EA">x</span><span style="color: #0B00F4">t</span><span style="color: #0000FF">e</span>',	
	
	'ABBC3_RTL_MOVER'			=> 'Texte se lisant de droite à gauche',
	'ABBC3_RTL_TIP'				=> ' [dir=rtl]Texte[/dir]',
	'ABBC3_RTL_VIEW'			=> '<BDO dir="rtl">Voici un exemple de texte</BDO>',	
	
	'ABBC3_LTR_MOVER'			=> 'Texte se lisant de gauche à droite',
	'ABBC3_LTR_TIP'				=> ' [dir=LTR]text[/dir]',
	'ABBC3_LTR_VIEW'			=> '<BDO dir="ltr">Voici un exemple de texte</BDO>',	
	
	'ABBC3_MARQD_MOVER'			=> 'Texte se déplaçant vers le bas',
	'ABBC3_MARQD_TIP'			=> ' [marq=down]Texte[/marq]',
	'ABBC3_MARQD_VIEW'			=> '<marquee direction="down" scrolldelay="120">Voici un exemple de texte</marquee>',	
	
	'ABBC3_MARQU_MOVER'			=> 'Texte se déplaçant vers le haut',
	'ABBC3_MARQU_TIP'			=> ' [marq=up]Texte[/marq]',
	'ABBC3_MARQU_VIEW'			=> '<marquee direction="up" scrolldelay="120">Voici un exemple de texte</marquee>',	
	
	'ABBC3_MARQR_MOVER'			=> 'Texte se déplaçant vers la droite',
	'ABBC3_MARQR_TIP'			=> ' [marq=right]Texte[/marq]',
	'ABBC3_MARQR_VIEW'			=> '<marquee direction="right" scrolldelay="120">Voici un exemple de texte</marquee>',	
	
	'ABBC3_MARQL_MOVER'			=> 'Texte se déplaçant vers la gauche',
	'ABBC3_MARQL_TIP'			=> ' [marq=left]Texte[/marq]',
	'ABBC3_MARQL_VIEW'			=> '<marquee direction="left" scrolldelay="120">Voici un exemple de texte</marquee>',	
	
	'ABBC3_TABLE_MOVER'			=> 'Insérer un tableau',
	'ABBC3_TABLE_TIP'			=> ' [table=(ccs style)][tr=(ccs style)][td=(ccs style)]Texte[/td][/tr][/table]',
	'ABBC3_TABLE_VIEW'			=> '<table style="width:50%;border:1px solid #cccccc;" cellspacing="0" cellpadding="0"><tr style="text-align:center;"><td style="border:1px solid #cccccc;">Voici un exemple de texte</td></tr></table>',	
	
	'ABBC3_QUOTE_MOVER'			=> 'Citer',
	'ABBC3_QUOTE_TIP'			=> ' [quote]Texte[/quote] ou [quote=\"member\"]Texte[/quote]',
	'ABBC3_QUOTE_VIEW'			=> '<blockquote><div><cite>member '. $lang['WROTE'] .':</cite>Voici un exemple de texte</div></blockquote>',	
	
	'ABBC3_CODE_MOVER'			=> 'Code',
	'ABBC3_CODE_TIP'			=> ' [code]Texte[/code]',
	'ABBC3_CODE_VIEW'			=> '<dl class="codebox"><dt>'. $lang['CODE'] .': <a href="#" onclick="selectCode(this); return false;">'. $lang['SELECT_ALL_CODE'] .'</a></dt><dd><code>Voici un exemple de texte</code></dd></dl>',	
	
	'ABBC3_SPOIL_MOVER'			=> 'Spoiler',
	'ABBC3_SPOIL_TIP'			=> ' [spoil]Texte[/spoil]',
	'ABBC3_SPOIL_VIEW'			=> '<div class="spoilwrapper"><div class="spoiltitle"><input class="btnspoil" type="button" value="Montrez le Spoiler" onClick="javascript:if (this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display != \'\') { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'\'; this.innerText = \'\'; this.value = \'Cachez le Spoiler\'; } else { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'none\'; this.innerText = \'\'; this.value = \'Montrez le Spoiler\'; }" onfocus="this.blur();"></div><div class="spoilcontent"><div style="display: none;">Voici un exemple de texte</div></div></div>',	
	
	'ABBC3_ED2K_MOVER'			=> 'Lien eD2K',
	'ABBC3_ED2K_TIP'			=> ' [url]lien ed2k[/url] ou [url=lien ed2k]Nom du lien ed2k[/url]',
	'ABBC3_ED2K_VIEW'			=> '<a href="ed2k://|file|Robin.Hood.S02E01.Sisterhood.HDTV.XviD-BiA.avi|367335424|6EB031138DE4A80997A13C272760202F|h=CJZXHKH25ZONIMWVUOENVQKJSZDV5JI6|/" class="postlink">Robin.Hood.S02E01.Sisterhood.HDTV.XviD-BiA.avi</a>',	
	
	'ABBC3_URL_MOVER'			=> 'Site internet',	
	'ABBC3_URL_TIP'				=> ' [url]http://...[/url] ou [url=http://...]Nom du site[/url]',
	'ABBC3_URL_VIEW'			=> '<a href="http://www.google.com" class="postlink">Google</a>',	
	
	'ABBC3_EMAIL_MOVER'			=> 'Email',
	'ABBC3_EMAIL_TIP'			=> ' [email]user@server.ext[/email] ou [email=membre@server.ext]mon email[/url]',
	'ABBC3_EMAIL_VIEW'			=> '<a href="mailto:user@server.ext">membre@server.ext</a>',	
	
	'ABBC3_WEB_MOVER'			=> 'Insérer un site dans le post',
	'ABBC3_WEB_TIP'				=> ' [web]URL du site[/web]',
	'ABBC3_WEB_VIEW'			=> '<iframe width="100%" height="100" src="http://www.google.com" style="font-size: 2px;"></iframe><br/>',	
	
	'ABBC3_IMG_MOVER'			=> 'Insérer une image',
	'ABBC3_IMG_TIP'				=> ' [img]http://...[/img]',
	'ABBC3_IMG_VIEW'			=> '<div align="center"><img src="http://www.google.com/intl/en_com/images/logo_plain.png" /></div>',	
	
	'ABBC3_THUMB_MOVER'			=> 'Insérer une miniature',
	'ABBC3_THUMB_TIP'			=> ' [thumbnail(=left|right)]http://...[/thumbnail]',
	'ABBC3_THUMB_VIEW'			=> '<a href="http://www.google.com/intl/en_com/images/logo_plain.png" rel="lightbox[]" alt="http://www.google.com/intl/en_com/images/logo_plain.png" title="" class="hoverbox"><img src="http://www.google.com/intl/en_com/images/logo_plain.png" border="0" width="100px" align="right"/></a>',	
	
	'ABBC3_IMGSHACK_MOVER'		=> 'Insérer une image d’Imageshack',
	'ABBC3_IMGSHACK_TIP'		=> ' [url=http://imageshack.us][img=http://...][/img][/url]',
	'ABBC3_IMGSHACK_VIEW'		=> '<a href="http://img207.imageshack.us/my.php?image=advancedbbcodebox3prosidd3.gif" class="postlink"><img src="http://img207.imageshack.us/img207/1773/advancedbbcodebox3prosidd3.th.gif" alt="Image" /></a>',	
	
	'ABBC3_FLASH_MOVER'			=> 'Insérer un fichier Flash',
	'ABBC3_FLASH_TIP'			=> ' [flash width=# height=#]URL flash[/flash]',
	'ABBC3_FLASH_VIEW'			=> '<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0" width="200" height="100"><param name="movie" value="http://www.adobe.com/support/flash/ts/documents/test_version/version.swf" /><param name="play" value="true" /><param name="loop" value="true" /><param name="quality" value="high" /><param name="allowScriptAccess" value="never" /><param name="allowNetworking" value="internal" /><embed src="http://www.adobe.com/support/flash/ts/documents/test_version/version.swf" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" width="200" height="100" play="true" loop="true" quality="high" allowscriptaccess="never" allownetworking="internal"></embed></object>',	
	
	'ABBC3_VIDEO_MOVER'			=> 'Insérer une vidéo',
	'ABBC3_VIDEO_TIP'			=> ' [video width=# height=#]URL vidéo[/video]',
	'ABBC3_VIDEO_VIEW'			=> '<object width="200" height="100" classid="CLSID:6BF52A52-394A-11d3-B153-00C04F79FAA6" id="wmstream_"><param name="url" value="$3" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /><param name="src" value="$3" /><!--[if !IE]>--><object width="200" height="100" type="video/x-ms-wmv" data="$3"><param name="src" value="$3" /><param name="controller" value="1" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /></object><!--<![endif]--></object>',	
	
	'ABBC3_STREAM_MOVER'		=> 'Insérer un fichier audio',
	'ABBC3_STREAM_TIP'			=> ' [stream]URL fichier audio[/stream]',
	'ABBC3_STREAM_VIEW'			=> '<object width="200" height="45" classid="CLSID:6BF52A52-394A-11d3-B153-00C04F79FAA6" id="wmstream_"><param name="url" value="$1" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /><param name="src" value="$1" /><!--[if !IE]>--><object width="200" height="45" type="video/x-ms-wmv" data="$1"><param name="src" value="$1" /><param name="controller" value="1" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /></object><!--<![endif]--></object>',	
	
	'ABBC3_RAM_MOVER'			=> 'Insérer un fichier Real Media',
	'ABBC3_RAM_TIP'				=> ' [ram]URL Real Media[/ram]',
	'ABBC3_RAM_VIEW'			=> '<object id="rmstream_" classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" width="200" height="100"><param name="src" value="$3" /><param name="autostart" value="false" /><param name="controls" value="ImageWindow" /><param name="console" value="ctrls_" /><param name="prefetch" value="false" /><embed name="rmstream_" type="audio/x-pn-realaudio-plugin" src="$3" width="200" height="100" autostart="false" controls="ImageWindow" console="ctrls_" prefetch="false"></embed></object><br /><object id="ctrls_" classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" width="200" height="36"><param name="controls" value="ControlPanel" /><param name="console" value="ctrls_{_file.ATTACH_ID}" /><embed name="ctrls_" type="audio/x-pn-realaudio-plugin" width="200" height="36" controls="ControlPanel" console="ctrls_"></embed></object>',	

	'ABBC3_QUICKTIME_MOVER'		=> 'Insérer un fichier Quick time',
	'ABBC3_QUICKTIME_TIP'		=> ' [quicktime width=# height=#]URL Quick time[/quicktime]',
	'ABBC3_QUICKTIME_VIEW'		=> '<object id="qtstream_" classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab#version=6,0,2,0" width="200" height="100"><param name="src" value="http://www.nature.com/neuro/journal/v3/n3/extref/Li_control.mov.qt" /><param name="controller" value="true" /><param name="autoplay" value="false" /><param name="type" value="video/quicktime" /><embed name="qtstream_" src="http://www.nature.com/neuro/journal/v3/n3/extref/Li_control.mov.qt" pluginspage="http://www.apple.com/quicktime/download/" enablejavascript="true" controller="true" width="200" height="100" type="video/quicktime" autoplay="false"></embed></object>',	
	
	'ABBC3_STAGE6_MOVER'		=> 'Insérer une vidéo de Stage6', // d’ http://www.stage6.com/
	'ABBC3_STAGE6_TIP'			=> ' [stage6]Identifiant Stage6 ID[/stage6]',
	'ABBC3_STAGE6_VIEW'			=> '<object  classid="clsid:67DABFBF-D0AB-41fa-9C46-CC0F21721616" codebase="http://download.divx.com/player/DivXBrowserPlugin.cab" width="200" height="100" ><param name="src" value="http://video.stage6.com/2068715/.divx" /><param name="autoplay" value="false" /><param name="custommode" value="Stage6" /><param name="showpostplaybackad" value="false" /><embed type="video/divx" src="http://video.stage6.com/2068715/.divx" pluginspage="http://go.divx.com/plugin/download/" showpostplaybackad="false" custommode="Stage6" autoplay="false" width="200" height="100" /></object><br />',	
	
	'ABBC3_GVIDEO_MOVER'		=> 'Insérer une vidéo de Google',
	'ABBC3_GVIDEO_TIP'			=> ' [GVideo]URL vidéo[/GVideo]',
	'ABBC3_GVIDEO_VIEW'			=> '<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0" width="200" height="100"><param name="movie" value="http://video.google.com/googleplayer.swf?docid=-8351924403384451128" /><param name="play" value="false" /><param name="loop" value="false" /><param name="quality" value="high" /><param name="allowScriptAccess" value="never" /><param name="allowNetworking" value="internal" /><embed src="http://video.google.com/googleplayer.swf?docid=-8351924403384451128" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" width="200" height="100" play="false" loop="false" quality="high" allowscriptaccess="never" allownetworking="internal"></embed></object>',	
	
	'ABBC3_YOUTUBE_MOVER'		=> 'Insérer une vidéo Youtube',
	'ABBC3_YOUTUBE_TIP'			=> ' [youtube]URL complète[/youtube]',
	'ABBC3_YOUTUBE_VIEW'		=> '<object width="200" height="100"><param name="movie" value="http://www.youtube.com/v/TA4hm97m494" /><param name="wmode" value="transparent" /><embed src="http://www.youtube.com/v/TA4hm97m494" type="application/x-shockwave-flash" wmode="transparent" width="200" height="100"></embed></object>',	
	
	'ABBC3_LISTB_MOVER'			=> 'Liste à puces',
	'ABBC3_LISTB_TIP'			=> ' [list]Texte[/list] Note : Utilisez [*] pour créer les puces',
	'ABBC3_LISTB_VIEW'			=> '<ul><li>Item1</li><li>Item2</li><li>Item3</li></ul>',	
	
	'ABBC3_LISTO_MOVER'			=> 'Liste ordonnée',
	'ABBC3_LISTO_TIP'			=> ' [list=1|a]Texte[/list] Note : Utilisez [*] pour créer les puces',
	'ABBC3_LISTO_VIEW'			=> '<ol style="list-style-type: lower-alpha"><li>Item1</li><li>Item2</li><li>Item3</li></ol>',	
	
	'ABBC3_HR_MOVER'			=> 'Ligne de séparation',
	'ABBC3_HR_TIP'				=> ' [hr] Note: Crééz une ligne pour séparer du Texte',
	'ABBC3_HR_VIEW'				=> '<hr noshade color="#000000" size="1px">',	
	
	'ABBC3_CUT_MOVER'			=> 'Supprimez le texte sélectionné',
	'ABBC3_CUT_TIP'				=> '', // We don't need this. But "phpbb3 @define('DEBUG', true);" yes .
	
	'ABBC3_COPY_MOVER'			=> 'Copiez le Texte sélectionné',
	'ABBC3_COPY_TIP'			=> '', // We don't need this. But "phpbb3 @define('DEBUG', true);" yes .
	
	'ABBC3_PASTE_MOVER'			=> 'Collez le Texte sélectionné',
	'ABBC3_PASTE_TIP'			=> '', // We don't need this. But "phpbb3 @define('DEBUG', true);" yes .
	
	'ABBC3_PLAIN_MOVER'			=> 'Supprimez les balises bbcodes du Texte sélectionné',
	'ABBC3_PLAIN_TIP'			=> '', // We don't need this. But "phpbb3 @define('DEBUG', true);" yes .
	
	'ABBC3_PASTE_ERROR'			=> 'Veuillez d’abord copier le Texte, puis le coller',
	'ABBC3_NOSELECT_ERROR'		=> 'Veuillez d’abord sélectionner le Texte',	

	// Wizard texts
	'ABBC3_ERROR'				=> 'Erreur : ',
	'ABBC3_ERROR_TAG'			=> 'Erreur inattendue en utilisant le tag : ',
	
	'ABBC3_ID'					=> 'Entrez l’identifiant :',
	'ABBC3_NOID'				=> 'Vous n’avez pas saisi l’identifiant',
	'ABBC3_LINK'				=> 'Entrez le lien pour ',
	'ABBC3_DESC'				=> 'Entrez la description pour ',
	'ABBC3_NAME'				=> 'Description',
	'ABBC3_NOLINK'				=> 'Vous n’avez pas entré de lien pour ',
	'ABBC3_NODESC'				=> 'Vous n’avez pas entré de description pour ',
	'ABBC3_WIDTH'				=> 'Entrez la largeur',
	'ABBC3_WIDTH_NOTE'			=> 'Note : La valeur peut être exprimée en pourcentage',
	'ABBC3_NOWIDTH'				=> 'Vous n’avez pas entré de largeur',
	'ABBC3_HEIGHT'				=> 'Entrez la hauteur',
	'ABBC3_HEIGHT_NOTE'			=> 'Note : La valeur peut être exprimée en pourcentage',
	'ABBC3_NOHEIGHT'			=> 'Vous n’avez pas entré de hauteur',
	
	'ABBC3_ED2K_TAG'			=> 'ed2k',
	'ABBC3_ED2K_NOTE' 			=> '', //'Exemple: ed2k://|file|Robin.Hood.S02E01.Sisterhood.HDTV.XviD-BiA.avi|367335424|6EB031138DE4A80997A13C272760202F|h=CJZXHKH25ZONIMWVUOENVQKJSZDV5JI6|/',
	'ABBC3_ED2K_ADD'			=> 'Ajoutez les liens sélectionnés à votre serveur ED2K',

	'ABBC3_URL_TAG'				=> 'page',
	'ABBC3_URL_NOTE' 			=> 'Exemple: http://www.google.com',

	'ABBC3_WEB_TAG'				=> 'web',
	'ABBC3_WEB_NOTE'			=> 'Exemple: http://www.google.com',

	'ABBC3_EMAIL_TAG'			=> 'email',
	'ABBC3_EMAIL_NOTE' 			=> 'Exemple: user@server.ext',
	
	'ABBC3_IMG_TAG'				=> 'image',
	'ABBC3_IMG_NOTE'			=> 'Exemple: http://www.google.com/intl/en_com/images/logo_plain.png',

	'ABBC3_THUMB_TAG'			=> 'thumbnail',
	'ABBC3_THUMB_NOTE'			=> 'Exemple: http://www.google.com/intl/en_com/images/logo_plain.png',
	
	'ABBC3_FLASH_TAG'			=> 'flash',
	'ABBC3_FLASH_NOTE'			=> 'Exemple: http://www.adobe.com/support/flash/ts/documents/test_version/version.swf',
	
	'ABBC3_VIDEO_TAG'			=> 'video',
	'ABBC3_VIDEO_NOTE'			=> '', //'Exemple: ???',
	
	'ABBC3_STREAM_TAG'			=> 'sound',
	'ABBC3_STREAM_NOTE'			=> '', //'Exemple: ???',
	
	'ABBC3_RAM_TAG'				=> 'Real Media',
	'ABBC3_RAM_NOTE'			=> '', //'Exemple: ???',

	'ABBC3_QUICKTIME_TAG'		=> 'Quick time',
	'ABBC3_QUICKTIME_NOTE'		=> 'Exemple: http://www.nature.com/neuro/journal/v3/n3/extref/Li_control.mov.qt' . '<br/>' .'http://www.carnivalmidways.com/images/Music/thisisatest.mp3',
	
	'ABBC3_STAGE6_TAG'			=> 'Stage6 Video',
	'ABBC3_STAGE6_NOTE'			=> 'Exemple: 2068715',
	
	'ABBC3_GVIDEO_TAG'			=> 'Google Video',
	'ABBC3_GVIDEO_NOTE'			=> 'Exemple: http://video.google.com/videoplay?docid=-8351924403384451128',
	
	'ABBC3_YOUTUBE_TAG'			=> 'Youtube Video',
	'ABBC3_YOUTUBE_NOTE'		=> 'Exemple : (http://www.youtube.com/watch?v=)aabbcc12',

	'ABBC3_TABLE_STYLE'			=> 'Entrez les paramètres du tableau',
	'ABBC3_TABLE_NOTE'			=> 'Exemple: width:50%;border:1px solid #ccccc;',
	'ABBC3_ROW_NUMBER'			=> 'Entrez le nombre de lignes',
	'ABBC3_ROW_ERROR'			=> 'Vous n’avez pas spécifié le nombre de lignes',
	'ABBC3_ROW_STYLE'			=> 'Entrez les paramètres des lignes',
	'ABBC3_ROW_NOTE'			=> 'Exemple: text-align:center;',
	'ABBC3_CELL_NUMBER'			=> 'Entrez le nombre de colonnes',
	'ABBC3_CELL_ERROR'			=> 'Vous n’avez pas spécifié le nombre de colonnes',
	'ABBC3_CELL_STYLE'			=> 'Entrez les paramètres des colonnes',
	'ABBC3_CELL_NOTE'			=> 'Exemple: border:1px solid #ccccc;',

	'ABBC3_GRAD_MIN_ERROR'		=> 'Veuillez d’abord sélectionner le Texte : ',
	'ABBC3_GRAD_MAX_ERROR'		=> 'Seuls 120 caractères sont autorisés : ',
	
	'SPOILER_SHOW'				=> 'Montrez le Spoiler',
	'SPOILER_HIDE'				=> 'Cachez le Spoiler',
	
	// Custom bbcodes

	// MOD : add-on hide bbcode - START
	// [hide]text[/hide] Code..
	'ABBC3_HIDE_MOVER'			=> 'Message caché',
	'ABBC3_HIDE_TIP'			=> ' [hide]Message[/hide]',
	'ABBC3_HIDE_VIEW'			=> '<dl class="hidebox"><dt class="hide">HIDE : Activé</dt><dd>Vous devez répondre à ce topic avant de pouvoir voir le message caché</dd></dl>',
	// MOD : add-on hide bbcode - END

	// MOD : add-on Dailymotion bbcode - START
	'ABBC3_DMOTION_MOVER'		=> 'Insérez une vidéo de Dailymotion', // from http://www.dailymotion.com/
	'ABBC3_DMOTION_TIP'			=> ' [dm]ID Dailymotion ID (après swf/(ID))[/dm]',
	'ABBC3_DMOTION_VIEW'		=> '<object width="200" height="100"><param name="movie" value="http://www.dailymotion.com/swf/x3hm7o" /><param name="allowFullScreen" value="true" /><param name="allowScriptAccess" value="never" /><embed src="http://www.dailymotion.com/swf/x3hm7o" type="application/x-shockwave-flash" width="200" height="100" allowFullScreen="true" allowScriptAccess="never"></embed></object>',
	// MOD : add-on Dailymotion bbcode - END

	// MOD : add-on Moderator bbcode - START
	'ABBC3_MODERATOR_MOVER'		=> 'Message Modérateur',
	'ABBC3_MODERATOR_TIP'		=> ' [mod=name]Texte[/mod]',
	'ABBC3_MODERATOR_VIEW'		=> '<table id="ModTable" width="100%" cellspacing="5" cellpadding="0" border="0" align="center"><tr><td class="row1" rowspan="2" align="middle" vAlign="center" width="1%"><span class="exclamation" title="Moderator warning">&nbsp;!&nbsp;</span></td><td class="row2"><span class="genmed"><b>Mod Name:</b></span></td></tr><tr><td>Voici un exemple de texte</td></tr></table>',
	// MOD : add-on Moderator bbcode - END
	
	// MOD : add-on Veoh bbcode - START
	'ABBC3_VEOH_MOVER'			=> 'Insérez une vidéo de Veoh',
	'ABBC3_VEOH_TIP'			=> ' [veoh]URL vidéo[/veoh].',
	'ABBC3_VEOH_TAG'			=> ' Veoh.',
	'ABBC3_VEOH_NOTE'			=> 'Example: http://www.veoh.com/videos/v1409404EqT5SJjM.',
	'ABBC3_VEOH_VIEW'			=> '<embed src="http://www.veoh.com/videodetails2.swf?permalinkId=v1409404EqT5SJjM&id=anonymous&player=videodetailsembedded&videoAutoPlay=0" allowFullScreen="true" width="200" height="100" bgcolor="#000000" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>',
	// MOD : add-on Veoh bbcode - END
	
	// MOD : add-on offtopic bbcode - START
	'ABBC3_OFFTOPIC'			=> 'Off topic',
	'ABBC3_OFFTOPIC_MOVER'		=> 'Insérez un texte hors-sujet',
	'ABBC3_OFFTOPIC_TIP'		=> ' [offtopic]Texte[/offtopic]',
	'ABBC3_OFFTOPIC_VIEW'		=> '<i><b><font color="#114499">Offtopic: </font></b><br/><font color="#2277DD">Voici un exemple de texte</font></i>',
	// MOD : add-on offtopic bbcode - END

	// MOD : add-on Gamespot bbcode - START
	// [gamespot] Gamespot video URL [gamespot] Code..
	'ABBC3_GAMESPOT_MOVER'		=> 'Insérez une vidéo de Gamespot',
	'ABBC3_GAMESPOT_TIP'		=> ' [gamespot]URL vidéo Gamespot[gamespot] Exemple : http://www.gamespot.com/video/944074/6185798/tom-clancys-rainbow-six-vegas-2-official-trailer-3',
	'ABBC3_GAMESPOT_VIEW'		=> '<embed id="mymovie" width="200" height="100" flashvars="paramsURI=http%3A%2F%2Fwww%2Egamespot%2Ecom%2Fpages%2Fvideo%5Fplayer%2Fproteus%5Fxml%2Ephp%3Fadseg%3D%26adgrp%3D%26sid%3D6185798%26pid%3D944074%26mb%3D%26onid%3D%26nc%3D1202626246593%26embedded%3D1%26showWatermark%3D0%26autoPlay%3D0" allowfullscreen="true" allowscriptaccess="never" quality="high" name="mymovie" src="http://image.com.com/gamespot/images/cne_flash/production/media_player/proteus/gs/proteus_embed.swf" type="application/x-shockwave-flash"/>',
	// MOD : add-on Gamespot bbcode - END

	// MOD : add-on Gamespot bbcode - START
	'ABBC3_GAMETRAILERS_MOVER'	=> 'Insérez une vidéo de Gametrailers',
	'ABBC3_GAMETRAILERS_TIP'	=> ' [gametrailers]URL vidéo Gametrailers[/gametrailers] Exemple : http://www.gametrailers.com/player/30461.html',
	'ABBC3_GAMETRAILERS_VIEW'	=> '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"  codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" id="gtembed" width="200" height="100"><param name="allowScriptAccess" value="never" /><param name="allowFullScreen" value="true" /><param name="movie" value="http://www.gametrailers.com/remote_wrap.php?mid=30461" /><param name="quality" value="high" /><embed src="http://www.gametrailers.com/remote_wrap.php?mid=30461" swLiveConnect="true" name="gtembed" align="middle" allowScriptAccess="never" allowFullScreen="true" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="200" height="100"></embed></object>',
	// MOD : add-on Gamespot bbcode - END

	// MOD : add-on IGN video bbcode - START
	'ABBC3_IGNVIDEO_MOVER'		=> 'Insérez une vidéo d’Ign',
	'ABBC3_IGNVIDEO_TIP'		=> ' [ignvideo]URL vidéo ING[/ignvideo] Exemple : object_ID=967025&downloadURL=http://tvmovies.ign.com/tv/video/article/850/850894/knightrider_trailer_020808_flvlow.flv',
	'ABBC3_IGNVIDEO_VIEW'		=> 	'<embed src="http://videomedia.ign.com/ev/ev.swf" flashvars="object_ID=967025&downloadURL=http://tvmovies.ign.com/tv/video/article/850/850894/knightrider_trailer_020808_flvlow.flv" type="application/x-shockwave-flash" width="200" height="100" ></embed>',
	// MOD : add-on IGN video bbcode - END


	// MOD : add-on liveleak bbcode - START
	'ABBC3_LIVELEAK_MOVER'		=> 'Insérez une vidéo de Liveleak',
	'ABBC3_LIVELEAK_TIP'		=> ' [liveleak]URL vidéo Liveleak[/liveleak] Exemple : http://www.liveleak.com/view?i=413_1202590393',
	'ABBC3_LIVELEAK_VIEW'		=> '<object type="application/x-shockwave-flash" width="200" height="100" wmode="transparent" data="http://www.liveleak.com/player.swf?autostart=false&token=i=413_1202590393"><param name="movie" value="http://www.liveleak.com/player.swf?autostart=false&token=$1" /><param name="wmode" value="transparent" /><param name="quality" value="high" /></object>',
	// MOD : add-on liveleak bbcode - End

	// MOD : add-on NFO bbcode - START
	'ABBC3_NFO_MOVER'			=> 'Texte en NFO (Meilleur avec Internet Explorer)',
	'ABBC3_NFO_TIP'				=> ' [nfo]Texte NFO[/nfo]',
	'ABBC3_NFO_VIEW'			=> '<table cellspacing="0" cellpadding="0" border="0" ><tr><td><span class="genmed"><b>NFO:</b></span></td></tr><tr><td class="nfo">' . str_replace(" ", "&nbsp;", '    ² ÛÛÛÛ ÛÛ±±°                                  °°°±±±±²²²ÛÛÛÛÛÛÛÛÛÛÛ  Û   ÛÛ ÛÛÛ') . '</td></tr></table>',
	// MOD : add-on NFO bbcode - End

	// [glow=color]Text[/glow] Code..
	'ABBC3_GLOW_MOVER'			=> 'Texte avec Glow (Seulement avec Internet Explorer)',
	'ABBC3_GLOW_TIP'			=> ' [glow=(color)]Texte[/glow]',
	'ABBC3_GLOW_VIEW'			=> '<div style="filter:Glow(color=red,strength=4);color:#ffffff;height:110%">Voici un exemple de texte</div>',
	// MOD : add-on glow bbcode - END

	// MOD : add-on shadow bbcode - START
	'ABBC3_SHADOW_MOVER'		=> 'Texte avec Shadow (Seulement avec Internet Explorer)',
	'ABBC3_SHADOW_TIP'			=> ' [shadow=(color)]Texte[/shadow]',
	'ABBC3_SHADOW_VIEW'			=> '<div style="filter:shadow(color=black,strength=4);color:blue;height:110%">Voici un exemple de texte</div>',
	// MOD : add-on shadow bbcode - End

	// MOD : add-on dropshadow bbcode - START
	'ABBC3_DROPSHADOW_MOVER'	=> 'Texte avec Dropshadow (Seulement avec Internet Explorer)',
	'ABBC3_DROPSHADOW_TIP'		=> ' [dropshadow=(color)]Texte[/dropshadow]',
	'ABBC3_DROPSHADOW_VIEW'		=> '<div style="filter:dropshadow(color=#999999,strength=4);color:blue;height:110%">Voici un exemple de texte</div>',
	// MOD : add-on dropshadow bbcode - End

	// MOD : add-on Blur bbcode - START
	'ABBC3_BLUR_MOVER'			=> 'Texte avec Blur (Seulement avec Internet Explorer)',
	'ABBC3_BLUR_TIP'			=> ' [blur=(color)]Texte[/blur]',
	'ABBC3_BLUR_VIEW'			=> '<div style="filter:Blur(strength=7);color:blue;height:110%">Voici un exemple de texte</div>',
	// MOD : add-on Blur bbcode - End

	// MOD : add-on Wave bbcode - START
	'ABBC3_WAVE_MOVER'			=> 'Texte en vague (Seulement avec Internet Explorer)',
	'ABBC3_WAVE_TIP'			=> ' [wave=(color)]Texte[/wave]',
	'ABBC3_WAVE_VIEW'			=> '<div style="filter:Wave(strength=2);color:blue;height:110%">Voici un exemple de texte</div>',
	// MOD : add-on Wave bbcode - End

	// MOD : add-on Search bbcode - START
	'ABBC3_SEARCH_MOVER'		=> 'Insérez la recherche de mot',
	'ABBC3_SEARCH_TIP'			=> ' [search(=(msn|yahoo|google))]Texte[/search]',
	'ABBC3_SEARCH_VIEW'			=> $lang['SEARCH_MINI'] . $config['sitename'] . ' :  <a href="search.php?keywords=Advanced BBcode box 3">"Advanced BBcode Box 3" </a><br/<br/>' . $lang['SEARCH_MINI'] . 'msn :  <a href="http://search.live.com/results.aspx?q=Advanced BBcode box 3&mkt=tr-TR&lf=1" target="_blank">"Advanced BBcode Box 3" </a><br/><br/>' .$lang['SEARCH_MINI'] . 'yahoo :  <a href="http://search.yahoo.com/search?p=Advanced BBcode box 3" target="_blank">"Advanced BBcode Box 3" </a><br/><br/>' . $lang['SEARCH_MINI'] . 'google : <a href="http://www.google.com.tr/search?q=Advanced BBcode box 3" target="_blank">"Advanced BBcode Box 3" </a>',
	// MOD : add-on Search bbcode - End																																	 //[search(=(msn|yahoo|google))?\](.*?)\[\/search\]

	// MOD : add-on Attach - START
	'ABBC3_ATTACH_TITLE'			=> 'Advanced BBCode box 3 :: Page d’upload de fichiers',
	'ABBC3_ATTACH_MOVER'			=> 'Uploadez un fichier',
	'ABBC3_ATTACH_LINK'				=> 'Il s’agit du lien de votre fichier uploadé',
	'ABBC3_ATTACH_UPLOADED'			=> 'Attachement %s réussi !',
	'ABBC3_ATTACH_NOT_UPLOADED'		=> 'L’attachement %s n’a pu être uploadé.',
//	'ABBC3_ATTACH_ALREADY'			=> 'Attach %s already exist, please choose an alternative or rename your file and try again.',
	'ABBC3_ATTACH_ERROR'			=> 'L’attachement n’a pu être uploadé vers to %s. Code d’erreur en retour : %d',
	'ABBC3_ATTACH_EXTENSION'		=> 'Extensions valides',
	'ABBC3_ATTACH_DISABLED'			=> 'L’extension d’attachement %s n’est pas autorisée.',
	'ABBC3_ATTACH_SIZE'				=> 'La taille de l’attachement %d est trop grosse. La taille maximale autorisée est de  %d MB.',
	'ABBC3_ATTACH_EMPTY'			=> 'Le fichier d’attachement est vide. Veuillez d’abord sélectionner un fichier',
	// MOD : add-on Attach - END
	
));

?>