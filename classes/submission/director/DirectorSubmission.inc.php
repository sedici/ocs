<?php

/**
 * @file DirectorSubmission.inc.php
 *
 * Copyright (c) 2000-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class DirectorSubmission
 * @ingroup submission
 * @see DirectorSubmissionDAO
 *
 * @brief DirectorSubmission class.
 */

//$Id: DirectorSubmission.inc.php,v 1.5 2008/07/02 16:55:23 asmecher Exp $

import('submission.trackDirector.TrackDirectorSubmission');

class DirectorSubmission extends TrackDirectorSubmission {

	/**
	 * Constructor.
	 */
	function DirectorSubmission() {
		parent::TrackDirectorSubmission();
	}
}

?>
