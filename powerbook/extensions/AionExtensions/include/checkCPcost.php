<?php



function checkCPcost($name) {

    include 'DBselect.php';

    $result = $db->query('SELECT * FROM client_use_cp WHERE cp_enchant_name = ? and category = "learn_skill" ', $name)->fetchArray();
	
	if (!empty($result['id'])) {
		
		$tempmaxCP = strtr(translate('STR_TOOLTIP_USE_CP_REQ_MAXCP', language()), array(
		    " %0" => ': ' . $result['pre_cond_min_pc_maxcp'],
	    ));
		
		return '
		<dl class="CPcost"><dt>CP Cost</dt><dd class="cost" id="skill_CPcost">' . $result['cp_cost'] . ' <img src="https://aionpowerbook.com/powerbook/skins/MonoBook/img/cpicon.png"> (' . $tempmaxCP . ' <img src="https://aionpowerbook.com/powerbook/skins/MonoBook/img/cpicon.png">)</dd></dl>
		';
	}else {
		return '';
	}
	
	
}