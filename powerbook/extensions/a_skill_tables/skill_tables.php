<?php

header('Content-type: text/html; charset=utf-8');
$wgExtensionCredits['variable'][] = array(
	'path'           => __FILE__,
	'name'           => 'Aion Item Tables',
	'author'         => 'Kelekelio',
	'url'            => 'https://aionpowerbook.com',
	'descriptionmsg' => 'Tables with Aion Items by type',
	'version'		 => '1.0',
	'license-name' 	 => 'LICENSE',
);

$wgHooks['ParserFirstCallInit'][] = 'AionSkillTablesFunction';
$wgExtensionMessagesFiles['AionSkillTables'] = __DIR__ . '/skill_tables.i18n.php';
function AionSkillTablesFunction( &$parser ) {
   $parser->setFunctionHook( 'skill_tables', 'AionSkillTablesParserFunction' );
   return true;
}






function AionSkillTablesParserFunction( &$parser, $arg1='' ) {
global $wgOut;
$language = language();
$classic = isClassic();

if ($classic == '1') {
    $cl = "_cl";
}



$serv = $_SERVER['DOCUMENT_ROOT'];
$cachefile = $serv . '/powerbook/extensions/AionExtensions/cache/skilltables/'.$language.'/table_'.$arg1. $cl .'.json';
$exists = file_exists($cachefile);

if( !$exists || ( $exists && time() > strtotime('+31 days', filemtime($cachefile)) )) {
	$ajax = "https://aionpowerbook.com/powerbook/extensions/a_skill_tables/skill_tables_ajax.php?lang=" . $language . '&class=' . $arg1 . '&classic=' . $classic;
}else {
	$ajax = "https://aionpowerbook.com/powerbook/extensions/AionExtensions/cache/skilltables/".$language."/table_".$arg1. $cl .".json";
	$wgOut->AddHTML(  "<!-- Cached copy, generated ".date('H:i', filemtime($cachefile))." -->\n" );
}




	 $typeselect = '
	 <div class="cl"></div>
	 <div class="datatable-custom-controls" >';		
			$typeselect .= '<span style="float:right">Max Level Only: <input id="SkillBox" class="SkillBox" type="checkbox" data-column="7" value="max"></select>';
		$typeselect .= '</div>';



$cachefilemax = $serv . '/powerbook/extensions/AionExtensions/cache/skilltables/'.$language.'/table_'.$arg1. $cl . '_max.json';
$maxexists = file_exists($cachefilemax);
if( !$maxexists || ( $maxexists && time() > strtotime('+31 days', filemtime($cachefilemax)) )) {
	$ajaxmax = "https://aionpowerbook.com/powerbook/extensions/a_skill_tables/skill_tables_ajax_max.php?lang=" . $language . '&class=' . $arg1 . '&classic=' . $classic;
}else {
	$ajaxmax = "https://aionpowerbook.com/powerbook/extensions/AionExtensions/cache/skilltables/".$language."/table_".$arg1. $cl . "_max.json";
}
		
		




	$itemtablestart = $typeselect . '<br><br><div class="hbody">
	
	<table class="lists list_basicitem width_100p skilljsonTable"  ajaxurl="'.$ajax.'" ajaxmaxsourceurl="'.$ajaxmax.'" >
	
	
	<thead>
	<tr>
	
	<th class="nowrap">Level</th>
	<th class="nowrap no-sorting"></th>
	<th class=""		style="width:100%" >Name</th>
	<th class="nowrap ">Type</th>
	<th class="nowrap width75">Cost</th>
	<th class="width60">Cast Time</th>
	<th class="">Cooldown</th>
	</tr>
	</thead>
	<tbody></tbody></table>	
	<div class="cl"></div></div>';
	
	
	$tableend = $itemtablestart;
	
	
	
	
	
	
	return array( $tableend, 'noparse' => true, 'isHTML' => true );
}