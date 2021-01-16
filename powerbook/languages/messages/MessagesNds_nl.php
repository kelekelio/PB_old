<?php
/** Low Saxon (Netherlands) (Nedersaksies)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Erwin
 * @author Erwin85
 * @author Geitost
 * @author HanV
 * @author Jens Frank
 * @author Kaganer
 * @author Purodha
 * @author Servien
 * @author Sjoerddebruin
 * @author Slomox
 * @author Urhixidur
 * @author Ævar Arnfjörð Bjarmason <avarab@gmail.com>
 * @author לערי ריינהארט
 */

$fallback = 'nl';

$namespaceNames = [
	NS_MEDIA            => 'Media',
	NS_SPECIAL          => 'Spesiaal',
	NS_TALK             => 'Overleg',
	NS_USER             => 'Gebruker',
	NS_USER_TALK        => 'Overleg_gebruker',
	NS_PROJECT_TALK     => 'Overleg_$1',
	NS_FILE             => 'Bestaand',
	NS_FILE_TALK        => 'Overleg_bestaand',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'Overleg_MediaWiki',
	NS_TEMPLATE         => 'Mal',
	NS_TEMPLATE_TALK    => 'Overleg_mal',
	NS_HELP             => 'Hulpe',
	NS_HELP_TALK        => 'Overleg_hulpe',
	NS_CATEGORY         => 'Kategorie',
	NS_CATEGORY_TALK    => 'Overleg_kategorie',
];

$namespaceAliases = [
	'Speciaol'           => NS_SPECIAL,
	'Speciaal'           => NS_SPECIAL,
	'Sjabloon'           => NS_TEMPLATE,
	'Overleg_sjabloon'   => NS_TEMPLATE_TALK,
	'Ofbeelding'         => NS_FILE,
	'Overleg_ofbeelding' => NS_FILE_TALK,
	'Categorie'          => NS_CATEGORY,
	'Overleg_categorie'  => NS_CATEGORY_TALK,
	'Kattegerie'         => NS_CATEGORY,
	'Overleg_kattegerie' => NS_HELP_TALK,
];

$dateFormats = [
	'mdy time' => 'H:i',
	'mdy date' => 'M j, Y',
	'mdy both' => 'H:i, M j, Y',

	'dmy time' => 'H:i',
	'dmy date' => 'j M Y',
	'dmy both' => 'H:i, j M Y',

	'ymd time' => 'H:i',
	'ymd date' => 'Y M j',
	'ymd both' => 'H:i, Y M j',
];

$bookstoreList = [
	'Koninklijke Bibliotheek' => 'http://opc4.kb.nl/DB=1/SET=5/TTL=1/CMD?ACT=SRCH&IKT=1007&SRT=RLV&TRM=$1'
];

