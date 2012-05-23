<?php

/**
 * @file MultiPaperReportDAO.inc.php
 *
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 * 
 * @class ReportPaperDAO
 *
 * @return iterator $returner
 *
 */

// $Id$


import('submission.common.Action');
import('paper.PaperDAO');

class MultiPaperReportDAO extends PaperDAO {
	/**
	 * Get the paper report data.
	 * @param $conferenceId int
	 * @param $schedConfId int
	 * @return iterator $paperIterator
	 */
	function getPaperReport($conferenceId, $schedConfId) {
		$primaryLocale = Locale::getPrimaryLocale();
		$locale = Locale::getLocale();
		$decisionsReturner = array();
		//$paperDao =& DAORegistry::getDAO('PaperDAO'); FIXME use getPaperBySchedConfIdOrderByTrack directly
		$papersIterator =& $this->getPapersBySchedConfIdOrderByTrack($schedConfId);
		return $papersIterator;
	}
	/**This function return all the papers of an specific conference, this papers are order by track
	 * @params schedConf
	 * @returns paperIterator $returner
	 */
	
	function &getPapersBySchedConfIdOrderByTrack($schedConfId) {
		$primaryLocale = Locale::getPrimaryLocale();
		$locale = Locale::getLocale();

		$params = array(
			'title',
			$primaryLocale,
			'title',
			$locale,
			'abbrev',
			$primaryLocale,
			'abbrev',
			$locale,
			$schedConfId
		);
		$papers = array();
		$result =& $this->retrieve(
			'SELECT	p.*,
				COALESCE(ttl.setting_value, ttpl.setting_value) AS track_title,
				COALESCE(tal.setting_value, tapl.setting_value) AS track_abbrev
			FROM	papers p
				LEFT JOIN tracks t ON t.track_id = p.track_id
				LEFT JOIN track_settings ttpl ON (t.track_id = ttpl.track_id AND ttpl.setting_name = ? AND ttpl.locale = ?)
				LEFT JOIN track_settings ttl ON (t.track_id = ttl.track_id AND ttl.setting_name = ? AND ttl.locale = ?)
				LEFT JOIN track_settings tapl ON (t.track_id = tapl.track_id AND tapl.setting_name = ? AND tapl.locale = ?)
				LEFT JOIN track_settings tal ON (t.track_id = tal.track_id AND tal.setting_name = ? AND tal.locale = ?)
				WHERE p.sched_conf_id = ? ORDER BY track_id',$params
				//.
		);

		$returner = new DAOResultFactory($result, $this, '_returnPaperFromRow');
		return $returner;
	}
}

?>
