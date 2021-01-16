<?php

$mysqlserver="localhost";
$mysqlusername="login2";
$mysqlpassword="passw";
$link2=mysql_connect($mysqlserver, $mysqlusername, $mysqlpassword) or die ("Error connecting to mysql server: ".mysql_error());

$dbname = 'login';
mysql_select_db($dbname, $link2) or die ("Error selecting specified database on mysql server: ".mysql_error());
mysql_set_charset('utf8', $link2);
header('Content-type: text/html; charset=utf-8');


header('Content-type: text/html; charset=utf-8');
$wgExtensionCredits['variable'][] = array(
	'path'           => __FILE__,
	'name'           => 'Aion LBM Tables',
	'author'         => 'Kelekelio',
	'url'            => 'https://aionpowerbook.com',
	'descriptionmsg' => 'Tables with LBM',
	'version'		 => '1.0',
	'license-name' 	 => 'LICENSE',
);

$wgHooks['ParserFirstCallInit'][] = 'AionLBMTablesFunction';
$wgExtensionMessagesFiles['AionLBMTables'] = __DIR__ . '/achievements.i18n.php';
function AionLBMTablesFunction( &$parser ) {
   $parser->setFunctionHook( 'lbm_tables', 'AionLBMTablesParserFunction' );
   return true;
}


function achievement_reward ($name, $count, $language) {

    $query = "
SELECT id, icon_name
FROM client_items
WHERE name like '$name'
       ";

    $query  = mysql_query($query) or die(mysql_error());
    $result = mysql_fetch_assoc($query);

	$id = $result["id"];
	$quality = strtolower($result["quality"]);
	$icon_name=strtolower($result["icon_name"]);
	
	
	$fin_icon_name = strtr($icon_name, array(
		".dds" => '',
		));

	if ($count == '0' or $count == '+0') {
		$count = '';
	}	

	
	if ($id != NULL){
		return '<a href="https://aionpowerbook.com/powerbook/Item/' . $id . '" tooltipID="' . $id . '" tooltipcount="'.$count.'" tooltiplang="' . $language . '" class="tooltipzy" ><div style="background-image: url(https://aionpowerbook.com/item/icon/'.$fin_icon_name.'.png); display:inline-block; width:40px; height:40px; color:white; position: relative; "><p style="background-color: black; bottom:0; right:4px; position: absolute; font-weight: bold;" >'.$count.'</p></div></a> ';
	}else {
		return '';
	}
	
	
}


