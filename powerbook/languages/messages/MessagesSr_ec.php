<?php
/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Bjankuloski06
 * @author CERminator
 * @author Charmed94
 * @author FriedrickMILBarbarossa
 * @author Geitost
 * @author Helios13
 * @author Kaganer
 * @author Kale
 * @author Meno25
 * @author Milicevic01
 * @author Millosh
 * @author Nikola Smolenski
 * @author Rancher
 * @author Red Baron
 * @author Reedy
 * @author Sasa Stefanovic
 * @author Slaven Kosanovic
 * @author TheStefan12345
 * @author Јованвб
 * @author Жељко Тодоровић
 * @author Милан Јелисавчић
 * @author Михајло Анђелковић
 * @author לערי ריינהארט
 */

$namespaceNames = [
	NS_MEDIA            => 'Медиј',
	NS_SPECIAL          => 'Посебно',
	NS_TALK             => 'Разговор',
	NS_USER             => 'Корисник',
	NS_USER_TALK        => 'Разговор_са_корисником',
	NS_PROJECT_TALK     => 'Разговор_о_$1',
	NS_FILE             => 'Датотека',
	NS_FILE_TALK        => 'Разговор_о_датотеци',
	NS_MEDIAWIKI        => 'Медијавики',
	NS_MEDIAWIKI_TALK   => 'Разговор_о_Медијавикију',
	NS_TEMPLATE         => 'Шаблон',
	NS_TEMPLATE_TALK    => 'Разговор_о_шаблону',
	NS_HELP             => 'Помоћ',
	NS_HELP_TALK        => 'Разговор_о_помоћи',
	NS_CATEGORY         => 'Категорија',
	NS_CATEGORY_TALK    => 'Разговор_о_категорији',
];

$namespaceAliases = [
	# Aliases for Latin script namespaces
	"Medija"                  => NS_MEDIA,
	"Posebno"                 => NS_SPECIAL,
	"Razgovor"                => NS_TALK,
	"Korisnik"                => NS_USER,
	"Razgovor_sa_korisnikom"  => NS_USER_TALK,
	"Razgovor_o_$1"           => NS_PROJECT_TALK,
	"Slika"                   => NS_FILE,
	"Razgovor_o_slici"        => NS_FILE_TALK,
	"MedijaViki"              => NS_MEDIAWIKI,
	"Razgovor_o_MedijaVikiju" => NS_MEDIAWIKI_TALK,
	'Šablon'                  => NS_TEMPLATE,
	'Razgovor_o_šablonu'      => NS_TEMPLATE_TALK,
	'Pomoć'                   => NS_HELP,
	'Razgovor_o_pomoći'       => NS_HELP_TALK,
	'Kategorija'              => NS_CATEGORY,
	'Razgovor_o_kategoriji'   => NS_CATEGORY_TALK,

	'Медија'                  => NS_MEDIA,
	'Слика'                   => NS_FILE,
	'Разговор_о_слици'        => NS_FILE_TALK,
	'МедијаВики'              => NS_MEDIAWIKI,
	'Разговор_о_МедијаВикију' => NS_MEDIAWIKI_TALK,
];

$datePreferenceMigrationMap = [
	'default',
	'hh:mm d. month y.',
	'hh:mm d month y',
	'hh:mm dd.mm.yyyy',
	'hh:mm d.m.yyyy',
	'hh:mm d. mon y.',
	'hh:mm d mon y',
	'h:mm d. month y.',
	'h:mm d month y',
	'h:mm dd.mm.yyyy',
	'h:mm d.m.yyyy',
	'h:mm d. mon y.',
	'h:mm d mon y',
];

