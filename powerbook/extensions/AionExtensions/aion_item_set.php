<?php
$mysqlserver="mysqlhost";
$mysqlusername="login2";
$mysqlpassword="passw";
$link2=mysql_connect($mysqlserver, $mysqlusername, $mysqlpassword) or die ("Error connecting to mysql server: ".mysql_error());

$dbname = 'login';
mysql_select_db($dbname, $link2) or die ("Error selecting specified database on mysql server: ".mysql_error());
mysql_set_charset('utf8', $link2);
header('Content-type: text/html; charset=utf-8');

// extension credits, required by MW //
$wgExtensionCredits['variable'][] = array(
    'path'           => __FILE__,
    'name'           => 'Aion set Details',
    'author'         => 'Kelekelio',
    'url'            => 'https://aionpowerbook.com',
    'descriptionmsg' => 'Aion set Details',
    'version'		 => '0.1',
    'license-name' 	 => 'LICENSE',
);
// credits //


$wgHooks['ParserFirstCallInit'][] = 'AionSetDetails';
$wgExtensionMessagesFiles['AionSetDetails'] = __DIR__ . '/aion_item_set.i18n.php';
function AionSetDetails( &$parser ) {
    $parser->setFunctionHook( 'set', 'AionParserSetDetails' );
    return true;
}

function itemFromSet($name, $language)
{


    include 'include/DBselect.php';
    $result = $db->query("
SELECT *
FROM client_items
WHERE name = '$name'
", $id)->fetchArray();
	
	$id = $result["id"];
	$localizationExtra=!empty($result["search_" . $language]) ? $result["search_" . $language] : $result['search_ko'];
	$setitemquality = strtolower($result["quality"]);
	$extraicon_name=strtolower($result["icon_name"]);
	
	
			//								Additional Stats								//
include 'include/maptemplate.php';
		
		        $attributesetitemHtml = '';

        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^bonus_attr[0-9]+$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $attributesetitemHtml .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($attributesetitemHtml)) {
            $additionalsetitemStats .= '<dl class="property">' . $attributesetitemHtml . '</dl>';
        }


        if (isClassic() == "1") {
            $cl = "_c";
        }

return '<dl class="set_item"><dd class="thumb"><img src="https://aionpowerbook.com/item/icon' . $cl . '/' . $extraicon_name . '.png" alt=""></dd><dt><a class="tooltipzy col_' . $setitemquality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $id . '" tooltipID="' . $id . '" tooltiplang="' . $language . '" classic="' . isClassic() . '">' . $localizationExtra . '</a> </dt><dd><dl class="property">' .$basicsetitemstats. '</dl>' . $additionalsetitemStats . '</dd></dl>' . $newlinediv;
	
}

