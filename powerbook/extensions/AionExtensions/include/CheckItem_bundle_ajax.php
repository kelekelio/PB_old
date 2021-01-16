<?php

function isClassic() {
    return $_GET['classic'];
}



/* Database connection start */
$servername = "mysqlhost";
$username = "login2";
$password = "passw";
$dbname = "login";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
mysqli_set_charset($conn,"utf8");
/* Database connection end */

function checkitem($name, $lang) 
{

$servername = "mysqlhost";
$username = "login2";
$password = "passw";
$dbname = "login";

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
	$fin_icon_name = strtr($extraicon_name, array(
		".dds" => '',
		));
	

	}	
	return '<a class="tooltipzy" href="https://aionpowerbook.com/powerbook/Item/' . $id . '" tooltipID="' . $id . '" tooltiplang="' . $lang . '" classic="' . isClassic() . '" ><img src="https://aionpowerbook.com/item/icon/' . $fin_icon_name . '.png" alt="" class="thumb3"></a>';
}



function GetBundleName($name, $lang) 
{


$setName = explode(';', $name);


$Itemarray = array();
foreach ($setName as $eachSetName) {

$servername = "mysqlhost";
$username = "login2";
$password = "passw";
$dbname = "login";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
mysqli_set_charset($conn,"utf8");

    $sql = "
           SELECT name
FROM client_disassembly_item
where set_list_name_ = '" . $eachSetName . "' or set_list_name_1 = '" . $eachSetName . "' or  set_list_name_2 = '" . $eachSetName . "' or  set_list_name_3 = '" . $eachSetName . "' or  set_list_name_4 = '" . $eachSetName . "' or  set_list_name_5 = '" . $eachSetName . "' or  set_list_name_6 = '" . $eachSetName . "' or  set_list_name_7 = '" . $eachSetName . "' or  set_list_name_8 = '" . $eachSetName . "' or  set_list_name_9 = '" . $eachSetName . "' or  set_list_name_10 = '" . $eachSetName . "' or  set_list_name_11 = '" . $eachSetName . "' or  set_list_name_12 = '" . $eachSetName . "' or  set_list_name_13 = '" . $eachSetName . "' or  set_list_name_14 = '" . $eachSetName . "' or  set_list_name_15 = '" . $eachSetName . "' or  set_list_name_16 = '" . $eachSetName . "' or  set_list_name_17 = '" . $eachSetName . "' or  set_list_name_18 = '" . $eachSetName . "' or  set_list_name_19 = '" . $eachSetName . "' or  set_list_name_20 = '" . $eachSetName . "' or  set_list_name_21 = '" . $eachSetName . "' or  set_list_name_22 = '" . $eachSetName . "' or  set_list_name_23 = '" . $eachSetName . "' or  set_list_name_24 = '" . $eachSetName . "' or  set_list_name_25 = '" . $eachSetName . "' or  set_list_name_26 = '" . $eachSetName . "' or  set_list_name_27 = '" . $eachSetName . "'
       ";

    $query=mysqli_query($conn, $sql) or die(mysqli_error());
	
    while ($result = mysqli_fetch_assoc($query)) {
	$Itemarray[] = $result["name"];
	}


}

foreach ($Itemarray as $EachItemarray) {
$temp .= " name = '".$EachItemarray."' or " ;  
}
	
	
	return $temp;
}


function getBundleList($name, $lang) 
{

$servername = "mysqlhost";
$username = "login2";
$password = "passw";
$dbname = "login";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
mysqli_set_charset($conn,"utf8");

    $sql = "
           SELECT *
FROM client_disassembly_item_setlist2
where create_ like '% " . $name . " %'
limit 0, 1500       ";

    $query=mysqli_query($conn, $sql) or die(mysqli_error());
    while ($result = mysqli_fetch_assoc($query)) {
	$Listname .= GetBundleName($result["name"], $lang);
	
	
	$return = $Listname;
	}	
	return $return;
}





// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;

$type = $_GET['type'];
$lang = strtolower($_GET['lang']);
$name = $_GET['name'];





$serv = $_SERVER['DOCUMENT_ROOT'];
$cachefile = $serv . '/powerbook/extensions/AionExtensions/cache/itembundle/'.$lang.'/'.$name.'_' . $type . '.json';
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









$fromDB = getBundleList($name, $lang);










$sql = "SELECT id, icon_name, level, quality, $language, search_ko ";
$sql.=" FROM client_items WHERE $fromDB id = '1' ";




$query=mysqli_query($conn, $sql) or die("employee-grid-data.php: get employeehhhhhs");

$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 

	$localization = !empty($row[$language]) ? $row[$language] : $row['search_ko'];
	

	
	
	$nestedData[] = $row["id"];
	$nestedData[] = '<img class="thumb" src="https://aionpowerbook.com/item/icon/' . strtolower($row["icon_name"]) . '.png" width="37" height="37" alt="">';
	$nestedData[] = '<a class="tooltipzy col_' . strtolower($row["quality"]) . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $row["id"] . '" tooltipID="' . $row["id"] . ' " tooltiplang="' . $lang . '" classic="' . isClassic() . '">' . $localization . '</a>';
	$nestedData[] = '<span style="white-space:nowrap;">' . $row["level"] . '</span>';
	
	
	$data[] = $nestedData;
}


$json_data = array(
			"data"            => $data   // total data array
			);

$final = json_encode($json_data);  // send data as json format

$servv = $_SERVER['DOCUMENT_ROOT'];
file_put_contents($servv . '/powerbook/extensions/AionExtensions/cache/itembundle/'.$lang.'/'.$name.'_' . $type . '.json', $final);



echo $final;

}else {
	

	$servv = $_SERVER['DOCUMENT_ROOT'];
	$cachefilev = $servv . '/powerbook/extensions/AionExtensions/cache/itembundle/'.$lang.'/'.$name.'_' . $type . '.json';
	
	
	

	$string = file_get_contents($cachefilev);
	
	echo $string;
	
}

?>