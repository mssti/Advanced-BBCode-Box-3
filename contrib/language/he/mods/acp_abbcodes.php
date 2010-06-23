<?php
/** 
*
* abbcode [hebrew]
* @package language
* @version $Id: acp_abbcode.php, v 1.0.8 2008/03/31 03:01:00 leviatan21 Exp $
* @English version $Id: $ phpBB 3.0.0 - 1.0.8
* @copyright leviatan21 < info@mssti.com > (Gabriel) http://www.mssti.com/phpbb3/
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
* @translator: leviatan21 - http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=345763
*
**/

/**
* DO NOT CHANGE
*/
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
						
$lang = array_merge($lang, array(
	'ACP_ABBCODES'						=> 'חבילת תגיות מתקדמת 3',
	'ACP_ABBCODES_EXPLAIN'				=> 'כאן אתה יכול לשנות את העיצוב הקיים של <strong>[ <a href="http://www.mssti.com/phpbb3" target="_blank">ABBC3</a> ]</strong> בפורום שלך.<br/>אתה יכול לשנות סגנונות קיימים, לרענן, לבטל פעילות, להפעיל מחדש. אתה גם יכול לראות את השפעת השינויים שתחיל בתצוגה המוקדמת. <br/><em>סגנון ברירת המחדל הנוכחי מסומן בכוכביות (*).</em>',
	
	'ABBCODES_DISABLE'					=> 'ABBC3',
	'ABBCODES_DISABLE_EXPLAIN'			=> 'הפעל או כבה את <strong>חבילת התגיות המתקדמות</strong> עבור המשתמשים, ו/או קבע לחצנים רגילים בחלון כתיבת ההודעה.',
	'ABBCODES_BG'						=> 'תמונת רקע',
	'ABBCODES_BG_EXPLAIN'				=> 'יקבע את הרקע של הלחצנים.<br/>קבע ל <em>לא תמונה</em> על מנת להתאים לסגנון שלך.',
	'ABBCODES_TAB'						=> 'הצג אייקון חוצץ בין הקבוצות',
	'ABBCODES_BOXRESIZE'				=> 'הקטן טקסטורת הודעה',
	'ABBCODES_BOXRESIZE_EXPLAIN'		=> 'הצג לחצן על מנת להקטין טקסטורת הודעה.',
	
	'ABBCODES_GREYBOX'					=> 'קבע GreyBox &reg;',
	'ABBCODES_GREYBOX_EXPLAIN'			=> 'GreyBox &reg; היא פונקציה של הצגת <em>תמונה מוקטנת</em> ו <em>תמונה ממוזערת</em> לתמונה בגודל מלא. אם מוגדר ללא, בפתיחת תמונה יפתח חלון דפדפן חדש להצגת התמונה.',
	'ABBCODES_RESIZE'					=> 'חתוך תמונות גדולות',
	'ABBCODES_RESIZE_EXPLAIN'			=> 'תגית זה תיקון באג של [img] כאשר לקוח מוסיף להודעה תמונה ענקית שחורגת מגודל הדף הרגיל.',
	'ABBCODES_MAX_IMAGE_SIZE'			=> 'רוחב תמונה מירבי בפיקסלים',
	'ABBCODES_RESIZE_METHOD'			=> 'שיטת ההקטנה',
	'ABBCODES_RESIZE_METHOD_EXPLAIN'	=> 'בחר את השיטה להצגת תמונות מוקטנות ותמונות בגודל מלא.',
	//	for translate :							   don't 		Yes			don't		Yes			don't			yes				don't		yes
	'ABBCODES_RESIZE_METHODS'			=> array( 'greybox' => 'בחלון מרחף', 'enlarge' => 'מורחב', 'samewindow' => 'באותו חלון', 'newwindow' => 'בחלון חדש'),
	
	'ABBCODES_MAX_IMAGE_SIZE_EXPLAIN'	=> 'התמונה תוקטן כאשר הגודל המלא שלה יהיה גדול ממספר הפיקסלים שיקבע.',
	'ABBCODES_MAX_THUMB_WIDTH'			=> 'מקסימום רוחב תמונה מוקטנת בפיקסלים',
	'ABBCODES_MAX_THUMB_WIDTH_EXPLAIN'	=> 'תמונה מוקטנת לא תהיה רחבה יותר ממספר הפיקסלים שיקבע.',
	
	'ABBCODES_CUSTOM_BBCODES'			=> 'תגיות מותאמות אישית',
	'ABBCODES_CUSTOM_BBCODES_EXPLAIN'	=> 'מציג את אייקון תגיות מותאמות אישית. פונקציה זו מאפשרת להתאים אישית תגיות לאתרי שיתוף וידיאו נוספים (אם יש לך כאלה).',
	'ABBCODES_VIDEO_SIZE'				=> 'גודל תצוגת וידיאו',
	'ABBCODES_VIDEO_SIZE_EXPLAIN'		=> 'גודל ברירת המחדל לרוחב וגובה תצוגת הוידיאו בהודעה.',

));

$lang = array_merge($lang, array(
	'ABBCODES_SETINGS'					=> 'ABBC3 אפשרויות',
	'ABBCODES_SETINGS_EXPLAIN'			=> 'כאן אתה יכול לקבוע את ההגדרות הראשיות ל<strong>ABBC3</strong>, להפעיל או לבטל, ובין השאר להכדיר את סכנון רקע ברירת המחדל.',
	
	'ABBCODES_CONFIG'					=> 'ABBC3 הגדרות',
	'ABBCODES_CONFIG_EXPLAIN'			=> 'בעמוד זה אתה יכול להגדיר את התגים שיופיעו במסך כתיבת ההודעה ולקבוע את האייקון של כל תג,',
	
	'ABBCODES_NAME'						=> 'שם תג',
	'ABBCODES_TAG'						=> 'אייקון התג',
	'ABBCODES_ORDER'					=> 'תג מוצג',
	'RESET_TO_DEFAULT'					=> 'אפס לברירת מחדל',
	'ABBCODES_BREAK_MOVER'				=> '<strong>קו חוצץ</strong>',
	'ABBCODES_DIVISION_MOVER'			=> '<strong>קבוצה</strong>',
	
	'ABBCODES_MOD_DISABLE'				=> '<strong>ABBC3</strong> לא פעיל בסגנון זה.<br/>',
	'ABBCODES_STATUS'					=> 'מצב',
	'ABBCODES_ACTIVATED'				=> 'פעיל',
	'ABBCODES_DEACTIVATED'				=> 'לא פעיל',
	
));
?>