function achievement_final_reward ($repeats, $language) {




$serv = $_SERVER['DOCUMENT_ROOT'];
$cachefile = $serv . '/powerbook/extensions/AionExtensions/cache/achievement/'.$language.'/final_'.$repeats.'.html';
$exists = file_exists($cachefile);


if( !$exists || ( $exists && time() > strtotime('+31 days', filemtime($cachefile)) )) {

if ($repeats == 'weekly') {
	$where = " type = 'weekly' and race = 'dark' ";
}elseif ($repeats == 'dailylow') {
	$where = " repeats = 'mon' and race = 'all' and active = '1' ";	
}elseif ($repeats == 'weeklylow') {
	$where = " type = 'weekly' and race = 'all' and active = '1' ";	
}else {
	$where = " repeats = '$repeats' and race = 'dark' ";
}




$query="
SELECT  * 
FROM client_achievement
WHERE $where ";

$result=mysql_query($query) or die ("Query to get data from items failed: ".mysql_error());

while ($row=mysql_fetch_array($result)) {
        $id=$row["id"];
		$title = translate($row["title"], $language);
		$description = translate($row["description"], $language);
		$item_name = $row["item_name"];
		$item_amount = $row["item_amount"];
		$item_name1 = $row["item_name1"];
		$item_amount1 = $row["item_amount1"];
		$item_name2 = $row["item_name2"];
		$item_amount2 = $row["item_amount2"];
		$item_name3 = $row["item_name3"];
		$item_amount3 = $row["item_amount3"];
		$item_name4 = $row["item_name4"];
		$item_amount4 = $row["item_amount4"];
		$item_name5 = $row["item_name5"];
		$item_amount5 = $row["item_amount5"];
		$completecount = $row["completecount"];
		$ap = number_format($row["ap"]);
}


$finaldescription = strtr($description, array(
	"</font>" => '</font></font>',
	"</p><p><font color" => '</p><p style="padding-bottom:5px;" ><font color'
));

if ($ap > 1) {
	$reward = '<div class="restrictionTip" style="background-image: url(https://aionpowerbook.com/item/icon/icon_quest_ap01.png); display:inline-block; width:40px; height:40px; color:white; position: relative; " title="'.$ap.'" ><p style="bottom:0; right:4px; position: absolute; font-weight: bold;"  ></p></div> ';
}
if ($item_name != NULL) {
	$reward .= achievement_reward($item_name, $item_amount, $language);
}
if ($item_name1 != NULL) {
	$reward .= achievement_reward($item_name1, $item_amount1, $language);
}
if ($item_name2 != NULL) {
	$reward .= achievement_reward($item_name2, $item_amount2, $language);
}
if ($item_name3 != NULL) {
	$reward .= achievement_reward($item_name3, $item_amount3, $language);
}
if ($item_name4 != NULL) {
	$reward .= achievement_reward($item_name4, $item_amount4, $language);
}
if ($item_name5 != NULL) {
	$reward .= achievement_reward($item_name5, $item_amount5, $language);
}



$finalreward = '<div style="background-image: url(https://aionpowerbook.com/lugbug/lugbug_quest_background2.png); background-size: cover; width:890px; height:100px; margin-bottom:8px; ">
								<div style="padding-top:10px; padding-left:10px" >
									<div>
									<div style="width:65%; height:80px; display:inline-block; " >
										<div style="height:100%">
											<p style="font-size:16px; padding-bottom:8px; font-weight: bold; "><font color="c6d8ee">'.$title.'</font></p> 
											
											'.$finaldescription.'
											
											<span class="" style="display: inline-block; width: 95%; height: 15px; background-color: rgb(0, 0, 0);"><p align="center" style="color:white;">0/'.$completecount.'</p></span>
										</div>
									</div>
									
									<div style="width:34%; height:80px; display:inline-block; vertical-align:top; " >
										<div style="height:100%; padding-top:20px; ">
											'.$reward.'
										
										</div>
									</div>
									</div>
								</div>
							</div>';








$serv = $_SERVER['DOCUMENT_ROOT'];
$cachefile = $serv . '/powerbook/extensions/AionExtensions/cache/achievement/'.$language.'/final_'.$repeats.'.html';
file_put_contents($cachefile, $finalreward);


if ($id != NULL) {
	return $finalreward; 
}else {
	return '';
}	


}
else {
	
	$servv = $_SERVER['DOCUMENT_ROOT'];
	$cachefilev = $servv . '/powerbook/extensions/AionExtensions/cache/achievement/'.$language.'/final_'.$repeats.'.html';
    $data = file_get_contents($cachefilev);
	return "<!-- Cached copy, generated ".date('H:i', filemtime($cachefilev))." -->\n" . $data;
	
}


	
}



