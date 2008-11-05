<?php

/**
 * @file FormValidatorUrl.inc.php
 *
 * Copyright (c) 2000-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class FormValidatorUrl
 * @ingroup form_validation
 *
 * @brief Form validation check for URLs.
 */

//$Id: FormValidatorUrl.inc.php,v 1.3 2008/07/02 16:55:22 asmecher Exp $

import('form.validation.FormValidatorRegExp');

class FormValidatorUrl extends FormValidatorRegExp {
	function getRegexp() {
		return '/^(http|https|ftp):\/\/(([A-Z0-9][A-Z0-9_-]*)(\.[A-Z0-9][A-Z0-9_-]*)+)(:(\d+))?(\/.)?/i';
	}

	/**
	 * Constructor.
	 * @see FormValidatorRegExp::FormValidatorRegExp()
	 */
	function FormValidatorUrl(&$form, $field, $type, $message) {
		parent::FormValidatorRegExp($form, $field, $type, $message, FormValidatorUrl::getRegexp());
	}
}

?>
