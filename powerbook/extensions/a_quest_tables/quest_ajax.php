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

$lowerlevel = $_GET['lowerlevel'];
$higherlevel = $_GET['higherlevel'];
$race = $_GET['race'];
$region  = $_GET['region'];
$code = $_GET['lang'];







function rewarditem($name, $language)
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
SELECT id, quality, search_$language, search_ko
FROM client_items
WHERE name = '$name'
       ";

    $query=mysqli_query($conn, $sql) or die(mysqli_error());
    $result = mysqli_fetch_assoc($query);
	$id = $result["id"];
	$localizationExtra = !empty($result['search_' . $language]) ? $result['search_' . $language] : $result['search_ko'];
	$quality = strtolower($result["quality"]);
	
	
	
	
	if ($id >=1) {
    return '<br><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $id . '" tooltipID="' . $id . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localizationExtra . '</a>';
	}elseif ($name[0] == "%"){
		return '<br>Random Reward';
	}else {
		return '';
	}
	
	
}


function rewarditemicon($name, $language)
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
SELECT id, icon_name
FROM client_items
WHERE name = '$name'
       ";

    $query=mysqli_query($conn, $sql) or die(mysqli_error());
    $result = mysqli_fetch_assoc($query);
	$id = $result["id"];
	$icon = strtolower($result["icon_name"]);
    return '<a href="https://aionpowerbook.com/powerbook/Item/' . $id . '" class="tooltipzy" tooltipID="' . $id . '" tooltiplang="' . $language . '" classic="'.isClassic().'"><img class="thumb3" src="https://aionpowerbook.com/item/icon/' . $icon . '.png"  alt=""></a> ';
	
}


function translate($name, $language)
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
           SELECT
              body    ko,
              LAN_EN  en,
              LAN_DE  de,
              LAN_FR  fr,
              LAN_ES  es,
              LAN_IT  it,
              LAN_PL  pl,
              LAN_US  us
           FROM  translation_small
           WHERE name = '$name'
       ";

    $query=mysqli_query($conn, $sql) or die(mysqli_error());
    while ($result = mysqli_fetch_assoc($query)) {
	$localizationExtra = !empty($result[$language]) ? $result[$language] : $result['ko'];
	}
    return $localizationExtra;
}







 if($code == "fr"){
	$language = 'fr';
} 
elseif($code == "de"){
	$language = 'de';
}
elseif($code == "it"){
	$language = 'it';
}
elseif($code == "pl"){
	$language = 'pl';
}
elseif($code == "ko"){
	$language = 'ko';
}
elseif($code == "es"){
	$language = 'es';
}
elseif($code == "us"){
	$language = 'us';
}else {
	$language = 'en';
}











$searchBox = strtr($requestData['search']['value'], array(
		"'" => '&apos;',
		));



$sql = "SELECT * ";
$sql.=" FROM client_quest "; 

if ( $lowerlevel != NULL ) {
	$sql.= " WHERE minlevel_permitted >= $lowerlevel ";
}else {
	$sql.= " WHERE minlevel_permitted >= 1 ";
}


if ( $region != NULL ) {
	$sql.= " AND (category2 = '$region' ) ";
}

if ( $higherlevel != NULL ) {
	$sql.= " AND (minlevel_permitted <= $higherlevel ) ";
}


if ( $race != NULL && $region == NULL ) {
	$sql.= " AND (race_permitted = '$race' or race_permitted = 'pc_light pc_dark') ";
}

$sql.= " AND (minlevel_permitted != '999') ";


if( !empty($requestData['search']['value']) ) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
	$sql.=" AND ( search_".$language." LIKE '%".$searchBox."%' "; 
	$sql.=" OR search_ko LIKE '%".$searchBox."%' ";
	
	$sql.=" OR minlevel_permitted LIKE '".$searchBox."%' )";

	
}
$query=mysqli_query($conn, $sql) or die(mysqli_error());


