<?php
/** Estonian (eesti)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 */

$namespaceNames = [
	NS_MEDIA            => 'Meedia',
	NS_SPECIAL          => 'Eri',
	NS_TALK             => 'Arutelu',
	NS_USER             => 'Kasutaja',
	NS_USER_TALK        => 'Kasutaja_arutelu',
	NS_PROJECT_TALK     => '{{GRAMMAR:genitive|$1}}_arutelu',
	NS_FILE             => 'Fail',
	NS_FILE_TALK        => 'Faili_arutelu',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'MediaWiki_arutelu',
	NS_TEMPLATE         => 'Mall',
	NS_TEMPLATE_TALK    => 'Malli_arutelu',
	NS_HELP             => 'Juhend',
	NS_HELP_TALK        => 'Juhendi_arutelu',
	NS_CATEGORY         => 'Kategooria',
	NS_CATEGORY_TALK    => 'Kategooria_arutelu',
];

$namespaceAliases = [
	'$1_arutelu' => NS_PROJECT_TALK,
	'Pilt' => NS_FILE,
	'Pildi_arutelu' => NS_FILE_TALK,
];

$specialPageAliases = [
	'Activeusers'               => [ 'Teguskasutajad' ],
	'Allmessages'               => [ 'Kõik_sõnumid' ],
	'AllMyUploads'              => [ 'Kõik_minu_failid' ],
	'Allpages'                  => [ 'Kõik_leheküljed' ],
	'Ancientpages'              => [ 'Vanimad_leheküljed' ],
	'Blankpage'                 => [ 'Tühi_leht' ],
	'Block'                     => [ 'Blokeerimine' ],
	'Booksources'               => [ 'Raamatuotsimine', 'Otsi_raamatut' ],
	'BrokenRedirects'           => [ 'Vigased_ümbersuunamised' ],
	'Categories'                => [ 'Kategooriad' ],
	'ChangeEmail'               => [ 'E-posti_aadressi_muutmine' ],
	'ChangePassword'            => [ 'Parooli_muutmine', 'Muuda_parool' ],
	'ComparePages'              => [ 'Lehekülgede_kõrvutamine' ],
	'Confirmemail'              => [ 'E-posti_aadressi_kinnitamine' ],
	'Contributions'             => [ 'Kaastöö' ],
	'CreateAccount'             => [ 'Konto_loomine' ],
	'Deadendpages'              => [ 'Edasipääsuta_leheküljed' ],
	'DeletedContributions'      => [ 'Kustutatud_kaastöö' ],
	'Diff'                      => [ 'Erin' ],
	'DoubleRedirects'           => [ 'Kahekordsed_ümbersuunamised' ],
	'EditWatchlist'             => [ 'Jälgimisloendi_redigeerimine' ],
	'Emailuser'                 => [ 'E-kirja_saatmine' ],
	'ExpandTemplates'           => [ 'Mallide_hõrendamine' ],
	'Export'                    => [ 'Lehekülgede_eksport' ],
	'Fewestrevisions'           => [ 'Vähim_muudatusi' ],
	'FileDuplicateSearch'       => [ 'Faili_duplikaatide_otsimine', 'Otsi_faili_duplikaate' ],
	'Filepath'                  => [ 'Failitee' ],
	'Import'                    => [ 'Lehekülgede_import' ],
	'Invalidateemail'           => [ 'E-posti_kinnituse_tühistamine', 'Tühista_e-posti_kinnitus' ],
	'JavaScriptTest'            => [ 'JavaScripti_katsetamine' ],
	'BlockList'                 => [ 'Blokeerimisloend' ],
	'LinkSearch'                => [ 'Välislinkide_otsimine', 'Otsi_välislinke' ],
	'Listadmins'                => [ 'Ülemaloend' ],
	'Listbots'                  => [ 'Robotiloend' ],
	'Listfiles'                 => [ 'Failide_loend' ],
	'Listgrouprights'           => [ 'Kasutajarühma_õigused' ],
	'Listredirects'             => [ 'Ümbersuunamised' ],
	'ListDuplicatedFiles'       => [ 'Duplikaatfailide_loend' ],
	'Listusers'                 => [ 'Kasutajate_loend' ],
	'Lockdb'                    => [ 'Andmebaasi_lukustamine', 'Lukusta_andmebaas' ],
	'Log'                       => [ 'Logid' ],
	'Lonelypages'               => [ 'Viitamata_leheküljed' ],
	'Longpages'                 => [ 'Pikad_leheküljed' ],
	'MergeHistory'              => [ 'Ajaloo_liitmine' ],
	'MIMEsearch'                => [ 'MIME_otsing' ],
	'Mostcategories'            => [ 'Enim_kategoriseeritud' ],
	'Mostimages'                => [ 'Kõige_kasutatumad_failid' ],
	'Mostinterwikis'            => [ 'Enim_keelelinke' ],
	'Mostlinked'                => [ 'Kõige_viidatumad_leheküljed' ],
	'Mostlinkedcategories'      => [ 'Kõige_viidatumad_kategooriad' ],
	'Mostlinkedtemplates'       => [ 'Kõige_viidatumad_mallid' ],
	'Mostrevisions'             => [ 'Enim_muudatusi' ],
	'Movepage'                  => [ 'Teisaldamine', 'Teisalda' ],
	'Mycontributions'           => [ 'Minu_kaastöö' ],
	'Mypage'                    => [ 'Minu_lehekülg' ],
	'Mytalk'                    => [ 'Minu_aruteluleht' ],
	'Myuploads'                 => [ 'Minu_üleslaaditu' ],
	'Newimages'                 => [ 'Uued_failid' ],
	'Newpages'                  => [ 'Uued_leheküljed' ],
	'PagesWithProp'             => [ 'Atribuudiga_leheküljed' ],
	'PasswordReset'             => [ 'Parooli_lähtestamine' ],
	'PermanentLink'             => [ 'Püsilink' ],
	'Preferences'               => [ 'Eelistused' ],
	'Prefixindex'               => [ 'Kõik_pealkirjad_eesliitega' ],
	'Protectedpages'            => [ 'Kaitstud_leheküljed' ],
	'Protectedtitles'           => [ 'Kaitstud_pealkirjad' ],
	'Randompage'                => [ 'Juhuslik_artikkel' ],
	'RandomInCategory'          => [ 'Juhuslik_kategoorias' ],
	'Randomredirect'            => [ 'Juhuslik_ümbersuunamine' ],
	'Randomrootpage'            => [ 'Juhuslik_juurlehekülg' ],
	'Recentchanges'             => [ 'Viimased_muudatused' ],
	'Recentchangeslinked'       => [ 'Seotud_muudatused' ],
	'Redirect'                  => [ 'Ümbersuunamine' ],
	'ResetTokens'               => [ 'Lubade_lähtestamine' ],
	'Revisiondelete'            => [ 'Muudatuse_kustutamine', 'Kustuta_muudatus' ],
	'Search'                    => [ 'Otsimine', 'Otsi' ],
	'Shortpages'                => [ 'Lühikesed_leheküljed' ],
	'Specialpages'              => [ 'Erileheküljed' ],
	'Statistics'                => [ 'Arvandmestik' ],
	'Tags'                      => [ 'Märgised' ],
	'TrackingCategories'        => [ 'Süsteemikategooriad' ],
	'Unblock'                   => [ 'Blokeerimise_eemaldamine' ],
	'Uncategorizedcategories'   => [ 'Kategoriseerimata_kategooriad' ],
	'Uncategorizedimages'       => [ 'Kategoriseerimata_failid' ],
	'Uncategorizedpages'        => [ 'Kategoriseerimata_leheküljed' ],
	'Uncategorizedtemplates'    => [ 'Kategoriseerimata_mallid' ],
	'Undelete'                  => [ 'Lehekülje_taastamine', 'Taasta_lehekülg' ],
	'Unlockdb'                  => [ 'Andmebaasi_avamine', 'Ava_andmebaas' ],
	'Unusedcategories'          => [ 'Kasutamata_kategooriad' ],
	'Unusedimages'              => [ 'Kasutamata_failid' ],
	'Unusedtemplates'           => [ 'Kasutamata_mallid' ],
	'Unwatchedpages'            => [ 'Jälgimata_leheküljed' ],
	'Upload'                    => [ 'Faili_üleslaadimine' ],
	'UploadStash'               => [ 'Üleslaaditu_alghoidla' ],
	'Userlogin'                 => [ 'Sisselogimine' ],
	'Userlogout'                => [ 'Väljalogimine' ],
	'Userrights'                => [ 'Kasutaja_õigused' ],
	'Version'                   => [ 'Versioon' ],
	'Wantedcategories'          => [ 'Oodatud_kategooriad' ],
	'Wantedfiles'               => [ 'Oodatud_failid' ],
	'Wantedpages'               => [ 'Oodatud_leheküljed' ],
	'Wantedtemplates'           => [ 'Oodatud_mallid' ],
	'Watchlist'                 => [ 'Jälgimisloend' ],
	'Whatlinkshere'             => [ 'Lingid_siia' ],
	'Withoutinterwiki'          => [ 'Ilma_keelelinkideta' ],
];

