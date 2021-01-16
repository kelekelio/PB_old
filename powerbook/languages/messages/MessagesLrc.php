<?php
/** Northern Luri (لۊری شومالی)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Bonevarluri
 * @author Mogoeilor
 * @author Mjbmr
 */

$fallback = 'fa';
$rtl = true;

$namespaceNames = [
	NS_MEDIA            => 'ڤارئسگأر',
	NS_SPECIAL          => 'ڤیجە',
	NS_TALK             => 'چأک_چئنە',
	NS_USER             => 'کاریار',
	NS_USER_TALK        => 'چأک_چئنە_کاریار',
	NS_PROJECT_TALK     => 'چأک_چئنە_$1',
	NS_FILE             => 'جانیا',
	NS_FILE_TALK        => 'چأک_چئنە_جانیا',
	NS_MEDIAWIKI        => 'مئدیاڤیکی',
	NS_MEDIAWIKI_TALK   => 'چأک_چئنە_مئدیاڤیکی',
	NS_TEMPLATE         => 'چوٙأ',
	NS_TEMPLATE_TALK    => 'چأک_چئنە_چوأ',
	NS_HELP             => 'ھومیاری',
	NS_HELP_TALK        => 'چأک_چئنە_ھومیاری',
	NS_CATEGORY         => 'دأسە',
	NS_CATEGORY_TALK    => 'چأک_چئنە_دأسە',
];

$namespaceAliases = [
	'پوروجە' => NS_PROJECT,
	'چأک_چئنە_پوروجە' => NS_PROJECT_TALK,
	'أسگ' => NS_FILE,
	'چأک_چئنە_أسگ' => NS_FILE_TALK,
];

