<?php /* Smarty version 2.6.26, created on 2010-09-10 11:23:46
         compiled from user/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'user/index.tpl', 18, false),array('function', 'translate', 'user/index.tpl', 18, false),array('function', 'call_hook', 'user/index.tpl', 19, false),array('modifier', 'escape', 'user/index.tpl', 27, false),array('modifier', 'assign', 'user/index.tpl', 162, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "user.userHome"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<?php if ($this->_tpl_vars['isSiteAdmin']): ?>
<?php $this->assign('hasRole', 1); ?>
	&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('conference' => 'index','page' => $this->_tpl_vars['isSiteAdmin']->getRolePath()), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['isSiteAdmin']->getRoleName()), $this);?>
</a>
	<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::User::Index::Admin"), $this);?>

<?php endif; ?>

<?php if (! $this->_tpl_vars['currentConference']): ?><h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.myConferences"), $this);?>
</h3><?php endif; ?>

<?php $_from = $this->_tpl_vars['userConferences']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['conference']):
?>
<?php $this->assign('hasRole', 1); ?>
<div id="conference">
<h4><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('conference' => $this->_tpl_vars['conference']->getPath(),'page' => 'user'), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['conference']->getConferenceTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a></h4>
	<?php $this->assign('conferenceId', $this->_tpl_vars['conference']->getId()); ?>
	<?php $this->assign('conferencePath', $this->_tpl_vars['conference']->getPath()); ?>
		
	<table width="100%" class="info">
		<?php if ($this->_tpl_vars['isValid']['ConferenceManager'][$this->_tpl_vars['conferenceId']]['0']): ?>
			<tr>
				<td>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('conference' => $this->_tpl_vars['conferencePath'],'page' => 'manager'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.manager"), $this);?>
</a></td>
				<td></td>
				<td></td>
				<td></td>
				<td align="right"><?php if ($this->_tpl_vars['setupIncomplete'][$this->_tpl_vars['conferenceId']]): ?>[<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('conference' => $this->_tpl_vars['conferencePath'],'schedConf' => $this->_tpl_vars['schedConfPath'],'page' => 'manager','op' => 'setup','path' => '1'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.schedConfSetup"), $this);?>
</a>]<?php endif; ?></td>
			</tr>
		<?php endif; ?>
	</table>

		<?php $_from = $this->_tpl_vars['userSchedConfs'][$this->_tpl_vars['conferenceId']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['schedConf']):
?>
		<div id="schedConf">
		<?php $this->assign('schedConfId', $this->_tpl_vars['schedConf']->getId()); ?>
		<?php $this->assign('schedConfPath', $this->_tpl_vars['schedConf']->getPath()); ?>
		<h5><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('conference' => $this->_tpl_vars['conference']->getPath(),'schedConf' => $this->_tpl_vars['schedConf']->getPath(),'page' => 'index'), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['schedConf']->getSchedConfTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a></h5>

		<table width="100%" class="info">
			<?php if ($this->_tpl_vars['isValid']['Director'][$this->_tpl_vars['conferenceId']][$this->_tpl_vars['schedConfId']]): ?>
				<tr>
					<?php $this->assign('directorSubmissionsCount', $this->_tpl_vars['submissionsCount']['Director'][$this->_tpl_vars['conferenceId']][$this->_tpl_vars['schedConfId']]); ?>
					<td>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('conference' => $this->_tpl_vars['conferencePath'],'schedConf' => $this->_tpl_vars['schedConfPath'],'page' => 'director'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.director"), $this);?>
</a></td>
					<td><?php if ($this->_tpl_vars['directorSubmissionsCount'][0]): ?>
							<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('conference' => $this->_tpl_vars['conferencePath'],'schedConf' => $this->_tpl_vars['schedConfPath'],'page' => 'director','op' => 'submissions','path' => 'submissionsUnassigned'), $this);?>
"><?php echo $this->_tpl_vars['directorSubmissionsCount'][0]; ?>
 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.queue.short.submissionsUnassigned"), $this);?>
</a>
						<?php else: ?><span class="disabled">0 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.queue.short.submissionsUnassigned"), $this);?>
</span><?php endif; ?>
					</td>
					<td colspan="2">
						<?php if ($this->_tpl_vars['directorSubmissionsCount'][1]): ?>
							<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('conference' => $this->_tpl_vars['conferencePath'],'schedConf' => $this->_tpl_vars['schedConfPath'],'page' => 'director','op' => 'submissions','path' => 'submissionsInReview'), $this);?>
"><?php echo $this->_tpl_vars['directorSubmissionsCount'][1]; ?>
 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.queue.short.submissionsInReview"), $this);?>
</a>
						<?php else: ?>
							<span class="disabled">0 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.queue.short.submissionsInReview"), $this);?>
</span>
						<?php endif; ?>
					</td>
					<td align="right">[<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('conference' => $this->_tpl_vars['conferencePath'],'schedConf' => $this->_tpl_vars['schedConfPath'],'page' => 'director','op' => 'notifyUsers'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "director.notifyUsers"), $this);?>
</a>]</td>
				</tr>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['isValid']['TrackDirector'][$this->_tpl_vars['conferenceId']][$this->_tpl_vars['schedConfId']]): ?>
				<?php $this->assign('trackDirectorSubmissionsCount', $this->_tpl_vars['submissionsCount']['TrackDirector'][$this->_tpl_vars['conferenceId']][$this->_tpl_vars['schedConfId']]); ?>
				<tr>
					<td>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('conference' => $this->_tpl_vars['conferencePath'],'schedConf' => $this->_tpl_vars['schedConfPath'],'page' => 'trackDirector'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.trackDirector"), $this);?>
</a></td>
					<td></td>
					<td colspan="3">
						<?php if ($this->_tpl_vars['trackDirectorSubmissionsCount'][0]): ?>
							<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('conference' => $this->_tpl_vars['conferencePath'],'schedConf' => $this->_tpl_vars['schedConfPath'],'page' => 'trackDirector','op' => 'index','path' => 'submissionsInReview'), $this);?>
"><?php echo $this->_tpl_vars['trackDirectorSubmissionsCount'][0]; ?>
 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.queue.short.submissionsInReview"), $this);?>
</a>
						<?php else: ?>
							<span class="disabled">0 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.queue.short.submissionsInReview"), $this);?>
</span>
						<?php endif; ?>
					</td>
				</tr>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['isValid']['Author'][$this->_tpl_vars['conferenceId']][$this->_tpl_vars['schedConfId']] || $this->_tpl_vars['isValid']['Reviewer'][$this->_tpl_vars['conferenceId']][$this->_tpl_vars['schedConfId']]): ?>
				<tr><td class="separator" width="100%" colspan="5">&nbsp;</td></tr>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['isValid']['Author'][$this->_tpl_vars['conferenceId']][$this->_tpl_vars['schedConfId']]): ?>
				<?php $this->assign('authorSubmissionsCount', $this->_tpl_vars['submissionsCount']['Author'][$this->_tpl_vars['conferenceId']][$this->_tpl_vars['schedConfId']]); ?>
				<tr>
					<td>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('conference' => $this->_tpl_vars['conferencePath'],'schedConf' => $this->_tpl_vars['schedConfPath'],'page' => 'author'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.author"), $this);?>
</a></td>
					<td></td>
					<td></td>
					<td><?php if ($this->_tpl_vars['authorSubmissionsCount'][0]): ?>
							<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('conference' => $this->_tpl_vars['conferencePath'],'schedConf' => $this->_tpl_vars['schedConfPath'],'page' => 'author'), $this);?>
"><?php echo $this->_tpl_vars['authorSubmissionsCount'][0]; ?>
 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.queue.short.active"), $this);?>
</a>
						<?php else: ?><span class="disabled">0 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.queue.short.active"), $this);?>
</span><?php endif; ?>
					</td>
					<td align="right">[<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('conference' => $this->_tpl_vars['conferencePath'],'schedConf' => $this->_tpl_vars['schedConfPath'],'page' => 'author','op' => 'submit'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit"), $this);?>
</a>]</td>
				</tr>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['isValid']['Reviewer'][$this->_tpl_vars['conferenceId']][$this->_tpl_vars['schedConfId']]): ?>
				<?php $this->assign('reviewerSubmissionsCount', $this->_tpl_vars['submissionsCount']['Reviewer'][$this->_tpl_vars['conferenceId']][$this->_tpl_vars['schedConfId']]); ?>
				<tr>
					<td>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('conference' => $this->_tpl_vars['conferencePath'],'schedConf' => $this->_tpl_vars['schedConfPath'],'page' => 'reviewer'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.reviewer"), $this);?>
</a></td>
					<td></td>
					<td></td>
					<td><?php if ($this->_tpl_vars['reviewerSubmissionsCount'][0]): ?>
							<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('conference' => $this->_tpl_vars['conferencePath'],'schedConf' => $this->_tpl_vars['schedConfPath'],'page' => 'reviewer'), $this);?>
"><?php echo $this->_tpl_vars['reviewerSubmissionsCount'][0]; ?>
 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.queue.short.active"), $this);?>
</a>
						<?php else: ?><span class="disabled">0 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.queue.short.active"), $this);?>
</span><?php endif; ?>
					</td>
					</td align="right"></td>
				</tr>
			<?php endif; ?>
						<tr>
				<td width="25%"></td>
				<td width="14%"></td>
				<td width="14%"></td>
				<td width="14%"></td>
				<td width="33%"></td>
			</tr>
				
		</table>
	</div>
	<?php endforeach; endif; unset($_from); ?>

	<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::User::Index::Conference",'conference' => $this->_tpl_vars['conference']), $this);?>

	</div>
<?php endforeach; endif; unset($_from); ?>


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
				<?php if ($this->_tpl_vars['allowRegAuthor']): ?>
					<?php if ($this->_tpl_vars['submissionsOpen']): ?>
						<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'author','op' => 'submit'), $this);?>
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

<div id="myAccount">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.myAccount"), $this);?>
</h3>
<ul class="plain">
	<?php if ($this->_tpl_vars['hasOtherConferences']): ?>
		<?php if (! $this->_tpl_vars['showAllConferences']): ?>
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
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>