<?php
/** Romanian (română)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author AdiJapan
 * @author Cin
 * @author Danutz
 * @author Emily
 * @author Firilacroco
 * @author Geitost
 * @author Gutza
 * @author KlaudiuMihaila
 * @author Laurap
 * @author Malafaya
 * @author Memo18
 * @author Mihai
 * @author Minisarm
 * @author Misterr
 * @author SCriBu
 * @author Silviubogan
 * @author Stelistcristi
 * @author Strainu
 * @author TTO
 * @author Urhixidur
 * @author לערי ריינהארט
 */

$separatorTransformTable = [ ',' => ".", '.' => ',' ];

$magicWords = [
	'redirect'                  => [ '0', '#REDIRECTEAZA', '#REDIRECT' ],
	'notoc'                     => [ '0', '__FARACUPRINS__', '__NOTOC__' ],
	'nogallery'                 => [ '0', '__FARAGALERIE__', '__NOGALLERY__' ],
	'forcetoc'                  => [ '0', '__FORTEAZACUPRINS__', '__FORCETOC__' ],
	'toc'                       => [ '0', '__CUPRINS__', '__TOC__' ],
	'noeditsection'             => [ '0', '__FARAEDITSECTIUNE__', '__NOEDITSECTION__' ],
	'currentmonth'              => [ '1', 'NUMARLUNACURENTA', 'CURRENTMONTH', 'CURRENTMONTH2' ],
	'currentmonth1'             => [ '1', 'LUNACURENTA1', 'CURRENTMONTH1' ],
	'currentmonthname'          => [ '1', 'NUMELUNACURENTA', 'CURRENTMONTHNAME' ],
	'currentmonthnamegen'       => [ '1', 'NUMELUNACURENTAGEN', 'CURRENTMONTHNAMEGEN' ],
	'currentmonthabbrev'        => [ '1', 'LUNACURENTAABREV', 'CURRENTMONTHABBREV' ],
	'currentday'                => [ '1', 'NUMARZIUACURENTA', 'CURRENTDAY' ],
	'currentday2'               => [ '1', 'NUMARZIUACURENTA2', 'CURRENTDAY2' ],
	'currentdayname'            => [ '1', 'NUMEZIUACURENTA', 'CURRENTDAYNAME' ],
	'currentyear'               => [ '1', 'ANULCURENT', 'CURRENTYEAR' ],
	'currenttime'               => [ '1', 'TIMPULCURENT', 'CURRENTTIME' ],
	'currenthour'               => [ '1', 'ORACURENTA', 'CURRENTHOUR' ],
	'localmonth'                => [ '1', 'LUNALOCALA', 'LUNALOCALA2', 'LOCALMONTH', 'LOCALMONTH2' ],
	'localmonth1'               => [ '1', 'LUNALOCALA1', 'LOCALMONTH1' ],
	'localmonthname'            => [ '1', 'NUMELUNALOCALA', 'LOCALMONTHNAME' ],
	'localmonthnamegen'         => [ '1', 'NUMELUNALOCALAGEN', 'LOCALMONTHNAMEGEN' ],
	'localmonthabbrev'          => [ '1', 'LUNALOCALAABREV', 'LOCALMONTHABBREV' ],
	'localday'                  => [ '1', 'ZIUALOCALA', 'LOCALDAY' ],
	'localday2'                 => [ '1', 'ZIUALOCALA2', 'LOCALDAY2' ],
	'localdayname'              => [ '1', 'NUMEZIUALOCALA', 'LOCALDAYNAME' ],
	'localyear'                 => [ '1', 'ANULLOCAL', 'LOCALYEAR' ],
	'localtime'                 => [ '1', 'TIMPULLOCAL', 'LOCALTIME' ],
	'localhour'                 => [ '1', 'ORALOCALA', 'LOCALHOUR' ],
	'numberofpages'             => [ '1', 'NUMARDEPAGINI', 'NUMBEROFPAGES' ],
	'numberofarticles'          => [ '1', 'NUMARDEARTICOLE', 'NUMBEROFARTICLES' ],
	'numberoffiles'             => [ '1', 'NUMARDEFISIERE', 'NUMBEROFFILES' ],
	'numberofusers'             => [ '1', 'NUMARDEUTILIZATORI', 'NUMBEROFUSERS' ],
	'numberofactiveusers'       => [ '1', 'NUMARDEUTILIZATORIACTIVI', 'NUMBEROFACTIVEUSERS' ],
	'numberofedits'             => [ '1', 'NUMARDEMODIFICARI', 'NUMBEROFEDITS' ],
	'pagename'                  => [ '1', 'NUMEPAGINA', 'PAGENAME' ],
	'pagenamee'                 => [ '1', 'NUMEEPAGINA', 'PAGENAMEE' ],
	'namespace'                 => [ '1', 'SPATIUDENUME', 'NAMESPACE' ],
	'namespacee'                => [ '1', 'SPATIUUDENUME', 'NAMESPACEE' ],
	'talkspace'                 => [ '1', 'SPATIUDEDISCUTIE', 'TALKSPACE' ],
	'talkspacee'                => [ '1', 'SPATIUUDEDISCUTIE', 'TALKSPACEE' ],
	'subjectspace'              => [ '1', 'SPATIUSUBIECT', 'SPATIUARTICOL', 'SUBJECTSPACE', 'ARTICLESPACE' ],
	'subjectspacee'             => [ '1', 'SPATIUUSUBIECT', 'SPATIUUARTICOL', 'SUBJECTSPACEE', 'ARTICLESPACEE' ],
	'fullpagename'              => [ '1', 'NUMEPAGINACOMPLET', 'FULLPAGENAME' ],
	'fullpagenamee'             => [ '1', 'NUMEEPAGINACOMPLET', 'FULLPAGENAMEE' ],
	'subpagename'               => [ '1', 'NUMESUBPAGINA', 'SUBPAGENAME' ],
	'subpagenamee'              => [ '1', 'NUMEESUBPAGINA', 'SUBPAGENAMEE' ],
	'basepagename'              => [ '1', 'NUMEDEBAZAPAGINA', 'BASEPAGENAME' ],
	'basepagenamee'             => [ '1', 'NUMEEDEBAZAPAGINA', 'BASEPAGENAMEE' ],
	'talkpagename'              => [ '1', 'NUMEPAGINADEDISCUTIE', 'TALKPAGENAME' ],
	'talkpagenamee'             => [ '1', 'NUMEEPAGINADEDISCUTIE', 'TALKPAGENAMEE' ],
	'subjectpagename'           => [ '1', 'NUMEPAGINASUBIECT', 'NUMEPAGINAARTICOL', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ],
	'subjectpagenamee'          => [ '1', 'NUMEEPAGINASUBIECT', 'NUMEEPAGINAARTICOL', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ],
	'msg'                       => [ '0', 'MSJ:', 'MSG:' ],
	'msgnw'                     => [ '0', 'MSJNOU:', 'MSGNW:' ],
	'img_thumbnail'             => [ '1', 'miniatura', 'mini', 'thumb', 'thumbnail' ],
	'img_manualthumb'           => [ '1', 'miniatura=$1', 'mini=$1', 'thumbnail=$1', 'thumb=$1' ],
	'img_right'                 => [ '1', 'dreapta', 'right' ],
	'img_left'                  => [ '1', 'stanga', 'left' ],
	'img_none'                  => [ '1', 'nu', 'none' ],
	'img_center'                => [ '1', 'centru', 'center', 'centre' ],
	'img_framed'                => [ '1', 'cadru', 'frame', 'framed', 'enframed' ],
	'img_frameless'             => [ '1', 'faracadru', 'frameless' ],
	'img_page'                  => [ '1', 'pagina=$1', 'pagina $1', 'page=$1', 'page $1' ],
	'img_upright'               => [ '1', 'dreaptasus', 'dreaptasus=$1', 'dreaptasus $1', 'upright', 'upright=$1', 'upright $1' ],
	'img_border'                => [ '1', 'chenar', 'border' ],
	'img_baseline'              => [ '1', 'linia_de_bază', 'baseline' ],
	'img_sub'                   => [ '1', 'indice', 'sub' ],
	'img_super'                 => [ '1', 'exponent', 'super', 'sup' ],
	'img_top'                   => [ '1', 'sus', 'top' ],
	'img_text_top'              => [ '1', 'text-sus', 'text-top' ],
	'img_middle'                => [ '1', 'mijloc', 'middle' ],
	'img_bottom'                => [ '1', 'jos', 'bottom' ],
	'img_text_bottom'           => [ '1', 'text-jos', 'text-bottom' ],
	'img_link'                  => [ '1', 'legătură=$1', 'link=$1' ],
	'sitename'                  => [ '1', 'NUMESITE', 'SITENAME' ],
	'ns'                        => [ '0', 'SN:', 'NS:' ],
	'localurl'                  => [ '0', 'URLLOCAL:', 'LOCALURL:' ],
	'localurle'                 => [ '0', 'URLLOCALE:', 'LOCALURLE:' ],
	'servername'                => [ '0', 'NUMESERVER', 'SERVERNAME' ],
	'scriptpath'                => [ '0', 'CALESCRIPT', 'SCRIPTPATH' ],
	'grammar'                   => [ '0', 'GRAMATICA:', 'GRAMMAR:' ],
	'gender'                    => [ '0', 'GEN:', 'GENDER:' ],
	'notitleconvert'            => [ '0', '__FARACONVERTIRETITLU__', '__FCT__', '__NOTITLECONVERT__', '__NOTC__' ],
	'nocontentconvert'          => [ '0', '__FARACONVERTIRECONTINUT__', '__FCC__', '__NOCONTENTCONVERT__', '__NOCC__' ],
	'currentweek'               => [ '1', 'SAPTAMANACURENTA', 'CURRENTWEEK' ],
	'localweek'                 => [ '1', 'SAPTAMANALOCALA', 'LOCALWEEK' ],
	'revisionid'                => [ '1', 'IDREVIZIE', 'REVISIONID' ],
	'revisionday'               => [ '1', 'ZIREVIZIE', 'REVISIONDAY' ],
	'revisionday2'              => [ '1', 'ZIREVIZIE2', 'REVISIONDAY2' ],
	'revisionmonth'             => [ '1', 'LUNAREVIZIE', 'REVISIONMONTH' ],
	'revisionyear'              => [ '1', 'ANREVIZIE', 'REVISIONYEAR' ],
	'revisiontimestamp'         => [ '1', 'STAMPILATIMPREVIZIE', 'REVISIONTIMESTAMP' ],
	'revisionuser'              => [ '1', 'UTILIZATORREVIZIE', 'REVISIONUSER' ],
	'fullurl'                   => [ '0', 'URLCOMPLET:', 'FULLURL:' ],
	'fullurle'                  => [ '0', 'URLCOMPLETE:', 'FULLURLE:' ],
	'lcfirst'                   => [ '0', 'MINUSCULAPRIMA:', 'LCFIRST:' ],
	'ucfirst'                   => [ '0', 'MAJUSCULAPRIMA:', 'UCFIRST:' ],
	'lc'                        => [ '0', 'MINUSCULA:', 'LC:' ],
	'uc'                        => [ '0', 'MAJUSCULA:', 'UC:' ],
	'raw'                       => [ '0', 'BRUT:', 'RAW:' ],
	'displaytitle'              => [ '1', 'ARATATITLU', 'DISPLAYTITLE' ],
	'newsectionlink'            => [ '1', '__LEGATURASECTIUNENOUA__', '__NEWSECTIONLINK__' ],
	'nonewsectionlink'          => [ '1', '__FARALEGATURASECTIUNENOUA__', '__NONEWSECTIONLINK__' ],
	'currentversion'            => [ '1', 'VERSIUNECURENTA', 'CURRENTVERSION' ],
	'urlencode'                 => [ '0', 'CODIFICAREURL:', 'URLENCODE:' ],
	'anchorencode'              => [ '0', 'CODIFICAREANCORA', 'ANCHORENCODE' ],
	'currenttimestamp'          => [ '1', 'STAMPILATIMPCURENT', 'CURRENTTIMESTAMP' ],
	'localtimestamp'            => [ '1', 'STAMPILATIMPLOCAL', 'LOCALTIMESTAMP' ],
	'directionmark'             => [ '1', 'SEMNDIRECTIE', 'DIRECTIONMARK', 'DIRMARK' ],
	'language'                  => [ '0', '#LIMBA:', '#LANGUAGE:' ],
	'contentlanguage'           => [ '1', 'LIMBACONTINUT', 'CONTENTLANGUAGE', 'CONTENTLANG' ],
	'pagesinnamespace'          => [ '1', 'PANIGIINSPATIULDENUME:', 'PAGINIINSN:', 'PAGESINNAMESPACE:', 'PAGESINNS:' ],
	'numberofadmins'            => [ '1', 'NUMARADMINI', 'NUMBEROFADMINS' ],
	'formatnum'                 => [ '0', 'FORMATNR', 'FORMATNUM' ],
	'defaultsort'               => [ '1', 'SORTAREIMPLICITA:', 'CHEIESORTAREIMPLICITA:', 'CATEGORIESORTAREIMPLICITA:', 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ],
	'filepath'                  => [ '0', 'CALEAFISIERULUI:', 'FILEPATH:' ],
	'tag'                       => [ '0', 'eticheta', 'tag' ],
	'hiddencat'                 => [ '1', '__ASCUNDECAT__', '__HIDDENCAT__' ],
	'pagesincategory'           => [ '1', 'PAGINIINCATEGORIE', 'PAGINIINCAT', 'PAGESINCATEGORY', 'PAGESINCAT' ],
	'pagesize'                  => [ '1', 'MARIMEPAGINA', 'PAGESIZE' ],
	'noindex'                   => [ '1', '__FARAINDEX__', '__NOINDEX__' ],
	'numberingroup'             => [ '1', 'NUMARINGRUP', 'NUMINGRUP', 'NUMBERINGROUP', 'NUMINGROUP' ],
	'staticredirect'            => [ '1', '__REDIRECTIONARESTATICA__', '__STATICREDIRECT__' ],
	'protectionlevel'           => [ '1', 'NIVELPROTECTIE', 'PROTECTIONLEVEL' ],
	'formatdate'                => [ '0', 'formatdata', 'dataformat', 'formatdate', 'dateformat' ],
];

