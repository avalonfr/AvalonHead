<?php /* Smarty version 2.6.26, created on 2012-01-06 13:51:00
         compiled from signin.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

		<div id="main">
			<div id="main-precontents"></div>
			<div id="main-contents">
				<div class="pad3"></div>
				<script type="text/javascript">
					function inputBoxValidate(f)
					{
						var _ = f.elements[0];
						if(_.value.length == 0)
						{
							ge('inputbox-error').innerHTML = LANG.message_enterusername;
							_.focus();
							return false;
						}

						_ = f.elements[1];
						if(_.value.length == 0)
						{
							ge('inputbox-error').innerHTML = LANG.message_enterpassword;
							_.focus();
							return false;
						}
					}
				</script>

				<form action="?account=signin&amp;next=?<?php echo $this->_tpl_vars['query']; ?>
" method="post" onsubmit="return inputBoxValidate(this)">
					<div class="inputbox" style="position: relative">
						<h1><?php echo $this->_config[0]['vars']['Sign_in_to_your_Game_Account']; ?>
</h1>
						<div id="inputbox-error"><?php if ($this->_tpl_vars['signin_error']): ?><?php echo $this->_tpl_vars['signin_error']; ?>
<?php endif; ?></div>

						<table align="center">
							<tr>
								<td align="right"><?php echo $this->_config[0]['vars']['Username']; ?>
:</td>
								<td><input type="text" name="username" value="" maxlength="16" id="username-generic" style="width: 10em" /></td>
							</tr>
							<tr>
								<td align="right"><?php echo $this->_config[0]['vars']['Password']; ?>
:</td>
								<td><input type="password" name="password" style="width: 10em" /></td>
							</tr>
							<tr>
								<td align="right" valign="top"><input type="checkbox" name="remember_me" id="remember_me" value="yes" checked="checked" /></td>
								<td>
									<label for="remember_me"><?php echo $this->_config[0]['vars']['Remember_me_on_this_computer']; ?>
</label>
									<div class="pad2"></div>
									<input type="submit" value="<?php echo $this->_config[0]['vars']['Sign_in']; ?>
" />
								</td>
							</tr>
						</table>
					</div>
				</form>

				<div class="pad3"></div>
				<?php if ($this->_tpl_vars['register']): ?><div style="text-align: center; line-height: 1.5em; font-size: 125%"><?php echo $this->_config[0]['vars']['Dont_have_an_account']; ?>
? <a href="?account=signup"><?php echo $this->_config[0]['vars']['Create_one_now']; ?>
!</a></div><?php endif; ?>
				<script type="text/javascript">ge('username-generic').focus()</script>
				<div class="clear"></div>
			</div>
		</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>