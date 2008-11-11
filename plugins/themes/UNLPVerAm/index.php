<?php

/**
 * @defgroup plugins_themes_UNLPVerAm
 */
 
/**
 * @file plugins/themes/UNLPVerAm/index.php
 *
 * Copyright (c) 2008 Gisele Jaquenod
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_themes_UNLPVerAm
 * @brief Wrapper for "ojs red" theme plugin.
 *
 */

// $Id: index.php,v 1.5 2008/07/01 01:16:14 asmecher Exp $


require_once('UNLPVerAmThemePlugin.inc.php');

return new UNLPVerAmThemePlugin();

?>
