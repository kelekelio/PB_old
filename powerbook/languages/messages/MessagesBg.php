<?php
/** Bulgarian (български)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 */

$fallback8bitEncoding = 'windows-1251';

$namespaceNames = [
	NS_MEDIA            => 'Медия',
	NS_SPECIAL          => 'Специални',
	NS_TALK             => 'Беседа',
	NS_USER             => 'Потребител',
	NS_USER_TALK        => 'Потребител_беседа',
	NS_PROJECT_TALK     => '$1_беседа',
	NS_FILE             => 'Файл',
	NS_FILE_TALK        => 'Файл_беседа',
	NS_MEDIAWIKI        => 'МедияУики',
	NS_MEDIAWIKI_TALK   => 'МедияУики_беседа',
	NS_TEMPLATE         => 'Шаблон',
	NS_TEMPLATE_TALK    => 'Шаблон_беседа',
	NS_HELP             => 'Помощ',
	NS_HELP_TALK        => 'Помощ_беседа',
	NS_CATEGORY         => 'Категория',
	NS_CATEGORY_TALK    => 'Категория_беседа',
];

$namespaceAliases = [
	'Картинка' => NS_FILE,
	'Картинка_беседа' => NS_FILE_TALK,
];

$specialPageAliases = [
	'Activeusers'               => [ 'Активни_потребители' ],
	'Allmessages'               => [ 'Системни_съобщения' ],
	'Allpages'                  => [ 'Всички_страници' ],
	'Ancientpages'              => [ 'Стари_страници' ],
	'Blankpage'                 => [ 'Празна_страница' ],
	'Block'                     => [ 'Блокиране' ],
	'Booksources'               => [ 'Източници_на_книги' ],
	'BrokenRedirects'           => [ 'Невалидни_пренасочвания' ],
	'Categories'                => [ 'Категории' ],
	'ChangePassword'            => [ 'Промяна_на_парола' ],
	'Confirmemail'              => [ 'Потвърждаване_на_е-поща' ],
	'Contributions'             => [ 'Приноси' ],
	'CreateAccount'             => [ 'Създаване_на_сметка' ],
	'Deadendpages'              => [ 'Задънени_страници' ],
	'DeletedContributions'      => [ 'Изтрити_приноси' ],
	'DoubleRedirects'           => [ 'Двойни_пренасочвания' ],
	'Emailuser'                 => [ 'Писмо_на_потребител' ],
	'ExpandTemplates'           => [ 'Разгръщане_на_шаблони' ],
	'Export'                    => [ 'Изнасяне' ],
	'Fewestrevisions'           => [ 'Страници_с_най-малко_версии' ],
	'FileDuplicateSearch'       => [ 'Повтарящи_се_файлове' ],
	'Filepath'                  => [ 'Път_към_файл' ],
	'Import'                    => [ 'Внасяне' ],
	'Invalidateemail'           => [ 'Отмяна_на_е-поща' ],
	'BlockList'                 => [ 'Блокирани_потребители' ],
	'LinkSearch'                => [ 'Търсене_на_външни_препратки' ],
	'Listadmins'                => [ 'Администратори' ],
	'Listbots'                  => [ 'Ботове' ],
	'Listfiles'                 => [ 'Файлове' ],
	'Listgrouprights'           => [ 'Групови_права' ],
	'Listredirects'             => [ 'Пренасочвания' ],
	'Listusers'                 => [ 'Потребители' ],
	'Lockdb'                    => [ 'Заключване_на_БД' ],
	'Log'                       => [ 'Дневници' ],
	'Lonelypages'               => [ 'Страници_сираци' ],
	'Longpages'                 => [ 'Дълги_страници' ],
	'MergeHistory'              => [ 'История_на_сливането' ],
	'MIMEsearch'                => [ 'MIME-търсене' ],
	'Mostcategories'            => [ 'Страници_с_най-много_категории' ],
	'Mostimages'                => [ 'Най-препращани_картинки' ],
	'Mostlinked'                => [ 'Най-препращани_страници' ],
	'Mostlinkedcategories'      => [ 'Най-препращани_категории' ],
	'Mostlinkedtemplates'       => [ 'Най-препращани_шаблони' ],
	'Mostrevisions'             => [ 'Страници_с_най-много_версии' ],
	'Movepage'                  => [ 'Преместване_на_страница' ],
	'Mycontributions'           => [ 'Моите_приноси' ],
	'Mypage'                    => [ 'Моята_страница' ],
	'Mytalk'                    => [ 'Моята_беседа' ],
	'Newimages'                 => [ 'Нови_файлове' ],
	'Newpages'                  => [ 'Нови_страници' ],
	'Preferences'               => [ 'Настройки' ],
	'Prefixindex'               => [ 'Всички_страници_с_представка', 'Представка' ],
	'Protectedpages'            => [ 'Защитени_страници' ],
	'Protectedtitles'           => [ 'Защитени_заглавия' ],
	'Randompage'                => [ 'Случайна_страница' ],
	'RandomInCategory'          => [ 'Случайна_страница_в_категория' ],
	'Randomredirect'            => [ 'Случайно_пренасочване' ],
	'Recentchanges'             => [ 'Последни_промени' ],
	'Recentchangeslinked'       => [ 'Свързани_промени' ],
	'Revisiondelete'            => [ 'Изтриване_на_версии' ],
	'Search'                    => [ 'Търсене' ],
	'Shortpages'                => [ 'Кратки_страници' ],
	'Specialpages'              => [ 'Специални_страници' ],
	'Statistics'                => [ 'Статистика' ],
	'Tags'                      => [ 'Етикети' ],
	'Unblock'                   => [ 'Отблокиране' ],
	'Uncategorizedcategories'   => [ 'Некатегоризирани_категории' ],
	'Uncategorizedimages'       => [ 'Некатегоризирани_картинки' ],
	'Uncategorizedpages'        => [ 'Некатегоризирани_страници' ],
	'Uncategorizedtemplates'    => [ 'Некатегоризирани_шаблони' ],
	'Undelete'                  => [ 'Възстановяване' ],
	'Unlockdb'                  => [ 'Отключване_на_БД' ],
	'Unusedcategories'          => [ 'Неизползвани_категории' ],
	'Unusedimages'              => [ 'Неизползвани_картинки' ],
	'Unusedtemplates'           => [ 'Неизползвани_шаблони' ],
	'Unwatchedpages'            => [ 'Ненаблюдавани_страници' ],
	'Upload'                    => [ 'Качване' ],
	'Userlogin'                 => [ 'Регистриране_или_влизане' ],
	'Userlogout'                => [ 'Излизане' ],
	'Userrights'                => [ 'Потребителски_права' ],
	'Version'                   => [ 'Версия' ],
	'Wantedcategories'          => [ 'Желани_категории' ],
	'Wantedfiles'               => [ 'Желани_файлове' ],
	'Wantedpages'               => [ 'Желани_страници' ],
	'Wantedtemplates'           => [ 'Желани_шаблони' ],
	'Watchlist'                 => [ 'Списък_за_наблюдение' ],
	'Whatlinkshere'             => [ 'Какво_сочи_насам' ],
	'Withoutinterwiki'          => [ 'Без_междууикита' ],
];

