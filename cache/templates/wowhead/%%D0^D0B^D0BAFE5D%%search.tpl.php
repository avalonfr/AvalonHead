<?php /* Smarty version 2.6.26, created on 2012-01-10 09:31:48
         compiled from search.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'search.tpl', 8, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="main">
	<div id="main-precontents"></div>
	<div class="main-contents" id="main-contents">
<?php if ($this->_tpl_vars['found']): ?>
		<div class="text">
			<a href="http://fr.wowhead.com/?<?php echo $this->_tpl_vars['query']; ?>
" class="button-red"><em><b><i>Wowhead</i></b><span>Wowhead</span></em></a>
			<h1><?php echo $this->_config[0]['vars']['Search_results_for']; ?>
 <i><?php echo ((is_array($_tmp=$this->_tpl_vars['search'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</i></h1>
		</div>
		<div id="tabs-generic"></div>
		<div id="listview-generic" class="listview"></div>
<script type="text/javascript">
var myTabs = new Tabs({parent: ge('tabs-generic')});
<?php if ($this->_tpl_vars['found']['item']): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/item_table.tpl', 'smarty_include_vars' => array('id' => 'items','name' => 'items','tabsid' => 'myTabs','data' => $this->_tpl_vars['found']['item'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if ($this->_tpl_vars['found']['npc']): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/creature_table.tpl', 'smarty_include_vars' => array('id' => 'npcs','name' => 'npcs','tabsid' => 'myTabs','data' => $this->_tpl_vars['found']['npc'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if ($this->_tpl_vars['found']['object']): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/object_table.tpl', 'smarty_include_vars' => array('id' => 'objects','name' => 'objects','tabsid' => 'myTabs','data' => $this->_tpl_vars['found']['object'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if ($this->_tpl_vars['found']['quest']): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/quest_table.tpl', 'smarty_include_vars' => array('id' => 'quests','name' => 'quests','tabsid' => 'myTabs','data' => $this->_tpl_vars['found']['quest'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if ($this->_tpl_vars['found']['itemset']): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/itemset_table.tpl', 'smarty_include_vars' => array('id' => 'itemsets','name' => 'itemsets','tabsid' => 'myTabs','data' => $this->_tpl_vars['found']['itemset'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if ($this->_tpl_vars['found']['spell']): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/spell_table.tpl', 'smarty_include_vars' => array('id' => 'spells','name' => 'uncategorizedspells','tabsid' => 'myTabs','data' => $this->_tpl_vars['found']['spell'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
myTabs.flush();
</script>
		<div class="clear"></div>
	<?php else: ?>
		<div class="text">
			<a href="http://fr.wowhead.com/?<?php echo $this->_tpl_vars['query']; ?>
" class="button-red"><em><b><i>Wowhead</i></b><span>Wowhead</span></em></a>
			<?php if (((is_array($_tmp=$this->_tpl_vars['search'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')) == ''): ?><h1><?php echo $this->_config[0]['vars']['No_results_empty']; ?>
</h1><?php else: ?><h1><?php echo $this->_config[0]['vars']['No_results_for']; ?>
 <i><?php echo ((is_array($_tmp=$this->_tpl_vars['search'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</i></h1><?php endif; ?>

			<?php echo $this->_config[0]['vars']['Please_try_some_different_keywords_or_check_your_spelling']; ?>

		</div>
		<?php endif; ?>
		</div>
	</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>