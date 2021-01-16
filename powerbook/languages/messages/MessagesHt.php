<?php
/** Haitian (Kreyòl ayisyen)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 */

$fallback = 'fr';

$namespaceNames = [
	NS_MEDIA            => 'Medya',
	NS_SPECIAL          => 'Espesyal',
	NS_TALK             => 'Diskite',
	NS_USER             => 'Itilizatè',
	NS_USER_TALK        => 'Diskisyon_Itilizatè',
	NS_PROJECT_TALK     => 'Diskisyon_$1',
	NS_FILE             => 'Fichye',
	NS_FILE_TALK        => 'Diskisyon_Fichye',
	NS_MEDIAWIKI        => 'MedyaWiki',
	NS_MEDIAWIKI_TALK   => 'Diskisyon_MedyaWiki',
	NS_TEMPLATE         => 'Modèl',
	NS_TEMPLATE_TALK    => 'Diskisyon_Modèl',
	NS_HELP             => 'Èd',
	NS_HELP_TALK        => 'Diskisyon_Èd',
	NS_CATEGORY         => 'Kategori',
	NS_CATEGORY_TALK    => 'Diskisyon_Kategori',
];

$namespaceAliases = [
	'Imaj'           => NS_FILE,
	'Diskisyon_Imaj' => NS_FILE_TALK,
];

// Remove French aliases
$namespaceGenderAliases = [];

