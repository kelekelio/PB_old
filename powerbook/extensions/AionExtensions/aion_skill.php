<?php

$wgExtensionCredits['variable'][] = array(
	'path'           => __FILE__,
	'name'           => 'Aion skill',
	'author'         => 'Kelekelio',
	'url'            => 'https://aionpowerbook.com',
	'descriptionmsg' => 'Aion skill links',
	'version'		 => '1.0',
	'license-name' 	 => 'LICENSE',
);
 
$wgHooks['ParserFirstCallInit'][] = 'AionSkillFunction';
$wgExtensionMessagesFiles['AionSkill'] = __DIR__ . '/aion_skill.i18n.php';
function AionSkillFunction( &$parser ) {
   $parser->setFunctionHook( 'skill', 'AionSkillParserFunction' );
   return true;
}
function AionSkillParserFunction( &$parser, $arg1 ) {

    include 'include/DBselect.php';
    $row = $aionDB->query("SELECT id, skillicon_name, search_" . language() . ", search_ko FROM client_skills WHERE id = ? ", $arg1)->fetchArray();

    $id = $row["id"];

    $localization = !empty($row["search_" . language()]) ? $row["search_" . language()] : $row['search_ko'];

    $skillicon_name = strtolower($row["skillicon_name"]);

    $skillicon = strtr($skillicon_name, array(
        ".dds" => '',
    ));

    $link = '<img src="https://aionpowerbook.com/skillicon/' . $skillicon . '.png" alt="" class="thumb3">  <a href="https://aionpowerbook.com/powerbook/Skill/' . $id . '" class="skilltipzy" skillid="' . $id . '" skilltiplang="' . language() . '" classic="' . isClassic() . '" >' . $localization . '</a>';



    if ($id == null) {
        $link = "Invalid ID.";
    }

    return array( $link, 'noparse' => true, 'isHTML' => true );
}
 
 
// enf of magic word, beginning of data retriving
 
