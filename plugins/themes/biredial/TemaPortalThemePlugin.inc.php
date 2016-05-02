<?php

import('classes.plugins.ThemePlugin');

class TemaPortalThemePlugin extends ThemePlugin {

	function register($category, $path) { 
        	if (parent::register($category, $path)) { 
			//HookRegistry::register('Templates::Manager::Index::ManagementPages', array(&$this, 'callback')); 
			HookRegistry::register('Templates::Manager::Index::TemaPortal', array(&$this, 'callback')); 
            		return true; 
        	} 
        	return false; 
    	} 

	function getName() {
		return 'biredialThemePlugin';
	}

	function getDisplayName() {
		return 'biredial Theme';
	}

	function getDescription() {
		return 'Probando un tema propio para el Portal';
	}

	function getStylesheetFilename() {
		return 'temaPortal.css';
	}

	function getLocaleFilename($locale) {
		return null; 
	}

	function callback($hookName, $args) { 
        	$params =& $args[0]; 
	        $smarty =& $args[1]; 
	        $output =& $args[2]; 
	        $output = '<li>&#187; <a href=”http://pkp.sfu.ca”>ESTOY EN EL CALLBACK DE TEMA-PORTAL</a></li>'; 
	        return true; 
   	 } 
}

?>
