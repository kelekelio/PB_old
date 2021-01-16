<?php
/** Greek (Ελληνικά)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 */

/**
 * Initial translation by Pasok Internet Volunteers
 * http://forum.pasok.gr
 * version 1.0 (initial release)
 *
 * The project for the translation of MediaWiki into Greek
 * was undertaken by a group of ICT volunteers working under
 * the auspices of the Greek political party PASOK.
 *
 * The idea behind this effort was  to provide an extensible,
 * easy-to-use and non-intimidating tool for content development
 * and project management, to be used throughout the administrative
 * and political structure of PASOK by staff, volunteers, party members
 * and elected officials (all of whom possess varying degrees of ICT skills).
 *
 * The PASOK ICT team and the volunteers who worked on this project are
 * now returning the translated interface to the Open-Source Community
 * with over 98% of the messages translated into user-friendly Greek.
 *
 * We hope that it will be used as a tool by other civil society organizations
 * in Greece, and that it will enhance the collective creation and the dissemination
 * of knowledge - an essential component of the democratic process.
 */

$namespaceNames = [
	NS_MEDIA            => 'Μέσο',
	NS_SPECIAL          => 'Ειδικό',
	NS_TALK             => 'Συζήτηση',
	NS_USER             => 'Χρήστης',
	NS_USER_TALK        => 'Συζήτηση_χρήστη',
	NS_PROJECT_TALK     => 'Συζήτηση_$1',
	NS_FILE             => 'Αρχείο',
	NS_FILE_TALK        => 'Συζήτηση_αρχείου',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'Συζήτηση_MediaWiki',
	NS_TEMPLATE         => 'Πρότυπο',
	NS_TEMPLATE_TALK    => 'Συζήτηση_προτύπου',
	NS_HELP             => 'Βοήθεια',
	NS_HELP_TALK        => 'Συζήτηση_βοήθειας',
	NS_CATEGORY         => 'Κατηγορία',
	NS_CATEGORY_TALK    => 'Συζήτηση_κατηγορίας',
];

$namespaceAliases = [
	'Μέσον'            => NS_MEDIA,
	'$1_συζήτηση'      => NS_PROJECT_TALK,
	'Εικόνα'           => NS_FILE,
	'Συζήτηση_εικόνας' => NS_FILE_TALK,
];

