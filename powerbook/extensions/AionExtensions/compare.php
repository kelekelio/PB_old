<?php
$url = $_SERVER["SCRIPT_NAME"];
$id = $_GET['id'];
$language = $_GET['lang'];

$break = Explode('/', $url);
$file = $break[count($break) - 1];
$cachefile = 'cache/compare/'.$language.'/'.$id.'.html';
$cachetime = 604800000;

// Serve from the cache if it is younger than $cachetime
if (file_exists($cachefile) && time() - $cachetime < filemtime($cachefile)) {
    echo "<!-- Cached copy, generated ".date('H:i', filemtime($cachefile))." -->\n";
    include($cachefile);
    exit;
}
ob_start(); // Start the output buffer



//error_reporting(E_ALL);
//ini_set('display_errors', 1);
/* Database connection start */
$servername = "mysqlhost";
$username = "login2";
$password = "passw";
$dbname = "login";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
mysqli_set_charset($conn,"utf8");
/* Database connection end */


$id = $_GET['id'];
$language = $_GET['lang'];

function language()
{
	$language = $_GET['lang'];
	return $language;
}



function translate($name, $language)
{
$servername = "mysqlhost";
$username = "login2";
$password = "passw";
$dbname = "login";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
mysqli_set_charset($conn,"utf8");

    $sql = "
           SELECT
              t.body  ko,
              t.LAN_EN  en,
              t.LAN_DE  de,
              t.LAN_FR  fr,
              t.LAN_ES  es,
              t.LAN_IT  it,
              t.LAN_PL  pl,
              t.LAN_US  us
           FROM  translation_small t
           WHERE t.name = '$name'
       ";									// !!!!!!!!!!!!!!!!! USE LIVE KOREAN LOCA INSTEAD OF FUTURE !!!!!!!!!!!!!!!!!!!!!!! 
	   

    $query=mysqli_query($conn, $sql) or die(mysqli_error());
    while ($result = mysqli_fetch_assoc($query)) {
	$localizationExtra = !empty($result[$language]) ? $result[$language] : $result['ko'];
	}
    return $localizationExtra;
}

function randomStats($name, $language, $type)
{
$servername = "mysqlhost";
$username = "login2";
$password = "passw";
$dbname = "login";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
mysqli_set_charset($conn,"utf8");	


$sql = "
SELECT *
FROM $type
WHERE name = '$name'
";

    $query=mysqli_query($conn, $sql) or die(mysqli_error());
    $result = mysqli_fetch_assoc($query);
	$id = $result["id"];


	$randomStats = '<div class="wrap weapon_property_bonus" style=""><p class="randombonuses" ><img src="https://aionpowerbook.com/pbimg/random1.png" class="thumb3"> Random Bonuses (Click)</p><div class="randombonusesdetails">';

	if ($id != NULL) {
	
		include 'include/maptemplate.php';



		$randomattributeHtml1 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+1$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml1 .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($randomattributeHtml1)) {
            $randomStats .= '<p>' . ($result["prob1"]/100) . '%<br><dl>' . $randomattributeHtml1 . '</dl></p>';
		}
		
		$randomattributeHtml2 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+2$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml2 .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($randomattributeHtml2)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob2"]/100) . '%<br><dl>' . $randomattributeHtml2 . '</dl></p>';
        }
		
		$randomattributeHtml3 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+3$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml3 .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($randomattributeHtml3)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob3"]/100) . '%<br><dl>' . $randomattributeHtml3 . '</dl></p>';
        }
		
		
		
		
		
		$randomattributeHtml4 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+4$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml4 .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($randomattributeHtml4)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob4"]/100) . '%<br><dl>' . $randomattributeHtml4 . '</dl></p>';
        }		
		
		
		
		$randomattributeHtml5 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+5$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml5 .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($randomattributeHtml5)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob5"]/100) . '%<br><dl>' . $randomattributeHtml5 . '</dl></p>';
        }		
		
		
		
		
		$randomattributeHtml6 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+6$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml6 .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($randomattributeHtml6)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob6"]/100) . '%<br><dl>' . $randomattributeHtml6 . '</dl></p>';
        }		
		
		
		$randomattributeHtml7 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+7$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml7 .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($randomattributeHtml7)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob7"]/100) . '%<br><dl>' . $randomattributeHtml7 . '</dl></p>';
        }		
		
		
		$randomattributeHtml8 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+8$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml8 .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($randomattributeHtml8)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob8"]/100) . '%<br><dl>' . $randomattributeHtml8 . '</dl></p>';
        }		
		
		$randomattributeHtml9 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+9$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml9 .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($randomattributeHtml9)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob9"]/100) . '%<br><dl>' . $randomattributeHtml9 . '</dl></p>';
        }		
		
		$randomattributeHtml10 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+10$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml10 .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($randomattributeHtml10)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob10"]/100) . '%<br><dl>' . $randomattributeHtml10 . '</dl></p>';
        }

		
		
		
		$randomattributeHtml11 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+11$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml11 .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($randomattributeHtml11)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob11"]/100) . '%<br><dl>' . $randomattributeHtml11 . '</dl></p>';
        }
		
		
		$randomattributeHtml12 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+12$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml12 .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($randomattributeHtml12)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob12"]/100) . '%<br><dl>' . $randomattributeHtml12 . '</dl></p>';
        }
		
		$randomattributeHtml13 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+13$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml13 .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($randomattributeHtml13)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob13"]/100) . '%<br><dl>' . $randomattributeHtml13 . '</dl></p>';
        }
		
		$randomattributeHtml14 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+14$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml14 .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($randomattributeHtml14)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob14"]/100) . '%<br><dl>' . $randomattributeHtml14 . '</dl></p>';
        }
		
		$randomattributeHtml15 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+15$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml15 .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($randomattributeHtml15)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob15"]/100) . '%<br><dl>' . $randomattributeHtml15 . '</dl></p>';
        }
		
		$randomattributeHtml16 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+16$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml16 .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($randomattributeHtml16)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob16"]/100) . '%<br><dl>' . $randomattributeHtml16 . '</dl></p>';
        }
		
		$randomattributeHtml17 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+17$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml17 .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($randomattributeHtml17)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob17"]/100) . '%<br><dl>' . $randomattributeHtml17 . '</dl></p>';
        }
		
		$randomattributeHtml18 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+18$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml18 .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($randomattributeHtml18)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob18"]/100) . '%<br><dl>' . $randomattributeHtml18 . '</dl></p>';
        }
		
		$randomattributeHtml19 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+19$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml19 .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($randomattributeHtml19)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob19"]/100) . '%<br><dl>' . $randomattributeHtml19 . '</dl></p>';
        }
		
		
		$randomattributeHtml20 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+20$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml20 .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($randomattributeHtml20)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob20"]/100) . '%<br><dl>' . $randomattributeHtml20 . '</dl></p>';
        }
		
		$randomattributeHtml21 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+21$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml21 .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($randomattributeHtml21)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob21"]/100) . '%<br><dl>' . $randomattributeHtml21 . '</dl></p>';
        }
		
		$randomattributeHtml22 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+22$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml22 .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($randomattributeHtml22)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob22"]/100) . '%<br><dl>' . $randomattributeHtml22 . '</dl></p>';
        }
		
		$randomattributeHtml23 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+23$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml23 .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($randomattributeHtml23)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob23"]/100) . '%<br><dl>' . $randomattributeHtml23 . '</dl></p>';
        }
		
		$randomattributeHtml24 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+24$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml24 .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($randomattributeHtml24)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob24"]/100) . '%<br><dl>' . $randomattributeHtml24 . '</dl></p>';
        }
		
		$randomattributeHtml25 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+25$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml25 .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($randomattributeHtml25)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob25"]/100) . '%<br><dl>' . $randomattributeHtml25 . '</dl></p>';
        }
		
		$randomattributeHtml26 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+26$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml26 .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($randomattributeHtml26)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob26"]/100) . '%<br><dl>' . $randomattributeHtml26 . '</dl></p>';
        }
		
		$randomattributeHtml27 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+27$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml27 .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($randomattributeHtml27)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob27"]/100) . '%<br><dl>' . $randomattributeHtml27 . '</dl></p>';
        }
		
		$randomattributeHtml28 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+28$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml28 .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($randomattributeHtml28)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob28"]/100) . '%<br><dl>' . $randomattributeHtml28 . '</dl></p>';
        }
		
		$randomattributeHtml29 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+29$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml29 .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($randomattributeHtml29)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob29"]/100) . '%<br><dl>' . $randomattributeHtml29 . '</dl></p>';
        }
		
		$randomattributeHtml30 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+30$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml30 .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($randomattributeHtml30)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob30"]/100) . '%<br><dl>' . $randomattributeHtml30 . '</dl></p>';
        }
		
		$randomattributeHtml31 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+31$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml31 .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($randomattributeHtml31)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob31"]/100) . '%<br><dl>' . $randomattributeHtml31 . '</dl></p>';
        }
		
		$randomattributeHtml32 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+32$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml32 .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($randomattributeHtml32)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob32"]/100) . '%<br><dl>' . $randomattributeHtml32 . '</dl></p>';
        }
		
		$randomattributeHtml33 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+33$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml33 .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($randomattributeHtml33)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob33"]/100) . '%<br><dl>' . $randomattributeHtml33 . '</dl></p>';
        }
		
		$randomattributeHtml34 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+34$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml34 .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($randomattributeHtml34)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob34"]/100) . '%<br><dl>' . $randomattributeHtml34 . '</dl></p>';
        }
		
		$randomattributeHtml35 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+35$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml35 .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($randomattributeHtml35)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob35"]/100) . '%<br><dl>' . $randomattributeHtml35 . '</dl></p>';
        }

	}
	
	$randomStats .= '</div> </div>';
			

	
	
	$randomStatsfixed = strtr($randomStats, array(
		"+-" => '-',
		));
	
	return $randomStatsfixed;
}

function rideStats($name, $type)
{
$servername = "mysqlhost";
$username = "login2";
$password = "passw";
$dbname = "login";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
mysqli_set_charset($conn,"utf8");	


$sql = "
SELECT *
FROM ride
WHERE name = '$name'
";

    $query=mysqli_query($conn, $sql) or die(mysqli_error());
    while ($result = mysqli_fetch_assoc($query)) {
	$stat = $result[$type];
	}
	
	return $stat;
}


include 'include/RealrandomStats.php';
include 'include/TitleStats.php';


