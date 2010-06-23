<?php
/** 
* @package: phpBB3 :: Advanced BBCode box 3 -> language [de][Dutch]
* @version: $Id: abbcode.php, v 1.0.8 2008/03/31 03:01:00 leviatan21 Exp $
* @copyright: leviatan21 < info@mssti.com > (Gabriel) http://www.mssti.com/phpbb3/
* @license: http://opensource.org/licenses/gpl-license.php GNU Public License 
* @author: leviatan21 - http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=345763
* @translator: pavabe - http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=158257
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
// equally where a string contains only two placeholders which are used to wrap tekst
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
// Reference : http://www.phpbb.com/mods/documentation/phpbb-documentation/language/index.php#lang-use-php

$lang = array_merge($lang, array(
// Help page
	'ABBC3_HELP_TITLE'			=> 'Advanced BBCode box 3 :: Help Pagina',
	'ABBC3_HELP_DESC'			=> 'Omschrijving',
	'ABBC3_HELP_WRITE'			=> 'Jouw schrijf formaat',
	'ABBC3_HELP_VIEW'			=> 'Ons showformaat',
	'ABBC3_HELP_ABOUT'			=> 'Advanced BBCode Box 3 bij <a href="http://www.mssti.com/phpbb3">mssti</a>',
	'ABBC3_HELP_ALT'			=> 'Advanced BBCode Box 3 (aka ABBC3)',

// Image Resizer JS - Start
	'ABBC3_RESIZE_SMALL'		=> 'Klik hier om de afbeelding te zien op ware grote.',
	'ABBC3_RESIZE_FILESIZE'		=> 'Deze afbeelding is verkleind. Klik hier om de afbeelding te zien op ware grote. Orginele afbeelding resolutie is %1$sx%2$s en grote %3$sKB.',
	'ABBC3_RESIZE_NOFILESIZE'	=> 'Deze afbeelding is verkleind. Klik hier om de afbeelding te zien op ware grote. Orginele afbeelding resolutie is %1$sx%2$s.',
	'ABBC3_RESIZE_FULLSIZE'		=> 'Klik hier om de verkleinde afbeelding weer te geven.',
	
// Text to be applied to the helpline & mouseover & help page & Wizard texts
	'BBCODE_STYLES_TIP'			=> 'Tip: Op de geselecteerde tekst kun je de stijl snel veranderen.',
	
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
	
	'ABBC3_NOTE'				=> 'Tip',
	'ABBC3_EXAMPLE'				=> 'Voorbeeld',
	'ABBC3_EXAMPLES'			=> 'Voorbeelden',
	
// bbcodes texts	
	// Font Type Dropdown
	'ABBC3_FONTTYPE_MOVER'		=> 'Letter type',
	'ABBC3_FONTTYPE_TIP'		=> '[font=Comic Sans MS]tekst[/font]',
	'ABBC3_FONTTYPE_NOTE'		=> 'Tip: Je kan je eigen fonts gebruiken',
	'ABBC3_FONTTYPE_VIEW'		=> '<span style="font-family:Comic Sans MS">Dit is een voorbeeld tekst</span>',
	
	// Font Size Dropdown
	'ABBC3_FONT_GIANT'			=> 'Heel groot',
	'ABBC3_FONTSIZE_MOVER'		=> 'Letter grote',
	'ABBC3_FONTSIZE_TIP'		=> '[size=150]tekst groot[/size]',
	'ABBC3_FONTSIZE_NOTE'		=> 'Tip: De invoer is in percentage',
	'ABBC3_FONTSIZE_VIEW'		=> '<span style="font-size: 150%; line-height: 116%;">Dit is een voorbeeld tekst</span>',
	
	// Highlight Font Color Dropdown
	'ABBC3_FONTHILI_MOVER'		=> 'Tekst gemarkeerd',
	'ABBC3_FONTHILI_TIP'		=> '[highlight=yellow]tekst[/highlight]',
	'ABBC3_FONTHILI_NOTE'		=> 'Tip : Je kan ook html kleur codes gebruiken color=#FF0000 of color=red)',
	'ABBC3_FONTHILI_VIEW'		=> '<span style="background-color: yellow;">Dit is een voorbeeld tekst</span>',
	
	// Font Color Dropdown
	'ABBC3_FONTCOLOR_MOVER'		=> 'Letter kleur',
	'ABBC3_FONTCOLOR_TIP'		=> '[color=red]tekst[/color]',
	'ABBC3_FONTCOLOR_NOTE'		=> 'Tip: Je kan ook html kleur codes gebruiken (color=#FF0000 of color=red)',
	'ABBC3_FONTCOLOR_VIEW'		=> '<span style="color:red">Dit is een voorbeeld tekst</span>',
	
	// Cut selected text
	'ABBC3_CUT_MOVER'			=> 'Verwijderd de geselecteerde tekst',
	// Copy selected text
	'ABBC3_COPY_MOVER'			=> 'Kopieert de geselecteerde tekst',
	// Paste previously copy text
	'ABBC3_PASTE_MOVER'			=> 'Plak de gekopieerde tekst',
	'ABBC3_PASTE_ERROR'			=> 'Eerst de tekst kopieren, dan pas plakken ',
	// Remove BBCode (Removes all BBCode tags from selected text)
	'ABBC3_PLAIN_MOVER'			=> 'Verwijder de BBCodes van de geselecteerde tekst',
	'ABBC3_NOSELECT_ERROR'		=> 'Eerst de tekst selecteren ',
	
	// Code
	'ABBC3_CODE_MOVER'			=> 'Code weergave',
	'ABBC3_CODE_TIP'			=> '[code]tekst[/code]',
	'ABBC3_CODE_VIEW'			=> '<dl class="codebox"><dt>'. $lang['CODE'] .': <a href="#" onclick="selectCode(this); return false;">'. $lang['SELECT_ALL_CODE'] .'</a></dt><dd><code>Dit is een voorbeeld tekst</code></dd></dl>',
	
	// Quote
	'ABBC3_QUOTE_MOVER'			=> 'Citeer tekst',
	'ABBC3_QUOTE_TIP'			=> '[quote]tekst[/quote] of [quote=\"member\"]tekst[/quote]',
	'ABBC3_QUOTE_VIEW'			=> '<blockquote><div><cite>member '. $lang['WROTE'] .':</cite>Dit is een voorbeeld tekst</div></blockquote>',
	
	// Spoiler
	'ABBC3_SPOIL_MOVER'			=> 'Spoiler tekst',
	'ABBC3_SPOIL_TIP'			=> '[spoil]tekst[/spoil]',
	'ABBC3_SPOIL_VIEW'			=> '<div class="spoilwrapper"><div class="spoiltitle"><input class="btnspoil" type="button" value="Toon Spoiler" onClick="javascript&#058;if (this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display != \'\') { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'\'; this.innertekst = \'\'; this.value = \'Verberg Spoiler\'; } else { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'none\'; this.innertekst = \'\'; this.value = \'Toon Spoiler\'; }" onfocus="this.blur();"></div><div class="spoilcontent"><div style="display: none;">Dit is een voorbeeld tekst</div></div></div>',
	'SPOILER_SHOW'				=> 'Toon Spoiler',
	'SPOILER_HIDE'				=> 'Verberg Spoiler',
	
	// Hide tag
	'ABBC3_HIDE_MOVER'			=> 'Verberg bericht',
	'ABBC3_HIDE_TIP'			=> '[hide]bericht[/hide]',
	'ABBC3_HIDE_VIEW'			=> '<dl class="hidebox"><dt class="hide">HIDE: AAN</dt><dd>Je moet een antwoord geven op dit bericht, voordat je het verborgen bericht kan lezen</dd></dl>',
	
	// Moderator tag
	'ABBC3_MODERATOR_MOVER'		=> 'Moderator bericht',
	'ABBC3_MODERATOR_TIP'		=> '[mod=naam]tekst[/mod]',
	'ABBC3_MODERATOR_VIEW'		=> '<table id="ModTable" width="100%" cellspacing="5" cellpadding="0" border="0" align="center"><tr><td class="row1" rowspan="2" align="middle" vAlign="center" width="1%"><span class="exclamation" title="Moderator waarschuwing" style="font-size:25px">&nbsp;!&nbsp;</span></td><td class="row2"><span class="genmed"><b>Mod Naam:</b></span></td></tr><tr><td>Dit is een voorbeeld tekst</td></tr></table>',
	
	// Off topic tag
	'ABBC3_OFFTOPIC'			=> 'Offtopic',
	'ABBC3_OFFTOPIC_MOVER'		=> 'Voeg een Off topic tekst toe',
	'ABBC3_OFFTOPIC_TIP'		=> '[offtopic]tekst[/offtopic]',
	'ABBC3_OFFTOPIC_VIEW'		=> '<i><b><font color="#114499">Offtopic: </font></b><br/><font color="#2277DD">Dit is een voorbeeld tekst</font></i>',
	
	// NFO
	'ABBC3_NFO_MOVER'			=> 'NFO tekst (Beter met Internet explorer)',
	'ABBC3_NFO_TIP'				=> '[nfo]NFO tekst[/nfo]',
	'ABBC3_NFO_VIEW'			=> '<table cellspacing="0" cellpadding="0" border="0" ><tr><td><span class="genmed"><b>NFO:</b></span></td></tr><tr><td class="nfo">' . str_replace(" ", "&nbsp;", '    ≤ €€€€ €€±±∞                                  ∞∞∞±±±±≤≤≤€€€€€€€€€€€  €   €€ €€€') . '</td></tr></table>',
	
	// Justify Align
	'ABBC3_JUSTIFY_MOVER'		=> 'Tekst uitgelijnd',
	'ABBC3_JUSTIFY_TIP'			=> '[align=justify]tekst[/align]',
	'ABBC3_JUSTIFY_VIEW'		=> '<div style="tekst-align:justify">Dit is een voorbeeld tekst</div>',
	
	// Right Align
	'ABBC3_RIGHT_MOVER'			=> 'Tekst rechts uitgelijnd',
	'ABBC3_RIGHT_TIP'			=> '[align=right]tekst[/align]',
	'ABBC3_RIGHT_VIEW'			=> '<div style="tekst-align:right">Dit is een voorbeeld tekst</div>',
	
	// Center Align
	'ABBC3_CENTER_MOVER'		=> 'Tekst uitgelijnd in het midden',
	'ABBC3_CENTER_TIP'			=> '[align=center]tekst[/align]',
	'ABBC3_CENTER_VIEW'			=> '<div style="tekst-align:center">Dit is een voorbeeld tekst</div>',
	
	// Left Align
	'ABBC3_LEFT_MOVER'			=> 'Tekst links uitgelijnd',
	'ABBC3_LEFT_TIP'			=> '[align=left]tekst[/align]',
	'ABBC3_LEFT_VIEW'			=> '<div style="tekst-left:justify">Dit is een voorbeeld tekst</div>',
	
	// Preformat
	'ABBC3_PRE_MOVER'			=> 'Tekst vooraf opgemaakt',
	'ABBC3_PRE_TIP'				=> '[pre]tekst[/pre]',
	'ABBC3_PRE_VIEW'			=> '<pre>Dit is een voorbeeld tekst</pre>',
	
	// Tab
	'ABBC3_TAB_MOVER'			=> 'Maak een inspring, zoals tab',
	'ABBC3_TAB_TIP'				=> '[tab=nn]',
	'ABBC3_TAB_NOTE'			=> 'Geef het aantal pixels hoe groot de tab moet zijn.',
	'ABBC3_TAB_VIEW'			=> '<span style="margin-left:20px;"></span>Dit is een voorbeeld tekst',	
	
	// Superscript
	'ABBC3_SUP_MOVER'			=> 'Zet de tekst als superscripts',
	'ABBC3_SUP_TIP'				=> '[sup]tekst[/sup]',
	'ABBC3_SUP_VIEW'			=> '<sup>Dit is een voorbeeld tekst</sup>',
	
	// Subscript
	'ABBC3_SUB_MOVER'			=> 'Zet de tekst als subscripts',
	'ABBC3_SUB_TIP'				=> '[sub]tekst[/sub]',
	'ABBC3_SUB_VIEW'			=> '<sub>Dit is een voorbeeld tekst</sub>',
	
	// Bold
	'ABBC3_BOLD_MOVER'			=> 'Vette tekst',
	'ABBC3_BOLD_TIP'			=> '[b]tekst[/b]',
	'ABBC3_BOLD_VIEW'			=> '<strong>Dit is een voorbeeld tekst</strong>',
	
	// Italic
	'ABBC3_ITALIC_MOVER'		=> 'Cursieve tekst',
	'ABBC3_ITALIC_TIP'			=> '[i]tekst[/i]',
	'ABBC3_ITALIC_VIEW'			=> '<em>Dit is een voorbeeld tekst</em>',
	
	// Underline
	'ABBC3_UNDERLINE_MOVER'		=> 'Onderstreepte tekst',
	'ABBC3_UNDERLINE_TIP'		=> '[u]tekst[/u]',
	'ABBC3_UNDERLINE_VIEW'		=> '<span style="tekst-decoration: underline">Dit is een voorbeeld tekst</span>',
	
	// Strikethrough
	'ABBC3_STRIKE_MOVER'		=> 'Doorstreepte tekst',
	'ABBC3_STRIKE_TIP'			=> '[s]tekst[/s]',
	'ABBC3_STRIKE_VIEW'			=> '<span style="text-decoration: line-through;">Dit is een voorbeeld tekst</span>',
	
	// Text Fade
	'ABBC3_FADE_MOVER'			=> 'Tekst fadein fadeout',
	'ABBC3_FADE_TIP'			=> '[fade]tekst[/fade]',
	'ABBC3_FADE_VIEW'			=> '<span class="fade_link">Dit is een voorbeeld tekst</span> <script type="tekst/javascript">fade_ontimer()</script>',
	
	// Text Gradient
	'ABBC3_GRAD_MOVER'			=> 'Tekst gradi√´nt',
	'ABBC3_GRAD_TIP'            => '',
	'ABBC3_GRAD_VIEW'			=> '<span style="color: #FF0000">D</span><span style="color: #F5000A">i</span><span style="color: #EB0014">t</span> <span style="color: #D60029">i</span><span style="color: #CC0033">s</span> <span style="color: #B80047">e</span><span style="color: #AD0052">e</span><span style="color: #A3005C">n</span> <span style="color: #8F0070">v</span><span style="color: #85007A">o</span><span style="color: #7A0085">o</span><span style="color: #70008F">r</span><span style="color: #660099">b</span><span style="color: #5C00A3">e</span><span style="color: #5200AD">e</span><span style="color: #4700B8">l</span><span style="color: #3D00C2">d</span> <span style="color: #2900D6">t</span><span style="color: #1F00E0">e</span><span style="color: #1400EB">k</span><span style="color: #0A00F5">s</span><span style="color: #0000FF">t</span>',
	'ABBC3_GRAD_MIN_ERROR'		=> 'Eerst de tekst selecteren : ',
	'ABBC3_GRAD_MAX_ERROR'		=> 'Maximaal 120 of minder karakters toegestaan : ',
	
	// Glow text	
	'ABBC3_GLOW_MOVER'			=> 'Gloed tekst (Alleen Internet explorer)',
	'ABBC3_GLOW_TIP'			=> '[glow=(color)]tekst[/glow]',
	'ABBC3_GLOW_VIEW'			=> '<div style="filter:Glow(color=red,strength=4);color:#ffffff;height:110%">Dit is een voorbeeld tekst</div>',
	
	// Shadow text
	'ABBC3_SHADOW_MOVER'		=> 'Schaduw tekst (Alleen Internet explorer)',
	'ABBC3_SHADOW_TIP'			=> '[shadow=(color)]tekst[/shadow]',
	'ABBC3_SHADOW_VIEW'			=> '<div style="filter:shadow(color=black,strength=4);color:blue;height:110%">Dit is een voorbeeld tekst</div>',
	
	// Dropshadow text
	'ABBC3_DROPSHADOW_MOVER'	=> 'Lagere schaduw tekst (Alleen Internet explorer)',
	'ABBC3_DROPSHADOW_TIP'		=> '[dropshadow=(color)]tekst[/dropshadow]',
	'ABBC3_DROPSHADOW_VIEW'		=> '<div style="filter:dropshadow(color=#999999,strength=4);color:blue;height:110%">Dit is een voorbeeld tekst</div>',
	
	// Blur text
	'ABBC3_BLUR_MOVER'			=> 'Onduidelijke tekst (Only Internet explorer)',
	'ABBC3_BLUR_TIP'			=> '[blur=(color)]tekst[/blur]',
	'ABBC3_BLUR_VIEW'			=> '<div style="filter:Blur(strength=7);color:blue;height:110%">Dit is een voorbeeld tekst</div>',
	
	// Wave text
	'ABBC3_WAVE_MOVER'			=> 'Golvende tekst (Only Internet explorer)',
	'ABBC3_WAVE_TIP'			=> '[wave=(color)]tekst[/wave]',
	'ABBC3_WAVE_VIEW'			=> '<div style="filter:Wave(strength=2);color:blue;height:110%">Dit is een voorbeeld tekst</div>',
	
	// Unordered List
	'ABBC3_LISTB_MOVER'			=> 'Lijst punt',
	'ABBC3_LISTB_TIP'			=> '[list]tekst[/list]',
	'ABBC3_LISTB_NOTE'			=> 'Tip: Gebruik [*] om dots te cre√´ren',
	'ABBC3_LISTB_VIEW'			=> '<ul><li>Item1</li><li>Item2</li><li>Item3</li></ul>',
	
	// Ordered List
	'ABBC3_LISTO_MOVER'			=> 'Geordende lijst',
	'ABBC3_LISTO_TIP'			=> '[list=1|a]tekst[/list]',
	'ABBC3_LISTO_NOTE'			=> 'Tip: Gebruik [*] om dots te cre√´ren',
	'ABBC3_LISTO_VIEW'			=> '<ol style="list-style-type: lower-alpha"><li>Item1</li><li>Item2</li><li>Item3</li></ol>',
	
	// List item
	'ABBC3_LISTITEM_MOVER'		=> 'Lijst punt',
	'ABBC3_LISTITEM_TIP'		=> '[*]',
	'ABBC3_LISTITEM_NOTE'		=> 'Tip: Gebruik [*] om dots te cre√´ren',
	
	// Line Break
	'ABBC3_HR_MOVER'			=> 'Lijn',
	'ABBC3_HR_TIP'				=> '[hr]',
	'ABBC3_HR_NOTE'				=> 'Tip: Cre√´ert een lijn over de breedte',
	'ABBC3_HR_VIEW'				=> '<hr noshade color="#000000" size="1px">',
	
	// Message Box text direction right to Left
	'ABBC3_RTL_MOVER'			=> 'Tekst letters van rechts naar links',
	'ABBC3_RTL_TIP'				=> '[dir=rtl]tekst[/dir]',
	'ABBC3_RTL_VIEW'			=> '<BDO dir="rtl">Dit is een voorbeeld tekst</BDO>',
	
	// Message Box text direction Left to Light
	'ABBC3_LTR_MOVER'			=> 'Tekst letters van links naar rechts',
	'ABBC3_LTR_TIP'				=> '[dir=ltr]tekst[/dir]',
	'ABBC3_LTR_VIEW'			=> '<BDO dir="ltr">Dit is een voorbeeld tekst</BDO>',
	
	// Marquee Down
	'ABBC3_MARQD_MOVER'			=> 'Tekst beweegt van boven naar beneden',
	'ABBC3_MARQD_TIP'			=> '[marq=down]tekst[/marq]',
	'ABBC3_MARQD_VIEW'			=> '<marquee direction="down" scrolldelay="120" height="80px">Dit is een voorbeeld tekst</marquee>',
	
	// Marquee Up
	'ABBC3_MARQU_MOVER'			=> 'Tekst beweegt van onder naar boven',
	'ABBC3_MARQU_TIP'			=> '[marq=up]tekst[/marq]',
	'ABBC3_MARQU_VIEW'			=> '<marquee direction="up" scrolldelay="120" height="80px">Dit is een voorbeeld tekst</marquee>',
	
	// Marquee Right
	'ABBC3_MARQR_MOVER'			=> 'Tekst beweegt van links naar rechts',
	'ABBC3_MARQR_TIP'			=> '[marq=right]tekst[/marq]',
	'ABBC3_MARQR_VIEW'			=> '<marquee direction="right" scrolldelay="120">Dit is een voorbeeld tekst</marquee>',
	
	// Marquee Left
	'ABBC3_MARQL_MOVER'			=> 'Tekst beweegt van rechts naar links',
	'ABBC3_MARQL_TIP'			=> '[marq=left]tekst[/marq]',
	'ABBC3_MARQL_VIEW'			=> '<marquee direction="left" scrolldelay="120">Dit is een voorbeeld tekst</marquee>',
	
	// Table row cell wizard
	'ABBC3_TABLE_MOVER'			=> 'Voeg een tabel in',
	'ABBC3_TABLE_TIP'			=> '[table=(ccs style)][tr=(ccs style)][td=(ccs style)]tekst[/td][/tr][/table]',
	'ABBC3_TABLE_VIEW'			=> '<table style="width:50%;border:1px solid #cccccc;" cellspacing="0" cellpadding="0"><tr style="tekst-align:center;"><td style="border:1px solid #cccccc;">Dit is een voorbeeld tekst</td></tr></table>',

	'ABBC3_TABLE_STYLE'			=> 'Voer de stijl in van de tabel',
	'ABBC3_TABLE_EXAMPLE'		=> 'width:50%;border:1px solid #cccccc;',
	
	'ABBC3_ROW_NUMBER'			=> 'Voer het aantal rijen in',
	'ABBC3_ROW_ERROR'			=> 'Je hebt geen aantal rijen ingevoerd',
	'ABBC3_ROW_STYLE'			=> 'Voer de stijl in van de rijen',
	'ABBC3_ROW_EXAMPLE'			=> 'text-align:center;',
	
	'ABBC3_CELL_NUMBER'			=> 'Voer het aantal cellen in',
	'ABBC3_CELL_ERROR'			=> 'Je hebt geen aantal cellen ingevoerd',
	'ABBC3_CELL_STYLE'			=> 'Voer de stijl in van de cellen',
	'ABBC3_CELL_EXAMPLE'		=> 'border:1px solid #cccccc;',
	
	// Simple upload files
	'ABBC3_UPLOAD_TITLE'		=> 'Advanced BBCode box 3 :: Bestand Verzend Pagina',
	'ABBC3_UPLOAD_MOVER'		=> 'Bestand verzenden',
	'ABBC3_UPLOAD_LINK'			=> 'Dit is de link van jou verzonden bestand',
	'ABBC3_UPLOAD_UPLOADED'		=> 'Verzenden bestand %s is geslaagd!',
	'ABBC3_UPLOAD_NOT_UPLOADED'	=> 'Verzenden bestand %s kan niet worden verzonden',
	'ABBC3_UPLOAD_ALREADY'		=> 'Bestand %s bestaat al, kies een ander bestand of hernoem je bestand en probeer het opnieuw',
	'ABBC3_UPLOAD_ERROR'		=> 'Kan het bestand niet verzenden naar %s. Fout code : %d',
	'ABBC3_UPLOAD_EXTENSION'	=> 'Aanwezige extensies',
	'ABBC3_UPLOAD_EXTENSION_EXPLAIN'	=> 'Je kan de toegestane bestands types toevoegen/veranderen/verwijderen. Plaat een komma (,) tussen de extensies',
	'ABBC3_UPLOAD_DISABLED'		=> 'Bestands extensie %s is niet toegestaan',
	'ABBC3_UPLOAD_SIZE'			=> 'Maximale bestands grote',
	'ABBC3_UPLOAD_NOSIZE'		=> 'De bestands grote %d is te groot. Maximale bestands grote is %d KB',
	'ABBC3_UPLOAD_EMPTY'		=> 'Het verzonden bestand is leeg, selekteer eerst een bestand',
	
	// Hyperlink Wizard
	'ABBC3_URL_TAG'				=> 'pagina',
	'ABBC3_URL_MOVER'			=> 'Web adres',
	'ABBC3_URL_TIP'				=> '[url]http://...[/url] of [url=http://...]Naam Web[/url]',
	'ABBC3_URL_EXAMPLE'			=> 'http://www.google.com',
	'ABBC3_URL_VIEW'			=> '<a href="http://www.google.com" class="postlink">Google</a>',
	
	// Email Wizard
	'ABBC3_EMAIL_TAG'			=> 'email',
	'ABBC3_EMAIL_MOVER'			=> 'Email',
	'ABBC3_EMAIL_TIP'			=> '[email]gebruiker@server.ext[/email] of [email=gebruiker@server.ext]Mijn email[/email]',
	'ABBC3_EMAIL_EXAMPLE'		=> 'gebruiker@server.ext',
	'ABBC3_EMAIL_VIEW'			=> '<a href="mailto:user@server.ext">gebruiker@server.ext</a>',
	
	// Ed2k link Wizard
	'ABBC3_ED2K_TAG'			=> 'ed2k',
	'ABBC3_ED2K_MOVER'			=> 'Link eD2K',
	'ABBC3_ED2K_TIP'			=> '[url]link ed2k[/url] of [url=link ed2k]Naam ed2k[/url]',
	'ABBC3_ED2K_EXAMPLE'		=> 'ed2k://|file|The_Two_Towers-The_Purist_Edit-Trailer.avi|14997504|965c013e991ee246d63d45ea71954c4d|/',
	'ABBC3_ED2K_VIEW'			=> '<a href="ed2k://|file|The_Two_Towers-The_Purist_Edit-Trailer.avi|14997504|965c013e991ee246d63d45ea71954c4d|/" class="postlink">The_Two_Towers-The_Purist_Edit-Trailer.avi</a>',
	'ABBC3_ED2K_ADD'			=> 'Voeg geselecteerde links aan uw ed2k cli√´nt toe',
	
	// Web included by iframe
	'ABBC3_WEB_TAG'				=> 'web',
	'ABBC3_WEB_MOVER'			=> 'Voeg een website toe in het bericht',
	'ABBC3_WEB_TIP'				=> '[web width=200 height=100 ]URL web[/web]',
	'ABBC3_WEB_EXAMPLE'			=> 'http://www.google.com',
	'ABBC3_WEB_VIEW'			=> '<iframe width="100%" height="100" src="http://www.google.com" style="font-size: 2px;"></iframe><br/>',
	
	// Image Wizard
	'ABBC3_IMG_TAG'				=> 'afbeeling',
	'ABBC3_IMG_MOVER'			=> 'Voeg een afbeelding toe',
	'ABBC3_IMG_TIP'				=> '[img=(left|center|right)]http://...[/img]',
	'ABBC3_IMG_EXAMPLE'			=> 'http://www.google.com/intl/en_com/images/logo_plain.png',
	'ABBC3_IMG_VIEW'			=> '<div align="center"><img src="http://www.google.com/intl/en_com/images/logo_plain.png" /></div>',
	
	// Thumbnail
	'ABBC3_THUMBNAIL_TAG'		=> 'thumbnail',
	'ABBC3_THUMBNAIL_MOVER'		=> 'Voeg een thumbnail toe',
	'ABBC3_THUMBNAIL_TIP'		=> '[thumbnail(=left|right)]http://...[/thumbnail]',
	'ABBC3_THUMBNAIL_EXAMPLE'	=> 'http://www.google.com/intl/en_com/images/logo_plain.png',
	'ABBC3_THUMBNAIL_VIEW'		=> '<a href="http://www.google.com/intl/en_com/images/logo_plain.png" rel="lightbox[]" alt="http://www.google.com/intl/en_com/images/logo_plain.png" title="" class="hoverbox"><img src="http://www.google.com/intl/en_com/images/logo_plain.png" border="0" width="100px" align="right"/></a>',
	
	// Imgshack
	'ABBC3_IMGSHACK_MOVER'		=> 'Voeg een afbeelding toe via imageshack',
	'ABBC3_IMGSHACK_TIP'		=> '[url=http://imageshack.us][img=http://...][/img][/url]',
	'ABBC3_IMGSHACK_VIEW'		=> '<a href="http://img207.imageshack.us/my.php?image=advancedbbcodebox3prosidd3.gif" class="postlink"><img src="http://img207.imageshack.us/img207/1773/advancedbbcodebox3prosidd3.th.gif" alt="Image" /></a>',
	
	// testlink
	'ABBC3_TESTLINK_TAG'		=> 'Controleer link',
	'ABBC3_TESTLINK_MOVER'		=> 'Voeg een bestand toe wat staat op een publieke server',
	'ABBC3_TESTLINK_TIP'		=> '[testlink]http://rapidshare.com/files/...[/testlink]',
	'ABBC3_TESTLINK_NOTE'		=> 'Toegestane servers : rapidshare, megaupload, megarotic, depositfiles, megashares .',
	'ABBC3_TESTLINK_EXAMPLE'	=> 'http://rapidshare.com/files/86587996/ABBC3_v108.zip.html',
	'ABBC3_TESTLINK_VIEW'		=> '<dl class="testlink"><dd><font color="red" size="4" >X</font>&nbsp;<a href="http://rapidshare.com/files/86587996/ABBC3_v108.zip.html" >http://rapidshare.com/files/86587996/ABBC3_v108.zip.html</a><br /></dd></dl>',
	'ABBC3_TESTLINK_GOOD'		=> 'Bestand gevonden op de server !',
	'ABBC3_TESTLINK_WRONG'		=> 'Bestand niet gevonden !',
	
	// Click counter
	'ABBC3_CLICK_TAG'			=> 'click',
	'ABBC3_CLICK_MOVER'			=> 'Voeg een klik teller in',
	'ABBC3_CLICK_TIP'			=> '[click]http://...[/click] of [click=http://...]Naam Web[/click] of [click][img]http://...[/img][/click]',
	'ABBC3_CLICK_EXAMPLE' 		=> 'http://www.google.com ' . ' ' . 'http://www.google.com/intl/en_com/images/logo_plain.png' ,
	'ABBC3_CLICK_VIEW'			=> '<a href="./click.php?id=1" >http://www.phpbb.com</a> ( Aangeklikt 1 keer )<br />',
	'ABBC3_CLICK_TIME'			=> '( Aangeklikt %d keer )',
	'ABBC3_CLICK_TIMES'			=> '( Aangeklikt %d keer )',
	
	// Search tag
	'ABBC3_SEARCH_MOVER'		=> 'Geef een zoek woord',
	'ABBC3_SEARCH_TIP'			=> '[search(=(msn|yahoo|google))]tekst[/search]',
	'ABBC3_SEARCH_VIEW'			=> $lang['SEARCH_MINI'] . ' ' . $config['sitename'] . ' : <a href="search.php?keywords=Advanced BBcode box 3">"Advanced BBcode box 3"</a><br/><br/>' . $lang['SEARCH_MINI'] . ' msn :  <a href="http://search.live.com/results.aspx?q=Advanced BBcode box 3&mkt=tr-TR&lf=1" target="_blank">"Advanced BBcode box 3"</a><br/><br/>' .$lang['SEARCH_MINI'] . ' yahoo :  <a href="http://search.yahoo.com/search?p=Advanced BBcode box 3" target="_blank">"Advanced BBcode box 3"</a><br/><br/>' . $lang['SEARCH_MINI'] . ' google : <a href="http://www.google.com.tr/search?q=Advanced BBcode box 3" target="_blank">"Advanced BBcode box 3"</a>',
	
	// BBvideo Wizard
	'ABBC3_BBVIDEO_TAG'			=> 'BBvideo',
	'ABBC3_BBVIDEO_MOVER'		=> 'Voeg een web video toe',
	'ABBC3_BBVIDEO_TIP'			=> '[BBvideo]Video URL[/BBvideo]',
	'ABBC3_BBVIDEO_EXAMPLE'		=> 'http://www.youtube.com/watch?v=TA4hm97m494',
	'ABBC3_BBVIDEO_VIEW'		=> '<object width="200" height="100"><param name="movie" value="http://www.youtube.com/v/TA4hm97m494" /><param name="wmode" value="transparent" /><embed src="http://www.youtube.com/v/TA4hm97m494" type="application/x-shockwave-flash" wmode="transparent" width="200" height="100"></embed></object>',
	'ABBC3_BBVIDEO_FILE'		=> 'Video formaat',
	'ABBC3_BBVIDEO_VIDEO'		=> 'Video van',
	
	// Custom bbcodes
	
));

?>