function client_achievement_action ($id, $race, $language) {


$query="
SELECT  * 
FROM client_achievement_action
WHERE id = '$id' ";

$result=mysql_query($query) or die ("Query to get data from items failed: ".mysql_error());

while ($row=mysql_fetch_array($result)) {
        $id=$row["id"];
		$title = translate($row["title"], $language);
		$description = translate($row["description"], $language);
		$item_name = $row["item_name"];
		$item_amount = $row["item_amount"];
		$item_name1 = $row["item_name1"];
		$item_amount1 = $row["item_amount1"];
		$item_name2 = $row["item_name2"];
		$item_amount2 = $row["item_amount2"];
		$item_name3 = $row["item_name3"];
		$item_amount3 = $row["item_amount3"];
		$item_name4 = $row["item_name4"];
		$item_amount4 = $row["item_amount4"];
		$item_name5 = $row["item_name5"];
		$item_amount5 = $row["item_amount5"];
		$maxprogress = $row["maxprogress"];
}


$finaldescription = strtr($description, array(
	"</font>" => '</font></font>',
	"</p><p><font color" => '</p><p style="padding-bottom:5px;" ><font color',
	"<a " => "<tempa ",
	"</a> " => "</tempa> ",
));


if ($item_name != NULL) {
	$reward = achievement_reward($item_name, $item_amount, $language);
}
if ($item_name1 != NULL) {
	$reward .= achievement_reward($item_name1, $item_amount1, $language);
}
if ($item_name2 != NULL) {
	$reward .= achievement_reward($item_name2, $item_amount2, $language);
}
if ($item_name3 != NULL) {
	$reward .= achievement_reward($item_name3, $item_amount3, $language);
}
if ($item_name4 != NULL) {
	$reward .= achievement_reward($item_name4, $item_amount4, $language);
}
if ($item_name5 != NULL) {
	$reward .= achievement_reward($item_name5, $item_amount5, $language);
}


if (strtolower($race) == 'light'){
			$questrace = ' <span class="pc_light" title="' . translate('STR_TOOLTIP_PC_LIGHT', $language) . '"></span>';
		}elseif (strtolower($race) == 'dark'){
			$questrace = ' <span class="pc_dark" title="' . translate('STR_TOOLTIP_PC_DARK', $language) . '"></span>';
		}else {
			$questrace = '';
		}



$questrow = '<div style="background-image: url(https://aionpowerbook.com/lugbug/lugbug_quest_background2.png); background-size: cover; width:875px; height:100px; margin-bottom:8px; ">
								<div style="padding-top:10px; padding-left:10px" >
									<div>
									<div style="width:84%; height:80px; display:inline-block; " >
										<div style="height:100%">
											<p style="font-size:16px; padding-bottom:8px; font-weight: bold; "><font color="c6d8ee">'.$title.'</font> '.$questrace.'</p> 
											
											'.$finaldescription.'
											
											<span class="" style="display: inline-block; width: 95%; height: 15px; background-color: rgb(0, 0, 0);"><p align="center" style="color:white;">0/'.$maxprogress.'</p></span>
										</div>
									</div>
									
									<div style="width:15%; height:80px; display:inline-block; vertical-align:top; " >
										<div style="height:100%; padding-top:20px; ">
											'.$reward.'
										
										</div>
									</div>
									</div>
								</div>
							</div>';











if ($id != NULL) {
	return $questrow; 
}else {
	return '';
}	
	
}



