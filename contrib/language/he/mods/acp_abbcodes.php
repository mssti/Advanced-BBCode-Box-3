<?php
/**
* @package: phpBB3 :: Advanced BBCode box 3 -> language [he][hebrew]
* @version: $Id: acp_abbcode.php, v 1.0.11 2008/10/11 11:10:08 leviatan21 Exp $
* @copyright: leviatan21 < info@mssti.com > (Gabriel) http://www.mssti.com/phpbb3/
* @license: http://opensource.org/licenses/gpl-license.php GNU Public License 
* @author: leviatan21 - http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=345763
* @translator: oferxxx - http://www.phpbb.co.il/memberlist.php?mode=viewprofile&u=16660
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
	'ACP_ABBC3_SETTINGS'		=> 'הגדרות ABBC3',
	'ACP_ABBC3_BBCODES'			=> 'ABBC3 BBCodes',
	'LOG_CONFIG_ABBCODES'		=> '<strong>הגדרות ABBC3 השתנו</strong>',
	'LOG_CONFIG_ABBCODES_ERROR'	=> '<strong>השגיאה תשמור על הגדרות ABBC3</strong>',
	'LOG_CONFIG_ADD'			=> '<strong>הגדרות מערכת נוספו</strong><br />» %s',
	'LOG_DATABASE_SCHEMA'		=> '<strong>מעדכן תרשים בסיס נתונים</strong><br />» %s',
	'LOG_DELETE_ABBCODES'		=> '<strong>מוד ABBC3 נמחק מבסיס הנתונים</strong>',
));

// abbc3_details
$lang = array_merge($lang, array(
	'ACP_ABBCODES'						=> 'Advanced BBcodes Box 3',
	'ACP_ABBCODES_EXPLAIN'				=> 'כאן תוכל לנהל את העיצובים הזמינים של <strong>[ <a href="http://www.mssti.com/phpbb3" target="_blank">ABBC3</a> ]</strong> המערכת שלך.<br/>תוכל לשנות עיצובים קיימים, לרענן, לבטל ולהפעיל מחדש. בנוסף תוכל לראות איך עיצוב יותר להראות בעזרת תצוגה מקדימה. <br/><em> עיצוב ברירת המחדל הנוכחי יצויין עם כוכבית (*). כל עיצוב מוצג עם סה"כ המשתמשים בו.</em>',
	
	'ABBCODES_DISABLE'					=> 'ABBC3',
	'ABBCODES_DISABLE_EXPLAIN'			=> 'אפשר או בטל <strong>Advanced BBodes Box 3</strong> למשתמשים, ו\או השתמש בכפתורים הסטנדרטיים של phpbb3.',
	'ABBCODES_BG'						=> 'תמונת רקע',
	'ABBCODES_BG_EXPLAIN'				=> 'זה יאפשר את תמונת הרקע לכל איקון.<br/>קבע <em>ללא תמונה</em> כדי להתאים לעיצוב.',
	'ABBCODES_TAB'						=> 'הצג גבולות איקונים לתגים',
	'ABBCODES_BOXRESIZE'				=> 'הקטן בתגובה את איזור הכיתוב',
	'ABBCODES_BOXRESIZE_EXPLAIN'		=> 'הצג כפתורים לשינוי גודל איזור הכיתוב בתגובה.',

	'ABBCODES_RESIZE'					=> 'הקטן תמונות גדולות',
	'ABBCODES_RESIZE_EXPLAIN'			=> 'זהו תיקון לבאג התמונות [img] שכאשר מישהו מוסיף תמונה גדולה ורחבה יותר מרוחב תוכן התגובה.',
	'ABBCODES_JAVASCRIPT_EXPLAIN'		=> '<strong>הערה : </strong> <em>AdvancedBox JS</em> הוא תוכנת JavaScript התשתמשת להצגת תמונות במידה מלאה.<br />בתיקיה <em>contrib</em> אתה תמצא איך להשתמש ב <strong>ABBC3</strong> עם Highslide JS | LiteBox | GreyBox.<br />מוד זה אפשרי בהחלט. כל script יש תמיכה משלו. אני לא אחראי על זה. אני לא יענה על שאלות/בעיות/באגים או כל דבר הקשור אליהם.<br />למרבה הצער Internet Explorer לא מבין איך לנהל חלק מהתמונות המצורפות עם תוכנה זו.',
	'ABBCODES_RESIZE_METHOD'			=> 'שיטת הקטנה',
	'ABBCODES_RESIZE_METHOD_EXPLAIN'	=> 'בחר כיצד יועברו התמונות המוקטנות למצב תצוגה בגודל מלא.',
##	For translate :                                Don't            Yes               Don't        Yes             Don't        Yes        Don't           yes            Don't          yes           Don't     yes
	'ABBCODES_RESIZE_METHODS'			=> array( 'AdvancedBox' => 'AdvancedBox JS', 'pop-up' => 'Pop Up window', 'enlarge' => 'Enlarge', 'samewindow' => 'Same window', 'newwindow' => 'New window', 'none' => 'No resize'),

	'ABBCODES_MAX_IMAGE_WIDTH'			=> 'רוחב מקסימלי של תמונה בפיקסלים',
	'ABBCODES_MAX_IMAGE_WIDTH_EXPLAIN'	=> 'תמונה תשנה גודל אם תכניס כאן רוחב.',
	'ABBCODES_MAX_IMAGE_HEIGHT'			=> 'גובה מקסימלי של תמונה בפיקסלים',
	'ABBCODES_MAX_IMAGE_HEIGHT_EXPLAIN'	=> 'תמונה תשנה גודל אם תכניס כאן גובה.',
	'ABBCODES_RESIZE_SIGNATURE'			=> 'הקטן תמונות גדולות בחתימות',
	'ABBCODES_RESIZE_SIGNATURE_EXPLAIN'	=> 'גם להקטין תמונות גדולות בחתימות ?',
	'ABBCODES_MAX_THUMB_WIDTH'			=> 'רוחב מקסימלי של תמונה ממוזערת בפיקסלים',
	'ABBCODES_MAX_THUMB_WIDTH_EXPLAIN'	=> 'תמונה ממוזערת לא תגדיל את עצמה לרוחב שתכניס לכאן.',

	'ABBCODES_VIDEO_SIZE'				=> 'ממדים לוידאו',
	'ABBCODES_VIDEO_SIZE_EXPLAIN'		=> 'ברירת מחדל של גובה ורוחב לוידאו.',

	'ABBCODES_UPLOAD_EXTENSION'			=> 'סיומות זמינות',
	'ABBCODES_UPLOAD_EXTENSION_EXPLAIN'	=> 'אתה יכול להוסיף/לשנות/למחוק פורמטים מותרים. הפרד סיומות עם פסיק(,)<br /><strong>הערה : </strong> ערכים אלה יחליפו את הגדרות ניהול סיומות קבצים מצורפים.',
));

// bbcodes_edit
$lang = array_merge($lang, array(
	'ABBCODES_SETINGS'					=> 'הגדרות ABBC3',
	'ABBCODES_SETINGS_EXPLAIN'			=> 'כאן אתה יכול לקבוע את ההגדרות הבסיסיות ל <strong>ABBC3</strong>, פעיל או לא, ובין היתר הגדרות ברירת מחדל לערך הרקע.',

	'ABBCODES_EDIT'						=> 'ABBC3 ערוך bbcode',
	'ABBCODES_EDIT_EXPLAIN'				=> 'כאן אתה יכול להחליט איפה יוצג או מי יכול להשתמש בזה בנוסף תוכל לקבוץ תמונה לכול bbcode.',

	'ABBCODES_CONFIG'					=> 'ABBC3 סידור רכיב',
	'ABBCODES_CONFIG_EXPLAIN'			=> 'מדף זה אתה יכול לשנות את סדר התגים בדף שליחת הודעה או לערוך את האייקונים,',
	'ABBCODES_GROUPS_EXPLAIN'			=> '<strong>ניהול קבוצות : </strong>אם לא נבחרו קבוצות כל המשתמשים יכולים להשתמש ב bbcode.<br />בשביל לבחור (או בשביל לבטל) קבוצות מרובות, אתה חייב להשתמש ב-Ctrl-Click (או Cmd-Click במערכת Mac) כדי לבחור אותם. אם שחכת להמשיך ללחוץ על Ctrl/Cmd כאשר אתה בוחר קבוצה, כל הקבוצות שנבחרו עד עכשיו יעלמו.',

	'ABBCODES_NAME'						=> 'שם התג',
	'ABBCODES_TAG'						=> 'אייקון התג',
	'ABBCODES_ORDER'					=> 'סדר התג',

	'ABBCODES_BREAK_MOVER'				=> '<strong><i>קו שבור</i></strong>',
	'ABBCODES_DIVISION_MOVER'			=> '<strong><i>חלוקה</i></strong>',
	'ABBCODES_ADD_DIVISION'				=> 'הוסף גירסא חדשה',
	'ABBCODES_ADD_BREAK'				=> 'הוסף קו שבור חדש',
	'ABBCODES_SYNC'						=> 'סדר מסונכרן',
	'ABBCODES_RESYNC_SUCCESS'			=> 'סדר ה-bbcode סונכן מחדש.',

	'ABBCODES_MOD_DISABLE'				=> '<strong>Advanced BBcodes Box 3</strong> לא פעיל.<br />',
	'ABBCODES_STATUS'					=> 'מצב',
	'ABBCODES_ACTIVATED'				=> 'פעיל',
	'ABBCODES_DEACTIVATED'				=> 'לא פעיל',
));

// Installer 
$lang = array_merge($lang, array(
	// Main
	'INSTALLER_TITLE'					=> 'Advanced BBcodes Box 3',
	'INSTALLER_VERSION'					=> ' גירסא : %1$s',

	'INSTALLER_INTRO'					=> 'מבוא',
	'INSTALLER_INTRO_WELCOME'			=> 'ברוכים הבאים להתקנת <strong>%1$s</strong>',
	'INSTALLER_INTRO_WELCOME_NOTE'		=> 'אנא בחר מה אתה רוצה לעשות.',
	'INSTALLER_INSTALL_MENU'			=> 'תפריט',
	'INSTALLER_EXTRA_MENU'				=> 'תוספות',

	// Install
	'INSTALLER_INSTALL'					=> 'התקנה',
	'INSTALLER_INSTALL_WELCOME'			=> 'ברוכים הבאים לתפריט התקנת <strong>ABBC3</strong>',
	'INSTALLER_INSTALL_WELCOME_NOTE'	=> 'כאשר אתה בוחר להתקין את ABBC3, כל טבלאות בסיס הנתנים של גירסאות ישנות ימחקו.',
	'INSTALLER_INSTALL_SUCCESSFUL'		=> 'התקנת ABBC3 הצליחה.',
	'INSTALLER_INSTALL_UNSUCCESSFUL'	=> 'התקנת ABBC3 <strong>לא</strong> הצליחה.',
	'INSTALLER_INSTALL_VERSION'			=> 'התקן גירסא : %1$s',
	'INSTALLER_INSTALL_END'				=> 'התקנה של <strong>%1$s גירסא : %2$s</strong> הצליחה. <br /> <p>אתה יכול <a href="../index.php">להתחבר למערכת שלך</a> ולבדוק שהכל עובד טוב. <br />אל תשכח למחוק, לשנות או להעביר את התיקיה <strong>install_abbc3</strong> מהסיפריה הראשית!</p>',

	// Update
	'INSTALLER_UPDATE'					=> 'עידכון',
	'INSTALLER_UPDATE_WELCOME'			=> 'ברוכים הבאים לתפריט עדכון <strong>ABBC3</strong>',
	'INSTALLER_UPDATE_WELCOME_NOTE'		=> 'כאשר אתה בוחר לעדכן את ABBC3, כל טבלאות בסיס הנתנים של גירסאות ישנות ימחקו.',
	'INSTALLER_UPDATE_SUCCESSFUL'		=> 'עדכון ABBC3 הצליחה.',
	'INSTALLER_UPDATE_UNSUCCESSFUL'		=> 'עדכון ABBC3 <strong>לא</strong> הצליחה.',
	'INSTALLER_UPDATE_VERSION'			=> 'עודכן לגירסא : %1$s',
	'INSTALLER_UPDATE_END'				=> 'בבקשה תדע שיכול להיות ש BBCodes <strong>לא</strong> יוצגו נכון בגלל השינויים שהוכנסו ב BBCodes, אם יש לך בעיות בבקשה תריץ את הצעדים <strong>Extras » Re-parse</strong>',

	// Uninstall
	'INSTALLER_DELETE'					=> 'מחק',
	'INSTALLER_DELETE_WELCOME'			=> 'ברוכים הבאים לתפריט מחיקת <strong>ABBC3</strong>',
	'INSTALLER_DELETE_WELCOME_NOTE'		=> 'כאשר אתה בוחר למחוק את ABBC3, כל טבלאות בסיס הנתנים של המוד ימחקו.',
	'INSTALLER_DELETE_VERSION'			=> 'מחק גירסא : %1$s',
	'INSTALLER_DELETE_NOTE'				=> 'מחק',
	'INSTALLER_DELETE_SUCCESSFUL'		=> 'מחיקת <strong>%1$s גירסא : %2$s</strong> הצליחה.<br />עכשיו מחק את כל הקבצים.',
	'INSTALLER_DELETE_UNSUCCESSFUL'		=> '<strong>לא</strong> יכול למחוק את %1$s גירסא :%2$s .',

	// Re-parse
	'INSTALLER_REPARSE'					=> 'נתח מילה',
	'INSTALLER_REPARSE_WELCOME'			=> 'ברוכים הבאים לתפריט ניתוח מילה',
	'INSTALLER_REPARSE_WELCOME_NOTE'	=> 'When you choose to <strong>Re-parse</strong> simply reparses BBCodes upon a click -- it is useful if you change the syntax of a BBCode, Only adjust some values, do not rewrite text...',
	'INSTALLER_REPARSE_NOTE'			=> 'בבקשה שים לב שהסיכויים שבסיס הנתונים ינזק הוא לא סביר, אתה מריץ את זה על האחריות שלך ואני לא אחראי אם משהו משתבש.',
	'INSTALLER_REPARSE_WARNING'			=> 'אתה צריך לבצע גיבוי מהמשתמשים שלך, טבלאות של נושאים והודעות פרטיות למקרה שמשהו ישתבש.',
	'INSTALLER_REPARSE_POST'			=> 'נתח מילה תוכן הודעה',
	'INSTALLER_REPARSE_SIG'				=> 'נתח מילה חתימה',
	'INSTALLER_REPARSE_PM'				=> 'נתח מילה הודעה פרטית',
	'INSTALLER_REPARSE_SUCCESSFUL'		=> 'הצליחה %1$s.',
	'INSTALLER_REPARSE_UNSUCCESSFUL'	=> '<strong>לא</strong> יכול %1$s.',
	
	'STEP_PERCENT_COMPLETED'			=> 'צעד <strong>%d</strong> מ <strong>%d</strong>',
	'INSTALLER_NOTE'					=> '<strong>הערה :</strong> לפני הוספת מוד הזה לפורום שלך, עלייך לגבות את בסיס הנתונים ואת כל הקבצים הקשורים למוד הזה!',
	'INSTALLER_DELETE_INFORMATION'		=> '<strong>לא</strong> יכול למצוא את ABBC3 מותקן !.',
	'INSTALLER_NEEDS_FOUNDER'			=> 'אתה חייב להיות מחובר כמייסד.',
	'MISSING_PARENT_MODULE'				=> 'מודול #%1$s חסר כמודול אב ל "%2$s".',
	'WARNING'							=> 'אזהרה',
));
?>