<?php

function isClassic() {
	return $_GET['classic'];
}

include $_SERVER['DOCUMENT_ROOT'] . '/aionpb/DB/db_config.php';
include '../AionExtensions/include/include_skill.php';


/* Database connection start */
$servername = "mysqlhost";
$username = "login2";
$password = "passw";
$dbname = "login";

if (isClassic() == '1') {
	$dbname = "kele01_classic";
	$classDir = "_cl";
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
elseif($lang == "en"){
	$language = 'us';
}else {
	$language = 'en';
}

$columns = array( 
// datatable column index  => database column name
	0 => 'id',
	1 => 'icon_name',
	2 => 'search_' . $language,
	3 => 'level',
	4 =>'client_version'
);


$racefilter = $requestData['columns'][4]['search']['value'];
$lowlevelfilter = $requestData['columns'][1]['search']['value'];
$highlevelfilter = $requestData['columns'][2]['search']['value'];
$itemtype = $requestData['columns'][3]['search']['value'];



// getting total number records without any search
$sql = "SELECT id ";
$sql.=" FROM client_items";
$sql.=" WHERE (id BETWEEN 188700000 AND 188999999
   or  id BETWEEN 188000000 AND 188039999 
   or  id BETWEEN 182400001 AND 186009999 
   or  id BETWEEN 182000000 AND 182009999 
   or  id BETWEEN 181000001 AND 182009999 
   or  id BETWEEN 169600001 AND 169949999 
   or  id BETWEEN 169300001 AND 169409999 
   or  id BETWEEN 168100000 AND 168319999 
   or  id BETWEEN 166300001 AND 166409999 
   or  id BETWEEN 166100000 AND 166159999 
   or  id BETWEEN 165000001 AND 165019999 
   or  id BETWEEN 163000001 AND 163059999 
   or  id BETWEEN 161000001 AND 161009999 )";
   
   
   
   



   
   
$query=mysqli_query($conn, $sql) or die("Whoopsie Doopsie~!");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


$searchBox = strtr($requestData['search']['value'], array(
		"'" => '&apos;',
		));


$sql = "SELECT client_version, id, quality, icon_name, search_$language, search_ko, level ";
$sql.=" FROM client_items 
WHERE (id BETWEEN 188700000 AND 188999999
   or  id BETWEEN 188000000 AND 188039999 
   or  id BETWEEN 182400001 AND 186009999 
   or  id BETWEEN 182000000 AND 182009999 
   or  id BETWEEN 181000001 AND 182009999 
   or  id BETWEEN 169600001 AND 169949999 
   or  id BETWEEN 169300001 AND 169409999 
   or  id BETWEEN 168100000 AND 168319999 
   or  id BETWEEN 166300001 AND 166409999 
   or  id BETWEEN 166100000 AND 166159999 
   or  id BETWEEN 165000001 AND 165019999 
   or  id BETWEEN 163000001 AND 163059999 
   or  id BETWEEN 161000001 AND 161009999 )";
   
   
   
if( !empty($itemtype) ){
	
	$tags = explode(', ', $itemtype);
	
	foreach($tags as $key) {    
		$sqlnods .= " quality = '" . $key . "' or ";    
	}

  
    $sql.=" AND ( " . $sqlnods ." quality = '1') ";

}  


if ( !empty($lowlevelfilter) and $lowlevelfilter > 0) {
		$sql.= " AND ( level >= $lowlevelfilter ) ";
}

if ( !empty($highlevelfilter) ) {
		$sql.= " AND ( level <= $highlevelfilter ) ";
}
   
if( !empty($racefilter) ){ //race filter
	$sql.=" AND ( race_permitted = '" . $racefilter . "'  ) ";
}

 
   
if( !empty($requestData['search']['value']) ) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
	$sql.=" AND ( id LIKE '".$searchBox."%' "; 
	$sql.=" OR search_".$language." LIKE '%".$searchBox."%' ";
	$sql.=" OR search_ko LIKE '%".$searchBox."%' ";
	$sql.=" OR level LIKE '".$searchBox."%' ";

	$sql.=" OR client_version LIKE '".$searchBox."%' )";

	
}
$query=mysqli_query($conn, $sql) or die("Whoopsie Doopsie~!");
$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result. 
$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
/* $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc  */	
$query=mysqli_query($conn, $sql) or die("employee-grid-data.php: get employees");

$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 

	$localization = !empty($row['search_'.$language]) ? $row['search_'.$language] : $row['search_ko'];
	$clientversion=mb_substr($row["client_version"], 0, 10);
	$clientversionfull=$row["client_version"];

	$icon_name = strtolower($row["icon_name"]);
	$fin_icon_name = strtr($icon_name, array(
		".dds" => '',
		));

	if (isClassic() == "1") {
		$cl = "_c";
	}
	
	$nestedData[] = $row["id"];
	$nestedData[] = '<img class="thumb" src="https://aionpowerbook.com/item/icon'.$cl.'/' . $fin_icon_name . '.png" width="37" height="37" alt="">';
	$nestedData[] = '<a class="tooltipzy col_' . strtolower($row["quality"]) . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $row["id"] . '" tooltipID="' . $row["id"] . '" tooltiplang="'.$language.'" classic="' . isClassic() . '">' . $localization . '</a>';
	$nestedData[] = $row["level"];
	$nestedData[] = '<div title="' . $clientversionfull . '">' . $clientversion . '</div>';
	
	
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
