<?php /* Smarty version 2.6.18, created on 2008-10-27 15:00:07
         compiled from about/aboutThisPublishingSystem.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'about/aboutThisPublishingSystem.tpl', 18, false),)), $this); ?>
<?php $this->assign('pageTitle', "about.aboutThisPublishingSystem"); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<p>
<?php if ($this->_tpl_vars['currentConference']): ?>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.aboutOCSConference",'ocsVersion' => $this->_tpl_vars['ocsVersion']), $this);?>

<?php else: ?>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.aboutOCSSite",'ocsVersion' => $this->_tpl_vars['ocsVersion']), $this);?>

<?php endif; ?>
</p>

<p align="center">
	<img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/<?php echo $this->_tpl_vars['edProcessFile']; ?>
" style="border: 0;" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.aboutThisPublishingSystem.altText"), $this);?>
" />
</p>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>