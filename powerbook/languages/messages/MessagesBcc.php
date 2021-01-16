<?php
/** Southern Balochi (جهلسری بلوچی)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 */

$fallback = 'fa';

$rtl = true;

$namespaceNames = [
	NS_MEDIA            => 'مدیا',
	NS_SPECIAL          => 'حاص',
	NS_TALK             => 'گپ',
	NS_USER             => 'کاربر',
	NS_USER_TALK        => 'گپ_کاربر',
	NS_PROJECT_TALK     => 'گپ_$1',
	NS_FILE             => 'عکس',
	NS_FILE_TALK        => 'گپ_عکس',
	NS_MEDIAWIKI        => 'مدیاویکی',
	NS_MEDIAWIKI_TALK   => 'گپ_مدیاویکی',
	NS_TEMPLATE         => 'تمپلت',
	NS_TEMPLATE_TALK    => 'گپ_تمپلت',
	NS_HELP             => 'کمک',
	NS_HELP_TALK        => 'گپ_راهنما',
	NS_CATEGORY         => 'دسته',
	NS_CATEGORY_TALK    => 'گپ_دسته',
];

$namespaceAliases = [
	'مدیا' => NS_MEDIA,
	'ویژه' => NS_SPECIAL,
	'بحث' => NS_TALK,
	'کاربر' => NS_USER,
	'بحث_کاربر' => NS_USER_TALK,
	'بحث_$1' => NS_PROJECT_TALK,
	'تصویر' => NS_FILE,
	'بحث_تصویر' => NS_FILE_TALK,
	'مدیاویکی' => NS_MEDIAWIKI,
	'بحث_مدیاویکی' => NS_MEDIAWIKI_TALK,
	'الگو' => NS_TEMPLATE,
	'بحث_الگو' => NS_TEMPLATE_TALK,
	'راهنما' => NS_HELP,
	'بحث_راهنما' => NS_HELP_TALK,
	'رده' => NS_CATEGORY,
	'بحث_رده' => NS_CATEGORY_TALK,
];

$specialPageAliases = [
	'Allmessages'               => [ 'کل کوله یان' ],
	'Allpages'                  => [ 'کل صفحات' ],
	'Ancientpages'              => [ 'صفحات قدیمی' ],
	'Blankpage'                 => [ 'صفحه هالیک' ],
	'Block'                     => [ 'محدود آی پی' ],
	'Booksources'               => [ 'منابع کتاب' ],
	'BrokenRedirects'           => [ 'پرشتگین غیرمستقیم' ],
	'Categories'                => [ 'دستجات' ],
	'ChangePassword'            => [ 'تریتگ رمز' ],
	'Confirmemail'              => [ 'تایید ایمیل' ],
	'Contributions'             => [ 'مشارکتان' ],
	'CreateAccount'             => [ 'شرکتن حساب' ],
	'Deadendpages'              => [ 'مرتگین صفحات' ],
	'DoubleRedirects'           => [ 'دوبل غیر مستقیم' ],
	'Emailuser'                 => [ 'ایمیل کاربر' ],
	'Export'                    => [ 'درگیزگ' ],
	'Fewestrevisions'           => [ 'کمترین بازبینی' ],
	'FileDuplicateSearch'       => [ 'گردگ کپی فایل' ],
	'Filepath'                  => [ 'مسیر فایل' ],
	'Import'                    => [ 'وارد' ],
	'Invalidateemail'           => [ 'نامعتبرین ایمیل' ],
	'BlockList'                 => [ 'لیست محدوددیت آی پی' ],
	'Listadmins'                => [ 'لیست مدیران' ],
	'Listbots'                  => [ 'لیست روباتان' ],
	'Listfiles'                 => [ 'لیست عکس' ],
	'Listgrouprights'           => [ 'لیست حقوق گروه' ],
	'Listredirects'             => [ 'لیست غیر مستقیمان' ],
	'Listusers'                 => [ 'لیست کاربر' ],
	'Lockdb'                    => [ 'کبلدب' ],
	'Log'                       => [ 'ورودان' ],
	'Lonelypages'               => [ 'صفحات یتیم' ],
	'Longpages'                 => [ 'مزنین صفحات' ],
	'MergeHistory'              => [ 'چندوبند تاریح' ],
	'MIMEsearch'                => [ 'گردگ میام' ],
	'Mostcategories'            => [ 'گیشترین دستجات' ],
	'Mostimages'                => [ 'گیشترین عکس' ],
	'Mostlinked'                => [ 'گیشتر لینک بوتت' ],
	'Mostlinkedcategories'      => [ 'دستجات گیشتر لینک بوتگین' ],
	'Mostlinkedtemplates'       => [ 'تمپلتان گیشتر لینک بوتگین' ],
	'Mostrevisions'             => [ 'گیشترین بازبینی' ],
	'Movepage'                  => [ 'جاه په جاهی صفحه' ],
	'Mycontributions'           => [ 'منی مشارکت' ],
	'Mypage'                    => [ 'منی صفحه' ],
	'Mytalk'                    => [ 'منی گپ' ],
	'Newimages'                 => [ 'نوکین عکسان' ],
	'Newpages'                  => [ 'نوکین صفحات' ],
	'Preferences'               => [ 'ترجیحات' ],
	'Prefixindex'               => [ 'ایندکس پیشوند' ],
	'Protectedpages'            => [ 'صفحات محافظتی' ],
	'Protectedtitles'           => [ 'عناوین محافظتی' ],
	'Randompage'                => [ 'صفحه تصادفی' ],
	'Randomredirect'            => [ 'غیرمستقیم تصادفی' ],
	'Recentchanges'             => [ 'نوکین تغییرات' ],
	'Recentchangeslinked'       => [ 'نوکین تغییرات لینک' ],
	'Revisiondelete'            => [ 'حذف بازبینی' ],
	'Search'                    => [ 'گردگ' ],
	'Shortpages'                => [ 'هوردین صفحات' ],
	'Specialpages'              => [ 'حاصین صفحات' ],
	'Statistics'                => [ 'آمار' ],
	'Uncategorizedcategories'   => [ 'دستجات بی دسته' ],
	'Uncategorizedimages'       => [ 'عکسان بی دسته' ],
	'Uncategorizedpages'        => [ 'صفحات بی دسته' ],
	'Uncategorizedtemplates'    => [ 'تمپلتان بی دسته' ],
	'Undelete'                  => [ 'حذف نکتن' ],
	'Unlockdb'                  => [ 'کلب نه کتن دب' ],
	'Unusedcategories'          => [ 'بی استفاده این دسته' ],
	'Unusedimages'              => [ 'بی استفاده این عکس' ],
	'Unusedtemplates'           => [ 'تمپلتان بی استفاده' ],
	'Unwatchedpages'            => [ 'نه چارتگین صفحه' ],
	'Upload'                    => [ 'آپلود' ],
	'Userlogin'                 => [ 'ورودکاربر' ],
	'Userlogout'                => [ 'دربیگ کاربر' ],
	'Userrights'                => [ 'حقوق کاربر' ],
	'Version'                   => [ 'نسخه' ],
	'Wantedcategories'          => [ 'لوٹتگین دسته' ],
	'Wantedpages'               => [ 'لوٹتگین صفحات' ],
	'Watchlist'                 => [ 'لیست چارگ' ],
	'Whatlinkshere'             => [ 'ای لینکی ادان هست' ],
	'Withoutinterwiki'          => [ 'بی بین ویکی' ],
];
