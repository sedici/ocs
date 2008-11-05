<?php /* Smarty version 2.6.18, created on 2008-10-27 15:00:07
         compiled from admin/auth/sourceSettings.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'admin/auth/sourceSettings.tpl', 16, false),array('function', 'fieldLabel', 'admin/auth/sourceSettings.tpl', 20, false),array('function', 'translate', 'admin/auth/sourceSettings.tpl', 25, false),array('modifier', 'escape', 'admin/auth/sourceSettings.tpl', 21, false),)), $this); ?>
<?php $this->assign('pageTitle', "admin.authSources"); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<br />

<form method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'updateAuthSource','path' => $this->_tpl_vars['authId']), $this);?>
">

<table class="data" width="100%">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'title','key' => "common.title"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" id="title" name="title" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="40" maxlength="120" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td class="label" colspan="2">
			<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.options"), $this);?>
</h4>
		</td>
	</tr>
	<tr valign="top">
		<td class="label" align="right">
			<input type="checkbox" name="settings[syncProfiles]" id="syncProfiles" value="1"<?php if ($this->_tpl_vars['settings']['syncProfiles']): ?> checked="checked"<?php endif; ?> />
		</td>
		<td class="value">
			<label for="syncProfiles"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.auth.enableSyncProfiles"), $this);?>
</label>
		</td>
	</tr>
	<tr valign="top">
		<td class="label" align="right">
			<input type="checkbox" name="settings[syncPasswords]" id="syncPasswords" value="1"<?php if ($this->_tpl_vars['settings']['syncPasswords']): ?> checked="checked"<?php endif; ?> />
		</td>
		<td class="value">
			<label for="syncPasswords"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.auth.enableSyncPasswords"), $this);?>
</label>
		</td>
	</tr>
	<tr valign="top">
		<td class="label" align="right">
			<input type="checkbox" name="settings[createUsers]" id="createUsers" value="1"<?php if ($this->_tpl_vars['settings']['createUsers']): ?> checked="checked"<?php endif; ?> />
		</td>
		<td class="value">
			<label for="createUsers"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.auth.enableCreateUsers"), $this);?>
</label>
		</td>
	</tr>
</table>

<?php if ($this->_tpl_vars['pluginTemplate']): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['pluginTemplate'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>

<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'auth','escape' => false), $this);?>
'" /></p>

</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>