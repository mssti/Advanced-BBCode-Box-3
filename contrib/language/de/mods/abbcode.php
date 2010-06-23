<?php
/**
* @package: phpBB3 :: Advanced BBCode box 3 -> language [de][German]
* @version: $Id: abbcode.php, v 1.0.11 2008/10/11 11:10:08 leviatan21 Exp $
* @copyright: leviatan21 < info@mssti.com > (Gabriel) http://www.mssti.com/phpbb3/
* @license: http://opensource.org/licenses/gpl-license.php GNU Public License 
* @author: leviatan21 - http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=345763
* @translator: TigerCrow - http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=445065
* @additional translator: femu - http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=208602
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

// Image Resizer JS
	'ABBC3_RESIZE_SMALL'		=> 'Klicke auf diese Leiste um das Bild in voller Größe anzuzeigen.',
	'ABBC3_RESIZE_ZOOM_IN'		=> 'Rein zoomen (normale Größe: %1$s x %2$s)',
	'ABBC3_RESIZE_CLOSE'		=> 'Schließen',
	'ABBC3_RESIZE_ZOOM_OUT'		=> 'Raus zoomen',
	'ABBC3_RESIZE_FILESIZE'		=> 'Diese Bild wurde in der Größe verändert. Klicke auf diesen Balken, um es in voller Größe zu sehen. Die Originalgröße lautet %1$s x %2$s und hat ein Dateigröße von %3$sKB.',
	'ABBC3_RESIZE_NOFILESIZE'	=> 'Dieses Bild wurden in der Größe verändert. Klicke auf diesen Balken, um es in voller Größe zu sehen. Die Originalgröße lautet %1$s x %2$s.',
	'ABBC3_RESIZE_FULLSIZE'		=> 'Bild verändert auf: %1$s % seiner Originalgröße [ %2$s x %3$s ]',
	'ABBC3_RESIZE_NUMBER'		=> 'Bild %1$s von %2$s',
	'ABBC3_RESIZE_PLAY'			=> 'Diashow anzeigen',
	'ABBC3_RESIZE_PAUSE'		=> 'Diashow anhalten',

// Highslide JS - http://vikjavev.no/highslide/forum/viewtopic.php?t=2119
	'ABBC3_HIGHSLIDE_LOADINGTEXT'		=> 'Lade ...',
	'ABBC3_HIGHSLIDE_LOADINGTITLE'		=> 'Klicke, um abzubrechen',
	'ABBC3_HIGHSLIDE_FOCUSTITLE'		=> 'Klicke, um es in edn Vordergrund zu bringen',
	'ABBC3_HIGHSLIDE_FULLEXPANDTITLE'	=> 'Erweitere es auf die aktuelle Größe',
	'ABBC3_HIGHSLIDE_FULLEXPANDTEXT'	=> 'Originalgröße',
	'ABBC3_HIGHSLIDE_CREDITSTEXT'		=> 'Powered by <i>Highslide JS</i>',
	'ABBC3_HIGHSLIDE_CREDITSTITLE'		=> 'Gehe zur Homepage von Highslide JS',
	'ABBC3_HIGHSLIDE_PREVIOUSTEXT'		=> 'Vorheriges',
	'ABBC3_HIGHSLIDE_PREVIOUSTITLE'		=> 'Vorheriges (Pfeil links)',
	'ABBC3_HIGHSLIDE_NEXTTEXT'			=> 'Nächstes',
	'ABBC3_HIGHSLIDE_NEXTTITLE'			=> 'Nächstes (Pfeil rechts)',
	'ABBC3_HIGHSLIDE_MOVETITLE'			=> 'Verschieben',
	'ABBC3_HIGHSLIDE_MOVETEXT'			=> 'Verschieben',
	'ABBC3_HIGHSLIDE_CLOSETEXT'			=> 'Schließen',
	'ABBC3_HIGHSLIDE_CLOSETITLE'		=> 'Schließen (Esc)',
	'ABBC3_HIGHSLIDE_RESIZETITLE'		=> 'Umwandeln',
	'ABBC3_HIGHSLIDE_PLAYTEXT'			=> 'Abspielen',
	'ABBC3_HIGHSLIDE_PLAYTITLE'			=> 'Zeige Diashow (Leertaste)',
	'ABBC3_HIGHSLIDE_PAUSETEXT'			=> 'Pause',
	'ABBC3_HIGHSLIDE_PAUSETITLE'		=> 'Diashow pausieren (Leertaste)',
	'ABBC3_HIGHSLIDE_NUMBER'			=> 'Bild %1 von %2',
	'ABBC3_HIGHSLIDE_RESTORETITLE'		=> 'Klicke, um das Bild zu schließen, klicke und halte es fest, um es zu verschieben. Benutze die Pfeiltasten für vorheriges and nächstes.',

// Text to be applied to the helpline & mouseover & help page & Wizard texts
	'BBCODE_STYLES_TIP'			=> 'Tipp: Styles können schnell auf den gewählten Text übertragen werden.',

	'ABBC3_ERROR'				=> 'Fehler : ',
	'ABBC3_ERROR_TAG'			=> 'Unbekannter Fehler beim Benutzen des Tags : ',
	'ABBC3_NO_EXAMPLE'			=> 'Kein Datenbeispiel',

	'ABBC3_ID'					=> 'Gebe Identifier ein :',
	'ABBC3_NOID'				=> 'Du hast keinen Identifier eingegeben',
	'ABBC3_LINK'				=> 'Gib einen Link ein für ',
	'ABBC3_DESC'				=> 'Gib eine Beschreibung ein für ',
	'ABBC3_NAME'				=> 'Beschreibung',
	'ABBC3_NOLINK'				=> 'Du hast keinen Link eingegeben für ',
	'ABBC3_NODESC'				=> 'Du hast keine Beschreibung eingegeben für ',
	'ABBC3_WIDTH'				=> 'Gib die Breite ein',
	'ABBC3_WIDTH_NOTE'			=> 'Notiz: Der Wert kann in Prozent angegeben werden',
	'ABBC3_NOWIDTH'				=> 'Du hast keine Breite angegeben',
	'ABBC3_HEIGHT'				=> 'Gib die Höhe ein',
	'ABBC3_HEIGHT_NOTE'			=> 'Notiz: Der Wert kann in Prozent angegeben werden',
	'ABBC3_NOHEIGHT'			=> 'Du hast keine Höhe angegeben',

	'ABBC3_NOTE'				=> 'Notiz',
	'ABBC3_EXAMPLE'				=> 'Beispiel',
	'ABBC3_EXAMPLES'			=> 'Beispiele',
	'ABBC3_UNAUTHORISED'		=> 'Du kannst bestimmte Wörter nicht verwenden : <br /><strong> %s </strong>',
	'SAMPLE_TEXT'				=> 'Dies ist ein Beispieltext' //	' . $lang['SAMPLE_TEXT'] . '
));

//
// TRANSLATORS PLEASE NOTE 
// Several lines have an special note like "##	For translate : " follow for one or more "yes" 
// These means that you can/have to translate the word under
//

$lang = array_merge($lang, array(
// bbcodes texts	
	// Font Type Dropdown
	'ABBC3_FONT_MOVER'			=> 'Schriftart',
	'ABBC3_FONT_TIP'			=> '[font=Comic Sans MS]text[/font]',
	'ABBC3_FONT_NOTE'			=> 'Notiz: Du kannst deine eigene Schriftenfamilie benutzen',
	'ABBC3_FONT_VIEW'			=> '<span style="font-family:Comic Sans MS">' . $lang['SAMPLE_TEXT'] . '</span>',

	// Font family Groups
	'ABBC3_FONT_ABBC3'			=> 'ABBC Box 3',
	'ABBC3_FONT_SAFE'			=> 'Sichere Liste',
	'ABBC3_FONT_WIN'			=> 'Win standard',

	// Font Size Dropdown
	'ABBC3_FONT_GIANT'			=> 'Riesig',
	'ABBC3_SIZE_MOVER'			=> 'Schriftgröße',
	'ABBC3_SIZE_TIP'			=> '[size=150]Grosser Text[/size]',
	'ABBC3_SIZE_NOTE'			=> 'Notiz: Der Wert wird prozentual gelesen',
	'ABBC3_SIZE_VIEW'			=> '<span style="font-size: 150%; line-height: 116%;">' . $lang['SAMPLE_TEXT'] . '</span>',

	// Highlight Font Color Dropdown
	'ABBC3_HIGHLIGHT_MOVER'		=> 'Text hervorheben',
	'ABBC3_HIGHLIGHT_TIP'		=> '[highlight=yellow]Text[/highlight]',
	'ABBC3_HIGHLIGHT_NOTE'		=> 'Notiz: Du kannst HTML-Farben nutzen (color=#FF0000 oder color=red)',
	'ABBC3_HIGHLIGHT_VIEW'		=> '<span style="background-color: yellow;">' . $lang['SAMPLE_TEXT'] . '</span>',

	// Font Color Dropdown
	'ABBC3_COLOR_MOVER'			=> 'Schriftfarbe',
	'ABBC3_COLOR_TIP'			=> '[color=red]text[/color]',
	'ABBC3_COLOR_NOTE'			=> 'Notiz: Du kannst HTML-Farben nutzen (color=#FF0000 oder color=red)',
	'ABBC3_COLOR_VIEW'			=> '<span style="color:red">' . $lang['SAMPLE_TEXT'] . '</span>',

	// Cut selected text
	'ABBC3_CUT_MOVER'			=> 'Entferne ausgewählten Text',
	// Copy selected text
	'ABBC3_COPY_MOVER'			=> 'Kopiere ausgewählten Text',
	// Paste previously copy text
	'ABBC3_PASTE_MOVER'			=> 'Füge kopierten Text ein',
	'ABBC3_PASTE_ERROR'			=> 'Bitte kopiere erst einen Text, um ihn einzufügen ',
	// Remove BBCode (Removes all BBCode tags from selected text)
	'ABBC3_PLAIN_MOVER'			=> 'Entferne BBCode des ausgewählten Textes',
	'ABBC3_NOSELECT_ERROR'		=> 'Bitte wähle erst einen Text aus ',

	// Code
	'ABBC3_CODE_MOVER'			=> 'Code',
	'ABBC3_CODE_TIP'			=> '[code]Codezeilen[/code]',
	'ABBC3_CODE_VIEW'			=> '<dl class="codebox"><dt>'. $lang['CODE'] .': <a href="#" onclick="selectCode(this); return false;">'. $lang['SELECT_ALL_CODE'] .'</a></dt><dd><code>Das ist ein Beispieltext</code></dd></dl>',

	// Quote
	'ABBC3_QUOTE_MOVER'			=> 'Zitat',
	'ABBC3_QUOTE_TIP'			=> '[quote]Text[/quote] oder [quote=\"member\"]Text[/quote]',
##	For translate :                                        yes
	'ABBC3_QUOTE_VIEW'			=> '<blockquote><div><cite>member '. $lang['WROTE'] .':</cite>' . $lang['SAMPLE_TEXT'] . '</div></blockquote>',

	// html
//	'ABBC3_HTML_MOVER'			=> 'HTML code',
//	'ABBC3_HTML_TIP'			=> '[html]xhtml code[/html]',
//	'ABBC3_HTML_EXAMPLE'		=> '[html]&lt;a href=\"http://www.mssti.com/phpbb3\"&gt;link to mssti&lt;/a&gt;[/html]',
//	'ABBC3_HTML_VIEW'			=> '<a href="http://www.mssti.com/phpbb3">link to mssti</a>',

	// Spoiler
	'ABBC3_SPOIL_MOVER'			=> 'Spoilertext',
	'ABBC3_SPOIL_TIP'			=> '[spoil]Text[/spoil]',
##	For translate :                                                                                                                               yes                                                      yes               yes
	'ABBC3_SPOIL_VIEW'			=> '<div class="spoilwrapper"><div class="spoiltitle"><input id="1" class="btnspoil button2" type="button" value="Spoiler anzeigen" onClick="javascript:abbc3_spoiler( 2, 2, \'Spoiler verstecken\', \'Spoiler anzeigen\' )"></div><div class="spoilcontent"><div id="2" style="display: none;">' . $lang['SAMPLE_TEXT'] . '</div></div></div>',
	'SPOILER_SHOW'				=> 'Spoiler anzeigen',
	'SPOILER_HIDE'				=> 'Spoiler verstecken',

	// Moderator tag
	'ABBC3_MOD_MOVER'			=> 'Moderator Nachricht',
	'ABBC3_MOD_TIP'				=> '[mod=name]Text[/mod]',
##	For translate :                                                                                                                                                                               yes
	'ABBC3_MOD_VIEW'			=> '<table class="ModTable" width="100%" cellspacing="5" cellpadding="0" border="0"><tr><td class="exclamation" rowspan="2">&nbsp;!&nbsp;</td><td class="rowuser">Moderator_name '. $lang['WROTE'] .':</td></tr><tr><td class="rowtext">' . $lang['SAMPLE_TEXT'] . '</td></tr></table>',

	// Off topic tag
	'OFFTOPIC'					=> 'Offtopic',
	'ABBC3_OFFTOPIC_MOVER'		=> 'Offtopic Text einfügen',
	'ABBC3_OFFTOPIC_TIP'		=> '[offtopic]Text[/offtopic]',
##	For translate :                                                                yes
	'ABBC3_OFFTOPIC_VIEW'		=> '<dl class="OffTopic"><dt class="OffTopicTitle">Offtopic: </dt><dd class="OffTopicText">' . $lang['SAMPLE_TEXT'] . '</dd></dl>',

	// NFO
	'ABBC3_NFO_TITLE'			=> 'NFO Text',
	'ABBC3_NFO_MOVER'			=> 'NFO Text (Bessere Ansicht im Internet Explorer)',
	'ABBC3_NFO_TIP'				=> '[nfo]NFO Text[/nfo]',
	'ABBC3_NFO_VIEW'			=> '<table cellspacing="0" cellpadding="0" border="0" ><tr><td><span class="genmed"><b>NFO:</b></span></td></tr><tr><td class="nfo">' . str_replace(" ", "&nbsp;", '    ² ÛÛÛÛ ÛÛ±±°                                  °°°±±±±²²²ÛÛÛÛÛÛÛÛÛÛÛ  Û   ÛÛ ÛÛÛ') . '</td></tr></table>',

	// Justify Align
	'ABBC3_ALIGNJUSTIFY_MOVER'	=> 'Blocktext',
	'ABBC3_ALIGNJUSTIFY_TIP'	=> '[align=justify]Text[/align]',
##	For translate :                                                 yes          yes
	'ABBC3_ALIGNJUSTIFY_VIEW'	=> '<div style="text-align:justify">This is <br />a sample text</div>',

	// Right Align
	'ABBC3_ALIGNRIGHT_MOVER'	=> 'Text rechts ausgerichtet',
	'ABBC3_ALIGNRIGHT_TIP'		=> '[align=right]Text[/align]',
	'ABBC3_ALIGNRIGHT_VIEW'		=> '<div style="text-align:right">' . $lang['SAMPLE_TEXT'] . '</div>',

	// Center Align
	'ABBC3_ALIGNCENTER_MOVER'	=> 'Text zentriert',
	'ABBC3_ALIGNCENTER_TIP'		=> '[align=center]Text[/align]',
	'ABBC3_ALIGNCENTER_VIEW'	=> '<div style="text-align:center">' . $lang['SAMPLE_TEXT'] . '</div>',

	// Left Align
	'ABBC3_ALIGNLEFT_MOVER'		=> 'Text links ausgerichtet',
	'ABBC3_ALIGNLEFT_TIP'		=> '[align=left]Text[/align]',
	'ABBC3_ALIGNLEFT_VIEW'		=> '<div style="text-left:justify">' . $lang['SAMPLE_TEXT'] . '</div>',

	// Preformat
	'ABBC3_PRE_MOVER'			=> 'Text vorformatiert',
	'ABBC3_PRE_TIP'				=> '[pre]Text[/pre]',
	'ABBC3_PRE_VIEW'			=> '<pre>Das ist ein Beispieltext</pre>',

	// Tab
	'ABBC3_TAB_MOVER'			=> 'Normaler Einzug',
	'ABBC3_TAB_TIP'				=> '[tab=nn]',
	'ABBC3_TAB_NOTE'			=> 'Enter a number that will be a margin measured in pixels.',
	'ABBC3_TAB_VIEW'			=> '<span style="margin-left:20px;"></span>' . $lang['SAMPLE_TEXT'] . '',

	// Superscript
	'ABBC3_SUP_MOVER'			=> 'Hochgestellter Text',
	'ABBC3_SUP_TIP'				=> '[sup]Text[/sup]',
##	For translate :                 yes                                                                 yes
	'ABBC3_SUP_VIEW'			=> 'Dies ist normaler Text <sup>' . $lang['SAMPLE_TEXT'] . '</sup> Dies ist normaler Text',

	// Subscript
	'ABBC3_SUB_MOVER'			=> 'Tiefgestellter Text',
	'ABBC3_SUB_TIP'				=> '[sub]Text[/sub]',
##	For translate :                 yes                                                                 yes
	'ABBC3_SUB_VIEW'			=> 'Dies ist normaler Text <sub>' . $lang['SAMPLE_TEXT'] . '</sub> Dies ist normaler Text',

	// Bold
	'ABBC3_B_MOVER'				=> 'Text fett',
	'ABBC3_B_TIP'				=> '[b]Text[/b]',
	'ABBC3_B_VIEW'				=> '<strong>' . $lang['SAMPLE_TEXT'] . '</strong>',

	// Italic
	'ABBC3_I_MOVER'				=> 'Text kursiv',
	'ABBC3_I_TIP'				=> '[i]Text[/i]',
	'ABBC3_I_VIEW'				=> '<em>' . $lang['SAMPLE_TEXT'] . '</em>',

	// Underline
	'ABBC3_U_MOVER'				=> 'Text unterstrichen',
	'ABBC3_U_TIP'				=> '[u]Text[/u]',
	'ABBC3_U_VIEW'				=> '<span style="text-decoration: underline">' . $lang['SAMPLE_TEXT'] . '</span>',

	// Strikethrough
	'ABBC3_S_MOVER'				=> 'Text durchgestrichen',
	'ABBC3_S_TIP'				=> '[s]Text[/s]',
	'ABBC3_S_VIEW'				=> '<span style="text-decoration: line-through;">' . $lang['SAMPLE_TEXT'] . '</span>',

	// Text Fade
	'ABBC3_FADE_MOVER'			=> 'Text einblenden - ausblenden',
	'ABBC3_FADE_TIP'			=> '[fade]Text[/fade]',
	'ABBC3_FADE_VIEW'			=> '<span class="fade_link">' . $lang['SAMPLE_TEXT'] . '</span> <script type="text/javascript">fade_ontimer()</script>',

	// Text Gradient
	'ABBC3_GRAD_MOVER'			=> 'Text mit Farbverlauf',
	'ABBC3_GRAD_TIP'			=> '',
##For translate (The separate words are "This is a sample text") yes                                  yes                                  yes                                  yes                                   yes                                  yes                                   yes                                   yes                                  yes                                  yes                                  yes                                  yes                                  yes                                   yes                                  yes                                  yes                                  yes
	'ABBC3_GRAD_VIEW'			=> '<span style="color: #FF0000">T</span><span style="color: #F2000D">h</span><span style="color: #E6001A">i</span><span style="color: #D90026">s</span> <span style="color: #BF0040">i</span><span style="color: #B3004D">s</span> <span style="color: #990066">a</span> <span style="color: #800080">s</span><span style="color: #73008C">a</span><span style="color: #660099">m</span><span style="color: #5900A6">p</span><span style="color: #4D00B3">l</span><span style="color: #4000BF">e</span> <span style="color: #2600D9">t</span><span style="color: #1A00E6">e</span><span style="color: #0D00F2">x</span><span style="color: #0000FF">t</span>',
	'ABBC3_GRAD_MIN_ERROR'		=> 'Wähle erst einen Text aus : ',
	'ABBC3_GRAD_MAX_ERROR'		=> 'Es sind max 120 Zeichen erlaubt : ',
	'ABBC3_GRAD_COLORS'			=> 'Vorselektierte Farben',

	// Glow text
	'ABBC3_GLOW_MOVER'			=> 'Glühender Text (Nur Internet Explorer)',
	'ABBC3_GLOW_TIP'			=> '[glow=(color)]Text[/glow]',
	'ABBC3_GLOW_VIEW'			=> '<div style="filter:Glow(color=red,strength=4);color:#ffffff;height:110%">' . $lang['SAMPLE_TEXT'] . '</div>',

	// Shadow text
	'ABBC3_SHADOW_MOVER'		=> 'Text mit Schatten (Nur Internet Explorer)',
	'ABBC3_SHADOW_TIP'			=> '[shadow=(color)]Text[/shadow]',
	'ABBC3_SHADOW_VIEW'			=> '<div style="filter:shadow(color=black,strength=4);color:blue;height:110%">' . $lang['SAMPLE_TEXT'] . '</div>',

	// Dropshadow text
	'ABBC3_DROPSHADOW_MOVER'	=> 'Text mit Schattenfall (Nur Internet Explorer)',
	'ABBC3_DROPSHADOW_TIP'		=> '[dropshadow=(color)]Text[/dropshadow]',
	'ABBC3_DROPSHADOW_VIEW'		=> '<div style="filter:dropshadow(color=#999999,strength=4);color:blue;height:110%">' . $lang['SAMPLE_TEXT'] . '</div>',

	// Blur text
	'ABBC3_BLUR_MOVER'			=> 'Verschwommener Text (Nur Internet Explorer)',
	'ABBC3_BLUR_TIP'			=> '[blur=(color)]Text[/blur]',
	'ABBC3_BLUR_VIEW'			=> '<div style="filter:Blur(strength=7);color:blue;height:110%">' . $lang['SAMPLE_TEXT'] . '</div>',

	// Wave text
	'ABBC3_WAVE_MOVER'			=> 'Wellentext (Nur Internet Explorer)',
	'ABBC3_WAVE_TIP'			=> '[wave=(color)]Text[/wave]',
	'ABBC3_WAVE_VIEW'			=> '<div style="filter:Wave(strength=2);color:blue;height:110%">' . $lang['SAMPLE_TEXT'] . '</div>',

	// Unordered List
	'ABBC3_LISTB_MOVER'			=> 'Aufzählungszeichen',
	'ABBC3_LISTB_TIP'			=> '[list]Text[/list]',
	'ABBC3_LISTB_NOTE'			=> 'Notiz: Nutze [*] um Aufzählungszeichen zu erstellen',
##	For translate :                         yes           yes           yes                   yes              yes              yes                yes
	'ABBC3_LISTB_VIEW'			=> '<ul><li>Item1</li><li>Item2</li><li>Item3</li></ul><br /> or <br /><ul><li>Item disc<ul><li>Item circle<ul><li>item square</li></ul></li></ul></li></ul><br />',

	// Ordered List
	'ABBC3_LISTO_MOVER'			=> 'Sortierte Liste',
	'ABBC3_LISTO_TIP'			=> '[list=1|a]text[/list]',
	'ABBC3_LISTO_NOTE'			=> 'Notiz: Nutze [*] um Aufzählungszeichen zu erstellen',
##	For translate :                                                                  yes          yes           yes             yes                                                   yes           yes           yes             yes                                                   yes            yes            yes              yes                                                   yes            yes             yes                yes                                                   yes            yes             yes
	'ABBC3_LISTO_VIEW'			=> '<ol style="list-style-type: arabic-numbers"><li>Item1</li><li>Item2</li><li>Item3</li></ol> or <br /><ol style="list-style-type: lower-alpha"><li>Item1</li><li>Item2</li><li>Item3</li></ol> or <br /><ol style="list-style-type: upper-alpha"><li>item A</li><li>item B</li><li>item C</li></ol> or <br /><ol style="list-style-type: lower-roman"><li>Item i</li><li>Item ii</li><li>Item iii</li></ol> or <br /><ol style="list-style-type: upper-roman"><li>Item I</li><li>Item II</li><li>Item III</li></ol>',

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
	'ABBC3_DIRRTL_MOVER'		=> 'Text von rechts nach links zu lesen',
	'ABBC3_DIRRTL_TIP'			=> '[dir=rtl]Text[/dir]',
	'ABBC3_DIRRTL_VIEW'			=> '<BDO dir="rtl">' . $lang['SAMPLE_TEXT'] . '</BDO>',

	// Message Box text direction right to Left
	'ABBC3_DIRLTR_MOVER'		=> 'Text von links nach rechts zu lesen',
	'ABBC3_DIRLTR_TIP'			=> '[dir=ltr]Text[/dir]',
	'ABBC3_DIRLTR_VIEW'			=> '<BDO dir="ltr">' . $lang['SAMPLE_TEXT'] . '</BDO>',

	// Marquee Down
	'ABBC3_MARQDOWN_MOVER'		=> 'Scrolltext nach unten',
	'ABBC3_MARQDOWN_TIP'		=> '[marq=down]Text[/marq]',
	'ABBC3_MARQDOWN_VIEW'		=> '<marquee direction="down" scrolldelay="120" height="80px">Das ist ein Beispieltext</marquee>',

	// Marquee Up
	'ABBC3_MARQUP_MOVER'		=> 'Scrolltext nach oben',
	'ABBC3_MARQUP_TIP'			=> '[marq=up]Text[/marq]',
	'ABBC3_MARQUP_VIEW'			=> '<marquee direction="up" scrolldelay="120" height="80px">' . $lang['SAMPLE_TEXT'] . '</marquee>',

	// Marquee Right
	'ABBC3_MARQRIGHT_MOVER'		=> 'Lauftext nach rechts',
	'ABBC3_MARQRIGHT_TIP'		=> '[marq=right]Text[/marq]',
	'ABBC3_MARQRIGHT_VIEW'		=> '<marquee direction="right" scrolldelay="120">' . $lang['SAMPLE_TEXT'] . '</marquee>',

	// Marquee Left
	'ABBC3_MARQLEFT_MOVER'		=> 'Lauftext nach links',
	'ABBC3_MARQLEFT_TIP'		=> '[marq=left]Text[/marq]',
	'ABBC3_MARQLEFT_VIEW'		=> '<marquee direction="left" scrolldelay="120">' . $lang['SAMPLE_TEXT'] . '</marquee>',

	// Table row cell wizard
	'ABBC3_TABLE_MOVER'			=> 'Tabelle einfügen',
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
	'ABBC3_UPLOAD_MOVER'		=> 'Datei anhängen',
	'ABBC3_UPLOAD_LINK'			=> 'Das ist der Link zu deiner angehängten Datei',
	'ABBC3_UPLOAD_UPLOADED'		=> 'Anhang %s war erfolgreich!',
	'ABBC3_UPLOAD_NOT_UPLOADED'	=> 'Anhang %s konnte nicht hochgeladen werden!',
	'ABBC3_UPLOAD_ALREADY'		=> 'Anhang %s existiert schon, bitte wähle eine andere oder benenne die Datei um und versuche es nocheinmal',
	'ABBC3_UPLOAD_ERROR'		=> 'Konnte Anhang nicht hochladen nach %s. Fehlercode : %d',
	'ABBC3_UPLOAD_EXTENSION'	=> 'Verfügbare Erweiterungen',

	'ABBC3_UPLOAD_DISABLED'		=> 'Die Erweiterung %s ist nicht erlaubt',
	'ABBC3_UPLOAD_SIZE'			=> 'Die maximale Größe',
	'ABBC3_UPLOAD_NOSIZE'		=> 'Die hochgeladene Dateigröße %d ist zu groß. Die maximal erlaubte Größe ist %d KB',
	'ABBC3_UPLOAD_EMPTY'		=> 'Der Dateianhang ist leer, bitte wähle zuerst eine Datei aus',

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
	'ABBC3_ED2K_ADD'			=> 'Füge diesen Link zu deinem Emule Client hinzu',
	'ABBC3_ED2K_FRIEND'			=> 'ed2k friend',
	'ABBC3_ED2K_SERVER'			=> 'ed2k server',
	'ABBC3_ED2K_SERVERLIST'		=> 'ed2k serverlist',

	// Web included by iframe
	'ABBC3_WEB_TAG'				=> 'Webseite',
	'ABBC3_WEB_MOVER'			=> 'Internetseite im Beitrag einfügen',
	'ABBC3_WEB_TIP'				=> '[web width=200 height=100]URL web[/web]',
	'ABBC3_WEB_EXAMPLE'			=> 'http://www.google.com',
	'ABBC3_WEB_VIEW'			=> '<iframe width="100%" height="100" src="http://www.google.com" style="font-size: 2px;"></iframe><br/>',

	// Image Wizard
	'ABBC3_IMG_TAG'				=> 'Bild',
	'ABBC3_IMG_MOVER'			=> 'Bild einfügen',
	'ABBC3_IMG_TIP'				=> '[img=(left|center|right)]http://...[/img]',
	'ABBC3_IMG_EXAMPLE'			=> 'http://www.google.com/intl/en_com/images/logo_plain.png',
	'ABBC3_IMG_VIEW'			=> '<div align="center"><img src="http://www.google.com/intl/en_com/images/logo_plain.png" alt="" /></div>',

	// Thumbnail
	'ABBC3_THUMBNAIL_TAG'		=> 'Vorschaubild',
	'ABBC3_THUMBNAIL_MOVER'		=> 'Vorschaubild einfügen',
	'ABBC3_THUMBNAIL_TIP'		=> '[thumbnail(=left|right)]http://...[/thumbnail]',
	'ABBC3_THUMBNAIL_EXAMPLE'	=> 'http://www.google.com/intl/en_com/images/logo_plain.png',
	'ABBC3_THUMBNAIL_VIEW'		=> '<a href="http://www.google.com/intl/en_com/images/logo_plain.png" rel="gb_imageset[]" alt="http://www.google.com/intl/en_com/images/logo_plain.png" title="" class="hoverbox"><img src="http://www.google.com/intl/en_com/images/logo_plain.png" border="0" width="100px" align="right"/></a>',

	// Imgshack
	'ABBC3_IMGSHACK_MOVER'		=> 'ImageShack - Bild einfügen',
	'ABBC3_IMGSHACK_TIP'		=> '[url=http://imageshack.us][img=http://...][/img][/url]',
	'ABBC3_IMGSHACK_VIEW'		=> '<a href="http://img207.imageshack.us/my.php?image=advancedbbcodebox3prosidd3.gif" class="postlink"><img src="http://img207.imageshack.us/img207/1773/advancedbbcodebox3prosidd3.th.gif" alt="Image" /></a>',

	// Rapid share checker
	'ABBC3_FOPEN_ERROR'			=> '<strong>Error : </strong> Sorry, aber wie es aussieht ist  <strong>allow_url_fopen</strong> deaktiviert. Diese Funktion funktioniert nur, wenn  allow_url_fopen aktiviert ist.',
	'ABBC3_RAPIDSHARE_TAG'		=> 'rapidshare',
	'ABBC3_RAPIDSHARE_MOVER'	=> 'Rapidshare Datei einfügen',
	'ABBC3_RAPIDSHARE_TIP'		=> '[rapidshare]http://rapidshare.com/files/...[/rapidshare]',
	'ABBC3_RAPIDSHARE_EXAMPLE'	=> 'http://rapidshare.com/files/86587996/ABBC3_v109.zip.html',
	'ABBC3_RAPIDSHARE_VIEW'		=> '<a href="http://rapidshare.com/files/86587996/ABBC3_v109.zip.html" >http://rapidshare.com/files/86587996/ABBC3_v109.zip.html</a> <font color="green" size="4" >Datei nicht gefunden !</font><br />',
	'ABBC3_RAPIDSHARE_GOOD'		=> 'Datei auf Server gefunden !',
	'ABBC3_RAPIDSHARE_WRONG'	=> 'Datei nicht gefunden !',

	// testlink
	'ABBC3_CURL_ERROR'			=> '<strong>Error : </strong> Sorry, ie es aussieht, ist CURL nicht geladen. Um diese Funktion nutzen zu können, mußt CURL erst installieren.',
	'ABBC3_LOGIN_EXPLAIN_VIEW'	=> 'Du mußt registriert und eingeloggt sein, damit du Links sehen kannst.',
	'ABBC3_TESTLINK_TAG'		=> 'Link Prüfen',
	'ABBC3_TESTLINK_MOVER'		=> 'Füge eine Datei ein, die auf einem öffentlichem Server gespeichert wird',
	'ABBC3_TESTLINK_TIP'		=> '[testlink]http://rapidshare.com/files/...[/testlink]',
	'ABBC3_TESTLINK_NOTE'		=> 'Verfügbare Server : rapidshare, megaupload, megarotic, depositfiles, megashares .',
	'ABBC3_TESTLINK_EXAMPLE'	=> 'http://rapidshare.com/files/86587996/ABBC3_v108.zip.html',
	'ABBC3_TESTLINK_VIEW'		=> '<dl class="testlink"><dd><font color="red" size="4" >X</font>&nbsp;<a href="http://rapidshare.com/files/86587996/ABBC3_v108.zip.html" >http://rapidshare.com/files/86587996/ABBC3_v108.zip.html</a><br /></dd></dl>',
	'ABBC3_TESTLINK_GOOD'		=> 'Datei auf Server gefunden !',
	'ABBC3_TESTLINK_WRONG'		=> 'Datei nicht gefunden !',
	
	// Click counter
	'ABBC3_CLICK_TAG'			=> 'Klick',
	'ABBC3_CLICK_MOVER'			=> 'Füge Counter ein',
	'ABBC3_CLICK_TIP'			=> '[click]http://...[/click] oder [click=http://...]Name der Webadresse[/click] oder [click][img]http://...[/img][/click]',
	'ABBC3_CLICK_EXAMPLE' 		=> 'http://www.google.com ' . ' ' . 'http://www.google.com/intl/en_com/images/logo_plain.png' ,
	'ABBC3_CLICK_VIEW'			=> '<a href="./click.php?id=1" >http://www.phpbb.com</a> ( Klick 1 mal )<br />',
	'ABBC3_CLICK_TIME'			=> '( %d mal geklickt )',
	'ABBC3_CLICK_TIMES'			=> '( %d mal geklickt )',
	'ABBC3_CLICK_ERROR'			=> '<strong>FEHLER:</strong> Bitte gebe eine gültige click ID in die URL ein',

	// Search tag
	'ABBC3_SEARCH_MOVER'		=> 'Suchwort eingeben',
	'ABBC3_SEARCH_TIP'			=> '[search(=(msn|yahoo|google|altavista|lycos|wikipedia))]Suchwort[/search]',
	'ABBC3_SEARCH_VIEW'			=> $lang['SEARCH_MINI'] . ' ' . $config['sitename'] . ' : <a href="search.php?keywords=Advanced BBcode box 3">"Advanced BBcode box 3"</a><br/><br/>' . $lang['SEARCH_MINI'] . ' msn : <a href="http://search.live.com/results.aspx?q=Advanced BBcode box 3&mkt=tr-TR&lf=1" target="_blank">"Advanced BBcode box 3"</a><br/><br/>' .$lang['SEARCH_MINI'] . ' yahoo : <a href="http://search.yahoo.com/search?p=Advanced BBcode box 3" target="_blank">"Advanced BBcode box 3"</a><br/><br/>' . $lang['SEARCH_MINI'] . ' google : <a href="http://www.google.com.tr/search?q=Advanced BBcode box 3" target="_blank">"Advanced BBcode box 3"</a>',

	// BBvideo Wizard
	'ABBC3_BBVIDEO_TAG'			=> 'BBvideo',
	'ABBC3_BBVIDEO_MOVER'		=> 'Web Video einfügen',
	'ABBC3_BBVIDEO_TIP'			=> '[BBvideo]Video URL[/BBvideo]',
	'ABBC3_BBVIDEO_EXAMPLE'		=> 'http://www.youtube.com/watch?v=TA4hm97m494',
	'ABBC3_BBVIDEO_VIEW'		=> '<object width="200" height="100"><param name="movie" value="http://www.youtube.com/v/TA4hm97m494" /><param name="wmode" value="transparent" /><embed src="http://www.youtube.com/v/TA4hm97m494" type="application/x-shockwave-flash" wmode="transparent" width="200" height="100"></embed></object>',
	'ABBC3_BBVIDEO_FILE'		=> 'Video Format',
	'ABBC3_BBVIDEO_VIDEO'		=> 'Video From',

	// Flash (swf) Wizard
	'ABBC3_FLASH_TAG'			=> 'flash',
	'ABBC3_FLASH_MOVER'			=> 'Flash Datei einfügen (swf)',
	'ABBC3_FLASH_TIP'			=> '[flash width=# height=#]URL flash[/flash] oder [flash width,height]URL flash[/flash]',
	'ABBC3_FLASH_EXAMPLE'		=> 'http://www.adobe.com/support/flash/ts/documents/test_version/version.swf',
	'ABBC3_FLASH_VIEW'			=> '<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0" width="200" height="100"><param name="movie" value="http://www.adobe.com/support/flash/ts/documents/test_version/version.swf" /><param name="play" value="true" /><param name="loop" value="true" /><param name="quality" value="high" /><param name="allowScriptAccess" value="never" /><param name="allowNetworking" value="internal" /><embed src="http://www.adobe.com/support/flash/ts/documents/test_version/version.swf" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" width="200" height="100" play="true" loop="true" quality="high" allowscriptaccess="never" allownetworking="internal"></embed></object>',

	// Flash (flv) Wizard
	'ABBC3_FLV_TAG'				=> 'flash',
	'ABBC3_FLV_MOVER'			=> 'Flash Datei einfügen (flv)',
	'ABBC3_FLV_TIP'				=> '[flv width=# height=#]URL flash[/flv] oder [flv width,height]URL flash[/flv]',
	'ABBC3_FLV_EXAMPLE' 		=> 'http://www.channel-ai.com/video/eyn/demo1.flv',
	'ABBC3_FLV_VIEW'			=> '<embed src="../images/flvplayer.swf" width="200" height="100" bgcolor="#FFFFFF" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="file=../files/demo1.flv&autostart=false" />',

	// Streaming Video Wizard
	'ABBC3_VIDEO_TAG'			=> 'Video',
	'ABBC3_VIDEO_MOVER'			=> 'Video Datei einfügen',
	'ABBC3_VIDEO_TIP'			=> '[video width=# height=#]URL Video[/video]',
	'ABBC3_VIDEO_EXAMPLE'		=> 'http://www.sarahsnotecards.com/catalunyalive/fishstore.wmv',
	'ABBC3_VIDEO_VIEW'			=> '<object classid="CLSID:6BF52A52-394A-11d3-B153-00C04F79FAA6" id="player"  width="200" height="100"><param name="url" value="http://www.sarahsnotecards.com/catalunyalive/fishstore.wmv" /><param name="src" value="http://www.sarahsnotecards.com/catalunyalive/fishstore.wmv" /><param name="showcontrols" value="true" /><param name="autostart" value="false" /><!--[if !IE]>--><object type="video/x-ms-wmv" data="http://www.sarahsnotecards.com/catalunyalive/fishstore.wmv" width="200" height="100" ><param name="src" value="http://www.sarahsnotecards.com/catalunyalive/fishstore.wmv" /><param name="autostart" value="false" /><param name="controller" value="true" /></object><!--<![endif]--></object>',

	// Streaming Audio Wizard
	'ABBC3_STREAM_TAG'			=> 'Sound',
	'ABBC3_STREAM_MOVER'		=> 'Sound Datei einfügen',
	'ABBC3_STREAM_TIP'			=> '[stream]URL Stream[/stream]',
	'ABBC3_STREAM_EXAMPLE'		=> 'http://realdev1.realise.com/rossa/mov/demo.mp3',
	'ABBC3_STREAM_VIEW'			=> '<object width="200" height="45" classid="CLSID:6BF52A52-394A-11d3-B153-00C04F79FAA6" id="wmstream_"><param name="url" value="$1" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /><param name="src" value="$1" /><!--[if !IE]>--><object width="200" height="45" type="video/x-ms-wmv" data="$1"><param name="src" value="$1" /><param name="controller" value="1" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /></object><!--<![endif]--></object>',

	// Quick time
	'ABBC3_QUICKTIME_TAG'		=> 'Quick time',
	'ABBC3_QUICKTIME_MOVER'		=> 'Quick Time Datei einfügen',
	'ABBC3_QUICKTIME_TIP'		=> '[quicktime width=# height=#]URL Quick time[/quicktime]',
	'ABBC3_QUICKTIME_EXAMPLE'	=> 'http://www.nature.com/neuro/journal/v3/n3/extref/Li_control.mov.qt' . ' ' . 'http://www.carnivalmidways.com/images/Music/thisisatest.mp3',
	'ABBC3_QUICKTIME_VIEW'		=> '<object id="qtstream_" classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab#version=6,0,2,0" width="200" height="100"><param name="src" value="http://www.nature.com/neuro/journal/v3/n3/extref/Li_control.mov.qt" /><param name="controller" value="true" /><param name="autoplay" value="false" /><param name="type" value="video/quicktime" /><embed name="qtstream_" src="http://www.nature.com/neuro/journal/v3/n3/extref/Li_control.mov.qt" pluginspage="http://www.apple.com/quicktime/download/" enablejavascript="true" controller="true" width="200" height="100" type="video/quicktime" autoplay="false"></embed></object>',

	// Real Media Wizard
	'ABBC3_RAM_TAG'				=> 'Real Media',
	'ABBC3_RAM_MOVER'			=> 'Real Media Datei einfügen',
	'ABBC3_RAM_TIP'				=> '[ram]URL Real Media[/ram]',
	'ABBC3_RAM_EXAMPLE'			=> 'http://www.bbc.co.uk/scotland/radioscotland/media/radioscotland.ram',
	'ABBC3_RAM_VIEW'			=> '<object id="rmstream_" classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" width="200" height="100"><param name="src" value="$3" /><param name="autostart" value="false" /><param name="controls" value="ImageWindow" /><param name="console" value="ctrls_" /><param name="prefetch" value="false" /><embed name="rmstream_" type="audio/x-pn-realaudio-plugin" src="$3" width="200" height="100" autostart="false" controls="ImageWindow" console="ctrls_" prefetch="false"></embed></object><br /><object id="ctrls_" classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" width="200" height="36"><param name="controls" value="ControlPanel" /><param name="console" value="ctrls_{_file.ATTACH_ID}" /><embed name="ctrls_" type="audio/x-pn-realaudio-plugin" width="200" height="36" controls="ControlPanel" console="ctrls_"></embed></object>',

//	// Stage6 video Wizard
//	'ABBC3_STAGE6_TAG'			=> 'Stage6 Video',
//	'ABBC3_STAGE6_MOVER'		=> 'Stage6 Video Datei einfügen', // from http://www.stage6.com/
//	'ABBC3_STAGE6_TIP'			=> '[stage6]Stage6 ID[/stage6]',
//	'ABBC3_STAGE6_EXAMPLE'		=> '2068715',
//	'ABBC3_STAGE6_VIEW'			=> '<object  classid="clsid:67DABFBF-D0AB-41fa-9C46-CC0F21721616" codebase="http://download.divx.com/player/DivXBrowserPlugin.cab" width="200" height="100" ><param name="src" value="http://video.stage6.com/2068715/.divx" /><param name="autoplay" value="false" /><param name="custommode" value="Stage6" /><param name="showpostplaybackad" value="false" /><embed type="video/divx" src="http://video.stage6.com/2068715/.divx" pluginspage="http://go.divx.com/plugin/download/" showpostplaybackad="false" custommode="Stage6" autoplay="false" width="200" height="100" /></object><br />',

	// Google video Wizard
	'ABBC3_GVIDEO_TAG'			=> 'Google Video',
	'ABBC3_GVIDEO_MOVER'		=> 'Google Video einfügen',
	'ABBC3_GVIDEO_TIP'			=> '[GVideo]Video URL[/GVideo]',
	'ABBC3_GVIDEO_EXAMPLE'		=> 'http://video.google.com/videoplay?docid=-8351924403384451128',
	'ABBC3_GVIDEO_VIEW'			=> '<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0" width="200" height="100"><param name="movie" value="http://video.google.com/googleplayer.swf?docid=-8351924403384451128" /><param name="play" value="false" /><param name="loop" value="false" /><param name="quality" value="high" /><param name="allowScriptAccess" value="never" /><param name="allowNetworking" value="internal" /><embed src="http://video.google.com/googleplayer.swf?docid=-8351924403384451128" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" width="200" height="100" play="false" loop="false" quality="high" allowscriptaccess="never" allownetworking="internal"></embed></object>',

	// Youtube video Wizard
	'ABBC3_YOUTUBE_TAG'			=> 'Youtube Video',
	'ABBC3_YOUTUBE_MOVER'		=> 'Youtube Video einfügen',
	'ABBC3_YOUTUBE_TIP'			=> '[youtube]Video URL[/youtube]',
	'ABBC3_YOUTUBE_EXAMPLE'		=> 'http://www.youtube.com/watch?v=TA4hm97m494',
	'ABBC3_YOUTUBE_VIEW'		=> '<object width="200" height="100"><param name="movie" value="http://www.youtube.com/v/TA4hm97m494" /><param name="wmode" value="transparent" /><embed src="http://www.youtube.com/v/TA4hm97m494" type="application/x-shockwave-flash" wmode="transparent" width="200" height="100"></embed></object>',

	// Veoh video
	'ABBC3_VEOH_TAG'			=> 'Veoh',
	'ABBC3_VEOH_MOVER'			=> 'Veoh Video einfügen',
	'ABBC3_VEOH_TIP'			=> '[veoh]Video URL[/veoh]',
	'ABBC3_VEOH_EXAMPLE'		=> 'http://www.veoh.com/videos/v1409404EqT5SJjM',
	'ABBC3_VEOH_VIEW'			=> '<embed src="http://www.veoh.com/videodetails2.swf?permalinkId=v1409404EqT5SJjM&id=anonymous&player=videodetailsembedded&videoAutoPlay=0" allowFullScreen="true" width="200" height="100" bgcolor="#000000" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>',

	// Collegehumor video
	'ABBC3_COLLEGEHUMOR_TAG'	=> 'collegehumor',
	'ABBC3_COLLEGEHUMOR_MOVER'	=> 'Collegehumor Video einfügen',
	'ABBC3_COLLEGEHUMOR_TIP'	=> '[collegehumor]Collegehumor video URL[/collegehumor]',
	'ABBC3_COLLEGEHUMOR_EXAMPLE'=> 'http://www.collegehumor.com/video:1802097',
	'ABBC3_COLLEGEHUMOR_VIEW'	=> '<object type="application/x-shockwave-flash" data="http://www.collegehumor.com/moogaloop/moogaloop.swf?clip_id=1802097&fullscreen=1" width="200" height="100" ><param name="allowfullscreen" value="true" /><param name="movie" quality="best" value="http://www.collegehumor.com/moogaloop/moogaloop.swf?clip_id=1802097&fullscreen=1" /></object>',

	// Dailymotion video
	'ABBC3_DM_MOVER'			=> 'dailymotion Video einfügen', // from http://www.dailymotion.com/
	'ABBC3_DM_TIP'				=> '[dm]Dailymotion ID[/dm]',
	'ABBC3_DM_EXAMPLE'			=> 'http://www.dailymotion.com/swf/x3hm7o',
	'ABBC3_DM_VIEW'				=> '<object width="200" height="100"><param name="movie" value="http://www.dailymotion.com/swf/x3hm7o" /><param name="allowFullScreen" value="true" /><param name="allowScriptAccess" value="never" /><embed src="http://www.dailymotion.com/swf/x3hm7o" type="application/x-shockwave-flash" width="200" height="100" allowFullScreen="true" allowScriptAccess="never"></embed></object>',

	// Gamespot video
	'ABBC3_GAMESPOT_MOVER'		=> 'Gamespot Video einfügen',
	'ABBC3_GAMESPOT_TIP'		=> '[gamespot]Gamespot Video URL [gamespot]',
	'ABBC3_GAMESPOT_EXAMPLE'	=> 'http://www.gamespot.com/video/944074/6185798/tom-clancys-rainbow-six-vegas-2-official-trailer-3',
	'ABBC3_GAMESPOT_VIEW'		=> '<embed id="mymovie" width="200" height="100" flashvars="paramsURI=http%3A%2F%2Fwww%2Egamespot%2Ecom%2Fpages%2Fvideo%5Fplayer%2Fproteus%5Fxml%2Ephp%3Fadseg%3D%26adgrp%3D%26sid%3D6185798%26pid%3D944074%26mb%3D%26onid%3D%26nc%3D1202626246593%26embedded%3D1%26showWatermark%3D0%26autoPlay%3D0" allowfullscreen="true" allowscriptaccess="never" quality="high" name="mymovie" src="http://image.com.com/gamespot/images/cne_flash/production/media_player/proteus/gs/proteus_embed.swf" type="application/x-shockwave-flash"/>',

	// Gametrailers video
	'ABBC3_GAMETRAILERS_MOVER'	=> 'Gametrailers Video einfügen',
	'ABBC3_GAMETRAILERS_TIP'	=> '[gametrailers]Gametrailers Video URL[/gametrailers]',
	'ABBC3_GAMETRAILERS_EXAMPLE'=> 'http://www.gametrailers.com/player/30461.html',
	'ABBC3_GAMETRAILERS_VIEW'	=> '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"  codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" id="gtembed" width="200" height="100"><param name="allowScriptAccess" value="never" /><param name="allowFullScreen" value="true" /><param name="movie" value="http://www.gametrailers.com/remote_wrap.php?mid=30461" /><param name="quality" value="high" /><embed src="http://www.gametrailers.com/remote_wrap.php?mid=30461" swLiveConnect="true" name="gtembed" align="middle" allowScriptAccess="never" allowFullScreen="true" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="200" height="100"></embed></object>',

	// IGN video
	'ABBC3_IGNVIDEO_MOVER'		=> 'Ign Video einfügen',
	'ABBC3_IGNVIDEO_TIP'		=> '[ignvideo]ING Video URL[/ignvideo]',
	'ABBC3_IGNVIDEO_EXAMPLE'	=> 'object_ID=967025&downloadURL=http://tvmovies.ign.com/tv/video/article/850/850894/knightrider_trailer_020808_flvlow.flv',
	'ABBC3_IGNVIDEO_VIEW'		=> '<embed src="http://videomedia.ign.com/ev/ev.swf" flashvars="object_ID=967025&downloadURL=http://tvmovies.ign.com/tv/video/article/850/850894/knightrider_trailer_020808_flvlow.flv" type="application/x-shockwave-flash" width="200" height="100" ></embed>',

	// LiveLeak video
	'ABBC3_LIVELEAK_MOVER'		=> 'Liveleak Video einfügen',
	'ABBC3_LIVELEAK_TIP'		=> '[liveleak]Liveleak Video URL[/liveleak]',
	'ABBC3_LIVELEAK_EXAMPLE'	=> 'http://www.liveleak.com/view?i=413_1202590393',
	'ABBC3_LIVELEAK_VIEW'		=> '<object type="application/x-shockwave-flash" width="200" height="100" wmode="transparent" data="http://www.liveleak.com/player.swf?autostart=false&token=i=413_1202590393"><param name="movie" value="http://www.liveleak.com/player.swf?autostart=false&token=$1" /><param name="wmode" value="transparent" /><param name="quality" value="high" /></object>',

	// Custom BBcodes

));

?>