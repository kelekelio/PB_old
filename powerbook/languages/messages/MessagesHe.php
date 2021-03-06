<?php
/** Hebrew (עברית)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 */

$rtl = true;

$linkTrail = '/^([a-zא-ת]+)(.*)$/sDu';
$fallback8bitEncoding = 'windows-1255';

$namespaceNames = [
	NS_MEDIA            => 'מדיה',
	NS_SPECIAL          => 'מיוחד',
	NS_TALK             => 'שיחה',
	NS_USER             => 'משתמש',
	NS_USER_TALK        => 'שיחת_משתמש',
	NS_PROJECT_TALK     => 'שיחת_$1',
	NS_FILE             => 'קובץ',
	NS_FILE_TALK        => 'שיחת_קובץ',
	NS_MEDIAWIKI        => 'מדיה_ויקי',
	NS_MEDIAWIKI_TALK   => 'שיחת_מדיה_ויקי',
	NS_TEMPLATE         => 'תבנית',
	NS_TEMPLATE_TALK    => 'שיחת_תבנית',
	NS_HELP             => 'עזרה',
	NS_HELP_TALK        => 'שיחת_עזרה',
	NS_CATEGORY         => 'קטגוריה',
	NS_CATEGORY_TALK    => 'שיחת_קטגוריה',
];
$namespaceAliases = [
	'תמונה'      => NS_FILE,
	'שיחת_תמונה' => NS_FILE_TALK,
];
$namespaceGenderAliases = [
	NS_USER      => [ 'male' => 'משתמש', 'female' => 'משתמשת' ],
	NS_USER_TALK => [ 'male' => 'שיחת_משתמש', 'female' => 'שיחת_משתמשת' ],
];

