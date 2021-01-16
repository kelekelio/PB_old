<?php



function rideStats($name, $type)
{
    include 'DBselect.php';
    $result = $db->query("SELECT * FROM ride WHERE name = '$name' ", $name)->fetchArray();

	return $result[$type];
}