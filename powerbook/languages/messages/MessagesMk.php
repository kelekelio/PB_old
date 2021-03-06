<?php
/** Macedonian (македонски)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Bjankuloski06
 * @author Brainmachine
 * @author Brest
 * @author Brest2008
 * @author FlavrSavr
 * @author Glupav
 * @author INkubusse
 * @author Kaganer
 * @author Misos
 * @author Rancher
 * @author Spacebirdy
 * @author Urhixidur
 * @author לערי ריינהארט
 */

$namespaceNames = [
	NS_MEDIA            => 'Медиум',
	NS_SPECIAL          => 'Специјална',
	NS_TALK             => 'Разговор',
	NS_USER             => 'Корисник',
	NS_USER_TALK        => 'Разговор_со_корисник',
	NS_PROJECT_TALK     => 'Разговор_за_$1',
	NS_FILE             => 'Податотека',
	NS_FILE_TALK        => 'Разговор_за_податотека',
	NS_MEDIAWIKI        => 'МедијаВики',
	NS_MEDIAWIKI_TALK   => 'Разговор_за_МедијаВики',
	NS_TEMPLATE         => 'Шаблон',
	NS_TEMPLATE_TALK    => 'Разговор_за_шаблон',
	NS_HELP             => 'Помош',
	NS_HELP_TALK        => 'Разговор_за_помош',
	NS_CATEGORY         => 'Категорија',
	NS_CATEGORY_TALK    => 'Разговор_за_категорија',
];

$namespaceAliases = [
	'Медија'            => NS_MEDIA,
	'Специјални'        => NS_SPECIAL,
	'Слика'             => NS_FILE,
	'Разговор_за_слика' => NS_FILE_TALK,
];

$datePreferences = [
	'default',
	'dmy mk',
	'ymd mk',
	'ymdt mk',
	'mdy',
	'dmy',
	'ymd',
	'ISO 8601',
];

$defaultDateFormat = 'dmy or mdy';

$dateFormats = [
	'dmy mk time' => 'H:i',
	'dmy mk date' => 'j.m.Y',
	'dmy mk both' => 'H:i, j.m.Y',

	'ymd mk time' => 'H:i',
	'ymd mk date' => 'Y.m.j',
	'ymd mk both' => 'H:i, Y.m.j',

	'ymdt mk time' => 'H:i:s',
	'ymdt mk date' => 'Y.m.j',
	'ymdt mk both' => 'Y.m.j, H:i:s',

	'mdy time' => 'H:i',
	'mdy date' => 'F j, Y',
	'mdy both' => 'H:i, F j, Y',

	'dmy time' => 'H:i',
	'dmy date' => 'j F Y',
	'dmy both' => 'H:i, j F Y',

	'ymd time' => 'H:i',
	'ymd date' => 'Y F j',
	'ymd both' => 'H:i, Y F j',

	'ISO 8601 time' => 'xnH:xni:xns',
	'ISO 8601 date' => 'xnY-xnm-xnd',
	'ISO 8601 both' => 'xnY-xnm-xnd"T"xnH:xni:xns',
];

