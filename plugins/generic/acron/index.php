<?php

/**
 * @defgroup plugins_generic_acron
 */
 
/**
 * @file index.php
 *
 * Copyright (c) 2000-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief Wrapper for acron plugin
 *
 * @ingroup plugins_generic_acron
 */

//$Id: index.php,v 1.7 2008/07/02 16:55:25 asmecher Exp $

require_once('AcronPlugin.inc.php');

return new AcronPlugin();

?> 