$namespaceNames = [
	NS_MEDIA            => 'Media',
	NS_SPECIAL          => 'Special',
	NS_TALK             => 'Discuție',
	NS_USER             => 'Utilizator',
	NS_USER_TALK        => 'Discuție_Utilizator',
	NS_PROJECT_TALK     => 'Discuție_$1',
	NS_FILE             => 'Fișier',
	NS_FILE_TALK        => 'Discuție_Fișier',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'Discuție_MediaWiki',
	NS_TEMPLATE         => 'Format',
	NS_TEMPLATE_TALK    => 'Discuție_Format',
	NS_HELP             => 'Ajutor',
	NS_HELP_TALK        => 'Discuție_Ajutor',
	NS_CATEGORY         => 'Categorie',
	NS_CATEGORY_TALK    => 'Discuție_Categorie',
];

$namespaceAliases = [
	'Discuţie'            => NS_TALK,
	'Discuţie_Utilizator' => NS_USER_TALK,
	'Discuţie_$1'         => NS_PROJECT_TALK,
	'Imagine'             => NS_FILE,
	'Discuţie_Imagine'    => NS_FILE_TALK,
	'Fişier'              => NS_FILE,
	'Discuţie_Fişier'     => NS_FILE_TALK,
	'Discuţie_MediaWiki'  => NS_MEDIAWIKI_TALK,
	'Discuţie_Format'     => NS_TEMPLATE_TALK,
	'Discuţie_Ajutor'     => NS_HELP_TALK,
	'Discuţie_Categorie'  => NS_CATEGORY_TALK,
];

