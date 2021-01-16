<?php
/** Italian (italiano)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 */

$namespaceNames = [
	NS_MEDIA            => 'Media',
	NS_SPECIAL          => 'Speciale',
	NS_TALK             => 'Discussione',
	NS_USER             => 'Utente',
	NS_USER_TALK        => 'Discussioni_utente',
	NS_PROJECT_TALK     => 'Discussioni_$1',
	NS_FILE             => 'File',
	NS_FILE_TALK        => 'Discussioni_file',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'Discussioni_MediaWiki',
	NS_TEMPLATE         => 'Template',
	NS_TEMPLATE_TALK    => 'Discussioni_template',
	NS_HELP             => 'Aiuto',
	NS_HELP_TALK        => 'Discussioni_aiuto',
	NS_CATEGORY         => 'Categoria',
	NS_CATEGORY_TALK    => 'Discussioni_categoria',
];

$namespaceAliases = [
	'Immagine' => NS_FILE,
	'Discussioni_immagine' => NS_FILE_TALK,
];

$separatorTransformTable = [ ',' => "\xc2\xa0", '.' => ',' ];

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

$specialPageAliases = [
	'Activeusers'               => [ 'UtentiAttivi' ],
	'Allmessages'               => [ 'Messaggi' ],
	'Allpages'                  => [ 'TutteLePagine' ],
	'Ancientpages'              => [ 'PagineMenoRecenti' ],
	'Badtitle'                  => [ 'TitoloErrato' ],
	'Blankpage'                 => [ 'PaginaVuota' ],
	'Block'                     => [ 'Blocca' ],
	'Booksources'               => [ 'RicercaISBN' ],
	'BrokenRedirects'           => [ 'RedirectErrati' ],
	'Categories'                => [ 'Categorie' ],
	'ChangeEmail'               => [ 'CambiaEmail' ],
	'ChangePassword'            => [ 'CambiaPassword' ],
	'ComparePages'              => [ 'ComparaPagine' ],
	'Confirmemail'              => [ 'ConfermaEmail' ],
	'Contributions'             => [ 'Contributi', 'ContributiUtente', 'Edit' ],
	'CreateAccount'             => [ 'CreaUtenza', 'CreaAccount' ],
	'Deadendpages'              => [ 'PagineSenzaUscita' ],
	'DeletedContributions'      => [ 'ContributiCancellati' ],
	'DoubleRedirects'           => [ 'RedirectDoppi' ],
	'EditWatchlist'             => [ 'ModificaOsservati', 'ModificaOsservatiSpeciali', 'ModificaListaSeguiti' ],
	'Emailuser'                 => [ 'InviaEmail' ],
	'ExpandTemplates'           => [ 'EspandiTemplate' ],
	'Export'                    => [ 'Esporta' ],
	'Fewestrevisions'           => [ 'PagineConMenoRevisioni' ],
	'FileDuplicateSearch'       => [ 'CercaFileDuplicati' ],
	'Filepath'                  => [ 'Percorso' ],
	'Import'                    => [ 'Importa' ],
	'Invalidateemail'           => [ 'InvalidaEmail' ],
	'JavaScriptTest'            => [ 'TestJavaScript' ],
	'BlockList'                 => [ 'IPBloccati', 'ElencoBlocchi', 'Blocchi' ],
	'LinkSearch'                => [ 'CercaCollegamenti', 'CercaLink' ],
	'Listadmins'                => [ 'Amministratori', 'ElencoAmministratori', 'Admin', 'Sysop', 'Cricca' ],
	'Listbots'                  => [ 'Bot', 'ElencoBot' ],
	'Listfiles'                 => [ 'File', 'Immagini' ],
	'Listgrouprights'           => [ 'ElencoPermessiGruppi', 'Privilegi' ],
	'Listredirects'             => [ 'ElencoRedirect' ],
	'ListDuplicatedFiles'       => [ 'ElencoFileDuplicati' ],
	'Listusers'                 => [ 'Utenti', 'ElencoUtenti' ],
	'Lockdb'                    => [ 'BloccaDB' ],
	'Log'                       => [ 'Registri', 'Registro' ],
	'Lonelypages'               => [ 'PagineOrfane' ],
	'Longpages'                 => [ 'PaginePiùLunghe' ],
	'MergeHistory'              => [ 'UnisciCronologia' ],
	'MIMEsearch'                => [ 'RicercaMIME' ],
	'Mostcategories'            => [ 'PagineConPiùCategorie' ],
	'Mostimages'                => [ 'ImmaginiPiùRichiamate' ],
	'Mostinterwikis'            => [ 'InterwikiPiùRichiamati' ],
	'Mostlinked'                => [ 'PaginePiùRichiamate' ],
	'Mostlinkedcategories'      => [ 'CategoriePiùRichiamate' ],
	'Mostlinkedtemplates'       => [ 'TemplatePiùRichiamati' ],
	'Mostrevisions'             => [ 'PagineConPiùRevisioni' ],
	'Movepage'                  => [ 'Sposta', 'Rinomina' ],
	'Mycontributions'           => [ 'MieiContributi' ],
	'MyLanguage'                => [ 'MiaLingua' ],
	'Mypage'                    => [ 'MiaPaginaUtente', 'MiaPagina' ],
	'Mytalk'                    => [ 'MieDiscussioni' ],
	'Myuploads'                 => [ 'MieiUpload', 'MieiEdit' ],
	'Newimages'                 => [ 'ImmaginiRecenti' ],
	'Newpages'                  => [ 'PaginePiùRecenti' ],
	'PagesWithProp'             => [ 'PagineConProprietà' ],
	'PasswordReset'             => [ 'ReimpostaPassword' ],
	'PermanentLink'             => [ 'LinkPermanente' ],
	'Preferences'               => [ 'Preferenze' ],
	'Prefixindex'               => [ 'Prefissi' ],
	'Protectedpages'            => [ 'PagineProtette' ],
	'Protectedtitles'           => [ 'TitoliProtetti' ],
	'Randompage'                => [ 'PaginaCasuale' ],
	'RandomInCategory'          => [ 'CasualeInCategoria' ],
	'Randomredirect'            => [ 'RedirectCasuale' ],
	'Recentchanges'             => [ 'UltimeModifiche' ],
	'Recentchangeslinked'       => [ 'ModificheCorrelate' ],
	'ResetTokens'               => [ 'ReimpostaToken' ],
	'Revisiondelete'            => [ 'CancellaRevisione' ],
	'Search'                    => [ 'Ricerca', 'Cerca', 'Trova' ],
	'Shortpages'                => [ 'PaginePiùCorte' ],
	'Specialpages'              => [ 'PagineSpeciali' ],
	'Statistics'                => [ 'Statistiche' ],
	'Tags'                      => [ 'Etichette', 'Tag' ],
	'TrackingCategories'        => [ 'CategorieMonitoraggio' ],
	'Unblock'                   => [ 'ElencoSblocchi', 'Sblocchi' ],
	'Uncategorizedcategories'   => [ 'CategorieSenzaCategorie' ],
	'Uncategorizedimages'       => [ 'ImmaginiSenzaCategorie' ],
	'Uncategorizedpages'        => [ 'PagineSenzaCategorie' ],
	'Uncategorizedtemplates'    => [ 'TemplateSenzaCategorie' ],
	'Undelete'                  => [ 'Ripristina' ],
	'Unlockdb'                  => [ 'SbloccaDB' ],
	'Unusedcategories'          => [ 'CategorieNonUsate', 'CategorieVuote' ],
	'Unusedimages'              => [ 'ImmaginiNonUsate' ],
	'Unusedtemplates'           => [ 'TemplateNonUsati' ],
	'Unwatchedpages'            => [ 'PagineNonOsservate' ],
	'Upload'                    => [ 'Carica' ],
	'UploadStash'               => [ 'CodaCaricamenti' ],
	'Userlogin'                 => [ 'Entra' ],
	'Userlogout'                => [ 'Esci' ],
	'Userrights'                => [ 'PermessiUtente' ],
	'Version'                   => [ 'Versione' ],
	'Wantedcategories'          => [ 'CategorieRichieste' ],
	'Wantedfiles'               => [ 'FileRichiesti' ],
	'Wantedpages'               => [ 'PagineRichieste' ],
	'Wantedtemplates'           => [ 'TemplateRichiesti' ],
	'Watchlist'                 => [ 'OsservatiSpeciali' ],
	'Whatlinkshere'             => [ 'PuntanoQui' ],
	'Withoutinterwiki'          => [ 'PagineSenzaInterwiki' ],
];

