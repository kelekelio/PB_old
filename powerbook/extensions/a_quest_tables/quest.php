<?php
header('Content-type: text/html; charset=utf-8');
$wgExtensionCredits['variable'][] = array(
	'path'           => __FILE__,
	'name'           => 'Aion quests',
	'author'         => 'Kelekelio',
	'url'            => 'https://aionpowerbook.com',
	'descriptionmsg' => 'Aion quest table',
	'version'		 => '1.0',
	'license-name' 	 => 'LICENSE',
);
 
$wgHooks['ParserFirstCallInit'][] = 'AionAllQuesttableFunction';
$wgExtensionMessagesFiles['AionAllQuestTable'] = __DIR__ . '/quest.i18n.php';
function AionAllQuesttableFunction( &$parser ) {
   $parser->setFunctionHook( 'questtable', 'AionAllQuestTableParserFunction' );
   return true;
}




function AionAllQuestTableParserFunction( &$parser, $arg1='', $arg2='', $arg3='' ) {
global $wgOut;
$language = language();

    if (isClassic() == '1') {
        $cl = "_cl";
    }


 $min = $_GET['ll'];
 $max = $_GET['hl'];
 $rrace = $_GET['race'];
 $region = $_GET['region'];
 
 if ($min != NULL){
	 $ll = $min;	 
 }else {
	 $ll = $arg1;	
 }
 
 if ($max != NULL){
	 $hl = $max;	 
 }else {
	 $hl = $arg2;	
 }
 
 if ($rrace != NULL){
	 $race = $rrace;	 
 }else {
	 $race = $arg3;	
 }
 
 
 
 
$serv = $_SERVER['DOCUMENT_ROOT'];
$cachefile = $serv . '/powerbook/extensions/AionExtensions/cache/questtables/'.$language.'/'.$ll.'_'. $hl . '_'. $race . '_'. $region . $cl .'.json';
$exists = file_exists($cachefile);

if( !$exists || ( $exists && time() > strtotime('+31 days', filemtime($cachefile)) )) {
	$ajax = 'https://aionpowerbook.com/powerbook/extensions/a_quest_tables/quest_ajax.php?lowerlevel=' . $ll . '&higherlevel=' . $hl . '&race=' . $race . '&lang=' . $language . '&region=' . $region . '&classic=' . isClassic();
}else {
	$ajax = 'https://aionpowerbook.com/powerbook/extensions/AionExtensions/cache/questtables/'.$language.'/'.$ll.'_'. $hl . '_'. $race . '_'. $region . $cl .'.json';
	$wgOut->AddHTML(  "<!-- Cached copy, generated ".date('H:i', filemtime($cachefile))." -->\n" );
}



		
		$tableend .= '		
		<br><div class="hbody">

		<table class="lists list_basicitem width_100p ajaxTable"  ajaxurl="'.$ajax.'">
		
		<thead>
		<tr>
		<th style="width:25px !important" >Min<br>Level</th>
		<th>Quest Name</th>
		<th style="width:300px !important" class="">Rewards</th>
		</tr>
		</thead>
		
		</table>
		
		<div class="cl"></div></div>';
		
		
	$wgOut->AddHTML( $tableend );	
	
	
	if ($region != NULL) {
		$regionname = translate ($region, $language);
		$DisplayTitle = '{{DISPLAYTITLE:' . $regionname . '}}';
		return array( $DisplayTitle, 'noparse' => false );
	}
	

}