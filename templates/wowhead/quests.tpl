{include file='header.tpl'}

		<div id="main">
			<div id="main-precontents"></div>
			<div id="main-contents" class="main-contents">
				<script type="text/javascript">
					g_initPath({$page.path});
				</script>

				<div id="lv-quests" class="listview"></div>

				<script type="text/javascript">
					{include file='bricks/quest_table.tpl' id='quests' data=$quests num_quest=$quests_tot}
				</script>

				<div class="clear"></div>
			</div>
		</div>

{include file='footer.tpl'}
