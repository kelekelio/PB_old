<?php

function checkbundleDB ($name, $lang){

$query = "
SELECT id
FROM client_disassembly_item_setlist2
WHERE create_ like '% " . $name . " %' 
LIMIT 0, 1
";

$query  = mysql_query($query) or die(mysql_error());
$result = mysql_fetch_assoc($query);
$id=$result["id"];


if ($id != NULL) {
return $id;
}else {
return '';	
}

}
 

function checkquestDB ($name, $lang){

$query = "
SELECT id
FROM client_quest
WHERE 

reward_item1_1 like '$name%' or reward_item1_2 like '$name%' or reward_item1_3 like '$name%'  or reward_item1_4 like '$name%'  or reward_item1_5 like '$name%' or

reward_item2_1 like '$name%' or reward_item2_2 like '$name%' or reward_item2_3 like '$name%' or

reward_item3_1 like '$name%' or reward_item3_2 like '$name%' or reward_item3_3 like '$name%' or

reward_item4_1 like '$name%' or



selectable_reward_item1_1 like '$name%' or selectable_reward_item1_2 like '$name%' or selectable_reward_item1_3 like '$name%' or selectable_reward_item1_4 like '$name%' or selectable_reward_item1_5 like '$name%' or selectable_reward_item1_6 like '$name%' or selectable_reward_item1_7 like '$name%' or selectable_reward_item1_8 like '$name%' or selectable_reward_item1_9 like '$name%' or selectable_reward_item1_10 like '$name%' or selectable_reward_item1_11 like '$name%' or selectable_reward_item1_12 like '$name%' or selectable_reward_item1_13 like '$name%' or selectable_reward_item1_14 like '$name%' or selectable_reward_item1_15 like '$name%'

or selectable_reward_item2_1 like '$name%' or selectable_reward_item2_2 like '$name%' or selectable_reward_item2_3 like '$name%' or selectable_reward_item2_4 like '$name%' or selectable_reward_item2_5 like '$name%' or selectable_reward_item2_6 like '$name%' or selectable_reward_item2_7 like '$name%' or selectable_reward_item2_8 like '$name%' or selectable_reward_item2_9 like '$name%' or selectable_reward_item2_10 like '$name%' or selectable_reward_item2_11 like '$name%' or selectable_reward_item2_12 like '$name%' or selectable_reward_item2_13 like '$name%'

or selectable_reward_item3_1 like '$name%' or selectable_reward_item3_2 like '$name%' or selectable_reward_item3_3 like '$name%' or selectable_reward_item3_4 like '$name%' or selectable_reward_item3_5 like '$name%' or selectable_reward_item3_6 like '$name%' 

or selectable_reward_item4_1 like '$name%' or selectable_reward_item4_2 like '$name%' or selectable_reward_item4_3 like '$name%' or selectable_reward_item4_4 like '$name%' or selectable_reward_item4_5 like '$name%' 

or selectable_reward_item5_1 like '$name%' or selectable_reward_item5_2 like '$name%' or selectable_reward_item5_3 like '$name%' or selectable_reward_item5_4 like '$name%' or selectable_reward_item5_5 like '$name%' 

or selectable_reward_item6_1 like '$name%'



or fighter_selectable_item like '$name%' or fighter_selectable_item1 like '$name%' or fighter_selectable_item2 like '$name%' or fighter_selectable_item3 like '$name%' or fighter_selectable_item4 like '$name%' or fighter_selectable_item5 like '$name%' or fighter_selectable_item6 like '$name%' or fighter_selectable_item7 like '$name%' or fighter_selectable_item8 like '$name%' 


or knight_selectable_item like '$name%' or knight_selectable_item1 like '$name%' or knight_selectable_item2 like '$name%' or knight_selectable_item3 like '$name%' or knight_selectable_item4 like '$name%' or knight_selectable_item5 like '$name%' or knight_selectable_item6 like '$name%' or knight_selectable_item7 like '$name%' or knight_selectable_item8 like '$name%' 

or ranger_selectable_item like '$name%' or ranger_selectable_item1 like '$name%' or ranger_selectable_item2 like '$name%' or ranger_selectable_item3 like '$name%' or ranger_selectable_item4 like '$name%' or ranger_selectable_item5 like '$name%' or ranger_selectable_item6 like '$name%' or ranger_selectable_item7 like '$name%' or ranger_selectable_item8 like '$name%' 

or assassin_selectable_item like '$name%' or assassin_selectable_item1 like '$name%' or assassin_selectable_item2 like '$name%' or assassin_selectable_item3 like '$name%' or assassin_selectable_item4 like '$name%' or assassin_selectable_item5 like '$name%' or assassin_selectable_item6 like '$name%' or assassin_selectable_item7 like '$name%' or assassin_selectable_item8 like '$name%' 

or wizard_selectable_item like '$name%' or wizard_selectable_item1 like '$name%' or wizard_selectable_item2 like '$name%' or wizard_selectable_item3 like '$name%' or wizard_selectable_item4 like '$name%' or wizard_selectable_item5 like '$name%' or wizard_selectable_item6 like '$name%' or wizard_selectable_item7 like '$name%' or wizard_selectable_item8 like '$name%'  

or elementalist_selectable_item like '$name%' or elementalist_selectable_item1 like '$name%' or elementalist_selectable_item2 like '$name%' or elementalist_selectable_item3 like '$name%' or elementalist_selectable_item4 like '$name%' or elementalist_selectable_item5 like '$name%' or elementalist_selectable_item6 like '$name%' or elementalist_selectable_item7 like '$name%' or elementalist_selectable_item8 like '$name%' 

or priest_selectable_item like '$name%' or priest_selectable_item1 like '$name%' or priest_selectable_item2 like '$name%' or priest_selectable_item3 like '$name%' or priest_selectable_item4 like '$name%' or priest_selectable_item5 like '$name%' or priest_selectable_item6 like '$name%' or priest_selectable_item7 like '$name%' or priest_selectable_item8 like '$name%' 

or chanter_selectable_item like '$name%' or chanter_selectable_item1 like '$name%' or chanter_selectable_item2 like '$name%' or chanter_selectable_item3 like '$name%' or chanter_selectable_item4 like '$name%' or chanter_selectable_item5 like '$name%' or chanter_selectable_item6 like '$name%' or chanter_selectable_item7 like '$name%' or chanter_selectable_item8 like '$name%' 

or gunner_selectable_item like '$name%' or gunner_selectable_item1 like '$name%' or gunner_selectable_item2 like '$name%' or gunner_selectable_item3 like '$name%' or gunner_selectable_item4 like '$name%' or gunner_selectable_item5 like '$name%' or gunner_selectable_item6 like '$name%' or gunner_selectable_item7 like '$name%' or gunner_selectable_item8 like '$name%' 

or bard_selectable_item like '$name%' or bard_selectable_item1 like '$name%' or bard_selectable_item2 like '$name%' or bard_selectable_item3 like '$name%' or bard_selectable_item4 like '$name%' or bard_selectable_item5 like '$name%' or bard_selectable_item6 like '$name%' or bard_selectable_item7 like '$name%' or bard_selectable_item8 like '$name%' 

or rider_selectable_item like '$name%' or rider_selectable_item1 like '$name%' or rider_selectable_item2 like '$name%' or rider_selectable_item3 like '$name%' or rider_selectable_item4 like '$name%' or rider_selectable_item5 like '$name%' or rider_selectable_item6 like '$name%' or rider_selectable_item7 like '$name%' or rider_selectable_item8 like '$name%' 


LIMIT 0, 1
";

$query  = mysql_query($query) or die(mysql_error());
$result = mysql_fetch_assoc($query);
$id=$result["id"];


if ($id != NULL) {
return $id;
}else {
return '';	
}

}

