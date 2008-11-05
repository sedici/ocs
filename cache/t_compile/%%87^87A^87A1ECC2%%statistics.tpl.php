<?php /* Smarty version 2.6.18, created on 2008-10-27 15:00:07
         compiled from about/statistics.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'about/statistics.tpl', 20, false),array('function', 'url', 'about/statistics.tpl', 22, false),array('function', 'math', 'about/statistics.tpl', 55, false),array('modifier', 'escape', 'about/statistics.tpl', 22, false),array('modifier', 'default', 'about/statistics.tpl', 68, false),)), $this); ?>
<?php $this->assign('pageTitle', "about.statistics"); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<a name="statistics"></a>

<table width="100%" class="data">
	<tr valign="top">
		<td width="25%" class="label"><h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.year"), $this);?>
</h4></td>
		<td width="75%" colspan="2" class="value">
			<h4><a class="action" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('statisticsYear' => $this->_tpl_vars['statisticsYear']-1), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.previousPage"), $this);?>
</a>&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['statisticsYear'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
&nbsp;<a class="action" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('statisticsYear' => $this->_tpl_vars['statisticsYear']+1), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.nextPage"), $this);?>
</a></h4>
		</td>
	</tr>

	<?php if ($this->_tpl_vars['statNumPublishedIssues']): ?><tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.numIssues"), $this);?>
</td>
		<td colspan="2" class="value"><?php echo $this->_tpl_vars['issueStatistics']['numPublishedIssues']; ?>
</td>
	</tr><?php endif; ?>

	<?php if ($this->_tpl_vars['statItemsPublished']): ?><tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.itemsPublished"), $this);?>
</td>
		<td width="80%" colspan="2" class="value"><?php echo $this->_tpl_vars['paperStatistics']['numPublishedSubmissions']; ?>
</td>
	</tr><?php endif; ?>
	<?php if ($this->_tpl_vars['statNumSubmissions']): ?><tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.numSubmissions"), $this);?>
</td>
		<td width="80%" colspan="2" class="value"><?php echo $this->_tpl_vars['paperStatistics']['numSubmissions']; ?>
</td>
	</tr><?php endif; ?>
	<?php if ($this->_tpl_vars['statPeerReviewed']): ?><tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.peerReviewed"), $this);?>
</td>
		<td width="80%" colspan="2" class="value"><?php echo $this->_tpl_vars['limitedPaperStatistics']['numReviewedSubmissions']; ?>
</td>
	</tr><?php endif; ?>
	<?php if ($this->_tpl_vars['statCountAccept']): ?><tr valign="top">
		<td width="20%" class="label">&nbsp;&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.count.accept"), $this);?>
</td>
		<td width="80%" colspan="2" class="value"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.count.value",'count' => $this->_tpl_vars['limitedPaperStatistics']['submissionsAccept'],'percentage' => $this->_tpl_vars['limitedPaperStatistics']['submissionsAcceptPercent']), $this);?>
</td>
	</tr><?php endif; ?>
	<?php if ($this->_tpl_vars['statCountDecline']): ?><tr valign="top">
		<td width="20%" class="label">&nbsp;&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.count.decline"), $this);?>
</td>
		<td width="80%" colspan="2" class="value"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.count.value",'count' => $this->_tpl_vars['limitedPaperStatistics']['submissionsDecline'],'percentage' => $this->_tpl_vars['limitedPaperStatistics']['submissionsDeclinePercent']), $this);?>
</td>
	</tr><?php endif; ?>
	<?php if ($this->_tpl_vars['statDaysPerReview']): ?><tr valign="top">
		<td width="20%" class="label">&nbsp;&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.daysPerReview"), $this);?>
</td>
		<td colspan="2" class="value">
			<?php $this->assign('daysPerReview', $this->_tpl_vars['reviewerStatistics']['daysPerReview']); ?>
			<?php echo smarty_function_math(array('equation' => "round(".($this->_tpl_vars['daysPerReview']).")"), $this);?>

		</td>
	</tr><?php endif; ?>
	<?php if ($this->_tpl_vars['statDaysToPublication']): ?><tr valign="top">
		<td width="20%" class="label">&nbsp;&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.daysToPublication"), $this);?>
</td>
		<td colspan="2" class="value"><?php echo $this->_tpl_vars['limitedPaperStatistics']['daysToPublication']; ?>
</td>
	</tr><?php endif; ?>
	<?php if ($this->_tpl_vars['statRegisteredUsers']): ?><tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.users"), $this);?>
</td>
		<td colspan="2" class="value"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.totalNewValue",'numTotal' => $this->_tpl_vars['allUserStatistics']['totalUsersCount'],'numNew' => $this->_tpl_vars['userStatistics']['totalUsersCount']), $this);?>
</td>
	</tr><?php endif; ?>
	<?php if ($this->_tpl_vars['statRegisteredReaders']): ?><tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.readers"), $this);?>
</td>
		<td colspan="2" class="value"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.totalNewValue",'numTotal' => ((is_array($_tmp=@$this->_tpl_vars['allUserStatistics']['reader'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')),'numNew' => ((is_array($_tmp=@$this->_tpl_vars['userStatistics']['reader'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0'))), $this);?>
</td>
	</tr><?php endif; ?>

	<?php if ($this->_tpl_vars['statRegistrations']): ?>
		<tr valign="top">
			<td colspan="3" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.registrations"), $this);?>
</td>
		</tr>
		<?php $_from = $this->_tpl_vars['allRegistrationStatistics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['type_id'] => $this->_tpl_vars['stats']):
?>
		<tr valign="top">
			<td width="20%" class="label">&nbsp;&nbsp;<?php echo $this->_tpl_vars['stats']['name']; ?>
:</td>
			<td colspan="2" class="value"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.statistics.totalNewValue",'numTotal' => ((is_array($_tmp=@$this->_tpl_vars['stats']['count'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')),'numNew' => ((is_array($_tmp=@$this->_tpl_vars['registrationStatistics'][$this->_tpl_vars['type_id']]['count'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0'))), $this);?>
</td>
		</tr>
		<?php endforeach; endif; unset($_from); ?>
	<?php endif; ?>
</table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>