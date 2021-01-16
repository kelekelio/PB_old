<?php

$wgExtensionCredits['variable'][] = array(
    'path'           => __FILE__,
    'name'           => 'Aion quests',
    'author'         => 'Kelekelio',
    'url'            => 'https://aionpowerbook.com',
    'descriptionmsg' => 'Aion quest details',
    'version'		 => '1.0',
    'license-name' 	 => 'LICENSE',
);

$wgHooks['ParserFirstCallInit'][] = 'AionQuestDetailsFunction';
$wgExtensionMessagesFiles['AionQuestDetails'] = __DIR__ . '/aion_quest_details.i18n.php';
function AionQuestDetailsFunction( &$parser ) {
    $parser->setFunctionHook( 'questdetails', 'AionQuestDetailsParserFunction' );
    return true;
}





function questrewarditem($name, $language)
{
    include 'include/DBselect.php';
    $result = $db->query("
SELECT id, icon_name, quality, search_$language, search_ko 
FROM client_items
WHERE name like '$name'
       ", $dbid)->fetchArray();


    $id = $result['id'];
    $localizationExtra = !empty($result['search_'.$language]) ? $result['search_'.$language] : $result['search_ko'];
    $quality = strtolower($result['quality']);
    $extraicon_name=strtolower($result["icon_name"]);


    if (isClassic() == "1") {
        $cl = "_c";
    }


    if ($id >=1) {
        return '<br><img class="thumb3" src="https://aionpowerbook.com/item/icon'.$cl.'/' . $extraicon_name . '.png"  >&nbsp;<a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $result["id"] . '" tooltipID="' . $result["id"] . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localizationExtra . '</a>';
    }elseif ($name[0] == "%"){
        return '<br><img class="thumb3" src="https://aionpowerbook.com/img/questundefinablereward.png"  >&nbsp;Random Reward';
    }else {
        return '';
    }

}

function questrewarditemicon($name, $language)
{
    include 'include/DBselect.php';
    $result = $db->query("
SELECT id, icon_name
FROM client_items
WHERE name like '$name'
       ", $dbid)->fetchArray();


    if (isClassic() == "1") {
        $cl = "_c";
    }


    $id = $result["id"];
    $icon=strtolower($result["icon_name"]);

    if ($id != NULL){
        return '<a href="https://aionpowerbook.com/powerbook/Item/' . $id . '" tooltipID="' . $id . '" tooltiplang="' . $language . '" class="tooltipzy" classic="'.isClassic().'"><img class="thumb3" src="https://aionpowerbook.com/item/icon'.$cl.'/' . $icon . '.png"  alt="" ></a> ';
    }else {
        return '';
    }
}

function dictionarylinktooltip($name, $language)
{

    $dictionary = translate($name, $language);

    $dictionary = strtr($dictionary, array(
        '&apos;' => "'"
    ));

    $diclink = explode(';', $dictionary);

    $dictionary = $diclink[0];



    $dictionarynoplural = strtr($dictionary, array(
        '[pl:"' => "</",
        '"]' => ">",
        '%%' => "'&percnt;",
        '%' => "",
    ));

    return $dictionarynoplural;
}

function dictionarylink($name, $language)
{

    $loca = translate($name, $language);

    $loca = strtr($loca, array(
        '&apos;' => "'"
    ));

    $diclink = explode(';', $loca);
    $dictionary = $diclink[0];
    $dicdescription = $diclink[1];

    $questt = preg_replace_callback('/\[%dic:(?<translation>[a-z_0-9]+)\]/i', function(array $matches) use ($language) {
        return dictionarylinktooltip($matches['translation'], $language);
    }, $dicdescription);





    $dictionarynoplural = strtr($dictionary, array(
        '#01888e' => "#FFF"
    ));



    $dictionarynoplural = strtr($dictionary, array(
        '[pl:"' => "</",
        '"]' => ">",
        '%%' => "'&percnt;",
        '%' => "",
    ));

    return '<span class="dictooltip" data-tooltip-content="#'.$name.'"><font color="#01888e">' . $dictionarynoplural . '</font></span><span class="tooltip_templates" style="display:none"><span id="'.$name.'">'. $questt .'</span></span>';
}

function dictionaryitemlink($name, $language)
{

    include 'include/DBselect.php';
    $result = $db->query("
SELECT id, quality, search_$language, search_ko
FROM client_items
WHERE  description = 'STR_$name'
LIMIT 0,1
       ", $dbid)->fetchArray();




    $localizationExtra = !empty($result['search_'.$language]) ? $result['search_'.$language] : $result['search_ko'];
    $quality = strtolower($result[quality]);
    if ($localizationExtra != NULL) {
        return '<a class="col_' . $quality . ' bold tooltipzy" href="https://aionpowerbook.com/powerbook/Item/' . $result["id"] . '" tooltipID="' . $result["id"] . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localizationExtra . '</a>';
    }else {
        return dictionarylink('STR_DIC_I_' . $name, $language);
    }
}

function dictionarynpclink($name, $language)
{
    include 'include/DBselect.php';
    $result = $db->query("
SELECT id, search_$language, search_ko
FROM client_npcs_monster
WHERE  description = 'STR_NPC_$name'
LIMIT 0,1
       ", $dbid)->fetchArray();



    $localizationExtra = !empty($result['search_'.$language]) ? $result['search_'.$language] : $result['search_ko'];
    if ($localizationExtra != NULL) {
        return '<a href="https://aionpowerbook.com/powerbook/NPC/' . $result["id"] . '">' . $localizationExtra . '</a>';
    }else {
        return dictionarylink('STR_DIC_N_' . $name, $language);
    }
}

function dictionarymonsterlink($name, $language)
{
    include 'include/DBselect.php';
    $result = $db->query("
SELECT id, search_$language, search_ko
FROM client_npcs_monster
WHERE  description = 'STR_NPC_$name'
LIMIT 0,1
       ", $dbid)->fetchArray();



    $localizationExtra = !empty($result['search_'.$language]) ? $result['search_'.$language] : $result['search_ko'];
    if ($localizationExtra != NULL) {
        return '<a href="https://aionpowerbook.com/powerbook/NPC/' . $result["id"] . '">' . $localizationExtra . '</a>';
    }else {
        return dictionarylink('STR_DIC_M_' . $name, $language);
    }
}

function questlink($name, $language)
{
    include 'include/DBselect.php';
    $result = $db->query("
   SELECT id, category1, search_$language, search_ko
FROM client_quest
WHERE name = '$name'
       ", $dbid)->fetchArray();



    $localizationExtra = !empty($result['search_'.$language]) ? $result['search_'.$language] : $result['search_ko'];
    $questid = $result["id"];
    $category = strtolower($result["category1"]);

    return '<div class="link_' . $category . '"><a href="https://aionpowerbook.com/powerbook/Quest/' . $questid . '">' . $localizationExtra . '</a></div><br>';
}








function AionQuestDetailsParserFunction( &$parser, $arg1 ) {
    global $wgOut;

    $language = language();
    $dbid = $_GET['dbid'];
    global $wgLang;
    $code = $wgLang->getCode();

    if (isClassic() == "1") {
        $cl = "_cl";
    }


    $serv = $_SERVER['DOCUMENT_ROOT'];
    $cachefile = $serv . '/powerbook/extensions/AionExtensions/cache/questdetails/'.$language.'/'.$dbid. $cl . '.html';
    $exists = file_exists($cachefile);

    if( !$exists || ( $exists && time() > strtotime('+31 days', filemtime($cachefile)) )) {




        include 'include/DBselect.php';
        $sql = $db->query("SELECT  * FROM client_quest WHERE id = '$dbid' ")->fetchAll();

        foreach ($sql as $questrow) {
            $questid=$questrow["id"];
            $category=strtolower($questrow["category1"]);

            //$localization = trans($questrow["description"], lang());

            $localization=!empty($questrow["search_" . $language]) ? $questrow["search_" . $language] : $questrow['search_ko'];

            $zone = $questrow["category2"];
            $minlevel_permitted=$questrow["minlevel_permitted"];
            $client_level=$questrow["client_level"];
            $ap1=number_format($questrow["reward_abyss_point1"]);
            $ap2=number_format($questrow["reward_abyss_point2"]);
            $ap3=number_format($questrow["reward_abyss_point3"]);
            $ap4=number_format($questrow["reward_abyss_point4"]);
            $reward_exp=number_format($questrow["reward_exp1"]);
            $kinah=number_format($questrow["reward_gold1"]);
            $glory=number_format($questrow["reward_glory_point1"]);
            $stronghold=number_format($questrow["reward_abyss_op_point1"]);
            $max_repeat_count=$questrow["max_repeat_count"];
            $growthaura = $questrow["reward_exp_boost1"]/10;
            $clientversion = $questrow["client_version"];
            $quest_repeat_cycle = strtolower($questrow["quest_repeat_cycle"]);
            $quest_repeat_count = $questrow["quest_repeat_count"];
            $fame_group_name1 = $questrow["fame_group_name1"];
            $reward_fame_exp1 = number_format($questrow["reward_fame_exp1"]);


            if ($max_repeat_count == '255') {
                $maxrepeatcount = '<b><font style="font-size:1.6em; font-family:Times New Roman">&#x221e;</font></b>';
            }else {
                $maxrepeatcount = $max_repeat_count;
            }


            include 'include/overseas.php';


            if ($quest_repeat_count > 1) {
                $repeatcount = $quest_repeat_count . ' / ' . $maxrepeatcount;
            }else {
                $repeatcount = $maxrepeatcount;
            }

            if ($quest_repeat_cycle == 'all') {
                $resettime = '(Reset: Daily)';
            }elseif ($quest_repeat_cycle != NULL) {
                $resettime = '(Reset: ' . $quest_repeat_cycle . ')';
            }

            else {
                $resettime = '';
            }

            if ($questrow["finished_quest_cond1"] != NULL) {

                $eachquest = explode(',', $questrow["finished_quest_cond1"]);

                foreach($eachquest as $key) {
                    $prequests .= questlink($key, $language);
                }
            }else {
                $prequests .= '---';
            }


            if ($questrow["finished_quest_cond2"] != NULL) {
                $eachquest = explode(',', $questrow["finished_quest_cond2"]);

                $prequests .= '<br>';

                foreach($eachquest as $key) {
                    $prequests .= questlink($key, $language);
                }
            }

            if ($questrow["finished_quest_cond3"] != NULL) {
                $eachquest = explode(',', $questrow["finished_quest_cond3"]);

                $prequests .= '<br>';

                foreach($eachquest as $key) {
                    $prequests .= questlink($key, $language);
                }
            }

            if ($questrow["finished_quest_cond4"] != NULL) {
                $eachquest = explode(',', $questrow["finished_quest_cond4"]);

                $prequests .= '<br>';

                foreach($eachquest as $key) {
                    $prequests .= questlink($key, $language);
                }
            }

            if ($questrow["finished_quest_cond5"] != NULL) {
                $eachquest = explode(',', $questrow["finished_quest_cond5"]);

                $prequests .= '<br>';

                foreach($eachquest as $key) {
                    $prequests .= questlink($key, $language);
                }
            }

            if ($questrow["finished_quest_cond6"] != NULL) {
                $eachquest = explode(',', $questrow["finished_quest_cond6"]);

                $prequests .= '<br>';

                foreach($eachquest as $key) {
                    $prequests .= questlink($key, $language);
                }
            }


            $zoneloca = strtr(translate('STR_ZONEMAP_QUEST_LEVEL', $language), array(
                "%0" => '',
                " " => '',
            ));



            if ($questrow["maxlevel_permitted"] > 0) {
                $maxlevel_permitted = '-' . $questrow["maxlevel_permitted"];
            }

            if ($questrow["youtube"] != NULL) {
                $youtube = '<div style="" class="qvideo"><a id="questvideo" href="https://www.youtube.com/watch?v=' . $questrow["youtube"] . '"></a></div>';
            }





// EXP
            if ($questrow["reward_exp1"] > 0) {
                $expreward = '<p class="reward_info"><em>' . translate('STR_EXP', $language) . '</em>&nbsp;<span class="reward_exp">' . $reward_exp . '</span><br></p>';
            }

// Fame
            if ($reward_fame_exp1 > 0) {
                $fameexpreward = '<p class="reward_info"><em>Fame ' . translate('STR_EXP', $language) . '</em>&nbsp;<span class="reward_exp">' . $reward_fame_exp1 . ' ('. translate('STR_' . $fame_group_name1, $language) .')</span><br></p>';
            }

// KINAH
            if ($questrow["reward_gold1"] > 0) {
                $kinahreward = '<p class="reward_info"><em>' . translate('STR_GOLD', $language) . '</em>&nbsp;<span class="reward_gold">' . $kinah . '</span><br></p>';
            }

//growth aura
            if ($growthaura > 0) {
                $growth = '<p class="reward_info"><em><a href="https://aionpowerbook.com/powerbook/Growth_Aura">' . translate('STR_TOOLTIP_EXP_BOOST_NAME', $language) . '</a></em>&nbsp;<span class="reward_exp">+' . $growthaura . '%</span><br></p>';
            }

// Abyss Points
            if ($ap1 != 0) {
                $apreward = '<p class="reward_info"><em><a href="Abyss Points">' . translate('STR_ABYSS_POINT', $language) . '</a></em>&nbsp;<span class="reward_ap">' . $ap1 . '</span><br></p>';
            }
            if ($ap2 != 0) {
                $apreward = '<p class="reward_info"><em><a href="Abyss Points">' . translate('STR_ABYSS_POINT', $language) . '</a></em>&nbsp;<span class="reward_ap">' . $ap2 . '</span><br></p>';
            }
            if ($ap3 != 0) {
                $apreward = '<p class="reward_info"><em><a href="Abyss Points">' . translate('STR_ABYSS_POINT', $language) . '</a></em>&nbsp;<span class="reward_ap">' . $ap3 . '</span><br></p>';
            }
            if ($ap4 != 0) {
                $apreward = '<p class="reward_info"><em><a href="Abyss Points">' . translate('STR_ABYSS_POINT', $language) . '</a></em>&nbsp;<span class="reward_ap">' . $ap4 . '</span><br></p>';
            }



// Honour Points
            if ($questrow["reward_glory_point1"] >= 1) {
                $hpreward = '<p class="reward_info"><em><a href="Honour Points">' . translate('STR_GLORY_POINT', $language) . '</a></em>&nbsp;<span class="base_reinforcement">' . $glory . '</span><br></p>';
            }

// Stronghold Reinforcement
            if ($questrow["reward_abyss_op_point1"] >= 1) {
                $strnghreward = '<p class="reward_info"><em><a href="Stronghold Reinforcement Points">' . translate('STR_START_DIALOG__TOOLTIP_ABYSS_OP', $language) . '</a></em>&nbsp;<span class="base_reinforcement">' . $stronghold . '</span><br></p>';
            }

// CP rewards
            if ($questrow["reward_cp1"] >= 1) {
                $cpreward = '<p class="reward_info"><em><a href="Creativity">Creativity Points</a></em>&nbsp;<span class="base_reinforcement">' . $questrow["reward_cp1"] . '</span><br></p>';
            }






            if ($questrow["selectable_reward_item1_1"] != NULL) {
                $reword = explode(' ', $questrow["selectable_reward_item1_1"]);
                $selectablereward11 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $selectablereward11 = ' ';
            }
            if ($questrow["selectable_reward_item1_2"] != NULL) {
                $reword = explode(' ', $questrow["selectable_reward_item1_2"]);
                $selectablereward12 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $selectablereward12 = ' ';
            }
            if ($questrow["selectable_reward_item1_3"] != NULL) {
                $reword = explode(' ', $questrow["selectable_reward_item1_3"]);
                $selectablereward13 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $selectablereward13 = ' ';
            }
            if ($questrow["selectable_reward_item1_4"] != NULL) {
                $reword = explode(' ', $questrow["selectable_reward_item1_4"]);
                $selectablereward14 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $selectablereward14 = ' ';
            }
            if ($questrow["selectable_reward_item1_5"] != NULL) {
                $reword = explode(' ', $questrow["selectable_reward_item1_5"]);
                $selectablereward15 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $selectablereward15 = ' ';
            }
            if ($questrow["selectable_reward_item1_6"] != NULL) {
                $reword = explode(' ', $questrow["selectable_reward_item1_6"]);
                $selectablereward16 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $selectablereward16 = ' ';
            }
            if ($questrow["selectable_reward_item1_7"] != NULL) {
                $reword = explode(' ', $questrow["selectable_reward_item1_7"]);
                $selectablereward17 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $selectablereward17 = ' ';
            }
            if ($questrow["selectable_reward_item1_8"] != NULL) {
                $reword = explode(' ', $questrow["selectable_reward_item1_8"]);
                $selectablereward18 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $selectablereward18 = ' ';
            }
            if ($questrow["selectable_reward_item1_9"] != NULL) {
                $reword = explode(' ', $questrow["selectable_reward_item1_9"]);
                $selectablereward19 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $selectablereward19 = ' ';
            }
            if ($questrow["selectable_reward_item1_10"] != NULL) {
                $reword = explode(' ', $questrow["selectable_reward_item1_10"]);
                $selectablereward110 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $selectablereward110 = ' ';
            }
            if ($questrow["selectable_reward_item1_11"] != NULL) {
                $reword = explode(' ', $questrow["selectable_reward_item1_11"]);
                $selectablereward111 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $selectablereward111 = ' ';
            }
            if ($questrow["selectable_reward_item1_12"] != NULL) {
                $reword = explode(' ', $questrow["selectable_reward_item1_12"]);
                $selectablereward112 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $selectablereward112 = ' ';
            }
            if ($questrow["selectable_reward_item1_13"] != NULL) {
                $reword = explode(' ', $questrow["selectable_reward_item1_13"]);
                $selectablereward113 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $selectablereward113 = ' ';
            }
            if ($questrow["selectable_reward_item1_14"] != NULL) {
                $reword = explode(' ', $questrow["selectable_reward_item1_14"]);
                $selectablereward114 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $selectablereward114 = ' ';
            }
            if ($questrow["selectable_reward_item1_15"] != NULL) {
                $reword = explode(' ', $questrow["selectable_reward_item1_15"]);
                $selectablereward115 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $selectablereward115 = ' ';
            }





            if ($questrow["selectable_reward_item2_1"] != NULL and $questrow["selectable_reward_item2_1"] != $questrow["selectable_reward_item1_1"]) {
                $reword = explode(' ', $questrow["selectable_reward_item2_1"]);
                $selectablereward21 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $selectablereward21 = ' ';
            }
            if ($questrow["selectable_reward_item2_2"] != NULL and $questrow["selectable_reward_item2_2"] != $questrow["selectable_reward_item1_2"]) {
                $reword = explode(' ', $questrow["selectable_reward_item2_2"]);
                $selectablereward22 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $selectablereward22 = ' ';
            }
            if ($questrow["selectable_reward_item2_3"] != NULL and $questrow["selectable_reward_item2_3"] != $questrow["selectable_reward_item1_3"]) {
                $reword = explode(' ', $questrow["selectable_reward_item2_3"]);
                $selectablereward23 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $selectablereward23 = ' ';
            }
            if ($questrow["selectable_reward_item2_4"] != NULL and $questrow["selectable_reward_item2_4"] != $questrow["selectable_reward_item1_4"]) {
                $reword = explode(' ', $questrow["selectable_reward_item2_4"]);
                $selectablereward24 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $selectablereward24 = ' ';
            }
            if ($questrow["selectable_reward_item2_5"] != NULL and $questrow["selectable_reward_item2_5"] != $questrow["selectable_reward_item1_5"]) {
                $reword = explode(' ', $questrow["selectable_reward_item2_5"]);
                $selectablereward25 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $selectablereward25 = ' ';
            }
            if ($questrow["selectable_reward_item2_6"] != NULL and $questrow["selectable_reward_item2_6"] != $questrow["selectable_reward_item1_6"]) {
                $reword = explode(' ', $questrow["selectable_reward_item2_6"]);
                $selectablereward26 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $selectablereward26 = ' ';
            }
            if ($questrow["selectable_reward_item2_7"] != NULL and $questrow["selectable_reward_item2_7"] != $questrow["selectable_reward_item1_7"]) {
                $reword = explode(' ', $questrow["selectable_reward_item2_7"]);
                $selectablereward27 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $selectablereward27 = ' ';
            }
            if ($questrow["selectable_reward_item2_8"] != NULL and $questrow["selectable_reward_item2_8"] != $questrow["selectable_reward_item1_8"]) {
                $reword = explode(' ', $questrow["selectable_reward_item2_8"]);
                $selectablereward28 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $selectablereward28 = ' ';
            }
            if ($questrow["selectable_reward_item2_9"] != NULL and $questrow["selectable_reward_item2_9"] != $questrow["selectable_reward_item1_9"]) {
                $reword = explode(' ', $questrow["selectable_reward_item2_9"]);
                $selectablereward29 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $selectablereward29 = ' ';
            }
            if ($questrow["selectable_reward_item2_10"] != NULL) {
                $reword = explode(' ', $questrow["selectable_reward_item2_10"]);
                $selectablereward210 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $selectablereward210 = ' ';
            }
            if ($questrow["selectable_reward_item2_11"] != NULL) {
                $reword = explode(' ', $questrow["selectable_reward_item2_11"]);
                $selectablereward211 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $selectablereward211 = ' ';
            }
            if ($questrow["selectable_reward_item2_12"] != NULL) {
                $reword = explode(' ', $questrow["selectable_reward_item2_12"]);
                $selectablereward212 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $selectablereward212 = ' ';
            }
            if ($questrow["selectable_reward_item2_13"] != NULL) {
                $reword = explode(' ', $questrow["selectable_reward_item2_13"]);
                $selectablereward213 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $selectablereward213 = ' ';
            }






            if ($questrow["selectable_reward_item3_1"] != NULL and $questrow["selectable_reward_item3_1"] != $questrow["selectable_reward_item2_1"]) {
                $reword = explode(' ', $questrow["selectable_reward_item3_1"]);
                $selectablereward31 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $selectablereward31 = ' ';
            }
            if ($questrow["selectable_reward_item3_2"] != NULL and $questrow["selectable_reward_item3_2"] != $questrow["selectable_reward_item2_2"]) {
                $reword = explode(' ', $questrow["selectable_reward_item3_2"]);
                $selectablereward32 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $selectablereward32 = ' ';
            }
            if ($questrow["selectable_reward_item3_3"] != NULL and $questrow["selectable_reward_item3_3"] != $questrow["selectable_reward_item2_3"]) {
                $reword = explode(' ', $questrow["selectable_reward_item3_3"]);
                $selectablereward33 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $selectablereward33 = ' ';
            }
            if ($questrow["selectable_reward_item3_4"] != NULL and $questrow["selectable_reward_item3_4"] != $questrow["selectable_reward_item2_4"]) {
                $reword = explode(' ', $questrow["selectable_reward_item3_4"]);
                $selectablereward34 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $selectablereward34 = ' ';
            }
            if ($questrow["selectable_reward_item3_5"] != NULL and $questrow["selectable_reward_item3_5"] != $questrow["selectable_reward_item2_5"]) {
                $reword = explode(' ', $questrow["selectable_reward_item3_5"]);
                $selectablereward35 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $selectablereward35 = ' ';
            }
            if ($questrow["selectable_reward_item3_6"] != NULL and $questrow["selectable_reward_item3_6"] != $questrow["selectable_reward_item2_6"]) {
                $reword = explode(' ', $questrow["selectable_reward_item3_6"]);
                $selectablereward36 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $selectablereward36 = ' ';
            }





            if ($questrow["selectable_reward_item4_1"] != NULL) {
                $reword = explode(' ', $questrow["selectable_reward_item4_1"]);
                $selectablereward41 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $selectablereward41 = ' ';
            }
            if ($questrow["selectable_reward_item4_2"] != NULL) {
                $reword = explode(' ', $questrow["selectable_reward_item4_2"]);
                $selectablereward42 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $selectablereward42 = ' ';
            }
            if ($questrow["selectable_reward_item4_3"] != NULL) {
                $reword = explode(' ', $questrow["selectable_reward_item4_3"]);
                $selectablereward43 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $selectablereward43 = ' ';
            }
            if ($questrow["selectable_reward_item4_4"] != NULL) {
                $reword = explode(' ', $questrow["selectable_reward_item4_4"]);
                $selectablereward44 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $selectablereward44 = ' ';
            }
            if ($questrow["selectable_reward_item4_5"] != NULL) {
                $reword = explode(' ', $questrow["selectable_reward_item4_5"]);
                $selectablereward45 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $selectablereward45 = ' ';
            }




            if ($questrow["selectable_reward_item5_1"] != NULL) {
                $reword = explode(' ', $questrow["selectable_reward_item5_1"]);
                $selectablereward51 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $selectablereward51 = ' ';
            }
            if ($questrow["selectable_reward_item5_2"] != NULL) {
                $reword = explode(' ', $questrow["selectable_reward_item5_2"]);
                $selectablereward52 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $selectablereward52 = ' ';
            }
            if ($questrow["selectable_reward_item5_3"] != NULL) {
                $reword = explode(' ', $questrow["selectable_reward_item5_3"]);
                $selectablereward53 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $selectablereward53 = ' ';
            }
            if ($questrow["selectable_reward_item5_4"] != NULL) {
                $reword = explode(' ', $questrow["selectable_reward_item5_4"]);
                $selectablereward54 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $selectablereward54 = ' ';
            }
            if ($questrow["selectable_reward_item5_5"] != NULL) {
                $reword = explode(' ', $questrow["selectable_reward_item5_5"]);
                $selectablereward55 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $selectablereward55 = ' ';
            }




            if ($questrow["selectable_reward_item6_1"] != NULL) {
                $reword = explode(' ', $questrow["selectable_reward_item6_1"]);
                $selectablereward61 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $selectablereward61 = ' ';
            }









            if ($questrow["reward_item1_1"] != NULL) {
                $reword = explode(' ', $questrow["reward_item1_1"]);
                $reward11 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $reward11 = ' ';
            }
            if ($questrow["reward_item1_2"] != NULL) {
                $reword = explode(' ', $questrow["reward_item1_2"]);
                $reward12 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $reward12 = ' ';
            }
            if ($questrow["reward_item1_3"] != NULL) {
                $reword = explode(' ', $questrow["reward_item1_3"]);
                $reward13 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $reward13 = ' ';
            }
            if ($questrow["reward_item1_4"] != NULL) {
                $reword = explode(' ', $questrow["reward_item1_4"]);
                $reward14 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $reward14 = ' ';
            }
            if ($questrow["reward_item1_5"] != NULL) {
                $reword = explode(' ', $questrow["reward_item1_5"]);
                $reward15 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $reward15 = ' ';
            }



            if ($questrow["reward_item2_1"] != NULL and $questrow["reward_item2_1"] != $questrow["reward_item1_1"]) {
                $reword = explode(' ', $questrow["reward_item2_1"]);
                $reward21 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $reward21 = '';
            }
            if ($questrow["reward_item2_2"] != NULL) {
                $reword = explode(' ', $questrow["reward_item2_2"]);
                $reward22 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $reward22 = ' ';
            }
            if ($questrow["reward_item2_3"] != NULL) {
                $reword = explode(' ', $questrow["reward_item2_3"]);
                $reward23 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $reward23 = ' ';
            }


            if ($questrow["reward_item3_1"] != NULL) {
                $reword = explode(' ', $questrow["reward_item3_1"]);
                $reward31 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $reward31 = ' ';
            }
            if ($questrow["reward_item3_2"] != NULL) {
                $reword = explode(' ', $questrow["reward_item3_2"]);
                $reward32 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $reward32 = ' ';
            }
            if ($questrow["reward_item3_3"] != NULL) {
                $reword = explode(' ', $questrow["reward_item3_3"]);
                $reward33 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $reward33 = ' ';
            }



            if ($questrow["reward_item4_1"] != NULL) {
                $reword = explode(' ', $questrow["reward_item4_1"]);
                $reward41 = questrewarditem($reword[0], $language) .' '. $reword[1];
            }else {
                $reward41 = ' ';
            }







// FIGHTER

            if ($questrow["fighter_selectable_item"] != NULL) {
                $reword = explode(' ', $questrow["fighter_selectable_item"]);
                $fighter_selectable = questrewarditemicon($reword[0], $language) . '(' . translate('STR_CLASS_NAME_FIGHTER', $language) . ')<br>';
                $fighter_selectable_item = strtr($fighter_selectable, array(
                    '[f:"' => '/',
                    '"]'  => '',
                ));

            }else {
                $fighter_selectable_item = ' ';
            }

            if ($questrow["fighter_selectable_item1"] != NULL) {
                $reword = explode(' ', $questrow["fighter_selectable_item1"]);
                $fighter_selectable_item1 = questrewarditemicon($reword[0], $language);
            }else {
                $fighter_selectable_item1 = ' ';
            }
            if ($questrow["fighter_selectable_item2"] != NULL) {
                $reword = explode(' ', $questrow["fighter_selectable_item2"]);
                $fighter_selectable_item2 = questrewarditemicon($reword[0], $language);
            }else {
                $fighter_selectable_item2 = ' ';
            }
            if ($questrow["fighter_selectable_item3"] != NULL) {
                $reword = explode(' ', $questrow["fighter_selectable_item3"]);
                $fighter_selectable_item3 = questrewarditemicon($reword[0], $language);
            }else {
                $fighter_selectable_item3 = ' ';
            }
            if ($questrow["fighter_selectable_item4"] != NULL) {
                $reword = explode(' ', $questrow["fighter_selectable_item4"]);
                $fighter_selectable_item4 = questrewarditemicon($reword[0], $language);
            }else {
                $fighter_selectable_item4 = ' ';
            }
            if ($questrow["fighter_selectable_item5"] != NULL) {
                $reword = explode(' ', $questrow["fighter_selectable_item5"]);
                $fighter_selectable_item5 = questrewarditemicon($reword[0], $language);
            }else {
                $fighter_selectable_item5 = ' ';
            }
            if ($questrow["fighter_selectable_item6"] != NULL) {
                $reword = explode(' ', $questrow["fighter_selectable_item6"]);
                $fighter_selectable_item6 = questrewarditemicon($reword[0], $language);
            }else {
                $fighter_selectable_item6 = ' ';
            }
            if ($questrow["fighter_selectable_item7"] != NULL) {
                $reword = explode(' ', $questrow["fighter_selectable_item7"]);
                $fighter_selectable_item7 = questrewarditemicon($reword[0], $language);
            }else {
                $fighter_selectable_item7 = ' ';
            }
            if ($questrow["fighter_selectable_item8"] != NULL) {
                $reword = explode(' ', $questrow["fighter_selectable_item8"]);
                $fighter_selectable_item8 = questrewarditemicon($reword[0], $language);
            }else {
                $fighter_selectable_item8 = ' ';
            }





            if ($questrow["knight_selectable_item"] != NULL) {
                $reword = explode(' ', $questrow["knight_selectable_item"]);
                $knight_selectable = questrewarditemicon($reword[0], $language) . '(' . translate('STR_CLASS_NAME_KNIGHT', $language) . ')<br>';
                $knight_selectable_item = strtr($knight_selectable, array(
                    '[f:"' => '/',
                    '"]'  => '',
                ));
            }else {
                $knight_selectable_item = ' ';
            }

            if ($questrow["knight_selectable_item1"] != NULL) {
                $reword = explode(' ', $questrow["knight_selectable_item1"]);
                $knight_selectable_item1 = questrewarditemicon($reword[0], $language);
            }else {
                $knight_selectable_item1 = ' ';
            }

            if ($questrow["knight_selectable_item2"] != NULL) {
                $reword = explode(' ', $questrow["knight_selectable_item2"]);
                $knight_selectable_item2 = questrewarditemicon($reword[0], $language);
            }else {
                $knight_selectable_item2 = ' ';
            }

            if ($questrow["knight_selectable_item3"] != NULL) {
                $reword = explode(' ', $questrow["knight_selectable_item3"]);
                $knight_selectable_item3 = questrewarditemicon($reword[0], $language);
            }else {
                $knight_selectable_item3 = ' ';
            }

            if ($questrow["knight_selectable_item4"] != NULL) {
                $reword = explode(' ', $questrow["knight_selectable_item4"]);
                $knight_selectable_item4 = questrewarditemicon($reword[0], $language);
            }else {
                $knight_selectable_item4 = ' ';
            }

            if ($questrow["knight_selectable_item5"] != NULL) {
                $reword = explode(' ', $questrow["knight_selectable_item5"]);
                $knight_selectable_item5 = questrewarditemicon($reword[0], $language);
            }else {
                $knight_selectable_item5 = ' ';
            }

            if ($questrow["knight_selectable_item6"] != NULL) {
                $reword = explode(' ', $questrow["knight_selectable_item6"]);
                $knight_selectable_item6 = questrewarditemicon($reword[0], $language);
            }else {
                $knight_selectable_item6 = ' ';
            }
            if ($questrow["knight_selectable_item7"] != NULL) {
                $reword = explode(' ', $questrow["knight_selectable_item7"]);
                $knight_selectable_item7 = questrewarditemicon($reword[0], $language);
            }else {
                $knight_selectable_item7 = ' ';
            }
            if ($questrow["knight_selectable_item8"] != NULL) {
                $reword = explode(' ', $questrow["knight_selectable_item8"]);
                $knight_selectable_item8 = questrewarditemicon($reword[0], $language);
            }else {
                $knight_selectable_item8 = ' ';
            }



            if ($questrow["ranger_selectable_item"] != NULL) {
                $reword = explode(' ', $questrow["ranger_selectable_item"]);
                $ranger_selectable = questrewarditemicon($reword[0], $language) . '(' . translate('STR_CLASS_NAME_RANGER', $language) . ')<br>';
                $ranger_selectable_item = strtr($ranger_selectable, array(
                    '[f:"' => '/',
                    '"]'  => '',
                ));
            }else {
                $ranger_selectable_item = ' ';
            }

            if ($questrow["ranger_selectable_item1"] != NULL) {
                $reword = explode(' ', $questrow["ranger_selectable_item1"]);
                $ranger_selectable_item1 = questrewarditemicon($reword[0], $language);
            }else {
                $ranger_selectable_item1 = ' ';
            }

            if ($questrow["ranger_selectable_item2"] != NULL) {
                $reword = explode(' ', $questrow["ranger_selectable_item2"]);
                $ranger_selectable_item2 = questrewarditemicon($reword[0], $language);
            }else {
                $ranger_selectable_item2 = ' ';
            }

            if ($questrow["ranger_selectable_item3"] != NULL) {
                $reword = explode(' ', $questrow["ranger_selectable_item3"]);
                $ranger_selectable_item3 = questrewarditemicon($reword[0], $language);
            }else {
                $ranger_selectable_item3 = ' ';
            }

            if ($questrow["ranger_selectable_item4"] != NULL) {
                $reword = explode(' ', $questrow["ranger_selectable_item4"]);
                $ranger_selectable_item4 = questrewarditemicon($reword[0], $language);
            }else {
                $ranger_selectable_item4 = ' ';
            }

            if ($questrow["ranger_selectable_item5"] != NULL) {
                $reword = explode(' ', $questrow["ranger_selectable_item5"]);
                $ranger_selectable_item5 = questrewarditemicon($reword[0], $language);
            }else {
                $ranger_selectable_item5 = ' ';
            }

            if ($questrow["ranger_selectable_item6"] != NULL) {
                $reword = explode(' ', $questrow["ranger_selectable_item6"]);
                $ranger_selectable_item6 = questrewarditemicon($reword[0], $language);
            }else {
                $ranger_selectable_item6 = ' ';
            }
            if ($questrow["ranger_selectable_item7"] != NULL) {
                $reword = explode(' ', $questrow["ranger_selectable_item7"]);
                $ranger_selectable_item7 = questrewarditemicon($reword[0], $language);
            }else {
                $ranger_selectable_item7 = ' ';
            }
            if ($questrow["ranger_selectable_item8"] != NULL) {
                $reword = explode(' ', $questrow["ranger_selectable_item8"]);
                $ranger_selectable_item8 = questrewarditemicon($reword[0], $language);
            }else {
                $ranger_selectable_item8 = ' ';
            }


            if ($questrow["assassin_selectable_item"] != NULL) {
                $reword = explode(' ', $questrow["assassin_selectable_item"]);
                $assassin_selectable = questrewarditemicon($reword[0], $language) . '(' . translate('STR_CLASS_NAME_ASSASSIN', $language) . ')<br>';
                $assassin_selectable_item = strtr($assassin_selectable, array(
                    '[f:"' => '/',
                    '"]'  => '',
                ));
            }else {
                $assassin_selectable_item = ' ';
            }

            if ($questrow["assassin_selectable_item1"] != NULL) {
                $reword = explode(' ', $questrow["assassin_selectable_item1"]);
                $assassin_selectable_item1 = questrewarditemicon($reword[0], $language);
            }else {
                $assassin_selectable_item1 = ' ';
            }

            if ($questrow["assassin_selectable_item2"] != NULL) {
                $reword = explode(' ', $questrow["assassin_selectable_item2"]);
                $assassin_selectable_item2 = questrewarditemicon($reword[0], $language);
            }else {
                $assassin_selectable_item2 = ' ';
            }

            if ($questrow["assassin_selectable_item3"] != NULL) {
                $reword = explode(' ', $questrow["assassin_selectable_item3"]);
                $assassin_selectable_item3 = questrewarditemicon($reword[0], $language);
            }else {
                $assassin_selectable_item3 = ' ';
            }

            if ($questrow["assassin_selectable_item4"] != NULL) {
                $reword = explode(' ', $questrow["assassin_selectable_item4"]);
                $assassin_selectable_item4 = questrewarditemicon($reword[0], $language);
            }else {
                $assassin_selectable_item4 = ' ';
            }

            if ($questrow["assassin_selectable_item5"] != NULL) {
                $reword = explode(' ', $questrow["assassin_selectable_item5"]);
                $assassin_selectable_item5 = questrewarditemicon($reword[0], $language);
            }else {
                $assassin_selectable_item5 = ' ';
            }

            if ($questrow["assassin_selectable_item6"] != NULL) {
                $reword = explode(' ', $questrow["assassin_selectable_item6"]);
                $assassin_selectable_item6 = questrewarditemicon($reword[0], $language);
            }else {
                $assassin_selectable_item6 = ' ';
            }
            if ($questrow["assassin_selectable_item7"] != NULL) {
                $reword = explode(' ', $questrow["assassin_selectable_item7"]);
                $assassin_selectable_item7 = questrewarditemicon($reword[0], $language);
            }else {
                $assassin_selectable_item7 = ' ';
            }
            if ($questrow["assassin_selectable_item8"] != NULL) {
                $reword = explode(' ', $questrow["assassin_selectable_item8"]);
                $assassin_selectable_item8 = questrewarditemicon($reword[0], $language);
            }else {
                $assassin_selectable_item8 = ' ';
            }



// wizard

            if ($questrow["wizard_selectable_item"] != NULL) {
                $reword = explode(' ', $questrow["wizard_selectable_item"]);
                $wizard_selectable = questrewarditemicon($reword[0], $language) . '(' . translate('STR_CLASS_NAME_WIZARD', $language) . ')<br>';
                $wizard_selectable_item = strtr($wizard_selectable, array(
                    '[f:"' => '/',
                    '"]'  => '',
                ));
            }else {
                $wizard_selectable_item = ' ';
            }

            if ($questrow["wizard_selectable_item1"] != NULL) {
                $reword = explode(' ', $questrow["wizard_selectable_item1"]);
                $wizard_selectable_item1 = questrewarditemicon($reword[0], $language);
            }else {
                $wizard_selectable_item1 = ' ';
            }

            if ($questrow["wizard_selectable_item2"] != NULL) {
                $reword = explode(' ', $questrow["wizard_selectable_item2"]);
                $wizard_selectable_item2 = questrewarditemicon($reword[0], $language);
            }else {
                $wizard_selectable_item2 = ' ';
            }

            if ($questrow["wizard_selectable_item3"] != NULL) {
                $reword = explode(' ', $questrow["wizard_selectable_item3"]);
                $wizard_selectable_item3 = questrewarditemicon($reword[0], $language);
            }else {
                $wizard_selectable_item3 = ' ';
            }

            if ($questrow["wizard_selectable_item4"] != NULL) {
                $reword = explode(' ', $questrow["wizard_selectable_item4"]);
                $wizard_selectable_item4 = questrewarditemicon($reword[0], $language);
            }else {
                $wizard_selectable_item4 = ' ';
            }

            if ($questrow["wizard_selectable_item5"] != NULL) {
                $reword = explode(' ', $questrow["wizard_selectable_item5"]);
                $wizard_selectable_item5 = questrewarditemicon($reword[0], $language);
            }else {
                $wizard_selectable_item5 = ' ';
            }

            if ($questrow["wizard_selectable_item6"] != NULL) {
                $reword = explode(' ', $questrow["wizard_selectable_item6"]);
                $wizard_selectable_item6 = questrewarditemicon($reword[0], $language);
            }else {
                $wizard_selectable_item6 = ' ';
            }
            if ($questrow["wizard_selectable_item7"] != NULL) {
                $reword = explode(' ', $questrow["wizard_selectable_item7"]);
                $wizard_selectable_item7 = questrewarditemicon($reword[0], $language);
            }else {
                $wizard_selectable_item7 = ' ';
            }
            if ($questrow["wizard_selectable_item8"] != NULL) {
                $reword = explode(' ', $questrow["wizard_selectable_item8"]);
                $wizard_selectable_item8 = questrewarditemicon($reword[0], $language);
            }else {
                $wizard_selectable_item8 = ' ';
            }


// elementalist

            if ($questrow["elementalist_selectable_item"] != NULL) {
                $reword = explode(' ', $questrow["elementalist_selectable_item"]);
                $elementalist_selectable = questrewarditemicon($reword[0], $language) . '(' . translate('STR_CLASS_NAME_ELEMENTALIST', $language) . ')<br>';
                $elementalist_selectable_item = strtr($elementalist_selectable, array(
                    '[f:"' => '/',
                    '"]'  => '',
                ));
            }else {
                $elementalist_selectable_item = ' ';
            }

            if ($questrow["elementalist_selectable_item1"] != NULL) {
                $reword = explode(' ', $questrow["elementalist_selectable_item1"]);
                $elementalist_selectable_item1 = questrewarditemicon($reword[0], $language);
            }else {
                $elementalist_selectable_item1 = ' ';
            }

            if ($questrow["elementalist_selectable_item2"] != NULL) {
                $reword = explode(' ', $questrow["elementalist_selectable_item2"]);
                $elementalist_selectable_item2 = questrewarditemicon($reword[0], $language);
            }else {
                $elementalist_selectable_item2 = ' ';
            }

            if ($questrow["elementalist_selectable_item3"] != NULL) {
                $reword = explode(' ', $questrow["elementalist_selectable_item3"]);
                $elementalist_selectable_item3 = questrewarditemicon($reword[0], $language);
            }else {
                $elementalist_selectable_item3 = ' ';
            }

            if ($questrow["elementalist_selectable_item4"] != NULL) {
                $reword = explode(' ', $questrow["elementalist_selectable_item4"]);
                $elementalist_selectable_item4 = questrewarditemicon($reword[0], $language);
            }else {
                $elementalist_selectable_item4 = ' ';
            }

            if ($questrow["elementalist_selectable_item5"] != NULL) {
                $reword = explode(' ', $questrow["elementalist_selectable_item5"]);
                $elementalist_selectable_item5 = questrewarditemicon($reword[0], $language);
            }else {
                $elementalist_selectable_item5 = ' ';
            }

            if ($questrow["elementalist_selectable_item6"] != NULL) {
                $reword = explode(' ', $questrow["elementalist_selectable_item6"]);
                $elementalist_selectable_item6 = questrewarditemicon($reword[0], $language);
            }else {
                $elementalist_selectable_item6 = ' ';
            }
            if ($questrow["elementalist_selectable_item7"] != NULL) {
                $reword = explode(' ', $questrow["elementalist_selectable_item7"]);
                $elementalist_selectable_item7 = questrewarditemicon($reword[0], $language);
            }else {
                $elementalist_selectable_item7 = ' ';
            }
            if ($questrow["elementalist_selectable_item8"] != NULL) {
                $reword = explode(' ', $questrow["elementalist_selectable_item8"]);
                $elementalist_selectable_item8 = questrewarditemicon($reword[0], $language);
            }else {
                $elementalist_selectable_item8 = ' ';
            }

// priest

            if ($questrow["priest_selectable_item"] != NULL) {
                $reword = explode(' ', $questrow["priest_selectable_item"]);
                $priest_selectable = questrewarditemicon($reword[0], $language) . '(' . translate('STR_CLASS_NAME_PRIEST', $language) . ')<br>';
                $priest_selectable_item = strtr($priest_selectable, array(
                    '[f:"' => '/',
                    '"]'  => '',
                ));
            }else {
                $priest_selectable_item = ' ';
            }

            if ($questrow["priest_selectable_item1"] != NULL) {
                $reword = explode(' ', $questrow["priest_selectable_item1"]);
                $priest_selectable_item1 = questrewarditemicon($reword[0], $language);
            }else {
                $priest_selectable_item1 = ' ';
            }

            if ($questrow["priest_selectable_item2"] != NULL) {
                $reword = explode(' ', $questrow["priest_selectable_item2"]);
                $priest_selectable_item2 = questrewarditemicon($reword[0], $language);
            }else {
                $priest_selectable_item2 = ' ';
            }

            if ($questrow["priest_selectable_item3"] != NULL) {
                $reword = explode(' ', $questrow["priest_selectable_item3"]);
                $priest_selectable_item3 = questrewarditemicon($reword[0], $language);
            }else {
                $priest_selectable_item3 = ' ';
            }

            if ($questrow["priest_selectable_item4"] != NULL) {
                $reword = explode(' ', $questrow["priest_selectable_item4"]);
                $priest_selectable_item4 = questrewarditemicon($reword[0], $language);
            }else {
                $priest_selectable_item4 = ' ';
            }

            if ($questrow["priest_selectable_item5"] != NULL) {
                $reword = explode(' ', $questrow["priest_selectable_item5"]);
                $priest_selectable_item5 = questrewarditemicon($reword[0], $language);
            }else {
                $priest_selectable_item5 = ' ';
            }

            if ($questrow["priest_selectable_item6"] != NULL) {
                $reword = explode(' ', $questrow["priest_selectable_item6"]);
                $priest_selectable_item6 = questrewarditemicon($reword[0], $language);
            }else {
                $priest_selectable_item6 = ' ';
            }
            if ($questrow["priest_selectable_item7"] != NULL) {
                $reword = explode(' ', $questrow["priest_selectable_item7"]);
                $priest_selectable_item7 = questrewarditemicon($reword[0], $language);
            }else {
                $priest_selectable_item7 = ' ';
            }
            if ($questrow["priest_selectable_item8"] != NULL) {
                $reword = explode(' ', $questrow["priest_selectable_item8"]);
                $priest_selectable_item8 = questrewarditemicon($reword[0], $language);
            }else {
                $priest_selectable_item8 = ' ';
            }


// chanter

            if ($questrow["chanter_selectable_item"] != NULL) {
                $reword = explode(' ', $questrow["chanter_selectable_item"]);
                $chanter_selectable = questrewarditemicon($reword[0], $language) . '(' . translate('STR_CLASS_NAME_CHANTER', $language) . ')<br>';
                $chanter_selectable_item = strtr($chanter_selectable, array(
                    '[f:"' => '/',
                    '"]'  => '',
                ));
            }else {
                $chanter_selectable_item = ' ';
            }

            if ($questrow["chanter_selectable_item1"] != NULL) {
                $reword = explode(' ', $questrow["chanter_selectable_item1"]);
                $chanter_selectable_item1 = questrewarditemicon($reword[0], $language);
            }else {
                $chanter_selectable_item1 = ' ';
            }

            if ($questrow["chanter_selectable_item2"] != NULL) {
                $reword = explode(' ', $questrow["chanter_selectable_item2"]);
                $chanter_selectable_item2 = questrewarditemicon($reword[0], $language);
            }else {
                $chanter_selectable_item2 = ' ';
            }

            if ($questrow["chanter_selectable_item3"] != NULL) {
                $reword = explode(' ', $questrow["chanter_selectable_item3"]);
                $chanter_selectable_item3 = questrewarditemicon($reword[0], $language);
            }else {
                $chanter_selectable_item3 = ' ';
            }

            if ($questrow["chanter_selectable_item4"] != NULL) {
                $reword = explode(' ', $questrow["chanter_selectable_item4"]);
                $chanter_selectable_item4 = questrewarditemicon($reword[0], $language);
            }else {
                $chanter_selectable_item4 = ' ';
            }

            if ($questrow["chanter_selectable_item5"] != NULL) {
                $reword = explode(' ', $questrow["chanter_selectable_item5"]);
                $chanter_selectable_item5 = questrewarditemicon($reword[0], $language);
            }else {
                $chanter_selectable_item5 = ' ';
            }

            if ($questrow["chanter_selectable_item6"] != NULL) {
                $reword = explode(' ', $questrow["chanter_selectable_item6"]);
                $chanter_selectable_item6 = questrewarditemicon($reword[0], $language);
            }else {
                $chanter_selectable_item6 = ' ';
            }
            if ($questrow["chanter_selectable_item7"] != NULL) {
                $reword = explode(' ', $questrow["chanter_selectable_item7"]);
                $chanter_selectable_item7 = questrewarditemicon($reword[0], $language);
            }else {
                $chanter_selectable_item7 = ' ';
            }
            if ($questrow["chanter_selectable_item8"] != NULL) {
                $reword = explode(' ', $questrow["chanter_selectable_item8"]);
                $chanter_selectable_item8 = questrewarditemicon($reword[0], $language);
            }else {
                $chanter_selectable_item8 = ' ';
            }



// gunner

            if ($questrow["gunner_selectable_item"] != NULL) {
                $reword = explode(' ', $questrow["gunner_selectable_item"]);
                $gunner_selectable = questrewarditemicon($reword[0], $language) . '(' . translate('STR_CLASS_NAME_GUNNER', $language) . ')<br>';
                $gunner_selectable_item = strtr($gunner_selectable, array(
                    '[f:"' => '/',
                    '"]'  => '',
                ));
            }else {
                $gunner_selectable_item = ' ';
            }

            if ($questrow["gunner_selectable_item1"] != NULL) {
                $reword = explode(' ', $questrow["gunner_selectable_item1"]);
                $gunner_selectable_item1 = questrewarditemicon($reword[0], $language);
            }else {
                $gunner_selectable_item1 = ' ';
            }

            if ($questrow["gunner_selectable_item2"] != NULL) {
                $reword = explode(' ', $questrow["gunner_selectable_item2"]);
                $gunner_selectable_item2 = questrewarditemicon($reword[0], $language);
            }else {
                $gunner_selectable_item2 = ' ';
            }

            if ($questrow["gunner_selectable_item3"] != NULL) {
                $reword = explode(' ', $questrow["gunner_selectable_item3"]);
                $gunner_selectable_item3 = questrewarditemicon($reword[0], $language);
            }else {
                $gunner_selectable_item3 = ' ';
            }

            if ($questrow["gunner_selectable_item4"] != NULL) {
                $reword = explode(' ', $questrow["gunner_selectable_item4"]);
                $gunner_selectable_item4 = questrewarditemicon($reword[0], $language);
            }else {
                $gunner_selectable_item4 = ' ';
            }

            if ($questrow["gunner_selectable_item5"] != NULL) {
                $reword = explode(' ', $questrow["gunner_selectable_item5"]);
                $gunner_selectable_item5 = questrewarditemicon($reword[0], $language);
            }else {
                $gunner_selectable_item5 = ' ';
            }

            if ($questrow["gunner_selectable_item6"] != NULL) {
                $reword = explode(' ', $questrow["gunner_selectable_item6"]);
                $gunner_selectable_item6 = questrewarditemicon($reword[0], $language);
            }else {
                $gunner_selectable_item6 = ' ';
            }
            if ($questrow["gunner_selectable_item7"] != NULL) {
                $reword = explode(' ', $questrow["gunner_selectable_item7"]);
                $gunner_selectable_item7 = questrewarditemicon($reword[0], $language);
            }else {
                $gunner_selectable_item7 = ' ';
            }
            if ($questrow["gunner_selectable_item8"] != NULL) {
                $reword = explode(' ', $questrow["gunner_selectable_item8"]);
                $gunner_selectable_item8 = questrewarditemicon($reword[0], $language);
            }else {
                $gunner_selectable_item8 = ' ';
            }



// bard

            if ($questrow["bard_selectable_item"] != NULL) {
                $reword = explode(' ', $questrow["bard_selectable_item"]);
                $bard_selectable = questrewarditemicon($reword[0], $language) . '(' . translate('STR_CLASS_NAME_BARD', $language) . ')<br>';
                $bard_selectable_item = strtr($bard_selectable, array(
                    '[f:"' => '/',
                    '"]'  => '',
                ));
            }else {
                $bard_selectable_item = ' ';
            }

            if ($questrow["bard_selectable_item1"] != NULL) {
                $reword = explode(' ', $questrow["bard_selectable_item1"]);
                $bard_selectable_item1 = questrewarditemicon($reword[0], $language);
            }else {
                $bard_selectable_item1 = ' ';
            }

            if ($questrow["bard_selectable_item2"] != NULL) {
                $reword = explode(' ', $questrow["bard_selectable_item2"]);
                $bard_selectable_item2 = questrewarditemicon($reword[0], $language);
            }else {
                $bard_selectable_item2 = ' ';
            }

            if ($questrow["bard_selectable_item3"] != NULL) {
                $reword = explode(' ', $questrow["bard_selectable_item3"]);
                $bard_selectable_item3 = questrewarditemicon($reword[0], $language);
            }else {
                $bard_selectable_item3 = ' ';
            }

            if ($questrow["bard_selectable_item4"] != NULL) {
                $reword = explode(' ', $questrow["bard_selectable_item4"]);
                $bard_selectable_item4 = questrewarditemicon($reword[0], $language);
            }else {
                $bard_selectable_item4 = ' ';
            }

            if ($questrow["bard_selectable_item5"] != NULL) {
                $reword = explode(' ', $questrow["bard_selectable_item5"]);
                $bard_selectable_item5 = questrewarditemicon($reword[0], $language);
            }else {
                $bard_selectable_item5 = ' ';
            }

            if ($questrow["bard_selectable_item6"] != NULL) {
                $reword = explode(' ', $questrow["bard_selectable_item6"]);
                $bard_selectable_item6 = questrewarditemicon($reword[0], $language);
            }else {
                $bard_selectable_item6 = ' ';
            }
            if ($questrow["bard_selectable_item7"] != NULL) {
                $reword = explode(' ', $questrow["bard_selectable_item7"]);
                $bard_selectable_item7 = questrewarditemicon($reword[0], $language);
            }else {
                $bard_selectable_item7 = ' ';
            }
            if ($questrow["bard_selectable_item8"] != NULL) {
                $reword = explode(' ', $questrow["bard_selectable_item8"]);
                $bard_selectable_item8 = questrewarditemicon($reword[0], $language);
            }else {
                $bard_selectable_item8 = ' ';
            }


// rider

            if ($questrow["rider_selectable_item"] != NULL) {
                $reword = explode(' ', $questrow["rider_selectable_item"]);
                $rider_selectable = questrewarditemicon($reword[0], $language) . '(' . translate('STR_CLASS_NAME_RIDER', $language) . ')<br>';
                $rider_selectable_item = strtr($rider_selectable, array(
                    '[f:"' => '/',
                    '"]'  => '',
                ));
            }else {
                $rider_selectable_item = ' ';
            }

            if ($questrow["rider_selectable_item1"] != NULL) {
                $reword = explode(' ', $questrow["rider_selectable_item1"]);
                $rider_selectable_item1 = questrewarditemicon($reword[0], $language);
            }else {
                $rider_selectable_item1 = ' ';
            }

            if ($questrow["rider_selectable_item2"] != NULL) {
                $reword = explode(' ', $questrow["rider_selectable_item2"]);
                $rider_selectable_item2 = questrewarditemicon($reword[0], $language);
            }else {
                $rider_selectable_item2 = ' ';
            }

            if ($questrow["rider_selectable_item3"] != NULL) {
                $reword = explode(' ', $questrow["rider_selectable_item3"]);
                $rider_selectable_item3 = questrewarditemicon($reword[0], $language);
            }else {
                $rider_selectable_item3 = ' ';
            }

            if ($questrow["rider_selectable_item4"] != NULL) {
                $reword = explode(' ', $questrow["rider_selectable_item4"]);
                $rider_selectable_item4 = questrewarditemicon($reword[0], $language);
            }else {
                $rider_selectable_item4 = ' ';
            }

            if ($questrow["rider_selectable_item5"] != NULL) {
                $reword = explode(' ', $questrow["rider_selectable_item5"]);
                $rider_selectable_item5 = questrewarditemicon($reword[0], $language);
            }else {
                $rider_selectable_item5 = ' ';
            }

            if ($questrow["rider_selectable_item6"] != NULL) {
                $reword = explode(' ', $questrow["rider_selectable_item6"]);
                $rider_selectable_item6 = questrewarditemicon($reword[0], $language);
            }else {
                $rider_selectable_item6 = ' ';
            }
            if ($questrow["rider_selectable_item7"] != NULL) {
                $reword = explode(' ', $questrow["rider_selectable_item7"]);
                $rider_selectable_item7 = questrewarditemicon($reword[0], $language);
            }else {
                $rider_selectable_item7 = ' ';
            }
            if ($questrow["rider_selectable_item8"] != NULL) {
                $reword = explode(' ', $questrow["rider_selectable_item8"]);
                $rider_selectable_item8 = questrewarditemicon($reword[0], $language);
            }else {
                $rider_selectable_item8 = ' ';
            }




// painter

            if ($questrow["painter_selectable_item"] != NULL) {
                $reword = explode(' ', $questrow["painter_selectable_item"]);
                $painter_selectable = questrewarditemicon($reword[0], $language) . '(' . translate('STR_CLASS_NAME_PAINTER', $language) . ')<br>';
                $painter_selectable_item = strtr($painter_selectable, array(
                    '[f:"' => '/',
                    '"]'  => '',
                ));
            }else {
                $painter_selectable_item = ' ';
            }

            if ($questrow["painter_selectable_item1"] != NULL) {
                $reword = explode(' ', $questrow["painter_selectable_item1"]);
                $painter_selectable_item1 = questrewarditemicon($reword[0], $language);
            }else {
                $painter_selectable_item1 = ' ';
            }

            if ($questrow["painter_selectable_item2"] != NULL) {
                $reword = explode(' ', $questrow["painter_selectable_item2"]);
                $painter_selectable_item2 = questrewarditemicon($reword[0], $language);
            }else {
                $painter_selectable_item2 = ' ';
            }

            if ($questrow["painter_selectable_item3"] != NULL) {
                $reword = explode(' ', $questrow["painter_selectable_item3"]);
                $painter_selectable_item3 = questrewarditemicon($reword[0], $language);
            }else {
                $painter_selectable_item3 = ' ';
            }

            if ($questrow["painter_selectable_item4"] != NULL) {
                $reword = explode(' ', $questrow["painter_selectable_item4"]);
                $painter_selectable_item4 = questrewarditemicon($reword[0], $language);
            }else {
                $painter_selectable_item4 = ' ';
            }

            if ($questrow["painter_selectable_item5"] != NULL) {
                $reword = explode(' ', $questrow["painter_selectable_item5"]);
                $painter_selectable_item5 = questrewarditemicon($reword[0], $language);
            }else {
                $painter_selectable_item5 = ' ';
            }

            if ($questrow["painter_selectable_item6"] != NULL) {
                $reword = explode(' ', $questrow["painter_selectable_item6"]);
                $painter_selectable_item6 = questrewarditemicon($reword[0], $language);
            }else {
                $painter_selectable_item6 = ' ';
            }
            if ($questrow["painter_selectable_item7"] != NULL) {
                $reword = explode(' ', $questrow["painter_selectable_item7"]);
                $painter_selectable_item7 = questrewarditemicon($reword[0], $language);
            }else {
                $painter_selectable_item7 = ' ';
            }
            if ($questrow["painter_selectable_item8"] != NULL) {
                $reword = explode(' ', $questrow["painter_selectable_item8"]);
                $painter_selectable_item8 = questrewarditemicon($reword[0], $language);
            }else {
                $painter_selectable_item8 = ' ';
            }


            $AionDir = $_SERVER['DOCUMENT_ROOT'];


            if (file_exists($AionDir . '/quests/' . $language . $cl . '/quest_q' . $questid . '.html')) {
                $htmlfile = $AionDir . '/quests/' . $language . $cl . '/quest_q' . $questid . '.html';
            } else {
                if (file_exists($AionDir . '/quests/ko'.$cl.'/quest_q' . $questid . '.html')) {


                    $htmlfile = $AionDir . '/quests/ko'.$cl.'/quest_q' . $questid . '.html';
                }else {
                    $htmlfile = $AionDir . '/quests/quest_qempty.html';
                }
            }






            $xmlfile = file_get_contents($htmlfile);



            $fixdxml = strtr($xmlfile, array(
                '<Contents cdata="true">' => '<Content><![CDATA[',
                '</Contents>' => ']]></Content>',
                '<contents cdata="true">' => '<Content><![CDATA[',
                '</contents>' => ']]></Content>'
            ));

            $xml = new SimpleXMLElement($fixdxml);






            foreach ($xml->xpath('//HtmlPage[starts-with(@name, "quest_summary")]//Content') as $value) {
                $questte .= $value->asXml();
            }









            $questitem = preg_replace_callback('/\[%dic:STR_DIC_I_(?<item>[a-z_0-9]+)\]/i', function(array $matches) use ($language) {
                return dictionaryitemlink($matches['item'], $language);
            }, $questte);

            $questnpc = preg_replace_callback('/\[%dic:STR_DIC_N_(?<npc>[a-z_0-9]+)\]/i', function(array $matches) use ($language) {
                return dictionarynpclink($matches['npc'], $language);
            }, $questitem);

            $questmonster = preg_replace_callback('/\[%dic:STR_DIC_M_(?<monster>[a-z_0-9]+)\]/i', function(array $matches) use ($language) {
                return dictionarymonsterlink($matches['monster'], $language);
            }, $questnpc);

            $questt = preg_replace_callback('/\[%dic:(?<translation>[a-z_0-9]+)\]/i', function(array $matches) use ($language) {
                return dictionarylink($matches['translation'], $language);
            }, $questmonster);







            $questtext = strtr($questt, array(
                "[%collectitem]" => '',
                'font color="[%'  => 'font tempcolor="[%',
                "[plur]"  => '',
                ']]>' => '',
                '<step>' => '<li>',
                '</step>' => '</li>',
                '<font font_xml="quest_summary">' => '<br>' . translate('STR_QUEST_DIALOG__QUEST_TABFRAME_WIDGET4', $language) . ':<br><font font_xml="quest_summary">',
                '%%' => "'&percnt;",
                '%' => ""
            ));




            $devdetails = '<div class="devdetails wrap" style="display:none">
<table>
<tr><td>DEV_NAME: </td><td><input style="width:250px" type="text" value="' . $questrow['name'] . '"></td></tr>
<tr><td>STR_NAME: </td><td><input style="width:250px" type="text" value="' . $questrow["description"] . '"></td></tr>
<tr><td>STR_DESC: </td><td><input style="width:250px" type="text" value="' . $questrow['desc_long'] . '"></td></tr>
<tr><td>Version: </td><td><a href="https://aionpowerbook.com/powerbook/Version:'.$clientversion.'">'.$clientversion . $Overseasclient . '</a></td></tr>
</table>
</div>';


        }





























        if ($selectablereward11 !== ' ' OR $selectablereward12 !== ' ' OR $selectablereward13 !== ' ' OR $selectablereward14 !== ' ' OR $selectablereward15 !== ' ' OR $selectablereward16 !== ' ' OR $selectablereward17 !== ' ' OR $selectablereward18 !== ' ' OR $selectablereward19 !== ' ' OR $selectablereward110 !== ' ' OR $selectablereward111 !== ' ' OR $selectablereward112 !== ' ' OR $selectablereward113 !== ' ' OR $selectablereward114 !== ' ' OR $selectablereward115 !== ' ' OR $selectablereward21 !== ' ' OR $selectablereward22 !== ' ' OR $selectablereward23 !== ' ' OR $selectablereward24 !== ' ' OR $selectablereward25 !== ' ' OR $selectablereward26 !== ' ' OR $selectablereward27 !== ' ' OR $selectablereward28 !== ' ' OR $selectablereward29 !== ' ' OR $selectablereward210 !== ' ' OR $selectablereward211 !== ' ' OR $selectablereward212 !== ' ' OR $selectablereward213 !== ' ' OR $selectablereward31 !== ' ' OR $selectablereward32 !== ' ' OR $selectablereward33 !== ' ' OR $selectablereward34 !== ' ' OR $selectablereward35 !== ' ' OR $selectablereward36 !== ' ' OR $selectablereward41 !== ' ' OR $selectablereward42 !== ' ' OR $selectablereward43 !== ' ' OR $selectablereward44 !== ' ' OR $selectablereward45 !== ' ' OR $selectablereward51 !== ' ' OR $selectablereward52 !== ' ' OR $selectablereward53 !== ' ' OR $selectablereward54 !== ' ' OR $selectablereward55 !== ' ' OR $selectablereward61 !== ' ' ) {
            $additional = '<br><br>' . translate('STR_QUEST_REWARD_OPTIONAL', $language);
        }else {
            $additional = ' ';
        }




        $Final .= '<div class="hbody"><div class="wrap_quest_obj"><div class="objects  object_quest">';

        $Final .= '<div class="head item_basic"><dl class="basic"><dd class="thumb"><div class="questtext" style="padding-bottom:5px"><a id="fancyquest" href="https://aionpowerbook.com/quests/index.php?quest=' . $questid . '&lang=' . $language . '&classic='.isClassic().'"></a></div>' . $youtube . '</dd><dt class="name"><p class="name link_' . $category . '" >	<a href="https://aionpowerbook.com/powerbook/Quest/' . $questid . '">' . $localization . '</a> </p><p><span style="margin-left:-5px;" class="additionalinfo restrictionTip" title="' . $clientversion . $Overseasclient . '"></span></p></dt></dl></div>';


        $Final .= '<div class="wrap quest_basic"><dl class="basic"><dt>' . $zoneloca . '</dt><dd class="location"><a href="https://aionpowerbook.com/powerbook/Region_Quests?region='.$zone.'">' . translate($zone, $language) . '</a></dd><dt>' . translate('STR_CHAT_ROOM_MANAGEMENT_DIALOG__LEVEL', $language) . ':</dt><dd class="learn_level"><em>' . translate('STR_CHAT_ROOM_MANAGEMENT_DIALOG__LEVEL', $language) . '</em><span class="min_level"> ' . $minlevel_permitted . $maxlevel_permitted . '</span> / <em>' . translate('STR_SERVER_FREE', $language) . '</em><span class="enable_level"> ' . $client_level . '</span></dd><dt>' . translate('STR_BUILDER_DEV_DIALOG__REPEAT_COUNT', $language) . ':</dt><dd class="location">' . $repeatcount . ' ' . $resettime . '</dd></dl></div>';

        $Final .= '<div class="wrap quest_reward"><dl class="reward"><dt>' . translate('STR_GACHA_DIALOG__SHOW_REWARD', $language) . ':</dt><dd class="reward_lists">' . $expreward . $fameexpreward . $kinahreward . $growth . $apreward . $hpreward . $strnghreward . $cpreward . $reward11 . $reward12 . $reward13 . $reward14 . $reward15 . $reward21 . $reward22 . $reward23 . $reward31 . $reward32 . $reward33 . $reward41 . $additional . $selectablereward11 . $selectablereward12 . $selectablereward13 . $selectablereward14 . $selectablereward15 . $selectablereward16 . $selectablereward17 . $selectablereward18 . $selectablereward19 . $selectablereward110 . $selectablereward111 . $selectablereward112 . $selectablereward113 . $selectablereward114 . $selectablereward115 . $selectablereward21 . $selectablereward22 . $selectablereward23 . $selectablereward24 . $selectablereward25 . $selectablereward26 . $selectablereward27 . $selectablereward28 . $selectablereward29 . $selectablereward210 . $selectablereward211 . $selectablereward212 . $selectablereward213 . $selectablereward31 . $selectablereward32 . $selectablereward33 . $selectablereward34 . $selectablereward35 . $selectablereward36 . $selectablereward41 . $selectablereward42 . $selectablereward43 . $selectablereward44 . $selectablereward45 . $selectablereward51 . $selectablereward52 . $selectablereward53 . $selectablereward54 . $selectablereward55 . $selectablereward61 . '<br>' . $fighter_selectable_item1 . $fighter_selectable_item2 . $fighter_selectable_item3 . $fighter_selectable_item4 . $fighter_selectable_item5 . $fighter_selectable_item6 . $fighter_selectable_item7 . $fighter_selectable_item8 . $fighter_selectable_item . $knight_selectable_item1 . $knight_selectable_item2 . $knight_selectable_item3 . $knight_selectable_item4 . $knight_selectable_item5 . $knight_selectable_item6 . $knight_selectable_item7 . $knight_selectable_item8 . $knight_selectable_item . $ranger_selectable_item1 . $ranger_selectable_item2 . $ranger_selectable_item3 . $ranger_selectable_item4 . $ranger_selectable_item5 . $ranger_selectable_item6 . $ranger_selectable_item7 . $ranger_selectable_item8 . $ranger_selectable_item . $assassin_selectable_item1 . $assassin_selectable_item2 . $assassin_selectable_item3 . $assassin_selectable_item4 . $assassin_selectable_item5 . $assassin_selectable_item6 . $assassin_selectable_item7 . $assassin_selectable_item8 . $assassin_selectable_item . $wizard_selectable_item1 . $wizard_selectable_item2 . $wizard_selectable_item3 . $wizard_selectable_item4 . $wizard_selectable_item5 . $wizard_selectable_item6 . $wizard_selectable_item7 . $wizard_selectable_item8 . $wizard_selectable_item . $elementalist_selectable_item1 . $elementalist_selectable_item2 . $elementalist_selectable_item3 . $elementalist_selectable_item4 . $elementalist_selectable_item5 . $elementalist_selectable_item6 . $elementalist_selectable_item7 . $elementalist_selectable_item8 . $elementalist_selectable_item . $priest_selectable_item1 . $priest_selectable_item2 . $priest_selectable_item3 . $priest_selectable_item4 . $priest_selectable_item5 . $priest_selectable_item6 . $priest_selectable_item7 . $priest_selectable_item8 . $priest_selectable_item . $chanter_selectable_item1 . $chanter_selectable_item2 . $chanter_selectable_item3 . $chanter_selectable_item4 . $chanter_selectable_item5 . $chanter_selectable_item6 . $chanter_selectable_item7 . $chanter_selectable_item8 . $chanter_selectable_item . $gunner_selectable_item1 . $gunner_selectable_item2 . $gunner_selectable_item3 . $gunner_selectable_item4 . $gunner_selectable_item5 . $gunner_selectable_item6 . $gunner_selectable_item7 . $gunner_selectable_item8 . $gunner_selectable_item . $bard_selectable_item1 . $bard_selectable_item2 . $bard_selectable_item3 . $bard_selectable_item4 . $bard_selectable_item5 . $bard_selectable_item6 . $bard_selectable_item7 . $bard_selectable_item8 . $bard_selectable_item . $rider_selectable_item1 . $rider_selectable_item2 . $rider_selectable_item3 . $rider_selectable_item4 . $rider_selectable_item5 . $rider_selectable_item6 . $rider_selectable_item7 . $rider_selectable_item8 . $rider_selectable_item . $painter_selectable_item1 . $painter_selectable_item2 . $painter_selectable_item3 . $painter_selectable_item4 . $painter_selectable_item5 . $painter_selectable_item6 . $painter_selectable_item7 . $painter_selectable_item8 . $painter_selectable_item . '</dd></dl></div>';

        $Final .= '<div class="wrap quest_relquest"><dl class="relquest"><dt>Pre-quests:</dt><dd class="relquest_lists">' . $prequests . '</dd></dl></div>';
        $Final .= '<div class="wrap quest_step"><dl class="step"><dt>Steps:</dt><dd class="step_lists"><ol class="step_list" start="1">' . $questtext . '</ol></dd></dl></div>';

        $Final .= '<div class="wrap item_id"><table><tr><td>BBCode:</td><td><input style="width:250px" type="text" value="
[url=\'https://aionpowerbook.com/powerbook/Quest/' . $questid . '/' . $code . '\'][img]https://aionpowerbook.com/powerbook/skins/MonoBook/img/ic_' . $category . '.png[/img] ' . $localization . '[/url]"></td></tr></table></dl></div>';

        $Final .=  $devdetails ;

        $Final .= '</div></div><div class="cl"></div><div class="cl"></div></div>';



        $data = $Final;

        $serv = $_SERVER['DOCUMENT_ROOT'];
        $cachefile = $serv . '/powerbook/extensions/AionExtensions/cache/questdetails/'.$language.'/'.$dbid.$cl . '.html';
        file_put_contents($cachefile, $data);


        $wgOut->AddHTML( $data );

        $extraWindget = '{{#ifexist: Widget:quest_'.$questid.' | {{Widget:quest_'.$questid.'}} | }}';
        $wgOut->addWikiText( $extraWindget );


        $DisplayTitle = '{{DISPLAYTITLE:' . $localization . '}}';
        return array( $DisplayTitle, 'noparse' => false );

    }


    else{

        include 'include/DBselect.php';
        $row = $db->query("
SELECT  id, description
FROM client_quest
WHERE id = '$dbid' ", $dbid)->fetchArray();

        $description = translate($row["description"], $language);
        $id = $row["id"];


        if ($dbid != NULL){
            $localization=$description;
        }else {
            $localization = 'NO ID PROVIDED';
        }


        $servv = $_SERVER['DOCUMENT_ROOT'];
        $cachefilev = $servv . '/powerbook/extensions/AionExtensions/cache/questdetails/'.$language.'/'.$dbid. $cl . '.html';
        $wgOut->AddHTML(  "<!-- Cached copy, generated ".date('H:i', filemtime($cachefile))." -->\n" );

        $data = file_get_contents($cachefilev);
        $wgOut->AddHTML( $data );

        $extraWindget = '{{#ifexist: Widget:quest_'.$id.' | {{Widget:quest_'.$id.'}} | }}';
        $wgOut->addWikiText( $extraWindget );

        $DisplayTitle = '{{DISPLAYTITLE:' . $localization . '}}';
        return array( $DisplayTitle, 'noparse' => false );
    }











}