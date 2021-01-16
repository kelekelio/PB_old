<?php

function isClassic() {
	return $_GET['classic'];
}


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




// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;

$lang = $_GET['lang'];

 if($lang == "fr"){
	$language = 'fr';
} 
elseif($lang == "de"){
	$language = 'de';
}
elseif($lang == "it"){
	$language = 'it';
}
elseif($lang == "pl"){
	$language = 'pl';
}
elseif($lang == "ko"){
	$language = 'ko';
}
elseif($lang == "tr"){
	$language = 'tr';
}
elseif($lang == "es"){
	$language = 'es';
}
elseif($lang == "us"){
	$language = 'us';
}else {
	$language = 'en';
}









$searchBox = strtr($requestData['search']['value'], array(
		"'" => '&apos;',
		));


$sql = "SELECT * ";
$sql.=" FROM toypets where id like '%' ";

$query=mysqli_query($conn, $sql) or die("Whoopsie Doopsie~!");


/* $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc  */	
$query=mysqli_query($conn, $sql) or die("employee-grid-data.php: get employees");

$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 


		$petid=$row["id"];
		$petdesc=translate($row["description"], $language);
		$peticon=strtolower($row["icon_name"]);
		$petdesclong=$row["desc_long"];
		$enemy_alarm=$row["enemy_alarm"];
		$func_type1=$row["func_type1"];
		$func_type2=$row["func_type2"];






	if ($enemy_alarm == 1) {
		$alarm = 'X';
	}else {
		$alarm = 'O';
	}
	
	
	if ($func_type1 == 'feeding') {
		$type1 = 'Producer';
	}elseif ($func_type1 == 'warehouse') {
		$type1 = 'Warehouse';
	}elseif ($func_type1 == 'buff') {
		$type1 = 'Buffer';
	}elseif ($func_type1 == 'doping') {
		$type1 = 'Doper';
	}elseif ($func_type1 == 'looting') {
		$type1 = 'Looter';
	}elseif ($func_type1 == 'merchant') {
		$type1 = 'Merchant';
	}else {
		$type1 = '- -';
	}
	
	
	if ($func_type2 == 'feeding') {
		$type2 = 'Producer';
	}elseif ($func_type2 == 'warehouse') {
		$type2 = 'Warehouse';
	}elseif ($func_type2 == 'buff') {
		$type2 = 'Buffer';
	}elseif ($func_type2 == 'doping') {
		$type2 = 'Doper';
	}elseif ($func_type2 == 'looting') {
		$type2 = 'Looter';
	}elseif ($func_type2 == 'merchant') {
		$type2 = 'Merchant';
	}else {
		$type2 = '- -';
	}
	
	
	

$peticonfinal = strtr($peticon, array(
		".dds" => '',
));

	
	
	
	
	
	
		
	$nestedData[] = $petid; 
	$nestedData[] = '<img class="thumb" src="https://aionpowerbook.com/pet/icon/' . $peticonfinal . '.png" width="37" height="37" alt="">';
	$nestedData[] = '<a class="col_ " href="https://aionpowerbook.com/powerbook/Pet/' . $petid . '">' . $petdesc . '</a>';
	$nestedData[] = $type1;
	$nestedData[] = $type2;
	$nestedData[] = $alarm;
	
	$data[] = $nestedData;
}



$json_data = array(
			"data"            => $data   // total data array
			);

$final = json_encode($json_data);  // send data as json format

file_put_contents('../AionExtensions/cache/pet/table_'.$lang. $cl . '.json', $final);

echo $final;
