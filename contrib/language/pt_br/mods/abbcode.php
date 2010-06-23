<?php
/**
* @package: phpBB3 :: Advanced BBCode box 3 -> language [pt_br][Portugu�s Portugu�s]
* @version: $Id: abbcode.php, v 1.0.8 2008/03/31 03:01:00 leviatan21 Exp $
* @copyright: leviatan21 < info@mssti.com > (Gabriel) http://www.mssti.com/phpbb3/
* @license: http://opensource.org/licenses/gpl-license.php GNU Public License 
* @author: leviatan21 - http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=345763
* @translator: Balero http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=384755
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
	'ABBC3_HELP_TITLE'			=> 'Advanced BBCode Box 3 :: Página de Ajuda',
	'ABBC3_HELP_DESC'			=> 'Descrição',
	'ABBC3_HELP_WRITE'			=> 'Escreva seu formato',
	'ABBC3_HELP_VIEW'			=> 'Exibir nosso formato',
	'ABBC3_HELP_ABOUT'			=> 'Advanced BBCode Box 3 por <a href="http://www.mssti.com/phpbb3">mssti</a>',
	'ABBC3_HELP_ALT'			=> 'Advanced BBCode Box 3 (aka ABBC3)',
	
// Image Resizer JS - Start
	'ABBC3_RESIZE_SMALL'		=> 'Clique nesta barra para ver a imagem completa.',
	'ABBC3_RESIZE_FILESIZE'		=> 'Esta imagem foi redimensionada. Clique nesta barra para ver a imagem completa. O tamanho original da imagem é de %1$sx%2$s e o tamanho é de %3$sKB.',
	'ABBC3_RESIZE_NOFILESIZE'	=> 'Esta imagem foi redimensionada. Clique nesta barra para ver a imagem completa. O tamanho original da imagem é de %1$sx%2$s.',
	'ABBC3_RESIZE_FULLSIZE'		=> 'Clique nesta barra para ver a imagem pequena.',
	
// Text to be applied to the helpline & mouseover & help page & Wizard texts
	'BBCODE_STYLES_TIP'			=> 'Dica: Estilos podem ser aplicados rapidamente nos textos.',
	
	'ABBC3_ERROR'				=> 'Erro : ',
	'ABBC3_ERROR_TAG'			=> 'Erro inesperado usando a tag : ',
	
	'ABBC3_ID'					=> 'Coloque o identificador (id) :',
	'ABBC3_NOID'				=> 'Você não colocou o identificador (id)',
	'ABBC3_LINK'				=> 'Coloque o link ',
	'ABBC3_DESC'				=> 'Coloque uma descrição para o link ',
	'ABBC3_NAME'				=> 'Descrição',
	'ABBC3_NOLINK'				=> 'Você não colocou o link',
	'ABBC3_NODESC'				=> 'Você não colocou uma descrição',
	'ABBC3_WIDTH'				=> 'Coloque a largura',
	'ABBC3_WIDTH_NOTE'			=> 'Nota: O valor tem que estar em porcentagem',
	'ABBC3_NOWIDTH'				=> 'Você não colocou o tamanho da largura',
	'ABBC3_HEIGHT'				=> 'Coloque a altura',
	'ABBC3_HEIGHT_NOTE'			=> 'Nota: O valor tem que estar em porcentagem',
	'ABBC3_NOHEIGHT'			=> 'Você não colocou o tamanho da altura',
	
	'ABBC3_NOTE'				=> 'Nota',
	'ABBC3_EXAMPLE'				=> 'Exemplo',
	'ABBC3_EXAMPLES'			=> 'Exemplos',
	
// bbcodes texts	
	// Font Type Dropdown
	'ABBC3_FONTTYPE_MOVER'		=> 'Tipo da Fonte',
	'ABBC3_FONTTYPE_TIP'		=> '[font=Comic Sans MS]texto[/font]',
	'ABBC3_FONTTYPE_NOTE'		=> 'Nota: Você pode usar sua própria fonte-família',
	'ABBC3_FONTTYPE_VIEW'		=> '<span style="font-family:Comic Sans MS">Este texto é um exemplo</span>',
	
	// Font Size Dropdown
	'ABBC3_FONT_GIANT'			=> 'Gigante',
	'ABBC3_FONTSIZE_MOVER'		=> 'Tamanho da Fonte',
	'ABBC3_FONTSIZE_TIP'		=> '[size=150]texto grande[/size]',
	'ABBC3_FONTSIZE_NOTE'		=> 'Note: O valor será interpretado em percentagem',
	'ABBC3_FONTSIZE_VIEW'		=> '<span style="font-size: 150%; line-height: 116%;">Este texto é um exemplo</span>',
	
	// Highlight Font Color Dropdown
	'ABBC3_FONTHILI_MOVER'		=> 'Cor de Fundo',
	'ABBC3_FONTHILI_TIP'		=> '[highlight=yellow]texto[/highlight]',
	'ABBC3_FONTHILI_NOTE'		=> 'Nota: Você pode usar cores do tipo html (color=#FF0000 ou color=red)',
	'ABBC3_FONTHILI_VIEW'		=> '<span style="background-color: yellow;">Este texto é um exemplo</span>',
	
	// Font Color Dropdown
	'ABBC3_FONTCOLOR_MOVER'		=> 'Cor da Fonte',
	'ABBC3_FONTCOLOR_TIP'		=> '[color=red]texto[/color]',
	'ABBC3_FONTCOLOR_NOTE'		=> 'Nota: Você pode usar cores em html (color=#FF0000 ou color=red)',
	'ABBC3_FONTCOLOR_VIEW'		=> '<span style="color:red">Este texto é um exemplo</span>',
	
	// Cut selected text
	'ABBC3_CUT_MOVER'			=> 'Recortar texto selecionado',
	// Copy selected text
	'ABBC3_COPY_MOVER'			=> 'Copiar texto selecionado',
	// Paste previously copy text
	'ABBC3_PASTE_MOVER'			=> 'Colar o texto selecionado',
	'ABBC3_PASTE_ERROR'			=> 'Por favor, primeiro selecione o texto e depois cole-o',
	// Remove BBCode (Removes all BBCode tags from selected text)
	'ABBC3_PLAIN_MOVER'			=> 'Remover todos os BBcodes do texto selecionado',
	'ABBC3_NOSELECT_ERROR'		=> 'Por favor, primeiro selecione o texto',
	
	// Code
	'ABBC3_CODE_MOVER'			=> 'Códigos',
	'ABBC3_CODE_TIP'			=> '[code]código[/code]',
	'ABBC3_CODE_VIEW'			=> '<dl class="codebox"><dt>'. $lang['CODE'] .': <a href="#" onclick="selectCode(this); return false;">'. $lang['SELECT_ALL_CODE'] .'</a></dt><dd><code>Este texto é um exemplo</code></dd></dl>',
	
	// Quote
	'ABBC3_QUOTE_MOVER'			=> 'Citar',
	'ABBC3_QUOTE_TIP'			=> '[quote]texto[/quote] ou [quote=\"member\"]texto[/quote]',
	'ABBC3_QUOTE_VIEW'			=> '<blockquote><div><cite>member '. $lang['WROTE'] .':</cite>Este texto é um exemplo</div></blockquote>',
	
	// Spoiler
	'ABBC3_SPOIL_MOVER'			=> 'Spoiler',
	'ABBC3_SPOIL_TIP'			=> '[spoil]texto[/spoil]',
	'ABBC3_SPOIL_VIEW'			=> '<div class="spoilwrapper"><div class="spoiltitle"><input class="btnspoil" type="button" value="Show Spoiler" onclick="javascript:if (this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display != \'\') { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'\'; this.innerText = \'\'; this.value = \'Hide Spoiler\'; } else { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'none\'; this.innerText = \'\'; this.value = \'Show Spoiler\'; }" onfocus="this.blur();" /></div><div class="spoilcontent"><div style="display: none;">Este texto é um exemplo</div></div></div>',
	'SPOILER_SHOW'				=> 'Exibir Spoiler',
	'SPOILER_HIDE'				=> 'Esconder Spoiler',
	
	// Hide tag
	'ABBC3_HIDE_MOVER'			=> 'Esconder mensagem',
	'ABBC3_HIDE_TIP'			=> '[hide]mensagem[/hide]',
	'ABBC3_HIDE_VIEW'			=> '<dl class="hidebox"><dt class="hide">ESCONDER: ON</dt><dd>Você precisa responder o tópico para que depois possa ver a mensagem oculta</dd></dl>',
	
	// Moderator tag
	'ABBC3_MODERATOR_MOVER'		=> 'Mensagem do Moderador',
	'ABBC3_MODERATOR_TIP'		=> '[mod=name]texto[/mod]',
	'ABBC3_MODERATOR_VIEW'		=> '<table id="ModTable" width="100%" cellspacing="5" cellpadding="0" border="0" align="center"><tr><td class="row1" rowspan="2" align="middle" vAlign="center" width="1%"><span class="exclamation" title="Moderator warning" style="font-size:25px">&nbsp;!&nbsp;</span></td><td class="row2"><span class="genmed"><b>Mod Name:</b></span></td></tr><tr><td>Este texto é um exemplo</td></tr></table>',
	
	// Off topic tag
	'ABBC3_OFFTOPIC'			=> 'Fora do Assunto (Off topic)',
	'ABBC3_OFFTOPIC_MOVER'		=> 'Inserir o texto \"fora do assunto\" (off topic)',
	'ABBC3_OFFTOPIC_TIP'		=> '[offtopic]texto[/offtopic]',
	'ABBC3_OFFTOPIC_VIEW'		=> '<i><b><font color="#114499">Fora do Assunto (Off topic): </font></b><br/><font color="#2277DD">Este texto é um exemplo</font></i>',
	
	// NFO
	'ABBC3_NFO_MOVER'			=> 'Texto Informativo (NFO) (Funciona melhor no Internet explorer)',
	'ABBC3_NFO_TIP'				=> '[nfo]NFO texto[/nfo]',
	'ABBC3_NFO_VIEW'			=> '<table cellspacing="0" cellpadding="0" border="0" ><tr><td><span class="genmed"><b>NFO:</b></span></td></tr><tr><td class="nfo">' . str_replace(" ", "&nbsp;", '    ² ÛÛÛÛ ÛÛ±±°                                  °°°±±±±²²²ÛÛÛÛÛÛÛÛÛÛÛ  Û   ÛÛ ÛÛÛ') . '</td></tr></table>',
	
	// Justify Align
	'ABBC3_JUSTIFY_MOVER'		=> 'Texto Justificado',
	'ABBC3_JUSTIFY_TIP'			=> '[align=justify]texto[/align]',
	'ABBC3_JUSTIFY_VIEW'		=> '<div style="text-align:justify">Este texto é um exemplo</div>',
	
	// Right Align
	'ABBC3_RIGHT_MOVER'			=> 'Texto à Direita',
	'ABBC3_RIGHT_TIP'			=> '[align=right]texto[/align]',
	'ABBC3_RIGHT_VIEW'			=> '<div style="text-align:right">Este texto é um exemplo</div>',
	
	// Center Align
	'ABBC3_CENTER_MOVER'		=> 'Texto Centralizado',
	'ABBC3_CENTER_TIP'			=> '[align=center]text[/align]',
	'ABBC3_CENTER_VIEW'			=> '<div style="text-align:center">Este texto é um exemplo</div>',
	
	// Left Align
	'ABBC3_LEFT_MOVER'			=> 'Texto à Esquerda',
	'ABBC3_LEFT_TIP'			=> '[align=left]text[/align]',
	'ABBC3_LEFT_VIEW'			=> '<div style="text-left:justify">Este texto é um exemplo</div>',
	
	// Preformat
	'ABBC3_PRE_MOVER'			=> 'Texto Pré-formatado',
	'ABBC3_PRE_TIP'				=> '[pre]texto[/pre]',
	'ABBC3_PRE_VIEW'			=> '<pre>Este texto é um exemplo</pre>',
	
	// Superscript
	'ABBC3_SUP_MOVER'			=> 'Texto Sobrescrito',
	'ABBC3_SUP_TIP'				=> '[sup]texto[/sup]',
	'ABBC3_SUP_VIEW'			=> '<sup>Este texto é um exemplo</sup>',
	
	// Tab
	'ABBC3_TAB_MOVER'			=> 'Criar uma distância da margem',
	'ABBC3_TAB_TIP'				=> '[tab=nn]',
	'ABBC3_TAB_NOTE'			=> 'Coloque um número que será o espaçamento da margem (em pixels).',
	'ABBC3_TAB_VIEW'			=> '<span style="margin-left:20px;"></span>Este texto é um exemplo',
	
	// Superscript
	'ABBC3_SUB_MOVER'			=> 'Texto Subscrito',
	'ABBC3_SUB_TIP'				=> '[sub]texto[/sub]',
	'ABBC3_SUB_VIEW'			=> '<sub>Este texto é um exemplo</sub>',
	
	// Bold
	'ABBC3_BOLD_MOVER'			=> 'Negrito',
	'ABBC3_BOLD_TIP'			=> '[b]texto[/b]',
	'ABBC3_BOLD_VIEW'			=> '<strong>Este texto é um exemplo</strong>',
	
	// Italic
	'ABBC3_ITALIC_MOVER'		=> 'Itálico',
	'ABBC3_ITALIC_TIP'			=> '[i]texto[/i]',
	'ABBC3_ITALIC_VIEW'			=> '<em>Este texto é um exemplo</em>',
	
	// Underline
	'ABBC3_UNDERLINE_MOVER'		=> 'Sublinhado',
	'ABBC3_UNDERLINE_TIP'		=> '[u]texto[/u]',
	'ABBC3_UNDERLINE_VIEW'		=> '<span style="text-decoration: underline">Este texto é um exemplo</span>',
	
	// Strikethrough
	'ABBC3_STRIKE_MOVER'		=> 'Tachado',
	'ABBC3_STRIKE_TIP'			=> '[s]text[/s]',
	'ABBC3_STRIKE_VIEW'			=> '<span style="text-decoration: line-through;">Este texto é um exemplo</span>',
	
	// Text Fade
	'ABBC3_FADE_MOVER'			=> 'Esmaecido',
	'ABBC3_FADE_TIP'			=> '[fade]texto[/fade]',
	'ABBC3_FADE_VIEW'			=> '<span class="fade_link">Este texto é um exemplo</span> <script type="text/javascript">fade_ontimer()</script>',
	
	// Text Gradient
	'ABBC3_GRAD_MOVER'			=> 'Gradiente',
	'ABBC3_GRAD_TIP'			=> '',
	'ABBC3_GRAD_VIEW'			=> '<span style="color: #FF0000">T</span><span style="color: #F2000D">h</span><span style="color: #E6001A">i</span><span style="color: #D90026">s</span> <span style="color: #BF0040">i</span><span style="color: #B3004D">s</span> <span style="color: #990066">a</span> <span style="color: #800080">s</span><span style="color: #73008C">i</span><span style="color: #660099">m</span><span style="color: #5900A6">p</span><span style="color: #4D00B3">l</span><span style="color: #4000BF">e</span> <span style="color: #2600D9">t</span><span style="color: #1A00E6">e</span><span style="color: #0D00F2">x</span><span style="color: #0000FF">t</span>',
	'ABBC3_GRAD_MIN_ERROR'		=> 'Por favor, primeiro selecione o texto : ',
	'ABBC3_GRAD_MAX_ERROR'		=> 'Só permite para menos de 120 caracteres : ',
	
	// Glow text
	'ABBC3_GLOW_MOVER'			=> 'Luminoso (Somente no Internet Explorer)',
	'ABBC3_GLOW_TIP'			=> '[glow=(color)]texto[/glow]',
	'ABBC3_GLOW_VIEW'			=> '<div style="filter:Glow(color=red,strength=4);color:#ffffff;height:110%">Este texto é um exemplo</div>',
	
	// Shadow text
	'ABBC3_SHADOW_MOVER'		=> 'Sombreado (Somente no Internet Explorer)',
	'ABBC3_SHADOW_TIP'			=> '[shadow=(color)]texto[/shadow]',
	'ABBC3_SHADOW_VIEW'			=> '<div style="filter:shadow(color=black,strength=4);color:blue;height:110%">Este texto é um exemplo</div>',
	
	// Dropshadow text
	'ABBC3_DROPSHADOW_MOVER'	=> 'Sombra Projetada (Somente no Internet Explorer)',
	'ABBC3_DROPSHADOW_TIP'		=> '[dropshadow=(color)]texto[/dropshadow]',
	'ABBC3_DROPSHADOW_VIEW'		=> '<div style="filter:dropshadow(color=#999999,strength=4);color:blue;height:110%">Este texto é um exemplo</div>',
	
	// Blur text
	'ABBC3_BLUR_MOVER'			=> 'Desfocado (Somente no Internet Explorer)',
	'ABBC3_BLUR_TIP'			=> '[blur=(color)]texto[/blur]',
	'ABBC3_BLUR_VIEW'			=> '<div style="filter:Blur(strength=7);color:blue;height:110%">Este texto é um exemplo</div>',
	
	// Wave text
	'ABBC3_WAVE_MOVER'			=> 'Ondulado (Somente no Internet Explorer)',
	'ABBC3_WAVE_TIP'			=> '[wave=(color)]texto[/wave]',
	'ABBC3_WAVE_VIEW'			=> '<div style="filter:Wave(strength=2);color:blue;height:110%">Este texto é um exemplo</div>',
	
	// Unordered List
	'ABBC3_LISTB_MOVER'			=> 'Lista Numerada',
	'ABBC3_LISTB_TIP'			=> '[list]texto[/list]',
	'ABBC3_LISTB_NOTE'			=> 'Nota: Use [*] para criar listas',
	'ABBC3_LISTB_VIEW'			=> '<ul><li>Item 1</li><li>Item 2</li><li>Item 3</li></ul>',
	
	// Ordered List
	'ABBC3_LISTO_MOVER'			=> 'Lista Ordenada',
	'ABBC3_LISTO_TIP'			=> '[list=1|a]texto[/list]',
	'ABBC3_LISTO_NOTE'			=> 'Nota: Use [*] para criar listas',
	'ABBC3_LISTO_VIEW'			=> '<ol style="list-style-type: lower-alpha"><li>Item 1</li><li>Item 2</li><li>Item 3</li></ol>',
	
	// List item
	'ABBC3_LISTITEM_MOVER'		=> 'Lista de Item',
	'ABBC3_LISTITEM_TIP'		=> '[*]',
	'ABBC3_LISTITEM_NOTE'		=> 'Nota: Criar marcação dentro das listas',
	
	// Line Break
	'ABBC3_HR_MOVER'			=> 'Linha Horizontal',
	'ABBC3_HR_TIP'				=> '[hr]',
	'ABBC3_HR_NOTE'				=> 'Nota: Cria uma linha horizontal para separar texto',
	'ABBC3_HR_VIEW'				=> '<hr noshade color="#000000" size="1px">',
	
	// Message Box text direction Left to Light
	'ABBC3_RTL_MOVER'			=> 'Fazer com que o texto fique alinhado da Direita para Esquerda',
	'ABBC3_RTL_TIP'				=> '[dir=rtl]texto[/dir]',
	'ABBC3_RTL_VIEW'			=> '<BDO dir="rtl">Este texto é um exemplo</BDO>',
	
	// Message Box text direction right to Left
	'ABBC3_LTR_MOVER'			=> 'Fazer com que o texto fique alinhado da Esquerda para Direita',
	'ABBC3_LTR_TIP'				=> '[dir=ltr]texto[/dir]',
	'ABBC3_LTR_VIEW'			=> '<BDO dir="ltr">Este texto é um exemplo</BDO>',
	
	// Marquee Down
	'ABBC3_MARQD_MOVER'			=> 'Mover texto para baixo',
	'ABBC3_MARQD_TIP'			=> '[marq=down]texto[/marq]',
	'ABBC3_MARQD_VIEW'			=> '<marquee direction="down" scrolldelay="120" height="80px">Este texto é um exemplo</marquee>',
	
	// Marquee Up
	'ABBC3_MARQU_MOVER'			=> 'Mover texto para cima',
	'ABBC3_MARQU_TIP'			=> '[marq=up]text[/marq]',
	'ABBC3_MARQU_VIEW'			=> '<marquee direction="up" scrolldelay="120" height="80px">Este texto é um exemplo</marquee>',
	
	// Marquee Right
	'ABBC3_MARQR_MOVER'			=> 'Mover texto para direita',
	'ABBC3_MARQR_TIP'			=> '[marq=right]texto[/marq]',
	'ABBC3_MARQR_VIEW'			=> '<marquee direction="right" scrolldelay="120">Este texto é um exemplo</marquee>',
	
	// Marquee Left
	'ABBC3_MARQL_MOVER'			=> 'Mover texto para esquerda',
	'ABBC3_MARQL_TIP'			=> '[marq=left]text[/marq]',
	'ABBC3_MARQL_VIEW'			=> '<marquee direction="left" scrolldelay="120">Este texto é um exemplo</marquee>',
	
	// Table row cell wizard
	'ABBC3_TABLE_MOVER'			=> 'Inserir Tabela',
	'ABBC3_TABLE_TIP'			=> '[table=(ccs style)][tr=(ccs style)][td=(ccs style)]texto[/td][/tr][/table]',
	'ABBC3_TABLE_VIEW'			=> '<table style="width:50%;border:1px solid #cccccc;" cellspacing="0" cellpadding="0"><tr style="text-align:center;"><td style="border:1px solid #cccccc;">Este texto é um exemplo</td></tr></table>',
	
	'ABBC3_TABLE_STYLE'			=> 'Coloque o Estilo da Tabela',
	'ABBC3_TABLE_EXAMPLE'		=> 'Exemplo: width:50%;border:1px solid #cccccc;',
	
	'ABBC3_ROW_NUMBER'			=> 'Coloque o número de linhas',
	'ABBC3_ROW_ERROR'			=> 'Você não colocou o número de linhas',
	'ABBC3_ROW_STYLE'			=> 'Coloque o estilo de linhas',
	'ABBC3_ROW_EXAMPLE'			=> 'Exemplo: text-align:center;',
	
	'ABBC3_CELL_NUMBER'			=> 'Coloque o número de células',
	'ABBC3_CELL_ERROR'			=> 'Você não colocou o número de células',
	'ABBC3_CELL_STYLE'			=> 'Coloque o estilo de células',
	'ABBC3_CELL_EXAMPLE'		=> 'Exemplo: border:1px solid #cccccc;',
	
	// Simple upload files
	'ABBC3_UPLOAD_TITLE'		=> 'Advanced BBCode box 3 :: Página de Envio de Arquivos',
	'ABBC3_UPLOAD_MOVER'		=> 'Enviar Arquivo',
	'ABBC3_UPLOAD_LINK'			=> 'Este é o link para o seu arquivo',
	'ABBC3_UPLOAD_UPLOADED'		=> 'Enviado %s com sucesso!',
	'ABBC3_UPLOAD_NOT_UPLOADED'	=> 'Enviar %s não pode ser enviada',
	'ABBC3_UPLOAD_ALREADY'		=> 'Anexo %s já existe, por favor, escolha uma outra alternativa ou renomeie o arquivo e tente novamente',
	'ABBC3_UPLOAD_ERROR'		=> 'Não foi possível enviar o arquivo para %s. Erro do código : %d',
	'ABBC3_UPLOAD_EXTENSION'	=> 'Extensões permitidas',
	'ABBC3_UPLOAD_EXTENSION_EXPLAIN'	=> 'Você pode adicionar/alterar/excluir dados permitido. Separe extensões com uma vírgula (,)',
	'ABBC3_UPLOAD_DISABLED'		=> 'A extensão de envio %s não é permitido',
	'ABBC3_UPLOAD_SIZE'			=> 'O tamanho máximo',
	'ABBC3_UPLOAD_NOSIZE'		=> 'O tamanho do arquivo a ser enviado %d é muito grande. O tamanho máximo permitido para o envio é de %d KB',
	'ABBC3_UPLOAD_EMPTY'		=> 'O arquivo para o envio está vazio, por favor, selecione um arquivo primeiro',
	
	// Hyperlink Wizard
	'ABBC3_URL_TAG'				=> 'página',
	'ABBC3_URL_MOVER'			=> 'Endereço da Web',	
	'ABBC3_URL_TIP'				=> '[url]http://...[/url] ou [url=http://...]Nome da Web[/url]',
	'ABBC3_URL_EXAMPLE'			=> 'http://www.google.com',
	'ABBC3_URL_VIEW'			=> '<a href="http://www.google.com" class="postlink">Google</a>',
	
	// Email Wizard
	'ABBC3_EMAIL_TAG'			=> 'e-mail',
	'ABBC3_EMAIL_MOVER'			=> 'E-mail',
	'ABBC3_EMAIL_TIP'			=> '[email]user@server.ext[/email] ou [email=user@server.ext]Meu e-mail[/email]',
	'ABBC3_EMAIL_EXAMPLE'		=> 'user@server.ext',
	'ABBC3_EMAIL_VIEW'			=> '<a href="mailto:user@server.ext">user@server.ext</a>',
	
	// Ed2k link Wizard
	'ABBC3_ED2K_TAG'			=> 'ed2k',
	'ABBC3_ED2K_MOVER'			=> 'Link eD2K',
	'ABBC3_ED2K_TIP'			=> '[url]link do ed2k[/url] ou [url=link ed2k]Nome do ed2k[/url]',
	'ABBC3_ED2K_EXAMPLE'		=> 'ed2k://|file|The_Two_Towers-The_Purist_Edit-Trailer.avi|14997504|965c013e991ee246d63d45ea71954c4d|/',
	'ABBC3_ED2K_VIEW'			=> '<a href="ed2k://|file|The_Two_Towers-The_Purist_Edit-Trailer.avi|14997504|965c013e991ee246d63d45ea71954c4d|/" class="postlink">The_Two_Towers-The_Purist_Edit-Trailer.avi</a>',
	'ABBC3_ED2K_ADD'			=> 'Adicionar links selecionados para seu cliente ed2k',
	
	// Web included by iframe
	'ABBC3_WEB_TAG'				=> 'web',
	'ABBC3_WEB_MOVER'			=> 'Inserir uma página de um site no post',
	'ABBC3_WEB_TIP'				=> '[web width=200 height=100]URL da web[/web]',
	'ABBC3_WEB_EXAMPLE'			=> 'http://www.google.com',
	'ABBC3_WEB_VIEW'			=> '<iframe width="100%" height="100" src="http://www.google.com" style="font-size: 2px;"></iframe><br/>',
	
	// Image Wizard
	'ABBC3_IMG_TAG'				=> 'imagem',
	'ABBC3_IMG_MOVER'			=> 'Inserir imagem',
	'ABBC3_IMG_TIP'				=> '[img=(left|center|right)]http://...[/img]',
	'ABBC3_IMG_EXAMPLE'			=> 'http://www.google.com/intl/en_com/images/logo_plain.png',
	'ABBC3_IMG_VIEW'			=> '<div align="center"><img src="http://www.google.com/intl/en_com/images/logo_plain.png" alt="" /></div>',
	
	// Thumbnail
	'ABBC3_THUMBNAIL_TAG'		=> 'miniatura (thumbnail)',
	'ABBC3_THUMBNAIL_MOVER'		=> 'Inserir miniatura (thumbnail)',
	'ABBC3_THUMBNAIL_TIP'		=> '[thumbnail(=left|right)]http://...[/thumbnail]',
	'ABBC3_THUMBNAIL_EXAMPLE'	=> 'http://www.google.com/intl/en_com/images/logo_plain.png',
	'ABBC3_THUMBNAIL_VIEW'		=> '<a href="http://www.google.com/intl/en_com/images/logo_plain.png" rel="gb_imageset[]" alt="http://www.google.com/intl/en_com/images/logo_plain.png" title="" class="hoverbox"><img src="http://www.google.com/intl/en_com/images/logo_plain.png" alt="" border="0" width="100px" align="right"/></a>',
	
	// Imgshack
	'ABBC3_IMGSHACK_MOVER'		=> 'Inserir imagem do imageshack',
	'ABBC3_IMGSHACK_TIP'		=> '[url=http://imageshack.us][img=http://...][/img][/url]',
	'ABBC3_IMGSHACK_VIEW'		=> '<a href="http://img207.imageshack.us/my.php?image=advancedbbcodebox3prosidd3.gif" class="postlink"><img src="http://img207.imageshack.us/img207/1773/advancedbbcodebox3prosidd3.th.gif" alt="Image" /></a>',
	
	// testlink
	'ABBC3_TESTLINK_TAG'		=> 'testador de link',
	'ABBC3_TESTLINK_MOVER'		=> 'Inserir um arquivo armazenado em um servidor público',
	'ABBC3_TESTLINK_TIP'		=> '[testlink]http://rapidshare.com/files/...[/testlink]',
	'ABBC3_TESTLINK_NOTE'		=> 'Servidores válidos : rapidshare, megaupload, megarotic, depositfiles, megashares .',
	'ABBC3_TESTLINK_EXAMPLE'	=> 'http://rapidshare.com/files/86587996/ABBC3_v108.zip.html',
	'ABBC3_TESTLINK_VIEW'		=> '<dl class="testlink"><dd><font color="red" size="4" >X</font>&nbsp;<a href="http://rapidshare.com/files/86587996/ABBC3_v108.zip.html" >http://rapidshare.com/files/86587996/ABBC3_v108.zip.html</a><br /></dd></dl>',
	'ABBC3_TESTLINK_GOOD'		=> 'Arquivo encontrado no servidor !',
	'ABBC3_TESTLINK_WRONG'		=> 'Arquivo não encontrado !',
	
	// Click counter
	'ABBC3_CLICK_TAG'			=> 'click',
	'ABBC3_CLICK_MOVER'			=> 'Inserir contador de links',
	'ABBC3_CLICK_TIP'			=> '[click]http://...[/click] ou [click=http://...]Nome da Web[/click] ou [click][img]http://...[/img][/click]',
	'ABBC3_CLICK_EXAMPLE' 		=> 'http://www.google.com ' . ' ' . 'http://www.google.com/intl/en_com/images/logo_plain.png' ,
	'ABBC3_CLICK_VIEW'			=> '<a href="./click.php?id=1" >http://www.phpbb.com</a> ( Clicado 1 vez )<br />',
	'ABBC3_CLICK_TIME'			=> '( Clicado %d vez )',
	'ABBC3_CLICK_TIMES'			=> '( Clicado %d vezes )',
	
	// Search tag
	'ABBC3_SEARCH_MOVER'		=> 'Inserir busca de palavras',
	'ABBC3_SEARCH_TIP'			=> '[search(=(msn|yahoo|google))]texto[/search]',
	'ABBC3_SEARCH_VIEW'			=> $lang['SEARCH_MINI'] . ' ' . $config['sitename'] . ' : <a href="search.php?keywords=Advanced BBcode box 3">"Advanced BBcode box 3"</a><br/><br/>' . $lang['SEARCH_MINI'] . ' msn : <a href="http://search.live.com/results.aspx?q=Advanced BBcode box 3&mkt=tr-TR&lf=1" target="_blank">"Advanced BBcode box 3"</a><br/><br/>' .$lang['SEARCH_MINI'] . ' yahoo : <a href="http://search.yahoo.com/search?p=Advanced BBcode box 3" target="_blank">"Advanced BBcode box 3"</a><br/><br/>' . $lang['SEARCH_MINI'] . ' google : <a href="http://www.google.com.tr/search?q=Advanced BBcode box 3" target="_blank">"Advanced BBcode box 3"</a>',
	
	// BBvideo Wizard
	'ABBC3_BBVIDEO_TAG'			=> 'BBvídeo',
	'ABBC3_BBVIDEO_MOVER'		=> 'Inserir vídeo da web',
	'ABBC3_BBVIDEO_TIP'			=> '[BBvideo]URL do Vídeo[/BBvideo]',
	'ABBC3_BBVIDEO_EXAMPLE'		=> 'http://www.youtube.com/watch?v=TA4hm97m494',
	'ABBC3_BBVIDEO_VIEW'		=> '<object width="200" height="100"><param name="movie" value="http://www.youtube.com/v/TA4hm97m494" /><param name="wmode" value="transparent" /><embed src="http://www.youtube.com/v/TA4hm97m494" type="application/x-shockwave-flash" wmode="transparent" width="200" height="100"></embed></object>',
	'ABBC3_BBVIDEO_FILE'		=> 'Formato do vídeo',
	'ABBC3_BBVIDEO_VIDEO'		=> 'Vídeo de',
	
	// Custom bbcodes
	
));

?>