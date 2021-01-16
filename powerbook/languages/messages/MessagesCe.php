<?php
/** Chechen (нохчийн)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 */

$fallback = 'ru';

$namespaceNames = [
	NS_MEDIA            => 'Медиа',
	NS_SPECIAL          => 'Белхан',
	NS_TALK             => 'Дийцаре',
	NS_USER             => 'Декъашхо',
	NS_USER_TALK        => 'Декъашхочун_дийцаре',
	NS_PROJECT_TALK     => '{{GRAMMAR:genitive|$1}}_дийцаре',
	NS_FILE             => 'Файл',
	NS_FILE_TALK        => 'Файлан_дийцаре',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'MediaWiki_дийцаре',
	NS_TEMPLATE         => 'Кеп',
	NS_TEMPLATE_TALK    => 'Кепан_дийцаре',
	NS_HELP             => 'ГӀо',
	NS_HELP_TALK        => 'ГӀо_дийцаре',
	NS_CATEGORY         => 'Категори',
	NS_CATEGORY_TALK    => 'Категорин_дийцаре',
];

$namespaceAliases = [
	'Медйа'            => NS_MEDIA,
	'Башхо'            => NS_SPECIAL,
	'Дийца'            => NS_TALK,
	'Юзер'             => NS_USER,
	'Юзери_дийца'      => NS_USER_TALK,
	'Дийцаре_декъашхо' => NS_USER_TALK,
	'Декъашхон_дийцаре' => NS_USER_TALK,
	'$1_Дийца'         => NS_PROJECT_TALK,
	'Дийцаре_{{GRAMMAR:genitive|$1}}' => NS_PROJECT_TALK,
	'Сурт'             => NS_FILE,
	'Сурти_дийца'      => NS_FILE_TALK,
	'Хlум'             => NS_FILE,
	'Хlуман_дийцаре'   => NS_FILE_TALK,
	'Дийцаре_хlуман'   => NS_FILE_TALK,
	'МедйаВики'        => NS_MEDIAWIKI,
	'МедйаВики_дийца'  => NS_MEDIAWIKI_TALK,
	'MediaWiki_Дийцаре' => NS_MEDIAWIKI_TALK,
	'Дакъан'           => NS_TEMPLATE,
	'Дакъан_дийца'     => NS_TEMPLATE_TALK,
	'Куцкеп'           => NS_TEMPLATE,
	'Куцкеп_дийцаре'   => NS_TEMPLATE_TALK,
	'ГІо'              => NS_HELP,
	'ГІодан_дийца'     => NS_HELP_TALK,
	'Гlо'              => NS_HELP,
	'Гlон_дийцаре'     => NS_HELP_TALK,
	'Тоба'             => NS_CATEGORY,
	'Тобан_дийца'      => NS_CATEGORY_TALK,
	'Кадегар'          => NS_CATEGORY,
	'Кадегар_дийцаре'  => NS_CATEGORY_TALK,
];

// Remove Russian aliases
$namespaceGenderAliases = [];

