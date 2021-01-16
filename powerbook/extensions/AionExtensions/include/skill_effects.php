<?php

		if (strtolower($skillrow["effect1_reserved13"]) == 'maxhp') {
			$statname1 =trans('STR_HP', lang());
		}
		if (strtolower($skillrow["effect1_reserved13"]) == 'phyattack') {
			$statname1 =trans('STR_TOOLTIP_SKILL_STAT_PHYATTACK', lang());
		}
		if (strtolower($skillrow["effect1_reserved13"]) == 'critical') {
			$statname1 =trans('STR_CRITICAL', lang());
		}
		if (strtolower($skillrow["effect1_reserved13"]) == 'hitaccuracy') {
			$statname1 =trans('STR_TOOLTIP_SKILL_STAT_HITACCURACY', lang());
		}
		if (strtolower($skillrow["effect1_reserved13"]) == 'maxmp') {
			$statname1 =trans('STR_MP', lang());
		}
		if (strtolower($skillrow["effect1_reserved13"]) == 'dodge') {
			$statname1 =trans('STR_DODGE', lang());
		}
		if (strtolower($skillrow["effect1_reserved13"]) == 'maxfp') {
			$statname1 =trans('STR_TOOLTIP_FLY_TIME', lang());
		}
		if (strtolower($skillrow["effect1_reserved13"]) == 'flyspeed') {
			$statname1 = trans('STR_TOOLTIP_RIDE_FLY_SPEED', lang());
		}
		if (strtolower($skillrow["effect1_reserved13"]) == 'hpregen') {
			$statname1 = trans('STR_TOOLTIP_SKILL_STAT_HPREGEN', lang());
		}
		if (strtolower($skillrow["effect1_reserved13"]) == 'mpregen') {
			$statname1 = trans('STR_TOOLTIP_SKILL_STAT_MPREGEN', lang());
		}
		if (strtolower($skillrow["effect1_reserved13"]) == 'magicalhitaccuracy') {
			$statname1 = trans('STR_MAGICAL_HIT_ACCURACY', lang());
		}
		if (strtolower($skillrow["effect1_reserved13"]) == 'magicalresist') {
			$statname1 = trans('STR_MAGIC_DEFENSE', lang());
		}
		if (strtolower($skillrow["effect1_reserved13"]) == 'magicalskillboost') {
			$statname1 = trans('STR_MAGICAL_SKILL_BOOST', lang());
		}
		if (strtolower($skillrow["effect1_reserved13"]) == 'speed') {
			$statname1 = trans('STR_TOOLTIP_SKILL_STAT_SPEED', lang());
		}
		if (strtolower($skillrow["effect1_reserved13"]) == 'magicalskillboostresist') {
			$statname1 = trans('STR_TOOLTIP_SKILL_STAT_MAGICAL_SKILL_BOOST_RESIST', lang());
		}
		if (strtolower($skillrow["effect1_reserved13"]) == 'attackdelay') {
			$statname1 = trans('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', lang());
		}
		if (strtolower($skillrow["effect1_reserved13"]) == 'elementaldefendall') {
			$statname1 = trans('STR_TOOLTIP_SKILL_STAT_ED_ALL', lang());
		}
		if (strtolower($skillrow["effect1_reserved13"]) == 'magicalcriticalreducerate') {
			$statname1 = trans('STR_TOOLTIP_SKILL_STAT_MAGICAL_CRITICAL_REDUCE_RATE', lang());
		}
		if (strtolower($skillrow["effect1_reserved13"]) == 'elementaldefendair') {
			$statname1 = trans('STR_TOOLTIP_SKILL_STAT_ED_AIR', lang());
		}
		if (strtolower($skillrow["effect1_reserved13"]) == 'magicalcritical') {
			$statname1 = trans('STR_TOOLTIP_SKILL_STAT_MAGCRITICAL', lang());
		}
		if (strtolower($skillrow["effect1_reserved13"]) == 'physicalcriticalreducerate') {
			$statname1 = trans('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_REDUCE_RATE', lang());
		}
		if (strtolower($skillrow["effect1_reserved13"]) == 'boostcastingtime') {
			$statname1 = trans('STR_BOOSTCASTINGTIME', lang());
		}
		if (strtolower($skillrow["effect1_reserved13"]) == 'elementaldefendwater') {
			$statname1 = trans('STR_TOOLTIP_SKILL_STAT_ED_WATER', lang());
		}
		if (strtolower($skillrow["effect1_reserved13"]) == 'elementaldefendearth') {
			$statname1 = trans('STR_TOOLTIP_SKILL_STAT_ED_EARTH', lang());
		}
		if (strtolower($skillrow["effect1_reserved13"]) == 'elementaldefendfire') {
			$statname1 = trans('STR_TOOLTIP_SKILL_STAT_ED_FIRE', lang());
		}
		if (strtolower($skillrow["effect1_reserved13"]) == 'healskillboost') {
			$statname1 = trans('STR_TOOLTIP_SKILL_STAT_HEAL_BOOST', lang());
		}
		if (strtolower($skillrow["effect1_reserved13"]) == 'arroot') {
			$statname1 = trans('STR_TOOLTIP_SKILL_STAT_ARROOT', lang());
		}
		if (strtolower($skillrow["effect1_reserved13"]) == 'arsnare') {
			$statname1 = trans('STR_TOOLTIP_SKILL_STAT_ARSNARE', lang());
		}
		if (strtolower($skillrow["effect1_reserved13"]) == 'physicaldefend') {
			$statname1 = trans('STR_TOOLTIP_SKILL_STAT_PHYDEFEND', lang());
		}
		if (strtolower($skillrow["effect1_reserved13"]) == 'parry') {
			$statname1 = trans('STR_TOOLTIP_SKILL_STAT_PARRY', lang());
		}
		if (strtolower($skillrow["effect1_reserved13"]) == 'openaerial') {
			$statname1 = trans('STR_TOOLTIP_SKILL_EFFECT_OPENAERIAL', lang());
		}
		if (strtolower($skillrow["effect1_reserved13"]) == 'pvpdefendratio') {
			$statname1 = trans('STR_TOOLTIP_SKILL_EFFECT_OPENAERIAL', lang());
		}
		if (strtolower($skillrow["effect1_reserved13"]) == 'spin') {
			$statname1 = trans('STR_TOOLTIP_SKILL_EFFECT_SPIN', lang());
		}
		if (strtolower($skillrow["effect1_reserved13"]) == 'allspeed') {
			$statname1 = trans('STR_TOOLTIP_SKILL_STAT_ALLSPEED', lang());
		}
		if (strtolower($skillrow["effect1_reserved13"]) == 'physicalcriticaldamagereduce') {
			$statname1 = trans('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_DAMAGE_REDUCE', lang());
		}
		if (strtolower($skillrow["effect1_reserved13"]) == 'stumble') {
			$statname1 = trans('STR_TOOLTIP_SKILL_EFFECT_STUMBLE_N', lang());
		}
		
		
		
		
		
		if (strtolower($skillrow["effect1_reserved14"]) == 'maxhp') {
			$statname1b = trans('STR_HP', lang());
		}
		if (strtolower($skillrow["effect1_reserved14"]) == 'phyattack') {
			$statname1b = trans('STR_TOOLTIP_SKILL_STAT_PHYATTACK', lang());
		}
		if (strtolower($skillrow["effect1_reserved14"]) == 'critical') {
			$statname1b = trans('STR_CRITICAL', lang());
		}
		if (strtolower($skillrow["effect1_reserved14"]) == 'hitaccuracy') {
			$statname1b = trans('STR_TOOLTIP_SKILL_STAT_HITACCURACY', lang());
		}
		if (strtolower($skillrow["effect1_reserved14"]) == 'maxmp') {
			$statname1b = trans('STR_MP', lang());
		}
		if (strtolower($skillrow["effect1_reserved14"]) == 'dodge') {
			$statname1b = trans('STR_DODGE', lang());
		}
		if (strtolower($skillrow["effect1_reserved14"]) == 'maxfp') {
			$statname1b = trans('STR_TOOLTIP_FLY_TIME', lang());
		}
		if (strtolower($skillrow["effect1_reserved14"]) == 'flyspeed') {
			$statname1b = trans('STR_TOOLTIP_RIDE_FLY_SPEED', lang());
		}
		if (strtolower($skillrow["effect1_reserved14"]) == 'hpregen') {
			$statname1b = trans('STR_TOOLTIP_SKILL_STAT_HPREGEN', lang());
		}
		if (strtolower($skillrow["effect1_reserved14"]) == 'mpregen') {
			$statname1b = trans('STR_TOOLTIP_SKILL_STAT_MPREGEN', lang());
		}
		if (strtolower($skillrow["effect1_reserved14"]) == 'magicalhitaccuracy') {
			$statname1b = trans('STR_MAGICAL_HIT_ACCURACY', lang());
		}
		if (strtolower($skillrow["effect1_reserved14"]) == 'magicalresist') {
			$statname1b = trans('STR_MAGIC_DEFENSE', lang());
		}
		if (strtolower($skillrow["effect1_reserved14"]) == 'magicalskillboost') {
			$statname1b = trans('STR_MAGICAL_SKILL_BOOST', lang());
		}
		if (strtolower($skillrow["effect1_reserved14"]) == 'speed') {
			$statname1b = trans('STR_TOOLTIP_SKILL_STAT_SPEED', lang());
		}
		if (strtolower($skillrow["effect1_reserved14"]) == 'magicalskillboostresist') {
			$statname1b = trans('STR_TOOLTIP_SKILL_STAT_MAGICAL_SKILL_BOOST_RESIST', lang());
		}
		if (strtolower($skillrow["effect1_reserved14"]) == 'attackdelay') {
			$statname1b = trans('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', lang());
		}
		if (strtolower($skillrow["effect1_reserved14"]) == 'elementaldefendall') {
			$statname1b = trans('STR_TOOLTIP_SKILL_STAT_ED_ALL', lang());
		}
		if (strtolower($skillrow["effect1_reserved14"]) == 'magicalcriticalreducerate') {
			$statname1b = trans('STR_TOOLTIP_SKILL_STAT_MAGICAL_CRITICAL_REDUCE_RATE', lang());
		}
		if (strtolower($skillrow["effect1_reserved14"]) == 'elementaldefendair') {
			$statname1b = trans('STR_TOOLTIP_SKILL_STAT_ED_AIR', lang());
		}
		if (strtolower($skillrow["effect1_reserved14"]) == 'magicalcritical') {
			$statname1b = trans('STR_TOOLTIP_SKILL_STAT_MAGCRITICAL', lang());
		}
		if (strtolower($skillrow["effect1_reserved14"]) == 'physicalcriticalreducerate') {
			$statname1b = trans('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_REDUCE_RATE', lang());
		}
		if (strtolower($skillrow["effect1_reserved14"]) == 'boostcastingtime') {
			$statname1b = trans('STR_BOOSTCASTINGTIME', lang());
		}
		if (strtolower($skillrow["effect1_reserved14"]) == 'elementaldefendwater') {
			$statname1b = trans('STR_TOOLTIP_SKILL_STAT_ED_WATER', lang());
		}
		if (strtolower($skillrow["effect1_reserved14"]) == 'elementaldefendearth') {
			$statname1b = trans('STR_TOOLTIP_SKILL_STAT_ED_EARTH', lang());
		}
		if (strtolower($skillrow["effect1_reserved14"]) == 'elementaldefendfire') {
			$statname1b = trans('STR_TOOLTIP_SKILL_STAT_ED_FIRE', lang());
		}
		if (strtolower($skillrow["effect1_reserved14"]) == 'healskillboost') {
			$statname1b = trans('STR_TOOLTIP_SKILL_STAT_HEAL_BOOST', lang());
		}	
		if (strtolower($skillrow["effect1_reserved14"]) == 'arroot') {
			$statname1b = trans('STR_TOOLTIP_SKILL_STAT_ARROOT', lang());
		}
		if (strtolower($skillrow["effect1_reserved14"]) == 'arsnare') {
			$statname1b = trans('STR_TOOLTIP_SKILL_STAT_ARSNARE', lang());
		}
		if (strtolower($skillrow["effect1_reserved14"]) == 'physicaldefend') {
			$statname1b = trans('STR_TOOLTIP_SKILL_STAT_PHYDEFEND', lang());
		}
		if (strtolower($skillrow["effect1_reserved14"]) == 'parry') {
			$statname1b = trans('STR_TOOLTIP_SKILL_STAT_PARRY', lang());
		}
		if (strtolower($skillrow["effect1_reserved14"]) == 'openaerial') {
			$statname1b = trans('STR_TOOLTIP_SKILL_EFFECT_OPENAERIAL', lang());
		}
		if (strtolower($skillrow["effect1_reserved14"]) == 'spin') {
			$statname1b = trans('STR_TOOLTIP_SKILL_EFFECT_SPIN', lang());
		}
		if (strtolower($skillrow["effect1_reserved14"]) == 'allspeed') {
			$statname1b = trans('STR_TOOLTIP_SKILL_STAT_ALLSPEED', lang());
		}
		if (strtolower($skillrow["effect1_reserved14"]) == 'physicalcriticaldamagereduce') {
			$statname1b = trans('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_DAMAGE_REDUCE', lang());
		}
		if (strtolower($skillrow["effect1_reserved14"]) == 'stumble') {
			$statname1b = trans('STR_TOOLTIP_SKILL_EFFECT_STUMBLE_N', lang());
		}
		
		
		
		
		
		
		if (strtolower($skillrow["effect1_reserved18"]) == 'maxhp') {
			$statname1c = trans('STR_HP', lang());
		}
		if (strtolower($skillrow["effect1_reserved18"]) == 'phyattack') {
			$statname1c = trans('STR_TOOLTIP_SKILL_STAT_PHYATTACK', lang());
		}
		if (strtolower($skillrow["effect1_reserved18"]) == 'critical') {
			$statname1c = trans('STR_CRITICAL', lang());
		}
		if (strtolower($skillrow["effect1_reserved18"]) == 'hitaccuracy') {
			$statname1c = trans('STR_TOOLTIP_SKILL_STAT_HITACCURACY', lang());
		}
		if (strtolower($skillrow["effect1_reserved18"]) == 'maxmp') {
			$statname1c = trans('STR_MP', lang());
		}
		if (strtolower($skillrow["effect1_reserved18"]) == 'dodge') {
			$statname1c = trans('STR_DODGE', lang());
		}
		if (strtolower($skillrow["effect1_reserved18"]) == 'maxfp') {
			$statname1c = trans('STR_TOOLTIP_FLY_TIME', lang());
		}
		if (strtolower($skillrow["effect1_reserved18"]) == 'flyspeed') {
			$statname1c = trans('STR_TOOLTIP_RIDE_FLY_SPEED', lang());
		}
		if (strtolower($skillrow["effect1_reserved18"]) == 'hpregen') {
			$statname1c = trans('STR_TOOLTIP_SKILL_STAT_HPREGEN', lang());
		}
		if (strtolower($skillrow["effect1_reserved18"]) == 'mpregen') {
			$statname1c = trans('STR_TOOLTIP_SKILL_STAT_MPREGEN', lang());
		}
		if (strtolower($skillrow["effect1_reserved18"]) == 'magicalhitaccuracy') {
			$statname1c = trans('STR_MAGICAL_HIT_ACCURACY', lang());
		}
		if (strtolower($skillrow["effect1_reserved18"]) == 'magicalresist') {
			$statname1c = trans('STR_MAGIC_DEFENSE', lang());
		}
		if (strtolower($skillrow["effect1_reserved18"]) == 'magicalskillboost') {
			$statname1c = trans('STR_MAGICAL_SKILL_BOOST', lang());
		}
		if (strtolower($skillrow["effect1_reserved18"]) == 'speed') {
			$statname1c = trans('STR_TOOLTIP_SKILL_STAT_SPEED', lang());
		}
		if (strtolower($skillrow["effect1_reserved18"]) == 'magicalskillboostresist') {
			$statname1c = trans('STR_TOOLTIP_SKILL_STAT_MAGICAL_SKILL_BOOST_RESIST', lang());
		}
		if (strtolower($skillrow["effect1_reserved18"]) == 'attackdelay') {
			$statname1c = trans('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', lang());
		}
		if (strtolower($skillrow["effect1_reserved18"]) == 'elementaldefendall') {
			$statname1c = trans('STR_TOOLTIP_SKILL_STAT_ED_ALL', lang());
		}
		if (strtolower($skillrow["effect1_reserved18"]) == 'magicalcriticalreducerate') {
			$statname1c = trans('STR_TOOLTIP_SKILL_STAT_MAGICAL_CRITICAL_REDUCE_RATE', lang());
		}
		if (strtolower($skillrow["effect1_reserved18"]) == 'elementaldefendair') {
			$statname1c = trans('STR_TOOLTIP_SKILL_STAT_ED_AIR', lang());
		}
		if (strtolower($skillrow["effect1_reserved18"]) == 'magicalcritical') {
			$statname1c = trans('STR_TOOLTIP_SKILL_STAT_MAGCRITICAL', lang());
		}
		if (strtolower($skillrow["effect1_reserved18"]) == 'physicalcriticalreducerate') {
			$statname1c = trans('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_REDUCE_RATE', lang());
		}
		if (strtolower($skillrow["effect1_reserved18"]) == 'boostcastingtime') {
			$statname1c = trans('STR_BOOSTCASTINGTIME', lang());
		}
		if (strtolower($skillrow["effect1_reserved18"]) == 'elementaldefendwater') {
			$statname1c = trans('STR_TOOLTIP_SKILL_STAT_ED_WATER', lang());
		}
		if (strtolower($skillrow["effect1_reserved18"]) == 'elementaldefendearth') {
			$statname1c = trans('STR_TOOLTIP_SKILL_STAT_ED_EARTH', lang());
		}
		if (strtolower($skillrow["effect1_reserved18"]) == 'elementaldefendfire') {
			$statname1c = trans('STR_TOOLTIP_SKILL_STAT_ED_FIRE', lang());
		}
		if (strtolower($skillrow["effect1_reserved18"]) == 'healskillboost') {
			$statname1c = trans('STR_TOOLTIP_SKILL_STAT_HEAL_BOOST', lang());
		}	
		if (strtolower($skillrow["effect1_reserved18"]) == 'arroot') {
			$statname1c = trans('STR_TOOLTIP_SKILL_STAT_ARROOT', lang());
		}
		if (strtolower($skillrow["effect1_reserved18"]) == 'arsnare') {
			$statname1c = trans('STR_TOOLTIP_SKILL_STAT_ARSNARE', lang());
		}
		if (strtolower($skillrow["effect1_reserved18"]) == 'physicaldefend') {
			$statname1c = trans('STR_TOOLTIP_SKILL_STAT_PHYDEFEND', lang());
		}
		if (strtolower($skillrow["effect1_reserved18"]) == 'parry') {
			$statname1c = trans('STR_TOOLTIP_SKILL_STAT_PARRY', lang());
		}
		if (strtolower($skillrow["effect1_reserved18"]) == 'openaerial') {
			$statname1c = trans('STR_TOOLTIP_SKILL_EFFECT_OPENAERIAL', lang());
		}
		if (strtolower($skillrow["effect1_reserved18"]) == 'arstunlike') {
			$statname1c = trans('STR_TOOLTIP_SKILL_STAT_ARSTUN_LIKE', lang());
		}
		if (strtolower($skillrow["effect1_reserved18"]) == 'spin') {
			$statname1c = trans('STR_TOOLTIP_SKILL_EFFECT_SPIN', lang());
		}
		if (strtolower($skillrow["effect1_reserved18"]) == 'allspeed') {
			$statname1c = trans('STR_TOOLTIP_SKILL_STAT_ALLSPEED', lang());
		}
		if (strtolower($skillrow["effect1_reserved18"]) == 'physicalcriticaldamagereduce') {
			$statname1c = trans('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_DAMAGE_REDUCE', lang());
		}
		if (strtolower($skillrow["effect1_reserved18"]) == 'stumble') {
			$statname1c = trans('STR_TOOLTIP_SKILL_EFFECT_STUMBLE_N', lang());
		}
		
		
		
		
		if (strtolower($skillrow["effect1_reserved22"]) == 'maxhp') {
			$statname1d = trans('STR_HP', lang());
		}
		if (strtolower($skillrow["effect1_reserved22"]) == 'phyattack') {
			$statname1d = trans('STR_TOOLTIP_SKILL_STAT_PHYATTACK', lang());
		}
		if (strtolower($skillrow["effect1_reserved22"]) == 'critical') {
			$statname1d = trans('STR_CRITICAL', lang());
		}
		if (strtolower($skillrow["effect1_reserved22"]) == 'hitaccuracy') {
			$statname1d = trans('STR_TOOLTIP_SKILL_STAT_HITACCURACY', lang());
		}
		if (strtolower($skillrow["effect1_reserved22"]) == 'maxmp') {
			$statname1d = trans('STR_MP', lang());
		}
		if (strtolower($skillrow["effect1_reserved22"]) == 'dodge') {
			$statname1d = trans('STR_DODGE', lang());
		}
		if (strtolower($skillrow["effect1_reserved22"]) == 'maxfp') {
			$statname1d = trans('STR_TOOLTIP_FLY_TIME', lang());
		}
		if (strtolower($skillrow["effect1_reserved22"]) == 'flyspeed') {
			$statname1d = trans('STR_TOOLTIP_RIDE_FLY_SPEED', lang());
		}
		if (strtolower($skillrow["effect1_reserved22"]) == 'hpregen') {
			$statname1d = trans('STR_TOOLTIP_SKILL_STAT_HPREGEN', lang());
		}
		if (strtolower($skillrow["effect1_reserved22"]) == 'mpregen') {
			$statname1d = trans('STR_TOOLTIP_SKILL_STAT_MPREGEN', lang());
		}
		if (strtolower($skillrow["effect1_reserved22"]) == 'magicalhitaccuracy') {
			$statname1d = trans('STR_MAGICAL_HIT_ACCURACY', lang());
		}
		if (strtolower($skillrow["effect1_reserved22"]) == 'magicalresist') {
			$statname1d = trans('STR_MAGIC_DEFENSE', lang());
		}
		if (strtolower($skillrow["effect1_reserved22"]) == 'magicalskillboost') {
			$statname1d = trans('STR_MAGICAL_SKILL_BOOST', lang());
		}
		if (strtolower($skillrow["effect1_reserved22"]) == 'speed') {
			$statname1d = trans('STR_TOOLTIP_SKILL_STAT_SPEED', lang());
		}
		if (strtolower($skillrow["effect1_reserved22"]) == 'magicalskillboostresist') {
			$statname1d = trans('STR_TOOLTIP_SKILL_STAT_MAGICAL_SKILL_BOOST_RESIST', lang());
		}
		if (strtolower($skillrow["effect1_reserved22"]) == 'attackdelay') {
			$statname1d = trans('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', lang());
		}
		if (strtolower($skillrow["effect1_reserved22"]) == 'elementaldefendall') {
			$statname1d = trans('STR_TOOLTIP_SKILL_STAT_ED_ALL', lang());
		}
		if (strtolower($skillrow["effect1_reserved22"]) == 'magicalcriticalreducerate') {
			$statname1d = trans('STR_TOOLTIP_SKILL_STAT_MAGICAL_CRITICAL_REDUCE_RATE', lang());
		}
		if (strtolower($skillrow["effect1_reserved22"]) == 'elementaldefendair') {
			$statname1d = trans('STR_TOOLTIP_SKILL_STAT_ED_AIR', lang());
		}
		if (strtolower($skillrow["effect1_reserved22"]) == 'magicalcritical') {
			$statname1d = trans('STR_TOOLTIP_SKILL_STAT_MAGCRITICAL', lang());
		}
		if (strtolower($skillrow["effect1_reserved22"]) == 'physicalcriticalreducerate') {
			$statname1d = trans('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_REDUCE_RATE', lang());
		}
		if (strtolower($skillrow["effect1_reserved22"]) == 'boostcastingtime') {
			$statname1d = trans('STR_BOOSTCASTINGTIME', lang());
		}
		if (strtolower($skillrow["effect1_reserved22"]) == 'elementaldefendwater') {
			$statname1d = trans('STR_TOOLTIP_SKILL_STAT_ED_WATER', lang());
		}
		if (strtolower($skillrow["effect1_reserved22"]) == 'elementaldefendearth') {
			$statname1d = trans('STR_TOOLTIP_SKILL_STAT_ED_EARTH', lang());
		}
		if (strtolower($skillrow["effect1_reserved22"]) == 'elementaldefendfire') {
			$statname1d = trans('STR_TOOLTIP_SKILL_STAT_ED_FIRE', lang());
		}
		if (strtolower($skillrow["effect1_reserved22"]) == 'healskillboost') {
			$statname1d = trans('STR_TOOLTIP_SKILL_STAT_HEAL_BOOST', lang());
		}	
		if (strtolower($skillrow["effect1_reserved22"]) == 'arroot') {
			$statname1d = trans('STR_TOOLTIP_SKILL_STAT_ARROOT', lang());
		}
		if (strtolower($skillrow["effect1_reserved22"]) == 'arsnare') {
			$statname1d = trans('STR_TOOLTIP_SKILL_STAT_ARSNARE', lang());
		}
		if (strtolower($skillrow["effect1_reserved22"]) == 'physicaldefend') {
			$statname1d = trans('STR_TOOLTIP_SKILL_STAT_PHYDEFEND', lang());
		}
		if (strtolower($skillrow["effect1_reserved22"]) == 'parry') {
			$statname1d = trans('STR_TOOLTIP_SKILL_STAT_PARRY', lang());
		}
		if (strtolower($skillrow["effect1_reserved22"]) == 'openaerial') {
			$statname1d = trans('STR_TOOLTIP_SKILL_EFFECT_OPENAERIAL', lang());
		}
		if (strtolower($skillrow["effect1_reserved22"]) == 'spin') {
			$statname1d = trans('STR_TOOLTIP_SKILL_EFFECT_SPIN', lang());
		}
		if (strtolower($skillrow["effect1_reserved22"]) == 'allspeed') {
			$statname1d = trans('STR_TOOLTIP_SKILL_STAT_ALLSPEED', lang());
		}
		if (strtolower($skillrow["effect1_reserved22"]) == 'physicalcriticaldamagereduce') {
			$statname1d = trans('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_DAMAGE_REDUCE', lang());
		}
		if (strtolower($skillrow["effect1_reserved22"]) == 'stumble') {
			$statname1d = trans('STR_TOOLTIP_SKILL_EFFECT_STUMBLE_N', lang());
		}
		
		
		
		
		if (strtolower($skillrow["effect2_reserved13"]) == 'maxhp') {
			$statname2 =trans('STR_HP', lang());
		}
		if (strtolower($skillrow["effect2_reserved13"]) == 'phyattack') {
			$statname2 =trans('STR_TOOLTIP_SKILL_STAT_PHYATTACK', lang());
		}
		if (strtolower($skillrow["effect2_reserved13"]) == 'critical') {
			$statname2 =trans('STR_CRITICAL', lang());
		}
		if (strtolower($skillrow["effect2_reserved13"]) == 'hitaccuracy') {
			$statname2 =trans('STR_TOOLTIP_SKILL_STAT_HITACCURACY', lang());
		}
		if (strtolower($skillrow["effect2_reserved13"]) == 'maxmp') {
			$statname2 =trans('STR_MP', lang());
		}
		if (strtolower($skillrow["effect2_reserved13"]) == 'dodge') {
			$statname2 =trans('STR_DODGE', lang());
		}
		if (strtolower($skillrow["effect2_reserved13"]) == 'maxfp') {
			$statname2 =trans('STR_TOOLTIP_FLY_TIME', lang());
		}
		if (strtolower($skillrow["effect2_reserved13"]) == 'flyspeed') {
			$statname2 = trans('STR_TOOLTIP_RIDE_FLY_SPEED', lang());
		}
		if (strtolower($skillrow["effect2_reserved13"]) == 'hpregen') {
			$statname2 = trans('STR_TOOLTIP_SKILL_STAT_HPREGEN', lang());
		}
		if (strtolower($skillrow["effect2_reserved13"]) == 'mpregen') {
			$statname2 = trans('STR_TOOLTIP_SKILL_STAT_MPREGEN', lang());
		}
		if (strtolower($skillrow["effect2_reserved13"]) == 'magicalhitaccuracy') {
			$statname2 = trans('STR_MAGICAL_HIT_ACCURACY', lang());
		}
		if (strtolower($skillrow["effect2_reserved13"]) == 'magicalresist') {
			$statname2 = trans('STR_MAGIC_DEFENSE', lang());
		}
		if (strtolower($skillrow["effect2_reserved13"]) == 'magicalskillboost') {
			$statname2 = trans('STR_MAGICAL_SKILL_BOOST', lang());
		}
		if (strtolower($skillrow["effect2_reserved13"]) == 'speed') {
			$statname2 = trans('STR_TOOLTIP_SKILL_STAT_SPEED', lang());
		}
		if (strtolower($skillrow["effect2_reserved13"]) == 'magicalskillboostresist') {
			$statname2 = trans('STR_TOOLTIP_SKILL_STAT_MAGICAL_SKILL_BOOST_RESIST', lang());
		}
		if (strtolower($skillrow["effect2_reserved13"]) == 'attackdelay') {
			$statname2 = trans('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', lang());
		}
		if (strtolower($skillrow["effect2_reserved13"]) == 'elementaldefendall') {
			$statname2 = trans('STR_TOOLTIP_SKILL_STAT_ED_ALL', lang());
		}
		if (strtolower($skillrow["effect2_reserved13"]) == 'magicalcriticalreducerate') {
			$statname2 = trans('STR_TOOLTIP_SKILL_STAT_MAGICAL_CRITICAL_REDUCE_RATE', lang());
		}
		if (strtolower($skillrow["effect2_reserved13"]) == 'elementaldefendair') {
			$statname2 = trans('STR_TOOLTIP_SKILL_STAT_ED_AIR', lang());
		}
		if (strtolower($skillrow["effect2_reserved13"]) == 'magicalcritical') {
			$statname2 = trans('STR_TOOLTIP_SKILL_STAT_MAGCRITICAL', lang());
		}
		if (strtolower($skillrow["effect2_reserved13"]) == 'physicalcriticalreducerate') {
			$statname2 = trans('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_REDUCE_RATE', lang());
		}
		if (strtolower($skillrow["effect2_reserved13"]) == 'boostcastingtime') {
			$statname2 = trans('STR_BOOSTCASTINGTIME', lang());
		}
		if (strtolower($skillrow["effect2_reserved13"]) == 'elementaldefendwater') {
			$statname2 = trans('STR_TOOLTIP_SKILL_STAT_ED_WATER', lang());
		}
		if (strtolower($skillrow["effect2_reserved13"]) == 'elementaldefendearth') {
			$statname2 = trans('STR_TOOLTIP_SKILL_STAT_ED_EARTH', lang());
		}
		if (strtolower($skillrow["effect2_reserved13"]) == 'elementaldefendfire') {
			$statname2 = trans('STR_TOOLTIP_SKILL_STAT_ED_FIRE', lang());
		}
		if (strtolower($skillrow["effect2_reserved13"]) == 'healskillboost') {
			$statname2 = trans('STR_TOOLTIP_SKILL_STAT_HEAL_BOOST', lang());
		}
		if (strtolower($skillrow["effect2_reserved13"]) == 'arroot') {
			$statname2 = trans('STR_TOOLTIP_SKILL_STAT_ARROOT', lang());
		}
		if (strtolower($skillrow["effect2_reserved13"]) == 'arsnare') {
			$statname2 = trans('STR_TOOLTIP_SKILL_STAT_ARSNARE', lang());
		}
		if (strtolower($skillrow["effect2_reserved13"]) == 'physicaldefend') {
			$statname2 = trans('STR_TOOLTIP_SKILL_STAT_PHYDEFEND', lang());
		}
		if (strtolower($skillrow["effect2_reserved13"]) == 'parry') {
			$statname2 = trans('STR_TOOLTIP_SKILL_STAT_PARRY', lang());
		}
		if (strtolower($skillrow["effect1_reserved2"]) == 'stun') {
			$statname2 .= trans('STR_TOOLTIP_SKILL_ABNORMAL_STUN', lang());
		}
		if (strtolower($skillrow["effect1_reserved3"]) == 'stagger') {
			$statname2 .= ', ' . trans('STR_TOOLTIP_SKILL_EFFECT_STAGGER', lang());
		}
		if (strtolower($skillrow["effect1_reserved4"]) == 'stumble') {
			$statname2 .= ', ' . trans('STR_TOOLTIP_SKILL_EFFECT_STUMBLE_N', lang());
		}
		if (strtolower($skillrow["effect1_reserved5"]) == 'spin') {
			$statname2 .= ', ' . trans('STR_TOOLTIP_SKILL_EFFECT_SPIN', lang());
		}
		if (strtolower($skillrow["effect1_reserved6"]) == 'openaerial') {
			$statname2 .= ', ' . trans('STR_TOOLTIP_SKILL_EFFECT_OPENAERIAL', lang());
		}
		if (strtolower($skillrow["effect2_reserved13"]) == 'openaerial') {
			$statname2 = trans('STR_TOOLTIP_SKILL_EFFECT_OPENAERIAL', lang());
		}
		if (strtolower($skillrow["effect2_reserved13"]) == 'spin') {
			$statname2 = trans('STR_TOOLTIP_SKILL_EFFECT_SPIN', lang());
		}
		if (strtolower($skillrow["effect2_reserved13"]) == 'allspeed') {
			$statname2 = trans('STR_TOOLTIP_SKILL_STAT_ALLSPEED', lang());
		}
		if (strtolower($skillrow["effect2_reserved13"]) == 'physicalcriticaldamagereduce') {
			$statname2 = trans('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_DAMAGE_REDUCE', lang());
		}
		if (strtolower($skillrow["effect2_reserved13"]) == 'stumble') {
			$statname2 = trans('STR_TOOLTIP_SKILL_EFFECT_STUMBLE_N', lang());
		}
		
		
		
		
		
		if (strtolower($skillrow["effect2_reserved14"]) == 'maxhp') {
			$statname2b = trans('STR_HP', lang());
		}
		if (strtolower($skillrow["effect2_reserved14"]) == 'phyattack') {
			$statname2b = trans('STR_TOOLTIP_SKILL_STAT_PHYATTACK', lang());
		}
		if (strtolower($skillrow["effect2_reserved14"]) == 'critical') {
			$statname2b = trans('STR_CRITICAL', lang());
		}
		if (strtolower($skillrow["effect2_reserved14"]) == 'hitaccuracy') {
			$statname2b = trans('STR_TOOLTIP_SKILL_STAT_HITACCURACY', lang());
		}
		if (strtolower($skillrow["effect2_reserved14"]) == 'maxmp') {
			$statname2b = trans('STR_MP', lang());
		}
		if (strtolower($skillrow["effect2_reserved14"]) == 'dodge') {
			$statname2b = trans('STR_DODGE', lang());
		}
		if (strtolower($skillrow["effect2_reserved14"]) == 'maxfp') {
			$statname2b = trans('STR_TOOLTIP_FLY_TIME', lang());
		}
		if (strtolower($skillrow["effect2_reserved14"]) == 'flyspeed') {
			$statname2b = trans('STR_TOOLTIP_RIDE_FLY_SPEED', lang());
		}
		if (strtolower($skillrow["effect2_reserved14"]) == 'hpregen') {
			$statname2b = trans('STR_TOOLTIP_SKILL_STAT_HPREGEN', lang());
		}
		if (strtolower($skillrow["effect2_reserved14"]) == 'mpregen') {
			$statname2b = trans('STR_TOOLTIP_SKILL_STAT_MPREGEN', lang());
		}
		if (strtolower($skillrow["effect2_reserved14"]) == 'magicalhitaccuracy') {
			$statname2b = trans('STR_MAGICAL_HIT_ACCURACY', lang());
		}
		if (strtolower($skillrow["effect2_reserved14"]) == 'magicalresist') {
			$statname2b = trans('STR_MAGIC_DEFENSE', lang());
		}
		if (strtolower($skillrow["effect2_reserved14"]) == 'magicalskillboost') {
			$statname2b = trans('STR_MAGICAL_SKILL_BOOST', lang());
		}
		if (strtolower($skillrow["effect2_reserved14"]) == 'speed') {
			$statname2b = trans('STR_TOOLTIP_SKILL_STAT_SPEED', lang());
		}
		if (strtolower($skillrow["effect2_reserved14"]) == 'magicalskillboostresist') {
			$statname2b = trans('STR_TOOLTIP_SKILL_STAT_MAGICAL_SKILL_BOOST_RESIST', lang());
		}
		if (strtolower($skillrow["effect2_reserved14"]) == 'attackdelay') {
			$statname2b = trans('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', lang());
		}
		if (strtolower($skillrow["effect2_reserved14"]) == 'elementaldefendall') {
			$statname2b = trans('STR_TOOLTIP_SKILL_STAT_ED_ALL', lang());
		}
		if (strtolower($skillrow["effect2_reserved14"]) == 'magicalcriticalreducerate') {
			$statname2b = trans('STR_TOOLTIP_SKILL_STAT_MAGICAL_CRITICAL_REDUCE_RATE', lang());
		}
		if (strtolower($skillrow["effect2_reserved14"]) == 'elementaldefendair') {
			$statname2b = trans('STR_TOOLTIP_SKILL_STAT_ED_AIR', lang());
		}
		if (strtolower($skillrow["effect2_reserved14"]) == 'magicalcritical') {
			$statname2b = trans('STR_TOOLTIP_SKILL_STAT_MAGCRITICAL', lang());
		}
		if (strtolower($skillrow["effect2_reserved14"]) == 'physicalcriticalreducerate') {
			$statname2b = trans('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_REDUCE_RATE', lang());
		}
		if (strtolower($skillrow["effect2_reserved14"]) == 'boostcastingtime') {
			$statname2b = trans('STR_BOOSTCASTINGTIME', lang());
		}
		if (strtolower($skillrow["effect2_reserved14"]) == 'elementaldefendwater') {
			$statname2b = trans('STR_TOOLTIP_SKILL_STAT_ED_WATER', lang());
		}
		if (strtolower($skillrow["effect2_reserved14"]) == 'elementaldefendearth') {
			$statname2b = trans('STR_TOOLTIP_SKILL_STAT_ED_EARTH', lang());
		}
		if (strtolower($skillrow["effect2_reserved14"]) == 'elementaldefendfire') {
			$statname2b = trans('STR_TOOLTIP_SKILL_STAT_ED_FIRE', lang());
		}
		if (strtolower($skillrow["effect2_reserved14"]) == 'healskillboost') {
			$statname2b = trans('STR_TOOLTIP_SKILL_STAT_HEAL_BOOST', lang());
		}	
		if (strtolower($skillrow["effect2_reserved14"]) == 'arroot') {
			$statname2b = trans('STR_TOOLTIP_SKILL_STAT_ARROOT', lang());
		}
		if (strtolower($skillrow["effect2_reserved14"]) == 'arsnare') {
			$statname2b = trans('STR_TOOLTIP_SKILL_STAT_ARSNARE', lang());
		}
		if (strtolower($skillrow["effect2_reserved14"]) == 'physicaldefend') {
			$statname2b = trans('STR_TOOLTIP_SKILL_STAT_PHYDEFEND', lang());
		}
		if (strtolower($skillrow["effect2_reserved14"]) == 'parry') {
			$statname2b = trans('STR_TOOLTIP_SKILL_STAT_PARRY', lang());
		}
		if (strtolower($skillrow["effect2_reserved14"]) == 'openaerial') {
			$statname2b = trans('STR_TOOLTIP_SKILL_EFFECT_OPENAERIAL', lang());
		}
		if (strtolower($skillrow["effect2_reserved14"]) == 'spin') {
			$statname2b = trans('STR_TOOLTIP_SKILL_EFFECT_SPIN', lang());
		}
		if (strtolower($skillrow["effect2_reserved14"]) == 'allspeed') {
			$statname2b = trans('STR_TOOLTIP_SKILL_STAT_ALLSPEED', lang());
		}
		if (strtolower($skillrow["effect2_reserved14"]) == 'physicalcriticaldamagereduce') {
			$statname2b = trans('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_DAMAGE_REDUCE', lang());
		}
		if (strtolower($skillrow["effect2_reserved14"]) == 'stumble') {
			$statname2b = trans('STR_TOOLTIP_SKILL_EFFECT_STUMBLE_N', lang());
		}
		
		
		
		
		if (strtolower($skillrow["effect3_reserved13"]) == 'maxhp') {
			$statname3 =trans('STR_HP', lang());
		}
		if (strtolower($skillrow["effect3_reserved13"]) == 'phyattack') {
			$statname3 =trans('STR_TOOLTIP_SKILL_STAT_PHYATTACK', lang());
		}
		if (strtolower($skillrow["effect3_reserved13"]) == 'critical') {
			$statname3 =trans('STR_CRITICAL', lang());
		}
		if (strtolower($skillrow["effect3_reserved13"]) == 'hitaccuracy') {
			$statname3 =trans('STR_TOOLTIP_SKILL_STAT_HITACCURACY', lang());
		}
		if (strtolower($skillrow["effect3_reserved13"]) == 'maxmp') {
			$statname3 =trans('STR_MP', lang());
		}
		if (strtolower($skillrow["effect3_reserved13"]) == 'dodge') {
			$statname3 =trans('STR_DODGE', lang());
		}
		if (strtolower($skillrow["effect3_reserved13"]) == 'maxfp') {
			$statname3 =trans('STR_TOOLTIP_FLY_TIME', lang());
		}
		if (strtolower($skillrow["effect3_reserved13"]) == 'flyspeed') {
			$statname3 = trans('STR_TOOLTIP_RIDE_FLY_SPEED', lang());
		}
		if (strtolower($skillrow["effect3_reserved13"]) == 'hpregen') {
			$statname3 = trans('STR_TOOLTIP_SKILL_STAT_HPREGEN', lang());
		}
		if (strtolower($skillrow["effect3_reserved13"]) == 'mpregen') {
			$statname3 = trans('STR_TOOLTIP_SKILL_STAT_MPREGEN', lang());
		}
		if (strtolower($skillrow["effect3_reserved13"]) == 'magicalhitaccuracy') {
			$statname3 = trans('STR_MAGICAL_HIT_ACCURACY', lang());
		}
		if (strtolower($skillrow["effect3_reserved13"]) == 'magicalresist') {
			$statname3 = trans('STR_MAGIC_DEFENSE', lang());
		}
		if (strtolower($skillrow["effect3_reserved13"]) == 'magicalskillboost') {
			$statname3 = trans('STR_MAGICAL_SKILL_BOOST', lang());
		}
		if (strtolower($skillrow["effect3_reserved13"]) == 'speed') {
			$statname3 = trans('STR_TOOLTIP_SKILL_STAT_SPEED', lang());
		}
		if (strtolower($skillrow["effect3_reserved13"]) == 'magicalskillboostresist') {
			$statname3 = trans('STR_TOOLTIP_SKILL_STAT_MAGICAL_SKILL_BOOST_RESIST', lang());
		}
		if (strtolower($skillrow["effect3_reserved13"]) == 'attackdelay') {
			$statname3 = trans('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', lang());
		}
		if (strtolower($skillrow["effect3_reserved13"]) == 'elementaldefendall') {
			$statname3 = trans('STR_TOOLTIP_SKILL_STAT_ED_ALL', lang());
		}
		if (strtolower($skillrow["effect3_reserved13"]) == 'magicalcriticalreducerate') {
			$statname3 = trans('STR_TOOLTIP_SKILL_STAT_MAGICAL_CRITICAL_REDUCE_RATE', lang());
		}
		if (strtolower($skillrow["effect3_reserved13"]) == 'elementaldefendair') {
			$statname3 = trans('STR_TOOLTIP_SKILL_STAT_ED_AIR', lang());
		}
		if (strtolower($skillrow["effect3_reserved13"]) == 'magicalcritical') {
			$statname3 = trans('STR_TOOLTIP_SKILL_STAT_MAGCRITICAL', lang());
		}
		if (strtolower($skillrow["effect3_reserved13"]) == 'physicalcriticalreducerate') {
			$statname3 = trans('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_REDUCE_RATE', lang());
		}
		if (strtolower($skillrow["effect3_reserved13"]) == 'boostcastingtime') {
			$statname3 = trans('STR_BOOSTCASTINGTIME', lang());
		}
		if (strtolower($skillrow["effect3_reserved13"]) == 'elementaldefendwater') {
			$statname3 = trans('STR_TOOLTIP_SKILL_STAT_ED_WATER', lang());
		}
		if (strtolower($skillrow["effect3_reserved13"]) == 'elementaldefendearth') {
			$statname3 = trans('STR_TOOLTIP_SKILL_STAT_ED_EARTH', lang());
		}
		if (strtolower($skillrow["effect3_reserved13"]) == 'elementaldefendfire') {
			$statname3 = trans('STR_TOOLTIP_SKILL_STAT_ED_FIRE', lang());
		}
		if (strtolower($skillrow["effect3_reserved13"]) == 'healskillboost') {
			$statname3 = trans('STR_TOOLTIP_SKILL_STAT_HEAL_BOOST', lang());
		}
		if (strtolower($skillrow["effect3_reserved13"]) == 'arroot') {
			$statname3 = trans('STR_TOOLTIP_SKILL_STAT_ARROOT', lang());
		}
		if (strtolower($skillrow["effect3_reserved13"]) == 'arsnare') {
			$statname3 = trans('STR_TOOLTIP_SKILL_STAT_ARSNARE', lang());
		}
		if (strtolower($skillrow["effect3_reserved13"]) == 'physicaldefend') {
			$statname3 = trans('STR_TOOLTIP_SKILL_STAT_PHYDEFEND', lang());
		}
		if (strtolower($skillrow["effect3_reserved13"]) == 'parry') {
			$statname3 = trans('STR_TOOLTIP_SKILL_STAT_PARRY', lang());
		}
		if (strtolower($skillrow["effect3_reserved13"]) == 'openaerial') {
			$statname3 = trans('STR_TOOLTIP_SKILL_EFFECT_OPENAERIAL', lang());
		}
		if (strtolower($skillrow["effect3_reserved13"]) == 'spin') {
			$statname3 = trans('STR_TOOLTIP_SKILL_EFFECT_SPIN', lang());
		}
		if (strtolower($skillrow["effect3_reserved13"]) == 'allspeed') {
			$statname3 = trans('STR_TOOLTIP_SKILL_STAT_ALLSPEED', lang());
		}
		if (strtolower($skillrow["effect3_reserved13"]) == 'physicalcriticaldamagereduce') {
			$statname3 = trans('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_DAMAGE_REDUCE', lang());
		}
		if (strtolower($skillrow["effect3_reserved13"]) == 'stumble') {
			$statname3 = trans('STR_TOOLTIP_SKILL_EFFECT_STUMBLE_N', lang());
		}
		
		
		
		
		
		
		if (strtolower($skillrow["effect3_reserved14"]) == 'maxhp') {
			$statname3b = trans('STR_HP', lang());
		}
		if (strtolower($skillrow["effect3_reserved14"]) == 'phyattack') {
			$statname3b = trans('STR_TOOLTIP_SKILL_STAT_PHYATTACK', lang());
		}
		if (strtolower($skillrow["effect3_reserved14"]) == 'critical') {
			$statname3b = trans('STR_CRITICAL', lang());
		}
		if (strtolower($skillrow["effect3_reserved14"]) == 'hitaccuracy') {
			$statname3b = trans('STR_TOOLTIP_SKILL_STAT_HITACCURACY', lang());
		}
		if (strtolower($skillrow["effect3_reserved14"]) == 'maxmp') {
			$statname3b = trans('STR_MP', lang());
		}
		if (strtolower($skillrow["effect3_reserved14"]) == 'dodge') {
			$statname3b = trans('STR_DODGE', lang());
		}
		if (strtolower($skillrow["effect3_reserved14"]) == 'maxfp') {
			$statname3b = trans('STR_TOOLTIP_FLY_TIME', lang());
		}
		if (strtolower($skillrow["effect3_reserved14"]) == 'flyspeed') {
			$statname3b = trans('STR_TOOLTIP_RIDE_FLY_SPEED', lang());
		}
		if (strtolower($skillrow["effect3_reserved14"]) == 'hpregen') {
			$statname3b = trans('STR_TOOLTIP_SKILL_STAT_HPREGEN', lang());
		}
		if (strtolower($skillrow["effect3_reserved14"]) == 'mpregen') {
			$statname3b = trans('STR_TOOLTIP_SKILL_STAT_MPREGEN', lang());
		}
		if (strtolower($skillrow["effect3_reserved14"]) == 'magicalhitaccuracy') {
			$statname3b = trans('STR_MAGICAL_HIT_ACCURACY', lang());
		}
		if (strtolower($skillrow["effect3_reserved14"]) == 'magicalresist') {
			$statname3b = trans('STR_MAGIC_DEFENSE', lang());
		}
		if (strtolower($skillrow["effect3_reserved14"]) == 'magicalskillboost') {
			$statname3b = trans('STR_MAGICAL_SKILL_BOOST', lang());
		}
		if (strtolower($skillrow["effect3_reserved14"]) == 'speed') {
			$statname3b = trans('STR_TOOLTIP_SKILL_STAT_SPEED', lang());
		}
		if (strtolower($skillrow["effect3_reserved14"]) == 'magicalskillboostresist') {
			$statname3b = trans('STR_TOOLTIP_SKILL_STAT_MAGICAL_SKILL_BOOST_RESIST', lang());
		}
		if (strtolower($skillrow["effect3_reserved14"]) == 'attackdelay') {
			$statname3b = trans('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', lang());
		}
		if (strtolower($skillrow["effect3_reserved14"]) == 'elementaldefendall') {
			$statname3b = trans('STR_TOOLTIP_SKILL_STAT_ED_ALL', lang());
		}
		if (strtolower($skillrow["effect3_reserved14"]) == 'magicalcriticalreducerate') {
			$statname3b = trans('STR_TOOLTIP_SKILL_STAT_MAGICAL_CRITICAL_REDUCE_RATE', lang());
		}
		if (strtolower($skillrow["effect3_reserved14"]) == 'elementaldefendair') {
			$statname3b = trans('STR_TOOLTIP_SKILL_STAT_ED_AIR', lang());
		}
		if (strtolower($skillrow["effect3_reserved14"]) == 'magicalcritical') {
			$statname3b = trans('STR_TOOLTIP_SKILL_STAT_MAGCRITICAL', lang());
		}
		if (strtolower($skillrow["effect3_reserved14"]) == 'physicalcriticalreducerate') {
			$statname3b = trans('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_REDUCE_RATE', lang());
		}
		if (strtolower($skillrow["effect3_reserved14"]) == 'boostcastingtime') {
			$statname3b = trans('STR_BOOSTCASTINGTIME', lang());
		}
		if (strtolower($skillrow["effect3_reserved14"]) == 'elementaldefendwater') {
			$statname3b = trans('STR_TOOLTIP_SKILL_STAT_ED_WATER', lang());
		}
		if (strtolower($skillrow["effect3_reserved14"]) == 'elementaldefendearth') {
			$statname3b = trans('STR_TOOLTIP_SKILL_STAT_ED_EARTH', lang());
		}
		if (strtolower($skillrow["effect3_reserved14"]) == 'elementaldefendfire') {
			$statname3b = trans('STR_TOOLTIP_SKILL_STAT_ED_FIRE', lang());
		}
		if (strtolower($skillrow["effect3_reserved14"]) == 'healskillboost') {
			$statname3b = trans('STR_TOOLTIP_SKILL_STAT_HEAL_BOOST', lang());
		}	
		if (strtolower($skillrow["effect3_reserved14"]) == 'arroot') {
			$statname3b = trans('STR_TOOLTIP_SKILL_STAT_ARROOT', lang());
		}
		if (strtolower($skillrow["effect3_reserved14"]) == 'arsnare') {
			$statname3b = trans('STR_TOOLTIP_SKILL_STAT_ARSNARE', lang());
		}
		if (strtolower($skillrow["effect3_reserved14"]) == 'physicaldefend') {
			$statname3b = trans('STR_TOOLTIP_SKILL_STAT_PHYDEFEND', lang());
		}
		if (strtolower($skillrow["effect3_reserved14"]) == 'parry') {
			$statname3b = trans('STR_TOOLTIP_SKILL_STAT_PARRY', lang());
		}
		if (strtolower($skillrow["effect3_reserved14"]) == 'openaerial') {
			$statname3b = trans('STR_TOOLTIP_SKILL_EFFECT_OPENAERIAL', lang());
		}
		if (strtolower($skillrow["effect3_reserved14"]) == 'spin') {
			$statname3b = trans('STR_TOOLTIP_SKILL_EFFECT_SPIN', lang());
		}
		if (strtolower($skillrow["effect3_reserved14"]) == 'allspeed') {
			$statname3b = trans('STR_TOOLTIP_SKILL_STAT_ALLSPEED', lang());
		}
		if (strtolower($skillrow["effect3_reserved14"]) == 'physicalcriticaldamagereduce') {
			$statname3b = trans('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_DAMAGE_REDUCE', lang());
		}
		if (strtolower($skillrow["effect3_reserved14"]) == 'stumble') {
			$statname3b = trans('STR_TOOLTIP_SKILL_EFFECT_STUMBLE_N', lang());
		}