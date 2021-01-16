<?php

		if($row['gender_permitted'] == 'female') {
            $itemRestrictions .= '<p class="deposit_desc">' . translate('STR_TOOLTIP_FEMALE', $language) . '</p>';
        }elseif ($row['gender_permitted'] == 'male') {
			$itemRestrictions .= '<p class="deposit_desc">' . translate('STR_TOOLTIP_MALE', $language) . '</p>';
        }else {
			$itemRestrictions .= '';
		}


		if($row['soul_bind'] == 'TRUE') {
            $itemRestrictions .= '<p class="soulbind_desc">' . translate('STR_TOOLTIP_SOUL_BOUND_NEED', $language) . '</p>';
        }else {
            $itemRestrictions .= '';
        } 
		
		if($row['can_exchange'] == 'FALSE') {
            $itemRestrictions .= '<p class="deposit_desc">' . translate('STR_TOOLTIP_EXCHANGE', $language) . '</p>';
        }else {
            $itemRestrictions .= '';
        } 
		
		
		if($row['can_sell_to_npc'] == 'FALSE') {
            $itemRestrictions .= '<div class="cannot_sell_to_npc restrictionTip" title=' . translate('STR_TOOLTIP_CANNOT_SELL_TO_NPC', $language) .'></div>';
        }else {
            $itemRestrictions .= '';
        } 
		
		if($row['can_deposit_to_character_warehouse'] == 'FALSE') {
            $itemRestrictions .= '<div class="characterwarehouse restrictionTip" title="' . translate('STR_TOOLTIP_CHARACTERWAREHOUSE', $language) . '"></div>';
        }else {
            $itemRestrictions .= '';
        } 
		
		if($row['can_deposit_to_account_warehouse'] == 'FALSE') {
            $itemRestrictions .= '<div class="accountwarehouse restrictionTip" title="' . translate('STR_TOOLTIP_ACCOUNTWAREHOUSE', $language) . '"></div>';
        }else {
            $itemRestrictions .= '';
        }
		
		if($row['can_deposit_to_guild_warehouse'] == 'FALSE') {
            $itemRestrictions .= '<div class="guildwarehouse restrictionTip" title="' . translate('STR_TOOLTIP_GUILDWAREHOUSE', $language) . '"></div>';
        }else {
            $itemRestrictions .= '';
        }
		
		
		if($row['breakable'] == 'FALSE') {
            $itemRestrictions .= '<div class="breakable restrictionTip" title="' . translate('STR_TOOLTIP_BREAKABLE', $language) . '"></div>';
        }else {
            $itemRestrictions .= '';
        }
		
		if($row['max_authorize'] == NULL or $row['max_authorize'] == '0') {
            $max_authorize .= '<div class="cannot_authorize restrictionTip" title="' . translate('STR_TOOLTIP_CANNOT_AUTHORIZE', $language) . '"></div>';
        }else {
            $max_authorize .= '';
			$maxUpgrade = '<div class="wrap max_enchant"><dl class="max_enchant"><dt>' . translate('STR_ITEM_AUTHORIZE_TOOLTIP_LEVEL', $language) . '</dt><dd>' . $max_Upgrade . '</dd></dl></div>';
        }
		
		
		
		if($row['cannot_extraction'] == 'TRUE' & $row['equipment_slots'] !== 'head') {
            $itemRestrictions .= '<div class="cannot_extraction restrictionTip" title="' . translate('STR_TOOLTIP_CANNOT_EXTRACTION', $language) . '"></div>';
        }else {
            $itemRestrictions .= '';
        }
		
		
		if($row['no_enchant'] == 'FALSE' & $row['max_enchant_value'] == '0' & $row['equipment_slots'] !== 'head' & $row['equipment_slots'] !== 'bracelet' & $row['equipment_slots'] !== 't_shirt') {
            $itemRestrictions .= '<div class="cannot_matter_enchant restrictionTip" title="' . translate('STR_TOOLTIP_CANNOT_MATTER_ENCHANT', $language) . '"></div>';
        }else {
            $itemRestrictions .= '';
			$maximumEnch = '<div class="wrap max_enchant" style=""><dl class="max_enchant"><dt>' . translate('STR_ITEM_ENCHANT_STATE', $language) . '</dt><dd>' . $ench_level . $ench_level_bonus .'</dd></dl></div>';
        }
		
		
		if($row['no_enchant'] == 'TRUE' ) {
            $no_enchant .= '<div class="no_enchant restrictionTip" title="' . translate('STR_TOOLTIP_NO_ENCHANT', $language) . '"></div>';
			$maximumEnch = '';
        }else {
            $no_enchant .= '';
        }
		
		if($row['cannot_changeskin'] == '1') {
            $itemRestrictions .= '<div class="no_change_skin restrictionTip" title="' . translate('STR_TOOLTIP_NO_CHANGE_SKIN', $language) . '"></div>';
        }else {
            $itemRestrictions .= '';
        }
		
		
		
		
		if($row['extract_skin_type'] == '2' or $row['extract_skin_type'] == '3') {
            $itemRestrictions .= '<div class="no_skin_extract_repeat restrictionTip" title="' . translate('STR_TOOLTIP_NO_SKIN_EXTRACT_REPEAT', $language) . '"></div>';
        }else {
            $itemRestrictions .= '';
        }
		
		
		if($row['can_pack_count'] >= 1) {
            $itemRestrictions .= '<div class="can_pack restrictionTip" title="' . translate('STR_TOOLTIP_ITEM_CAN_PACK', $language) . ' (' . $pack_count .'x)"></div>';
        }else {
            $itemRestrictions .= '';
        }
		
		
		if($row['can_ap_extraction'] == 'TRUE') {
            $itemRestrictions .= '<div class="item_can_ap_decompose restrictionTip" title="' . translate('STR_TOOLTIP_ITEM_CAN_AP_DECOMPOSE', $language) . '"></div>';
        }else {
            $itemRestrictions .= '';
        }
		
		
		
		
		if($row['can_composite_weapon'] == 'FALSE') {
            $composite_weapon .= '<div class="cant_compound restrictionTip" title="' . translate('STR_TOOLTIP_CANT_COMPOUND', $language) . '"></div>';
        }else {
            $composite_weapon .= '';
        }
		
		
		if($row['exceed_enchant'] == 'TRUE') {
            $exceed_enchant .= '<div class="can_exceed restrictionTip" title="' . translate('STR_TOOLTIP_CAN_EXCEED', $language) . '"></div>';
        }else {
            $exceed_enchant .= '';
        }
		
		
		if($row['no_enchant'] == 'TRUE' ) {
            $enchant_stigma .= '<div class="cant_enchant_stigma restrictionTip" title="' . translate('STR_TOOLTIP_CANT_ENCHANT_STIGMA', $language) . '"></div>';
        }else {
            $enchant_stigma .= '';
        }
		
		
		if($row['can_split'] == 'FALSE') {
            $split_item .= '<div class="cannot_split_item restrictionTip" title="' . translate('STR_TOOLTIP_CANNOT_SPLIT_ITEM', $language) . '"></div>';
        }else {
            $split_item .= '';
        }
		
		
		if($row['evolutionname'] != NULL) {
			$canEvolve .= '<div class="item_can_upgrade restrictionTip" title="' . translate('STR_TOOLTIP_ITEM_CAN_UPGRADE', $language) . '"></div>';
		}else {
			$canEvolve .= '';
		}
		
		if($row['price'] > 0) {
			$itemPrice .= '<div class="item_price restrictionTip" title="' . translate('STR_ITEM_PRICE', $language) . ': ' . number_format($row['price']) . '" title="' . translate('STR_ITEM_PRICE', $language) . ': ' . number_format($row['price']) . '"></div>';
		}else {
			$itemPrice .= '';
		}
		
		