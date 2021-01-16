<?php



function RealrandomStats($name, $language, $type)
{
	
if ($type == 'tool') {
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
FROM client_real_item_random_option
WHERE name = '$name'
";

    $query=mysqli_query($conn, $sql) or die(mysqli_error());
    while ($result = mysqli_fetch_assoc($query)) {
			$testid = $result["id"];
			$number = $result["set_random_option_num"];
			$row = [
				$result['random_attr_name'], $result['random_attr_min1'], $result['random_attr_max1'],
				$result['random_attr_name1'], $result['random_attr_min2'], $result['random_attr_max2'],
				$result['random_attr_name2'], $result['random_attr_min3'], $result['random_attr_max3'],
				$result['random_attr_name3'], $result['random_attr_min4'], $result['random_attr_max4'],
				$result['random_attr_name4'], $result['random_attr_min5'], $result['random_attr_max5'],
				$result['random_attr_name5'], $result['random_attr_min6'], $result['random_attr_max6'],
				$result['random_attr_name6'], $result['random_attr_min7'], $result['random_attr_max7'],
				$result['random_attr_name7'], $result['random_attr_min8'], $result['random_attr_max8'],
				$result['random_attr_name8'], $result['random_attr_min9'], $result['random_attr_max9'],
				$result['random_attr_name9'], $result['random_attr_min10'], $result['random_attr_max10'],
			];

	} //end while
}

elseif ($type == 'compare') {
$servername = "mysqlhost";
$username = "login2";
$password = "passw";
$dbname = "login";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
mysqli_set_charset($conn,"utf8");
	
	
$sql = "
SELECT *
FROM client_real_item_random_option_eu
WHERE name = '$name'
";

    $query=mysqli_query($conn, $sql) or die(mysqli_error());
    while ($result = mysqli_fetch_assoc($query)) {
			$testid = $result["id"];
			$number = $result["set_random_option_num"];
			$row = [
				$result['random_attr_name'], $result['random_attr_min1'], $result['random_attr_max1'],
				$result['random_attr_name1'], $result['random_attr_min2'], $result['random_attr_max2'],
				$result['random_attr_name2'], $result['random_attr_min3'], $result['random_attr_max3'],
				$result['random_attr_name3'], $result['random_attr_min4'], $result['random_attr_max4'],
				$result['random_attr_name4'], $result['random_attr_min5'], $result['random_attr_max5'],
				$result['random_attr_name5'], $result['random_attr_min6'], $result['random_attr_max6'],
				$result['random_attr_name6'], $result['random_attr_min7'], $result['random_attr_max7'],
				$result['random_attr_name7'], $result['random_attr_min8'], $result['random_attr_max8'],
				$result['random_attr_name8'], $result['random_attr_min9'], $result['random_attr_max9'],
				$result['random_attr_name9'], $result['random_attr_min10'], $result['random_attr_max10'],
			];

	} //end while
}
else {
    include 'DBselect.php';
    $result = $db->query("
SELECT *
FROM client_real_item_random_option
WHERE name = '$name'
", $name)->fetchArray();


	
	$testid = $result["id"];
	$number = $result["set_random_option_num"];
	$row = [
				$result['random_attr_name'], $result['random_attr_min1'], $result['random_attr_max1'],
				$result['random_attr_name1'], $result['random_attr_min2'], $result['random_attr_max2'],
				$result['random_attr_name2'], $result['random_attr_min3'], $result['random_attr_max3'],
				$result['random_attr_name3'], $result['random_attr_min4'], $result['random_attr_max4'],
				$result['random_attr_name4'], $result['random_attr_min5'], $result['random_attr_max5'],
				$result['random_attr_name5'], $result['random_attr_min6'], $result['random_attr_max6'],
				$result['random_attr_name6'], $result['random_attr_min7'], $result['random_attr_max7'],
				$result['random_attr_name7'], $result['random_attr_min8'], $result['random_attr_max8'],
				$result['random_attr_name8'], $result['random_attr_min9'], $result['random_attr_max9'],
				$result['random_attr_name9'], $result['random_attr_min10'], $result['random_attr_max10'],
	];

} //end else


$chunks = array_chunk($row, 3);

include 'maptemplate.php';

foreach ($chunks as $info) {
	
    list($name, $min, $max) = $info;
	
	if(strtolower($name) == 'speed'){
		$percent = '%';
	}elseif(strtolower($name) == 'boostcastingtime'){
		$percent = '%';
	}elseif(strtolower($name) == 'attackdelay'){
		$percent = '%';
	}else {
		$percent = '';
	}
	
	$realrandomone =	$name . ' ' . $min . $percent . '~'.  $max . $percent;
	
	$randomattributeHtml3 = '';
        $fieldValue = $realrandomone;
            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));
            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }
            $randomattributeHtml3 .= $statMap[$attributeName]($attributeValue);
        if (!empty($randomattributeHtml3)) {
            $randomStatstest .= '<div class="cl"></div><p><dl>' . $randomattributeHtml3 . '</dl></p>';
        }
		
		
		
	//$randomStatstest .= $realrandomone;
	
	
}




	

if ($testid != NULL) {
	
	
	
	
	
	
	$randomStats = '<div class="wrap weapon_property_bonus" style=""><p class="realrandombonuses" >Re-identification Random Bonuses ('.$number.')</p><div class="realrandombonusesdetails" style="">';
	
	$randomStats .= $randomStatstest;
	
	
	$randomStats .= '</div> </div>';
	
	
	$RealRandomStats = strtr($randomStats, array(
		"+-" => '-',
		"~" => ' ~ ',
		));
	
	return $RealRandomStats;
	}else {
		return 'error. Check randomStats';
	}
}