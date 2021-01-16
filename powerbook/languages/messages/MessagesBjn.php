<?php
/** Banjar (Bahasa Banjar)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 */

$fallback = 'id';

$namespaceNames = [
	NS_MEDIA            => 'Media',
	NS_SPECIAL          => 'Istimiwa',
	NS_TALK             => 'Pamandiran',
	NS_USER             => 'Pamakai',
	NS_USER_TALK        => 'Pamandiran_Pamakai',
	NS_PROJECT_TALK     => 'Pamandiran_$1',
	NS_FILE             => 'Barakas',
	NS_FILE_TALK        => 'Pamandiran_Barakas',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'Pamandiran_MediaWiki',
	NS_TEMPLATE         => 'Citakan',
	NS_TEMPLATE_TALK    => 'Pamandiran_Citakan',
	NS_HELP             => 'Patulung',
	NS_HELP_TALK        => 'Pamandiran_Patulung',
	NS_CATEGORY         => 'Tumbung',
	NS_CATEGORY_TALK    => 'Pamandiran_Tumbung',
];

$namespaceAliases = [
	// 'id' namespace names at the time 'bjn' namespaces were localised.
	'Istimewa'              => NS_SPECIAL,
	'Pembicaraan'           => NS_TALK,
	'Pengguna'              => NS_USER,
	'Pembicaraan_Pengguna'  => NS_USER_TALK,
	'Pembicaraan_$1'        => NS_PROJECT_TALK,
	'Berkas'                => NS_FILE,
	'Pembicaraan_Berkas'    => NS_FILE_TALK,
	'Pembicaraan_MediaWiki' => NS_MEDIAWIKI_TALK,
	'Templat'               => NS_TEMPLATE,
	'Pembicaraan_Templat'   => NS_TEMPLATE_TALK,
	'Bantuan'               => NS_HELP,
	'Pembicaraan_Bantuan'   => NS_HELP_TALK,
	'Kategori'              => NS_CATEGORY,
	'Pembicaraan_Kategori'  => NS_CATEGORY_TALK,
];

