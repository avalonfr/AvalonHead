<?php /* Smarty version 2.6.26, created on 2012-01-10 22:42:36
         compiled from bricks/spell_table.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'bricks/spell_table.tpl', 21, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('level', false); ?><?php echo ''; ?><?php $this->assign('skill', false); ?><?php echo ''; ?><?php $this->assign('reagents', false); ?><?php echo ''; ?><?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['curr']):
?><?php echo ''; ?><?php if ($this->_tpl_vars['curr']['level']): ?><?php echo ''; ?><?php $this->assign('level', true); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['curr']['skill']): ?><?php echo ''; ?><?php $this->assign('skill', true); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['curr']['reagents']): ?><?php echo ''; ?><?php $this->assign('reagents', true); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo 'new Listview('; ?>{<?php echo 'template:\'spell\',id:\''; ?><?php echo $this->_tpl_vars['id']; ?><?php echo '\',note:\''; ?><?php echo $this->_config[0]['vars']['Spell_Found']; ?><?php echo '\','; ?><?php if (isset ( $this->_tpl_vars['name'] )): ?><?php echo 'name:LANG.tab_'; ?><?php echo $this->_tpl_vars['name']; ?><?php echo ','; ?><?php endif; ?><?php echo 'visibleCols:['; ?><?php if ($this->_tpl_vars['level']): ?><?php echo '\'level\''; ?><?php endif; ?><?php echo '],hiddenCols:['; ?><?php if (! $this->_tpl_vars['reagents']): ?><?php echo '\'reagents\','; ?><?php endif; ?><?php echo ''; ?><?php if (! $this->_tpl_vars['skill']): ?><?php echo '\'skill\','; ?><?php endif; ?><?php echo '\'school\'],sort:['; ?><?php if (isset ( $this->_tpl_vars['sort'] )): ?><?php echo ''; ?><?php echo $this->_tpl_vars['sort']; ?><?php echo ''; ?><?php else: ?><?php echo '\'name\''; ?><?php endif; ?><?php echo '],'; ?><?php if ($this->_tpl_vars['script']): ?><?php echo 'note:sprintf(LANG.lvnote_scripttype, \''; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['script'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?><?php echo '\'),'; ?><?php endif; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['tabsid'] )): ?><?php echo 'tabs:'; ?><?php echo $this->_tpl_vars['tabsid']; ?><?php echo ', parent:\'listview-generic\','; ?><?php endif; ?><?php echo 'data:['; ?><?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['data']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><?php echo ''; ?>{<?php echo 'name:\''; ?><?php echo $this->_tpl_vars['data'][$this->_sections['i']['index']]['quality']; ?><?php echo ''; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['i']['index']]['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?><?php echo '\','; ?><?php if ($this->_tpl_vars['level']): ?><?php echo 'level:'; ?><?php echo $this->_tpl_vars['data'][$this->_sections['i']['index']]['level']; ?><?php echo ','; ?><?php endif; ?><?php echo 'school:'; ?><?php echo $this->_tpl_vars['data'][$this->_sections['i']['index']]['school']; ?><?php echo ','; ?><?php if (isset ( $this->_tpl_vars['data'][$this->_sections['i']['index']]['rank'] )): ?><?php echo 'rank:\''; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['i']['index']]['rank'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?><?php echo '\','; ?><?php endif; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['data'][$this->_sections['i']['index']]['skill'] )): ?><?php echo 'skill:['; ?><?php echo $this->_tpl_vars['data'][$this->_sections['i']['index']]['skill']; ?><?php echo '],'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['data'][$this->_sections['i']['index']]['reagents']): ?><?php echo 'reagents:['; ?><?php unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['data'][$this->_sections['i']['index']]['reagents']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><?php echo '['; ?><?php echo $this->_tpl_vars['data'][$this->_sections['i']['index']]['reagents'][$this->_sections['j']['index']]['entry']; ?><?php echo ','; ?><?php echo $this->_tpl_vars['data'][$this->_sections['i']['index']]['reagents'][$this->_sections['j']['index']]['count']; ?><?php echo ']'; ?><?php if ($this->_sections['j']['last']): ?><?php echo ''; ?><?php else: ?><?php echo ','; ?><?php endif; ?><?php echo ''; ?><?php endfor; endif; ?><?php echo '],'; ?><?php endif; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['data'][$this->_sections['i']['index']]['creates'] )): ?><?php echo 'creates:['; ?><?php unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['data'][$this->_sections['i']['index']]['creates']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><?php echo ''; ?><?php echo $this->_tpl_vars['data'][$this->_sections['i']['index']]['creates'][$this->_sections['j']['index']]['entry']; ?><?php echo ','; ?><?php echo $this->_tpl_vars['data'][$this->_sections['i']['index']]['creates'][$this->_sections['j']['index']]['count']; ?><?php echo ''; ?><?php if ($this->_sections['j']['last']): ?><?php echo ''; ?><?php else: ?><?php echo ','; ?><?php endif; ?><?php echo ''; ?><?php endfor; endif; ?><?php echo '],'; ?><?php endif; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['data'][$this->_sections['i']['index']]['learnedat'] )): ?><?php echo 'learnedat:'; ?><?php echo $this->_tpl_vars['data'][$this->_sections['i']['index']]['learnedat']; ?><?php echo ','; ?><?php endif; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['data'][$this->_sections['i']['index']]['colors'] )): ?><?php echo 'colors:['; ?><?php unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['data'][$this->_sections['i']['index']]['colors']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><?php echo ''; ?><?php echo $this->_tpl_vars['data'][$this->_sections['i']['index']]['colors'][$this->_sections['j']['index']]; ?><?php echo ''; ?><?php if ($this->_sections['j']['last']): ?><?php echo ''; ?><?php else: ?><?php echo ','; ?><?php endif; ?><?php echo ''; ?><?php endfor; endif; ?><?php echo '],'; ?><?php endif; ?><?php echo 'id:'; ?><?php echo $this->_tpl_vars['data'][$this->_sections['i']['index']]['entry']; ?><?php echo ''; ?>}<?php echo ''; ?><?php if ($this->_sections['i']['last']): ?><?php echo ''; ?><?php else: ?><?php echo ','; ?><?php endif; ?><?php echo ''; ?><?php endfor; endif; ?><?php echo ']'; ?>}<?php echo ');'; ?>