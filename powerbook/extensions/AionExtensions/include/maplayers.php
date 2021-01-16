<?php 



if ($location == '301550000') { // garden of knowledge
			if ($row["coo3"] < 800) {
				$spotsarray[$location.'_1'][] = '{|o|:|a1|,|x|:|'.$row["coo1"].'|,|y|:|'.$row["coo2"].'|,|z|:|'.$row["coo3"].'|}';
				$layer = '_1';
			}elseif ($row["coo3"] > 800) {
				$spotsarray[$location.'_2'][] = '{|o|:|a1|,|x|:|'.$row["coo1"].'|,|y|:|'.$row["coo2"].'|,|z|:|'.$row["coo3"].'|}';
				$layer = '_2';
			}
}elseif ($location == '302510000') { // Seneketa
			if ($row["coo3"] < 200) {
				$spotsarray[$location.'_1'][] = '{|o|:|a1|,|x|:|'.$row["coo1"].'|,|y|:|'.$row["coo2"].'|,|z|:|'.$row["coo3"].'|}';
				$layer = '_1';
			}elseif ($row["coo3"] > 200) {
				$spotsarray[$location.'_2'][] = '{|o|:|a1|,|x|:|'.$row["coo1"].'|,|y|:|'.$row["coo2"].'|,|z|:|'.$row["coo3"].'|}';
				$layer = '_2';
			}
}elseif ($location == '302490000') { // garden of knowledge event
			if ($row["coo3"] < 800) {
				$spotsarray[$location.'_1'][] = '{|o|:|a1|,|x|:|'.$row["coo1"].'|,|y|:|'.$row["coo2"].'|,|z|:|'.$row["coo3"].'|}';
				$layer = '_1';
			}elseif ($row["coo3"] > 800) {
				$spotsarray[$location.'_2'][] = '{|o|:|a1|,|x|:|'.$row["coo1"].'|,|y|:|'.$row["coo2"].'|,|z|:|'.$row["coo3"].'|}';
				$layer = '_2';
			}
}elseif ($location == '400010000') { // Abyss
			if ($row["coo3"] < 1800) {
				$spotsarray[$location.'_1'][] = '{|o|:|a1|,|x|:|'.$row["coo1"].'|,|y|:|'.$row["coo2"].'|,|z|:|'.$row["coo3"].'|}';
				$layer = '_1';
			}elseif ($row["coo3"] > 2500) {
				$spotsarray[$location.'_3'][] = '{|o|:|a1|,|x|:|'.$row["coo1"].'|,|y|:|'.$row["coo2"].'|,|z|:|'.$row["coo3"].'|}';
				$layer = '_3';
			}else {
				$spotsarray[$location.'_2'][] = '{|o|:|a1|,|x|:|'.$row["coo1"].'|,|y|:|'.$row["coo2"].'|,|z|:|'.$row["coo3"].'|}';
				$layer = '_2';
			}
}elseif ($location == '302200000') { // Sanctum Battlefield
			if ($row["coo3"] < 1400) {
				$spotsarray[$location.'_1'][] = '{|o|:|a1|,|x|:|'.(3072 - $row["coo1"]).'|,|y|:|'.(3072 - $row["coo2"]).'|,|z|:|'.$row["coo3"].'|}';
				$layer = '_1';
			}elseif ($row["coo3"] > 2000) {
				$spotsarray[$location.'_3'][] = '{|o|:|a1|,|x|:|'.(3072 - $row["coo1"]) .'|,|y|:|'.(3072 - $row["coo2"]) .'|,|z|:|'.$row["coo3"].'|}';
				$layer = '_3';
			}else {
				$spotsarray[$location.'_2'][] = '{|o|:|a1|,|x|:|'.(3072 - $row["coo1"]).'|,|y|:|'.(3072 - $row["coo2"]).'|,|z|:|'.$row["coo3"].'|}';
				$layer = '_2';
			}
}elseif ($location == '302470000') { // Sanctum Battlefield Quest
			if ($row["coo3"] < 1400) {
				$spotsarray[$location.'_1'][] = '{|o|:|a1|,|x|:|'.(3072 - $row["coo1"]).'|,|y|:"'.(3072 - $row["coo2"]).'|,|z|:|'.$row["coo3"].'|}';
				$layer = '_1';
			}elseif ($row["coo3"] > 2000) {
				$spotsarray[$location.'_3'][] = '{|o|:|a1|,|x|:|'.(3072 - $row["coo1"]).'|,|y|:"'.(3072 - $row["coo2"]).'|,|z|:|'.$row["coo3"].'|}';
				$layer = '_3';
			}else {
				$spotsarray[$location.'_2'][] = '{|o|:|a1|,|x|:|'.(3072 - $row["coo1"]).'|,|y|:"'.(3072 - $row["coo2"]).'|,|z|:|'.$row["coo3"].'|}';
				$layer = '_2';
			}
}elseif ($location == '302300000') { // Pandaemonium Battlefield
			if ($row["coo3"] < 1300) {
				$spotsarray[$location.'_1'][] = '{|o|:|a1|,|x|:|'.$row["coo1"].'|,|y|:|'.$row["coo2"].'|,|z|:|'.$row["coo3"].'|}';
				$layer = '_1';
			}elseif ($row["coo3"] > 2000) {
				$spotsarray[$location.'_3'][] = '{|o|:|a1|,|x|:|'.$row["coo1"].'|,|y|:|'.$row["coo2"].'|,|z|:|'.$row["coo3"].'|}';
				$layer = '_3';
			}else {
				$spotsarray[$location.'_2'][] = '{|o|:|a1|,|x|:|'.$row["coo1"].'|,|y|:|'.$row["coo2"].'|,|z|:|'.$row["coo3"].'|}';
				$layer = '_2';
			}
}elseif ($location == '302480000') { // Pandaemonium Battlefield Quest
			if ($row["coo3"] < 1300) {
				$spotsarray[$location.'_1'][] = '{|o|:|a1|,|x|:|'.$row["coo1"].'|,|y|:|'.$row["coo2"].'|,|z|:|'.$row["coo3"].'|}';
				$layer = '_1';
			}elseif ($row["coo3"] > 2000) {
				$spotsarray[$location.'_3'][] = '{|o|:|a1|,|x|:|'.$row["coo1"].'|,|y|:|'.$row["coo2"].'|,|z|:|'.$row["coo3"].'|}';
				$layer = '_3';
			}else {
				$spotsarray[$location.'_2'][] = '{|o|:|a1|,|x|:|'.$row["coo1"].'|,|y|:|'.$row["coo2"].'|,|z|:|'.$row["coo3"].'|}';
				$layer = '_2';
			}
}elseif ($location == '110010000') { // Sanctum
			$spotsarray[$location][] = '{|o|:|a1|,|x|:|'.(3072 - $row["coo1"]).'|,|y|:|'.(3072 - $row["coo2"]).'|,|z|:|'.$row["coo3"].'|}';
}elseif ($location == '302340000') { // Narakali
			if ($row["coo2"] > 1000) {
				$spotsarray[$location.'_1'][] = '{|o|:|a1|,|x|:|'.$row["coo1"].'|,|y|:|'.$row["coo2"].'|,|z|:|'.$row["coo3"].'|}';
				$layer = '_1';
			}else {
				
				if ($row["coo1"] > 700) {
					$spotsarray[$location.'_2'][] = '{|o|:|a1|,|x|:|'.$row["coo1"].'|,|y|:|'.$row["coo2"].'|,|z|:|'.$row["coo3"].'|}';
					$layer = '_2';
				}else {
					$spotsarray[$location.'_3'][] = '{|o|:|a1|,|x|:|'.$row["coo1"].'|,|y|:|'.$row["coo2"].'|,|z|:|'.$row["coo3"].'|}';
					$layer = '_3';
			}
			}
}
		
		
		
		
		
else {
			$spotsarray[$location][] = '{|o|:|a1|,|x|:|'.$row["coo1"].'|,|y|:|'.$row["coo2"].'|,|z|:|'.$row["coo3"].'|}';
		}