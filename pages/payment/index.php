<?php

/**
 * @defgroup pages_payment
 */
 
/**
 * @file index.php
 *
 * Copyright (c) 2000-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief Handle requests for interactions between the payment system and external
 * sites/systems.
 *
 * @ingroup pages_payment
 */

//$Id: index.php,v 1.4 2008/07/02 16:55:24 asmecher Exp $

define('HANDLER_CLASS', 'PaymentHandler');

import('pages.payment.PaymentHandler');

?>
