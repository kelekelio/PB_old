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
	$classDir = "_cl";
}

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
mysqli_set_charset($conn,"utf8");
/* Database connection end */


// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;


$devname = $_GET['name'];
$lang = $_GET['lang'];
$type = $_GET['type'];





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





if ($type == 'extra') {
$columns = array( 
	0 => 'id',
	1 => 'icon_name',
	2 => $language,
	3 => 'level',
	
);

$from = 'client_items';
$where = "(abyss_item = '$devname' or extra_currency_item = '$devname' or trade_in_item = '$devname' or trade_in_item1 = '$devname' or trade_in_item2 = '$devname' )";
}elseif ($type == 'questreward'){
$columns = array( 
	0 => 'id',
	1 => 'icon_name',
	2 => $language,
	3 => 'client_level',
	
);	
$from = 'client_quest';
$where = "(reward_item1_1 like '$devname%' or reward_item1_2 like '$devname%' or reward_item1_3 like '$devname%'  or reward_item1_4 like '$devname%'  or reward_item1_5 like '$devname%' or reward_item2_1 like '$devname%' or reward_item2_2 like '$devname%' or reward_item2_3 like '$devname%' or reward_item3_1 like '$devname%' or reward_item3_2 like '$devname%' or reward_item3_3 like '$devname%' or reward_item4_1 like '$devname%' or selectable_reward_item1_1 like '$devname%' or selectable_reward_item1_2 like '$devname%' or selectable_reward_item1_3 like '$devname%' or selectable_reward_item1_4 like '$devname%' or selectable_reward_item1_5 like '$devname%' or selectable_reward_item1_6 like '$devname%' or selectable_reward_item1_7 like '$devname%' or selectable_reward_item1_8 like '$devname%' or selectable_reward_item1_9 like '$devname%' or selectable_reward_item1_10 like '$devname%' or selectable_reward_item1_11 like '$devname%' or selectable_reward_item1_12 like '$devname%' or selectable_reward_item1_13 like '$devname%' or selectable_reward_item1_14 like '$devname%' or selectable_reward_item1_15 like '$devname%' or selectable_reward_item2_1 like '$devname%' or selectable_reward_item2_2 like '$devname%' or selectable_reward_item2_3 like '$devname%' or selectable_reward_item2_4 like '$devname%' or selectable_reward_item2_5 like '$devname%' or selectable_reward_item2_6 like '$devname%' or selectable_reward_item2_7 like '$devname%' or selectable_reward_item2_8 like '$devname%' or selectable_reward_item2_9 like '$devname%' or selectable_reward_item2_10 like '$devname%' or selectable_reward_item2_11 like '$devname%' or selectable_reward_item2_12 like '$devname%' or selectable_reward_item2_13 like '$devname%' or selectable_reward_item3_1 like '$devname%' or selectable_reward_item3_2 like '$devname%' or selectable_reward_item3_3 like '$devname%' or selectable_reward_item3_4 like '$devname%' or selectable_reward_item3_5 like '$devname%' or selectable_reward_item3_6 like '$devname%' or selectable_reward_item4_1 like '$devname%' or selectable_reward_item4_2 like '$devname%' or selectable_reward_item4_3 like '$devname%' or selectable_reward_item4_4 like '$devname%' or selectable_reward_item4_5 like '$devname%' or selectable_reward_item5_1 like '$devname%' or selectable_reward_item5_2 like '$devname%' or selectable_reward_item5_3 like '$devname%' or selectable_reward_item5_4 like '$devname%' or selectable_reward_item5_5 like '$devname%' or selectable_reward_item6_1 like '$devname%' or fighter_selectable_item like '$devname%' or fighter_selectable_item1 like '$devname%' or fighter_selectable_item2 like '$devname%' or fighter_selectable_item3 like '$devname%' or fighter_selectable_item4 like '$devname%' or fighter_selectable_item5 like '$devname%' or fighter_selectable_item6 like '$devname%' or fighter_selectable_item7 like '$devname%' or fighter_selectable_item8 like '$devname%' or knight_selectable_item like '$devname%' or knight_selectable_item1 like '$devname%' or knight_selectable_item2 like '$devname%' or knight_selectable_item3 like '$devname%' or knight_selectable_item4 like '$devname%' or knight_selectable_item5 like '$devname%' or knight_selectable_item6 like '$devname%' or knight_selectable_item7 like '$devname%' or knight_selectable_item8 like '$devname%' or ranger_selectable_item like '$devname%' or ranger_selectable_item1 like '$devname%' or ranger_selectable_item2 like '$devname%' or ranger_selectable_item3 like '$devname%' or ranger_selectable_item4 like '$devname%' or ranger_selectable_item5 like '$devname%' or ranger_selectable_item6 like '$devname%' or ranger_selectable_item7 like '$devname%' or ranger_selectable_item8 like '$devname%' or assassin_selectable_item like '$devname%' or assassin_selectable_item1 like '$devname%' or assassin_selectable_item2 like '$devname%' or assassin_selectable_item3 like '$devname%' or assassin_selectable_item4 like '$devname%' or assassin_selectable_item5 like '$devname%' or assassin_selectable_item6 like '$devname%' or assassin_selectable_item7 like '$devname%' or assassin_selectable_item8 like '$devname%' or wizard_selectable_item like '$devname%' or wizard_selectable_item1 like '$devname%' or wizard_selectable_item2 like '$devname%' or wizard_selectable_item3 like '$devname%' or wizard_selectable_item4 like '$devname%' or wizard_selectable_item5 like '$devname%' or wizard_selectable_item6 like '$devname%' or wizard_selectable_item7 like '$devname%' or wizard_selectable_item8 like '$devname%' or elementalist_selectable_item like '$devname%' or elementalist_selectable_item1 like '$devname%' or elementalist_selectable_item2 like '$devname%' or elementalist_selectable_item3 like '$devname%' or elementalist_selectable_item4 like '$devname%' or elementalist_selectable_item5 like '$devname%' or elementalist_selectable_item6 like '$devname%' or elementalist_selectable_item7 like '$devname%' or elementalist_selectable_item8 like '$devname%' or priest_selectable_item like '$devname%' or priest_selectable_item1 like '$devname%' or priest_selectable_item2 like '$devname%' or priest_selectable_item3 like '$devname%' or priest_selectable_item4 like '$devname%' or priest_selectable_item5 like '$devname%' or priest_selectable_item6 like '$devname%' or priest_selectable_item7 like '$devname%' or priest_selectable_item8 like '$devname%' or chanter_selectable_item like '$devname%' or chanter_selectable_item1 like '$devname%' or chanter_selectable_item2 like '$devname%' or chanter_selectable_item3 like '$devname%' or chanter_selectable_item4 like '$devname%' or chanter_selectable_item5 like '$devname%' or chanter_selectable_item6 like '$devname%' or chanter_selectable_item7 like '$devname%' or chanter_selectable_item8 like '$devname%' or gunner_selectable_item like '$devname%' or gunner_selectable_item1 like '$devname%' or gunner_selectable_item2 like '$devname%' or gunner_selectable_item3 like '$devname%' or gunner_selectable_item4 like '$devname%' or gunner_selectable_item5 like '$devname%' or gunner_selectable_item6 like '$devname%' or gunner_selectable_item7 like '$devname%' or gunner_selectable_item8 like '$devname%' or bard_selectable_item like '$devname%' or bard_selectable_item1 like '$devname%' or bard_selectable_item2 like '$devname%' or bard_selectable_item3 like '$devname%' or bard_selectable_item4 like '$devname%' or bard_selectable_item5 like '$devname%' or bard_selectable_item6 like '$devname%' or bard_selectable_item7 like '$devname%' or bard_selectable_item8 like '$devname%' or rider_selectable_item like '$devname%' or rider_selectable_item1 like '$devname%' or rider_selectable_item2 like '$devname%' or rider_selectable_item3 like '$devname%' or rider_selectable_item4 like '$devname%' or rider_selectable_item5 like '$devname%' or rider_selectable_item6 like '$devname%' or rider_selectable_item7 like '$devname%' or rider_selectable_item8 like '$devname%' or painter_selectable_item like '$devname%' or painter_selectable_item1 like '$devname%' or painter_selectable_item2 like '$devname%' or painter_selectable_item3 like '$devname%' or painter_selectable_item4 like '$devname%' or painter_selectable_item5 like '$devname%' or painter_selectable_item6 like '$devname%' or painter_selectable_item7 like '$devname%' or painter_selectable_item8 like '$devname%' )";
}


