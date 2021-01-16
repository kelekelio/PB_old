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


$wgHooks['ParserFirstCallInit'][] = 'AiongatheringDetails';
$wgExtensionMessagesFiles['AiongatheringDetails'] = __DIR__ . '/aion_gathering_full.i18n.php';
function AiongatheringDetails( &$parser ) {
    $parser->setFunctionHook( 'gathering', 'AionParsergatheringDetails' );
    return true;
}





function npcdatagather($id) {

	$spotsarray = array();

    include 'include/DBselect.php';
    $sql = $db->query("SELECT * FROM gather_data WHERE id = '$id' ")->fetchAll();

    foreach ($sql as $row) {
		$location = $row["map"];
		include 'include/maplayers.php';
	}
	

	$i = 0;
foreach ($spotsarray as $map => $nods) {
    
		$node = implode(";", $nods);

		$node = strtr($node, array(
			'a1' => 'g1',
		));
	
if ($i == '0') {
	$active = 'active';
}else {
	$active = '';
}
		
		$generatemap .= '<div class="carousel-item '.$active.'">
		<div class="object_minimap" mapzone="'.$map.'" mapmarks = "'.$node.'" npcid="'.$id.'&map='.$map.'&gather=1">
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

function zonemapgather($id){

    include 'include/DBselect.php';
    $result = $db->query("SELECT name FROM  zonemap WHERE id = '$id' ", $id)->fetchArray();

    return $result['name'];
}



function harvesticon($name){
    include 'include/DBselect.php';
    $result = $db->query("
           SELECT icon_name
           FROM  client_items
           WHERE name = '$name'
       ", $name)->fetchArray();


	
	$itemicon=strtolower($result["icon_name"]);

	$itemicon = strtr($itemicon, array(
		".dds" => '',
	));

    return $itemicon;	
}





function AionParsergatheringDetails( &$parser, $arg1 ) {
global $wgOut;
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
$cachefile = $serv . '/powerbook/extensions/AionExtensions/cache/gathering/'.$language.'/'.$dbid. $cl . '.html';
$exists = file_exists($cachefile);

if( !$exists || ( $exists && time() > strtotime('+31 days', filemtime($cachefile)) )) {
	
	

    include 'include/DBselect.php';
    $sql = $db->query("
SELECT *
FROM  gather_src
WHERE id = '$dbid' ")->fetchAll();

    foreach ($sql as $npcrow) {
        $npcid=$npcrow["id"];
		$localization=!empty($npcrow["search_" . $language]) ? $npcrow["search_" . $language] : $npcrow['search_ko'];
		$source_type = $npcrow["source_type"];
		$harvestskill = $npcrow["harvestskill"];
		$skill_level = $npcrow["skill_level"];
		$char_level_limit = $npcrow["char_level_limit"];
		$harvest_count = $npcrow["harvest_count"];
		
		
		
$material1 = $npcrow["material1"];

$material_num1 = $npcrow["material_num1"];
$material1 = $npcrow["material1"];	
$normal_rate1 = $npcrow["normal_rate1"]/100000;
$material_num2 = $npcrow["material_num2"];
$material2 = $npcrow['material2'];
$normal_rate2 = $npcrow['normal_rate2']/100000;
$material_num3 = $npcrow["material_num3"];
$material3 = $npcrow['material3'];
$normal_rate3 = $npcrow['normal_rate3']/100000;
$material_num4 = $npcrow["material_num4"];
$material4 = $npcrow['material4'];
$normal_rate4 = $npcrow['normal_rate4']/100000;
$material_num5 = $npcrow["material_num5"];
$material5 = $npcrow['material5'];
$normal_rate5 = $npcrow['normal_rate5']/100000;
$material_num6 = $npcrow["material_num6"];
$material6 = $npcrow['material6'];
$normal_rate6 = $npcrow['normal_rate6']/100000;
$material_num7 = $npcrow["material_num7"];
$material7 = $npcrow['material7'];
$normal_rate7 = $npcrow['normal_rate7']/100000;
$material_num8 = $npcrow["material_num8"];
$material8 = $npcrow['material8'];
$normal_rate8 = $npcrow['normal_rate8']/100000;

$required_item = $npcrow['required_item'];

}
// end of while //

if ($npcid < 10){
			return 'Error. Invalid ID.';
		}



$itemicon = harvesticon($material1);


if ($harvestskill == 'gathering_b') {
	$availableLeveleq .= '<p class="learn_level">' . translate('STR_GATHERING_B', $language) . ': ' . $skill_level . '</p>';
}elseif ($harvestskill == 'aerial_gathering') {
	$availableLeveleq .= '<p class="learn_level">' . translate('STR_AERIAL_GATHERING', $language) . ': ' . $skill_level . '</p>';
}elseif ($harvestskill == 'gathering_a') {
	$availableLeveleq .= '<p class="learn_level">' . translate('STR_GATHERING_A', $language) . ': ' . $skill_level . '</p>';
}else {
	$availableLeveleq .= '<p class="learn_level">Unknown: ' . $skill_level . '</p>';
}


if ($char_level_limit != NULL){
	$availableLeveleq .= '<p class="learn_level">Min Level: ' . $char_level_limit . '</p>';
}





$gather .= '<div class="wrap item_upgrade" style=""><dl class="item_upgrade"><dt>Harvest (x'.$harvest_count.')</dt><dd class="item_upgrade">';

if($material2 == NULL){
	$end1 = '_end';
}
$gather .= '<span class="treelist'.$end1.'"></span>'.extraitem($material1, $language).' '.$material_num1.' ('.$normal_rate1.'%)<br>';


if ($material2 != NULL){
	if($material3 == NULL){
		$end2 = '_end';
	}
	$gather .= '<span class="treelist'.$end2.'"></span>'.extraitem($material2, $language).' '.$material_num2.' ('.$normal_rate2.'%)<br>';
}

if ($material3 != NULL){
	if($material4 == NULL){
		$end3 = '_end';
	}
	$gather .= '<span class="treelist'.$end3.'"></span>'.extraitem($material3, $language).' '.$material_num3.' ('.$normal_rate3.'%)<br>';
}

if ($material4 != NULL){
	if($material5 == NULL){
		$end4 = '_end';
	}
	$gather .= '<span class="treelist'.$end4.'"></span>'.extraitem($material4, $language).' '.$material_num4.' ('.$normal_rate4.'%)<br>';
}

if ($material5 != NULL){
	if($material6 == NULL){
		$end5 = '_end';
	}
	$gather .= '<span class="treelist'.$end5.'"></span>'.extraitem($material5, $language).' '.$material_num5.' ('.$normal_rate5.'%)<br>';
}

if ($material6 != NULL){
	if($material7 == NULL){
		$end6 = '_end';
	}
	$gather .= '<span class="treelist'.$end6.'"></span>'.extraitem($material6, $language).' '.$material_num6.' ('.$normal_rate6.'%)<br>';
}

if ($material7 != NULL){
	if($material8 == NULL){
		$end7 = '_end';
	}
	$gather .= '<span class="treelist'.$end7.'"></span>'.extraitem($material7, $language).' '.$material_num7.' ('.$normal_rate7.'%)<br>';
}

if ($material8 != NULL){
	$gather .= '<span class="treelist_end"></span>'.extraitem($material8, $language).' '.$material_num8.' ('.$normal_rate8.'%)<br>';
}

$gather .= '</dd></dl></div>';

if ($required_item != NULL) {
$requireditem .= '<div class="wrap item_upgrade"><dl class="item_upgrade"><dt>Requires:</dt><dd class="item_upgrade">';
$requireditem .= '<span class="treelist_end"></span>' . extraitem($required_item, $language);
$requireditem .= '</dd></dl></div>';
}





if ($source_type == 'berry') {
	$source = 'Berry';
}
elseif ($source_type == 'vegetable') {
	$source = 'Vegetable';
}
elseif ($source_type == 'noblemetal') {
	$source = 'Noble Metal';
}
elseif ($source_type == 'fish') {
	$source = 'Fish';
}
elseif ($source_type == 'herb') {
	$source = 'Herb';
}
elseif ($source_type == 'jewelry') {
	$source = 'Jewelry';
}
elseif ($source_type == 'metal') {
	$source = 'Metal';
}
elseif ($source_type == 'od') {
	$source = 'Aether';
}
elseif ($source_type == 'plant') {
	$source = 'Plant';
}
elseif ($source_type == 'shell') {
	$source = 'Shell';
}
elseif ($source_type == 'tree') {
	$source = 'Tree';
}
else {
	$source = $source_type;
}


















// map //
$map = npcdatagather($npcid);
//map //









		
		
		







		
		




$final .= '<div class="hbody">';
$final .= '<div class="objects object' . $objectType . '"><div class="head item_basic"><dl class="basic">';
$final .= '<dd class="thumb"><img src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" alt=""></dd>';
$final .= '<dt class="name"><a bold" href="https://aionpowerbook.com/powerbook/Gathering/' . $npcid . '">' . $localization . '</a></dt>';
$final .= '<dd class="summary"><p class="type"><em>' . translate('STR_ITEMINFO_TYPE', $language) . ':</em> <span>' . $source . '</span></p>';
$final .=  $availableLeveleq ;
$final .= '</dd></dl></div>';
$final .= $gather;
$final .= $requireditem;

$final .= '<div class="wrap item_id"><table><tr><td>BBCode:</td><td><input style="width:250px" type="text" value="
[url=\'https://aionpowerbook.com/powerbook/Gathering/' . $npcid . '/' . $code . '\'][img]https://aionpowerbook.com/item/icon' . $itemicon . '.png[/img] ' . $localization . '[/url]"></td></tr></table></dl></div>';

$final .= '</div>';
$final .= $map ;
$final .= '<div class="cl"></div><div class="cl"></div></div>';



$data = $final;

$serv = $_SERVER['DOCUMENT_ROOT'];
$cachefile = $serv . '/powerbook/extensions/AionExtensions/cache/gathering/'.$language.'/'.$dbid. $cl . '.html';
file_put_contents($cachefile, $data);

$wgOut->AddHTML( $data );


    $DisplayTitle = '{{DISPLAYTITLE:' . $localization . '}}';
    return array( $DisplayTitle, 'noparse' => false );
	
}

else {

    include 'include/DBselect.php';
    $result = $db->query("
SELECT *
FROM  gather_src
WHERE id = $dbid", $dbid)->fetchArray();


    $localization=!empty($npcrow["search_" . $language]) ? $npcrow["search_" . $language] : $npcrow['search_ko'];
	
	
	   // --> Don't forget to unserialize() or json_decode() if the data isn't a string!
	$servv = $_SERVER['DOCUMENT_ROOT'];
	$cachefilev = $servv . '/powerbook/extensions/AionExtensions/cache/gathering/'.$language.'/'.$dbid. $cl . '.html';
	$wgOut->AddHTML(  "<!-- Cached copy, generated ".date('H:i', filemtime($cachefile))." -->\n" );
    $data = file_get_contents($cachefilev);
	$wgOut->AddHTML( $data );
	
	
	
	$DisplayTitle = '{{DISPLAYTITLE:' . $localization . '}}';
	return array( $DisplayTitle, 'noparse' => false );
}
	
}