<?php
/* Database connection start */
$servername = "mysqlhost";
$username = "20693245_db";
$password = "UI0#cuplgVBj";
$dbname = "20693245_db";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
mysqli_set_charset($conn,"utf8");
/* Database connection end */


$id = $_GET['id'];


function lang()
{
$code = $_GET['lang'];

    $language = strtoupper($code);
    // EN = US, EN-GB = EN
    if ('EN' === $language) {
        $language = 'US';
    }

    if (!in_array($language, ['EN', 'US', 'DE', 'FR', 'ES', 'IT', 'PL', 'TR', 'KO'])) {
        $language = 'EN';
    }

    return $language;
}


function trans($name, $language)
{
$servername = "mysqlhost";
$username = "20693245_db";
$password = "UI0#cuplgVBj";
$dbname = "20693245_db";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
mysqli_set_charset($conn,"utf8");

    $sql = "
           SELECT
              t.body    KO,
              t.LAN_EN  EN,
              t.LAN_DE  DE,
              t.LAN_FR  FR,
              t.LAN_ES  ES,
              t.LAN_TR  TR,
              t.LAN_IT  IT,
              t.LAN_PL  PL,
              t.LAN_US  US
           FROM  translation_small t
           WHERE t.name = '$name'
       ";

    $query=mysqli_query($conn, $sql) or die(mysqli_error());
    while ($result = mysqli_fetch_assoc($query)) {
	$localizationExtra = !empty($result[$language]) ? $result[$language] : $result['KO'];
	}
    return $localizationExtra;
}

























function npcdetails($id, $type)
{
$servername = "mysqlhost";
$username = "20693245_db";
$password = "UI0#cuplgVBj";
$dbname = "20693245_db";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
mysqli_set_charset($conn,"utf8");	
	
    $sql = "
           SELECT $type
           FROM  npc_data_new
           WHERE id = '$id'
		   LIMIT 0, 1
       ";
	   
$query=mysqli_query($conn, $sql) or die(mysqli_error());
    while ($result = mysqli_fetch_assoc($query)) {
	$data = number_format($result[$type]);
	}
    return $data;
}




	
	

	

$sql="
SELECT *
FROM client_npcs_monster_eu
WHERE id = $id";


$query=mysqli_query($conn, $sql) or die("employee-grid-data.php: get employees");

$data = array();
while( $npcrow=mysqli_fetch_array($query) ) {
        $npcid=$npcrow["id"];
		$localization= trans($npcrow["description"], lang()) ;
		$clientversion = $npcrow["client_version"];
		$ui_type=$npcrow["ui_type"];
		$disk_type=strtolower($npcrow["disk_type"]);
		$npc_title = trans($npcrow["npc_title"], lang());
		$hpgauge_level = $npcrow["hpgauge_level"];
		$stare_distance = $npcrow["stare_distance"];
		$suppression = number_format($npcrow["suppression"]);
		$magical_skill_boost_resist = number_format($npcrow["magical_skill_boost_resist"]);
		$magical_skill_boost = number_format($npcrow["magical_skill_boost"]);
		$attack_delay = (int) $npcrow["attack_delay"] / 1000;







if (strtolower($npcrow["race_type"]) == 'type_a' ){
	$form = ' (' . trans('STR_F6_TypeA_Buff', lang()) .  ')';
}elseif (strtolower($npcrow["race_type"]) == 'type_b' ){
	$form = ' (' . trans('STR_F6_TypeB_Buff', lang()) .  ')';
}elseif (strtolower($npcrow["race_type"]) == 'type_c' ){
	$form = ' (' . trans('STR_F6_TypeC_Buff', lang()) .  ')';
}elseif (strtolower($npcrow["race_type"]) == 'type_d' ){
	$form = ' (' . trans('STR_F6_TypeD_Buff', lang()) .  ')' ;
}else {
	$form = '';
}



if ($npcrow["mesh"] != NULL) {
	$threedicon = '<a id="various3"  href="https://aionpowerbook.com/viewernpc/index.php?item=' . $npcid . '"><img src="https://aionpowerbook.com/images/3d.png" alt=""></a>';
}


    }
// end of while //

if ($stare_distance > 0) {
	$agressive = '_a';
}