function descriptionSkill($name, $activation_level, $description, $language)
{
$servername = "mysqlhost";
$username = "login2";
$password = "passw";
$dbname = "login";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
mysqli_set_charset($conn,"utf8");	
	
$sql = "
SELECT *
FROM client_skills_eu
WHERE name = '$name'
";


    $query=mysqli_query($conn, $sql) or die(mysqli_error());
    while ($result = mysqli_fetch_assoc($query)) {
	
		if (strtolower($result["effect1_reserved13"]) == 'maxhp') {
			$foodstat1 = translate('STR_HP', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'phyattack') {
			$foodstat1 = translate('STR_TOOLTIP_SKILL_STAT_PHYATTACK', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'critical') {
			$foodstat1 = translate('STR_CRITICAL', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'hitaccuracy') {
			$foodstat1 = translate('STR_TOOLTIP_SKILL_STAT_HITACCURACY', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'maxmp') {
			$foodstat1 = translate('STR_MP', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'dodge') {
			$foodstat1 = translate('STR_DODGE', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'maxfp') {
			$foodstat1 = translate('STR_TOOLTIP_FLY_TIME', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'flyspeed') {
			$foodstat1 = translate('STR_TOOLTIP_RIDE_FLY_SPEED', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'hpregen') {
			$foodstat1 = translate('STR_TOOLTIP_SKILL_STAT_HPREGEN', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'mpregen') {
			$foodstat1 = translate('STR_TOOLTIP_SKILL_STAT_MPREGEN', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'magicalhitaccuracy') {
			$foodstat1 = translate('STR_MAGICAL_HIT_ACCURACY', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'magicalresist') {
			$foodstat1 = translate('STR_MAGIC_DEFENSE', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'magicalskillboost') {
			$foodstat1 = translate('STR_MAGICAL_SKILL_BOOST', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'speed') {
			$foodstat1 = translate('STR_TOOLTIP_SKILL_STAT_SPEED', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'magicalskillboostresist') {
			$foodstat1 = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_SKILL_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'attackdelay') {
			$foodstat1 = translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'elementaldefendall') {
			$foodstat1 = translate('STR_TOOLTIP_SKILL_STAT_ED_ALL', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'magicalcriticalreducerate') {
			$foodstat1 = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'elementaldefendair') {
			$foodstat1 = translate('STR_TOOLTIP_SKILL_STAT_ED_AIR', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'magicalcritical') {
			$foodstat1 = translate('STR_TOOLTIP_SKILL_STAT_MAGCRITICAL', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'physicalcriticalreducerate') {
			$foodstat1 = translate('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'boostcastingtime') {
			$foodstat1 = translate('STR_BOOSTCASTINGTIME', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'elementaldefendwater') {
			$foodstat1 = translate('STR_TOOLTIP_SKILL_STAT_ED_WATER', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'elementaldefendearth') {
			$foodstat1 = translate('STR_TOOLTIP_SKILL_STAT_ED_EARTH', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'elementaldefendfire') {
			$foodstat1 = translate('STR_TOOLTIP_SKILL_STAT_ED_FIRE', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'healskillboost') {
			$foodstat1 = translate('STR_TOOLTIP_SKILL_STAT_HEAL_BOOST', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'physicalpowerboost') {
			$foodstat1 = translate('STR_PHYSICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'magicalpowerboost') {
			$foodstat1 = translate('STR_MAGICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'physicalpowerboostresist') {
			$foodstat1 = translate('STR_PHYSICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'magicalpowerboostresist') {
			$foodstat1 = translate('STR_MAGICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect1_reserved11"]) == 'parry') {
			$foodstat1 = translate('STR_PARRY', $language);
		}elseif (strtolower($result["effect1_reserved11"]) == 'block') {
			$foodstat1 = translate('STR_BLOCK', $language);
		}else {
			$foodstat1 = '[Unknown - Please, Report. ' . $result["effect1_reserved13"] . ']';
		}
		
		
		if (strtolower($result["effect1_reserved14"]) == 'maxhp') {
			$foodstat1b = translate('STR_HP', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'phyattack') {
			$foodstat1b = translate('STR_TOOLTIP_SKILL_STAT_PHYATTACK', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'critical') {
			$foodstat1b = translate('STR_CRITICAL', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'hitaccuracy') {
			$foodstat1b = translate('STR_TOOLTIP_SKILL_STAT_HITACCURACY', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'maxmp') {
			$foodstat1b = translate('STR_MP', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'dodge') {
			$foodstat1b = translate('STR_DODGE', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'maxfp') {
			$foodstat1b = translate('STR_TOOLTIP_FLY_TIME', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'flyspeed') {
			$foodstat1b = translate('STR_TOOLTIP_RIDE_FLY_SPEED', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'hpregen') {
			$foodstat1b = translate('STR_TOOLTIP_SKILL_STAT_HPREGEN', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'mpregen') {
			$foodstat1b = translate('STR_TOOLTIP_SKILL_STAT_MPREGEN', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'magicalhitaccuracy') {
			$foodstat1b = translate('STR_MAGICAL_HIT_ACCURACY', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'magicalresist') {
			$foodstat1b = translate('STR_MAGIC_DEFENSE', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'magicalskillboost') {
			$foodstat1b = translate('STR_MAGICAL_SKILL_BOOST', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'speed') {
			$foodstat1b = translate('STR_TOOLTIP_SKILL_STAT_SPEED', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'magicalskillboostresist') {
			$foodstat1b = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_SKILL_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'attackdelay') {
			$foodstat1b = translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'elementaldefendall') {
			$foodstat1b = translate('STR_TOOLTIP_SKILL_STAT_ED_ALL', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'magicalcriticalreducerate') {
			$foodstat1b = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'elementaldefendair') {
			$foodstat1b = translate('STR_TOOLTIP_SKILL_STAT_ED_AIR', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'magicalcritical') {
			$foodstat1b = translate('STR_TOOLTIP_SKILL_STAT_MAGCRITICAL', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'physicalcriticalreducerate') {
			$foodstat1b = translate('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'boostcastingtime') {
			$foodstat1b = translate('STR_BOOSTCASTINGTIME', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'elementaldefendwater') {
			$foodstat1b = translate('STR_TOOLTIP_SKILL_STAT_ED_WATER', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'elementaldefendearth') {
			$foodstat1b = translate('STR_TOOLTIP_SKILL_STAT_ED_EARTH', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'elementaldefendfire') {
			$foodstat1b = translate('STR_TOOLTIP_SKILL_STAT_ED_FIRE', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'healskillboost') {
			$foodstat1b = translate('STR_TOOLTIP_SKILL_STAT_HEAL_BOOST', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'physicalpowerboost') {
			$foodstat1b = translate('STR_PHYSICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'magicalpowerboost') {
			$foodstat1b = translate('STR_MAGICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'physicalpowerboostresist') {
			$foodstat1b = translate('STR_PHYSICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'magicalpowerboostresist') {
			$foodstat1b = translate('STR_MAGICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect1_reserved11"]) == 'parry') {
			$foodstat1b = translate('STR_PARRY', $language);
		}elseif (strtolower($result["effect1_reserved11"]) == 'block') {
			$foodstat1b = translate('STR_BLOCK', $language);
		}else {
			$foodstat1b = '[Unknown - Please, Report. ' . $result["effect1_reserved14"] . ']';
		}
		
		
		if (strtolower($result["effect1_reserved18"]) == 'maxhp') {
			$foodstat1c = translate('STR_HP', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'phyattack') {
			$foodstat1c = translate('STR_TOOLTIP_SKILL_STAT_PHYATTACK', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'critical') {
			$foodstat1c = translate('STR_CRITICAL', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'hitaccuracy') {
			$foodstat1c = translate('STR_TOOLTIP_SKILL_STAT_HITACCURACY', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'maxmp') {
			$foodstat1c = translate('STR_MP', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'dodge') {
			$foodstat1c = translate('STR_DODGE', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'maxfp') {
			$foodstat1c = translate('STR_TOOLTIP_FLY_TIME', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'flyspeed') {
			$foodstat1c = translate('STR_TOOLTIP_RIDE_FLY_SPEED', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'hpregen') {
			$foodstat1c = translate('STR_TOOLTIP_SKILL_STAT_HPREGEN', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'mpregen') {
			$foodstat1c = translate('STR_TOOLTIP_SKILL_STAT_MPREGEN', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'magicalhitaccuracy') {
			$foodstat1c = translate('STR_MAGICAL_HIT_ACCURACY', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'magicalresist') {
			$foodstat1c = translate('STR_MAGIC_DEFENSE', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'magicalskillboost') {
			$foodstat1c = translate('STR_MAGICAL_SKILL_BOOST', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'speed') {
			$foodstat1c = translate('STR_TOOLTIP_SKILL_STAT_SPEED', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'magicalskillboostresist') {
			$foodstat1c = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_SKILL_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'attackdelay') {
			$foodstat1c = translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'elementaldefendall') {
			$foodstat1c = translate('STR_TOOLTIP_SKILL_STAT_ED_ALL', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'magicalcriticalreducerate') {
			$foodstat1c = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'elementaldefendair') {
			$foodstat1c = translate('STR_TOOLTIP_SKILL_STAT_ED_AIR', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'magicalcritical') {
			$foodstat1c = translate('STR_TOOLTIP_SKILL_STAT_MAGCRITICAL', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'physicalcriticalreducerate') {
			$foodstat1c = translate('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'boostcastingtime') {
			$foodstat1c = translate('STR_BOOSTCASTINGTIME', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'elementaldefendwater') {
			$foodstat1c = translate('STR_TOOLTIP_SKILL_STAT_ED_WATER', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'elementaldefendearth') {
			$foodstat1c = translate('STR_TOOLTIP_SKILL_STAT_ED_EARTH', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'elementaldefendfire') {
			$foodstat1c = translate('STR_TOOLTIP_SKILL_STAT_ED_FIRE', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'healskillboost') {
			$foodstat1c = translate('STR_TOOLTIP_SKILL_STAT_HEAL_BOOST', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'physicalpowerboost') {
			$foodstat1c = translate('STR_PHYSICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'magicalpowerboost') {
			$foodstat1c = translate('STR_MAGICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'physicalpowerboostresist') {
			$foodstat1c = translate('STR_PHYSICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'magicalpowerboostresist') {
			$foodstat1c = translate('STR_MAGICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'parry') {
			$foodstat1c = translate('STR_PARRY', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'block') {
			$foodstat1c = translate('STR_BLOCK', $language);
		}else {
			$foodstat1c = '[Unknown - Please, Report. ' . $result["effect1_reserved18"] . ']';
		}
		
		
		if (strtolower($result["effect1_reserved22"]) == 'maxhp') {
			$foodstat1d = translate('STR_HP', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'phyattack') {
			$foodstat1d = translate('STR_TOOLTIP_SKILL_STAT_PHYATTACK', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'critical') {
			$foodstat1d = translate('STR_CRITICAL', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'hitaccuracy') {
			$foodstat1d = translate('STR_TOOLTIP_SKILL_STAT_HITACCURACY', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'maxmp') {
			$foodstat1d = translate('STR_MP', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'dodge') {
			$foodstat1d = translate('STR_DODGE', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'maxfp') {
			$foodstat1d = translate('STR_TOOLTIP_FLY_TIME', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'flyspeed') {
			$foodstat1d = translate('STR_TOOLTIP_RIDE_FLY_SPEED', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'hpregen') {
			$foodstat1d = translate('STR_TOOLTIP_SKILL_STAT_HPREGEN', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'mpregen') {
			$foodstat1d = translate('STR_TOOLTIP_SKILL_STAT_MPREGEN', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'magicalhitaccuracy') {
			$foodstat1d = translate('STR_MAGICAL_HIT_ACCURACY', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'magicalresist') {
			$foodstat1d = translate('STR_MAGIC_DEFENSE', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'magicalskillboost') {
			$foodstat1d = translate('STR_MAGICAL_SKILL_BOOST', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'speed') {
			$foodstat1d = translate('STR_TOOLTIP_SKILL_STAT_SPEED', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'magicalskillboostresist') {
			$foodstat1d = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_SKILL_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'attackdelay') {
			$foodstat1d = translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'elementaldefendall') {
			$foodstat1d = translate('STR_TOOLTIP_SKILL_STAT_ED_ALL', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'magicalcriticalreducerate') {
			$foodstat1d = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'elementaldefendair') {
			$foodstat1d = translate('STR_TOOLTIP_SKILL_STAT_ED_AIR', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'magicalcritical') {
			$foodstat1d = translate('STR_TOOLTIP_SKILL_STAT_MAGCRITICAL', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'physicalcriticalreducerate') {
			$foodstat1d = translate('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'boostcastingtime') {
			$foodstat1d = translate('STR_BOOSTCASTINGTIME', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'elementaldefendwater') {
			$foodstat1d = translate('STR_TOOLTIP_SKILL_STAT_ED_WATER', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'elementaldefendearth') {
			$foodstat1d = translate('STR_TOOLTIP_SKILL_STAT_ED_EARTH', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'elementaldefendfire') {
			$foodstat1d = translate('STR_TOOLTIP_SKILL_STAT_ED_FIRE', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'healskillboost') {
			$foodstat1d = translate('STR_TOOLTIP_SKILL_STAT_HEAL_BOOST', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'physicalpowerboost') {
			$foodstat1d = translate('STR_PHYSICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'magicalpowerboost') {
			$foodstat1d = translate('STR_MAGICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'physicalpowerboostresist') {
			$foodstat1d = translate('STR_PHYSICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'magicalpowerboostresist') {
			$foodstat1d = translate('STR_MAGICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect1_reserved11"]) == 'parry') {
			$foodstat1d = translate('STR_PARRY', $language);
		}elseif (strtolower($result["effect1_reserved11"]) == 'block') {
			$foodstat1d = translate('STR_BLOCK', $language);
		}else {
			$foodstat1d = '[Unknown - Please, Report. ' . $result["effect1_reserved22"] . ']';
		}
		
		
		if (strtolower($result["effect2_reserved13"]) == 'maxhp') {
			$foodstat2 = translate('STR_HP', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'phyattack') {
			$foodstat2 = translate('STR_TOOLTIP_SKILL_STAT_PHYATTACK', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'critical') {
			$foodstat2 = translate('STR_CRITICAL', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'hitaccuracy') {
			$foodstat2 = translate('STR_TOOLTIP_SKILL_STAT_HITACCURACY', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'maxmp') {
			$foodstat2 = translate('STR_MP', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'dodge') {
			$foodstat2 = translate('STR_DODGE', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'maxfp') {
			$foodstat2 = translate('STR_TOOLTIP_FLY_TIME', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'flyspeed') {
			$foodstat2 = translate('STR_TOOLTIP_RIDE_FLY_SPEED', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'hpregen') {
			$foodstat2 = translate('STR_TOOLTIP_SKILL_STAT_HPREGEN', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'mpregen') {
			$foodstat2 = translate('STR_TOOLTIP_SKILL_STAT_MPREGEN', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'magicalhitaccuracy') {
			$foodstat2 = translate('STR_MAGICAL_HIT_ACCURACY', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'magicalresist') {
			$foodstat2 = translate('STR_MAGIC_DEFENSE', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'magicalskillboost') {
			$foodstat2 = translate('STR_MAGICAL_SKILL_BOOST', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'speed') {
			$foodstat2 = translate('STR_TOOLTIP_SKILL_STAT_SPEED', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'magicalskillboostresist') {
			$foodstat2 = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_SKILL_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'attackdelay') {
			$foodstat2 = translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'elementaldefendall') {
			$foodstat2 = translate('STR_TOOLTIP_SKILL_STAT_ED_ALL', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'magicalcriticalreducerate') {
			$foodstat2 = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'elementaldefendair') {
			$foodstat2 = translate('STR_TOOLTIP_SKILL_STAT_ED_AIR', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'magicalcritical') {
			$foodstat2 = translate('STR_TOOLTIP_SKILL_STAT_MAGCRITICAL', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'physicalcriticalreducerate') {
			$foodstat2 = translate('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'boostcastingtime') {
			$foodstat2 = translate('STR_BOOSTCASTINGTIME', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'elementaldefendwater') {
			$foodstat2 = translate('STR_TOOLTIP_SKILL_STAT_ED_WATER', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'elementaldefendearth') {
			$foodstat2 = translate('STR_TOOLTIP_SKILL_STAT_ED_EARTH', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'elementaldefendfire') {
			$foodstat2 = translate('STR_TOOLTIP_SKILL_STAT_ED_FIRE', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'healskillboost') {
			$foodstat2 = translate('STR_TOOLTIP_SKILL_STAT_HEAL_BOOST', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'physicalpowerboost') {
			$foodstat2 = translate('STR_PHYSICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'magicalpowerboost') {
			$foodstat2 = translate('STR_MAGICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'physicalpowerboostresist') {
			$foodstat2 = translate('STR_PHYSICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'magicalpowerboostresist') {
			$foodstat2 = translate('STR_MAGICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect2_reserved12"]) == 'parry') {
			$foodstat2 = translate('STR_PARRY', $language);
		}elseif (strtolower($result["effect2_reserved12"]) == 'block') {
			$foodstat2 = translate('STR_BLOCK', $language);
		}else {
			$foodstat2 = '[Unknown - Please, Report. ' . $result["effect2_reserved13"] . ']';
		}
		
		
		if (strtolower($result["effect2_reserved14"]) == 'maxhp') {
			$foodstat2b = translate('STR_HP', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'phyattack') {
			$foodstat2b = translate('STR_TOOLTIP_SKILL_STAT_PHYATTACK', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'critical') {
			$foodstat2b = translate('STR_CRITICAL', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'hitaccuracy') {
			$foodstat2b = translate('STR_TOOLTIP_SKILL_STAT_HITACCURACY', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'maxmp') {
			$foodstat2b = translate('STR_MP', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'dodge') {
			$foodstat2b = translate('STR_DODGE', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'maxfp') {
			$foodstat2b = translate('STR_TOOLTIP_FLY_TIME', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'flyspeed') {
			$foodstat2b = translate('STR_TOOLTIP_RIDE_FLY_SPEED', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'hpregen') {
			$foodstat2b = translate('STR_TOOLTIP_SKILL_STAT_HPREGEN', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'mpregen') {
			$foodstat2b = translate('STR_TOOLTIP_SKILL_STAT_MPREGEN', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'magicalhitaccuracy') {
			$foodstat2b = translate('STR_MAGICAL_HIT_ACCURACY', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'magicalresist') {
			$foodstat2b = translate('STR_MAGIC_DEFENSE', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'magicalskillboost') {
			$foodstat2b = translate('STR_MAGICAL_SKILL_BOOST', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'speed') {
			$foodstat2b = translate('STR_TOOLTIP_SKILL_STAT_SPEED', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'magicalskillboostresist') {
			$foodstat2b = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_SKILL_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'attackdelay') {
			$foodstat2b = translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'elementaldefendall') {
			$foodstat2b = translate('STR_TOOLTIP_SKILL_STAT_ED_ALL', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'magicalcriticalreducerate') {
			$foodstat2b = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'elementaldefendair') {
			$foodstat2b = translate('STR_TOOLTIP_SKILL_STAT_ED_AIR', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'magicalcritical') {
			$foodstat2b = translate('STR_TOOLTIP_SKILL_STAT_MAGCRITICAL', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'physicalcriticalreducerate') {
			$foodstat2b = translate('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'boostcastingtime') {
			$foodstat2b = translate('STR_BOOSTCASTINGTIME', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'elementaldefendwater') {
			$foodstat2b = translate('STR_TOOLTIP_SKILL_STAT_ED_WATER', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'elementaldefendearth') {
			$foodstat2b = translate('STR_TOOLTIP_SKILL_STAT_ED_EARTH', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'elementaldefendfire') {
			$foodstat2b = translate('STR_TOOLTIP_SKILL_STAT_ED_FIRE', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'healskillboost') {
			$foodstat2b = translate('STR_TOOLTIP_SKILL_STAT_HEAL_BOOST', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'physicalpowerboost') {
			$foodstat2b = translate('STR_PHYSICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'magicalpowerboost') {
			$foodstat2b = translate('STR_MAGICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'physicalpowerboostresist') {
			$foodstat2b = translate('STR_PHYSICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'magicalpowerboostresist') {
			$foodstat2b = translate('STR_MAGICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect2_reserved12"]) == 'parry') {
			$foodstat2b = translate('STR_PARRY', $language);
		}elseif (strtolower($result["effect2_reserved12"]) == 'block') {
			$foodstat2b = translate('STR_BLOCK', $language);
		}else {
			$foodstat2b = '[Unknown - Please, Report. ' . $result["effect2_reserved14"] . ']';
		}
		
		
		if (strtolower($result["effect2_reserved18"]) == 'maxhp') {
			$foodstat2c = translate('STR_HP', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'phyattack') {
			$foodstat2c = translate('STR_TOOLTIP_SKILL_STAT_PHYATTACK', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'critical') {
			$foodstat2c = translate('STR_CRITICAL', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'hitaccuracy') {
			$foodstat2c = translate('STR_TOOLTIP_SKILL_STAT_HITACCURACY', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'maxmp') {
			$foodstat2c = translate('STR_MP', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'dodge') {
			$foodstat2c = translate('STR_DODGE', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'maxfp') {
			$foodstat2c = translate('STR_TOOLTIP_FLY_TIME', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'flyspeed') {
			$foodstat2c = translate('STR_TOOLTIP_RIDE_FLY_SPEED', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'hpregen') {
			$foodstat2c = translate('STR_TOOLTIP_SKILL_STAT_HPREGEN', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'mpregen') {
			$foodstat2c = translate('STR_TOOLTIP_SKILL_STAT_MPREGEN', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'magicalhitaccuracy') {
			$foodstat2c = translate('STR_MAGICAL_HIT_ACCURACY', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'magicalresist') {
			$foodstat2c = translate('STR_MAGIC_DEFENSE', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'magicalskillboost') {
			$foodstat2c = translate('STR_MAGICAL_SKILL_BOOST', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'speed') {
			$foodstat2c = translate('STR_TOOLTIP_SKILL_STAT_SPEED', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'magicalskillboostresist') {
			$foodstat2c = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_SKILL_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'attackdelay') {
			$foodstat2c = translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'elementaldefendall') {
			$foodstat2c = translate('STR_TOOLTIP_SKILL_STAT_ED_ALL', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'magicalcriticalreducerate') {
			$foodstat2c = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'elementaldefendair') {
			$foodstat2c = translate('STR_TOOLTIP_SKILL_STAT_ED_AIR', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'magicalcritical') {
			$foodstat2c = translate('STR_TOOLTIP_SKILL_STAT_MAGCRITICAL', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'physicalcriticalreducerate') {
			$foodstat2c = translate('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'boostcastingtime') {
			$foodstat2c = translate('STR_BOOSTCASTINGTIME', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'elementaldefendwater') {
			$foodstat2c = translate('STR_TOOLTIP_SKILL_STAT_ED_WATER', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'elementaldefendearth') {
			$foodstat2c = translate('STR_TOOLTIP_SKILL_STAT_ED_EARTH', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'elementaldefendfire') {
			$foodstat2c = translate('STR_TOOLTIP_SKILL_STAT_ED_FIRE', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'healskillboost') {
			$foodstat2c = translate('STR_TOOLTIP_SKILL_STAT_HEAL_BOOST', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'physicalpowerboost') {
			$foodstat2c = translate('STR_PHYSICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'magicalpowerboost') {
			$foodstat2c = translate('STR_MAGICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'physicalpowerboostresist') {
			$foodstat2c = translate('STR_PHYSICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'magicalpowerboostresist') {
			$foodstat2c = translate('STR_MAGICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'parry') {
			$foodstat2c = translate('STR_PARRY', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'block') {
			$foodstat2c = translate('STR_BLOCK', $language);
		}else {
			$foodstat2c = '[Unknown - Please, Report. ' . $result["effect2_reserved18"] . ']';
		}
		
		
		if (strtolower($result["effect2_reserved22"]) == 'maxhp') {
			$foodstat2d = translate('STR_HP', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'phyattack') {
			$foodstat2d = translate('STR_TOOLTIP_SKILL_STAT_PHYATTACK', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'critical') {
			$foodstat2d = translate('STR_CRITICAL', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'hitaccuracy') {
			$foodstat2d = translate('STR_TOOLTIP_SKILL_STAT_HITACCURACY', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'maxmp') {
			$foodstat2d = translate('STR_MP', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'dodge') {
			$foodstat2d = translate('STR_DODGE', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'maxfp') {
			$foodstat2d = translate('STR_TOOLTIP_FLY_TIME', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'flyspeed') {
			$foodstat2d = translate('STR_TOOLTIP_RIDE_FLY_SPEED', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'hpregen') {
			$foodstat2d = translate('STR_TOOLTIP_SKILL_STAT_HPREGEN', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'mpregen') {
			$foodstat2d = translate('STR_TOOLTIP_SKILL_STAT_MPREGEN', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'magicalhitaccuracy') {
			$foodstat2d = translate('STR_MAGICAL_HIT_ACCURACY', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'magicalresist') {
			$foodstat2d = translate('STR_MAGIC_DEFENSE', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'magicalskillboost') {
			$foodstat2d = translate('STR_MAGICAL_SKILL_BOOST', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'speed') {
			$foodstat2d = translate('STR_TOOLTIP_SKILL_STAT_SPEED', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'magicalskillboostresist') {
			$foodstat2d = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_SKILL_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'attackdelay') {
			$foodstat2d = translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'elementaldefendall') {
			$foodstat2d = translate('STR_TOOLTIP_SKILL_STAT_ED_ALL', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'magicalcriticalreducerate') {
			$foodstat2d = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'elementaldefendair') {
			$foodstat2d = translate('STR_TOOLTIP_SKILL_STAT_ED_AIR', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'magicalcritical') {
			$foodstat2d = translate('STR_TOOLTIP_SKILL_STAT_MAGCRITICAL', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'physicalcriticalreducerate') {
			$foodstat2d = translate('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'boostcastingtime') {
			$foodstat2d = translate('STR_BOOSTCASTINGTIME', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'elementaldefendwater') {
			$foodstat2d = translate('STR_TOOLTIP_SKILL_STAT_ED_WATER', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'elementaldefendearth') {
			$foodstat2d = translate('STR_TOOLTIP_SKILL_STAT_ED_EARTH', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'elementaldefendfire') {
			$foodstat2d = translate('STR_TOOLTIP_SKILL_STAT_ED_FIRE', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'healskillboost') {
			$foodstat2d = translate('STR_TOOLTIP_SKILL_STAT_HEAL_BOOST', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'physicalpowerboost') {
			$foodstat2d = translate('STR_PHYSICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'magicalpowerboost') {
			$foodstat2d = translate('STR_MAGICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'physicalpowerboostresist') {
			$foodstat2d = translate('STR_PHYSICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'magicalpowerboostresist') {
			$foodstat2d = translate('STR_MAGICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'parry') {
			$foodstat2d = translate('STR_PARRY', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'block') {
			$foodstat2d = translate('STR_BLOCK', $language);
		}else {
			$foodstat2d = '[Unknown - Please, Report. ' . $result["effect2_reserved22"] . ']';
		}
		
		
		if (strtolower($result["effect3_reserved13"]) == 'maxhp') {
			$foodstat3 = translate('STR_HP', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'phyattack') {
			$foodstat3 = translate('STR_TOOLTIP_SKILL_STAT_PHYATTACK', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'critical') {
			$foodstat3 = translate('STR_CRITICAL', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'hitaccuracy') {
			$foodstat3 = translate('STR_TOOLTIP_SKILL_STAT_HITACCURACY', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'maxmp') {
			$foodstat3 = translate('STR_MP', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'dodge') {
			$foodstat3 = translate('STR_DODGE', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'maxfp') {
			$foodstat3 = translate('STR_TOOLTIP_FLY_TIME', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'flyspeed') {
			$foodstat3 = translate('STR_TOOLTIP_RIDE_FLY_SPEED', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'hpregen') {
			$foodstat3 = translate('STR_TOOLTIP_SKILL_STAT_HPREGEN', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'mpregen') {
			$foodstat3 = translate('STR_TOOLTIP_SKILL_STAT_MPREGEN', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'magicalhitaccuracy') {
			$foodstat3 = translate('STR_MAGICAL_HIT_ACCURACY', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'magicalresist') {
			$foodstat3 = translate('STR_MAGIC_DEFENSE', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'magicalskillboost') {
			$foodstat3 = translate('STR_MAGICAL_SKILL_BOOST', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'speed') {
			$foodstat3 = translate('STR_TOOLTIP_SKILL_STAT_SPEED', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'magicalskillboostresist') {
			$foodstat3 = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_SKILL_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'attackdelay') {
			$foodstat3 = translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'elementaldefendall') {
			$foodstat3 = translate('STR_TOOLTIP_SKILL_STAT_ED_ALL', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'magicalcriticalreducerate') {
			$foodstat3 = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'elementaldefendair') {
			$foodstat3 = translate('STR_TOOLTIP_SKILL_STAT_ED_AIR', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'magicalcritical') {
			$foodstat3 = translate('STR_TOOLTIP_SKILL_STAT_MAGCRITICAL', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'physicalcriticalreducerate') {
			$foodstat3 = translate('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'boostcastingtime') {
			$foodstat3 = translate('STR_BOOSTCASTINGTIME', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'elementaldefendwater') {
			$foodstat3 = translate('STR_TOOLTIP_SKILL_STAT_ED_WATER', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'elementaldefendearth') {
			$foodstat3 = translate('STR_TOOLTIP_SKILL_STAT_ED_EARTH', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'elementaldefendfire') {
			$foodstat3 = translate('STR_TOOLTIP_SKILL_STAT_ED_FIRE', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'healskillboost') {
			$foodstat3 = translate('STR_TOOLTIP_SKILL_STAT_HEAL_BOOST', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'physicalpowerboost') {
			$foodstat3 = translate('STR_PHYSICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'magicalpowerboost') {
			$foodstat3 = translate('STR_MAGICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'physicalpowerboostresist') {
			$foodstat3 = translate('STR_PHYSICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'magicalpowerboostresist') {
			$foodstat3 = translate('STR_MAGICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'parry') {
			$foodstat3 = translate('STR_PARRY', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'block') {
			$foodstat3 = translate('STR_BLOCK', $language);
		}else {
			$foodstat3 = '[Unknown - Please, Report. ' . $result["effect3_reserved13"] . ']';
		}
		
		
		if (strtolower($result["effect3_reserved14"]) == 'maxhp') {
			$foodstat3b = translate('STR_HP', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'phyattack') {
			$foodstat3b = translate('STR_TOOLTIP_SKILL_STAT_PHYATTACK', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'critical') {
			$foodstat3b = translate('STR_CRITICAL', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'hitaccuracy') {
			$foodstat3b = translate('STR_TOOLTIP_SKILL_STAT_HITACCURACY', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'maxmp') {
			$foodstat3b = translate('STR_MP', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'dodge') {
			$foodstat3b = translate('STR_DODGE', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'maxfp') {
			$foodstat3b = translate('STR_TOOLTIP_FLY_TIME', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'flyspeed') {
			$foodstat3b = translate('STR_TOOLTIP_RIDE_FLY_SPEED', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'hpregen') {
			$foodstat3b = translate('STR_TOOLTIP_SKILL_STAT_HPREGEN', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'mpregen') {
			$foodstat3b = translate('STR_TOOLTIP_SKILL_STAT_MPREGEN', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'magicalhitaccuracy') {
			$foodstat3b = translate('STR_MAGICAL_HIT_ACCURACY', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'magicalresist') {
			$foodstat3b = translate('STR_MAGIC_DEFENSE', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'magicalskillboost') {
			$foodstat3b = translate('STR_MAGICAL_SKILL_BOOST', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'speed') {
			$foodstat3b = translate('STR_TOOLTIP_SKILL_STAT_SPEED', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'magicalskillboostresist') {
			$foodstat3b = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_SKILL_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'attackdelay') {
			$foodstat3b = translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'elementaldefendall') {
			$foodstat3b = translate('STR_TOOLTIP_SKILL_STAT_ED_ALL', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'magicalcriticalreducerate') {
			$foodstat3b = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'elementaldefendair') {
			$foodstat3b = translate('STR_TOOLTIP_SKILL_STAT_ED_AIR', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'magicalcritical') {
			$foodstat3b = translate('STR_TOOLTIP_SKILL_STAT_MAGCRITICAL', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'physicalcriticalreducerate') {
			$foodstat3b = translate('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'boostcastingtime') {
			$foodstat3b = translate('STR_BOOSTCASTINGTIME', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'elementaldefendwater') {
			$foodstat3b = translate('STR_TOOLTIP_SKILL_STAT_ED_WATER', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'elementaldefendearth') {
			$foodstat3b = translate('STR_TOOLTIP_SKILL_STAT_ED_EARTH', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'elementaldefendfire') {
			$foodstat3b = translate('STR_TOOLTIP_SKILL_STAT_ED_FIRE', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'healskillboost') {
			$foodstat3b = translate('STR_TOOLTIP_SKILL_STAT_HEAL_BOOST', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'physicalpowerboost') {
			$foodstat3b = translate('STR_PHYSICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'magicalpowerboost') {
			$foodstat3b = translate('STR_MAGICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'physicalpowerboostresist') {
			$foodstat3b = translate('STR_PHYSICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'magicalpowerboostresist') {
			$foodstat3b = translate('STR_MAGICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'parry') {
			$foodstat3b = translate('STR_PARRY', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'block') {
			$foodstat3b = translate('STR_BLOCK', $language);
		}else {
			$foodstat3b = '[Unknown - Please, Report. ' . $result["effect3_reserved14"] . ']';
		}
		
		
		if (strtolower($result["effect3_reserved18"]) == 'maxhp') {
			$foodstat3c = translate('STR_HP', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'phyattack') {
			$foodstat3c = translate('STR_TOOLTIP_SKILL_STAT_PHYATTACK', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'critical') {
			$foodstat3c = translate('STR_CRITICAL', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'hitaccuracy') {
			$foodstat3c = translate('STR_TOOLTIP_SKILL_STAT_HITACCURACY', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'maxmp') {
			$foodstat3c = translate('STR_MP', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'dodge') {
			$foodstat3c = translate('STR_DODGE', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'maxfp') {
			$foodstat3c = translate('STR_TOOLTIP_FLY_TIME', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'flyspeed') {
			$foodstat3c = translate('STR_TOOLTIP_RIDE_FLY_SPEED', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'hpregen') {
			$foodstat3c = translate('STR_TOOLTIP_SKILL_STAT_HPREGEN', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'mpregen') {
			$foodstat3c = translate('STR_TOOLTIP_SKILL_STAT_MPREGEN', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'magicalhitaccuracy') {
			$foodstat3c = translate('STR_MAGICAL_HIT_ACCURACY', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'magicalresist') {
			$foodstat3c = translate('STR_MAGIC_DEFENSE', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'magicalskillboost') {
			$foodstat3c = translate('STR_MAGICAL_SKILL_BOOST', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'speed') {
			$foodstat3c = translate('STR_TOOLTIP_SKILL_STAT_SPEED', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'magicalskillboostresist') {
			$foodstat3c = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_SKILL_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'attackdelay') {
			$foodstat3c = translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'elementaldefendall') {
			$foodstat3c = translate('STR_TOOLTIP_SKILL_STAT_ED_ALL', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'magicalcriticalreducerate') {
			$foodstat3c = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'elementaldefendair') {
			$foodstat3c = translate('STR_TOOLTIP_SKILL_STAT_ED_AIR', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'magicalcritical') {
			$foodstat3c = translate('STR_TOOLTIP_SKILL_STAT_MAGCRITICAL', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'physicalcriticalreducerate') {
			$foodstat3c = translate('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'boostcastingtime') {
			$foodstat3c = translate('STR_BOOSTCASTINGTIME', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'elementaldefendwater') {
			$foodstat3c = translate('STR_TOOLTIP_SKILL_STAT_ED_WATER', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'elementaldefendearth') {
			$foodstat3c = translate('STR_TOOLTIP_SKILL_STAT_ED_EARTH', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'elementaldefendfire') {
			$foodstat3c = translate('STR_TOOLTIP_SKILL_STAT_ED_FIRE', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'healskillboost') {
			$foodstat3c = translate('STR_TOOLTIP_SKILL_STAT_HEAL_BOOST', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'physicalpowerboost') {
			$foodstat3c = translate('STR_PHYSICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'magicalpowerboost') {
			$foodstat3c = translate('STR_MAGICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'physicalpowerboostresist') {
			$foodstat3c = translate('STR_PHYSICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'magicalpowerboostresist') {
			$foodstat3c = translate('STR_MAGICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'parry') {
			$foodstat3c = translate('STR_PARRY', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'block') {
			$foodstat3c = translate('STR_BLOCK', $language);
		}else {
			$foodstat3c = '[Unknown - Please, Report. ' . $result["effect3_reserved18"] . ']';
		}
		
		
		if (strtolower($result["effect3_reserved22"]) == 'maxhp') {
			$foodstat3d = translate('STR_HP', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'phyattack') {
			$foodstat3d = translate('STR_TOOLTIP_SKILL_STAT_PHYATTACK', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'critical') {
			$foodstat3d = translate('STR_CRITICAL', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'hitaccuracy') {
			$foodstat3d = translate('STR_TOOLTIP_SKILL_STAT_HITACCURACY', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'maxmp') {
			$foodstat3d = translate('STR_MP', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'dodge') {
			$foodstat3d = translate('STR_DODGE', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'maxfp') {
			$foodstat3d = translate('STR_TOOLTIP_FLY_TIME', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'flyspeed') {
			$foodstat3d = translate('STR_TOOLTIP_RIDE_FLY_SPEED', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'hpregen') {
			$foodstat3d = translate('STR_TOOLTIP_SKILL_STAT_HPREGEN', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'mpregen') {
			$foodstat3d = translate('STR_TOOLTIP_SKILL_STAT_MPREGEN', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'magicalhitaccuracy') {
			$foodstat3d = translate('STR_MAGICAL_HIT_ACCURACY', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'magicalresist') {
			$foodstat3d = translate('STR_MAGIC_DEFENSE', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'magicalskillboost') {
			$foodstat3d = translate('STR_MAGICAL_SKILL_BOOST', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'speed') {
			$foodstat3d = translate('STR_TOOLTIP_SKILL_STAT_SPEED', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'magicalskillboostresist') {
			$foodstat3d = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_SKILL_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'attackdelay') {
			$foodstat3d = translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'elementaldefendall') {
			$foodstat3d = translate('STR_TOOLTIP_SKILL_STAT_ED_ALL', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'magicalcriticalreducerate') {
			$foodstat3d = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'elementaldefendair') {
			$foodstat3d = translate('STR_TOOLTIP_SKILL_STAT_ED_AIR', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'magicalcritical') {
			$foodstat3d = translate('STR_TOOLTIP_SKILL_STAT_MAGCRITICAL', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'physicalcriticalreducerate') {
			$foodstat3d = translate('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'boostcastingtime') {
			$foodstat3d = translate('STR_BOOSTCASTINGTIME', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'elementaldefendwater') {
			$foodstat3d = translate('STR_TOOLTIP_SKILL_STAT_ED_WATER', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'elementaldefendearth') {
			$foodstat3d = translate('STR_TOOLTIP_SKILL_STAT_ED_EARTH', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'elementaldefendfire') {
			$foodstat3d = translate('STR_TOOLTIP_SKILL_STAT_ED_FIRE', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'healskillboost') {
			$foodstat3d = translate('STR_TOOLTIP_SKILL_STAT_HEAL_BOOST', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'physicalpowerboost') {
			$foodstat3d = translate('STR_PHYSICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'magicalpowerboost') {
			$foodstat3d = translate('STR_MAGICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'physicalpowerboostresist') {
			$foodstat3d = translate('STR_PHYSICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'magicalpowerboostresist') {
			$foodstat3d = translate('STR_MAGICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'parry') {
			$foodstat3d = translate('STR_PARRY', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'block') {
			$foodstat3d = translate('STR_BLOCK', $language);
		}else {
			$foodstat3d = '[Unknown - Please, Report. ' . $result["effect3_reserved22"] . ']';
		}
		
		
		if (strtolower($result["effect4_reserved13"]) == 'maxhp') {
			$foodstat4 = translate('STR_HP', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'phyattack') {
			$foodstat4 = translate('STR_TOOLTIP_SKILL_STAT_PHYATTACK', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'critical') {
			$foodstat4 = translate('STR_CRITICAL', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'hitaccuracy') {
			$foodstat4 = translate('STR_TOOLTIP_SKILL_STAT_HITACCURACY', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'maxmp') {
			$foodstat4 = translate('STR_MP', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'dodge') {
			$foodstat4 = translate('STR_DODGE', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'maxfp') {
			$foodstat4 = translate('STR_TOOLTIP_FLY_TIME', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'flyspeed') {
			$foodstat4 = translate('STR_TOOLTIP_RIDE_FLY_SPEED', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'hpregen') {
			$foodstat4 = translate('STR_TOOLTIP_SKILL_STAT_HPREGEN', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'mpregen') {
			$foodstat4 = translate('STR_TOOLTIP_SKILL_STAT_MPREGEN', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'magicalhitaccuracy') {
			$foodstat4 = translate('STR_MAGICAL_HIT_ACCURACY', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'magicalresist') {
			$foodstat4 = translate('STR_MAGIC_DEFENSE', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'magicalskillboost') {
			$foodstat4 = translate('STR_MAGICAL_SKILL_BOOST', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'speed') {
			$foodstat4 = translate('STR_TOOLTIP_SKILL_STAT_SPEED', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'magicalskillboostresist') {
			$foodstat4 = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_SKILL_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'attackdelay') {
			$foodstat4 = translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'elementaldefendall') {
			$foodstat4 = translate('STR_TOOLTIP_SKILL_STAT_ED_ALL', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'magicalcriticalreducerate') {
			$foodstat4 = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'elementaldefendair') {
			$foodstat4 = translate('STR_TOOLTIP_SKILL_STAT_ED_AIR', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'magicalcritical') {
			$foodstat4 = translate('STR_TOOLTIP_SKILL_STAT_MAGCRITICAL', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'physicalcriticalreducerate') {
			$foodstat4 = translate('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'boostcastingtime') {
			$foodstat4 = translate('STR_BOOSTCASTINGTIME', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'elementaldefendwater') {
			$foodstat4 = translate('STR_TOOLTIP_SKILL_STAT_ED_WATER', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'elementaldefendearth') {
			$foodstat4 = translate('STR_TOOLTIP_SKILL_STAT_ED_EARTH', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'elementaldefendfire') {
			$foodstat4 = translate('STR_TOOLTIP_SKILL_STAT_ED_FIRE', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'healskillboost') {
			$foodstat4 = translate('STR_TOOLTIP_SKILL_STAT_HEAL_BOOST', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'physicalpowerboost') {
			$foodstat4 = translate('STR_PHYSICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'magicalpowerboost') {
			$foodstat4 = translate('STR_MAGICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'physicalpowerboostresist') {
			$foodstat4 = translate('STR_PHYSICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'magicalpowerboostresist') {
			$foodstat4 = translate('STR_MAGICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'parry') {
			$foodstat4 = translate('STR_PARRY', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'block') {
			$foodstat4 = translate('STR_BLOCK', $language);
		}else {
			$foodstat4 = '[Unknown - Please, Report. ' . $result["effect4_reserved13"] . ']';
		}
		
		
		if (strtolower($result["effect4_reserved14"]) == 'maxhp') {
			$foodstat4b = translate('STR_HP', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'phyattack') {
			$foodstat4b = translate('STR_TOOLTIP_SKILL_STAT_PHYATTACK', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'critical') {
			$foodstat4b = translate('STR_CRITICAL', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'hitaccuracy') {
			$foodstat4b = translate('STR_TOOLTIP_SKILL_STAT_HITACCURACY', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'maxmp') {
			$foodstat4b = translate('STR_MP', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'dodge') {
			$foodstat4b = translate('STR_DODGE', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'maxfp') {
			$foodstat4b = translate('STR_TOOLTIP_FLY_TIME', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'flyspeed') {
			$foodstat4b = translate('STR_TOOLTIP_RIDE_FLY_SPEED', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'hpregen') {
			$foodstat4b = translate('STR_TOOLTIP_SKILL_STAT_HPREGEN', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'mpregen') {
			$foodstat4b = translate('STR_TOOLTIP_SKILL_STAT_MPREGEN', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'magicalhitaccuracy') {
			$foodstat4b = translate('STR_MAGICAL_HIT_ACCURACY', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'magicalresist') {
			$foodstat4b = translate('STR_MAGIC_DEFENSE', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'magicalskillboost') {
			$foodstat4b = translate('STR_MAGICAL_SKILL_BOOST', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'speed') {
			$foodstat4b = translate('STR_TOOLTIP_SKILL_STAT_SPEED', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'magicalskillboostresist') {
			$foodstat4b = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_SKILL_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'attackdelay') {
			$foodstat4b = translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'elementaldefendall') {
			$foodstat4b = translate('STR_TOOLTIP_SKILL_STAT_ED_ALL', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'magicalcriticalreducerate') {
			$foodstat4b = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'elementaldefendair') {
			$foodstat4b = translate('STR_TOOLTIP_SKILL_STAT_ED_AIR', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'magicalcritical') {
			$foodstat4b = translate('STR_TOOLTIP_SKILL_STAT_MAGCRITICAL', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'physicalcriticalreducerate') {
			$foodstat4b = translate('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'boostcastingtime') {
			$foodstat4b = translate('STR_BOOSTCASTINGTIME', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'elementaldefendwater') {
			$foodstat4b = translate('STR_TOOLTIP_SKILL_STAT_ED_WATER', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'elementaldefendearth') {
			$foodstat4b = translate('STR_TOOLTIP_SKILL_STAT_ED_EARTH', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'elementaldefendfire') {
			$foodstat4b = translate('STR_TOOLTIP_SKILL_STAT_ED_FIRE', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'healskillboost') {
			$foodstat4b = translate('STR_TOOLTIP_SKILL_STAT_HEAL_BOOST', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'physicalpowerboost') {
			$foodstat4b = translate('STR_PHYSICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'magicalpowerboost') {
			$foodstat4b = translate('STR_MAGICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'physicalpowerboostresist') {
			$foodstat4b = translate('STR_PHYSICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'magicalpowerboostresist') {
			$foodstat4b = translate('STR_MAGICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'parry') {
			$foodstat4b = translate('STR_PARRY', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'block') {
			$foodstat4b = translate('STR_BLOCK', $language);
		}else {
			$foodstat4b = '[Unknown - Please, Report. ' . $result["effect4_reserved14"] . ']';
		}
		
		
		if (strtolower($result["effect4_reserved18"]) == 'maxhp') {
			$foodstat4c = translate('STR_HP', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'phyattack') {
			$foodstat4c = translate('STR_TOOLTIP_SKILL_STAT_PHYATTACK', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'critical') {
			$foodstat4c = translate('STR_CRITICAL', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'hitaccuracy') {
			$foodstat4c = translate('STR_TOOLTIP_SKILL_STAT_HITACCURACY', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'maxmp') {
			$foodstat4c = translate('STR_MP', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'dodge') {
			$foodstat4c = translate('STR_DODGE', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'maxfp') {
			$foodstat4c = translate('STR_TOOLTIP_FLY_TIME', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'flyspeed') {
			$foodstat4c = translate('STR_TOOLTIP_RIDE_FLY_SPEED', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'hpregen') {
			$foodstat4c = translate('STR_TOOLTIP_SKILL_STAT_HPREGEN', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'mpregen') {
			$foodstat4c = translate('STR_TOOLTIP_SKILL_STAT_MPREGEN', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'magicalhitaccuracy') {
			$foodstat4c = translate('STR_MAGICAL_HIT_ACCURACY', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'magicalresist') {
			$foodstat4c = translate('STR_MAGIC_DEFENSE', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'magicalskillboost') {
			$foodstat4c = translate('STR_MAGICAL_SKILL_BOOST', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'speed') {
			$foodstat4c = translate('STR_TOOLTIP_SKILL_STAT_SPEED', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'magicalskillboostresist') {
			$foodstat4c = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_SKILL_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'attackdelay') {
			$foodstat4c = translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'elementaldefendall') {
			$foodstat4c = translate('STR_TOOLTIP_SKILL_STAT_ED_ALL', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'magicalcriticalreducerate') {
			$foodstat4c = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'elementaldefendair') {
			$foodstat4c = translate('STR_TOOLTIP_SKILL_STAT_ED_AIR', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'magicalcritical') {
			$foodstat4c = translate('STR_TOOLTIP_SKILL_STAT_MAGCRITICAL', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'physicalcriticalreducerate') {
			$foodstat4c = translate('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'boostcastingtime') {
			$foodstat4c = translate('STR_BOOSTCASTINGTIME', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'elementaldefendwater') {
			$foodstat4c = translate('STR_TOOLTIP_SKILL_STAT_ED_WATER', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'elementaldefendearth') {
			$foodstat4c = translate('STR_TOOLTIP_SKILL_STAT_ED_EARTH', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'elementaldefendfire') {
			$foodstat4c = translate('STR_TOOLTIP_SKILL_STAT_ED_FIRE', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'healskillboost') {
			$foodstat4c = translate('STR_TOOLTIP_SKILL_STAT_HEAL_BOOST', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'physicalpowerboost') {
			$foodstat4c = translate('STR_PHYSICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'magicalpowerboost') {
			$foodstat4c = translate('STR_MAGICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'physicalpowerboostresist') {
			$foodstat4c = translate('STR_PHYSICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'magicalpowerboostresist') {
			$foodstat4c = translate('STR_MAGICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'parry') {
			$foodstat4c = translate('STR_PARRY', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'block') {
			$foodstat4c = translate('STR_BLOCK', $language);
		}else {
			$foodstat4c = '[Unknown - Please, Report. ' . $result["effect4_reserved18"] . ']';
		}
		
		
		if (strtolower($result["effect4_reserved22"]) == 'maxhp') {
			$foodstat4d = translate('STR_HP', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'phyattack') {
			$foodstat4d = translate('STR_TOOLTIP_SKILL_STAT_PHYATTACK', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'critical') {
			$foodstat4d = translate('STR_CRITICAL', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'hitaccuracy') {
			$foodstat4d = translate('STR_TOOLTIP_SKILL_STAT_HITACCURACY', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'maxmp') {
			$foodstat4d = translate('STR_MP', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'dodge') {
			$foodstat4d = translate('STR_DODGE', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'maxfp') {
			$foodstat4d = translate('STR_TOOLTIP_FLY_TIME', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'flyspeed') {
			$foodstat4d = translate('STR_TOOLTIP_RIDE_FLY_SPEED', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'hpregen') {
			$foodstat4d = translate('STR_TOOLTIP_SKILL_STAT_HPREGEN', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'mpregen') {
			$foodstat4d = translate('STR_TOOLTIP_SKILL_STAT_MPREGEN', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'magicalhitaccuracy') {
			$foodstat4d = translate('STR_MAGICAL_HIT_ACCURACY', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'magicalresist') {
			$foodstat4d = translate('STR_MAGIC_DEFENSE', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'magicalskillboost') {
			$foodstat4d = translate('STR_MAGICAL_SKILL_BOOST', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'speed') {
			$foodstat4d = translate('STR_TOOLTIP_SKILL_STAT_SPEED', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'magicalskillboostresist') {
			$foodstat4d = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_SKILL_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'attackdelay') {
			$foodstat4d = translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'elementaldefendall') {
			$foodstat4d = translate('STR_TOOLTIP_SKILL_STAT_ED_ALL', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'magicalcriticalreducerate') {
			$foodstat4d = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'elementaldefendair') {
			$foodstat4d = translate('STR_TOOLTIP_SKILL_STAT_ED_AIR', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'magicalcritical') {
			$foodstat4d = translate('STR_TOOLTIP_SKILL_STAT_MAGCRITICAL', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'physicalcriticalreducerate') {
			$foodstat4d = translate('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'boostcastingtime') {
			$foodstat4d = translate('STR_BOOSTCASTINGTIME', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'elementaldefendwater') {
			$foodstat4d = translate('STR_TOOLTIP_SKILL_STAT_ED_WATER', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'elementaldefendearth') {
			$foodstat4d = translate('STR_TOOLTIP_SKILL_STAT_ED_EARTH', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'elementaldefendfire') {
			$foodstat4d = translate('STR_TOOLTIP_SKILL_STAT_ED_FIRE', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'healskillboost') {
			$foodstat4d = translate('STR_TOOLTIP_SKILL_STAT_HEAL_BOOST', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'physicalpowerboost') {
			$foodstat4d = translate('STR_PHYSICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'magicalpowerboost') {
			$foodstat4d = translate('STR_MAGICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'physicalpowerboostresist') {
			$foodstat4d = translate('STR_PHYSICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'magicalpowerboostresist') {
			$foodstat4d = translate('STR_MAGICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'parry') {
			$foodstat4d = translate('STR_PARRY', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'block') {
			$foodstat4d = translate('STR_BLOCK', $language);
		}else {
			$foodstat4d = '[Unknown - Please, Report. ' . $result["effect4_reserved22"] . ']';
		}
		
		
		
		
		
		
		
		
		
		if ($result["effect1_reserved1"] > 0) {
			$food1 = $result["effect1_reserved1"] * $activation_level;
			$flyingpot =$result["effect1_reserved1"];
		}else {
			$food1 = $result["effect1_reserved2"] * $activation_level;
			$flyingpot =$result["effect1_reserved2"];
		}
		
		if ($result["effect2_reserved1"] > 0) {
			$food2 = $result["effect2_reserved1"] * $activation_level;
		}else {
			$food2 = $result["effect2_reserved2"] * $activation_level;
		}
		
		if ($result["effect3_reserved1"] > 0) {
			$food3 = $result["effect3_reserved1"] * $activation_level;
		}else {
			$food3 = $result["effect3_reserved2"] * $activation_level;
		}
		
		if ($result["effect4_reserved1"] > 0) {
			$food4 = $result["effect4_reserved1"] * $activation_level;
		}else {
			$food4 = $result["effect4_reserved2"] * $activation_level;
		}
		
		
		if ($result["effect4_reserved1"] > 0) {
			$food4 = $result["effect4_reserved1"] * $activation_level;
		}else {
			$food4 = $result["effect4_reserved2"] * $activation_level;
		}
		
		
		
		
		
		

			$itemdesc = strtr($description, array(
					"<" => '&lt;',
					"[%e1.StatUp.Value]"	=> $food1,
					"[%e1.StatUp.Value2]"	=> $result["effect1_reserved4"] * $activation_level,
					"[%e1.StatUp.Value3]"	=> $result["effect1_reserved16"],
					"[%e1.StatUp.Value4]"	=> $result["effect1_reserved20"],
					
					"[%e2.StatUp.Value]"	=> $food2,
					"[%e2.StatUp.Value2]"	=> $result["effect2_reserved4"] * $activation_level,
					"[%e2.StatUp.Value3]"	=> $result["effect2_reserved16"],
					"[%e2.StatUp.Value4]"	=> $result["effect2_reserved20"],
					
					"[%e3.StatUp.Value]"	=> $food3,					
					"[%e3.StatUp.Value2]"	=> $result["effect3_reserved4"] * $activation_level,
					"[%e3.StatUp.Value3]"	=> $result["effect3_reserved16"],
					"[%e3.StatUp.Value4]"	=> $result["effect3_reserved20"],
					
					"[%e4.StatUp.Value]"	=> $food4,
					"[%e4.StatUp.Value2]"	=> $result["effect4_reserved4"] * $activation_level,
					"[%e4.StatUp.Value3]"	=> $result["effect4_reserved16"],
					"[%e4.StatUp.Value4]"	=> $result["effect4_reserved20"],
					
					"[%e1.StatUp.RemainTime]"	=> $result["effect1_remain2"]/60000 . translate('STR_MINUTE', $language),
					"[%e1.ShapeChange.RemainTime]"	=> $result["effect1_remain2"]/60000 . translate('STR_MINUTE', $language),
					"[%e1.StatUp.StatName]"		=> $foodstat1,
					"[%e1.StatUp.StatName2]"	=> $foodstat1b,
					"[%e1.StatUp.StatName3]"	=> $foodstat1c,
					"[%e1.StatUp.StatName4]"	=> $foodstat1d,
					
					"[%e2.StatUp.StatName]"		=> $foodstat2,
					"[%e2.StatUp.StatName2]"	=> $foodstat2b,
					"[%e2.StatUp.StatName3]"	=> $foodstat2c,
					"[%e2.StatUp.StatName4]"	=> $foodstat2d,
					
					"[%e3.StatUp.StatName]"		=> $foodstat3,
					"[%e3.StatUp.StatName2]"	=> $foodstat3b,
					"[%e3.StatUp.StatName3]"	=> $foodstat3c,
					"[%e3.StatUp.StatName4]"	=> $foodstat3d,
					
					"[%e4.StatUp.StatName]"		=> $foodstat4,
					"[%e4.StatUp.StatName2]"	=> $foodstat4b,
					"[%e4.StatUp.StatName3]"	=> $foodstat4c,
					"[%e4.StatUp.StatName4]"	=> $foodstat4d,
					"[%e1.Shield.CoverValue]"	=> $result["effect1_reserved2"] * $activation_level,
					"[%e1.Shield.ShieldValue]"	=> $result["effect1_reserved8"] * $activation_level,
					"[%e1.ProcHeal_Instant.Heal]"		=> $result["effect1_reserved2"],
					"[%e2.ProcHeal_Instant.Heal]"		=> $result["effect2_reserved2"],
					"[%e1.ProcMpHeal_Instant.Heal]"		=> $result["effect1_reserved2"],
					"[%e2.ProcMpHeal_Instant.Heal]"		=> $result["effect2_reserved2"],
					"[%e3.Heal.CheckTimeHeal]"			=> $result["effect3_reserved9"],
					"[%e4.MpHeal.CheckTimeHeal]"		=> $result["effect4_reserved9"],
					"[%e3.Heal.CheckTime]"				=> $result["effect4_checktime"]/1000 . translate('STR_SECOND', $language),
					"[%e3.Heal.RemainTime]"				=> $result["effect3_remain2"]/1000 . translate('STR_SECOND', $language),
					"[%e2.MPHeal.CheckTimeHeal]"		=> $result["effect2_reserved9"],
					"[%e2.MpHeal.CheckTime]"			=> $result["effect2_checktime"]/1000 . translate('STR_SECOND', $language),
					"[%e2.MPHeal.RemainTime]"			=> $result["effect2_remain2"]/1000 . translate('STR_SECOND', $language),
					"[%e2.Heal.CheckTimeHeal]"			=> $result["effect2_reserved9"],
					"[%e2.Heal.CheckTime]"				=> $result["effect2_checktime"]/1000 . translate('STR_SECOND', $language),
					"[%e2.Heal.RemainTime]"				=> $result["effect2_remain2"]/1000 . translate('STR_SECOND', $language),
					"[%e1.ProcFpHeal_Instant.Heal]"		=> $flyingpot,
					"[%e1.Shield.RemainTime]"			=> $result["effect1_remain2"]/1000 . translate('STR_SECOND', $language),
					
				));
            $return_description = '<div class="wrap basicitem_desc" style=""><p class="desc">' . $itemdesc . '</p></div>';
	}
	
	
	
	
	
	return $return_description;
}


function extraitem($name, $language)
{
$servername = "mysqlhost";
$username = "login2";
$password = "passw";
$dbname = "login";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
mysqli_set_charset($conn,"utf8");	


$sql = "
SELECT id, icon_name, quality, search_$language, search_ko
FROM client_items
WHERE name = '$name'
";

    $query=mysqli_query($conn, $sql) or die(mysqli_error());
    while ($result = mysqli_fetch_assoc($query)) {
		$localizationExtra = !empty($result['search_'.$language]) ? $result['search_'.$language] : $result['search_ko'];
		$quality = strtolower($result["quality"]);
		$extraicon_name=strtolower($result["icon_name"]);
		$id=$result["id"];
	}
	
	return '<img src="https://aionpowerbook.com/item/icon/' . $extraicon_name . '.png" alt="" class="thumb3">  <a class="col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $id . '">' . $localizationExtra . '</a>';
	
}


function skinskill($name, $language)
{
$servername = "mysqlhost";
$username = "login2";
$password = "passw";
$dbname = "login";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
mysqli_set_charset($conn,"utf8");	


$sql = "
SELECT id, skillicon_name, search_$language, search_ko
FROM client_skills
WHERE name = '$name'
";
	
	
$query=mysqli_query($conn, $sql) or die(mysqli_error());
    while ($result = mysqli_fetch_assoc($query)) {
		$id = $result["id"];
		$localizationExtra = !empty($result['search_'.$language]) ? $result['search_'.$language] : $result['search_ko'];
		$skillicon_name = strtolower($result["skillicon_name"]);
	}
		
$skillicon = strtr($skillicon_name, array(
    ".dds" => '',
));	
	
	if ($id != NULL) {
		return '<img src="https://aionpowerbook.com/skillicon/' . $skillicon . '.png" alt="" class="thumb3">  <a href="https://aionpowerbook.com/powerbook/Skill/' . $id . '">' . $localizationExtra . '</a>';
	}else {
		return '';
	}
}



$sql =" SELECT * ";
$sql.=" From client_items_eu ";
$sql.=" WHERE id = '$id' ";

$query=mysqli_query($conn, $sql) or die("Whoopsie doopsie~!");

$data = array();


while( $row=mysqli_fetch_array($query) ) {
        $id=$row["id"];
		$name = $row["name"];
		$description = $row["description"];
		$desc_long = $row["desc_long"];
		$localization = translate($row["description"], $language);
		$localization_desc = translate($row["desc_long"], $language);
		$cooldown = $row['use_delay'];
		$mesh_pre = strtolower($row["mesh"]);
		$tooltip_type = $row['tooltip_type'];
		$clientversion = $row["client_version"];
		$item_type = $row['item_type'];
		$skin_skill = $row['skin_skill'];
		$extra_currency_item = $row['extra_currency_item'];
		$extra_currency_item_count = $row['extra_currency_item_count'];
		$ride_data_name = $row['ride_data_name'];
		$avaLevel = max($row["warrior"], $row["scout"], $row["mage"], $row["cleric"], $row["engineer"], $row["artist"], $row["fighter"], $row["knight"], $row["assassin"], $row["ranger"], $row["wizard"], $row["elementalist"], $row["chanter"], $row["priest"], $row["gunner"], $row["bard"], $row["rider"], $row["painter"]);
		$maxavaLevel = max($row["warrior_max"], $row["scout_max"], $row["mage_max"], $row["cleric_max"], $row["engineer_max"], $row["artist_max"], $row["fighter_max"], $row["knight_max"], $row["assassin_max"], $row["ranger_max"], $row["wizard_max"], $row["elementalist_max"], $row["chanter_max"], $row["priest_max"], $row["gunner_max"], $row["bard_max"], $row["rider_max"], $row["painter_max"]);
		$pack_count = $row["can_pack_count"];																//number of possible wrappings
		$ench_level = $row["max_enchant_value"];															//maximum enchantment level
		$max_Upgrade = $row["max_authorize"];																//maximum upgrade level
		$hit_count = $row["hit_count"];																		// number of hits a weapon makes
		$attack_delay = $row["attack_delay"];																//weapon's speed
		$weapSpeedNumber = (int) $attack_delay / 1000;
		$attack_type = $row["attack_type"];																	//attack type, physical or magical_skill_accuracy
		$min_damage = $row["min_damage"];																	//minimum damage
		$max_damage = $row["max_damage"];																	//maximum damage
		$critical = $row["critical"];																		//critical hit
		$hit_accuracy = $row["hit_accuracy"];																//basic accuracy
		$parry = $row["parry"];																				//basic parry
		$magical_skill_boost = $row["magical_skill_boost"];													//basic magic boost
		$magical_hit_accuracy = $row["magical_hit_accuracy"];												//basic magical accuracy
		
		//6.0 stats
		$physical_power_boost = $row["physical_power_boost"];	
		$physical_power_boost_resist = $row["physical_power_boost_resist"];	
		$magical_power_boost = $row["magical_power_boost"];	
		$magical_power_boost_resist = $row["magical_power_boost_resist"];	
		
		$block = $row["block"];																				//basic block
		$damage_reduce = $row["damage_reduce"];																//basic damage reduction
		$magical_defend = $row["magical_defend"];															//basic Magical Def
		$magical_skill_boost_resist = $row["magical_skill_boost_resist"];									//basic Magic Suppression
		$max_hp = $row["max_hp"];																			//basic HP
		$max_mp = $row["max_mp"];
		$magical_resist = $row["magical_resist"];															//basic resist magic
		$physical_critical_reduce_rate = $row["physical_critical_reduce_rate"];								//basic crit strike
		$physical_defend = $row["physical_defend"];															//basic physical def
		$dodge = $row["dodge"];																				//basic evasion
		$option_slot_value = $row["option_slot_value"];														//manastone slots
		$option_slot_bonus = $row["option_slot_bonus"];														//bonus manastone slots
		$itemlevel=$row["level"];																			//item's level
        $itemiconbroken=strtolower($row["icon_name"]);															//icon's name
        $quality=strtolower($row["quality"]);																//item's quality
		$func_pet_name = $row["func_pet_name"];
		$disassembly_type = $row["disassembly_type"];
		$summon_housing_object = $row["summon_housing_object"];
		$custom_part_name = $row["custom_part_name"];
		$robot_name = $row["robot_name"];
		$activation_skill = $row["activation_skill"];
		$craft_recipe_info = $row["craft_recipe_info"];
		$random_option_set = $row["random_option_set"];
		$random_option_name = $row["random_option_name"];
		$polish_set_name = $row["polish_set_name"];
		$basic_skill_set_name = $row["basic_skill_set_name"];
		$odian_skill_desc_1 = $row["odian_skill_desc_1"];
		$odian_skill_name = $row["odian_skill_name"];
		
		
		$cash_title = $row["cash_title"];
		
		
		
		
		$itemicon = strtr($itemiconbroken, array(
				".dds" => '',
				));

		
		
		// food stat multiplayer //
		if ($row["activation_level"] == '7') {
			$activation_level = 1;
		}else {		
		$activation_level = $row["activation_level"];
		}
		// food stat multiplayer //
		
		
		// High Daeva item description, like +3% dmag agains warriors //
		if ($row["limit_attribute_desc"] != NULL){
			$limiteddesc = '<div class="wrap basicitem_desc" style=""><p class="desc">' . translate($row["limit_attribute_desc"], $language) . '</p></div>';
		}
		// HD item desc //




if ($isaSet != NULL ) {
			$settitle = '==Set==';
			$setdetails .= '<br>';
			$setdetails .= '{{#set:' . $isaSet . '}}';
		}

		if (($id >= 100000001) && ($id <= 100100000) && $row["attack_range"] > 1.5) {
		$extendable = ' ' . translate('STR_TOOLTIP_EXTEND_WEAPON', $language) ;
		}
		
		if (($id >= 100100001) && ($id <= 100200000) && $row["attack_range"] > 2) {
		$extendable = ' ' . translate('STR_TOOLTIP_EXTEND_WEAPON', $language) ;
		}
		
		if  (($id >= 100200001) && ($id <= 100300000) && $row["attack_range"] > 2) {
		$extendable = ' ' . translate('STR_TOOLTIP_EXTEND_WEAPON', $language) ;	
		}
		
		if (($id >= 100900001) && ($id <= 101000000) && $row["attack_range"] > 2) {
		$extendable = ' ' . translate('STR_TOOLTIP_EXTEND_WEAPON', $language) ;		
		}
		
		if (($id >= 101300001) && ($id <= 101400000) && $row["attack_range"] > 2.5) {
		$extendable = ' ' . translate('STR_TOOLTIP_EXTEND_WEAPON', $language) ;		
		}
		
		if (($id >= 101500001) && ($id <= 101600000) && $row["attack_range"] > 2) {
		$extendable = ' ' . translate('STR_TOOLTIP_EXTEND_WEAPON', $language) ;		
		}
		

		$mesh = strtr($mesh_pre, array(
				"_body" => '',
				"_foot" => '',
				"_hand" => '',
				"_leg" => '',
				"_shoulder" => '',
				));
		

		$abyss_point = number_format($row["abyss_point"]);		
		$abyss_item_count = $row["abyss_item_count"];
		$abyss_item = $row["abyss_item"];
		$skin_skill = $row["skin_skill"];



				//		trade in $tradeIn	//
		$trade_in_item = $row["trade_in_item"];	
		$trade_in_item_count = $row["trade_in_item_count"];
		$trade_in_item1 = $row["trade_in_item1"];	
		$trade_in_item_count1 = $row["trade_in_item_count1"];
		$trade_in_item2 = $row["trade_in_item2"];	
		$trade_in_item_count2 = $row["trade_in_item_count2"];
		
		if ($trade_in_item != NULL) {
			$tradeIn .= '<div class="wrap basicitem_price2"><dl class="price2"><dt>' . translate('STR_REGISTER_ITEM_DIALOG', $language) . ':</dt><dd class="price2">';
			$tradeIn .= extraitem($trade_in_item, $language);
			$tradeIn .= '  ' . $trade_in_item_count;
			if($trade_in_item1 != NULL) {
				$tradeIn .= '<br>';
				$tradeIn .= extraitem($trade_in_item1, $language);
				$tradeIn .= '  ' . $trade_in_item_count1;
			}
			if($trade_in_item2 != NULL) {
				$tradeIn .= '<br>';
				$tradeIn .= extraitem($trade_in_item2, $language);
				$tradeIn .= '  ' . $trade_in_item_count2;
			}
			$tradeIn .= '</dd></dl></div>';
		}
		
		
		if ($skin_skill != NULL) {
			$skinSkill .= '<div class="wrap item_set" style=""><dl class="item_set"><dt class="item_set">' . translate('STR_PLAYER_INFO_DIALOG__SKILL', $language) . ':<br></dt>';
			$skinSkill .= skinskill($skin_skill, $language);
			$skinSkill .= '</dl></div>';
		} 
		
		if ($basic_skill_set_name != NULL) {
			$skinSkill .= '<div class="wrap item_set" style=""><dl class="item_set"><dt class="item_set">' . translate('STR_PLAYER_INFO_DIALOG__SKILL', $language) . ':<br></dt>';
			
			if ($basic_skill_set_name == 'S8_Set1_Weapon') {
				$skinSkill .= skinskill('world_S8_Skill_Quickness', $language);
			}elseif ($basic_skill_set_name == 'Deva_Set1_Weapon') {
				$skinSkill .= skinskill('Deva_WeaponSkill_G1', $language);
			}else {
				
				$skinSkilltemp = skinskill($basic_skill_set_name, $language);
				if ($skinSkilltemp != NULL) {
					$skinSkill .= $skinSkilltemp;
				}else {				
					$skinSkill .= 'Unknown';
				}
			}
			
			
			$skinSkill .= skinskill($Skillsetname, $language);
			$skinSkill .= '</dl></div>';
		} 
		
		
		
		
		
		if ($extra_currency_item != NULL) {
			$extraCurrancy .= '<div class="wrap basicitem_price2"><dl class="price2"><dt>' . translate('STR_ITEM_PRICE', $language) . ':</dt><dd class="price2">';
			$extraCurrancy .= extraitem($extra_currency_item, $language);
			$extraCurrancy .= '  ' . number_format($extra_currency_item_count);
			$extraCurrancy .= '</dd></dl></div>';
		} 
		
		
		if ($abyss_point > 0 or $abyss_item != NULL) {
			$abyssPrice .= '<div class="wrap basicitem_price2"><dl class="price2"><dt>' . translate('STR_ITEM_PRICE', $language) . ':</dt><dd class="price2">';
			if ($abyss_point > 0) {
			$abyssPrice .= '<img src="https://aionpowerbook.com/images/abysspoint.png" alt="" class="thumb3">  <a href="Abyss Points">' . translate('STR_ABYSS_POINT', $language) . '</a>  ' . $abyss_point . '<br>';
			}
			if ($abyss_item != NULL) {
			$abyssPrice .= extraitem($abyss_item, $language);
			
			$abyssPrice .= '  ' . number_format($abyss_item_count);
			}
			$abyssPrice .= '</dd></dl></div>';
		} 
		
		
		
		if ($row["item_highdeva"] == 'TRUE') {
			$hdonly = translate('STR_TOOLTIP_PC_RACE_FORMAT', $language);
			
			$highdaevaonly = strtr($hdonly, array(
							"%0" => translate('STR_TOOLTIP_PC_HIGHDEVA', $language),
					));
					
			$HDgear	= '<p class="learn_level">'.$highdaevaonly.'</p>';
			
		}


include 'include/leveldata.php';
		

		if($row["usable_rank_min"] == '18') {
			$rankMin = translate('STR_TOOLTIP_USE_RANK', $language);
			$rank = explode('%0', $rankMin);
			$usableMinrank = '<p class="usable_rank_min">' . $rank[0] . translate('STR_Abyssrank_dark_18', $language) . $rank[1] . '</p><dl class="property">';
		}elseif($row["usable_rank_min"] == '17') {
			$rankMin = translate('STR_TOOLTIP_USE_RANK', $language);
			$rank = explode('%0', $rankMin);
			$usableMinrank = '<p class="usable_rank_min">' . $rank[0] . translate('STR_Abyssrank_dark_17', $language) . $rank[1] . '</p><dl class="property">';
		}elseif($row["usable_rank_min"] == '16') {
			$rankMin = translate('STR_TOOLTIP_USE_RANK', $language);
			$rank = explode('%0', $rankMin);
			$usableMinrank = '<p class="usable_rank_min">' . $rank[0] . translate('STR_Abyssrank_dark_16', $language) . $rank[1] . '</p><dl class="property">';
		}elseif($row["usable_rank_min"] == '15') {
			$rankMin = translate('STR_TOOLTIP_USE_RANK', $language);
			$rank = explode('%0', $rankMin);
			$usableMinrank = '<p class="usable_rank_min">' . $rank[0] . translate('STR_Abyssrank_dark_15', $language) . $rank[1] . '</p><dl class="property">';
		}elseif($row["usable_rank_min"] == '14') {
			$rankMin = translate('STR_TOOLTIP_USE_RANK', $language);
			$rank = explode('%0', $rankMin);
			$usableMinrank = '<p class="usable_rank_min">' . $rank[0] . translate('STR_Abyssrank_dark_14', $language) . $rank[1] . '</p><dl class="property">';
		}elseif($row["usable_rank_min"] == '13') {
			$rankMin = translate('STR_TOOLTIP_USE_RANK', $language);
			$rank = explode('%0', $rankMin);
			$usableMinrank = '<p class="usable_rank_min">' . $rank[0] . translate('STR_Abyssrank_dark_13', $language) . $rank[1] . '</p><dl class="property">';
		}elseif($row["usable_rank_min"] == '12') {
			$rankMin = translate('STR_TOOLTIP_USE_RANK', $language);
			$rank = explode('%0', $rankMin);
			$usableMinrank = '<p class="usable_rank_min">' . $rank[0] . translate('STR_Abyssrank_dark_12', $language) . $rank[1] . '</p><dl class="property">';
		}elseif($row["usable_rank_min"] == '11') {
			$rankMin = translate('STR_TOOLTIP_USE_RANK', $language);
			$rank = explode('%0', $rankMin);
			$usableMinrank = '<p class="usable_rank_min">' . $rank[0] . translate('STR_Abyssrank_dark_11', $language) . $rank[1] . '</p><dl class="property">';
		}elseif($row["usable_rank_min"] == '10') {
			$rankMin = translate('STR_TOOLTIP_USE_RANK', $language);
			$rank = explode('%0', $rankMin);
			$usableMinrank = '<p class="usable_rank_min">' . $rank[0] . translate('STR_Abyssrank_dark_10', $language) . $rank[1] . '</p><dl class="property">';
		}elseif($row["usable_rank_min"] == '9') {
			$rankMin = translate('STR_TOOLTIP_USE_RANK', $language);
			$rank = explode('%0', $rankMin);
			$usableMinrank = '<p class="usable_rank_min">' . $rank[0] . translate('STR_Abyssrank_dark_09', $language) . $rank[1] . '</p><dl class="property">';
		}elseif($row["usable_rank_min"] == '8') {
			$rankMin = translate('STR_TOOLTIP_USE_RANK', $language);
			$rank = explode('%0', $rankMin);
			$usableMinrank = '<p class="usable_rank_min">' . $rank[0] . translate('STR_Abyssrank_dark_08', $language) . $rank[1] . '</p><dl class="property">';
		}elseif($row["usable_rank_min"] == '7') {
			$rankMin = translate('STR_TOOLTIP_USE_RANK', $language);
			$rank = explode('%0', $rankMin);
			$usableMinrank = '<p class="usable_rank_min">' . $rank[0] . translate('STR_Abyssrank_dark_07', $language) . $rank[1] . '</p><dl class="property">';
		}elseif($row["usable_rank_min"] == '6') {
			$rankMin = translate('STR_TOOLTIP_USE_RANK', $language);
			$rank = explode('%0', $rankMin);
			$usableMinrank = '<p class="usable_rank_min">' . $rank[0] . translate('STR_Abyssrank_dark_06', $language) . $rank[1] . '</p><dl class="property">';
		}elseif($row["usable_rank_min"] == '5') {
			$rankMin = translate('STR_TOOLTIP_USE_RANK', $language);
			$rank = explode('%0', $rankMin);
			$usableMinrank = '<p class="usable_rank_min">' . $rank[0] . translate('STR_Abyssrank_dark_05', $language) . $rank[1] . '</p><dl class="property">';
		}elseif($row["usable_rank_min"] == '4') {
			$rankMin = translate('STR_TOOLTIP_USE_RANK', $language);
			$rank = explode('%0', $rankMin);
			$usableMinrank = '<p class="usable_rank_min">' . $rank[0] . translate('STR_Abyssrank_dark_04', $language) . $rank[1] . '</p><dl class="property">';
		}elseif($row["usable_rank_min"] == '3') {
			$rankMin = translate('STR_TOOLTIP_USE_RANK', $language);
			$rank = explode('%0', $rankMin);
			$usableMinrank = '<p class="usable_rank_min">' . $rank[0] . translate('STR_Abyssrank_dark_03', $language) . $rank[1] . '</p><dl class="property">';
		}elseif($row["usable_rank_min"] == '2') {
			$rankMin = translate('STR_TOOLTIP_USE_RANK', $language);
			$rank = explode('%0', $rankMin);
			$usableMinrank = '<p class="usable_rank_min">' . $rank[0] . translate('STR_Abyssrank_dark_02', $language) . $rank[1] . '</p><dl class="property">';
		}elseif($row["usable_rank_min"] == '1') {
			$rankMin = translate('STR_TOOLTIP_USE_RANK', $language);
			$rank = explode('%0', $rankMin);
			$usableMinrank = '<p class="usable_rank_min">' . $rank[0] . translate('STR_Abyssrank_dark_01', $language) . $rank[1] . '</p><dl class="property">';
		}else {
			$usableMinrank = '';
		}
		
		
		
		if($row["purchable_rank_min"] == '18') {
			$purchRank = translate('STR_TOOLTIP_ITEM_PURCHABLE_ALLOW_RANK', $language);
			$PuRank = explode('%0', $purchRank);
			$purchable_rank_min = '<p class="purchable_rank_min">' . $PuRank[0] . translate('STR_Abyssrank_dark_18', $language) . $PuRank[1] . '</p><dl class="property">';
		}elseif($row["purchable_rank_min"] == '17') {
			$purchRank = translate('STR_TOOLTIP_ITEM_PURCHABLE_ALLOW_RANK', $language);
			$PuRank = explode('%0', $purchRank);
			$purchable_rank_min = '<p class="purchable_rank_min">' . $PuRank[0] . translate('STR_Abyssrank_dark_17', $language) . $PuRank[1] . '</p><dl class="property">';
		}elseif($row["purchable_rank_min"] == '16') {
			$purchRank = translate('STR_TOOLTIP_ITEM_PURCHABLE_ALLOW_RANK', $language);
			$PuRank = explode('%0', $purchRank);
			$purchable_rank_min = '<p class="purchable_rank_min">' . $PuRank[0] . translate('STR_Abyssrank_dark_16', $language) . $PuRank[1] . '</p><dl class="property">';
		}elseif($row["purchable_rank_min"] == '15') {
			$purchRank = translate('STR_TOOLTIP_ITEM_PURCHABLE_ALLOW_RANK', $language);
			$PuRank = explode('%0', $purchRank);
			$purchable_rank_min = '<p class="purchable_rank_min">' . $PuRank[0] . translate('STR_Abyssrank_dark_15', $language) . $PuRank[1] . '</p><dl class="property">';
		}elseif($row["purchable_rank_min"] == '14') {
			$purchRank = translate('STR_TOOLTIP_ITEM_PURCHABLE_ALLOW_RANK', $language);
			$PuRank = explode('%0', $purchRank);
			$purchable_rank_min = '<p class="purchable_rank_min">' . $PuRank[0] . translate('STR_Abyssrank_dark_14', $language) . $PuRank[1] . '</p><dl class="property">';
		}elseif($row["purchable_rank_min"] == '13') {
			$purchRank = translate('STR_TOOLTIP_ITEM_PURCHABLE_ALLOW_RANK', $language);
			$PuRank = explode('%0', $purchRank);
			$purchable_rank_min = '<p class="purchable_rank_min">' . $PuRank[0] . translate('STR_Abyssrank_dark_13', $language) . $PuRank[1] . '</p><dl class="property">';
		}elseif($row["purchable_rank_min"] == '12') {
			$purchRank = translate('STR_TOOLTIP_ITEM_PURCHABLE_ALLOW_RANK', $language);
			$PuRank = explode('%0', $purchRank);
			$purchable_rank_min = '<p class="purchable_rank_min">' . $PuRank[0] . translate('STR_Abyssrank_dark_12', $language) . $PuRank[1] . '</p><dl class="property">';
		}elseif($row["purchable_rank_min"] == '11') {
			$purchRank = translate('STR_TOOLTIP_ITEM_PURCHABLE_ALLOW_RANK', $language);
			$PuRank = explode('%0', $purchRank);
			$purchable_rank_min = '<p class="purchable_rank_min">' . $PuRank[0] . translate('STR_Abyssrank_dark_11', $language) . $PuRank[1] . '</p><dl class="property">';
		}elseif($row["purchable_rank_min"] == '10') {
			$purchRank = translate('STR_TOOLTIP_ITEM_PURCHABLE_ALLOW_RANK', $language);
			$PuRank = explode('%0', $purchRank);
			$purchable_rank_min = '<p class="purchable_rank_min">' . $PuRank[0] . translate('STR_Abyssrank_dark_10', $language) . $PuRank[1] . '</p><dl class="property">';
		}elseif($row["purchable_rank_min"] == '9') {
			$purchRank = translate('STR_TOOLTIP_ITEM_PURCHABLE_ALLOW_RANK', $language);
			$PuRank = explode('%0', $purchRank);
			$purchable_rank_min = '<p class="purchable_rank_min">' . $PuRank[0] . translate('STR_Abyssrank_dark_09', $language) . $PuRank[1] . '</p><dl class="property">';
		}elseif($row["purchable_rank_min"] == '8') {
			$purchRank = translate('STR_TOOLTIP_ITEM_PURCHABLE_ALLOW_RANK', $language);
			$PuRank = explode('%0', $purchRank);
			$purchable_rank_min = '<p class="purchable_rank_min">' . $PuRank[0] . translate('STR_Abyssrank_dark_08', $language) . $PuRank[1] . '</p><dl class="property">';
		}elseif($row["purchable_rank_min"] == '7') {
			$purchRank = translate('STR_TOOLTIP_ITEM_PURCHABLE_ALLOW_RANK', $language);
			$PuRank = explode('%0', $purchRank);
			$purchable_rank_min = '<p class="purchable_rank_min">' . $PuRank[0] . translate('STR_Abyssrank_dark_07', $language) . $PuRank[1] . '</p><dl class="property">';
		}elseif($row["purchable_rank_min"] == '6') {
			$purchRank = translate('STR_TOOLTIP_ITEM_PURCHABLE_ALLOW_RANK', $language);
			$PuRank = explode('%0', $purchRank);
			$purchable_rank_min = '<p class="purchable_rank_min">' . $PuRank[0] . translate('STR_Abyssrank_dark_06', $language) . $PuRank[1] . '</p><dl class="property">';
		}elseif($row["purchable_rank_min"] == '5') {
			$purchRank = translate('STR_TOOLTIP_ITEM_PURCHABLE_ALLOW_RANK', $language);
			$PuRank = explode('%0', $purchRank);
			$purchable_rank_min = '<p class="purchable_rank_min">' . $PuRank[0] . translate('STR_Abyssrank_dark_05', $language) . $PuRank[1] . '</p><dl class="property">';
		}elseif($row["purchable_rank_min"] == '4') {
			$purchRank = translate('STR_TOOLTIP_ITEM_PURCHABLE_ALLOW_RANK', $language);
			$PuRank = explode('%0', $purchRank);
			$purchable_rank_min = '<p class="purchable_rank_min">' . $PuRank[0] . translate('STR_Abyssrank_dark_04', $language) . $PuRank[1] . '</p><dl class="property">';
		}elseif($row["purchable_rank_min"] == '3') {
			$purchRank = translate('STR_TOOLTIP_ITEM_PURCHABLE_ALLOW_RANK', $language);
			$PuRank = explode('%0', $purchRank);
			$purchable_rank_min = '<p class="purchable_rank_min">' . $PuRank[0] . translate('STR_Abyssrank_dark_03', $language) . $PuRank[1] . '</p><dl class="property">';
		}elseif($row["purchable_rank_min"] == '2') {
			$purchRank = translate('STR_TOOLTIP_ITEM_PURCHABLE_ALLOW_RANK', $language);
			$PuRank = explode('%0', $purchRank);
			$purchable_rank_min = '<p class="purchable_rank_min">' . $PuRank[0] . translate('STR_Abyssrank_dark_02', $language) . $PuRank[1] . '</p><dl class="property">';
		}elseif($row["purchable_rank_min"] == '1') {
			$purchRank = translate('STR_TOOLTIP_ITEM_PURCHABLE_ALLOW_RANK', $language);
			$PuRank = explode('%0', $purchRank);
			$purchable_rank_min = '<p class="purchable_rank_min">' . $PuRank[0] . translate('STR_Abyssrank_dark_01', $language) . $PuRank[1] . '</p><dl class="property">';
		}else {
			$purchable_rank_min = '';
		}		
		
		
		if($row["recommend_rank"] == '18') {
			$RecommRank = translate('STR_TOOLTIP_RECOMMENDED_RANK', $language);
			$recRank = explode('%0', $RecommRank);
			$recommend_rank = '<p class="recommend_rank">' . $recRank[0] . translate('STR_Abyssrank_dark_18', $language) . $recRank[1] . '</p><dl class="property">';
		}elseif($row["recommend_rank"] == '17') {
			$RecommRank = translate('STR_TOOLTIP_RECOMMENDED_RANK', $language);
			$recRank = explode('%0', $RecommRank);
			$recommend_rank = '<p class="recommend_rank">' . $recRank[0] . translate('STR_Abyssrank_dark_17', $language) . $recRank[1] . '</p><dl class="property">';
		}elseif($row["recommend_rank"] == '16') {
			$RecommRank = translate('STR_TOOLTIP_RECOMMENDED_RANK', $language);
			$recRank = explode('%0', $RecommRank);
			$recommend_rank = '<p class="recommend_rank">' . $recRank[0] . translate('STR_Abyssrank_dark_16', $language) . $recRank[1] . '</p><dl class="property">';
		}elseif($row["recommend_rank"] == '15') {
			$RecommRank = translate('STR_TOOLTIP_RECOMMENDED_RANK', $language);
			$recRank = explode('%0', $RecommRank);
			$recommend_rank = '<p class="recommend_rank">' . $recRank[0] . translate('STR_Abyssrank_dark_15', $language) . $recRank[1] . '</p><dl class="property">';
		}elseif($row["recommend_rank"] == '14') {
			$RecommRank = translate('STR_TOOLTIP_RECOMMENDED_RANK', $language);
			$recRank = explode('%0', $RecommRank);
			$recommend_rank = '<p class="recommend_rank">' . $recRank[0] . translate('STR_Abyssrank_dark_14', $language) . $recRank[1] . '</p><dl class="property">';
		}elseif($row["recommend_rank"] == '13') {
			$RecommRank = translate('STR_TOOLTIP_RECOMMENDED_RANK', $language);
			$recRank = explode('%0', $RecommRank);
			$recommend_rank = '<p class="recommend_rank">' . $recRank[0] . translate('STR_Abyssrank_dark_13', $language) . $recRank[1] . '</p><dl class="property">';
		}elseif($row["recommend_rank"] == '12') {
			$RecommRank = translate('STR_TOOLTIP_RECOMMENDED_RANK', $language);
			$recRank = explode('%0', $RecommRank);
			$recommend_rank = '<p class="recommend_rank">' . $recRank[0] . translate('STR_Abyssrank_dark_12', $language) . $recRank[1] . '</p><dl class="property">';
		}elseif($row["recommend_rank"] == '11') {
			$RecommRank = translate('STR_TOOLTIP_RECOMMENDED_RANK', $language);
			$recRank = explode('%0', $RecommRank);
			$recommend_rank = '<p class="recommend_rank">' . $recRank[0] . translate('STR_Abyssrank_dark_11', $language) . $recRank[1] . '</p><dl class="property">';
		}elseif($row["recommend_rank"] == '10') {
			$RecommRank = translate('STR_TOOLTIP_RECOMMENDED_RANK', $language);
			$recRank = explode('%0', $RecommRank);
			$recommend_rank = '<p class="recommend_rank">' . $recRank[0] . translate('STR_Abyssrank_dark_10', $language) . $recRank[1] . '</p><dl class="property">';
		}elseif($row["recommend_rank"] == '9') {
			$RecommRank = translate('STR_TOOLTIP_RECOMMENDED_RANK', $language);
			$recRank = explode('%0', $RecommRank);
			$recommend_rank = '<p class="recommend_rank">' . $recRank[0] . translate('STR_Abyssrank_dark_09', $language) . $recRank[1] . '</p><dl class="property">';
		}elseif($row["recommend_rank"] == '8') {
			$RecommRank = translate('STR_TOOLTIP_RECOMMENDED_RANK', $language);
			$recRank = explode('%0', $RecommRank);
			$recommend_rank = '<p class="recommend_rank">' . $recRank[0] . translate('STR_Abyssrank_dark_08', $language) . $recRank[1] . '</p><dl class="property">';
		}elseif($row["recommend_rank"] == '7') {
			$RecommRank = translate('STR_TOOLTIP_RECOMMENDED_RANK', $language);
			$recRank = explode('%0', $RecommRank);
			$recommend_rank = '<p class="recommend_rank">' . $recRank[0] . translate('STR_Abyssrank_dark_07', $language) . $recRank[1] . '</p><dl class="property">';
		}elseif($row["recommend_rank"] == '6') {
			$RecommRank = translate('STR_TOOLTIP_RECOMMENDED_RANK', $language);
			$recRank = explode('%0', $RecommRank);
			$recommend_rank = '<p class="recommend_rank">' . $recRank[0] . translate('STR_Abyssrank_dark_06', $language) . $recRank[1] . '</p><dl class="property">';
		}elseif($row["recommend_rank"] == '5') {
			$RecommRank = translate('STR_TOOLTIP_RECOMMENDED_RANK', $language);
			$recRank = explode('%0', $RecommRank);
			$recommend_rank = '<p class="recommend_rank">' . $recRank[0] . translate('STR_Abyssrank_dark_05', $language) . $recRank[1] . '</p><dl class="property">';
		}elseif($row["recommend_rank"] == '4') {
			$RecommRank = translate('STR_TOOLTIP_RECOMMENDED_RANK', $language);
			$recRank = explode('%0', $RecommRank);
			$recommend_rank = '<p class="recommend_rank">' . $recRank[0] . translate('STR_Abyssrank_dark_04', $language) . $recRank[1] . '</p><dl class="property">';
		}elseif($row["recommend_rank"] == '3') {
			$RecommRank = translate('STR_TOOLTIP_RECOMMENDED_RANK', $language);
			$recRank = explode('%0', $RecommRank);
			$recommend_rank = '<p class="recommend_rank">' . $recRank[0] . translate('STR_Abyssrank_dark_03', $language) . $recRank[1] . '</p><dl class="property">';
		}elseif($row["recommend_rank"] == '2') {
			$RecommRank = translate('STR_TOOLTIP_RECOMMENDED_RANK', $language);
			$recRank = explode('%0', $RecommRank);
			$recommend_rank = '<p class="recommend_rank">' . $recRank[0] . translate('STR_Abyssrank_dark_02', $language) . $recRank[1] . '</p><dl class="property">';
		}elseif($row["recommend_rank"] == '1') {
			$RecommRank = translate('STR_TOOLTIP_RECOMMENDED_RANK', $language);
			$recRank = explode('%0', $RecommRank);
			$recommend_rank = '<p class="recommend_rank">' . $recRank[0] . translate('STR_Abyssrank_dark_01', $language) . $recRank[1] . '</p><dl class="property">';
		}else {
			$recommend_rank = '';
		}
		
		
		
		
		
		if($row["option_slot_bonus"] >= 1) {
			
			$manaimg = str_repeat('<img src="https://aionpowerbook.com/img/manaslot.png"> ', $row['option_slot_bonus']);
			
			$slot_bonus = '+ ' . $manaimg;
		}else {
			$slot_bonus = '';
		}
		
		
		if($row['option_slot_value'] >= 1) {
			
			$manaimg = str_repeat('<img src="https://aionpowerbook.com/img/manaslot.png"> ', $row['option_slot_value']);
			
			$manastoneSlots .= '<div class="wrap weapon_enchant"><dl class="enchant"><dt class="rmanastone">' . translate('STR_TOOLTIP_NOTICE_OPTION', $language) . '</dt><dd class="enchantstone_slot">' . $manaimg . $slot_bonus . '</dd></dl></div>';
		}else {
			$manastoneSlots = '';
		}
		
		if($row['option_slot_max'] >= 1) {
			
			$manaimg = str_repeat('<img src="https://aionpowerbook.com/img/manaunlock.png"> ', $row['option_slot_max']); 
			
			$manastoneSlotsNew .= '<div class="wrap weapon_enchant"><dl class="enchant"><dt class="rmanastone">Max ' . translate('STR_TOOLTIP_NOTICE_OPTION', $language) . '</dt><dd class="enchantstone_slot">' . $manaimg . '</dd></dl></div>';
		}else {
			$manastoneSlotsNew = '';
		}
		
		
		
		
		
		
		//6.0 stats
		if($max_hp >= 1) {
			$newbasicstats .= '<dt>' . translate('STR_HP', $language) . '</dt><dd class="max_hp">' . $max_hp . '</dd>';
		}else {
			$newbasicstats .= '';
		}
		
		if($row["max_mp"] >= 1) {
			$newbasicstats .= '<dt>' . translate('STR_MP', $language) . '</dt><dd class="max_mp">' . $max_mp . '</dd>';
		}else {
			$newbasicstats .= '';
		}
		
		if($physical_power_boost >= 1) {
			$newbasicstats .= '<dt>' . translate('STR_PHYSICAL_POWER_BOOST', $language) . '</dt><dd class="Physical Attack">' . $physical_power_boost . '</dd>';
		}else {
			$newbasicstats .= '';
		}	
		if($magical_power_boost >= 1) {
			$newbasicstats .= '<dt>' . translate('STR_MAGICAL_POWER_BOOST', $language) . '</dt><dd class="Magical Attack">' . $magical_power_boost . '</dd>';
		}else {
			$newbasicstats .= '';
		}
		if($physical_power_boost_resist >= 1) {
			$newbasicstats .= '<dt>' . translate('STR_PHYSICAL_POWER_BOOST_RESIST', $language) . '</dt><dd class="Physical Defence">' . $physical_power_boost_resist . '</dd>';
		}else {
			$newbasicstats .= '';
		}		
		if($magical_power_boost_resist >= 1) {
			$newbasicstats .= '<dt>' . translate('STR_MAGICAL_POWER_BOOST_RESIST', $language) . '</dt><dd class="Magical Defence">' . $magical_power_boost_resist . '</dd>';
		}else {
			$newbasicstats .= '';
		}
		
		if($row["block"] >= 1) {
			$newbasicstats .= '<dt>' . translate('STR_BLOCK', $language) . '</dt><dd class="block">' . $block . '</dd>';
		}else {
			$newbasicstats .= '';
		}	
		if($row["magical_hit_accuracy"] >= 1) {
			$newbasicstats .= '<dt>' . translate('STR_MAGICAL_HIT_ACCURACY', $language) . '</dt><dd class="magical_hit_accuracy">' . $magical_hit_accuracy . '</dd>';
		}else {
			$newbasicstats .= '';
		}
		if($row["parry"] >= 1) {
			$newbasicstats .= '<dt>' . translate('STR_PARRY', $language) . '</dt><dd class="parry">' . $parry . '</dd>';
		}else {
			$newbasicstats .= '';
		}
		if($row["hit_accuracy"] >= 1) {
			$newbasicstats .= '<dt>' . translate('STR_TOOLTIP_SKILL_STAT_HITACCURACY', $language) . '</dt><dd class="hit_accuracy">' . $hit_accuracy . '</dd>';
		}else {
			$newbasicstats .= '';
		}
		if($row["magical_defend"] >= 1) {
			$newbasicstats .= '<dt>' . translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_NEW_DEFENCE', $language) . '</dt><dd class="magical_defend">' . $magical_defend . '</dd>';
		}else {
			$newbasicstats .= '';
		}
		if($row["magical_skill_boost_resist"] >= 1) {
			$newbasicstats .= '<dt>' . translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_SKILL_BOOST_RESIST', $language) . '</dt><dd class="magical_skill_boost_resist">' . $magical_skill_boost_resist . '</dd>';
		}else {
			$newbasicstats .= '';
		}
		if($row["magical_resist"] >= 1) {
			$newbasicstats .= '<dt>' . translate('STR_MAGIC_DEFENSE', $language) . '</dt><dd class="magical_resist">' . $magical_resist . '</dd>';
		}else {
			$newbasicstats .= '';
		}
		
		if($row["physical_critical_reduce_rate"] >= 1) {
			$newbasicstats .= '<dt>' . translate('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_REDUCE_RATE', $language) . '</dt><dd class="physical_critical_reduce_rate">' . $physical_critical_reduce_rate . '</dd>';
		}else {
			$newbasicstats .= '';
		}
		
		if($row["physical_defend"] >= 1) {
			$newbasicstats .= '<dt>' . translate('STR_DEFEND_PHYSICAL', $language) . '</dt><dd class="physical_defend">' . $physical_defend . '</dd>';
		}else {
			$newbasicstats .= '';
		}
		
		if($row["dodge"] >= 1) {
			$newbasicstats .= '<dt>' . translate('STR_DODGE', $language) . '</dt><dd class="dodge">' . $dodge . '</dd>';
		}else {
			$newbasicstats .= '';
		}
		
		if ($newbasicstats != NULL) {
			$armorBasicStart = '<div class="wrap armor_property"><dl class="property">';
			$armorBasicEnd = '</div>';
		}
		


		
		
		
		
		
		
		
		if($row["attack_type"] == 'physical') {
			$attackType = '<dt attacktype>' . translate('STR_ATTACK', $language) . '</dt><dd class="damage"><span class="min_damage">' . $min_damage . '</span> - <span class="max_damage">' . $max_damage . '</span></dd>';
			$atkType = '';
			if ($critical >= 1){
			$critType = '<dt crit_type>' . translate('STR_CRITICAL', $language) . '</dt><dd class="critical">' . $critical . '</dd>';
			}
		}elseif($row["attack_type"] == 'magical_water') {
			$attackType = '<dt attacktype>' . translate('STR_TOOLTIP_SKILL_STAT_MAGATTACK', $language) . '</dt><dd class="damage"><span class="min_damage">' . $min_damage . '</span> - <span class="max_damage">' . $max_damage . '</span></dd>';
			$atkType = ' (' . translate('STR_TOOLTIP_MAGICALWATER', $language) . ')';
			if ($critical >= 1){
			$critType = '<dt crit_type>' . translate('STR_TOOLTIP_SKILL_STAT_MAGCRITICAL', $language) . '</dt><dd class="critical">' . $critical . '</dd>';
			}
		}elseif($row["attack_type"] == 'magical_fire') {
			$attackType = '<dt attacktype>' . translate('STR_TOOLTIP_SKILL_STAT_MAGATTACK', $language) . '</dt><dd class="damage"><span class="min_damage">' . $min_damage . '</span> - <span class="max_damage">' . $max_damage . '</span></dd>';
			$atkType = ' (' . translate('STR_TOOLTIP_MAGICALFIRE', $language) . ')';
			if ($critical >= 1){
			$critType = '<dt crit_type>' . translate('STR_TOOLTIP_SKILL_STAT_MAGCRITICAL', $language) . '</dt><dd class="critical">' . $critical . '</dd>';
			}
		}elseif($row["attack_type"] == 'magical_earth') {
			$attackType = '<dt attacktype>' . translate('STR_TOOLTIP_SKILL_STAT_MAGATTACK', $language) . '</dt><dd class="damage"><span class="min_damage">' . $min_damage . '</span> - <span class="max_damage">' . $max_damage . '</span></dd>';
			$atkType = ' (' . translate('STR_TOOLTIP_MAGICALEARTH', $language) . ')';
			if ($critical >= 1){
			$critType = '<dt crit_type>' . translate('STR_TOOLTIP_SKILL_STAT_MAGCRITICAL', $language) . '</dt><dd class="critical">' . $critical . '</dd>';
			}
		}
		else {
			$attackType = '';
			$atkType = '';
		}		
		
		//			weapon's speed		//
		if($row["attack_delay"] <= 1200) {
			$weapon_speed = translate('STR_TOOLTIP_ATKDELAY_FAST', $language);
			$weaponHit = explode('%0', $weapon_speed);
			$weaponSpeed = '<p class="type_attackdelay">' . $weaponHit[0] . $hit_count . $weaponHit[1] . $atkType . '</p><dl class="property">';
		}elseif($row["attack_delay"] <= 1500 & $row["attack_delay"] >= 1300) {
			$weapon_speed = translate('STR_TOOLTIP_ATKDELAY_NORMAL', $language);
			$weaponHit = explode('%0', $weapon_speed);
			$weaponSpeed = '<p class="type_attackdelay">' . $weaponHit[0] . $hit_count . $weaponHit[1] . $atkType .'</p><dl class="property">';
		}elseif($row["attack_delay"] <= 2200 & $row["attack_delay"] >= 1800) {
			$weapon_speed = translate('STR_TOOLTIP_ATKDELAY_SLOW', $language);
			$weaponHit = explode('%0', $weapon_speed);
			$weaponSpeed = '<p class="type_attackdelay">' . $weaponHit[0] . $hit_count . $weaponHit[1] . $atkType .'</p><dl class="property">';
		}elseif($row["attack_delay"] <= 2800 & $row["attack_delay"] >= 2400) {
			$weapon_speed = translate('STR_TOOLTIP_ATKDELAY_VERYSLOW', $language);
			$weaponHit = explode('%0', $weapon_speed);
			$weaponSpeed = '<p class="type_attackdelay">' . $weaponHit[0] . $hit_count . $weaponHit[1] . $atkType .'</p><dl class="property">';
		}else {
			$weapon_speed = '';
		}
		//			weapon's speed		//			
		
		//			bonus maximum enchantment		//
		if($row["max_enchant_bonus"] >= 1) {
			$ench_level_bonus = '+' . $row["max_enchant_bonus"];
		}else {
			$ench_level_bonus = '';
		}
		//			bonus maximum enchantment		//
		
		
include 'include/restrictions.php';		
		
		//								Additional Stats								//


include 'include/maptemplate.php';		

        $attributeHtml = '';

        foreach ($row as $fieldName => $fieldValue) {
            if (!preg_match('/^bonus_attr[0-9]+$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $attributeHtml .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($attributeHtml)) {
            $additionalStats .= '<div class="wrap weapon_property_bonus" style=""><dl>' . $attributeHtml . '</dl></div>';
        }
		
		
		
		
		
		//			chargeOne (2)			//
		$choneattributeHtml = '';

        foreach ($row as $fieldName => $fieldValue) {
            if (!preg_match('/^bonus_attr_a[0-9]+$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $choneattributeHtml .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($choneattributeHtml) & $row['charge_way'] == '2') {
			$chargeType = translate('STR_TOOLTIP_CHARGE2_VALUE', $language);
			$chanrge = explode('%0', $chargeType);
            $chargeOne .= '<div class="wrap charge_desc"><p class="charge_level">' . $chanrge[0] . '1)</p><dl class="property">' . $choneattributeHtml . '</dl></div>';
        }
		//			chargeTwo (2)			//
		$chtwoattributeHtml = '';

        foreach ($row as $fieldName => $fieldValue) {
            if (!preg_match('/^bonus_attr_b[0-9]+$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $chtwoattributeHtml .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($chtwoattributeHtml) & $row['charge_way'] == '2') {
			$chargeType = translate('STR_TOOLTIP_CHARGE2_VALUE', $language);
			$chanrge = explode('%0', $chargeType);
            $chargeOne .= '<div class="wrap charge_desc"><p class="charge_level">' . $chanrge[0] . '2)</p><dl class="property">' . $chtwoattributeHtml . '</dl></div>';
        }
		//			chargeOne (1)			//
		$condoneattributeHtml = '';

        foreach ($row as $fieldName => $fieldValue) {
            if (!preg_match('/^bonus_attr_a[0-9]+$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $condoneattributeHtml .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($condoneattributeHtml) & $row['charge_way'] == '1') {
			$chargeType = translate('STR_TOOLTIP_CHARGE1_VALUE', $language);
			$chanrge = explode('%0', $chargeType);
            $chargeOne .= '<div class="wrap charge_desc"><p class="charge_level">' . $chanrge[0] . '1)</p><dl class="property">' . $condoneattributeHtml . '</dl></div>';
        }
		//			chargeTwo (1)			//
		$contwoattributeHtml = '';

        foreach ($row as $fieldName => $fieldValue) {
            if (!preg_match('/^bonus_attr_b[0-9]+$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $contwoattributeHtml .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($contwoattributeHtml) & $row['charge_way'] == '1') {
			$chargeType = translate('STR_TOOLTIP_CHARGE1_VALUE', $language);
			$chanrge = explode('%0', $chargeType);
            $chargeOne .= '<div class="wrap charge_desc"><p class="charge_level">' . $chanrge[0] . '2)</p><dl class="property">' . $contwoattributeHtml . '</dl></div>';
        }		
		
		
		if ($random_option_name != NULL){
			$RealrandomStatsfinal = RealrandomStats($random_option_name , $language, 'compare');
		}
		if ($random_option_set != NULL && $random_option_name == null){
			$randomStatsfixed = randomStats($random_option_set , $language, 'client_item_random_option');
		}
		
		


		//								Additional Stats								//
    }
// end of while //



		// item type, normal, daevanion, balic, abyss //
        if($item_type == 'normal') {
            $itemtypetwo= '';
        }
        elseif($item_type == 'abyss'){
            $itemtypetwo= '<a href="Abyss">' . translate('STR_ITEMTYPE_ABYSS', $language) . '</a> ';
        }
		elseif($item_type == 'draconic'){
            $itemtypetwo= '<a href="Balic">' . translate('STR_ITEMTYPE_DRACONIC', $language) . '</a> ';
        }
		elseif($item_type == 'devanion'){
            $itemtypetwo= '<a href="Daevanion">' . translate('STR_ITEMTYPE_DEVANION', $language) . '</a> ';
        }else {
            $itemtypetwo = '';
        } 
		
		// 				item type				 //


		//				tooltip type             	//
        if($tooltip_type == '2') {
            $tooltiptype= '<div class="imtip2"/></div>';
        }
		elseif($tooltip_type == '3'){
            $tooltiptype= '<div class="imtip1"/></div>';
        }
        elseif($tooltip_type == '1'){
            $tooltiptype= '<div class="imtip1"/></div>';
        }else {
            $tooltiptype = '';
        }
		//				tooltip type				//

// id decrtiption is for food, replace variables.
if ($localization_desc != NULL) {
if (($id >= 160000001) && ($id <= 160039999) or ($id >= 162000001) && ($id <= 162009999) or ($id >= 164000001) && ($id <= 164029999) or ($id >= 160040000) && ($id <= 160049999) ) {	
			$localization_desc_processed = descriptionSkill($activation_skill, $activation_level, $localization_desc, $language);
}else {
			$itemdesc = strtr($localization_desc, array(
					"<" => '&lt;',
					"[%gchar:warn_attr_adj]" => '<img src="https://aionpowerbook.com/images/additionaldetails.png" >',				
				));
            $localization_desc_processed = '<div class="wrap basicitem_desc" style=""><p class="desc">' . $itemdesc . '</p></div>';
}
}else {
			$localization_desc_processed = '';
}




if ($cooldown > 0) {
	
	
	if ($cooldown < 60000){
		$usecooldown = '<div class="wrap basicitem_use_delay" style=""><dl class="use_delay"><dt>'.translate('STR_ITEM_COOLING_TIME', $language).'</dt><dd class="use_delay">'.$cooldown/1000 . translate('STR_SECOND', $language) . '</dd></dl></div>';
	}elseif ($cooldown >= 60000){
		$usecooldown = '<div class="wrap basicitem_use_delay" style=""><dl class="use_delay"><dt>'.translate('STR_ITEM_COOLING_TIME', $language).'</dt><dd class="use_delay">'.$cooldown/60000 . translate('STR_MINUTE', $language) . '</dd></dl></div>';
	}else {
		$usecooldown = '<div class="wrap basicitem_use_delay" style=""><dl class="use_delay"><dt>'.translate('STR_ITEM_COOLING_TIME', $language).'</dt><dd class="use_delay">Error - please report</dd></dl></div>';
	}
}



if ($magical_skill_boost >= 1 ){
$basicmagicboost = '<dt>' . translate('STR_MAGICAL_SKILL_BOOST', $language) . '</dt><dd  class="magical_skill_boost">' . $magical_skill_boost . '</dd>';
}else {
	$basicmagicboost = '';
}
if ($parry >= 1) {
	$basicparry = '<dt>' . translate('STR_PARRY', $language) . '</dt><dd  class="parray">' . $parry . '</dd>';
}else {
	$basicparry = '';
}



//				ITEM TYPE					//
    if (($id >= 100000001) && ($id <= 100100000)) {
		$objectType = '_weapon';
        $itemtype= 'Sword';
		$locaitemtype = translate('STR_TOOLTIP_SWORD', $language);
        
        $widget = "{{#Widget:Sword_" . $quality . "|escape:'html'}}";
        
        
		$itemRestrictions .= $no_enchant;
		$itemRestrictions .= $max_authorize;
		$itemRestrictions .= $exceed_enchant;
		$itemRestrictions .= $canEvolve;
		//			basic attributes		//
		$basicStats .= '<div class="wrap weapon_property">';
		$basicStats .= $weaponSpeed;
		$basicStats .= $attackType;
		$basicStats .= '<dt>' . translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language) . '</dt><dd class="attack_delay">' . $weapSpeedNumber . '</dd>';
		
		$basicStats .= $critType;
		
		$basicStats .= $basicmagicboost;
		
		$basicStats .= $newbasicstats;
		$basicStats .= '</dl></div>';
		//			basic attributes		//
		$enchantmentLevel = $maximumEnch;
		$availableLeveleq = $availableLevel;
		
    }
    elseif (($id >= 100100001) && ($id <= 100199999)) {
		$objectType = '_weapon';
        $itemtype= 'Mace';
		$locaitemtype = translate('STR_TOOLTIP_MACE', $language);
        
        $widget = "{{#Widget:Mace_" . $quality . "|escape:'html'}}";
        
        
		$itemRestrictions .= $no_enchant;
		$itemRestrictions .= $max_authorize;
		$itemRestrictions .= $exceed_enchant;
		$itemRestrictions .= $canEvolve;
		
		//			basic attributes		//
		$basicStats .= '<div class="wrap weapon_property">';
		$basicStats .= $weaponSpeed;
		$basicStats .= $attackType;
		$basicStats .= '<dt>' . translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language) . '</dt><dd class="attack_delay">' . $weapSpeedNumber . '</dd>';
		
		$basicStats .= $critType;
		
		$basicStats .= $basicmagicboost;
		
		$basicStats .= $newbasicstats;
		$basicStats .= '</dl></div>';
		//			basic attributes		//
		
		$enchantmentLevel = $maximumEnch;
		$availableLeveleq = $availableLevel;
    }
    elseif (($id >= 100200001) && ($id <= 100299999)) {
		$objectType = '_weapon';
        $itemtype= 'Dagger';
		$locaitemtype = translate('STR_TOOLTIP_DAGGER', $language);
        
        $widget = "{{#Widget:Dagger_" . $quality . "|escape:'html'}}";
        
        
		$itemRestrictions .= $no_enchant;
		$itemRestrictions .= $max_authorize;
		$itemRestrictions .= $exceed_enchant;
		$itemRestrictions .= $canEvolve;
		
		//			basic attributes		//
		$basicStats .= '<div class="wrap weapon_property">';
		$basicStats .= $weaponSpeed;
		$basicStats .= $attackType;
		$basicStats .= '<dt>' . translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language) . '</dt><dd class="attack_delay">' . $weapSpeedNumber . '</dd>';
		
		$basicStats .= $critType;
		
		$basicStats .= $basicmagicboost;
		
		$basicStats .= $newbasicstats;
		$basicStats .= '</dl></div>';
		//			basic attributes		//
		
		$enchantmentLevel = $maximumEnch;
		$availableLeveleq = $availableLevel;
    }
    elseif (($id >= 100500001) && ($id <= 100599999)) {
		$objectType = '_weapon';
        $itemtype= 'Orb';
		$locaitemtype = translate('STR_TOOLTIP_ORB', $language);
        
        $widget = "{{#Widget:Orb_" . $quality . "|escape:'html'}}";
        
        
		$itemRestrictions .= $no_enchant;
		$itemRestrictions .= $composite_weapon;
		$itemRestrictions .= $max_authorize;
		$itemRestrictions .= $exceed_enchant;
		$itemRestrictions .= $canEvolve;
		
		//			basic attributes		//
		$basicStats .= '<div class="wrap weapon_property">';
		$basicStats .= $weaponSpeed;
		$basicStats .= $attackType;
		$basicStats .= '<dt>' . translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language) . '</dt><dd class="attack_delay">' . $weapSpeedNumber . '</dd>';
		
		$basicStats .= $critType;
		
		$basicStats .= $basicmagicboost;
		
		$basicStats .= $newbasicstats;
		$basicStats .= '</dl></div>';
		//			basic attributes		//
		
		$enchantmentLevel = $maximumEnch;
		$availableLeveleq = $availableLevel;
    }
    elseif (($id >= 100600001) && ($id <= 100699999)) {
		$objectType = '_weapon';
        $itemtype= 'Spellbook';
		$locaitemtype = translate('STR_TOOLTIP_BOOK', $language);
        
        $widget = "{{#Widget:Spellbook_" . $quality . "|escape:'html'}}";
        
        
		$itemRestrictions .= $no_enchant;
		$itemRestrictions .= $composite_weapon;
		$itemRestrictions .= $max_authorize;
		$itemRestrictions .= $exceed_enchant;
		$itemRestrictions .= $canEvolve;
		
		//			basic attributes		//
		$basicStats .= '<div class="wrap weapon_property">';
		$basicStats .= $weaponSpeed;
		$basicStats .= $attackType;
		$basicStats .= '<dt>' . translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language) . '</dt><dd class="attack_delay">' . $weapSpeedNumber . '</dd>';
		
		$basicStats .= $critType;
		
		$basicStats .= $basicmagicboost;
		
		$basicStats .= $newbasicstats;
		$basicStats .= '</dl></div>';
		//			basic attributes		//
		
		$enchantmentLevel = $maximumEnch;
		$availableLeveleq = $availableLevel;
    }
    elseif (($id >= 100900001) && ($id <= 100999999)) {
		$objectType = '_weapon';
        $itemtype= 'Greatsword';
		$locaitemtype = translate('STR_TOOLTIP_TWOHANDEDSWORD', $language);
        
        $widget = "{{#Widget:Greatsword_" . $quality . "|escape:'html'}}";
        
        
		$itemRestrictions .= $no_enchant;
		$itemRestrictions .= $composite_weapon;
		$itemRestrictions .= $max_authorize;
		$itemRestrictions .= $exceed_enchant;
		$itemRestrictions .= $canEvolve;
		
		//			basic attributes		//
		$basicStats .= '<div class="wrap weapon_property">';
		$basicStats .= $weaponSpeed;
		$basicStats .= $attackType;
		$basicStats .= '<dt>' . translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language) . '</dt><dd class="attack_delay">' . $weapSpeedNumber . '</dd>';
		
		$basicStats .= $critType;
		
		$basicStats .= $basicmagicboost;
		
		$basicStats .= $newbasicstats;
		$basicStats .= '</dl></div>';
		//			basic attributes		//
		
		$enchantmentLevel = $maximumEnch;
		$availableLeveleq = $availableLevel;
    }
    elseif (($id >= 101300001) && ($id <= 101399999)) {
		$objectType = '_weapon';
        $itemtype= 'Polearm';
		$locaitemtype = translate('STR_TOOLTIP_POLEARM', $language);
        
        $widget = "{{#Widget:Polearm_" . $quality . "|escape:'html'}}";
        
        
		$itemRestrictions .= $no_enchant;
		$itemRestrictions .= $composite_weapon;
		$itemRestrictions .= $max_authorize;
		$itemRestrictions .= $exceed_enchant;
		$itemRestrictions .= $canEvolve;
		
		//			basic attributes		//
		$basicStats .= '<div class="wrap weapon_property">';
		$basicStats .= $weaponSpeed;
		$basicStats .= $attackType;
		$basicStats .= '<dt>' . translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language) . '</dt><dd class="attack_delay">' . $weapSpeedNumber . '</dd>';
		
		$basicStats .= $critType;
		
		$basicStats .= $basicmagicboost;
		
		$basicStats .= $newbasicstats;
		$basicStats .= '</dl></div>';
		//			basic attributes		//
		
		$enchantmentLevel = $maximumEnch;
		$availableLeveleq = $availableLevel;

    }
    elseif (($id >= 101500001) && ($id <= 101599999)) {
		$objectType = '_weapon';
        $itemtype= 'Staff';
		$locaitemtype = translate('STR_TOOLTIP_STAFF', $language);
        
        $widget = "{{#Widget:Staff_" . $quality . "|escape:'html'}}";
        
        
		$itemRestrictions .= $no_enchant;
		$itemRestrictions .= $composite_weapon;
		$itemRestrictions .= $max_authorize;
		$itemRestrictions .= $exceed_enchant;
		$itemRestrictions .= $canEvolve;
		
		//			basic attributes		//
		$basicStats .= '<div class="wrap weapon_property">';
		$basicStats .= $weaponSpeed;
		$basicStats .= $attackType;
		$basicStats .= '<dt>' . translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language) . '</dt><dd class="attack_delay">' . $weapSpeedNumber . '</dd>';
		
		$basicStats .= $critType;
		
		$basicStats .= $basicmagicboost;
		
		$basicStats .= $newbasicstats;
		$basicStats .= '</dl></div>';
		//			basic attributes		//
		
		$enchantmentLevel = $maximumEnch;
		$availableLeveleq = $availableLevel;
    }
    elseif (($id >= 101700001) && ($id <= 101799999)) {
		$objectType = '_weapon';
        $itemtype= 'Bow';
		$locaitemtype = translate('STR_TOOLTIP_BOW', $language);
        
        $widget = "{{#Widget:Bow_" . $quality . "|escape:'html'}}";
        
        
		$itemRestrictions .= $no_enchant;
		$itemRestrictions .= $composite_weapon;
		$itemRestrictions .= $max_authorize;
		$itemRestrictions .= $exceed_enchant;
		$itemRestrictions .= $canEvolve;
		
		//			basic attributes		//
		$basicStats .= '<div class="wrap weapon_property">';
		$basicStats .= $weaponSpeed;
		$basicStats .= $attackType;
		$basicStats .= '<dt>' . translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language) . '</dt><dd class="attack_delay">' . $weapSpeedNumber . '</dd>';
		
		$basicStats .= $critType;
		
		$basicStats .= $basicmagicboost;
		
		$basicStats .= $newbasicstats;
		$basicStats .= '</dl></div>';
		//			basic attributes		//
		
		$enchantmentLevel = $maximumEnch;
		$availableLeveleq = $availableLevel;
    }
    elseif (($id >= 101800000) && ($id <= 101899999)) {
		$objectType = '_weapon';
        $itemtype= 'Aether Revolver';
		$locaitemtype = translate('STR_TOOLTIP_GUN', $language);
        
        $widget = "{{#Widget:Aether Revolver_" . $quality . "|escape:'html'}}";
        
        
		$itemRestrictions .= $no_enchant;
		$itemRestrictions .= $max_authorize;
		$itemRestrictions .= $exceed_enchant;
		$itemRestrictions .= $canEvolve;
		
		//			basic attributes		//
		$basicStats .= '<div class="wrap weapon_property">';
		$basicStats .= $weaponSpeed;
		$basicStats .= $attackType;
		$basicStats .= '<dt>' . translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language) . '</dt><dd class="attack_delay">' . $weapSpeedNumber . '</dd>';
		
		$basicStats .= $critType;
		
		$basicStats .= $basicmagicboost;
		
		$basicStats .= $newbasicstats;
		$basicStats .= '</dl></div>';
		//			basic attributes		//
		
		$enchantmentLevel = $maximumEnch;
		$availableLeveleq = $availableLevel;
    }
    elseif (($id >= 101900000) && ($id <= 101999999)) {
		$objectType = '_weapon';
        $itemtype= 'Aether Cannon';
		$locaitemtype = translate('STR_TOOLTIP_CANNON', $language);
        
        $widget = "{{#Widget:Aether Cannon_" . $quality . "|escape:'html'}}";
        
        
		$itemRestrictions .= $no_enchant;
		$itemRestrictions .= $composite_weapon;
		$itemRestrictions .= $max_authorize;
		$itemRestrictions .= $exceed_enchant;
		$itemRestrictions .= $canEvolve;
		
		//			basic attributes		//
		$basicStats .= '<div class="wrap weapon_property">';
		$basicStats .= $weaponSpeed;
		$basicStats .= $attackType;
		$basicStats .= '<dt>' . translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language) . '</dt><dd class="attack_delay">' . $weapSpeedNumber . '</dd>';
		
		$basicStats .= $critType;
		
		$basicStats .= $basicmagicboost;
		
		$basicStats .= $newbasicstats;
		$basicStats .= '</dl></div>';
		//			basic attributes		//
		
		$enchantmentLevel = $maximumEnch;
		$availableLeveleq = $availableLevel;
    }
    elseif (($id >= 102000000) && ($id <= 102099999)) {
		$objectType = '_weapon';
        $itemtype= 'Stringed Instrument';
		$locaitemtype = translate('STR_TOOLTIP_HARP', $language);
        
        $widget = "{{#Widget:Stringed Instrument_" . $quality . "|escape:'html'}}";
        
        
		$itemRestrictions .= $no_enchant;
		$itemRestrictions .= $composite_weapon;
		$itemRestrictions .= $max_authorize;
		$itemRestrictions .= $exceed_enchant;
		$itemRestrictions .= $canEvolve;
		
		//			basic attributes		//
		$basicStats .= '<div class="wrap weapon_property">';
		$basicStats .= $weaponSpeed;
		$basicStats .= $attackType;
		$basicStats .= '<dt>' . translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language) . '</dt><dd class="attack_delay">' . $weapSpeedNumber . '</dd>';
		
		$basicStats .= $critType;
		
		$basicStats .= $basicmagicboost;
		
		$basicStats .= $newbasicstats;
		$basicStats .= '</dl></div>';
		//			basic attributes		//
		
		$enchantmentLevel = $maximumEnch;
		$availableLeveleq = $availableLevel;
    }
    elseif (($id >= 102100000) && ($id <= 102199999)) {
		$objectType = '_weapon';
        $itemtype= 'Aether Key';
		$locaitemtype = translate('STR_TOOLTIP_KEYBLADE', $language);
                
        
		$itemRestrictions .= $no_enchant;
		$itemRestrictions .= $composite_weapon;
		$itemRestrictions .= $max_authorize;
		$itemRestrictions .= $exceed_enchant;
		$itemRestrictions .= $canEvolve;
		
		//			basic attributes		//
		$basicStats .= '<div class="wrap weapon_property">';
		$basicStats .= $weaponSpeed;
		$basicStats .= $attackType;
		$basicStats .= '<dt>' . translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language) . '</dt><dd class="attack_delay">' . $weapSpeedNumber . '</dd>';
		
		$basicStats .= $critType;
		
		$basicStats .= $basicmagicboost;
		
		$basicStats .= $newbasicstats;
		$basicStats .= '</dl></div>';
		//			basic attributes		//
		
		$enchantmentLevel = $maximumEnch;
		$availableLeveleq = $availableLevel;
    }
	elseif (($id >= 102200006) && ($id <= 102299999)) {
		$objectType = '_weapon';
        $itemtype= 'Spray';
		$locaitemtype = translate('STR_TOOLTIP_SPRAY', $language);


		$itemRestrictions .= $no_enchant;
		$itemRestrictions .= $composite_weapon;
		$itemRestrictions .= $max_authorize;
		$itemRestrictions .= $exceed_enchant;
		$itemRestrictions .= $canEvolve;
		
		//			basic attributes		//
		$basicStats .= '<div class="wrap weapon_property">';
		$basicStats .= $weaponSpeed;
		$basicStats .= $attackType;
		$basicStats .= '<dt>' . translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language) . '</dt><dd class="attack_delay">' . $weapSpeedNumber . '</dd>';
		
		$basicStats .= $critType;
		
		$basicStats .= $basicmagicboost;
		
		$basicStats .= $newbasicstats;
		$basicStats .= '</dl></div>';
		//			basic attributes		//
		
		$enchantmentLevel = $maximumEnch;
		$availableLeveleq = $availableLevel;
    }
    elseif (($id >= 110600003) && ($id <= 110669999)) {
		$objectType = '_weapon';
        $itemtype= 'Plate';
		$locaitemtype = translate('STR_PLATE', $language);
        
        
        
        $preview .= $armorpreview;
		$itemRestrictions .= $no_enchant;
		$itemRestrictions .= $max_authorize;
		$itemRestrictions .= $exceed_enchant;
		$itemRestrictions .= $canEvolve;
		
		//	basic stats	//
		$basicStats .= $armorBasicStart;
		$basicStats .= $armor_physical_defend;
		$basicStats .= $armor_magical_defend;
		$basicStats .= $armor_magical_resist;
		$basicStats .= $armor_max_hp;
		$basicStats .= $armor_physical_critical_reduce_rate;
		$basicStats .= $armor_magical_skill_boost_resist;
		$basicStats .= $armor_dodge;
		$basicStats .= $newbasicstats;
		$basicStats .= $armorBasicEnd;
		//	basic stats	//
		
		$enchantmentLevel = $maximumEnch;
		$availableLeveleq = $availableLevel;
    }
    elseif (($id >= 111600003) && ($id <= 111669999)) {
		$objectType = '_weapon';
        $itemtype= 'Plate';
		$locaitemtype = translate('STR_PLATE', $language);
        
        
        
        $preview .= $armorpreview;
		$itemRestrictions .= $no_enchant;
		$itemRestrictions .= $max_authorize;
		$itemRestrictions .= $exceed_enchant;
		$itemRestrictions .= $canEvolve;
		
		//	basic stats	//
		$basicStats .= $armorBasicStart;
		$basicStats .= $armor_physical_defend;
		$basicStats .= $armor_magical_defend;
		$basicStats .= $armor_magical_resist;
		$basicStats .= $armor_max_hp;
		$basicStats .= $armor_physical_critical_reduce_rate;
		$basicStats .= $armor_magical_skill_boost_resist;
		$basicStats .= $armor_dodge;
$basicStats .= $newbasicstats;

		
		$basicStats .= $newbasicstats;
		
		
		
		$basicStats .= $armorBasicEnd;
		//	basic stats	//
		
		$enchantmentLevel = $maximumEnch;
		$availableLeveleq = $availableLevel;
    }
    elseif (($id >= 112600003) && ($id <= 112669999)) {
		$objectType = '_weapon';
        $itemtype= 'Plate';
		$locaitemtype = translate('STR_PLATE', $language);
        
        
        
        $preview .= $armorpreview;
		$itemRestrictions .= $no_enchant;
		$itemRestrictions .= $max_authorize;
		$itemRestrictions .= $exceed_enchant;
		$itemRestrictions .= $canEvolve;
		
		//	basic stats	//
		$basicStats .= $armorBasicStart;
		$basicStats .= $armor_physical_defend;
		$basicStats .= $armor_magical_defend;
		$basicStats .= $armor_magical_resist;
		$basicStats .= $armor_max_hp;
		$basicStats .= $armor_physical_critical_reduce_rate;
		$basicStats .= $armor_magical_skill_boost_resist;
		$basicStats .= $armor_dodge;
$basicStats .= $newbasicstats;

		
		
		
		
		$basicStats .= $armorBasicEnd;
		//	basic stats	//
		
		$enchantmentLevel = $maximumEnch;
		$availableLeveleq = $availableLevel;
    }
    elseif (($id >= 113600003) && ($id <= 113669999)) {
		$objectType = '_weapon';
        $itemtype= 'Plate';
		$locaitemtype = translate('STR_PLATE', $language);
        
        
        
        $preview .= $armorpreview;
		$itemRestrictions .= $no_enchant;
		$itemRestrictions .= $max_authorize;
		$itemRestrictions .= $exceed_enchant;
		$itemRestrictions .= $canEvolve;
		
		//	basic stats	//
		$basicStats .= $armorBasicStart;
		$basicStats .= $armor_physical_defend;
		$basicStats .= $armor_magical_defend;
		$basicStats .= $armor_magical_resist;
		$basicStats .= $armor_max_hp;
		$basicStats .= $armor_physical_critical_reduce_rate;
		$basicStats .= $armor_magical_skill_boost_resist;
		$basicStats .= $armor_dodge;
$basicStats .= $newbasicstats;

		
		
		
		
		$basicStats .= $armorBasicEnd;
		//	basic stats	//
		
		$enchantmentLevel = $maximumEnch;
		$availableLeveleq = $availableLevel;
    }
    elseif (($id >= 114600005) && ($id <= 114669999)) {
		$objectType = '_weapon';
        $itemtype= 'Plate';
		$locaitemtype = translate('STR_PLATE', $language);
        
        
        
        $preview .= $armorpreview;
		$itemRestrictions .= $no_enchant;
		$itemRestrictions .= $max_authorize;
		$itemRestrictions .= $exceed_enchant;
		$itemRestrictions .= $canEvolve;
		
		//	basic stats	//
		$basicStats .= $armorBasicStart;
		$basicStats .= $armor_physical_defend;
		$basicStats .= $armor_magical_defend;
		$basicStats .= $armor_magical_resist;
		$basicStats .= $armor_max_hp;
		$basicStats .= $armor_physical_critical_reduce_rate;
		$basicStats .= $armor_magical_skill_boost_resist;
		$basicStats .= $armor_dodge;
$basicStats .= $newbasicstats;

		
		
		
		
		$basicStats .= $armorBasicEnd;
		//	basic stats	//
		
		$enchantmentLevel = $maximumEnch;
		$availableLeveleq = $availableLevel;
    }
    elseif (($id >= 110500001) && ($id <= 110559999)) {
		$objectType = '_weapon';
        $itemtype= 'Chain';
		$locaitemtype = translate('STR_CHAIN', $language);
        
        
        
        $preview .= $armorpreview;
		$itemRestrictions .= $no_enchant;
		$itemRestrictions .= $max_authorize;
		$itemRestrictions .= $exceed_enchant;
		$itemRestrictions .= $canEvolve;
		
		//	basic stats	//
		$basicStats .= $armorBasicStart;
		$basicStats .= $armor_physical_defend;
		$basicStats .= $armor_magical_defend;
		$basicStats .= $armor_magical_resist;
		$basicStats .= $armor_max_hp;
		$basicStats .= $armor_physical_critical_reduce_rate;
		$basicStats .= $armor_magical_skill_boost_resist;
		$basicStats .= $armor_dodge;
$basicStats .= $newbasicstats;

		
		
		
		
		$basicStats .= $armorBasicEnd;
		//	basic stats	//
		
		$enchantmentLevel = $maximumEnch;
		$availableLeveleq = $availableLevel;
    }
    elseif (($id >= 111500001) && ($id <= 111569999)) {
		$objectType = '_weapon';
        $itemtype= 'Chain';
		$locaitemtype = translate('STR_CHAIN', $language);
        
        
        
        $preview .= $armorpreview;
		$itemRestrictions .= $no_enchant;
		$itemRestrictions .= $max_authorize;
		$itemRestrictions .= $exceed_enchant;
		$itemRestrictions .= $canEvolve;
		
		//	basic stats	//
		$basicStats .= $armorBasicStart;
		$basicStats .= $armor_physical_defend;
		$basicStats .= $armor_magical_defend;
		$basicStats .= $armor_magical_resist;
		$basicStats .= $armor_max_hp;
		$basicStats .= $armor_physical_critical_reduce_rate;
		$basicStats .= $armor_magical_skill_boost_resist;
		$basicStats .= $armor_dodge;
$basicStats .= $newbasicstats;

		
		
		
		
		$basicStats .= $armorBasicEnd;
		//	basic stats	//
		
		$enchantmentLevel = $maximumEnch;
		$availableLeveleq = $availableLevel;
    }
    elseif (($id >= 112500001) && ($id <= 112569999)) {
		$objectType = '_weapon';
        $itemtype= 'Chain';
		$locaitemtype = translate('STR_CHAIN', $language);
        
        
        
        $preview .= $armorpreview;
		$itemRestrictions .= $no_enchant;
		$itemRestrictions .= $max_authorize;
		$itemRestrictions .= $exceed_enchant;
		$itemRestrictions .= $canEvolve;
		
		//	basic stats	//
		$basicStats .= $armorBasicStart;
		$basicStats .= $armor_physical_defend;
		$basicStats .= $armor_magical_defend;
		$basicStats .= $armor_magical_resist;
		$basicStats .= $armor_max_hp;
		$basicStats .= $armor_physical_critical_reduce_rate;
		$basicStats .= $armor_magical_skill_boost_resist;
		$basicStats .= $armor_dodge;
$basicStats .= $newbasicstats;

		
		
		
		
		$basicStats .= $armorBasicEnd;
		//	basic stats	//
		
		$enchantmentLevel = $maximumEnch;
		$availableLeveleq = $availableLevel;
    }
    elseif (($id >= 113500001) && ($id <= 113569999)) {
		$objectType = '_weapon';
        $itemtype= 'Chain';
		$locaitemtype = translate('STR_CHAIN', $language);
        
        
        
        $preview .= $armorpreview;
		$itemRestrictions .= $no_enchant;
		$itemRestrictions .= $max_authorize;
		$itemRestrictions .= $exceed_enchant;
		$itemRestrictions .= $canEvolve;
		
		//	basic stats	//
		$basicStats .= $armorBasicStart;
		$basicStats .= $armor_physical_defend;
		$basicStats .= $armor_magical_defend;
		$basicStats .= $armor_magical_resist;
		$basicStats .= $armor_max_hp;
		$basicStats .= $armor_physical_critical_reduce_rate;
		$basicStats .= $armor_magical_skill_boost_resist;
		$basicStats .= $armor_dodge;
$basicStats .= $newbasicstats;

		
		
		
		
		$basicStats .= $armorBasicEnd;
		//	basic stats	//
		
		$enchantmentLevel = $maximumEnch;
		$availableLeveleq = $availableLevel;
    }
    elseif (($id >= 114500001) && ($id <= 114569999)) {
		$objectType = '_weapon';
        $itemtype= 'Chain';
		$locaitemtype = translate('STR_CHAIN', $language);
        
        
        
        $preview .= $armorpreview;
		$itemRestrictions .= $no_enchant;
		$itemRestrictions .= $max_authorize;
		$itemRestrictions .= $exceed_enchant;
		$itemRestrictions .= $canEvolve;
		
		//	basic stats	//
		$basicStats .= $armorBasicStart;
		$basicStats .= $armor_physical_defend;
		$basicStats .= $armor_magical_defend;
		$basicStats .= $armor_magical_resist;
		$basicStats .= $armor_max_hp;
		$basicStats .= $armor_physical_critical_reduce_rate;
		$basicStats .= $armor_magical_skill_boost_resist;
		$basicStats .= $armor_dodge;
$basicStats .= $newbasicstats;

		
		
		
		
		$basicStats .= $armorBasicEnd;
		//	basic stats	//
		
		$enchantmentLevel = $maximumEnch;
		$availableLeveleq = $availableLevel;
    }
    elseif (($id >= 110300005) && ($id <= 110369999)) {
		$objectType = '_weapon';
        $itemtype= 'Leather';
		$locaitemtype = translate('STR_LEATHER', $language);
        
        
        
        $preview .= $armorpreview;
		$itemRestrictions .= $no_enchant;
		$itemRestrictions .= $max_authorize;
		$itemRestrictions .= $exceed_enchant;
		$itemRestrictions .= $canEvolve;
		
		//	basic stats	//
		$basicStats .= $armorBasicStart;
		$basicStats .= $armor_physical_defend;
		$basicStats .= $armor_magical_defend;
		$basicStats .= $armor_magical_resist;
		$basicStats .= $armor_max_hp;
		$basicStats .= $armor_physical_critical_reduce_rate;
		$basicStats .= $armor_magical_skill_boost_resist;
		$basicStats .= $armor_dodge;
$basicStats .= $newbasicstats;

		
		
		
		
		$basicStats .= $armorBasicEnd;
		//	basic stats	//
		
		$enchantmentLevel = $maximumEnch;
		$availableLeveleq = $availableLevel;
    }
    elseif (($id >= 111300005) && ($id <= 111369999)) {
		$objectType = '_weapon';
        $itemtype= 'Leather';
		$locaitemtype = translate('STR_LEATHER', $language);
        
        
        
        $preview .= $armorpreview;
		$itemRestrictions .= $no_enchant;
		$itemRestrictions .= $max_authorize;
		$itemRestrictions .= $exceed_enchant;
		$itemRestrictions .= $canEvolve;
		
		//	basic stats	//
		$basicStats .= $armorBasicStart;
		$basicStats .= $armor_physical_defend;
		$basicStats .= $armor_magical_defend;
		$basicStats .= $armor_magical_resist;
		$basicStats .= $armor_max_hp;
		$basicStats .= $armor_physical_critical_reduce_rate;
		$basicStats .= $armor_magical_skill_boost_resist;
		$basicStats .= $armor_dodge;
$basicStats .= $newbasicstats;

		
		
		
		
		$basicStats .= $armorBasicEnd;
		//	basic stats	//
		
		$enchantmentLevel = $maximumEnch;
		$availableLeveleq = $availableLevel;
    }
    elseif (($id >= 112300005) && ($id <= 112369999)) {
		$objectType = '_weapon';
        $itemtype= 'Leather';
		$locaitemtype = translate('STR_LEATHER', $language);
        
        
        
        $preview .= $armorpreview;
		$itemRestrictions .= $no_enchant;
		$itemRestrictions .= $max_authorize;
		$itemRestrictions .= $exceed_enchant;
		$itemRestrictions .= $canEvolve;
		
		//	basic stats	//
		$basicStats .= $armorBasicStart;
		$basicStats .= $armor_physical_defend;
		$basicStats .= $armor_magical_defend;
		$basicStats .= $armor_magical_resist;
		$basicStats .= $armor_max_hp;
		$basicStats .= $armor_physical_critical_reduce_rate;
		$basicStats .= $armor_magical_skill_boost_resist;
		$basicStats .= $armor_dodge;
$basicStats .= $newbasicstats;

		
		
		
		
		$basicStats .= $armorBasicEnd;
		//	basic stats	//
		
		$enchantmentLevel = $maximumEnch;
		$availableLeveleq = $availableLevel;
    }
    elseif (($id >= 113300005) && ($id <= 113369999)) {
		$objectType = '_weapon';
        $itemtype= 'Leather';
		$locaitemtype = translate('STR_LEATHER', $language);
        
        
        
        $preview .= $armorpreview;
		$itemRestrictions .= $no_enchant;
		$itemRestrictions .= $max_authorize;
		$itemRestrictions .= $exceed_enchant;
		$itemRestrictions .= $canEvolve;
		
		//	basic stats	//
		$basicStats .= $armorBasicStart;
		$basicStats .= $armor_physical_defend;
		$basicStats .= $armor_magical_defend;
		$basicStats .= $armor_magical_resist;
		$basicStats .= $armor_max_hp;
		$basicStats .= $armor_physical_critical_reduce_rate;
		$basicStats .= $armor_magical_skill_boost_resist;
		$basicStats .= $armor_dodge;
$basicStats .= $newbasicstats;

		
		
		
		
		$basicStats .= $armorBasicEnd;
		//	basic stats	//
		
		$enchantmentLevel = $maximumEnch;
		$availableLeveleq = $availableLevel;
    }
    elseif (($id >= 114300005) && ($id <= 114369999)) {
		$objectType = '_weapon';
        $itemtype= 'Leather';
		$locaitemtype = translate('STR_LEATHER', $language);
        
        
        
        $preview .= $armorpreview;
		$itemRestrictions .= $no_enchant;
		$itemRestrictions .= $max_authorize;
		$itemRestrictions .= $exceed_enchant;
		$itemRestrictions .= $canEvolve;
		
		//	basic stats	//
		$basicStats .= $armorBasicStart;
		$basicStats .= $armor_physical_defend;
		$basicStats .= $armor_magical_defend;
		$basicStats .= $armor_magical_resist;
		$basicStats .= $armor_max_hp;
		$basicStats .= $armor_physical_critical_reduce_rate;
		$basicStats .= $armor_magical_skill_boost_resist;
		$basicStats .= $armor_dodge;
$basicStats .= $newbasicstats;

		
		
		
		
		$basicStats .= $armorBasicEnd;
		//	basic stats	//
		
		$enchantmentLevel = $maximumEnch;
		$availableLeveleq = $availableLevel;
    }
    elseif (($id >= 110100005) && ($id <= 110169999)) {
		$objectType = '_weapon';
        $itemtype= 'Cloth';
		$locaitemtype = translate('STR_ROBE', $language);
        
        
        
        $preview .= $armorpreview;
		$itemRestrictions .= $no_enchant;
		$itemRestrictions .= $max_authorize;
		$itemRestrictions .= $exceed_enchant;
		$itemRestrictions .= $canEvolve;
		
		//	basic stats	//
		$basicStats .= $armorBasicStart;
		$basicStats .= $armor_physical_defend;
		$basicStats .= $armor_magical_defend;
		$basicStats .= $armor_magical_resist;
		$basicStats .= $armor_max_hp;
		$basicStats .= $armor_physical_critical_reduce_rate;
		$basicStats .= $armor_magical_skill_boost_resist;
		$basicStats .= $armor_dodge;
$basicStats .= $newbasicstats;

		
		
		
		
		$basicStats .= $armorBasicEnd;
		//	basic stats	//
		
		$enchantmentLevel = $maximumEnch;
		$availableLeveleq = $availableLevel;
    }
    elseif (($id >= 111100005) && ($id <= 111169999)) {
		$objectType = '_weapon';
        $itemtype= 'Cloth';
		$locaitemtype = translate('STR_ROBE', $language);
        
        
        
        $preview .= $armorpreview;
		$itemRestrictions .= $no_enchant;
		$itemRestrictions .= $max_authorize;
		$itemRestrictions .= $exceed_enchant;
		$itemRestrictions .= $canEvolve;
		
		//	basic stats	//
		$basicStats .= $armorBasicStart;
		$basicStats .= $armor_physical_defend;
		$basicStats .= $armor_magical_defend;
		$basicStats .= $armor_magical_resist;
		$basicStats .= $armor_max_hp;
		$basicStats .= $armor_physical_critical_reduce_rate;
		$basicStats .= $armor_magical_skill_boost_resist;
		$basicStats .= $armor_dodge;
$basicStats .= $newbasicstats;

		
		
		
		
		$basicStats .= $armorBasicEnd;
		//	basic stats	//
		
		$enchantmentLevel = $maximumEnch;
		$availableLeveleq = $availableLevel;
    }
    elseif (($id >= 112100005) && ($id <= 112169999)) {
		$objectType = '_weapon';
        $itemtype= 'Cloth';
		$locaitemtype = translate('STR_ROBE', $language);
        
        
        
        $preview .= $armorpreview;
		$itemRestrictions .= $no_enchant;
		$itemRestrictions .= $max_authorize;
		$itemRestrictions .= $exceed_enchant;
		$itemRestrictions .= $canEvolve;
		
		//	basic stats	//
		$basicStats .= $armorBasicStart;
		$basicStats .= $armor_physical_defend;
		$basicStats .= $armor_magical_defend;
		$basicStats .= $armor_magical_resist;
		$basicStats .= $armor_max_hp;
		$basicStats .= $armor_physical_critical_reduce_rate;
		$basicStats .= $armor_magical_skill_boost_resist;
		$basicStats .= $armor_dodge;
$basicStats .= $newbasicstats;

		
		
		
		
		$basicStats .= $armorBasicEnd;
		//	basic stats	//
		
		$enchantmentLevel = $maximumEnch;
		$availableLeveleq = $availableLevel;
    }
    elseif (($id >= 113100005) && ($id <= 113169999)) {
		$objectType = '_weapon';
        $itemtype= 'Cloth';
		$locaitemtype = translate('STR_ROBE', $language);
        
        
        
        $preview .= $armorpreview;
		$itemRestrictions .= $no_enchant;
		$itemRestrictions .= $max_authorize;
		$itemRestrictions .= $exceed_enchant;
		$itemRestrictions .= $canEvolve;
		
		//	basic stats	//
		$basicStats .= $armorBasicStart;
		$basicStats .= $armor_physical_defend;
		$basicStats .= $armor_magical_defend;
		$basicStats .= $armor_magical_resist;
		$basicStats .= $armor_max_hp;
		$basicStats .= $armor_physical_critical_reduce_rate;
		$basicStats .= $armor_magical_skill_boost_resist;
		$basicStats .= $armor_dodge;
$basicStats .= $newbasicstats;

		
		
		
		
		$basicStats .= $armorBasicEnd;
		//	basic stats	//
		
		$enchantmentLevel = $maximumEnch;
		$availableLeveleq = $availableLevel;
    }
    elseif (($id >= 114100005) && ($id <= 114169999)) {
		$objectType = '_weapon';
        $itemtype= 'Cloth';
		$locaitemtype = translate('STR_ROBE', $language);
        
        
        
        $preview .= $armorpreview;
		$itemRestrictions .= $no_enchant;
		$itemRestrictions .= $max_authorize;
		$itemRestrictions .= $exceed_enchant;
		$itemRestrictions .= $canEvolve;
		
		//	basic stats	//
		$basicStats .= $armorBasicStart;
		$basicStats .= $armor_physical_defend;
		$basicStats .= $armor_magical_defend;
		$basicStats .= $armor_magical_resist;
		$basicStats .= $armor_max_hp;
		$basicStats .= $armor_physical_critical_reduce_rate;
		$basicStats .= $armor_magical_skill_boost_resist;
		$basicStats .= $armor_dodge;
$basicStats .= $newbasicstats;

		
		
		
		
		$basicStats .= $armorBasicEnd;
		//	basic stats	//
		
		$enchantmentLevel = $maximumEnch;
		$availableLeveleq = $availableLevel;
    }
    elseif (($id >= 110900001) && ($id <= 110969999)) {
		$objectType = '_weapon';
        $itemtype= 'Clothes';
		$locaitemtype = translate('STR_CLOTH', $language);
        
        
        
        $preview .= $armorpreview;
		$itemRestrictions .= $no_enchant;
		$itemRestrictions .= $max_authorize;
		$itemRestrictions .= $exceed_enchant;
		
		//	basic stats	//
		$basicStats .= $armorBasicStart;
		$basicStats .= $armor_physical_defend;
		$basicStats .= $armor_magical_defend;
		$basicStats .= $armor_magical_resist;
		$basicStats .= $armor_max_hp;
		$basicStats .= $armor_physical_critical_reduce_rate;
		$basicStats .= $armor_magical_skill_boost_resist;
		$basicStats .= $armor_dodge;
$basicStats .= $newbasicstats;

		
		
		
		
		$basicStats .= $armorBasicEnd;
		//	basic stats	//
		
		$enchantmentLevel = $maximumEnch;
		$availableLeveleq = $availableLevel;
    }
    elseif (($id >= 110000001) && ($id <= 110069999)) {
		$objectType = '_weapon';
        $itemtype= 'Clothes';
		$locaitemtype = translate('STR_CLOTH', $language);
        
        
        
        $preview .= $armorpreview;
		$itemRestrictions .= $no_enchant;
		$itemRestrictions .= $max_authorize;
		$itemRestrictions .= $exceed_enchant;
		
		//	basic stats	//
		$basicStats .= $armorBasicStart;
		$basicStats .= $armor_physical_defend;
		$basicStats .= $armor_magical_defend;
		$basicStats .= $armor_magical_resist;
		$basicStats .= $armor_max_hp;
		$basicStats .= $armor_physical_critical_reduce_rate;
		$basicStats .= $armor_magical_skill_boost_resist;
		$basicStats .= $armor_dodge;
$basicStats .= $newbasicstats;

		
		
		
		
		$basicStats .= $armorBasicEnd;
		//	basic stats	//
		
		$enchantmentLevel = $maximumEnch;
		$availableLeveleq = $availableLevel;
    }
    elseif (($id >= 111000001) && ($id <= 111069999)) {
		$objectType = '_weapon';
        $itemtype= 'Clothes';
		$locaitemtype = translate('STR_CLOTH', $language);
        
        
        
        $preview .= $armorpreview;
		$itemRestrictions .= $no_enchant;
		$itemRestrictions .= $max_authorize;
		$itemRestrictions .= $exceed_enchant;
		
		//	basic stats	//
		$basicStats .= $armorBasicStart;
		$basicStats .= $armor_physical_defend;
		$basicStats .= $armor_magical_defend;
		$basicStats .= $armor_magical_resist;
		$basicStats .= $armor_max_hp;
		$basicStats .= $armor_physical_critical_reduce_rate;
		$basicStats .= $armor_magical_skill_boost_resist;
		$basicStats .= $armor_dodge;
$basicStats .= $newbasicstats;

		
		
		
		
		$basicStats .= $armorBasicEnd;
		//	basic stats	//
		
		$enchantmentLevel = $maximumEnch;
		$availableLeveleq = $availableLevel;
    }
    elseif (($id >= 112000001) && ($id <= 112069999)) {
		$objectType = '_weapon';
        $itemtype= 'Clothes';
		$locaitemtype = translate('STR_CLOTH', $language);
        
		
        
        $preview .= $armorpreview;
		$itemRestrictions .= $no_enchant;
		$itemRestrictions .= $max_authorize;
		$itemRestrictions .= $exceed_enchant;
		
		//	basic stats	//
		$basicStats .= $armorBasicStart;
		$basicStats .= $armor_physical_defend;
		$basicStats .= $armor_magical_defend;
		$basicStats .= $armor_magical_resist;
		$basicStats .= $armor_max_hp;
		$basicStats .= $armor_physical_critical_reduce_rate;
		$basicStats .= $armor_magical_skill_boost_resist;
		$basicStats .= $armor_dodge;
$basicStats .= $newbasicstats;

		
		
		
		
		$basicStats .= $armorBasicEnd;
		//	basic stats	//
		
		$enchantmentLevel = $maximumEnch;
		$availableLeveleq = $availableLevel;
    }
    elseif (($id >= 113000001) && ($id <= 113069999)) {
		$objectType = '_weapon';
        $itemtype= 'Clothes';
		$locaitemtype = translate('STR_CLOTH', $language);
        
        
        
        $preview .= $armorpreview;
		$itemRestrictions .= $no_enchant;
		$itemRestrictions .= $max_authorize;
		$itemRestrictions .= $exceed_enchant;
		
		//	basic stats	//
		$basicStats .= $armorBasicStart;
		$basicStats .= $armor_physical_defend;
		$basicStats .= $armor_magical_defend;
		$basicStats .= $armor_magical_resist;
		$basicStats .= $armor_max_hp;
		$basicStats .= $armor_physical_critical_reduce_rate;
		$basicStats .= $armor_magical_skill_boost_resist;
		$basicStats .= $armor_dodge;
$basicStats .= $newbasicstats;

		
		
		
		
		$basicStats .= $armorBasicEnd;
		//	basic stats	//
		
		$enchantmentLevel = $maximumEnch;
		$availableLeveleq = $availableLevel;
    }
    elseif (($id >= 114000001) && ($id <= 114069999)) {
		$objectType = '_weapon';
        $itemtype= 'Clothes';
		$locaitemtype = translate('STR_CLOTH', $language);
        
        
        
        $preview .= $armorpreview;
		$itemRestrictions .= $no_enchant;
		$itemRestrictions .= $max_authorize;
		$itemRestrictions .= $exceed_enchant;
		
		//	basic stats	//
		$basicStats .= $armorBasicStart;
		$basicStats .= $armor_physical_defend;
		$basicStats .= $armor_magical_defend;
		$basicStats .= $armor_magical_resist;
		$basicStats .= $armor_max_hp;
		$basicStats .= $armor_physical_critical_reduce_rate;
		$basicStats .= $armor_magical_skill_boost_resist;
		$basicStats .= $armor_dodge;
$basicStats .= $newbasicstats;

		
		
		
		
		$basicStats .= $armorBasicEnd;
		//	basic stats	//
		
		$enchantmentLevel = $maximumEnch;
		$availableLeveleq = $availableLevel;
    }
    elseif (($id >= 115000011) && ($id <= 115069999)) {
		$objectType = '_weapon';
        $itemtype= 'Shield';
		$locaitemtype = translate('STR_TOOLTIP_SHIELD', $language);
        
        
        
        
		$itemRestrictions .= $no_enchant;
		$itemRestrictions .= $max_authorize;
		$itemRestrictions .= $exceed_enchant;
		
		//			basic attributes		//
		$basicStats .= '<div class="wrap armor_property">';
		$basicStats .= '<dt>' . translate('STR_BLOCK', $language) . '</dt><dd class="block">' . $block . '</dd>';
		$basicStats .= '<dt>' . translate('STR_ITEMINFO_DAMAGE_REDUCTION', $language) . '</dt><dd class="damage_reduce">' . $damage_reduce . '%</dd>';
		$basicStats .= $newbasicstats;
		$basicStats .= '</dl></div>';
		//			basic attributes		//		
		
		$enchantmentLevel = $maximumEnch;
		$availableLeveleq = $availableLevel;
    }
    elseif (($id >= 120000012) && ($id <= 120069999)) {
		$objectType = '_weapon';
        $itemtype= 'Earrings';
		$locaitemtype = translate('STR_TOOLTIP_EAR', $language);
        
       
		
		//	basic stats	//
		$basicStats .= $armorBasicStart;
		$basicStats .= $armor_physical_defend;
		$basicStats .= $armor_magical_defend;
		$basicStats .= $armor_magical_resist;
		$basicStats .= $armor_max_hp;
		$basicStats .= $armor_physical_critical_reduce_rate;
		$basicStats .= $armor_magical_skill_boost_resist;
		$basicStats .= $armor_dodge;
		$basicStats .= $armor_hit_accuracy;
		$basicStats .= $armor_parry;
		$basicStats .= $armor_magical_hit_accuracy;
		$basicStats .= $armor_block;
		$basicStats .= $newbasicstats;
		$basicStats .= $armorBasicEnd;
		//	basic stats	//
		
		$itemRestrictions .= $max_authorize;
		$availableLeveleq = $availableLevel;
    }
    elseif (($id >= 121000013) && ($id <= 121069999)) {
		$objectType = '_weapon';
        $itemtype= 'Necklace';
		$locaitemtype = translate('STR_TOOLTIP_NECK', $language);


				//	basic stats	//
		$basicStats .= $armorBasicStart;
		$basicStats .= $armor_physical_defend;
		$basicStats .= $armor_magical_defend;
		$basicStats .= $armor_magical_resist;
		$basicStats .= $armor_max_hp;
		$basicStats .= $armor_physical_critical_reduce_rate;
		$basicStats .= $armor_magical_skill_boost_resist;
		$basicStats .= $armor_dodge;
		$basicStats .= $armor_hit_accuracy;
		$basicStats .= $armor_parry;
		$basicStats .= $armor_magical_hit_accuracy;
		$basicStats .= $armor_block;
		$basicStats .= $newbasicstats;
		$basicStats .= $armorBasicEnd;
		//	basic stats	//
		$itemRestrictions .= $max_authorize;
		$availableLeveleq = $availableLevel;
    }
    elseif (($id >= 122000010) && ($id <= 122069999)) {
		$objectType = '_weapon';
        $itemtype= 'Ring';
		$locaitemtype = translate('STR_TOOLTIP_FINGER', $language);

				//	basic stats	//
		$basicStats .= $armorBasicStart;
		$basicStats .= $armor_physical_defend;
		$basicStats .= $armor_magical_defend;
		$basicStats .= $armor_magical_resist;
		$basicStats .= $armor_max_hp;
		$basicStats .= $armor_physical_critical_reduce_rate;
		$basicStats .= $armor_magical_skill_boost_resist;
		$basicStats .= $armor_dodge;
		$basicStats .= $armor_hit_accuracy;
		$basicStats .= $armor_parry;
		$basicStats .= $armor_magical_hit_accuracy;
		$basicStats .= $armor_block;
		$basicStats .= $newbasicstats;
		$basicStats .= $armorBasicEnd;
		//	basic stats	//
		$itemRestrictions .= $max_authorize;
		$availableLeveleq = $availableLevel;
    }
    elseif (($id >= 123000005) && ($id <= 123069999)) {
		$objectType = '_weapon';
        $itemtype= 'Belt';
		$locaitemtype = translate('STR_TOOLTIP_WAIST', $language);

				//	basic stats	//
		$basicStats .= $armorBasicStart;
		$basicStats .= $armor_physical_defend;
		$basicStats .= $armor_magical_defend;
		$basicStats .= $armor_magical_resist;
		$basicStats .= $armor_max_hp;
		$basicStats .= $armor_physical_critical_reduce_rate;
		$basicStats .= $armor_magical_skill_boost_resist;
		$basicStats .= $armor_dodge;
		$basicStats .= $armor_hit_accuracy;
		$basicStats .= $armor_parry;
		$basicStats .= $armor_magical_hit_accuracy;
		$basicStats .= $armor_block;
		$basicStats .= $newbasicstats;
		$basicStats .= $armorBasicEnd;
		//	basic stats	//
		$itemRestrictions .= $max_authorize;
		$availableLeveleq = $availableLevel;
    }
    elseif (($id >= 125000005) && ($id <= 125369999)) {
		$objectType = '_weapon';
        $itemtype= 'Head';
		$locaitemtype = translate('STR_TOOLTIP_HEAD', $language);
        
				//	basic stats	//
		$basicStats .= $armorBasicStart;
		$basicStats .= $armor_physical_defend;
		$basicStats .= $armor_magical_defend;
		$basicStats .= $armor_magical_resist;
		$basicStats .= $armor_max_hp;
		$basicStats .= $armor_physical_critical_reduce_rate;
		$basicStats .= $armor_magical_skill_boost_resist;
		$basicStats .= $armor_dodge;
		$basicStats .= $armor_hit_accuracy;
		$basicStats .= $armor_parry;
		$basicStats .= $armor_magical_hit_accuracy;
		$basicStats .= $armor_block;
		$basicStats .= $newbasicstats;
		$basicStats .= $armorBasicEnd;
		//	basic stats	//
		$itemRestrictions .= $max_authorize;
		$availableLeveleq = $availableLevel;
    }
    elseif (($id >= 140000001) && ($id <= 140009999)) {
		$objectType = '_weapon';
        $itemtype= 'Stigma Stone';
		$locaitemtype = translate('STR_TOOLTIP_STIGMA_STONE', $language);
		$itemRestrictions .= $enchant_stigma;
		$availableLeveleq = $availableLevel;

    }
    elseif (($id >= 141000001) && ($id <= 141009999)) {
		$objectType = '_weapon';
        $itemtype= 'Stigma Shard';
		$locaitemtype = translate('STR_TOOLTIP_STIGMA_SCROLL', $language);
		$availableLeveleq = $availableLevelother;

    }
    elseif (($id >= 150000001) && ($id <= 150009999)) {
		$objectType = '_weapon';
        $itemtype= 'Crafting Tools';
		$locaitemtype = translate('STR_TOOLTIP_MAKE_TOOL', $language);
		$availableLeveleq = $availableLevelother;
    }
    elseif (($id >= 152000001) && ($id <= 152089999)) {
		$objectType = '_weapon';
        $itemtype= 'Material Item';
		$locaitemtype = translate('STR_MATERIAL', $language);
		$availableLeveleq = $availableLevelother;
    }
    elseif (($id >= 152200001) && ($id <= 152299999)) {
		$objectType = '_weapon';
        $itemtype= 'Design';
		$locaitemtype = translate('STR_SALE_RECIPE', $language);
		$availableLeveleq = $availableLevelother;
		
		
		
    }
    elseif (($id >= 160000001) && ($id <= 160039999)) {
		$objectType = '_weapon';
        $itemtype= 'Food';
		$locaitemtype = translate('STR_SALE_SUPPLY_DISH', $language);
		$availableLeveleq = $availableLevelother;
    }
	elseif (($id >= 160040000) && ($id <= 160049999)) {
		$objectType = '_weapon';
        $itemtype= 'Transformation Potion';
		$locaitemtype = 'Transformation Potion';
		$availableLeveleq = $availableLevelother;
    }
    elseif (($id >= 162000001) && ($id <= 162009999)) {
		$objectType = '_weapon';
        $itemtype= 'Potion';
		$locaitemtype = translate('STR_SALE_SUPPLY_POTION', $language);
		$availableLeveleq = $availableLevelother;
    }
	elseif (($id >= 164000001) && ($id <= 164039999)) {
		$objectType = '_weapon';
        $itemtype= 'Scroll';
		$locaitemtype = translate('STR_SALE_SUPPLY_SCROLL', $language);
		$availableLeveleq = $availableLevelother;
    }
    elseif (($id >= 165030000) && ($id <= 165039999)) {
		$objectType = '_weapon';
        $itemtype= 'Evolution Aid';
		$locaitemtype = translate('STR_TOOLTIP_ITEM_EXCEED_TOOL', $language);
		$availableLeveleq = $availableLevelother;
    }
    elseif (($id >= 165020000) && ($id <= 165029999)) {
		$objectType = '_weapon';
        $itemtype= 'Wrapping utensils';
		$locaitemtype = translate('STR_TOOLTIP_ITEM_PACK_ITEM', $language);
		$availableLeveleq = $availableLevelother;
    }
    elseif (($id >= 166000001) && ($id <= 166029999)) {
		$objectType = '_weapon';
        $itemtype= 'Enchantment Stone';
		$locaitemtype = translate('STR_TOOLTIP_ITEM_ENCHANT', $language);
		$availableLeveleq = $availableLevelother;
    }
    elseif (($id >= 166030001) && ($id <= 166039999)) {
		$objectType = '_weapon';
        $itemtype= 'Enhancement Item';
		$locaitemtype = translate('STR_TOOLTIP_ITEM_AUTHORIZE', $language);
		$availableLeveleq = $availableLevelother;
    }
    elseif (($id >= 166050000) && ($id <= 166059999)) {
		$objectType = '_weapon';
        $itemtype= 'Idian';
		$locaitemtype = translate('STR_TOOLTIP_ITEM_POLISH', $language);
		$availableLeveleq = $availableLevelother;
    }
    elseif (($id >= 166200000) && ($id <= 166209999)) {
		$objectType = '_weapon';
        $itemtype= 'Re-identification Tool';
		$locaitemtype = translate('STR_TOOLTIP_ITEM_REIDENTIFY', $language);
		$availableLeveleq = $availableLevelother;
    }
    elseif (($id >= 166500000) && ($id <= 166500999)) {
		$objectType = '_weapon';
        $itemtype= 'Evolution Stone';
		$locaitemtype = translate('STR_TOOLTIP_ITEM_EXCEED_KEY', $language);
		$availableLeveleq = $availableLevelother;
    }
    elseif (($id >= 167000001) && ($id <= 167109999)) {
		$objectType = '_weapon';
        $itemtype= 'Manastone';
		$locaitemtype = translate('STR_TOOLTIP_ITEM_OPTION', $language);
		$availableLeveleq = $availableLevelother;
    }
    elseif (($id >= 168000001) && ($id <= 168059999)) {
		$objectType = '_weapon';
        $itemtype= 'Godstone';
		$locaitemtype = translate('STR_TOOLTIP_ITEM_PROC', $language);
		$availableLeveleq = $availableLevelother;
    }
    elseif (($id >= 169000001) && ($id <= 169009999)) {
		$objectType = '_weapon';
        $itemtype= 'Power Shard';
		$locaitemtype = translate('STR_TOOLTIP_ITEM_BATTERY', $language);
		$availableLeveleq = $availableLevelother;
    }
    elseif (($id >= 169100000) && ($id <= 169259999)) {
		$objectType = '_weapon';
        $itemtype= 'Dye';
		$locaitemtype = translate('STR_VENDOR_KIND_PAINT', $language);
		$availableLeveleq = $availableLevelother;
    }
    elseif (($id >= 169500001) && ($id <= 169509999)) {
		$objectType = '_weapon';
        $itemtype= 'Skill Book';
		$locaitemtype = translate('STR_TOOLTIP_SKILLBOOK', $language);
		$availableLeveleq = $availableLevelother;
    }
	elseif (($id >= 169600001) && ($id <= 169609999)) {
		$objectType = '_weapon';
        $itemtype= 'Emotion Card';
		$locaitemtype = 'Emotion Card';
		$availableLeveleq = $availableLevelother;
    }
	elseif (($id >= 169610000) && ($id <= 169619999)) {
		$objectType = '_weapon';
        $itemtype= 'Title Card';
		$locaitemtype = 'Title Card';
		$availableLeveleq = $availableLevelother;
		$RealrandomStatsfinal = titleStats($cash_title , $language, 'tool');
    }
    elseif (($id >= 170000000) && ($id <= 171139999)) {
		$objectType = '_weapon';
        $itemtype= 'Decorate';
		$locaitemtype = translate('STR_TOOLTIP_HOUSING', $language);
		$availableLeveleq = $availableLevelother;
		
		
    }
    elseif (($id >= 187000000) && ($id <= 187069999)) {
		$objectType = '_weapon';
        $itemtype= 'Wings';
		$locaitemtype = translate('STR_TOOLTIP_WING', $language);
        

		$itemRestrictions .= $no_enchant;
		
		$basicStats .= $armorBasicStart;
		$basicStats .= $newbasicstats;
		$basicStats .= $armorBasicEnd;
		
		$itemRestrictions .= $max_authorize;
		$itemRestrictions .= $exceed_enchant;
		$enchantmentLevel = $maximumEnch;
		$availableLeveleq = $availableLevel;
    }
    elseif (($id >= 187100000) && ($id <= 187109999)) {
		$objectType = '_weapon';
        $itemtype= 'Feather ornament';
		
		$basicStats .= $armorBasicStart;
		$basicStats .= $newbasicstats;
		$basicStats .= $armorBasicEnd;
		
		$locaitemtype = translate('STR_TOOLTIP_ITEM_TSHIRT', $language);
		$itemRestrictions .= $max_authorize;
		$availableLeveleq = $availableLevel;

    }
	elseif (($id >= 187200000) && ($id <= 187209999)) {
		$objectType = '_weapon';
        $itemtype= "Lord's Bracelet";
		
		$basicStats .= $armorBasicStart;
		$basicStats .= $newbasicstats;
		$basicStats .= $armorBasicEnd;
		
		$locaitemtype = translate('STR_TOOLTIP_ITEM_BRACELET', $language);
		$itemRestrictions .= $max_authorize;
		$availableLeveleq = $availableLevel;

    }
	elseif (($id >= 187300000) && ($id <= 187300005)) {
		$objectType = '_weapon';
        $itemtype= 'Estima';
		$locaitemtype = 'Estima';
		$availableLeveleq = $availableLevelother;
	}
	elseif (($id >= 187401000) && ($id <= 187401099)) {
		$objectType = '_weapon';
        $itemtype= 'Emblem';
		$locaitemtype = 'Emblem';
		$availableLeveleq = $availableLevelother;

		$basicStats .= $armorBasicStart;
		$basicStats .= $newbasicstats;
		$basicStats .= $armorBasicEnd;
    }
    elseif (($id >= 188050000) && ($id <= 188099999)) {
		$objectType = '_weapon';
        $itemtype= 'Bundle Item';
		$locaitemtype = translate('STR_TOOLTIP_COMPRESSED_ITEM', $language);
		$availableLeveleq = $availableLevelother;
		
		if ($disassembly_type == '1' ){
			$extendable = ' (' . translate('STR_DISASSEMBLY_ITEM_SELECT_DIALOG', $language) . ')';
		}else {
			$extendable = ' (' . translate('STR_QUEST_RANDOM_REWARD2', $language) . ')';
		}
		
    }
    elseif (($id >= 188100001) && ($id <= 188199999)) {
		$objectType = '_weapon';
        $itemtype= 'Assembly-type Item';
		$locaitemtype = translate('STR_TOOLTIP_ASSEMBLY_ITEM', $language);
		$availableLeveleq = $availableLevelother;
		
		
    }
    elseif (($id >= 182200001) && ($id <= 182299999)) {
		$objectType = '_weapon';
        $itemtype= 'Quest Item';
		$locaitemtype = translate('STR_TOOLTIP_QUEST_ITEM', $language);
		$availableLeveleq = $availableLevelother;
		
		
    }
    elseif (($id >= 188500000) && ($id <= 188599999)) {
		$objectType = '_weapon';
        $itemtype= 'Motion Card';
		$locaitemtype = translate('STR_PLAYER_INFO_DIALOG__MOTION', $language);
		$availableLeveleq = $availableLevelother;
    }
    elseif (($id >= 188600000) && ($id <= 188699999)) {
		$objectType = '_weapon';
        $itemtype= 'Instance Scroll';
		$locaitemtype = translate('STR_SALE_SUPPLY_SCROLL', $language);
		$availableLeveleq = $availableLevelother;
    }
	elseif (($id >= 189600000) && ($id <= 189609999)) {
		$objectType = '_weapon';
        $itemtype= 'Skill Skin Book';
		$locaitemtype = 'Skill Skin Book';
		$availableLeveleq = $availableLevelother;
    }
    elseif (($id >= 190000000) && ($id <= 190079999)) {
		$objectType = '_weapon';
        $itemtype= 'Pet Egg';
		$locaitemtype = translate('STR_SALE_PETCARD', $language);
		$availableLeveleq = $availableLevelother;
    }
	elseif (($id >= 190080000) && ($id <= 190094999)) {
		$objectType = '_weapon';
        $itemtype= 'Minion Contract';
		$locaitemtype = 'Minion Contract';
		$availableLeveleq = $availableLevelother;
    }
	elseif (($id >= 190095000) && ($id <= 190099999)) {
		$objectType = '_weapon';
        $itemtype= 'Transformation Contract';
		$locaitemtype = 'Transformation Contract';
		$availableLeveleq = $availableLevelother;
    }
    elseif (($id >= 190100000) && ($id <= 190199999)) {
		$objectType = '_ride';
        $itemtype= 'Mounts';
        $locaitemtype = translate('STR_SALE_L_RIDE_01', $language);
        
		$rideStats .= '<div class="wrap ride_property"><dl class="property"><dt>' . translate('STR_TOOLTIP_RIDE_MOVE_SPEED', $language) . '</dt><dd class="move_speed">' . substr(rideStats($ride_data_name, 'move_speed'), 0, 4) . '</dd><dt>' . translate('STR_TOOLTIP_RIDE_FLY_SPEED', $language) . '</dt><dd class="fly_speed">' . substr(rideStats($ride_data_name, 'fly_speed'), 0, 4) . '</dd></dl></div>';
		if (rideStats($ride_data_name, 'can_sprint') == '1'){
		$rideStats .= '<div class="wrap ride_sprint" style=""><p>' . translate('STR_TOOLTIP_RIDE_CAN_SPRINT', $language) . '</p><dl class="property"><dt>' . translate('STR_TOOLTIP_RIDE_SPRINT_SPEED', $language) . '</dt><dd class="sprint_speed">' . substr(rideStats($ride_data_name, 'sprint_speed'), 0, 4) . '</dd><dt>' . translate('STR_TOOLTIP_RIDE_COST_FP', $language) . '</dt><dd class="cost_fp">-' . rideStats($ride_data_name, 'cost_fp') . '</dd></dl></div>';
		$availableLeveleq = $availableLevel;
		}

    }
	elseif (($id >= 187300000) && ($id <= 187309999)) {
        $itemtype = 'Estima';
		$locaitemtype = translate('STR_TOOLTIP_ITEM_ENCHANT_CPSTONE', $language);
		$availableLeveleq = $availableLevelother;
		
    }elseif (($id >= 188200000) && ($id <= 188200999)){
        $itemtype = 'Cubicle';
		$locaitemtype = 'Cubicle';
		$availableLeveleq = $availableLevelother;
    }elseif (($id >= 167200000) && ($id <= 167200999)){
        $itemtype = 'Odian';
		$locaitemtype = 'Odian';
		$availableLeveleq = $availableLevelother;
    }elseif (($id >= 167300000) && ($id <= 167300999)){
        $itemtype = 'Rune';
		$locaitemtype = 'Rune';
		$availableLeveleq = $availableLevelother;
    }else {
        $itemtype = 'Other';
		$locaitemtype = translate('STR_TOOLTIP_ETC', $language);
		$availableLeveleq = $availableLevelother;
    }
//				ITEM TYPE					//


if ($itemcount > 1) {
	$itemcounter = ' ('.$itemcount.')';
}



echo '<div class="hbody" style="width:410px !important">';																														//widget, based on the type and quality, requires a widget to exist in the wiki
echo '<div class="objects object' . $objectType . '"><div class="head item_basic"><dl class="basic">';											//starting div
echo '<dd class="thumb"><img src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" alt="">'.$itempvpve.'</dd>';					//icon, 3d icon and tooltip overlay if necessary
echo '<dt class="name"><a class="col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $id . '">' . $localization . '</a> </dt>';			//item's name
echo '<dd class="summary"><p class="type"><em>' . translate('STR_ITEMINFO_TYPE', $language) . '</em> <span>' . $itemtypetwo . '<a href="' . $itemtype . '">' . $locaitemtype . '</a>' . $extendable . '</span></p>';	//item's type
echo $HDgear ;
echo $availableLeveleq ;												// available level, only applies to EQ
echo $MaxavailableLevel ;
echo $purchable_rank_min ; 											// minimum rank to buy the item
echo $usableMinrank ; 													// minimum rank to wear the item
echo $recommend_rank ; 												// recommended rank
echo '<p class="desc">';												//opening of restrictions
echo $itemRestrictions ; 												// test stats, need to be replaced by proper restriction string
echo '</p>';															//closing restrictions
echo '</dd></dl></div>';												//closing <head item_basic>
echo $basicStats ;														// basic stats
echo $additionalStats ;												// bonus stats
echo $randomStatsfixed;
echo $RealrandomStatsfinal;
echo $rideStats ;	
echo $chargeOne ;														// level 1 charge details
echo $chargeTwo ;														// level 2 charge details
echo $enchantmentLevel ;												// maximum enchantment level
echo $maxUpgrade ;														// maximum upgrade level
echo $manastoneSlots ;													// Manastone slot details
echo $manastoneSlotsNew ;
echo $limiteddesc ;													// High Daeva item description (X% increase damage when used by Y class)
echo $localization_desc_processed ;													// description div, working as intended

echo $extraCurrancy;
echo $tradeIn;
echo $abyssPrice;
echo $skinSkill;

echo '</div></div>'; 									//closing div

// Cache the contents to a file
$cached = fopen($cachefile, 'w');
fwrite($cached, ob_get_contents());
fclose($cached);
ob_end_flush(); // Send the output to the browser
?>
