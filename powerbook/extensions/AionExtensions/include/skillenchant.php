<?



function skillenchant($name, $language)
{
    include 'DBselect.php';
    $result = $db->query("
SELECT 
	id,
	skillicon_name,
	description
FROM client_skills
WHERE skill_group_name = '$name'
LIMIT 0,1 
", $name)->fetchArray();

	
	$id = $result["id"];
	$localizationSkill = translate($result["description"], language());
	
	$skillicon_name=strtolower($result["skillicon_name"]);
	
	$skillicon = strtr($skillicon_name, array(
    ".dds" => '',
));
	

	return '<img src="https://aionpowerbook.com/skillicon/' . $skillicon . '.png" alt="" class="thumb3">  <a href="https://aionpowerbook.com/powerbook/Skill/' . $id . '" class="skilltipzy" skillid="' . $id . '" skilltiplang="' . $language . '" classic="' . isClassic() . '">' . $localizationSkill . '</a>';
}