$magicWords = [
	'redirect'                  => [ '0', '#RINVIA', '#RINVIO', '#RIMANDO', '#REDIRECT' ],
	'currentmonth'              => [ '1', 'MESEATTUALE', 'MESECORRENTE', 'CURRENTMONTH', 'CURRENTMONTH2' ],
	'currentmonthname'          => [ '1', 'NOMEMESEATTUALE', 'NOMEMESECORRENTE', 'CURRENTMONTHNAME' ],
	'currentmonthnamegen'       => [ '1', 'NOMEMESEATTUALEGEN', 'NOMEMESECORRENTEGEN', 'CURRENTMONTHNAMEGEN' ],
	'currentmonthabbrev'        => [ '1', 'MESEATTUALEABBREV', 'MESECORRENTEABBREV', 'CURRENTMONTHABBREV' ],
	'currentday'                => [ '1', 'GIORNOATTUALE', 'GIORNOCORRENTE', 'CURRENTDAY' ],
	'currentday2'               => [ '1', 'GIORNOATTUALE2', 'GIORNOCORRENTE2', 'CURRENTDAY2' ],
	'currentdayname'            => [ '1', 'NOMEGIORNOATTUALE', 'NOMEGIORNOCORRENTE', 'CURRENTDAYNAME' ],
	'currentyear'               => [ '1', 'ANNOATTUALE', 'ANNOCORRENTE', 'CURRENTYEAR' ],
	'currenttime'               => [ '1', 'ORARIOATTUALE', 'CURRENTTIME' ],
	'currenthour'               => [ '1', 'ORAATTUALE', 'ORACORRENTE', 'CURRENTHOUR' ],
	'localmonth'                => [ '1', 'MESELOCALE', 'MESELOCALE2', 'LOCALMONTH', 'LOCALMONTH2' ],
	'localmonth1'               => [ '1', 'MESELOCALE1', 'LOCALMONTH1' ],
	'localmonthname'            => [ '1', 'NOMEMESELOCALE', 'LOCALMONTHNAME' ],
	'localmonthnamegen'         => [ '1', 'NOMEMESELOCALEGEN', 'LOCALMONTHNAMEGEN' ],
	'localmonthabbrev'          => [ '1', 'MESELOCALEABBREV', 'LOCALMONTHABBREV' ],
	'localday'                  => [ '1', 'GIORNOLOCALE', 'LOCALDAY' ],
	'localday2'                 => [ '1', 'GIORNOLOCALE2', 'LOCALDAY2' ],
	'localdayname'              => [ '1', 'NOMEGIORNOLOCALE', 'LOCALDAYNAME' ],
	'localyear'                 => [ '1', 'ANNOLOCALE', 'LOCALYEAR' ],
	'localtime'                 => [ '1', 'ORARIOLOCALE', 'LOCALTIME' ],
	'localhour'                 => [ '1', 'ORALOCALE', 'LOCALHOUR' ],
	'numberofpages'             => [ '1', 'NUMEROPAGINE', 'NUMBEROFPAGES' ],
	'numberofarticles'          => [ '1', 'NUMEROVOCI', 'NUMEROARTICOLI', 'NUMBEROFARTICLES' ],
	'numberoffiles'             => [ '1', 'NUMEROFILE', 'NUMBEROFFILES' ],
	'numberofusers'             => [ '1', 'NUMEROUTENTI', 'NUMBEROFUSERS' ],
	'numberofactiveusers'       => [ '1', 'NUMEROUTENTIATTIVI', 'NUMBEROFACTIVEUSERS' ],
	'numberofedits'             => [ '1', 'NUMEROMODIFICHE', 'NUMEROEDIT', 'NUMBEROFEDITS' ],
	'pagename'                  => [ '1', 'TITOLOPAGINA', 'PAGENAME' ],
	'pagenamee'                 => [ '1', 'TITOLOPAGINAE', 'PAGENAMEE' ],
	'subpagename'               => [ '1', 'NOMESOTTOPAGINA', 'SUBPAGENAME' ],
	'subpagenamee'              => [ '1', 'NOMESOTTOPAGINAE', 'SUBPAGENAMEE' ],
	'subst'                     => [ '0', 'SOST:', 'SUBST:' ],
	'img_thumbnail'             => [ '1', 'miniatura', 'min', 'thumb', 'thumbnail' ],
	'img_manualthumb'           => [ '1', 'miniatura=$1', 'min=$1', 'thumbnail=$1', 'thumb=$1' ],
	'img_right'                 => [ '1', 'destra', 'right' ],
	'img_left'                  => [ '1', 'sinistra', 'left' ],
	'img_none'                  => [ '1', 'nessuno', 'none' ],
	'img_center'                => [ '1', 'centro', 'center', 'centre' ],
	'img_framed'                => [ '1', 'riquadrato', 'originale', 'incorniciato', 'frame', 'framed', 'enframed' ],
	'img_frameless'             => [ '1', 'senza_cornice', 'frameless' ],
	'img_page'                  => [ '1', 'pagina=$1', 'pagina_$1', 'page=$1', 'page $1' ],
	'img_upright'               => [ '1', 'verticale', 'verticale=$1', 'verticale_$1', 'upright', 'upright=$1', 'upright $1' ],
	'img_border'                => [ '1', 'bordo', 'border' ],
	'img_sub'                   => [ '1', 'pedice', 'sub' ],
	'img_top'                   => [ '1', 'sopra', 'top' ],
	'img_text_top'              => [ '1', 'testo-sopra', 'text-top' ],
	'img_middle'                => [ '1', 'metà', 'middle' ],
	'img_bottom'                => [ '1', 'sotto', 'bottom' ],
	'img_text_bottom'           => [ '1', 'testo-sotto', 'text-bottom' ],
	'sitename'                  => [ '1', 'NOMESITO', 'SITENAME' ],
	'servername'                => [ '0', 'NOMESERVER', 'SERVERNAME' ],
	'gender'                    => [ '0', 'GENERE:', 'GENDER:' ],
	'currentweek'               => [ '1', 'SETTIMANACORRENTE', 'CURRENTWEEK' ],
	'localweek'                 => [ '1', 'SETTIMANALOCALE', 'LOCALWEEK' ],
	'plural'                    => [ '0', 'PLURALE:', 'PLURAL:' ],
	'displaytitle'              => [ '1', 'MOSTRATITOLO', 'DISPLAYTITLE' ],
	'language'                  => [ '0', '#LINGUA', '#LANGUAGE:' ],
	'numberofadmins'            => [ '1', 'NUMEROADMIN', 'NUMBEROFADMINS' ],
	'tag'                       => [ '0', 'etichetta', 'tag' ],
	'pagesincategory'           => [ '1', 'PAGINEINCAT', 'PAGESINCATEGORY', 'PAGESINCAT' ],
	'pagesize'                  => [ '1', 'DIMENSIONEPAGINA', 'PESOPAGINA', 'PAGESIZE' ],
	'index'                     => [ '1', '__INDICE__', '__INDEX__' ],
	'noindex'                   => [ '1', '__NOINDICE__', '__NOINDEX__' ],
	'protectionlevel'           => [ '1', 'LIVELLOPROTEZIONE', 'PROTECTIONLEVEL' ],
	'formatdate'                => [ '0', 'formatodata', 'formatdate', 'dateformat' ],
	'pagesincategory_pages'     => [ '0', 'pagine', 'pages' ],
	'pagesincategory_files'     => [ '0', 'file', 'files' ],
];

$linkTrail = '/^([a-zàéèíîìóòúù]+)(.*)$/sDu';
