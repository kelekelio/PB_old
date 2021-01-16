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
	return '<a class="tooltipzy" href="https://aionpowerbook.com/powerbook/Item/' . $id . '" tooltipID="' . $id . '" tooltiplang="' . $lang . '" classic="'.isClassic().'"><img src="https://aionpowerbook.com/item/icon/' . $extraicon_name . '.png" alt="" class="thumb3"></a>';
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
	if (isClassic() == '1') {
		$dbname = "kele01_classic";
	}

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
mysqli_set_charset($conn,"utf8");

    $sql = "
           SELECT name
FROM client_disassembly_item
where set_list_name_ = '" . $name . "'
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

	if (isClassic() == '1') {
		$dbname = "kele01_classic";
	}

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
mysqli_set_charset($conn,"utf8");

    $sql = "
           SELECT *
FROM client_disassembly_item_setlist2
where create_ like '% " . $name . " %'
       ";

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









if ($type = 'bundle'){
	$fromDB = getBundleList($name, $lang);
	
}




$columns = array( 
// datatable column index  => database column name
	0 => 'id',
	1 => 'icon_name',
	2 => $language,
	3 => 'level'
);



// getting total number records without any search
$sql = "SELECT id ";
$sql.=" FROM client_items ";
$sql.=" WHERE $fromDB id = '1' ";
$query=mysqli_query($conn, $sql) or die("employee-grid-data.php: get employees");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


$searchBox = strtr($requestData['search']['value'], array(
		"'" => '&apos;',
		));

$sql = "SELECT id, icon_name, level, quality, $language, search_ko ";
$sql.=" FROM client_items WHERE $fromDB id = '1' ";
if( !empty($requestData['search']['value']) ) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
	$sql.=" AND ( id LIKE '%".$searchBox."%' "; 
	$sql.=" OR $language LIKE '".$searchBox."%' ";
	$sql.=" OR price LIKE '%".$searchBox."%' )";
}
$query=mysqli_query($conn, $sql) or die("employee-grid-data.php: get employees");
$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result. 
$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
/* $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc  */	
$query=mysqli_query($conn, $sql) or die("employee-grid-data.php: get employees");

$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 

	$localization = !empty($row[$language]) ? $row[$language] : $row['search_ko'];


	if (isClassic() == '1') {
		$cl = "_c";
	}
	
	
	$nestedData[] = $row["id"];
	$nestedData[] = '<img class="thumb" src="https://aionpowerbook.com/item/icon' . $cl . '/' . strtolower($row["icon_name"]) . '.png" width="37" height="37" alt="">';
	$nestedData[] = '<a class="tooltipzy col_' . strtolower($row["quality"]) . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $row["id"] . '" tooltipID="' . $row["id"] . ' " tooltiplang="' . $lang . '" classic="' . isClassic() . '">' . $localization . '</a>';
	$nestedData[] = '<span style="white-space:nowrap;">' . $row["level"] . '</span>';
	
	
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
