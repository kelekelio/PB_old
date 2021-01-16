<?php
header('Content-type: text/html; charset=utf-8');
$wgExtensionCredits['variable'][] = array(
	'path'           => __FILE__,
	'name'           => 'Aion Loca',
	'author'         => 'Kelekelio',
	'url'            => 'https://aionpowerbook.com',
	'descriptionmsg' => 'Aion Loca Keys, language dependable',
	'version'		 => '1.0',
	'license-name' 	 => 'LICENSE',
);
 
$wgHooks['ParserFirstCallInit'][] = 'AionALLLocaFunction';
$wgExtensionMessagesFiles['AionALLLoca'] = __DIR__ . '/aion_loca.i18n.php';
function AionALLLocaFunction( &$parser ) {
   $parser->setFunctionHook( 'loca', 'AionALLLocaParserFunction' );
   return true;
}
function AionALLLocaParserFunction( &$parser, $arg1 ) {

$loca = translate($arg1, language());

return array( $loca );
}
 
 
