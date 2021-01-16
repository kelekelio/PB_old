<?php
/** Indonesian (Bahasa Indonesia)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 */

$separatorTransformTable = [ ',' => '.', '.' => ',' ];

$namespaceNames = [
	NS_MEDIA            => 'Media',
	NS_SPECIAL          => 'Istimewa',
	NS_TALK             => 'Pembicaraan',
	NS_USER             => 'Pengguna',
	NS_USER_TALK        => 'Pembicaraan_Pengguna',
	NS_PROJECT_TALK     => 'Pembicaraan_$1',
	NS_FILE             => 'Berkas',
	NS_FILE_TALK        => 'Pembicaraan_Berkas',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'Pembicaraan_MediaWiki',
	NS_TEMPLATE         => 'Templat',
	NS_TEMPLATE_TALK    => 'Pembicaraan_Templat',
	NS_HELP             => 'Bantuan',
	NS_HELP_TALK        => 'Pembicaraan_Bantuan',
	NS_CATEGORY         => 'Kategori',
	NS_CATEGORY_TALK    => 'Pembicaraan_Kategori',
];

$namespaceAliases = [
	'Gambar_Pembicaraan'    => NS_FILE_TALK,
	'MediaWiki_Pembicaraan' => NS_MEDIAWIKI_TALK,
	'Templat_Pembicaraan'   => NS_TEMPLATE_TALK,
	'Bantuan_Pembicaraan'   => NS_HELP_TALK,
	'Kategori_Pembicaraan'  => NS_CATEGORY_TALK,
	'Gambar'                => NS_FILE,
	'Pembicaraan_Gambar'    => NS_FILE_TALK,
	'Bicara'                => NS_TALK,
	'Bicara_Pengguna'       => NS_USER_TALK,
];

$bookstoreList = [
	'AddALL' => 'http://www.addall.com/New/Partner.cgi?query=$1&type=ISBN',
	'Amazon.com' => 'https://www.amazon.com/exec/obidos/ISBN=$1',
	'Barnes & Noble' => 'http://search.barnesandnoble.com/bookSearch/isbnInquiry.asp?isbn=$1',
	'Bhinneka.com bookstore' => 'http://www.bhinneka.com/Buku/Engine/search.asp?fisbn=$1',
	'Gramedia Cyberstore (via Google)' => 'http://www.google.com/search?q=%22ISBN+:+$1%22+%22product_detail%22+site:www.gramediacyberstore.com+OR+site:www.gramediaonline.com+OR+site:www.kompas.com&hl=id',
];

