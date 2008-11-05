<?php

/**
 * @file RefWorksCitationPlugin.inc.php
 *
 * Copyright (c) 2000-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class RefWorksCitationPlugin
 * @ingroup plugins_citationFormats_refWorks
 *
 * @brief RefWorks citation format plugin
 */

//$Id: RefWorksCitationPlugin.inc.php,v 1.3 2008/07/02 16:55:25 asmecher Exp $

import('classes.plugins.CitationPlugin');

class RefWorksCitationPlugin extends CitationPlugin {
	function register($category, $path) {
		$success = parent::register($category, $path);
		$this->addLocaleData();
		return $success;
	}

	/**
	 * Get the name of this plugin. The name must be unique within
	 * its category.
	 * @return String name of plugin
	 */
	function getName() {
		return 'RefWorksCitationPlugin';
	}

	function getDisplayName() {
		return Locale::translate('plugins.citationFormats.refWorks.displayName');
	}

	function getCitationFormatName() {
		return Locale::translate('plugins.citationFormats.refWorks.citationFormatName');
	}

	function getDescription() {
		return Locale::translate('plugins.citationFormats.refWorks.description');
	}

}

?>