$specialPageAliases = [
	'Activeusers'               => [ 'ItilizatèAktif' ],
	'Allmessages'               => [ 'ToutMesaj' ],
	'Allpages'                  => [ 'ToutPaj' ],
	'Ancientpages'              => [ 'PajAnsyen' ],
	'Badtitle'                  => [ 'MovèTit' ],
	'Blankpage'                 => [ 'PajVid' ],
	'Block'                     => [ 'Bloke', 'BlokeIP', 'BlokeItilizatè' ],
	'Booksources'               => [ 'SousLiv' ],
	'BrokenRedirects'           => [ 'RedireksyonKase' ],
	'Categories'                => [ 'Kategori' ],
	'ChangePassword'            => [ 'ChanjeMopas', 'ResètMopas' ],
	'ComparePages'              => [ 'KonparePaj' ],
	'Confirmemail'              => [ 'VerifyeImèl' ],
	'Contributions'             => [ 'Kontribisyon', 'Kontrib' ],
	'CreateAccount'             => [ 'KreyeKont' ],
	'Deadendpages'              => [ 'PajEnpas' ],
	'DeletedContributions'      => [ 'SiprimeKontribisyon' ],
	'DoubleRedirects'           => [ 'RedireksyonDoub' ],
	'Emailuser'                 => [ 'ImèlItilizatè' ],
	'ExpandTemplates'           => [ 'EtannModèl' ],
	'Export'                    => [ 'Ekspòte' ],
	'Fewestrevisions'           => [ 'MwensRevizyon' ],
	'FileDuplicateSearch'       => [ 'ChacheFichyeDoub' ],
	'Filepath'                  => [ 'ChemenFichye' ],
	'Import'                    => [ 'Enpòte' ],
	'Invalidateemail'           => [ 'EnvalideImèl' ],
	'BlockList'                 => [ 'LisBloke', 'LisIPBloke' ],
	'LinkSearch'                => [ 'ChacheLyen' ],
	'Listadmins'                => [ 'LisAdmin' ],
	'Listbots'                  => [ 'LisWobo' ],
	'Listfiles'                 => [ 'LisFichye', 'Lis_Fichye', 'LisImaj' ],
	'Listgrouprights'           => [ 'LisDwaGwoup' ],
	'Listredirects'             => [ 'LisRedireksyon' ],
	'Listusers'                 => [ 'LisItilizatè' ],
	'Lockdb'                    => [ 'KadnaseDB' ],
	'Log'                       => [ 'Jounal' ],
	'Lonelypages'               => [ 'PajPoukontli', 'PajOfelen' ],
	'Longpages'                 => [ 'PajLong' ],
	'MergeHistory'              => [ 'FizyoneIstwa' ],
	'MIMEsearch'                => [ 'ChacheMIME' ],
	'Mostcategories'            => [ 'PlisKategori' ],
	'Mostimages'                => [ 'ImajPlisLye', 'PlisFichye', 'PlisImaj' ],
	'Mostlinked'                => [ 'PajPlisLye', 'PlisLye' ],
	'Mostlinkedcategories'      => [ 'KategoriPlisLye', 'KategoriPlisItilize' ],
	'Mostlinkedtemplates'       => [ 'ModèlPlisLye', 'ModèlPlisItilize' ],
	'Mostrevisions'             => [ 'PlisRevizyon' ],
	'Movepage'                  => [ 'DeplasePaj' ],
	'Mycontributions'           => [ 'KontribisyonM' ],
	'MyLanguage'                => [ 'LangMwen' ],
	'Mypage'                    => [ 'PajMwen' ],
	'Mytalk'                    => [ 'DiskisyonM' ],
	'Myuploads'                 => [ 'ChajmanM' ],
	'Newimages'                 => [ 'NouvoImaj' ],
	'Newpages'                  => [ 'PajNouvo' ],
	'PasswordReset'             => [ 'ResètMopas2' ],
	'PermanentLink'             => [ 'LyenPouToutTan' ],
	'Preferences'               => [ 'Preferans' ],
	'Prefixindex'               => [ 'EndèksPrefiks' ],
	'Protectedpages'            => [ 'PajPwoteje' ],
	'Protectedtitles'           => [ 'TitPwoteje' ],
	'Randompage'                => [ 'Oaza', 'PajOaza' ],
	'RandomInCategory'          => [ 'OazaNanKategori' ],
	'Randomredirect'            => [ 'RedireksyonOaza' ],
	'Recentchanges'             => [ 'ChanjmanResan' ],
	'Recentchangeslinked'       => [ 'LyenChanjmanResan', 'ChanjmanAk' ],
	'Revisiondelete'            => [ 'RevizyonSiprime' ],
	'Search'                    => [ 'Chache', 'Fouye' ],
	'Shortpages'                => [ 'PajKout' ],
	'Specialpages'              => [ 'PajEspesyal' ],
	'Statistics'                => [ 'Estatistik' ],
	'Tags'                      => [ 'Etikèt' ],
	'Unblock'                   => [ 'Debloke' ],
	'Uncategorizedcategories'   => [ 'KategoriPakategorize' ],
	'Uncategorizedimages'       => [ 'ImajPakategorize' ],
	'Uncategorizedpages'        => [ 'PajPakategorize' ],
	'Uncategorizedtemplates'    => [ 'ModèlPakategorize' ],
	'Undelete'                  => [ 'Restore' ],
	'Unlockdb'                  => [ 'DekadnaseDB' ],
	'Unusedcategories'          => [ 'KategoriPaItilize' ],
	'Unusedimages'              => [ 'FichyePaItilize', 'ImajPaItilize' ],
	'Unusedtemplates'           => [ 'ModèlVyèj' ],
	'Unwatchedpages'            => [ 'PajPaSiveye' ],
	'Upload'                    => [ 'Chaje' ],
	'UploadStash'               => [ 'ChajePil' ],
	'Userlogin'                 => [ 'Koneksyon' ],
	'Userlogout'                => [ 'Dekoneksyon' ],
	'Userrights'                => [ 'DwaItilizatè', 'FèSysop', 'FèBot' ],
	'Version'                   => [ 'Vèsyon' ],
	'Wantedcategories'          => [ 'KategoriNouBezwen' ],
	'Wantedfiles'               => [ 'FichyeNouBezwen' ],
	'Wantedpages'               => [ 'PajNouBezwen', 'LyenKase' ],
	'Wantedtemplates'           => [ 'ModèlNouBezwen' ],
	'Watchlist'                 => [ 'LisSwivi' ],
	'Whatlinkshere'             => [ 'SakLye' ],
	'Withoutinterwiki'          => [ 'SanEntèwiki' ],
];

$linkTrail = '/^([a-zàèòÀÈÒ]+)(.*)$/sDu';
