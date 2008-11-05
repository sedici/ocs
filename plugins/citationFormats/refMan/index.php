<?php

/**
 * @defgroup plugins_citationFormats_refMan
 */
 
/**
 * @file index.php
 *
 * Copyright (c) 2000-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief Wrapper for ReferenceManager citation plugin.
 *
 * @ingroup plugins_citationFormats_refMan
 */

//$Id: index.php,v 1.6 2008/07/02 16:55:25 asmecher Exp $

require_once('RefManCitationPlugin.inc.php');

return new RefManCitationPlugin();

?>
