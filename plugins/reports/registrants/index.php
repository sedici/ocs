<?php

/**
 * @defgroup plugins_reports_registrant
 */
 
/**
 * @file index.php
 *
 * Copyright (c) 2000-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief Wrapper for registrant report plugin.
 *
 * @ingroup plugins_reports_registrant
 */

//$Id: index.php,v 1.3 2008/07/02 16:55:25 asmecher Exp $

require_once('RegistrantReportPlugin.inc.php');

return new RegistrantReportPlugin();

?>
