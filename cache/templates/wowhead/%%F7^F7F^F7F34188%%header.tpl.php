<?php /* Smarty version 2.6.26, created on 2012-01-06 11:27:51
         compiled from header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'header.tpl', 14, false),)), $this); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<html>
<head>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'head.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</head>

<body>
<div id="layers"></div>
<!--[if lte IE 6]><table id="ie6layout"><tr><th class="ie6layout-th"></th><td id="ie6layout-td"><div id="ie6layout-div"></div><![endif]-->
<div id="layout">
	<div id="header">
		<div id="header-logo">
			<a href="."></a>
			<h1><?php echo ((is_array($_tmp=$this->_tpl_vars['page']['Title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</h1>
		</div>
	</div>

		<div id="wrapper" class="nosidebar">
		<div id="toptabs">
			<div id="toptabs-inner">
				<div id="toptabs-right">
					<div id="toplinks" class="toplinks">
						<?php if ($this->_tpl_vars['user']): ?><a href="?user=<?php echo $this->_tpl_vars['user']['name']; ?>
"><?php echo $this->_tpl_vars['user']['name']; ?>
</a>|<a href="?account=signout"><?php echo $this->_config[0]['vars']['Sign_out']; ?>
</a><?php else: ?><a href="?account=signin"><?php echo $this->_config[0]['vars']['Sign_in']; ?>
</a><?php endif; ?>
						|<a href="javascript:;" id="toptabs-menu-language"><?php echo $this->_config[0]['vars']['Language']; ?>
 <small>&#9660;</small></a>
						<script type="text/javascript">g_initHeaderMenus()</script>
					</div>
				</div>
				<div id="ptewhjkst46"></div>
				<div class="clear"></div>
			</div>
		</div>
		<div id="topbar-right"><div><form action="."><a href="javascript:;"></a><input name="search" size="35" value="" id="oh2345v5ks" /></form></div></div>
		<div id="topbar"><span id="kbl34h6b43" class="menu-buttons"></span><div class="clear"></div></div>
		<?php echo '<script type="text/javascript">g_initHeader('; ?><?php echo $this->_tpl_vars['page']['tab']; ?><?php echo ');LiveSearch.attach(ge(\'oh2345v5ks\'));'; ?><?php if ($this->_tpl_vars['allitems']): ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/allitems_table.tpl', 'smarty_include_vars' => array('data' => $this->_tpl_vars['allitems'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['allspells']): ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/allspells_table.tpl', 'smarty_include_vars' => array('data' => $this->_tpl_vars['allspells'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['allachievements']): ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/allachievements_table.tpl', 'smarty_include_vars' => array('data' => $this->_tpl_vars['allachievements'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php echo '</script>'; ?>
