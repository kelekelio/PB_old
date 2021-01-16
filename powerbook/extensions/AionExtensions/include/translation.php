<?



function trans($name, $language)
{
$mysqli = new mysqli("mysqlhost", "kelekelio", "UI0#cuplgVBj", "kelekelio");

if (mysqli_connect_errno()) {

    exit();
}

$query = "SELECT * FROM translation_small where name = '$name'";

if ($result = $mysqli->query($query)) {

    /* fetch object array */
    while ($row = $result->fetch_row()) {
		$localization=!empty($row["search_" . $language]) ? $row["search_" . $language] : $row['search_ko'];
		$test = $row['search_ko'];
		
    }

    /* free result set */
    $result->close();
}

/* close connection */
$mysqli->close();

    return $test;
}