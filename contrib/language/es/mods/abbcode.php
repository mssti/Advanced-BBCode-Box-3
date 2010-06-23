<?php
/**
* @package: phpBB3 :: Advanced BBCode box 3 -> language [es][Spanish]
* @version: $Id: abbcode.php, v 1.0.8 2008/03/31 03:01:00 leviatan21 Exp $
* @copyright: leviatan21 < info@mssti.com > (Gabriel) http://www.mssti.com/phpbb3/
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
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
// Reference : http://www.phpbb.com/mods/documentation/phpbb-documentation/language/index.php#lang-use-php

$lang = array_merge($lang, array(
// Help page
	'ABBC3_HELP_TITLE'			=> 'Advanced BBCode box 3 :: P√°gina de ayuda',
	'ABBC3_HELP_DESC'			=> 'Descripci√≥n',
	'ABBC3_HELP_WRITE'			=> 'Usted escribe',
	'ABBC3_HELP_VIEW'			=> 'Se muestra',
	'ABBC3_HELP_ABOUT'			=> 'Advanced BBCode Box 3 por <a href="http://www.mssti.com/phpbb3">mssti</a>',
	'ABBC3_HELP_ALT'			=> 'Advanced BBCode Box 3 (aka ABBC3)',
	
// Image Resizer JS - Start
	'ABBC3_RESIZE_SMALL'		=> 'Click en esta barra para ver la imagen completa.',
	'ABBC3_RESIZE_FILESIZE'		=> 'Esta imagen ha sido redimensionada. Click en esta barra para ver la imagen completa. El tama√±o original es %1$sx%2$s y pesa %3$sKB.',
	'ABBC3_RESIZE_NOFILESIZE'	=> 'Esta imagen ha sido redimensionada. Click en esta barra para ver la imagen completa. El tama√±o original es %1$sx%2$s',
	'ABBC3_RESIZE_FULLSIZE'		=> 'Click en esta barra para ver la imagen achicada.',
	
// Text to be applied to the helpline & mouseover & help page & Wizard texts
	'BBCODE_STYLES_TIP'			=> 'Consejo: Pueden aplicarse estilos r√°pidamente al texto seleccionado.',
	
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
	
	'ABBC3_NOTE'				=> 'Nota',
	'ABBC3_EXAMPLE'				=> 'Ejemplo',
	'ABBC3_EXAMPLES'			=> 'Ejemplos',

// bbcodes texts	
	// Font Type Dropdown
	'ABBC3_FONTTYPE_MOVER'		=> 'Tipo de fuente',
	'ABBC3_FONTTYPE_TIP'		=> '[font=Comic Sans MS]texto[/font]',
	'ABBC3_FONTTYPE_NOTE'		=> 'Nota: Puede usar su propia familia de fuentes',
	'ABBC3_FONTTYPE_VIEW'		=> '<span style="font-family:Comic Sans MS">Esto es una muestra de texto</span>',
	
	// Font Size Dropdown
	'ABBC3_FONT_GIANT'			=> 'Gigante',
	'ABBC3_FONTSIZE_MOVER'		=> 'Tama√±o de texto',
	'ABBC3_FONTSIZE_TIP'		=> '[size=150]texto grande[/size]',
	'ABBC3_FONTSIZE_NOTE'		=> 'Nota: el valor debe ser expresado en porcentaje',
	'ABBC3_FONTSIZE_VIEW'		=> '<span style="font-size: 150%; line-height: 116%;">Esto es una muestra de texto</span>',
	
	// Highlight Font Color Dropdown
	'ABBC3_FONTHILI_MOVER'		=> 'Texto Resaltado',
	'ABBC3_FONTHILI_TIP'		=> '[highlight=yellow]texto[/highlight]',
	'ABBC3_FONTHILI_NOTE'		=> 'Nota: puede usar colores HTML (color=#FF0000 o color=red',
	'ABBC3_FONTHILI_VIEW'		=> '<span style="background-color: yellow;">Esto es una muestra de texto</span>',
	
	// Font Color Dropdown
	'ABBC3_FONTCOLOR_MOVER'		=> 'Color de texto',
	'ABBC3_FONTCOLOR_TIP'		=> '[color=red]texto[/color]',
	'ABBC3_FONTCOLOR_NOTE'		=> 'Nota: puede usar colores HTML (color=#FF0000 o color=red)',
	'ABBC3_FONTCOLOR_VIEW'		=> '<span style="color:red">Esto es una muestra de texto</span>',
	
	// Cut selected text
	'ABBC3_CUT_MOVER'			=> 'Borrar el texto seleccionado',
	// Copy selected text
	'ABBC3_COPY_MOVER'			=> 'Copiar el texto seleccionado',
	// Paste previously copy text	
	'ABBC3_PASTE_MOVER'			=> 'Pegar el texto copiado',
	'ABBC3_PASTE_ERROR'			=> 'Por favor, primero copie un texto, luego peguelo ',
	// Remove BBCode (Removes all BBCode tags from selected text)
	'ABBC3_PLAIN_MOVER'			=> 'Quitar las etiquetas BBCodes del texto seleccionado',
	'ABBC3_NOSELECT_ERROR'		=> 'Por favor, primero seleccione el texto ',
	
	// Code
	'ABBC3_CODE_MOVER'			=> 'C√≥digo',
	'ABBC3_CODE_TIP'			=> '[code]texto c√≥digo[/code]',
	'ABBC3_CODE_VIEW'			=> '<dl class="codebox"><dt>'. $lang['CODE'] .': <a href="#" onclick="selectCode(this); return false;">'. $lang['SELECT_ALL_CODE'] .'</a></dt><dd><code>Esto es una muestra de texto</code></dd></dl>',
	
	// Quote
	'ABBC3_QUOTE_MOVER'			=> 'Citar',
	'ABBC3_QUOTE_TIP'			=> '[quote]texto[/quote] o [quote=\"miembro\"]texto[/quote]',
	'ABBC3_QUOTE_VIEW'			=> '<blockquote><div><cite>miembro '. $lang['WROTE'] .':</cite>Esto es una muestra de texto</div></blockquote>',
	
	// Spoiler
	'ABBC3_SPOIL_MOVER'			=> 'Ocultar texto',
	'ABBC3_SPOIL_TIP'			=> '[spoil]texto[/spoil]',
	'ABBC3_SPOIL_VIEW'			=> '<div class="spoilwrapper"><div class="spoiltitle"><input class="btnspoil" type="button" value="Ver el Spoiler" onClick="javascript:if (this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display != \'\') { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'\'; this.innerText = \'\'; this.value = \'Ocultar el Spoiler\'; } else { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'none\'; this.innerText = \'\'; this.value = \'Ver el Spoiler\'; }" onfocus="this.blur();"></div><div class="spoilcontent"><div style="display: none;">Esto es una muestra de texto</div></div></div>',
	'SPOILER_SHOW'				=> 'Ver el Spoiler',
	'SPOILER_HIDE'				=> 'Ocultar el Spoiler',
	
	// Hide tag
	'ABBC3_HIDE_MOVER'			=> 'Ocultar el mensage',
	'ABBC3_HIDE_TIP'			=> '[hide]mensage[/hide]',
	'ABBC3_HIDE_VIEW'			=> '<dl class="hidebox"><dt class="hide">Mensaje Oculto:</dt><dd>Tienes que responder a este tema para ver el mensaje oculto.</dd></dl>',

	// Moderator tag
	'ABBC3_MODERATOR_MOVER'		=> 'Mensaje del moderator',
	'ABBC3_MODERATOR_TIP'		=> '[mod=nombre]texto[/mod]',
	'ABBC3_MODERATOR_VIEW'		=> '<table id="ModTable" width="100%" cellspacing="5" cellpadding="0" border="0" align="center"><tr><td class="row1" rowspan="2" align="middle" vAlign="center" width="1%"><span class="exclamation" title="Moderator warning" style="font-size:25px">&nbsp;!&nbsp;</span></td><td class="row2"><span class="genmed"><b>Mod Name:</b></span></td></tr><tr><td>Esto es una muestra de texto</td></tr></table>',
	
	// Off topic tag
	'ABBC3_OFFTOPIC'			=> 'Fuera de tema',
	'ABBC3_OFFTOPIC_MOVER'		=> 'Insertar texto fuera de tema',
	'ABBC3_OFFTOPIC_TIP'		=> '[offtopic]texto[/offtopic]',
	'ABBC3_OFFTOPIC_VIEW'		=> '<i><b><font color="#114499">Fuera de tema: </font></b><br/><font color="#2277DD">Esto es una muestra de texto</font></i>',
	
	// NFO
	'ABBC3_NFO_MOVER'			=> 'Texto NFO (Mejor vista en Internet explorer)',
	'ABBC3_NFO_TIP'				=> '[nfo]Texto NFO[/nfo]',
	'ABBC3_NFO_VIEW'			=> '<table cellspacing="0" cellpadding="0" border="0" ><tr><td><span class="genmed"><b>NFO:</b></span></td></tr><tr><td class="nfo">' . str_replace(" ", "&nbsp;", '    ≤ €€€€ €€±±∞                                  ∞∞∞±±±±≤≤≤€€€€€€€€€€€  €   €€ €€€') . '</td></tr></table>',
	
	// Justify Align
	'ABBC3_JUSTIFY_MOVER'		=> 'Texto justificado',
	'ABBC3_JUSTIFY_TIP'			=> '[align=justify]texto[/align]',
	'ABBC3_JUSTIFY_VIEW'		=> '<div style="text-align:justify">Esto es una muestra de texto</div>',

	// Right Align
	'ABBC3_RIGHT_MOVER'			=> 'Texto alineado a la derecha',
	'ABBC3_RIGHT_TIP'			=> '[align=right]texto[/align]',
	'ABBC3_RIGHT_VIEW'			=> '<div style="text-align:right">Esto es una muestra de texto</div>',

	// Center Align
	'ABBC3_CENTER_MOVER'		=> 'Texto alineado al centro',
	'ABBC3_CENTER_TIP'			=> '[align=center]texto[/align]',
	'ABBC3_CENTER_VIEW'			=> '<div style="text-align:center">Esto es una muestra de texto</div>',

	// Left Align
	'ABBC3_LEFT_MOVER'			=> 'Texto alineado a la izquierda',
	'ABBC3_LEFT_TIP'			=> '[align=left]texto[/align]',
	'ABBC3_LEFT_VIEW'			=> '<div style="text-left:justify">Esto es una muestra de texto</div>',

	// Preformat
	'ABBC3_PRE_MOVER'			=> 'Texto preformateado',
	'ABBC3_PRE_TIP'				=> '[pre]texto[/pre]',
	'ABBC3_PRE_VIEW'			=> '<pre>Esto es una muestra de texto</pre>',

	// Tab
	'ABBC3_TAB_MOVER'			=> 'Insertar tabulaci√≥n',
	'ABBC3_TAB_TIP'				=> '[tab=nn]',
	'ABBC3_TAB_NOTE'			=> 'Introduzca un n√∫mero que ser√° el margen, medido en pixels.',
	'ABBC3_TAB_VIEW'			=> '<span style="margin-left:20px;"></span>Esto es una muestra de texto',

	// Superscript
	'ABBC3_SUP_MOVER'			=> 'Texto super√≠ndice',
	'ABBC3_SUP_TIP'				=> '[sup]texto[/sup]',
	'ABBC3_SUP_VIEW'			=> '<sup>Esto es una muestra de texto</sup>',

	// Subscript
	'ABBC3_SUB_MOVER'			=> 'Texto sub√≠ndice',
	'ABBC3_SUB_TIP'				=> '[sub]texto[/sub]',
	'ABBC3_SUB_VIEW'			=> '<sub>Esto es una muestra de texto</sub>',

	// Bold
	'ABBC3_BOLD_MOVER'			=> 'Texto en negrita',
	'ABBC3_BOLD_TIP'			=> '[b]texto[/b]',
	'ABBC3_BOLD_VIEW'			=> '<strong>Esto es una muestra de texto</strong>',

	// Italic
	'ABBC3_ITALIC_MOVER'		=> 'Texto en it√°lica',
	'ABBC3_ITALIC_TIP'			=> '[i]texto[/i]',
	'ABBC3_ITALIC_VIEW'			=> '<em>This is a sample text</em>',

	// Underline
	'ABBC3_UNDERLINE_MOVER'		=> 'Texto subrayado',
	'ABBC3_UNDERLINE_TIP'		=> '[u]texto[/u]',
	'ABBC3_UNDERLINE_VIEW'		=> '<span style="text-decoration: underline">Esto es una muestra de texto</span>',

	// Strikethrough
	'ABBC3_STRIKE_MOVER'		=> 'Texto tachado',
	'ABBC3_STRIKE_TIP'			=> '[s]texto[/s]',
	'ABBC3_STRIKE_VIEW'			=> '<span style="text-decoration: line-through;">Esto es una muestra de texto</span>',

	// Text Fade
	'ABBC3_FADE_MOVER'			=> 'Texto descolorido',
	'ABBC3_FADE_TIP'			=> '[fade]texto[/fade]',
	'ABBC3_FADE_VIEW'			=> '<span class="fade_link">Esto es una muestra de texto</span> <script type="text/javascript">fade_ontimer()</script>',

	// Text Gradient
	'ABBC3_GRAD_MOVER'			=> 'Texto arcoiris',
	'ABBC3_GRAD_TIP'			=> '',
	'ABBC3_GRAD_VIEW'			=> '<span style="color: #FF0000">E</span><span style="color: #F60009">s</span><span style="color: #EC0013">t</span><span style="color: #E3001C">o</span> <span style="color: #D0002F">e</span><span style="color: #C60039">s</span> <span style="color: #B3004C">u</span><span style="color: #AA0055">n</span><span style="color: #A1005E">a</span> <span style="color: #8E0071">m</span><span style="color: #84007B">u</span><span style="color: #7B0084">e</span><span style="color: #71008E">s</span><span style="color: #680097">t</span><span style="color: #5E00A1">r</span><span style="color: #5500AA">a</span> <span style="color: #4200BD">d</span><span style="color: #3900C6">e</span> <span style="color: #2600D9">t</span><span style="color: #1C00E3">e</span><span style="color: #1300EC">x</span><span style="color: #0900F6">t</span><span style="color: #0000FF">o</span>',
	'ABBC3_GRAD_MIN_ERROR'		=> 'Por favor, primero seleccione el texto : ',
	'ABBC3_GRAD_MAX_ERROR'		=> 'Solo se permite un tama√±o inferior a 120 caracteres : ',
	
	// Glow text
	'ABBC3_GLOW_MOVER'			=> 'Texto Resplandor (S√≥lo en Internet explorer)',
	'ABBC3_GLOW_TIP'			=> '[glow=(color)]texto[/glow]',
	'ABBC3_GLOW_VIEW'			=> '<div style="filter:Glow(color=red,strength=4);color:#ffffff;height:110%">Esto es una muestra de texto</div>',
	
	// Shadow text
	'ABBC3_SHADOW_MOVER'		=> 'Texto doble (S√≥lo en Internet explorer)',
	'ABBC3_SHADOW_TIP'			=> '[shadow=(color)]texto[/shadow]',
	'ABBC3_SHADOW_VIEW'			=> '<div style="filter:shadow(color=black,strength=4);color:blue;height:110%">Esto es una muestra de texto</div>',
	
	// Dropshadow text
	'ABBC3_DROPSHADOW_MOVER'	=> 'Texto con sombra (S√≥lo en Internet explorer)',
	'ABBC3_DROPSHADOW_TIP'		=> '[dropshadow=(color)]texto[/dropshadow]',
	'ABBC3_DROPSHADOW_VIEW'		=> '<div style="filter:dropshadow(color=#999999,strength=4);color:blue;height:110%">Esto es una muestra de texto</div>',
	
	// Blur text
	'ABBC3_BLUR_MOVER'			=> 'Texto esfumado (S√≥lo en Internet explorer)',
	'ABBC3_BLUR_TIP'			=> '[blur=(color)]texto[/blur]',
	'ABBC3_BLUR_VIEW'			=> '<div style="filter:Blur(strength=7);color:blue;height:110%">Esto es una muestra de texto</div>',
	
	// Wave text
	'ABBC3_WAVE_MOVER'			=> 'Text ondeado(S√≥lo en Internet explorer)',
	'ABBC3_WAVE_TIP'			=> '[wave=(color)]texto[/wave]',
	'ABBC3_WAVE_VIEW'			=> '<div style="filter:Wave(strength=2);color:blue;height:110%">Esto es una muestra de texto</div>',
	
	// Unordered List
	'ABBC3_LISTB_MOVER'			=> 'Lista Desordenada',
	'ABBC3_LISTB_TIP'			=> '[list]texto[/list]',
	'ABBC3_LISTB_NOTE'			=> 'Nota: usted puede usar [*] para insertar puntos',
	'ABBC3_LISTB_VIEW'			=> '<ul><li>Item1</li><li>Item2</li><li>Item3</li></ul>',

	// Ordered List
	'ABBC3_LISTO_MOVER'			=> 'Lista Ordenada',
	'ABBC3_LISTO_TIP'			=> '[list=1|a]texto[/list]',
	'ABBC3_LISTO_NOTE'			=> 'Nota: usted puede usar [*] para insertar puntos',
	'ABBC3_LISTO_VIEW'			=> '<ol style="list-style-type: lower-alpha"><li>Item1</li><li>Item2</li><li>Item3</li></ol>',

	// List item
	'ABBC3_LISTITEM_MOVER'		=> 'Item de lista',
	'ABBC3_LISTITEM_TIP'		=> '[*]',
	'ABBC3_LISTITEM_NOTE'		=> 'Nota: Insertar puntos dentro de la lista.',
	
	// Line Break
	'ABBC3_HR_MOVER'			=> 'L√≠nea divisoria',
	'ABBC3_HR_TIP'				=> '[hr]',
	'ABBC3_HR_NOTE'				=> 'Nota: Crea una l√≠nea para separar texto.',
	'ABBC3_HR_VIEW'				=> '<hr noshade color="#000000" size="1px">',

	// Message Box text direction Left to Light
	'ABBC3_RTL_MOVER'			=> 'Texto con lectura derecha a izquierda',
	'ABBC3_RTL_TIP'				=> '[dir=rtl]texto[/dir]',
	'ABBC3_RTL_VIEW'			=> '<BDO dir="rtl">Esto es una muestra de texto</BDO>',

	// Message Box text direction right to Left
	'ABBC3_LTR_MOVER'			=> 'Texto con lectura izquierda a derecha',
	'ABBC3_LTR_TIP'				=> '[dir=ltr]texto[/dir]',
	'ABBC3_LTR_VIEW'			=> '<BDO dir="ltr">Esto es una muestra de texto</BDO>',

	// Marquee Down
	'ABBC3_MARQD_MOVER'			=> 'Desplazamiento de texto hacia abajo',
	'ABBC3_MARQD_TIP'			=> '[marq=down]texto[/marq]',
	'ABBC3_MARQD_VIEW'			=> '<marquee direction="down" scrolldelay="120" height="80px">Esto es una muestra de texto</marquee>',

	// Marquee Up
	'ABBC3_MARQU_MOVER'			=> 'Desplazamiento de texto hacia arriba',
	'ABBC3_MARQU_TIP'			=> '[marq=up]texto[/marq]',
	'ABBC3_MARQU_VIEW'			=> '<marquee direction="up" scrolldelay="120" height="80px">Esto es una muestra de texto</marquee>',

	// Marquee Right
	'ABBC3_MARQR_MOVER'			=> 'Desplazamiento de texto hacia la derecha',
	'ABBC3_MARQR_TIP'			=> '[marq=right]texto[/marq]',
	'ABBC3_MARQR_VIEW'			=> '<marquee direction="right" scrolldelay="120">Esto es una muestra de texto</marquee>',

	// Marquee Left
	'ABBC3_MARQL_MOVER'			=> 'Desplazamiento de texto hacia la izquierda',
	'ABBC3_MARQL_TIP'			=> '[marq=left]texto[/marq]',
	'ABBC3_MARQL_VIEW'			=> '<marquee direction="left" scrolldelay="120">Esto es una muestra de texto</marquee>',

	// Table row cell wizard
	'ABBC3_TABLE_MOVER'			=> 'Insertar una tabla',
	'ABBC3_TABLE_TIP'			=> '[table=(ccs style)][tr=(ccs style)][td=(ccs style)]text[/td][/tr][/table]',
	'ABBC3_TABLE_VIEW'			=> '<table style="width:50%;border:1px solid #cccccc;" cellspacing="0" cellpadding="0"><tr style="text-align:center;"><td style="border:1px solid #cccccc;">Esto es una muestra de texto</td></tr></table>',
	
	'ABBC3_TABLE_STYLE'			=> 'Introduzca estilo de tabla',
	'ABBC3_TABLE_EXAMPLE'		=> 'width:50%;border:1px solid #cccccc;',
	
	'ABBC3_ROW_NUMBER'			=> 'Introduzca cantidad de filas',
	'ABBC3_ROW_ERROR'			=> 'Usted no escribi√≥ la cantidad de filas',
	'ABBC3_ROW_STYLE'			=> 'Introduzca estilo de filas',
	'ABBC3_ROW_EXAMPLE'			=> 'text-align:center;',
	
	'ABBC3_CELL_NUMBER'			=> 'Introduzca cantidad de columnas',
	'ABBC3_CELL_ERROR'			=> 'Usted no escribi√≥ la cantidad de columnas',
	'ABBC3_CELL_STYLE'			=> 'Introduzca estilo de filas',
	'ABBC3_CELL_EXAMPLE'		=> 'border:1px solid #cccccc;',
	
	// Simple upload files
	'ABBC3_UPLOAD_TITLE'		=> 'Advanced BBCode box 3 :: Subir archivo',
	'ABBC3_UPLOAD_MOVER'		=> 'Subir archivo',
	'ABBC3_UPLOAD_LINK'			=> 'Este es el enlace a su archivo subido',
	'ABBC3_UPLOAD_UPLOADED'		=> 'Archivo subida %s con √©xito!',
	'ABBC3_UPLOAD_NOT_UPLOADED'	=> 'El archivo %s no pudo ser subido.',
	'ABBC3_UPLOAD_ALREADY'		=> 'El archivo %s ya existe, por favor elija otro o renombre su archivo e intente nuevamente',
	'ABBC3_UPLOAD_ERROR'		=> 'No se pudo subir el archivo %s. C√≥digo de error : %d',
	'ABBC3_UPLOAD_EXTENSION'	=> 'Extensiones disponibles',
	'ABBC3_UPLOAD_EXTENSION_EXPLAIN'	=> 'Puede a√±adir/modificar/eliminar formatos permitidos. Separe las extensiones con una coma(,)',
	'ABBC3_UPLOAD_DISABLED'		=> 'La extensi√≥n subida %s no est√° permitida.',
	'ABBC3_UPLOAD_SIZE'			=> 'Tama√±o m√°ximo.',
	'ABBC3_UPLOAD_NOSIZE'		=> 'El tama√±o del archivo %d es muy grande. El m√°ximo permitido es %d MB.',
	'ABBC3_UPLOAD_EMPTY'		=> 'No ha seleccionado archivo a subit, Por favor seleccione uno primero',
	
	// Hyperlink Wizard
	'ABBC3_URL_TAG'				=> 'p√°gina',
	'ABBC3_URL_MOVER'			=> 'Enlace Web',	
	'ABBC3_URL_TIP'				=> '[url]http://...[/url] o [url=http://...]Nombre de Web[/url]',
	'ABBC3_URL_EXAMPLE' 		=> 'http://www.google.com',
	'ABBC3_URL_VIEW'			=> '<a href="http://www.google.com" class="postlink">Google</a>',
	
	// Email Wizard
	'ABBC3_EMAIL_TAG'			=> 'correo electr√≥nico',
	'ABBC3_EMAIL_MOVER'			=> 'Correo electr√≥nico',
	'ABBC3_EMAIL_TIP'			=> '[email]nombre@servidor.ext[/email] o [email=nombre@servidor.ext]Mi correo[/email]',
	'ABBC3_EMAIL_EXAMPLE' 		=> 'user@server.ext',
	'ABBC3_EMAIL_VIEW'			=> '<a href="mailto:user@server.ext">user@server.ext</a>',
	
	// Ed2k link Wizard
	'ABBC3_ED2K_TAG'			=> 'ed2k',
	'ABBC3_ED2K_MOVER'			=> 'Enlace eD2K',
	'ABBC3_ED2K_TIP'			=> '[url]enlace ed2k[/url] o [url=enlace ed2k]Nombre ed2k[/url]',
	'ABBC3_ED2K_EXAMPLE'		=> 'ed2k://|file|The_Two_Towers-The_Purist_Edit-Trailer.avi|14997504|965c013e991ee246d63d45ea71954c4d|/',
	'ABBC3_ED2K_VIEW'			=> '<a href="ed2k://|file|The_Two_Towers-The_Purist_Edit-Trailer.avi|14997504|965c013e991ee246d63d45ea71954c4d|/" class="postlink">The_Two_Towers-The_Purist_Edit-Trailer.avi</a>',
	'ABBC3_ED2K_ADD'			=> 'Agregar los enlaces selecionados a su cliente ed2k',
	
	// Web included by iframe
	'ABBC3_WEB_TAG'				=> 'web',
	'ABBC3_WEB_MOVER'			=> 'Insertar p√°gina web en el mensaje',
	'ABBC3_WEB_TIP'				=> '[web width=200 height=100 ]URL p√°gina[/web]',
	'ABBC3_WEB_EXAMPLE'			=> 'http://www.google.com',
	'ABBC3_WEB_VIEW'			=> '<iframe width="100%" height="100" src="http://www.google.com" style="font-size: 2px;"></iframe><br/>',
	
	// Image Wizard
	'ABBC3_IMG_TAG'				=> 'imagen',
	'ABBC3_IMG_MOVER'			=> 'Insertar imagen',
	'ABBC3_IMG_TIP'				=> '[img=(left|center|right)]http://...[/img]',
	'ABBC3_IMG_EXAMPLE'			=> 'http://www.google.com/intl/en_com/images/logo_plain.png',
	'ABBC3_IMG_VIEW'			=> '<div align="center"><img src="http://www.google.com/intl/en_com/images/logo_plain.png" /></div>',
	
	// Thumbnail
	'ABBC3_THUMBNAIL_TAG'		=> 'miniatura',
	'ABBC3_THUMBNAIL_MOVER'		=> 'Insertar imagen miniatura',
	'ABBC3_THUMBNAIL_TIP'		=> '[thumbnail(=left|right)]http://...[/thumbnail]',
	'ABBC3_THUMBNAIL_EXAMPLE'	=> 'http://www.google.com/intl/en_com/images/logo_plain.png',
	'ABBC3_THUMBNAIL_VIEW'		=> '<a href="http://www.google.com/intl/en_com/images/logo_plain.png" rel="lightbox[]" alt="http://www.google.com/intl/en_com/images/logo_plain.png" title="" class="hoverbox"><img src="http://www.google.com/intl/en_com/images/logo_plain.png" border="0" width="100px" align="right"/></a>',
	
	// Imgshack
	'ABBC3_IMGSHACK_MOVER'		=> 'Insertar imagen desde imageshack',
	'ABBC3_IMGSHACK_TIP'		=> '[url=http://imageshack.us][img=http://...][/img][/url]',
	'ABBC3_IMGSHACK_VIEW'		=> '<a href="http://img207.imageshack.us/my.php?image=advancedbbcodebox3prosidd3.gif" class="postlink"><img src="http://img207.imageshack.us/img207/1773/advancedbbcodebox3prosidd3.th.gif" alt="Image" /></a>',
	
	// testlink
	'ABBC3_TESTLINK_TAG'		=> 'Inspector de enlace',
	'ABBC3_TESTLINK_MOVER'		=> 'Comprobar la validez de un archivo almacenado en el servidor p√∫blico',
	'ABBC3_TESTLINK_TIP'		=> '[testlink]http://rapidshare.com/files/...[/testlink]',
	'ABBC3_TESTLINK_NOTE'		=> 'Servidores validos:rapidshare,megaupload,megarotic,depositfiles,megashares.',
	'ABBC3_TESTLINK_EXAMPLE'	=> 'http://rapidshare.com/files/86587996/ABBC3_v108.zip.html',
	'ABBC3_TESTLINK_VIEW'		=> '<dl class="testlink"><dd><font color="red" size="4" >X</font>&nbsp;<a href="http://rapidshare.com/files/86587996/ABBC3_v108.zip.html" >http://rapidshare.com/files/86587996/ABBC3_v108.zip.html</a><br /></dd></dl>',
	'ABBC3_TESTLINK_GOOD'		=> 'Archivo encontrado el servidor !',
	'ABBC3_TESTLINK_WRONG'		=> 'Archivo no encontrado !',
	
	// Click counter
	'ABBC3_CLICK_TAG'			=> 'click',
	'ABBC3_CLICK_MOVER'			=> 'Insertar contador de Clicks',
	'ABBC3_CLICK_TIP'			=> '[click]http://...[/click] o [click=http://...]Nombre Web[/click] o [click][img]http://...[/img][/click]',
	'ABBC3_CLICK_EXAMPLE' 		=> 'http://www.google.com ' . '<br/>' . 'http://www.google.com/intl/en_com/images/logo_plain.png' ,
	'ABBC3_CLICK_VIEW'			=> '<a href="./click.php?id=1" >http://www.phpbb.com</a> ( Clicked 1 time )<br />',
	'ABBC3_CLICK_TIME'			=> '( Clickeado %d vez )',
	'ABBC3_CLICK_TIMES'			=> '( Clickeado %d veces )',
	
	// Search tag
	'ABBC3_SEARCH_MOVER'		=> 'Insertar enlace a buscador ',
	'ABBC3_SEARCH_TIP'			=> '[search(=(msn|yahoo|google))]texto[/search]',
	'ABBC3_SEARCH_VIEW'			=> $lang['SEARCH_MINI'] . ' ' . $config['sitename'] . ' : <a href="search.php?keywords=Advanced BBcode box 3">"Advanced BBcode box 3"</a><br/><br/>' . $lang['SEARCH_MINI'] . ' msn : <a href="http://search.live.com/results.aspx?q=Advanced BBcode box 3&mkt=tr-TR&lf=1" target="_blank">"Advanced BBcode box 3"</a><br/><br/>' .$lang['SEARCH_MINI'] . ' yahoo : <a href="http://search.yahoo.com/search?p=Advanced BBcode box 3" target="_blank">"Advanced BBcode box 3"</a><br/><br/>' . $lang['SEARCH_MINI'] . ' google : <a href="http://www.google.com.tr/search?q=Advanced BBcode box 3" target="_blank">"Advanced BBcode box 3"</a>',
	
	// BBvideo Wizard
	'ABBC3_BBVIDEO_TAG'			=> 'BBvideo',
	'ABBC3_BBVIDEO_MOVER'		=> 'Insertar video desde web',
	'ABBC3_BBVIDEO_TIP'			=> '[BBvideo]Video URL[/BBvideo]',
	'ABBC3_BBVIDEO_EXAMPLE'		=> 'http://www.youtube.com/watch?v=TA4hm97m494',
	'ABBC3_BBVIDEO_VIEW'		=> '<object width="200" height="100"><param name="movie" value="http://www.youtube.com/v/TA4hm97m494" /><param name="wmode" value="transparent" /><embed src="http://www.youtube.com/v/TA4hm97m494" type="application/x-shockwave-flash" wmode="transparent" width="200" height="100"></embed></object>',
	'ABBC3_BBVIDEO_FILE'		=> 'Formato del video',
	'ABBC3_BBVIDEO_VIDEO'		=> 'Video desde',
	
	// Custom bbcodes
	
));

?>