<?php

// extension credits, required by MW //
$wgExtensionCredits['variable'][] = array(
    'path'           => __FILE__,
    'name'           => 'Aion Item Details',
    'author'         => 'Kelekelio',
    'url'            => 'https://aionpowerbook.com',
    'descriptionmsg' => 'Aion Item Details',
    'version'		 => '1.1',
    'license-name' 	 => 'LICENSE',
);
// credits //


$wgHooks['ParserFirstCallInit'][] = 'AionItemDetails';
$wgExtensionMessagesFiles['AionItemDetails'] = __DIR__ . '/aion_item_full.i18n.php';
function AionItemDetails( &$parser ) {
    $parser->setFunctionHook( 'itemdetails', 'AionParserItemDetails' );
    return true;
}




function videotooltip($id, $mesh)
{
    include 'include/DBselect.php';
    $result = $aionDB->query("SELECT * FROM item_videos WHERE id = '$id' or mesh = '$mesh' ", $id)->fetchArray();



    $video=$result["video"];

    if ($video != NULL) {
        $return = '<div class="itemvideo restrictionTip" title="Video"><a id="questvideo" href="https://www.youtube.com/watch?v=' . $video . '"></a></div>';
    }else {
        $return = '';
    }

    return $return;
}

function skillenchantold($name, $language)
{
    include 'include/DBselect.php';
    $result = $aionDB->query("
SELECT 
	s.id id,
	s.skillicon_name skillicon_name,
	t.body    ko,
	t.LAN_EN  en,
	t.LAN_DE  de,
	t.LAN_FR  fr,
	t.LAN_ES  es,
	t.LAN_IT  it,
	t.LAN_PL  pl,
	t.LAN_US  us
FROM client_skills s
LEFT JOIN translation_small t ON t.name = s.description
WHERE s.skill_group_name = '$name'
LIMIT 0,1 
", $arg1)->fetchArray();

    $localizationSkill = !empty($result[$language]) ? $result[$language] : $result['ko'];

    $skillicon_name=strtolower($result["skillicon_name"]);

    $skillicon = strtr($skillicon_name, array(
        ".dds" => '',
    ));

    return '<img src="https://aionpowerbook.com/skillicon/' . $skillicon . '.png" alt="" class="thumb3">  ' . $localizationSkill;
}

function Widgetfunction($id){

    include 'include/DBselect.php';
    $result = $db->query("SELECT  quality FROM client_items WHERE id = '$id' ", $id)->fetchArray();


    $quality = strtolower($result["quality"]);




    if (($id >= 100000001) && ($id <= 100100000)) {
        $widget = "{{#Widget:Sword_" . $quality . "|escape:'html'}}";
    }
    elseif (($id >= 100100001) && ($id <= 100199999)) {
        $widget = "{{#Widget:Mace_" . $quality . "|escape:'html'}}";
    }
    elseif (($id >= 100200001) && ($id <= 100299999)) {
        $widget = "{{#Widget:Dagger_" . $quality . "|escape:'html'}}";
    }
    elseif (($id >= 100500001) && ($id <= 100599999)) {
        $widget = "{{#Widget:Orb_" . $quality . "|escape:'html'}}";
    }
    elseif (($id >= 100600001) && ($id <= 100699999)) {
        $widget = "{{#Widget:Spellbook_" . $quality . "|escape:'html'}}";
    }
    elseif (($id >= 100900001) && ($id <= 100999999)) {
        $widget = "{{#Widget:Greatsword_" . $quality . "|escape:'html'}}";
    }
    elseif (($id >= 101300001) && ($id <= 101399999)) {
        $widget = "{{#Widget:Polearm_" . $quality . "|escape:'html'}}";
    }
    elseif (($id >= 101500001) && ($id <= 101599999)) {
        $widget = "{{#Widget:Staff_" . $quality . "|escape:'html'}}";
    }
    elseif (($id >= 101700001) && ($id <= 101799999)) {
        $widget = "{{#Widget:Bow_" . $quality . "|escape:'html'}}";
    }
    elseif (($id >= 101800000) && ($id <= 101899999)) {
        $widget = "{{#Widget:Aether Revolver_" . $quality . "|escape:'html'}}";
    }
    elseif (($id >= 101900000) && ($id <= 101999999)) {
        $widget = "{{#Widget:Aether Cannon_" . $quality . "|escape:'html'}}";
    }
    elseif (($id >= 102000000) && ($id <= 102099999)) {
        $widget = "{{#Widget:Stringed Instrument_" . $quality . "|escape:'html'}}";
    }
    elseif (($id >= 102100000) && ($id <= 102199999)) {
        $widget = "{{#Widget:Aether Key_" . $quality . "|escape:'html'}}";
    }
    elseif (($id >= 102200006) && ($id <= 102299999)) {
        $widget = "{{#Widget:Paint Rings_" . $quality . "|escape:'html'}}";
    }
    elseif (($id >= 110600003) && ($id <= 110669999)) {
        $widget = "{{#Widget:Plate_" . $quality . "|escape:'html'}}";
    }
    elseif (($id >= 111600003) && ($id <= 111669999)) {
        $widget = "{{#Widget:Plate_" . $quality . "|escape:'html'}}";
    }
    elseif (($id >= 112600003) && ($id <= 112669999)) {
        $widget = "{{#Widget:Plate_" . $quality . "|escape:'html'}}";
    }
    elseif (($id >= 113600003) && ($id <= 113669999)) {
        $widget = "{{#Widget:Plate_" . $quality . "|escape:'html'}}";
    }
    elseif (($id >= 114600005) && ($id <= 114669999)) {
        $widget = "{{#Widget:Plate_" . $quality . "|escape:'html'}}";
    }
    elseif (($id >= 110500001) && ($id <= 110569999)) {
        $widget = "{{#Widget:Chain_" . $quality . "|escape:'html'}}";
    }
    elseif (($id >= 111500001) && ($id <= 111569999)) {
        $widget = "{{#Widget:Chain_" . $quality . "|escape:'html'}}";
    }
    elseif (($id >= 112500001) && ($id <= 112569999)) {
        $widget = "{{#Widget:Chain_" . $quality . "|escape:'html'}}";
    }
    elseif (($id >= 113500001) && ($id <= 113569999)) {
        $widget = "{{#Widget:Chain_" . $quality . "|escape:'html'}}";
    }
    elseif (($id >= 114500001) && ($id <= 114569999)) {
        $widget = "{{#Widget:Chain_" . $quality . "|escape:'html'}}";
    }
    elseif (($id >= 110300005) && ($id <= 110369999)) {
        $widget = "{{#Widget:Leather_" . $quality . "|escape:'html'}}";
    }
    elseif (($id >= 111300005) && ($id <= 111369999)) {
        $widget = "{{#Widget:Leather_" . $quality . "|escape:'html'}}";
    }
    elseif (($id >= 112300005) && ($id <= 112369999)) {
        $widget = "{{#Widget:Leather_" . $quality . "|escape:'html'}}";
    }
    elseif (($id >= 113300005) && ($id <= 113369999)) {
        $widget = "{{#Widget:Leather_" . $quality . "|escape:'html'}}";
    }
    elseif (($id >= 114300005) && ($id <= 114369999)) {
        $widget = "{{#Widget:Leather_" . $quality . "|escape:'html'}}";
    }
    elseif (($id >= 110100005) && ($id <= 110169999)) {
        $widget = "{{#Widget:Cloth_" . $quality . "|escape:'html'}}";
    }
    elseif (($id >= 111100005) && ($id <= 111169999)) {
        $widget = "{{#Widget:Cloth_" . $quality . "|escape:'html'}}";
    }
    elseif (($id >= 112100005) && ($id <= 112169999)) {
        $widget = "{{#Widget:Cloth_" . $quality . "|escape:'html'}}";
    }
    elseif (($id >= 113100005) && ($id <= 113169999)) {
        $widget = "{{#Widget:Cloth_" . $quality . "|escape:'html'}}";
    }
    elseif (($id >= 114100005) && ($id <= 114169999)) {
        $widget = "{{#Widget:Cloth_" . $quality . "|escape:'html'}}";
    }
    elseif (($id >= 115000011) && ($id <= 115069999)) {
        $widget = "{{#Widget:Shield_" . $quality . "|escape:'html'}}";
    }
    elseif (($id >= 120000012) && ($id <= 120069999)) {
        $widget = "{{#Widget:Earrings_" . $quality . "|escape:'html'}}";
    }
    elseif (($id >= 121000013) && ($id <= 121069999)) {
        $widget = "{{#Widget:Necklace_" . $quality . "|escape:'html'}}";
    }
    elseif (($id >= 122000010) && ($id <= 122069999)) {
        $widget = "{{#Widget:Ring_" . $quality . "|escape:'html'}}";
    }
    elseif (($id >= 123000005) && ($id <= 123069999)) {
        $widget = "{{#Widget:Belt_" . $quality . "|escape:'html'}}";
    }
    elseif (($id >= 125000005) && ($id <= 125369999)) {
        $widget = "{{#Widget:Head_" . $quality . "|escape:'html'}}";
    }else {
        $widget = '';
    }







    return $widget;




}



include 'include/functions.php';
include 'include/ItemCheck.php'; // check if item contains something, where does it come from (if it's from a bundle), what items can be bought with it, etc
include 'include/checkCompareEU.php'; // check if item exists in the item table for EU and display comparer
include 'include/HouseObj.php';	// get details about house object
include 'include/rideStats.php';
include 'include/robotStats.php';
include 'include/client_item_skill_enhance.php';
include 'include/grind_item_transform.php';
include 'include/descriptionSkill.php';
include 'include/designInfo.php';
include 'include/randomStats.php';
include 'include/TitleStats.php';
include 'include/RealrandomStats.php';

include 'include/enchantbonus.php';
include 'include/evolution.php';
include 'include/CheckItem.php';
include 'include/skillenchant.php';


function petlink($name)
{
    include 'include/DBselect.php';
    $result = $db->query("
SELECT  * 
FROM toypets
WHERE name = '$name'
 ", $id)->fetchArray();



    $petid = $result["id"];
    $localizationPet = translate($result["description"], language());
    $extraicon_name=strtolower($result["icon_name"]);

    $peticonfinal = strtr($extraicon_name, array(
        ".dds" => '',
    ));

    return '<img src="https://aionpowerbook.com/pet/icon/' . $peticonfinal . '.png" alt="" class="thumb3"> <a class="col_ " href="https://aionpowerbook.com/powerbook/Pet/' . $petid . '">' . $localizationPet . '</a>';

}

function checkset($name)
{
    include 'include/DBselect.php';
    $result = $db->query("
select id
from client_setitem
where item1 = '$name' or item2 = '$name' or item3 = '$name' or item4 = '$name' or item5 = '$name' or item6 = '$name' or item7 = '$name' or item8 = '$name' or item9 = '$name' or item10 = '$name' or item11 = '$name' or item12 = '$name' or item13 = '$name' ", $id)->fetchArray();


    return  $result["id"];
}

function client_pc_skill_skin($n, $t, $l)
{

    include 'include/DBselect.php';
    $result = $db->query("SELECT * FROM client_pc_skill_skin WHERE name = '$n' ", $n)->fetchArray();


    $desc_long = translate($result["desc_long"], $l);

    if ($desc_long != NULL) {
        return '<div class="wrap basicitem_desc" style=""><p class="desc">' . $desc_long . '</p></div>';
    }else {
        return '';
    }

}











function AionParserItemDetails( &$parser, $arg1 ) {
    global $wgOut;
    global $wgUser;
    global $wgLang;             // $wgLang - global language variable
    $code = $wgLang->getCode();	// get language code, based on preferences

    $language = language();
    $dbid =  $_GET['dbid'];
    $dblang =  $_GET['dblang'];


    if (isClassic() == "1") {
        $cl = "_cl";
        $css = "classic";
    }




    $isQA = $_GET['qa'];


    $artititle =  $_GET['title'];
    $artiexpl = explode(':', $artititle);

    if ($artiexpl[0] == 'Item'  && $artiexpl[1] > 10000 && $dbid == NULL ) {
        $dbid = $artiexpl[1];
    }






    $wgOut->AddHTML('<div class="hbody">');

    $wgOut->addWikiText( '<div class="fullloadcompareEU" style="float:right; display:none" ><div class="loadcompareEU" ></div></div>' );


    $createWidget = Widgetfunction($dbid);

    if ($createWidget != NULL) {
        $wgOut->addWikiText( $createWidget );
    }





    $serv = $_SERVER['DOCUMENT_ROOT'];
    $cachefile = $serv . '/powerbook/extensions/AionExtensions/cache/itemdetails/'.$language.'/'.$dbid. $cl .'.html';
    $exists = file_exists($cachefile);


    if ( in_array( 'AQA', $wgUser->getGroups() ) ) {
        $DeleteCache = '<div class="compareEU delcache restrictionTip" title="Delete" compareurl="https://aionpowerbook.com/powerbook/extensions/AionExtensions/DelCache.php?id='.$dbid.'"></div>';
        $SysQA = '1';
    }else {
        $DeleteCache = '';
    }


    if( !$exists || ( $exists && time() > strtotime('+31 days', filemtime($cachefile)) )  || $isQA == '1'  || $SysQA == '1') {


        include 'include/DBselect.php';
        $sql = $db->query("SELECT * FROM client_items WHERE id = '$dbid' ")->fetchAll();

        foreach ($sql as $row) {
            $id=$row["id"];
            $name = $row["name"];
            $description = $row["description"];
            $desc_long = $row["desc_long"];
            $desc_long2 = $row["desc_long2"];
            $localization = !empty($row['search_'.$language]) ? $row['search_'.$language] : $row['search_ko'];
            $localization_desc = translate($row["desc_long"], $language);
            $localization_desc2 = translate($desc_long2, $language);
            $cooldown = $row['use_delay'];
            $mesh_pre = strtolower($row["mesh"]);
            $tooltip_type = $row['tooltip_type'];
            $clientversion = $row["client_version"];
            $item_type = $row['item_type'];
            $skin_skill = $row['skin_skill'];
            $extra_currency_item = $row['extra_currency_item'];
            $extra_currency_item_count = $row['extra_currency_item_count'];
            $ride_data_name = $row['ride_data_name'];
            $avaLevel = max($row["warrior"], $row["scout"], $row["mage"], $row["cleric"], $row["engineer"], $row["artist"], $row["fighter"], $row["knight"], $row["assassin"], $row["ranger"], $row["wizard"], $row["elementalist"], $row["chanter"], $row["priest"], $row["gunner"], $row["bard"], $row["rider"], $row["painter"]);
            $maxavaLevel = max($row["warrior_max"], $row["scout_max"], $row["mage_max"], $row["cleric_max"], $row["engineer_max"], $row["artist_max"], $row["fighter_max"], $row["knight_max"], $row["assassin_max"], $row["ranger_max"], $row["wizard_max"], $row["elementalist_max"], $row["chanter_max"], $row["priest_max"], $row["gunner_max"], $row["bard_max"], $row["rider_max"], $row["painter_max"]);
            $pack_count = $row["can_pack_count"];																//number of possible wrappings
            $ench_level = $row["max_enchant_value"];															//maximum enchantment level
            $max_Upgrade = $row["max_authorize"];																//maximum upgrade level
            $hit_count = $row["hit_count"];																		// number of hits a weapon makes
            $attack_delay = $row["attack_delay"];																//weapon's speed
            $weapSpeedNumber = (int) $attack_delay / 1000;
            $attack_type = $row["attack_type"];																	//attack type, physical or magical_skill_accuracy
            $min_damage = $row["min_damage"];																	//minimum damage
            $max_damage = $row["max_damage"];																	//maximum damage
            $critical = $row["critical"];																		//critical hit
            $hit_accuracy = $row["hit_accuracy"];																//basic accuracy
            $parry = $row["parry"];																				//basic parry
            $magical_skill_boost = $row["magical_skill_boost"];													//basic magic boost
            $magical_hit_accuracy = $row["magical_hit_accuracy"];												//basic magical accuracy

            //6.0 stats
            $physical_power_boost = $row["physical_power_boost"];
            $physical_power_boost_resist = $row["physical_power_boost_resist"];
            $magical_power_boost = $row["magical_power_boost"];
            $magical_power_boost_resist = $row["magical_power_boost_resist"];


            $block = $row["block"];																				//basic block
            $damage_reduce = $row["damage_reduce"];																//basic damage reduction
            $magical_defend = $row["magical_defend"];															//basic Magical Def
            $magical_skill_boost_resist = $row["magical_skill_boost_resist"];									//basic Magic Suppression
            $max_hp = $row["max_hp"];																			//basic HP
            $max_mp = $row["max_mp"];																			//basic HP
            $magical_resist = $row["magical_resist"];															//basic resist magic
            $physical_critical_reduce_rate = $row["physical_critical_reduce_rate"];								//basic crit strike
            $physical_defend = $row["physical_defend"];															//basic physical def
            $dodge = $row["dodge"];																				//basic evasion
            $option_slot_value = $row["option_slot_value"];														//manastone slots
            $option_slot_bonus = $row["option_slot_bonus"];														//bonus manastone slots
            $itemlevel=$row["level"];																			//item's level
            $itemiconbroken=strtolower($row["icon_name"]);															//icon's name
            $quality=strtolower($row["quality"]);																//item's quality
            $func_pet_name = $row["func_pet_name"];
            $disassembly_type = $row["disassembly_type"];
            $summon_housing_object = $row["summon_housing_object"];
            $custom_part_name = $row["custom_part_name"];
            $robot_name = $row["robot_name"];
            $activation_skill = $row["activation_skill"];
            $craft_recipe_info = $row["craft_recipe_info"];
            $random_option_set = $row["random_option_set"];
            $random_option_name = $row["random_option_name"];
            $polish_set_name = $row["polish_set_name"];

            $driven_enchant_type = strtolower($row["driven_enchant_type"]);
            $enchant_name = $row["enchant_name"];
            $authorize_name = $row["authorize_name"];
            $basic_skill_set_name = $row["basic_skill_set_name"];
            $default_color_m = $row["default_color_m"];
            $default_color_f = $row["default_color_f"];
            $cash_social = $row["cash_social"];
            $custom_idle_anim = $row["custom_idle_anim"];

            $odian_skill_desc_1 = $row["odian_skill_desc_1"];
            $odian_skill_name = $row["odian_skill_name"];

            $grind_slot_category = $row['grind_slot_category'];
            $grind_slot_opening_cost = $row['grind_slot_opening_cost'];
            $gain_skill_costume1 = $row['gain_skill_costume1'];

            $transform_group = $row['transform_group'];


            $cash_title = $row["cash_title"];

            $client_reinvent_material_points = client_reinvent_material($name);


            // icon fix
            $itemicon = strtr($itemiconbroken, array(
                ".dds" => '',
            ));


            if ($row['max_enchant_value'] > 0 && strtolower($row['driven_enchant_type']) == 'pve' ){
                if (($id >= 187401000) && ($id <= 187401099)) {
                    $enchanttooltip = enchantbonus($enchant_name, $language, 'client_item_enchanttable_emblem', $driven_enchant_type, $ench_level );
                }else {
                    $enchanttooltip = enchantbonus($enchant_name, $language, 'client_item_enchanttable', $driven_enchant_type, $quality );
                }
            }elseif ($row['max_authorize'] > 0 && strtolower($row['driven_enchant_type']) == 'pvp' ){
                $enchanttooltip = enchantbonus($authorize_name, $language, 'client_item_authorizetable', $driven_enchant_type, $quality );
            }elseif (strtolower($driven_enchant_type) == 'destruction') {
                $enchanttooltip = enchantbonus($enchant_name, $language, 'client_item_enchanttable', $driven_enchant_type, $quality );
            }elseif (strtolower($driven_enchant_type) == 'grind') {
                $enchanttooltip = enchantbonus($enchant_name, $language, 'client_item_enchanttable', $driven_enchant_type, $quality );
            }




            include 'include/overseas.php';





            /*
            old items that enhanced certain skills (high daeva)

            if ($row["skill_enchant_set_name"] != NULL){
                $enchantSkill = client_item_skill_enhance($row["skill_enchant_set_name"]);
            }else {
                $enchantSkill = '';
            }
            */

            if ($row["reinforce_skill_set_new"] != NULL){
                $enchantSkill .= client_item_skill_enhance($row["reinforce_skill_set_new"]);
            }else {
                $enchantSkill = '';
            }
            if ($transform_group != NULL){
                $enchantSkill .= grind_item_transform($transform_group);
            }





            // food stat multiplayer //
            if ($row["activation_level"] == '7') {
                $activation_level = 1;
            }else {
                $activation_level = $row["activation_level"];
            }
            // food stat multiplayer //


            // High Daeva item description, like +3% dmag agains warriors //
            if ($row["limit_attribute_desc"] != NULL){
                $limiteddesc = '<div class="wrap basicitem_desc" style=""><p class="desc">' . translate($row["limit_attribute_desc"], $language) . '</p></div>';
            }
            // HD item desc //


            $isaSet = checkset($name);

            if ($isaSet != NULL ) {
                $settitle = '<h2><span class="mw-headline" id="Set">Set</span></h2>';
                $setdetails .= '<br>';
                $setdetails .= CreateItemSetForCache($isaSet);
            }

            if (($id >= 100000001) && ($id <= 100100000) && $row["attack_range"] > 1.5) {
                $extendable = ' ' . translate('STR_TOOLTIP_EXTEND_WEAPON', $language) ;
            }

            if (($id >= 100100001) && ($id <= 100200000) && $row["attack_range"] > 2) {
                $extendable = ' ' . translate('STR_TOOLTIP_EXTEND_WEAPON', $language) ;
            }

            if  (($id >= 100200001) && ($id <= 100300000) && $row["attack_range"] > 2) {
                $extendable = ' ' . translate('STR_TOOLTIP_EXTEND_WEAPON', $language) ;
            }

            if (($id >= 100900001) && ($id <= 101000000) && $row["attack_range"] > 2) {
                $extendable = ' ' . translate('STR_TOOLTIP_EXTEND_WEAPON', $language) ;
            }

            if (($id >= 101300001) && ($id <= 101400000) && $row["attack_range"] > 2.5) {
                $extendable = ' ' . translate('STR_TOOLTIP_EXTEND_WEAPON', $language) ;
            }

            if (($id >= 101500001) && ($id <= 101600000) && $row["attack_range"] > 2) {
                $extendable = ' ' . translate('STR_TOOLTIP_EXTEND_WEAPON', $language) ;
            }


            $mesh = strtr($mesh_pre, array(
                "_body" => '',
                "_foot" => '',
                "_hand" => '',
                "_leg" => '',
                "_shoulder" => '',
            ));


            $abyss_point = number_format($row["abyss_point"]);
            $abyss_item_count = $row["abyss_item_count"];
            $abyss_item = $row["abyss_item"];
            $skin_skill = $row["skin_skill"];


            //		trade in $tradeIn	//
            $trade_in_item = $row["trade_in_item"];
            $trade_in_item_count = $row["trade_in_item_count"];
            $trade_in_item1 = $row["trade_in_item1"];
            $trade_in_item_count1 = $row["trade_in_item_count1"];
            $trade_in_item2 = $row["trade_in_item2"];
            $trade_in_item_count2 = $row["trade_in_item_count2"];

            if ($trade_in_item != NULL) {
                $tradeIn .= '<div class="wrap basicitem_price2"><dl class="price2"><dt>' . translate('STR_REGISTER_ITEM_DIALOG', $language) . ':</dt><dd class="price2">';
                $tradeIn .= extraitem($trade_in_item, $language);
                $tradeIn .= '  ' . $trade_in_item_count;
                if($trade_in_item1 != NULL) {
                    $tradeIn .= '<br>';
                    $tradeIn .= extraitem($trade_in_item1, $language);
                    $tradeIn .= '  ' . $trade_in_item_count1;
                }
                if($trade_in_item2 != NULL) {
                    $tradeIn .= '<br>';
                    $tradeIn .= extraitem($trade_in_item2, $language);
                    $tradeIn .= '  ' . $trade_in_item_count2;
                }
                $tradeIn .= '</dd></dl></div>';
            }


            if ($skin_skill != NULL) {
                $skinSkill .= '<div class="wrap item_set" style=""><dl class="item_set"><dt class="item_set">' . translate('STR_PLAYER_INFO_DIALOG__SKILL', $language) . ':<br></dt>';
                $skinSkill .= skinskill($skin_skill, $language);
                $skinSkill .= '</dl></div>';
            }

            if ($basic_skill_set_name != NULL) {
                $skinSkill .= '<div class="wrap item_set" style=""><dl class="item_set"><dt class="item_set">' . translate('STR_PLAYER_INFO_DIALOG__SKILL', $language) . ':<br></dt>';

                if ($basic_skill_set_name == 'S8_Set1_Weapon') {
                    $skinSkill .= skinskill('world_S8_Skill_Quickness', $language);
                }elseif ($basic_skill_set_name == 'Deva_Set1_Weapon') {
                    $skinSkill .= skinskill('Deva_WeaponSkill_G1', $language);
                }else {

                    $skinSkilltemp = skinskill($basic_skill_set_name, $language);
                    if ($skinSkilltemp != NULL) {
                        $skinSkill .= $skinSkilltemp;
                    }else {
                        $skinSkill .= 'Unknown';
                    }
                }


                $skinSkill .= skinskill($Skillsetname, $language);
                $skinSkill .= '</dl></div>';
            }

            if ($extra_currency_item != NULL) {
                $extraCurrancy .= '<div class="wrap basicitem_price2"><dl class="price2"><dt>' . translate('STR_ITEM_PRICE', $language) . ':</dt><dd class="price2">';
                $extraCurrancy .= extraitem($extra_currency_item, $language);
                $extraCurrancy .= '  ' . number_format($extra_currency_item_count);
                $extraCurrancy .= '</dd></dl></div>';
            }

            if ($abyss_point > 0 or $abyss_item != NULL) {
                $abyssPrice .= '<div class="wrap basicitem_price2"><dl class="price2"><dt>' . translate('STR_ITEM_PRICE', $language) . ':</dt><dd class="price2">';
                if ($abyss_point > 0) {
                    $abyssPrice .= '<img src="https://aionpowerbook.com/images/abysspoint.png" alt="" class="thumb3">  <a href="https://aionpowerbook.com/powerbook/Abyss Points">' . translate('STR_ABYSS_POINT', $language) . '</a>  ' . $abyss_point . '<br>';
                }
                if ($abyss_item != NULL) {
                    $abyssPrice .= extraitem($abyss_item, $language);

                    $abyssPrice .= '  ' . number_format($abyss_item_count);
                }
                $abyssPrice .= '</dd></dl></div>';
            }




            if ($row["item_highdeva"] == 'TRUE') {
                $hdonly = translate('STR_TOOLTIP_PC_RACE_FORMAT', $language);

                $highdaevaonly = strtr($hdonly, array(
                    "%0" => translate('STR_TOOLTIP_PC_HIGHDEVA', $language),
                ));

                $HDgear	= '<p class="learn_level">'.$highdaevaonly.'</p>';

            }


            include 'include/leveldata.php';


            if($row["usable_rank_min"] == '18') {
                $rankMin = translate('STR_TOOLTIP_USE_RANK', $language);
                $rank = explode('%0', $rankMin);
                $usableMinrank = '<p class="usable_rank_min">' . $rank[0] . translate('STR_Abyssrank_dark_18', $language) . $rank[1] . '</p><dl class="property">';
            }elseif($row["usable_rank_min"] == '17') {
                $rankMin = translate('STR_TOOLTIP_USE_RANK', $language);
                $rank = explode('%0', $rankMin);
                $usableMinrank = '<p class="usable_rank_min">' . $rank[0] . translate('STR_Abyssrank_dark_17', $language) . $rank[1] . '</p><dl class="property">';
            }elseif($row["usable_rank_min"] == '16') {
                $rankMin = translate('STR_TOOLTIP_USE_RANK', $language);
                $rank = explode('%0', $rankMin);
                $usableMinrank = '<p class="usable_rank_min">' . $rank[0] . translate('STR_Abyssrank_dark_16', $language) . $rank[1] . '</p><dl class="property">';
            }elseif($row["usable_rank_min"] == '15') {
                $rankMin = translate('STR_TOOLTIP_USE_RANK', $language);
                $rank = explode('%0', $rankMin);
                $usableMinrank = '<p class="usable_rank_min">' . $rank[0] . translate('STR_Abyssrank_dark_15', $language) . $rank[1] . '</p><dl class="property">';
            }elseif($row["usable_rank_min"] == '14') {
                $rankMin = translate('STR_TOOLTIP_USE_RANK', $language);
                $rank = explode('%0', $rankMin);
                $usableMinrank = '<p class="usable_rank_min">' . $rank[0] . translate('STR_Abyssrank_dark_14', $language) . $rank[1] . '</p><dl class="property">';
            }elseif($row["usable_rank_min"] == '13') {
                $rankMin = translate('STR_TOOLTIP_USE_RANK', $language);
                $rank = explode('%0', $rankMin);
                $usableMinrank = '<p class="usable_rank_min">' . $rank[0] . translate('STR_Abyssrank_dark_13', $language) . $rank[1] . '</p><dl class="property">';
            }elseif($row["usable_rank_min"] == '12') {
                $rankMin = translate('STR_TOOLTIP_USE_RANK', $language);
                $rank = explode('%0', $rankMin);
                $usableMinrank = '<p class="usable_rank_min">' . $rank[0] . translate('STR_Abyssrank_dark_12', $language) . $rank[1] . '</p><dl class="property">';
            }elseif($row["usable_rank_min"] == '11') {
                $rankMin = translate('STR_TOOLTIP_USE_RANK', $language);
                $rank = explode('%0', $rankMin);
                $usableMinrank = '<p class="usable_rank_min">' . $rank[0] . translate('STR_Abyssrank_dark_11', $language) . $rank[1] . '</p><dl class="property">';
            }elseif($row["usable_rank_min"] == '10') {
                $rankMin = translate('STR_TOOLTIP_USE_RANK', $language);
                $rank = explode('%0', $rankMin);
                $usableMinrank = '<p class="usable_rank_min">' . $rank[0] . translate('STR_Abyssrank_dark_10', $language) . $rank[1] . '</p><dl class="property">';
            }elseif($row["usable_rank_min"] == '9') {
                $rankMin = translate('STR_TOOLTIP_USE_RANK', $language);
                $rank = explode('%0', $rankMin);
                $usableMinrank = '<p class="usable_rank_min">' . $rank[0] . translate('STR_Abyssrank_dark_09', $language) . $rank[1] . '</p><dl class="property">';
            }elseif($row["usable_rank_min"] == '8') {
                $rankMin = translate('STR_TOOLTIP_USE_RANK', $language);
                $rank = explode('%0', $rankMin);
                $usableMinrank = '<p class="usable_rank_min">' . $rank[0] . translate('STR_Abyssrank_dark_08', $language) . $rank[1] . '</p><dl class="property">';
            }elseif($row["usable_rank_min"] == '7') {
                $rankMin = translate('STR_TOOLTIP_USE_RANK', $language);
                $rank = explode('%0', $rankMin);
                $usableMinrank = '<p class="usable_rank_min">' . $rank[0] . translate('STR_Abyssrank_dark_07', $language) . $rank[1] . '</p><dl class="property">';
            }elseif($row["usable_rank_min"] == '6') {
                $rankMin = translate('STR_TOOLTIP_USE_RANK', $language);
                $rank = explode('%0', $rankMin);
                $usableMinrank = '<p class="usable_rank_min">' . $rank[0] . translate('STR_Abyssrank_dark_06', $language) . $rank[1] . '</p><dl class="property">';
            }elseif($row["usable_rank_min"] == '5') {
                $rankMin = translate('STR_TOOLTIP_USE_RANK', $language);
                $rank = explode('%0', $rankMin);
                $usableMinrank = '<p class="usable_rank_min">' . $rank[0] . translate('STR_Abyssrank_dark_05', $language) . $rank[1] . '</p><dl class="property">';
            }elseif($row["usable_rank_min"] == '4') {
                $rankMin = translate('STR_TOOLTIP_USE_RANK', $language);
                $rank = explode('%0', $rankMin);
                $usableMinrank = '<p class="usable_rank_min">' . $rank[0] . translate('STR_Abyssrank_dark_04', $language) . $rank[1] . '</p><dl class="property">';
            }elseif($row["usable_rank_min"] == '3') {
                $rankMin = translate('STR_TOOLTIP_USE_RANK', $language);
                $rank = explode('%0', $rankMin);
                $usableMinrank = '<p class="usable_rank_min">' . $rank[0] . translate('STR_Abyssrank_dark_03', $language) . $rank[1] . '</p><dl class="property">';
            }elseif($row["usable_rank_min"] == '2') {
                $rankMin = translate('STR_TOOLTIP_USE_RANK', $language);
                $rank = explode('%0', $rankMin);
                $usableMinrank = '<p class="usable_rank_min">' . $rank[0] . translate('STR_Abyssrank_dark_02', $language) . $rank[1] . '</p><dl class="property">';
            }elseif($row["usable_rank_min"] == '1') {
                $rankMin = translate('STR_TOOLTIP_USE_RANK', $language);
                $rank = explode('%0', $rankMin);
                $usableMinrank = '<p class="usable_rank_min">' . $rank[0] . translate('STR_Abyssrank_dark_01', $language) . $rank[1] . '</p><dl class="property">';
            }else {
                $usableMinrank = '';
            }



            if($row["purchable_rank_min"] == '18') {
                $purchRank = translate('STR_TOOLTIP_ITEM_PURCHABLE_ALLOW_RANK', $language);
                $PuRank = explode('%0', $purchRank);
                $purchable_rank_min = '<p class="purchable_rank_min">' . $PuRank[0] . translate('STR_Abyssrank_dark_18', $language) . $PuRank[1] . '</p><dl class="property">';
            }elseif($row["purchable_rank_min"] == '17') {
                $purchRank = translate('STR_TOOLTIP_ITEM_PURCHABLE_ALLOW_RANK', $language);
                $PuRank = explode('%0', $purchRank);
                $purchable_rank_min = '<p class="purchable_rank_min">' . $PuRank[0] . translate('STR_Abyssrank_dark_17', $language) . $PuRank[1] . '</p><dl class="property">';
            }elseif($row["purchable_rank_min"] == '16') {
                $purchRank = translate('STR_TOOLTIP_ITEM_PURCHABLE_ALLOW_RANK', $language);
                $PuRank = explode('%0', $purchRank);
                $purchable_rank_min = '<p class="purchable_rank_min">' . $PuRank[0] . translate('STR_Abyssrank_dark_16', $language) . $PuRank[1] . '</p><dl class="property">';
            }elseif($row["purchable_rank_min"] == '15') {
                $purchRank = translate('STR_TOOLTIP_ITEM_PURCHABLE_ALLOW_RANK', $language);
                $PuRank = explode('%0', $purchRank);
                $purchable_rank_min = '<p class="purchable_rank_min">' . $PuRank[0] . translate('STR_Abyssrank_dark_15', $language) . $PuRank[1] . '</p><dl class="property">';
            }elseif($row["purchable_rank_min"] == '14') {
                $purchRank = translate('STR_TOOLTIP_ITEM_PURCHABLE_ALLOW_RANK', $language);
                $PuRank = explode('%0', $purchRank);
                $purchable_rank_min = '<p class="purchable_rank_min">' . $PuRank[0] . translate('STR_Abyssrank_dark_14', $language) . $PuRank[1] . '</p><dl class="property">';
            }elseif($row["purchable_rank_min"] == '13') {
                $purchRank = translate('STR_TOOLTIP_ITEM_PURCHABLE_ALLOW_RANK', $language);
                $PuRank = explode('%0', $purchRank);
                $purchable_rank_min = '<p class="purchable_rank_min">' . $PuRank[0] . translate('STR_Abyssrank_dark_13', $language) . $PuRank[1] . '</p><dl class="property">';
            }elseif($row["purchable_rank_min"] == '12') {
                $purchRank = translate('STR_TOOLTIP_ITEM_PURCHABLE_ALLOW_RANK', $language);
                $PuRank = explode('%0', $purchRank);
                $purchable_rank_min = '<p class="purchable_rank_min">' . $PuRank[0] . translate('STR_Abyssrank_dark_12', $language) . $PuRank[1] . '</p><dl class="property">';
            }elseif($row["purchable_rank_min"] == '11') {
                $purchRank = translate('STR_TOOLTIP_ITEM_PURCHABLE_ALLOW_RANK', $language);
                $PuRank = explode('%0', $purchRank);
                $purchable_rank_min = '<p class="purchable_rank_min">' . $PuRank[0] . translate('STR_Abyssrank_dark_11', $language) . $PuRank[1] . '</p><dl class="property">';
            }elseif($row["purchable_rank_min"] == '10') {
                $purchRank = translate('STR_TOOLTIP_ITEM_PURCHABLE_ALLOW_RANK', $language);
                $PuRank = explode('%0', $purchRank);
                $purchable_rank_min = '<p class="purchable_rank_min">' . $PuRank[0] . translate('STR_Abyssrank_dark_10', $language) . $PuRank[1] . '</p><dl class="property">';
            }elseif($row["purchable_rank_min"] == '9') {
                $purchRank = translate('STR_TOOLTIP_ITEM_PURCHABLE_ALLOW_RANK', $language);
                $PuRank = explode('%0', $purchRank);
                $purchable_rank_min = '<p class="purchable_rank_min">' . $PuRank[0] . translate('STR_Abyssrank_dark_09', $language) . $PuRank[1] . '</p><dl class="property">';
            }elseif($row["purchable_rank_min"] == '8') {
                $purchRank = translate('STR_TOOLTIP_ITEM_PURCHABLE_ALLOW_RANK', $language);
                $PuRank = explode('%0', $purchRank);
                $purchable_rank_min = '<p class="purchable_rank_min">' . $PuRank[0] . translate('STR_Abyssrank_dark_08', $language) . $PuRank[1] . '</p><dl class="property">';
            }elseif($row["purchable_rank_min"] == '7') {
                $purchRank = translate('STR_TOOLTIP_ITEM_PURCHABLE_ALLOW_RANK', $language);
                $PuRank = explode('%0', $purchRank);
                $purchable_rank_min = '<p class="purchable_rank_min">' . $PuRank[0] . translate('STR_Abyssrank_dark_07', $language) . $PuRank[1] . '</p><dl class="property">';
            }elseif($row["purchable_rank_min"] == '6') {
                $purchRank = translate('STR_TOOLTIP_ITEM_PURCHABLE_ALLOW_RANK', $language);
                $PuRank = explode('%0', $purchRank);
                $purchable_rank_min = '<p class="purchable_rank_min">' . $PuRank[0] . translate('STR_Abyssrank_dark_06', $language) . $PuRank[1] . '</p><dl class="property">';
            }elseif($row["purchable_rank_min"] == '5') {
                $purchRank = translate('STR_TOOLTIP_ITEM_PURCHABLE_ALLOW_RANK', $language);
                $PuRank = explode('%0', $purchRank);
                $purchable_rank_min = '<p class="purchable_rank_min">' . $PuRank[0] . translate('STR_Abyssrank_dark_05', $language) . $PuRank[1] . '</p><dl class="property">';
            }elseif($row["purchable_rank_min"] == '4') {
                $purchRank = translate('STR_TOOLTIP_ITEM_PURCHABLE_ALLOW_RANK', $language);
                $PuRank = explode('%0', $purchRank);
                $purchable_rank_min = '<p class="purchable_rank_min">' . $PuRank[0] . translate('STR_Abyssrank_dark_04', $language) . $PuRank[1] . '</p><dl class="property">';
            }elseif($row["purchable_rank_min"] == '3') {
                $purchRank = translate('STR_TOOLTIP_ITEM_PURCHABLE_ALLOW_RANK', $language);
                $PuRank = explode('%0', $purchRank);
                $purchable_rank_min = '<p class="purchable_rank_min">' . $PuRank[0] . translate('STR_Abyssrank_dark_03', $language) . $PuRank[1] . '</p><dl class="property">';
            }elseif($row["purchable_rank_min"] == '2') {
                $purchRank = translate('STR_TOOLTIP_ITEM_PURCHABLE_ALLOW_RANK', $language);
                $PuRank = explode('%0', $purchRank);
                $purchable_rank_min = '<p class="purchable_rank_min">' . $PuRank[0] . translate('STR_Abyssrank_dark_02', $language) . $PuRank[1] . '</p><dl class="property">';
            }elseif($row["purchable_rank_min"] == '1') {
                $purchRank = translate('STR_TOOLTIP_ITEM_PURCHABLE_ALLOW_RANK', $language);
                $PuRank = explode('%0', $purchRank);
                $purchable_rank_min = '<p class="purchable_rank_min">' . $PuRank[0] . translate('STR_Abyssrank_dark_01', $language) . $PuRank[1] . '</p><dl class="property">';
            }else {
                $purchable_rank_min = '';
            }


            if($row["recommend_rank"] == '18') {
                $RecommRank = translate('STR_TOOLTIP_RECOMMENDED_RANK', $language);
                $recRank = explode('%0', $RecommRank);
                $recommend_rank = '<p class="recommend_rank">' . $recRank[0] . translate('STR_Abyssrank_dark_18', $language) . $recRank[1] . '</p><dl class="property">';
            }elseif($row["recommend_rank"] == '17') {
                $RecommRank = translate('STR_TOOLTIP_RECOMMENDED_RANK', $language);
                $recRank = explode('%0', $RecommRank);
                $recommend_rank = '<p class="recommend_rank">' . $recRank[0] . translate('STR_Abyssrank_dark_17', $language) . $recRank[1] . '</p><dl class="property">';
            }elseif($row["recommend_rank"] == '16') {
                $RecommRank = translate('STR_TOOLTIP_RECOMMENDED_RANK', $language);
                $recRank = explode('%0', $RecommRank);
                $recommend_rank = '<p class="recommend_rank">' . $recRank[0] . translate('STR_Abyssrank_dark_16', $language) . $recRank[1] . '</p><dl class="property">';
            }elseif($row["recommend_rank"] == '15') {
                $RecommRank = translate('STR_TOOLTIP_RECOMMENDED_RANK', $language);
                $recRank = explode('%0', $RecommRank);
                $recommend_rank = '<p class="recommend_rank">' . $recRank[0] . translate('STR_Abyssrank_dark_15', $language) . $recRank[1] . '</p><dl class="property">';
            }elseif($row["recommend_rank"] == '14') {
                $RecommRank = translate('STR_TOOLTIP_RECOMMENDED_RANK', $language);
                $recRank = explode('%0', $RecommRank);
                $recommend_rank = '<p class="recommend_rank">' . $recRank[0] . translate('STR_Abyssrank_dark_14', $language) . $recRank[1] . '</p><dl class="property">';
            }elseif($row["recommend_rank"] == '13') {
                $RecommRank = translate('STR_TOOLTIP_RECOMMENDED_RANK', $language);
                $recRank = explode('%0', $RecommRank);
                $recommend_rank = '<p class="recommend_rank">' . $recRank[0] . translate('STR_Abyssrank_dark_13', $language) . $recRank[1] . '</p><dl class="property">';
            }elseif($row["recommend_rank"] == '12') {
                $RecommRank = translate('STR_TOOLTIP_RECOMMENDED_RANK', $language);
                $recRank = explode('%0', $RecommRank);
                $recommend_rank = '<p class="recommend_rank">' . $recRank[0] . translate('STR_Abyssrank_dark_12', $language) . $recRank[1] . '</p><dl class="property">';
            }elseif($row["recommend_rank"] == '11') {
                $RecommRank = translate('STR_TOOLTIP_RECOMMENDED_RANK', $language);
                $recRank = explode('%0', $RecommRank);
                $recommend_rank = '<p class="recommend_rank">' . $recRank[0] . translate('STR_Abyssrank_dark_11', $language) . $recRank[1] . '</p><dl class="property">';
            }elseif($row["recommend_rank"] == '10') {
                $RecommRank = translate('STR_TOOLTIP_RECOMMENDED_RANK', $language);
                $recRank = explode('%0', $RecommRank);
                $recommend_rank = '<p class="recommend_rank">' . $recRank[0] . translate('STR_Abyssrank_dark_10', $language) . $recRank[1] . '</p><dl class="property">';
            }elseif($row["recommend_rank"] == '9') {
                $RecommRank = translate('STR_TOOLTIP_RECOMMENDED_RANK', $language);
                $recRank = explode('%0', $RecommRank);
                $recommend_rank = '<p class="recommend_rank">' . $recRank[0] . translate('STR_Abyssrank_dark_09', $language) . $recRank[1] . '</p><dl class="property">';
            }elseif($row["recommend_rank"] == '8') {
                $RecommRank = translate('STR_TOOLTIP_RECOMMENDED_RANK', $language);
                $recRank = explode('%0', $RecommRank);
                $recommend_rank = '<p class="recommend_rank">' . $recRank[0] . translate('STR_Abyssrank_dark_08', $language) . $recRank[1] . '</p><dl class="property">';
            }elseif($row["recommend_rank"] == '7') {
                $RecommRank = translate('STR_TOOLTIP_RECOMMENDED_RANK', $language);
                $recRank = explode('%0', $RecommRank);
                $recommend_rank = '<p class="recommend_rank">' . $recRank[0] . translate('STR_Abyssrank_dark_07', $language) . $recRank[1] . '</p><dl class="property">';
            }elseif($row["recommend_rank"] == '6') {
                $RecommRank = translate('STR_TOOLTIP_RECOMMENDED_RANK', $language);
                $recRank = explode('%0', $RecommRank);
                $recommend_rank = '<p class="recommend_rank">' . $recRank[0] . translate('STR_Abyssrank_dark_06', $language) . $recRank[1] . '</p><dl class="property">';
            }elseif($row["recommend_rank"] == '5') {
                $RecommRank = translate('STR_TOOLTIP_RECOMMENDED_RANK', $language);
                $recRank = explode('%0', $RecommRank);
                $recommend_rank = '<p class="recommend_rank">' . $recRank[0] . translate('STR_Abyssrank_dark_05', $language) . $recRank[1] . '</p><dl class="property">';
            }elseif($row["recommend_rank"] == '4') {
                $RecommRank = translate('STR_TOOLTIP_RECOMMENDED_RANK', $language);
                $recRank = explode('%0', $RecommRank);
                $recommend_rank = '<p class="recommend_rank">' . $recRank[0] . translate('STR_Abyssrank_dark_04', $language) . $recRank[1] . '</p><dl class="property">';
            }elseif($row["recommend_rank"] == '3') {
                $RecommRank = translate('STR_TOOLTIP_RECOMMENDED_RANK', $language);
                $recRank = explode('%0', $RecommRank);
                $recommend_rank = '<p class="recommend_rank">' . $recRank[0] . translate('STR_Abyssrank_dark_03', $language) . $recRank[1] . '</p><dl class="property">';
            }elseif($row["recommend_rank"] == '2') {
                $RecommRank = translate('STR_TOOLTIP_RECOMMENDED_RANK', $language);
                $recRank = explode('%0', $RecommRank);
                $recommend_rank = '<p class="recommend_rank">' . $recRank[0] . translate('STR_Abyssrank_dark_02', $language) . $recRank[1] . '</p><dl class="property">';
            }elseif($row["recommend_rank"] == '1') {
                $RecommRank = translate('STR_TOOLTIP_RECOMMENDED_RANK', $language);
                $recRank = explode('%0', $RecommRank);
                $recommend_rank = '<p class="recommend_rank">' . $recRank[0] . translate('STR_Abyssrank_dark_01', $language) . $recRank[1] . '</p><dl class="property">';
            }else {
                $recommend_rank = '';
            }





            if($row["option_slot_bonus"] >= 1) {

                $manaimg = str_repeat('<img src="https://aionpowerbook.com/img/manaslot.png"> ', $row['option_slot_bonus']);

                $slot_bonus = '+ ' . $manaimg;
            }else {
                $slot_bonus = '';
            }


            if($row['option_slot_value'] >= 1) {

                $manaimg = str_repeat('<img src="https://aionpowerbook.com/img/manaslot.png"> ', $row['option_slot_value']);

                $manastoneSlots .= '<div class="wrap weapon_enchant"><dl class="enchant"><dt class="rmanastone">' . translate('STR_TOOLTIP_NOTICE_OPTION', $language) . '</dt><dd class="enchantstone_slot">' . $manaimg . $slot_bonus . '</dd></dl></div>';
            }else {
                $manastoneSlots = '';
            }

            if($row['option_slot_max'] >= 1) {



                for ($xint=1; $xint<= $row['option_slot_max']; $xint++)
                {
                    if ($xint == 2){
                        $xintmulti = 1.5;
                    }
                    elseif ($xint == 3){
                        $xintmulti = 2;
                    }
                    elseif ($xint == 4){
                        $xintmulti = 2.5;
                    }
                    elseif ($xint == 5){
                        $xintmulti = 3;
                    }
                    elseif ($xint == 6){
                        $xintmulti = 3.5;
                    }
                    else {
                        $xintmulti = 1;
                    }

                    $manaimg .= '<img src="https://aionpowerbook.com/img/manaunlock.png" class="enchantingTip" title="'. floor($row['option_slot_add_count'] * $xintmulti) .' <img style=\'width:15px\' src=\'https://aionpowerbook.com/item/icon/icon_item_mix_crystal_05.png\'> " > ';
                }

                $manastoneSlotsNew .= '<div class="wrap weapon_enchant"><dl class="enchant"><dt class="rmanastone">Max ' . translate('STR_TOOLTIP_NOTICE_OPTION', $language) . '</dt><dd class="enchantstone_slot">' . $manaimg . '</dd></dl></div>';
            }else {
                $manastoneSlotsNew = '';
            }





            // Rune & Odian
            if($grind_slot_category != NULL) {
                if (strtolower($grind_slot_category) == 'odian') {
                    $TranOdianRun = translate('STR_TOOLTIP_ITEM_ODIAN_EQED_DETAIL_UND_TITLE', $language);
                    $OdianRuneIcon = 'https://aionpowerbook.com/img/odianunlock.png';
                }elseif (strtolower($grind_slot_category) == 'rune') {
                    $TranOdianRun = translate('STR_TOOLTIP_ITEM_RUNE_EQED_DETAIL_UND_TITLE', $language);
                    $OdianRuneIcon = 'https://aionpowerbook.com/img/runeunlock.png';
                }

                $odianimg .= '<img src="'.$OdianRuneIcon.'" class="enchantingTip" title="'. $grind_slot_opening_cost .' <img style=\'width:15px\' src=\'https://aionpowerbook.com/item/icon/icon_item_mix_crystal_08.png\'> " > ';
                $Odian .= '<div class="wrap weapon_enchant"><dl class="enchant"><dt class="rmanastone">' . $TranOdianRun . '</dt><dd class="enchantstone_slot">' . $odianimg . '</dd></dl></div>';
            }else {
                $Odian = '';
            }




















            //6.0 stats
            if($row["max_hp"] >= 1) {
                $newbasicstats .= '<dt>' . translate('STR_HP', $language) . '</dt><dd class="max_hp">' . $max_hp . '</dd>';
            }else {
                $newbasicstats .= '';
            }

            if($row["max_mp"] >= 1) {
                $newbasicstats .= '<dt>' . translate('STR_MP', $language) . '</dt><dd class="max_mp">' . $max_mp . '</dd>';
            }else {
                $newbasicstats .= '';
            }

            if($physical_power_boost >= 1) {
                $newbasicstats .= '<dt>' . translate('STR_PHYSICAL_POWER_BOOST', $language) . '</dt><dd class="Physical Attack">' . $physical_power_boost . '</dd>';
            }else {
                $newbasicstats .= '';
            }
            if($magical_power_boost >= 1) {
                $newbasicstats .= '<dt>' . translate('STR_MAGICAL_POWER_BOOST', $language) . '</dt><dd class="Magical Attack">' . $magical_power_boost . '</dd>';
            }else {
                $newbasicstats .= '';
            }
            if($physical_power_boost_resist >= 1) {
                $newbasicstats .= '<dt>' . translate('STR_PHYSICAL_POWER_BOOST_RESIST', $language) . '</dt><dd class="Physical Defence">' . $physical_power_boost_resist . '</dd>';
            }else {
                $newbasicstats .= '';
            }
            if($magical_power_boost_resist >= 1) {
                $newbasicstats .= '<dt>' . translate('STR_MAGICAL_POWER_BOOST_RESIST', $language) . '</dt><dd class="Magical Defence">' . $magical_power_boost_resist . '</dd>';
            }else {
                $newbasicstats .= '';
            }

            if($row["block"] >= 1) {
                $newbasicstats .= '<dt>' . translate('STR_BLOCK', $language) . '</dt><dd class="block">' . $block . '</dd>';
            }else {
                $newbasicstats .= '';
            }
            if($row["magical_hit_accuracy"] >= 1) {
                $newbasicstats .= '<dt>' . translate('STR_MAGICAL_HIT_ACCURACY', $language) . '</dt><dd class="magical_hit_accuracy">' . $magical_hit_accuracy . '</dd>';
            }else {
                $newbasicstats .= '';
            }
            if($row["parry"] >= 1) {
                $newbasicstats .= '<dt>' . translate('STR_PARRY', $language) . '</dt><dd class="parry">' . $parry . '</dd>';
            }else {
                $newbasicstats .= '';
            }
            if($row["hit_accuracy"] >= 1) {
                $newbasicstats .= '<dt>' . translate('STR_TOOLTIP_SKILL_STAT_HITACCURACY', $language) . '</dt><dd class="hit_accuracy">' . $hit_accuracy . '</dd>';
            }else {
                $newbasicstats .= '';
            }
            if($row["magical_defend"] >= 1) {
                $newbasicstats .= '<dt>' . translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_NEW_DEFENCE', $language) . '</dt><dd class="magical_defend">' . $magical_defend . '</dd>';
            }else {
                $newbasicstats .= '';
            }
            if($row["magical_skill_boost_resist"] >= 1) {
                $newbasicstats .= '<dt>' . translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_SKILL_BOOST_RESIST', $language) . '</dt><dd class="magical_skill_boost_resist">' . $magical_skill_boost_resist . '</dd>';
            }else {
                $newbasicstats .= '';
            }
            if($row["magical_resist"] >= 1) {
                $newbasicstats .= '<dt>' . translate('STR_MAGIC_DEFENSE', $language) . '</dt><dd class="magical_resist">' . $magical_resist . '</dd>';
            }else {
                $newbasicstats .= '';
            }

            if($row["physical_critical_reduce_rate"] >= 1) {
                $newbasicstats .= '<dt>' . translate('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_REDUCE_RATE', $language) . '</dt><dd class="physical_critical_reduce_rate">' . $physical_critical_reduce_rate . '</dd>';
            }else {
                $newbasicstats .= '';
            }

            if($row["physical_defend"] >= 1) {
                $newbasicstats .= '<dt>' . translate('STR_DEFEND_PHYSICAL', $language) . '</dt><dd class="physical_defend">' . $physical_defend . '</dd>';
            }else {
                $newbasicstats .= '';
            }

            if($row["dodge"] >= 1) {
                $newbasicstats .= '<dt>' . translate('STR_DODGE', $language) . '</dt><dd class="dodge">' . $dodge . '</dd>';
            }else {
                $newbasicstats .= '';
            }

            if($damage_reduce >= 1) {
                $newbasicstats .= '<dt>' . translate('STR_ITEMINFO_DAMAGE_REDUCTION', $language) . '</dt><dd class="damage_reduce">' . $damage_reduce . '%</dd>';
            }else {
                $newbasicstats .= '';
            }


            if ($newbasicstats != NULL) {
                $armorBasicStart = '<div class="wrap armor_property"><dl class="property">';
                $armorBasicEnd = '</div>';
            }







            if($row["attack_type"] == 'physical') {
                $attackType = '<dt attacktype>' . translate('STR_ATTACK', $language) . '</dt><dd class="damage"><span class="min_damage">' . $min_damage . '</span> - <span class="max_damage">' . $max_damage . '</span></dd>';
                $atkType = '';

                if ($critical >= 1){
                    $critType = '<dt crit_type>' . translate('STR_CRITICAL', $language) . '</dt><dd class="critical">' . $critical . '</dd>';
                }

            }elseif($row["attack_type"] == 'magical_water') {
                $attackType = '<dt attacktype>' . translate('STR_TOOLTIP_SKILL_STAT_MAGATTACK', $language) . '</dt><dd class="damage"><span class="min_damage">' . $min_damage . '</span> - <span class="max_damage">' . $max_damage . '</span></dd>';
                $atkType = ' (' . translate('STR_TOOLTIP_MAGICALWATER', $language) . ')';
                if ($critical >= 1){
                    $critType = '<dt crit_type>' . translate('STR_TOOLTIP_SKILL_STAT_MAGCRITICAL', $language) . '</dt><dd class="critical">' . $critical . '</dd>';
                }
            }elseif($row["attack_type"] == 'magical_fire') {
                $attackType = '<dt attacktype>' . translate('STR_TOOLTIP_SKILL_STAT_MAGATTACK', $language) . '</dt><dd class="damage"><span class="min_damage">' . $min_damage . '</span> - <span class="max_damage">' . $max_damage . '</span></dd>';
                $atkType = ' (' . translate('STR_TOOLTIP_MAGICALFIRE', $language) . ')';
                if ($critical >= 1){
                    $critType = '<dt crit_type>' . translate('STR_TOOLTIP_SKILL_STAT_MAGCRITICAL', $language) . '</dt><dd class="critical">' . $critical . '</dd>';
                }
            }elseif($row["attack_type"] == 'magical_earth') {
                $attackType = '<dt attacktype>' . translate('STR_TOOLTIP_SKILL_STAT_MAGATTACK', $language) . '</dt><dd class="damage"><span class="min_damage">' . $min_damage . '</span> - <span class="max_damage">' . $max_damage . '</span></dd>';
                $atkType = ' (' . translate('STR_TOOLTIP_MAGICALEARTH', $language) . ')';
                if ($critical >= 1){
                    $critType = '<dt crit_type>' . translate('STR_TOOLTIP_SKILL_STAT_MAGCRITICAL', $language) . '</dt><dd class="critical">' . $critical . '</dd>';
                }
            }
            else {
                $attackType = '';
                $atkType = '';
            }

            //			weapon's speed		//
            if($row["attack_delay"] <= 1200) {
                $weapon_speed = translate('STR_TOOLTIP_ATKDELAY_FAST', $language);
                $weaponHit = explode('%0', $weapon_speed);
                $weaponSpeed = '<p class="type_attackdelay">' . $weaponHit[0] . $hit_count . $weaponHit[1] . $atkType . '</p><dl class="property">';
            }elseif($row["attack_delay"] <= 1500 & $row["attack_delay"] >= 1300) {
                $weapon_speed = translate('STR_TOOLTIP_ATKDELAY_NORMAL', $language);
                $weaponHit = explode('%0', $weapon_speed);
                $weaponSpeed = '<p class="type_attackdelay">' . $weaponHit[0] . $hit_count . $weaponHit[1] . $atkType .'</p><dl class="property">';
            }elseif($row["attack_delay"] <= 2200 & $row["attack_delay"] >= 1800) {
                $weapon_speed = translate('STR_TOOLTIP_ATKDELAY_SLOW', $language);
                $weaponHit = explode('%0', $weapon_speed);
                $weaponSpeed = '<p class="type_attackdelay">' . $weaponHit[0] . $hit_count . $weaponHit[1] . $atkType .'</p><dl class="property">';
            }elseif($row["attack_delay"] <= 2800 & $row["attack_delay"] >= 2400) {
                $weapon_speed = translate('STR_TOOLTIP_ATKDELAY_VERYSLOW', $language);
                $weaponHit = explode('%0', $weapon_speed);
                $weaponSpeed = '<p class="type_attackdelay">' . $weaponHit[0] . $hit_count . $weaponHit[1] . $atkType .'</p><dl class="property">';
            }else {
                $weapon_speed = '';
            }
            //			weapon's speed		//

            //			bonus maximum enchantment		//
            if($row["max_enchant_bonus"] >= 1) {
                $ench_level_bonus = '+' . $row["max_enchant_bonus"];
            }else {
                $ench_level_bonus = '';
            }
            //			bonus maximum enchantment		//


            include 'include/restrictions.php';

            //								Additional Stats								//


            include 'include/maptemplate.php';

            $attributeHtml = '';

            foreach ($row as $fieldName => $fieldValue) {
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
                $additionalStats .= '<div class="wrap weapon_property_bonus" style=""><dl>' . $attributeHtml . '</dl></div>';
            }





            //			chargeOne (2)			//
            $choneattributeHtml = '';

            foreach ($row as $fieldName => $fieldValue) {
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

            if (!empty($choneattributeHtml) & $row['charge_way'] == '2') {
                $chargeType = translate('STR_TOOLTIP_CHARGE2_VALUE', $language);
                $chanrge = explode('%0', $chargeType);
                $chargeOne .= '<div class="wrap charge_desc"><p class="charge_level">' . $chanrge[0] . '1)</p><dl class="property">' . $choneattributeHtml . '</dl></div>';
            }
            //			chargeTwo (2)			//
            $chtwoattributeHtml = '';

            foreach ($row as $fieldName => $fieldValue) {
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

            if (!empty($chtwoattributeHtml) & $row['charge_way'] == '2') {
                $chargeType = translate('STR_TOOLTIP_CHARGE2_VALUE', $language);
                $chanrge = explode('%0', $chargeType);
                $chargeOne .= '<div class="wrap charge_desc"><p class="charge_level">' . $chanrge[0] . '2)</p><dl class="property">' . $chtwoattributeHtml . '</dl></div>';
            }
            //			chargeOne (1)			//
            $condoneattributeHtml = '';

            foreach ($row as $fieldName => $fieldValue) {
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

            if (!empty($condoneattributeHtml) & $row['charge_way'] == '1') {
                $chargeType = translate('STR_TOOLTIP_CHARGE1_VALUE', $language);
                $chanrge = explode('%0', $chargeType);
                $chargeOne .= '<div class="wrap charge_desc"><p class="charge_level">' . $chanrge[0] . '1)</p><dl class="property">' . $condoneattributeHtml . '</dl></div>';
            }
            //			chargeTwo (1)			//
            $contwoattributeHtml = '';

            foreach ($row as $fieldName => $fieldValue) {
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

            if (!empty($contwoattributeHtml) & $row['charge_way'] == '1') {
                $chargeType = translate('STR_TOOLTIP_CHARGE1_VALUE', $language);
                $chanrge = explode('%0', $chargeType);
                $chargeOne .= '<div class="wrap charge_desc"><p class="charge_level">' . $chanrge[0] . '2)</p><dl class="property">' . $contwoattributeHtml . '</dl></div>';
            }






            if ($random_option_set != NULL && $random_option_name == null){
                $randomStatsfixed = randomStats($random_option_set , $language, 'client_item_random_option');
            }
            elseif ($polish_set_name != NULL and $random_option_name == NULL) {
                $randomStatsfixed = randomStats($polish_set_name , $language, 'polish_bonus_setlist');
            }



            if ($random_option_name != NULL){
                $RealrandomStatsfinal = RealrandomStats($random_option_name , $language, '');
            }

            //								Additional Stats								//
        }
// end of while //

        if ($id < 10){
            return 'Invalid ID.';
        }

        // item type, normal, daevanion, balic, abyss //
        if($item_type == 'normal') {
            $itemtypetwo= '';
        }
        elseif($item_type == 'abyss'){
            $itemtypetwo= '<a href="https://aionpowerbook.com/powerbook/Abyss">' . translate('STR_ITEMTYPE_ABYSS', $language) . '</a> ';
        }
        elseif($item_type == 'draconic'){
            $itemtypetwo= '<a href="https://aionpowerbook.com/powerbook/Balic">' . translate('STR_ITEMTYPE_DRACONIC', $language) . '</a> ';
        }
        elseif($item_type == 'devanion'){
            $itemtypetwo= '<a href="https://aionpowerbook.com/powerbook/Daevanion">' . translate('STR_ITEMTYPE_DEVANION', $language) . '</a> ';
        }else {
            $itemtypetwo = '';
        }

        // 				item type				 //


        //				tooltip type             	//
        if($tooltip_type == '2') {
            $tooltiptype= '<div class="imtip2"/></div>'; //silver icon overlay
        }
        elseif($tooltip_type == '3'){
            $tooltiptype= '<div class="imtip1"/></div>'; //gold icon overlay for feathers
        }
        elseif($tooltip_type == '1'){
            $tooltiptype= '<div class="imtip1"/></div>'; // gold icon overlay
        }else {
            $tooltiptype = '';
        }
        //				tooltip type				//

// id decrtiption is for food, replace variables.
        if ($localization_desc != NULL) {
            if (($id >= 160000001) && ($id <= 160039999) or ($id >= 162000001) && ($id <= 162009999) or ($id >= 164000001) && ($id <= 164029999) or ($id >= 160040000) && ($id <= 160049999) ) {
                $localization_desc_processed = descriptionSkill($activation_skill, $activation_level, $localization_desc, $language);
            }else {
                $itemdesc = strtr($localization_desc, array(
                    "<" => '&lt;',
                    "[%gchar:warn_attr_adj]" => '<img src="https://aionpowerbook.com/images/additionaldetails.png" >',
                ));
                $localization_desc_processed = '<div class="wrap basicitem_desc" style=""><p class="desc">' . $itemdesc . '</p></div>';
            }
        }else {
            $localization_desc_processed = '';
        }

        if ($localization_desc2 != NULL) {
            $localization_desc_processed .= '<div class="wrap story_item_desc" style=""><p class="desc">' . $localization_desc2 . '</p></div>';
        } else {
            $localization_desc_processed .= '<div class="wrap story_item_desc" style="display:none"><p class="desc"></p></div>';
        }


        if (($id >= 190100000) && ($id <= 190199999)) {
            $mesh = strtolower(rideStats($ride_data_name, 'mesh'));
        }
        if (($id >= 102100000) && ($id <= 102199999)) {
            $meshrob .= '/' . strtolower(robotStats($robot_name, 'mesh_body'));
        }
        $devdetails = '<div class="devdetails wrap" style="display:none">
<table>
<tr><td>DEV_NAME: </td><td><input style="width:250px" type="text" value="' . $name . '"></td></tr>
<tr><td>STR_NAME: </td><td><input style="width:250px" type="text" value="' . $description . '"></td></tr>
<tr><td>STR_DESC: </td><td><input style="width:250px" type="text" value="' . $desc_long . '"></td></tr>
<tr><td>MESH: </td><td><input style="width:250px" type="text" value="' . $mesh . $meshrob . '"></td></tr>
<tr><td>Version: </td><td><a href="https://aionpowerbook.com/powerbook/Version:'.$clientversion.'">'.$clientversion . $Overseasclient . '</a></td></tr>
</table>
</div>';

        if ($cooldown > 0) {


            if ($cooldown < 60000){
                $usecooldown = '<div class="wrap basicitem_use_delay" style=""><dl class="use_delay"><dt>'.translate('STR_ITEM_COOLING_TIME', $language).'</dt><dd class="use_delay">'.$cooldown/1000 . translate('STR_SECOND', $language) . '</dd></dl></div>';
            }elseif ($cooldown >= 60000){
                $usecooldown = '<div class="wrap basicitem_use_delay" style=""><dl class="use_delay"><dt>'.translate('STR_ITEM_COOLING_TIME', $language).'</dt><dd class="use_delay">'.$cooldown/60000 . translate('STR_MINUTE', $language) . '</dd></dl></div>';
            }else {
                $usecooldown = '<div class="wrap basicitem_use_delay" style=""><dl class="use_delay"><dt>'.translate('STR_ITEM_COOLING_TIME', $language).'</dt><dd class="use_delay">Error - please report</dd></dl></div>';
            }
        }



        $AionDir = $_SERVER['DOCUMENT_ROOT'];

        if (file_exists($AionDir . '/preview/armor/' . $mesh . '_3.jpg')) {

            $previewcontrols = '<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>';
            $previewindicator = '<ol class="carousel-indicators"><li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li><li data-target="#carouselExampleIndicators" data-slide-to="1"></li></ol>';

            if (file_exists($AionDir . '/preview/armor/' . $mesh . '_4.jpg')) {
                $previewfour = '<img class="" src="https://aionpowerbook.com/preview/armor/' . $mesh . '_4.jpg">';
            }

            $previewthree = '<div class="carousel-item"><span style="float:left" ><img class="" src="https://aionpowerbook.com/preview/armor/' . $mesh . '_3.jpg"></span><span style="float:right" >'.$previewfour.'</span></div>';

        }

        $armorpreview .= '<br><br><div id="carouselExampleIndicators" class="carousel slide armorcarousel" data-ride="carousel">'.$previewindicator.'<div class="carousel-inner"><div class="carousel-item active"><span style="float:left" ><img class="" src="https://aionpowerbook.com/preview/armor/' . $mesh . '_1.jpg"></span><span style="float:right" ><img class="" src="https://aionpowerbook.com/preview/armor/' . $mesh . '_2.jpg"></div>'.$previewthree.'</div>'.$previewcontrols.'</div>';



        $armorpreview .= '<div class="cl"></div>';















        $eqEvolution = evolution($name, $language, '2');
        $eqEvolution .= evolution($name, $language, '1');


        if ($magical_skill_boost >= 1 ){
            $basicmagicboost = '<dt>' . translate('STR_MAGICAL_SKILL_BOOST', $language) . '</dt><dd  class="magical_skill_boost">' . $magical_skill_boost . '</dd>';
        }else {
            $basicmagicboost = '';
        }
        if ($parry >= 1) {
            $basicparry = '<dt>' . translate('STR_PARRY', $language) . '</dt><dd  class="parray">' . $parry . '</dd>';
        }else {
            $basicparry = '';
        }



//				ITEM TYPE					//
        if (($id >= 100000001) && ($id <= 100100000)) {
            $objectType = '_weapon';
            $itemtype= 'Sword';
            $locaitemtype = translate('STR_TOOLTIP_SWORD', $language);
            $threedicon = '<a id="various3"  href="https://aionpowerbook.com/viewer/index.php?item=' . $id . '"><img src="https://aionpowerbook.com/images/3d.png" alt=""></a>';
            $widget = "{{#Widget:Sword_" . $quality . "|escape:'html'}}";
            $previewTitle = '<h2><span class="mw-headline" id="Preview">Preview</span></h2>';
            $preview .= '<br><div class="hbody"><div class="images simg"><div class="img_right"><img src="https://aionpowerbook.com/preview/weapon/' . $mesh . '.jpg" width="100%" class="upimg"><p class="d-block w-100"></p></div></div></div>';
            $itemRestrictions .= $no_enchant;

            $itemRestrictions .= $exceed_enchant;
            $itemRestrictions .= $canEvolve;
            //			basic attributes		//
            $basicStats .= '<div class="wrap weapon_property">';
            $basicStats .= $weaponSpeed;
            $basicStats .= $attackType;
            $basicStats .= '<dt>' . translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language) . '</dt><dd class="attack_delay">' . $weapSpeedNumber . '</dd>';

            $basicStats .= $critType;

            $basicStats .= $basicmagicboost;


            $basicStats .= $newbasicstats;

            $basicStats .= '</dl></div>';
            //			basic attributes		//
            $enchantmentLevel = $maximumEnch;
            $availableLeveleq = $availableLevel;

        }
        elseif (($id >= 100100001) && ($id <= 100199999)) {
            $objectType = '_weapon';
            $itemtype= 'Mace';
            $locaitemtype = translate('STR_TOOLTIP_MACE', $language);
            $threedicon = '<a id="various3"  href="https://aionpowerbook.com/viewer/index.php?item=' . $id . '"><img src="https://aionpowerbook.com/images/3d.png" alt=""></a>';
            $widget = "{{#Widget:Mace_" . $quality . "|escape:'html'}}";
            $previewTitle = '<h2><span class="mw-headline" id="Preview">Preview</span></h2>';
            $preview .= '<br><div class="hbody"><div class="images simg"><div class="img_right"><img src="https://aionpowerbook.com/preview/weapon/' . $mesh . '.jpg" width="100%" class="upimg"><p class="d-block w-100"></p></div></div></div>';
            $itemRestrictions .= $no_enchant;

            $itemRestrictions .= $exceed_enchant;
            $itemRestrictions .= $canEvolve;

            //			basic attributes		//
            $basicStats .= '<div class="wrap weapon_property">';
            $basicStats .= $weaponSpeed;
            $basicStats .= $attackType;
            $basicStats .= '<dt>' . translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language) . '</dt><dd class="attack_delay">' . $weapSpeedNumber . '</dd>';

            $basicStats .= $critType;

            $basicStats .= $basicmagicboost;

            $basicStats .= $newbasicstats;
            $basicStats .= '</dl></div>';
            //			basic attributes		//

            $enchantmentLevel = $maximumEnch;
            $availableLeveleq = $availableLevel;
        }
        elseif (($id >= 100200001) && ($id <= 100299999)) {
            $objectType = '_weapon';
            $itemtype= 'Dagger';
            $locaitemtype = translate('STR_TOOLTIP_DAGGER', $language);
            $threedicon = '<a id="various3"  href="https://aionpowerbook.com/viewer/index.php?item=' . $id . '"><img src="https://aionpowerbook.com/images/3d.png" alt=""></a>';
            $widget = "{{#Widget:Dagger_" . $quality . "|escape:'html'}}";
            $previewTitle = '<h2><span class="mw-headline" id="Preview">Preview</span></h2>';
            $preview .= '<br><div class="hbody"><div class="images simg"><div class="img_right"><img src="https://aionpowerbook.com/preview/weapon/' . $mesh . '.jpg" width="100%" class="upimg"><p class="d-block w-100"></p></div></div></div>';
            $itemRestrictions .= $no_enchant;

            $itemRestrictions .= $exceed_enchant;
            $itemRestrictions .= $canEvolve;

            //			basic attributes		//
            $basicStats .= '<div class="wrap weapon_property">';
            $basicStats .= $weaponSpeed;
            $basicStats .= $attackType;
            $basicStats .= '<dt>' . translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language) . '</dt><dd class="attack_delay">' . $weapSpeedNumber . '</dd>';

            $basicStats .= $critType;

            $basicStats .= $basicmagicboost;

            $basicStats .= $newbasicstats;
            $basicStats .= '</dl></div>';
            //			basic attributes		//

            $enchantmentLevel = $maximumEnch;
            $availableLeveleq = $availableLevel;
        }
        elseif (($id >= 100500001) && ($id <= 100599999)) {
            $objectType = '_weapon';
            $itemtype= 'Orb';
            $locaitemtype = translate('STR_TOOLTIP_ORB', $language);
            $threedicon = '<a id="various3"  href="https://aionpowerbook.com/viewer/index.php?item=' . $id . '"><img src="https://aionpowerbook.com/images/3d.png" alt=""></a>';
            $widget = "{{#Widget:Orb_" . $quality . "|escape:'html'}}";
            $previewTitle = '<h2><span class="mw-headline" id="Preview">Preview</span></h2>';
            $preview .= '<br><div class="hbody"><div class="images simg"><div class="img_right"><img src="https://aionpowerbook.com/preview/weapon/' . $mesh . '.jpg" width="100%" class="upimg"><p class="d-block w-100"></p></div></div></div>';
            $itemRestrictions .= $no_enchant;
            $itemRestrictions .= $composite_weapon;

            $itemRestrictions .= $exceed_enchant;
            $itemRestrictions .= $canEvolve;

            //			basic attributes		//
            $basicStats .= '<div class="wrap weapon_property">';
            $basicStats .= $weaponSpeed;
            $basicStats .= $attackType;
            $basicStats .= '<dt>' . translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language) . '</dt><dd class="attack_delay">' . $weapSpeedNumber . '</dd>';

            $basicStats .= $critType;

            $basicStats .= $basicmagicboost;

            $basicStats .= $newbasicstats;
            $basicStats .= '</dl></div>';
            //			basic attributes		//

            $enchantmentLevel = $maximumEnch;
            $availableLeveleq = $availableLevel;
        }
        elseif (($id >= 100600001) && ($id <= 100699999)) {
            $objectType = '_weapon';
            $itemtype= 'Spellbook';
            $locaitemtype = translate('STR_TOOLTIP_BOOK', $language);
            $threedicon = '<a id="various3"  href="https://aionpowerbook.com/viewer/index.php?item=' . $id . '"><img src="https://aionpowerbook.com/images/3d.png" alt=""></a>';
            $widget = "{{#Widget:Spellbook_" . $quality . "|escape:'html'}}";
            $previewTitle = '<h2><span class="mw-headline" id="Preview">Preview</span></h2>';
            $preview .= '<br><div class="hbody"><div class="images simg"><div class="img_right"><img src="https://aionpowerbook.com/preview/weapon/' . $mesh . '.jpg" width="100%" class="upimg"><p class="d-block w-100"></p></div></div></div>';
            $itemRestrictions .= $no_enchant;
            $itemRestrictions .= $composite_weapon;

            $itemRestrictions .= $exceed_enchant;
            $itemRestrictions .= $canEvolve;

            //			basic attributes		//
            $basicStats .= '<div class="wrap weapon_property">';
            $basicStats .= $weaponSpeed;
            $basicStats .= $attackType;
            $basicStats .= '<dt>' . translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language) . '</dt><dd class="attack_delay">' . $weapSpeedNumber . '</dd>';

            $basicStats .= $critType;

            $basicStats .= $basicmagicboost;

            $basicStats .= $newbasicstats;
            $basicStats .= '</dl></div>';
            //			basic attributes		//

            $enchantmentLevel = $maximumEnch;
            $availableLeveleq = $availableLevel;
        }
        elseif (($id >= 100900001) && ($id <= 100999999)) {
            $objectType = '_weapon';
            $itemtype= 'Greatsword';
            $locaitemtype = translate('STR_TOOLTIP_TWOHANDEDSWORD', $language);
            $threedicon = '<a id="various3"  href="https://aionpowerbook.com/viewer/index.php?item=' . $id . '"><img src="https://aionpowerbook.com/images/3d.png" alt=""></a>';
            $widget = "{{#Widget:Greatsword_" . $quality . "|escape:'html'}}";
            $previewTitle = '<h2><span class="mw-headline" id="Preview">Preview</span></h2>';
            $preview .= '<br><div class="hbody"><div class="images simg"><div class="img_right"><img src="https://aionpowerbook.com/preview/weapon/' . $mesh . '.jpg" width="100%" class="upimg"><p class="d-block w-100"></p></div></div></div>';
            $itemRestrictions .= $no_enchant;
            $itemRestrictions .= $composite_weapon;

            $itemRestrictions .= $exceed_enchant;
            $itemRestrictions .= $canEvolve;

            //			basic attributes		//
            $basicStats .= '<div class="wrap weapon_property">';
            $basicStats .= $weaponSpeed;
            $basicStats .= $attackType;
            $basicStats .= '<dt>' . translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language) . '</dt><dd class="attack_delay">' . $weapSpeedNumber . '</dd>';

            $basicStats .= $critType;

            $basicStats .= $basicmagicboost;

            $basicStats .= $newbasicstats;
            $basicStats .= '</dl></div>';
            //			basic attributes		//

            $enchantmentLevel = $maximumEnch;
            $availableLeveleq = $availableLevel;
        }
        elseif (($id >= 101300001) && ($id <= 101399999)) {
            $objectType = '_weapon';
            $itemtype= 'Polearm';
            $locaitemtype = translate('STR_TOOLTIP_POLEARM', $language);
            $threedicon = '<a id="various3"  href="https://aionpowerbook.com/viewer/index.php?item=' . $id . '"><img src="https://aionpowerbook.com/images/3d.png" alt=""></a>';
            $widget = "{{#Widget:Polearm_" . $quality . "|escape:'html'}}";
            $previewTitle = '<h2><span class="mw-headline" id="Preview">Preview</span></h2>';
            $preview .= '<br><div class="hbody"><div class="images simg"><div class="img_right"><img src="https://aionpowerbook.com/preview/weapon/' . $mesh . '.jpg" width="100%" class="upimg"><p class="d-block w-100"></p></div></div></div>';
            $itemRestrictions .= $no_enchant;
            $itemRestrictions .= $composite_weapon;

            $itemRestrictions .= $exceed_enchant;
            $itemRestrictions .= $canEvolve;

            //			basic attributes		//
            $basicStats .= '<div class="wrap weapon_property">';
            $basicStats .= $weaponSpeed;
            $basicStats .= $attackType;
            $basicStats .= '<dt>' . translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language) . '</dt><dd class="attack_delay">' . $weapSpeedNumber . '</dd>';

            $basicStats .= $critType;

            $basicStats .= $basicmagicboost;

            $basicStats .= $newbasicstats;
            $basicStats .= '</dl></div>';
            //			basic attributes		//

            $enchantmentLevel = $maximumEnch;
            $availableLeveleq = $availableLevel;

        }
        elseif (($id >= 101500001) && ($id <= 101599999)) {
            $objectType = '_weapon';
            $itemtype= 'Staff';
            $locaitemtype = translate('STR_TOOLTIP_STAFF', $language);
            $threedicon = '<a id="various3"  href="https://aionpowerbook.com/viewer/index.php?item=' . $id . '"><img src="https://aionpowerbook.com/images/3d.png" alt=""></a>';
            $widget = "{{#Widget:Staff_" . $quality . "|escape:'html'}}";
            $previewTitle = '<h2><span class="mw-headline" id="Preview">Preview</span></h2>';
            $preview .= '<br><div class="hbody"><div class="images simg"><div class="img_right"><img src="https://aionpowerbook.com/preview/weapon/' . $mesh . '.jpg" width="100%" class="upimg"><p class="d-block w-100"></p></div></div></div>';
            $itemRestrictions .= $no_enchant;
            $itemRestrictions .= $composite_weapon;

            $itemRestrictions .= $exceed_enchant;
            $itemRestrictions .= $canEvolve;

            //			basic attributes		//
            $basicStats .= '<div class="wrap weapon_property">';
            $basicStats .= $weaponSpeed;
            $basicStats .= $attackType;
            $basicStats .= '<dt>' . translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language) . '</dt><dd class="attack_delay">' . $weapSpeedNumber . '</dd>';

            $basicStats .= $critType;

            $basicStats .= $basicmagicboost;

            $basicStats .= $newbasicstats;
            $basicStats .= '</dl></div>';
            //			basic attributes		//

            $enchantmentLevel = $maximumEnch;
            $availableLeveleq = $availableLevel;
        }
        elseif (($id >= 101700001) && ($id <= 101799999)) {
            $objectType = '_weapon';
            $itemtype= 'Bow';
            $locaitemtype = translate('STR_TOOLTIP_BOW', $language);
            $threedicon = '<a id="various3"  href="https://aionpowerbook.com/viewer/index.php?item=' . $id . '"><img src="https://aionpowerbook.com/images/3d.png" alt=""></a>';
            $widget = "{{#Widget:Bow_" . $quality . "|escape:'html'}}";
            $previewTitle = '<h2><span class="mw-headline" id="Preview">Preview</span></h2>';
            $preview .= '<br><div class="hbody"><div class="images simg"><div class="img_right"><img src="https://aionpowerbook.com/preview/weapon/' . $mesh . '.jpg" width="100%" class="upimg"><p class="d-block w-100"></p></div></div></div>';
            $itemRestrictions .= $no_enchant;
            $itemRestrictions .= $composite_weapon;

            $itemRestrictions .= $exceed_enchant;
            $itemRestrictions .= $canEvolve;

            //			basic attributes		//
            $basicStats .= '<div class="wrap weapon_property">';
            $basicStats .= $weaponSpeed;
            $basicStats .= $attackType;
            $basicStats .= '<dt>' . translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language) . '</dt><dd class="attack_delay">' . $weapSpeedNumber . '</dd>';

            $basicStats .= $critType;

            $basicStats .= $basicmagicboost;

            $basicStats .= $newbasicstats;
            $basicStats .= '</dl></div>';
            //			basic attributes		//

            $enchantmentLevel = $maximumEnch;
            $availableLeveleq = $availableLevel;
        }
        elseif (($id >= 101800000) && ($id <= 101899999)) {
            $objectType = '_weapon';
            $itemtype= 'Aether Revolver';
            $locaitemtype = translate('STR_TOOLTIP_GUN', $language);
            $threedicon = '<a id="various3"  href="https://aionpowerbook.com/viewer/index.php?item=' . $id . '"><img src="https://aionpowerbook.com/images/3d.png" alt=""></a>';
            $widget = "{{#Widget:Aether Revolver_" . $quality . "|escape:'html'}}";
            $previewTitle = '<h2><span class="mw-headline" id="Preview">Preview</span></h2>';
            $preview .= '<br><div class="hbody"><div class="images simg"><div class="img_right"><img src="https://aionpowerbook.com/preview/weapon/' . $mesh . '.jpg" width="100%" class="upimg"><p class="d-block w-100"></p></div></div></div>';
            $itemRestrictions .= $no_enchant;

            $itemRestrictions .= $exceed_enchant;
            $itemRestrictions .= $canEvolve;

            //			basic attributes		//
            $basicStats .= '<div class="wrap weapon_property">';
            $basicStats .= $weaponSpeed;
            $basicStats .= $attackType;
            $basicStats .= '<dt>' . translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language) . '</dt><dd class="attack_delay">' . $weapSpeedNumber . '</dd>';

            $basicStats .= $critType;

            $basicStats .= $basicmagicboost;

            $basicStats .= $newbasicstats;
            $basicStats .= '</dl></div>';
            //			basic attributes		//

            $enchantmentLevel = $maximumEnch;
            $availableLeveleq = $availableLevel;
        }
        elseif (($id >= 101900000) && ($id <= 101999999)) {
            $objectType = '_weapon';
            $itemtype= 'Aether Cannon';
            $locaitemtype = translate('STR_TOOLTIP_CANNON', $language);
            $threedicon = '<a id="various3"  href="https://aionpowerbook.com/viewer/index.php?item=' . $id . '"><img src="https://aionpowerbook.com/images/3d.png" alt=""></a>';
            $widget = "{{#Widget:Aether Cannon_" . $quality . "|escape:'html'}}";
            $previewTitle = '<h2><span class="mw-headline" id="Preview">Preview</span></h2>';
            $preview .= '<br><div class="hbody"><div class="images simg"><div class="img_right"><img src="https://aionpowerbook.com/preview/weapon/' . $mesh . '.jpg" width="100%" class="upimg"><p class="d-block w-100"></p></div></div></div>';
            $itemRestrictions .= $no_enchant;
            $itemRestrictions .= $composite_weapon;

            $itemRestrictions .= $exceed_enchant;
            $itemRestrictions .= $canEvolve;

            //			basic attributes		//
            $basicStats .= '<div class="wrap weapon_property">';
            $basicStats .= $weaponSpeed;
            $basicStats .= $attackType;
            $basicStats .= '<dt>' . translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language) . '</dt><dd class="attack_delay">' . $weapSpeedNumber . '</dd>';

            $basicStats .= $critType;

            $basicStats .= $basicmagicboost;

            $basicStats .= $newbasicstats;
            $basicStats .= '</dl></div>';
            //			basic attributes		//

            $enchantmentLevel = $maximumEnch;
            $availableLeveleq = $availableLevel;
        }
        elseif (($id >= 102000000) && ($id <= 102099999)) {
            $objectType = '_weapon';
            $itemtype= 'Stringed Instrument';
            $locaitemtype = translate('STR_TOOLTIP_HARP', $language);
            $threedicon = '<a id="various3"  href="https://aionpowerbook.com/viewer/index.php?item=' . $id . '"><img src="https://aionpowerbook.com/images/3d.png" alt=""></a>';
            $widget = "{{#Widget:Stringed Instrument_" . $quality . "|escape:'html'}}";
            $previewTitle = '<h2><span class="mw-headline" id="Preview">Preview</span></h2>';
            $preview .= '<br><div class="hbody"><div class="images simg"><div class="img_right"><img src="https://aionpowerbook.com/preview/weapon/' . $mesh . '.jpg" width="100%" class="upimg"><p class="d-block w-100"></p></div></div></div>';
            $itemRestrictions .= $no_enchant;
            $itemRestrictions .= $composite_weapon;

            $itemRestrictions .= $exceed_enchant;
            $itemRestrictions .= $canEvolve;

            //			basic attributes		//
            $basicStats .= '<div class="wrap weapon_property">';
            $basicStats .= $weaponSpeed;
            $basicStats .= $attackType;
            $basicStats .= '<dt>' . translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language) . '</dt><dd class="attack_delay">' . $weapSpeedNumber . '</dd>';

            $basicStats .= $critType;

            $basicStats .= $basicmagicboost;

            $basicStats .= $newbasicstats;
            $basicStats .= '</dl></div>';
            //			basic attributes		//

            $enchantmentLevel = $maximumEnch;
            $availableLeveleq = $availableLevel;
        }
        elseif (($id >= 102100000) && ($id <= 102199999)) {
            $objectType = '_weapon';
            $itemtype= 'Aether Key';
            $locaitemtype = translate('STR_TOOLTIP_KEYBLADE', $language);
            $threedicon = '<a id="various3" href="https://aionpowerbook.com/viewer/index.php?item=' . $id . '"><img style="width:20px !important;height:20px !important; margin-top: 2px !important;" src="https://aionpowerbook.com/images/3d2.png" alt=""></a><a id="various4" href="https://aionpowerbook.com/robot/index.php?item=' . $id . '"><img style="width:20px !important;height:20px !important; margin-top: 2px !important;" src="https://aionpowerbook.com/images/robot2.png" alt=""></a>';
            $widget = "{{#Widget:Aether Key_" . $quality . "|escape:'html'}}";
            $previewTitle = '<h2><span class="mw-headline" id="Preview">Preview</span></h2>';
            $preview .= '<br><br><div id="carouselExampleIndicators" class="carousel armorcarousel slide" data-ride="carousel"><ol class="carousel-indicators"><li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li><li data-target="#carouselExampleIndicators" data-slide-to="1"></li></ol><div class="carousel-inner"><div class="carousel-item active"><img class="d-block w-100" src="https://aionpowerbook.com/preview/weapon/' . $mesh . '.jpg"></div><div class="carousel-item"><img class="d-block w-100" src="https://aionpowerbook.com/preview/robot/' . strtolower(robotStats($robot_name, 'mesh_body')) . '.jpg"></div></div><a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a></div>';

            $itemRestrictions .= $no_enchant;
            $itemRestrictions .= $composite_weapon;

            $itemRestrictions .= $exceed_enchant;
            $itemRestrictions .= $canEvolve;

            //			basic attributes		//
            $basicStats .= '<div class="wrap weapon_property">';
            $basicStats .= $weaponSpeed;
            $basicStats .= $attackType;
            $basicStats .= '<dt>' . translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language) . '</dt><dd class="attack_delay">' . $weapSpeedNumber . '</dd>';

            $basicStats .= $critType;

            $basicStats .= $basicmagicboost;

            $basicStats .= $newbasicstats;
            $basicStats .= '</dl></div>';
            //			basic attributes		//

            $enchantmentLevel = $maximumEnch;
            $availableLeveleq = $availableLevel;
        }
        elseif (($id >= 102200006) && ($id <= 102299999)) {
            $objectType = '_weapon';
            $itemtype= 'Paint Rings';
            $locaitemtype = translate('STR_TOOLTIP_SPRAY', $language);
            $threedicon = '<a id="various3"  href="https://aionpowerbook.com/viewer/index.php?item=' . $id . '"><img src="https://aionpowerbook.com/images/3d.png" alt=""></a>';
            $widget = "{{#Widget:Paint Rings_" . $quality . "|escape:'html'}}";
            $previewTitle = '<h2><span class="mw-headline" id="Preview">Preview</span></h2>';
            $preview .= '<br><div class="hbody"><div class="images simg"><div class="img_right"><img src="https://aionpowerbook.com/preview/weapon/' . $mesh . '.jpg" width="100%" class="upimg"><p class="d-block w-100"></p></div></div></div>';
            $itemRestrictions .= $no_enchant;
            $itemRestrictions .= $composite_weapon;

            $itemRestrictions .= $exceed_enchant;
            $itemRestrictions .= $canEvolve;

            //			basic attributes		//
            $basicStats .= '<div class="wrap weapon_property">';
            $basicStats .= $weaponSpeed;
            $basicStats .= $attackType;
            $basicStats .= '<dt>' . translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language) . '</dt><dd class="attack_delay">' . $weapSpeedNumber . '</dd>';

            $basicStats .= $critType;

            $basicStats .= $basicmagicboost;

            $basicStats .= $newbasicstats;
            $basicStats .= '</dl></div>';
            //			basic attributes		//

            $enchantmentLevel = $maximumEnch;
            $availableLeveleq = $availableLevel;
        }
        elseif (($id >= 110600003) && ($id <= 110669999)) {
            $objectType = '_weapon';
            $itemtype= 'Plate';
            $locaitemtype = translate('STR_PLATE', $language);
            $threedicon = '<a id="various3"  href="https://aionpowerbook.com/viewer/index.php?item=' . $id . '"><img src="https://aionpowerbook.com/images/3d.png" alt=""></a>';
            $widget = "{{#Widget:Plate_" . $quality . "|escape:'html'}}";
            $previewTitle = '<h2><span class="mw-headline" id="Preview">Preview</span></h2>';
            $preview .= $armorpreview;
            $itemRestrictions .= $no_enchant;

            $itemRestrictions .= $exceed_enchant;
            $itemRestrictions .= $canEvolve;

            //	basic stats	//
            $basicStats .= $armorBasicStart;
            $basicStats .= $armor_physical_defend;
            $basicStats .= $armor_magical_defend;
            $basicStats .= $armor_magical_resist;
            $basicStats .= $armor_max_hp;
            $basicStats .= $armor_physical_critical_reduce_rate;
            $basicStats .= $armor_magical_skill_boost_resist;
            $basicStats .= $armor_dodge;
            $basicStats .= $newbasicstats;
            $basicStats .= $armorBasicEnd;
            //	basic stats	//

            $enchantmentLevel = $maximumEnch;
            $availableLeveleq = $availableLevel;
        }
        elseif (($id >= 111600003) && ($id <= 111669999)) {
            $objectType = '_weapon';
            $itemtype= 'Plate';
            $locaitemtype = translate('STR_PLATE', $language);
            $threedicon = '<a id="various3"  href="https://aionpowerbook.com/viewer/index.php?item=' . $id . '"><img src="https://aionpowerbook.com/images/3d.png" alt=""></a>';
            $widget = "{{#Widget:Plate_" . $quality . "|escape:'html'}}";
            $previewTitle = '<h2><span class="mw-headline" id="Preview">Preview</span></h2>';
            $preview .= $armorpreview;
            $itemRestrictions .= $no_enchant;

            $itemRestrictions .= $exceed_enchant;
            $itemRestrictions .= $canEvolve;

            //	basic stats	//
            $basicStats .= $armorBasicStart;
            $basicStats .= $armor_physical_defend;
            $basicStats .= $armor_magical_defend;
            $basicStats .= $armor_magical_resist;
            $basicStats .= $armor_max_hp;
            $basicStats .= $armor_physical_critical_reduce_rate;
            $basicStats .= $armor_magical_skill_boost_resist;
            $basicStats .= $armor_dodge;
            $basicStats .= $newbasicstats;




            $basicStats .= $armorBasicEnd;
            //	basic stats	//

            $enchantmentLevel = $maximumEnch;
            $availableLeveleq = $availableLevel;
        }
        elseif (($id >= 112600003) && ($id <= 112669999)) {
            $objectType = '_weapon';
            $itemtype= 'Plate';
            $locaitemtype = translate('STR_PLATE', $language);
            $threedicon = '<a id="various3"  href="https://aionpowerbook.com/viewer/index.php?item=' . $id . '"><img src="https://aionpowerbook.com/images/3d.png" alt=""></a>';
            $widget = "{{#Widget:Plate_" . $quality . "|escape:'html'}}";
            $previewTitle = '<h2><span class="mw-headline" id="Preview">Preview</span></h2>';
            $preview .= $armorpreview;
            $itemRestrictions .= $no_enchant;

            $itemRestrictions .= $exceed_enchant;
            $itemRestrictions .= $canEvolve;

            //	basic stats	//
            $basicStats .= $armorBasicStart;
            $basicStats .= $armor_physical_defend;
            $basicStats .= $armor_magical_defend;
            $basicStats .= $armor_magical_resist;
            $basicStats .= $armor_max_hp;
            $basicStats .= $armor_physical_critical_reduce_rate;
            $basicStats .= $armor_magical_skill_boost_resist;
            $basicStats .= $armor_dodge;
            $basicStats .= $newbasicstats;




            $basicStats .= $armorBasicEnd;
            //	basic stats	//

            $enchantmentLevel = $maximumEnch;
            $availableLeveleq = $availableLevel;
        }
        elseif (($id >= 113600003) && ($id <= 113669999)) {
            $objectType = '_weapon';
            $itemtype= 'Plate';
            $locaitemtype = translate('STR_PLATE', $language);
            $threedicon = '<a id="various3"  href="https://aionpowerbook.com/viewer/index.php?item=' . $id . '"><img src="https://aionpowerbook.com/images/3d.png" alt=""></a>';
            $widget = "{{#Widget:Plate_" . $quality . "|escape:'html'}}";
            $previewTitle = '<h2><span class="mw-headline" id="Preview">Preview</span></h2>';
            $preview .= $armorpreview;
            $itemRestrictions .= $no_enchant;

            $itemRestrictions .= $exceed_enchant;
            $itemRestrictions .= $canEvolve;

            //	basic stats	//
            $basicStats .= $armorBasicStart;
            $basicStats .= $armor_physical_defend;
            $basicStats .= $armor_magical_defend;
            $basicStats .= $armor_magical_resist;
            $basicStats .= $armor_max_hp;
            $basicStats .= $armor_physical_critical_reduce_rate;
            $basicStats .= $armor_magical_skill_boost_resist;
            $basicStats .= $armor_dodge;
            $basicStats .= $newbasicstats;




            $basicStats .= $armorBasicEnd;
            //	basic stats	//

            $enchantmentLevel = $maximumEnch;
            $availableLeveleq = $availableLevel;
        }
        elseif (($id >= 114600005) && ($id <= 114669999)) {
            $objectType = '_weapon';
            $itemtype= 'Plate';
            $locaitemtype = translate('STR_PLATE', $language);
            $threedicon = '<a id="various3"  href="https://aionpowerbook.com/viewer/index.php?item=' . $id . '"><img src="https://aionpowerbook.com/images/3d.png" alt=""></a>';
            $widget = "{{#Widget:Plate_" . $quality . "|escape:'html'}}";
            $previewTitle = '<h2><span class="mw-headline" id="Preview">Preview</span></h2>';
            $preview .= $armorpreview;
            $itemRestrictions .= $no_enchant;

            $itemRestrictions .= $exceed_enchant;
            $itemRestrictions .= $canEvolve;

            //	basic stats	//
            $basicStats .= $armorBasicStart;
            $basicStats .= $armor_physical_defend;
            $basicStats .= $armor_magical_defend;
            $basicStats .= $armor_magical_resist;
            $basicStats .= $armor_max_hp;
            $basicStats .= $armor_physical_critical_reduce_rate;
            $basicStats .= $armor_magical_skill_boost_resist;
            $basicStats .= $armor_dodge;
            $basicStats .= $newbasicstats;




            $basicStats .= $armorBasicEnd;
            //	basic stats	//

            $enchantmentLevel = $maximumEnch;
            $availableLeveleq = $availableLevel;
        }
        elseif (($id >= 110500001) && ($id <= 110569999)) {
            $objectType = '_weapon';
            $itemtype= 'Chain';
            $locaitemtype = translate('STR_CHAIN', $language);
            $threedicon = '<a id="various3"  href="https://aionpowerbook.com/viewer/index.php?item=' . $id . '"><img src="https://aionpowerbook.com/images/3d.png" alt=""></a>';
            $widget = "{{#Widget:Chain_" . $quality . "|escape:'html'}}";
            $previewTitle = '<h2><span class="mw-headline" id="Preview">Preview</span></h2>';
            $preview .= $armorpreview;
            $itemRestrictions .= $no_enchant;

            $itemRestrictions .= $exceed_enchant;
            $itemRestrictions .= $canEvolve;

            //	basic stats	//
            $basicStats .= $armorBasicStart;
            $basicStats .= $armor_physical_defend;
            $basicStats .= $armor_magical_defend;
            $basicStats .= $armor_magical_resist;
            $basicStats .= $armor_max_hp;
            $basicStats .= $armor_physical_critical_reduce_rate;
            $basicStats .= $armor_magical_skill_boost_resist;
            $basicStats .= $armor_dodge;
            $basicStats .= $newbasicstats;




            $basicStats .= $armorBasicEnd;
            //	basic stats	//

            $enchantmentLevel = $maximumEnch;
            $availableLeveleq = $availableLevel;
        }
        elseif (($id >= 111500001) && ($id <= 111569999)) {
            $objectType = '_weapon';
            $itemtype= 'Chain';
            $locaitemtype = translate('STR_CHAIN', $language);
            $threedicon = '<a id="various3"  href="https://aionpowerbook.com/viewer/index.php?item=' . $id . '"><img src="https://aionpowerbook.com/images/3d.png" alt=""></a>';
            $widget = "{{#Widget:Chain_" . $quality . "|escape:'html'}}";
            $previewTitle = '<h2><span class="mw-headline" id="Preview">Preview</span></h2>';
            $preview .= $armorpreview;
            $itemRestrictions .= $no_enchant;

            $itemRestrictions .= $exceed_enchant;
            $itemRestrictions .= $canEvolve;

            //	basic stats	//
            $basicStats .= $armorBasicStart;
            $basicStats .= $armor_physical_defend;
            $basicStats .= $armor_magical_defend;
            $basicStats .= $armor_magical_resist;
            $basicStats .= $armor_max_hp;
            $basicStats .= $armor_physical_critical_reduce_rate;
            $basicStats .= $armor_magical_skill_boost_resist;
            $basicStats .= $armor_dodge;
            $basicStats .= $newbasicstats;




            $basicStats .= $armorBasicEnd;
            //	basic stats	//

            $enchantmentLevel = $maximumEnch;
            $availableLeveleq = $availableLevel;
        }
        elseif (($id >= 112500001) && ($id <= 112569999)) {
            $objectType = '_weapon';
            $itemtype= 'Chain';
            $locaitemtype = translate('STR_CHAIN', $language);
            $threedicon = '<a id="various3"  href="https://aionpowerbook.com/viewer/index.php?item=' . $id . '"><img src="https://aionpowerbook.com/images/3d.png" alt=""></a>';
            $widget = "{{#Widget:Chain_" . $quality . "|escape:'html'}}";
            $previewTitle = '<h2><span class="mw-headline" id="Preview">Preview</span></h2>';
            $preview .= $armorpreview;
            $itemRestrictions .= $no_enchant;

            $itemRestrictions .= $exceed_enchant;
            $itemRestrictions .= $canEvolve;

            //	basic stats	//
            $basicStats .= $armorBasicStart;
            $basicStats .= $armor_physical_defend;
            $basicStats .= $armor_magical_defend;
            $basicStats .= $armor_magical_resist;
            $basicStats .= $armor_max_hp;
            $basicStats .= $armor_physical_critical_reduce_rate;
            $basicStats .= $armor_magical_skill_boost_resist;
            $basicStats .= $armor_dodge;
            $basicStats .= $newbasicstats;




            $basicStats .= $armorBasicEnd;
            //	basic stats	//

            $enchantmentLevel = $maximumEnch;
            $availableLeveleq = $availableLevel;
        }
        elseif (($id >= 113500001) && ($id <= 113569999)) {
            $objectType = '_weapon';
            $itemtype= 'Chain';
            $locaitemtype = translate('STR_CHAIN', $language);
            $threedicon = '<a id="various3"  href="https://aionpowerbook.com/viewer/index.php?item=' . $id . '"><img src="https://aionpowerbook.com/images/3d.png" alt=""></a>';
            $widget = "{{#Widget:Chain_" . $quality . "|escape:'html'}}";
            $previewTitle = '<h2><span class="mw-headline" id="Preview">Preview</span></h2>';
            $preview .= $armorpreview;
            $itemRestrictions .= $no_enchant;

            $itemRestrictions .= $exceed_enchant;
            $itemRestrictions .= $canEvolve;

            //	basic stats	//
            $basicStats .= $armorBasicStart;
            $basicStats .= $armor_physical_defend;
            $basicStats .= $armor_magical_defend;
            $basicStats .= $armor_magical_resist;
            $basicStats .= $armor_max_hp;
            $basicStats .= $armor_physical_critical_reduce_rate;
            $basicStats .= $armor_magical_skill_boost_resist;
            $basicStats .= $armor_dodge;
            $basicStats .= $newbasicstats;




            $basicStats .= $armorBasicEnd;
            //	basic stats	//

            $enchantmentLevel = $maximumEnch;
            $availableLeveleq = $availableLevel;
        }
        elseif (($id >= 114500001) && ($id <= 114569999)) {
            $objectType = '_weapon';
            $itemtype= 'Chain';
            $locaitemtype = translate('STR_CHAIN', $language);
            $threedicon = '<a id="various3"  href="https://aionpowerbook.com/viewer/index.php?item=' . $id . '"><img src="https://aionpowerbook.com/images/3d.png" alt=""></a>';
            $widget = "{{#Widget:Chain_" . $quality . "|escape:'html'}}";
            $previewTitle = '<h2><span class="mw-headline" id="Preview">Preview</span></h2>';
            $preview .= $armorpreview;
            $itemRestrictions .= $no_enchant;

            $itemRestrictions .= $exceed_enchant;
            $itemRestrictions .= $canEvolve;

            //	basic stats	//
            $basicStats .= $armorBasicStart;
            $basicStats .= $armor_physical_defend;
            $basicStats .= $armor_magical_defend;
            $basicStats .= $armor_magical_resist;
            $basicStats .= $armor_max_hp;
            $basicStats .= $armor_physical_critical_reduce_rate;
            $basicStats .= $armor_magical_skill_boost_resist;
            $basicStats .= $armor_dodge;
            $basicStats .= $newbasicstats;




            $basicStats .= $armorBasicEnd;
            //	basic stats	//

            $enchantmentLevel = $maximumEnch;
            $availableLeveleq = $availableLevel;
        }
        elseif (($id >= 110300005) && ($id <= 110369999)) {
            $objectType = '_weapon';
            $itemtype= 'Leather';
            $locaitemtype = translate('STR_LEATHER', $language);
            $threedicon = '<a id="various3"  href="https://aionpowerbook.com/viewer/index.php?item=' . $id . '"><img src="https://aionpowerbook.com/images/3d.png" alt=""></a>';
            $widget = "{{#Widget:Leather_" . $quality . "|escape:'html'}}";
            $previewTitle = '<h2><span class="mw-headline" id="Preview">Preview</span></h2>';
            $preview .= $armorpreview;
            $itemRestrictions .= $no_enchant;

            $itemRestrictions .= $exceed_enchant;
            $itemRestrictions .= $canEvolve;

            //	basic stats	//
            $basicStats .= $armorBasicStart;
            $basicStats .= $armor_physical_defend;
            $basicStats .= $armor_magical_defend;
            $basicStats .= $armor_magical_resist;
            $basicStats .= $armor_max_hp;
            $basicStats .= $armor_physical_critical_reduce_rate;
            $basicStats .= $armor_magical_skill_boost_resist;
            $basicStats .= $armor_dodge;
            $basicStats .= $newbasicstats;




            $basicStats .= $armorBasicEnd;
            //	basic stats	//

            $enchantmentLevel = $maximumEnch;
            $availableLeveleq = $availableLevel;
        }
        elseif (($id >= 111300005) && ($id <= 111369999)) {
            $objectType = '_weapon';
            $itemtype= 'Leather';
            $locaitemtype = translate('STR_LEATHER', $language);
            $threedicon = '<a id="various3"  href="https://aionpowerbook.com/viewer/index.php?item=' . $id . '"><img src="https://aionpowerbook.com/images/3d.png" alt=""></a>';
            $widget = "{{#Widget:Leather_" . $quality . "|escape:'html'}}";
            $previewTitle = '<h2><span class="mw-headline" id="Preview">Preview</span></h2>';
            $preview .= $armorpreview;
            $itemRestrictions .= $no_enchant;

            $itemRestrictions .= $exceed_enchant;
            $itemRestrictions .= $canEvolve;

            //	basic stats	//
            $basicStats .= $armorBasicStart;
            $basicStats .= $armor_physical_defend;
            $basicStats .= $armor_magical_defend;
            $basicStats .= $armor_magical_resist;
            $basicStats .= $armor_max_hp;
            $basicStats .= $armor_physical_critical_reduce_rate;
            $basicStats .= $armor_magical_skill_boost_resist;
            $basicStats .= $armor_dodge;
            $basicStats .= $newbasicstats;




            $basicStats .= $armorBasicEnd;
            //	basic stats	//

            $enchantmentLevel = $maximumEnch;
            $availableLeveleq = $availableLevel;
        }
        elseif (($id >= 112300005) && ($id <= 112369999)) {
            $objectType = '_weapon';
            $itemtype= 'Leather';
            $locaitemtype = translate('STR_LEATHER', $language);
            $threedicon = '<a id="various3"  href="https://aionpowerbook.com/viewer/index.php?item=' . $id . '"><img src="https://aionpowerbook.com/images/3d.png" alt=""></a>';
            $widget = "{{#Widget:Leather_" . $quality . "|escape:'html'}}";
            $previewTitle = '<h2><span class="mw-headline" id="Preview">Preview</span></h2>';
            $preview .= $armorpreview;
            $itemRestrictions .= $no_enchant;

            $itemRestrictions .= $exceed_enchant;
            $itemRestrictions .= $canEvolve;

            //	basic stats	//
            $basicStats .= $armorBasicStart;
            $basicStats .= $armor_physical_defend;
            $basicStats .= $armor_magical_defend;
            $basicStats .= $armor_magical_resist;
            $basicStats .= $armor_max_hp;
            $basicStats .= $armor_physical_critical_reduce_rate;
            $basicStats .= $armor_magical_skill_boost_resist;
            $basicStats .= $armor_dodge;
            $basicStats .= $newbasicstats;




            $basicStats .= $armorBasicEnd;
            //	basic stats	//

            $enchantmentLevel = $maximumEnch;
            $availableLeveleq = $availableLevel;
        }
        elseif (($id >= 113300005) && ($id <= 113369999)) {
            $objectType = '_weapon';
            $itemtype= 'Leather';
            $locaitemtype = translate('STR_LEATHER', $language);
            $threedicon = '<a id="various3"  href="https://aionpowerbook.com/viewer/index.php?item=' . $id . '"><img src="https://aionpowerbook.com/images/3d.png" alt=""></a>';
            $widget = "{{#Widget:Leather_" . $quality . "|escape:'html'}}";
            $previewTitle = '<h2><span class="mw-headline" id="Preview">Preview</span></h2>';
            $preview .= $armorpreview;
            $itemRestrictions .= $no_enchant;

            $itemRestrictions .= $exceed_enchant;
            $itemRestrictions .= $canEvolve;

            //	basic stats	//
            $basicStats .= $armorBasicStart;
            $basicStats .= $armor_physical_defend;
            $basicStats .= $armor_magical_defend;
            $basicStats .= $armor_magical_resist;
            $basicStats .= $armor_max_hp;
            $basicStats .= $armor_physical_critical_reduce_rate;
            $basicStats .= $armor_magical_skill_boost_resist;
            $basicStats .= $armor_dodge;
            $basicStats .= $newbasicstats;




            $basicStats .= $armorBasicEnd;
            //	basic stats	//

            $enchantmentLevel = $maximumEnch;
            $availableLeveleq = $availableLevel;
        }
        elseif (($id >= 114300005) && ($id <= 114369999)) {
            $objectType = '_weapon';
            $itemtype= 'Leather';
            $locaitemtype = translate('STR_LEATHER', $language);
            $threedicon = '<a id="various3"  href="https://aionpowerbook.com/viewer/index.php?item=' . $id . '"><img src="https://aionpowerbook.com/images/3d.png" alt=""></a>';
            $widget = "{{#Widget:Leather_" . $quality . "|escape:'html'}}";
            $previewTitle = '<h2><span class="mw-headline" id="Preview">Preview</span></h2>';
            $preview .= $armorpreview;
            $itemRestrictions .= $no_enchant;

            $itemRestrictions .= $exceed_enchant;
            $itemRestrictions .= $canEvolve;

            //	basic stats	//
            $basicStats .= $armorBasicStart;
            $basicStats .= $armor_physical_defend;
            $basicStats .= $armor_magical_defend;
            $basicStats .= $armor_magical_resist;
            $basicStats .= $armor_max_hp;
            $basicStats .= $armor_physical_critical_reduce_rate;
            $basicStats .= $armor_magical_skill_boost_resist;
            $basicStats .= $armor_dodge;
            $basicStats .= $newbasicstats;




            $basicStats .= $armorBasicEnd;
            //	basic stats	//

            $enchantmentLevel = $maximumEnch;
            $availableLeveleq = $availableLevel;
        }
        elseif (($id >= 110100005) && ($id <= 110169999)) {
            $objectType = '_weapon';
            $itemtype= 'Cloth';
            $locaitemtype = translate('STR_ROBE', $language);
            $threedicon = '<a id="various3"  href="https://aionpowerbook.com/viewer/index.php?item=' . $id . '"><img src="https://aionpowerbook.com/images/3d.png" alt=""></a>';
            $widget = "{{#Widget:Cloth_" . $quality . "|escape:'html'}}";
            $previewTitle = '<h2><span class="mw-headline" id="Preview">Preview</span></h2>';
            $preview .= $armorpreview;
            $itemRestrictions .= $no_enchant;

            $itemRestrictions .= $exceed_enchant;
            $itemRestrictions .= $canEvolve;

            //	basic stats	//
            $basicStats .= $armorBasicStart;
            $basicStats .= $armor_physical_defend;
            $basicStats .= $armor_magical_defend;
            $basicStats .= $armor_magical_resist;
            $basicStats .= $armor_max_hp;
            $basicStats .= $armor_physical_critical_reduce_rate;
            $basicStats .= $armor_magical_skill_boost_resist;
            $basicStats .= $armor_dodge;
            $basicStats .= $newbasicstats;




            $basicStats .= $armorBasicEnd;
            //	basic stats	//

            $enchantmentLevel = $maximumEnch;
            $availableLeveleq = $availableLevel;
        }
        elseif (($id >= 111100005) && ($id <= 111169999)) {
            $objectType = '_weapon';
            $itemtype= 'Cloth';
            $locaitemtype = translate('STR_ROBE', $language);
            $threedicon = '<a id="various3"  href="https://aionpowerbook.com/viewer/index.php?item=' . $id . '"><img src="https://aionpowerbook.com/images/3d.png" alt=""></a>';
            $widget = "{{#Widget:Cloth_" . $quality . "|escape:'html'}}";
            $previewTitle = '<h2><span class="mw-headline" id="Preview">Preview</span></h2>';
            $preview .= $armorpreview;
            $itemRestrictions .= $no_enchant;

            $itemRestrictions .= $exceed_enchant;
            $itemRestrictions .= $canEvolve;

            //	basic stats	//
            $basicStats .= $armorBasicStart;
            $basicStats .= $armor_physical_defend;
            $basicStats .= $armor_magical_defend;
            $basicStats .= $armor_magical_resist;
            $basicStats .= $armor_max_hp;
            $basicStats .= $armor_physical_critical_reduce_rate;
            $basicStats .= $armor_magical_skill_boost_resist;
            $basicStats .= $armor_dodge;
            $basicStats .= $newbasicstats;




            $basicStats .= $armorBasicEnd;
            //	basic stats	//

            $enchantmentLevel = $maximumEnch;
            $availableLeveleq = $availableLevel;
        }
        elseif (($id >= 112100005) && ($id <= 112169999)) {
            $objectType = '_weapon';
            $itemtype= 'Cloth';
            $locaitemtype = translate('STR_ROBE', $language);
            $threedicon = '<a id="various3"  href="https://aionpowerbook.com/viewer/index.php?item=' . $id . '"><img src="https://aionpowerbook.com/images/3d.png" alt=""></a>';
            $widget = "{{#Widget:Cloth_" . $quality . "|escape:'html'}}";
            $previewTitle = '<h2><span class="mw-headline" id="Preview">Preview</span></h2>';
            $preview .= $armorpreview;
            $itemRestrictions .= $no_enchant;

            $itemRestrictions .= $exceed_enchant;
            $itemRestrictions .= $canEvolve;

            //	basic stats	//
            $basicStats .= $armorBasicStart;
            $basicStats .= $armor_physical_defend;
            $basicStats .= $armor_magical_defend;
            $basicStats .= $armor_magical_resist;
            $basicStats .= $armor_max_hp;
            $basicStats .= $armor_physical_critical_reduce_rate;
            $basicStats .= $armor_magical_skill_boost_resist;
            $basicStats .= $armor_dodge;
            $basicStats .= $newbasicstats;




            $basicStats .= $armorBasicEnd;
            //	basic stats	//

            $enchantmentLevel = $maximumEnch;
            $availableLeveleq = $availableLevel;
        }
        elseif (($id >= 113100005) && ($id <= 113169999)) {
            $objectType = '_weapon';
            $itemtype= 'Cloth';
            $locaitemtype = translate('STR_ROBE', $language);
            $threedicon = '<a id="various3"  href="https://aionpowerbook.com/viewer/index.php?item=' . $id . '"><img src="https://aionpowerbook.com/images/3d.png" alt=""></a>';
            $widget = "{{#Widget:Cloth_" . $quality . "|escape:'html'}}";
            $previewTitle = '<h2><span class="mw-headline" id="Preview">Preview</span></h2>';
            $preview .= $armorpreview;
            $itemRestrictions .= $no_enchant;

            $itemRestrictions .= $exceed_enchant;
            $itemRestrictions .= $canEvolve;

            //	basic stats	//
            $basicStats .= $armorBasicStart;
            $basicStats .= $armor_physical_defend;
            $basicStats .= $armor_magical_defend;
            $basicStats .= $armor_magical_resist;
            $basicStats .= $armor_max_hp;
            $basicStats .= $armor_physical_critical_reduce_rate;
            $basicStats .= $armor_magical_skill_boost_resist;
            $basicStats .= $armor_dodge;
            $basicStats .= $newbasicstats;




            $basicStats .= $armorBasicEnd;
            //	basic stats	//

            $enchantmentLevel = $maximumEnch;
            $availableLeveleq = $availableLevel;
        }
        elseif (($id >= 114100005) && ($id <= 114169999)) {
            $objectType = '_weapon';
            $itemtype= 'Cloth';
            $locaitemtype = translate('STR_ROBE', $language);
            $threedicon = '<a id="various3"  href="https://aionpowerbook.com/viewer/index.php?item=' . $id . '"><img src="https://aionpowerbook.com/images/3d.png" alt=""></a>';
            $widget = "{{#Widget:Cloth_" . $quality . "|escape:'html'}}";
            $previewTitle = '<h2><span class="mw-headline" id="Preview">Preview</span></h2>';
            $preview .= $armorpreview;
            $itemRestrictions .= $no_enchant;

            $itemRestrictions .= $exceed_enchant;
            $itemRestrictions .= $canEvolve;

            //	basic stats	//
            $basicStats .= $armorBasicStart;
            $basicStats .= $armor_physical_defend;
            $basicStats .= $armor_magical_defend;
            $basicStats .= $armor_magical_resist;
            $basicStats .= $armor_max_hp;
            $basicStats .= $armor_physical_critical_reduce_rate;
            $basicStats .= $armor_magical_skill_boost_resist;
            $basicStats .= $armor_dodge;
            $basicStats .= $newbasicstats;




            $basicStats .= $armorBasicEnd;
            //	basic stats	//

            $enchantmentLevel = $maximumEnch;
            $availableLeveleq = $availableLevel;
        }
        elseif (($id >= 110900001) && ($id <= 110969999)) {
            $objectType = '_weapon';
            $itemtype= 'Clothes';
            $locaitemtype = translate('STR_CLOTH', $language);
            $threedicon = '<a id="various3"  href="https://aionpowerbook.com/viewer/index.php?item=' . $id . '"><img src="https://aionpowerbook.com/images/3d.png" alt=""></a>';

            $previewTitle = '<h2><span class="mw-headline" id="Preview">Preview</span></h2>';
            $preview .= $armorpreview;
            $itemRestrictions .= $no_enchant;

            $itemRestrictions .= $exceed_enchant;

            //	basic stats	//
            $basicStats .= $armorBasicStart;
            $basicStats .= $armor_physical_defend;
            $basicStats .= $armor_magical_defend;
            $basicStats .= $armor_magical_resist;
            $basicStats .= $armor_max_hp;
            $basicStats .= $armor_physical_critical_reduce_rate;
            $basicStats .= $armor_magical_skill_boost_resist;
            $basicStats .= $armor_dodge;
            $basicStats .= $newbasicstats;




            $basicStats .= $armorBasicEnd;
            //	basic stats	//

            $enchantmentLevel = $maximumEnch;
            $availableLeveleq = $availableLevel;
        }
        elseif (($id >= 110000001) && ($id <= 110069999)) {
            $objectType = '_weapon';
            $itemtype= 'Clothes';
            $locaitemtype = translate('STR_CLOTH', $language);
            $threedicon = '<a id="various3"  href="https://aionpowerbook.com/viewer/index.php?item=' . $id . '"><img src="https://aionpowerbook.com/images/3d.png" alt=""></a>';

            $previewTitle = '<h2><span class="mw-headline" id="Preview">Preview</span></h2>';
            $preview .= $armorpreview;
            $itemRestrictions .= $no_enchant;

            $itemRestrictions .= $exceed_enchant;

            //	basic stats	//
            $basicStats .= $armorBasicStart;
            $basicStats .= $armor_physical_defend;
            $basicStats .= $armor_magical_defend;
            $basicStats .= $armor_magical_resist;
            $basicStats .= $armor_max_hp;
            $basicStats .= $armor_physical_critical_reduce_rate;
            $basicStats .= $armor_magical_skill_boost_resist;
            $basicStats .= $armor_dodge;
            $basicStats .= $newbasicstats;




            $basicStats .= $armorBasicEnd;
            //	basic stats	//

            $enchantmentLevel = $maximumEnch;
            $availableLeveleq = $availableLevel;
        }
        elseif (($id >= 111000001) && ($id <= 111069999)) {
            $objectType = '_weapon';
            $itemtype= 'Clothes';
            $locaitemtype = translate('STR_CLOTH', $language);
            $threedicon = '<a id="various3"  href="https://aionpowerbook.com/viewer/index.php?item=' . $id . '"><img src="https://aionpowerbook.com/images/3d.png" alt=""></a>';

            $previewTitle = '<h2><span class="mw-headline" id="Preview">Preview</span></h2>';
            $preview .= $armorpreview;
            $itemRestrictions .= $no_enchant;

            $itemRestrictions .= $exceed_enchant;

            //	basic stats	//
            $basicStats .= $armorBasicStart;
            $basicStats .= $armor_physical_defend;
            $basicStats .= $armor_magical_defend;
            $basicStats .= $armor_magical_resist;
            $basicStats .= $armor_max_hp;
            $basicStats .= $armor_physical_critical_reduce_rate;
            $basicStats .= $armor_magical_skill_boost_resist;
            $basicStats .= $armor_dodge;
            $basicStats .= $newbasicstats;




            $basicStats .= $armorBasicEnd;
            //	basic stats	//

            $enchantmentLevel = $maximumEnch;
            $availableLeveleq = $availableLevel;
        }
        elseif (($id >= 112000001) && ($id <= 112069999)) {
            $objectType = '_weapon';
            $itemtype= 'Clothes';
            $locaitemtype = translate('STR_CLOTH', $language);
            $threedicon = '<a id="various3"  href="https://aionpowerbook.com/viewer/index.php?item=' . $id . '"><img src="https://aionpowerbook.com/images/3d.png" alt=""></a>';

            $previewTitle = '<h2><span class="mw-headline" id="Preview">Preview</span></h2>';
            $preview .= $armorpreview;
            $itemRestrictions .= $no_enchant;

            $itemRestrictions .= $exceed_enchant;

            //	basic stats	//
            $basicStats .= $armorBasicStart;
            $basicStats .= $armor_physical_defend;
            $basicStats .= $armor_magical_defend;
            $basicStats .= $armor_magical_resist;
            $basicStats .= $armor_max_hp;
            $basicStats .= $armor_physical_critical_reduce_rate;
            $basicStats .= $armor_magical_skill_boost_resist;
            $basicStats .= $armor_dodge;
            $basicStats .= $newbasicstats;




            $basicStats .= $armorBasicEnd;
            //	basic stats	//

            $enchantmentLevel = $maximumEnch;
            $availableLeveleq = $availableLevel;
        }
        elseif (($id >= 113000001) && ($id <= 113069999)) {
            $objectType = '_weapon';
            $itemtype= 'Clothes';
            $locaitemtype = translate('STR_CLOTH', $language);
            $threedicon = '<a id="various3"  href="https://aionpowerbook.com/viewer/index.php?item=' . $id . '"><img src="https://aionpowerbook.com/images/3d.png" alt=""></a>';

            $previewTitle = '<h2><span class="mw-headline" id="Preview">Preview</span></h2>';
            $preview .= $armorpreview;
            $itemRestrictions .= $no_enchant;

            $itemRestrictions .= $exceed_enchant;

            //	basic stats	//
            $basicStats .= $armorBasicStart;
            $basicStats .= $armor_physical_defend;
            $basicStats .= $armor_magical_defend;
            $basicStats .= $armor_magical_resist;
            $basicStats .= $armor_max_hp;
            $basicStats .= $armor_physical_critical_reduce_rate;
            $basicStats .= $armor_magical_skill_boost_resist;
            $basicStats .= $armor_dodge;
            $basicStats .= $newbasicstats;




            $basicStats .= $armorBasicEnd;
            //	basic stats	//

            $enchantmentLevel = $maximumEnch;
            $availableLeveleq = $availableLevel;
        }
        elseif (($id >= 114000001) && ($id <= 114069999)) {
            $objectType = '_weapon';
            $itemtype= 'Clothes';
            $locaitemtype = translate('STR_CLOTH', $language);
            $threedicon = '<a id="various3"  href="https://aionpowerbook.com/viewer/index.php?item=' . $id . '"><img src="https://aionpowerbook.com/images/3d.png" alt=""></a>';

            $previewTitle = '<h2><span class="mw-headline" id="Preview">Preview</span></h2>';
            $preview .= $armorpreview;
            $itemRestrictions .= $no_enchant;

            $itemRestrictions .= $exceed_enchant;

            //	basic stats	//
            $basicStats .= $armorBasicStart;
            $basicStats .= $armor_physical_defend;
            $basicStats .= $armor_magical_defend;
            $basicStats .= $armor_magical_resist;
            $basicStats .= $armor_max_hp;
            $basicStats .= $armor_physical_critical_reduce_rate;
            $basicStats .= $armor_magical_skill_boost_resist;
            $basicStats .= $armor_dodge;
            $basicStats .= $newbasicstats;




            $basicStats .= $armorBasicEnd;
            //	basic stats	//

            $enchantmentLevel = $maximumEnch;
            $availableLeveleq = $availableLevel;
        }
        elseif (($id >= 115000011) && ($id <= 115069999)) {
            $objectType = '_weapon';
            $itemtype= 'Shield';
            $locaitemtype = translate('STR_TOOLTIP_SHIELD', $language);
            $threedicon = '<a id="various3"  href="https://aionpowerbook.com/viewer/index.php?item=' . $id . '"><img src="https://aionpowerbook.com/images/3d.png" alt=""></a>';
            $widget = "{{#Widget:Shield_" . $quality . "|escape:'html'}}";
            $previewTitle = '<h2><span class="mw-headline" id="Preview">Preview</span></h2>';
            $preview .= '<br><div class="hbody"><div class="images simg"><div class="img_right"><img src="https://aionpowerbook.com/preview/shield/' . $mesh . '.jpg" width="100%" class="upimg"><p class="caption"></p></div></div></div><div class="cl"></div>';
            $itemRestrictions .= $no_enchant;

            $itemRestrictions .= $exceed_enchant;

            //			basic attributes		//
            $basicStats .= '<div class="wrap armor_property">';
            $basicStats .= $newbasicstats;
            $basicStats .= '</dl></div>';
            //			basic attributes		//

            $enchantmentLevel = $maximumEnch;
            $availableLeveleq = $availableLevel;
        }
        elseif (($id >= 120000012) && ($id <= 120069999)) {
            $objectType = '_weapon';
            $itemtype= 'Earrings';
            $locaitemtype = translate('STR_TOOLTIP_EAR', $language);
            $threedicon = '<a id="various3"  href="https://aionpowerbook.com/viewer/index.php?item=' . $id . '"><img src="https://aionpowerbook.com/images/3d.png" alt=""></a>';
            $widget = "{{#Widget:Earrings_" . $quality . "|escape:'html'}}";

            //	basic stats	//
            $basicStats .= $armorBasicStart;
            $basicStats .= $armor_physical_defend;
            $basicStats .= $armor_magical_defend;
            $basicStats .= $armor_magical_resist;
            $basicStats .= $armor_max_hp;
            $basicStats .= $armor_physical_critical_reduce_rate;
            $basicStats .= $armor_magical_skill_boost_resist;
            $basicStats .= $armor_dodge;
            $basicStats .= $armor_hit_accuracy;
            $basicStats .= $armor_parry;
            $basicStats .= $armor_magical_hit_accuracy;
            $basicStats .= $armor_block;
            $basicStats .= $newbasicstats;
            $basicStats .= $armorBasicEnd;
            //	basic stats	//


            $availableLeveleq = $availableLevel;
        }
        elseif (($id >= 121000013) && ($id <= 121069999)) {
            $objectType = '_weapon';
            $itemtype= 'Necklace';
            $locaitemtype = translate('STR_TOOLTIP_NECK', $language);

            $widget = "{{#Widget:Necklace_" . $quality . "|escape:'html'}}";
            //	basic stats	//
            $basicStats .= $armorBasicStart;
            $basicStats .= $armor_physical_defend;
            $basicStats .= $armor_magical_defend;
            $basicStats .= $armor_magical_resist;
            $basicStats .= $armor_max_hp;
            $basicStats .= $armor_physical_critical_reduce_rate;
            $basicStats .= $armor_magical_skill_boost_resist;
            $basicStats .= $armor_dodge;
            $basicStats .= $armor_hit_accuracy;
            $basicStats .= $armor_parry;
            $basicStats .= $armor_magical_hit_accuracy;
            $basicStats .= $armor_block;
            $basicStats .= $newbasicstats;
            $basicStats .= $armorBasicEnd;
            //	basic stats	//

            $availableLeveleq = $availableLevel;
        }
        elseif (($id >= 122000010) && ($id <= 122069999)) {
            $objectType = '_weapon';
            $itemtype= 'Ring';
            $locaitemtype = translate('STR_TOOLTIP_FINGER', $language);

            $widget = "{{#Widget:Ring_" . $quality . "|escape:'html'}}";
            //	basic stats	//
            $basicStats .= $armorBasicStart;
            $basicStats .= $armor_physical_defend;
            $basicStats .= $armor_magical_defend;
            $basicStats .= $armor_magical_resist;
            $basicStats .= $armor_max_hp;
            $basicStats .= $armor_physical_critical_reduce_rate;
            $basicStats .= $armor_magical_skill_boost_resist;
            $basicStats .= $armor_dodge;
            $basicStats .= $armor_hit_accuracy;
            $basicStats .= $armor_parry;
            $basicStats .= $armor_magical_hit_accuracy;
            $basicStats .= $armor_block;
            $basicStats .= $newbasicstats;
            $basicStats .= $armorBasicEnd;
            //	basic stats	//

            $availableLeveleq = $availableLevel;
        }
        elseif (($id >= 123000005) && ($id <= 123069999)) {
            $objectType = '_weapon';
            $itemtype= 'Belt';
            $locaitemtype = translate('STR_TOOLTIP_WAIST', $language);

            $widget = "{{#Widget:Belt_" . $quality . "|escape:'html'}}";
            //	basic stats	//
            $basicStats .= $armorBasicStart;
            $basicStats .= $armor_physical_defend;
            $basicStats .= $armor_magical_defend;
            $basicStats .= $armor_magical_resist;
            $basicStats .= $armor_max_hp;
            $basicStats .= $armor_physical_critical_reduce_rate;
            $basicStats .= $armor_magical_skill_boost_resist;
            $basicStats .= $armor_dodge;
            $basicStats .= $armor_hit_accuracy;
            $basicStats .= $armor_parry;
            $basicStats .= $armor_magical_hit_accuracy;
            $basicStats .= $armor_block;
            $basicStats .= $newbasicstats;
            $basicStats .= $armorBasicEnd;
            //	basic stats	//

            $availableLeveleq = $availableLevel;
        }
        elseif (($id >= 125000005) && ($id <= 125369999)) {
            $objectType = '_weapon';
            $itemtype= 'Head';
            $locaitemtype = translate('STR_TOOLTIP_HEAD', $language);
            $threedicon = '<a id="various3"  href="https://aionpowerbook.com/viewer/index.php?item=' . $id . '"><img src="https://aionpowerbook.com/images/3d.png" alt=""></a>';
            $widget = "{{#Widget:Head_" . $quality . "|escape:'html'}}";
            //	basic stats	//
            $basicStats .= $armorBasicStart;
            $basicStats .= $armor_physical_defend;
            $basicStats .= $armor_magical_defend;
            $basicStats .= $armor_magical_resist;
            $basicStats .= $armor_max_hp;
            $basicStats .= $armor_physical_critical_reduce_rate;
            $basicStats .= $armor_magical_skill_boost_resist;
            $basicStats .= $armor_dodge;
            $basicStats .= $armor_hit_accuracy;
            $basicStats .= $armor_parry;
            $basicStats .= $armor_magical_hit_accuracy;
            $basicStats .= $armor_block;
            $basicStats .= $newbasicstats;
            $basicStats .= $armorBasicEnd;
            //	basic stats	//

            $availableLeveleq = $availableLevel;
        }
        elseif (($id >= 140000001) && ($id <= 140009999)) {
            $objectType = '_weapon';
            $itemtype= 'Stigma Stone';
            $locaitemtype = translate('STR_TOOLTIP_STIGMA_STONE', $language);
            $itemRestrictions .= $enchant_stigma;
            $availableLeveleq = $availableLevel;

        }
        elseif (($id >= 141000001) && ($id <= 141009999)) {
            $objectType = '_weapon';
            $itemtype= 'Stigma Shard';
            $locaitemtype = translate('STR_TOOLTIP_STIGMA_SCROLL', $language);
            $availableLeveleq = $availableLevelother;

        }
        elseif (($id >= 150000001) && ($id <= 150009999)) {
            $objectType = '_weapon';
            $itemtype= 'Crafting Tools';
            $locaitemtype = translate('STR_TOOLTIP_MAKE_TOOL', $language);
            $availableLeveleq = $availableLevelother;
        }
        elseif (($id >= 152000001) && ($id <= 152089999)) {
            $objectType = '_weapon';
            $itemtype= 'Material Item';
            $locaitemtype = translate('STR_MATERIAL', $language);
            $availableLeveleq = $availableLevelother;
        }
        elseif (($id >= 152200001) && ($id <= 152299999)) {
            $objectType = '_weapon';
            $itemtype= 'Design';
            $locaitemtype = translate('STR_SALE_RECIPE', $language);
            $availableLeveleq = $availableLevelother;
            $craftTitle = '<h2><span class="mw-headline" id="Production">Production</span></h2>';

            $craft = designInfo($craft_recipe_info, $language);



        }
        elseif (($id >= 160000001) && ($id <= 160039999)) {
            $objectType = '_weapon';
            $itemtype= 'Food';
            $locaitemtype = translate('STR_SALE_SUPPLY_DISH', $language);
            $availableLeveleq = $availableLevelother;
        }
        elseif (($id >= 160040000) && ($id <= 160049999)) {
            $objectType = '_weapon';
            $itemtype= 'Transformation Potion';
            $locaitemtype = 'Transformation Potion';
            $availableLeveleq = $availableLevelother;
        }
        elseif (($id >= 162000001) && ($id <= 162009999)) {
            $objectType = '_weapon';
            $itemtype= 'Potion';
            $locaitemtype = translate('STR_SALE_SUPPLY_POTION', $language);
            $availableLeveleq = $availableLevelother;
        }
        elseif (($id >= 164000001) && ($id <= 164039999)) {
            $objectType = '_weapon';
            $itemtype= 'Scroll';
            $locaitemtype = translate('STR_SALE_SUPPLY_SCROLL', $language);
            $availableLeveleq = $availableLevelother;
        }
        elseif (($id >= 165030000) && ($id <= 165039999)) {
            $objectType = '_weapon';
            $itemtype= 'Evolution Aid';
            $locaitemtype = translate('STR_TOOLTIP_ITEM_EXCEED_TOOL', $language);
            $availableLeveleq = $availableLevelother;
        }
        elseif (($id >= 165020000) && ($id <= 165029999)) {
            $objectType = '_weapon';
            $itemtype= 'Wrapping utensils';
            $locaitemtype = translate('STR_TOOLTIP_ITEM_PACK_ITEM', $language);
            $availableLeveleq = $availableLevelother;
        }
        elseif (($id >= 166000001) && ($id <= 166029999)) {
            $objectType = '_weapon';
            $itemtype= 'Enchantment Stone';
            $locaitemtype = translate('STR_TOOLTIP_ITEM_ENCHANT', $language);
            $availableLeveleq = $availableLevelother;
        }
        elseif (($id >= 166030001) && ($id <= 166039999)) {
            $objectType = '_weapon';
            $itemtype= 'Enhancement Item';
            $locaitemtype = translate('STR_TOOLTIP_ITEM_AUTHORIZE', $language);
            $availableLeveleq = $availableLevelother;
        }
        elseif (($id >= 166050000) && ($id <= 166059999)) {
            $objectType = '_weapon';
            $itemtype= 'Idian';
            $locaitemtype = translate('STR_TOOLTIP_ITEM_POLISH', $language);
            $availableLeveleq = $availableLevelother;
        }
        elseif (($id >= 166200000) && ($id <= 166209999)) {
            $objectType = '_weapon';
            $itemtype= 'Re-identification Tool';
            $locaitemtype = translate('STR_TOOLTIP_ITEM_REIDENTIFY', $language);
            $availableLeveleq = $availableLevelother;
        }
        elseif (($id >= 166500000) && ($id <= 166500999)) {
            $objectType = '_weapon';
            $itemtype= 'Evolution Stone';
            $locaitemtype = translate('STR_TOOLTIP_ITEM_EXCEED_KEY', $language);
            $availableLeveleq = $availableLevelother;
        }
        elseif (($id >= 167000001) && ($id <= 167109999)) {
            $objectType = '_weapon';
            $itemtype= 'Manastone';
            $locaitemtype = translate('STR_TOOLTIP_ITEM_OPTION', $language);
            $availableLeveleq = $availableLevelother;
        }
        elseif (($id >= 168000001) && ($id <= 168059999)) {
            $objectType = '_weapon';
            $itemtype= 'Godstone';
            $locaitemtype = translate('STR_TOOLTIP_ITEM_PROC', $language);
            $availableLeveleq = $availableLevelother;
        }
        elseif (($id >= 169000001) && ($id <= 169009999)) {
            $objectType = '_weapon';
            $itemtype= 'Power Shard';
            $locaitemtype = translate('STR_TOOLTIP_ITEM_BATTERY', $language);
            $availableLeveleq = $availableLevelother;
        }
        elseif (($id >= 169100000) && ($id <= 169259999)) {
            $objectType = '_weapon';
            $itemtype= 'Dye';
            $locaitemtype = translate('STR_VENDOR_KIND_PAINT', $language);
            $availableLeveleq = $availableLevelother;
        }
        elseif (($id >= 169500001) && ($id <= 169509999)) {
            $objectType = '_weapon';
            $itemtype= 'Skill Book';
            $locaitemtype = translate('STR_TOOLTIP_SKILLBOOK', $language);
            $availableLeveleq = $availableLevelother;
        }
        elseif (($id >= 169600001) && ($id <= 169609999)) {
            $objectType = '_weapon';
            $itemtype= 'Emotion Card';
            $locaitemtype = 'Emotion Card';
            $availableLeveleq = $availableLevelother;
        }
        elseif (($id >= 169610000) && ($id <= 169619999)) {
            $objectType = '_weapon';
            $itemtype= 'Title Card';
            $locaitemtype = 'Title Card';
            $availableLeveleq = $availableLevelother;
            $randomStatsfixed = titleStats($cash_title , $language, '0');
        }
        elseif (($id >= 170000000) && ($id <= 171139999)) {
            $objectType = '_weapon';
            $itemtype= 'Decorate';
            $locaitemtype = translate('STR_TOOLTIP_HOUSING', $language);
            $availableLeveleq = $availableLevelother;

            $HouseObjDetails = HouseObj($summon_housing_object);


            include 'include/HousePreview.php';

            if ($summon_housing_object != NULL) {
                $previewTitle = '<h2><span class="mw-headline" id="Preview">Preview</span></h2>';
                $preview = HousePreview($summon_housing_object, 'client_housing_object');
            }elseif ($custom_part_name != NULL) {
                $previewTitle = '<h2><span class="mw-headline" id="Preview">Preview</span></h2>';
                $preview = HousePreview($custom_part_name, 'client_housing_custom_part');
            }




        }
        elseif (($id >= 187000000) && ($id <= 187069999)) {
            $objectType = '_weapon';
            $itemtype= 'Wings';
            $locaitemtype = translate('STR_TOOLTIP_WING', $language);
            $threedicon = '<a id="various3"  href="https://aionpowerbook.com/viewer/index.php?item=' . $id . '"><img src="https://aionpowerbook.com/images/3d.png" alt=""></a>';
            $previewTitle = '<h2><span class="mw-headline" id="Preview">Preview</span></h2>';
            $preview .= '<br><br><div id="carouselExampleIndicators" class="carousel armorcarousel slide" data-ride="carousel"><ol class="carousel-indicators"><li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li><li data-target="#carouselExampleIndicators" data-slide-to="1"></li></ol><div class="carousel-inner"><div class="carousel-item active"><img class="d-block w-100" src="https://aionpowerbook.com/preview/wings/' . $mesh . '_1.jpg"></div><div class="carousel-item"><img class="d-block w-100" src="https://aionpowerbook.com/preview/wings/' . $mesh . '_2.jpg"></div></div><a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a></div>';


            $itemRestrictions .= $no_enchant;

            $basicStats .= $armorBasicStart;
            $basicStats .= $newbasicstats;
            $basicStats .= $armorBasicEnd;

            $itemRestrictions .= $exceed_enchant;
            $enchantmentLevel = $maximumEnch;
            $availableLeveleq = $availableLevel;
        }
        elseif (($id >= 187100000) && ($id <= 187109999)) {

            $objectType = '_weapon';
            $itemtype= 'Feather ornament';
            $locaitemtype = translate('STR_TOOLTIP_ITEM_TSHIRT', $language);
            $basicStats .= $armorBasicStart;
            $basicStats .= $newbasicstats;
            $basicStats .= $armorBasicEnd;
            $availableLeveleq = $availableLevel;

        }
        elseif (($id >= 187200000) && ($id <= 187209999)) {
            $objectType = '_weapon';
            $itemtype= "Lord's Bracelet";
            $locaitemtype = translate('STR_TOOLTIP_ITEM_BRACELET', $language);
            $basicStats .= $armorBasicStart;
            $basicStats .= $newbasicstats;
            $basicStats .= $armorBasicEnd;
            $availableLeveleq = $availableLevel;

        }
        elseif (($id >= 187300000) && ($id <= 187300005)) {
            $objectType = '_weapon';
            $itemtype= 'Estima';
            $locaitemtype = 'Estima';
            $availableLeveleq = $availableLevelother;
        }
        elseif (($id >= 187401000) && ($id <= 187401099)) {
            $objectType = '_weapon';
            $itemtype= 'Emblem';
            $locaitemtype = 'Emblem';
            $basicStats .= $armorBasicStart;
            $basicStats .= $newbasicstats;
            $basicStats .= $armorBasicEnd;
            $availableLeveleq = $availableLevelother;
        }
        elseif (($id >= 188050000) && ($id <= 188099999)) {
            $objectType = '_weapon';
            $itemtype= 'Bundle Item';
            $locaitemtype = translate('STR_TOOLTIP_COMPRESSED_ITEM', $language);
            $availableLeveleq = $availableLevelother;

            if ($disassembly_type == '1' ){
                $extendable = ' (' . translate('STR_DISASSEMBLY_ITEM_SELECT_DIALOG', $language) . ')';
            }else {
                $extendable = ' (' . translate('STR_QUEST_RANDOM_REWARD2', $language) . ')';
            }


            $isBunle = 'yes';
            //include 'include/wrap_item.php';
            //$wraplist = wrapitem($name, $language);
        }
        elseif (($id >= 188100001) && ($id <= 188199999)) {
            $objectType = '_weapon';
            $itemtype= 'Assembly-type Item';
            $locaitemtype = translate('STR_TOOLTIP_ASSEMBLY_ITEM', $language);
            $availableLeveleq = $availableLevelother;

            include 'include/assemble.php';

            $assemble = assemblelist($name, $language);

        }
        elseif (($id >= 182200001) && ($id <= 182299999)) {
            $objectType = '_weapon';
            $itemtype= 'Quest Item';
            $locaitemtype = translate('STR_TOOLTIP_QUEST_ITEM', $language);
            $availableLeveleq = $availableLevelother;


            include 'include/docQuest.php';

            $devlowname = strtolower($name);
            $doc = explode('_', $devlowname);

            if ($doc[0] == 'doc'){
                $docQuest = docQuest($name, $language);
                $docQuestTitle = '<h2><span class="mw-headline" id="Story">Story</span></h2>';
            }





        }
        elseif (($id >= 188500000) && ($id <= 188599999)) {
            $objectType = '_weapon';
            $itemtype= 'Motion Card';
            $locaitemtype = translate('STR_PLAYER_INFO_DIALOG__MOTION', $language);
            $availableLeveleq = $availableLevelother;
        }
        elseif (($id >= 188600000) && ($id <= 188699999)) {
            $objectType = '_weapon';
            $itemtype= 'Instance Scroll';
            $locaitemtype = translate('STR_SALE_SUPPLY_SCROLL', $language);
            $availableLeveleq = $availableLevelother;
        }
        elseif (($id >= 189600000) && ($id <= 189609999)) {
            $objectType = '_weapon';
            $itemtype= 'Skill Skin Book';
            $locaitemtype = 'Skill Skin Book';
            $availableLeveleq = $availableLevelother;
            $skinskilldesc = client_pc_skill_skin($gain_skill_costume1, 'd', $language);
        }
        elseif (($id >= 190000000) && ($id <= 190079999)) {
            $objectType = '_weapon';
            $itemtype= 'Pet Egg';
            $locaitemtype = translate('STR_SALE_PETCARD', $language);
            $availableLeveleq = $availableLevelother;

            $petstuff .= '<div class="wrap basicitem_price2"><dl class="price2"><dt>' . translate('STR_POPUP_TOYPET_INFO', $language) . ':</dt><dd class="price2">';
            $petstuff .= petlink($func_pet_name);
            $petstuff .= '</dd></dl></div>';

        }
        elseif (($id >= 190080000) && ($id <= 190094999)) {
            $objectType = '_weapon';
            $itemtype= 'Minion Contract';
            $locaitemtype = 'Minion Contract';
            $availableLeveleq = $availableLevelother;
        }
        elseif (($id >= 190095000) && ($id <= 190099999)) {
            $objectType = '_weapon';
            $itemtype= 'Transformation Contract';
            $locaitemtype = 'Transformation Contract';
            $availableLeveleq = $availableLevelother;
        }
        elseif (($id >= 190100000) && ($id <= 190199999)) {
            $objectType = '_ride';
            $itemtype= 'Mounts';
            $locaitemtype = translate('STR_SALE_L_RIDE_01', $language);
            $previewTitle = '<h2><span class="mw-headline" id="Preview">Preview</span></h2>';
            $preview .= '<br><div class="hbody"><div class="images simg"><div class="img_right"><img src="https://aionpowerbook.com/preview/' . strtolower(rideStats($ride_data_name, 'mesh')) . '.jpg" width="100%" class="upimg"><p class="d-block w-100"></p></div></div></div><div class="cl" ></div>';


            $rideStats .= '<div class="wrap ride_property"><dl class="property"><dt>' . translate('STR_TOOLTIP_RIDE_MOVE_SPEED', $language) . '</dt><dd class="move_speed">' . substr(rideStats($ride_data_name, 'move_speed'), 0, 4) . '</dd><dt>' . translate('STR_TOOLTIP_RIDE_FLY_SPEED', $language) . '</dt><dd class="fly_speed">' . substr(rideStats($ride_data_name, 'fly_speed'), 0, 4) . '</dd></dl></div>';
            if (rideStats($ride_data_name, 'can_sprint') == '1'){
                $rideStats .= '<div class="wrap ride_sprint" style=""><p>' . translate('STR_TOOLTIP_RIDE_CAN_SPRINT', $language) . '</p><dl class="property"><dt>' . translate('STR_TOOLTIP_RIDE_SPRINT_SPEED', $language) . '</dt><dd class="sprint_speed">' . substr(rideStats($ride_data_name, 'sprint_speed'), 0, 4) . '</dd><dt>' . translate('STR_TOOLTIP_RIDE_COST_FP', $language) . '</dt><dd class="cost_fp">-' . rideStats($ride_data_name, 'cost_fp') . '</dd></dl></div>';
                $availableLeveleq = $availableLevel;
            }


            if (rideStats($ride_data_name, 'skill') != NULL){

                $skin_skill = rideStats($ride_data_name, 'skill');

                $skinSkill .= '<div class="wrap item_set" style=""><dl class="item_set"><dt style="width:50px !important">' . translate('STR_PLAYER_INFO_DIALOG__SKILL', $language) . ':<br></dt>';
                $skinSkill .= skinskill($skin_skill, $language);
                $skinSkill .= '</dl></div>';
            }

        }
        elseif (($id >= 187300000) && ($id <= 187309999)) {
            $itemtype = 'Estima';
            $locaitemtype = translate('STR_TOOLTIP_ITEM_ENCHANT_CPSTONE', $language);
            $availableLeveleq = $availableLevelother;

        }elseif (($id >= 188200000) && ($id <= 188200999)){
            $itemtype = 'Cubicle';
            $locaitemtype = 'Cubicle';
            $availableLeveleq = $availableLevelother;
        }elseif (($id >= 167200000) && ($id <= 167200999)){
            $itemtype = 'Odian';
            $locaitemtype = 'Odian';
            $availableLeveleq = $availableLevelother;


            if ($odian_skill_name != NULL) {
                $odianDet .= '<div class="wrap item_set" style=""><dl class="item_set"><dt style="width:50px !important"></dt>' . translate($odian_skill_desc_1, $language) . '<br>';
                $odianDet .= skinskill($odian_skill_name, $language);
                $odianDet .= '</dl></div>';
            }


        }elseif (($id >= 167300000) && ($id <= 167300999)){
            $itemtype = 'Rune';
            $locaitemtype = 'Rune';
            $availableLeveleq = $availableLevelother;
        }else {
            $itemtype = 'Other';
            $locaitemtype = translate('STR_TOOLTIP_ETC', $language);
            $availableLeveleq = $availableLevelother;
        }
