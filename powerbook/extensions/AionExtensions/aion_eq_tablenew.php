<?php

// extension credits, required by MW //
$wgExtensionCredits['variable'][] = array(
    'path'           => __FILE__,
    'name'           => 'Aion Item table',
    'author'         => 'Kelekelio',
    'url'            => 'https://aionpowerbook.com',
    'descriptionmsg' => 'Aion Item table',
    'version'		 => '0.1',
    'license-name' 	 => 'LICENSE',
);
// credits //


$wgHooks['ParserFirstCallInit'][] = 'AionEQTableNew';
$wgExtensionMessagesFiles['AionEQTableNew'] = __DIR__ . '/aion_eq_tablenew.i18n.php';
function AionEQTableNew( &$parser ) {
    $parser->setFunctionHook( 'itemtnew', 'AionEQTableParserNew' );
    return true;
}





function AionEQTableParserNew( &$parser, $arg1 ) {
    global $wgOut;

    $language      = language();

    include 'include/DBselect.php';
    $sql = $db->query("SELECT * FROM client_items WHERE id = $arg1")->fetchAll();

    foreach ($sql as $itemrow) {
        $itemid=$itemrow["id"];																					//item's ID
        $itemlevel=$itemrow["level"];																			//item's level
        $itemicon=strtolower($itemrow["icon_name"]);															//icon's name
        $quality=strtolower($itemrow["quality"]);																//item's quality
        $localization = !empty($itemrow['search_'.$language]) ? $itemrow['search_'.$language] : $itemrow['search_ko'];
        $min_damage = $itemrow["min_damage"];																	//minimum damage
        $max_damage = $itemrow["max_damage"];																	//maximum damage





        $hit_accuracy = $itemrow["hit_accuracy"];																//basic accuracy
        $parry = $itemrow["parry"];																				//basic parry
        $magical_hit_accuracy = $itemrow["magical_hit_accuracy"];												//basic magical accuracy
        $block = $itemrow["block"];																				//basic block
        $damage_reduce = $itemrow["damage_reduce"];																//basic damage reduction
        //6.0 stats
        $physical_power_boost = $itemrow["physical_power_boost"];
        $physical_power_boost_resist = $itemrow["physical_power_boost_resist"];
        $magical_power_boost = $itemrow["magical_power_boost"];
        $magical_power_boost_resist = $itemrow["magical_power_boost_resist"];





        $critical = $itemrow["critical"];																		//critical hit
        $magical_skill_boost = $itemrow["magical_skill_boost"];													//basic magic boost
        $magical_defend = $itemrow["magical_defend"];															//basic Magical Def
        $magical_skill_boost_resist = $itemrow["magical_skill_boost_resist"];									//basic Magic Suppression
        $magical_resist = $itemrow["magical_resist"];															//basic resist magic
        $physical_critical_reduce_rate = $itemrow["physical_critical_reduce_rate"];								//basic crit strike
        $physical_defend = $itemrow["physical_defend"];															//basic physical def
        $dodge = $itemrow["dodge"];																				//basic evasion
        $random_option_set = $itemrow["random_option_set"];
        $random_option_name = $itemrow["random_option_name"];
        $HP = $itemrow["max_hp"];

        if ($random_option_set != NULL or $random_option_name != NULL){
            $randomStatsfixed = '<div class="wrap weapon_property_bonus" style=""><p class="randombonuses"><img src="https://aionpowerbook.com/pbimg/random1.png" style="width:10px;height:10px"> Random Bonuses</p></div>';
        }






        //								Additional Stats								//

        include 'include/maptemplateSimple.php';

        $attributeHtml = '';

        foreach ($itemrow as $fieldName => $fieldValue) {
            if (!preg_match('/^bonus_attr[0-9]+$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $attributeHtml .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($attributeHtml)) {
            $additionalStats .= $attributeHtml;
        }





        //			chargeOne (2)			//
        $choneattributeHtml = '';

        foreach ($itemrow as $fieldName => $fieldValue) {
            if (!preg_match('/^bonus_attr_a[0-9]+$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $choneattributeHtml .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($choneattributeHtml) & $itemrow['charge_way'] == '2') {
            $chargeType = translate('STR_ITEM_CHARGE2_TARGET_CHARGE_LEVEL', $language);
            $chanrge = explode('%0', $chargeType);
            $chargeOne .= '<br>' . $chanrge[0] . '(1)<br>' . $choneattributeHtml;
        }
        //			chargeTwo (2)			//
        $chtwoattributeHtml = '';

        foreach ($itemrow as $fieldName => $fieldValue) {
            if (!preg_match('/^bonus_attr_b[0-9]+$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $chtwoattributeHtml .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($chtwoattributeHtml) & $itemrow['charge_way'] == '2') {
            $chargeType = translate('STR_ITEM_CHARGE2_TARGET_CHARGE_LEVEL', $language);
            $chanrge = explode('%0', $chargeType);
            $chargeOne .= '<br>' . $chanrge[0] . '(2)<br>' . $chtwoattributeHtml;
        }
        //			chargeOne (1)			//
        $condoneattributeHtml = '';

        foreach ($itemrow as $fieldName => $fieldValue) {
            if (!preg_match('/^bonus_attr_a[0-9]+$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $condoneattributeHtml .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($condoneattributeHtml) & $itemrow['charge_way'] == '1') {
            $chargeType = translate('STR_ITEM_CHARGE_TOOLTIP_BONUS_ATTR', $language);
            $chanrge = explode('%0', $chargeType);
            $chargeOne .= '<br>' . $chanrge[0] . '1' . $chanrge[1] . '<br>' . $condoneattributeHtml;
        }
        //			chargeTwo (1)			//
        $contwoattributeHtml = '';

        foreach ($itemrow as $fieldName => $fieldValue) {
            if (!preg_match('/^bonus_attr_b[0-9]+$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $contwoattributeHtml .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($contwoattributeHtml) & $itemrow['charge_way'] == '1') {
            $chargeType = translate('STR_ITEM_CHARGE_TOOLTIP_BONUS_ATTR', $language);
            $chanrge = explode('%0', $chargeType);
            $chargeOne .= '<br>' . $chanrge[0] . '2' . $chanrge[1] . '<br>' . $contwoattributeHtml;
        }
        //								Additional Stats								//














    }
// end of while //


//				ITEM TYPE					//

    // Sword
    if (($itemid >= 100000001) && ($itemid <= 100100000)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $min_damage . ' - ' . $max_damage . '</td>';
        $basicStats .= '<td class="ar">' . $hit_accuracy . '</td>';

        $basicStats .= '<td class="ar">' . $magical_hit_accuracy . '</td>';
        $basicStats .= '<td class="ar">' . $physical_power_boost . '</td>';
        $basicStats .= '<td class="al">';
    }
    // Mace magical
    elseif (($itemid >= 100100001) && ($itemid <= 100199999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $min_damage . ' - ' . $max_damage . '</td>';
        $basicStats .= '<td class="ar">' . $hit_accuracy . '</td>';

        $basicStats .= '<td class="ar">' . $magical_hit_accuracy . '</td>';
        $basicStats .= '<td class="ar">' . $magical_power_boost . '</td>';
        $basicStats .= '<td class="al">';
    }
    // Dagger
    elseif (($itemid >= 100200001) && ($itemid <= 100299999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $min_damage . ' - ' . $max_damage . '</td>';
        $basicStats .= '<td class="ar">' . $hit_accuracy . '</td>';

        $basicStats .= '<td class="ar">' . $magical_hit_accuracy . '</td>';
        $basicStats .= '<td class="ar">' . $physical_power_boost . '</td>';
        $basicStats .= '<td class="al">';
    }
    // Orb
    elseif (($itemid >= 100500001) && ($itemid <= 100599999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $min_damage . ' - ' . $max_damage . '</td>';
        $basicStats .= '<td class="ar">' . $hit_accuracy . '</td>';

        $basicStats .= '<td class="ar">' . $magical_hit_accuracy . '</td>';
        $basicStats .= '<td class="ar">' . $magical_power_boost . '</td>';
        $basicStats .= '<td class="al">';
    }
    // Spellbook
    elseif (($itemid >= 100600001) && ($itemid <= 100699999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $min_damage . ' - ' . $max_damage . '</td>';
        $basicStats .= '<td class="ar">' . $hit_accuracy . '</td>';

        $basicStats .= '<td class="ar">' . $magical_hit_accuracy . '</td>';
        $basicStats .= '<td class="ar">' . $magical_power_boost . '</td>';
        $basicStats .= '<td class="al">';
    }
    // Greatsword
    elseif (($itemid >= 100900001) && ($itemid <= 100999999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $min_damage . ' - ' . $max_damage . '</td>';
        $basicStats .= '<td class="ar">' . $hit_accuracy . '</td>';

        $basicStats .= '<td class="ar">' . $magical_hit_accuracy . '</td>';
        $basicStats .= '<td class="ar">' . $physical_power_boost . '</td>';
        $basicStats .= '<td class="al">';
    }
    // Polearm
    elseif (($itemid >= 101300001) && ($itemid <= 101399999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $min_damage . ' - ' . $max_damage . '</td>';
        $basicStats .= '<td class="ar">' . $hit_accuracy . '</td>';

        $basicStats .= '<td class="ar">' . $magical_hit_accuracy . '</td>';
        $basicStats .= '<td class="ar">' . $physical_power_boost . '</td>';
        $basicStats .= '<td class="al">';

    }
    // Staff
    elseif (($itemid >= 101500001) && ($itemid <= 101599999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $min_damage . ' - ' . $max_damage . '</td>';
        $basicStats .= '<td class="ar">' . $hit_accuracy . '</td>';

        $basicStats .= '<td class="ar">' . $magical_hit_accuracy . '</td>';
        $basicStats .= '<td class="ar">' . $physical_power_boost . '</td>';
        $basicStats .= '<td class="al">';
    }
    // Bow
    elseif (($itemid >= 101700001) && ($itemid <= 101799999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $min_damage . ' - ' . $max_damage . '</td>';
        $basicStats .= '<td class="ar">' . $hit_accuracy . '</td>';

        $basicStats .= '<td class="ar">' . $magical_hit_accuracy . '</td>';
        $basicStats .= '<td class="ar">' . $physical_power_boost . '</td>';
        $basicStats .= '<td class="al">';
    }
    // Aether Revolver
    elseif (($itemid >= 101800000) && ($itemid <= 101899999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $min_damage . ' - ' . $max_damage . '</td>';
        $basicStats .= '<td class="ar">' . $hit_accuracy . '</td>';

        $basicStats .= '<td class="ar">' . $magical_hit_accuracy . '</td>';
        $basicStats .= '<td class="ar">' . $magical_power_boost . '</td>';
        $basicStats .= '<td class="al">';
    }
    // Aether Cannon
    elseif (($itemid >= 101900000) && ($itemid <= 101999999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $min_damage . ' - ' . $max_damage . '</td>';
        $basicStats .= '<td class="ar">' . $hit_accuracy . '</td>';

        $basicStats .= '<td class="ar">' . $magical_hit_accuracy . '</td>';
        $basicStats .= '<td class="ar">' . $magical_power_boost . '</td>';
        $basicStats .= '<td class="al">';
    }
    // Stringed Instrument
    elseif (($itemid >= 102000000) && ($itemid <= 102099999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $min_damage . ' - ' . $max_damage . '</td>';
        $basicStats .= '<td class="ar">' . $hit_accuracy . '</td>';

        $basicStats .= '<td class="ar">' . $magical_hit_accuracy . '</td>';
        $basicStats .= '<td class="ar">' . $magical_power_boost . '</td>';
        $basicStats .= '<td class="al">';
    }
    // Aether Key
    elseif (($itemid >= 102100000) && ($itemid <= 102199999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $min_damage . ' - ' . $max_damage . '</td>';
        $basicStats .= '<td class="ar">' . $hit_accuracy . '</td>';

        $basicStats .= '<td class="ar">' . $magical_hit_accuracy . '</td>';
        $basicStats .= '<td class="ar">' . $magical_power_boost . '</td>';
        $basicStats .= '<td class="al">';
    }
    // Spray
    elseif (($itemid >= 102200006) && ($itemid <= 102299999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $min_damage . ' - ' . $max_damage . '</td>';
        $basicStats .= '<td class="ar">' . $hit_accuracy . '</td>';

        $basicStats .= '<td class="ar">' . $magical_hit_accuracy . '</td>';
        $basicStats .= '<td class="ar">' . $physical_power_boost . '</td>';
        $basicStats .= '<td class="al">';
    }
    // Plate armor
    elseif (($itemid >= 110600003) && ($itemid <= 110669999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $HP . '</td>';
        $basicStats .= '<td class="ar">' . $physical_power_boost_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_power_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 111600003) && ($itemid <= 111669999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $HP . '</td>';
        $basicStats .= '<td class="ar">' . $physical_power_boost_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_power_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 112600003) && ($itemid <= 112669999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $HP . '</td>';
        $basicStats .= '<td class="ar">' . $physical_power_boost_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_power_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 113600003) && ($itemid <= 113669999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $HP . '</td>';
        $basicStats .= '<td class="ar">' . $physical_power_boost_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_power_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 114600005) && ($itemid <= 114669999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $HP . '</td>';
        $basicStats .= '<td class="ar">' . $physical_power_boost_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_power_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    // Chain
    elseif (($itemid >= 110500001) && ($itemid <= 110569999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $HP . '</td>';
        $basicStats .= '<td class="ar">' . $physical_power_boost_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_power_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 111500001) && ($itemid <= 111569999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $HP . '</td>';
        $basicStats .= '<td class="ar">' . $physical_power_boost_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_power_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 112500001) && ($itemid <= 112569999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $HP . '</td>';
        $basicStats .= '<td class="ar">' . $physical_power_boost_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_power_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 113500001) && ($itemid <= 113569999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $HP . '</td>';
        $basicStats .= '<td class="ar">' . $physical_power_boost_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_power_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 114500001) && ($itemid <= 114569999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $HP . '</td>';
        $basicStats .= '<td class="ar">' . $physical_power_boost_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_power_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    //Leather
    elseif (($itemid >= 110300005) && ($itemid <= 110369999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $HP . '</td>';
        $basicStats .= '<td class="ar">' . $physical_power_boost_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_power_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 111300005) && ($itemid <= 111369999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $HP . '</td>';
        $basicStats .= '<td class="ar">' . $physical_power_boost_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_power_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 112300005) && ($itemid <= 112369999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $HP . '</td>';
        $basicStats .= '<td class="ar">' . $physical_power_boost_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_power_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 113300005) && ($itemid <= 113369999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $HP . '</td>';
        $basicStats .= '<td class="ar">' . $physical_power_boost_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_power_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 114300005) && ($itemid <= 114369999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $HP . '</td>';
        $basicStats .= '<td class="ar">' . $physical_power_boost_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_power_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    //Cloth
    elseif (($itemid >= 110100005) && ($itemid <= 110169999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $HP . '</td>';
        $basicStats .= '<td class="ar">' . $physical_power_boost_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_power_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }

    elseif (($itemid >= 110900001) && ($itemid <= 110969999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $HP . '</td>';
        $basicStats .= '<td class="ar">' . $physical_power_boost_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_power_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 110000001) && ($itemid <= 110069999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $HP . '</td>';
        $basicStats .= '<td class="ar">' . $physical_power_boost_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_power_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 111000001) && ($itemid <= 111069999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $HP . '</td>';
        $basicStats .= '<td class="ar">' . $physical_power_boost_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_power_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 112000001) && ($itemid <= 112069999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $HP . '</td>';
        $basicStats .= '<td class="ar">' . $physical_power_boost_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_power_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    //Clothes
    elseif (($itemid >= 113000001) && ($itemid <= 113069999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $HP . '</td>';
        $basicStats .= '<td class="ar">' . $physical_power_boost_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_power_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 114000001) && ($itemid <= 114069999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $HP . '</td>';
        $basicStats .= '<td class="ar">' . $physical_power_boost_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_power_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }


    elseif (($itemid >= 111100005) && ($itemid <= 111169999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $HP . '</td>';
        $basicStats .= '<td class="ar">' . $physical_power_boost_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_power_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 112100005) && ($itemid <= 112169999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $HP . '</td>';
        $basicStats .= '<td class="ar">' . $physical_power_boost_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_power_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 113100005) && ($itemid <= 113169999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $HP . '</td>';
        $basicStats .= '<td class="ar">' . $physical_power_boost_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_power_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 114100005) && ($itemid <= 114169999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $HP . '</td>';
        $basicStats .= '<td class="ar">' . $physical_power_boost_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_power_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    // Shield
    elseif (($itemid >= 115000011) && ($itemid <= 115069999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $block . '</td>';
        $basicStats .= '<td class="ar">' . $damage_reduce . '%</td>';
        $basicStats .= '<td class="ar">' . $physical_power_boost_resist . '<br>' . $magical_power_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    //Earrings
    elseif (($itemid >= 120000012) && ($itemid <= 120069999)) {					//Earrings
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $magical_resist . '</td>';
        $basicStats .= '<td class="ar">' . $hit_accuracy . '<br>' . $magical_hit_accuracy . '</td>';
        $basicStats .= '<td class="ar">' . $physical_power_boost . '<br> ' . $magical_power_boost . '</td>';
        $basicStats .= '<td class="al">';
    }
    //Necklace
    elseif (($itemid >= 121000013) && ($itemid <= 121069999)) {				//Necklace
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $magical_resist . '</td>';
        $basicStats .= '<td class="ar">' . $hit_accuracy . '<br>' . $magical_hit_accuracy . '</td>';
        $basicStats .= '<td class="ar">' . $physical_power_boost . '<br> ' . $magical_power_boost . '</td>';
        $basicStats .= '<td class="al">';
    }
    //Ring
    elseif (($itemid >= 122000010) && ($itemid <= 122069999)) {			//Ring
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $magical_resist . '</td>';
        $basicStats .= '<td class="ar">' . $hit_accuracy . '<br>' . $magical_hit_accuracy . '</td>';
        $basicStats .= '<td class="ar">' . $physical_power_boost . '<br> ' . $magical_power_boost . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 123000005) && ($itemid <= 123069999)) {			//Belt
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $magical_resist . '</td>';
        $basicStats .= '<td class="ar">' . $hit_accuracy . '<br>' . $magical_hit_accuracy . '</td>';
        $basicStats .= '<td class="ar">' . $physical_power_boost . '<br> ' . $magical_power_boost . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 125000005) && ($itemid <= 125369999)) {			//Head
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $HP . '</td>';
        $basicStats .= '<td class="ar">' . $physical_power_boost_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_power_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 187000000) && ($itemid <= 187069999)) {			//Wings
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $HP . '</td>';
        $basicStats .= '<td class="ar">' . $hit_accuracy . '<br>' . $magical_hit_accuracy . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 187100000) && ($itemid <= 187109999)) {			//Feather
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $HP . '</td>';
        $basicStats .= '<td class="ar">' . $hit_accuracy . '<br>' . $magical_hit_accuracy . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 187200000) && ($itemid <= 187209999)) {			//Bracelet
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $HP . '</td>';
        $basicStats .= '<td class="ar">' . $hit_accuracy . '<br>' . $magical_hit_accuracy . '</td>';
        $basicStats .= '<td class="al">';
    }
    else {

    }
//				ITEM TYPE					//

    $testvar = '<tr class="l1">' . $basicStats . $additionalStats . $chargeOne . $chargeTwo . $randomStatsfixed . '</td></tr>' ;

    return array( $testvar, 'noparse' => true, 'isHTML' => true );

}