$specialPageAliases = [
	'Activeusers'               => [ 'АктивниКорисници', 'Активни_корисници' ],
	'Allmessages'               => [ 'СвеПоруке', 'Све_поруке' ],
	'Allpages'                  => [ 'Све_странице' ],
	'Ancientpages'              => [ 'НајстаријеСтранице', 'НајстаријиЧланци' ],
	'Badtitle'                  => [ 'Лош_наслов' ],
	'Blankpage'                 => [ 'ПразнаСтраница' ],
	'Block'                     => [ 'Блокирај', 'БлокирајИП', 'БлокирајКорисника' ],
	'BrokenRedirects'           => [ 'Покварена_преусмерења', 'Неисправна_преусмерења' ],
	'Categories'                => [ 'Категорије' ],
	'ChangePassword'            => [ 'ПромениЛозинку' ],
	'ComparePages'              => [ 'Упореди_странице' ],
	'Confirmemail'              => [ 'ПотврдиЕ-пошту', 'Потврда_е-поште' ],
	'Contributions'             => [ 'Доприноси', 'Прилози' ],
	'CreateAccount'             => [ 'ОтвориНалог', 'Отвори_налог' ],
	'DeletedContributions'      => [ 'ОбрисаниДоприноси' ],
	'DoubleRedirects'           => [ 'Двострука_преусмерења' ],
	'Export'                    => [ 'Извези' ],
	'Fewestrevisions'           => [ 'НајмањеИзмена', 'ЧланциСаНајмањеРевизија' ],
	'Filepath'                  => [ 'Путања_датотеке' ],
	'Import'                    => [ 'Увези' ],
	'BlockList'                 => [ 'СписакБлокираних', 'ПописБлокираних' ],
	'Listadmins'                => [ 'СписакАдминистратора', 'ПописАдминистратора', 'Списак_администратора' ],
	'Listbots'                  => [ 'СписакБотова', 'ПописБотова', 'Списак_ботова' ],
	'Listfiles'                 => [ 'СписакДатотека', 'СписакСлика', 'Списак_датотека' ],
	'Listgrouprights'           => [ 'СписакКорисничкихПрава', 'Списак_корисничких_права' ],
	'Listredirects'             => [ 'СписакПреусмерења', 'Списак_преусмерења' ],
	'ListDuplicatedFiles'       => [ 'СписакДупликата' ],
	'Listusers'                 => [ 'СписакКорисника', 'КорисничкиСписак', 'Списак_корисника', 'Кориснички_списак' ],
	'Lockdb'                    => [ 'ЗакључајБазу', 'Закључај_базу' ],
	'Log'                       => [ 'Извештај', 'Извештаји' ],
	'Lonelypages'               => [ 'Сирочићи' ],
	'Longpages'                 => [ 'ДугачкеСтране' ],
	'MergeHistory'              => [ 'СпојиИсторију', 'Споји_историју' ],
	'MIMEsearch'                => [ 'MIME_претрага' ],
	'Mostcategories'            => [ 'НајвишеКатегорија', 'ЧланциСаНајвишеКатегорија' ],
	'Mostimages'                => [ 'НајповезанијеДатотеке', 'НајповезанијеСлике' ],
	'Mostinterwikis'            => [ 'НајвишеМеђувикија' ],
	'Mostlinked'                => [ 'НајповезанијеСтране' ],
	'Mostlinkedcategories'      => [ 'НајповезанијеКатегорије' ],
	'Mostlinkedtemplates'       => [ 'НајповезанијиШаблони' ],
	'Mostrevisions'             => [ 'НајвишеРевизија', 'ЧланциСаНајвишеРевизија' ],
	'Movepage'                  => [ 'Премести', 'Преусмери', 'Премести_страницу' ],
	'Mycontributions'           => [ 'МојиДоприноси', 'Моји_доприноси', 'Моји_прилози' ],
	'MyLanguage'                => [ 'Мој_језик' ],
	'Mypage'                    => [ 'МојаСтраница', 'Моја_страница' ],
	'Mytalk'                    => [ 'МојРазговор', 'Мој_разговор' ],
	'Myuploads'                 => [ 'Моја_слања' ],
	'Newimages'                 => [ 'НовеДатотеке', 'НовиФајлови', 'НовеСлике' ],
	'Newpages'                  => [ 'НовеСтране' ],
	'PermanentLink'             => [ 'Привремена_веза' ],
	'Preferences'               => [ 'Подешавања', 'Поставке' ],
	'Protectedpages'            => [ 'ЗаштићенеСтранице', 'Заштићене_странице' ],
	'Protectedtitles'           => [ 'ЗаштићениНаслови', 'Заштићени_наслови' ],
	'Randompage'                => [ 'СлучајнаСтрана', 'Насумична_страница' ],
	'Randomredirect'            => [ 'СлучајноПреусмерење' ],
	'Recentchanges'             => [ 'СкорашњеИзмене', 'Скорашње_измене' ],
	'Search'                    => [ 'Претражи' ],
	'Shortpages'                => [ 'КраткеСтранице', 'КраткиЧланци' ],
	'Specialpages'              => [ 'СпецијалнеСтране', 'Посебне_странице' ],
	'Statistics'                => [ 'Статистике' ],
	'Tags'                      => [ 'Ознаке' ],
	'Unblock'                   => [ 'Деблокирај' ],
	'Uncategorizedcategories'   => [ 'НекатегорисанеКатегорије', 'КатегоријеБезКатегорија' ],
	'Uncategorizedimages'       => [ 'НекатегорисанеДатотеке', 'СликеБезКатегорија' ],
	'Uncategorizedpages'        => [ 'НекатегорисанеСтранице', 'ЧланциБезКатегорија', 'Чланци_без_категорија' ],
	'Uncategorizedtemplates'    => [ 'НекатегорисаниШаблони', 'ШаблониБезКатегорија' ],
	'Undelete'                  => [ 'Врати' ],
	'Unlockdb'                  => [ 'ОткључајБазу', 'Откључај_базу' ],
	'Unusedcategories'          => [ 'НеискоришћенеКатегорије' ],
	'Unusedimages'              => [ 'НеискоришћенеДатотеке', 'НеискоришћенеСлике' ],
	'Unusedtemplates'           => [ 'НеискоришћениШаблони' ],
	'Unwatchedpages'            => [ 'НенадгледанеСтранице' ],
	'Upload'                    => [ 'Пошаљи' ],
	'UploadStash'               => [ 'Складиште' ],
	'Userlogin'                 => [ 'Корисничка_пријава' ],
	'Userlogout'                => [ 'Корисничка_одјава' ],
	'Userrights'                => [ 'КорисничкаПрава' ],
	'Version'                   => [ 'Верзија', 'Издање' ],
	'Wantedcategories'          => [ 'ТраженеКатегорије' ],
	'Wantedfiles'               => [ 'ТраженеДатотеке', 'ТраженеСлике' ],
	'Wantedpages'               => [ 'ТраженеСтране' ],
	'Wantedtemplates'           => [ 'ТражениШаблони' ],
	'Watchlist'                 => [ 'СписакНадгледања', 'Списак_надгледања' ],
	'Whatlinkshere'             => [ 'ШтаВодиОвде', 'Шта_је_повезано_овде' ],
	'Withoutinterwiki'          => [ 'Без_међувикија' ],
];