$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 

    $questid=$row["id"];
	$category=strtolower($row["category1"]);
	$zone = $row["category2"];
	$reward_exp=number_format($row["reward_exp1"]);
	$kinah=number_format($row["reward_gold1"]);
	$glory=number_format($row["reward_glory_point1"]);
	$stronghold=number_format($row["reward_abyss_op_point1"]);
	$minlevel_permitted=$row["minlevel_permitted"];
    $localization=!empty($row["search_" . $language]) ? $row["search_" . $language] : $row['search_ko'];
	$ap1=number_format($row["reward_abyss_point1"]);
	$ap2=number_format($row["reward_abyss_point2"]);
	$ap3=number_format($row["reward_abyss_point3"]);
	$ap4=number_format($row["reward_abyss_point4"]);
	$growthaura = $row["reward_exp_boost1"]/10;
	
	$fame_group_name1 = translate('STR_' . $row["fame_group_name1"], $language);
	$reward_fame_exp1 = number_format($row["reward_fame_exp1"]);
	
	
	$expreward = '';
	$kinahreward = '';
	$additional = '';
	$fameexpreward = '';
	$apreward = '';
	
	
// EXP
	if ($reward_exp > 0) {
			$expreward = '<p class="reward_info"><em>' . translate('STR_EXP', $language) . '</em>&nbsp;<span class="reward_exp">' . $reward_exp . '</span></p>';
		}

// Fame
if ($reward_fame_exp1 > 0) {
	$fameexpreward = '<p class="reward_info"><em>Fame ' . translate('STR_EXP', $language) . '</em>&nbsp;<span class="reward_exp">' . $reward_fame_exp1 . ' ('.$fame_group_name1.')</span><br></p>';
}

// KINAH		
	if ($row["reward_gold1"] > 0) {
			$kinahreward = '<p class="reward_info"><em>' . translate('STR_GOLD', $language) . '</em>&nbsp;<span class="reward_gold">' . $kinah . '</span></p>';
		}
		
//growth aura
	if ($growthaura > 0) {
		$growth = '<p class="reward_info"><em><a href="https://aionpowerbook.com/powerbook/Growth_Aura">' . translate('STR_TOOLTIP_EXP_BOOST_NAME', $language) . '</a></em>&nbsp;<span class="reward_exp">+' . $growthaura . '%</span><br></p>';
	}		

		
// Abyss Points
	if ($ap1 != 0) {
		$apreward = '<p class="reward_info"><em><a href="Abyss Points">' . translate('STR_ABYSS_POINT', $language) . '</a></em>&nbsp;<span class="reward_ap">' . $ap1 . '</span></p>'; 
	}
	if ($ap2 != 0) {
		$apreward = '<p class="reward_info"><em><a href="Abyss Points">' . translate('STR_ABYSS_POINT', $language) . '</a></em>&nbsp;<span class="reward_ap">' . $ap2 . '</span></p>'; 
	}
	if ($ap3 != 0) {
		$apreward = '<p class="reward_info"><em><a href="Abyss Points">' . translate('STR_ABYSS_POINT', $language) . '</a></em>&nbsp;<span class="reward_ap">' . $ap3 . '</span></p>'; 
	}
	if ($ap4 != 0) {
		$apreward = '<p class="reward_info"><em><a href="Abyss Points">' . translate('STR_ABYSS_POINT', $language) . '</a></em>&nbsp;<span class="reward_ap">' . $ap4 . '</span></p>'; 
	}
		
		
$hpreward = '';
// Honour Points		
if ($glory >= 1) {
			$hpreward = '<p class="reward_info"><em><a href="Honour Points">' . translate('STR_GLORY_POINT', $language) . '</a></em>&nbsp;<span class="base_reinforcement">' . $glory . '</span><br></p>';
		}
		
// Stronghold Reinforcement	
if ($row["reward_abyss_op_point1"] >= 1) {
			$strnghreward = '<p class="reward_info"><em><a href="Stronghold Reinforcement Points">' . translate('STR_START_DIALOG__TOOLTIP_ABYSS_OP', $language) . '</a></em>&nbsp;<span class="base_reinforcement">' . $stronghold . '</span><br></p>';
		}
	
	
	

