<?php


function skillIconBuilder ($name, $classic) {
    //https://aionpowerbook.com/skillicon/live_ch_encouragerun_g1.png

    $skill_icon = strtr(strtolower($name), array(
        ".dds" => '',
    ));

    if ($classic == '1') {
        $cl = "_cl";
    }


    return '<img src="https://aionpowerbook.com/skillicon' . $cl . '/' . $skill_icon . '.png" width="37" height="37" class="thumb" id="skill_icon" alt="">';
}

function skillIconBuilderMini ($name, $classic) {
    //<img src="https://aionpowerbook.com/skillicon/live_ch_encouragerun_g1.png" alt="" class="thumb3">

    $skill_icon = strtr(strtolower($name), array(
        ".dds" => '',
    ));

    if ($classic == '1') {
        $cl = "_cl";
    }


    return '<img src="https://aionpowerbook.com/skillicon' . $cl . '/' . $skill_icon . '.png" class="thumb3" alt="" >';
}