function checkcurrencyDB ($name, $lang){

$query = "
SELECT id
FROM client_items
WHERE extra_currency_item = '$name' or abyss_item = '$name' or trade_in_item = '$name' or trade_in_item1 = '$name' or trade_in_item2 = '$name' 
LIMIT 0, 1
";

$query  = mysql_query($query) or die(mysql_error());
$result = mysql_fetch_assoc($query);
$id=$result["id"];


if ($id != NULL) {
return $id;
}else {
return '';	
}

}


function checkshopDB ($name, $lang){

$query = "
SELECT id
FROM client_npc_goodslist_2
WHERE item like '% " . $name . " %' or itembuy_limit like '% " . $name . ",%' 
LIMIT 0, 1
";

$query  = mysql_query($query) or die(mysql_error());
$result = mysql_fetch_assoc($query);
$id=$result["id"];


if ($id != NULL) {
return $id;
}else {
return '';	
}

}


function wrapdetailstest($name, $language)
{
    $query = "
SELECT *
FROM client_disassembly_item_setlist
WHERE name = '$name'
       ";

	
    $query  = mysql_query($query) or die(mysql_error());
	
    while ($result = mysql_fetch_assoc($query)) {		
		$set_list = '';

        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^create_[0-9]*$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }
			
			if (!empty($fieldValue)) {
            $set_list .= extraitem($fieldValue, $language) . '<br>';
			}
        }
     
            $set_list_name .= $set_list;
		
		
	}
	
	
    return $set_list_name;
	
}