if ($row["selectable_reward_item1_1"] != NULL) {
	$reword = explode(' ', $row["selectable_reward_item1_1"]);
	$selectablereward11 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$selectablereward11 = ' ';
}	
if ($row["selectable_reward_item1_2"] != NULL) {
	$reword = explode(' ', $row["selectable_reward_item1_2"]);
	$selectablereward12 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$selectablereward12 = ' ';
}	
if ($row["selectable_reward_item1_3"] != NULL) {
	$reword = explode(' ', $row["selectable_reward_item1_3"]);
	$selectablereward13 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$selectablereward13 = ' ';
}	
if ($row["selectable_reward_item1_4"] != NULL) {
	$reword = explode(' ', $row["selectable_reward_item1_4"]);
	$selectablereward14 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$selectablereward14 = ' ';
}	
if ($row["selectable_reward_item1_5"] != NULL) {
	$reword = explode(' ', $row["selectable_reward_item1_5"]);
	$selectablereward15 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$selectablereward15 = ' ';
}	
if ($row["selectable_reward_item1_6"] != NULL) {
	$reword = explode(' ', $row["selectable_reward_item1_6"]);
	$selectablereward16 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$selectablereward16 = ' ';
}	
if ($row["selectable_reward_item1_7"] != NULL) {
	$reword = explode(' ', $row["selectable_reward_item1_7"]);
	$selectablereward17 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$selectablereward17 = ' ';
}	
if ($row["selectable_reward_item1_8"] != NULL) {
	$reword = explode(' ', $row["selectable_reward_item1_8"]);
	$selectablereward18 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$selectablereward18 = ' ';
}	
if ($row["selectable_reward_item1_9"] != NULL) {
	$reword = explode(' ', $row["selectable_reward_item1_9"]);
	$selectablereward19 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$selectablereward19 = ' ';
}	
if ($row["selectable_reward_item1_10"] != NULL) {
	$reword = explode(' ', $row["selectable_reward_item1_10"]);
	$selectablereward110 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$selectablereward110 = ' ';
}	
if ($row["selectable_reward_item1_11"] != NULL) {
	$reword = explode(' ', $row["selectable_reward_item1_11"]);
	$selectablereward111 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$selectablereward111 = ' ';
}	
if ($row["selectable_reward_item1_12"] != NULL) {
	$reword = explode(' ', $row["selectable_reward_item1_12"]);
	$selectablereward112 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$selectablereward112 = ' ';
}	
if ($row["selectable_reward_item1_13"] != NULL) {
	$reword = explode(' ', $row["selectable_reward_item1_13"]);
	$selectablereward113 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$selectablereward113 = ' ';
}	
if ($row["selectable_reward_item1_14"] != NULL) {
	$reword = explode(' ', $row["selectable_reward_item1_14"]);
	$selectablereward114 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$selectablereward114 = ' ';
}	
if ($row["selectable_reward_item1_15"] != NULL) {
	$reword = explode(' ', $row["selectable_reward_item1_15"]);
	$selectablereward115 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$selectablereward115 = ' ';
}	





