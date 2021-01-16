<?php

function isClassic() {
	return $_GET['classic'];
}

include $_SERVER['DOCUMENT_ROOT'] . '/aionpb/DB/db_config.php';
include '../AionExtensions/include/include_skill.php';


// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;

$lowerid = $_GET['lowerid'];
$higherid = $_GET['higherid'];
$getquality = $_GET['getquality'];
$lang = $_GET['lang'];
$type = $_GET['type'];


$combined = '';
$typesql = '';
if ($type == 'clothes') {
	$typesql .= ' WHERE ((id between 110900001 and 110969999 )';
	$typesql .= ' or (id between 113000001 and 113069999 )';
	$typesql .= ' or (id between 112000001 and 112069999 )';
	$typesql .= ' or (id between 111000001 and 111069999 )';
	$typesql .= ' or (id between 114000001 and 114069999 ))';
	$combined = 'yes';
}elseif ($type == 'chain') {
	$typesql .= ' WHERE ((id between 110500001 and 110569999 )';
	$typesql .= ' or (id between 113500001 and 113569999 )';
	$typesql .= ' or (id between 112500001 and 112569999 )';
	$typesql .= ' or (id between 111500001 and 111569999 )';
	$typesql .= ' or (id between 114500001 and 114569999 ))';
	$combined = 'yes';
}elseif ($type == 'cloth') {
	$typesql .= ' WHERE ((id between 110100005 and 110169999 )';
	$typesql .= ' or (id between 111100005 and 111169999 )';
	$typesql .= ' or (id between 112100005 and 112169999 )';
	$typesql .= ' or (id between 113100005 and 113169999 )';
	$typesql .= ' or (id between 114100005 and 114169999 ))';
	$combined = 'yes';
}elseif ($type == 'leather') {
	$typesql .= ' WHERE ((id between 110300005 and 110369999 )';
	$typesql .= ' or (id between 111300005 and 111369999 )';
	$typesql .= ' or (id between 112300005 and 112369999 )';
	$typesql .= ' or (id between 113300005 and 113369999 )';
	$typesql .= ' or (id between 114300005 and 114369999 ))';
	$combined = 'yes';
}elseif ($type == 'plate') {
	$typesql .= ' WHERE ((id between 110600003 and 110669999 )';
	$typesql .= ' or (id between 111600003 and 111669999 )';
	$typesql .= ' or (id between 112600003 and 112669999 )';
	$typesql .= ' or (id between 113600003 and 113669999 )';
	$typesql .= ' or (id between 114600005 and 114669999 ))';
	$combined = 'yes';
}



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
$sql.=" FROM client_items ";


if ($lowerid > 1000 && $combined == NULL){
	$sql .= "WHERE ( id >= $lowerid ) ";	
}else{
	$sql .= $typesql;
}

if ($higherid > 1000 && $combined == NULL){
	$sql .= " AND ( id <= $higherid ) ";	
}

if ($getquality != NULL and $itemquality == NULL ){
	$sql .= " AND ( quality like '$getquality' ) ";	
}



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


$query=mysqli_query($conn, $sql) or die("Whoopsie Doopsie~!");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;





$searchBox = strtr($requestData['search']['value'], array(
		"'" => '&apos;',
		));


$sql = "SELECT client_version, id, quality, icon_name, search_$language, search_ko, level, armor_type, equipment_slots, attack_range, race_permitted, bonus_attr1, bonus_attr2, bonus_attr3, bonus_attr4, bonus_attr5, bonus_attr6, bonus_attr7, bonus_attr8, bonus_attr9, bonus_attr10, bonus_attr11, bonus_attr12, bonus_attr_a1, bonus_attr_a2, bonus_attr_a3, bonus_attr_a4, bonus_attr_b1, bonus_attr_b2, bonus_attr_b3, bonus_attr_b4, driven_enchant_type, mesh ";
$sql.=" FROM client_items ";

if ($lowerid > 1000 && $combined == NULL ){
	$sql .= "WHERE ( id >= $lowerid ) ";	
}else{
	$sql .= $typesql;
}

if ($higherid > 1000 && $combined == NULL){
	$sql .= " AND ( id <= $higherid ) ";	
}

if ($getquality != NULL and $itemquality == NULL ){
	$sql .= " AND ( quality like '$getquality' ) ";	
}


