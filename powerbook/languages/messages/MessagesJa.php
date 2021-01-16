<?php
/** Japanese (日本語)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 */

$datePreferences = [
	'default',
	'nengo',
	'ISO 8601',
];

$defaultDateFormat = 'ja';

$dateFormats = [
	'ja time'    => 'H:i',
	'ja date'    => 'Y年n月j日 (D)',
	'ja both'    => 'Y年n月j日 (D) H:i',

	'nengo time' => 'H:i',
	'nengo date' => 'xtY年n月j日 (D)',
	'nengo both' => 'xtY年n月j日 (D) H:i',
];

$namespaceNames = [
	NS_MEDIA            => 'メディア',
	NS_SPECIAL          => '特別',
	NS_TALK             => 'トーク',
	NS_USER             => '利用者',
	NS_USER_TALK        => '利用者・トーク',
	NS_PROJECT_TALK     => '$1・トーク',
	NS_FILE             => 'ファイル',
	NS_FILE_TALK        => 'ファイル・トーク',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'MediaWiki・トーク',
	NS_TEMPLATE         => 'テンプレート',
	NS_TEMPLATE_TALK    => 'テンプレート・トーク',
	NS_HELP             => 'ヘルプ',
	NS_HELP_TALK        => 'ヘルプ・トーク',
	NS_CATEGORY         => 'カテゴリ',
	NS_CATEGORY_TALK    => 'カテゴリ・トーク',
];

$namespaceAliases = [
	'ノート'           => NS_TALK,
	'利用者‐会話'        => NS_USER_TALK,
	'$1‐ノート'        => NS_PROJECT_TALK,
	'画像'            => NS_FILE,
	'画像‐ノート'        => NS_FILE_TALK,
	'ファイル‐ノート'      => NS_FILE_TALK,
	'MediaWiki‐ノート' => NS_MEDIAWIKI_TALK,
	'Template‐ノート'  => NS_TEMPLATE_TALK,
	'Help‐ノート'      => NS_HELP_TALK,
	'Category‐ノート'  => NS_CATEGORY_TALK
];

