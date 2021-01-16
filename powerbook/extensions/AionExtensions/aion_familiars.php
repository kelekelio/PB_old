<?php

$wgExtensionCredits['variable'][] = array(
	'path'           => __FILE__,
	'name'           => 'Aion Minion',
	'author'         => 'Kelekelio',
	'url'            => 'https://aionpowerbook.com',
	'descriptionmsg' => 'Aion Minion',
	'version'		 => '1.0',
	'license-name' 	 => 'LICENSE',
);


function EvoMinion($name)
{
    include 'include/DBselect.php';
    $result = $db->query("
SELECT  * 
FROM familiars
WHERE name = '$name'
 ", $name)->fetchArray();


	$petid = $result["id"];
	$localizationPet = translate($result["description"], language());
	$extraicon_name=strtolower($result["icon_name"]);
	
	$peticonfinal = strtr($extraicon_name, array(
		".dds" => '',
));
	
	
	if ($petid != NULL) {
    return '<img src="https://aionpowerbook.com/pet/icon/' . $peticonfinal . '.png" alt="" class="thumb3"> <a class="col_ " href="https://aionpowerbook.com/powerbook/Minion/' . $petid . '">' . $localizationPet . '</a>';
	}else {
		return 'Unknown';
	}
}


 
$wgHooks['ParserFirstCallInit'][] = 'AionMinionFunction';
$wgExtensionMessagesFiles['AionMinion'] = __DIR__ . '/aion_familiars.i18n.php';
function AionMinionFunction( &$parser ) {
   $parser->setFunctionHook( 'familiarsdetails', 'AionMinionParserFunction' );
   return true;
}
function AionMinionParserFunction( &$parser, $arg1 ) {
global $wgOut;
$dbid = $_GET['dbid'];
$language = language();
global $wgLang;
$code = $wgLang->getCode();
 
if (isClassic() == "1") {
    $cl = "_cl";
}
 

$serv = $_SERVER['DOCUMENT_ROOT'];
$cachefile = $serv . '/powerbook/extensions/AionExtensions/cache/minion/'.$language.'/'.$dbid. $cl . '.html';
$exists = file_exists($cachefile);

if( !$exists || ( $exists && time() > strtotime('+31 days', filemtime($cachefile)) )) {


    include 'include/DBselect.php';
    $sql = $db->query("
SELECT  * 
FROM familiars
WHERE id = '$dbid' ")->fetchAll();

    foreach ($sql as $minionrow) {
        $id=$minionrow["id"];
		$name=$minionrow["name"];
		$desc = translate($minionrow["description"], language());
		$desc_long = translate($minionrow["desc_long"], language());
		$desc_story = translate($minionrow["desc_story"], language());
		$icon_name = strtolower($minionrow["icon_name"]);
		$tier_grade = $minionrow["tier_grade"];
		$star_grade = $minionrow["star_grade"];
		$fskill01 = $minionrow["fskill01"];
		$fskill02 = $minionrow["fskill02"];
		$evolve_cost = number_format($minionrow["evolve_cost"]);
		$evolve_item = $minionrow["evolve_item"];
		$evolve_item_num =  number_format($minionrow["evolve_item_num"]);
		$usefskill01_energy = number_format($minionrow["usefskill01_energy"]);
		$usefskill02_energy = $minionrow["usefskill02_energy"];
		$growth_cost = number_format($minionrow["growth_cost"]);
		$max_growth_value = number_format($minionrow["max_growth_value"]);
		$can_evolve = $minionrow["can_evolve"];
		$evolve_success_prob = $minionrow["evolve_success_prob"]/10;
		$evolve_fail_add_prob = $minionrow["evolve_fail_add_prob"]/10;
		$can_authorize = $minionrow["can_authorize"];
        $authorize_cost = number_format($minionrow["authorize_cost"]);


		$physical_bonus_attr1 = TranslateStatNamesOriginalTamplate($minionrow["physical_bonus_attr1"], $language);
		$physical_bonus_attr2 = TranslateStatNamesOriginalTamplate($minionrow["physical_bonus_attr2"], $language);
		$physical_bonus_attr3 = TranslateStatNamesOriginalTamplate($minionrow["physical_bonus_attr3"], $language);
		$physical_bonus_attr4 = TranslateStatNamesOriginalTamplate($minionrow["physical_bonus_attr4"], $language);
		$physical_bonus_attr5 = TranslateStatNamesOriginalTamplate($minionrow["physical_bonus_attr5"], $language);

		$magical_bonus_attr1 = TranslateStatNamesOriginalTamplate($minionrow["magical_bonus_attr1"], $language);
		$magical_bonus_attr2 = TranslateStatNamesOriginalTamplate($minionrow["magical_bonus_attr2"], $language);
		$magical_bonus_attr3 = TranslateStatNamesOriginalTamplate($minionrow["magical_bonus_attr3"], $language);
		$magical_bonus_attr4 = TranslateStatNamesOriginalTamplate($minionrow["magical_bonus_attr4"], $language);
		$magical_bonus_attr5 = TranslateStatNamesOriginalTamplate($minionrow["magical_bonus_attr5"], $language);

		$sub_physical_bonus_attr1 = TranslateStatNamesOriginalTamplate($minionrow["sub_physical_bonus_attr1"], $language);
		$sub_physical_bonus_attr2 = TranslateStatNamesOriginalTamplate($minionrow["sub_physical_bonus_attr2"], $language);
		$sub_physical_bonus_attr3 = TranslateStatNamesOriginalTamplate($minionrow["sub_physical_bonus_attr3"], $language);
		$sub_physical_bonus_attr4 = TranslateStatNamesOriginalTamplate($minionrow["sub_physical_bonus_attr4"], $language);
		$sub_physical_bonus_attr5 = TranslateStatNamesOriginalTamplate($minionrow["sub_physical_bonus_attr5"], $language);

		$sub_magical_bonus_attr1 = TranslateStatNamesOriginalTamplate($minionrow["sub_magical_bonus_attr1"], $language);
		$sub_magical_bonus_attr2 = TranslateStatNamesOriginalTamplate($minionrow["sub_magical_bonus_attr2"], $language);
		$sub_magical_bonus_attr3 = TranslateStatNamesOriginalTamplate($minionrow["sub_magical_bonus_attr3"], $language);
		$sub_magical_bonus_attr4 = TranslateStatNamesOriginalTamplate($minionrow["sub_magical_bonus_attr4"], $language);
		$sub_magical_bonus_attr5 = TranslateStatNamesOriginalTamplate($minionrow["sub_magical_bonus_attr5"], $language);



        $sub_equal_physical_bonus_attr1 = TranslateStatNamesOriginalTamplate($minionrow["sub_equal_physical_bonus_attr1"], $language);
        $sub_equal_physical_bonus_attr2 = TranslateStatNamesOriginalTamplate($minionrow["sub_equal_physical_bonus_attr2"], $language);
        $sub_equal_physical_bonus_attr3 = TranslateStatNamesOriginalTamplate($minionrow["sub_equal_physical_bonus_attr3"], $language);
        $sub_equal_physical_bonus_attr4 = TranslateStatNamesOriginalTamplate($minionrow["sub_equal_physical_bonus_attr4"], $language);
        $sub_equal_physical_bonus_attr5 = TranslateStatNamesOriginalTamplate($minionrow["sub_equal_physical_bonus_attr5"], $language);

		$sub_equal_magical_bonus_attr1 = TranslateStatNamesOriginalTamplate($minionrow["sub_equal_magical_bonus_attr1"], $language);
		$sub_equal_magical_bonus_attr2 = TranslateStatNamesOriginalTamplate($minionrow["sub_equal_magical_bonus_attr2"], $language);
		$sub_equal_magical_bonus_attr3 = TranslateStatNamesOriginalTamplate($minionrow["sub_equal_magical_bonus_attr3"], $language);
		$sub_equal_magical_bonus_attr4 = TranslateStatNamesOriginalTamplate($minionrow["sub_equal_magical_bonus_attr4"], $language);
		$sub_equal_magical_bonus_attr5 = TranslateStatNamesOriginalTamplate($minionrow["sub_equal_magical_bonus_attr5"], $language);



} 

if ($id == NULL) {
	return 'Invalid ID.';
}


		if ($fskill01 != NULL or $fskill02 != NULL) {
			
			$skinSkill .= '<div class="wrap item_set" style=""><dl class="item_set"><dt class="item_set">' . translate('STR_PLAYER_INFO_DIALOG__SKILL', language()) . ':<br></dt>';
			
			if ($fskill01 != NULL) {
			$skinSkill .= skinskill($fskill01, language()) . ' <span title="Skill Points">('. $usefskill01_energy .')</span>';
			$skinSkill .= '<br>';
			}
			if ($fskill02 != NULL) {
				
				$skinSkill .= skinskill($fskill02, language());
				} 
			$skinSkill .= '</dl></div>';
		} 
		




$gradeEvo = translate('STR_TOOLTIP_FAMILIAR_GRADE_INFO', language());
$GradeLevel = strtr($gradeEvo, array(
		"%0" => $tier_grade,
		"%1" => $star_grade,
		
		));



		
$Evoname = strtr($name, array(
		"_1" => '_2',
		"_2" => '_3',
		"_3" => '_4',
		"_4" => '_5',
		"_5" => '_6',
		"_6" => '_7',
		"_7" => '_8',		
		));



		
		$growth = '<div class="wrap weapon_enchant">' . translate('STR_FAMILIAR_GROWTH_GOLD', language()) . ':<br>
		<dl class="enchant"><dt class="rmanastone">' . translate('STR_FAMILIAR_DIALOG_GROWTHPOINT', language()) . '</dt><dd class="enchantstone_slot">' . $max_growth_value . '</dd></dl><br>
		<dl class="enchant"><dt class="rmanastone">' . translate('STR_GOLD', language()) . '</dt><dd class="enchantstone_slot">' . $growth_cost . '</dd></dl>
		</div>';

		if ($can_authorize == "TRUE") {
		    $authorize = '<div class="wrap weapon_enchant">Awakening cost:<br>
		<dl class="enchant"><dt class="rmanastone">' . translate('STR_GOLD', language()) . '</dt><dd class="enchantstone_slot">'.$authorize_cost.'</dd></dl><br>
		</div>';
        }
		
		


		
		
		if ($evolve_item != NULL) {

            if ($evolve_success_prob != null) {
                $addProb = $evolve_success_prob . "% (+" . $evolve_fail_add_prob . "%)";
            }

			$eqEvolution .= '<div class="wrap item_upgrade" style=""><dl class="item_upgrade"><dt>' . translate('STR_FAMILIAR_EVOLVE_GOLD', language()) . '</dt><dd class="item_upgrade">';
			
			
			// evolved item //

			$eqEvolution .= EvoMinion($Evoname) . ' '.$addProb.'<br>';
			
			$eqEvolution .= '<span class="treelist"></span>' . translate('STR_GOLD', language()) . ' ' . $evolve_cost . '<br>';
			
			if ($evolve_item != NULL) {
			$eqEvolution .= '<span class="treelist_end"></span>' . extraitem($evolve_item, language()) . ' ' . $evolve_item_num . '<br>';
				}
			
			$eqEvolution .= '</dd></dl></div>';
		}		





		$basicStats = '
                        <div class="wrap weapon_property_bonus" style="">
                                <dl>
                                    <dt>Physical</dt><dd></dd>
                                    <dt>Magical</dt><dd></dd>
                                    '.$physical_bonus_attr1.'
                                    '.$magical_bonus_attr1.'
                                    '.$physical_bonus_attr2.'
                                    '.$magical_bonus_attr2.'
                                    '.$physical_bonus_attr3.'
                                    '.$magical_bonus_attr3.'
                                    '.$physical_bonus_attr4.'
                                    '.$magical_bonus_attr4.'
                                    '.$physical_bonus_attr5.'
                                    '.$magical_bonus_attr5.'
                                </dl>
                        </div>';

		if ($sub_physical_bonus_attr1 != null) {
            $SubStats = '
                        <div class="wrap weapon_property_bonus" style="">
                                <dl>
                                    <dt>Sub Physical</dt><dd></dd>
                                    <dt>Sub Magical</dt><dd></dd>
                                    ' . $sub_physical_bonus_attr1 . '
                                    ' . $sub_magical_bonus_attr1 . '
                                    ' . $sub_physical_bonus_attr2 . '
                                    ' . $sub_magical_bonus_attr2 . '
                                    ' . $sub_physical_bonus_attr3 . '
                                    ' . $sub_magical_bonus_attr3 . '
                                    ' . $sub_physical_bonus_attr4 . '
                                    ' . $sub_magical_bonus_attr4 . '
                                    ' . $sub_physical_bonus_attr5 . '
                                    ' . $sub_magical_bonus_attr5 . '
                                </dl>
                        </div>';
        }

    if ($sub_equal_physical_bonus_attr1 != null) {
        $EqualSubStats = '
                        <div class="wrap weapon_property_bonus" style="">
                                <dl>
                                    <dt>Same-Sub Physical</dt><dd></dd>
                                    <dt>Same-Sub Magical</dt><dd></dd>
                                    ' . $sub_equal_physical_bonus_attr1 . '
                                    ' . $sub_equal_magical_bonus_attr1 . '
                                    ' . $sub_equal_physical_bonus_attr2 . '
                                    ' . $sub_equal_magical_bonus_attr2 . '
                                    ' . $sub_equal_physical_bonus_attr3 . '
                                    ' . $sub_equal_magical_bonus_attr3 . '
                                    ' . $sub_equal_physical_bonus_attr4 . '
                                    ' . $sub_equal_magical_bonus_attr4 . '
                                    ' . $sub_equal_physical_bonus_attr5 . '
                                    ' . $sub_equal_magical_bonus_attr5 . '
                                </dl>
                        </div>';
    }
		
		
 
    $petFinAL .= '<div class="hbody">';
    $petFinAL .= '<div class="objects object"><div class="head item_basic"><dl class="basic">';
    $petFinAL .= '<dd class="thumb"><img src="https://aionpowerbook.com/pet/icon/' . $icon_name . '.png" alt=""></dd>';
    $petFinAL .= '<dt class="name"><a class="bold" href="https://aionpowerbook.com/powerbook/Minion/' . $id . '">' . $desc . '</a> </dt>';
	$petFinAL .= '<dd class="summary"><p class="type"><em>' . translate('STR_ITEMINFO_TYPE', language()) . '</em> <span><a href="https://aionpowerbook.com/powerbook/Minions">' . translate('STR_FAMILIAR_DIALOG_MAIN', language()) . '</a></span></p>';
    $petFinAL .= '<dd class="summary"><p class="type"><em>' . $GradeLevel . '</em> <span></span></p>';	//item's type
    $petFinAL .=  $HDgear ;
	$petFinAL .=  $availableLeveleq ;												// available level, only applies to EQ
	$petFinAL .=  $MaxavailableLevel ;
    $petFinAL .=  $purchable_rank_min ; 											// minimum rank to buy the item
    $petFinAL .=  $usableMinrank ; 													// minimum rank to wear the item
    $petFinAL .=  $recommend_rank ; 												// recommended rank
    $petFinAL .= '<p class="desc">';												//opening of restrictions
    $petFinAL .=  $itemRestrictions ; 												// test stats, need to be replaced by proper restriction string
    $petFinAL .= '</p>';															//closing restrictions
    $petFinAL .= '</dd></dl></div>';												//closing <head item_basic>

    $petFinAL .=  $basicStats ;
    $petFinAL .=  $SubStats ;
    $petFinAL .=  $EqualSubStats ;

    $petFinAL .=  $additionalStats ;												// bonus stats
	$petFinAL .=  $randomStart ;
	$petFinAL .=  $randomStatsfixed ;
	$petFinAL .=  $randomEnd ;
	$petFinAL .=  $rideStats ;
    $petFinAL .=  $chargeOne ;														// level 1 charge details
    $petFinAL .=  $sub_physical_bonus ;														// level 1 charge details
    $petFinAL .=  $chargeTwo ;														// level 2 charge details


    $petFinAL .=  $enchantmentLevel ;												// maximum enchantment level
    $petFinAL .=  $maxUpgrade ;														// maximum upgrade level
    $petFinAL .=  $skin_skillStart ;
	$petFinAL .=  $skinSkill ;														// reserved for skin_skill
	$petFinAL .=  $skin_skillEnd ;
	$petFinAL .=  $enchantSkill ;													//Enchantment Skill Buffs
    $petFinAL .=  $limiteddesc ;													// High Daeva item description (X% increase damage when used by Y class)

	
	
	
	$petFinAL .=  $growth ;
	$petFinAL .=  $authorize ;

	$petFinAL .=  $petstuff ;
    $petFinAL .=  $extraCurrancy ;													// details about extra currency
	$petFinAL .=  $tradeIn ;														//trade in details (items)
	$petFinAL .=  $abyssPrice ;														// details about AP price
	$petFinAL .=  $eqEvolution ;													// Evolution trees
	$petFinAL .=  $assemble ;


	$petFinAL .=  '<div class="wrap basicitem_desc" style=""><p class="desc">' . $desc_long . '</p></div>' ;
	
	$petFinAL .= '<div class="wrap item_id"><table><tr><td>BBCode:</td><td><input style="width:250px" type="text" value="
[url=\'https://aionpowerbook.com/powerbook/Minion/' . $id . '/' . $code . '\'][img]https://aionpowerbook.com/pet/icon/' . $icon_name . '.png[/img] ' . $desc . '[/url]"></td></tr></table></dl></div>';	
	
    $petFinAL .= '</div><div class="cl"></div><div class="cl"></div></div>';

	
	$data = $petFinAL;
	$serv = $_SERVER['DOCUMENT_ROOT'];
	$cachefile = $serv . '/powerbook/extensions/AionExtensions/cache/minion/'.$language.'/'.$dbid. $cl .'.html';
	file_put_contents($cachefile, $data);
	
	$wgOut->AddHTML( $petFinAL );
	
    $DisplayTitle = '{{DISPLAYTITLE:' . $desc . '}}';														//displaytitle
    return array( $DisplayTitle, 'noparse' => false );				  												//displaytitle, for some reason addWikiText didn't output valid wiki {{DISPLAYTITLE:}}, return works just fine
	
	
	
}
else
{
    include 'include/DBselect.php';
    $result = $db->query("
SELECT  * 
FROM familiars
WHERE id = '$dbid' ", $dbid)->fetchArray();


		$petdesc=$result["description"];


if ($dbid != NULL){
	$localization=translate($petdesc, language());
}else {
	$localization = 'NO ID PROVIDED';
}
	
    // --> Don't forget to unserialize() or json_decode() if the data isn't a string!
	$servv = $_SERVER['DOCUMENT_ROOT'];
	$cachefilev = $servv . '/powerbook/extensions/AionExtensions/cache/minion/'.$language.'/'.$dbid. $cl .'.html';
	$wgOut->AddHTML(  "<!-- Cached copy, generated ".date('H:i', filemtime($cachefile))." -->\n" );
    $data = file_get_contents($cachefilev);
	$wgOut->AddHTML( $data );
	
	$DisplayTitle = '{{DISPLAYTITLE:' . $localization . '}}';
	return array( $DisplayTitle, 'noparse' => false );
}
	
	
	
	
	
	
	
	
	
}
 
 