if( !empty($itemquality) ){
	
	$tags = explode(', ', $itemquality);
	
	foreach($tags as $key) {    
		$sqlnods .= " quality = '" . $key . "' or ";    
	}

  
    $sql.=" AND ( " . $sqlnods ." quality = '1') ";

}  


if( !empty($itemslot) ){
	
	$tags = explode(', ', $itemslot);
	
	foreach($tags as $key) {    
		$slotnods .= " equipment_slots = '" . $key . "' or ";    
	}

  
    $sql.=" AND ( " . $slotnods ." equipment_slots = '1') ";

}  






if ($extend == '1'){

		if (($lowerid >= 100000001) && ($higherid <= 100100000)) {
			$sql .= " AND ( attack_range >  1.5 ) ";
		}elseif (($lowerid >= 100100001) && ($higherid <= 100200000)) {
			$sql .= " AND ( attack_range >  2 ) ";
		}elseif  (($lowerid >= 100200001) && ($higherid <= 100300000)) {
			$sql .= " AND ( attack_range >  2 ) ";
		}elseif (($lowerid >= 100900001) && ($higherid <= 100999999)) {
			$sql .= " AND ( attack_range >  2 ) ";
		}elseif (($lowerid >= 101300001) && ($higherid <= 101400000)) {
			$sql .= " AND ( attack_range >  2.5 ) ";
		}elseif (($lowerid >= 101500001) && ($higherid <= 101600000)) {
			$sql .= " AND ( attack_range >  2 ) ";
		}


}











// itemstats = "maxhp, maxmp"

if( !empty($itemstats) ){
	
	$tags = explode(', ', $itemstats);
	
	foreach($tags as $key) {    
		$statnods .= " 
( bonus_attr1 like '" . $key . " %' or 
bonus_attr2 like '" . $key . " %' or 
bonus_attr3 like '" . $key . " %' or 
bonus_attr4 like '" . $key . " %' or 
bonus_attr5 like '" . $key . " %' or 
bonus_attr6 like '" . $key . " %' or 
bonus_attr7 like '" . $key . " %' or 
bonus_attr8 like '" . $key . " %' or 
bonus_attr9 like '" . $key . " %' or 
bonus_attr10 like '" . $key . " %' or 
bonus_attr11 like '" . $key . " %' or 
bonus_attr12 like '" . $key . " %' or

bonus_attr_a1  like '" . $key . " %' or 
bonus_attr_a2  like '" . $key . " %' or 
bonus_attr_a3  like '" . $key . " %' or 
bonus_attr_a4  like '" . $key . " %' or 

bonus_attr_b1  like '" . $key . " %' or 
bonus_attr_b2  like '" . $key . " %' or 
bonus_attr_b3  like '" . $key . " %' or 
bonus_attr_b4  like '" . $key . " %' ) and 



		";    
	}

  
    $sql.=" AND ( " . $statnods ." 1 = 1) ";

}  







































if( !empty($racefilter) ){
	$sql.=" AND ( race_permitted = '" . $racefilter . "'   ) ";
}

if( !empty($pvevp) ){
	$sql.=" AND ( driven_enchant_type = '" . $pvevp . "'   ) ";
}

if ( !empty($lowlevelfilter) and $lowlevelfilter > 0) {
		$sql.= " AND ( level >= $lowlevelfilter ) ";
}

if ( !empty($highlevelfilter) ) {
		$sql.= " AND ( level <= $highlevelfilter ) ";
}






if( !empty($requestData['search']['value']) ) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
	$sql.=" AND ( id LIKE '".$searchBox."%' "; 
	$sql.=" OR search_$language LIKE '%".$searchBox."%' ";
	$sql.=" OR search_ko LIKE '%".$searchBox."%' ";
	$sql.=" OR level LIKE '".$searchBox."%' ";
	$sql.=" OR driven_enchant_type LIKE '".$searchBox."%' ";
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

	$localization = !empty($row['search_' . $language]) ? $row['search_' . $language] : $row['search_ko'];
	$clientversion=mb_substr($row["client_version"], 0, 10);
	$clientversionfull=$row["client_version"];
	$mesh_pre = strtolower($row["mesh"]);
	$id = $row["id"];
	$icon_name = strtolower($row["icon_name"]);
	$fin_icon_name = strtr($icon_name, array(
		".dds" => '',
	));

	
	$driven_enchant_type = strtoupper($row["driven_enchant_type"]);
	
	if ($driven_enchant_type == 'DESTRUCTION' ) {
		$itemtype = 'Extreme';
	}else {
		$itemtype = $driven_enchant_type;
	}
	
	
	$mesh = strtr($mesh_pre, array(
				"_body" => '',
				"_foot" => '',
				"_hand" => '',
				"_leg" => '',
				"_shoulder" => '',
				));
				
	
