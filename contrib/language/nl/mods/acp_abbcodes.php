<?php
/**
* @package: phpBB3 :: Advanced BBCode box 3 -> language [nl][Dutch]
* @version: $Id: acp_abbcode.php, v 1.0.8 2008/03/31 03:01:00 leviatan21 Exp $
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
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
// Reference : http://www.phpbb.com/mods/documentation/phpbb-documentation/language/index.php#lang-use-php

$lang = array_merge($lang, array(
	'ACP_ABBCODES'						=> 'Advanced BBcodes Box 3',
	'ACP_ABBCODES_EXPLAIN'				=> 'Hier kan je de beschikbare stijlen beheren voor <strong>[ <a href="http://www.mssti.com/phpbb3" target="_blank">ABBC3</a> ]</strong> op jouw site.<br/>Je kunt bestaande stijlen veranderen, vernieuwen, deactiveer en reactiveer. Je kan met de voorbeeld functie zien hoe je stijl eruit gaat zien. <br/><em>De huidige standaardstijl wordt genoteerd door de aanwezigheid van een asterisk (*). Ook vermeld wordt de totale gebruikers telling voor elke stijl.</em>',
	
	'ABBCODES_DISABLE'					=> 'ABBC3',
	'ABBCODES_DISABLE_EXPLAIN'			=> 'Kies Ja voor het gebruik van <strong>Advanced BBodes Box 3</strong>, kies anders voor Nee voor de standaard phpbb3 pictogrammen.',
	'ABBCODES_BG'						=> 'Achtergrond afbeelding',
	'ABBCODES_BG_EXPLAIN'				=> 'Dit zal het achtergrond afbeelding zijn voor de pictogrammen.<br/>Zet het op eventueel <em>geen afbeelding</em> voor jouw stijl.',
	'ABBCODES_TAB'						=> 'Laat een scheiding zien tussen de pictogrammen',
	'ABBCODES_BOXRESIZE'				=> 'Verander de grote van het invoer scherm',
	'ABBCODES_BOXRESIZE_EXPLAIN'		=> 'Laat icoon zien om de grote van het invoer scherm te wijzigen.',
	
	'ABBCODES_GREYBOX'					=> 'Gebruik de GreyBox &reg;',
	'ABBCODES_GREYBOX_EXPLAIN'			=> 'GreyBox &reg; is een functie om <em>thumbnail</em> en <em>verkleinde afbeeldingen</em> te laten zien in orspronkelijk formaat. Als deze op Nee staat wordt de afbeelding in een nieuw venster getoond.',
	'ABBCODES_RESIZE'					=> 'Verklein grote afbeeldingen',
	'ABBCODES_RESIZE_EXPLAIN'			=> 'Deze oplossing is voor de [img] bbcode als iemand een te grote afbeelding plaatst en deze buiten je stijl gaat.',
	'ABBCODES_MAX_IMAGE_SIZE'			=> 'Maximale afbeelding breedte in pixel',
	'ABBCODES_RESIZE_METHOD'			=> 'Verklein methode',
	'ABBCODES_RESIZE_METHOD_EXPLAIN'	=> 'Kies hoe de verkleinde afbeelding getoond moet worden in ware grote.',
	//	for translate :							   don't 		Yes			don't		Yes			don't			yes				don't		yes
	'ABBCODES_RESIZE_METHODS'			=> array( 'greybox' => 'grey box', 'enlarge' => 'enlarge', 'samewindow' => 'same window', 'newwindow' => 'new window'),
	
	'ABBCODES_MAX_IMAGE_SIZE_EXPLAIN'	=> 'Afbeelding zal verkleind worden als de breedte hier wordt overschreden.',
	'ABBCODES_MAX_THUMB_WIDTH'			=> 'Maximale thumbnail breedte in pixel',
	'ABBCODES_MAX_THUMB_WIDTH_EXPLAIN'	=> 'Een thumbnail zal niet verkleind worden als de breedte hier wordt overschreden.',
	
	'ABBCODES_CUSTOM_BBCODES'			=> 'Andere bbcodes',
	'ABBCODES_CUSTOM_BBCODES_EXPLAIN'	=> 'Toon andere bbcodes pictogrammen. Met deze functie kan je andere video bbcodes zoals youtube toe voegen en/of je eigen bbcodes toevoegen (als je deze hebt).',
	'ABBCODES_VIDEO_SIZE'				=> 'Video afmetingen',
	'ABBCODES_VIDEO_SIZE_EXPLAIN'		=> 'Standaard breedte en hoogte van de geplaatste video.',

));

$lang = array_merge($lang, array(
	'ABBCODES_SETINGS'					=> 'ABBC3 configuratie',
	'ABBCODES_SETINGS_EXPLAIN'			=> 'Hier kan je de basis configuratie instellen voor <strong>ABBC3</strong>, aan of uitzetten, en de standaard waardes voor de achtergrond.',
	
	'ABBCODES_CONFIG'					=> 'ABBC3 Componenten configuratie',
	'ABBCODES_CONFIG_EXPLAIN'			=> 'Op deze pagina kan je de tags aan of uitzetten, sorteren of de pictogrammen veranderen,',
	
	'ABBCODES_NAME'						=> 'Tag naam',
	'ABBCODES_TAG'						=> 'Tag pictogram',
	'ABBCODES_ORDER'					=> 'Tag sorteer',
	'RESET_TO_DEFAULT'					=> 'Standaard instellingen',
	'ABBCODES_BREAK_MOVER'				=> '<strong>Volgende regel</strong>',
	'ABBCODES_DIVISION_MOVER'			=> '<strong>Scheiding</strong>',
	
	'ABBCODES_MOD_DISABLE'				=> '<strong>ABBC3</strong> is uit gezet op deze stijl.<br/>',
	'ABBCODES_STATUS'					=> 'status',
	'ABBCODES_ACTIVATED'				=> 'geactiveerd',
	'ABBCODES_DEACTIVATED'				=> 'deactiveerd',
	
));
?>