//				ITEM TYPE					//



















//$CheckItemForAll = CheckItemForAll($name, $code);
        $CheckItemForAlltest = CheckItemForAlltest($name, $isBunle);
        $compareEU = checkCompareEU($id, $language);



//check if there is a video for the item
        if (($id >= 101800000) && ($id <= 101899999)) {
            $meshVid = strtolower(robotStats($robot_name, 'mesh_body'));
        }elseif (($id >= 190100000) && ($id <= 190199999)) {
            $meshVid = strtolower(rideStats($ride_data_name, 'mesh'));
        }elseif (($id >= 169600001) && ($id <= 169609999)) { // emote card
            $meshVid = 'emotion/' . $cash_social;
        }elseif (($id >= 188500000) && ($id <= 188599999)) { // motion card
            $meshVid = 'motion/' . strtolower($custom_idle_anim);
        }else {
            $meshVid = $mesh;
        }
        $itemVideo = videotooltip($id, $meshVid);





        if ($quality == 'mythic') {
            $bbcolor = '=#c74cff';
        }elseif ($quality == 'epic') {
            $bbcolor = '=#f63';
        }elseif ($quality == 'unique') {
            $bbcolor = '=#f90';
        }elseif ($quality == 'legend') {
            $bbcolor = '=#1699C4';
        }elseif ($quality == 'rare') {
            $bbcolor = '=#4AB93B';
        }elseif ($quality == 'finality') {
            $bbcolor = '=#e85659';
        }elseif ($quality == 'relic') {
            $bbcolor = '=#d551e5';
        }elseif ($quality == 'ancient') {
            $bbcolor = '=#d5ad56';
        }else {
            $bbcolor = '=#ddd';
        }


        if (isClassic() == "1") {
            $iccl = "_c";
        }




        $final .= '<div class="objects object' . $objectType . '"><div class="head item_basic '.$css.'"><dl class="basic">';											//starting div
        $final .= '<dd class="thumb">' . $tooltiptype . '<img src="https://aionpowerbook.com/item/icon'.$iccl.'/' . $itemicon . '.png" alt="">' . $itempvpve . $threedicon . '</dd>';					//icon, 3d icon and tooltip overlay if necessary
        $final .= '<dt class="name"><a class="col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $id . '">' . $localization . '</a> </dt>';			//item's name
        $final .= '<dd class="summary"><p class="type"><em>' . translate('STR_ITEMINFO_TYPE', $language) . '</em> <span>' . $itemtypetwo . '<a href="https://aionpowerbook.com/powerbook/' . $itemtype . '">' . $locaitemtype . '</a>' . $extendable . '</span></p>';	//item's type
        $final .=  $HDgear;
        $final .=  $availableLeveleq;												// available level, only applies to EQ
        $final .=  $MaxavailableLevel;
        $final .=  $purchable_rank_min; 											// minimum rank to buy the item
        $final .=  $usableMinrank; 													// minimum rank to wear the item
        $final .=  $recommend_rank; 												// recommended rank
        $final .= '<p class="desc">';												//opening of restrictions
        $final .=  $itemRestrictions; 												// test stats, need to be replaced by proper restriction string
        $final .=  $itemPrice;
        $final .=  $itemVideo;
        $final .=  $compareEU;
        $final .=  $DeleteCache;
        $final .= '<span class="additionalinfo restrictionTip" title="' . $clientversion . $Overseasclient . '"></span>';  // last "restriction", reserved for additional information in a fancybox window or a popup, client version at this point
        $final .= '</p>';															//closing restrictions
        $final .= '</dd></dl></div>';												//closing <head item_basic>
        $final .=  $basicStats;
        $final .=  $additionalStats;
        $final .=  $randomStart;


        $final .=  $randomStatsfixed;


        $final .=  $RealrandomStatsfinal;

        $final .=  $randomEnd;
        $final .=  $rideStats;
        $final .=  $chargeOne;														// level 1 charge details
        $final .=  $chargeTwo;														// level 2 charge details
        $final .=  $enchantmentLevel;												// maximum enchantment level
        $final .=  $maxUpgrade;														// maximum upgrade level
        $final .=  $manastoneSlots;
        $final .=  $Odian;
        $final .=  $manastoneSlotsNew;													// Manastone slot details
        $final .=  $skin_skillStart;
        $final .=  $skinSkill;														// reserved for skin_skill
        $final .=  $skin_skillEnd;
        $final .=  $enchantSkill;													//Enchantment Skill Buffs
        $final .=  $limiteddesc;													// High Daeva item description (X% increase damage when used by Y class)

        $final .=  $usecooldown;
        $final .=  $localization_desc_processed;													// description div, working as intended
        $final .=  $skinskilldesc;
        $final .=  $odianDet;
        $final .=  $petstuff;
        $final .=  $extraCurrancy;													// details about extra currency
        $final .=  $tradeIn;														//trade in details (items)
        $final .=  $abyssPrice;														// details about AP price
        $final .=  $eqEvolution;													// Evolution trees
        $final .=  $assemble;
        $final .=  $HouseObjDetails;
        $final .= '<div class="wrap item_id"><table><tr><td>In-game:</td><td><input style="width:250px" type="text" value="[item:' . $id . ']"></td></tr><tr><td>BBCode:</td><td><input style="width:250px" type="text" value="
