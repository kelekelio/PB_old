<?
header('Content-type: text/html; charset=utf-8');
$wgExtensionCredits['variable'][] = array(
	'path'           => __FILE__,
	'name'           => 'Aion Items',
	'author'         => 'Kelekelio',
	'url'            => 'https://aionpowerbook.com',
	'descriptionmsg' => 'Aion item links',
	'version'		 => '1.0',
	'license-name' 	 => 'LICENSE',
);
 
$wgHooks['ParserFirstCallInit'][] = 'AionaiontestFunction';
$wgExtensionMessagesFiles['Aionaiontest'] = __DIR__ . '/aion_test.i18n.php';
function AionaiontestFunction( &$parser ) {
   $parser->setFunctionHook( 'aiontest', 'AionaiontestParserFunction' );
   return true;
}


function AionaiontestParserFunction( &$parser, $arg1 ) {
 global $wgUser;
 global $wgLang;
 $code = $wgLang->getCode();
 $groups = $wgUser->getGroups();
 
 
 
 if($code == "fr"){
	$lanque = 'LAN_FR';
	$language = 'FR';
} 
elseif($code == "de"){
	$lanque = 'LAN_DE';
	$language = 'DE';
}
elseif($code == "it"){
	$lanque = 'LAN_IT';
	$language = 'IT';
}
elseif($code == "pl"){
	$lanque = 'LAN_PL';
	$language = 'PL';
}
elseif($code == "ko"){
	$lanque = 'body';
	$language = 'KR';
}
elseif($code == "tr"){
	$lanque = 'LAN_TR';
	$language = 'TR';
}
elseif($code == "es"){
	$lanque = 'LAN_ES';
	$language = 'ES';
}
elseif($code == "en"){
	$lanque = 'LAN_US';
	$language = 'US';
}else {
	$lanque = 'LAN_EN';
	$language = 'EN';
}
 
 
 
      
$itemquery="
SELECT  
   i.id      id,
   i.quality quality,
   t.body	KR,
   t.LAN_EN  EN,
   t.LAN_DE  DE,
   t.LAN_FR  FR,
   t.LAN_ES  ES,
   t.LAN_TR  TR,
   t.LAN_IT  IT,
   t.LAN_PL  PL,
   t.LAN_US  US   
FROM items i
LEFT JOIN translation_small t ON t.name = i.description
WHERE i.id = $arg1";
 
$itemresult=mysql_query($itemquery);
 
 
if (in_array("QA", $groups)) {
	$grup = 'test successful';
}else {
	$grup = 'you fucked it';
}
 
while ($itemrow=mysql_fetch_array($itemresult)) {
    $itemid=$itemrow["id"];
	$quality=strtolower($itemrow["quality"]);
    $localization=!empty($itemrow[$language]) ? $itemrow[$language] : $itemrow['KR'];
 
   
 
        $testvar = '<a class="tooltipzy col_' . htmlspecialchars($quality) . '" href="https://aionpowerbook.com/powerbook/Item/' . htmlspecialchars($itemid) . '" tooltipID="' . $itemid . '" tooltiplang="' . $code . '">' . $localization . '</a> groups:' . $grup;    
}
        return array( $testvar, 'noparse' => true, 'isHTML' => true );
}
 
 
// enf of magic word, beginning of data retriving
 
$mysqlserver="serwer1530566.home.pl";
$mysqlusername="20693245_db";
$mysqlpassword="UI0#cuplgVBj";
$link2=mysql_connect($mysqlserver, $mysqlusername, $mysqlpassword);
 
$dbname = '20693245_db';
mysql_select_db($dbname, $link2);    
mysql_set_charset('utf8', $link2);