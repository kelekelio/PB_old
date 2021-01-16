<?php


$wgExtensionCredits['variable'][] = array(
	'path'           => __FILE__,
	'name'           => 'Aion Item List',
	'author'         => 'Kelekelio',
	'url'            => 'https://aionpowerbook.com',
	'descriptionmsg' => 'Aion item with description, only for tables',
	'version'		 => '1.0',
	'license-name' 	 => 'LICENSE',
);
 
$wgHooks['ParserFirstCallInit'][] = 'AionItemDescFunction';
$wgExtensionMessagesFiles['AionItemDesc'] = __DIR__ . '/aionitemdesc.i18n.php';
function AionItemDescFunction( &$parser ) {
   $parser->setFunctionHook( 'itemdesc', 'AionItemDescParserFunction' );
   return true;
}
function AionItemDescParserFunction( &$parser, $arg1, $arg2 = '' ) {
 
 
$language = language();
 


    if (isClassic() == "1") {
        $cl = "_c";
    }



    include 'include/DBselect.php';
    $sql = $aionDB->query("
SELECT  id, desc_long, level, icon_name, quality, search_$language, search_ko
FROM client_items
WHERE id = $arg1")->fetchAll();

    foreach ($sql as $itemrow) {
    $itemid=$itemrow["id"];
	$itemicon=strtolower($itemrow["icon_name"]);
	$itemlevel=$itemrow["level"];
	$quality=strtolower($itemrow["quality"]);
    $localization=!empty($itemrow['search_' . $language]) ? $itemrow['search_' . $language] : $itemrow['search_ko'];
	$localization_desc= translate($itemrow["desc_long"] , $language);

   
		if ($arg2 != NULL) {
			$quantity = '<td class="al">' . $arg2 . '</td>';
		}
 
        $testvar = '<tr class="l1"><td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon'.$cl.'/' . $itemicon . '.png" width="37" height="37" alt=""><br></td>
		<td class="ar">' . $itemlevel . '</td>
		<td class="al"><a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemid . '"  tooltipID="' . $itemid . '" tooltiplang="' . $language . '" classic="'.isClassic().'">' . $localization . '</a></td>
		<td class="al">' . $localization_desc . '</td>'.$quantity.'</tr>';    
}
        return array( $testvar, 'noparse' => true, 'isHTML' => true );
}