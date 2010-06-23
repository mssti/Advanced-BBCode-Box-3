<?php
/**
* @package: phpBB3 :: Advanced BBCode box 3 -> language [en][English]
* @version: $Id: acp_abbcode.php, v 1.0.11 2008/10/11 11:10:08 leviatan21 Exp $
* @copyright: leviatan21 < info@mssti.com > (Gabriel) http://www.mssti.com/phpbb3/
* @license: http://opensource.org/licenses/gpl-license.php GNU Public License 
* @author: leviatan21 - http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=345763
* @translator: muiketi - http://www.phpbbturkiye.net/muiketi-u666.html
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

// This lines are the same as root/language/en/acp/common.php
$lang = array_merge($lang, array(
	'ACP_ABBCODES'				=> 'Advanced BBcodes Box 3',
	'ACP_ABBC3_SETTINGS'		=> 'ABBC3 Ayarları',
	'ACP_ABBC3_BBCODES'			=> 'ABBC3 BBCode\'lar',
	'LOG_CONFIG_ABBCODES'		=> '<strong>Gelişmiş ABBC3 ayarları</strong>>',
	'LOG_CONFIG_ABBCODES_ERROR'	=> '<strong>ABBC3 ayarları kaydedilirken bir hata oluştu.</strong>',
	'LOG_CONFIG_ADD'			=> '<strong>Pano özelliklerine eklendi</strong><br />» %s',
	'LOG_DATABASE_SCHEMA'		=> '<strong>Veritabanı şeması güncellendi</strong><br />» %s',
	'LOG_DELETE_ABBCODES'		=> '<strong>ABBC3 veritbanından silindi</strong>',
));

// abbc3_details
$lang = array_merge($lang, array(
	'ACP_ABBCODES'						=> 'Advanced BBcodes Box 3',
	'ACP_ABBCODES_EXPLAIN'				=> 'Here you can manage the available styles for <strong>[ <a href="http://www.mssti.com/phpbb3" target="_blank">ABBC3</a> ]</strong> on your board.<br />You may alter existing styles, refresh, deactivate, reactivate. You can also see what a style will look like using the preview function. <br /><em>The current default style is noted by the presence of an asterisk (*). Also listed is the total user count for each style.</em>',

	'ABBCODES_DISABLE'					=> 'ABBC3',
	'ABBCODES_DISABLE_EXPLAIN'			=> 'Enable or disable <strong>Advanced BBodes Box 3</strong> to users, and/or use standard phpbb3 posting buttons.',
	'ABBCODES_BG'						=> 'Background image',
	'ABBCODES_BG_EXPLAIN'				=> 'This will set the back ground image for icons.<br />Set to <em>no image</em> for fit to your style.',
	'ABBCODES_TAB'						=> 'Display icon division for tags',
	'ABBCODES_BOXRESIZE'				=> 'Resize posting textarea',
	'ABBCODES_BOXRESIZE_EXPLAIN'		=> 'Display buttons to resize posting textarea.',

	'ABBCODES_RESIZE'					=> 'Büyük resimleri küçültür.',
	'ABBCODES_RESIZE_EXPLAIN'			=> '[img] kodu ile verilen eklerin sayfa düzenini bozmamasını sağlar.',
	'ABBCODES_JAVASCRIPT_EXPLAIN'		=> '<strong>Not : </strong> <em>AdvancedBox JS</em> resimleri göstermye yarayan bir javascripttir.<br /><em>contrib</em> klasöründe <strong>ABBC3</strong>\'un Highslide JS | LiteBox | GreyBox ile nasıl kullanılabileceğine dair ayrıntıları bulabilirsiniz.',
	'ABBCODES_RESIZE_METHOD'			=> 'Küçültme metodu',
	'ABBCODES_RESIZE_METHOD_EXPLAIN'	=> 'Resmi büyütmek için kullanılamasını istediğiniz metodu seçiniz..',
##	For translate :                                Don't            Yes               Don't        Yes             Don't        Yes        Don't           yes            Don't          yes           Don't     yes
	'ABBCODES_RESIZE_METHODS'			=> array( 'AdvancedBox' => 'AdvancedBox JS', 'pop-up' => 'Pop Up pencere', 'enlarge' => 'Büyüt', 'samewindow' => 'Aynı pencerede', 'newwindow' => 'Yeni Pencerede', 'none' => 'Yeniden boyutlandırma'),

	'ABBCODES_MAX_IMAGE_WIDTH'			=> 'Piksel cinsinden en büyük resim genişliği',
	'ABBCODES_MAX_IMAGE_WIDTH_EXPLAIN'	=> 'Resim belirttiğiniz genişliği aşarsa yeniden boyutlandırılacaktır.',
	'ABBCODES_MAX_IMAGE_HEIGHT'			=> 'Piksel cinsinden en büyük resim yüksekliği',
	'ABBCODES_MAX_IMAGE_HEIGHT_EXPLAIN'	=> 'Resim belirttiğiniz yüksekliği aşarsa yeniden boyutlandırılacaktır.',
	'ABBCODES_RESIZE_SIGNATURE'			=> 'İmzalardaki resimleri küçült',
	'ABBCODES_RESIZE_SIGNATURE_EXPLAIN'	=> 'İmzalardaki resimler belirttiğiniz boyutları aşarsa yeniden boyutlandırılacaktır.',
	'ABBCODES_MAX_THUMB_WIDTH'			=> 'Piksel cinsinden en büyük thumbnail boyutu',
	'ABBCODES_MAX_THUMB_WIDTH_EXPLAIN'	=> 'Oluşturulacak thumbnailler burada belirttiğiniz boyutu aşmayacaktır.',

	'ABBCODES_VIDEO_SIZE'				=> 'Video boyutları',
	'ABBCODES_VIDEO_SIZE_EXPLAIN'		=> 'Eklenmiş videolar için varsayılan genişlik ve yükseklik.',

	'ABBCODES_UPLOAD_EXTENSION'			=> 'Eklenti ayarları',
	'ABBCODES_UPLOAD_EXTENSION_EXPLAIN'	=> 'İzin verilen eklentileri giriniz. Birden çok eklenti girecekseniz virgül ile ayırınız.<br /><strong>Not : </strong> Bu ayarlar eklenti ayarlarınızın üzerine yazılacaktır.',
));

// bbcodes_edit
$lang = array_merge($lang, array(
	'ABBCODES_SETINGS'					=> 'ABBC3 ayarları',
	'ABBCODES_SETINGS_EXPLAIN'			=> 'Burada temel <strong>ABBC3</strong> ayarlarını yapabilirsiniz. Aktif veya pasif, artalan ayarları gibi..',

	'ABBCODES_EDIT'						=> 'ABBC3 bbcode değiştir',
	'ABBCODES_EDIT_EXPLAIN'				=> 'Burada her bir bbcode\'un resmini, nerede görüntüleneceğini ve kimlerin kullanabileceğini belirleyebilirsiniz.',

	'ABBCODES_CONFIG'					=> 'ABBC3 bileşen ayarları',
	'ABBCODES_CONFIG_EXPLAIN'			=> 'Burada BBCode\'ların sıralamasını ve ikonlarını düeğiştirebilirsiniz',
	'ABBCODES_GROUPS_EXPLAIN'			=> '<strong>Grup Yönetimi : </strong>Hiçbir grup seçilmemişse tüm gruplar kullanabilir.<br />Birden fazla grubu seçebilmek için CTRL tuşunu kullanınız. Çoklu grup seçimi yaparken CTRL tuşunu kullanmazsanız diğer seçili gruplar seçimden kaldırılır.',

	'ABBCODES_NAME'						=> 'Etiket(bbcode) adı',
	'ABBCODES_TAG'						=> 'Etiket resmi',
	'ABBCODES_ORDER'					=> 'Etiket sırası',

	'ABBCODES_BREAK_MOVER'				=> '<strong><i>Yeni Satır</i></strong>',
	'ABBCODES_DIVISION_MOVER'			=> '<strong><i>Dikey Hat</i></strong>',
	'ABBCODES_ADD_DIVISION'				=> 'Yeni bölüm ekle',
	'ABBCODES_ADD_BREAK'				=> 'Yeni satır ekle',
	'ABBCODES_SYNC'						=> 'Senkronize sırası',
	'ABBCODES_RESYNC_SUCCESS'			=> 'BBCode sırası yeniden senkronize edildi.',

	'ABBCODES_MOD_DISABLE'				=> '<strong>ABBC3</strong> pasif halde.<br/>',
	'ABBCODES_STATUS'					=> 'durum',
	'ABBCODES_ACTIVATED'				=> 'aktifleştirildi',
	'ABBCODES_DEACTIVATED'				=> 'pasifleştirildi',
));

// Installer 
$lang = array_merge($lang, array(
	// Main
	'INSTALLER_TITLE'					=> 'Advanced BBcodes Box 3',
	'INSTALLER_VERSION'					=> ' sürüm : %1$s',

	'INSTALLER_INTRO'					=> 'Giriş',
	'INSTALLER_INTRO_WELCOME'			=> '<strong>%1$s</strong> sürüm kurulumuna hoşgeldiniz',
	'INSTALLER_INTRO_WELCOME_NOTE'		=> 'Lütfen yapmak istediğiniz işlemi seçiniz.',
	'INSTALLER_INSTALL_MENU'			=> 'Menü',
	'INSTALLER_EXTRA_MENU'				=> 'Ekstralar',

	// Install
	'INSTALLER_INSTALL'					=> 'Kurulum',
	'INSTALLER_INSTALL_WELCOME'			=> '<strong>ABBC3</strong> kurulum menüsüne hoşgeldiniz',
	'INSTALLER_INSTALL_WELCOME_NOTE'	=> 'Bu seçimle önceki sürümlere ait veritabanı bilgileri silinecektir.',
	'INSTALLER_INSTALL_SUCCESSFUL'		=> 'ABBC3 kurulumu başarıyla tamamlandı.',
	'INSTALLER_INSTALL_UNSUCCESSFUL'	=> 'ABBC3 kurulumu tamamlanamadı.',
	'INSTALLER_INSTALL_VERSION'			=> '%1$s sürümünü kur',
	'INSTALLER_INSTALL_END'				=> '%1$s version : %2$s başarıyla kuruldu. <br /> <p> Şimdi<a href="../index.php">panonuza</a> gidip herşeyin doğru çalışıp çalışmadığını kontrol edebilirsiniz. <br /><strong>install_abbc3</strong> kurulum dizinini silmeyi unutmayınız</p>',

	// Update
	'INSTALLER_UPDATE'					=> 'Güncelle',
	'INSTALLER_UPDATE_WELCOME'			=> '<strong>ABBC3</strong> güncelleme menüsüne hoşgeldiniz',
	'INSTALLER_UPDATE_WELCOME_NOTE'		=> 'Güncelleme veya yükseltme yapmanız durumunda eklentini önceki sürümlerine ait içerik silinecektir.',
	'INSTALLER_UPDATE_SUCCESSFUL'		=> 'ABBC3 güncellemesi başarılı bir şekilde yapıldı.',
	'INSTALLER_UPDATE_UNSUCCESSFUL'		=> 'ABBC3 güncellemesi yapılamadı.',
	'INSTALLER_UPDATE_VERSION'			=> 'Yükseltilen versiyon : %1$s',
	'INSTALLER_UPDATE_END'				=> 'Please be advised that some BBCodes might <strong>not</strong> display correctly due to the changes introduced in BBCodes, if you experience problems please run <strong>Extras » Re-parse</strong> Steps',

	// Uninstall
	'INSTALLER_DELETE'					=> 'Kaldır',
	'INSTALLER_DELETE_WELCOME'			=> '<strong>ABBC3</strong> silme menüsüne hoşgeldiniz.',
	'INSTALLER_DELETE_WELCOME_NOTE'		=> 'Bu seçimle veritabanındaki ilgili tüm SQL sorguları silinecektir.',
	'INSTALLER_DELETE_VERSION'			=> '%1$s nolu sürümü kaldır',
	'INSTALLER_DELETE_NOTE'				=> 'Kaldır',
	'INSTALLER_DELETE_SUCCESSFUL'		=> '%1$s vsürüm : %2$s veritabanınızdan başarıyla kaldırıldı.<br />Şimdi tüm dosyaları siliniz',
	'INSTALLER_DELETE_UNSUCCESSFUL'		=> '%1$s sürüm :%2$s kaldırılamadı.',

	// Re-parse
	'INSTALLER_REPARSE'					=> 'Re-parse',
	'INSTALLER_REPARSE_WELCOME'			=> 'Re-parse menüsüne hoşgeldiniz',
	'INSTALLER_REPARSE_WELCOME_NOTE'	=> '<strong>Re-parse</strong> işlemini tek tıkla yapabilirsiniz.',
	'INSTALLER_REPARSE_NOTE'			=> 'Olası hatalardan dolayı sorumluluk kabul etmiyorum (eklenti yazarı).',
	'INSTALLER_REPARSE_WARNING'			=> 'Olası bir hataya karşı <i>kullanıcılar</i>, <i>mesajlar</i> ve <i>özel mesajlar</i> tablolarının yedeğini alınız.',
	'INSTALLER_REPARSE_POST'			=> 'İleti içeriğini re-parse et',
	'INSTALLER_REPARSE_SIG'				=> 'İmzaları re-parse et',
	'INSTALLER_REPARSE_PM'				=> 'Özel mesajları re-parse et',
	'INSTALLER_REPARSE_SUCCESSFUL'		=> '%1$s başarıyla tamamlandı.',
	'INSTALLER_REPARSE_UNSUCCESSFUL'	=> '%1$s yapılamadı.',
	
	'STEP_PERCENT_COMPLETED'			=> 'Adım <strong>%d</strong> / <strong>%d</strong>',
	'INSTALLER_NOTE'					=> '<strong>Not :</strong> Bu eklentiyi kurmadan önce değişlik yapacağınız dosyaların ve veritabanınızın bir yedeğini alınız!',
	'INSTALLER_DELETE_INFORMATION'		=> 'Kurulu ABBC3 bulunamadı !.',
	'INSTALLER_NEEDS_FOUNDER'			=> 'Kurucu kişi olarak giriş yapmalısınız.',
	'MISSING_PARENT_MODULE'				=> '#%1$s modülü "%2$s" modülünün ana modülü olarak tanımlanamadı.',
	'WARNING'							=> 'Uyarı',
));

?>