if ($row["selectable_reward_item2_1"] != NULL) {
	$reword = explode(' ', $row["selectable_reward_item2_1"]);
	$selectablereward21 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$selectablereward21 = ' ';
}	
if ($row["selectable_reward_item2_2"] != NULL) {
	$reword = explode(' ', $row["selectable_reward_item2_2"]);
	$selectablereward22 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$selectablereward22 = ' ';
}	
if ($row["selectable_reward_item2_3"] != NULL) {
	$reword = explode(' ', $row["selectable_reward_item2_3"]);
	$selectablereward23 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$selectablereward23 = ' ';
}	
if ($row["selectable_reward_item2_4"] != NULL) {
	$reword = explode(' ', $row["selectable_reward_item2_4"]);
	$selectablereward24 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$selectablereward24 = ' ';
}	
if ($row["selectable_reward_item2_5"] != NULL) {
	$reword = explode(' ', $row["selectable_reward_item2_5"]);
	$selectablereward25 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$selectablereward25 = ' ';
}	
if ($row["selectable_reward_item2_6"] != NULL) {
	$reword = explode(' ', $row["selectable_reward_item2_6"]);
	$selectablereward26 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$selectablereward26 = ' ';
}	
if ($row["selectable_reward_item2_7"] != NULL) {
	$reword = explode(' ', $row["selectable_reward_item2_7"]);
	$selectablereward27 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$selectablereward27 = ' ';
}	
if ($row["selectable_reward_item2_8"] != NULL) {
	$reword = explode(' ', $row["selectable_reward_item2_8"]);
	$selectablereward28 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$selectablereward28 = ' ';
}	
if ($row["selectable_reward_item2_9"] != NULL) {
	$reword = explode(' ', $row["selectable_reward_item2_9"]);
	$selectablereward29 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$selectablereward29 = ' ';
}	
if ($row["selectable_reward_item2_10"] != NULL) {
	$reword = explode(' ', $row["selectable_reward_item2_10"]);
	$selectablereward210 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$selectablereward210 = ' ';
}	
if ($row["selectable_reward_item2_11"] != NULL) {
	$reword = explode(' ', $row["selectable_reward_item2_11"]);
	$selectablereward211 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$selectablereward211 = ' ';
}	
if ($row["selectable_reward_item2_12"] != NULL) {
	$reword = explode(' ', $row["selectable_reward_item2_12"]);
	$selectablereward212 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$selectablereward212 = ' ';
}	
if ($row["selectable_reward_item2_13"] != NULL) {
	$reword = explode(' ', $row["selectable_reward_item2_13"]);
	$selectablereward213 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$selectablereward213 = ' ';
}






if ($row["selectable_reward_item3_1"] != NULL) {
	$reword = explode(' ', $row["selectable_reward_item3_1"]);
	$selectablereward31 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$selectablereward31 = ' ';
}	
if ($row["selectable_reward_item3_2"] != NULL) {
	$reword = explode(' ', $row["selectable_reward_item3_2"]);
	$selectablereward32 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$selectablereward32 = ' ';
}	
if ($row["selectable_reward_item3_3"] != NULL) {
	$reword = explode(' ', $row["selectable_reward_item3_3"]);
	$selectablereward33 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$selectablereward33 = ' ';
}	
if ($row["selectable_reward_item3_4"] != NULL) {
	$reword = explode(' ', $row["selectable_reward_item3_4"]);
	$selectablereward34 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$selectablereward34 = ' ';
}	
if ($row["selectable_reward_item3_5"] != NULL) {
	$reword = explode(' ', $row["selectable_reward_item3_5"]);
	$selectablereward35 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$selectablereward35 = ' ';
}	
if ($row["selectable_reward_item3_6"] != NULL) {
	$reword = explode(' ', $row["selectable_reward_item3_6"]);
	$selectablereward36 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$selectablereward36 = ' ';
}	





if ($row["selectable_reward_item4_1"] != NULL) {
	$reword = explode(' ', $row["selectable_reward_item4_1"]);
	$selectablereward41 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$selectablereward41 = ' ';
}	
if ($row["selectable_reward_item4_2"] != NULL) {
	$reword = explode(' ', $row["selectable_reward_item4_2"]);
	$selectablereward42 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$selectablereward42 = ' ';
}	
if ($row["selectable_reward_item4_3"] != NULL) {
	$reword = explode(' ', $row["selectable_reward_item4_3"]);
	$selectablereward43 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$selectablereward43 = ' ';
}	
if ($row["selectable_reward_item4_4"] != NULL) {
	$reword = explode(' ', $row["selectable_reward_item4_4"]);
	$selectablereward44 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$selectablereward44 = ' ';
}	
if ($row["selectable_reward_item4_5"] != NULL) {
	$reword = explode(' ', $row["selectable_reward_item4_5"]);
	$selectablereward45 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$selectablereward45 = ' ';
}	




