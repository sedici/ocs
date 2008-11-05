<?php

/**
 * @file index.php
 *
 * Copyright (c) 2003-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Wrapper for Google Analytics plugin.
 *
 * @package plugins.generic.googleAnalytics
 *
 * $Id: index.php,v 1.1 2008/06/27 20:32:01 michael Exp $
 */

require_once('GoogleAnalyticsPlugin.inc.php');

return new GoogleAnalyticsPlugin();

?>