$magicWords = [
	'redirect'                  => [ '0', '#DEURVERWIEZING', '#DUURVERWIEZING', '#DOORVERWIJZING', '#REDIRECT' ],
	'notoc'                     => [ '0', '__GIENONDERWARPEN__', '__GEENINHOUD__', '__NOTOC__' ],
	'nogallery'                 => [ '0', '__GIENGALLERIEJE__', '__GIENGALDERIEJE__', '__GEEN_GALERIJ__', '__NOGALLERY__' ],
	'forcetoc'                  => [ '0', '__FORSEERONDERWARPEN_', '__INHOUD_DWINGEN__', '__FORCEERINHOUD__', '__FORCETOC__' ],
	'toc'                       => [ '0', '__ONDERWARPEN__', '__INHOUD__', '__TOC__' ],
	'noeditsection'             => [ '0', '__GIENBEWARKSEKSIE__', '__NIETBEWERKBARESECTIE__', '__NOEDITSECTION__' ],
	'currentmonth'              => [ '1', 'DISSEMAOND', 'DISSEMAOND2', 'HUIDIGEMAAND', 'HUIDIGEMAAND2', 'CURRENTMONTH', 'CURRENTMONTH2' ],
	'currentmonth1'             => [ '1', 'DISSEMAOND1', 'HUIDIGEMAAND1', 'CURRENTMONTH1' ],
	'currentmonthname'          => [ '1', 'DISSEMAONDNAAM', 'HUIDIGEMAANDNAAM', 'CURRENTMONTHNAME' ],
	'currentmonthnamegen'       => [ '1', 'DISSEMAONDGEN', 'HUIDIGEMAANDGEN', 'CURRENTMONTHNAMEGEN' ],
	'currentmonthabbrev'        => [ '1', 'DISSEMAONDAOFK', 'HUIDIGEMAANDAFK', 'CURRENTMONTHABBREV' ],
	'currentday'                => [ '1', 'DISSEDAG', 'HUIDIGEDAG', 'CURRENTDAY' ],
	'currentday2'               => [ '1', 'DISSEDAG2', 'HUIDIGEDAG2', 'CURRENTDAY2' ],
	'currentdayname'            => [ '1', 'DISSEDAGNAAM', 'HUIDIGEDAGNAAM', 'CURRENTDAYNAME' ],
	'currentyear'               => [ '1', 'DITJAOR', 'HUIDIGJAAR', 'CURRENTYEAR' ],
	'currenttime'               => [ '1', 'DISSETIED', 'HUIDIGETIJD', 'CURRENTTIME' ],
	'currenthour'               => [ '1', 'DITURE', 'HUIDIGUUR', 'CURRENTHOUR' ],
	'localmonth'                => [ '1', 'LOKALEMAOND', 'PLAATSELIJKEMAAND', 'LOKALEMAAND', 'LOKALEMAAND2', 'LOCALMONTH', 'LOCALMONTH2' ],
	'localmonth1'               => [ '1', 'LOKALEMAOND1', 'LOKALEMAAND1', 'LOCALMONTH1' ],
	'localmonthname'            => [ '1', 'LOKALEMAONDNAAM', 'PLAATSELIJKEMAANDNAAM', 'LOKALEMAANDNAAM', 'LOCALMONTHNAME' ],
	'localmonthnamegen'         => [ '1', 'LOKALEMAONDNAAMGEN', 'PLAATSELIJKEMAANDNAAMGEN', 'LOKALEMAANDNAAMGEN', 'LOCALMONTHNAMEGEN' ],
	'localmonthabbrev'          => [ '1', 'LOKALEMAONDAOFK', 'PLAATSELIJKEMAANDAFK', 'LOKALEMAANDAFK', 'LOCALMONTHABBREV' ],
	'localday'                  => [ '1', 'LOKALEDAG', 'PLAATSELIJKEDAG', 'LOCALDAY' ],
	'localday2'                 => [ '1', 'LOKALEDAG2', 'PLAATSELIJKEDAG2', 'LOCALDAY2' ],
	'localdayname'              => [ '1', 'LOKALEDAGNAAM', 'PLAATSELIJKEDAGNAAM', 'LOCALDAYNAME' ],
	'localyear'                 => [ '1', 'LOKAALJAOR', 'PLAATSELIJKJAAR', 'LOKAALJAAR', 'LOCALYEAR' ],
	'localtime'                 => [ '1', 'LOKALETIED', 'PLAATSELIJKETIJD', 'LOKALETIJD', 'LOCALTIME' ],
	'localhour'                 => [ '1', 'LOKAALURE', 'PLAATSELIJKUUR', 'LOKAALUUR', 'LOCALHOUR' ],
	'numberofpages'             => [ '1', 'ANTALZIEJEN', 'AANTALPAGINAS', 'AANTALPAGINA\'S', 'AANTALPAGINA’S', 'NUMBEROFPAGES' ],
	'numberofarticles'          => [ '1', 'ANTALARTIKELS', 'AANTALARTIKELEN', 'NUMBEROFARTICLES' ],
	'numberoffiles'             => [ '1', 'ANTALBESTANDEN', 'AANTALBESTANDEN', 'NUMBEROFFILES' ],
	'numberofusers'             => [ '1', 'ANTALGEBRUKERS', 'AANTALGEBRUIKERS', 'NUMBEROFUSERS' ],
	'numberofactiveusers'       => [ '1', 'ANTALAKTIEVEGEBRUKERS', 'AANTALACTIEVEGEBRUIKERS', 'ACTIEVEGEBRUIKERS', 'NUMBEROFACTIVEUSERS' ],
	'numberofedits'             => [ '1', 'ANTALBEWARKINGEN', 'AANTALBEWERKINGEN', 'NUMBEROFEDITS' ],
	'pagename'                  => [ '1', 'ZIEDNAAM', 'PAGINANAAM', 'PAGENAME' ],
	'pagenamee'                 => [ '1', 'ZIEDNAAME', 'PAGINANAAME', 'PAGENAMEE' ],
	'namespace'                 => [ '1', 'NAAMRUUMTE', 'NAAMRUIMTE', 'NAMESPACE' ],
	'namespacee'                => [ '1', 'NAAMRUUMTEE', 'NAAMRUIMTEE', 'NAMESPACEE' ],
	'namespacenumber'           => [ '1', 'NAAMRUUMTENUMMER', 'NAAMRUIMTENUMMER', 'NAMESPACENUMBER' ],
	'talkspace'                 => [ '1', 'OVERLEGRUUMTE', 'OVERLEGRUIMTE', 'TALKSPACE' ],
	'talkspacee'                => [ '1', 'OVERLEGRUUMTEE', 'OVERLEGRUIMTEE', 'TALKSPACEE' ],
	'subjectspace'              => [ '1', 'ONDERWARPRUUMTE', 'ARTIKELRUUMTE', 'ONDERWERPRUIMTE', 'ARTIKELRUIMTE', 'SUBJECTSPACE', 'ARTICLESPACE' ],
	'subjectspacee'             => [ '1', 'ONDERWARPRUUMTEE', 'ARTIKELRUUMTEE', 'ONDERWERPRUIMTEE', 'ARTIKELRUIMTEE', 'SUBJECTSPACEE', 'ARTICLESPACEE' ],
	'fullpagename'              => [ '1', 'HELEZIEDNAAM', 'VOLLEDIGEPAGINANAAM', 'FULLPAGENAME' ],
	'fullpagenamee'             => [ '1', 'HELEZIEDNAAME', 'VOLLEDIGEPAGINANAAME', 'FULLPAGENAMEE' ],
	'subpagename'               => [ '1', 'DEELZIEDNAAM', 'DEELPAGINANAAM', 'SUBPAGENAME' ],
	'subpagenamee'              => [ '1', 'DEELZIEDNAAME', 'DEELPAGINANAAME', 'SUBPAGENAMEE' ],
	'rootpagename'              => [ '1', 'ROOTZIEDNAAM', 'ROOTPAGINANAAM', 'ROOTPAGENAME' ],
	'rootpagenamee'             => [ '1', 'ROOTZIEDNAAME', 'ROOTPAGINANAAME', 'ROOTPAGENAMEE' ],
	'basepagename'              => [ '1', 'BAOSISPAGINANAAM', 'BASISPAGINANAAM', 'BASEPAGENAME' ],
	'basepagenamee'             => [ '1', 'BAOSISPAGINANAAME', 'BASISPAGINANAAME', 'BASEPAGENAMEE' ],
	'talkpagename'              => [ '1', 'OVERLEGPAGINANAAM', 'TALKPAGENAME' ],
	'talkpagenamee'             => [ '1', 'OVERLEGPAGINANAAME', 'TALKPAGENAMEE' ],
	'subjectpagename'           => [ '1', 'ONDERWARPZIEDNAAM', 'ARTIKELZIEDNAAM', 'ONDERWERPPAGINANAAM', 'ARTIKELPAGINANAAM', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ],
	'subjectpagenamee'          => [ '1', 'ONDERWARZIEDNAAME', 'ARTIKELZIEDNAAME', 'ONDERWERPPAGINANAAME', 'ARTIKELPAGINANAAME', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ],
	'msg'                       => [ '0', 'BERICHT:', 'MSG:' ],
	'subst'                     => [ '0', 'VERVANG:', 'VERV:', 'SUBST:' ],
	'msgnw'                     => [ '0', 'BERICHTNW', 'MSGNW:' ],
	'img_thumbnail'             => [ '1', 'duum', 'doem', 'miniatuur', 'mini', 'thumbnail', 'thumb' ],
	'img_manualthumb'           => [ '1', 'miniatuur=$1', 'duumnegel=$1', 'doemnaegel=$1', 'thumbnail=$1', 'thumb=$1' ],
	'img_right'                 => [ '1', 'rechts', 'right' ],
	'img_left'                  => [ '1', 'links', 'left' ],
	'img_none'                  => [ '1', 'gien', 'geen', 'none' ],
	'img_center'                => [ '1', 'esentreerd', 'gecentreerd', 'center', 'centre' ],
	'img_framed'                => [ '1', 'umraand', 'omkaderd', 'framed', 'enframed', 'frame' ],
	'img_frameless'             => [ '1', 'kaoderloos', 'kaderloos', 'frameless' ],
	'img_page'                  => [ '1', 'zied=$1', 'zied_$1', 'pagina=$1', 'pagina $1', 'page=$1', 'page $1' ],
	'img_upright'               => [ '1', 'rechtop', 'rechtop=$1', 'rechtop$1', 'upright', 'upright=$1', 'upright $1' ],
	'img_border'                => [ '1', 'raand', 'rand', 'border' ],
	'img_baseline'              => [ '1', 'grondliende', 'grondlijn', 'baseline' ],
	'img_top'                   => [ '1', 'boven', 'top' ],
	'img_text_top'              => [ '1', 'tekste-boven', 'tekst-boven', 'text-top' ],
	'img_middle'                => [ '1', 'midden', 'middle' ],
	'img_bottom'                => [ '1', 'benejen', 'beneden', 'bottom' ],
	'img_text_bottom'           => [ '1', 'tekste-benejen', 'tekst-beneden', 'text-bottom' ],
	'img_link'                  => [ '1', 'verwiezing=$1', 'koppeling=$1', 'verwijzing=$1', 'link=$1' ],
	'sitename'                  => [ '1', 'WEBSTEENAAM', 'SITENAAM', 'SITENAME' ],
	'ns'                        => [ '0', 'NR:', 'NS:' ],
	'localurl'                  => [ '0', 'LOKALEURL', 'LOCALURL:' ],
	'localurle'                 => [ '0', 'LOKALEURLE', 'LOCALURLE:' ],
	'servername'                => [ '0', 'SERVERNAAM', 'SERVERNAME' ],
	'scriptpath'                => [ '0', 'SKRIPTPAD', 'SCRIPTPAD', 'SCRIPTPATH' ],
	'stylepath'                 => [ '0', 'STIELPAD', 'STIJLPAD', 'STYLEPATH' ],
	'grammar'                   => [ '0', 'GRAMMATIKA:', 'GRAMMATICA:', 'GRAMMAR:' ],
	'gender'                    => [ '0', 'GESLACHTE:', 'GESLACHT:', 'GENDER:' ],
	'notitleconvert'            => [ '0', '__GIENTITELKONVERSIE__', '__GIENTK__', '__GEENPAGINANAAMCONVERSIE__', '__GEENTITELCONVERSIE__', '__GEENTC__', '__NOTITLECONVERT__', '__NOTC__' ],
	'nocontentconvert'          => [ '0', '__GIENINHOUDKONVERSIE__', '__GIENIK__', '__GEENINHOUDCONVERSIE__', '__GEENIC__', '__NOCONTENTCONVERT__', '__NOCC__' ],
	'currentweek'               => [ '1', 'DISSEWEKE', 'HUIDIGEWEEK', 'CURRENTWEEK' ],
	'currentdow'                => [ '1', 'DISSEDVDW', 'HUIDIGEDVDW', 'CURRENTDOW' ],
	'localweek'                 => [ '1', 'LOKALEWEKE', 'PLAATSELIJKEWEEK', 'LOKALEWEEK', 'LOCALWEEK' ],
	'localdow'                  => [ '1', 'LOKALEDVDW', 'PLAATSELIJKEDVDW', 'LOCALDOW' ],
	'revisionid'                => [ '1', 'VERSIEID', 'REVISIONID' ],
	'revisionday'               => [ '1', 'VERSIEDAG', 'REVISIONDAY' ],
	'revisionday2'              => [ '1', 'VERSIEDAG2', 'REVISIONDAY2' ],
	'revisionmonth'             => [ '1', 'VERSIEMAOND', 'VERSIEMAAND', 'REVISIONMONTH' ],
	'revisionmonth1'            => [ '1', 'VERSIEMAOND1', 'VERSIEMAAND1', 'REVISIONMONTH1' ],
	'revisionyear'              => [ '1', 'VERSIEJAOR', 'VERSIEJAAR', 'REVISIONYEAR' ],
	'revisiontimestamp'         => [ '1', 'VERSIETIEDSTEMPEL', 'VERSIETIJD', 'REVISIONTIMESTAMP' ],
	'revisionuser'              => [ '1', 'VERSIEGEBRUKER', 'VERSIEGEBRUIKER', 'REVISIONUSER' ],
	'plural'                    => [ '0', 'MEERVOUD:', 'PLURAL:' ],
	'fullurl'                   => [ '0', 'HELEURL', 'VOLLEDIGEURL:', 'FULLURL:' ],
	'fullurle'                  => [ '0', 'HELEURLE', 'VOLLEDIGEURLE:', 'FULLURLE:' ],
	'lcfirst'                   => [ '0', 'KLEERSTE:', 'LCFIRST:' ],
	'ucfirst'                   => [ '0', 'GLEERSTE:', 'HLEERSTE:', 'UCFIRST:' ],
	'lc'                        => [ '0', 'KL:', 'LC:' ],
	'uc'                        => [ '0', 'HL:', 'UC:' ],
	'raw'                       => [ '0', 'RAUW:', 'RUW:', 'RAW:' ],
	'displaytitle'              => [ '1', 'TEUNTITEL', 'WEERGEGEVENTITEL', 'TOONTITEL', 'DISPLAYTITLE' ],
	'nocommafysuffix'           => [ '0', 'GIENSCHEIDINGSTEKEN', 'GEENSCHEIDINGSTEKEN', 'NOSEP' ],
	'newsectionlink'            => [ '1', '__NIEJESEKSIEVERWIEZING__', '__NIEUWESECTIELINK__', '__NIEUWESECTIEKOPPELING__', '__NEWSECTIONLINK__' ],
	'nonewsectionlink'          => [ '1', '__GIENNIEJKOPJENVERWIEZING__', '__GEENNIEUWKOPJEKOPPELING__', '__GEENNIEUWESECTIELINK__', '__GEENNIEUWKOPJEVERWIJZING__', '__NONEWSECTIONLINK__' ],
	'currentversion'            => [ '1', 'DISSEVERSIE', 'HUIDIGEVERSIE', 'CURRENTVERSION' ],
	'urlencode'                 => [ '0', 'URLKODEREN', 'URLCODEREN', 'CODEERURL', 'URLENCODE:' ],
	'anchorencode'              => [ '0', 'ANKERKODEREN', 'ANKERCODEREN', 'CODEERANKER', 'ANCHORENCODE' ],
	'currenttimestamp'          => [ '1', 'DISSETIEDSTEMPEL', 'HUIDIGETIJDSTEMPEL', 'CURRENTTIMESTAMP' ],
	'localtimestamp'            => [ '1', 'LOKALETIEDSTEMPEL', 'PLAATSELIJKETIJDSTEMPEL', 'LOKALETIJDSTEMPEL', 'LOCALTIMESTAMP' ],
	'directionmark'             => [ '1', 'RICHTINGMARKERING', 'RICHTINGSMARKERING', 'DIRECTIONMARK', 'DIRMARK' ],
	'language'                  => [ '0', '#TAAL:', '#LANGUAGE:' ],
	'contentlanguage'           => [ '1', 'INHOUDSTAAL', 'INHOUDTAAL', 'CONTENTLANGUAGE', 'CONTENTLANG' ],
	'pagesinnamespace'          => [ '1', 'ZIEJENINNAAMRUUMTE', 'PAGINASINNAAMRUIMTE', 'PAGINA’SINNAAMRUIMTE', 'PAGINA\'SINNAAMRUIMTE', 'PAGESINNAMESPACE:', 'PAGESINNS:' ],
	'numberofadmins'            => [ '1', 'ANTALBEHEERDERS', 'AANTALBEHEERDERS', 'AANTALADMINS', 'NUMBEROFADMINS' ],
	'formatnum'                 => [ '0', 'FORMATTEERNUM', 'NUMFORMATTEREN', 'FORMATNUM' ],
	'padleft'                   => [ '0', 'LINKSOPVULLEN', 'PADLEFT' ],
	'padright'                  => [ '0', 'RECHTSOPVULLEN', 'PADRIGHT' ],
	'special'                   => [ '0', 'spesiaal', 'speciaal', 'special' ],
	'defaultsort'               => [ '1', 'STANDARDSORTERING:', 'STANDAARDSORTERING:', 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ],
	'filepath'                  => [ '0', 'BESTAANDSPAD:', 'BESTANDSPAD:', 'FILEPATH:' ],
	'tag'                       => [ '0', 'etiket', 'label', 'tag' ],
	'hiddencat'                 => [ '1', '__VERBÖRGENKAT__', '__VERBORGENCAT__', '__HIDDENCAT__' ],
	'pagesincategory'           => [ '1', 'ZIEJENINKATEGORIE', 'PAGINASINCATEGORIE', 'PAGINASINCAT', 'PAGESINCATEGORY', 'PAGESINCAT' ],
	'pagesize'                  => [ '1', 'ZIEDGROOTTE', 'PAGINAGROOTTE', 'PAGESIZE' ],
	'noindex'                   => [ '1', '__GIENINDEX__', '__GEENINDEX__', '__NOINDEX__' ],
	'numberingroup'             => [ '1', 'ANTALINGROEP', 'AANTALINGROEP', 'NUMBERINGROUP', 'NUMINGROUP' ],
	'staticredirect'            => [ '1', '__STAOTIESEDEURVERWIEZING__', '__STATISCHEDOORVERWIJZING__', '__STATISCHEREDIRECT__', '__STATICREDIRECT__' ],
	'protectionlevel'           => [ '1', 'BEVEILIGINGSNIVO', 'BEVEILIGINGSNIVEAU', 'PROTECTIONLEVEL' ],
	'formatdate'                => [ '0', 'daotumopmaak', 'datumopmaak', 'formatdate', 'dateformat' ],
	'url_query'                 => [ '0', 'ZEUKOPDRACHTE', 'ZOEKOPDRACHT', 'QUERY' ],
	'defaultsort_noerror'       => [ '0', 'gienfout', 'geenfout', 'noerror' ],
	'pagesincategory_pages'     => [ '0', 'ziejen', 'paginas', 'pages' ],
	'pagesincategory_subcats'   => [ '0', 'onderkategorieen', 'ondercategorieen', 'subcats' ],
	'pagesincategory_files'     => [ '0', 'bestaanden', 'bestanden', 'files' ],
];

