<?php
/** Icelandic (íslenska)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 */

$namespaceNames = [
	NS_MEDIA            => 'Miðill',
	NS_SPECIAL          => 'Kerfissíða',
	NS_TALK             => 'Spjall',
	NS_USER             => 'Notandi',
	NS_USER_TALK        => 'Notandaspjall',
	NS_PROJECT_TALK     => '$1spjall',
	NS_FILE             => 'Mynd',
	NS_FILE_TALK        => 'Myndaspjall',
	NS_MEDIAWIKI        => 'Melding',
	NS_MEDIAWIKI_TALK   => 'Meldingarspjall',
	NS_TEMPLATE         => 'Snið',
	NS_TEMPLATE_TALK    => 'Sniðaspjall',
	NS_HELP             => 'Hjálp',
	NS_HELP_TALK        => 'Hjálparspjall',
	NS_CATEGORY         => 'Flokkur',
	NS_CATEGORY_TALK    => 'Flokkaspjall',
];

$datePreferences = [
	'default',
	'dmyt',
	'short dmyt',
	'tdmy',
	'short tdmy',
	'ISO 8601',
];

$datePreferenceMigrationMap = [
	'default',
	'dmyt',
	'short dmyt',
	'tdmy',
	'short tdmy',
];

$defaultDateFormat = 'dmyt';

$dateFormats = [
	'dmyt time' => 'H:i',
	'dmyt date' => 'j. F Y',
	'dmyt both' => 'j. F Y "kl." H:i',

	'short dmyt time' => 'H:i',
	'short dmyt date' => 'j. M. Y',
	'short dmyt both' => 'j. M. Y "kl." H:i',

	'tdmy time' => 'H:i',
	'tdmy date' => 'j. F Y',
	'tdmy both' => 'H:i, j. F Y',

	'short tdmy time' => 'H:i',
	'short tdmy date' => 'j. M. Y',
	'short tdmy both' => 'H:i, j. M. Y',
];

$magicWords = [
	'redirect'                  => [ '0', '#tilvísun', '#TILVÍSUN', '#REDIRECT' ],
	'nogallery'                 => [ '0', '__EMSAFN__', '__NOGALLERY__' ],
	'currentday'                => [ '1', 'NÚDAGUR', 'CURRENTDAY' ],
	'currentday2'               => [ '1', 'NÚDAGUR2', 'CURRENTDAY2' ],
	'currentdayname'            => [ '1', 'NÚDAGNAFN', 'CURRENTDAYNAME' ],
	'currentyear'               => [ '1', 'NÚÁR', 'CURRENTYEAR' ],
	'currenttime'               => [ '1', 'NÚTÍMI', 'CURRENTTIME' ],
	'currenthour'               => [ '1', 'NÚKTÍMI', 'CURRENTHOUR' ],
	'localmonth'                => [ '1', 'STMÁN', 'LOCALMONTH', 'LOCALMONTH2' ],
	'localmonthname'            => [ '1', 'STMÁNNAFN', 'LOCALMONTHNAME' ],
	'localmonthabbrev'          => [ '1', 'STMÁNST', 'LOCALMONTHABBREV' ],
	'localday'                  => [ '1', 'STDAGUR', 'LOCALDAY' ],
	'localday2'                 => [ '1', 'STDAGUR2', 'LOCALDAY2' ],
	'localdayname'              => [ '1', 'STDAGNAFN', 'LOCALDAYNAME' ],
	'localyear'                 => [ '1', 'STÁR', 'LOCALYEAR' ],
	'localtime'                 => [ '1', 'STTÍMI', 'LOCALTIME' ],
	'localhour'                 => [ '1', 'STKTÍMI', 'LOCALHOUR' ],
	'numberofpages'             => [ '1', 'FJLSÍÐA', 'NUMBEROFPAGES' ],
	'numberofarticles'          => [ '1', 'FJLGREINA', 'NUMBEROFARTICLES' ],
	'numberoffiles'             => [ '1', 'FJLSKJALA', 'NUMBEROFFILES' ],
	'numberofusers'             => [ '1', 'FJLNOT', 'NUMBEROFUSERS' ],
	'numberofedits'             => [ '1', 'FJLBREYT', 'NUMBEROFEDITS' ],
	'pagename'                  => [ '1', 'SÍÐUNAFN', 'PAGENAME' ],
	'namespace'                 => [ '1', 'NAFNSVÆÐI', 'NAMESPACE' ],
	'talkspace'                 => [ '1', 'SPJALLSVÆÐI', 'TALKSPACE' ],
	'fullpagename'              => [ '1', 'FULLTSÍÐUNF', 'FULLPAGENAME' ],
	'img_manualthumb'           => [ '1', 'þumall', 'thumbnail=$1', 'thumb=$1' ],
	'img_right'                 => [ '1', 'hægri', 'right' ],
	'img_left'                  => [ '1', 'vinstri', 'left' ],
	'img_none'                  => [ '1', 'engin', 'none' ],
	'img_width'                 => [ '1', '$1dp', '$1px' ],
	'img_center'                => [ '1', 'miðja', 'center', 'centre' ],
	'img_sub'                   => [ '1', 'undir', 'sub' ],
	'img_super'                 => [ '1', 'yfir', 'super', 'sup' ],
	'img_top'                   => [ '1', 'efst', 'top' ],
	'img_bottom'                => [ '1', 'neðst', 'bottom' ],
	'img_text_bottom'           => [ '1', 'texti-neðst', 'text-bottom' ],
	'ns'                        => [ '0', 'NR:', 'NS:' ],
	'server'                    => [ '0', 'VEFÞJ', 'SERVER' ],
	'servername'                => [ '0', 'VEFÞJNF', 'SERVERNAME' ],
	'grammar'                   => [ '0', 'MÁLFRÆÐI:', 'GRAMMAR:' ],
	'currentweek'               => [ '1', 'NÚVIKA', 'CURRENTWEEK' ],
	'localweek'                 => [ '1', 'STVIKA', 'LOCALWEEK' ],
	'plural'                    => [ '0', 'FLTALA:', 'PLURAL:' ],
	'raw'                       => [ '0', 'HRÁ:', 'RAW:' ],
	'displaytitle'              => [ '1', 'SÝNATITIL', 'DISPLAYTITLE' ],
	'language'                  => [ '0', '#TUNGUMÁL', '#LANGUAGE:' ],
	'special'                   => [ '0', 'kerfissíða', 'special' ],
];

