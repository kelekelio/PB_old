<?php
/** Bosnian (bosanski)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 */

$namespaceNames = [
	NS_MEDIA            => 'Mediji',
	NS_SPECIAL          => 'Posebno',
	NS_TALK             => 'Razgovor',
	NS_USER             => 'Korisnik',
	NS_USER_TALK        => 'Razgovor_s_korisnikom',
	NS_PROJECT_TALK     => 'Razgovor_{{grammar:instrumental|$1}}',
	NS_FILE             => 'Datoteka',
	NS_FILE_TALK        => 'Razgovor_o_datoteci',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'MediaWiki_razgovor',
	NS_TEMPLATE         => 'Šablon',
	NS_TEMPLATE_TALK    => 'Razgovor_o_šablonu',
	NS_HELP             => 'Pomoć',
	NS_HELP_TALK        => 'Razgovor_o_pomoći',
	NS_CATEGORY         => 'Kategorija',
	NS_CATEGORY_TALK    => 'Razgovor_o_kategoriji',
];

$namespaceAliases = [
	'Razgovor_sa_korisnikom' => NS_USER_TALK,
	'Medija' => NS_MEDIA,
	'Slika' => NS_FILE,
	'Razgovor_o_datoteci' => NS_FILE_TALK,
	'MedijaViki' => NS_MEDIAWIKI,
	'Razgovor_o_MedijaVikiju' => NS_MEDIAWIKI_TALK,
];

