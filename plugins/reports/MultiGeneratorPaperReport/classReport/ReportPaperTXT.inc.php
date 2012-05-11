<?php
/*
 * Created on 27/04/2012
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
import ('plugins.reports.MultiGeneratorPaperReport.classReport.ReportPaperHandler');
import('plugins.reports.MultiGeneratorPaperReport.classReport.PaperDecorator');
		
class ReportPaperTXT extends ReportPaperHandler{
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
	
	public function dataProcess(){
		$papersIterator=$this->getPapersIterator();
		while($item =& $papersIterator->next()){ 
			//make the output to txt
			$paper= new PaperDecorator($item);
			$locale=Locale::getLocale();
			$title=$paper->getTitle($locale);
			$abstract=$paper->getAbstract($locale);
			$info= $paper->getAuthors($locale);
			$authors= $this->formatAuthors($info);
			$endLine= "\r\n";
			$separator='-------------------------------------------------------------';
			$body= $title.$endLine.$endLine.$abstract.$endLine.$endLine.$authors.$endLine.$separator.$endLine;
			fwrite($this->fpointer,$body);
			unset($paper);
		}
		
	}
	
	
	private function formatAuthors($info) {
		$returner='';
	for($i=0;$i<count($info);$i++){
			$completedName=$info[$i]->getFirstName().' '.$info[$i]->getMiddleName().' '.$info[$i]->getLastName();
			$affiliation=html_entity_decode(strip_tags($info[$i]->getAffiliation()), ENT_QUOTES);
			$email=$info[$i]->getEmail();
			$returner=$returner."\r\n".$completedName."\r\n".$affiliation."\r\n".$email."\r\n";
		}
		return $returner;
	}
		
	}




?>
