<?php


header('Content-type: text/html; charset=utf-8');
$wgExtensionCredits['variable'][] = array(
	'path'           => __FILE__,
	'name'           => 'Aion Transform Link',
	'author'         => 'Kelekelio',
	'url'            => 'https://aionpowerbook.com',
	'descriptionmsg' => 'Aion transform link',
	'version'		 => '1.0',
	'license-name' 	 => 'LICENSE',
);
 
$wgHooks['ParserFirstCallInit'][] = 'AionTrnasformLinkFunction';
$wgExtensionMessagesFiles['AionTransformLinkLoca'] = __DIR__ . '/aion_transform.i18n.php';
function AionTrnasformLinkFunction( &$parser ) {
   $parser->setFunctionHook( 'transfrom', 'AionLocatransformParserFunction' );
   return true;
}






function AionLocatransformParserFunction( &$parser, $arg1= '' ) {
$language = language();

if ($arg1 > 980000 && $arg1 < 992000 ){
	$tablecolumn = 'id';
}else {
	$tablecolumn = 'name';
}


    include 'include/DBselect.php';
    $result = $aionDB->query("
SELECT  id, grade, description
FROM client_transformbook
WHERE $tablecolumn = '$arg1' ", $name)->fetchArray();





        $id=$result["id"];
		$grade=$result["grade"];
		$descloca = translate($result["description"], $language);
		
		
if ($grade == '1') {
	$color = 'acacac'; //<font color="EAEAEA">일반</font>
}elseif ($grade == '2') {
	$color = '6CDF5E';
}elseif ($grade == '3') {
	$color = 'E1AD40';
}elseif ($grade == '4') {
	$color = 'EB46FF';
}elseif ($grade == '5') {
	$color = 'FF4B4B';
}


		
		$link = '<a style="color:#'.$color.' !important" class="bold" href="https://aionpowerbook.com/powerbook/Transformation/' . $id . '">' . $descloca . '</a>';





return array( $link, 'noparse' => true, 'isHTML' => true );
}