$specialPageAliases = [
	'Activeusers'               => [ 'Жигара_декъашхой' ],
	'Allmessages'               => [ 'ГӀирса_хаамаш' ],
	'AllMyUploads'              => [ 'Сан_массо_файлаш' ],
	'Allpages'                  => [ 'Массо_агӀонаш' ],
	'Ancientpages'              => [ 'ТӀаьхьарлерачу_хенаца_нисбина_яззамаш' ],
	'Badtitle'                  => [ 'Хилийта_йиш_йоцу_цӀе' ],
	'Blankpage'                 => [ 'Еса_агӀо' ],
	'Block'                     => [ 'Блоктоха' ],
	'Booksources'               => [ 'Жайнийн_хьосташ' ],
	'BrokenRedirects'           => [ 'ДIахаьдна_долу_дIасахьажораш' ],
	'Categories'                => [ 'Категореш' ],
	'ChangeEmail'               => [ 'Хийца_e-mail' ],
	'ChangePassword'            => [ 'Хийца_пароль' ],
	'ComparePages'              => [ 'АгӀонаш_юстар' ],
	'Confirmemail'              => [ 'Бакъе_e-mail' ],
	'Contributions'             => [ 'Къинхьегам' ],
	'CreateAccount'             => [ 'Кхолла_декъашхочун_дӀаяздар' ],
	'Deadendpages'              => [ 'Дика_йоцу_агӀонаш' ],
	'DeletedContributions'      => [ 'ДӀабаьккхина_къинхьегам' ],
	'DoubleRedirects'           => [ 'Шалха_дӀасахьажийнарш' ],
	'EditWatchlist'             => [ 'Табе_тергаме_могӀам' ],
	'Emailuser'                 => [ 'Декъашхочунга_кехат' ],
	'ExpandTemplates'           => [ 'Кепаш_схьаястар' ],
	'Export'                    => [ 'Экспорт' ],
	'Fewestrevisions'           => [ 'Наггахь_беш_болу_хийцамаш' ],
	'FileDuplicateSearch'       => [ 'Цхьатера_файлаш_лахар' ],
	'Filepath'                  => [ 'Файл_йолче' ],
	'Import'                    => [ 'Импорт' ],
	'Invalidateemail'           => [ 'Адрес_бакъдар_юхадаккха' ],
	'JavaScriptTest'            => [ 'JavaScript_тестировать_ян' ],
	'BlockList'                 => [ 'Блоктоьхнарш' ],
	'LinkSearch'                => [ 'Хьажоргаш_лахар' ],
	'Listadmins'                => [ 'Куьйгалхойн_могӀам' ],
	'Listbots'                  => [ 'Боттийн_могӀам' ],
	'Listfiles'                 => [ 'Файлаш' ],
	'Listgrouprights'           => [ 'Декъашхойн_бакъонаш' ],
	'Listredirects'             => [ 'ДIасахьажоран_могIам' ],
	'Listusers'                 => [ 'Декъашхойн_могӀам' ],
	'Lockdb'                    => [ 'Хааман_базан_блоктохар' ],
	'Log'                       => [ 'Тептарш' ],
	'Lonelypages'               => [ 'Байлахь_йисина_агӀонаш' ],
	'Longpages'                 => [ 'Беха_яззамаш' ],
	'MergeHistory'              => [ 'Истори_цхьаьнатохар' ],
	'MIMEsearch'                => [ 'MIME_чухула_лахар' ],
	'Mostcategories'            => [ 'Дуккха_категореш_тӀе_тоьхна_йолу_агӀонаш' ],
	'Mostimages'                => [ 'Массарел_дуккха_лелайо_файлаш' ],
	'Mostinterwikis'            => [ 'Дукха_юкъарвики_хьажоргаш' ],
	'Mostlinked'                => [ 'Дуккха_хьажоргаш_тӀе_тоьхна_йолу_агӀонаш' ],
	'Mostlinkedcategories'      => [ 'Дуккха_тӀе_хьажораш_йолу_категореш' ],
	'Mostlinkedtemplates'       => [ 'Массарел_дуккха_а_леладо_кепаш' ],
	'Mostrevisions'             => [ 'Сих_сиха_нисйина_йолу_агӀонаш' ],
	'Movepage'                  => [ 'АгӀона_цӀе_хийцар' ],
	'Mycontributions'           => [ 'Сан_къинхьегам' ],
	'MyLanguage'                => [ 'Сан_мотт' ],
	'Mypage'                    => [ 'Сан_агӀо' ],
	'Mytalk'                    => [ 'Сан_дийцаре' ],
	'Myuploads'                 => [ 'Сан_файлаш' ],
	'Newimages'                 => [ 'Керла_файлаш' ],
	'Newpages'                  => [ 'Керла_агӀонаш' ],
	'PasswordReset'             => [ 'Пароль_кхоссар' ],
	'PermanentLink'             => [ 'Гуттарлера_хьажорг' ],
	'Preferences'               => [ 'ГӀирсаш' ],
	'Prefixindex'               => [ 'Хьалха_агӀонийн_цӀераш_хӀотто_еза' ],
	'Protectedpages'            => [ 'ГӀаролла_дина_агӀонаш' ],
	'Protectedtitles'           => [ 'ГӀаролла_дина_цӀераш' ],
	'Randompage'                => [ 'Цахууш_нисйелла_агIо' ],
	'Randomredirect'            => [ 'Цахууш_нисделла_дIасахьажор' ],
	'Recentchanges'             => [ 'Керла_нисдарш' ],
	'Recentchangeslinked'       => [ 'Кхуьнца_долу_нисдарш' ],
	'Revisiondelete'            => [ 'Нисдар_дӀадаккхар' ],
	'Search'                    => [ 'Лахар' ],
	'Shortpages'                => [ 'Боца_яззамаш' ],
	'Specialpages'              => [ 'Леррина_агӀонаш' ],
	'Statistics'                => [ 'Статистика' ],
	'Tags'                      => [ 'Билгалонаш' ],
	'Unblock'                   => [ 'БлокдӀаяккхар' ],
	'Uncategorizedcategories'   => [ 'Категореш_йоцу_категореш' ],
	'Uncategorizedimages'       => [ 'Категореш_йоцу_файлаш' ],
	'Uncategorizedpages'        => [ 'Категореш_йоцу_агӀонаш' ],
	'Uncategorizedtemplates'    => [ 'Категореш_йоцу_кепаш' ],
	'Undelete'                  => [ 'МеттахӀоттор' ],
	'Unlockdb'                  => [ 'БлокдӀаякхар_ХБ' ],
	'Unusedcategories'          => [ 'Лелош_доцу_категореш' ],
	'Unusedimages'              => [ 'Лелош_доцу_файлаш' ],
	'Unusedtemplates'           => [ 'Лелош_доцу_кепаш' ],
	'Upload'                    => [ 'Файл_чуяккхар' ],
	'UploadStash'               => [ 'ДӀахьулйина_файл_чуяккхар' ],
	'Userlogin'                 => [ 'Чудалар' ],
	'Userlogout'                => [ 'Арадалар' ],
	'Userrights'                => [ 'Бакъона_урхалладар' ],
	'Version'                   => [ 'Верси' ],
	'Wantedcategories'          => [ 'Оьшуш_йолу_категореш' ],
	'Wantedfiles'               => [ 'Оьшуш_йолу_файлаш' ],
	'Wantedpages'               => [ 'Оьшуш_йолу_агӀонаш' ],
	'Wantedtemplates'           => [ 'Оьшуш_йолу_кепаш' ],
	'Watchlist'                 => [ 'Тергаме_могӀам' ],
	'Whatlinkshere'             => [ 'Хьажоригаш_кхузе' ],
	'Withoutinterwiki'          => [ 'Юкъарвики_хьажоргаш_йоцу_агӀонаш' ],
];

