<?php
/** толышә зывон (толышә зывон)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Erdemaslancan
 * @author Ganbarzada
 * @author Tuzkozbir
 * @author Гусейн
 */

$namespaceNames = [
	NS_MEDIA            => 'Medja',
	NS_SPECIAL          => 'Xususi',
	NS_TALK             => 'Nopegət',
	NS_USER             => 'Okoədə',
	NS_USER_TALK        => 'Okoədəj_nopegət',
	NS_PROJECT_TALK     => '$1_Nopegət',
	NS_FILE             => 'Fajl',
	NS_FILE_TALK        => 'Fajl_nopegət',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'MediaWiki_nopegət',
	NS_TEMPLATE         => 'Numunə',
	NS_TEMPLATE_TALK    => 'Numunə_nopegət',
	NS_HELP             => 'Koməg',
	NS_HELP_TALK        => 'Koməg_nopegət',
	NS_CATEGORY         => 'Tispir',
	NS_CATEGORY_TALK    => 'Tispir_nopegət',
];

$namespaceAliases = [
	'$1_Nopegətəti'    => NS_PROJECT_TALK,
	'Fajli_nopegət'    => NS_FILE_TALK,
	'Koməgi_nopegət'   => NS_HELP_TALK,
	'Tispiron_nopegət' => NS_CATEGORY_TALK,
];

$specialPageAliases = [
	'Allpages'                  => [ 'Һәммәј_сәһифон' ],
	'Blankpage'                 => [ 'Тәјлијә_сәһифә' ],
	'ChangeEmail'               => [ 'Е-номә_дәгиш_кардеј' ],
	'ChangePassword'            => [ 'Пароли_дәгиш_кардеј' ],
	'Emailuser'                 => [ 'Бә_иштирокәкә_номә_вығандеј' ],
	'Longpages'                 => [ 'Дырозә_сәһифон' ],
	'Movepage'                  => [ 'Сәһифә_номи_дәгиш_кардеј' ],
	'MyLanguage'                => [ 'Чымы_зывон' ],
	'Mypage'                    => [ 'Чымы_сәһифә' ],
	'Mytalk'                    => [ 'Чымы_мызокирә' ],
	'Myuploads'                 => [ 'Чымы_бо_жә_быә_чијон' ],
	'Newimages'                 => [ 'Нујә_фајлон' ],
	'Newpages'                  => [ 'Нујә_сәһифон' ],
	'PasswordReset'             => [ 'Пароли_ләғв_кардеј' ],
	'Protectedpages'            => [ 'Мыдофијә_кардә_быә_сәһифон' ],
	'Protectedtitles'           => [ 'Мыдофијә_кардә_быә_номон' ],
	'Randompage'                => [ 'Рајрастә_сәһифә._Рајрастә' ],
	'Recentchanges'             => [ 'Ән_нујә_дәгишон' ],
	'Recentchangeslinked'       => [ 'Ангыл_кардә_быә_дәгишон' ],
	'Revisiondelete'            => [ 'Рәдд_кардә_быә_дәгишон' ],
	'Search'                    => [ 'Нәве' ],
	'Shortpages'                => [ 'Кыртә_сәһифон' ],
	'Tags'                      => [ 'Нышонон' ],
	'Undelete'                  => [ 'Бәрпо_кардеј' ],
	'Version'                   => [ 'Рәвојәт' ],
];