if ($row["selectable_reward_item5_1"] != NULL) {
	$reword = explode(' ', $row["selectable_reward_item5_1"]);
	$selectablereward51 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$selectablereward51 = ' ';
}	
if ($row["selectable_reward_item5_2"] != NULL) {
	$reword = explode(' ', $row["selectable_reward_item5_2"]);
	$selectablereward52 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$selectablereward52 = ' ';
}	
if ($row["selectable_reward_item5_3"] != NULL) {
	$reword = explode(' ', $row["selectable_reward_item5_3"]);
	$selectablereward53 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$selectablereward53 = ' ';
}	
if ($row["selectable_reward_item5_4"] != NULL) {
	$reword = explode(' ', $row["selectable_reward_item5_4"]);
	$selectablereward54 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$selectablereward54 = ' ';
}	
if ($row["selectable_reward_item5_5"] != NULL) {
	$reword = explode(' ', $row["selectable_reward_item5_5"]);
	$selectablereward55 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$selectablereward55 = ' ';
}	




if ($row["selectable_reward_item6_1"] != NULL) {
	$reword = explode(' ', $row["selectable_reward_item6_1"]);
	$selectablereward61 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$selectablereward61 = ' ';
}	







	
	
if ($row["reward_item1_1"] != NULL) {
	$reword = explode(' ', $row["reward_item1_1"]);
	$reward11 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$reward11 = ' ';
}		
if ($row["reward_item1_2"] != NULL) {
	$reword = explode(' ', $row["reward_item1_2"]);
	$reward12 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$reward12 = ' ';
}	
if ($row["reward_item1_3"] != NULL) {
	$reword = explode(' ', $row["reward_item1_3"]);
	$reward13 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$reward13 = ' ';
}	
if ($row["reward_item1_4"] != NULL) {
	$reword = explode(' ', $row["reward_item1_4"]);
	$reward14 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$reward14 = ' ';
}	
if ($row["reward_item1_5"] != NULL) {
	$reword = explode(' ', $row["reward_item1_5"]);
	$reward15 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$reward15 = ' ';
}	



if ($row["reward_item2_1"] != NULL) {
	$reword = explode(' ', $row["reward_item2_1"]);
	$reward21 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$reward21 = ' ';
}		
if ($row["reward_item2_2"] != NULL) {
	$reword = explode(' ', $row["reward_item2_2"]);
	$reward22 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$reward22 = ' ';
}	
if ($row["reward_item2_3"] != NULL) {
	$reword = explode(' ', $row["reward_item2_3"]);
	$reward23 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$reward23 = ' ';
}	


if ($row["reward_item3_1"] != NULL) {
	$reword = explode(' ', $row["reward_item3_1"]);
	$reward31 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$reward31 = ' ';
}		
if ($row["reward_item3_2"] != NULL) {
	$reword = explode(' ', $row["reward_item3_2"]);
	$reward32 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$reward32 = ' ';
}	
if ($row["reward_item3_3"] != NULL) {
	$reword = explode(' ', $row["reward_item3_3"]);
	$reward33 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$reward33 = ' ';
}	
	
	
	
if ($row["reward_item4_1"] != NULL) {
	$reword = explode(' ', $row["reward_item4_1"]);
	$reward41 = rewarditem($reword[0], $language) .' '. $reword[1];
}else {
	$reward41 = ' ';
}