function CreateItemSetForCache($arg1) {
    global $wgOut;			    // $wgOut global out variable
    
    $language      = language();

    include 'include/DBselect.php';
    $sql = $db->query("
SELECT  * 
FROM client_setitem
WHERE id = '$arg1'")->fetchAll();

    foreach ($sql as $setrow) {
        $setid=$setrow["id"];																					//item's ID
        $item1=$setrow["item1"];
		$item2=$setrow["item2"];
		$item3=$setrow["item3"];
		$item4=$setrow["item4"];
		$item5=$setrow["item5"];
		$item6=$setrow["item6"];
		$item7=$setrow["item7"];
		$item9=$setrow["item9"];
		$item10=$setrow["item10"];
		$item11=$setrow["item11"];
		$item12=$setrow["item12"];
		$item13=$setrow["item13"];
		$piece_bonus2=$setrow["piece_bonus2"];
		$piece_bonus3=$setrow["piece_bonus3"];
		$piece_bonus4=$setrow["piece_bonus4"];
		$piece_bonus5=$setrow["piece_bonus5"];
		$piece_bonus6=$setrow["piece_bonus6"];
		$fullset_bonus=$setrow["fullset_bonus"];
		$description=$setrow["description"];
		
		global $newlinediv;
		

			
			
		
		
		
		if ($setrow["item1"] != NULL) {
			$setitems .= itemFromSet($item1, $language);
			}
		
		if ($setrow["item2"] != NULL) {
			$setitems .= itemFromSet($item2, $language);
				if ($setrow["item1"] != NULL) {
				$setitems .= '<div class="cl"></div>';
					}
			}
		
		if ($setrow["item3"] != NULL) {
			$setitems .= itemFromSet($item3, $language);
			if ($setrow["item2"] == NULL & $setrow["item1"] == NULL ){
				$setitems .= '';
							}
			elseif ($setrow["item2"] == NULL & $setrow["item1"] != NULL) {				
				$setitems .= '<div class="cl"></div>';
					}
			}
		if ($setrow["item4"] != NULL) {
			$setitems .= itemFromSet($item4, $language);
			if ($setrow["item1"] == NULL & $setrow["item2"] == NULL ) {
				$setitems .= '<div class="cl"></div>';
					}elseif ($setrow["item1"] != NULL & $setrow["item2"] == NULL ) {
						$setitems .= '';
					}else {
						$setitems .= '<div class="cl"></div>';
					}
			}
		
		if ($setrow["item5"] != NULL) {
			$setitems .= itemFromSet($item5, $language);
			}
		
		if ($setrow["item6"] != NULL) {
			$setitems .= itemFromSet($item6, $language);
			}
		if ($setrow["item7"] != NULL) {
			$setitems .= itemFromSet($item7, $language);
			}
		

		
		if ($setrow["item9"] != NULL) {
			$setitems .= itemFromSet($item9, $language);
			}
		if ($setrow["item10"] != NULL) {
			$setitems .= itemFromSet($item10, $language);
			}
		if ($setrow["item11"] != NULL) {
			$setitems .= itemFromSet($item11, $language);
			}
		if ($setrow["item12"] != NULL) {
			$setitems .= itemFromSet($item12, $language);
			}
		if ($setrow["item13"] != NULL) {
			$setitems .= itemFromSet($item13, $language);
			}
		
		

		
		
		


		//								Additional Stats								//
include 'include/maptemplate.php';


 
 
		//								set2								//
		// split on ;
		$bonusAttributes = explode(';', $piece_bonus2);
 
		// bonus attribute html
		$splittedAttributesHtml = '';
 
		foreach ($bonusAttributes as $attribute) {
			list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $attribute)));
			if (!isset($statMap[$attributeName])) {
        // not in $statMap, skip it
        continue;
		}
 
		$splittedAttributesHtml .= $statMap[$attributeName]($attributeValue);
		}

        if (!empty($splittedAttributesHtml)) {
			
			$seteffect = translate('STR_TOOLTIP_SETITEM_PIECE_BONUS', $language);
			$setnumber = explode('%0', $seteffect);
            $additionalsetStats .= '<div class="set_result"><em>' . $setnumber[0] . '2' . $setnumber[1] . '</em><dl class="property">' . $splittedAttributesHtml . '</dl></div>';
        }
		
		
		//								set3								//
		// split on ;
		$bonusAttributes = explode(';', $piece_bonus3);
 
		// bonus attribute html
		$splittedAttributesHtml = '';
 
		foreach ($bonusAttributes as $attribute) {
			list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $attribute)));
			if (!isset($statMap[$attributeName])) {
        // not in $statMap, skip it
        continue;
		}
 
		$splittedAttributesHtml .= $statMap[$attributeName]($attributeValue);
		}

        if (!empty($splittedAttributesHtml)) {
			
			$seteffect = translate('STR_TOOLTIP_SETITEM_PIECE_BONUS', $language);
			$setnumber = explode('%0', $seteffect);
            $additionalsetStats .= '<div class="set_result"><em>' . $setnumber[0] . '3' . $setnumber[1] . '</em><dl class="property">' . $splittedAttributesHtml . '</dl></div>';
        }		
		
		//								set4								//
		// split on ;
		$bonusAttributes = explode(';', $piece_bonus4);
 
		// bonus attribute html
		$splittedAttributesHtml = '';
 
		foreach ($bonusAttributes as $attribute) {
			list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $attribute)));
			if (!isset($statMap[$attributeName])) {
        // not in $statMap, skip it
        continue;
		}
 
		$splittedAttributesHtml .= $statMap[$attributeName]($attributeValue);
		}

        if (!empty($splittedAttributesHtml)) {
			
			$seteffect = translate('STR_TOOLTIP_SETITEM_PIECE_BONUS', $language);
			$setnumber = explode('%0', $seteffect);
            $additionalsetStats .= '<div class="set_result"><em>' . $setnumber[0] . '4' . $setnumber[1] . '</em><dl class="property">' . $splittedAttributesHtml . '</dl></div>';
        }		


		//								set5								//
		// split on ;
		$bonusAttributes = explode(';', $piece_bonus5);
 
		// bonus attribute html
		$splittedAttributesHtml = '';
 
		foreach ($bonusAttributes as $attribute) {
			list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $attribute)));
			if (!isset($statMap[$attributeName])) {
        // not in $statMap, skip it
        continue;
		}
 
		$splittedAttributesHtml .= $statMap[$attributeName]($attributeValue);
		}

        if (!empty($splittedAttributesHtml)) {
			
			$seteffect = translate('STR_TOOLTIP_SETITEM_PIECE_BONUS', $language);
			$setnumber = explode('%0', $seteffect);
            $additionalsetStats .= '<div class="set_result"><em>' . $setnumber[0] . '5' . $setnumber[1] . '</em><dl class="property">' . $splittedAttributesHtml . '</dl></div>';
        }		
		
		//								set6								//
		// split on ;
		$bonusAttributes = explode(';', $piece_bonus6);
 
		// bonus attribute html
		$splittedAttributesHtml = '';
 
		foreach ($bonusAttributes as $attribute) {
			list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $attribute)));
			if (!isset($statMap[$attributeName])) {
        // not in $statMap, skip it
        continue;
		}
 
		$splittedAttributesHtml .= $statMap[$attributeName]($attributeValue);
		}

        if (!empty($splittedAttributesHtml)) {
			
			$seteffect = translate('STR_TOOLTIP_SETITEM_PIECE_BONUS', $language);
			$setnumber = explode('%0', $seteffect);
            $additionalsetStats .= '<div class="set_result"><em>' . $setnumber[0] . '6' . $setnumber[1] . '</em><dl class="property">' . $splittedAttributesHtml . '</dl></div>';
        }		
		
		
		
		//								fullset								//
		// split on ;
		$bonusAttributes = explode(';', $fullset_bonus);
 
		// bonus attribute html
		$splittedAttributesHtml = '';
 
		foreach ($bonusAttributes as $attribute) {
			list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $attribute)));
			if (!isset($statMap[$attributeName])) {
        // not in $statMap, skip it
        continue;
		}
 
		$splittedAttributesHtml .= $statMap[$attributeName]($attributeValue);
		}

        if (!empty($splittedAttributesHtml)) {
			
			
            $additionalsetStats .= '<div class="set_result"><em>' . translate('STR_TOOLTIP_SETITEM_FULLSET_BONUS', $language) . '</em><dl class="property">' . $splittedAttributesHtml . '</dl></div>';
        }		

		
		
		
		
		
		
		
		
		
		
		
		

		
		
		









    }
