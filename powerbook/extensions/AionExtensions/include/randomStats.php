<?php



function randomStats($name, $language, $type)
{
    include 'DBselect.php';
    $result = $db->query("
SELECT *
FROM $type
WHERE name = '$name'
", $name)->fetchArray();

	
	$testid = $result["id"];
	
	
	if ($type == 'client_item_random_option'){
	$randomStats = '<div class="wrap weapon_property_bonus" style=""><p class="randombonuses" ><img src="https://aionpowerbook.com/pbimg/random1.png" class="thumb3"> Random Bonuses (Click)</p><div class="randombonusesdetails" style="display:none">';
	}else {
		$randomStats = '<div class="wrap weapon_property_bonus" style=""><p class="randombonuses" ><img src="https://aionpowerbook.com/pbimg/random1.png" class="thumb3"> Random Bonuses (Click)</p><div class="randombonusesdetails" style="">';
	}

if ($testid != NULL) {
	
include 'maptemplate.php';	

		 $randomattributeHtml1 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+1$/', $fieldName)) {
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

        if (!empty($randomattributeHtml1)) {
            $randomStats .= '<p>' . ($result["prob1"]/100) . '%<br><dl>' . $randomattributeHtml1 . '</dl></p>';
        }
		
		$randomattributeHtml2 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+2$/', $fieldName)) {
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

        if (!empty($randomattributeHtml2)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob2"]/100) . '%<br><dl>' . $randomattributeHtml2 . '</dl></p>';
        }
		
		$randomattributeHtml3 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+3$/', $fieldName)) {
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

        if (!empty($randomattributeHtml3)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob3"]/100) . '%<br><dl>' . $randomattributeHtml3 . '</dl></p>';
        }
		
		
		
		
		
		$randomattributeHtml4 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+4$/', $fieldName)) {
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

        if (!empty($randomattributeHtml4)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob4"]/100) . '%<br><dl>' . $randomattributeHtml4 . '</dl></p>';
        }		
		
		
		
		$randomattributeHtml5 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+5$/', $fieldName)) {
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

        if (!empty($randomattributeHtml5)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob5"]/100) . '%<br><dl>' . $randomattributeHtml5 . '</dl></p>';
        }		
		
		
		
		
		$randomattributeHtml6 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+6$/', $fieldName)) {
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

        if (!empty($randomattributeHtml6)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob6"]/100) . '%<br><dl>' . $randomattributeHtml6 . '</dl></p>';
        }		
		
		
		$randomattributeHtml7 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+7$/', $fieldName)) {
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

        if (!empty($randomattributeHtml7)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob7"]/100) . '%<br><dl>' . $randomattributeHtml7 . '</dl></p>';
        }		
		
		
		$randomattributeHtml8 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+8$/', $fieldName)) {
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

        if (!empty($randomattributeHtml8)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob8"]/100) . '%<br><dl>' . $randomattributeHtml8 . '</dl></p>';
        }		
		
		$randomattributeHtml9 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+9$/', $fieldName)) {
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

        if (!empty($randomattributeHtml9)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob9"]/100) . '%<br><dl>' . $randomattributeHtml9 . '</dl></p>';
        }		
		
		$randomattributeHtml10 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+10$/', $fieldName)) {
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

        if (!empty($randomattributeHtml10)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob10"]/100) . '%<br><dl>' . $randomattributeHtml10 . '</dl></p>';
        }

		
		
		
		$randomattributeHtml11 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+11$/', $fieldName)) {
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

        if (!empty($randomattributeHtml11)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob11"]/100) . '%<br><dl>' . $randomattributeHtml11 . '</dl></p>';
        }
		
		
		$randomattributeHtml12 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+12$/', $fieldName)) {
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

        if (!empty($randomattributeHtml12)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob12"]/100) . '%<br><dl>' . $randomattributeHtml12 . '</dl></p>';
        }
		
		$randomattributeHtml13 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+13$/', $fieldName)) {
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

        if (!empty($randomattributeHtml13)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob13"]/100) . '%<br><dl>' . $randomattributeHtml13 . '</dl></p>';
        }
		
		$randomattributeHtml14 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+14$/', $fieldName)) {
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

        if (!empty($randomattributeHtml14)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob14"]/100) . '%<br><dl>' . $randomattributeHtml14 . '</dl></p>';
        }
		
		$randomattributeHtml15 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+15$/', $fieldName)) {
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

        if (!empty($randomattributeHtml15)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob15"]/100) . '%<br><dl>' . $randomattributeHtml15 . '</dl></p>';
        }
		
		$randomattributeHtml16 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+16$/', $fieldName)) {
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

        if (!empty($randomattributeHtml16)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob16"]/100) . '%<br><dl>' . $randomattributeHtml16 . '</dl></p>';
        }
		
		$randomattributeHtml17 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+17$/', $fieldName)) {
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

        if (!empty($randomattributeHtml17)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob17"]/100) . '%<br><dl>' . $randomattributeHtml17 . '</dl></p>';
        }
		
		$randomattributeHtml18 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+18$/', $fieldName)) {
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

        if (!empty($randomattributeHtml18)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob18"]/100) . '%<br><dl>' . $randomattributeHtml18 . '</dl></p>';
        }
		
		$randomattributeHtml19 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+19$/', $fieldName)) {
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

        if (!empty($randomattributeHtml19)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob19"]/100) . '%<br><dl>' . $randomattributeHtml19 . '</dl></p>';
        }
		
		
		$randomattributeHtml20 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+20$/', $fieldName)) {
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

        if (!empty($randomattributeHtml20)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob20"]/100) . '%<br><dl>' . $randomattributeHtml20 . '</dl></p>';
        }
		
		$randomattributeHtml21 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+21$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml21 .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($randomattributeHtml21)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob21"]/100) . '%<br><dl>' . $randomattributeHtml21 . '</dl></p>';
        }
		
		$randomattributeHtml22 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+22$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml22 .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($randomattributeHtml22)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob22"]/100) . '%<br><dl>' . $randomattributeHtml22 . '</dl></p>';
        }
		
		$randomattributeHtml23 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+23$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml23 .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($randomattributeHtml23)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob23"]/100) . '%<br><dl>' . $randomattributeHtml23 . '</dl></p>';
        }
		
		$randomattributeHtml24 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+24$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml24 .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($randomattributeHtml24)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob24"]/100) . '%<br><dl>' . $randomattributeHtml24 . '</dl></p>';
        }
		
		$randomattributeHtml25 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+25$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml25 .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($randomattributeHtml25)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob25"]/100) . '%<br><dl>' . $randomattributeHtml25 . '</dl></p>';
        }
		
		$randomattributeHtml26 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+26$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml26 .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($randomattributeHtml26)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob26"]/100) . '%<br><dl>' . $randomattributeHtml26 . '</dl></p>';
        }
		
		$randomattributeHtml27 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+27$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml27 .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($randomattributeHtml27)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob27"]/100) . '%<br><dl>' . $randomattributeHtml27 . '</dl></p>';
        }
		
		$randomattributeHtml28 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+28$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml28 .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($randomattributeHtml28)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob28"]/100) . '%<br><dl>' . $randomattributeHtml28 . '</dl></p>';
        }
		
		$randomattributeHtml29 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+29$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml29 .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($randomattributeHtml29)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob29"]/100) . '%<br><dl>' . $randomattributeHtml29 . '</dl></p>';
        }
		
		$randomattributeHtml30 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+30$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml30 .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($randomattributeHtml30)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob30"]/100) . '%<br><dl>' . $randomattributeHtml30 . '</dl></p>';
        }
		
		$randomattributeHtml31 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+31$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml31 .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($randomattributeHtml31)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob31"]/100) . '%<br><dl>' . $randomattributeHtml31 . '</dl></p>';
        }
		
		$randomattributeHtml32 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+32$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml32 .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($randomattributeHtml32)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob32"]/100) . '%<br><dl>' . $randomattributeHtml32 . '</dl></p>';
        }
		
		$randomattributeHtml33 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+33$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml33 .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($randomattributeHtml33)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob33"]/100) . '%<br><dl>' . $randomattributeHtml33 . '</dl></p>';
        }
		
		$randomattributeHtml34 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+34$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml34 .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($randomattributeHtml34)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob34"]/100) . '%<br><dl>' . $randomattributeHtml34 . '</dl></p>';
        }
		
		$randomattributeHtml35 = '';
		 
        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^random_attr[0-9]{1}+35$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $randomattributeHtml35 .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($randomattributeHtml35)) {
            $randomStats .= '<div class="cl"></div><br><p>' . ($result["prob35"]/100) . '%<br><dl>' . $randomattributeHtml35 . '</dl></p>';
        }
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

	$randomStats .= '</div> </div>';
			

	
	
	$randomStatsfixed = strtr($randomStats, array(
		"+-" => '-',
		));
	
	
	
	return $randomStatsfixed;
	}else {
		return 'error. Check randomStats';
	}
}