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






function skinskill ($name) {
	$servername = "mysqlhost";
	$username = "login2";
	$password = "passw";
	$dbname = "login";
	$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
	mysqli_set_charset($conn,"utf8");




$sql .= "SELECT id, name ";
$sql .= "FROM  client_skills ";
$sql .= "WHERE name = '$name' ";
$query=mysqli_query($conn, $sql) or die("Whoopsie Doopsie~!!");
$result = mysqli_fetch_assoc($query);

$id = $result['id'];


return $id;

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
$sql.=" FROM client_transformbook where id like '%' ";




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

		$skillid = skinskill($row["skill"]);
		$petdesc=translate($row["description"], $language);
		$peticon=strtolower($row["icon_name"]);
		$grade_desc = translate($row["grade_desc"], $language);
		$grade=$row["grade"];

$peticonfinal = strtr($peticon, array(
		".dds" => '',
));



if ($grade == '1') {
	$color = 'acacac'; //<font color="EAEAEA">일반</font>
}elseif ($grade == '2') {
	$color = '6CDF5E';
}elseif ($grade == '3') {
	$color = 'E1AD40';
}elseif ($grade == '4') {
	$color = 'EB46FF';
}elseif ($grade == '5') {
	$color = 'FF4B4B';
}


	
	
	
	
	
	
		
	$nestedData[] = $row["id"]; 
	$nestedData[] = '<img class="thumb" src="https://aionpowerbook.com/transformation/' . $peticonfinal . '.png" width="37" height="37" alt="">';
	$nestedData[] = '<a style="color:#'.$color.' !important" href="https://aionpowerbook.com/powerbook/Transformation/' . $row["id"] . '" class="skilltipzy" skillid="' . $skillid . '" skilltiplang="' . $language . '">' . $petdesc . '</a>';
	$nestedData[] = $grade_desc;
	
	
	$data[] = $nestedData;
}



$json_data = array(
			"data"            => $data   // total data array
			);

$final = json_encode($json_data);  // send data as json format

file_put_contents('../AionExtensions/cache/transformation/table_'.$lang.'.json', $final);

echo $final;

?>
