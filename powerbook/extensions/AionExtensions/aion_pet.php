<?php

// extension credits, required by MW //
$wgExtensionCredits['variable'][] = array(
    'path'           => __FILE__,
    'name'           => 'Aion Pet Details',
    'author'         => 'Kelekelio',
    'url'            => 'https://aionpowerbook.com',
    'descriptionmsg' => 'Aion Pet Details',
    'version'		 => '0.1',
    'license-name' 	 => 'LICENSE',
);
// credits //


$wgHooks['ParserFirstCallInit'][] = 'AionPetDetails';
$wgExtensionMessagesFiles['AionPetDetails'] = __DIR__ . '/aion_pet.i18n.php';
function AionPetDetails( &$parser ) {
    $parser->setFunctionHook( 'pet', 'AionParserPetDetails' );
    return true;
}


function petfood($id)
{
    include 'include/DBselect.php';
    $result = $db->query("SELECT * FROM item_flavor_desc WHERE id = ? ", $id)->fetchArray();



	$translatedfood = translate($result["description"], language());
	
	if ($translatedfood != NULL ){
		return '<p>' . $translatedfood . '</p>';
	}else {
		return '';
	}
	
}
 

function petfunction($type, $name, $food)
{
    include 'include/DBselect.php';
    $result = $db->query("
SELECT *
FROM toypets_$type
WHERE name = '$name' ", $id)->fetchArray();




	if ($food == 0) {
	$translatedfunction=translate($result["description"], language());	
    return $translatedfunction;
	}elseif ($food == 1) {
		$translatedfunction = petfood($result["favorite_flavor_id"]);	
		
    return $translatedfunction;
	}elseif ($food == 2) {
		$extrafoodid1 = petfood($result["love_flavor_id_1"]);	
		
    return $extrafoodid1 . $extrafoodid2 . $extrafoodid3;
	}elseif ($food == 3) {
		$extrafoodbuff = extraitem($result["food_item"], language());	
		
    return $extrafoodbuff . ' (x' . $result["food_consume_count"] . ')';
	}elseif ($food == 4) {
		
	include 'include/maptemplate.php';
	$attributeHtml = '';

        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^bonus_attr[0-9]+$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }

            list($attributeName, $attributeValue) = explode(' ', strtolower(preg_replace('/\s+/', ' ', $fieldValue)));

            if (!isset($statMap[$attributeName])) {
                // not in $statMap, skip it
                continue;
            }

            $attributeHtml .= $statMap[$attributeName]($attributeValue);
        }

        if (!empty($attributeHtml)) {
            $additionalStats .= $attributeHtml;
        }
			return $additionalStats;
	}
	
}

 

