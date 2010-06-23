<?php
/**
* @package: phpBB3 :: Advanced BBCode box 3 -> language [pt][Portuguese]
* @version: $Id: acp_abbcode.php, v 1.0.10 2008/08/01 08:08:01 leviatan21 Exp $
* @copyright: leviatan21 < info@mssti.com > (Gabriel) http://www.mssti.com/phpbb3/
* @license: http://opensource.org/licenses/gpl-license.php GNU Public License 
* @author: leviatan21 - http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=345763
* @translator: njs http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=473065
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

// This lines are the same as root/language/en/acp/common.php
$lang = array_merge($lang, array(
	'ACP_ABBCODES'				=> 'Advanced BBcodes Box 3',
	'ACP_ABBC3_SETTINGS'		=> 'Configurações do ABBC3',
	'ACP_ABBC3_BBCODES'			=> 'ABBC3 BBCodes',
	'LOG_CONFIG_ABBCODES'		=> '<strong>As definições do ABBC3 foram modificadas</strong>',
	'LOG_CONFIG_ABBCODES_ERROR'	=> '<strong>Erro ao gravar as definições do ABBC3</strong>',
	'LOG_CONFIG_ADD'			=> '<strong>As seguintes definições do fórum foram modificadas</strong><br />» %s',
	'LOG_DATABASE_SCHEMA'		=> '<strong>A actualizar o schema da base de dados</strong><br />» %s',
	'LOG_DELETE_ABBCODES'		=> '<strong>O MOD ABBC3 foi apagado da base de dados</strong>',
));

// abbc3_details
$lang = array_merge($lang, array(
	'ACP_ABBCODES'						=> 'Advanced BBcodes Box 3',
	'ACP_ABBCODES_EXPLAIN'				=> 'Nesta secção pode gerir os estilos disponíveis para o <strong>[ <a href="http://www.mssti.com/phpbb3" target="_blank">ABBC3</a> ]</strong> do fórum.<br/>Pode alterar estilos existentes, actualizar, desactivar e reactivar. Pode também pre-visualizar o estilo usando a função prever. <br/><em>O estilo padrão actual é marcado pela presença de um asterisco (*). Também está listada a contagem total do número de utilizadores por cada estilos.</em>',

	'ABBCODES_DISABLE'					=> 'ABBC3',
	'ABBCODES_DISABLE_EXPLAIN'			=> 'Activar ou desactivar o <strong>Advanced BBodes Box 3</strong> para utilizadores e/ou a utilização dos botões padrões na colocação de mensagens do phpBB3.',
	'ABBCODES_BG'						=> 'Imagem de fundo',
	'ABBCODES_BG_EXPLAIN'				=> 'Esta opção irá definir a imagem de fundo para os ícons.<br />Definir <em>sem imagem</em> para ajustar ao seu estilo.',
	'ABBCODES_TAB'						=> 'Exibir divisão dos ícones para as tags',
	'ABBCODES_BOXRESIZE'				=> 'Redimensionar área de texto na colocação de mensagens',
	'ABBCODES_BOXRESIZE_EXPLAIN'		=> 'Mostrar botões para redimensionar a área de texto.',

	'ABBCODES_RESIZE'					=> 'Redimensionar imagens maiores',
	'ABBCODES_RESIZE_EXPLAIN'			=> 'Esta correcção é para uma falha do bbcode [img], quando alguém adiciona uma imagem de largura superior à largura do fórum.',
	'ABBCODES_JAVASCRIPT_EXPLAIN'		=> '<strong>Nota : </strong> <em>AdvancedBox JS</em> é um software em JavaScript utilizado para apresentar as imagens no seu tamanho original.<br />Na directoria <em>contrib</em> poderá encontrar como usar o <strong>ABBC3</strong> com o Highslide JS | LiteBox | GreyBox.<br />Estas modificações são totalmente opcionais. Cada script tem o seu suport próprio. Eu não sou responsavel pelo seu suporte. Não responderei a questões/problemas/bugs ou qualquer outra assunto sobre estes scripts.<br />Infelizmente o Internet Explorer não funciona muito bem com algumas imagens anexadas usando estes scripts.',
	'ABBCODES_RESIZE_METHOD'			=> 'Método de redimensionamento',
	'ABBCODES_RESIZE_METHOD_EXPLAIN'	=> 'Escolha como apresentar as imagens redimensionadas no tamanho completo, em todas as situações possíveis.',
##	For translate :                                Don't            Yes               Don't        Yes             Don't        Yes        Don't           yes            Don't          yes           Don't     yes
	'ABBCODES_RESIZE_METHODS'			=> array( 'AdvancedBox' => 'AdvancedBox JS', 'pop-up' => 'Janela Pop Up', 'enlarge' => 'Aumentar', 'samewindow' => 'Na Mesma Janela', 'newwindow' => 'Nova Janela', 'none' => 'Não redimensionar'),

	'ABBCODES_MAX_IMAGE_WIDTH'			=> 'Largura máxima da imagem em pixels',
	'ABBCODES_MAX_IMAGE_WIDTH_EXPLAIN'	=> 'A imagem será redimensionada se exceder a largura aqui definida.',
	'ABBCODES_MAX_IMAGE_HEIGHT'			=> 'Altura máxima da imagem em pixels',
	'ABBCODES_MAX_IMAGE_HEIGHT_EXPLAIN'	=> 'A imagem será redimensionada se exceder a altura aqui definida.',
	'ABBCODES_RESIZE_SIGNATURE'			=> 'Redimensionar imagens na assinatura',
	'ABBCODES_RESIZE_SIGNATURE_EXPLAIN'	=> 'Redimensionar também as imagens na assinatura ?',

	'ABBCODES_MAX_THUMB_WIDTH'			=> 'Largura máxima do thumbnail em pixels',
	'ABBCODES_MAX_THUMB_WIDTH_EXPLAIN'	=> 'Um thumbnail não irá exceder a largura aqui definida.',

	'ABBCODES_VIDEO_SIZE'				=> 'Dimensões de vídeos',
	'ABBCODES_VIDEO_SIZE_EXPLAIN'		=> 'Largura e altura padrão para um vídeo.',

	'ABBCODES_UPLOAD_EXTENSION'			=> 'Extensões disponíveis',
	'ABBCODES_UPLOAD_EXTENSION_EXPLAIN'	=> 'Pode adicionar/modificar/apagar tipos de dados permitidos. Separe as extensções por uma virgula (,)<br /><strong>Nota : </strong> Estes valores irão sobrepor-se às definições de extensões definidas em Gerir Anexos.',
));

// bbcodes_edit
$lang = array_merge($lang, array(
	'ABBCODES_SETINGS'					=> 'Configurações do ABBC3',
	'ABBCODES_SETINGS_EXPLAIN'			=> 'Nesta secção pode determinar as operações básicas do <strong>ABBC3</strong>, activar ou desactivar, entre outras definições, e ajustar os valores padrões para o fundo.',

	'ABBCODES_EDIT'						=> 'ABBC3 editar bbcode',
	'ABBCODES_EDIT_EXPLAIN'				=> 'Aqui pode definir onde irá aparecer ou quem poderá utilizar e a imagem de cada bbcode.',

	'ABBCODES_CONFIG'					=> 'Componente de configuração do ABBC3',
	'ABBCODES_CONFIG_EXPLAIN'			=> 'Nesta página pode alterar a ordem das tags que irão aparecer na página de colocação de mensagens ou editar os ícones,',

	'ABBCODES_GROUPS_EXPLAIN'			=> '<strong>Gerir grupos : </strong>Se não existirem grupos seleccionados todos os utilizadores podem usar este bbcode.<br />Para seleccionar (ou desseleccionar) grupos multíplos faça Ctrl-Click (ou Cmd-Click no Mac) nos grupos para os adicionar. Se se esquecer de manter o Ctrl/Cmd pressionado ao clicar um grupo, todos os grupos seleccionados anteriormente serão desseleccionados.',

	'ABBCODES_NAME'						=> 'Nome da Tag',
	'ABBCODES_TAG'						=> 'Imagem do ícone da Tag',
	'ABBCODES_ORDER'					=> 'Ordem da Tag',

	'ABBCODES_BREAK_MOVER'				=> '<strong><i>Quebra de linha</i></strong>',
	'ABBCODES_DIVISION_MOVER'			=> '<strong><i>Divisão</i></strong>',
	'ABBCODES_ADD_DIVISION'				=> 'Adicionar uma nova Divisão',
	'ABBCODES_ADD_BREAK'				=> 'Adicionar uma nova Quebra de linha',
    
    'ABBCODES_SYNC'                        => 'Sincronizar ordenação',
    'ABBCODES_RESYNC_SUCCESS'            => 'A ordenação dos bbcodes foi resincronizada.',

	'ABBCODES_MOD_DISABLE'				=> 'O <strong>Advanced BBcodes Box 3</strong> está desactivado.<br/>',
	'ABBCODES_STATUS'					=> 'situação',
	'ABBCODES_ACTIVATED'				=> 'activado',
	'ABBCODES_DEACTIVATED'				=> 'desactivado',
));

// Installer 
$lang = array_merge($lang, array(
	// Main
	'INSTALLER_TITLE'					=> 'Advanced BBcodes Box 3',
	'INSTALLER_VERSION'					=> ' versão : %1$s',

	'INSTALLER_INTRO'					=> 'Intro',
	'INSTALLER_INTRO_WELCOME'			=> 'Bem vindo à instalação do <strong>%1$s</strong>',
	'INSTALLER_INTRO_WELCOME_NOTE'		=> 'Por favor indique o pretende fazer.',
	'INSTALLER_INSTALL_MENU'			=> 'Menu',
	'INSTALLER_EXTRA_MENU'				=> 'Extras',

	// Install
	'INSTALLER_INSTALL'					=> 'Instalar',
	'INSTALLER_INSTALL_WELCOME'			=> 'Bem vindo ao menu de instalaçao do <strong>ABBC3</strong>',
	'INSTALLER_INSTALL_WELCOME_NOTE'	=> 'Ao instalar o ABBC3, as entradas na base de dados de versões anteriores serão apagadas.',
	'INSTALLER_INSTALL_SUCCESSFUL'		=> 'A instalação do ABBC3 foi concluída com sucesso.',
	'INSTALLER_INSTALL_UNSUCCESSFUL'	=> 'A instalação do ABBC3 <strong>não</strong> foi concluída com sucesso.',
	'INSTALLER_INSTALL_VERSION'			=> 'Instalar a versão : %1$s',
	'INSTALLER_INSTALL_END'				=> 'A instalação da versão <strong>%1$s : %2$s</strong> foi concluída com sucesso. <br /> <p>Deve agora efectuar o <a href="../index.php">login no seu forum</a> e verificar se está tudo a funcionar correctamente. <br />Não esqueça de apagar, renomear ou mover o directório <strong>install_abbc3</strong>!</p>',

	// Update
	'INSTALLER_UPDATE'					=> 'Actualizar',
	'INSTALLER_UPDATE_WELCOME'			=> 'Bem vindo ao menu de actualização do <strong>ABBC3</strong>',
	'INSTALLER_UPDATE_WELCOME_NOTE'		=> 'Ao actualizar o ABBC3, as entradas na base de dados de versões anteriores serão apagadas.',
	'INSTALLER_UPDATE_SUCCESSFUL'		=> 'A actualização do ABBC3 foi concluída com sucesso.',
	'INSTALLER_UPDATE_UNSUCCESSFUL'		=> 'A actualização do ABBC3 <strong>não</strong> foi concluída com sucesso.',
	'INSTALLER_UPDATE_VERSION'			=> 'Actualização para a versão : %1$s',
	'INSTALLER_UPDATE_END'				=> 'Por favor, tenha em consideração de que alguns BBCodes podem <strong>not</strong> ser correctamente apresntados devido a alterações introducidas nos BBCodes, se se deparar com problemas execute os passos em <strong>Extras » Re-interpretar</strong>',

	// Uninstall
	'INSTALLER_DELETE'					=> 'Remover',
	'INSTALLER_DELETE_WELCOME'			=> 'Bem vindo ao menu de remoção do <strong>ABBC3</strong>',
	'INSTALLER_DELETE_WELCOME_NOTE'		=> 'Ao remover o MOD, todos os dados inseridos na instalação serão removidos.',
	'INSTALLER_DELETE_VERSION'			=> 'Remover a versão : %1$s',
	'INSTALLER_DELETE_NOTE'				=> 'Remover',
	'INSTALLER_DELETE_SUCCESSFUL'		=> '<strong>%1$s a versão : %2$s</strong> foi removida com sucesso.<br />Pode remover os ficheiros.',
	'INSTALLER_DELETE_UNSUCCESSFUL'		=> '<strong>Não</strong> foi possível remover o %1$s versão :%2$s .',

	// Re-parse
	'INSTALLER_REPARSE'					=> 'Re-interpretar',
	'INSTALLER_REPARSE_WELCOME'			=> 'Bem vindo ao menu de Re-interpretação',
	'INSTALLER_REPARSE_WELCOME_NOTE'	=> '<strong>Re-interpretar</strong> apenas vai reinterpretar os BBCodes -- é útil se alterou a sintaxe de um BBCode, apenas irá ajustar alguns valores, não irá reescrever o texto...',
	'INSTALLER_REPARSE_NOTE'			=> 'Por favor note que apesar do risco de estragar a base de dados ser improvavel, está a executar esta operação por sua conta e risco eu não sou responsavel se algo correr mal.',
	'INSTALLER_REPARSE_WARNING'			=> 'Deverá fazer um backup das tabelas de utilizadores, mensagens e mensagens privadas no caso de algo correr mal.',
	'INSTALLER_REPARSE_POST'			=> 'Re-interpretar o conteúdo das mensagens',
	'INSTALLER_REPARSE_SIG'				=> 'Re-interpretar as assinaturas',
	'INSTALLER_REPARSE_PM'				=> 'Re-interpretar as mensagens privadas',
	'INSTALLER_REPARSE_SUCCESSFUL'		=> '%1$s concluído com sucesso.',
	'INSTALLER_REPARSE_UNSUCCESSFUL'	=> '<strong>Não</strong> foi possível %1$s.',
	
    'STEP_PERCENT_COMPLETED'            => 'Passo <strong>%d</strong> de <strong>%d</strong>',
	'INSTALLER_NOTE'					=> '<strong>Nota :</strong> Antes de adicionar este MOD ao seu forum, deverá efectuar uma cópia de segurança da base de dados e dos ficheiros relacionados com este MOD!',
	'INSTALLER_DELETE_INFORMATION'		=> '<strong>Não</strong> foi possível encontrar a instalação do ABBC3 !.',
	'INSTALLER_NEEDS_FOUNDER'			=> 'Tem de estar ligado como fundador.',
	'MISSING_PARENT_MODULE'				=> 'O módulo #%1$s não foi encontrado como módulo pai do "%2$s".',
	'WARNING'							=> 'Aviso',
));

?>