$specialPageAliases = [
	'Activeusers'               => [ 'کاریاریا_کونئشکتار' ],
	'Allmessages'               => [ 'ھأمە_پیغومیا' ],
	'AllMyUploads'              => [ 'ھأمە_جانیایا_مە', 'ھأمە_سوڤارکئردیا_مە' ],
	'Allpages'                  => [ 'ھأمە_بألگە_یا' ],
	'ApiHelp'                   => [ 'ھومیاری_ئی_پی_آی' ],
	'Ancientpages'              => [ 'بألگە_یا_دئماتری' ],
	'Badtitle'                  => [ 'داسوٙن_گأن' ],
	'Blankpage'                 => [ 'بألگە_ھالی' ],
	'Block'                     => [ 'نئھاگئری', 'نئھاگئری_آی_پی', 'نئھاگئری_کاریار' ],
	'Booksources'               => [ 'نئھاگری_سأرچئشمە_یا' ],
	'BrokenRedirects'           => [ 'ڤاگأردوٙنیا_بی_سأرأنجوم' ],
	'Categories'                => [ 'دأسە_یا' ],
	'ChangeEmail'               => [ 'آلئشت_دأئن_ایمئیل' ],
	'ChangePassword'            => [ 'آلئشت_دأئن_رازینە_گوڤاردئن' ],
	'ComparePages'              => [ 'تە_یأک_نیائن_بألگە_یا' ],
	'Confirmemail'              => [ 'پوشت_راس_کاری_ایمئیل' ],
	'Contributions'             => [ 'ھومیاری_کاریا' ],
	'CreateAccount'             => [ 'راس_کئردئن_حئسۉ' ],
	'Deadendpages'              => [ 'بألگە_یا_بی_ڤیرگار' ],
	'DeletedContributions'      => [ 'ھومیاریا_پاکسا_بییە' ],
	'Diff'                      => [ 'فأرخ' ],
	'DoubleRedirects'           => [ 'واگأردوٙنیا_دوٙ_کوٙنە' ],
	'EditWatchlist'             => [ 'ڤیرایئشت_سئیل_بأرگ' ],
	'Emailuser'                 => [ 'ایمئیل_کاریار' ],
	'ExpandTemplates'           => [ 'گأپ_کئلوٙنکاری_چوٙأ_یا' ],
	'Export'                    => [ 'ڤە_دأر_دأئن' ],
	'Fewestrevisions'           => [ 'کأمتئری_ڤانئیأریا' ],
	'FileDuplicateSearch'       => [ 'پئی_جوٙری_دۊ_کوٙنە_جانیا' ],
	'Filepath'                  => [ 'مأسیر_جانیا' ],
	'Import'                    => [ 'ڤا_مین_آڤوردئن' ],
	'Invalidateemail'           => [ 'بی_ئتئڤار_کئردئن_ایمئیل' ],
	'JavaScriptTest'            => [ 'ئزماشت_نیسئسە_یا_جاڤا' ],
	'BlockList'                 => [ 'نئھاگئری_نومگە', 'نومگە_نئھاگئری', 'نومگە_نئھاگئری_آی_پی' ],
	'LinkSearch'                => [ 'پئی_جوٙری_ھوم_پئیڤأند' ],
	'Listadmins'                => [ 'نومگە_سأردیوڤوٙنیاریا' ],
	'Listbots'                  => [ 'نومگە_بوٙتیا' ],
	'Listfiles'                 => [ 'نومگە_جانیایا', 'نومگە_جانیا', 'نومگە_أسگ' ],
	'Listgrouprights'           => [ 'حقوق_کاریاری_جأرغە_یی', 'نومگە_حقوق_جأرغە_یی' ],
	'Listredirects'             => [ 'نومگە_ڤاگأردوٙنیا' ],
	'ListDuplicatedFiles'       => [ 'نومگە_جانیایا_دۊ_کوٙنە', 'نومگە_دۊ_کوٙنە_بییئن_جانیا' ],
	'Listusers'                 => [ 'نومگە_کاریاریا', 'نومگە_کاریاری' ],
	'Lockdb'                    => [ 'قولف_کئردئن_رئسینە_جا' ],
	'Log'                       => [ 'پئھرستنوٙمە', 'پئھرستنوٙمە_یا' ],
	'Lonelypages'               => [ 'بألگە_یا_تأکی', 'بألگە_یا_بی_حامین' ],
	'Longpages'                 => [ 'بألگە_یا_فئرە_بئلئنگ' ],
	'MediaStatistics'           => [ 'آماریا_ڤارئسگأر' ],
	'MergeHistory'              => [ 'سأریأک_سازی_ڤیرگار' ],
	'MIMEsearch'                => [ 'پئی_جوٙری_ئم_آی_ئم_ئی' ],
	'Mostcategories'            => [ 'بیشتئر_دأسە_یا' ],
	'Mostimages'                => [ 'بیشتئر_جانیایا_ھوم_پئیڤأند_بیە', 'بیشتئر_جانیایا', 'بیشتئر_أسگیا' ],
	'Mostinterwikis'            => [ 'بیشتئر_مین_ڤیکی_یا' ],
	'Mostlinked'                => [ 'بیشتئر_بألگە_یا_ھوم_پئیڤأند_بیە', 'بیشتئر_ھوم_پئیڤأند_بیە_یا' ],
	'Mostlinkedcategories'      => [ 'بیشتئر_دأسە_یا_ھوم_پئیڤأند_بیە', 'بیشتئر_دأسە_یا_ڤە_کار_گئرتە_بیە' ],
	'Mostlinkedtemplates'       => [ 'بیشتئر_بألگە_فئرە_پور_بیە', 'بیشتئر_چوٙأ_یا_ھوم_پئیڤأند_بیە', 'بیشتئر_چوٙأ_یا_ڤە_کار_گئرئتە_بیە' ],
	'Mostrevisions'             => [ 'بیشتئر_ڤانئیأریا' ],
	'Movepage'                  => [ 'جا_ڤە_جا_کئردئن_بألگە' ],
	'Mycontributions'           => [ 'ھومیاریا_مە' ],
	'MyLanguage'                => [ 'زوٙن_مە' ],
	'Mypage'                    => [ 'بألگە_مە' ],
	'Mytalk'                    => [ 'چأک_چئنە_مە' ],
	'Myuploads'                 => [ 'سوڤارکئردیا_مە', 'جانیایا_مە' ],
	'Newimages'                 => [ 'جانیایا_تازە', 'أسگیا_تازە' ],
	'Newpages'                  => [ 'بألگە_یا_تازە' ],
	'PagesWithProp'             => [ 'بألگە_یا_حامیندار' ],
	'PageLanguage'              => [ 'بألگە_زوٙن' ],
	'PasswordReset'             => [ 'د_نۊ_زئنە_کئردئن_رازینە_گوڤاردئن' ],
	'PermanentLink'             => [ 'ھوم_پئیڤأند_دایئمی' ],
	'Preferences'               => [ 'میزوٙنکاریا' ],
	'Prefixindex'               => [ 'دئماڤأن_سیاأ' ],
	'Protectedpages'            => [ 'بألگە_یا_پور_و_پیم_بیە' ],
	'Protectedtitles'           => [ 'داسوٙنا_پور_و_پیم_بیە' ],
	'Randompage'                => [ 'شامسأکی', 'بألگە_یا_شامسأکی' ],
	'RandomInCategory'          => [ 'دأسە_شامسأکی' ],
	'Randomredirect'            => [ 'ڤاگأردوٙنی_شامسأکی' ],
	'Recentchanges'             => [ 'آلئشتیا_ئیسئنی' ],
	'Recentchangeslinked'       => [ 'آلئشتیا_ھوم_پئیڤأند_بیە_ئیسئنی', 'آلئشتیا_مورتأڤئط' ],
	'Redirect'                  => [ 'ڤاگأردۊنی' ],
	'ResetTokens'               => [ 'د_نۊ_زئنە_کئردئن_شئناسیاریا' ],
	'Revisiondelete'            => [ 'ڤانئیأری_پاکسا_کئردئن' ],
	'RunJobs'                   => [ 'أنجوم_دأئن_کاریا' ],
	'Search'                    => [ 'پئی_جوٙری' ],
	'Shortpages'                => [ 'بألگە_یا_کوچئک' ],
	'Specialpages'              => [ 'بألگە_یا_ڤیجھە' ],
	'Statistics'                => [ 'آماریا' ],
	'Tags'                      => [ 'سأردیسیا' ],
	'TrackingCategories'        => [ 'دئماگئری_دأسە_یا' ],
	'Unblock'                   => [ 'ڤا_کئردئن_قولف' ],
	'Uncategorizedcategories'   => [ 'دأسە_یا_دأسە_بأنی_نأبیە' ],
	'Uncategorizedimages'       => [ 'جانیا_دأسە_بأنی_نأبیە', 'أسگیا_دأسە_بأنی_نأبیە' ],
	'Uncategorizedpages'        => [ 'بألگە_یا_دأسە_بأنی_نأبیە' ],
	'Uncategorizedtemplates'    => [ 'چوٙأ_یا_دأسە_بأنی_نأبیە' ],
	'Undelete'                  => [ 'پاکسا_نأکثردئن' ],
	'Unlockdb'                  => [ 'ڤا_کئردئن_قولف_رئسینە_جا' ],
	'Unusedcategories'          => [ 'دأسە_یا_ڤە_کار_گئرئتە_نأبیە' ],
	'Unusedimages'              => [ 'جانیایا_ڤە_کار_گئرئتە_نأبیە', 'أسگیا_ڤە_کار_گئرئتە_نأبیە' ],
	'Unusedtemplates'           => [ 'چوٙأ_یا_ڤە_کار_گئرئتە_نأبیە' ],
	'Unwatchedpages'            => [ 'بألگە_یا_سئیل_نأکئردە' ],
	'Upload'                    => [ 'سوڤارکئرد' ],
	'UploadStash'               => [ 'ئمایە_جا_سوڤارکئرد' ],
	'Userlogin'                 => [ 'ڤامین_ئومائن_کاریار', 'ڤامین_ئومائن' ],
	'Userlogout'                => [ 'ڤە_دأر_ئومائن_کاریار', 'ڤە_دأر_ئومائن' ],
	'Userrights'                => [ 'حقوق_کاریار', 'سأردیڤوٙنکار_بییئن', 'بوٙت_بییئن' ],
	'Version'                   => [ 'نوسقە' ],
	'Wantedcategories'          => [ 'دأسە_یا_حاستئنی' ],
	'Wantedfiles'               => [ 'جانیایا_حاستئنی' ],
	'Wantedpages'               => [ 'بألگە_یا_حاستئنی', 'ھوم_پئیڤأندیا_د_بئین_رأتە' ],
	'Wantedtemplates'           => [ 'چوأ_یا_حاستئنی' ],
	'Watchlist'                 => [ 'سئیل_بأرگ' ],
	'Whatlinkshere'             => [ 'چە_ھوم_پئیڤأندیایی_ھان_ئیچە' ],
	'Withoutinterwiki'          => [ 'بی_مین_ڤیکی' ],
];