$specialPageAliases = [
	'Activeusers'               => [ 'משתמשים_פעילים' ],
	'Allmessages'               => [ 'הודעות_המערכת' ],
	'AllMyUploads'              => [ 'כל_ההעלאות_שלי' ],
	'Allpages'                  => [ 'כל_הדפים' ],
	'ApiHelp'                   => [ 'עזרת_API' ],
	'Ancientpages'              => [ 'דפים_מוזנחים' ],
	'Badtitle'                  => [ 'כותרת_שגויה' ],
	'Blankpage'                 => [ 'דף_ריק' ],
	'Block'                     => [ 'חסימה', 'חסימת_כתובת', 'חסימת_משתמש' ],
	'Booksources'               => [ 'משאבי_ספרות', 'משאבי_ספרות_חיצוניים' ],
	'BrokenRedirects'           => [ 'הפניות_לא_תקינות', 'הפניות_שבורות' ],
	'Categories'                => [ 'קטגוריות', 'רשימת_קטגוריות' ],
	'ChangeEmail'               => [ 'שינוי_דואר_אלקטרוני', 'שינוי_דוא"ל' ],
	'ChangePassword'            => [ 'שינוי_סיסמה' ],
	'ComparePages'              => [ 'השוואת_דפים' ],
	'Confirmemail'              => [ 'אימות_כתובת_דואר' ],
	'Contributions'             => [ 'תרומות', 'תרומות_המשתמש' ],
	'CreateAccount'             => [ 'הרשמה_לחשבון' ],
	'Deadendpages'              => [ 'דפים_ללא_קישורים' ],
	'DeletedContributions'      => [ 'תרומות_מחוקות' ],
	'Diff'                      => [ 'הבדלים', 'הבדל' ],
	'DoubleRedirects'           => [ 'הפניות_כפולות' ],
	'EditWatchlist'             => [ 'עריכת_רשימת_המעקב' ],
	'Emailuser'                 => [ 'שליחת_דואר_למשתמש' ],
	'ExpandTemplates'           => [ 'פריסת_תבניות' ],
	'Export'                    => [ 'ייצוא', 'ייצוא_דפים' ],
	'Fewestrevisions'           => [ 'הגרסאות_המעטות_ביותר', 'הדפים_בעלי_מספר_העריכות_הנמוך_ביותר' ],
	'FileDuplicateSearch'       => [ 'חיפוש_קבצים_כפולים' ],
	'Filepath'                  => [ 'נתיב_לקובץ' ],
	'Import'                    => [ 'ייבוא', 'ייבוא_דפים' ],
	'Invalidateemail'           => [ 'ביטול_דואר' ],
	'JavaScriptTest'            => [ 'בדיקת_JavaScript' ],
	'BlockList'                 => [ 'רשימת_חסומים', 'רשימת_משתמשים_חסומים', 'משתמשים_חסומים' ],
	'LinkSearch'                => [ 'חיפוש_קישורים_חיצוניים' ],
	'Listadmins'                => [ 'רשימת_מפעילים' ],
	'Listbots'                  => [ 'רשימת_בוטים' ],
	'Listfiles'                 => [ 'רשימת_קבצים', 'רשימת_תמונות', 'קבצים', 'תמונות' ],
	'Listgrouprights'           => [ 'רשימת_הרשאות_לקבוצה' ],
	'Listredirects'             => [ 'רשימת_הפניות', 'הפניות' ],
	'ListDuplicatedFiles'       => [ 'רשימת_קבצים_כפולים' ],
	'Listusers'                 => [ 'רשימת_משתמשים', 'משתמשים' ],
	'Lockdb'                    => [ 'נעילת_בסיס_הנתונים' ],
	'Log'                       => [ 'יומנים' ],
	'Lonelypages'               => [ 'דפים_יתומים' ],
	'Longpages'                 => [ 'דפים_ארוכים' ],
	'MediaStatistics'           => [ 'סטטיסטיקות_מדיה' ],
	'MergeHistory'              => [ 'מיזוג_גרסאות' ],
	'MIMEsearch'                => [ 'חיפוש_MIME' ],
	'Mostcategories'            => [ 'הקטגוריות_הרבות_ביותר', 'הדפים_מרובי-הקטגוריות_ביותר' ],
	'Mostimages'                => [ 'הקבצים_המקושרים_ביותר', 'התמונות_המקושרות_ביותר' ],
	'Mostinterwikis'            => [ 'קישורי_השפה_הרבים_ביותר' ],
	'Mostlinked'                => [ 'הדפים_המקושרים_ביותר', 'המקושרים_ביותר' ],
	'Mostlinkedcategories'      => [ 'הקטגוריות_המקושרות_ביותר' ],
	'Mostlinkedtemplates'       => [ 'התבניות_המקושרות_ביותר' ],
	'Mostrevisions'             => [ 'הגרסאות_הרבות_ביותר', 'הדפים_בעלי_מספר_העריכות_הגבוה_ביותר' ],
	'Movepage'                  => [ 'העברת_דף', 'העברה' ],
	'Mycontributions'           => [ 'התרומות_שלי' ],
	'MyLanguage'                => [ 'השפה_שלי' ],
	'Mypage'                    => [ 'הדף_שלי', 'דף_המשתמש_שלי' ],
	'Mytalk'                    => [ 'השיחה_שלי', 'דף_השיחה_שלי' ],
	'Myuploads'                 => [ 'ההעלאות_שלי' ],
	'Newimages'                 => [ 'קבצים_חדשים', 'תמונות_חדשות', 'גלריית_קבצים_חדשים', 'גלריית_תמונות_חדשות' ],
	'Newpages'                  => [ 'דפים_חדשים' ],
	'PagesWithProp'             => [ 'דפים_עם_מאפיינים', 'דפים_לפי_מאפיינים' ],
	'PageLanguage'              => [ 'שפת_הדף' ],
	'PasswordReset'             => [ 'איפוס_סיסמה' ],
	'PermanentLink'             => [ 'קישור_קבוע' ],
	'Preferences'               => [ 'העדפות', 'ההעדפות_שלי' ],
	'Prefixindex'               => [ 'דפים_המתחילים_ב' ],
	'Protectedpages'            => [ 'דפים_מוגנים' ],
	'Protectedtitles'           => [ 'כותרות_מוגנות' ],
	'Randompage'                => [ 'אקראי', 'דף_אקראי' ],
	'RandomInCategory'          => [ 'דף_אקראי_בקטגוריה' ],
	'Randomredirect'            => [ 'הפניה_אקראית' ],
	'Recentchanges'             => [ 'שינויים_אחרונים' ],
	'Recentchangeslinked'       => [ 'שינויים_בדפים_המקושרים' ],
	'Redirect'                  => [ 'הפניה' ],
	'ResetTokens'               => [ 'איפוס_אסימונים' ],
	'Revisiondelete'            => [ 'מחיקת_ושחזור_גרסאות' ],
	'RunJobs'                   => [ 'הרצת_משימות' ],
	'Search'                    => [ 'חיפוש' ],
	'Shortpages'                => [ 'דפים_קצרים' ],
	'Specialpages'              => [ 'דפים_מיוחדים' ],
	'Statistics'                => [ 'סטטיסטיקות' ],
	'Tags'                      => [ 'תגיות', 'תגים' ],
	'TrackingCategories'        => [ 'קטגוריות_מעקב' ],
	'Unblock'                   => [ 'שחרור_חסימה' ],
	'Uncategorizedcategories'   => [ 'קטגוריות_חסרות_קטגוריה' ],
	'Uncategorizedimages'       => [ 'קבצים_חסרי_קטגוריה', 'תמונות_חסרות_קטגוריה' ],
	'Uncategorizedpages'        => [ 'דפים_חסרי_קטגוריה' ],
	'Uncategorizedtemplates'    => [ 'תבניות_חסרות_קטגוריות' ],
	'Undelete'                  => [ 'צפייה_בדפים_מחוקים' ],
	'Unlockdb'                  => [ 'שחרור_בסיס_הנתונים' ],
	'Unusedcategories'          => [ 'קטגוריות_שאינן_בשימוש' ],
	'Unusedimages'              => [ 'קבצים_שאינם_בשימוש', 'תמונות_שאינן_בשימוש' ],
	'Unusedtemplates'           => [ 'תבניות_שאינן_בשימוש' ],
	'Unwatchedpages'            => [ 'דפים_שאינם_במעקב' ],
	'Upload'                    => [ 'העלאה', 'העלאת_קובץ_לשרת' ],
	'UploadStash'               => [ 'מאגר_העלאות' ],
	'Userlogin'                 => [ 'כניסה_לחשבון', 'כניסה' ],
	'Userlogout'                => [ 'יציאה_מהחשבון', 'יציאה' ],
	'Userrights'                => [ 'ניהול_הרשאות_משתמש', 'הפיכת_משתמש_למפעיל_מערכת', 'הענקת_או_ביטול_הרשאת_בוט' ],
	'Version'                   => [ 'גרסה', 'גרסת_התוכנה' ],
	'Wantedcategories'          => [ 'קטגוריות_מבוקשות' ],
	'Wantedfiles'               => [ 'קבצים_מבוקשים' ],
	'Wantedpages'               => [ 'דפים_מבוקשים' ],
	'Wantedtemplates'           => [ 'תבניות_מבוקשות' ],
	'Watchlist'                 => [ 'רשימת_המעקב', 'רשימת_מעקב', 'רשימת_המעקב_שלי' ],
	'Whatlinkshere'             => [ 'דפים_המקושרים_לכאן' ],
	'Withoutinterwiki'          => [ 'דפים_ללא_קישורי_שפה' ],
];

