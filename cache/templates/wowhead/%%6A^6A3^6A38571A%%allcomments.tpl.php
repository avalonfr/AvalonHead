<?php /* Smarty version 2.6.26, created on 2012-01-06 13:49:00
         compiled from bricks/allcomments.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'bricks/allcomments.tpl', 7, false),array('modifier', 'date_format', 'bricks/allcomments.tpl', 8, false),)), $this); ?>
<?php echo 'var lv_comments = ['; ?><?php $_from = $this->_tpl_vars['comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['number'] => $this->_tpl_vars['comment']):
        $this->_foreach['foo']['iteration']++;
?><?php echo ''; ?>{<?php echo 'number:'; ?><?php echo $this->_tpl_vars['comment']['number']; ?><?php echo ',user:\''; ?><?php echo $this->_tpl_vars['comment']['user']; ?><?php echo '\',body:\''; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['comment']['body'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?><?php echo '\',date:\''; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['comment']['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y/%m/%d %H:%M:%S") : smarty_modifier_date_format($_tmp, "%Y/%m/%d %H:%M:%S")); ?><?php echo '\','; ?><?php if ($this->_tpl_vars['comment']['roles'] != 0): ?><?php echo 'roles:'; ?><?php echo $this->_tpl_vars['comment']['roles']; ?><?php echo ','; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['comment']['indent'] != 0): ?><?php echo 'indent:'; ?><?php echo $this->_tpl_vars['comment']['indent']; ?><?php echo ','; ?><?php endif; ?><?php echo 'rating:'; ?><?php echo $this->_tpl_vars['comment']['rating']; ?><?php echo ',replyTo:'; ?><?php echo $this->_tpl_vars['comment']['replyto']; ?><?php echo ',purged:'; ?><?php echo $this->_tpl_vars['comment']['purged']; ?><?php echo ',deleted:0,raters:['; ?><?php $_from = $this->_tpl_vars['comment']['raters']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo2']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['rater']):
        $this->_foreach['foo2']['iteration']++;
?><?php echo '['; ?><?php echo $this->_tpl_vars['rater']['userid']; ?><?php echo ','; ?><?php echo $this->_tpl_vars['rater']['rate']; ?><?php echo ']'; ?><?php if (($this->_foreach['foo2']['iteration'] == $this->_foreach['foo2']['total'])): ?><?php echo ''; ?><?php else: ?><?php echo ','; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo '],id:'; ?><?php echo $this->_tpl_vars['comment']['id']; ?><?php echo ''; ?>}<?php echo ''; ?><?php if (($this->_foreach['foo']['iteration'] == $this->_foreach['foo']['total'])): ?><?php echo ''; ?><?php else: ?><?php echo ','; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo '];'; ?>

