<?php



function descriptionSkill($name, $activation_level, $description, $language)
{

    include 'DBselect.php';

    $result = $db->query("
SELECT *
FROM client_skills
WHERE name = '$name'
", $name)->fetchArray();
	
		if (strtolower($result["effect1_reserved13"]) == 'maxhp') {
			$foodstat1 = translate('STR_HP', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'phyattack') {
			$foodstat1 = translate('STR_TOOLTIP_SKILL_STAT_PHYATTACK', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'critical') {
			$foodstat1 = translate('STR_CRITICAL', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'hitaccuracy') {
			$foodstat1 = translate('STR_TOOLTIP_SKILL_STAT_HITACCURACY', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'maxmp') {
			$foodstat1 = translate('STR_MP', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'dodge') {
			$foodstat1 = translate('STR_DODGE', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'maxfp') {
			$foodstat1 = translate('STR_TOOLTIP_FLY_TIME', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'flyspeed') {
			$foodstat1 = translate('STR_TOOLTIP_RIDE_FLY_SPEED', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'hpregen') {
			$foodstat1 = translate('STR_TOOLTIP_SKILL_STAT_HPREGEN', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'mpregen') {
			$foodstat1 = translate('STR_TOOLTIP_SKILL_STAT_MPREGEN', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'magicalhitaccuracy') {
			$foodstat1 = translate('STR_MAGICAL_HIT_ACCURACY', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'magicalresist') {
			$foodstat1 = translate('STR_MAGIC_DEFENSE', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'magicalskillboost') {
			$foodstat1 = translate('STR_MAGICAL_SKILL_BOOST', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'speed') {
			$foodstat1 = translate('STR_TOOLTIP_SKILL_STAT_SPEED', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'magicalskillboostresist') {
			$foodstat1 = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_SKILL_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'attackdelay') {
			$foodstat1 = translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'elementaldefendall') {
			$foodstat1 = translate('STR_TOOLTIP_SKILL_STAT_ED_ALL', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'magicalcriticalreducerate') {
			$foodstat1 = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'elementaldefendair') {
			$foodstat1 = translate('STR_TOOLTIP_SKILL_STAT_ED_AIR', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'magicalcritical') {
			$foodstat1 = translate('STR_TOOLTIP_SKILL_STAT_MAGCRITICAL', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'physicalcriticalreducerate') {
			$foodstat1 = translate('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'boostcastingtime') {
			$foodstat1 = translate('STR_BOOSTCASTINGTIME', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'elementaldefendwater') {
			$foodstat1 = translate('STR_TOOLTIP_SKILL_STAT_ED_WATER', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'elementaldefendearth') {
			$foodstat1 = translate('STR_TOOLTIP_SKILL_STAT_ED_EARTH', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'elementaldefendfire') {
			$foodstat1 = translate('STR_TOOLTIP_SKILL_STAT_ED_FIRE', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'healskillboost') {
			$foodstat1 = translate('STR_TOOLTIP_SKILL_STAT_HEAL_BOOST', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'physicalpowerboost') {
			$foodstat1 = translate('STR_PHYSICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'magicalpowerboost') {
			$foodstat1 = translate('STR_MAGICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'physicalpowerboostresist') {
			$foodstat1 = translate('STR_PHYSICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'magicalpowerboostresist') {
			$foodstat1 = translate('STR_MAGICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'parry') {
			$foodstat1 = translate('STR_PARRY', $language);
		}elseif (strtolower($result["effect1_reserved13"]) == 'block') {
			$foodstat1 = translate('STR_BLOCK', $language);
		}else {
			$foodstat1 = '[Unknown - Please, Report. ' . $result["effect1_reserved13"] . ']';
		}
		
		
		if (strtolower($result["effect1_reserved14"]) == 'maxhp') {
			$foodstat1b = translate('STR_HP', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'phyattack') {
			$foodstat1b = translate('STR_TOOLTIP_SKILL_STAT_PHYATTACK', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'critical') {
			$foodstat1b = translate('STR_CRITICAL', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'hitaccuracy') {
			$foodstat1b = translate('STR_TOOLTIP_SKILL_STAT_HITACCURACY', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'maxmp') {
			$foodstat1b = translate('STR_MP', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'dodge') {
			$foodstat1b = translate('STR_DODGE', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'maxfp') {
			$foodstat1b = translate('STR_TOOLTIP_FLY_TIME', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'flyspeed') {
			$foodstat1b = translate('STR_TOOLTIP_RIDE_FLY_SPEED', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'hpregen') {
			$foodstat1b = translate('STR_TOOLTIP_SKILL_STAT_HPREGEN', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'mpregen') {
			$foodstat1b = translate('STR_TOOLTIP_SKILL_STAT_MPREGEN', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'magicalhitaccuracy') {
			$foodstat1b = translate('STR_MAGICAL_HIT_ACCURACY', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'magicalresist') {
			$foodstat1b = translate('STR_MAGIC_DEFENSE', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'magicalskillboost') {
			$foodstat1b = translate('STR_MAGICAL_SKILL_BOOST', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'speed') {
			$foodstat1b = translate('STR_TOOLTIP_SKILL_STAT_SPEED', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'magicalskillboostresist') {
			$foodstat1b = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_SKILL_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'attackdelay') {
			$foodstat1b = translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'elementaldefendall') {
			$foodstat1b = translate('STR_TOOLTIP_SKILL_STAT_ED_ALL', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'magicalcriticalreducerate') {
			$foodstat1b = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'elementaldefendair') {
			$foodstat1b = translate('STR_TOOLTIP_SKILL_STAT_ED_AIR', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'magicalcritical') {
			$foodstat1b = translate('STR_TOOLTIP_SKILL_STAT_MAGCRITICAL', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'physicalcriticalreducerate') {
			$foodstat1b = translate('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'boostcastingtime') {
			$foodstat1b = translate('STR_BOOSTCASTINGTIME', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'elementaldefendwater') {
			$foodstat1b = translate('STR_TOOLTIP_SKILL_STAT_ED_WATER', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'elementaldefendearth') {
			$foodstat1b = translate('STR_TOOLTIP_SKILL_STAT_ED_EARTH', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'elementaldefendfire') {
			$foodstat1b = translate('STR_TOOLTIP_SKILL_STAT_ED_FIRE', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'healskillboost') {
			$foodstat1b = translate('STR_TOOLTIP_SKILL_STAT_HEAL_BOOST', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'physicalpowerboost') {
			$foodstat1b = translate('STR_PHYSICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'magicalpowerboost') {
			$foodstat1b = translate('STR_MAGICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'physicalpowerboostresist') {
			$foodstat1b = translate('STR_PHYSICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'magicalpowerboostresist') {
			$foodstat1b = translate('STR_MAGICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'parry') {
			$foodstat1b = translate('STR_PARRY', $language);
		}elseif (strtolower($result["effect1_reserved14"]) == 'block') {
			$foodstat1b = translate('STR_BLOCK', $language);
		}else {
			$foodstat1b = '[Unknown - Please, Report. ' . $result["effect1_reserved14"] . ']';
		}
		
		
		if (strtolower($result["effect1_reserved18"]) == 'maxhp') {
			$foodstat1c = translate('STR_HP', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'phyattack') {
			$foodstat1c = translate('STR_TOOLTIP_SKILL_STAT_PHYATTACK', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'critical') {
			$foodstat1c = translate('STR_CRITICAL', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'hitaccuracy') {
			$foodstat1c = translate('STR_TOOLTIP_SKILL_STAT_HITACCURACY', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'maxmp') {
			$foodstat1c = translate('STR_MP', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'dodge') {
			$foodstat1c = translate('STR_DODGE', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'maxfp') {
			$foodstat1c = translate('STR_TOOLTIP_FLY_TIME', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'flyspeed') {
			$foodstat1c = translate('STR_TOOLTIP_RIDE_FLY_SPEED', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'hpregen') {
			$foodstat1c = translate('STR_TOOLTIP_SKILL_STAT_HPREGEN', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'mpregen') {
			$foodstat1c = translate('STR_TOOLTIP_SKILL_STAT_MPREGEN', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'magicalhitaccuracy') {
			$foodstat1c = translate('STR_MAGICAL_HIT_ACCURACY', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'magicalresist') {
			$foodstat1c = translate('STR_MAGIC_DEFENSE', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'magicalskillboost') {
			$foodstat1c = translate('STR_MAGICAL_SKILL_BOOST', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'speed') {
			$foodstat1c = translate('STR_TOOLTIP_SKILL_STAT_SPEED', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'magicalskillboostresist') {
			$foodstat1c = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_SKILL_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'attackdelay') {
			$foodstat1c = translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'elementaldefendall') {
			$foodstat1c = translate('STR_TOOLTIP_SKILL_STAT_ED_ALL', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'magicalcriticalreducerate') {
			$foodstat1c = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'elementaldefendair') {
			$foodstat1c = translate('STR_TOOLTIP_SKILL_STAT_ED_AIR', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'magicalcritical') {
			$foodstat1c = translate('STR_TOOLTIP_SKILL_STAT_MAGCRITICAL', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'physicalcriticalreducerate') {
			$foodstat1c = translate('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'boostcastingtime') {
			$foodstat1c = translate('STR_BOOSTCASTINGTIME', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'elementaldefendwater') {
			$foodstat1c = translate('STR_TOOLTIP_SKILL_STAT_ED_WATER', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'elementaldefendearth') {
			$foodstat1c = translate('STR_TOOLTIP_SKILL_STAT_ED_EARTH', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'elementaldefendfire') {
			$foodstat1c = translate('STR_TOOLTIP_SKILL_STAT_ED_FIRE', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'healskillboost') {
			$foodstat1c = translate('STR_TOOLTIP_SKILL_STAT_HEAL_BOOST', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'physicalpowerboost') {
			$foodstat1c = translate('STR_PHYSICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'magicalpowerboost') {
			$foodstat1c = translate('STR_MAGICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'physicalpowerboostresist') {
			$foodstat1c = translate('STR_PHYSICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'magicalpowerboostresist') {
			$foodstat1c = translate('STR_MAGICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'parry') {
			$foodstat1c = translate('STR_PARRY', $language);
		}elseif (strtolower($result["effect1_reserved18"]) == 'block') {
			$foodstat1c = translate('STR_BLOCK', $language);
		}else {
			$foodstat1c = '[Unknown - Please, Report. ' . $result["effect1_reserved18"] . ']';
		}
		
		
		if (strtolower($result["effect1_reserved22"]) == 'maxhp') {
			$foodstat1d = translate('STR_HP', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'phyattack') {
			$foodstat1d = translate('STR_TOOLTIP_SKILL_STAT_PHYATTACK', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'critical') {
			$foodstat1d = translate('STR_CRITICAL', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'hitaccuracy') {
			$foodstat1d = translate('STR_TOOLTIP_SKILL_STAT_HITACCURACY', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'maxmp') {
			$foodstat1d = translate('STR_MP', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'dodge') {
			$foodstat1d = translate('STR_DODGE', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'maxfp') {
			$foodstat1d = translate('STR_TOOLTIP_FLY_TIME', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'flyspeed') {
			$foodstat1d = translate('STR_TOOLTIP_RIDE_FLY_SPEED', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'hpregen') {
			$foodstat1d = translate('STR_TOOLTIP_SKILL_STAT_HPREGEN', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'mpregen') {
			$foodstat1d = translate('STR_TOOLTIP_SKILL_STAT_MPREGEN', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'magicalhitaccuracy') {
			$foodstat1d = translate('STR_MAGICAL_HIT_ACCURACY', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'magicalresist') {
			$foodstat1d = translate('STR_MAGIC_DEFENSE', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'magicalskillboost') {
			$foodstat1d = translate('STR_MAGICAL_SKILL_BOOST', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'speed') {
			$foodstat1d = translate('STR_TOOLTIP_SKILL_STAT_SPEED', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'magicalskillboostresist') {
			$foodstat1d = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_SKILL_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'attackdelay') {
			$foodstat1d = translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'elementaldefendall') {
			$foodstat1d = translate('STR_TOOLTIP_SKILL_STAT_ED_ALL', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'magicalcriticalreducerate') {
			$foodstat1d = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'elementaldefendair') {
			$foodstat1d = translate('STR_TOOLTIP_SKILL_STAT_ED_AIR', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'magicalcritical') {
			$foodstat1d = translate('STR_TOOLTIP_SKILL_STAT_MAGCRITICAL', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'physicalcriticalreducerate') {
			$foodstat1d = translate('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'boostcastingtime') {
			$foodstat1d = translate('STR_BOOSTCASTINGTIME', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'elementaldefendwater') {
			$foodstat1d = translate('STR_TOOLTIP_SKILL_STAT_ED_WATER', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'elementaldefendearth') {
			$foodstat1d = translate('STR_TOOLTIP_SKILL_STAT_ED_EARTH', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'elementaldefendfire') {
			$foodstat1d = translate('STR_TOOLTIP_SKILL_STAT_ED_FIRE', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'healskillboost') {
			$foodstat1d = translate('STR_TOOLTIP_SKILL_STAT_HEAL_BOOST', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'physicalpowerboost') {
			$foodstat1d = translate('STR_PHYSICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'magicalpowerboost') {
			$foodstat1d = translate('STR_MAGICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'physicalpowerboostresist') {
			$foodstat1d = translate('STR_PHYSICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'magicalpowerboostresist') {
			$foodstat1d = translate('STR_MAGICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'parry') {
			$foodstat1d = translate('STR_PARRY', $language);
		}elseif (strtolower($result["effect1_reserved22"]) == 'block') {
			$foodstat1d = translate('STR_BLOCK', $language);
		}else {
			$foodstat1d = '[Unknown - Please, Report. ' . $result["effect1_reserved22"] . ']';
		}
		
		
		if (strtolower($result["effect2_reserved13"]) == 'maxhp') {
			$foodstat2 = translate('STR_HP', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'phyattack') {
			$foodstat2 = translate('STR_TOOLTIP_SKILL_STAT_PHYATTACK', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'critical') {
			$foodstat2 = translate('STR_CRITICAL', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'hitaccuracy') {
			$foodstat2 = translate('STR_TOOLTIP_SKILL_STAT_HITACCURACY', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'maxmp') {
			$foodstat2 = translate('STR_MP', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'dodge') {
			$foodstat2 = translate('STR_DODGE', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'maxfp') {
			$foodstat2 = translate('STR_TOOLTIP_FLY_TIME', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'flyspeed') {
			$foodstat2 = translate('STR_TOOLTIP_RIDE_FLY_SPEED', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'hpregen') {
			$foodstat2 = translate('STR_TOOLTIP_SKILL_STAT_HPREGEN', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'mpregen') {
			$foodstat2 = translate('STR_TOOLTIP_SKILL_STAT_MPREGEN', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'magicalhitaccuracy') {
			$foodstat2 = translate('STR_MAGICAL_HIT_ACCURACY', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'magicalresist') {
			$foodstat2 = translate('STR_MAGIC_DEFENSE', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'magicalskillboost') {
			$foodstat2 = translate('STR_MAGICAL_SKILL_BOOST', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'speed') {
			$foodstat2 = translate('STR_TOOLTIP_SKILL_STAT_SPEED', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'magicalskillboostresist') {
			$foodstat2 = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_SKILL_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'attackdelay') {
			$foodstat2 = translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'elementaldefendall') {
			$foodstat2 = translate('STR_TOOLTIP_SKILL_STAT_ED_ALL', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'magicalcriticalreducerate') {
			$foodstat2 = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'elementaldefendair') {
			$foodstat2 = translate('STR_TOOLTIP_SKILL_STAT_ED_AIR', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'magicalcritical') {
			$foodstat2 = translate('STR_TOOLTIP_SKILL_STAT_MAGCRITICAL', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'physicalcriticalreducerate') {
			$foodstat2 = translate('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'boostcastingtime') {
			$foodstat2 = translate('STR_BOOSTCASTINGTIME', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'elementaldefendwater') {
			$foodstat2 = translate('STR_TOOLTIP_SKILL_STAT_ED_WATER', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'elementaldefendearth') {
			$foodstat2 = translate('STR_TOOLTIP_SKILL_STAT_ED_EARTH', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'elementaldefendfire') {
			$foodstat2 = translate('STR_TOOLTIP_SKILL_STAT_ED_FIRE', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'healskillboost') {
			$foodstat2 = translate('STR_TOOLTIP_SKILL_STAT_HEAL_BOOST', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'physicalpowerboost') {
			$foodstat2 = translate('STR_PHYSICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'magicalpowerboost') {
			$foodstat2 = translate('STR_MAGICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'physicalpowerboostresist') {
			$foodstat2 = translate('STR_PHYSICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'magicalpowerboostresist') {
			$foodstat2 = translate('STR_MAGICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'parry') {
			$foodstat2 = translate('STR_PARRY', $language);
		}elseif (strtolower($result["effect2_reserved13"]) == 'block') {
			$foodstat2 = translate('STR_BLOCK', $language);
		}else {
			$foodstat2 = '[Unknown - Please, Report. ' . $result["effect2_reserved13"] . ']';
		}
		
		
		if (strtolower($result["effect2_reserved14"]) == 'maxhp') {
			$foodstat2b = translate('STR_HP', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'phyattack') {
			$foodstat2b = translate('STR_TOOLTIP_SKILL_STAT_PHYATTACK', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'critical') {
			$foodstat2b = translate('STR_CRITICAL', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'hitaccuracy') {
			$foodstat2b = translate('STR_TOOLTIP_SKILL_STAT_HITACCURACY', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'maxmp') {
			$foodstat2b = translate('STR_MP', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'dodge') {
			$foodstat2b = translate('STR_DODGE', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'maxfp') {
			$foodstat2b = translate('STR_TOOLTIP_FLY_TIME', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'flyspeed') {
			$foodstat2b = translate('STR_TOOLTIP_RIDE_FLY_SPEED', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'hpregen') {
			$foodstat2b = translate('STR_TOOLTIP_SKILL_STAT_HPREGEN', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'mpregen') {
			$foodstat2b = translate('STR_TOOLTIP_SKILL_STAT_MPREGEN', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'magicalhitaccuracy') {
			$foodstat2b = translate('STR_MAGICAL_HIT_ACCURACY', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'magicalresist') {
			$foodstat2b = translate('STR_MAGIC_DEFENSE', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'magicalskillboost') {
			$foodstat2b = translate('STR_MAGICAL_SKILL_BOOST', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'speed') {
			$foodstat2b = translate('STR_TOOLTIP_SKILL_STAT_SPEED', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'magicalskillboostresist') {
			$foodstat2b = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_SKILL_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'attackdelay') {
			$foodstat2b = translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'elementaldefendall') {
			$foodstat2b = translate('STR_TOOLTIP_SKILL_STAT_ED_ALL', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'magicalcriticalreducerate') {
			$foodstat2b = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'elementaldefendair') {
			$foodstat2b = translate('STR_TOOLTIP_SKILL_STAT_ED_AIR', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'magicalcritical') {
			$foodstat2b = translate('STR_TOOLTIP_SKILL_STAT_MAGCRITICAL', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'physicalcriticalreducerate') {
			$foodstat2b = translate('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'boostcastingtime') {
			$foodstat2b = translate('STR_BOOSTCASTINGTIME', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'elementaldefendwater') {
			$foodstat2b = translate('STR_TOOLTIP_SKILL_STAT_ED_WATER', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'elementaldefendearth') {
			$foodstat2b = translate('STR_TOOLTIP_SKILL_STAT_ED_EARTH', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'elementaldefendfire') {
			$foodstat2b = translate('STR_TOOLTIP_SKILL_STAT_ED_FIRE', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'healskillboost') {
			$foodstat2b = translate('STR_TOOLTIP_SKILL_STAT_HEAL_BOOST', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'physicalpowerboost') {
			$foodstat2b = translate('STR_PHYSICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'magicalpowerboost') {
			$foodstat2b = translate('STR_MAGICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'physicalpowerboostresist') {
			$foodstat2b = translate('STR_PHYSICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'magicalpowerboostresist') {
			$foodstat2b = translate('STR_MAGICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'parry') {
			$foodstat2b = translate('STR_PARRY', $language);
		}elseif (strtolower($result["effect2_reserved14"]) == 'block') {
			$foodstat2b = translate('STR_BLOCK', $language);
		}else {
			$foodstat2b = '[Unknown - Please, Report. ' . $result["effect2_reserved14"] . ']';
		}
		
		
		if (strtolower($result["effect2_reserved18"]) == 'maxhp') {
			$foodstat2c = translate('STR_HP', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'phyattack') {
			$foodstat2c = translate('STR_TOOLTIP_SKILL_STAT_PHYATTACK', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'critical') {
			$foodstat2c = translate('STR_CRITICAL', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'hitaccuracy') {
			$foodstat2c = translate('STR_TOOLTIP_SKILL_STAT_HITACCURACY', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'maxmp') {
			$foodstat2c = translate('STR_MP', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'dodge') {
			$foodstat2c = translate('STR_DODGE', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'maxfp') {
			$foodstat2c = translate('STR_TOOLTIP_FLY_TIME', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'flyspeed') {
			$foodstat2c = translate('STR_TOOLTIP_RIDE_FLY_SPEED', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'hpregen') {
			$foodstat2c = translate('STR_TOOLTIP_SKILL_STAT_HPREGEN', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'mpregen') {
			$foodstat2c = translate('STR_TOOLTIP_SKILL_STAT_MPREGEN', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'magicalhitaccuracy') {
			$foodstat2c = translate('STR_MAGICAL_HIT_ACCURACY', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'magicalresist') {
			$foodstat2c = translate('STR_MAGIC_DEFENSE', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'magicalskillboost') {
			$foodstat2c = translate('STR_MAGICAL_SKILL_BOOST', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'speed') {
			$foodstat2c = translate('STR_TOOLTIP_SKILL_STAT_SPEED', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'magicalskillboostresist') {
			$foodstat2c = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_SKILL_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'attackdelay') {
			$foodstat2c = translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'elementaldefendall') {
			$foodstat2c = translate('STR_TOOLTIP_SKILL_STAT_ED_ALL', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'magicalcriticalreducerate') {
			$foodstat2c = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'elementaldefendair') {
			$foodstat2c = translate('STR_TOOLTIP_SKILL_STAT_ED_AIR', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'magicalcritical') {
			$foodstat2c = translate('STR_TOOLTIP_SKILL_STAT_MAGCRITICAL', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'physicalcriticalreducerate') {
			$foodstat2c = translate('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'boostcastingtime') {
			$foodstat2c = translate('STR_BOOSTCASTINGTIME', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'elementaldefendwater') {
			$foodstat2c = translate('STR_TOOLTIP_SKILL_STAT_ED_WATER', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'elementaldefendearth') {
			$foodstat2c = translate('STR_TOOLTIP_SKILL_STAT_ED_EARTH', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'elementaldefendfire') {
			$foodstat2c = translate('STR_TOOLTIP_SKILL_STAT_ED_FIRE', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'healskillboost') {
			$foodstat2c = translate('STR_TOOLTIP_SKILL_STAT_HEAL_BOOST', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'physicalpowerboost') {
			$foodstat2c = translate('STR_PHYSICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'magicalpowerboost') {
			$foodstat2c = translate('STR_MAGICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'physicalpowerboostresist') {
			$foodstat2c = translate('STR_PHYSICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'magicalpowerboostresist') {
			$foodstat2c = translate('STR_MAGICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'parry') {
			$foodstat2c = translate('STR_PARRY', $language);
		}elseif (strtolower($result["effect2_reserved18"]) == 'block') {
			$foodstat2c = translate('STR_BLOCK', $language);
		}else {
			$foodstat2c = '[Unknown - Please, Report. ' . $result["effect2_reserved18"] . ']';
		}
		
		
		if (strtolower($result["effect2_reserved22"]) == 'maxhp') {
			$foodstat2d = translate('STR_HP', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'phyattack') {
			$foodstat2d = translate('STR_TOOLTIP_SKILL_STAT_PHYATTACK', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'critical') {
			$foodstat2d = translate('STR_CRITICAL', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'hitaccuracy') {
			$foodstat2d = translate('STR_TOOLTIP_SKILL_STAT_HITACCURACY', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'maxmp') {
			$foodstat2d = translate('STR_MP', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'dodge') {
			$foodstat2d = translate('STR_DODGE', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'maxfp') {
			$foodstat2d = translate('STR_TOOLTIP_FLY_TIME', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'flyspeed') {
			$foodstat2d = translate('STR_TOOLTIP_RIDE_FLY_SPEED', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'hpregen') {
			$foodstat2d = translate('STR_TOOLTIP_SKILL_STAT_HPREGEN', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'mpregen') {
			$foodstat2d = translate('STR_TOOLTIP_SKILL_STAT_MPREGEN', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'magicalhitaccuracy') {
			$foodstat2d = translate('STR_MAGICAL_HIT_ACCURACY', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'magicalresist') {
			$foodstat2d = translate('STR_MAGIC_DEFENSE', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'magicalskillboost') {
			$foodstat2d = translate('STR_MAGICAL_SKILL_BOOST', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'speed') {
			$foodstat2d = translate('STR_TOOLTIP_SKILL_STAT_SPEED', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'magicalskillboostresist') {
			$foodstat2d = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_SKILL_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'attackdelay') {
			$foodstat2d = translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'elementaldefendall') {
			$foodstat2d = translate('STR_TOOLTIP_SKILL_STAT_ED_ALL', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'magicalcriticalreducerate') {
			$foodstat2d = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'elementaldefendair') {
			$foodstat2d = translate('STR_TOOLTIP_SKILL_STAT_ED_AIR', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'magicalcritical') {
			$foodstat2d = translate('STR_TOOLTIP_SKILL_STAT_MAGCRITICAL', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'physicalcriticalreducerate') {
			$foodstat2d = translate('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'boostcastingtime') {
			$foodstat2d = translate('STR_BOOSTCASTINGTIME', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'elementaldefendwater') {
			$foodstat2d = translate('STR_TOOLTIP_SKILL_STAT_ED_WATER', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'elementaldefendearth') {
			$foodstat2d = translate('STR_TOOLTIP_SKILL_STAT_ED_EARTH', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'elementaldefendfire') {
			$foodstat2d = translate('STR_TOOLTIP_SKILL_STAT_ED_FIRE', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'healskillboost') {
			$foodstat2d = translate('STR_TOOLTIP_SKILL_STAT_HEAL_BOOST', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'physicalpowerboost') {
			$foodstat2d = translate('STR_PHYSICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'magicalpowerboost') {
			$foodstat2d = translate('STR_MAGICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'physicalpowerboostresist') {
			$foodstat2d = translate('STR_PHYSICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'magicalpowerboostresist') {
			$foodstat2d = translate('STR_MAGICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'parry') {
			$foodstat2d = translate('STR_PARRY', $language);
		}elseif (strtolower($result["effect2_reserved22"]) == 'block') {
			$foodstat2d = translate('STR_BLOCK', $language);
		}else {
			$foodstat2d = '[Unknown - Please, Report. ' . $result["effect2_reserved22"] . ']';
		}
		
		
		if (strtolower($result["effect3_reserved13"]) == 'maxhp') {
			$foodstat3 = translate('STR_HP', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'phyattack') {
			$foodstat3 = translate('STR_TOOLTIP_SKILL_STAT_PHYATTACK', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'critical') {
			$foodstat3 = translate('STR_CRITICAL', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'hitaccuracy') {
			$foodstat3 = translate('STR_TOOLTIP_SKILL_STAT_HITACCURACY', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'maxmp') {
			$foodstat3 = translate('STR_MP', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'dodge') {
			$foodstat3 = translate('STR_DODGE', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'maxfp') {
			$foodstat3 = translate('STR_TOOLTIP_FLY_TIME', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'flyspeed') {
			$foodstat3 = translate('STR_TOOLTIP_RIDE_FLY_SPEED', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'hpregen') {
			$foodstat3 = translate('STR_TOOLTIP_SKILL_STAT_HPREGEN', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'mpregen') {
			$foodstat3 = translate('STR_TOOLTIP_SKILL_STAT_MPREGEN', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'magicalhitaccuracy') {
			$foodstat3 = translate('STR_MAGICAL_HIT_ACCURACY', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'magicalresist') {
			$foodstat3 = translate('STR_MAGIC_DEFENSE', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'magicalskillboost') {
			$foodstat3 = translate('STR_MAGICAL_SKILL_BOOST', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'speed') {
			$foodstat3 = translate('STR_TOOLTIP_SKILL_STAT_SPEED', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'magicalskillboostresist') {
			$foodstat3 = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_SKILL_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'attackdelay') {
			$foodstat3 = translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'elementaldefendall') {
			$foodstat3 = translate('STR_TOOLTIP_SKILL_STAT_ED_ALL', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'magicalcriticalreducerate') {
			$foodstat3 = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'elementaldefendair') {
			$foodstat3 = translate('STR_TOOLTIP_SKILL_STAT_ED_AIR', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'magicalcritical') {
			$foodstat3 = translate('STR_TOOLTIP_SKILL_STAT_MAGCRITICAL', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'physicalcriticalreducerate') {
			$foodstat3 = translate('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'boostcastingtime') {
			$foodstat3 = translate('STR_BOOSTCASTINGTIME', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'elementaldefendwater') {
			$foodstat3 = translate('STR_TOOLTIP_SKILL_STAT_ED_WATER', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'elementaldefendearth') {
			$foodstat3 = translate('STR_TOOLTIP_SKILL_STAT_ED_EARTH', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'elementaldefendfire') {
			$foodstat3 = translate('STR_TOOLTIP_SKILL_STAT_ED_FIRE', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'healskillboost') {
			$foodstat3 = translate('STR_TOOLTIP_SKILL_STAT_HEAL_BOOST', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'physicalpowerboost') {
			$foodstat3 = translate('STR_PHYSICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'magicalpowerboost') {
			$foodstat3 = translate('STR_MAGICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'physicalpowerboostresist') {
			$foodstat3 = translate('STR_PHYSICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'magicalpowerboostresist') {
			$foodstat3 = translate('STR_MAGICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'parry') {
			$foodstat3 = translate('STR_PARRY', $language);
		}elseif (strtolower($result["effect3_reserved13"]) == 'block') {
			$foodstat3 = translate('STR_BLOCK', $language);
		}else {
			$foodstat3 = '[Unknown - Please, Report. ' . $result["effect3_reserved13"] . ']';
		}
		
		
		if (strtolower($result["effect3_reserved14"]) == 'maxhp') {
			$foodstat3b = translate('STR_HP', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'phyattack') {
			$foodstat3b = translate('STR_TOOLTIP_SKILL_STAT_PHYATTACK', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'critical') {
			$foodstat3b = translate('STR_CRITICAL', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'hitaccuracy') {
			$foodstat3b = translate('STR_TOOLTIP_SKILL_STAT_HITACCURACY', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'maxmp') {
			$foodstat3b = translate('STR_MP', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'dodge') {
			$foodstat3b = translate('STR_DODGE', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'maxfp') {
			$foodstat3b = translate('STR_TOOLTIP_FLY_TIME', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'flyspeed') {
			$foodstat3b = translate('STR_TOOLTIP_RIDE_FLY_SPEED', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'hpregen') {
			$foodstat3b = translate('STR_TOOLTIP_SKILL_STAT_HPREGEN', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'mpregen') {
			$foodstat3b = translate('STR_TOOLTIP_SKILL_STAT_MPREGEN', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'magicalhitaccuracy') {
			$foodstat3b = translate('STR_MAGICAL_HIT_ACCURACY', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'magicalresist') {
			$foodstat3b = translate('STR_MAGIC_DEFENSE', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'magicalskillboost') {
			$foodstat3b = translate('STR_MAGICAL_SKILL_BOOST', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'speed') {
			$foodstat3b = translate('STR_TOOLTIP_SKILL_STAT_SPEED', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'magicalskillboostresist') {
			$foodstat3b = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_SKILL_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'attackdelay') {
			$foodstat3b = translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'elementaldefendall') {
			$foodstat3b = translate('STR_TOOLTIP_SKILL_STAT_ED_ALL', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'magicalcriticalreducerate') {
			$foodstat3b = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'elementaldefendair') {
			$foodstat3b = translate('STR_TOOLTIP_SKILL_STAT_ED_AIR', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'magicalcritical') {
			$foodstat3b = translate('STR_TOOLTIP_SKILL_STAT_MAGCRITICAL', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'physicalcriticalreducerate') {
			$foodstat3b = translate('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'boostcastingtime') {
			$foodstat3b = translate('STR_BOOSTCASTINGTIME', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'elementaldefendwater') {
			$foodstat3b = translate('STR_TOOLTIP_SKILL_STAT_ED_WATER', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'elementaldefendearth') {
			$foodstat3b = translate('STR_TOOLTIP_SKILL_STAT_ED_EARTH', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'elementaldefendfire') {
			$foodstat3b = translate('STR_TOOLTIP_SKILL_STAT_ED_FIRE', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'healskillboost') {
			$foodstat3b = translate('STR_TOOLTIP_SKILL_STAT_HEAL_BOOST', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'physicalpowerboost') {
			$foodstat3b = translate('STR_PHYSICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'magicalpowerboost') {
			$foodstat3b = translate('STR_MAGICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'physicalpowerboostresist') {
			$foodstat3b = translate('STR_PHYSICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'magicalpowerboostresist') {
			$foodstat3b = translate('STR_MAGICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'parry') {
			$foodstat3b = translate('STR_PARRY', $language);
		}elseif (strtolower($result["effect3_reserved14"]) == 'block') {
			$foodstat3b = translate('STR_BLOCK', $language);
		}else {
			$foodstat3b = '[Unknown - Please, Report. ' . $result["effect3_reserved14"] . ']';
		}
		
		
		if (strtolower($result["effect3_reserved18"]) == 'maxhp') {
			$foodstat3c = translate('STR_HP', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'phyattack') {
			$foodstat3c = translate('STR_TOOLTIP_SKILL_STAT_PHYATTACK', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'critical') {
			$foodstat3c = translate('STR_CRITICAL', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'hitaccuracy') {
			$foodstat3c = translate('STR_TOOLTIP_SKILL_STAT_HITACCURACY', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'maxmp') {
			$foodstat3c = translate('STR_MP', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'dodge') {
			$foodstat3c = translate('STR_DODGE', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'maxfp') {
			$foodstat3c = translate('STR_TOOLTIP_FLY_TIME', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'flyspeed') {
			$foodstat3c = translate('STR_TOOLTIP_RIDE_FLY_SPEED', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'hpregen') {
			$foodstat3c = translate('STR_TOOLTIP_SKILL_STAT_HPREGEN', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'mpregen') {
			$foodstat3c = translate('STR_TOOLTIP_SKILL_STAT_MPREGEN', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'magicalhitaccuracy') {
			$foodstat3c = translate('STR_MAGICAL_HIT_ACCURACY', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'magicalresist') {
			$foodstat3c = translate('STR_MAGIC_DEFENSE', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'magicalskillboost') {
			$foodstat3c = translate('STR_MAGICAL_SKILL_BOOST', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'speed') {
			$foodstat3c = translate('STR_TOOLTIP_SKILL_STAT_SPEED', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'magicalskillboostresist') {
			$foodstat3c = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_SKILL_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'attackdelay') {
			$foodstat3c = translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'elementaldefendall') {
			$foodstat3c = translate('STR_TOOLTIP_SKILL_STAT_ED_ALL', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'magicalcriticalreducerate') {
			$foodstat3c = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'elementaldefendair') {
			$foodstat3c = translate('STR_TOOLTIP_SKILL_STAT_ED_AIR', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'magicalcritical') {
			$foodstat3c = translate('STR_TOOLTIP_SKILL_STAT_MAGCRITICAL', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'physicalcriticalreducerate') {
			$foodstat3c = translate('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'boostcastingtime') {
			$foodstat3c = translate('STR_BOOSTCASTINGTIME', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'elementaldefendwater') {
			$foodstat3c = translate('STR_TOOLTIP_SKILL_STAT_ED_WATER', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'elementaldefendearth') {
			$foodstat3c = translate('STR_TOOLTIP_SKILL_STAT_ED_EARTH', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'elementaldefendfire') {
			$foodstat3c = translate('STR_TOOLTIP_SKILL_STAT_ED_FIRE', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'healskillboost') {
			$foodstat3c = translate('STR_TOOLTIP_SKILL_STAT_HEAL_BOOST', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'physicalpowerboost') {
			$foodstat3c = translate('STR_PHYSICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'magicalpowerboost') {
			$foodstat3c = translate('STR_MAGICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'physicalpowerboostresist') {
			$foodstat3c = translate('STR_PHYSICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'magicalpowerboostresist') {
			$foodstat3c = translate('STR_MAGICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'parry') {
			$foodstat3c = translate('STR_PARRY', $language);
		}elseif (strtolower($result["effect3_reserved18"]) == 'block') {
			$foodstat3c = translate('STR_BLOCK', $language);
		}else {
			$foodstat3c = '[Unknown - Please, Report. ' . $result["effect3_reserved18"] . ']';
		}
		
		
		if (strtolower($result["effect3_reserved22"]) == 'maxhp') {
			$foodstat3d = translate('STR_HP', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'phyattack') {
			$foodstat3d = translate('STR_TOOLTIP_SKILL_STAT_PHYATTACK', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'critical') {
			$foodstat3d = translate('STR_CRITICAL', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'hitaccuracy') {
			$foodstat3d = translate('STR_TOOLTIP_SKILL_STAT_HITACCURACY', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'maxmp') {
			$foodstat3d = translate('STR_MP', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'dodge') {
			$foodstat3d = translate('STR_DODGE', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'maxfp') {
			$foodstat3d = translate('STR_TOOLTIP_FLY_TIME', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'flyspeed') {
			$foodstat3d = translate('STR_TOOLTIP_RIDE_FLY_SPEED', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'hpregen') {
			$foodstat3d = translate('STR_TOOLTIP_SKILL_STAT_HPREGEN', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'mpregen') {
			$foodstat3d = translate('STR_TOOLTIP_SKILL_STAT_MPREGEN', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'magicalhitaccuracy') {
			$foodstat3d = translate('STR_MAGICAL_HIT_ACCURACY', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'magicalresist') {
			$foodstat3d = translate('STR_MAGIC_DEFENSE', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'magicalskillboost') {
			$foodstat3d = translate('STR_MAGICAL_SKILL_BOOST', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'speed') {
			$foodstat3d = translate('STR_TOOLTIP_SKILL_STAT_SPEED', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'magicalskillboostresist') {
			$foodstat3d = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_SKILL_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'attackdelay') {
			$foodstat3d = translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'elementaldefendall') {
			$foodstat3d = translate('STR_TOOLTIP_SKILL_STAT_ED_ALL', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'magicalcriticalreducerate') {
			$foodstat3d = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'elementaldefendair') {
			$foodstat3d = translate('STR_TOOLTIP_SKILL_STAT_ED_AIR', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'magicalcritical') {
			$foodstat3d = translate('STR_TOOLTIP_SKILL_STAT_MAGCRITICAL', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'physicalcriticalreducerate') {
			$foodstat3d = translate('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'boostcastingtime') {
			$foodstat3d = translate('STR_BOOSTCASTINGTIME', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'elementaldefendwater') {
			$foodstat3d = translate('STR_TOOLTIP_SKILL_STAT_ED_WATER', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'elementaldefendearth') {
			$foodstat3d = translate('STR_TOOLTIP_SKILL_STAT_ED_EARTH', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'elementaldefendfire') {
			$foodstat3d = translate('STR_TOOLTIP_SKILL_STAT_ED_FIRE', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'healskillboost') {
			$foodstat3d = translate('STR_TOOLTIP_SKILL_STAT_HEAL_BOOST', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'physicalpowerboost') {
			$foodstat3d = translate('STR_PHYSICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'magicalpowerboost') {
			$foodstat3d = translate('STR_MAGICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'physicalpowerboostresist') {
			$foodstat3d = translate('STR_PHYSICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'magicalpowerboostresist') {
			$foodstat3d = translate('STR_MAGICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'parry') {
			$foodstat3d = translate('STR_PARRY', $language);
		}elseif (strtolower($result["effect3_reserved22"]) == 'block') {
			$foodstat3d = translate('STR_BLOCK', $language);
		}else {
			$foodstat3d = '[Unknown - Please, Report. ' . $result["effect3_reserved22"] . ']';
		}
		
		
		if (strtolower($result["effect4_reserved13"]) == 'maxhp') {
			$foodstat4 = translate('STR_HP', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'phyattack') {
			$foodstat4 = translate('STR_TOOLTIP_SKILL_STAT_PHYATTACK', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'critical') {
			$foodstat4 = translate('STR_CRITICAL', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'hitaccuracy') {
			$foodstat4 = translate('STR_TOOLTIP_SKILL_STAT_HITACCURACY', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'maxmp') {
			$foodstat4 = translate('STR_MP', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'dodge') {
			$foodstat4 = translate('STR_DODGE', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'maxfp') {
			$foodstat4 = translate('STR_TOOLTIP_FLY_TIME', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'flyspeed') {
			$foodstat4 = translate('STR_TOOLTIP_RIDE_FLY_SPEED', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'hpregen') {
			$foodstat4 = translate('STR_TOOLTIP_SKILL_STAT_HPREGEN', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'mpregen') {
			$foodstat4 = translate('STR_TOOLTIP_SKILL_STAT_MPREGEN', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'magicalhitaccuracy') {
			$foodstat4 = translate('STR_MAGICAL_HIT_ACCURACY', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'magicalresist') {
			$foodstat4 = translate('STR_MAGIC_DEFENSE', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'magicalskillboost') {
			$foodstat4 = translate('STR_MAGICAL_SKILL_BOOST', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'speed') {
			$foodstat4 = translate('STR_TOOLTIP_SKILL_STAT_SPEED', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'magicalskillboostresist') {
			$foodstat4 = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_SKILL_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'attackdelay') {
			$foodstat4 = translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'elementaldefendall') {
			$foodstat4 = translate('STR_TOOLTIP_SKILL_STAT_ED_ALL', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'magicalcriticalreducerate') {
			$foodstat4 = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'elementaldefendair') {
			$foodstat4 = translate('STR_TOOLTIP_SKILL_STAT_ED_AIR', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'magicalcritical') {
			$foodstat4 = translate('STR_TOOLTIP_SKILL_STAT_MAGCRITICAL', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'physicalcriticalreducerate') {
			$foodstat4 = translate('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'boostcastingtime') {
			$foodstat4 = translate('STR_BOOSTCASTINGTIME', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'elementaldefendwater') {
			$foodstat4 = translate('STR_TOOLTIP_SKILL_STAT_ED_WATER', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'elementaldefendearth') {
			$foodstat4 = translate('STR_TOOLTIP_SKILL_STAT_ED_EARTH', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'elementaldefendfire') {
			$foodstat4 = translate('STR_TOOLTIP_SKILL_STAT_ED_FIRE', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'healskillboost') {
			$foodstat4 = translate('STR_TOOLTIP_SKILL_STAT_HEAL_BOOST', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'physicalpowerboost') {
			$foodstat4 = translate('STR_PHYSICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'magicalpowerboost') {
			$foodstat4 = translate('STR_MAGICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'physicalpowerboostresist') {
			$foodstat4 = translate('STR_PHYSICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'magicalpowerboostresist') {
			$foodstat4 = translate('STR_MAGICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'parry') {
			$foodstat4 = translate('STR_PARRY', $language);
		}elseif (strtolower($result["effect4_reserved13"]) == 'block') {
			$foodstat4 = translate('STR_BLOCK', $language);
		}else {
			$foodstat4 = '[Unknown - Please, Report. ' . $result["effect4_reserved13"] . ']';
		}
		
		
		if (strtolower($result["effect4_reserved14"]) == 'maxhp') {
			$foodstat4b = translate('STR_HP', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'phyattack') {
			$foodstat4b = translate('STR_TOOLTIP_SKILL_STAT_PHYATTACK', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'critical') {
			$foodstat4b = translate('STR_CRITICAL', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'hitaccuracy') {
			$foodstat4b = translate('STR_TOOLTIP_SKILL_STAT_HITACCURACY', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'maxmp') {
			$foodstat4b = translate('STR_MP', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'dodge') {
			$foodstat4b = translate('STR_DODGE', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'maxfp') {
			$foodstat4b = translate('STR_TOOLTIP_FLY_TIME', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'flyspeed') {
			$foodstat4b = translate('STR_TOOLTIP_RIDE_FLY_SPEED', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'hpregen') {
			$foodstat4b = translate('STR_TOOLTIP_SKILL_STAT_HPREGEN', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'mpregen') {
			$foodstat4b = translate('STR_TOOLTIP_SKILL_STAT_MPREGEN', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'magicalhitaccuracy') {
			$foodstat4b = translate('STR_MAGICAL_HIT_ACCURACY', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'magicalresist') {
			$foodstat4b = translate('STR_MAGIC_DEFENSE', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'magicalskillboost') {
			$foodstat4b = translate('STR_MAGICAL_SKILL_BOOST', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'speed') {
			$foodstat4b = translate('STR_TOOLTIP_SKILL_STAT_SPEED', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'magicalskillboostresist') {
			$foodstat4b = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_SKILL_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'attackdelay') {
			$foodstat4b = translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'elementaldefendall') {
			$foodstat4b = translate('STR_TOOLTIP_SKILL_STAT_ED_ALL', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'magicalcriticalreducerate') {
			$foodstat4b = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'elementaldefendair') {
			$foodstat4b = translate('STR_TOOLTIP_SKILL_STAT_ED_AIR', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'magicalcritical') {
			$foodstat4b = translate('STR_TOOLTIP_SKILL_STAT_MAGCRITICAL', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'physicalcriticalreducerate') {
			$foodstat4b = translate('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'boostcastingtime') {
			$foodstat4b = translate('STR_BOOSTCASTINGTIME', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'elementaldefendwater') {
			$foodstat4b = translate('STR_TOOLTIP_SKILL_STAT_ED_WATER', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'elementaldefendearth') {
			$foodstat4b = translate('STR_TOOLTIP_SKILL_STAT_ED_EARTH', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'elementaldefendfire') {
			$foodstat4b = translate('STR_TOOLTIP_SKILL_STAT_ED_FIRE', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'healskillboost') {
			$foodstat4b = translate('STR_TOOLTIP_SKILL_STAT_HEAL_BOOST', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'physicalpowerboost') {
			$foodstat4b = translate('STR_PHYSICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'magicalpowerboost') {
			$foodstat4b = translate('STR_MAGICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'physicalpowerboostresist') {
			$foodstat4b = translate('STR_PHYSICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'magicalpowerboostresist') {
			$foodstat4b = translate('STR_MAGICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'parry') {
			$foodstat4b = translate('STR_PARRY', $language);
		}elseif (strtolower($result["effect4_reserved14"]) == 'block') {
			$foodstat4b = translate('STR_BLOCK', $language);
		}else {
			$foodstat4b = '[Unknown - Please, Report. ' . $result["effect4_reserved14"] . ']';
		}
		
		
		if (strtolower($result["effect4_reserved18"]) == 'maxhp') {
			$foodstat4c = translate('STR_HP', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'phyattack') {
			$foodstat4c = translate('STR_TOOLTIP_SKILL_STAT_PHYATTACK', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'critical') {
			$foodstat4c = translate('STR_CRITICAL', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'hitaccuracy') {
			$foodstat4c = translate('STR_TOOLTIP_SKILL_STAT_HITACCURACY', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'maxmp') {
			$foodstat4c = translate('STR_MP', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'dodge') {
			$foodstat4c = translate('STR_DODGE', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'maxfp') {
			$foodstat4c = translate('STR_TOOLTIP_FLY_TIME', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'flyspeed') {
			$foodstat4c = translate('STR_TOOLTIP_RIDE_FLY_SPEED', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'hpregen') {
			$foodstat4c = translate('STR_TOOLTIP_SKILL_STAT_HPREGEN', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'mpregen') {
			$foodstat4c = translate('STR_TOOLTIP_SKILL_STAT_MPREGEN', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'magicalhitaccuracy') {
			$foodstat4c = translate('STR_MAGICAL_HIT_ACCURACY', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'magicalresist') {
			$foodstat4c = translate('STR_MAGIC_DEFENSE', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'magicalskillboost') {
			$foodstat4c = translate('STR_MAGICAL_SKILL_BOOST', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'speed') {
			$foodstat4c = translate('STR_TOOLTIP_SKILL_STAT_SPEED', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'magicalskillboostresist') {
			$foodstat4c = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_SKILL_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'attackdelay') {
			$foodstat4c = translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'elementaldefendall') {
			$foodstat4c = translate('STR_TOOLTIP_SKILL_STAT_ED_ALL', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'magicalcriticalreducerate') {
			$foodstat4c = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'elementaldefendair') {
			$foodstat4c = translate('STR_TOOLTIP_SKILL_STAT_ED_AIR', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'magicalcritical') {
			$foodstat4c = translate('STR_TOOLTIP_SKILL_STAT_MAGCRITICAL', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'physicalcriticalreducerate') {
			$foodstat4c = translate('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'boostcastingtime') {
			$foodstat4c = translate('STR_BOOSTCASTINGTIME', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'elementaldefendwater') {
			$foodstat4c = translate('STR_TOOLTIP_SKILL_STAT_ED_WATER', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'elementaldefendearth') {
			$foodstat4c = translate('STR_TOOLTIP_SKILL_STAT_ED_EARTH', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'elementaldefendfire') {
			$foodstat4c = translate('STR_TOOLTIP_SKILL_STAT_ED_FIRE', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'healskillboost') {
			$foodstat4c = translate('STR_TOOLTIP_SKILL_STAT_HEAL_BOOST', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'physicalpowerboost') {
			$foodstat4c = translate('STR_PHYSICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'magicalpowerboost') {
			$foodstat4c = translate('STR_MAGICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'physicalpowerboostresist') {
			$foodstat4c = translate('STR_PHYSICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'magicalpowerboostresist') {
			$foodstat4c = translate('STR_MAGICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'parry') {
			$foodstat4c = translate('STR_PARRY', $language);
		}elseif (strtolower($result["effect4_reserved18"]) == 'block') {
			$foodstat4c = translate('STR_BLOCK', $language);
		}else {
			$foodstat4c = '[Unknown - Please, Report. ' . $result["effect4_reserved18"] . ']';
		}
		
		
		if (strtolower($result["effect4_reserved22"]) == 'maxhp') {
			$foodstat4d = translate('STR_HP', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'phyattack') {
			$foodstat4d = translate('STR_TOOLTIP_SKILL_STAT_PHYATTACK', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'critical') {
			$foodstat4d = translate('STR_CRITICAL', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'hitaccuracy') {
			$foodstat4d = translate('STR_TOOLTIP_SKILL_STAT_HITACCURACY', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'maxmp') {
			$foodstat4d = translate('STR_MP', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'dodge') {
			$foodstat4d = translate('STR_DODGE', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'maxfp') {
			$foodstat4d = translate('STR_TOOLTIP_FLY_TIME', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'flyspeed') {
			$foodstat4d = translate('STR_TOOLTIP_RIDE_FLY_SPEED', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'hpregen') {
			$foodstat4d = translate('STR_TOOLTIP_SKILL_STAT_HPREGEN', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'mpregen') {
			$foodstat4d = translate('STR_TOOLTIP_SKILL_STAT_MPREGEN', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'magicalhitaccuracy') {
			$foodstat4d = translate('STR_MAGICAL_HIT_ACCURACY', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'magicalresist') {
			$foodstat4d = translate('STR_MAGIC_DEFENSE', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'magicalskillboost') {
			$foodstat4d = translate('STR_MAGICAL_SKILL_BOOST', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'speed') {
			$foodstat4d = translate('STR_TOOLTIP_SKILL_STAT_SPEED', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'magicalskillboostresist') {
			$foodstat4d = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_SKILL_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'attackdelay') {
			$foodstat4d = translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'elementaldefendall') {
			$foodstat4d = translate('STR_TOOLTIP_SKILL_STAT_ED_ALL', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'magicalcriticalreducerate') {
			$foodstat4d = translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'elementaldefendair') {
			$foodstat4d = translate('STR_TOOLTIP_SKILL_STAT_ED_AIR', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'magicalcritical') {
			$foodstat4d = translate('STR_TOOLTIP_SKILL_STAT_MAGCRITICAL', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'physicalcriticalreducerate') {
			$foodstat4d = translate('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_REDUCE_RATE', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'boostcastingtime') {
			$foodstat4d = translate('STR_BOOSTCASTINGTIME', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'elementaldefendwater') {
			$foodstat4d = translate('STR_TOOLTIP_SKILL_STAT_ED_WATER', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'elementaldefendearth') {
			$foodstat4d = translate('STR_TOOLTIP_SKILL_STAT_ED_EARTH', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'elementaldefendfire') {
			$foodstat4d = translate('STR_TOOLTIP_SKILL_STAT_ED_FIRE', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'healskillboost') {
			$foodstat4d = translate('STR_TOOLTIP_SKILL_STAT_HEAL_BOOST', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'physicalpowerboost') {
			$foodstat4d = translate('STR_PHYSICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'magicalpowerboost') {
			$foodstat4d = translate('STR_MAGICAL_POWER_BOOST', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'physicalpowerboostresist') {
			$foodstat4d = translate('STR_PHYSICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'magicalpowerboostresist') {
			$foodstat4d = translate('STR_MAGICAL_POWER_BOOST_RESIST', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'parry') {
			$foodstat4d = translate('STR_PARRY', $language);
		}elseif (strtolower($result["effect4_reserved22"]) == 'block') {
			$foodstat4d = translate('STR_BLOCK', $language);
		}else {
			$foodstat4d = '[Unknown - Please, Report. ' . $result["effect4_reserved22"] . ']';
		}
		
		
		
		
		
		
		if ($result["effect1_reserved1"] > 0) {
			$food1 = $result["effect1_reserved1"] * $activation_level;
			$flyingpot =$result["effect1_reserved1"];
		}else {
			$food1 = $result["effect1_reserved2"] * $activation_level;
			$flyingpot =$result["effect1_reserved2"];
			$scroll = $result["effect1_reserved2"];
		}
		
		
		
		
		if ($result["effect2_reserved1"] > 0) {
			$food2 = $result["effect2_reserved1"] * $activation_level;
		}else {
			$food2 = $result["effect2_reserved2"] * $activation_level;
		}
		
		if ($result["effect3_reserved1"] > 0) {
			$food3 = $result["effect3_reserved1"] * $activation_level;
		}else {
			$food3 = $result["effect3_reserved2"] * $activation_level;
		}
		
		if ($result["effect4_reserved1"] > 0) {
			$food4 = $result["effect4_reserved1"] * $activation_level;
		}else {
			$food4 = $result["effect4_reserved2"] * $activation_level;
		}
		
		
		if ($result["effect4_reserved1"] > 0) {
			$food4 = $result["effect4_reserved1"] * $activation_level;
		}else {
			$food4 = $result["effect4_reserved2"] * $activation_level;
		}
		
		
		
		
		
		

			$itemdesc = strtr($description, array(
					"<" => '&lt;',
					"[%e1.StatUp.Value]"	=> $food1,
					"[%e1.StatUp.Value2]"	=> $result["effect1_reserved4"] * $activation_level,
					"[%e1.StatUp.Value3]"	=> $result["effect1_reserved16"],
					"[%e1.StatUp.Value4]"	=> $result["effect1_reserved20"],
					
					"[%e2.StatUp.Value]"	=> $food2,
					"[%e2.StatUp.Value2]"	=> $result["effect2_reserved4"] * $activation_level,
					"[%e2.StatUp.Value3]"	=> $result["effect2_reserved16"],
					"[%e2.StatUp.Value4]"	=> $result["effect2_reserved20"],
					
					"[%e3.StatUp.Value]"	=> $food3,					
					"[%e3.StatUp.Value2]"	=> $result["effect3_reserved4"] * $activation_level,
					"[%e3.StatUp.Value3]"	=> $result["effect3_reserved16"],
					"[%e3.StatUp.Value4]"	=> $result["effect3_reserved20"],
					
					"[%e4.StatUp.Value]"	=> $food4,
					"[%e4.StatUp.Value2]"	=> $result["effect4_reserved4"] * $activation_level,
					"[%e4.StatUp.Value3]"	=> $result["effect4_reserved16"],
					"[%e4.StatUp.Value4]"	=> $result["effect4_reserved20"],
					
					
					"[%e1.StatUp.RemainTime]"	=> $result["effect1_remain2"]/60000 . translate('STR_MINUTE', $language),
					"[%e1.ShapeChange.RemainTime]"	=> $result["effect1_remain2"]/60000 . translate('STR_MINUTE', $language),
					
					
					"[%e1.StatUp.StatName]"		=> $foodstat1,
					"[%e1.StatUp.StatName2]"	=> $foodstat1b,
					"[%e1.StatUp.StatName3]"	=> $foodstat1c,
					"[%e1.StatUp.StatName4]"	=> $foodstat1d,
					
					"[%e2.StatUp.StatName]"		=> $foodstat2,
					"[%e2.StatUp.StatName2]"	=> $foodstat2b,
					"[%e2.StatUp.StatName3]"	=> $foodstat2c,
					"[%e2.StatUp.StatName4]"	=> $foodstat2d,
					
					"[%e3.StatUp.StatName]"		=> $foodstat3,
					"[%e3.StatUp.StatName2]"	=> $foodstat3b,
					"[%e3.StatUp.StatName3]"	=> $foodstat3c,
					"[%e3.StatUp.StatName4]"	=> $foodstat3d,
					
					"[%e4.StatUp.StatName]"		=> $foodstat4,
					"[%e4.StatUp.StatName2]"	=> $foodstat4b,
					"[%e4.StatUp.StatName3]"	=> $foodstat4c,
					"[%e4.StatUp.StatName4]"	=> $foodstat4d,
					
					
					"[%e1.Shield.CoverValue]"	=> $result["effect1_reserved2"] * $activation_level,
					"[%e1.Shield.ShieldValue]"	=> $result["effect1_reserved8"] * $activation_level,
					"[%e1.ProcHeal_Instant.Heal]"		=> $result["effect1_reserved2"],
					"[%e2.ProcHeal_Instant.Heal]"		=> $result["effect2_reserved2"],
					"[%e1.ProcMpHeal_Instant.Heal]"		=> $result["effect1_reserved2"],
					"[%e2.ProcMpHeal_Instant.Heal]"		=> $result["effect2_reserved2"],
					"[%e3.Heal.CheckTimeHeal]"			=> $result["effect3_reserved9"],
					"[%e4.MpHeal.CheckTimeHeal]"		=> $result["effect4_reserved9"],
					"[%e3.Heal.CheckTime]"				=> $result["effect4_checktime"]/1000 . translate('STR_SECOND', $language),
					"[%e3.Heal.RemainTime]"				=> $result["effect3_remain2"]/1000 . translate('STR_SECOND', $language),
					"[%e2.MPHeal.CheckTimeHeal]"		=> $result["effect2_reserved9"],
					"[%e2.MpHeal.CheckTime]"			=> $result["effect2_checktime"]/1000 . translate('STR_SECOND', $language),
					"[%e2.MPHeal.RemainTime]"			=> $result["effect2_remain2"]/1000 . translate('STR_SECOND', $language),
					"[%e2.Heal.CheckTimeHeal]"			=> $result["effect2_reserved9"],
					"[%e2.Heal.CheckTime]"				=> $result["effect2_checktime"]/1000 . translate('STR_SECOND', $language),
					"[%e2.Heal.RemainTime]"				=> $result["effect2_remain2"]/1000 . translate('STR_SECOND', $language),
					"[%e1.ProcFpHeal_Instant.Heal]"		=> $flyingpot,
					"[%e1.Shield.RemainTime]"			=> $result["effect1_remain2"]/1000 . translate('STR_SECOND', $language),
					
				));
            $return_description = '<div class="wrap basicitem_desc" style=""><p class="desc">' . $itemdesc . '</p></div>';
        
	
	
	
	
	
	return $return_description;
}