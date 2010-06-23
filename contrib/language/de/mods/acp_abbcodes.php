<?php
/**
* @package: phpBB3 :: Advanced BBCode box 3 -> language [de][German]
* @version: $Id: acp_abbcode.php, v 1.0.11 2008/10/11 11:10:08 leviatan21 Exp $
* @copyright: leviatan21 < info@mssti.com > (Gabriel) http://www.mssti.com/phpbb3/
* @license: http://opensource.org/licenses/gpl-license.php GNU Public License 
* @author: leviatan21 - http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=345763
* @translator: TigerCrow - http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=445065
* @additional translator: femu - http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=208602
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
	'ACP_ABBC3_SETTINGS'		=> 'ABBC3 Einstellungen',
	'ACP_ABBC3_BBCODES'			=> 'ABBC3 BBCodes',
	'LOG_CONFIG_ABBCODES'		=> '<strong>ABBC3 Einstellungen geändert</strong>',
	'LOG_CONFIG_ABBCODES_ERROR'	=> '<strong>Fehler beim Speichern der ABBC3 Einstellungen</strong>',
	'LOG_CONFIG_ADD'			=> '<strong>Board Einstellung hinzugefügt</strong><br />» %s',
	'LOG_DATABASE_SCHEMA'		=> '<strong>Datenbank Schema aktualisiert</strong><br />» %s',
	'LOG_DELETE_ABBCODES'		=> '<strong>MOD ABBC3 aus der Datenbank entfernt</strong>',
));

// abbc3_details
$lang = array_merge($lang, array(
	'ACP_ABBCODES'						=> 'Advanced BBcodes Box 3',
	'ACP_ABBCODES_EXPLAIN'				=> 'Hier kannst Du die verfügbaren Stile für <strong>[ <a href="http://www.mssti.com/phpbb3" target="_blank">ABBC3</a> ]</strong> auf deinem Board Einstellen.<br/>Du darfst existierende Stile verändern, neu laden, deactivieren oder reactivieren. Du kannst auch sehen, wie ein Stil aussehen wird, wenn du die Vorschaufunktion benutzt. <br/><em>Der eigestellte Stil wird durch ein (*) gekennzeichnet. Es ist auch aufgeführt wie viele User einen Stil derzeit benutzen.</em>',

	'ABBCODES_DISABLE'					=> 'ABBC3',
	'ABBCODES_DISABLE_EXPLAIN'			=> 'Ein/Ausschalten der <strong>Advanced BBodes Box 3</strong> für Benutzer, und/oder für das Benutzen der standard phpbb3 Eingabe Buttons.',
	'ABBCODES_BG'						=> 'Hintergrundbild',
	'ABBCODES_BG_EXPLAIN'				=> 'Hier wird das Hintergrundbild für die Icons eingestellt.<br/>Stelle auf <em>Kein Bild</em> um deinen Stil zu verwenden.',
	'ABBCODES_TAB'						=> 'Anzeige der Icon für die Tags',
	'ABBCODES_BOXRESIZE'				=> 'Größenänderung des Textbereiches',
	'ABBCODES_BOXRESIZE_EXPLAIN'		=> 'Anzeige Button für die Größenänderung des Eingabefeldes.',

	'ABBCODES_RESIZE'					=> 'Verkeilere große Bilder',
	'ABBCODES_RESIZE_EXPLAIN'			=> 'Damit wird der Fehler beim [img] bbcode, wenn jemand Bilder veröffentlicht, die größer als deine Forumbreite sind.',
	'ABBCODES_JAVASCRIPT_EXPLAIN'		=> '<strong>Note : </strong> <em>AdvancedBox JS</em> ist ein JavaScript Software, die verwendet wird, um Bilder in Originalgröße darzustellen.<br />Im <em>contrib</em> Verzeichnis findest du, wie <strong>ABBC3</strong> mit anderen Scripts verwendet wird.<br />Diese Modifikationen sind optional. Jedes Script hat seinen eigenen Support, Ich trage für diese keine Verantwortung und werte weder Fragen beantworten noch bei irgendwelchen Problemen helfen.',
	'ABBCODES_RESIZE_METHOD'			=> 'Verkleinerungsmethode',
	'ABBCODES_RESIZE_METHOD_EXPLAIN'	=> 'Wähle, wie in allen Situation Bilder in voller Größe dargestellt werden sollen.',
##	For translate :                                Don't            Yes               Don't        Yes             Don't        Yes        Don't           yes            Don't          yes           Don't     yes
	'ABBCODES_RESIZE_METHODS'			=> array( 'AdvancedBox' => 'AdvancedBox JS', 'pop-up' => 'Pop Up Fenster', 'enlarge' => 'Vergrößern', 'samewindow' => 'Gleiches Fenster', 'newwindow' => 'Neues Fenster', 'none' => 'Nicht vergrößern'),

	'ABBCODES_MAX_IMAGE_WIDTH'			=> 'Maximale Bildbreite in Pixel',
	'ABBCODES_MAX_IMAGE_WIDTH_EXPLAIN'	=> 'Das Bild wird verkleinert, wenn diese Breite erreicht wird.',
	'ABBCODES_MAX_IMAGE_HEIGHT'			=> 'Maximale Bildhöhe in Pixel',
	'ABBCODES_MAX_IMAGE_HEIGHT_EXPLAIN'	=> 'Das Bild wird verkleinert, wenn diese Höhe erreicht wird.',
	'ABBCODES_RESIZE_SIGNATURE'			=> 'Größere Bilder in der Signatur verkleinern',
	'ABBCODES_RESIZE_SIGNATURE_EXPLAIN'	=> 'Sollen auch größere Bilder in der Signatur verkleinert werden?',
	'ABBCODES_MAX_THUMB_WIDTH'			=> 'Maximale Thumbnal Breite in Pixel',
	'ABBCODES_MAX_THUMB_WIDTH_EXPLAIN'	=> 'Ein erstelltes Thumbnail wird die Breite, die hier eingestellt wird, nicht überschreiten.',

	'ABBCODES_VIDEO_SIZE'				=> 'Videoabmessungen',
	'ABBCODES_VIDEO_SIZE_EXPLAIN'		=> 'Standard Breite und Höhe für ein eingestelltes Video.',

	'ABBCODES_UPLOAD_EXTENSION'			=> 'Verfügbare Videotypen',
	'ABBCODES_UPLOAD_EXTENSION_EXPLAIN'	=> 'Du kannst hier die erlaubten Typen hinzufügen/ändern/löschen. Trenne die Typen mit einem Komma (,)<br /><strong>Hinweis : </strong> Diese Werte überschreiben die Werte, die in der Attachment Verwaltung eingestellt wurden.',
));

// bbcodes_edit
$lang = array_merge($lang, array(
	'ABBCODES_SETINGS'					=> 'ABBC3 Einstellungen',
	'ABBCODES_SETINGS_EXPLAIN'			=> 'Hier kannst du die Basiseinstellungen des <strong>ABBC3</strong> vornehmen. Du kannst Funktionen ein-/ausschalten, verschiedene andere Einstellungen vornehmen und Standardwerte festlegen.',

	'ABBCODES_EDIT'						=> 'ABBC3 BBcode bearbeiten',
	'ABBCODES_EDIT_EXPLAIN'				=> 'Hier legst du fest, wo die Codes angezeigt werde, wer sie bnutzen darf und legst das dazugehörige Icon fest.',

	'ABBCODES_CONFIG'					=> 'ABBC3 Komponenten Einstellungen',
	'ABBCODES_CONFIG_EXPLAIN'			=> 'Hier kannst die Reihenfolge der Tags festlegen oder die Icons bearbeiten,',
	'ABBCODES_GROUPS_EXPLAIN'			=> '<strong>Gruppen verwalten : </strong>Wenn keine Gruppen ausgewählt sind, kann jeder Benutzer diesen BBCode verwenden.<br />Um mehrere Gruppen auszuwählen (oder abzuwählen), mußt die CTRL-Taste (oder die Cmd-Taste beim Mac) verwenden. Wenn du vergisst diese Tasten zu drücken, gehen die vorher ausgewählten verloren.',

	'ABBCODES_NAME'						=> 'Tag Name',
	'ABBCODES_TAG'						=> 'Tag Bildicon',
	'ABBCODES_ORDER'					=> 'Tag Reihenfolge',

	'ABBCODES_BREAK_MOVER'				=> '<strong><i>Zeilenumbruch</i></strong>',
	'ABBCODES_DIVISION_MOVER'			=> '<strong><i>Trenner</i></strong>',
	'ABBCODES_ADD_DIVISION'				=> 'Füge einen neuen Trenner hinzu',
	'ABBCODES_ADD_BREAK'				=> 'Füge einen Zeilenumbruch hinzu',
	'ABBCODES_SYNC'						=> 'Synchronisiere die Reihenfolge',
	'ABBCODES_RESYNC_SUCCESS'			=> 'Die BBcode Reihenfolge wurde synchronisiert.',

	'ABBCODES_MOD_DISABLE'				=> '<strong>Advanced BBcodes Box 3</strong> ist deaktiviert.<br />',
	'ABBCODES_STATUS'					=> 'Status',
	'ABBCODES_ACTIVATED'				=> 'aktiviert',
	'ABBCODES_DEACTIVATED'				=> 'deaktiviert',
));

// Installer 
$lang = array_merge($lang, array(
	// Main
	'INSTALLER_TITLE'					=> 'Advanced BBcodes Box 3',
	'INSTALLER_VERSION'					=> ' Version : %1$s',

	'INSTALLER_INTRO'					=> 'Einführung',
	'INSTALLER_INTRO_WELCOME'			=> 'Willkommen zur Installation des <strong>%1$s</strong>',
	'INSTALLER_INTRO_WELCOME_NOTE'		=> 'Bitte wähle aus, was du tun willst.',
	'INSTALLER_INSTALL_MENU'			=> 'Menu',
	'INSTALLER_EXTRA_MENU'				=> 'Extras',

	// Install
	'INSTALLER_INSTALL'					=> 'Installieren',
	'INSTALLER_INSTALL_WELCOME'			=> 'Willkommen im Installaionsmenü des <strong>ABBC3</strong>',
	'INSTALLER_INSTALL_WELCOME_NOTE'	=> 'Wenn du dich entscheidest, den ABBC3 zu installieren, werden schon vorhandene Datenbankeintrage gelöscht.',
	'INSTALLER_INSTALL_SUCCESSFUL'		=> 'Die Installation des ABBC3 war erfolgreich.',
	'INSTALLER_INSTALL_UNSUCCESSFUL'	=> 'Die Installation des ABBC3 war <strong>nicht</strong> erfolgreich.',
	'INSTALLER_INSTALL_VERSION'			=> 'Installiere Version : %1$s',
	'INSTALLER_INSTALL_END'				=> 'Die Installation der Version <strong>%1$s : %2$s</strong> war erfolgreich. <br /> <p>Du solltest dich nun in dein <a href="../index.php">Forum einloggen</a> und prüfen, ob alles richtig funktioniert. <br />Vergesse nicht, das Verzeichnis <strong>install_abbc3</strong> zu löschen, umzubenennen oder zu verschieben!</p>',

	// Update
	'INSTALLER_UPDATE'					=> 'Update',
	'INSTALLER_UPDATE_WELCOME'			=> 'Willkommen im <strong>ABBC3</strong> Update Menü',
	'INSTALLER_UPDATE_WELCOME_NOTE'		=> 'Wenn du dich entscheidest den ABBC3 zu aktualisieren, werden alle Datenbankeneintrage von älteren Versionen gelöscht.',
	'INSTALLER_UPDATE_SUCCESSFUL'		=> 'Das Update des ABBC3 war erfolgreich.',
	'INSTALLER_UPDATE_UNSUCCESSFUL'		=> 'Das Update des ABBC3 war <strong>nicht</strong> erfolgreich.',
	'INSTALLER_UPDATE_VERSION'			=> 'Update auf Version : %1$s',
	'INSTALLER_UPDATE_END'				=> 'Bitte sei dir bewusst, daß einige BBCodes auf Grund der Änderungen in BBCodes möglicherweise <strong>nicht</strong> richtig dargestellt werden. Falls du auf Probleme stossen solltest, führe bitte <strong>Extras » Re-parse</strong> Schritte durch',

	// Uninstall
	'INSTALLER_DELETE'					=> 'Löschen',
	'INSTALLER_DELETE_WELCOME'			=> 'Willkommen im <strong>ABBC3</strong> Löschmenü',
	'INSTALLER_DELETE_WELCOME_NOTE'		=> 'Wenn du dich entscheidest diesen MOD zu deinstallieren, werden alle Datenbankeinträge des ABBC3 entfernt.',
	'INSTALLER_DELETE_VERSION'			=> 'Entferne Version : %1$s',
	'INSTALLER_DELETE_NOTE'				=> 'Entfernen',
	'INSTALLER_DELETE_SUCCESSFUL'		=> 'Entfernung der Version <strong>%1$s : %2$s</strong> war erfolgreich.<br />Lösche jetzt alle dazugehörigen Dateien.',
	'INSTALLER_DELETE_UNSUCCESSFUL'		=> 'Konnte die version %1$s <strong>nicht</strong> löschen :%2$s .',

	// Re-parse
	'INSTALLER_REPARSE'					=> 'Re-parse',
	'INSTALLER_REPARSE_WELCOME'			=> 'Willkommen im Re-parse Menü',
	'INSTALLER_REPARSE_WELCOME_NOTE'	=> 'Wenn du dich entscheidest, die <strong>Re-parse</strong> Funktion zu nutzen, werden BBCodes mit einem Klick neu geparst -- das ist sinnvoll, wenn du z.B. den Sytax von BBCodes geändert hast. Ändere nur Werte, aber keine Text ...',
	'INSTALLER_REPARSE_NOTE'			=> 'Bitte beachte, daß es Datenbankfehler geben kann. Du benutzt diese Funktion auf eigenes Risiko und ich bin nicht verantwortlich, wenn etwas nicht funktioniert. Ein Backup der Datenbank sollte vorher durchgeführt werden.',
	'INSTALLER_REPARSE_WARNING'			=> 'Du solltest mind. ein Backup deiner Benutzer, Nachrichten und der privaten Nachrichten Tabellen durchführen, für den Fall, daß etwas schief läuft.',
	'INSTALLER_REPARSE_POST'			=> 'Re-parse Inhalt der Nachrichten',
	'INSTALLER_REPARSE_SIG'				=> 'Re-parse Signaturen',
	'INSTALLER_REPARSE_PM'				=> 'Re-parse Private Nachrichten',
	'INSTALLER_REPARSE_SUCCESSFUL'		=> '%1$s war erfolgreich.',
	'INSTALLER_REPARSE_UNSUCCESSFUL'	=> 'Konnte <strong>nichtt</strong> %1$s.',
	
	'STEP_PERCENT_COMPLETED'			=> 'Schritt <strong>%d</strong> von <strong>%d</strong>',
	'INSTALLER_NOTE'					=> '<strong>Hinweis :</strong> Befvor du diesen MOD installierst, solltest ein Backup deiner Datenbank und allen dazugehörigen Dateien durchführen!',
	'INSTALLER_DELETE_INFORMATION'		=> 'Konnte <strong>keine</strong> ABBC3 Installation finden !',
	'INSTALLER_NEEDS_FOUNDER'			=> 'Du mußt als Gründer eingeloggt sein.',
	'MISSING_PARENT_MODULE'				=> 'Modul #%1$s fehlt als übergeordnetes Modul für "%2$s".',
	'WARNING'							=> 'Warnung',
));

?>