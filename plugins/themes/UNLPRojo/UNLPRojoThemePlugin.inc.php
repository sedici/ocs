<?php

/**
 * @file UNLPRojoThemePlugin.inc.php
 *
 * Copyright (c) 2008 Gisele Jaquenod
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class UNLPRojoThemePlugin
 * @ingroup plugins_themes_UNLPRojo
 *
 * @brief "UNLPRojo" theme plugin
 */

// $Id: UNLPRojoThemePlugin.inc.php,v 1.6 2008/11/04 10:16:14 asmecher Exp $


import('classes.plugins.ThemePlugin');

class UNLPRojoThemePlugin extends ThemePlugin {
	/**
	 * Get the name of this plugin. The name must be unique within
	 * its category.
	 * @return String name of plugin
	 */
	function getName() {
		return 'UNLPRojoThemePlugin';
	}

	function getDisplayName() {
		return 'Estilo UNLP Rojo';
	}

	function getDescription() {
		return 'UNLP rojo layout';
	}

	function getStylesheetFilename() {
		return 'UNLPRojo.css';
	}

	function getLocaleFilename($locale) {
		return null; // No locale data
	}
}

?>
