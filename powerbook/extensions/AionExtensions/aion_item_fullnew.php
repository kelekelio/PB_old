<?php
$mysqlserver="mysqlhost";
$mysqlusername="login";
$mysqlpassword="passw";
$link2=mysql_connect($mysqlserver, $mysqlusername, $mysqlpassword) or die ("Error connecting to mysql server: ".mysql_error());

$dbname = 'login';
mysql_select_db($dbname, $link2) or die ("Error selecting specified database on mysql server: ".mysql_error());
mysql_set_charset('utf8', $link2);
header('Content-type: text/html; charset=utf-8');

// extension credits, required by MW //
$wgExtensionCredits['variable'][] = array(
    'path'           => __FILE__,
    'name'           => 'Aion Item Details',
    'author'         => 'Kelekelio',
    'url'            => 'https://aionpowerbook.com',
    'descriptionmsg' => 'Aion Item Details',
    'version'		 => '1.1',
    'license-name' 	 => 'LICENSE',
);
// credits //


$wgHooks['ParserFirstCallInit'][] = 'AionItemDetailsnew';
$wgExtensionMessagesFiles['AionItemDetailsnew'] = __DIR__ . '/aion_item_fullnew.i18n.php';
function AionItemDetailsnew( &$parser ) {
    $parser->setFunctionHook( 'itemdetailsnew', 'AionParserItemDetailsnew' );
    return true;
}




	

function AionParserItemDetailsnew( &$parser, $arg1 ) {
$dbid = $_GET['dbid'];
global $wgOut;
global $wgLang;
$code = $wgLang->getCode();
	
	

	

    $itemquery="
SELECT *
FROM client_items
WHERE id = '$dbid' ";

    $itemresult=mysql_query($itemquery) or die ("Query to get data from items failed: ".mysql_error());




while ($row=mysql_fetch_array($itemresult)) {
        $id=$row["id"];

}	






if ($quality == 'mythic') {
	$bbcolor = '=#c74cff';
}elseif ($quality == 'epic') {
	$bbcolor = '=#f63';
}elseif ($quality == 'unique') {
	$bbcolor = '=#f90';
}elseif ($quality == 'legend') {
	$bbcolor = '=#1699C4';
}elseif ($quality == 'rare') {
	$bbcolor = '=#4AB93B';
}else {
	$bbcolor = '=#ddd';
}



	$wgOut->AddHTML( 'test new' );
	$wgOut->AddHTML( $code );
	

	
    $DisplayTitle = '{{DISPLAYTITLE:' . $id . '}}';														//displaytitle
    return array( $DisplayTitle, 'noparse' => false );				  												//displaytitle, for some reason addWikiText didn't output valid wiki {{DISPLAYTITLE:}}, return works just fine
}