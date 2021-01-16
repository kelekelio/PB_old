<?php

function TranslateStatNames($stat, $language, $range) {

	$fieldValue = $stat;
    $attributeHtml = '';
    
    if ($range != NULL) {
        $upTo = ' ~ ' . $range;
    }

	$template = '<span %s>%s&nbsp;%s%s ' . $upTo . '</span>';


	include 'statmap.php';


	list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

	if (!isset($statMap[$attributeName])) {
		// not in $statMap, skip it
		return $stat;
	}else {
		$attributeHtml = $statMap[$attributeName]($attributeValue);
		return $attributeHtml;
	}


}

function TranslateStatNamesOriginalTamplate($stat, $language) {

    $fieldValue = $stat;
    $attributeHtml = '';



    $template = '<dt><a href="https://aionpowerbook.com/powerbook/%s">%s</a></dt><dd>&nbsp;%s%s</dd>';


    include 'statmap.php';


    list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

    if (!isset($statMap[$attributeName])) {
        // not in $statMap, skip it
        return $stat;
    }else {
        $attributeHtml = $statMap[$attributeName]($attributeValue);
        return $attributeHtml;
    }


}


function enchant_datadriven($type, $level, $target_item_quality)
{

if 	($type == 'destruction') {
	$name = 'enchant_destruction_Finality';

	
$query = "
SELECT *
FROM enchant_datadriven
WHERE name = '$name'
";

$query  = mysql_query($query) or die(mysql_error());
$result = mysql_fetch_assoc($query);


$id = $result["id"];
$enchant_prob = $result["enchant_prob" . $level]/10 . '%';
$sp_enchant_penalty_prob = $result["sp_enchant_penalty_prob" . $level]/10 . '%';


return '&nbsp;&nbsp;( ' . $enchant_prob . ' | <font color=\'red\'>' . $sp_enchant_penalty_prob . '</font> ) ';

}
elseif($type == 'grind'){
    $name = 'enchant_contamination_Ancient1';
    $query = "SELECT * FROM enchant_datadriven WHERE name = '$name' ";
    $query  = mysql_query($query) or die(mysql_error());
    $result = mysql_fetch_assoc($query);


$id = $result["id"];
$enchant_prob = $result["enchant_prob" . $level]/10 . '%';
$sp_enchant_penalty_prob = $result["sp_enchant_penalty_prob" . $level]/10 . '%';


return ' ' . $enchant_prob;





}
else {
	
	return '';
}
	
}