$datePreferences = [
	'default',
	'hh:mm d. month y.',
	'hh:mm d month y',
	'hh:mm dd.mm.yyyy',
	'hh:mm d.m.yyyy',
	'hh:mm d. mon y.',
	'hh:mm d mon y',
	'h:mm d. month y.',
	'h:mm d month y',
	'h:mm dd.mm.yyyy',
	'h:mm d.m.yyyy',
	'h:mm d. mon y.',
	'h:mm d mon y',
];

$defaultDateFormat = 'hh:mm d. month y.';

$dateFormats = [
	/*
	'Није битно',
	'06:12, 5. јануар 2001.',
	'06:12, 5 јануар 2001',
	'06:12, 05.01.2001.',
	'06:12, 5.1.2001.',
	'06:12, 5. јан 2001.',
	'06:12, 5 јан 2001',
	'6:12, 5. јануар 2001.',
	'6:12, 5 јануар 2001',
	'6:12, 05.01.2001.',
	'6:12, 5.1.2001.',
	'6:12, 5. јан 2001.',
	'6:12, 5 јан 2001',
	 */

	'hh:mm d. month y. time'    => 'H:i',
	'hh:mm d month y time'      => 'H:i',
	'hh:mm dd.mm.yyyy time'     => 'H:i',
	'hh:mm d.m.yyyy time'       => 'H:i',
	'hh:mm d. mon y. time'      => 'H:i',
	'hh:mm d mon y time'        => 'H:i',
	'h:mm d. month y. time'     => 'G:i',
	'h:mm d month y time'       => 'G:i',
	'h:mm dd.mm.yyyy time'      => 'G:i',
	'h:mm d.m.yyyy time'        => 'G:i',
	'h:mm d. mon y. time'       => 'G:i',
	'h:mm d mon y time'         => 'G:i',

	'hh:mm d. month y. date'    => 'j. F Y.',
	'hh:mm d month y date'      => 'j F Y',
	'hh:mm dd.mm.yyyy date'     => 'd.m.Y',
	'hh:mm d.m.yyyy date'       => 'j.n.Y',
	'hh:mm d. mon y. date'      => 'j. M Y.',
	'hh:mm d mon y date'        => 'j M Y',
	'h:mm d. month y. date'     => 'j. F Y.',
	'h:mm d month y date'       => 'j F Y',
	'h:mm dd.mm.yyyy date'      => 'd.m.Y',
	'h:mm d.m.yyyy date'        => 'j.n.Y',
	'h:mm d. mon y. date'       => 'j. M Y.',
	'h:mm d mon y date'         => 'j M Y',

	'hh:mm d. month y. both'    => 'H:i, j. F Y.',
	'hh:mm d month y both'      => 'H:i, j F Y',
	'hh:mm dd.mm.yyyy both'     => 'H:i, d.m.Y',
	'hh:mm d.m.yyyy both'       => 'H:i, j.n.Y',
	'hh:mm d. mon y. both'      => 'H:i, j. M Y.',
	'hh:mm d mon y both'        => 'H:i, j M Y',
	'h:mm d. month y. both'     => 'G:i, j. F Y.',
	'h:mm d month y both'       => 'G:i, j F Y',
	'h:mm dd.mm.yyyy both'      => 'G:i, d.m.Y',
	'h:mm d.m.yyyy both'        => 'G:i, j.n.Y',
	'h:mm d. mon y. both'       => 'G:i, j. M Y.',
	'h:mm d mon y both'         => 'G:i, j M Y',
];

