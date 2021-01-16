<?php

$mysqlserver="mysqlhost";
$mysqlusername="login2";
$mysqlpassword="passw";
$link3=mysql_connect($mysqlserver, $mysqlusername, $mysqlpassword);

$dbname = 'login';
mysql_select_db($dbname, $link3);    
mysql_set_charset('utf8', $link3);

/** \file
* \
*/

/**
 * GoogleSiteSearch Extension for MediaWiki
 *
 * Copyright (C) Ryan Finnie
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 */

# Not a valid entry point, skip unless MEDIAWIKI is defined
if ( !defined( 'MEDIAWIKI' ) ) {
	echo <<<EOT
To install my extension, put the following line in LocalSettings.php:
require_once( "$IP/extensions/ItemSearch/ItemSearch.php" );
EOT;
	exit( 1 );
}

$wgExtensionCredits['specialpage'][] = array(
	'path' => __FILE__,
	'name' => 'Aion Item Search',
	'author' => 'Kelekelio',
	'url' => 'https://aionpowerbook.com',
	'descriptionmsg' => 'Aion Items Search function',
	'version' => '1.0',
	'license-name' 	 => 'LICENSE',
);


$dir = dirname( __FILE__ ) . '/';

# Define internationalizations
$wgMessagesDirs['ItemSearch'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles['ItemSearch'] = $dir . 'ItemSearch.i18n.php';

# Hook into SpecialSearchResultsPrepend (MW 1.21+), adds serach result on top of the original, wiki ones
$wgHooks['SpecialSearchResultsPrepend'][] = 'ItemSearch';



function searchAionDB ($type, $term){
	
$locavariable = '+' . strtr($term, array(
    "'" => '&apos;',
	"<" => '"',
	">" => '"',
	'\\' => '',
	'+' => '',
	' ' => ' +',
));


if ($type == 'item') {
	$aiondbquery="SELECT id, name, level, quality, icon_name, search_ko, search_".language().", client_version,
MATCH(name, search_ko, search_".language().") AGAINST ('$locavariable' IN BOOLEAN MODE) AS Score
FROM client_items
WHERE MATCH(name, search_ko, search_".language().") AGAINST ('$locavariable' IN BOOLEAN MODE)
ORDER BY Score DESC 
LIMIT 0, 250;";
}elseif ($type == 'npc') {
	$aiondbquery="SELECT id, name, disk_type, hpgauge_level, magical_skill_boost_resist, hp, level, search_ko, search_".language().", client_version,
MATCH(name, search_ko, search_".language().") AGAINST ('$locavariable' IN BOOLEAN MODE) AS Score
FROM client_npcs_monster
WHERE MATCH(name, search_ko, search_".language().") AGAINST ('$locavariable' IN BOOLEAN MODE)
ORDER BY Score DESC 
LIMIT 0, 250;";
}elseif ($type == 'quest') {
	$aiondbquery="SELECT id, name, category1, client_level, search_ko, search_".language().", client_version,
MATCH(name, search_ko, search_".language().") AGAINST ('$locavariable' IN BOOLEAN MODE) AS Score
FROM client_quest
WHERE MATCH(name, search_ko, search_".language().") AGAINST ('$locavariable' IN BOOLEAN MODE)
ORDER BY Score DESC 
LIMIT 0, 250;";
}elseif ($type == 'skill') {
	$aiondbquery="SELECT id, name, skillicon_name, search_ko, search_".language().", client_version,
MATCH(name, search_ko, search_".language().") AGAINST ('$locavariable' IN BOOLEAN MODE) AS Score
FROM client_skills
WHERE MATCH(name, search_ko, search_".language().") AGAINST ('$locavariable' IN BOOLEAN MODE)
ORDER BY Score DESC 
LIMIT 0, 250;";
}


$aiondbresult=mysql_query($aiondbquery); //or die ("OOPSIE DOOPSIE~!: ".mysql_error());

if(!$aiondbresult){ // condition to check in case of error only 
$error_msg= "Erron No:".mysql_errno(). "<br>"; 
$error_msg .="Error message = ".mysql_error(); 
mail("cristal01@gmail.com","error message",$error_msg,""); 
}

while ($itemrow=mysql_fetch_array($aiondbresult)) {
    $localization=!empty($itemrow['search_'.language()]) ? $itemrow['search_'.language()] : $itemrow['search_ko'];
	$clientversion=mb_substr($itemrow["client_version"], 0, 10);
	$clientversionfull=$itemrow["client_version"];
	
	$icon_name = strtolower($itemrow['icon_name']);

	$fin_icon_name = strtr($icon_name, array(
		".dds" => '',
		));
	
	
if ($type == 'item') {
	$outhtml .= '
	<tr class="l1">
	<td class="al pr">' . $itemrow['id'] . '</td>
	<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/item/icon/' . $fin_icon_name . '.png" width="37" height="37" alt=""><br></td>
	<td class="al"><a class="col_' . strtolower($itemrow['quality']) . ' bold" href="https://aionpowerbook.com/powerbook/Item/' . $itemrow['id'] . '" tooltipID="' . $itemrow['id'] . '" tooltiplang="'.language().'">' . $localization . '</a></td>
	<td class="ar">' . $itemrow['level'] . '</td>
	<td class="ar" title="' . $clientversionfull . '">' . $clientversion . '</td>
	</tr>';
	
}elseif ($type == 'npc') {
	
		
$isontem = strtolower($itemrow["disk_type"]);

$itemicon = '';
if ($isontem == 'guard') {
	$itemicon = 'icon_emblem_guard';

}elseif ($isontem == 'ancientclan') {
	$itemicon = 'icon_emblem_ancientclan';

}elseif ($isontem == 'inhabitant') {
	$itemicon = 'icon_emblem_inhabitant';

}elseif ($isontem == 'merchant') {
	$itemicon = 'icon_emblem_merchant';

}elseif ($isontem == 'polymorph_human') {
	$itemicon = '';

}elseif ($isontem == 'polymorph_table_scale') {
	$itemicon = '';

}elseif ($isontem == 'god') {
	$itemicon = 'icon_emblem_etc';

}elseif ($isontem == 'function') {
	$itemicon = 'icon_emblem_function';

}elseif ($isontem == 'etc') {
	$itemicon = 'icon_emblem_etc';

}elseif ($isontem == 'e_water') {
	$itemicon = 'icon_emblem_e_water';

}elseif ($isontem == 'e_fire') {
	$itemicon = 'icon_emblem_e_fire';

}elseif ($isontem == 'e_earth') {
	$itemicon = 'icon_emblem_e_earth';

}elseif ($isontem == 'e_air') {
	$itemicon = 'icon_emblem_e_air';

}elseif ($isontem == 'drakan') {
	$itemicon = 'icon_emblem_etc';

}elseif ($isontem == 'd1' or $isontem == 'd2' or $isontem == 'd3' or $isontem == 'd4' or $isontem == 'd5' or $isontem == 'd6' or $isontem == 'd7') {
	if ($itemrow["hpgauge_level"] == 1 or $itemrow["hpgauge_level"] == 10 or $itemrow["hpgauge_level"] == 20  or $itemrow["hpgauge_level"] == 26) {
		$itemicon = 'icon_emblem_monster_n_1_a';
		
	}elseif ($itemrow["hpgauge_level"] == 2 or $itemrow["hpgauge_level"] == 11 or $itemrow["hpgauge_level"] == 21 or $itemrow["hpgauge_level"] == 27) {
		$itemicon = 'icon_emblem_monster_n_2_a';
		
	}elseif ($itemrow["hpgauge_level"] == 3 or $itemrow["hpgauge_level"] == 12 or $itemrow["hpgauge_level"] == 22) {
		$itemicon = 'icon_emblem_monster_n_3_a';
		
	}elseif ($itemrow["hpgauge_level"] == 4 or $itemrow["hpgauge_level"] == 13 or $itemrow["hpgauge_level"] == 23) {
		$itemicon = 'icon_emblem_monster_r_1_a';
		
	}elseif ($itemrow["hpgauge_level"] == 5 or $itemrow["hpgauge_level"] == 14 or $itemrow["hpgauge_level"] == 24) {
		$itemicon = 'icon_emblem_monster_r_2_a';
		
	}elseif ($itemrow["hpgauge_level"] == 6 or $itemrow["hpgauge_level"] == 15 or $itemrow["hpgauge_level"] == 25) {
		$itemicon = 'icon_emblem_monster_r_3_a';
		
	}
}else {
	$itemicon = 'icon_emblem_etc';
}

	$outhtml .= '
	<tr class="l1">
	<td class="al pr">' . $itemrow['id'] . '</td>
	<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/npc/icon/' . $itemicon . '.png" width="37" height="37" alt=""></td>
	<td class="al"><a href="https://aionpowerbook.com/powerbook/NPC/' . $itemrow["id"] . '">' . $localization . '</a></td>
	<td class="ar">' . $itemrow["level"] . '</td>
	<td class="ar">' . number_format($itemrow["hp"]) . '</td>
	<td class="ar">' . number_format($itemrow["magical_skill_boost_resist"]) . '</td>
	<td class="ar" title="' . $clientversionfull . '">' . $clientversion . '</td>
	</tr>';
	
}elseif ($type == 'quest') {
 // Quest results //
 
	$outhtml .= '
	<tr class="l1">
	<td class="al pr">' . $itemrow['id'] . '</td>
	<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/images/q2.png" width="37" height="37" alt=""></td>
	<td class="al"><div class="link_' . $itemrow["category1"] . '"><a href="https://aionpowerbook.com/powerbook/Quest/' . $itemrow["id"] . '">' . $localization . '</a></div></td>
	<td class="ar">' . $itemrow["client_level"] . '</td>
	<td class="ar" title="' . $clientversionfull . '">' . $clientversion . '</td>
	</tr>';	
}elseif ($type == 'skill') {
 // skill results  //
 
	$skilliconname = strtr(strtolower($itemrow["skillicon_name"]), array(
	".dds" => '',
	));
 
 
	$outhtml .= '
	<tr class="l1">
	<td class="al pr">' . $itemrow['id'] . '</td>
	<td class="al pr"><img class="thumb" src="https://aionpowerbook.com/skillicon/' . $skilliconname . '.png" width="37" height="37" alt=""></td>
	<td class="al"><a href="https://aionpowerbook.com/powerbook/Skill/' . $itemrow["id"] . '">' . $localization . '</a></td>
	<td class="ar" title="' . $clientversionfull . '">' . $clientversion . '</td>
	</tr>';	
}


}


	
	
	
	return $outhtml;
}



function ItemSearch( $t, $out, $term ) {

 global $wgLang, $wgOut;
 $code = $wgLang->getCode();


	
	



	


		$tableend .= '<br><div class="hbody">
		<ul class="nav nav-tabs" role="tablist">
		<li role="presentation"><a href="#Items" aria-controls="Item" role="tab" data-toggle="tab" class="active" >Items</a></li>
		<li role="presentation"><a href="#NPC" aria-controls="NPC" role="tab" data-toggle="tab">NPC</a></li>
		<li role="presentation"><a href="#Quest" aria-controls="Quest" role="tab" data-toggle="tab">Quest</a></li>
		<li role="presentation"><a href="#Skill" aria-controls="Skill" role="tab" data-toggle="tab">Skill</a></li>
		</ul>
		<br>
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="Items">
					<table class="lists list_basicitem width_100p searchdataTable" id="items">
						<thead>
							<tr>
							<th class="fixed nowrap">ID</th>
							<th class="fixed nowrap no-sorting"></th>
							<th class="nowrap ajax100p">Name</th>
							<th class="nowrap">Level</th>
							<th class="nowrap">Version</th>
							</tr>
						</thead>
						<tbody>
							'.searchAionDB('item', $term).'
						</tbody>
					</table>
					<div class="cl"></div>
				</div>
				<div role="tabpanel" class="tab-pane" id="NPC">
		<table class="lists list_basicitem width_100p searchdataTable" id="npc"><thead><tr><th class="fixed nowrap">ID</th><th class="fixed nowrap no-sorting"></th><th class="ajax100p nowrap " >Name</th><th class="nowrap">Level</th><th class="nowrap">HP</th><th class="nowrap">M. Supp.</th><th class="nowrap">Version</th></tr></thead>
		<tbody>
		'.searchAionDB('npc', $term).'
		</tbody>
		</table><div class="cl"></div>
				</div>
				<div role="tabpanel" class="tab-pane" id="Quest">
		<table class="lists list_basicitem width_100p searchdataTable" id="quest"><thead><tr><th class="fixed nowrap">ID</th><th class="fixed nowrap no-sorting"></th><th class="ajax100p nowrap" >Name</th><th class="nowrap">Level</th><th class="nowrap">Version</th></tr></thead>
		<tbody>
		'.searchAionDB('quest', $term).'
		</tbody>
		</table><div class="cl"></div>
				</div>
				
		<div role="tabpanel" class="tab-pane" id="Skill">
		<table class="lists list_basicitem width_100p searchdataTable" id="skill"><thead><tr><th class="fixed nowrap">ID</th><th class="fixed nowrap no-sorting"></th><th class="ajax100p nowrap" >Name</th><th class="nowrap">Version</th></tr></thead>
		<tbody>
		'.searchAionDB('skill', $term).'
		</tbody>
		</table><div class="cl"></div>
				</div>		
				
	
				
			</div>
		</div>';
	
	
	
	
	
	# Return immediately if no search term was supplied
	if ( !$term ) {
		return true;
	}

	$dir = dirname( __FILE__ ) . '/';
	# Add it!
	$out->addWikiText( '==DB Results==' ); #creates a header in wikicode ==DB Results==
	$wgOut->AddHTML( $tableend ); #outputs search results

}

