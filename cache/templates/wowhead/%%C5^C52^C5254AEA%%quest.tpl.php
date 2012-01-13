<?php /* Smarty version 2.6.26, created on 2012-01-10 22:41:02
         compiled from quest.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'quest.tpl', 10, false),array('modifier', 'replace', 'quest.tpl', 483, false),)), $this); ?>
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
					var g_pageInfo = {type: 5, typeId: <?php echo $this->_tpl_vars['quest']['entry']; ?>
, name: '<?php echo ((is_array($_tmp=$this->_tpl_vars['quest']['Title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?>
'};
					g_initPath([0,3,<?php echo $this->_tpl_vars['quest']['maincat']; ?>
,<?php echo $this->_tpl_vars['quest']['category']; ?>
]);
				</script>

				<table class="infobox">
					<tr><th><?php echo $this->_config[0]['vars']['Quick_Facts']; ?>
</th></tr>
					<tr><td>
						<div class="infobox-spacer"></div>
						<ul>
							<?php if ($this->_tpl_vars['quest']['QuestLevel'] > 0): ?><li><div><?php echo $this->_config[0]['vars']['Level']; ?>
: <?php echo $this->_tpl_vars['quest']['QuestLevel']; ?>
</div></li><?php endif; ?>
							<?php if ($this->_tpl_vars['quest']['MinLevel'] > 0): ?><li><div><?php echo $this->_config[0]['vars']['Requires_level']; ?>
: <?php echo $this->_tpl_vars['quest']['MinLevel']; ?>
</div></li><?php endif; ?>
							<?php if ($this->_tpl_vars['quest']['typename']): ?><li><div><?php echo $this->_config[0]['vars']['Type']; ?>
: <?php echo $this->_tpl_vars['quest']['typename']; ?>
</div></li><?php endif; ?>
							<?php if (isset ( $this->_tpl_vars['quest']['side'] )): ?><li><div><?php echo $this->_config[0]['vars']['Side']; ?>
: <span class="<?php if (( $this->_tpl_vars['quest']['side']['side'] == 1 )): ?>alliance<?php elseif (( $this->_tpl_vars['quest']['side']['side'] == 2 )): ?>horde<?php else: ?>both<?php endif; ?>-icon"><?php echo $this->_tpl_vars['quest']['side']['name']; ?>
</span></div></li><?php endif; ?>
							<?php echo ''; ?><?php if (isset ( $this->_tpl_vars['quest']['LimitTime'] )): ?><?php echo '<li><div>'; ?><?php echo $this->_config[0]['vars']['Timer']; ?><?php echo ':'; ?><?php if (isset ( $this->_tpl_vars['quest']['LimitTime']['h'] )): ?><?php echo ' '; ?><?php echo $this->_tpl_vars['quest']['LimitTime']['h']; ?><?php echo ' '; ?><?php echo $this->_config[0]['vars']['hr']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['quest']['LimitTime']['m'] )): ?><?php echo ' '; ?><?php echo $this->_tpl_vars['quest']['LimitTime']['m']; ?><?php echo ' '; ?><?php echo $this->_config[0]['vars']['min']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['quest']['LimitTime']['s'] )): ?><?php echo ' '; ?><?php echo $this->_tpl_vars['quest']['LimitTime']['s']; ?><?php echo ' '; ?><?php echo $this->_config[0]['vars']['sec']; ?><?php echo ''; ?><?php endif; ?><?php echo '</div></li>'; ?><?php endif; ?><?php echo ''; ?>

							<?php echo ''; ?><?php if (isset ( $this->_tpl_vars['quest']['start'] )): ?><?php echo '<li><div>'; ?><?php echo $this->_config[0]['vars']['Start']; ?><?php echo ':'; ?><?php unset($this->_sections['i']);
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['quest']['start']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['name'] = 'i';
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
?><?php echo ''; ?><?php if ($this->_tpl_vars['quest']['start'][$this->_sections['i']['index']]['side']): ?><?php echo ' <span class="'; ?><?php echo $this->_tpl_vars['quest']['start'][$this->_sections['i']['index']]['side']; ?><?php echo '-icon">'; ?><?php endif; ?><?php echo '<a href="?'; ?><?php echo $this->_tpl_vars['quest']['start'][$this->_sections['i']['index']]['type']; ?><?php echo '='; ?><?php echo $this->_tpl_vars['quest']['start'][$this->_sections['i']['index']]['entry']; ?><?php echo '"'; ?><?php if ($this->_tpl_vars['quest']['start'][$this->_sections['i']['index']]['type'] == 'item'): ?><?php echo ' class="icontiny q'; ?><?php echo $this->_tpl_vars['quest']['start'][$this->_sections['i']['index']]['quality']; ?><?php echo '" style="background-image: url(images/icons/tiny/'; ?><?php echo $this->_tpl_vars['quest']['start'][$this->_sections['i']['index']]['iconname']; ?><?php echo '.gif);"'; ?><?php endif; ?><?php echo '>'; ?><?php echo $this->_tpl_vars['quest']['start'][$this->_sections['i']['index']]['name']; ?><?php echo '</a>'; ?><?php if ($this->_tpl_vars['quest']['start'][$this->_sections['i']['index']]['event']): ?><?php echo ' <a href="?event='; ?><?php echo $this->_tpl_vars['quest']['start'][$this->_sections['i']['index']]['event']; ?><?php echo '" class="icontiny q0" style="background-image: url(images/icons/tiny/inv_holiday_christmas_present_01.gif);"> </a>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['quest']['start'][$this->_sections['i']['index']]['side']): ?><?php echo '</span>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_sections['i']['last']): ?><?php echo ''; ?><?php else: ?><?php echo ', <br><span style="visibility: hidden;">'; ?><?php echo $this->_config[0]['vars']['Start']; ?><?php echo ': </span>'; ?><?php endif; ?><?php echo ''; ?><?php endfor; endif; ?><?php echo '</div></li>'; ?><?php endif; ?><?php echo ''; ?>

							<?php if (isset ( $this->_tpl_vars['quest']['end'] )): ?><li><div><?php echo $this->_config[0]['vars']['End']; ?>
: <?php unset($this->_sections['i']);
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['quest']['end']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['name'] = 'i';
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
?><?php if ($this->_tpl_vars['quest']['end'][$this->_sections['i']['index']]['side']): ?><span class="<?php echo $this->_tpl_vars['quest']['start'][$this->_sections['i']['index']]['side']; ?>
-icon"><?php endif; ?><a href="?<?php echo $this->_tpl_vars['quest']['end'][$this->_sections['i']['index']]['type']; ?>
=<?php echo $this->_tpl_vars['quest']['end'][$this->_sections['i']['index']]['entry']; ?>
"><?php echo $this->_tpl_vars['quest']['end'][$this->_sections['i']['index']]['name']; ?>
</a><?php if ($this->_tpl_vars['quest']['end'][$this->_sections['i']['index']]['side']): ?></span><?php endif; ?><?php if ($this->_sections['i']['last']): ?><?php else: ?>, <br><span style="visibility: hidden;"><?php echo $this->_config[0]['vars']['End']; ?>
: </span><?php endif; ?><?php endfor; endif; ?></div></li><?php endif; ?>
							<?php if (isset ( $this->_tpl_vars['quest']['reqskill'] )): ?><li><div><?php echo $this->_config[0]['vars']['Skill']; ?>
: <?php echo $this->_tpl_vars['quest']['reqskill']['name']; ?>
 (<?php echo $this->_tpl_vars['quest']['reqskill']['value']; ?>
)</div></li><?php endif; ?>
							<?php if (isset ( $this->_tpl_vars['quest']['reqclass'] )): ?><li><div><?php echo $this->_config[0]['vars']['Class']; ?>
: <?php echo $this->_tpl_vars['quest']['reqclass']; ?>
</div></li><?php endif; ?>
							<?php if (isset ( $this->_tpl_vars['quest']['Sharable'] )): ?><li><div><?php echo $this->_config[0]['vars']['Sharable']; ?>
</div></li><?php endif; ?>
							<?php if (isset ( $this->_tpl_vars['quest']['Daily'] )): ?><li><div><?php echo $this->_config[0]['vars']['Daily']; ?>
</div></li><?php elseif (isset ( $this->_tpl_vars['quest']['Repeatable'] )): ?><li><div><?php echo $this->_config[0]['vars']['Repeatable']; ?>
</div></li><?php endif; ?>
						</ul>
					</td></tr>
<?php echo ''; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['quest']['series'] )): ?><?php echo '<tr><th>'; ?><?php echo $this->_config[0]['vars']['Series']; ?><?php echo '</th></tr><tr><td><div class="infobox-spacer"></div><table class="series">'; ?><?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['quest']['series']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><?php echo '<tr><th>'; ?><?php echo $this->_sections['i']['index']+1; ?><?php echo '.</th><td>'; ?><?php if (( $this->_tpl_vars['quest']['series'][$this->_sections['i']['index']]['entry'] == $this->_tpl_vars['quest']['entry'] )): ?><?php echo '<b>'; ?><?php echo $this->_tpl_vars['quest']['series'][$this->_sections['i']['index']]['Title']; ?><?php echo '</b>'; ?><?php else: ?><?php echo '<div><a href="?quest='; ?><?php echo $this->_tpl_vars['quest']['series'][$this->_sections['i']['index']]['entry']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['quest']['series'][$this->_sections['i']['index']]['Title']; ?><?php echo '</a></div>'; ?><?php endif; ?><?php echo '</td></tr>'; ?><?php endfor; endif; ?><?php echo '</table></td></tr>'; ?><?php endif; ?><?php echo ''; ?>

<?php echo ''; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['quest']['req'] )): ?><?php echo '<tr><th><span class="tip" onmouseover="Tooltip.showAtCursor(event, \''; ?><?php echo $this->_config[0]['vars']['Prev_Quests_Desc']; ?><?php echo '\', 0, 0, \'q\')" onmousemove="Tooltip.cursorUpdate(event)" onmouseout="Tooltip.hide()">'; ?><?php echo $this->_config[0]['vars']['Prev_Quests']; ?><?php echo '</span></th></tr><tr><td><div class="infobox-spacer"></div><ul>'; ?><?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['quest']['req']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><?php echo '<li><div><a href="?quest='; ?><?php echo $this->_tpl_vars['quest']['req'][$this->_sections['i']['index']]['entry']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['quest']['req'][$this->_sections['i']['index']]['Title']; ?><?php echo '</a></div></li>'; ?><?php endfor; endif; ?><?php echo '</ul></td></tr>'; ?><?php endif; ?><?php echo ''; ?>

<?php echo ''; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['quest']['reqone'] )): ?><?php echo '<tr><th><span class="tip" onmouseover="Tooltip.showAtCursor(event, \''; ?><?php echo $this->_config[0]['vars']['ReqOne_Quests_Desc']; ?><?php echo '\', 0, 0, \'q\')" onmousemove="Tooltip.cursorUpdate(event)" onmouseout="Tooltip.hide()">'; ?><?php echo $this->_config[0]['vars']['ReqOne_Quests']; ?><?php echo '</span></th></tr><tr><td><div class="infobox-spacer"></div><ul>'; ?><?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['quest']['reqone']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><?php echo '<li><div><a href="?quest='; ?><?php echo $this->_tpl_vars['quest']['reqone'][$this->_sections['i']['index']]['entry']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['quest']['reqone'][$this->_sections['i']['index']]['Title']; ?><?php echo '</a></div></li>'; ?><?php endfor; endif; ?><?php echo '</ul></td></tr>'; ?><?php endif; ?><?php echo ''; ?>

<?php echo ''; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['quest']['enabledby'] )): ?><?php echo '<tr><th><span class="tip" onmouseover="Tooltip.showAtCursor(event, \''; ?><?php echo $this->_config[0]['vars']['Enabledby_Quests_Desc']; ?><?php echo '\', 0, 0, \'q\')" onmousemove="Tooltip.cursorUpdate(event)" onmouseout="Tooltip.hide()">'; ?><?php echo $this->_config[0]['vars']['Enabledby_Quests']; ?><?php echo '</span></th></tr><tr><td><div class="infobox-spacer"></div><ul>'; ?><?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['quest']['enabledby']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><?php echo '<li><div><a href="?quest='; ?><?php echo $this->_tpl_vars['quest']['enabledby'][$this->_sections['i']['index']]['entry']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['quest']['enabledby'][$this->_sections['i']['index']]['Title']; ?><?php echo '</a></div></li>'; ?><?php endfor; endif; ?><?php echo '</ul></td></tr>'; ?><?php endif; ?><?php echo ''; ?>

<?php echo ''; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['quest']['closes'] )): ?><?php echo '<tr><th><span class="tip" onmouseover="Tooltip.showAtCursor(event, \''; ?><?php echo $this->_config[0]['vars']['Closes_Quests_Desc']; ?><?php echo '\', 0, 0, \'q\')" onmousemove="Tooltip.cursorUpdate(event)" onmouseout="Tooltip.hide()">'; ?><?php echo $this->_config[0]['vars']['Closes_Quests']; ?><?php echo '</span></th></tr><tr><td><div class="infobox-spacer"></div><ul>'; ?><?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['quest']['closes']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><?php echo '<li><div><a href="?quest='; ?><?php echo $this->_tpl_vars['quest']['closes'][$this->_sections['i']['index']]['entry']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['quest']['closes'][$this->_sections['i']['index']]['Title']; ?><?php echo '</a></div></li>'; ?><?php endfor; endif; ?><?php echo '</ul></td></tr>'; ?><?php endif; ?><?php echo ''; ?>

<?php echo ''; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['quest']['enables'] )): ?><?php echo '<tr><th><span class="tip" onmouseover="Tooltip.showAtCursor(event, \''; ?><?php echo $this->_config[0]['vars']['Enables_Quests_Desc']; ?><?php echo '\', 0, 0, \'q\')" onmousemove="Tooltip.cursorUpdate(event)" onmouseout="Tooltip.hide()">'; ?><?php echo $this->_config[0]['vars']['Enables_Quests']; ?><?php echo '</span></th></tr><tr><td><div class="infobox-spacer"></div><ul>'; ?><?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['quest']['enables']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><?php echo '<li><div><a href="?quest='; ?><?php echo $this->_tpl_vars['quest']['enables'][$this->_sections['i']['index']]['entry']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['quest']['enables'][$this->_sections['i']['index']]['Title']; ?><?php echo '</a></div></li>'; ?><?php endfor; endif; ?><?php echo '</ul></td></tr>'; ?><?php endif; ?><?php echo ''; ?>

<?php echo ''; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['quest']['open'] )): ?><?php echo '<tr><th><span class="tip" onmouseover="Tooltip.showAtCursor(event, \''; ?><?php echo $this->_config[0]['vars']['Open_Quests_Desc']; ?><?php echo '\', 0, 0, \'q\')" onmousemove="Tooltip.cursorUpdate(event)" onmouseout="Tooltip.hide()">'; ?><?php echo $this->_config[0]['vars']['Open_Quests']; ?><?php echo '</span></th></tr><tr><td><div class="infobox-spacer"></div><ul>'; ?><?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['quest']['open']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><?php echo '<li>'; ?><?php if (( $this->_tpl_vars['quest']['open'][$this->_sections['i']['index']]['entry'] == $this->_tpl_vars['quest']['entry'] )): ?><?php echo '<b>'; ?><?php echo $this->_tpl_vars['quest']['open'][$this->_sections['i']['index']]['Title']; ?><?php echo '</b>'; ?><?php else: ?><?php echo '<div><a href="?quest='; ?><?php echo $this->_tpl_vars['quest']['open'][$this->_sections['i']['index']]['entry']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['quest']['open'][$this->_sections['i']['index']]['Title']; ?><?php echo '</a></div>'; ?><?php endif; ?><?php echo '</li>'; ?><?php endfor; endif; ?><?php echo '</ul></td></tr>'; ?><?php endif; ?><?php echo ''; ?>

<?php if (isset ( $this->_tpl_vars['quest']['flagsdetails'] )): ?>
					<tr><td>
						<div class="infobox-spacer"></div>
						<span class="tip" id="infobox-details"
							onmouseover="Tooltip.showAtCursor(event, '<?php $_from = $this->_tpl_vars['quest']['flagsdetails']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['str']):
?>- <?php echo ((is_array($_tmp=$this->_tpl_vars['str'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
<br><?php endforeach; endif; unset($_from); ?>', 0, 0, 0)"
							onmousemove="Tooltip.cursorUpdate(event)"
							onmouseout="Tooltip.hide()"><?php echo $this->_config[0]['vars']['Related']; ?>
</span>
					</td></tr>
<?php endif; ?>
				</table>

				<div class="text">
					<a href="http://fr.wowhead.com/?<?php echo $this->_tpl_vars['query']; ?>
" class="button-red"><em><b><i>Wowhead</i></b><span>Wowhead</span></em></a>
					<h1><?php echo $this->_tpl_vars['quest']['Title']; ?>
</h1>

					<?php if (isset ( $this->_tpl_vars['quest']['RequiredMinRep'] ) || isset ( $this->_tpl_vars['quest']['RequiredMaxRep'] )): ?>
						<?php echo $this->_config[0]['vars']['Additional_requirements_to_obtain_this_quest']; ?>
:<br>
						<?php echo '<ul>'; ?><?php if (isset ( $this->_tpl_vars['quest']['RequiredMinRep'] )): ?><?php echo '<li><div>'; ?><?php echo $this->_config[0]['vars']['Your_reputation_with']; ?><?php echo ' <a href="?faction='; ?><?php echo $this->_tpl_vars['quest']['RequiredMinRep']['entry']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['quest']['RequiredMinRep']['name']; ?><?php echo '</a> '; ?><?php echo $this->_config[0]['vars']['must_be']; ?><?php echo ' '; ?><?php echo $this->_config[0]['vars']['higher_than']; ?><?php echo ' '; ?><?php echo $this->_tpl_vars['quest']['RequiredMinRep']['value']; ?><?php echo '</div></li>'; ?><?php endif; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['quest']['RequiredMaxRep'] )): ?><?php echo '<li><div>'; ?><?php echo $this->_config[0]['vars']['Your_reputation_with']; ?><?php echo ' <a href="?faction='; ?><?php echo $this->_tpl_vars['quest']['RequiredMaxRep']['entry']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['quest']['RequiredMaxRep']['name']; ?><?php echo '</a> '; ?><?php echo $this->_config[0]['vars']['must_be']; ?><?php echo ' '; ?><?php echo $this->_config[0]['vars']['lower_than']; ?><?php echo ' '; ?><?php echo $this->_tpl_vars['quest']['RequiredMaxRep']['value']; ?><?php echo '</div></li>'; ?><?php endif; ?><?php echo '</ul><div class="line"></div>'; ?>

					<?php endif; ?>

					<?php if ($this->_tpl_vars['quest']['Objectives']): ?>
						<?php echo $this->_tpl_vars['quest']['Objectives']; ?>

					<?php else: ?>
						<h3><?php echo $this->_config[0]['vars']['Progress']; ?>
</h3>
						<?php echo $this->_tpl_vars['quest']['RequestItemsText']; ?>

					<?php endif; ?>


<?php if (isset ( $this->_tpl_vars['quest']['itemreqs'] ) || isset ( $this->_tpl_vars['quest']['coreqs'] ) || isset ( $this->_tpl_vars['quest']['factionreq'] ) || isset ( $this->_tpl_vars['quest']['splayers'] ) || isset ( $this->_tpl_vars['quest']['moneyreq'] ) || ! empty ( $this->_tpl_vars['quest']['EndText'] ) || isset ( $this->_tpl_vars['quest']['PlayersSlain'] ) && $this->_tpl_vars['quest']['PlayersSlain']): ?>
<table class="iconlist">
<?php echo ''; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['quest']['coreqs'] )): ?><?php echo ''; ?><?php $_from = $this->_tpl_vars['quest']['coreqs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['req']):
?><?php echo '<tr><th><ul><li><var>&nbsp;</var></li></ul></th><td><a href="?'; ?><?php echo $this->_tpl_vars['req']['req_type']; ?><?php echo '='; ?><?php echo $this->_tpl_vars['req']['entry']; ?><?php echo '">'; ?><?php if (! empty ( $this->_tpl_vars['quest']['EndText'] )): ?><?php echo ''; ?><?php echo $this->_tpl_vars['quest']['EndText']; ?><?php echo '</a>'; ?><?php else: ?><?php echo ''; ?><?php if (! empty ( $this->_tpl_vars['quest']['ObjectiveText'][$this->_tpl_vars['i']] )): ?><?php echo ''; ?><?php echo $this->_tpl_vars['quest']['ObjectiveText'][$this->_tpl_vars['i']]; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo $this->_tpl_vars['req']['name']; ?><?php echo ''; ?><?php endif; ?><?php echo '</a>'; ?><?php if (empty ( $this->_tpl_vars['quest']['ObjectiveText'][$this->_tpl_vars['i']] ) && $this->_tpl_vars['req']['req_type'] == 'npc'): ?><?php echo ' '; ?><?php echo $this->_config[0]['vars']['slain']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['req']['count'] > 1): ?><?php echo ' ('; ?><?php echo $this->_tpl_vars['req']['count']; ?><?php echo ')'; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['req']['spell']): ?><?php echo '<span class=\'q0\'> [<a href=\'?spell='; ?><?php echo $this->_tpl_vars['req']['spell']['entry']; ?><?php echo '\'>'; ?><?php echo $this->_tpl_vars['req']['spell']['name']; ?><?php echo '</a>]</div>'; ?><?php endif; ?><?php echo '</td></tr>'; ?><?php endforeach; endif; unset($_from); ?><?php echo ''; ?><?php elseif (! empty ( $this->_tpl_vars['quest']['EndText'] )): ?><?php echo '<tr><th><ul><li><var>&nbsp;</var></li></ul></th><td>'; ?><?php echo $this->_tpl_vars['quest']['EndText']; ?><?php echo '</td></tr>'; ?><?php endif; ?><?php echo ''; ?>


<?php echo ''; ?><?php if (isset ( $this->_tpl_vars['quest']['itemreqs'] )): ?><?php echo ''; ?><?php $_from = $this->_tpl_vars['quest']['itemreqs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['item']):
?><?php echo '<tr><th align="right" id="iconlist-icon'; ?><?php echo $this->_tpl_vars['i']; ?><?php echo '"></th><td><span class="q'; ?><?php echo $this->_tpl_vars['item']['quality']; ?><?php echo '"><a href="?item='; ?><?php echo $this->_tpl_vars['item']['entry']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['item']['name']; ?><?php echo '</a></span>'; ?><?php if ($this->_tpl_vars['item']['count'] > 1): ?><?php echo ' ('; ?><?php echo $this->_tpl_vars['item']['count']; ?><?php echo ')'; ?><?php endif; ?><?php echo '</td></tr>'; ?><?php endforeach; endif; unset($_from); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>


<?php echo ''; ?><?php if (isset ( $this->_tpl_vars['quest']['objectreqs'] )): ?><?php echo ''; ?><?php $_from = $this->_tpl_vars['quest']['objectreqs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['object']):
?><?php echo '<tr><th><ul><li><var>&nbsp;</var></li></ul></th><td><a href="?object='; ?><?php echo $this->_tpl_vars['object']['entry']; ?><?php echo '">'; ?><?php if (isset ( $this->_tpl_vars['quest']['ObjectiveText'][$this->_tpl_vars['i']] )): ?><?php echo ''; ?><?php echo $this->_tpl_vars['quest']['ObjectiveText'][$this->_tpl_vars['i']]; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo $this->_tpl_vars['object']['name']; ?><?php echo ''; ?><?php endif; ?><?php echo '</a>'; ?><?php if ($this->_tpl_vars['object']['count'] > 1): ?><?php echo '('; ?><?php echo $this->_tpl_vars['object']['count']; ?><?php echo ')'; ?><?php endif; ?><?php echo '</td></tr>'; ?><?php endforeach; endif; unset($_from); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>


<?php echo ''; ?><?php if (isset ( $this->_tpl_vars['quest']['factionreq'] )): ?><?php echo '<tr><th><ul><li><var>&nbsp;</var></li></ul></th><td><a href="?faction='; ?><?php echo $this->_tpl_vars['quest']['factionreq']['entry']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['quest']['factionreq']['name']; ?><?php echo '</a> ('; ?><?php echo $this->_tpl_vars['quest']['factionreq']['value']; ?><?php echo ')</td></tr>'; ?><?php endif; ?><?php echo ''; ?>

<?php echo ''; ?><?php if (isset ( $this->_tpl_vars['quest']['PlayersSlain'] ) && $this->_tpl_vars['quest']['PlayersSlain']): ?><?php echo '<tr><th><ul><li><var>&nbsp;</var></li></ul></th><td>'; ?><?php echo $this->_tpl_vars['quest']['PlayersSlain']; ?><?php echo ' '; ?><?php echo $this->_config[0]['vars']['Players_Slain']; ?><?php echo '</td></tr>'; ?><?php endif; ?><?php echo ''; ?>


<?php if (isset ( $this->_tpl_vars['quest']['splayers'] )): ?><tr><th><ul><li><var>&nbsp;</var></li></ul></th><td><?php echo $this->_config[0]['vars']['Suggested_Players']; ?>
 [<?php echo $this->_tpl_vars['quest']['splayers']; ?>
]</td></tr><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['quest']['moneyreq'] )): ?>
	<tr>
		<th><ul><li><var>&nbsp;</var></li></ul></th>
		<td>
			<?php echo $this->_config[0]['vars']['Required_Money']; ?>
: 
			<?php if (isset ( $this->_tpl_vars['quest']['moneyreq']['moneygold'] )): ?><span class="moneygold"><?php echo $this->_tpl_vars['quest']['moneyreq']['moneygold']; ?>
</span><?php endif; ?>
			<?php if (isset ( $this->_tpl_vars['quest']['moneyreq']['moneysilver'] )): ?><span class="moneysilver"><?php echo $this->_tpl_vars['quest']['moneyreq']['moneysilver']; ?>
</span><?php endif; ?>
			<?php if (isset ( $this->_tpl_vars['quest']['moneyreq']['moneycopper'] )): ?><span class="moneycopper"><?php echo $this->_tpl_vars['quest']['moneyreq']['moneycopper']; ?>
</span><?php endif; ?>
		</td>
	</tr>
<?php endif; ?>
</table>
<?php if (isset ( $this->_tpl_vars['quest']['itemreqs'] )): ?>
	<script type="text/javascript">
	<?php $_from = $this->_tpl_vars['quest']['itemreqs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['item']):
?>
		ge('iconlist-icon<?php echo $this->_tpl_vars['i']; ?>
').appendChild(g_items.createIcon(<?php echo $this->_tpl_vars['item']['entry']; ?>
, 0, <?php echo $this->_tpl_vars['item']['count']; ?>
));
	<?php endforeach; endif; unset($_from); ?>
	</script>
<?php endif; ?>
<?php endif; ?>

<?php if (isset ( $this->_tpl_vars['quest']['SrcItem'] )): ?>
<div class="pad"></div>
<?php echo $this->_config[0]['vars']['Provided_Item']; ?>
:
<table class="iconlist">
	<tr>
		<th align="right" id="iconlist-icon-src"></th>
		<td><span class="q1"><a href="?item=<?php echo $this->_tpl_vars['quest']['SrcItem']['entry']; ?>
"><?php echo $this->_tpl_vars['quest']['SrcItem']['name']; ?>
</a></span></td>
	</tr>
</table>
<script type="text/javascript">ge('iconlist-icon-src').appendChild(g_items.createIcon(<?php echo $this->_tpl_vars['quest']['SrcItem']['entry']; ?>
, 0, <?php echo $this->_tpl_vars['quest']['SrcItem']['count']; ?>
));</script>
<?php endif; ?>

<?php if (isset ( $this->_tpl_vars['quest']['SrcSpell'] ) && $this->_tpl_vars['quest']['SrcSpell']): ?>
<div class="pad"></div>
<?php echo $this->_config[0]['vars']['The_following_spell_will_be_cast_on_you']; ?>
:
<table class="icontab">
	<tr>
		<th align="right" id="icontab-icon-spl"></th>
		<td><span class="q1"><a href="?spell=<?php echo $this->_tpl_vars['quest']['SrcSpell']['entry']; ?>
"><?php echo $this->_tpl_vars['quest']['SrcSpell']['name']; ?>
</a></span></td>
	</tr>
</table>
<script type="text/javascript">ge('icontab-icon-spl').appendChild(g_spells.createIcon(<?php echo $this->_tpl_vars['quest']['SrcSpell']['entry']; ?>
, 0, 0));</script>
<?php endif; ?>

<?php if ($this->_tpl_vars['quest']['Details']): ?>
						<h3><?php echo $this->_config[0]['vars']['Description']; ?>
</h3>
						<?php echo $this->_tpl_vars['quest']['Details']; ?>

<?php endif; ?>

<?php if (( isset ( $this->_tpl_vars['quest']['itemchoices'] ) || isset ( $this->_tpl_vars['quest']['itemrewards'] ) || isset ( $this->_tpl_vars['quest']['money'] ) || isset ( $this->_tpl_vars['quest']['spellreward'] ) ) || isset ( $this->_tpl_vars['quest']['BonusTalents'] ) && $this->_tpl_vars['quest']['BonusTalents']): ?>
					<h3><?php echo $this->_config[0]['vars']['Rewards']; ?>
</h3>

<?php if (isset ( $this->_tpl_vars['quest']['itemchoices'] )): ?>
						<div class="pad"></div>
						<?php echo $this->_config[0]['vars']['You_will_be_able_to_choose_one_of_these_rewards']; ?>
:
						<div class="pad"></div>
						<table class="icontab">
						<tr>
<?php unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['quest']['itemchoices']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['j']['show'] = true;
$this->_sections['j']['max'] = $this->_sections['j']['loop'];
$this->_sections['j']['step'] = 1;
$this->_sections['j']['start'] = $this->_sections['j']['step'] > 0 ? 0 : $this->_sections['j']['loop']-1;
if ($this->_sections['j']['show']) {
    $this->_sections['j']['total'] = $this->_sections['j']['loop'];
    if ($this->_sections['j']['total'] == 0)
        $this->_sections['j']['show'] = false;
} else
    $this->_sections['j']['total'] = 0;
if ($this->_sections['j']['show']):

            for ($this->_sections['j']['index'] = $this->_sections['j']['start'], $this->_sections['j']['iteration'] = 1;
                 $this->_sections['j']['iteration'] <= $this->_sections['j']['total'];
                 $this->_sections['j']['index'] += $this->_sections['j']['step'], $this->_sections['j']['iteration']++):
$this->_sections['j']['rownum'] = $this->_sections['j']['iteration'];
$this->_sections['j']['index_prev'] = $this->_sections['j']['index'] - $this->_sections['j']['step'];
$this->_sections['j']['index_next'] = $this->_sections['j']['index'] + $this->_sections['j']['step'];
$this->_sections['j']['first']      = ($this->_sections['j']['iteration'] == 1);
$this->_sections['j']['last']       = ($this->_sections['j']['iteration'] == $this->_sections['j']['total']);
?>
								<th id="icontab-icon<?php echo $this->_sections['j']['index']+1; ?>
"></th>
								<td>
									<span class="q<?php echo $this->_tpl_vars['quest']['itemchoices'][$this->_sections['j']['index']]['quality']; ?>
">
										<a href="?item=<?php echo $this->_tpl_vars['quest']['itemchoices'][$this->_sections['j']['index']]['entry']; ?>
">
											<?php echo $this->_tpl_vars['quest']['itemchoices'][$this->_sections['j']['index']]['name']; ?>

										</a>
									</span>
								</td>
<?php endfor; endif; ?>
						</tr>
						</table>
						<script type="text/javascript">
						<?php unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['quest']['itemchoices']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['j']['show'] = true;
$this->_sections['j']['max'] = $this->_sections['j']['loop'];
$this->_sections['j']['step'] = 1;
$this->_sections['j']['start'] = $this->_sections['j']['step'] > 0 ? 0 : $this->_sections['j']['loop']-1;
if ($this->_sections['j']['show']) {
    $this->_sections['j']['total'] = $this->_sections['j']['loop'];
    if ($this->_sections['j']['total'] == 0)
        $this->_sections['j']['show'] = false;
} else
    $this->_sections['j']['total'] = 0;
if ($this->_sections['j']['show']):

            for ($this->_sections['j']['index'] = $this->_sections['j']['start'], $this->_sections['j']['iteration'] = 1;
                 $this->_sections['j']['iteration'] <= $this->_sections['j']['total'];
                 $this->_sections['j']['index'] += $this->_sections['j']['step'], $this->_sections['j']['iteration']++):
$this->_sections['j']['rownum'] = $this->_sections['j']['iteration'];
$this->_sections['j']['index_prev'] = $this->_sections['j']['index'] - $this->_sections['j']['step'];
$this->_sections['j']['index_next'] = $this->_sections['j']['index'] + $this->_sections['j']['step'];
$this->_sections['j']['first']      = ($this->_sections['j']['iteration'] == 1);
$this->_sections['j']['last']       = ($this->_sections['j']['iteration'] == $this->_sections['j']['total']);
?>
							ge('icontab-icon<?php echo $this->_sections['j']['index']+1; ?>
').appendChild(g_items.createIcon(<?php echo $this->_tpl_vars['quest']['itemchoices'][$this->_sections['j']['index']]['entry']; ?>
, 1, <?php echo $this->_tpl_vars['quest']['itemchoices'][$this->_sections['j']['index']]['count']; ?>
));
						<?php endfor; endif; ?>
						</script>
<?php endif; ?>

<?php if (isset ( $this->_tpl_vars['quest']['itemrewards'] )): ?>
						<div class="pad"></div>
						<?php echo $this->_config[0]['vars']['You_will_receive']; ?>
:
						<div class="pad"></div>
						<table class="icontab">
						<tr><?php echo ''; ?><?php unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['quest']['itemrewards']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['j']['show'] = true;
$this->_sections['j']['max'] = $this->_sections['j']['loop'];
$this->_sections['j']['step'] = 1;
$this->_sections['j']['start'] = $this->_sections['j']['step'] > 0 ? 0 : $this->_sections['j']['loop']-1;
if ($this->_sections['j']['show']) {
    $this->_sections['j']['total'] = $this->_sections['j']['loop'];
    if ($this->_sections['j']['total'] == 0)
        $this->_sections['j']['show'] = false;
} else
    $this->_sections['j']['total'] = 0;
if ($this->_sections['j']['show']):

            for ($this->_sections['j']['index'] = $this->_sections['j']['start'], $this->_sections['j']['iteration'] = 1;
                 $this->_sections['j']['iteration'] <= $this->_sections['j']['total'];
                 $this->_sections['j']['index'] += $this->_sections['j']['step'], $this->_sections['j']['iteration']++):
$this->_sections['j']['rownum'] = $this->_sections['j']['iteration'];
$this->_sections['j']['index_prev'] = $this->_sections['j']['index'] - $this->_sections['j']['step'];
$this->_sections['j']['index_next'] = $this->_sections['j']['index'] + $this->_sections['j']['step'];
$this->_sections['j']['first']      = ($this->_sections['j']['iteration'] == 1);
$this->_sections['j']['last']       = ($this->_sections['j']['iteration'] == $this->_sections['j']['total']);
?><?php echo '<th id="icontab-icon'; ?><?php echo $this->_sections['j']['index']+1; ?><?php echo '"></th><td><span class="q'; ?><?php echo $this->_tpl_vars['quest']['itemrewards'][$this->_sections['j']['index']]['quality']; ?><?php echo '"><a href="?item='; ?><?php echo $this->_tpl_vars['quest']['itemrewards'][$this->_sections['j']['index']]['entry']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['quest']['itemrewards'][$this->_sections['j']['index']]['name']; ?><?php echo '</a></span></td>'; ?><?php endfor; endif; ?><?php echo '</tr>'; ?>

						</table>
						<script type="text/javascript">
						<?php unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['quest']['itemrewards']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['j']['show'] = true;
$this->_sections['j']['max'] = $this->_sections['j']['loop'];
$this->_sections['j']['step'] = 1;
$this->_sections['j']['start'] = $this->_sections['j']['step'] > 0 ? 0 : $this->_sections['j']['loop']-1;
if ($this->_sections['j']['show']) {
    $this->_sections['j']['total'] = $this->_sections['j']['loop'];
    if ($this->_sections['j']['total'] == 0)
        $this->_sections['j']['show'] = false;
} else
    $this->_sections['j']['total'] = 0;
if ($this->_sections['j']['show']):

            for ($this->_sections['j']['index'] = $this->_sections['j']['start'], $this->_sections['j']['iteration'] = 1;
                 $this->_sections['j']['iteration'] <= $this->_sections['j']['total'];
                 $this->_sections['j']['index'] += $this->_sections['j']['step'], $this->_sections['j']['iteration']++):
$this->_sections['j']['rownum'] = $this->_sections['j']['iteration'];
$this->_sections['j']['index_prev'] = $this->_sections['j']['index'] - $this->_sections['j']['step'];
$this->_sections['j']['index_next'] = $this->_sections['j']['index'] + $this->_sections['j']['step'];
$this->_sections['j']['first']      = ($this->_sections['j']['iteration'] == 1);
$this->_sections['j']['last']       = ($this->_sections['j']['iteration'] == $this->_sections['j']['total']);
?>
							ge('icontab-icon<?php echo $this->_sections['j']['index']+1; ?>
').appendChild(g_items.createIcon(<?php echo $this->_tpl_vars['quest']['itemrewards'][$this->_sections['j']['index']]['entry']; ?>
, 1, <?php echo $this->_tpl_vars['quest']['itemrewards'][$this->_sections['j']['index']]['count']; ?>
));
						<?php endfor; endif; ?>
						</script>
<?php endif; ?>

<?php if (isset ( $this->_tpl_vars['quest']['spellreward'] )): ?>
						<div class="pad"></div>
<?php if ($this->_tpl_vars['quest']['spellreward']['entry'] == $this->_tpl_vars['quest']['spellreward']['realentry']): ?>
						<?php echo $this->_config[0]['vars']['The_following_spell_will_be_cast_on_you']; ?>
:
<?php else: ?>
						<?php echo $this->_config[0]['vars']['You_will_learn']; ?>
:
<?php endif; ?>
						<table class="icontab"><?php echo '<tr><th id="icontab-icon20"></th><td><a href="?spell='; ?><?php echo $this->_tpl_vars['quest']['spellreward']['realentry']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['quest']['spellreward']['name']; ?><?php echo '</a></td><th></th><td></td></tr></table>'; ?>


						<script type="text/javascript">
							ge('icontab-icon20').appendChild(g_spells.createIcon(<?php echo $this->_tpl_vars['quest']['spellreward']['entry']; ?>
, 1, 0));
						</script>
<?php endif; ?>

<?php if (isset ( $this->_tpl_vars['quest']['money'] )): ?>
						<div class="pad"></div>
						<?php echo ''; ?><?php echo $this->_config[0]['vars']['You_will_also_receive']; ?><?php echo ':'; ?><?php if (isset ( $this->_tpl_vars['quest']['money']['moneygold'] )): ?><?php echo ' <span class="moneygold">'; ?><?php echo $this->_tpl_vars['quest']['money']['moneygold']; ?><?php echo '</span>'; ?><?php endif; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['quest']['money']['moneysilver'] )): ?><?php echo ' <span class="moneysilver">'; ?><?php echo $this->_tpl_vars['quest']['money']['moneysilver']; ?><?php echo '</span>'; ?><?php endif; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['quest']['money']['moneycopper'] )): ?><?php echo ' <span class="moneycopper">'; ?><?php echo $this->_tpl_vars['quest']['money']['moneycopper']; ?><?php echo '</span>'; ?><?php endif; ?><?php echo ''; ?>

<?php endif; ?>
<?php if (isset ( $this->_tpl_vars['quest']['BonusTalents'] ) && $this->_tpl_vars['quest']['BonusTalents']): ?>
						<div class="pad"></div>
						<div><?php echo $this->_config[0]['vars']['Bonus_Talents']; ?>
: <?php echo $this->_tpl_vars['quest']['BonusTalents']; ?>
</div>
<?php endif; ?>
<?php endif; ?>

<?php if (( $this->_tpl_vars['quest']['RequestItemsText'] && $this->_tpl_vars['quest']['Objectives'] )): ?>
						<h3><?php echo $this->_config[0]['vars']['Progress']; ?>
</h3>
						<?php echo $this->_tpl_vars['quest']['RequestItemsText']; ?>

<?php endif; ?>

<?php if ($this->_tpl_vars['quest']['OfferRewardText']): ?>
						<h3><?php echo $this->_config[0]['vars']['Completion']; ?>
</h3>
						<?php echo $this->_tpl_vars['quest']['OfferRewardText']; ?>

<?php endif; ?>

<?php if (isset ( $this->_tpl_vars['quest']['xp'] ) && $this->_tpl_vars['quest']['xp'] || isset ( $this->_tpl_vars['quest']['reprewards'] ) || isset ( $this->_tpl_vars['quest']['titlereward'] ) || isset ( $this->_tpl_vars['quest']['mailrewards'] ) || isset ( $this->_tpl_vars['quest']['RewHonorAddition'] ) && $this->_tpl_vars['quest']['RewHonorAddition']): ?>
					<h3><?php echo $this->_config[0]['vars']['Gains']; ?>
</h3>
					<?php echo $this->_config[0]['vars']['Upon_completion_of_this_quest_you_will_gain']; ?>
:
					<ul><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['quest']['xp'] ) && $this->_tpl_vars['quest']['xp']): ?><?php echo '<li><div>'; ?><?php echo $this->_tpl_vars['quest']['xp']; ?><?php echo ' '; ?><?php echo $this->_config[0]['vars']['experience']; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['quest']['moneymaxlevel'] )): ?><?php echo ' ('; ?><?php if (isset ( $this->_tpl_vars['quest']['moneymaxlevel']['moneygold'] )): ?><?php echo '<span class="moneygold">'; ?><?php echo $this->_tpl_vars['quest']['moneymaxlevel']['moneygold']; ?><?php echo '</span> '; ?><?php endif; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['quest']['moneymaxlevel']['moneysilver'] )): ?><?php echo '<span class="moneysilver">'; ?><?php echo $this->_tpl_vars['quest']['moneymaxlevel']['moneysilver']; ?><?php echo '</span> '; ?><?php endif; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['quest']['moneymaxlevel']['moneycopper'] )): ?><?php echo '<span class="moneycopper">'; ?><?php echo $this->_tpl_vars['quest']['moneymaxlevel']['moneycopper']; ?><?php echo '</span> '; ?><?php endif; ?><?php echo ''; ?><?php echo $this->_config[0]['vars']['at_max_level']; ?><?php echo ')'; ?><?php endif; ?><?php echo '</div></li>'; ?><?php endif; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['quest']['reprewards'] )): ?><?php echo ''; ?><?php unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['quest']['reprewards']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['j']['show'] = true;
$this->_sections['j']['max'] = $this->_sections['j']['loop'];
$this->_sections['j']['step'] = 1;
$this->_sections['j']['start'] = $this->_sections['j']['step'] > 0 ? 0 : $this->_sections['j']['loop']-1;
if ($this->_sections['j']['show']) {
    $this->_sections['j']['total'] = $this->_sections['j']['loop'];
    if ($this->_sections['j']['total'] == 0)
        $this->_sections['j']['show'] = false;
} else
    $this->_sections['j']['total'] = 0;
if ($this->_sections['j']['show']):

            for ($this->_sections['j']['index'] = $this->_sections['j']['start'], $this->_sections['j']['iteration'] = 1;
                 $this->_sections['j']['iteration'] <= $this->_sections['j']['total'];
                 $this->_sections['j']['index'] += $this->_sections['j']['step'], $this->_sections['j']['iteration']++):
$this->_sections['j']['rownum'] = $this->_sections['j']['iteration'];
$this->_sections['j']['index_prev'] = $this->_sections['j']['index'] - $this->_sections['j']['step'];
$this->_sections['j']['index_next'] = $this->_sections['j']['index'] + $this->_sections['j']['step'];
$this->_sections['j']['first']      = ($this->_sections['j']['iteration'] == 1);
$this->_sections['j']['last']       = ($this->_sections['j']['iteration'] == $this->_sections['j']['total']);
?><?php echo '<li><div>'; ?><?php echo $this->_tpl_vars['quest']['reprewards'][$this->_sections['j']['index']]['value']; ?><?php echo ' '; ?><?php echo $this->_config[0]['vars']['reputationwith']; ?><?php echo ' <a href="?faction='; ?><?php echo $this->_tpl_vars['quest']['reprewards'][$this->_sections['j']['index']]['entry']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['quest']['reprewards'][$this->_sections['j']['index']]['name']; ?><?php echo '</a></div></li>'; ?><?php endfor; endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['quest']['titlereward'] )): ?><?php echo '<li><div>'; ?><?php echo $this->_config[0]['vars']['the_title']; ?><?php echo ' "'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['quest']['titlereward'])) ? $this->_run_mod_handler('replace', true, $_tmp, "%s", "&lt;name&gt;") : smarty_modifier_replace($_tmp, "%s", "&lt;name&gt;")); ?><?php echo '"</div></li>'; ?><?php endif; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['quest']['RewHonorAddition'] ) && $this->_tpl_vars['quest']['RewHonorAddition']): ?><?php echo '<li><div>'; ?><?php echo $this->_tpl_vars['quest']['RewHonorAddition']; ?><?php echo ' '; ?><?php echo $this->_config[0]['vars']['Honorable_Kills']; ?><?php echo '</div></li>'; ?><?php endif; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['quest']['mailrewards'] )): ?><?php echo '<li><div>'; ?><?php echo $this->_config[0]['vars']['Mail_delivery']; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['quest']['maildelay'] )): ?><?php echo ' '; ?><?php echo $this->_config[0]['vars']['in_time']; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['quest']['maildelay']['h'] )): ?><?php echo ' '; ?><?php echo $this->_tpl_vars['quest']['maildelay']['h']; ?><?php echo ' '; ?><?php echo $this->_config[0]['vars']['hr']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['quest']['maildelay']['m'] )): ?><?php echo ' '; ?><?php echo $this->_tpl_vars['quest']['maildelay']['m']; ?><?php echo ' '; ?><?php echo $this->_config[0]['vars']['min']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['quest']['maildelay']['s'] )): ?><?php echo ' '; ?><?php echo $this->_tpl_vars['quest']['maildelay']['s']; ?><?php echo ' '; ?><?php echo $this->_config[0]['vars']['sec']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo '</div></li>'; ?><?php endif; ?><?php echo '</ul>'; ?>

<?php endif; ?>

				<h2><?php echo $this->_config[0]['vars']['Related']; ?>
</h2>

			</div>

			<div id="tabs-generic"></div>
			<div id="listview-generic" class="listview"></div>
			<script type="text/javascript">
				var tabsRelated = new Tabs({parent: ge('tabs-generic')});
				<?php if (isset ( $this->_tpl_vars['quest']['mailrewards'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/item_table.tpl', 'smarty_include_vars' => array('id' => 'mail-rewards','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['quest']['mailrewards'],'name' => 'questrewards')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
				<?php if (isset ( $this->_tpl_vars['quest']['criteria_of'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/achievement_table.tpl', 'smarty_include_vars' => array('id' => 'criteria-of','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['quest']['criteria_of'],'name' => 'criteriaof')));
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