<?php 

/**
 * @file index.php
 *
 * Copyright (c) 2003-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Wrapper for custom locale plugin. Plugin based on Translator plugin.
 *
 * @package plugins.generic.customLocale
 *
 * $Id: index.php,v 1.1 2008/06/27 12:09:48 michael Exp $
 */

require_once('CustomLocalePlugin.inc.php');

return new CustomLocalePlugin(); 

?> 
