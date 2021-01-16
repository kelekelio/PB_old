<?php

// extension credits, required by MW //
$wgExtensionCredits['variable'][] = array(
    'path'           => __FILE__,
    'name'           => 'Aion NPC Details',
    'author'         => 'Kelekelio',
    'url'            => 'https://aionpowerbook.com',
    'descriptionmsg' => 'Aion NPC Details',
    'version'		 => '1.0',
    'license-name' 	 => 'LICENSE',
);
// credits //


$wgHooks['ParserFirstCallInit'][] = 'AionNPCDetails';
$wgExtensionMessagesFiles['AionNPCDetails'] = __DIR__ . '/aion_npc_full.i18n.php';
function AionNPCDetails( &$parser ) {
    $parser->setFunctionHook( 'npcdetails', 'AionParserNPCDetails' );
    return true;
}

function zonemapID($name)
{
    $query = "
           SELECT id
           FROM  zonemap
           WHERE name = '$name'
       ";

    $query  = mysql_query($query) or die(mysql_error());
    $result = mysql_fetch_assoc($query);

	$id = $result['id'];
    return $id;	
	
}

function checkdictionary ($name, $language)
{
	
$query = "
SELECT
              t.body    ko,
              t.LAN_EN  en,
              t.LAN_DE  de,
              t.LAN_FR  fr,
              t.LAN_ES  es,
              t.LAN_IT  it,
              t.LAN_PL  pl,
              t.LAN_US  us
           FROM  translation_small t
           WHERE t.name like 'STR_DIC_%".$name."%'
";

    $query  = mysql_query($query) or die(mysql_error());
    $result = mysql_fetch_assoc($query);
	
	$localizationExtra = !empty($result[$language]) ? $result[$language] : $result['ko'];
	$questtextapos = strtr($localizationExtra, array(
		"&apos;" => "'",
	));
	
	$diclink = explode(';', $questtextapos);
	$dictionary = $diclink[1];
	
	
	$questt = preg_replace_callback('/\[%dic:(?<translation>[a-z_0-9]+)\]/i', function(array $matches) use ($language) {
		return dictionarylink($matches['translation'], $language);
	}, $dictionary);
	
	$questtext = strtr($questt, array(
	'%%' => "'&percnt;",
	'%' => ""
	));
	
	
	if (!empty($localizationExtra)) {
		return '<div class="wrap basicitem_desc" style=""><p class="desc">'.$questtext.'</p></div>';
	}else{
		return '';
	}

	
}

function spherenpcdata($id, $name)
{
	$query = "
		SELECT *
		FROM source_sphere 
		WHERE name = '$name' 
		";
	
	$npcdataresult=mysql_query($query) or die ("Query to get data from items failed: ".mysql_error());	
	
	$spotsarray = array();
	
	while ($row=mysql_fetch_array($npcdataresult)) {
		$location = zonemapID($row["map"]);
		
		
		include 'include/maplayers.php';
		
	}
	

$i = 0;
foreach ($spotsarray as $map => $nods) {
    
		$node = implode(",", $nods);
	
if ($i == '0') {
	$active = 'active';
}else {
	$active = '';
}
		
		
		
		$generatemap .= '<div class="carousel-item '.$active.'">
		<div class="object_minimap" mapzone="'.$map.'" mapmarks = "'.$node.'" npcid="'.$id.'&map='.$map.'&sphere=1&name='.$name.'">
			<div id="map0" class="aionmapnew gamemap2"></div>
			</div>
		</div>
		';
		
		$indicators .= '<li data-target="#carouselExampleIndicators" data-slide-to="'.$i.'" class="'.$active.'"></li>';
		
		if ($i > 0) {
			$multiple .= 'y';
		}else {
			$multiple = '';
		}

		
$i++;
}
	

	
	
if ($location != NULL) {	
	//return '<div class="flexslider"><ul class="slides">'.$generatemap.'</ul></div>';	
	
	
	if ($multiple != NULL ){
		$pages = '<ol class="carousel-indicators">'.$indicators.'</ol>';
	}
	
	
	return '<span style="float:right; margin-right:13px; "><div id="carouselExampleIndicators" class="carousel mapcarousel slide" data-ride="carousel">'.$pages.'<div class="carousel-inner">'.$generatemap.'</div></div></span>';
	
	
	
}else {
	return '';
}	
}

