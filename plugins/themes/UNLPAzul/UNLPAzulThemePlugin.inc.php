<?php

/**
 * @file UNLPAzulThemePlugin.inc.php
 *
 * Copyright (c) 2008 Gisele Jaquenod
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class UNLPAzulThemePlugin
 * @ingroup plugins_themes_UNLPAzul
 *
 * @brief "UNLPAzul" theme plugin
 */

// $Id: UNLPAzulThemePlugin.inc.php,v 1.6 2008/11/04 10:16:14 asmecher Exp $


import('classes.plugins.ThemePlugin');

class UNLPAzulThemePlugin extends ThemePlugin {
	/**
	 * Get the name of this plugin. The name must be unique within
	 * its category.
	 * @return String name of plugin
	 */
	function getName() {
		return 'UNLPAzulThemePlugin';
	}

	function getDisplayName() {
		return 'Estilo UNLP Azul';
	}

	function getDescription() {
		return 'UNLP azul layout';
	}

	function getStylesheetFilename() {
		return 'UNLPAzul.css';
	}

	function getLocaleFilename($locale) {
		return null; // No locale data
	}
}

?>
