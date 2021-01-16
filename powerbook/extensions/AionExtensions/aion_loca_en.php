<?php
header('Content-type: text/html; charset=utf-8');
$wgExtensionCredits['variable'][] = array(
	'path'           => __FILE__,
	'name'           => 'Aion EN Loca',
	'author'         => 'Kelekelio',
	'url'            => 'https://aionpowerbook.com',
	'descriptionmsg' => 'Aion English Loca Keys',
	'version'		 => '1.0',
	'license-name' 	 => 'LICENSE',
);
 
$wgHooks['ParserFirstCallInit'][] = 'AionALLLocaFunctionEN';
$wgExtensionMessagesFiles['AionALLLocaEN'] = __DIR__ . '/aion_loca_en.i18n.php';
function AionALLLocaFunctionEN( &$parser ) {
   $parser->setFunctionHook( 'loca_en', 'AionALLLocaParserFunctionEN' );
   return true;
}
function AionALLLocaParserFunctionEN( &$parser, $arg1 ) {


    $loca = translate($arg1, "en");

    return array( $loca );
}
