<?php

        $additionalStats = '';
        

        // sprintf($template, <page name>, <field name>, <positive or negative>, $attributeValue)
        $statMap = [
            'maxhp' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'HP', translate('STR_HP', language()), '+', $attributeValue);
            },
            'maxmp' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'MP', translate('STR_MP', language()), '+', $attributeValue);
            },
            'phyattack' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Attack', translate('STR_ATTACK', language()), '+', $attributeValue);
            },
            'maxfp' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Flight Time', translate('STR_TOOLTIP_SKILL_STAT_MAXFLYTIME', language()), '+', $attributeValue);
            },
            'healskillboost' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Healing Boost', translate('STR_TOOLTIP_SKILL_STAT_HEAL_BOOST', language()), '+', $attributeValue);
            },
            'hitaccuracy' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Accuracy', translate('STR_TOOLTIP_SKILL_STAT_HITACCURACY', language()), '+', $attributeValue);
            },
            'physicalcriticalreducerate' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Strike Resist', translate('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_REDUCE_RATE', language()), '+', $attributeValue);
            },
            'magicalcriticalreducerate' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Spell Resist', translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_CRITICAL_REDUCE_RATE', language()), '+', $attributeValue);
            },
            'concentration' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Concentration', translate('STR_TOOLTIP_SKILL_STAT_CONCENTRATION', language()), '+', $attributeValue);
            },
            'dodge' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Evasion', translate('STR_DODGE', language()), '+', $attributeValue);
            },
            'parry' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Parry', translate('STR_PARRY', language()), '+', $attributeValue);
            },
            'block' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Block', translate('STR_BLOCK', language()), '+', $attributeValue);
            },
            'magicalattack' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Magical Attack', translate('STR_TOOLTIP_SKILL_STAT_MAGATTACK', language()), '+', $attributeValue);
            },
            'arsilence' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Silence Resistance', translate('STR_TOOLTIP_SKILL_STAT_ARSILENCE', language()), '+', $attributeValue);
            },
            'arsilence_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Silence Resistance', translate('STR_TOOLTIP_SKILL_STAT_ARSILENCE', language()), '+', $attributeValue);
            },
            'silence_arp' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Silence Resistance Penetration', translate('STR_TOOLTIP_SKILL_STAT_SILENCE_ARP', language()), '+', $attributeValue);
            },
            'arparalyze' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Paralysis Resistance', translate('STR_TOOLTIP_SKILL_STAT_ARPARALYZE', language()), '+', $attributeValue);
            },
            'arparalyze_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Paralysis Resistance', translate('STR_TOOLTIP_SKILL_STAT_ARPARALYZE', language()), '+', $attributeValue);
            },
            'paralyze_arp' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Paralysis Resistance Penetration', translate('STR_TOOLTIP_SKILL_STAT_PARALYZE_ARP', language()), '+', $attributeValue);
            },
            'arpulled' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Resistance to Pull', translate('STR_TOOLTIP_SKILL_STAT_ARPulled', language()), '+', $attributeValue);
            },
            'physicalcriticaldamagereduce' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Strike Fortitude', translate('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_DAMAGE_REDUCE', language()), '+', $attributeValue);
            },
            'physicaldefend' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Physical Def', translate('STR_DEFEND_PHYSICAL', language()), '+', $attributeValue);
            },
            'magicalresist' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Magic Resist', translate('STR_MAGIC_DEFENSE', language()), '+', $attributeValue);
            },
            'magicalskillboost' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Magic Boost', translate('STR_MAGICAL_SKILL_BOOST', language()), '+', $attributeValue);
            },
            'magicalskillboostresist' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Magic Suppression', translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_SKILL_BOOST_RESIST', language()), '+', $attributeValue);
            },
            'flyspeed' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Flight Speed', translate('STR_TOOLTIP_RIDE_FLY_SPEED', language()), '+', $attributeValue);
            },
            'elementaldefendair' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Wind Resist', translate('STR_TOOLTIP_SKILL_STAT_ED_AIR', language()), '+', $attributeValue);
            },
            'elementaldefendwater' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Water Resist', translate('STR_TOOLTIP_SKILL_STAT_ED_WATER', language()), '+', $attributeValue);
            },
            'elementaldefendearth' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Earth Resist', translate('STR_TOOLTIP_SKILL_STAT_ED_EARTH', language()), '+', $attributeValue);
            },
			'elementaldefendfire' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Fire Resist', translate('STR_TOOLTIP_SKILL_STAT_ED_FIRE', language()), '+', $attributeValue);
            },
			'magicalcritical' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Crit Spell', translate('STR_TOOLTIP_SKILL_STAT_MAGCRITICAL', language()), '+', $attributeValue);
            },
			'boostcastingtime' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Casting Speed', translate('STR_BOOSTCASTINGTIME', language()), '+', $attributeValue);
            },
			'attackdelay' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Atk Speed', translate('STR_TOOLTIP_SKILL_STAT_ATTACKDELAY', language()), '+', $attributeValue);
            },
			'magicalhitaccuracy' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Magical Acc', translate('STR_MAGICAL_HIT_ACCURACY', language()), '+', $attributeValue);
            },
			'critical' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Crit Strike', translate('STR_CRITICAL', language()), '+', $attributeValue);
            },
			'magicaldefend' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Magical Defence', translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_NEW_DEFENCE', language()), '+', $attributeValue);
            },
			'arstun' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Stun Resist', translate('STR_TOOLTIP_SKILL_STAT_ARSTUN', language()), '+', $attributeValue);
            },
			'arstumble' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Stumble Resist', translate('STR_TOOLTIP_SKILL_STAT_ARSTUMPLE', language()), '+', $attributeValue);
            },
			'arstagger' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Knock Back Resist', translate('STR_TOOLTIP_SKILL_STAT_ARSTAGGER', language()), '+', $attributeValue);
            },
			'aropenareial' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Aether%27s Hold Resist', translate('STR_TOOLTIP_SKILL_STAT_AROPENAREIAL', language()), '+', $attributeValue);
            },
			'arsnare' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Reduce Speed Resist', translate('STR_TOOLTIP_SKILL_STAT_ARSNARE', language()), '+', $attributeValue);
            },
			'arslow' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Reduce Attack Speed Resist', translate('STR_TOOLTIP_SKILL_STAT_ARSLOW', language()), '+', $attributeValue);
            },
			'arspin' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Spin Resist', translate('STR_TOOLTIP_SKILL_STAT_ARSPIN', language()), '+', $attributeValue);
            },
			'arcurse' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Curse Resist', translate('STR_TOOLTIP_SKILL_STAT_ARCURSE', language()), '+', $attributeValue);
            },
			'arconfuse' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Confusion Resist', translate('STR_TOOLTIP_SKILL_STAT_ARCONFUSE', language()), '+', $attributeValue);
            },
			'arperification' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Petrification Resist', translate('STR_TOOLTIP_SKILL_STAT_ARPETRIFACTION', language()), '+', $attributeValue);
            },
			'poison_arp' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Poisoning Penetration', translate('STR_TOOLTIP_SKILL_STAT_POISON_ARP', language()), '+', $attributeValue);
            },
			'bleed_arp' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Bleeding Penetration', translate('STR_TOOLTIP_SKILL_STAT_BLEEED_ARP', language()), '+', $attributeValue);
            },
			'sleep_arp' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Sleep Penetration', translate('STR_TOOLTIP_SKILL_STAT_SLEEP_ARP', language()), '+', $attributeValue);
            },
			'root_arp' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Immobilization Penetration', translate('STR_TOOLTIP_SKILL_STAT_ROOT_ARP', language()), '+', $attributeValue);
            },
			'blind_arp' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Blindness Penetration', translate('STR_TOOLTIP_SKILL_STAT_BLIND_ARP', language()), '+', $attributeValue);
            },
			'charm_arp' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Charm Penetration', translate('STR_TOOLTIP_SKILL_STAT_CHARM_ARP', language()), '+', $attributeValue);
            },
			'disease_arp' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Disease Penetration', translate('STR_TOOLTIP_SKILL_STAT_DISEASE_ARP', language()), '+', $attributeValue);
            },
			'fear_arp' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Fear Penetration', translate('STR_TOOLTIP_SKILL_STAT_FEAR_ARP', language()), '+', $attributeValue);
            },
			'spin_arp' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Spin Penetration', translate('STR_TOOLTIP_SKILL_STAT_SPIN_ARP', language()), '+', $attributeValue);
            },
			'curse_arp' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Curse Penetration', translate('STR_TOOLTIP_SKILL_STAT_CURSE_ARP', language()), '+', $attributeValue);
            },
			'confuse_arp' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Confusion Penetration', translate('STR_TOOLTIP_SKILL_STAT_CONFUSE_ARP', language()), '+', $attributeValue);
            },
			'stun_arp' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Stun Penetration', translate('STR_TOOLTIP_SKILL_STAT_STUN_ARP', language()), '+', $attributeValue);
            },
			'perification_arp' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Petrification Penetration', translate('STR_TOOLTIP_SKILL_STAT_PETRIFACTION_ARP', language()), '+', $attributeValue);
            },
			'stumble_arp' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Stumble Penetration', translate('STR_TOOLTIP_SKILL_STAT_STUMBLE_ARP', language()), '+', $attributeValue);
            },
			'stagger_arp' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Knock Back Penetration', translate('STR_TOOLTIP_SKILL_STAT_STAGGER_ARP', language()), '+', $attributeValue);
            },
			'openareial_arp' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Aether%27s Hold Penetration', translate('STR_TOOLTIP_SKILL_STAT_OPENAREIAL_ARP', language()), '+', $attributeValue);
            },
			'snare_arp' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Reduce Movement Speed Penetration', translate('STR_TOOLTIP_SKILL_STAT_SNARE_ARP', language()), '+', $attributeValue);
            },
			'slow_arp' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Reduce Attack Speed Penetration', translate('STR_TOOLTIP_SKILL_STAT_SLOW_ARP', language()), '+', $attributeValue);
            },
            'openaerial_arp' => function($attributeValue) use ($template, $language) {
                return sprintf($template, "Aether's Hold Penetration", translate('STR_TOOLTIP_SKILL_STAT_OPENAREIAL_ARP', language()), '+', $attributeValue);
            },
			'arbleed' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Bleed Resist', translate('STR_TOOLTIP_SKILL_STAT_ARBLEED', language()), '+', $attributeValue);
            },
			'arblind' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Blind Resist', translate('STR_TOOLTIP_SKILL_STAT_ARBLIND', language()), '+', $attributeValue);
            },
			'arbind' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Binding Resistance', translate('STR_TOOLTIP_SKILL_STAT_ARBIND', language()), '+', $attributeValue);
            },
			'archarm' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Charm Resist', translate('STR_TOOLTIP_SKILL_STAT_ARCHARM', language()), '+', $attributeValue);
            },
			'ardisease' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Disease Resist', translate('STR_TOOLTIP_SKILL_STAT_ARDISEASE', language()), '+', $attributeValue);
            },
			'arfear' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Fear Resist', translate('STR_TOOLTIP_SKILL_STAT_ARFEAR', language()), '+', $attributeValue);
            },
			'arpoison' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Poison Resist', translate('STR_TOOLTIP_SKILL_STAT_ARPOISION', language()), '+', $attributeValue);
            },
			'arroot' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Immobilization Resist', translate('STR_TOOLTIP_SKILL_STAT_ARROOT', language()), '+', $attributeValue);
            },
			'arsleep' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Sleep Resist', translate('STR_TOOLTIP_SKILL_STAT_ARSLEEP', language()), '+', $attributeValue);
            },
            'arstun_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Stun Resist', translate('STR_TOOLTIP_SKILL_STAT_ARSTUN', language()), '+', $attributeValue);
            },
			'arstumble_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Stumble Resist', translate('STR_TOOLTIP_SKILL_STAT_ARSTUMPLE', language()), '+', $attributeValue);
            },
			'arstagger_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Knock Back Resist', translate('STR_TOOLTIP_SKILL_STAT_ARSTAGGER', language()), '+', $attributeValue);
            },
			'aropenareial_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Aether%27s Hold Resist', translate('STR_TOOLTIP_SKILL_STAT_AROPENAREIAL', language()), '+', $attributeValue);
            },
			'arsnare_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Reduce Speed Resist', translate('STR_TOOLTIP_SKILL_STAT_ARSNARE', language()), '+', $attributeValue);
            },
			'arslow_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Reduce Attack Speed Resist', translate('STR_TOOLTIP_SKILL_STAT_ARSLOW', language()), '+', $attributeValue);
            },
			'arspin_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Spin Resist', translate('STR_TOOLTIP_SKILL_STAT_ARSPIN', language()), '+', $attributeValue);
            },
			'arcurse_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Curse Resist', translate('STR_TOOLTIP_SKILL_STAT_ARCURSE', language()), '+', $attributeValue);
            },
			'arconfuse_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Confusion Resist', translate('STR_TOOLTIP_SKILL_STAT_ARCONFUSE', language()), '+', $attributeValue);
            },
			'arperification_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Petrification Resist', translate('STR_TOOLTIP_SKILL_STAT_ARPETRIFACTION', language()), '+', $attributeValue);
            },
			'poison_arp_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Poisoning Penetration', translate('STR_TOOLTIP_SKILL_STAT_POISON_ARP', language()), '+', $attributeValue);
            },
			'bleed_arp_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Bleeding Penetration', translate('STR_TOOLTIP_SKILL_STAT_BLEEED_ARP', language()), '+', $attributeValue);
            },
			'sleep_arp_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Sleep Penetration', translate('STR_TOOLTIP_SKILL_STAT_SLEEP_ARP', language()), '+', $attributeValue);
            },
			'root_arp_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Immobilization Penetration', translate('STR_TOOLTIP_SKILL_STAT_ROOT_ARP', language()), '+', $attributeValue);
            },
			'blind_arp_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Blindness Penetration', translate('STR_TOOLTIP_SKILL_STAT_BLIND_ARP', language()), '+', $attributeValue);
            },
			'charm_arp_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Charm Penetration', translate('STR_TOOLTIP_SKILL_STAT_CHARM_ARP', language()), '+', $attributeValue);
            },
			'disease_arp_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Disease Penetration', translate('STR_TOOLTIP_SKILL_STAT_DISEASE_ARP', language()), '+', $attributeValue);
            },
			'fear_arp_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Fear Penetration', translate('STR_TOOLTIP_SKILL_STAT_FEAR_ARP', language()), '+', $attributeValue);
            },
			'spin_arp_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Spin Penetration', translate('STR_TOOLTIP_SKILL_STAT_SPIN_ARP', language()), '+', $attributeValue);
            },
			'curse_arp_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Curse Penetration', translate('STR_TOOLTIP_SKILL_STAT_CURSE_ARP', language()), '+', $attributeValue);
            },
			'confuse_arp_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Confusion Penetration', translate('STR_TOOLTIP_SKILL_STAT_CONFUSE_ARP', language()), '+', $attributeValue);
            },
			'stun_arp_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Stun Penetration', translate('STR_TOOLTIP_SKILL_STAT_STUN_ARP', language()), '+', $attributeValue);
            },
			'perification_arp_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Petrification Penetration', translate('STR_TOOLTIP_SKILL_STAT_PETRIFACTION_ARP', language()), '+', $attributeValue);
            },
			'stumble_arp_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Stumble Penetration', translate('STR_TOOLTIP_SKILL_STAT_STUMBLE_ARP', language()), '+', $attributeValue);
            },
			'stagger_arp_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Knock Back Penetration', translate('STR_TOOLTIP_SKILL_STAT_STAGGER_ARP', language()), '+', $attributeValue);
            },
			'openareial_arp_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Aether%27s Hold Penetration', translate('STR_TOOLTIP_SKILL_STAT_OPENAREIAL_ARP', language()), '+', $attributeValue);
            },
			'snare_arp_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Reduce Movement Speed Penetration', translate('STR_TOOLTIP_SKILL_STAT_SNARE_ARP', language()), '+', $attributeValue);
            },
			'slow_arp_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Reduce Attack Speed Penetration', translate('STR_TOOLTIP_SKILL_STAT_SLOW_ARP', language()), '+', $attributeValue);
            },
            'openaerial_arp_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, "Aether's Hold Penetration", translate('STR_TOOLTIP_SKILL_STAT_OPENAREIAL_ARP', language()), '+', $attributeValue);
            },
			'arbleed_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Bleed Resist', translate('STR_TOOLTIP_SKILL_STAT_ARBLEED', language()), '+', $attributeValue);
            },
			'arblind_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Blind Resist', translate('STR_TOOLTIP_SKILL_STAT_ARBLIND', language()), '+', $attributeValue);
            },
			'arbind_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Binding Resistance', translate('STR_TOOLTIP_SKILL_STAT_ARBIND', language()), '+', $attributeValue);
            },
			'archarm_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Charm Resist', translate('STR_TOOLTIP_SKILL_STAT_ARCHARM', language()), '+', $attributeValue);
            },
			'ardisease_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Disease Resist', translate('STR_TOOLTIP_SKILL_STAT_ARDISEASE', language()), '+', $attributeValue);
            },
			'arfear_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Fear Resist', translate('STR_TOOLTIP_SKILL_STAT_ARFEAR', language()), '+', $attributeValue);
            },
			'arpoison_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Poison Resist', translate('STR_TOOLTIP_SKILL_STAT_ARPOISION', language()), '+', $attributeValue);
            },
			'arroot_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Immobilization Resist', translate('STR_TOOLTIP_SKILL_STAT_ARROOT', language()), '+', $attributeValue);
            },
			'arsleep_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Sleep Resist', translate('STR_TOOLTIP_SKILL_STAT_ARSLEEP', language()), '+', $attributeValue);
            },
			'speed' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Speed', translate('STR_TOOLTIP_SKILL_STAT_SPEED', language()), '+', $attributeValue);
            },
			'pvpdodge' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Evade (PvP)', translate('STR_TOOLTIP_SKILL_STAT_PVP_DODGE', language()), '+', $attributeValue);
            },
			'pvpblock' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Block (PvP)', translate('STR_TOOLTIP_SKILL_STAT_PVP_BLOCK', language()), '+', $attributeValue);
            },
			'pvpparry' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Parry (PvP)', translate('STR_TOOLTIP_SKILL_STAT_PVP_PARRY', language()), '+', $attributeValue);
            },
			'pvphitaccuracy' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Accuracy (PvP)', translate('STR_TOOLTIP_SKILL_STAT_PVP_HIT_ACCURACY', language()), '+', $attributeValue);
            },
			'pvpmagicalresist' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Magic Resistance (PvP)', translate('STR_TOOLTIP_SKILL_STAT_PVP_MAGICAL_RESIST', language()), '+', $attributeValue);
            },
			'pvpmagicalhitaccuracy' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Magic Accuracy (PvP)', translate('STR_TOOLTIP_SKILL_STAT_PVP_MAGICAL_HIT_ACCURACY', language()), '+', $attributeValue);
            },
            'boosthate' => function ($attributeValue) use ($template, $language) {
                // turns (string) '-27%' into (float) -2.7 for example
                // if number issues, check here (hacky solution but easy and works 99% of the time)
                $number = (int) $attributeValue / 10;
                return sprintf($template, 'Enmity Boost', translate('STR_BOOSTHATE', language()), $attributeValue[0] !== '-' ? '+' : '', $number . '%' );
            },
			'flyboost_speed' => function ($attributeValue) use ($template, $language) {
                // turns (string) '-27%' into (float) -2.7 for example
                // if number issues, check here (hacky solution but easy and works 99% of the time)
                $number = (int) $attributeValue / 1000;
                return sprintf($template, 'Swoop Flight Speed', translate('STR_TOOLTIP_SKILL_STAT_BOOSTSPEED', language()), $attributeValue[0] !== '-' ? '+' : '', $number . '' );
            },
			'pvpattackratio_physical' => function ($attributeValue) use ($template, $language) {
                // turns (string) '-27%' into (float) -2.7 for example
                // if number issues, check here (hacky solution but easy and works 99% of the time)
                $number = (int) $attributeValue / 10;
                return sprintf($template, 'PVP Physical Attack', translate('STR_TOOLTIP_ITEM_PVP_ATTACK_RATIO_PHYSICAL', language()), $attributeValue[0] !== '-' ? '+' : '', $number . '%' );
            },
			'pvpattackratio_magical' => function ($attributeValue) use ($template, $language) {
                // turns (string) '-27%' into (float) -2.7 for example
                // if number issues, check here (hacky solution but easy and works 99% of the time)
                $number = (int) $attributeValue / 10;
                return sprintf($template, 'PVP Magical Attack', translate('STR_TOOLTIP_ITEM_PVP_ATTACK_RATIO_MAGICAL', language()), $attributeValue[0] !== '-' ? '+' : '', $number . '%' );
            },
			'pvpattackratio' => function ($attributeValue) use ($template, $language) {
                // turns (string) '-27%' into (float) -2.7 for example
                // if number issues, check here (hacky solution but easy and works 99% of the time)
                $number = (int) $attributeValue / 10;
                return sprintf($template, 'PVP Attack', translate('STR_TOOLTIP_ITEM_PVP_BONUS_ATTACK', language()), $attributeValue[0] !== '-' ? '+' : '', $number . '%' );
            },
			'pvpdefendratio' => function ($attributeValue) use ($template, $language) {
                // turns (string) '-27%' into (float) -2.7 for example
                // if number issues, check here (hacky solution but easy and works 99% of the time)
                $number = (int) $attributeValue / 10;
                return sprintf($template, 'PVP Defence', translate('STR_TOOLTIP_ITEM_PVP_BONUS_DEFENSE', language()), $attributeValue[0] !== '-' ? '+' : '', $number . '%' );
            },
			'pvpdefendratio_physical' => function ($attributeValue) use ($template, $language) {
                // turns (string) '-27%' into (float) -2.7 for example
                // if number issues, check here (hacky solution but easy and works 99% of the time)
                $number = (int) $attributeValue / 10;
                return sprintf($template, 'Physical Defence (PVP)', translate('STR_TOOLTIP_ITEM_PVP_DEFEND_RATIO_PHYSICAL', language()), $attributeValue[0] !== '-' ? '+' : '', $number . '%' );
            },
			'pvpdefendratio_magical' => function ($attributeValue) use ($template, $language) {
                // turns (string) '-27%' into (float) -2.7 for example
                // if number issues, check here (hacky solution but easy and works 99% of the time)
                $number = (int) $attributeValue / 10;
                return sprintf($template, 'Magical Defence (PVP)', translate('STR_TOOLTIP_ITEM_PVP_DEFEND_RATIO_MAGICAL', language()), $attributeValue[0] !== '-' ? '+' : '', $number . '%' );
            },
			'procreducerate' => function ($attributeValue) use ($template, $language) {
                // turns (string) '-27%' into (float) -2.7 for example
                // if number issues, check here (hacky solution but easy and works 99% of the time)
                $number = (int) $attributeValue / 10;
                return sprintf($template, 'Godstone Prevention', translate('STR_TOOLTIP_SKILL_STAT_PROC_REDUCE_RATE', language()), $attributeValue[0] !== '-' ? '+' : '', $number . '%' );
            },
			'pveattackratio' => function ($attributeValue) use ($template, $language) {
                $number = (int) $attributeValue / 10;
                return sprintf($template, 'PVE Attack', translate('STR_TOOLTIP_ITEM_PVE_BONUS_ATTACK', language()), $attributeValue[0] !== '-' ? '+' : '', $number . '%' );
            },
			'pvedefendratio' => function ($attributeValue) use ($template, $language) {
                $number = (int) $attributeValue / 10;
                return sprintf($template, 'PVE Defence', translate('STR_TOOLTIP_ITEM_PVE_BONUS_DEFENSE', language()), $attributeValue[0] !== '-' ? '+' : '', $number . '%' );
            },
			'physicalpowerboost' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Physical Damage', translate('STR_PHYSICAL_POWER_BOOST', language()), '+', $attributeValue);
            },
			'physicalpowerboostresist' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Physical Defense', translate('STR_PHYSICAL_POWER_BOOST_RESIST', language()), '+', $attributeValue);
            },
			'magicalpowerboost' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Magical Damage', translate('STR_MAGICAL_POWER_BOOST', language()), '+', $attributeValue);
            },
			'magicalpowerboostresist' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Magical Defense', translate('STR_MAGICAL_POWER_BOOST_RESIST', language()), '+', $attributeValue);
            },
			'pvppowerboost' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'PVP Damage', translate('STR_PVP_POWER_BOOST', language()), '+', $attributeValue);
            },
			'pvepowerboost' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'PVE Damage', translate('STR_PVE_POWER_BOOST', language()), '+', $attributeValue);
            },
			'pvp_power_boost' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'PVP Damage', translate('STR_PVP_POWER_BOOST', language()), '+', $attributeValue);
            },
			'pvp_power_boost_resist' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'PVP Defense', translate('STR_PVP_POWER_BOOST_RESIST', language()), '+', $attributeValue);
            },
			'pve_power_boost' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'PVE Damage', translate('STR_PVE_POWER_BOOST', language()), '+', $attributeValue);
            },
			'pve_power_boost_resist' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'PVE Defense', translate('STR_PVE_POWER_BOOST_RESIST', language()), '+', $attributeValue);
            },
			'pvepowerboostresist' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'PVE Defense', translate('STR_PVE_POWER_BOOST_RESIST', language()), '+', $attributeValue);
            },
			'pvppowerboostresist' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'PVP Defense', translate('STR_PVP_POWER_BOOST_RESIST', language()), '+', $attributeValue);
            },
			'damage_reduce' => function ($attributeValue) use ($template, $language) {
                $number = (int) $attributeValue;
                return sprintf($template, 'Damage Reduction', translate('STR_ITEMINFO_DAMAGE_REDUCTION', language()), $attributeValue[0] !== '-' ? '+' : '', $number . '%' );
            },
			'max_fp_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Flight Time', translate('STR_TOOLTIP_SKILL_STAT_MAX_FP', language()), '+', $attributeValue);
            },
			'fly_speed_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Flight Speed', translate('STR_TOOLTIP_RIDE_FLY_SPEED', language()), '+', $attributeValue);
            },
			'magical_resist_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Magic Resist', translate('STR_MAGIC_DEFENSE', language()), '+', $attributeValue);
            },
            'magical_resist' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Magic Resist', translate('STR_MAGIC_DEFENSE', language()), '+', $attributeValue);
            },
			'pve_power_boost_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'PVE Damage', translate('STR_PVE_POWER_BOOST', language()), '+', $attributeValue);
            },
			'physical_power_boost_resist_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Physical Defense', translate('STR_PHYSICAL_POWER_BOOST_RESIST', language()), '+', $attributeValue);
            },
			'magical_power_boost_resist_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Magical Defense', translate('STR_MAGICAL_POWER_BOOST_RESIST', language()), '+', $attributeValue);
            },
			'max_hp_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'HP', translate('STR_HP', language()), '+', $attributeValue);
            },
			'magical_power_boost_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Magical Damage', translate('STR_MAGICAL_POWER_BOOST', language()), '+', $attributeValue);
            },
			'physical_power_boost_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Physical Damage', translate('STR_PHYSICAL_POWER_BOOST', language()), '+', $attributeValue);
            },
			'pve_power_boost_resist_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'PVE Defense', translate('STR_PVE_POWER_BOOST_RESIST', language()), '+', $attributeValue);
            },
			'critical_magical_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Crit Spell', translate('STR_TOOLTIP_SKILL_STAT_MAGCRITICAL', language()), '+', $attributeValue);
            },
			'critical_physical_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Crit Strike', translate('STR_CRITICAL', language()), '+', $attributeValue);
            },
			'pvp_power_boost_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'PVP Damage', translate('STR_PVP_POWER_BOOST', language()), '+', $attributeValue);
            },
			'pvp_power_boost_resist_o' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'PVP Defense', translate('STR_PVP_POWER_BOOST_RESIST', language()), '+', $attributeValue);
            },
            'physicalcriticaldamageboost' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Crit Strike Damage', translate('STR_TOOLTIP_SKILL_STAT_PHYSICAL_CRITICAL_DAMAGE_BOOST_RATE', language()), '+', $attributeValue);
            },
            'magicalcriticaldamageboost' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Crit Spell Damage', translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_CRITICAL_DAMAGE_BOOST_RATE', language()), '+', $attributeValue);
            },
            'magicalcriticaldamagereduce' => function($attributeValue) use ($template, $language) {
                return sprintf($template, 'Spell Fortitude', translate('STR_TOOLTIP_SKILL_STAT_MAGICAL_CRITICAL_DAMAGE_REDUCE', language()), '+', $attributeValue);
            },
        ];


        