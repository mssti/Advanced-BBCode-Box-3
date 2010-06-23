<?php
/**
* @package: phpBB3 :: Advanced BBCode box 3 -> language [tr][Turkish]
* @version: $Id: abbcode.php, v 1.0.8 2008/03/31 03:01:00 leviatan21 Exp $
* @copyright: leviatan21 < info@mssti.com > (Gabriel) http://www.mssti.com/phpbb3/
* @license: http://opensource.org/licenses/gpl-license.php GNU Public License 
* @author: leviatan21 - http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=345763
* @tranlator : muiketi - muiketi@gmail.com
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
	'ABBC3_HELP_TITLE'			=> 'Advanced BBCode box 3 :: Yardım Sayfası',
	'ABBC3_HELP_DESC'			=> 'Tanım',
	'ABBC3_HELP_WRITE'			=> 'Siz yazıyorsunuz',
	'ABBC3_HELP_VIEW'			=> 'Biz gösteriyoruz',
	'ABBC3_HELP_ABOUT'			=> 'Advanced BBCode Box 3 <a href="http://www.mssti.com/phpbb3">mssti</a>',
	'ABBC3_HELP_ALT'			=> 'Advanced BBCode Box 3 (aka ABBC3)',
	
// Image Resizer JS - Start
 	'ABBC3_RESIZE_SMALL'		=> 'Resmi orijinal boyutlarında görmek için tıklayınız.',
 	'ABBC3_RESIZE_FILESIZE'		=> 'Bu resim küçültülmüştür. Orijinal boyutta görmek için tıklayınız. Orijinal dosya boyutları %1$sx%2$s piksel ve %3$sKB.',
 	'ABBC3_RESIZE_NOFILESIZE'	=> 'Bu resim küçültülmüştür. Orijinal boyutta görmek için tıklayınız. Orijinal dosya boyutları %1$sx%2$s.',
 	'ABBC3_RESIZE_FULLSIZE'		=> 'Küçük resmi görmek için burayı t�klay�n�z.',
	
// Text to be applied to the helpline & mouseover & help page & Wizard texts
	'BBCODE_STYLES_TIP'			=> 'Kullanım: Seçili metine uygulanacak biçimlendirme açıklamasını buradan görebilirsiniz.',

	'ABBC3_ERROR'				=> 'Hata : ',
	'ABBC3_ERROR_TAG'			=> 'Etiket kullanımında beklenmeyen hata : ',

	'ABBC3_ID'					=> 'Tanımlayıcı giriniz :',
	'ABBC3_NOID'				=> 'Tanımlayıcıyı belirtmediniz',
	'ABBC3_LINK'				=> 'Linki giriniz ',
	'ABBC3_DESC'				=> 'Açıklama giriniz ',
	'ABBC3_NAME'				=> 'Açıklama',
	'ABBC3_NOLINK'				=> 'Link belirtmediniz. ',
	'ABBC3_NODESC'				=> 'Herhangi bir açıklama belirtmediniz. ',
	'ABBC3_WIDTH'				=> 'Genişliği giriniz',
	'ABBC3_WIDTH_NOTE'			=> 'Not: Yüzde cinsinden değer belirtebilirsiniz.',
	'ABBC3_NOWIDTH'				=> 'Genişliği belirtmediniz',
	'ABBC3_HEIGHT'				=> 'Yüksekliği giriniz',
	'ABBC3_HEIGHT_NOTE'			=> 'Not: Yüzde cinsinden değer belirtebilirsiniz.',
	'ABBC3_NOHEIGHT'			=> 'Yüksekliği belirtmediniz',
	
	'ABBC3_NOTE'				=> 'Not',
 	'ABBC3_EXAMPLE'				=> 'Örnek',
 	'ABBC3_EXAMPLES'			=> 'Örnekler',
	
// bbcodes texts	
	// Font Type Dropdown
	'ABBC3_FONTTYPE_MOVER'		=> 'Yazı tipi',
	'ABBC3_FONTTYPE_TIP'		=> '[font=Comic Sans MS]metin[/font]',
 	'ABBC3_FONTTYPE_NOTE'		=> 'Not: İstediğiniz bir yazı tipini kullanabilirsiniz.',
	'ABBC3_FONTTYPE_VIEW'		=> '<span style="font-family:Comic Sans MS">Bu basit bir metindir</span>',
	
	// Font Size Dropdown
	'ABBC3_FONT_GIANT'			=> 'Devasa',
	'ABBC3_FONTSIZE_MOVER'		=> 'Yazı boyutu',
	'ABBC3_FONTSIZE_TIP'		=> '[size=150]text large[/size]',
	'ABBC3_FONTSIZE_NOTE'		=> 'Not: Değerler yüzde cinsinden alınacaktır.',
	'ABBC3_FONTSIZE_VIEW'		=> '<span style="font-size: 150%; line-height: 116%;">Bu basit bir metindir</span>',
	
	// Highlight Font Color Dropdown
	'ABBC3_FONTHILI_MOVER'		=> 'Artalanı renklendir',
	'ABBC3_FONTHILI_TIP'		=> '[highlight=yellow]metin[/highlight]',
	'ABBC3_FONTHILI_NOTE'		=> 'Not: Renk değerini color=#FF0000 veya (color=red olarak belirtebilirsiniz)',
	'ABBC3_FONTHILI_VIEW'		=> '<span style="background-color: yellow;">Bu basit bir metindir</span>',
	
	// Font Color Dropdown
	'ABBC3_FONTCOLOR_MOVER'		=> 'Yazı rengi',
	'ABBC3_FONTCOLOR_TIP'		=> '[color=red]metin[/color]',
	'ABBC3_FONTCOLOR_NOTE'		=> 'Not: Renk değerini color=#FF0000 veya (color=red olarak belirtebilirsiniz)',
	'ABBC3_FONTCOLOR_VIEW'		=> '<span style="color:red">Bu basit bir metindir</span>',
	
	// Cut selected text
	'ABBC3_CUT_MOVER'			=> 'Seçili metni sil',
	// Copy selected text
	'ABBC3_COPY_MOVER'			=> 'Seçili metni kopyala',
	// Paste previously copy text
	'ABBC3_PASTE_MOVER'			=> 'Kopyalanan metni yapıştır',
	'ABBC3_PASTE_ERROR'			=> 'Lütfen önce bir metin seçiniz daha sonra yapıştırınız',
	// Remove BBCode (Removes all BBCode tags from selected text)
	'ABBC3_PLAIN_MOVER'			=> 'Seçili metindeki BBCodeları kaldır',
	'ABBC3_NOSELECT_ERROR'		=> 'Lütfen önce metni seçiniz ',
	
	// Code
	'ABBC3_CODE_MOVER'			=> 'Kod',
	'ABBC3_CODE_TIP'			=> '[code]kod[/code]',
	'ABBC3_CODE_VIEW'			=> '<dl class="codebox"><dt>'. $lang['CODE'] .': <a href="#" onclick="selectCode(this); return false;">'. $lang['SELECT_ALL_CODE'] .'</a></dt><dd><code>Bu basit bir metindir</code></dd></dl>',
	
	// Quote
	'ABBC3_QUOTE_MOVER'			=> 'Alıntı',
	'ABBC3_QUOTE_TIP'			=> '[quote]metin[/quote] or [quote=\"member\"]metin[/quote]',
	'ABBC3_QUOTE_VIEW'			=> '<blockquote><div><cite>member '. $lang['WROTE'] .':</cite>Bu basit bir metindir</div></blockquote>',
	
	// Spoiler
	'ABBC3_SPOIL_MOVER'			=> 'Dipnot metin',
	'ABBC3_SPOIL_TIP'			=> '[spoil]metin[/spoil]',
	'ABBC3_SPOIL_VIEW'			=> '<div class="spoilwrapper"><div class="spoiltitle"><input class="btnspoil" type="button" value="Dipnotu Göster" onClick="javascript:if (this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display != \'\') { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'\'; this.innerText = \'\'; this.value = \'Dipnotu Gizle\'; } else { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'none\'; this.innerText = \'\'; this.value = \'Dipnotu Göster\'; }" onfocus="this.blur();"></div><div class="spoilcontent"><div style="display: none;">Bu basit bir metindir</div></div></div>',
	'SPOILER_SHOW'				=> 'Dipnotu Göster',
	'SPOILER_HIDE'				=> 'Dipnotu Gizle',
	
	// Hide tag
	'ABBC3_HIDE_MOVER'			=> 'Gizli içerik',
	'ABBC3_HIDE_TIP'			=> '[hide]metin[/hide]',
	'ABBC3_HIDE_VIEW'			=> '<dl class="hidebox"><dt class="hide">Gizli İçerik: Açık</dt><dd>Gizli içeriği görebilmeniz için konuya cevap yazmanız gerekmektedir.</dd></dl>',
	
	// Moderator tag
	'ABBC3_MODERATOR_MOVER'		=> 'Yetkili mesajı',
	'ABBC3_MODERATOR_TIP'		=> '[mod=name]metin[/mod]',
	'ABBC3_MODERATOR_VIEW'		=> '<table id="ModTable" width="100%" cellspacing="5" cellpadding="0" border="0" align="center"><tr><td class="row1" rowspan="2" align="middle" vAlign="center" width="1%"><span class="exclamation" title="Moderator warning" style="font-size:25px">&nbsp;!&nbsp;</span></td><td class="row2"><span class="genmed"><b>Mod Name:</b></span></td></tr><tr><td>Bu basit bir metindir</td></tr></table>',
	
	// Off topic tag
	'ABBC3_OFFTOPIC'			=> 'Konudışı',
	'ABBC3_OFFTOPIC_MOVER'		=> 'Konudışı metnini giriniz',
	'ABBC3_OFFTOPIC_TIP'		=> '[offtopic]metin[/offtopic]',
	'ABBC3_OFFTOPIC_VIEW'		=> '<i><b><font color="#114499">Konudışı: </font></b><br/><font color="#2277DD">Bu basit bir metindir</font></i>',
	
	// NFO
	'ABBC3_NFO_MOVER'			=> 'NFO belgesi (Internet Exploler\'da daha iyi)',
	'ABBC3_NFO_TIP'				=> '[nfo]NFO belgesi[/nfo]',
	'ABBC3_NFO_VIEW'			=> '<table cellspacing="0" cellpadding="0" border="0" ><tr><td><span class="genmed"><b>NFO:</b></span></td></tr><tr><td class="nfo">' . str_replace(" ", "&nbsp;", '    � ���� �۱��                                  ���������������������  �   �� ���') . '</td></tr></table>',
	
	// Justify Align
	'ABBC3_JUSTIFY_MOVER'		=> 'İki yana yaslanmış metin',
	'ABBC3_JUSTIFY_TIP'			=> '[align=justify]metin[/align]',
	'ABBC3_JUSTIFY_VIEW'		=> '<div style="text-align:justify">Bu basit bir metindir</div>',
	
	// Right Align
	'ABBC3_RIGHT_MOVER'			=> 'Sağa dayalı metin',
	'ABBC3_RIGHT_TIP'			=> '[align=right]metin[/align]',
	'ABBC3_RIGHT_VIEW'			=> '<div style="text-align:right">Bu basit bir metindir</div>',
	
	// Center Align
	'ABBC3_CENTER_MOVER'		=> 'Ortalanmış metin',
	'ABBC3_CENTER_TIP'			=> '[align=center]metin[/align]',
	'ABBC3_CENTER_VIEW'			=> '<div style="text-align:center">Bu basit bir metindir</div>',
	
	// Left Align
	'ABBC3_LEFT_MOVER'			=> 'Sola dayalı metin',
	'ABBC3_LEFT_TIP'			=> '[align=left]metin[/align]',
	'ABBC3_LEFT_VIEW'			=> '<div style="text-left:justify">Bu basit bir metindir</div>',
	
	// Preformat
	'ABBC3_PRE_MOVER'			=> 'Biçimlendirilmemiş metin',
	'ABBC3_PRE_TIP'				=> '[pre]metin[/pre]',
	'ABBC3_PRE_VIEW'			=> '<pre>Bu basit bir metindir</pre>',
	
	// Tab
	'ABBC3_TAB_MOVER'			=> 'Creates a normal indent',
	'ABBC3_TAB_TIP'				=> '[tab=nn]',
	'ABBC3_TAB_NOTE'			=> 'Enter a number that will be a margin measured in pixels.',
	'ABBC3_TAB_VIEW'			=> '<span style="margin-left:20px;"></span>This is a sample text',
	
	// Superscript
	'ABBC3_SUP_MOVER'			=> 'Yazıyı üst-indis olarak göster',
	'ABBC3_SUP_TIP'				=> '[sup]metin[/sup]',
	'ABBC3_SUP_VIEW'			=> 'Bu basit <sup>bir metindir</sup>',
	
	// Subscript
	'ABBC3_SUB_MOVER'			=> 'Yazıyı alt-indis olarak göster',
	'ABBC3_SUB_TIP'				=> '[sub]metin[/sub]',
	'ABBC3_SUB_VIEW'			=> 'Bu basit <sub>bir metindir</sub>',

	// Bold
	'ABBC3_BOLD_MOVER'			=> 'Kalın metin',
	'ABBC3_BOLD_TIP'			=> '[b]metin[/b]',
	'ABBC3_BOLD_VIEW'			=> '<strong>Bu basit bir metindir</strong>',
	
	// Italic
	'ABBC3_ITALIC_MOVER'		=> 'Eğik metin',
	'ABBC3_ITALIC_TIP'			=> '[i]metin[/i]',
	'ABBC3_ITALIC_VIEW'			=> '<em>Bu basit bir metindir</em>',
	
	// Underline
	'ABBC3_UNDERLINE_MOVER'		=> 'Altı çizili metin',
	'ABBC3_UNDERLINE_TIP'		=> '[u]metin[/u]',
	'ABBC3_UNDERLINE_VIEW'		=> '<span style="text-decoration: underline">Bu basit bir metindir</span>',
	
	// Strikethrough
	'ABBC3_STRIKE_MOVER'		=> 'Üstü çizili metin',
	'ABBC3_STRIKE_TIP'			=> '[s]metin[/s]',
	'ABBC3_STRIKE_VIEW'			=> '<span style="text-decoration: line-through;">Bu basit bir metindir</span>',
	
	// Text Fade
	'ABBC3_FADE_MOVER'			=> 'Soluklaşan metin',
	'ABBC3_FADE_TIP'			=> '[fade]metin[/fade]',
	'ABBC3_FADE_VIEW'			=> '<span class="fade_link">Bu basit bir metindir</span> <script type="text/javascript">fade_ontimer()</script>',
	
	// Text Gradient
	'ABBC3_GRAD_MOVER'			=> 'Rengarenk metin',
	'ABBC3_GRAD_TIP'			=> '',
	'ABBC3_GRAD_VIEW'			=> '<span style="color: #FF0000">B</span><span style="color: #F2000D">u</span> <span style="color: #D90026">b</span><span style="color: #CC0033">a</span><span style="color: #BF0040">s</span><span style="color: #B3004D">i</span><span style="color: #A60059">t</span> <span style="color: #8C0073">b</span><span style="color: #800080">i</span><span style="color: #73008C">r</span> <span style="color: #5900A6">m</span><span style="color: #4D00B3">e</span><span style="color: #4000BF">t</span><span style="color: #3300CC">i</span><span style="color: #2600D9">n</span><span style="color: #1A00E6">d</span><span style="color: #0D00F2">i</span><span style="color: #0000FF">r</span>',
	'ABBC3_GRAD_MIN_ERROR'		=> 'Lütfen önce metni seçiniz : ',
	'ABBC3_GRAD_MAX_ERROR'		=> 'Sadece 120 karakter ve altı : ',
	
	// Glow text
	'ABBC3_GLOW_MOVER'			=> 'Kızarık metin (Sadece Internet Exploler)',
	'ABBC3_GLOW_TIP'			=> '[glow=(color)]metin[/glow]',
	'ABBC3_GLOW_VIEW'			=> '<div style="filter:Glow(color=red,strength=4);color:#ffffff;height:110%">Bu basit bir metindir</div>',
	
	// Shadow text
	'ABBC3_SHADOW_MOVER'		=> 'Gölgeli metin (Sadece Internet Exploler)',
	'ABBC3_SHADOW_TIP'			=> '[shadow=(color)]metin[/shadow]',
	'ABBC3_SHADOW_VIEW'			=> '<div style="filter:shadow(color=black,strength=4);color:blue;height:110%">Bu basit bir metindir</div>',
	
	// Dropshadow text
	'ABBC3_DROPSHADOW_MOVER'	=> 'Dropshadow metin (Sadece Internet Exploler)',
	'ABBC3_DROPSHADOW_TIP'		=> '[dropshadow=(color)]metin[/dropshadow]',
	'ABBC3_DROPSHADOW_VIEW'		=> '<div style="filter:dropshadow(color=#999999,strength=4);color:blue;height:110%">Bu basit bir metindir</div>',
	
	// Blur text
	'ABBC3_BLUR_MOVER'			=> 'Bulanık metin (Sadece Internet Exploler)',
	'ABBC3_BLUR_TIP'			=> '[blur=(color)]metin[/blur]',
	'ABBC3_BLUR_VIEW'			=> '<div style="filter:Blur(strength=7);color:blue;height:110%">Bu basit bir metindir</div>',
	
	// Wave text
	'ABBC3_WAVE_MOVER'			=> 'Dalgalı metin (Sadece Internet Exploler)',
	'ABBC3_WAVE_TIP'			=> '[wave=(color)]metin[/wave]',
	'ABBC3_WAVE_VIEW'			=> '<div style="filter:Wave(strength=2);color:blue;height:110%">Bu basit bir metindir</div>',

	// Unordered List
	'ABBC3_LISTB_MOVER'			=> 'Sırasız liste',
	'ABBC3_LISTB_TIP'			=> '[list]metin[/list]',
	'ABBC3_LISTB_NOTE'			=> 'Not: [*] kullanarak yeni liste öğesi oluşturabilirsiniz',
	'ABBC3_LISTB_VIEW'			=> '<ul><li>Liste Öğesi 1</li><li>Liste Öğesi 2</li><li>Liste Öğesi 3</li></ul>',
	
	// Ordered List
	'ABBC3_LISTO_MOVER'			=> 'Sıralı liste',
	'ABBC3_LISTO_TIP'			=> '[list=1|a]metin[/list]',
	'ABBC3_LISTO_NOTE'			=> 'Not: [*] kullanarak yeni liste öğesi oluşturabilirsiniz',
	'ABBC3_LISTO_VIEW'			=> '<ol style="list-style-type: lower-alpha"><li>Liste Öğesi 1</li><li>IListe Öğesi 2</li><li>Liste Öğesi 3</li></ol>',
	
	// List item
 	'ABBC3_LISTITEM_MOVER'		=> 'Liste öğesi',
 	'ABBC3_LISTITEM_TIP'		=> '[*]',
 	'ABBC3_LISTITEM_NOTE'		=> 'Not: Yeni liste öğesi oluşturur',
	
	// Line Break
	'ABBC3_HR_MOVER'			=> 'Yatay çizgi',
	'ABBC3_HR_TIP'				=> '[hr]',
	'ABBC3_HR_NOTE'				=> 'Not: Metni ayırmak için yatay bir çizgi oluşturur',
	'ABBC3_HR_VIEW'				=> '<hr noshade color="#000000" size="1px">',
	
	// Message Box text direction Left to Light
	'ABBC3_RTL_MOVER'			=> 'Sağdan sola okunan metin',
	'ABBC3_RTL_TIP'				=> '[dir=rtl]metin[/dir]',
	'ABBC3_RTL_VIEW'			=> '<BDO dir="rtl">Bu basit bir metindir</BDO>',
	
	// Message Box text direction right to Left
	'ABBC3_LTR_MOVER'			=> 'Soldan sağa okunan metin',
	'ABBC3_LTR_TIP'				=> '[dir=ltr]metin[/dir]',
	'ABBC3_LTR_VIEW'			=> '<BDO dir="ltr">Bu basit bir metindir</BDO>',
	
	// Marquee Down
	'ABBC3_MARQD_MOVER'			=> 'Aşağı kayan metin',
	'ABBC3_MARQD_TIP'			=> '[marq=down]metin[/marq]',
	'ABBC3_MARQD_VIEW'			=> '<marquee direction="down" scrolldelay="120" height="80px">Bu basit bir metindir</marquee>',
	
	// Marquee Up
	'ABBC3_MARQU_MOVER'			=> 'Yukarı kayan metin',
	'ABBC3_MARQU_TIP'			=> '[marq=up]metin[/marq]',
	'ABBC3_MARQU_VIEW'			=> '<marquee direction="up" scrolldelay="120" height="80px">Bu basit bir metindir</marquee>',
	
	// Marquee Right
	'ABBC3_MARQR_MOVER'			=> 'Sağa kayan metin',
	'ABBC3_MARQR_TIP'			=> '[marq=right]metin[/marq]',
	'ABBC3_MARQR_VIEW'			=> '<marquee direction="right" scrolldelay="120">Bu basit bir metindir</marquee>',
	
	// Marquee Left
	'ABBC3_MARQL_MOVER'			=> 'Sola kayan metin',
	'ABBC3_MARQL_TIP'			=> '[marq=left]metin[/marq]',
	'ABBC3_MARQL_VIEW'			=> '<marquee direction="left" scrolldelay="120">Bu basit bir metindir</marquee>',
	
	// Table row cell wizard
	'ABBC3_TABLE_MOVER'			=> 'Tablo giriniz',
	'ABBC3_TABLE_TIP'			=> '[table=(ccs style)][tr=(ccs style)][td=(ccs style)]metin[/td][/tr][/table]',
	'ABBC3_TABLE_VIEW'			=> '<table style="width:50%;border:1px solid #cccccc;" cellspacing="0" cellpadding="0"><tr style="text-align:center;"><td style="border:1px solid #cccccc;">Bu basit bir metindir</td></tr></table>',

	'ABBC3_TABLE_STYLE'			=> 'Tablo stilini giriniz',
	'ABBC3_TABLE_EXAMPLE'		=> 'width:50%;border:1px solid #cccccc;',
	
	'ABBC3_ROW_NUMBER'			=> 'Satır sayısı',
	'ABBC3_ROW_ERROR'			=> 'Satır sayısı belirtmediniz',
	'ABBC3_ROW_STYLE'			=> 'Satır stili',
	'ABBC3_ROW_EXAMPLE'			=> 'text-align:center;',
	
	'ABBC3_CELL_NUMBER'			=> 'Hücre sayısı',
	'ABBC3_CELL_ERROR'			=> 'Hücre sayısı belirtmediniz',
	'ABBC3_CELL_STYLE'			=> 'Hücre stili',
	'ABBC3_CELL_EXAMPLE'		=> 'border:1px solid #cccccc;',
	
	// Simple upload files
	'ABBC3_UPLOAD_TITLE'		=> 'Advanced BBCode Box 3 :: Dosya Yükleme Sayfası',
	'ABBC3_UPLOAD_MOVER'		=> 'Dosya Yükle',
	'ABBC3_UPLOAD_LINK'			=> 'Yüklenen dosyanın linki',
	'ABBC3_UPLOAD_UPLOADED'		=> '%s dosyası başarıyla yüklendi!',
	'ABBC3_UPLOAD_NOT_UPLOADED'	=> '%s dosyası yüklenemedi!',
	'ABBC3_UPLOAD_ALREADY'		=> '%s dosyası zaten mevcut. Dosyayı yeniden adlandırarak tekrar deneyin',
	'ABBC3_UPLOAD_ERROR'		=> 'Dosya %s sitesine yüklenemedi. Hata Kodu : %d',
	'ABBC3_UPLOAD_EXTENSION'	=> 'İzin verilen dosya uzantıları',
	'ABBC3_UPLOAD_EXTENSION_EXPLAIN'	=> 'İzin verilen dosya tiplerini ekleyebilir/değiştirebilirsilebilirsiniz. Uzantıları virgül ile ayırınız (,)',
	'ABBC3_UPLOAD_DISABLED'		=> 'Yüklenen dosyaya ait %s uzantısına izin verilmiyor.',
	'ABBC3_UPLOAD_SIZE'			=> 'İzin verilen en fazla boyut',
	'ABBC3_UPLOAD_NOSIZE'		=> 'Yüklenen dosya boyutu %d olup çok büyüktür. İzin v erilen en fazla dosya boyutu %d KB',
	'ABBC3_UPLOAD_EMPTY'		=> 'Yüklenecek dosyayı eçmediniz. Lütfen bir dosya seçiniz.',
	
	// Hyperlink Wizard
	'ABBC3_URL_TAG'				=> 'sayfa',
	'ABBC3_URL_MOVER'			=> 'Web adresi',	
	'ABBC3_URL_TIP'				=> '[url]http://...[/url] or [url=http://...]Görüntülenecek isim[/url]',
	'ABBC3_URL_EXAMPLE'			=> 'http://www.google.com',
	'ABBC3_URL_VIEW'			=> '<a href="http://www.google.com" class="postlink">Google</a>',
	
	// Email Wizard
	'ABBC3_EMAIL_TAG'			=> 'e-posta',
	'ABBC3_EMAIL_MOVER'			=> 'E-Posta',
	'ABBC3_EMAIL_TIP'			=> '[email]kullanici@sunucu.uzanti[/email] or [email=kullanici@sunucu.uzanti]e-posta adresim[/email]',
	'ABBC3_EMAIL_EXAMPLE' 		=> 'kullanici@sunucu.uzanti',
	'ABBC3_EMAIL_VIEW'			=> '<a href="mailto:kullanici@sunucu.uzanti">kullanici@sunucu.uzanti</a>',
	
	// Ed2k link Wizard
	'ABBC3_ED2K_TAG'			=> 'ed2k',
	'ABBC3_ED2K_MOVER'			=> 'eD2K linki',
	'ABBC3_ED2K_TIP'			=> '[url]link ed2k[/url] or [url=link ed2k]Görüntülenecek isim[/url]',
	'ABBC3_ED2K_EXAMPLE'		=> 'ed2k://|file|The_Two_Towers-The_Purist_Edit-Trailer.avi|14997504|965c013e991ee246d63d45ea71954c4d|/',
	'ABBC3_ED2K_VIEW'			=> '<a href="ed2k://|file|The_Two_Towers-The_Purist_Edit-Trailer.avi|14997504|965c013e991ee246d63d45ea71954c4d|/" class="postlink">Robin.Hood.S02E01.Sisterhood.HDTV.XviD-BiA.avi</a>',
	'ABBC3_ED2K_ADD'			=> 'Seçili bağlantıları ed2k istemcinize ekleyin',
	
	// Web included by iframe
	'ABBC3_WEB_TAG'				=> 'web adresi',
	'ABBC3_WEB_MOVER'			=> 'İletide gösterilecek site',
	'ABBC3_WEB_TIP'				=> '[web width=200 height=100 ]Site adresi[/web]',
	'ABBC3_WEB_EXAMPLE'			=> 'http://www.google.com',
	'ABBC3_WEB_VIEW'			=> '<iframe width="100%" height="100" src="http://www.google.com" style="font-size: 2px;"></iframe><br/>',
	
	// Image Wizard
	'ABBC3_IMG_TAG'				=> 'resim',
	'ABBC3_IMG_MOVER'			=> 'Resim ekle',
	'ABBC3_IMG_TIP'				=> '[img=(left|center|right)]http://...[/img]',
	'ABBC3_IMG_EXAMPLE'			=> 'http://www.google.com/intl/en_com/images/logo_plain.png',
	'ABBC3_IMG_VIEW'			=> '<div align="center"><img src="http://www.google.com/intl/en_com/images/logo_plain.png" /></div>',
	
	// Thumbnail
	'ABBC3_THUMBNAIL_TAG'		=> 'küçük resim',
	'ABBC3_THUMBNAIL_MOVER'		=> 'Küçük resim ekle',
	'ABBC3_THUMBNAIL_TIP'		=> '[thumbnail(=left|right)]http://...[/thumbnail]',
	'ABBC3_THUMBNAIL_EXAMPLE'	=> 'http://www.google.com/intl/en_com/images/logo_plain.png',
	'ABBC3_THUMBNAIL_VIEW'		=> '<a href="http://www.google.com/intl/en_com/images/logo_plain.png" rel="lightbox[]" alt="http://www.google.com/intl/en_com/images/logo_plain.png" title="" class="hoverbox"><img src="http://www.google.com/intl/en_com/images/logo_plain.png" border="0" width="100px" align="right"/></a>',
	
	// Imgshack
	'ABBC3_IMGSHACK_MOVER'		=> 'Resim ekle (imageshack sitesinden)',
	'ABBC3_IMGSHACK_TIP'		=> '[url=http://imageshack.us][img=http://...][/img][/url]',
	'ABBC3_IMGSHACK_VIEW'		=> '<a href="http://img207.imageshack.us/my.php?image=advancedbbcodebox3prosidd3.gif" class="postlink"><img src="http://img207.imageshack.us/img207/1773/advancedbbcodebox3prosidd3.th.gif" alt="Image" /></a>',
	
	// testlink
	'ABBC3_TESTLINK_TAG'		=> 'Link Kontrolü',
	'ABBC3_TESTLINK_MOVER'		=> 'Sunucudaki dosyayı giriniz.',
	'ABBC3_TESTLINK_TIP'		=> '[testlink]http://rapidshare.com/files/...[/testlink]',
	'ABBC3_TESTLINK_NOTE'		=> 'Güvenl sunucular : rapidshare, megaupload, megarotic, depositfiles, megashares .',
	'ABBC3_TESTLINK_EXAMPLE'	=> 'http://rapidshare.com/files/86587996/ABBC3_v108.zip.html',
	'ABBC3_TESTLINK_VIEW'		=> '<dl class="testlink"><dd><font color="red" size="4" >X</font>&nbsp;<a href="http://rapidshare.com/files/86587996/ABBC3_v108.zip.html" >http://rapidshare.com/files/86587996/ABBC3_v108.zip.html</a><br /></dd></dl>',
	'ABBC3_TESTLINK_GOOD'		=> 'Dosya sunucuda bulunamadı !',
	'ABBC3_TESTLINK_WRONG'		=> 'Dosya bulunamadı !',

	// Click counter
 	'ABBC3_CLICK_TAG'			=> 'Tıklanma',
 	'ABBC3_CLICK_MOVER'			=> 'Tıklanma Sayısı Ekle',
	'ABBC3_CLICK_TIP'			=> '[click]http://...[/click] veya [click=http://...]Web Adresi[/click] veya [click][img]http://...[/img][/click]',
	'ABBC3_CLICK_EXAMPLE' 		=> 'http://www.google.com ' . ' ' . 'http://www.google.com/intl/en_com/images/logo_plain.png' ,
	'ABBC3_CLICK_VIEW'			=> '<a href="./click.php?id=1" >http://www.phpbb.com</a> ( 1 kez tıklandı )<br />',
 	'ABBC3_CLICK_TIME'			=> '( %d kez tıklandı )',
 	'ABBC3_CLICK_TIMES'			=> '( %d kez tıklandı )',
	
	// Search tag
	'ABBC3_SEARCH_MOVER'		=> 'Aranacak kelimeyi giriniz',
	'ABBC3_SEARCH_TIP'			=> '[search(=(msn|yahoo|google))]metin[/search]',
	'ABBC3_SEARCH_VIEW'			=> $lang['SEARCH_MINI'] . ' ' . $config['sitename'] . ' : <a href="search.php?keywords=Advanced BBcode box 3">"Advanced BBcode box 3"</a><br/><br/>' . $lang['SEARCH_MINI'] . ' msn :  <a href="http://search.live.com/results.aspx?q=Advanced BBcode box 3&mkt=tr-TR&lf=1" target="_blank">"Advanced BBcode box 3"</a><br/><br/>' .$lang['SEARCH_MINI'] . ' yahoo :  <a href="http://search.yahoo.com/search?p=Advanced BBcode box 3" target="_blank">"Advanced BBcode box 3"</a><br/><br/>' . $lang['SEARCH_MINI'] . ' google : <a href="http://www.google.com.tr/search?q=Advanced BBcode box 3" target="_blank">"Advanced BBcode box 3"</a>',
	
	// BBvideo Wizard
	'ABBC3_BBVIDEO_TAG'			=> 'BBvideo',
	'ABBC3_BBVIDEO_MOVER'		=> 'Video dosyası giriniz',
	'ABBC3_BBVIDEO_TIP'			=> '[BBvideo]Video URL[/BBvideo]',
	'ABBC3_BBVIDEO_EXAMPLE'		=> 'http://www.youtube.com/watch?v=TA4hm97m494',
	'ABBC3_BBVIDEO_VIEW'		=> '<object width="200" height="100"><param name="movie" value="http://www.youtube.com/v/TA4hm97m494" /><param name="wmode" value="transparent" /><embed src="http://www.youtube.com/v/TA4hm97m494" type="application/x-shockwave-flash" wmode="transparent" width="200" height="100"></embed></object>',
	'ABBC3_BBVIDEO_FILE'		=> 'Video formatı?',
	'ABBC3_BBVIDEO_VIDEO'		=> 'Videonun alındığı adres',
	
	// Custom bbcodes

));

?>