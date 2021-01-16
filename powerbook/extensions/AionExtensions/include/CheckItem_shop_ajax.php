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



function getShopList($name, $lang) 
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
FROM client_npc_goodslist_2
where item like '% " . $name . " %' or itembuy_limit like '% " . $name . " %' 
       ";

    $query=mysqli_query($conn, $sql) or die(mysqli_error());
	
	
	
    $Itemarray = array();
    while ($result = mysqli_fetch_assoc($query)) {
	    $Itemarray[] = $result["name"];
	}	
	
foreach ($Itemarray as $EachItemarray) {
$temp .= " etab = '".$EachItemarray."' or etab1 = '".$EachItemarray."' or etab2 = '".$EachItemarray."' or etab3 = '".$EachItemarray."' or etab4 = '".$EachItemarray."' or etab5 = '".$EachItemarray."' or etab6 = '".$EachItemarray."' or tab = '".$EachItemarray."' or tab1 = '".$EachItemarray."' or tab2 = '".$EachItemarray."' or tab3 = '".$EachItemarray."' or tab4 = '".$EachItemarray."' or atab = '".$EachItemarray."' or atab1 = '".$EachItemarray."' or atab2 = '".$EachItemarray."' or atab3 = '".$EachItemarray."' or atab4 = '".$EachItemarray."' or " ;  
}
	
	
	return $temp;
}





// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;

$type = $_GET['type'];
$lang = strtolower($_GET['lang']);
$name = $_GET['name'];


if (isClassic() == '1') {
    $cl = "_cl";
}


$serv = $_SERVER['DOCUMENT_ROOT'];
$cachefile = $serv . '/powerbook/extensions/AionExtensions/cache/itemshop/'.$lang.'/'.$name.'_' . $type . $cl . '.json';
$exists = file_exists($cachefile);

if( !$exists || ( $exists && time() > strtotime('+31 days', filemtime($cachefile)) )) {



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









$fromDB = getShopList($name, $lang);






$sql = "SELECT id, level, $language, search_ko, disk_type, hpgauge_level, ui_type, stare_distance, race_type ";
$sql.=" FROM client_npcs_monster WHERE $fromDB id = '1' ";
if( !empty($requestData['search']['value']) ) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
	$sql.=" AND ( id LIKE '%".$searchBox."%' "; 
	$sql.=" OR $language LIKE '".$searchBox."%' ";
	$sql.=" OR level LIKE '%".$searchBox."%' )";
}


$query=mysqli_query($conn, $sql) or die("employee-grid-data.php: get employees");

$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 

	$localization = !empty($row[$language]) ? $row[$language] : $row['search_ko'];
	

	
	

if (strtolower($row["race_type"]) == 'type_a') {
	$form = '<img src="https://aionpowerbook.com/npc/icon/npc_typea_buff.png" class="thumb3">';
}elseif (strtolower($row["race_type"]) == 'type_b') {
	$form = '<img src="https://aionpowerbook.com/npc/icon/npc_typeb_buff.png" class="thumb3">';
}elseif (strtolower($row["race_type"]) == 'type_c') {
	$form = '<img src="https://aionpowerbook.com/npc/icon/npc_typec_buff.png" class="thumb3">';
}elseif (strtolower($row["race_type"]) == 'type_d') {
	$form = '<img src="https://aionpowerbook.com/npc/icon/npc_typed_buff.png" class="thumb3">';
}else {
	$form = '';
}


$disk_type = strtolower($row["disk_type"]);
$hpgauge_level = $row["hpgauge_level"];
$ui_type = $row["ui_type"];

if ($row["stare_distance"] > 0) {
	$agressive = '_a';
}

$itemicon ='';
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
	$nestedData[] = '<img class="thumb" src="https://aionpowerbook.com/npc/icon/' . $itemicon . '.png" width="37" height="37" alt="">';
	$nestedData[] = '<a href="https://aionpowerbook.com/powerbook/NPC/' . $row["id"] . '">' . $form . ' ' . $localization . '</a>';
	$nestedData[] = $row["level"];
	
	
	$data[] = $nestedData;
}

$json_data = array(
			"data"            => $data   // total data array
			);

$final = json_encode($json_data);  // send data as json format

$servv = $_SERVER['DOCUMENT_ROOT'];
file_put_contents( $servv . '/powerbook/extensions/AionExtensions/cache/itemshop/' .$lang.'/'.$name.'_' . $type . $cl . '.json', $final);



echo $final;

}else {
	

	$servv = $_SERVER['DOCUMENT_ROOT'];
	$cachefilev = $servv . '/powerbook/extensions/AionExtensions/cache/itemshop/'.$lang.'/'.$name.'_' . $type . $cl . '.json';
	
	
	

	$string = file_get_contents($cachefilev);
	
	echo $string;
	
}

?>