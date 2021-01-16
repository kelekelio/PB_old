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

$term = $_GET['term'];
$lang = $_GET['lang'];
$type = $_GET['type'];




$locavariable = '+' . strtr($term, array(
    "AZ00" => '&apos;',
	"AZ01" => '"',
	'AZ02' => '+',
	' ' => ' +'
));


 if($lang == "fr"){
	$language = 'search_fr';
	$toollang = 'fr';
} 
elseif($lang == "de"){
	$language = 'search_de';
	$toollang = 'de';
}
elseif($lang == "it"){
	$language = 'search_it';
	$toollang = 'it';
}
elseif($lang == "pl"){
	$language = 'search_pl';
	$toollang = 'pl';
}
elseif($lang == "ko"){
	$language = 'search_ko';
	$toollang = 'ko';
}
elseif($lang == "tr"){
	$language = 'search_tr';
	$toollang = 'en';
}
elseif($lang == "es"){
	$language = 'search_es';
	$toollang = 'es';
}
elseif($lang == "en"){
	$language = 'search_us';
	$toollang = 'us';
}else {
	$language = 'search_en';
	$toollang = 'en';
}


if ($type == '1') {
	$selectcolumns = 'id, name, icon_name, quality, level, search_ko';
	$table = 'client_items';
	$columns = array( 
	0 => 'id',
	1 => 'icon_name',
	2 => $language,
	3 => 'level'
);

}elseif ($type == '2') {
	$selectcolumns = 'id, name, disk_type, hpgauge_level, magical_skill_boost_resist, hp, level, search_ko';
	$table = 'client_npcs_monster';
	$columns = array( 
	0 => 'id',
	1 => 'disk_type',
	2 => $language,
	3 => 'level',
	4 => 'hp',
	5 => 'magical_skill_boost_resist'
);

}else {
	$selectcolumns = 'id, name, category1, client_level, search_ko';
	$table = 'client_quest';
	$columns = array( 
	0 => 'id',
	1 => 'category1',
	2 => $language,
	3 => 'client_level'
);
}


//$lanque = 'search_body, search_US, name'; //korean, selected, dev name



// getting total number records without any search
$sql = "SELECT id ";
$sql.=" FROM $table ";
$sql.=" WHERE $language like '% " . $term . "%' or search_ko like '% " . $term . "%' or name = '" . $term . "' ";

$query=mysqli_query($conn, $sql) or die("employee-grid-data.php: get employees");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


$searchBox = '+' . strtr($requestData['search']['value'], array(
		"'" => '&apos;',
		" " => ' +',
		));

$sql = "SELECT $selectcolumns, $language ";
$sql.=" FROM $table ";
$sql.=" WHERE $language like '%" . $term . "%' or search_ko like '%" . $term . "%' or name = '" . $term . "' ";

$query=mysqli_query($conn, $sql) or die("employee-grid-data.php: get employees");
$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result. 
$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
/* $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc  */	
$query=mysqli_query($conn, $sql) or die("employee-grid-data.php: get employees");

$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 

	$localization = !empty($row[$language]) ? $row[$language] : $row['search_ko'];
	
	
	// Quest, type 3
	if ($type == '3') {		
	$nestedData[] = $row["id"];
	$nestedData[] = '<img class="thumb" src="https://aionpowerbook.com/images/q2.png" width="37" height="37" alt="">';
	$nestedData[] = '<div class="link_' . $row["category1"] . '"><a href="/powerbook/Quest:' . $row["id"] . '">' . $localization . '</a></div>';
	$nestedData[] = $row["client_level"];
	}
	// NPC, type 2
	elseif ($type == '2') {
		
		$isontem = strtolower($row["disk_type"]);
		
if ($isontem == 'guard') {
	$itemicon = 'icon_emblem_guard';

}elseif ($isontem == 'ancientclan') {
	$itemicon = 'icon_emblem_ancientclan';

}elseif ($isontem == 'inhabitant') {
	$itemicon = 'icon_emblem_inhabitant';

}elseif ($isontem == 'merchant') {
	$itemicon = 'icon_emblem_merchant';

}elseif ($isontem == 'polymorph_human') {
	$itemicon = '';

}elseif ($isontem == 'polymorph_table_scale') {
	$itemicon = '';

}elseif ($isontem == 'god') {
	$itemicon = 'icon_emblem_etc';

}elseif ($isontem == 'function') {
	$itemicon = 'icon_emblem_function';

}elseif ($isontem == 'etc') {
	$itemicon = 'icon_emblem_etc';

}elseif ($isontem == 'e_water') {
	$itemicon = 'icon_emblem_e_water';

}elseif ($isontem == 'e_fire') {
	$itemicon = 'icon_emblem_e_fire';

}elseif ($isontem == 'e_earth') {
	$itemicon = 'icon_emblem_e_earth';

}elseif ($isontem == 'e_air') {
	$itemicon = 'icon_emblem_e_air';

}elseif ($isontem == 'drakan') {
	$itemicon = 'icon_emblem_etc';

}elseif ($isontem == 'd1' or $isontem == 'd2' or $isontem == 'd3' or $isontem == 'd4' or $isontem == 'd5' or $isontem == 'd6' or $isontem == 'd7') {
	if ($row["hpgauge_level"] == 1 or $row["hpgauge_level"] == 10 or $row["hpgauge_level"] == 20  or $row["hpgauge_level"] == 26) {
		$itemicon = 'icon_emblem_monster_n_1_a';
		
	}elseif ($row["hpgauge_level"] == 2 or $row["hpgauge_level"] == 11 or $row["hpgauge_level"] == 21 or $row["hpgauge_level"] == 27) {
		$itemicon = 'icon_emblem_monster_n_2_a';
		
	}elseif ($row["hpgauge_level"] == 3 or $row["hpgauge_level"] == 12 or $row["hpgauge_level"] == 22) {
		$itemicon = 'icon_emblem_monster_n_3_a';
		
	}elseif ($row["hpgauge_level"] == 4 or $row["hpgauge_level"] == 13 or $row["hpgauge_level"] == 23) {
		$itemicon = 'icon_emblem_monster_r_1_a';
		
	}elseif ($row["hpgauge_level"] == 5 or $row["hpgauge_level"] == 14 or $row["hpgauge_level"] == 24) {
		$itemicon = 'icon_emblem_monster_r_2_a';
		
	}elseif ($row["hpgauge_level"] == 6 or $row["hpgauge_level"] == 15 or $row["hpgauge_level"] == 25) {
		$itemicon = 'icon_emblem_monster_r_3_a';
		
	}
}else {
	$itemicon = 'icon_emblem_etc';
}
		
	$nestedData[] = $row["id"];
	$nestedData[] = '<img class="thumb" src="https://aionpowerbook.com/npc/icon/' . $itemicon . '.png" width="37" height="37" alt="">';
	$nestedData[] = '<a href="/powerbook/NPC:' . $row["id"] . '">' . $localization . '</a>';
	$nestedData[] = $row["level"];
	$nestedData[] = $row["hp"];
	$nestedData[] = $row["magical_skill_boost_resist"];
	
	}else {
	$nestedData[] = $row["id"];
	$nestedData[] = '<img class="thumb" src="https://aionpowerbook.com/item/icon/' . strtolower($row["icon_name"]) . '.png" width="37" height="37" alt="">';
	$nestedData[] = '<a class="tooltipzy col_' . strtolower($row["quality"]) . ' bold" href="/powerbook/Item/' . $row["id"] . '" tooltipID="' . $row["id"] . '" tooltiplang="'.$toollang.'">' . $localization . '</a>';
	$nestedData[] = $row["level"];
	}
	
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
