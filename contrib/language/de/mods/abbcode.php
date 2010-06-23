<?php
/**
* @package: phpBB3 :: Advanced BBCode box 3 -> language [de][German]
* @version: $Id: abbcode.php, v 1.0.8 2008/03/31 03:01:00 leviatan21 Exp $
* @copyright: leviatan21 < info@mssti.com > (Gabriel) http://www.mssti.com/phpbb3/
* @license: http://opensource.org/licenses/gpl-license.php GNU Public License 
* @author: leviatan21 - http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=345763
* @translator: TigerCrow - http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=445065
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
	'ABBC3_HELP_TITLE'			=> 'Advanced BBCode box 3 :: Hilfeseite',
	'ABBC3_HELP_DESC'			=> 'Beschreibung',
	'ABBC3_HELP_WRITE'			=> 'Dein geschriebener Text',
	'ABBC3_HELP_VIEW'			=> 'Ergebnis',
	'ABBC3_HELP_ABOUT'			=> 'Advanced BBCode Box 3 by <a href="http://www.mssti.com/phpbb3">mssti</a>',
	'ABBC3_HELP_ALT'			=> 'Advanced BBCode Box 3 (aka ABBC3)',
	
// Image Resizer JS - Start
	'ABBC3_RESIZE_SMALL'		=> 'Klicke auf diese Leiste um das Bild in voller Grˆﬂe anzuzeigen.',
	'ABBC3_RESIZE_FILESIZE'		=> 'Dieses Bild wurde in der Grˆﬂe ver‰ndert. Klicke auf diese Leiste um das Bild in voller Grˆﬂe anzuzeigen. Das Original Bild hat eine Grˆﬂe von %1$sx%2$s und eine Dateigrˆﬂe von %3$sKB.',
	'ABBC3_RESIZE_NOFILESIZE'	=> 'Dieses Bild wurde in der Grˆﬂe ver‰ndert. Klicke auf diese Leiste um das Bild in voller Grˆﬂe anzuzeigen. Das Original Bild hat eine Grˆﬂe von %1$sx%2$s.',
	'ABBC3_RESIZE_FULLSIZE'		=> 'Klicke auf diese Leiste um das Bild verkleinert anzuzeigen.',
	
// Text to be applied to the helpline & mouseover & help page & Wizard texts
	'BBCODE_STYLES_TIP'			=> 'Tip: Styles kˆnnen schnell auf den gew‰hlten Text ¸bertragen werden.',
	
	'ABBC3_ERROR'				=> 'Fehler : ',
	'ABBC3_ERROR_TAG'			=> 'Unbekannter Fehler beim Benutzen des Tags : ',
	
	'ABBC3_ID'					=> 'Gebe Identifier ein :',
	'ABBC3_NOID'				=> 'Du hast keinen Identifier eingegeben',
	'ABBC3_LINK'				=> 'Gib einen Link ein f¸r ',
	'ABBC3_DESC'				=> 'Gib eine Beschreibung ein f¸r ',
	'ABBC3_NAME'				=> 'Beschreibung',
	'ABBC3_NOLINK'				=> 'Du hast keinen Link eingegeben f¸r ',
	'ABBC3_NODESC'				=> 'Du hast keine Beschreibung eingegeben f¸r ',
	'ABBC3_WIDTH'				=> 'Gib die Breite ein',
	'ABBC3_WIDTH_NOTE'			=> 'Notiz: Der Wert kann in Prozent angegeben werden',
	'ABBC3_NOWIDTH'				=> 'Du hast keine Breite angegeben',
	'ABBC3_HEIGHT'				=> 'Gib die Hˆhe ein',
	'ABBC3_HEIGHT_NOTE'			=> 'Notiz: Der Wert kann in Prozent angegeben werden',
	'ABBC3_NOHEIGHT'			=> 'Du hast keine Hˆhe angegeben',
	
	'ABBC3_NOTE'				=> 'Notiz',
	'ABBC3_EXAMPLE'				=> 'Beispiel',
	'ABBC3_EXAMPLES'			=> 'Beispiele',

// bbcodes texts	
	// Font Type Dropdown
	'ABBC3_FONTTYPE_MOVER'		=> 'Schriftart',
	'ABBC3_FONTTYPE_TIP'		=> '[font=Comic Sans MS]text[/font]',
	'ABBC3_FONTTYPE_NOTE'		=> 'Notiz: Du kannst deine eigene Schriftenfamilie benutzen',
	'ABBC3_FONTTYPE_VIEW'		=> '<span style="font-family:Comic Sans MS">Das ist ein Beispieltext</span>',
	
	// Font Size Dropdown
	'ABBC3_FONT_GIANT'			=> 'Riesig',
	'ABBC3_FONTSIZE_MOVER'		=> 'Schriftgrˆﬂe',
	'ABBC3_FONTSIZE_TIP'		=> '[size=150]Grosser Text[/size]',
	'ABBC3_FONTSIZE_NOTE'		=> 'Notiz: Der Wert wird prozentual gelesen',
	'ABBC3_FONTSIZE_VIEW'		=> '<span style="font-size: 150%; line-height: 116%;">Das ist ein Beispieltext</span>',
	
	// Highlight Font Color Dropdown
	'ABBC3_FONTHILI_MOVER'		=> 'Text hervorheben',
	'ABBC3_FONTHILI_TIP'		=> '[highlight=yellow]Text[/highlight]',
	'ABBC3_FONTHILI_NOTE'		=> 'Notiz: Du kannst HTML-Farben nutzen (color=#FF0000 oder color=red)',
	'ABBC3_FONTHILI_VIEW'		=> '<span style="background-color: yellow;">Das ist ein Beispieltext</span>',
	
	// Font Color Dropdown
	'ABBC3_FONTCOLOR_MOVER'		=> 'Schriftfarbe',
	'ABBC3_FONTCOLOR_TIP'		=> '[color=red]text[/color]',
	'ABBC3_FONTCOLOR_NOTE'		=> 'Notiz: Du kannst HTML-Farben nutzen (color=#FF0000 oder color=red)',
	'ABBC3_FONTCOLOR_VIEW'		=> '<span style="color:red">Das ist ein Beispieltext</span>',
	
	// Cut selected text
	'ABBC3_CUT_MOVER'			=> 'Entferne ausgew‰hlten Text',
	// Copy selected text
	'ABBC3_COPY_MOVER'			=> 'Kopiere ausgew‰hlten Text',
	// Paste previously copy text
	'ABBC3_PASTE_MOVER'			=> 'F¸ge kopierten Text ein',
	'ABBC3_PASTE_ERROR'			=> 'Bitte kopiere erst einen Text, um ihn einzuf¸gen ',
	// Remove BBCode (Removes all BBCode tags from selected text)
	'ABBC3_PLAIN_MOVER'			=> 'Entferne BBCode des ausgew‰hlten Textes',
	'ABBC3_NOSELECT_ERROR'		=> 'Bitte w‰hle erst einen Text aus ',
	
	// Code
	'ABBC3_CODE_MOVER'			=> 'Code',
	'ABBC3_CODE_TIP'			=> '[code]Codezeilen[/code]',
	'ABBC3_CODE_VIEW'			=> '<dl class="codebox"><dt>'. $lang['CODE'] .': <a href="#" onclick="selectCode(this); return false;">'. $lang['SELECT_ALL_CODE'] .'</a></dt><dd><code>Das ist ein Beispieltext</code></dd></dl>',
	
	// Quote
	'ABBC3_QUOTE_MOVER'			=> 'Zitat',
	'ABBC3_QUOTE_TIP'			=> '[quote]Text[/quote] oder [quote=\"member\"]Text[/quote]',
	'ABBC3_QUOTE_VIEW'			=> '<blockquote><div><cite>member '. $lang['WROTE'] .':</cite>Das ist ein Beispieltext</div></blockquote>',
	
	// Spoiler
	'ABBC3_SPOIL_MOVER'			=> 'Spoilertext',
	'ABBC3_SPOIL_TIP'			=> '[spoil]Text[/spoil]',
	'ABBC3_SPOIL_VIEW'			=> '<div class="spoilwrapper"><div class="spoiltitle"><input class="btnspoil" type="button" value="Show Spoiler" onClick="javascript:if (this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display != \'\') { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'\'; this.innerText = \'\'; this.value = \'Hide Spoiler\'; } else { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'none\'; this.innerText = \'\'; this.value = \'Show Spoiler\'; }" onfocus="this.blur();"></div><div class="spoilcontent"><div style="display: none;">Das ist ein Beispieltext</div></div></div>',
	'SPOILER_SHOW'				=> 'Zeige Spoiler',
	'SPOILER_HIDE'				=> 'Verstecke Spoiler',
		
	// Hide tag
	'ABBC3_HIDE_MOVER'			=> 'Verstecke Nachricht',
	'ABBC3_HIDE_TIP'			=> '[hide]Nachricht[/hide]',
	'ABBC3_HIDE_VIEW'			=> '<dl class="hidebox"><dt class="hide">HIDE: ON</dt><dd>Du musst erst auf den Beitrag antworten, bevor du den versteckten Text sehen kannst</dd></dl>',
	
	// Moderator tag
	'ABBC3_MODERATOR_MOVER'		=> 'Moderator Nachricht',
	'ABBC3_MODERATOR_TIP'		=> '[mod=name]Text[/mod]',
	'ABBC3_MODERATOR_VIEW'		=> '<table id="ModTable" width="100%" cellspacing="5" cellpadding="0" border="0" align="center"><tr><td class="row1" rowspan="2" align="middle" vAlign="center" width="1%"><span class="exclamation" title="Moderator warning" style="font-size:25px">&nbsp;!&nbsp;</span></td><td class="row2"><span class="genmed"><b>Mod Name:</b></span></td></tr><tr><td>Das ist ein Beispieltext</td></tr></table>',
	
	// Off topic tag
	'ABBC3_OFFTOPIC'			=> 'Offtopic',
	'ABBC3_OFFTOPIC_MOVER'		=> 'Offtopic Text einf¸gen',
	'ABBC3_OFFTOPIC_TIP'		=> '[offtopic]Text[/offtopic]',
	'ABBC3_OFFTOPIC_VIEW'		=> '<i><b><font color="#114499">Offtopic: </font></b><br/><font color="#2277DD">Das ist ein Beispieltext</font></i>',
	
	// NFO
	'ABBC3_NFO_MOVER'			=> 'NFO Text (Bessere Ansicht im Internet Explorer)',
	'ABBC3_NFO_TIP'				=> '[nfo]NFO Text[/nfo]',
	'ABBC3_NFO_VIEW'			=> '<table cellspacing="0" cellpadding="0" border="0" ><tr><td><span class="genmed"><b>NFO:</b></span></td></tr><tr><td class="nfo">' . str_replace(" ", "&nbsp;", '    ≤ €€€€ €€±±∞                                  ∞∞∞±±±±≤≤≤€€€€€€€€€€€  €   €€ €€€') . '</td></tr></table>',
	
	// Justify Align
	'ABBC3_JUSTIFY_MOVER'		=> 'Blocktext',
	'ABBC3_JUSTIFY_TIP'			=> '[align=justify]Text[/align]',
	'ABBC3_JUSTIFY_VIEW'		=> '<div style="text-align:justify">Das ist ein Beispieltext</div>',
	
	// Right Align
	'ABBC3_RIGHT_MOVER'			=> 'Text rechts ausgerichtet',
	'ABBC3_RIGHT_TIP'			=> '[align=right]Text[/align]',
	'ABBC3_RIGHT_VIEW'			=> '<div style="text-align:right">Das ist ein Beispieltext</div>',
	
	// Center Align
	'ABBC3_CENTER_MOVER'		=> 'Text zentriert',
	'ABBC3_CENTER_TIP'			=> '[align=center]Text[/align]',
	'ABBC3_CENTER_VIEW'			=> '<div style="text-align:center">Das ist ein Beispieltext</div>',
	
	// Left Align
	'ABBC3_LEFT_MOVER'			=> 'Text links ausgerichtet',
	'ABBC3_LEFT_TIP'			=> '[align=left]Text[/align]',
	'ABBC3_LEFT_VIEW'			=> '<div style="text-left:justify">Das ist ein Beispieltext</div>',
	
	// Preformat
	'ABBC3_PRE_MOVER'			=> 'Text vorformatiert',
	'ABBC3_PRE_TIP'				=> '[pre]Text[/pre]',
	'ABBC3_PRE_VIEW'			=> '<pre>Das ist ein Beispieltext</pre>',
	
	// Tab
	'ABBC3_TAB_MOVER'			=> 'Creates a normal indent',
	'ABBC3_TAB_TIP'				=> '[tab=nn]',
	'ABBC3_TAB_NOTE'			=> 'Enter a number that will be a margin measured in pixels.',
	'ABBC3_TAB_VIEW'			=> '<span style="margin-left:20px;"></span>This is a sample text',
	
	// Superscript
	'ABBC3_SUP_MOVER'			=> 'Hochgestellter Text',
	'ABBC3_SUP_TIP'				=> '[sup]Text[/sup]',
	'ABBC3_SUP_VIEW'			=> '<sup>Das ist ein Beispieltext</sup>',
	
	// Subscript
	'ABBC3_SUB_MOVER'			=> 'Tiefgestellter Text',
	'ABBC3_SUB_TIP'				=> '[sub]Text[/sub]',
	'ABBC3_SUB_VIEW'			=> '<sub>Das ist ein Beispieltext</sub>',
	
	// Bold
	'ABBC3_BOLD_MOVER'			=> 'Text fett',
	'ABBC3_BOLD_TIP'			=> '[b]Text[/b]',
	'ABBC3_BOLD_VIEW'			=> '<strong>Das ist ein Beispieltext</strong>',
	
	// Italic
	'ABBC3_ITALIC_MOVER'		=> 'Text kursiv',
	'ABBC3_ITALIC_TIP'			=> '[i]Text[/i]',
	'ABBC3_ITALIC_VIEW'			=> '<em>Das ist ein Beispieltext</em>',
	
	// Underline
	'ABBC3_UNDERLINE_MOVER'		=> 'Text unterstrichen',
	'ABBC3_UNDERLINE_TIP'		=> '[u]Text[/u]',
	'ABBC3_UNDERLINE_VIEW'		=> '<span style="text-decoration: underline">Das ist ein Beispieltext</span>',
	
	// Strikethrough
	'ABBC3_STRIKE_MOVER'		=> 'Text durchgestrichen',
	'ABBC3_STRIKE_TIP'			=> '[s]Text[/s]',
	'ABBC3_STRIKE_VIEW'			=> '<span style="text-decoration: line-through;">Das ist ein Beispieltext</span>',
	
	// Text Fade
	'ABBC3_FADE_MOVER'			=> 'Text einblenden - ausblenden',
	'ABBC3_FADE_TIP'			=> '[fade]Text[/fade]',
	'ABBC3_FADE_VIEW'			=> '<span class="fade_link">Das ist ein Beispieltext</span> <script type="text/javascript">fade_ontimer()</script>',
	
	// Text Gradient
	'ABBC3_GRAD_MOVER'			=> 'Text mit Farbverlauf',
	'ABBC3_GRAD_TIP'			=> '',
	'ABBC3_GRAD_VIEW'			=> '<span style="color: #FF0000">T</span><span style="color: #F2000D">h</span><span style="color: #E6001A">i</span><span style="color: #D90026">s</span> <span style="color: #BF0040">i</span><span style="color: #B3004D">s</span> <span style="color: #990066">a</span> <span style="color: #800080">s</span><span style="color: #73008C">i</span><span style="color: #660099">m</span><span style="color: #5900A6">p</span><span style="color: #4D00B3">l</span><span style="color: #4000BF">e</span> <span style="color: #2600D9">t</span><span style="color: #1A00E6">e</span><span style="color: #0D00F2">x</span><span style="color: #0000FF">t</span>',
	'ABBC3_GRAD_MIN_ERROR'		=> 'Bitte w‰hle zuerst den Text aus : ',
	'ABBC3_GRAD_MAX_ERROR'		=> 'Es sind nicht mehr als 120 Zeichen erlaubt : ',
	
	// Glow text
	'ABBC3_GLOW_MOVER'			=> 'Gl¸hender Text (Nur Internet Explorer)',
	'ABBC3_GLOW_TIP'			=> '[glow=(color)]Text[/glow]',
	'ABBC3_GLOW_VIEW'			=> '<div style="filter:Glow(color=red,strength=4);color:#ffffff;height:110%">Das ist ein Beispieltext</div>',
	
	// Shadow text
	'ABBC3_SHADOW_MOVER'		=> 'Text mit Schatten (Nur Internet Explorer)',
	'ABBC3_SHADOW_TIP'			=> '[shadow=(color)]Text[/shadow]',
	'ABBC3_SHADOW_VIEW'			=> '<div style="filter:shadow(color=black,strength=4);color:blue;height:110%">Das ist ein Beispieltext</div>',
	
	// Dropshadow text
	'ABBC3_DROPSHADOW_MOVER'	=> 'Text mit Schattenfall (Nur Internet Explorer)',
	'ABBC3_DROPSHADOW_TIP'		=> '[dropshadow=(color)]Text[/dropshadow]',
	'ABBC3_DROPSHADOW_VIEW'		=> '<div style="filter:dropshadow(color=#999999,strength=4);color:blue;height:110%">Das ist ein Beispieltext</div>',
	
	// Blur text
	'ABBC3_BLUR_MOVER'			=> 'Verschwommener Text (Nur Internet Explorer)',
	'ABBC3_BLUR_TIP'			=> '[blur=(color)]Text[/blur]',
	'ABBC3_BLUR_VIEW'			=> '<div style="filter:Blur(strength=7);color:blue;height:110%">Das ist ein Beispieltext</div>',
	
	// Wave text
	'ABBC3_WAVE_MOVER'			=> 'Wellentext (Nur Internet Explorer)',
	'ABBC3_WAVE_TIP'			=> '[wave=(color)]Text[/wave]',
	'ABBC3_WAVE_VIEW'			=> '<div style="filter:Wave(strength=2);color:blue;height:110%">Das ist ein Beispieltext</div>',
	
	// Unordered List
	'ABBC3_LISTB_MOVER'			=> 'Aufz‰hlungszeichen',
	'ABBC3_LISTB_TIP'			=> '[list]Text[/list]',
	'ABBC3_LISTB_NOTE'			=> 'Notiz: Nutze [*] um Aufz‰hlungszeichen zu erstellen',
	'ABBC3_LISTB_VIEW'			=> '<ul><li>Text 1</li><li>Text 2</li><li>Text 3</li></ul>',
	
	// Ordered List
	'ABBC3_LISTO_MOVER'			=> 'Sortierte Liste',
	'ABBC3_LISTO_TIP'			=> '[list=1|a]text[/list]',
	'ABBC3_LISTO_NOTE'			=> 'Notiz: Nutze [*] um Aufz‰hlungszeichen zu erstellen',
	'ABBC3_LISTO_VIEW'			=> '<ol style="list-style-type: lower-alpha"><li>Text 1</li><li>Text 2</li><li>Text 3</li></ol>',
	
	// List item
	'ABBC3_LISTITEM_MOVER'		=> 'Listen Zeichen',
	'ABBC3_LISTITEM_TIP'		=> '[*]',
	'ABBC3_LISTITEM_NOTE'		=> 'Notiz: Erstelle die Zeichen innerhalb der Liste',
	
	// Line Break
	'ABBC3_HR_MOVER'			=> 'Trennlinie',
	'ABBC3_HR_TIP'				=> '[hr]',
	'ABBC3_HR_NOTE'				=> 'Notiz: Erzeugt eine horizontale Linie, mit der man Text trennen kann',
	'ABBC3_HR_VIEW'				=> '<hr noshade color="#000000" size="1px">',
	
	// Message Box text direction Left to Light
	'ABBC3_RTL_MOVER'			=> 'Text von rechts nach links zu lesen',
	'ABBC3_RTL_TIP'				=> '[dir=rtl]Text[/dir]',
	'ABBC3_RTL_VIEW'			=> '<BDO dir="rtl">Das ist ein Beispieltext</BDO>',
	
	// Message Box text direction right to Left
	'ABBC3_LTR_MOVER'			=> 'Text von links nach rechts zu lesen',
	'ABBC3_LTR_TIP'				=> '[dir=ltr]Text[/dir]',
	'ABBC3_LTR_VIEW'			=> '<BDO dir="ltr">Das ist ein Beispieltext</BDO>',
	
	// Marquee Down
	'ABBC3_MARQD_MOVER'			=> 'Scrolltext nach unten',
	'ABBC3_MARQD_TIP'			=> '[marq=down]Text[/marq]',
	'ABBC3_MARQD_VIEW'			=> '<marquee direction="down" scrolldelay="120" height="80px">Das ist ein Beispieltext</marquee>',
	
	// Marquee Up
	'ABBC3_MARQU_MOVER'			=> 'Scrolltext nach oben',
	'ABBC3_MARQU_TIP'			=> '[marq=up]Text[/marq]',
	'ABBC3_MARQU_VIEW'			=> '<marquee direction="up" scrolldelay="120" height="80px">Das ist ein Beispieltext</marquee>',
	
	// Marquee Right
	'ABBC3_MARQR_MOVER'			=> 'Lauftext nach rechts',
	'ABBC3_MARQR_TIP'			=> '[marq=right]Text[/marq]',
	'ABBC3_MARQR_VIEW'			=> '<marquee direction="right" scrolldelay="120">Das ist ein Beispieltext</marquee>',
	
	// Marquee Left
	'ABBC3_MARQL_MOVER'			=> 'Lauftext nach links',
	'ABBC3_MARQL_TIP'			=> '[marq=left]Text[/marq]',
	'ABBC3_MARQL_VIEW'			=> '<marquee direction="left" scrolldelay="120">Das ist ein Beispieltext</marquee>',
	
	// Table row cell wizard
	'ABBC3_TABLE_MOVER'			=> 'Tabelle einf¸gen',
	'ABBC3_TABLE_TIP'			=> '[table=(ccs style)][tr=(ccs style)][td=(ccs style)]text[/td][/tr][/table]',
	'ABBC3_TABLE_VIEW'			=> '<table style="width:50%;border:1px solid #cccccc;" cellspacing="0" cellpadding="0"><tr style="text-align:center;"><td style="border:1px solid #cccccc;">Das ist ein Beispieltext</td></tr></table>',
	
	'ABBC3_TABLE_STYLE'			=> 'Gib ein style table ein',
	'ABBC3_TABLE_EXAMPLE'		=> 'width:50%;border:1px solid #cccccc;',
	
	'ABBC3_ROW_NUMBER'			=> 'Gib die Anzahl der Reihen an',
	'ABBC3_ROW_ERROR'			=> 'Du hast keine Reihenanzahl angegeben',
	'ABBC3_ROW_STYLE'			=> 'Gib die style rows ein',
	'ABBC3_ROW_EXAMPLE'			=> 'text-align:center;',
	
	'ABBC3_CELL_NUMBER'			=> 'Gib die Anzahl der Zellen an',
	'ABBC3_CELL_ERROR'			=> 'Du hast nicht die Anzahl der Zellen angegeben',
	'ABBC3_CELL_STYLE'			=> 'Gib style cell ein',
	'ABBC3_CELL_EXAMPLE'		=> 'border:1px solid #cccccc;',
	
	// Simple upload files
	'ABBC3_UPLOAD_TITLE'		=> 'Advanced BBCode box 3 :: Dateiupload Seite',
	'ABBC3_UPLOAD_MOVER'		=> 'Datei anh‰ngen',
	'ABBC3_UPLOAD_LINK'			=> 'Das ist der Link zu deiner angeh‰ngten Datei',
	'ABBC3_UPLOAD_UPLOADED'		=> 'Anhang %s war erfolgreich!',
	'ABBC3_UPLOAD_NOT_UPLOADED'	=> 'Anhang %s konnte nicht hochgeladen werden!',
	'ABBC3_UPLOAD_ALREADY'		=> 'Anhang %s existiert schon, bitte w‰hle eine andere oder benenne die Datei um und versuche es nocheinmal',
	'ABBC3_UPLOAD_ERROR'		=> 'Konnte Anhang nicht hochladen nach %s. Fehlercode : %d',
	'ABBC3_UPLOAD_EXTENSION'	=> 'Verf¸gbare Erweiterungen',
	'ABBC3_UPLOAD_EXTENSION_EXPLAIN'	=> 'Du kannst hinzuf¸gen/‰ndern/lˆschen bei erlaubten Dateitypen. Trenne die Erweiterung mit einem (,)',
	'ABBC3_UPLOAD_DISABLED'		=> 'Die Erweiterung %s ist nicht erlaubt',
	'ABBC3_UPLOAD_SIZE'			=> 'Die maximale Grˆﬂe',
	'ABBC3_UPLOAD_NOSIZE'		=> 'Die hochgeladene Dateigrˆﬂe %d ist zu groﬂ. Die maximal erlaubte Grˆﬂe ist %d KB',
	'ABBC3_UPLOAD_EMPTY'		=> 'Der Dateianhang ist leer, bitte w‰hle zuerst eine Datei aus',
	
	// Hyperlink Wizard
	'ABBC3_URL_TAG'				=> 'Hyperlink',
	'ABBC3_URL_MOVER'			=> 'Hyperlink',
	'ABBC3_URL_TIP'				=> '[url]http://...[/url] oder [url=http://...]Seitenname[/url]',
	'ABBC3_URL_EXAMPLE'			=> 'http://www.google.com',
	'ABBC3_URL_VIEW'			=> '<a href="http://www.google.com" class="postlink">Google</a>',
	
	// Email Wizard
	'ABBC3_EMAIL_TAG'			=> 'email',
	'ABBC3_EMAIL_MOVER'			=> 'Email',
	'ABBC3_EMAIL_TIP'			=> '[email]user@server.ext[/email] oder [email=user@server.ext]Meine Email[/email]',
	'ABBC3_EMAIL_EXAMPLE'		=> 'user@server.ext',
	'ABBC3_EMAIL_VIEW'			=> '<a href="mailto:user@server.ext">user@server.ext</a>',
	
	// Ed2k link Wizard
	'ABBC3_ED2K_TAG'			=> 'ed2k',
	'ABBC3_ED2K_MOVER'			=> 'Link eD2K',
	'ABBC3_ED2K_TIP'			=> '[url]link ed2k[/url] oder [url=link ed2k]Name ed2k[/url]',
	'ABBC3_ED2K_EXAMPLE'		=> 'ed2k://|file|The_Two_Towers-The_Purist_Edit-Trailer.avi|14997504|965c013e991ee246d63d45ea71954c4d|/',
	'ABBC3_ED2K_VIEW'			=> '<a href="ed2k://|file|The_Two_Towers-The_Purist_Edit-Trailer.avi|14997504|965c013e991ee246d63d45ea71954c4d|/" class="postlink">The_Two_Towers-The_Purist_Edit-Trailer.avi</a>',
	'ABBC3_ED2K_ADD'			=> 'F√ºge diesen Link zu deinem Emule Client hinzu',
	
	// Web included by iframe
	'ABBC3_WEB_TAG'				=> 'Webseite',
	'ABBC3_WEB_MOVER'			=> 'Internetseite im Beitrag einf¸gen',
	'ABBC3_WEB_TIP'				=> '[web width=200 height=100 ]URL web[/web]',
	'ABBC3_WEB_EXAMPLE'			=> 'http://www.google.com',
	'ABBC3_WEB_VIEW'			=> '<iframe width="100%" height="100" src="http://www.google.com" style="font-size: 2px;"></iframe><br/>',
	
	// Image Wizard
	'ABBC3_IMG_TAG'				=> 'Bild',
	'ABBC3_IMG_MOVER'			=> 'Bild einf¸gen',
	'ABBC3_IMG_TIP'				=> '[img=(left|center|right)]http://...[/img]',
	'ABBC3_IMG_EXAMPLE'			=> 'http://www.google.com/intl/en_com/images/logo_plain.png',
	'ABBC3_IMG_VIEW'			=> '<div align="center"><img src="http://www.google.com/intl/en_com/images/logo_plain.png" alt="" /></div>',
	
	// Thumbnail
	'ABBC3_THUMBNAIL_TAG'		=> 'Vorschaubild',
	'ABBC3_THUMBNAIL_MOVER'		=> 'Vorschaubild einf¸gen',
	'ABBC3_THUMBNAIL_TIP'		=> '[thumbnail(=left|right)]http://...[/thumbnail]',
	'ABBC3_THUMBNAIL_EXAMPLE'	=> 'http://www.google.com/intl/en_com/images/logo_plain.png',
	'ABBC3_THUMBNAIL_VIEW'		=> '<a href="http://www.google.com/intl/en_com/images/logo_plain.png" rel="gb_imageset[]" alt="http://www.google.com/intl/en_com/images/logo_plain.png" title="" class="hoverbox"><img src="http://www.google.com/intl/en_com/images/logo_plain.png" border="0" width="100px" align="right"/></a>',
	
	// Imgshack
	'ABBC3_IMGSHACK_MOVER'		=> 'ImageShack - Bild einf¸gen',
	'ABBC3_IMGSHACK_TIP'		=> '[url=http://imageshack.us][img=http://...][/img][/url]',
	'ABBC3_IMGSHACK_VIEW'		=> '<a href="http://img207.imageshack.us/my.php?image=advancedbbcodebox3prosidd3.gif" class="postlink"><img src="http://img207.imageshack.us/img207/1773/advancedbbcodebox3prosidd3.th.gif" alt="Image" /></a>',
	
	// testlink
	'ABBC3_TESTLINK_TAG'		=> 'Link Pr¸fen',
	'ABBC3_TESTLINK_MOVER'		=> 'F¸ge eine Datei ein, die auf einem ˆffentlichem Server gespeichert wird',
	'ABBC3_TESTLINK_TIP'		=> '[testlink]http://rapidshare.com/files/...[/testlink]',
	'ABBC3_TESTLINK_NOTE'		=> 'Verf¸gbare Server : rapidshare, megaupload, megarotic, depositfiles, megashares .',
	'ABBC3_TESTLINK_EXAMPLE'	=> 'http://rapidshare.com/files/86587996/ABBC3_v108.zip.html',
	'ABBC3_TESTLINK_VIEW'		=> '<dl class="testlink"><dd><font color="red" size="4" >X</font>&nbsp;<a href="http://rapidshare.com/files/86587996/ABBC3_v108.zip.html" >http://rapidshare.com/files/86587996/ABBC3_v108.zip.html</a><br /></dd></dl>',
	'ABBC3_TESTLINK_GOOD'		=> 'Datei auf Server gefunden !',
	'ABBC3_TESTLINK_WRONG'		=> 'Datei nicht gefunden !',
		
	// Click counter
	'ABBC3_CLICK_TAG'			=> 'Click',
	'ABBC3_CLICK_MOVER'			=> 'F¸ge Counter ein',
	'ABBC3_CLICK_TIP'			=> '[click]http://...[/click] oder [click=http://...]Name der Webadresse[/click] oder [click][img]http://...[/img][/click]',
	'ABBC3_CLICK_EXAMPLE' 		=> 'http://www.google.com ' . ' ' . 'http://www.google.com/intl/en_com/images/logo_plain.png' ,
	'ABBC3_CLICK_VIEW'			=> '<a href="./click.php?id=1" >http://www.phpbb.com</a> ( Klick 1 mal )<br />',
	'ABBC3_CLICK_TIME'			=> '( Geklickt %d mal )',
	'ABBC3_CLICK_TIMES'			=> '( Geklickt %d mal )',
	
	// Search tag
	'ABBC3_SEARCH_MOVER'		=> 'Suchwort eingeben',
	'ABBC3_SEARCH_TIP'			=> '[search(=(msn|yahoo|google))]Suchwort[/search]',
	'ABBC3_SEARCH_VIEW'			=> $lang['SEARCH_MINI'] . ' ' . $config['sitename'] . ' : <a href="search.php?keywords=Advanced BBcode box 3">"Advanced BBcode box 3"</a><br/><br/>' . $lang['SEARCH_MINI'] . ' msn : <a href="http://search.live.com/results.aspx?q=Advanced BBcode box 3&mkt=tr-TR&lf=1" target="_blank">"Advanced BBcode box 3"</a><br/><br/>' .$lang['SEARCH_MINI'] . ' yahoo : <a href="http://search.yahoo.com/search?p=Advanced BBcode box 3" target="_blank">"Advanced BBcode box 3"</a><br/><br/>' . $lang['SEARCH_MINI'] . ' google : <a href="http://www.google.com.tr/search?q=Advanced BBcode box 3" target="_blank">"Advanced BBcode box 3"</a>',
	
	// BBvideo Wizard
	'ABBC3_BBVIDEO_TAG'			=> 'BBvideo',
	'ABBC3_BBVIDEO_MOVER'		=> 'Web Video einf¸gen',
	'ABBC3_BBVIDEO_TIP'			=> '[BBvideo]Video URL[/BBvideo]',
	'ABBC3_BBVIDEO_EXAMPLE'		=> 'http://www.youtube.com/watch?v=TA4hm97m494',
	'ABBC3_BBVIDEO_VIEW'		=> '<object width="200" height="100"><param name="movie" value="http://www.youtube.com/v/TA4hm97m494" /><param name="wmode" value="transparent" /><embed src="http://www.youtube.com/v/TA4hm97m494" type="application/x-shockwave-flash" wmode="transparent" width="200" height="100"></embed></object>',
	'ABBC3_BBVIDEO_FILE'		=> 'Video Format',
	'ABBC3_BBVIDEO_VIDEO'		=> 'Video From',
	
	// Custom bbcodes
	
));

?>