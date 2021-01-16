<?php
/** Croatian (hrvatski)
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
	NS_USER             => 'Suradnik',
	NS_USER_TALK        => 'Razgovor_sa_suradnikom',
	NS_PROJECT_TALK     => 'Razgovor_$1',
	NS_FILE             => 'Datoteka',
	NS_FILE_TALK        => 'Razgovor_o_datoteci',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'MediaWiki_razgovor',
	NS_TEMPLATE         => 'Predložak',
	NS_TEMPLATE_TALK    => 'Razgovor_o_predlošku',
	NS_HELP             => 'Pomoć',
	NS_HELP_TALK        => 'Razgovor_o_pomoći',
	NS_CATEGORY         => 'Kategorija',
	NS_CATEGORY_TALK    => 'Razgovor_o_kategoriji',
];

$namespaceAliases = [
	'Slika' => NS_FILE,
	'Razgovor_o_slici' => NS_FILE_TALK,
];

$namespaceGenderAliases = [
	NS_USER => [ 'male' => 'Suradnik', 'female' => 'Suradnica' ],
	NS_USER_TALK => [ 'male' => 'Razgovor_sa_suradnikom', 'female' => 'Razgovor_sa_suradnicom' ],
];

$specialPageAliases = [
	'Activeusers'               => [ 'Aktivni_suradnici' ],
	'Allmessages'               => [ 'Sve_poruke' ],
	'Allpages'                  => [ 'Sve_stranice' ],
	'Ancientpages'              => [ 'Stare_stranice' ],
	'Blankpage'                 => [ 'Prazna_stranica' ],
	'Block'                     => [ 'Blokiraj' ],
	'Booksources'               => [ 'Traži_ISBN' ],
	'BrokenRedirects'           => [ 'Kriva_preusmjeravanja' ],
	'Categories'                => [ 'Kategorije' ],
	'ChangePassword'            => [ 'Izmijeni_lozinku' ],
	'Confirmemail'              => [ 'E-mail_potvrda' ],
	'Contributions'             => [ 'Doprinosi' ],
	'CreateAccount'             => [ 'Stvori_račun' ],
	'Deadendpages'              => [ 'Slijepe_ulice' ],
	'DeletedContributions'      => [ 'Obrisani_doprinosi' ],
	'DoubleRedirects'           => [ 'Dvostruka_preusmjeravanja' ],
	'Emailuser'                 => [ 'Elektronička_pošta', 'E-mail' ],
	'Export'                    => [ 'Izvezi' ],
	'Fewestrevisions'           => [ 'Najmanje_uređivane_stranice' ],
	'FileDuplicateSearch'       => [ 'Traži_kopije_datoteka' ],
	'Filepath'                  => [ 'Putanja_datoteke' ],
	'Import'                    => [ 'Uvezi' ],
	'Invalidateemail'           => [ 'Nevaljana_elektronička_pošta' ],
	'BlockList'                 => [ 'Blokirane_adrese' ],
	'LinkSearch'                => [ 'Traži_poveznice', 'Traži_linkove' ],
	'Listadmins'                => [ 'Administratori', 'Admini' ],
	'Listbots'                  => [ 'Botovi' ],
	'Listfiles'                 => [ 'Datoteke', 'Slike' ],
	'Listgrouprights'           => [ 'Suradničke_skupine' ],
	'Listredirects'             => [ 'Preusmjeravanja' ],
	'Listusers'                 => [ 'Suradnici', 'Popis_suradnika' ],
	'Lockdb'                    => [ 'Zaključaj_bazu' ],
	'Log'                       => [ 'Evidencije' ],
	'Lonelypages'               => [ 'Siročad' ],
	'Longpages'                 => [ 'Duge_stranice' ],
	'MergeHistory'              => [ 'Spoji_povijest' ],
	'MIMEsearch'                => [ 'MIME_tražilica' ],
	'Mostcategories'            => [ 'Najviše_kategorija' ],
	'Mostimages'                => [ 'Najviše_povezane_datoteke', 'Najviše_povezane_slike' ],
	'Mostlinked'                => [ 'Najviše_povezane_stranice' ],
	'Mostlinkedcategories'      => [ 'Najviše_povezane_kategorije' ],
	'Mostlinkedtemplates'       => [ 'Najviše_povezani_predlošci' ],
	'Mostrevisions'             => [ 'Najviše_uređivane_stranice' ],
	'Movepage'                  => [ 'Premjesti_stranicu' ],
	'Mycontributions'           => [ 'Moji_doprinosi' ],
	'Mypage'                    => [ 'Moja_stranica' ],
	'Mytalk'                    => [ 'Moj_razgovor' ],
	'Myuploads'                 => [ 'Moje_datoteke' ],
	'Newimages'                 => [ 'Nove_datoteke', 'Nove_slike' ],
	'Newpages'                  => [ 'Nove_stranice' ],
	'Preferences'               => [ 'Postavke' ],
	'Prefixindex'               => [ 'Prefiks_indeks', 'Stranice_po_prefiksu' ],
	'Protectedpages'            => [ 'Zaštićene_stranice' ],
	'Protectedtitles'           => [ 'Zaštićeni_naslovi' ],
	'Randompage'                => [ 'Slučajna_stranica' ],
	'Randomredirect'            => [ 'Slučajno_preusmjeravanje' ],
	'Recentchanges'             => [ 'Nedavne_promjene' ],
	'Recentchangeslinked'       => [ 'Povezane_promjene' ],
	'Revisiondelete'            => [ 'Brisanje_izmjene' ],
	'Search'                    => [ 'Traži' ],
	'Shortpages'                => [ 'Kratke_stranice' ],
	'Specialpages'              => [ 'Posebne_stranice' ],
	'Statistics'                => [ 'Statistika' ],
	'Tags'                      => [ 'Oznake' ],
	'Unblock'                   => [ 'Odblokiraj' ],
	'Uncategorizedcategories'   => [ 'Nekategorizirane_kategorije' ],
	'Uncategorizedimages'       => [ 'Nekategorizirane_slike' ],
	'Uncategorizedpages'        => [ 'Nekategorizirane_stranice' ],
	'Uncategorizedtemplates'    => [ 'Nekategorizirani_predlošci' ],
	'Undelete'                  => [ 'Vrati' ],
	'Unlockdb'                  => [ 'Otključaj_bazu' ],
	'Unusedcategories'          => [ 'Nekorištene_kategorije' ],
	'Unusedimages'              => [ 'Nekorištene_datoteke', 'Nekorištene_slike' ],
	'Unusedtemplates'           => [ 'Nekorišteni_predlošci' ],
	'Unwatchedpages'            => [ 'Negledane_stranice' ],
	'Upload'                    => [ 'Postavi_datoteku' ],
	'Userlogin'                 => [ 'Prijava' ],
	'Userlogout'                => [ 'Odjava' ],
	'Userrights'                => [ 'Suradnička_prava' ],
	'Version'                   => [ 'Verzija', 'Inačica' ],
	'Wantedcategories'          => [ 'Tražene_kategorije' ],
	'Wantedfiles'               => [ 'Tražene_datoteke' ],
	'Wantedpages'               => [ 'Tražene_stranice' ],
	'Wantedtemplates'           => [ 'Traženi_predlošci' ],
	'Watchlist'                 => [ 'Praćene_stranice' ],
	'Whatlinkshere'             => [ 'Što_vodi_ovamo' ],
	'Withoutinterwiki'          => [ 'Bez_međuwikipoveznica', 'Bez_interwikija' ],
];

$magicWords = [
	'redirect'                  => [ '0', '#Preusmjeri', '#PREUSMJERI', '#REDIRECT' ],
	'notoc'                     => [ '0', '__BEZSADRŽAJA__', '__NOTOC__' ],
	'nogallery'                 => [ '0', '__BEZGALERIJE__', '__NOGALLERY__' ],
	'forcetoc'                  => [ '0', '__UKLJUČISADRŽAJ__', '__FORCETOC__' ],
	'toc'                       => [ '0', '__SADRŽAJ__', '__TOC__' ],
	'noeditsection'             => [ '0', '__BEZUREĐIVANJAODLOMAKA__', '__NOEDITSECTION__' ],
	'currentmonth'              => [ '1', 'TRENUTAČNIMJESEC', 'CURRENTMONTH', 'CURRENTMONTH2' ],
	'currentmonth1'             => [ '1', 'TRENUTAČNIMJESEC1', 'CURRENTMONTH1' ],
	'currentmonthname'          => [ '1', 'TRENUTAČNIMJESECIME', 'CURRENTMONTHNAME' ],
	'currentmonthnamegen'       => [ '1', 'TRENUTAČNIMJESECIMEGEN', 'CURRENTMONTHNAMEGEN' ],
	'currentmonthabbrev'        => [ '1', 'TRENUTAČNIMJESECKRAT', 'CURRENTMONTHABBREV' ],
	'currentday'                => [ '1', 'TRENUTAČNIDAN', 'CURRENTDAY' ],
	'currentday2'               => [ '1', 'TRENUTAČNIDAN2', 'CURRENTDAY2' ],
	'currentdayname'            => [ '1', 'TRENUTAČNIDANIME', 'CURRENTDAYNAME' ],
	'currentyear'               => [ '1', 'TRENUTAČNAGODINA', 'CURRENTYEAR' ],
	'currenttime'               => [ '1', 'TRENUTAČNOVRIJEME', 'CURRENTTIME' ],
	'currenthour'               => [ '1', 'TRENUTAČNISAT', 'CURRENTHOUR' ],
	'localmonth'                => [ '1', 'MJESNIMJESEC', 'LOCALMONTH', 'LOCALMONTH2' ],
	'localmonth1'               => [ '1', 'MJESNIMJESEC1', 'LOCALMONTH1' ],
	'localmonthname'            => [ '1', 'MJESNIMJESECIME', 'LOCALMONTHNAME' ],
	'localmonthnamegen'         => [ '1', 'MJESNIMJESECIMEGEN', 'LOCALMONTHNAMEGEN' ],
	'localmonthabbrev'          => [ '1', 'MJESNIMJESECKRAT', 'LOCALMONTHABBREV' ],
	'localday'                  => [ '1', 'MJESNIDAN', 'LOCALDAY' ],
	'localday2'                 => [ '1', 'MJESNIDAN2', 'LOCALDAY2' ],
	'localdayname'              => [ '1', 'MJESNIDANIME', 'LOCALDAYNAME' ],
	'localyear'                 => [ '1', 'MJESNAGODINA', 'LOCALYEAR' ],
	'localtime'                 => [ '1', 'MJESNOVRIJEME', 'LOCALTIME' ],
	'localhour'                 => [ '1', 'MJESNISAT', 'LOCALHOUR' ],
	'numberofpages'             => [ '1', 'BROJSTRANICA', 'NUMBEROFPAGES' ],
	'numberofarticles'          => [ '1', 'BROJČLANAKA', 'NUMBEROFARTICLES' ],
	'numberoffiles'             => [ '1', 'BROJDATOTEKA', 'NUMBEROFFILES' ],
	'numberofusers'             => [ '1', 'BROJSURADNIKA', 'NUMBEROFUSERS' ],
	'numberofactiveusers'       => [ '1', 'BROJAKTIVNIHSURADNIKA', 'NUMBEROFACTIVEUSERS' ],
	'numberofedits'             => [ '1', 'BROJUREĐIVANJA', 'NUMBEROFEDITS' ],
	'pagename'                  => [ '1', 'IMESTRANICE', 'PAGENAME' ],
	'pagenamee'                 => [ '1', 'IMESTRANICEE', 'PAGENAMEE' ],
	'namespace'                 => [ '1', 'IMENSKIPROSTOR', 'NAMESPACE' ],
	'namespacee'                => [ '1', 'IMENSKIPROSTORE', 'NAMESPACEE' ],
	'talkspace'                 => [ '1', 'RAZGOVOR', 'TALKSPACE' ],
	'talkspacee'                => [ '1', 'RAZGOVORE', 'TALKSPACEE' ],
	'subjectspace'              => [ '1', 'PROSTORSTRANICE', 'IMPSTRANICE', 'SUBJECTSPACE', 'ARTICLESPACE' ],
	'subjectspacee'             => [ '1', 'PROSTORSTRANICEE', 'IMPSTRANICEE', 'SUBJECTSPACEE', 'ARTICLESPACEE' ],
	'fullpagename'              => [ '1', 'PUNOIMESTRANICE', 'FULLPAGENAME' ],
	'fullpagenamee'             => [ '1', 'PUNOIMESTRANICEE', 'FULLPAGENAMEE' ],
	'subpagename'               => [ '1', 'IMEPODSTRANICE', 'SUBPAGENAME' ],
	'subpagenamee'              => [ '1', 'IMEPODSTRANICEE', 'SUBPAGENAMEE' ],
	'basepagename'              => [ '1', 'IMEOSNOVNESTRANICE', 'BASEPAGENAME' ],
	'basepagenamee'             => [ '1', 'IMEOSNOVNESTRANICEE', 'BASEPAGENAMEE' ],
	'talkpagename'              => [ '1', 'IMERAZGOVORASTRANICE', 'TALKPAGENAME' ],
	'talkpagenamee'             => [ '1', 'IMERAZGOVORASTRANICEE', 'TALKPAGENAMEE' ],
	'subjectpagename'           => [ '1', 'IMEGLAVNESTRANICE', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ],
	'subjectpagenamee'          => [ '1', 'IMEGLAVNESTRANICEE', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ],
	'subst'                     => [ '0', 'ZAMJENA:', 'SUBST:' ],
	'img_thumbnail'             => [ '1', 'mini', 'minijatura', 'thumb', 'thumbnail' ],
	'img_manualthumb'           => [ '1', 'minijatura=$1', 'thumbnail=$1', 'thumb=$1' ],
	'img_right'                 => [ '1', 'desno', 'right' ],
	'img_left'                  => [ '1', 'lijevo', 'left' ],
	'img_none'                  => [ '1', 'ništa', 'none' ],
	'img_center'                => [ '1', 'središte', 'center', 'centre' ],
	'img_framed'                => [ '1', 'okvir', 'frame', 'framed', 'enframed' ],
	'img_frameless'             => [ '1', 'bezokvira', 'frameless' ],
	'img_lang'                  => [ '1', 'jezik=$1', 'lang=$1' ],
	'img_page'                  => [ '1', 'stranica=$1', 'stranica $1', 'page=$1', 'page $1' ],
	'img_upright'               => [ '1', 'uspravno=$1', 'uspravno $1', 'upright', 'upright=$1', 'upright $1' ],
	'img_border'                => [ '1', 'obrub', 'border' ],
	'img_baseline'              => [ '1', 'osnovnacrta', 'baseline' ],
	'img_sub'                   => [ '1', 'ind', 'potpis', 'sub' ],
	'img_super'                 => [ '1', 'natpis', 'eks', 'super', 'sup' ],
	'img_top'                   => [ '1', 'vrh', 'top' ],
	'img_text_top'              => [ '1', 'tekst-vrh', 'text-top' ],
	'img_middle'                => [ '1', 'pola', 'middle' ],
	'img_bottom'                => [ '1', 'dno', 'bottom' ],
	'img_text_bottom'           => [ '1', 'tekst-dno', 'text-bottom' ],
	'img_link'                  => [ '1', 'poveznica=$1', 'link=$1' ],
	'sitename'                  => [ '1', 'IMEPROJEKTA', 'SITENAME' ],
	'ns'                        => [ '0', 'IMP:', 'NS:' ],
	'localurl'                  => [ '0', 'MJESNIURL:', 'LOCALURL:' ],
	'localurle'                 => [ '0', 'MJESNIURLE:', 'LOCALURLE:' ],
	'servername'                => [ '0', 'IMESERVERA', 'SERVERNAME' ],
	'scriptpath'                => [ '0', 'PUTANJASKRIPTE', 'SCRIPTPATH' ],
	'grammar'                   => [ '0', 'GRAMATIKA:', 'GRAMMAR:' ],
	'notitleconvert'            => [ '0', '__BEZPRETVARANJANASLOVA__', '__BPN__', '__NOTITLECONVERT__', '__NOTC__' ],
	'nocontentconvert'          => [ '0', '__BEZPRETVARANJASADRŽAJA__', '__BPS__', '__NOCONTENTCONVERT__', '__NOCC__' ],
	'currentweek'               => [ '1', 'TRENUTAČNITJEDAN', 'CURRENTWEEK' ],
	'currentdow'                => [ '1', 'TRENUTAČNIDANTJEDNA', 'CURRENTDOW' ],
	'localweek'                 => [ '1', 'MJESNITJEDAN', 'LOCALWEEK' ],
	'localdow'                  => [ '1', 'MJESNIDANTJEDNA', 'LOCALDOW' ],
	'revisionid'                => [ '1', 'IDIZMJENE', 'REVISIONID' ],
	'revisionday'               => [ '1', 'DANIZMJENE', 'REVISIONDAY' ],
	'revisionday2'              => [ '1', 'DANIZMJENE2', 'REVISIONDAY2' ],
	'revisionmonth'             => [ '1', 'MJESECIZMJENE', 'REVISIONMONTH' ],
	'revisionyear'              => [ '1', 'GODINAIZMJENE', 'REVISIONYEAR' ],
	'revisiontimestamp'         => [ '1', 'VREMENSKAOZNAKAIZMJENE', 'REVISIONTIMESTAMP' ],
	'plural'                    => [ '0', 'MNOŽINA:', 'PLURAL:' ],
	'fullurl'                   => [ '0', 'PUNIURL:', 'FULLURL:' ],
	'fullurle'                  => [ '0', 'PUNIURLE:', 'FULLURLE:' ],
	'lcfirst'                   => [ '0', 'MSPRVO:', 'LCFIRST:' ],
	'ucfirst'                   => [ '0', 'VSPRVO:', 'UCFIRST:' ],
	'lc'                        => [ '0', 'MS:', 'LC:' ],
	'uc'                        => [ '0', 'VS:', 'UC:' ],
	'raw'                       => [ '0', 'NEOBRAĐENO:', 'RAW:' ],
	'displaytitle'              => [ '1', 'POKAŽINASLOV', 'DISPLAYTITLE' ],
	'rawsuffix'                 => [ '1', 'NEO', 'R' ],
	'newsectionlink'            => [ '1', '__NOVIODLOMAKPOVEZNICA__', '__NEWSECTIONLINK__' ],
	'currentversion'            => [ '1', 'TRENUTAČNAIZMJENA', 'CURRENTVERSION' ],
	'urlencode'                 => [ '0', 'URLKODIRANJE:', 'URLENCODE:' ],
	'anchorencode'              => [ '0', 'SIDROKODIRANJE', 'ANCHORENCODE' ],
	'currenttimestamp'          => [ '1', 'TRENUTAČNAOZNAKAVREMENA', 'CURRENTTIMESTAMP' ],
	'localtimestamp'            => [ '1', 'MJESNAOZNAKAVREMENA', 'LOCALTIMESTAMP' ],
	'language'                  => [ '0', '#JEZIK:', '#LANGUAGE:' ],
	'contentlanguage'           => [ '1', 'JEZIKPROJEKTA', 'CONTENTLANGUAGE', 'CONTENTLANG' ],
	'pagesinnamespace'          => [ '1', 'STRANICEPOPROSTORU:', 'STRANICEUIMP', 'PAGESINNAMESPACE:', 'PAGESINNS:' ],
	'numberofadmins'            => [ '1', 'BROJADMINA', 'NUMBEROFADMINS' ],
	'formatnum'                 => [ '0', 'OBLIKBROJA', 'FORMATNUM' ],
	'padleft'                   => [ '0', 'POSTAVALIJEVO', 'PADLEFT' ],
	'padright'                  => [ '0', 'POSTAVADESNO', 'PADRIGHT' ],
	'special'                   => [ '0', 'posebno', 'special' ],
	'defaultsort'               => [ '1', 'GLAVNIRASPORED:', 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ],
	'filepath'                  => [ '0', 'PUTANJADATOTEKE:', 'FILEPATH:' ],
	'tag'                       => [ '0', 'oznaka', 'tag' ],
	'hiddencat'                 => [ '1', '__SKRIVENAKAT__', '__HIDDENCAT__' ],
	'pagesincategory'           => [ '1', 'STRANICEPOKATEGORIJI', 'STRANICEUKAT', 'PAGESINCATEGORY', 'PAGESINCAT' ],
	'pagesize'                  => [ '1', 'VELIČINASTRANICE', 'PAGESIZE' ],
	'index'                     => [ '1', '__KAZALO__', '__INDEX__' ],
	'noindex'                   => [ '1', '__BEZKAZALA__', '__NOINDEX__' ],
	'staticredirect'            => [ '1', '__NEPOMIČNOPREUSMJERAVANJE__', '__STATICREDIRECT__' ],
];

$datePreferences = [
	'default',
	'dmy hr',
	'mdy',
	'ymd',
	'ISO 8601',
];

$defaultDateFormat = 'dmy hr';

$dateFormats = [
	'dmy hr time' => 'H:i',
	'dmy hr date' => 'j. F Y.',
	'dmy hr both' => 'H:i, j. F Y.',

	'mdy time' => 'H:i',
	'mdy date' => 'F j, Y',
	'mdy both' => 'H:i, F j, Y',

	'ymd time' => 'H:i',
	'ymd date' => 'Y F j',
	'ymd both' => 'H:i, Y F j',

	'ISO 8601 time' => 'xnH:xni:xns',
	'ISO 8601 date' => 'xnY-xnm-xnd',
	'ISO 8601 both' => 'xnY-xnm-xnd"T"xnH:xni:xns',
];

$separatorTransformTable = [ ',' => '.', '.' => ',' ];

$fallback8bitEncoding = 'iso-8859-2';

$linkTrail = '/^([čšžćđßa-z]+)(.*)$/sDu';
