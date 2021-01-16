<?php
error_reporting(E_ERROR | E_PARSE);

$url = $_SERVER["SCRIPT_NAME"];
$id = $_GET['id'];
$language = $_GET['lang'];

$break = Explode('/', $url);
$file = $break[count($break) - 1];
$cachefile = 'cache/skillcompare/'.$language.'/'.$id.'.html';
$cachetime = 604800000;
//$cachetime = 1;

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




function language()
{
	$language = $_GET['lang'];
	return $language;
}


function TimeFormat($delay_time){
	

if ($delay_time >= 60000) 
{


$input = $delay_time;
$uSec = $input % 1000;
$input = floor($input / 1000);

$seconds = $input % 60 . 's';
$input = floor($input / 60);

$minutes = $input % 60 . 'm ';
$input = floor($input / 60); 

$hours = $input % 60 . 'h ';
$input = floor($input / 60); 


if ($seconds > 0) {
	$secondsf = $seconds;
}

if ($minutes > 0) {
	$minutesf = $minutes;
}

if ($hours > 0) {
	$hoursf = $hours;
}



	$delaytime = $hoursf . $minutesf . $secondsf ;
	return	$delaytime;
	
}
elseif ($delay_time >= 1 and $delay_time < 60000) {
$input = $delay_time;
$uSec = $input % 1000;
$input = floor($input / 1000);

$seconds = $input % 60 . 's';
$input = floor($input / 60);

$minutes = $input % 60 . 'm ';
$input = floor($input / 60); 


if ($seconds > 0) {
	$secondsf = $seconds;
}

if ($minutes > 0) {
	$minutesf = $minutes;
}

	$delaytime = $minutesf . $secondsf ;
	return	$delaytime;
	
}

	
	
}


function UpgradeTimeFormat($delay_time, $type){
	

if ($type == 0) 
{

	$delaytime = $delay_time / 1000 . 's';
	return	$delaytime;
	
}
elseif ($type == 1) {

	$delaytime = $delay_time / 1000 . 's';
	return	$delaytime;
	
}

	
	
}


function stigmacheck($name)
{
$servername = "mysqlhost";
$username = "login2";
$password = "passw";
$dbname = "login";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
mysqli_set_charset($conn,"utf8");	


$sql = "
SELECT stigma_display 
FROM  client_skill_learns 
WHERE skill = '$name' 
";

    $query=mysqli_query($conn, $sql) or die(mysqli_error());
    while ($result = mysqli_fetch_assoc($query)) {
		$stigma = $result["stigma_display"];
	}	
	

return $stigma;


}


function checkallclassesforKnowl ($name)
{
$servername = "mysqlhost";
$username = "login2";
$password = "passw";
$dbname = "login";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
mysqli_set_charset($conn,"utf8");	


$sql = "
SELECT id, class
FROM client_skill_learns
WHERE skill = '$name'
";

    $query=mysqli_query($conn, $sql) or die(mysqli_error());
    while ($result = mysqli_fetch_assoc($query)) {
		$rows[] = $result["class"];
	}
	
	if ($rows != NULL) {
	
	foreach ($rows as $key) {
if ($key == 'KNIGHT') {
	$recommClass .= $key;
}elseif ($key == 'FIGHTER') {
	$recommClass .= $key;
}elseif ($key == 'ASSASSIN') {
	$recommClass .= $key;
}elseif ($key == 'RANGER') {
	$recommClass .= $key;
}elseif ($key == 'WIZARD') {
	$recommClass .= $key;
}elseif ($key == 'ELEMENTALLIST') {
	$recommClass .= $key;
}elseif ($key == 'PRIEST') {
	$recommClass .= $key;
}elseif ($key == 'CHANTER') {
	$recommClass .= $key;
}elseif ($key == 'GUNNER') {
	$recommClass .= $key;
}elseif ($key == 'RIDER') {
	$recommClass .= $key;
}elseif ($key == 'BARD') {
	$recommClass .= $key;
}elseif ($key == 'WARRIOR') {
	$recommClass .= $key;
}elseif ($key == 'SCOUT') {
	$recommClass .= $key;
}elseif ($key == 'MAGE') {
	$recommClass .= $key;
}elseif ($key == 'ENGINEER') {
	$recommClass .= $key;
}elseif ($key == 'CLERIC') {
	$recommClass .= $key;
}elseif ($key == 'ARTIST') {
	$recommClass .= $key;
}elseif ($key == 'PAINTER') {
	$recommClass .= $key;
}else {
	$recommClass .= '';
}
	}
}else {
	
}
	
	

		return $recommClass;
}


function DaevanionBook($name)
{
$servername = "mysqlhost";
$username = "login2";
$password = "passw";
$dbname = "login";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
mysqli_set_charset($conn,"utf8");	


$sql = "
SELECT quality 
FROM  client_items 
WHERE skill_to_learn = '$name' 
";

    $query=mysqli_query($conn, $sql) or die(mysqli_error());
    while ($result = mysqli_fetch_assoc($query)) {
		$quality = $result["quality"];
	}

	
	if ($quality != NULL) {
		return $quality;
	}else {
		return '';
	}


}