function client_achievement ($repeats, $language) {
	

	
$serv = $_SERVER['DOCUMENT_ROOT'];
$cachefile = $serv . '/powerbook/extensions/AionExtensions/cache/achievement/'.$language.'/list_'.$repeats.'.html';
$exists = file_exists($cachefile);


if( !$exists || ( $exists && time() > strtotime('+31 days', filemtime($cachefile)) )) {
	

if ($repeats == 'event') {
	
	
$query = "
SELECT *
FROM client_achievement_event 
where mission_id > 900 ";


$query  = mysql_query($query) or die(mysql_error());
$rows = array();
while($row = mysql_fetch_array($query))
$rows[] = $row;

foreach($rows as $row){ 
    $action .= client_achievement_action($row['mission_id'], $row['race'], $language);
}

	
}else {	
if ($repeats == 'weekly') {
	$where = " type = 'weekly' and (race = 'dark' or race = 'light') ";
}elseif ($repeats == 'dailylow') {
	$where = " repeats = 'mon' and race = 'all' and active = '1' ";	
}elseif ($repeats == 'weeklylow') {
	$where = " type = 'weekly' and race = 'all' and active = '1' ";	
}else {
	$where = " repeats = '$repeats' and (race = 'dark' or race = 'light') and active = '1' ";
}
	
$query = "
SELECT *
FROM client_achievement
WHERE $where ";



$query  = mysql_query($query) or die(mysql_error());
$rows = array();
while($row = mysql_fetch_array($query))
$rows[] = $row;

foreach($rows as $row){ 
    $action .= client_achievement_action($row['action'], $row['race'], $language);
    $action .= client_achievement_action($row['action1'], $row['race'], $language);
    $action .= client_achievement_action($row['action2'], $row['race'], $language);
    $action .= client_achievement_action($row['action3'], $row['race'], $language);
    $action .= client_achievement_action($row['action4'], $row['race'], $language);
    $action .= client_achievement_action($row['action5'], $row['race'], $language);
    $action .= client_achievement_action($row['action6'], $row['race'], $language);
    $action .= client_achievement_action($row['action7'], $row['race'], $language);
    $action .= client_achievement_action($row['action8'], $row['race'], $language);
    $action .= client_achievement_action($row['action9'], $row['race'], $language);
    $action .= client_achievement_action($row['action10'], $row['race'], $language);
    $action .= client_achievement_action($row['action11'], $row['race'], $language);
    $action .= client_achievement_action($row['action12'], $row['race'], $language);
    $action .= client_achievement_action($row['action13'], $row['race'], $language);
    $action .= client_achievement_action($row['action14'], $row['race'], $language);
    $action .= client_achievement_action($row['action15'], $row['race'], $language);
    $action .= client_achievement_action($row['action16'], $row['race'], $language);
}


}








$serv = $_SERVER['DOCUMENT_ROOT'];
$cachefile = $serv . '/powerbook/extensions/AionExtensions/cache/achievement/'.$language.'/list_'.$repeats.'.html';
file_put_contents($cachefile, $action);


return $action;




}
else {
	
	$servv = $_SERVER['DOCUMENT_ROOT'];
	$cachefilev = $servv . '/powerbook/extensions/AionExtensions/cache/achievement/'.$language.'/list_'.$repeats.'.html';
    $data = file_get_contents($cachefilev);
	return "<!-- Cached copy, generated ".date('H:i', filemtime($cachefilev))." -->\n" . $data;
	
}
	
}
































