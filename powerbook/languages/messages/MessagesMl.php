<?php
/** Malayalam (മലയാളം)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Abhishek Jacob
 * @author Akhilan
 * @author Anoopan
 * @author Chrisportelli
 * @author Deepugn
 * @author Jacob.jose
 * @author Jigesh
 * @author Junaidpv
 * @author Jyothis
 * @author Kaganer
 * @author Krenair
 * @author Manjith Joseph <manjithkaini@gmail.com>
 * @author Naveen Sankar
 * @author Nemo bis
 * @author Praveen Prakash <me.praveen@gmail.com>
 * @author Praveenp
 * @author Raghith
 * @author Sadik Khalid
 * @author Sadik Khalid <sadik.khalid@gmail.com>
 * @author Santhosh.thottingal
 * @author ShajiA
 * @author Shiju Alex <shijualexonline@gmail.com>
 * @author Shijualex
 * @author Vssun
 * @author Ævar Arnfjörð Bjarmason <avarab@gmail.com>
 * @author לערי ריינהארט
 */

$namespaceNames = [
	NS_MEDIA            => 'മീഡിയ',
	NS_SPECIAL          => 'പ്രത്യേകം',
	NS_TALK             => 'സംവാദം',
	NS_USER             => 'ഉപയോക്താവ്',
	NS_USER_TALK        => 'ഉപയോക്താവിന്റെ_സംവാദം',
	NS_PROJECT_TALK     => '$1_സംവാദം',
	NS_FILE             => 'പ്രമാണം',
	NS_FILE_TALK        => 'പ്രമാണത്തിന്റെ_സംവാദം',
	NS_MEDIAWIKI        => 'മീഡിയവിക്കി',
	NS_MEDIAWIKI_TALK   => 'മീഡിയവിക്കി_സംവാദം',
	NS_TEMPLATE         => 'ഫലകം',
	NS_TEMPLATE_TALK    => 'ഫലകത്തിന്റെ_സംവാദം',
	NS_HELP             => 'സഹായം',
	NS_HELP_TALK        => 'സഹായത്തിന്റെ_സംവാദം',
	NS_CATEGORY         => 'വർഗ്ഗം',
	NS_CATEGORY_TALK    => 'വർഗ്ഗത്തിന്റെ_സംവാദം',
];

$namespaceAliases = [
	'സം' => NS_TALK,
	'അംഗം' => NS_USER,
	'ഉ' => NS_USER,
	'അംഗങ്ങളുടെ_സംവാദം' => NS_USER_TALK,
	'ഉസം' => NS_USER_TALK,
	'ചി' => NS_FILE,
	'ചിസം' => NS_FILE_TALK,
	'ചിത്രം' => NS_FILE,
	'ചിത്രത്തിന്റെ_സംവാദം' => NS_FILE_TALK,
	'പ്ര' => NS_FILE,
	'പ്രസം' => NS_FILE_TALK,
	'ഫ' => NS_TEMPLATE,
	'ഫസം' => NS_TEMPLATE_TALK,
	'വി' => NS_CATEGORY,
	'വ' => NS_CATEGORY,
	'വിസം' => NS_CATEGORY_TALK,
	'വസം' => NS_CATEGORY_TALK,
	'മീ' => NS_MEDIAWIKI,
	'മീസം' => NS_MEDIAWIKI_TALK,
	'പ്രത്യേ' => NS_SPECIAL,
	'വിഭാഗം' => NS_CATEGORY,
	'വിഭാഗത്തിന്റെ_സംവാദം' => NS_CATEGORY_TALK,
	'വർഗ്ഗം' => NS_CATEGORY,
	'വർഗ്ഗത്തിന്റെ_സംവാദം' => NS_CATEGORY_TALK,
	'സ' => NS_HELP,
	'സസം' => NS_HELP_TALK,
];