$specialPageAliases = [
	'Activeusers'               => [ '活動中の利用者', '活動中の利用者一覧' ],
	'Allmessages'               => [ 'メッセージ一覧', 'システムメッセージの一覧', '表示メッセージの一覧', '全メッセージ' ],
	'AllMyUploads'              => [ '自分の全アップロード' ],
	'Allpages'                  => [ 'ページ一覧', '全ページ' ],
	'Ancientpages'              => [ '更新されていないページ' ],
	'Badtitle'                  => [ '不正なページ名' ],
	'Blankpage'                 => [ '白紙ページ' ],
	'Block'                     => [ '投稿ブロック', 'ブロック' ],
	'Booksources'               => [ '文献資料', '書籍情報源' ],
	'BrokenRedirects'           => [ '迷子のリダイレクト', '壊れたリダイレクト' ],
	'Categories'                => [ 'カテゴリ', 'カテゴリ一覧' ],
	'ChangeEmail'               => [ 'メールアドレスの変更' ],
	'ChangePassword'            => [ 'パスワードの変更', 'パスワード変更', 'パスワード再発行', 'パスワードの再発行' ],
	'ComparePages'              => [ 'ページの比較' ],
	'Confirmemail'              => [ 'メールアドレスの確認' ],
	'Contributions'             => [ '投稿記録' ],
	'CreateAccount'             => [ 'アカウント作成', 'アカウントの作成' ],
	'Deadendpages'              => [ '有効なページへのリンクがないページ', '行き止まりページ' ],
	'DeletedContributions'      => [ '削除された投稿記録', '削除された投稿履歴', '削除歴' ],
	'Diff'                      => [ '差分' ],
	'DoubleRedirects'           => [ '二重リダイレクト', '二重転送' ],
	'EditWatchlist'             => [ 'ウォッチリストの編集', 'ウォッチリスト編集' ],
	'Emailuser'                 => [ 'メール送信', 'ウィキメール' ],
	'ExpandTemplates'           => [ 'テンプレートを展開' ],
	'Export'                    => [ 'データ書き出し', 'データー書き出し', 'エクスポート' ],
	'Fewestrevisions'           => [ '編集履歴の少ないページ', '版の少ない項目', '版の少ないページ' ],
	'FileDuplicateSearch'       => [ '重複ファイル検索' ],
	'Filepath'                  => [ 'パスの取得' ],
	'Import'                    => [ 'データ取り込み', 'データー取り込み', 'インポート' ],
	'Invalidateemail'           => [ 'メール無効化', 'メール無効' ],
	'JavaScriptTest'            => [ 'JavaScriptテスト', 'JavaScript試験' ],
	'BlockList'                 => [ 'ブロック一覧', 'ブロックの一覧' ],
	'LinkSearch'                => [ '外部リンク検索' ],
	'Listadmins'                => [ '管理者一覧' ],
	'Listbots'                  => [ 'ボット一覧', 'Bot一覧' ],
	'Listfiles'                 => [ 'ファイル一覧', 'ファイルリスト' ],
	'Listgrouprights'           => [ '利用者グループ権限', '利用者グループの権限一覧', '利用者権限一覧' ],
	'Listredirects'             => [ 'リダイレクト一覧', 'リダイレクトの一覧', 'リダイレクトリスト' ],
	'ListDuplicatedFiles'       => [ '重複ファイル一覧' ],
	'Listusers'                 => [ '登録利用者一覧', '登録利用者の一覧' ],
	'Lockdb'                    => [ 'データベースロック' ],
	'Log'                       => [ 'ログ', '記録' ],
	'Lonelypages'               => [ '孤立しているページ' ],
	'Longpages'                 => [ '長いページ' ],
	'MediaStatistics'           => [ 'メディア統計' ],
	'MergeHistory'              => [ '履歴統合' ],
	'MIMEsearch'                => [ 'MIME検索', 'MIMEタイプ検索' ],
	'Mostcategories'            => [ 'カテゴリの多いページ', 'カテゴリの多い項目' ],
	'Mostimages'                => [ '被リンクの多いファイル', '使用箇所の多いファイル' ],
	'Mostinterwikis'            => [ 'ウィキ間リンクの多いページ' ],
	'Mostlinked'                => [ '被リンクの多いページ' ],
	'Mostlinkedcategories'      => [ '被リンクの多いカテゴリ' ],
	'Mostlinkedtemplates'       => [ '使用箇所の多いテンプレート', '被リンクの多いテンプレート' ],
	'Mostrevisions'             => [ '編集履歴の多いページ', '版の多い項目', '版の多いページ' ],
	'Movepage'                  => [ '移動', 'ページの移動' ],
	'Mycontributions'           => [ '自分の投稿記録' ],
	'MyLanguage'                => [ '自分の言語' ],
	'Mypage'                    => [ '利用者ページ', 'マイページ', 'マイ・ページ' ],
	'Mytalk'                    => [ 'トークページ', '会話ページ', 'マイトーク', 'マイ・トーク' ],
	'Myuploads'                 => [ '自分のアップロード記録' ],
	'Newimages'                 => [ '新着ファイル', '新しいファイルの一覧', '新着画像展示室' ],
	'Newpages'                  => [ '新しいページ' ],
	'PagesWithProp'             => [ 'プロパティがあるページ' ],
	'PageLanguage'              => [ 'ページ言語' ],
	'PasswordReset'             => [ 'パスワード再設定', 'パスワードの再設定', 'パスワードのリセット', 'パスワードリセット' ],
	'PermanentLink'             => [ '固定リンク', 'パーマリンク' ],
	'Preferences'               => [ '個人設定', 'オプション' ],
	'Prefixindex'               => [ '前方一致ページ一覧', '始点指定ページ一覧' ],
	'Protectedpages'            => [ '保護されているページ' ],
	'Protectedtitles'           => [ '作成保護されているページ名' ],
	'Randompage'                => [ 'おまかせ表示' ],
	'RandomInCategory'          => [ 'カテゴリ内おまかせ表示' ],
	'Randomredirect'            => [ 'おまかせリダイレクト', 'おまかせ転送' ],
	'Recentchanges'             => [ '最近の更新', '最近更新したページ' ],
	'Recentchangeslinked'       => [ '関連ページの更新状況', 'リンク先の更新状況' ],
	'Redirect'                  => [ '転送', 'リダイレクト' ],
	'ResetTokens'               => [ 'トークンの再設定' ],
	'Revisiondelete'            => [ '版指定削除', '特定版削除' ],
	'Search'                    => [ '検索' ],
	'Shortpages'                => [ '短いページ' ],
	'Specialpages'              => [ '特別ページ一覧' ],
	'Statistics'                => [ '統計' ],
	'Tags'                      => [ 'タグ一覧' ],
	'TrackingCategories'        => [ '追跡カテゴリ' ],
	'Unblock'                   => [ 'ブロック解除' ],
	'Uncategorizedcategories'   => [ 'カテゴリ未導入のカテゴリ' ],
	'Uncategorizedimages'       => [ 'カテゴリ未導入のファイル' ],
	'Uncategorizedpages'        => [ 'カテゴリ未導入のページ' ],
	'Uncategorizedtemplates'    => [ 'カテゴリ未導入のテンプレート' ],
	'Undelete'                  => [ '復元', '復帰' ],
	'Unlockdb'                  => [ 'データベースロック解除', 'データベース解除' ],
	'Unusedcategories'          => [ '使われていないカテゴリ', '未使用カテゴリ' ],
	'Unusedimages'              => [ '使われていないファイル', '未使用ファイル', '未使用画像' ],
	'Unusedtemplates'           => [ '使われていないテンプレート', '未使用テンプレート' ],
	'Unwatchedpages'            => [ 'ウォッチされていないページ' ],
	'Upload'                    => [ 'アップロード' ],
	'UploadStash'               => [ '未公開アップロード' ],
	'Userlogin'                 => [ 'ログイン' ],
	'Userlogout'                => [ 'ログアウト' ],
	'Userrights'                => [ '利用者権限', '利用者権限の変更' ],
	'Version'                   => [ 'バージョン情報', 'バージョン' ],
	'Wantedcategories'          => [ '存在しないカテゴリへのリンク', '赤リンクカテゴリ' ],
	'Wantedfiles'               => [ 'ファイルページが存在しないファイル', '赤リンクファイル' ],
	'Wantedpages'               => [ '存在しないページへのリンク', '赤リンク' ],
	'Wantedtemplates'           => [ '存在しないテンプレートへのリンク', '赤リンクテンプレート' ],
	'Watchlist'                 => [ 'ウォッチリスト' ],
	'Whatlinkshere'             => [ 'リンク元' ],
	'Withoutinterwiki'          => [ '言語間リンクを持たないページ', '言語間リンクのないページ' ],
];

