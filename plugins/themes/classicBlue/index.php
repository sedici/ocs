<?php

/**
 * @defgroup plugins_themes_classicBlue
 */
 
/**
 * @file index.php
 *
 * Copyright (c) 2000-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief Wrapper for "classic blue" theme plugin.
 *
 * @ingroup plugins_themes_classicBlue
 */

//$Id: index.php,v 1.6 2008/07/02 16:55:25 asmecher Exp $

require_once('ClassicBlueThemePlugin.inc.php');

return new ClassicBlueThemePlugin();

?>
