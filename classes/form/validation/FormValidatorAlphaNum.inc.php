<?php

/**
 * @file FormValidatorAlphaNum.inc.php
 *
 * Copyright (c) 2000-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class FormValidatorAlphaNum
 * @ingroup form_validation
 *
 * @brief Form validation check for alphanumeric (plus interior dash/underscore) characters only.
 */

//$Id: FormValidatorAlphaNum.inc.php,v 1.6 2008/07/02 16:55:22 asmecher Exp $

import('form.validation.FormValidatorRegExp');

class FormValidatorAlphaNum extends FormValidatorRegExp {

	/**
	 * Constructor.
	 * @see FormValidatorRegExp::FormValidatorRegExp()
	 */
	function FormValidatorAlphaNum(&$form, $field, $type, $message) {
		parent::FormValidatorRegExp($form, $field, $type, $message,
			'/^[A-Z0-9]+([\-_][A-Z0-9]+)*$/i'
		);
	}

}

?>
