<?php

$requestData= $_REQUEST;

$craft = $_GET['craft'];
$lang = $_GET['lang'];

function isClassic() {
	return $_GET['classic'];
}

include $_SERVER['DOCUMENT_ROOT'] . '/aionpb/DB/db_config.php';
include '../AionExtensions/include/include_skill.php';



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

$icon_name = strtolower($result['icon_name']);

$fin_icon_name = strtr($icon_name, array(
	".dds" => '',
	));



$final = '<a href="https://aionpowerbook.com/powerbook/Item/' . $result['id'] . '" class="tooltipzy" tooltipID="' . $result["id"] . '" tooltiplang="'.$lang.'" classic="' . isClassic() . '"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $fin_icon_name . '.png" width="37" height="37" alt=""></a>';


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

$columns = array( 
// datatable column index  => database column name
	0 => 'material1',
	1 => 'search_' . $lang,
	2 => 'harvestskill',
	3 => 'skill_level',
	4 => 'char_level_limit'
);



$lowlevelfilter = $requestData['columns'][1]['search']['value'];
$highlevelfilter = $requestData['columns'][2]['search']['value'];
$craftype = $requestData['columns'][3]['search']['value'];
$racefilter = $requestData['columns'][4]['search']['value'];








if ( !empty($lowlevelfilter) and $lowlevelfilter > 1) {
		$addlowlevelfilter = " AND ( skill_level >= $lowlevelfilter ) ";
}

if ( !empty($highlevelfilter) ) {
		$addhighlevelfilter = " AND ( skill_level <= $highlevelfilter ) ";
}


$searchBox = strtr($requestData['search']['value'], array(
		"'" => '&apos;',
		"elyos" => 'pc_light',
		"asmodian" => 'pc_dark',
		));




// getting total number records without any search
$sql = "SELECT id ";
$sql.=" FROM gather_src ";
$sql.=" where name not like '%test%' ";
$query=mysqli_query($conn, $sql) or die("Whoopsie Doopsie~!!");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


$sql = "SELECT * ";
$sql.=" FROM gather_src ";
$sql.=" where name not like '%test%' ";



		


$sql.= $addlowlevelfilter;
$sql.= $addhighlevelfilter;

if( !empty($craftype) ){
	
	$tags = explode(', ', $requestData['columns'][3]['search']['value']);
	
	foreach($tags as $key) {    
		$sqlnods .= " source_type = '" . $key . "' or ";    
	}

  
    $sql.=" AND ( " . $sqlnods ." source_type = '1') ";

}

if( !empty($racefilter) ){ //race filter
	$sql.=" AND ( harvestskill = '".$racefilter."' ) ";
}



if( !empty($requestData['search']['value']) ) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
	$sql.=" AND ( skill_level LIKE '%".$searchBox."%' "; 
	$sql.=" OR search_$lang LIKE '%".$searchBox."%' ";
	$sql.=" OR search_ko LIKE '%".$searchBox."%' )";
}
$query=mysqli_query($conn, $sql) or die("Whoopsie Doopsie~!!");
$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result. 
$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
/* $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc  */	
$query=mysqli_query($conn, $sql) or die("Whoopsie Doopsie~!!");

$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 

	$localization = !empty($row['search_' . $lang]) ? $row['search_' . $lang] : $row['search_ko'];
	
	if ($row["harvestskill"] == 'gathering_a') {
		$skillname = translate('STR_GATHERING_A', $lang);
	}elseif ($row["harvestskill"] == 'gathering_b') {
		$skillname = translate('STR_GATHERING_b', $lang);
	}elseif ($row["harvestskill"] == 'aerial_gathering') {
		$skillname = translate('STR_AERIAL_GATHERING', $lang);
	}else {
		$skillname = 'Unknown';
	}
	
	$nestedData[] = craftitem($row["material1"], $lang);
	$nestedData[] = '<a class="col_" href="https://aionpowerbook.com/powerbook/Gathering/' . $row["id"] . '" >' . $localization . '</a>';
	$nestedData[] = $skillname;
	$nestedData[] = $row["skill_level"];
	$nestedData[] = $row["char_level_limit"];
	
	$data[] = $nestedData;
}



$json_data = array(
			"draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
			"recordsTotal"    => intval( $totalData ),  // total number of records
			"recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
			"data"            => $data   // total data array
			);

echo json_encode($json_data);  // send data as json format

?>
