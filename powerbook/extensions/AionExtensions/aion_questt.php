<?php


$wgExtensionCredits['variable'][] = array(
	'path'           => __FILE__,
	'name'           => 'Aion quests',
	'author'         => 'Kelekelio',
	'url'            => 'https://aionpowerbook.com',
	'descriptionmsg' => 'Aion quest table',
	'version'		 => '1.0',
	'license-name' 	 => 'LICENSE',
);
 
$wgHooks['ParserFirstCallInit'][] = 'AionQuesttableFunction';
$wgExtensionMessagesFiles['AionQuestTable'] = __DIR__ . '/aion_questt.i18n.php';
function AionQuesttableFunction( &$parser ) {
   $parser->setFunctionHook( 'questt', 'AionQuestTableParserFunction' );
   return true;
}




function rewarditem($name, $language)
{
    include 'include/DBselect.php';
    $result = $db->query("
SELECT id, icon_name, quality, search_$language, search_ko
FROM client_items
WHERE name like '$name'
       ", $dbid)->fetchArray();



	$localization = !empty($result['search_'.$language]) ? $result['search_'.$language] : $result['search_ko'];
	$id = $result["id"];
	$quality = strtolower($result["quality"]);
	$extraicon_name=strtolower($result["icon_name"]);
	
	if ($name[0] == '%'){
		return '<br>Random reward';
	}else {
		return '<br><a class="tooltipzy col_' . $quality . '" href="https://aionpowerbook.com/powerbook/Item/' . $id . '" tooltipID="' . $id . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a>';
	}
}




function AionQuestTableParserFunction( &$parser, $arg1 ) {

    include 'include/DBselect.php';
    $sql = $db->query("SELECT  * FROM client_quest WHERE id = $arg1 ")->fetchAll();

    foreach ($sql as $questrow) {
    $questid=$questrow["id"];
	$category=strtolower($questrow["category1"]);
	$zone = $questrow["category2"];
	$reward_exp=number_format($questrow["reward_exp1"]);
	$kinah=number_format($questrow["reward_gold1"]);
	$glory=number_format($questrow["reward_glory_point1"]);
	$stronghold=number_format($questrow["reward_abyss_op_point1"]);
	$minlevel_permitted=$questrow["minlevel_permitted"];
    $localization = !empty($questrow['search_' . language()]) ? $questrow['search_'. language()] : $questrow['search_ko'];
	$ap1=number_format($questrow["reward_abyss_point1"]);
	$ap2=number_format($questrow["reward_abyss_point2"]);
	$ap3=number_format($questrow["reward_abyss_point3"]);
	$ap4=number_format($questrow["reward_abyss_point4"]);
	
	
	
	

	 
// EXP
	if ($questrow["reward_exp1"] > 0) {
			$expreward = '<p class="reward_info"><em>' . translate('STR_EXP', language()) . '</em>&nbsp;<span class="reward_exp">' . $reward_exp . '</span><br></p>';
		}
		
// KINAH		
	if ($questrow["reward_gold1"] > 0) {
			$kinahreward = '<p class="reward_info"><em>' . translate('STR_GOLD', language()) . '</em>&nbsp;<span class="reward_gold">' . $kinah . '</span><br></p>';
		}	 
	 
	 
	 
	 

			
	
	foreach ($questrow as $fieldName => $fieldValue) {
            if (!preg_match('/^selectable_reward_item_ext_[0-9]+$/', $fieldName)) {
				continue;
            }
			
			
			list($rewordName, $rewardValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));
			
			
			if ($rewordName != null) {
			$selectabltrewards1 .= rewarditem($rewordName, language()) .' '. $rewardValue;
			}
	 }
	 foreach ($questrow as $fieldName => $fieldValue) {
            if (!preg_match('/^selectable_reward_item1_[0-9]+$/', $fieldName)) {
				continue;
            }
			
			
			list($rewordName, $rewardValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));
			
			
			if ($rewordName != null) {
			$selectabltrewards1 .= rewarditem($rewordName, language()) .' '. $rewardValue;
			}
	 }
	 foreach ($questrow as $fieldName => $fieldValue) {
            if (!preg_match('/^selectable_reward_item2_[0-9]+$/', $fieldName)) {
				continue;
            }
			
			
			list($rewordName, $rewardValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));
			
			
			if ($rewordName != null) {
			$selectabltrewards1 .= rewarditem($rewordName, language()) .' '. $rewardValue;
			}
	 }
	 foreach ($questrow as $fieldName => $fieldValue) {
            if (!preg_match('/^selectable_reward_item3_[0-9]+$/', $fieldName)) {
				continue;
            }
			
			
			list($rewordName, $rewardValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));
			
			
			if ($rewordName != null) {
			$selectabltrewards1 .= rewarditem($rewordName, language()) .' '. $rewardValue;
			}
	 }foreach ($questrow as $fieldName => $fieldValue) {
            if (!preg_match('/^selectable_reward_item4_[0-9]+$/', $fieldName)) {
				continue;
            }
			
			
			list($rewordName, $rewardValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));
			
			
			if ($rewordName != null) {
			$selectabltrewards1 .= rewarditem($rewordName, language()) .' '. $rewardValue;
			}
	 }foreach ($questrow as $fieldName => $fieldValue) {
            if (!preg_match('/^selectable_reward_item5_[0-9]+$/', $fieldName)) {
				continue;
            }
			
			
			list($rewordName, $rewardValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));
			
			
			if ($rewordName != null) {
			$selectabltrewards1 .= rewarditem($rewordName, language()) .' '. $rewardValue;
			}
	 }foreach ($questrow as $fieldName => $fieldValue) {
            if (!preg_match('/^selectable_reward_item6_[0-9]+$/', $fieldName)) {
				continue;
            }
			
			
			list($rewordName, $rewardValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));
			
			
			if ($rewordName != null) {
			$selectabltrewards1 .= rewarditem($rewordName, language()) .' '. $rewardValue;
			}
	 }
	 
	 
	 
	foreach ($questrow as $fieldName => $fieldValue) {
            if (!preg_match('/^reward_item1_[0-9]+$/', $fieldName)) {
				continue;
            }
			
			
			list($rewordName, $rewardValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));
			
			
			if ($rewordName != null) {
			$RewardItems .= rewarditem($rewordName, language()) .' '. $rewardValue;
			}
	 }
	foreach ($questrow as $fieldName => $fieldValue) {
            if (!preg_match('/^reward_item2_[0-9]+$/', $fieldName)) {
				continue;
            }
			
			
			list($rewordName, $rewardValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));
			
			
			if ($rewordName != null) {
			$RewardItems .= rewarditem($rewordName, language()) .' '. $rewardValue;
			}
	 }
	foreach ($questrow as $fieldName => $fieldValue) {
            if (!preg_match('/^reward_item3_[0-9]+$/', $fieldName)) {
				continue;
            }
			
			
			list($rewordName, $rewardValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));
			
			
			if ($rewordName != null) {
			$RewardItems .= rewarditem($rewordName, language()) .' '. $rewardValue;
			}
	 }
	foreach ($questrow as $fieldName => $fieldValue) {
            if (!preg_match('/^reward_item4_[0-9]+$/', $fieldName)) {
				continue;
            }
			
			
			list($rewordName, $rewardValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));
			
			
			if ($rewordName != null) {
			$RewardItems .= rewarditem($rewordName, language()) .' '. $rewardValue;
			}
	 }
	
 
		
			
		
		$selectableclass = array(
		
$questrow['fighter_selectable_item'],
$questrow['fighter_selectable_item1'],
$questrow['fighter_selectable_item2'],
$questrow['fighter_selectable_item3'],
$questrow['fighter_selectable_item4'],
$questrow['fighter_selectable_item5'],
$questrow['fighter_selectable_item6'],
$questrow['fighter_selectable_item7'],
$questrow['fighter_selectable_item8'],
$questrow['knight_selectable_item'],
$questrow['knight_selectable_item1'],
$questrow['knight_selectable_item2'],
$questrow['knight_selectable_item3'],
$questrow['knight_selectable_item4'],
$questrow['knight_selectable_item5'],
$questrow['knight_selectable_item6'],
$questrow['knight_selectable_item7'],
$questrow['knight_selectable_item8'],
$questrow['ranger_selectable_item'],
$questrow['ranger_selectable_item1'],
$questrow['ranger_selectable_item2'],
$questrow['ranger_selectable_item3'],
$questrow['ranger_selectable_item4'],
$questrow['ranger_selectable_item5'],
$questrow['ranger_selectable_item6'],
$questrow['ranger_selectable_item7'],
$questrow['ranger_selectable_item8'],
$questrow['assassin_selectable_item'],
$questrow['assassin_selectable_item1'],
$questrow['assassin_selectable_item2'],
$questrow['assassin_selectable_item3'],
$questrow['assassin_selectable_item4'],
$questrow['assassin_selectable_item5'],
$questrow['assassin_selectable_item6'],
$questrow['assassin_selectable_item7'],
$questrow['assassin_selectable_item8'],
$questrow['wizard_selectable_item'],
$questrow['wizard_selectable_item1'],
$questrow['wizard_selectable_item2'],
$questrow['wizard_selectable_item3'],
$questrow['wizard_selectable_item4'],
$questrow['wizard_selectable_item5'],
$questrow['wizard_selectable_item6'],
$questrow['wizard_selectable_item7'],
$questrow['wizard_selectable_item8'],
$questrow['elementalist_selectable_item'],
$questrow['elementalist_selectable_item1'],
$questrow['elementalist_selectable_item2'],
$questrow['elementalist_selectable_item3'],
$questrow['elementalist_selectable_item4'],
$questrow['elementalist_selectable_item5'],
$questrow['elementalist_selectable_item6'],
$questrow['elementalist_selectable_item7'],
$questrow['elementalist_selectable_item8'],
$questrow['priest_selectable_item'],
$questrow['priest_selectable_item1'],
$questrow['priest_selectable_item2'],
$questrow['priest_selectable_item3'],
$questrow['priest_selectable_item4'],
$questrow['priest_selectable_item5'],
$questrow['priest_selectable_item6'],
$questrow['priest_selectable_item7'],
$questrow['priest_selectable_item8'],
$questrow['chanter_selectable_item'],
$questrow['chanter_selectable_item1'],
$questrow['chanter_selectable_item2'],
$questrow['chanter_selectable_item3'],
$questrow['chanter_selectable_item4'],
$questrow['chanter_selectable_item5'],
$questrow['chanter_selectable_item6'],
$questrow['chanter_selectable_item7'],
$questrow['chanter_selectable_item8'],
$questrow['gunner_selectable_item'],
$questrow['gunner_selectable_item1'],
$questrow['gunner_selectable_item2'],
$questrow['gunner_selectable_item3'],
$questrow['gunner_selectable_item4'],
$questrow['gunner_selectable_item5'],
$questrow['gunner_selectable_item6'],
$questrow['gunner_selectable_item7'],
$questrow['gunner_selectable_item8'],
$questrow['bard_selectable_item'],
$questrow['bard_selectable_item1'],
$questrow['bard_selectable_item2'],
$questrow['bard_selectable_item3'],
$questrow['bard_selectable_item4'],
$questrow['bard_selectable_item5'],
$questrow['bard_selectable_item6'],
$questrow['bard_selectable_item7'],
$questrow['bard_selectable_item8'],
$questrow['rider_selectable_item'],
$questrow['rider_selectable_item1'],
$questrow['rider_selectable_item2'],
$questrow['rider_selectable_item3'],
$questrow['rider_selectable_item4'],
$questrow['rider_selectable_item5'],
$questrow['rider_selectable_item6'],
$questrow['rider_selectable_item7'],
$questrow['rider_selectable_item8'],
$questrow['painter_selectable_item'],
$questrow['painter_selectable_item1'],
$questrow['painter_selectable_item2'],
$questrow['painter_selectable_item3'],
$questrow['painter_selectable_item4'],
$questrow['painter_selectable_item5'],
$questrow['painter_selectable_item6'],
$questrow['painter_selectable_item7'],
$questrow['painter_selectable_item8']
		
		);
		
