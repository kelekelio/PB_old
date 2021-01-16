<?php

function isClassic() {
	return $_GET['classic'];
}

/* Database connection start */
$servername = "mysqlhost";
$username = "login2";
$password = "passw";
$dbname = "login";
if (isClassic() == '1') {
	$dbname = "kele01_classic";
	$cl = "_cl";
}
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
mysqli_set_charset($conn,"utf8");
/* Database connection end */

function checkitem($name, $lang) 
{

$servername = "mysqlhost";
$username = "login2";
$password = "passw";
$dbname = "login";
	if (isClassic() == '1') {
		$dbname = "kele01_classic";
	}
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
mysqli_set_charset($conn,"utf8");

    $sql = "
           SELECT *
FROM client_items
WHERE name = '$name'
       ";

    $query=mysqli_query($conn, $sql) or die(mysqli_error());
    while ($result = mysqli_fetch_assoc($query)) {
	$id = $result["id"];
	$quality = strtolower($result[quality]);
	$extraicon_name=strtolower($result["icon_name"]);
	}	
	return '<a class="tooltipzy" href="https://aionpowerbook.com/powerbook/Item/' . $id . '" tooltipID="' . $id . '" tooltiplang="' . $lang . '" ><img src="https://aionpowerbook.com/item/icon/' . $extraicon_name . '.png" alt="" class="thumb3"></a>';
}


function checklimit($name, $itemname) 
{


$servername = "mysqlhost";
$username = "login2";
$password = "passw";
$dbname = "login";
	if (isClassic() == '1') {
		$dbname = "kele01_classic";
	}
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
mysqli_set_charset($conn,"utf8");

    $sql = "
           SELECT *
FROM client_npc_goodslist_2
WHERE name = '$name'
       ";

    $query=mysqli_query($conn, $sql) or die(mysqli_error());
    while ($result = mysqli_fetch_assoc($query)) {
	$list = $result["itembuy_limit"];
	}
	
	
// ';wrap_cash_candy_mix_2017hallo_live,1;		wrap_cash_candy_mag_2017hallo_live,1;		wrap_cash_candy_phy_2017hallo_live,1'
	$listnospace = strtr($list, array(
		" " => '',
	));
	$explodedlist = explode(';', $listnospace);

	
	foreach ($explodedlist as $eachlist) {
		$eachSaleLimit = explode(',', $eachlist);
		
		if (strtolower($eachSaleLimit[0]) == strtolower($itemname)){
		$testtt = $eachSaleLimit[1];
		}
}
	
	if ($testtt != NULL) {
    return ' (Limit: ' . $testtt . ')';
	}else {
	return '';	
	}
}



function getitemlist($name, $type) 
{

if ($type == 'ttab') {
	$from = 'client_npc_trade_in_list'; 
}elseif ($type == 'buy_tab') {
	$from = 'client_npc_purchase_list'; 
}elseif ($type == 'buy_atab') {
	$from = 'client_npc_purchase_list'; 
}else {
	$from = 'client_npc_goodslist_2'; 
}	

$servername = "mysqlhost";
$username = "login2";
$password = "passw";
$dbname = "login";
	if (isClassic() == '1') {
		$dbname = "kele01_classic";
	}
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
mysqli_set_charset($conn,"utf8");

    $sql = "
           SELECT *
FROM $from
WHERE name = '$name'
       ";

    $query=mysqli_query($conn, $sql) or die(mysqli_error());
    while ($result = mysqli_fetch_assoc($query)) {
		
	if ($result["itembuy_limit"] != NULL) {
	$item = $result["itembuy_limit"];
	}else {
	$item = $result["item"];
	}
	
	$itemlist = strtr($item, array(
    " " => '',
));
	}
	
	
    return $itemlist;
}



// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;

$listname = $_GET['name'];
$lang = strtolower($_GET['lang']);
$gettype = $_GET['type'];
$price = $_GET['price'];




