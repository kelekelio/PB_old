<?php


function checkonlyLearnLevel($name, $id)
{


    include 'DBselect.php';
    $result = $db->query("
SELECT *
FROM client_skill_learns
WHERE skill = '$name'
", $name)->fetchArray();


    $resID = $result["id"];
	
	
	if ($id == '0' and $resID != NULL) {
		return '<b>' .$result['pc_level'] . '</b>';
	}elseif ($id > 0 and $resID != NULL) {
		return '<a href="https://aionpowerbook.com/powerbook/Skill/'.$id.'">' . $result['pc_level'] . '</a>';
	}
	
	
}


function checkallLearnLevels($name, $id)
{
	
	// name = ALL_ShockReflect_G1
	
	$likename = substr_replace($name,"",-1);
	$lasttwocharacter = substr($likename, -2);
	
	if ($lasttwocharacter == '_G' or $lasttwocharacter == '_g') {
		$querylikename = $likename . '%';
	}elseif ($lasttwocharacter == 'G1' or $lasttwocharacter == 'g1'){
		
		$minustwo = substr_replace($name,"",-2);
		
		$querylikename = $minustwo . '%';
	}
	else {
		$querylikename = $name;
	}



    include 'DBselect.php';
    $sql = $db->query("
SELECT id, name
FROM client_skills
WHERE name like '".$querylikename."' and name not like '".$querylikename."_buff' 
order by id asc
")->fetchAll();


    foreach ($sql as $row) {
		
		if ($id == $row["id"]){
			$rows[] = checkonlyLearnLevel($row["name"], '0');
		}else {
			$rows[] = checkonlyLearnLevel($row["name"], $row["id"]);
		}
		
		
	}
	
	$filterrows = array_filter($rows);
	
	$recommClass = implode(", ", $filterrows);
	
	return $recommClass;
	
}




function checkallclasses ($name)
{
    include 'DBselect.php';
    $sql = $db->query("
SELECT id, class
FROM client_skill_learns
WHERE skill = '$name'
")->fetchAll();


    foreach ($sql as $row) {
        $rows[] = $row["class"];
    }
	



	
	if ($rows != NULL) {
	
	foreach (array_unique($rows) as $key) {
if ($key == 'KNIGHT') {
	$FixedName = explode('[', translate('STR_CLASS_NAME_KNIGHT', language()));
	$recommClass .= '<a href="https://aionpowerbook.com/powerbook/Templar_Skills_List">' . $FixedName[0] . '</a> ';
}elseif ($key == 'FIGHTER') {
	$FixedName = explode('[', translate('STR_CLASS_NAME_FIGHTER', language()));
	$recommClass .= '<a href="https://aionpowerbook.com/powerbook/Gladiator_Skills_List">' . $FixedName[0] . '</a> ';
}elseif ($key == 'ASSASSIN') {
	$FixedName = explode('[', translate('STR_CLASS_NAME_ASSASSIN', language()));
	$recommClass .= '<a href="https://aionpowerbook.com/powerbook/Assassin_Skills_List">' . $FixedName[0] . '</a> ';
}elseif ($key == 'RANGER') {
	$FixedName = explode('[', translate('STR_CLASS_NAME_RANGER', language()));
	$recommClass .= '<a href="https://aionpowerbook.com/powerbook/Ranger_Skills_List">' . $FixedName[0] . '</a> ';
}elseif ($key == 'WIZARD') {
	$FixedName = explode('[', translate('STR_CLASS_NAME_WIZARD', language()));
	$recommClass .= '<a href="https://aionpowerbook.com/powerbook/Sorcerer_Skills_List">' . $FixedName[0] . '</a> ';
}elseif ($key == 'ELEMENTALLIST') {
	$FixedName = explode('[', translate('STR_CLASS_NAME_ELEMENTALIST', language()));
	$recommClass .= '<a href="https://aionpowerbook.com/powerbook/Spiritmaster_Skills_List">' . $FixedName[0] . '</a> ';
}elseif ($key == 'PRIEST') {
	$FixedName = explode('[', translate('STR_CLASS_NAME_PRIEST', language())); //cleric
	$recommClass .= '<a href="https://aionpowerbook.com/powerbook/Cleric_Skills_List">' . $FixedName[0] . '</a> ';
}elseif ($key == 'CHANTER') {
	$FixedName = explode('[', translate('STR_CLASS_NAME_CHANTER', language()));
	$recommClass .= '<a href="https://aionpowerbook.com/powerbook/Chanter_Skills_List">' . $FixedName[0] . '</a> ';
}elseif ($key == 'GUNNER') {
	$FixedName = explode('[', translate('STR_CLASS_NAME_GUNNER', language()));
	$recommClass .= '<a href="https://aionpowerbook.com/powerbook/Gunner_Skills_List">' . $FixedName[0] . '</a> ';
}elseif ($key == 'RIDER') {
	$FixedName = explode('[', translate('STR_CLASS_NAME_RIDER', language()));
	$recommClass .= '<a href="https://aionpowerbook.com/powerbook/Aethertech_Skills_List">' . $FixedName[0] . '</a> ';
}elseif ($key == 'BARD') {
	$FixedName = explode('[', translate('STR_CLASS_NAME_BARD', language()));
	$recommClass .= '<a href="https://aionpowerbook.com/powerbook/Bard_Skills_List">' . $FixedName[0] . '</a> ';
}elseif ($key == 'WARRIOR') {
	$FixedName = explode('[', translate('STR_CLASS_NAME_Warrior', language()));
	$recommClass .= '<a href="https://aionpowerbook.com/powerbook/Warrior">' . $FixedName[0] . '</a> ';
}elseif ($key == 'SCOUT') {
	$FixedName = explode('[', translate('STR_CLASS_NAME_SCOUT', language()));
	$recommClass .= '<a href="https://aionpowerbook.com/powerbook/Scout">' . $FixedName[0] . '</a> ';
}elseif ($key == 'MAGE') {
	$FixedName = explode('[', translate('STR_CLASS_NAME_MAGE', language()));
	$recommClass .= '<a href="https://aionpowerbook.com/powerbook/Mage">' . $FixedName[0] . '</a> ';
}elseif ($key == 'ENGINEER') {
	$FixedName = explode('[', translate('STR_CLASS_NAME_ENGINEER', language()));
	$recommClass .= '<a href="https://aionpowerbook.com/powerbook/Engineer">' . $FixedName[0] . '</a> ';
}elseif ($key == 'CLERIC') {
	$FixedName = explode('[', translate('STR_CLASS_NAME_CLERIC', language()));
	$recommClass .= '<a href="https://aionpowerbook.com/powerbook/Priest">' . $FixedName[0] . '</a> ';
}elseif ($key == 'ARTIST') {
	$FixedName = explode('[', translate('STR_CLASS_NAME_ARTIST', language()));
	$recommClass .= '<a href="https://aionpowerbook.com/powerbook/Artist">' . $FixedName[0] . '</a> ';
}elseif ($key == 'PAINTER') {
	$FixedName = explode('[', translate('STR_CLASS_NAME_PAINTER', language()));
	$recommClass .= '<a href="https://aionpowerbook.com/powerbook/Painter_Skills_List">' . $FixedName[0] . '</a> ';
}elseif (strtolower($key) == 'all') {
	$recommClass .= 'All';
}else {
	$recommClass .= '<a href="https://aionpowerbook.com/powerbook/Main_Page"></a>';
}
	}
}else {
	
}
	
	
	if ($recommClass != NULL){
		return '<dd class="acquire_class" id="skill_acquire_class" ><em>'.$recommClass.'</em></dd>';
	}else {
		return '';
	}
}





function checkLearnLevel($name)
{
    include 'DBselect.php';
    $result = $db->query("
SELECT *
FROM client_skill_learns
WHERE skill = '$name'
", $name)->fetchArray();

	
	if (!empty($result['id'])) {
		return array($result['class'], $result['pc_level'], $result['skill_level'], $result['race']);
	}else {
		return '';
	}
	
	
}