<?php



function evolution($name, $language, $type)
{
	
	
$eqEvolution = '';
	
if ($type == '1'){
	$where = "WHERE name = '$name'";
	
}else {
	$where = "WHERE upgrade_item = '$name' or upgrade_item1 = '$name' ";
	$obtainedfrom = 'Obtainable from ';
}


    include 'DBselect.php';
    $sql = $db->query("
SELECT *
FROM client_item_upgrade
" . $where)->fetchAll();




    foreach ($sql as $result) {
		$evolutionname = $result["name"];	
		$upgrade_item = $result["upgrade_item"];
		$upgrade_item1 = $result["upgrade_item1"];
		$sub_material_item11 = $result["sub_material_item11"];
		$sub_material_item21 = $result["sub_material_item21"];
		$sub_material_item31 = $result["sub_material_item31"];
		$sub_material_item41 = $result["sub_material_item41"];
		$sub_material_item51 = $result["sub_material_item51"];
		$sub_material_item_count11 = $result["sub_material_item_count11"];
		$sub_material_item_count21 = $result["sub_material_item_count21"];
		$sub_material_item_count31 = $result["sub_material_item_count31"];
		$sub_material_item_count41 = $result["sub_material_item_count41"];
		$sub_material_item_count51 = $result["sub_material_item_count51"];
		$need_qina1 = number_format($result["need_qina1"]);
		$need_abyss_point1 = number_format($result["need_abyss_point1"]);
		$check_enchant_count1 = $result["check_enchant_count1"];
		$check_authorize_count1 = $result["check_authorize_count1"];
		
		$sub_material_item12 = $result["sub_material_item12"];
		$sub_material_item22 = $result["sub_material_item22"];
		$sub_material_item32 = $result["sub_material_item32"];
		$sub_material_item42 = $result["sub_material_item42"];
		$sub_material_item52 = $result["sub_material_item52"];
		$sub_material_item_count12 = $result["sub_material_item_count12"];
		$sub_material_item_count22 = $result["sub_material_item_count22"];
		$sub_material_item_count32 = $result["sub_material_item_count32"];
		$sub_material_item_count42 = $result["sub_material_item_count42"];
		$sub_material_item_count52 = $result["sub_material_item_count52"];
		$need_qina2 = number_format($result["need_qina2"]);
		$need_abyss_point2 = number_format($result["need_abyss_point2"]);
		$check_enchant_count2 = $result["check_enchant_count2"];
		$check_authorize_count2 = $result["check_authorize_count2"];
		
		
		
		if ($upgrade_item != NULL) {

			$eqEvolution .= '<div class="wrap item_upgrade" style=""><dl class="item_upgrade"><dt class="item_upgrade">' . $obtainedfrom . translate('STR_TRADE_DIALOG__UPGRADE_ITEM_TITLE', $language) . '</dt><dd class="item_upgrade">';
			
			if ($type == '2' and $upgrade_item != $name) {
				$eqEvolution .= '';
			}else {
			// evolved item //
			$eqEvolution .= extraitem($upgrade_item, $language) . '<br>';
			if ($sub_material_item11 != NULL) {
			$eqEvolution .= '<span class="treelist"></span>' . extraitem($sub_material_item11, $language) . ' ' . $sub_material_item_count11 . '<br>';
			}
			if ($sub_material_item21 != NULL) {
			$eqEvolution .= '<span class="treelist"></span>' . extraitem($sub_material_item21, $language) . ' ' . $sub_material_item_count21 . '<br>';
			}
			if ($sub_material_item31 != NULL) {
			$eqEvolution .= '<span class="treelist"></span>' . extraitem($sub_material_item31, $language) . ' ' . $sub_material_item_count31 . '<br>';
			}
			if ($sub_material_item41 != NULL) {
			$eqEvolution .= '<span class="treelist"></span>' . extraitem($sub_material_item41, $language) . ' ' . $sub_material_item_count41 . '<br>';
			}
			if ($sub_material_item51 != NULL) {
			$eqEvolution .= '<span class="treelist"></span>' . extraitem($sub_material_item51, $language) . ' ' . $sub_material_item_count51 . '<br>';
			}
			//		if needs kinah		//
			if ($need_qina1 > 0) {
			$eqEvolution .= '<span class="treelist"></span>' . extraitem('gold', $language) . ' ' . $need_qina1 . '<br>';
			}
			//		if need AP		//
			if ($need_abyss_point1 != NULL & $need_abyss_point1 > 0) {
			$eqEvolution .= '<span class="treelist"></span><img src="https://aionpowerbook.com/images/abysspoint.png" alt="" class="thumb3"> <a href="Abyss Points">' . translate('STR_ABYSS_POINT', $language) . '</a> ' . $need_abyss_point1 . '<br>';
			}
			//		if need enchantment level		//
			if ($check_enchant_count1 >= NULL or $check_authorize_count1 != NULL) {
				
				if ($check_enchant_count1 == $check_authorize_count1) {
					$enchantnumber = $check_enchant_count1;
				}elseif ($check_enchant_count1 > $check_authorize_count1) {
					$enchantnumber = $check_enchant_count1;
				}elseif ($check_enchant_count1 < $check_authorize_count1) {
					$enchantnumber = $check_authorize_count1;
				}else {
					$enchantnumber = 'error_evolution_1';
				}
				
			$eqEvolution .= '<span class="treelist_end"></span>' . extraitem($evolutionname, $language) . ' (+' . $enchantnumber . ')<br>';
			}
			
			}
			
			
			
			// 2nd tree //
			if ($type == '2' and $upgrade_item1 != $name) {
				$eqEvolution .= '';
			}
			elseif ($upgrade_item1 != NULL ) {
				
			$eqEvolution .= '<br><br>' . extraitem($upgrade_item1, $language) . '<br>';
			if ($sub_material_item12 != NULL) {
			$eqEvolution .= '<span class="treelist"></span>' . extraitem($sub_material_item12, $language) . ' ' . $sub_material_item_count12 . '<br>';
			}
			if ($sub_material_item22 != NULL) {
			$eqEvolution .= '<span class="treelist"></span>' . extraitem($sub_material_item22, $language) . ' ' . $sub_material_item_count22 . '<br>';
			}
			if ($sub_material_item32 != NULL) {
			$eqEvolution .= '<span class="treelist"></span>' . extraitem($sub_material_item32, $language) . ' ' . $sub_material_item_count32 . '<br>';
			}
			if ($sub_material_item42 != NULL) {
			$eqEvolution .= '<span class="treelist"></span>' . extraitem($sub_material_item42, $language) . ' ' . $sub_material_item_count42 . '<br>';
			}
			if ($sub_material_item52 != NULL) {
			$eqEvolution .= '<span class="treelist"></span>' . extraitem($sub_material_item52, $language) . ' ' . $sub_material_item_count52 . '<br>';
			}
			//		if needs kinah		//
			if ($need_qina2 > 0) {
			$eqEvolution .= '<span class="treelist"></span>' . extraitem('gold', $language) . ' ' . $need_qina2 . '<br>';
			}
			//		if need AP		//
			if ($need_abyss_point2 != NULL & $need_abyss_point2 > 0) {
			$eqEvolution .= '<span class="treelist"></span><img src="https://aionpowerbook.com/images/abysspoint.png" alt="" class="thumb3"> <a href="Abyss Points">' . translate('STR_ABYSS_POINT', $language) . '</a> ' . $need_abyss_point2 . '<br>';
			}
				
			if ($check_enchant_count2 >= NULL or $check_authorize_count2 != NULL) {
				
				if ($check_enchant_count2 == $check_authorize_count2) {
					$enchantnumber = $check_enchant_count2;
				}elseif ($check_enchant_count2 > $check_authorize_count2) {
					$enchantnumber = $check_enchant_count2;
				}elseif ($check_enchant_count2 < $check_authorize_count2) {
					$enchantnumber = $check_authorize_count2;
				}else {
					$enchantnumber = 'error_evolution_2';
				}
				
			$eqEvolution .= '<span class="treelist_end"></span>' . extraitem($evolutionname, $language) . ' (+' . $enchantnumber . ')<br>';
			}
				
				
				
				
			}
		
			
			
			
			$eqEvolution .= '</dd></dl></div>';
			
		}else {
			$eqEvolution = '';
		}	
		
	}
	
	$randomStats = '';
	$randomStats_end = '';
	if ($type == '2' and $evolutionname != NULL) {
		$randomStats = '<br><div class="" style=""><p class="UpgradeTree" >&nbsp;&nbsp;<img src="https://aionpowerbook.com/pbimg/random1.png" class="thumb3"> Reverse Upgrade (Click)</p><div class="UpgradeTreeDetails" style="display:none">';
		$randomStats_end = '</div></div>';
	}
	return $randomStats . $eqEvolution . $randomStats_end;
}