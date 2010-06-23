<?php
/**
* @package: phpBB3 :: Advanced BBCode box 3 -> language [pt_br][Portugu�s Portugu�s]
* @version: $Id: abbcode.php, v 1.0.9 2008/05/01 05:01:00 leviatan21 Exp $
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
	'ABBC3_HELP_WRITE'			=> 'Como utilizar',
	'ABBC3_HELP_VIEW'			=> 'Como será exibido',
	'ABBC3_HELP_ABOUT'			=> 'Advanced BBCode Box 3 por <a href="http://www.mssti.com/phpbb3">mssti</a>',
	'ABBC3_HELP_ALT'			=> 'Advanced BBCode Box 3 (aka ABBC3)',
	
// Image Resizer JS - Start
	'ABBC3_RESIZE_SMALL'		=> 'Clique nesta barra para ver a imagem completa.',
	'ABBC3_RESIZE_FILESIZE'		=> 'Esta imagem foi redimensionada. Clique nesta barra para ver a imagem completa. O tamanho original da imagem é de %1$sx%2$s e o tamanho é de %3$sKB.',
	'ABBC3_RESIZE_NOFILESIZE'	=> 'Esta imagem foi redimensionada. Clique nesta barra para ver a imagem completa. O tamanho original da imagem é de %1$sx%2$s.',
	'ABBC3_RESIZE_FULLSIZE'		=> 'Clique nesta barra para ver a imagem pequena.',
	
// Text to be applied to the helpline & mouseover & help page & Wizard texts
	'BBCODE_STYLES_TIP'			=> 'Dica: Estilos podem ser aplicados rapidamente nos textos.',
	
	'ABBC3_ERROR'				=> 'Erro: ',
	'ABBC3_ERROR_TAG'			=> 'Erro inesperado usando a tag: ',
	
	'ABBC3_ID'					=> 'Coloque o identificador (id):',
	'ABBC3_NOID'				=> 'Você não colocou o identificador (id)',
	'ABBC3_LINK'				=> 'Coloque o link ',
	'ABBC3_DESC'				=> 'Coloque uma descrição para o link ',
	'ABBC3_NAME'				=> 'Descrição',
	'ABBC3_NOLINK'				=> 'Você não colocou o link',
	'ABBC3_NODESC'				=> 'Você não colocou uma descrição',
	'ABBC3_WIDTH'				=> 'Coloque a largura',
	'ABBC3_WIDTH_NOTE'			=> 'Observação: O valor tem que estar em porcentagem',
	'ABBC3_NOWIDTH'				=> 'Você não colocou o tamanho da largura',
	'ABBC3_HEIGHT'				=> 'Coloque a altura',
	'ABBC3_HEIGHT_NOTE'			=> 'Observação: O valor tem que estar em porcentagem',
	'ABBC3_NOHEIGHT'			=> 'Você não colocou o tamanho da altura',
	
	'ABBC3_NOTE'				=> 'Observação',
	'ABBC3_EXAMPLE'				=> 'Exemplo',
	'ABBC3_EXAMPLES'			=> 'Exemplos',
	
// bbcodes texts	
	// Font Type Dropdown
	'ABBC3_FONT_MOVER'			=> 'Tipo da Fonte',
	'ABBC3_FONT_TIP'			=> '[font=Comic Sans MS]texto[/font]',
	'ABBC3_FONT_NOTE'			=> 'Observação: Você pode usar sua própria fonte',
	'ABBC3_FONT_VIEW'			=> '<span style="font-family:Comic Sans MS">Este texto é um exemplo</span>',
	
	// Font Size Dropdown
	'ABBC3_FONT_GIANT'			=> 'Gigante',
	'ABBC3_SIZE_MOVER'			=> 'Tamanho da Fonte',
	'ABBC3_SIZE_TIP'			=> '[size=150]texto grande[/size]',
	'ABBC3_SIZE_NOTE'			=> 'Observação: O valor será interpretado em percentagem',
	'ABBC3_SIZE_VIEW'			=> '<span style="font-size: 150%; line-height: 116%;">Este texto é um exemplo</span>',
	
	// Highlight Font Color Dropdown
	'ABBC3_HIGHLIGHT_MOVER'		=> 'Cor de Fundo',
	'ABBC3_HIGHLIGHT_TIP'		=> '[highlight=red]texto[/highlight]',
	'ABBC3_HIGHLIGHT_NOTE'		=> 'Observação: Você pode usar cores em html ([highlight=#FF0000]texto[/highlight])',
	'ABBC3_HIGHLIGHT_VIEW'		=> '<span style="background-color: red;">Este texto é um exemplo</span>',
	
	// Font Color Dropdown
	'ABBC3_COLOR_MOVER'			=> 'Cor da Fonte',
	'ABBC3_COLOR_TIP'			=> '[color=red]texto[/color]',
	'ABBC3_COLOR_NOTE'			=> 'Observação: Você pode usar cores em html ([color=#FF0000]texto[/color])',
	'ABBC3_COLOR_VIEW'			=> '<span style="color:red">Este texto é um exemplo</span>',
	
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
	'ABBC3_SPOIL_VIEW'			=> '<div class="spoilwrapper"><div class="spoiltitle"><input class="btnspoil" type="button" value="Exibir Spoiler" onclick="javascript:if (this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display != \'\') { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'\'; this.innerText = \'\'; this.value = \'Ocultar Spoiler\'; } else { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'none\'; this.innerText = \'\'; this.value = \'Exibir Spoiler\'; }" onfocus="this.blur();" /></div><div class="spoilcontent"><div style="display: none;">Este texto é um exemplo</div></div></div>',
	'SPOILER_SHOW'				=> 'Exibir Spoiler',
	'SPOILER_HIDE'				=> 'Esconder Spoiler',
	
//	// Hide tag
//	'ABBC3_HIDE_MOVER'			=> 'Esconder mensagem',
//	'ABBC3_HIDE_TIP'			=> '[hide]mensagem[/hide]',
//	'ABBC3_HIDE_VIEW'			=> '<dl class="hidebox"><dt class="hide">ESCONDER: ON</dt><dd>Você precisa responder o tópico para que depois possa ver a mensagem oculta</dd></dl>',
	
	// Moderator tag
	'ABBC3_MOD_MOVER'			=> 'Mensagem do Moderador',
	'ABBC3_MOD_TIP'				=> '[mod=name]texto[/mod]',
	'ABBC3_MOD_VIEW'			=> '<table id="ModTable" width="100%" cellspacing="5" cellpadding="0" border="0" align="center"><tr><td class="row1" rowspan="2" align="middle" vAlign="center" width="1%"><span class="exclamation" title="Advertência do Moderador" style="font-size:25px">&nbsp;!&nbsp;</span></td><td class="row2"><span class="genmed"><b>Nome do Mod:</b></span></td></tr><tr><td>Este texto é um exemplo</td></tr></table>',
	
	// Off topic tag
	'OFFTOPIC'					=> 'Fora do Assunto (Off topic)',
	'ABBC3_OFFTOPIC_MOVER'		=> 'Inserir o texto \"fora do assunto\" (off topic)',
	'ABBC3_OFFTOPIC_TIP'		=> '[offtopic]texto[/offtopic]',
	'ABBC3_OFFTOPIC_VIEW'		=> '<i><b><font color="#114499">Fora do Assunto (Off topic): </font></b><br/><font color="#2277DD">Este texto é um exemplo</font></i>',
	
	// NFO
	'ABBC3_NFO_MOVER'			=> 'Texto Informativo (NFO) (Funciona melhor no Internet explorer)',
	'ABBC3_NFO_TIP'				=> '[nfo]NFO texto[/nfo]',
	'ABBC3_NFO_VIEW'			=> '<table cellspacing="0" cellpadding="0" border="0" ><tr><td><span class="genmed"><b>NFO:</b></span></td></tr><tr><td class="nfo">' . str_replace(" ", "&nbsp;", '    ² ÛÛÛÛ ÛÛ±±°                                  °°°±±±±²²²ÛÛÛÛÛÛÛÛÛÛÛ  Û   ÛÛ ÛÛÛ') . '</td></tr></table>',
	
	// Justify Align
	'ABBC3_ALIGNJUSTIFY_MOVER'	=> 'Texto Justificado',
	'ABBC3_ALIGNJUSTIFY_TIP'	=> '[align=justify]texto[/align]',
	'ABBC3_ALIGNJUSTIFY_VIEW'	=> '<div style="text-align:justify">Este texto é um exemplo</div>',
	
	// Right Align
	'ABBC3_ALIGNRIGHT_MOVER'	=> 'Texto à Direita',
	'ABBC3_ALIGNRIGHT_TIP'		=> '[align=right]texto[/align]',
	'ABBC3_ALIGNRIGHT_VIEW'		=> '<div style="text-align:right">Este texto é um exemplo</div>',
	
	// Center Align
	'ABBC3_ALIGNCENTER_MOVER'	=> 'Texto Centralizado',
	'ABBC3_ALIGNCENTER_TIP'		=> '[align=center]texto[/align]',
	'ABBC3_ALIGNCENTER_VIEW'	=> '<div style="text-align:center">Este texto é um exemplo</div>',
	
	// Left Align
	'ABBC3_ALIGNLEFT_MOVER'		=> 'Texto à Esquerda',
	'ABBC3_ALIGNLEFT_TIP'		=> '[align=left]texto[/align]',
	'ABBC3_ALIGNLEFT_VIEW'		=> '<div style="text-left:justify">Este texto é um exemplo</div>',
	
	// Preformat
	'ABBC3_PRE_MOVER'			=> 'Texto Pré-formatado',
	'ABBC3_PRE_TIP'				=> '[pre]texto[/pre]',
	'ABBC3_PRE_VIEW'			=> '<pre>Este texto é um exemplo</pre>',
	
	// Tab
	'ABBC3_TAB_MOVER'			=> 'Criar uma distância da margem',
	'ABBC3_TAB_TIP'				=> '[tab=nn]',
	'ABBC3_TAB_NOTE'			=> 'Coloque um número que será o espaçamento da margem (em pixels).',
	'ABBC3_TAB_VIEW'			=> '<span style="margin-left:20px;"></span>Este texto é um exemplo',
	
	// Superscript
	'ABBC3_SUP_MOVER'			=> 'Texto Sobrescrito',
	'ABBC3_SUP_TIP'				=> '[sup]texto[/sup]',
	'ABBC3_SUP_VIEW'			=> '<sup>Este texto é um exemplo</sup>',
	
	// Subscript
	'ABBC3_SUB_MOVER'			=> 'Texto Subscrito',
	'ABBC3_SUB_TIP'				=> '[sub]texto[/sub]',
	'ABBC3_SUB_VIEW'			=> '<sub>Este texto é um exemplo</sub>',
	
	// Bold
	'ABBC3_B_MOVER'				=> 'Negrito',
	'ABBC3_B_TIP'				=> '[b]texto[/b]',
	'ABBC3_B_VIEW'				=> '<strong>Este texto é um exemplo</strong>',
	
	// Italic
	'ABBC3_I_MOVER'				=> 'Itálico',
	'ABBC3_I_TIP'				=> '[i]texto[/i]',
	'ABBC3_I_VIEW'				=> '<em>Este texto é um exemplo</em>',
	
	// Underline
	'ABBC3_U_MOVER'				=> 'Sublinhado',
	'ABBC3_U_TIP'				=> '[u]texto[/u]',
	'ABBC3_U_VIEW'				=> '<span style="text-decoration: underline">Este texto é um exemplo</span>',
	
	// Strikethrough
	'ABBC3_S_MOVER'				=> 'Tachado',
	'ABBC3_S_TIP'				=> '[s]texto[/s]',
	'ABBC3_S_VIEW'				=> '<span style="text-decoration: line-through;">Este texto é um exemplo</span>',
	
	// Text Fade
	'ABBC3_FADE_MOVER'			=> 'Esmaecido',
	'ABBC3_FADE_TIP'			=> '[fade]texto[/fade]',
	'ABBC3_FADE_VIEW'			=> '<span class="fade_link">Este texto é um exemplo</span> <script type="text/javascript">fade_ontimer()</script>',
	
	// Text Gradient
	'ABBC3_GRAD_MOVER'			=> 'Gradiente',
	'ABBC3_GRAD_TIP'			=> '',
	'ABBC3_GRAD_VIEW'			=> '<span style="color: #FF0000">T</span><span style="color: #F2000D">h</span><span style="color: #E6001A">i</span><span style="color: #D90026">s</span> <span style="color: #BF0040">i</span><span style="color: #B3004D">s</span> <span style="color: #990066">a</span> <span style="color: #800080">s</span><span style="color: #73008C">i</span><span style="color: #660099">m</span><span style="color: #5900A6">p</span><span style="color: #4D00B3">l</span><span style="color: #4000BF">e</span> <span style="color: #2600D9">t</span><span style="color: #1A00E6">e</span><span style="color: #0D00F2">x</span><span style="color: #0000FF">t</span>',
	'ABBC3_GRAD_MIN_ERROR'		=> 'Por favor, primeiro selecione o texto: ',
	'ABBC3_GRAD_MAX_ERROR'		=> 'Só permite para menos de 120 caracteres: ',
	
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
	'ABBC3_LISTB_NOTE'			=> 'Observação: Use [*] para criar listas',
	'ABBC3_LISTB_VIEW'			=> '<ul><li>Item 1</li><li>Item 2</li><li>Item 3</li></ul>',
	
	// Ordered List
	'ABBC3_LISTO_MOVER'			=> 'Lista Ordenada',
	'ABBC3_LISTO_TIP'			=> '[list=1|a]texto[/list]',
	'ABBC3_LISTO_NOTE'			=> 'Observação: Use [*] para criar listas',
	'ABBC3_LISTO_VIEW'			=> '<ol style="list-style-type: lower-alpha"><li>Item 1</li><li>Item 2</li><li>Item 3</li></ol>',
	
	// List item
	'ABBC3_LISTITEM_MOVER'		=> 'Lista de Item',
	'ABBC3_LISTITEM_TIP'		=> '[*]',
	'ABBC3_LISTITEM_NOTE'		=> 'Observação: Criar marcação dentro das listas',
	
	// Line Break
	'ABBC3_HR_MOVER'			=> 'Linha Horizontal',
	'ABBC3_HR_TIP'				=> '[hr]',
	'ABBC3_HR_NOTE'				=> 'Observação: Cria uma linha horizontal para separar texto',
	'ABBC3_HR_VIEW'				=> '<hr noshade color="#000000" size="1px">',
	
	// Message Box text direction Left to Light
	'ABBC3_DIRRTL_MOVER'		=> 'Fazer com que o texto fique alinhado da Direita para Esquerda',
	'ABBC3_DIRRTL_TIP'			=> '[dir=rtl]texto[/dir]',
	'ABBC3_DIRRTL_VIEW'			=> '<BDO dir="rtl">Este texto é um exemplo</BDO>',
	
	// Message Box text direction right to Left
	'ABBC3_DIRLTR_MOVER'		=> 'Fazer com que o texto fique alinhado da Esquerda para Direita',
	'ABBC3_DIRLTR_TIP'			=> '[dir=ltr]texto[/dir]',
	'ABBC3_DIRLTR_VIEW'			=> '<BDO dir="ltr">Este texto é um exemplo</BDO>',
	
	// Marquee Down
	'ABBC3_MARQDOWN_MOVER'		=> 'Mover texto para baixo',
	'ABBC3_MARQDOWN_TIP'		=> '[marq=down]texto[/marq]',
	'ABBC3_MARQDOWN_VIEW'		=> '<marquee direction="down" scrolldelay="120" height="80px">Este texto é um exemplo</marquee>',
	
	// Marquee Up
	'ABBC3_MARQUP_MOVER'		=> 'Mover texto para cima',
	'ABBC3_MARQUP_TIP'			=> '[marq=up]texto[/marq]',
	'ABBC3_MARQUP_VIEW'			=> '<marquee direction="up" scrolldelay="120" height="80px">Este texto é um exemplo</marquee>',
	
	// Marquee Right
	'ABBC3_MARQRIGHT_MOVER'		=> 'Mover texto para direita',
	'ABBC3_MARQRIGHT_TIP'		=> '[marq=right]texto[/marq]',
	'ABBC3_MARQRIGHT_VIEW'		=> '<marquee direction="right" scrolldelay="120">Este texto é um exemplo</marquee>',
	
	// Marquee Left
	'ABBC3_MARQLEFT_MOVER'		=> 'Mover texto para esquerda',
	'ABBC3_MARQLEFT_TIP'		=> '[marq=left]texto[/marq]',
	'ABBC3_MARQLEFT_VIEW'		=> '<marquee direction="left" scrolldelay="120">Este texto é um exemplo</marquee>',
	
	// Table row cell wizard
	'ABBC3_TABLE_MOVER'			=> 'Inserir Tabela',
	'ABBC3_TABLE_TIP'			=> '[table=(ccs style)][tr=(ccs style)][td=(ccs style)]texto[/td][/tr][/table]',
	'ABBC3_TABLE_VIEW'			=> '<table style="width:50%;border:1px solid #cccccc;" cellspacing="0" cellpadding="0"><tr style="text-align:center;"><td style="border:1px solid #cccccc;">Este texto é um exemplo</td></tr></table>',
	
	'ABBC3_TABLE_STYLE'			=> 'Coloque o estilo da tabela',
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
	'ABBC3_UPLOAD_TITLE'		=> 'Advanced BBCode box 3 :: Página de envio de arquivos',
	'ABBC3_UPLOAD_MOVER'		=> 'Enviar arquivo',
	'ABBC3_UPLOAD_LINK'			=> 'Este é o link para o seu arquivo',
	'ABBC3_UPLOAD_UPLOADED'		=> '%s enviado com sucesso!',
	'ABBC3_UPLOAD_NOT_UPLOADED'	=> '%s não pode ser enviado',
	'ABBC3_UPLOAD_ALREADY'		=> 'Anexo %s já existe, por favor, escolha uma outra alternativa ou renomeie o arquivo e tente novamente',
	'ABBC3_UPLOAD_ERROR'		=> 'Não foi possível enviar o arquivo para %s. Código do erro: %d',
	'ABBC3_UPLOAD_EXTENSION'	=> 'Extensões permitidas',
	'ABBC3_UPLOAD_EXTENSION_EXPLAIN'	=> 'Você pode adicionar/alterar/excluir dados permitidos. Separe extensões com uma vírgula (,)',
	'ABBC3_UPLOAD_DISABLED'		=> 'A extensão %s não é permitida',
	'ABBC3_UPLOAD_SIZE'			=> 'Tamanho máximo',
	'ABBC3_UPLOAD_NOSIZE'		=> 'O tamanho do arquivo %d é muito grande. O tamanho máximo permitido para o envio é de %d KB',
	'ABBC3_UPLOAD_EMPTY'		=> 'O arquivo enviado está vazio, por favor, selecione um arquivo primeiro',
	
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
	'ABBC3_WEB_MOVER'			=> 'Inserir uma página de um site na mensagem',
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
	
	// Rapid share checker
	'ABBC3_RAPIDSHARE_TAG'		=> 'rapidshare',
	'ABBC3_RAPIDSHARE_MOVER'	=> 'Inserir arquivo do Rapidshare',
	'ABBC3_RAPIDSHARE_TIP'		=> '[rapidshare]http://rapidshare.com/files/...[/rapidshare]',
	'ABBC3_RAPIDSHARE_EXAMPLE'	=> 'http://rapidshare.com/files/86587996/ABBC3_v108.zip.html',
	'ABBC3_RAPIDSHARE_VIEW'		=> '<a href="http://rapidshare.com/files/86587996/ABBC3_v108.zip.html" >http://rapidshare.com/files/86587996/ABBC3_v108.zip.html</a> <font color="green" size="4" >Arquivo não encontrado!</font><br />',
	'ABBC3_RAPIDSHARE_GOOD'		=> 'Arquivo encontrado no servidor!',
	'ABBC3_RAPIDSHARE_WRONG'	=> 'Arquivo não encontrado!',
	
	// testlink
	'ABBC3_TESTLINK_TAG'		=> 'testador de link',
	'ABBC3_TESTLINK_MOVER'		=> 'Inserir um arquivo armazenado em um servidor público',
	'ABBC3_TESTLINK_TIP'		=> '[testlink]http://rapidshare.com/files/...[/testlink]',
	'ABBC3_TESTLINK_NOTE'		=> 'Servidores válidos : rapidshare, megaupload, megarotic, depositfiles, megashares .',
	'ABBC3_TESTLINK_EXAMPLE'	=> 'http://rapidshare.com/files/86587996/ABBC3_v108.zip.html',
	'ABBC3_TESTLINK_VIEW'		=> '<dl class="testlink"><dd><font color="red" size="4" >X</font>&nbsp;<a href="http://rapidshare.com/files/86587996/ABBC3_v108.zip.html" >http://rapidshare.com/files/86587996/ABBC3_v108.zip.html</a><br /></dd></dl>',
	'ABBC3_TESTLINK_GOOD'		=> 'Arquivo encontrado no servidor!',
	'ABBC3_TESTLINK_WRONG'		=> 'Arquivo não encontrado!',
	
	// Click counter
	'ABBC3_CLICK_TAG'			=> 'click',
	'ABBC3_CLICK_MOVER'			=> 'Inserir contador de links',
	'ABBC3_CLICK_TIP'			=> '[click]http://...[/click], [click=http://...]Nome da Web[/click] ou [click][img]http://...[/img][/click]',
	'ABBC3_CLICK_EXAMPLE' 		=> 'http://www.google.com ' . ' ' . 'http://www.google.com/intl/en_com/images/logo_plain.png' ,
	'ABBC3_CLICK_VIEW'			=> '<a href="./click.php?id=1" >http://www.phpbb.com</a> (Clicado 1 vez)<br />',
	'ABBC3_CLICK_TIME'			=> '(Clicado %d vez)',
	'ABBC3_CLICK_TIMES'			=> '(Clicado %d vezes)',
	
	// Search tag
	'ABBC3_SEARCH_MOVER'		=> 'Inserir busca de palavras',
	'ABBC3_SEARCH_TIP'			=> '[search(=(msn|yahoo|google))]texto[/search]',
	'ABBC3_SEARCH_VIEW'			=> $lang['SEARCH_MINI'] . ' ' . $config['sitename'] . ' : <a href="search.php?keywords=Advanced BBcode box 3">"Advanced BBcode box 3"</a><br/><br/>' . $lang['SEARCH_MINI'] . ' MSN: <a href="http://search.live.com/results.aspx?q=Advanced BBcode box 3&mkt=tr-TR&lf=1" target="_blank">"Advanced BBcode box 3"</a><br/><br/>' .$lang['SEARCH_MINI'] . ' Yahoo : <a href="http://search.yahoo.com/search?p=Advanced BBcode box 3" target="_blank">"Advanced BBcode box 3"</a><br/><br/>' . $lang['SEARCH_MINI'] . ' Google : <a href="http://www.google.com.tr/search?q=Advanced BBcode box 3" target="_blank">"Advanced BBcode box 3"</a>',
	
	// BBvideo Wizard
	'ABBC3_BBVIDEO_TAG'			=> 'BBvídeo',
	'ABBC3_BBVIDEO_MOVER'		=> 'Inserir vídeo da web',
	'ABBC3_BBVIDEO_TIP'			=> '[BBvideo]URL do Vídeo[/BBvideo]',
	'ABBC3_BBVIDEO_EXAMPLE'		=> 'http://www.youtube.com/watch?v=TA4hm97m494',
	'ABBC3_BBVIDEO_VIEW'		=> '<object width="200" height="100"><param name="movie" value="http://www.youtube.com/v/TA4hm97m494" /><param name="wmode" value="transparent" /><embed src="http://www.youtube.com/v/TA4hm97m494" type="application/x-shockwave-flash" wmode="transparent" width="200" height="100"></embed></object>',
	'ABBC3_BBVIDEO_FILE'		=> 'Formato do vídeo',
	'ABBC3_BBVIDEO_VIDEO'		=> 'Vídeo de',
	
	// Flash (swf) Wizard
	'ABBC3_FLASH_TAG'			=> 'flash',
	'ABBC3_FLASH_MOVER'			=> 'Inserir arquivo em Flash (swf)',
	'ABBC3_FLASH_TIP'			=> '[flash width=# height=#]URL do arquivo em flash[/flash] ou [flash width,height]URL do arquivo em flash[/flash]',
	'ABBC3_FLASH_EXAMPLE'		=> 'http://www.adobe.com/support/flash/ts/documents/test_version/version.swf',
	'ABBC3_FLASH_VIEW'			=> '<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0" width="200" height="100"><param name="movie" value="http://www.adobe.com/support/flash/ts/documents/test_version/version.swf" /><param name="play" value="true" /><param name="loop" value="true" /><param name="quality" value="high" /><param name="allowScriptAccess" value="never" /><param name="allowNetworking" value="internal" /><embed src="http://www.adobe.com/support/flash/ts/documents/test_version/version.swf" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" width="200" height="100" play="true" loop="true" quality="high" allowscriptaccess="never" allownetworking="internal"></embed></object>',
	
	// Flash (flv) Wizard
	'ABBC3_FLV_TAG'				=> 'flash',
	'ABBC3_FLV_MOVER'			=> 'Inserir arquivo de Vídeo em Flash (flv)',
	'ABBC3_FLV_TIP'				=> '[flv width=# height=#]URL do vídeo em flash[/flv] ou [flv width,height]URL do vídeo em flash[/flv]',
	'ABBC3_FLV_EXAMPLE' 		=> 'http://www.channel-ai.com/video/eyn/demo1.flv',
	'ABBC3_FLV_VIEW'			=> '<embed src="../images/flvplayer.swf" width="200" height="100" bgcolor="#FFFFFF" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="file=../files/demo1.flv&autostart=false" />',
	
	// Streaming Video Wizard
	'ABBC3_VIDEO_TAG'			=> 'vídeo',
	'ABBC3_VIDEO_MOVER'			=> 'Inserir Vídeo',
	'ABBC3_VIDEO_TIP'			=> '[video width=# height=#]URL do vídeo[/video]',
	'ABBC3_VIDEO_EXAMPLE'		=> 'http://s25wm.castup.net/992150003-52.wmv',
	'ABBC3_VIDEO_VIEW'			=> '<object width="200" height="100" classid="CLSID:6BF52A52-394A-11d3-B153-00C04F79FAA6" id="wmstream_"><param name="url" value="$3" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /><param name="src" value="$3" /><!--[if !IE]>--><object width="200" height="100" type="video/x-ms-wmv" data="$3"><param name="src" value="$3" /><param name="controller" value="1" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /></object><!--<![endif]--></object>',
	
	// Streaming Audio Wizard
	'ABBC3_STREAM_TAG'			=> 'áudio',
	'ABBC3_STREAM_MOVER'		=> 'Inserir aúdio',
	'ABBC3_STREAM_TIP'			=> '[stream]URL do áudio[/stream]',
	'ABBC3_STREAM_EXAMPLE'		=> 'http://realdev1.realise.com/rossa/mov/demo.mp3',
	'ABBC3_STREAM_VIEW'			=> '<object width="200" height="45" classid="CLSID:6BF52A52-394A-11d3-B153-00C04F79FAA6" id="wmstream_"><param name="url" value="http://realdev1.realise.com/rossa/mov/demo.mp3" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /><param name="src" value="http://realdev1.realise.com/rossa/mov/demo.mp3" /><!--[if !IE]>--><object width="200" height="45" type="video/x-ms-wmv" data="http://realdev1.realise.com/rossa/mov/demo.mp3"><param name="src" value="http://realdev1.realise.com/rossa/mov/demo.mp3" /><param name="controller" value="1" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /></object><!--<![endif]--></object>',
	
	// Quick time
	'ABBC3_QUICKTIME_TAG'		=> 'Quick time',
	'ABBC3_QUICKTIME_MOVER'		=> 'Inserir vídeo do Quick time',
	'ABBC3_QUICKTIME_TIP'		=> '[quicktime width=# height=#]URL do Quick time[/quicktime]',
	'ABBC3_QUICKTIME_EXAMPLE'	=> 'http://www.nature.com/neuro/journal/v3/n3/extref/Li_control.mov.qt' . ' ' . 'http://www.carnivalmidways.com/images/Music/thisisatest.mp3',
	'ABBC3_QUICKTIME_VIEW'		=> '<object id="qtstream_" classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab#version=6,0,2,0" width="200" height="100"><param name="src" value="http://www.nature.com/neuro/journal/v3/n3/extref/Li_control.mov.qt" /><param name="controller" value="true" /><param name="autoplay" value="false" /><param name="type" value="video/quicktime" /><embed name="qtstream_" src="http://www.nature.com/neuro/journal/v3/n3/extref/Li_control.mov.qt" pluginspage="http://www.apple.com/quicktime/download/" enablejavascript="true" controller="true" width="200" height="100" type="video/quicktime" autoplay="false"></embed></object>',
	
	// Real Media Wizard
	'ABBC3_RAM_TAG'				=> 'Real Media',
	'ABBC3_RAM_MOVER'			=> 'Inserir vídeo do Real Media',
	'ABBC3_RAM_TIP'				=> '[ram]URL do Real Media[/ram]',
	'ABBC3_RAM_EXAMPLE'			=> 'http://www.bbc.co.uk/scotland/radioscotland/media/radioscotland.ram',
	'ABBC3_RAM_VIEW'			=> '<object id="rmstream_" classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" width="200" height="100"><param name="src" value="http://www.bbc.co.uk/scotland/radioscotland/media/radioscotland.ram" /><param name="autostart" value="false" /><param name="controls" value="ImageWindow" /><param name="console" value="ctrls_" /><param name="prefetch" value="false" /><embed name="rmstream_" type="audio/x-pn-realaudio-plugin" src="http://www.bbc.co.uk/scotland/radioscotland/media/radioscotland.ram" width="200" height="100" autostart="false" controls="ImageWindow" console="ctrls_" prefetch="false"></embed></object><br /><object id="ctrls_" classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" width="200" height="36"><param name="controls" value="ControlPanel" /><param name="console" value="ctrls_" /><embed name="ctrls_" type="audio/x-pn-realaudio-plugin" width="200" height="36" controls="ControlPanel" console="ctrls_"></embed></object>',
	
//	// Stage6 video Wizard
//	'ABBC3_STAGE6_TAG'			=> 'Stage6 Vídeo',
//	'ABBC3_STAGE6_MOVER'		=> 'Inserir vídeo do Stage6', // de http://www.stage6.com/
//	'ABBC3_STAGE6_TIP'			=> '[stage6]Stage6 ID[/stage6]',
//	'ABBC3_STAGE6_EXAMPLE'		=> '2068715',
//	'ABBC3_STAGE6_VIEW'			=> '<object  classid="clsid:67DABFBF-D0AB-41fa-9C46-CC0F21721616" codebase="http://download.divx.com/player/DivXBrowserPlugin.cab" width="200" height="100" ><param name="src" value="http://video.stage6.com/2068715/.divx" /><param name="autoplay" value="false" /><param name="custommode" value="Stage6" /><param name="showpostplaybackad" value="false" /><embed type="video/divx" src="http://video.stage6.com/2068715/.divx" pluginspage="http://go.divx.com/plugin/download/" showpostplaybackad="false" custommode="Stage6" autoplay="false" width="200" height="100" /></object><br />',
	
	// Google video Wizard
	'ABBC3_GVIDEO_TAG'			=> 'Google Vídeo',
	'ABBC3_GVIDEO_MOVER'		=> 'Inserir vídeo do Google',
	'ABBC3_GVIDEO_TIP'			=> '[GVideo]URL do vídeo[/GVideo]',
	'ABBC3_GVIDEO_EXAMPLE'		=> 'http://video.google.com/videoplay?docid=-8351924403384451128',
	'ABBC3_GVIDEO_VIEW'			=> '<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0" width="200" height="100"><param name="movie" value="http://video.google.com/googleplayer.swf?docid=-8351924403384451128" /><param name="play" value="false" /><param name="loop" value="false" /><param name="quality" value="high" /><param name="allowScriptAccess" value="never" /><param name="allowNetworking" value="internal" /><embed src="http://video.google.com/googleplayer.swf?docid=-8351924403384451128" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" width="200" height="100" play="false" loop="false" quality="high" allowscriptaccess="never" allownetworking="internal"></embed></object>',
	
	// Youtube video Wizard
	'ABBC3_YOUTUBE_TAG'			=> 'Youtube Vídeo',
	'ABBC3_YOUTUBE_MOVER'		=> 'Inserir vídeo do Youtube',
	'ABBC3_YOUTUBE_TIP'			=> '[youtube]URL do vídeo[/youtube]',
	'ABBC3_YOUTUBE_EXAMPLE'		=> 'http://www.youtube.com/watch?v=TA4hm97m494',
	'ABBC3_YOUTUBE_VIEW'		=> '<object width="200" height="100"><param name="movie" value="http://www.youtube.com/v/TA4hm97m494" /><param name="wmode" value="transparent" /><embed src="http://www.youtube.com/v/TA4hm97m494" type="application/x-shockwave-flash" wmode="transparent" width="200" height="100"></embed></object>',
	
	// Veoh video
	'ABBC3_VEOH_TAG'			=> 'Veoh',
	'ABBC3_VEOH_MOVER'			=> 'Inserir vídeo do Veoh',
	'ABBC3_VEOH_TIP'			=> '[veoh]URL do vídeo[/veoh]',
	'ABBC3_VEOH_EXAMPLE'		=> 'http://www.veoh.com/videos/v1409404EqT5SJjM',
	'ABBC3_VEOH_VIEW'			=> '<embed src="http://www.veoh.com/videodetails2.swf?permalinkId=v1409404EqT5SJjM&id=anonymous&player=videodetailsembedded&videoAutoPlay=0" allowFullScreen="true" width="200" height="100" bgcolor="#000000" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>',
	
	// Collegehumor video
	'ABBC3_COLLEGEHUMOR_TAG'	=> 'collegehumor',
	'ABBC3_COLLEGEHUMOR_MOVER'	=> 'Inserir vídeo do collegehumor',
	'ABBC3_COLLEGEHUMOR_TIP'	=> '[collegehumor]URL do vídeo do collegehumor [/collegehumor]',
	'ABBC3_COLLEGEHUMOR_EXAMPLE'=> 'http://www.collegehumor.com/video:1802097',
	'ABBC3_COLLEGEHUMOR_VIEW'	=> '<object type="application/x-shockwave-flash" data="http://www.collegehumor.com/moogaloop/moogaloop.swf?clip_id=1802097&fullscreen=1" width="200" height="100" ><param name="allowfullscreen" value="true" /><param name="movie" quality="best" value="http://www.collegehumor.com/moogaloop/moogaloop.swf?clip_id=1802097&fullscreen=1" /></object>',

	// Dailymotion video
	'ABBC3_DMO_MOVER'			=> 'Inserir vídeo do dailymotion', // de http://www.dailymotion.com/
	'ABBC3_DM_TIP'				=> '[dm]Dailymotion ID[/dm]',
	'ABBC3_DM_EXAMPLE'			=> 'http://www.dailymotion.com/swf/x3hm7o',
	'ABBC3_DM_VIEW'				=> '<object width="200" height="100"><param name="movie" value="http://www.dailymotion.com/swf/x3hm7o" /><param name="allowFullScreen" value="true" /><param name="allowScriptAccess" value="never" /><embed src="http://www.dailymotion.com/swf/x3hm7o" type="application/x-shockwave-flash" width="200" height="100" allowFullScreen="true" allowScriptAccess="never"></embed></object>',
	
	// Gamespot video
	'ABBC3_GAMESPOT_MOVER'		=> 'Inserir vídeo do Gamespot',
	'ABBC3_GAMESPOT_TIP'		=> '[gamespot]URL do vídeo do Gamespot[gamespot]',
	'ABBC3_GAMESPOT_EXAMPLE'	=> 'http://www.gamespot.com/video/944074/6185798/tom-clancys-rainbow-six-vegas-2-official-trailer-3',
	'ABBC3_GAMESPOT_VIEW'		=> '<embed id="mymovie" width="200" height="100" flashvars="paramsURI=http%3A%2F%2Fwww%2Egamespot%2Ecom%2Fpages%2Fvideo%5Fplayer%2Fproteus%5Fxml%2Ephp%3Fadseg%3D%26adgrp%3D%26sid%3D6185798%26pid%3D944074%26mb%3D%26onid%3D%26nc%3D1202626246593%26embedded%3D1%26showWatermark%3D0%26autoPlay%3D0" allowfullscreen="true" allowscriptaccess="never" quality="high" name="mymovie" src="http://image.com.com/gamespot/images/cne_flash/production/media_player/proteus/gs/proteus_embed.swf" type="application/x-shockwave-flash"/>',
	
	// Gametrailers video
	'ABBC3_GAMETRAILERS_MOVER'	=> 'Inserir vídeo do Gametrailers',
	'ABBC3_GAMETRAILERS_TIP'	=> '[gametrailers]URL do vídeo do Gametrailers[/gametrailers]',
	'ABBC3_GAMETRAILERS_EXAMPLE'=> 'http://www.gametrailers.com/player/30461.html',
	'ABBC3_GAMETRAILERS_VIEW'	=> '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"  codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" id="gtembed" width="200" height="100"><param name="allowScriptAccess" value="never" /><param name="allowFullScreen" value="true" /><param name="movie" value="http://www.gametrailers.com/remote_wrap.php?mid=30461" /><param name="quality" value="high" /><embed src="http://www.gametrailers.com/remote_wrap.php?mid=30461" swLiveConnect="true" name="gtembed" align="middle" allowScriptAccess="never" allowFullScreen="true" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="200" height="100"></embed></object>',
	
	// IGN video
	'ABBC3_IGNVIDEO_MOVER'		=> 'Inserir vídeo do Ign',
	'ABBC3_IGNVIDEO_TIP'		=> '[ignvideo]URL do vídeo do ING[/ignvideo]',
	'ABBC3_IGNVIDEO_EXAMPLE'	=> 'object_ID=967025&downloadURL=http://tvmovies.ign.com/tv/video/article/850/850894/knightrider_trailer_020808_flvlow.flv',
	'ABBC3_IGNVIDEO_VIEW'		=> '<embed src="http://videomedia.ign.com/ev/ev.swf" flashvars="object_ID=967025&downloadURL=http://tvmovies.ign.com/tv/video/article/850/850894/knightrider_trailer_020808_flvlow.flv" type="application/x-shockwave-flash" width="200" height="100" ></embed>',
	
	// LiveLeak video
	'ABBC3_LIVELEAK_MOVER'		=> 'Inserir vídeos do Liveleak',
	'ABBC3_LIVELEAK_TIP'		=> '[liveleak]URL do vídeo do Liveleak[/liveleak]',
	'ABBC3_LIVELEAK_EXAMPLE'	=> 'http://www.liveleak.com/view?i=413_1202590393',
	'ABBC3_LIVELEAK_VIEW'		=> '<object type="application/x-shockwave-flash" width="200" height="100" wmode="transparent" data="http://www.liveleak.com/player.swf?autostart=false&token=i=413_1202590393"><param name="movie" value="http://www.liveleak.com/player.swf?autostart=false&token=$1" /><param name="wmode" value="transparent" /><param name="quality" value="high" /></object>',
	
	// Custom BBcodes
));

?>