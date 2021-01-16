<?php




function checkLimit($name) {


    include 'DBselect.php';
    $result = $db->query("
SELECT *
FROM client_npc_goodslist_2
WHERE name = '$name'
", $name)->fetchArray();
	

	$LimitName = strtolower($result["salestime_table_name"]);

	if ($LimitName == 'every_wednesday'){
		$Limit = ' (Reset: Wednesday)';
	}
	elseif ($LimitName == 'every_10_12_2_6_10_12'){
		$Limit = ' (Reset: 10:00, 12:00, 14:00, 18:00, 22:00, 0:00)';
	}
	elseif ($LimitName == 'all_turn'){
		$Limit = ' (Reset: Every Turn)';
	}
	elseif ($LimitName == 'event_every_10'){
		$Limit = ' (Reset: Event - 10:00)';
	}
	elseif ($LimitName == 'every_10_12_4_8_10_12'){
		$Limit = ' (Reset: 10:00, 12:00, 16:00, 20:00, 22:00, 0:00)';
	}
	elseif (strtolower($LimitName) == 'every_midnight_12'){
		$Limit = ' (Reset: 0:00)';
	}
	elseif ($LimitName == 'every_10_14_18_22'){
		$Limit = ' (Reset: 10:00, 14:00, 18:00, 22:00)';
	}
	elseif ($LimitName == 'every_noon_12'){
		$Limit = ' (Reset: 12:00)';
	}
	elseif ($LimitName == 'every_afternoon_8'){
		$Limit = ' (Reset: 20:00)';
	}
	elseif ($LimitName == 'monday_worktime'){
		$Limit = ' (Reset: Monday)';
	}
	elseif ($LimitName == 'friday_worktime'){
		$Limit = ' (Reset: Friday)';
	}
	elseif ($LimitName == 'tuesday_worktime'){
		$Limit = ' (Reset: Tuesday)';
	}
	elseif ($LimitName == 'wednesday_worktime'){
		$Limit = ' (Reset: Wednesday)';
	}
	elseif ($LimitName == 'Thursday_worktime'){
		$Limit = ' (Reset: Thursday)';
	}
	elseif (strtolower($LimitName) == 'wednesday_midnight_12'){
		$Limit = ' (Reset: Wednesday 0:00)';
	}
	elseif ($LimitName != NULL) {
		$Limit = ' (' . $LimitName . ')';
	}
	
	
    return $Limit;
}


function CheckTabName($name, $type) {
	
if ($type == 'ttab') {
	$from = 'client_npc_trade_in_list'; 
}elseif ($type == 'buy_tab') {
	$from = 'client_npc_purchase_list'; 
}elseif ($type == 'buy_atab') {
	$from = 'client_npc_purchase_list'; 
}else {
	$from = 'client_npc_goodslist_2'; 
}


    include 'DBselect.php';
    $result = $db->query("
SELECT *
FROM $from
WHERE name = '$name'
", $name)->fetchArray();


	
	$description = translate($result["description"], language());

    return $description ;
}



function GoodsList($name, $lang, $type, $price)
{
// $name, $lang, $type, $price ====>  'sale_f6_field_coin_08_limit_01;sale_f6_field_coin_08_limit_02', 'en', 'etab', '1000' (etab doesnt have price rate)
global $wgOut;
	
if ($price != NULL){
	$eachprice = explode ('_', $price);
	
	if ($eachprice[0] > 0) {
		
		if ($type == 'buy_atab') {
		$price2 = 'AP: '. $eachprice[0]/10 . '%<br>';
		}else {
		$price2 = 'K: '. $eachprice[0]/10 . '%<br>';
		}
	}
	
	if ($eachprice[1] > 0) {
		$price2 .= 'AP: '. $eachprice[1]/10 . '%';
	}
	
	$pricebonus = $price2;
}	
	
	
$tab = explode(';', $name);
	
$i = 0;	
foreach ($tab as $eachtab) {
	
if ($eachtab != NULL) {
	

$numb = $i;
if ($numb == '0') {
	$activate = 'active';
}else {
	$activate = ' ';
}

 
 
 

	$ajax = 'https://aionpowerbook.com/powerbook/extensions/AionExtensions/include/GoodsList_ajax.php?name=' . $eachtab . '&lang=' . $lang . '&type='.$type.'&price='.$price . "&classic=" . isClassic();
 


 $listtab .= '<li role="presentation" ><a href="#Items'. $i .'" aria-controls="Item" role="tab" data-toggle="tab" class="'.$activate.'" >'.CheckTabName($eachtab, $type).'</a></li>';
 
 
 $table .= '<div role="tabpanel" class="tab-pane '.$activate.'" id="Items'. $i .'">
		<table class="lists list_basicitem width_100p ajaxTable"  ajaxurl="'.$ajax.'" id="items'. $i .'" dataExtra="false">
		
		
		
		<thead>
		<tr>
		<th class="fixed nowrap">ID</th>
		<th class="fixed nowrap no-sorting"></th>
		<th class="nowrap ajax100p">Name '.checkLimit($eachtab).'</th>
		<th class="nowrap" width="40px">Price:<br>'. $pricebonus .'</th>
		
		</tr>
		</thead>
		</table>
		<div class="cl"></div>
				</div>';
 
 
$i++;
}else {
	break;
}
	

}
	
	
	
	
	
	
	
	
	

$Lists .= '<br><div class="hbody">
		<ul class="nav nav-tabs" role="tablist">
' . $listtab . '
		
		
		</ul>
		<br>
			<div class="tab-content">
			
' . $table . '
				
				
			</div>
		</div>';
	
	
	
	return $Lists;
}