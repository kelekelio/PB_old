<?php
header('Content-type: text/html; charset=utf-8');
$wgExtensionCredits['variable'][] = array(
	'path'           => __FILE__,
	'name'           => 'Aion pets Tables',
	'author'         => 'Kelekelio',
	'url'            => 'https://aionpowerbook.com',
	'descriptionmsg' => 'Tables with Aion Items by type',
	'version'		 => '1.0',
	'license-name' 	 => 'LICENSE',
);

$wgHooks['ParserFirstCallInit'][] = 'AionPetTablesFunction';
$wgExtensionMessagesFiles['AionPetTables'] = __DIR__ . '/pet.i18n.php';
function AionPetTablesFunction( &$parser ) {
   $parser->setFunctionHook( 'pet_tables', 'AionPetTablesParserFunction' );
   return true;
}



function AionPetTablesParserFunction( &$parser, $arg1=''  ) {
global $wgOut;
$language = language();

    if (isClassic() == '1') {
        $cl = "_cl";
    }



$serv = $_SERVER['DOCUMENT_ROOT'];
$cachefile = $serv . '/powerbook/extensions/AionExtensions/cache/pet/table_'.$language . $cl .'.json';
$exists = file_exists($cachefile);

if( !$exists || ( $exists && time() > strtotime('+31 days', filemtime($cachefile)) )) {
	$ajax = "https://aionpowerbook.com/powerbook/extensions/a_item_tables_pets/pet_ajax.php?lang=" . $language . "&classic=" . isClassic();
}else {
	$ajax = "https://aionpowerbook.com/powerbook/extensions/AionExtensions/cache/pet/table_".$language. $cl .".json";
	$wgOut->AddHTML(  "<!-- Cached copy, generated ".date('H:i', filemtime($cachefile))." -->\n" );
}








	$resultend = '
	<div class="hbody" >
	
	<table class="lists list_basicitem width_100p ajaxTable"  ajaxurl="'.$ajax.'" >
	<thead>
	<tr>
	
	<th class="fixed nowrap">ID</th>
	<th class="fixed nowrap no-sorting"></th>
	<th class="nowrap" style="width:100%" >Name</th>
	<th class="nowrap">Feature 1</th>
	<th class="nowrap">Feature 2</th>
	<th class="nowrap">Alert</th>
	
	</tr>
	</thead>
	
	<tbody></tbody>
	
	</table>
	
	<div class="cl"></div></div>';
		

		
		
		
$wgOut->AddHTML( $resultend );
}