<?php

/**
 * @defgroup plugins_themes_UNLPAzul
 */
 
/**
 * @file plugins/themes/UNLPAzul/index.php
 *
 * Copyright (c) 2008 Gisele Jaquenod
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_themes_UNLPAzul
 * @brief Wrapper for "ojs red" theme plugin.
 *
 */

// $Id: index.php,v 1.5 2008/07/01 01:16:14 asmecher Exp $


require_once('UNLPAzulThemePlugin.inc.php');

return new UNLPAzulThemePlugin();

?>