$specialPageAliases = [
	'Activeusers'               => [ 'AktivniKorisnici' ],
	'Allmessages'               => [ 'SvePoruke' ],
	'Allpages'                  => [ 'SveStranice' ],
	'Ancientpages'              => [ 'NajstarijeStranice' ],
	'Badtitle'                  => [ 'Losnaslov' ],
	'Blankpage'                 => [ 'PraznaStranica' ],
	'Block'                     => [ 'BlokirajIP' ],
	'Booksources'               => [ 'KnjizniIzvori' ],
	'BrokenRedirects'           => [ 'NedovršenaPreusmjerenja' ],
	'Categories'                => [ 'Kategorije' ],
	'ChangeEmail'               => [ 'IzmjeniMail' ],
	'ChangePassword'            => [ 'PonistiLozinku' ],
	'ComparePages'              => [ 'UporedjivanjeStranica' ],
	'Confirmemail'              => [ 'PotvrdiEmail' ],
	'Contributions'             => [ 'Doprinos' ],
	'CreateAccount'             => [ 'NapraviRačun' ],
	'Deadendpages'              => [ 'MrtveStranice' ],
	'DeletedContributions'      => [ 'ObrisaniDoprinosi' ],
	'DoubleRedirects'           => [ 'DvostrukaPreusmjerenja' ],
	'EditWatchlist'             => [ 'IzmjeniPraćeniSpisak' ],
	'Emailuser'                 => [ 'EmailKorisnika' ],
	'ExpandTemplates'           => [ 'ProsirivanjeSablona' ],
	'Export'                    => [ 'Izvoz' ],
	'Fewestrevisions'           => [ 'Najmanje_uređivane_stranice' ],
	'FileDuplicateSearch'       => [ 'PotragaDuplihFajlova' ],
	'Filepath'                  => [ 'PutDoDatoteke' ],
	'Import'                    => [ 'Uvoz' ],
	'Invalidateemail'           => [ 'PogresanEmail' ],
	'BlockList'                 => [ 'ListaBlokiranjaPrekoIP' ],
	'LinkSearch'                => [ 'PotragaLinkova' ],
	'Listadmins'                => [ 'ListaAdministratora' ],
	'Listbots'                  => [ 'ListaBotova' ],
	'Listfiles'                 => [ 'Datoteke', 'Slike' ],
	'Listgrouprights'           => [ 'ListaKorisničkihPrava' ],
	'Listredirects'             => [ 'ListaPreusmjeravanja' ],
	'Listusers'                 => [ 'ListaKorisnika' ],
	'Lockdb'                    => [ 'ZakljucajDB' ],
	'Log'                       => [ 'Protokol', 'Protokoli' ],
	'Lonelypages'               => [ 'Siročad' ],
	'Longpages'                 => [ 'DugeStranice' ],
	'MergeHistory'              => [ 'SpojiHistoriju' ],
	'MIMEsearch'                => [ 'MIMEPretraga' ],
	'Mostcategories'            => [ 'Najviše_kategorija' ],
	'Mostimages'                => [ 'Najviše_povezane_datoteke', 'Najviše_povezane_slike' ],
	'Mostlinked'                => [ 'Najviše_povezane_stranice' ],
	'Mostlinkedcategories'      => [ 'Najviše_povezane_kategorije' ],
	'Mostlinkedtemplates'       => [ 'Najviše_povezani_šabloni' ],
	'Mostrevisions'             => [ 'Najviše_uređivane_stranice' ],
	'Movepage'                  => [ 'Premjesti_stranicu', 'PreusmjeriStranicu' ],
	'Mycontributions'           => [ 'MojiDoprinosi' ],
	'Mypage'                    => [ 'MojaStranica' ],
	'Mytalk'                    => [ 'MojRazgovor' ],
	'Newimages'                 => [ 'Nove_datoteke', 'Nove_slike' ],
	'Newpages'                  => [ 'NoveStranice' ],
	'Preferences'               => [ 'Postavke' ],
	'Prefixindex'               => [ 'IndeksPrefiksa' ],
	'Protectedpages'            => [ 'ZasticeneStranice' ],
	'Protectedtitles'           => [ 'ZasticeniNazivi' ],
	'Randompage'                => [ 'Slučajna_stranica' ],
	'RandomInCategory'          => [ 'SlucajnoUKategoriji' ],
	'Randomredirect'            => [ 'SlucajnoPreusmjerenje' ],
	'Recentchanges'             => [ 'NedavneIzmjene' ],
	'Recentchangeslinked'       => [ 'PovezaneNedavneIzmjene' ],
	'Revisiondelete'            => [ 'VratiBrisanje' ],
	'Search'                    => [ 'Pretraga' ],
	'Shortpages'                => [ 'KratkeStranice' ],
	'Specialpages'              => [ 'SpecijalneStranice' ],
	'Statistics'                => [ 'Statistike' ],
	'Tags'                      => [ 'Oznake' ],
	'Unblock'                   => [ 'Deblokada' ],
	'Uncategorizedcategories'   => [ 'KategorijeBezKategorije' ],
	'Uncategorizedimages'       => [ 'SlikeBezKategorije' ],
	'Uncategorizedpages'        => [ 'StraniceBezKategorije' ],
	'Uncategorizedtemplates'    => [ 'SabloniBezKategorije' ],
	'Undelete'                  => [ 'PovratBrisanog' ],
	'Unlockdb'                  => [ 'OdkljucajDB' ],
	'Unusedcategories'          => [ 'NekorišteneKategorije' ],
	'Unusedimages'              => [ 'Nekorištene_datoteke', 'Nekorištene_slike' ],
	'Unusedtemplates'           => [ 'NekoristeniSabloni' ],
	'Unwatchedpages'            => [ 'NepraceneStranice' ],
	'Upload'                    => [ 'Postavi_datoteku' ],
	'Userlogin'                 => [ 'KorisničkaPrijava' ],
	'Userlogout'                => [ 'KorisničkaOdjava' ],
	'Userrights'                => [ 'KorisnickaPrava' ],
	'Version'                   => [ 'Verzija' ],
	'Wantedcategories'          => [ 'Tražene_kategorije' ],
	'Wantedfiles'               => [ 'Tražene_datoteke' ],
	'Wantedpages'               => [ 'Tražene_stranice' ],
	'Wantedtemplates'           => [ 'Traženi_šabloni' ],
	'Watchlist'                 => [ 'ListaPraćenja' ],
	'Whatlinkshere'             => [ 'StaJeLinkovanoOvdje' ],
	'Withoutinterwiki'          => [ 'BezInterwiki' ],
];

