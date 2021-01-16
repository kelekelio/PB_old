<?php



function HouseObj($name)
{
    include 'DBselect.php';
    $result = $db->query("
SELECT *
FROM client_housing_object
WHERE name = '$name'
", $name)->fetchArray();


	
	
	$localizationSkill = translate($result["description"], language());	
	
	
	
	if ($result["reward_use"] != NULL) {
	$Obj .= '<div class="wrap item_upgrade" style=""><dl class="item_upgrade"><dt>Reward</dt><dd class="item_upgrade">';
	$Obj .= extraitem($result["reward_use"], language());
	$Obj .= '</dd></dl>';
	
	if ($result["reward_final"] != NULL) {
	$Obj .= '<br><br><br>';	
	$Obj .= '<dl class="item_upgrade"><dt>Final Reward</dt><dd class="item_upgrade">';
	$Obj .= extraitem($result["reward_final"], language());
	$Obj .= '</dd></dl>';
	}
	$Obj .= '</div>';
	}else {
		$Obj = '';
	}
	
	
	
	
	return $Obj;
}