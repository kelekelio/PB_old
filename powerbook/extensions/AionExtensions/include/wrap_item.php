<?php



function wrapdetails($name, $language)
{
    $query = "
SELECT *
FROM client_disassembly_item_setlist
WHERE name = '$name'
       ";

	
    $query  = mysql_query($query) or die(mysql_error());
	
    while ($result = mysql_fetch_assoc($query)) {		
		$set_list = '';

        foreach ($result as $fieldName => $fieldValue) {
            if (!preg_match('/^create_[0-9]*$/', $fieldName)) {
                // we only want attributes so skip this one
                continue;
            }
			
			if (!empty($fieldValue)) {
            $set_list .= extraitem($fieldValue, $language) . '<br>';
			}
        }
     
            $set_list_name .= $set_list;
		
		
	}
	
	
    return $set_list_name;
	
}




function wrapitem($name, $language)
{
    $query = "
SELECT *
FROM client_disassembly_item
WHERE name = '$name'
      ";
 
 
    $query  = mysql_query($query) or die(mysql_error());
    while ($result = mysql_fetch_assoc($query)) {
        

$row = [
$result['apply_level_1'], $result['set_list_name_'], $result['apply_class_1'], $result['apply_race_1'],
$result['apply_level_2'], $result['set_list_name_1'], $result['apply_class_2'], $result['apply_race_2'],
$result['apply_level_3'], $result['set_list_name_2'], $result['apply_class_3'], $result['apply_race_3'],
$result['apply_level_4'], $result['set_list_name_3'], $result['apply_class_4'], $result['apply_race_4'],
$result['apply_level_5'], $result['set_list_name_4'], $result['apply_class_5'], $result['apply_race_5'],
$result['apply_level_6'], $result['set_list_name_5'], $result['apply_class_6'], $result['apply_race_6'],
$result['apply_level_7'], $result['set_list_name_6'], $result['apply_class_7'], $result['apply_race_7'],
$result['apply_level_8'], $result['set_list_name_7'], $result['apply_class_8'], $result['apply_race_8'],
$result['apply_level_9'], $result['set_list_name_8'], $result['apply_class_9'], $result['apply_race_9'],
$result['apply_level_10'], $result['set_list_name_9'], $result['apply_class_10'], $result['apply_race_10'],
$result['apply_level_11'], $result['set_list_name_10'], $result['apply_class_11'], $result['apply_race_11'],
$result['apply_level_12'], $result['set_list_name_11'], $result['apply_class_12'], $result['apply_race_12'],
$result['apply_level_13'], $result['set_list_name_12'], $result['apply_class_13'], $result['apply_race_13'],
$result['apply_level_14'], $result['set_list_name_13'], $result['apply_class_14'], $result['apply_race_14'],
$result['apply_level_15'], $result['set_list_name_14'], $result['apply_class_15'], $result['apply_race_15'],
$result['apply_level_16'], $result['set_list_name_15'], $result['apply_class_16'], $result['apply_race_16'],
$result['apply_level_17'], $result['set_list_name_16'], $result['apply_class_17'], $result['apply_race_17'],
$result['apply_level_18'], $result['set_list_name_17'], $result['apply_class_18'], $result['apply_race_18'],
$result['apply_level_19'], $result['set_list_name_18'], $result['apply_class_19'], $result['apply_race_19'],
$result['apply_level_20'], $result['set_list_name_19'], $result['apply_class_20'], $result['apply_race_20'],
$result['apply_level_21'], $result['set_list_name_20'], $result['apply_class_21'], $result['apply_race_21'],
$result['apply_level_22'], $result['set_list_name_21'], $result['apply_class_22'], $result['apply_race_22'],
$result['apply_level_23'], $result['set_list_name_22'], $result['apply_class_23'], $result['apply_race_23'],
$result['apply_level_24'], $result['set_list_name_23'], $result['apply_class_24'], $result['apply_race_24'],
$result['apply_level_25'], $result['set_list_name_24'], $result['apply_class_25'], $result['apply_race_25'],
$result['apply_level_26'], $result['set_list_name_25'], $result['apply_class_26'], $result['apply_race_26'],


	
	
];

$chunks = array_chunk($row, 4);
$set_list .= '';
$level = '';
foreach ($chunks as $info) {
	
    list($level, $name, $class, $race) = $info;

	$box_race = '';

	if (strtolower($race) == 'pc_light') {
		$box_race = ' <span class="pc_light" title="' . translate('STR_TOOLTIP_PC_LIGHT', $language) . '"></span>';
	}elseif (strtolower($race) == 'pc_dark') {
		$box_race = ' <span class="pc_dark" title="' . translate('STR_TOOLTIP_PC_DARK', $language) . '"></span>';
	}
	
	$eachclass = explode(' ', $class);
	$icon = '';
	foreach($eachclass as $classicon) {    
	
    $icon .= ' <span class="pc_' . $classicon . '" title="' . translate('STR_CLASS_NAME_' . $classicon, $language) . '"></span>';
	
}
	
	
	
	if ($name != null) {
    $set_list .= '<tr><td class="pad1">' . $box_race . '</td><td class="pad1">' . $icon . '</td><td class="pad1">' . $level . '</td><td class="pad1">' . wrapdetails($name, $language) . '</td></tr>';
	}
	
}

    }
   
    return '<br>
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a href="#Items" aria-controls="Item" role="tab" data-toggle="tab">Contains</a></li>
	</ul>
	
	<div class="tab-content">
	
	<div role="tabpanel" class="tab-pane active" id="Items">
	<table class="edit_table" border="1" style="" id="items" >
	<tbody>
		<tr >
			<td class="cel1 ">Race</td>
			<td class="cel1 " width="45px">Class</td>
			<td class="cel1 ">Level</td>
			<td class="cel1 " width="100%">Items</td>
		</tr>
		
		' . $set_list . '
		
	</tbody>
	</table>
	
	</div>
	
	</div>';
   
}