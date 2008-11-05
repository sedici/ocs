<?php

/**
 * @defgroup plugins_themes_uncommon
 */
 
/**
 * @file index.php
 *
 * Copyright (c) 2000-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief Wrapper for "uncommon" theme plugin.
 *
 * @ingroup plugins_themes_uncommon
 */

//$Id: index.php,v 1.6 2008/07/02 16:55:26 asmecher Exp $

require_once('UncommonThemePlugin.inc.php');

return new UncommonThemePlugin();

?>
