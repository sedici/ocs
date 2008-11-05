<?php

/**
 * @file DesertThemePlugin.inc.php
 *
 * Copyright (c) 2000-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class DesertThemePlugin
 * @ingroup plugins_themes_desert
 *
 * @brief "Desert" theme plugin
 */

//$Id: DesertThemePlugin.inc.php,v 1.7 2008/07/02 16:55:25 asmecher Exp $

import('classes.plugins.ThemePlugin');

class DesertThemePlugin extends ThemePlugin {
	/**
	 * Get the name of this plugin. The name must be unique within
	 * its category.
	 * @return String name of plugin
	 */
	function getName() {
		return 'DesertThemePlugin';
	}

	function getDisplayName() {
		return 'Desert Theme';
	}

	function getDescription() {
		return 'Desert layout';
	}

	function getStylesheetFilename() {
		return 'desert.css';
	}

	function getLocaleFilename($locale) {
		return null; // No locale data
	}
}

?>
