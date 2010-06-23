<?php
/**
* @package: phpBB3 :: Advanced BBCode box 3 -> language [es_ar][Spanish Argentina]
* @version: $Id: abbcode.php, v 1.0.10 2008/08/01 08:08:01 leviatan21 Exp $
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
	
// Image Resizer JS
	'ABBC3_RESIZE_SMALL'		=> 'Click en esta barra para ver la imagen completa.',
	'ABBC3_RESIZE_ZOOM_IN'		=> 'Ampliar (dimensiones reales : %1$ss x %2$s)',
	'ABBC3_RESIZE_CLOSE'		=> 'Cerrar',
	'ABBC3_RESIZE_ZOOM_OUT'		=> 'Reducir',
	'ABBC3_RESIZE_FILESIZE'		=> 'Esta imagen ha sido redimensionada. Click en esta barra para ver la imagen completa. El tama√±o original es %1$s x %2$s y pesa %3$sKB.',
	'ABBC3_RESIZE_NOFILESIZE'	=> 'Esta imagen ha sido redimensionada. Click en esta barra para ver la imagen completa. El tama√±o original es %1$s x %2$s',
	'ABBC3_RESIZE_FULLSIZE'		=> 'Imagen achicadaa : %1$s % de su tama√±o original [ %2$s x %3$s ]',
	'ABBC3_RESIZE_NUMBER'		=> 'Imagen %1$s de %2$s',
	'ABBC3_RESIZE_PLAY'			=> 'Comenzar Proyetor autom√°tico',
	'ABBC3_RESIZE_PAUSE'		=> 'Detener Proyetor autom√°tico',

	'ABBC3_POPBOX_REVERSETEXT'	=> 'Clic en la imagen para reducirla.',

// Highslide JS - http://vikjavev.no/highslide/forum/viewtopic.php?t=2119
	'ABBC3_HIGHSLIDE_LOADINGTEXT'		=> 'Cargando...',
	'ABBC3_HIGHSLIDE_LOADINGTITLE'		=> 'Click para cancelar',
	'ABBC3_HIGHSLIDE_FOCUSTITLE'		=> 'Click para traer al frente',
	'ABBC3_HIGHSLIDE_FULLEXPANDTITLE'	=> 'Expandir al tama√±o actual',
	'ABBC3_HIGHSLIDE_FULLEXPANDTEXT'	=> 'Tama√±o real',
	'ABBC3_HIGHSLIDE_CREDITSTEXT'		=> 'Potenciado por <i>Highslide JS</i>',
	'ABBC3_HIGHSLIDE_CREDITSTITLE'		=> 'Ir a la p√°gina web de Highslide JS',
	'ABBC3_HIGHSLIDE_PREVIOUSTEXT'		=> 'Anterior',
	'ABBC3_HIGHSLIDE_PREVIOUSTITLE'		=> 'Anterior (flecha izquierda)',
	'ABBC3_HIGHSLIDE_NEXTTEXT'			=> 'Siguiente',
	'ABBC3_HIGHSLIDE_NEXTTITLE'			=> 'Siguiente (flecha derecha)',
	'ABBC3_HIGHSLIDE_MOVETITLE'			=> 'Mover',
	'ABBC3_HIGHSLIDE_MOVETEXT'			=> 'Mover',
	'ABBC3_HIGHSLIDE_CLOSETEXT'			=> 'Cerrar',
	'ABBC3_HIGHSLIDE_CLOSETITLE'		=> 'Cerrar (esc)',
	'ABBC3_HIGHSLIDE_RESIZETITLE'		=> 'Redimensionar',
	'ABBC3_HIGHSLIDE_PLAYTEXT'			=> 'Iniciar',
	'ABBC3_HIGHSLIDE_PLAYTITLE'			=> 'Iniciar slideshow (barra espacio)',
	'ABBC3_HIGHSLIDE_PAUSETEXT'			=> 'Pausar',
	'ABBC3_HIGHSLIDE_PAUSETITLE'		=> 'Pausar slideshow (barra espacio)',
	'ABBC3_HIGHSLIDE_NUMBER'			=> 'Imagen %1 de %2',
	'ABBC3_HIGHSLIDE_RESTORETITLE'		=> 'Click para cerrar la imagen, click y arrastrar para mover. Usa las flechas del teclado para avanzar o retroceder.',

// Text to be applied to the helpline & mouseover & help page & Wizard texts
	'BBCODE_STYLES_TIP'			=> 'Consejo: Pueden aplicarse estilos r√°pidamente al texto seleccionado.',
	
	'ABBC3_ERROR'				=> 'Error : ',
	'ABBC3_ERROR_TAG'			=> 'Error inesperado al utilizar etiqueta : ',
	'ABBC3_NO_EXAMPLE'			=> 'No se dispone de datos ejemplo',
	
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
	'ABBC3_UNAUTHORISED'		=> 'No est· permitido usar ciertas palabras : <br /><strong> %s </strong>',
	'SAMPLE_TEXT'				=> 'Esto es una muestra de texto' //	' . $lang['SAMPLE_TEXT'] . '
));

//
// TRANSLATORS PLEASE NOTE 
// Several lines have an special note like "##	For translate : " follow for one or more "yes" 
// These means that you can/have to translate the word under
//

$lang = array_merge($lang, array(
// bbcodes texts
	// Font Type Dropdown
	'ABBC3_FONT_MOVER'			=> 'Tipo de fuente',
	'ABBC3_FONT_TIP'			=> '[font=Comic Sans MS]texto[/font]',
	'ABBC3_FONT_NOTE'			=> 'Nota: Puede usar su propia familia de fuentes',
	'ABBC3_FONT_VIEW'			=> '<span style="font-family:Comic Sans MS">' . $lang['SAMPLE_TEXT'] . '</span>',
	
	// Font family Groups
	'ABBC3_FONT_ABBC3'			=> 'ABBC Box 3',
	'ABBC3_FONT_SAFE'			=> 'Lista segura',
	'ABBC3_FONT_WIN'			=> 'Fuentes Windows',

	// Font Size Dropdown
	'ABBC3_FONT_GIANT'			=> 'Gigante',
	'ABBC3_SIZE_MOVER'			=> 'Tama√±o de texto',
	'ABBC3_SIZE_TIP'			=> '[size=150]texto grande[/size]',
	'ABBC3_SIZE_NOTE'			=> 'Nota: el valor debe ser expresado en porcentaje',
	'ABBC3_SIZE_VIEW'			=> '<span style="font-size: 150%; line-height: 116%;">' . $lang['SAMPLE_TEXT'] . '</span>',
	
	// Highlight Font Color Dropdown
	'ABBC3_HIGHLIGHT_MOVER'		=> 'Texto Resaltado',
	'ABBC3_HIGHLIGHT_TIP'		=> '[highlight=yellow]texto[/highlight]',
	'ABBC3_HIGHLIGHT_NOTE'		=> 'Nota: puede usar colores HTML (color=#FF0000 o color=red)',
	'ABBC3_HIGHLIGHT_VIEW'		=> '<span style="background-color: yellow;">' . $lang['SAMPLE_TEXT'] . '</span>',
	
	// Font Color Dropdown
	'ABBC3_COLOR_MOVER'			=> 'Color de texto',
	'ABBC3_COLOR_TIP'			=> '[color=red]texto[/color]',
	'ABBC3_COLOR_NOTE'			=> 'Nota: puede usar colores HTML (color=#FF0000 o color=red)',
	'ABBC3_COLOR_VIEW'			=> '<span style="color:red">' . $lang['SAMPLE_TEXT'] . '</span>',
	
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
##	For translate :                                        yes
	'ABBC3_QUOTE_VIEW'			=> '<blockquote><div><cite>miembro '. $lang['WROTE'] .':</cite>' . $lang['SAMPLE_TEXT'] . '</div></blockquote>',
	
	// html
//	'ABBC3_HTML_MOVER'			=> 'HTML code',
//	'ABBC3_HTML_TIP'			=> '[html]xhtml code[/html]',
//	'ABBC3_HTML_EXAMPLE'		=> '[html]&lt;a href=\"http://www.mssti.com/phpbb3\"&gt;link to mssti&lt;/a&gt;[/html]',
//	'ABBC3_HTML_VIEW'			=> '<a href="http://www.mssti.com/phpbb3">link to mssti</a>',

	// Spoiler
	'ABBC3_SPOIL_MOVER'			=> 'Ocultar texto',
	'ABBC3_SPOIL_TIP'			=> '[spoil]texto[/spoil]',
##	For translate :                                                                                                                               yes                                                     yes                  yes
	'ABBC3_SPOIL_VIEW'			=> '<div class="spoilwrapper"><div class="spoiltitle"><input id="1" class="btnspoil button2" type="button" value="ver Spoiler" onClick="javascript:abbc3_spoiler( 1, 2, \'Ocultar Spoiler\', \'Ver Spoiler\' )"></div><div class="spoilcontent"><div id="2" style="display: none;">' . $lang['SAMPLE_TEXT'] . '</div></div></div>',
	'SPOILER_SHOW'				=> 'Ver el Spoiler',
	'SPOILER_HIDE'				=> 'Ocultar el Spoiler',
	
	// hidden
	'ABBC3_HIDDEN_MOVER'		=>	'Ocultar el contenido a visitantes',
	'ABBC3_HIDDEN_TIP'			=>	'[hidden]texto[/hidden]',
	'HIDDEN_OFF'				=>	'Ocultar est√° OFF',
	'HIDDEN_ON'					=>	'Ocultar est√° ON',
	'HIDDEN_EXPLAIN'			=>	'La Administraci√≥n del Sitio requiere que est√© registrado y se haya identificado para ver este mensaje.',

	// Moderator tag
	'ABBC3_MOD_MOVER'			=> 'Mensaje del moderator',
	'ABBC3_MOD_TIP'				=> '[mod=nombre]texto[/mod]',
##	For translate :                                                                                                                                                                               yes
	'ABBC3_MOD_VIEW'			=> '<table class="ModTable" width="100%" cellspacing="5" cellpadding="0" border="0"><tr><td class="exclamation" rowspan="2">&nbsp;!&nbsp;</td><td class="rowuser">Nombre del Moderator '. $lang['WROTE'] .':</td></tr><tr><td class="rowtext">' . $lang['SAMPLE_TEXT'] . '</td></tr></table>',
	
	// Off topic tag
	'OFFTOPIC'					=> 'Fuera de tema',
	'ABBC3_OFFTOPIC_MOVER'		=> 'Insertar texto fuera de tema',
	'ABBC3_OFFTOPIC_TIP'		=> '[offtopic]texto[/offtopic]',
##	For translate :                                                                yes
	'ABBC3_OFFTOPIC_VIEW'		=> '<dl class="OffTopic"><dt class="OffTopicTitle">Fuera de tema: </dt><dd class="OffTopicText">' . $lang['SAMPLE_TEXT'] . '</dd></dl>',
	
	// NFO
	'ABBC3_NFO_TITLE'			=> 'Texto NFO',
	'ABBC3_NFO_MOVER'			=> 'Texto NFO (Mejor vista en Internet explorer)',
	'ABBC3_NFO_TIP'				=> '[nfo]Texto NFO[/nfo]',
	'ABBC3_NFO_VIEW'			=> '<table cellspacing="0" cellpadding="0" border="0" ><tr><td><span class="genmed"><b>NFO:</b></span></td></tr><tr><td class="nfo">' . str_replace(" ", "&nbsp;", '    ≤ €€€€ €€±±∞                                  ∞∞∞±±±±≤≤≤€€€€€€€€€€€  €   €€ €€€') . '</td></tr></table>',
	
	// Justify Align
	'ABBC3_ALIGNJUSTIFY_MOVER'	=> 'Texto justificado',
	'ABBC3_ALIGNJUSTIFY_TIP'		=> '[align=justify]texto[/align]',
##	For translate :                                                 yes          yes
	'ABBC3_ALIGNJUSTIFY_VIEW'	=> '<div style="text-align:justify">Esto es <br />una muestra de texto</div>',

	// Right Align
	'ABBC3_ALIGNRIGHT_MOVER'	=> 'Texto alineado a la derecha',
	'ABBC3_ALIGNRIGHT_TIP'		=> '[align=right]texto[/align]',
	'ABBC3_ALIGNRIGHT_VIEW'		=> '<div style="text-align:right">' . $lang['SAMPLE_TEXT'] . '</div>',

	// Center Align
	'ABBC3_ALIGNCENTER_MOVER'	=> 'Texto alineado al centro',
	'ABBC3_ALIGNCENTER_TIP'		=> '[align=center]texto[/align]',
	'ABBC3_ALIGNCENTER_VIEW'	=> '<div style="text-align:center">' . $lang['SAMPLE_TEXT'] . '</div>',

	// Left Align
	'ABBC3_ALIGNLEFT_MOVER'		=> 'Texto alineado a la izquierda',
	'ABBC3_ALIGNLEFT_TIP'		=> '[align=left]texto[/align]',
	'ABBC3_ALIGNLEFT_VIEW'		=> '<div style="text-left:justify">' . $lang['SAMPLE_TEXT'] . '</div>',

	// Preformat
	'ABBC3_PRE_MOVER'			=> 'Texto preformateado',
	'ABBC3_PRE_TIP'				=> '[pre]texto[/pre]',
	'ABBC3_PRE_VIEW'			=> '<pre>' . $lang['SAMPLE_TEXT'] . '</pre>',

	// Tab
	'ABBC3_TAB_MOVER'			=> 'Insertar tabulaci√≥n',
	'ABBC3_TAB_TIP'				=> '[tab=nn]',
	'ABBC3_TAB_NOTE'			=> 'Introduzca un n√∫mero que ser√° el margen, medido en pixels.',
	'ABBC3_TAB_VIEW'			=> '<span style="margin-left:20px;"></span>Esto es una muestra de texto',

	// Superscript
	'ABBC3_SUP_MOVER'			=> 'Texto super√≠ndice',
	'ABBC3_SUP_TIP'				=> '[sup]texto[/sup]',
##	For translate :                 yes                                                             yes
	'ABBC3_SUP_VIEW'			=> 'Esto es un texto normal <sup>' . $lang['SAMPLE_TEXT'] . '</sup> esto es un texto normal',

	// Subscript
	'ABBC3_SUB_MOVER'			=> 'Texto sub√≠ndice',
	'ABBC3_SUB_TIP'				=> '[sub]texto[/sub]',
##	For translate :                 yes                                                             yes
	'ABBC3_SUP_VIEW'			=> 'Esto es un texto normal <sub>' . $lang['SAMPLE_TEXT'] . '</sub> esto es un texto normal',

	// Bold
	'ABBC3_B_MOVER'				=> 'Texto en negrita',
	'ABBC3_B_TIP'				=> '[b]texto[/b]',
	'ABBC3_B_VIEW'				=> '<strong>' . $lang['SAMPLE_TEXT'] . '</strong>',

	// Italic
	'ABBC3_I_MOVER'				=> 'Texto en it√°lica',
	'ABBC3_I_TIP'				=> '[i]texto[/i]',
	'ABBC3_I_VIEW'				=> '<em>' . $lang['SAMPLE_TEXT'] . '</em>',

	// Underline
	'ABBC3_U_MOVER'				=> 'Texto subrayado',
	'ABBC3_U_TIP'				=> '[u]texto[/u]',
	'ABBC3_U_VIEW'				=> '<span style="text-decoration: underline">' . $lang['SAMPLE_TEXT'] . '</span>',

	// Strikethrough
	'ABBC3_S_MOVER'				=> 'Texto tachado',
	'ABBC3_S_TIP'				=> '[s]texto[/s]',
	'ABBC3_S_VIEW'				=> '<span style="text-decoration: line-through;">' . $lang['SAMPLE_TEXT'] . '</span>',

	// Text Fade
	'ABBC3_FADE_MOVER'			=> 'Texto descolorido',
	'ABBC3_FADE_TIP'			=> '[fade]texto[/fade]',
	'ABBC3_FADE_VIEW'			=> '<span class="fade_link">' . $lang['SAMPLE_TEXT'] . '</span> <script type="text/javascript">fade_ontimer()</script>',

	// Text Gradient
	'ABBC3_GRAD_MOVER'			=> 'Texto arcoiris',
	'ABBC3_GRAD_TIP'			=> '',
##For translate (The separate words are "This is a sample text") yes                                  yes                                  yes                                  yes                                   yes                                  yes                                   yes                                   yes                                  yes                                  yes                                  yes                                  yes                                  yes                                   yes                                  yes                                  yes                                  yes
	'ABBC3_GRAD_VIEW'			=> '<span style="color: #FF0000">E</span><span style="color: #F60009">s</span><span style="color: #EC0013">t</span><span style="color: #E3001C">o</span> <span style="color: #D0002F">e</span><span style="color: #C60039">s</span> <span style="color: #B3004C">u</span><span style="color: #AA0055">n</span><span style="color: #A1005E">a</span> <span style="color: #8E0071">m</span><span style="color: #84007B">u</span><span style="color: #7B0084">e</span><span style="color: #71008E">s</span><span style="color: #680097">t</span><span style="color: #5E00A1">r</span><span style="color: #5500AA">a</span> <span style="color: #4200BD">d</span><span style="color: #3900C6">e</span> <span style="color: #2600D9">t</span><span style="color: #1C00E3">e</span><span style="color: #1300EC">x</span><span style="color: #0900F6">t</span><span style="color: #0000FF">o</span>',
	'ABBC3_GRAD_MIN_ERROR'		=> 'Por favor, primero seleccione el texto : ',
	'ABBC3_GRAD_MAX_ERROR'		=> 'Solo se permite un tama√±o inferior a 120 caracteres : ',
	'ABBC3_GRAD_COLORS'			=> 'Colores Pre Seleccionados',
	
	// Glow text
	'ABBC3_GLOW_MOVER'			=> 'Texto Resplandor (S√≥lo en Internet explorer)',
	'ABBC3_GLOW_TIP'			=> '[glow=(color)]texto[/glow]',
	'ABBC3_GLOW_VIEW'			=> '<div style="filter:Glow(color=red,strength=4);color:#ffffff;height:110%">' . $lang['SAMPLE_TEXT'] . '</div>',
	
	// Shadow text
	'ABBC3_SHADOW_MOVER'		=> 'Texto doble (S√≥lo en Internet explorer)',
	'ABBC3_SHADOW_TIP'			=> '[shadow=(color)]texto[/shadow]',
	'ABBC3_SHADOW_VIEW'			=> '<div style="filter:shadow(color=black,strength=4);color:blue;height:110%">' . $lang['SAMPLE_TEXT'] . '</div>',
	
	// Dropshadow text
	'ABBC3_DROPSHADOW_MOVER'	=> 'Texto con sombra (S√≥lo en Internet explorer)',
	'ABBC3_DROPSHADOW_TIP'		=> '[dropshadow=(color)]texto[/dropshadow]',
	'ABBC3_DROPSHADOW_VIEW'		=> '<div style="filter:dropshadow(color=#999999,strength=4);color:blue;height:110%">' . $lang['SAMPLE_TEXT'] . '</div>',
	
	// Blur text
	'ABBC3_BLUR_MOVER'			=> 'Texto esfumado (S√≥lo en Internet explorer)',
	'ABBC3_BLUR_TIP'			=> '[blur=(color)]texto[/blur]',
	'ABBC3_BLUR_VIEW'			=> '<div style="filter:Blur(strength=7);color:blue;height:110%">' . $lang['SAMPLE_TEXT'] . '</div>',
	
	// Wave text
	'ABBC3_WAVE_MOVER'			=> 'Text ondeado(S√≥lo en Internet explorer)',
	'ABBC3_WAVE_TIP'			=> '[wave=(color)]texto[/wave]',
	'ABBC3_WAVE_VIEW'			=> '<div style="filter:Wave(strength=2);color:blue;height:110%">' . $lang['SAMPLE_TEXT'] . '</div>',
	
	// Unordered List
	'ABBC3_LISTB_MOVER'			=> 'Lista Desordenada',
	'ABBC3_LISTB_TIP'			=> '[list]texto[/list]',
	'ABBC3_LISTB_NOTE'			=> 'Nota: usted puede usar [*] para insertar puntos',
##	For translate :                         yes            yes            yes                    yes             yes              yes                   yes
	'ABBC3_LISTB_VIEW'			=> '<ul><li>Item 1</li><li>Item 2</li><li>Item 3</li></ul><br /> o <br /><ul><li>Item disco<ul><li>Item circular<ul><li>item cuadrado</li></ul></li></ul></li></ul><br />',

	// Ordered List
	'ABBC3_LISTO_MOVER'			=> 'Lista Ordenada',
	'ABBC3_LISTO_TIP'			=> '[list=1|a]texto[/list]',
	'ABBC3_LISTO_NOTE'			=> 'Nota: usted puede usar [*] para insertar puntos',
##	For translate :                                                                  yes           yes            yes              yes                                                  yes            yes            yes              yes                                                  yes            yes            yes              yes                                                  yes            yes             yes                yes                                                  yes            yes             yes
	'ABBC3_LISTO_VIEW'			=> '<ol style="list-style-type: arabic-numbers"><li>Item 1</li><li>Item 2</li><li>Item 3</li></ol> o <br /><ol style="list-style-type: lower-alpha"><li>Item 1</li><li>Item 2</li><li>Item 3</li></ol> o <br /><ol style="list-style-type: upper-alpha"><li>item A</li><li>item B</li><li>item C</li></ol> o <br /><ol style="list-style-type: lower-roman"><li>Item i</li><li>Item ii</li><li>Item iii</li></ol> o <br /><ol style="list-style-type: upper-roman"><li>Item I</li><li>Item II</li><li>Item III</li></ol>',

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
	'ABBC3_DIRRTL_MOVER'		=> 'Texto con lectura derecha a izquierda',
	'ABBC3_DIRRTL_TIP'			=> '[dir=rtl]texto[/dir]',
	'ABBC3_DIRRTL_VIEW'			=> '<BDO dir="rtl">' . $lang['SAMPLE_TEXT'] . '</BDO>',

	// Message Box text direction right to Left
	'ABBC3_DIRLTR_MOVER'		=> 'Texto con lectura izquierda a derecha',
	'ABBC3_DIRLTR_TIP'			=> '[dir=ltr]texto[/dir]',
	'ABBC3_DIRLTR_VIEW'			=> '<BDO dir="ltr">' . $lang['SAMPLE_TEXT'] . '</BDO>',

	// Marquee Down
	'ABBC3_MARQDOWN_MOVER'		=> 'Desplazamiento de texto hacia abajo',
	'ABBC3_MARQDOWN_TIP'		=> '[marq=down]texto[/marq]',
	'ABBC3_MARQDOWN_VIEW'		=> '<marquee direction="down" scrolldelay="120" height="80px">' . $lang['SAMPLE_TEXT'] . '</marquee>',

	// Marquee Up
	'ABBC3_MARQUP_MOVER'		=> 'Desplazamiento de texto hacia arriba',
	'ABBC3_MARQUP_TIP'			=> '[marq=up]texto[/marq]',
	'ABBC3_MARQUP_VIEW'			=> '<marquee direction="up" scrolldelay="120" height="80px">' . $lang['SAMPLE_TEXT'] . '</marquee>',

	// Marquee Right
	'ABBC3_MARQRIGHT_MOVER'		=> 'Desplazamiento de texto hacia la derecha',
	'ABBC3_MARQRIGHT_TIP'		=> '[marq=right]texto[/marq]',
	'ABBC3_MARQRIGHT_VIEW'		=> '<marquee direction="right" scrolldelay="120">' . $lang['SAMPLE_TEXT'] . '</marquee>',

	// Marquee Left
	'ABBC3_MARQLEFT_MOVER'		=> 'Desplazamiento de texto hacia la izquierda',
	'ABBC3_MARQLEFT_TIP'		=> '[marq=left]texto[/marq]',
	'ABBC3_MARQLEFT_VIEW'		=> '<marquee direction="left" scrolldelay="120">' . $lang['SAMPLE_TEXT'] . '</marquee>',

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
//	'ABBC3_UPLOAD_EXTENSION_EXPLAIN'	=> 'Puede a√±adir/modificar/eliminar formatos permitidos. Separe las extensiones con una coma(,)',
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
	'ABBC3_ED2K_FRIEND'			=> 'ed2k friend',
	'ABBC3_ED2K_SERVER'			=> 'ed2k server',
	'ABBC3_ED2K_SERVERLIST'		=> 'ed2k serverlist',
	
	// Web included by iframe
	'ABBC3_WEB_TAG'				=> 'web',
	'ABBC3_WEB_MOVER'			=> 'Insertar p√°gina web en el mensaje',
	'ABBC3_WEB_TIP'				=> '[web width=200 height=100]URL p√°gina[/web]',
	'ABBC3_WEB_EXAMPLE'			=> 'http://www.google.com',
	'ABBC3_WEB_VIEW'			=> '<iframe width="100%" height="100" src="http://www.google.com" style="font-size: 2px;"></iframe><br/>',
	
	// Image Wizard
	'ABBC3_IMG_TAG'				=> 'imagen',
	'ABBC3_IMG_MOVER'			=> 'Insertar imagen',
	'ABBC3_IMG_TIP'				=> '[img=(left|center|right)]http://...[/img]',
	'ABBC3_IMG_EXAMPLE'			=> 'http://www.google.com/intl/en_com/images/logo_plain.png',
	'ABBC3_IMG_VIEW'			=> '<div align="center"><img src="http://www.google.com/intl/en_com/images/logo_plain.png" alt="" /></div>',
	
	// Thumbnail
	'ABBC3_THUMBNAIL_TAG'		=> 'miniatura',
	'ABBC3_THUMBNAIL_MOVER'		=> 'Insertar imagen miniatura',
	'ABBC3_THUMBNAIL_TIP'		=> '[thumbnail(=left|right)]http://...[/thumbnail]',
	'ABBC3_THUMBNAIL_EXAMPLE'	=> 'http://www.google.com/intl/en_com/images/logo_plain.png',
	'ABBC3_THUMBNAIL_VIEW'		=> '<img src="http://www.google.com/intl/en_com/images/logo_plain.png" alt="' . $lang['IMAGE'] . '" border="0" width="200px" class="hoverbox resize_me" />',
	
	// Imgshack
	'ABBC3_IMGSHACK_MOVER'		=> 'Insertar imagen desde imageshack',
	'ABBC3_IMGSHACK_TIP'		=> '[url=http://imageshack.us][img=http://...][/img][/url]',
	'ABBC3_IMGSHACK_VIEW'		=> '<a href="http://img207.imageshack.us/my.php?image=advancedbbcodebox3prosidd3.gif" class="postlink"><img src="http://img207.imageshack.us/img207/1773/advancedbbcodebox3prosidd3.th.gif" alt="Image" /></a>',
	
	// Rapid share checker
	'ABBC3_FOPEN_ERROR'			=> '<strong>Error : </strong> Lo sentimos pero parece que <strong>allow_url_fopen</strong> no est√° habilitada, esta funcion requiere que la diretiva PHP allow_url_fopen est√© habilitada.',
	'ABBC3_RAPIDSHARE_TAG'		=> 'rapidshare',
	'ABBC3_RAPIDSHARE_MOVER'	=> 'Insertar un archivo desde rapidshare',
	'ABBC3_RAPIDSHARE_TIP'		=> '[rapidshare]http://rapidshare.com/files/...][/rapidshare]',
	'ABBC3_RAPIDSHARE_EXAMPLE'	=> 'http://rapidshare.com/files/86587996/ABBC3_v108.zip.html',
	'ABBC3_RAPIDSHARE_VIEW'		=> '<a href="http://rapidshare.com/files/86587996/ABBC3_v108.zip.html" >http://rapidshare.com/files/86587996/ABBC3_v108.zip.html</a> <font color="green" size="4" >Archivo no encontrado !</font><br />',
	'ABBC3_RAPIDSHARE_GOOD'		=> 'Archivo encontrado el servidor !',
	'ABBC3_RAPIDSHARE_WRONG'	=> 'Archivo no encontrado !',
	
	// testlink
	'ABBC3_CURL_ERROR'			=> '<strong>Error : </strong> Lo sentimos pero parece que CURL no est√° cargado, por favor instalarlo para usar esta funci√≥n.',
	'ABBC3_LOGIN_EXPLAIN_VIEW'	=> 'The board requires you to be registered and logged in to view links.',
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
	'ABBC3_CLICK_ERROR'			=> '<strong>ERROR:</strong> Por favor ingrese in ID v√lido',
	
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
	
	// Flash (swf) Wizard
	'ABBC3_FLASH_TAG'			=> 'flash',
	'ABBC3_FLASH_MOVER'			=> 'Insertar video de flash (swf)',
	'ABBC3_FLASH_TIP'			=> '[flash width=# height=#]URL flash[/flash] o [flash width,height]URL flash[/flash]',
	'ABBC3_FLASH_EXAMPLE'		=> 'http://www.adobe.com/support/flash/ts/documents/test_version/version.swf',
	'ABBC3_FLASH_VIEW'			=> '<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0" width="200" height="100"><param name="movie" value="http://www.adobe.com/support/flash/ts/documents/test_version/version.swf" /><param name="play" value="true" /><param name="loop" value="true" /><param name="quality" value="high" /><param name="allowScriptAccess" value="never" /><param name="allowNetworking" value="internal" /><embed src="http://www.adobe.com/support/flash/ts/documents/test_version/version.swf" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" width="200" height="100" play="true" loop="true" quality="high" allowscriptaccess="never" allownetworking="internal"></embed></object>',
	
	// Flash (flv) Wizard
	'ABBC3_FLV_TAG'				=> 'flash',
	'ABBC3_FLV_MOVER'			=> 'Insertar video de flash (flv)',
	'ABBC3_FLV_TIP'				=> '[flv width=# height=#]URL flash video[/flv] o [flv width,height]URL flash video[/flv]',
	'ABBC3_FLV_EXAMPLE' 		=> 'http://www.channel-ai.com/video/eyn/demo1.flv',
	'ABBC3_FLV_VIEW'			=> '<embed src="../images/flvplayer.swf" width="200" height="100" bgcolor="#FFFFFF" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="file=../files/demo1.flv&autostart=false" />',
	
	// Streaming Video Wizard
	'ABBC3_VIDEO_TAG'			=> 'video',
	'ABBC3_VIDEO_MOVER'			=> 'Insertar video',
	'ABBC3_VIDEO_TIP'			=> '[video width=# height=#]URL video[/video]',
	'ABBC3_VIDEO_EXAMPLE'		=> 'http://www.sarahsnotecards.com/catalunyalive/fishstore.wmv',
	'ABBC3_VIDEO_VIEW'			=> '<object classid="CLSID:6BF52A52-394A-11d3-B153-00C04F79FAA6" id="player"  width="200" height="100"><param name="url" value="http://www.sarahsnotecards.com/catalunyalive/fishstore.wmv" /><param name="src" value="http://www.sarahsnotecards.com/catalunyalive/fishstore.wmv" /><param name="showcontrols" value="true" /><param name="autostart" value="false" /><!--[if !IE]>--><object type="video/x-ms-wmv" data="http://www.sarahsnotecards.com/catalunyalive/fishstore.wmv" width="200" height="100" ><param name="src" value="http://www.sarahsnotecards.com/catalunyalive/fishstore.wmv" /><param name="autostart" value="false" /><param name="controller" value="true" /></object><!--<![endif]--></object>',
	
	// Streaming Audio Wizard
	'ABBC3_STREAM_TAG'			=> 'sonido',
	'ABBC3_STREAM_MOVER'		=> 'Insertar sonido',
	'ABBC3_STREAM_TIP'			=> '[stream]URL Archivo[/stream]',
	'ABBC3_STREAM_EXAMPLE'		=> 'http://realdev1.realise.com/rossa/mov/demo.mp3',
	'ABBC3_STREAM_VIEW'			=> '<object width="200" height="45" classid="CLSID:6BF52A52-394A-11d3-B153-00C04F79FAA6" id="wmstream_"><param name="url" value="$1" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /><param name="src" value="$1" /><!--[if !IE]>--><object width="200" height="45" type="video/x-ms-wmv" data="$1"><param name="src" value="$1" /><param name="controller" value="1" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /></object><!--<![endif]--></object>',
	
	// Quick time
	'ABBC3_QUICKTIME_TAG'		=> 'Quick time',
	'ABBC3_QUICKTIME_MOVER'		=> 'Insertar Quick time',
	'ABBC3_QUICKTIME_TIP'		=> '[quicktime width=# height=#]URL Quick time[/quicktime]',
	'ABBC3_QUICKTIME_EXAMPLE'	=> 'http://www.nature.com/neuro/journal/v3/n3/extref/Li_control.mov.qt' . ' ' . 'http://www.carnivalmidways.com/images/Music/thisisatest.mp3',
	'ABBC3_QUICKTIME_VIEW'		=> '<object id="qtstream_" classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab#version=6,0,2,0" width="200" height="100"><param name="src" value="http://www.nature.com/neuro/journal/v3/n3/extref/Li_control.mov.qt" /><param name="controller" value="true" /><param name="autoplay" value="false" /><param name="type" value="video/quicktime" /><embed name="qtstream_" src="http://www.nature.com/neuro/journal/v3/n3/extref/Li_control.mov.qt" pluginspage="http://www.apple.com/quicktime/download/" enablejavascript="true" controller="true" width="200" height="100" type="video/quicktime" autoplay="false"></embed></object>',
	
	// Real Media Wizard
	'ABBC3_RAM_TAG'				=> 'Real Media',
	'ABBC3_RAM_MOVER'			=> 'Insertar Real Media',
	'ABBC3_RAM_TIP'				=> '[ram]URL Real Media[/ram]',
	'ABBC3_RAM_EXAMPLE'			=> 'http://www.bbc.co.uk/scotland/radioscotland/media/radioscotland.ram',
	'ABBC3_RAM_VIEW'			=> '<object id="rmstream_" classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" width="200" height="100"><param name="src" value="$3" /><param name="autostart" value="false" /><param name="controls" value="ImageWindow" /><param name="console" value="ctrls_" /><param name="prefetch" value="false" /><embed name="rmstream_" type="audio/x-pn-realaudio-plugin" src="$3" width="200" height="100" autostart="false" controls="ImageWindow" console="ctrls_" prefetch="false"></embed></object><br /><object id="ctrls_" classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" width="200" height="36"><param name="controls" value="ControlPanel" /><param name="console" value="ctrls_{_file.ATTACH_ID}" /><embed name="ctrls_" type="audio/x-pn-realaudio-plugin" width="200" height="36" controls="ControlPanel" console="ctrls_"></embed></object>',
	
//	// Stage6 video Wizard
//	'ABBC3_STAGE6_TAG'			=> 'Stage6 Video',
//	'ABBC3_STAGE6_MOVER'		=> 'Insertar video desde Stage6', // from http://www.stage6.com/
//	'ABBC3_STAGE6_TIP'			=> '[stage6]Stage6 ID[/stage6]',
//	'ABBC3_STAGE6_EXAMPLE'		=> '2068715',
//	'ABBC3_STAGE6_VIEW'			=> '<object  classid="clsid:67DABFBF-D0AB-41fa-9C46-CC0F21721616" codebase="http://download.divx.com/player/DivXBrowserPlugin.cab" width="200" height="100" ><param name="src" value="http://video.stage6.com/2068715/.divx" /><param name="autoplay" value="false" /><param name="custommode" value="Stage6" /><param name="showpostplaybackad" value="false" /><embed type="video/divx" src="http://video.stage6.com/2068715/.divx" pluginspage="http://go.divx.com/plugin/download/" showpostplaybackad="false" custommode="Stage6" autoplay="false" width="200" height="100" /></object><br />',
	
	// Google video Wizard
	'ABBC3_GVIDEO_TAG'			=> 'Google Video',
	'ABBC3_GVIDEO_MOVER'		=> 'Insertar video desde Google',
	'ABBC3_GVIDEO_TIP'			=> '[GVideo]URL video[/GVideo]',
	'ABBC3_GVIDEO_EXAMPLE'		=> 'http://video.google.com/videoplay?docid=-8351924403384451128',
	'ABBC3_GVIDEO_VIEW'			=> '<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0" width="200" height="100"><param name="movie" value="http://video.google.com/googleplayer.swf?docid=-8351924403384451128" /><param name="play" value="false" /><param name="loop" value="false" /><param name="quality" value="high" /><param name="allowScriptAccess" value="never" /><param name="allowNetworking" value="internal" /><embed src="http://video.google.com/googleplayer.swf?docid=-8351924403384451128" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" width="200" height="100" play="false" loop="false" quality="high" allowscriptaccess="never" allownetworking="internal"></embed></object>',
	
	// Youtube video Wizard
	'ABBC3_YOUTUBE_TAG'			=> 'Youtube Video',
	'ABBC3_YOUTUBE_MOVER'		=> 'Insertar video desde Youtube',
	'ABBC3_YOUTUBE_TIP'			=> '[youtube]URL video[/youtube]',
	'ABBC3_YOUTUBE_EXAMPLE'		=> 'http://www.youtube.com/watch?v=TA4hm97m494',
	'ABBC3_YOUTUBE_VIEW'		=> '<object width="200" height="100"><param name="movie" value="http://www.youtube.com/v/TA4hm97m494" /><param name="wmode" value="transparent" /><embed src="http://www.youtube.com/v/TA4hm97m494" type="application/x-shockwave-flash" wmode="transparent" width="200" height="100"></embed></object>',
	
	// Veoh video
	'ABBC3_VEOH_TAG'			=> 'Veoh',
	'ABBC3_VEOH_MOVER'			=> 'Insertar video desde Veoh',
	'ABBC3_VEOH_TIP'			=> '[veoh]URL video[/veoh].',
	'ABBC3_VEOH_EXAMPLE'		=> 'http://www.veoh.com/videos/v1409404EqT5SJjM',
	'ABBC3_VEOH_VIEW'			=> '<embed src="http://www.veoh.com/videodetails2.swf?permalinkId=v1409404EqT5SJjM&id=anonymous&player=videodetailsembedded&videoAutoPlay=0" allowFullScreen="true" width="200" height="100" bgcolor="#000000" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>',
	
	// Collegehumor video
	'ABBC3_COLLEGEHUMOR_TAG'	=> 'collegehumor',
	'ABBC3_COLLEGEHUMOR_MOVER'	=> 'Insertar video desde collegehumor',
	'ABBC3_COLLEGEHUMOR_TIP'	=> '[collegehumor]collegehumor video URL[/collegehumor]',
	'ABBC3_COLLEGEHUMOR_EXAMPLE'=> 'http://www.collegehumor.com/video:1802097',
	'ABBC3_COLLEGEHUMOR_VIEW'	=> '<object type="application/x-shockwave-flash" data="http://www.collegehumor.com/moogaloop/moogaloop.swf?clip_id=1802097&fullscreen=1" width="200" height="100" ><param name="allowfullscreen" value="true" /><param name="movie" quality="best" value="http://www.collegehumor.com/moogaloop/moogaloop.swf?clip_id=1802097&fullscreen=1" /></object>',

	// Dailymotion video
	'ABBC3_DM_MOVER'			=> 'Insertar video desde dailymotion', // from http://www.dailymotion.com/
	'ABBC3_DM_TIP'				=> '[dm]Dailymotion ID[/dm]',
	'ABBC3_DM_EXAMPLE'			=> 'http://www.dailymotion.com/swf/x3hm7o',
	'ABBC3_DM_VIEW'				=> '<object width="200" height="100"><param name="movie" value="http://www.dailymotion.com/swf/x3hm7o" /><param name="allowFullScreen" value="true" /><param name="allowScriptAccess" value="never" /><embed src="http://www.dailymotion.com/swf/x3hm7o" type="application/x-shockwave-flash" width="200" height="100" allowFullScreen="true" allowScriptAccess="never"></embed></object>',
	
	// Gamespot video
	'ABBC3_GAMESPOT_MOVER'		=> 'Insertar video desde Gamespot',
	'ABBC3_GAMESPOT_TIP'		=> '[gamespot]Gamespot video URL [gamespot]',
	'ABBC3_GAMESPOT_EXAMPLE'	=> 'http://www.gamespot.com/video/944074/6185798/tom-clancys-rainbow-six-vegas-2-official-trailer-3',
	'ABBC3_GAMESPOT_VIEW'		=> '<embed id="mymovie" width="200" height="100" flashvars="paramsURI=http%3A%2F%2Fwww%2Egamespot%2Ecom%2Fpages%2Fvideo%5Fplayer%2Fproteus%5Fxml%2Ephp%3Fadseg%3D%26adgrp%3D%26sid%3D6185798%26pid%3D944074%26mb%3D%26onid%3D%26nc%3D1202626246593%26embedded%3D1%26showWatermark%3D0%26autoPlay%3D0" allowfullscreen="true" allowscriptaccess="never" quality="high" name="mymovie" src="http://image.com.com/gamespot/images/cne_flash/production/media_player/proteus/gs/proteus_embed.swf" type="application/x-shockwave-flash"/>',
	
	// Gametrailers video
	'ABBC3_GAMETRAILERS_MOVER'	=> 'Insertar video desde Gametrailers',
	'ABBC3_GAMETRAILERS_TIP'	=> '[gametrailers]Gametrailers video URL[/gametrailers]',
	'ABBC3_GAMETRAILERS_EXAMPLE'=> 'http://www.gametrailers.com/player/30461.html',
	'ABBC3_GAMETRAILERS_VIEW'	=> '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"  codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" id="gtembed" width="200" height="100"><param name="allowScriptAccess" value="never" /><param name="allowFullScreen" value="true" /><param name="movie" value="http://www.gametrailers.com/remote_wrap.php?mid=30461" /><param name="quality" value="high" /><embed src="http://www.gametrailers.com/remote_wrap.php?mid=30461" swLiveConnect="true" name="gtembed" align="middle" allowScriptAccess="never" allowFullScreen="true" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="200" height="100"></embed></object>',

	// IGN video
	'ABBC3_IGNVIDEO_MOVER'		=> 'Insertar video desde Ign',
	'ABBC3_IGNVIDEO_TIP'		=> '[ignvideo]ING video URL[/ignvideo]',
	'ABBC3_IGNVIDEO_EXAMPLE'	=> 'object_ID=967025&downloadURL=http://tvmovies.ign.com/tv/video/article/850/850894/knightrider_trailer_020808_flvlow.flv',
	'ABBC3_IGNVIDEO_VIEW'		=> '<embed src="http://videomedia.ign.com/ev/ev.swf" flashvars="object_ID=967025&downloadURL=http://tvmovies.ign.com/tv/video/article/850/850894/knightrider_trailer_020808_flvlow.flv" type="application/x-shockwave-flash" width="200" height="100" ></embed>',
	
	// LiveLeak video
	'ABBC3_LIVELEAK_MOVER'		=> 'Insertar video desde Liveleak',
	'ABBC3_LIVELEAK_TIP'		=> '[liveleak]Liveleak video URL[/liveleak]',
	'ABBC3_LIVELEAK_EXAMPLE'	=> 'http://www.liveleak.com/view?i=413_1202590393',
	'ABBC3_LIVELEAK_VIEW'		=> '<object type="application/x-shockwave-flash" width="200" height="100" wmode="transparent" data="http://www.liveleak.com/player.swf?autostart=false&token=i=413_1202590393"><param name="movie" value="http://www.liveleak.com/player.swf?autostart=false&token=$1" /><param name="wmode" value="transparent" /><param name="quality" value="high" /></object>',
	
// Custom BBcodes
));

?>