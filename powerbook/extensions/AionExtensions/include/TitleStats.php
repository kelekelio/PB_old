<?php



function titleStats($id, $language, $type)
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
FROM client_titles
WHERE id = '$id'
";

    $query=mysqli_query($conn, $sql) or die(mysqli_error());
    while ($result = mysqli_fetch_assoc($query)) {
			$testid = $result["id"];
			
			
			if ($testid != NULL) {
	
	$randomStats = '<div class="wrap weapon_property_bonus" style=""><p class="" >Title Bonuses:</p><div class="" >';
	
	
include 'maptemplate.php';	

		 $randomattributeHtml1 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^bonus_attr[0-9]?/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml1 .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($randomattributeHtml1)) {
            $randomStats .= '<p><dl>' . $randomattributeHtml1 . '</dl></p>';
        }
		
		

	$randomStats .= '</div> </div>';
			

	
	
	$randomStatsfixed = strtr($randomStats, array(
		"+-" => '-',
		));
	
	
	
	return $randomStatsfixed;
	}else {
		return 'error. Check randomStats';
	}

	} //end while

	
	
	
	
	
	
}else {

    include 'DBselect.php';
    $result = $db->query("
SELECT *
FROM client_titles
WHERE id = '$id'
", $name)->fetchArray();


	
	$testid = $result["id"];
	
	if ($testid != NULL) {
	
	$randomStats = '<div class="wrap weapon_property_bonus" style=""><p class="" >Title Bonuses:</p><div class="" >';
	
	
include 'maptemplate.php';	

		 $randomattributeHtml1 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^bonus_attr[0-9]?/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml1 .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($randomattributeHtml1)) {
            $randomStats .= '<p><dl>' . $randomattributeHtml1 . '</dl></p>';
        }
		
		

	$randomStats .= '</div> </div>';
			

	
	
	$randomStatsfixed = strtr($randomStats, array(
		"+-" => '-',
		));
	
	
	
	return $randomStatsfixed;
	}else {
		return 'error. Check randomStats';
	}
	
	

}
}