// end of while //

	$setFinAL .= '<div class="hbody"><p setid="'.$setid.'" ><strong>' . translate($description, $language) . '</strong></p><div class="objects object_setitem"><div class="set_item_wrap">';
	$setFinAL .= $setitems;
	$setFinAL .= '</div>';
	$setFinAL .= '<div class="set_result">';
	$setFinAL .= $additionalsetStats;
	$setFinAL .= '</div></div></div><div class="cl"></div>';





	return $setFinAL;

}

function AionParserSetDetails( &$parser, $arg1 ) {
    global $wgOut;			    // $wgOut global out variable
    
    $language      = language();


    include 'include/DBselect.php';
    $sql = $db->query("
SELECT  * 
FROM client_setitem
WHERE id = '$arg1'")->fetchAll();

    foreach ($sql as $setrow) {
        $setid=$setrow["id"];																					//item's ID
        $item1=$setrow["item1"];
		$item2=$setrow["item2"];
		$item3=$setrow["item3"];
		$item4=$setrow["item4"];
		$item5=$setrow["item5"];
		$item6=$setrow["item6"];
		$item7=$setrow["item7"];
		$item9=$setrow["item9"];
		$item10=$setrow["item10"];
		$item11=$setrow["item11"];
		$item12=$setrow["item12"];
		$item13=$setrow["item13"];
		$piece_bonus2=$setrow["piece_bonus2"];
		$piece_bonus3=$setrow["piece_bonus3"];
		$piece_bonus4=$setrow["piece_bonus4"];
		$piece_bonus5=$setrow["piece_bonus5"];
		$piece_bonus6=$setrow["piece_bonus6"];
		$fullset_bonus=$setrow["fullset_bonus"];
		$description=$setrow["description"];
		
		global $newlinediv;
		

			
			
		
		
		
		if ($setrow["item1"] != NULL) {
			$setitems .= itemFromSet($item1, $language);
			}
		
		if ($setrow["item2"] != NULL) {
			$setitems .= itemFromSet($item2, $language);
				if ($setrow["item1"] != NULL) {
				$setitems .= '<div class="cl"></div>';
					}
			}
		
		if ($setrow["item3"] != NULL) {
			$setitems .= itemFromSet($item3, $language);
			if ($setrow["item2"] == NULL & $setrow["item1"] == NULL ){
				$setitems .= '';
							}
			elseif ($setrow["item2"] == NULL & $setrow["item1"] != NULL) {				
				$setitems .= '<div class="cl"></div>';
					}
			}
		if ($setrow["item4"] != NULL) {
			$setitems .= itemFromSet($item4, $language);
			if ($setrow["item1"] == NULL & $setrow["item2"] == NULL ) {
				$setitems .= '<div class="cl"></div>';
					}elseif ($setrow["item1"] != NULL & $setrow["item2"] == NULL ) {
						$setitems .= '';
					}else {
						$setitems .= '<div class="cl"></div>';
					}
			}
		
		if ($setrow["item5"] != NULL) {
			$setitems .= itemFromSet($item5, $language);
			}
		
		if ($setrow["item6"] != NULL) {
			$setitems .= itemFromSet($item6, $language);
			}
		if ($setrow["item7"] != NULL) {
			$setitems .= itemFromSet($item7, $language);
			}
		

		
		if ($setrow["item9"] != NULL) {
			$setitems .= itemFromSet($item9, $language);
			}
		if ($setrow["item10"] != NULL) {
			$setitems .= itemFromSet($item10, $language);
			}
		if ($setrow["item11"] != NULL) {
			$setitems .= itemFromSet($item11, $language);
			}
		if ($setrow["item12"] != NULL) {
			$setitems .= itemFromSet($item12, $language);
			}
		if ($setrow["item13"] != NULL) {
			$setitems .= itemFromSet($item13, $language);
			}
		
		

		
		
		


		//								Additional Stats								//
include 'include/maptemplate.php';


 
 
		//								set2								//
		// split on ;
		$bonusAttributes = explode(';', $piece_bonus2);
 
		// bonus attribute html
		$splittedAttributesHtml = '';
 
		foreach ($bonusAttributes as $attribute) {
			list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $attribute)));
			if (!isset($statMap[$attributeName])) {
        // not in $statMap, skip it
        continue;
		}
 
		$splittedAttributesHtml .= $statMap[$attributeName]($attributeValue);
		}

        if (!empty($splittedAttributesHtml)) {
			
			$seteffect = translate('STR_TOOLTIP_SETITEM_PIECE_BONUS', $language);
			$setnumber = explode('%0', $seteffect);
            $additionalsetStats .= '<div class="set_result"><em>' . $setnumber[0] . '2' . $setnumber[1] . '</em><dl class="property">' . $splittedAttributesHtml . '</dl></div>';
        }
		
		
		//								set3								//
		// split on ;
		$bonusAttributes = explode(';', $piece_bonus3);
 
		// bonus attribute html
		$splittedAttributesHtml = '';
 
		foreach ($bonusAttributes as $attribute) {
			list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $attribute)));
			if (!isset($statMap[$attributeName])) {
        // not in $statMap, skip it
        continue;
		}
 
		$splittedAttributesHtml .= $statMap[$attributeName]($attributeValue);
		}

        if (!empty($splittedAttributesHtml)) {
			
			$seteffect = translate('STR_TOOLTIP_SETITEM_PIECE_BONUS', $language);
			$setnumber = explode('%0', $seteffect);
            $additionalsetStats .= '<div class="set_result"><em>' . $setnumber[0] . '3' . $setnumber[1] . '</em><dl class="property">' . $splittedAttributesHtml . '</dl></div>';
        }		
		
		//								set4								//
		// split on ;
		$bonusAttributes = explode(';', $piece_bonus4);
 
		// bonus attribute html
		$splittedAttributesHtml = '';
 
		foreach ($bonusAttributes as $attribute) {
			list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $attribute)));
			if (!isset($statMap[$attributeName])) {
        // not in $statMap, skip it
        continue;
		}
 
		$splittedAttributesHtml .= $statMap[$attributeName]($attributeValue);
		}

        if (!empty($splittedAttributesHtml)) {
			
			$seteffect = translate('STR_TOOLTIP_SETITEM_PIECE_BONUS', $language);
			$setnumber = explode('%0', $seteffect);
            $additionalsetStats .= '<div class="set_result"><em>' . $setnumber[0] . '4' . $setnumber[1] . '</em><dl class="property">' . $splittedAttributesHtml . '</dl></div>';
        }		


		//								set5								//
		// split on ;
		$bonusAttributes = explode(';', $piece_bonus5);
 
		// bonus attribute html
		$splittedAttributesHtml = '';
 
		foreach ($bonusAttributes as $attribute) {
			list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $attribute)));
			if (!isset($statMap[$attributeName])) {
        // not in $statMap, skip it
        continue;
		}
 
		$splittedAttributesHtml .= $statMap[$attributeName]($attributeValue);
		}

        if (!empty($splittedAttributesHtml)) {
			
			$seteffect = translate('STR_TOOLTIP_SETITEM_PIECE_BONUS', $language);
			$setnumber = explode('%0', $seteffect);
            $additionalsetStats .= '<div class="set_result"><em>' . $setnumber[0] . '5' . $setnumber[1] . '</em><dl class="property">' . $splittedAttributesHtml . '</dl></div>';
        }		
		
		//								set6								//
		// split on ;
		$bonusAttributes = explode(';', $piece_bonus6);
 
		// bonus attribute html
		$splittedAttributesHtml = '';
 
		foreach ($bonusAttributes as $attribute) {
			list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $attribute)));
			if (!isset($statMap[$attributeName])) {
        // not in $statMap, skip it
        continue;
		}
 
		$splittedAttributesHtml .= $statMap[$attributeName]($attributeValue);
		}

        if (!empty($splittedAttributesHtml)) {
			
			$seteffect = translate('STR_TOOLTIP_SETITEM_PIECE_BONUS', $language);
			$setnumber = explode('%0', $seteffect);
            $additionalsetStats .= '<div class="set_result"><em>' . $setnumber[0] . '6' . $setnumber[1] . '</em><dl class="property">' . $splittedAttributesHtml . '</dl></div>';
        }		
		
		
		
		//								fullset								//
		// split on ;
		$bonusAttributes = explode(';', $fullset_bonus);
 
		// bonus attribute html
		$splittedAttributesHtml = '';
 
		foreach ($bonusAttributes as $attribute) {
			list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $attribute)));
			if (!isset($statMap[$attributeName])) {
        // not in $statMap, skip it
        continue;
		}
 
		$splittedAttributesHtml .= $statMap[$attributeName]($attributeValue);
		}

        if (!empty($splittedAttributesHtml)) {
			
			
            $additionalsetStats .= '<div class="set_result"><em>' . translate('STR_TOOLTIP_SETITEM_FULLSET_BONUS', $language) . '</em><dl class="property">' . $splittedAttributesHtml . '</dl></div>';
        }		

		
		
		
		
		
		
		
		
		
		
		
		

		
		
		









    }
// end of while //

	$setFinAL .= '<div class="hbody"><p setid="'.$setid.'" ><strong>' . translate($description, $language) . '</strong></p><div class="objects object_setitem"><div class="set_item_wrap">';
	$setFinAL .= $setitems;
	$setFinAL .= '</div>';
	$setFinAL .= '<div class="set_result">';
	$setFinAL .= $additionalsetStats;
	$setFinAL .= '</div></div></div><div class="cl"></div>';





	return array( $setFinAL, 'noparse' => true, 'isHTML' => true );

}