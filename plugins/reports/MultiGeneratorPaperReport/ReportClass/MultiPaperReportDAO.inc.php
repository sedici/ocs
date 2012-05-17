<?php

/**
 * @file MultiPaperReportDAO.inc.php
 *
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 * 
 * @class ReportPaperDAO
 *
 * @return array
 *
 */

// $Id$


import('submission.common.Action');

class MultiPaperReportDAO extends DAO {
	/**
	 * Get the paper report data.
	 * @param $conferenceId int
	 * @param $schedConfId int
	 * @return array
	 */
	function getPaperReport($conferenceId, $schedConfId) {
		$primaryLocale = Locale::getPrimaryLocale();
		$locale = Locale::getLocale();
		$decisionsReturner = array();
		$paperDao =& DAORegistry::getDAO('PaperDAO');
		$papersIterator =& $paperDao->getPapersBySchedConfId($schedConfId);
		return $papersIterator;
	}
}

?>
