<?php /* Smarty version 2.6.26, created on 2012-01-10 10:04:57
         compiled from itemset.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'itemset.tpl', 10, false),)), $this); ?>
﻿<?php $_smarty_tpl_vars = $this->_tpl_vars;
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
, name: '<?php echo ((is_array($_tmp=$this->_tpl_vars['itemset']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?>
'};
					g_initPath(<?php echo $this->_tpl_vars['page']['path']; ?>
);
				</script>

				<table class="infobox">
					<tr><th><?php echo $this->_config[0]['vars']['Quick_Facts']; ?>
</th></tr>
					<tr><td><div class="infobox-spacer"></div>
						<ul>
							<li><div><?php echo $this->_config[0]['vars']['Level']; ?>
: <?php echo $this->_tpl_vars['itemset']['minlevel']; ?>
<?php if ($this->_tpl_vars['itemset']['minlevel'] != $this->_tpl_vars['itemset']['maxlevel'] - "{".($this->_tpl_vars['itemset']).".maxlevel"): ?><?php endif; ?></div></li><?php if ($this->_tpl_vars['user']['roles'] == 2): ?><li><div><a href="?admin.editarticle=5.<?php echo $this->_tpl_vars['itemset']['entry']; ?>
"><?php echo $this->_config[0]['vars']['Write_article']; ?>
</a></div></li><?php endif; ?><?php if ($this->_tpl_vars['itemset']['Aflags'] & 2): ?><li><div><?php echo $this->_config[0]['vars']['Not_Available_to_Players']; ?>
</div></li><?php endif; ?><?php if ($this->_tpl_vars['itemset']['Aflags'] & 8): ?><li><div><?php echo $this->_config[0]['vars']['No_Longer_Available_to_Players']; ?>
</div></li><?php endif; ?> <?php if ($this->_tpl_vars['itemset']['Aflags'] & 16): ?><li><div><?php echo $this->_config[0]['vars']['Added_in_patch_24']; ?>
</div></li><?php endif; ?> 
						</ul>
					</td></tr>
				</table>

				<div class="text">
					<a href="http://fr.wowhead.com/?<?php echo $this->_tpl_vars['query']; ?>
" class="button-red"><em><b><i>Wowhead</i></b><span>Wowhead</span></em></a>
					<h1><?php echo $this->_tpl_vars['itemset']['name']; ?>
</h1>
					<?php echo $this->_tpl_vars['itemset']['article']; ?>

					<b><?php echo $this->_tpl_vars['itemset']['name']; ?>
</b> <?php echo $this->_config[0]['vars']['Itemset_Contains']; ?>
 <?php echo $this->_tpl_vars['itemset']['count']; ?>
 <?php echo $this->_config[0]['vars']['Pieces']; ?>
 <?php echo $this->_config[0]['vars']['Contains_small']; ?>
:
					<table class="iconlist">
						<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['itemset']['pieces']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?><tr><th align="right" id="iconlist-icon<?php echo $this->_sections['i']['index']+1; ?>
"></th><td><span class="q<?php echo $this->_tpl_vars['itemset']['pieces'][$this->_sections['i']['index']]['quality']; ?>
"><a href="?item=<?php echo $this->_tpl_vars['itemset']['pieces'][$this->_sections['i']['index']]['entry']; ?>
"><?php echo $this->_tpl_vars['itemset']['pieces'][$this->_sections['i']['index']]['name']; ?>
</a></span></td></tr><?php endfor; endif; ?> 
					</table>
					<script type="text/javascript">
						<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['itemset']['pieces']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>ge('iconlist-icon<?php echo $this->_sections['i']['index']+1; ?>
').appendChild(g_items.createIcon(<?php echo $this->_tpl_vars['itemset']['pieces'][$this->_sections['i']['index']]['entry']; ?>
, 0, 0));<?php endfor; endif; ?>
					</script>
					<h3><?php echo $this->_config[0]['vars']['Setboni']; ?>
</h3>

					<?php echo $this->_config[0]['vars']['Setboni_txt']; ?>

					<ul>
						<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['itemset']['spells']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?><li><div><?php echo $this->_tpl_vars['itemset']['spells'][$this->_sections['i']['index']]['bonus']; ?>
 <?php echo $this->_config[0]['vars']['Pieces']; ?>
: <a href="?spell=<?php echo $this->_tpl_vars['itemset']['spells'][$this->_sections['i']['index']]['entry']; ?>
"><?php echo $this->_tpl_vars['itemset']['spells'][$this->_sections['i']['index']]['tooltip']; ?>
</a></div></li><?php endfor; endif; ?>
					</ul>

				<h2><?php echo $this->_config[0]['vars']['Related']; ?>
</h2>

			</div>

			<div id="tabs-generic"></div>
			<div id="listview-generic" class="listview"></div>
<script type="text/javascript">
var tabsRelated = new Tabs({parent: ge('tabs-generic')});
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