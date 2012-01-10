<?php /* Smarty version 2.6.26, created on 2012-01-10 09:44:52
         compiled from npc.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'npc.tpl', 10, false),)), $this); ?>
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
				var g_pageInfo = {type: 1, typeId: <?php echo $this->_tpl_vars['npc']['entry']; ?>
, name: '<?php echo ((is_array($_tmp=$this->_tpl_vars['npc']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?>
'};
				g_initPath([0,4,<?php echo $this->_tpl_vars['npc']['type']; ?>
]);
			</script>

			<table class="infobox">
				<tr><th><?php echo $this->_config[0]['vars']['Quick_Facts']; ?>
</th></tr>
				<tr><td><div class="infobox-spacer"></div>
					<ul>
						<li><div><?php echo $this->_config[0]['vars']['Level']; ?>
: <?php if ($this->_tpl_vars['npc']['minlevel'] <> $this->_tpl_vars['npc']['maxlevel']): ?><?php echo $this->_tpl_vars['npc']['minlevel']; ?>
 - <?php endif; ?><?php echo $this->_tpl_vars['npc']['maxlevel']; ?>
</div></li>
						<li><div><?php echo $this->_config[0]['vars']['Classification']; ?>
: <?php echo $this->_tpl_vars['npc']['rank']; ?>
</div></li>
						<li><div><?php echo $this->_config[0]['vars']['React']; ?>
: <span class="q<?php if ($this->_tpl_vars['npc']['A'] == -1): ?>10<?php elseif ($this->_tpl_vars['npc']['A'] == 1): ?>2<?php else: ?><?php endif; ?>">A</span> <span class="q<?php if ($this->_tpl_vars['npc']['H'] == -1): ?>10<?php elseif ($this->_tpl_vars['npc']['H'] == 1): ?>2<?php else: ?><?php endif; ?>">H</span></div></li>
						<li><div><?php echo $this->_config[0]['vars']['Faction']; ?>
: <a href="?faction=<?php echo $this->_tpl_vars['npc']['faction_num']; ?>
"><?php echo $this->_tpl_vars['npc']['faction']; ?>
</a></div></li>
						<li><div><?php echo $this->_config[0]['vars']['Health']; ?>
: <?php if ($this->_tpl_vars['npc']['minhealth'] <> $this->_tpl_vars['npc']['maxhealth']): ?><?php echo $this->_tpl_vars['npc']['minhealth']; ?>
 - <?php endif; ?><?php echo $this->_tpl_vars['npc']['maxhealth']; ?>
</div></li>
<?php if (( $this->_tpl_vars['npc']['minmana'] || $this->_tpl_vars['npc']['maxmana'] )): ?>
						<li><div><?php echo $this->_config[0]['vars']['Mana']; ?>
: <?php if ($this->_tpl_vars['npc']['minmana'] <> $this->_tpl_vars['npc']['maxmana']): ?><?php echo $this->_tpl_vars['npc']['minmana']; ?>
 - <?php endif; ?><?php echo $this->_tpl_vars['npc']['maxmana']; ?>
</div></li>
<?php endif; ?>
<?php if (( $this->_tpl_vars['npc']['moneysilver'] > 0 ) || ( $this->_tpl_vars['npc']['moneygold'] > 0 ) || ( $this->_tpl_vars['npc']['moneycopper'] > 0 )): ?>
						<li><div><?php echo $this->_config[0]['vars']['Wealth']; ?>
:<?php if (( $this->_tpl_vars['npc']['moneygold'] > 0 )): ?>
 <span class="moneygold"><?php echo $this->_tpl_vars['npc']['moneygold']; ?>
</span><?php endif; ?>
<?php if (( $this->_tpl_vars['npc']['moneysilver'] > 0 )): ?>
 <span class="moneysilver"><?php echo $this->_tpl_vars['npc']['moneysilver']; ?>
</span><?php endif; ?>
<?php if (( $this->_tpl_vars['npc']['moneycopper'] > 0 )): ?>
 <span class="moneycopper"><?php echo $this->_tpl_vars['npc']['moneycopper']; ?>
</span><?php endif; ?>
</div></li>
<?php endif; ?>
<?php if ($this->_tpl_vars['npc']['mindmg'] > 0 && $this->_tpl_vars['npc']['maxdmg'] > 0): ?>
						<li><div><?php echo $this->_config[0]['vars']['Damage']; ?>
: <?php echo $this->_tpl_vars['npc']['mindmg']; ?>
 - <?php echo $this->_tpl_vars['npc']['maxdmg']; ?>
</div></li>
<?php endif; ?> 
<?php if ($this->_tpl_vars['npc']['armor'] > 0): ?>
						<li><div><?php echo $this->_config[0]['vars']['Armor']; ?>
: <?php echo $this->_tpl_vars['npc']['armor']; ?>
</div></li>
<?php endif; ?> 
					</ul>
				</td></tr>
			</table>

			<div class="text">
				<a href="http://fr.wowhead.com/?<?php echo $this->_tpl_vars['query']; ?>
" class="button-red"><em><b><i>Wowhead</i></b><span>Wowhead</span></em></a>
				<h1><?php echo $this->_tpl_vars['npc']['name']; ?>
<?php if ($this->_tpl_vars['npc']['subname']): ?> &lt;<?php echo $this->_tpl_vars['npc']['subname']; ?>
&gt;<?php endif; ?></h1>

<?php if ($this->_tpl_vars['npc']['heroic']): ?>
				<div><?php if ($this->_tpl_vars['npc']['heroic']['type'] == 1): ?><?php echo $this->_config[0]['vars']['This_is_heroic_NPC']; ?>
<?php else: ?><?php echo $this->_config[0]['vars']['This_is_normal_NPC']; ?>
<?php endif; ?> <a href="?npc=<?php echo $this->_tpl_vars['npc']['heroic']['entry']; ?>
"><?php echo $this->_tpl_vars['npc']['heroic']['name']; ?>
</a>.</div>
				<div class="pad"></div>
<?php endif; ?>

<?php if ($this->_tpl_vars['npc']['position']): ?>
				<div><?php echo $this->_config[0]['vars']['This_NPC_can_be_found_in']; ?>
 <?php echo '<span id="locations">'; ?><?php $_from = $this->_tpl_vars['npc']['position']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['zone'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['zone']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['zone']):
        $this->_foreach['zone']['iteration']++;
?><?php echo '<a href="javascript:;" onclick="'; ?><?php if ($this->_tpl_vars['zone']['atid']): ?><?php echo 'myMapper.update('; ?>{<?php echo 'zone:'; ?><?php echo $this->_tpl_vars['zone']['atid']; ?><?php echo ''; ?><?php if ($this->_tpl_vars['zone']['points']): ?><?php echo ','; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['zone']['points']): ?><?php echo 'coords:['; ?><?php $_from = $this->_tpl_vars['zone']['points']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['point'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['point']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['point']):
        $this->_foreach['point']['iteration']++;
?><?php echo '['; ?><?php echo $this->_tpl_vars['point']['x']; ?><?php echo ','; ?><?php echo $this->_tpl_vars['point']['y']; ?><?php echo ','; ?>{<?php echo 'label:\'$<br><div class=q0><small>'; ?><?php if (isset ( $this->_tpl_vars['point']['r'] )): ?><?php echo ''; ?><?php echo $this->_config[0]['vars']['Respawn']; ?><?php echo ':'; ?><?php if (isset ( $this->_tpl_vars['point']['r']['h'] )): ?><?php echo ' '; ?><?php echo $this->_tpl_vars['point']['r']['h']; ?><?php echo ''; ?><?php echo $this->_config[0]['vars']['hr']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['point']['r']['m'] )): ?><?php echo ' '; ?><?php echo $this->_tpl_vars['point']['r']['m']; ?><?php echo ''; ?><?php echo $this->_config[0]['vars']['min']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['point']['r']['s'] )): ?><?php echo ' '; ?><?php echo $this->_tpl_vars['point']['r']['s']; ?><?php echo ''; ?><?php echo $this->_config[0]['vars']['sec']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo $this->_config[0]['vars']['Waypoint']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['point']['events'] )): ?><?php echo '<br>'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['point']['events'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?><?php echo ''; ?><?php endif; ?><?php echo '</small></div>\',type:\''; ?><?php echo $this->_tpl_vars['point']['type']; ?><?php echo '\''; ?>}<?php echo ']'; ?><?php if (! ($this->_foreach['point']['iteration'] == $this->_foreach['point']['total'])): ?><?php echo ','; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo ']'; ?><?php endif; ?><?php echo ''; ?>}<?php echo ');ge(\'mapper-generic\').style.display=\'block\';'; ?><?php else: ?><?php echo 'ge(\'mapper-generic\').style.display=\'none\';'; ?><?php endif; ?><?php echo 'g_setSelectedLink(this, \'mapper\'); return false" onmousedown="return false">'; ?><?php echo $this->_tpl_vars['zone']['name']; ?><?php echo '</a>'; ?><?php if ($this->_tpl_vars['zone']['population'] > 1): ?><?php echo '&nbsp;('; ?><?php echo $this->_tpl_vars['zone']['population']; ?><?php echo ')'; ?><?php endif; ?><?php echo ''; ?><?php if (($this->_foreach['zone']['iteration'] == $this->_foreach['zone']['total'])): ?><?php echo '.'; ?><?php else: ?><?php echo ', '; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo '</span></div>'; ?>

				<div id="mapper-generic"></div>
				<div class="clear"></div>

				<script type="text/javascript">
					var myMapper = new Mapper({parent: 'mapper-generic', zone: '<?php echo $this->_tpl_vars['npc']['position'][0]['atid']; ?>
'});
					gE(ge('locations'), 'a')[0].onclick();
				</script>
<?php else: ?>
				<?php echo $this->_config[0]['vars']['This_NPC_cant_be_found']; ?>

<?php endif; ?>

				<h2><?php echo $this->_config[0]['vars']['Related']; ?>
</h2>

			</div>

			<div id="tabs-generic"></div>

			<div id="listview-generic" class="listview"></div>
<script type="text/javascript">
var tabsRelated = new Tabs({parent: ge('tabs-generic')});
<?php if (isset ( $this->_tpl_vars['npc']['sells'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/item_table.tpl', 'smarty_include_vars' => array('id' => 'sells','name' => 'sells','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['npc']['sells'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['npc']['drop'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/item_table.tpl', 'smarty_include_vars' => array('id' => 'drop','name' => 'drops','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['npc']['drop'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['npc']['pickpocketing'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/item_table.tpl', 'smarty_include_vars' => array('id' => 'pick-pocketing','name' => 'pickpocketing','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['npc']['pickpocketing'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['npc']['skinning'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/item_table.tpl', 'smarty_include_vars' => array('id' => 'skinning','name' => 'skinning','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['npc']['skinning'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['npc']['starts'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/quest_table.tpl', 'smarty_include_vars' => array('id' => 'starts','name' => 'starts','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['npc']['starts'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['npc']['ends'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/quest_table.tpl', 'smarty_include_vars' => array('id' => 'ends','name' => 'ends','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['npc']['ends'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['npc']['abilities'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/spell_table.tpl', 'smarty_include_vars' => array('id' => 'abilities','name' => 'abilities','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['npc']['abilities'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['npc']['objectiveof'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/quest_table.tpl', 'smarty_include_vars' => array('id' => 'objective-of','name' => 'objectiveof','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['npc']['objectiveof'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['npc']['teaches'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/spell_table.tpl', 'smarty_include_vars' => array('id' => 'teaches-ability','name' => 'teaches','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['npc']['teaches'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['npc']['criteria_of'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/achievement_table.tpl', 'smarty_include_vars' => array('id' => 'criteria-of','name' => 'criteriaof','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['npc']['criteria_of'])));
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

			<div class="clear"></div>
		</div>
	</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>