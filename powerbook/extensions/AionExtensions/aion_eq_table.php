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


$wgHooks['ParserFirstCallInit'][] = 'AionEQTable';
$wgExtensionMessagesFiles['AionEQTable'] = __DIR__ . '/aion_eq_table.i18n.php';
function AionEQTable( &$parser ) {
    $parser->setFunctionHook( 'itemt', 'AionEQTableParser' );
    return true;
}





function AionEQTableParser( &$parser, $arg1 ) {
    global $wgOut;

    $language = language();

    include 'include/DBselect.php';
    $sql = $db->query("
SELECT *
FROM client_items
WHERE id = $arg1")->fetchAll();

    foreach ($sql as $itemrow) {
        $itemid=$itemrow["id"];																					//item's ID
        $itemlevel=$itemrow["level"];																			//item's level
        $itemicon=strtolower($itemrow["icon_name"]);															//icon's name
        $quality=strtolower($itemrow["quality"]);																//item's quality
        $localization = !empty($itemrow['search_'.$language]) ? $itemrow['search_'.$language] : $itemrow['search_ko'];
        $min_damage = $itemrow["min_damage"];																	//minimum damage
        $max_damage = $itemrow["max_damage"];																	//maximum damage
        $critical = $itemrow["critical"];																		//critical hit
        $hit_accuracy = $itemrow["hit_accuracy"];																//basic accuracy
        $parry = $itemrow["parry"];																				//basic parry
        $magical_skill_boost = $itemrow["magical_skill_boost"];													//basic magic boost
        $magical_hit_accuracy = $itemrow["magical_hit_accuracy"];												//basic magical accuracy
        $block = $itemrow["block"];																				//basic block
        $damage_reduce = $itemrow["damage_reduce"];																//basic damage reduction
        $magical_defend = $itemrow["magical_defend"];															//basic Magical Def
        $magical_skill_boost_resist = $itemrow["magical_skill_boost_resist"];									//basic Magic Suppression
        $magical_resist = $itemrow["magical_resist"];															//basic resist magic
        $physical_critical_reduce_rate = $itemrow["physical_critical_reduce_rate"];								//basic crit strike
        $physical_defend = $itemrow["physical_defend"];															//basic physical def
        $dodge = $itemrow["dodge"];																				//basic evasion





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
    if (($itemid >= 100000001) && ($itemid <= 100100000)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $min_damage . ' - ' . $max_damage . '</td>';
        $basicStats .= '<td class="ar">' . $hit_accuracy . '</td>';
        $basicStats .= '<td class="ar">' . $magical_skill_boost . '</td>';
        $basicStats .= '<td class="ar">' . $magical_hit_accuracy . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 100100001) && ($itemid <= 100200000)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $min_damage . ' - ' . $max_damage . '</td>';
        $basicStats .= '<td class="ar">' . $hit_accuracy . '</td>';
        $basicStats .= '<td class="ar">' . $magical_skill_boost . '</td>';
        $basicStats .= '<td class="ar">' . $magical_hit_accuracy . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 100200001) && ($itemid <= 100300000)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $min_damage . ' - ' . $max_damage . '</td>';
        $basicStats .= '<td class="ar">' . $hit_accuracy . '</td>';
        $basicStats .= '<td class="ar">' . $magical_skill_boost . '</td>';
        $basicStats .= '<td class="ar">' . $magical_hit_accuracy . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 100500001) && ($itemid <= 100600000)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $min_damage . ' - ' . $max_damage . '</td>';
        $basicStats .= '<td class="ar">' . $hit_accuracy . '</td>';
        $basicStats .= '<td class="ar">' . $magical_skill_boost . '</td>';
        $basicStats .= '<td class="ar">' . $magical_hit_accuracy . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 100600001) && ($itemid <= 100700000)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $min_damage . ' - ' . $max_damage . '</td>';
        $basicStats .= '<td class="ar">' . $hit_accuracy . '</td>';
        $basicStats .= '<td class="ar">' . $magical_skill_boost . '</td>';
        $basicStats .= '<td class="ar">' . $magical_hit_accuracy . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 100900001) && ($itemid <= 101000000)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $min_damage . ' - ' . $max_damage . '</td>';
        $basicStats .= '<td class="ar">' . $hit_accuracy . '</td>';
        $basicStats .= '<td class="ar">' . $magical_skill_boost . '</td>';
        $basicStats .= '<td class="ar">' . $magical_hit_accuracy . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 101300001) && ($itemid <= 101400000)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $min_damage . ' - ' . $max_damage . '</td>';
        $basicStats .= '<td class="ar">' . $hit_accuracy . '</td>';
        $basicStats .= '<td class="ar">' . $magical_skill_boost . '</td>';
        $basicStats .= '<td class="ar">' . $magical_hit_accuracy . '</td>';
        $basicStats .= '<td class="al">';

    }
    elseif (($itemid >= 101500001) && ($itemid <= 101600000)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $min_damage . ' - ' . $max_damage . '</td>';
        $basicStats .= '<td class="ar">' . $hit_accuracy . '</td>';
        $basicStats .= '<td class="ar">' . $magical_skill_boost . '</td>';
        $basicStats .= '<td class="ar">' . $magical_hit_accuracy . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 101700001) && ($itemid <= 101709999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $min_damage . ' - ' . $max_damage . '</td>';
        $basicStats .= '<td class="ar">' . $hit_accuracy . '</td>';
        $basicStats .= '<td class="ar">' . $magical_skill_boost . '</td>';
        $basicStats .= '<td class="ar">' . $magical_hit_accuracy . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 101800000) && ($itemid <= 101899999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $min_damage . ' - ' . $max_damage . '</td>';
        $basicStats .= '<td class="ar">' . $hit_accuracy . '</td>';
        $basicStats .= '<td class="ar">' . $magical_skill_boost . '</td>';
        $basicStats .= '<td class="ar">' . $magical_hit_accuracy . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 101900000) && ($itemid <= 101999999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $min_damage . ' - ' . $max_damage . '</td>';
        $basicStats .= '<td class="ar">' . $hit_accuracy . '</td>';
        $basicStats .= '<td class="ar">' . $magical_skill_boost . '</td>';
        $basicStats .= '<td class="ar">' . $magical_hit_accuracy . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 102000000) && ($itemid <= 102099999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $min_damage . ' - ' . $max_damage . '</td>';
        $basicStats .= '<td class="ar">' . $hit_accuracy . '</td>';
        $basicStats .= '<td class="ar">' . $magical_skill_boost . '</td>';
        $basicStats .= '<td class="ar">' . $magical_hit_accuracy . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 102100000) && ($itemid <= 102199999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $min_damage . ' - ' . $max_damage . '</td>';
        $basicStats .= '<td class="ar">' . $hit_accuracy . '</td>';
        $basicStats .= '<td class="ar">' . $magical_skill_boost . '</td>';
        $basicStats .= '<td class="ar">' . $magical_hit_accuracy . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 110600003) && ($itemid <= 110609999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $physical_defend . '</td>';
        $basicStats .= '<td class="ar">' . $magical_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_skill_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 111600003) && ($itemid <= 111609999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $physical_defend . '</td>';
        $basicStats .= '<td class="ar">' . $magical_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_skill_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 112600003) && ($itemid <= 112609999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $physical_defend . '</td>';
        $basicStats .= '<td class="ar">' . $magical_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_skill_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 113600003) && ($itemid <= 113609999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $physical_defend . '</td>';
        $basicStats .= '<td class="ar">' . $magical_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_skill_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 114600005) && ($itemid <= 114609999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $physical_defend . '</td>';
        $basicStats .= '<td class="ar">' . $magical_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_skill_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 110500001) && ($itemid <= 110559999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $physical_defend . '</td>';
        $basicStats .= '<td class="ar">' . $magical_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_skill_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 111500001) && ($itemid <= 111509999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $physical_defend . '</td>';
        $basicStats .= '<td class="ar">' . $magical_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_skill_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 112500001) && ($itemid <= 112509999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $physical_defend . '</td>';
        $basicStats .= '<td class="ar">' . $magical_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_skill_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 113500001) && ($itemid <= 113509999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $physical_defend . '</td>';
        $basicStats .= '<td class="ar">' . $magical_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_skill_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 114500001) && ($itemid <= 114509999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $physical_defend . '</td>';
        $basicStats .= '<td class="ar">' . $magical_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_skill_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 110300005) && ($itemid <= 110309999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $physical_defend . '</td>';
        $basicStats .= '<td class="ar">' . $magical_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_skill_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 111300005) && ($itemid <= 111309999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $physical_defend . '</td>';
        $basicStats .= '<td class="ar">' . $magical_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_skill_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 112300005) && ($itemid <= 112309999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $physical_defend . '</td>';
        $basicStats .= '<td class="ar">' . $magical_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_skill_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 113300005) && ($itemid <= 113309999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $physical_defend . '</td>';
        $basicStats .= '<td class="ar">' . $magical_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_skill_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 114300005) && ($itemid <= 114309999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $physical_defend . '</td>';
        $basicStats .= '<td class="ar">' . $magical_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_skill_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 110100005) && ($itemid <= 110109999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $physical_defend . '</td>';
        $basicStats .= '<td class="ar">' . $magical_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_skill_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }

    elseif (($itemid >= 110900001) && ($itemid <= 110909999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $physical_defend . '</td>';
        $basicStats .= '<td class="ar">' . $magical_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_skill_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 110000001) && ($itemid <= 110009999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $physical_defend . '</td>';
        $basicStats .= '<td class="ar">' . $magical_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_skill_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 111000001) && ($itemid <= 111009999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $physical_defend . '</td>';
        $basicStats .= '<td class="ar">' . $magical_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_skill_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 112000001) && ($itemid <= 112009999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $physical_defend . '</td>';
        $basicStats .= '<td class="ar">' . $magical_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_skill_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 113000001) && ($itemid <= 113009999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $physical_defend . '</td>';
        $basicStats .= '<td class="ar">' . $magical_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_skill_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 114000001) && ($itemid <= 114009999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $physical_defend . '</td>';
        $basicStats .= '<td class="ar">' . $magical_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_skill_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }


    elseif (($itemid >= 111100005) && ($itemid <= 111109999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $physical_defend . '</td>';
        $basicStats .= '<td class="ar">' . $magical_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_skill_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 112100005) && ($itemid <= 112109999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $physical_defend . '</td>';
        $basicStats .= '<td class="ar">' . $magical_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_skill_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 113100005) && ($itemid <= 113109999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $physical_defend . '</td>';
        $basicStats .= '<td class="ar">' . $magical_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_skill_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 114100005) && ($itemid <= 114109999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $physical_defend . '</td>';
        $basicStats .= '<td class="ar">' . $magical_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_skill_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 115000011) && ($itemid <= 115009999)) {
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $block . '</td>';
        $basicStats .= '<td class="ar">' . $damage_reduce . '%</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 120000012) && ($itemid <= 120019999)) {					//Earrings
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $physical_defend . '</td>';
        $basicStats .= '<td class="ar">' . $magical_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_skill_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 121000013) && ($itemid <= 121009999)) {				//Necklace
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $physical_defend . '</td>';
        $basicStats .= '<td class="ar">' . $magical_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_skill_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 122000010) && ($itemid <= 122009999)) {			//Ring
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $physical_defend . '</td>';
        $basicStats .= '<td class="ar">' . $magical_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_skill_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 123000005) && ($itemid <= 123009999)) {			//Belt
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $physical_defend . '</td>';
        $basicStats .= '<td class="ar">' . $magical_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_skill_boost_resist . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 125000005) && ($itemid <= 125309999)) {			//Head
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $physical_defend . '</td>';
        $basicStats .= '<td class="ar">' . $magical_resist . '</td>';
        $basicStats .= '<td class="ar">' . $magical_skill_boost_resist . '</td>';
        $basicStats .= '<td class="ar">' . $dodge . '</td>';
        $basicStats .= '<td class="al">';
    }
    elseif (($itemid >= 187000000) && ($itemid <= 187069999)) {			//Wings
        $basicStats .= '<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>';
        $basicStats .= '<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '" tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>';
        $basicStats .= '<td class="ar">' . $itemlevel . '</td>';
        $basicStats .= '<td class="al">';
    }
    else {

    }
//				ITEM TYPE					//

    $testvar = '<tr class="l1">' . $basicStats . $additionalStats . $chargeOne . $chargeTwo . '</td></tr>' ;

    return array( $testvar, 'noparse' => true, 'isHTML' => true );

}