$specialPageAliases = [
	'Activeusers'               => [ 'Utilizatori_activi' ],
	'Allmessages'               => [ 'Toate_mesajele' ],
	'Allpages'                  => [ 'Toate_paginile' ],
	'Ancientpages'              => [ 'Pagini_vechi' ],
	'Blankpage'                 => [ 'Pagină_goală' ],
	'Block'                     => [ 'Blochează_IP' ],
	'Booksources'               => [ 'Referințe_în_cărți' ],
	'BrokenRedirects'           => [ 'Redirectări_invalide' ],
	'Categories'                => [ 'Categorii' ],
	'ChangePassword'            => [ 'Resetează_parola' ],
	'Confirmemail'              => [ 'Confirmă_email' ],
	'Contributions'             => [ 'Contribuții' ],
	'CreateAccount'             => [ 'Înregistrare' ],
	'Deadendpages'              => [ 'Pagini_fără_legături' ],
	'DeletedContributions'      => [ 'Contribuții_șterse' ],
	'DoubleRedirects'           => [ 'Redirectări_duble' ],
	'Emailuser'                 => [ 'Email_utilizator' ],
	'Export'                    => [ 'Exportă' ],
	'Fewestrevisions'           => [ 'Revizii_puține' ],
	'FileDuplicateSearch'       => [ 'Căutare_fișier_duplicat' ],
	'Filepath'                  => [ 'Cale_fișier' ],
	'Import'                    => [ 'Importă' ],
	'Invalidateemail'           => [ 'Invalidează_email' ],
	'BlockList'                 => [ 'Listă_IP_blocat' ],
	'LinkSearch'                => [ 'Căutare_legături' ],
	'Listadmins'                => [ 'Listă_administratori' ],
	'Listbots'                  => [ 'Listă_roboți' ],
	'Listfiles'                 => [ 'Listă_fișiere' ],
	'Listgrouprights'           => [ 'Listă_drepturi_grup' ],
	'Listredirects'             => [ 'Listă_redirectări' ],
	'Listusers'                 => [ 'Listă_utilizatori' ],
	'Lockdb'                    => [ 'Blochează_BD' ],
	'Log'                       => [ 'Jurnal', 'Jurnale' ],
	'Lonelypages'               => [ 'Pagini_orfane' ],
	'Longpages'                 => [ 'Pagini_lungi' ],
	'MergeHistory'              => [ 'Istoria_combinărilor' ],
	'MIMEsearch'                => [ 'Căutare_MIME' ],
	'Mostcategories'            => [ 'Categorii_multe' ],
	'Mostimages'                => [ 'Imagini_multe' ],
	'Mostlinked'                => [ 'Legături_multe' ],
	'Mostlinkedcategories'      => [ 'Categorii_des_folosite' ],
	'Mostlinkedtemplates'       => [ 'Formate_des_folosite' ],
	'Mostrevisions'             => [ 'Revizii_multe' ],
	'Movepage'                  => [ 'Mută_pagina' ],
	'Mycontributions'           => [ 'Contribuțiile_mele' ],
	'Mypage'                    => [ 'Pagina_mea' ],
	'Mytalk'                    => [ 'Discuțiile_mele' ],
	'Newimages'                 => [ 'Imagini_noi' ],
	'Newpages'                  => [ 'Pagini_noi' ],
	'PasswordReset'             => [ 'Resetare_parolă' ],
	'Preferences'               => [ 'Preferințe' ],
	'Prefixindex'               => [ 'Index' ],
	'Protectedpages'            => [ 'Pagini_protejate' ],
	'Protectedtitles'           => [ 'Titluri_protejate' ],
	'Randompage'                => [ 'Aleatoriu', 'Pagină_aleatorie' ],
	'Randomredirect'            => [ 'Redirectare_aleatorie' ],
	'Recentchanges'             => [ 'Schimbări_recente' ],
	'Recentchangeslinked'       => [ 'Modificări_corelate' ],
	'Revisiondelete'            => [ 'Şterge_revizie' ],
	'Search'                    => [ 'Căutare' ],
	'Shortpages'                => [ 'Pagini_scurte' ],
	'Specialpages'              => [ 'Pagini_speciale' ],
	'Statistics'                => [ 'Statistici' ],
	'Tags'                      => [ 'Etichete' ],
	'Uncategorizedcategories'   => [ 'Categorii_necategorizate' ],
	'Uncategorizedimages'       => [ 'Imagini_necategorizate' ],
	'Uncategorizedpages'        => [ 'Pagini_necategorizate' ],
	'Uncategorizedtemplates'    => [ 'Formate_necategorizate' ],
	'Undelete'                  => [ 'Restaurează' ],
	'Unlockdb'                  => [ 'Deblochează_BD' ],
	'Unusedcategories'          => [ 'Categorii_nefolosite' ],
	'Unusedimages'              => [ 'Imagini_nefolosite' ],
	'Unusedtemplates'           => [ 'Formate_nefolosite' ],
	'Unwatchedpages'            => [ 'Pagini_neurmărite' ],
	'Upload'                    => [ 'Încărcare' ],
	'Userlogin'                 => [ 'Autentificare' ],
	'Userlogout'                => [ 'Ieșire' ],
	'Userrights'                => [ 'Drepturi_utilizator' ],
	'Version'                   => [ 'Versiune' ],
	'Wantedcategories'          => [ 'Categorii_dorite' ],
	'Wantedfiles'               => [ 'Fișiere_dorite' ],
	'Wantedpages'               => [ 'Pagini_dorite', 'Legături_invalide' ],
	'Wantedtemplates'           => [ 'Formate_dorite' ],
	'Watchlist'                 => [ 'Pagini_urmărite' ],
	'Whatlinkshere'             => [ 'Ce_se_leagă_aici' ],
	'Withoutinterwiki'          => [ 'Fără_legături_interwiki' ],
];

$datePreferences = false;
$defaultDateFormat = 'dmy';
$dateFormats = [
	'dmy time' => 'H:i',
	'dmy date' => 'j F Y',
	'dmy both' => 'j F Y H:i',
];

$fallback8bitEncoding = 'iso8859-2';

$linkTrail = '/^([a-zăâîşţșțĂÂÎŞŢȘȚ]+)(.*)$/sDu';
