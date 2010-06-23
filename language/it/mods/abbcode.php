<?php
/**
* @package: phpBB3 :: Advanced BBCode box 3 -> language [it][Italian]
* @version: $Id: abbcode.php, v 1.0.10 2008/08/01 08:08:01 leviatan21 Exp $
* @copyright: Esolitos < info@giurochesmetto.org> (Marlon)  http://www.giurochesmetto.org/
* @license: http://opensource.org/licenses/gpl-license.php GNU Public License 
* @author: Esolitos - http://www.giurochesmetto.org/plus/forum/memberlist.php?mode=viewprofile&u=2&sid=fecc1cbc449b075f73e9e6e32aecf391
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
	'ABBC3_HELP_TITLE'			=> 'Advanced BBCode box 3 :: Pagina di aiuto',
	'ABBC3_HELP_DESC'			=> 'Descrizione',
	'ABBC3_HELP_WRITE'			=> 'Il tuo formato di scrittura',
	'ABBC3_HELP_VIEW'			=> 'Il nostro formato di visualizzazione',
	'ABBC3_HELP_ABOUT'			=> 'Advanced BBCode Box 3 by <a href="http://www.mssti.com/phpbb3">mssti</a>',
	'ABBC3_HELP_ALT'			=> 'Advanced BBCode Box 3 (aka ABBC3)',

// Image Resizer JS
	'ABBC3_RESIZE_SMALL'		=> 'Clicca questa barra per vedere l\'immagine intera.',
	'ABBC3_RESIZE_ZOOM_IN'		=> 'Zoom in (dimensioni reali: %1$s x %2$s)',
	'ABBC3_RESIZE_CLOSE'		=> 'Chiudi',
	'ABBC3_RESIZE_ZOOM_OUT'		=> 'Zoom out',
	'ABBC3_RESIZE_FILESIZE'		=> 'Questa immagine Ë stata Ridimensionata. Clicca qui per vedere l\'immagine reale. l\'immagine reale ha dimensioni %1$s x %2$s e "pesa" %3$sKB.',
	'ABBC3_RESIZE_NOFILESIZE'	=> 'Questa immagine Ë stata Ridimensionata. Clicca qui per vedere l\'immagine reale. l\'immagine reale ha dimensioni %1$s x %2$s.',
	'ABBC3_RESIZE_FULLSIZE'		=> 'Clicca qui per vedere l\'immagine Ridimensionata.',
	'ABBC3_RESIZE_NUMBER'		=> 'Immagine %1$s di %2$s',
	'ABBC3_RESIZE_PLAY'			=> 'Inizia presentazione ',
	'ABBC3_RESIZE_PAUSE'		=> 'Pausa presentazione',

// Highslide JS - http://vikjavev.no/highslide/forum/viewtopic.php?t=2119
	'ABBC3_HIGHSLIDE_LOADINGTEXT'		=> 'Loading...',
	'ABBC3_HIGHSLIDE_LOADINGTITLE'		=> 'clicca per annullare',
	'ABBC3_HIGHSLIDE_FOCUSTITLE'		=> 'Clicca per portare in prmo piano',
	'ABBC3_HIGHSLIDE_FULLEXPANDTITLE'	=> 'Ingrandisci alla dimensione attuale',
	'ABBC3_HIGHSLIDE_FULLEXPANDTEXT'	=> 'Dimensione intera',
	'ABBC3_HIGHSLIDE_CREDITSTEXT'		=> 'Powered by <i>Highslide JS</i>',
	'ABBC3_HIGHSLIDE_CREDITSTITLE'		=> 'Vai alla HP di Highslide JS',
	'ABBC3_HIGHSLIDE_PREVIOUSTEXT'		=> 'Precedente',
	'ABBC3_HIGHSLIDE_PREVIOUSTITLE'		=> 'Precedente (Freccia a sinistra)',
	'ABBC3_HIGHSLIDE_NEXTTEXT'			=> 'Successiva',
	'ABBC3_HIGHSLIDE_NEXTTITLE'			=> 'Sucessiva (Freccia a destra)',
	'ABBC3_HIGHSLIDE_MOVETITLE'			=> 'Sposta',
	'ABBC3_HIGHSLIDE_MOVETEXT'			=> 'Sposta',
	'ABBC3_HIGHSLIDE_CLOSETEXT'			=> 'Chiudi',
	'ABBC3_HIGHSLIDE_CLOSETITLE'		=> 'Chiudi (esc)',
	'ABBC3_HIGHSLIDE_RESIZETITLE'		=> 'Ridimensiona',
	'ABBC3_HIGHSLIDE_PLAYTEXT'			=> 'Play',
	'ABBC3_HIGHSLIDE_PLAYTITLE'			=> 'Inizia presentazione (spacebar)',
	'ABBC3_HIGHSLIDE_PAUSETEXT'			=> 'Pausa',
	'ABBC3_HIGHSLIDE_PAUSETITLE'		=> 'Pausa presentazione (spacebar)',
	'ABBC3_HIGHSLIDE_NUMBER'			=> 'Immagine %1 di %2',
	'ABBC3_HIGHSLIDE_RESTORETITLE'		=> 'Clicca per chiudere l\'immagine, clicca e trascina per spostare. Usa le freccie direzionali per spostarti avanti ed indietro.',

// Text to be applied to the helpline & mouseover & help page & Wizard texts
	'BBCODE_STYLES_TIP'			=> 'Suggerimento: Gli stili possono essere applicati velocemente selezionando il testo.',

	'ABBC3_ERROR'				=> 'Errore : ',
	'ABBC3_ERROR_TAG'			=> 'Errore inaspettato utilizzando il tag : ',
	'ABBC3_NO_EXAMPLE'			=> 'Nessun dato di esempio',

	'ABBC3_ID'					=> 'Inserisci ID :',
	'ABBC3_NOID'				=> 'Non hai inserito l\'ID',
	'ABBC3_LINK'				=> 'Inserisci un indirizzo per ',
	'ABBC3_DESC'				=> 'Inserisci un descrizione per ',
	'ABBC3_NAME'				=> 'descrizione',
	'ABBC3_NOLINK'				=> 'Non hai inserito un indirizzo per ',
	'ABBC3_NODESC'				=> 'Non hai inserito una descrizione per ',
	'ABBC3_WIDTH'				=> 'Inserisci larghezza',
	'ABBC3_WIDTH_NOTE'			=> 'Nota: Il valore puÚ essere inserito in percentuale',
	'ABBC3_NOWIDTH'				=> 'Non hai inserito una larghezza',
	'ABBC3_HEIGHT'				=> 'Inserisci un\'altezza',
	'ABBC3_HEIGHT_NOTE'			=> 'Nota: Il valore puÚ essere inserito in percentuale',
	'ABBC3_NOHEIGHT'			=> 'YNon hai inserito un\'altezza',

	'ABBC3_NOTE'				=> 'Nota',
	'ABBC3_EXAMPLE'				=> 'Esempio',
	'ABBC3_EXAMPLES'			=> 'Esempi',

// bbcodes texts	
	// Font Type Dropdown
	'ABBC3_FONT_MOVER'			=> 'Font',
	'ABBC3_FONT_TIP'			=> '[font=Comic Sans MS]testo[/font]',
	'ABBC3_FONT_NOTE'			=> 'Nota: » possibile inserire una propria famiglia di font',
	'ABBC3_FONT_VIEW'			=> '<span style="font-family:Comic Sans MS">Questo Ë un esempio</span>',

	// Font Size Dropdown
	'ABBC3_FONT_GIANT'			=> 'Gigante',
	'ABBC3_SIZE_MOVER'			=> 'Dimensione del Font',
	'ABBC3_SIZE_TIP'			=> '[size=150]Testo grande[/size]',
	'ABBC3_SIZE_NOTE'			=> 'Nota: Iol valore deve sar‡ interpretato come percentiale',
	'ABBC3_SIZE_VIEW'			=> '<span style="font-size: 150%; line-height: 116%;">Questo Ë un esempio</span>',

	// Highlight Font Color Dropdown
	'ABBC3_HIGHLIGHT_MOVER'		=> 'Testo evidenziato',
	'ABBC3_HIGHLIGHT_TIP'		=> '[highlight=yellow]testo[/highlight]',
	'ABBC3_HIGHLIGHT_NOTE'		=> 'Nota: puoi usare colori HTML (color=#FF0000 or color=red)',
	'ABBC3_HIGHLIGHT_VIEW'		=> '<span style="background-color: yellow;">Questo Ë un esempio</span>',

	// Font Color Dropdown
	'ABBC3_COLOR_MOVER'			=> 'Colore del font',
	'ABBC3_COLOR_TIP'			=> '[color=red]testo[/color]',
	'ABBC3_COLOR_NOTE'			=> 'Nota: Puoi usare colori HTML (color=#FF0000 or color=red)',
	'ABBC3_COLOR_VIEW'			=> '<span style="color:red">Questo Ë un esempio</span>',

	// Cut selected text
	'ABBC3_CUT_MOVER'			=> 'Taglia il testo selezionato',
	// Copy selected text
	'ABBC3_COPY_MOVER'			=> 'Copia il tesyo selezionato',
	// Paste previously copy text
	'ABBC3_PASTE_MOVER'			=> 'Incolla il testo copiato/taglaito',
	'ABBC3_PASTE_ERROR'			=> 'Attenzione, prima taglia/copia il testo, poi incollalo.',
	// Remove BBCode (Removes all BBCode tags from selected text)
	'ABBC3_PLAIN_MOVER'			=> 'Rimuove tutto il BBCode dal testo selzionato',
	'ABBC3_NOSELECT_ERROR'		=> 'Attenzione, prima selelziona il testo',

	// Code
	'ABBC3_CODE_MOVER'			=> 'Codice',
	'ABBC3_CODE_TIP'			=> '[code]codice[/code]',
	'ABBC3_CODE_VIEW'			=> '<dl class="codebox"><dt>'. $lang['CODE'] .': <a href="#" onclick="selectCode(this); return false;">'. $lang['SELECT_ALL_CODE'] .'</a></dt><dd><code>Questo Ë un esempio</code></dd></dl>',

	// Quote
	'ABBC3_QUOTE_MOVER'			=> 'Quote',
	'ABBC3_QUOTE_TIP'			=> '[quote]testo[/quote] or [quote=\"membro\"]testo[/quote]',
	'ABBC3_QUOTE_VIEW'			=> '<blockquote><div><cite>membro '. $lang['WROTE'] .':</cite>Questo Ë un esempio</div></blockquote>',

	// html
	'ABBC3_HTML_MOVER'			=> 'Codice HTML',
	'ABBC3_HTML_TIP'			=> '[html]codice xhtml[/html]',
//	'ABBC3_HTML_EXAMPLE'		=> '[html]&lt;a href=\"http://www.mssti.com/phpbb3\"&gt;link to mssti&lt;/a&gt;[/html]',
	'ABBC3_HTML_VIEW'			=> '<a href="http://www.mssti.com/phpbb3">link verso mssti</a>',

	// Spoiler
	'ABBC3_SPOIL_MOVER'			=> 'Spoiler',
	'ABBC3_SPOIL_TIP'			=> '[spoil]testo[/spoil]',
	'ABBC3_SPOIL_VIEW'			=> '<div class="spoilwrapper"><div class="spoiltitle"><input class="btnspoil" type="button" value="Visualizza Spoiler" onclick="javascript:if (this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display != \'\') { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'\'; this.innerText = \'\'; this.value = \'Nascondi Spoiler\'; } else { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'none\'; this.innerText = \'\'; this.value = \'Visualizza Spoiler\'; }" onfocus="this.blur();" /></div><div class="spoilcontent"><div style="display: none;">Questo Ë un esempio</div></div></div>',
	'SPOILER_SHOW'				=> 'Visualizza Spoiler',
	'SPOILER_HIDE'				=> 'Nascondi Spoiler',

	// Moderator tag
	'ABBC3_MOD_MOVER'			=> 'Mesaggio di un moderatore',
	'ABBC3_MOD_TIP'				=> '[mod=nome]testo[/mod]',
	'ABBC3_MOD_VIEW'			=> '<table id="ModTable" width="100%" cellspacing="5" cellpadding="0" border="0" align="center"><tr><td class="row1" rowspan="2" align="middle" vAlign="center" width="1%"><span class="exclamation" title="Avviso do un moderatore" style="font-size:25px">&nbsp;!&nbsp;</span></td><td class="row2"><span class="genmed"><b>Nome Mod:</b></span></td></tr><tr><td>TQuesto Ë un esempio</td></tr></table>',

	// Off topic tag
	'OFFTOPIC'					=> 'Offtopic',
	'ABBC3_OFFTOPIC_MOVER'		=> 'Inserisce un testo \"OffTopic\"',
	'ABBC3_OFFTOPIC_TIP'		=> '[offtopic]testo[/offtopic]',
	'ABBC3_OFFTOPIC_VIEW'		=> '<i><b><font color="#114499">OffTopic: </font></b><br/><font color="#2277DD">Questo Ë un esempio</font></i>',

	// NFO
	'ABBC3_NFO_MOVER'			=> 'Testo NFO (Better on Internet explorer)',
	'ABBC3_NFO_TIP'				=> '[nfo]Testo NFO[/nfo]',
	'ABBC3_NFO_VIEW'			=> '<table cellspacing="0" cellpadding="0" border="0" ><tr><td><span class="genmed"><b>NFO:</b></span></td></tr><tr><td class="nfo">' . str_replace(" ", "&nbsp;", '    ≤ €€€€ €€±±∞                                  ∞∞∞±±±±≤≤≤€€€€€€€€€€€  €   €€ €€€') . '</td></tr></table>',

	// Justify Align
	'ABBC3_ALIGNJUSTIFY_MOVER'	=> 'Testo giustidficato',
	'ABBC3_ALIGNJUSTIFY_TIP'	=> '[align=justify]testo[/align]',
	'ABBC3_ALIGNJUSTIFY_VIEW'	=> '<div style="text-align:justify">Questo Ë <br/> un testo di esempio</div>',

	// Right Align
	'ABBC3_ALIGNRIGHT_MOVER'	=> 'Testo allimeato a destra',
	'ABBC3_ALIGNRIGHT_TIP'		=> '[align=right]testo[/align]',
	'ABBC3_ALIGNRIGHT_VIEW'		=> '<div style="text-align:right">Questo Ë un esempio</div>',

	// Center Align
	'ABBC3_ALIGNCENTER_MOVER'	=> 'Testo centrato',
	'ABBC3_ALIGNCENTER_TIP'		=> '[align=center]text[/align]',
	'ABBC3_ALIGNCENTER_VIEW'	=> '<div style="text-align:center">Questo Ë un esempio</div>',

	// Left Align
	'ABBC3_ALIGNLEFT_MOVER'		=> 'Testo allineato a sinistra',
	'ABBC3_ALIGNLEFT_TIP'		=> '[align=left]testo[/align]',
	'ABBC3_ALIGNLEFT_VIEW'		=> '<div style="text-left:justify">Questo Ë un esempio</div>',

	// Preformat
	'ABBC3_PRE_MOVER'			=> 'Testo preformattato',
	'ABBC3_PRE_TIP'				=> '[pre]testo[/pre]',
	'ABBC3_PRE_VIEW'			=> '<pre>Questo Ë un esempio</pre>',

	// Tab
	'ABBC3_TAB_MOVER'			=> 'Crea un indentatura',
	'ABBC3_TAB_TIP'				=> '[tab=nn]',
	'ABBC3_TAB_NOTE'			=> 'inserisci un numero (Il margine il pixel).',
	'ABBC3_TAB_VIEW'			=> '<span style="margin-left:20px;"></span>Questo Ë un esempio',

	// Superscript
	'ABBC3_SUP_MOVER'			=> 'Apice',
	'ABBC3_SUP_TIP'				=> '[sup]testo[/sup]',
	'ABBC3_SUP_VIEW'			=> '<sup>Questo Ë un esempio</sup>',

	// Subscript
	'ABBC3_SUB_MOVER'			=> 'Pendice',
	'ABBC3_SUB_TIP'				=> '[sub]testo[/sub]',
	'ABBC3_SUB_VIEW'			=> '<sub>Questo Ë un esempio</sub>',

	// Bold
	'ABBC3_B_MOVER'				=> 'Grassetto',
	'ABBC3_B_TIP'				=> '[b]testo[/b]',
	'ABBC3_B_VIEW'				=> '<strong>Questo Ë un esempio</strong>',

	// Italic
	'ABBC3_I_MOVER'				=> 'Corsivo',
	'ABBC3_I_TIP'				=> '[i]testo[/i]',
	'ABBC3_I_VIEW'				=> '<em>Questo Ë un esempio</em>',

	// Underline
	'ABBC3_U_MOVER'				=> 'Sottolineato',
	'ABBC3_U_TIP'				=> '[u]testo[/u]',
	'ABBC3_U_VIEW'				=> '<span style="text-decoration: underline">Questo Ë un esempio</span>',

	// Strikethrough
	'ABBC3_S_MOVER'				=> 'Barrato',
	'ABBC3_S_TIP'				=> '[s]testo[/s]',
	'ABBC3_S_VIEW'				=> '<span style="text-decoration: line-through;">Questo Ë un esempio</span>',

	// Text Fade
	'ABBC3_FADE_MOVER'			=> 'Sfumato',
	'ABBC3_FADE_TIP'			=> '[fade]testo[/fade]',
	'ABBC3_FADE_VIEW'			=> '<span class="fade_link">Questo Ë un esempio</span> <script type="text/javascript">fade_ontimer()</script>',

	// Text Gradient
	'ABBC3_GRAD_MOVER'			=> 'Testo in gradiente',
	'ABBC3_GRAD_TIP'			=> '',
	'ABBC3_GRAD_VIEW'			=> '<span style="color: #FF0000">Q</span><span style="color: #F2000D">u</span><span style="color: #E6001A">e</span><span style="color: #D90026">s</span><span style="color: #BF0040">t</span><span style="color: #B3004D">o</span> <span style="color: #990066">Ë</span> <span style="color: #800080">u</span><span style="color: #73008C">n</span> <span style="color: #660099">e</span><span style="color: #5900A6">s</span><span style="color: #4D00B3">e</span><span style="color: #4000BF">m</span><span style="color: #2600D9">p</span><span style="color: #1A00E6">i</span><span style="color: #0D00F2">o</span><span style="color: #0000FF">!</span>',
	'ABBC3_GRAD_MIN_ERROR'		=> 'Seleziona prima il testo! : ',
	'ABBC3_GRAD_MAX_ERROR'		=> 'Massimo 120 caratteri : ',

	// Glow text
	'ABBC3_GLOW_MOVER'			=> 'Effetto Neon (Solo Internet explorer)',
	'ABBC3_GLOW_TIP'			=> '[glow=(colore)]testo[/glow]',
	'ABBC3_GLOW_VIEW'			=> '<div style="filter:Glow(color=red,strength=4);color:#ffffff;height:110%">Questo Ë un esempio</div>',

	// Shadow text
	'ABBC3_SHADOW_MOVER'		=> 'Ombreggiato (Solo Internet explorer)',
	'ABBC3_SHADOW_TIP'			=> '[shadow=(colore)]testo[/shadow]',
	'ABBC3_SHADOW_VIEW'			=> '<div style="filter:shadow(color=black,strength=4);color:blue;height:110%">Questo Ë un esempio</div>',

	// Dropshadow text
	'ABBC3_DROPSHADOW_MOVER'	=> 'Effeto Ombra (Solo Internet explorer)',
	'ABBC3_DROPSHADOW_TIP'		=> '[dropshadow=(color)]text[/dropshadow]',
	'ABBC3_DROPSHADOW_VIEW'		=> '<div style="filter:dropshadow(color=#999999,strength=4);color:blue;height:110%">Questo Ë un esempio</div>',

	// Blur text
	'ABBC3_BLUR_MOVER'			=> 'Effetto Sfocato (Solo Internet explorer)',
	'ABBC3_BLUR_TIP'			=> '[blur=(colore)]testo[/blur]',
	'ABBC3_BLUR_VIEW'			=> '<div style="filter:Blur(strength=7);color:blue;height:110%">Questo Ë un esempio</div>',

	// Wave text
	'ABBC3_WAVE_MOVER'			=> 'Effetto Onda (Solo Internet explorer)',
	'ABBC3_WAVE_TIP'			=> '[wave=(colore)]tetso[/wave]',
	'ABBC3_WAVE_VIEW'			=> '<div style="filter:Wave(strength=2);color:blue;height:110%">Questo Ë un esempio</div>',

	// Unordered List
	'ABBC3_LISTB_MOVER'			=> 'Elenco puntato',
	'ABBC3_LISTB_TIP'			=> '[list]testo[/list]',
	'ABBC3_LISTB_NOTE'			=> 'Nota: Utilizzare [*] per creare dei punti',
	'ABBC3_LISTB_VIEW'			=> '<ul><li>Punto uno </li><li>Secondo due </li><li>Punto tre</li></ul>',

	// Ordered List
	'ABBC3_LISTO_MOVER'			=> 'Elenco ordinato',
	'ABBC3_LISTO_TIP'			=> '[list=1|a]testo[/list]',
	'ABBC3_LISTO_NOTE'			=> 'Nota: Utilizzare [*] per creare dei punti',
	'ABBC3_LISTO_VIEW'			=> '<ol style="list-style-type: lower-alpha"><li>Punto primo</li><li>Punto secondo</li><li>Punto terzo</li></ol>',

	// List item
	'ABBC3_LISTITEM_MOVER'		=> 'Punto lista',
	'ABBC3_LISTITEM_TIP'		=> '[*]',
	'ABBC3_LISTITEM_NOTE'		=> 'Nota: Crea i puntoi nella lista',

	// Line Break
	'ABBC3_HR_MOVER'			=> 'Intestazione',
	'ABBC3_HR_TIP'				=> '[hr]',
	'ABBC3_HR_NOTE'				=> 'Nota: Crea una linea di intestazione che separa il testo',
	'ABBC3_HR_VIEW'				=> '<hr noshade color="#000000" size="1px">',

	// Message Box text direction Left to right
	'ABBC3_DIRRTL_MOVER'		=> 'Testo scritto da sinistra a destra',
	'ABBC3_DIRRTL_TIP'			=> '[dir=rtl]text[/dir]',
	'ABBC3_DIRRTL_VIEW'			=> '<BDO dir="rtl">Questo Ë un esempio</BDO>',

	// Message Box text direction right to Left
	'ABBC3_DIRLTR_MOVER'		=> 'Testo scritto da destra a sinistra',
	'ABBC3_DIRLTR_TIP'			=> '[dir=ltr]testo[/dir]',
	'ABBC3_DIRLTR_VIEW'			=> '<BDO dir="ltr">Questo Ë un esempio</BDO>',

	// Marquee Down
	'ABBC3_MARQDOWN_MOVER'		=> 'Testo scorrevole verso il basso',
	'ABBC3_MARQDOWN_TIP'		=> '[marq=down]testo[/marq]',
	'ABBC3_MARQDOWN_VIEW'		=> '<marquee direction="down" scrolldelay="120" height="80px">Questo Ë un esempio</marquee>',

	// Marquee Up
	'ABBC3_MARQUP_MOVER'		=> 'Testo scorrevole verso l\'alto',
	'ABBC3_MARQUP_TIP'			=> '[marq=up]testo[/marq]',
	'ABBC3_MARQUP_VIEW'			=> '<marquee direction="up" scrolldelay="120" height="80px">Questo Ë un esempio</marquee>',

	// Marquee Right
	'ABBC3_MARQRIGHT_MOVER'		=> 'Testo scorrevole verso destra',
	'ABBC3_MARQRIGHT_TIP'		=> '[marq=right]testo[/marq]',
	'ABBC3_MARQRIGHT_VIEW'		=> '<marquee direction="right" scrolldelay="120">Questo Ë un esempio</marquee>',

	// Marquee Left
	'ABBC3_MARQLEFT_MOVER'		=> 'Testo scorrevole verso sinistra',
	'ABBC3_MARQLEFT_TIP'		=> '[marq=left]testo[/marq]',
	'ABBC3_MARQLEFT_VIEW'		=> '<marquee direction="left" scrolldelay="120">Questo Ë un esempio</marquee>',

	// Table row cell wizard
	'ABBC3_TABLE_MOVER'			=> 'Inserisci una tabela',
	'ABBC3_TABLE_TIP'			=> '[table=(ccs style)][tr=(ccs style)][td=(ccs style)]testo[/td][/tr][/table]',
	'ABBC3_TABLE_VIEW'			=> '<table style="width:50%;border:1px solid #cccccc;" cellspacing="0" cellpadding="0"><tr style="text-align:center;"><td style="border:1px solid #cccccc;">Questo Ë un esempio</td></tr></table>',

	'ABBC3_TABLE_STYLE'			=> 'Inserisci lo stile della tabella',
	'ABBC3_TABLE_EXAMPLE'		=> 'width:50%;border:1px solid #cccccc;',

	'ABBC3_ROW_NUMBER'			=> 'Inserisci un numero di righe',
	'ABBC3_ROW_ERROR'			=> 'Non hai inserito il numero di righe',
	'ABBC3_ROW_STYLE'			=> 'Inserisci lo stile delle righe',
	'ABBC3_ROW_EXAMPLE'			=> 'text-align:center;',

	'ABBC3_CELL_NUMBER'			=> 'Inserisci un numero di colonne',
	'ABBC3_CELL_ERROR'			=> 'Non hai inserito il numero di colonne',
	'ABBC3_CELL_STYLE'			=> 'Inserisci lo stile delle colone',
	'ABBC3_CELL_EXAMPLE'		=> 'border:1px solid #cccccc;',

	// Simple upload files
	'ABBC3_UPLOAD_TITLE'		=> 'Advanced BBCode box 3 :: Pagina per l\'Upload di File',
	'ABBC3_UPLOAD_MOVER'		=> 'Upload File',
	'ABBC3_UPLOAD_LINK'			=> 'Questo Ë il link al file',
	'ABBC3_UPLOAD_UPLOADED'		=> 'L\'Upload %s Ë andato a buon fine!',
	'ABBC3_UPLOAD_NOT_UPLOADED'	=> 'L\'Upload %s non puÚ essere caricato',
	'ABBC3_UPLOAD_ALREADY'		=> 'Allegato %s gi‡ esistente, rinomina o cambia il file e riprova',
	'ABBC3_UPLOAD_ERROR'		=> 'Non posso caricare il file %s. Codice di errore : %d (Avisa un amminiatratore)',
	'ABBC3_UPLOAD_EXTENSION'	=> 'Estensioni diponibili',
	'ABBC3_UPLOAD_EXTENSION_EXPLAIN'	=> 'Puoi aggiungere/modificare/cancellare le estensioni diponibili. Separa le estensioni con una virgola(,)',
	'ABBC3_UPLOAD_DISABLED'		=> 'L\'estensione %s non Ë permessa',
	'ABBC3_UPLOAD_SIZE'			=> 'La dimensione massima',
	'ABBC3_UPLOAD_NOSIZE'		=> 'La dimensione dell\'upload %d Ë troppo grande. Il massimo permesso Ë di %d KB',
	'ABBC3_UPLOAD_EMPTY'		=> 'Nessun file selezionato!',

	// Hyperlink Wizard
	'ABBC3_URL_TAG'				=> 'Link',
	'ABBC3_URL_MOVER'			=> 'Indirizzo Web',	
	'ABBC3_URL_TIP'				=> '[url]http://...[/url] or [url=http://...]Testo[/url]',
	'ABBC3_URL_EXAMPLE'			=> 'http://www.google.com',
	'ABBC3_URL_VIEW'			=> '<a href="http://www.google.com" class="postlink">Google</a>',

	// Email Wizard
	'ABBC3_EMAIL_TAG'			=> 'Mail',
	'ABBC3_EMAIL_MOVER'			=> 'Email',
	'ABBC3_EMAIL_TIP'			=> '[email]user@server.ext[/email] or [email=user@server.ext]Scrivimi[/email]',
	'ABBC3_EMAIL_EXAMPLE'		=> 'user@server.ext',
	'ABBC3_EMAIL_VIEW'			=> '<a href="mailto:user@server.ext">user@server.ext</a>',

	// Ed2k link Wizard
	'ABBC3_ED2K_TAG'			=> 'ed2k',
	'ABBC3_ED2K_MOVER'			=> 'Link eD2K',
	'ABBC3_ED2K_TIP'			=> '[url]link ed2k[/url] or [url=link ed2k]Testo[/url]',
	'ABBC3_ED2K_EXAMPLE'		=> 'ed2k://|file|The_Two_Towers-The_Purist_Edit-Trailer.avi|14997504|965c013e991ee246d63d45ea71954c4d|/',
	'ABBC3_ED2K_VIEW'			=> '<a href="ed2k://|file|The_Two_Towers-The_Purist_Edit-Trailer.avi|14997504|965c013e991ee246d63d45ea71954c4d|/" class="postlink">The_Two_Towers-The_Purist_Edit-Trailer.avi</a>',
	'ABBC3_ED2K_ADD'			=> 'Aggiungi il seguente link al tuo  client ed2k (Es.eMule)',

	// Web included by iframe
	'ABBC3_WEB_TAG'				=> 'Includi pagina',
	'ABBC3_WEB_MOVER'			=> 'Include una pagina web nel post',
	'ABBC3_WEB_TIP'				=> '[web width=200 height=100]URL web[/web]',
	'ABBC3_WEB_EXAMPLE'			=> 'http://www.google.com',
	'ABBC3_WEB_VIEW'			=> '<iframe width="100%" height="100" src="http://www.google.com" style="font-size: 2px;"></iframe><br/>',

	// Image Wizard
	'ABBC3_IMG_TAG'				=> 'Immagine',
	'ABBC3_IMG_MOVER'			=> 'Inserisce un\'immagine',
	'ABBC3_IMG_TIP'				=> '[img=(left|center|right)]http://...[/img]',
	'ABBC3_IMG_EXAMPLE'			=> 'http://www.google.com/intl/en_com/images/logo_plain.png',
	'ABBC3_IMG_VIEW'			=> '<div align="center"><img src="http://www.google.com/intl/en_com/images/logo_plain.png" alt="" /></div>',

	// Thumbnail
	'ABBC3_THUMBNAIL_TAG'		=> 'Miniatura',
	'ABBC3_THUMBNAIL_MOVER'		=> 'Inserisce una miniatura',
	'ABBC3_THUMBNAIL_TIP'		=> '[thumbnail(=left|right)]http://...[/thumbnail]',
	'ABBC3_THUMBNAIL_EXAMPLE'	=> 'http://www.google.com/intl/en_com/images/logo_plain.png',
	'ABBC3_THUMBNAIL_VIEW'		=> '<img src="http://www.google.com/intl/en_com/images/logo_plain.png" alt="" border="0" " width="' . $config['ABBC3_MAX_THUM_WIDTH'] . '" class="hoverbox" />',

	// Imgshack
	'ABBC3_IMGSHACK_MOVER'		=> 'Inserisci immagine da imageshack',
	'ABBC3_IMGSHACK_TIP'		=> '[url=http://imageshack.us][img=http://...][/img][/url]',
	'ABBC3_IMGSHACK_VIEW'		=> '<a href="http://img207.imageshack.us/my.php?image=advancedbbcodebox3prosidd3.gif" class="postlink"><img src="http://img207.imageshack.us/img207/1773/advancedbbcodebox3prosidd3.th.gif" alt="Image" /></a>',

	// Rapid share checker
	'ABBC3_RAPIDSHARE_TAG'		=> 'Rapidshare',
	'ABBC3_RAPIDSHARE_MOVER'	=> 'Inserisce un file da rapidshare',
	'ABBC3_RAPIDSHARE_TIP'		=> '[rapidshare]http://rapidshare.com/files/...[/rapidshare]',
	'ABBC3_RAPIDSHARE_EXAMPLE'	=> 'http://rapidshare.com/files/86587996/ABBC3_v108.zip.html',
	'ABBC3_RAPIDSHARE_VIEW'		=> '<a href="http://rapidshare.com/files/86587996/ABBC3_v108.zip.html" >http://rapidshare.com/files/86587996/ABBC3_v108.zip.html</a> <font color="green" size="4" >File not found !</font><br />',
	'ABBC3_RAPIDSHARE_GOOD'		=> 'File non trovato sul server !',
	'ABBC3_RAPIDSHARE_WRONG'	=> '404: File non trovato !',

	// testlink
	'ABBC3_CURL_ERROR'			=> '<strong>Errore : </strong> Attenzione ma sembra che CURL non si caricato, installalo per poter utilizzare questa funzione.',
	'ABBC3_TESTLINK_TAG'		=> 'link checker',
	'ABBC3_TESTLINK_MOVER'		=> 'Inserisci un file contenuto in un server pubblico',
	'ABBC3_TESTLINK_TIP'		=> '[testlink]http://rapidshare.com/files/...[/testlink]',
	'ABBC3_TESTLINK_NOTE'		=> 'Server validi:rapidshare,megaupload,megarotic,depositfiles,megashares .',
	'ABBC3_TESTLINK_EXAMPLE'	=> 'http://rapidshare.com/files/86587996/ABBC3_v108.zip.html',
	'ABBC3_TESTLINK_VIEW'		=> '<dl class="testlink"><dd><font color="red" size="4" >X</font>&nbsp;<a href="http://rapidshare.com/files/86587996/ABBC3_v108.zip.html" >http://rapidshare.com/files/86587996/ABBC3_v108.zip.html</a><br /></dd></dl>',
	'ABBC3_TESTLINK_GOOD'		=> 'File non trovato sul server !',
	'ABBC3_TESTLINK_WRONG'		=> '404: File non trovato !',

	// Click counter
	'ABBC3_CLICK_TAG'			=> 'click',
	'ABBC3_CLICK_MOVER'			=> 'Inserisce un contatore di click',
	'ABBC3_CLICK_TIP'			=> '[click]http://...[/click] or [click=http://...]Testo[/click] or [click][img]http://...[/img][/click]',
	'ABBC3_CLICK_EXAMPLE' 		=> 'http://www.google.com ' . ' ' . 'http://www.google.com/intl/en_com/images/logo_plain.png' ,
	'ABBC3_CLICK_VIEW'			=> '<a href="./click.php?id=1" >http://www.phpbb.com</a> ( Clicked 1 time )<br />',
	'ABBC3_CLICK_TIME'			=> '( Cliccato %d volta )',
	'ABBC3_CLICK_TIMES'			=> '( Clicato %d volte )',

	// Search tag
	'ABBC3_SEARCH_MOVER'		=> 'Inserisce un ricerca',
	'ABBC3_SEARCH_TIP'			=> '[search(=(msn|yahoo|google))]teato[/search]',
	'ABBC3_SEARCH_VIEW'			=> $lang['SEARCH_MINI'] . ' ' . $config['sitename'] . ' : <a href="search.php?keywords=Advanced BBcode box 3">"Advanced BBcode box 3"</a><br/><br/>' . $lang['SEARCH_MINI'] . ' msn : <a href="http://search.live.com/results.aspx?q=Advanced BBcode box 3&mkt=tr-TR&lf=1" target="_blank">"Advanced BBcode box 3"</a><br/><br/>' .$lang['SEARCH_MINI'] . ' yahoo : <a href="http://search.yahoo.com/search?p=Advanced BBcode box 3" target="_blank">"Advanced BBcode box 3"</a><br/><br/>' . $lang['SEARCH_MINI'] . ' google : <a href="http://www.google.com.tr/search?q=Advanced BBcode box 3" target="_blank">"Advanced BBcode box 3"</a>',

	// BBvideo Wizard
	'ABBC3_BBVIDEO_TAG'			=> 'BBvideo',
	'ABBC3_BBVIDEO_MOVER'		=> 'Inserisce web video',
	'ABBC3_BBVIDEO_TIP'			=> '[BBvideo]Video URL[/BBvideo]',
	'ABBC3_BBVIDEO_EXAMPLE'		=> 'http://www.youtube.com/watch?v=TA4hm97m494',
	'ABBC3_BBVIDEO_VIEW'		=> '<object width="200" height="100"><param name="movie" value="http://www.youtube.com/v/TA4hm97m494" /><param name="wmode" value="transparent" /><embed src="http://www.youtube.com/v/TA4hm97m494" type="application/x-shockwave-flash" wmode="transparent" width="200" height="100"></embed></object>',
	'ABBC3_BBVIDEO_FILE'		=> 'Formato Video',
	'ABBC3_BBVIDEO_VIDEO'		=> 'Video da',

	// Flash (swf) Wizard
	'ABBC3_FLASH_TAG'			=> 'flash',
	'ABBC3_FLASH_MOVER'			=> 'Inserisce flash file (swf)',
	'ABBC3_FLASH_TIP'			=> '[flash width=# height=#]URL flash[/flash] or [flash larghezza,altezza]URL flash[/flash]',
	'ABBC3_FLASH_EXAMPLE'		=> 'http://www.adobe.com/support/flash/ts/documents/test_version/version.swf',
	'ABBC3_FLASH_VIEW'			=> '<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0" width="200" height="100"><param name="movie" value="http://www.adobe.com/support/flash/ts/documents/test_version/version.swf" /><param name="play" value="true" /><param name="loop" value="true" /><param name="quality" value="high" /><param name="allowScriptAccess" value="never" /><param name="allowNetworking" value="internal" /><embed src="http://www.adobe.com/support/flash/ts/documents/test_version/version.swf" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" width="200" height="100" play="true" loop="true" quality="high" allowscriptaccess="never" allownetworking="internal"></embed></object>',

	// Flash (flv) Wizard
	'ABBC3_FLV_TAG'				=> 'flash',
	'ABBC3_FLV_MOVER'			=> 'Inserisce flash video (flv)',
	'ABBC3_FLV_TIP'				=> '[flv width=# height=#]URL flash video[/flv] or [flv larghezza,altezza]URL flash video[/flv]',
	'ABBC3_FLV_EXAMPLE' 		=> 'http://www.channel-ai.com/video/eyn/demo1.flv',
	'ABBC3_FLV_VIEW'			=> '<embed src="../images/flvplayer.swf" width="200" height="100" bgcolor="#FFFFFF" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="file=../files/demo1.flv&autostart=false" />',

	// Streaming Video Wizard
	'ABBC3_VIDEO_TAG'			=> 'video',
	'ABBC3_VIDEO_MOVER'			=> 'Inserisce video',
	'ABBC3_VIDEO_TIP'			=> '[video width=# height=#]URL video[/video]',
	'ABBC3_VIDEO_EXAMPLE'		=> 'http://www.sarahsnotecards.com/catalunyalive/fishstore.wmv',
	'ABBC3_VIDEO_VIEW'			=> '<object classid="CLSID:6BF52A52-394A-11d3-B153-00C04F79FAA6" id="player"  width="200" height="100"><param name="url" value="http://www.sarahsnotecards.com/catalunyalive/fishstore.wmv" /><param name="src" value="http://www.sarahsnotecards.com/catalunyalive/fishstore.wmv" /><param name="showcontrols" value="true" /><param name="autostart" value="false" /><!--[if !IE]>--><object type="video/x-ms-wmv" data="http://www.sarahsnotecards.com/catalunyalive/fishstore.wmv" width="200" height="100" ><param name="src" value="http://www.sarahsnotecards.com/catalunyalive/fishstore.wmv" /><param name="autostart" value="false" /><param name="controller" value="true" /></object><!--<![endif]--></object>',

	// Streaming Audio Wizard
	'ABBC3_STREAM_TAG'			=> 'sound',
	'ABBC3_STREAM_MOVER'		=> 'Inserisce un suono',
	'ABBC3_STREAM_TIP'			=> '[stream]URL stream[/stream]',
	'ABBC3_STREAM_EXAMPLE'		=> 'http://realdev1.realise.com/rossa/mov/demo.mp3',
	'ABBC3_STREAM_VIEW'			=> '<object width="200" height="45" classid="CLSID:6BF52A52-394A-11d3-B153-00C04F79FAA6" id="wmstream_"><param name="url" value="http://realdev1.realise.com/rossa/mov/demo.mp3" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /><param name="src" value="http://realdev1.realise.com/rossa/mov/demo.mp3" /><!--[if !IE]>--><object width="200" height="45" type="video/x-ms-wmv" data="http://realdev1.realise.com/rossa/mov/demo.mp3"><param name="src" value="http://realdev1.realise.com/rossa/mov/demo.mp3" /><param name="controller" value="1" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /></object><!--<![endif]--></object>',

	// Quick time
	'ABBC3_QUICKTIME_TAG'		=> 'Quick time',
	'ABBC3_QUICKTIME_MOVER'		=> 'Inserisce Quick time',
	'ABBC3_QUICKTIME_TIP'		=> '[quicktime width=# height=#]URL Quick time[/quicktime]',
	'ABBC3_QUICKTIME_EXAMPLE'	=> 'http://www.nature.com/neuro/journal/v3/n3/extref/Li_control.mov.qt' . ' ' . 'http://www.carnivalmidways.com/images/Music/thisisatest.mp3',
	'ABBC3_QUICKTIME_VIEW'		=> '<object id="qtstream_" classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab#version=6,0,2,0" width="200" height="100"><param name="src" value="http://www.nature.com/neuro/journal/v3/n3/extref/Li_control.mov.qt" /><param name="controller" value="true" /><param name="autoplay" value="false" /><param name="type" value="video/quicktime" /><embed name="qtstream_" src="http://www.nature.com/neuro/journal/v3/n3/extref/Li_control.mov.qt" pluginspage="http://www.apple.com/quicktime/download/" enablejavascript="true" controller="true" width="200" height="100" type="video/quicktime" autoplay="false"></embed></object>',

	// Real Media Wizard
	'ABBC3_RAM_TAG'				=> 'Real Media',
	'ABBC3_RAM_MOVER'			=> 'Inserisce Real Media',
	'ABBC3_RAM_TIP'				=> '[ram]URL Real Media[/ram]',
	'ABBC3_RAM_EXAMPLE'			=> 'http://www.bbc.co.uk/scotland/radioscotland/media/radioscotland.ram',
	'ABBC3_RAM_VIEW'			=> '<object id="rmstream_" classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" width="200" height="100"><param name="src" value="http://www.bbc.co.uk/scotland/radioscotland/media/radioscotland.ram" /><param name="autostart" value="false" /><param name="controls" value="ImageWindow" /><param name="console" value="ctrls_" /><param name="prefetch" value="false" /><embed name="rmstream_" type="audio/x-pn-realaudio-plugin" src="http://www.bbc.co.uk/scotland/radioscotland/media/radioscotland.ram" width="200" height="100" autostart="false" controls="ImageWindow" console="ctrls_" prefetch="false"></embed></object><br /><object id="ctrls_" classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" width="200" height="36"><param name="controls" value="ControlPanel" /><param name="console" value="ctrls_" /><embed name="ctrls_" type="audio/x-pn-realaudio-plugin" width="200" height="36" controls="ControlPanel" console="ctrls_"></embed></object>',

//	// Stage6 video Wizard
//	'ABBC3_STAGE6_TAG'			=> 'Stage6 Video',
//	'ABBC3_STAGE6_MOVER'		=> 'Inserisce video da Stage6', // da http://www.stage6.com/
//	'ABBC3_STAGE6_TIP'			=> '[stage6]Stage6 ID[/stage6]',
//	'ABBC3_STAGE6_EXAMPLE'		=> '2068715',
//	'ABBC3_STAGE6_VIEW'			=> '<object  classid="clsid:67DABFBF-D0AB-41fa-9C46-CC0F21721616" codebase="http://download.divx.com/player/DivXBrowserPlugin.cab" width="200" height="100" ><param name="src" value="http://video.stage6.com/2068715/.divx" /><param name="autoplay" value="false" /><param name="custommode" value="Stage6" /><param name="showpostplaybackad" value="false" /><embed type="video/divx" src="http://video.stage6.com/2068715/.divx" pluginspage="http://go.divx.com/plugin/download/" showpostplaybackad="false" custommode="Stage6" autoplay="false" width="200" height="100" /></object><br />',

	// Google video Wizard
	'ABBC3_GVIDEO_TAG'			=> 'Google Video',
	'ABBC3_GVIDEO_MOVER'		=> 'Inserisce video da Google',
	'ABBC3_GVIDEO_TIP'			=> '[GVideo]URL video[/GVideo]',
	'ABBC3_GVIDEO_EXAMPLE'		=> 'http://video.google.com/videoplay?docid=-8351924403384451128',
	'ABBC3_GVIDEO_VIEW'			=> '<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0" width="200" height="100"><param name="movie" value="http://video.google.com/googleplayer.swf?docid=-8351924403384451128" /><param name="play" value="false" /><param name="loop" value="false" /><param name="quality" value="high" /><param name="allowScriptAccess" value="never" /><param name="allowNetworking" value="internal" /><embed src="http://video.google.com/googleplayer.swf?docid=-8351924403384451128" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" width="200" height="100" play="false" loop="false" quality="high" allowscriptaccess="never" allownetworking="internal"></embed></object>',

	// Youtube video Wizard
	'ABBC3_YOUTUBE_TAG'			=> 'Youtube Video',
	'ABBC3_YOUTUBE_MOVER'		=> 'Inserisce video da Youtube',
	'ABBC3_YOUTUBE_TIP'			=> '[youtube]URL video[/youtube]',
	'ABBC3_YOUTUBE_EXAMPLE'		=> 'http://www.youtube.com/watch?v=TA4hm97m494',
	'ABBC3_YOUTUBE_VIEW'		=> '<object width="200" height="100"><param name="movie" value="http://www.youtube.com/v/TA4hm97m494" /><param name="wmode" value="transparent" /><embed src="http://www.youtube.com/v/TA4hm97m494" type="application/x-shockwave-flash" wmode="transparent" width="200" height="100"></embed></object>',

	// Veoh video
	'ABBC3_VEOH_TAG'			=> 'Veoh',
	'ABBC3_VEOH_MOVER'			=> 'Inserisce video da Veoh',
	'ABBC3_VEOH_TIP'			=> '[veoh]URL video[/veoh]',
	'ABBC3_VEOH_EXAMPLE'		=> 'http://www.veoh.com/videos/v1409404EqT5SJjM',
	'ABBC3_VEOH_VIEW'			=> '<embed src="http://www.veoh.com/videodetails2.swf?permalinkId=v1409404EqT5SJjM&id=anonymous&player=videodetailsembedded&videoAutoPlay=0" allowFullScreen="true" width="200" height="100" bgcolor="#000000" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>',

	// Collegehumor video
	'ABBC3_COLLEGEHOMOR_TAG'	=> 'Collegehumor',
	'ABBC3_COLLEGEHUMOR_MOVER'	=> 'Inserisce video da collegehumor',
	'ABBC3_COLLEGEHUMOR_TIP'	=> '[collegehumor]collegehumor video URL[/collegehumor]',
	'ABBC3_COLLEGEHUMOR_EXAMPLE'=> 'http://www.collegehumor.com/video:1802097',
	'ABBC3_COLLEGEHUMOR_VIEW'	=> '<object type="application/x-shockwave-flash" data="http://www.collegehumor.com/moogaloop/moogaloop.swf?clip_id=1802097&fullscreen=1" width="200" height="100" ><param name="allowfullscreen" value="true" /><param name="movie" quality="best" value="http://www.collegehumor.com/moogaloop/moogaloop.swf?clip_id=1802097&fullscreen=1" /></object>',

	// Dailymotion video
	'ABBC3_DM_MOVER'			=> 'Inserisce video da dailymotion', // da http://www.dailymotion.com/
	'ABBC3_DM_TIP'				=> '[dm]Dailymotion ID[/dm]',
	'ABBC3_DM_EXAMPLE'			=> 'http://www.dailymotion.com/swf/x3hm7o',
	'ABBC3_DM_VIEW'				=> '<object width="200" height="100"><param name="movie" value="http://www.dailymotion.com/swf/x3hm7o" /><param name="allowFullScreen" value="true" /><param name="allowScriptAccess" value="never" /><embed src="http://www.dailymotion.com/swf/x3hm7o" type="application/x-shockwave-flash" width="200" height="100" allowFullScreen="true" allowScriptAccess="never"></embed></object>',

	// Gamespot video
	'ABBC3_GAMESPOT_MOVER'		=> 'inserisci video da Gamespot',
	'ABBC3_GAMESPOT_TIP'		=> '[gamespot]Gamespot video URL[gamespot]',
	'ABBC3_GAMESPOT_EXAMPLE'	=> 'http://www.gamespot.com/video/944074/6185798/tom-clancys-rainbow-six-vegas-2-official-trailer-3',
	'ABBC3_GAMESPOT_VIEW'		=> '<embed id="mymovie" width="200" height="100" flashvars="paramsURI=http%3A%2F%2Fwww%2Egamespot%2Ecom%2Fpages%2Fvideo%5Fplayer%2Fproteus%5Fxml%2Ephp%3Fadseg%3D%26adgrp%3D%26sid%3D6185798%26pid%3D944074%26mb%3D%26onid%3D%26nc%3D1202626246593%26embedded%3D1%26showWatermark%3D0%26autoPlay%3D0" allowfullscreen="true" allowscriptaccess="never" quality="high" name="mymovie" src="http://image.com.com/gamespot/images/cne_flash/production/media_player/proteus/gs/proteus_embed.swf" type="application/x-shockwave-flash"/>',

	// Gametrailers video
	'ABBC3_GAMETRAILERS_MOVER'	=> 'inserisci video da Gametrailers',
	'ABBC3_GAMETRAILERS_TIP'	=> '[gametrailers]Gametrailers video URL[/gametrailers]',
	'ABBC3_GAMETRAILERS_EXAMPLE'=> 'http://www.gametrailers.com/player/30461.html',
	'ABBC3_GAMETRAILERS_VIEW'	=> '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"  codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" id="gtembed" width="200" height="100"><param name="allowScriptAccess" value="never" /><param name="allowFullScreen" value="true" /><param name="movie" value="http://www.gametrailers.com/remote_wrap.php?mid=30461" /><param name="quality" value="high" /><embed src="http://www.gametrailers.com/remote_wrap.php?mid=30461" swLiveConnect="true" name="gtembed" align="middle" allowScriptAccess="never" allowFullScreen="true" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="200" height="100"></embed></object>',

	// IGN video
	'ABBC3_IGNVIDEO_MOVER'		=> 'inserisci video da Ign',
	'ABBC3_IGNVIDEO_TIP'		=> '[ignvideo]ING video URL[/ignvideo]',
	'ABBC3_IGNVIDEO_EXAMPLE'	=> 'object_ID=967025&downloadURL=http://tvmovies.ign.com/tv/video/article/850/850894/knightrider_trailer_020808_flvlow.flv',
	'ABBC3_IGNVIDEO_VIEW'		=> '<embed src="http://videomedia.ign.com/ev/ev.swf" flashvars="object_ID=967025&downloadURL=http://tvmovies.ign.com/tv/video/article/850/850894/knightrider_trailer_020808_flvlow.flv" type="application/x-shockwave-flash" width="200" height="100" ></embed>',

	// LiveLeak video
	'ABBC3_LIVELEAK_MOVER'		=> 'inserisci video da Liveleak',
	'ABBC3_LIVELEAK_TIP'		=> '[liveleak]Liveleak video URL[/liveleak]',
	'ABBC3_LIVELEAK_EXAMPLE'	=> 'http://www.liveleak.com/view?i=413_1202590393',
	'ABBC3_LIVELEAK_VIEW'		=> '<object type="application/x-shockwave-flash" width="200" height="100" wmode="transparent" data="http://www.liveleak.com/player.swf?autostart=false&token=i=413_1202590393"><param name="movie" value="http://www.liveleak.com/player.swf?autostart=false&token=$1" /><param name="wmode" value="transparent" /><param name="quality" value="high" /></object>',

	// Custom BBcodes
));

?>