$magicWords = [
	'redirect'                  => [ '0', '#הפניה', '#REDIRECT' ],
	'notoc'                     => [ '0', '__ללא_תוכן_עניינים__', '__ללא_תוכן__', '__NOTOC__' ],
	'nogallery'                 => [ '0', '__ללא_גלריה__', '__NOGALLERY__' ],
	'forcetoc'                  => [ '0', '__חייב_תוכן_עניינים__', '__חייב_תוכן__', '__FORCETOC__' ],
	'toc'                       => [ '0', '__תוכן_עניינים__', '__תוכן__', '__TOC__' ],
	'noeditsection'             => [ '0', '__ללא_עריכה__', '__NOEDITSECTION__' ],
	'currentmonth'              => [ '1', 'חודש נוכחי', 'חודש נוכחי 2', 'CURRENTMONTH', 'CURRENTMONTH2' ],
	'currentmonth1'             => [ '1', 'חודש נוכחי 1', 'CURRENTMONTH1' ],
	'currentmonthname'          => [ '1', 'שם חודש נוכחי', 'CURRENTMONTHNAME' ],
	'currentmonthnamegen'       => [ '1', 'שם חודש נוכחי קניין', 'CURRENTMONTHNAMEGEN' ],
	'currentmonthabbrev'        => [ '1', 'קיצור חודש נוכחי', 'CURRENTMONTHABBREV' ],
	'currentday'                => [ '1', 'יום נוכחי', 'CURRENTDAY' ],
	'currentday2'               => [ '1', 'יום נוכחי 2', 'CURRENTDAY2' ],
	'currentdayname'            => [ '1', 'שם יום נוכחי', 'CURRENTDAYNAME' ],
	'currentyear'               => [ '1', 'שנה נוכחית', 'CURRENTYEAR' ],
	'currenttime'               => [ '1', 'שעה נוכחית', 'CURRENTTIME' ],
	'currenthour'               => [ '1', 'שעות נוכחיות', 'CURRENTHOUR' ],
	'localmonth'                => [ '1', 'חודש מקומי', 'חודש מקומי 2', 'LOCALMONTH', 'LOCALMONTH2' ],
	'localmonth1'               => [ '1', 'חודש מקומי 1', 'LOCALMONTH1' ],
	'localmonthname'            => [ '1', 'שם חודש מקומי', 'LOCALMONTHNAME' ],
	'localmonthnamegen'         => [ '1', 'שם חודש מקומי קניין', 'LOCALMONTHNAMEGEN' ],
	'localmonthabbrev'          => [ '1', 'קיצור חודש מקומי', 'LOCALMONTHABBREV' ],
	'localday'                  => [ '1', 'יום מקומי', 'LOCALDAY' ],
	'localday2'                 => [ '1', 'יום מקומי 2', 'LOCALDAY2' ],
	'localdayname'              => [ '1', 'שם יום מקומי', 'LOCALDAYNAME' ],
	'localyear'                 => [ '1', 'שנה מקומית', 'LOCALYEAR' ],
	'localtime'                 => [ '1', 'שעה מקומית', 'LOCALTIME' ],
	'localhour'                 => [ '1', 'שעות מקומיות', 'LOCALHOUR' ],
	'numberofpages'             => [ '1', 'מספר דפים כולל', 'מספר דפים', 'NUMBEROFPAGES' ],
	'numberofarticles'          => [ '1', 'מספר ערכים', 'NUMBEROFARTICLES' ],
	'numberoffiles'             => [ '1', 'מספר קבצים', 'NUMBEROFFILES' ],
	'numberofusers'             => [ '1', 'מספר משתמשים', 'NUMBEROFUSERS' ],
	'numberofactiveusers'       => [ '1', 'מספר משתמשים פעילים', 'NUMBEROFACTIVEUSERS' ],
	'numberofedits'             => [ '1', 'מספר עריכות', 'NUMBEROFEDITS' ],
	'pagename'                  => [ '1', 'שם הדף', 'PAGENAME' ],
	'pagenamee'                 => [ '1', 'שם הדף מקודד', 'PAGENAMEE' ],
	'namespace'                 => [ '1', 'מרחב השם', 'NAMESPACE' ],
	'namespacee'                => [ '1', 'מרחב השם מקודד', 'NAMESPACEE' ],
	'namespacenumber'           => [ '1', 'מספר_מרחב_השם', 'NAMESPACENUMBER' ],
	'talkspace'                 => [ '1', 'מרחב השיחה', 'TALKSPACE' ],
	'talkspacee'                => [ '1', 'מרחב השיחה מקודד', 'TALKSPACEE' ],
	'subjectspace'              => [ '1', 'מרחב הנושא', 'מרחב הערכים', 'SUBJECTSPACE', 'ARTICLESPACE' ],
	'subjectspacee'             => [ '1', 'מרחב הנושא מקודד', 'מרחב הערכים מקודד', 'SUBJECTSPACEE', 'ARTICLESPACEE' ],
	'fullpagename'              => [ '1', 'שם הדף המלא', 'FULLPAGENAME' ],
	'fullpagenamee'             => [ '1', 'שם הדף המלא מקודד', 'FULLPAGENAMEE' ],
	'subpagename'               => [ '1', 'שם דף המשנה', 'SUBPAGENAME' ],
	'subpagenamee'              => [ '1', 'שם דף המשנה מקודד', 'SUBPAGENAMEE' ],
	'basepagename'              => [ '1', 'שם דף הבסיס', 'BASEPAGENAME' ],
	'basepagenamee'             => [ '1', 'שם דף הבסיס מקודד', 'BASEPAGENAMEE' ],
	'talkpagename'              => [ '1', 'שם דף השיחה', 'TALKPAGENAME' ],
	'talkpagenamee'             => [ '1', 'שם דף השיחה מקודד', 'TALKPAGENAMEE' ],
	'subjectpagename'           => [ '1', 'שם דף הנושא', 'שם הערך', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ],
	'subjectpagenamee'          => [ '1', 'שם דף הנושא מקודד', 'שם הערך מקודד', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ],
	'msg'                       => [ '0', 'הכללה:', 'MSG:' ],
	'subst'                     => [ '0', 'ס:', 'SUBST:' ],
	'safesubst'                 => [ '0', 'ס בטוח:', 'SAFESUBST:' ],
	'msgnw'                     => [ '0', 'הכללת מקור', 'MSGNW:' ],
	'img_thumbnail'             => [ '1', 'ממוזער', 'thumb', 'thumbnail' ],
	'img_manualthumb'           => [ '1', 'ממוזער=$1', 'thumbnail=$1', 'thumb=$1' ],
	'img_right'                 => [ '1', 'ימין', 'right' ],
	'img_left'                  => [ '1', 'שמאל', 'left' ],
	'img_none'                  => [ '1', 'ללא', 'none' ],
	'img_width'                 => [ '1', '$1 פיקסלים', '$1px' ],
	'img_center'                => [ '1', 'מרכז', 'center', 'centre' ],
	'img_framed'                => [ '1', 'מסגרת', 'ממוסגר', 'frame', 'framed', 'enframed' ],
	'img_frameless'             => [ '1', 'לא ממוסגר', 'ללא מסגרת', 'frameless' ],
	'img_page'                  => [ '1', 'דף=$1', 'דף $1', 'page=$1', 'page $1' ],
	'img_upright'               => [ '1', 'ימין למעלה', 'ימין למעלה=$1', 'ימין למעלה $1', 'upright', 'upright=$1', 'upright $1' ],
	'img_border'                => [ '1', 'גבול', 'גבולות', 'border' ],
	'img_baseline'              => [ '1', 'שורת הבסיס', 'baseline' ],
	'img_sub'                   => [ '1', 'תחתי', 'sub' ],
	'img_super'                 => [ '1', 'עילי', 'super', 'sup' ],
	'img_top'                   => [ '1', 'למעלה', 'top' ],
	'img_text_top'              => [ '1', 'בראש הטקסט', 'text-top' ],
	'img_middle'                => [ '1', 'באמצע', 'middle' ],
	'img_bottom'                => [ '1', 'למטה', 'bottom' ],
	'img_text_bottom'           => [ '1', 'בתחתית הטקסט', 'text-bottom' ],
	'img_link'                  => [ '1', 'קישור=$1', 'link=$1' ],
	'img_alt'                   => [ '1', 'טקסט=$1', 'alt=$1' ],
	'int'                       => [ '0', 'הודעה:', 'INT:' ],
	'sitename'                  => [ '1', 'שם האתר', 'SITENAME' ],
	'ns'                        => [ '0', 'מרחב שם:', 'NS:' ],
	'nse'                       => [ '0', 'מרחב שם מקודד:', 'NSE:' ],
	'localurl'                  => [ '0', 'כתובת יחסית:', 'LOCALURL:' ],
	'localurle'                 => [ '0', 'כתובת יחסית מקודד:', 'LOCALURLE:' ],
	'articlepath'               => [ '0', 'נתיב הדפים', 'ARTICLEPATH' ],
	'server'                    => [ '0', 'כתובת השרת', 'שרת', 'SERVER' ],
	'servername'                => [ '0', 'שם השרת', 'SERVERNAME' ],
	'scriptpath'                => [ '0', 'נתיב הקבצים', 'SCRIPTPATH' ],
	'stylepath'                 => [ '0', 'נתיב הסגנון', 'STYLEPATH' ],
	'grammar'                   => [ '0', 'דקדוק:', 'GRAMMAR:' ],
	'gender'                    => [ '0', 'מגדר:', 'GENDER:' ],
	'notitleconvert'            => [ '0', '__ללא_המרת_כותרת__', '__NOTITLECONVERT__', '__NOTC__' ],
	'nocontentconvert'          => [ '0', '__ללא_המרת_תוכן__', '__NOCONTENTCONVERT__', '__NOCC__' ],
	'currentweek'               => [ '1', 'שבוע נוכחי', 'CURRENTWEEK' ],
	'currentdow'                => [ '1', 'מספר יום נוכחי', 'CURRENTDOW' ],
	'localweek'                 => [ '1', 'שבוע מקומי', 'LOCALWEEK' ],
	'localdow'                  => [ '1', 'מספר יום מקומי', 'LOCALDOW' ],
	'revisionid'                => [ '1', 'מזהה גרסה', 'REVISIONID' ],
	'revisionday'               => [ '1', 'יום גרסה', 'REVISIONDAY' ],
	'revisionday2'              => [ '1', 'יום גרסה 2', 'REVISIONDAY2' ],
	'revisionmonth'             => [ '1', 'חודש גרסה', 'REVISIONMONTH' ],
	'revisionmonth1'            => [ '1', 'חודש גרסה 1', 'REVISIONMONTH1' ],
	'revisionyear'              => [ '1', 'שנת גרסה', 'REVISIONYEAR' ],
	'revisiontimestamp'         => [ '1', 'זמן גרסה', 'REVISIONTIMESTAMP' ],
	'revisionuser'              => [ '1', 'כותב גרסה', 'REVISIONUSER' ],
	'plural'                    => [ '0', 'רבים:', 'PLURAL:' ],
	'fullurl'                   => [ '0', 'כתובת מלאה:', 'FULLURL:' ],
	'fullurle'                  => [ '0', 'כתובת מלאה מקודד:', 'FULLURLE:' ],
	'canonicalurl'              => [ '0', 'כתובת קנונית:', 'CANONICALURL:' ],
	'canonicalurle'             => [ '0', 'כתובת קנונית מקודד:', 'CANONICALURLE:' ],
	'lcfirst'                   => [ '0', 'אות ראשונה קטנה:', 'LCFIRST:' ],
	'ucfirst'                   => [ '0', 'אות ראשונה גדולה:', 'UCFIRST:' ],
	'lc'                        => [ '0', 'אותיות קטנות:', 'LC:' ],
	'uc'                        => [ '0', 'אותיות גדולות:', 'UC:' ],
	'raw'                       => [ '0', 'ללא עיבוד:', 'RAW:' ],
	'displaytitle'              => [ '1', 'כותרת תצוגה', 'DISPLAYTITLE' ],
	'rawsuffix'                 => [ '1', 'ללא פסיק', 'R' ],
	'newsectionlink'            => [ '1', '__יצירת_הערה__', '__NEWSECTIONLINK__' ],
	'nonewsectionlink'          => [ '1', '__ללא_יצירת_הערה__', '__NONEWSECTIONLINK__' ],
	'currentversion'            => [ '1', 'גרסה נוכחית', 'CURRENTVERSION' ],
	'urlencode'                 => [ '0', 'נתיב מקודד:', 'URLENCODE:' ],
	'anchorencode'              => [ '0', 'עוגן מקודד:', 'ANCHORENCODE' ],
	'currenttimestamp'          => [ '1', 'זמן נוכחי', 'CURRENTTIMESTAMP' ],
	'localtimestamp'            => [ '1', 'זמן מקומי', 'LOCALTIMESTAMP' ],
	'directionmark'             => [ '1', 'סימן כיווניות', 'DIRECTIONMARK', 'DIRMARK' ],
	'language'                  => [ '0', '#שפה:', '#LANGUAGE:' ],
	'contentlanguage'           => [ '1', 'שפת תוכן', 'CONTENTLANGUAGE', 'CONTENTLANG' ],
	'pagesinnamespace'          => [ '1', 'דפים במרחב השם:', 'PAGESINNAMESPACE:', 'PAGESINNS:' ],
	'numberofadmins'            => [ '1', 'מספר מפעילים', 'NUMBEROFADMINS' ],
	'formatnum'                 => [ '0', 'עיצוב מספר', 'FORMATNUM' ],
	'padleft'                   => [ '0', 'ריפוד משמאל', 'PADLEFT' ],
	'padright'                  => [ '0', 'ריפוד מימין', 'PADRIGHT' ],
	'special'                   => [ '0', 'מיוחד', 'special' ],
	'defaultsort'               => [ '1', 'מיון רגיל:', 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ],
	'filepath'                  => [ '0', 'נתיב לקובץ:', 'FILEPATH:' ],
	'tag'                       => [ '0', 'תגית', 'tag' ],
	'hiddencat'                 => [ '1', '__קטגוריה_מוסתרת__', '__HIDDENCAT__' ],
	'pagesincategory'           => [ '1', 'דפים בקטגוריה', 'PAGESINCATEGORY', 'PAGESINCAT' ],
	'pagesize'                  => [ '1', 'גודל דף', 'PAGESIZE' ],
	'index'                     => [ '1', '__לחיפוש__', '__INDEX__' ],
	'noindex'                   => [ '1', '__לא_לחיפוש__', '__NOINDEX__' ],
	'numberingroup'             => [ '1', 'מספר בקבוצה', 'NUMBERINGROUP', 'NUMINGROUP' ],
	'staticredirect'            => [ '1', '__הפניה_קבועה__', '__STATICREDIRECT__' ],
	'protectionlevel'           => [ '1', 'רמת הגנה', 'PROTECTIONLEVEL' ],
	'formatdate'                => [ '0', 'עיצוב תאריך', 'formatdate', 'dateformat' ],
	'url_path'                  => [ '0', 'נתיב', 'PATH' ],
	'url_wiki'                  => [ '0', 'ויקי', 'WIKI' ],
	'url_query'                 => [ '0', 'שאילתה', 'QUERY' ],
	'defaultsort_noerror'       => [ '0', 'ללא שגיאה', 'noerror' ],
	'defaultsort_noreplace'     => [ '0', 'ללא החלפה', 'noreplace' ],
	'pagesincategory_pages'     => [ '0', 'דפים', 'pages' ],
];

