<?php

function isClassic() {
	$classic = $_GET['classic'];

	return $classic;
}

function tableskill($name, $language, $race, $skill_level)
{
$servername = "mysqlhost";
$username = "login2";
$password = "passw";
$dbname = "login";

if (isClassic() == '1') {
	$dbname = "kele01_classic";
	$skilllevel = " (Lv. " . $skill_level . ")";
}

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
mysqli_set_charset($conn,"utf8");


$sql .= "SELECT * ";
$sql .= "FROM  client_skills ";
$sql .= "WHERE name = '$name' ";
$query=mysqli_query($conn, $sql) or die("Whoopsie Doopsie~!!");
$skillrow = mysqli_fetch_assoc($query);

	$skillid=$skillrow["id"];
	$dname=$skillrow["name"];
	$description = $skillrow["description"];
	$skillicon_name = strtolower($skillrow["skillicon_name"]);
	$casting_delay = $skillrow["casting_delay"];
	$delay_time = $skillrow["delay_time"];
	$delay_time_lv = $skillrow["delay_time_lv"];
	$instant_skill = $skillrow["instant_skill"];
	$cost_end = $skillrow["cost_end"];
	$cost_parameter = $skillrow["cost_parameter"];
	$cost_time = $skillrow["cost_time"]/1000;
	$cost_toggle = $skillrow["cost_toggle"];
	$cost_dp = $skillrow["cost_dp"];
	$devanion_skill = strtolower($skillrow["devanion_skill"]);
	
	

if ($casting_delay != NULL and $instant_skill === NULL) {
		$castingdelay = $casting_delay/1000 . 's';
		$castingdelayno = '';
	}elseif ($casting_delay === NULL and $instant_skill != NULL) {
		$castingdelay = translate('STR_TOOLTIP_NOCASTDELAY', $language);
		$castingdelayno = '';
		
	}else {
		$castingdelay = '<div align="center">- -</div>';
		$castingdelayno = 'style="display:none"';
	}

	
	
if ($delay_time >= 60000) {


$input = $delay_time + $delay_time_lv;
$uSec = $input % 1000;
$input = floor($input / 1000);

$seconds = $input % 60 . 's';
$input = floor($input / 60);

$minutes = $input % 60 . 'm ';
$input = floor($input / 60); 

$hours = $input % 60 . 'h ';
$input = floor($input / 60); 


if ($seconds > 0) {
	$secondsf = $seconds;
}

if ($minutes > 0) {
	$minutesf = $minutes;
}

if ($hours > 0) {
	$hoursf = $hours;
}



$delaytime = $hoursf . $minutesf . $secondsf ;
$delayno = '';
	
	}elseif ($delay_time >= 1 and $delay_time < 60000) {
		$input = $delay_time + $delay_time_lv;
$uSec = $input % 1000;
$input = floor($input / 1000);

$seconds = $input % 60 . 's';
$input = floor($input / 60);

$minutes = $input % 60 . 'm ';
$input = floor($input / 60); 


if ($seconds > 0) {
	$secondsf = $seconds;
}

if ($minutes > 0) {
	$minutesf = $minutes;
}

		$delaytime = $minutesf . $secondsf ;
		$delayno = '';
	}else {
		$delaytime = '<div align="center">- -</div>';
		$delayno = 'style="display:none"';
	}




if (strtolower($cost_parameter) == 'mp_ratio' and $cost_time != NULL) {
	$costparameter = 'MP ' . $cost_toggle . '% (' . $cost_time . ' sec)';
}elseif (strtolower($cost_parameter) == 'hp_ratio' and $cost_time != NULL) {
	$costparameter = 'HP ' . $cost_toggle . '% (' . $cost_time . ' sec)';
}elseif (strtolower($cost_parameter) == 'dp' and $cost_time != NULL) {
	$costparameter = 'DP ' . $cost_toggle . ' (' . $cost_time . ' sec)';
}else {
	$costparameter = $cost_parameter;
}

if ($cost_end != NULL and $cost_parameter != NULL and $cost_toggle === NULL and $cost_dp === NULL ) {
	if (strtolower($costparameter) == 'hp_ratio') {
		$cost = $cost_end . '% HP';
	}elseif (strtolower($costparameter) == 'mp_ratio') {
		$cost = $cost_end . '% MP';
	}else {
		$cost = $cost_end . ' ' . $costparameter;
	}
	
}elseif ($cost_end != NULL and $cost_parameter != NULL and $cost_toggle != NULL) {
	$cost = $costparameter;
	
}elseif ($cost_end === NULL and $cost_parameter != NULL and $cost_toggle != NULL) {
	$cost = $costparameter;
	
}elseif ($cost_dp != NULL) {
	$cost = 'DP ' . $cost_dp;
	
}else {
	$cost = '<div align="center">- -</div>';
}


$skilliconname = strtr($skillicon_name, array(
	".dds" => '',
	));

	
$localization = translate($description, $language);

if ($localization == NULL) {
	$localizationfin = 'Error 164';
}else {
	$localizationfin = $localization;
}
	
if (strtolower($race) == 'pc_light'){
			$skillrace = ' <span class="pc_light" title="' . translate('STR_TOOLTIP_PC_LIGHT', $language) . '"></span>';
		}elseif (strtolower($race) == 'pc_dark'){
			$skillrace = ' <span class="pc_dark" title="' . translate('STR_TOOLTIP_PC_DARK', $language) . '"></span>';
		}else {
			$skillrace = '';
		}
	
	
$stigma = stigmacheck($dname);

if ($devanion_skill == 'custom') {
	$skillbook = DaevanionBook ($dname);
	if ($skillbook == 'ancient') {
		$stigma = '<p style="color:#e1ad39" >Daevanion</p>';
	}else {
		$stigma = '<p style="color:#eb46ff" >Daevanion</p>';
	}
}
	
	return '<img class="thumb" src="https://aionpowerbook.com/skillicon/' . $skilliconname . '.png" width="37" height="37" alt="">' . '|' . $skillrace . ' <a class="all skilltipzy" href="https://aionpowerbook.com/powerbook/Skill/' . $skillid . '" skillid="' . $skillid . '" skilltiplang="' . $language . '" classic="' . isClassic() . '">' . $localizationfin . '</a>' . $skilllevel . '|' . $stigma . '|' . $cost . '|' . $castingdelay .'|'. $delaytime;
	
	
	
}





















