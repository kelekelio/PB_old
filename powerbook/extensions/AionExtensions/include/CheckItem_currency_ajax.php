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
}

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
mysqli_set_charset($conn,"utf8");
/* Database connection end */


// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;


$devname = $_GET['name'];
$lang = $_GET['lang'];
$type = $_GET['type'];


if (isClassic() == '1') {
    $cl = "_cl";
}


$serv = $_SERVER['DOCUMENT_ROOT'];
$cachefile = $serv . '/powerbook/extensions/AionExtensions/cache/itemcurrency/'.$lang.'/'.$devname.'_' . $type . $cl . '.json';
$exists = file_exists($cachefile);

if( !$exists || ( $exists && time() > strtotime('+31 days', filemtime($cachefile)) )) {



 if($lang == "fr"){
	$language = 'search_fr';
	$toollang = 'fr';
} 
elseif($lang == "de"){
	$language = 'search_de';
	$toollang = 'de';
}
elseif($lang == "it"){
	$language = 'search_it';
	$toollang = 'it';
}
elseif($lang == "pl"){
	$language = 'search_pl';
	$toollang = 'pl';
}
elseif($lang == "ko"){
	$language = 'search_ko';
	$toollang = 'ko';
}
elseif($lang == "tr"){
	$language = 'search_tr';
	$toollang = 'en';
}
elseif($lang == "es"){
	$language = 'search_es';
	$toollang = 'es';
}
elseif($lang == "us"){
	$language = 'search_us';
	$toollang = 'us';
}else {
	$language = 'search_en';
	$toollang = 'en';
}








$from = 'client_items';
$where = "(abyss_item = '$devname' or extra_currency_item = '$devname' or trade_in_item = '$devname' or trade_in_item1 = '$devname' or trade_in_item2 = '$devname' )";






$searchBox = strtr($requestData['search']['value'], array(
		"'" => '&apos;',
		));
		

$sql ="SELECT * ";
$sql.=" FROM $from WHERE $where  ";
if( !empty($requestData['search']['value']) ) {
	$sql.=" AND ( search_ko LIKE '%".$searchBox."%' ";    
	$sql.=" OR id LIKE '".$searchBox."%' ";
	$sql.=" OR level LIKE '".$searchBox."%' ";
	$sql.=" OR $language LIKE '%".$searchBox."%' )";
}



$query=mysqli_query($conn, $sql) or die("employee-grid-data.php: get employees");

$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 

	$localization = !empty($row[$language]) ? $row[$language] : $row['search_ko'];
	
	

	$nestedData[] = $row["id"];
	$nestedData[] = '<img class="thumb" src="https://aionpowerbook.com/item/icon/' . strtolower($row["icon_name"]) . '.png" width="37" height="37" alt="">';
	$nestedData[] = '<a class="tooltipzy col_' . strtolower($row["quality"]) . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $row["id"] . '" tooltipID="' . $row["id"] . '" tooltiplang="'.$toollang.'" classic="' . isClassic() . '">' . $localization . '</a>';
	$nestedData[] = $row["level"];
	
	
	
	
	$data[] = $nestedData;
}



$json_data = array(
			"data"            => $data   // total data array
			);

$final = json_encode($json_data);  // send data as json format

$servv = $_SERVER['DOCUMENT_ROOT'];
file_put_contents( $servv . '/powerbook/extensions/AionExtensions/cache/itemcurrency/'.$lang.'/'.$devname.'_' . $type . $cl . '.json', $final);



echo $final;

}else {
	

	$servv = $_SERVER['DOCUMENT_ROOT'];
	$cachefilev = $servv . '/powerbook/extensions/AionExtensions/cache/itemcurrency/'.$lang.'/'.$devname.'_' . $type . $cl . '.json';
	
	
	

	$string = file_get_contents($cachefilev);
	
	echo $string;
	
}

?>