<?php
/**
* @package: phpBB3 :: Advanced BBCode box 3 -> language [fr][French]
* @version: $Id: abbcode.php, v 1.0.11 2008/10/11 11:10:08 leviatan21 Exp $
* @copyright: leviatan21 < info@mssti.com > (Gabriel) http://www.mssti.com/phpbb3/
* @license: http://opensource.org/licenses/gpl-license.php GNU Public License 
* @author: leviatan21 - http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=345763
* @translator: Joebart- http://www.ultimarena.net
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
	'ABBC3_HELP_TITLE'			=> 'Advanced BBCode box 3 :: Page d’aide',
	'ABBC3_HELP_DESC'			=> 'Description',
	'ABBC3_HELP_WRITE'			=> 'Votre format d’écriture',
	'ABBC3_HELP_VIEW'			=> 'Notre format d’affichage',
	'ABBC3_HELP_ABOUT'			=> 'Advanced BBCode Box 3 par <a href="http://www.mssti.com/phpbb3">mssti</a>',
	'ABBC3_HELP_ALT'			=> 'Advanced BBCode Box 3 (aka ABBC3)',

// Image Resizer JS
	'ABBC3_RESIZE_SMALL'		=> 'Cliquez cette barre pour voir l’image complète.',
	'ABBC3_RESIZE_ZOOM_IN'		=> 'Agrandir (dimensions réelles : %1$s x %2$s)',
	'ABBC3_RESIZE_CLOSE'		=> 'Femer',
	'ABBC3_RESIZE_ZOOM_OUT'		=> 'Rapetisser',
	'ABBC3_RESIZE_FILESIZE'		=> 'Cette image a été redimensionnée. Cliquez cette barre pour voir l’image en pleine taille. L’image originale a pour taille %1$s x %2$s et pèse %3$sKB.',
	'ABBC3_RESIZE_NOFILESIZE'	=> 'Cette image a été redimensionnée. Cliquez cette barre pour voir l’image en pleine taille. L’image originale a pour taille %1$s x %2$s.',
	'ABBC3_RESIZE_FULLSIZE'		=> 'Cliquez cette barre pourvoir la petite image.',
	'ABBC3_RESIZE_NUMBER'		=> 'Image %1$s sur %2$s',
	'ABBC3_RESIZE_PLAY'			=> 'Jouer slideshow (diaporamas)',
	'ABBC3_RESIZE_PAUSE'		=> 'Pause slideshow (diaporamas)',

// Highslide JS - http://vikjavev.no/highslide/forum/viewtopic.php?t=2119
	'ABBC3_HIGHSLIDE_LOADINGTEXT'		=> 'Chargement...',
	'ABBC3_HIGHSLIDE_LOADINGTITLE'		=> 'Cliquer pour annuler',
	'ABBC3_HIGHSLIDE_FOCUSTITLE'		=> 'Click to bring to front',
	'ABBC3_HIGHSLIDE_FULLEXPANDTITLE'	=> 'Etendre à la taille actuelle',
	'ABBC3_HIGHSLIDE_FULLEXPANDTEXT'	=> 'Pleine taille',
	'ABBC3_HIGHSLIDE_CREDITSTEXT'		=> 'Powered by <i>Highslide JS</i>',
	'ABBC3_HIGHSLIDE_CREDITSTITLE'		=> 'Aller sur la page d’accueil d’Highslide JS',
	'ABBC3_HIGHSLIDE_PREVIOUSTEXT'		=> 'Précédent',
	'ABBC3_HIGHSLIDE_PREVIOUSTITLE'		=> 'Précédent (flèche gauche)',
	'ABBC3_HIGHSLIDE_NEXTTEXT'			=> 'Suivant',
	'ABBC3_HIGHSLIDE_NEXTTITLE'			=> 'Suivant (flèche droite)',
	'ABBC3_HIGHSLIDE_MOVETITLE'			=> 'Déplacer',
	'ABBC3_HIGHSLIDE_MOVETEXT'			=> 'Déplacer',
	'ABBC3_HIGHSLIDE_CLOSETEXT'			=> 'Fermer',
	'ABBC3_HIGHSLIDE_CLOSETITLE'		=> 'Fermer (esc)',
	'ABBC3_HIGHSLIDE_RESIZETITLE'		=> 'Redimensionner',
	'ABBC3_HIGHSLIDE_PLAYTEXT'			=> 'Jouer',
	'ABBC3_HIGHSLIDE_PLAYTITLE'			=> 'Jouer slideshow (barre espace)',
	'ABBC3_HIGHSLIDE_PAUSETEXT'			=> 'Pause',
	'ABBC3_HIGHSLIDE_PAUSETITLE'		=> 'Pause slideshow (barre espace)',
	'ABBC3_HIGHSLIDE_NUMBER'			=> 'Image %1 sur %2',
	'ABBC3_HIGHSLIDE_RESTORETITLE'		=> 'Cliquer pour fermer l’image, cliquer et trainer pour déplacer. Utiliser les flèches pour suivant et précédent.',

// Text to be applied to the helpline & mouseover & help page & Wizard texts
	'BBCODE_STYLES_TIP'			=> 'Astuce : Les mises en forme peuvent être rapidement appliqués au texte sélectionné.',
	
	'ABBC3_ERROR'				=> 'Erreur : ',
	'ABBC3_ERROR_TAG'			=> 'Erreur inattendue en utilisant le tag : ',
	'ABBC3_NO_EXAMPLE'         	=> 'Aucun exemple',

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

	'ABBC3_NOTE'				=> 'Note',
	'ABBC3_EXAMPLE'				=> 'Exemple',
	'ABBC3_EXAMPLES'			=> 'Exemples',
	'ABBC3_UNAUTHORISED'		=> 'Vous ne pouvez pas utiliser certains mots : <br /><strong> %s </strong>',
	'SAMPLE_TEXT'				=> 'Voici un exemple de texte simple' //	' . $lang['SAMPLE_TEXT'] . '
));

//
// TRANSLATORS PLEASE NOTE 
// Several lines have an special note like "##	For translate : " follow for one or more "yes" 
// These means that you can/have to translate the word under
//

$lang = array_merge($lang, array(
// bbcodes texts	
	// Font Type Dropdown
	'ABBC3_FONT_MOVER'			=> 'Police',
	'ABBC3_FONT_TIP'			=> '[font=Comic Sans MS]Texte[/font]',
	'ABBC3_FONT_NOTE'			=> 'Note : Vous pouvez utiliser vos propres polices',
	'ABBC3_FONT_VIEW'			=> '<span style="font-family:Comic Sans MS">' . $lang['SAMPLE_TEXT'] . '</span>',

	// Font family Groups
	'ABBC3_FONT_ABBC3'			=> 'ABBC Box 3',
	'ABBC3_FONT_SAFE'			=> 'Liste libre',
	'ABBC3_FONT_WIN'			=> 'Windows par défaut',

	// Font Size Dropdown
	'ABBC3_FONT_GIANT'			=> 'Géant',
	'ABBC3_SIZE_MOVER'			=> 'Taille',
	'ABBC3_SIZE_TIP'			=> '[size=150]Texte large[/size]',
	'ABBC3_SIZE_NOTE'			=> 'Note : La valeur sera interprétée comme un pourcentage',
	'ABBC3_SIZE_VIEW'			=> '<span style="font-size: 150%; line-height: 116%;">' . $lang['SAMPLE_TEXT'] . '</span>',

	// Highlight Font Color Dropdown
	'ABBC3_HIGHLIGHT_MOVER'		=> 'Texte surligné',
	'ABBC3_HIGHLIGHT_TIP'		=> '[highlight=yellow]Texte[/highlight]',
	'ABBC3_HIGHLIGHT_NOTE'		=> 'Note : Vous pouvez utiliser le HTML (color=#FF0000 ou color=red)',
	'ABBC3_HIGHLIGHT_VIEW'		=> '<span style="background-color: yellow;">' . $lang['SAMPLE_TEXT'] . '</span>',

	// Font Color Dropdown
	'ABBC3_COLOR_MOVER'			=> 'Couleur de la police',
	'ABBC3_COLOR_TIP'			=> '[color=red]Texte[/color]',
	'ABBC3_COLOR_NOTE'			=> 'Note : Vous pouvez utiliser le HTML (color=#FF0000 ou color=red)',
	'ABBC3_COLOR_VIEW'			=> '<span style="color:red">' . $lang['SAMPLE_TEXT'] . '</span>',

	// Cut selected text
	'ABBC3_CUT_MOVER'			=> 'Supprimez le texte sélectionné',
	// Copy selected text
	'ABBC3_COPY_MOVER'			=> 'Copiez le texte sélectionné',
	// Paste previously copy text
	'ABBC3_PASTE_MOVER'			=> 'Collez le texte sélectionné',
	'ABBC3_PASTE_ERROR'			=> 'Veuillez d’abord copier le texte, puis le coller',
	// Remove BBCode (Removes all BBCode tags from selected text)
	'ABBC3_PLAIN_MOVER'			=> 'Supprimez les balises bbcodes du texte sélectionné',
	'ABBC3_NOSELECT_ERROR'		=> 'Veuillez d’abord sélectionner le texte',

	// Code
	'ABBC3_CODE_MOVER'			=> 'Code',
	'ABBC3_CODE_TIP'			=> '[code]Texte[/code]',
	'ABBC3_CODE_VIEW'			=> '<dl class="codebox"><dt>'. $lang['CODE'] .': <a href="#" onclick="selectCode(this); return false;">'. $lang['SELECT_ALL_CODE'] .'</a></dt><dd><code>' . $lang['SAMPLE_TEXT'] . '</code></dd></dl>',

	// Quote
	'ABBC3_QUOTE_MOVER'			=> 'Citer',
	'ABBC3_QUOTE_TIP'			=> '[quote]Texte[/quote] ou [quote=\"member\"]Texte[/quote]',
##	For translate :                                        yes
	'ABBC3_QUOTE_VIEW'			=> '<blockquote><div><cite> membre '. $lang['WROTE'] .':</cite>' . $lang['SAMPLE_TEXT'] . '</div></blockquote>',

	// html
//	'ABBC3_HTML_MOVER'		=> 'Code HTML',
//	'ABBC3_HTML_TIP'			=> '[html]Code xhtml[/html]',
//	'ABBC3_HTML_EXAMPLE'		=> '[html]&lt;a href=\"http://www.mssti.com/phpbb3\"&gt;link to mssti&lt;/a&gt;[/html]',
//	'ABBC3_HTML_VIEW'			=> '<a href="http://www.mssti.com/phpbb3">Lien vers mssti</a>',

	// Spoiler
	'ABBC3_SPOIL_MOVER'			=> 'Spoiler',
	'ABBC3_SPOIL_TIP'			=> '[spoil]Texte[/spoil]',
##	For translate :                                                                                                                               yes                                                      yes               yes
	'ABBC3_SPOIL_VIEW'			=> '<div class="spoilwrapper"><div class="spoiltitle"><input id="1" class="btnspoil button2" type="button" value="Montrer Spoiler" onClick="javascript:abbc3_spoiler( 2, 2, \'Cacher Spoiler\', \'Montrer Spoiler\' )"></div><div class="spoilcontent"><div id="2" style="display: none;">' . $lang['SAMPLE_TEXT'] . '</div></div></div>',
	'SPOILER_SHOW'				=> 'Montrer Spoiler',
	'SPOILER_HIDE'				=> 'Cacher Spoiler',

	// Moderator tag
	'ABBC3_MOD_MOVER'			=> 'Message Modérateur',
	'ABBC3_MOD_TIP'				=> '[mod=name]Texte[/mod]',
##	For translate :                                                                                                                                                                               yes
	'ABBC3_MOD_VIEW'			=> '<table class="ModTable" width="100%" cellspacing="5" cellpadding="0" border="0"><tr><td class="exclamation" rowspan="2">&nbsp;!&nbsp;</td><td class="rowuser">Nom du modérateur '. $lang['WROTE'] .':</td></tr><tr><td class="rowtext">' . $lang['SAMPLE_TEXT'] . '</td></tr></table>',

	// Off topic tag
	'OFFTOPIC'					=> 'Hors-sujet',
	'ABBC3_OFFTOPIC_MOVER'		=> 'Insert Off topic text',
	'ABBC3_OFFTOPIC_TIP'		=> '[offtopic]text[/offtopic]',
##	For translate :                                                                yes
	'ABBC3_OFFTOPIC_VIEW'		=> '<dl class="OffTopic"><dt class="OffTopicTitle">Hors-sujet : </dt><dd class="OffTopicText">' . $lang['SAMPLE_TEXT'] . '</dd></dl>',

	// NFO
	'ABBC3_NFO_MOVER'			=> 'Texte NFO (Meilleur avec Internet Explorer)',
	'ABBC3_NFO_TIP'				=> '[nfo]Texte NFO[/nfo]',
	'ABBC3_NFO_VIEW'			=> '<table cellspacing="0" cellpadding="0" border="0" ><tr><td><span class="genmed"><b>NFO :</b></span></td></tr><tr><td class="nfo">' . str_replace(" ", "&nbsp;", '    � ���� �۱��                                  ���������������������  �   �� ���') . '</td></tr></table>',

	// Justify Align
	'ABBC3_ALIGNJUSTIFY_MOVER'	=> 'Texte justifié',
	'ABBC3_ALIGNJUSTIFY_TIP'	=> '[align=justify]Texte[/align]',
##	For translate :                                                 yes          yes
	'ABBC3_ALIGNJUSTIFY_VIEW'	=> '<div style="text-align:justify">Voici un <br/>exemple de texte simple</div>',

	// Right Align
	'ABBC3_ALIGNRIGHT_MOVER'	=> 'Texte aligné sur la droite',
	'ABBC3_ALIGNRIGHT_TIP'		=> '[align=right]Texte[/align]',
	'ABBC3_ALIGNRIGHT_VIEW'		=> '<div style="text-align:right">' . $lang['SAMPLE_TEXT'] . '</div>',

	// Center Align
	'ABBC3_ALIGNCENTER_MOVER'	=> 'Texte centré',
	'ABBC3_ALIGNCENTER_TIP'		=> '[align=center]Texte[/align]',
	'ABBC3_ALIGNCENTER_VIEW'	=> '<div style="text-align:center">' . $lang['SAMPLE_TEXT'] . '</div>',

	// Left Align
	'ABBC3_ALIGNLEFT_MOVER'		=> 'Texte aligné sur la gauche',
	'ABBC3_ALIGNLEFT_TIP'		=> '[align=left]Texte[/align]',
	'ABBC3_ALIGNLEFT_VIEW'		=> '<div style="text-left:justify">' . $lang['SAMPLE_TEXT'] . '</div>',

	// Preformat
	'ABBC3_PRE_MOVER'			=> 'Texte préformaté',
	'ABBC3_PRE_TIP'				=> '[pre]Texte[/pre]',
	'ABBC3_PRE_VIEW'			=> '<pre>' . $lang['SAMPLE_TEXT'] . '</pre>',

	// Tab
	'ABBC3_TAB_MOVER'			=> 'Créez un espace normal',
	'ABBC3_TAB_TIP'				=> '[tab=nn]',
	'ABBC3_TAB_NOTE'			=> 'Entrez un nombre qui sera une marge mesurée en pixels.',
	'ABBC3_TAB_VIEW'			=> '<span style="margin-left:20px;"></span>' . $lang['SAMPLE_TEXT'] . '',

	// Superscript
	'ABBC3_SUP_MOVER'			=> 'Texte en exposant',
	'ABBC3_SUP_TIP'				=> '[sup]Texte[/sup]',
##	For translate :                 yes                                                                 yes
	'ABBC3_SUP_VIEW'			=> 'Voici un exemple de texte <sup>' . $lang['SAMPLE_TEXT'] . '</sup> Voici un exemple de texte',

	// Subscript
	'ABBC3_SUB_MOVER'			=> 'Texte en indice',
	'ABBC3_SUB_TIP'				=> '[sub]Texte[/sub]',
##	For translate :                 yes                                                                 yes
	'ABBC3_SUB_VIEW'			=> 'Voici un exemple de texte <sub>' . $lang['SAMPLE_TEXT'] . '</sub> Voici un exemple de texte',

	// Bold
	'ABBC3_B_MOVER'				=> 'Texte en gras',
	'ABBC3_B_TIP'				=> '[b]Texte[/b]',
	'ABBC3_B_VIEW'				=> '<strong>' . $lang['SAMPLE_TEXT'] . '</strong>',

	// Italic
	'ABBC3_I_MOVER'				=> 'Texte en italique',
	'ABBC3_I_TIP'				=> '[i]Texte[/i]',
	'ABBC3_I_VIEW'				=> '<em>' . $lang['SAMPLE_TEXT'] . '</em>',

	// Underline
	'ABBC3_U_MOVER'				=> 'Texte souligné',
	'ABBC3_U_TIP'				=> '[u]Texte[/u]',
	'ABBC3_U_VIEW'				=> '<span style="text-decoration: underline">' . $lang['SAMPLE_TEXT'] . '</span>',

	// Strikethrough
	'ABBC3_S_MOVER'				=> 'Texte barré',
	'ABBC3_S_TIP'				=> '[s]Texte[/s]',
	'ABBC3_S_VIEW'				=> '<span style="text-decoration: line-through;">' . $lang['SAMPLE_TEXT'] . '</span>',

	// Text Fade
	'ABBC3_FADE_MOVER'			=> 'Texte en fondu',
	'ABBC3_FADE_TIP'			=> '[fade]Texte[/fade]',
	'ABBC3_FADE_VIEW'			=> '<span class="fade_link">' . $lang['SAMPLE_TEXT'] . '</span> <script type="text/javascript">fade_ontimer()</script>',

	// Text Gradient
	'ABBC3_GRAD_MOVER'			=> 'Texte en arc en ciel',
	'ABBC3_GRAD_TIP'			=> '',
##For translate (The separate words are "This is a sample text") yes                                  yes                                  yes                                  yes                                   yes                                  yes                                   yes                                   yes                                  yes                                  yes                                  yes                                  yes                                  yes                                   yes                                  yes                                  yes                                  yes
	'ABBC3_GRAD_VIEW'			=> '<span style="color: #FF0000">V</span><span style="color: #F2000D">o</span><span style="color: #E6001A">i</span><span style="color: #D90026">c</span> <span style="color: #BF0040">u</span><span style="color: #B3004D">n</span> <span style="color: #990066">e</span> <span style="color: #800080">x</span><span style="color: #73008C">e</span><span style="color: #660099">m</span><span style="color: #5900A6">p</span><span style="color: #4D00B3">l</span><span style="color: #4000BF">e</span>',
	'ABBC3_GRAD_MIN_ERROR'		=> 'Veuillez d’abord sélectionner le texte : ',
	'ABBC3_GRAD_MAX_ERROR'		=> 'Seulement 120 caractères maximum autorisés : ',
	'ABBC3_GRAD_COLORS'			=> 'Couleurs pré-sélectionnées',

	// Glow text
	'ABBC3_GLOW_MOVER'			=> 'Texte avec Glow (Seulement avec Internet Explorer)',
	'ABBC3_GLOW_TIP'			=> '[glow=(color)]Texte[/glow]',
	'ABBC3_GLOW_VIEW'			=> '<div style="filter:Glow(color=red,strength=4);color:#ffffff;height:110%">' . $lang['SAMPLE_TEXT'] . '</div>',

	// Shadow text
	'ABBC3_SHADOW_MOVER'		=> 'Texte avec Shadow (Seulement avec Internet Explorer)',
	'ABBC3_SHADOW_TIP'			=> '[shadow=(color)]Texte[/shadow]',
	'ABBC3_SHADOW_VIEW'			=> '<div style="filter:shadow(color=black,strength=4);color:blue;height:110%">' . $lang['SAMPLE_TEXT'] . '</div>',

	// Dropshadow text
	'ABBC3_DROPSHADOW_MOVER'	=> 'Texte avec Dropshadow (Seulement avec Internet Explorer)',
	'ABBC3_DROPSHADOW_TIP'		=> '[dropshadow=(color)]Texte[/dropshadow]',
	'ABBC3_DROPSHADOW_VIEW'		=> '<div style="filter:dropshadow(color=#999999,strength=4);color:blue;height:110%">' . $lang['SAMPLE_TEXT'] . '</div>',

	// Blur text
	'ABBC3_BLUR_MOVER'			=> 'Texte avec Blur (Seulement avec Internet Explorer)',
	'ABBC3_BLUR_TIP'			=> '[blur=(color)]Texte[/blur]',
	'ABBC3_BLUR_VIEW'			=> '<div style="filter:Blur(strength=7);color:blue;height:110%">' . $lang['SAMPLE_TEXT'] . '</div>',

	// Wave text
	'ABBC3_WAVE_MOVER'			=> 'Texte en vague (Seulement avec Internet Explorer)',
	'ABBC3_WAVE_TIP'			=> '[wave=(color)]Texte[/wave]',
	'ABBC3_WAVE_VIEW'			=> '<div style="filter:Wave(strength=2);color:blue;height:110%">' . $lang['SAMPLE_TEXT'] . '</div>',

	// Unordered List
	'ABBC3_LISTB_MOVER'			=> 'Liste à puces',
	'ABBC3_LISTB_TIP'			=> '[list]Texte[/list]',
	'ABBC3_LISTB_NOTE'			=> 'Note : Utilisez [*] pour créer les puces',
##	For translate :                         yes           yes           yes                   yes              yes              yes                yes
	'ABBC3_LISTB_VIEW'			=> '<ul><li>Article1</li><li>Article2</li><li>Article3</li></ul><br /> ou <br /><ul><li>Articlet disque<ul><li>Article cercle<ul><li>Article carré</li></ul></li></ul></li></ul><br />',

	// Ordered List
	'ABBC3_LISTO_MOVER'			=> 'Liste ordonnée',
	'ABBC3_LISTO_TIP'			=> '[list=1|a]Texte[/list]',
	'ABBC3_LISTO_NOTE'			=> 'Note: Utilisez [*] pour créer les puces',
##	For translate :                                                                  yes          yes           yes             yes                                                   yes           yes           yes             yes                                                   yes            yes            yes              yes                                                   yes            yes             yes                yes                                                   yes            yes             yes
	'ABBC3_LISTO_VIEW'			=> '<ol style="list-style-type: arabic-numbers"><li>Article1</li><li>Article2</li><li>Article3</li></ol> ou <br /><ol style="list-style-type: lower-alpha"><li>Article1</li><li>Article2</li><li>Article3</li></ol> ou <br /><ol style="list-style-type: upper-alpha"><li>Article A</li><li>Article B</li><li>Article C</li></ol> ou <br /><ol style="list-style-type: lower-roman"><li>Article i</li><li>Article ii</li><li>Article iii</li></ol> ou <br /><ol style="list-style-type: upper-roman"><li>Article I</li><li>Article II</li><li>Article III</li></ol>',

	// List item
	'ABBC3_LISTITEM_MOVER'		=> 'Article en liste',
	'ABBC3_LISTITEM_TIP'		=> '[*]',
	'ABBC3_LISTITEM_NOTE'		=> 'Note : Créez des puces dans la liste',

	// Line Break
	'ABBC3_HR_MOVER'			=> 'Ligne de séparation',
	'ABBC3_HR_TIP'				=> '[hr]',
	'ABBC3_HR_NOTE'				=> 'Note: Crééz une ligne pour séparer du texte',
	'ABBC3_HR_VIEW'				=> '<hr noshade color="#000000" size="1px">',

	// Message Box text direction Left to right
	'ABBC3_DIRLTR_MOVER'		=> 'Texte se lisant de gauche à droite',
	'ABBC3_DIRLTR_TIP'			=> '[dir=ltr]Texte[/dir]',
	'ABBC3_DIRLTR_VIEW'			=> '<BDO dir="ltr">' . $lang['SAMPLE_TEXT'] . '</BDO>',

	// Message Box text direction right to Left
	'ABBC3_DIRRTL_MOVER'		=> 'Texte se lisant de droite à gauche',
	'ABBC3_DIRRTL_TIP'			=> '[dir=rtl]Texte[/dir]',
	'ABBC3_DIRRTL_VIEW'			=> '<BDO dir="rtl">' . $lang['SAMPLE_TEXT'] . '</BDO>',

	// Marquee Down
	'ABBC3_MARQDOWN_MOVER'		=> 'Texte se déplaçant vers le bas',
	'ABBC3_MARQDOWN_TIP'		=> '[marq=down]Texte[/marq]',
	'ABBC3_MARQDOWN_VIEW'		=> '<marquee direction="down" scrolldelay="120" height="80px">' . $lang['SAMPLE_TEXT'] . '</marquee>',

	// Marquee Up
	'ABBC3_MARQUP_MOVER'		=> 'Texte se déplaçant vers le haut',
	'ABBC3_MARQUP_TIP'			=> '[marq=up]Texte[/marq]',
	'ABBC3_MARQUP_VIEW'			=> '<marquee direction="up" scrolldelay="120" height="80px">' . $lang['SAMPLE_TEXT'] . '</marquee>',

	// Marquee Right
	'ABBC3_MARQRIGHT_MOVER'		=> 'Texte se déplaçant vers la droite',
	'ABBC3_MARQRIGHT_TIP'		=> '[marq=right]Texte[/marq]',
	'ABBC3_MARQRIGHT_VIEW'		=> '<marquee direction="right" scrolldelay="120">' . $lang['SAMPLE_TEXT'] . '</marquee>',

	// Marquee Left
	'ABBC3_MARQLEFT_MOVER'		=> 'Texte se déplaçant vers la gauche',
	'ABBC3_MARQLEFT_TIP'		=> '[marq=left]Texte[/marq]',
	'ABBC3_MARQLEFT_VIEW'		=> '<marquee direction="left" scrolldelay="120">' . $lang['SAMPLE_TEXT'] . '</marquee>',

	// Table row cell wizard
	'ABBC3_TABLE_MOVER'			=> 'Insérer un tableau',
	'ABBC3_TABLE_TIP'			=> '[table=(ccs style)][tr=(ccs style)][td=(ccs style)]text[/td][/tr][/table]',
	'ABBC3_TABLE_VIEW'			=> '<table style="width:50%;border:1px solid #cccccc;" cellspacing="0" cellpadding="0"><tr style="text-align:center;"><td style="border:1px solid #cccccc;">' . $lang['SAMPLE_TEXT'] . '</td></tr></table>',

	'ABBC3_TABLE_STYLE'			=> 'Entrez les paramètres du tableau',
	'ABBC3_TABLE_EXAMPLE'		=> 'width:50%;border:1px solid #cccccc;',

	'ABBC3_ROW_NUMBER'			=> 'Entrez le nombre de lignes',
	'ABBC3_ROW_ERROR'			=> 'Vous n’avez pas spécifié le nombre de lignes',
	'ABBC3_ROW_STYLE'			=> 'Entrez les paramètres des lignes',
	'ABBC3_ROW_EXAMPLE'			=> 'text-align:center;',

	'ABBC3_CELL_NUMBER'			=> 'Entrez le nombre de colonnes',
	'ABBC3_CELL_ERROR'			=> 'Vous n’avez pas spécifié le nombre de colonnes',
	'ABBC3_CELL_STYLE'			=> 'Entrez les paramètres des colonnes',
	'ABBC3_CELL_EXAMPLE'		=> 'border:1px solid #cccccc;',

	// Simple upload files
	'ABBC3_UPLOAD_TITLE'		=> 'Advanced BBCode box 3 :: Page d’upload de fichiers',
	'ABBC3_UPLOAD_MOVER'		=> 'Uploadez un fichier',
	'ABBC3_UPLOAD_LINK'			=> 'Il s’agit du lien vers votre fichier uploadé',
	'ABBC3_UPLOAD_UPLOADED'		=> 'Upload %s réussi !',
	'ABBC3_UPLOAD_NOT_UPLOADED'	=> 'Upload %s échoué',
	'ABBC3_UPLOAD_ALREADY'		=> 'L’upload existe déjà. Veuillez en choisir un autre ou renommer le fichier et essayer à nouveau',
	'ABBC3_UPLOAD_ERROR'		=> 'Le fichier n’a pu être uploadé vers %s. Code d’erreur en retour : %d',
	'ABBC3_UPLOAD_EXTENSION'	=> 'Extensions disponibles',

	'ABBC3_UPLOAD_DISABLED'		=> 'L’extension d’upload %s n’est pas autorisée',
	'ABBC3_UPLOAD_SIZE'			=> 'Taille maximale',
	'ABBC3_UPLOAD_NOSIZE'		=> 'La taille de l’upload %d est trop grosse. La taille maximale autorisée est de %d KB',
	'ABBC3_UPLOAD_EMPTY'		=> 'Le fichier d’upload est vide. Veuillez d’abord sélectionner un fichier',

	// Hyperlink Wizard
	'ABBC3_URL_TAG'				=> 'Page',
	'ABBC3_URL_MOVER'			=> 'Adresse web',	
	'ABBC3_URL_TIP'				=> '[url]http://...[/url] ou [url=http://...]Nom du site Web[/url]',
	'ABBC3_URL_EXAMPLE'			=> 'http://www.google.com',
	'ABBC3_URL_VIEW'			=> '<a href="http://www.google.com" class="postlink">Google</a>',

	// Email Wizard
	'ABBC3_EMAIL_TAG'			=> 'Email',
	'ABBC3_EMAIL_MOVER'			=> 'Email',
	'ABBC3_EMAIL_TIP'			=> '[email]user@server.ext[/email] ou [email=user@server.ext]Mon email[/email]',
	'ABBC3_EMAIL_EXAMPLE'		=> 'user@server.ext',
	'ABBC3_EMAIL_VIEW'			=> '<a href="mailto:user@server.ext">user@server.ext</a>',

	// Ed2k link Wizard
	'ABBC3_ED2K_TAG'			=> 'eD2K',
	'ABBC3_ED2K_MOVER'			=> 'Lien eD2K',
	'ABBC3_ED2K_TIP'			=> '[url]Lien eD2K[/url] ou [url=lien ed2k]Nom eD2K[/url]',
	'ABBC3_ED2K_EXAMPLE'		=> 'ed2k://|file|The_Two_Towers-The_Purist_Edit-Trailer.avi|14997504|965c013e991ee246d63d45ea71954c4d|/',
	'ABBC3_ED2K_VIEW'			=> '<a href="ed2k://|file|The_Two_Towers-The_Purist_Edit-Trailer.avi|14997504|965c013e991ee246d63d45ea71954c4d|/" class="postlink">The_Two_Towers-The_Purist_Edit-Trailer.avi</a>',
	'ABBC3_ED2K_ADD'			=> 'Ajoutez les liens sélectionnés à votre client eD2K',
	'ABBC3_ED2K_FRIEND'			=> 'Ami eD2K',
	'ABBC3_ED2K_SERVER'			=> 'Serveur eD2K',
	'ABBC3_ED2K_SERVERLIST'		=> 'Liste de serveurs eD2K',

	// Web included by iframe
	'ABBC3_WEB_TAG'				=> 'web',
	'ABBC3_WEB_MOVER'			=> 'Insérez un site dans le post',
	'ABBC3_WEB_EXAMPLE'			=> 'http://www.google.com',
	'ABBC3_WEB_VIEW'			=> '<iframe width="100%" height="100" src="http://www.google.com" style="font-size: 2px;"></iframe><br/>',

	// Image Wizard
	'ABBC3_IMG_TAG'				=> 'Image',
	'ABBC3_IMG_MOVER'			=> 'Insérez une image',
	'ABBC3_IMG_TIP'				=> '[img=(left|center|right)]http://...[/img]',
	'ABBC3_IMG_EXAMPLE'			=> 'http://www.google.com/intl/en_com/images/logo_plain.png',
	'ABBC3_IMG_VIEW'			=> '<div align="center"><img src="http://www.google.com/intl/en_com/images/logo_plain.png" alt="" /></div>',

	// Thumbnail
	'ABBC3_THUMBNAIL_TAG'		=> 'Thumbnail',
	'ABBC3_THUMBNAIL_MOVER'		=> 'Insérez une miniature',
	'ABBC3_THUMBNAIL_TIP'		=> '[thumbnail(=left|right)]http://...[/thumbnail]',
	'ABBC3_THUMBNAIL_EXAMPLE'	=> 'http://www.google.com/intl/en_com/images/logo_plain.png',
	'ABBC3_THUMBNAIL_VIEW'		=> '<img src="http://www.google.com/intl/en_com/images/logo_plain.png" alt="' . $lang['IMAGE'] . '" border="0" width="200px" class="hoverbox resize_me" />',

	// Imgshack
	'ABBC3_IMGSHACK_MOVER'		=> 'Insérez une image d’Imageshack',
	'ABBC3_IMGSHACK_TIP'		=> '[url=http://imageshack.us][img=http://...][/img][/url]',
	'ABBC3_IMGSHACK_VIEW'		=> '<a href="http://img207.imageshack.us/my.php?image=advancedbbcodebox3prosidd3.gif" class="postlink"><img src="http://img207.imageshack.us/img207/1773/advancedbbcodebox3prosidd3.th.gif" alt="Image" /></a>',

	// Rapid share checker
	'ABBC3_FOPEN_ERROR'			=> '<strong>Erreur : </strong>Il semble que <strong>l’allow_url_fopen</strong> soit désactivé. Cette fonction requiert l’activation de la directive PHP allow_url_fopen.',
	'ABBC3_RAPIDSHARE_TAG'		=> 'Rapidshare',
	'ABBC3_RAPIDSHARE_MOVER'	=> 'Insérez un fichier de Rapidshare',
	'ABBC3_RAPIDSHARE_TIP'		=> '[rapidshare]http://rapidshare.com/files/...[/rapidshare]',
	'ABBC3_RAPIDSHARE_EXAMPLE'	=> 'http://rapidshare.com/files/86587996/ABBC3_v108.zip.html',
	'ABBC3_RAPIDSHARE_VIEW'		=> '<a href="http://rapidshare.com/files/86587996/ABBC3_v108.zip.html" >http://rapidshare.com/files/86587996/ABBC3_v108.zip.html</a> <font color="green" size="4" >File not found !</font><br />',
	'ABBC3_RAPIDSHARE_GOOD'		=> 'Fichier trouvé sur le serveur !',
	'ABBC3_RAPIDSHARE_WRONG'	=> 'Fichier non trouvé sur le serveur !',

	// testlink
	'ABBC3_CURL_ERROR'			=> '<strong>Erreur : </strong>Il semble que CURL ne soit pas activé. Veuillez l’installer pour utiliser cette fonction.',	
	'ABBC3_TESTLINK_TAG'		=> 'Vérificateur de liens',
	'ABBC3_TESTLINK_MOVER'		=> 'Insérez un fichier stocké sur un serveur public',
	'ABBC3_TESTLINK_TIP'		=> '[testlink]http://rapidshare.com/files/...[/testlink]',
	'ABBC3_TESTLINK_NOTE'		=> 'Valid servers:rapidshare,megaupload,megarotic,depositfiles,megashares .',
	'ABBC3_TESTLINK_EXAMPLE'	=> 'http://rapidshare.com/files/86587996/ABBC3_v108.zip.html',
	'ABBC3_TESTLINK_VIEW'		=> '<dl class="testlink"><dd><font color="red" size="4" >X</font>&nbsp;<a href="http://rapidshare.com/files/86587996/ABBC3_v108.zip.html" >http://rapidshare.com/files/86587996/ABBC3_v108.zip.html</a><br /></dd></dl>',
	'ABBC3_TESTLINK_GOOD'		=> 'Fichier trouvé sur le serveur !',
	'ABBC3_TESTLINK_WRONG'		=> 'Fichier non trouvé !',

	// Click counter
	'ABBC3_CLICK_TAG'			=> 'Clic',
	'ABBC3_CLICK_MOVER'			=> 'Insérez un compteur de clics',
	'ABBC3_CLICK_TIP'			=> '[click]http://...[/click] ou [click=http://...]Nom du site Web[/click] ou [click][img]http://...[/img][/click]',
	'ABBC3_CLICK_EXAMPLE' 		=> 'http://www.google.com ' . ' ' . 'http://www.google.com/intl/en_com/images/logo_plain.png' ,
	'ABBC3_CLICK_VIEW'			=> '<a href="./click.php?id=1" >http://www.phpbb.com</a> ( Clicked 1 time )<br />',
	'ABBC3_CLICK_TIME'			=> '( Cliqué %d fois )',
	'ABBC3_CLICK_TIMES'			=> '( Cliqué %d fois )',
	'ABBC3_CLICK_ERROR'			=> '<strong>ERREUR :</strong> Veuillez entrer une ID valide dans l’URL',

	// Search tag
	'ABBC3_SEARCH_MOVER'		=> 'Insérez la recherche de mot',
	'ABBC3_SEARCH_TIP'			=> '[search(=(msn|yahoo|google|altavista|lycos|wikipedia))]Texte[/search]',
	'ABBC3_SEARCH_VIEW'			=> $lang['SEARCH_MINI'] . ' ' . $config['sitename'] . ' : <a href="search.php?keywords=Advanced BBcode box 3">"Advanced BBcode box 3"</a><br/><br/>' . $lang['SEARCH_MINI'] . ' msn : <a href="http://search.live.com/results.aspx?q=Advanced BBcode box 3&mkt=tr-TR&lf=1" target="_blank">"Advanced BBcode box 3"</a><br/><br/>' .$lang['SEARCH_MINI'] . ' yahoo : <a href="http://search.yahoo.com/search?p=Advanced BBcode box 3" target="_blank">"Advanced BBcode box 3"</a><br/><br/>' . $lang['SEARCH_MINI'] . ' google : <a href="http://www.google.com.tr/search?q=Advanced BBcode box 3" target="_blank">"Advanced BBcode box 3"</a>',

	// BBvideo Wizard
	'ABBC3_BBVIDEO_TAG'			=> 'BBvidéo',
	'ABBC3_BBVIDEO_MOVER'		=> 'Insérez une vidéo du web',
	'ABBC3_BBVIDEO_TIP'			=> '[BBvideo]URL vidéo[/BBvideo]',
	'ABBC3_BBVIDEO_EXAMPLE'		=> 'http://www.youtube.com/watch?v=TA4hm97m494',
	'ABBC3_BBVIDEO_VIEW'		=> '<object width="200" height="100"><param name="movie" value="http://www.youtube.com/v/TA4hm97m494" /><param name="wmode" value="transparent" /><embed src="http://www.youtube.com/v/TA4hm97m494" type="application/x-shockwave-flash" wmode="transparent" width="200" height="100"></embed></object>',
	'ABBC3_BBVIDEO_FILE'		=> 'Format vidéo',
	'ABBC3_BBVIDEO_VIDEO'		=> 'Vidéo en provenance de',

	// Flash (swf) Wizard
	'ABBC3_FLASH_TAG'			=> 'Flash',
	'ABBC3_FLASH_MOVER'			=> 'Insérez une fichier flash (swf)',
	'ABBC3_FLASH_TIP'			=> '[flash width=# height=#]URL flash[/flash] or [flash width,height]URL flash[/flash]',
	'ABBC3_FLASH_EXAMPLE'		=> 'http://www.adobe.com/support/flash/ts/documents/test_version/version.swf',
	'ABBC3_FLASH_VIEW'			=> '<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0" width="200" height="100"><param name="movie" value="http://www.adobe.com/support/flash/ts/documents/test_version/version.swf" /><param name="play" value="true" /><param name="loop" value="true" /><param name="quality" value="high" /><param name="allowScriptAccess" value="never" /><param name="allowNetworking" value="internal" /><embed src="http://www.adobe.com/support/flash/ts/documents/test_version/version.swf" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" width="200" height="100" play="true" loop="true" quality="high" allowscriptaccess="never" allownetworking="internal"></embed></object>',

	// Flash (flv) Wizard
	'ABBC3_FLV_TAG'				=> 'Flash',
	'ABBC3_FLV_MOVER'			=> 'Insérez une vidéo flash (flv)',
	'ABBC3_FLV_TIP'				=> '[flv width=# height=#]URL flash video[/flv] or [flv width,height]URL flash video[/flv]',
	'ABBC3_FLV_EXAMPLE' 		=> 'http://www.channel-ai.com/video/eyn/demo1.flv',
	'ABBC3_FLV_VIEW'			=> '<embed src="../images/flvplayer.swf" width="200" height="100" bgcolor="#FFFFFF" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="file=../files/demo1.flv&autostart=false" />',

	// Streaming Video Wizard
	'ABBC3_VIDEO_TAG'			=> 'Vidéo',
	'ABBC3_VIDEO_MOVER'			=> 'Insérez une vidéo',
	'ABBC3_VIDEO_TIP'			=> '[video width=# height=#]URL video[/video]',
	'ABBC3_VIDEO_EXAMPLE'		=> 'http://www.sarahsnotecards.com/catalunyalive/fishstore.wmv',
	'ABBC3_VIDEO_VIEW'			=> '<object classid="CLSID:6BF52A52-394A-11d3-B153-00C04F79FAA6" id="player"  width="200" height="100"><param name="url" value="http://www.sarahsnotecards.com/catalunyalive/fishstore.wmv" /><param name="src" value="http://www.sarahsnotecards.com/catalunyalive/fishstore.wmv" /><param name="showcontrols" value="true" /><param name="autostart" value="false" /><!--[if !IE]>--><object type="video/x-ms-wmv" data="http://www.sarahsnotecards.com/catalunyalive/fishstore.wmv" width="200" height="100" ><param name="src" value="http://www.sarahsnotecards.com/catalunyalive/fishstore.wmv" /><param name="autostart" value="false" /><param name="controller" value="true" /></object><!--<![endif]--></object>',

	// Streaming Audio Wizard
	'ABBC3_STREAM_TAG'			=> 'Son',
	'ABBC3_STREAM_MOVER'		=> 'Insérez un son',
	'ABBC3_STREAM_TIP'			=> '[stream]URL stream[/stream]',
	'ABBC3_STREAM_EXAMPLE'		=> 'http://realdev1.realise.com/rossa/mov/demo.mp3',
	'ABBC3_STREAM_VIEW'			=> '<object width="200" height="45" classid="CLSID:6BF52A52-394A-11d3-B153-00C04F79FAA6" id="wmstream_"><param name="url" value="http://realdev1.realise.com/rossa/mov/demo.mp3" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /><param name="src" value="http://realdev1.realise.com/rossa/mov/demo.mp3" /><!--[if !IE]>--><object width="200" height="45" type="video/x-ms-wmv" data="http://realdev1.realise.com/rossa/mov/demo.mp3"><param name="src" value="http://realdev1.realise.com/rossa/mov/demo.mp3" /><param name="controller" value="1" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /></object><!--<![endif]--></object>',

	// Quick time
	'ABBC3_QUICKTIME_TAG'		=> 'QuickTime',
	'ABBC3_QUICKTIME_MOVER'		=> 'Insérez fichier QuickTime',
	'ABBC3_QUICKTIME_TIP'		=> '[quicktime width=# height=#]URL fichier QuickTime[/quicktime]',
	'ABBC3_QUICKTIME_EXAMPLE'	=> 'http://www.nature.com/neuro/journal/v3/n3/extref/Li_control.mov.qt' . ' ' . 'http://www.carnivalmidways.com/images/Music/thisisatest.mp3',
	'ABBC3_QUICKTIME_VIEW'		=> '<object id="qtstream_" classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab#version=6,0,2,0" width="200" height="100"><param name="src" value="http://www.nature.com/neuro/journal/v3/n3/extref/Li_control.mov.qt" /><param name="controller" value="true" /><param name="autoplay" value="false" /><param name="type" value="video/quicktime" /><embed name="qtstream_" src="http://www.nature.com/neuro/journal/v3/n3/extref/Li_control.mov.qt" pluginspage="http://www.apple.com/quicktime/download/" enablejavascript="true" controller="true" width="200" height="100" type="video/quicktime" autoplay="false"></embed></object>',

	// Real Media Wizard
	'ABBC3_RAM_TAG'				=> 'Real Media',
	'ABBC3_RAM_MOVER'			=> 'Insérez fichier Real Media',
	'ABBC3_RAM_TIP'				=> '[ram]URL Real Media[/ram]',
	'ABBC3_RAM_EXAMPLE'			=> 'http://www.bbc.co.uk/scotland/radioscotland/media/radioscotland.ram',
	'ABBC3_RAM_VIEW'			=> '<object id="rmstream_" classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" width="200" height="100"><param name="src" value="http://www.bbc.co.uk/scotland/radioscotland/media/radioscotland.ram" /><param name="autostart" value="false" /><param name="controls" value="ImageWindow" /><param name="console" value="ctrls_" /><param name="prefetch" value="false" /><embed name="rmstream_" type="audio/x-pn-realaudio-plugin" src="http://www.bbc.co.uk/scotland/radioscotland/media/radioscotland.ram" width="200" height="100" autostart="false" controls="ImageWindow" console="ctrls_" prefetch="false"></embed></object><br /><object id="ctrls_" classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" width="200" height="36"><param name="controls" value="ControlPanel" /><param name="console" value="ctrls_" /><embed name="ctrls_" type="audio/x-pn-realaudio-plugin" width="200" height="36" controls="ControlPanel" console="ctrls_"></embed></object>',

//	// Stage6 video Wizard
//	'ABBC3_STAGE6_TAG'			=> 'Stage6 Video',
//	'ABBC3_STAGE6_MOVER'		=> 'Insérez vidéo de Stage6', // from http://www.stage6.com/
//	'ABBC3_STAGE6_TIP'			=> '[stage6]ID Stage6[/stage6]',
//	'ABBC3_STAGE6_EXAMPLE'		=> '2068715',
//	'ABBC3_STAGE6_VIEW'			=> '<object  classid="clsid:67DABFBF-D0AB-41fa-9C46-CC0F21721616" codebase="http://download.divx.com/player/DivXBrowserPlugin.cab" width="200" height="100" ><param name="src" value="http://video.stage6.com/2068715/.divx" /><param name="autoplay" value="false" /><param name="custommode" value="Stage6" /><param name="showpostplaybackad" value="false" /><embed type="video/divx" src="http://video.stage6.com/2068715/.divx" pluginspage="http://go.divx.com/plugin/download/" showpostplaybackad="false" custommode="Stage6" autoplay="false" width="200" height="100" /></object><br />',

	// Google video Wizard
	'ABBC3_GVIDEO_TAG'			=> 'Vidéo Google',
	'ABBC3_GVIDEO_MOVER'		=> 'Insérez vidéo de Google',
	'ABBC3_GVIDEO_TIP'			=> '[GVideo]URL vidéo[/GVideo]',
	'ABBC3_GVIDEO_EXAMPLE'		=> 'http://video.google.com/videoplay?docid=-8351924403384451128',
	'ABBC3_GVIDEO_VIEW'			=> '<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0" width="200" height="100"><param name="movie" value="http://video.google.com/googleplayer.swf?docid=-8351924403384451128" /><param name="play" value="false" /><param name="loop" value="false" /><param name="quality" value="high" /><param name="allowScriptAccess" value="never" /><param name="allowNetworking" value="internal" /><embed src="http://video.google.com/googleplayer.swf?docid=-8351924403384451128" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" width="200" height="100" play="false" loop="false" quality="high" allowscriptaccess="never" allownetworking="internal"></embed></object>',

	// Youtube video Wizard
	'ABBC3_YOUTUBE_TAG'			=> 'Vidéo Youtube',
	'ABBC3_YOUTUBE_MOVER'		=> 'Insérez vidéo de Youtube',
	'ABBC3_YOUTUBE_TIP'			=> '[youtube]URL vidéo[/youtube]',
	'ABBC3_YOUTUBE_EXAMPLE'		=> 'http://www.youtube.com/watch?v=TA4hm97m494',
	'ABBC3_YOUTUBE_VIEW'		=> '<object width="200" height="100"><param name="movie" value="http://www.youtube.com/v/TA4hm97m494" /><param name="wmode" value="transparent" /><embed src="http://www.youtube.com/v/TA4hm97m494" type="application/x-shockwave-flash" wmode="transparent" width="200" height="100"></embed></object>',

	// Veoh video
	'ABBC3_VEOH_TAG'			=> 'Veoh',
	'ABBC3_VEOH_MOVER'			=> 'Insérez vidéo de Veoh',
	'ABBC3_VEOH_TIP'			=> '[veoh]URL vidéo[/veoh]',
	'ABBC3_VEOH_EXAMPLE'		=> 'http://www.veoh.com/videos/v1409404EqT5SJjM',
	'ABBC3_VEOH_VIEW'			=> '<embed src="http://www.veoh.com/videodetails2.swf?permalinkId=v1409404EqT5SJjM&id=anonymous&player=videodetailsembedded&videoAutoPlay=0" allowFullScreen="true" width="200" height="100" bgcolor="#000000" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>',

	// Collegehumor video
	'ABBC3_COLLEGEHUMOR_TAG'	=> 'Collegehumor',
	'ABBC3_COLLEGEHUMOR_MOVER'	=> 'Insérez vidéo de Collegehumor',
	'ABBC3_COLLEGEHUMOR_TIP'	=> '[collegehumor]URL vidéo[/collegehumor]',
	'ABBC3_COLLEGEHUMOR_EXAMPLE'=> 'http://www.collegehumor.com/video:1802097',
	'ABBC3_COLLEGEHUMOR_VIEW'	=> '<object type="application/x-shockwave-flash" data="http://www.collegehumor.com/moogaloop/moogaloop.swf?clip_id=1802097&fullscreen=1" width="200" height="100" ><param name="allowfullscreen" value="true" /><param name="movie" quality="best" value="http://www.collegehumor.com/moogaloop/moogaloop.swf?clip_id=1802097&fullscreen=1" /></object>',

	// Dailymotion video
	'ABBC3_DM_MOVER'			=> 'Insérez vidéo de Dailymotion', // from http://www.dailymotion.com/
	'ABBC3_DM_TIP'				=> '[dm]URL vidéo[/dm]',
	'ABBC3_DM_EXAMPLE'			=> 'http://www.dailymotion.com/swf/x3hm7o',
	'ABBC3_DM_VIEW'				=> '<object width="200" height="100"><param name="movie" value="http://www.dailymotion.com/swf/x3hm7o" /><param name="allowFullScreen" value="true" /><param name="allowScriptAccess" value="never" /><embed src="http://www.dailymotion.com/swf/x3hm7o" type="application/x-shockwave-flash" width="200" height="100" allowFullScreen="true" allowScriptAccess="never"></embed></object>',

	// Gamespot video
	'ABBC3_GAMESPOT_MOVER'		=> 'Insérez vidéo de Gamespot',
	'ABBC3_GAMESPOT_TIP'		=> '[gamespot]URL vidéo[gamespot]',
	'ABBC3_GAMESPOT_EXAMPLE'	=> 'http://www.gamespot.com/video/944074/6185798/tom-clancys-rainbow-six-vegas-2-official-trailer-3',
	'ABBC3_GAMESPOT_VIEW'		=> '<embed id="mymovie" width="200" height="100" flashvars="paramsURI=http%3A%2F%2Fwww%2Egamespot%2Ecom%2Fpages%2Fvideo%5Fplayer%2Fproteus%5Fxml%2Ephp%3Fadseg%3D%26adgrp%3D%26sid%3D6185798%26pid%3D944074%26mb%3D%26onid%3D%26nc%3D1202626246593%26embedded%3D1%26showWatermark%3D0%26autoPlay%3D0" allowfullscreen="true" allowscriptaccess="never" quality="high" name="mymovie" src="http://image.com.com/gamespot/images/cne_flash/production/media_player/proteus/gs/proteus_embed.swf" type="application/x-shockwave-flash"/>',

	// Gametrailers video
	'ABBC3_GAMETRAILERS_MOVER'	=> 'Insérez vidéo de Gametrailers',
	'ABBC3_GAMETRAILERS_TIP'	=> '[gametrailers]URL vidéo[/gametrailers]',
	'ABBC3_GAMETRAILERS_EXAMPLE'=> 'http://www.gametrailers.com/player/30461.html',
	'ABBC3_GAMETRAILERS_VIEW'	=> '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"  codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" id="gtembed" width="200" height="100"><param name="allowScriptAccess" value="never" /><param name="allowFullScreen" value="true" /><param name="movie" value="http://www.gametrailers.com/remote_wrap.php?mid=30461" /><param name="quality" value="high" /><embed src="http://www.gametrailers.com/remote_wrap.php?mid=30461" swLiveConnect="true" name="gtembed" align="middle" allowScriptAccess="never" allowFullScreen="true" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="200" height="100"></embed></object>',

	// IGN video
	'ABBC3_IGNVIDEO_MOVER'		=> 'Insérez vidéo d’Ign',
	'ABBC3_IGNVIDEO_TIP'		=> '[ignvideo]URL vidéo[/ignvideo]',
	'ABBC3_IGNVIDEO_EXAMPLE'	=> 'object_ID=967025&downloadURL=http://tvmovies.ign.com/tv/video/article/850/850894/knightrider_trailer_020808_flvlow.flv',
	'ABBC3_IGNVIDEO_VIEW'		=> '<embed src="http://videomedia.ign.com/ev/ev.swf" flashvars="object_ID=967025&downloadURL=http://tvmovies.ign.com/tv/video/article/850/850894/knightrider_trailer_020808_flvlow.flv" type="application/x-shockwave-flash" width="200" height="100" ></embed>',

	// LiveLeak video
	'ABBC3_LIVELEAK_MOVER'		=> 'Insérez vidéo de Liveleak',
	'ABBC3_LIVELEAK_TIP'		=> '[liveleak]URL vidéo[/liveleak]',
	'ABBC3_LIVELEAK_EXAMPLE'	=> 'http://www.liveleak.com/view?i=413_1202590393',
	'ABBC3_LIVELEAK_VIEW'		=> '<object type="application/x-shockwave-flash" width="200" height="100" wmode="transparent" data="http://www.liveleak.com/player.swf?autostart=false&token=i=413_1202590393"><param name="movie" value="http://www.liveleak.com/player.swf?autostart=false&token=$1" /><param name="wmode" value="transparent" /><param name="quality" value="high" /></object>',

	// Custom BBcodes
	
	// Deezer audio
	'DEEZER_TAG'			=> 'Deezer',
	'DEEZER_MOVER'			=> 'Insérez une musique de Deezer',
	'DEEZER_TIP'			=> '[Deezer]URL Permalien[/Deezer]',
	'DEEZER_EXAMPLE'		=> 'http://www.deezer.com/track/351534',
	'DEEZER_VIEW'			=> '<object width="180" height="220"><param name="movie" value="http://www.deezer.com/embedded/widget.swf?path=696108&lang=en&autoplay=true&id=351534"></param><embed src="http://www.deezer.com/embedded/widget.swf?path=696108&lang=en&autoplay=true&id=351534" type="application/x-shockwave-flash" width="180" height="220"></embed></object>',
	
));

?>