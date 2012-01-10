CREATE INDEX `wowhead` ON `creature_loot_template`     (`mincountOrRef`);
CREATE INDEX `wowhead` ON `disenchant_loot_template`   (`mincountOrRef`);
CREATE INDEX `wowhead` ON `fishing_loot_template`      (`mincountOrRef`);
CREATE INDEX `wowhead` ON `gameobject_loot_template`   (`mincountOrRef`);
CREATE INDEX `wowhead` ON `item_loot_template`         (`mincountOrRef`);
CREATE INDEX `wowhead` ON `pickpocketing_loot_template`(`mincountOrRef`);
CREATE INDEX `wowhead` ON `prospecting_loot_template`  (`mincountOrRef`);
CREATE INDEX `wowhead` ON `skinning_loot_template`     (`mincountOrRef`);
CREATE INDEX `wowhead` ON `reference_loot_template`    (`mincountOrRef`);

CREATE INDEX `wowhead_item` ON `creature_loot_template`     (`item`);
CREATE INDEX `wowhead_item` ON `disenchant_loot_template`   (`item`);
CREATE INDEX `wowhead_item` ON `fishing_loot_template`      (`item`);
CREATE INDEX `wowhead_item` ON `gameobject_loot_template`   (`item`);
CREATE INDEX `wowhead_item` ON `item_loot_template`         (`item`);
CREATE INDEX `wowhead_item` ON `pickpocketing_loot_template`(`item`);
CREATE INDEX `wowhead_item` ON `prospecting_loot_template`  (`item`);
CREATE INDEX `wowhead_item` ON `skinning_loot_template`     (`item`);
CREATE INDEX `wowhead_item` ON `reference_loot_template`    (`item`);

CREATE INDEX `wowhead_lootid`         ON `creature_template` (`lootid`);
CREATE INDEX `wowhead_skinloot`       ON `creature_template` (`skinloot`);
CREATE INDEX `wowhead_pickpocketloot` ON `creature_template` (`pickpocketloot`);
CREATE INDEX `wowhead_faction_A`      ON `creature_template` (`faction_A`);

CREATE INDEX `wowhead_faction`        ON `item_template`     (`RequiredReputationFaction`);
