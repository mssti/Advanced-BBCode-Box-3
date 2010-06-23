<?php
/**
* @package: phpBB3 :: Advanced BBCode box 3 -> language [sp][Spanish]
* @version: $Id: acp_abbcode.php, v 1.0.8 2008/05/01 05:01:00 leviatan21 Exp $
* @copyright: leviatan21 < info@mssti.com > (Gabriel) http://www.mssti.com/phpbb3/
* @license: http://opensource.org/licenses/gpl-license.php GNU Public License 
* @author: leviatan21 - http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=345763
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
	'ACP_ABBCODES'						=> 'Advanced BBcodes Box 3',
	'ACP_ABBCODES_EXPLAIN'				=> 'Aquí puede administrar los estilos disponibles para <strong>[ <a href="http://www.mssti.com/phpbb3" target="_blank">ABBC3</a> ]</strong> en su Sitio .<br/>Puede alterar estilos existentes, desactivar, reactivar. También puede ver como se verría un estilo usando la función Vista Previa. <br/><em>El estilo por defecto actual es señalado con un asterisco (*). También se muestra el total de usuarios por cada estilo.</em>',
	
	'ABBCODES_DISABLE'					=> 'ABBC3',
	'ABBCODES_DISABLE_EXPLAIN'			=> 'Habilitar o deshabilitar <strong>Advanced BBodes Box 3</strong> a usuarios, y/o usar la botonera por defecto de phpbb3.',
	'ABBCODES_BG'						=> 'Imagen de fondo',
	'ABBCODES_BG_EXPLAIN'				=> 'Aquí puede cambiar la imagen de fondo para la barra de iconos.<br/>Utilice <em>No hay imágenes</em> para ajustar a su estilo.',
	'ABBCODES_TAB'						=> 'Mostrar la división entre etiquetas',
	'ABBCODES_BOXRESIZE'				=> 'Redimensionar el area de texto',
	'ABBCODES_BOXRESIZE_EXPLAIN'		=> 'Mostrar los botones para cambiar el tamaño de el area de texto.',
	
	'ABBCODES_GREYBOX'					=> 'Usar GreyBox &reg;',
	'ABBCODES_GREYBOX_EXPLAIN'			=> 'GreyBox &reg; es una functión usada para mostrar <em>miniaturas</em> e <em>imagenes redimensionadas</em> en tamaño completo. De lo contrario una nueva ventana se abrirá.',
	'ABBCODES_RESIZE'					=> 'Redimensionadas grandes imágenes',
	'ABBCODES_RESIZE_EXPLAIN'			=> 'Esto corrige el error de la etiqueta [img] cuando alguien publica una imagen que supera el ancho de su foro.',
	'ABBCODES_MAX_IMAGE_SIZE'			=> 'Ancho máximo de la imagen en píxeles',
	'ABBCODES_RESIZE_METHOD'			=> 'Método de redimensión',
	'ABBCODES_RESIZE_METHOD_EXPLAIN'	=> 'Elija la forma de mostrar las imágenes en tamaño completo.',
	//	for translate :							  don't 		Yes			don't		Yes			don't			yes				don't		yes
	'ABBCODES_RESIZE_METHODS'			=> array( 'greybox' => 'grey box', 'enlarge' => 'ampliar', 'samewindow' => 'misma ventana', 'newwindow' => 'nueva ventana'),
	
	'ABBCODES_MAX_IMAGE_SIZE_EXPLAIN'	=> 'Cambiar el tamaño de las imágenes si el ancho es superior al establecido aquí.',
	'ABBCODES_MAX_THUMB_WIDTH'			=> 'Ancho máximo de las miniaruras en píxeles',
	'ABBCODES_MAX_THUMB_WIDTH_EXPLAIN'	=> 'Las miniatura no será superior al ancho establecido aquí.',
	
	'ABBCODES_CUSTOM_BBCODES'			=> 'Etiquetas personales',
	'ABBCODES_CUSTOM_BBCODES_EXPLAIN'	=> 'Mostrar los iconos para las etiquetas personales. Esta función permitirá a la compatibilidad con otros videos como [youtube] y agrega sus propias etiquetas (si tiene).',
	'ABBCODES_VIDEO_SIZE'				=> 'Dimensiones de videos',
	'ABBCODES_VIDEO_SIZE_EXPLAIN'		=> 'Por defecto la anchura y la altura de videos.',

));

$lang = array_merge($lang, array(
	'ABBCODES_SETINGS'					=> 'ABBC3 Configuración',
	'ABBCODES_SETINGS_EXPLAIN'			=> 'Aquí puede ajustar los parámetros por defecto para <strong>ABBC3</strong>, Habilitar o deshabilitar, y entre otras opciones de ajustar los valores por defecto para el fondo.',
	
	'ABBCODES_CONFIG'					=> 'ABBC3 Componentes',
	'ABBCODES_CONFIG_EXPLAIN'			=> 'Desde esta página puede alterar el orden de las etiquetas o editar los iconos,',
	
	'ABBCODES_NAME'						=> 'Nombre de Etiqueta',
	'ABBCODES_TAG'						=> 'Imagen de etiqueta',
	'ABBCODES_ORDER'					=> 'Orden de etiqueta',
	'RESET_TO_DEFAULT'					=> 'Restablecer configuración básica',
	'ABBCODES_BREAK_MOVER'				=> '<strong><i>Salto de línea</i></strong>',
	'ABBCODES_DIVISION_MOVER'			=> '<strong><i>División</i></strong>',
	
	'ABBCODES_MOD_DISABLE'				=> '<strong>Advanced BBcodes Box 3</strong> está desabilitado para este estilo.<br/>',
	'ABBCODES_STATUS'					=> 'estado',
	'ABBCODES_ACTIVATED'				=> 'activado',
	'ABBCODES_DEACTIVATED'				=> 'deactivado',
	
));
?>