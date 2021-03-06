<?php
header('Content-type: text/html; charset=utf-8');
$wgExtensionCredits['variable'][] = array(
	'path'           => __FILE__,
	'name'           => 'Aion npc list',
	'author'         => 'Kelekelio',
	'url'            => 'https://aionpowerbook.com',
	'descriptionmsg' => 'Tables with Aion npcs by map',
	'version'		 => '1.0',
	'license-name' 	 => 'LICENSE',
);

$wgHooks['ParserFirstCallInit'][] = 'AionnpclistFunction';
$wgExtensionMessagesFiles['Aionnpclist'] = __DIR__ . '/npclist.i18n.php';
function AionnpclistFunction( &$parser ) {
   $parser->setFunctionHook( 'npclist', 'AionnpclistParserFunction' );
   return true;
}
function AionnpclistParserFunction( &$parser, $arg1='', $arg2='' ) {

 global $wgLang, $wgOut;
 $code = $wgLang->getCode();
 
 

 if ( !empty($arg1) ){
	 
 
 
 
		$tableend = '	
		<div class="datatable-custom-controls" ><span style="float:left"><select data-placeholder="Monster Type..." multiple id="chosen-select-npc" class="chosen-select-npc" name="test" data-column="3">
    <option value=""></option>
	<option value="pc_dark">Asmodian</option>
	<option value="type_b">Assassin Form</option>
	<option value="tricodark">Dark Trico</option>
	<option value="demihumanoid">Demihuman</option>
	<option value="dragon">Dragon</option>
	<option value="dragonet">Dragonet</option>
	<option value="drakan">Drakan</option>
	<option value="elemental">Elemental</option>
	<option value="pc_light">Elyos</option>
	<option value="goblin">Goblin</option>
	<option value="human">Human</option>
	<option value="type_e">Ice Form</option>
	<option value="krall">Krall</option>
	<option value="lycan">Lycan</option>
	<option value="type_c">Magical Form</option>
	<option value="naga">Naga</option>
	<option value="orc">Orc</option>
	<option value="ratman">Ratman</option>
	<option value="shulack">Shulack</option>
	<option value="siegedrakan">Siege Drakan</option>
	<option value="type_d">Special Form</option>
	<option value="undead">Undead</option>
    <option value="type_a">Warrior Form</option>
  </select></span><span style="float:right; right:5px;" ><button type="button" class="clearalldt" id="clearalldt" resetorder="0" >Reset!</button></span></div>
		<br><br><div class="hbody">
		<table class="lists list_basicitem width_100p DataTableAJAX" id="serverTable" DefsColumn="[{targets: 0,className: \'al pr\', type: \'num-html\'},{targets: 1,className: \'al pr\'},{targets: 2,type: \'num-html\'},{targets: 3,className: \'al pr\'}, {targets: 4,className: \'al pr\'}, {targets: 5,className: \'al pr\'}, {targets: 6,className: \'al pr\'}]" ajaxurl="https://aionpowerbook.com/powerbook/extensions/a_npc_tables_map/npclist_ajax.php?map=' . $arg1 . '&map2=' . $arg2 . '&lang=' . $code . '&classic='. isClassic() .'">
		<thead>
		<tr>
		<th class="fixed nowrap">ID</th>
		<th class="fixed nowrap no-sorting sorting_disabled"></th>
		<th class="nowrap" style="width:100%;">Name</th>
		<th class="nowrap">Level</th>
		<th class="nowrap">HP</th>
		<th class="nowrap"><div title="Magical Defence">MD</div></th>
		<th class="nowrap none">Version</th>
		</tr>
		</thead>
		
		<tbody></tbody>
		
		<thead>
		<tr>
		<th class="fixed nowrap">ID</th>
		<th class="fixed nowrap no-sorting sorting_disabled"></th>
		<th class="nowrap" style="width:100%;">Name</th>
		<th class="nowrap">Level</th>
		<th class="nowrap">HP</th>
		<th class="nowrap"><div title="Magical Defence">MD</div></th>
		</tr>
		</thead>
		</table><div class="cl"></div></div>';
		
 }else {
	 $tableend = 'Map not specified.';
 }

		$wgOut->AddHTML( $tableend );
}