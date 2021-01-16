<?php
/* Database connection start */
$servername = "mysqlhost";
$username = "login2";
$password = "passw";
$dbname = "login";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
mysqli_set_charset($conn,"utf8");
/* Database connection end */


// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;

$lowerid = $_GET['lowerid'];
$higherid = $_GET['higherid'];
$getquality = $_GET['getquality'];
$lang = $_GET['lang'];
$type = $_GET['type'];





$racefilter = $requestData['columns'][4]['search']['value'];
$lowlevelfilter = $requestData['columns'][1]['search']['value'];
$highlevelfilter = $requestData['columns'][2]['search']['value'];
$itemquality = $requestData['columns'][3]['search']['value'];
$itemslot = $requestData['columns'][5]['search']['value'];
$itemstats = $requestData['columns'][6]['search']['value'];
$extend = $requestData['columns'][7]['search']['value'];
$pvevp = $requestData['columns'][8]['search']['value'];


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
	4 => 'driven_enchant_type',
	5 =>'client_version',
	6 => 'equipment_slots',
	7 => 'attack_range'	
);

// getting total number records without any search
$sql = "SELECT id ";
$sql.=" FROM client_achievement ";
$sql.=" where active = '1' ";








$query=mysqli_query($conn, $sql) or die("Whoopsie Doopsie~!");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;





$searchBox = strtr($requestData['search']['value'], array(
		"'" => '&apos;',
		));


$sql = "SELECT * ";
$sql.=" FROM client_achievement ";
$sql.=" where active = '1' ";







if( !empty($requestData['search']['value']) ) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
	$sql.=" AND ( id LIKE '".$searchBox."%' "; 
	$sql.=" OR name LIKE '".$searchBox."%' )";

	
}


$query=mysqli_query($conn, $sql) or die("Whoopsie Doopsie~!");
$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result. 
$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
/* $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc  */	
$query=mysqli_query($conn, $sql) or die("employee-grid-data.php: get employees");

$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 

	$localization = !empty($row['search_' . $language]) ? $row['search_' . $language] : $row['search_ko'];
	$clientversion=mb_substr($row["client_version"], 0, 10);
	$clientversionfull=$row["client_version"];
	
	$nestedData[] = $row["id"];
	$nestedData[] = $row["minlevel"] . '~' . $row["maxlevel"];
	$nestedData[] = $row["name"] . '<br>' . $row["action"] . '<br>' . $row["action1"] . '<br>' . $row["action2"] . '<br>' . $row["action3"] . '<br>' . $row["action4"] . '<br>' . $row["action5"];
	$nestedData[] = $row["type"];
	$nestedData[] = $row["repeats"];
	$nestedData[] = $row["id"];
	$nestedData[] = '';
	$nestedData[] = '';
	$nestedData[] = '';
	
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
