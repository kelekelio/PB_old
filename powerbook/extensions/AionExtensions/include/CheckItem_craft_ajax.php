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



function translate($name, $lang)
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



if ($lang == 'en'){
	$langcol = 'LAN_EN';
}elseif ($lang == 'de'){
	$langcol = 'LAN_DE';
}elseif ($lang == 'fr'){
	$langcol = 'LAN_FR';
}elseif ($lang == 'it'){
	$langcol = 'LAN_IT';
}elseif ($lang == 'es'){
	$langcol = 'LAN_ES';
}elseif ($lang == 'pl'){
	$langcol = 'LAN_PL';
}elseif ($lang == 'us'){
	$langcol = 'LAN_US';
}elseif ($lang == 'ko'){
	$langcol = 'body';
}
	
	
$sql .= "SELECT body, $langcol ";
$sql .= "FROM  translation_small ";
$sql .= "WHERE name = '$name' ";
$query=mysqli_query($conn, $sql) or die("Whoopsie Doopsie~!!");
$result = mysqli_fetch_assoc($query);
$final = !empty($result[$langcol]) ? $result[$langcol] : $result['body'];


return $final;
}

function craftitem($name, $lang)
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


	
	
$sql .= "SELECT id, icon_name ";
$sql .= "FROM  client_items ";
$sql .= "WHERE name = '$name' ";
$query=mysqli_query($conn, $sql) or die("Whoopsie Doopsie~!!");
$result = mysqli_fetch_assoc($query);


$final = '<a href="https://aionpowerbook.com/powerbook/Item/' . $result['id'] . '" class="tooltipzy" tooltipID="' . $result["id"] . '" tooltiplang="'.$lang.'" classic="' . isClassic() . '"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . strtolower($result['icon_name']) . '.png" width="37" height="37" alt=""></a>';


return $final;
}

function quality($name)
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


	
	
$sql .= "SELECT quality ";
$sql .= "FROM  client_items ";
$sql .= "WHERE name = '$name' ";
$query=mysqli_query($conn, $sql) or die("Whoopsie Doopsie~!!");
$result = mysqli_fetch_assoc($query);


$final = strtolower($result['quality']);

return $final;
}


// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;


$devname = $_GET['name'];
$lang = $_GET['lang'];
$type = $_GET['type'];


if (isClassic() == "1") {
	$cl = "_cl";
}





$serv = $_SERVER['DOCUMENT_ROOT'];
$cachefile = $serv . '/powerbook/extensions/AionExtensions/cache/itemcraft/'.$lang.'/'.$devname. $cl .'.json';
$exists = file_exists($cachefile);

if( !$exists || ( $exists && time() > strtotime('+31 days', filemtime($cachefile)) )) {





$sql = "SELECT id, product, combo1_product, combo2_product, required_skillpoint, qualification_race, search_$lang, search_ko ";
$sql.=" FROM client_combine_recipe ";
$sql.=" WHERE product = '$devname' or combo1_product = '$devname' ";


$query=mysqli_query($conn, $sql) or die("Whoopsie Doopsie~!!");

$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 

	$localization = !empty($row['search_' . $lang]) ? $row['search_' . $lang] : $row['search_ko'];
	
if (strtolower($row["qualification_race"]) == 'pc_light'){
			$race = ' <span class="pc_light" title="' . translate('STR_TOOLTIP_PC_LIGHT', $lang) . '"></span>';
		}
		if (strtolower($row["qualification_race"]) == 'pc_dark'){
			$race = ' <span class="pc_dark" title="' . translate('STR_TOOLTIP_PC_DARK', $lang) . '"></span>';
		}
		if (strtolower($row["qualification_race"]) == 'all'){
			$race = ' <span class="pc_light"></span> <span class="pc_dark"></span>';
		}
		
		if ($row["combo1_product"] != NULL) {
			$combo1_product = craftitem($row["combo1_product"], $lang);
		}else {
			$combo1_product = '';
		}
	
	
	$nestedData[] = craftitem($row["product"], $lang);
	$nestedData[] = $combo1_product;
	$nestedData[] = '<a class="col_' . quality($row["product"]) . ' bold crafttooltipzy" href="https://aionpowerbook.com/powerbook/Craft/' . $row["id"] . '" crafttooltiplang="'.$lang.'" crafttooltipID="' . $row["id"] . '" classic="' . isClassic() . '">' . $localization . '</a>';
	$nestedData[] = $row["required_skillpoint"];
	$nestedData[] = $race;
	
	
	$data[] = $nestedData;
}



$json_data = array(
			"data"            => $data   // total data array
			);

$final = json_encode($json_data);  // send data as json format


$servv = $_SERVER['DOCUMENT_ROOT'];
file_put_contents($servv . '/powerbook/extensions/AionExtensions/cache/itemcraft/'.$lang.'/'.$devname. $cl .'.json', $final);



echo $final;

}else {
	

	$servv = $_SERVER['DOCUMENT_ROOT'];
	$cachefilev = $servv . '/powerbook/extensions/AionExtensions/cache/itemcraft/'.$lang.'/'.$devname. $cl .'.json';
	
	
	

	$string = file_get_contents($cachefilev);
	
	echo $string;
	
}

?>
