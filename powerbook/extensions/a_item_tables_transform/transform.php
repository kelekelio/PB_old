<?php
header('Content-type: text/html; charset=utf-8');
$wgExtensionCredits['variable'][] = array(
	'path'           => __FILE__,
	'name'           => 'Aion minions Tables',
	'author'         => 'Kelekelio',
	'url'            => 'https://aionpowerbook.com',
	'descriptionmsg' => 'Tables with Aion Items by type',
	'version'		 => '1.0',
	'license-name' 	 => 'LICENSE',
);

$wgHooks['ParserFirstCallInit'][] = 'AiontransformTablesFunction';
$wgExtensionMessagesFiles['AiontransformTables'] = __DIR__ . '/transform.i18n.php';
function AiontransformTablesFunction( &$parser ) {
   $parser->setFunctionHook( 'transform_tables', 'AiontransformTablesParserFunction' );
   return true;
}
function AiontransformTablesParserFunction( &$parser, $arg1=''  ) {
global $wgOut;
$language = language();



$serv = $_SERVER['DOCUMENT_ROOT'];
$cachefile = $serv . '/powerbook/extensions/AionExtensions/cache/transformation/table_'.$language.'.json';
$exists = file_exists($cachefile);

if( !$exists || ( $exists && time() > strtotime('+31 days', filemtime($cachefile)) )) {
	$ajax = "https://aionpowerbook.com/powerbook/extensions/a_item_tables_transform/transform_ajax.php?lang=" . $language;
}else {
	$ajax = "https://aionpowerbook.com/powerbook/extensions/AionExtensions/cache/transformation/table_".$language.".json";
	$wgOut->AddHTML(  "<!-- Cached copy, generated ".date('H:i', filemtime($cachefile))." -->\n" );
}











	$resulttablestart = '<div class="hbody" >
	
	<table class="lists list_basicitem width_100p ajaxTable"  ajaxurl="'.$ajax.'" >
	
	<thead><tr>
	<th class="fixed nowrap">ID</th>
	<th class="fixed nowrap no-sorting"></th>
	<th class="nowrap">Name</th>
	<th class="nowrap" width="30px">Grade</th>
	</tr>
	</thead>
	
	<tbody></tbody>
	</table>
	
	<div class="cl"></div>
	
	</div>';
	
	
	$resultend = "$resulttablestart";
		

		


return array( $resultend, 'noparse' => true, 'isHTML' => true );
}