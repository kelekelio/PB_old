<?php


$wgExtensionCredits['variable'][] = array(
	'path'           => __FILE__,
	'name'           => 'Aion Transformation',
	'author'         => 'Kelekelio',
	'url'            => 'https://aionpowerbook.com',
	'descriptionmsg' => 'Aion Transformation',
	'version'		 => '1.0',
	'license-name' 	 => 'LICENSE',
);





 
$wgHooks['ParserFirstCallInit'][] = 'AiontransformationFunction';
$wgExtensionMessagesFiles['Aiontransformation'] = __DIR__ . '/aion_transformations.i18n.php';
function AiontransformationFunction( &$parser ) {
   $parser->setFunctionHook( 'transformationdetails', 'AiontransformationParserFunction' );
   return true;
}



function AiontransformationParserFunction( &$parser, $arg1 ) {
 global $wgOut;
 $language = language();
 $dbid = $_GET['dbid'];
global $wgLang;
$code = $wgLang->getCode();



$serv = $_SERVER['DOCUMENT_ROOT'];
$cachefile = $serv . '/powerbook/extensions/AionExtensions/cache/transformation/'.$language.'/'.$dbid.'.html';
$exists = file_exists($cachefile);

if( !$exists || ( $exists && time() > strtotime('+31 days', filemtime($cachefile)) )) {



    include 'include/DBselect.php';
    $sql = $aionDB->query("SELECT  * FROM client_transformbook WHERE id = '$dbid' ")->fetchAll();

    foreach ($sql as $row) {
        $id=$row["id"];
		$name = $row["name"];
		$description = translate($row["description"], $language);
		$desc_long = translate($row["desc_long"], $language);
		$desc_long_us = translate($row["desc_long"] . '_USA', 'US');
		$grade = $row["grade"];
		$grade_desc = translate($row["grade_desc"], $language);
		$icon_name = strtolower($row["icon_name"]);
		$preview_dir = $row["preview_dir"];
		$preview_mesh = $row["preview_mesh"];
		$skill = $row["skill"];
		
		if ($desc_long_us == NULL) {
			$desc_long_us = translate($row["desc_long"], 'US');
		}
} 


if ($grade == '1') {
	$color = 'acacac'; //<font color="EAEAEA">일반</font>
}elseif ($grade == '2') {
	$color = '6CDF5E';
}elseif ($grade == '3') {
	$color = 'E1AD40';
}elseif ($grade == '4') {
	$color = 'EB46FF';
}elseif ($grade == '5') {
	$color = 'FF4B4B';
}


$skillid = skillbuffdesc($skill);
$eu = 6;
$knowledge = 1;



$desc_long_spaced = preg_replace('/(\S+\s+\S+)\s/', '$1<br>', $desc_long);

$desc = preg_replace_callback('/\[%(.*?)\]/i', function(array $matches) use ($skillid, $eu, $knowledge) {
	return effect($matches[1], $skillid, $eu, $knowledge);
}, $desc_long_spaced);



$descfinal = strtr($desc, array(
	"%%" => '&percnt;',
	"%" => ''
));
		
		
		
		
		

		

	$Final .= '<div class="hbody">';
    $Final .= '<div class="objects object"><div class="head item_basic"><dl class="basic">';
    $Final .= '<dd class="thumb"><img src="https://aionpowerbook.com/transformation/' . $icon_name . '.png" alt=""></dd>';
    $Final .= '<dt class="name"><a style="color:#'.$color.' !important" class="bold" href="https://aionpowerbook.com/powerbook/Transformation/' . $id . '">' . $description . '</a> </dt>';
	$Final .= '<dd class="summary"><p class="type"><em>' . translate('STR_ITEMINFO_TYPE', language()) . '</em> <span><a href="https://aionpowerbook.com/powerbook/Transformations">' . translate('STR_TRANSFORMATION_DIALOG', language()) . '</a></span><em> '.translate('STR_TRANSFORMATION_ICON_INFO_GRADE_NAME', language()). '</em><span>' . $grade_desc .'</span></p>';
	
    $Final .= '</dd></dl></div>';
	$Final .=  '<div class="wrap basicitem_desc" style=""><p class="desc">' . $descfinal . '</p></div>';
	
	$Final .= '<div class="wrap item_id"><table><tr><td>BBCode:</td><td><input style="width:250px" type="text" value="
[url=\'https://aionpowerbook.com/powerbook/Transformation/' . $id . '/' . $code . '\'][img]https://aionpowerbook.com/transformation/' . $icon_name . '.png[/img] [color=#' . $color . ']' . $description . '[/color][/url]"></td></tr></table></dl></div>';
    $Final .=  '</div><div class="cl"></div><div class="cl"></div></div>';







	// Collection


	$listtab = '<li role="presentation" class=""><a href="#Items0" aria-controls="Item" role="tab" data-toggle="tab" class="active">Collection</a></li>';

	$ajax = 'https://aionpowerbook.com/powerbook/extensions/AionExtensions/include/Transformation_Collection_ajax.php?name=' . $name . '&lang=' . $language . '&grade=' . $grade;

	$table = '<div role="tabpanel" class="tab-pane active" id="Items0">
	<table class="lists list_basicitem width_100p ajaxTable"  ajaxurl="'.$ajax.'" id="items0" dataExtra="false"><thead><tr>
	<th class="fixed nowrap">ID</th>
	<th class="fixed nowrap no-sorting " width="40px" >Skill</th>
	<th class="nowrap ajax100p"></th>
	<th class="nowrap" width="40px">Number</th>
	</tr></thead></table><div class="cl"></div>
			</div>';

	$Final .= '<br><div class="hbody"><ul class="nav nav-tabs" role="tablist">' . $listtab . '</ul><br><div class="tab-content">' . $table . '</div></div>';




$data = $Final;

$serv = $_SERVER['DOCUMENT_ROOT'];
$cachefile = $serv . '/powerbook/extensions/AionExtensions/cache/transformation/'.$language.'/'.$dbid.'.html';
file_put_contents($cachefile, $data);
	
	
	$wgOut->AddHTML( $data );
	$DisplayTitle = '{{DISPLAYTITLE:' . $description . '}}';
    return array( $DisplayTitle, 'noparse' => false );
}else{
    include 'include/DBselect.php';
    $row = $db->query("SELECT  * FROM client_transformbook WHERE id = '$dbid' ", $dbid)->fetchArray();

    $description = translate($row["description"], $language);
	
if ($dbid != NULL){
	$localization=$description;
}else {
	$localization = 'NO ID PROVIDED';
}
	
	
$servv = $_SERVER['DOCUMENT_ROOT'];
	$cachefilev = $servv . '/powerbook/extensions/AionExtensions/cache/transformation/'.$language.'/'.$dbid.'.html';
	$wgOut->AddHTML(  "<!-- Cached copy, generated ".date('H:i', filemtime($cachefile))." -->\n" );
    $data = file_get_contents($cachefilev);
	$wgOut->AddHTML( $data );
	
	$DisplayTitle = '{{DISPLAYTITLE:' . $localization . '}}';
	return array( $DisplayTitle, 'noparse' => false );
}
	
	
}
 
 