<?php /* Smarty version 2.6.26, created on 2012-01-06 11:27:51
         compiled from footer.tpl */ ?>
	<div id="footer">
<?php if (isset ( $this->_tpl_vars['mysql'] )): ?>
		<?php echo $this->_config[0]['vars']['Number_of_MySQL_queries']; ?>
: <?php echo $this->_tpl_vars['mysql']['count']; ?>
<br>
		<?php echo $this->_config[0]['vars']['Time_of_MySQL_queries']; ?>
: <?php echo $this->_tpl_vars['mysql']['time']; ?>

<?php endif; ?>
	</div>
</div>
</div>
<!--[if lte IE 6]></td><th class="ie6layout-th"></th></tr></table><![endif]-->
</body>
</html>