<?php



function robotStats($name, $type)
{
    include 'DBselect.php';
    $result = $db->query("SELECT * FROM robot WHERE name = '$name' ", $name)->fetchArray();

	return $result[$type];
}