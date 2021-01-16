<?

$wgExtensionCredits['variable'][] = array(
	'path'           => __FILE__,
	'name'           => 'Aion News',
	'author'         => 'Kelekelio',
	'url'            => 'http://aionpowerbook.com',
	'descriptionmsg' => 'Aion News',
	'version'		 => '1.0',
	'license-name' 	 => 'LICENSE',
);


$wgHooks['ParserFirstCallInit'][] = 'AionNewsExtensionSetupParserFunction';


$wgExtensionMessagesFiles['AionPBNews'] = __DIR__ . '/aion_news.i18n.php';


function AionNewsExtensionSetupParserFunction( &$parser ) {
   $parser->setFunctionHook( 'aionnews', 'AionNewsRenderParserFunction' );
   return true;
}

function AionNewsRenderParserFunction( $parser, $param1='', $param2='', $param3='', $param4='', $param5='', $param6='', $param7='', $param8='', $param9='', $param10='', $param11='', $param12='', $param13='', $param14='', $param15='', $param16='' ) {
	
	$aionlates = '
	<div class="newslink"><a href="/powerbook/Special:NewestPages/-"><img src="http://aionpowerbook.com/powerbook/Img/transl/newest.png"></a></div>
	
		<div class="flexslider2">
			<ul class="slides">
				<li><img src="http://aionpowerbook.com/5.5/5.5sneak.png" /><p class="flex-caption"><a href="Aion">Test</a></p></a></li>
				<li><a href="Aion"><img src="http://aionpowerbook.com/5.5/5.5sneak.png" /></a><p class="flex-caption">Test</p></a></li>
			</ul>
		</div>
	
	<div class="cl"></div>';
	
	return array( $aionlates, 'noparse' => true, 'isHTML' => true );
}

