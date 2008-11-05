<?php /* Smarty version 2.6.18, created on 2008-10-27 15:00:07
         compiled from about/organizingTeam.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'about/organizingTeam.tpl', 16, false),array('function', 'url', 'about/organizingTeam.tpl', 22, false),array('modifier', 'escape', 'about/organizingTeam.tpl', 22, false),)), $this); ?>
<?php $this->assign('pageTitle', "about.organizingTeam"); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if (count ( $this->_tpl_vars['directors'] ) > 0): ?>
	<?php if (count ( $this->_tpl_vars['directors'] ) == 1): ?>
		<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.director"), $this);?>
</h4>
	<?php else: ?>
		<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.directors"), $this);?>
</h4>
	<?php endif; ?>

<?php $_from = $this->_tpl_vars['directors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['director']):
?>
	<a href="javascript:openRTWindow('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'organizingTeamBio','path' => $this->_tpl_vars['director']->getUserId()), $this);?>
')"><?php echo ((is_array($_tmp=$this->_tpl_vars['director']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a><?php if ($this->_tpl_vars['director']->getAffiliation()): ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['director']->getAffiliation())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?><?php if ($this->_tpl_vars['director']->getCountry()): ?><?php $this->assign('countryCode', $this->_tpl_vars['director']->getCountry()); ?><?php $this->assign('country', $this->_tpl_vars['countries'][$this->_tpl_vars['countryCode']]); ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['country'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?>
	<br/>
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>

<?php if (count ( $this->_tpl_vars['trackDirectors'] ) > 0): ?>
	<?php if (count ( $this->_tpl_vars['trackDirectors'] ) == 1): ?>
		<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.trackDirector"), $this);?>
</h4>
	<?php else: ?>
		<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.trackDirectors"), $this);?>
</h4>
	<?php endif; ?>

<?php $_from = $this->_tpl_vars['trackDirectors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['trackDirector']):
?>
	<a href="javascript:openRTWindow('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'organizingTeamBio','path' => $this->_tpl_vars['trackDirector']->getUserId()), $this);?>
')"><?php echo ((is_array($_tmp=$this->_tpl_vars['trackDirector']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a><?php if ($this->_tpl_vars['trackDirector']->getAffiliation()): ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['trackDirector']->getAffiliation())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?><?php if ($this->_tpl_vars['trackDirector']->getCountry()): ?><?php $this->assign('countryCode', $this->_tpl_vars['trackDirector']->getCountry()); ?><?php $this->assign('country', $this->_tpl_vars['countries'][$this->_tpl_vars['countryCode']]); ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['country'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?>
	<br/>
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "about/conferenceSponsorship.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>