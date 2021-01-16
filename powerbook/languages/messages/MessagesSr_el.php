<?php
/** Serbian (Latin script) (srpski (latinica)‎)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author FriedrickMILBarbarossa
 * @author Geitost
 * @author Kaganer
 * @author Liangent
 * @author Meno25
 * @author Michaello
 * @author Milicevic01
 * @author Rancher
 * @author Red Baron
 * @author Reedy
 * @author Slaven Kosanovic
 * @author TheStefan12345
 * @author Жељко Тодоровић
 * @author Михајло Анђелковић
 * @author לערי ריינהארט
 */

$namespaceNames = [
	NS_MEDIA            => 'Medij',
	NS_SPECIAL          => 'Posebno',
	NS_TALK             => 'Razgovor',
	NS_USER             => 'Korisnik',
	NS_USER_TALK        => 'Razgovor_sa_korisnikom',
	NS_PROJECT_TALK     => 'Razgovor_o_$1',
	NS_FILE             => 'Datoteka',
	NS_FILE_TALK        => 'Razgovor_o_datoteci',
	NS_MEDIAWIKI        => 'Medijaviki',
	NS_MEDIAWIKI_TALK   => 'Razgovor_o_Medijavikiju',
	NS_TEMPLATE         => 'Šablon',
	NS_TEMPLATE_TALK    => 'Razgovor_o_šablonu',
	NS_HELP             => 'Pomoć',
	NS_HELP_TALK        => 'Razgovor_o_pomoći',
	NS_CATEGORY         => 'Kategorija',
	NS_CATEGORY_TALK    => 'Razgovor_o_kategoriji',
];

