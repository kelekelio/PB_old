<?php
if ( !defined( 'MEDIAWIKI' ) ) {
	echo( "This file is an extension to the MediaWiki software and cannot be used standalone.\n" );
	die( 1 );
}

$wgExtensionCredits['other'][] = array(
    'path'           => __FILE__,
    'name'           => 'Aion Classic',
    'author'         => 'Kelekelio',
    'url'            => 'https://aionpowerbook.com',
    'descriptionmsg' => 'Aion Classic'
);




// register hook handlers
//$wgHooks['BeforePageDisplay'][] = 'wfAionClassicBeforePageDisplay';
//$wgHooks['GetCacheVaryCookies'][] = 'wfAionClassicGetCacheVaryCookies';
//$wgHooks['ParserFirstCallInit'][] = 'wfAionClassicSetHook';

$wgExtensionFunctions[] = 'wfAionClassicExtension';


function wfAionClassicExtension() {
	global $wgRequest;
	

	$wgRequest->response()->setcookie( 'AionClassic', '0' );

	//$requestedLanguage = $wgRequest->getCookie( 'LanguageSelectorLanguage' );
}
