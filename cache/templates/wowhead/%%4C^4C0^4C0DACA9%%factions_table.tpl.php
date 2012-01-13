<?php /* Smarty version 2.6.26, created on 2012-01-10 22:40:42
         compiled from bricks/factions_table.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'bricks/factions_table.tpl', 6, false),)), $this); ?>
<?php echo 'new Listview('; ?>{<?php echo 'template:\'faction\', id:\'factions\', data:['; ?><?php unset($this->_sections['i']);
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
?><?php echo ''; ?>{<?php echo 'id:'; ?><?php echo $this->_tpl_vars['data'][$this->_sections['i']['index']]['entry']; ?><?php echo ',name:\''; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['i']['index']]['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?><?php echo '\''; ?><?php if ($this->_tpl_vars['data'][$this->_sections['i']['index']]['group']): ?><?php echo ',group:\''; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['i']['index']]['group'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?><?php echo '\''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['data'][$this->_sections['i']['index']]['side']): ?><?php echo ',side:\''; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['i']['index']]['side'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?><?php echo '\''; ?><?php endif; ?><?php echo ',category:'; ?><?php echo $this->_tpl_vars['data'][$this->_sections['i']['index']]['category']; ?><?php echo ',category2:'; ?><?php echo $this->_tpl_vars['data'][$this->_sections['i']['index']]['category2']; ?><?php echo ''; ?>}<?php echo ''; ?><?php if ($this->_sections['i']['last']): ?><?php echo ''; ?><?php else: ?><?php echo ','; ?><?php endif; ?><?php echo ''; ?><?php endfor; endif; ?><?php echo ']'; ?>}<?php echo ');'; ?>