$selectableclass = '';
$classrewardsfinal = '';



		$selectableclass = array(
		
$row['fighter_selectable_item'],
$row['fighter_selectable_item1'],
$row['fighter_selectable_item2'],
$row['fighter_selectable_item3'],
$row['fighter_selectable_item4'],
$row['fighter_selectable_item5'],
$row['fighter_selectable_item6'],
$row['fighter_selectable_item7'],
$row['fighter_selectable_item8'],
$row['knight_selectable_item'],
$row['knight_selectable_item1'],
$row['knight_selectable_item2'],
$row['knight_selectable_item3'],
$row['knight_selectable_item4'],
$row['knight_selectable_item5'],
$row['knight_selectable_item6'],
$row['knight_selectable_item7'],
$row['knight_selectable_item8'],
$row['ranger_selectable_item'],
$row['ranger_selectable_item1'],
$row['ranger_selectable_item2'],
$row['ranger_selectable_item3'],
$row['ranger_selectable_item4'],
$row['ranger_selectable_item5'],
$row['ranger_selectable_item6'],
$row['ranger_selectable_item7'],
$row['ranger_selectable_item8'],
$row['assassin_selectable_item'],
$row['assassin_selectable_item1'],
$row['assassin_selectable_item2'],
$row['assassin_selectable_item3'],
$row['assassin_selectable_item4'],
$row['assassin_selectable_item5'],
$row['assassin_selectable_item6'],
$row['assassin_selectable_item7'],
$row['assassin_selectable_item8'],
$row['wizard_selectable_item'],
$row['wizard_selectable_item1'],
$row['wizard_selectable_item2'],
$row['wizard_selectable_item3'],
$row['wizard_selectable_item4'],
$row['wizard_selectable_item5'],
$row['wizard_selectable_item6'],
$row['wizard_selectable_item7'],
$row['wizard_selectable_item8'],
$row['elementalist_selectable_item'],
$row['elementalist_selectable_item1'],
$row['elementalist_selectable_item2'],
$row['elementalist_selectable_item3'],
$row['elementalist_selectable_item4'],
$row['elementalist_selectable_item5'],
$row['elementalist_selectable_item6'],
$row['elementalist_selectable_item7'],
$row['elementalist_selectable_item8'],
$row['priest_selectable_item'],
$row['priest_selectable_item1'],
$row['priest_selectable_item2'],
$row['priest_selectable_item3'],
$row['priest_selectable_item4'],
$row['priest_selectable_item5'],
$row['priest_selectable_item6'],
$row['priest_selectable_item7'],
$row['priest_selectable_item8'],
$row['chanter_selectable_item'],
$row['chanter_selectable_item1'],
$row['chanter_selectable_item2'],
$row['chanter_selectable_item3'],
$row['chanter_selectable_item4'],
$row['chanter_selectable_item5'],
$row['chanter_selectable_item6'],
$row['chanter_selectable_item7'],
$row['chanter_selectable_item8'],
$row['gunner_selectable_item'],
$row['gunner_selectable_item1'],
$row['gunner_selectable_item2'],
$row['gunner_selectable_item3'],
$row['gunner_selectable_item4'],
$row['gunner_selectable_item5'],
$row['gunner_selectable_item6'],
$row['gunner_selectable_item7'],
$row['gunner_selectable_item8'],
$row['bard_selectable_item'],
$row['bard_selectable_item1'],
$row['bard_selectable_item2'],
$row['bard_selectable_item3'],
$row['bard_selectable_item4'],
$row['bard_selectable_item5'],
$row['bard_selectable_item6'],
$row['bard_selectable_item7'],
$row['bard_selectable_item8'],
$row['rider_selectable_item'],
$row['rider_selectable_item1'],
$row['rider_selectable_item2'],
$row['rider_selectable_item3'],
$row['rider_selectable_item4'],
$row['rider_selectable_item5'],
$row['rider_selectable_item6'],
$row['rider_selectable_item7'],
$row['rider_selectable_item8'],
$row['painter_selectable_item'],
$row['painter_selectable_item1'],
$row['painter_selectable_item2'],
$row['painter_selectable_item3'],
$row['painter_selectable_item4'],
$row['painter_selectable_item5'],
$row['painter_selectable_item6'],
$row['painter_selectable_item7'],
$row['painter_selectable_item8']
		
		);
		
$filteredclassrewards = array_filter($selectableclass);		
$uniqueclassrewards = array_unique($filteredclassrewards);

