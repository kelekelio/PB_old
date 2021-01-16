<?php



function designInfo($name, $language)
{

    include 'DBselect.php';

    $result = $db->query("
SELECT *
FROM client_combine_recipe
WHERE name = '$name'
", $name)->fetchArray();
	
	
	
	//craft
		$craftproduct = $result["product"];
		$product_quantity = $result["product_quantity"];
		$craftcombo1_product = $result["combo1_product"];
		$craftcombo2_product = $result["combo2_product"];
		$craftrequired_skillpoint = $result["required_skillpoint"];
		
		if ($result["combineskill"] == 'tailoring') {
			$craftcombineskill = translate('STR_TAILORING', $language);
		} 
		if ($result["combineskill"] == 'alchemy') {
			$craftcombineskill = translate('STR_ALCHEMY', $language);
		} 
		if ($result["combineskill"] == 'armorsmith') {
			$craftcombineskill = translate('STR_ARMORSMITH', $language);
		} 
		if ($result["combineskill"] == 'convert') {
			$craftcombineskill = translate('STR_CONVERT', $language);
		} 
		if ($result["combineskill"] == 'cooking') {
			$craftcombineskill = translate('STR_COOKING', $language);
		} 
		if ($result["combineskill"] == 'handiwork') {
			$craftcombineskill = translate('STR_HANDIWORK', $language);
		} 
		if ($result["combineskill"] == 'menuisier') {
			$craftcombineskill = translate('STR_MENUISIER', $language);
		} 
		if ($result["combineskill"] == 'weaponsmith') {
			$craftcombineskill = translate('STR_WEAPONSMITH', $language);
		} 
		if ($result["combineskill"] == 'highcraft') {
			$craftcombineskill = translate('STR_HIGHCRAFT', $language);
		} 
		
		
		
		if (strtolower($result["qualification_race"]) == 'pc_light'){
			$craftqualification_race = ' <span class="pc_light" title="' . translate('STR_TOOLTIP_PC_LIGHT', $language) . '"></span>';
		}
		if (strtolower($result["qualification_race"]) == 'pc_dark'){
			$craftqualification_race = ' <span class="pc_dark" title="' . translate('STR_TOOLTIP_PC_DARK', $language) . '"></span>';
		}
		if (strtolower($result["qualification_race"]) == 'all'){
			$craftqualification_race = ' <span class="pc_light"></span> <span class="pc_dark"></span>';
		}
		
		
		
		
		$craftcomponent_quantity  = $result["component_quantity"];
		$craftcomponent_quantity1  = $result["component_quantity1"];
		$craftcomponent11 = extraitem($result["component11"], $language);
		$craftcomponent21 = extraitem($result["component21"], $language);
		$craftcomponent31 = extraitem($result["component31"], $language);
		$craftcomponent41 = extraitem($result["component41"], $language);
		$craftcomponent51 = extraitem($result["component51"], $language);
		$craftcomponent61 = extraitem($result["component61"], $language);
		$craftcomponent71 = extraitem($result["component71"], $language);
		$craftcomponent81 = extraitem($result["component81"], $language);
		$craftcompo1_quantity1 = $result["compo1_quantity1"];
		$craftcompo2_quantity1 = $result["compo2_quantity1"];
		$craftcompo3_quantity1 = $result["compo3_quantity1"];
		$craftcompo4_quantity1 = $result["compo4_quantity1"];
		$craftcompo5_quantity1 = $result["compo5_quantity1"];
		$craftcompo6_quantity1 = $result["compo6_quantity1"];
		$craftcompo7_quantity1 = $result["compo7_quantity1"];
		$craftcompo8_quantity1 = $result["compo8_quantity1"];
		
		$craftcomponent12 = extraitem($result["component12"], $language);
		$craftcomponent22 = extraitem($result["component22"], $language);
		$craftcomponent32 = extraitem($result["component32"], $language);
		$craftcomponent42 = extraitem($result["component42"], $language);
		$craftcomponent52 = extraitem($result["component52"], $language);
		$craftcomponent62 = extraitem($result["component62"], $language);
		$craftcomponent72 = extraitem($result["component72"], $language);
		$craftcomponent82 = extraitem($result["component82"], $language);
		$craftcompo1_quantity2 = $result["compo1_quantity2"];
		$craftcompo2_quantity2 = $result["compo2_quantity2"];
		$craftcompo3_quantity2 = $result["compo3_quantity2"];
		$craftcompo4_quantity2 = $result["compo4_quantity2"];
		$craftcompo5_quantity2 = $result["compo5_quantity2"];
		$craftcompo6_quantity2 = $result["compo6_quantity2"];
		$craftcompo7_quantity2 = $result["compo7_quantity2"];
		$craftcompo8_quantity2 = $result["compo8_quantity2"];
		
		$craftcomponent13 = extraitem($result["component13"], $language);
		$craftcomponent23 = extraitem($result["component23"], $language);
		$craftcomponent33 = extraitem($result["component33"], $language);
		$craftcomponent43 = extraitem($result["component43"], $language);
		$craftcomponent53 = extraitem($result["component53"], $language);
		$craftcomponent63 = extraitem($result["component63"], $language);
		$craftcomponent73 = extraitem($result["component73"], $language);
		$craftcomponent83 = extraitem($result["component83"], $language);
		$craftcompo1_quantity3 = $result["compo1_quantity3"];
		$craftcompo2_quantity3 = $result["compo2_quantity3"];
		$craftcompo3_quantity3 = $result["compo3_quantity3"];
		$craftcompo4_quantity3 = $result["compo4_quantity3"];
		$craftcompo5_quantity3 = $result["compo5_quantity3"];
		$craftcompo6_quantity3 = $result["compo6_quantity3"];
		$craftcompo7_quantity3 = $result["compo7_quantity3"];
		$craftcompo8_quantity3 = $result["compo8_quantity3"];
		
		$craftcomponent14 = extraitem($result["component14"], $language);
		$craftcomponent24 = extraitem($result["component24"], $language);
		$craftcomponent34 = extraitem($result["component34"], $language);
		$craftcomponent44 = extraitem($result["component44"], $language);
		$craftcomponent54 = extraitem($result["component54"], $language);
		$craftcomponent64 = extraitem($result["component64"], $language);
		$craftcomponent74 = extraitem($result["component74"], $language);
		$craftcomponent84 = extraitem($result["component84"], $language);
		$craftcompo1_quantity4 = $result["compo1_quantity4"];
		$craftcompo2_quantity4 = $result["compo2_quantity4"];
		$craftcompo3_quantity4 = $result["compo3_quantity4"];
		$craftcompo4_quantity4 = $result["compo4_quantity4"];
		$craftcompo5_quantity4 = $result["compo5_quantity4"];
		$craftcompo6_quantity4 = $result["compo6_quantity4"];
		$craftcompo7_quantity4 = $result["compo7_quantity4"];
		$craftcompo8_quantity4 = $result["compo8_quantity4"];
	
	
		$craft = '<br><div class="hbody"><div class="objects object_craft_recipe expand_on"><div class="head"><dl><dt>Production</dt><dd><p>' . extraitem($craftproduct, $language) . ' (' . $product_quantity . ')</p>';
		if ($craftcombo1_product != NULL){
		$craft .= '<p> ' . extraitem($craftcombo1_product, $language) . '  (' . translate("STR_TOOLTIP_RECIPE_OUTPUT_COMBO", $language) . ')</p>';
		}
		if ($craftcombo2_product != NULL){
		$craft .= '<p> ' . extraitem($craftcombo2_product, $language) . '  (' . translate("STR_TOOLTIP_RECIPE_OUTPUT_COMBO", $language) . ')</p>';
		}
		$craft .= '</dd></dl></div>';
		$craft .= '<div class="wrap craft_condition"><dl><dt>' . translate("STR_PLAYER_INFO_DIALOG__SKILL", $language) . '</dt><dd><p>' . $craftqualification_race . $craftcombineskill . ' (' . $craftrequired_skillpoint . ')</p></dd></dl></div>';
		
		$craft .='<div class="wrap craft_material">';
		
		$craft .= '<dl class="material"><dt>Method 1</dt><dd>';
		
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
			$craft .= '<dl class="material_ext"><dt>Method 2</dt><dd>';
		
		
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
			$craft .= '<dl class="material_ext"><dt>Method 3</dt><dd>';
		
		
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
			$craft .= '<dl class="material_ext"><dt>Method 4</dt><dd>';
		
		
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
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	return $craft;
}