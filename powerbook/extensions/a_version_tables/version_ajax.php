<?php

function isClassic() {
    return $_GET['classic'];
}


include '../AionExtensions/include/overseas.php';
include $_SERVER['DOCUMENT_ROOT'] . '/aionpb/DB/db_config.php';
include '../AionExtensions/include/include_skill.php';






function start ($aionDB) {

    $requestData= $_REQUEST;
    $version = $_GET['version'];
    $lang = $_GET['lang'];
    $type = $_GET['type'];
    $classic = $_GET['classic'];

	/* Database connection */
	$servername = "mysqlhost";
	$username = "login2";
	$password = "passw";
	if ($classic == '1') {
		$dbname = "kele01_classic";
		$classDir = "_c";
	} else {
		$dbname = "login";
	}


	$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
	mysqli_set_charset($conn, "utf8");
	/* Database connection end */


	if ($lang == "fr") {
		$language = 'search_fr';
		$toollang = "fr";
	} elseif ($lang == "de") {
		$language = 'search_de';
		$toollang = "de";
	} elseif ($lang == "it") {
		$language = 'search_it';
		$toollang = "it";
	} elseif ($lang == "pl") {
		$language = 'search_pl';
		$toollang = "pl";
	} elseif ($lang == "ko") {
		$language = 'search_ko';
		$toollang = "ko";
	} elseif ($lang == "tr") {
		$language = 'search_tr';
		$toollang = "en";
	} elseif ($lang == "es") {
		$language = 'search_es';
		$toollang = "es";
	} elseif ($lang == "en") {
		$language = 'search_us';
		$toollang = "us";
	} else {
		$language = 'search_en';
		$toollang = "en";
	}


	if ($type == '1') {
		$selectcolumns = 'id, icon_name, quality, level, search_ko';
		$table = 'client_items';
		$columns = array(
			0 => 'id',
			1 => 'icon_name',
			2 => $language,
			3 => 'level'
		);

	} elseif ($type == '2') {
		$selectcolumns = 'id, disk_type, hpgauge_level, ui_type, stare_distance, magical_skill_boost_resist, hp, level, search_ko';
		$table = 'client_npcs_monster';
		$columns = array(
			0 => 'id',
			1 => 'disk_type',
			2 => $language,
			3 => 'level',
			4 => 'hp',
			5 => 'magical_skill_boost_resist'
		);

	} elseif ($type == '3') {
		$selectcolumns = 'id, category1, client_level, search_ko';
		$table = 'client_quest';
		$columns = array(
			0 => 'id',
			1 => 'category1',
			2 => $language,
			3 => 'client_level'
		);

	} elseif ($type == '4') {
		$selectcolumns = 'id, skillicon_name, search_ko';
		$table = 'client_skills';
		$columns = array(
			0 => 'id',
			1 => 'skillicon_name',
			2 => $language
		);

	}


// getting total number records without any search
	$sql = "SELECT id ";
	$sql .= " FROM $table";
	$sql .= " WHERE client_version = ?  ";
    $records = $aionDB->query($sql, $version)->fetchAll();

	$totalData = mysqli_num_rows($records);

	$searchBox = strtr($requestData['search']['value'], array(
		"'" => '&apos;',
	));

	$sql = "SELECT $selectcolumns, $language ";
	$sql .= " FROM $table WHERE client_version = '$version'  ";
	if (!empty($requestData['search']['value'])) {
		$sql .= " AND ( $language LIKE '%" . $searchBox . "%' ";
		$sql .= " OR search_ko LIKE '" . $searchBox . "%' ";
		$sql .= " OR id LIKE '%" . $searchBox . "%' )";
	}
	$query = mysqli_query($conn, $sql) or die("employee-grid-data.php: get employees");
	$totalFiltered = mysqli_num_rows($query);
	$sql .= " ORDER BY " . $columns[$requestData['order'][0]['column']] . "   " . $requestData['order'][0]['dir'] . "  LIMIT " . $requestData['start'] . " ," . $requestData['length'] . "   ";
	$query = mysqli_query($conn, $sql) or die("employee-grid-data.php: get employees");

	$data = array();
	while ($row = mysqli_fetch_array($query)) {  // preparing an array
		$nestedData = array();

		$localization = !empty($row[$language]) ? $row[$language] : $row['search_ko'];


		// Quest, type 3
		if ($type == '3') {
			$nestedData[] = $row["id"];
			$nestedData[] = '<img class="thumb" src="https://aionpowerbook.com/images/q2.png" width="37" height="37" alt="">';
			$nestedData[] = '<div class="link_' . $row["category1"] . '"><a href="https://aionpowerbook.com/powerbook/Quest/' . $row["id"] . '">' . $localization . '</a></div>';
			$nestedData[] = $row["client_level"];
		} elseif ($type == '4') {
			$nestedData[] = $row["id"];
			$nestedData[] = skillIconBuilder($row["skillicon_name"], $classic);
			$nestedData[] = '<a class="all skilltipzy" href="https://aionpowerbook.com/powerbook/Skill/' . $row["id"] . '" skillid="' . $row["id"] . '" skilltiplang="' . $toollang . '" classic="' . $classic . '">' . $localization . '</a>';
		} // NPC, type 2
		elseif ($type == '2') {

			$disk_type = strtolower($row["disk_type"]);
			$hpgauge_level = $row["hpgauge_level"];
			$ui_type = $row["ui_type"];

			if ($row["stare_distance"] > 0) {
				$agressive = '_a';
			}


			if ($disk_type == 'guard') {
				$itemicon = 'icon_emblem_guard';
			} elseif ($disk_type == 'ancientclan') {
				$itemicon = 'icon_emblem_ancientclan';
			} elseif ($disk_type == 'inhabitant') {
				$itemicon = 'icon_emblem_inhabitant';
			} elseif ($disk_type == 'merchant') {
				$itemicon = 'icon_emblem_merchant';
			} elseif ($disk_type == 'polymorph_human') {
				$itemicon = '';
			} elseif ($disk_type == 'polymorph_table_scale') {
				$itemicon = '';
			} elseif ($disk_type == NULL) {
				$itemicon = 'icon_emblem_etc';
			} elseif ($disk_type == 'god') {
				$itemicon = 'icon_emblem_etc';
			} elseif ($disk_type == 'function') {
				$itemicon = 'icon_emblem_function';
			} elseif ($disk_type == 'etc') {
				$itemicon = 'icon_emblem_etc';
			} elseif ($disk_type == 'e_water') {
				$itemicon = 'icon_emblem_e_water';
			} elseif ($disk_type == 'e_fire') {
				$itemicon = 'icon_emblem_e_fire';
			} elseif ($disk_type == 'e_earth') {
				$itemicon = 'icon_emblem_e_earth';
			} elseif ($disk_type == 'e_air') {
				$itemicon = 'icon_emblem_e_air';
			} elseif ($disk_type == 'drakan') {
				$itemicon = 'icon_emblem_etc';
			} elseif ($disk_type == 'd1' or $disk_type == 'd2' or $disk_type == 'd3' or $disk_type == 'd4' or $disk_type == 'd5' or $disk_type == 'd6' or $disk_type == 'd7') {
				if ($hpgauge_level == 1 or $hpgauge_level == 10 or $hpgauge_level == 20 or $hpgauge_level == 26) {
					$itemicon = 'icon_emblem_monster_n_1' . $agressive;
				} elseif ($hpgauge_level == 2 or $hpgauge_level == 11 or $hpgauge_level == 21 or $hpgauge_level == 27) {
					$itemicon = 'icon_emblem_monster_n_2' . $agressive;
				} elseif ($hpgauge_level == 3 or $hpgauge_level == 12 or $hpgauge_level == 22) {
					$itemicon = 'icon_emblem_monster_n_3' . $agressive;
				} elseif ($hpgauge_level == 4 or $hpgauge_level == 13 or $hpgauge_level == 23) {
					$itemicon = 'icon_emblem_monster_r_1' . $agressive;
				} elseif ($hpgauge_level == 5 or $hpgauge_level == 14 or $hpgauge_level == 24) {
					$itemicon = 'icon_emblem_monster_r_2' . $agressive;
				} elseif ($hpgauge_level == 6 or $hpgauge_level == 15 or $hpgauge_level == 25) {
					$itemicon = 'icon_emblem_monster_r_3' . $agressive;
				}
			}


			if ($ui_type == 'trap') {
				$itemicon = 'icon_emblem_etc';
			} elseif ($ui_type == 'NoneButRotate') {
				$itemicon = 'icon_emblem_etc';
			} elseif ($ui_type == 'none') {
				$itemicon = 'icon_emblem_etc';
			}


			$nestedData[] = $row["id"];
			$nestedData[] = '<img class="thumb" src="https://aionpowerbook.com/npc/icon/' . $itemicon . '.png" width="37" height="37" alt="">';
			$nestedData[] = '<a href="https://aionpowerbook.com/powerbook/NPC/' . $row["id"] . '">' . $localization . '</a>';
			$nestedData[] = $row["level"];
			$nestedData[] = number_format($row["hp"]);
			$nestedData[] = number_format($row["magical_skill_boost_resist"]);

		} else {
			$itemicondds = strtolower($row["icon_name"]);
			$itemiconddsfixed = strtr($itemicondds, array(
				".dds" => '',
			));

			$nestedData[] = $row["id"];
			$nestedData[] = '<img class="thumb" src="https://aionpowerbook.com/item/icon' . $classDir . '/' . $itemiconddsfixed . '.png" width="37" height="37" alt="">';
			$nestedData[] = '<a class="tooltipzy col_' . strtolower($row["quality"]) . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $row["id"] . '" tooltipID="' . $row["id"] . '" tooltiplang="' . $toollang . '" classic="' . $classic . '" >' . $localization . '</a>';
			$nestedData[] = $row["level"];
		}

		$data[] = $nestedData;
	}


	$json_data = array(
		"draw" => intval($requestData['draw']),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw.
		"recordsTotal" => intval($totalData),  // total number of records
		"recordsFiltered" => intval($totalFiltered), // total number of records after searching, if there is no searching then totalFiltered = totalData
		"data" => $data   // total data array
	);

	echo json_encode($json_data);  // send data as json format

}

start($aionDB);
