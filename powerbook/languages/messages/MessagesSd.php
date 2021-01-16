<?php
/** Sindhi (سنڌي)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Aursani
 */

$fallback8bitEncoding = 'windows-1256';
$rtl = true;

$namespaceNames = [
	NS_MEDIA            => 'ذريعات',
	NS_SPECIAL          => 'خاص',
	NS_TALK             => 'بحث',
	NS_USER             => 'يوزر',
	NS_USER_TALK        => 'يوزر_بحث',
	NS_PROJECT_TALK     => '$1_بحث',
	NS_FILE             => 'عڪس',
	NS_FILE_TALK        => 'عڪس_بحث',
	NS_MEDIAWIKI        => 'ذريعات_وڪي',
	NS_MEDIAWIKI_TALK   => 'ذريعات_وڪي_بحث',
	NS_TEMPLATE         => 'سانچو',
	NS_TEMPLATE_TALK    => 'سنچو_بحث',
	NS_HELP             => 'مدد',
	NS_HELP_TALK        => 'مدد_بحث',
	NS_CATEGORY         => 'زمرو',
	NS_CATEGORY_TALK    => 'زمرو_بحث',
];

$specialPageAliases = [
	'Allmessages'               => [ 'سڀ نياپا' ],
	'Allpages'                  => [ 'سڀ صفحا' ],
	'Ancientpages'              => [ 'قديم صفحا' ],
	'Block'                     => [ 'آءِ پي بندش' ],
	'BrokenRedirects'           => [ 'ٽٽل چورڻا' ],
	'Categories'                => [ 'زمرا' ],
	'Confirmemail'              => [ 'برقٽپال تصديقيو' ],
	'Contributions'             => [ 'ڀاڱيداريون' ],
	'CreateAccount'             => [ 'کاتو کوليو' ],
	'DoubleRedirects'           => [ 'ٻٽا چورڻا' ],
	'Emailuser'                 => [ 'برقٽپال يوزر' ],
	'Export'                    => [ 'برآمد' ],
	'FileDuplicateSearch'       => [ 'ساڳيا فائيل ڳولا' ],
	'Filepath'                  => [ 'فائيل ڏس' ],
	'Import'                    => [ 'درآمد' ],
	'Invalidateemail'           => [ 'ناقابلڪار برقٽپال' ],
	'BlockList'                 => [ 'آءِ پي بندش فهرست' ],
	'Listadmins'                => [ 'منتظمين فهرست' ],
	'Listbots'                  => [ 'بوٽس فهرست' ],
	'Listfiles'                 => [ 'عڪس فهرست' ],
	'Listredirects'             => [ 'چورڻا فهرست' ],
	'Listusers'                 => [ 'يوزر فهرست' ],
	'Lockdb'                    => [ 'اعدادخانو بند' ],
	'Log'                       => [ 'لاگس' ],
	'Lonelypages'               => [ 'يتيم صفحا' ],
	'Longpages'                 => [ 'طويل صفحا' ],
	'MergeHistory'              => [ 'سوانح ضماءُ' ],
	'MIMEsearch'                => [ 'مائيم ڳولا' ],
	'Movepage'                  => [ 'صفحو چوريو' ],
	'Mycontributions'           => [ 'منهنجون ڀاڱيداريون' ],
	'Mypage'                    => [ 'منهنجو صفحو' ],
	'Mytalk'                    => [ 'مون سان ڳالهه' ],
	'Newimages'                 => [ 'نوان عڪس' ],
	'Newpages'                  => [ 'نوان صفحا' ],
	'Preferences'               => [ 'ترجيحات' ],
	'Prefixindex'               => [ 'اڳياڙي ڏسڻي' ],
	'Protectedpages'            => [ 'تحفظيل صفحا' ],
	'Protectedtitles'           => [ 'تحفظيل عنوان' ],
	'Randompage'                => [ 'بلا ترتيب' ],
	'Randomredirect'            => [ 'بلا ترتيب چورڻو' ],
	'Recentchanges'             => [ 'تازيون تبديليون' ],
	'Search'                    => [ 'ڳولا' ],
	'Shortpages'                => [ 'مختصر صفحا' ],
	'Specialpages'              => [ 'خاص صفحا' ],
	'Statistics'                => [ 'انگ اکر' ],
	'Uncategorizedcategories'   => [ 'اڻ زمرايل زمرا' ],
	'Uncategorizedimages'       => [ 'اڻ زمرايل عڪس' ],
	'Uncategorizedpages'        => [ 'اڻزمرايل صفحا' ],
	'Uncategorizedtemplates'    => [ 'اڻ زمرايل سانچا' ],
	'Undelete'                  => [ 'اڻ ڊاهيو' ],
	'Unlockdb'                  => [ 'اعدادخانو کول' ],
	'Unusedcategories'          => [ 'اڻ استعماليل زمرا' ],
	'Unusedimages'              => [ 'اڻ استعماليل عڪس' ],
	'Unusedtemplates'           => [ 'اڻ استعماليل سانچا' ],
	'Unwatchedpages'            => [ 'اڻٽيٽيل صفحا' ],
	'Upload'                    => [ 'چاڙهيو' ],
	'Userlogin'                 => [ 'يوزر لاگ اِن' ],
	'Userlogout'                => [ 'يوزر لاگ آئوٽ' ],
	'Userrights'                => [ 'يوزر حق' ],
	'Version'                   => [ 'ورزن' ],
	'Wantedcategories'          => [ 'گھربل زمرا' ],
	'Wantedpages'               => [ 'گھربل صفحا' ],
	'Watchlist'                 => [ 'ٽيٽ فهرست' ],
	'Whatlinkshere'             => [ 'هتان ڳنڍيل صفحا' ],
	'Withoutinterwiki'          => [ 'ري بين الوڪي' ],
];

