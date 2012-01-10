<?php /* Smarty version 2.6.26, created on 2012-01-06 13:51:29
         compiled from event.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'event.tpl', 10, false),)), $this); ?>
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
, name: '<?php echo ((is_array($_tmp=$this->_tpl_vars['event']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?>
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
							<li><div><?php echo $this->_config[0]['vars']['Start']; ?>
: <?php echo $this->_tpl_vars['event']['starttime']; ?>
</div></li>
							<li><div><?php echo $this->_config[0]['vars']['End']; ?>
: <?php echo $this->_tpl_vars['event']['endtime']; ?>
</div></li>
						</ul>
					</td></tr>
				</table>

				<div class="text">
					<?php if ($this->_tpl_vars['event']['holiday'] > 0): ?>
						<a href="http://www.wowhead.com/?event=<?php echo $this->_tpl_vars['event']['holiday']; ?>
" class="button-red"><em><b><i>Wowhead</i></b><span>Wowhead</span></em></a>
					<?php endif; ?>
					<h1><?php echo ((is_array($_tmp=$this->_tpl_vars['event']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</h1>

					<?php if (isset ( $this->_tpl_vars['event']['description'] )): ?>
						<?php echo $this->_tpl_vars['event']['description']; ?>

					<?php endif; ?>

					<?php echo $this->_config[0]['vars']['Last_start']; ?>
: <?php echo $this->_tpl_vars['event']['starttime']; ?>
<br>
					<?php echo $this->_config[0]['vars']['Last_end']; ?>
: <?php echo $this->_tpl_vars['event']['endtime']; ?>
<br>
					<?php echo $this->_config[0]['vars']['Next_start']; ?>
: <?php echo $this->_tpl_vars['event']['nextstarttime']; ?>
<br>
					<?php echo $this->_config[0]['vars']['Next_end']; ?>
: <?php echo $this->_tpl_vars['event']['nextendtime']; ?>
<br>
					<?php echo ''; ?><?php echo $this->_config[0]['vars']['Period']; ?><?php echo ':'; ?><?php if (isset ( $this->_tpl_vars['event']['period']['d'] )): ?><?php echo ' '; ?><?php echo $this->_tpl_vars['event']['period']['d']; ?><?php echo ' '; ?><?php echo $this->_config[0]['vars']['day']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['event']['period']['h'] )): ?><?php echo ' '; ?><?php echo $this->_tpl_vars['event']['period']['h']; ?><?php echo ' '; ?><?php echo $this->_config[0]['vars']['hr']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['event']['period']['m'] )): ?><?php echo ' '; ?><?php echo $this->_tpl_vars['event']['period']['m']; ?><?php echo ' '; ?><?php echo $this->_config[0]['vars']['min']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['event']['period']['s'] )): ?><?php echo ' '; ?><?php echo $this->_tpl_vars['event']['period']['s']; ?><?php echo ' '; ?><?php echo $this->_config[0]['vars']['sec']; ?><?php echo ''; ?><?php endif; ?><?php echo '<br>'; ?>


					<h2><?php echo $this->_config[0]['vars']['Related']; ?>
</h2>
				</div>

				<div id="tabs-generic"></div>
				<div id="listview-generic" class="listview"></div>
<script type="text/javascript">
var tabsRelated = new Tabs({parent: ge('tabs-generic')});
<?php if (isset ( $this->_tpl_vars['event']['npcs'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/creature_table.tpl', 'smarty_include_vars' => array('id' => 'npcs','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['event']['npcs'],'name' => 'npcs')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['event']['objects'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/object_table.tpl', 'smarty_include_vars' => array('id' => 'objects','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['event']['objects'],'name' => 'objects')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['event']['quests'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/quest_table.tpl', 'smarty_include_vars' => array('id' => 'quests','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['event']['quests'],'name' => 'quests')));
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