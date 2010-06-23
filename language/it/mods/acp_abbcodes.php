<?php
/**
* @package: phpBB3 :: Advanced BBCode box 3 -> language [en][English]
* @version: $Id: acp_abbcode.php, v 1.0.10 2008/08/01 08:08:01 leviatan21 Exp $
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

// This lines are the same as root/language/en/acp/common.php
$lang = array_merge($lang, array(
	'ACP_ABBCODES'				=> 'Impostazioni avanzate per BBcodes Box 3',
	'ACP_ABBC3_SETTINGS'		=> 'Impostazioni per ABBC3',
	'ACP_ABBC3_BBCODES'			=> 'ABBC3 BBCode',
	'LOG_CONFIG_ABBCODES'		=> '<strong>Impostazioni modificate per ABBC3</strong>',
	'LOG_CONFIG_ABBCODES_ERROR'	=> '<strong>Errore durante la modifica dellle impostazioni di ABBC3</strong>',
	'LOG_CONFIG_ADD'			=> '<strong>Impostazioni forum aggiunte</strong><br />» %s',
	'LOG_DATABASE_SCHEMA'		=> '<strong>Aggiornamento schemi del database</strong><br />» %s',
	'LOG_DELETE_ABBCODES'		=> '<strong>Emiminato il MOD ABBC3 dal database</strong>',
));

// abbc3_details
$lang = array_merge($lang, array(
	'ACP_ABBCODES'						=> 'Advanced BBcodes Box 3',
	'ACP_ABBCODES_EXPLAIN'				=> 'Qui puoi gestire gli stili disponibili per <strong>[ <a href="http://www.mssti.com/phpbb3" target="_blank">ABBC3</a> ]</strong> sulla tua board.<br />Puoi modificare gli stili, aggiornarli, disattivarli o riattivarli. Puoi anche controllare l\'anteprima per vedere come saranno visualizzati. <br /><em>I predefiniti sono segnati con un asterisco (*). Sono indicati anche gli utenti che usano gli stili.</em>',

	'ABBCODES_DISABLE'					=> 'ABBC3',
	'ABBCODES_DISABLE_EXPLAIN'			=> 'Attiva o disattiva <strong>Advanced BBodes Box 3</strong> agli utenti, e/o usa i bottono standard di phpBB 3.x!',
	'ABBCODES_BG'						=> 'Immagine di sfondo',
	'ABBCODES_BG_EXPLAIN'				=> 'Imposta l\'imamgine di sfonod delle icone.<br />Imnposta <em>no image</em> per utilizzare il tuo stile.',
	'ABBCODES_TAB'						=> 'Indica l\'icona di suddivisione delle categorie',
	'ABBCODES_BOXRESIZE'				=> 'Redimensiona l\'area di testo per postare',
	'ABBCODES_BOXRESIZE_EXPLAIN'		=> 'Mostra i pulsanti per ridimensionare l\'area di testo.',

	'ABBCODES_RESIZE'					=> 'Redimensiona immagini troppo grandi',
	'ABBCODES_RESIZE_EXPLAIN'			=> 'Coregge un eventauale errore nel [img] bbcode, Quando qualcuno pubblica immagini troppo grandi.',
	'ABBCODES_JAVASCRIPT_EXPLAIN'		=> '<strong>Nota : </strong> <em>AdvancedBox JS</em> è un software JavaScript utilizato per mostrare immagini a schermo intero in dimensione reale.<br />Nela cartella <em>contrib</em> puoi trovare le istruzioni per usare <strong>ABBC3</strong> con Highslide JS | LiteBox | GreyBox.<br />Queste modifiche sono totlamente opzionali. Per gli altri script rivolgersi al supporto proprietario. Non ne siamo responsabili, quindi non risponderò a domande/problemi/bug o altro riguardo a questi.<br />Purtroppo Internet Explorer non riesce a gestire alcune immagini con questi software.',
	'ABBCODES_RESIZE_METHOD'			=> 'Metodo di ridimensionamento',
	'ABBCODES_RESIZE_METHOD_EXPLAIN'	=> 'Scegli come mostrare le immagini ridimensionate in dimesiuoni relai, in tutti i casi possibili.',
	//	for translate :							   don't 			Yes				don't		 Yes		don't			yes			   don't		  yes			don't	  yes
	'ABBCODES_RESIZE_METHODS'			=> array( 'AdvancedBox' => 'AdvancedBox JS', 'enlarge' => 'Ingrandisci', 'samewindow' => 'Stessa finestra', 'newwindow' => 'Nuova Finestra', 'none' => 'Nessun ridimensionamento'),

	'ABBCODES_MAX_IMAGE_WIDTH'			=> 'Larghezza massima in pixel',
	'ABBCODES_MAX_IMAGE_WIDTH_EXPLAIN'	=> 'L\'immagine verrà redimensionata se eccederà a questo limite.',
	'ABBCODES_MAX_IMAGE_HEIGHT'			=> 'L\'altezza massima in pixel',
	'ABBCODES_MAX_IMAGE_HEIGHT_EXPLAIN'	=> 'L\'immagine verrà redimensionata se eccederà a questo limite.',

	'ABBCODES_MAX_THUMB_WIDTH'			=> 'Larghezza massima della miniatura',
	'ABBCODES_MAX_THUMB_WIDTH_EXPLAIN'	=> 'Larghezza in cui verrà creata la miniatura.',

	'ABBCODES_VIDEO_SIZE'				=> 'Dimensioni Video',
	'ABBCODES_VIDEO_SIZE_EXPLAIN'		=> 'Larghezza ed altezza di defoult dei video.',
));

// bbcodes_edit
$lang = array_merge($lang, array(
	'ABBCODES_SETINGS'					=> 'Impostazioni di ABBC3',
	'ABBCODES_SETINGS_EXPLAIN'			=> 'Qui puoi effettuare le opzioni base di <strong>ABBC3</strong>, attivare o disattivare e tra le altre impostazioni puoi regolare i valori di default per lo sfondo.',

	'ABBCODES_EDIT'						=> 'ABBC3 modifica bbcode',
	'ABBCODES_EDIT_EXPLAIN'				=> 'Qui è possibile stabilire il luogo in cui saranno disposti, chi può utilizzarli e l\'immagine di ogni BBCode.',

	'ABBCODES_CONFIG'					=> 'Configurazione componenti di ABBC3',
	'ABBCODES_CONFIG_EXPLAIN'			=> 'Da questa pagina è possibile modificare l\'ordine dei tag sulla pagina di invio o modificare le icone,',
	'ABBCODES_GROUPS_EXPLAIN'			=> '<strong> Gestione gruppi: </ strong> Se non ci sono gruppi selezionati tutti gli utenti possono utilizzare questo BBCode. <br /> Al fine di selezionare (o delezionare) più gruppi, è necessario utilizzare Ctrl-clic (Cmd-clic su Mac) per aggiungere elementi di loro. Se si dimentica di tenere premuto il tasto Ctrl/Cmd quando si fa clic su un elemento, quindi tutti gli elementi selezionati in precedenza vengono persi.',

	'ABBCODES_NAME'						=> 'Nome Tag',
	'ABBCODES_TAG'						=> 'Icona del Tag',
	'ABBCODES_ORDER'					=> 'Ordine dei Tag',

	'ABBCODES_BREAK_MOVER'				=> '<strong><i>Interruzione di linea</i></strong>',
	'ABBCODES_DIVISION_MOVER'			=> '<strong><i>Suddivisione</i></strong>',
	'ABBCODES_ADD_DIVISION'				=> 'Aggiungi una suddivisione',
	'ABBCODES_ADD_BREAK'				=> 'Aggiungi una interruzione dei linea',

	'ABBCODES_MOD_DISABLE'				=> 'L\'<strong>Advanced BBcodes Box 3</strong> è disattivato.<br />',
	'ABBCODES_STATUS'					=> 'Stato',
	'ABBCODES_ACTIVATED'				=> 'Attivato',
	'ABBCODES_DEACTIVATED'				=> 'Disattivato',
));

// Installer 
$lang = array_merge($lang, array(
	// Main
	'INSTALLER_TITLE'					=> 'Advanced BBcodes Box 3',
	'INSTALLER_VERSION'					=> ' versione : %1$s',

	'INSTALLER_INTRO'					=> 'Intro',
	'INSTALLER_INTRO_WELCOME'			=> 'Benvenuto all\'installazione di <strong>%1$s</strong>',
	'INSTALLER_INTRO_WELCOME_NOTE'		=> 'Scegli quelloc che vuoi fare.',
	'INSTALLER_INSTALL_MENU'			=> 'Menu',
	'INSTALLER_EXTRA_MENU'				=> 'Extra',

	// Install
	'INSTALLER_INSTALL'					=> 'Installa',
	'INSTALLER_INSTALL_WELCOME'			=> 'Benvenuto al menu dell\'installazione di <strong>%1$s</strong>',
	'INSTALLER_INSTALL_WELCOME_NOTE'	=> 'Quando scegli di installare ABBC3, il DB delle versioni precedenti verrà perduto.',
	'INSTALLER_INSTALL_SUCCESSFUL'		=> 'IInstallazione di ABBC3 riuscita!',
	'INSTALLER_INSTALL_UNSUCCESSFUL'	=> 'Installazione di ABBC3 was <strong>non</strong> riuscita.',
	'INSTALLER_INSTALL_VERSION'			=> 'Versione Installer: %1$s',
	'INSTALLER_INSTALL_END'				=> 'Installazione della <strong>%1$s versione : %2$s</strong> riuscita. <br /> <p>Ora devi fare <a href="../index.php">login alla tua board</a> e controllare che tutto sia apposto. <br />Non dimentcare di eliminare, rinominare o spostare la tua cartella <strong>install_abbc3</strong>!</p>',

	// Update
	'INSTALLER_UPDATE'					=> 'Aggiorna',
	'INSTALLER_UPDATE_WELCOME'			=> 'Benvenuto ne menu di aggiornamento di <strong>ABBC3</strong>',
	'INSTALLER_UPDATE_WELCOME_NOTE'		=> 'Quando scegli di aggiornare ABBC3 qualsiasi DB delle precedenti versione verrà perduto!',
	'INSTALLER_UPDATE_SUCCESSFUL'		=> 'Aggiornamento di ABBC3 eiuscito!.',
	'INSTALLER_UPDATE_UNSUCCESSFUL'		=> 'Aggiornamento di ABBC3 <strong>non</strong> riuscito.',
	'INSTALLER_UPDATE_VERSION'			=> 'Aggiorna alla versione: %1$s',
	'INSTALLER_UPDATE_END'				=> 'Attenzione: alcuni BBCode potrebbero <strong>non</strong> essere visualizzati corretamente a causa delle modifiche introdotte negli stessi BBCode, se incontri problemi esegui: <strong>Extras » Re-parse</strong> Steps',

	// Uninstall
	'INSTALLER_DELETE'					=> 'Elimina',
	'INSTALLER_DELETE_WELCOME'			=> 'Benvenuto al menu di disinstalazione di <strong>ABBC3</strong>',
	'INSTALLER_DELETE_WELCOME_NOTE'		=> 'Quando elimini la MOD, verrnno rimosse tutte le modifiche all\'Sql ed i dati in esso inserito dall\'installazione|',
	'INSTALLER_DELETE_VERSION'			=> 'Disinstalla versione : %1$s',
	'INSTALLER_DELETE_NOTE'				=> 'Elimina',
	'INSTALLER_DELETE_SUCCESSFUL'		=> 'Rimozione della versione <strong>%1$s : %2$s</strong> riuscita.<br />Ora elimina tutti i files!.',
	'INSTALLER_DELETE_UNSUCCESSFUL'		=> '<strong>Non</strong> è possibile eliminare %1$s versione :%2$s .',

	// Re-parse
	'INSTALLER_REPARSE'					=> 'Re-parse',
	'INSTALLER_REPARSE_WELCOME'			=> 'Benvenuto nel menu di \"Re-parse\"',
	'INSTALLER_REPARSE_WELCOME_NOTE'	=> 'Quando <strong>Re-analizzi</strong> semplicemente reimposti i BBCodes con un click -- può essere utile per cambiare la sintassi del BBCode, Aggiorna soltanto alcuni valori, non riscrive il testo...',
	'INSTALLER_REPARSE_NOTE'			=> 'Attenzione: Si prega di notare che, nonstante la possibilità di eventuali danni al DB è improbabile, si utilizza a proprio rischio e pericolo e non sono responsabile se qualcosa va storto..',
	'INSTALLER_REPARSE_WARNING'			=> 'Si dovrebbe fare un backup delle tabelle degli utenti, dei post e dei messagi privati in caso qualcosa vada male.',
	'INSTALLER_REPARSE_POST'			=> 'Re-analizza il contenuto dei post',
	'INSTALLER_REPARSE_SIG'				=> 'Re-analizza firme',
	'INSTALLER_REPARSE_PM'				=> 'Re-analizza PM',
	'INSTALLER_REPARSE_SUCCESSFUL'		=> '%1$s è riuscito.',
	'INSTALLER_REPARSE_UNSUCCESSFUL'	=> '<strong>Not</strong> è possibile %1$s.',
	
	'STEP_PERCENT_COMPLETED'			=> 'Passaggio <strong>%d</strong> di <strong>%d</strong>',
	'INSTALLER_NOTE'					=> '<strong>Nota:</strong> Prima di aggiungere questo MOD per il tuo forum, si dovrebbe eseguire il backup del database e tutti i file correlati a questo MOD!',
	'INSTALLER_DELETE_INFORMATION'		=> '<strong>Impossibile</strong> trovare l\'installazione di ABBC3!.',
	'INSTALLER_NEEDS_FOUNDER'			=> 'Devi essere loggato come fondatore.',
	'MISSING_PARENT_MODULE'				=> 'Il modulo #%1$s è mancante come modulo collegato a "%2$s".',
	'WARNING'							=> 'Attenzione',
));

?>