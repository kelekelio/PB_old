<?php



function checkCompareEU($id, $language)
{
	
$query = "
SELECT id
FROM client_items_eu
WHERE id = '$id'
";

    $query  = mysql_query($query) or die(mysql_error());
    $result = mysql_fetch_assoc($query);
	
	$id=$result["id"];
	
	if (!empty($id)) {
		return '<div class="compareEU restrictionTip" title="Compare with EU" compareurl="https://aionpowerbook.com/powerbook/extensions/AionExtensions/compare.php?lang='.$language.'&id='.$id.'"></div>';
	}else{
		return '';
	}
}