[url=\'https://aionpowerbook.com/powerbook/Item/' . $id . '/' . $code . '\'][img]https://aionpowerbook.com/item/icon'.$iccl.'/' . $itemicon . '.png[/img] [color' . $bbcolor . ']' . $localization . '[/color][/url]"></td></tr></table></dl></div>';
        $final .=  $devdetails;
        $final .= '</div><div class="cl"></div><div class="cl"></div></div>'; 									//closing div

        $final .=  $CheckItemForAll; 																		// check if items contains items, where does it come from, etc
        $final .=  $CheckItemForAlltest;

        $final .= $settitle;
        $final .= $setdetails;
        $final .= $previewTitle;


        $final .=  $preview;
        $final .= '<div class="cl"></div>';


        $final .=  $craftTitle;
        $final .=  $craft;
        $final .=  $wraplist;

        $final .=  $docQuestTitle;

        $final .=  $docQuest;
        $final .=  $defcolorsinvis;




        $data = $final;


        $serv = $_SERVER['DOCUMENT_ROOT'];
        $cachefile = $serv . '/powerbook/extensions/AionExtensions/cache/itemdetails/'.$language.'/'.$dbid. $cl .'.html';
        if ($isQA == '1' or $SysQA == '1') {
        }else {
            file_put_contents($cachefile, $data);
        }


        $wgOut->AddHTML( $data );

        $extraWindget = '{{#ifexist: Widget:item_'.$id.' | {{Widget:item_'.$id.'}} | }}';
        $wgOut->addWikiText( $extraWindget );

        $DisplayTitle = '{{DISPLAYTITLE:' . $localization . '}}';
        return array( $DisplayTitle, 'noparse' => false );
    }

    else {

        include 'include/DBselect.php';
        $result = $db->query("SELECT id, search_ko, search_en, search_de, search_fr, search_us, search_es, search_pl, search_it
FROM  client_items
WHERE id = ? ", $dbid)->fetchArray();




        $localization=!empty($result["search_" . $language]) ? $result["search_" . $language] : $result['search_ko'];
        $id = $result['id'];


        // --> Don't forget to unserialize() or json_decode() if the data isn't a string!
        $servv = $_SERVER['DOCUMENT_ROOT'];
        $cachefilev = $servv . '/powerbook/extensions/AionExtensions/cache/itemdetails/'.$language.'/'.$dbid. $cl .'.html';
        $wgOut->AddHTML(  "<!-- Cached copy, generated ".date('H:i', filemtime($cachefile))." -->\n" );
        $data = file_get_contents($cachefilev);
        $wgOut->AddHTML( $data );

        $extraWindget = '{{#ifexist: Widget:item_'.$id.' | {{Widget:item_'.$id.'}} | }}';
        $wgOut->addWikiText( $extraWindget );


        $DisplayTitle = '{{DISPLAYTITLE:' . $localization . '}}';
        return array( $DisplayTitle, 'noparse' => false );
    }






}