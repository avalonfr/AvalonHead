<?php /* Smarty version 2.6.26, created on 2012-01-06 13:51:53
         compiled from faction.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'faction.tpl', 10, false),)), $this); ?>
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
, name: '<?php echo ((is_array($_tmp=$this->_tpl_vars['faction']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?>
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
							<?php if (isset ( $this->_tpl_vars['faction']['group'] )): ?><li><div><?php echo $this->_config[0]['vars']['Group']; ?>
: <?php echo $this->_tpl_vars['faction']['group']; ?>
</div></li><?php endif; ?>
							<?php if (isset ( $this->_tpl_vars['faction']['side'] )): ?><li><div><?php echo $this->_config[0]['vars']['Side']; ?>
: <?php if ($this->_tpl_vars['faction']['side'] == 1): ?><span class="alliance-icon"><?php echo $this->_config[0]['vars']['Alliance']; ?>
</span><?php elseif ($this->_tpl_vars['faction']['side'] == 2): ?><span class="horde-icon"><?php echo $this->_config[0]['vars']['Horde']; ?>
</span><?php endif; ?></div></li><?php endif; ?>
						</ul>
					</td></tr>
				</table>
				<div class="text">
					<h1><?php echo $this->_tpl_vars['faction']['name']; ?>
</h1>
					<?php echo $this->_tpl_vars['faction']['description1']; ?>

					<?php if ($this->_tpl_vars['faction']['description1']): ?><h1></h1><?php endif; ?>
					<?php echo $this->_tpl_vars['faction']['description2']; ?>

					<div class="article-footer">Article ported from <a href="http://www.wowwiki.com/" target="_blank" class="q0">WoWWiki</a>&ndash; <a href="http://www.wowwiki.com/<?php echo $this->_tpl_vars['faction']['name']; ?>
" target="_blank" class="q0">Read more</a><br />Licensed under <a href="http://www.gnu.org/copyleft/fdl.html" target="_blank" class="q0">GFDL</a></div>
				<h2><?php echo $this->_config[0]['vars']['Related']; ?>
</h2>
				</div>
				<div id="tabs-generic"></div>
				<div id="listview-generic" class="listview"></div>
				<script type="text/javascript">
var tabsRelated = new Tabs({parent: ge('tabs-generic')});
<?php if (isset ( $this->_tpl_vars['faction']['items'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/item_table.tpl', 'smarty_include_vars' => array('id' => 'items','name' => 'items','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['faction']['items'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['faction']['npcs'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/creature_table.tpl', 'smarty_include_vars' => array('id' => 'npcs','name' => 'members','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['faction']['npcs'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['faction']['quests'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/quest_table.tpl', 'smarty_include_vars' => array('id' => 'quests','name' => 'quests','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['faction']['quests'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['faction']['criteria_of'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/achievement_table.tpl', 'smarty_include_vars' => array('id' => 'criteria-of','name' => 'criteriaof','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['faction']['criteria_of'])));
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
		</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>