<?php

/**
 * @file UNLPAzulThemePlugin.inc.php
 *
 * Copyright (c) 2008 Gisele Jaquenod
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class UNLPVerAmThemePlugin
 * @ingroup plugins_themes_UNLPAzul
 *
 * @brief "UNLPVerAm" theme plugin
 */

// $Id: UNLPVerAmThemePlugin.inc.php,v 1.6 2008/11/04 10:16:14 asmecher Exp $


import('classes.plugins.ThemePlugin');

class UNLPVerAmThemePlugin extends ThemePlugin {
	/**
	 * Get the name of this plugin. The name must be unique within
	 * its category.
	 * @return String name of plugin
	 */
	function getName() {
		return 'UNLPVerAmThemePlugin';
	}

	function getDisplayName() {
		return 'Estilo UNLP Verde Amarillento';
	}

	function getDescription() {
		return 'Tema verde amarillento UNLP';
	}

	function getStylesheetFilename() {
		return 'UNLPVerAm.css';
	}

	function getLocaleFilename($locale) {
		return null; // No locale data
	}
}

?>
