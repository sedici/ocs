<?php

/**
 * @defgroup plugins_reports_paper
 */
 
/**
 * @file index.php
 *
 * Copyright (c) 2000-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief Wrapper for paper report plugin.
 *
 * @ingroup plugins_reports_paper
 */

//$Id: index.php,v 1.2 2008/07/02 16:55:25 asmecher Exp $

require_once('PaperReportPlugin.inc.php');

return new PaperReportPlugin();

?>