$magicWords = [
	'redirect'                  => [ '0', '#пренасочване', '#виж', '#REDIRECT' ],
	'notoc'                     => [ '0', '__БЕЗСЪДЪРЖАНИЕ__', '__NOTOC__' ],
	'nogallery'                 => [ '0', '__БЕЗГАЛЕРИЯ__', '__NOGALLERY__' ],
	'forcetoc'                  => [ '0', '__СЪССЪДЪРЖАНИЕ__', '__FORCETOC__' ],
	'toc'                       => [ '0', '__СЪДЪРЖАНИЕ__', '__TOC__' ],
	'noeditsection'             => [ '0', '__БЕЗ_РЕДАКТИРАНЕ_НА_РАЗДЕЛИ__', '__NOEDITSECTION__' ],
	'currentmonth'              => [ '1', 'ТЕКУЩМЕСЕЦ', 'CURRENTMONTH', 'CURRENTMONTH2' ],
	'currentmonth1'             => [ '1', 'ТЕКУЩМЕСЕЦ1', 'CURRENTMONTH1' ],
	'currentmonthname'          => [ '1', 'ТЕКУЩМЕСЕЦИМЕ', 'CURRENTMONTHNAME' ],
	'currentmonthnamegen'       => [ '1', 'ТЕКУЩМЕСЕЦИМЕРОД', 'CURRENTMONTHNAMEGEN' ],
	'currentmonthabbrev'        => [ '1', 'ТЕКУЩМЕСЕЦСЪКР', 'CURRENTMONTHABBREV' ],
	'currentday'                => [ '1', 'ТЕКУЩДЕН', 'CURRENTDAY' ],
	'currentday2'               => [ '1', 'ТЕКУЩДЕН2', 'CURRENTDAY2' ],
	'currentdayname'            => [ '1', 'ТЕКУЩДЕНИМЕ', 'CURRENTDAYNAME' ],
	'currentyear'               => [ '1', 'ТЕКУЩАГОДИНА', 'CURRENTYEAR' ],
	'currenttime'               => [ '1', 'ТЕКУЩОВРЕМЕ', 'CURRENTTIME' ],
	'currenthour'               => [ '1', 'ТЕКУЩЧАС', 'CURRENTHOUR' ],
	'numberofpages'             => [ '1', 'БРОЙСТРАНИЦИ', 'NUMBEROFPAGES' ],
	'numberofarticles'          => [ '1', 'БРОЙСТАТИИ', 'NUMBEROFARTICLES' ],
	'numberoffiles'             => [ '1', 'БРОЙФАЙЛОВЕ', 'NUMBEROFFILES' ],
	'numberofusers'             => [ '1', 'БРОЙПОТРЕБИТЕЛИ', 'NUMBEROFUSERS' ],
	'numberofactiveusers'       => [ '1', 'БРОЙАКТИВНИПОТРЕБИТЕЛИ', 'NUMBEROFACTIVEUSERS' ],
	'numberofedits'             => [ '1', 'БРОЙРЕДАКЦИИ', 'NUMBEROFEDITS' ],
	'pagename'                  => [ '1', 'СТРАНИЦА', 'PAGENAME' ],
	'pagenamee'                 => [ '1', 'СТРАНИЦАИ', 'PAGENAMEE' ],
	'namespace'                 => [ '1', 'ИМЕННОПРОСТРАНСТВО', 'NAMESPACE' ],
	'namespacee'                => [ '1', 'ИМЕННОПРОСТРАНСТВОИ', 'NAMESPACEE' ],
	'fullpagename'              => [ '1', 'ПЪЛНОИМЕ_СТРАНИЦА', 'FULLPAGENAME' ],
	'fullpagenamee'             => [ '1', 'ПЪЛНОИМЕ_СТРАНИЦАИ', 'FULLPAGENAMEE' ],
	'subpagename'               => [ '1', 'ИМЕ_ПОДСТРАНИЦА', 'SUBPAGENAME' ],
	'subpagenamee'              => [ '1', 'ИМЕ_ПОДСТРАНИЦАИ', 'SUBPAGENAMEE' ],
	'talkpagename'              => [ '1', 'ИМЕ_БЕСЕДА', 'TALKPAGENAME' ],
	'talkpagenamee'             => [ '1', 'ИМЕ_БЕСЕДАИ', 'TALKPAGENAMEE' ],
	'msg'                       => [ '0', 'СЪОБЩ:', 'MSG:' ],
	'subst'                     => [ '0', 'ЗАМЕСТ:', 'SUBST:' ],
	'msgnw'                     => [ '0', 'СЪОБЩБУ:', 'MSGNW:' ],
	'img_thumbnail'             => [ '1', 'мини', 'thumb', 'thumbnail' ],
	'img_manualthumb'           => [ '1', 'мини=$1', 'thumbnail=$1', 'thumb=$1' ],
	'img_right'                 => [ '1', 'дясно', 'вдясно', 'д', 'right' ],
	'img_left'                  => [ '1', 'ляво', 'вляво', 'л', 'left' ],
	'img_none'                  => [ '1', 'н', 'none' ],
	'img_width'                 => [ '1', '$1пкс', '$1п', '$1px' ],
	'img_center'                => [ '1', 'център', 'ц', 'центр', 'center', 'centre' ],
	'img_framed'                => [ '1', 'рамка', 'врамка', 'frame', 'framed', 'enframed' ],
	'img_frameless'             => [ '1', 'безрамка', 'frameless' ],
	'img_border'                => [ '1', 'ръб', 'контур', 'border' ],
	'int'                       => [ '0', 'ВЪТР:', 'INT:' ],
	'sitename'                  => [ '1', 'ИМЕНАСАЙТА', 'SITENAME' ],
	'ns'                        => [ '0', 'ИП:', 'NS:' ],
	'localurl'                  => [ '0', 'ЛОКАЛЕНАДРЕС:', 'LOCALURL:' ],
	'localurle'                 => [ '0', 'ЛОКАЛЕНАДРЕСИ:', 'LOCALURLE:' ],
	'server'                    => [ '0', 'СЪРВЪР', 'SERVER' ],
	'servername'                => [ '0', 'ИМЕНАСЪРВЪРА', 'SERVERNAME' ],
	'scriptpath'                => [ '0', 'ПЪТДОСКРИПТА', 'SCRIPTPATH' ],
	'grammar'                   => [ '0', 'ГРАМАТИКА:', 'GRAMMAR:' ],
	'gender'                    => [ '0', 'ПОЛ:', 'GENDER:' ],
	'currentweek'               => [ '1', 'ТЕКУЩАСЕДМИЦА', 'CURRENTWEEK' ],
	'currentdow'                => [ '1', 'ТЕКУЩ_ДЕН_ОТ_СЕДМИЦАТА', 'CURRENTDOW' ],
	'revisionid'                => [ '1', 'ИД_НА_ВЕРСИЯТА', 'REVISIONID' ],
	'revisionday'               => [ '1', 'ДЕН_НА_ВЕРСИЯТА', 'REVISIONDAY' ],
	'revisionday2'              => [ '1', 'ДЕН_НА_ВЕРСИЯТА2', 'REVISIONDAY2' ],
	'revisionmonth'             => [ '1', 'МЕСЕЦ_НА_ВЕРСИЯТА', 'REVISIONMONTH' ],
	'revisionyear'              => [ '1', 'ГОДИНА_НА_ВЕРСИЯТА', 'REVISIONYEAR' ],
	'plural'                    => [ '0', 'МН_ЧИСЛО:', 'PLURAL:' ],
	'fullurl'                   => [ '0', 'ПЪЛЕН_АДРЕС:', 'FULLURL:' ],
	'fullurle'                  => [ '0', 'ПЪЛЕН_АДРЕСИ:', 'FULLURLE:' ],
	'lcfirst'                   => [ '0', 'МБПЪРВА:', 'LCFIRST:' ],
	'ucfirst'                   => [ '0', 'ГБПЪРВА:', 'UCFIRST:' ],
	'lc'                        => [ '0', 'МБ:', 'LC:' ],
	'uc'                        => [ '0', 'ГБ:', 'UC:' ],
	'raw'                       => [ '0', 'НЕОБРАБ:', 'RAW:' ],
	'displaytitle'              => [ '1', 'ПОКАЗВ_ЗАГЛАВИЕ', 'DISPLAYTITLE' ],
	'newsectionlink'            => [ '1', '__ВРЪЗКА_ЗА_НОВ_РАЗДЕЛ__', '__NEWSECTIONLINK__' ],
	'language'                  => [ '0', '#ЕЗИК:', '#LANGUAGE:' ],
	'numberofadmins'            => [ '1', 'БРОЙАДМИНИСТРАТОРИ', 'NUMBEROFADMINS' ],
	'defaultsort'               => [ '1', 'СОРТКАТ:', 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ],
	'hiddencat'                 => [ '1', '__СКРИТАКАТЕГОРИЯ__', '__HIDDENCAT__' ],
	'index'                     => [ '1', '__ИНДЕКСИРАНЕ__', '__INDEX__' ],
	'noindex'                   => [ '1', '__БЕЗИНДЕКСИРАНЕ__', '__NOINDEX__' ],
];

$datePreferences = false;

$bookstoreList = [
	'books.bg'   => 'http://www.books.bg/ISBN/$1',
	'Пингвините' => 'http://www.pe-bg.com/?cid=3&search_q=$1&where=ISBN&x=0&y=0**',
	'Бард'       => 'http://www.bard.bg/search/?q=$1'
];

$linkTrail = '/^([a-zабвгдежзийклмнопрстуфхцчшщъыьэюя]+)(.*)$/sDu';

$separatorTransformTable = [ ',' => "\xc2\xa0", '.' => ',' ];
