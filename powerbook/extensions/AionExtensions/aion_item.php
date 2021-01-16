<?php


header('Content-type: text/html; charset=utf-8');
$wgExtensionCredits['variable'][] = array(
	'path'           => __FILE__,
	'name'           => 'Aion Items',
	'author'         => 'Kelekelio',
	'url'            => 'https://aionpowerbook.com',
	'descriptionmsg' => 'Aion item link',
	'version'		 => '2.0',
	'license-name' 	 => 'LICENSE',
);
 
$wgHooks['ParserFirstCallInit'][] = 'AionLocaFunction';
$wgExtensionMessagesFiles['AionLoca'] = __DIR__ . '/aion_item.i18n.php';
function AionLocaFunction( &$parser ) {
   $parser->setFunctionHook( 'item', 'AionLocaParserFunction' );
   return true;
}




include 'include/languageFunction.php';
include 'include/translate.php';
include 'include/extraitem.php';
include 'include/skinskill.php';









function AionLocaParserFunction( &$parser, $arg1 ) {

    include 'include/DBselect.php';
    $row = $aionDB->query("SELECT id, quality, search_" . language() . ", search_ko FROM client_items WHERE id = ? ", $arg1)->fetchArray();

    $id = $row["id"];
    $quality = strtolower($row["quality"]);
    $localization = !empty($row["search_" . language()]) ? $row["search_" . language()] : $row['search_ko'];

    $link = '<a class="tooltipzy col_' . $quality . '" href="https://aionpowerbook.com/powerbook/Item/' . $id . '" tooltipID="' . $id . '" tooltiplang="' . language() . '" classic="' . isClassic() . '">' . $localization . '</a>';

    if ($id == null) {
        $link = "Invalid ID.";
    }

    return array( $link, 'noparse' => true, 'isHTML' => true );
}