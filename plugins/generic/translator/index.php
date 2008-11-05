<?php 

/**
 * @defgroup plugins_generic_translator
 */
 
/**
 * @file index.php
 *
 * Copyright (c) 2000-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief Wrapper for translation maintenance plugin.
 *
 * @ingroup plugins_generic_translator
 */

//$Id: index.php,v 1.3 2008/07/02 16:55:25 asmecher Exp $

require_once('TranslatorPlugin.inc.php');

return new TranslatorPlugin(); 

?> 
