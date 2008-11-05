<?php /* Smarty version 2.6.18, created on 2008-10-27 15:00:07
         compiled from about/siteMap.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'about/siteMap.tpl', 18, false),array('function', 'translate', 'about/siteMap.tpl', 18, false),array('modifier', 'count', 'about/siteMap.tpl', 20, false),array('modifier', 'escape', 'about/siteMap.tpl', 22, false),array('modifier', 'assign', 'about/siteMap.tpl', 43, false),)), $this); ?>
<?php $this->assign('pageTitle', "about.siteMap"); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<ul class="plain">
<li>
	<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('conference' => 'index','page' => 'index','op' => 'index'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.home"), $this);?>
</a><br/>
	<ul class="plain">
	<?php if (count($this->_tpl_vars['conferences']) > 1 && ! $this->_tpl_vars['currentConference']): ?>
		<?php $_from = $this->_tpl_vars['conferences']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['conference']):
?>
			<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('conference' => ($this->_tpl_vars['conference']->getPath()),'page' => 'about','op' => 'siteMap'), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['conference']->getConferenceTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a></li>
		<?php endforeach; endif; unset($_from); ?>
	<?php else: ?>
		<?php if (count($this->_tpl_vars['conferences']) == 1): ?>
			<?php $this->assign('currentConference', $this->_tpl_vars['conferences'][0]); ?>
		<?php else: ?>
			<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('conference' => 'index','page' => 'about','op' => 'siteMap'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "conference.conferences"), $this);?>
</a><br/>
			<ul class="plain">
			<?php $this->assign('onlyOneConference', 1); ?>
		<?php endif; ?>

		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('conference' => ($this->_tpl_vars['currentConference']->getPath())), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['currentConference']->getConferenceTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a><br/>
			<ul class="plain">
				<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('conference' => ($this->_tpl_vars['currentConference']->getPath()),'page' => 'about'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.about"), $this);?>
</a></li>
				<li>
					<?php if ($this->_tpl_vars['isUserLoggedIn']): ?>
						<ul class="plain">
							<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('conference' => ($this->_tpl_vars['currentConference']->getPath()),'page' => 'user'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.userHome"), $this);?>
</a><br/>
								<ul class="plain">
									<?php $this->assign('currentConferenceId', $this->_tpl_vars['currentConference']->getConferenceId()); ?>
									<?php $_from = $this->_tpl_vars['rolesByConference'][$this->_tpl_vars['currentConferenceId']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['role']):
?>
										<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['role']->getRoleName()), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'roleName') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'roleName'));?>

										<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('conference' => ($this->_tpl_vars['currentConference']->getPath()),'page' => ($this->_tpl_vars['role']->getRolePath())), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['roleName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a></li>
									<?php endforeach; endif; unset($_from); ?>
								</ul>
							</li>
						</ul>
					<?php else: ?>
						<ul class="plain">
							<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('conference' => ($this->_tpl_vars['currentConference']->getPath()),'page' => 'login'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.login"), $this);?>
</a></li>
							<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('conference' => ($this->_tpl_vars['currentConference']->getPath()),'page' => 'account'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.account"), $this);?>
</a></li>
						</ul>
					<?php endif; ?>
				</li>
				<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('conference' => ($this->_tpl_vars['currentConference']->getPath()),'page' => 'search'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.search"), $this);?>
</a><br />
					<ul class="plain">
						<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('conference' => ($this->_tpl_vars['currentConference']->getPath()),'page' => 'search','op' => 'presenters'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.browseByPresenter"), $this);?>
</a></li>
						<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('conference' => ($this->_tpl_vars['currentConference']->getPath()),'page' => 'search','op' => 'titles'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.browseByTitle"), $this);?>
</a></li>
					</ul>
				</li>
				<?php $_from = $this->_tpl_vars['currentConference']->getLocalizedSetting('navItems'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['navItem']):
?>
					<li><a href="<?php if ($this->_tpl_vars['navItem']['isAbsolute']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['navItem']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php else: ?><?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => ""), $this);?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['navItem']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?>"><?php if ($this->_tpl_vars['navItem']['isLiteral']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['navItem']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php else: ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => ((is_array($_tmp=$this->_tpl_vars['navItem']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp))), $this);?>
<?php endif; ?></a></li>
				<?php endforeach; endif; unset($_from); ?>
			</ul>
		</li>	
		<?php if ($this->_tpl_vars['onlyOneConference']): ?></ul></li><?php endif; ?>

	<?php endif; ?>
	</ul>
</li>
<?php if ($this->_tpl_vars['isSiteAdmin']): ?>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('conference' => 'index','page' => $this->_tpl_vars['isSiteAdmin']->getRolePath()), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['isSiteAdmin']->getRoleName()), $this);?>
</a></li>
<?php endif; ?>
<li><a href="http://pkp.sfu.ca/ojs"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.openConferenceSystems"), $this);?>
</a></li>
<!-- li><a href="javascript:openHelp('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('conference' => 'index','page' => 'help'), $this);?>
')"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "help.help"), $this);?>
</a></li -->
</ul>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>