$specialPageAliases = [
	'Activeusers'               => [ 'Virkir_notendur' ],
	'Allmessages'               => [ 'Meldingar' ],
	'Allpages'                  => [ 'Allar_síður' ],
	'Ancientpages'              => [ 'Elstu_síður' ],
	'Blankpage'                 => [ 'Auð_síða' ],
	'Block'                     => [ 'Banna_vistföng' ],
	'Booksources'               => [ 'Bókaheimildir' ],
	'BrokenRedirects'           => [ 'Brotnar_tilvísanir' ],
	'Categories'                => [ 'Flokkar' ],
	'ChangeEmail'               => [ 'Breyta_netfangi' ],
	'ChangePassword'            => [ 'Endurkalla_aðgangsorðið' ],
	'ComparePages'              => [ 'Bera_saman_síður' ],
	'Confirmemail'              => [ 'Staðfesta_netfang' ],
	'Contributions'             => [ 'Framlög' ],
	'CreateAccount'             => [ 'Búa_til_aðgang' ],
	'Deadendpages'              => [ 'Botnlangar' ],
	'DeletedContributions'      => [ 'Eydd_framlög' ],
	'DoubleRedirects'           => [ 'Tvöfaldar_tilvísanir' ],
	'EditWatchlist'             => [ 'Breyta_vaktlista' ],
	'Emailuser'                 => [ 'Senda_tölvupóst' ],
	'Export'                    => [ 'Flytja_út' ],
	'Fewestrevisions'           => [ 'Fæstar_útgáfur' ],
	'FileDuplicateSearch'       => [ 'Afritunarskráarleit' ],
	'Filepath'                  => [ 'Skráarslóð' ],
	'Import'                    => [ 'Flytja_inn' ],
	'Invalidateemail'           => [ 'Rangt_netfang' ],
	'BlockList'                 => [ 'Bönnuð_vistföng' ],
	'Listadmins'                => [ 'Stjórnendalisti' ],
	'Listbots'                  => [ 'Vélmennalisti' ],
	'Listfiles'                 => [ 'Myndalisti' ],
	'Listgrouprights'           => [ 'Réttindalisti' ],
	'Listredirects'             => [ 'Tilvísanalisti' ],
	'Listusers'                 => [ 'Notendalisti' ],
	'Lockdb'                    => [ 'Læsa_gagnagrunni' ],
	'Log'                       => [ 'Aðgerðaskrár' ],
	'Lonelypages'               => [ 'Munaðarlausar_síður' ],
	'Longpages'                 => [ 'Langar_síður' ],
	'MergeHistory'              => [ 'Sameina_breytingaskrá' ],
	'MIMEsearch'                => [ 'MIME-leit' ],
	'Mostcategories'            => [ 'Flestir_flokkar' ],
	'Mostimages'                => [ 'Flestar_myndir' ],
	'Mostlinked'                => [ 'Mest_ítengt' ],
	'Mostlinkedcategories'      => [ 'Mest_ítengdu_flokkar' ],
	'Mostlinkedtemplates'       => [ 'Mest_ítengdu_snið' ],
	'Mostrevisions'             => [ 'Flestar_útgáfur' ],
	'Movepage'                  => [ 'Færa_síðu' ],
	'Mycontributions'           => [ 'Framlög_mín' ],
	'Mypage'                    => [ 'Notandasíða_mín' ],
	'Mytalk'                    => [ 'Spjallasíða_mín' ],
	'Myuploads'                 => [ 'Upplöðin_mín' ],
	'Newimages'                 => [ 'Nýjar_myndir' ],
	'Newpages'                  => [ 'Nýjustu_greinar' ],
	'PasswordReset'             => [ 'Endursetja_lykilorð' ],
	'Preferences'               => [ 'Stillingar' ],
	'Prefixindex'               => [ 'Forskeyti' ],
	'Protectedpages'            => [ 'Verndaðar_síður' ],
	'Protectedtitles'           => [ 'Verndaðir_titlar' ],
	'Randompage'                => [ 'Handahófsvalin_síða' ],
	'Randomredirect'            => [ 'Handahófsvalin_tilvísun' ],
	'Recentchanges'             => [ 'Nýlegar_breytingar' ],
	'Recentchangeslinked'       => [ 'Nýlegar_breytingar_tengdar' ],
	'Revisiondelete'            => [ 'Eyðingarendurskoðun' ],
	'Search'                    => [ 'Leit' ],
	'Shortpages'                => [ 'Stuttar_síður' ],
	'Specialpages'              => [ 'Kerfissíður' ],
	'Statistics'                => [ 'Tölfræði' ],
	'Tags'                      => [ 'Tög' ],
	'Unblock'                   => [ 'Afbönnun' ],
	'Uncategorizedcategories'   => [ 'Óflokkaðir_flokkar' ],
	'Uncategorizedimages'       => [ 'Óflokkaðar_myndir' ],
	'Uncategorizedpages'        => [ 'Óflokkaðar_síður' ],
	'Uncategorizedtemplates'    => [ 'Óflokkuð_snið' ],
	'Undelete'                  => [ 'Endurvekja_eydda_síðu' ],
	'Unlockdb'                  => [ 'Opna_gagnagrunn' ],
	'Unusedcategories'          => [ 'Ónotaðir_flokkar' ],
	'Unusedimages'              => [ 'Munaðarlausar_myndir' ],
	'Unusedtemplates'           => [ 'Ónotuð_snið' ],
	'Unwatchedpages'            => [ 'Óvaktaðar_síður' ],
	'Upload'                    => [ 'Hlaða_inn' ],
	'Userlogin'                 => [ 'Innskrá' ],
	'Userlogout'                => [ 'Útskrá' ],
	'Userrights'                => [ 'Notandaréttindi' ],
	'Version'                   => [ 'Útgáfa' ],
	'Wantedcategories'          => [ 'Eftirsóttir_flokkar' ],
	'Wantedfiles'               => [ 'Eftirsóttar_skrár' ],
	'Wantedpages'               => [ 'Eftirsóttar_síður' ],
	'Wantedtemplates'           => [ 'Eftirsótt_snið' ],
	'Watchlist'                 => [ 'Vaktlistinn' ],
	'Whatlinkshere'             => [ 'Síður_sem_tengjast_hingað' ],
	'Withoutinterwiki'          => [ 'Síður_án_tungumálatengla' ],
];

$separatorTransformTable = [ ',' => '.', '.' => ',' ];
$linkPrefixExtension = true;
$linkTrail = '/^([áðéíóúýþæöa-z-–]+)(.*)$/sDu';
$linkPrefixCharset = 'áÁðÐéÉíÍóÓúÚýÝþÞæÆöÖA-Za-z–-';
