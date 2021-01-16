<?



function petlink($name)
{
    include 'DBselect.php';
    $result = $db->query("
SELECT  * 
FROM toypets
WHERE name = '$name'
 ", $name)->fetchArray();



	$petid = $result["id"];
	$localizationPet = trans($result["description"], lang());
	$extraicon_name=strtolower($result["icon_name"]);
	
	$peticonfinal = strtr($extraicon_name, array(
		".dds" => '',
));
	
    return '<img src="https://aionpowerbook.com/pet/icon/' . $peticonfinal . '.png" alt="" class="thumb3"> <a class="col_ " href="https://aionpowerbook.com/powerbook/Pet/' . $petid . '">' . $localizationPet . '</a>';
	
}