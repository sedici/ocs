<?php /* Smarty version 2.6.18, created on 2008-10-27 15:00:07
         compiled from about/registration.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'about/registration.tpl', 14, false),array('function', 'mailto', 'about/registration.tpl', 29, false),array('modifier', 'escape', 'about/registration.tpl', 17, false),array('modifier', 'nl2br', 'about/registration.tpl', 20, false),array('modifier', 'string_format', 'about/registration.tpl', 61, false),array('block', 'iterate', 'about/registration.tpl', 53, false),)), $this); ?>
<?php $this->assign('pageTitle', "about.registration"); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.registrationContact"), $this);?>
</h3>
<p>
	<?php if (! empty ( $this->_tpl_vars['registrationName'] )): ?>
		<strong><?php echo ((is_array($_tmp=$this->_tpl_vars['registrationName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</strong><br />
	<?php endif; ?>
	<?php if (! empty ( $this->_tpl_vars['registrationMailingAddress'] )): ?>
		<?php echo ((is_array($_tmp=$this->_tpl_vars['registrationMailingAddress'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
<br />
	<?php endif; ?>
	<?php if (! empty ( $this->_tpl_vars['registrationPhone'] )): ?>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.phone"), $this);?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['registrationPhone'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<br />
	<?php endif; ?>
	<?php if (! empty ( $this->_tpl_vars['registrationFax'] )): ?>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.fax"), $this);?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['registrationFax'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<br />
	<?php endif; ?>
	<?php if (! empty ( $this->_tpl_vars['registrationEmail'] )): ?>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.email"), $this);?>
: <?php echo smarty_function_mailto(array('address' => ((is_array($_tmp=$this->_tpl_vars['registrationEmail'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)),'encode' => 'hex'), $this);?>
<br /><br />
	<?php endif; ?>
	<?php if (! empty ( $this->_tpl_vars['registrationAdditionalInformation'] )): ?>
		<?php echo ((is_array($_tmp=$this->_tpl_vars['registrationAdditionalInformation'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
<br />
	<?php endif; ?>
</p>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.availableRegistrationTypes"), $this);?>
</h3>
<p>
<table width="100%" class="listing">
	<tr>
		<td colspan="6" class="headseparator">&nbsp;</td>
	</tr>
	<tr class="heading" valign="bottom">
		<td width="40%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.registrationTypes.name"), $this);?>
</td>
		<td width="12%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.registrationTypes.access"), $this);?>
</td>
		<td width="12%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.registrationTypes.openDate"), $this);?>
</td>
		<td width="12%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.registrationTypes.closeDate"), $this);?>
</td>
		<td width="12%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.registrationTypes.expiryDate"), $this);?>
</td>
		<td width="12%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.registrationTypes.cost"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="6" class="headseparator">&nbsp;</td>
	</tr>
<?php $this->_tag_stack[] = array('iterate', array('from' => 'registrationTypes','item' => 'registrationType')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php if ($this->_tpl_vars['registrationType']->getPublic()): ?>
		<tr valign="top">
			<td><?php echo ((is_array($_tmp=$this->_tpl_vars['registrationType']->getRegistrationTypeName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<br /><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['registrationType']->getRegistrationTypeDescription())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
			<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['registrationType']->getAccessString()), $this);?>
</td>
			<td><?php echo $this->_tpl_vars['registrationType']->getOpeningDate(); ?>
</td>
			<td><?php echo $this->_tpl_vars['registrationType']->getClosingDate(); ?>
</td>
			<td><?php echo $this->_tpl_vars['registrationType']->getExpiryDate(); ?>
</td>
			<td><?php echo ((is_array($_tmp=$this->_tpl_vars['registrationType']->getCost())) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
&nbsp;(<?php echo ((is_array($_tmp=$this->_tpl_vars['registrationType']->getCurrencyStringShort())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
)</td>
		</tr>
		<tr><td colspan="6" class="<?php if ($this->_tpl_vars['registrationTypes']->eof()): ?>end<?php endif; ?>separator">&nbsp;</td></tr>
	<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</table>
</p>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>