function AionParserPetDetails( &$parser, $arg1 ) {
global $wgOut;
$dbid = $_GET['dbid'];
$language = language();
global $wgLang;
$code = $wgLang->getCode();


if (isClassic() == "1") {
    $cl = "_cl";
}


$serv = $_SERVER['DOCUMENT_ROOT'];
$cachefile = $serv . '/powerbook/extensions/AionExtensions/cache/pet/'.$language.'/'.$dbid. $cl .'.html';
$exists = file_exists($cachefile);

if( !$exists || ( $exists && time() > strtotime('+31 days', filemtime($cachefile)) )) {
    


    include 'include/DBselect.php';
    $sql = $db->query("SELECT  * FROM toypets WHERE id = '$dbid' ")->fetchAll();

    foreach ($sql as $petrow) {
        $petid=$petrow["id"];
		$petdesc=$petrow["description"];
		$peticon=strtolower($petrow["icon_name"]);
		$petdesclong=$petrow["desc_long"];
		$enemy_alarm=$petrow["enemy_alarm"];
		$func_type1=$petrow["func_type1"];
		$func_type2=$petrow["func_type2"];
		$func_type_name1=$petrow["func_type_name1"];
		$func_type_name2=$petrow["func_type_name2"];
		
}

$peticonfinal = strtr($peticon, array(
		".dds" => '',
));

if ($enemy_alarm == 1) {
	$specialty = translate('STR_TOYPET_ABILITY_ENEMY_ALARM_DESC', language());
}else {
	$specialty = '---';
}


if ($func_type1 != NULL) {
	$function1 = petfunction($func_type1, $func_type_name1, '0');
}else {
	$function1 = '---';
}
if ($func_type2 != NULL) {
	$function2 = petfunction($func_type2, $func_type_name2, '0');
}else {
	$function2 = '---';
}


if ($func_type1 == 'feeding' or $func_type2 == 'feeding') {
	$foodname = petfunction('feeding', $func_type_name1, '1');
	$foodname2 = petfunction('feeding', $func_type_name2, '1');
	
	$extrafoodname = petfunction('feeding', $func_type_name1, '2');
	$extrafoodname2 = petfunction('feeding', $func_type_name2, '2');
}else {
	$displaynone = 'style="display:none"';
}

if ($foodname == NULL & $foodname2 == NULL ){
	$foodname = '---';
}
if ($extrafoodname == NULL & $extrafoodname2 == NULL ){
	$extrafoodname = '---';
}



if ($func_type1 == 'buff' or $func_type2 == 'buff') {
	$cheername = petfunction('buff', $func_type_name1, '3');
	$cheerstats = petfunction('buff', $func_type_name1, '4');
	
	
	
}else {
	$displaynonebuff = 'style="display:none"';
}




if ($dbid != NULL){
	$localization=translate($petdesc, language());
}else {
	$localization = 'NO ID PROVIDED';
}

	$petFinAL .= '<div class="hbody"><div class="objects object_pet"><div class="head pet_basic"><dl class="basic">';
	$petFinAL .= '<dd class="thumb"><img src="https://aionpowerbook.com/pet/icon/' . $peticonfinal . '.png" alt=""></dd>';
	$petFinAL .= '<dt class="name"><a class="col_ " href="https://aionpowerbook.com/powerbook/Pet/' . $petid . '">' . translate($petdesc, language()) . '</a> </dt>';
	$petFinAL .= '</dl></div><div class="wrap pet_desc" ><p class="desc">' . translate($petdesclong, language()) . '</p></div>';
	$petFinAL .= '<div class="wrap pet_property"><dl class="bonus_attr">';
	$petFinAL .= '<dt>' . translate('STR_TOYPET_INFO_DIALOG__INFO_FUNC1', language()) . '</dt><dd>' . $function1 . '</dd>';
	$petFinAL .= '<dt>' . translate('STR_TOYPET_INFO_DIALOG__INFO_FUNC2', language()) . '</dt><dd>' . $function2 . '</dd>';
	$petFinAL .= '<dt>' . translate('STR_TOYPET_INFO_DIALOG__INFO_FUNC_SP', language()) . '</dt><dd>' . $specialty . '</dd></dl></div>';
	// food -> production //
	$petFinAL .= '<div class="wrap pet_property_bonus" ' . $displaynone . ' >';
	$petFinAL .= '<dl class="bonus_attr"  >';
	$petFinAL .= '<dt>' . translate('STR_TOYPET_INFO_DIALOG__FEED_FLAVOR', language()) . '</dt><dd>' . $foodname . $foodname2 . '</dd>';
	$petFinAL .= '<dt>' . translate('STR_TOOLTIP_TOYPET_LOVE_FLAVOR', language()) . '</dt><dd>' . $extrafoodname . $extrafoodname2 . '</dd></dl></div>';
	// food -> buff //
	$petFinAL .= '<div class="wrap pet_property_bonus" ' . $displaynonebuff . ' >';
	$petFinAL .= '<dl class="cheer_bonus_attr"  >';
	$petFinAL .= '<dt>' . translate('STR_FUNC_PET_BUFF_DESC', language()) . '</dt><dd>' . $cheername . $cheername2 . '</dd>';
	$petFinAL .= $cheerstats . '</dl></div>';
	
	$petFinAL .= '<div class="wrap item_id"><table><tr><td>BBCode:</td><td><input style="width:250px" type="text" value="
[url=\'https://aionpowerbook.com/powerbook/Pet/' . $petid . '/' . $code . '\'][img]https://aionpowerbook.com/pet/icon/' . $peticonfinal . '.png[/img] ' . translate($petdesc, language()) . '[/url]"></td></tr></table></dl></div>';	
	
	$petFinAL .= '</div><div class="cl"></div><p></p><div class="cl"></div></div>';
	
	

$data = $petFinAL;

$serv = $_SERVER['DOCUMENT_ROOT'];
$cachefile = $serv . '/powerbook/extensions/AionExtensions/cache/pet/'.$language.'/'.$dbid. $cl . '.html';
file_put_contents($cachefile, $data);

$wgOut->AddHTML( $petFinAL );
$DisplayTitle = '{{DISPLAYTITLE:' . $localization . '}}';
return array( $DisplayTitle, 'noparse' => false );
	
	
	
	
	
    
}
else {
    include 'include/DBselect.php';
    $petrow = $db->query("SELECT  * FROM toypets WHERE id = ? ", $dbid)->fetchArray();

    $petdesc=$petrow["description"];
    if ($dbid != NULL){
	$localization=translate($petdesc, language());
}else {
	$localization = 'NO ID PROVIDED';
}
	
    // --> Don't forget to unserialize() or json_decode() if the data isn't a string!
	$servv = $_SERVER['DOCUMENT_ROOT'];
	$cachefilev = $servv . '/powerbook/extensions/AionExtensions/cache/pet/'.$language.'/'.$dbid. $cl . '.html';
	$wgOut->AddHTML(  "<!-- Cached copy, generated ".date('H:i', filemtime($cachefile))." -->\n" );
    $data = file_get_contents($cachefilev);
	$wgOut->AddHTML( $data );
	
	$DisplayTitle = '{{DISPLAYTITLE:' . $localization . '}}';
	return array( $DisplayTitle, 'noparse' => false );
}






}