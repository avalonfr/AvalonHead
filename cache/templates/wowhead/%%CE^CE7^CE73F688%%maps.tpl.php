<?php /* Smarty version 2.6.26, created on 2012-01-06 11:28:46
         compiled from maps.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

		<div id="main">
			<div id="main-precontents"></div>
			<div id="main-contents" class="main-contents">
				<div class="text">
					<div style="text-align: center">
						<script type="text/javascript">g_initPath([1,1])</script>
						<div class="text">
							<div style="text-align: center">
								<select id="maps-ek" onchange="ma_ChooseZone(this)" class="zone-picker" style="margin: 0">
									<option value="0" style="color: #bbbbbb"><?php echo $this->_config[0]['vars']['Eastern_Kingdoms']; ?>
</option>
								</select>
								<select id="maps-kalimdor" onchange="ma_ChooseZone(this)" class="zone-picker">
									<option value="0" style="color: #bbbbbb"><?php echo $this->_config[0]['vars']['Kalimdor']; ?>
</option>
								</select>
								<select id="maps-outland" onchange="ma_ChooseZone(this)" class="zone-picker">
									<option value="0" style="color: #bbbbbb"><?php echo $this->_config[0]['vars']['Outland']; ?>
</option>
								</select>
								<select id="maps-northrend" onchange="ma_ChooseZone(this)" class="zone-picker">
									<option value="0" style="color: #bbbbbb"><?php echo $this->_config[0]['vars']['Northrend']; ?>
</option>
								</select>
								<div style="padding-bottom: 4px"></div>
								<select onchange="ma_ChooseZone(this)" class="zone-picker">
									<option value="0" style="color: #bbbbbb"><?php echo $this->_config[0]['vars']['Instances']; ?>
</option>
									<optgroup label="<?php echo $this->_config[0]['vars']['Dungeons']; ?>
" id="maps-dungeons"></optgroup>
									<optgroup label="<?php echo $this->_config[0]['vars']['Raids']; ?>
" id="maps-raids"></optgroup>
								</select>
								<select onchange="ma_ChooseZone(this)" class="zone-picker">
									<option value="0" style="color: #bbbbbb"><?php echo $this->_config[0]['vars']['More']; ?>
</option>
									<optgroup label="<?php echo $this->_config[0]['vars']['Battlegrounds']; ?>
" id="maps-battlegrounds"></optgroup>
									<optgroup label="<?php echo $this->_config[0]['vars']['Miscellaneous']; ?>
">
										<option value="-1"><?php echo $this->_config[0]['vars']['Azeroth']; ?>
</option>
										<option value="-3"><?php echo $this->_config[0]['vars']['Eastern_Kingdoms']; ?>
</option>
										<option value="457"><?php echo $this->_config[0]['vars']['Kalimdor']; ?>
</option>
										<option value="-2"><?php echo $this->_config[0]['vars']['Outland']; ?>
</option>
										<option value="-5"><?php echo $this->_config[0]['vars']['Northrend']; ?>
</option>
										<option value="-4"><?php echo $this->_config[0]['vars']['Cosmic_Map']; ?>
</option>
									</optgroup>
								</select>
							</div>
							<div id="mapper" style="display: none; width: 778px; margin: 0 auto">
								<div id="dbs3b53"></div>
								<div class="pad"></div>
								<div style="text-align: center; font-size: 13px">
									<a href="javascript:;" style="margin-right: 2em" id="link-to-this-map"><?php echo $this->_config[0]['vars']['Link_to_this_map']; ?>
</a>
									<a href="javascript:;" onclick="myMapper.setCoords([])" onmousedown="return false"><?php echo $this->_config[0]['vars']['Clear']; ?>
</a>
								</div>
							</div>
							<script type="text/javascript">ma_Init();</script>
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>