$specialPageAliases = [
	'Activeusers'               => [ 'സജീവ_ഉപയോക്താക്കൾ' ],
	'Allmessages'               => [ 'സർവ്വസന്ദേശങ്ങൾ' ],
	'AllMyUploads'              => [ 'എന്റെയെല്ലാഅപ്‌ലോഡുകളും', 'എന്റെയെല്ലാപ്രമാണങ്ങളും' ],
	'Allpages'                  => [ 'എല്ലാതാളുകളും' ],
	'Ancientpages'              => [ 'പുരാതന_താളുകൾ' ],
	'Badtitle'                  => [ 'മോശംതലക്കെട്ട്' ],
	'Blankpage'                 => [ 'ശൂന്യതാൾ' ],
	'Block'                     => [ 'തടയുക', 'ഐ.പി.തടയുക', 'ഉപയോക്തൃതടയൽ' ],
	'Booksources'               => [ 'പുസ്തകസ്രോതസ്സുകൾ' ],
	'BrokenRedirects'           => [ 'പൊട്ടിയതിരിച്ചുവിടലുകൾ' ],
	'Categories'                => [ 'വർഗ്ഗങ്ങൾ' ],
	'ChangeEmail'               => [ 'ഇമെയിലിൽമാറ്റംവരുത്തുക' ],
	'ChangePassword'            => [ 'രഹസ്യവാക്ക്_മാറ്റുക' ],
	'ComparePages'              => [ 'താളുകളുടെതാരതമ്യം' ],
	'Confirmemail'              => [ 'ഇമെയിൽ_സ്ഥിരീകരിക്കുക' ],
	'Contributions'             => [ 'സംഭാവനകൾ' ],
	'CreateAccount'             => [ 'അംഗത്വമെടുക്കൽ' ],
	'Deadendpages'              => [ 'അന്ത്യസ്ഥാനത്തുള്ള_താളുകൾ' ],
	'DeletedContributions'      => [ 'മായ്ച്ച_സേവനങ്ങൾ' ],
	'Diff'                      => [ 'വ്യത്യാസം' ],
	'DoubleRedirects'           => [ 'ഇരട്ടത്തിരിച്ചുവിടലുകൾ' ],
	'EditWatchlist'             => [ 'ശ്രദ്ധിക്കുന്നവയുടെപട്ടികതിരുത്തുക' ],
	'Emailuser'                 => [ 'ഉപയോക്തൃഇമെയിൽ' ],
	'ExpandTemplates'           => [ 'ഫലകങ്ങൾ_വികസിപ്പിക്കുക' ],
	'Export'                    => [ 'കയറ്റുമതി' ],
	'Fewestrevisions'           => [ 'കുറഞ്ഞ_പുനരവലോകനങ്ങൾ' ],
	'FileDuplicateSearch'       => [ 'പ്രമാണത്തിന്റെ_അപരനുള്ള_തിരച്ചിൽ' ],
	'Filepath'                  => [ 'പ്രമാണവിലാസം' ],
	'Import'                    => [ 'ഇറക്കുമതി' ],
	'Invalidateemail'           => [ 'ഇമെയിൽഅസാധുവാക്കുക' ],
	'JavaScriptTest'            => [ 'ജാവാസ്ക്രിപ്റ്റ്പരീക്ഷണം' ],
	'BlockList'                 => [ 'തടയൽ‌പട്ടിക', 'ഐപികളുടെ_തടയൽ‌പട്ടിക' ],
	'LinkSearch'                => [ 'കണ്ണികൾ_തിരയുക' ],
	'Listadmins'                => [ 'കാര്യനിർവാഹകപട്ടിക' ],
	'Listbots'                  => [ 'യന്ത്രങ്ങളുടെ_പട്ടിക' ],
	'Listfiles'                 => [ 'പ്രമാണങ്ങളുടെ_പട്ടിക', 'ചിത്രങ്ങളുടെ_പട്ടിക' ],
	'Listgrouprights'           => [ 'സമൂഹത്തിന്റെ_അവകാശങ്ങളുടെ_പട്ടിക' ],
	'Listredirects'             => [ 'തിരിച്ചുവിടൽ‌പട്ടിക' ],
	'ListDuplicatedFiles'       => [ 'അപരപ്രമാണപട്ടിക' ],
	'Listusers'                 => [ 'ഉപയോക്താക്കളുടെ_പട്ടിക' ],
	'Lockdb'                    => [ 'ഡി.ബി.ബന്ധിക്കുക' ],
	'Log'                       => [ 'രേഖ', 'രേഖകൾ' ],
	'Lonelypages'               => [ 'അനാഥതാളുകൾ' ],
	'Longpages'                 => [ 'വലിയതാളുകൾ' ],
	'MergeHistory'              => [ 'നാൾവഴിലയിപ്പിക്കുക' ],
	'MIMEsearch'                => [ 'മൈംതിരയൽ' ],
	'Mostcategories'            => [ 'കൂടുതൽ_വർഗ്ഗങ്ങൾ' ],
	'Mostimages'                => [ 'കൂടുതൽ_കണ്ണികളുള്ള_പ്രമാണങ്ങൾ', 'കൂടുതൽ_പ്രമാണങ്ങൾ', 'കൂടുതൽ_ചിത്രങ്ങൾ' ],
	'Mostinterwikis'            => [ 'ഏറ്റവുമധികമന്തർവിക്കികൾ' ],
	'Mostlinked'                => [ 'കൂടുതൽ_കണ്ണികളുള്ള_താളുകൾ', 'കൂടുതൽ_കണ്ണികളുള്ളവ' ],
	'Mostlinkedcategories'      => [ 'കൂടുതൽ_കണ്ണികളുള്ള_വർഗ്ഗങ്ങൾ', 'കൂടുതൽ_ഉപയോഗിച്ചിട്ടുള്ള_വർഗ്ഗങ്ങൾ' ],
	'Mostlinkedtemplates'       => [ 'കൂടുതൽ_കണ്ണികളുള്ള_ഫലകങ്ങൾ', 'കൂടുതൽ_ഉപയോഗിച്ചിട്ടുള്ള_ഫലകങ്ങൾ' ],
	'Mostrevisions'             => [ 'കൂടുതൽ_പുനരവലോകനങ്ങൾ' ],
	'Movepage'                  => [ 'താൾ_മാറ്റുക' ],
	'Mycontributions'           => [ 'എന്റെസംഭാവനകൾ' ],
	'MyLanguage'                => [ 'എന്റെഭാഷ' ],
	'Mypage'                    => [ 'എന്റെതാൾ' ],
	'Mytalk'                    => [ 'എന്റെസംവാദം' ],
	'Myuploads'                 => [ 'ഞാൻഅപ്‌ലോഡ്‌ചെയ്തവ' ],
	'Newimages'                 => [ 'പുതിയ_പ്രമാണങ്ങൾ', 'പുതിയ_ചിത്രങ്ങൾ' ],
	'Newpages'                  => [ 'പുതിയ_താളുകൾ' ],
	'PagesWithProp'             => [ 'താളുകളുടെഉള്ളടക്കപ്രത്യേകതകൾ' ],
	'PageLanguage'              => [ 'താളിന്റെഭാഷ' ],
	'PasswordReset'             => [ 'രഹസ്യവാക്ക്‌‌പുനക്രമീകരണം' ],
	'PermanentLink'             => [ 'സ്ഥിരംകണ്ണി' ],
	'Preferences'               => [ 'ക്രമീകരണങ്ങൾ' ],
	'Prefixindex'               => [ 'പൂർവ്വപദസൂചിക' ],
	'Protectedpages'            => [ 'സംരക്ഷിത_താളുകൾ' ],
	'Protectedtitles'           => [ 'സംരക്ഷിത_ശീർഷകങ്ങൾ' ],
	'Randompage'                => [ 'ക്രമരഹിതം', 'ക്രമരഹിതതാൾ' ],
	'RandomInCategory'          => [ 'വർഗ്ഗത്തിൽനിന്ന്ക്രമരഹിതം' ],
	'Randomredirect'            => [ 'ക്രമരഹിതതിരിച്ചുവിടലുകൾ' ],
	'Recentchanges'             => [ 'സമീപകാലമാറ്റങ്ങൾ' ],
	'Recentchangeslinked'       => [ 'ബന്ധപ്പെട്ട_മാറ്റങ്ങൾ' ],
	'Redirect'                  => [ 'തിരിച്ചുവിടൽ' ],
	'ResetTokens'               => [ 'ചീട്ട്പുനഃസജ്ജീകരിക്കുക' ],
	'Revisiondelete'            => [ 'നാൾപ്പതിപ്പ്_മായ്ക്കൽ' ],
	'RunJobs'                   => [ 'പ്രവൃത്തിനടപ്പാക്കൽ' ],
	'Search'                    => [ 'അന്വേഷണം' ],
	'Shortpages'                => [ 'ചെറിയ_താളുകൾ' ],
	'Specialpages'              => [ 'പ്രത്യേകതാളുകൾ' ],
	'Statistics'                => [ 'സ്ഥിതിവിവരം' ],
	'Tags'                      => [ 'റ്റാഗുകൾ' ],
	'TrackingCategories'        => [ 'പിന്തുടരൽവർഗ്ഗങ്ങൾ' ],
	'Unblock'                   => [ 'തടയൽനീക്കുക' ],
	'Uncategorizedcategories'   => [ 'വർഗ്ഗീകരിക്കാത്ത_വർഗ്ഗങ്ങൾ' ],
	'Uncategorizedimages'       => [ 'വർഗ്ഗീകരിക്കാത്ത_പ്രമാണങ്ങൾ' ],
	'Uncategorizedpages'        => [ 'വർഗ്ഗീകരിക്കാത്ത_താളുകൾ' ],
	'Uncategorizedtemplates'    => [ 'വർഗ്ഗീകരിക്കാത്ത_ഫലകങ്ങൾ' ],
	'Undelete'                  => [ 'മായ്ച്ചവ_പുനഃസ്ഥാപനം' ],
	'Unlockdb'                  => [ 'ഡി.ബി.ബന്ധനംനീക്കുക' ],
	'Unusedcategories'          => [ 'ഉപയോഗിക്കാത്ത_വർഗ്ഗങ്ങൾ' ],
	'Unusedimages'              => [ 'ഉപയോഗിക്കാത്ത_പ്രമാണങ്ങൾ' ],
	'Unusedtemplates'           => [ 'ഉപയോഗിക്കാത്തഫലകങ്ങൾ' ],
	'Unwatchedpages'            => [ 'ആരുംശ്രദ്ധിക്കാത്തതാളുകൾ' ],
	'Upload'                    => [ 'അപ്‌ലോഡ്' ],
	'UploadStash'               => [ 'അപ്‌ലോഡ്_മറയ്ക്കൽ' ],
	'Userlogin'                 => [ 'പ്രവേശനം' ],
	'Userlogout'                => [ 'പുറത്തുകടക്കൽ' ],
	'Userrights'                => [ 'ഉപയോക്തൃഅവകാശങ്ങൾ', 'കാര്യനിർവാഹകസൃഷ്ടി', 'യന്ത്രസൃഷ്ടി' ],
	'Version'                   => [ 'പതിപ്പ്' ],
	'Wantedcategories'          => [ 'ആവശ്യമുള്ള_വർഗ്ഗങ്ങൾ' ],
	'Wantedfiles'               => [ 'ആവശ്യമുള്ള_പ്രമാണങ്ങൾ' ],
	'Wantedpages'               => [ 'ആവശ്യമുള്ള_താളുകൾ', 'പൊട്ടിയ_കണ്ണികൾ' ],
	'Wantedtemplates'           => [ 'ആവശ്യമുള്ള_ഫലകങ്ങൾ' ],
	'Watchlist'                 => [ 'ശ്രദ്ധിക്കുന്നവ' ],
	'Whatlinkshere'             => [ 'കണ്ണികളെന്തെല്ലാം' ],
	'Withoutinterwiki'          => [ 'അന്തർവിക്കിയില്ലാത്തവ' ],
];

