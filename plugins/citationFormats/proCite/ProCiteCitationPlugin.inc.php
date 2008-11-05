<?php

/**
 * @file ProCiteCitationPlugin.inc.php
 *
 * Copyright (c) 2000-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class ProCiteCitationPlugin
 * @ingroup plugins_citationFormats_proCite
 *
 * @brief ProCite citation format plugin
 */

//$Id: ProCiteCitationPlugin.inc.php,v 1.6 2008/07/02 16:55:25 asmecher Exp $

import('classes.plugins.CitationPlugin');

class ProCiteCitationPlugin extends CitationPlugin {
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
		return 'ProCiteCitationPlugin';
	}

	function getDisplayName() {
		return Locale::translate('plugins.citationFormats.proCite.displayName');
	}

	function getCitationFormatName() {
		return Locale::translate('plugins.citationFormats.proCite.citationFormatName');
	}

	function getDescription() {
		return Locale::translate('plugins.citationFormats.proCite.description');
	}

	/**
	 * Return a custom-formatted citation.
	 * @param $paper object
	 */
	function cite(&$paper) {
		header('Content-Disposition: attachment; filename="' . $paper->getPaperId() . '-proCite.ris"');
		$templateMgr =& TemplateManager::getManager();
		$templateMgr->display($this->getTemplatePath() . '/citation.tpl', 'application/x-Research-Info-Systems');
	}
}

?>
