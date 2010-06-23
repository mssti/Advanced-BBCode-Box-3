<?php
/**
* @package: phpBB3 :: Advanced BBCode box 3 -> language [bg][Bulgarian]
* @version: $Id: abbcode.php, v 1.0.8 2008/03/31 03:01:00 leviatan21 Exp $
* @copyright: leviatan21 < info@mssti.com > (Gabriel) http://www.mssti.com/phpbb3/
* @license: http://opensource.org/licenses/gpl-license.php GNU Public License 
* @author: leviatan21 - http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=345763
* @translator: alfa - http://www.boinc-bulgaria.net
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
	'ABBC3_HELP_TITLE'			=> 'Advanced BBCode box 3 :: Помощ',
	'ABBC3_HELP_DESC'			=> 'Опи�?ание',
	'ABBC3_HELP_WRITE'			=> 'Ваши�?т формат за пи�?ане',
	'ABBC3_HELP_VIEW'			=> '�?аши�?т формат за показване',
	'ABBC3_HELP_ABOUT'			=> 'Advanced BBCode Box 3 от <a href="http://www.mssti.com/phpbb3">mssti</a>',
	'ABBC3_HELP_ALT'			=> 'Advanced BBCode Box 3 (aka ABBC3)',
	
// Image Resizer JS - Start
	'ABBC3_RESIZE_SMALL'		=> '�?ати�?нете тази лини�? за да видите картинката.',
	'ABBC3_RESIZE_FILESIZE'		=> 'Тази картинка е �?малена. �?ати�?нете тук за да �? видите в ц�?л размер. Оригинални�? размер на картинката е %1$sx%2$s и тежи %3$sKB.',
	'ABBC3_RESIZE_NOFILESIZE'	=> 'Тази картинка е �?малена. �?ати�?нете тук за да �? видите в ц�?л размер. Оригинални�? размер на картинката е %1$sx%2$s.',
	'ABBC3_RESIZE_FULLSIZE'		=> '�?ати�?нете тук за да видите малка картина.',
	
// Text to be applied to the helpline & mouseover & help page & Wizard texts
	'BBCODE_STYLES_TIP'			=> 'Съвет: Стиловете може да бъдат приложени към тек�?та бързо.',

	'ABBC3_ERROR'				=> 'Грешка : ',
	'ABBC3_ERROR_TAG'			=> '�?еочаквана грешка използвайки етикет : ',

	'ABBC3_ID'					=> 'Въведете идентификатор :',
	'ABBC3_NOID'				=> 'Вие не напи�?ахте идентификатора',
	'ABBC3_LINK'				=> 'Въведете адре�? за ',
	'ABBC3_DESC'				=> 'Въведете опи�?ание за ',
	'ABBC3_NAME'				=> 'Опи�?ание',
	'ABBC3_NOLINK'				=> 'Вие не напи�?ахте адре�? за ',
	'ABBC3_NODESC'				=> 'Вие не напи�?ахте опи�?ание за ',
	'ABBC3_WIDTH'				=> 'Въведете широчина',
	'ABBC3_WIDTH_NOTE'			=> 'Бележка: данните може да бъдат интерпретирани като процент',
	'ABBC3_NOWIDTH'				=> '�?е въведохте широчината',
	'ABBC3_HEIGHT'				=> 'Въведете дължина',
	'ABBC3_HEIGHT_NOTE'			=> 'Бележка: данните може да бъдат интерпретирани като процент',
	'ABBC3_NOHEIGHT'			=> '�?е въведохте дължината',

	'ABBC3_NOTE'				=> 'Бележка',
	'ABBC3_EXAMPLE'				=> 'Пример',
	'ABBC3_EXAMPLES'			=> 'Примери',
	
// bbcodes texts	
	// Font Type Dropdown
	'ABBC3_FONTTYPE_MOVER'		=> 'Вид шрифт',
	'ABBC3_FONTTYPE_TIP'		=> '[font=Comic Sans MS]тек�?т[/font]',
	'ABBC3_FONTTYPE_NOTE'		=> 'Бележка: Можете да използвате �?об�?твените �?и шрифтове',
	'ABBC3_FONTTYPE_VIEW'		=> '<span style="font-family:Comic Sans MS">Това е примерен тек�?т</span>',
	
	// Font Size Dropdown
	'ABBC3_FONT_GIANT'			=> 'Огромен',
	'ABBC3_FONTSIZE_MOVER'		=> 'Големина на шрифта',
	'ABBC3_FONTSIZE_TIP'		=> '[size=150гол�?м тек�?т[/size]',
	'ABBC3_FONTSIZE_NOTE'		=> 'Бележка: данните ще бъдат интерпретирани като процент',
	'ABBC3_FONTSIZE_VIEW'		=> '<span style="font-size: 150%; line-height: 116%;">Това е примерен тек�?тt</span>',
	
	// Highlight Font Color Dropdown
	'ABBC3_FONTHILI_MOVER'		=> 'Маркиран тек�?т',
	'ABBC3_FONTHILI_TIP'		=> '[highlight=yellow]тек�?т[/highlight]',
	'ABBC3_FONTHILI_NOTE'		=> 'Бележка: можете да използвате html цветове color=#FF0000 или color=red)',
	'ABBC3_FONTHILI_VIEW'		=> '<span style="background-color: yellow;">Това е примерен тек�?т</span>',
	
	// Font Color Dropdown
	'ABBC3_FONTCOLOR_MOVER'		=> 'Цв�?т на шрифта',
	'ABBC3_FONTCOLOR_TIP'		=> '[color=red]тек�?т[/color]',
	'ABBC3_FONTCOLOR_NOTE'		=> 'Бележка: можете да използвате html цветове (color=#FF0000 или color=red)',
	'ABBC3_FONTCOLOR_VIEW'		=> '<span style="color:red">Това е примерен тек�?т</span>',

	// Cut selected text
	'ABBC3_CUT_MOVER'			=> 'Премахва избрани�? тек�?т',
	// Copy selected text
	'ABBC3_COPY_MOVER'			=> 'Копира избрани�? тек�?т',
	// Paste previously copy text
	'ABBC3_PASTE_MOVER'			=> 'Залепва избрани�? тек�?т',
	'ABBC3_PASTE_ERROR'			=> 'Мол�?, пъвро копирайте тек�?т, по�?ле го залепете ',
	// Remove BBCode (Removes all BBCode tags from selected text)
	'ABBC3_PLAIN_MOVER'			=> 'Премахва BBкодовете от избрани�? тек�?т',
	'ABBC3_NOSELECT_ERROR'		=> 'Мол�?, първо изберете тек�?т ',
	
	// Code
	'ABBC3_CODE_MOVER'			=> 'Код',
	'ABBC3_CODE_TIP'			=> '[code]Код[/code]',
	'ABBC3_CODE_VIEW'			=> '<dl class="codebox"><dt>'. $lang['CODE'] .': <a href="#" onclick="selectCode(this); return false;">'. $lang['SELECT_ALL_CODE'] .'</a></dt><dd><code>Това е примерен тек�?т</code></dd></dl>',

	// Quote
	'ABBC3_QUOTE_MOVER'			=> 'Цитат',
	'ABBC3_QUOTE_TIP'			=> '[quote]тек�?т[/quote] или [quote=\"потребител\"]тек�?т[/quote]',
	'ABBC3_QUOTE_VIEW'			=> '<blockquote><div><cite>member '. $lang['WROTE'] .':</cite>Това е примерен тек�?т</div></blockquote>',

	// Spoiler
	'ABBC3_SPOIL_MOVER'			=> 'Скрит тек�?т',
	'ABBC3_SPOIL_TIP'			=> '[spoil]тек�?т[/spoil]',
	'ABBC3_SPOIL_VIEW'			=> '<div class="spoilwrapper"><div class="spoiltitle"><input class="btnspoil" type="button" value="Покажи" onClick="javascript:if (this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display != \'\') { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'\'; this.innerText = \'\'; this.value = \'Скрии тек�?та\'; } else { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'none\'; this.innerText = \'\'; this.value = \'Покажи тек�?та\'; }" onfocus="this.blur();"></div><div class="spoilcontent"><div style="display: none;">Това е примерен тек�?т</div></div></div>',
	'SPOILER_SHOW'				=> 'Покажи тек�?т',
	'SPOILER_HIDE'				=> 'Скрий тек�?т',

	// Hide tag
	'ABBC3_HIDE_MOVER'			=> 'Скрий �?ъобщението',
	'ABBC3_HIDE_TIP'			=> '[hide]�?ъобщение[/hide]',
	'ABBC3_HIDE_VIEW'			=> '<dl class="hidebox"><dt class="hide">Скриване: Включено</dt><dd>Първо тр�?бва да отговорите на тази тема преди да видите �?ъобщението</dd></dl>',
	
	// Moderator tag
	'ABBC3_MODERATOR_MOVER'		=> 'Модератор�?ко �?ъобщение',
	'ABBC3_MODERATOR_TIP'		=> '[mod=name]тек�?т[/mod]',
	'ABBC3_MODERATOR_VIEW'		=> '<table id="ModTable" width="100%" cellspacing="5" cellpadding="0" border="0" align="center"><tr><td class="row1" rowspan="2" align="middle" vAlign="center" width="1%"><span class="exclamation" title="Модератор�?ко предупреждение" style="font-size:25px">&nbsp;!&nbsp;</span></td><td class="row2"><span class="genmed"><b>Име на модератор:</b></span></td></tr><tr><td>Това е примерен тек�?т</td></tr></table>',
	
	// Off topic tag
	'ABBC3_OFFTOPIC'			=> 'Извън темата',
	'ABBC3_OFFTOPIC_MOVER'		=> 'Въведете тек�?т извън темата',
	'ABBC3_OFFTOPIC_TIP'		=> '[offtopic]тек�?т[/offtopic]',
	'ABBC3_OFFTOPIC_VIEW'		=> '<i><b><font color="#114499">Извън темата: </font></b><br/><font color="#2277DD">Това е примерен тек�?т</font></i>',
	
	// NFO
	'ABBC3_NFO_MOVER'			=> '�?ЛО тек�?т (Вижда �?е по-добре на Internet Explorer)',
	'ABBC3_NFO_TIP'				=> '[nfo]�?ЛО тек�?т[/nfo]',
	'ABBC3_NFO_VIEW'			=> '<table cellspacing="0" cellpadding="0" border="0" ><tr><td><span class="genmed"><b>NFO:</b></span></td></tr><tr><td class="nfo">' . str_replace(" ", "&nbsp;", '    І ЫЫЫЫ ЫЫ±±°                                  °°°±±±±ІІІЫЫЫЫЫЫЫЫЫЫЫ  Ы   ЫЫ ЫЫЫ') . '</td></tr></table>',
	
	// Justify Align
	'ABBC3_JUSTIFY_MOVER'		=> 'Равно�?транно',
	'ABBC3_JUSTIFY_TIP'			=> '[align=justify]тек�?т[/align]',
	'ABBC3_JUSTIFY_VIEW'		=> '<div style="text-align:justify">Това е примерен тек�?т</div>',
	
	// Right Align
	'ABBC3_RIGHT_MOVER'			=> 'Подравни над�?�?но',
	'ABBC3_RIGHT_TIP'			=> '[align=right]тек�?т[/align]',
	'ABBC3_RIGHT_VIEW'			=> '<div style="text-align:right">Това е примерен тек�?т</div>',
	
	// Center Align
	'ABBC3_CENTER_MOVER'		=> 'Центрирай',
	'ABBC3_CENTER_TIP'			=> '[align=center]тек�?т[/align]',
	'ABBC3_CENTER_VIEW'			=> '<div style="text-align:center">Това е примерен тек�?т</div>',
	
	// Left Align
	'ABBC3_LEFT_MOVER'			=> 'Подравни нал�?во',
	'ABBC3_LEFT_TIP'			=> '[align=left]тек�?т[/align]',
	'ABBC3_LEFT_VIEW'			=> '<div style="text-left:justify">Това е примерен тек�?т</div>',
	
	// Preformat
	'ABBC3_PRE_MOVER'			=> 'Преформатиран тек�?т',
	'ABBC3_PRE_TIP'				=> '[pre]тек�?т[/pre]',
	'ABBC3_PRE_VIEW'			=> '<pre>Това е примерен тек�?т</pre>',
	
	// Tab
	'ABBC3_TAB_MOVER'			=> 'Creates a normal indent',
	'ABBC3_TAB_TIP'				=> '[tab=nn]',
	'ABBC3_TAB_NOTE'			=> 'Enter a number that will be a margin measured in pixels.',
	'ABBC3_TAB_VIEW'			=> '<span style="margin-left:20px;"></span>This is a sample text',
	
	// Superscript
	'ABBC3_SUP_MOVER'			=> '�?агла�?�? тек�?та като горен индек�?',
	'ABBC3_SUP_TIP'				=> '[sup]тек�?т[/sup]',
	'ABBC3_SUP_VIEW'			=> '<sup>Това е примерен тек�?т</sup>',

	// Subscript
	'ABBC3_SUB_MOVER'			=> '�?агла�?�? тек�?та като долен индек�?',
	'ABBC3_SUB_TIP'				=> '[sub]тек�?т[/sub]',
	'ABBC3_SUB_VIEW'			=> '<sub>Това е примерен тек�?т</sub>',

	// Bold
	'ABBC3_BOLD_MOVER'			=> 'Удебелен',
	'ABBC3_BOLD_TIP'			=> '[b]тек�?т[/b]',
	'ABBC3_BOLD_VIEW'			=> '<strong>Това е примерен тек�?т</strong>',

	// Italic
	'ABBC3_ITALIC_MOVER'		=> '�?аклонен',
	'ABBC3_ITALIC_TIP'			=> '[i]тек�?т[/i]',
	'ABBC3_ITALIC_VIEW'			=> '<em>Това е примерен тек�?т</em>',

	// Underline
	'ABBC3_UNDERLINE_MOVER'		=> 'Подчертан',
	'ABBC3_UNDERLINE_TIP'		=> '[u]тек�?т[/u]',
	'ABBC3_UNDERLINE_VIEW'		=> '<span style="text-decoration: underline">Това е примерен тек�?т</span>',

	// Strikethrough
	'ABBC3_STRIKE_MOVER'		=> 'Задра�?кан',
	'ABBC3_STRIKE_TIP'			=> '[s]тек�?т[/s]',
	'ABBC3_STRIKE_VIEW'			=> '<span style="text-decoration: line-through;">Това е примерен тек�?т</span>',

	// Text Fade
	'ABBC3_FADE_MOVER'			=> 'Обезцветен тек�?т',
	'ABBC3_FADE_TIP'			=> '[fade]тек�?т[/fade]',
	'ABBC3_FADE_VIEW'			=> '<span class="fade_link">Това е примерен тек�?т</span> <script type="text/javascript">fade_ontimer()</script>',

	// Text Gradient
	'ABBC3_GRAD_MOVER'			=> 'Градиент',
	'ABBC3_GRAD_TIP'			=> '',
	'ABBC3_GRAD_VIEW'			=> '<span style="color: #FF0000">Т</span><span style="color: #F2000D">о</span><span style="color: #E6001A">в</span><span style="color: #D90026">а</span> <span style="color: #BF0040">е</span> <span style="color: #A60059">п</span><span style="color: #990066">р</span><span style="color: #8C0073">и</span><span style="color: #800080">м</span><span style="color: #73008C">е</span><span style="color: #660099">р</span><span style="color: #5900A6">е</span><span style="color: #4D00B3">н</span> <span style="color: #3300CC">т</span><span style="color: #2600D9">е</span><span style="color: #1A00E6">к</span><span style="color: #0D00F2">�?</span><span style="color: #0000FF">т</span></span>',
	'ABBC3_GRAD_MIN_ERROR'		=> 'Мол�?, първо изберете тек�?т : ',
	'ABBC3_GRAD_MAX_ERROR'		=> 'Позволено е по-малко от 120 знака : ',

	// Glow text
	'ABBC3_GLOW_MOVER'			=> 'Тек�?т �? бл�?�?ък (Само за Internet Explorer)',
	'ABBC3_GLOW_TIP'			=> '[glow=(color)]тек�?т[/glow]',
	'ABBC3_GLOW_VIEW'			=> '<div style="filter:Glow(color=red,strength=4);color:#ffffff;height:110%">Това е примерен тек�?т</div>',

	// Shadow text
	'ABBC3_SHADOW_MOVER'		=> 'Тек�?т �?ъ�? �?�?нка (Само за Internet Explorer)',
	'ABBC3_SHADOW_TIP'			=> '[shadow=(color)]тек�?т[/shadow]',
	'ABBC3_SHADOW_VIEW'			=> '<div style="filter:shadow(color=black,strength=4);color:blue;height:110%">Това е примерен тек�?т</div>',
	
	// Dropshadow text
	'ABBC3_DROPSHADOW_MOVER'	=> 'С�?нка (Само за Internet Explorer)',
	'ABBC3_DROPSHADOW_TIP'		=> '[dropshadow=(color)]тек�?т[/dropshadow]',
	'ABBC3_DROPSHADOW_VIEW'		=> '<div style="filter:dropshadow(color=#999999,strength=4);color:blue;height:110%">Това е примерен тек�?т</div>',
	
	// Blur text
	'ABBC3_BLUR_MOVER'			=> 'Blur тек�?т (Само за Internet Explorer)',
	'ABBC3_BLUR_TIP'			=> '[blur=(color)]тек�?т[/blur]',
	'ABBC3_BLUR_VIEW'			=> '<div style="filter:Blur(strength=7);color:blue;height:110%">Това е примерен тек�?т</div>',
	
	// Wave text
	'ABBC3_WAVE_MOVER'			=> 'Тек�?т на вълнички (Само за Internet Explorer)',
	'ABBC3_WAVE_TIP'			=> '[wave=(color)]тек�?т[/wave]',
	'ABBC3_WAVE_VIEW'			=> '<div style="filter:Wave(strength=2);color:blue;height:110%">Това е примерен тек�?т</div>',
	
	// Unordered List
	'ABBC3_LISTB_MOVER'			=> 'Подредете по точки',
	'ABBC3_LISTB_TIP'			=> '[list]тек�?т[/list]',
	'ABBC3_LISTB_NOTE'			=> 'Бележка: използвайте [*] за да �?ъздадете точка',
	'ABBC3_LISTB_VIEW'			=> '<ul><li>Item1</li><li>Item2</li><li>Item3</li></ul>',

	// Ordered List
	'ABBC3_LISTO_MOVER'			=> '�?умериран �?пи�?ък',
	'ABBC3_LISTO_TIP'			=> '[list=1|a]text[/list]',
	'ABBC3_LISTO_NOTE'			=> 'Бележка: използвайте [*] за да �?ъздадете точка',
	'ABBC3_LISTO_VIEW'			=> '<ol style="list-style-type: lower-alpha"><li>Item1</li><li>Item2</li><li>Item3</li></ol>',

	// List item
	'ABBC3_LISTITEM_MOVER'		=> 'Подредете по точки',
	'ABBC3_LISTITEM_TIP'		=> '[*]',
	'ABBC3_LISTITEM_NOTE'		=> 'Бележка: Създава точки в �?пи�?ъка',
	
	// Line Break
	'ABBC3_HR_MOVER'			=> 'Заглавие',
	'ABBC3_HR_TIP'				=> '[hr]',
	'ABBC3_HR_NOTE'				=> 'Бележка: Създава заглавие на една лини�?',
	'ABBC3_HR_VIEW'				=> '<hr noshade color="#000000" size="1px">',

	// Message Box text direction Left to Light
	'ABBC3_RTL_MOVER'			=> 'Тек�?т �? разчитане от д�?�?но на л�?во',
	'ABBC3_RTL_TIP'				=> '[dir=rtl]тек�?т[/dir]',
	'ABBC3_RTL_VIEW'			=> '<BDO dir="rtl">Това е примерен тек�?т</BDO>',
	
	// Message Box text direction right to Left
	'ABBC3_LTR_MOVER'			=> 'Тек�?т �? разчитане от л�?во на д�?�?но',
	'ABBC3_LTR_TIP'				=> '[dir=ltr]тек�?т[/dir]',
	'ABBC3_LTR_VIEW'			=> '<BDO dir="ltr">Това е примерен тек�?т</BDO>',
	
	// Marquee Down
	'ABBC3_MARQD_MOVER'			=> 'Изме�?ти надолу',
	'ABBC3_MARQD_TIP'			=> '[marq=down]тек�?т[/marq]',
	'ABBC3_MARQD_VIEW'			=> '<marquee direction="down" scrolldelay="120" height="80px">Това е примерен тек�?т</marquee>',
	
	// Marquee Up
	'ABBC3_MARQU_MOVER'			=> 'Изме�?ти нагоре',
	'ABBC3_MARQU_TIP'			=> '[marq=up]тек�?т[/marq]',
	'ABBC3_MARQU_VIEW'			=> '<marquee direction="up" scrolldelay="120" height="80px">Това е примерен тек�?т</marquee>',
	
	// Marquee Right
	'ABBC3_MARQR_MOVER'			=> 'Изме�?ти над�?�?но',
	'ABBC3_MARQR_TIP'			=> '[marq=right]тек�?т[/marq]',
	'ABBC3_MARQR_VIEW'			=> '<marquee direction="right" scrolldelay="120">Това е примерен тек�?т</marquee>',
	
	// Marquee Left
	'ABBC3_MARQL_MOVER'			=> 'Изме�?ти нал�?во',
	'ABBC3_MARQL_TIP'			=> '[marq=left]тек�?т[/marq]',
	'ABBC3_MARQL_VIEW'			=> '<marquee direction="left" scrolldelay="120">Това е примерен тек�?т</marquee>',
	
	// Table row cell wizard
	'ABBC3_TABLE_MOVER'			=> 'Въведи таблица',
	'ABBC3_TABLE_TIP'			=> '[table=(ccs �?тил)][tr=(ccs �?тил)][td=(ccs �?тил)]тек�?т[/td][/tr][/table]',
	'ABBC3_TABLE_VIEW'			=> '<table style="width:50%;border:1px solid #cccccc;" cellspacing="0" cellpadding="0"><tr style="text-align:center;"><td style="border:1px solid #cccccc;">Това е примерен тек�?т</td></tr></table>',

	'ABBC3_TABLE_STYLE'			=> 'Въведете �?тил на таблица',
	'ABBC3_TABLE_EXAMPLE'		=> 'width:50%;border:1px solid #cccccc;',
	
	'ABBC3_ROW_NUMBER'			=> 'Въведете брой на редици',
	'ABBC3_ROW_ERROR'			=> '�?е въведохте брой за редиците',
	'ABBC3_ROW_STYLE'			=> 'Въведете �?тил за редиците',
	'ABBC3_ROW_EXAMPLE'			=> 'text-align:center;',
	
	'ABBC3_CELL_NUMBER'			=> 'Въведете брой на колонките',
	'ABBC3_CELL_ERROR'			=> '�?е въведохте брой на колонките',
	'ABBC3_CELL_STYLE'			=> 'Въведете �?тил на колонките',
	'ABBC3_CELL_EXAMPLE'		=> 'border:1px solid #cccccc;',
	
	// Simple upload files
	'ABBC3_UPLOAD_TITLE'		=> 'Advanced BBCode box 3 :: Страница за качване на файли',
	'ABBC3_UPLOAD_MOVER'		=> 'Качи файл',
	'ABBC3_UPLOAD_LINK'			=> 'Това е адре�?а на качени�? ви файл',
	'ABBC3_UPLOAD_UPLOADED'		=> 'Качването на %s беше у�?пешно!',
	'ABBC3_UPLOAD_NOT_UPLOADED'	=> 'Качването на %s �?е провали',
	'ABBC3_UPLOAD_ALREADY'		=> 'Прикаченото %s вече �?ъще�?твува, мол�? изберете друг файл или преименувайте този и опитайте пак',
	'ABBC3_UPLOAD_ERROR'		=> '�?еможе да �?е качи файл в %s. Върнат код за грешка : %d',
	'ABBC3_UPLOAD_EXTENSION'	=> 'Позволени разширени�?',
	'ABBC3_UPLOAD_EXTENSION_EXPLAIN'   => 'Можете да добавите/промени/изтриете позволените разширени�?. Разделете различните разширени�? �?ъ�? запета�? (,)',
	'ABBC3_UPLOAD_DISABLED'		=> 'Каченото разширение не е позволено %s',
	'ABBC3_UPLOAD_SIZE'			=> 'Мак�?имален размер',
	'ABBC3_UPLOAD_NOSIZE'		=> 'Качени�? файл %d е прекалено гол�?м. Мак�?имални�? позволен размер е %d KB',
	'ABBC3_UPLOAD_EMPTY'		=> 'Качени�?т файл е празен, Мол�? първо изберете файл',
	
	// Hyperlink Wizard
	'ABBC3_URL_TAG'				=> '�?траница',
	'ABBC3_URL_MOVER'			=> 'Сайт',	
	'ABBC3_URL_TIP'				=> '[url]http://...[/url] или [url=http://...]Име на �?траница[/url]',
	'ABBC3_URL_EXAMPLE'			=> 'http://www.google.com',
	'ABBC3_URL_VIEW'			=> '<a href="http://www.google.com" class="postlink">Google</a>',
	
	// Email Wizard
	'ABBC3_EMAIL_TAG'			=> 'email',
	'ABBC3_EMAIL_MOVER'			=> 'email',
	'ABBC3_EMAIL_TIP'			=> '[email]user@server.ext[/email] или [email=user@server.ext]Мо�?т мейл[/email]',
	'ABBC3_EMAIL_EXAMPLE' 		=> 'user@server.ext',
	'ABBC3_EMAIL_VIEW'			=> '<a href="mailto:user@server.ext">user@server.ext</a>',

	// Ed2k link Wizard
	'ABBC3_ED2K_TAG'			=> 'ed2k',
	'ABBC3_ED2K_MOVER'			=> 'ed2k адре�?',
	'ABBC3_ED2K_TIP'			=> '[url]ed2k адре�?[/url] или [url=link ed2k]адре�?[/url]',
	'ABBC3_ED2K_EXAMPLE'		=> 'ed2k://|file|The_Two_Towers-The_Purist_Edit-Trailer.avi|14997504|965c013e991ee246d63d45ea71954c4d|/',
	'ABBC3_ED2K_VIEW'			=> '<a href="ed2k://|file|The_Two_Towers-The_Purist_Edit-Trailer.avi|14997504|965c013e991ee246d63d45ea71954c4d|/" class="postlink">The_Two_Towers-The_Purist_Edit-Trailer.avi</a>',
	'ABBC3_ED2K_ADD'			=> 'Въведете адре�?а във ваши�?т ed2k клиент',
	
	// Web included by iframe
	'ABBC3_WEB_TAG'				=> '�?айт',
	'ABBC3_WEB_MOVER'			=> 'Въведи �?траница в мнението',
	'ABBC3_WEB_TIP'				=> '[web width=200 height=100 ]�?дре�? на �?траницата[/web]',
	'ABBC3_WEB_EXAMPLE'			=> 'http://www.google.com',
	'ABBC3_WEB_VIEW'			=> '<iframe width="100%" height="100" src="http://www.google.com" style="font-size: 2px;"></iframe><br/>',
	
	// Image Wizard
	'ABBC3_IMG_TAG'				=> '�?нимка',
	'ABBC3_IMG_MOVER'			=> 'Въведи картинка',
	'ABBC3_IMG_TIP'				=> '[img=(left|center|right)]http://...[/img]',
	'ABBC3_IMG_EXAMPLE'			=> 'http://www.google.com/intl/en_com/images/logo_plain.png',
	'ABBC3_IMG_VIEW'			=> '<div align="center"><img src="http://www.google.com/intl/en_com/images/logo_plain.png" /></div>',

	// Thumbnail
	'ABBC3_THUMBNAIL_TAG'		=> 'миниатура',
	'ABBC3_THUMBNAIL_MOVER'		=> 'Въведи миниатура',
	'ABBC3_THUMBNAIL_TIP'		=> '[thumbnail(=left|right)]http://...[/thumbnail]',
	'ABBC3_THUMBNAIL_EXAMPLE'	=> 'http://www.google.com/intl/en_com/images/logo_plain.png',
	'ABBC3_THUMBNAIL_VIEW'		=> '<a href="http://www.google.com/intl/en_com/images/logo_plain.png" rel="lightbox[]" alt="http://www.google.com/intl/en_com/images/logo_plain.png" title="" class="hoverbox"><img src="http://www.google.com/intl/en_com/images/logo_plain.png" border="0" width="100px" align="right"/></a>',
	
	// Imgshack
	'ABBC3_IMGSHACK_MOVER'		=> 'Въведи картинка от imageshack',
	'ABBC3_IMGSHACK_TIP'		=> '[url=http://imageshack.us][img=http://...][/img][/url]',
	'ABBC3_IMGSHACK_VIEW'		=> '<a href="http://img207.imageshack.us/my.php?image=advancedbbcodebox3prosidd3.gif" class="postlink"><img src="http://img207.imageshack.us/img207/1773/advancedbbcodebox3prosidd3.th.gif" alt="Картинка" /></a>',
	
	// testlink
	'ABBC3_TESTLINK_TAG'		=> 'Провер�?ване на адре�?',
	'ABBC3_TESTLINK_MOVER'		=> 'Въведете файл качен на публичен �?ървър',
	'ABBC3_TESTLINK_TIP'		=> '[testlink]http://rapidshare.com/files/...[/testlink]',
	'ABBC3_TESTLINK_NOTE'		=> 'Валидни �?ървъри : rapidshare, megaupload, megarotic, depositfiles, megashares .',
	'ABBC3_TESTLINK_EXAMPLE'	=> 'http://rapidshare.com/files/86587996/ABBC3_v108.zip.html',
	'ABBC3_TESTLINK_VIEW'		=> '<dl class="testlink"><dd><font color="red" size="4" >X</font>&nbsp;<a href="http://rapidshare.com/files/86587996/ABBC3_v108.zip.html" >http://rapidshare.com/files/86587996/ABBC3_v108.zip.html</a><br /></dd></dl>',
	'ABBC3_TESTLINK_GOOD'		=> '�?амерен файл на �?ървъра!',
	'ABBC3_TESTLINK_WRONG'		=> '�?е намерен файл!',
	
	// Click counter
	'ABBC3_CLICK_TAG'			=> 'клик',
	'ABBC3_CLICK_MOVER'			=> 'Въведете бро�?ч на кликвани�?',
	'ABBC3_CLICK_TIP'			=> '[click]http://...[/click] или [click=http://...]Име на �?траница[/click] или [click][img]http://...[/img][/click]',
	'ABBC3_CLICK_EXAMPLE' 		=> 'http://www.google.com ' . ' ' . 'http://www.google.com/intl/en_com/images/logo_plain.png' ,
	'ABBC3_CLICK_VIEW'			=> '<a href="./click.php?id=1" >http://www.phpbb.com</a> ( Кликнато 1 път )<br />',
	'ABBC3_CLICK_TIME'			=> '( Кликнато %d път )',
	'ABBC3_CLICK_TIMES'			=> '( Кликнато %d пъти )',
	
	// Search tag
	'ABBC3_SEARCH_MOVER'		=> 'Въведете дума за тър�?ене',
	'ABBC3_SEARCH_TIP'			=> '[search(=(msn|yahoo|google))]тек�?т[/search]',
	'ABBC3_SEARCH_VIEW'			=> $lang['SEARCH_MINI'] . $config['sitename'] . ' :  <a href="search.php?keywords=Advanced BBcode box 3">"Advanced BBcode box 3" </a><br/><br/>' . $lang['SEARCH_MINI'] . 'msn :  <a href="http://search.live.com/results.aspx?q=Advanced BBcode box 3&mkt=tr-TR&lf=1" target="_blank">"Advanced BBcode box 3" </a><br/><br/>' .$lang['SEARCH_MINI'] . 'yahoo :  <a href="http://search.yahoo.com/search?p=Advanced BBcode box 3" target="_blank">"Advanced BBcode box 3" </a><br/><br/>' . $lang['SEARCH_MINI'] . 'google : <a href="http://www.google.com.tr/search?q=Advanced BBcode box 3" target="_blank">"Advanced BBcode box 3" </a>',
	
	// BBvideo Wizard
	'ABBC3_BBVIDEO_TAG'			=> 'BBvideo',
	'ABBC3_BBVIDEO_MOVER'		=> 'Въведи видео',
	'ABBC3_BBVIDEO_TIP'			=> '[BBvideo]Видео адре�?[/BBvideo]',
	'ABBC3_BBVIDEO_EXAMPLE'		=> 'http://www.youtube.com/watch?v=TA4hm97m494',
	'ABBC3_BBVIDEO_VIEW'		=> '<object width="200" height="100"><param name="movie" value="http://www.youtube.com/v/TA4hm97m494" /><param name="wmode" value="transparent" /><embed src="http://www.youtube.com/v/TA4hm97m494" type="application/x-shockwave-flash" wmode="transparent" width="200" height="100"></embed></object>',
	'ABBC3_BBVIDEO_FILE'		=> 'Видео формат',
	'ABBC3_BBVIDEO_VIDEO'		=> 'Видео от',
	
	// Custom bbcodes
	
));

?>