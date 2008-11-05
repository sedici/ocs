<?php /* Smarty version 2.6.18, created on 2008-11-05 10:44:01
         compiled from user/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'user/index.tpl', 16, false),array('function', 'url', 'user/index.tpl', 20, false),array('function', 'call_hook', 'user/index.tpl', 23, false),array('modifier', 'escape', 'user/index.tpl', 20, false),array('modifier', 'assign', 'user/index.tpl', 136, false),)), $this); ?>
<?php $this->assign('pageTitle', "user.userHome"); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['showAllConferences']): ?>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.myConferences"), $this);?>
</h3>

<?php if ($this->_tpl_vars['isSiteAdmin']): ?>
<?php $this->assign('hasRole', 1); ?>
<h4><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user'), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['siteTitle'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a></h4>
<ul class="plain">
	<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('conference' => 'index','page' => $this->_tpl_vars['isSiteAdmin']->getRolePath()), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['isSiteAdmin']->getRoleName()), $this);?>
</a></li>
	<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::User::Index::Admin"), $this);?>

</ul>
<?php endif; ?>

<?php $_from = $this->_tpl_vars['userConferences']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['conference']):
?>
<?php $this->assign('hasRole', 1); ?>
<h4><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('conference' => $this->_tpl_vars['conference']->getPath(),'page' => 'user'), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['conference']->getConferenceTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a></h4>
	<ul class="plain">
	<?php $this->assign('conferenceId', $this->_tpl_vars['conference']->getConferenceId()); ?>

		
	<?php $_from = $this->_tpl_vars['userRoles'][$this->_tpl_vars['conferenceId']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['role']):
?>
		<?php if ($this->_tpl_vars['role']->getRolePath() != 'reader'): ?>
			<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('conference' => $this->_tpl_vars['conference']->getPath(),'schedConf' => 'index','page' => $this->_tpl_vars['role']->getRolePath()), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['role']->getRoleName()), $this);?>
</a></li>
		<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
	</ul>

		
	<?php $_from = $this->_tpl_vars['userSchedConfs'][$this->_tpl_vars['conferenceId']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['schedConf']):
?>
		<?php $this->assign('schedConfId', $this->_tpl_vars['schedConf']->getSchedConfId()); ?>
		<h5><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('conference' => $this->_tpl_vars['conference']->getPath(),'schedConf' => $this->_tpl_vars['schedConf']->getPath(),'page' => 'index'), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['schedConf']->getSchedConfTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a></h5>

		<ul class="plain">
		<?php $_from = $this->_tpl_vars['userSchedConfRoles'][$this->_tpl_vars['schedConfId']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['role']):
?>
			<?php if ($this->_tpl_vars['role']->getRolePath() != 'reader'): ?>
				<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('conference' => $this->_tpl_vars['conference']->getPath(),'schedConf' => $this->_tpl_vars['schedConf']->getPath(),'page' => $this->_tpl_vars['role']->getRolePath()), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['role']->getRoleName()), $this);?>
</a></li>
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
		</ul>

	<?php endforeach; endif; unset($_from); ?>

	<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::User::Index::Conference",'conference' => $this->_tpl_vars['conference']), $this);?>

<?php endforeach; endif; unset($_from); ?>

<?php else: ?>
<h3><?php echo $this->_tpl_vars['userConference']->getConferenceTitle(); ?>
</h3>
<ul class="plain">
<?php if ($this->_tpl_vars['isSiteAdmin'] && ! $this->_tpl_vars['hasOtherConferences']): ?>
	<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('conference' => 'index','schedConf' => 'index','page' => $this->_tpl_vars['isSiteAdmin']->getRolePath()), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['isSiteAdmin']->getRoleName()), $this);?>
</a></li>
<?php endif; ?>

	<?php $this->assign('conferenceId', $this->_tpl_vars['userConference']->getConferenceId()); ?>

		
	<?php $_from = $this->_tpl_vars['userRoles'][$this->_tpl_vars['conferenceId']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['role']):
?>
		<?php if ($this->_tpl_vars['role']->getRolePath() != 'reader'): ?>
			<?php $this->assign('hasRole', 1); ?>
			<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('conference' => $this->_tpl_vars['userConference']->getPath(),'schedConf' => 'index','page' => $this->_tpl_vars['role']->getRolePath()), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['role']->getRoleName()), $this);?>
</a></li>
		<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
	</ul>

		
	<?php $_from = $this->_tpl_vars['userSchedConfs'][$this->_tpl_vars['conferenceId']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['schedConf']):
?>
		<?php $this->assign('hasRole', 1); ?>
		<?php $this->assign('schedConfId', $this->_tpl_vars['schedConf']->getSchedConfId()); ?>
		<h5><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('conference' => $this->_tpl_vars['userConference']->getPath(),'schedConf' => $this->_tpl_vars['schedConf']->getPath(),'page' => 'index'), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['schedConf']->getSchedConfTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a></h5>

		<ul class="plain">
		<?php $_from = $this->_tpl_vars['userSchedConfRoles'][$this->_tpl_vars['schedConfId']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['role']):
?>
			<?php if ($this->_tpl_vars['role']->getRolePath() != 'reader'): ?>
				<li>&#187;
					<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('conference' => $this->_tpl_vars['userConference']->getPath(),'schedConf' => $this->_tpl_vars['schedConf']->getPath(),'page' => $this->_tpl_vars['role']->getRolePath()), $this);?>
">
						<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['role']->getRoleName()), $this);?>

					</a>
				</li>
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
		</ul>

	<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>

<?php if (! $this->_tpl_vars['hasRole']): ?>
	<?php if (! $this->_tpl_vars['currentSchedConf']): ?>
		<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.noRoles.chooseConference"), $this);?>
</p>
		<?php $_from = $this->_tpl_vars['allConferences']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['conferenceId'] => $this->_tpl_vars['thisConference']):
?>
			<h4><?php echo ((is_array($_tmp=$this->_tpl_vars['thisConference']->getConferenceTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</h4>
			<?php if (! empty ( $this->_tpl_vars['allSchedConfs'][$this->_tpl_vars['conferenceId']] )): ?>
			<ul class="plain">
			<?php $_from = $this->_tpl_vars['allSchedConfs'][$this->_tpl_vars['conferenceId']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['schedConfId'] => $this->_tpl_vars['thisSchedConf']):
?>
				<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('conference' => $this->_tpl_vars['thisConference']->getPath(),'schedConf' => $this->_tpl_vars['thisSchedConf']->getPath(),'page' => 'user','op' => 'index'), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['thisSchedConf']->getSchedConfTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a></li>
			<?php endforeach; endif; unset($_from); ?>
			</ul>
			<?php endif; ?>		<?php endforeach; endif; unset($_from); ?>
	<?php else: ?>		<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.noRoles.noRolesForConference"), $this);?>
</p>
		<ul class="plain">
			<li>
				&#187;
				<?php if ($this->_tpl_vars['allowRegPresenter']): ?>
					<?php if ($this->_tpl_vars['submissionsOpen']): ?>
						<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'presenter','op' => 'submit'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.noRoles.submitProposal"), $this);?>
</a>
					<?php else: ?>						<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.noRoles.submitProposalSubmissionsClosed"), $this);?>

					<?php endif; ?>				<?php else: ?>					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.noRoles.submitProposalRegClosed"), $this);?>

				<?php endif; ?>			</li>
			<li>
				&#187;
				<?php if ($this->_tpl_vars['allowRegReviewer']): ?>
					<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'index'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'userHomeUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'userHomeUrl'));?>

					<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'become','path' => 'reviewer','source' => $this->_tpl_vars['userHomeUrl']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.noRoles.regReviewer"), $this);?>
</a>
				<?php else: ?>					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.noRoles.regReviewerClosed"), $this);?>

				<?php endif; ?>			</li>
			<li>
				&#187;
				<?php if ($this->_tpl_vars['schedConfPaymentsEnabled']): ?>
					<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'schedConf','op' => 'registration'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.noRoles.register"), $this);?>
</a>
				<?php else: ?>					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.noRoles.registerUnavailable"), $this);?>

				<?php endif; ?>			</li>
		</ul>
	<?php endif; ?><?php endif; ?>


<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.myAccount"), $this);?>
</h3>
<ul class="plain">
	<?php if ($this->_tpl_vars['hasOtherConferences']): ?>
	<?php if ($this->_tpl_vars['showAllConferences']): ?>
	<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('conference' => 'index','page' => 'user','op' => 'account'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.createAccountForOtherConferences"), $this);?>
</a></li>
	<?php else: ?>
	<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('conference' => 'index','page' => 'user'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.showAllConferences"), $this);?>
</a></li>
	<?php endif; ?>
	<?php endif; ?>
	<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'profile'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.editMyProfile"), $this);?>
</a></li>
	<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'changePassword'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.changeMyPassword"), $this);?>
</a></li>
	<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'login','op' => 'signOut'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.logOut"), $this);?>
</a></li>
	<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::User::Index::MyAccount"), $this);?>

</ul>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>