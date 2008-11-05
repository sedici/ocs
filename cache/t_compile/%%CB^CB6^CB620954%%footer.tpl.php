<?php /* Smarty version 2.6.18, created on 2008-11-05 10:39:41
         compiled from common/footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'common/footer.tpl', 18, false),array('function', 'call_hook', 'common/footer.tpl', 21, false),array('function', 'get_debug_info', 'common/footer.tpl', 26, false),array('modifier', 'string_format', 'common/footer.tpl', 31, false),array('modifier', 'escape', 'common/footer.tpl', 32, false),)), $this); ?>
<?php if ($this->_tpl_vars['pageFooter']): ?>
<br /><br />
<?php echo $this->_tpl_vars['pageFooter']; ?>

<?php endif; ?>

<?php if ($this->_tpl_vars['postCreativeCommons']): ?>
	<br />
	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.ccLicense",'ccLicenseImageUrl' => ($this->_tpl_vars['baseUrl'])."/templates/images/ccLicense.png"), $this);?>

<?php endif; ?>

<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Common::Footer::PageFooter"), $this);?>

</div><!-- content -->
</div><!-- main -->
</div><!-- body -->

<?php echo $this->_plugins['function']['get_debug_info'][0][0]->smartyGetDebugInfo(array(), $this);?>

<?php if ($this->_tpl_vars['enableDebugStats']): ?>
<div id="footer">
	<div id="footerContent">
		<div class="debugStats">
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "debug.executionTime"), $this);?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['debugExecutionTime'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.4f") : smarty_modifier_string_format($_tmp, "%.4f")); ?>
s<br />
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "debug.databaseQueries"), $this);?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['debugNumDatabaseQueries'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<br/>
		<?php if ($this->_tpl_vars['debugNotes']): ?>
			<strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "debug.notes"), $this);?>
</strong><br/>
			<?php $_from = $this->_tpl_vars['debugNotes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['note']):
?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['note'][0],'params' => $this->_tpl_vars['note'][1]), $this);?>
<br/>
			<?php endforeach; endif; unset($_from); ?>
		<?php endif; ?>
		</div>
	</div><!-- footerContent -->
</div><!-- footer -->
<?php endif; ?>

</div><!-- container -->
</body>
</html>