<?php /* Smarty version 2.6.26, created on 2012-01-10 22:40:27
         compiled from bricks/object_table.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'bricks/object_table.tpl', 26, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('percent', false); ?><?php echo ''; ?><?php $this->assign('skill', false); ?><?php echo ''; ?><?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['curr']):
?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['curr']['percent'] )): ?><?php echo ''; ?><?php $this->assign('percent', true); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['curr']['skill'] )): ?><?php echo ''; ?><?php $this->assign('skill', true); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo 'new Listview('; ?>{<?php echo 'template:\'object\',id:\''; ?><?php echo $this->_tpl_vars['id']; ?><?php echo '\',note:\''; ?><?php echo $this->_tpl_vars['num_objects']; ?><?php echo ' '; ?><?php echo $this->_config[0]['vars']['Object_Found']; ?><?php echo '\','; ?><?php if (isset ( $this->_tpl_vars['name'] )): ?><?php echo 'name:LANG.tab_'; ?><?php echo $this->_tpl_vars['name']; ?><?php echo ','; ?><?php endif; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['tabsid'] )): ?><?php echo 'tabs:'; ?><?php echo $this->_tpl_vars['tabsid']; ?><?php echo ',parent:\'listview-generic\','; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['percent']): ?><?php echo 'extraCols:[Listview.extraCols.percent],'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['skill']): ?><?php echo 'visibleCols:[\'skill\'],'; ?><?php endif; ?><?php echo 'sort:['; ?><?php if ($this->_tpl_vars['skill']): ?><?php echo '\'skill\','; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['percent']): ?><?php echo '\'-percent\','; ?><?php endif; ?><?php echo ' \'name\'],hiddenCols:[],data:['; ?><?php unset($this->_sections['i']);
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
?><?php echo ''; ?><?php if ($this->_tpl_vars['data'][$this->_sections['i']['index']]['name'] != ''): ?><?php echo ''; ?>{<?php echo ''; ?><?php echo 'name:\''; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['i']['index']]['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?><?php echo '\','; ?><?php echo 'type:'; ?><?php echo $this->_tpl_vars['data'][$this->_sections['i']['index']]['type']; ?><?php echo ','; ?><?php echo ''; ?><?php if ($this->_tpl_vars['percent']): ?><?php echo 'percent:'; ?><?php echo $this->_tpl_vars['data'][$this->_sections['i']['index']]['percent']; ?><?php echo ','; ?><?php endif; ?><?php echo ''; ?><?php echo ''; ?><?php if ($this->_tpl_vars['skill']): ?><?php echo 'skill:'; ?><?php echo $this->_tpl_vars['data'][$this->_sections['i']['index']]['skill']; ?><?php echo ','; ?><?php endif; ?><?php echo ''; ?><?php echo 'id:'; ?><?php echo $this->_tpl_vars['data'][$this->_sections['i']['index']]['entry']; ?><?php echo ''; ?>}<?php echo ''; ?><?php if ($this->_sections['i']['last']): ?><?php echo ''; ?><?php else: ?><?php echo ','; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endfor; endif; ?><?php echo ']'; ?>}<?php echo ');'; ?>