$magicWords = [
	'redirect'                  => [ '0', '#ALIH', '#REDIRECT' ],
	'notoc'                     => [ '0', '__TANPADAFTARISI__', '__NIRDASI__', '__NOTOC__' ],
	'nogallery'                 => [ '0', '__TANPAGALERI__', '__NIRGAL__', '__NOGALLERY__' ],
	'forcetoc'                  => [ '0', '__PAKSADAFTARISI__', '__PAKSADASI__', '__FORCETOC__' ],
	'toc'                       => [ '0', '__DAFTARISI__', '__DASI__', '__TOC__' ],
	'noeditsection'             => [ '0', '__TANPASUNTINGANBAGIAN__', '__NIRSUBA__', '__NOEDITSECTION__' ],
	'currentmonth'              => [ '1', 'BULANKINI', 'BULANKINI2', 'BUKIN', 'BUKIN2', 'CURRENTMONTH', 'CURRENTMONTH2' ],
	'currentmonth1'             => [ '1', 'BULANKINI1', 'BUKIN1', 'CURRENTMONTH1' ],
	'currentmonthname'          => [ '1', 'NAMABULANKINI', 'NAMBUKIN', 'CURRENTMONTHNAME' ],
	'currentmonthnamegen'       => [ '1', 'NAMAJENDERBULANKINI', 'NAMJENBUKIN', 'CURRENTMONTHNAMEGEN' ],
	'currentmonthabbrev'        => [ '1', 'NAMASINGKATBULANKINI', 'BULANINISINGKAT', 'NAMSINGBUKIN', 'CURRENTMONTHABBREV' ],
	'currentday'                => [ '1', 'HARIKINI', 'HARKIN', 'CURRENTDAY' ],
	'currentday2'               => [ '1', 'HARIKINI2', 'HARKIN2', 'CURRENTDAY2' ],
	'currentdayname'            => [ '1', 'NAMAHARIKINI', 'NAMHARKIN', 'CURRENTDAYNAME' ],
	'currentyear'               => [ '1', 'TAHUNKINI', 'TAKIN', 'CURRENTYEAR' ],
	'currenttime'               => [ '1', 'WAKTUKINI', 'WAKIN', 'CURRENTTIME' ],
	'currenthour'               => [ '1', 'JAMKINI', 'JAKIN', 'CURRENTHOUR' ],
	'localmonth'                => [ '1', 'BULANLOKAL', 'BULANLOKAL2', 'BULOK', 'BULOK2', 'LOCALMONTH', 'LOCALMONTH2' ],
	'localmonth1'               => [ '1', 'BULANLOKAL1', 'BULOK1', 'LOCALMONTH1' ],
	'localmonthname'            => [ '1', 'NAMABULANLOKAL', 'NAMBULOK', 'LOCALMONTHNAME' ],
	'localmonthnamegen'         => [ '1', 'NAMAJENDERBULANLOKAL', 'NAMJENBULOK', 'LOCALMONTHNAMEGEN' ],
	'localmonthabbrev'          => [ '1', 'NAMASINGKATBULANLOKAL', 'NAMSINGBULOK', 'LOCALMONTHABBREV' ],
	'localday'                  => [ '1', 'HARILOKAL', 'HALOK', 'LOCALDAY' ],
	'localday2'                 => [ '1', 'HARILOKAL2', 'HALOK2', 'LOCALDAY2' ],
	'localdayname'              => [ '1', 'NAMAHARILOKAL', 'NAMHALOK', 'LOCALDAYNAME' ],
	'localyear'                 => [ '1', 'TAHUNLOKAL', 'TALOK', 'LOCALYEAR' ],
	'localtime'                 => [ '1', 'WAKTULOKAL', 'WALOK', 'LOCALTIME' ],
	'localhour'                 => [ '1', 'JAMLOKAL', 'JALOK', 'LOCALHOUR' ],
	'numberofpages'             => [ '1', 'JUMLAHHALAMAN', 'JUMMAN', 'NUMBEROFPAGES' ],
	'numberofarticles'          => [ '1', 'JUMLAHARTIKEL', 'JUMKEL', 'NUMBEROFARTICLES' ],
	'numberoffiles'             => [ '1', 'JUMLAHBERKAS', 'JUMKAS', 'NUMBEROFFILES' ],
	'numberofusers'             => [ '1', 'JUMLAHPENGGUNA', 'JUMPENG', 'NUMBEROFUSERS' ],
	'numberofactiveusers'       => [ '1', 'JUMLAHPENGGUNAAKTIF', 'JUMPENGTIF', 'NUMBEROFACTIVEUSERS' ],
	'numberofedits'             => [ '1', 'JUMLAHSUNTINGAN', 'JUMTING', 'NUMBEROFEDITS' ],
	'pagename'                  => [ '1', 'NAMAHALAMAN', 'NAMMAN', 'PAGENAME' ],
	'pagenamee'                 => [ '1', 'NAMAHALAMANE', 'NAMMANE', 'PAGENAMEE' ],
	'namespace'                 => [ '1', 'RUANGNAMA', 'RUNAM', 'NAMESPACE' ],
	'namespacee'                => [ '1', 'RUANGNAMAE', 'RUNAME', 'NAMESPACEE' ],
	'talkspace'                 => [ '1', 'RUANGBICARA', 'RUBIR', 'TALKSPACE' ],
	'talkspacee'                => [ '1', 'RUANGBICARAE', 'RUBIRE', 'TALKSPACEE' ],
	'subjectspace'              => [ '1', 'RUANGUTAMA', 'RUANGARTIKEL', 'RUTAMA', 'RUTIKEL', 'SUBJECTSPACE', 'ARTICLESPACE' ],
	'subjectspacee'             => [ '1', 'RUANGUTAMAE', 'RUANGARTIKELE', 'RUTAMAE', 'RUKELE', 'SUBJECTSPACEE', 'ARTICLESPACEE' ],
	'fullpagename'              => [ '1', 'NAMAHALAMANLENGKAP', 'NAMALENGKAPHALAMAN', 'NAMMANKAP', 'FULLPAGENAME' ],
	'fullpagenamee'             => [ '1', 'AMAHALAMANLENGKAPE', 'NAMALENGKAPHALAMANE', 'NAMMANKAPE', 'FULLPAGENAMEE' ],
	'subpagename'               => [ '1', 'NAMASUBHALAMAN', 'NAMAUPAHALAMAN', 'NAMUMAN', 'SUBPAGENAME' ],
	'subpagenamee'              => [ '1', 'NAMASUBHALAMANE', 'NAMAUPAHALAMANE', 'NAMUMANE', 'SUBPAGENAMEE' ],
	'basepagename'              => [ '1', 'NAMAHALAMANDASAR', 'NAMADASARHALAMAN', 'NAMMANSAR', 'BASEPAGENAME' ],
	'basepagenamee'             => [ '1', 'NAMAHALAMANDASARE', 'NAMADASARHALAMANE', 'NAMMANSARE', 'BASEPAGENAMEE' ],
	'talkpagename'              => [ '1', 'NAMAHALAMANBICARA', 'NAMMANBIR', 'TALKPAGENAME' ],
	'talkpagenamee'             => [ '1', 'NAMAHALAMANBICARAE', 'NAMMANBIRE', 'TALKPAGENAMEE' ],
	'subjectpagename'           => [ '1', 'NAMAHALAMANUTAMA', 'NAMAHALAMANARTIKEL', 'NAMMANTAMA', 'NAMMANTIKEL', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ],
	'subjectpagenamee'          => [ '1', 'NAMAHALAMANUTAMAE', 'NAMAHALAMANARTIKELE', 'NAMMANTAMAE', 'NAMMANTIKELE', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ],
	'msg'                       => [ '0', 'PSN:', 'PESAN:', 'MSG:' ],
	'subst'                     => [ '0', 'GNT:', 'GANTI:', 'TUKAR:', 'SUBST:' ],
	'msgnw'                     => [ '0', 'TPL:', 'MSGNW:' ],
	'img_thumbnail'             => [ '1', 'jmpl', 'jempol', 'mini', 'miniatur', 'thumb', 'thumbnail' ],
	'img_manualthumb'           => [ '1', 'jmpl=$1', 'jempol=$1', 'mini=$1', 'miniatur=$1', 'thumbnail=$1', 'thumb=$1' ],
	'img_right'                 => [ '1', 'ka', 'kanan', 'right' ],
	'img_left'                  => [ '1', 'kiri', 'ki', 'left' ],
	'img_none'                  => [ '1', 'nir', 'tanpa', 'none' ],
	'img_center'                => [ '1', 'pus', 'pusat', 'center', 'centre' ],
	'img_framed'                => [ '1', 'bingkai', 'bing', 'frame', 'framed', 'enframed' ],
	'img_frameless'             => [ '1', 'nirbing', 'tanpabingkai', 'frameless' ],
	'img_lang'                  => [ '1', 'bhs=$1', 'lang=$1' ],
	'img_page'                  => [ '1', 'hal=$1', 'halaman=$1', 'hal_$1', 'halaman_$1', 'page=$1', 'page $1' ],
	'img_upright'               => [ '1', 'lurus', 'lurus=$1', 'lurus_$1', 'tegak', 'tegak=$1', 'tegak_$1', 'upright', 'upright=$1', 'upright $1' ],
	'img_border'                => [ '1', 'tepi', 'batas', 'border' ],
	'img_baseline'              => [ '1', 'gada', 'garis_dasar', 'baseline' ],
	'img_sub'                   => [ '1', 'upa', 'sub' ],
	'img_top'                   => [ '1', 'atas', 'top' ],
	'img_text_top'              => [ '1', 'atek', 'atas-teks', 'text-top' ],
	'img_middle'                => [ '1', 'tengah', 'middle' ],
	'img_bottom'                => [ '1', 'bawah', 'bottom' ],
	'img_text_bottom'           => [ '1', 'batek', 'bawah-teks', 'text-bottom' ],
	'img_link'                  => [ '1', 'pra=$1', 'pranala=$1', 'link=$1' ],
	'img_alt'                   => [ '1', 'al=$1', 'alternatif=$1', 'alt=$1' ],
	'sitename'                  => [ '1', 'NAMASITUS', 'NAMSIT', 'SITENAME' ],
	'ns'                        => [ '0', 'RN:', 'RUNAM:', 'NS:' ],
	'localurl'                  => [ '0', 'URLLOKAL', 'LOCALURL:' ],
	'localurle'                 => [ '0', 'URLLOKALE', 'LOCALURLE:' ],
	'server'                    => [ '0', 'PELADEN', 'SERVER' ],
	'servername'                => [ '0', 'NAMAPELADEN', 'NAMASERVER', 'NAMPEL', 'SERVERNAME' ],
	'scriptpath'                => [ '0', 'LOKASISKRIP', 'SCRIPTPATH' ],
	'grammar'                   => [ '0', 'TATABAHASA:', 'TASA:', 'GRAMMAR:' ],
	'gender'                    => [ '0', 'JANTINA:', 'GENDER:' ],
	'notitleconvert'            => [ '0', '__TANPAKONVERSIJUDUL__', '__NIRKODUL__', '__NOTITLECONVERT__', '__NOTC__' ],
	'nocontentconvert'          => [ '0', '__TANPAKONVERSIISI__', '__NIRKOSI__', '__NOCONTENTCONVERT__', '__NOCC__' ],
	'currentweek'               => [ '1', 'MINGGUKINI', 'MIKIN', 'CURRENTWEEK' ],
	'currentdow'                => [ '1', 'HARIDALAMMINGGU', 'HADAMI', 'CURRENTDOW' ],
	'localweek'                 => [ '1', 'MINGGULOKAL', 'MIKAL', 'LOCALWEEK' ],
	'localdow'                  => [ '1', 'HARIDALAMMINGGULOKAL', 'HADAMIKAL', 'LOCALDOW' ],
	'revisionid'                => [ '1', 'IDREVISI', 'IREV', 'REVISIONID' ],
	'revisionday'               => [ '1', 'HARIREVISI', 'HAREV', 'REVISIONDAY' ],
	'revisionday2'              => [ '1', 'HARIREVISI2', 'HAREV2', 'REVISIONDAY2' ],
	'revisionmonth'             => [ '1', 'BULANREVISI', 'BUREV', 'REVISIONMONTH' ],
	'revisionmonth1'            => [ '1', 'BULANREVISI1', 'REVISIONMONTH1' ],
	'revisionyear'              => [ '1', 'TAHUNREVISI', 'TAREV', 'REVISIONYEAR' ],
	'revisiontimestamp'         => [ '1', 'STEMPELWAKTUREVISI', 'REKAMWAKTUREVISI', 'REVISIONTIMESTAMP' ],
	'revisionuser'              => [ '1', 'PENGGUNAREVISI', 'REVISIONUSER' ],
	'plural'                    => [ '0', 'JAMAK:', 'PLURAL:' ],
	'fullurl'                   => [ '0', 'URLLENGKAP:', 'FULLURL:' ],
	'fullurle'                  => [ '0', 'URLLENGKAPE', 'FULLURLE:' ],
	'lcfirst'                   => [ '0', 'AKC:', 'AWALKECIL:', 'LCFIRST:' ],
	'ucfirst'                   => [ '0', 'ABS:', 'AWALBESAR:', 'UCFIRST:' ],
	'lc'                        => [ '0', 'KC:', 'KECIL:', 'HURUFKECIL:', 'LC:' ],
	'uc'                        => [ '0', 'BS:', 'BESAR:', 'HURUFBESAR:', 'UC:' ],
	'raw'                       => [ '0', 'MENTAH:', 'RAW:' ],
	'displaytitle'              => [ '1', 'JUDULTAMPILAN', 'JUTAM', 'DISPLAYTITLE' ],
	'rawsuffix'                 => [ '1', 'M', 'R' ],
	'newsectionlink'            => [ '1', '__PRANALABAGIANBARU__', '__PRABABA__', '__NEWSECTIONLINK__' ],
	'nonewsectionlink'          => [ '1', '_TANPAPRANALABAGIANBARU__', '__NIRPRABABA__', '__NONEWSECTIONLINK__' ],
	'currentversion'            => [ '1', 'VERSIKINI', 'VERKIN', 'CURRENTVERSION' ],
	'urlencode'                 => [ '0', 'KODEURL:', 'KODU:', 'URLENCODE:' ],
	'anchorencode'              => [ '0', 'KODEJANGKAR', 'KOJANG', 'ANCHORENCODE' ],
	'currenttimestamp'          => [ '1', 'STEMPELWAKTUKINI', 'STEMWAKIN', 'CURRENTTIMESTAMP' ],
	'localtimestamp'            => [ '1', 'STEMPELWAKTULOKAL', 'STEMWAKAL', 'LOCALTIMESTAMP' ],
	'directionmark'             => [ '1', 'MARKAARAH', 'MARRAH', 'DIRECTIONMARK', 'DIRMARK' ],
	'language'                  => [ '0', '#BAHASA:', '#BHS:', '#LANGUAGE:' ],
	'contentlanguage'           => [ '1', 'BAHASAISI', 'BHSISI', 'BASI', 'CONTENTLANGUAGE', 'CONTENTLANG' ],
	'pagesinnamespace'          => [ '1', 'HALAMANDIRUANGNAMA:', 'HALDIRN', 'PAGESINNAMESPACE:', 'PAGESINNS:' ],
	'numberofadmins'            => [ '1', 'JUMLAHADMIN', 'JUMLAHPENGURUS', 'JUMAD', 'JURUS', 'NUMBEROFADMINS' ],
	'formatnum'                 => [ '0', 'FORMATANGKA', 'FORANG', 'FORMATNUM' ],
	'padleft'                   => [ '0', 'ISIKIRI', 'IKI', 'PADLEFT' ],
	'padright'                  => [ '0', 'ISIKANAN', 'IKA', 'PADRIGHT' ],
	'special'                   => [ '0', 'istimewa', 'spesial', 'special' ],
	'defaultsort'               => [ '1', 'URUTANBAKU:', 'UBUR:', 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ],
	'filepath'                  => [ '0', 'LOKASIBERKAS:', 'LOBER:', 'FILEPATH:' ],
	'tag'                       => [ '0', 'kata_kunci', 'takun', 'tag' ],
	'hiddencat'                 => [ '1', '__KATEGORITERSEMBUNYI__', '__KATSEM__', '__HIDDENCAT__' ],
	'pagesincategory'           => [ '1', 'HALAMANDIKATEGORI', 'HALDIKAT', 'PAGESINCATEGORY', 'PAGESINCAT' ],
	'pagesize'                  => [ '1', 'BESARHALAMAN', 'BESMAN', 'PAGESIZE' ],
	'index'                     => [ '1', '__INDEKS__', '__INDEX__' ],
	'noindex'                   => [ '1', '__TANPAINDEKS__', '__NIRDEKS__', '__NOINDEX__' ],
	'numberingroup'             => [ '1', 'JUMLAHDIKELOMPOK', 'JULDIPOK', 'NUMBERINGROUP', 'NUMINGROUP' ],
	'staticredirect'            => [ '1', '__PENGALIHANSTATIK__', '__PENGALIHANSTATIS__', '__PETIK__', '__PETIS__', '__STATICREDIRECT__' ],
	'protectionlevel'           => [ '1', 'TINGKATPERLINDUNGAN', 'TIPER', 'PROTECTIONLEVEL' ],
	'formatdate'                => [ '0', 'formattanggal', 'formatdate', 'dateformat' ],
	'pagesincategory_all'       => [ '0', 'semua', 'all' ],
	'pagesincategory_pages'     => [ '0', 'halaman', 'pages' ],
	'pagesincategory_files'     => [ '0', 'berkas', 'files' ],
];

