<?php
header('Content-type: text/html; charset=utf-8');
$wgExtensionCredits['variable'][] = array(
	'path'           => __FILE__,
	'name'           => 'Aion lunac Tables',
	'author'         => 'Kelekelio',
	'url'            => 'https://aionpowerbook.com',
	'descriptionmsg' => 'Tables with Aion lunacs by type',
	'version'		 => '1.0',
	'license-name' 	 => 'LICENSE',
);

$wgHooks['ParserFirstCallInit'][] = 'AionlunacTablesFunction';
$wgExtensionMessagesFiles['AionlunacTables'] = __DIR__ . '/lunac.i18n.php';
function AionlunacTablesFunction( &$parser ) {
   $parser->setFunctionHook( 'luna_craft', 'AionlunacTablesParserFunction' );
   return true;
}
function AionlunacTablesParserFunction( &$parser, $arg1=''  ) {

 global $wgOut;
 $code = language();
 
 
		$tableend = '
		<div class="datatable-custom-controls" >
		<span style="float:right" ><button type="button" class="clearalldt" id="clearalldt" resetorder="0" >Reset!</button></span>
		
		<span style="float:right; margin-right:13px; ">
		<select data-column="4"  class="search-input-select">
									<option value="">(Select Race)</option>
									<option value="pc_dark">Asmodian</option>
									<option value="pc_ligh">Elyos</option>
									
									
									
								</select></span>
		
		
		<span style="float:right; margin-right:13px; ">
		<select data-column="2"  class="search-input-select">
									<option value="">(Probability)</option>
									<option value="15">15%</option>
									<option value="25">25%</option>
									<option value="45">45%</option>
									<option value="50">50%</option>
									<option value="75">75%</option>
									<option value="80">80%</option>
									<option value="100">100%</option>
									
									
									
									
								</select></span>

								
								
		
		</div>
		
		
		
		<br><br>
		<div class="hbody">

		<br>
	
		
		
		<table class="lists list_basicitem width_100p DataTableAJAX" id="kr" DefsColumn="[{targets: 0,className: \'al pr\', type: \'num-html\'},{targets: 1,className: \'al pr\'},{targets: 2,type: \'num-html\'},{targets: 3,className: \'al pr\'}, {targets: 4,className: \'al pr\'}]" ajaxurl="https://aionpowerbook.com/powerbook/extensions/a_luna_craft/lunac_ajax.php?lang=' . $code . '&type=1" dataOrder="0" ><thead><tr>
		<th class="fixed nowrap" ></th>
		<th class="fixed nowrap" style="width:500px">Product</th>
		<th class="nowrap" style="width:150px">Materials</th>
		<th class="nowrap">Probability</th>
		<th class="nowrap">Race</th>
		</tr></thead></table>
		
		<div class="cl"></div>
		
		
		
		
</div>';
		

		
		$wgOut->AddHTML( $tableend );
}