<?php

function translate($name, $language)
{
    include 'DBselect.php';


    $sql = $db->query('SELECT 
		    body    ko,
			LAN_EN  en,
			LAN_DE  de,
			LAN_FR  fr,
			LAN_ES  es,
			LAN_IT  it,
			LAN_PL  pl,
			LAN_US  us,
			LAN_KO krl
           FROM  translation_small
           WHERE name = ? ', $name)->fetchArray();

    $localization = !empty($sql[$language]) ? $sql[$language] : $sql['ko'];
    return $localization;
}