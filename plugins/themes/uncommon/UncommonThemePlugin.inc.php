<?php

/**
 * @file UncommonThemePlugin.inc.php
 *
 * Copyright (c) 2000-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class UncommonThemePlugin
 * @ingroup plugins_themes_uncommon
 *
 * @brief "Uncommon" theme plugin
 */

//$Id: UncommonThemePlugin.inc.php,v 1.7 2008/07/02 16:55:26 asmecher Exp $

import('classes.plugins.ThemePlugin');

class UncommonThemePlugin extends ThemePlugin {
	/**
	 * Get the name of this plugin. The name must be unique within
	 * its category.
	 * @return String name of plugin
	 */
	function getName() {
		return 'UncommonThemePlugin';
	}

	function getDisplayName() {
		return 'Uncommon Theme';
	}

	function getDescription() {
		return 'Chunky, blue, solid layout';
	}

	function getStylesheetFilename() {
		return 'uncommon.css';
	}
	function getLocaleFilename($locale) {
		return null; // No locale data
	}
}

?>