function translate($name, $lang)
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


function stigmacheck($name)
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
	
$sql .= "SELECT stigma_display ";
$sql .= "FROM  client_skill_learns ";
$sql .= "WHERE skill = '$name' ";
$query=mysqli_query($conn, $sql) or die("Whoopsie Doopsie~!!");
$result = mysqli_fetch_assoc($query);
$stigma = $result['stigma_display'];

if ($stigma == '4') {
	return '<p style="color:#ff8033" >Vision</p>';
}elseif ($stigma == '3') {
	return '<p style="color:#ffc103" >Major</p>';
}elseif ($stigma == '2') {
	return '<p style="color:#4ccfff" >Greater</p>';
}elseif ($stigma == '1') {
	return '<p style="color:#69e15e" >Normal</p>';
}else {
	return '';
}

}


function DaevanionBook($name)
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
	
$sql .= "SELECT quality ";
$sql .= "FROM  client_items ";
$sql .= "WHERE skill_to_learn = '$name' ";

$query=mysqli_query($conn, $sql) or die("Whoopsie Doopsie~!!");
$result = mysqli_fetch_assoc($query);
$quality = $result['quality'];

return $quality;
}







// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;

$lang = $_GET['lang'];
$class = $_GET['class'];


/* Database connection start */
$servername = "mysqlhost";
$username = "login2";
$password = "passw";
$dbname = "login";

if (isClassic() == '1') {
	$dbname = "kele01_classic";
	$cl = "_cl";
}

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
mysqli_set_charset($conn,"utf8");
/* Database connection end */

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
elseif($lang == "us"){
	$language = 'us';
}else {
	$language = 'en';
}









$searchBox = strtr($requestData['search']['value'], array(
		"'" => '&apos;',
		));

		
// base class
if ($class == 'BARD') {
	$basiccalss = " or class = 'ARTIST' ";
}
elseif ($class == 'PAINTER') {
	$basiccalss = " or class = 'ARTIST' ";
}
elseif ($class == 'GUNNER') {
	$basiccalss = " or class = 'ENGINEER' ";
}
elseif ($class == 'RIDER') {
	$basiccalss = " or class = 'ENGINEER' ";
}
elseif ($class == 'WIZARD') {
	$basiccalss = " or class = 'MAGE' ";
}
elseif ($class == 'ELEMENTALLIST') {
	$basiccalss = " or class = 'MAGE' ";
}
elseif ($class == 'ASSASSIN') {
	$basiccalss = " or class = 'SCOUT' ";
}
elseif ($class == 'RANGER') {
	$basiccalss = " or class = 'SCOUT' ";
}
elseif ($class == 'CHANTER') {
	$basiccalss = " or class = 'CLERIC' ";
}
elseif ($class == 'PRIEST') {
	$basiccalss = " or class = 'CLERIC' ";
}
elseif ($class == 'KNIGHT') {
	$basiccalss = " or class = 'WARRIOR' ";
}
elseif ($class == 'FIGHTER') {
	$basiccalss = " or class = 'WARRIOR' ";
}
		
		

$sql = "SELECT * ";
$sql.=" FROM client_skill_learns where ( class = '$class' or class = 'all' " . $basiccalss . " ) and pc_level is not NULL ";

$query=mysqli_query($conn, $sql) or die("Whoopsie Doopsie~!");


/* $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc  */	
$query=mysqli_query($conn, $sql) or die("employee-grid-data.php: get employees");

$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 


		$race=$row["race"];
		$pclevel=$row["pc_level"];
		$skill=$row["skill"];
		$skill_level = $row["skill_level"];





	$temp = tableskill($skill, $language, $race, $skill_level);
	
	$tags = explode('|', $temp);
	
	
	
	
		
	$nestedData[] = $pclevel; 
	$nestedData[] = $tags[0];
	$nestedData[] = $tags[1];
	$nestedData[] = $tags[2];
	$nestedData[] = $tags[3];
	$nestedData[] = $tags[4];
	$nestedData[] = $tags[5];
	
	
	$data[] = $nestedData;
}



$json_data = array(
			"data"            => $data   // total data array
			);

$final = json_encode($json_data);  // send data as json format

file_put_contents('../AionExtensions/cache/skilltables/'.$language.'/table_'.$class. $cl . '.json', $final);

echo $final;

?>