$datePreferences = [
	'default',
	'mdy',
	'dmy',
	'ymd',
	'hebrew',
	'ISO 8601',
];

$dateFormats = [
	'mdy time' => 'H:i',
	'mdy date' => 'xg j, Y',
	'mdy both' => 'H:i, xg j, Y',

	'dmy time' => 'H:i',
	'dmy date' => 'j xg Y',
	'dmy both' => 'H:i, j xg Y',

	'ymd time' => 'H:i',
	'ymd date' => 'Y xg j',
	'ymd both' => 'H:i, Y xg j',

	'hebrew time' => 'H:i',
	'hebrew date' => 'xhxjj xjx xhxjY',
	'hebrew both' => 'H:i, xhxjj xjx xhxjY',

	'ISO 8601 time' => 'xnH:xni:xns',
	'ISO 8601 date' => 'xnY-xnm-xnd',
	'ISO 8601 both' => 'xnY-xnm-xnd"T"xnH:xni:xns',
];

$bookstoreList = [
	'מיתוס'          => 'http://www.mitos.co.il/',
	'iBooks'         => 'http://www.ibooks.co.il/',
	'Barnes & Noble' => 'http://search.barnesandnoble.com/bookSearch/isbnInquiry.asp?isbn=$1',
	'Amazon.com'     => 'https://www.amazon.com/exec/obidos/ISBN=$1'
];