# Lisasin eestimaised poed, aga võõramaiseid ei julenud kustutada.
$bookstoreList = [
	'Apollo' => 'http://www.apollo.ee/search.php?keyword=$1&search=OTSI',
	'minu Raamat' => 'http://www.raamat.ee/advanced_search_result.php?keywords=$1',
	'Raamatukoi' => 'http://www.raamatukoi.ee/cgi-bin/index?valik=otsing&paring=$1',
	'AddALL' => 'http://www.addall.com/New/Partner.cgi?query=$1&type=ISBN',
	'Barnes & Noble' => 'http://search.barnesandnoble.com/bookSearch/isbnInquiry.asp?isbn=$1',
	'Amazon.com' => 'https://www.amazon.com/exec/obidos/ISBN=$1'
];

$magicWords = [
	'redirect'                  => [ '0', '#suuna', '#REDIRECT' ],
	'notoc'                     => [ '0', '__SISUKORRATA__', '__NOTOC__' ],
	'nogallery'                 => [ '0', '__GALERIITA__', '__NOGALLERY__' ],
	'forcetoc'                  => [ '0', '__SISUKORDEES__', '__FORCETOC__' ],
	'toc'                       => [ '0', '__SISUKORD__', '__TOC__' ],
	'noeditsection'             => [ '0', '__ALAOSALINGITA__', '__NOEDITSECTION__' ],
	'currentmonth'              => [ '1', 'HETKEKUU', 'CURRENTMONTH', 'CURRENTMONTH2' ],
	'currentmonth1'             => [ '1', 'HETKEKUU1', 'CURRENTMONTH1' ],
	'currentmonthname'          => [ '1', 'HETKEKUUNIMETUS', 'CURRENTMONTHNAME' ],
	'currentmonthnamegen'       => [ '1', 'HETKEKUUOM', 'CURRENTMONTHNAMEGEN' ],
	'currentmonthabbrev'        => [ '1', 'HETKEKUULÜH', 'CURRENTMONTHABBREV' ],
	'currentday'                => [ '1', 'HETKEKUUPÄEV', 'CURRENTDAY' ],
	'currentday2'               => [ '1', 'HETKEKUUPÄEV2', 'CURRENTDAY2' ],
	'currentdayname'            => [ '1', 'HETKENÄDALAPÄEV', 'CURRENTDAYNAME' ],
	'currentyear'               => [ '1', 'HETKEAASTA', 'CURRENTYEAR' ],
	'currenttime'               => [ '1', 'HETKEAEG', 'CURRENTTIME' ],
	'currenthour'               => [ '1', 'HETKETUND', 'CURRENTHOUR' ],
	'localmonth'                => [ '1', 'KOHALIKKUU', 'LOCALMONTH', 'LOCALMONTH2' ],
	'localmonth1'               => [ '1', 'KOHALIKKUU1', 'LOCALMONTH1' ],
	'localmonthname'            => [ '1', 'KOHALIKKUUNIMETUS', 'LOCALMONTHNAME' ],
	'localmonthnamegen'         => [ '1', 'KOHALIKKUUOM', 'LOCALMONTHNAMEGEN' ],
	'localmonthabbrev'          => [ '1', 'KOHALIKKUULÜH', 'LOCALMONTHABBREV' ],
	'localday'                  => [ '1', 'KOHALIKKUUPÄEV', 'LOCALDAY' ],
	'localday2'                 => [ '1', 'KOHALIKKUUPÄEV2', 'LOCALDAY2' ],
	'localdayname'              => [ '1', 'KOHALIKNÄDALAPÄEV', 'LOCALDAYNAME' ],
	'localyear'                 => [ '1', 'KOHALIKAASTA', 'LOCALYEAR' ],
	'localtime'                 => [ '1', 'KOHALIKAEG', 'LOCALTIME' ],
	'localhour'                 => [ '1', 'KOHALIKTUND', 'LOCALHOUR' ],
	'numberofpages'             => [ '1', 'LEHEMÄÄR', 'NUMBEROFPAGES' ],
	'numberofarticles'          => [ '1', 'ARTIKLIMÄÄR', 'NUMBEROFARTICLES' ],
	'numberoffiles'             => [ '1', 'FAILIMÄÄR', 'NUMBEROFFILES' ],
	'numberofusers'             => [ '1', 'KASUTAJAMÄÄR', 'NUMBEROFUSERS' ],
	'numberofactiveusers'       => [ '1', 'TEGUSKASUTAJAMÄÄR', 'NUMBEROFACTIVEUSERS' ],
	'numberofedits'             => [ '1', 'REDIGEERIMISMÄÄR', 'NUMBEROFEDITS' ],
	'pagename'                  => [ '1', 'LEHEKÜLJENIMI', 'PAGENAME' ],
	'pagenamee'                 => [ '1', 'LEHEKÜLJENIMI1', 'PAGENAMEE' ],
	'namespace'                 => [ '1', 'NIMERUUM', 'NAMESPACE' ],
	'namespacee'                => [ '1', 'NIMERUUM1', 'NAMESPACEE' ],
	'namespacenumber'           => [ '1', 'NIMERUUMINUMBER', 'NAMESPACENUMBER' ],
	'talkspace'                 => [ '1', 'ARUTELUNIMERUUM', 'TALKSPACE' ],
	'talkspacee'                => [ '1', 'ARUTELUNIMERUUM1', 'TALKSPACEE' ],
	'subjectspace'              => [ '1', 'SISUNIMERUUM', 'SUBJECTSPACE', 'ARTICLESPACE' ],
	'subjectspacee'             => [ '1', 'SISUNIMERUUM1', 'SUBJECTSPACEE', 'ARTICLESPACEE' ],
	'fullpagename'              => [ '1', 'KOGULEHEKÜLJENIMI', 'FULLPAGENAME' ],
	'fullpagenamee'             => [ '1', 'KOGULEHEKÜLJENIMI1', 'FULLPAGENAMEE' ],
	'subpagename'               => [ '1', 'ALAMLEHEKÜLJENIMI', 'SUBPAGENAME' ],
	'subpagenamee'              => [ '1', 'ALAMLEHEKÜLJENIMI1', 'SUBPAGENAMEE' ],
	'rootpagename'              => [ '1', 'JUURLEHEKÜLJENIMI', 'ROOTPAGENAME' ],
	'rootpagenamee'             => [ '1', 'JUURLEHEKÜLJENIMI1', 'ROOTPAGENAMEE' ],
	'basepagename'              => [ '1', 'NIMERUUMITANIMI', 'BASEPAGENAME' ],
	'basepagenamee'             => [ '1', 'NIMERUUMITANIMI1', 'BASEPAGENAMEE' ],
	'talkpagename'              => [ '1', 'ARUTELUNIMI', 'TALKPAGENAME' ],
	'talkpagenamee'             => [ '1', 'ARUTELUNIMI1', 'TALKPAGENAMEE' ],
	'subst'                     => [ '0', 'ASENDA:', 'SUBST:' ],
	'img_thumbnail'             => [ '1', 'pisi', 'pisipilt', 'thumb', 'thumbnail' ],
	'img_manualthumb'           => [ '1', 'pisi=$1', 'pisipilt=$1', 'thumbnail=$1', 'thumb=$1' ],
	'img_right'                 => [ '1', 'paremal', 'right' ],
	'img_left'                  => [ '1', 'vasakul', 'left' ],
	'img_none'                  => [ '1', 'tühi', 'none' ],
	'img_center'                => [ '1', 'keskel', 'center', 'centre' ],
	'img_framed'                => [ '1', 'raam', 'frame', 'framed', 'enframed' ],
	'img_frameless'             => [ '1', 'raamita', 'frameless' ],
	'img_lang'                  => [ '1', 'keel=$1', 'lang=$1' ],
	'img_page'                  => [ '1', 'lehekülg=$1', 'lehekülg_$1', 'page=$1', 'page $1' ],
	'img_upright'               => [ '1', 'püsti', 'püsti=$1', 'upright', 'upright=$1', 'upright $1' ],
	'img_border'                => [ '1', 'ääris', 'border' ],
	'sitename'                  => [ '1', 'KOHANIMI', 'SITENAME' ],
	'ns'                        => [ '0', 'NR:', 'NS:' ],
	'nse'                       => [ '0', 'NR1:', 'NSE:' ],
	'localurl'                  => [ '0', 'KOHALIKURL', 'LOCALURL:' ],
	'localurle'                 => [ '0', 'KOHALIKURL1', 'LOCALURLE:' ],
	'servername'                => [ '0', 'SERVERINIMI', 'SERVERNAME' ],
	'gender'                    => [ '0', 'SUGU:', 'GENDER:' ],
	'currentweek'               => [ '1', 'HETKENÄDAL', 'CURRENTWEEK' ],
	'currentdow'                => [ '1', 'HETKENÄDALAPÄEV1', 'CURRENTDOW' ],
	'localweek'                 => [ '1', 'KOHALIKNÄDAL', 'LOCALWEEK' ],
	'localdow'                  => [ '1', 'KOHALIKNÄDALAPÄEV1', 'LOCALDOW' ],
	'fullurl'                   => [ '0', 'KOGUURL:', 'FULLURL:' ],
	'fullurle'                  => [ '0', 'KOGUURL1:', 'FULLURLE:' ],
	'lcfirst'                   => [ '0', 'ESIVT:', 'LCFIRST:' ],
	'ucfirst'                   => [ '0', 'ESIST:', 'UCFIRST:' ],
	'lc'                        => [ '0', 'VT:', 'LC:' ],
	'uc'                        => [ '0', 'ST:', 'UC:' ],
	'displaytitle'              => [ '1', 'PEALKIRI', 'DISPLAYTITLE' ],
	'newsectionlink'            => [ '1', '__UUEALAOSALINK__', '__NEWSECTIONLINK__' ],
	'nonewsectionlink'          => [ '1', '__UUEALAOSALINGITA__', '__NONEWSECTIONLINK__' ],
	'currenttimestamp'          => [ '1', 'HETKEAJATEMPEL', 'CURRENTTIMESTAMP' ],
	'localtimestamp'            => [ '1', 'KOHALIKAJATEMPEL', 'LOCALTIMESTAMP' ],
	'language'                  => [ '0', '#KEEL:', '#LANGUAGE:' ],
	'contentlanguage'           => [ '1', 'VAIKEKEEL', 'CONTENTLANGUAGE', 'CONTENTLANG' ],
	'pagesinnamespace'          => [ '1', 'LEHEKÜLGINIMERUUMIS', 'PAGESINNAMESPACE:', 'PAGESINNS:' ],
	'numberofadmins'            => [ '1', 'ÜLEMAMÄÄR', 'NUMBEROFADMINS' ],
	'formatnum'                 => [ '0', 'ARVUVORMINDUS', 'FORMATNUM' ],
	'special'                   => [ '0', 'eri', 'special' ],
	'speciale'                  => [ '0', 'eri1', 'speciale' ],
	'defaultsort'               => [ '1', 'JÄRJESTA:', 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ],
	'filepath'                  => [ '0', 'FAILITEE:', 'FILEPATH:' ],
	'hiddencat'                 => [ '1', '__PEIDETUDKAT__', '__HIDDENCAT__' ],
	'pagesincategory'           => [ '1', 'LEHEKÜLGIKATEGOORIAS', 'PAGESINCATEGORY', 'PAGESINCAT' ],
	'index'                     => [ '1', 'INDEKSIGA', '__INDEX__' ],
	'noindex'                   => [ '1', 'INDEKSITA', '__NOINDEX__' ],
	'numberingroup'             => [ '1', 'KASUTAJAIDRÜHMAS', 'NUMBERINGROUP', 'NUMINGROUP' ],
	'protectionlevel'           => [ '1', 'KAITSETASE', 'PROTECTIONLEVEL' ],
	'formatdate'                => [ '0', 'kuupäevavormindus', 'formatdate', 'dateformat' ],
];

$separatorTransformTable = [ ',' => "\xc2\xa0", '.' => ',' ];
$linkTrail = '/^([äöõšüža-z]+)(.*)$/sDu';

$datePreferences = [
	'default',
	'et numeric',
	'dmy',
	'et roman',
	'ISO 8601'
];

$datePreferenceMigrationMap = [
	'default',
	'et numeric',
	'dmy',
	'et roman',
];

$defaultDateFormat = 'dmy';

$dateFormats = [
	'et numeric time' => 'H:i',
	'et numeric date' => 'd.m.Y',
	'et numeric both' => 'd.m.Y, "kell" H:i',

	'dmy time' => 'H:i',
	'dmy date' => 'j. F Y',
	'dmy both' => 'j. F Y, "kell" H:i',

	'et roman time' => 'H:i',
	'et roman date' => 'j. xrm Y',
	'et roman both' => 'j. xrm Y, "kell" H:i',
];
