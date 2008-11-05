<?php

/**
 * @file FormValidatorEmail.inc.php
 *
 * Copyright (c) 2000-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class FormValidatorEmail
 * @ingroup form_validation
 *
 * @brief Form validation check for email addresses.
 */

//$Id: FormValidatorLocaleEmail.inc.php,v 1.3 2008/07/02 16:55:22 asmecher Exp $

import('form.validation.FormValidatorRegExp');

class FormValidatorLocaleEmail extends FormValidatorEmail {
	/**
	 * Validate against a localized email field.
	 * @return boolean
	 */
	function isValid() {
		if ($this->isEmptyAndOptional()) return true;
		$value = $this->form->getData($this->field);
		$primaryLocale = Locale::getPrimaryLocale();
		return is_array($value) && !empty($value[$primaryLocale]) && String::regexp_match($this->regExp, $value[$primaryLocale]);
	}

	function getMessage() {
		$primaryLocale = Locale::getPrimaryLocale();
		$allLocales = Locale::getAllLocales();
		return parent::getMessage() . ' (' . $allLocales[$primaryLocale] . ')';
	}
}

?>
