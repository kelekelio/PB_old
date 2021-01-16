<?php
/** Western Balochi (روچ کپتین بلوچی)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Ibrahim khashrowdi
 * @author Mjbmr
 */

$fallback = 'fa';
$rtl = true;

$namespaceNames = [
	NS_MEDIA            => 'رسانگ',
	NS_SPECIAL          => 'ۆێک',
	NS_TALK             => 'گپ',
	NS_USER             => 'کارمرزۆک',
	NS_USER_TALK        => 'کارمرزۆک_ئی_گپ',
	NS_PROJECT_TALK     => '$1_ئی_گپ',
	NS_FILE             => 'ورق',
	NS_FILE_TALK        => 'ورق_ئی_گپ',
	NS_MEDIAWIKI        => 'میڈیاویکی',
	NS_MEDIAWIKI_TALK   => 'میڈیاویکی_ئی_گپ',
	NS_TEMPLATE         => 'تراشوان',
	NS_TEMPLATE_TALK    => 'تراشوان_ئی_گپ',
	NS_HELP             => 'کومک',
	NS_HELP_TALK        => 'کومک_ئی_گپ',
	NS_CATEGORY         => 'تهر',
	NS_CATEGORY_TALK    => 'تهر_ئی_گپ',
];

$namespaceAliases = [
	'میڈیا' => NS_MEDIA,
	'اکس' => NS_FILE,
	'اکس_ئی_گپ' => NS_FILE_TALK,
];

