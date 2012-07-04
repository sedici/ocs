<?php

/**
 * @file MultiPaperReportPlugin.inc.php
 *
 * Copyright (c) 2000-2011 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 * 
 * @class ReportePaper
 * @ingroup plugins_reports_paper
 * @see PaperReporteDAO
 *
 * @brief Paper report plugin
 */

//$Id$

import('classes.plugins.ReportPlugin');
import ('plugins.reports.MultiGeneratorPaperReport.ReportClass.PaperReportCSV');
import ('plugins.reports.MultiGeneratorPaperReport.ReportClass.PaperReportHTML');
import ('plugins.reports.MultiGeneratorPaperReport.ReportClass.PaperReportDOC');

class MultiPaperReportPlugin extends ReportPlugin {
	/**
	 * Called as a plugin is registered to the registry
	 * @param $category String Name of category plugin was registered to
	 * @return boolean True if plugin initialized successfully; if false,
	 * 	the plugin will not be registered.
	 */
	function register($category, $path) {
		$success = parent::register($category, $path);
		if ($success) {
			$this->import('ReportClass.MultiPaperReportDAO');
			$PaperReportDAO = new MultiPaperReportDAO();
			DAORegistry::registerDAO('MultiPaperReportDAO', $PaperReportDAO);
		}
		$this->addLocaleData();
		return $success;
	}

	/**
	 * Get the name of this plugin. The name must be unique within
	 * its category.
	 * @return String name of plugin
	 */
	function getName() {
		return 'MultiPaperReport';
	}

	function getDisplayName() {
		return Locale::translate('plugins.reports.MultiGeneratorPaperReport.displayName');
	}

	function getDescription() {
		return Locale::translate('plugins.reports.MultiGeneratorPaperReport.description');
	}

	function display(&$args) {
		$conference =& Request::getConference();
		$schedConf =& Request::getSchedConf();
		Locale::requireComponents(array(LOCALE_COMPONENT_APPLICATION_COMMON, LOCALE_COMPONENT_PKP_SUBMISSION, LOCALE_COMPONENT_PKP_USER, LOCALE_COMPONENT_OCS_MANAGER));
		
		$this->import('PaperFormSettings');
					$form = new PaperFormSettings($this, $conference->getId());
					if (Request::getUserVar('GenerateReport')){
						$ReportHandlerDAO =& DAORegistry::getDAO('MultiPaperReportDAO');
						$iterator =& $ReportHandlerDAO->getPaperReport(
							$conference->getId(),
							$schedConf->getId()
						);
						$form->readInputData();
						if ($form->validate()) {
							$form->execute();
							$custom_Class= $form->getData('reportClass');
							if(class_exists($custom_Class)){
							$Report= new $custom_Class($iterator, $this);	
							$Report->makeReport();
							Request::redirect(null, null, 'manager', 'plugin');
							}else{
								echo Locale::translate('plugins.reports.MultiGeneratorPaperReport.classNotFound');
								$form->display();
								}
						} else {
						    $this->setBreadCrumbs(true);
						    $form->makeOptions();
							$form->display();
						}
					}else{
						$this->setBreadCrumbs(true);
						$form->initData();
						$form->display();
					}
		}

	
}

?>