function AionLBMTablesParserFunction( &$parser, $arg1=''  ) {

 global $wgLang, $wgOut;
 $code = $wgLang->getCode();
 $isQA =  $_GET['qa'];
 $language = language(); 
 $dayweek = date('w');
 
 
 
	$mon_quest = client_achievement('mon', $language);
	$mon_final_quest = achievement_final_reward('mon', $language);
	$tue_quest = client_achievement('tue', $language);
	$tue_final_quest = achievement_final_reward('tue', $language);
	$wed_quest = client_achievement('wed', $language);
	$wed_final_quest = achievement_final_reward('wed', $language);
	$thu_quest = client_achievement('thu', $language);
	$thu_final_quest = achievement_final_reward('thu', $language);
	$fri_quest = client_achievement('fri', $language);
	$fri_final_quest = achievement_final_reward('fri', $language);
	$sat_quest = client_achievement('sat', $language);
	$sat_final_quest = achievement_final_reward('sat', $language);
	$sun_quest = client_achievement('sun', $language);
	$sun_final_quest = achievement_final_reward('sun', $language);
	$weekly_quest = client_achievement('weekly', $language);
	$final_weekly_quest = achievement_final_reward('weekly', $language);
	
	
	$dailylow_quest = client_achievement('dailylow', $language);
	$dailylow_final_quest = achievement_final_reward('dailylow', $language);
	$weeklylow_quest = client_achievement('weeklylow', $language);
	$weeklylow_final_quest = achievement_final_reward('weeklylow', $language);
	$event_quest = client_achievement('event', $language);
	
	
 
 if ($dayweek == '1') {
	 $mon = 'active';
 }elseif ($dayweek == '2') {
	 $tue = 'active';
 }elseif ($dayweek == '3') {
	 $wed = 'active';
 }elseif ($dayweek == '4') {
	 $thu = 'active';
 }elseif ($dayweek == '5') {
	 $fri = 'active';
 }elseif ($dayweek == '6') {
	 $sat = 'active';
 }elseif ($dayweek == '0') {
	 $sun = 'active';
 }


 

	 
$tableend = '<div class="cl"></div>
		<div class="hbody" >

			<div class=""  ><img src="https://aionpowerbook.com/lugbug/lugbugmission_top.jpg" width="901px"></div>
			<ul class="nav nav-tabs" role="tablist" style="border-bottom:0px; background-color:#1e4276">
			
				<li role="presentation" class="lugbugtab" style="width:75px;" ><a href="#Monday" aria-controls="monday" role="tab" data-toggle="tab" class="'.$mon.'"><p align="center">Mon</p></a></li>
				<li role="presentation" class="lugbugtab" style="width:75px;" ><a href="#Tuesday" aria-controls="tuesday" role="tab" data-toggle="tab" class="'.$tue.'"><p align="center">Tue</p></a></li>
				<li role="presentation" class="lugbugtab" style="width:75px;" ><a href="#Wednesday" aria-controls="wednesday" role="tab" data-toggle="tab" class="'.$wed.'"><p align="center">Wed</p></a></li>
				<li role="presentation" class="lugbugtab" style="width:75px;" ><a href="#Thursday" aria-controls="thursday" role="tab" data-toggle="tab" class="'.$thu.'"><p align="center">Thu</p></a></li>
				<li role="presentation" class="lugbugtab" style="width:75px;" ><a href="#Friday" aria-controls="friday" role="tab" data-toggle="tab" class="'.$fri.'"><p align="center">Fri</p></a></li>
				<li role="presentation" class="lugbugtab" style="width:75px;" ><a href="#Saturday" aria-controls="saturday" role="tab" data-toggle="tab" class="'.$sat.'"><p align="center">Sat</p></a></li>
				<li role="presentation" class="lugbugtab" style="width:75px;" ><a href="#Sunday" aria-controls="sunday" role="tab" data-toggle="tab" class="'.$sun.'"><p align="center">Sun</p></a></li>
				<li role="presentation" class="lugbugtab" style="width:75px;" ><a href="#Weekly" aria-controls="weekly" role="tab" data-toggle="tab" class=""><p align="center">Weekly</p></a></li>
				<li role="presentation" class="lugbugtab" style="width:100px;" ><a href="#Dailylow" aria-controls="dailylow" role="tab" data-toggle="tab" class=""><p align="center">Daily 1~75</p></a></li>
				<li role="presentation" class="lugbugtab" style="width:120px;" ><a href="#Weeklylow" aria-controls="weeklylow" role="tab" data-toggle="tab" class=""><p align="center">Weekly  1~75</p></a></li>
				<li role="presentation" class="lugbugtab" style="width:75px;" ><a href="#Event" aria-controls="event" role="tab" data-toggle="tab" class=""><p align="center">Event</p></a></li>
			</ul>
			<div class="tab-content" style="background-color:#1e4276;" >
				<div role="tabpanel" class="tab-pane '.$mon.'" id="Monday"  ><div style="display:block; height:430px; overflow-y:auto"><div style="background-color:#1e4276; padding-top:5px; padding-left:3px;" >'.$mon_quest.'</div></div><div style="background-color:#1e4276; padding-top:5px; padding-left:3px; padding-bottom:5px; ">'.$mon_final_quest.'</div></div>
				
				<div role="tabpanel" class="tab-pane '.$tue.'" id="Tuesday"  ><div style="display:block; height:430px; overflow-y:auto"><div style="background-color:#1e4276; padding-top:5px; padding-left:3px;" >'.$tue_quest.'</div></div><div style="background-color:#1e4276; padding-top:5px; padding-left:3px; padding-bottom:5px; ">'.$tue_final_quest.'</div></div>
				
				<div role="tabpanel" class="tab-pane '.$wed.'" id="Wednesday"  ><div style="display:block; height:430px; overflow-y:auto"><div style="background-color:#1e4276; padding-top:5px; padding-left:3px;" >'.$wed_quest.'</div></div><div style="background-color:#1e4276; padding-top:5px; padding-left:3px; padding-bottom:5px; ">'.$wed_final_quest.'</div></div>
				
				<div role="tabpanel" class="tab-pane '.$thu.'" id="Thursday"  ><div style="display:block; height:430px; overflow-y:auto"><div style="background-color:#1e4276; padding-top:5px; padding-left:3px;" >'.$thu_quest.'</div></div><div style="background-color:#1e4276; padding-top:5px; padding-left:3px; padding-bottom:5px; ">'.$thu_final_quest.'</div></div>
				
				<div role="tabpanel" class="tab-pane '.$fri.'" id="Friday"  ><div style="display:block; height:430px; overflow-y:auto"><div style="background-color:#1e4276; padding-top:5px; padding-left:3px;" >'.$fri_quest.'</div></div><div style="background-color:#1e4276; padding-top:5px; padding-left:3px; padding-bottom:5px; ">'.$fri_final_quest.'</div></div>
				
				<div role="tabpanel" class="tab-pane '.$sat.'" id="Saturday"  ><div style="display:block; height:430px; overflow-y:auto"><div style="background-color:#1e4276; padding-top:5px; padding-left:3px;" >'.$sat_quest.'</div></div><div style="background-color:#1e4276; padding-top:5px; padding-left:3px; padding-bottom:5px; ">'.$sat_final_quest.'</div></div>
				
				<div role="tabpanel" class="tab-pane '.$sun.'" id="Sunday"  ><div style="display:block; height:430px; overflow-y:auto"><div style="background-color:#1e4276; padding-top:5px; padding-left:3px;" >'.$sun_quest.'</div></div><div style="background-color:#1e4276; padding-top:5px; padding-left:3px; padding-bottom:5px; ">'.$sun_final_quest.'</div></div>
				

				<div role="tabpanel" class="tab-pane" id="Weekly"><div style="display:block; height:430px; overflow-y:auto"><div style="background-color:#1e4276; padding-top:5px; padding-left:3px;" >'.$weekly_quest.'</div></div><div style="background-color:#1e4276; padding-top:5px; padding-left:3px; padding-bottom:5px; ">'.$final_weekly_quest.'</div></div>
				
				<div role="tabpanel" class="tab-pane " id="Dailylow"  ><div style="display:block; height:430px; overflow-y:auto"><div style="background-color:#1e4276; padding-top:5px; padding-left:3px;" >'.$dailylow_quest.'</div></div><div style="background-color:#1e4276; padding-top:5px; padding-left:3px; padding-bottom:5px; ">'.$dailylow_final_quest.'</div></div>
				
				<div role="tabpanel" class="tab-pane " id="Weeklylow"  ><div style="display:block; height:430px; overflow-y:auto"><div style="background-color:#1e4276; padding-top:5px; padding-left:3px;" >'.$weeklylow_quest.'</div></div><div style="background-color:#1e4276; padding-top:5px; padding-left:3px; padding-bottom:5px; ">'.$weeklylow_final_quest.'</div></div>
				
				<div role="tabpanel" class="tab-pane " id="Event"  ><div style="display:block; height:430px; overflow-y:auto"><div style="background-color:#1e4276; padding-top:5px; padding-left:3px;" >'.$event_quest.'</div></div><div style="background-color:#1e4276; padding-top:5px; padding-left:3px; padding-bottom:5px; ">'.$event_final_quest.'</div></div>
			</div>
		<div class="cl"></div>
		</div>';
 
 

 
 		

		$wgOut->AddHTML( $tableend );
		
}