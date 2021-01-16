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





$code = $_GET['lang'];



function material($name, $quantity, $lang)
{
	if ($name == 'world_luna_craft_material_tuestone_01') {
		$material =  '<div style="text-align:center;display:inline-block;"><a href="https://aionpowerbook.com/powerbook/Item/152150001" class="tooltipzy" tooltipID="152150001" tooltiplang="'.$lang.'"><img class="thumb3" src="https://aionpowerbook.com/item/icon/icon_world_luna_craft_material_tuestone_01.png"  alt=""></a><br>(' . $quantity . ')</div>&nbsp;';
	}elseif ($name == 'world_luna_craft_material_wedstone_01') {
		$material =  '<div style="text-align:center;display:inline-block;"><a href="https://aionpowerbook.com/powerbook/Item/152150002" class="tooltipzy" tooltipID="152150002" tooltiplang="'.$lang.'"><img class="thumb3" src="https://aionpowerbook.com/item/icon/icon_world_luna_craft_material_wedstone_01.png"  alt=""></a><br>(' . $quantity . ')</div>&nbsp;';
	}elseif ($name == 'world_luna_craft_material_thurstone_01') {
		$material =  '<div style="text-align:center;display:inline-block;"><a href="https://aionpowerbook.com/powerbook/Item/152150003" class="tooltipzy" tooltipID="152150003" tooltiplang="'.$lang.'"><img class="thumb3" src="https://aionpowerbook.com/item/icon/icon_world_luna_craft_material_thurstone_01.png"  alt=""></a><br>(' . $quantity . ')</div>&nbsp;';
	}elseif ($name == 'world_luna_craft_material_fristone_01') {
		$material =  '<div style="text-align:center;display:inline-block;"><a href="https://aionpowerbook.com/powerbook/Item/152150004" class="tooltipzy" tooltipID="152150004" tooltiplang="'.$lang.'"><img class="thumb3" src="https://aionpowerbook.com/item/icon/icon_world_luna_craft_material_fristone_01.png"  alt=""></a><br>(' . $quantity . ')</div>&nbsp;';
	}elseif ($name == 'world_luna_craft_material_lunabless_01') {
		$material =  '<div style="text-align:center;display:inline-block;"><a href="https://aionpowerbook.com/powerbook/Item/152150006" class="tooltipzy" tooltipID="152150006" tooltiplang="'.$lang.'"><img class="thumb3" src="https://aionpowerbook.com/item/icon/icon_world_luna_craft_material_lunabless_01.png"  alt=""></a><br>(' . $quantity . ')</div>&nbsp;';
	}elseif ($name == 'world_luna_craft_material_lunalight_01') {
		$material =  '<div style="text-align:center;display:inline-block;"><a href="https://aionpowerbook.com/powerbook/Item/152150005" class="tooltipzy" tooltipID="152150005" tooltiplang="'.$lang.'"><img class="thumb3" src="https://aionpowerbook.com/item/icon/icon_world_luna_craft_material_lunalight_01.png"  alt=""></a><br>(' . $quantity . ')</div>&nbsp;';
	}else {
		$material = '';
	}
	
	return $material;
}


function item($name, $lang, $type, $loca)
{
$servername = "mysqlhost";
$username = "login2";
$password = "passw";
$dbname = "login";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
mysqli_set_charset($conn,"utf8");
$sql = "
SELECT id, quality, icon_name
FROM client_items
WHERE name = '$name'
       ";

    $query=mysqli_query($conn, $sql) or die(mysqli_error());
    $result = mysqli_fetch_assoc($query);
	$id = $result["id"];
	$quality = strtolower($result["quality"]);
	$icon_name = strtolower($result["icon_name"]);
	$fin_icon_name = strtr($icon_name, array(
		".dds" => '',
		));

	
	if ($type == '1'){
		return '<a class="tooltipzy col_'.$quality.'" href="https://aionpowerbook.com/powerbook/Item/'.$id.'" tooltipid="'.$id.'" tooltiplang="'.$lang.'" >'.$loca.'</a>';
	}else {
		return '<a href="https://aionpowerbook.com/powerbook/Item/' . $id . '" class="tooltipzy" tooltipID="' . $id . '" tooltiplang="'.$lang.'"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $fin_icon_name . '.png"  alt=""></a>';
	}
	
}









$krtype = $_GET['type'];

if ($krtype == '1'){
	$korea = 'client_luna_recipe_kr';
	
}else {
	$korea = 'client_luna_recipe_eu';
}


$racefilter = $requestData['columns'][4]['search']['value'];
$probfilter = $requestData['columns'][2]['search']['value'];




$columns = array( 
// datatable column index  => database column name
	0 => 'id',
	1 => 'search_' . $code,
	2 => 'compo1_quantity',
	3 => 'combine_rate',
	4 => 'qualification_race'
);

// getting total number records without any search
$sql = "SELECT id ";
$sql.=" FROM $korea ";
$query=mysqli_query($conn, $sql) or die("Whoopsie Doopsie~!!");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.





$searchBox = strtr($requestData['search']['value'], array(
		"'" => '&apos;',
		"elyos" => 'PC_Light',
		"asmodian" => 'PC_Dark',
		
		));


$sql ="SELECT * ";
$sql.=" FROM $korea ";
$sql .=" where id like '%' ";


if( !empty($racefilter) ){ //race filter
	$sql.=" AND ( qualification_race = '" . $racefilter . "'  or qualification_race = 'all' ) ";
}

if( !empty($probfilter) ){ //race filter
	$sql.=" AND ( combine_rate = '" . $probfilter . "' ) ";
}



if( !empty($requestData['search']['value']) ) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
	$sql.=" and ( product_quantity LIKE '".$searchBox."%' "; 
	$sql.=" OR compo1_quantity LIKE '".$searchBox."%' ";
	$sql.=" OR compo2_quantity LIKE '".$searchBox."%' ";
	$sql.=" OR compo3_quantity LIKE '".$searchBox."%' ";
	$sql.=" OR compo4_quantity LIKE '".$searchBox."%' ";
	$sql.=" OR compo5_quantity LIKE '".$searchBox."%' ";
	$sql.=" OR combine_rate LIKE '".$searchBox."%' ";
	$sql.=" OR search_$code LIKE '%".$searchBox."%' ";
	$sql.=" OR search_ko LIKE '%".$searchBox."%' ";
	$sql.=" OR qualification_race LIKE '".$searchBox."%' )";

	
}
$query=mysqli_query($conn, $sql) or die("Whoopsie Doopsie~!!");
$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result. 
$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
/* $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc  */	
$query=mysqli_query($conn, $sql) or die("Whoopsie Doopsie~!!");

$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 
	
	$prodquantity = '';
	if ($row["product_quantity"] > 1) {
		$prodquantity = '&nbsp;(x'.$row["product_quantity"].')';
	}
	
	$loca = !empty($row['search_'.$code]) ? $row['search_'.$code] : $row['search_ko'];
	
	
	
	
	$nestedData[] = item($row["product"], $code, '2', '');
	$nestedData[] = item($row["product"], $code, '1', $loca);
	$nestedData[] = material($row["component1"], $row["compo1_quantity"], $code) . material($row["component2"], $row["compo2_quantity"], $code) . material($row["component3"], $row["compo3_quantity"], $code) . material($row["component4"], $row["compo4_quantity"], $code) . material($row["component5"], $row["compo5_quantity"], $code);
	$nestedData[] = $row["combine_rate"].'%';
	$nestedData[] = '<span class="'.strtolower($row["qualification_race"]).'"></span>';

	
	
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
