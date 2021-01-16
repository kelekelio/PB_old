<?php


function checkExtraItem($name, $lang){
	
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
return '    	<li role="presentation" class="active"><a href="#Extra" aria-controls="Extra" role="tab" data-toggle="tab">Used for</a></li>
				<cuthere>
				<div role="tabpanel" class="tab-pane active" id="Extra">
				
				<table class="lists list_basicitem width_100p DataTableAJAX" id="extra" DefsColumn="[{targets: 0,className: \'al pr\', type: \'num-html\'},{targets: 1,className: \'al pr\'},{targets: 2,type: \'num-html\'},{targets: 3,className: \'al pr\'}]" ajaxurl="https://aionpowerbook.com/powerbook/extensions/AionExtensions/include/ItemCheck_ajax.php?type=extra&name=' . $name . '&lang='.$lang.'">
				<thead>
				<tr>
				<th class="fixed nowrap">ID</th>
				<th class="fixed nowrap no-sorting"></th>
				<th class="nowrap ajax100p ">Name</th>
				<th class="nowrap">Level</th>
				</tr>
				</thead>
				</table>
				
				<div class="cl"></div></div>';	
}else {
	return '';
}
	
}

function checkQuestReward($name, $lang, $active){
	
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

or painter_selectable_item like '$name%' or painter_selectable_item1 like '$name%' or painter_selectable_item2 like '$name%' or painter_selectable_item3 like '$name%' or painter_selectable_item4 like '$name%' or painter_selectable_item5 like '$name%' or painter_selectable_item6 like '$name%' or painter_selectable_item7 like '$name%' or painter_selectable_item8 like '$name%' 

LIMIT 0, 1
";

$query  = mysql_query($query) or die(mysql_error());
$result = mysql_fetch_assoc($query);
$id=$result["id"];
	
	
if ($id != NULL) {
return '<li role="presentation" class="'.$active.'"><a href="#Quest" aria-controls="Quest" role="tab" data-toggle="tab">Quest Reward</a></li><cuthere>
				
				<div role="tabpanel" class="tab-pane '.$active.'" id="Quest">
				
				<table class="lists list_basicitem width_100p DataTableAJAX" id="quest" DefsColumn="[{targets: 0,className: \'al pr\', type: \'num-html\'},{targets: 1,className: \'al pr\'},{targets: 2,type: \'num-html\'},{targets: 3,className: \'al pr\'}]" ajaxurl="https://aionpowerbook.com/powerbook/extensions/AionExtensions/include/ItemCheck_ajax.php?type=questreward&name=' . $name . '&lang='.$lang.'">
				<thead><tr>
				<th class="fixed nowrap">ID</th>
				<th class="fixed nowrap no-sorting"></th>
				<th class="nowrap ajax100p ">Name</th>
				<th class="nowrap">Level</th>
				</tr></thead></table><div class="cl"></div></div>';	
}else {
	return '';
}
	
}


















function CheckItemForAll($devname, $lang)
{
	
	
	
	
	
$IsExtraItem = checkExtraItem($devname, $lang);


if ($IsExtraItem != NULL) {
$ExtraItemChunk = explode('<cuthere>', $IsExtraItem);
}else {
	$active = 'active'; 
}



$IsQuestReward = checkQuestReward($devname, $lang, $active);

if ($IsQuestReward != NULL) {
$QuestRewardChunk = explode('<cuthere>', $IsQuestReward);
}



if ($IsExtraItem != NULL or $IsQuestReward != NULL) {
return '		<br>
		<div class="hbody">
		<ul class="nav nav-tabs" role="tablist">
' . $ExtraItemChunk[0] . '
' . $QuestRewardChunk[0] . '
		</ul>
		<br>
			<div class="tab-content">
' . $ExtraItemChunk[1] . '
' . $QuestRewardChunk[1] . '
			</div>
		</div>';
	}else {
		return '';
	}
}