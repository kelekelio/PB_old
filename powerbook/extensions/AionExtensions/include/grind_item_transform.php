<?php


function TransformationLink($name) {

	$language = language();


	$query = "
	SELECT  id, grade, description, icon_name, skill
	FROM client_transformbook
	WHERE name = '$name'
	";

    $query  = mysql_query($query) or die(mysql_error());
    while ($row=mysql_fetch_array($query)) {
		$id = $row["id"];
		$grade = $row["grade"];
		$description = translate($row["description"], language());
		$icon_name = strtolower($row["icon_name"]);
		$skill = skillbuffdesc($row["skill"]);
	}
			
			
	if ($grade == '1') {
		$color = 'acacac'; //<font color="EAEAEA">일반</font>
	}elseif ($grade == '2') {
		$color = '6CDF5E';
	}elseif ($grade == '3') {
		$color = 'E1AD40';
	}elseif ($grade == '4') {
		$color = 'EB46FF';
	}elseif ($grade == '5') {
		$color = 'FF4B4B';
	}
	
	
	$link = '<img src="https://aionpowerbook.com/transformation/'.$icon_name.'.png" alt="" class="thumb3"> <a style="color:#'.$color.' !important" class="skilltipzy" href="https://aionpowerbook.com/powerbook/Transformation/' . $id . '" skillid="' . $skill . '" skilltiplang="' . $language . '">' . $description . '</a>';

	
	return $link;
}





function grind_item_transform($name)
{
$query = "
SELECT *
FROM grind_item_transform
WHERE name = '$name'
";

    $query  = mysql_query($query) or die(mysql_error());
    while ($itemrow=mysql_fetch_array($query)) {

		
$enchantSkilltabname = translate('STR_TOOLTIP_ITEM_RUNE_TE_EQED_TITLE', language());
	
$enchantSkill = '<div class="wrap item_set" style=""><dl class="item_set"><dt class="item_set">' . $enchantSkilltabname . '</dt><div class="enchantskillsdetails" style=""><br>';
		

	$id = $itemrow["id"];
	$transform_name = $itemrow["transform_name"];
	$transform_name1 = $itemrow["transform_name1"];
	$transform_name2 = $itemrow["transform_name2"];
	$transform_name3 = $itemrow["transform_name3"];


		$enchantSkill .= TransformationLink($transform_name);

	if ($transform_name1 != NULL) {
		$enchantSkill .= '<br>' . TransformationLink($transform_name1);
	}
	if ($transform_name2 != NULL) {
		$enchantSkill .= '<br>' . TransformationLink($transform_name2);
	}
	if ($transform_name3 != NULL) {
		$enchantSkill .= '<br>' . TransformationLink($transform_name3);
	}


$enchantSkill .= '</div></dl></div>';
	
	
	}
	
	
	
	
	
	
	
	
	
	
	
	
	if ($id != NULL) {
		return $enchantSkill;
	}else {
		return 'No data. Error in grind_item_transform.';
	}
}