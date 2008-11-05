<?php

/**
 * @file QueuedPayment.inc.php
 *
 * Copyright (c) 2000-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class QueuedPayment
 * @ingroup payment
 * @see QueuedPaymentDAO
 *
 * @brief Queued (unfulfilled) payment data structure
 */

//$Id: QueuedPayment.inc.php,v 1.5 2008/07/02 16:55:23 asmecher Exp $

class QueuedPayment {
	var $amount;

	var $currencyCode;

	var $userId;

	var $assocId;

	function QueuedPayment($amount, $currencyCode, $userId = null, $assocId = null) {
		$this->amount = $amount;
		$this->currencyCode = $currencyCode;
		$this->userId = $userId;
		$this->assocId = $assocId;
	}

	function setAmount($amount) {
		$this->amount = $amount;
	}

	function getAmount() {
		return $this->amount;
	}

	function setCurrencyCode($currencyCode) {
		$this->currencyCode = $currencyCode;
	}

	function getCurrencyCode() {
		return $this->currencyCode;
	}

	function getDescription() {
		fatalError('ABSTRACT METHOD');
	}

	function setUserId($userId) {
		$this->userId = $userId;
	}

	function getUserId() {
		return $this->userId;
	}

	function setAssocId($assocId) {
		$this->assocId = $assocId;
	}

	function getAssocId() {
		return $this->assocId;
	}
}

?>