$serv = $_SERVER['DOCUMENT_ROOT'];
$cachefile = $serv . '/powerbook/extensions/AionExtensions/cache/goodlists/'.$lang.'/'.$listname.'_' . $gettype . '_' . $price . $cl . '.json';
$exists = file_exists($cachefile);

if( !$exists || ( $exists && time() > strtotime('+31 days', filemtime($cachefile)) )) {


 if($lang == "fr"){
	$language = 'search_fr';
} 
elseif($lang == "de"){
	$language = 'search_de';
}
elseif($lang == "it"){
	$language = 'search_it';
}
elseif($lang == "pl"){
	$language = 'search_pl';
}
elseif($lang == "ko"){
	$language = 'search_ko';
}
elseif($lang == "es"){
	$language = 'search_es';
}
elseif($lang == "us"){
	$language = 'search_us';
}else {
	$language = 'search_en';
}


$listnametemp = getitemlist($listname, $gettype);


// ';wrap_cash_candy_mix_2017hallo_live,1;		wrap_cash_candy_mag_2017hallo_live,1;		wrap_cash_candy_phy_2017hallo_live,1'

$itemlist =  explode(';', $listnametemp);

foreach ($itemlist as $eachitemex) {
	
	$limitexplode = explode(',', $eachitemex);
	

	$nodelist .= " name = '".$limitexplode[0]."' or " ;
	if ($limitexplode[1] != NULL) {
	$SaleLimit .= $limitexplode[1] . ",";
	}
}



if ($gettype == 'etab'){
	$lastorder = 'extra_currency_item_count';
}elseif ($gettype == 'tab'){
	$lastorder = 'price';
}elseif ($gettype == 'atab'){
	$lastorder = 'abyss_point';
}elseif ($gettype == 'ttab'){
	$lastorder = 'trade_in_item_count';
}elseif ($gettype == 'buy_tab'){
	$lastorder = 'price';
}elseif ($gettype == 'buy_atab'){
	$lastorder = 'abyss_point';
}else {
	$lastorder = 'price';
}










$searchBox = strtr($requestData['search']['value'], array(
		"'" => '&apos;',
		));

$sql = "SELECT id, name, icon_name, level, quality, price, abyss_point, extra_currency_item, extra_currency_item_count, abyss_item, abyss_item_count, trade_in_item, trade_in_item_count, trade_in_item1, trade_in_item_count1, trade_in_item2, trade_in_item_count2, $language, search_ko ";
$sql.=" FROM client_items WHERE $nodelist id = '1' ";
if( !empty($requestData['search']['value']) ) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
	$sql.=" AND ( id LIKE '%".$searchBox."%' "; 
	$sql.=" OR $language LIKE '".$searchBox."%' ";
	$sql.=" OR price LIKE '%".$searchBox."%' )";
}


$query=mysqli_query($conn, $sql) or die("employee-grid-data.php: get employees");

