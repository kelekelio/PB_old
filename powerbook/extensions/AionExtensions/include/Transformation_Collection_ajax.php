<?php
/* Database connection start */
$servername = "mysqlhost";
$username = "login2";
$password = "passw";
$dbname = "login";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
mysqli_set_charset($conn,"utf8");
/* Database connection end */

function language()
{
    $lang = strtolower($_GET['lang']);

    return $lang;
}

function statnames($stat, $language) {

	$fieldValue = $stat;
	$attributeHtml = '';
	$template = '<a href="https://aionpowerbook.com/powerbook/%s">%s</a>&nbsp;%s%s';


	include 'statmap.php';


	list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

	if (!isset($statMap[$attributeName])) {
		// not in $statMap, skip it
		return $stat;
	}else {
		$attributeHtml = $statMap[$attributeName]($attributeValue);
		return $attributeHtml;
	}


}

function translate($name, $lang)
{
$servername = "mysqlhost";
$username = "login2";
$password = "passw";
$dbname = "login";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
mysqli_set_charset($conn,"utf8");



if ($lang == 'en'){
	$langcol = 'LAN_EN';
}elseif ($lang == 'de'){
	$langcol = 'LAN_DE';
}elseif ($lang == 'fr'){
	$langcol = 'LAN_FR';
}elseif ($lang == 'it'){
	$langcol = 'LAN_IT';
}elseif ($lang == 'es'){
	$langcol = 'LAN_ES';
}elseif ($lang == 'pl'){
	$langcol = 'LAN_PL';
}elseif ($lang == 'us'){
	$langcol = 'LAN_US';
}elseif ($lang == 'ko'){
	$langcol = 'body';
}
	
	
$sql .= "SELECT body, $langcol ";
$sql .= "FROM  translation_small ";
$sql .= "WHERE name = '$name' ";
$query=mysqli_query($conn, $sql) or die("Whoopsie Doopsie~!!");
$result = mysqli_fetch_assoc($query);
$final = !empty($result[$langcol]) ? $result[$langcol] : $result['body'];


return $final;
}



function transformation_icon($name, $lang) 
{

$servername = "mysqlhost";
$username = "login2";
$password = "passw";
$dbname = "login";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
mysqli_set_charset($conn,"utf8");

    $sql = "SELECT * FROM client_transformbook WHERE name = '$name'";

    $query=mysqli_query($conn, $sql) or die(mysqli_error());
    while ($result = mysqli_fetch_assoc($query)) {
		$id = $result["id"];
		$icon_name = strtolower($result["icon_name"]);
	}
	if ($id != NULL) {	
		return '<a href="https://aionpowerbook.com/powerbook/Transformation/'.$id.'" ><img src="https://aionpowerbook.com/transformation/' . $icon_name . '.png" alt="" class="thumb2"></a> ';
		}
	
}

function skill($name, $language)
{

	$servername = "mysqlhost";
	$username = "login2";
	$password = "passw";
	$dbname = "login";
	
	$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
	mysqli_set_charset($conn,"utf8");

	$sql = "  SELECT id, skillicon_name, search_$language, search_ko from client_skills WHERE name = '$name'  ";

	$query=mysqli_query($conn, $sql) or die(mysqli_error());

	while ($result = mysqli_fetch_assoc($query)) {
		$localizationSkill	=	!empty($result['search_'.$language]) ? $result['search_'.$language] : $result['search_ko'];
		$skillicon_name		=	strtolower($result["skillicon_name"]);
		$id		=	$result["id"];
		$skillicon = strtr($skillicon_name, array(
    		".dds" => '',
		));	
	}	
	
	if ($id != NULL) {
		return '<a href="https://aionpowerbook.com/powerbook/Skill/' . $id . '" class="skilltipzy" skillid="' . $id . '" skilltiplang="' . $language . '"><img src="https://aionpowerbook.com/skillicon/' . $skillicon . '.png" alt="" class="thumb"></a><br> ';
	}else {
		return '';
	}
}







// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;


$lang = strtolower($_GET['lang']);
$name = $_GET['name'];
$grade = $_GET['grade'];





$serv = $_SERVER['DOCUMENT_ROOT'];
$cachefile = $serv . '/powerbook/extensions/AionExtensions/cache/transformation/'.$lang.'/'.$name.'.json';
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




















$sql = "SELECT * ";
$sql.=" FROM client_transform_collection WHERE ( trans_01 = '$name' or trans_02 = '$name' or trans_03 = '$name' or trans_04 = '$name' or trans_05 = '$name' or trans_06 = '$name' ) or trans_grade = '$grade' ";




$query=mysqli_query($conn, $sql) or die("employee-grid-data.php: get employeehhhhhs");

$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 



	$id = '';
	$description = '';
	$reward_skill_active = '';
	$physical_reward_attr1_fin = '';
	$magical_reward_attr1_fin = '';
	$trans_num = '';
	$trans_01 = '';



	$id = $row["id"];
	$description = '<b>' . translate($row["description"], $lang) . '</b><br>';
	$physical_reward_attr1 = strtolower($row["physical_reward_attr1"]);
	$magical_reward_attr1 = strtolower($row["magical_reward_attr1"]);
	
	if ($magical_reward_attr1 != $physical_reward_attr1) {
		$magical_reward_attr1_fin =  ', ' . statnames($magical_reward_attr1, $lang);
	}

	$physical_reward_attr1_fin = '<br>' . statnames($physical_reward_attr1, $lang);



	if ($trans_num == NULL && $row["trans_01"] != NULL) {
		$trans_01 = transformation_icon($row["trans_01"], $lang);
		$trans_01 .= transformation_icon($row["trans_02"], $lang);
		$trans_01 .= transformation_icon($row["trans_03"], $lang);
		$trans_01 .= transformation_icon($row["trans_04"], $lang);
		$trans_01 .= transformation_icon($row["trans_05"], $lang);
		$trans_01 .= transformation_icon($row["trans_06"], $lang) . '<br>';
	}
	$reward_skill_active = skill($row["reward_skill_active"], $lang);
	$trans_grade = $row["trans_grade"];
	$trans_num = $row["trans_num"];
	
	

	
	$nestedData[] = $id;
	$nestedData[] = $reward_skill_active;
	$nestedData[] = $description . $trans_01 . $physical_reward_attr1_fin . $magical_reward_attr1_fin . '<br>';
	$nestedData[] = $trans_num;
	
	
	$data[] = $nestedData;
}


$json_data = array(
			"data"            => $data   // total data array
			);

$final = json_encode($json_data);  // send data as json format

$servv = $_SERVER['DOCUMENT_ROOT'];
file_put_contents($servv . '/powerbook/extensions/AionExtensions/cache/transformation/'.$lang.'/'.$name.'.json', $final);



echo $final;

}else {
	

	$servv = $_SERVER['DOCUMENT_ROOT'];
	$cachefilev = $servv . '/powerbook/extensions/AionExtensions/cache/transformation/'.$lang.'/'.$name.'.json';
	
	
	

	$string = file_get_contents($cachefilev);
	
	echo $string;
	
}

?>