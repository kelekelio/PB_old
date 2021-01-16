<?php
/* Database connection start */
$servername = "mysqlhost";
$username = "login2";
$password = "passw";
$dbname = "login";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
mysqli_set_charset($conn,"utf8");
/* Database connection end */

function translate($name, $lang)
{
$servername = "mysqlhost";
$username = "login2";
$password = "passw";
$dbname = "login";
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
$sql.=" FROM familiars where id like '%' ";




if( !empty($requestData['search']['value']) ) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
	$sql.=" AND ( id LIKE '".$searchBox."%' "; 
	$sql.=" OR search_".$language." LIKE '%".$searchBox."%' ";
	$sql.=" OR search_ko LIKE '%".$searchBox."%' ";
	$sql.=" OR level LIKE '".$searchBox."%' ";
	$sql.=" OR hp LIKE '".$searchBox."%' ";
	$sql.=" OR magical_skill_boost_resist LIKE '".$searchBox."%' ";
	$sql.=" OR client_version LIKE '".$searchBox."%' )";

	
}



$query=mysqli_query($conn, $sql) or die("Whoopsie Doopsie~!");


/* $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc  */	
$query=mysqli_query($conn, $sql) or die("employee-grid-data.php: get employees");

$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 


		$petid=$row["id"];
		$petdesc=translate($row["description"], $language);
		$peticon=strtolower($row["icon_name"]);
		$tier_grade=$row["tier_grade"];
		$star_grade=$row["star_grade"];
		
		

$peticonfinal = strtr($peticon, array(
		".dds" => '',
));



	
		
	$nestedData[] = $row["id"]; 
	$nestedData[] = '<img class="thumb" src="https://aionpowerbook.com/pet/icon/' . $peticonfinal . '.png" width="37" height="37" alt="">';
	$nestedData[] = '<a class="col_ " href="https://aionpowerbook.com/powerbook/Minion/' . $petid . '">' . $petdesc . '</a>';
	$nestedData[] = $tier_grade;
	$nestedData[] = $star_grade;
	
	
	$data[] = $nestedData;
}



$json_data = array(
			"data"            => $data   // total data array
			);

$final = json_encode($json_data);  // send data as json format

file_put_contents('../AionExtensions/cache/minion/table_'.$lang.'.json', $final);

echo $final;

?>
