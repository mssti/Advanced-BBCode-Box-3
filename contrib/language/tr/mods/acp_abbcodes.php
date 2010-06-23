<?php
/**
* @package: phpBB3 :: Advanced BBCode box 3 -> language [tr][Turkish]
* @version: $Id: acp_abbcode.php, v 1.0.8 2008/03/31 03:01:00 leviatan21 Exp $
* @copyright: leviatan21 < info@mssti.com > (Gabriel) http://www.mssti.com/phpbb3/
* @license: http://opensource.org/licenses/gpl-license.php GNU Public License 
* @author: leviatan21 - http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=345763
* @translator: muiketi - muiketi@gmail.com
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
	'ACP_ABBCODES_EXPLAIN'				=> 'Burada sitenizdeki <strong>[ <a href="http://www.mssti.com/phpbb3" target="_blank">ABBC3</a> ]</strong> eklentisinin mevcut stillerini yönetebilirsiniz.<br/>You may alter existing styles, refresh, deactivate, reactivate. You can also see what a style will look like using the preview function. <br/><em>The current default style is noted by the presence of an asterisk (*). Also listed is the total user count for each style.</em>',
	
	'ABBCODES_DISABLE'					=> 'ABBC3',
	'ABBCODES_DISABLE_EXPLAIN'			=> '<strong>Advanced BBodes Box 3</strong> Aktif veya Pasif et, ve/veya standart butonları kullan.',
	'ABBCODES_BG'						=> 'Artalan rengi',
	'ABBCODES_BG_EXPLAIN'				=> 'İkon artalan resmini belirlemek için kullanılır.<br/>Siteniz artalan rengiyle uyumlu olması için <em>resim yok</em> seçeneğini seçiniz.',
	'ABBCODES_TAB'						=> 'Etiketler için ikon ayırıcı kullan',
	'ABBCODES_BOXRESIZE'				=> 'Yazım alanını boyutlandır',
	'ABBCODES_BOXRESIZE_EXPLAIN'		=> 'Yazım alanını boyutlandırma butonunu göster.',
	
	'ABBCODES_GREYBOX'					=> 'GreyBox &reg; kullan',
	'ABBCODES_GREYBOX_EXPLAIN'			=> 'GreyBox &reg; <em>küçük resim</em> ve <em>küçültülmüş resimleri</em> gerçek boyutlarında görüntülemenizi sağlayan bir foksiyondur. Eğer HAYIR seçeneğini işaretlerseniz resimler yeni bir pencerede açılır.',
	'ABBCODES_RESIZE'					=> 'Büyük resmi yeniden boyutlandırır (küçültür)',
	'ABBCODES_RESIZE_EXPLAIN'			=> 'Bu özellik eklenen resmin sayfa düzeninin bozmamasını sağlamaktadır.',
	'ABBCODES_MAX_IMAGE_SIZE'			=> 'Piksel cinsinden en fazla genişlik',
	'ABBCODES_RESIZE_METHOD'			=> 'Boyutlandırma Yöntemi',
	'ABBCODES_RESIZE_METHOD_EXPLAIN'	=> 'Resimlerin gerçek boyutlarında gösterilme şeklini seçiniz.',
	//	for translate :							   don't 		Yes			don't		Yes			don't			yes				don't		yes
	'ABBCODES_RESIZE_METHODS'			=> array( 'greybox' => 'grey box', 'enlarge' => 'büyüt', 'samewindow' => 'aynı pencerede', 'newwindow' => 'yeni pencerede'),
	
	'ABBCODES_MAX_IMAGE_SIZE_EXPLAIN'	=> 'Resim burada verilen boyutlardan büyük olursa yeniden boyutlandırlır.',
	'ABBCODES_MAX_THUMB_WIDTH'			=> 'Küçük resmin piksel cinsinden en fazla genişlik',
	'ABBCODES_MAX_THUMB_WIDTH_EXPLAIN'	=> 'Oluşturulmuş küçük resim burada belirtilen genişliği aşamaz.',
	
	'ABBCODES_CUSTOM_BBCODES'			=> 'Özel BBCode Etiketleri',
	'ABBCODES_CUSTOM_BBCODES_EXPLAIN'	=> 'Özel BBCode etiketlerini göster. This function enable the compatibility with other videos bbcodes like [youtube] and add your own bbcodes (if you have).',
	'ABBCODES_VIDEO_SIZE'				=> 'Video boyutları',
	'ABBCODES_VIDEO_SIZE_EXPLAIN'		=> 'Gönderilecek videolar için varsayılan boyutlar.',

));

$lang = array_merge($lang, array(
	'ABBCODES_SETINGS'					=> 'ABBC3 ayarları',
	'ABBCODES_SETINGS_EXPLAIN'			=> 'Burada temel <strong>ABBC3</strong> ayarlarını yapabilirsiniz. Aktif veya pasif, artalan ayarları gibi..',
	
	'ABBCODES_CONFIG'					=> 'ABBC3 bileşen ayarları',
	'ABBCODES_CONFIG_EXPLAIN'			=> 'Burada etiketlerin adlarını ve ikon resimlerini değiştirebilirsiniz,',
	
	'ABBCODES_NAME'						=> 'Etiket adı',
	'ABBCODES_TAG'						=> 'Etiket ikon resmi',
	'ABBCODES_ORDER'					=> 'Etiket sıralaması',
	'RESET_TO_DEFAULT'					=> 'Varsayılan ayarlara dön',
	'ABBCODES_BREAK_MOVER'				=> '<strong>Yeni Satır</strong>',
	'ABBCODES_DIVISION_MOVER'			=> '<strong>Dikey Hat</strong>',
	
	'ABBCODES_MOD_DISABLE'				=> 'Bu stil için <strong>ABBC3</strong> pasif halde.<br/>',
	'ABBCODES_STATUS'					=> 'durum',
	'ABBCODES_ACTIVATED'				=> 'aktifleştirildi',
	'ABBCODES_DEACTIVATED'				=> 'pasifleştirildi',
	
));
?>