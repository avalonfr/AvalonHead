<?php /* Smarty version 2.6.26, created on 2012-01-06 13:49:00
         compiled from item.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'item.tpl', 10, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

		<div id="main">

			<div id="main-precontents"></div>
			<div id="main-contents" class="main-contents">

				<script type="text/javascript">
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/allcomments.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					var g_pageInfo = {type: <?php echo $this->_tpl_vars['page']['type']; ?>
, typeId: <?php echo $this->_tpl_vars['page']['typeid']; ?>
, name: '<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?>
'};
					g_initPath(<?php echo $this->_tpl_vars['page']['path']; ?>
);
				</script>

				<table class="infobox">
					<tr><th><?php echo $this->_config[0]['vars']['Quick_Facts']; ?>
</th></tr>
					<tr><td>
						<div class="infobox-spacer"></div>
						<ul>
														<?php if ($this->_tpl_vars['item']['level']): ?><li><div><?php echo $this->_config[0]['vars']['level']; ?>
: <?php echo $this->_tpl_vars['item']['level']; ?>
</div></li><?php endif; ?>
														<?php if ($this->_tpl_vars['item']['buygold'] || $this->_tpl_vars['item']['buysilver'] || $this->_tpl_vars['item']['buycopper']): ?>
								<li><div>
									<?php echo $this->_config[0]['vars']['Buy_for']; ?>
:
									<?php if ($this->_tpl_vars['item']['buygold']): ?><span class="moneygold"><?php echo $this->_tpl_vars['item']['buygold']; ?>
</span><?php endif; ?>
									<?php if ($this->_tpl_vars['item']['buysilver']): ?><span class="moneysilver"><?php echo $this->_tpl_vars['item']['buysilver']; ?>
</span><?php endif; ?>
									<?php if ($this->_tpl_vars['item']['buycopper']): ?><span class="moneycopper"><?php echo $this->_tpl_vars['item']['buycopper']; ?>
</span><?php endif; ?>
								</div></li>
							<?php endif; ?>
							<?php if ($this->_tpl_vars['item']['sellgold'] || $this->_tpl_vars['item']['sellsilver'] || $this->_tpl_vars['item']['sellcopper']): ?>
								<li><div>
									<?php echo $this->_config[0]['vars']['Sells_for']; ?>
:
									<?php if ($this->_tpl_vars['item']['sellgold']): ?><span class="moneygold"><?php echo $this->_tpl_vars['item']['sellgold']; ?>
</span><?php endif; ?>
									<?php if ($this->_tpl_vars['item']['sellsilver']): ?><span class="moneysilver"><?php echo $this->_tpl_vars['item']['sellsilver']; ?>
</span><?php endif; ?>
									<?php if ($this->_tpl_vars['item']['sellcopper']): ?><span class="moneycopper"><?php echo $this->_tpl_vars['item']['sellcopper']; ?>
</span><?php endif; ?>
								</div></li>
							<?php endif; ?>
							<?php if (isset ( $this->_tpl_vars['item']['disenchantskill'] )): ?><li><div><?php echo $this->_config[0]['vars']['Disenchantable']; ?>
 (<span class="tip" onmouseover="Tooltip.showAtCursor(event, LANG.tooltip_reqenchanting, 0, 0, 'q')" onmousemove="Tooltip.cursorUpdate(event)" onmouseout="Tooltip.hide()"><?php echo $this->_tpl_vars['item']['disenchantskill']; ?>
</span>)</div></li><?php endif; ?>
							<?php if (isset ( $this->_tpl_vars['item']['key'] )): ?><li><div><?php echo $this->_config[0]['vars']['Can_be_placed_in_the_keyring']; ?>
</div></li><?php endif; ?>
						</ul>
					</td></tr>
				</table>

				<div class="text">

					<a href="http://de.wowhead.com/?<?php echo $this->_tpl_vars['query']; ?>
" class="button-red"><em><b><i>Wowhead</i></b><span>Wowhead</span></em></a>
					<h1><?php echo $this->_tpl_vars['item']['name']; ?>
</h1>

					<div id="icon<?php echo $this->_tpl_vars['item']['entry']; ?>
-generic" style="float: left"></div>
					<div id="tooltip<?php echo $this->_tpl_vars['item']['entry']; ?>
-generic" class="tooltip" style="float: left; padding-top: 1px">
					<table><tr><td><?php echo $this->_tpl_vars['item']['info']; ?>
</td><th style="background-position: top right"></th></tr><tr><th style="background-position: bottom left"></th><th style="background-position: bottom right"></th></tr></table>
					</div>

					<div style="clear: left"></div>

					<script type="text/javascript">
						ge('icon<?php echo $this->_tpl_vars['item']['entry']; ?>
-generic').appendChild(Icon.create('<?php echo $this->_tpl_vars['item']['iconname']; ?>
', 2, 0, 0, <?php echo $this->_tpl_vars['item']['stackable']; ?>
));
						Tooltip.fix(ge('tooltip<?php echo $this->_tpl_vars['item']['entry']; ?>
-generic'), 1, 1);
					</script>

					<h2><?php echo $this->_config[0]['vars']['Related']; ?>
</h2>

				</div>

				<div id="tabs-generic"></div>
				<div id="listview-generic" class="listview"></div>
<script type="text/javascript">
var tabsRelated = new Tabs({parent: ge('tabs-generic')});
<?php if (isset ( $this->_tpl_vars['item']['unlocks'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/object_table.tpl', 'smarty_include_vars' => array('id' => 'unlocks','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['item']['unlocks'],'name' => 'unlocks')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['item']['fishedin'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/zone_table.tpl', 'smarty_include_vars' => array('id' => 'fished-in','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['item']['fishedin'],'name' => 'fishedin')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['item']['droppedby'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/creature_table.tpl', 'smarty_include_vars' => array('id' => 'dropped-by','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['item']['droppedby'],'name' => 'droppedby')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['item']['soldby'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/creature_table.tpl', 'smarty_include_vars' => array('id' => 'sold-by','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['item']['soldby'],'name' => 'soldby')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['item']['currencyfor'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/item_table.tpl', 'smarty_include_vars' => array('id' => 'currency-for','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['item']['currencyfor'],'name' => 'currencyfor')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['item']['teaches'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/spell_table.tpl', 'smarty_include_vars' => array('id' => 'teaches-recipe','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['item']['teaches'],'name' => 'teaches')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['item']['containedinobject'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/object_table.tpl', 'smarty_include_vars' => array('id' => 'contained-in-object','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['item']['containedinobject'],'name' => 'containedin')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['item']['minedfromobject'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/object_table.tpl', 'smarty_include_vars' => array('id' => 'mined-from-object','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['item']['minedfromobject'],'name' => 'minedfrom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['item']['gatheredfromobject'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/object_table.tpl', 'smarty_include_vars' => array('id' => 'gathered-from-object','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['item']['gatheredfromobject'],'name' => 'gatheredfrom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['item']['containedinitem'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/item_table.tpl', 'smarty_include_vars' => array('id' => 'contained-in-item','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['item']['containedinitem'],'name' => 'containedin')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['item']['contains'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/item_table.tpl', 'smarty_include_vars' => array('id' => 'contains','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['item']['contains'],'name' => 'contains')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['item']['pickpocketingloot'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/creature_table.tpl', 'smarty_include_vars' => array('id' => 'pick-pocketed-from','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['item']['pickpocketingloot'],'name' => 'pickpocketedfrom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['item']['skinnedfrom'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/creature_table.tpl', 'smarty_include_vars' => array('id' => 'skinned-from','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['item']['skinnedfrom'],'name' => 'skinnedfrom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['item']['prospecting'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/item_table.tpl', 'smarty_include_vars' => array('id' => 'prospecting','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['item']['prospecting'],'name' => 'prospecting')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['item']['prospectingloot'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/item_table.tpl', 'smarty_include_vars' => array('id' => 'prospected-from','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['item']['prospectingloot'],'name' => 'prospectedfrom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['item']['canbeplacedin'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/item_table.tpl', 'smarty_include_vars' => array('id' => 'can-be-placed-in','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['item']['canbeplacedin'],'name' => 'canbeplacedin')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['item']['providedfor'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/quest_table.tpl', 'smarty_include_vars' => array('id' => 'provided-for','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['item']['providedfor'],'name' => 'providedfor')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['item']['objectiveof'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/quest_table.tpl', 'smarty_include_vars' => array('id' => 'objective-of','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['item']['objectiveof'],'name' => 'objectiveof')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['item']['starts'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/quest_table.tpl', 'smarty_include_vars' => array('id' => 'starts','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['item']['starts'],'name' => 'starts')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['item']['rewardof'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/quest_table.tpl', 'smarty_include_vars' => array('id' => 'reward-of','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['item']['rewardof'],'name' => 'rewardfrom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['item']['reagentfor'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/spell_table.tpl', 'smarty_include_vars' => array('id' => 'reagent-for','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['item']['reagentfor'],'name' => 'reagentfor')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['item']['createdfrom'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/spell_table.tpl', 'smarty_include_vars' => array('id' => 'created-by','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['item']['createdfrom'],'name' => 'createdby')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['item']['disenchanting'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/item_table.tpl', 'smarty_include_vars' => array('id' => 'disenchanting','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['item']['disenchanting'],'name' => 'disenchanting')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['item']['disenchantedfrom'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/item_table.tpl', 'smarty_include_vars' => array('id' => 'disenchanting','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['item']['disenchantedfrom'],'name' => 'disenchantedfrom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['item']['milling'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/item_table.tpl', 'smarty_include_vars' => array('id' => 'milling','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['item']['milling'],'name' => 'milling')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['item']['milledfrom'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/item_table.tpl', 'smarty_include_vars' => array('id' => 'milling','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['item']['milledfrom'],'name' => 'milledfrom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['item']['criteria_of'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/achievement_table.tpl', 'smarty_include_vars' => array('id' => 'criteria-of','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['item']['criteria_of'],'name' => 'criteriaof')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
new Listview({template: 'comment', id: 'comments', name: LANG.tab_comments, tabs: tabsRelated, parent: 'listview-generic', data: lv_comments});
tabsRelated.flush();
</script>

				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/contribute.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			</div>
		</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>