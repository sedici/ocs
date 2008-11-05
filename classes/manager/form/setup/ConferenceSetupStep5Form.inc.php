<?php

/**
 * @file ConferenceSetupStep5Form.inc.php
 *
 * Copyright (c) 2000-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class ConferenceSetupStep5Form
 * @ingroup manager_form_setup
 *
 * @brief Form for Step 5 of conference setup.
 */

//$Id: ConferenceSetupStep5Form.inc.php,v 1.11 2008/07/02 16:55:22 asmecher Exp $

import("manager.form.setup.ConferenceSetupForm");

class ConferenceSetupStep5Form extends ConferenceSetupForm {
	/**
	 * Constructor.
	 */
	function ConferenceSetupStep5Form() {
		parent::ConferenceSetupForm(
			5,
			array(
				'paperEventLog' => 'bool',
				'paperEmailLog' => 'bool',
				'conferenceEventLog' => 'bool'
			)
		);
	}
}

?>
