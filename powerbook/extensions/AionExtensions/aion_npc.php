<?php
header('Content-type: text/html; charset=utf-8');
$wgExtensionCredits['variable'][] = array(
	'path'           => __FILE__,
	'name'           => 'Aion NPCs',
	'author'         => 'Kelekelio',
	'url'            => 'https://aionpowerbook.com',
	'descriptionmsg' => 'Aion npc links',
	'version'		 => '1.0',
	'license-name' 	 => 'LICENSE',
);
 
$wgHooks['ParserFirstCallInit'][] = 'AionNPCFunction';
$wgExtensionMessagesFiles['AionNPC'] = __DIR__ . '/aion_npc.i18n.php';
function AionNPCFunction( &$parser ) {
   $parser->setFunctionHook( 'npc', 'AionNPCParserFunction' );
   return true;
}
function AionNPCParserFunction( &$parser, $arg1 ) {

    $language = language();

    include 'include/DBselect.php';
    $row = $aionDB->query('SELECT id, search_' . $language . ', search_ko FROM client_npcs_monster WHERE id = ? ', $arg1)->fetchArray();

    $localization=!empty($row["search_" . $language]) ? $row["search_" . $language] : $row['search_ko'];
    $link = '<a href="https://aionpowerbook.com/powerbook/NPC/' . $row["id"] . '">' . $localization . '</a>';


    return array( $link, 'noparse' => true, 'isHTML' => true );
}