$magicWords = [
	'redirect'                  => [ '0', '#തിരിച്ചുവിടുക', '#തിരിച്ചുവിടൽ', '#REDIRECT' ],
	'notoc'                     => [ '0', '__ഉള്ളടക്കംവേണ്ട__', '__NOTOC__' ],
	'nogallery'                 => [ '0', '__ചിത്രസഞ്ചയംവേണ്ട__', '__NOGALLERY__' ],
	'forcetoc'                  => [ '0', '__ഉള്ളടക്കംഇടുക__', '__FORCETOC__' ],
	'toc'                       => [ '0', '__ഉള്ളടക്കം__', '__TOC__' ],
	'noeditsection'             => [ '0', '__സംശോധിക്കേണ്ട__', '__NOEDITSECTION__' ],
	'currentmonth'              => [ '1', 'ഈമാസം', 'ഈമാസം2', 'CURRENTMONTH', 'CURRENTMONTH2' ],
	'currentmonth1'             => [ '1', 'ഈമാസം1', 'CURRENTMONTH1' ],
	'currentmonthname'          => [ '1', 'ഈമാസത്തിന്റെപേര്‌', 'CURRENTMONTHNAME' ],
	'currentmonthnamegen'       => [ '1', 'ഈമാസത്തിന്റെപേരുസൃഷ്ടിക്കുക', 'CURRENTMONTHNAMEGEN' ],
	'currentmonthabbrev'        => [ '1', 'ഈമാസത്തിന്റെപേര്‌സംഗ്രഹം', 'ഈമാസത്തിന്റെപേര്‌ചുരുക്കം', 'CURRENTMONTHABBREV' ],
	'currentday'                => [ '1', 'ഈദിവസം', 'CURRENTDAY' ],
	'currentday2'               => [ '1', 'ഈദിവസം2', 'CURRENTDAY2' ],
	'currentdayname'            => [ '1', 'ഈദിവസത്തിന്റെപേര്‌', 'CURRENTDAYNAME' ],
	'currentyear'               => [ '1', 'ഈവർഷം', 'CURRENTYEAR' ],
	'currenttime'               => [ '1', 'ഈസമയം', 'CURRENTTIME' ],
	'currenthour'               => [ '1', 'ഈമണിക്കൂർ', 'CURRENTHOUR' ],
	'localmonth'                => [ '1', 'പ്രാദേശികമാസം', 'പ്രാദേശികമാസം2', 'LOCALMONTH', 'LOCALMONTH2' ],
	'localmonth1'               => [ '1', 'പ്രാദേശികമാസം1', 'LOCALMONTH1' ],
	'localmonthname'            => [ '1', 'പ്രാദേശികമാസത്തിന്റെപേര്‌', 'LOCALMONTHNAME' ],
	'localmonthnamegen'         => [ '1', 'പ്രാദേശികമാസത്തിന്റെപേരുസൃഷ്ടിക്കുക', 'LOCALMONTHNAMEGEN' ],
	'localmonthabbrev'          => [ '1', 'പ്രാദേശികമാസത്തിന്റെപേര്‌സംഗ്രഹം', 'പ്രാദേശികമാസത്തിന്റെപേര്‌ചുരുക്കം', 'LOCALMONTHABBREV' ],
	'localday'                  => [ '1', 'പ്രാദേശികദിവസം', 'LOCALDAY' ],
	'localday2'                 => [ '1', 'പ്രാദേശികദിവസം2', 'LOCALDAY2' ],
	'localdayname'              => [ '1', 'പ്രാദേശികദിവസത്തിന്റെപേര്‌', 'LOCALDAYNAME' ],
	'localyear'                 => [ '1', 'പ്രാദേശികവർഷം', 'LOCALYEAR' ],
	'localtime'                 => [ '1', 'പ്രാദേശികസമയം', 'LOCALTIME' ],
	'localhour'                 => [ '1', 'പ്രാദേശികമണിക്കൂർ', 'LOCALHOUR' ],
	'numberofpages'             => [ '1', 'താളുകളുടെയെണ്ണം', 'NUMBEROFPAGES' ],
	'numberofarticles'          => [ '1', 'ലേഖനങ്ങളുടെയെണ്ണം', 'NUMBEROFARTICLES' ],
	'numberoffiles'             => [ '1', 'പ്രമാണങ്ങളുടെയെണ്ണം', 'NUMBEROFFILES' ],
	'numberofusers'             => [ '1', 'ഉപയോക്താക്കളുടെയെണ്ണം', 'അംഗങ്ങളുടെയെണ്ണം', 'NUMBEROFUSERS' ],
	'numberofactiveusers'       => [ '1', 'സജീവോപയാക്താക്കളുടെയെണ്ണം', 'NUMBEROFACTIVEUSERS' ],
	'numberofedits'             => [ '1', 'തിരുത്തലുകളുടെണ്ണം', 'NUMBEROFEDITS' ],
	'pagename'                  => [ '1', 'താളിന്റെപേര്‌', 'PAGENAME' ],
	'pagenamee'                 => [ '1', 'താളിന്റെപേര്‌സമഗ്രം', 'PAGENAMEE' ],
	'namespace'                 => [ '1', 'നാമമേഖല', 'NAMESPACE' ],
	'namespacee'                => [ '1', 'നാമമേഖലസമഗ്രം', 'NAMESPACEE' ],
	'namespacenumber'           => [ '1', 'നാമമേഖലാസംഖ്യ', 'NAMESPACENUMBER' ],
	'talkspace'                 => [ '1', 'സംവാദമേഖല', 'TALKSPACE' ],
	'talkspacee'                => [ '1', 'സംവാദമേഖലസമഗ്രം', 'TALKSPACEE' ],
	'subjectspace'              => [ '1', 'വിഷയമേഖല', 'ലേഖനമേഖല', 'SUBJECTSPACE', 'ARTICLESPACE' ],
	'subjectspacee'             => [ '1', 'വിഷയമേഖലസമഗ്രം', 'ലേഖനമേഖലസമഗ്രം', 'SUBJECTSPACEE', 'ARTICLESPACEE' ],
	'fullpagename'              => [ '1', 'താളിന്റെമുഴുവൻപേര്‌', 'FULLPAGENAME' ],
	'fullpagenamee'             => [ '1', 'താളിന്റെമുഴുവൻപേര്സമഗ്രം', 'FULLPAGENAMEE' ],
	'subpagename'               => [ '1', 'അനുബന്ധതാളിന്റെപേര്‌', 'SUBPAGENAME' ],
	'subpagenamee'              => [ '1', 'അനുബന്ധതാളിന്റെപേര്സമഗ്രം', 'SUBPAGENAMEE' ],
	'rootpagename'              => [ '1', 'മൂലതാളിന്റെപേര്', 'ROOTPAGENAME' ],
	'rootpagenamee'             => [ '1', 'മൂലതാളിന്റെപേര്‌സമഗ്രം', 'ROOTPAGENAMEE' ],
	'basepagename'              => [ '1', 'അടിസ്ഥാനതാളിന്റെപേര്‌', 'BASEPAGENAME' ],
	'basepagenamee'             => [ '1', 'അടിസ്ഥാനതാളിന്റെപേര്‌സമഗ്രം', 'BASEPAGENAMEE' ],
	'talkpagename'              => [ '1', 'സംവാദതാളിന്റെപേര്‌', 'TALKPAGENAME' ],
	'talkpagenamee'             => [ '1', 'സംവാദതാളിന്റെപേര്‌സമഗ്രം', 'TALKPAGENAMEE' ],
	'subjectpagename'           => [ '1', 'ലേഖനതാളിന്റെപേര്‌', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ],
	'subjectpagenamee'          => [ '1', 'ലേഖനതാളിന്റെപേര്‌സമഗ്രം', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ],
	'msg'                       => [ '0', 'സന്ദേശം:', 'MSG:' ],
	'subst'                     => [ '0', 'ബദൽ:', 'ഉൾപ്പെടുത്തൽ:', 'SUBST:' ],
	'safesubst'                 => [ '0', 'സംരക്ഷിതബദൽ:', 'സംരക്ഷിതയുൾപ്പെടുത്തൽ:', 'SAFESUBST:' ],
	'msgnw'                     => [ '0', 'മൂലരൂപം:', 'MSGNW:' ],
	'img_thumbnail'             => [ '1', 'ലഘുചിത്രം', 'ലഘു', 'thumb', 'thumbnail' ],
	'img_manualthumb'           => [ '1', 'ലഘുചിത്രം=$1', 'ലഘു=$1', 'thumbnail=$1', 'thumb=$1' ],
	'img_right'                 => [ '1', 'വലത്ത്‌', 'വലത്‌', 'right' ],
	'img_left'                  => [ '1', 'ഇടത്ത്‌', 'ഇടത്‌', 'left' ],
	'img_none'                  => [ '1', 'ശൂന്യം', 'none' ],
	'img_width'                 => [ '1', '$1ബിന്ദു', '$1px' ],
	'img_center'                => [ '1', 'നടുവിൽ', 'നടുക്ക്‌', 'center', 'centre' ],
	'img_framed'                => [ '1', 'ചട്ടം', 'ചട്ടത്തിൽ', 'frame', 'framed', 'enframed' ],
	'img_frameless'             => [ '1', 'ചട്ടരഹിതം', 'frameless' ],
	'img_lang'                  => [ '1', 'ഭാഷ=$1', 'lang=$1' ],
	'img_page'                  => [ '1', 'താൾ=$1', 'താൾ_$1', 'page=$1', 'page $1' ],
	'img_upright'               => [ '1', 'നേരേകുത്തനെ', 'നേരേകുത്തനെ=$1', 'നേരേകുത്തനെ_$1', 'upright', 'upright=$1', 'upright $1' ],
	'img_border'                => [ '1', 'അതിർവര', 'border' ],
	'img_baseline'              => [ '1', 'താഴെയുള്ളവര', 'baseline' ],
	'img_sub'                   => [ '1', 'കീഴെയെഴുത്ത്', 'sub' ],
	'img_super'                 => [ '1', 'മേലേയെഴുത്ത്', 'super', 'sup' ],
	'img_top'                   => [ '1', 'മേലെ', 'top' ],
	'img_text_top'              => [ '1', 'എഴുത്ത്-മേലെ', 'text-top' ],
	'img_middle'                => [ '1', 'മദ്ധ്യം', 'middle' ],
	'img_bottom'                => [ '1', 'താഴെ', 'bottom' ],
	'img_text_bottom'           => [ '1', 'എഴുത്ത്-താഴെ', 'text-bottom' ],
	'img_link'                  => [ '1', 'കണ്ണി=$1', 'link=$1' ],
	'img_alt'                   => [ '1', 'പകരം=$1', 'alt=$1' ],
	'img_class'                 => [ '1', 'ശ്രേണി=$1', 'class=$1' ],
	'int'                       => [ '0', 'സമ്പർക്കം:', 'INT:' ],
	'sitename'                  => [ '1', 'സൈറ്റിന്റെപേര്', 'SITENAME' ],
	'ns'                        => [ '0', 'നാമേ:', 'NS:' ],
	'nse'                       => [ '0', 'നാമേസ:', 'NSE:' ],
	'localurl'                  => [ '0', 'ലോക്കൽയുആർഎൽ:', 'LOCALURL:' ],
	'localurle'                 => [ '0', 'ലോക്കൽയുആർഎൽഇ:', 'LOCALURLE:' ],
	'articlepath'               => [ '0', 'ലേഖനപഥം', 'ARTICLEPATH' ],
	'pageid'                    => [ '0', 'താൾഐ‌ഡി', 'PAGEID' ],
	'server'                    => [ '0', 'സെർവർ', 'SERVER' ],
	'servername'                => [ '0', 'സെർവറിന്റെപേര്', 'SERVERNAME' ],
	'scriptpath'                => [ '0', 'സ്ക്രിപ്റ്റ്പഥം', 'SCRIPTPATH' ],
	'stylepath'                 => [ '0', 'സ്റ്റൈൽപഥം', 'STYLEPATH' ],
	'grammar'                   => [ '0', 'വ്യാകരണം:', 'GRAMMAR:' ],
	'gender'                    => [ '0', 'ലിംഗം:', 'GENDER:' ],
	'notitleconvert'            => [ '0', '__തലക്കെട്ട്മാറ്റേണ്ട__', '__NOTITLECONVERT__', '__NOTC__' ],
	'nocontentconvert'          => [ '0', '__ഉള്ളടക്കംമാറ്റേണ്ട__', '__NOCONTENTCONVERT__', '__NOCC__' ],
	'currentweek'               => [ '1', 'ആഴ്ച', 'ആഴ്‌ച', 'CURRENTWEEK' ],
	'currentdow'                => [ '1', 'ദിവസത്തിന്റെപേര്‌അക്കത്തിൽ', 'CURRENTDOW' ],
	'localweek'                 => [ '1', 'പ്രാദേശികആഴ്ച', 'പ്രാദേശികആഴ്‌ച', 'LOCALWEEK' ],
	'localdow'                  => [ '1', 'ആഴ്ചയുടെപേര്‌അക്കത്തിൽ', 'ആഴ്‌ചയുടെപേര്‌അക്കത്തിൽ', 'LOCALDOW' ],
	'revisionid'                => [ '1', 'തിരുത്തൽഅടയാളം', 'REVISIONID' ],
	'revisionday'               => [ '1', 'തിരുത്തിയദിവസം', 'തിരുത്തിയദിനം', 'REVISIONDAY' ],
	'revisionday2'              => [ '1', 'തിരുത്തിയദിവസം2', 'തിരുത്തിയദിനം2', 'REVISIONDAY2' ],
	'revisionmonth'             => [ '1', 'തിരുത്തിയമാസം', 'REVISIONMONTH' ],
	'revisionmonth1'            => [ '1', 'തിരുത്തിയമാസം1', 'REVISIONMONTH1' ],
	'revisionyear'              => [ '1', 'തിരുത്തിയവർഷം', 'REVISIONYEAR' ],
	'revisiontimestamp'         => [ '1', 'തിരുത്തിയസമയമുദ്ര', 'REVISIONTIMESTAMP' ],
	'revisionuser'              => [ '1', 'അവസാനംതിരുത്തിയയാൾ', 'REVISIONUSER' ],
	'revisionsize'              => [ '1', 'നാൾപ്പതിപ്പിന്റെവലിപ്പം', 'REVISIONSIZE' ],
	'plural'                    => [ '0', 'ബഹുവചനം:', 'PLURAL:' ],
	'fullurl'                   => [ '0', 'പൂർണ്ണവിലാസം:', 'FULLURL:' ],
	'fullurle'                  => [ '0', 'പൂർണ്ണവിലാസംസമഗ്രം:', 'FULLURLE:' ],
	'canonicalurl'              => [ '0', 'കാനോനിക്കൽവിലാസം:', 'CANONICALURL:' ],
	'canonicalurle'             => [ '0', 'കാനോനിക്കൽവിലാസംസമഗ്രം:', 'CANONICALURLE:' ],
	'raw'                       => [ '0', 'അസംസ്കൃതം:', 'RAW:' ],
	'displaytitle'              => [ '1', 'ശീർഷകംപ്രദർശിപ്പിക്കുക', 'തലക്കെട്ട്പ്രദർശിപ്പിക്കുക', 'DISPLAYTITLE' ],
	'rawsuffix'                 => [ '1', 'വ', 'R' ],
	'newsectionlink'            => [ '1', '__പുതിയവിഭാഗംകണ്ണി__', '__പുതിയഖണ്ഡിക്കണ്ണി__', '__NEWSECTIONLINK__' ],
	'nonewsectionlink'          => [ '1', '__പുതിയവിഭാഗംകണ്ണിവേണ്ട__', '__പുതിയഖണ്ഡിക്കണ്ണിവേണ്ട__', '__NONEWSECTIONLINK__' ],
	'currentversion'            => [ '1', 'ഈപതിപ്പ്', 'CURRENTVERSION' ],
	'urlencode'                 => [ '0', 'വിലാസഗൂഢീകരണം:', 'URLENCODE:' ],
	'currenttimestamp'          => [ '1', 'സമയമുദ്ര', 'CURRENTTIMESTAMP' ],
	'localtimestamp'            => [ '1', 'പ്രാദേശികസമയമുദ്ര', 'LOCALTIMESTAMP' ],
	'directionmark'             => [ '1', 'ദിശാസൂചിക', 'DIRECTIONMARK', 'DIRMARK' ],
	'language'                  => [ '0', '#ഭാഷ:', '#LANGUAGE:' ],
	'contentlanguage'           => [ '1', 'ഉള്ളടക്കഭാഷ', 'CONTENTLANGUAGE', 'CONTENTLANG' ],
	'pagesinnamespace'          => [ '1', 'നാമമേഖലയിലുള്ളതാളുകൾ', 'PAGESINNAMESPACE:', 'PAGESINNS:' ],
	'numberofadmins'            => [ '1', 'കാര്യനിർവ്വാഹകരുടെഎണ്ണം', 'NUMBEROFADMINS' ],
	'formatnum'                 => [ '0', 'ദശാംശഘടന', 'സംഖ്യാഘടന', 'FORMATNUM' ],
	'padleft'                   => [ '0', 'ഇടത്ത്നിറക്കുക', 'PADLEFT' ],
	'padright'                  => [ '0', 'വലത്ത്നിറക്കുക', 'PADRIGHT' ],
	'special'                   => [ '0', 'പ്രത്യേകം', 'special' ],
	'speciale'                  => [ '0', 'സവിശേഷം', 'speciale' ],
	'defaultsort'               => [ '1', 'സ്വതേയുള്ളക്രമപ്പെടുത്തൽ:', 'സ്വതേയുള്ളക്രമപ്പെടുത്തൽചാവി:', 'സ്വതേയുള്ളവർഗ്ഗക്രമപ്പെടുത്തൽ:', 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ],
	'filepath'                  => [ '0', 'പ്രമാണപഥം:', 'FILEPATH:' ],
	'tag'                       => [ '0', 'റ്റാഗ്', 'ടാഗ്', 'tag' ],
	'hiddencat'                 => [ '1', '‌‌__മറഞ്ഞിരിക്കുംവർഗ്ഗം__', '__HIDDENCAT__' ],
	'pagesincategory'           => [ '1', 'വർഗ്ഗത്തിലുള്ളതാളുകൾ', 'PAGESINCATEGORY', 'PAGESINCAT' ],
	'pagesize'                  => [ '1', 'താൾവലിപ്പം', 'PAGESIZE' ],
	'index'                     => [ '1', '‌‌__സൂചിക__', '__INDEX__' ],
	'noindex'                   => [ '1', '__സൂചികവേണ്ട__', '__NOINDEX__' ],
	'numberingroup'             => [ '1', 'ഗണത്തിലെയെണ്ണം', 'NUMBERINGROUP', 'NUMINGROUP' ],
	'staticredirect'            => [ '1', '_സ്ഥിരസ്ഥിതതിരിച്ചുവിടൽ_', '__STATICREDIRECT__' ],
	'protectionlevel'           => [ '1', 'സംരക്ഷണതലം', 'PROTECTIONLEVEL' ],
	'formatdate'                => [ '0', 'ദിനരേഖീകരണരീതി', 'ദിവസരേഖീകരണരീതി', 'formatdate', 'dateformat' ],
	'url_path'                  => [ '0', 'പഥം', 'PATH' ],
	'url_wiki'                  => [ '0', 'വിക്കി', 'WIKI' ],
	'url_query'                 => [ '0', 'ക്വറി', 'QUERY' ],
	'defaultsort_noerror'       => [ '0', 'പിഴവില്ല', 'noerror' ],
	'defaultsort_noreplace'     => [ '0', 'മാറ്റേണ്ടതില്ല', 'noreplace' ],
	'pagesincategory_all'       => [ '0', 'എല്ലാം', 'all' ],
	'pagesincategory_pages'     => [ '0', 'താളുകൾ', 'pages' ],
	'pagesincategory_subcats'   => [ '0', 'ഉപവർഗ്ഗങ്ങൾ', 'subcats' ],
	'pagesincategory_files'     => [ '0', 'പ്രമാണങ്ങൾ', 'files' ],
];

$linkTrail = "/^([a-z\x{0D02}-\x{0D7F}]+)(.*)$/sDu";

$digitGroupingPattern = "##,##,###";