function effect($name, $id, $eu, $knowledge)
{
//$name ex "e1.SpellATK.Damage"	, "e2.Provoker.OtherSkill.e1.ProcHeal_Instant.Heal"



$skillparams = explode('.', $name);

if ( $skillparams[1] == 'DelayedSkill' && $skillparams[2] == 'OtherSkill') {
		$eu = '0';
	}
	

if ($skillparams[0] == 'e0'){
	
	
	$id = skillbuffdesc($skillparams[1]);
	
	$AionDir = $_SERVER['DOCUMENT_ROOT'];

$XML = simplexml_load_file($AionDir . "/powerbook/extensions/AionExtensions/include/Effects.xml"); 
$XMLResults = $XML->xpath("//EffectInfo[@Type='" . $skillparams[3] . "']/ReservedParameters");

foreach($XMLResults as $Result) {
    $Label = $Result->Label;
    $readfromAttribute = $Result->xpath("//EffectInfo[@Type='" . $skillparams[3] . "']/ReservedParameters//ParameterInfo[@ParameterName='" . $skillparams[4] . "']");
    // Make sure there's an author attribute
    if($readfromAttribute) {
      // because we have a list of elements even if there's one result
      $attributes = $readfromAttribute[0]->attributes();
      $readfrom = $attributes['ReadFrom'];
    }
    else {
      // No Author
    }
}
	
	
	
	
	
	//$readfrom ex "reserved9, reserved8"
	//expected $collumn ex "skillparam('effect1_reserved9')"
	
	$reserved = explode(', ', $readfrom);
	$tempeffect = explode('e', $skillparams[2]);
	
	
	if ($skillparams[4] == 'StatName' or $skillparams[4] == 'StatName2' or $skillparams[4] == 'StatName3' or $skillparams[4] == 'StatName4' or $skillparams[4] == 'Statname' or $skillparams[4] == 'Statname2' or $skillparams[4] == 'Statname3' or $skillparams[4] == 'Statname4' or strtolower($skillparams[4]) == 'weaponcategory' or strtolower($skillparams[4]) == 'condition' or strtolower($skillparams[4]) == 'addeffect' )
	{
		$isstatname = 'yes';
	}
	
	
	$collumnt0 = skillparambuff('effect' . $tempeffect[1] . '_' . $reserved[0], $id, $isstatname, $eu, $knowledge);
	$collumnt1 = skillparambuff('effect' . $tempeffect[1] . '_' . $reserved[1], $id, $isstatname, $eu, $knowledge);
	$collumnt2 = skillparambuff('effect' . $tempeffect[1] . '_' . $reserved[2], $id, $isstatname, $eu, $knowledge);
	$collumnt3 = skillparambuff('effect' . $tempeffect[1] . '_' . $reserved[3], $id, $isstatname, $eu, $knowledge);
	
	
	
	
	
	
	
	if ($collumnt0 + $collumnt1 + $collumnt2 + $collumnt3 > 0) {
		if ( strtolower($skillparams[3]) == 'spellatk_instant' or strtolower($skillparams[3]) == 'spellatk' or strtolower($skillparams[3]) == 'spellatkdrain_instant' ) {
			if (strtolower($skillparams[4]) == 'fixdamage' ) {
				$sumcollumnt = number_format(floor(($collumnt0 + $collumnt1 + $collumnt2 + $collumnt3) * $knowledge));
			}else {
				$sumcollumnt = number_format($collumnt0 + $collumnt1 + $collumnt2 + $collumnt3);
			}
		}elseif ( strtolower($skillparams[3]) == 'skillatk_instant' or strtolower($skillparams[3]) == 'skillatk' or strtolower($skillparams[3]) == 'skillatkdrain_instant' ) {
			if (strtolower($skillparams[4]) == 'fixdamage' ) {
				$sumcollumnt = number_format(floor(($collumnt0 + $collumnt1 + $collumnt2 + $collumnt3) * $knowledge));
			}else {
				$sumcollumnt = number_format($collumnt0 + $collumnt1 + $collumnt2 + $collumnt3);
			}
		}else {
			$sumcollumnt = number_format($collumnt0 + $collumnt1 + $collumnt2 + $collumnt3);
		}
	}else {
	$sumcollumnt = $collumnt0 . $collumnt1 . $collumnt2 . $collumnt3;
	}
	
	

	
	
	if ($skillparams[4] == 'RandomTime' or $skillparams[4] == 'RemainTime' or $skillparams[4] == 'CheckTime' or $skillparams[4] == 'SummonTime') {
		
		$sumcollumnt = filter_var($sumcollumnt, FILTER_SANITIZE_NUMBER_INT);
		if ($sumcollumnt/1000 < 60) {
			
			if($sumcollumnt > 60){
				$sumcollumnt = $sumcollumnt/1000 . 's';
			}else{
				$sumcollumnt = $sumcollumnt . 's';
			}
			
		}else {
			$sumcollumnt = $sumcollumnt/60 . 'm';
		}
	}
	
	
	
	if (strtolower($skillparams[4]) == 'conditionprob' && strtolower($skillparams[3]) != 'shield' && strtolower($skillparams[3]) != 'provoker'){
		$sumcollumnt = $sumcollumnt/10;
	}elseif (strtolower($skillparams[4]) == 'conditionprob' && strtolower($skillparams[3]) != 'shield' && strtolower($skillparams[3]) == 'provoker'){
		$sumcollumnt = $sumcollumnt/10;
	}elseif (strtolower($skillparams[3]) == 'hide' && strtolower($skillparams[4]) == 'speed') {
		$sumcollumnt = 100 - $sumcollumnt;
	}elseif (strtolower($skillparams[3]) == 'delayedspellatk_instant' && strtolower($skillparams[4]) == 'delayedtime') {
		$sumcollumnt = TimeFormat($sumcollumnt);
	}elseif (strtolower($skillparams[3]) == 'shield' && strtolower($skillparams[4]) == 'conditionprob') {
		$sumcollumnt = $sumcollumnt;
	}
	
	

	
	if ($readfrom != NULL) {
	return $sumcollumnt . $time;
	}elseif ($name == 'First_Target_Valid_Distance') {
		return skillparam(strtolower($name), $id, 'no', $eu);
	}else {
		return '[[' . $name . ']]';
	}
	
	
	
	
	
	
	
	
}
else {
	


	


$AionDir = $_SERVER['DOCUMENT_ROOT'];

$XML = simplexml_load_file($AionDir . "/powerbook/extensions/AionExtensions/include/Effects.xml"); 
$XMLResults = $XML->xpath("//EffectInfo[@Type='" . $skillparams[1] . "']/ReservedParameters");

foreach($XMLResults as $Result) {
    $Label = $Result->Label;
    $readfromAttribute = $Result->xpath("//EffectInfo[@Type='" . $skillparams[1] . "']/ReservedParameters//ParameterInfo[@ParameterName='" . $skillparams[2] . "']");
    // Make sure there's an author attribute
    if($readfromAttribute) {
      // because we have a list of elements even if there's one result
      $attributes = $readfromAttribute[0]->attributes();
      $readfrom = $attributes['ReadFrom'];
    }
    else {
      // No Author
    }
}
	
	
	
	
	
	//$readfrom ex "reserved9, reserved8"
	//expected $collumn ex "skillparam('effect1_reserved9')"
	
	$reserved = explode(', ', $readfrom);
	$tempeffect = explode('e', $skillparams[0]);
	
	
	
	if ($skillparams[2] == 'StatName' or $skillparams[2] == 'StatName2' or $skillparams[2] == 'StatName3' or $skillparams[2] == 'StatName4' or $skillparams[2] == 'Statname' or $skillparams[2] == 'Statname2' or $skillparams[2] == 'Statname3' or $skillparams[2] == 'Statname4' or strtolower($skillparams[2]) == 'weaponcategory' or strtolower($skillparams[2]) == 'condition' or strtolower($skillparams[2]) == 'addeffect' )
	{
		$isstatname = 'yes';
	}

	
	
	if ( strtolower($skillparams[2]) == 'otherskill' && strtolower($skillparams[1]) != 'aura'){
		
	$collumnt0 = skillparambuff('effect' . $tempeffect[1] . '_' . $reserved[0], $id, $skillparams[3].'.'.$skillparams[4].'.'.$skillparams[5], $eu, $knowledge);
	$collumnt1 = skillparambuff('effect' . $tempeffect[1] . '_' . $reserved[1], $id, $skillparams[3].'.'.$skillparams[4].'.'.$skillparams[5], $eu, $knowledge);
	$collumnt2 = skillparambuff('effect' . $tempeffect[1] . '_' . $reserved[2], $id, $skillparams[3].'.'.$skillparams[4].'.'.$skillparams[5], $eu, $knowledge);
	$collumnt3 = skillparambuff('effect' . $tempeffect[1] . '_' . $reserved[3], $id, $skillparams[3].'.'.$skillparams[4].'.'.$skillparams[5], $eu, $knowledge);
		
	}elseif ( strtolower($skillparams[2]) == 'otherskill' && strtolower($skillparams[1]) != 'aura' && strtolower($skillparams[1]) == 'delayedskill'){
		
	$collumnt0 = skillparambuff('effect' . $tempeffect[1] . '_' . $reserved[0], $id, $skillparams[3].'.'.$skillparams[4].'.'.$skillparams[5], '0', $knowledge);
	$collumnt1 = 0;
	$collumnt2 = 0;
	$collumnt3 = 0;
		
	}elseif ( strtolower($skillparams[2]) == 'otherskill' && strtolower($skillparams[1]) == 'aura'){
		
	$collumnt0 = skillparamaura('effect' . $tempeffect[1] . '_' . $reserved[0], $id, $skillparams[3].'.'.$skillparams[4].'.'.$skillparams[5], $eu, $knowledge);
	$collumnt1 = skillparamaura('effect' . $tempeffect[1] . '_' . $reserved[1], $id, $skillparams[3].'.'.$skillparams[4].'.'.$skillparams[5], $eu, $knowledge);
	$collumnt2 = skillparamaura('effect' . $tempeffect[1] . '_' . $reserved[2], $id, $skillparams[3].'.'.$skillparams[4].'.'.$skillparams[5], $eu, $knowledge);
	$collumnt3 = skillparamaura('effect' . $tempeffect[1] . '_' . $reserved[3], $id, $skillparams[3].'.'.$skillparams[4].'.'.$skillparams[5], $eu, $knowledge);
		
	}else {
	
	$collumnt0 = skillparam('effect' . $tempeffect[1] . '_' . $reserved[0], $id, $isstatname, $eu);
	$collumnt1 = skillparam('effect' . $tempeffect[1] . '_' . $reserved[1], $id, $isstatname, $eu);
	$collumnt2 = skillparam('effect' . $tempeffect[1] . '_' . $reserved[2], $id, $isstatname, $eu);
	$collumnt3 = skillparam('effect' . $tempeffect[1] . '_' . $reserved[3], $id, $isstatname, $eu);
	
	}
	

	
	if ( $eu > 0 && ($reserved[0] == 'reserved1' or $reserved[1] == 'reserved1' or $reserved[2] == 'reserved1' or $reserved[3] == 'reserved1' ) ) {
		
		if ( $reserved[1] == 'reserved1' && $collumnt1 > 0 ) {
			
			if ( strtolower($skillparams[1]) == 'spellatk_instant' or strtolower($skillparams[1]) == 'spellatk' or strtolower($skillparams[1]) == 'spellatkdrain_instant' ) {
				$stigmUpKno = floor($collumnt1 * $knowledge);
			}if ( strtolower($skillparams[1]) == 'skillatk_instant' or strtolower($skillparams[1]) == 'skillatk' or strtolower($skillparams[1]) == 'skillatkdrain_instant' ) {
				$stigmUpKno = floor($collumnt1 * $knowledge);
			}else {
				$stigmUpKno = $collumnt1;
			}
			$stigmaUp = ' (<span class="StigmaUpgrade" ><img src="https://aionpowerbook.com/chatemot/comp_greater.png" style="width:14px; height:14px; padding-bottom:3px" >+'.$stigmUpKno.'</span>)';
		}elseif ($reserved[1] == 'reserved3' && $collumnt1 > 0) {
			$stigmUpKno = $collumnt1;
			$stigmaUp = ' (<span class="StigmaUpgrade" ><img src="https://aionpowerbook.com/chatemot/comp_greater.png" style="width:14px; height:14px; padding-bottom:3px" >+'.$stigmUpKno.'</span>)';
		}
	}elseif ( $eu > 0 && ($reserved[0] == 'reserved7' or $reserved[1] == 'reserved7' or $reserved[2] == 'reserved7' or $reserved[3] == 'reserved7' ) ) {
		
		if ( $reserved[1] == 'reserved7' && $collumnt1 > 0 && strtolower($skillparams[1]) == 'shield') {
			
			$stigmUpKno = $collumnt1;
			$stigmaUp = ' (<span class="StigmaUpgrade" ><img src="https://aionpowerbook.com/chatemot/comp_greater.png" style="width:14px; height:14px; padding-bottom:3px" >+'.$stigmUpKno.'</span>)';
		}
		$testtype = 't2';
	}elseif ( $eu > 0 && ($reserved[0] == 'reserved3' or $reserved[1] == 'reserved3' or $reserved[2] == 'reserved3' or $reserved[3] == 'reserved3' ) ) {
		
		if ( $reserved[1] == 'reserved3' && $collumnt1 > 0 ) {
			
			$stigmUpKno = $collumnt1;
			$stigmaUp = ' (<span class="StigmaUpgrade" ><img src="https://aionpowerbook.com/chatemot/comp_greater.png" style="width:14px; height:14px; padding-bottom:3px" >+'.$stigmUpKno.'</span>)';
		}
		$testtype = 't3';
	}elseif ( $eu > 0 && ($reserved[0] == 'reserved8' or $reserved[1] == 'reserved8' or $reserved[2] == 'reserved8' or $reserved[3] == 'reserved8' ) ) {
		
		if ( $reserved[1] == 'reserved8' && $collumnt1 > 0 && strtolower($skillparams[1]) == 'skillatkdrain' ) {
			$stigmUpKno = $collumnt1;
			$stigmaUp = ' (<span class="StigmaUpgrade" ><img src="https://aionpowerbook.com/chatemot/comp_greater.png" style="width:14px; height:14px; padding-bottom:3px" >+'.$stigmUpKno.'</span>)';
		}
		$testtype = 't3';
	}
	
	
	
	if ($collumnt0 + $collumnt1 + $collumnt2 + $collumnt3 > 0) {
		
		if ( strtolower($skillparams[1]) == 'spellatk_instant' or strtolower($skillparams[1]) == 'spellatk' or strtolower($skillparams[1]) == 'spellatkdrain_instant' ) {
			if (strtolower($skillparams[2]) == 'fixdamage' ) {
				$sumcollumnt = number_format(floor(($collumnt0 + $collumnt1 + $collumnt2 + $collumnt3) * $knowledge));
			}else {
				$sumcollumnt = number_format($collumnt0 + $collumnt1 + $collumnt2 + $collumnt3);
			}
		}elseif ( strtolower($skillparams[1]) == 'skillatk_instant' or strtolower($skillparams[1]) == 'skillatk' or strtolower($skillparams[1]) == 'skillatkdrain_instant' ) {
			if (strtolower($skillparams[2]) == 'fixdamage' ) {
				$sumcollumnt = number_format(floor(($collumnt0 + $collumnt1 + $collumnt2 + $collumnt3) * $knowledge));
			}else {
				$sumcollumnt = number_format($collumnt0 + $collumnt1 + $collumnt2 + $collumnt3);
			}
		}else {
			$sumcollumnt1 = $collumnt0 + $collumnt1 + $collumnt2 + $collumnt3;
			$sumcollumnt = $sumcollumnt1;
		}
		
	}else {
		$sumcollumnt = $collumnt0 . $collumnt1 . $collumnt2 . $collumnt3;
	}
	
	

	
	
	if ($skillparams[2] == 'RandomTime' or $skillparams[2] == 'RemainTime' or $skillparams[2] == 'CheckTime' or $skillparams[2] == 'SummonTime') {
		$sumcollumnt = filter_var($sumcollumnt, FILTER_SANITIZE_NUMBER_INT);
		if ($sumcollumnt < 60) {
			$sumcollumnt = $sumcollumnt . 's';
		}else {
			$sumcollumnt = $sumcollumnt/60 . 'm';
		}
	}
	
	
	
	if (strtolower($skillparams[1]) == 'conditionprob' && strtolower($skillparams[2]) != 'shield' && strtolower($skillparams[2]) != 'provoker'){
		$sumcollumnt = $sumcollumnt/10;
	}elseif (strtolower($skillparams[1]) == 'conditionprob' && strtolower($skillparams[2]) != 'shield' && strtolower($skillparams[2]) == 'provoker'){
		$sumcollumnt = $sumcollumnt/10;
	}elseif (strtolower($skillparams[1]) == 'hide' && strtolower($skillparams[2]) == 'speed') {
		$sumcollumnt = 100 - $sumcollumnt;
	}elseif (strtolower($skillparams[1]) == 'delayedspellatk_instant' && strtolower($skillparams[2]) == 'delayedtime') {
		$sumcollumnt = TimeFormat($sumcollumnt);
	}elseif (strtolower($skillparams[1]) == 'shield' && strtolower($skillparams[2]) == 'conditionprob') {
		$sumcollumnt = $sumcollumnt;
	}
	
	
	
	
	// .$readfrom
	
	if ($readfrom != NULL) {
		return $sumcollumnt . $stigmaUp;
	}elseif ($name == 'First_Target_Valid_Distance') {
		return skillparam(strtolower($name), $id, 'no', $eu);
	}else {
		return '[[' . $name . ']]';
	}
	
}


}