$specialPageAliases = [
	'Activeusers'               => [ 'ΕνεργοίΧρήστες' ],
	'Allmessages'               => [ 'ΌλαΤαΜηνύματα' ],
	'AllMyUploads'              => [ 'ΌλαΤαΑρχείαΜου' ],
	'Allpages'                  => [ 'ΌλεςΟιΣελίδες' ],
	'Ancientpages'              => [ 'ΑρχαίεςΣελίδες' ],
	'Badtitle'                  => [ 'ΚακόςΤίτλος' ],
	'Blankpage'                 => [ 'ΚενήΣελίδα' ],
	'Block'                     => [ 'Φραγή', 'ΦραγήIP', 'ΦραγήΧρήστη' ],
	'Booksources'               => [ 'ΠηγέςΒιβλίων' ],
	'BrokenRedirects'           => [ 'ΚατεστραμμένεςΑνακατευθύνσεις' ],
	'Categories'                => [ 'Κατηγορίες' ],
	'ChangeEmail'               => [ 'ΑλλαγήEmail' ],
	'ChangePassword'            => [ 'ΑλλαγήΚωδικού', 'ΑρχικοποίησηΠάσου', 'ΑρχικοποίησηΚωδικού' ],
	'ComparePages'              => [ 'ΣύγκρισηΣελίδων' ],
	'Confirmemail'              => [ 'ΕπιβεβαίωσηEmail' ],
	'Contributions'             => [ 'Συνεισφορές' ],
	'CreateAccount'             => [ 'ΔημιουργίαΛογαριασμού' ],
	'Deadendpages'              => [ 'ΑδιέξοδεςΣελίδες' ],
	'DeletedContributions'      => [ 'ΔιαγραμμένεςΣυνεισφορές' ],
	'Diff'                      => [ 'Διαφορά' ],
	'DoubleRedirects'           => [ 'ΔιπλέςΑνακατευθύνσεις' ],
	'EditWatchlist'             => [ 'ΕπεξεργασίαΛίσταςΠαρακολούθησης' ],
	'Emailuser'                 => [ 'EmailΧρήστη' ],
	'ExpandTemplates'           => [ 'ΕπέκτασηΠροτύπων' ],
	'Export'                    => [ 'Εξαγωγή' ],
	'Fewestrevisions'           => [ 'ΛιγότεροΕπεξεργασίες' ],
	'FileDuplicateSearch'       => [ 'ΑναζήτησηΔιπλώνΑρχείων' ],
	'Filepath'                  => [ 'ΔιαδρομήΑρχείου' ],
	'Import'                    => [ 'Εισαγωγή' ],
	'Invalidateemail'           => [ 'ΑκύρωσηEmail' ],
	'BlockList'                 => [ 'ΚατάλογοςΦραγών', 'ΦραγώνΚατάλογος', 'ΚατάλογοςΦραγώνIP' ],
	'LinkSearch'                => [ 'ΣυνδέσμουΑναζήτηση' ],
	'Listadmins'                => [ 'ΚατάλογοςΔιαχειριστών' ],
	'Listbots'                  => [ 'ΚατάλογοςBot' ],
	'Listfiles'                 => [ 'ΚατάλογοςΑρχείων', 'ΑρχείαΚατάλογος', 'ΚατάλογοςΕικόνων' ],
	'Listgrouprights'           => [ 'ΚατάλογοςΔικαιωμάτωνΧρηστών' ],
	'Listredirects'             => [ 'ΚατάλογοςΑνακατευθύνσεων' ],
	'Listusers'                 => [ 'ΚατάλογοςΧρηστών', 'ΧρήστεςΚατάλογος' ],
	'Lockdb'                    => [ 'ΚλείδωμαΒάσης' ],
	'Log'                       => [ 'Μητρώο', 'Μητρώα' ],
	'Lonelypages'               => [ 'ΜόνεςΣελίδες', 'ΟρφανέςΣελίδες' ],
	'Longpages'                 => [ 'ΜεγάλεςΣελίδες' ],
	'MergeHistory'              => [ 'ΣυγχώνευσηΙστορικού' ],
	'MIMEsearch'                => [ 'ΑναζήτησηMIME' ],
	'Mostcategories'            => [ 'ΠερισσότεροΚατηγορίες' ],
	'Mostimages'                => [ 'ΠερισσότεροΣυνδεδεμέναΑρχεία', 'ΠερισσότεροΑρχεία' ],
	'Mostlinked'                => [ 'ΠερισσότεροΣυνδεδεμένεςΣελίδες', 'ΠερισσότεροΣυνδεδεμένες' ],
	'Mostlinkedcategories'      => [ 'ΠερισσότεροΣυνδεδεμένεςΚατηγορίες', 'ΠερισσότεροΧρησιμοποιημένεςΚατηγορίες' ],
	'Mostlinkedtemplates'       => [ 'ΠερισσότεροΣυνδεδεμέναΠρότυπα', 'ΠερισσότεροΧρησιμοποιημέναΠρότυπα' ],
	'Mostrevisions'             => [ 'ΠερισσότεροΕπεξεργασίες' ],
	'Movepage'                  => [ 'ΜετακίνησηΣελίδας' ],
	'Mycontributions'           => [ 'ΟιΣυνεισφορέςΜου' ],
	'MyLanguage'                => [ 'ΗΓλώσσαΜου' ],
	'Mypage'                    => [ 'ΗΣελίδαΜου' ],
	'Mytalk'                    => [ 'ΗΣυζήτησήΜου' ],
	'Myuploads'                 => [ 'ΤαΑρχείαΜου', 'ΤαΑνεβάσματάΜου', 'ΟιΕπιφορτώσειςΜου' ],
	'Newimages'                 => [ 'ΝέαΑρχεία', 'ΝέεςΕικόνες' ],
	'Newpages'                  => [ 'ΝέεςΣελίδες' ],
	'Preferences'               => [ 'Προτιμήσεις' ],
	'Prefixindex'               => [ 'ΕυρετήριοΠροθεμάτων' ],
	'Protectedpages'            => [ 'ΠροστατευμένεςΣελίδες' ],
	'Protectedtitles'           => [ 'ΠροστατευμένοιΤίτλοι' ],
	'Randompage'                => [ 'Τυχαία', 'ΤυχαίαΣελίδα', 'Τυχαίο' ],
	'RandomInCategory'          => [ 'ΤυχαίαΣτηνΚατηγορία', 'ΤυχαίοΣτηνΚατηγορία' ],
	'Randomredirect'            => [ 'ΤυχαίαΑνακατεύθυνση' ],
	'Recentchanges'             => [ 'ΠρόσφατεςΑλλαγές' ],
	'Recentchangeslinked'       => [ 'ΣυνδεδεμένεςΠρόσφατεςΑλλαγές', 'ΣχετικέςΑλλαγές' ],
	'Redirect'                  => [ 'Ανακατεύθυνση' ],
	'Revisiondelete'            => [ 'ΔιαγραφήΈκδοσης' ],
	'Search'                    => [ 'Αναζήτηση' ],
	'Shortpages'                => [ 'ΜικρέςΣελίδες' ],
	'Specialpages'              => [ 'ΕιδικέςΣελίδες' ],
	'Statistics'                => [ 'Στατιστικά' ],
	'Tags'                      => [ 'Ετικέτες' ],
	'TrackingCategories'        => [ 'ΚατηγορίεςΑνίχνευσης' ],
	'Uncategorizedcategories'   => [ 'ΑκατηγοριοποίητεςΚατηγορίες' ],
	'Uncategorizedimages'       => [ 'ΑκατηγοριοποίηταΑρχεία', 'ΑκατηγοριοποίητεςΕικόνες' ],
	'Uncategorizedpages'        => [ 'ΑκατηγοριοποίητεςΣελίδες' ],
	'Uncategorizedtemplates'    => [ 'ΑκατηγοριοποίηταΠρότυπα' ],
	'Undelete'                  => [ 'ΑναίρεσηΔιαγραφής' ],
	'Unlockdb'                  => [ 'ΞεκλείδωμαΒάσης' ],
	'Unusedcategories'          => [ 'ΑχρησιμοποίητεςΚατηγορίες' ],
	'Unusedimages'              => [ 'ΑχρησιμοποίηταΑρχεία' ],
	'Unusedtemplates'           => [ 'ΜηΧρησιμοποιούμεναΠρότυπα' ],
	'Unwatchedpages'            => [ 'ΜηΠαρακολουθούμενεςΣελίδες' ],
	'Upload'                    => [ 'Ανέβασμα', 'Επιφόρτωση' ],
	'Userlogin'                 => [ 'ΣύνδεσηΧρήστη' ],
	'Userlogout'                => [ 'ΑποσύνδεσηΧρήστη' ],
	'Userrights'                => [ 'ΔικαιώματαΧρηστών' ],
	'Version'                   => [ 'Έκδοση' ],
	'Wantedcategories'          => [ 'ΕπιθυμητέςΚατηγορίες' ],
	'Wantedfiles'               => [ 'ΕπιθυμητάΑρχεία' ],
	'Wantedpages'               => [ 'ΕπιθυμητέςΣελίδες', 'ΣπασμένοιΣύνδεσμοι' ],
	'Wantedtemplates'           => [ 'ΕπιθυμητάΠρότυπα' ],
	'Watchlist'                 => [ 'ΛίσταΠαρακολούθησης' ],
	'Whatlinkshere'             => [ 'ΤιΣυνδέειΕδώ' ],
	'Withoutinterwiki'          => [ 'ΧωρίςInterwiki' ],
];