$magicWords = [
	'redirect'                  => [ '0', '#ТОЖӘДӘН_ИСТИҒОМӘТ_ДОЈ', '#REDIRECT' ],
	'notoc'                     => [ '0', '__БЕМЫНДӘРИҸОТ__', '__NOTOC__' ],
	'forcetoc'                  => [ '0', '__МӘҸБУРИЈӘ_МЫНДӘРИҸОТ__', '__FORCETOC__' ],
	'toc'                       => [ '0', '__МЫНДӘРИҸОТ__', '__TOC__' ],
	'currentmonth'              => [ '1', 'ЕСӘТНӘ_МАНГ', 'ЕСӘТНӘ_МАНГ_2', 'CURRENTMONTH', 'CURRENTMONTH2' ],
	'currentmonth1'             => [ '1', 'ЕСӘТНӘ_МАНГ_1', 'CURRENTMONTH1' ],
	'currentmonthname'          => [ '1', 'ЕСӘТНӘ_МАНГИ_НОМ', 'CURRENTMONTHNAME' ],
	'currentmonthnamegen'       => [ '1', 'ЕСӘТНӘ_МАНГИ_НОМ_ҸИНС', 'CURRENTMONTHNAMEGEN' ],
	'currentday'                => [ '1', 'ЕСӘТНӘ_РУЖ', 'CURRENTDAY' ],
	'currentday2'               => [ '1', 'ЕСӘТНӘ_РУЖ_2', 'CURRENTDAY2' ],
	'currentdayname'            => [ '1', 'ЕСӘТНӘ_РУЖИ_НОМ', 'CURRENTDAYNAME' ],
	'currentyear'               => [ '1', 'ЕСӘТНӘ_СОР', 'CURRENTYEAR' ],
	'currenttime'               => [ '1', 'ЕСӘТНӘ_ВАХТ', 'CURRENTTIME' ],
	'currenthour'               => [ '1', 'ЕСӘТНӘ_СААТ', 'CURRENTHOUR' ],
	'localmonth'                => [ '1', 'БУМИНӘ_МАНГ', 'БУМИНӘ_МАНГ_2', 'LOCALMONTH', 'LOCALMONTH2' ],
	'localmonth1'               => [ '1', 'БУМИНӘ_МАНГ_1', 'LOCALMONTH1' ],
	'localmonthname'            => [ '1', 'БУМИНӘ_МАНГИ_НОМ', 'LOCALMONTHNAME' ],
	'localmonthnamegen'         => [ '1', 'БУМИНӘ_МАНГИ_НОМ_ҸИНС', 'LOCALMONTHNAMEGEN' ],
	'localday'                  => [ '1', 'БУМИНӘ_РУЖ', 'LOCALDAY' ],
	'localday2'                 => [ '1', 'БУМИНӘ_РУЖ_2', 'LOCALDAY2' ],
	'localdayname'              => [ '1', 'БУМИНӘ_РУЖИ_НОМ', 'LOCALDAYNAME' ],
	'localyear'                 => [ '1', 'БУМИНӘ_СОР', 'LOCALYEAR' ],
	'localtime'                 => [ '1', 'БУМИНӘ_ВАХТ', 'LOCALTIME' ],
	'localhour'                 => [ '1', 'БУМИНӘ_СААТ', 'LOCALHOUR' ],
	'numberofpages'             => [ '1', 'СӘҺИФОН_ҒӘДӘР', 'NUMBEROFPAGES' ],
	'numberofarticles'          => [ '1', 'МӘҒОЛОН_ҒӘДӘР', 'NUMBEROFARTICLES' ],
	'numberoffiles'             => [ '1', 'ФАЈЛОН_ҒӘДӘР', 'NUMBEROFFILES' ],
	'numberofusers'             => [ '1', 'ИШТИРОКӘКОН_ҒӘДӘР', 'NUMBEROFUSERS' ],
	'numberofactiveusers'       => [ '1', 'ТИЛИКӘ_ИШТИРОКӘКОН_ҒӘДӘР', 'NUMBEROFACTIVEUSERS' ],
	'numberofedits'             => [ '1', 'ДӘГИШОН_ҒӘДӘР', 'NUMBEROFEDITS' ],
	'pagename'                  => [ '1', 'СӘҺИФӘ_НОМ', 'PAGENAME' ],
	'pagenamee'                 => [ '1', 'СӘҺИФӘ_НОМ_2', 'PAGENAMEE' ],
	'namespace'                 => [ '1', 'НОМОН_МӘКОН', 'NAMESPACE' ],
	'namespacee'                => [ '1', 'НОМОН_МӘКОН_2', 'NAMESPACEE' ],
	'namespacenumber'           => [ '1', 'НОМОН_МӘКОН_ҒӘДӘР', 'NAMESPACENUMBER' ],
	'talkspace'                 => [ '1', 'МЫЗОКИРОН_МӘКОН', 'TALKSPACE' ],
	'talkspacee'                => [ '1', 'МЫЗОКИРОН_МӘКОН_2', 'TALKSPACEE' ],
	'subjectspace'              => [ '1', 'МӘҒОЛОН_МӘКОН', 'SUBJECTSPACE', 'ARTICLESPACE' ],
	'subjectspacee'             => [ '1', 'МӘҒОЛОН_МӘКОН_2', 'SUBJECTSPACEE', 'ARTICLESPACEE' ],
	'fullpagename'              => [ '1', 'СӘҺИФӘ_ПУРӘ_НОМ', 'FULLPAGENAME' ],
	'fullpagenamee'             => [ '1', 'СӘҺИФӘ_ПУРӘ_НОМ_2', 'FULLPAGENAMEE' ],
	'subpagename'               => [ '1', 'ЖИНТОНӘДӘ_СӘҺИФӘ_НОМ', 'SUBPAGENAME' ],
	'subpagenamee'              => [ '1', 'ЖИНТОНӘДӘ_СӘҺИФӘ_НОМ_2', 'SUBPAGENAMEE' ],
	'basepagename'              => [ '1', 'СӘҺИФӘ_НОМИ_ӘСОС', 'BASEPAGENAME' ],
	'basepagenamee'             => [ '1', 'СӘҺИФӘ_НОМИ_ӘСОС_2', 'BASEPAGENAMEE' ],
	'talkpagename'              => [ '1', 'МЫЗОКИРӘ_СӘҺИФӘ_НОМ', 'TALKPAGENAME' ],
	'talkpagenamee'             => [ '1', 'МЫЗОКИРӘ_СӘҺИФӘ_НОМ_2', 'TALKPAGENAMEE' ],
	'subjectpagename'           => [ '1', 'МӘҒОЛӘ_СӘҺИФӘ_НОМ', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ],
	'subjectpagenamee'          => [ '1', 'МӘҒОЛӘ_СӘҺИФӘ_НОМ_2', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ],
	'msg'                       => [ '0', 'ХӘБӘ:', 'MSG:' ],
	'subst'                     => [ '0', 'ӘВӘЗ_КАРДЕ:', 'SUBST:' ],
	'msgnw'                     => [ '0', 'БЕВИКИ_ХӘБӘ:', 'MSGNW:' ],
	'img_thumbnail'             => [ '1', 'миниатјур', 'thumbnail', 'thumb' ],
	'img_manualthumb'           => [ '1', 'миниатјур=$1', 'thumbnail=$1', 'thumb=$1' ],
	'img_right'                 => [ '1', 'росто', 'right' ],
	'img_left'                  => [ '1', 'чәпо', 'left' ],
	'img_none'                  => [ '1', 'бе', 'none' ],
	'img_width'                 => [ '1', '$1пкс', '$1px' ],
	'img_center'                => [ '1', 'мәрәнго', 'center', 'centre' ],
	'img_page'                  => [ '1', 'сәһифә=$1', 'сәһифә_$1', 'page=$1', 'page $1' ],
	'sitename'                  => [ '1', 'САЈТИ_НОМ', 'SITENAME' ],
	'localurl'                  => [ '0', 'БУМИНӘ_УНВОН:', 'LOCALURL:' ],
	'localurle'                 => [ '0', 'БУМИНӘ_УНВОН_2:', 'LOCALURLE:' ],
	'currentweek'               => [ '1', 'ЕСӘТНӘ_ҺАФТӘ', 'CURRENTWEEK' ],
	'currentdow'                => [ '1', 'ЕСӘТНӘ_ҺАФТӘ_РУЖ', 'CURRENTDOW' ],
	'localweek'                 => [ '1', 'БУМИНӘ_ҺАФТӘ', 'LOCALWEEK' ],
	'localdow'                  => [ '1', 'БУМИНӘ_ҺАФТӘ_РУЖ', 'LOCALDOW' ],
	'revisionid'                => [ '1', 'РӘВОЈӘТИ_ID', 'REVISIONID' ],
	'revisionday'               => [ '1', 'РӘВОЈӘТИ_РУЖ', 'REVISIONDAY' ],
	'revisionday2'              => [ '1', 'РӘВОЈӘТИ_РУЖ_2', 'REVISIONDAY2' ],
	'revisionmonth'             => [ '1', 'РӘВОЈӘТИ_МАНГ', 'REVISIONMONTH' ],
	'revisionmonth1'            => [ '1', 'РӘВОЈӘТИ_МАНГ_2', 'REVISIONMONTH1' ],
	'revisionyear'              => [ '1', 'РӘВОЈӘТИ_СОР', 'REVISIONYEAR' ],
	'revisiontimestamp'         => [ '1', 'РӘВОЈӘТИ_ВАХТИ_ҒЕЈД', 'REVISIONTIMESTAMP' ],
	'revisionuser'              => [ '1', 'ИШТИРОКӘКӘ_РӘВОЈӘТ', 'REVISIONUSER' ],
	'fullurl'                   => [ '0', 'ПУРӘ_УНВОН:', 'FULLURL:' ],
	'fullurle'                  => [ '0', 'ПУРӘ_УНВОН_2:', 'FULLURLE:' ],
	'currentversion'            => [ '1', 'ЕСӘТНӘ_РӘВОЈӘТ', 'CURRENTVERSION' ],
	'currenttimestamp'          => [ '1', 'ЕСӘТНӘ_ВАХТИ_ҒЕЈД', 'CURRENTTIMESTAMP' ],
	'localtimestamp'            => [ '1', 'БУМИНӘ_ВАХТИ_ҒЕЈД', 'LOCALTIMESTAMP' ],
	'directionmark'             => [ '1', 'НОМӘ_ИСТИҒОМӘТ', 'DIRECTIONMARK', 'DIRMARK' ],
	'language'                  => [ '0', '#ЗЫВОН:', '#LANGUAGE:' ],
	'contentlanguage'           => [ '1', 'МЫҒДОРИ_ЗЫВОН', 'CONTENTLANGUAGE', 'CONTENTLANG' ],
	'pagesinnamespace'          => [ '1', 'СӘҺИФОН_БӘ_НОМОН_МӘКОНӘДӘ:', 'PAGESINNAMESPACE:', 'PAGESINNS:' ],
	'pagesize'                  => [ '1', 'СӘҺИФӘ_ПАМЈӘ', 'PAGESIZE' ],
	'url_wiki'                  => [ '0', 'ВИКИ', 'WIKI' ],
];
