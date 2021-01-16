<?

        $additionalStats = '';
        $template = '<a href="https://aionpowerbook.com/powerbook/%s">%s</a>&nbsp;%s%s<br>';

        // sprintf($template, <page name>, <field name>, <positive or negative>, $attributeValue)
        $statMap = [
            'maxhp' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'HP', trans('STR_HP', lang()), '+', $attributeValue);
            },
            'maxmp' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'MP', trans('STR_MP', lang()), '+', $attributeValue);
            },
            'phyattack' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Attack', trans('STR_ATTACK', lang()), '+', $attributeValue);
            },
            'maxfp' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Flight Time', trans('STR_TOOLTIP_SKILL_STAT_MAXFLYTIME', lang()), '+', $attributeValue);
            },
            'healskillboost' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Healing Boost', trans('STR_TOOLTIP_SKILL_STAT_HEAL_BOOST', lang()), '+', $attributeValue);
            },
            'hitaccuracy' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Accuracy', trans('STR_TOOLTIP_SKILL_STAT_HITACCURACY', lang()), '+', $attributeValue);
            },
            'physicalcriticalreducerate' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Strike Resist', trans('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_REDUCE_RATE', lang()), '+', $attributeValue);
            },
            'magicalcriticalreducerate' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Spell Resist', trans('STR_TOOLTIP_SKILL_STAT_MAGICAL_CRITICAL_REDUCE_RATE', lang()), '+', $attributeValue);
            },
            'concentration' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Concentration', trans('STR_TOOLTIP_SKILL_STAT_CONCENTRATION', lang()), '+', $attributeValue);
            },
            'dodge' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Evasion', trans('STR_DODGE', lang()), '+', $attributeValue);
            },
            'parry' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Parry', trans('STR_PARRY', lang()), '+', $attributeValue);
            },
            'block' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Block', trans('STR_BLOCK', lang()), '+', $attributeValue);
            },
            'magicalattack' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Magical Attack', trans('STR_TOOLTIP_SKILL_STAT_MAGATTACK', lang()), '+', $attributeValue);
            },
            'arsilence' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Silence Resistance', trans('STR_TOOLTIP_SKILL_STAT_ARSILENCE', lang()), '+', $attributeValue);
            },
            'silence_arp' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Silence Resistance Penetration', trans('STR_TOOLTIP_SKILL_STAT_SILENCE_ARP', lang()), '+', $attributeValue);
            },
            'arparalyze' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Paralysis Resistance', trans('STR_TOOLTIP_SKILL_STAT_ARPARALYZE', lang()), '+', $attributeValue);
            },
            'paralyze_arp' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Paralysis Resistance Penetration', trans('STR_TOOLTIP_SKILL_STAT_PARALYZE_ARP', lang()), '+', $attributeValue);
            },
            'physicalcriticaldamagereduce' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Strike Fortitude', trans('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_DAMAGE_REDUCE', lang()), '+', $attributeValue);
            },
            'physicaldefend' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Physical Def', trans('STR_DEFEND_PHYSICAL', lang()), '+', $attributeValue);
            },
            'magicalresist' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Magic Resist', trans('STR_MAGIC_DEFENSE', lang()), '+', $attributeValue);
            },
            'magicalskillboost' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Magic Boost', trans('STR_MAGICAL_SKILL_BOOST', lang()), '+', $attributeValue);
            },
            'magicalskillboostresist' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Magic Suppression', trans('STR_TOOLTIP_SKILL_STAT_MAGICAL_SKILL_BOOST_RESIST', lang()), '+', $attributeValue);
            },
            'flyspeed' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Flight Speed', trans('STR_TOOLTIP_RIDE_FLY_SPEED', lang()), '+', $attributeValue);
            },
            'elementaldefendair' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Wind Resist', trans('STR_TOOLTIP_SKILL_STAT_ED_AIR', lang()), '+', $attributeValue);
            },
            'elementaldefendwater' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Water Resist', trans('STR_TOOLTIP_SKILL_STAT_ED_WATER', lang()), '+', $attributeValue);
            },
            'elementaldefendearth' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Earth Resist', trans('STR_TOOLTIP_SKILL_STAT_ED_EARTH', lang()), '+', $attributeValue);
            },
			'elementaldefendfire' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Fire Resist', trans('STR_TOOLTIP_SKILL_STAT_ED_FIRE', lang()), '+', $attributeValue);
            },
			'magicalcritical' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Crit Spell', trans('STR_TOOLTIP_SKILL_STAT_MAGCRITICAL', lang()), '+', $attributeValue);
            },
			'boostcastingtime' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Casting Speed', trans('STR_BOOSTCASTINGTIME', lang()), '+', $attributeValue);
            },
			'attackdelay' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Atk Speed', trans('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', lang()), '+', $attributeValue);
            },
			'magicalhitaccuracy' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Magical Acc', trans('STR_MAGICAL_HIT_ACCURACY', lang()), '+', $attributeValue);
            },
			'critical' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Crit Strike', trans('STR_CRITICAL', lang()), '+', $attributeValue);
            },
			'magicaldefend' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Magical Defence', trans('STR_TOOLTIP_SKILL_STAT_MAGICAL_NEW_DEFENCE', lang()), '+', $attributeValue);
            },
			'arstun' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Stun Resist', trans('STR_TOOLTIP_SKILL_STAT_ARSTUN', lang()), '+', $attributeValue);
            },
			'arstumble' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Stumble Resist', trans('STR_TOOLTIP_SKILL_STAT_ARSTUMPLE', lang()), '+', $attributeValue);
            },
			'arstagger' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Knock Back Resist', trans('STR_TOOLTIP_SKILL_STAT_ARSTAGGER', lang()), '+', $attributeValue);
            },
			'aropenareial' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Aether%27s Hold Resist', trans('STR_TOOLTIP_SKILL_STAT_AROPENAREIAL', lang()), '+', $attributeValue);
            },
			'arsnare' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Reduce Speed Resist', trans('STR_TOOLTIP_SKILL_STAT_ARSNARE', lang()), '+', $attributeValue);
            },
			'arslow' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Reduce Attack Speed Resist', trans('STR_TOOLTIP_SKILL_STAT_ARSLOW', lang()), '+', $attributeValue);
            },
			'arspin' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Spin Resist', trans('STR_TOOLTIP_SKILL_STAT_ARSPIN', lang()), '+', $attributeValue);
            },
			'arcurse' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Curse Resist', trans('STR_TOOLTIP_SKILL_STAT_ARCURSE', lang()), '+', $attributeValue);
            },
			'arconfuse' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Confusion Resist', trans('STR_TOOLTIP_SKILL_STAT_ARCONFUSE', lang()), '+', $attributeValue);
            },
			'arperification' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Petrification Resist', trans('STR_TOOLTIP_SKILL_STAT_ARPETRIFACTION', lang()), '+', $attributeValue);
            },
			'poison_arp' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Poisoning Penetration', trans('STR_TOOLTIP_SKILL_STAT_POISON_ARP', lang()), '+', $attributeValue);
            },
			'bleed_arp' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Bleeding Penetration', trans('STR_TOOLTIP_SKILL_STAT_BLEEED_ARP', lang()), '+', $attributeValue);
            },
			'sleep_arp' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Sleep Penetration', trans('STR_TOOLTIP_SKILL_STAT_SLEEP_ARP', lang()), '+', $attributeValue);
            },
			'root_arp' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Immobilization Penetration', trans('STR_TOOLTIP_SKILL_STAT_ROOT_ARP', lang()), '+', $attributeValue);
            },
			'blind_arp' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Blindness Penetration', trans('STR_TOOLTIP_SKILL_STAT_BLIND_ARP', lang()), '+', $attributeValue);
            },
			'charm_arp' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Charm Penetration', trans('STR_TOOLTIP_SKILL_STAT_CHARM_ARP', lang()), '+', $attributeValue);
            },
			'disease_arp' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Disease Penetration', trans('STR_TOOLTIP_SKILL_STAT_DISEASE_ARP', lang()), '+', $attributeValue);
            },
			'fear_arp' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Fear Penetration', trans('STR_TOOLTIP_SKILL_STAT_FEAR_ARP', lang()), '+', $attributeValue);
            },
			'spin_arp' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Spin Penetration', trans('STR_TOOLTIP_SKILL_STAT_SPIN_ARP', lang()), '+', $attributeValue);
            },
			'curse_arp' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Curse Penetration', trans('STR_TOOLTIP_SKILL_STAT_CURSE_ARP', lang()), '+', $attributeValue);
            },
			'confuse_arp' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Confusion Penetration', trans('STR_TOOLTIP_SKILL_STAT_CONFUSE_ARP', lang()), '+', $attributeValue);
            },
			'stun_arp' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Stun Penetration', trans('STR_TOOLTIP_SKILL_STAT_STUN_ARP', lang()), '+', $attributeValue);
            },
			'perification_arp' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Petrification Penetration', trans('STR_TOOLTIP_SKILL_STAT_PETRIFACTION_ARP', lang()), '+', $attributeValue);
            },
			'stumble_arp' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Stumble Penetration', trans('STR_TOOLTIP_SKILL_STAT_STUMBLE_ARP', lang()), '+', $attributeValue);
            },
			'stagger_arp' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Knock Back Penetration', trans('STR_TOOLTIP_SKILL_STAT_STAGGER_ARP', lang()), '+', $attributeValue);
            },
			'openareial_arp' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Aether%27s Hold Penetration', trans('STR_TOOLTIP_SKILL_STAT_OPENAREIAL_ARP', lang()), '+', $attributeValue);
            },
			'snare_arp' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Reduce Movement Speed Penetration', trans('STR_TOOLTIP_SKILL_STAT_SNARE_ARP', lang()), '+', $attributeValue);
            },
			'slow_arp' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Reduce Attack Speed Penetration', trans('STR_TOOLTIP_SKILL_STAT_SLOW_ARP', lang()), '+', $attributeValue);
            },
			'arbleed' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Bleed Resist', trans('STR_TOOLTIP_SKILL_STAT_ARBLEED', lang()), '+', $attributeValue);
            },
			'arblind' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Blind Resist', trans('STR_TOOLTIP_SKILL_STAT_ARBLIND', lang()), '+', $attributeValue);
            },
			'archarm' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Charm Resist', trans('STR_TOOLTIP_SKILL_STAT_ARCHARM', lang()), '+', $attributeValue);
            },
			'ardisease' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Disease Resist', trans('STR_TOOLTIP_SKILL_STAT_ARDISEASE', lang()), '+', $attributeValue);
            },
			'arfear' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Fear Resist', trans('STR_TOOLTIP_SKILL_STAT_ARFEAR', lang()), '+', $attributeValue);
            },
			'arpoison' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Poison Resist', trans('STR_TOOLTIP_SKILL_STAT_ARPOISION', lang()), '+', $attributeValue);
            },
			'arroot' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Immobilization Resist', trans('STR_TOOLTIP_SKILL_STAT_ARROOT', lang()), '+', $attributeValue);
            },
			'arsleep' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Sleep Resist', trans('STR_TOOLTIP_SKILL_STAT_ARSLEEP', lang()), '+', $attributeValue);
            },
			'speed' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Speed', trans('STR_TOOLTIP_SKILL_STAT_SPEED', lang()), '+', $attributeValue);
            },
			'pvpdodge' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Evade (PvP)', trans('STR_TOOLTIP_SKILL_STAT_PVP_DODGE', lang()), '+', $attributeValue);
            },
			'pvpblock' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Block (PvP)', trans('STR_TOOLTIP_SKILL_STAT_PVP_BLOCK', lang()), '+', $attributeValue);
            },
			'pvpparry' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Parry (PvP)', trans('STR_TOOLTIP_SKILL_STAT_PVP_PARRY', lang()), '+', $attributeValue);
            },
			'pvphitaccuracy' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Accuracy (PvP)', trans('STR_TOOLTIP_SKILL_STAT_PVP_HIT_ACCURACY', lang()), '+', $attributeValue);
            },
			'pvpmagicalresist' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Magic Resistance (PvP)', trans('STR_TOOLTIP_SKILL_STAT_PVP_MAGICAL_RESIST', lang()), '+', $attributeValue);
            },
			'pvpmagicalhitaccuracy' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Magic Accuracy (PvP)', trans('STR_TOOLTIP_SKILL_STAT_PVP_MAGICAL_HIT_ACCURACY', lang()), '+', $attributeValue);
            },
			'magical_resist_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Magic Resist', translate('STR_MAGIC_DEFENSE', lang()), '+', $attributeValue);
            },
            'magical_resist' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Magic Resist', translate('STR_MAGIC_DEFENSE', lang()), '+', $attributeValue);
            },
            'boosthate' => function ($attributeValue) use ($template, $language) {
                // turns (string) '-27%' into (float) -2.7 for example
                // if number issues, check here (hacky solution but easy and works 99% of the time)
                $number = (int) $attributeValue / 10;
                return sprintf($template, 'Enmity Boost', trans('STR_BOOSTHATE', lang()), $attributeValue[0] !== '-' ? '+' : '', $number . '%' );
            },
			'flyboost_speed' => function ($attributeValue) use ($template, $language) {
                // turns (string) '-27%' into (float) -2.7 for example
                // if number issues, check here (hacky solution but easy and works 99% of the time)
                $number = (int) $attributeValue / 1000;
                return sprintf($template, 'Swoop Flight Speed', trans('STR_TOOLTIP_SKILL_STAT_BOOSTSPEED', lang()), $attributeValue[0] !== '-' ? '+' : '', $number . '' );
            },
			'pvpattackratio_physical' => function ($attributeValue) use ($template, $language) {
                // turns (string) '-27%' into (float) -2.7 for example
                // if number issues, check here (hacky solution but easy and works 99% of the time)
                $number = (int) $attributeValue / 10;
                return sprintf($template, 'PVP Physical Attack', trans('STR_TOOLTIP_ITEM_PVP_ATTACK_RATIO_PHYSICAL', lang()), $attributeValue[0] !== '-' ? '+' : '', $number . '%' );
            },
			'pvpattackratio_magical' => function ($attributeValue) use ($template, $language) {
                // turns (string) '-27%' into (float) -2.7 for example
                // if number issues, check here (hacky solution but easy and works 99% of the time)
                $number = (int) $attributeValue / 10;
                return sprintf($template, 'PVP Magical Attack', trans('STR_TOOLTIP_ITEM_PVP_ATTACK_RATIO_MAGICAL', lang()), $attributeValue[0] !== '-' ? '+' : '', $number . '%' );
            },
			'pvpattackratio' => function ($attributeValue) use ($template, $language) {
                // turns (string) '-27%' into (float) -2.7 for example
                // if number issues, check here (hacky solution but easy and works 99% of the time)
                $number = (int) $attributeValue / 10;
                return sprintf($template, 'PVP Attack', trans('STR_TOOLTIP_ITEM_PVP_BONUS_ATTACK', lang()), $attributeValue[0] !== '-' ? '+' : '', $number . '%' );
            },
			'pvpdefendratio' => function ($attributeValue) use ($template, $language) {
                // turns (string) '-27%' into (float) -2.7 for example
                // if number issues, check here (hacky solution but easy and works 99% of the time)
                $number = (int) $attributeValue / 10;
                return sprintf($template, 'PVP Defence', trans('STR_TOOLTIP_ITEM_PVP_BONUS_DEFENSE', lang()), $attributeValue[0] !== '-' ? '+' : '', $number . '%' );
            },
			'pvpdefendratio_physical' => function ($attributeValue) use ($template, $language) {
                // turns (string) '-27%' into (float) -2.7 for example
                // if number issues, check here (hacky solution but easy and works 99% of the time)
                $number = (int) $attributeValue / 10;
                return sprintf($template, 'Physical Defence (PVP)', trans('STR_TOOLTIP_ITEM_PVP_DEFEND_RATIO_PHYSICAL', lang()), $attributeValue[0] !== '-' ? '+' : '', $number . '%' );
            },
			'pvpdefendratio_magical' => function ($attributeValue) use ($template, $language) {
                // turns (string) '-27%' into (float) -2.7 for example
                // if number issues, check here (hacky solution but easy and works 99% of the time)
                $number = (int) $attributeValue / 10;
                return sprintf($template, 'Magical Defence (PVP)', trans('STR_TOOLTIP_ITEM_PVP_DEFEND_RATIO_MAGICAL', lang()), $attributeValue[0] !== '-' ? '+' : '', $number . '%' );
            },
			'procreducerate' => function ($attributeValue) use ($template, $language) {
                // turns (string) '-27%' into (float) -2.7 for example
                // if number issues, check here (hacky solution but easy and works 99% of the time)
                $number = (int) $attributeValue / 10;
                return sprintf($template, 'Godstone Prevention', trans('STR_TOOLTIP_SKILL_STAT_PROC_REDUCE_RATE', lang()), $attributeValue[0] !== '-' ? '+' : '', $number . '%' );
            },
			'physicalpowerboost' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Physical Damage', trans('STR_PHYSICAL_POWER_BOOST', lang()), '+', $attributeValue);
            },
			'physicalpowerboostresist' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Physical Defense', trans('STR_PHYSICAL_POWER_BOOST_RESIST', lang()), '+', $attributeValue);
            },
			'magicalpowerboost' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Magical Damage', trans('STR_MAGICAL_POWER_BOOST', lang()), '+', $attributeValue);
            },
			'magicalpowerboostresist' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Magical Defense', trans('STR_MAGICAL_POWER_BOOST_RESIST', lang()), '+', $attributeValue);
            },
			
        ];