$specialPageAliases = [
	'Activeusers'               => [ 'پئالین_کارمرزوکان' ],
	'Allmessages'               => [ 'موچین_پیامان' ],
	'AllMyUploads'              => [ 'نی_موچین_ایرگیج_ئآن', 'نی_موچین_وّرک_ئآن' ],
	'Allpages'                  => [ 'موچین_تاکدیمان' ],
	'ApiHelp'                   => [ 'ای_پی_آی_کومک' ],
	'Ancientpages'              => [ 'کوهنگین_تاکدیمان' ],
	'Badtitle'                  => [ 'خرابین_ئینوان' ],
	'Blankpage'                 => [ 'خالین_دیم' ],
	'Block'                     => [ 'بستین', 'آی_پی_بستین', 'کارمرزوکی_بستین' ],
	'Booksources'               => [ 'کتاب_ئی_بُن' ],
	'BrokenRedirects'           => [ 'خرابین_تغیرمسیر' ],
	'Categories'                => [ 'تهرئان' ],
	'ChangeEmail'               => [ 'ایمیل_ئی_گردینتین' ],
	'ChangePassword'            => [ 'چیهرگال_ئی_پاک_کورتین', 'چیهرگال_ئی_ٹگل' ],
	'ComparePages'              => [ 'تاکدیمانی_موقایسه_کورتین' ],
	'Confirmemail'              => [ 'ایمیل_ئی_تائید_کورتین' ],
	'Contributions'             => [ 'شراکت_ئان' ],
	'CreateAccount'             => [ 'کارمرزوکین_هیساب_ئی_جۆڑ_کورتین' ],
	'Deadendpages'              => [ 'بن_بست_ئین_تاکدیمان' ],
	'DeletedContributions'      => [ 'پاک_بوته_ئین_شراکت_ئان' ],
	'Diff'                      => [ 'پرک' ],
	'DoubleRedirects'           => [ 'دوئین_تغیرمسیرئان' ],
	'EditWatchlist'             => [ 'پێ_گیری_ئی_لیستی_دستکاری_کورتین' ],
	'Emailuser'                 => [ 'په_کارمرزوکا_ایمیل_دیم_داتین' ],
	'ExpandTemplates'           => [ 'تراشوانی_پراخ_کورتین' ],
	'Export'                    => [ 'دیمی_ڈنا_بورتین' ],
	'Fewestrevisions'           => [ 'کمتیرین_نخسه' ],
	'FileDuplicateSearch'       => [ 'گشتین_په_تکرارین_وّرک_ئا' ],
	'Filepath'                  => [ 'وّرک_ئی_مسیر' ],
	'Import'                    => [ 'ورق_ئانی_ریتین' ],
	'Invalidateemail'           => [ 'ایمیلی_باتل_کورتین' ],
	'JavaScriptTest'            => [ 'جاوا_سکریپت_ئی_تست' ],
	'BlockList'                 => [ 'بسته_بوته_ئآنی_لیست', 'آی_پی_نشانی_بستینی_لیست' ],
	'LinkSearch'                => [ 'گشتین_په_لینکا' ],
	'Listadmins'                => [ 'مدیرئانی_لیست' ],
	'Listbots'                  => [ 'روباٹ_ئانی_لیست' ],
	'Listfiles'                 => [ 'پایل_ئانی_لیست', 'اکس_ئانی_لیست' ],
	'Listgrouprights'           => [ 'کارمرزوکین_گروپانی_اختیاران' ],
	'Listredirects'             => [ 'تغیرمسیرئانی_لیست' ],
	'ListDuplicatedFiles'       => [ 'تکرارین_پایلانی_لیست' ],
	'Listusers'                 => [ 'کارمرزوکانی_لیست' ],
	'Lockdb'                    => [ 'مالوماتین_بانکی_قُلپ_کورتین' ],
	'Log'                       => [ 'سیاهه_ئان' ],
	'Lonelypages'               => [ 'آتیمین_دیمان' ],
	'Longpages'                 => [ 'بُرزین_دیمان' ],
	'MediaStatistics'           => [ 'رسانگ_ئانی_سرجم' ],
	'MergeHistory'              => [ 'تاریخی_ادغام_کورتین' ],
	'MIMEsearch'                => [ 'MIME_ئی_گشتین' ],
	'Mostcategories'            => [ 'بازتیرین_تهر' ],
	'Mostimages'                => [ 'بازتیرین_اکس' ],
	'Mostinterwikis'            => [ 'بازتیرین_مانجین_ویکی' ],
	'Mostlinked'                => [ 'بازتیرین_لینک' ],
	'Mostlinkedcategories'      => [ 'تهر_گۆ_بازتیرین_لینکا' ],
	'Mostlinkedtemplates'       => [ 'تراشوان_گۆ_بازتیرین_لینکا' ],
	'Mostrevisions'             => [ 'بازتیرین_نخسه' ],
	'Movepage'                  => [ 'دیمی_لڈّّینتین' ],
	'Mycontributions'           => [ 'نی_شراکت_ئان' ],
	'MyLanguage'                => [ 'نی_زبان_ئان' ],
	'Mypage'                    => [ 'نی_ورق' ],
	'Mytalk'                    => [ 'نی_گپ' ],
	'Myuploads'                 => [ 'نی_بُرز_بوته_ئین_پایلان' ],
	'Newimages'                 => [ 'نۆکین_اکس' ],
	'Newpages'                  => [ 'نۆکین_وَرق_ئان' ],
	'PagesWithProp'             => [ 'وّرق_ئانی_خاسی_ئت_گۆ' ],
	'PageLanguage'              => [ 'وّرق_ئی_زبان' ],
	'PasswordReset'             => [ 'چیهرگالی_نادینتین' ],
	'PermanentLink'             => [ 'دایمین_لینک' ],
	'Preferences'               => [ 'تنزیمات' ],
	'Prefixindex'               => [ 'دیمۆندین_نمایگ' ],
	'Protectedpages'            => [ 'قُلپ_بوته_ئین_ورق_ئان' ],
	'Protectedtitles'           => [ 'قُلپ_بوته_ئین_ئینوان_ئان' ],
	'Randompage'                => [ 'تسادوپین_وّرق' ],
	'RandomInCategory'          => [ 'تسادوپی_بئ_تهری_تا' ],
	'Randomredirect'            => [ 'تسادوپین_تغیرمیسر' ],
	'Randomrootpage'            => [ 'تسادوپین_پایگ_ئی_وّرق' ],
	'Recentchanges'             => [ 'آخیرئین_تغیران' ],
	'Recentchangeslinked'       => [ 'مربوتین_تغیران' ],
	'Redirect'                  => [ 'تغیرمسیر' ],
	'ResetTokens'               => [ 'نشانگ_ئانی_پدا_نادینتین' ],
	'Revisiondelete'            => [ 'نخسه_ئی_پاک_کورتین' ],
	'RunJobs'                   => [ 'کارێ_کورتین' ],
	'Search'                    => [ 'گشتین' ],
	'Shortpages'                => [ 'گۆنڈین_تاکدیمان' ],
	'Specialpages'              => [ 'خاسین_تاکدیمان' ],
	'Statistics'                => [ 'سرجم' ],
	'Tags'                      => [ 'برچسپ_ئان', 'تگ_ئان' ],
	'TrackingCategories'        => [ 'ودی_کنۆکین_تهرئان' ],
	'Unblock'                   => [ 'پاچ_کورتین' ],
	'Uncategorizedcategories'   => [ 'دسته_بندی_نه_بوته_ئین_تهر_ئان' ],
	'Uncategorizedimages'       => [ 'دسته_بندی_نه_بوته_ئین_اکس_ئان' ],
	'Uncategorizedpages'        => [ 'دسته_بندی_نه_بوته_ئین_تاکدیمان' ],
	'Uncategorizedtemplates'    => [ 'دسته_بندی_نه_بوته_ئین_تراشوانان' ],
	'Undelete'                  => [ 'پاک_بوته_ئین_وّرق_ئی_بجا_آورتین' ],
	'Unlockdb'                  => [ 'مالوماتین_بانکی_قُلپی_پاچ_کورتین' ],
	'Unusedcategories'          => [ 'ایستیپاده_نه_بوته_ئین_تهر_ئان' ],
	'Unusedimages'              => [ 'ایستیپاده_نه_بوته_ئین_اکس_ئان' ],
	'Unusedtemplates'           => [ 'ایستیپاده_نه_بوه_ئین_تراشوانان' ],
	'Unwatchedpages'            => [ 'پدگیری_نه_بوته_ئین_وّرق_ئان' ],
	'Upload'                    => [ 'پایلی_ئی_بُرز_کورتین' ],
	'UploadStash'               => [ 'بَزین_بُرز_کورتین' ],
	'Userlogin'                 => [ 'داخل_بوتین_بئ_سایٹ_ئی_تا' ],
	'Userlogout'                => [ 'دَر_بوتین_شه_سایٹ_ئا' ],
	'Userrights'                => [ 'کارمرزوک_ئی_اختیار_ئان' ],
	'Version'                   => [ 'نخسه' ],
	'Wantedcategories'          => [ 'زَرورتین_تهر_ئان' ],
	'Wantedfiles'               => [ 'زَرورتین_اکس_ئان' ],
	'Wantedpages'               => [ 'زَرورتین_وّرق_ئان' ],
	'Wantedtemplates'           => [ 'زَرورتین_تراشوانان' ],
	'Watchlist'                 => [ 'پدگیر_ئی_لیست' ],
	'Whatlinkshere'             => [ 'لینک_په_ای_دیما' ],
	'Withoutinterwiki'          => [ 'بئ_شه_مانیجین_ویکی_ئا' ],
];

$linkTrail = "/^([اآأبپتثجچحخدڈذرڑزژسشصضطظعغفقکگلمنوۆؤھهئیێ‌]+)(.*)$/sDu";