// getting total number records without any search
$sql = "SELECT id ";
$sql.=" FROM $from ";
$sql.=" WHERE $where ";



$query=mysqli_query($conn, $sql) or die("employee-grid-data.php: get employees");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;


$searchBox = strtr($requestData['search']['value'], array(
		"'" => '&apos;',
		));
		

$sql ="SELECT * ";
$sql.=" FROM $from WHERE $where  ";
if( !empty($requestData['search']['value']) ) {
	$sql.=" AND ( search_ko LIKE '%".$searchBox."%' ";    
	$sql.=" OR id LIKE '".$searchBox."%' ";
	$sql.=" OR level LIKE '".$searchBox."%' ";
	$sql.=" OR $language LIKE '%".$searchBox."%' )";
}




$query=mysqli_query($conn, $sql) or die("employee-grid-data.php: get employees");
$totalFiltered = mysqli_num_rows($query);
$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";


$query=mysqli_query($conn, $sql) or die("employee-grid-data.php: get employees");

$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 

	$localization = !empty($row[$language]) ? $row[$language] : $row['search_ko'];
	
	
	if ($type == 'extra') {
	$nestedData[] = $row["id"];
	$nestedData[] = '<img class="thumb" src="https://aionpowerbook.com/item/icon/' . strtolower($row["icon_name"]) . '.png" width="37" height="37" alt="">';
	$nestedData[] = '<a class="tooltipzy col_' . strtolower($row["quality"]) . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $row["id"] . '" tooltipID="' . $row["id"] . '" tooltiplang="'.$toollang.'" classic="' . isClassic() . '">' . $localization . '</a>';
	$nestedData[] = $row["level"];
	}elseif ($type == 'questreward') {
	$nestedData[] = $row["id"];
	$nestedData[] = '<img class="thumb" src="https://aionpowerbook.com/images/q2.png" width="37" height="37" alt="">';
	$nestedData[] = '<div class="link_' . $row["category1"] . '"><a href="https://aionpowerbook.com/powerbook/Quest/' . $row["id"] . '">' . $localization . '</a></div>';
	$nestedData[] = $row["client_level"];	
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
