<?php

function checkNumberofRows ($type) {

	include $_SERVER['DOCUMENT_ROOT'] . '/powerbook/extensions/AionExtensions/include/db_conf.php';

	$connection = mysqli_connect($s, $u, $p, $db);

	if (mysqli_connect_errno()) 
    { 
        return "DB fail."; 
    } 

	$query = " SELECT id FROM client_item_collection WHERE collection_grade = '$type' ";
	
	$result = mysqli_query($connection, $query); 

		   if ($result) 
		   { 
			   // it return number of rows in the table. 
			   $row = mysqli_num_rows($result); 
				 
			   return $row;
			   mysqli_free_result($result); 
		   } 
		 
		   // Connection close  
		   mysqli_close($connection); 

		

}

function ICLevelReward ($type, $level, $language) {

	include $_SERVER['DOCUMENT_ROOT'] . '/powerbook/extensions/AionExtensions/include/db_conf.php';
	$connection = mysqli_connect($s, $u, $p, $db);

	$query = " SELECT * FROM client_item_collection_level WHERE collection_grade = '$type' and collection_level = '$level' ";
	$result = mysqli_query($connection, $query); 
	$row = mysqli_fetch_assoc($result);
		

	$collection_exp = $row['collection_exp'];
	$reward_attr01 = strtolower($row['reward_attr01']);
	$reward_attr02 = strtolower($row['reward_attr02']);


	if ($reward_attr01 != NULL) {
		$reward_attr01 = TranslateStatNames($reward_attr01, $language, '');
	}
	if ($reward_attr02 != NULL) {
		$reward_attr02 = '; ' . TranslateStatNames($reward_attr02, $language, '');
	}




	return 'Lv '.$level.': '.$reward_attr01.$reward_attr02.'<br>';

		


}





$mysqlserver="mysqlhost";
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
	'name'           => 'Aion Item Collection Tables',
	'author'         => 'Kelekelio',
	'url'            => 'https://aionpowerbook.com',
	'descriptionmsg' => 'Tables with Item Collection',
	'version'		 => '1.0',
	'license-name' 	 => 'LICENSE',
);

$wgHooks['ParserFirstCallInit'][] = 'AionICTablesFunction';
$wgExtensionMessagesFiles['AionICTables'] = __DIR__ . '/ItemCollections.i18n.php';
function AionICTablesFunction( &$parser ) {
   $parser->setFunctionHook( 'item_collection', 'AionICTablesParserFunction' );
   return true;
}