$magicWords = [
	'redirect'                  => [ '0', '#PREUSMJERI', '#REDIRECT' ],
	'notoc'                     => [ '0', '__BEZSADRŽAJA__', '__NOTOC__' ],
	'nogallery'                 => [ '0', '__BEZGALERIJE__', '__NOGALLERY__' ],
	'forcetoc'                  => [ '0', '__FORSIRANISADRŽAJ__', '__FORCETOC__' ],
	'toc'                       => [ '0', '__SADRŽAJ__', '__TOC__' ],
	'noeditsection'             => [ '0', '__BEZ_IZMJENA__', '__BEZIZMJENA__', '__NOEDITSECTION__' ],
	'currentmonth'              => [ '1', 'TRENUTNIMJESEC', 'CURRENTMONTH', 'CURRENTMONTH2' ],
	'currentmonth1'             => [ '1', 'TRENUTNIMJESEC1', 'CURRENTMONTH1' ],
	'currentmonthname'          => [ '1', 'TRENUTNIMJESECIME', 'CURRENTMONTHNAME' ],
	'currentmonthnamegen'       => [ '1', 'TRENUTNIMJESECROD', 'CURRENTMONTHNAMEGEN' ],
	'currentmonthabbrev'        => [ '1', 'TRENUTNIMJESECSKR', 'CURRENTMONTHABBREV' ],
	'currentday'                => [ '1', 'TRENUTNIDAN', 'CURRENTDAY' ],
	'currentday2'               => [ '1', 'TRENUTNIDAN2', 'CURRENTDAY2' ],
	'currentdayname'            => [ '1', 'TRENUTNIDANIME', 'CURRENTDAYNAME' ],
	'currentyear'               => [ '1', 'TRENUTNAGODINA', 'CURRENTYEAR' ],
	'currenttime'               => [ '1', 'TRENUTNOVRIJEME', 'CURRENTTIME' ],
	'currenthour'               => [ '1', 'TRENUTNISAT', 'CURRENTHOUR' ],
	'localmonth'                => [ '1', 'LOKALNIMJESEC', 'LOCALMONTH', 'LOCALMONTH2' ],
	'localmonth1'               => [ '1', 'LOKALNIMJESEC1', 'LOCALMONTH1' ],
	'localmonthname'            => [ '1', 'LOKALNIMJESECIME', 'LOCALMONTHNAME' ],
	'localmonthnamegen'         => [ '1', 'LOKALNIMJESECIMEROD', 'LOCALMONTHNAMEGEN' ],
	'localmonthabbrev'          => [ '1', 'LOKALNIMJESECSKR', 'LOCALMONTHABBREV' ],
	'localday'                  => [ '1', 'LOKALNIDAN', 'LOCALDAY' ],
	'localday2'                 => [ '1', 'LOKALNIDAN2', 'LOCALDAY2' ],
	'localdayname'              => [ '1', 'LOKALNIDANIME', 'LOCALDAYNAME' ],
	'localyear'                 => [ '1', 'LOKALNAGODINA', 'LOCALYEAR' ],
	'localtime'                 => [ '1', 'LOKALNOVRIJEME', 'LOCALTIME' ],
	'localhour'                 => [ '1', 'LOKALNISAT', 'LOCALHOUR' ],
	'numberofpages'             => [ '1', 'BROJSTRANICA', 'NUMBEROFPAGES' ],
	'numberofarticles'          => [ '1', 'BROJČLANAKA', 'NUMBEROFARTICLES' ],
	'numberoffiles'             => [ '1', 'BROJDATOTEKA', 'BROJFAJLOVA', 'NUMBEROFFILES' ],
	'numberofusers'             => [ '1', 'BROJKORISNIKA', 'NUMBEROFUSERS' ],
	'numberofactiveusers'       => [ '1', 'BROJAKTIVNIHKORISNIKA', 'NUMBEROFACTIVEUSERS' ],
	'numberofedits'             => [ '1', 'BROJPROMJENA', 'NUMBEROFEDITS' ],
	'pagename'                  => [ '1', 'STRANICA', 'PAGENAME' ],
	'pagenamee'                 => [ '1', 'STRANICE', 'PAGENAMEE' ],
	'namespace'                 => [ '1', 'IMENSKIPROSTOR', 'NAMESPACE' ],
	'namespacee'                => [ '1', 'IMENSKIPROSTORI', 'NAMESPACEE' ],
	'talkspace'                 => [ '1', 'PROSTORZARAZGOVOR', 'TALKSPACE' ],
	'talkspacee'                => [ '1', 'PROSTORIZARAZGOVOR', 'TALKSPACEE' ],
	'subjectspace'              => [ '1', 'PROSTORSUBJEKTA', 'PROSTORCLANAKA', 'SUBJECTSPACE', 'ARTICLESPACE' ],
	'subjectspacee'             => [ '1', 'PROSTORISUBJEKTA', 'PROSTORICLANKA', 'SUBJECTSPACEE', 'ARTICLESPACEE' ],
	'fullpagename'              => [ '1', 'PUNOIMESTRANE', 'FULLPAGENAME' ],
	'fullpagenamee'             => [ '1', 'PUNOIMESTRANEE', 'FULLPAGENAMEE' ],
	'subpagename'               => [ '1', 'IMEPODSTRANICE', 'SUBPAGENAME' ],
	'subpagenamee'              => [ '1', 'IMENAPODSTRANICE', 'SUBPAGENAMEE' ],
	'basepagename'              => [ '1', 'IMEBAZNESTRANICE', 'BASEPAGENAME' ],
	'basepagenamee'             => [ '1', 'IMENABAZNESTRANICE', 'BASEPAGENAMEE' ],
	'talkpagename'              => [ '1', 'IMESTRANICERAZGOVORA', 'TALKPAGENAME' ],
	'talkpagenamee'             => [ '1', 'IMENASTRANICERAZGOVORA', 'TALKPAGENAMEE' ],
	'subjectpagename'           => [ '1', 'IMESTRANICESUBKJEKTA', 'IMESTRANICECLANKA', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ],
	'subjectpagenamee'          => [ '1', 'IMENASTRANICESUBJEKTA', 'IMENASTRANICECLANAKA', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ],
	'msg'                       => [ '0', 'POR:', 'MSG:' ],
	'subst'                     => [ '0', 'ZAMJENI:', 'SUBST:' ],
	'msgnw'                     => [ '0', 'NVPOR:', 'MSGNW:' ],
	'img_thumbnail'             => [ '1', 'mini', 'thumb', 'thumbnail' ],
	'img_manualthumb'           => [ '1', 'mini=$1', 'thumbnail=$1', 'thumb=$1' ],
	'img_right'                 => [ '1', 'desno', 'd', 'right' ],
	'img_left'                  => [ '1', 'lijevo', 'l', 'left' ],
	'img_none'                  => [ '1', 'n', 'bez', 'none' ],
	'img_width'                 => [ '1', '$1piksel', '$1p', '$1px' ],
	'img_center'                => [ '1', 'centar', 'c', 'center', 'centre' ],
	'img_framed'                => [ '1', 'okvir', 'ram', 'frame', 'framed', 'enframed' ],
	'img_frameless'             => [ '1', 'bez_okvira', 'frameless' ],
	'img_page'                  => [ '1', 'stranica=$1', 'stranica $1', 'page=$1', 'page $1' ],
	'img_upright'               => [ '1', 'na_gore', 'na_gore=$1', 'na_gore_$1', 'upright', 'upright=$1', 'upright $1' ],
	'img_border'                => [ '1', 'granica', 'border' ],
	'img_baseline'              => [ '1', 'pocetna_linija', 'baseline' ],
	'img_sub'                   => [ '1', 'odjeljak', 'sub' ],
	'img_top'                   => [ '1', 'vrh', 'top' ],
	'img_text_top'              => [ '1', 'vrh_teksta', 'text-top' ],
	'img_middle'                => [ '1', 'sredina', 'middle' ],
	'img_bottom'                => [ '1', 'dugme', 'bottom' ],
	'img_text_bottom'           => [ '1', 'tekst-dugme', 'text-bottom' ],
	'sitename'                  => [ '1', 'IMESAJTA', 'SITENAME' ],
	'ns'                        => [ '0', 'IP:', 'NS:' ],
	'localurl'                  => [ '0', 'LOKALNAADRESA:', 'LOCALURL:' ],
	'localurle'                 => [ '0', 'LOKALNEADRESE:', 'LOCALURLE:' ],
	'servername'                => [ '0', 'IMESERVERA', 'SERVERNAME' ],
	'scriptpath'                => [ '0', 'SKRIPTA', 'SCRIPTPATH' ],
	'grammar'                   => [ '0', 'GRAMATIKA:', 'GRAMMAR:' ],
	'gender'                    => [ '0', 'POL:', 'GENDER:' ],
	'notitleconvert'            => [ '0', '__BEZTC__', '__NOTITLECONVERT__', '__NOTC__' ],
	'nocontentconvert'          => [ '0', '__BEZCC__', '__NOCONTENTCONVERT__', '__NOCC__' ],
	'currentweek'               => [ '1', 'TRENUTNASEDMICA', 'CURRENTWEEK' ],
	'currentdow'                => [ '1', 'TRENUTNIDOV', 'CURRENTDOW' ],
	'localweek'                 => [ '1', 'LOKALNASEDMICA', 'LOCALWEEK' ],
	'revisionid'                => [ '1', 'IDREVIZIJE', 'REVISIONID' ],
	'revisionday'               => [ '1', 'REVIZIJEDANA', 'REVISIONDAY' ],
	'revisionday2'              => [ '1', 'REVIZIJEDANA2', 'REVISIONDAY2' ],
	'revisionmonth'             => [ '1', 'REVIZIJAMJESECA', 'REVISIONMONTH' ],
	'revisionyear'              => [ '1', 'REVIZIJAGODINE', 'REVISIONYEAR' ],
	'revisiontimestamp'         => [ '1', 'REVIZIJAVREMENSKOGPECATA', 'REVISIONTIMESTAMP' ],
	'plural'                    => [ '0', 'MNOŽINA:', 'PLURAL:' ],
	'fullurl'                   => [ '0', 'PUNURL:', 'FULLURL:' ],
	'fullurle'                  => [ '0', 'PUNURLE:', 'FULLURLE:' ],
	'lcfirst'                   => [ '0', 'LCPRVI:', 'LCFIRST:' ],
	'ucfirst'                   => [ '0', 'UCPRVI:', 'UCFIRST:' ],
	'displaytitle'              => [ '1', 'POKAZINASLOV', 'DISPLAYTITLE' ],
	'newsectionlink'            => [ '1', '__LINKNOVESEKCIJE__', '__NEWSECTIONLINK__' ],
	'currentversion'            => [ '1', 'SADASNJAVERZIJA', 'CURRENTVERSION' ],
	'urlencode'                 => [ '0', 'DEKODIRAJADRESU', 'URLENCODE:' ],
	'currenttimestamp'          => [ '1', 'SADASNJIVREMENSKIPECAT', 'CURRENTTIMESTAMP' ],
	'localtimestamp'            => [ '1', 'LOKALNIVREMENSKIPECAT', 'LOCALTIMESTAMP' ],
	'language'                  => [ '0', '#JEZIK:', '#LANGUAGE:' ],
	'pagesinnamespace'          => [ '1', 'STRANICEUIMENSKOMPROSTORU:', 'PAGESINNAMESPACE:', 'PAGESINNS:' ],
	'numberofadmins'            => [ '1', 'BROJADMINISTRATORA', 'NUMBEROFADMINS' ],
	'formatnum'                 => [ '0', 'NUMERICKIFORMAT', 'FORMATNUM' ],
	'padleft'                   => [ '0', 'JASTUKLIJEVO', 'PADLEFT' ],
	'padright'                  => [ '0', 'JASTUKDESNO', 'PADRIGHT' ],
	'special'                   => [ '0', 'specijalno', 'special' ],
	'filepath'                  => [ '0', 'STAZADATOTEKE:', 'FILEPATH:' ],
	'tag'                       => [ '0', 'oznaka', 'tag' ],
	'hiddencat'                 => [ '1', '__SAKRIVENAKATEGORIJA__', '__HIDDENCAT__' ],
	'pagesincategory'           => [ '1', 'STRANICEUKATEGORIJI', 'STRANICEUKAT', 'PAGESINCATEGORY', 'PAGESINCAT' ],
	'pagesize'                  => [ '1', 'VELICINASTRANICE', 'PAGESIZE' ],
	'index'                     => [ '1', '__SADRZAJ__', '__INDEX__' ],
	'noindex'                   => [ '1', '__BEZSADRZAJA__', '__NOINDEX__' ],
	'numberingroup'             => [ '1', 'BROJUGRUPI', 'NUMBERINGROUP', 'NUMINGROUP' ],
	'staticredirect'            => [ '1', '__STATISTICNOPREUSMJERENJE__', '__STATICREDIRECT__' ],
	'protectionlevel'           => [ '1', 'NIVOZASTITE', 'PROTECTIONLEVEL' ],
	'formatdate'                => [ '0', 'formatdatuma', 'formatdate', 'dateformat' ],
	'url_path'                  => [ '0', 'PUTANJA', 'PATH' ],
	'url_query'                 => [ '0', 'UPIT', 'QUERY' ],
];

$fallback8bitEncoding = "iso-8859-2";
$separatorTransformTable = [ ',' => '.', '.' => ',' ];
$linkTrail = '/^([a-zćčžšđž]+)(.*)$/sDu';