$specialPageAliases = [
	'Activeusers'               => [ 'АктивниКорисници' ],
	'Allmessages'               => [ 'СитеПораки' ],
	'AllMyUploads'              => [ 'СитеМоиПодигања' ],
	'Allpages'                  => [ 'СитеСтраници' ],
	'ApiHelp'                   => [ 'ИзвршникПомош' ],
	'Ancientpages'              => [ 'НајстариСтраници' ],
	'Badtitle'                  => [ 'Лошнаслов' ],
	'Blankpage'                 => [ 'ПразнаСтраница' ],
	'Block'                     => [ 'Блокирање', 'БлокIP', 'БлокирајКорисник' ],
	'Booksources'               => [ 'ПечатенИзвор' ],
	'BrokenRedirects'           => [ 'ПрекинатиПренасочувања' ],
	'Categories'                => [ 'Категории' ],
	'ChangeEmail'               => [ 'СмениЕ-пошта' ],
	'ChangePassword'            => [ 'СмениЛозинка' ],
	'ComparePages'              => [ 'СпоредиСтраници' ],
	'Confirmemail'              => [ 'Потврди_е-пошта' ],
	'Contributions'             => [ 'Придонеси' ],
	'CreateAccount'             => [ 'СоздајКорисничкаСметка' ],
	'Deadendpages'              => [ 'СлепиСтраници' ],
	'DeletedContributions'      => [ 'ИзбришаниПридонеси' ],
	'Diff'                      => [ 'Разлики' ],
	'DoubleRedirects'           => [ 'ДвојниПренасочувања' ],
	'EditWatchlist'             => [ 'УредиНабљудувања' ],
	'Emailuser'                 => [ 'Пиши_е-пошта_на_корисникот' ],
	'ExpandTemplates'           => [ 'ПрошириШаблони' ],
	'Export'                    => [ 'Извоз' ],
	'Fewestrevisions'           => [ 'НајмалкуПреработки' ],
	'FileDuplicateSearch'       => [ 'ПребарувањеДупликатПодатотека' ],
	'Filepath'                  => [ 'ПатДоПодатотека' ],
	'Import'                    => [ 'Увоз' ],
	'Invalidateemail'           => [ 'ПогрешнаЕпошта' ],
	'JavaScriptTest'            => [ 'ПробаНаJavaСкрипта' ],
	'BlockList'                 => [ 'СписокНаБлокираниIP' ],
	'LinkSearch'                => [ 'ПребарајВрска' ],
	'Listadmins'                => [ 'СписокНаАдминистратори' ],
	'Listbots'                  => [ 'СписокНаБотови' ],
	'Listfiles'                 => [ 'СписокНаПодатотеки', 'СписокНаСлики' ],
	'Listgrouprights'           => [ 'СписокНаГрупниПрава' ],
	'Listredirects'             => [ 'СписокНаПренасочувања' ],
	'ListDuplicatedFiles'       => [ 'ИспишиДуплираниПодатотеки' ],
	'Listusers'                 => [ 'СписокНаКорисници', 'СписокКорисници' ],
	'Lockdb'                    => [ 'ЗаклучиБаза' ],
	'Log'                       => [ 'Дневник', 'Дневници' ],
	'Lonelypages'               => [ 'ОсамениСтраници', 'СтранциСирачиња' ],
	'Longpages'                 => [ 'ДолгиСтраници' ],
	'MediaStatistics'           => [ 'МедиумскиСтатистики' ],
	'MergeHistory'              => [ 'СпојувањеИсторија' ],
	'MIMEsearch'                => [ 'MIMEПребарување' ],
	'Mostcategories'            => [ 'НајмногуКатегории' ],
	'Mostimages'                => [ 'НајмногуСлики', 'НајмногуПодатотеки', 'ПодатотекиСоНајмногуВрски' ],
	'Mostinterwikis'            => [ 'НајмногуМеѓувикија' ],
	'Mostlinked'                => [ 'СоНајмногуВрски', 'СтранициСоНајмногуВрски' ],
	'Mostlinkedcategories'      => [ 'НајупотребуваниКатегории' ],
	'Mostlinkedtemplates'       => [ 'НајупотребуваниШаблони' ],
	'Mostrevisions'             => [ 'НајмногуПреработки' ],
	'Movepage'                  => [ 'ПреместиСтраница' ],
	'Mycontributions'           => [ 'МоиПридонеси' ],
	'MyLanguage'                => [ 'МојЈазик' ],
	'Mypage'                    => [ 'МојаСтраница' ],
	'Mytalk'                    => [ 'МојРазговор', 'МоиРазговори' ],
	'Myuploads'                 => [ 'МоиПодигања' ],
	'Newimages'                 => [ 'НовиСлики', 'НовиПодатотеки' ],
	'Newpages'                  => [ 'НовиСтраници' ],
	'PagesWithProp'             => [ 'СтранициСоСвојство' ],
	'PageLanguage'              => [ 'ЈазикНаСтраницата' ],
	'PasswordReset'             => [ 'ПроменаНаЛозинка' ],
	'PermanentLink'             => [ 'ПостојанаВрска' ],
	'Preferences'               => [ 'Нагодувања' ],
	'Prefixindex'               => [ 'ИндексНаПретставки' ],
	'Protectedpages'            => [ 'ЗаштитениСтраници' ],
	'Protectedtitles'           => [ 'ЗаштитениНаслови' ],
	'Randompage'                => [ 'Случајна', 'СлучајнаСтраница' ],
	'RandomInCategory'          => [ 'СлучајнаВоКатегорија' ],
	'Randomredirect'            => [ 'СлучајноПренасочување' ],
	'Randomrootpage'            => [ 'СлучајнаОсновнаСтраница' ],
	'Recentchanges'             => [ 'СкорешниПромени' ],
	'Recentchangeslinked'       => [ 'ПоврзаниПромени' ],
	'Redirect'                  => [ 'Пренасочување' ],
	'ResetTokens'               => [ 'ВратиОдновоЗнаци' ],
	'Revisiondelete'            => [ 'БришењеПреработка' ],
	'RunJobs'                   => [ 'ПуштиЗадачи' ],
	'Search'                    => [ 'Барај' ],
	'Shortpages'                => [ 'КраткиСтраници' ],
	'Specialpages'              => [ 'СлужбениСтраници' ],
	'Statistics'                => [ 'Статистики' ],
	'Tags'                      => [ 'Oзнаки', 'Приврзоци' ],
	'TrackingCategories'        => [ 'КатегорииЗаСледење' ],
	'Unblock'                   => [ 'Одблокирај' ],
	'Uncategorizedcategories'   => [ 'НекатегоризираниКатегории' ],
	'Uncategorizedimages'       => [ 'НекатегоризираниСлики' ],
	'Uncategorizedpages'        => [ 'НекатегоризираниСтраници' ],
	'Uncategorizedtemplates'    => [ 'НекатегоризираниШаблони' ],
	'Undelete'                  => [ 'Врати' ],
	'Unlockdb'                  => [ 'ОтклучиБаза' ],
	'Unusedcategories'          => [ 'НеискористениКатегории' ],
	'Unusedimages'              => [ 'НеискористениСлики', 'НеискористениПодатотеки' ],
	'Unusedtemplates'           => [ 'НеискористениШаблони' ],
	'Unwatchedpages'            => [ 'НенабљудуваниСтраници' ],
	'Upload'                    => [ 'Подигање' ],
	'UploadStash'               => [ 'СкриениПодигања' ],
	'Userlogin'                 => [ 'Најавување' ],
	'Userlogout'                => [ 'Одјавување' ],
	'Userrights'                => [ 'КорисничкиПрава' ],
	'Version'                   => [ 'Верзија' ],
	'Wantedcategories'          => [ 'ПотребниКатегории' ],
	'Wantedfiles'               => [ 'ПотребниПодатотеки' ],
	'Wantedpages'               => [ 'ПотребниСтраници' ],
	'Wantedtemplates'           => [ 'ПотребниШаблони' ],
	'Watchlist'                 => [ 'СписокНаНабљудувања' ],
	'Whatlinkshere'             => [ 'ШтоВодиОвде' ],
	'Withoutinterwiki'          => [ 'БезМеѓувики' ],
];