function npcdata($id, $name)
{
	$query = "
		SELECT *
		FROM npc_data_new 
		WHERE id = '$id' 
		LIMIT 0, 300
		";
	
	$npcdataresult=mysql_query($query) or die ("Query to get data from items failed: ".mysql_error());	
	
	$spotsarray = array();
	
	while ($row=mysql_fetch_array($npcdataresult)) {
		$location = $row["map"];
		include 'include/maplayers.php';
		
	}
	

$i = 0;
foreach ($spotsarray as $map => $nods) {
    
		$node = implode(";", $nods);
	
if ($i == '0') {
	$active = 'active';
}else {
	$active = '';
}
		
		$generatemap .= '<div class="carousel-item '.$active.'">
		<div class="object_minimap" mapzone="'.$map.'" mapmarks = "'.$node.'" npcid="'.$id.'&map='.$map.'">
			<div id="map0" class="aionmapnew gamemap2"></div>
			</div>
		</div>
		';
		
		$indicators .= '<li data-target="#carouselExampleIndicators" data-slide-to="'.$i.'" class="'.$active.'"></li>';
		
		if ($i > 0) {
			$multiple .= 'y';
		}else {
			$multiple = '';
		}

		
$i++;
}
	

	
	
if ($location != NULL) {	
	//return '<div class="flexslider"><ul class="slides">'.$generatemap.'</ul></div>';	
	
	
	if ($multiple != NULL ){
		$pages = '<ol class="carousel-indicators">'.$indicators.'</ol>';
	}
	
	
	return '<span style="float:right; margin-right:13px; "><div id="carouselExampleIndicators" class="carousel mapcarousel slide" data-ride="carousel">'.$pages.'<div class="carousel-inner">'.$generatemap.'</div></div></span>';
	
	
	
}else {
	
	$spheremap = spherenpcdata($id, $name);
	
	return $spheremap;
}	
}

function checkmaxstats($id, $check, $type){
	
    $query = "
           SELECT $type
           FROM  npc_data_new
           WHERE id = '$id'
		   ORDER BY $type DESC
		   LIMIT 0, 1
       ";

    $query  = mysql_query($query) or die(mysql_error());
    $result = mysql_fetch_assoc($query);

	$data = $result[$type];
	
	if ($check < $data) {
		$morethan = ' ~ ' . number_format($data);
	}else {
		$morethan = '';
	}
	
	
	
    return $morethan;	
	
	
	
}

function zonemap($id)
{
    $query = "
           SELECT name
           FROM  zonemap
           WHERE id = '$id'
       ";

    $query  = mysql_query($query) or die(mysql_error());
    $result = mysql_fetch_assoc($query);

	$name = $result['name'];
    return $name;	
	
}

function npcdetails($id, $type)
{
    $query = "
           SELECT $type
           FROM  npc_data_new
           WHERE id = '$id'
		   ORDER BY level ASC
		   LIMIT 0, 1
       ";

    $query  = mysql_query($query) or die(mysql_error());
    $result = mysql_fetch_assoc($query);

	$data = $result[$type];
    return $data;	
	
}

function npc_boss_data($id, $type, $language)
{
    $query = "
           SELECT id, $type
           FROM  npc_boss_data
           WHERE id = '$id'
       ";

    $query  = mysql_query($query) or die(mysql_error());
    $result = mysql_fetch_assoc($query);
	$data = $result[$type];
	if ($data != null) {

		if ($type == "physical_power_boost_resist") {

			$tran = translate('STR_DEFENSE', $language);

		}elseif ($type == "hitaccuracy") {

			$tran = translate('STR_TOOLTIP_SKILL_STAT_HITACCURACY', $language);

		}elseif ($type == "magicalhitaccuracy") {

			$tran = translate('STR_MAGICAL_HIT_ACCURACY', $language);

		}elseif ($type == "dodge") {

			$tran = translate('STR_DODGE', $language);

		}elseif ($type == "block") {

			$tran = translate('STR_BLOCK', $language);

		}

		return '<dt>' . $tran . '</dt><dd class="'.$type.'">'.number_format($data).'</dd>';
	}
	
}



