<?php
/*
 * Created on 27/04/2012
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
import ('plugins.reports.MultiGeneratorPaperReport.ReportClass.PaperReportHandler');
import('plugins.reports.MultiGeneratorPaperReport.ReportClass.PaperDecorator');
		
class PaperReportTXT extends PaperReportHandler{
	var $fpointer= null;
	
	function __construct($aIterator){
		parent::__construct($aIterator);
		$this->beginReport();
	}
	protected function beginReport(){
		$this->fpointer=fopen('php://output', 'wt');	
		header('content-type: text/plain; charset=utf-8');
		header('content-disposition: attachment; filename=report.txt');
	}
	
	public function endReport(){
		fclose($this->fpointer);
	}
	
	
	/**
	 * Get the Authors information for a specific paper and return it with the appropriate format.
	 * @param array
	 * @return string
	 */
	 function formatAuthors($info) {
		$returner='';
	for($i=0;$i<count($info);$i++){
			$completedName=$info[$i]->getFirstName().' '.$info[$i]->getMiddleName().' '.$info[$i]->getLastName();
			$affiliation=html_entity_decode(strip_tags($info[$i]->getAffiliation()), ENT_QUOTES);
			$email=$info[$i]->getEmail();
			$returner=$returner."\r\n".$completedName."\r\n".$affiliation."\r\n".$email."\r\n";
		}
		return $returner;
	}
	
	/** Initialize the output to generate an specific output with the paper information.
	 * @return string
	 */
	function newOutput(){
		return '';	
	}
	/** Finalize the output to put in the report file.
	 * @param output
	 */
	function endOutput($output){
		$separator= '----------------------------------------------------------------';
		$output= $output."\r\n".$separator."\r\n";
		return $output;
	}
	
	/** Add an specific field to the output
	 * @param output string
	 * @param field string
	 * @return string
	 */
	function addField($output,$field){
		return $output.$field."\r\n";
	}
	
	/** Create an specific record to generate the report output.
	 * @params paper object paperDecorator
	 * @params locale specific locale
	 */ 
	function processRecord(&$paper,$locale){
		$output= $this->newOutput();
		$output= $this->addField($output,$paper->getTitle($locale));
		$output= $this->addField($output,$paper->getAbstract($locale));
		$authors= $this->formatAuthors($paper->getAuthors($locale));
		$output= $this->addField($output,$authors);
		$output= $this->endOutput($output);
		return $output;
	}
	
	/**Append the record to the file
	 * @params record 
	 */
	
	function appendRecord($record){
		fwrite($this->fpointer,$record);		
	}
	
	
		
	}




?>
