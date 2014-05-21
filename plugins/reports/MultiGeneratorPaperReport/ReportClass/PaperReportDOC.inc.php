<?php
/*
 * Created on 28/05/2012
 *
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief Generate a DOC report to be exported
 *
 * @ingroup plugins_reports_MultiGeneratorPaperReport_ReportClass
 * @params  a paperIterator
 */
class PaperReportDOC extends PaperReportHTML{
	function __construct($aIterator, $plugin){
		parent::__construct($aIterator, $plugin);
		$this->beginReport();
	}
	
	protected function beginReport(){
		$this->fpointer=fopen('php://output', 'wt');	
		header('content-type:application/vnd.ms-word; charset=utf-8');
		header('content-disposition: attachment; filename=report.doc');
	}
	/**
	 * Get the Authors information for a specific paper and return it with the appropriate format.
	 * @param array
	 * @return string
	 */
	public function formatAuthors(& $info) {
		$returner=array();
	for($i=0;$i<count($info);$i++){
			$firstName=($info[$i]->getFirstName());
			$middleName=($info[$i]->getMiddleName());
			$lastName=($info[$i]->getLastName());
			$affiliation=($info[$i]->getAffiliation());
			$email=($info[$i]->getEmail());
			$info[$i]->setFirstName($firstName);
			$info[$i]->setMiddleName($middleName);
			$info[$i]->setLastName($lastName);
			$info[$i]->setAffiliation($affiliation);
			$info[$i]->setEmail($email);
		}
	}
	/** Create an specific record to generate the report output.
	 * @params paperDecorator  $paper 
	 * @params specific locale $locale
	 */ 
	function processRecord(&$paper,$locale){
		$title= ($paper->getTitle($locale));
		$Abstract= ($paper->getAbstract($locale));
		$paper->setTitle($title,$locale );
		$paper->setAbstract($Abstract,$locale);
		$authors= $paper->getAuthors();
		$this->formatAuthors($authors);
		$paper->setAuthors($authors);
		return $paper;
	}
 	
 }

?>
