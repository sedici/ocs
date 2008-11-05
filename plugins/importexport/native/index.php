<?php

/**
 * @defgroup plugins_importexport_native
 */
 
/**
 * @file index.php
 *
 * Copyright (c) 2000-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief Wrapper for native XML import/export plugin.
 *
 * @ingroup plugins_importexport_native
 */

//$Id: index.php,v 1.2 2008/07/02 16:55:25 asmecher Exp $

require_once('NativeImportExportPlugin.inc.php');

return new NativeImportExportPlugin();

?>
