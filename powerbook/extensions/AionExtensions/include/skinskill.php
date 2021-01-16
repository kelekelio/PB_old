<?



function skinskill($name, $language)
{
    include 'DBselect.php';
    $result = $db->query("
	SELECT id, skillicon_name, search_$language, search_ko from client_skills WHERE name = '$name'
       ", $name)->fetchArray();

	

	$localizationSkill	=	!empty($result['search_'.$language]) ? $result['search_'.$language] : $result['search_ko'];
	$skillicon_name		=	strtolower($result["skillicon_name"]);
	$id		=	$result["id"];
	$skillicon = strtr($skillicon_name, array(
    	".dds" => '',
	));	
	
	if ($id != NULL) {
		return '<img src="https://aionpowerbook.com/skillicon/' . $skillicon . '.png" alt="" class="thumb3">  <a href="https://aionpowerbook.com/powerbook/Skill/' . $id . '" class="skilltipzy" skillid="' . $id . '" skilltiplang="' . $language . '" classic="' . isClassic() . '">' . $localizationSkill . '</a>';
	}else {
		return '';
	}
}