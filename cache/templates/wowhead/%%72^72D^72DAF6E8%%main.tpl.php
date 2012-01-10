<?php /* Smarty version 2.6.26, created on 2012-01-06 11:15:22
         compiled from main.tpl */ ?>
<html>
<head>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'head.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<style type="text/css">
<?php echo '
		.menu-buttons a { border-color: black }
		.news { position: relative; text-align: left; width: 415px; height: 191px; margin: 30px auto 0 auto; background: url(templates/wowhead/images/'; ?>
<?php echo $this->_tpl_vars['language']; ?>
<?php echo '/mainpage-bg-news.jpg) no-repeat }
		.news-list { padding: 26px 0 0 26px; margin: 0 }
		.news-list li { line-height: 2em }
		.news-img1 { position: absolute; left: 60px; top: 155px; width: 172px; height: 17px }
		.news-img2 { position: absolute; left: 246px; top: 48px; width: 145px; height: 127px }
		.news-talent { position: absolute; left: 240px; top: 29px; width: 152px; height: 146px }
'; ?>

	</style>
</head>
<body>
	<div id="layers"></div>
	<div id="home">
		<h1><?php echo $this->_tpl_vars['title']; ?>
</h1>
		<span id="h43jv6jk346" class="menu-buttons"></span>
		<script type="text/javascript">
			Menu.addButtons(ge('h43jv6jk346'), mn_path);
		</script>
		
		<div class="pad"></div>

		<div class="home-search" id="home-search">
		<form name="searchform" method="get" action="." onsubmit="if(trim(this.elements[0].value) == '') return false">
			<input name="search" type="text" id="kghjklvhj43v6" />
		<a href="javascript:;" onclick="document.searchform.submit();"></a></form>
		</div>
		
		<script type="text/javascript">var _ = ge('kghjklvhj43v6'); LiveSearch.attach(_); _.focus();</script>

<?php if ($this->_tpl_vars['news']): ?>
		<div class="news">
			<div class="news-list text">
				<ul>
<?php $_from = $this->_tpl_vars['news']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
					<li><div><?php echo $this->_tpl_vars['item']['text']; ?>
</div></li>
<?php endforeach; endif; unset($_from); ?>
				</ul>
			</div>
		</div>
<?php endif; ?>
		
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
	
	<div id="footer">
	</div>
	<noscript><div id="noscript-bg"></div><div id="noscript-text"><b><?php echo $this->_config[0]['vars']['js_err']; ?>
</div></noscript>
	<script type="text/javascript">DomContentLoaded.now()</script>
</body>
</html>