function enchantbonus($name, $language, $type, $driven_enchant_type, $quality)
{

if ($type == 'client_item_enchanttable_emblem') {


    $query = "
    SELECT *
    FROM $type
    WHERE name = '$name'
    ";
    
        $query  = mysql_query($query) or die(mysql_error());
        $result = mysql_fetch_assoc($query);
        
        $testid = $result["id"];

        $enchantbonus = '';
        for($x=1; $x <= 5; $x++){
            $enchantbonus .= '<p>' . TranslateStatNames(strtolower($result['attr_name' . $x]) . ' ' . $result['attr_value' . $x], $language, $result['random_range' . $x]) . '</p>';
        }


        return $enchantbonus;



}else {

$query = "
SELECT *
FROM $type
WHERE name = '$name'
";

    $query  = mysql_query($query) or die(mysql_error());
    $result = mysql_fetch_assoc($query);
	
	$testid = $result["id"];
	
	

	
	

if ($testid != NULL) {
	
include 'maptemplateSimpleEnchant.php';	

		 $randomattributeHtml1 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^attr[0-9]{1}+1$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml1 .= $statMap[$attributeName]($attributeValue);
        }

		if ($driven_enchant_type == 'destruction') {
			$enchantbonus .= '<p>Penalty: Destruction</p>';
		}elseif ($driven_enchant_type == 'pve' or $driven_enchant_type == 'pvp') {
			$enchantbonus .= '<p>Penalty: -1 Level, +2 Bonus: 10% </p>';
		}elseif ($driven_enchant_type == 'grind') {
			$enchantbonus .= '<p>(>L4) Penalty: -1 Level, Contamination: 10% </p>';
		}
		
		
		
		
			$probability = enchant_datadriven($driven_enchant_type, '', $quality );
            $enchantbonus .= '<p>&nbsp;+1: ' . $randomattributeHtml1 . $probability . '</p>';
		
		$randomattributeHtml2 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^attr[0-9]{1}+2$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml2 .= $statMap[$attributeName]($attributeValue);
        }

			$probability1 = enchant_datadriven($driven_enchant_type, '1', $quality);
            $enchantbonus .= '<p>&nbsp;+2: ' . $randomattributeHtml2 . $probability1 . '</p>';
        
		
		$randomattributeHtml3 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^attr[0-9]{1}+3$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml3 .= $statMap[$attributeName]($attributeValue);
        }

        $probability2 = enchant_datadriven($driven_enchant_type, '2', $quality);
            $enchantbonus .= '<p>&nbsp;+3: ' . $randomattributeHtml3 . $probability2 . '</p>';
        
		
		
		
		
		
		$randomattributeHtml4 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^attr[0-9]{1}+4$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml4 .= $statMap[$attributeName]($attributeValue);
        }

			$probability3 = enchant_datadriven($driven_enchant_type, '3', $quality);
            $enchantbonus .= '<p>&nbsp;+4: ' . $randomattributeHtml4 . $probability3 . '</p>';

		
		
		
		$randomattributeHtml5 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^attr[0-9]{1}+5$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml5 .= $statMap[$attributeName]($attributeValue);
        }

        	$probability4 = enchant_datadriven($driven_enchant_type, '4', $quality);
            $enchantbonus .= '<p>&nbsp;+5: ' . $randomattributeHtml5 . $probability4 . '</p>';
        
		
		
		
		
		$randomattributeHtml6 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^attr[0-9]{1}+6$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml6 .= $statMap[$attributeName]($attributeValue);
        }

        	$probability5 = enchant_datadriven($driven_enchant_type, '5', $quality);
            $enchantbonus .= '<p>&nbsp;+6: ' . $randomattributeHtml6 . $probability5 . '</p>';
        
		
		
		$randomattributeHtml7 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^attr[0-9]{1}+7$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml7 .= $statMap[$attributeName]($attributeValue);
        }

			$probability6 = enchant_datadriven($driven_enchant_type, '6', $quality);
            $enchantbonus .= '<p>&nbsp;+7: ' . $randomattributeHtml7 . $probability6 . '</p>';
        
		
		
		$randomattributeHtml8 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^attr[0-9]{1}+8$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml8 .= $statMap[$attributeName]($attributeValue);
        }

			$probability7 = enchant_datadriven($driven_enchant_type, '7', $quality);
            $enchantbonus .= '<p>&nbsp;+8: ' . $randomattributeHtml8 . $probability7 . '</p>';
        	
		
		$randomattributeHtml9 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^attr[0-9]{1}+9$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml9 .= $statMap[$attributeName]($attributeValue);
        }

			$probability8 = enchant_datadriven($driven_enchant_type, '8', $quality);
            $enchantbonus .= '<p>&nbsp;+9: ' . $randomattributeHtml9 . $probability8 . '</p>';
        	
		
		$randomattributeHtml10 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^attr[0-9]{1}+10$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml10 .= $statMap[$attributeName]($attributeValue);
        }

			$probability9 = enchant_datadriven($driven_enchant_type, '9', $quality);
            $enchantbonus .= '<p>+10: ' . $randomattributeHtml10 . $probability9 . '</p>';
        

		
		
		
		$randomattributeHtml11 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^attr[0-9]{1}+11$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml11 .= $statMap[$attributeName]($attributeValue);
        }

			$probability10 = enchant_datadriven($driven_enchant_type, '10', $quality);
            $enchantbonus .= '<p>+11: ' . $randomattributeHtml11 . $probability10 . '</p>';
        
		
		
		$randomattributeHtml12 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^attr[0-9]{1}+12$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml12 .= $statMap[$attributeName]($attributeValue);
        }

        	$probability11 = enchant_datadriven($driven_enchant_type, '11', $quality);
            $enchantbonus .= '<p>+12: ' . $randomattributeHtml12 . $probability11 . '</p>';
        
		
		$randomattributeHtml13 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^attr[0-9]{1}+13$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml13 .= $statMap[$attributeName]($attributeValue);
        }

        	$probability12 = enchant_datadriven($driven_enchant_type, '12', $quality);
            $enchantbonus .= '<p>+13: ' . $randomattributeHtml13 . $probability12 . '</p>';
        
		
		$randomattributeHtml14 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^attr[0-9]{1}+14$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml14 .= $statMap[$attributeName]($attributeValue);
        }

			$probability13 = enchant_datadriven($driven_enchant_type, '13', $quality);
            $enchantbonus .= '<p>+14: ' . $randomattributeHtml14 . $probability13 . '</p>';
        
		
		$randomattributeHtml15 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^attr[0-9]{1}+15$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml15 .= $statMap[$attributeName]($attributeValue);
        }

        	$probability14 = enchant_datadriven($driven_enchant_type, '14', $quality);
            $enchantbonus .= '<p>+15: ' . $randomattributeHtml15 . $probability14 . '</p>';
        
		
