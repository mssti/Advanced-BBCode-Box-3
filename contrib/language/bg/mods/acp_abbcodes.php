<?php
/**
* @package: phpBB3 :: Advanced BBCode box 3 -> language [bg][Bulgarian]
* @version: $Id: acp_abbcode.php, v 1.0.8 2008/03/31 03:01:00 leviatan21 Exp $
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
	'ACP_ABBCODES'						=> 'Advanced BBcodes Box 3',
	'ACP_ABBCODES_EXPLAIN'				=> 'Тук можете да настройвате стиловете на<strong>[ <a href="http://www.mssti.com/phpbb3" target="_blank">ABBC3</a> ]</strong> на вашият форум.<br/>Можете да сменяте различни стилове, презаредите, дезактивирайте, и активирайте отново. Също можете да прегледате как ще изглежда един стил с предната функция. <br/><em>Текущия стил е отбелязан с (*). Разполага се и със списък от броя на потребители които позлват определен стил.</em>',
	
	'ABBCODES_DISABLE'					=> 'ABBC3',
	'ABBCODES_DISABLE_EXPLAIN'			=> 'Включи или изключи <strong>Advanced BBodes Box 3</strong> за потребителите, и/или изполвайте стандартните phpBB3 бутони за постване.',
	'ABBCODES_BG'						=> 'Фонова картинка',
	'ABBCODES_BG_EXPLAIN'				=> 'Това ще нагласи фоновата картинка на иконите.<br/>Нагласете на <em>no image</em> за да бъде като вашият стил.',
	'ABBCODES_TAB'						=> 'Покажи разделението на иконите за етикитите',
	'ABBCODES_BOXRESIZE'				=> 'Размер на мястото за писане',
	'ABBCODES_BOXRESIZE_EXPLAIN'		=> 'Показва бутони за нагласяне на размера на мястото за писане.',
	
	'ABBCODES_GREYBOX'					=> 'Изполвай GreyBox &reg;',
	'ABBCODES_GREYBOX_EXPLAIN'			=> 'GreyBox &reg; е фунцкия за изполване на <em>миниатури</em> и <em>смалени картинки</em> в цял размер. ако НЕ, ще се отвори нов прозорец на броузора ви.',
	'ABBCODES_RESIZE'					=> 'Смалете голяма картинка',
	'ABBCODES_RESIZE_EXPLAIN'			=> 'Това е поправка за [img] bbcode когато някой постне огромна снимка тя се смаля автоматично.',
	'ABBCODES_MAX_IMAGE_SIZE'			=> 'Максимален размер на широчина в пиксели',
	'ABBCODES_RESIZE_METHOD'			=> 'Метод на смаляне',
	'ABBCODES_RESIZE_METHOD_EXPLAIN'	=> 'Изберете как ще се покаже смалената картинка в цял размер.',
	//	for translate :							   don't 		Yes			don't		Yes			don't			yes				don't		yes
	'ABBCODES_RESIZE_METHODS'			=> array( 'greybox' => 'grey box', 'enlarge' => 'Оголеми', 'samewindow' => 'същия прозорец', 'newwindow' => 'нов прозорец'),
	
	'ABBCODES_MAX_IMAGE_SIZE_EXPLAIN'	=> 'Картинката ще бъде смалена ако превиши показана широчина.',
	'ABBCODES_MAX_THUMB_WIDTH'			=> 'Максимална широчина в пиксели за миниатурата',
	'ABBCODES_MAX_THUMB_WIDTH_EXPLAIN'	=> 'Създадената миниатура няма да надвиши посочената широчина тук.',
	
	'ABBCODES_CUSTOM_BBCODES'			=> 'Персонализирани bbcodes',
	'ABBCODES_CUSTOM_BBCODES_EXPLAIN'	=> 'Покажи персонализираните bbcodes икони. Тази функция ще позволи съвместимоста с другите bbcode като [youtube] и ще добави вашите bbcodes (ако има такива).',
	'ABBCODES_VIDEO_SIZE'				=> 'Видео размери',
	'ABBCODES_VIDEO_SIZE_EXPLAIN'		=> 'Дължина и широчина за постнатите видо клипчета.',

));

$lang = array_merge($lang, array(
	'ABBCODES_SETINGS'					=> 'ABBC3 настройки',
	'ABBCODES_SETINGS_EXPLAIN'			=> 'Тук можете да нагласите елементарните настройки за <strong>ABBC3</strong>, включи или изключи, и преди други настройки да се изберат параметрите за фона.',
	
	'ABBCODES_CONFIG'					=> 'ABBC3 Конфигурация на компоненти',
	'ABBCODES_CONFIG_EXPLAIN'			=> 'От тази страница може да промените реда на постнатите етикети или да промените иконите,',
	
	'ABBCODES_NAME'						=> 'Име на етикет',
	'ABBCODES_TAG'						=> 'Картинка на етикета',
	'ABBCODES_ORDER'					=> 'Ред на етикетите',
	'RESET_TO_DEFAULT'					=> 'Рестартирай на първоначалните настройки',
	'ABBCODES_BREAK_MOVER'				=> '<strong>Нова линия</strong>',
	'ABBCODES_DIVISION_MOVER'			=> '<strong>Разделение</strong>',
	
	'ABBCODES_MOD_DISABLE'				=> '<strong>ABBC3</strong> е изключен за този стил.<br/>',
	'ABBCODES_STATUS'					=> 'статус',
	'ABBCODES_ACTIVATED'				=> 'активирано',
	'ABBCODES_DEACTIVATED'				=> 'дезактивирано',
	
));
?>