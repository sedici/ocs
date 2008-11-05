<?php

/**
 * @defgroup plugins_paymethod_paypal
 */
 
/**
 * @file index.php
 *
 * Copyright (c) 2006-2008 Gunther Eysenbach, Juan Pablo Alperin, MJ Suhonos
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief Wrapper for PayPal plugin.
 *
 * @ingroup plugins_paymethod_paypal
 */

//$Id: index.php,v 1.7 2008/07/02 16:55:25 asmecher Exp $

require_once('PayPalPlugin.inc.php');

return new PayPalPlugin();

?> 
