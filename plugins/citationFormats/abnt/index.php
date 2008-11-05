<?php

/**
 * @defgroup plugins_citationFormats_abnt
 */
 
/**
 * @file index.php
 *
 * Copyright (c) 2000-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief Wrapper for ABNT citation plugin.
 *
 * @ingroup plugins_citationFormats_abnt
 */

//$Id: index.php,v 1.6 2008/07/02 16:55:25 asmecher Exp $

require_once('AbntCitationPlugin.inc.php');

return new AbntCitationPlugin();

?>