$randomattributeHtml16 = '';
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^attr[0-9]{1}+16$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml16 .= $statMap[$attributeName]($attributeValue);
        }

        if (($randomattributeHtml16 != NULL and $driven_enchant_type != 'destruction') or $driven_enchant_type == 'grind') {
			$probability15 = enchant_datadriven($driven_enchant_type, '15', $quality);
            $enchantbonus .= '<p>+16: ' . $randomattributeHtml16 . $probability15 . '</p>';
		}
		
$randomattributeHtml17 = '';
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^attr[0-9]{1}+17$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml17 .= $statMap[$attributeName]($attributeValue);
        }

        if (($randomattributeHtml17 != NULL and $driven_enchant_type != 'destruction') or $driven_enchant_type == 'grind' ) {
			$probability16 = enchant_datadriven($driven_enchant_type, '16', $quality);
            $enchantbonus .= '<p>+17: ' . $randomattributeHtml17 . $probability16 . '</p>';
		}
		
$randomattributeHtml18 = '';
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^attr[0-9]{1}+18$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml18 .= $statMap[$attributeName]($attributeValue);
        }

        if (($randomattributeHtml18 != NULL and $driven_enchant_type != 'destruction')  or $driven_enchant_type == 'grind' ) {
			$probability17 = enchant_datadriven($driven_enchant_type, '17', $quality);
            $enchantbonus .= '<p>+18: ' . $randomattributeHtml18 . $probability17 . '</p>';
		}


		
			
$randomattributeHtml19 = '';
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^attr[0-9]{1}+19$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml19 .= $statMap[$attributeName]($attributeValue);
        }

        if (($randomattributeHtml19 != NULL and $driven_enchant_type != 'destruction') or $driven_enchant_type == 'grind' ) {
			$probability18 = enchant_datadriven($driven_enchant_type, '18', $quality);
            $enchantbonus .= '<p>+19: ' . $randomattributeHtml19 . $probability18 . '</p>';
		}
			
		
		
		$randomattributeHtml20 = '';
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^attr[0-9]{1}+20$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml20 .= $statMap[$attributeName]($attributeValue);
        }

        if ( ($randomattributeHtml20 != NULL and $driven_enchant_type != 'destruction') or $driven_enchant_type == 'grind') {
			$probability19 = enchant_datadriven($driven_enchant_type, '19', $quality);
            $enchantbonus .= '<p>+20: ' . $randomattributeHtml20 . $probability19 . '</p>';
		}
		
		
		
		

	
	
	$randomStatsfixed = strtr($enchantbonus, array(
		"+-" => '-',
		));
	
	
	
	return $randomStatsfixed;
	}else {
		return 'error. Check enchanttable';
    }
}
}