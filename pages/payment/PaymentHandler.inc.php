<?php

/**
 * @file PaymentHandler.inc.php
 *
 * Copyright (c) 2000-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class PaymentHandler
 * @ingroup pages_payment
 *
 * @brief Handle requests for payment functions.
 */

//$Id: PaymentHandler.inc.php,v 1.4 2008/07/02 16:55:24 asmecher Exp $

class PaymentHandler extends Handler {

	/**
	 * Display scheduled conference view page.
	 */
	function plugin($args) {
		list($conference, $schedConf) = PaymentHandler::validate();
		$paymentMethodPlugins =& PluginRegistry::loadCategory('paymethod');
		$paymentMethodPluginName = array_shift($args);
		if (empty($paymentMethodPluginName) || !isset($paymentMethodPlugins[$paymentMethodPluginName])) {
			Request::redirect(null, null, 'index');
		}

		$paymentMethodPlugin =& $paymentMethodPlugins[$paymentMethodPluginName];
		if (!$paymentMethodPlugin->isConfigured()) {
			Request::redirect(null, null, 'index');
		}

		$paymentMethodPlugin->handle($args);
	}

	function validate() {
		$conference =& Request::getConference();
		$schedConf =& Request::getSchedConf();

		if (!$conference || !$schedConf) {
			Request::redirect(null, 'index');
		}

		return array(&$conference, &$schedConf);
	}
}

?>