$magicWords = [
	'redirect'                  => [ '0', '#چوريو', '#REDIRECT' ],
	'localmonth'                => [ '1', 'مقاميمهينو', 'LOCALMONTH', 'LOCALMONTH2' ],
	'localmonthname'            => [ '1', 'مقاميمهينونالو', 'LOCALMONTHNAME' ],
	'localday'                  => [ '1', 'مقاميڏينهن', 'LOCALDAY' ],
	'localday2'                 => [ '1', 'مقاميڏينهن2', 'LOCALDAY2' ],
	'localdayname'              => [ '1', 'مقاميڏينهننالو', 'LOCALDAYNAME' ],
	'localyear'                 => [ '1', 'مقاميسال', 'LOCALYEAR' ],
	'localtime'                 => [ '1', 'مقاميوقت', 'LOCALTIME' ],
	'localhour'                 => [ '1', 'مقاميڪلاڪ', 'LOCALHOUR' ],
	'numberofpages'             => [ '1', 'صفحنجوتعداد', 'NUMBEROFPAGES' ],
	'numberofarticles'          => [ '1', 'مضموننجوتعداد', 'NUMBEROFARTICLES' ],
	'numberoffiles'             => [ '1', 'فائيلنجوتعداد', 'NUMBEROFFILES' ],
	'numberofusers'             => [ '1', 'يوزرسجوتعداد', 'NUMBEROFUSERS' ],
	'numberofedits'             => [ '1', 'ترميمنجوتعداد', 'NUMBEROFEDITS' ],
	'pagename'                  => [ '1', 'صفحيجوعنوان', 'PAGENAME' ],
	'namespace'                 => [ '1', 'نانئپولار', 'NAMESPACE' ],
	'talkspace'                 => [ '1', 'بحثپولار', 'TALKSPACE' ],
	'subjectspace'              => [ '1', 'مضمونپولار', 'SUBJECTSPACE', 'ARTICLESPACE' ],
	'fullpagename'              => [ '1', 'صحفيجوپورونالو', 'FULLPAGENAME' ],
	'msg'                       => [ '0', 'نياپو:', 'MSG:' ],
	'img_right'                 => [ '1', 'ساڄو', 'right' ],
	'img_left'                  => [ '1', 'کاٻو', 'left' ],
	'img_none'                  => [ '1', 'ڪجهنه', 'none' ],
	'img_width'                 => [ '1', '$1 عڪسلون', '$1px' ],
	'img_center'                => [ '1', 'مرڪز', 'center', 'centre' ],
	'img_top'                   => [ '1', 'سِرُ', 'top' ],
	'img_middle'                => [ '1', 'وچ', 'middle' ],
	'img_bottom'                => [ '1', 'تَرُ', 'bottom' ],
	'sitename'                  => [ '1', 'سرزميننالو', 'SITENAME' ],
	'ns'                        => [ '0', 'نپ', 'NS:' ],
	'localurl'                  => [ '0', 'مقامييوآريل', 'LOCALURL:' ],
	'grammar'                   => [ '0', 'وياڪرڻ', 'GRAMMAR:' ],
	'currentweek'               => [ '1', 'هلندڙهفتو', 'CURRENTWEEK' ],
	'currentdow'                => [ '1', 'اڄوڪوڏينهن', 'CURRENTDOW' ],
	'localweek'                 => [ '1', 'مقاميهفتو', 'LOCALWEEK' ],
	'plural'                    => [ '0', 'جمع', 'PLURAL:' ],
	'fullurl'                   => [ '0', 'مڪمليوآريل', 'FULLURL:' ],
	'currenttimestamp'          => [ '1', 'هلندڙوقتمهر', 'CURRENTTIMESTAMP' ],
	'localtimestamp'            => [ '1', 'مقاميوقتمهر', 'LOCALTIMESTAMP' ],
	'directionmark'             => [ '1', 'طرفنشان', 'DIRECTIONMARK', 'DIRMARK' ],
	'language'                  => [ '0', '#ٻولي:', '#LANGUAGE:' ],
	'contentlanguage'           => [ '1', 'موادٻولي', 'CONTENTLANGUAGE', 'CONTENTLANG' ],
	'pagesinnamespace'          => [ '1', 'نپ۾صفحا', 'PAGESINNAMESPACE:', 'PAGESINNS:' ],
	'numberofadmins'            => [ '1', 'منتظمينجوتعداد', 'NUMBEROFADMINS' ],
	'special'                   => [ '0', 'خاص', 'special' ],
	'filepath'                  => [ '0', 'فائيلڏس', 'FILEPATH:' ],
	'hiddencat'                 => [ '1', '__ لڪل زمرو __', '__HIDDENCAT__' ],
	'pagesincategory'           => [ '1', 'زمريجاصفحا', 'PAGESINCATEGORY', 'PAGESINCAT' ],
	'pagesize'                  => [ '1', 'صفحيجيماپ', 'PAGESIZE' ],
];
