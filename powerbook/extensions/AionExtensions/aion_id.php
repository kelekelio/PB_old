<?php


header('Content-type: text/html; charset=utf-8');
$wgExtensionCredits['variable'][] = array(
	'path'           => __FILE__,
	'name'           => 'Aion ID Data',
	'author'         => 'Kelekelio',
	'url'            => 'https://aionpowerbook.com',
	'descriptionmsg' => 'Aion ID data',
	'version'		 => '1.0',
	'license-name' 	 => 'LICENSE',
);
 
$wgHooks['ParserFirstCallInit'][] = 'AionIDFunction';
$wgExtensionMessagesFiles['AionID'] = __DIR__ . '/aion_id.i18n.php';
function AionIDFunction( &$parser ) {
   $parser->setFunctionHook( 'id_data', 'AionIDParserFunction' );
   return true;
}


function zonemap_name_id ($name) {
    $query = "
           SELECT id
           FROM  zonemap
           WHERE name = '$name'
       ";

    $query  = mysql_query($query) or die(mysql_error());
    $result = mysql_fetch_assoc($query);

	$id = $result['id'];
	if ($id != NULL) {
		return $id;	
	}else {
		return 'Unkown';
	}
	
}



function client_instance_cooltime ($name) {
	$query = "
	SELECT *
	FROM  client_instance_cooltime
	WHERE name = '$name'
";

$query  = mysql_query($query) or die(mysql_error());
$result = mysql_fetch_assoc($query);

if (strtolower($result['race']) == "light") {
	$min_member = $result['min_member_light'];
	$max_member = $result['max_member_light'];
	$enter_min_level = $result['enter_min_level_light'];
}elseif (strtolower($result['race']) == "dark") {
	$min_member = $result['min_member_dark'];
	$max_member = $result['max_member_dark'];
	$enter_min_level = $result['enter_min_level_dark'];
}else {
	$min_member = $result['min_member_light'];
	$max_member = $result['max_member_light'];
	$enter_min_level = $result['enter_min_level_light'];
}

$return = "<p>indun_type: ". $result['indun_type'] ."</p>";
$return .= "<p>race: ". $result['race'] ."</p>";
$return .= "<p>min_member: ". $min_member ."</p>";
$return .= "<p>max_member: ". $max_member ."</p>";
$return .= "<p>enter_min_level: ". $enter_min_level ."</p>";
$return .= "<br>";
$return .= '<table class="edit_table" border="1" style="" width="100%">';
$return .= "<tr><th width=\"80px\">Type</th><th width=\"80px\">ID</th><th width=\"80px\">type</th><th width=\"80px\">typevalue</th><th width=\"80px\">value</th><th width=\"80px\">maxcount</th><th>component</th></tr>";
$return .= "<tr><th>P2P</th><th>". $result['coolt_tbl_id'] . "</th>" . client_instance_cooltime2($result['coolt_tbl_id']) . "<tr>";
$return .= "<tr><th>F2P</th><th>". $result['f2p_coolt_tbl_id'] . "</th>" . client_instance_cooltime2($result['f2p_coolt_tbl_id']) . "<tr>";
$return .= "<tr><th class=\"cel1\" colspan=\"7\"></th><tr>";
$return .= "<tr><th>P2P EU</th><th>". $result['coolt_tbl_id'] . "</th>" . client_instance_cooltime2("9" . $result['coolt_tbl_id']) . "<tr>";
$return .= "<tr><th>F2P EU</th><th>". $result['f2p_coolt_tbl_id'] . "</th>" . client_instance_cooltime2("9" . $result['f2p_coolt_tbl_id']) . "<tr>";
$return .= "<tr><th class=\"cel1\" colspan=\"7\"></th><tr>";
$return .= "<tr><th>P2P K=E</th><th>". $result['coolt_tbl_id'] . "</th>" . client_instance_cooltime2("8" . $result['coolt_tbl_id']) . "<tr>";
$return .= "<tr><th>F2P K=E</th><th>". $result['f2p_coolt_tbl_id'] . "</th>" . client_instance_cooltime2("8" . $result['f2p_coolt_tbl_id']) . "<tr>";
$return .= "</table>";

if ($result['id'] != null) {
	return $return;
}else {
	return 'No client_instance_cooltime data.';
}
}

function client_instance_cooltime2 ($id) {
	$query = "
		SELECT *
		FROM  client_instance_cooltime2
		WHERE id = '$id'
	";

	$query  = mysql_query($query) or die(mysql_error());
	$result = mysql_fetch_assoc($query);



	if ($result['component'] != null) {
		$component = extraitem($result['component'], language()) . " x" . $result['component_count'];
	}

	$return = "<th>".$result['type']."</th><th>".$result['typevalue']."</th><th>".$result['value']."</th><th>".$result['maxcount']."</th><th>".$component."</th>";


	if ($result['id'] != null) {
		return $return;
	}else {
		return 'No client_instance_cooltime2 data.';
	}
}





function AionIDParserFunction( &$parser, $arg1 ) {
include 'include/dbconfig6664554.php';


$sql = 	'SELECT * ';
$sql .=	' FROM client_instance_creation';
$sql .=	' WHERE worldname = ?';

/* Prepare statement */
$stmt = $mysqli->prepare($sql);
if($stmt === false) {
  trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $mysqli->errno . ' ' . $mysqli->error, E_USER_ERROR);
}
 
$worldname = $arg1;
 
/* Bind parameters. Types: s = string, i = integer, d = double,  b = blob */
$stmt->bind_param('s', $worldname);
 
/* Execute statement */
$stmt->execute();
 
/* Fetch result to array */
$res = $stmt->get_result();

$spotsarray = array();

while($row = $res->fetch_array(MYSQLI_ASSOC)) {
		$id=$row["id"];
		$name = $row["name"];
		$worldname = $row["worldname"];
		$quna_buff_luna_price_id = $row["quna_buff_luna_price_id"];
		$data .= "<p>" . $id . ": " . $name . "</p>"; 
	}
 
	$name = "<p>DEV_NAME_ID: " . $worldname . " | " . zonemap_name_id($worldname) . "</p>" ;
	$name .= "<p>Quna/Luna Buff ID:" . $quna_buff_luna_price_id . "</p>";
	$name .= "<br>";

	$cd_data = "<br>";
	$cd_data .= client_instance_cooltime($worldname);



$mysqli->close();



return array( $name . $data . $cd_data, 'noparse' => true, 'isHTML' => true );
}