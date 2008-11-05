<?php

/**
 * @file CustomLocalePlugin.inc.php
 *
 * Copyright (c) 2003-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @package plugins.generic.customLocale
 * @class CustomLocalePlugin
 *
 * This plugin enables customization of locale strings.
 *
 * $Id: CustomLocalePlugin.inc.php,v 1.1 2008/06/27 12:09:48 michael Exp $
 */

define('CUSTOM_LOCALE_DIR', 'customLocale');
import('classes.plugins.GenericPlugin');

class CustomLocalePlugin extends GenericPlugin {

	function register($category, $path) {
		if (parent::register($category, $path)) {
			$this->addLocaleData();

			if ($this->getEnabled()) {
				import('file.FileManager');
				$conference = Request::getConference();
				$conferenceId = $conference->getConferenceId();
				$locale = Locale::getLocale();
				$localeFiles = Locale::getLocaleFiles($locale); 
				$publicFilesDir = Config::getVar('files', 'public_files_dir');
				$customLocaleDir = $publicFilesDir . DIRECTORY_SEPARATOR . 'conferences' . DIRECTORY_SEPARATOR . $conferenceId . DIRECTORY_SEPARATOR . CUSTOM_LOCALE_DIR;

				foreach ($localeFiles as $localeFile) {
					$localeFilename = $localeFile->getFilename();
					$customLocalePath = $customLocaleDir . DIRECTORY_SEPARATOR . $locale . DIRECTORY_SEPARATOR . $localeFilename;
					if (FileManager::fileExists($customLocalePath)) {
						Locale::registerLocaleFile($locale, $customLocalePath, true);
					}
				}
			}

			return true;
		}
		return false;
	}

	function getName() {
		return 'CustomLocalePlugin';
	}

	function getDisplayName() {
		return Locale::translate('plugins.generic.customLocale.name');
	}

	function getDescription() {
		return Locale::translate('plugins.generic.customLocale.description');
	}

	function getEnabled() {
		$conference = &Request::getConference();
		if (!$conference) return false;
		return $this->getSetting($conference->getConferenceId(), 0, 'enabled');
	}

	function setEnabled($enabled) {
		$conference = &Request::getConference();
		if ($conference) {
			$this->updateSetting($conference->getConferenceId(), 0, 'enabled', $enabled ? true : false);
			return true;
		}
		return false;
	}

	function smartyPluginUrl($params, &$smarty) {
		$path = array($this->getCategory(), $this->getName());
		if (is_array($params['path'])) {
			$params['path'] = array_merge($path, $params['path']);
		} elseif (!empty($params['path'])) {
			$params['path'] = array_merge($path, array($params['path']));
		} else {
			$params['path'] = $path;
		}

		if (!empty($params['key'])) {
			$params['path'] = array_merge($params['path'], array($params['key']));
			unset($params['key']);
		}

		if (!empty($params['file'])) {
			$params['path'] = array_merge($params['path'], array($params['file']));
			unset($params['file']);
		}

		return $smarty->smartyUrl($params, $smarty);
	}

	function getManagementVerbs() {
		$isEnabled = $this->getEnabled();

		$verbs[] = array(
			($isEnabled?'disable':'enable'),
			Locale::translate($isEnabled?'manager.plugins.disable':'manager.plugins.enable')
		);

		if ($isEnabled) $verbs[] = array(
			'index',
			Locale::translate('plugins.generic.customLocale.customize')
		);

		return $verbs;
	}

	function manage($verb, $args) {
		$this->import('CustomLocaleHandler');
		$returner = true;

		switch ($verb) {
			case 'enable':
				$this->setEnabled(true);
				$returner = false;
				break;
			case 'disable':
				$this->setEnabled(false);
				$returner = false;
				break;
			case 'index':
				if ($this->getEnabled()) CustomLocaleHandler::index();
				break;
			case 'edit':
				if ($this->getEnabled()) CustomLocaleHandler::edit($args);
				break;
			case 'saveLocaleChanges':
				if ($this->getEnabled()) CustomLocaleHandler::saveLocaleChanges($args);
				break;
			case 'editLocaleFile':
				if ($this->getEnabled()) CustomLocaleHandler::editLocaleFile($args);
				break;
			case 'saveLocaleFile':
				if ($this->getEnabled()) CustomLocaleHandler::saveLocaleFile($args);
				break;
			default:
				if ($this->getEnabled()) CustomLocaleHandler::index();
				
		}
		return $returner;
	}
}

?>