$magicWords = [
	'redirect'                  => [ '0', '#ΑΝΑΚΑΤΕΥΘΥΝΣΗ', '#REDIRECT' ],
	'notoc'                     => [ '0', '__ΧΩΡΙΣΠΠ__', '__ΧΩΡΙΣΠΙΝΑΚΑΠΕΡΙΕΧΟΜΕΝΩΝ__', '__NOTOC__' ],
	'nogallery'                 => [ '0', '__ΧΩΡΙΣΠΙΝΑΚΟΘΗΚΗ__', '__NOGALLERY__' ],
	'forcetoc'                  => [ '0', '__ΜΕΠΠ__', '__ΜΕΠΙΝΑΚΑΠΕΡΙΕΧΟΜΕΝΩΝ__', '__FORCETOC__' ],
	'toc'                       => [ '0', '__ΠΠ__', '__ΠΙΝΑΚΑΣΠΕΡΙΕΧΟΜΕΝΩΝ__', '__TOC__' ],
	'noeditsection'             => [ '0', '__ΧΩΡΙΣΕΠΕΞΕΝΟΤ__', '__ΧΩΡΙΣΕΠΕΞΕΡΓΑΣΙΑΕΝΟΤΗΤΩΝ__', '__NOEDITSECTION__' ],
	'currentmonth'              => [ '1', 'ΤΡΕΧΩΝΜΗΝΑΣ', 'ΤΡΕΧΩΝΜΗΝΑΣ2', 'CURRENTMONTH', 'CURRENTMONTH2' ],
	'currentmonth1'             => [ '1', 'ΤΡΕΧΩΝΜΗΝΑΣ1', 'CURRENTMONTH1' ],
	'currentmonthname'          => [ '1', 'ΤΡΕΧΩΝΜΗΝΑΣΟΝΟΜΑ', 'CURRENTMONTHNAME' ],
	'currentmonthnamegen'       => [ '1', 'ΤΡΕΧΩΝΜΗΝΑΣΓΕΝΙΚΗ', 'CURRENTMONTHNAMEGEN' ],
	'currentmonthabbrev'        => [ '1', 'ΤΡΕΧΩΝΜΗΝΑΣΣΥΝΤ', 'CURRENTMONTHABBREV' ],
	'currentday'                => [ '1', 'ΤΡΕΧΟΥΣΑΜΕΡΑ', 'CURRENTDAY' ],
	'currentday2'               => [ '1', 'ΤΡΕΧΟΥΣΑΜΕΡΑ2', 'CURRENTDAY2' ],
	'currentdayname'            => [ '1', 'ΤΡΕΧΟΥΣΑΜΕΡΑΟΝΟΜΑ', 'CURRENTDAYNAME' ],
	'currentyear'               => [ '1', 'ΤΡΕΧΟΝΕΤΟΣ', 'CURRENTYEAR' ],
	'currenttime'               => [ '1', 'ΤΡΕΧΩΝΧΡΟΝΟΣ', 'CURRENTTIME' ],
	'currenthour'               => [ '1', 'ΤΡΕΧΟΥΣΑΩΡΑ', 'CURRENTHOUR' ],
	'localmonth'                => [ '1', 'ΤΟΠΙΚΟΣΜΗΝΑΣ', 'LOCALMONTH', 'LOCALMONTH2' ],
	'localmonth1'               => [ '1', 'ΤΟΠΙΚΟΣΜΗΝΑΣ1', 'LOCALMONTH1' ],
	'localmonthname'            => [ '1', 'ΤΟΠΙΚΟΣΜΗΝΑΣΟΝΟΜΑ', 'LOCALMONTHNAME' ],
	'localmonthnamegen'         => [ '1', 'ΤΟΠΙΚΟΣΜΗΝΑΣΓΕΝΙΚΗ', 'LOCALMONTHNAMEGEN' ],
	'localmonthabbrev'          => [ '1', 'ΤΟΠΙΚΟΣΜΗΝΑΣΣΥΝΤ', 'LOCALMONTHABBREV' ],
	'localday'                  => [ '1', 'ΤΟΠΙΚΗΜΕΡΑ', 'LOCALDAY' ],
	'localday2'                 => [ '1', 'ΤΟΠΙΚΗΜΕΡΑ2', 'LOCALDAY2' ],
	'localdayname'              => [ '1', 'ΤΟΠΙΚΗΜΕΡΑΟΝΟΜΑ', 'LOCALDAYNAME' ],
	'localyear'                 => [ '1', 'ΤΟΠΙΚΟΕΤΟΣ', 'LOCALYEAR' ],
	'localtime'                 => [ '1', 'ΤΟΠΙΚΟΣΧΡΟΝΟΣ', 'LOCALTIME' ],
	'localhour'                 => [ '1', 'ΤΟΠΙΚΗΩΡΑ', 'LOCALHOUR' ],
	'numberofpages'             => [ '1', 'ΑΡΙΘΜΟΣΣΕΛΙΔΩΝ', 'NUMBEROFPAGES' ],
	'numberofarticles'          => [ '1', 'ΑΡΙΘΜΟΣΑΡΘΡΩΝ', 'NUMBEROFARTICLES' ],
	'numberoffiles'             => [ '1', 'ΑΡΙΘΜΟΣΑΡΧΕΙΩΝ', 'NUMBEROFFILES' ],
	'numberofusers'             => [ '1', 'ΑΡΙΘΜΟΣΧΡΗΣΤΩΝ', 'NUMBEROFUSERS' ],
	'numberofactiveusers'       => [ '1', 'ΕΝΕΡΓΟΙΧΡΗΣΤΕΣ', 'ΑΡΙΘΜΟΣΕΝΕΡΓΩΝΧΡΗΣΤΩΝ', 'NUMBEROFACTIVEUSERS' ],
	'numberofedits'             => [ '1', 'ΑΡΙΘΜΟΣΕΠΕΞΕΡΓΑΣΙΩΝ', 'NUMBEROFEDITS' ],
	'pagename'                  => [ '1', 'ΟΝΟΜΑΣΕΛΙΔΑΣ', 'PAGENAME' ],
	'pagenamee'                 => [ '1', 'ΟΝΟΜΑΣΕΛΙΔΑΣΚ', 'PAGENAMEE' ],
	'namespace'                 => [ '1', 'ΠΕΡΙΟΧΗ', 'NAMESPACE' ],
	'namespacee'                => [ '1', 'ΠΕΡΙΟΧΗΚ', 'NAMESPACEE' ],
	'namespacenumber'           => [ '1', 'ΑΡΙΘΜΟΣΟΝΟΜΑΤΟΣΧΩΡΟΥ', 'ΑΡΙΘΜΟΣΟΝΟΜΑΤΟΧΩΡΟΥ', 'NAMESPACENUMBER' ],
	'talkspace'                 => [ '1', 'ΠΕΡΙΟΧΗΣΥΖΗΤΗΣΕΩΝ', 'TALKSPACE' ],
	'talkspacee'                => [ '1', 'ΠΕΡΙΟΧΗΣΥΖΗΤΗΣΕΩΝΚ', 'TALKSPACEE' ],
	'subjectspace'              => [ '1', 'ΠΕΡΙΟΧΗΘΕΜΑΤΩΝ', 'SUBJECTSPACE', 'ARTICLESPACE' ],
	'subjectspacee'             => [ '1', 'ΠΕΡΙΟΧΗΘΕΜΑΤΩΝΚ', 'SUBJECTSPACEE', 'ARTICLESPACEE' ],
	'fullpagename'              => [ '1', 'ΠΛΗΡΕΣΟΝΟΜΑΣΕΛΙΔΑΣ', 'FULLPAGENAME' ],
	'fullpagenamee'             => [ '1', 'ΠΛΗΡΕΣΟΝΟΜΑΣΕΛΙΔΑΣΚ', 'FULLPAGENAMEE' ],
	'subpagename'               => [ '1', 'ΟΝΟΜΑΥΠΟΣΕΛΙΔΑΣ', 'SUBPAGENAME' ],
	'subpagenamee'              => [ '1', 'ΟΝΟΜΑΥΠΟΣΕΛΙΔΑΣΚ', 'SUBPAGENAMEE' ],
	'basepagename'              => [ '1', 'ΒΑΣΗΟΝΟΜΑΤΟΣΣΕΛΙΔΑΣ', 'BASEPAGENAME' ],
	'basepagenamee'             => [ '1', 'ΒΑΣΗΟΝΟΜΑΤΟΣΣΕΛΙΔΑΣΚ', 'BASEPAGENAMEE' ],
	'talkpagename'              => [ '1', 'ΟΝΟΜΑΣΕΛΙΔΑΣΣΥΖΗΤΗΣΕΩΝ', 'TALKPAGENAME' ],
	'talkpagenamee'             => [ '1', 'ΟΝΟΜΑΣΕΛΙΔΑΣΣΥΖΗΤΗΣΕΩΝΚ', 'TALKPAGENAMEE' ],
	'subjectpagename'           => [ '1', 'ΟΝΟΜΑΣΕΛΙΔΑΣΘΕΜΑΤΟΣ', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ],
	'subjectpagenamee'          => [ '1', 'ΟΝΟΜΑΣΕΛΙΔΑΣΘΕΜΑΤΟΣΚ', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ],
	'msg'                       => [ '0', 'ΚΕΙΜΕΝΟ:', 'MSG:' ],
	'subst'                     => [ '0', 'ΑΛΛΑΓΗ:', 'SUBST:' ],
	'msgnw'                     => [ '0', 'ΑΠΛΟΚΕΙΜΕΝΟ:', 'MSGNW:' ],
	'img_thumbnail'             => [ '1', 'μικρογραφία', 'μινιατούρα', 'thumb', 'thumbnail' ],
	'img_manualthumb'           => [ '1', 'μικρογραφία=$1', 'μινιατούρα=$1', 'thumbnail=$1', 'thumb=$1' ],
	'img_right'                 => [ '1', 'δεξιά', 'right' ],
	'img_left'                  => [ '1', 'αριστερά', 'left' ],
	'img_none'                  => [ '1', 'καθόλου', 'none' ],
	'img_width'                 => [ '1', '$1εσ', '$1px' ],
	'img_center'                => [ '1', 'κέντρο', 'center', 'centre' ],
	'img_framed'                => [ '1', 'με-πλαίσιο', 'frame', 'framed', 'enframed' ],
	'img_frameless'             => [ '1', 'χωρίς-πλαίσιο', 'frameless' ],
	'img_page'                  => [ '1', 'σελίδα=$1', 'σελίδα_$1', 'page=$1', 'page $1' ],
	'img_upright'               => [ '1', 'κατακόρυφα', 'κατακόρυφα=$1', 'κατακόρυφα_$1', 'upright', 'upright=$1', 'upright $1' ],
	'img_border'                => [ '1', 'πλαίσιο', 'border' ],
	'img_baseline'              => [ '1', 'γραμμήβάσης', 'baseline' ],
	'img_sub'                   => [ '1', 'δείκτης', 'sub' ],
	'img_super'                 => [ '1', 'εκθέτης', 'super', 'sup' ],
	'img_top'                   => [ '1', 'άνω', 'top' ],
	'img_text_top'              => [ '1', 'πάνω-από-το-κείμενο', 'text-top' ],
	'img_middle'                => [ '1', 'μέσο', 'middle' ],
	'img_bottom'                => [ '1', 'κάτω', 'bottom' ],
	'img_text_bottom'           => [ '1', 'κάτω-από-το-κείμενο', 'text-bottom' ],
	'img_link'                  => [ '1', 'σύνδεσμος=$1', 'link=$1' ],
	'img_alt'                   => [ '1', 'εναλλ.=$1', 'alt=$1' ],
	'int'                       => [ '0', 'ΕΣΩΤ:', 'INT:' ],
	'sitename'                  => [ '1', 'ΙΣΤΟΧΩΡΟΣ', 'SITENAME' ],
	'ns'                        => [ '0', 'ΧΟ:', 'ΧΩΡΟΣΟΝΟΜΑΤΩΝ:', 'ΟΧ:', 'ΟΝΟΜΑΤΟΧΩΡΟΣ:', 'NS:' ],
	'localurl'                  => [ '0', 'ΤΟΠΙΚΟURL:', 'LOCALURL:' ],
	'localurle'                 => [ '0', 'ΤΟΠΙΚΟURLΚ:', 'LOCALURLE:' ],
	'server'                    => [ '0', 'ΕΞΥΠΗΡΕΤΗΤΗΣ', 'SERVER' ],
	'servername'                => [ '0', 'ΟΝΟΜΑΕΞΥΠΗΡΕΤΗΤΗ', 'SERVERNAME' ],
	'scriptpath'                => [ '0', 'ΔΙΑΔΡΟΜΗΠΡΟΓΡΑΜΜΑΤΟΣ', 'SCRIPTPATH' ],
	'stylepath'                 => [ '0', 'ΔΙΑΔΡΟΜΗΣΤΥΛ', 'STYLEPATH' ],
	'grammar'                   => [ '0', 'ΓΡΑΜΜΑΤΙΚΗ:', 'GRAMMAR:' ],
	'gender'                    => [ '0', 'ΦΥΛΟ:', 'GENDER:' ],
	'notitleconvert'            => [ '0', '__ΧΩΡΙΣΜΕΤΑΤΡΟΠΗΤΙΤΛΟΥ__', '__NOTITLECONVERT__', '__NOTC__' ],
	'nocontentconvert'          => [ '0', '__ΧΩΡΙΣΜΕΤΑΤΡΟΠΗΠΕΡΙΧΟΜΕΝΟΥ__', '__NOCONTENTCONVERT__', '__NOCC__' ],
	'currentweek'               => [ '1', 'ΤΡΕΧΟΥΣΑΕΒΔΟΜΑΔΑ', 'CURRENTWEEK' ],
	'currentdow'                => [ '1', 'ΤΡΕΧΟΥΣΑΜΕΡΑΕΒΔΟΜΑΔΑΣ', 'CURRENTDOW' ],
	'localweek'                 => [ '1', 'ΤΟΠΙΚΗΕΒΔΟΜΑΔΑ', 'LOCALWEEK' ],
	'localdow'                  => [ '1', 'ΤΟΠΙΚΗΜΕΡΑΕΒΔΟΜΑΔΑΣ', 'LOCALDOW' ],
	'revisionid'                => [ '1', 'ΚΩΔΙΚΟΣΑΛΛΑΓΗΣ', 'REVISIONID' ],
	'revisionday'               => [ '1', 'ΜΕΡΑΑΛΛΑΓΗΣ', 'REVISIONDAY' ],
	'revisionday2'              => [ '1', 'ΜΕΡΑΑΛΛΑΓΗΣ2', 'REVISIONDAY2' ],
	'revisionmonth'             => [ '1', 'ΜΗΝΑΣΑΛΛΑΓΗΣ', 'REVISIONMONTH' ],
	'revisionmonth1'            => [ '1', 'ΜΗΝΑΣΑΝΑΘΕΩΡΗΣΗΣ1', 'REVISIONMONTH1' ],
	'revisionyear'              => [ '1', 'ΕΤΟΣΑΛΛΑΓΗΣ', 'REVISIONYEAR' ],
	'revisiontimestamp'         => [ '1', 'ΧΡΟΝΟΣΗΜΑΝΣΗΑΛΛΑΓΗΣ', 'REVISIONTIMESTAMP' ],
	'revisionuser'              => [ '1', 'ΧΡΗΣΤΗΣΑΝΑΘΕΩΡΗΣΗΣ', 'REVISIONUSER' ],
	'plural'                    => [ '0', 'ΠΛΗΘΥΝΤΙΚΟΣ:', 'PLURAL:' ],
	'fullurl'                   => [ '0', 'ΠΛΗΡΕΣURL:', 'FULLURL:' ],
	'fullurle'                  => [ '0', 'ΠΛΗΡΕΣURLΚ:', 'FULLURLE:' ],
	'canonicalurl'              => [ '0', 'ΚΑΝΟΝΙΚΟURL:', 'CANONICALURL:' ],
	'canonicalurle'             => [ '0', 'ΚΑΝΟΝΙΚΟURLΚ:', 'CANONICALURLE:' ],
	'lcfirst'                   => [ '0', 'ΠΡΩΤΟΠΕΖΟ:', 'LCFIRST:' ],
	'ucfirst'                   => [ '0', 'ΠΡΩΤΟΚΕΦΑΛΑΙΟ:', 'UCFIRST:' ],
	'lc'                        => [ '0', 'ΠΕΖΑ:', 'LC:' ],
	'uc'                        => [ '0', 'ΚΕΦΑΛΑΙΑ:', 'UC:' ],
	'raw'                       => [ '0', 'ΓΥΜΝΑ:', 'RAW:' ],
	'displaytitle'              => [ '1', 'ΔΕΙΞΕΤΙΤΛΟ', 'ΠΡΟΒΟΛΗΤΙΤΛΟΥ', 'DISPLAYTITLE' ],
	'rawsuffix'                 => [ '1', 'Γ', 'R' ],
	'newsectionlink'            => [ '1', '__ΔΕΣΜΟΣΝΕΑΣΕΝΟΤΗΤΑΣ__', '__NEWSECTIONLINK__' ],
	'currentversion'            => [ '1', 'ΤΡΕΧΟΥΣΑΕΚΔΟΣΗ', 'CURRENTVERSION' ],
	'urlencode'                 => [ '0', 'ΚΩΔΙΚΟΠΟΙΗΣΗURL:', 'URLENCODE:' ],
	'anchorencode'              => [ '0', 'ΚΩΔΙΚΟΠΟΙΗΣΗΑΓΚΥΡΑΣ', 'ANCHORENCODE' ],
	'currenttimestamp'          => [ '1', 'ΤΡΕΧΟΥΣΑΧΡΟΝΟΣΗΜΑΝΣΗ', 'CURRENTTIMESTAMP' ],
	'localtimestamp'            => [ '1', 'ΤΟΠΙΚΗΧΡΟΝΟΣΗΜΑΝΣΗ', 'LOCALTIMESTAMP' ],
	'directionmark'             => [ '1', 'ΚΩΔΙΚΟΣΦΟΡΑΣ', 'DIRECTIONMARK', 'DIRMARK' ],
	'language'                  => [ '0', '#ΓΛΩΣΣΑ:', '#LANGUAGE:' ],
	'contentlanguage'           => [ '1', 'ΓΛΩΣΣΑΠΕΡΙΕΧΟΜΕΝΟΥ', 'CONTENTLANGUAGE', 'CONTENTLANG' ],
	'pagesinnamespace'          => [ '1', 'ΣΕΛΙΔΕΣΣΤΗΝΠΕΡΙΟΧΗΟΝΟΜΑΤΩΝ:', 'ΣΕΛΙΔΕΣΣΤΗΝΠΟ:', 'PAGESINNAMESPACE:', 'PAGESINNS:' ],
	'numberofadmins'            => [ '1', 'ΑΡΙΘΜΟΣΔΙΑΧΕΙΡΙΣΤΩΝ', 'NUMBEROFADMINS' ],
	'formatnum'                 => [ '0', 'ΜΟΡΦΟΠΟΙΗΣΗΑΡΙΘΜΟΥ', 'FORMATNUM' ],
	'padleft'                   => [ '0', 'ΑΡΙΣΤΕΡΟΠΑΡΑΓΕΜΙΣΜΑ', 'PADLEFT' ],
	'padright'                  => [ '0', 'ΔΕΞΙΠΑΡΑΓΕΜΙΣΜΑ', 'PADRIGHT' ],
	'special'                   => [ '0', 'λειτουργία', 'special' ],
	'defaultsort'               => [ '1', 'ΠΡΟΚΑΘΟΡΙΣΜΕΝΗΤΑΞΙΝΟΜΗΣΗ:', 'ΚΛΕΙΔΙΠΡΟΚΑΘΟΡΙΣΜΕΝΗΣΤΑΞΙΝΟΜΗΣΗΣ:', 'ΠΡΟΚΑΘΟΡΙΣΜΕΝΗΤΑΞΙΝΟΜΗΣΗΚΑΤΗΓΟΡΙΑΣ:', 'ΠΡΟΚΤΑΞ:', 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ],
	'filepath'                  => [ '0', 'ΔΙΑΔΡΟΜΗΑΡΧΕΙΟΥ:', 'FILEPATH:' ],
	'tag'                       => [ '0', 'ετικέτα', 'tag' ],
	'hiddencat'                 => [ '1', '__ΚΡΥΦΗΚΑΤΗΓΟΡΙΑ__', '__HIDDENCAT__' ],
	'pagesincategory'           => [ '1', 'ΣΕΛΙΔΕΣΣΤΗΝΚΑΤΗΓΟΡΙΑ', 'PAGESINCATEGORY', 'PAGESINCAT' ],
	'pagesize'                  => [ '1', 'ΜΕΓΕΘΟΣΣΕΛΙΔΑΣ', 'PAGESIZE' ],
	'index'                     => [ '1', '__ΕΥΡΕΤΗΡΙΟ__', '__INDEX__' ],
	'noindex'                   => [ '1', '__ΧΩΡΙΣΕΥΡΕΤΗΡΙΟ__', '__NOINDEX__' ],
	'numberingroup'             => [ '1', 'ΟΜΑΔΑΑΡΙΘΜΗΣΗΣ', 'NUMBERINGROUP', 'NUMINGROUP' ],
	'staticredirect'            => [ '1', '__ΣΤΑΤΙΚΗΑΝΑΚΑΤΕΥΘΥΝΣΗ__', '__STATICREDIRECT__' ],
	'protectionlevel'           => [ '1', 'ΕΠΙΠΕΔΟΠΡΟΣΤΑΣΙΑΣ', 'PROTECTIONLEVEL' ],
	'url_path'                  => [ '0', 'ΔΙΑΔΡΟΜΗ', 'PATH' ],
	'url_query'                 => [ '0', 'ΕΡΩΤΗΜΑ', 'QUERY' ],
];

$fallback8bitEncoding = 'iso-8859-7';
$separatorTransformTable = [ ',' => '.', '.' => ',' ];
$linkTrail = '/^([a-zαβγδεζηθικλμνξοπρστυφχψωςΑΒΓΔΕΖΗΘΙΚΛΜΝΞΟΠΡΣΤΥΦΧΨΩάέήίόύώϊϋΐΰΆΈΉΊΌΎΏΪΫ]+)(.*)$/sDu';

$datePreferences = [
	'default',
	'dmy',
	'ISO 8601',
];

$defaultDateFormat = 'dmy';

$datePreferenceMigrationMap = [
	'default',
	'dmy',
	'dmy',
	'dmy'
];

$dateFormats = [
	'dmy time' => 'H:i',
	'dmy date' => 'j xg Y',
	'dmy both' => 'H:i, j xg Y',

	'ISO 8601 time' => 'xnH:xni:xns',
	'ISO 8601 date' => 'xnY-xnm-xnd',
	'ISO 8601 both' => 'xnY-xnm-xnd"T"xnH:xni:xns',
];