function checkBundleContents($name, $language)
{
	
$devname = $name;	
	
	
$serv = $_SERVER['DOCUMENT_ROOT'];
$cachefile = $serv . '/powerbook/extensions/AionExtensions/cache/bundlecontent/'.$language.'/'.$devname.'.html';
$exists = file_exists($cachefile);
	
	
if( !$exists || ( $exists && time() > strtotime('+31 days', filemtime($cachefile)) )) {
	
	
	
	
	
	
	
	
    $query = "
SELECT *
FROM client_disassembly_item
WHERE name = '$name'
      ";
 
 
    $query  = mysql_query($query) or die(mysql_error());
    while ($result = mysql_fetch_assoc($query)) {
        

$row = [
$result['apply_level_1'], $result['set_list_name_'], $result['apply_class_1'], $result['apply_race_1'],
$result['apply_level_2'], $result['set_list_name_1'], $result['apply_class_2'], $result['apply_race_2'],
$result['apply_level_3'], $result['set_list_name_2'], $result['apply_class_3'], $result['apply_race_3'],
$result['apply_level_4'], $result['set_list_name_3'], $result['apply_class_4'], $result['apply_race_4'],
$result['apply_level_5'], $result['set_list_name_4'], $result['apply_class_5'], $result['apply_race_5'],
$result['apply_level_6'], $result['set_list_name_5'], $result['apply_class_6'], $result['apply_race_6'],
$result['apply_level_7'], $result['set_list_name_6'], $result['apply_class_7'], $result['apply_race_7'],
$result['apply_level_8'], $result['set_list_name_7'], $result['apply_class_8'], $result['apply_race_8'],
$result['apply_level_9'], $result['set_list_name_8'], $result['apply_class_9'], $result['apply_race_9'],
$result['apply_level_10'], $result['set_list_name_9'], $result['apply_class_10'], $result['apply_race_10'],
$result['apply_level_11'], $result['set_list_name_10'], $result['apply_class_11'], $result['apply_race_11'],
$result['apply_level_12'], $result['set_list_name_11'], $result['apply_class_12'], $result['apply_race_12'],
$result['apply_level_13'], $result['set_list_name_12'], $result['apply_class_13'], $result['apply_race_13'],
$result['apply_level_14'], $result['set_list_name_13'], $result['apply_class_14'], $result['apply_race_14'],
$result['apply_level_15'], $result['set_list_name_14'], $result['apply_class_15'], $result['apply_race_15'],
$result['apply_level_16'], $result['set_list_name_15'], $result['apply_class_16'], $result['apply_race_16'],
$result['apply_level_17'], $result['set_list_name_16'], $result['apply_class_17'], $result['apply_race_17'],
$result['apply_level_18'], $result['set_list_name_17'], $result['apply_class_18'], $result['apply_race_18'],
$result['apply_level_19'], $result['set_list_name_18'], $result['apply_class_19'], $result['apply_race_19'],
$result['apply_level_20'], $result['set_list_name_19'], $result['apply_class_20'], $result['apply_race_20'],
$result['apply_level_21'], $result['set_list_name_20'], $result['apply_class_21'], $result['apply_race_21'],
$result['apply_level_22'], $result['set_list_name_21'], $result['apply_class_22'], $result['apply_race_22'],
$result['apply_level_23'], $result['set_list_name_22'], $result['apply_class_23'], $result['apply_race_23'],
$result['apply_level_24'], $result['set_list_name_23'], $result['apply_class_24'], $result['apply_race_24'],
$result['apply_level_25'], $result['set_list_name_24'], $result['apply_class_25'], $result['apply_race_25'],
$result['apply_level_26'], $result['set_list_name_25'], $result['apply_class_26'], $result['apply_race_26'],


	
	
];

$chunks = array_chunk($row, 4);
$set_list .= '';
$level = '';
foreach ($chunks as $info) {
	
    list($level, $name, $class, $race) = $info;

	$box_race = '';

	if (strtolower($race) == 'pc_light') {
		$box_race = ' <span class="pc_light" title="' . translate('STR_TOOLTIP_PC_LIGHT', $language) . '"></span>';
	}elseif (strtolower($race) == 'pc_dark') {
		$box_race = ' <span class="pc_dark" title="' . translate('STR_TOOLTIP_PC_DARK', $language) . '"></span>';
	}
	
	$eachclass = explode(' ', $class);
	$icon = '';
	foreach($eachclass as $classicon) {    
	
    $icon .= ' <span class="pc_' . strtolower($classicon) . '" title="' . translate('STR_CLASS_NAME_' . $classicon, $language) . '"></span>';
	
}
	
	
	
	if ($name != null) {
    $set_list .= '<tr><td class="pad1">' . $box_race . '</td><td class="pad1">' . $icon . '</td><td class="pad1">' . $level . '</td><td class="pad1">' . wrapdetailstest($name, $language) . '</td></tr>';
	}
	
}

    }
   
    $final = '

	<table class="edit_table" border="1" style="" id="items" >
	<tbody>
		<tr >
			<td class="cel1 ">Race</td>
			<td class="cel1 " width="45px">Class</td>
			<td class="cel1 ">Level</td>
			<td class="cel1 " width="100%">Items</td>
		</tr>
		
		' . $set_list . '
		
	</tbody>
	</table>';
	
	
	
	
	
	
	
	
	
	$data = $final;
	

	$serv = $_SERVER['DOCUMENT_ROOT'];
	$cachefile = $serv . '/powerbook/extensions/AionExtensions/cache/bundlecontent/'.$language.'/'.$devname.'.html';
	file_put_contents($cachefile, $data);
	
	return $data;
	
}
else {
	
	$serv = $_SERVER['DOCUMENT_ROOT'];
	$cachefile = $serv . '/powerbook/extensions/AionExtensions/cache/bundlecontent/'.$language.'/'.$devname.'.html';
    $data = file_get_contents($cachefile);
	
	$date = "<!-- Cached copy, generated ".date('H:i', filemtime($cachefile))." -->\n";
	
	return  $date . $data  ;
	
}
	
	
	
	
	
	
	
	
	
	
	
	
	
   
}