$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 

	$localization = !empty($row[$language]) ? $row[$language] : $row['search_ko'];
	
	$lastrow = '';
	$eachprice = explode ('_', $price);
	
	
	$nestedData[] = $row["id"];
	$nestedData[] = '<img class="thumb" src="https://aionpowerbook.com/item/icon/' . strtolower($row["icon_name"]) . '.png" width="37" height="37" alt="">';
	$nestedData[] = '<a class="tooltipzy col_' . strtolower($row["quality"]) . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $row["id"] . '" tooltipID="' . $row["id"] . ' " tooltiplang="' . $lang . '" classic="' . isClassic() . '">' . $localization . '</a>' . checklimit($listname, $row["name"]);
	
	
	if ($gettype == 'etab') {
		
		if ($row["extra_currency_item"] != NULL) {
		$lastrow = checkitem($row["extra_currency_item"], $lang) . ' x' . number_format($row["extra_currency_item_count"]);
		}else {
		$lastrow = checkitem($row["abyss_item"], $lang) . ' x' . number_format($row["abyss_item_count"]);
		}
		
		
	}elseif ($gettype == 'ttab') {
		
		
		if ($row["trade_in_item_count"] > 0){
		$lastrow = '<p>' . checkitem($row["trade_in_item"], $lang) . ' x' . number_format($row["trade_in_item_count"]) . '</p>';
		}
		if ($row["trade_in_item_count1"] > 0){
		$lastrow .= '<p>' . checkitem($row["trade_in_item1"], $lang) . ' x' . number_format($row["trade_in_item_count1"]) . '</p>';
		}
		if ($row["trade_in_item_count2"] > 0){
		$lastrow .= '<p>' . checkitem($row["trade_in_item2"], $lang) . ' x' . number_format($row["trade_in_item_count2"]) . '</p>';
		}
		
		if ($row["extra_currency_item_count"] > 0){
		$lastrow .= '<p>' . checkitem($row["extra_currency_item"], $lang) . ' x' . number_format($row["extra_currency_item_count"]) . '</p>';
		}
		
		
	}elseif ($gettype == 'atab') {
		
		if ($eachprice[0] > 0 && $row["price"] > 0){
		$lastrow = 'Kinah: ' . number_format(round(($eachprice[0]/1000) * $row["price"])) . '<br>';
	}if ($eachprice[1] > 0 && $row["abyss_point"] > 0){
		$lastrow .= 'AP: ' . number_format(round(($eachprice[1]/1000) * $row["abyss_point"])) . '<br>';
	}else {
		$lastrow .= 'AP: ' . number_format($row["abyss_point"]) . '<br>';
	}
		
		if ($row["abyss_item_count"] != NULL) {
		$lastrow .= '<p>' . checkitem($row["abyss_item"], $lang) . ' x' . number_format($row["abyss_item_count"]) . '</p>';
		}
		
	}elseif ($gettype == 'buy_atab') {
	
	
	if ($eachprice[0] > 0 && $row["abyss_point"] > 0){
		$lastrow .= 'AP: ' . number_format(round(($eachprice[0]/1000) * $row["abyss_point"])) . '<br>';
	}elseif ($eachprice[0] < 1 && $row["abyss_point"] > 0){
		$lastrow .= 'AP: ' . number_format($row["abyss_point"]) . '<br>';
	}
	
	}else {
	
	
	if ($eachprice[0] > 0 && $row["price"] > 0){
		$lastrow = 'Kinah: ' . number_format(round(($eachprice[0]/1000) * $row["price"])) . '<br>';
	}elseif ($row["price"] > 0 && $eachprice[0] < 1) {
		$lastrow = 'Kinah: ' . number_format($row["price"]) . '<br>';
	}
	
	if ($eachprice[1] > 0 && $row["abyss_point"] > 0){
		$lastrow .= 'AP: ' . number_format(round(($eachprice[1]/1000) * $row["abyss_point"])) . '<br>';
	}elseif ($eachprice[1] < 1 && $row["abyss_point"] > 0){
		$lastrow .= 'AP: ' . number_format($row["abyss_point"]) . '<br>';
	}
	
	}
	
	
		
	$nestedData[] = '<span style="white-space:nowrap;">' . $lastrow . '</span>';
	
	
	$data[] = $nestedData;
}



$json_data = array(
			"data"            => $data   // total data array
			);

$final = json_encode($json_data);  // send data as json format

file_put_contents('../cache/goodlists/'.$lang.'/'.$listname.'_' . $gettype . '_' . $price . $cl . '.json', $final);



echo $final;

}else {
	

	$servv = $_SERVER['DOCUMENT_ROOT'];
	$cachefilev = $servv . '/powerbook/extensions/AionExtensions/cache/goodlists/'.$lang.'/'.$listname.'_' . $gettype . '_' . $price . $cl . '.json';
	
	
	

	$string = file_get_contents($cachefilev);
	
	echo $string;
	
}

?>