if ($disk_type == 'guard') {
	$itemicon = 'icon_emblem_guard';
	$npctypetwo = trans('STR_TOOLTIP_GUARD', lang()); 
}elseif ($disk_type == 'ancientclan') {
	$itemicon = 'icon_emblem_ancientclan';
	$npctypetwo = trans('STR_TOOLTIP_ANCIENTCLAN', lang()); 
}elseif ($disk_type == 'inhabitant') {
	$itemicon = 'icon_emblem_inhabitant';
	$npctypetwo = trans('STR_TOOLTIP_RESIDENT', lang()); 
}elseif ($disk_type == 'merchant') {
	$itemicon = 'icon_emblem_merchant';
	$npctypetwo = trans('STR_TOOLTIP_MERCHANT', lang());
}elseif ($disk_type == 'polymorph_human') {
	$itemicon = '';
	$npctypetwo = trans('STR_TOOLTIP_ETC', lang());
}elseif ($disk_type == 'polymorph_table_scale') {
	$itemicon = '';
	$npctypetwo = trans('STR_TOOLTIP_ETC', lang());
}elseif ($disk_type == NULL) {
	$itemicon = 'icon_emblem_etc';
	$npctypetwo = trans('STR_TOOLTIP_ETC', lang());
}elseif ($disk_type == 'god') {
	$itemicon = 'icon_emblem_etc';
	$npctypetwo = trans('STR_TOOLTIP_GOD', lang());
}elseif ($disk_type == 'function') {
	$itemicon = 'icon_emblem_function';
	$npctypetwo = trans('STR_TOOLTIP_FUNCTION', lang());
}elseif ($disk_type == 'etc') {
	$itemicon = 'icon_emblem_etc';
	$npctypetwo = trans('STR_TOOLTIP_ETC', lang());
}elseif ($disk_type == 'e_water') {
	$itemicon = 'icon_emblem_e_water';
	$npctypetwo = trans('STR_TOOLTIP_ETC', lang());
}elseif ($disk_type == 'e_fire') {
	$itemicon = 'icon_emblem_e_fire';
	$npctypetwo = trans('STR_TOOLTIP_ETC', lang());
}elseif ($disk_type == 'e_earth') {
	$itemicon = 'icon_emblem_e_earth';
	$npctypetwo = trans('STR_TOOLTIP_ETC', lang());
}elseif ($disk_type == 'e_air') {
	$itemicon = 'icon_emblem_e_air';
	$npctypetwo = trans('STR_TOOLTIP_ETC', lang());
}elseif ($disk_type == 'drakan') {
	$itemicon = 'icon_emblem_etc';
	$npctypetwo = trans('STR_TOOLTIP_ETC', lang());
}elseif ($disk_type == 'd1' or $disk_type == 'd2' or $disk_type == 'd3' or $disk_type == 'd4' or $disk_type == 'd5' or $disk_type == 'd6' or $disk_type == 'd7') {
	if ($hpgauge_level == 1 or $hpgauge_level == 10 or $hpgauge_level == 20  or $hpgauge_level == 26) {
		$itemicon = 'icon_emblem_monster_n_1' . $agressive;
		$npctypetwo = trans('STR_TOOLTIP_LV1', lang());
	}elseif ($hpgauge_level == 2 or $hpgauge_level == 11 or $hpgauge_level == 21 or $hpgauge_level == 27) {
		$itemicon = 'icon_emblem_monster_n_2' . $agressive;
		$npctypetwo = trans('STR_TOOLTIP_LV2', lang());
	}elseif ($hpgauge_level == 3 or $hpgauge_level == 12 or $hpgauge_level == 22) {
		$itemicon = 'icon_emblem_monster_n_3' . $agressive;
		$npctypetwo = trans('STR_TOOLTIP_LV3', lang());
	}elseif ($hpgauge_level == 4 or $hpgauge_level == 13 or $hpgauge_level == 23) {
		$itemicon = 'icon_emblem_monster_r_1' . $agressive;
		$npctypetwo = trans('STR_TOOLTIP_LV4', lang());
	}elseif ($hpgauge_level == 5 or $hpgauge_level == 14 or $hpgauge_level == 24) {
		$itemicon = 'icon_emblem_monster_r_2' . $agressive;
		$npctypetwo = trans('STR_TOOLTIP_LV5', lang());
	}elseif ($hpgauge_level == 6 or $hpgauge_level == 15 or $hpgauge_level == 25) {
		$itemicon = 'icon_emblem_monster_r_3' . $agressive;
		$npctypetwo = trans('STR_TOOLTIP_LV6', lang());
	}
}

