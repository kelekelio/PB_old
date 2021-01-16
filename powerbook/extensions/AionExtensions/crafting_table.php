<?
header('Content-type: text/html; charset=utf-8');
$wgExtensionCredits['variable'][] = array(
    'path'           => __FILE__,
    'name'           => 'Aion Craft Tables',
    'author'         => 'Kelekelio',
    'url'            => 'https://aionpowerbook.com',
    'descriptionmsg' => 'Tables with Aion Items by type',
    'version'		 => '1.0',
    'license-name' 	 => 'LICENSE',
);

$wgHooks['ParserFirstCallInit'][] = 'AionCraftTablesFunction';
$wgExtensionMessagesFiles['AionCraftTables'] = __DIR__ . '/crafting_table.i18n.php';
function AionCraftTablesFunction( &$parser ) {
    $parser->setFunctionHook( 'crafttable', 'AionCraftTablesParserFunction' );
    return true;
}


include 'include/craftfinalicon.php';


function AionCraftTablesParserFunction( &$parser, $arg1=''  ) {
    global $wgOut;


    include 'include/DBselect.php';
    $sql = $aionDB->query("SELECT  * FROM client_combine_recipe where combineskill = '$arg1' ")->fetchAll();

    foreach ($sql as $craftrow) {
        $craftfinalname = $craftrow["product"];
        $craftid = $craftrow["id"];
        $craftdesc = translate($craftrow["description"], language());
        $required_skillpoint = $craftrow["required_skillpoint"];
        $qualification_race = $craftrow["qualification_race"];






        if (strtolower($craftrow["qualification_race"]) == 'pc_light'){
            $race = ' <span class="pc_light" title="' . translate('STR_TOOLTIP_PC_LIGHT', language()) . '"></span>';
        }
        if (strtolower($craftrow["qualification_race"]) == 'pc_dark'){
            $race = ' <span class="pc_dark" title="' . translate('STR_TOOLTIP_PC_DARK', language()) . '"></span>';
        }
        if (strtolower($craftrow["qualification_race"]) == 'all'){
            $race = ' <span class="pc_light"></span> <span class="pc_dark"></span>';
        }



        $outhtml .= '<tr class="l1"><td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . crafttableicon($craftrow["product"]) . ' " href="https://aionpowerbook.com/powerbook/Craft/' . $craftid . '">' . $craftdesc . '</a></td><td class="ar">' . $required_skillpoint . '</td><td class="ar">' . $race . '</td></tr>';

    }



    $resulttablestart = '<div class="hbody" ><table class="lists list_basicitem width_100p searchdataTable"><thead><tr><th class="fixed nowrap no-sorting"></th><th class="nowrap">Name</th><th class="nowrap">Skill Points</th><th class="nowrap">Race</th></tr></thead><tbody>';
    $resulttableend = '</tbody></table><div class="cl"></div></div>';
    $resultend = "$resulttablestart $outhtml $resulttableend";





    $wgOut->AddHTML( $resultend );
}