<?php

/**
 * @defgroup plugins_citationFormats_nlm
 */
 
/**
 * @file index.php
 *
 * Copyright (c) 2000-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief Wrapper for NLM Meeting Abstract export plugin.
 *
 * @ingroup plugins_citationFormats_nlm
 */

//$Id: index.php,v 1.7 2008/07/02 16:55:25 asmecher Exp $

require_once('NLMExportPlugin.inc.php');

return new NLMExportPlugin();

?>