if ($ui_type == 'trap') {
	$itemicon = 'icon_emblem_etc';
}elseif ($ui_type == 'NoneButRotate') {
	$itemicon = 'icon_emblem_etc';
}elseif ($ui_type == 'none') {
	$itemicon = 'icon_emblem_etc';
}





if ($suppression != NULL or $hp != NULL or $magical_skill_boost_resist != NULL or $magical_skill_boost != NULL or $attack_delay != NULL) {
	$radius = explode('.', $stare_distance);
	
	
		$basicStats .= '<div class="wrap weapon_property">';
		$basicStats .= '<dt>' . trans('STR_HP', lang()) . '</dt><dd class="attack_delay" style="width:100px">' . npcdetails($npcid, "hp") . '</dd>';
		$basicStats .= '<br>';
		$basicStats .= '<dt>Radius</dt><dd class="Radius">' . $radius[0] . 'm</dd>';
		$basicStats .= '<br>';
		$basicStats .= '<dt>' . trans('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', lang()) . '</dt><dd class="attack_delay">' . $attack_delay . '</dd>';

		$basicStats .= '<dt>' . trans('STR_MAGICAL_SKILL_BOOST', lang()) . '</dt><dd class="magical_skill_boost">' . $magical_skill_boost . '</dd>';
		$basicStats .= '<dt>' . trans('STR_TOOLTIP_SKILL_STAT_MAGICAL_SKILL_BOOST_RESIST', lang()) . '</dt><dd class="magical_skill_boost_resist">' . $magical_skill_boost_resist . '</dd>';
		
		$basicStats .= '</dl></div>';
	
}else {
	$basicStats  = '';	
}












if ($hpgauge_level < 10) {
	$npctype = trans('STR_TOOLTIP_LOW', lang());
}elseif ($hpgauge_level >= 10 & $hpgauge_level < 20){
	$npctype = trans('STR_TOOLTIP_MEDIUM', lang());
}elseif ($hpgauge_level >= 20 & $hpgauge_level < 25){
	$npctype = trans('STR_TOOLTIP_HIGH', lang());
}
elseif ($hpgauge_level >= 25){
	$npctype = trans('STR_TOOLTIP_MOSTSIG', lang());
}else {
	$npctype = trans('STR_TOOLTIP_LOW', lang());
}


$level = npcdetails($npcid, "level");

if ($level != NULL) {
				$otheritemLevel = trans('STR_TOOLTIP_ITEM_AUTHORIZE_LEVEL_VALUE', lang());
				$oitemLevel = explode('%0', $otheritemLevel);
				$availableLeveleq = '<p class="learn_level">' . $oitemLevel[0] . $level . $oitemLevel[1] . '</p>';
		}
		
		
		






$npc_titlef = strtr($npc_title, array(
		"<" => '&lt;',
		));
		
		



	echo '<div id="content" class="mw-body" role="main" style="margin:0px; padding:0px">';
    echo '<div class="hbody">';
    echo '<div class="objects object' . $objectType . '"><div class="head item_basic"><dl class="basic">';
    echo '<dd class="thumb">' . $tooltiptype . '<img src="https://aionpowerbook.com/npc/icon/' . $itemicon . '.png" alt=""><div style="display:block;width:40px;height:47px;"></div></dd>';
    echo '<dt class="name"><a  href="https://aionpowerbook.com/powerbook/NPC/' . $npcid . '">' . $localization . '</a><br>' . $npc_titlef . '</dt>';
    echo '<dd class="summary"><p class="type"><em>' . trans('STR_ITEMINFO_TYPE', lang()) . ':</em> <span>' . $npctype . ' ' . $npctypetwo . $form . '</span></p>';
    echo  $availableLeveleq ;

    echo '<p class="desc">';
    echo '</p>';
    echo '</dd></dl></div>';

    echo  $basicStats ;


    echo '</div>';
	echo '</div>';
	echo '</div>';
