<?php
/** Egyptian Spoken Arabic (مصرى)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 */

$fallback = 'ar';

$rtl = true;

$namespaceNames = [
	NS_MEDIA            => 'ميديا',
	NS_SPECIAL          => 'خاص',
	NS_TALK             => 'نقاش',
	NS_USER             => 'مستخدم',
	NS_USER_TALK        => 'نقاش_المستخدم',
	NS_PROJECT_TALK     => 'نقاش_$1',
	NS_FILE             => 'ملف',
	NS_FILE_TALK        => 'نقاش_الملف',
	NS_MEDIAWIKI        => 'ميدياويكى',
	NS_MEDIAWIKI_TALK   => 'نقاش_ميدياويكى',
	NS_TEMPLATE         => 'قالب',
	NS_TEMPLATE_TALK    => 'نقاش_القالب',
	NS_HELP             => 'مساعدة',
	NS_HELP_TALK        => 'نقاش_المساعدة',
	NS_CATEGORY         => 'تصنيف',
	NS_CATEGORY_TALK    => 'نقاش_التصنيف',
];

$namespaceAliases = [
	'وسائط' => NS_MEDIA,
	'صورة' => NS_FILE,
	'نقاش_الصورة' => NS_FILE_TALK,
];

$specialPageAliases = [
	'Activeusers'               => [ 'يوزرات_نشطا' ],
	'Allmessages'               => [ 'كل_الرسايل' ],
	'AllMyUploads'              => [ 'كل_مرفوعاتى', 'كل_فايلاتى' ],
	'Allpages'                  => [ 'كل_الصفح' ],
	'ApiHelp'                   => [ 'مساعده_Api' ],
	'ApiSandbox'                => [ 'ملعب_Api' ],
	'Ancientpages'              => [ 'صفح_قديمه' ],
	'Badtitle'                  => [ 'عنوان_وحش' ],
	'Blankpage'                 => [ 'صفحه_فارضيه' ],
	'Block'                     => [ 'بلوك', 'بلوك_IP', 'بلوك_يوزر' ],
	'Booksources'               => [ 'مصادر_كتاب' ],
	'BotPasswords'              => [ 'باسووردات_البوت' ],
	'BrokenRedirects'           => [ 'تحويلات_مكسوره' ],
	'Categories'                => [ 'تصانيف' ],
	'ChangeContentModel'        => [ 'تغيير_موديل_المحتوى' ],
	'ChangeCredentials'         => [ 'تغيير_الكريدينشيال' ],
	'ChangeEmail'               => [ 'تغيير_الميل' ],
	'ChangePassword'            => [ 'تغيير_الپاسوورد', 'ظبط_الپاسوورد' ],
	'ComparePages'              => [ 'مقارنه_الصفحات' ],
	'Confirmemail'              => [ 'تأكيد_الايميل' ],
	'Contributions'             => [ 'مساهمات' ],
	'CreateAccount'             => [ 'ابتدى_حساب' ],
	'Deadendpages'              => [ 'صفح_نهايه_مسدوده' ],
	'DeletedContributions'      => [ 'مساهمات_ممسوحه' ],
	'Diff'                      => [ 'فرق' ],
	'DoubleRedirects'           => [ 'تحويلات_دوبل' ],
	'EditTags'                  => [ 'تغيير_التاجز' ],
	'EditWatchlist'             => [ 'تغيير_قايمه_المراقبه' ],
	'Emailuser'                 => [ 'ابعت_ايميل_لليوزر' ],
	'ExpandTemplates'           => [ 'فرد-القوالب' ],
	'Export'                    => [ 'تصدير' ],
	'Fewestrevisions'           => [ 'اقل_مراجعات' ],
	'FileDuplicateSearch'       => [ 'تدوير_فايل_متكرر' ],
	'Filepath'                  => [ 'مسار_ملف' ],
	'Import'                    => [ 'استوراد' ],
	'Invalidateemail'           => [ 'تعطيل_الايميل' ],
	'JavaScriptTest'            => [ 'تجربه_جافا_سكريبت' ],
	'BlockList'                 => [ 'ليستة_البلوك', 'بيّن_البلوك', 'ليستة_بلوك_IP' ],
	'LinkSearch'                => [ 'تدوير_اللينكات' ],
	'LinkAccounts'              => [ 'توصيل_الحسابات' ],
	'Listadmins'                => [ 'عرض_الاداريين' ],
	'Listbots'                  => [ 'عرض_البوتات' ],
	'Listfiles'                 => [ 'عرض_الفايلات', 'ليستة_الفايلات', 'ليستة_الصور' ],
	'Listgrouprights'           => [ 'عرض_حقوق_الجروپات' ],
	'Listgrants'                => [ 'عرض_المنح' ],
	'Listredirects'             => [ 'عرض_التحويلات' ],
	'ListDuplicatedFiles'       => [ 'عرض_الفايلات_المتكرره' ],
	'Listusers'                 => [ 'عرض_اليوزرات', 'ليستة_اليوزرات' ],
	'Lockdb'                    => [ 'قفل_قب' ],
	'Log'                       => [ 'سجل', 'سجلات' ],
	'Lonelypages'               => [ 'صفح_وحدانيه', 'صفح_يتيمه' ],
	'Longpages'                 => [ 'صفح_طويله' ],
	'MediaStatistics'           => [ 'احصائيات_الميديا' ],
	'MergeHistory'              => [ 'دمج_التاريخ' ],
	'MIMEsearch'                => [ 'تدوير_MIME' ],
	'Mostcategories'            => [ 'اكتر_تصانيف' ],
	'Mostimages'                => [ 'اكتر_فايلات_معمول_ليها_لينك', 'اكتر_فايلات', 'اكتر_صور' ],
	'Mostinterwikis'            => [ 'اكتر_إنترويكى' ],
	'Mostlinked'                => [ 'اكتر_صفح_معمول_ليها_لينك' ],
	'Mostlinkedcategories'      => [ 'اكتر_تصانيف_معمول_ليها_لينك', 'اكتر_تصانيف_مستعمله' ],
	'Mostlinkedtemplates'       => [ 'اكتر_قوالب_معمول_ليها_لينك', 'اكتر_قوالب_مستعمله' ],
	'Mostrevisions'             => [ 'اكتر_مراجعات' ],
	'Movepage'                  => [ 'نقل_صفحه' ],
	'Mycontributions'           => [ 'مساهماتى' ],
	'MyLanguage'                => [ 'اللغة_بتاعتى' ],
	'Mypage'                    => [ 'صفحتى' ],
	'Mytalk'                    => [ 'مناقشتى' ],
	'Myuploads'                 => [ 'مرفوعاتى', 'فايلاتى' ],
	'Newimages'                 => [ 'فايلات_جديده', 'صور_جديده' ],
	'Newpages'                  => [ 'صفح_جديده' ],
	'PagesWithProp'             => [ 'صفحات_بخاصيه' ],
	'PageLanguage'              => [ 'لغه_الصفحه' ],
	'PasswordReset'             => [ 'ضبط_الباسوورد' ],
	'PermanentLink'             => [ 'وصله_دايمه' ],
	'Preferences'               => [ 'تفضيلات' ],
	'Prefixindex'               => [ 'فهرس_بدايه' ],
	'Protectedpages'            => [ 'صفح_محميه' ],
	'Protectedtitles'           => [ 'عناوين_محميه' ],
	'Randompage'                => [ 'عشوائى', 'صفحه_عشوائيه' ],
	'RandomInCategory'          => [ 'عشوائى_جوه_تصنيف' ],
	'Randomredirect'            => [ 'تحويله_عشوائيه' ],
	'Randomrootpage'            => [ 'صفحه_جدر_عشوائيه' ],
	'Recentchanges'             => [ 'اخر_تعديلات' ],
	'Recentchangeslinked'       => [ 'اجدد_التغييرات_اللى_معمول_ليها_لينك', 'تغييرات_مرتبطه' ],
	'Redirect'                  => [ 'تحويل' ],
	'RemoveCredentials'         => [ 'مسح_الكريدينشيال' ],
	'ResetTokens'               => [ 'ضبط_المفاتيح' ],
	'Revisiondelete'            => [ 'مسح_نسخه' ],
	'RunJobs'                   => [ 'تشغيل_الوظايف' ],
	'Search'                    => [ 'تدوير' ],
	'Shortpages'                => [ 'صفح_قصيره' ],
	'Specialpages'              => [ 'صفح_مخصوصه' ],
	'Statistics'                => [ 'احصائيات' ],
	'Tags'                      => [ 'وسوم' ],
	'TrackingCategories'        => [ 'تصنيفات_التتبع' ],
	'Unblock'                   => [ 'رفع_منع' ],
	'Uncategorizedcategories'   => [ 'تصانيف_مش_متصنفه' ],
	'Uncategorizedimages'       => [ 'فايلات_مش_متصنفه', 'صور_مش_متصنفه' ],
	'Uncategorizedpages'        => [ 'صفح_مش_متصنفه' ],
	'Uncategorizedtemplates'    => [ 'قوالب_مش_متصنفه' ],
	'Undelete'                  => [ 'استرجاع' ],
	'UnlinkAccounts'            => [ 'فك_الحسابات' ],
	'Unlockdb'                  => [ 'فتح_قب' ],
	'Unusedcategories'          => [ 'تصانيف_مش_مستعمله' ],
	'Unusedimages'              => [ 'فايلات_مش_مستعمله', 'صور_مش_مستعمله' ],
	'Unusedtemplates'           => [ 'قوالب_مش_مستعمله' ],
	'Unwatchedpages'            => [ 'صفح_مش_متراقبه' ],
	'Upload'                    => [ 'رفع' ],
	'UploadStash'               => [ 'رفع_مخفى' ],
	'Userlogin'                 => [ 'دخول_اليوزر' ],
	'Userlogout'                => [ 'خروج_اليوزر' ],
	'Userrights'                => [ 'حقوق_اليوزر', 'ترقية_سيسوپ', 'ترقية_بوت' ],
	'Version'                   => [ 'نسخه' ],
	'Wantedcategories'          => [ 'تصانيف_مطلوبه' ],
	'Wantedfiles'               => [ 'فايلات_مطلوبه' ],
	'Wantedpages'               => [ 'صفح_مطلوبه', 'لينكات_مكسوره' ],
	'Wantedtemplates'           => [ 'قوالب_مطلوبه' ],
	'Watchlist'                 => [ 'ليستة_المراقبه' ],
	'Whatlinkshere'             => [ 'ايه_بيوصل_هنا' ],
	'Withoutinterwiki'          => [ 'من-غير_interwiki' ],
];

