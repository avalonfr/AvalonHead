<?php /* Smarty version 2.6.26, created on 2012-01-10 22:40:42
         compiled from bricks/quest_table.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'bricks/quest_table.tpl', 12, false),)), $this); ?>
<?php echo 'new Listview('; ?>{<?php echo 'template:\'quest\',id:\''; ?><?php echo $this->_tpl_vars['id']; ?><?php echo '\',note:\''; ?><?php echo $this->_tpl_vars['num_quest']; ?><?php echo ' '; ?><?php echo $this->_config[0]['vars']['Quest_Found']; ?><?php echo '\','; ?><?php if (isset ( $this->_tpl_vars['name'] )): ?><?php echo 'name:LANG.tab_'; ?><?php echo $this->_tpl_vars['name']; ?><?php echo ','; ?><?php endif; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['tabsid'] )): ?><?php echo 'tabs:'; ?><?php echo $this->_tpl_vars['tabsid']; ?><?php echo ',parent:\'listview-generic\','; ?><?php endif; ?><?php echo 'data:['; ?><?php unset($this->_sections['i']);
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
?><?php echo ''; ?>{<?php echo 'id:\''; ?><?php echo $this->_tpl_vars['data'][$this->_sections['i']['index']]['entry']; ?><?php echo '\',name:\''; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['i']['index']]['Title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?><?php echo '\',level:\''; ?><?php echo $this->_tpl_vars['data'][$this->_sections['i']['index']]['QuestLevel']; ?><?php echo '\','; ?><?php if (( $this->_tpl_vars['data'][$this->_sections['i']['index']]['MinLevel'] )): ?><?php echo 'reqlevel:'; ?><?php echo $this->_tpl_vars['data'][$this->_sections['i']['index']]['MinLevel']; ?><?php echo ','; ?><?php endif; ?><?php echo 'side:\''; ?><?php echo $this->_tpl_vars['data'][$this->_sections['i']['index']]['side']['side']; ?><?php echo '\''; ?><?php if (isset ( $this->_tpl_vars['data'][$this->_sections['i']['index']]['itemrewards'] )): ?><?php echo ',itemrewards:['; ?><?php unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['data'][$this->_sections['i']['index']]['itemrewards']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><?php echo '['; ?><?php echo $this->_tpl_vars['data'][$this->_sections['i']['index']]['itemrewards'][$this->_sections['j']['index']]['entry']; ?><?php echo ','; ?><?php echo $this->_tpl_vars['data'][$this->_sections['i']['index']]['itemrewards'][$this->_sections['j']['index']]['count']; ?><?php echo ']'; ?><?php if ($this->_sections['j']['last']): ?><?php echo ''; ?><?php else: ?><?php echo ','; ?><?php endif; ?><?php echo ''; ?><?php endfor; endif; ?><?php echo ']'; ?><?php endif; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['data'][$this->_sections['i']['index']]['itemchoices'] )): ?><?php echo ',itemchoices:['; ?><?php unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['data'][$this->_sections['i']['index']]['itemchoices']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><?php echo '['; ?><?php echo $this->_tpl_vars['data'][$this->_sections['i']['index']]['itemchoices'][$this->_sections['j']['index']]['entry']; ?><?php echo ','; ?><?php echo $this->_tpl_vars['data'][$this->_sections['i']['index']]['itemchoices'][$this->_sections['j']['index']]['count']; ?><?php echo ']'; ?><?php if ($this->_sections['j']['last']): ?><?php echo ''; ?><?php else: ?><?php echo ','; ?><?php endif; ?><?php echo ''; ?><?php endfor; endif; ?><?php echo ']'; ?><?php endif; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['data'][$this->_sections['i']['index']]['xp'] )): ?><?php echo ',xp:'; ?><?php echo $this->_tpl_vars['data'][$this->_sections['i']['index']]['xp']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['data'][$this->_sections['i']['index']]['money'] )): ?><?php echo ',money:'; ?><?php echo $this->_tpl_vars['data'][$this->_sections['i']['index']]['money']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['data'][$this->_sections['i']['index']]['category'] )): ?><?php echo ',category:'; ?><?php echo $this->_tpl_vars['data'][$this->_sections['i']['index']]['category']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['data'][$this->_sections['i']['index']]['maincat'] )): ?><?php echo ',category2:'; ?><?php echo $this->_tpl_vars['data'][$this->_sections['i']['index']]['maincat']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['data'][$this->_sections['i']['index']]['type'] )): ?><?php echo ',type:'; ?><?php echo $this->_tpl_vars['data'][$this->_sections['i']['index']]['type']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['data'][$this->_sections['i']['index']]['Daily'] )): ?><?php echo ',daily:1'; ?><?php endif; ?><?php echo ''; ?>}<?php echo ''; ?><?php if ($this->_sections['i']['last']): ?><?php echo ''; ?><?php else: ?><?php echo ','; ?><?php endif; ?><?php echo ''; ?><?php endfor; endif; ?><?php echo ']'; ?>}<?php echo ');'; ?>