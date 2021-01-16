<?php
header('Content-type: text/html; charset=utf-8');
$wgExtensionCredits['variable'][] = array(
	'path'           => __FILE__,
	'name'           => 'Aion Craft Tables',
	'author'         => 'Kelekelio',
	'url'            => 'https://aionpowerbook.com',
	'descriptionmsg' => 'Tables with Aion Items by type',
	'version'		 => '1.0',
	'license-name' 	 => 'LICENSE',
);

$wgHooks['ParserFirstCallInit'][] = 'AionCraftDetailsFunction';
$wgExtensionMessagesFiles['AionCraftDetails'] = __DIR__ . '/craft.i18n.php';
function AionCraftDetailsFunction( &$parser ) {
   $parser->setFunctionHook( 'craftdetails', 'AionCraftDetailsParserFunction' );
   return true;
}



function craftnameloca($name)
{
    include 'include/DBselect.php';
    $result = $db->query("SELECT description FROM client_items WHERE name = '$name' ", $name)->fetchArray();

    return translate($result["description"], language());
	
}



function AionCraftDetailsParserFunction( &$parser, $arg1=''  ) {
global $wgOut;
$dbid =  $_GET['dbid'];
$language = language(); 

if (isClassic() == "1") {
    $cl = "_cl";
}



$serv = $_SERVER['DOCUMENT_ROOT'];
$cachefile = $serv . '/powerbook/extensions/AionExtensions/cache/craftdetails/'.$language.'/'.$dbid. $cl .'.html';
$exists = file_exists($cachefile);

if( !$exists || ( $exists && time() > strtotime('+31 days', filemtime($cachefile)) )) {


    include 'include/DBselect.php';
    $sql = $aionDB->query("SELECT  * FROM client_combine_recipe where id = '$dbid' ")->fetchAll();

    foreach ($sql as $craftrow) {
		//craft
		$craftproduct = $craftrow["product"];
		$craftid = $craftrow["id"];
		$product_quantity = $craftrow["product_quantity"];
		$craftcombo1_product = $craftrow["combo1_product"];
		$craftcombo2_product = $craftrow["combo2_product"];
		$craftrequired_skillpoint = $craftrow["required_skillpoint"];
		$localization = !empty($craftrow['search_'.$language]) ? $craftrow['search_'.$language] : $craftrow['search_ko'];
		
		if ($craftrow["combineskill"] == 'tailoring') {
			$craftcombineskill = '<a href="https://aionpowerbook.com/powerbook/Tailoring">'.translate('STR_TAILORING', language()).'</a>';
		} 
		if ($craftrow["combineskill"] == 'alchemy') {
			$craftcombineskill = '<a href="https://aionpowerbook.com/powerbook/Alchemy">'.translate('STR_ALCHEMY', language()).'</a>';
		} 
		if ($craftrow["combineskill"] == 'armorsmith') {
			$craftcombineskill = '<a href="https://aionpowerbook.com/powerbook/Armoursmithing">'.translate('STR_ARMORSMITH', language()).'</a>';
		} 
		if ($craftrow["combineskill"] == 'convert') {
			$craftcombineskill = '<a href="https://aionpowerbook.com/powerbook/Morphing">'.translate('STR_CONVERT', language()).'</a>';
		} 
		if ($craftrow["combineskill"] == 'cooking') {
			$craftcombineskill = '<a href="https://aionpowerbook.com/powerbook/Cooking">'.translate('STR_COOKING', language()).'</a>';
		} 
		if ($craftrow["combineskill"] == 'handiwork') {
			$craftcombineskill = '<a href="https://aionpowerbook.com/powerbook/Handicrafting">'.translate('STR_HANDIWORK', language()).'</a>';
		} 
		if ($craftrow["combineskill"] == 'menuisier') {
			$craftcombineskill = '<a href="https://aionpowerbook.com/powerbook/Construction">'.translate('STR_MENUISIER', language()).'</a>';
		} 
		if ($craftrow["combineskill"] == 'weaponsmith') {
			$craftcombineskill = '<a href="https://aionpowerbook.com/powerbook/Weaponsmithing">'.translate('STR_WEAPONSMITH', language()).'</a>';
		} 
		if ($craftrow["combineskill"] == 'highcraft') {
			$craftcombineskill = '<a href="https://aionpowerbook.com/powerbook/Magical_Crafting">'.translate('STR_HIGHCRAFT', language()).'</a>';
		} 
		
		
		if (strtolower($craftrow["qualification_race"]) == 'pc_light'){
			$craftqualification_race = ' <span class="pc_light" title="' . translate('STR_TOOLTIP_PC_LIGHT', language()) . '"></span>';
		}
		if (strtolower($craftrow["qualification_race"]) == 'pc_dark'){
			$craftqualification_race = ' <span class="pc_dark" title="' . translate('STR_TOOLTIP_PC_DARK', language()) . '"></span>';
		}
		if (strtolower($craftrow["qualification_race"]) == 'all'){
			$craftqualification_race = ' <span class="pc_light"></span> <span class="pc_dark"></span>';
		}
		
		
		
		
		$craftcomponent_quantity  = $craftrow["component_quantity"];
		$craftcomponent_quantity1  = $craftrow["component_quantity1"];
		$craftcomponent11 = extraitem($craftrow["component11"], language());
		$craftcomponent21 = extraitem($craftrow["component21"], language());
		$craftcomponent31 = extraitem($craftrow["component31"], language());
		$craftcomponent41 = extraitem($craftrow["component41"], language());
		$craftcomponent51 = extraitem($craftrow["component51"], language());
		$craftcomponent61 = extraitem($craftrow["component61"], language());
		$craftcomponent71 = extraitem($craftrow["component71"], language());
		$craftcomponent81 = extraitem($craftrow["component81"], language());
		$craftcompo1_quantity1 = $craftrow["compo1_quantity1"];
		$craftcompo2_quantity1 = $craftrow["compo2_quantity1"];
		$craftcompo3_quantity1 = $craftrow["compo3_quantity1"];
		$craftcompo4_quantity1 = $craftrow["compo4_quantity1"];
		$craftcompo5_quantity1 = $craftrow["compo5_quantity1"];
		$craftcompo6_quantity1 = $craftrow["compo6_quantity1"];
		$craftcompo7_quantity1 = $craftrow["compo7_quantity1"];
		$craftcompo8_quantity1 = $craftrow["compo8_quantity1"];
		
		$craftcomponent12 = extraitem($craftrow["component12"], language());
		$craftcomponent22 = extraitem($craftrow["component22"], language());
		$craftcomponent32 = extraitem($craftrow["component32"], language());
		$craftcomponent42 = extraitem($craftrow["component42"], language());
		$craftcomponent52 = extraitem($craftrow["component52"], language());
		$craftcomponent62 = extraitem($craftrow["component62"], language());
		$craftcomponent72 = extraitem($craftrow["component72"], language());
		$craftcomponent82 = extraitem($craftrow["component82"], language());
		$craftcompo1_quantity2 = $craftrow["compo1_quantity2"];
		$craftcompo2_quantity2 = $craftrow["compo2_quantity2"];
		$craftcompo3_quantity2 = $craftrow["compo3_quantity2"];
		$craftcompo4_quantity2 = $craftrow["compo4_quantity2"];
		$craftcompo5_quantity2 = $craftrow["compo5_quantity2"];
		$craftcompo6_quantity2 = $craftrow["compo6_quantity2"];
		$craftcompo7_quantity2 = $craftrow["compo7_quantity2"];
		$craftcompo8_quantity2 = $craftrow["compo8_quantity2"];
		
		$craftcomponent13 = extraitem($craftrow["component13"], language());
		$craftcomponent23 = extraitem($craftrow["component23"], language());
		$craftcomponent33 = extraitem($craftrow["component33"], language());
		$craftcomponent43 = extraitem($craftrow["component43"], language());
		$craftcomponent53 = extraitem($craftrow["component53"], language());
		$craftcomponent63 = extraitem($craftrow["component63"], language());
		$craftcomponent73 = extraitem($craftrow["component73"], language());
		$craftcomponent83 = extraitem($craftrow["component83"], language());
		$craftcompo1_quantity3 = $craftrow["compo1_quantity3"];
		$craftcompo2_quantity3 = $craftrow["compo2_quantity3"];
		$craftcompo3_quantity3 = $craftrow["compo3_quantity3"];
		$craftcompo4_quantity3 = $craftrow["compo4_quantity3"];
		$craftcompo5_quantity3 = $craftrow["compo5_quantity3"];
		$craftcompo6_quantity3 = $craftrow["compo6_quantity3"];
		$craftcompo7_quantity3 = $craftrow["compo7_quantity3"];
		$craftcompo8_quantity3 = $craftrow["compo8_quantity3"];
		
		$craftcomponent14 = extraitem($craftrow["component14"], language());
		$craftcomponent24 = extraitem($craftrow["component24"], language());
		$craftcomponent34 = extraitem($craftrow["component34"], language());
		$craftcomponent44 = extraitem($craftrow["component44"], language());
		$craftcomponent54 = extraitem($craftrow["component54"], language());
		$craftcomponent64 = extraitem($craftrow["component64"], language());
		$craftcomponent74 = extraitem($craftrow["component74"], language());
		$craftcomponent84 = extraitem($craftrow["component84"], language());
		$craftcompo1_quantity4 = $craftrow["compo1_quantity4"];
		$craftcompo2_quantity4 = $craftrow["compo2_quantity4"];
		$craftcompo3_quantity4 = $craftrow["compo3_quantity4"];
		$craftcompo4_quantity4 = $craftrow["compo4_quantity4"];
		$craftcompo5_quantity4 = $craftrow["compo5_quantity4"];
		$craftcompo6_quantity4 = $craftrow["compo6_quantity4"];
		$craftcompo7_quantity4 = $craftrow["compo7_quantity4"];
		$craftcompo8_quantity4 = $craftrow["compo8_quantity4"];
}


if ($craftid == NULL ) {
	return 'Invalid ID.';
}

$craft .= '<br><div class="hbody"><div class="objects object_craft_recipe expand_on"><div class="head"><dl><dt>Production</dt><dd><p>' . extraitem($craftproduct, language()) . ' (' . $product_quantity . ')</p>';
		if ($craftcombo1_product != NULL){
		$craft .= '<p> ' . extraitem($craftcombo1_product, language()) . '  (' . translate("STR_TOOLTIP_RECIPE_OUTPUT_COMBO", language()) . ')</p>';
		}
		if ($craftcombo2_product != NULL){
		$craft .= '<p> ' . extraitem($craftcombo2_product, language()) . '  (' . translate("STR_TOOLTIP_RECIPE_OUTPUT_COMBO", language()) . ')</p>';
		}
		$craft .= '</dd></dl></div>';
		$craft .= '<div class="wrap craft_condition"><dl><dt>' . translate("STR_PLAYER_INFO_DIALOG__SKILL", language()) . '</dt><dd><p>' . $craftqualification_race . $craftcombineskill . ' (' . $craftrequired_skillpoint . ')</p></dd></dl></div>';
		
		$craft .='<div class="wrap craft_material">';
		
		$craft .= '<dl class="material"><dt><div class="craftmethod1"></div></dt><dd>';
		
		if ($craftcompo1_quantity1 != NULL) {
			$craft .= '<p>' . $craftcomponent11 . ' ' . $craftcompo1_quantity1 . '</p>';
		}
		if ($craftcompo2_quantity1 != NULL) {
			$craft .= '<p>' . $craftcomponent21 . ' ' . $craftcompo2_quantity1 . '</p>';
		}
		if ($craftcompo3_quantity1 != NULL) {
			$craft .= '<p>' . $craftcomponent31 . ' ' . $craftcompo3_quantity1 . '</p>';
		}
		if ($craftcompo4_quantity1 != NULL) {
			$craft .= '<p>' . $craftcomponent41 . ' ' . $craftcompo4_quantity1 . '</p>';
		}
		if ($craftcompo5_quantity1 != NULL) {
			$craft .= '<p>' . $craftcomponent51 . ' ' . $craftcompo5_quantity1 . '</p>';
		}
		if ($craftcompo6_quantity1 != NULL) {
			$craft .= '<p>' . $craftcomponent61 . ' ' . $craftcompo6_quantity1 . '</p>';
		}
		if ($craftcompo7_quantity1 != NULL) {
			$craft .= '<p>' . $craftcomponent71 . ' ' . $craftcompo7_quantity1 . '</p>';
		}
		if ($craftcompo8_quantity1 != NULL) {
			$craft .= '<p>' . $craftcomponent81 . ' ' . $craftcompo8_quantity1 . '</p>';
		}
		
		$craft .= '</dd></dl>';
		
		
		
		if ($craftcompo1_quantity2 != NULL){
			$craft .= '<dl class="material_ext"><dt><div class="craftmethod2"></div></dt><dd>';
		
		
		if ($craftcompo1_quantity2 != NULL) {
			$craft .= '<p>' . $craftcomponent12 . ' ' . $craftcompo1_quantity2 . '</p>';
		}
		if ($craftcompo2_quantity2 != NULL) {
			$craft .= '<p>' . $craftcomponent22 . ' ' . $craftcompo2_quantity2 . '</p>';
		}
		if ($craftcompo3_quantity2 != NULL) {
			$craft .= '<p>' . $craftcomponent32 . ' ' . $craftcompo3_quantity2 . '</p>';
		}
		if ($craftcompo4_quantity2 != NULL) {
			$craft .= '<p>' . $craftcomponent42 . ' ' . $craftcompo4_quantity2 . '</p>';
		}
		if ($craftcompo5_quantity2 != NULL) {
			$craft .= '<p>' . $craftcomponent52 . ' ' . $craftcompo5_quantity2 . '</p>';
		}
		if ($craftcompo6_quantity2 != NULL) {
			$craft .= '<p>' . $craftcomponent62 . ' ' . $craftcompo6_quantity2 . '</p>';
		}
		if ($craftcompo7_quantity2 != NULL) {
			$craft .= '<p>' . $craftcomponent72 . ' ' . $craftcompo7_quantity2 . '</p>';
		}
		if ($craftcompo8_quantity2 != NULL) {
			$craft .= '<p>' . $craftcomponent82 . ' ' . $craftcompo8_quantity2 . '</p>';
		}
		
		
		$craft .= '</dd></dl>';
		}
		
		if ($craftcompo1_quantity3 != NULL){
			$craft .= '<dl class="material_ext"><dt><div class="craftmethod3"></div></dt><dd>';
		
		
				if ($craftcompo1_quantity3 != NULL) {
			$craft .= '<p>' . $craftcomponent13 . ' ' . $craftcompo1_quantity3 . '</p>';
		}
		if ($craftcompo2_quantity3 != NULL) {
			$craft .= '<p>' . $craftcomponent23 . ' ' . $craftcompo2_quantity3 . '</p>';
		}
		if ($craftcompo3_quantity3 != NULL) {
			$craft .= '<p>' . $craftcomponent33 . ' ' . $craftcompo3_quantity3 . '</p>';
		}
		if ($craftcompo4_quantity3 != NULL) {
			$craft .= '<p>' . $craftcomponent43 . ' ' . $craftcompo4_quantity3 . '</p>';
		}
		if ($craftcompo5_quantity3 != NULL) {
			$craft .= '<p>' . $craftcomponent53 . ' ' . $craftcompo5_quantity3 . '</p>';
		}
		if ($craftcompo6_quantity3 != NULL) {
			$craft .= '<p>' . $craftcomponent63 . ' ' . $craftcompo6_quantity3 . '</p>';
		}
		if ($craftcompo7_quantity3 != NULL) {
			$craft .= '<p>' . $craftcomponent73 . ' ' . $craftcompo7_quantity3 . '</p>';
		}
		if ($craftcompo8_quantity3 != NULL) {
			$craft .= '<p>' . $craftcomponent83 . ' ' . $craftcompo8_quantity3 . '</p>';
		}
		
		
		$craft .= '</dd></dl>';
		}
		
		if ($craftcompo1_quantity4 != NULL){
			$craft .= '<dl class="material_ext"><dt><div class="craftmethod4"></div></dt><dd>';
		
		
		if ($craftcompo1_quantity4 != NULL) {
			$craft .= '<p>' . $craftcomponent14 . ' ' . $craftcompo1_quantity4 . '</p>';
		}
		if ($craftcompo2_quantity4 != NULL) {
			$craft .= '<p>' . $craftcomponent24 . ' ' . $craftcompo2_quantity4 . '</p>';
		}
		if ($craftcompo3_quantity4 != NULL) {
			$craft .= '<p>' . $craftcomponent34 . ' ' . $craftcompo3_quantity4 . '</p>';
		}
		if ($craftcompo4_quantity4 != NULL) {
			$craft .= '<p>' . $craftcomponent44 . ' ' . $craftcompo4_quantity4 . '</p>';
		}
		if ($craftcompo5_quantity4 != NULL) {
			$craft .= '<p>' . $craftcomponent54 . ' ' . $craftcompo5_quantity4 . '</p>';
		}
		if ($craftcompo6_quantity4 != NULL) {
			$craft .= '<p>' . $craftcomponent64 . ' ' . $craftcompo6_quantity4 . '</p>';
		}
		if ($craftcompo7_quantity4 != NULL) {
			$craft .= '<p>' . $craftcomponent74 . ' ' . $craftcompo7_quantity4 . '</p>';
		}
		if ($craftcompo8_quantity4 != NULL) {
			$craft .= '<p>' . $craftcomponent84 . ' ' . $craftcompo8_quantity4 . '</p>';
		}
		
		
		$craft .= '</dd></dl>';
		}
		
		
		$craft .= '</div></div></div>';	//end
		
		
		
$data = $craft;
		
		

$serv = $_SERVER['DOCUMENT_ROOT'];
$cachefile = $serv . '/powerbook/extensions/AionExtensions/cache/craftdetails/'.$language.'/'.$dbid. $cl . '.html';
file_put_contents($cachefile, $data);

$wgOut->AddHTML( $data );

$DisplayTitle = '{{DISPLAYTITLE:' . $localization . '}}';
return array( $DisplayTitle, 'noparse' => false );


}
else {

    include 'include/DBselect.php';
    $skillrow = $db->query("SELECT * FROM client_combine_recipe WHERE id = '$dbid' ", $dbid)->fetchArray();

    $localization = !empty($skillrow['search_'.$language]) ? $skillrow['search_'.$language] : $skillrow['search_ko'];
	
	
	   // --> Don't forget to unserialize() or json_decode() if the data isn't a string!
	$servv = $_SERVER['DOCUMENT_ROOT'];
	$cachefilev = $servv . '/powerbook/extensions/AionExtensions/cache/craftdetails/'.$language.'/'.$dbid. $cl . '.html';
	$wgOut->AddHTML(  "<!-- Cached copy, generated ".date('H:i', filemtime($cachefile))." -->\n" );
    $data = file_get_contents($cachefilev);
	$wgOut->AddHTML( $data );
	
	
	
	$DisplayTitle = '{{DISPLAYTITLE:' . $localization . '}}';
	return array( $DisplayTitle, 'noparse' => false );	
	
	
}



}