$magicWords = [
	'redirect'                  => [ '0', '#تحويل', '#REDIRECT' ],
	'notoc'                     => [ '0', '__من_غير_فهرس__', '__لافهرس__', '__NOTOC__' ],
	'nogallery'                 => [ '0', '__من_غير_معرض__', '__لامعرض__', '__NOGALLERY__' ],
	'forcetoc'                  => [ '0', '__لصق_فهرس__', '__FORCETOC__' ],
	'toc'                       => [ '0', '__فهرس__', '__TOC__' ],
	'noeditsection'             => [ '0', '__من_غير_تحريرقسم__', '__لاتحريرقسم__', '__NOEDITSECTION__' ],
	'currentmonth'              => [ '1', 'شهر_حالى', 'شهر_حالي2', 'شهر_حالي', 'CURRENTMONTH', 'CURRENTMONTH2' ],
	'currentmonth1'             => [ '1', 'شهر_حالي1', 'CURRENTMONTH1' ],
	'currentmonthname'          => [ '1', 'اسم_الشهر_الحالى', 'اسم_الشهر_الحالي', 'CURRENTMONTHNAME' ],
	'currentmonthnamegen'       => [ '1', 'اسم_الشهر_الحالى_المولد', 'اسم_الشهر_الحالي_المولد', 'CURRENTMONTHNAMEGEN' ],
	'currentmonthabbrev'        => [ '1', 'اختصار_الشهر_الحالى', 'اختصار_الشهر_الحالي', 'CURRENTMONTHABBREV' ],
	'currentday'                => [ '1', 'يوم_حالى', 'يوم_حالي', 'CURRENTDAY' ],
	'currentday2'               => [ '1', 'يوم_حالى2', 'يوم_حالي2', 'CURRENTDAY2' ],
	'currentdayname'            => [ '1', 'اسم_اليوم_الحالى', 'اسم_اليوم_الحالي', 'CURRENTDAYNAME' ],
	'currentyear'               => [ '1', 'عام_حالى', 'عام_حالي', 'CURRENTYEAR' ],
	'currenttime'               => [ '1', 'وقت_حالى', 'وقت_حالي', 'CURRENTTIME' ],
	'currenthour'               => [ '1', 'ساعه_حاليه', 'ساعة_حالية', 'CURRENTHOUR' ],
	'localmonth'                => [ '1', 'شهر_محلى', 'شهر_محلي2', 'شهر_محلي', 'LOCALMONTH', 'LOCALMONTH2' ],
	'localmonth1'               => [ '1', 'شهر_محلى1', 'شهر_محلي1', 'LOCALMONTH1' ],
	'localmonthname'            => [ '1', 'اسم_الشهر_المحلى', 'اسم_شهر_محلى', 'اسم_الشهر_المحلي', 'اسم_شهر_محلي', 'LOCALMONTHNAME' ],
	'localmonthnamegen'         => [ '1', 'اسم_الشهر_المحلى_المولد', 'اسم_شهر_محلى_مولد', 'اسم_الشهر_المحلي_المولد', 'اسم_شهر_محلي_مولد', 'LOCALMONTHNAMEGEN' ],
	'localmonthabbrev'          => [ '1', 'اختصار_الشهر_المحلى', 'اختصار_شهر_محلى', 'اختصار_الشهر_المحلي', 'اختصار_شهر_محلي', 'LOCALMONTHABBREV' ],
	'localday'                  => [ '1', 'يوم_محلى', 'يوم_محلي', 'LOCALDAY' ],
	'localday2'                 => [ '1', 'يوم_محلى2', 'يوم_محلي2', 'LOCALDAY2' ],
	'localdayname'              => [ '1', 'اسم_اليوم_المحلى', 'اسم_يوم_محلى', 'اسم_اليوم_المحلي', 'اسم_يوم_محلي', 'LOCALDAYNAME' ],
	'localyear'                 => [ '1', 'عام_محلى', 'عام_محلي', 'LOCALYEAR' ],
	'localtime'                 => [ '1', 'وقت_محلى', 'وقت_محلي', 'LOCALTIME' ],
	'localhour'                 => [ '1', 'ساعه_محليه', 'ساعة_محلية', 'LOCALHOUR' ],
	'numberofpages'             => [ '1', 'عدد_الصفحات', 'NUMBEROFPAGES' ],
	'numberofarticles'          => [ '1', 'عدد_المقالات', 'NUMBEROFARTICLES' ],
	'numberoffiles'             => [ '1', 'عدد_الملفات', 'NUMBEROFFILES' ],
	'numberofusers'             => [ '1', 'عدد_اليوزرات', 'عدد_المستخدمين', 'NUMBEROFUSERS' ],
	'numberofactiveusers'       => [ '1', 'عدد_اليوزرات_النشطين', 'عدد_المستخدمين_النشطين', 'NUMBEROFACTIVEUSERS' ],
	'numberofedits'             => [ '1', 'عدد_التعديلات', 'NUMBEROFEDITS' ],
	'pagename'                  => [ '1', 'اسم_الصفحه', 'اسم_الصفحة', 'PAGENAME' ],
	'pagenamee'                 => [ '1', 'عنوان_الصفحه', 'عنوان_الصفحة', 'PAGENAMEE' ],
	'namespace'                 => [ '1', 'نطاق', 'NAMESPACE' ],
	'namespacee'                => [ '1', 'عنوان_نطاق', 'NAMESPACEE' ],
	'namespacenumber'           => [ '1', 'عدد_نطاق', 'NAMESPACENUMBER' ],
	'talkspace'                 => [ '1', 'نطاق_المناقشه', 'نطاق_النقاش', 'TALKSPACE' ],
	'talkspacee'                => [ '1', 'عنوان_المناقشه', 'عنوان_النقاش', 'TALKSPACEE' ],
	'subjectspace'              => [ '1', 'نطاق_الموضوع', 'نطاق_المقاله', 'نطاق_المقالة', 'SUBJECTSPACE', 'ARTICLESPACE' ],
	'subjectspacee'             => [ '1', 'عنوان_نطاق_الموضوع', 'عنوان_نطاق_المقاله', 'عنوان_نطاق_المقالة', 'SUBJECTSPACEE', 'ARTICLESPACEE' ],
	'fullpagename'              => [ '1', 'اسم_الصفحة_الكامل', 'اسم_صفحة_كامل', 'اسم_كامل', 'FULLPAGENAME' ],
	'fullpagenamee'             => [ '1', 'عنوان_الصفحه_الكامل', 'عنوان_صفحة_كامل', 'عنوان_كامل', 'عنوان_الصفحة_الكامل', 'FULLPAGENAMEE' ],
	'subpagename'               => [ '1', 'اسم_الصفحه_الفرعي', 'اسم_الصفحة_الفرعي', 'SUBPAGENAME' ],
	'subpagenamee'              => [ '1', 'عنوان_الصفحه_الفرعى', 'عنوان_الصفحه_الفرعي', 'عنوان_الصفحة_الفرعي', 'SUBPAGENAMEE' ],
	'rootpagename'              => [ '1', 'جدر_اسم_الصفحه', 'جذر_اسم_الصفحة', 'ROOTPAGENAME' ],
	'rootpagenamee'             => [ '1', 'عنوان_جدر_الصفحه', 'ROOTPAGENAMEE' ],
	'basepagename'              => [ '1', 'اسم_الصفحه_الأساسى', 'اسم_الصفحة_الأساسي', 'BASEPAGENAME' ],
	'basepagenamee'             => [ '1', 'عنوان_الصفحه_الأساسى', 'عنوان_الصفحة_الأساسي', 'BASEPAGENAMEE' ],
	'talkpagename'              => [ '1', 'اسم_صفحه_المناقشه', 'اسم_صفحة_النقاش', 'TALKPAGENAME' ],
	'talkpagenamee'             => [ '1', 'عنوان_صفحه_المناقشه', 'عنوان_صفحة_النقاش', 'TALKPAGENAMEE' ],
	'subjectpagename'           => [ '1', 'اسم_صفحه_الموضوع', 'اسم_صفحه_المقاله', 'اسم_صفحة_الموضوع', 'اسم_صفحة_المقالة', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ],
	'subjectpagenamee'          => [ '1', 'عنوان_صفحه_الموضوع', 'عنوان_صفحه_المقاله', 'عنوان_صفحة_الموضوع', 'عنوان_صفحة_المقالة', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ],
	'msg'                       => [ '0', 'رساله:', 'رسالة:', 'MSG:' ],
	'subst'                     => [ '0', 'نسخ:', 'إحلال:', 'SUBST:' ],
	'safesubst'                 => [ '0', 'نسخ_آمن:', 'SAFESUBST:' ],
	'msgnw'                     => [ '0', 'رسالة_من_غير_تهيئه:', 'رسالة_بدون_تهيئة:', 'MSGNW:' ],
	'img_thumbnail'             => [ '1', 'تصغير', 'مصغر', 'thumb', 'thumbnail' ],
	'img_manualthumb'           => [ '1', 'تصغير=$1', 'مصغر=$1', 'thumbnail=$1', 'thumb=$1' ],
	'img_right'                 => [ '1', 'يمين', 'right' ],
	'img_left'                  => [ '1', 'يسار', 'left' ],
	'img_none'                  => [ '1', 'بدون', 'بلا', 'none' ],
	'img_width'                 => [ '1', '$1بك', '$1عن', '$1px' ],
	'img_center'                => [ '1', 'مركز', 'center', 'centre' ],
	'img_framed'                => [ '1', 'إطار', 'بإطار', 'frame', 'framed', 'enframed' ],
	'img_frameless'             => [ '1', 'لاإطار', 'من_غير_اطار', 'frameless' ],
	'img_lang'                  => [ '1', 'لغه=$1', 'لغة=$1', 'lang=$1' ],
	'img_page'                  => [ '1', 'صفح=$1', 'صفحه_$1', 'صفحة=$1', 'صفحة_$1', 'page=$1', 'page $1' ],
	'img_upright'               => [ '1', 'معدول', 'معدول=$1', 'معدول_$1', 'upright', 'upright=$1', 'upright $1' ],
	'img_border'                => [ '1', 'حد', 'حدود', 'border' ],
	'img_baseline'              => [ '1', 'خط_اساسى', 'خط_أساسي', 'baseline' ],
	'img_sub'                   => [ '1', 'فرعى', 'فرعي', 'sub' ],
	'img_super'                 => [ '1', 'سوبر', 'سب', 'super', 'sup' ],
	'img_top'                   => [ '1', 'أعلى', 'top' ],
	'img_text_top'              => [ '1', 'نص_أعلى', 'text-top' ],
	'img_middle'                => [ '1', 'وسط', 'middle' ],
	'img_bottom'                => [ '1', 'أسفل', 'bottom' ],
	'img_text_bottom'           => [ '1', 'نص_أسفل', 'text-bottom' ],
	'img_link'                  => [ '1', 'وصلة=$1', 'رابط=$1', 'link=$1' ],
	'img_alt'                   => [ '1', 'بديل=$1', 'alt=$1' ],
	'img_class'                 => [ '1', 'رتبه=$1', 'رتبة=$1', 'class=$1' ],
	'int'                       => [ '0', 'محتوى:', 'INT:' ],
	'sitename'                  => [ '1', 'اسم_الموقع', 'اسم_موقع', 'SITENAME' ],
	'ns'                        => [ '0', 'نط:', 'NS:' ],
	'nse'                       => [ '0', 'نطم:', 'NSE:' ],
	'localurl'                  => [ '0', 'مسار_محلى:', 'مسار_محلي:', 'LOCALURL:' ],
	'localurle'                 => [ '0', 'عنوان_المسار_المحلى:', 'عنوان_المسار_المحلي:', 'LOCALURLE:' ],
	'articlepath'               => [ '0', 'مسار_المقاله', 'مسار_المقالة', 'ARTICLEPATH' ],
	'pageid'                    => [ '0', 'رقم_صفحه', 'رقم_صفحة', 'PAGEID' ],
	'server'                    => [ '0', 'خادم', 'SERVER' ],
	'servername'                => [ '0', 'اسم_الخادم', 'SERVERNAME' ],
	'scriptpath'                => [ '0', 'مسار_السكريبت', 'مسار_سكريبت', 'SCRIPTPATH' ],
	'stylepath'                 => [ '0', 'مسار_الهيئة', 'STYLEPATH' ],
	'grammar'                   => [ '0', 'قواعد_اللغة:', 'GRAMMAR:' ],
	'gender'                    => [ '0', 'نوع:', 'GENDER:' ],
	'notitleconvert'            => [ '0', '__من_غيرتحويل_عنوان__', '__لاتع__', '__لاتحويل_عنوان__', '__NOTITLECONVERT__', '__NOTC__' ],
	'nocontentconvert'          => [ '0', '__من_غير_تحويل_محتوى__', '__لاتم__', '__لاتحويل_محتوى__', '__NOCONTENTCONVERT__', '__NOCC__' ],
	'currentweek'               => [ '1', 'أسبوع_حالى', 'أسبوع_حالي', 'CURRENTWEEK' ],
	'currentdow'                => [ '1', 'يوم_حالى_مأ', 'يوم_حالي_مأ', 'CURRENTDOW' ],
	'localweek'                 => [ '1', 'أسبوع_محلى', 'أسبوع_محلي', 'LOCALWEEK' ],
	'localdow'                  => [ '1', 'يوم_محلى_مأ', 'يوم_محلي_مأ', 'LOCALDOW' ],
	'revisionid'                => [ '1', 'رقم_المراجعه', 'رقم_المراجعة', 'REVISIONID' ],
	'revisionday'               => [ '1', 'يوم_المراجعه', 'يوم_المراجعة', 'REVISIONDAY' ],
	'revisionday2'              => [ '1', 'يوم_المراجعه2', 'يوم_المراجعة2', 'REVISIONDAY2' ],
	'revisionmonth'             => [ '1', 'شهر_المراجعه', 'شهر_المراجعة', 'REVISIONMONTH' ],
	'revisionmonth1'            => [ '1', 'شهر_المراجعه1', 'شهر_المراجعة1', 'REVISIONMONTH1' ],
	'revisionyear'              => [ '1', 'عام_المراجعه', 'عام_المراجعة', 'REVISIONYEAR' ],
	'revisiontimestamp'         => [ '1', 'طابع_وقت_المراجعه', 'طابع_وقت_المراجعة', 'REVISIONTIMESTAMP' ],
	'revisionuser'              => [ '1', 'مستخدم_المراجعه', 'مستخدم_المراجعة', 'REVISIONUSER' ],
	'revisionsize'              => [ '1', 'حجم_المراجعه', 'حجم_المراجعة', 'REVISIONSIZE' ],
	'plural'                    => [ '0', 'جمع:', 'PLURAL:' ],
	'fullurl'                   => [ '0', 'عنوان_كامل:', 'FULLURL:' ],
	'fullurle'                  => [ '0', 'مسار_كامل:', 'FULLURLE:' ],
	'canonicalurl'              => [ '0', 'عنوان_قاعده:', 'عنوان_قاعدة:', 'CANONICALURL:' ],
	'canonicalurle'             => [ '0', 'مسار_قاعده:', 'مسار_قاعدة:', 'CANONICALURLE:' ],
	'lcfirst'                   => [ '0', 'عنوان_كبير:', 'LCFIRST:' ],
	'ucfirst'                   => [ '0', 'عنوان_صغير:', 'UCFIRST:' ],
	'lc'                        => [ '0', 'صغير:', 'LC:' ],
	'uc'                        => [ '0', 'كبير:', 'UC:' ],
	'raw'                       => [ '0', 'خام:', 'RAW:' ],
	'displaytitle'              => [ '1', 'عرض_العنوان', 'DISPLAYTITLE' ],
	'rawsuffix'                 => [ '1', 'أر', 'آر', 'R' ],
	'nocommafysuffix'           => [ '0', 'من-غير_سيب', 'NOSEP' ],
	'newsectionlink'            => [ '1', '__وصلة_قسم_جديد__', '__NEWSECTIONLINK__' ],
	'nonewsectionlink'          => [ '1', '__من_غير_وصلة_قسم_جديد__', 'من_غير_وصلة_قسم_جديد__', 'لا_وصلة_قسم_جديد__', '__NONEWSECTIONLINK__' ],
	'currentversion'            => [ '1', 'نسخه_حاليه', 'نسخة_حالية', 'CURRENTVERSION' ],
	'urlencode'                 => [ '0', 'كود_المسار:', 'URLENCODE:' ],
	'anchorencode'              => [ '0', 'كود_الأنكور', 'ANCHORENCODE' ],
	'currenttimestamp'          => [ '1', 'طابع_الوقت_الحالي', 'CURRENTTIMESTAMP' ],
	'localtimestamp'            => [ '1', 'طابع_الوقت_المحلى', 'طابع_الوقت_المحلي', 'LOCALTIMESTAMP' ],
	'directionmark'             => [ '1', 'علامة_الاتجاه', 'علامة_اتجاه', 'DIRECTIONMARK', 'DIRMARK' ],
	'language'                  => [ '0', '#لغة:', '#LANGUAGE:' ],
	'contentlanguage'           => [ '1', 'لغة_المحتوى', 'لغة_محتوى', 'CONTENTLANGUAGE', 'CONTENTLANG' ],
	'pagesinnamespace'          => [ '1', 'صفحات_فى_نطاق:', 'صفحات_فى_نط:', 'صفحات_في_نطاق:', 'صفحات_في_نط:', 'PAGESINNAMESPACE:', 'PAGESINNS:' ],
	'numberofadmins'            => [ '1', 'عدد_الإداريين', 'NUMBEROFADMINS' ],
	'formatnum'                 => [ '0', 'صيغة_رقم', 'FORMATNUM' ],
	'padleft'                   => [ '0', 'باد_يسار', 'PADLEFT' ],
	'padright'                  => [ '0', 'باد_يمين', 'PADRIGHT' ],
	'special'                   => [ '0', 'خاص', 'special' ],
	'speciale'                  => [ '0', 'عنوان_خاص', 'speciale' ],
	'defaultsort'               => [ '1', 'ترتيب_قياسى:', 'ترتيب_افتراضى:', 'مفتاح_ترتيب_قياسى:', 'مفتاح_ترتيب_افتراضى:', 'ترتيب_تصنيف_قياسى:', 'ترتيب_تصنيف_افتراضى:', 'ترتيب_قياسي:', 'ترتيب_افتراضي:', 'مفتاح_ترتيب_قياسي:', 'مفتاح_ترتيب_افتراضي:', 'ترتيب_تصنيف_قياسي:', 'ترتيب_تصنيف_افتراضي:', 'ترتيب_غيابي:', 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ],
	'filepath'                  => [ '0', 'مسار_الملف:', 'FILEPATH:' ],
	'tag'                       => [ '0', 'وسم', 'tag' ],
	'hiddencat'                 => [ '1', '__تصنيف_مخفي__', '__HIDDENCAT__' ],
	'pagesincategory'           => [ '1', 'صفحات_في_التصنيف', 'صفحات_في_تصنيف', 'PAGESINCATEGORY', 'PAGESINCAT' ],
	'pagesize'                  => [ '1', 'حجم_الصفحة', 'PAGESIZE' ],
	'index'                     => [ '1', '__فهرسة__', '__INDEX__' ],
	'noindex'                   => [ '1', '__لافهرسة__', '__NOINDEX__' ],
	'numberingroup'             => [ '1', 'عدد_فى_المجموعه', 'عدد_فى_مجموعه', 'عدد_في_المجموعه', 'عدد_في_مجموعة', 'عدد_في_المجموعة', 'NUMBERINGROUP', 'NUMINGROUP' ],
	'staticredirect'            => [ '1', '__تحويله_إستاتيكيه__', '__تحويله_ساكنه__', '__تحويلة_إستاتيكية__', '__تحويلة_ساكنة__', '__STATICREDIRECT__' ],
	'protectionlevel'           => [ '1', 'مستوى_الحمايه', 'مستوى_الحماية', 'PROTECTIONLEVEL' ],
	'cascadingsources'          => [ '1', 'مصادر_متضمنه', 'CASCADINGSOURCES' ],
	'formatdate'                => [ '0', 'تهيئه_التاريخ', 'تهيئه_تاريخ', 'تهيئة_التاريخ', 'تهيئة_تاريخ', 'formatdate', 'dateformat' ],
	'url_path'                  => [ '0', 'مسار', 'PATH' ],
	'url_wiki'                  => [ '0', 'ويكى', 'ويكي', 'WIKI' ],
	'url_query'                 => [ '0', 'استعلام', 'QUERY' ],
	'defaultsort_noerror'       => [ '0', 'من_غير_غلط', 'لاخطأ', 'noerror' ],
	'defaultsort_noreplace'     => [ '0', 'ماتستبدلش', 'لاتستبدل', 'noreplace' ],
	'displaytitle_noerror'      => [ '0', 'لا_غلطه', 'noerror' ],
	'displaytitle_noreplace'    => [ '0', 'لا_استبدال', 'noreplace' ],
	'pagesincategory_all'       => [ '0', 'كل', 'all' ],
	'pagesincategory_pages'     => [ '0', 'صفحات', 'pages' ],
	'pagesincategory_subcats'   => [ '0', 'تصنيفات_فرعيه', 'تصنيفات_فرعية', 'subcats' ],
	'pagesincategory_files'     => [ '0', 'فايلات', 'ملفات', 'files' ],
];

// (T18469) Override Eastern Arabic numberals, use Western
$digitTransformTable = [
	'0' => '0',
	'1' => '1',
	'2' => '2',
	'3' => '3',
	'4' => '4',
	'5' => '5',
	'6' => '6',
	'7' => '7',
	'8' => '8',
	'9' => '9',
	'.' => '.',
	',' => ',',
];
