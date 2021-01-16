<?php

function language()
{
    $language = $_GET['l'];

    return $language;
}



function TranslateStatNames($stat, $language, $range) {

	$fieldValue = $stat;
    $attributeHtml = '';
    
    if ($range != NULL) {
        $upTo = ' ~ ' . $range;
    }

	$template = '<span %s>%s&nbsp;%s%s ' . $upTo . '</span>';

	include $_SERVER['DOCUMENT_ROOT'] . '/powerbook/extensions/AionExtensions/include/statmap.php';


	list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

	if (!isset($statMap[$attributeName])) {
		// not in $statMap, skip it
		return $stat;
	}else {
		$attributeHtml = $statMap[$attributeName]($attributeValue);
		return $attributeHtml;
	}


}

function translate($name, $lang) {
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


function item($name, $language, $count, $notEnchant)
{
$servername = "mysqlhost";
$username = "login2";
$password = "passw";
$dbname = "login";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
mysqli_set_charset($conn,"utf8");


	
	
$sql .= "SELECT id, icon_name, description ";
$sql .= "FROM  client_items ";
$sql .= "WHERE name = '$name' ";
$query=mysqli_query($conn, $sql) or die("Whoopsie Doopsie~!!");
$result = mysqli_fetch_assoc($query);


$description = $result['description'];
$id = $result['id'];
$icon_name = strtolower($result['icon_name']);
$fin_icon_name = strtr($icon_name, array(
	".dds" => '',
	));
$localization = translate($description, $language);


if ($count == '+') {
	$count = '+0';
}

$final = '<a href="https://aionpowerbook.com/powerbook/Item/' . $id . '" tooltipID="' . $id . '" tooltipcount="" tooltiplang="' . $language . '" class="tooltipzy" ><div style="background-image: url(https://aionpowerbook.com/item/icon/'.$fin_icon_name.'.png); display:inline-block; width:40px; height:40px; color:white; position: relative; "><p style="background-color: black; bottom:0; right:4px; position: absolute; font-weight: bold;" >'.$count.'</p></div><p style="display:none;">' . $localization . '</p></a> ';

if ($id != NULL) {
	return $final;
}else {
	return '';
}
}


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

$language = $_GET['l'];
$type = $_GET['t'];











$searchBox = strtr($requestData['search']['value'], array(
		"'" => '&apos;',
		));

		
		
		

$sql = " SELECT * FROM client_item_collection where collection_grade = '$type' ";

$query=mysqli_query($conn, $sql) or die("Whoopsie Doopsie~!");


/* $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc  */	
$query=mysqli_query($conn, $sql) or die("employee-grid-data.php: get employees");

$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 


		$id=$row["id"];
		$description=translate($row["description"], $language);

		$required = '';
		$slot01_item = '';
		$slot02_item = '';
		$slot03_item = '';
		$slot04_item = '';
		$slot05_item = '';
		$slot06_item = '';
		$slot07_item = '';
		$slot08_item = '';
		$slot09_item = '';
		$slot10_item = '';
		$reward_attr01 = '';
		$reward_attr02 = '';
		$reward_attr03 = '';

		if ($row["slot01_item"] != NULL) {
			$slot01_item = item($row["slot01_item"], $language, '+' . $row["slot01_enchant"], $row["slot01_cnt"]);
			$required = '0/1';
		} 
		if ($row["slot02_item"] != NULL) {
			$slot02_item = item($row["slot02_item"], $language, '+' . $row["slot02_enchant"], $row["slot02_cnt"]);
			$required = '0/2';
		} 
		if ($row["slot03_item"] != NULL) {
			$slot03_item = item($row["slot03_item"], $language, '+' . $row["slot03_enchant"], $row["slot03_cnt"]);
			$required = '0/3';
		} 
		if ($row["slot04_item"] != NULL) {
			$slot04_item = item($row["slot04_item"], $language, '+' . $row["slot04_enchant"], $row["slot04_cnt"]);
			$required = '0/4';
		} 
		if ($row["slot05_item"] != NULL) {
			$slot05_item = item($row["slot05_item"], $language, '+' . $row["slot05_enchant"], $row["slot05_cnt"]);
			$required = '0/5';
		} 
		if ($row["slot06_item"] != NULL) {
			$slot06_item = '<br>' . item($row["slot06_item"], $language, '+' . $row["slot06_enchant"], $row["slot06_cnt"]);
			$required = '0/6';
		}
		if ($row["slot07_item"] != NULL) {
			$slot07_item = item($row["slot07_item"], $language, '+' . $row["slot07_enchant"], $row["slot07_cnt"]);
			$required = '0/7';
		} 
		if ($row["slot08_item"] != NULL) {
			$slot08_item = item($row["slot08_item"], $language, '+' . $row["slot08_enchant"], $row["slot08_cnt"]);
			$required = '0/8';
		} 
		if ($row["slot09_item"] != NULL) {
			$slot09_item = item($row["slot09_item"], $language, '+' . $row["slot09_enchant"], $row["slot09_cnt"]);
			$required = '0/9';
		} 
		if ($row["slot10_item"] != NULL) {
			$slot10_item = item($row["slot10_item"], $language, '+' . $row["slot10_enchant"], $row["slot10_cnt"]);
			$required = '0/10';
		} 

		if ($row["reward_item01"] != NULL) {
			$reward_item01 = item($row["reward_item01"], $language, $row["reward_item01_cnt"]);
		}
		if ($row["reward_attr01"] != NULL) {
			$reward_attr01 = TranslateStatNames(strtolower($row["reward_attr01"]), $language, '');
		}
		if ($row["reward_attr02"] != NULL) {
			$reward_attr02 = TranslateStatNames(strtolower($row["reward_attr02"]), $language, '');
		}
		if ($row["reward_attr03"] != NULL) {
			$reward_attr03 = TranslateStatNames(strtolower($row["reward_attr03"]), $language, '');
		}
	
	
	
		
	$nestedData[] = '
	<div>
		<div style="width:100%; height:20px;background: #183e6a; padding:5px;"><center><p style="color: #8bd1fa; " id="'.$id.'"><b>'.$description.'</b><b style="float:right; display:inline; color: #8bd1fa;">('.$required.')</b></p></center></div>
		<div style="background-image: url(https://aionpowerbook.com/lugbug/lugbug_quest_background2.png); background-size: cover; width:100%; height:100px; margin-bottom:8px; padding-top:10px;">
		<div>
		<span style="width:45%; float:left;">
			<div style="width:350px; height:15px;background: #56a0bf; margin:10px; display:block;" ><center><b>'.$reward_attr01.'</b></center></div>
			<div style="width:350px; height:15px;background: #56a0bf; margin:10px; display:block;" ><center><b>'.$reward_attr02.'</b></center></div>
			<div style="width:350px; height:15px;background: #56a0bf; margin:10px; display:block;" ><center><b>'.$reward_attr03.'</b></center></div>
		</span>
		<span style="width:29%; float:left; ">
			<div style="display: table-cell;height: 85px;vertical-align: middle;">
				<center>'.$reward_item01.'</center>
			</div>
		</span>
		<span style="width:25%; float:left;">'.$slot01_item.$slot02_item.$slot03_item.$slot04_item.$slot05_item.$slot06_item.$slot07_item.$slot08_item.$slot09_item.$slot10_item.'</span>
		</div>



		</div>
	</div>';
	
	
	$data[] = $nestedData;
}



$json_data = array(
			"data"            => $data   // total data array
			);

$final = json_encode($json_data);  // send data as json format

file_put_contents('../AionExtensions/cache/itemcollection/'.$language.'/'.$type.'.json', $final);

echo $final;

?>