$previeList = '';	
if (($id >= 100000001) && ($id <= 102299999)) {
	$previeList = '<span style="display: block;  float: right;" class="itempreviewlist" mesh="'.$mesh.'" meshID="' . $id . '" ><img src="https://aionpowerbook.com/powerbook/skins/MonoBook/img/itemfeatures/itempreview2.png"></span>';
}elseif (($id >= 110600003) && ($id <= 114069999)) {
	$previeList = '<span style="display: block;  float: right;" class="itempreviewlist" mesh="'.$mesh.'" meshID="' . $id . '" ><img src="https://aionpowerbook.com/powerbook/skins/MonoBook/img/itemfeatures/itempreview2.png"></span>';
}elseif (($id >= 115000011) && ($id <= 115069999)) {
	$previeList = '<span style="display: block;  float: right;" class="itempreviewlist" mesh="'.$mesh.'" meshID="' . $id . '" ><img src="https://aionpowerbook.com/powerbook/skins/MonoBook/img/itemfeatures/itempreview2.png"></span>';
}elseif (($id >= 187000000) && ($id <= 187069999)) {
	$previeList = '<span style="display: block;  float: right;" class="itempreviewlist" mesh="'.$mesh.'" meshID="' . $id . '" ><img src="https://aionpowerbook.com/powerbook/skins/MonoBook/img/itemfeatures/itempreview2.png"></span>';
}elseif (($id >= 190100000) && ($id <= 190199999)) {
	//$previeList = '<span style="display: block;  float: right;" class="itempreviewlist" mesh="'.$mesh.'" meshID="' . $id . '" ><img src="https://aionpowerbook.com/powerbook/skins/MonoBook/img/itemfeatures/itempreview2.png"></span>';	
}elseif ($type == 'cloth') {
	$previeList = '<span style="display: block;  float: right;" class="itempreviewlist" mesh="'.$mesh.'" meshID="cloth" ><img src="https://aionpowerbook.com/powerbook/skins/MonoBook/img/itemfeatures/itempreview2.png"></span>';
}elseif ($type == 'leather') {
	$previeList = '<span style="display: block;  float: right;" class="itempreviewlist" mesh="'.$mesh.'" meshID="leather" ><img src="https://aionpowerbook.com/powerbook/skins/MonoBook/img/itemfeatures/itempreview2.png"></span>';
}elseif ($type == 'chain') {
	$previeList = '<span style="display: block;  float: right;" class="itempreviewlist" mesh="'.$mesh.'" meshID="chain" ><img src="https://aionpowerbook.com/powerbook/skins/MonoBook/img/itemfeatures/itempreview2.png"></span>';
}elseif ($type == 'plate') {
	$previeList = '<span style="display: block;  float: right;" class="itempreviewlist" mesh="'.$mesh.'" meshID="plate" ><img src="https://aionpowerbook.com/powerbook/skins/MonoBook/img/itemfeatures/itempreview2.png"></span>';
}else {
	$previeList = '';
}


	if (isClassic() == "1") {
		$cl = "_c";
	}

	
	$nestedData[] = $row["id"];
	$nestedData[] = '<img class="thumb" src="https://aionpowerbook.com/item/icon'.$cl.'/' . $fin_icon_name . '.png" width="37" height="37" alt="">';
	$nestedData[] = '<span><a href="https://aionpowerbook.com/powerbook/Item/' . $row["id"] . '" class="tooltipzy col_' . strtolower($row["quality"]) . ' bold" tooltipID="' . $row["id"] . '" tooltiplang="'.$language.'" classic="' . isClassic() . '">' . $localization . '</a></span>
	
	'.$previeList.'
	
	
	';
	$nestedData[] = $row["level"];
	$nestedData[] = $itemtype;
	$nestedData[] = '<div title="' . $clientversionfull . '">' . $clientversion . '</div>';
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
