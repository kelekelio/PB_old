<?



function extraitem($name, $language)
{

    include 'DBselect.php';
    $result = $db->query("
        SELECT id, icon_name, quality, search_$language, search_ko
        FROM client_items
        WHERE name = '$name'
       ", $name)->fetchArray();


	$id = $result["id"];
	$localizationExtra = !empty($result['search_'.$language]) ? $result['search_'.$language] : $result['search_ko'];
	$quality = strtolower($result["quality"]);
    $extraicon_name=strtolower($result["icon_name"]);
    $fin_icon_name = strtr($extraicon_name, array(
        ".dds" => '',
        ));

    if (isClassic() == "1") {
        $cl = "_c";
    }
    

    return '<img src="https://aionpowerbook.com/item/icon' . $cl . '/' . $fin_icon_name . '.png" alt="" class="thumb3">  <a class="tooltipzy col_' . $quality . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $id . '" tooltipID="' . $id . '" tooltiplang="' . $language . '" classic="' . isClassic() . '">' . $localizationExtra . '</a>';
	
}