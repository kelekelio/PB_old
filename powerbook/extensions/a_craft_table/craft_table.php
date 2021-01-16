<?php
header('Content-type: text/html; charset=utf-8');
$wgExtensionCredits['variable'][] = array(
    'path'           => __FILE__,
    'name'           => 'Aion Craft Tables',
    'author'         => 'Kelekelio',
    'url'            => 'https://aionpowerbook.com',
    'descriptionmsg' => 'Tables with Aion Crafts',
    'version'		 => '1.0',
    'license-name' 	 => 'LICENSE',
);

$wgHooks['ParserFirstCallInit'][] = 'AionCraftAjaxTableFunction';
$wgExtensionMessagesFiles['AionCraftAjaxTable'] = __DIR__ . '/craft_table.i18n.php';
function AionCraftAjaxTableFunction( &$parser ) {
    $parser->setFunctionHook( 'crafttable', 'AionCraftAjaxTableParserFunction' );
    return true;
}
function AionCraftAjaxTableParserFunction( &$parser, $arg1='' ) {

    global $wgOut;
    $code = language();

    if ($arg1 != 'convert'){

        $xml=simplexml_load_file("https://aionpowerbook.com/powerbook/extensions/a_craft_table/lang.xml") or die("Error: Cannot create object");

        $highcrafttype = '<span style="float:left"><select data-placeholder="Craft Type..." multiple id="chosen-select-npc" class="chosen-select-npc" name="test" data-column="3">
    <option value=""></option>
	
	<option value="_sword_">'.		$xml->string[0]->$code .'</option>
	<option value="_dagger_">'.	 	$xml->string[5]->$code .'</option>
	<option value="_mace_">'.		$xml->string[1]->$code .'</option>
	<option value="_orb_">'. 		$xml->string[8]->$code .'</option>
	<option value="_book_">'.		$xml->string[3]->$code .'</option>
	<option value="_2hsword_">'.	$xml->string[2]->$code .'</option>
	<option value="_polearm_">'.	$xml->string[9]->$code .'</option>
	<option value="_staff_">'. 		$xml->string[10]->$code .'</option>
	<option value="_bow_">'. 		$xml->string[11]->$code .'</option>
	<option value="_gun_">'.		$xml->string[6]->$code .'</option>
	<option value="_cannon_">'.		$xml->string[4]->$code .'</option>
	<option value="_keyblade_">'.	$xml->string[7]->$code .'</option>
	<option value="_harp_">'. 		$xml->string[12]->$code .'</option>
	<option value="_spray_">'. 		$xml->string[32]->$code .'</option>
	
	<option value="_rb_torso_">		'. $xml->string[13]->$code .' '. $xml->string[22]->$code .'</option>
	<option value="_rb_pants_">		'. $xml->string[13]->$code .' '. $xml->string[19]->$code .'</option>
	<option value="_rb_glove_">		'. $xml->string[13]->$code .' '. $xml->string[17]->$code .'</option>
	<option value="_rb_shoes_">		'. $xml->string[13]->$code .' '. $xml->string[20]->$code .'</option>
	<option value="_rb_shoulder_">	'. $xml->string[13]->$code .' '. $xml->string[21]->$code .'</option>
	<option value="_rb_head_">		'. $xml->string[13]->$code .' '. $xml->string[18]->$code .'</option>
	
	<option value="_lt_torso_">		'. $xml->string[14]->$code .' '. $xml->string[22]->$code .'</option>
	<option value="_lt_pants_">		'. $xml->string[14]->$code .' '. $xml->string[19]->$code .'</option>
	<option value="_lt_glove_">		'. $xml->string[14]->$code .' '. $xml->string[17]->$code .'</option>
	<option value="_lt_shoes_">		'. $xml->string[14]->$code .' '. $xml->string[20]->$code .'</option>
	<option value="_lt_shoulder_">	'. $xml->string[14]->$code .' '. $xml->string[21]->$code .'</option>
	<option value="_lt_head_">		'. $xml->string[14]->$code .' '. $xml->string[18]->$code .'</option>
	
	<option value="_ch_torso_">		'. $xml->string[15]->$code .' '. $xml->string[22]->$code .'</option>
	<option value="_ch_pants_">		'. $xml->string[15]->$code .' '. $xml->string[19]->$code .'</option>
	<option value="_ch_glove_">		'. $xml->string[15]->$code .' '. $xml->string[17]->$code .'</option>
	<option value="_ch_shoes_">		'. $xml->string[15]->$code .' '. $xml->string[20]->$code .'</option>
	<option value="_ch_shoulder_">	'. $xml->string[15]->$code .' '. $xml->string[21]->$code .'</option>
	<option value="_ch_head_">		'. $xml->string[15]->$code .' '. $xml->string[18]->$code .'</option>
	
	<option value="_pl_torso_">		'. $xml->string[16]->$code .' '. $xml->string[22]->$code .'</option>
	<option value="_pl_pants_">		'. $xml->string[16]->$code .' '. $xml->string[19]->$code .'</option>
	<option value="_pl_glove_">		'. $xml->string[16]->$code .' '. $xml->string[17]->$code .'</option>
	<option value="_pl_shoes_">		'. $xml->string[16]->$code .' '. $xml->string[20]->$code .'</option>
	<option value="_pl_shoulder_">	'. $xml->string[16]->$code .' '. $xml->string[21]->$code .'</option>
	<option value="_pl_head_">		'. $xml->string[16]->$code .' '. $xml->string[18]->$code .'</option>
	
	<option value="_shield_">'. $xml->string[23]->$code .'</option>
	
	<option value="_belt_">'. $xml->string[24]->$code .'</option>
	<option value="_ring_">'. $xml->string[27]->$code .'</option>
	<option value="_earring_">'. $xml->string[25]->$code .'</option>
	<option value="_necklace_">'. $xml->string[26]->$code .'</option>
	<option value="_bracelet_">'. $xml->string[28]->$code .'</option>
	<option value="_feather_">'. $xml->string[29]->$code .'</option>
	<option value="_wing_">'. $xml->string[30]->$code .'</option>

	<option value="_material_">'. $xml->string[31]->$code .'</option>
	<option value="_part_">Parts</option>
	<option value="_wrap_">'. $xml->string[33]->$code .'</option>
	<option value="A_hc_%_craft_look_">Appearance</option>
	<option value="event">Event</option>
	<option value="%_al_q">Quest</option>
	
  </select></span>';

    }





    $tableend = '	
		<div class="datatable-custom-controls" >
		' . $highcrafttype . '
		<span style="float:right" ><button type="button" class="clearalldt" id="clearalldt" resetorder="3" >Reset!</button></span>
		
		<span style="float:right; margin-right:13px; "><select data-column="4"  class="search-input-select">
									<option value="">(Select Race)</option>
									<option value="pc_dark">Only Asmodian</option>
									<option value="pc_ligh">Only Elyos</option>
									
									
									
								</select></span>

								<span style="float:right; margin-right:14px"><input style="width:50px" placeholder="Max" type="search" class="custom-search-input-text2" data-column="2"></span>
								<span style="float:right; margin-right:2px">~</span>
								<span style="float:right; margin-right:2px">Skill Points: <input style="width:50px" placeholder="Min" type="search" class="custom-search-input-text" data-column="1"></span>
								
		
		</div>

		
		<br><br><div class="hbody">

		<table class="lists list_basicitem width_100p DataTableAJAX" id="questserverTable" DefsColumn="[{targets: 0,className: \'al pr\', type: \'num-html\'},{targets: 1,className: \'al pr\'},{targets: 2,type: \'num-html\'},{targets: 3,className: \'al pr\'}, {targets: 4,className: \'al pr\'}]" ajaxurl="https://aionpowerbook.com/powerbook/extensions/a_craft_table/craft_table_ajax.php?craft=' . $arg1 . '&lang=' . $code . '&classic=' . isClassic() . '" dataOrder="3"><thead><tr>
		<th class="fixed nowrap no-sorting"></th>
		<th class=" nowrap no-sorting">Crit</th>
		<th class="nowrap ajax100p">Name</th>
		<th class="nowrap"><div class="restrictionTip" title="Skill Points" >SK</div></th>
		<th class="nowrap">Race&nbsp;&nbsp;&nbsp;</th>
		</tr>
		</thead></table>
		
		<div class="cl"></div></div>';



    $wgOut->AddHTML( $tableend );
}