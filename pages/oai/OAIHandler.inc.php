<?php

/**
 * @file OAIHandler.inc.php
 *
 * Copyright (c) 2000-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class OAIHandler
 * @ingroup pages_oai
 *
 * @brief Handle OAI protocol requests. 
 */

//$Id: OAIHandler.inc.php,v 1.6 2008/07/02 16:55:24 asmecher Exp $

define('SESSION_DISABLE_INIT', 1); // FIXME?

import('oai.ocs.ConferenceOAI');

class OAIHandler extends Handler {

	function index() {
		OAIHandler::validate();

		$oai = &new ConferenceOAI(new OAIConfig(Request::getRequestUrl(), Config::getVar('oai', 'repository_id')));
		$oai->execute();
	}

	function validate() {
		// Site validation checks not applicable
		//parent::validate();

		if (!Config::getVar('oai', 'oai')) {
			Request::redirect(null, 'index');
		}
	}
}

?>