$specialPageAliases = [
	'Activeusers'               => [ 'Pengguna_aktif', 'PenggunaAktif' ],
	'Allmessages'               => [ 'Pesan_sistem', 'PesanSistem' ],
	'Allpages'                  => [ 'Daftar_halaman', 'DaftarHalaman' ],
	'Ancientpages'              => [ 'Halaman_lama', 'HalamanLama' ],
	'Badtitle'                  => [ 'Judul_yang_buruk' ],
	'Blankpage'                 => [ 'Halaman_kosong', 'HalamanKosong' ],
	'Block'                     => [ 'Blokir_pengguna', 'BlokirPengguna' ],
	'Booksources'               => [ 'Sumber_buku', 'SumberBuku' ],
	'BrokenRedirects'           => [ 'Pengalihan_rusak', 'PengalihanRusak' ],
	'Categories'                => [ 'Daftar_kategori', 'DaftarKategori', 'Kategori' ],
	'ChangeEmail'               => [ 'Ganti_surel', 'GantiSurel' ],
	'ChangePassword'            => [ 'Ganti_sandi', 'GantiSandi' ],
	'ComparePages'              => [ 'Bandingkan_halaman', 'BandingkanHalaman' ],
	'Confirmemail'              => [ 'Konfirmasi_surel', 'KonfirmasiSurel' ],
	'Contributions'             => [ 'Kontribusi_pengguna', 'KontribusiPengguna', 'Kontribusi' ],
	'CreateAccount'             => [ 'Buat_akun', 'BuatAkun' ],
	'Deadendpages'              => [ 'Halaman_buntu', 'HalamanBuntu' ],
	'DeletedContributions'      => [ 'Kontribusi_yang_dihapus', 'KontribusiDihapus' ],
	'DoubleRedirects'           => [ 'Pengalihan_ganda', 'PengalihanGanda' ],
	'EditWatchlist'             => [ 'Sunting_daftar_pantauan' ],
	'Emailuser'                 => [ 'Surel_pengguna', 'SurelPengguna' ],
	'ExpandTemplates'           => [ 'Kembangkan_templat', 'KembangkanTemplat' ],
	'Export'                    => [ 'Ekspor_halaman', 'Ekspor' ],
	'Fewestrevisions'           => [ 'Perubahan_tersedikit', 'PerubahanTersedikit' ],
	'FileDuplicateSearch'       => [ 'Pencarian_berkas_duplikat', 'PencarianBerkasDuplikat' ],
	'Filepath'                  => [ 'Lokasi_berkas', 'Lokasi_arsip', 'LokasiArsip' ],
	'Import'                    => [ 'Impor_halaman', 'Impor' ],
	'Invalidateemail'           => [ 'Batalkan_validasi_surel', 'BatalkanValidasiSurel' ],
	'BlockList'                 => [ 'Daftar_pemblokiran', 'DaftarPemblokiran' ],
	'LinkSearch'                => [ 'Pranala_luar', 'PranalaLuar', 'Pencarian_pranala', 'PencarianPranala' ],
	'Listadmins'                => [ 'Daftar_pengurus', 'DaftarPengurus' ],
	'Listbots'                  => [ 'Daftar_bot', 'DaftarBot' ],
	'Listfiles'                 => [ 'Daftar_berkas', 'DaftarBerkas' ],
	'Listgrouprights'           => [ 'Daftar_hak_kelompok', 'DaftarHakKelompok', 'DaftarHak' ],
	'Listredirects'             => [ 'Daftar_pengalihan', 'DaftarPengalihan' ],
	'Listusers'                 => [ 'Daftar_pengguna', 'DaftarPengguna' ],
	'Lockdb'                    => [ 'Kunci_basis_data', 'KunciBasisData' ],
	'Log'                       => [ 'Catatan' ],
	'Lonelypages'               => [ 'Halaman_yatim', 'Halaman_tak_bertuan', 'HalamanYatim', 'HalamanTakBertuan' ],
	'Longpages'                 => [ 'Halaman_panjang', 'HalamanPanjang' ],
	'MergeHistory'              => [ 'Riwayat_penggabungan', 'RiwayatPenggabungan' ],
	'MIMEsearch'                => [ 'Pencarian_MIME', 'PencarianMIME' ],
	'Mostcategories'            => [ 'Kategori_terbanyak', 'KategoriTerbanyak' ],
	'Mostimages'                => [ 'Berkas_paling_digunakan', 'BerkasPalingDigunakan' ],
	'Mostinterwikis'            => [ 'Interwiki_terbanyak', 'InterwikiTerbanyak' ],
	'Mostlinked'                => [ 'Halaman_paling_digunakan', 'HalamanPalingDigunakan' ],
	'Mostlinkedcategories'      => [ 'Kategori_paling_digunakan', 'KategoriPalingDigunakan' ],
	'Mostlinkedtemplates'       => [ 'Templat_paling_digunakan', 'TemplatPalingDigunakan' ],
	'Mostrevisions'             => [ 'Perubahan_terbanyak', 'PerubahanTerbanyak' ],
	'Movepage'                  => [ 'Pindahkan_halaman', 'PindahkanHalaman' ],
	'Mycontributions'           => [ 'Kontribusi_saya', 'KontribusiSaya' ],
	'MyLanguage'                => [ 'Bahasa_saya' ],
	'Mypage'                    => [ 'Halaman_saya', 'HalamanSaya' ],
	'Mytalk'                    => [ 'Pembicaraan_saya', 'PembicaraanSaya' ],
	'Myuploads'                 => [ 'Unggahan_saya' ],
	'Newimages'                 => [ 'Berkas_baru', 'BerkasBaru' ],
	'Newpages'                  => [ 'Halaman_baru', 'HalamanBaru' ],
	'PasswordReset'             => [ 'Reset_sandi', 'ResetSandi' ],
	'PermanentLink'             => [ 'Pranala_permanen' ],
	'Preferences'               => [ 'Preferensi' ],
	'Prefixindex'               => [ 'Indeks_awalan', 'IndeksAwalan' ],
	'Protectedpages'            => [ 'Halaman_yang_dilindungi', 'HalamanDilindungi' ],
	'Protectedtitles'           => [ 'Judul_yang_dilindungi', 'JudulDilindungi' ],
	'Randompage'                => [ 'Halaman_sembarang', 'HalamanSembarang' ],
	'RandomInCategory'          => [ 'Sembarang_di_kategori', 'SembarangDiKategori' ],
	'Randomredirect'            => [ 'Pengalihan_sembarang', 'PengalihanSembarang' ],
	'Recentchanges'             => [ 'Perubahan_terbaru', 'PerubahanTerbaru', 'RC', 'PT' ],
	'Recentchangeslinked'       => [ 'Perubahan_terkait', 'PerubahanTerkait' ],
	'Revisiondelete'            => [ 'Hapus_revisi', 'HapusRevisi' ],
	'Search'                    => [ 'Pencarian', 'Cari' ],
	'Shortpages'                => [ 'Halaman_pendek', 'HalamanPendek' ],
	'Specialpages'              => [ 'Halaman_istimewa', 'HalamanIstimewa' ],
	'Statistics'                => [ 'Statistik' ],
	'Tags'                      => [ 'Tag' ],
	'Unblock'                   => [ 'Pembatalan_pemblokiran', 'PembatalanPemblokiran' ],
	'Uncategorizedcategories'   => [ 'Kategori_tak_terkategori', 'KategoriTakTerkategori' ],
	'Uncategorizedimages'       => [ 'Berkas_tak_terkategori', 'BerkasTakTerkategori' ],
	'Uncategorizedpages'        => [ 'Halaman_tak_terkategori', 'HalamanTakTerkategori' ],
	'Uncategorizedtemplates'    => [ 'Templat_tak_terkategori', 'TemplatTakTerkategori' ],
	'Undelete'                  => [ 'Pembatalan_penghapusan', 'PembatalanPenghapusan' ],
	'Unlockdb'                  => [ 'Buka_kunci_basis_data', 'BukaKunciBasisData' ],
	'Unusedcategories'          => [ 'Kategori_kosong', 'KategoriKosong', 'Kategori_tak_terpakai', 'KategoriTakTerpakai' ],
	'Unusedimages'              => [ 'Berkas_tak_terpakai', 'BerkasTakTerpakai', 'Berkas_tak_digunakan', 'BerkasTakDigunakan' ],
	'Unusedtemplates'           => [ 'Templat_tak_terpakai', 'TemplatTakTerpakai' ],
	'Unwatchedpages'            => [ 'Halaman_tak_terpantau', 'HalamanTakTerpantau' ],
	'Upload'                    => [ 'Pengunggahan', 'Pemuatan', 'Unggah' ],
	'Userlogin'                 => [ 'Masuk_log', 'MasukLog' ],
	'Userlogout'                => [ 'Keluar_log', 'KeluarLog' ],
	'Userrights'                => [ 'Hak_pengguna', 'HakPengguna' ],
	'Version'                   => [ 'Versi' ],
	'Wantedcategories'          => [ 'Kategori_yang_diinginkan', 'KategoriDiinginkan' ],
	'Wantedfiles'               => [ 'Berkas_yang_diinginkan', 'BerkasDiinginkan' ],
	'Wantedpages'               => [ 'Halaman_yang_diinginkan', 'HalamanDiinginkan' ],
	'Wantedtemplates'           => [ 'Templat_yang_diinginkan', 'TemplatDiinginkan' ],
	'Watchlist'                 => [ 'Daftar_pantauan', 'DaftarPantauan' ],
	'Whatlinkshere'             => [ 'Pranala_balik', 'PranalaBalik' ],
	'Withoutinterwiki'          => [ 'Tanpa_interwiki', 'TanpaInterwiki' ],
];

$datePreferences = [
	'default',
	'dmy',
	'ymd',
	'ISO 8601',
];

$defaultDateFormat = 'dmy';

$dateFormats = [
	'dmy time' => 'H.i',
	'dmy date' => 'j F Y',
	'dmy both' => 'j F Y H.i',

	'ymd time' => 'H.i',
	'ymd date' => 'Y F j',
	'ymd both' => 'Y F j H.i',
];
