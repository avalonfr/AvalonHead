{include file='header.tpl'}

	<div id="main">
		<div id="main-precontents"></div>
		<div id="main-contents" class="main-contents">
			<script type="text/javascript">
				g_initPath({$page.path});
			</script>

			<div id="lv-items" class="listview"></div>

			<script type="text/javascript">
				{include		file='bricks/item_table.tpl' id='items'	data=$items num_item=$item_tot}
			</script>

			<div class="clear"></div>
		</div>
	</div>

{include file='footer.tpl'}
