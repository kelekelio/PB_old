<?php


		if ($row["level"] != NULL) {
				$otheritemLevel = translate('STR_TOOLTIP_ITEM_AUTHORIZE_LEVEL_VALUE', $language);
				$oitemLevel = explode('%0', $otheritemLevel);
				$availableLevelother = '<p class="learn_level">' . $oitemLevel[0] . $itemlevel . $oitemLevel[1] . '</p>';
		}
		
		
		
		
		if($row["warrior"] != NULL) {
			if ($row["item_highdeva"] == 'TRUE') {
				
				
				if ($row["equiplevel_adj_bonus_max"] != NULL) {
					$reduction = translate('STR_TOOLTIP_EQUIPLEVEL_ADJ', $language);
					
					$levelreduction = strtr($reduction, array(
							"%0" => '0',
							"%1" => $row["equiplevel_adj_bonus_max"],
					));
				}else {
					$levelreduction = '';
				}
				
			if ($row["warrior"] == '0') {
				$recom = translate('STR_TOOLTIP_RECOMMENDED_CLASS_LEVEL', $language) . ' ' . $levelreduction;
				
				$classarray = array();
				
				if ($row["fighter"] > 0) {
					$classarray[] = translate('STR_CLASS_NAME_FIGHTER', $language);
				}
				if ($row["knight"] > 0) {
					$classarray[] = translate('STR_CLASS_NAME_KNIGHT', $language);
				}
				if ($row["assassin"] > 0) {
					$classarray[] = translate('STR_CLASS_NAME_ASSASSIN', $language);
				}
				if ($row["ranger"] > 0) {
					$classarray[] = translate('STR_CLASS_NAME_RANGER', $language);
				}
				if ($row["wizard"] > 0) {
					$classarray[] = translate('STR_CLASS_NAME_WIZARD', $language);
				}
				if ($row["elementalist"] > 0) {
					$classarray[] = translate('STR_CLASS_NAME_ELEMENTALIST', $language);
				}
				if ($row["chanter"] > 0) {
					$classarray[] = translate('STR_CLASS_NAME_CHANTER', $language);
				}
				if ($row["priest"] > 0) {
					$classarray[] = translate('STR_CLASS_NAME_PRIEST', $language);
				}
				if ($row["gunner"] > 0) {
					$classarray[] = translate('STR_CLASS_NAME_GUNNER', $language);
				}
				if ($row["bard"] > 0) {
					$classarray[] = translate('STR_CLASS_NAME_BARD', $language);
				}
				if ($row["rider"] > 0) {
					$classarray[] = translate('STR_CLASS_NAME_RIDER', $language);
				}
				if ($row["painter"] > 0) {
					$classarray[] = translate('STR_CLASS_NAME_PAINTER', $language);
				}
				
				$recommClass = implode("/", $classarray);
				
				
				
				$availableLevel = strtr($recom, array(
							"%0" => $recommClass,
							"%1" => $avaLevel,
					));
				
			}else {	
			$recom = translate('STR_TOOLTIP_RECOMMENDED_LEVEL_ONLY', $language) . ' ' . $levelreduction;
			$recommLevel = explode('%0', $recom);
			$availableLevel = '<p class="learn_level">' . $recommLevel[0] . $avaLevel . $recommLevel[1] . '</p>';
			}
			}
			
			
			
			
			else {	

				if ($row["warrior"] == '0') {
				$recom = translate('STR_TOOLTIP_USE_CLASS_LEVEL', $language) . ' ' . $levelreduction;
				
				$classarray = array();
				
				if ($row["fighter"] > 0) {
					$classarray[] = translate('STR_CLASS_NAME_FIGHTER', $language);
				}
				if ($row["knight"] > 0) {
					$classarray[] = translate('STR_CLASS_NAME_KNIGHT', $language);
				}
				if ($row["assassin"] > 0) {
					$classarray[] = translate('STR_CLASS_NAME_ASSASSIN', $language);
				}
				if ($row["ranger"] > 0) {
					$classarray[] = translate('STR_CLASS_NAME_RANGER', $language);
				}
				if ($row["wizard"] > 0) {
					$classarray[] = translate('STR_CLASS_NAME_WIZARD', $language);
				}
				if ($row["elementalist"] > 0) {
					$classarray[] = translate('STR_CLASS_NAME_ELEMENTALIST', $language);
				}
				if ($row["chanter"] > 0) {
					$classarray[] = translate('STR_CLASS_NAME_CHANTER', $language);
				}
				if ($row["priest"] > 0) {
					$classarray[] = translate('STR_CLASS_NAME_PRIEST', $language);
				}
				if ($row["gunner"] > 0) {
					$classarray[] = translate('STR_CLASS_NAME_GUNNER', $language);
				}
				if ($row["bard"] > 0) {
					$classarray[] = translate('STR_CLASS_NAME_BARD', $language);
				}
				if ($row["rider"] > 0) {
					$classarray[] = translate('STR_CLASS_NAME_RIDER', $language);
				}
				if ($row["painter"] > 0) {
					$classarray[] = translate('STR_CLASS_NAME_PAINTER', $language);
				}
				
				$recommClass = implode("/", $classarray);
				
				
				
				$availableLevel = strtr($recom, array(
							"%0" => $recommClass,
							"%1" => $avaLevel,
					));
				
			}else {
			$useLevel = translate('STR_TOOLTIP_USE_LEVEL', $language);
			$avlbLevel = explode('%0', $useLevel);
			$availableLevel = '<p class="learn_level">' . $avlbLevel[0] . $avaLevel . $avlbLevel[1] . '</p>';
			}
			}
		}
		
		
		if($row["warrior_max"] != NULL) {
			$maxuseLevel = translate('STR_TOOLTIP_USE_LEVEL_MAX', $language);
			$maxavlbLevel = explode('%0', $maxuseLevel);
			$MaxavailableLevel = '<p class="learn_level">' . $maxavlbLevel[0] . $maxavaLevel . $maxavlbLevel[1] . '</p>';
		}