<?php

$mysqlserver="mysqlhost";
$mysqlusername="login2";
$mysqlpassword="passw";
$link2=mysql_connect($mysqlserver, $mysqlusername, $mysqlpassword);
 
$dbname = 'login';
mysql_select_db($dbname, $link2);    
mysql_set_charset('utf8', $link2);

header('Content-type: text/html; charset=utf-8');
$wgExtensionCredits['variable'][] = array(
	'path'           => __FILE__,
	'name'           => 'Aion Items',
	'author'         => 'Kelekelio',
	'url'            => 'https://aionpowerbook.com',
	'descriptionmsg' => 'Aion skilldetails',
	'version'		 => '1.0',
	'license-name' 	 => 'LICENSE',
);


include 'include/checkLearnLevel.php';
include 'include/checkCPcost.php';

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


function stigmacheck($name) {
    include 'include/DBselect.php';
    $result = $db->query("SELECT stigma_display FROM  client_skill_learns WHERE skill = '$name' ", $name)->fetchArray();

	return $result["stigma_display"];
}


function checkallclassesforKnowl ($name)
{
    include 'include/DBselect.php';
    $sql = $db->query("
SELECT id, class
FROM client_skill_learns
WHERE skill = '$name'
")->fetchAll();





    foreach ($sql as $row) {
			$rows[] = $row["class"];
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
    include 'include/DBselect.php';
    $result = $db->query("
SELECT *
FROM client_skill_learns
WHERE skill = '$name'
", $name)->fetchArray();


	$quality = $result["quality"];
	
	if ($quality != NULL) {
		return $quality;
	}else {
		return '';
	}


}


function CheckSkillEU ($name, $language) {

$query = "
SELECT id, name
FROM client_skills_eu
WHERE  name = '$name'
";

    $query  = mysql_query($query) or die(mysql_error());
    $result = mysql_fetch_assoc($query);
	$id = $result["id"];
	
	
	if ($id != NULL) {
		return '<span style="display:inline-block; float:right; width:14px; height:14px; " ><div class="compareEU restrictionTip" title="Compare with EU" compareurl="https://aionpowerbook.com/powerbook/extensions/AionExtensions/skillcompare.php?lang='.$language.'&id='.$id.'"></div><span>';
	}else {
		return $id;
	}
	
}


function rendervariousskillchains ($chainname, $node){
	
	
	// $chainname = SRA_ChainA_2th_1 , $node = 1
	
	$explodechainlevel = explode('_', $chainname);
	
	if ($explodechainlevel[3] != NULL) {
		$fixechainlevel = $explodechainlevel[0] . '_' . $explodechainlevel[1] . '_'.$node.'th' . '_' . $explodechainlevel[3];
	}else {
		$fixechainlevel = $explodechainlevel[0] . '_' . $explodechainlevel[1] . '_'.$node.'th';
	}
	
	
	$query = "
SELECT id, name, skill_category, chain_category_name, self_chain_count, skillicon_name
FROM client_skills
WHERE ( chain_category_name like '$fixechainlevel' or chain_category_name = '$chainname' )
and (name like '%g1' or name like '%_custom_%')
";

    $query  = mysql_query($query) or die(mysql_error());
	$rows = array();
	while($row = mysql_fetch_array($query))
    $rows[] = $row;
foreach($rows as $row){ 
    $eid .= $row['chain_category_name']. '-1-' . $row['name'] . ';';
}
	
	$explodedrows = explode(';', $eid);
	
	foreach($explodedrows as $explodedrow){ 
	
		$endexplode = explode('-', $explodedrow);
		//foreach($endexplode as $finalforeach){ 
		//	$tid .= getchaindetails($finalforeach[0], $finalforeach[1], $finalforeach[2]);
		//} 
		$tid .= '<p>' . getchaindetails($endexplode[0], $endexplode[1], $endexplode[2]) . getchaindetails($endexplode[0], '2', $endexplode[2]) . getchaindetails($endexplode[0], '3', $endexplode[2]) . getchaindetails($endexplode[0], '4', $endexplode[2]) . getchaindetails($endexplode[0], '5', $endexplode[2]) . '</p>';
	} 
	
	
	
	
	return $tid;
}


function getchaindetails ($chainlevel, $node, $name){
//$chainlevel = E_ChainD_3th_1	, $name = EV_AS_FlowingSpiner_G1
$language = language();

if ($node == '1'){
	$dbspec = " and name = '".$name."' ";
	$fixechainlevel = $chainlevel;
}else {
	$explodechainlevel = explode('_', $chainlevel);
	
	if ($explodechainlevel[3] != NULL) {
		$fixechainlevel = $explodechainlevel[0] . '_' . $explodechainlevel[1] . '_' . $node . 'th' . '_' . $explodechainlevel[3];
	}else {
		$fixechainlevel = $explodechainlevel[0] . '_' . $explodechainlevel[1] . '_' . $node . 'th';
	}
	
	
}

    include 'include/DBselect.php';
    $result = $db->query("
SELECT id, name, skill_category, chain_category_name, self_chain_count, skillicon_name, search_ko, search_$language
FROM client_skills
WHERE  chain_category_name = '$fixechainlevel' $dbspec
LIMIT 0,1
", $name)->fetchArray();



	$id = $result["id"];
	$skillicon_name = strtolower($result["skillicon_name"]);
	$self_chain_count = $result["self_chain_count"];
	$localization = !empty($result['search_'.$language]) ? $result['search_'.$language] : $result['search_ko'];
	
	
	
	$skilliconname = strtr($skillicon_name, array(
	".dds" => '',
	));
	
	if ($self_chain_count > 0){
		$selfcount = ' (x'.$self_chain_count.')';
	}
	
	if ($node == '1'){
		$chainnode = '<a href="https://aionpowerbook.com/powerbook/Skill/'.$id.'"><img src="https://aionpowerbook.com/skillicon/'.$skilliconname.'.png" class="thumb3" title="'.$localization.'" ></a>'.$selfcount;
	}else {
		$chainnode = '-------<a href="https://aionpowerbook.com/powerbook/Skill/'.$id.'"><img src="https://aionpowerbook.com/skillicon/'.$skilliconname.'.png" class="thumb3" title="'.$localization.'" ></a>'.$selfcount;
	}
	
	
	if ($id != NULL){
		return $chainnode;	
	}else {
		return '';
	}
	
	
	
}


function skillchain ($category, $name){
	
	//$name = EV_AS_FlowingSpiner_G1, category = SRA_ChainI_1th
	$explodecatname = explode('_', $category);		//SRA, ChainI, 1th
	
	
	
	if ($explodecatname[2] == '1th'){
		$firstskillschain = getchaindetails($category, '1', $name);
		$secondskillschain = getchaindetails($category, '2', $name);
		$thirdskillschain = getchaindetails($category, '3', $name);
		$fourskillschain = getchaindetails($category, '4', $name);
		$fiveskillschain = getchaindetails($category, '5', $name);
	}else{
		$firstskillschain = rendervariousskillchains($category, '1');
	}
	
	
	
	$skillchain = '<div class="cl"></div><dl class="chain"><dt>' . translate('STR_SKILL_START_CHAIN', language()) . '</dt>
	<dd id="skill_chain">
	
	'. $firstskillschain . $secondskillschain . $thirdskillschain . $fourskillschain . $fiveskillschain .'
	
	</dd></dl><div class="cl"></div>';
	
	
	
	
	return $skillchain;
}


function checkifEUexists ($id){
	$query = "
SELECT id
FROM client_skills_eu
WHERE  id = '$id'
";

    $query  = mysql_query($query) or die(mysql_error());
    $result = mysql_fetch_assoc($query);
	$desc_long = $result["desc_long"];
	$id = $result["id"];
	
	return $id;
	
}


function checkchargingleveldesc ($name, $eu, $knowledge){

//$name ex "ALL_BlackDragon_G1_Sys"

    include 'include/DBselect.php';
    $result = $db->query("
SELECT id, desc_long
FROM client_skills
WHERE  name = '$name'
", $name)->fetchArray();



	$desc_long = $result["desc_long"];
	$id = $result["id"];
	
	
	
//$desclong = translate($desc_long, language());
$deckoreanlive = translate($desc_long, 'krl');
$desckoreanfuture = translate($desc_long, 'ko');


if ($deckoreanlive == $desckoreanfuture){
	$desclong = translate($desc_long, language());
	
}else {
	$desclong = translate($desc_long, 'ko');
}





$desc = preg_replace_callback('/\[%(.*?)\]/i', function(array $matches) use ($id, $eu, $knowledge) {
return effect($matches[1], $id, $eu, $knowledge);
}, $desclong);

return $desc;
	

}




function chargingdescription ($name, $eu, $knowledge){

//$name ex "EL_CursedBreath1"

    include 'include/DBselect.php';
    $result = $db->query("
SELECT *
FROM client_skill_charge
WHERE  name = '$name'
", $name)->fetchArray();


	
	//exp value "EL_CursedBreath_1_G1" <= skill name
	
	$skill_name1 = checkchargingleveldesc($result["skill_name1"], $eu, $knowledge);
	$charge_time1 = $result["charge_time1"]/1000;
	$skill_name2 = checkchargingleveldesc($result["skill_name2"], $eu, $knowledge);
	$charge_time2 = $result["charge_time2"]/1000;
	$skill_name3 = checkchargingleveldesc($result["skill_name3"], $eu, $knowledge);
	$charge_time3 = $result["charge_time3"]/1000;
	
	if ($result["skill_name1"] != NULL){
		$charge = '<dl class="skill_desc"><dt>' . translate('STR_LITE__STEP1', language()) . '<br>'.$charge_time1.'s</dt><dd id="skill_descrption">' . $skill_name1 . '</dd></dl><div class="cl"></div>';
	}
	if ($result["skill_name2"] != NULL){
		$charge .= '<dl class="skill_desc"><dt>' . translate('STR_LITE__STEP2', language()) . '<br>'.$charge_time2.'s</dt><dd id="skill_descrption">' . $skill_name2 . '</dd></dl><div class="cl"></div>';
	}
	if ($result["skill_name3"] != NULL){
		$charge .= '<dl class="skill_desc"><dt>' . translate('STR_LITE__STEP3', language()) . '<br>'.$charge_time3.'s</dt><dd id="skill_descrption">' . $skill_name3 . '</dd></dl><div class="cl"></div>';
	}

	return $charge;
	

}



function skillbuffdesc ($name){

//$name ex "ALL_BlackDragon_G1_Sys"

    include 'include/DBselect.php';
    $result = $db->query("
SELECT id
FROM client_skills
WHERE  name = '$name'
", $name)->fetchArray();


	return $result["id"];
}



function skillparamaura ($name, $id, $isstatname, $eu, $knowledge){

// e1.ProcHeal_Instant.Heal
// expected $result[$name] = FI_N_Fortitude_G1_Proc

    include 'include/DBselect.php';
    $result = $db->query("
SELECT *
FROM client_skills
WHERE  id = '$id'
", $name)->fetchArray();



	$tempname = $result[$name];
	
	
if ($isstatname != NULL){
		
		
		$skillID = skillbuffdesc($result[$name]);
		
		if ($skillID != NULL ){
			$buffdata = effect($isstatname, $skillID, $eu, $knowledge);
			return $buffdata;
		}else{
			return '';
		}
		
	}
	
	else {

	return $result[$name];
	}
	
	
	//add if $result[$name] matches a set of stat names => translate to the stat name. else reutrn the number
}



function skillparambuff ($name, $id, $isstatname, $eu, $knowledge){

// $name = 'effect4_reserved1'
// e1.ProcHeal_Instant.Heal
// expected $result[$name] = FI_N_Fortitude_G1_Proc
// if $eu > 0, and $name = *_reserved1 =>

    include 'include/DBselect.php';
    $result = $db->query("
SELECT *
FROM client_skills
WHERE  id = '$id'
", $name)->fetchArray();


	$tempname = $result[$name];
	
	
if ($isstatname != NULL){
		
		
		$skillID = skillbuffdesc($result[$name]);
		
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

	return $result[$name];
	}
	
	
	//add if $result[$name] matches a set of stat names => translate to the stat name. else reutrn the number
}


function skillparam ($name, $id, $isstatname, $eu){

//$name ex "effect1_reserved9"
//Expected return '666' or 'ElementalDefendAir' (number or string)


    include 'include/DBselect.php';
    $result = $db->query("
SELECT *
FROM client_skills
WHERE  id = '$id'
", $name)->fetchArray();



	
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
		elseif ($statname == 'openaerial_arp'){
			$stat = translate('STR_TOOLTIP_SKILL_STAT_OPENAREIAL_ARP', language());
		}
		elseif ($statname == 'magicalcriticalreducerate'){
			$stat = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_CRITICAL_REDUCE_RATE', language());
		}
		elseif ($statname == 'maxfp'){
			$stat = translate('STR_TOOLTIP_SKILL_STAT_MAXFLYTIME', language());
		}
		elseif ($statname == 'arpulled'){
			$stat = translate('STR_TOOLTIP_SKILL_STAT_ARPulled', language());
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
	
	
	//add if $result[$name] matches a set of stat names => translate to the stat name. else reutrn the number
}










function effect($name, $id, $eu, $knowledge)
{
//$name ex "e1.SpellATK.Damage"	, "e2.Provoker.OtherSkill.e1.ProcHeal_Instant.Heal"



$skillparams = explode('.', $name);


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
	
	
	//if $reserved[0] = reserved1 and $eu > 0 => duplicate last number and create upgrade "tooltip"
	
	
	
	
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
			}elseif ( strtolower($skillparams[1]) == 'skillatk_instant' or strtolower($skillparams[1]) == 'skillatk' or strtolower($skillparams[1]) == 'skillatkdrain_instant' ) {
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
	}elseif ( $eu > 0 && ($reserved[0] == 'reserved15' or $reserved[1] == 'reserved15' or $reserved[2] == 'reserved15' or $reserved[3] == 'reserved15' ) ) {
		
		if ( $reserved[1] == 'reserved15' && $collumnt1 > 0 ) {
			
			$stigmUpKno = $collumnt1;
			$stigmaUp = ' (<span class="StigmaUpgrade" ><img src="https://aionpowerbook.com/chatemot/comp_greater.png" style="width:14px; height:14px; padding-bottom:3px" >+'.$stigmUpKno.'</span>)';
		}
		$testtype = 't15';
	}elseif ( $eu > 0 && ($reserved[0] == 'reserved19' or $reserved[1] == 'reserved19' or $reserved[2] == 'reserved19' or $reserved[3] == 'reserved19' ) ) {
		
		if ( $reserved[1] == 'reserved19' && $collumnt1 > 0 ) {
			
			$stigmUpKno = $collumnt1;
			$stigmaUp = ' (<span class="StigmaUpgrade" ><img src="https://aionpowerbook.com/chatemot/comp_greater.png" style="width:14px; height:14px; padding-bottom:3px" >+'.$stigmUpKno.'</span>)';
		}
		$testtype = 't19';
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
			if ( strtolower($skillparams[1]) == 'provoker' && strtolower($skillparams[2]) == 'otherskill' ) {
				$sumcollumnt = $collumnt0 + $collumnt1 + $collumnt2 + $collumnt3;
			}else {
				$sumcollumnt = number_format($collumnt0 + $collumnt1 + $collumnt2 + $collumnt3);
			}

		}
		
	}elseif($collumnt0 + $collumnt1 + $collumnt2 + $collumnt3 < 0){
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
			$sumcollumnt = number_format($collumnt0 + $collumnt1 + $collumnt2 + $collumnt3);

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







 
$wgHooks['ParserFirstCallInit'][] = 'AionSkillDetailsFunction';
$wgExtensionMessagesFiles['AionSkillDetails'] = __DIR__ . '/aion_skill_details.i18n.php';
function AionSkillDetailsFunction( &$parser ) {
   $parser->setFunctionHook( 'skilldetails', 'AionSkillDetailsParserFunction' );
   return true;
}



function AionSkillDetailsParserFunction( &$parser, $arg1 ) {
global $wgOut;
$dbid =  $_GET['dbid'];
$isQA =  $_GET['qa'];
$language = language(); 
global $wgLang;
$code = $wgLang->getCode();

if (isClassic() == "1") {
    $cl = "_cl";
}


$wgOut->AddHTML('<div class="hbody">');

$wgOut->addWikiText( '<div class="fullloadcompareEU" style="float:right; display:none" ><div class="loadcompareEU" ></div></div>' );











$serv = $_SERVER['DOCUMENT_ROOT'];
$cachefile = $serv . '/powerbook/extensions/AionExtensions/cache/skilldetails/'.$language.'/'.$dbid. $cl . '.html';
$exists = file_exists($cachefile);

if( !$exists || ( $exists && time() > strtotime('+31 days', filemtime($cachefile)) ) || $isQA == '1'  ) {


    include 'include/DBselect.php';
    $sql = $db->query("
SELECT * 
FROM client_skills
WHERE id = '$dbid' ")->fetchAll();





    foreach ($sql as $skillrow) {
    $id=$skillrow["id"];
	$skillname = $skillrow["name"];	
	$localization = !empty($skillrow['search_'.$language]) ? $skillrow['search_'.$language] : $skillrow['search_ko'];
	$desc_long = $skillrow["desc_long"];
	$skillicon_name = strtolower($skillrow["skillicon_name"]);
	$casting_delay = $skillrow["casting_delay"];
	$delay_time = $skillrow["delay_time"];
	$delay_time_lv = $skillrow["delay_time_lv"];
	$instant_skill = $skillrow["instant_skill"];
	$first_target = strtolower($skillrow["first_target"]);
	$cost_end = $skillrow["cost_end"];
	$cost_parameter = $skillrow["cost_parameter"];
	$cost_time = $skillrow["cost_time"]/1000;
	$cost_toggle = $skillrow["cost_toggle"];
	$target_range =  strtolower($skillrow["target_range"]);
	$skill_group_name = $skillrow["skill_group_name"];
	$clientversion = $skillrow["client_version"];
	$charge_set_name = $skillrow["charge_set_name"];
	$type = $skillrow["type"];
	$sub_type = $skillrow["sub_type"];
	$desc_abnormal = $skillrow["desc_abnormal"];
	$chain_category_name = $skillrow["chain_category_name"];
	$use_nbattery = $skillrow["use_nbattery"];
	$cost_dp = $skillrow["cost_dp"];
	$pvp_remain_time_ratio = $skillrow["pvp_remain_time_ratio"];
	$penalty_skill_succ = $skillrow["penalty_skill_succ"];
	$devanion_skill = strtolower($skillrow["devanion_skill"]);
	
	
	$first_target_valid_distance = $skillrow["first_target_valid_distance"];
	$target_range_area_type = strtolower($skillrow["target_range_area_type"]);
	$target_range_opt1 = $skillrow["target_range_opt1"];
	$target_range_opt2 = $skillrow["target_range_opt2"];
	$target_range_opt3 = $skillrow["target_range_opt3"];
	$target_range_opt4 = $skillrow["target_range_opt4"];
	$target_maxcount = $skillrow["target_maxcount"];
	$cost_end_lv = $skillrow["cost_end_lv"];
	
	
	
	

	
	$effect1_remain = $skillrow["effect1_remain1"] + $skillrow["effect1_remain2"];
	$effect2_remain = $skillrow["effect2_remain1"] + $skillrow["effect2_remain2"];
	$effect3_remain = $skillrow["effect3_remain1"] + $skillrow["effect3_remain2"];
	$effect4_remain = $skillrow["effect4_remain1"] + $skillrow["effect4_remain2"];
	$effect1_type = $skillrow["effect1_type"];
	$effect2_type = $skillrow["effect2_type"];
	$effect3_type = $skillrow["effect3_type"];
	$effect4_type = $skillrow["effect4_type"];
	
	
	$effect1_critical_prob_mod2 = $skillrow["effect1_critical_prob_mod2"];
	$effect2_critical_prob_mod2 = $skillrow["effect2_critical_prob_mod2"];
	$effect3_critical_prob_mod2 = $skillrow["effect3_critical_prob_mod2"];
	$effect4_critical_prob_mod2 = $skillrow["effect4_critical_prob_mod2"];
	
	
	$effect1_noresist = $skillrow["effect1_noresist"];
	$effect2_noresist = $skillrow["effect2_noresist"];
	$effect3_noresist = $skillrow["effect3_noresist"];
	$effect4_noresist = $skillrow["effect4_noresist"];
	


	
	
if ($effect1_type == 'spellatk_instant' or $effect1_type == 'skillatk_instant' ) {
	$reserved16_1 = 'Additional DMG To';
}

if ($effect2_type == 'spellatk_instant' or $effect2_type == 'skillatk_instant' ) {
	$reserved16_2 = 'Additional DMG To';
}

if ($effect3_type == 'spellatk_instant' or $effect3_type == 'skillatk_instant' ) {
	$reserved16_3 = 'Additional DMG To';
}

if ($effect4_type == 'spellatk_instant' or $effect4_type == 'skillatk_instant' ) {
	$reserved16_4 = 'Additional DMG To';
}


	

	
	
	
include 'include/overseas.php';	
	
	
	
	
	
	
if ($effect1_type != NULL){	
$effect1 = '<tr><td>Effect_1: </td><td></td></tr>';


$effect1 .= '<tr><td>E1_type: </td><td>'.$skillrow["effect1_type"].'</td></tr>';


if ($effect1_noresist == '1'){	 $effect1 .= '<tr><td>Resist: </td><td>Can not resist</td></tr>'; }
if ($effect1_remain != NULL && $effect1_remain != '0'){	 $effect1 .= '<tr><td>E1_remain: </td><td>'.TimeFormat($effect1_remain).'</td></tr>'; }
if ($effect1_critical_prob_mod2 != NULL && $effect1_critical_prob_mod2 != '0'){	 $effect1 .= '<tr><td>Crit Modifier: </td><td>'.$effect1_critical_prob_mod2.'%</td></tr>'; }
if ($skillrow["effect1_reserved1"] != NULL && $skillrow["effect1_reserved1"] != '0'){	 $effect1 .= '<tr><td>E1_1: </td><td>'.$skillrow["effect1_reserved1"].'</td></tr>'; }
if ($skillrow["effect1_reserved2"] != NULL && $skillrow["effect1_reserved2"] != '0'){	 $effect1 .= '<tr><td>E1_2: </td><td>'.$skillrow["effect1_reserved2"].'</td></tr>'; }
if ($skillrow["effect1_reserved3"] != NULL && $skillrow["effect1_reserved3"] != '0'){	 $effect1 .= '<tr><td>E1_3: </td><td>'.$skillrow["effect1_reserved3"].'</td></tr>'; }
if ($skillrow["effect1_reserved4"] != NULL && $skillrow["effect1_reserved4"] != '0'){	 $effect1 .= '<tr><td>E1_4: </td><td>'.$skillrow["effect1_reserved4"].'</td></tr>'; }
if ($skillrow["effect1_reserved5"] != NULL && $skillrow["effect1_reserved5"] != '0'){	 $effect1 .= '<tr><td>E1_5: </td><td>'.$skillrow["effect1_reserved5"].'</td></tr>'; }
if ($skillrow["effect1_reserved6"] != NULL && $skillrow["effect1_reserved6"] != '0'){	 $effect1 .= '<tr><td>E1_6: </td><td>'.$skillrow["effect1_reserved6"].'</td></tr>'; }
if ($skillrow["effect1_reserved7"] != NULL && $skillrow["effect1_reserved7"] != '0'){	 $effect1 .= '<tr><td>E1_7: </td><td>'.$skillrow["effect1_reserved7"].'</td></tr>'; }
if ($skillrow["effect1_reserved8"] != NULL && $skillrow["effect1_reserved8"] != '0'){	 $effect1 .= '<tr><td>E1_8: </td><td>'.$skillrow["effect1_reserved8"].'</td></tr>'; }
if ($skillrow["effect1_reserved9"] != NULL && $skillrow["effect1_reserved9"] != '0'){	 $effect1 .= '<tr><td>E1_9: </td><td>'.$skillrow["effect1_reserved9"].'</td></tr>'; }
if ($skillrow["effect1_reserved10"] != NULL && $skillrow["effect1_reserved10"] != '0'){	 $effect1 .= '<tr><td>E1_10: </td><td>'.$skillrow["effect1_reserved10"].'</td></tr>'; }
if ($skillrow["effect1_reserved11"] != NULL && $skillrow["effect1_reserved11"] != '0'){	 $effect1 .= '<tr><td>E1_11: </td><td>'.$skillrow["effect1_reserved11"].'</td></tr>'; }
if ($skillrow["effect1_reserved12"] != NULL && $skillrow["effect1_reserved12"] != '0'){	 $effect1 .= '<tr><td>E1_12: </td><td>'.$skillrow["effect1_reserved12"].'</td></tr>'; }
if ($skillrow["effect1_reserved13"] != NULL && $skillrow["effect1_reserved13"] != '0'){	 $effect1 .= '<tr><td>E1_13: </td><td>'.$skillrow["effect1_reserved13"].'</td></tr>'; }
if ($skillrow["effect1_reserved14"] != NULL && $skillrow["effect1_reserved14"] != '0'){	 $effect1 .= '<tr><td>E1_14: </td><td>'.$skillrow["effect1_reserved14"].'</td></tr>'; }
if ($skillrow["effect1_reserved15"] != NULL && $skillrow["effect1_reserved15"] != '0'){	 $effect1 .= '<tr><td>E1_15: </td><td>'.$skillrow["effect1_reserved15"].'</td></tr>'; }
if ($skillrow["effect1_reserved16"] != NULL && $skillrow["effect1_reserved16"] != '0'){	 $effect1 .= '<tr><td>'.$reserved16_1.': </td><td>'.$skillrow["effect1_reserved16"].'</td></tr>'; }
if ($skillrow["effect1_reserved17"] != NULL && $skillrow["effect1_reserved17"] != '0'){	 $effect1 .= '<tr><td>E1_17: </td><td>'.$skillrow["effect1_reserved17"].'</td></tr>'; }
if ($skillrow["effect1_reserved18"] != NULL && $skillrow["effect1_reserved18"] != '0'){	 $effect1 .= '<tr><td>E1_18: </td><td>'.$skillrow["effect1_reserved18"].'</td></tr>'; }
if ($skillrow["effect1_reserved19"] != NULL && $skillrow["effect1_reserved19"] != '0'){	 $effect1 .= '<tr><td>E1_19: </td><td>'.$skillrow["effect1_reserved19"].'</td></tr>'; }
if ($skillrow["effect1_reserved20"] != NULL && $skillrow["effect1_reserved20"] != '0'){	 $effect1 .= '<tr><td>E1_20: </td><td>'.$skillrow["effect1_reserved20"].'</td></tr>'; }
if ($skillrow["effect1_reserved21"] != NULL && $skillrow["effect1_reserved21"] != '0'){	 $effect1 .= '<tr><td>E1_21: </td><td>'.$skillrow["effect1_reserved21"].'</td></tr>'; }
if ($skillrow["effect1_reserved22"] != NULL && $skillrow["effect1_reserved22"] != '0'){	 $effect1 .= '<tr><td>E1_22: </td><td>'.$skillrow["effect1_reserved22"].'</td></tr>'; }
}

if ($effect2_type != NULL){	
$effect2 = '<tr><td height="25px" ></td><td></td></tr>';
$effect2 .= '<tr><td>Effect_2: </td><td></td></tr>';


$effect2 .= '<tr><td>E2_type: </td><td>'.$skillrow["effect2_type"].'</td></tr>';


if ($effect2_noresist == '1'){	 $effect2 .= '<tr><td>Resist: </td><td>Can not resist</td></tr>'; }
if ($effect2_remain != NULL && $effect2_remain != '0'){	 $effect2 .= '<tr><td>E2_remain: </td><td>'.TimeFormat($effect2_remain).'</td></tr>'; }
if ($effect2_critical_prob_mod2 != NULL && $effect2_critical_prob_mod2 != '0'){	 $effect2 .= '<tr><td>Crit Modifier: </td><td>'.$effect2_critical_prob_mod2.'%</td></tr>'; }
if ($skillrow["effect2_reserved1"] != NULL && $skillrow["effect2_reserved1"] != '0'){	 $effect2 .= '<tr><td>E2_1: </td><td>'.$skillrow["effect2_reserved1"].'</td></tr>'; }
if ($skillrow["effect2_reserved2"] != NULL && $skillrow["effect2_reserved2"] != '0'){	 $effect2 .= '<tr><td>E2_2: </td><td>'.$skillrow["effect2_reserved2"].'</td></tr>'; }
if ($skillrow["effect2_reserved3"] != NULL && $skillrow["effect2_reserved3"] != '0'){	 $effect2 .= '<tr><td>E2_3: </td><td>'.$skillrow["effect2_reserved3"].'</td></tr>'; }
if ($skillrow["effect2_reserved4"] != NULL && $skillrow["effect2_reserved4"] != '0'){	 $effect2 .= '<tr><td>E2_4: </td><td>'.$skillrow["effect2_reserved4"].'</td></tr>'; }
if ($skillrow["effect2_reserved5"] != NULL && $skillrow["effect2_reserved5"] != '0'){	 $effect2 .= '<tr><td>E2_5: </td><td>'.$skillrow["effect2_reserved5"].'</td></tr>'; }
if ($skillrow["effect2_reserved6"] != NULL && $skillrow["effect2_reserved6"] != '0'){	 $effect2 .= '<tr><td>E2_6: </td><td>'.$skillrow["effect2_reserved6"].'</td></tr>'; }
if ($skillrow["effect2_reserved7"] != NULL && $skillrow["effect2_reserved7"] != '0'){	 $effect2 .= '<tr><td>E2_7: </td><td>'.$skillrow["effect2_reserved7"].'</td></tr>'; }
if ($skillrow["effect2_reserved8"] != NULL && $skillrow["effect2_reserved8"] != '0'){	 $effect2 .= '<tr><td>E2_8: </td><td>'.$skillrow["effect2_reserved8"].'</td></tr>'; }
if ($skillrow["effect2_reserved9"] != NULL && $skillrow["effect2_reserved9"] != '0'){	 $effect2 .= '<tr><td>E2_9: </td><td>'.$skillrow["effect2_reserved9"].'</td></tr>'; }
if ($skillrow["effect2_reserved10"] != NULL && $skillrow["effect2_reserved10"] != '0'){	 $effect2 .= '<tr><td>E2_10: </td><td>'.$skillrow["effect2_reserved10"].'</td></tr>'; }
if ($skillrow["effect2_reserved11"] != NULL && $skillrow["effect2_reserved11"] != '0'){	 $effect2 .= '<tr><td>E2_11: </td><td>'.$skillrow["effect2_reserved11"].'</td></tr>'; }
if ($skillrow["effect2_reserved12"] != NULL && $skillrow["effect2_reserved12"] != '0'){	 $effect2 .= '<tr><td>E2_12: </td><td>'.$skillrow["effect2_reserved12"].'</td></tr>'; }
if ($skillrow["effect2_reserved13"] != NULL && $skillrow["effect2_reserved13"] != '0'){	 $effect2 .= '<tr><td>E2_13: </td><td>'.$skillrow["effect2_reserved13"].'</td></tr>'; }
if ($skillrow["effect2_reserved14"] != NULL && $skillrow["effect2_reserved14"] != '0'){	 $effect2 .= '<tr><td>E2_14: </td><td>'.$skillrow["effect2_reserved14"].'</td></tr>'; }
if ($skillrow["effect2_reserved15"] != NULL && $skillrow["effect2_reserved15"] != '0'){	 $effect2 .= '<tr><td>E2_15: </td><td>'.$skillrow["effect2_reserved15"].'</td></tr>'; }
if ($skillrow["effect2_reserved16"] != NULL && $skillrow["effect2_reserved16"] != '0'){	 $effect2 .= '<tr><td>'.$reserved16_2.': </td><td>'.$skillrow["effect2_reserved16"].'</td></tr>'; }
if ($skillrow["effect2_reserved17"] != NULL && $skillrow["effect2_reserved17"] != '0'){	 $effect2 .= '<tr><td>E2_17: </td><td>'.$skillrow["effect2_reserved17"].'</td></tr>'; }
if ($skillrow["effect2_reserved18"] != NULL && $skillrow["effect2_reserved18"] != '0'){	 $effect2 .= '<tr><td>E2_18: </td><td>'.$skillrow["effect2_reserved18"].'</td></tr>'; }
if ($skillrow["effect2_reserved19"] != NULL && $skillrow["effect2_reserved19"] != '0'){	 $effect2 .= '<tr><td>E2_19: </td><td>'.$skillrow["effect2_reserved19"].'</td></tr>'; }
if ($skillrow["effect2_reserved20"] != NULL && $skillrow["effect2_reserved20"] != '0'){	 $effect2 .= '<tr><td>E2_20: </td><td>'.$skillrow["effect2_reserved20"].'</td></tr>'; }
if ($skillrow["effect2_reserved21"] != NULL && $skillrow["effect2_reserved21"] != '0'){	 $effect2 .= '<tr><td>E2_21: </td><td>'.$skillrow["effect2_reserved21"].'</td></tr>'; }
if ($skillrow["effect2_reserved22"] != NULL && $skillrow["effect2_reserved22"] != '0'){	 $effect2 .= '<tr><td>E2_22: </td><td>'.$skillrow["effect2_reserved22"].'</td></tr>'; }
}

if ($effect3_type != NULL){	
$effect3 = '<tr><td height="25px" ></td><td></td></tr>';
$effect3 .= '<tr><td>Effect_3: </td><td></td></tr>';


$effect3 .= '<tr><td>E3_type: </td><td>'.$skillrow["effect3_type"].'</td></tr>';


if ($effect3_noresist == '1'){	 $effect3 .= '<tr><td>Resist: </td><td>Can not resist</td></tr>'; }
if ($effect3_remain != NULL && $effect3_remain != '0'){	 $effect3 .= '<tr><td>E3_remain: </td><td>'.TimeFormat($effect3_remain).'</td></tr>'; }
if ($effect3_critical_prob_mod2 != NULL && $effect3_critical_prob_mod2 != '0'){	 $effect3 .= '<tr><td>Crit Modifier: </td><td>'.$effect3_critical_prob_mod2.'%</td></tr>'; }
if ($skillrow["effect3_reserved1"] != NULL && $skillrow["effect3_reserved1"] != '0'){	 $effect3 .= '<tr><td>E3_1: </td><td>'.$skillrow["effect3_reserved1"].'</td></tr>'; }
if ($skillrow["effect3_reserved2"] != NULL && $skillrow["effect3_reserved2"] != '0'){	 $effect3 .= '<tr><td>E3_2: </td><td>'.$skillrow["effect3_reserved2"].'</td></tr>'; }
if ($skillrow["effect3_reserved3"] != NULL && $skillrow["effect3_reserved3"] != '0'){	 $effect3 .= '<tr><td>E3_3: </td><td>'.$skillrow["effect3_reserved3"].'</td></tr>'; }
if ($skillrow["effect3_reserved4"] != NULL && $skillrow["effect3_reserved4"] != '0'){	 $effect3 .= '<tr><td>E3_4: </td><td>'.$skillrow["effect3_reserved4"].'</td></tr>'; }
if ($skillrow["effect3_reserved5"] != NULL && $skillrow["effect3_reserved5"] != '0'){	 $effect3 .= '<tr><td>E3_5: </td><td>'.$skillrow["effect3_reserved5"].'</td></tr>'; }
if ($skillrow["effect3_reserved6"] != NULL && $skillrow["effect3_reserved6"] != '0'){	 $effect3 .= '<tr><td>E3_6: </td><td>'.$skillrow["effect3_reserved6"].'</td></tr>'; }
if ($skillrow["effect3_reserved7"] != NULL && $skillrow["effect3_reserved7"] != '0'){	 $effect3 .= '<tr><td>E3_7: </td><td>'.$skillrow["effect3_reserved7"].'</td></tr>'; }
if ($skillrow["effect3_reserved8"] != NULL && $skillrow["effect3_reserved8"] != '0'){	 $effect3 .= '<tr><td>E3_8: </td><td>'.$skillrow["effect3_reserved8"].'</td></tr>'; }
if ($skillrow["effect3_reserved9"] != NULL && $skillrow["effect3_reserved9"] != '0'){	 $effect3 .= '<tr><td>E3_9: </td><td>'.$skillrow["effect3_reserved9"].'</td></tr>'; }
if ($skillrow["effect3_reserved10"] != NULL && $skillrow["effect3_reserved10"] != '0'){	 $effect3 .= '<tr><td>E3_10: </td><td>'.$skillrow["effect3_reserved10"].'</td></tr>'; }
if ($skillrow["effect3_reserved11"] != NULL && $skillrow["effect3_reserved11"] != '0'){	 $effect3 .= '<tr><td>E3_11: </td><td>'.$skillrow["effect3_reserved11"].'</td></tr>'; }
if ($skillrow["effect3_reserved12"] != NULL && $skillrow["effect3_reserved12"] != '0'){	 $effect3 .= '<tr><td>E3_12: </td><td>'.$skillrow["effect3_reserved12"].'</td></tr>'; }
if ($skillrow["effect3_reserved13"] != NULL && $skillrow["effect3_reserved13"] != '0'){	 $effect3 .= '<tr><td>E3_13: </td><td>'.$skillrow["effect3_reserved13"].'</td></tr>'; }
if ($skillrow["effect3_reserved14"] != NULL && $skillrow["effect3_reserved14"] != '0'){	 $effect3 .= '<tr><td>E3_14: </td><td>'.$skillrow["effect3_reserved14"].'</td></tr>'; }
if ($skillrow["effect3_reserved15"] != NULL && $skillrow["effect3_reserved15"] != '0'){	 $effect3 .= '<tr><td>E3_15: </td><td>'.$skillrow["effect3_reserved15"].'</td></tr>'; }
if ($skillrow["effect3_reserved16"] != NULL && $skillrow["effect3_reserved16"] != '0'){	 $effect3 .= '<tr><td>'.$reserved16_3.': </td><td>'.$skillrow["effect3_reserved16"].'</td></tr>'; }
if ($skillrow["effect3_reserved17"] != NULL && $skillrow["effect3_reserved17"] != '0'){	 $effect3 .= '<tr><td>E3_17: </td><td>'.$skillrow["effect3_reserved17"].'</td></tr>'; }
if ($skillrow["effect3_reserved18"] != NULL && $skillrow["effect3_reserved18"] != '0'){	 $effect3 .= '<tr><td>E3_18: </td><td>'.$skillrow["effect3_reserved18"].'</td></tr>'; }
if ($skillrow["effect3_reserved19"] != NULL && $skillrow["effect3_reserved19"] != '0'){	 $effect3 .= '<tr><td>E3_19: </td><td>'.$skillrow["effect3_reserved19"].'</td></tr>'; }
if ($skillrow["effect3_reserved20"] != NULL && $skillrow["effect3_reserved20"] != '0'){	 $effect3 .= '<tr><td>E3_20: </td><td>'.$skillrow["effect3_reserved20"].'</td></tr>'; }
if ($skillrow["effect3_reserved21"] != NULL && $skillrow["effect3_reserved21"] != '0'){	 $effect3 .= '<tr><td>E3_21: </td><td>'.$skillrow["effect3_reserved21"].'</td></tr>'; }
if ($skillrow["effect3_reserved22"] != NULL && $skillrow["effect3_reserved22"] != '0'){	 $effect3 .= '<tr><td>E3_22: </td><td>'.$skillrow["effect3_reserved22"].'</td></tr>'; }
}

if ($effect4_type != NULL){	
$effect4 = '<tr><td height="25px" ></td><td></td></tr>';
$effect4 .= '<tr><td>Effect_4: </td><td></td></tr>';


$effect4 .= '<tr><td>E4_type: </td><td>'.$skillrow["effect4_type"].'</td></tr>';


if ($effect4_noresist == '1'){	 $effect4 .= '<tr><td>Resist: </td><td>Can not resist</td></tr>'; }
if ($effect4_remain != NULL && $effect4_remain != '0'){	 $effect4 .= '<tr><td>E4_remain: </td><td>'.TimeFormat($effect4_remain).'</td></tr>'; }
if ($effect4_critical_prob_mod2 != NULL && $effect4_critical_prob_mod2 != '0'){	 $effect4 .= '<tr><td>Crit Modifier: </td><td>'.$effect4_critical_prob_mod2.'%</td></tr>'; }
if ($skillrow["effect4_reserved1"] != NULL && $skillrow["effect4_reserved1"] != '0'){	 $effect4 .= '<tr><td>E4_1: </td><td>'.$skillrow["effect4_reserved1"].'</td></tr>'; }
if ($skillrow["effect4_reserved2"] != NULL && $skillrow["effect4_reserved2"] != '0'){	 $effect4 .= '<tr><td>E4_2: </td><td>'.$skillrow["effect4_reserved2"].'</td></tr>'; }
if ($skillrow["effect4_reserved3"] != NULL && $skillrow["effect4_reserved3"] != '0'){	 $effect4 .= '<tr><td>E4_3: </td><td>'.$skillrow["effect4_reserved3"].'</td></tr>'; }
if ($skillrow["effect4_reserved4"] != NULL && $skillrow["effect4_reserved4"] != '0'){	 $effect4 .= '<tr><td>E4_4: </td><td>'.$skillrow["effect4_reserved4"].'</td></tr>'; }
if ($skillrow["effect4_reserved5"] != NULL && $skillrow["effect4_reserved5"] != '0'){	 $effect4 .= '<tr><td>E4_5: </td><td>'.$skillrow["effect4_reserved5"].'</td></tr>'; }
if ($skillrow["effect4_reserved6"] != NULL && $skillrow["effect4_reserved6"] != '0'){	 $effect4 .= '<tr><td>E4_6: </td><td>'.$skillrow["effect4_reserved6"].'</td></tr>'; }
if ($skillrow["effect4_reserved7"] != NULL && $skillrow["effect4_reserved7"] != '0'){	 $effect4 .= '<tr><td>E4_7: </td><td>'.$skillrow["effect4_reserved7"].'</td></tr>'; }
if ($skillrow["effect4_reserved8"] != NULL && $skillrow["effect4_reserved8"] != '0'){	 $effect4 .= '<tr><td>E4_8: </td><td>'.$skillrow["effect4_reserved8"].'</td></tr>'; }
if ($skillrow["effect4_reserved9"] != NULL && $skillrow["effect4_reserved9"] != '0'){	 $effect4 .= '<tr><td>E4_9: </td><td>'.$skillrow["effect4_reserved9"].'</td></tr>'; }
if ($skillrow["effect4_reserved10"] != NULL && $skillrow["effect4_reserved10"] != '0'){	 $effect4 .= '<tr><td>E4_10: </td><td>'.$skillrow["effect4_reserved10"].'</td></tr>'; }
if ($skillrow["effect4_reserved11"] != NULL && $skillrow["effect4_reserved11"] != '0'){	 $effect4 .= '<tr><td>E4_11: </td><td>'.$skillrow["effect4_reserved11"].'</td></tr>'; }
if ($skillrow["effect4_reserved12"] != NULL && $skillrow["effect4_reserved12"] != '0'){	 $effect4 .= '<tr><td>E4_12: </td><td>'.$skillrow["effect4_reserved12"].'</td></tr>'; }
if ($skillrow["effect4_reserved13"] != NULL && $skillrow["effect4_reserved13"] != '0'){	 $effect4 .= '<tr><td>E4_13: </td><td>'.$skillrow["effect4_reserved13"].'</td></tr>'; }
if ($skillrow["effect4_reserved14"] != NULL && $skillrow["effect4_reserved14"] != '0'){	 $effect4 .= '<tr><td>E4_14: </td><td>'.$skillrow["effect4_reserved14"].'</td></tr>'; }
if ($skillrow["effect4_reserved15"] != NULL && $skillrow["effect4_reserved15"] != '0'){	 $effect4 .= '<tr><td>E4_15: </td><td>'.$skillrow["effect4_reserved15"].'</td></tr>'; }
if ($skillrow["effect4_reserved16"] != NULL && $skillrow["effect4_reserved16"] != '0'){	 $effect4 .= '<tr><td>'.$reserved16_4.': </td><td>'.$skillrow["effect4_reserved16"].'</td></tr>'; }
if ($skillrow["effect4_reserved17"] != NULL && $skillrow["effect4_reserved17"] != '0'){	 $effect4 .= '<tr><td>E4_17: </td><td>'.$skillrow["effect4_reserved17"].'</td></tr>'; }
if ($skillrow["effect4_reserved18"] != NULL && $skillrow["effect4_reserved18"] != '0'){	 $effect4 .= '<tr><td>E4_18: </td><td>'.$skillrow["effect4_reserved18"].'</td></tr>'; }
if ($skillrow["effect4_reserved19"] != NULL && $skillrow["effect4_reserved19"] != '0'){	 $effect4 .= '<tr><td>E4_19: </td><td>'.$skillrow["effect4_reserved19"].'</td></tr>'; }
if ($skillrow["effect4_reserved20"] != NULL && $skillrow["effect4_reserved20"] != '0'){	 $effect4 .= '<tr><td>E4_20: </td><td>'.$skillrow["effect4_reserved20"].'</td></tr>'; }
if ($skillrow["effect4_reserved21"] != NULL && $skillrow["effect4_reserved21"] != '0'){	 $effect4 .= '<tr><td>E4_21: </td><td>'.$skillrow["effect4_reserved21"].'</td></tr>'; }
if ($skillrow["effect4_reserved22"] != NULL && $skillrow["effect4_reserved22"] != '0'){	 $effect4 .= '<tr><td>E4_22: </td><td>'.$skillrow["effect4_reserved22"].'</td></tr>'; }
}
	
	
	
$devdetails = '<div class="devdetails wrap" style="display:none">
<table>'. $effect1 . $effect2 . $effect3 . $effect4 .'</table>
<br><br>
<table>
<tr><td>DEV_NAME: </td><td><input style="width:250px" type="text" value="' . $skillrow['name'] . '"></td></tr>
<tr><td>STR_NAME: </td><td><input style="width:250px" type="text" value="' . $skillrow['description'] . '"></td></tr>
<tr><td>STR_DESC: </td><td><input style="width:250px" type="text" value="' . $skillrow['desc_long'] . '"></td></tr>
<tr><td>Version: </td><td><a href="https://aionpowerbook.com/powerbook/Version:'.$clientversion.'">'.$clientversion . $Overseasclient . '</a></td></tr>
</table>
</div>';
}

// check class names
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
	
}else {

//$desclong = translate($desc_long, language());
$deckoreanlive = translate($desc_long, 'krl');
$desckoreanfuture = translate($desc_long, 'ko');
$eudesclong = translate($desc_long, language());
$checkeuexistance = checkifEUexists($id);



if ($deckoreanlive == $desckoreanfuture){
	// descriptions are the same
	$desclong = translate($desc_long, language());
	
}else {
	// descriptions missmatched
	$descmissmattch = '<br><br><p style="color:#ff0000">(The description is in Korean because it doesn&apos;t match the 7.5 version)</p>';
	$desclong = translate($desc_long, 'ko');
	
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
		$castingdelay = '<dl class="delay_time"><dt>' . translate('STR_TOOLTIP_CASTDELAY', language()) . '</dt><dd id="skill_casting">' . $casting_delay/1000 . 's</dd></dl><div class="cl"></div>';
	}elseif ($casting_delay == NULL and $instant_skill != NULL) {
		$castingdelay = '<dl class="delay_time"><dt>' . translate('STR_TOOLTIP_CASTDELAY', language()) . '</dt><dd id="skill_casting">' . translate('STR_TOOLTIP_NOCASTDELAY', language()) . '</dd></dl><div class="cl"></div>';
	}elseif($casting_delay > 0 && $instant_skill != NULL) {
		$castingdelay = '<dl class="delay_time"><dt>' . translate('STR_TOOLTIP_CASTDELAY', language()) . '</dt><dd id="skill_casting">' . $casting_delay/1000 . 's</dd></dl><div class="cl"></div>';
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
	
	$delaytime = '<dl class="cool_time '.$inputtemp.'" ' . $delayno . '><dt>' . translate('STR_SKILL_COOLING_TIME', language()) . '</dt><dd id="skill_cooltime">' . $hoursf . $minutesf . $secondsf . $StigmaCDup . '</dd></dl>';	
}
elseif ($delay_time >= 1 and $delay_time < 60000) {
		
		
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
		
		
		$delaytime = '<dl class="cool_time 60000_less" ' . $delayno . '><dt>' . translate('STR_SKILL_COOLING_TIME', language()) . '</dt><dd id="skill_cooltime">' . $minutesf . $secondsf . $StigmaCDup . '</dd></dl>';	
	}else {
		$delaytime = '';
	}
	

// Target
if ($first_target == 'me' and $target_range == 'onlyone') {
	$target = '<dl class="target" ' . $targetno . '><dt>' . translate('STR_TOOLTIP_TARGET', language()) . '</dt><dd id="skill_target">' . translate('STR_TOOLTIP_SELF', language()) . '</dd></dl>';
}elseif ($first_target == 'me' and $target_range == 'area') {
	$target = '<dl class="target" ' . $targetno . '><dt>' . translate('STR_TOOLTIP_TARGET', language()) . '</dt><dd id="skill_target">' . translate('STR_TOOLTIP_AREA', language()) . '</dd></dl>';
}elseif ($first_target == 'target' and $target_range == 'onlyone') {
	$target = '<dl class="target" ' . $targetno . '><dt>' . translate('STR_TOOLTIP_TARGET', language()) . '</dt><dd id="skill_target">' . translate('STR_TOOLTIP_SINGLETARGET', language()) . '</dd></dl>';
}elseif ($first_target == 'target' and $target_range == 'area') {
	$target = '<dl class="target" ' . $targetno . '><dt>' . translate('STR_TOOLTIP_TARGET', language()) . '</dt><dd id="skill_target">' . translate('STR_TOOLTIP_TARGET_AREA', language()) . '</dd></dl>';
}else {
	$target = '';
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
		$cost = '<dl class="cost" ' . $costno . '><dt>' . translate('STR_SKILL_COST', language()) . '</dt><dd class="cost" id="skill_cost hp_ratio">' . $cost_end . '% HP</dd></dl>';
	}elseif (strtolower($costparameter) == 'mp_ratio') {
		$cost = '<dl class="cost" ' . $costno . '><dt>' . translate('STR_SKILL_COST', language()) . '</dt><dd class="cost" id="skill_cost mp_ratio">' . $cost_end . '% MP</dd></dl>';
	}else {
		if ($cost_end_lv < 0 && $isStigma > 0) {
			$StigmaMPReduct = ' (<span class="StigmaUpgrade" ><img src="https://aionpowerbook.com/chatemot/comp_greater.png" style="width:14px; height:14px; padding-bottom:3px" >-' . $cost_end_lv . ' ' . $costparameter . '</span>)';
		}
		$cost = '<dl class="cost" ' . $costno . '><dt>' . translate('STR_SKILL_COST', language()) . '</dt><dd class="cost" id="skill_cost not_mp_hp_ratio">' . $cost_end . ' ' . $costparameter . $StigmaMPReduct . '</dd></dl>';
	}
}elseif ($cost_end != NULL and $cost_parameter != NULL and $cost_toggle != NULL) {
	$cost = '<dl class="cost" ' . $costno . '><dt>' . translate('STR_SKILL_COST', language()) . '</dt><dd class="cost" id="skill_cost toogle_cost">' . $costparameter . '</dd></dl>';
}elseif ($cost_end === NULL and $cost_parameter != NULL and $cost_toggle != NULL) {
	$cost = '<dl class="cost" ' . $costno . '><dt>' . translate('STR_SKILL_COST', language()) . '</dt><dd class="cost" id="skill_cost toogle_no_cost">' . $costparameter . '</dd></dl>';
}else {
	$cost = '';
}

if ($cost_dp != NULL) {
	$cost .= '<dl class="cost" ' . $costno . '><dt>' . translate('STR_SKILL_COST', language()) . '</dt><dd class="cost" id="skill_cost dp_cost">DP ' . $cost_dp . '</dd></dl>';
}


// part of a chain
/*
if ($chain_category_name != NULL){
	$skillchain = skillchain($chain_category_name, $skillname);
}
*/


// Skill range

	if ($target_maxcount > 1) {
		$multipleTargets = ' (' . $target_maxcount . ')';
	}

	if ($target_range == 'onlyone') {
		$skillrange = '<dl class="skillrange"><dt>Range'.$multipleTargets.'</dt><dd class="cost" id="skill_range"><img src="https://aionpowerbook.com/powerbook/skins/MonoBook/img/onlyone.png">&nbsp;&nbsp;(' . translate('STR_SKILL_AREA_SINGLE', $language) . ')</dd></dl>';
	}elseif ($target_range == 'area') {
		
		if ($target_range_area_type == 'lightningbolt' ) {
			$skillrange = '<dl class="skillrange"><dt>Area Range'.$multipleTargets.'</dt><dd class="cost" id="skill_range"><span align="center"><img src="https://aionpowerbook.com/powerbook/skins/MonoBook/img/lightningbolt.png"  ></span><span align="center"> ' . $target_range_opt1 . 'x' . $target_range_opt2 . 'm</span></dd></dl>';
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




// CP cost
$CPcost = checkCPcost($skill_group_name);

// Learn Level
$LearnLevel = checkLearnLevel($skillname);







$skilllelvel = strtr(translate('STR_LEVEL_SKILL', language()), array(
	"%0" => $LearnLevel[2],
	));
	
if 	($LearnLevel[2] != NULL) {
	
	$Skilllearnlevel = '<dl class="acquire_level"><dt>Level</dt><dd id="skill_acquire_level"><span class="skill_acquire_level">' . $skilllelvel . '</span></dd></dl>';
	
}
	
	
$acquiredLevelstr = strtr(translate('STR_TOOLTIP_SKILL_LEARN_LEVEL', language()), array(
	" %0" => '',
	));	




if 	($LearnLevel[1] != NULL) {
	
	$allLearnLevels = checkallLearnLevels($skillname, $id);
	
	
	$acquiredLevel .= '<dl class="acquire_level"><dt>' . $acquiredLevelstr .'</dt><dd id="skill_acquire_level"><span class="skill_acquire_level">' . $allLearnLevels . '</span></dd></dl>';
}


if 	($type != NULL) {	

if (strtolower($sub_type) == 'none'){
	$sub_type_fin = '';
}elseif (strtolower($sub_type) == 'chant'){
	$sub_type_fin = 'Mantra';
}else {
	$sub_type_fin = $sub_type;
}




$typesubtype = '<dl class="type subtype"><dt>Type</dt><dd id="type subtype"><span class="type subtype">' . $type . ' ' . $sub_type_fin . $isStigmaFinal .'</span></dd></dl>';
}


if ($use_nbattery > 0){				// 6.2 power shards
	$shardcost = '<dl class="shardcost"><dt>Consumes</dt><dd class="cost" id="skill_shardcost">'. extraitem('nbattery_01', language()) .' ' . $use_nbattery . '</dd></dl>';
}

if ($pvp_remain_time_ratio > 0){				// pvp_remain_time_ratio
	$pvpduration = '<dl class="shardcost"><dt>PVP Duration</dt><dd class="cost" id="skill_shardcost">'.$pvp_remain_time_ratio.'%</dd></dl>';
}


if ($penalty_skill_succ != NULL){				// buff / debuff
	$buffdebuff = '<dl class="buffdebuff"><dt>Causes</dt><dd class="cost" id="skill_debuff">'. skinskill($penalty_skill_succ, language()) .'</dd></dl>';
}


$skilliconname = strtr($skillicon_name, array(
	".dds" => '',
	));


$serv = $_SERVER['DOCUMENT_ROOT'];
$checkskillicon = $serv . '/skillicon'.$cl.'/'.$skilliconname.'.png';

if (file_exists($checkskillicon)) {
    $finalskillicon =  'https://aionpowerbook.com/skillicon'.$cl.'/' . $skilliconname . '.png';
} else {
    $finalskillicon =  'https://aionpowerbook.com/skillicon/replaceme.png';
}



$final .= '<div class="objects object_skill"><div class="head skill_basic"><dl class="basic">';
$final .= '<dd class="thumb"><img src="' . $finalskillicon . '" alt="" id="skill_icon" class="additionalinfo restrictionTip" title="' . $clientversion . $Overseasclient . ' / Click for more details"></dd>';
$final .= '<dt class="name" style="width:355px;" ><span class="all"></span><span id="skill_name"><a href="https://aionpowerbook.com/powerbook/Skill/' . $id . '">' . $localization . '</a></span>
'.CheckSkillEU($skillname, language()).'<p temp="'.$skillname.' '.language().'" ></p>
</dt>' . $classname . '</dl></div>';
$final .= '<div class="wrap skill_property">';
$final .= $typesubtype;
$final .= $acquiredLevel;
$final .= $Skilllearnlevel;

if ($desc != NULL) {
$final .= '<dl class="skill_desc"><dt>' . translate('STR_TOOLTIP_SKILL_DESC_LONG', language()) . '</dt><dd id="skill_descrption">' .  $descfinal . $descmissmattch . '</dd></dl>';
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




$final .= '<div class="cl"></div><dl class="bbcode"><dt>BBCode</dt><dd class="cost" id="bbcode"><input style="width:250px" type="text" value="
[url=\'https://aionpowerbook.com/powerbook/Skill/' . $id . '/' . $code . '\'][img]' . $finalskillicon . '[/img]' . $localization . '[/url]"></dd></dl>';


$final .= '</div>' . $devdetails . '</div><div class="cl"></div><div class="cl"></div></div>';
$final .= $testdeccompare;




$data = $final;

$serv = $_SERVER['DOCUMENT_ROOT'];
$cachefile = $serv . '/powerbook/extensions/AionExtensions/cache/skilldetails/'.$language.'/'.$dbid. $cl . '.html';
if ($isQA == '1') {
}else {
	file_put_contents($cachefile, $data);
}
$wgOut->AddHTML( $data );

$DisplayTitle = '{{DISPLAYTITLE:' . $localization . '}}';
return array( $DisplayTitle, 'noparse' => false );

}

else {

    include 'include/DBselect.php';
    $skillrow = $db->query("
SELECT * 
FROM client_skills
WHERE id = '$dbid' ", $name)->fetchArray();


    $localization = !empty($skillrow['search_'.$language]) ? $skillrow['search_'.$language] : $skillrow['search_ko'];


	
	
	   // --> Don't forget to unserialize() or json_decode() if the data isn't a string!
	$servv = $_SERVER['DOCUMENT_ROOT'];
	$cachefilev = $servv . '/powerbook/extensions/AionExtensions/cache/skilldetails/'.$language.'/'.$dbid. $cl . '.html';
	$wgOut->AddHTML(  "<!-- Cached copy, generated ".date('H:i', filemtime($cachefile))." -->\n" );
    $data = file_get_contents($cachefilev);
	$wgOut->AddHTML( $data );
	
	
	
	$DisplayTitle = '{{DISPLAYTITLE:' . $localization . '}}';
	return array( $DisplayTitle, 'noparse' => false );
	
}
}