$specialPageAliases = [
	'Activeusers'               => [ 'Pamakai_aktip' ],
	'Allmessages'               => [ 'Pasan_sistim' ],
	'Allpages'                  => [ 'Daptar_tungkaran' ],
	'Ancientpages'              => [ 'Tungkaran_lawas' ],
	'Badtitle'                  => [ 'Judul_nang_buruk' ],
	'Blankpage'                 => [ 'Tungkaran_kusung' ],
	'Block'                     => [ 'Blukir_pamakai' ],
	'Booksources'               => [ 'Sumbar_buku' ],
	'BrokenRedirects'           => [ 'Paugahan_rakai' ],
	'Categories'                => [ 'Daptar_tumbung' ],
	'ChangeEmail'               => [ 'Ganti_suril' ],
	'ChangePassword'            => [ 'Ganti_katasunduk' ],
	'ComparePages'              => [ 'Bandingakan_tungkaran' ],
	'Confirmemail'              => [ 'Kunpirmasi_suril' ],
	'Contributions'             => [ 'Sumbangan_pamakai' ],
	'CreateAccount'             => [ 'Ulah_akun' ],
	'Deadendpages'              => [ 'Tungkaran_buntu' ],
	'DeletedContributions'      => [ 'Sumbangan_nang_dihapus' ],
	'EditWatchlist'             => [ 'Babak_daptar_pantauan' ],
	'ExpandTemplates'           => [ 'Kambangakan_citakan' ],
	'Fewestrevisions'           => [ 'Paubahan_tasadikit' ],
	'FileDuplicateSearch'       => [ 'Panggagaian_barakas_kambar' ],
	'Filepath'                  => [ 'Andakan_barakas' ],
	'BlockList'                 => [ 'Daptar_pamblukiran' ],
	'LinkSearch'                => [ 'Tautan_luar' ],
	'Listadmins'                => [ 'Daptar_pambakal' ],
	'Listbots'                  => [ 'Daptar_bot' ],
	'Listfiles'                 => [ 'Daptar_barakas' ],
	'Listgrouprights'           => [ 'Daptar_hak_galambang' ],
	'Listredirects'             => [ 'Daptar_paugahan' ],
	'Listusers'                 => [ 'Daptar_pamakai' ],
	'Log'                       => [ 'Catatan' ],
	'Lonelypages'               => [ 'Tungkaran_yatim' ],
	'Longpages'                 => [ 'Tungkaran_panjang' ],
	'MergeHistory'              => [ 'Sajarah_panggabungan' ],
	'MIMEsearch'                => [ 'Panggagaian_MIME' ],
	'Mostcategories'            => [ 'Tumbung_pambanyaknya' ],
	'Mostimages'                => [ 'Barakas_paling_dipakai' ],
	'Mostlinked'                => [ 'Tungkaran_paling_dipakai' ],
	'Mostlinkedcategories'      => [ 'Tumbung_paling_dipakai' ],
	'Mostlinkedtemplates'       => [ 'Citakan_paling_dipakai' ],
	'Mostrevisions'             => [ 'Paubahan_pambanyaknya' ],
	'Movepage'                  => [ 'Pindahakan_tungkaran' ],
	'Mycontributions'           => [ 'Sumbangan_ulun' ],
	'MyLanguage'                => [ 'Bahasa_ulun' ],
	'Mypage'                    => [ 'Tungkaran_ulun' ],
	'Mytalk'                    => [ 'Pamandiran_ulun' ],
	'Myuploads'                 => [ 'Unggahan_ulun' ],
	'Newimages'                 => [ 'Barakas_hanyar' ],
	'Newpages'                  => [ 'Tungkaran_hanyar' ],
	'PermanentLink'             => [ 'Tautan_tatap' ],
	'Preferences'               => [ 'Kakatujuan' ],
	'Protectedpages'            => [ 'Tungkaran_nang_dilindungi' ],
	'Protectedtitles'           => [ 'Judul_nang_dilindungi' ],
	'Randompage'                => [ 'Tungkaran_babarang' ],
	'RandomInCategory'          => [ 'Babarang_di_tumbung' ],
	'Randomredirect'            => [ 'Paugahan_babarang' ],
	'Recentchanges'             => [ 'Paubahan_pahanyarnya' ],
	'Recentchangeslinked'       => [ 'Paubahan_tarait' ],
	'Revisiondelete'            => [ 'Hapus_ralatan' ],
	'Search'                    => [ 'Panggagaian' ],
	'Shortpages'                => [ 'Tungkaran_handap' ],
	'Specialpages'              => [ 'Tungkaran_istimiwa' ],
	'Statistics'                => [ 'Statistik' ],
	'Tags'                      => [ 'Tag' ],
	'Unblock'                   => [ 'Pawalangan_pamblukiran' ],
	'Uncategorizedcategories'   => [ 'Tumbung_kada_batumbung' ],
	'Uncategorizedimages'       => [ 'Barakas_kada_batumbung' ],
	'Uncategorizedpages'        => [ 'Tungkaran_kada_batumbung' ],
	'Uncategorizedtemplates'    => [ 'Citakan_kada_batumbung' ],
	'Undelete'                  => [ 'Pawalangan_pahapusan' ],
	'Unusedcategories'          => [ 'Tumbung_puang' ],
	'Unusedimages'              => [ 'Barakas_kada_tapakai' ],
	'Unusedtemplates'           => [ 'Citakan_kada_tapakai' ],
	'Unwatchedpages'            => [ 'Tungkaran_kada_di-itihi' ],
	'Upload'                    => [ 'Paunggahan' ],
	'Userlogin'                 => [ 'Babuat_log' ],
	'Userlogout'                => [ 'Kaluar_log' ],
	'Userrights'                => [ 'Hak_pamakai' ],
	'Wantedcategories'          => [ 'Tumbung_nang_dikahandaki' ],
	'Wantedfiles'               => [ 'Barakas_nang_dikahandaki' ],
	'Wantedpages'               => [ 'Tungkaran_nang_dikahandaki' ],
	'Wantedtemplates'           => [ 'Citakan_nang_dikahandaki' ],
	'Watchlist'                 => [ 'Daptar_itihan' ],
	'Whatlinkshere'             => [ 'Tautan_balik' ],
	'Withoutinterwiki'          => [ 'Kada_pakai_interwiki' ],
];
