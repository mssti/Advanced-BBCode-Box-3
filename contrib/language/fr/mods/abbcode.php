<?php
/**
* @package: phpBB3 :: Advanced BBCode box 3 -> language [fr][French]
* @version: $Id: abbcode.php, v 1.0.8 2008/03/01 03:01:00 leviatan21 Exp $
* @copyright: leviatan21 < info@mssti.com > (Gabriel) http://www.mssti.com/phpbb3/
* @license: http://opensource.org/licenses/gpl-license.php GNU Public License 
* @author: leviatan21 - http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=345763
* @translator: joebart72 - http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=297204
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
	
// Image Resizer JS - Start
	'ABBC3_RESIZE_SMALL'		=> 'Cliquez cette barre pour voir l’image complète.',
	'ABBC3_RESIZE_FILESIZE'		=> 'Cette image a été redimensionnée. Cliquez cette barre pour voir l’image en pleine taille. L’image originale a été réduite à %1$sx%2$s pixels et pèse %3$s KB.',
	'ABBC3_RESIZE_NOFILESIZE'	=> 'Cette image a été redimensionnée. Cliquez cette barre pour voir l’image en pleine taille. L’image originale est de taille %1$sx%2$s.pixels.',
	'ABBC3_RESIZE_FULLSIZE'		=> 'Cliquez cette barre pourvoir la petite image.',
	
// Text to be applied to the helpline & mouseover & help page & Wizard texts
	'BBCODE_STYLES_TIP'			=> 'Astuce : Les mises en forme peuvent être rapidement appliqués au texte sélectionné.',
	
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
	
	'ABBC3_NOTE'				=> 'Note',
	'ABBC3_EXAMPLE'				=> 'Exemple',
	'ABBC3_EXAMPLES'			=> 'Exemples',
	
// bbcodes texts	
	// Font Type Dropdown
	'ABBC3_FONTTYPE_MOVER'		=> 'Police',
	'ABBC3_FONTTYPE_TIP'		=> '[font=Comic Sans MS]Texte[/font]',
	'ABBC3_FONTTYPE_NOTE'		=> 'Note : Vous pouvez utiliser vos propres polices',
	'ABBC3_FONTTYPE_VIEW'		=> '<span style="font-family:Comic Sans MS">Voici un exemple de texte</span>',
	
	// Font Size Dropdown
	'ABBC3_FONT_GIANT'			=> 'Géant',
	'ABBC3_FONTSIZE_MOVER'		=> 'Taille',
	'ABBC3_FONTSIZE_TIP'		=> '[size=150]Texte large[/size]',
	'ABBC3_FONTSIZE_NOTE'		=> 'Note : La valeur sera interprétée comme un pourcentage',
	'ABBC3_FONTSIZE_VIEW'		=> '<span style="font-size: 150%; line-height: 116%;">Voici un exemple de texte</span>',
	
	// Highlight Font Color Dropdown
	'ABBC3_FONTHILI_MOVER'		=> 'Texte surligné',
	'ABBC3_FONTHILI_TIP'		=> '[highlight=yellow]Texte[/highlight]',
	'ABBC3_FONTHILI_NOTE'		=> 'Note : Vous pouvez utiliser le HTML (color=#FF0000 ou color=red)',
	'ABBC3_FONTHILI_VIEW'		=> '<span style="background-color: yellow;">Voici un exemple de texte</span>',
	
	// Font Color Dropdown
	'ABBC3_FONTCOLOR_MOVER'		=> 'Couleur de la police',
	'ABBC3_FONTCOLOR_TIP'		=> '[color=red]Texte[/color]',
	'ABBC3_FONTCOLOR_NOTE'		=> 'Note : Vous pouvez utiliser le HTML (color=#FF0000 ou color=red)',
	'ABBC3_FONTCOLOR_VIEW'		=> '<span style="color:red">Voici un exemple de texte</span>',
	
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
	'ABBC3_CODE_VIEW'			=> '<dl class="codebox"><dt>'. $lang['CODE'] .': <a href="#" onclick="selectCode(this); return false;">'. $lang['SELECT_ALL_CODE'] .'</a></dt><dd><code>Voici un exemple de texte</code></dd></dl>',
	
	// Quote
	'ABBC3_QUOTE_MOVER'			=> 'Citer',
	'ABBC3_QUOTE_TIP'			=> '[quote]Texte[/quote] ou [quote=\"member\"]Texte[/quote]',
	'ABBC3_QUOTE_VIEW'			=> '<blockquote><div><cite>member '. $lang['WROTE'] .':</cite>Voici un exemple de texte</div></blockquote>',
	
	// Spoiler
	'ABBC3_SPOIL_MOVER'			=> 'Spoiler',
	'ABBC3_SPOIL_TIP'			=> '[spoil]Texte[/spoil]',
	'ABBC3_SPOIL_VIEW'			=> '<div class="spoilwrapper"><div class="spoiltitle"><input class="btnspoil" type="button" value="Show Spoiler" onclick="javascript:if (this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display != \'\') { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'\'; this.innerText = \'\'; this.value = \'Cacher le spoiler\'; } else { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'none\'; this.innerText = \'\'; this.value = \'Montrer le spoiler\'; }" onfocus="this.blur();" /></div><div class="spoilcontent"><div style="display: none;">Voici un exemple de texte</div></div></div>',
	'SPOILER_SHOW'				=> 'Montrer le spoiler',
	'SPOILER_HIDE'				=> 'Cacher le spoiler',
	
	// Hide tag
	'ABBC3_HIDE_MOVER'			=> 'Message caché',
	'ABBC3_HIDE_TIP'			=> '[hide]Message[/hide]',
	'ABBC3_HIDE_VIEW'			=> '<dl class="hidebox"><dt class="hide">HIDE: ON</dt><dd>Vous devez répondre à ce topic avant de pouvoir voir le message caché</dd></dl>',
	
	// Moderator tag
	'ABBC3_MODERATOR_MOVER'		=> 'Message Modérateur',
	'ABBC3_MODERATOR_TIP'		=> '[mod=name]Texte[/mod]',
	'ABBC3_MODERATOR_VIEW'		=> '<table id="ModTable" width="100%" cellspacing="5" cellpadding="0" border="0" align="center"><tr><td class="row1" rowspan="2" align="middle" vAlign="center" width="1%"><span class="exclamation" title="Moderator warning" style="font-size:25px">&nbsp;!&nbsp;</span></td><td class="row2"><span class="genmed"><b>Message Modérateur :</b></span></td></tr><tr><td>Voici un exemple de texte</td></tr></table>',
	
	// Off topic tag
	'ABBC3_OFFTOPIC'			=> 'Offtopic',
	'ABBC3_OFFTOPIC_MOVER'		=> 'Insérez un texte hors-sujet',
	'ABBC3_OFFTOPIC_TIP'		=> '[offtopic]Texte[/offtopic]',
	'ABBC3_OFFTOPIC_VIEW'		=> '<i><b><font color="#114499">Offtopic : </font></b><br/><font color="#2277DD">Voici un exemple de texte</font></i>',
	
	// NFO
	'ABBC3_NFO_MOVER'			=> 'Texte NFO (Meilleur avec Internet Explorer)',
	'ABBC3_NFO_TIP'				=> '[nfo]Texte NFO[/nfo]',
	'ABBC3_NFO_VIEW'			=> '<table cellspacing="0" cellpadding="0" border="0" ><tr><td><span class="genmed"><b>NFO :</b></span></td></tr><tr><td class="nfo">' . str_replace(" ", "&nbsp;", '    � ���� �۱��                                  ���������������������  �   �� ���') . '</td></tr></table>',
	
	// Justify Align
	'ABBC3_JUSTIFY_MOVER'		=> 'Texte justifié',
	'ABBC3_JUSTIFY_TIP'			=> '[align=justify]Texte[/align]',
	'ABBC3_JUSTIFY_VIEW'		=> '<div style="text-align:justify">Voici un exemple de texte</div>',
	
	// Right Align
	'ABBC3_RIGHT_MOVER'			=> 'Texte aligné sur la droite',
	'ABBC3_RIGHT_TIP'			=> '[align=right]Texte[/align]',
	'ABBC3_RIGHT_VIEW'			=> '<div style="text-align:right">Voici un exemple de texte</div>',
	
	// Center Align
	'ABBC3_CENTER_MOVER'		=> 'Texte centré',
	'ABBC3_CENTER_TIP'			=> '[align=center]Texte[/align]',
	'ABBC3_CENTER_VIEW'			=> '<div style="text-align:center">Voici un exemple de texte</div>',
	
	// Left Align
	'ABBC3_LEFT_MOVER'			=> 'Texte aligné sur la gauche',
	'ABBC3_LEFT_TIP'			=> '[align=left]Texte[/align]',
	'ABBC3_LEFT_VIEW'			=> '<div style="text-left:justify">Voici un exemple de texte</div>',
	
	// Preformat
	'ABBC3_PRE_MOVER'			=> 'Texte préformaté',
	'ABBC3_PRE_TIP'				=> '[pre]Texte[/pre]',
	'ABBC3_PRE_VIEW'			=> '<pre>Voici un exemple de texte</pre>',
	
	// Tab
	'ABBC3_TAB_MOVER'			=> 'Cr�ez un espace normal',
	'ABBC3_TAB_TIP'				=> '[tab=nn]',
	'ABBC3_TAB_NOTE'			=> 'Entrez un nombre qui sera une marge mesur�e en pixels.',
	'ABBC3_TAB_VIEW'			=> '<span style="margin-left:20px;"></span>Voici un exemple de texte',
	
	// Superscript
	'ABBC3_SUP_MOVER'			=> 'Texte en exposant',
	'ABBC3_SUP_TIP'				=> '[sup]Texte[/sup]',
	'ABBC3_SUP_VIEW'			=> '<sup>Voici un exemple de texte</sup>',	
	
	// Subscript
	'ABBC3_SUB_MOVER'			=> 'Texte en indice',
	'ABBC3_SUB_TIP'				=> '[sub]Texte[/sub]',
	'ABBC3_SUB_VIEW'			=> '<sub>Voici un exemple de texte</sub>',
	
	// Bold
	'ABBC3_BOLD_MOVER'			=> 'Texte en gras',
	'ABBC3_BOLD_TIP'			=> '[b]Texte[/b]',
	'ABBC3_BOLD_VIEW'			=> '<strong>Voici un exemple de texte</strong>',
	
	// Italic
	'ABBC3_ITALIC_MOVER'			=> 'Texte en italique',
	'ABBC3_ITALIC_TIP'			=> '[i]Texte[/i]',
	'ABBC3_ITALIC_VIEW'			=> '<em>Voici un exemple de texte</em>',
	
	// Underline
	'ABBC3_UNDERLINE_MOVER'		=> 'Texte souligné',
	'ABBC3_UNDERLINE_TIP'		=> '[u]Texte[/u]',
	'ABBC3_UNDERLINE_VIEW'		=> '<span style="text-decoration: underline">Voici un exemple de texte</span>',
	
	// Strikethrough
	'ABBC3_STRIKE_MOVER'		=> 'Texte barré',
	'ABBC3_STRIKE_TIP'			=> '[s]Texte[/s]',
	'ABBC3_STRIKE_VIEW'			=> '<span style="text-decoration: line-through;">Voici un exemple de texte</span>',
	
	// Text Fade
	'ABBC3_FADE_MOVER'			=> 'Texte en fondu',
	'ABBC3_FADE_TIP'			=> '[fade]Texte[/fade]',
	'ABBC3_FADE_VIEW'			=> '<span class="fade_link">Voici un exemple de texte</span> <script type="text/javascript">fade_ontimer()</script>',
	
	// Text Gradient
	'ABBC3_GRAD_MOVER'			=> 'Texte en arc en ciel',
	'ABBC3_GRAD_TIP'			=> '[grad]Texte[/grad]',
	'ABBC3_GRAD_VIEW'			=> '<span style="color: #FF0000">V</span><span style="color: #F4000B">o</span><span style="color: #EA0015">i</span><span style="color: #DF0020">c</span><span style="color: #D5002B">i</span> <span style="color: #BF0040">u</span><span style="color: #B5004A">n</span> <span style="color: #9F0060">e</span><span style="color: #95006A">x</span><span style="color: #8A0075">e</span><span style="color: #800080">m</span><span style="color: #75008A">p</span><span style="color: #6A0095">l</span><span style="color: #60009F">e</span> <span style="color: #4A00B5">d</span><span style="color: #4000BF">e</span> <span style="color: #2B00D5">t</span><span style="color: #2000DF">e</span><span style="color: #1500EA">x</span><span style="color: #0B00F4">t</span><span style="color: #0000FF">e</span>',
	'ABBC3_GRAD_MIN_ERROR'		=> 'Veuillez d’abord sélectionner le texte : ',
	'ABBC3_GRAD_MAX_ERROR'		=> 'Seulement 120 caractères maximum autorisés : ',
	
	// Glow text
	'ABBC3_GLOW_MOVER'			=> 'Texte avec Glow (Seulement avec Internet Explorer)',
	'ABBC3_GLOW_TIP'			=> '[glow=(color)]Texte[/glow]',
	'ABBC3_GLOW_VIEW'			=> '<div style="filter:Glow(color=red,strength=4);color:#ffffff;height:110%">Voici un exemple de texte</div>',
	
	// Shadow text
	'ABBC3_SHADOW_MOVER'		=> 'Texte avec Shadow (Seulement avec Internet Explorer)',
	'ABBC3_SHADOW_TIP'			=> '[shadow=(color)]Texte[/shadow]',
	'ABBC3_SHADOW_VIEW'			=> '<div style="filter:shadow(color=black,strength=4);color:blue;height:110%">Voici un exemple de texte</div>',
	
	// Dropshadow text
	'ABBC3_DROPSHADOW_MOVER'	=> 'Texte avec Dropshadow (Seulement avec Internet Explorer)',
	'ABBC3_DROPSHADOW_TIP'		=> '[dropshadow=(color)]Texte[/dropshadow]',
	'ABBC3_DROPSHADOW_VIEW'		=> '<div style="filter:dropshadow(color=#999999,strength=4);color:blue;height:110%">Voici un exemple de texte</div>',
	
	// Blur text
	'ABBC3_BLUR_MOVER'			=> 'Texte avec Blur (Seulement avec Internet Explorer)',
	'ABBC3_BLUR_TIP'			=> '[blur=(color)]Texte[/blur]',
	'ABBC3_BLUR_VIEW'			=> '<div style="filter:Blur(strength=7);color:blue;height:110%">Voici un exemple de texte</div>',
	
	// Wave text
	'ABBC3_WAVE_MOVER'			=> 'Texte en vague (Seulement avec Internet Explorer)',
	'ABBC3_WAVE_TIP'			=> '[wave=(color)]Texte[/wave]',
	'ABBC3_WAVE_VIEW'			=> '<div style="filter:Wave(strength=2);color:blue;height:110%">Voici un exemple de texte</div>',
	
	// Unordered List
	'ABBC3_LISTB_MOVER'			=> 'Liste à puces',
	'ABBC3_LISTB_TIP'			=> '[list]Texte[/list]',
	'ABBC3_LISTB_NOTE'			=> 'Note : Utilisez [*] pour créer les puces',
	'ABBC3_LISTB_VIEW'			=> '<ul><li>Item1</li><li>Item2</li><li>Item3</li></ul>',
	
	// Ordered List
	'ABBC3_LISTO_MOVER'			=> 'Liste ordonnée',
	'ABBC3_LISTO_TIP'			=> '[list=1|a]Texte[/list]',
	'ABBC3_LISTO_NOTE'			=> 'Note : Utilisez [*] pour créer les puces',
	'ABBC3_LISTO_VIEW'			=> '<ol style="list-style-type: lower-alpha"><li>Item1</li><li>Item2</li><li>Item3</li></ol>',
	
	// List item
	'ABBC3_LISTITEM_MOVER'		=> 'Liste avec item',
	'ABBC3_LISTITEM_TIP'		=> '[*]',
	'ABBC3_LISTITEM_NOTE'		=> 'Note : Créez des puces dans la liste',
	
	// Line Break
	'ABBC3_HR_MOVER'			=> 'Ligne de séparation',
	'ABBC3_HR_TIP'				=> '[hr]',
	'ABBC3_HR_NOTE'				=> 'Note: Crééz une ligne pour séparer du texte',
	'ABBC3_HR_VIEW'				=> '<hr noshade color="#000000" size="1px">',
	
	// Message Box text direction Left to Light
	'ABBC3_RTL_MOVER'			=> 'Texte se lisant de droite à gauche',
	'ABBC3_RTL_TIP'				=> '[dir=rtl]Texte[/dir]',
	'ABBC3_RTL_VIEW'			=> '<BDO dir="rtl">Voici un exemple de texte</BDO>',
	
	// Message Box text direction right to Left
	'ABBC3_LTR_MOVER'			=> 'Texte se lisant de gauche à droite',
	'ABBC3_LTR_TIP'				=> '[dir=LTR]text[/dir]',
	'ABBC3_LTR_VIEW'			=> '<BDO dir="ltr">Voici un exemple de texte</BDO>',
	
	// Marquee Down
	'ABBC3_MARQD_MOVER'			=> 'Texte se déplaçant vers le bas',
	'ABBC3_MARQD_TIP'			=> '[marq=down]Texte[/marq]',
	'ABBC3_MARQD_VIEW'			=> '<marquee direction="down" scrolldelay="120" height="80px">Voici un exemple de texte</marquee>',
	
	// Marquee Up
	'ABBC3_MARQU_MOVER'			=> 'Texte se déplaçant vers le haut',
	'ABBC3_MARQU_TIP'			=> '[marq=up]Texte[/marq]',
	'ABBC3_MARQU_VIEW'			=> '<marquee direction="up" scrolldelay="120" height="80px">Voici un exemple de texte</marquee>',
	
	// Marquee Right
	'ABBC3_MARQR_MOVER'			=> 'Texte se déplaçant vers la droite',
	'ABBC3_MARQR_TIP'			=> '[marq=right]Texte[/marq]',
	'ABBC3_MARQR_VIEW'			=> '<marquee direction="right" scrolldelay="120">Voici un exemple de texte</marquee>',
	
	// Marquee Left
	'ABBC3_MARQL_MOVER'			=> 'Texte se déplaçant vers la gauche',
	'ABBC3_MARQL_TIP'			=> '[marq=left]Texte[/marq]',
	'ABBC3_MARQL_VIEW'			=> '<marquee direction="left" scrolldelay="120">Voici un exemple de texte</marquee>',
	
	// Table row cell wizard
	'ABBC3_TABLE_MOVER'			=> 'Insérer un tableau',
	'ABBC3_TABLE_TIP'			=> '[table=(ccs style)][tr=(ccs style)][td=(ccs style)]Texte[/td][/tr][/table]',
	'ABBC3_TABLE_VIEW'			=> '<table style="width:50%;border:1px solid #cccccc;" cellspacing="0" cellpadding="0"><tr style="text-align:center;"><td style="border:1px solid #cccccc;">Voici un exemple de texte</td></tr></table>',
	
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
	'ABBC3_UPLOAD_EXTENSION_EXPLAIN'	=> 'Vouqs pouvez ajouter, changer ou supprimer les types de données autorisées. Séparez les extensions avec une virgule (,)',
	'ABBC3_UPLOAD_DISABLED'		=> 'L’extension d’upload %s n’est pas autorisée',
	'ABBC3_UPLOAD_SIZE'			=> 'Taille maximale',
	'ABBC3_UPLOAD_NOSIZE'		=> 'La taille de l’upload %d est trop grosse. La taille maximale autorisée est de %d KB',
	'ABBC3_UPLOAD_EMPTY'		=> 'Le fichier d’upload est vide. Veuillez d’abord sélectionner un fichier',
	
	// Hyperlink Wizard
	'ABBC3_URL_TAG'				=> 'page',
	'ABBC3_URL_MOVER'			=> 'Adresse web',	
	'ABBC3_URL_TIP'				=> '[url]http://...[/url] ou [url=http://...]Nom du site Web[/url]',
	'ABBC3_URL_EXAMPLE'			=> 'http://www.google.com',
	'ABBC3_URL_VIEW'			=> '<a href="http://www.google.com" class="postlink">Google</a>',
	
	// Email Wizard
	'ABBC3_EMAIL_TAG'			=> 'email',
	'ABBC3_EMAIL_MOVER'			=> 'Email',
	'ABBC3_EMAIL_TIP'			=> '[email]user@server.ext[/email] ou [email=user@server.ext]Mon email[/email]',
	'ABBC3_EMAIL_EXAMPLE'		=> 'user@server.ext',
	'ABBC3_EMAIL_VIEW'			=> '<a href="mailto:user@server.ext">user@server.ext</a>',
	
	// Ed2k link Wizard
	'ABBC3_ED2K_TAG'			=> 'ed2k',
	'ABBC3_ED2K_MOVER'			=> 'Lien eD2K',
	'ABBC3_ED2K_TIP'			=> '[url]Lien eD2K[/url] ou [url=link ed2k]Nom eD2K[/url]',
	'ABBC3_ED2K_EXAMPLE'		=> 'ed2k://|file|The_Two_Towers-The_Purist_Edit-Trailer.avi|14997504|965c013e991ee246d63d45ea71954c4d|/',
	'ABBC3_ED2K_VIEW'			=> '<a href="ed2k://|file|The_Two_Towers-The_Purist_Edit-Trailer.avi|14997504|965c013e991ee246d63d45ea71954c4d|/" class="postlink">The_Two_Towers-The_Purist_Edit-Trailer.avi</a>',
	'ABBC3_ED2K_ADD'			=> 'Ajoutez les liens sélectionnés à votre client ed2k',
	
	// Web included by iframe
	'ABBC3_WEB_TAG'				=> 'web',
	'ABBC3_WEB_MOVER'			=> 'Insérez un site dans le post',
	'ABBC3_WEB_TIP'				=> '[web width=200 height=100]URL web[/web]',
	'ABBC3_WEB_EXAMPLE'			=> 'http://www.google.com',
	'ABBC3_WEB_VIEW'			=> '<iframe width="100%" height="100" src="http://www.google.com" style="font-size: 2px;"></iframe><br/>',
	
	// Image Wizard
	'ABBC3_IMG_TAG'				=> 'image',
	'ABBC3_IMG_MOVER'			=> 'Insérez une image',
	'ABBC3_IMG_TIP'				=> '[img=(left|center|right)]http://...[/img]',
	'ABBC3_IMG_EXAMPLE'			=> 'http://www.google.com/intl/en_com/images/logo_plain.png',
	'ABBC3_IMG_VIEW'			=> '<div align="center"><img src="http://www.google.com/intl/en_com/images/logo_plain.png" alt="" /></div>',
	
	// Thumbnail
	'ABBC3_THUMBNAIL_TAG'		=> 'thumbnail',
	'ABBC3_THUMBNAIL_MOVER'		=> 'Insérez une miniature',
	'ABBC3_THUMBNAIL_TIP'		=> '[thumbnail(=left|right)]http://...[/thumbnail]',
	'ABBC3_THUMBNAIL_EXAMPLE'	=> 'http://www.google.com/intl/en_com/images/logo_plain.png',
	'ABBC3_THUMBNAIL_VIEW'		=> '<a href="http://www.google.com/intl/en_com/images/logo_plain.png" rel="gb_imageset[]" alt="http://www.google.com/intl/en_com/images/logo_plain.png" title="" class="hoverbox"><img src="http://www.google.com/intl/en_com/images/logo_plain.png" alt="" border="0" width="100px" align="right"/></a>',
	
	// Imgshack
	'ABBC3_IMGSHACK_MOVER'		=> 'Insérez une image d’Imageshack',
	'ABBC3_IMGSHACK_TIP'		=> '[url=http://imageshack.us][img=http://...][/img][/url]',
	'ABBC3_IMGSHACK_VIEW'		=> '<a href="http://img207.imageshack.us/my.php?image=advancedbbcodebox3prosidd3.gif" class="postlink"><img src="http://img207.imageshack.us/img207/1773/advancedbbcodebox3prosidd3.th.gif" alt="Image" /></a>',
	
	// testlink
	'ABBC3_TESTLINK_TAG'		=> 'V�rificateur de liens',
	'ABBC3_TESTLINK_MOVER'		=> 'Ins�rez un fichier stock� sur un serveur public',
	'ABBC3_TESTLINK_TIP'		=> '[testlink]http://rapidshare.com/files/...[/testlink]',
	'ABBC3_TESTLINK_NOTE'		=> 'Serveurs valides : Rapidshare, Megaupload, Megarotic, Depositfiles, Megashare .',
	'ABBC3_TESTLINK_EXAMPLE'	=> 'http://rapidshare.com/files/86587996/ABBC3_v108.zip.html',
	'ABBC3_TESTLINK_VIEW'		=> '<dl class="testlink"><dd><font color="red" size="4" >X</font>&nbsp;<a href="http://rapidshare.com/files/86587996/ABBC3_v108.zip.html" >http://rapidshare.com/files/86587996/ABBC3_v108.zip.html</a><br /></dd></dl>',
	'ABBC3_TESTLINK_GOOD'		=> 'Fichier trouv� sur le serveur !',
	'ABBC3_TESTLINK_WRONG'		=> 'Fichier non trouv� !',
	
	// Click counter
	'ABBC3_CLICK_TAG'			=> 'click',
	'ABBC3_CLICK_MOVER'			=> 'Insérez un compteur de clics',
	'ABBC3_CLICK_TIP'			=> '[click]http://...[/click] ou [click=http://...]Nom du site Web[/click] ou [click][img]http://...[/img][/click]',
	'ABBC3_CLICK_EXAMPLE' 		=> 'http://www.google.com ' . ' ' . 'http://www.google.com/intl/en_com/images/logo_plain.png',
	'ABBC3_CLICK_VIEW'			=> '<a href="./click.php?id=1" >http://www.phpbb.com</a> ( Cliqué 1 fois )<br />',
	'ABBC3_CLICK_TIME'			=> '( Cliqué %d fois )',
	'ABBC3_CLICK_TIMES'			=> '( Cliqué %d fois )',
	
	// Search tag
	'ABBC3_SEARCH_MOVER'		=> 'Insérez la recherche de mot',
	'ABBC3_SEARCH_TIP'			=> '[search(=(msn|yahoo|google))]Texte[/search]',
	'ABBC3_SEARCH_VIEW'			=> $lang['SEARCH_MINI'] . ' ' . $config['sitename'] . ' : <a href="search.php?keywords=Advanced BBcode box 3">"Advanced BBcode box 3"</a><br/><br/>' . $lang['SEARCH_MINI'] . ' msn : <a href="http://search.live.com/results.aspx?q=Advanced BBcode box 3&mkt=tr-TR&lf=1" target="_blank">"Advanced BBcode box 3"</a><br/><br/>' .$lang['SEARCH_MINI'] . ' yahoo : <a href="http://search.yahoo.com/search?p=Advanced BBcode box 3" target="_blank">"Advanced BBcode box 3"</a><br/><br/>' . $lang['SEARCH_MINI'] . ' google : <a href="http://www.google.com.tr/search?q=Advanced BBcode box 3" target="_blank">"Advanced BBcode box 3"</a>',
	
	// BBvideo Wizard
	'ABBC3_BBVIDEO_TAG'			=> 'BBvidéo',
	'ABBC3_BBVIDEO_MOVER'		=> 'Insérez une vidéo du web',
	'ABBC3_BBVIDEO_TIP'			=> '[BBvideo]URL vidéo[/BBvideo]',
	'ABBC3_BBVIDEO_EXAMPLE'		=> 'http://www.youtube.com/watch?v=TA4hm97m494',
	'ABBC3_BBVIDEO_VIEW'		=> '<object width="200" height="100"><param name="movie" value="http://www.youtube.com/v/TA4hm97m494" /><param name="wmode" value="transparent" /><embed src="http://www.youtube.com/v/TA4hm97m494" type="application/x-shockwave-flash" wmode="transparent" width="200" height="100"></embed></object>',
	'ABBC3_BBVIDEO_FILE'		=> 'Format vidéo',
	'ABBC3_BBVIDEO_VIDEO'		=> 'Vidéo en provenance de',
	
	// Custom bbcodes

	// Deezer audio
	'ABBC3_DEEZER_TAG'			=> 'Deezer',
	'ABBC3_DEEZER_MOVER'		=> 'Insérez une musique de Deezer',
	'ABBC3_DEEZER_TIP'			=> '[Deezer]URL Permalien[/Deezer]',
	'ABBC3_DEEZER_EXAMPLE'		=> 'http://www.deezer.com/track/351534',
	'ABBC3_DEEZER_VIEW'			=> '<object width="180" height="220"><param name="movie" value="http://www.deezer.com/embedded/widget.swf?path=696108&lang=en&autoplay=true&id=351534"></param><embed src="http://www.deezer.com/embedded/widget.swf?path=696108&lang=en&autoplay=true&id=351534" type="application/x-shockwave-flash" width="180" height="220"></embed></object>',
	

));

?>