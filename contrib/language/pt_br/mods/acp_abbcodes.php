<?php
/**
* @package: phpBB3 :: Advanced BBCode box 3 -> language [pt_br][Portugu�s Portugu�s]
* @version: $Id: acp_abbcode.php, v 1.0.9 2008/05/01 05:01:00 leviatan21 Exp $
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
	'ACP_ABBCODES'						=> 'Advanced BBcodes Box 3',
	'ACP_ABBCODES_EXPLAIN'				=> 'Aqui você pode gerenciar os estilos disponíveis para a <strong>[ <a href="http://www.mssti.com/phpbb3" target="_blank">ABBC3</a> ]</strong> em seu fórum.<br/>Você pode alterar estilos existentes, atualizar, desativar e reativar. Você também pode ver um estilo parecido usando a função prever. <br/><em>O estilo padrão atual é marcado pela presença de um asterisco (*). Também está listada a contagem total dos utilizadores dos estilos.</em>',
	
	'ABBCODES_DISABLE'					=> 'ABBC3',
	'ABBCODES_DISABLE_EXPLAIN'			=> 'Habilitar ou desabilitar a <strong>Advanced BBodes Box 3</strong> para usuários ou utilização dos botões padrões de postagem do phpBB3.',
	'ABBCODES_BG'						=> 'Fundo da imagem',
	'ABBCODES_BG_EXPLAIN'				=> 'Isto definirá a cor do fundo da imagem para os ícones.<br/>Definir <em>sem imagem</em> para ajustar ao seu estilo.',
	'ABBCODES_TAB'						=> 'Exibir divisão dos ícones para as tags',
	'ABBCODES_BOXRESIZE'				=> 'Reajustar área de texto na postagem ',
	'ABBCODES_BOXRESIZE_EXPLAIN'		=> 'Mostrar botões redimensionados para postagem na área de texto.',
	
	'ABBCODES_GREYBOX'					=> 'Usar GreyBox &reg;',
	'ABBCODES_GREYBOX_EXPLAIN'			=> 'GreyBox &reg; é uma função para mostrar <em>miniaturas (thumbnail)</em> e <em>imagens redimensionadas</em> em tamanho completo. Se não, uma nova janela do navegador irá abrir.',
	'ABBCODES_RESIZE'					=> 'Reajustar imagens maiores',
	'ABBCODES_RESIZE_EXPLAIN'			=> 'Esta correção é para a falha do bbcode [img], quando alguém adicionar uma imagem de largura maior do que a largura permitida.',
	'ABBCODES_MAX_IMAGE_SIZE'			=> 'Tamanho máximo da imagem em pixels',
	'ABBCODES_RESIZE_METHOD'			=> 'Reajustar método',
	'ABBCODES_RESIZE_METHOD_EXPLAIN'	=> 'Escolha como exibir as imagens redimensionadas para tamanho completo.',
	//	for translate :							   don't 		Yes			don't		Yes			don't			yes				don't		yes
	'ABBCODES_RESIZE_METHODS'			=> array( 'greybox' => 'grey box', 'enlarge' => 'aumentar', 'samewindow' => 'mesma janela', 'newwindow' => 'nova janela'),
	
	'ABBCODES_MAX_IMAGE_SIZE_EXPLAIN'	=> 'A imagem será redimensionada se ultrapassar a largura definida aqui.',
	'ABBCODES_MAX_THUMB_WIDTH'			=> 'Largura máxima da miniatura (thumbnail) em pixels',
	'ABBCODES_MAX_THUMB_WIDTH_EXPLAIN'	=> 'A miniatura gerada não deve exceder a largura definida aqui.',
	
	'ABBCODES_CUSTOM_BBCODES'			=> 'BBcodes personalizados',
	'ABBCODES_CUSTOM_BBCODES_EXPLAIN'	=> 'Mostrar ícones dos bbcodes personalizados. Esta função permitir a compatibilidade com outros bbcodes de vídeos como [youtube] e adicionar seus próprios bbcodes (se houver).',
	'ABBCODES_VIDEO_SIZE'				=> 'Dimensões do vídeo',
	'ABBCODES_VIDEO_SIZE_EXPLAIN'		=> 'Largura e altura padrão para os vídeos postados.',

));

$lang = array_merge($lang, array(
	'ABBCODES_SETINGS'					=> 'Configurações da ABBC3',
	'ABBCODES_SETINGS_EXPLAIN'			=> 'Aqui você pode determinar as operações básicas da <strong>ABBC3</strong>, ativar ou desativar, entre outras definições, e ajustar os valores padrões para o fundo.',
	
	'ABBCODES_CONFIG'					=> 'Componente de config. da ABBC3',
	'ABBCODES_CONFIG_EXPLAIN'			=> 'Nesta página você pode alterar a ordem das tags que irão aparecer na página de postagem ou editar os ícones,',
	
	'ABBCODES_NAME'						=> 'Nome da Tag',
	'ABBCODES_TAG'						=> 'Imagem do ícone da Tag',
	'ABBCODES_ORDER'					=> 'Ordem da Tag',
	'RESET_TO_DEFAULT'					=> 'Resetar para o padrão',
	'ABBCODES_BREAK_MOVER'				=> '<strong><i>Quebra de linha</i></strong>',
	'ABBCODES_DIVISION_MOVER'			=> '<strong><i>Divisão</i></strong>',
	
	'ABBCODES_MOD_DISABLE'				=> '<strong>Advanced BBcodes Box 3</strong> está desabilitada para este estilo.<br/>',
	'ABBCODES_STATUS'					=> 'situação',
	'ABBCODES_ACTIVATED'				=> 'ativado',
	'ABBCODES_DEACTIVATED'				=> 'desativado',
	
));
?>