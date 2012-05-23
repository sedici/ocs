<?php
/*
 * Created on 17/05/2012 by Agustin Terruzzi
 * 
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief Generate a Html report to be exported
 *
 * @ingroup plugins_reports_MultiGeneratorPaperReport_ReportClass
 * @params  a paperIterator
 */
 class PaperReportHTML extends PaperReportHandler{
 	var $fpointer= null;
	var $plugin= null;
	var $data= array();
	function __construct($aIterator, $plugin){
		parent::__construct($aIterator, $plugin);
		$this->plugin=& $plugin;
		$this->beginReport();
	}
	/*TODO
	 * Diferenciar los papers por seccion, a cada paper se le podria preguntar trackID y agrupar todos aquellos que posean los mismos ID,
	 * luego mostrar aquellas seccciones con su titulo y todos sus papers debajo.
	 */ 
	
	protected function beginReport(){
		$this->fpointer=fopen('php://output', 'wt');	
		header('content-type: text/html; charset=utf-8');
		header('content-disposition: attachment; filename=report.html');
	}
	
	public function endReport(){
		fclose($this->fpointer);
		$templateMgr =& TemplateManager::getManager();
		$templateMgr->assign_by_ref('paperIterator',& $this->data);
		$templateMgr->display($this->plugin->getTemplatePath().'htmlReport/htmlReport.tpl');
		
	}
	
	
	/**
	 * Get the Authors information for a specific paper and return it with the appropriate format.
	 * @param array
	 * @return string
	 */
	 function formatAuthors(& $info) {
		$returner=array();
	for($i=0;$i<count($info);$i++){
			$firstName=utf8_encode($info[$i]->getFirstName());
			$middleName=utf8_encode($info[$i]->getMiddleName());
			$lastName=utf8_encode($info[$i]->getLastName());
			$affiliation=utf8_encode($info[$i]->getAffiliation());
			$email=utf8_encode($info[$i]->getEmail());
			$info[$i]->setFirstName($firstName);
			$info[$i]->setMiddleName($middleName);
			$info[$i]->setLastName($lastName);
			$info[$i]->setAffiliation($affiliation);
			$info[$i]->setEmail($email);
		}
	}
	
	
	
	/** Create an specific record to generate the report output.
	 * @params paper object paperDecorator
	 * @params locale specific locale
	 */ 
	function processRecord(&$paper,$locale){
		$title= utf8_encode($paper->getTitle($locale));
		$Abstract= utf8_encode($paper->getAbstract($locale));
		$paper->setTitle($title,$locale );
		$paper->setAbstract($Abstract,$locale);
		$authors= $paper->getAuthors();
		$this->formatAuthors($authors);
		$paper->setAuthors($authors);
		return $paper;
	}
	
	/**Append the record to the file
	 * @params record 
	 */
	function appendRecord($record){
		$this->data[]=$record;
		//fwrite($this->fpointer,$record);FIXME= ¿File use not necessary?	
	}

 	
 	
 	
 }








?>
