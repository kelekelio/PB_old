<?php
/** Catalan (català)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 */

$fallback = 'oc';

$namespaceNames = [
	NS_MEDIA            => 'Media',
	NS_SPECIAL          => 'Especial',
	NS_TALK             => 'Discussió',
	NS_USER             => 'Usuari',
	NS_USER_TALK        => 'Usuari_Discussió',
	NS_PROJECT_TALK     => '$1_Discussió',
	NS_FILE             => 'Fitxer',
	NS_FILE_TALK        => 'Fitxer_Discussió',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'MediaWiki_Discussió',
	NS_TEMPLATE         => 'Plantilla',
	NS_TEMPLATE_TALK    => 'Plantilla_Discussió',
	NS_HELP             => 'Ajuda',
	NS_HELP_TALK        => 'Ajuda_Discussió',
	NS_CATEGORY         => 'Categoria',
	NS_CATEGORY_TALK    => 'Categoria_Discussió',
];

$namespaceAliases = [
	'Imatge' => NS_FILE,
	'Imatge_Discussió' => NS_FILE_TALK,
];

$namespaceGenderAliases = [
	NS_USER => [ 'male' => 'Usuari', 'female' => 'Usuària' ],
	NS_USER_TALK => [ 'male' => 'Usuari_Discussió', 'female' => 'Usuària_Discussió' ],
]; // T113616

