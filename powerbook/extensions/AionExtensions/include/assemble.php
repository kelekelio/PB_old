<?php



function assemblelist($name, $language) {

    include 'DBselect.php';

    $result = $db->query('
SELECT * 
FROM client_assembly_items 
WHERE part_item = "' . $name . '" or part_item1 = "' . $name . '" or part_item2 = "' . $name . '" or part_item3 = "' . $name . '" or part_item4 = "' . $name . '" or part_item5 = "' . $name . '" 
LIMIT 0,1  ', $name)->fetchArray();

	if ($result["name"] != NULL) {
			$assembleList = '<div class="wrap item_upgrade" style=""><dl class="item_upgrade"><dt>Assemble</dt><dd class="item_upgrade">';
			
			
			// evolved item //
			$assembleList .= extraitem($result["name"], $language) . '<br>';
			if ($result["part_item"] != NULL) {
				if ($result["part_item1"] == NULL) {
					$end1 = '_end';
				}
			$assembleList .= '<span class="treelist'.$end1.'"></span>' . extraitem($result["part_item"], $language) . ' ' . $result["part_item_num1"] . '<br>';
			}
			if ($result["part_item1"] != NULL) {
				if ($result["part_item2"] == NULL) {
					$end2 = '_end';
				}
			$assembleList .= '<span class="treelist'.$end2.'"></span>' . extraitem($result["part_item1"], $language) . ' ' . $result["part_item_num2"] . '<br>';
			}
			if ($result["part_item2"] != NULL) {
				if ($result["part_item3"] == NULL) {
					$end3 = '_end';
				}
			$assembleList .= '<span class="treelist'.$end3.'"></span>' . extraitem($result["part_item2"], $language) . ' ' . $result["part_item_num3"] . '<br>';
			}
			if ($result["part_item3"] != NULL) {
				if ($result["part_item4"] == NULL) {
					$end4 = '_end';
				}
			$assembleList .= '<span class="treelist'.$end4.'"></span>' . extraitem($result["part_item3"], $language) . ' ' . $result["part_item_num4"] . '<br>';
			}
			if ($result["part_item4"] != NULL) {
				if ($result["part_item5"] == NULL) {
					$end5 = '_end';
				}
			$assembleList .= '<span class="treelist'.$end5.'"></span>' . extraitem($result["part_item4"], $language) . ' ' . $result["part_item_num5"] . '<br>';
			}
			if ($result["part_item5"] != NULL) {
			$assembleList .= '<span class="treelist_end"></span>' . extraitem($result["part_item5"], $language) . ' ' . $result["part_item_num6"] . '<br>';
			}
			$assembleList .= '</dd></dl></div>';
		}
	
	
	
	
	
	
	return $assembleList;
}