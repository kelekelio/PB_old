<?

function crafttableicon($name)
{
    include 'DBselect.php';

    $result = $db->query("
SELECT icon_name,
quality
FROM client_items
WHERE name = '$name'
", $name)->fetchArray();

	$crafticon_name=strtolower($result["icon_name"]);
	$craftquality=strtolower($result["quality"]);
    return $crafticon_name . '.png" width="37" height="37" alt=""><br></td><td class="al"><a class="col_' . $craftquality;
	
}