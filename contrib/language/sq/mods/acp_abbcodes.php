<?php
/**
* @package: phpBB3 :: Advanced BBCode box 3 -> language [sq][Shqip]
* @version: $Id: acp_abbcode.php, v 1.0.9 2008/05/01 05:01:00 leviatan21 Exp $
* @copyright: leviatan21 < info@mssti.com > (Gabriel) http://www.mssti.com/phpbb3/
* @license: http://opensource.org/licenses/gpl-license.php GNU Public License 
* @author: leviatan21 - http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=345763
* @translator: CrossoverX
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
	'ACP_ABBCODES_EXPLAIN'				=> 'Ketu ju mund te manaxhoni stilin per e<strong>[ <a href="http://www.mssti.com/phpbb3" target="_blank">ABBC3</a> ]</strong> ne bordin tuaj.<br/>Ju mund te ndryshoni stilin ekzistues, rifreskoni, disaktivoni dhe riaktizoni impostimet. Ju mund te shikoni dhe si duket nje stile me nje funskion te meparshem. <br/><em>Versioni i stilit te preimpostuar eshte i shenuar me nje yll (*). Gjithashtu eshte e shenuar nr totali i perdorur nga anetaret.</em>',
	
	'ABBCODES_DISABLE'					=> 'ABBC3',
	'ABBCODES_DISABLE_EXPLAIN'			=> 'Aktivizo ose disaktivizo <strong>Advanced BBodes Box 3</strong> anetareve, dhe/ose perdor standartin e butonave per postimin ne phpbb3.',
	'ABBCODES_BG'						=> 'Imazhi sfondit',
	'ABBCODES_BG_EXPLAIN'				=> 'Kjo do te impostoj sfondin per ikonat.<br/>Impostoje ne <em>asnje Imazh</em> per ta pershtatur me stilin tuaj.',
	'ABBCODES_TAB'						=> 'Shfaq ikonen e ndare nga tags',
	'ABBCODES_BOXRESIZE'				=> 'Ridimesiono hapesiren e tekstit',
	'ABBCODES_BOXRESIZE_EXPLAIN'		=> 'Shfaq butonat per ridimesionimin e hapesires se tekstit.',
	
	'ABBCODES_GREYBOX'					=> 'Perdor GreyBox &reg;',
	'ABBCODES_GREYBOX_EXPLAIN'			=> 'GreyBox &reg; eshte nje funksion qe perdoret per te shfaqur <em>thumbnail</em> dhe <em>ridimesionuar imazhet</em> ne permasat reale. Nqs JO, nje dritare re do te hapet.',
	'ABBCODES_RESIZE'					=> 'Zvogelo imazhet e medhaja',
	'ABBCODES_RESIZE_EXPLAIN'			=> 'Kjo do te rregulloj ose nxjerre [img] bbcode kur dikush do te shtoje nje imazh teper te madhe ne dimesione sesa hapesira e tekstit.',
	'ABBCODES_MAX_IMAGE_SIZE'			=> 'Maksimumi imazhit ne pixel per gjeresi',
	'ABBCODES_RESIZE_METHOD'			=> 'Menyra e ridimesionimit',
	'ABBCODES_RESIZE_METHOD_EXPLAIN'	=> 'Zgjithe si te shfaqesh imazhin ne permasat reale.',
	//	for translate :						   don't 		Yes			don't		Yes			don't			yes				don't		yes
	'ABBCODES_RESIZE_METHODS'			=> array( 'greybox' => 'grey box', 'enlarge' => 'zmadhoje', 'samewindow' => 'dritare njejte', 'newwindow' => 'dritare re'),
	
	'ABBCODES_MAX_IMAGE_SIZE_EXPLAIN'	=> 'Imazhi do te ridimesionohet sipas gjeresise impostuar ketu.',
	'ABBCODES_MAX_THUMB_WIDTH'			=> 'Gjeresia maksimale per thumbnail ne pixel',
	'ABBCODES_MAX_THUMB_WIDTH_EXPLAIN'	=> 'Nje thumbnail i gjeneruar nuk do e kaloj gjeresin e impostuar ketu.',
	
	'ABBCODES_CUSTOM_BBCODES'			=> 'bbcodes personalizuara',
	'ABBCODES_CUSTOM_BBCODES_EXPLAIN'	=> 'Shfaq ikonat e bbcode te personalizyara. Ky funksion aktivizon pershtatjen me videot e tjera bbcodes si [youtube] dhe shton nje bbcodes te ri tuajin (nqs e keni nje).',
	'ABBCODES_VIDEO_SIZE'				=> 'Dimesioni Video',
	'ABBCODES_VIDEO_SIZE_EXPLAIN'		=> 'Preimpostimi per gjeresine dhe gjatesine e videove.',

));

$lang = array_merge($lang, array(
	'ABBCODES_SETINGS'					=> 'Impostimet ABBC3',
	'ABBCODES_SETINGS_EXPLAIN'			=> 'Ketu ju mund te percaktoni operacionet baze per <strong>ABBC3</strong>, aktivizim apo disaktivizim dhe preimpostime te tjera mbi sfondin dhe vlera.',
	
	'ABBCODES_CONFIG'					=> 'Konfigurimi komponenteve ABBC3',
	'ABBCODES_CONFIG_EXPLAIN'			=> 'Nga kjo faqe ju mund te ndryshoni pozicionet relative per iconave ne postim ose tipin,',
	
	'ABBCODES_NAME'						=> 'Emri Tag',
	'ABBCODES_TAG'						=> 'Ikon imazhit Tag',
	'ABBCODES_ORDER'					=> 'Radhitja Tag',
	'RESET_TO_DEFAULT'					=> 'Reseto ne default',
	'ABBCODES_BREAK_MOVER'				=> '<strong><i>Line break</i></strong>',
	'ABBCODES_DIVISION_MOVER'			=> '<strong><i>Division</i></strong>',
	
	'ABBCODES_MOD_DISABLE'				=> '<strong>Advanced BBcodes Box 3</strong> eshte disaktive.<br/>',
	'ABBCODES_STATUS'					=> 'statusi',
	'ABBCODES_ACTIVATED'				=> 'aktivizuar',
	'ABBCODES_DEACTIVATED'				=> 'disaktivizuar',
	
));
?>