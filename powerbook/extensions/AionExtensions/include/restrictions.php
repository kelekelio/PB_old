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
		
			
		
		
		if (strtolower($row['can_vendor']) == 'true' && $row['can_exchange'] == 'FALSE') {
			$itemRestrictions .= '<p class="deposit_desc can_exchange">' . translate('STR_TOOLTIP_EXCHANGE', $language) . ', ' . translate('STR_TOOLTIP_ITEM_CAN_VENDOR', $language) . '</p>';
		}else{
			
		if($row['can_exchange'] == 'FALSE') {
            $itemRestrictions .= '<p class="deposit_desc can_exchange">' . translate('STR_TOOLTIP_EXCHANGE', $language) . '</p>';
        }else {
            $itemRestrictions .= '';
        } 
		
		if(strtolower($row['can_vendor']) == 'true') {
            $itemRestrictions .= '<p class="deposit_desc can_vendor">' . translate('STR_TOOLTIP_ITEM_CAN_VENDOR', $language) . '</p>';
        }else {
			$itemRestrictions .= '';
		}	
			
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
		
		
		
		
		// <div class="enchanttip restrictionTip" title="test<br>line2"></div>
		
		
		if ($row['max_authorize'] > 0 or $row['max_enchant_value'] > 0){
			
			if ($row['max_authorize'] > 0 && strtolower($row['driven_enchant_type']) == 'pvp' ){
				
					
					
				$maxUpgrade = '<div class="wrap max_enchant"><dl class="max_enchant"><dt>PVP ' . translate('STR_TOOLTIP_NOTICE_ENCHANT', $language) . '</dt><dd style="width:20px">' . $max_Upgrade . '</dd> <div class="enchanttip enchantingTip" title="'. $enchanttooltip .'"></div></dl></div>';
				$itempvpve = '<img src="https://aionpowerbook.com/img/itempvp.png" alt="" style="height:18px !important" >';
			}
			elseif ($row['max_enchant_value'] > 0 && strtolower($row['driven_enchant_type']) == 'pve' ){
				$maxUpgrade = '<div class="wrap max_enchant"><dl class="max_enchant"><dt>PVE ' . translate('STR_TOOLTIP_NOTICE_ENCHANT', $language) . '</dt><dd style="width:20px">' . $ench_level . $ench_level_bonus . '</dd> <div class="enchanttip enchantingTip" title="'. $enchanttooltip .'"></div></dl></div>';
				$itempvpve = '<img src="https://aionpowerbook.com/img/itempve.png" alt="" style="height:18px !important" >';
			}
			elseif ($row['max_authorize'] > 0 && $row['driven_enchant_type'] == NULL){
				$maxUpgrade = '<div class="wrap max_enchant"><dl class="max_enchant"><dt>' . translate('STR_ITEM_AUTHORIZE_TOOLTIP_LEVEL', $language) . '</dt><dd>' . $max_Upgrade . '</dd></dl></div>';
			}
			elseif ($row['max_enchant_value'] > 0 && $row['driven_enchant_type'] == NULL){
				$maxUpgrade = '<div class="wrap max_enchant"><dl class="max_enchant"><dt>' . translate('STR_TOOLTIP_NOTICE_ENCHANT', $language) . '</dt><dd>' . $ench_level . $ench_level_bonus . '</dd></dl></div>';
			}
			
		}
		
		if (strtolower($row['driven_enchant_type']) == 'destruction') {
			$maxUpgrade = '<div class="wrap max_enchant"><dl class="max_enchant"><dt>' . translate('STR_TOOLTIP_NOTICE_ENCHANT', $language) . '</dt><dd style="width:20px">' . $ench_level . $ench_level_bonus . '</dd> <div class="enchanttip enchantingTip" title="'. $enchanttooltip .'"></div></dl></div>';
		}

		if (strtolower($row['driven_enchant_type']) == 'grind') {
			$maxUpgrade = '<div class="wrap max_enchant"><dl class="max_enchant"><dt>' . translate('STR_TOOLTIP_NOTICE_ENCHANT', $language) . '</dt><dd style="width:20px">20</dd> <div class="enchanttip enchantingTip" title="'. $enchanttooltip .'"></div></dl></div>';
		}
		

		
		if($row['cannot_extraction'] == 'TRUE' & $row['equipment_slots'] !== 'head') {
            $itemRestrictions .= '<div class="cannot_extraction restrictionTip" title="' . translate('STR_TOOLTIP_CANNOT_EXTRACTION', $language) . '"></div>';
        }else {
            $itemRestrictions .= '';
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
		
		
		if($row['exceed_enchant'] == 'TRUE' & strtolower($row['quality']) !== 'common' & strtolower($row['quality']) !== 'rare' & strtolower($row['quality']) !== 'legend') {
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
			$sellprice = floor($row['price'] * 0.05);
			if ($sellprice == 0) {
				$sellprice = 1;
			}
			$sellpriceeu = floor($row['price'] * 0.15);
			if ($sellpriceeu == 0) {
				$sellpriceeu = 1;
			}
			
			$itemPrice .= '<div class="item_price restrictionTip" title="' . translate('STR_BUY_SELL_OK_BUY', $language) . ': ' . number_format($row['price']) . '<br>' . translate('STR_BUY_SELL_OK_SELL', $language) . ': ' . number_format($sellprice) . '<br>' .translate('STR_BUY_SELL_OK_SELL', $language) . ': ' . number_format($sellpriceeu) . ' (EU 15%)"></div>';
		}else {
			$itemPrice .= '';
		}
		
		if($default_color_m != NULL or $default_color_f != NULL) {
			
			if ($default_color_m != NULL) {
				$ColorM = '<span style="display:inline-block; width:15px">M:</span> <span class="itemdefaultcolor" style="background-color: rgb('.$default_color_m.');"> </span>';
			}
			
			if ($default_color_f != NULL) {
				$ColorF = '<span style="display:inline-block; width:15px">F:</span> <span class="itemdefaultcolor" style="background-color: rgb('.$default_color_f.');"> </span>';
			}
			
			
			$defcolorsinvis = '<div class="cl"></div><div class="tooltip_templates" style="display:none"><span id="defcolours">'. $ColorM . '<br>' . $ColorF .'</span></div><div class="cl"></div>';
			
			
			$itemPrice .= '<div class="itemcolors restrictionTip" data-tooltip-content="#defcolours"></div>';
		}

		if ($client_reinvent_material_points != NULL){
			$itemRestrictions .= '<div class="reinvent_material_points restrictionTip" title="' . $client_reinvent_material_points . '"></div>';
		}
		
		