function skillparam ($name, $id, $isstatname, $eu){

//$name ex "effect1_reserved9"
//Expected return '666' or 'ElementalDefendAir' (number or string)
$servername = "mysqlhost";
$username = "login2";
$password = "passw";
$dbname = "login";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
mysqli_set_charset($conn,"utf8");	


$sql = "
SELECT *
FROM client_skills_eu
WHERE  id = '$id'
";

    $query=mysqli_query($conn, $sql) or die(mysqli_error());
    while ($result = mysqli_fetch_assoc($query)) {
		$exploname = explode('_', $name);
	
	if ($name == 'effect1_reserved_cond1_prob2' or $name == 'effect1_reserved_cond1_prob1'){
		return $result[$name]/10;
	}elseif ($exploname[1] == 'randomtime'){
		return ($result[$exploname[0] . '_remain1'] + $result[$exploname[0] . '_remain2'] - $result[$name])/1000;
	}elseif ($exploname[1] == 'remain1' or $exploname[1] == 'remain2' ) {
		return $result[$name]/1000;
	}elseif ($exploname[1] == 'checktime' ) {
		return $result[$name]/1000;
	}
	
	elseif ($isstatname == 'yes' or $isstatname == 'overrule'){
		if ($isstatname == 'overrule'){
			$statname = strtolower($name);
		}else {
			$statname = strtolower($result[$name]);
		}
		
		if ($statname == 'attackdelay'){
			$stat = translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', language());
		}elseif ($statname == 'phyattack'){
			$stat = translate('STR_ATTACK', language());
		}elseif ($statname == 'boostcastingtime'){
			$stat = translate('STR_BOOSTCASTINGTIME', language());
		}elseif ($statname == 'arfear'){
			$stat = translate('STR_TOOLTIP_SKILL_STAT_ARFEAR', language());
		}elseif ($statname == 'arsleep'){
			$stat = translate('STR_TOOLTIP_SKILL_STAT_ARSLEEP', language());
		}elseif ($statname == 'speed'){
			$stat = translate('STR_TOOLTIP_SKILL_STAT_SPEED', language());
		}elseif ($statname == 'physicaldefend'){
			$stat = translate('STR_DEFEND_PHYSICAL', language());
		}elseif ($statname == 'procreducerate'){
			$stat = translate('STR_TOOLTIP_SKILL_STAT_PROC_REDUCE_RATE', language());
		}elseif ($statname == 'magicalresist'){
			$stat = translate('STR_MAGIC_DEFENSE', language());
		}elseif ($statname == 'magicalhitaccuracy'){
			$stat = translate('STR_MAGICAL_HIT_ACCURACY', language());
		}elseif ($statname == 'arstunlike'){
			$stat = translate('STR_TOOLTIP_SKILL_STAT_ARSTUN_LIKE', language());
		}elseif ($statname == 'flyspeed'){
			$stat = translate('STR_TOOLTIP_RIDE_FLY_SPEED', language());
		}elseif ($statname == 'hpregen'){
			$stat = translate('STR_TOOLTIP_SKILL_STAT_HPREGEN', language());
		}elseif ($statname == 'mpregen'){
			$stat = translate('STR_TOOLTIP_SKILL_STAT_MPREGEN', language());
		}elseif ($statname == 'elementaldefendfire'){
			$stat = translate('STR_TOOLTIP_SKILL_STAT_ED_FIRE', language());
		}elseif ($statname == 'magicalskillboostresist'){
			$stat = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_SKILL_BOOST_RESIST', language());
		}elseif ($statname == 'magicalskillboost'){
			$stat = translate('STR_MAGICAL_SKILL_BOOST', language());
		}elseif ($statname == 'critical'){
			$stat = translate('STR_CRITICAL', language());
		}elseif ($statname == 'magicalcritical'){
			$stat = translate('STR_TOOLTIP_SKILL_STAT_MAGCRITICAL', language());
		}elseif ($statname == 'maxhp'){
			$stat = translate('STR_HP', language());
		}elseif ($statname == 'physicalpowerboost'){
			$stat = translate('STR_PHYSICAL_POWER_BOOST', language());
		}elseif ($statname == 'physicalpowerboostresist'){
			$stat = translate('STR_PHYSICAL_POWER_BOOST_RESIST', language());
		}elseif ($statname == 'magicalpowerboost'){
			$stat = translate('STR_MAGICAL_POWER_BOOST', language());
		}elseif ($statname == 'magicalpowerboostresist'){
			$stat = translate('STR_MAGICAL_POWER_BOOST_RESIST', language());
		}elseif ($statname == 'attackrange'){
			$stat = translate('STR_TOOLTIP_SKILL_STAT_ATTACKRANGE', language());
		}elseif ($statname == 'bow'){
			$stat = translate('STR_TOOLTIP_BOW', language());
		}elseif ($statname == 'arparalyze'){
			$stat = translate('STR_TOOLTIP_SKILL_STAT_ARPARALYZE', language());
		}elseif ($statname == 'hitaccuracy'){
			$stat = translate('STR_TOOLTIP_SKILL_STAT_HITACCURACY', language());
		}elseif ($statname == 'dodge'){
			$stat = translate('STR_DODGE', language());
		}elseif ($statname == 'everyhit'){
			$stat = translate('STR_TOOLTIP_SKILL_COND_EVERYHIT', language());
		}elseif ($statname == 'str'){
			$stat = translate('STR_STR', language());
		}elseif ($statname == 'dex'){
			$stat = translate('STR_DEX', language());
		}elseif ($statname == 'vit'){
			$stat = translate('STR_VIT', language());
		}
		elseif ($statname == 'wil'){
			$stat = translate('STR_WIL', language());
		}
		elseif ($statname == 'kno'){
			$stat = translate('STR_KNO', language());
		}
		elseif ($statname == 'agi'){
			$stat = translate('STR_AGI', language());
		}
		elseif ($statname == 'stagger'){
			$stat = translate('STR_TOOLTIP_SKILL_EFFECT_STAGGER', language());
		}elseif ($statname == 'allspeed'){
			$stat = translate('STR_TOOLTIP_SKILL_STAT_ALLSPEED', language());
		}elseif ($statname == 'arroot'){
			$stat = translate('STR_TOOLTIP_SKILL_STAT_ARROOT', language());
		}elseif ($statname == 'arsnare'){
			$stat = translate('STR_TOOLTIP_SKILL_STAT_ARSNARE', language());
		}elseif ($statname == 'stumble'){
			$stat = translate('STR_TOOLTIP_SKILL_EFFECT_STUMBLE', language());
		}elseif ($statname == 'stumble_arp'){
			$stat = translate('STR_TOOLTIP_SKILL_STAT_STUMBLE_ARP', language());
		}elseif ($statname == 'block'){
			$stat = translate('STR_BLOCK', language());
		}elseif ($statname == 'parry'){
			$stat = translate('STR_PARRY', language());
		}elseif ($statname == 'arbind'){
			$stat = translate('STR_TOOLTIP_SKILL_STAT_ARBIND', language());
		}elseif ($statname == 'arsilence'){
			$stat = translate('STR_TOOLTIP_SKILL_STAT_ARSILENCE', language());
		}elseif ($statname == 'arstumble'){
			$stat = translate('STR_TOOLTIP_SKILL_STAT_ARSTUMPLE', language());
		}elseif ($statname == 'arstagger'){
			$stat = translate('STR_TOOLTIP_SKILL_STAT_ARSTAGGER', language());
		}elseif ($statname == 'maxmp'){
			$stat = translate('STR_TOOLTIP_SKILL_STAT_MAXMP', language());
		}elseif ($statname == 'healskillboost'){
			$stat = translate('STR_TOOLTIP_SKILL_STAT_HEAL_BOOST', language());
		}elseif ($statname == 'arall'){
			$stat = translate('STR_TOOLTIP_SKILL_STAT_ARALL', language());
		}elseif ($statname == 'physicalcriticaldamagereduce'){
			$stat = translate('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_DAMAGE_REDUCE', language());
		}elseif ($statname == 'phhit'){
			$stat = translate('STR_TOOLTIP_SKILL_COND_PHHIT', language());
		}elseif ($statname == 'elementaldefendall'){
			$stat = translate('STR_TOOLTIP_SKILL_STAT_ED_ALL', language());
		}elseif ($statname == 'openaerial'){
			$stat = translate('STR_TOOLTIP_SKILL_EFFECT_OPENAERIAL', language());
		}elseif ($statname == 'spin_arp'){
			$stat = translate('STR_TOOLTIP_SKILL_STAT_SPIN_ARP', language());
		}elseif ($statname == 'openareial_arp'){
			$stat = translate('STR_TOOLTIP_SKILL_STAT_OPENAREIAL_ARP', language());
		}elseif ($statname == 'stun_arp'){
			$stat = translate('STR_TOOLTIP_SKILL_STAT_STUN_ARP', language());
		}elseif ($statname == 'physicalcriticalreducerate'){
			$stat = translate('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_REDUCE_RATE', language());
		}elseif ($statname == 'spin'){
			$stat = translate('STR_TOOLTIP_SKILL_EFFECT_SPIN', language());
		}elseif ($statname == 'elementaldefendwater'){
			$stat = translate('STR_TOOLTIP_SKILL_STAT_ED_WATER', language());
		}elseif ($statname == 'pmattack'){
			$stat = translate('STR_TOOLTIP_SKILL_STAT_PMATTACK', language());
		}elseif ($statname == 'pmdefend'){
			$stat = translate('STR_TOOLTIP_SKILL_STAT_PMDEFEND', language());
		}elseif ($statname == 'concentration'){
			$stat = translate('STR_TOOLTIP_SKILL_STAT_CONCENTRATION', language());
		}elseif ($statname == 'nmlatk'){
			$stat = translate('STR_TOOLTIP_SKILL_COND_NMLATK', language());
		}elseif ($statname == 'activedefend'){
			$stat = translate('STR_TOOLTIP_SKILL_STAT_ACTIVE_DEFEND', language());
		}elseif ($statname == 'arstun'){
			$stat = translate('STR_TOOLTIP_SKILL_STAT_ARSTUN', language());
		}
		
		elseif ($statname == 'pvppowerboost'){
			$stat = translate('STR_PVP_POWER_BOOST', language());
		}
		
		elseif ($statname == 'pvppowerboostresist'){
			$stat = translate('STR_PVP_POWER_BOOST_RESIST', language());
		}
		
		elseif ($statname == 'pvepowerboost'){
			$stat = translate('STR_PVE_POWER_BOOST', language());
		}
		
		elseif ($statname == 'pvepowerboostresist'){
			$stat = translate('STR_PVE_POWER_BOOST_RESIST', language());
		}

		elseif ($statname == 'sleep_arp'){
			$stat = translate('STR_TOOLTIP_SKILL_STAT_SLEEP_ARP', language());
		}
		elseif ($statname == 'fear_arp'){
			$stat = translate('STR_TOOLTIP_SKILL_STAT_FEAR_ARP', language());
		}
		elseif ($statname == 'paralyze_arp'){
			$stat = translate('STR_TOOLTIP_SKILL_STAT_PARALYZE_ARP', language());
		}
		
		
		elseif ($statname >= 1){
			$stat = $statname;
		}

		elseif ($statname == NULL){
			$stat = '';
		}
		else {
			$stat = '[Unknown: ' . $statname . ']';
		}
		
		
		
		
		
		return $stat;
	}
	
	else {

	return $result[$name];
	}
	}


	
	
	//add if $result[$name] matches a set of stat names => translate to the stat name. else reutrn the number
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


function skillbuffdesc ($name) {
//$name ex "ALL_BlackDragon_G1_Sys"
$servername = "mysqlhost";
$username = "login2";
$password = "passw";
$dbname = "login";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
mysqli_set_charset($conn,"utf8");	


$sql = "
SELECT id
FROM client_skills_eu
WHERE  name = '$name'
";

    $query=mysqli_query($conn, $sql) or die(mysqli_error());
    while ($result = mysqli_fetch_assoc($query)) {
		$id = $result["id"];
	}

	return $id;
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


function checkchargingleveldesc ($name, $eu, $knowledge)
{

//$name ex "ALL_BlackDragon_G1_Sys"

$servername = "mysqlhost";
$username = "login2";
$password = "passw";
$dbname = "login";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
mysqli_set_charset($conn,"utf8");	


$sql = "
SELECT id, desc_long
FROM client_skills_eu
WHERE  name = '$name'
";
	
	
$query=mysqli_query($conn, $sql) or die(mysqli_error());
    while ($result = mysqli_fetch_assoc($query)) {
		$desc_long = $result["desc_long"];
		$id = $result["id"];
	}



	
	
if (language() == 'ko') {
	$desclong = translate($desc_long, 'krl');
}else {
	$desclong = translate($desc_long, language());
}





$desc = preg_replace_callback('/\[%(.*?)\]/i', function(array $matches) use ($id, $eu, $knowledge) {
	return effect($matches[1], $id, $eu, $knowledge);
}, $desclong);

return $desc;
	

}


function chargingdescription ($name, $eu, $knowledge){

//$name ex "EL_CursedBreath1"

$servername = "mysqlhost";
$username = "login2";
$password = "passw";
$dbname = "login";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
mysqli_set_charset($conn,"utf8");	


$sql = "
SELECT *
FROM client_skill_charge_eu
WHERE  name = '$name'
";
	
	
$query=mysqli_query($conn, $sql) or die(mysqli_error());
    while ($result = mysqli_fetch_assoc($query)) {
		$skill_name1 = checkchargingleveldesc($result["skill_name1"], $eu, $knowledge);
		$charge_time1 = $result["charge_time1"]/1000;
		$skill_name2 = checkchargingleveldesc($result["skill_name2"], $eu, $knowledge);
		$charge_time2 = $result["charge_time2"]/1000;
		$skill_name3 = checkchargingleveldesc($result["skill_name3"], $eu, $knowledge);
		$charge_time3 = $result["charge_time3"]/1000;
	}

	
	if ($skill_name1 != NULL){
		$charge = '<dl class="skill_desc"><dt>' . translate('STR_LITE__STEP1', language()) . '<br>'.$charge_time1.'s</dt><dd id="skill_descrption">' . $skill_name1 . '</dd></dl><div class="cl"></div>';
	}
	if ($skill_name2 != NULL){
		$charge .= '<dl class="skill_desc"><dt>' . translate('STR_LITE__STEP2', language()) . '<br>'.$charge_time2.'s</dt><dd id="skill_descrption">' . $skill_name2 . '</dd></dl><div class="cl"></div>';
	}
	if ($skill_name3 != NULL){
		$charge .= '<dl class="skill_desc"><dt>' . translate('STR_LITE__STEP3', language()) . '<br>'.$charge_time3.'s</dt><dd id="skill_descrption">' . $skill_name3 . '</dd></dl><div class="cl"></div>';
	}

	return $charge;
	

}


function skillparambuff ($name, $id, $isstatname, $eu, $knowledge){

// e1.ProcHeal_Instant.Heal
// expected $result[$name] = FI_N_Fortitude_G1_Proc

$servername = "mysqlhost";
$username = "login2";
$password = "passw";
$dbname = "login";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
mysqli_set_charset($conn,"utf8");	


$sql = "
SELECT *
FROM client_skills_eu
WHERE  id = '$id'
";

    $query=mysqli_query($conn, $sql) or die(mysqli_error());
    while ($result = mysqli_fetch_assoc($query)) {
		$tempname = $result[$name];
	}
	
	
if ($isstatname != NULL){
		
		
		$skillID = skillbuffdesc($tempname);
		
		if ($skillID != NULL ){
			$buffdata = effect($isstatname, $skillID, $eu, $knowledge);
			return $buffdata;
		}else{
			
			if ($tempname != NULL){
					$testy = skillparam($tempname, $id, 'overrule', $eu);
					return $testy;
			}else {
				return '';
			}
		}
		
	}
	
	else {

	return $tempname;
	}
	
	
	//add if $result[$name] matches a set of stat names => translate to the stat name. else reutrn the number
}


function skillparamaura ($name, $id, $isstatname, $eu, $knowledge){

// e1.ProcHeal_Instant.Heal
// expected $result[$name] = FI_N_Fortitude_G1_Proc
$servername = "mysqlhost";
$username = "login2";
$password = "passw";
$dbname = "login";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
mysqli_set_charset($conn,"utf8");	


$sql = "
SELECT *
FROM client_skills_eu
WHERE  id = '$id'
";

    $query=mysqli_query($conn, $sql) or die(mysqli_error());
    while ($result = mysqli_fetch_assoc($query)) {
		$tempname = $result[$name];
	}

	
if ($isstatname != NULL){
		
		
		$skillID = skillbuffdesc($tempname);
		
		if ($skillID != NULL ){
			$buffdata = effect($isstatname, $skillID, $eu, $knowledge);
			return $buffdata;
		}else{
			return '';
		}
		
	}
	
	else {

	return $tempname;
	}
	
	
	//add if $result[$name] matches a set of stat names => translate to the stat name. else reutrn the number
}


function checkonlyLearnLevel($name, $id)
{
	
$servername = "mysqlhost";
$username = "login2";
$password = "passw";
$dbname = "login";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
mysqli_set_charset($conn,"utf8");
	
$sql = "
SELECT *
FROM client_skill_learns_eu
WHERE skill = '$name'


";


$query=mysqli_query($conn, $sql) or die(mysqli_error());
    while ($result = mysqli_fetch_assoc($query)) {
		$resID = $result["id"];
		$pc_level = $result["pc_level"];
	}	
	
	if ($id == '0' and $resID != NULL) {
		return '<b>' .$pc_level . '</b>';
	}elseif ($id > 0 and $resID != NULL) {
		return '<a href="https://aionpowerbook.com/powerbook/Skill/'.$id.'">' . $pc_level . '</a>';
	}
	
	
}

function checkallclasses ($name) // IMPORTANT !!!!! CREATE EU VERSION OF THE TABLE
{
$servername = "mysqlhost";
$username = "login2";
$password = "passw";
$dbname = "login";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
mysqli_set_charset($conn,"utf8");
	
$sql = "
SELECT id, class
FROM client_skill_learns_eu
WHERE skill = '$name'


";


$query=mysqli_query($conn, $sql) or die(mysqli_error());
    while ($result = mysqli_fetch_assoc($query)) {
		$rows[] = $result["class"];
	}
	
	if ($rows != NULL) {
	
	foreach ($rows as $key) {
if ($key == 'KNIGHT') {
	$FixedName = explode('[', translate('STR_CLASS_NAME_KNIGHT', language()));
	$recommClass .= '<a href="https://aionpowerbook.com/powerbook/Templar_Skills_List">' . $FixedName[0] . '</a> ';
}elseif ($key == 'FIGHTER') {
	$FixedName = explode('[', translate('STR_CLASS_NAME_FIGHTER', language()));
	$recommClass .= '<a href="https://aionpowerbook.com/powerbook/Gladiator_Skills_List">' . $FixedName[0] . '</a> ';
}elseif ($key == 'ASSASSIN') {
	$FixedName = explode('[', translate('STR_CLASS_NAME_ASSASSIN', language()));
	$recommClass .= '<a href="https://aionpowerbook.com/powerbook/Assassin_Skills_List">' . $FixedName[0] . '</a> ';
}elseif ($key == 'RANGER') {
	$FixedName = explode('[', translate('STR_CLASS_NAME_RANGER', language()));
	$recommClass .= '<a href="https://aionpowerbook.com/powerbook/Ranger_Skills_List">' . $FixedName[0] . '</a> ';
}elseif ($key == 'WIZARD') {
	$FixedName = explode('[', translate('STR_CLASS_NAME_WIZARD', language()));
	$recommClass .= '<a href="https://aionpowerbook.com/powerbook/Sorcerer_Skills_List">' . $FixedName[0] . '</a> ';
}elseif ($key == 'ELEMENTALLIST') {
	$FixedName = explode('[', translate('STR_CLASS_NAME_ELEMENTALIST', language()));
	$recommClass .= '<a href="https://aionpowerbook.com/powerbook/Spiritmaster_Skills_List">' . $FixedName[0] . '</a> ';
}elseif ($key == 'PRIEST') {
	$FixedName = explode('[', translate('STR_CLASS_NAME_PRIEST', language()));
	$recommClass .= '<a href="https://aionpowerbook.com/powerbook/Cleric_Skills_List">' . $FixedName[0] . '</a> ';
}elseif ($key == 'CHANTER') {
	$FixedName = explode('[', translate('STR_CLASS_NAME_CHANTER', language()));
	$recommClass .= '<a href="https://aionpowerbook.com/powerbook/Chanter_Skills_List">' . $FixedName[0] . '</a> ';
}elseif ($key == 'GUNNER') {
	$FixedName = explode('[', translate('STR_CLASS_NAME_GUNNER', language()));
	$recommClass .= '<a href="https://aionpowerbook.com/powerbook/Gunner_Skills_List">' . $FixedName[0] . '</a> ';
}elseif ($key == 'RIDER') {
	$FixedName = explode('[', translate('STR_CLASS_NAME_RIDER', language()));
	$recommClass .= '<a href="https://aionpowerbook.com/powerbook/Aethertech_Skills_List">' . $FixedName[0] . '</a> ';
}elseif ($key == 'BARD') {
	$FixedName = explode('[', translate('STR_CLASS_NAME_BARD', language()));
	$recommClass .= '<a href="https://aionpowerbook.com/powerbook/Bard_Skills_List">' . $FixedName[0] . '</a> ';
}elseif ($key == 'WARRIOR') {
	$FixedName = explode('[', translate('STR_CLASS_NAME_Warrior', language()));
	$recommClass .= '<a href="https://aionpowerbook.com/powerbook/Warrior">' . $FixedName[0] . '</a> ';
}elseif ($key == 'SCOUT') {
	$FixedName = explode('[', translate('STR_CLASS_NAME_SCOUT', language()));
	$recommClass .= '<a href="https://aionpowerbook.com/powerbook/Scout">' . $FixedName[0] . '</a> ';
}elseif ($key == 'MAGE') {
	$FixedName = explode('[', translate('STR_CLASS_NAME_MAGE', language()));
	$recommClass .= '<a href="https://aionpowerbook.com/powerbook/Mage">' . $FixedName[0] . '</a> ';
}elseif ($key == 'ENGINEER') {
	$FixedName = explode('[', translate('STR_CLASS_NAME_ENGINEER', language()));
	$recommClass .= '<a href="https://aionpowerbook.com/powerbook/Engineer">' . $FixedName[0] . '</a> ';
}elseif ($key == 'CLERIC') {
	$FixedName = explode('[', translate('STR_CLASS_NAME_CLERIC', language()));
	$recommClass .= '<a href="https://aionpowerbook.com/powerbook/Priest">' . $FixedName[0] . '</a> ';
}elseif ($key == 'ARTIST') {
	$FixedName = explode('[', translate('STR_CLASS_NAME_ARTIST', language()));
	$recommClass .= '<a href="https://aionpowerbook.com/powerbook/Artist">' . $FixedName[0] . '</a> ';
}elseif ($key == 'PAINTER') {
	$FixedName = explode('[', translate('STR_CLASS_NAME_PAINTER', language()));
	$recommClass .= '<a href="https://aionpowerbook.com/powerbook/Painter_Skills_List">' . $FixedName[0] . '</a> ';
}elseif (strtolower($key) == 'all') {
	$recommClass .= 'All';
}else {
	$recommClass .= '<a href="https://aionpowerbook.com/powerbook/Main_Page"></a>';
}
	}
}else {
	
}
	
	
	if ($recommClass != NULL){
		return '<dd class="acquire_class" id="skill_acquire_class" ><em>'.$recommClass.'</em></dd>';
	}else {
		return '';
	}
}

function checkLearnLevel($name) // IMPORTANT !!!!! CREATE EU VERSION OF THE TABLE
{
$servername = "mysqlhost";
$username = "login2";
$password = "passw";
$dbname = "login";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
mysqli_set_charset($conn,"utf8");
	
$sql = "
SELECT *
FROM client_skill_learns_eu
WHERE skill = '$name'


";


$query=mysqli_query($conn, $sql) or die(mysqli_error());
    while ($result = mysqli_fetch_assoc($query)) {
		if (!empty($result['id'])) {
			return array($result['class'], $result['pc_level'], $result['skill_level'], $result['race']);
		}else {
			return '';
		}
	}
	
}



function checkallLearnLevels($name, $id)
{
	
	// name = ALL_ShockReflect_G1
	
	$likename = substr_replace($name,"",-1);
	$lasttwocharacter = substr($likename, -2);
	
	if ($lasttwocharacter == '_G' or $lasttwocharacter == '_g') {
		$querylikename = $likename . '%';
	}elseif ($lasttwocharacter == 'G1' or $lasttwocharacter == 'g1'){
		
		$minustwo = substr_replace($name,"",-2);
		
		$querylikename = $minustwo . '%';
	}
	else {
		$querylikename = $name;
	}
	
	
	
$servername = "mysqlhost";
$username = "login2";
$password = "passw";
$dbname = "login";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
mysqli_set_charset($conn,"utf8");
	
$sql = "
SELECT id, name
FROM client_skills
WHERE name like '".$querylikename."' and name not like '".$querylikename."_buff' 
order by id asc


";
	
	
$query=mysqli_query($conn, $sql) or die(mysqli_error());
    while ($result = mysqli_fetch_assoc($query)) {
		
		if ($id == $result["id"]){
			$rows[] = checkonlyLearnLevel($result["name"], '0');
		}else {
			$rows[] = checkonlyLearnLevel($result["name"], $result["id"]);
		}
		
	}
	
	
	$filterrows = array_filter($rows);
	
	$recommClass = implode(", ", $filterrows);
	
	return $recommClass;
	
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
              t.LAN_US  us,
              t.LAN_KO  krl 
           FROM  translation_small t
           WHERE t.name = '$name'
       ";									// !!!!!!!!!!!!!!!!! USE LIVE KOREAN LOCA INSTEAD OF FUTURE !!!!!!!!!!!!!!!!!!!!!!! 
	   

    $query=mysqli_query($conn, $sql) or die(mysqli_error());
    while ($result = mysqli_fetch_assoc($query)) {
	$localizationExtra = !empty($result[$language]) ? $result[$language] : $result['ko'];
	}
    return $localizationExtra;
}




















$sql =" SELECT * ";
$sql.=" From client_skills_eu ";
$sql.=" WHERE id = '$id' ";

$query=mysqli_query($conn, $sql) or die("Whoopsie doopsie~!");

$data = array();



while( $row=mysqli_fetch_array($query) ) {
        $id=$row["id"];
		$localization = translate($row["description"], $language);
		$localization_desc = translate($row["desc_long"], $language);
		$skillicon_name = strtolower($row["skillicon_name"]);
		$skillname = $row["name"];
		$type = $row["type"];
		$sub_type = $row["sub_type"];
		$use_nbattery = $row["use_nbattery"];
		$pvp_remain_time_ratio = $row["pvp_remain_time_ratio"];
		$penalty_skill_succ = $row["penalty_skill_succ"];
		$cost_parameter = $row["cost_parameter"];
		$cost_time = $row["cost_time"]/1000;
		$cost_toggle = $row["cost_toggle"];
		$cost_end = $row["cost_end"];
		$cost_dp = $row["cost_dp"];
		$first_target = strtolower($row["first_target"]);
		$target_range = strtolower($row["target_range"]);
		$delay_time = $row["delay_time"];
		$delay_time_lv = $row["delay_time_lv"];
		$casting_delay = $row["casting_delay"];
		$instant_skill = $row["instant_skill"];
		$first_target_valid_distance = $row["first_target_valid_distance"];
		$target_range_area_type = strtolower($row["target_range_area_type"]);
		$target_range_opt1 = $row["target_range_opt1"];
		$target_range_opt2 = $row["target_range_opt2"];
		$target_range_opt3 = $row["target_range_opt3"];
		$target_range_opt4 = $row["target_range_opt4"];
		$target_maxcount = $row["target_maxcount"];
		$desc_abnormal = $row["desc_abnormal"];
		$chain_category_name = $row["chain_category_name"];
		$charge_set_name = $row["charge_set_name"];
		$skill_group_name = $row["skill_group_name"];
		$desc_long = $row["desc_long"];
		$devanion_skill = strtolower($row["devanion_skill"]);
		$cost_end_lv = $row["cost_end_lv"];
}


$classname = checkallclasses($skillname);
$classKno = checkallclassesforKnowl($skillname);

// Knowledge multiplier
if ($classKno == 'KNIGHT') { //Templar
	$knowledge = 0.9;
	$power = 1.15;
}elseif ($classKno == 'FIGHTER') { //Gladiator
	$knowledge = 0.9;
	$power = 1.15;
}elseif ($classKno == 'ASSASSIN') {
	$knowledge = 0.9;
	$power = 1.1;
}elseif ($classKno == 'RANGER') {
	$knowledge = 0.9;
	$power = 1;
}elseif ($classKno == 'WIZARD') {
	$knowledge = 1.2;
	$power = 0.9;
}elseif ($classKno == 'ELEMENTALLIST') {
	$knowledge = 1.15;
	$power = 0.9;
}elseif ($classKno == 'PRIEST') { //cleric
	$knowledge = 1.05;
	$power = 1.05;
}elseif ($classKno == 'CHANTER') {
	$knowledge = 1.05;
	$power = 1.1;
}elseif ($classKno == 'GUNNER') {
	$knowledge = 1;
	$power = 1;
}elseif ($classKno == 'RIDER') { //Aethertech
	$knowledge = 1.05;
	$power = 1;
}elseif ($classKno == 'BARD') {
	$knowledge = 1.1;
	$power = 0.9;
}elseif ($classKno == 'WARRIOR') { //Warrior
	$knowledge = 0.9;
	$power = 1.1;
}elseif ($classKno == 'SCOUT') {
	$knowledge = 0.9;
	$power = 1;
}elseif ($classKno == 'MAGE') {
	$knowledge = 1.15;
	$power = 0.9;
}elseif ($classKno == 'ENGINEER') {
	$knowledge = 0.9;
	$power = 1;
}elseif ($classKno == 'CLERIC') { //Priest
	$knowledge = 1.1;
	$power = 0.95;
}elseif ($classKno == 'ARTIST') {
	$knowledge = 1.1;
	$power = 0.95;
}elseif ($classKno == 'PAINTER') {
	$knowledge = 0.9;
	$power = 1;
}else {
	$knowledge = 1;
	$power = 1;
}

if (strtolower($type) == 'physical') {
	$knowledge = $power;
}

$isStigma = stigmacheck($skillname);

if ($isStigma == '4') {
	$isStigmaFinal = ' <span style="color:#ff8033" >(Vision Stigma)</span>';
}elseif ($isStigma == '3') {
	$isStigmaFinal = ' <span style="color:#ffc103" >(Major Stigma)</span>';
}elseif ($isStigma == '2') {
	$isStigmaFinal = ' <span style="color:#4ccfff" >(Greater Stigma)</span>';
}elseif ($isStigma == '1') {
	$isStigmaFinal = ' <span style="color:#69e15e" >(Normal Stigma)</span>';
}else {
	$isStigmaFinal = '';
}

if ($devanion_skill == 'custom') {
	$skillbook = DaevanionBook ($skillname);
	if ($skillbook == 'ancient') {
		$isStigma = '';
		$isStigmaFinal = ' <span style="color:#e1ad39" >('. translate('STR_DEVANION_SKILL_CUSTOM', language()) .')</span>';
	}else {
		$isStigma = 5;
		$isStigmaFinal = ' <span style="color:#eb46ff" >('. translate('STR_DEVANION_SKILL_CUSTOM', language()) .')</span>';
	}
}





if ($charge_set_name != NULL){
	
$testcharge = chargingdescription($charge_set_name, $isStigma, $knowledge);
	
	
$chargedescnewline = nl2br($testcharge);
	
$chargefinal = strtr($chargedescnewline, array(
	"%%" => '&percnt;',
	"%" => ''
));
	
}
else {

if ($language == 'ko') {
	$desclong = translate($desc_long, 'krl');
}else {
	$desclong = translate($desc_long, language());
}

$desc = preg_replace_callback('/\[%(.*?)\]/i', function(array $matches) use ($id, $isStigma, $knowledge) {
		return effect($matches[1], $id, $isStigma, $knowledge);
	}, $desclong);

}



$descnewline = nl2br($desc);

$descfinal = strtr($descnewline, array(
	"%%" => '&percnt;',
	"%" => ''
));



// Cast Time
if ($casting_delay != NULL and $instant_skill == NULL) {
		$castingdelay = '<dl class="delay_time"><dt>' . translate('STR_TOOLTIP_CASTDELAY', $language) . '</dt><dd id="skill_casting">' . $casting_delay/1000 . 's</dd></dl><div class="cl"></div>';
	}elseif ($casting_delay == NULL and $instant_skill != NULL) {
		$castingdelay = '<dl class="delay_time"><dt>' . translate('STR_TOOLTIP_CASTDELAY', $language) . '</dt><dd id="skill_casting">' . translate('STR_TOOLTIP_NOCASTDELAY', $language) . '</dd></dl><div class="cl"></div>';
	}elseif($casting_delay > 0 && $instant_skill != NULL) {
		$castingdelay = '<dl class="delay_time"><dt>' . translate('STR_TOOLTIP_CASTDELAY', $language) . '</dt><dd id="skill_casting">' . $casting_delay/1000 . 's</dd></dl><div class="cl"></div>';
	}else {
		$castingdelay = '';
	}

// Cooldown
if ($delay_time >= 60000) {
	
$input = $delay_time + $delay_time_lv;

$uSec = $input % 1000;
$input = floor($input / 1000);

$seconds = $input % 60 . 's';
$input = floor($input / 60);

$minutes = $input % 60 . 'm ';
$input = floor($input / 60); 

$hours = $input % 60 . 'h ';
$input = floor($input / 60); 


if ($seconds > 0) {
	$secondsf = $seconds;
}

if ($minutes > 0) {
	$minutesf = $minutes;
}

if ($hours > 0) {
	$hoursf = $hours;
}

	if ($delay_time_lv < 0 && $isStigma > 0) {
			$UpgradeCD = UpgradeTimeFormat($delay_time_lv, '0');
			$StigmaCDup = ' (<span class="StigmaUpgrade" ><img src="https://aionpowerbook.com/chatemot/comp_greater.png" style="width:14px; height:14px; padding-bottom:3px" >' . $UpgradeCD .'</span>)';
		}
	
	$delaytime = '<dl class="cool_time '.$inputtemp.'" ' . $delayno . '><dt>' . translate('STR_SKILL_COOLING_TIME', $language) . '</dt><dd id="skill_cooltime">' . $hoursf . $minutesf . $secondsf . $StigmaCDup . '</dd></dl>';	
}
elseif ($delay_time >= 1 and $delay_time < 60000) 
{
		
		
			$input = $delay_time + $delay_time_lv;
$uSec = $input % 1000;
$input = floor($input / 1000);

$seconds = $input % 60 . 's';
$input = floor($input / 60);

$minutes = $input % 60 . 'm ';
$input = floor($input / 60); 


if ($seconds >= 0) {
	$secondsf = $seconds;
}

if ($minutes > 0) {
	$minutesf = $minutes;
}
		
		if ($delay_time_lv < 0 && $isStigma > 0) {
			$UpgradeCD = UpgradeTimeFormat($delay_time_lv, '1');
			$StigmaCDup = ' (<span class="StigmaUpgrade" ><img src="https://aionpowerbook.com/chatemot/comp_greater.png" style="width:14px; height:14px; padding-bottom:3px" >' . $UpgradeCD . '</span>)';
		}
		
		$delaytime = '<dl class="cool_time 60000_less" ' . $delayno . '><dt>' . translate('STR_SKILL_COOLING_TIME', $language) . '</dt><dd id="skill_cooltime">' . $minutesf . $secondsf . $StigmaCDup . '</dd></dl>';	
}
else {
		$delaytime = '';
}

// Target
if ($first_target == 'me' and $target_range == 'onlyone') {
	$target = '<dl class="target" ' . $targetno . '><dt>' . translate('STR_TOOLTIP_TARGET', $language) . '</dt><dd id="skill_target">' . translate('STR_TOOLTIP_SELF', $language) . '</dd></dl>';
}elseif ($first_target == 'me' and $target_range == 'area') {
	$target = '<dl class="target" ' . $targetno . '><dt>' . translate('STR_TOOLTIP_TARGET', $language) . '</dt><dd id="skill_target">' . translate('STR_TOOLTIP_AREA', $language) . '</dd></dl>';
}elseif ($first_target == 'target' and $target_range == 'onlyone') {
	$target = '<dl class="target" ' . $targetno . '><dt>' . translate('STR_TOOLTIP_TARGET', $language) . '</dt><dd id="skill_target">' . translate('STR_TOOLTIP_SINGLETARGET', $language) . '</dd></dl>';
}elseif ($first_target == 'target' and $target_range == 'area') {
	$target = '<dl class="target" ' . $targetno . '><dt>' . translate('STR_TOOLTIP_TARGET', $language) . '</dt><dd id="skill_target">' . translate('STR_TOOLTIP_TARGET_AREA', $language) . '</dd></dl>';
}else {
	$target = '';
}


if 	($type != NULL) {	

if (strtolower($sub_type) == 'none'){
	$sub_type_fin = '';
}elseif (strtolower($sub_type) == 'chant'){
	$sub_type_fin = 'Mantra';
}else {
	$sub_type_fin = $sub_type;
}

$typesubtype = '<dl class="type subtype"><dt>Type</dt><dd id="type subtype"><span class="type subtype">' . $type . ' ' . $sub_type_fin . $isStigmaFinal . '</span></dd></dl>';
}


// Cost
if (strtolower($cost_parameter) == 'mp_ratio' and $cost_time != NULL) {
	$costparameter = 'MP ' . $cost_toggle . '% (' . $cost_time . ' sec)';
}elseif (strtolower($cost_parameter) == 'hp_ratio' and $cost_time != NULL) {
	$costparameter = 'HP ' . $cost_toggle . '% (' . $cost_time . ' sec)';
}elseif (strtolower($cost_parameter) == 'dp' and $cost_time != NULL) {
	$costparameter = 'DP ' . $cost_end . ' (DP ' . $cost_toggle . ' / ' . $cost_time . ' sec)';
}else {
	$costparameter = $cost_parameter;
}


// Cost cd
if ($cost_end != NULL and $cost_parameter != NULL and $cost_toggle === NULL) {
	if (strtolower($costparameter) == 'hp_ratio') {
		$cost = '<dl class="cost" ' . $costno . '><dt>' . translate('STR_SKILL_COST', $language) . '</dt><dd class="cost" id="skill_cost hp_ratio">' . $cost_end . '% HP</dd></dl>';
	}elseif (strtolower($costparameter) == 'mp_ratio') {
		$cost = '<dl class="cost" ' . $costno . '><dt>' . translate('STR_SKILL_COST', $language) . '</dt><dd class="cost" id="skill_cost mp_ratio">' . $cost_end . '% MP</dd></dl>';
	}else {
		if ($cost_end_lv < 0 && $isStigma > 0) {
			$StigmaMPReduct = ' (<span class="StigmaUpgrade" ><img src="https://aionpowerbook.com/chatemot/comp_greater.png" style="width:14px; height:14px; padding-bottom:3px" > ' . $cost_end_lv . ' ' . $costparameter . '</span>)';
		}
		$cost = '<dl class="cost" ' . $costno . '><dt>' . translate('STR_SKILL_COST', $language) . '</dt><dd class="cost" id="skill_cost not_mp_hp_ratio">' . $cost_end . ' ' . $costparameter . $StigmaMPReduct . '</dd></dl>';
	}
}elseif ($cost_end != NULL and $cost_parameter != NULL and $cost_toggle != NULL) {
	$cost = '<dl class="cost" ' . $costno . '><dt>' . translate('STR_SKILL_COST', $language) . '</dt><dd class="cost" id="skill_cost toogle_cost">' . $costparameter . '</dd></dl>';
}elseif ($cost_end === NULL and $cost_parameter != NULL and $cost_toggle != NULL) {
	$cost = '<dl class="cost" ' . $costno . '><dt>' . translate('STR_SKILL_COST', $language) . '</dt><dd class="cost" id="skill_cost toogle_no_cost">' . $costparameter . '</dd></dl>';
}else {
	$cost = '';
}

if ($cost_dp != NULL) {
	$cost .= '<dl class="cost" ' . $costno . '><dt>' . translate('STR_SKILL_COST', $language) . '</dt><dd class="cost" id="skill_cost dp_cost">DP ' . $cost_dp . '</dd></dl>';
}



// DONE!!!!!!!!!!

// Skill range

	if ($target_maxcount > 1) {
		$multipleTargets = ' (' . $target_maxcount . ')';
	}

if ($target_range == 'onlyone') {
		$skillrange = '<dl class="skillrange"><dt>Range'.$multipleTargets.'</dt><dd class="cost" id="skill_range"><img src="https://aionpowerbook.com/powerbook/skins/MonoBook/img/onlyone.png">&nbsp;&nbsp;(' . translate('STR_SKILL_AREA_SINGLE', $language) . ')</dd></dl>';
	}elseif ($target_range == 'area') {
		
		if ($target_range_area_type == 'lightningbolt' ) {
			$skillrange = '<dl class="skillrange"><dt>Area Range'.$multipleTargets.'<br>rea</dt><dd class="cost" id="skill_range"><span align="center"><img src="https://aionpowerbook.com/powerbook/skins/MonoBook/img/lightningbolt.png"  ></span><span align="center"> ' . $target_range_opt1 . 'x' . $target_range_opt2 . 'm</span></dd></dl>';
		}elseif ($target_range_area_type == 'fireball' ) {
			$skillrange = '<dl class="skillrange"><dt>Area Range'.$multipleTargets.'</dt><dd class="cost" id="skill_range"><span align="center"><img src="https://aionpowerbook.com/powerbook/skins/MonoBook/img/fireball.png"  ></span><span align="center"> ' . $target_range_opt1 . 'm</span></dd></dl>';
		}elseif ($target_range_area_type == 'firestorm' ) {
			$skillrange = '<dl class="skillrange"><dt>Area Range'.$multipleTargets.'</dt><dd class="cost" id="skill_range"><span align="center"><img src="https://aionpowerbook.com/powerbook/skins/MonoBook/img/firestorm.png"  ></span><span align="center"> ' . $target_range_opt1 . 'm</span></dd></dl>';
		}
	}elseif ($target_range == 'party') {
		if ($target_range_area_type == 'lightningbolt' ) {
			$skillrange = '<dl class="skillrange"><dt>Party Range'.$multipleTargets.'</dt><dd class="cost" id="skill_range"><span align="center"><img src="https://aionpowerbook.com/powerbook/skins/MonoBook/img/lightningbolt.png"  ></span><span align="center"> ' . $target_range_opt1 . 'x' . $target_range_opt2 . 'm</span></dd></dl>';
		}elseif ($target_range_area_type == 'fireball' ) {
			$skillrange = '<dl class="skillrange"><dt>Party Range'.$multipleTargets.'</dt><dd class="cost" id="skill_range"><span align="center"><img src="https://aionpowerbook.com/powerbook/skins/MonoBook/img/fireball.png"  ></span><span align="center"> ' . $target_range_opt1 . 'm</span></dd></dl>';
		}elseif ($target_range_area_type == 'firestorm' ) {
			$skillrange = '<dl class="skillrange" ><dt>Party Range'.$multipleTargets.'</dt><dd class="cost" id="skill_range"><span align="center"><img src="https://aionpowerbook.com/powerbook/skins/MonoBook/img/firestorm.png"  ></span><span align="center"> ' . $target_range_opt1 . 'm</span></dd></dl>';
		}
	}

if ($use_nbattery > 0){				// 6.2 power shards
	$shardcost = '<dl class="shardcost"><dt>Consumes</dt><dd class="cost" id="skill_shardcost">'. extraitem('nbattery_01', $language) .' ' . $use_nbattery . '</dd></dl>';
}

if ($pvp_remain_time_ratio > 0){				// pvp_remain_time_ratio
	$pvpduration = '<dl class="shardcost"><dt>PVP Duration</dt><dd class="cost" id="skill_shardcost">'.$pvp_remain_time_ratio.'%</dd></dl>';
}


if ($penalty_skill_succ != NULL){				// buff / debuff
	$buffdebuff = '<dl class="buffdebuff"><dt>Causes</dt><dd class="cost" id="skill_debuff">'. skinskill($penalty_skill_succ, $language) .'</dd></dl>';
}



$LearnLevel = checkLearnLevel($skillname);
$skilllelvel = strtr(translate('STR_LEVEL_SKILL', $language), array(
	"%0" => $LearnLevel[2],
	));
	
if 	($LearnLevel[2] != NULL) {
	
	$Skilllearnlevel = '<dl class="acquire_level"><dt>Level</dt><dd id="skill_acquire_level"><span class="skill_acquire_level">' . $skilllelvel . '</span></dd></dl>';
	
}
$acquiredLevelstr = strtr(translate('STR_TOOLTIP_SKILL_LEARN_LEVEL', $language), array(
	" %0" => '',
	));	
if 	($LearnLevel[1] != NULL) {
	
	$allLearnLevels = checkallLearnLevels($skillname, $id);
	
	
	$acquiredLevel .= '<dl class="acquire_level"><dt>' . $acquiredLevelstr .'</dt><dd id="skill_acquire_level"><span class="skill_acquire_level">' . $allLearnLevels . '</span></dd></dl>';
}


// ICON //
$skilliconname = strtr($skillicon_name, array(
	".dds" => '',
	));
$serv = $_SERVER['DOCUMENT_ROOT'];
$checkskillicon = $serv . '/skillicon/'.$skilliconname.'.png';

if (file_exists($checkskillicon)) {
    $finalskillicon =  'https://aionpowerbook.com/skillicon/' . $skilliconname . '.png';
} else {
    $finalskillicon =  'https://aionpowerbook.com/skillicon/replaceme.png';
}
// ICON //






$final .= '<div class="hbody" style="width:440px !important"><div class="objects object_skill"><div class="head skill_basic '.$css.'"><dl class="basic">';
$final .= '<dd class="thumb"><img src="' . $finalskillicon . '" id="skill_icon"></dd>';
$final .= '<dt class="name" style="width:355px;" ><span class="all"></span><span id="skill_name"><a href="https://aionpowerbook.com/powerbook/Skill/' . $id . '">' . $localization . '</a> (7.5 EU VERSION)</span></dt>' . $classname . '</dl></div>';
$final .= '<div class="wrap skill_property">';
$final .= $typesubtype;
$final .= $acquiredLevel;
$final .= $Skilllearnlevel;

if ($desc != NULL) {
$final .= '<dl class="skill_desc"><dt>' . translate('STR_TOOLTIP_SKILL_DESC_LONG', $language) . '</dt><dd id="skill_descrption">' .  $descfinal . $descmissmattch . '</dd></dl>';
$final .= '<dl class="skill_desc devdetails" style="display:none"><dt>Test</dt><dd id="skill_descrption">' . $desclong . '</dd></dl>';
}
$final .= $chargefinal;
$final .= $target;
$final .= $castingdelay;
$final .= $delaytime;
$final .= $cost;
$final .= $CPcost;
$final .= $shardcost;
$final .= $pvpduration;
$final .= $buffdebuff;
$final .= $skillchain;
$final .= $skillrange;
$final .= '</div></div><div class="cl"></div><div class="cl"></div></div>';

echo $final;
// Cache the contents to a file
$cached = fopen($cachefile, 'w');
fwrite($cached, ob_get_contents());
fclose($cached);
ob_end_flush(); // Send the output to the browser
?>
