<?php /* Smarty version 2.6.26, created on 2012-01-10 21:31:25
         compiled from head.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'head.tpl', 1, false),array('modifier', 'date_format', 'head.tpl', 46, false),)), $this); ?>
	<title><?php if ($this->_tpl_vars['page']['Title']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['page']['Title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
 - <?php endif; ?><?php echo $this->_tpl_vars['app_name']; ?>
</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="chrome=1">
	<link rel="SHORTCUT ICON" href="templates/wowhead/images/favicon.ico">

	<link rel="stylesheet" type="text/css" href="templates/wowhead/css/global.css?<?php echo $this->_tpl_vars['AOWOW_REVISION']; ?>
" />
	<link rel="stylesheet" type="text/css" href="templates/wowhead/css/locale_<?php echo $this->_tpl_vars['language']; ?>
.css?<?php echo $this->_tpl_vars['AOWOW_REVISION']; ?>
" />
	<!--[if IE]><link rel="stylesheet" type="text/css" href="templates/wowhead/css/global_ie.css?<?php echo $this->_tpl_vars['AOWOW_REVISION']; ?>
" /><![endif]-->
	<!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="templates/wowhead/css/global_ie6.css?<?php echo $this->_tpl_vars['AOWOW_REVISION']; ?>
" /><![endif]-->
	<!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="templates/wowhead/css/global_ie67.css?<?php echo $this->_tpl_vars['AOWOW_REVISION']; ?>
" /><![endif]-->
<?php if ($this->_tpl_vars['page']['Book']): ?>
	<link rel="stylesheet" type="text/css" href="templates/wowhead/css/Book.css?<?php echo $this->_tpl_vars['AOWOW_REVISION']; ?>
">
<?php endif; ?>
<?php if ($this->_tpl_vars['page']['Mapper']): ?>
	<link href="templates/wowhead/css/Mapper.css?<?php echo $this->_tpl_vars['AOWOW_REVISION']; ?>
" type="text/css" rel="stylesheet">
	<!--[if lte IE 6]><link href="templates/wowhead/css/Mapper_ie6.css?<?php echo $this->_tpl_vars['AOWOW_REVISION']; ?>
" type="text/css" rel=stylesheet><![endif]-->
<?php endif; ?>
<?php if ($this->_tpl_vars['page']['Talent']): ?>
		<link rel="stylesheet" type="text/css" href="templates/wowhead/css/talentcalc.css?<?php echo $this->_tpl_vars['AOWOW_REVISION']; ?>
" />
		<link rel="stylesheet" type="text/css" href="templates/wowhead/css/talent.css?<?php echo $this->_tpl_vars['AOWOW_REVISION']; ?>
" />
		<!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="templates/wowhead/css/TalentCalc_ie6.css?<?php echo $this->_tpl_vars['AOWOW_REVISION']; ?>
" /><![endif]-->
		<!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="templates/wowhead/css/TalentCalc_ie67.css?<?php echo $this->_tpl_vars['AOWOW_REVISION']; ?>
" /><![endif]-->
<?php endif; ?>

	<script src="templates/wowhead/js/locale_<?php echo $this->_tpl_vars['language']; ?>
.js?<?php echo $this->_tpl_vars['AOWOW_REVISION']; ?>
" type="text/javascript"></script>
	<script src="templates/wowhead/js/global.js?<?php echo $this->_tpl_vars['AOWOW_REVISION']; ?>
" type="text/javascript"></script>
	<script src="templates/wowhead/js/Markup.js?<?php echo $this->_tpl_vars['AOWOW_REVISION']; ?>
" type="text/javascript"></script>
<?php if ($this->_tpl_vars['page']['Mapper']): ?>
	<script src="templates/wowhead/js/Mapper.js?<?php echo $this->_tpl_vars['AOWOW_REVISION']; ?>
" type="text/javascript"></script>
	<style type="text/css"><?php echo '.zone-picker { margin-left: 4px }'; ?>
</style>
<?php endif; ?>
<?php if ($this->_tpl_vars['page']['Book']): ?>
	<script src="templates/wowhead/js/Book.js?<?php echo $this->_tpl_vars['AOWOW_REVISION']; ?>
" type="text/javascript"></script>
<?php endif; ?>
<?php if ($this->_tpl_vars['page']['Talent']): ?>
	<script src="?data=glyphs" type="text/javascript"></script>
	<script src="templates/wowhead/js/TalentCalc_<?php echo $this->_tpl_vars['language']; ?>
.js?<?php echo $this->_tpl_vars['AOWOW_REVISION']; ?>
" type="text/javascript"></script>
	<script src="templates/wowhead/js/TalentCalc.js?<?php echo $this->_tpl_vars['AOWOW_REVISION']; ?>
" type="text/javascript"></script>
	<script src="templates/wowhead/js/talent.js?<?php echo $this->_tpl_vars['AOWOW_REVISION']; ?>
" type="text/javascript"></script>
<?php endif; ?>
<?php if ($this->_tpl_vars['page']['maps']): ?>
	<script src="templates/wowhead/js/maps.js?<?php echo $this->_tpl_vars['AOWOW_REVISION']; ?>
" type="text/javascript"></script>
<?php endif; ?>

	<script type="text/javascript">
		var g_serverTime = new Date('<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y/%m/%d %H:%M:%S") : smarty_modifier_date_format($_tmp, "%Y/%m/%d %H:%M:%S")); ?>
');
		g_locale = { id: <?php echo $this->_tpl_vars['locale']; ?>
, name: '<?php echo $this->_tpl_vars['language']; ?>
' };
<?php if ($this->_tpl_vars['user']): ?>g_user = { id: <?php echo $this->_tpl_vars['user']['id']; ?>
, name: '<?php echo ((is_array($_tmp=$this->_tpl_vars['user']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?>
', roles: <?php echo $this->_tpl_vars['user']['roles']; ?>
, permissions: <?php echo $this->_tpl_vars['user']['perms']; ?>
 };<?php endif; ?>
	</script>