<?php


header('Content-type: text/html; charset=utf-8');
$wgExtensionCredits['variable'][] = array(
	'path'           => __FILE__,
	'name'           => 'Aion quests',
	'author'         => 'Kelekelio',
	'url'            => 'https://aionpowerbook.com',
	'descriptionmsg' => 'Aion quest links',
	'version'		 => '2.0',
	'license-name' 	 => 'LICENSE',
);
 
$wgHooks['ParserFirstCallInit'][] = 'AionQuestFunction';
$wgExtensionMessagesFiles['AionQuest'] = __DIR__ . '/aion_quest.i18n.php';
function AionQuestFunction( &$parser ) {
   $parser->setFunctionHook( 'quest', 'AionQuestParserFunction' );
   return true;
}








function AionQuestParserFunction( &$parser, $arg1 ) {
    $language = language();

    include 'include/DBselect.php';
    $row = $aionDB->query('SELECT id, category1, search_' . $language . ', search_ko FROM client_quest WHERE id = ?', $arg1)->fetchArray();

    $localization=!empty($row["search_" . $language]) ? $row["search_" . $language] : $row['search_ko'];

    $link = '<div class=" link_' . $row["category1"] . '"><a href="https://aionpowerbook.com/powerbook/Quest/' . $row["id"] . '">' . $localization . '</a></div>';

    return array( $link, 'noparse' => true, 'isHTML' => true );
}