$magicWords = [
	'redirect'                  => [ '0', '#пренасочување', '#види', '#Пренасочување', '#ПРЕНАСОЧУВАЊЕ', '#REDIRECT' ],
	'notoc'                     => [ '0', '__БЕЗСОДРЖИНА__', '__NOTOC__' ],
	'nogallery'                 => [ '0', '__БЕЗГАЛЕРИЈА__', '__NOGALLERY__' ],
	'forcetoc'                  => [ '0', '__СОСОДРЖИНА__', '__FORCETOC__' ],
	'toc'                       => [ '0', '__СОДРЖИНА__', '__TOC__' ],
	'noeditsection'             => [ '0', '__БЕЗ_УРЕДУВАЊЕ_НА_ПОДНАСЛОВИ__', '__NOEDITSECTION__' ],
	'currentmonth'              => [ '1', 'ТЕКОВЕНМЕСЕЦ', 'CURRENTMONTH', 'CURRENTMONTH2' ],
	'currentmonth1'             => [ '1', 'ТЕКОВЕНМЕСЕЦ1', 'CURRENTMONTH1' ],
	'currentmonthname'          => [ '1', 'ТЕКОВЕНМЕСЕЦИМЕ', 'CURRENTMONTHNAME' ],
	'currentmonthnamegen'       => [ '1', 'ТЕКОВЕНМЕСЕЦИМЕРОД', 'CURRENTMONTHNAMEGEN' ],
	'currentmonthabbrev'        => [ '1', 'ТЕКОВЕНМЕСЕЦСКР', 'CURRENTMONTHABBREV' ],
	'currentday'                => [ '1', 'ТЕКОВЕНДЕН', 'CURRENTDAY' ],
	'currentday2'               => [ '1', 'ТЕКОВЕНДЕН2', 'CURRENTDAY2' ],
	'currentdayname'            => [ '1', 'ТЕКОВЕНДЕНИМЕ', 'CURRENTDAYNAME' ],
	'currentyear'               => [ '1', 'ТЕКОВНАГОДИНА', 'CURRENTYEAR' ],
	'currenttime'               => [ '1', 'ТЕКОВНОВРЕМЕ', 'CURRENTTIME' ],
	'currenthour'               => [ '1', 'ТЕКОВЕНЧАС', 'CURRENTHOUR' ],
	'localmonth'                => [ '1', 'МЕСЕЦ_ЛОКАЛНО', 'LOCALMONTH', 'LOCALMONTH2' ],
	'localmonth1'               => [ '1', 'МЕСЕЦ_ЛОКАЛНО1', 'LOCALMONTH1' ],
	'localmonthname'            => [ '1', 'МЕСЕЦИМЕ_ЛОКАЛНО', 'LOCALMONTHNAME' ],
	'localmonthnamegen'         => [ '1', 'МЕСЕЦИМЕ_ЛОКАЛНО_ГЕНИТИВ', 'LOCALMONTHNAMEGEN' ],
	'localmonthabbrev'          => [ '1', 'МЕСЕЦИМЕ_ЛОКАЛНО_КРАТЕНКА', 'LOCALMONTHABBREV' ],
	'localday'                  => [ '1', 'ДЕН_ЛОКАЛНО', 'LOCALDAY' ],
	'localday2'                 => [ '1', 'ДЕН2_ЛОКАЛНО', 'LOCALDAY2' ],
	'localdayname'              => [ '1', 'ИМЕНАДЕН_ЛОКАЛНО', 'LOCALDAYNAME' ],
	'localyear'                 => [ '1', 'ГОДИНА_ЛОКАЛНО', 'LOCALYEAR' ],
	'localtime'                 => [ '1', 'ВРЕМЕ_ЛОКАЛНО', 'LOCALTIME' ],
	'localhour'                 => [ '1', 'ЧАС_ЛОКАЛНО', 'LOCALHOUR' ],
	'numberofpages'             => [ '1', 'БРОЈНАСТРАНИЦИ', 'NUMBEROFPAGES' ],
	'numberofarticles'          => [ '1', 'БРОЈСТАТИИ', 'БРОЈНАСТАТИИ', 'NUMBEROFARTICLES' ],
	'numberoffiles'             => [ '1', 'БРОЈНАПОДАТОТЕКИ', 'NUMBEROFFILES' ],
	'numberofusers'             => [ '1', 'БРОЈНАКОРИСНИЦИ', 'NUMBEROFUSERS' ],
	'numberofactiveusers'       => [ '1', 'БРОЈНААКТИВНИКОРИСНИЦИ', 'NUMBEROFACTIVEUSERS' ],
	'numberofedits'             => [ '1', 'БРОЈНАУРЕДУВАЊА', 'NUMBEROFEDITS' ],
	'pagename'                  => [ '1', 'СТРАНИЦА', 'PAGENAME' ],
	'pagenamee'                 => [ '1', 'СТРАНИЦАИ', 'PAGENAMEE' ],
	'namespace'                 => [ '1', 'ИМЕПРОСТОР', 'ИМЕНСКИПРОСТОР', 'NAMESPACE' ],
	'talkspace'                 => [ '1', 'РАЗГОВОРПРОСТОР', 'TALKSPACE' ],
	'fullpagename'              => [ '1', 'ЦЕЛОСНОИМЕНАСТРАНИЦА', 'FULLPAGENAME' ],
	'subpagename'               => [ '1', 'ПОТСТРАНИЦА', 'SUBPAGENAME' ],
	'basepagename'              => [ '1', 'ОСНОВНАСТРАНИЦА', 'BASEPAGENAME' ],
	'talkpagename'              => [ '1', 'СТРАНИЦАЗАРАЗГОВОР', 'TALKPAGENAME' ],
	'subjectpagename'           => [ '1', 'ИМЕНАСТАТИЈА', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ],
	'msg'                       => [ '0', 'ПОР:', 'MSG:' ],
	'subst'                     => [ '0', 'ЗАМЕНИ:', 'SUBST:' ],
	'safesubst'                 => [ '0', 'БЕЗБЗАМЕНИ', 'SAFESUBST:' ],
	'msgnw'                     => [ '0', 'ИЗВЕШТNW:', 'MSGNW:' ],
	'img_thumbnail'             => [ '1', 'мини', 'мини-слика', 'thumb', 'thumbnail' ],
	'img_manualthumb'           => [ '1', 'мини-слика=$1', 'мини=$1', 'thumbnail=$1', 'thumb=$1' ],
	'img_right'                 => [ '1', 'десно', 'д', 'right' ],
	'img_left'                  => [ '1', 'лево', 'л', 'left' ],
	'img_none'                  => [ '1', 'н', 'нема', 'none' ],
	'img_width'                 => [ '1', '$1пкс', '$1п', '$1px' ],
	'img_center'                => [ '1', 'центар', 'ц', 'center', 'centre' ],
	'img_framed'                => [ '1', 'рамка', 'ворамка', 'frame', 'framed', 'enframed' ],
	'img_frameless'             => [ '1', 'безрамка', 'frameless' ],
	'img_lang'                  => [ '1', 'јаз=$1', 'lang=$1' ],
	'img_page'                  => [ '1', 'страница=$1', 'страница_$1', 'page=$1', 'page $1' ],
	'img_upright'               => [ '1', 'исправено', 'исправено=$1', 'исправено_$1', 'upright', 'upright=$1', 'upright $1' ],
	'img_border'                => [ '1', 'граничник', 'граница', 'border' ],
	'img_baseline'              => [ '1', 'основналинија', 'baseline' ],
	'img_sub'                   => [ '1', 'долениндекс', 'дол', 'sub' ],
	'img_super'                 => [ '1', 'горениндекс', 'гор', 'super', 'sup' ],
	'img_top'                   => [ '1', 'врв', 'најгоре', 'top' ],
	'img_text_top'              => [ '1', 'текст-врв', 'текст-најгоре', 'text-top' ],
	'img_middle'                => [ '1', 'средина', 'middle' ],
	'img_bottom'                => [ '1', 'дно', 'најдолу', 'bottom' ],
	'img_text_bottom'           => [ '1', 'текст-дно', 'текст-најдолу', 'text-bottom' ],
	'img_link'                  => [ '1', 'врска=$1', 'link=$1' ],
	'img_alt'                   => [ '1', 'алт=$1', 'alt=$1' ],
	'img_class'                 => [ '1', 'класа=$1', 'class=$1' ],
	'sitename'                  => [ '1', 'ИМЕНАМРЕЖНОМЕСТО', 'SITENAME' ],
	'localurl'                  => [ '0', 'ЛОКАЛНААДРЕСА:', 'LOCALURL:' ],
	'localurle'                 => [ '0', 'ЛОКАЛНААДРЕСАИ:', 'LOCALURLE:' ],
	'articlepath'               => [ '0', 'ПАТЕКАНАСТАТИЈА', 'ARTICLEPATH' ],
	'pageid'                    => [ '0', 'НАЗНАКАНАСТРАНИЦА', 'PAGEID' ],
	'server'                    => [ '0', 'ОПСЛУЖУВАЧ', 'SERVER' ],
	'servername'                => [ '0', 'ИМЕНАОПСЛУЖУВАЧ', 'SERVERNAME' ],
	'scriptpath'                => [ '0', 'ПАТЕКАНАСКРИПТА', 'SCRIPTPATH' ],
	'stylepath'                 => [ '0', 'СТИЛСКАПАТЕКА', 'STYLEPATH' ],
	'grammar'                   => [ '0', 'ГРАМАТИКА:', 'GRAMMAR:' ],
	'gender'                    => [ '0', 'ПОЛ:', 'GENDER:' ],
	'notitleconvert'            => [ '0', '__БЕЗПРЕТВОРАЊЕНАСЛОВ__', '__NOTITLECONVERT__', '__NOTC__' ],
	'nocontentconvert'          => [ '0', '__БЕЗПРЕТВОРАЊЕСОДРЖИНА__', '__NOCONTENTCONVERT__', '__NOCC__' ],
	'currentweek'               => [ '1', 'ТЕКОВНАСЕДМИЦА', 'CURRENTWEEK' ],
	'currentdow'                => [ '1', 'ТЕКОВЕНДЕНВОСЕДМИЦАТА', 'CURRENTDOW' ],
	'localweek'                 => [ '1', 'СЕДМИЦА_ЛОКАЛНО', 'LOCALWEEK' ],
	'localdow'                  => [ '1', 'ЛОКАЛЕНДЕНВОСЕДМИЦАТА', 'LOCALDOW' ],
	'revisionid'                => [ '1', 'НАЗНАКАНАПРЕРАБОТКА', 'REVISIONID' ],
	'revisionday'               => [ '1', 'ДЕННАПРЕРАБОТКА', 'REVISIONDAY' ],
	'revisionday2'              => [ '1', 'ДЕННАПРЕРАБОТКА2', 'REVISIONDAY2' ],
	'revisionmonth'             => [ '1', 'МЕСЕЦНАПРЕРАБОТКА', 'REVISIONMONTH' ],
	'revisionmonth1'            => [ '1', 'МЕСЕЦНАПРЕРАБОТКА1', 'REVISIONMONTH1' ],
	'revisionyear'              => [ '1', 'ГОДИНАНАПРЕРАБОТКА', 'REVISIONYEAR' ],
	'revisiontimestamp'         => [ '1', 'ВРЕМЕНАПРЕРАБОТКА', 'REVISIONTIMESTAMP' ],
	'revisionuser'              => [ '1', 'КОРИСНИКНАНАПРЕРАБОТКА', 'REVISIONUSER' ],
	'revisionsize'              => [ '1', 'ГОЛЕМИНАНАПРЕРАБОТКА', 'REVISIONSIZE' ],
	'plural'                    => [ '0', 'МНОЖИНА:', 'PLURAL:' ],
	'fullurl'                   => [ '0', 'ПОЛНАURL:', 'FULLURL:' ],
	'fullurle'                  => [ '0', 'ПОЛНАURLE:', 'FULLURLE:' ],
	'canonicalurl'              => [ '0', 'КАНОНСКАURL:', 'CANONICALURL:' ],
	'canonicalurle'             => [ '0', 'КАНОНСКАURLE:', 'CANONICALURLE:' ],
	'lcfirst'                   => [ '0', 'ПРВОМБ', 'LCFIRST:' ],
	'ucfirst'                   => [ '0', 'ПРВОГБ', 'UCFIRST:' ],
	'lc'                        => [ '0', 'МБ', 'LC:' ],
	'uc'                        => [ '0', 'ГБ', 'UC:' ],
	'raw'                       => [ '0', 'СИРОВО:', 'RAW:' ],
	'displaytitle'              => [ '1', 'ПРИКАЖИНАСЛОВ', 'DISPLAYTITLE' ],
	'rawsuffix'                 => [ '1', 'П', 'R' ],
	'nocommafysuffix'           => [ '0', 'БЕЗПОДЕЛ', 'NOSEP' ],
	'newsectionlink'            => [ '1', '__ВРСКАНОВПОДНАСЛОВ__', '__NEWSECTIONLINK__' ],
	'nonewsectionlink'          => [ '1', '__БЕЗВРСКАНОВПОДНАСЛОВ__', '__NONEWSECTIONLINK__' ],
	'currentversion'            => [ '1', 'ТЕКОВНАВЕРЗИЈА', 'CURRENTVERSION' ],
	'urlencode'                 => [ '0', 'ШИФРИРАЈURL:', 'URLENCODE:' ],
	'anchorencode'              => [ '0', 'ШИФРИРАЈКОТВА', 'ANCHORENCODE' ],
	'currenttimestamp'          => [ '1', 'ОЗНАЧЕНОТЕКОВНОВРЕМЕ', 'CURRENTTIMESTAMP' ],
	'localtimestamp'            => [ '1', 'ОЗНАЧЕНОЛОКАЛНОВРЕМЕ', 'LOCALTIMESTAMP' ],
	'directionmark'             => [ '1', 'ОЗНАКАЗАНАСОКА', 'DIRECTIONMARK', 'DIRMARK' ],
	'language'                  => [ '0', '#ЈАЗИК:', '#LANGUAGE:' ],
	'contentlanguage'           => [ '1', 'ЈАЗИКНАСОДРЖИНАТА', 'CONTENTLANGUAGE', 'CONTENTLANG' ],
	'pagesinnamespace'          => [ '1', 'СТРАНИЦИВОИМЕНСКИПРОСТОР', 'PAGESINNAMESPACE:', 'PAGESINNS:' ],
	'numberofadmins'            => [ '1', 'БРОЈНААДМИНИСТРАТОРИ', 'NUMBEROFADMINS' ],
	'formatnum'                 => [ '0', 'ФОРМАТБРОЈ', 'FORMATNUM' ],
	'padleft'                   => [ '0', 'ПОСТАВИЛЕВО', 'PADLEFT' ],
	'padright'                  => [ '0', 'ПОСТАВИДЕСНО', 'PADRIGHT' ],
	'special'                   => [ '0', 'службена', 'службени', 'special' ],
	'defaultsort'               => [ '1', 'ОСНОВНОПОДРЕДУВАЊЕ:', 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ],
	'filepath'                  => [ '0', 'ПОДАТОТЕЧНАПАТЕКА:', 'FILEPATH:' ],
	'tag'                       => [ '0', 'ознака', 'tag' ],
	'hiddencat'                 => [ '1', '__СКРИЕНАКАТ__', '__СКРИЕНАКАТЕГОРИЈА__', '__HIDDENCAT__' ],
	'pagesincategory'           => [ '1', 'СТРАНИЦИВОКАТЕГОРИЈА', 'СТРАНИЦИВОКАТ', 'PAGESINCATEGORY', 'PAGESINCAT' ],
	'pagesize'                  => [ '1', 'ГОЛЕМИНА_НА_СТРАНИЦА', 'PAGESIZE' ],
	'index'                     => [ '1', '__ИНДЕКС__', '__INDEX__' ],
	'noindex'                   => [ '1', '__БЕЗИНДЕКС__', '__NOINDEX__' ],
	'numberingroup'             => [ '1', 'БРОЈВОГРУПА', 'NUMBERINGROUP', 'NUMINGROUP' ],
	'staticredirect'            => [ '1', '__СТАТИЧНОПРЕНАСОЧУВАЊЕ__', '__STATICREDIRECT__' ],
	'protectionlevel'           => [ '1', 'НИВОНАЗАШТИТА', 'PROTECTIONLEVEL' ],
	'cascadingsources'          => [ '1', 'КАСКАДНИИЗВОРИ', 'CASCADINGSOURCES' ],
	'formatdate'                => [ '0', 'форматдатум', 'formatdate', 'dateformat' ],
	'url_path'                  => [ '0', 'ПАТЕКА', 'PATH' ],
	'url_wiki'                  => [ '0', 'ВИКИ', 'WIKI' ],
	'url_query'                 => [ '0', 'БАРАЊЕ', 'QUERY' ],
	'defaultsort_noerror'       => [ '0', 'безгрешки', 'noerror' ],
	'defaultsort_noreplace'     => [ '0', 'беззамена', 'noreplace' ],
	'displaytitle_noerror'      => [ '0', 'безгрешка', 'noerror' ],
	'displaytitle_noreplace'    => [ '0', 'незаменувај', 'noreplace' ],
	'pagesincategory_all'       => [ '0', 'сите', 'all' ],
	'pagesincategory_pages'     => [ '0', 'страници', 'pages' ],
	'pagesincategory_subcats'   => [ '0', 'поткатегории', 'subcats' ],
	'pagesincategory_files'     => [ '0', 'податотеки', 'files' ],
];

$linkTrail = '/^([a-zабвгдѓежзѕијклљмнњопрстќуфхцчџш]+)(.*)$/sDu';
$separatorTransformTable = [ ',' => '.', '.' => ',' ];
