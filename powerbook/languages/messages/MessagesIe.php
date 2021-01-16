<?php
/** Interlingue (Interlingue)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 */

$namespaceNames = [
	NS_MEDIA            => 'Media',
	NS_SPECIAL          => 'Special',
	NS_TALK             => 'Discussion',
	NS_USER             => 'Usator',
	NS_USER_TALK        => 'Usator_Discussion',
	NS_PROJECT_TALK     => '$1_Discussion',
	NS_FILE             => 'File',
	NS_FILE_TALK        => 'File_Discussion',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'MediaWiki_Discussion',
	NS_TEMPLATE         => 'Avise',
	NS_TEMPLATE_TALK    => 'Avise_Discussion',
	NS_HELP             => 'Auxilie',
	NS_HELP_TALK        => 'Auxilie_Discussion',
	NS_CATEGORY         => 'Categorie',
	NS_CATEGORY_TALK    => 'Categorie_Discussion',
];

$specialPageAliases = [
	'Activeusers'               => [ 'Usatores_activ' ],
	'Allmessages'               => [ 'Omni_li_missages' ],
	'Allpages'                  => [ 'Omni_li_págines' ],
	'Ancientpages'              => [ 'Págines_antiqui' ],
	'Blankpage'                 => [ 'Págine_in_blanc' ],
	'Block'                     => [ 'Blocar', 'Blocar_IP', 'Blocar_usator' ],
	'Booksources'               => [ 'Fontes_de_libres' ],
	'BrokenRedirects'           => [ 'Redirectionmentes_ínperfect' ],
	'ChangePassword'            => [ 'Change_parol-clave' ],
	'ComparePages'              => [ 'Comparar_págines' ],
	'Confirmemail'              => [ 'Confirmar_email' ],
	'Contributions'             => [ 'Contributiones' ],
	'CreateAccount'             => [ 'Crear_conto' ],
	'Deadendpages'              => [ 'Págines_moderat' ],
	'DeletedContributions'      => [ 'Contributiones_deletet' ],
	'DoubleRedirects'           => [ 'Redirectionmentes_duplic' ],
	'EditWatchlist'             => [ 'Redacter_liste_de_págines_vigilat' ],
	'Emailuser'                 => [ 'Email_de_usator' ],
	'Export'                    => [ 'Exportar' ],
	'Fewestrevisions'           => [ 'Revisiones_max_poc' ],
	'FileDuplicateSearch'       => [ 'Sercha_de_file_duplicat' ],
	'Filepath'                  => [ 'Viette_de_file' ],
	'Import'                    => [ 'Importar' ],
	'Invalidateemail'           => [ 'Email_ínvalid' ],
	'BlockList'                 => [ 'Liste_de_bloc', 'Liste_de_bloces', 'Liste_de_bloc_de_IP' ],
	'LinkSearch'                => [ 'Sercha_de_catenun' ],
	'Listadmins'                => [ 'Liste_de_administratores' ],
	'Listbots'                  => [ 'Liste_de_machines' ],
	'Listfiles'                 => [ 'Liste_de_files', 'Liste_de_file', 'Liste_de_figura' ],
	'Listgrouprights'           => [ 'Jures_de_gruppe_de_liste', 'Jures_de_gruppe_de_usator' ],
	'Listredirects'             => [ 'Liste_de_redirectionmentes' ],
	'Listusers'                 => [ 'Liste_de_usatores', 'Liste_de_usator' ],
	'Lockdb'                    => [ 'Serrar_DB' ],
	'Log'                       => [ 'Diarium', 'Diariumes' ],
	'Lonelypages'               => [ 'Págines_solitari', 'Págines_orfan' ],
	'Longpages'                 => [ 'Págines_long' ],
	'MergeHistory'              => [ 'Historie_de_fusion' ],
	'MIMEsearch'                => [ 'Serchar_MIME' ],
	'Mostcategories'            => [ 'Plu_categories' ],
	'Mostimages'                => [ 'Files_max_ligat', 'Plu_files', 'Plu_figuras' ],
	'Mostlinked'                => [ 'Págines_max_ligat', 'Max_ligat' ],
	'Mostlinkedcategories'      => [ 'Categories_max_ligat', 'Categories_max_usat' ],
	'Mostlinkedtemplates'       => [ 'Avises_max_ligat', 'Avises_max_usat' ],
	'Mostrevisions'             => [ 'Plu_revisiones' ],
	'Movepage'                  => [ 'Mover_págine' ],
	'Mycontributions'           => [ 'Mi_contributiones' ],
	'Mypage'                    => [ 'Mi_págine' ],
	'Mytalk'                    => [ 'Mi_discussion' ],
	'Myuploads'                 => [ 'Mi_cargamentes' ],
	'Newimages'                 => [ 'Nov_files', 'Nov_figuras' ],
	'Newpages'                  => [ 'Nov_págines' ],
	'PasswordReset'             => [ 'Recomensar_parol-clave' ],
	'PermanentLink'             => [ 'Catenun_permanen' ],
	'Preferences'               => [ 'Preferenties' ],
	'Prefixindex'               => [ 'Index_de_prefixe' ],
	'Protectedpages'            => [ 'Págines_gardat' ],
	'Protectedtitles'           => [ 'Titules_gardat' ],
	'Randompage'                => [ 'Sporadic', 'Págine_sporadic' ],
	'Randomredirect'            => [ 'Redirectionmente_sporadic' ],
	'Recentchanges'             => [ 'Nov_changes' ],
	'Recentchangeslinked'       => [ 'Changes_referet', 'Changes_relatet' ],
	'Revisiondelete'            => [ 'Deleter_revision' ],
	'Search'                    => [ 'Serchar' ],
	'Shortpages'                => [ 'Págines_curt' ],
	'Specialpages'              => [ 'Págines_special' ],
	'Statistics'                => [ 'Statistica' ],
	'Tags'                      => [ 'Puntales' ],
	'Unblock'                   => [ 'Desblocar' ],
	'Uncategorizedcategories'   => [ 'Categories_íncategorizet' ],
	'Uncategorizedimages'       => [ 'Files_íncategorizet', 'Figuras_íncategorizet' ],
	'Uncategorizedpages'        => [ 'Págines_íncategorizet' ],
	'Uncategorizedtemplates'    => [ 'Avises_íncategorizet' ],
	'Undelete'                  => [ 'Restaurar' ],
	'Unlockdb'                  => [ 'Disserrar_DB' ],
	'Unusedcategories'          => [ 'Categories_sin_use' ],
	'Unusedimages'              => [ 'Files_sin_use', 'Figuras_sin_use' ],
	'Unusedtemplates'           => [ 'Avises_sin_use' ],
	'Unwatchedpages'            => [ 'Págines_desvigilat' ],
	'Upload'                    => [ 'Cargar_file' ],
	'UploadStash'               => [ 'Cargamente_stash_de_file' ],
	'Userlogin'                 => [ 'Intrar' ],
	'Userlogout'                => [ 'Surtida' ],
	'Userrights'                => [ 'Jures_de_usator', 'Crear_administrator', 'Crear_machine' ],
	'Wantedcategories'          => [ 'Categories_carit' ],
	'Wantedfiles'               => [ 'Files_carit' ],
	'Wantedpages'               => [ 'Págines_carit', 'Catenunes_ínperfect' ],
	'Wantedtemplates'           => [ 'Avises_carit' ],
	'Watchlist'                 => [ 'Liste_de_págines_vigilat' ],
	'Whatlinkshere'             => [ 'Quo_catenunes_ci' ],
	'Withoutinterwiki'          => [ 'Sin_interwiki' ],
];