function AionICTablesParserFunction( &$parser, $arg1=''  ) {

 global $wgLang, $wgOut;
 $code = $wgLang->getCode();
 $isQA =  $_GET['qa'];
 $language = language(); 

 
 


$common_ajax	= $_SERVER['DOCUMENT_ROOT'] . '/powerbook/extensions/AionExtensions/cache/itemcollection/'.$language.'/common.json';
$ancient_ajax	= $_SERVER['DOCUMENT_ROOT'] . '/powerbook/extensions/AionExtensions/cache/itemcollection/'.$language.'/ancient.json';
$relic_ajax		= $_SERVER['DOCUMENT_ROOT'] . '/powerbook/extensions/AionExtensions/cache/itemcollection/'.$language.'/relic.json';
$event_ajax		= $_SERVER['DOCUMENT_ROOT'] . '/powerbook/extensions/AionExtensions/cache/itemcollection/'.$language.'/event.json';

if (file_exists($common_ajax)) {
	$common_ajax = 'https://aionpowerbook.com//powerbook/extensions/AionExtensions/cache/itemcollection/'.$language.'/common.json';
} else {
	$common_ajax = 'https://aionpowerbook.com/powerbook/extensions/a_ItemCollection/ItemCollections_ajax.php?l='.$language.'&t=common';
}

if (file_exists($ancient_ajax)) {
	$ancient_ajax = 'https://aionpowerbook.com//powerbook/extensions/AionExtensions/cache/itemcollection/'.$language.'/ancient.json';
} else {
	$ancient_ajax = 'https://aionpowerbook.com/powerbook/extensions/a_ItemCollection/ItemCollections_ajax.php?l='.$language.'&t=ancient';
}

if (file_exists($relic_ajax)) {
	$relic_ajax = 'https://aionpowerbook.com//powerbook/extensions/AionExtensions/cache/itemcollection/'.$language.'/relic.json';
} else {
	$relic_ajax = 'https://aionpowerbook.com/powerbook/extensions/a_ItemCollection/ItemCollections_ajax.php?l='.$language.'&t=relic';
}

if (file_exists($event_ajax)) {
	$event_ajax = 'https://aionpowerbook.com//powerbook/extensions/AionExtensions/cache/itemcollection/'.$language.'/event.json';
} else {
	$event_ajax = 'https://aionpowerbook.com/powerbook/extensions/a_ItemCollection/ItemCollections_ajax.php?l='.$language.'&t=event';
}
	 
$tableend = '<div class="cl"></div>
		<div class="hbody ICtable" >

			
			<ul class="nav nav-tabs" role="tablist" style="border-bottom:0px; background-color:#1e4276">
			
				<li role="presentation" class="lugbugtab" style="width:24%;" ><a href="#Common" aria-controls="common" role="tab" data-toggle="tab" class="active"><p align="center">Common (' . checkNumberofRows("common")  . ')</p></a></li>
				<li role="presentation" class="lugbugtab" style="width:24%;" ><a href="#Ancient" aria-controls="ancient" role="tab" data-toggle="tab" class=""><p align="center">Ancient (' . checkNumberofRows("ancient")  . ')</p></a></li>
				<li role="presentation" class="lugbugtab" style="width:24%;" ><a href="#Relic" aria-controls="relic" role="tab" data-toggle="tab" class=""><p align="center">Legendary (' . checkNumberofRows("relic")  . ')</p></a></li>
				<li role="presentation" class="lugbugtab" style="width:24%;" ><a href="#Event" aria-controls="event" role="tab" data-toggle="tab" class=""><p align="center">Event (' . checkNumberofRows("event")  . ')</p></a></li>
			</ul>
			<div class="tab-content" style="background-color:#1e4276;" >
				<div role="tabpanel" class="tab-pane active" id="Common"  >
					<table class="lists list_basicitem width_100p itemColjsonTable"  ajaxurl="'.$common_ajax.'" >
						<thead>
							<tr>
								<th class="nowrap">
									'.ICLevelReward('common', '1', $language).ICLevelReward('common', '2', $language).ICLevelReward('common', '3', $language).ICLevelReward('common', '4', $language).ICLevelReward('common', '5', $language).ICLevelReward('common', '6', $language).'
								</th>
							</tr>
						</thead>
					<tbody></tbody>
					</table>	
				</div>
			
			
				<div role="tabpanel" class="tab-pane" id="Ancient"  >
					<table class="lists list_basicitem width_100p itemColjsonTable"  ajaxurl="'.$ancient_ajax.'" >
						<thead>
							<tr>
								<th class="nowrap">'.ICLevelReward('ancient', '1', $language).ICLevelReward('ancient', '2', $language).ICLevelReward('ancient', '3', $language).ICLevelReward('ancient', '4', $language).ICLevelReward('ancient', '5', $language).ICLevelReward('ancient', '6', $language).'</th>
							</tr>
						</thead>
					<tbody></tbody>
					</table>	
				</div>
			
				<div role="tabpanel" class="tab-pane" id="Relic"  >
					<table class="lists list_basicitem width_100p itemColjsonTable"  ajaxurl="'.$relic_ajax.'" >
						<thead>
							<tr>
								<th class="nowrap">'.ICLevelReward('relic', '1', $language).ICLevelReward('relic', '2', $language).ICLevelReward('relic', '3', $language).ICLevelReward('relic', '4', $language).ICLevelReward('relic', '5', $language).ICLevelReward('relic', '6', $language).'</th>
							</tr>
						</thead>
					<tbody></tbody>
					</table>	
				</div>

				<div role="tabpanel" class="tab-pane" id="Event"  >
					<table class="lists list_basicitem width_100p itemColjsonTable"  ajaxurl="'.$event_ajax.'" >
						<thead>
							<tr>
								<th class="nowrap"></th>
							</tr>
						</thead>
					<tbody></tbody>
					</table>	
				</div>
				

			</div>
		<div class="cl"></div>
		</div>
		
		';
 
 

 
 		

		$wgOut->AddHTML( $tableend );
		
}