include 'include/GoodsList.php';



function AionParserNPCDetails( &$parser, $arg1 ) {
global $wgOut;
$isQA =  $_GET['qa'];
$dbid =  $_GET['dbid'];
$language = language(); 
global $wgLang;
$code = $wgLang->getCode();


if (isClassic() == "1") {
    $cl = "_cl";
}


	
$java = '{{#Widget:MapJava|escape:\'html\'}}';
$wgOut->addWikiText( $java );
	
	

$serv = $_SERVER['DOCUMENT_ROOT'];
$cachefile = $serv . '/powerbook/extensions/AionExtensions/cache/npcdetails/'.$language.'/'.$dbid. $cl .'.html';
$exists = file_exists($cachefile);

if( !$exists || ( $exists && time() > strtotime('+31 days', filemtime($cachefile))  )  || $isQA == '1' ) {
	

    include 'include/DBselect.php';
    $sql = $db->query("SELECT * FROM  client_npcs_monster WHERE id = '$dbid' ")->fetchAll();

    foreach ($sql as $npcrow) {
        $npcid=$npcrow["id"];
		$localization=!empty($npcrow["search_" . $language]) ? $npcrow["search_" . $language] : $npcrow['search_ko'];
		$clientversion = $npcrow["client_version"];
		$ui_type=$npcrow["ui_type"];
		$disk_type=strtolower($npcrow["disk_type"]);
		$npc_title = translate($npcrow["npc_title"], $language);
		$hpgauge_level = $npcrow["hpgauge_level"];
		$stare_distance = $npcrow["stare_distance"];
		$suppression = number_format($npcrow["suppression"]);
		$magical_skill_boost_resist = number_format($npcrow["magical_skill_boost_resist"]);
		$magical_skill_boost = number_format($npcrow["magical_skill_boost"]);
		$attack_delay = (int) $npcrow["attack_delay"] / 1000;
		$tribe=strtolower($npcrow["tribe"]);
		$race_type=strtolower($npcrow["race_type"]);
		$npcname=$npcrow["name"];


include 'include/overseas.php';	

$devdetails = '<div class="devdetails wrap" style="display:none">
<table>
<tr><td>DEV_NAME: </td><td><input style="width:250px" type="text" value="' . $npcname . '"></td></tr>
<tr><td>STR_NAME: </td><td><input style="width:250px" type="text" value="' . $npcrow['description'] . '"></td></tr>
<tr><td>STR_TITLE: </td><td><input style="width:250px" type="text" value="' . $npcrow['npc_title'] . '"></td></tr>
<tr><td>MESH: </td><td><input style="width:250px" type="text" value="' . $npcrow["mesh"] . '"></td></tr>
<tr><td>TRIBE: </td><td><input style="width:250px" type="text" value="' . $tribe . '"></td></tr>
<tr><td>Version: </td><td><a href="https://aionpowerbook.com/powerbook/Version:'.$clientversion.'">'.$clientversion . $Overseasclient . '</a></td></tr>
</table>
</div>';







if ($race_type == 'type_a' ){
	$form = ' (' . translate('STR_F6_TypeA_Buff', $language) .  ')';
}
elseif ($race_type == 'type_b' ){
	$form = ' (' . translate('STR_F6_TypeB_Buff', $language) .  ')';
}
elseif ($race_type == 'type_c' ){
	$form = ' (' . translate('STR_F6_TypeC_Buff', $language) .  ')';
}
elseif ($race_type == 'type_d' ){
	$form = ' (' . translate('STR_F6_TypeD_Buff', $language) .  ')' ;
}
elseif ($race_type == 'type_e' ){
	$form = ' (' . translate('STR_Ere_Buff_Fi_Ab1up_01', $language) .  ')' ;
}
elseif ($race_type == 'pc_dark' ){
	$form = ' (' . translate('STR_TOOLTIP_PIECE_PC_DARK', $language) .  ')' ;
}
elseif ($race_type == 'pc_light' ){
	$form = ' (' . translate('STR_TOOLTIP_PIECE_PC_LIGHT', $language) .  ')' ;
}
elseif ($race_type == 'drakan' ){
	$form = ' (Drakan)' ;
}
elseif ($race_type == 'dragon' ){
	$form = ' (Dragon)' ;
}
elseif ($race_type == 'elemental' ){
	$form = ' (Elemental)' ;
}
elseif ($race_type == 'human' ){
	$form = ' (Human)' ;
}
elseif ($race_type == 'goblin' ){
	$form = ' (Goblin)' ;
}
elseif ($race_type == 'krall' ){
	$form = ' (Krall)' ;
}
elseif ($race_type == 'shulack' ){
	$form = ' (Shulack)' ;
}
elseif ($race_type == 'undead' ){
	$form = ' (Undead)' ;
}
elseif ($race_type == 'naga' ){
	$form = ' (Naga)' ;
}
elseif ($race_type == 'lycan' ){
	$form = ' (Lycan)' ;
}
elseif ($race_type == 'orc' ){
	$form = ' (Orc)' ;
}
elseif ($race_type == 'beast' ){
	$form = ' (Beast)' ;
}
elseif ($race_type == 'siegedrakan' ){
	$form = ' (Siege Drakan)' ;
}
elseif ($race_type == 'ratman' ){
	$form = ' (Ratman)' ;
}
elseif ($race_type == 'ratman' ){
	$form = ' (Skurv)' ;
}
elseif ($race_type == 'magicmonster' ){
	$form = ' (Magical Being)' ;
}
elseif ($race_type == 'magicalmonster' ){
	$form = ' (Magical Being)' ;
}
elseif ($race_type == 'lizardman' ){
	$form = ' (Lizard)' ;
}
elseif ($race_type == 'demihumanoid' ){
	$form = ' (Demihuman)' ;
}
elseif ($race_type == 'barrier' ){
	$form = ' (Barrier)' ;
}
elseif ($race_type == 'dragonet' ){
	$form = ' (Dragonet)' ;
}
elseif ($race_type == 'tricodark' ){
	$form = ' (Dark Trico)' ;
}
else {
	$form = '';
}



if ($npcrow["mesh"] != NULL) {
	$threedicon = '<a id="various3"  href="https://aionpowerbook.com/viewernpc/index.php?item=' . $npcid . '"><img src="https://aionpowerbook.com/images/3d.png" alt=""></a>';
}



if ($npcrow["etab"] != NULL) { //items for extra items
	
	$GoodsListTitle = '<h2><span class="mw-headline" id="Sells">Sells</span></h2>';
	$GoodsList .= '<br>';
	$GoodsList .= GoodsList($npcrow["etab"] . ';' . $npcrow["etab1"] . ';' . $npcrow["etab2"] . ';' . $npcrow["etab3"] . ';' . $npcrow["etab4"] . ';' . $npcrow["etab5"] . ';' . $npcrow["etab6"], $language, 'etab', '');
}
elseif ($npcrow["tab"] != NULL) { //items for kinah (ctab included)
	
	if ($npcrow["sell_price_rate"] != NULL) {
		$price = $npcrow["sell_price_rate"];
	}else {
		$price = $npcrow["sell_price_rate2"];
	}
	
	$GoodsListTitle = '<h2><span class="mw-headline" id="Sells">Sells</span></h2>';
	$GoodsList .= '<br>';
	$GoodsList .= GoodsList($npcrow["tab"] . ';' . $npcrow["tab1"] . ';' . $npcrow["tab2"] . ';' . $npcrow["tab3"] . ';' . $npcrow["tab4"], $language, 'tab', $price);
}
elseif ($npcrow["atab"] != NULL) { //items for AP/medals (ktab included)
	
	if (($npcrow["sell_price_rate2"] != NULL or $npcrow["ap_sell_price_rate2"]) != NULL) {
		$price = ($npcrow["sell_price_rate2"] . '_' . $npcrow["ap_sell_price_rate2"]);
	}else {
		$price = ($npcrow["sell_price_rate"] . '_' . $npcrow["ap_sell_price_rate"]);
	}
	
	$GoodsListTitle = '<h2><span class="mw-headline" id="Sells">Sells</span></h2>';
	$GoodsList .= '<br>';
	$GoodsList .= GoodsList($npcrow["atab"] . ';' . $npcrow["atab1"] . ';' . $npcrow["atab2"] . ';' . $npcrow["atab3"] . ';' . $npcrow["atab4"], $language, 'atab', $price);
}
elseif ($npcrow["ttab"] != NULL) { //trades one item for another
	
	$GoodsListTitle = '<h2><span class="mw-headline" id="Trades">Trades</span></h2>';
	$GoodsList .= '<br>';
	$GoodsList .= GoodsList($npcrow["ttab"] . ';' . $npcrow["ttab1"] . ';' . $npcrow["ttab2"] . ';' . $npcrow["ttab3"] . ';' . $npcrow["ttab4"], $language, 'ttab', '');
}
elseif ($npcrow["buy_tab"] != NULL) { //buys normal items
	
	if ($npcrow["buy_price_rate2"] != NULL) {
		$price = $npcrow["buy_price_rate2"];
	}else {
		$price = $npcrow["buy_price_rate"];
	}
	
	$GoodsListTitle = '<h2><span class="mw-headline" id="Buys">Buys</span></h2>';
	$GoodsList .= '<br>';
	$GoodsList .= GoodsList($npcrow["buy_tab"] . ';' . $npcrow["buy_tab1"] . ';' . $npcrow["buy_tab2"] . ';' . $npcrow["buy_tab3"] . ';' . $npcrow["buy_tab4"], $language, 'buy_tab', $price);
}
elseif ($npcrow["buy_atab"] != NULL) { //buys AP items
	
	$GoodsListTitle = '<h2><span class="mw-headline" id="Buys">Buys</span></h2>';
	$GoodsList .= '<br>';
	$GoodsList .= GoodsList($npcrow["buy_atab"] . ';' . $npcrow["buy_atab1"] . ';' . $npcrow["buy_atab2"] . ';' . $npcrow["buy_atab3"] . ';' . $npcrow["buy_atab4"], $language, 'buy_atab', $npcrow["ap_buy_price_rate2"]);
}



}
// end of while //

if ($npcid < 10){
			return 'Error. Invalid ID.';
		}

if ($stare_distance > 0) {
	$agressive = '_a';
}

if ($disk_type == 'guard') {
	$itemicon = 'icon_emblem_guard';
	$npctypetwo = translate('STR_TOOLTIP_GUARD', $language); 
}elseif ($disk_type == 'ancientclan') {
	$itemicon = 'icon_emblem_ancientclan';
	$npctypetwo = translate('STR_TOOLTIP_ANCIENTCLAN', $language); 
}elseif ($disk_type == 'inhabitant') {
	$itemicon = 'icon_emblem_inhabitant';
	$npctypetwo = translate('STR_TOOLTIP_RESIDENT', $language); 
}elseif ($disk_type == 'merchant') {
	$itemicon = 'icon_emblem_merchant';
	$npctypetwo = translate('STR_TOOLTIP_MERCHANT', $language);
}elseif ($disk_type == 'polymorph_human') {
	$itemicon = '';
	$npctypetwo = translate('STR_TOOLTIP_ETC', $language);
}elseif ($disk_type == 'polymorph_table_scale') {
	$itemicon = '';
	$npctypetwo = translate('STR_TOOLTIP_ETC', $language);
}elseif ($disk_type == NULL) {
	$itemicon = 'icon_emblem_etc';
	$npctypetwo = translate('STR_TOOLTIP_ETC', $language);
}elseif ($disk_type == 'god') {
	$itemicon = 'icon_emblem_etc';
	$npctypetwo = translate('STR_TOOLTIP_GOD', $language);
}elseif ($disk_type == 'function') {
	$itemicon = 'icon_emblem_function';
	$npctypetwo = translate('STR_TOOLTIP_FUNCTION', $language);
}elseif ($disk_type == 'etc') {
	$itemicon = 'icon_emblem_etc';
	$npctypetwo = translate('STR_TOOLTIP_ETC', $language);
}elseif ($disk_type == 'e_water') {
	$itemicon = 'icon_emblem_e_water';
	$npctypetwo = translate('STR_TOOLTIP_ETC', $language);
}elseif ($disk_type == 'e_fire') {
	$itemicon = 'icon_emblem_e_fire';
	$npctypetwo = translate('STR_TOOLTIP_ETC', $language);
}elseif ($disk_type == 'e_earth') {
	$itemicon = 'icon_emblem_e_earth';
	$npctypetwo = translate('STR_TOOLTIP_ETC', $language);
}elseif ($disk_type == 'e_air') {
	$itemicon = 'icon_emblem_e_air';
	$npctypetwo = translate('STR_TOOLTIP_ETC', $language);
}elseif ($disk_type == 'drakan') {
	$itemicon = 'icon_emblem_etc';
	$npctypetwo = translate('STR_TOOLTIP_ETC', $language);
}elseif ($disk_type == 'd1' or $disk_type == 'd2' or $disk_type == 'd3' or $disk_type == 'd4' or $disk_type == 'd5' or $disk_type == 'd6' or $disk_type == 'd7') {
	if ($hpgauge_level == 1 or $hpgauge_level == 10 or $hpgauge_level == 20  or $hpgauge_level == 26) {
		$itemicon = 'icon_emblem_monster_n_1' . $agressive;
		$npctypetwo = translate('STR_TOOLTIP_LV1', $language);
	}elseif ($hpgauge_level == 2 or $hpgauge_level == 11 or $hpgauge_level == 21 or $hpgauge_level == 27) {
		$itemicon = 'icon_emblem_monster_n_2' . $agressive;
		$npctypetwo = translate('STR_TOOLTIP_LV2', $language);
	}elseif ($hpgauge_level == 3 or $hpgauge_level == 12 or $hpgauge_level == 22) {
		$itemicon = 'icon_emblem_monster_n_3' . $agressive;
		$npctypetwo = translate('STR_TOOLTIP_LV3', $language);
	}elseif ($hpgauge_level == 4 or $hpgauge_level == 13 or $hpgauge_level == 23) {
		$itemicon = 'icon_emblem_monster_r_1' . $agressive;
		$npctypetwo = translate('STR_TOOLTIP_LV4', $language);
	}elseif ($hpgauge_level == 5 or $hpgauge_level == 14 or $hpgauge_level == 24) {
		$itemicon = 'icon_emblem_monster_r_2' . $agressive;
		$npctypetwo = translate('STR_TOOLTIP_LV5', $language);
	}elseif ($hpgauge_level == 6 or $hpgauge_level == 15 or $hpgauge_level == 25) {
		$itemicon = 'icon_emblem_monster_r_3' . $agressive;
		$npctypetwo = translate('STR_TOOLTIP_LV6', $language);
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
	
		$npchp = npcdetails($npcid, "hp");
		$maxHP = checkmaxstats($npcid, $npchp, 'hp');
		
	
		$basicStats .= '<div class="wrap weapon_property">';
		$basicStats .= '<dt>' . translate('STR_HP', $language) . '</dt><dd class="attack_delay" style="width:250px !important">' . number_format($npchp) . $maxHP . '</dd>';
		$basicStats .= '<div class="cl"></div>';
		$basicStats .= '<dt>Radius</dt><dd class="Radius">' . $radius[0] . 'm</dd>';
		$basicStats .= '<div class="cl"></div>';
		$basicStats .= '<dt>' . translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language) . '</dt><dd class="attack_delay">' . $attack_delay . '</dd>';
		$basicStats .= '<div class="cl"></div>';
		$basicStats .= '<dt>' . translate('STR_MAGICAL_SKILL_BOOST', $language) . '</dt><dd class="magical_skill_boost">' . $magical_skill_boost . '</dd>';
		$basicStats .= '<div class="cl"></div>';
		$basicStats .= '<dt>' . translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_SKILL_BOOST_RESIST', $language) . '</dt><dd class="magical_skill_boost_resist">' . $magical_skill_boost_resist . '</dd>';
		$basicStats .= '<div class="cl"></div>';
		$basicStats .= npc_boss_data($npcid, "physical_power_boost_resist", $language);
		
		$basicStats .= '</dl></div>';
	
}else {
	$basicStats  = '';	
}







// map //
$map = npcdata($npcid, $npcname);
//map //




if ($hpgauge_level < 10) {
	$npctype = translate('STR_TOOLTIP_LOW', $language);
}elseif ($hpgauge_level >= 10 & $hpgauge_level < 20){
	$npctype = translate('STR_TOOLTIP_MEDIUM', $language);
}elseif ($hpgauge_level >= 20 & $hpgauge_level < 25){
	$npctype = translate('STR_TOOLTIP_HIGH', $language);
}
elseif ($hpgauge_level >= 25){
	$npctype = translate('STR_TOOLTIP_MOSTSIG', $language);
}else {
	$npctype = translate('STR_TOOLTIP_LOW', $language);
}


$level = npcdetails($npcid, "level");

if ($level != NULL) {
				$otheritemLevel = translate('STR_TOOLTIP_ITEM_AUTHORIZE_LEVEL_VALUE', $language);
				$oitemLevel = explode('%0', $otheritemLevel);
				
				
				$maxLevel = checkmaxstats($npcid, $level, 'level');
				
				
				$availableLeveleq = '<p class="learn_level">' . $oitemLevel[0] . $level . $maxLevel . '</p>';
		}
		
		
		






$npc_titlef = strtr($npc_title, array(
		"<" => '&lt;',
		));
		
		
		
//$description = '<div class="wrap basicitem_desc" style=""><p class="desc">testdescr</p></div>';
$description = checkdictionary($npcname, $language);



$final .= '<div class="hbody">';
$final .= '<div class="objects object' . $objectType . '"><div class="head item_basic"><dl class="basic">';
$final .= '<dd class="thumb">' . $tooltiptype . '<img src="https://aionpowerbook.com/npc/icon/' . $itemicon . '.png" alt="">' . $threedicon . '</dd>';
$final .= '<dt class="name"><a bold" href="https://aionpowerbook.com/powerbook/NPC/' . $npcid . '">' . $localization . '</a><br>' . $npc_titlef . '</dt>';
$final .= '<dd class="summary"><p class="type"><em>' . translate('STR_ITEMINFO_TYPE', $language) . ':</em> <span>' . $npctype . ' ' . $npctypetwo . $form . '</span></p>';
$final .=  $availableLeveleq ;
$final .= '<p class="desc">';
$final .= $comparEU ;
$final .= '<span class="additionalinfo restrictionTip" title="' . $clientversion . $Overseasclient . '"></span>';
$final .= '</p>';
$final .= '</dd></dl></div>';
$final .=  $basicStats ;
$final .= $description ;
$final .= '<div class="wrap item_id"><input style="width:380px" type="text" value="[where:' . $localization . ']"></dl></div>';

$final .= '<div class="wrap item_id"><table><tr><td>BBCode:</td><td><input style="width:250px" type="text" value="
[url=\'https://aionpowerbook.com/powerbook/NPC/' . $npcid . '/' . $code . '\'][img]https://aionpowerbook.com/npc/icon/' . $itemicon . '.png[/img] ' . $localization . '[/url]"></td></tr></table></dl></div>';

$final .= $devdetails ;
$final .= '</div>';
$final .= $map ;
$final .= '<div class="cl"></div><div class="cl"></div></div>';
$final .= $GoodsListTitle;
$final .= $GoodsList;

$data = $final;

$serv = $_SERVER['DOCUMENT_ROOT'];
$cachefile = $serv . '/powerbook/extensions/AionExtensions/cache/npcdetails/'.$language.'/'.$dbid. $cl . '.html';
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
    $npcrow = $db->query("
SELECT *
FROM  client_npcs_monster
WHERE id = ?", $dbid)->fetchArray();


    $localization=!empty($npcrow["search_" . $language]) ? $npcrow["search_" . $language] : $npcrow['search_ko'];

	
	
	   // --> Don't forget to unserialize() or json_decode() if the data isn't a string!
	$servv = $_SERVER['DOCUMENT_ROOT'];
	$cachefilev = $servv . '/powerbook/extensions/AionExtensions/cache/npcdetails/'.$language.'/'.$dbid. $cl .'.html';
	$wgOut->AddHTML(  "<!-- Cached copy, generated ".date('H:i', filemtime($cachefile))." -->\n" );
    $data = file_get_contents($cachefilev);
	$wgOut->AddHTML( $data );
	
	
	
	$DisplayTitle = '{{DISPLAYTITLE:' . $localization . '}}';
	return array( $DisplayTitle, 'noparse' => false );
}
	
}