function checkcraftDB ($name, $lang){

$query = "
SELECT id
from client_combine_recipe
where product = '$name' or combo1_product = '$name'
LIMIT 0, 1
";

$query  = mysql_query($query) or die(mysql_error());
$result = mysql_fetch_assoc($query);
$id=$result["id"];


if ($id != NULL) {
return $id;
}else {
return '';	
}

}






function CheckItemForAlltest ($name, $isBundle)
{
// $name, $isBundle  ===>  'quest_1147a', 'yes'
	
$lang = language();



	
$checktypes = array("bundlecontent", "bundle", "quest", "currency", "shop", "craft"); 
	
$i = 0;	
foreach ($checktypes as $eachtab) {


if ($eachtab == 'bundle') {
	
	$aftercheck = checkbundleDB($name, $lang);
	$tabname = 'From Bundle';
}
elseif ($eachtab == 'quest') {
	
	$aftercheck = checkquestDB($name, $lang);
	$tabname = 'Quest Reward';
}
elseif ($eachtab == 'currency') {
	
	$aftercheck = checkcurrencyDB($name, $lang);
	$tabname = 'Used For';
}
elseif ($eachtab == 'shop') {
	
	$aftercheck = checkshopDB($name, $lang);
	$tabname = 'Buy From';
}elseif ($eachtab == 'craft') {
	
	$aftercheck = checkcraftDB($name, $lang);
	$tabname = 'Craft';
	$craftcrit = '<p style="width:63px !important" >Crit</p>';
}elseif ($eachtab == 'bundlecontent' && $isBundle == 'yes'){
	
	$aftercheck = checkBundleContents($name, $lang);
	$tabname = 'Contains';
	
}









if ($aftercheck != NULL) {
	
$numb = $i;
if ($numb == '0') {
	$activate = 'active';
}else {
	$activate = ' ';
}

 
 
 
 
 


 $listtab .= '<li role="presentation" class=""><a href="#Items'. $i .'" aria-controls="Item" role="tab" data-toggle="tab" class="'.$activate.'">'.$tabname.'</a></li>';
 
 
 if ($eachtab == 'bundlecontent'){
	 $table .= '<div role="tabpanel" class="tab-pane '.$activate.'" id="Items'. $i .'">';
	 $table .= $aftercheck;
	 $table .= '<div class="cl"></div></div>';
	 
 }else {
	 
	 $ajax = 'https://aionpowerbook.com/powerbook/extensions/AionExtensions/include/CheckItem_'.$eachtab.'_ajax.php?type=' . $eachtab . '&lang=' . $lang . '&name='.$name;
	 
 $table .= '<div role="tabpanel" class="tab-pane '.$activate.'" id="Items'. $i .'">
		<table class="lists list_basicitem width_100p ajaxTable"  ajaxurl="'.$ajax.'" id="items'. $i .'" dataExtra="false"><thead><tr>
		<th class="fixed nowrap">ID</th>
		<th class="fixed nowrap no-sorting " >'.$craftcrit.'</th>
		<th class="nowrap ajax100p">Name</th>
		<th class="nowrap" width="40px">Level</th>
		</tr></thead></table><div class="cl"></div>
				</div>';
 }
	
	
	
	
 
$i++;
}
	

	
	
	
	
	
}
	
	








if ($listtab != NULL){

    if (isClassic() == "1") {
        $imp = '<table class="edit_table" border="1" style="border-collapse:collapse; width:100%; text-align:left !important">

<tbody><tr>
<td class="box8"><p><font color="#ed1c24"><strong>IMPORTANT!</strong></font></p><p>Due to technical reasons, bundle details are always based on Live Servers.</p>
</td></tr></tbody></table><br>';
    }

$Lists .= '<br><div class="hbody">

' . $imp . '
		<ul class="nav nav-tabs" role="tablist">
' . $listtab . '
		
		
		</ul>
		<br>
			<div class="tab-content">
			
' . $table . '
				
				
			</div>
		</div>';
	
	
	
	return $Lists;	
}else {
	return '';
}
	
}