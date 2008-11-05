<?php

/**
 * @file NightThemePlugin.inc.php
 *
 * Copyright (c) 2000-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class NightThemePlugin
 * @ingroup plugins_themes_night
 *
 * @brief "Night" theme plugin
 */

//$Id: NightThemePlugin.inc.php,v 1.7 2008/07/02 16:55:25 asmecher Exp $

import('classes.plugins.ThemePlugin');

class NightThemePlugin extends ThemePlugin {
	/**
	 * Get the name of this plugin. The name must be unique within
	 * its category.
	 * @return String name of plugin
	 */
	function getName() {
		return 'NightThemePlugin';
	}

	function getDisplayName() {
		return 'Night Theme';
	}

	function getDescription() {
		return 'Dark layout';
	}

	function getStylesheetFilename() {
		return 'night.css';
	}

	function getLocaleFilename($locale) {
		return null; // No locale data
	}
}

?>
