<?php /* Smarty version 2.6.26, created on 2012-01-06 11:27:51
         compiled from bricks/allitems_table.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'bricks/allitems_table.tpl', 5, false),)), $this); ?>
<?php echo 'var _ = g_items;'; ?><?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['item']):
?><?php echo '_['; ?><?php echo $this->_tpl_vars['id']; ?><?php echo ']='; ?>{<?php echo 'icon:\''; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['icon'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?><?php echo '\',name_'; ?><?php echo $this->_tpl_vars['language']; ?><?php echo ':\''; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?><?php echo '\''; ?>}<?php echo ';'; ?><?php endforeach; endif; unset($_from); ?><?php echo ''; ?>