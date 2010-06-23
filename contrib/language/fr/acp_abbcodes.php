<?php
/**
* @package: phpBB3 :: Advanced BBCode box 3 -> language [fr][French]
* @version: $Id: acp_abbcode.php, v 1.0.11 2008/10/11 11:10:08 leviatan21 Exp $
* @copyright: leviatan21 < info@mssti.com > (Gabriel) http://www.mssti.com/phpbb3/
* @license: http://opensource.org/licenses/gpl-license.php GNU Public License 
* @author: leviatan21 - http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=345763
* @translator: Joebart - http://www.ultimarena.net
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
	'ACP_ABBC3_SETTINGS'		=> 'Paramètres ABBC3',
	'ACP_ABBC3_BBCODES'			=> 'ABBC3 BBCodes',
	'LOG_CONFIG_ABBCODES'		=> '<strong>Paramètres ABBC3 modifiés</strong>',
	'LOG_CONFIG_ABBCODES_ERROR'	=> '<strong>Erreur lors de la sauvegarde des paramètres ABBC3</strong>',
	'LOG_CONFIG_ADD'			=> '<strong>Paramètres ajoutés</strong><br />» %s',
	'LOG_DATABASE_SCHEMA'		=> '<strong>Schéma de la base de données mis à jour</strong><br />» %s',
	'LOG_DELETE_ABBCODES'		=> '<strong>MOD ABBC3 supprimé de la base de données</strong>',
));

// abbc3_details
$lang = array_merge($lang, array(
	'ACP_ABBCODES'						=> 'Advanced BBcodes Box 3',
	'ACP_ABBCODES_EXPLAIN'				=> 'Vous pouvez ici gérer les styles disponibles pour <strong>[ <a href="http://www.mssti.com/phpBB3" target="_blank">ABBC3</a> ]</strong> sur votre forum.<br/>Vous pouvez modifier les styles existants, rafraîchir, désactiver, réactiver. Vous pouvez également voir l’apparence d’un style en utilisant la fonction de prévisualisation. <br/><em>Le style par défaut est reconnaissable par la présence d’un astérisque (*). Figure aussi la répartition des membres par thème utilisé.</em>',

	'ABBCODES_DISABLE'					=> 'ABBC3',
	'ABBCODES_DISABLE_EXPLAIN'			=> 'Activer ou désactiver <strong>Advanced BBodes Box 3</strong> pour les membres et/ou utiliser les BBcodes standards de phpBB3.',
	'ABBCODES_BG'						=> 'Image de fond',
	'ABBCODES_BG_EXPLAIN'				=> 'Cette option permet de mettre une image de fond pour les icones.<br/>Laissez sur <em>aucune image</em> pour ajuster votre style.',
	'ABBCODES_TAB'						=> 'Afficher les séparations d’icones',
	'ABBCODES_BOXRESIZE'				=> 'Redimensionner la zone du posting',
	'ABBCODES_BOXRESIZE_EXPLAIN'		=> 'Affiche des boutons pour redimensionner la zone du posting.',

	'ABBCODES_RESIZE'					=> 'Réduire les grosses images',
	'ABBCODES_RESIZE_EXPLAIN'			=> 'Fix pour un éventuel bug du BBcode [img] si une image postée est plus large que la zone de post.',
	'ABBCODES_JAVASCRIPT_EXPLAIN'		=> '<strong>Note : </strong> <em>AdvancedBox JS</em> est un programme JavaScript utilisé pour afficher les images en pleine taille.<br />Dans le dossier <em>contrib</em>, vous trouverez comment utiliser <strong>ABBC3</strong> avec Highslide JS | LiteBox | GreyBox.<br />Ces modifications sont totalement optionnelles. Chaque script a son propre support.<br />Malheureusement, Internet Explorer ne semble pas comprendre comment gérer les images attachées avec ces programmes.',
	'ABBCODES_RESIZE_METHOD'			=> 'Méthode de redimensionnement',
	'ABBCODES_RESIZE_METHOD_EXPLAIN'	=> 'Choisissez comment afficher l’image redimensionnée en pleine taille.',
##	For translate :                                Don't            Yes               Don't        Yes             Don't        Yes        Don't           yes            Don't          yes           Don't     yes
	'ABBCODES_RESIZE_METHODS'			=> array( 'AdvancedBox' => 'AdvancedBox JS', 'pop-up' => 'Fenêtre en pop-up', 'enlarge' => 'Agrandir', 'samewindow' => 'Même fenêtre', 'newwindow' => 'Nouvelle fenêtre', 'none' => 'Aucun redimensionnement'),

	'ABBCODES_MAX_IMAGE_WIDTH'         	=> 'Largeur maximale de l’image en pixels',
	'ABBCODES_MAX_IMAGE_WIDTH_EXPLAIN'  => 'L’image sera automatiquement réduite si elle excède la largeur définie.',
	'ABBCODES_MAX_IMAGE_HEIGHT'         => 'Hauteur maximale de l’image en pixels',
	'ABBCODES_MAX_IMAGE_HEIGHT_EXPLAIN' => 'L’image sera automatiquement réduite si elle excède la hauteur définie.',
	'ABBCODES_RESIZE_SIGNATURE'			=> 'Redimensionner les images trop grosses dans les signatures',
	'ABBCODES_RESIZE_SIGNATURE_EXPLAIN'	=> 'Redimensionner aussi les images trop grosses dans les signatures ?',
	'ABBCODES_MAX_THUMB_WIDTH'			=> 'Largeur maximale de la miniature en pixels',
	'ABBCODES_MAX_THUMB_WIDTH_EXPLAIN'	=> 'La miniature sera automatiquement réduite à la taille définie si elle l’excède.',

	'ABBCODES_VIDEO_SIZE'				=> 'Dimensions vidéo',
	'ABBCODES_VIDEO_SIZE_EXPLAIN'		=> 'Largeur et hauteur par défaut pour les vidéos postées.',

	'ABBCODES_UPLOAD_EXTENSION'			=> 'Extensions disponibles',
	'ABBCODES_UPLOAD_EXTENSION_EXPLAIN'	=> 'Vous pouvez ajouter / changer/ supprimer les types de données autorisés. Séparez les extensions avec une virgule (,)<br /><strong>Note : </strong> Ces valeurs écraseront vos paramètres de gestion des extensions des fichiers joints.',
));

// bbcodes_edit
$lang = array_merge($lang, array(
	'ABBCODES_SETINGS'					=> 'Paramètres ABBC3',
	'ABBCODES_SETINGS_EXPLAIN'			=> 'Vous pouvez ici configurer les opérations basiques d’<strong>ABBC3</strong>, activer ou désactiver, et parmi d’autres paramètres, ajuster la valeur par défaut de votre image de fond.',

	'ABBCODES_EDIT'						=> 'Edition bbcodes ABBC3',
	'ABBCODES_EDIT_EXPLAIN'				=> 'Vous pouvez déterminer ici où le bbcode sera affiché, qui pourra l’utiliser et choisir l’image de chaque bbcode.',

	'ABBCODES_CONFIG'					=> 'Configuration des éléments d’ABBC3',
	'ABBCODES_CONFIG_EXPLAIN'			=> 'A partir de cette page, vous pouvez changer l’ordre des BBcodes sur la page de post ou éditer les icones.',
	'ABBCODES_GROUPS_EXPLAIN'			=> '<strong>Gérer les groupes : </strong>Si aucun groupe n’est sélectionné, tous les membres peuvent se servir de ce bbcode.<br />Pour sélectionner (ou dé-sélectionner) plusieurs groupes, utilisez les touches CTRL et CLIC. Si vous noubliez de maintenir appuyée la touche CTRL, tout ce qui aura alors été sélectionné auparavant sera perdu.',

	'ABBCODES_NAME'						=> 'Nom du BBcode',
	'ABBCODES_TAG'						=> 'Icone du BBcode',
	'ABBCODES_ORDER'					=> 'Ordre du BBcode',

	'ABBCODES_BREAK_MOVER'				=> '<strong><i>Ligne de séparation</i></strong>',
	'ABBCODES_DIVISION_MOVER'			=> '<strong><i>Division</i></strong>',
	'ABBCODES_ADD_DIVISION'				=> 'Ajouter une nouvelle division',
	'ABBCODES_ADD_BREAK'				=> 'Ajouter une nouvelle ligne de séparation',
	'ABBCODES_SYNC'						=> 'Resynchronisation de l’ordre',
	'ABBCODES_RESYNC_SUCCESS'			=> 'L’ordre des bbcodes a été resynchronisé.',

	'ABBCODES_MOD_DISABLE'				=> '<strong>Advanced BBcodes Box 3</strong> est désactivé.<br />',
	'ABBCODES_STATUS'					=> 'Statut',
	'ABBCODES_ACTIVATED'				=> 'Activé',
	'ABBCODES_DEACTIVATED'				=> 'Désactivé',
));

// Installer 
$lang = array_merge($lang, array(
	// Main
	'INSTALLER_TITLE'					=> 'Advanced BBcodes Box 3',
	'INSTALLER_VERSION'					=> ' Version : %1$s',

	'INSTALLER_INTRO'					=> 'Intro',
	'INSTALLER_INTRO_WELCOME'			=> 'Bienvenue dans l’installation du mod <strong>%1$s</strong>',
	'INSTALLER_INTRO_WELCOME_NOTE'		=> 'Choisissez ce que vous souhaitez faire.',
	'INSTALLER_INSTALL_MENU'			=> 'Menu',
	'INSTALLER_EXTRA_MENU'				=> 'Extras',

	// Install
	'INSTALLER_INSTALL'					=> 'Installation',
	'INSTALLER_INSTALL_WELCOME'			=> 'Bienvenue dans le menu d’installation d’<strong>ABBC3</strong>',
	'INSTALLER_INSTALL_WELCOME_NOTE'	=> 'Si vous choisissez d’installer ABBC3, toutes les données de versions précédentes seront alors supprimées.',
	'INSTALLER_INSTALL_SUCCESSFUL'		=> 'Installation d’ABBC3 réussie.',
	'INSTALLER_INSTALL_UNSUCCESSFUL'	=> 'L’installation d’ABBC3 a <strong>échoué</strong>.',
	'INSTALLER_INSTALL_VERSION'			=> 'Version de l’installation : %1$s',
	'INSTALLER_INSTALL_END'				=> 'Installation de la <strong>version %1$s : %2$s</strong> réussie. <br /> <p>Vous pouvez à présent <a href="../index.php">vous connecter à votre forum</a> et vous assurer que tout fonctionne bien. <br />N’oubliez pas de supprimer le dossier <strong>install_abbc3</strong>.</p>',

	// Update
	'INSTALLER_UPDATE'					=> 'Mise à jour',
	'INSTALLER_UPDATE_WELCOME'			=> 'Bienvenue dans le menu de mise à jour d’<strong>ABBC3</strong>',
	'INSTALLER_UPDATE_WELCOME_NOTE'		=> 'Si vous choisissez de mettre à jour ABBC3, toutes données de précédentes versions seront alors supprimées.',
	'INSTALLER_UPDATE_SUCCESSFUL'		=> 'Mise à jour d’ABBC3 réussie.',
	'INSTALLER_UPDATE_UNSUCCESSFUL'		=> 'La mise à jour d’ABBC3 a <strong>échoué</strong>.',
	'INSTALLER_UPDATE_VERSION'			=> 'Mise à jour vers version : %1$s',
	'INSTALLER_UPDATE_END'				=> 'Veuillez noter que certains BBCodes ne seront <strong>peut-être</strong> pas correctement affichés avec ces modifications. Si tel était le cas, lancez l’<strong>analyse</strong>',

	// Uninstall
	'INSTALLER_DELETE'					=> 'Suppression',
	'INSTALLER_DELETE_WELCOME'			=> 'Bienvenue dans le menu de suppression d’ <strong>ABBC3</strong>',
	'INSTALLER_DELETE_WELCOME_NOTE'		=> 'Si vous choisissez de supprimer le MOD, toutes les données insérées lors de l’installation seront retirées.',
	'INSTALLER_DELETE_VERSION'			=> 'Version supprimée : %1$s',
	'INSTALLER_DELETE_NOTE'				=> 'Supprimer',
	'INSTALLER_DELETE_SUCCESSFUL'		=> 'Suppression <strong>version %1$s : %2$s</strong> réussie.<br />Vous pouvez à présent supprimer manuellement tous les fichiers.',
	'INSTALLER_DELETE_UNSUCCESSFUL'		=> '<strong>Impossible</strong> de supprimer version %1$s :%2$s .',

	// Re-parse
	'INSTALLER_REPARSE'					=> 'Analyse',
	'INSTALLER_REPARSE_WELCOME'			=> 'Bienvenue au menu d’analyse',
	'INSTALLER_REPARSE_WELCOME_NOTE'	=> 'Si vous choisissez le menu d’<strong>analyse</strong>, les BBCodes seront tous vérifiés en un clic...',
	'INSTALLER_REPARSE_NOTE'			=> 'Veuillez noter que cette opération n’est pas sans risques.',
	'INSTALLER_REPARSE_WARNING'			=> 'Faites une sauvegarde de vos tables de membres, posts et messages privés par prudence.',
	'INSTALLER_REPARSE_POST'			=> 'Analyse contenu des posts',
	'INSTALLER_REPARSE_SIG'				=> 'Analyse signatures',
	'INSTALLER_REPARSE_PM'				=> 'Analyse messages privés',
	'INSTALLER_REPARSE_SUCCESSFUL'		=> '%1$s : Réussite.',
	'INSTALLER_REPARSE_UNSUCCESSFUL'	=> '<strong>Echec</strong> %1$s.',
	
	'STEP_PERCENT_COMPLETED'			=> 'Etape <strong>%d</strong> sur <strong>%d</strong>',
	'INSTALLER_NOTE'					=> '<strong>Note :</strong> Avant d’ajouter ce mod à votre forum, pensez à sauvegarder votre base de données et les fichiers à modifier !',
	'INSTALLER_DELETE_INFORMATION'		=> '<strong>Impossible</strong> de trouver ABBC3 installé.',
	'INSTALLER_NEEDS_FOUNDER'			=> 'Vous devez être connecté comme Fondateur.',
	'MISSING_PARENT_MODULE'				=> 'Le module parent #%1$s est manquant pour "%2$s".',
	'WARNING'							=> 'Attention',
));

?>