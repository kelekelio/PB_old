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


// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;

$map = $_GET['map'];
$map2 = $_GET['map2'];
$lang = $_GET['lang'];


if ($map2 != NULL) {
	$addmap = "or map = '". $map2 ."' "; 
}

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
	1 => 'disk_type',
	2 => 'search_'.$language,
	3 => 'level',
	4 => 'hp',
	5 => 'magical_skill_boost_resist',
	6 =>'client_version'
);

// getting total number records without any search
$sql = "SELECT id ";
$sql.=" FROM client_npcs_monster ";
$sql.=" WHERE map = '$map' $addmap ";
$sql.=" and (description != 'STR_NPC_NO_NAME') ";
$query=mysqli_query($conn, $sql) or die("Whoopsie Doopsie~!");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.





$searchBox = strtr($requestData['search']['value'], array(
		"'" => '&apos;',
		"," => '',
		));


$sql = "SELECT id, disk_type, hpgauge_level, ui_type, stare_distance, search_".$language.", search_ko, level, hp, magical_skill_boost_resist, client_version, race_type, map ";
$sql.=" FROM client_npcs_monster ";
$sql.=" WHERE ( map = '$map' $addmap )";
$sql.=" and (description != 'STR_NPC_NO_NAME') ";


if( !empty($requestData['columns'][3]['search']['value']) ){ //type
	
	$tags = explode(', ', $requestData['columns'][3]['search']['value']);
	
	foreach($tags as $key) {    
		$sqlnods .= " race_type = '" . $key . "' or ";    
	}

  
    $sql.=" AND ( " . $sqlnods ." race_type = '1') ";

}



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
$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result. 
$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
/* $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc  */	
$query=mysqli_query($conn, $sql) or die("Whoopsie Doopsie~!");

$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 

	$localization = !empty($row['search_'.$language]) ? $row['search_'.$language] : $row['search_ko'];
	$clientversion=mb_substr($row["client_version"], 0, 10);
	$clientversionfull=$row["client_version"];
	






$disk_type = strtolower($row["disk_type"]);
$hpgauge_level = $row["hpgauge_level"];
$ui_type = $row["ui_type"];

if ($row["stare_distance"] > 0) {
	$agressive = '_a';
}

$itemicon = '';
if ($disk_type == 'guard') {
	$itemicon = 'icon_emblem_guard';
}elseif ($disk_type == 'ancientclan') {
	$itemicon = 'icon_emblem_ancientclan'; 
}elseif ($disk_type == 'inhabitant') {
	$itemicon = 'icon_emblem_inhabitant';
}elseif ($disk_type == 'merchant') {
	$itemicon = 'icon_emblem_merchant';
}elseif ($disk_type == 'polymorph_human') {
	$itemicon = '';
}elseif ($disk_type == 'polymorph_table_scale') {
	$itemicon = '';
}elseif ($disk_type == NULL) {
	$itemicon = 'icon_emblem_etc';
}elseif ($disk_type == 'god') {
	$itemicon = 'icon_emblem_etc';
}elseif ($disk_type == 'function') {
	$itemicon = 'icon_emblem_function';
}elseif ($disk_type == 'etc') {
	$itemicon = 'icon_emblem_etc';
}elseif ($disk_type == 'e_water') {
	$itemicon = 'icon_emblem_e_water';
}elseif ($disk_type == 'e_fire') {
	$itemicon = 'icon_emblem_e_fire';
}elseif ($disk_type == 'e_earth') {
	$itemicon = 'icon_emblem_e_earth';
}elseif ($disk_type == 'e_air') {
	$itemicon = 'icon_emblem_e_air';
}elseif ($disk_type == 'drakan') {
	$itemicon = 'icon_emblem_etc';
}elseif ($disk_type == 'd1' or $disk_type == 'd2' or $disk_type == 'd3' or $disk_type == 'd4' or $disk_type == 'd5' or $disk_type == 'd6' or $disk_type == 'd7') {
	if ($hpgauge_level == 1 or $hpgauge_level == 10 or $hpgauge_level == 20  or $hpgauge_level == 26) {
		$itemicon = 'icon_emblem_monster_n_1' . $agressive;
	}elseif ($hpgauge_level == 2 or $hpgauge_level == 11 or $hpgauge_level == 21 or $hpgauge_level == 27) {
		$itemicon = 'icon_emblem_monster_n_2' . $agressive;
	}elseif ($hpgauge_level == 3 or $hpgauge_level == 12 or $hpgauge_level == 22) {
		$itemicon = 'icon_emblem_monster_n_3' . $agressive;
	}elseif ($hpgauge_level == 4 or $hpgauge_level == 13 or $hpgauge_level == 23) {
		$itemicon = 'icon_emblem_monster_r_1' . $agressive;
	}elseif ($hpgauge_level == 5 or $hpgauge_level == 14 or $hpgauge_level == 24) {
		$itemicon = 'icon_emblem_monster_r_2' . $agressive;
	}elseif ($hpgauge_level == 6 or $hpgauge_level == 15 or $hpgauge_level == 25) {
		$itemicon = 'icon_emblem_monster_r_3' . $agressive;
	}
}


if ($ui_type == 'trap') {
	$itemicon = 'icon_emblem_etc';
}elseif ($ui_type == 'NoneButRotate') {
	$itemicon = 'icon_emblem_etc';
}elseif ($ui_type == 'none') {
	$itemicon = 'icon_emblem_etc';
}
		
	$nestedData[] = $row["id"];
	$nestedData[] = '<img class="thumb4" src="https://aionpowerbook.com/npc/icon/' . $itemicon . '.png" width="37" height="37" alt="">';
	$nestedData[] = '<a href="https://aionpowerbook.com/powerbook/NPC/' . $row["id"] . '">' . $localization . '</a>';
	$nestedData[] = $row["level"];
	$nestedData[] = number_format($row["hp"]);
	$nestedData[] = number_format($row["magical_skill_boost_resist"]);
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