$magicWords = [
	'redirect'                  => [ '0', '#дӀасахьажор\'', '\'#хьажайо\'', '\'#REDIRECT', '#перенаправление', '#перенапр', '#REDIRECT' ],
	'notoc'                     => [ '0', '__БАЦ_ЧУЛАЦАМ__', '__БАЦ_ЧУЛ__', '__БЕЗ_ОГЛАВЛЕНИЯ__', '__БЕЗ_ОГЛ__', '__NOTOC__' ],
	'nogallery'                 => [ '0', '__ЙАЦ_УЧЕ__', '__БЕЗ_ГАЛЕРЕИ__', '__NOGALLERY__' ],
	'forcetoc'                  => [ '0', '__ТlЕДУЬЛЛУ_ЧУЛАЦАМБАР__', '__ТlЕДУЬЛ_ЧУЛ__', '__ОБЯЗАТЕЛЬНОЕ_ОГЛАВЛЕНИЕ__', '__ОБЯЗ_ОГЛ__', '__FORCETOC__' ],
	'toc'                       => [ '0', '__ЧУЛАЦАМ__', '__ЧУЛ__', '__ОГЛАВЛЕНИЕ__', '__ОГЛ__', '__TOC__' ],
	'noeditsection'             => [ '0', '__АГӀО_ТА_ЦА_ЕШ__', '__БЕЗ_РЕДАКТИРОВАНИЯ_РАЗДЕЛА__', '__NOEDITSECTION__' ],
	'currentmonth'              => [ '1', 'КАРАРА_БУТТ', 'КАРАРА_БУТТ_2', 'ТЕКУЩИЙ_МЕСЯЦ', 'ТЕКУЩИЙ_МЕСЯЦ_2', 'CURRENTMONTH', 'CURRENTMONTH2' ],
	'currentmonth1'             => [ '1', 'КАРАРА_БУТТ_1', 'ТЕКУЩИЙ_МЕСЯЦ_1', 'CURRENTMONTH1' ],
	'currentmonthname'          => [ '1', 'КАРАРАЧУ_БЕТТА_ЦӀЕ', 'НАЗВАНИЕ_ТЕКУЩЕГО_МЕСЯЦА', 'CURRENTMONTHNAME' ],
	'currentmonthnamegen'       => [ '1', 'КАРАРАЧУ_БЕТТА_ЦӀЕ_МУХ', 'НАЗВАНИЕ_ТЕКУЩЕГО_МЕСЯЦА_РОД', 'CURRENTMONTHNAMEGEN' ],
	'currentmonthabbrev'        => [ '1', 'КАРАРАЧУ_БЕТТА_ЦӀЕ_АБР', 'НАЗВАНИЕ_ТЕКУЩЕГО_МЕСЯЦА_АБР', 'CURRENTMONTHABBREV' ],
	'currentday'                => [ '1', 'КАРАРА_ДЕ', 'ТЕКУЩИЙ_ДЕНЬ', 'CURRENTDAY' ],
	'currentday2'               => [ '1', 'КАРАРА_ДЕ_2', 'ТЕКУЩИЙ_ДЕНЬ_2', 'CURRENTDAY2' ],
	'currentdayname'            => [ '1', 'КАРАРАЧУ_ДЕ_ЦӀЕ', 'НАЗВАНИЕ_ТЕКУЩЕГО_ДНЯ', 'CURRENTDAYNAME' ],
	'currentyear'               => [ '1', 'КАРАРА_ШО', 'ТЕКУЩИЙ_ГОД', 'CURRENTYEAR' ],
	'currenttime'               => [ '1', 'КАРАРА_ХАН', 'ТЕКУЩЕЕ_ВРЕМЯ', 'CURRENTTIME' ],
	'currenthour'               => [ '1', 'КАРАРА_САХЬТ', 'ТЕКУЩИЙ_ЧАС', 'CURRENTHOUR' ],
	'localmonth'                => [ '1', 'МЕТТИГАН_БУТТ', 'МЕСТНЫЙ_МЕСЯЦ_2', 'МЕСТНЫЙ_МЕСЯЦ', 'LOCALMONTH', 'LOCALMONTH2' ],
	'localmonth1'               => [ '1', 'МЕТТИГАН_БУТТ_1', 'МЕСТНЫЙ_МЕСЯЦ_1', 'LOCALMONTH1' ],
	'localmonthname'            => [ '1', 'МЕТТИГАН_БЕТТА_ЦlЕ', 'НАЗВАНИЕ_МЕСТНОГО_МЕСЯЦА', 'LOCALMONTHNAME' ],
	'localmonthnamegen'         => [ '1', 'МЕТТИГАН_БЕТТА_ЦlЕ_МУХ', 'НАЗВАНИЕ_МЕСТНОГО_МЕСЯЦА_РОД', 'LOCALMONTHNAMEGEN' ],
	'localmonthabbrev'          => [ '1', 'МЕТТИГАН_БЕТТА_ЦlЕ_АБР', 'НАЗВАНИЕ_МЕСТНОГО_МЕСЯЦА_АБР', 'LOCALMONTHABBREV' ],
	'localday'                  => [ '1', 'МЕТТИГАН_ДЕ', 'МЕСТНЫЙ_ДЕНЬ', 'LOCALDAY' ],
	'localday2'                 => [ '1', 'МЕТТИГАН_ДЕ_2', 'МЕСТНЫЙ_ДЕНЬ_2', 'LOCALDAY2' ],
	'localdayname'              => [ '1', 'МЕТТИГАН_ДЕ_ЦӀЕ', 'НАЗВАНИЕ_МЕСТНОГО_ДНЯ', 'LOCALDAYNAME' ],
	'localyear'                 => [ '1', 'МЕТТИГАН_ШО', 'МЕСТНЫЙ_ГОД', 'LOCALYEAR' ],
	'localtime'                 => [ '1', 'МЕТТИГАН_ХАН', 'МЕСТНОЕ_ВРЕМЯ', 'LOCALTIME' ],
	'localhour'                 => [ '1', 'МЕТТИГАН_САХЬТ', 'МЕСТНЫЙ_ЧАС', 'LOCALHOUR' ],
	'numberofpages'             => [ '1', 'АГlОНИЙ_ДУКХАЛЛА', 'КОЛИЧЕСТВО_СТРАНИЦ', 'NUMBEROFPAGES' ],
	'numberofarticles'          => [ '1', 'ЯЗЗАМАШИ_ДУКХАЛЛА', 'КОЛИЧЕСТВО_СТАТЕЙ', 'NUMBEROFARTICLES' ],
	'numberoffiles'             => [ '1', 'ФАЙЛИЙН_ДУКХАЛЛА', 'КОЛИЧЕСТВО_ФАЙЛОВ', 'NUMBEROFFILES' ],
	'numberofusers'             => [ '1', 'ДЕКЪАШХОЙ_ДУКХАЛЛА', 'КОЛИЧЕСТВО_УЧАСТНИКОВ', 'NUMBEROFUSERS' ],
	'numberofactiveusers'       => [ '1', 'ДУКХАЛЛА_ЖИГАРА_ДЕКЪАШХОЙ', 'КОЛИЧЕСТВО_АКТИВНЫХ_УЧАСТНИКОВ', 'NUMBEROFACTIVEUSERS' ],
	'numberofedits'             => [ '1', 'НИСДАРИЙН_ДУКХАЛЛА', 'КОЛИЧЕСТВО_ПРАВОК', 'NUMBEROFEDITS' ],
	'pagename'                  => [ '1', 'АГӀОН_ЦӀЕ', 'НАЗВАНИЕ_СТРАНИЦЫ', 'PAGENAME' ],
	'pagenamee'                 => [ '1', 'АГӀОН_ЦӀЕ_2', 'НАЗВАНИЕ_СТРАНИЦЫ_2', 'PAGENAMEE' ],
	'namespace'                 => [ '1', 'ЦӀЕРИЙН_АНА', 'ПРОСТРАНСТВО_ИМЁН', 'NAMESPACE' ],
	'namespacee'                => [ '1', 'ЦӀЕРИЙН_АНА_2', 'ПРОСТРАНСТВО_ИМЁН_2', 'NAMESPACEE' ],
	'talkspace'                 => [ '1', 'ДИЙЦАРИЙН_АНА', 'ПРОСТРАНСТВО_ОБСУЖДЕНИЙ', 'TALKSPACE' ],
	'talkspacee'                => [ '1', 'ДИЙЦАРИЙН_АНА_2', 'ПРОСТРАНСТВО_ОБСУЖДЕНИЙ_2', 'TALKSPACEE' ],
	'subjectspace'              => [ '1', 'ЯЗЗАМИЙН_АНА', 'ПРОСТРАНСТВО_СТАТЕЙ', 'SUBJECTSPACE', 'ARTICLESPACE' ],
	'subjectspacee'             => [ '1', 'ЯЗЗАМИЙН_АНА_2', 'ПРОСТРАНСТВО_СТАТЕЙ_2', 'SUBJECTSPACEE', 'ARTICLESPACEE' ],
	'fullpagename'              => [ '1', 'ЮЬЗЗИНА_АГӀОН_ЦӀЕ', 'ПОЛНОЕ_НАЗВАНИЕ_СТРАНИЦЫ', 'FULLPAGENAME' ],
	'fullpagenamee'             => [ '1', 'ЮЬЗЗИНА_АГӀОН_ЦӀЕ_2', 'ПОЛНОЕ_НАЗВАНИЕ_СТРАНИЦЫ_2', 'FULLPAGENAMEE' ],
	'subpagename'               => [ '1', 'АГӀОН_КӀЕЛАРА_ЦӀЕ', 'НАЗВАНИЕ_ПОДСТРАНИЦЫ', 'SUBPAGENAME' ],
	'subpagenamee'              => [ '1', 'АГӀОН_КӀЕЛАРА_ЦӀЕ_2', 'НАЗВАНИЕ_ПОДСТРАНИЦЫ_2', 'SUBPAGENAMEE' ],
	'basepagename'              => [ '1', 'АГӀОН_ЦӀЕРА_БУХ', 'ОСНОВА_НАЗВАНИЯ_СТРАНИЦЫ', 'BASEPAGENAME' ],
	'basepagenamee'             => [ '1', 'АГӀОН_ЦӀЕРА_БУХ_2', 'ОСНОВА_НАЗВАНИЯ_СТРАНИЦЫ_2', 'BASEPAGENAMEE' ],
	'talkpagename'              => [ '1', 'ДИЙЦАРЕ_АГӀОН_ЦӀЕ', 'НАЗВАНИЕ_СТРАНИЦЫ_ОБСУЖДЕНИЯ', 'TALKPAGENAME' ],
	'talkpagenamee'             => [ '1', 'ДИЙЦАРЕ_АГӀОН_ЦӀЕ_2', 'НАЗВАНИЕ_СТРАНИЦЫ_ОБСУЖДЕНИЯ_2', 'TALKPAGENAMEE' ],
	'subjectpagename'           => [ '1', 'АГӀОН_ЯЗЗАМАН_ЦӀЕ', 'НАЗВАНИЕ_СТРАНИЦЫ_СТАТЬИ', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ],
	'subjectpagenamee'          => [ '1', 'АГӀОН_ЯЗЗАМАН_ЦӀЕ_2', 'НАЗВАНИЕ_СТРАНИЦЫ_СТАТЬИ_2', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ],
	'msg'                       => [ '0', 'ХААМ:', 'СООБЩЕНИЕ:', 'СООБЩ:', 'MSG:' ],
	'subst'                     => [ '0', 'ХӀОТТОР:', 'ХӀОТТ:', 'ПОДСТАНОВКА:', 'ПОДСТ:', 'SUBST:' ],
	'msgnw'                     => [ '0', 'ВИКИ_ХААМ_БОЦАШ:', 'СООБЩ_БЕЗ_ВИКИ:', 'MSGNW:' ],
	'img_thumbnail'             => [ '1', 'мини', 'жима', 'жимо', 'миниатюра', 'thumb', 'thumbnail' ],
	'img_manualthumb'           => [ '1', 'жима=$1', 'жимо=$1', 'мини=$1', 'миниатюра=$1', 'thumbnail=$1', 'thumb=$1' ],
	'img_right'                 => [ '1', 'справа', 'бакъхьа', 'right' ],
	'img_left'                  => [ '1', 'слева', 'харцхьа', 'left' ],
	'img_none'                  => [ '1', 'йоцуш', 'без', 'none' ],
	'img_width'                 => [ '1', '$1пкс', '$1px' ],
	'img_center'                => [ '1', 'центр', 'юккъ', 'center', 'centre' ],
	'img_framed'                => [ '1', 'гурабе', 'обрамить', 'frame', 'framed', 'enframed' ],
	'img_frameless'             => [ '1', 'безрамки', 'гурабоцаш', 'frameless' ],
	'img_page'                  => [ '1', 'агlо=$1', 'агlо_$1', 'page_$1', 'страница=$1', 'страница_$1', 'страница $1', 'page=$1', 'page $1' ],
	'img_upright'               => [ '1', 'бакъхьалакхо', 'бакъхьалакхо=$1', 'бакъхьалакхо_$1', 'upright_$1', 'сверхусправа', 'сверхусправа=$1', 'сверхусправа_$1', 'сверхусправа $1', 'upright', 'upright=$1', 'upright $1' ],
	'img_border'                => [ '1', 'доза', 'граница', 'border' ],
	'img_baseline'              => [ '1', 'бух', 'основание', 'baseline' ],
	'img_sub'                   => [ '1', 'под', 'буха', 'sub' ],
	'img_super'                 => [ '1', 'тӀе', 'над', 'super', 'sup' ],
	'img_top'                   => [ '1', 'лакхахь', 'сверху', 'top' ],
	'img_text_top'              => [ '1', 'лакххьара-йоза', 'текст-сверху', 'text-top' ],
	'img_middle'                => [ '1', 'юккъе', 'посередине', 'middle' ],
	'img_bottom'                => [ '1', 'бухар', 'снизу', 'bottom' ],
	'img_text_bottom'           => [ '1', 'бухара-йоза', 'текст-снизу', 'text-bottom' ],
	'img_link'                  => [ '1', 'хьажорг=$1', 'ссылка=$1', 'link=$1' ],
	'img_alt'                   => [ '1', 'альт=$1', 'alt=$1' ],
	'int'                       => [ '0', 'ЧУЬРА:', 'ВНУТР:', 'INT:' ],
	'sitename'                  => [ '1', 'МЕТТИГ_ЦlЕ', 'НАЗВАНИЕ_САЙТА', 'SITENAME' ],
	'ns'                        => [ '0', 'БО:', 'ПИ:', 'NS:' ],
	'nse'                       => [ '0', 'БОХЬ:', 'ПИК:', 'NSE:' ],
	'localurl'                  => [ '0', 'ХӀОТТАЕЛЛА_МЕТТИГ:', 'ЛОКАЛЬНЫЙ_АДРЕС:', 'LOCALURL:' ],
	'localurle'                 => [ '0', 'ХӀОТТАЕЛЛА_МЕТТИГ_2:', 'ЛОКАЛЬНЫЙ_АДРЕС_2:', 'LOCALURLE:' ],
	'server'                    => [ '0', 'ГlУЛКХДИРИГ', 'СЕРВЕР', 'SERVER' ],
	'servername'                => [ '0', 'ГlУЛКХДЕЧУЬНА_ЦlЕ', 'НАЗВАНИЕ_СЕРВЕРА', 'SERVERNAME' ],
	'scriptpath'                => [ '0', 'НЕКЪ_ОЦ_МЕТТАКЕПА', 'ПУТЬ_К_СКРИПТУ', 'SCRIPTPATH' ],
	'stylepath'                 => [ '0', 'ЙОМАНХАТӀ', 'ПУТЬ_К_СТИЛЮ', 'STYLEPATH' ],
	'grammar'                   => [ '0', 'ДОЖАР:', 'ПАДЕЖ:', 'GRAMMAR:' ],
	'gender'                    => [ '0', 'ВУ_ЙУ:', 'GENDER', 'ПОЛ:', 'GENDER:' ],
	'notitleconvert'            => [ '0', '__ХИЙЦАР_ДОЦУШ_КОЬРТЕ__', '__БЕЗ_ПРЕОБРАЗОВАНИЯ_ЗАГОЛОВКА__', '__NOTITLECONVERT__', '__NOTC__' ],
	'nocontentconvert'          => [ '0', '__ЙОЗА_ХИЙЦАР_ДОЦУШ__', '__БЕЗ_ПРЕОБРАЗОВАНИЯ_ТЕКСТА__', '__NOCONTENTCONVERT__', '__NOCC__' ],
	'currentweek'               => [ '1', 'КАРАРА_КӀИРА', 'ТЕКУЩАЯ_НЕДЕЛЯ', 'CURRENTWEEK' ],
	'currentdow'                => [ '1', 'КАРАРА_КӀИРАН_ДЕ', 'ТЕКУЩИЙ_ДЕНЬ_НЕДЕЛИ', 'CURRENTDOW' ],
	'localweek'                 => [ '1', 'МЕТТИГЕРА_КӀИРА', 'МЕСТНАЯ_НЕДЕЛЯ', 'LOCALWEEK' ],
	'localdow'                  => [ '1', 'МЕТТИГАН_КӀИРАН_ДЕ', 'МЕСТНЫЙ_ДЕНЬ_НЕДЕЛИ', 'LOCALDOW' ],
	'revisionid'                => [ '1', 'ЦУЬНА_БАШХО', 'ИД_ВЕРСИИ', 'REVISIONID' ],
	'revisionday'               => [ '1', 'ДЕ_БАШХО', 'ДЕНЬ_ВЕРСИИ', 'REVISIONDAY' ],
	'revisionday2'              => [ '1', 'ДЕ_БАШХО_2', 'ДЕНЬ_ВЕРСИИ_2', 'REVISIONDAY2' ],
	'revisionmonth'             => [ '1', 'БЕТТА_БАШХО', 'МЕСЯЦ_ВЕРСИИ', 'REVISIONMONTH' ],
	'revisionyear'              => [ '1', 'ШО_БАШХО', 'ГОД_ВЕРСИИ', 'REVISIONYEAR' ],
	'revisiontimestamp'         => [ '1', 'КЪАСТАМ_ХЕНА_БАШХО', 'ОТМЕТКА_ВРЕМЕНИ_ВЕРСИИ', 'REVISIONTIMESTAMP' ],
	'revisionuser'              => [ '1', 'ДЕКЪАШХОН_БАШХО', 'ВЕРСИЯ_УЧАСНИКА', 'ВЕРСИЯ_УЧАСТНИКА', 'REVISIONUSER' ],
	'plural'                    => [ '0', 'ДУКХАЛЛИН_ТЕРАХЬ:', 'МНОЖЕСТВЕННОЕ_ЧИСЛО:', 'PLURAL:' ],
	'fullurl'                   => [ '0', 'МАЙАРРА_МЕТТИГ:', 'ПОЛНЫЙ_АДРЕС:', 'FULLURL:' ],
	'fullurle'                  => [ '0', 'МАЙАРРА_МЕТТИГ_2:', 'ПОЛНЫЙ_АДРЕС_2:', 'FULLURLE:' ],
	'lcfirst'                   => [ '0', 'ХЬАЛХАР_ЭЛП_ЖИМА:', 'ПЕРВАЯ_БУКВА_МАЛЕНЬКАЯ:', 'LCFIRST:' ],
	'ucfirst'                   => [ '0', 'ХЬАЛХАР_ЭЛП_ДОККХА:', 'ПЕРВАЯ_БУКВА_БОЛЬШАЯ:', 'UCFIRST:' ],
	'lc'                        => [ '0', 'КЕГИЙЧУ_ЭЛПАШЦА:', 'МАЛЕНЬКИМИ_БУКВАМИ:', 'LC:' ],
	'uc'                        => [ '0', 'ДАККХИЙЧУ_ЭЛПАШЦА:', 'БОЛЬШИМИ_БУКВАМИ:', 'UC:' ],
	'raw'                       => [ '0', 'ТАЙАНЗА:', 'НЕОБРАБ:', 'RAW:' ],
	'displaytitle'              => [ '1', 'ГАЙТА_КОЬРТАМОГl', 'ПОКАЗАТЬ_ЗАГОЛОВОК', 'DISPLAYTITLE' ],
	'rawsuffix'                 => [ '1', 'Т', 'Н', 'R' ],
	'newsectionlink'            => [ '1', '__ХЬАЖОРГ_ОЦ_КЕРЛАЧУ_ДЕКЪАН__', '__ССЫЛКА_НА_НОВЫЙ_РАЗДЕЛ__', '__NEWSECTIONLINK__' ],
	'nonewsectionlink'          => [ '1', '__ЙОЦАШ_ХЬАЖОРГ_ОЦ_КЕРЛАЧУ_ДЕКЪАН__', '__БЕЗ_ССЫЛКИ_НА_НОВЫЙ_РАЗДЕЛ__', '__NONEWSECTIONLINK__' ],
	'currentversion'            => [ '1', 'ЙОЛШЙОЛУ_БАШХО', 'ТЕКУЩАЯ_ВЕРСИЯ', 'CURRENTVERSION' ],
	'urlencode'                 => [ '0', 'ИШАРЙИНА_МЕТТИГ:', 'ЗАКОДИРОВАННЫЙ_АДРЕС:', 'URLENCODE:' ],
	'anchorencode'              => [ '0', 'ИШАРЙАР_МЕТТИГАН', 'КОДИРОВАТЬ_МЕТКУ', 'ANCHORENCODE' ],
	'currenttimestamp'          => [ '1', 'КЪАСТАМ_ЙОЛУЧУ_ХАННА', 'ОТМЕТКА_ТЕКУЩЕГО_ВРЕМЕНИ', 'CURRENTTIMESTAMP' ],
	'localtimestamp'            => [ '1', 'КЪАСТАМ_МЕТТИГА_ХАННА', 'ОТМЕТКА_МЕСТНОГО_ВРЕМЕНИ', 'LOCALTIMESTAMP' ],
	'directionmark'             => [ '1', 'ХЬАЖОЧЕ_ХААМ', 'НАПРАВЛЕНИЕ_ПИСЬМА', 'DIRECTIONMARK', 'DIRMARK' ],
	'language'                  => [ '0', '#МОТТ', '#ЯЗЫК:', '#LANGUAGE:' ],
	'contentlanguage'           => [ '1', 'МОТТ_ЧУЛАЦАМ', 'ЯЗЫК_СОДЕРЖАНИЯ', 'CONTENTLANGUAGE', 'CONTENTLANG' ],
	'pagesinnamespace'          => [ '1', 'АГӀОНАШ_ОЦ_ЦӀЕРАШКАХЬ:', 'СТРАНИЦ_В_ПРОСТРАНСТВЕ_ИМЁН:', 'PAGESINNAMESPACE:', 'PAGESINNS:' ],
	'numberofadmins'            => [ '1', 'КУЬГАЛХОЙ_ДУКХАЛЛА', 'КОЛИЧЕСТВО_АДМИНИСТРАТОРОВ', 'NUMBEROFADMINS' ],
	'formatnum'                 => [ '0', 'ТЕРАХЬАН_БАРАМХlОТТОР', 'ФОРМАТИРОВАТЬ_ЧИСЛО', 'FORMATNUM' ],
	'padleft'                   => [ '0', 'ЙУЗА_ХАРЦЕ', 'ЗАПОЛНИТЬ_СЛЕВА', 'PADLEFT' ],
	'padright'                  => [ '0', 'ЙУЗА_БАКЪЕ', 'ЗАПОЛНИТЬ_СПРАВА', 'PADRIGHT' ],
	'special'                   => [ '0', 'белхан', 'гӀуллакхан', 'служебная', 'special' ],
	'defaultsort'               => [ '1', 'ЛИСТАР_ЦАХЬЕХОР', 'ДОГlА_ЛИСТАРАН', 'СОРТИРОВКА_ПО_УМОЛЧАНИЮ', 'КЛЮЧ_СОРТИРОВКИ', 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ],
	'filepath'                  => [ '0', 'ФАЙЛАН_ТӀЕ_НЕКЪ:', 'ПУТЬ_К_ФАЙЛУ:', 'FILEPATH:' ],
	'tag'                       => [ '0', 'къастам', 'къасто', 'къаст', 'метка', 'тег', 'тэг', 'tag' ],
	'hiddencat'                 => [ '1', '__КЪАЙЛАХА_ЙОЛУ_КАТЕГОРИ__', '__СКРЫТАЯ_КАТЕГОРИЯ__', '__HIDDENCAT__' ],
	'pagesincategory'           => [ '1', 'КАТЕГОРИ_ЧОХЬ_АГӀОНАШ_', 'СТРАНИЦ_В_КАТЕГОРИИ', 'PAGESINCATEGORY', 'PAGESINCAT' ],
	'pagesize'                  => [ '1', 'АГlОН_БАРАМ', 'РАЗМЕР_СТРАНИЦЫ', 'PAGESIZE' ],
	'index'                     => [ '1', '__МЕТТИГТЕРАХЬ__', '__ИНДЕКС__', '__INDEX__' ],
	'noindex'                   => [ '1', '__МЕТТИГТЕРАХЬ_ЙОЦАШ__', '__БЕЗ_ИНДЕКСА__', '__NOINDEX__' ],
	'numberingroup'             => [ '1', 'ТЕРАХЬ_ОЦ_ТОБАНЦА', 'ЧИСЛО_В_ГРУППЕ', 'NUMBERINGROUP', 'NUMINGROUP' ],
	'staticredirect'            => [ '1', '__СТАТИСТИКИН_ДӀАСХЬАЖОРГ__', '__СТАТИЧЕСКОЕ_ПЕРЕНАПРАВЛЕНИЕ__', '__STATICREDIRECT__' ],
	'protectionlevel'           => [ '1', 'ГӀАРОЛЛИ_БАРАМ', 'УРОВЕНЬ_ЗАЩИТЫ', 'PROTECTIONLEVEL' ],
	'formatdate'                => [ '0', 'терахьибарам', 'форматдаты', 'formatdate', 'dateformat' ],
	'url_path'                  => [ '0', 'ЙОМА', 'ПУТЬ', 'PATH' ],
	'url_wiki'                  => [ '0', 'ЧЕХКА', 'ВИКИ', 'WIKI' ],
];

$defaultDateFormat = 'ydm';

$datePreferences = [
	'default',
	'ydm',
	'ISO 8601',
];

$dateFormats = [
	'ydm time' => 'H:i',
	'ydm date' => 'Y, j F',
	'ydm both' => 'Y, j F, H:i',

	'ISO 8601 time' => 'xnH:xni:xns',
	'ISO 8601 date' => 'xnY-xnm-xnd',
	'ISO 8601 both' => 'xnY-xnm-xnd"T"xnH:xni:xns',
];
