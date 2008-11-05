<?php

/**
 * @file GatewayHandler.inc.php
 *
 * Copyright (c) 2003-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @package pages.gateway
 * @class GatewayHandler
 *
 * Handle external gateway requests. 
 *
 * $Id: GatewayHandler.inc.php,v 1.1 2008/06/27 16:27:42 michael Exp $
 */

class GatewayHandler extends Handler {

	function index() {
		Request::redirect(null, 'index');
	}

	/**
	 * Handle requests for gateway plugins.
	 */
	function plugin($args) {
		parent::validate();
		$pluginName = array_shift($args);

		$plugins =& PluginRegistry::loadCategory('gateways');
		if (isset($pluginName) && isset($plugins[$pluginName])) {
			$plugin =& $plugins[$pluginName];
			if (!$plugin->fetch($args)) {
				Request::redirect(null, 'index');
			}
		}
		else Request::redirect(null, 'index');
	}
}

?>