$magicWords = [
	'redirect'                  => [ '0', '#転送', '#リダイレクト', '＃転送', '＃リダイレクト', '#REDIRECT' ],
	'notoc'                     => [ '0', '__目次非表示__', '＿＿目次非表示＿＿', '__NOTOC__' ],
	'nogallery'                 => [ '0', '__ギャラリー非表示__', '＿＿ギャラリー非表示＿＿', '__NOGALLERY__' ],
	'forcetoc'                  => [ '0', '__目次強制__', '＿＿目次強制＿＿', '__FORCETOC__' ],
	'toc'                       => [ '0', '__目次__', '＿＿目次＿＿', '__TOC__' ],
	'noeditsection'             => [ '0', '__節編集非表示__', '__セクション編集非表示__', '＿＿セクション編集非表示＿＿', '__NOEDITSECTION__' ],
	'currentmonth'              => [ '1', '現在の月', '協定月', 'CURRENTMONTH', 'CURRENTMONTH2' ],
	'currentmonth1'             => [ '1', '現在の月1', '協定月1', '協定月１', 'CURRENTMONTH1' ],
	'currentmonthname'          => [ '1', '現在の月名', '協定月名', 'CURRENTMONTHNAME' ],
	'currentmonthnamegen'       => [ '1', '現在の月属格', 'CURRENTMONTHNAMEGEN' ],
	'currentmonthabbrev'        => [ '1', '現在の月省略形', '省略協定月', '協定月省略', '協定月省略形', 'CURRENTMONTHABBREV' ],
	'currentday'                => [ '1', '現在の日', '協定日', 'CURRENTDAY' ],
	'currentday2'               => [ '1', '現在の日2', '協定日2', '協定日２', 'CURRENTDAY2' ],
	'currentdayname'            => [ '1', '現在の曜日名', '協定曜日', 'CURRENTDAYNAME' ],
	'currentyear'               => [ '1', '現在の年', '協定年', 'CURRENTYEAR' ],
	'currenttime'               => [ '1', '現在の時刻', '協定時間', '協定時刻', 'CURRENTTIME' ],
	'currenthour'               => [ '1', '現在の時', '協定時', 'CURRENTHOUR' ],
	'localmonth'                => [ '1', '地方時の月', '現地月', 'LOCALMONTH', 'LOCALMONTH2' ],
	'localmonth1'               => [ '1', '地方時の月1', '現地月1', '現地月１', 'LOCALMONTH1' ],
	'localmonthname'            => [ '1', '地方時の月名1', '現地月名', 'LOCALMONTHNAME' ],
	'localmonthnamegen'         => [ '1', '地方時の月属格', 'LOCALMONTHNAMEGEN' ],
	'localmonthabbrev'          => [ '1', '地方時の月省略形', '省略現地月', 'LOCALMONTHABBREV' ],
	'localday'                  => [ '1', '地方時の日', '現地日', 'ローカルデイ', 'LOCALDAY' ],
	'localday2'                 => [ '1', '地方時の日2', '現地日2', '現地日２', 'LOCALDAY2' ],
	'localdayname'              => [ '1', '地方時の曜日名', '現地曜日', 'ローカルデイネーム', 'LOCALDAYNAME' ],
	'localyear'                 => [ '1', '地方時の年', '現地年', 'ローカルイヤー', 'LOCALYEAR' ],
	'localtime'                 => [ '1', '地方時の時刻', '現地時間', 'ローカルタイム', 'LOCALTIME' ],
	'localhour'                 => [ '1', '地方時の時', '現地時', 'LOCALHOUR' ],
	'numberofpages'             => [ '1', 'ページ数', 'NUMBEROFPAGES' ],
	'numberofarticles'          => [ '1', '記事数', 'NUMBEROFARTICLES' ],
	'numberoffiles'             => [ '1', 'ファイル数', 'NUMBEROFFILES' ],
	'numberofusers'             => [ '1', '利用者数', 'NUMBEROFUSERS' ],
	'numberofactiveusers'       => [ '1', '活動利用者数', '有効な利用者数', '有効利用者数', 'NUMBEROFACTIVEUSERS' ],
	'numberofedits'             => [ '1', '編集回数', 'NUMBEROFEDITS' ],
	'pagename'                  => [ '1', 'ページ名', 'PAGENAME' ],
	'pagenamee'                 => [ '1', 'ページ名E', 'ページ名Ｅ', 'PAGENAMEE' ],
	'namespace'                 => [ '1', '名前空間', 'NAMESPACE' ],
	'namespacee'                => [ '1', '名前空間E', '名前空間Ｅ', 'NAMESPACEE' ],
	'namespacenumber'           => [ '1', '名前空間番号', 'NAMESPACENUMBER' ],
	'talkspace'                 => [ '1', 'トーク空間', 'ノート空間', '会話空間', 'トークスペース', 'TALKSPACE' ],
	'talkspacee'                => [ '1', 'トーク空間E', 'トーク空間Ｅ', 'ノート空間E', '会話空間E', 'ノート空間Ｅ', '会話空間Ｅ', 'トークスペースE', 'トークスペースＥ', 'TALKSPACEE' ],
	'subjectspace'              => [ '1', '主空間', '標準空間', '記事空間', 'SUBJECTSPACE', 'ARTICLESPACE' ],
	'subjectspacee'             => [ '1', '主空間E', '標準空間E', '標準空間Ｅ', '記事空間E', '記事空間Ｅ', 'SUBJECTSPACEE', 'ARTICLESPACEE' ],
	'fullpagename'              => [ '1', '完全なページ名', 'フルページ名', '完全な記事名', '完全記事名', 'FULLPAGENAME' ],
	'fullpagenamee'             => [ '1', '完全なページ名E', 'フルページ名E', 'フルページ名Ｅ', '完全なページ名Ｅ', 'FULLPAGENAMEE' ],
	'subpagename'               => [ '1', 'サブページ名', '下位ページ名', 'SUBPAGENAME' ],
	'subpagenamee'              => [ '1', 'サブページ名E', 'サブページ名Ｅ', '下位ページ名E', '下位ページ名Ｅ', 'SUBPAGENAMEE' ],
	'rootpagename'              => [ '1', 'ルートページ名', 'ROOTPAGENAME' ],
	'rootpagenamee'             => [ '1', 'ルートページ名E', 'ルートページ名Ｅ', 'ROOTPAGENAMEE' ],
	'basepagename'              => [ '1', '親ページ名', 'BASEPAGENAME' ],
	'basepagenamee'             => [ '1', '親ページ名E', '親ページ名Ｅ', 'BASEPAGENAMEE' ],
	'talkpagename'              => [ '1', 'トークページ名', '会話ページ名', 'TALKPAGENAME' ],
	'talkpagenamee'             => [ '1', 'トークページ名E', '会話ページ名E', '会話ページ名Ｅ', 'トークページ名Ｅ', 'TALKPAGENAMEE' ],
	'subjectpagename'           => [ '1', '主ページ名', '記事ページ名', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ],
	'subjectpagenamee'          => [ '1', '主ページ名E', '記事ページ名E', '主ページ名Ｅ', '記事ページ名Ｅ', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ],
	'msg'                       => [ '0', 'メッセージ:', 'MSG:' ],
	'subst'                     => [ '0', '展開:', '展開：', 'SUBST:' ],
	'safesubst'                 => [ '0', '安全展開:', 'SAFESUBST:' ],
	'msgnw'                     => [ '0', 'ウィキ無効メッセージ:', 'MSGNW:' ],
	'img_thumbnail'             => [ '1', 'サムネイル', 'thumb', 'thumbnail' ],
	'img_manualthumb'           => [ '1', '代替画像=$1', 'サムネイル=$1', 'thumbnail=$1', 'thumb=$1' ],
	'img_right'                 => [ '1', '右', 'right' ],
	'img_left'                  => [ '1', '左', 'left' ],
	'img_none'                  => [ '1', 'なし', '無し', 'none' ],
	'img_width'                 => [ '1', '$1ピクセル', '$1px' ],
	'img_center'                => [ '1', '中央', 'center', 'centre' ],
	'img_framed'                => [ '1', 'フレーム', 'frame', 'framed', 'enframed' ],
	'img_frameless'             => [ '1', 'フレームなし', 'frameless' ],
	'img_page'                  => [ '1', 'ページ=$1', 'ページ $1', 'page=$1', 'page $1' ],
	'img_upright'               => [ '1', '右上', 'upright', 'upright=$1', 'upright $1' ],
	'img_border'                => [ '1', '境界', 'ボーダー', 'border' ],
	'img_baseline'              => [ '1', 'ベースライン', '下線', 'baseline' ],
	'img_sub'                   => [ '1', '下付き', 'sub' ],
	'img_super'                 => [ '1', '上付き', 'super', 'sup' ],
	'img_top'                   => [ '1', '上端', 'top' ],
	'img_text_top'              => [ '1', '文上端', 'text-top' ],
	'img_middle'                => [ '1', '中心', 'middle' ],
	'img_bottom'                => [ '1', '下端', 'bottom' ],
	'img_text_bottom'           => [ '1', '文下端', 'text-bottom' ],
	'img_link'                  => [ '1', 'リンク=$1', 'link=$1' ],
	'img_alt'                   => [ '1', '代替文=$1', 'alt=$1' ],
	'int'                       => [ '0', 'インターフェース:', 'インタ:', 'インターフェース：', 'インタ：', 'インターフェイス:', 'インターフェイス：', 'INT:' ],
	'sitename'                  => [ '1', 'サイト名', 'サイトネーム', 'SITENAME' ],
	'ns'                        => [ '0', '名前空間:', '名前空間：', '名空:', '名空：', 'NS:' ],
	'nse'                       => [ '0', '名前空間E:', 'NSE:' ],
	'localurl'                  => [ '0', 'ローカルURL:', 'ローカルＵＲＬ：', 'LOCALURL:' ],
	'localurle'                 => [ '0', 'ローカルURLE:', 'ローカルＵＲＬＥ：', 'LOCALURLE:' ],
	'articlepath'               => [ '0', '記事パス', 'ARTICLEPATH' ],
	'pageid'                    => [ '0', 'ページID', 'ページＩＤ', 'PAGEID' ],
	'server'                    => [ '0', 'サーバー', 'サーバ', 'SERVER' ],
	'servername'                => [ '0', 'サーバー名', 'サーバーネーム', 'サーバ名', 'サーバネーム', 'SERVERNAME' ],
	'scriptpath'                => [ '0', 'スクリプトパス', 'SCRIPTPATH' ],
	'stylepath'                 => [ '0', 'スタイルパス', 'STYLEPATH' ],
	'grammar'                   => [ '0', '文法:', 'GRAMMAR:' ],
	'gender'                    => [ '0', '性別:', '性別：', 'GENDER:' ],
	'notitleconvert'            => [ '0', '__タイトル変換無効__', '__タイトルコンバート拒否__', '＿＿タイトルコンバート拒否＿＿', '__タイトル非表示__', '__NOTITLECONVERT__', '__NOTC__' ],
	'nocontentconvert'          => [ '0', '__内容変換無効__', '__内容変換抑制__', '＿＿内容変換抑制＿＿', '__NOCONTENTCONVERT__', '__NOCC__' ],
	'currentweek'               => [ '1', '現在の週', 'CURRENTWEEK' ],
	'currentdow'                => [ '1', '現在の曜日番号', 'CURRENTDOW' ],
	'localweek'                 => [ '1', '地方時の週', '現地週', 'ローカルウィーク', 'LOCALWEEK' ],
	'localdow'                  => [ '1', '地方時の曜日番号', 'LOCALDOW' ],
	'revisionid'                => [ '1', '版のID', 'リビジョンID', '差分ID', 'リビジョンＩＤ', '差分ＩＤ', 'REVISIONID' ],
	'revisionday'               => [ '1', '版の日', 'リビジョン日', '差分日', 'REVISIONDAY' ],
	'revisionday2'              => [ '1', '版の日2', 'リビジョン日2', '差分日2', 'リビジョン日２', '差分日２', 'REVISIONDAY2' ],
	'revisionmonth'             => [ '1', '版の月', 'リビジョン月', '差分月', 'REVISIONMONTH' ],
	'revisionmonth1'            => [ '1', '版の月1', 'REVISIONMONTH1' ],
	'revisionyear'              => [ '1', '版の年', 'リビジョン年', '差分年', 'REVISIONYEAR' ],
	'revisiontimestamp'         => [ '1', '版のタイムスタンプ', 'リビジョンタイムスタンプ', 'REVISIONTIMESTAMP' ],
	'revisionuser'              => [ '1', '版の利用者', 'リビジョンユーザー', 'リビジョンユーザ', 'リビジョン利用者', '差分利用者', 'REVISIONUSER' ],
	'plural'                    => [ '0', '複数:', '複数：', 'PLURAL:' ],
	'fullurl'                   => [ '0', '完全なURL:', 'フルURL:', '完全なＵＲＬ：', 'フルＵＲＬ：', 'FULLURL:' ],
	'fullurle'                  => [ '0', '完全なURLE:', 'フルURLE:', '完全なＵＲＬＥ：', 'フルＵＲＬＥ：', 'FULLURLE:' ],
	'lcfirst'                   => [ '0', '先頭小文字:', 'LCFIRST:' ],
	'ucfirst'                   => [ '0', '先頭大文字:', 'UCFIRST:' ],
	'lc'                        => [ '0', '小文字:', 'LC:' ],
	'uc'                        => [ '0', '大文字:', 'UC:' ],
	'raw'                       => [ '0', '生:', 'RAW:' ],
	'displaytitle'              => [ '1', '表示タイトル:', 'DISPLAYTITLE' ],
	'rawsuffix'                 => [ '1', '生', 'R' ],
	'newsectionlink'            => [ '1', '__新しい節リンク__', '__新しいセクションリンク__', '__新セクションリンク__', '＿＿新しいセクションリンク＿＿', '＿＿新セクションリンク＿＿', '__NEWSECTIONLINK__' ],
	'nonewsectionlink'          => [ '1', '__新しい節リンク非表示__', '__新しいセクションリンク非表示__', '＿＿新しいセクションリンク非表示＿＿', '__新セクションリンク非表示__', '＿＿新セクションリンク非表示＿＿', '__NONEWSECTIONLINK__' ],
	'currentversion'            => [ '1', '現在のバージョン', 'ウィキバージョン', 'MediaWikiバージョン', 'メディアウィキバージョン', 'CURRENTVERSION' ],
	'urlencode'                 => [ '0', 'URLエンコード:', 'ＵＲＬエンコード：', 'URLENCODE:' ],
	'anchorencode'              => [ '0', 'アンカー用エンコード', 'ANCHORENCODE' ],
	'currenttimestamp'          => [ '1', '現在のタイムスタンプ', '協定タイムスタンプ', 'CURRENTTIMESTAMP' ],
	'localtimestamp'            => [ '1', '地方時のタイムスタンプ', '現地タイムスタンプ', 'ローカルタイムスタンプ', 'LOCALTIMESTAMP' ],
	'directionmark'             => [ '1', '方向印', 'DIRECTIONMARK', 'DIRMARK' ],
	'language'                  => [ '0', '#言語:', '＃言語：', '#LANGUAGE:' ],
	'contentlanguage'           => [ '1', '内容言語', '記事言語', 'プロジェクト言語', 'CONTENTLANGUAGE', 'CONTENTLANG' ],
	'pagesinnamespace'          => [ '1', '名前空間内ページ数', 'PAGESINNAMESPACE:', 'PAGESINNS:' ],
	'numberofadmins'            => [ '1', '管理者数', 'NUMBEROFADMINS' ],
	'formatnum'                 => [ '0', '数整形', 'FORMATNUM' ],
	'padleft'                   => [ '0', '補充左', 'PADLEFT' ],
	'padright'                  => [ '0', '補充右', 'PADRIGHT' ],
	'special'                   => [ '0', '特別', 'special' ],
	'defaultsort'               => [ '1', 'デフォルトソート:', 'デフォルトソート：', 'デフォルトソートキー:', 'デフォルトカテゴリソート:', 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ],
	'filepath'                  => [ '0', 'ファイルパス:', 'ファイルパス：', 'FILEPATH:' ],
	'tag'                       => [ '0', 'タグ', 'tag' ],
	'hiddencat'                 => [ '1', '__カテゴリ非表示__', '__カテ非表示__', '__非表示カテ__', '__隠しカテゴリ__', '__HIDDENCAT__' ],
	'pagesincategory'           => [ '1', 'カテゴリ内ページ数', 'PAGESINCATEGORY', 'PAGESINCAT' ],
	'pagesize'                  => [ '1', 'ページサイズ', 'PAGESIZE' ],
	'index'                     => [ '1', '__インデックス__', '＿＿インデックス＿＿', '__INDEX__' ],
	'noindex'                   => [ '1', '__インデックス拒否__', '＿＿インデックス拒否＿＿', '__NOINDEX__' ],
	'numberingroup'             => [ '1', 'グループ人数', 'グループ所属人数', 'NUMBERINGROUP', 'NUMINGROUP' ],
	'staticredirect'            => [ '1', '__静的転送__', '__二重転送解消無効__', '＿＿二重転送解消無効＿＿', '__二重転送修正無効__', '＿＿二重転送修正無効＿＿', '__STATICREDIRECT__' ],
	'protectionlevel'           => [ '1', '保護レベル', 'PROTECTIONLEVEL' ],
	'formatdate'                => [ '0', '日付整形', 'formatdate', 'dateformat' ],
	'url_path'                  => [ '0', 'パス', 'PATH' ],
	'url_wiki'                  => [ '0', 'ウィキ', 'WIKI' ],
	'url_query'                 => [ '0', 'クエリ', 'クエリー', 'QUERY' ],
];