$filteredclassrewards = array_filter($selectableclass);		
$uniqueclassrewards = array_unique($filteredclassrewards);

if ($uniqueclassrewards != NULL) {
	
	$classrewardsfinal = '<br>';
	
	foreach ($uniqueclassrewards as &$value) {
		
		$explodedvalue = explode(' ', $value);
		
			if ($explodedvalue != NULL) {
				$classrewardsfinal .= questrewarditemicon($explodedvalue[0], language()) . ' ';
			}
		
	}
	
	$classrewardsfinal .= '<br>';
	
	
}
		
		
		

		
		if ($ap1 != 0) {
			$reward .= '<p class="reward_info"><em><a href="Abyss Points">' . translate('STR_ABYSS_POINT', language()) . '</a></em>&nbsp;<span class="reward_ap">' . $ap1 . '</span><br></p>'; 
		}
		if ($ap2 != 0) {
			$reward .= '<p class="reward_info"><em><a href="Abyss Points">' . translate('STR_ABYSS_POINT', language()) . '</a></em>&nbsp;<span class="reward_ap">' . $ap2 . '</span><br></p>'; 
		}
		if ($ap3 != 0) {
			$reward .= '<p class="reward_info"><em><a href="Abyss Points">' . translate('STR_ABYSS_POINT', language()) . '</a></em>&nbsp;<span class="reward_ap">' . $ap3 . '</span><br></p>'; 
		}
		if ($ap4 != 0) {
			$reward .= '<p class="reward_info"><em><a href="Abyss Points">' . translate('STR_ABYSS_POINT', language()) . '</a></em>&nbsp;<span class="reward_ap">' . $ap4 . '</span><br></p>'; 
		}
		
		if ($questrow["reward_glory_point1"] >= 1) {
			$reward .= '<p class="reward_info"><em><a href="Honour Points">' . translate('STR_GLORY_POINT', language()) . '</a></em>&nbsp;<span class="base_reinforcement">' . $glory . '</span><br></p>';
		}
		
		
		if ($questrow["reward_abyss_op_point1"] >= 1) {
			$reward .= '<p class="reward_info"><em><a href="Stronghold Reinforcement Points">' . translate('STR_START_DIALOG__TOOLTIP_ABYSS_OP', language()) . '</a></em>&nbsp;<span class="base_reinforcement">' . $stronghold . '</span><br></p>';
		}
   
			
			$testvar = '
			<tr class="l1">
			<td class="ar">' . $minlevel_permitted . '</td>
			<td class="al"><div class="link_' . $category . '"><a href="https://aionpowerbook.com/powerbook/Quest/' . $questid . '">' . $localization . '</a></div></td>
			<td class="al">' . $expreward . $kinahreward . $reward . $RewardItems . $selectabltrewards1 . $classrewardsfinal . '<p></p></td>
			</tr>';
			
			
			
}
        return array( $testvar, 'noparse' => true, 'isHTML' => true );
		//$wgOut->AddHTML( $testvar );
}
 
 
// enf of magic word, beginning of data retriving