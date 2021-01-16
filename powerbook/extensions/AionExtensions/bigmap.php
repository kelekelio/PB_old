<?php
require_once dirname(__FILE__) . '/include/dbconfig6664554.php';



function zone($name) {
include 'include/dbconfig6664554.php';
	


if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$query = "
select id
from zonemap
where name = '$name'
";

if ($result = $mysqli->query($query)) {

    /* fetch object array */
    while ($obj = $result->fetch_object()) {
        return ($obj->id);
    }

    /* free result set */
    $result->close();
}


/* close connection */
$mysqli->close();


}





$gather = $_GET['gather'];
$id = $_GET['id'];
$zoneid = $_GET['map'];
$spname = $_GET['name'];
$sphere = $_GET['sphere'];

if ($gather == '1'){
	$sqltable = 'gather_data';
} else {
	$sqltable = 'npc_data_new';
}


if ($sphere == '1' ){
	$sql = 	'SELECT *';
	$sql .=	' FROM source_sphere ';
	$sql .=	' WHERE name = ?';
	
}else {
$sql = 	'SELECT *';
$sql .=	' FROM '.$sqltable.' ';
$sql .=	' WHERE id = ?';
}

/* Prepare statement */
$stmt = $mysqli->prepare($sql);
if($stmt === false) {
  trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $mysqli->errno . ' ' . $mysqli->error, E_USER_ERROR);
}
 


 
/* Bind parameters. Types: s = string, i = integer, d = double,  b = blob */
if ($sphere == '1' ){
	$stmt->bind_param('s', $spname);
}else {
	$stmt->bind_param('s', $id);
}
 
/* Execute statement */
$stmt->execute();
 
/* Fetch result to array */
$res = $stmt->get_result();

$spotsarray = array();

while($row = $res->fetch_array(MYSQLI_ASSOC)) {
		
		if ( $sphere == '1' ){
			$location = zone($row["map"]);
		}else {
			$location = $row["map"];
		}
		
		include 'include/maplayers.php';
		
	}
	

	

/* close connection */
$mysqli->close();




?>
<html>
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Big Map</title>
<script type="text/javascript" src="https://aionpowerbook.com/krjava/jslib_p170_s190_j152.js"></script>
<script type="text/javascript">jQuery.noConflict();</script>
<script type="text/javascript" src="https://aionpowerbook.com/krjava/aionmap_json.js"></script>
<script type="text/javascript" src="https://aionpowerbook.com/krjava/aionmap.js?v=20120106"></script>
<link rel="stylesheet" type="text/css" href="https://aionpowerbook.com/powerbook/skins/MonoBook/map.css" />
</head>

	
	
<div class="hbody">
<?php
$i = 0;
foreach ($spotsarray as $map => $nods) {
    
		$node = implode(",", $nods);
		
		if ($_GET['gather'] == '1') {
			$nodefin = strtr($node, array(
				'|a1|' => '"g1"',
			));
		}else {
			$nodefin = $node;
		}
		
		
		$nodefinfix = strtr($nodefin, array(
				'|' => '"',
			));
		
		if ($map == $zoneid) {
		echo '<div id="map" class="aionmap gamemap1"></div>
		<script type="text/javascript">
		(function($) {
			$("#map").aionMap({zone:\''.$map.'\',mapType:"satellite",viewType:\'gamemap1\',marks:Array('.$nodefinfix.')});
		})(jQuery);
		</script>
		';
		}
}

?>
</div>
	

</html>