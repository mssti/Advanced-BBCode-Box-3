<?php
/**
* @package: phpBB3 :: Advanced BBCode box 3 -> language [fr][French]
* @version: $Id: acp_aBBcode.php, v 1.0.9 2008/05/01 05:01:00 leviatan21 Exp $
* @copyright: leviatan21 < info@mssti.com > (Gabriel) http://www.mssti.com/phpBB3/
* @license: http://opensource.org/licenses/gpl-license.php GNU Public License 
* @author: leviatan21 - http://www.phpBB.com/community/memberlist.php?mode=viewprofile&u=345763
* @translator: joebart72 - http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=297204
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
	'ACP_ABBCODES_EXPLAIN'				=> 'Vous pouvez ici gérer les styles disponibles pour <strong>[ <a href="http://www.mssti.com/phpBB3" target="_blank">ABBC3</a> ]</strong> sur votre forum.<br/>Vous pouvez modifier les styles existants, rafraîchir, désactiver, réactiver. Vous pouvez également voir l’apparence d’un style en utilisant la fonction de prévisualisation. <br/><em>Le style par défaut est reconnaissable par la présence d’un astérisque (*). Figure aussi la répartition des membres par thème utilisé.</em>',

	'ABBCODES_DISABLE'					=> 'ABBC3',
	'ABBCODES_DISABLE_EXPLAIN'			=> 'Activer ou désactiver <strong>Advanced BBodes Box 3</strong> pour les membres et/ou utiliser les BBcodes standards de phpBB3.',
	'ABBCODES_BG'						=> 'Image de fond',
	'ABBCODES_BG_EXPLAIN'				=> 'Cette option permet de mettre une image de fond pour les icones.<br/>Laissez sur <em>aucune image</em> pour ajuster votre style.',
	'ABBCODES_TAB'						=> 'Afficher les séparations d’icones',
	'ABBCODES_BOXRESIZE'				=> 'Redimensionner la zone du posting',
	'ABBCODES_BOXRESIZE_EXPLAIN'		=> 'Affiche des boutons pour redimensionner la zone du posting.',
	
	'ABBCODES_GREYBOX'					=> 'Utiliser GreyBox',
	'ABBCODES_GREYBOX_EXPLAIN'			=> 'GreyBox est une fonction permettant d’afficher en <em>aperçu</em> et des <em>images redimensionnées</em> en pleine taille. Si non, une nouvelle fenêtre de votre navigateur s’ouvrira.',
	'ABBCODES_RESIZE'					=> 'Réduire les grosses images',
	'ABBCODES_RESIZE_EXPLAIN'			=> 'Fix pour un éventuel bug du BBcode [img] si une image postée est plus large que la zone de post.',
	'ABBCODES_MAX_IMAGE_SIZE'			=> 'Largeur maximale de l’image en pixels',
	'ABBCODES_RESIZE_METHOD'			=> 'Méthode de redimensionnement',
	'ABBCODES_RESIZE_METHOD_EXPLAIN'	=> 'Choisissez comment afficher l’image redimensionnée en pleine taille.',
	//	for translate :							  don't 		Yes			don't		Yes			don't			yes				don't		yes
	'ABBCODES_RESIZE_METHODS'			=> array( 'greybox' => 'Grey Box', 'enlarge' => 'Agrandir', 'samewindow' => 'Même fenêtre', 'newwindow' => 'Nouvelle fenêtre'),
	
	'ABBCODES_MAX_IMAGE_SIZE_EXPLAIN'	=> 'L’image sera automatiquement réduite à la taille définie si elle l’excède.',
	'ABBCODES_MAX_THUMB_WIDTH'			=> 'Largeur maximale de la miniature en pixels',
	'ABBCODES_MAX_THUMB_WIDTH_EXPLAIN'	=> 'La miniature sera automatiquement réduite à la taille définie si elle l’excède.',
	
	'ABBCODES_CUSTOM_BBCODES'			=> 'BBcodes personnalisés',
	'ABBCODES_CUSTOM_BBCODES_EXPLAIN'	=> 'Afficher des icones personnalisées de BBcodes. Cette fonction permet la compatibilité des autres BBcodes vidéo comme [youtube] et d’ajouter vos propres bbcodes, si vous en avez.',
	'ABBCODES_VIDEO_SIZE'				=> 'Dimensions vidéo',
	'ABBCODES_VIDEO_SIZE_EXPLAIN'		=> 'Largeur et hauteur par défaut pour les vidéos postées.',
					
));

$lang = array_merge($lang, array(
	'ABBCODES_SETINGS'					=> 'Paramètres ABBC3',
	'ABBCODES_SETINGS_EXPLAIN'			=> 'Vous pouvez ici configurer les opérations basiques d’<strong>ABBC3</strong>, activer ou désactiver, et parmi d’autres paramètres, ajuster la valeur par défaut de votre image de fond.',
	
	'ABBCODES_CONFIG'					=> 'Configuration des éléments d’ABBC3',
	'ABBCODES_CONFIG_EXPLAIN'			=> 'A partir de cette page, vous pouvez changer l’ordre des BBcodes sur la page de post ou éditer les icones.',
	
	'ABBCODES_NAME'						=> 'Nom du BBcode',
	'ABBCODES_TAG'						=> 'Icone du BBcode',
	'ABBCODES_ORDER'					=> 'Ordre du BBcode',
	'RESET_TO_DEFAULT'					=> 'Réinitialiser par défaut',
	'ABBCODES_BREAK_MOVER'				=> '<strong><i>Ligne de séparation</i></strong>',
	'ABBCODES_DIVISION_MOVER'			=> '<strong><i>Séparation pour les BBcodes</i></strong>',
	
	'ABBCODES_MOD_DISABLE'				=> '<strong>Advanced BBcodes Box 3</strong> est désactivé pour ce style.<br/>',
	'ABBCODES_STATUS'					=> 'Statut',
	'ABBCODES_ACTIVATED'				=> 'Activé',
	'ABBCODES_DEACTIVATED'				=> 'Désactivé',
	
));
?>