$specialPageAliases = [
	'Activeusers'               => [ 'Usuaris_actius' ],
	'Allmessages'               => [ 'Missatges', 'MediaWiki' ],
	'Allpages'                  => [ 'Llista_de_pàgines' ],
	'Ancientpages'              => [ 'Pàgines_velles' ],
	'Badtitle'                  => [ 'Títol_incorrecte' ],
	'Blankpage'                 => [ 'Pàgina_en_blanc', 'Blanc' ],
	'Block'                     => [ 'Bloca' ],
	'Booksources'               => [ 'Fonts_bibliogràfiques' ],
	'BrokenRedirects'           => [ 'Redireccions_rompudes' ],
	'ChangeEmail'               => [ 'Canvia_adreça_electrònica' ],
	'ChangePassword'            => [ 'Reinicia_contrasenya' ],
	'Confirmemail'              => [ 'Confirma_adreça' ],
	'Contributions'             => [ 'Contribucions' ],
	'CreateAccount'             => [ 'Crea_compte' ],
	'Deadendpages'              => [ 'Atzucacs' ],
	'DeletedContributions'      => [ 'Contribucions_esborrades' ],
	'DoubleRedirects'           => [ 'Redireccions_dobles' ],
	'Emailuser'                 => [ 'Envia_missatge' ],
	'ExpandTemplates'           => [ 'Expansió_de_plantilles' ],
	'Export'                    => [ 'Exporta' ],
	'Fewestrevisions'           => [ 'Pàgines_menys_editades' ],
	'FileDuplicateSearch'       => [ 'Cerca_fitxers_duplicats' ],
	'Import'                    => [ 'Importa' ],
	'BlockList'                 => [ 'Usuaris_blocats' ],
	'LinkSearch'                => [ 'Enllaços_web', 'Busca_enllaços', 'Recerca_d\'enllaços_web' ],
	'Listadmins'                => [ 'Administradors' ],
	'Listbots'                  => [ 'Bots' ],
	'Listfiles'                 => [ 'Imatges', 'Fitxers' ],
	'Listgrouprights'           => [ 'Drets_dels_grups_d\'usuaris' ],
	'Listredirects'             => [ 'Redireccions' ],
	'Listusers'                 => [ 'Usuaris' ],
	'Lockdb'                    => [ 'Bloca_bd' ],
	'Log'                       => [ 'Registre' ],
	'Lonelypages'               => [ 'Pàgines_òrfenes' ],
	'Longpages'                 => [ 'Pàgines_llargues' ],
	'MergeHistory'              => [ 'Fusiona_historial' ],
	'MIMEsearch'                => [ 'Cerca_MIME' ],
	'Mostcategories'            => [ 'Pàgines_amb_més_categories' ],
	'Mostimages'                => [ 'Imatges_més_útils' ],
	'Mostlinked'                => [ 'Pàgines_més_enllaçades' ],
	'Mostlinkedcategories'      => [ 'Categories_més_útils' ],
	'Mostlinkedtemplates'       => [ 'Plantilles_més_útils' ],
	'Mostrevisions'             => [ 'Pàgines_més_editades' ],
	'Movepage'                  => [ 'Reanomena' ],
	'Mycontributions'           => [ 'Contribucions_pròpies' ],
	'Mypage'                    => [ 'Pàgina_personal' ],
	'Mytalk'                    => [ 'Discussió_personal' ],
	'Newimages'                 => [ 'Imatges_noves', 'Fitxers_nous' ],
	'Newpages'                  => [ 'Pàgines_noves' ],
	'Preferences'               => [ 'Preferències' ],
	'Prefixindex'               => [ 'Cerca_per_prefix' ],
	'Protectedpages'            => [ 'Pàgines_protegides' ],
	'Protectedtitles'           => [ 'Títols_protegits' ],
	'Randompage'                => [ 'Article_aleatori', 'Atzar', 'Aleatori' ],
	'Randomredirect'            => [ 'Redirecció_aleatòria' ],
	'Recentchanges'             => [ 'Canvis_recents' ],
	'Recentchangeslinked'       => [ 'Seguiment' ],
	'Revisiondelete'            => [ 'Esborra_versió' ],
	'Search'                    => [ 'Cerca' ],
	'Shortpages'                => [ 'Pàgines_curtes' ],
	'Specialpages'              => [ 'Pàgines_especials' ],
	'Statistics'                => [ 'Estadístiques' ],
	'Unblock'                   => [ 'Desbloca', 'Desbloqueja' ],
	'Uncategorizedcategories'   => [ 'Categories_sense_categoria' ],
	'Uncategorizedimages'       => [ 'Imatges_sense_categoria' ],
	'Uncategorizedpages'        => [ 'Pàgines_sense_categoria' ],
	'Uncategorizedtemplates'    => [ 'Plantilles_sense_categoria' ],
	'Undelete'                  => [ 'Restaura' ],
	'Unlockdb'                  => [ 'Desbloca_bd' ],
	'Unusedcategories'          => [ 'Categories_no_usades' ],
	'Unusedimages'              => [ 'Imatges_no_usades' ],
	'Unusedtemplates'           => [ 'Plantilles_no_usades' ],
	'Unwatchedpages'            => [ 'Pàgines_desateses' ],
	'Upload'                    => [ 'Carrega' ],
	'Userlogin'                 => [ 'Registre_i_entrada' ],
	'Userlogout'                => [ 'Finalitza_sessió' ],
	'Userrights'                => [ 'Drets' ],
	'Version'                   => [ 'Versió' ],
	'Wantedcategories'          => [ 'Categories_demanades' ],
	'Wantedfiles'               => [ 'Arxius_demanats' ],
	'Wantedpages'               => [ 'Pàgines_demanades' ],
	'Wantedtemplates'           => [ 'Plantilles_demanades' ],
	'Watchlist'                 => [ 'Llista_de_seguiment' ],
	'Whatlinkshere'             => [ 'Enllaços' ],
	'Withoutinterwiki'          => [ 'Sense_interwiki' ],
];

