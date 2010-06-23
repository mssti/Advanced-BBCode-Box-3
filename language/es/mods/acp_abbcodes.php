<?php
/**
* @package: phpBB3 :: Advanced BBCode box 3 -> language [sp_ar][Spanish Argentina]
* @version: $Id: acp_abbcode.php, v 1.0.11 2008/10/11 11:10:08 leviatan21 Exp $
* @copyright: leviatan21 < info@mssti.com > (Gabriel) http://www.mssti.com/phpbb3/
* @license: http://opensource.org/licenses/gpl-license.php GNU Public License 
* @author: leviatan21 - http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=345763
* @translator: leviatan21 - http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=345763
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
	'ACP_ABBC3_SETTINGS'		=> 'Configurar ABBC3',
	'ACP_ABBC3_BBCODES'			=> 'Componentes (BBCodes) de ABBC3',
	'LOG_CONFIG_ABBCODES'		=> '<strong>Cambiada la configuración de ABBC3</strong>',
	'LOG_CONFIG_ABBCODES_ERROR'	=> '<strong>Error mientras se guardaba la configuración de ABBC3</strong>',
	'LOG_CONFIG_ADD'			=> '<strong>Añadido al foro la configuración</strong><br />» %s',
	'LOG_DATABASE_SCHEMA'		=> '<strong>Actualizando la estructura de la base de datos</strong><br />» %s',
	'LOG_DELETE_ABBCODES'		=> '<strong>Eliminando MOD ABBC3 de la base de datos</strong>',
));

// abbc3_details
$lang = array_merge($lang, array(
	'ACP_ABBCODES'						=> 'Advanced BBcodes Box 3',
	'ACP_ABBCODES_EXPLAIN'				=> 'Aquí puede administrar los estilos disponibles para  <strong>[ <a href="http://www.mssti.com/phpbb3" target="_blank">ABBC3</a> ]</strong> de su foro.<br />Puede alterar los estilos existentes, desactivarlos y reactivarlos. También puede ver como se verría un estilo usando la función Vista Previa. <br /><em>El estilo por defecto actual es señalado con un asterisco (*). También se muestra el total de usuarios por cada estilo.</em>',

	'ABBCODES_DISABLE'					=> 'ABBC3',
	'ABBCODES_DISABLE_EXPLAIN'			=> 'Si elije <em>Sí</em>, activará <strong>Advanced BBodes Box 3</strong> y el MOD gestionará los BBCodes del foro. Si selecciona <em>No</em>, la gestión de los BBCode la realizará <em>phpBB3</em>.',
	'ABBCODES_BG'						=> 'Imagen de fondo',
	'ABBCODES_BG_EXPLAIN'				=> 'Aquí puede cambiar la imagen de fondo de las barras que contienen los iconos que representan a cada BBCode. Elija <em>Sin imagen</em> para que se ajuste a su estilo.',
	'ABBCODES_TAB'						=> 'Mostrar la división entre etiquetas',
	'ABBCODES_BOXRESIZE'				=> 'Redimensionar el área de texto',
	'ABBCODES_BOXRESIZE_EXPLAIN'		=> 'Si elije <em>Sí</em>, se mostrarán los botones para cambiar el tamaño del área de texto en donde se escriben los mensajes. Seleccione <em>No</em> en caso contrario.',

	'ABBCODES_RESIZE'					=> 'Redimensionar imágenes grandes',
	'ABBCODES_RESIZE_EXPLAIN'			=> 'Esto corrige el error del BBCode [img] de phpBB3 cuando alguien publica en un mensaje una imagen que supera el ancho de su foro. A continuación, en el punto siguiente, se le mostrarán diferentes opciones para llevar a cabo dicha tarea.',
	'ABBCODES_JAVASCRIPT_EXPLAIN'		=> '<strong>Nota : </strong> <em>AdvancedBox JS</em> es una aplicación escrita en JavaScript utilizada para ver las imágenes a tamaño completo. En la carpeta <em>contrib</em> de este MOD, usted puede encontrar como utilizar con <strong>ABBC3</strong> otras, como Highslide JS | LiteBox | GreyBox. Estas modificaciones/aplicaciones son totalmente opcionales y tienen sus propios autores. No se da soporte a dichas modificaciones, por lo que cualquier cuestión, problema o bug referidas a ellas, contacte con su autor.<br /> Por último hay que señalar, que desafortunadamente Internet Explorer no entiende, en algunos casos, como manejar imágenes proporcionadas por el software anterior, por lo que pueden aparecer problemas.',
	'ABBCODES_RESIZE_METHOD'			=> 'Elija la forma de mostrar las imágenes a tamaño completo',
	'ABBCODES_RESIZE_METHOD_EXPLAIN'	=> 'Selecciona el método de mostrar la imagen redimensionada a su tamaño completo.',
##	For translate :                                Don't            Yes                    Don't       Yes                  Don't        Yes        Don't           yes              Don't          yes                       Don't     yes
	'ABBCODES_RESIZE_METHODS'			=> array( 'AdvancedBox' => 'Usar AdvancedBox JS', 'pop-up' => 'Ventana emergente', 'enlarge' => 'Ampliar', 'samewindow' => 'Misma ventana', 'newwindow' => 'Nueva ventana/pestaña', 'none' => 'No redimensionar en ningún caso'),

	'ABBCODES_MAX_IMAGE_WIDTH'			=> 'Ancho máximo de las imagenes en píxeles',
	'ABBCODES_MAX_IMAGE_WIDTH_EXPLAIN'	=> 'La imagen será redimensionada si el ancho excede este valor. Elija <em>0</em> para no redimensionar',
	'ABBCODES_MAX_IMAGE_HEIGHT'			=> 'Longitud máximo de las imagenes en píxeles',
	'ABBCODES_MAX_IMAGE_HEIGHT_EXPLAIN'	=> 'La imagen será redimensionada si la longitud excede este valor. Elija <em>0</em> para no redimensionar',
	'ABBCODES_RESIZE_SIGNATURE'			=> 'Redimensionar grandes imágenes en Firmas',
	'ABBCODES_RESIZE_SIGNATURE_EXPLAIN'	=> 'También redimensionar grandes imágenes en Firmas ?',
	'ABBCODES_MAX_THUMB_WIDTH'			=> 'Ancho máximo de las miniaturas en píxeles',
	'ABBCODES_MAX_THUMB_WIDTH_EXPLAIN'	=> 'Las miniaturas no tendrán un ancho superior al establecido aquí. Elija <em>0</em> para no redimensionar',

	'ABBCODES_VIDEO_SIZE'				=> 'Dimensiones del vídeo',
	'ABBCODES_VIDEO_SIZE_EXPLAIN'		=> 'Valores por defecto de la anchura y la altura de los vídeos en los mensajes.',

	'ABBCODES_UPLOAD_EXTENSION'			=> 'Extensiones disponibles',
	'ABBCODES_UPLOAD_EXTENSION_EXPLAIN'	=> 'Puede añadir/modificar/eliminar formatos permitidos. Separe las extensiones con una coma(,)',
));

// bbcodes_edit
$lang = array_merge($lang, array(
	'ABBCODES_SETINGS'					=> 'ABBC3 Configuración',
	'ABBCODES_SETINGS_EXPLAIN'			=> 'En esta página usted puede ajustar los parámetros más básicos de <strong>ABBC3</strong>: habilitarlo, deshabilitarlo, ajustar los valores por defecto para el fondo, etc.',

	'ABBCODES_EDIT'						=> 'ABBC3 editar bbcode',
	'ABBCODES_EDIT_EXPLAIN'				=> 'En esta página usted puede elegir el icono que representará a cada BBCode, activarlo o no, que grupos de usuarios podrán hacer uso del mismo y en qué partes del foro (mensajes, firma, etc.)',

	'ABBCODES_CONFIG'					=> 'ABBC3 configuración de componentes',
	'ABBCODES_CONFIG_EXPLAIN'			=> 'En esta página, entre otras cosas, usted puede modificar el orden en que aparecen las etiquetas (BBCodes) en la ventana de edición cuando escriba un mensaje o editar los iconos que representan a los distintos BBCodes.',
	'ABBCODES_GROUPS_EXPLAIN'			=> '<strong>Administrar grupos : </strong>Si ningún grupo es selecionado todos los usuarios podrán utilizar este BBCode.<br />Para selecionar o eliminar la seleción de multiples grupos de usuarios simultaneamente, pulse <em>Ctrl</em> y mientras mantiene pulsada esta tecla haga <em>Clic</em> (o mantenga pulsada <em>Cmd</em> y haga <em>Clic</em> en un Mac) sobre los grupos deseados. Si usted olvida mantener pulsada la tecla <em>Ctrl</em> (<em>Cmd</em> en un Mac) cuando hace clic en un grupo de usuarios, toda seleción previa sera eliminada.',

	'ABBCODES_NAME'						=> 'Nombre de la etiqueta',
	'ABBCODES_TAG'						=> 'Icono de etiqueta',
	'ABBCODES_ORDER'					=> 'Orden de etiqueta',

	'ABBCODES_BREAK_MOVER'				=> '<strong><i>Salto de línea</i></strong>',
	'ABBCODES_DIVISION_MOVER'			=> '<strong><i>División</i></strong>',
	'ABBCODES_ADD_DIVISION'				=> 'Añadir nueva división',
	'ABBCODES_ADD_BREAK'				=> 'Añadir nuevo salto de línea',
	'ABBCODES_SYNC'						=> 'Sincronizar orden',
	'ABBCODES_RESYNC_SUCCESS'			=> 'El orden de los bbcodes se han Sincronizando.',

	'ABBCODES_MOD_DISABLE'				=> '<strong>Advanced BBcodes Box 3</strong> está deshabilitado.<br />',
	'ABBCODES_STATUS'					=> 'Estado',
	'ABBCODES_ACTIVATED'				=> 'activado',
	'ABBCODES_DEACTIVATED'				=> 'desactivado',
));

// Installer 
$lang = array_merge($lang, array(
	// Main
	'INSTALLER_TITLE'					=> 'Advanced BBcodes Box 3',
	'INSTALLER_VERSION'					=> ' version : %1$s',

	'INSTALLER_INTRO'					=> 'Página inicial',
	'INSTALLER_INTRO_WELCOME'			=> 'Bienvenido a la instalacición de <strong>%1$s</strong>',
	'INSTALLER_INTRO_WELCOME_NOTE'		=> 'Por favor, eliga la acción que quiere realizar.',
	'INSTALLER_INSTALL_MENU'			=> 'Menú',
	'INSTALLER_EXTRA_MENU'				=> 'Extras',

	// Install
	'INSTALLER_INSTALL'					=> 'Instalar',
	'INSTALLER_INSTALL_WELCOME'			=> 'Bienvenido al menú de instalacición de <strong>ABBC3</strong>',
	'INSTALLER_INSTALL_WELCOME_NOTE'	=> 'Si usted elige instalar ABBC3, cualquier versión previa de este MOD en la base de datos será eliminada.',
	'INSTALLER_INSTALL_SUCCESSFUL'		=> 'La instalacición de ABBC3 ha concluido con éxito.',
	'INSTALLER_INSTALL_UNSUCCESSFUL'	=> 'La instalacición de ABBC3 <strong>no</strong> ha concluido con éxito.',
	'INSTALLER_INSTALL_VERSION'			=> 'Instalar la versión: %1$s',
	'INSTALLER_INSTALL_END'				=> 'La instalacición de <strong>%1$s versión : %2$s</strong> ha concluido con éxito. <br /> <p>Ahora usted debería <a href="../index.php">entrar en su foro</a> y verificar que todo trabaja correctamente. <br />¡ No olvide borrar, renombrar o mover su carpeta/directorio <strong>install_abbc3</strong> !</p>',

	// Update
	'INSTALLER_UPDATE'					=> 'Actualización',
	'INSTALLER_UPDATE_WELCOME'			=> 'Bienvenido al menú de actualización de <strong>ABBC3</strong>',
	'INSTALLER_UPDATE_WELCOME_NOTE'		=> 'Si usted elige actualizar ABBC3, cualquier versión previa de este MOD en la base de datos será eliminada.',
	'INSTALLER_UPDATE_SUCCESSFUL'		=> 'La actualización de ABBC3 ha concluido con éxito.',
	'INSTALLER_UPDATE_UNSUCCESSFUL'		=> 'La actualización de ABBC3 <strong>no</strong> ha concluido con éxito.',
	'INSTALLER_UPDATE_VERSION'			=> 'Actualizar a la versión: %1$s',
	'INSTALLER_UPDATE_END'				=> 'Por favor, tenga en cuenta que algunos BBCodes pueden <strong>no</strong> mostrarse como en la versión anterior. Eso es consecuencia de algunos cambios introducidos en la definicion de los mismos. Si usted encuentra este tipo de problemasas ejecute los pasos <strong>Extras » Re-parse</strong>',

	// Uninstall
	'INSTALLER_DELETE'					=> 'Borrar',
	'INSTALLER_DELETE_WELCOME'			=> 'Bienvenido al menú de borrado de <strong>ABBC3</strong>',
	'INSTALLER_DELETE_WELCOME_NOTE'		=> 'Si usted elige borrar el MOD, todas las modificaciones realizadas en su base de datos sql insertadas en la instalación serán eliminadas.',
	'INSTALLER_DELETE_VERSION'			=> 'Versión borrada: %1$s',
	'INSTALLER_DELETE_NOTE'				=> 'Borrar',
	'INSTALLER_DELETE_SUCCESSFUL'		=> 'Borrada la versión <strong>%1$s  : %2$s</strong> ha concluido con éxito.<br />Ahora debe proceder al borrado de los ficheros.',
	'INSTALLER_DELETE_UNSUCCESSFUL'		=> '<strong>No</strong> se pudo borrar la versión  %1$s :%2$s .',

	// Re-parse
	'INSTALLER_REPARSE'					=> 'Re-parse/Analizar',
	'INSTALLER_REPARSE_WELCOME'			=> 'Bienvenido al Re-parse menú',
	'INSTALLER_REPARSE_WELCOME_NOTE'	=> 'Cuando usted elije <strong>Re-parse</strong> simplemente se analizan los BBCodes: es útil por si se ha cambiando la sintaxis de un BBCode, lo que da lugar a que no se vea un mensaje escrito igual que en las versiones precedentes. Esta función sólo ajusta algunos valores, no reescribe el texto...',
	'INSTALLER_REPARSE_NOTE'			=> 'Por favor, tenga en cuenta que aunque los riesgos de daños en la base de datos de su foro son poco probables, la instalación de este MOD corre bajo su cuenta y riesgo, por lo que el autor del MOD no se rsponsabiliza por posibles daños: perdida de datos, etc.',
	'INSTALLER_REPARSE_WARNING'			=> 'Usted debe hacer una copia de seguridad de las tablas de la base de datos que contienen los usurios, mensajes y mensajes privados de su foro por si algo no va bien.',
	'INSTALLER_REPARSE_POST'			=> 'Re-parse (analizar) el contenido de los mensajes',
	'INSTALLER_REPARSE_SIG'				=> 'Re-parse (analizar) firmas',
	'INSTALLER_REPARSE_PM'				=> 'Re-parse (analizar) mensajes privados',
	'INSTALLER_REPARSE_SUCCESSFUL'		=> '%1$s ha concluido con éxito.',
	'INSTALLER_REPARSE_UNSUCCESSFUL'	=> '<strong>No</strong> se pudo %1$s.',
	
	'STEP_PERCENT_COMPLETED'			=> 'Paso <strong>%d</strong> de <strong>%d</strong>',
	'INSTALLER_NOTE'					=> '<strong>Nota:</strong> ¡ Antes de añadir este MOD a su foro, debe hacer una copia de seguridad de la base de datos y de todos los archivos de su foro !',
	'INSTALLER_DELETE_INFORMATION'		=> '¡ <strong>No</strong> se pudo encontrar ABBC3 instalado !.',
	'INSTALLER_NEEDS_FOUNDER'			=> 'Usted debe estar identificado en su foro como el administrador.',
	'MISSING_PARENT_MODULE'				=> 'Módulo #%1$s no está como módulo padre de "%2$s".',
	'WARNING'							=> 'Aviso',
));

?>