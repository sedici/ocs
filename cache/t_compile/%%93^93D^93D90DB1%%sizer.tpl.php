<?php /* Smarty version 2.6.18, created on 2008-11-05 10:43:36
         compiled from common/sizer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'common/sizer.tpl', 16, false),)), $this); ?>

	<!-- Add javascript required for font sizer -->
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/js/sizer.js" ></script>

	<!-- Add stylesheets for the font sizer -->
	<link rel="alternate stylesheet" title="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "icon.font_small.alt"), $this);?>
" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/styles/fontSmall.css" type="text/css" />
	<link rel="stylesheet" title="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "icon.font_medium.alt"), $this);?>
" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/styles/fontMedium.css" type="text/css" />
	<link rel="alternate stylesheet" title="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "icon.font_large.alt"), $this);?>
" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/styles/fontLarge.css" type="text/css" />