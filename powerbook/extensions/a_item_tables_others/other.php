<?php
header('Content-type: text/html; charset=utf-8');
$wgExtensionCredits['variable'][] = array(
	'path'           => __FILE__,
	'name'           => 'Aion Other Item Tables',
	'author'         => 'Kelekelio',
	'url'            => 'https://aionpowerbook.com',
	'descriptionmsg' => 'Tables with Aion Other Items by type',
	'version'		 => '1.0',
	'license-name' 	 => 'LICENSE',
);

$wgHooks['ParserFirstCallInit'][] = 'AionOtherItemTablesFunction';
$wgExtensionMessagesFiles['AionOtherItemTables'] = __DIR__ . '/other.i18n.php';
function AionOtherItemTablesFunction( &$parser ) {
   $parser->setFunctionHook( 'item_other', 'AionOtherItemTablesParserFunction' );
   return true;
}
function AionOtherItemTablesParserFunction( &$parser, $arg1=''  ) {

 global $wgLang, $wgOut;
 $code = $wgLang->getCode();
 $language = language();
 
 
		
		
		$tableend = '		
		<div class="datatable-custom-controls" >
		<span style="float:left"><select data-placeholder="Item Grade..." multiple id="chosen-select-npc" class="chosen-select-npc" name="test" data-column="3">
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
	
	
  </select></span>
		
		<span style="float:right" ><button type="button" class="clearalldt" id="clearalldt" resetorder="0" >Reset!</button></span>
		
		<span style="float:right; margin-right:13px; "><select data-column="4"  class="search-input-select">
									<option value="">(Select Race)</option>
									<option value="pc_dark">Only Asmodian</option>
									<option value="pc_ligh">Only Elyos</option>
									
									
									
								</select></span>
		
		
  
								<span style="float:right; margin-right:14px"><input style="width:50px" placeholder="Max" type="search" class="custom-search-input-text2" data-column="2"></span>
								<span style="float:right; margin-right:2px">~</span>
								<span style="float:right; margin-right:2px">Level: <input style="width:50px" placeholder="Min" type="search" class="custom-search-input-text" data-column="1"></span>				
		
		</div>

		
		<br><br><div class="hbody">

		<table class="lists list_basicitem width_100p DataTableAJAX" id="questserverTable" DefsColumn="[{targets: 0,className: \'al pr\', type: \'num-html\'},{targets: 1,className: \'al pr\'},{targets: 2,type: \'num-html\'},{targets: 3,className: \'al pr\'}, {targets: 4,className: \'al pr\'}]" ajaxurl="https://aionpowerbook.com/powerbook/extensions/a_item_tables_others/other_ajax.php?lang=' . $code . '&classic=' . isClassic() . '">
		
		<thead>
		<tr>
		
		<th class="fixed nowrap">ID</th>
		<th class="fixed nowrap no-sorting"></th>
		<th class="nowrap ajax100p">Name</th>
		<th class="nowrap">Level</th>
		<th class="nowrap">Version</th>
		
		</tr>
		</thead>
		</table>
		
		<div class="cl"></div></div>';
		

		
		$wgOut->AddHTML( $tableend );
}