$magicWords = [
	'redirect'                  => [ '0', '#REDIRECCIÓ', '#REDIRECCIO', '#REDIRECT' ],
	'notoc'                     => [ '0', '__CAPTAULA__', '__NOTAULA__', '__NOTOC__' ],
	'nogallery'                 => [ '0', '__CAPGALERIA__', '__NOGALERIA__', '__NOGALLERY__' ],
	'forcetoc'                  => [ '0', '__FORÇATAULA__', '__FORCETOC__' ],
	'toc'                       => [ '0', '__TAULA__', '__RESUM__', '__TDM__', '__TOC__' ],
	'noeditsection'             => [ '0', '__SECCIÓNOEDITABLE__', '__SECCIONOEDITABLE__', '__NOEDITSECTION__' ],
	'currentmonth'              => [ '1', 'MESACTUAL', 'CURRENTMONTH', 'CURRENTMONTH2' ],
	'currentmonthname'          => [ '1', 'NOMMESACTUAL', 'CURRENTMONTHNAME' ],
	'currentmonthnamegen'       => [ '1', 'NOMGENMESACTUAL', 'CURRENTMONTHNAMEGEN' ],
	'currentmonthabbrev'        => [ '1', 'ABREVMESACTUAL', 'CURRENTMONTHABBREV' ],
	'currentday'                => [ '1', 'DIAACTUAL', 'CURRENTDAY' ],
	'currentday2'               => [ '1', 'DIAACTUAL2', 'CURRENTDAY2' ],
	'currentdayname'            => [ '1', 'NOMDIAACTUAL', 'CURRENTDAYNAME' ],
	'currentyear'               => [ '1', 'ANYACTUAL', 'CURRENTYEAR' ],
	'currenttime'               => [ '1', 'HORARICTUAL', 'CURRENTTIME' ],
	'currenthour'               => [ '1', 'HORAACTUAL', 'CURRENTHOUR' ],
	'localmonth'                => [ '1', 'MESLOCAL', 'LOCALMONTH', 'LOCALMONTH2' ],
	'localmonthname'            => [ '1', 'NOMMESLOCAL', 'LOCALMONTHNAME' ],
	'localmonthnamegen'         => [ '1', 'NOMGENMESLOCAL', 'LOCALMONTHNAMEGEN' ],
	'localmonthabbrev'          => [ '1', 'ABREVMESLOCAL', 'LOCALMONTHABBREV' ],
	'localday'                  => [ '1', 'DIALOCAL', 'LOCALDAY' ],
	'localday2'                 => [ '1', 'DIALOCAL2', 'LOCALDAY2' ],
	'localdayname'              => [ '1', 'NOMDIALOCAL', 'LOCALDAYNAME' ],
	'localyear'                 => [ '1', 'ANYLOCAL', 'LOCALYEAR' ],
	'localtime'                 => [ '1', 'HORARILOCAL', 'LOCALTIME' ],
	'localhour'                 => [ '1', 'HORALOCAL', 'LOCALHOUR' ],
	'numberofarticles'          => [ '1', 'NOMBREARTICLES', 'NOMBRED\'ARTICLES', 'NUMBEROFARTICLES' ],
	'numberoffiles'             => [ '1', 'NOMBREFITXERS', 'NOMBRED\'ARXIUS', 'NUMBEROFFILES' ],
	'numberofusers'             => [ '1', 'NOMBREUSUARIS', 'NOMBRED\'USUARIS', 'NUMBEROFUSERS' ],
	'numberofedits'             => [ '1', 'NOMBREEDICIONS', 'NOMBRED\'EDICIONS', 'NUMBEROFEDITS' ],
	'pagename'                  => [ '1', 'NOMPÀGINA', 'NOMPAGINA', 'NOMDELAPLANA', 'PAGENAME' ],
	'img_thumbnail'             => [ '1', 'miniatura', 'thumb', 'thumbnail' ],
	'img_manualthumb'           => [ '1', 'miniatura=$1', 'thumbnail=$1', 'thumb=$1' ],
	'img_right'                 => [ '1', 'dreta', 'right' ],
	'img_left'                  => [ '1', 'esquerra', 'left' ],
	'img_none'                  => [ '1', 'cap', 'none' ],
	'img_width'                 => [ '1', '$1px' ],
	'img_center'                => [ '1', 'center', 'centre' ],
	'img_framed'                => [ '1', 'marc', 'frame', 'framed', 'enframed' ],
	'img_frameless'             => [ '1', 'sense marc', 'frameless' ],
	'img_lang'                  => [ '1', 'lang=$1', 'llengua=$1', 'idioma=$1' ],
	'img_page'                  => [ '1', 'pàgina=$1', 'pàgina $1', 'page=$1', 'page $1' ],
	'img_upright'               => [ '1', 'redreçat', 'upright', 'redreçat=$1', 'upright=$1', 'redreçat $1', 'upright $1' ],
	'img_border'                => [ '1', 'vora', 'border' ],
	'img_baseline'              => [ '1', 'línia de base', 'baseline' ],
	'img_sub'                   => [ '1', 'sub' ],
	'img_super'                 => [ '1', 'super', 'sup' ],
	'img_top'                   => [ '1', 'dalt', 'top' ],
	'img_text_top'              => [ '1', 'dalt-text', 'text-top' ],
	'img_middle'                => [ '1', 'mitjà', 'middle' ],
	'img_bottom'                => [ '1', 'baix', 'bottom' ],
	'img_text_bottom'           => [ '1', 'baix-text', 'text-bottom' ],
	'img_link'                  => [ '1', 'enllaç=$1', 'link=$1' ],
	'img_alt'                   => [ '1', 'alt=$1' ],
	'img_class'                 => [ '1', 'class=$1' ],
	'displaytitle'              => [ '1', 'TÍTOL', 'TITOL', 'DISPLAYTITLE' ],
	'currentversion'            => [ '1', 'VERSIÓACTUAL', 'VERSIOACTUAL', 'CURRENTVERSION' ],
	'language'                  => [ '0', '#IDIOMA:', '#LLENGUA:', '#LANGUAGE:' ],
	'contentlanguage'           => [ '1', 'IDIOMACONTINGUT', 'LLENGUACONTINGUT', 'CONTENTLANGUAGE', 'CONTENTLANG' ],
	'pagesinnamespace'          => [ '1', 'PÀGINESENESPAINOMS:', 'PAGESINNAMESPACE:', 'PAGESINNS:' ],
	'numberofadmins'            => [ '1', 'NOMBREADMINS', 'NUMBEROFADMINS' ],
	'formatnum'                 => [ '0', 'FORMATNOMBRE', 'FORMATNUM' ],
	'padleft'                   => [ '0', 'SEPARACIÓESQUERRA', 'SEPARACIOESQUERRA', 'PADLEFT' ],
	'padright'                  => [ '0', 'SEPARACIÓDRETA', 'SEPARACIODRETA', 'PADRIGHT' ],
	'special'                   => [ '0', 'especial', 'special' ],
	'defaultsort'               => [ '1', 'ORDENA:', 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ],
	'filepath'                  => [ '0', 'CAMÍ:', 'CAMI:', 'FILEPATH:' ],
	'tag'                       => [ '0', 'etiqueta', 'marcador', 'tag' ],
	'hiddencat'                 => [ '1', '__CATAMAGADA__', '__HIDDENCAT__' ],
	'pagesincategory'           => [ '1', 'PÀGINESENCATEGORIA', 'PAGINESENCATEGORIA', 'PAGINESENCAT', 'PAGESINCATEGORY', 'PAGESINCAT' ],
	'pagesize'                  => [ '1', 'MIDAPÀGINA', 'MIDAPAGINA', 'MIDADELAPLANA', 'PAGESIZE' ],
	'noindex'                   => [ '1', '__CAPINDEX__', '__NOINDEX__' ],
	'staticredirect'            => [ '1', '__REDIRECCIÓESTATICA__', '__REDIRECCIOESTATICA__', '__STATICREDIRECT__' ],
	'protectionlevel'           => [ '1', 'NIVELLPROTECCIÓ', 'NIVELLPROTECCIO', 'PROTECTIONLEVEL' ],
];

$separatorTransformTable = [ ',' => '.', '.' => ',' ];

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

$datePreferences = [
	'default',
	'dmy',
	'ymd',
	'ISO 8601',
];
$defaultDateFormat = 'dmy';

$bookstoreList = [
	'Catàleg Col·lectiu de les Universitats de Catalunya' => 'http://ccuc.cbuc.cat/search*cat/X?SEARCH=$1',
	'inherit' => true,
];

$linkTrail = "/^((?:[a-zàèéíòóúç·ïü]|'(?!'))+)(.*)$/sDu";
