<?php
header('Content-type: text/html; charset=utf-8');
$wgExtensionCredits['variable'][] = array(
	'path'           => __FILE__,
	'name'           => 'Aion minions Tables',
	'author'         => 'Kelekelio',
	'url'            => 'https://aionpowerbook.com',
	'descriptionmsg' => 'Tables with Aion Minions',
	'version'		 => '1.0',
	'license-name' 	 => 'LICENSE',
);

$wgHooks['ParserFirstCallInit'][] = 'AionminionTablesFunction';
$wgExtensionMessagesFiles['AionminionTables'] = __DIR__ . '/minion.i18n.php';
function AionminionTablesFunction( &$parser ) {
   $parser->setFunctionHook( 'minion_tables', 'AionminionTablesParserFunction' );
   return true;
}
function AionminionTablesParserFunction( &$parser, $arg1=''  ) {
global $wgOut;
$language = language();



$serv = $_SERVER['DOCUMENT_ROOT'];
$cachefile = $serv . '/powerbook/extensions/AionExtensions/cache/minion/table_'.$language.'.json';
$exists = file_exists($cachefile);

if( !$exists || ( $exists && time() > strtotime('+31 days', filemtime($cachefile)) )) {
	$ajax = "https://aionpowerbook.com/powerbook/extensions/a_item_tables_minion/minion_ajax.php?lang=" . $language;
}else {
	$ajax = "https://aionpowerbook.com/powerbook/extensions/AionExtensions/cache/minion/table_".$language.".json";
	$wgOut->AddHTML(  "<!-- Cached copy, generated ".date('H:i', filemtime($cachefile))." -->\n" );
}




	$resulttablestart = '<div class="hbody" >
	
	<table class="lists list_basicitem width_100p ajaxTable"  ajaxurl="'.$ajax.'" >
	
	
	<thead><tr>
	<th class="fixed nowrap">ID</th>
	<th class="fixed nowrap no-sorting"></th>
	<th class="nowrap" style="width:100%">Name</th>
	<th class="nowrap">Grade</th>
	<th class="nowrap">Stage</th>
	</tr></thead><tbody></tbody></table><div class="cl"></div></div>';
	
	
	$resultend = "$resulttablestart";
		

		
		
		
$wgOut->AddHTML( $resultend );
}