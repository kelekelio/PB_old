<?php

function client_reinvent_material ($name) {

    $language = language();

    include 'DBselect.php';
    $result = $db->query("
        SELECT id, icon_name, quality, search_$language, search_ko
        FROM client_items
        WHERE name = '$name'
       ", $name)->fetchArray();
		

    $point = $result['point'];
    
    if ($point != NULL) {
        return $point;
    }else {
        return '';
    }
}