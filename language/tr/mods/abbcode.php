<?php
/**
* @package: phpBB3 :: Advanced BBCode box 3 -> language [en][English]
* @version: $Id: abbcode.php, v 1.0.10 2008/08/01 08:08:01 leviatan21 Exp $
* @copyright: leviatan21 < info@mssti.com > (Gabriel) http://www.mssti.com/phpbb3/
* @license: http://opensource.org/licenses/gpl-license.php GNU Public License 
* @author: leviatan21 - http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=345763
* @translator: muiketi - http://www.phpbbturkiye.net/
*
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
	'ABBC3_HELP_TITLE'			=> 'Gelişmiş Biçim Sandığı 3 Yardım Sayfası',
	'ABBC3_HELP_DESC'			=> 'Tanım',
	'ABBC3_HELP_WRITE'			=> 'Siz yazıyorsunuz',
	'ABBC3_HELP_VIEW'			=> 'Biz gösteriyoruz',
	'ABBC3_HELP_ABOUT'			=> 'Advanced BBCode Box 3 <a href="http://www.mssti.com/phpbb3">mssti</a>',
	'ABBC3_HELP_ALT'			=> 'Advanced BBCode Box 3 (aka ABBC3)',

// Image Resizer JS
	'ABBC3_RESIZE_SMALL'		=> 'Resmi orijinal boyutlarında görmek için tıklayınız.',
	'ABBC3_RESIZE_ZOOM_IN'		=> 'Zoom in (real dimensions: %1$s x %2$s)',
	'ABBC3_RESIZE_CLOSE'		=> 'Kapat',
	'ABBC3_RESIZE_ZOOM_OUT'		=> 'Küçült',
	'ABBC3_RESIZE_FILESIZE'		=> 'Bu resim küçültülmüştür. Orijinal boyutta görmek için tıklayınız. Orijinal dosya boyutları %1$sx%2$s piksel ve %3$sKB.',
	'ABBC3_RESIZE_NOFILESIZE'	=> 'Bu resim küçültülmüştür. Orijinal boyutta görmek için tıklayınız. Orijinal dosya boyutları %1$sx%2$s',
	'ABBC3_RESIZE_FULLSIZE'		=> 'Resmi küçültlmüş boyutlarında görmek için tıklayınız.',
	'ABBC3_RESIZE_NUMBER'		=> '%2$s resimden %1$s\'.si',
	'ABBC3_RESIZE_PLAY'			=> 'Slaytşov olarak yürüt',
	'ABBC3_RESIZE_PAUSE'		=> 'Slaytşovu duraklat',

// Highslide JS - http://vikjavev.no/highslide/forum/viewtopic.php?t=2119
	'ABBC3_HIGHSLIDE_LOADINGTEXT'		=> 'Yükleniyor..',
	'ABBC3_HIGHSLIDE_LOADINGTITLE'		=> 'İptal etmek için tıklayınız',
	'ABBC3_HIGHSLIDE_FOCUSTITLE'		=> 'Öne getirmek için tıklayınız',
	'ABBC3_HIGHSLIDE_FULLEXPANDTITLE'	=> 'Gerçek boyutlarına genişlet',
	'ABBC3_HIGHSLIDE_FULLEXPANDTEXT'	=> 'Büyük boyut',
	'ABBC3_HIGHSLIDE_CREDITSTEXT'		=> '<i>Highslide JS</i> tarafından geliştirilmiştir.',
	'ABBC3_HIGHSLIDE_CREDITSTITLE'		=> 'Highslide JS anasayfasına git',
	'ABBC3_HIGHSLIDE_PREVIOUSTEXT'		=> 'Önceki',
	'ABBC3_HIGHSLIDE_PREVIOUSTITLE'		=> 'Önceki (sol ok tuşu)',
	'ABBC3_HIGHSLIDE_NEXTTEXT'			=> 'Sonraki',
	'ABBC3_HIGHSLIDE_NEXTTITLE'			=> 'Sonraki (sağ ok tuşu)',
	'ABBC3_HIGHSLIDE_MOVETITLE'			=> 'Konuyu taşı',
	'ABBC3_HIGHSLIDE_MOVETEXT'			=> 'İçeriği taşı',
	'ABBC3_HIGHSLIDE_CLOSETEXT'			=> 'Kapat',
	'ABBC3_HIGHSLIDE_CLOSETITLE'		=> 'Kapat (esc)',
	'ABBC3_HIGHSLIDE_RESIZETITLE'		=> 'Yeniden boyutlandır',
	'ABBC3_HIGHSLIDE_PLAYTEXT'			=> 'Yürüt',
	'ABBC3_HIGHSLIDE_PLAYTITLE'			=> 'Slaytşovu yürüt (boşluk tuşu)',
	'ABBC3_HIGHSLIDE_PAUSETEXT'			=> 'Duraklat',
	'ABBC3_HIGHSLIDE_PAUSETITLE'		=> 'Slaytşovu duraklat (boşluk tuşu)',
	'ABBC3_HIGHSLIDE_NUMBER'			=> '%2 resimden %1.si',
	'ABBC3_HIGHSLIDE_RESTORETITLE'		=> 'Resmi kapamak için tıklayınız. Hareket ettirmek için tıklayınız. Önceki ve sonraki resim için yön tuşlarını kullanınız.',

// Text to be applied to the helpline & mouseover & help page & Wizard texts
	'BBCODE_STYLES_TIP'			=> 'Kullanım: Seçili metine uygulanacak biçimlendirme açıklamasını buradan görebilirsiniz.',

	'ABBC3_ERROR'				=> 'Hata : ',
	'ABBC3_ERROR_TAG'			=> 'Etiket kullanımında beklenmeyen hata : ',
	'ABBC3_NO_EXAMPLE'			=> 'Örnek kullanım belirtilmemiş.',

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
	'ABBC3_FONT_MOVER'		=> 'Yazı tipi',
	'ABBC3_FONT_TIP'		=> '[font=Comic Sans MS]metin[/font]',
 	'ABBC3_FONT_NOTE'		=> 'Not: İstediğiniz bir yazı tipini kullanabilirsiniz.',
	'ABBC3_FONT_VIEW'		=> '<span style="font-family:Comic Sans MS">Bu basit bir metindir</span>',
	
	// Font Size Dropdown
	'ABBC3_FONT_GIANT'		=> 'Devasa',
	'ABBC3_SIZE_MOVER'		=> 'Yazı boyutu',
	'ABBC3_SIZE_TIP'		=> '[size=150]büyük metin[/size]',
	'ABBC3_SIZE_NOTE'		=> 'Not: Değerler yüzde cinsinden alınacaktır.',
	'ABBC3_SIZE_VIEW'		=> '<span style="font-size: 150%; line-height: 116%;">Bu basit bir metindir</span>',
	
	// Highlight Font Color Dropdown
	'ABBC3_HIGHLIGHT_MOVER'		=> 'Artalanı renklendir',
	'ABBC3_HIGHLIGHT_TIP'		=> '[highlight=yellow]metin[/highlight]',
	'ABBC3_HIGHLIGHT_NOTE'		=> 'Not: Renk değerini color=#FF0000 veya (color=red olarak belirtebilirsiniz)',
	'ABBC3_HIGHLIGHT_VIEW'		=> '<span style="background-color: yellow;">Bu basit bir metindir</span>',
	
	// Font Color Dropdown
	'ABBC3_COLOR_MOVER'		=> 'Yazı rengi',
	'ABBC3_COLOR_TIP'		=> '[color=red]metin[/color]',
	'ABBC3_COLOR_NOTE'		=> 'Not: Renk değerini color=#FF0000 veya (color=red olarak belirtebilirsiniz)',
	'ABBC3_COLOR_VIEW'		=> '<span style="color:red">Bu basit bir metindir</span>',
	
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
	'ABBC3_CODE_TIP'			=> '[code]kod metni[/code]',
	'ABBC3_CODE_VIEW'			=> '<dl class="codebox"><dt>'. $lang['CODE'] .': <a href="#" onclick="selectCode(this); return false;">'. $lang['SELECT_ALL_CODE'] .'</a></dt><dd><code>Bu basit bir metindir</code></dd></dl>',
	
	// Quote
	'ABBC3_QUOTE_MOVER'			=> 'Alıntı',
	'ABBC3_QUOTE_TIP'			=> '[quote]metin[/quote] veya [quote=\"member\"]metin[/quote]',
	'ABBC3_QUOTE_VIEW'			=> '<blockquote><div><cite>member '. $lang['WROTE'] .':</cite>Bu basit bir metindir</div></blockquote>',

	// html
	'ABBC3_HTML_MOVER'			=> 'HTML kod',
	'ABBC3_HTML_TIP'			=> '[html]xhtml kod[/html]',
//	'ABBC3_HTML_EXAMPLE'		=> '[html]&lt;a href=\"http://www.mssti.com/phpbb3\"&gt;link to mssti&lt;/a&gt;[/html]',
	'ABBC3_HTML_VIEW'			=> '<a href="http://www.mssti.com/phpbb3">mssti adresine link</a>',

	// Spoiler
	'ABBC3_SPOIL_MOVER'			=> 'Dipnot metin',
	'ABBC3_SPOIL_TIP'			=> '[spoil]metin[/spoil]',
	'ABBC3_SPOIL_VIEW'			=> '<div class="spoilwrapper"><div class="spoiltitle"><input class="btnspoil" type="button" value="Dipnotu Göster" onClick="javascript:if (this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display != \'\') { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'\'; this.innerText = \'\'; this.value = \'Dipnotu Gizle\'; } else { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'none\'; this.innerText = \'\'; this.value = \'Dipnotu Göster\'; }" onfocus="this.blur();"></div><div class="spoilcontent"><div style="display: none;">Bu basit bir metindir</div></div></div>',
	'SPOILER_SHOW'				=> 'Dipnotu Göster',
	'SPOILER_HIDE'				=> 'Dipnotu Gizle',
	
//	// Hide tag
//	'ABBC3_HIDE_MOVER'		=> 'Gizli içerik',
//	'ABBC3_HIDE_TIP'			=> '[hide]metin[/hide]',
//	'ABBC3_HIDE_VIEW'			=> '<dl class="hidebox"><dt class="hide">Gizli İçerik: Açık</dt><dd>Gizli içeriği görebilmeniz için konuya cevap yazmanız gerekmektedir.</dd></dl>',
	
	// Moderator tag
	'ABBC3_MOD_MOVER'		=> 'Yetkili mesajı',
	'ABBC3_MOD_TIP'			=> '[mod=name]metin[/mod]',
	'ABBC3_MOD_VIEW'		=> '<table id="ModTable" width="100%" cellspacing="5" cellpadding="0" border="0" align="center"><tr><td class="row1" rowspan="2" align="middle" vAlign="center" width="1%"><span class="exclamation" title="Yetkili uyarısı">&nbsp;!&nbsp;</span></td><td class="row2"><span class="genmed"><b>Mod Name:</b></span></td></tr><tr><td>Bu basit bir metindir</td></tr></table>',
	
	// Off topic tag
	'OFFTOPIC'					=> 'Konudışı',
	'ABBC3_OFFTOPIC_MOVER'		=> 'Konudışı metnini giriniz',
	'ABBC3_OFFTOPIC_TIP'		=> '[offtopic]metin[/offtopic]',
	'ABBC3_OFFTOPIC_VIEW'		=> '<i><b><font color="#114499">Konudışı: </font></b><br/><font color="#2277DD">Bu basit bir metindir</font></i>',
	
	// NFO
	'ABBC3_NFO_MOVER'			=> 'NFO belgesi (Internet Exploler\'da daha iyi)',
	'ABBC3_NFO_TIP'				=> '[nfo]NFO belgesi[/nfo]',
	'ABBC3_NFO_VIEW'			=> '<table cellspacing="0" cellpadding="0" border="0" ><tr><td><span class="genmed"><b>NFO:</b></span></td></tr><tr><td class="nfo">' . str_replace(" ", "&nbsp;", '    � ���� �۱��                                  ���������������������  �   �� ���') . '</td></tr></table>',

	// Justify Align
	'ABBC3_ALIGNJUSTIFY_MOVER'		=> 'İki yana yaslanmış metin',
	'ABBC3_ALIGNJUSTIFY_TIP'		=> '[align=justify]metin[/align]',
	'ABBC3_ALIGNJUSTIFY_VIEW'		=> '<div style="text-align:justify">Bu basit bir metindir</div>',
	
	// Right Align
	'ABBC3_ALIGNRIGHT_MOVER'		=> 'Sağa dayalı metin',
	'ABBC3_ALIGNRIGHT_TIP'			=> '[align=right]metin[/align]',
	'ABBC3_ALIGNRIGHT_VIEW'			=> '<div style="text-align:right">Bu basit bir metindir</div>',
	
	// Center Align
	'ABBC3_ALIGNCENTER_MOVER'		=> 'Ortalanmış metin',
	'ABBC3_ALIGNCENTER_TIP'			=> '[align=center]metin[/align]',
	'ABBC3_ALIGNCENTER_VIEW'		=> '<div style="text-align:center">Bu basit bir metindir</div>',
	
	// Left Align
	'ABBC3_ALIGNLEFT_MOVER'			=> 'Sola dayalı metin',
	'ABBC3_ALIGNLEFT_TIP'			=> '[align=left]metin[/align]',
	'ABBC3_ALIGNLEFT_VIEW'			=> '<div style="text-left:justify">Bu basit bir metindir</div>',
	
	// Preformat
	'ABBC3_PRE_MOVER'			=> 'Biçimlendirilmemiş metin',
	'ABBC3_PRE_TIP'				=> '[pre]metin[/pre]',
	'ABBC3_PRE_VIEW'			=> '<pre>Bu basit bir metindir</pre>',

	// Tab
	'ABBC3_TAB_MOVER'	=> 'İçe girdili metin',
	'ABBC3_TAB_TIP'		=> '[tab=nn]',
	'ABBC3_TAB_NOTE'	=> 'Piksel cinsinden bir değer giriniz.',
	'ABBC3_TAB_VIEW'	=> '<span style="margin-left:20px;"></span>Bu basit bir metindir',
	
	// Superscript
	'ABBC3_SUP_MOVER'	=> 'Yazıyı üst-indis olarak göster',
	'ABBC3_SUP_TIP'		=> '[sup]metin[/sup]',
	'ABBC3_SUP_VIEW'	=> 'Bu basit <sup>bir metindir</sup>',
	
	// Subscript
	'ABBC3_SUB_MOVER'	=> 'Yazıyı alt-indis olarak göster',
	'ABBC3_SUB_TIP'		=> '[sub]metin[/sub]',
	'ABBC3_SUB_VIEW'	=> 'Bu basit <sub>bir metindir</sub>',

	// Bold
	'ABBC3_B_MOVER'		=> 'Kalın metin',
	'ABBC3_B_TIP'		=> '[b]metin[/b]',
	'ABBC3_B_VIEW'		=> '<strong>Bu basit bir metindir</strong>',
	
	// Italic
	'ABBC3_I_MOVER'		=> 'Eğik metin',
	'ABBC3_I_TIP'		=> '[i]metin[/i]',
	'ABBC3_I_VIEW'		=> '<em>Bu basit bir metindir</em>',
	
	// Underline
	'ABBC3_U_MOVER'		=> 'Altı çizili metin',
	'ABBC3_U_TIP'		=> '[u]metin[/u]',
	'ABBC3_U_VIEW'		=> '<span style="text-decoration: underline">Bu basit bir metindir</span>',
	
	// Strikethrough
	'ABBC3_S_MOVER'		=> 'Üstü çizili metin',
	'ABBC3_S_TIP'		=> '[s]metin[/s]',
	'ABBC3_S_VIEW'		=> '<strike>Bu basit bir metindir</strike>',
	
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
	'ABBC3_DIRRTL_MOVER'			=> 'Sağdan sola okunan metin',
	'ABBC3_DIRRTL_TIP'				=> '[dir=rtl]metin[/dir]',
	'ABBC3_DIRRTL_VIEW'				=> '<BDO dir="rtl">Bu basit bir metindir</BDO>',
	
	// Message Box text direction right to Left
	'ABBC3_DIRLTR_MOVER'			=> 'Soldan sağa okunan metin',
	'ABBC3_DIRLTR_TIP'				=> '[dir=ltr]metin[/dir]',
	'ABBC3_DIRLTR_VIEW'				=> '<BDO dir="ltr">Bu basit bir metindir</BDO>',
	
	// Marquee Down
	'ABBC3_MARQDOWN_MOVER'			=> 'Aşağı kayan metin',
	'ABBC3_MARQDOWN_TIP'			=> '[marq=down]metin[/marq]',
	'ABBC3_MARQDOWN_VIEW'			=> '<marquee direction="down" scrolldelay="120">Bu basit bir metindir</marquee>',
	
	// Marquee Up
	'ABBC3_MARQUP_MOVER'			=> 'Yukarı kayan metin',
	'ABBC3_MARQUP_TIP'				=> '[marq=up]metin[/marq]',
	'ABBC3_MARQUP_VIEW'				=> '<marquee direction="up" scrolldelay="120">Bu basit bir metindir</marquee>',
	
	// Marquee Right
	'ABBC3_MARQRIGHT_MOVER'			=> 'Sağa kayan metin',
	'ABBC3_MARQRIGHT_TIP'			=> '[marq=right]metin[/marq]',
	'ABBC3_MARQRIGHT_VIEW'			=> '<marquee direction="right" scrolldelay="120">Bu basit bir metindir</marquee>',
	
	// Marquee Left
	'ABBC3_MARQLEFT_MOVER'			=> 'Sola kayan metin',
	'ABBC3_MARQLEFT_TIP'			=> '[marq=left]metin[/marq]',
	'ABBC3_MARQLEFT_VIEW'			=> '<marquee direction="left" scrolldelay="120">Bu basit bir metindir</marquee>',
	
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
	'ABBC3_URL_TIP'				=> '[url]http://...[/url] veya [url=http://...]Görüntülenecek isim[/url]',
	'ABBC3_URL_EXAMPLE'			=> 'http://www.google.com',
	'ABBC3_URL_VIEW'			=> '<a href="http://www.google.com" class="postlink">Google</a>',

	// Email Wizard
	'ABBC3_EMAIL_TAG'			=> 'e-posta',
	'ABBC3_EMAIL_MOVER'			=> 'E-Posta',
	'ABBC3_EMAIL_TIP'			=> '[email]kullanici@sunucu.uzanti[/email] veya [email=kullanici@sunucu.uzanti]e-posta adresim[/email]',
	'ABBC3_EMAIL_EXAMPLE' 		=> 'kullanici@sunucu.uzanti',
	'ABBC3_EMAIL_VIEW'			=> '<a href="mailto:kullanici@sunucu.uzanti">kullanici@sunucu.uzanti</a>',
	
	// Ed2k link Wizard
	'ABBC3_ED2K_TAG'			=> 'ed2k',
	'ABBC3_ED2K_MOVER'			=> 'eD2K linki',
	'ABBC3_ED2K_TIP'			=> '[url]ed2k linki[/url] veya [url=ed2k linki]Görüntülenecek isim[/url]',
	'ABBC3_ED2K_EXAMPLE'		=> 'ed2k://|file|The_Two_Towers-The_Purist_Edit-Trailer.avi|14997504|965c013e991ee246d63d45ea71954c4d|/',
	'ABBC3_ED2K_VIEW'			=> '<a href="ed2k://|file|The_Two_Towers-The_Purist_Edit-Trailer.avi|14997504|965c013e991ee246d63d45ea71954c4d|/" class="postlink">Robin.Hood.S02E01.Sisterhood.HDTV.XviD-BiA.avi</a>',
	'ABBC3_ED2K_ADD'			=> 'Seçili bağlantıları ed2k istemcinize ekleyin',
	
	// Web included by iframe
	'ABBC3_WEB_TAG'				=> 'Web Adresi',
	'ABBC3_WEB_MOVER'			=> 'İletide gösterilecek site',
	'ABBC3_WEB_TIP'				=> '[web width=200 height=100 ]Site adresi[/web]',
	'ABBC3_WEB_EXAMPLE'			=> 'http://www.google.com',
	'ABBC3_WEB_VIEW'			=> '<iframe width="100%" height="100" src="http://www.google.com" style="font-size: 2px;"></iframe><br/>',

	// Image Wizard
	'ABBC3_IMG_TAG'				=> 'Resim',
	'ABBC3_IMG_MOVER'			=> 'Resim ekle',
	'ABBC3_IMG_TIP'				=> '[img=(left|center|right)]http://...[/img]',
	'ABBC3_IMG_EXAMPLE'			=> 'http://www.google.com/intl/en_com/images/logo_plain.png',
	'ABBC3_IMG_VIEW'			=> '<div align="center"><img src="http://www.google.com/intl/en_com/images/logo_plain.png" alt="" /></div>',

	// Thumbnail
	'ABBC3_THUMBNAIL_TAG'		=> 'Küçük Resim',
	'ABBC3_THUMBNAIL_MOVER'		=> 'Küçük resim ekle',
	'ABBC3_THUMBNAIL_TIP'		=> '[thumbnail(=left|right)]http://...[/thumbnail]',
	'ABBC3_THUMBNAIL_EXAMPLE'	=> 'http://www.google.com/intl/en_com/images/logo_plain.png',
	'ABBC3_THUMBNAIL_VIEW'		=> '<a href="http://www.google.com/intl/en_com/images/logo_plain.png" rel="gb_imageset[]" alt="http://www.google.com/intl/en_com/images/logo_plain.png" title="" class="hoverbox"><img src="http://www.google.com/intl/en_com/images/logo_plain.png" alt="" border="0" width="100px" align="right"/></a>',

	// Imgshack
	'ABBC3_IMGSHACK_MOVER'		=> 'Resim ekle (imageshack sitesinden)',
	'ABBC3_IMGSHACK_TIP'		=> '[url=http://imageshack.us][img=http://...][/img][/url]',
	'ABBC3_IMGSHACK_VIEW'		=> '<a href="http://img207.imageshack.us/my.php?image=advancedbbcodebox3prosidd3.gif" class="postlink"><img src="http://img207.imageshack.us/img207/1773/advancedbbcodebox3prosidd3.th.gif" alt="Image" /></a>',

	// Rapid share checker
	'ABBC3_RAPIDSHARE_TAG'		=> 'Rapidshare',
	'ABBC3_RAPIDSHARE_MOVER'	=> 'Rapidshare sitesinden dosya ekleyin',
	'ABBC3_RAPIDSHARE_TIP'		=> '[rapidshare]http://rapidshare.com/files/...[/rapidshare]',
	'ABBC3_RAPIDSHARE_EXAMPLE'	=> 'http://rapidshare.com/files/86587996/ABBC3_v108.zip.html',
	'ABBC3_RAPIDSHARE_VIEW'		=> '<a href="http://rapidshare.com/files/86587996/ABBC3_v108.zip.html" >http://rapidshare.com/files/86587996/ABBC3_v108.zip.html</a> <font color="green" size="4" >Dosya bulunamadı !</font><br />',
	'ABBC3_RAPIDSHARE_GOOD'		=> 'İstenen dosya mevcut !',
	'ABBC3_RAPIDSHARE_WRONG'	=> 'İstenen dosya bulunamadı !',

	// testlink
	'ABBC3_CURL_ERROR'			=> '<strong>Hata : </strong> Üzgünüm CURL kurulmamış. Bu fonksiyonun kullanımı için CURL\'un kurulu olması gerekiyor..',
	'ABBC3_TESTLINK_TAG'		=> 'Link Kontrolü',
	'ABBC3_TESTLINK_MOVER'		=> 'Sunucudaki dosyayı giriniz.',
	'ABBC3_TESTLINK_TIP'		=> '[testlink]http://rapidshare.com/files/...[/testlink]',
	'ABBC3_TESTLINK_NOTE'		=> 'Güvenilir siteler: rapidshare, megaupload, megarotic, depositfiles, megashares .',
	'ABBC3_TESTLINK_EXAMPLE'	=> 'http://rapidshare.com/files/86587996/ABBC3_v108.zip.html',
	'ABBC3_TESTLINK_VIEW'		=> '<dl class="testlink"><dd><font color="red" size="4" >X</font>&nbsp;<a href="http://rapidshare.com/files/86587996/ABBC3_v108.zip.html" >http://rapidshare.com/files/86587996/ABBC3_v108.zip.html</a><br /></dd></dl>',
	'ABBC3_TESTLINK_GOOD'		=> 'İstenen dosya mevcut !',
	'ABBC3_TESTLINK_WRONG'		=> 'İstenen dosya bulunamadı !',

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
	'ABBC3_BBVIDEO_TIP'			=> '[BBvideo]Video adresi[/BBvideo]',
	'ABBC3_BBVIDEO_EXAMPLE'		=> 'http://www.youtube.com/watch?v=TA4hm97m494',
	'ABBC3_BBVIDEO_VIEW'		=> '<object width="200" height="100"><param name="movie" value="http://www.youtube.com/v/TA4hm97m494" /><param name="wmode" value="transparent" /><embed src="http://www.youtube.com/v/TA4hm97m494" type="application/x-shockwave-flash" wmode="transparent" width="200" height="100"></embed></object>',
	'ABBC3_BBVIDEO_FILE'		=> 'Video formatı?',
	'ABBC3_BBVIDEO_VIDEO'		=> 'Videonun alındığı adres',
	
	// Flash (swf) Wizard
	'ABBC3_FLASH_TAG'			=> 'Flash',
	'ABBC3_FLASH_MOVER'			=> 'Flash dosyası giriniz (swf)',
	'ABBC3_FLASH_TIP'			=> '[flash width=# height=#]Flash dosyasının adresi[/flash] veya [flash width,height]Flash dosyası  adresi[/flash]',
	'ABBC3_FLASH_EXAMPLE'		=> 'http://www.adobe.com/support/flash/ts/documents/test_version/version.swf',
	'ABBC3_FLASH_VIEW'			=> '<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0" width="200" height="100"><param name="movie" value="http://www.adobe.com/support/flash/ts/documents/test_version/version.swf" /><param name="play" value="true" /><param name="loop" value="true" /><param name="quality" value="high" /><param name="allowScriptAccess" value="never" /><param name="allowNetworking" value="internal" /><embed src="http://www.adobe.com/support/flash/ts/documents/test_version/version.swf" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" width="200" height="100" play="true" loop="true" quality="high" allowscriptaccess="never" allownetworking="internal"></embed></object>',

	// Flash (flv) Wizard
	'ABBC3_FLV_TAG'				=> 'Flash',
	'ABBC3_FLV_MOVER'			=> 'Flash dosyası giriniz (flv)',
	'ABBC3_FLV_TIP'				=> '[flv width=# height=#]Flash dosyasının adresi[/flv] veya [flv width,height]Flash dosyası  adresi[/flv]',
	'ABBC3_FLV_EXAMPLE' 		=> 'http://www.channel-ai.com/video/eyn/demo1.flv',
	'ABBC3_FLV_VIEW'			=> '<embed src="../images/flvplayer.swf" width="200" height="100" bgcolor="#FFFFFF" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="file=../files/demo1.flv&autostart=false" />',

	// Streaming Video Wizard
	'ABBC3_VIDEO_TAG'			=> 'Video',
	'ABBC3_VIDEO_MOVER'			=> 'Video giriniz',
	'ABBC3_VIDEO_TIP'			=> '[video width=# height=#]Video dosyasının adresi[/video]',
	'ABBC3_VIDEO_EXAMPLE'		=> 'http://www.sarahsnotecards.com/catalunyalive/fishstore.wmv',
	'ABBC3_VIDEO_VIEW'			=> '<object classid="CLSID:6BF52A52-394A-11d3-B153-00C04F79FAA6" id="player"  width="200" height="100"><param name="url" value="http://www.sarahsnotecards.com/catalunyalive/fishstore.wmv" /><param name="src" value="http://www.sarahsnotecards.com/catalunyalive/fishstore.wmv" /><param name="showcontrols" value="true" /><param name="autostart" value="false" /><!--[if !IE]>--><object type="video/x-ms-wmv" data="http://www.sarahsnotecards.com/catalunyalive/fishstore.wmv" width="200" height="100" ><param name="src" value="http://www.sarahsnotecards.com/catalunyalive/fishstore.wmv" /><param name="autostart" value="false" /><param name="controller" value="true" /></object><!--<![endif]--></object>',

	// Streaming Audio Wizard
	'ABBC3_STREAM_TAG'			=> 'Ses',
	'ABBC3_STREAM_MOVER'		=> 'Ses dosyası giriniz',
	'ABBC3_STREAM_TIP'			=> '[stream]Ses dosyasının adresi[/stream]',
	'ABBC3_STREAM_EXAMPLE'		=> 'http://realdev1.realise.com/rossa/mov/demo.mp3',
	'ABBC3_STREAM_VIEW'			=> '<object width="200" height="45" classid="CLSID:6BF52A52-394A-11d3-B153-00C04F79FAA6" id="wmstream_"><param name="url" value="http://realdev1.realise.com/rossa/mov/demo.mp3" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /><param name="src" value="http://realdev1.realise.com/rossa/mov/demo.mp3" /><!--[if !IE]>--><object width="200" height="45" type="video/x-ms-wmv" data="http://realdev1.realise.com/rossa/mov/demo.mp3"><param name="src" value="http://realdev1.realise.com/rossa/mov/demo.mp3" /><param name="controller" value="1" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /></object><!--<![endif]--></object>',

	// Quick time
	'ABBC3_QUICKTIME_TAG'		=> 'Quick time',
	'ABBC3_QUICKTIME_MOVER'		=> 'Quicktime dosyası giriniz',
	'ABBC3_QUICKTIME_TIP'		=> '[quicktime width=# height=#]Quicktime dosyasının  adresi[/quicktime]',
	'ABBC3_QUICKTIME_EXAMPLE'	=> 'http://www.nature.com/neuro/journal/v3/n3/extref/Li_control.mov.qt' . ' ' . 'http://www.carnivalmidways.com/images/Music/thisisatest.mp3',
	'ABBC3_QUICKTIME_VIEW'		=> '<object id="qtstream_" classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab#version=6,0,2,0" width="200" height="100"><param name="src" value="http://www.nature.com/neuro/journal/v3/n3/extref/Li_control.mov.qt" /><param name="controller" value="true" /><param name="autoplay" value="false" /><param name="type" value="video/quicktime" /><embed name="qtstream_" src="http://www.nature.com/neuro/journal/v3/n3/extref/Li_control.mov.qt" pluginspage="http://www.apple.com/quicktime/download/" enablejavascript="true" controller="true" width="200" height="100" type="video/quicktime" autoplay="false"></embed></object>',

	// Real Media Wizard
	'ABBC3_RAM_TAG'				=> 'Real Media',
	'ABBC3_RAM_MOVER'			=> 'Real Media dosyası giriniz',
	'ABBC3_RAM_TIP'				=> '[ram]Real Media dosyasının adresi[/ram]',
	'ABBC3_RAM_EXAMPLE'			=> 'http://www.bbc.co.uk/scotland/radioscotland/media/radioscotland.ram',
	'ABBC3_RAM_VIEW'			=> '<object id="rmstream_" classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" width="200" height="100"><param name="src" value="http://www.bbc.co.uk/scotland/radioscotland/media/radioscotland.ram" /><param name="autostart" value="false" /><param name="controls" value="ImageWindow" /><param name="console" value="ctrls_" /><param name="prefetch" value="false" /><embed name="rmstream_" type="audio/x-pn-realaudio-plugin" src="http://www.bbc.co.uk/scotland/radioscotland/media/radioscotland.ram" width="200" height="100" autostart="false" controls="ImageWindow" console="ctrls_" prefetch="false"></embed></object><br /><object id="ctrls_" classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" width="200" height="36"><param name="controls" value="ControlPanel" /><param name="console" value="ctrls_" /><embed name="ctrls_" type="audio/x-pn-realaudio-plugin" width="200" height="36" controls="ControlPanel" console="ctrls_"></embed></object>',

//	// Stage6 video Wizard
//	'ABBC3_STAGE6_TAG'			=> 'Stage6 Video',
//	'ABBC3_STAGE6_MOVER'			=> 'Stage6 sitesinden video ekle', // from http://www.stage6.com/
//	'ABBC3_STAGE6_TIP'				=> '[stage6]Stage6 ID[/stage6]',
//	'ABBC3_STAGE6_EXAMPLE'			=> '2068715',
//	'ABBC3_STAGE6_VIEW'			=> '<object  classid="clsid:67DABFBF-D0AB-41fa-9C46-CC0F21721616" codebase="http://download.divx.com/player/DivXBrowserPlugin.cab" width="200" height="100" ><param name="src" value="http://video.stage6.com/2068715/.divx" /><param name="autoplay" value="false" /><param name="custommode" value="Stage6" /><param name="showpostplaybackad" value="false" /><embed type="video/divx" src="http://video.stage6.com/2068715/.divx" pluginspage="http://go.divx.com/plugin/download/" showpostplaybackad="false" custommode="Stage6" autoplay="false" width="200" height="100" /></object><br />',

	// Google video Wizard
	'ABBC3_GVIDEO_TAG'			=> 'Google Video',
	'ABBC3_GVIDEO_MOVER'		=> 'Google videosu ekle',
	'ABBC3_GVIDEO_TIP'			=> '[GVideo]Google video adresi[/GVideo]',
	'ABBC3_GVIDEO_EXAMPLE'		=> 'http://video.google.com/videoplay?docid=-8351924403384451128',
	'ABBC3_GVIDEO_VIEW'			=> '<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0" width="200" height="100"><param name="movie" value="http://video.google.com/googleplayer.swf?docid=-8351924403384451128" /><param name="play" value="false" /><param name="loop" value="false" /><param name="quality" value="high" /><param name="allowScriptAccess" value="never" /><param name="allowNetworking" value="internal" /><embed src="http://video.google.com/googleplayer.swf?docid=-8351924403384451128" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" width="200" height="100" play="false" loop="false" quality="high" allowscriptaccess="never" allownetworking="internal"></embed></object>',

	// Youtube video Wizard
	'ABBC3_YOUTUBE_TAG'			=> 'Youtube',
	'ABBC3_YOUTUBE_MOVER'		=> 'Youtube sitesinden video ekle',
	'ABBC3_YOUTUBE_TIP'			=> '[youtube]Youtube video adresi[/youtube]',
	'ABBC3_YOUTUBE_EXAMPLE'		=> 'http://www.youtube.com/watch?v=TA4hm97m494',
	'ABBC3_YOUTUBE_VIEW'		=> '<object width="200" height="100"><param name="movie" value="http://www.youtube.com/v/TA4hm97m494" /><param name="wmode" value="transparent" /><embed src="http://www.youtube.com/v/TA4hm97m494" type="application/x-shockwave-flash" wmode="transparent" width="200" height="100"></embed></object>',

	// Veoh video
	'ABBC3_VEOH_TAG'			=> 'Veoh',
	'ABBC3_VEOH_MOVER'			=> 'Veoh sitesinden video giriniz',
	'ABBC3_VEOH_TIP'			=> '[veoh]Veoh video adresi[/veoh]',
	'ABBC3_VEOH_EXAMPLE'		=> 'http://www.veoh.com/videos/v1409404EqT5SJjM',
	'ABBC3_VEOH_VIEW'			=> '<embed src="http://www.veoh.com/videodetails2.swf?permalinkId=v1409404EqT5SJjM&id=anonymous&player=videodetailsembedded&videoAutoPlay=0" allowFullScreen="true" width="200" height="100" bgcolor="#000000" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>',

	// Collegehumor video
	'ABBC3_COLLEGEHOMOR_TAG'	=> 'Collegehumor',
	'ABBC3_COLLEGEHUMOR_MOVER'	=> 'Collegehumor sitesinden video giriniz',
	'ABBC3_COLLEGEHUMOR_TIP'	=> '[collegehumor]Collegehumor video adresi[/collegehumor]',
	'ABBC3_COLLEGEHUMOR_EXAMPLE'=> 'http://www.collegehumor.com/video:1802097',
	'ABBC3_COLLEGEHUMOR_VIEW'	=> '<object type="application/x-shockwave-flash" data="http://www.collegehumor.com/moogaloop/moogaloop.swf?clip_id=1802097&fullscreen=1" width="200" height="100" ><param name="allowfullscreen" value="true" /><param name="movie" quality="best" value="http://www.collegehumor.com/moogaloop/moogaloop.swf?clip_id=1802097&fullscreen=1" /></object>',

	// Dailymotion video
	'ABBC3_DM_MOVER'			=> 'Dailymotion',
	'ABBC3_DM_TIP'				=> '[dm]Dailymotion ID numarası[/dm]',
	'ABBC3_DM_EXAMPLE'			=> 'http://www.dailymotion.com/swf/x3hm7o',
	'ABBC3_DM_VIEW'				=> '<object width="200" height="100"><param name="movie" value="http://www.dailymotion.com/swf/x3hm7o" /><param name="allowFullScreen" value="true" /><param name="allowScriptAccess" value="never" /><embed src="http://www.dailymotion.com/swf/x3hm7o" type="application/x-shockwave-flash" width="200" height="100" allowFullScreen="true" allowScriptAccess="never"></embed></object>',

	// Gamespot video
	'ABBC3_GAMESPOT_MOVER'		=> 'Gamespot',
	'ABBC3_GAMESPOT_TIP'		=> '[gamespot]Gamespot video adresi[gamespot]',
	'ABBC3_GAMESPOT_EXAMPLE'	=> 'http://www.gamespot.com/video/944074/6185798/tom-clancys-rainbow-six-vegas-2-official-trailer-3',
	'ABBC3_GAMESPOT_VIEW'		=> '<embed id="mymovie" width="200" height="100" flashvars="paramsURI=http%3A%2F%2Fwww%2Egamespot%2Ecom%2Fpages%2Fvideo%5Fplayer%2Fproteus%5Fxml%2Ephp%3Fadseg%3D%26adgrp%3D%26sid%3D6185798%26pid%3D944074%26mb%3D%26onid%3D%26nc%3D1202626246593%26embedded%3D1%26showWatermark%3D0%26autoPlay%3D0" allowfullscreen="true" allowscriptaccess="never" quality="high" name="mymovie" src="http://image.com.com/gamespot/images/cne_flash/production/media_player/proteus/gs/proteus_embed.swf" type="application/x-shockwave-flash"/>',

	// Gametrailers video
	'ABBC3_GAMETRAILERS_MOVER'	=> 'Gametrailers',
	'ABBC3_GAMETRAILERS_TIP'	=> '[gametrailers]Gametrailers video adresi[/gametrailers]',
	'ABBC3_GAMETRAILERS_EXAMPLE'=> 'http://www.gametrailers.com/player/30461.html',
	'ABBC3_GAMETRAILERS_VIEW'	=> '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"  codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" id="gtembed" width="200" height="100"><param name="allowScriptAccess" value="never" /><param name="allowFullScreen" value="true" /><param name="movie" value="http://www.gametrailers.com/remote_wrap.php?mid=30461" /><param name="quality" value="high" /><embed src="http://www.gametrailers.com/remote_wrap.php?mid=30461" swLiveConnect="true" name="gtembed" align="middle" allowScriptAccess="never" allowFullScreen="true" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="200" height="100"></embed></object>',

	// IGN video
	'ABBC3_IGNVIDEO_MOVER'		=> 'Ign',
	'ABBC3_IGNVIDEO_TIP'		=> '[ignvideo]ING video adresi[/ignvideo]',
	'ABBC3_IGNVIDEO_EXAMPLE'	=> 'object_ID=967025&downloadURL=http://tvmovies.ign.com/tv/video/article/850/850894/knightrider_trailer_020808_flvlow.flv',
	'ABBC3_IGNVIDEO_VIEW'		=> '<embed src="http://videomedia.ign.com/ev/ev.swf" flashvars="object_ID=967025&downloadURL=http://tvmovies.ign.com/tv/video/article/850/850894/knightrider_trailer_020808_flvlow.flv" type="application/x-shockwave-flash" width="200" height="100" ></embed>',

	// LiveLeak video
	'ABBC3_LIVELEAK_MOVER'		=> 'Liveleak',
	'ABBC3_LIVELEAK_TIP'		=> '[liveleak]Liveleak video adresi[/liveleak]',
	'ABBC3_LIVELEAK_EXAMPLE'	=> 'http://www.liveleak.com/view?i=413_1202590393',
	'ABBC3_LIVELEAK_VIEW'		=> '<object type="application/x-shockwave-flash" width="200" height="100" wmode="transparent" data="http://www.liveleak.com/player.swf?autostart=false&token=i=413_1202590393"><param name="movie" value="http://www.liveleak.com/player.swf?autostart=false&token=$1" /><param name="wmode" value="transparent" /><param name="quality" value="high" /></object>',
	
	// Custom BBcodes

));

?>