$specialPageAliases = [
	'Activeusers'               => [ 'Aktieve_gebrukers' ],
	'Allmessages'               => [ 'Alle_systeemteksten' ],
	'Allpages'                  => [ 'Alle_ziejen' ],
	'Ancientpages'              => [ 'Oudste_ziejen' ],
	'Badtitle'                  => [ 'Verkeerde_ziednaam' ],
	'Blankpage'                 => [ 'Lege_zied' ],
	'Block'                     => [ 'Blokkeren' ],
	'Booksources'               => [ 'Boekinformasie' ],
	'BrokenRedirects'           => [ 'Ebreuken_deurverwiezingen' ],
	'Categories'                => [ 'Kategorieën' ],
	'ChangeEmail'               => [ 'Netpost_wiezigen' ],
	'ChangePassword'            => [ 'Wachtwoord_wiezigen' ],
	'ComparePages'              => [ 'Ziejen_vergelieken' ],
	'Confirmemail'              => [ 'Netpost_bevestigen' ],
	'Contributions'             => [ 'Biedragen' ],
	'CreateAccount'             => [ 'Gebruker_anmaken' ],
	'Deadendpages'              => [ 'Gien_verwiezingen' ],
	'DeletedContributions'      => [ 'Vort-edaone_gebrukersbiedragen' ],
	'DoubleRedirects'           => [ 'Dubbele_deurverwiezingen' ],
	'EditWatchlist'             => [ 'Volglieste_bewarken' ],
	'Emailuser'                 => [ 'Bericht_sturen' ],
	'ExpandTemplates'           => [ 'Mallen_substitueren' ],
	'Export'                    => [ 'Uutvoeren' ],
	'Fewestrevisions'           => [ 'Minste_bewarkingen' ],
	'FileDuplicateSearch'       => [ 'Dubbele_bestaanden_zeuken' ],
	'Filepath'                  => [ 'Bestaandslokasie' ],
	'Import'                    => [ 'Invoeren' ],
	'Invalidateemail'           => [ 'Netpost_ongeldig' ],
	'BlockList'                 => [ 'IP-blokkeerlieste' ],
	'LinkSearch'                => [ 'Verwiezingen_zeuken' ],
	'Listadmins'                => [ 'Beheerderslieste' ],
	'Listbots'                  => [ 'Botlieste' ],
	'Listfiles'                 => [ 'Bestaandslieste' ],
	'Listgrouprights'           => [ 'Groepsrechten_bekieken' ],
	'Listredirects'             => [ 'Deurverwiezingslieste' ],
	'Listusers'                 => [ 'Gebrukerslieste' ],
	'Lockdb'                    => [ 'Databanke_blokkeren' ],
	'Log'                       => [ 'Logboeken' ],
	'Lonelypages'               => [ 'Weesziejen' ],
	'Longpages'                 => [ 'Lange_artikels' ],
	'MergeHistory'              => [ 'Geschiedenisse_bie_mekaar_doon' ],
	'MIMEsearch'                => [ 'MIME-zeuken' ],
	'Mostcategories'            => [ 'Meeste_kategorieën' ],
	'Mostimages'                => [ 'Meestgebruukten_bestaanden' ],
	'Mostinterwikis'            => [ 'Meeste_interwikiverwiezingen' ],
	'Mostlinked'                => [ 'Meest_naor_verwezen_ziejen' ],
	'Mostlinkedcategories'      => [ 'Meestgebruukten_kategorieën' ],
	'Mostlinkedtemplates'       => [ 'Meestgebruken_mallen' ],
	'Mostrevisions'             => [ 'Meeste_bewarkingen' ],
	'Movepage'                  => [ 'Zied_herneumen' ],
	'Mycontributions'           => [ 'Mien_biedragen' ],
	'MyLanguage'                => [ 'Mien_taal' ],
	'Mypage'                    => [ 'Mien_gebrukerszied' ],
	'Mytalk'                    => [ 'Mien_overleg' ],
	'Myuploads'                 => [ 'Mien_in-elaojen_bestaanden' ],
	'Newimages'                 => [ 'Nieje_bestaanden' ],
	'Newpages'                  => [ 'Nieje_ziejen' ],
	'PagesWithProp'             => [ 'Ziejen_mit_eigenschap' ],
	'PasswordReset'             => [ 'Wachtwoord_opniej_instellen' ],
	'PermanentLink'             => [ 'Vaste_verwiezing' ],
	'Preferences'               => [ 'Veurkeuren' ],
	'Prefixindex'               => [ 'Veurvoegselindex' ],
	'Protectedpages'            => [ 'Beveiligden_ziejen' ],
	'Protectedtitles'           => [ 'Beveiligden_titels' ],
	'Randompage'                => [ 'Netzelde_welk_artikel' ],
	'Randomredirect'            => [ 'Netzelde_welke_deurverwiezing' ],
	'Recentchanges'             => [ 'Leste_wiezigingen' ],
	'Recentchangeslinked'       => [ 'Leste_wiezigingen_ekoppeld' ],
	'Redirect'                  => [ 'Deurverwiezen' ],
	'Revisiondelete'            => [ 'Versie_vortdoon' ],
	'Search'                    => [ 'Zeuken' ],
	'Shortpages'                => [ 'Korte_artikels' ],
	'Specialpages'              => [ 'Spesiale_ziejen' ],
	'Statistics'                => [ 'Staotistieken' ],
	'Tags'                      => [ 'Etiketten' ],
	'Uncategorizedcategories'   => [ 'Kategorieën_zonder_kategorie' ],
	'Uncategorizedimages'       => [ 'Bestaanden_zonder_kategorie' ],
	'Uncategorizedpages'        => [ 'Ziejen_zonder_kategorie' ],
	'Uncategorizedtemplates'    => [ 'Mallen_zonder_kategorie' ],
	'Undelete'                  => [ 'Weerummeplaotsen' ],
	'Unlockdb'                  => [ 'Databanke_vriegeven' ],
	'Unusedcategories'          => [ 'Ongebruukten_kategorieën' ],
	'Unusedimages'              => [ 'Ongebruukten_bestaanden' ],
	'Unusedtemplates'           => [ 'Ongebruukten_mallen' ],
	'Unwatchedpages'            => [ 'Niet-evolgden_ziejen' ],
	'Upload'                    => [ 'Bestaanden_opsturen' ],
	'UploadStash'               => [ 'Bestaandenstallige' ],
	'Userlogin'                 => [ 'Anmelden' ],
	'Userlogout'                => [ 'Aofmelden' ],
	'Userrights'                => [ 'Gebrukersrechten' ],
	'Version'                   => [ 'Versie' ],
	'Wantedcategories'          => [ 'Gewunste_kategorieën' ],
	'Wantedfiles'               => [ 'Gewunste_bestaanden' ],
	'Wantedpages'               => [ 'Gewunste_ziejen' ],
	'Wantedtemplates'           => [ 'Gewunste_mallen' ],
	'Watchlist'                 => [ 'Volglieste' ],
	'Whatlinkshere'             => [ 'Verwiezingen_naor_disse_zied' ],
	'Withoutinterwiki'          => [ 'Gien_interwiki' ],
];

$linkTrail = '/^([a-zäöüïëéèà]+)(.*)$/sDu';