# Aliases to cyrillic namespaces
$namespaceAliases = [
	"Медија"                  => NS_MEDIA,
	"Посебно"                 => NS_SPECIAL,
	"Разговор"                => NS_TALK,
	"Корисник"                => NS_USER,
	"Разговор_са_корисником"  => NS_USER_TALK,
	"Разговор_о_$1"           => NS_PROJECT_TALK,
	"Слика"                   => NS_FILE,
	"Разговор_о_слици"        => NS_FILE_TALK,
	"МедијаВики"              => NS_MEDIAWIKI,
	"Разговор_о_МедијаВикију" => NS_MEDIAWIKI_TALK,
	'Шаблон'                  => NS_TEMPLATE,
	'Разговор_о_шаблону'      => NS_TEMPLATE_TALK,
	'Помоћ'                   => NS_HELP,
	'Разговор_о_помоћи'       => NS_HELP_TALK,
	'Категорија'              => NS_CATEGORY,
	'Разговор_о_категорији'   => NS_CATEGORY_TALK,

	'Medija'                  => NS_MEDIA,
	'Slika'                   => NS_FILE,
	'Razgovor_o_slici'        => NS_FILE_TALK,
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
	'redirect'                  => [ '0', '#Preusmeri', '#preusmeri', '#PREUSMERI', '#Preusmjeri', '#preusmjeri', '#PREUSMJERI', '#redirect', '#REDIRECT' ],
	'notoc'                     => [ '0', '__BEZSADRŽAJA__', '__BEZ_SADRŽAJA__', '__NOTOC__' ],
	'nogallery'                 => [ '0', '__BEZGALERIJE__', '__BEZ_GALERIJE__', '__NOGALLERY__' ],
	'forcetoc'                  => [ '0', '__FORSIRANISADRŽAJ__', '__FORSIRANI_SADRŽAJ__', '__PRIMORANISADRŽAJ__', '__PRIMORANI_SADRŽAJ__', '__FORCETOC__' ],
	'toc'                       => [ '0', '__SADRŽAJ__', '__TOC__' ],
	'noeditsection'             => [ '0', '__BEZIZMENA__', '__BEZ_IZMENA__', '__BEZIZMJENA__', '__BEZ_IZMJENA__', '__NOEDITSECTION__' ],
	'currentmonth'              => [ '1', 'TRENUTNIMESEC', 'TRENUTNI_MESEC', 'TEKUĆIMESEC', 'TEKUĆI_MESEC', 'CURRENTMONTH', 'CURRENTMONTH2' ],
	'currentmonth1'             => [ '1', 'TRENUTNIMESEC1', 'TRENUTNI_MESEC1', 'TEKUĆIMESEC1', 'TEKUĆI_MESEC1', 'CURRENTMONTH1' ],
	'currentmonthname'          => [ '1', 'TRENUTNIMESECIME', 'IMETEKUĆEGMESECA', 'IME_TEKUĆEG_MESECA', 'CURRENTMONTHNAME' ],
	'currentmonthnamegen'       => [ '1', 'TRENUTNIMESECGEN', 'TEKUĆIMESECGEN', 'TEKUĆI_MESEC_GEN', 'CURRENTMONTHNAMEGEN' ],
	'currentmonthabbrev'        => [ '1', 'TRENUTNIMESECSKR', 'TEKUĆIMESECSKR', 'TEKUĆI_MESEC_SKR', 'CURRENTMONTHABBREV' ],
	'currentday'                => [ '1', 'TRENUTNIDAN', 'TEKUĆIDAN', 'TEKUĆI_DAN', 'CURRENTDAY' ],
	'currentday2'               => [ '1', 'TEKUĆIDAN2', 'TEKUĆI_DAN_2', 'CURRENTDAY2' ],
	'currentdayname'            => [ '1', 'TRENUTNIDANIME', 'IMETEKUĆEGDANA', 'IME_TEKUĆEG_DANA', 'CURRENTDAYNAME' ],
	'currentyear'               => [ '1', 'TRENUTNAGODINA', 'TEKUĆAGODINA', 'TEKUĆA_GODINA', 'CURRENTYEAR' ],
	'currenttime'               => [ '1', 'TRENUTNOVREME', 'TEKUĆEVREME', 'TEKUĆE_VREME', 'CURRENTTIME' ],
	'currenthour'               => [ '1', 'TEKUĆISAT', 'TEKUĆI_SAT', 'CURRENTHOUR' ],
	'localmonth'                => [ '1', 'LOKALNIMESEC', 'LOKALNI_MESEC', 'LOCALMONTH', 'LOCALMONTH2' ],
	'localmonth1'               => [ '1', 'LOKALNIMESEC2', 'LOKALNI_MESEC2', 'LOCALMONTH1' ],
	'localmonthname'            => [ '1', 'IMELOKALNOGMESECA', 'IME_LOKALNOG_MESECA', 'LOCALMONTHNAME' ],
	'localmonthnamegen'         => [ '1', 'LOKALNIMESECGEN', 'LOKALNI_MESEC_GEN', 'LOCALMONTHNAMEGEN' ],
	'localmonthabbrev'          => [ '1', 'LOKALNIMESECSKR', 'LOKALNI_MESEC_SKR', 'LOCALMONTHABBREV' ],
	'localday'                  => [ '1', 'LOKALNIDAN', 'LOKALNI_DAN', 'LOCALDAY' ],
	'localday2'                 => [ '1', 'LOKALNIDAN2', 'LOKALNI_DAN2', 'LOCALDAY2' ],
	'localdayname'              => [ '1', 'IMELOKALNOGDANA', 'IME_LOKALNOG_DANA', 'LOCALDAYNAME' ],
	'localyear'                 => [ '1', 'LOKALNAGODINA', 'LOKALNA_GODINA', 'LOCALYEAR' ],
	'localtime'                 => [ '1', 'LOKALNOVREME', 'LOKALNO_VREME', 'LOCALTIME' ],
	'localhour'                 => [ '1', 'LOKALNISAT', 'LOKALNI_SAT', 'LOCALHOUR' ],
	'numberofpages'             => [ '1', 'BROJSTRANICA', 'BROJ_STRANICA', 'NUMBEROFPAGES' ],
	'numberofarticles'          => [ '1', 'BROJČLANAKA', 'BROJ_ČLANAKA', 'NUMBEROFARTICLES' ],
	'numberoffiles'             => [ '1', 'BROJDATOTEKA', 'BROJ_DATOTEKA', 'BROJFAJLOVA', 'BROJ_FAJLOVA', 'NUMBEROFFILES' ],
	'numberofusers'             => [ '1', 'BROJKORISNIKA', 'BROJ_KORISNIKA', 'NUMBEROFUSERS' ],
	'numberofactiveusers'       => [ '1', 'BROJAKTIVNIHKORISNIKA', 'BROJ_AKTIVNIH_KORISNIKA', 'NUMBEROFACTIVEUSERS' ],
	'numberofedits'             => [ '1', 'BROJIZMENA', 'BROJ_IZMENA', 'NUMBEROFEDITS' ],
	'pagename'                  => [ '1', 'IMESTRANICE', 'IME_STRANICE', 'STRANICA', 'PAGENAME' ],
	'pagenamee'                 => [ '1', 'IMENASTRANICA', 'IMENA_STRANICA', 'STRANICE', 'PAGENAMEE' ],
	'namespace'                 => [ '1', 'IMENSKIPROSTOR', 'IMENSKI_PROSTOR', 'NAMESPACE' ],
	'namespacee'                => [ '1', 'IMENSKIPROSTORI', 'IMENSKI_PROSTORI', 'NAMESPACEE' ],
	'namespacenumber'           => [ '1', 'BROJIMENSKOGPROSTORA', 'NAMESPACENUMBER' ],
	'talkspace'                 => [ '1', 'RAZGOVOR', 'TALKSPACE' ],
	'talkspacee'                => [ '1', 'RAZGOVORI', 'TALKSPACEE' ],
	'subjectspace'              => [ '1', 'IMENSKIPROSTORČLANKA', 'IMENSKI_PROSTOR_ČLANKA', 'SUBJECTSPACE', 'ARTICLESPACE' ],
	'subjectspacee'             => [ '1', 'IMENSKIPROSTORČLANAKA', 'IMENSKI_PROSTOR_ČLANAKA', 'SUBJECTSPACEE', 'ARTICLESPACEE' ],
	'fullpagename'              => [ '1', 'PUNOIMESTRANICE', 'PUNOIMESTRANE', 'PUNO_IME_STRANICE', 'PUNO_IME_STRANE', 'FULLPAGENAME' ],
	'fullpagenamee'             => [ '1', 'PUNAIMENASTRANICA', 'PUNAIMENASTRANA', 'PUNA_IMENA_STRANICA', 'PUNA_IMENA_STRANA', 'FULLPAGENAMEE' ],
	'subpagename'               => [ '1', 'IMEPODSTRANICE', 'IMEPODSTRANE', 'IME_PODSTRANICE', 'IME_PODSTRANE', 'SUBPAGENAME' ],
	'subpagenamee'              => [ '1', 'IMENAPODSTRANICA', 'IMENAPODSTRANA', 'IMENA_PODSTRANICA', 'IMENA_PODSTRANA', 'SUBPAGENAMEE' ],
	'basepagename'              => [ '1', 'IMEOSNOVE', 'IME_OSNOVE', 'BASEPAGENAME' ],
	'basepagenamee'             => [ '1', 'IMENAOSNOVA', 'IMENA_OSNOVA', 'BASEPAGENAMEE' ],
	'talkpagename'              => [ '1', 'IMERAZGOVORA', 'IME_RAZGOVORA', 'TALKPAGENAME' ],
	'talkpagenamee'             => [ '1', 'IMENARAZGOVORA', 'IMENA_RAZGOVORA', 'TALKPAGENAMEE' ],
	'subjectpagename'           => [ '1', 'IMEČLANKA', 'IME_ČLANKA', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ],
	'subjectpagenamee'          => [ '1', 'IMENAČLANAKA', 'IMENA_ČLANAKA', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ],
	'msg'                       => [ '0', 'POR:', 'MSG:' ],
	'subst'                     => [ '0', 'ZAMENI:', 'ZAMENA:', 'SUBST:' ],
	'safesubst'                 => [ '0', 'BEZBEDNAZAMENA', 'BEZBEDNA_ZAMENA', 'SAFESUBST:' ],
	'msgnw'                     => [ '0', 'NVPOR:', 'MSGNW:' ],
	'img_thumbnail'             => [ '1', 'mini', 'umanjeno', 'thumbnail', 'thumb' ],
	'img_manualthumb'           => [ '1', 'mini=$1', 'umanjeno=$1', 'thumbnail=$1', 'thumb=$1' ],
	'img_right'                 => [ '1', 'desno', 'd', 'right' ],
	'img_left'                  => [ '1', 'levo', 'l', 'left' ],
	'img_none'                  => [ '1', 'bez', 'n', 'none' ],
	'img_width'                 => [ '1', '$1piskel', '$1p', '$1px' ],
	'img_center'                => [ '1', 'centar', 'c', 'center', 'centre' ],
	'img_framed'                => [ '1', 'okvir', 'ram', 'framed', 'enframed', 'frame' ],
	'img_frameless'             => [ '1', 'bezokvira', 'bez_okvira', 'bezrama', 'bez_rama', 'frameless' ],
	'img_page'                  => [ '1', 'stranica=$1', 'strana=$1', 'stranica_$1', 'strana_$1', 'page=$1', 'page $1' ],
	'img_upright'               => [ '1', 'uspravno', 'uspravno=$1', 'uspravno_$1', 'upright', 'upright=$1', 'upright $1' ],
	'img_border'                => [ '1', 'ivica', 'border' ],
	'img_baseline'              => [ '1', 'osnova', 'baseline' ],
	'img_sub'                   => [ '1', 'pod', 'sub' ],
	'img_top'                   => [ '1', 'vrh', 'top' ],
	'img_text_top'              => [ '1', 'vrhteksta', 'vrh_teksta', 'text-top' ],
	'img_middle'                => [ '1', 'sredina', 'middle' ],
	'img_bottom'                => [ '1', 'dno', 'bottom' ],
	'img_text_bottom'           => [ '1', 'sredinateksta', 'sredina_teksta', 'text-bottom' ],
	'img_link'                  => [ '1', 'veza=$1', 'link=$1' ],
	'sitename'                  => [ '1', 'IMESAJTA', 'SITENAME' ],
	'ns'                        => [ '0', 'IP:', 'NS:' ],
	'localurl'                  => [ '0', 'LOKALNAADRESA:', 'LOKALNA_ADRESA:', 'LOCALURL:' ],
	'localurle'                 => [ '0', 'LOKALNEADRESE:', 'LOKALNE_ADRESE:', 'LOCALURLE:' ],
	'articlepath'               => [ '0', 'PUTANJAČLANKA', 'PUTANJA_ČLANKA', 'ARTICLEPATH' ],
	'servername'                => [ '0', 'IMESERVERA', 'IME_SERVERA', 'SERVERNAME' ],
	'scriptpath'                => [ '0', 'SKRIPTA', 'SKRIPT', 'SCRIPTPATH' ],
	'stylepath'                 => [ '0', 'PUTANJASTILA', 'PUTANJA_STILA', 'STYLEPATH' ],
	'grammar'                   => [ '0', 'GRAMATIKA:', 'GRAMMAR:' ],
	'gender'                    => [ '0', 'ROD:', 'LICE:', 'GENDER:' ],
	'notitleconvert'            => [ '0', '__BEZKN__', '__NOTITLECONVERT__', '__NOTC__' ],
	'nocontentconvert'          => [ '0', '__BEZCC__', '__NOCONTENTCONVERT__', '__NOCC__' ],
	'currentweek'               => [ '1', 'TRENUTNANEDELJA', 'TRENUTNA_NEDELJA', 'TEKUĆANEDELJA', 'TEKUĆA_NEDELJA', 'CURRENTWEEK' ],
	'currentdow'                => [ '1', 'TRENUTNIDOV', 'TEKUĆIDUN', 'CURRENTDOW' ],
	'localweek'                 => [ '1', 'LOKALNANEDELJA', 'LOKALNA_NEDELJA', 'LOCALWEEK' ],
	'localdow'                  => [ '1', 'LOKALNIDUN', 'LOCALDOW' ],
	'revisionid'                => [ '1', 'IDREVIZIJE', 'ID_REVIZIJE', 'IB_IZMENE', 'REVISIONID' ],
	'revisionday'               => [ '1', 'DANIZMENE', 'DAN_IZMENE', 'REVISIONDAY' ],
	'revisionday2'              => [ '1', 'DANIZMENE2', 'DAN_IZMENE2', 'REVISIONDAY2' ],
	'revisionmonth'             => [ '1', 'MESECIZMENE', 'MESEC_IZMENE', 'REVISIONMONTH' ],
	'revisionmonth1'            => [ '1', 'MESECIZMENE1', 'MESEC_IZMENE1', 'REVISIONMONTH1' ],
	'revisionyear'              => [ '1', 'GODINAIZMENE', 'GODINA_IZMENE', 'REVISIONYEAR' ],
	'revisiontimestamp'         => [ '1', 'VREMEIZMENE', 'VREME_IZMENE', 'REVISIONTIMESTAMP' ],
	'revisionuser'              => [ '1', 'KORISNIKIZMENE', 'KORISNIK_IZMENE', 'REVISIONUSER' ],
	'plural'                    => [ '0', 'MNOŽINA:', 'PLURAL:' ],
	'fullurl'                   => [ '0', 'PUNURL:', 'CELAADRESA', 'CELA_ADRESA', 'FULLURL:' ],
	'fullurle'                  => [ '0', 'PUNURLE:', 'CELEADRESE', 'CELE_ADRESE', 'FULLURLE:' ],
	'lcfirst'                   => [ '0', 'LCPRVI:', 'LCFIRST:' ],
	'ucfirst'                   => [ '0', 'UCPRVI:', 'UCFIRST:' ],
	'raw'                       => [ '0', 'ČIST:', 'RAW:' ],
	'displaytitle'              => [ '1', 'NAZIVPRIKAZA', 'NAZIV_PRIKAZA', 'DISPLAYTITLE' ],
	'newsectionlink'            => [ '1', '__NOVAVEZAODELJKA__', '__NOVA_VEZA_ODELJKA__', '__NEWSECTIONLINK__' ],
	'nonewsectionlink'          => [ '1', '__BEZNOVEVEZEODELJKA__', '__BEZ_NOVE_VEZE_ODELJKA__', '__NONEWSECTIONLINK__' ],
	'currentversion'            => [ '1', 'TEKUĆEIZDANJE', 'TEKUĆE_IZDANJE', 'CURRENTVERSION' ],
	'urlencode'                 => [ '0', 'KODIRANJEADRESE', 'KODIRANJE_ADRESE', 'URLENCODE:' ],
	'anchorencode'              => [ '0', 'KODIRANJEVEZE', 'KODIRANJE_VEZE', 'ANCHORENCODE' ],
	'currenttimestamp'          => [ '1', 'TEKUĆIOTISAKVREMENA', 'TEKUĆI_OTISAK_VREMENA', 'CURRENTTIMESTAMP' ],
	'localtimestamp'            => [ '1', 'OTISAKVREMENA', 'OTISAK_VREMENA', 'LOCALTIMESTAMP' ],
	'directionmark'             => [ '1', 'SMEROZNAKE', 'SMER	_OZNAKE', 'DIRECTIONMARK', 'DIRMARK' ],
	'language'                  => [ '0', '#JEZIK:', '#LANGUAGE:' ],
	'contentlanguage'           => [ '1', 'JEZIKSADRŽAJA', 'JEZIK_SADRŽAJA', 'CONTENTLANGUAGE', 'CONTENTLANG' ],
	'pagesinnamespace'          => [ '1', 'STRANICAUIMENSKOMPROSTORU', 'STRANAUIMENSKOMPROSTORU', 'STRANICA_U_IMENSKOM_PROSTORU', 'STRANA_U_IMENSKOM_PROSTORU', 'PAGESINNAMESPACE:', 'PAGESINNS:' ],
	'numberofadmins'            => [ '1', 'BROJADMINA', 'BROJ_ADMINA', 'NUMBEROFADMINS' ],
	'padleft'                   => [ '0', 'PORAVNAJULEVO', 'PORAVNAJ_ULEVO', 'PADLEFT' ],
	'padright'                  => [ '0', 'PORAVNAJUDESNO', 'PORAVNAJ_UDESNO', 'PADRIGHT' ],
	'special'                   => [ '0', 'posebno', 'special' ],
	'filepath'                  => [ '0', 'PUTANJADATOTEKE', 'PUTANJA_DATOTEKE', 'FILEPATH:' ],
	'tag'                       => [ '0', 'oznaka', 'tag' ],
	'hiddencat'                 => [ '1', '__SAKRIVENAKAT__', '__HIDDENCAT__' ],
	'pagesincategory'           => [ '1', 'STRANICAUKATEGORIJI', 'STRANAUKATEGORIJI', 'STRANICA_U_KATEGORIJI', 'STRANA_U_KATEGORIJI', 'PAGESINCATEGORY', 'PAGESINCAT' ],
	'pagesize'                  => [ '1', 'VELIČINASTRANICE', 'VELIČINASTRANE', 'VELIČINA_STRANICE', 'VELIČINA_STRANE', 'PAGESIZE' ],
	'index'                     => [ '1', '__INDEKS__', '__INDEX__' ],
	'noindex'                   => [ '1', '__BEZINDEKSA__', '__BEZ_INDEKSA__', '__NOINDEX__' ],
	'numberingroup'             => [ '1', 'BROJUGRUPI', 'BROJ_U_GRUPI', 'NUMBERINGROUP', 'NUMINGROUP' ],
	'staticredirect'            => [ '1', '__STATIČKOPREUSMERENJE__', 'STATIČKO_PREUSMERENJE', '__STATICREDIRECT__' ],
	'protectionlevel'           => [ '1', 'NIVOZAŠTITE', 'NIVO_ZAŠTITE', 'PROTECTIONLEVEL' ],
	'formatdate'                => [ '0', 'formatdatuma', 'format_datuma', 'formatdate', 'dateformat' ],
	'url_path'                  => [ '0', 'PUTANJA', 'PATH' ],
	'url_wiki'                  => [ '0', 'VIKI', 'WIKI' ],
	'url_query'                 => [ '0', 'REDOSLED', 'QUERY' ],
	'defaultsort_noerror'       => [ '0', 'bez_greške', 'noerror' ],
	'defaultsort_noreplace'     => [ '0', 'bez_zamene', 'noreplace' ],
];

$separatorTransformTable = [ ',' => '.', '.' => ',' ];
