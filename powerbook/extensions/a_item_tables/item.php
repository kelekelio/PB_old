<?php
header('Content-type: text/html; charset=utf-8');
$wgExtensionCredits['variable'][] = array(
	'path'           => __FILE__,
	'name'           => 'Aion Item Tables',
	'author'         => 'Kelekelio',
	'url'            => 'https://aionpowerbook.com',
	'descriptionmsg' => 'Tables with Aion Items by type',
	'version'		 => '1.0',
	'license-name' 	 => 'LICENSE',
);

$wgHooks['ParserFirstCallInit'][] = 'AionItemTablesFunction';
$wgExtensionMessagesFiles['AionItemTables'] = __DIR__ . '/item.i18n.php';
function AionItemTablesFunction( &$parser ) {
   $parser->setFunctionHook( 'item_tables', 'AionItemTablesParserFunction' );
   return true;
}
function AionItemTablesParserFunction( &$parser, $arg1='', $arg2='', $arg3='', $arg4=''  ) {

 global $wgLang, $wgOut;
 $code = $wgLang->getCode();
 $dbid =  $_GET['dbid'];
 $language = language(); 
 
 $xml=simplexml_load_file("https://aionpowerbook.com/powerbook/extensions/a_item_tables/loca.xml") or die("Error: Cannot create object");
 
 if ( ($arg1 >= 100000001 && $arg1 <= 125369999) or ($arg1 >= 187200000) && ($arg1 <= 187209999) or ($arg1 >= 187100000) && ($arg1 <= 187109999) or ($arg1 >= 187000000) && ($arg1 <= 187069999)  ) {
 $statsselector = '
	 <div class="datatable-custom-controls" >
		<span style="float:left"><select data-placeholder="Item Attributes..." multiple id="chosen-select-stats" class="chosen-select-stats" name="test2" data-column="6">
    <option value=""></option>
	
	<option value="maxhp">'.  $xml->string[0]->$language .'</option>
<option value="maxmp">'.  $xml->string[1]->$language .'</option>
<option value="phyattack">'.  $xml->string[2]->$language .'</option>
<option value="maxfp">'.  $xml->string[3]->$language .'</option>
<option value="healskillboost">'.  $xml->string[4]->$language .'</option>
<option value="hitaccuracy">'.  $xml->string[5]->$language .'</option>
<option value="physicalcriticalreducerate">'.  $xml->string[6]->$language .'</option>
<option value="magicalcriticalreducerate">'.  $xml->string[7]->$language .'</option>
<option value="concentration">'.  $xml->string[8]->$language .'</option>
<option value="dodge">'.  $xml->string[9]->$language .'</option>
<option value="parry">'.  $xml->string[10]->$language .'</option>
<option value="block">'.  $xml->string[11]->$language .'</option>
<option value="magicalattack">'.  $xml->string[12]->$language .'</option>
<option value="arsilence">'.  $xml->string[13]->$language .'</option>
<option value="silence_arp">'.  $xml->string[14]->$language .'</option>
<option value="arparalyze">'.  $xml->string[15]->$language .'</option>
<option value="paralyze_arp">'.  $xml->string[16]->$language .'</option>
<option value="physicalcriticaldamagereduce">'.  $xml->string[17]->$language .'</option>
<option value="physicaldefend">'.  $xml->string[18]->$language .'</option>
<option value="magicalresist">'.  $xml->string[19]->$language .'</option>
<option value="magicalskillboost">'.  $xml->string[20]->$language .'</option>
<option value="magicalskillboostresist">'.  $xml->string[21]->$language .'</option>
<option value="flyspeed">'.  $xml->string[22]->$language .'</option>
<option value="elementaldefendair">'.  $xml->string[23]->$language .'</option>
<option value="elementaldefendwater">'.  $xml->string[24]->$language .'</option>
<option value="elementaldefendearth">'.  $xml->string[25]->$language .'</option>
<option value="elementaldefendfire">'.  $xml->string[26]->$language .'</option>
<option value="magicalcritical">'.  $xml->string[27]->$language .'</option>
<option value="boostcastingtime">'.  $xml->string[28]->$language .'</option>
<option value="attackdelay">'.  $xml->string[29]->$language .'</option>
<option value="magicalhitaccuracy">'.  $xml->string[30]->$language .'</option>
<option value="critical">'.  $xml->string[31]->$language .'</option>
<option value="magicaldefend">'.  $xml->string[32]->$language .'</option>
<option value="speed">'.  $xml->string[70]->$language .'</option>
<option value="boosthate">'.  $xml->string[77]->$language .'</option>
<option value="flyboost_speed">'.  $xml->string[78]->$language .'</option>
<option value="pvpattackratio_physical">'.  $xml->string[79]->$language .'</option>
<option value="pvpattackratio_magical">'.  $xml->string[80]->$language .'</option>
<option value="pvpattackratio">'.  $xml->string[81]->$language .'</option>
<option value="pvpdefendratio">'.  $xml->string[82]->$language .'</option>
<option value="pvpdefendratio_physical">'.  $xml->string[83]->$language .'</option>
<option value="pvpdefendratio_magical">'.  $xml->string[84]->$language .'</option>
<option value="procreducerate">'.  $xml->string[85]->$language .'</option>
<option value="pveattackratio">'.  $xml->string[86]->$language .'</option>
<option value="pvedefendratio">'.  $xml->string[87]->$language .'</option>
<option value="physicalpowerboost">'.  $xml->string[88]->$language .'</option>
<option value="physicalpowerboostresist">'.  $xml->string[89]->$language .'</option>
<option value="magicalpowerboost">'.  $xml->string[90]->$language .'</option>
<option value="magicalpowerboostresist">'.  $xml->string[91]->$language .'</option>
<option value="pvppowerboost">'.  $xml->string[92]->$language .'</option>
<option value="pvepowerboost">'.  $xml->string[93]->$language .'</option>
<option value="pvepowerboostresist">'.  $xml->string[99]->$language .'</option>
<option value="pvppowerboostresist">'.  $xml->string[100]->$language .'</option>
	
  </select></span>
		
		
		</div>
		<div class="cl"></div>';
 }
 
 
 if ($arg3 == '%') {
	 $qualityselector = '<span style="float:left"><select data-placeholder="Item Grade..." multiple id="chosen-select-npc" class="chosen-select-npc" name="test" data-column="3">
    <option value=""></option>
	<option value="finality" class="item_finality">'. translate('STR_ITEM_QUALITY_FINALITY', $language) .'</option>
	<option value="relic"	class="item_relic">'. translate('STR_ITEM_QUALITY_RELIC', $language) .'</option>
	<option value="ancient"	class="item_ancient">'. translate('STR_ITEM_QUALITY_ANCIENT', $language) .'</option>
	<option value="mythic"	class="item_mythic">	'. translate('STR_ITEMQUALITY_MYTHIC', $language) .'</option>
	<option value="epic"	class="item_epic">	'. translate('STR_ITEMQUALITY_EPIC', $language) .'</option>
	<option value="unique"	class="item_unique">	'. translate('STR_ITEMQUALITY_UNIQUE', $language) .'</option>
	<option value="legend"	class="item_legend">	'. translate('STR_ITEMQUALITY_LEGEND', $language) .'</option>
	<option value="rare"	class="item_rare">	'. translate('STR_ITEMQUALITY_RARE', $language) .'</option>
	<option value="common"	class="item_common">	'. translate('STR_ITEMQUALITY_COMMON', $language) .'</option>
	<option value="junk"	class="item_common">	'. translate('STR_ITEMQUALITY_JUNK', $language) .'</option>
	
	
	
  </select></span>';
	 
 }
 
 

	 
	 $typeselect = '
	 <div class="cl"></div>
	 <div class="datatable-custom-controls" >';
	 
	 if ($arg4 != NULL) {
		$typeselect .= '<span style="float:left"><select data-placeholder="Item Type..." multiple id="chosen-select-slot" class="chosen-select-slot" name="test1" data-column="5">
    <option value=""></option>
	
	<option value="torso">'.  $xml->string[98]->$language .'</option>
	<option value="leg">'.  $xml->string[95]->$language .'</option>
	<option value="glove">'.  $xml->string[94]->$language .'</option>
	<option value="shoulder">'.  $xml->string[97]->$language .'</option>
	<option value="foot">'.  $xml->string[96]->$language .'</option>
	<option value="torso glove foot shoulder leg">Full-body</option>
	
  </select></span>';
		}
		
		if ( ($arg1 == 100000001) or ($arg1 == 100100001) or ($arg1 == 100200001) or ($arg1 == 100900001) or ($arg1 == 101300001) or ($arg1 == 101500001)  ) {
		$typeselect .= '<span style="float:right">Extendable: <input id="itemcheckBox-range" class="itemcheckBox-range" type="checkbox" data-column="7" value="extend"></select>';
		}
		$typeselect .= '</div>		';
		
 
 
  if ( ($arg1 >= 100000001 && $arg1 <= 125369999) or ($arg1 >= 187200000) && ($arg1 <= 187209999) or ($arg1 >= 187100000) && ($arg1 <= 187109999) or ($arg1 >= 187000000) && ($arg1 <= 187069999)  ) {
	  
	  $pvpveselect = '<span style="float:right; margin-right:13px; "><select data-column="8"  class="search-input-select">
									<option value="">(PVE/PVP)</option>
									<option value="PVE">PVE</option>
									<option value="PVP">PVP</option>
									<option value="DESTRUCTION">Extreme</option>
									
									
									
								</select></span>';
  }
 
 


$tableend = '		
		'.$statsselector.'
		
		
		<div class="datatable-custom-controls" >
		
		
		
		'.$qualityselector.'
		
		<span style="float:right" ><button type="button" class="clearalldt" id="clearalldt" resetorder="0" >Reset!</button></span>
		
		
		'.$pvpveselect.'
								
								
								
		<span style="float:right; margin-right:13px; "><select data-column="4"  class="search-input-select">
									<option value="">(Select Race)</option>
									<option value="pc_dark">Only Asmodian</option>
									<option value="pc_ligh">Only Elyos</option>
									
									
									
								</select></span>
		
		
  
								<span style="float:right; margin-right:14px"><input style="width:50px" placeholder="Max" type="search" class="custom-search-input-text2" data-column="2"></span>
								<span style="float:right; margin-right:2px">~</span>
								<span style="float:right; margin-right:2px">Level: <input style="width:50px" placeholder="Min" type="search" class="custom-search-input-text" data-column="1"></span>				
		
		</div>
		
		'.$typeselect.'

		
		<br><br><div class="hbody">

		<table class="lists list_basicitem width_100p DataTableAJAXitem" id="questserverTable" DefsColumn="[{targets: 0,className: \'al pr\', type: \'num-html\'},{targets: 1,className: \'al pr\'},{targets: 2,type: \'num-html\'},{targets: 3,className: \'al pr\'}, {targets: 4,className: \'al pr\'}, {targets: 5,className: \'al pr\'}, {targets: 6,className: \'al pr\'}]" ajaxurl="https://aionpowerbook.com/powerbook/extensions/a_item_tables/item_ajax.php?lowerid=' . $arg1 . '&higherid=' . $arg2 . '&getquality=' . $arg3 . '&lang=' . $code . '&type=' . $arg4 . '&classic=' . isClassic() . '" excl="1">
		
		<thead>
		<tr>
		
		<th class="fixed nowrap">ID</th>
		<th class="fixed nowrap no-sorting"></th>
		<th class="nowrap ajax100p">Name</th>
		<th class="nowrap">Level</th>
		<th class="nowrap">Type</th>
		<th class="nowrap">Version</th>
		<th class="nowrap "></th>
		<th class="nowrap "></th>
		<th class="nowrap "></th>
	
		</tr>
		</thead>
		</table>
		
		<div class="cl"></div></div>';
 
 
 		

		
		$wgOut->AddHTML( $tableend );
}