/* NOT USED IN STABLE VERSION */
$magicWords = [
	'redirect'                  => [ '0', '#Преусмери', '#преусмери', '#ПРЕУСМЕРИ', '#Преусмјери', '#преусмјери', '#ПРЕУСМЈЕРИ', '#redirect', '#REDIRECT' ],
	'notoc'                     => [ '0', '__БЕЗСАДРЖАЈА__', '__БЕЗ_САДРЖАЈА__', '__NOTOC__' ],
	'nogallery'                 => [ '0', '__БЕЗГАЛЕРИЈЕ__', '__БЕЗ_ГАЛЕРИЈЕ__', '__NOGALLERY__' ],
	'forcetoc'                  => [ '0', '__ФОРСИРАНИСАДРЖАЈ__', '__ФОРСИРАНИ_САДРЖАЈ__', '__ПРИМОРАНИСАДРЖАЈ__', '__ПРИМОРАНИ_САДРЖАЈ__', '__FORCETOC__' ],
	'toc'                       => [ '0', '__САДРЖАЈ__', '__TOC__' ],
	'noeditsection'             => [ '0', '__БЕЗИЗМЕНА__', '__БЕЗ_ИЗМЕНА__', '__БЕЗИЗМЈЕНА__', '__БЕЗ_ИЗМЈЕНА__', '__NOEDITSECTION__' ],
	'currentmonth'              => [ '1', 'ТРЕНУТНИМЕСЕЦ', 'ТРЕНУТНИ_МЕСЕЦ', 'ТЕКУЋИМЕСЕЦ', 'ТЕКУЋИ_МЕСЕЦ', 'CURRENTMONTH', 'CURRENTMONTH2' ],
	'currentmonth1'             => [ '1', 'ТРЕНУТНИМЕСЕЦ1', 'ТРЕНУТНИ_МЕСЕЦ1', 'ТЕКУЋИМЕСЕЦ1', 'ТЕКУЋИ_МЕСЕЦ1', 'CURRENTMONTH1' ],
	'currentmonthname'          => [ '1', 'ТРЕНУТНИМЕСЕЦИМЕ', 'ИМЕТЕКУЋЕГМЕСЕЦА', 'ИМЕ_ТЕКУЋЕГ_МЕСЕЦА', 'CURRENTMONTHNAME' ],
	'currentmonthnamegen'       => [ '1', 'ТРЕНУТНИМЕСЕЦГЕН', 'ТЕКУЋИМЕСЕЦГЕН', 'ТЕКУЋИ_МЕСЕЦ_ГЕН', 'CURRENTMONTHNAMEGEN' ],
	'currentmonthabbrev'        => [ '1', 'ТРЕНУТНИМЕСЕЦСКР', 'ТЕКУЋИМЕСЕЦСКР', 'ТЕКУЋИ_МЕСЕЦ_СКР', 'CURRENTMONTHABBREV' ],
	'currentday'                => [ '1', 'ТРЕНУТНИДАН', 'ТЕКУЋИДАН', 'ТЕКУЋИ_ДАН', 'CURRENTDAY' ],
	'currentday2'               => [ '1', 'ТЕКУЋИДАН2', 'ТЕКУЋИ_ДАН_2', 'CURRENTDAY2' ],
	'currentdayname'            => [ '1', 'ТРЕНУТНИДАНИМЕ', 'ИМЕТЕКУЋЕГДАНА', 'ИМЕ_ТЕКУЋЕГ_ДАНА', 'CURRENTDAYNAME' ],
	'currentyear'               => [ '1', 'ТРЕНУТНАГОДИНА', 'ТЕКУЋАГОДИНА', 'ТЕКУЋА_ГОДИНА', 'CURRENTYEAR' ],
	'currenttime'               => [ '1', 'ТРЕНУТНОВРЕМЕ', 'ТЕКУЋЕВРЕМЕ', 'ТЕКУЋЕ_ВРЕМЕ', 'CURRENTTIME' ],
	'currenthour'               => [ '1', 'ТЕКУЋИСАТ', 'ТЕКУЋИ_САТ', 'CURRENTHOUR' ],
	'localmonth'                => [ '1', 'ЛОКАЛНИМЕСЕЦ', 'ЛОКАЛНИ_МЕСЕЦ', 'LOCALMONTH', 'LOCALMONTH2' ],
	'localmonth1'               => [ '1', 'ЛОКАЛНИМЕСЕЦ2', 'ЛОКАЛНИ_МЕСЕЦ2', 'LOCALMONTH1' ],
	'localmonthname'            => [ '1', 'ИМЕЛОКАЛНОГМЕСЕЦА', 'ИМЕ_ЛОКАЛНОГ_МЕСЕЦА', 'LOCALMONTHNAME' ],
	'localmonthnamegen'         => [ '1', 'ЛОКАЛНИМЕСЕЦГЕН', 'ЛОКАЛНИ_МЕСЕЦ_ГЕН', 'LOCALMONTHNAMEGEN' ],
	'localmonthabbrev'          => [ '1', 'ЛОКАЛНИМЕСЕЦСКР', 'ЛОКАЛНИ_МЕСЕЦ_СКР', 'LOCALMONTHABBREV' ],
	'localday'                  => [ '1', 'ЛОКАЛНИДАН', 'ЛОКАЛНИ_ДАН', 'LOCALDAY' ],
	'localday2'                 => [ '1', 'ЛОКАЛНИДАН2', 'ЛОКАЛНИ_ДАН2', 'LOCALDAY2' ],
	'localdayname'              => [ '1', 'ИМЕЛОКАЛНОГДАНА', 'ИМЕ_ЛОКАЛНОГ_ДАНА', 'LOCALDAYNAME' ],
	'localyear'                 => [ '1', 'ЛОКАЛНАГОДИНА', 'ЛОКАЛНА_ГОДИНА', 'LOCALYEAR' ],
	'localtime'                 => [ '1', 'ЛОКАЛНОВРЕМЕ', 'ЛОКАЛНО_ВРЕМЕ', 'LOCALTIME' ],
	'localhour'                 => [ '1', 'ЛОКАЛНИСАТ', 'ЛОКАЛНИ_САТ', 'LOCALHOUR' ],
	'numberofpages'             => [ '1', 'БРОЈСТРАНИЦА', 'БРОЈ_СТРАНИЦА', 'NUMBEROFPAGES' ],
	'numberofarticles'          => [ '1', 'БРОЈЧЛАНАКА', 'БРОЈ_ЧЛАНАКА', 'NUMBEROFARTICLES' ],
	'numberoffiles'             => [ '1', 'БРОЈДАТОТЕКА', 'БРОЈ_ДАТОТЕКА', 'БРОЈФАЈЛОВА', 'БРОЈ_ФАЈЛОВА', 'NUMBEROFFILES' ],
	'numberofusers'             => [ '1', 'БРОЈКОРИСНИКА', 'БРОЈ_КОРИСНИКА', 'NUMBEROFUSERS' ],
	'numberofactiveusers'       => [ '1', 'БРОЈАКТИВНИХКОРИСНИКА', 'БРОЈ_АКТИВНИХ_КОРИСНИКА', 'NUMBEROFACTIVEUSERS' ],
	'numberofedits'             => [ '1', 'БРОЈИЗМЕНА', 'БРОЈ_ИЗМЕНА', 'NUMBEROFEDITS' ],
	'pagename'                  => [ '1', 'ИМЕСТРАНИЦЕ', 'ИМЕ_СТРАНИЦЕ', 'СТРАНИЦА', 'PAGENAME' ],
	'pagenamee'                 => [ '1', 'ИМЕНАСТРАНИЦА', 'ИМЕНА_СТРАНИЦА', 'СТРАНИЦЕ', 'PAGENAMEE' ],
	'namespace'                 => [ '1', 'ИМЕНСКИПРОСТОР', 'ИМЕНСКИ_ПРОСТОР', 'NAMESPACE' ],
	'namespacee'                => [ '1', 'ИМЕНСКИПРОСТОРИ', 'ИМЕНСКИ_ПРОСТОРИ', 'NAMESPACEE' ],
	'namespacenumber'           => [ '1', 'БРОЈИМЕНСКОГПРОСТОРА', 'NAMESPACENUMBER' ],
	'talkspace'                 => [ '1', 'РАЗГОВОР', 'TALKSPACE' ],
	'talkspacee'                => [ '1', 'РАЗГОВОРИ', 'TALKSPACEE' ],
	'subjectspace'              => [ '1', 'ИМЕНСКИПРОСТОРЧЛАНКА', 'ИМЕНСКИ_ПРОСТОР_ЧЛАНКА', 'SUBJECTSPACE', 'ARTICLESPACE' ],
	'subjectspacee'             => [ '1', 'ИМЕНСКИПРОСТОРЧЛАНАКА', 'ИМЕНСКИ_ПРОСТОР_ЧЛАНАКА', 'SUBJECTSPACEE', 'ARTICLESPACEE' ],
	'fullpagename'              => [ '1', 'ПУНОИМЕСТРАНИЦЕ', 'ПУНОИМЕСТРАНЕ', 'ПУНО_ИМЕ_СТРАНИЦЕ', 'ПУНО_ИМЕ_СТРАНЕ', 'FULLPAGENAME' ],
	'fullpagenamee'             => [ '1', 'ПУНАИМЕНАСТРАНИЦА', 'ПУНАИМЕНАСТРАНА', 'ПУНА_ИМЕНА_СТРАНИЦА', 'ПУНА_ИМЕНА_СТРАНА', 'FULLPAGENAMEE' ],
	'subpagename'               => [ '1', 'ИМЕПОДСТРАНИЦЕ', 'ИМЕПОДСТРАНЕ', 'ИМЕ_ПОДСТРАНИЦЕ', 'ИМЕ_ПОДСТРАНЕ', 'SUBPAGENAME' ],
	'subpagenamee'              => [ '1', 'ИМЕНАПОДСТРАНИЦА', 'ИМЕНАПОДСТРАНА', 'ИМЕНА_ПОДСТРАНИЦА', 'ИМЕНА_ПОДСТРАНА', 'SUBPAGENAMEE' ],
	'basepagename'              => [ '1', 'ИМЕОСНОВЕ', 'ИМЕ_ОСНОВЕ', 'BASEPAGENAME' ],
	'basepagenamee'             => [ '1', 'ИМЕНАОСНОВА', 'ИМЕНА_ОСНОВА', 'BASEPAGENAMEE' ],
	'talkpagename'              => [ '1', 'ИМЕРАЗГОВОРА', 'ИМЕ_РАЗГОВОРА', 'TALKPAGENAME' ],
	'talkpagenamee'             => [ '1', 'ИМЕНАРАЗГОВОРА', 'ИМЕНА_РАЗГОВОРА', 'TALKPAGENAMEE' ],
	'subjectpagename'           => [ '1', 'ИМЕЧЛАНКА', 'ИМЕ_ЧЛАНКА', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ],
	'subjectpagenamee'          => [ '1', 'ИМЕНАЧЛАНАКА', 'ИМЕНА_ЧЛАНАКА', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ],
	'msg'                       => [ '0', 'ПОР:', 'MSG:' ],
	'subst'                     => [ '0', 'ЗАМЕНИ:', 'ЗАМЕНА:', 'СУБСТ', 'SUBST:' ],
	'safesubst'                 => [ '0', 'БЕЗБЕДНАЗАМЕНА', 'БЕЗБЕДНА_ЗАМЕНА', 'SAFESUBST:' ],
	'msgnw'                     => [ '0', 'НВПОР:', 'MSGNW:' ],
	'img_thumbnail'             => [ '1', 'мини', 'умањено', 'thumbnail', 'thumb' ],
	'img_manualthumb'           => [ '1', 'мини=$1', 'умањено=$1', 'thumbnail=$1', 'thumb=$1' ],
	'img_right'                 => [ '1', 'десно', 'д', 'right' ],
	'img_left'                  => [ '1', 'лево', 'л', 'left' ],
	'img_none'                  => [ '1', 'без', 'н', 'none' ],
	'img_width'                 => [ '1', '$1пискел', '$1п', '$1p', '$1px' ],
	'img_center'                => [ '1', 'центар', 'ц', 'c', 'center', 'centre' ],
	'img_framed'                => [ '1', 'оквир', 'рам', 'framed', 'enframed', 'frame' ],
	'img_frameless'             => [ '1', 'безоквира', 'без_оквира', 'безрама', 'без_рама', 'frameless' ],
	'img_page'                  => [ '1', 'страница=$1', 'страна=$1', 'страница_$1', 'страна_$1', 'page=$1', 'page $1' ],
	'img_upright'               => [ '1', 'усправно', 'усправно=$1', 'усправно_$1', 'upright', 'upright=$1', 'upright $1' ],
	'img_border'                => [ '1', 'ивица', 'оивичено', 'border' ],
	'img_baseline'              => [ '1', 'основа', 'baseline' ],
	'img_sub'                   => [ '1', 'под', 'sub' ],
	'img_super'                 => [ '1', 'супер', 'super', 'sup' ],
	'img_top'                   => [ '1', 'врх', 'top' ],
	'img_text_top'              => [ '1', 'врхтекста', 'врх_текста', 'text-top' ],
	'img_middle'                => [ '1', 'средина', 'middle' ],
	'img_bottom'                => [ '1', 'дно', 'bottom' ],
	'img_text_bottom'           => [ '1', 'срединатекста', 'средина_текста', 'text-bottom' ],
	'img_link'                  => [ '1', 'веза=$1', 'link=$1' ],
	'img_alt'                   => [ '1', 'алт=$1', 'alt=$1' ],
	'int'                       => [ '0', 'ИНТ:', 'INT:' ],
	'sitename'                  => [ '1', 'ИМЕСАЈТА', 'SITENAME' ],
	'ns'                        => [ '0', 'ИП:', 'NS:' ],
	'localurl'                  => [ '0', 'ЛОКАЛНААДРЕСА:', 'ЛОКАЛНА_АДРЕСА:', 'LOCALURL:' ],
	'localurle'                 => [ '0', 'ЛОКАЛНЕАДРЕСЕ:', 'ЛОКАЛНЕ_АДРЕСЕ:', 'LOCALURLE:' ],
	'articlepath'               => [ '0', 'ПУТАЊАЧЛАНКА', 'ПУТАЊА_ЧЛАНКА', 'ARTICLEPATH' ],
	'pageid'                    => [ '0', 'БРОЈСТРАНИЦЕ', 'PAGEID' ],
	'server'                    => [ '0', 'СЕРВЕР', 'SERVER' ],
	'servername'                => [ '0', 'ИМЕСЕРВЕРА', 'ИМЕ_СЕРВЕРА', 'SERVERNAME' ],
	'scriptpath'                => [ '0', 'СКРИПТА', 'SCRIPTPATH' ],
	'stylepath'                 => [ '0', 'ПУТАЊАСТИЛА', 'ПУТАЊА_СТИЛА', 'STYLEPATH' ],
	'grammar'                   => [ '0', 'ГРАМАТИКА:', 'GRAMMAR:' ],
	'gender'                    => [ '0', 'РОД:', 'ЛИЦЕ:', 'GENDER:' ],
	'notitleconvert'            => [ '0', '__БЕЗКН__', '__BEZKN__', '__NOTITLECONVERT__', '__NOTC__' ],
	'nocontentconvert'          => [ '0', '__БЕЗКС__', '__БЕЗЦЦ__', '__BEZKS__', '__NOCONTENTCONVERT__', '__NOCC__' ],
	'currentweek'               => [ '1', 'ТРЕНУТНАНЕДЕЉА', 'ТРЕНУТНА_НЕДЕЉА', 'ТЕКУЋАНЕДЕЉА', 'ТЕКУЋА_НЕДЕЉА', 'CURRENTWEEK' ],
	'currentdow'                => [ '1', 'ТРЕНУТНИДОВ', 'ТЕКУЋИДУН', 'CURRENTDOW' ],
	'localweek'                 => [ '1', 'ЛОКАЛНАНЕДЕЉА', 'ЛОКАЛНА_НЕДЕЉА', 'LOCALWEEK' ],
	'localdow'                  => [ '1', 'ЛОКАЛНИДУН', 'LOCALDOW' ],
	'revisionid'                => [ '1', 'ИДРЕВИЗИЈЕ', 'ИД_РЕВИЗИЈЕ', 'REVISIONID' ],
	'revisionday'               => [ '1', 'ДАНИЗМЕНЕ', 'ДАН_ИЗМЕНЕ', 'REVISIONDAY' ],
	'revisionday2'              => [ '1', 'ДАНИЗМЕНЕ2', 'ДАН_ИЗМЕНЕ2', 'REVISIONDAY2' ],
	'revisionmonth'             => [ '1', 'МЕСЕЦИЗМЕНЕ', 'МЕСЕЦ_ИЗМЕНЕ', 'REVISIONMONTH' ],
	'revisionmonth1'            => [ '1', 'МЕСЕЦИЗМЕНЕ1', 'МЕСЕЦ_ИЗМЕНЕ1', 'REVISIONMONTH1' ],
	'revisionyear'              => [ '1', 'ГОДИНАИЗМЕНЕ', 'ГОДИНА_ИЗМЕНЕ', 'REVISIONYEAR' ],
	'revisiontimestamp'         => [ '1', 'ВРЕМЕИЗМЕНЕ', 'ВРЕМЕ_ИЗМЕНЕ', 'REVISIONTIMESTAMP' ],
	'revisionuser'              => [ '1', 'КОРИСНИКИЗМЕНЕ', 'КОРИСНИК_ИЗМЕНЕ', 'REVISIONUSER' ],
	'plural'                    => [ '0', 'МНОЖИНА:', 'PLURAL:' ],
	'fullurl'                   => [ '0', 'ПУНУРЛ:', 'ЦЕЛААДРЕСА', 'ЦЕЛА_АДРЕСА', 'FULLURL:' ],
	'fullurle'                  => [ '0', 'ПУНУРЛЕ:', 'ЦЕЛЕАДРЕСЕ', 'ЦЕЛЕ_АДРЕСЕ', 'FULLURLE:' ],
	'lcfirst'                   => [ '0', 'ЛЦПРВИ:', 'LCFIRST:' ],
	'ucfirst'                   => [ '0', 'УЦПРВИ:', 'UCFIRST:' ],
	'lc'                        => [ '0', 'ЛЦ:', 'LC:' ],
	'uc'                        => [ '0', 'УЦ:', 'UC:' ],
	'raw'                       => [ '0', 'ЧИСТ:', 'RAW:' ],
	'displaytitle'              => [ '1', 'НАЗИВПРИКАЗА', 'НАЗИВ_ПРИКАЗА', 'DISPLAYTITLE' ],
	'rawsuffix'                 => [ '1', 'Р', 'R' ],
	'newsectionlink'            => [ '1', '__НОВАВЕЗАОДЕЉКА__', '__НОВА_ВЕЗА_ОДЕЉКА__', '__NEWSECTIONLINK__' ],
	'nonewsectionlink'          => [ '1', '__БЕЗНОВЕВЕЗЕОДЕЉКА__', '__БЕЗ_НОВЕ_ВЕЗЕ_ОДЕЉКА__', '__NONEWSECTIONLINK__' ],
	'currentversion'            => [ '1', 'ТЕКУЋЕИЗДАЊЕ', 'ТЕКУЋЕ_ИЗДАЊЕ', 'CURRENTVERSION' ],
	'urlencode'                 => [ '0', 'КОДИРАЊЕАДРЕСЕ', 'КОДИРАЊЕ_АДРЕСЕ', 'URLENCODE:' ],
	'anchorencode'              => [ '0', 'КОДИРАЊЕВЕЗЕ', 'КОДИРАЊЕ_ВЕЗЕ', 'ANCHORENCODE' ],
	'currenttimestamp'          => [ '1', 'ТЕКУЋИОТИСАКВРЕМЕНА', 'ТЕКУЋИ_ОТИСАК_ВРЕМЕНА', 'CURRENTTIMESTAMP' ],
	'localtimestamp'            => [ '1', 'ОТИСАКВРЕМЕНА', 'ОТИСАК_ВРЕМЕНА', 'LOCALTIMESTAMP' ],
	'directionmark'             => [ '1', 'СМЕРОЗНАКЕ', 'СМЕР	_ОЗНАКЕ', 'DIRECTIONMARK', 'DIRMARK' ],
	'contentlanguage'           => [ '1', 'ЈЕЗИКСАДРЖАЈА', 'ЈЕЗИК_САДРЖАЈА', 'CONTENTLANGUAGE', 'CONTENTLANG' ],
	'pagesinnamespace'          => [ '1', 'СТРАНИЦАУИМЕНСКОМПРОСТОРУ', 'СТРАНАУИМЕНСКОМПРОСТОРУ', 'СТРАНИЦА_У_ИМЕНСКОМ_ПРОСТОРУ', 'СТРАНА_У_ИМЕНСКОМ_ПРОСТОРУ', 'PAGESINNAMESPACE:', 'PAGESINNS:' ],
	'numberofadmins'            => [ '1', 'БРОЈАДМИНА', 'БРОЈ_АДМИНА', 'NUMBEROFADMINS' ],
	'padleft'                   => [ '0', 'ПОРАВНАЈЛЕВО', 'ПОРАВНАЈ_ЛЕВО', 'PADLEFT' ],
	'padright'                  => [ '0', 'ПОРАВНАЈДЕСНО', 'ПОРАВНАЈ_ДЕСНО', 'PADRIGHT' ],
	'special'                   => [ '0', 'посебно', 'special' ],
	'filepath'                  => [ '0', 'ПУТАЊАДАТОТЕКЕ', 'ПУТАЊА_ДАТОТЕКЕ', 'FILEPATH:' ],
	'tag'                       => [ '0', 'ознака', 'tag' ],
	'hiddencat'                 => [ '1', '__САКРИВЕНАКАТ__', '__HIDDENCAT__' ],
	'pagesincategory'           => [ '1', 'СТРАНИЦАУКАТЕГОРИЈИ', 'СТРАНАУКАТЕГОРИЈИ', 'СТРАНИЦА_У_КАТЕГОРИЈИ', 'СТРАНА_У_КАТЕГОРИЈИ', 'PAGESINCATEGORY', 'PAGESINCAT' ],
	'pagesize'                  => [ '1', 'ВЕЛИЧИНАСТРАНИЦЕ', 'ВЕЛИЧИНАСТРАНЕ', 'ВЕЛИЧИНА_СТРАНИЦЕ', 'ВЕЛИЧИНА_СТРАНЕ', 'PAGESIZE' ],
	'index'                     => [ '1', '__ИНДЕКС__', '__INDEX__' ],
	'noindex'                   => [ '1', '__БЕЗИНДЕКСА__', '__БЕЗ_ИНДЕКСА__', '__NOINDEX__' ],
	'numberingroup'             => [ '1', 'БРОЈУГРУПИ', 'БРОЈ_У_ГРУПИ', 'NUMBERINGROUP', 'NUMINGROUP' ],
	'staticredirect'            => [ '1', '__СТАТИЧКОПРЕУСМЕРЕЊЕ__', 'СТАТИЧКО_ПРЕУСМЕРЕЊЕ', '__STATICREDIRECT__' ],
	'protectionlevel'           => [ '1', 'НИВОЗАШТИТЕ', 'НИВО_ЗАШТИТЕ', 'PROTECTIONLEVEL' ],
	'formatdate'                => [ '0', 'форматдатума', 'формат_датума', 'formatdate', 'dateformat' ],
	'url_path'                  => [ '0', 'ПУТАЊА', 'PATH' ],
	'url_wiki'                  => [ '0', 'ВИКИ', 'WIKI' ],
	'url_query'                 => [ '0', 'РЕДОСЛЕД', 'QUERY' ],
	'pagesincategory_all'       => [ '0', 'све', 'all' ],
	'pagesincategory_files'     => [ '0', 'датотеке', 'files' ],
];
$separatorTransformTable = [ ',' => '.', '.' => ',' ];
