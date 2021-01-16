<?php



function client_item_skill_enhance($name)
{

    include 'DBselect.php';
    $sql = $db->query("
SELECT *
FROM client_item_skill_enhance
WHERE name = '$name'
")->fetchAll();



    foreach ($sql as $itemrow) {

		
	$enchantSkilltabname = translate('STR_TOOLTIP_ITEM_RUNE_OSKILL_EQED_TITLE', language());
	
$enchantSkill .= '<div class="wrap item_set" style=""><dl class="item_set"><dt class="item_set">' . $enchantSkilltabname . '</dt><div class="enchantskillsdetails" style=""><br>';
		


$row = [
$itemrow['skill_group_name'], $itemrow['skill_prob'],
$itemrow['skill_group_name1'], $itemrow['skill_prob1'],
$itemrow['skill_group_name2'], $itemrow['skill_prob2'],
$itemrow['skill_group_name3'], $itemrow['skill_prob3'],
$itemrow['skill_group_name4'], $itemrow['skill_prob4'],
$itemrow['skill_group_name5'], $itemrow['skill_prob5'],
$itemrow['skill_group_name6'], $itemrow['skill_prob6'],
$itemrow['skill_group_name7'], $itemrow['skill_prob7'],
$itemrow['skill_group_name8'], $itemrow['skill_prob8'],
$itemrow['skill_group_name9'], $itemrow['skill_prob9'],
$itemrow['skill_group_name10'], $itemrow['skill_prob10'],
$itemrow['skill_group_name11'], $itemrow['skill_prob11'],
$itemrow['skill_group_name12'], $itemrow['skill_prob12'],
$itemrow['skill_group_name13'], $itemrow['skill_prob13'],
$itemrow['skill_group_name14'], $itemrow['skill_prob14'],
$itemrow['skill_group_name15'], $itemrow['skill_prob15'],
$itemrow['skill_group_name16'], $itemrow['skill_prob16'],
$itemrow['skill_group_name17'], $itemrow['skill_prob17'],
$itemrow['skill_group_name18'], $itemrow['skill_prob18'],
$itemrow['skill_group_name19'], $itemrow['skill_prob19'],
$itemrow['skill_group_name20'], $itemrow['skill_prob20'],
$itemrow['skill_group_name21'], $itemrow['skill_prob21'],
$itemrow['skill_group_name22'], $itemrow['skill_prob22'],
$itemrow['skill_group_name23'], $itemrow['skill_prob23'],
$itemrow['skill_group_name24'], $itemrow['skill_prob24'],
$itemrow['skill_group_name25'], $itemrow['skill_prob25'],
$itemrow['skill_group_name26'], $itemrow['skill_prob26'],
$itemrow['skill_group_name27'], $itemrow['skill_prob27'],
$itemrow['skill_group_name28'], $itemrow['skill_prob28'],
$itemrow['skill_group_name29'], $itemrow['skill_prob29'],
$itemrow['skill_group_name30'], $itemrow['skill_prob30'],
$itemrow['skill_group_name31'], $itemrow['skill_prob31'],
$itemrow['skill_group_name32'], $itemrow['skill_prob32'],
$itemrow['skill_group_name33'], $itemrow['skill_prob33'],
$itemrow['skill_group_name34'], $itemrow['skill_prob34'],
$itemrow['skill_group_name35'], $itemrow['skill_prob35'],
$itemrow['skill_group_name36'], $itemrow['skill_prob36'],
$itemrow['skill_group_name37'], $itemrow['skill_prob37'],
$itemrow['skill_group_name38'], $itemrow['skill_prob38'],
$itemrow['skill_group_name39'], $itemrow['skill_prob39'],
$itemrow['skill_group_name40'], $itemrow['skill_prob40'],
$itemrow['skill_group_name41'], $itemrow['skill_prob41'],
$itemrow['skill_group_name42'], $itemrow['skill_prob42'],
$itemrow['skill_group_name43'], $itemrow['skill_prob43'],
$itemrow['skill_group_name44'], $itemrow['skill_prob44'],
$itemrow['skill_group_name45'], $itemrow['skill_prob45'],
$itemrow['skill_group_name46'], $itemrow['skill_prob46'],
$itemrow['skill_group_name47'], $itemrow['skill_prob47'],
$itemrow['skill_group_name48'], $itemrow['skill_prob48'],
$itemrow['skill_group_name49'], $itemrow['skill_prob49'],
$itemrow['skill_group_name50'], $itemrow['skill_prob50'],
$itemrow['skill_group_name51'], $itemrow['skill_prob51'],
$itemrow['skill_group_name52'], $itemrow['skill_prob52'],
$itemrow['skill_group_name53'], $itemrow['skill_prob53'],
$itemrow['skill_group_name54'], $itemrow['skill_prob54'],
$itemrow['skill_group_name55'], $itemrow['skill_prob55'],
$itemrow['skill_group_name56'], $itemrow['skill_prob56'],
$itemrow['skill_group_name57'], $itemrow['skill_prob57'],
$itemrow['skill_group_name58'], $itemrow['skill_prob58'],
$itemrow['skill_group_name59'], $itemrow['skill_prob59'],
$itemrow['skill_group_name60'], $itemrow['skill_prob60'],

  
];
 
$chunks = array_chunk($row, 2);
$enchantSkill .= '';
foreach ($chunks as $info) {
    list($name, $prob) = $info;
	if ($name != null and $prob > 0) {
    	$enchantSkill .= skillenchant($name, language()) . ' (' . $prob/10 . '%)<br>';
	}
}


$enchantSkill .= '</div></dl></div>';
	
	
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	return $enchantSkill;
}