if ($uniqueclassrewards != NULL) {
	
	$classrewardsfinal = '<br>';
	
	foreach ($uniqueclassrewards as &$value) {
		
		$explodedvalue = explode(' ', $value);
		
			if ($explodedvalue != NULL) {
				$classrewardsfinal .= rewarditemicon($explodedvalue[0], $language) . ' ';
			}
		
	}
	
	
	$classrewardsfinal .= '<br>';
	
	
}




	
	
	
	if ($selectablereward11 !== ' ' OR $selectablereward12 !== ' ' OR $selectablereward13 !== ' ' OR $selectablereward14 !== ' ' OR $selectablereward15 !== ' ' OR $selectablereward16 !== ' ' OR $selectablereward17 !== ' ' OR $selectablereward18 !== ' ' OR $selectablereward19 !== ' ' OR $selectablereward110 !== ' ' OR $selectablereward111 !== ' ' OR $selectablereward112 !== ' ' OR $selectablereward113 !== ' ' OR $selectablereward114 !== ' ' OR $selectablereward115 !== ' ' OR $selectablereward21 !== ' ' OR $selectablereward22 !== ' ' OR $selectablereward23 !== ' ' OR $selectablereward24 !== ' ' OR $selectablereward25 !== ' ' OR $selectablereward26 !== ' ' OR $selectablereward27 !== ' ' OR $selectablereward28 !== ' ' OR $selectablereward29 !== ' ' OR $selectablereward210 !== ' ' OR $selectablereward211 !== ' ' OR $selectablereward212 !== ' ' OR $selectablereward213 !== ' ' OR $selectablereward31 !== ' ' OR $selectablereward32 !== ' ' OR $selectablereward33 !== ' ' OR $selectablereward34 !== ' ' OR $selectablereward35 !== ' ' OR $selectablereward36 !== ' ' OR $selectablereward41 !== ' ' OR $selectablereward42 !== ' ' OR $selectablereward43 !== ' ' OR $selectablereward44 !== ' ' OR $selectablereward45 !== ' ' OR $selectablereward51 !== ' ' OR $selectablereward52 !== ' ' OR $selectablereward53 !== ' ' OR $selectablereward54 !== ' ' OR $selectablereward55 !== ' ' OR $selectablereward61 !== ' ' ) {
	$additional = '<br><br>' . translate('STR_QUEST_REWARD_OPTIONAL', $language);
	}else {
		$additional = ' ';
	}
	
	
	
	
	$nestedData[] = $minlevel_permitted;
	$nestedData[] = '<div class=" link_' . $category . '"><a href="https://aionpowerbook.com/powerbook/Quest/' . $questid . '">' . $localization . '</a></div>';
	$nestedData[] = $expreward . $fameexpreward . $kinahreward . $growth . $apreward . $hpreward. $strnghreward . $reward11 . $reward12 . $reward13 . $reward14 . $reward15 . $reward21 . $reward22 . $reward23 . $reward31 . $reward32 . $reward33 . $reward41 . $additional . $selectablereward11 . $selectablereward12 . $selectablereward13 . $selectablereward14 . $selectablereward15 . $selectablereward16 . $selectablereward17 . $selectablereward18 . $selectablereward19 . $selectablereward110 . $selectablereward111 . $selectablereward112 . $selectablereward113 . $selectablereward114 . $selectablereward115 . $selectablereward21 . $selectablereward22 . $selectablereward23 . $selectablereward24 . $selectablereward25 . $selectablereward26 . $selectablereward27 . $selectablereward28 . $selectablereward29 . $selectablereward210 . $selectablereward211 . $selectablereward212 . $selectablereward213 . $selectablereward31 . $selectablereward32 . $selectablereward33 . $selectablereward34 . $selectablereward35 . $selectablereward36 . $selectablereward41 . $selectablereward42 . $selectablereward43 . $selectablereward44 . $selectablereward45 . $selectablereward51 . $selectablereward52 . $selectablereward53 . $selectablereward54 . $selectablereward55 . $selectablereward61 . $classrewardsfinal;
	
	
	
	$data[] = $nestedData;
}



$json_data = array(
			"data"            => $data   // total data array
			);

$final = json_encode($json_data);  // send data as json format

file_put_contents('../AionExtensions/cache/questtables/'.$language.'/'.$lowerlevel.'_'. $higherlevel . '_'. $race . '_'. $region . '.json', $final);

echo $final;

?>
