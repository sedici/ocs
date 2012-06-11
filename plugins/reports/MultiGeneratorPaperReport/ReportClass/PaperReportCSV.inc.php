<?php
/*
 * Created on 26/04/2012
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
import ('plugins.reports.MultiGeneratorPaperReport.ReportClass.PaperReportHandler');
import ('plugins.reports.MultiGeneratorPaperReport.ReportClass.PaperDecorator');

class PaperReportCSV extends PaperReportHandler{
	var $fpointer= null;
	var $maxAuthors=-1;
	var $data= array();
	var $oldTrackId= -1;
	
	function __construct($aiterator,$plugin){
		parent::__construct($aiterator,$plugin);
		$this->beginReport();
	}
	protected function beginReport(){
		$this->fpointer=fopen('php://output', 'wt');	
		header('content-type: text/comma-separated-values; charset=utf-8');
		header('content-disposition: attachment; filename=report.csv');
	}
	
	public function endReport(){
		$headers=array();
		$this->putHeaders($headers);
		String::fputcsv($this->fpointer,array_values($headers));
		for($i=0;$i<count($this->data);$i++){
		String::fputcsv($this->fpointer,array_values($this->data[$i]));
		}
		fclose($this->fpointer);
		
		
	} 
	//@param array to put in csv
	private function putHeaders(&$columns){
		$columns = array(
			'track' =>Locale::translate('track.title'),
			'title' =>Locale::translate('paper.title'),
			'abstract' => Locale::translate('paper.abstract'),
		);
		for($i=0;$i<=$this->maxAuthors;$i++){
		$columns=array_merge($columns,array(
			'fname'.$i  => Locale::translate('user.firstName') . " (" . Locale::translate('user.role.author') . " $i)",
			'mname'.$i  => Locale::translate('user.middleName') . " (" . Locale::translate('user.role.author') . " $i)",
			'lname'.$i  => Locale::translate('user.lastName') . " (" . Locale::translate('user.role.author') . " $i)",
			'affiliation'.$i  => Locale::translate('user.affiliation') . " (" . Locale::translate('user.role.author') . " $i)",
			'email'.$i  => Locale::translate('user.email') . " (" . Locale::translate('user.role.author') . " $i)",
			));
		}
	}
	
	//@param array of authors
	//@param array to put in csv
	private function putAuthors($info,&$columns){
		for($i=0;$i<count($info);$i++){
		 	$columns['fname'.$i]=$info[$i]->getFirstName();
			$columns['mname'.$i]=$info[$i]->getMiddleName());
			$columns['lname'.$i]=$info[$i]->getLastName();
			$columns['affiliation'.$i]=html_entity_decode(strip_tags($info[$i]->getAffiliation()), ENT_QUOTES,"UTF-8");
			$columns['email'.$i]=$info[$i]->getEmail();
		 }
		
	}
	/** Initialize the output to generate an specific output with the paper information.
	 * @return array
	 */
	function newOutput(){
		$output= array();
		return $output;	
	}
	/** Finalize the output to put in the report file.
	 * @param output
	 */
	function endOutput($output){
		return $output;
	}
	
	/** Add an specific field to the output
	 * @param output string
	 * @param field string
	 * @return string
	 */
	function addField(&$output,$key,$field){
		return $output[$key]=$field;
	}
	
	/** Create an specific record to generate the report output.
	 * @params paper object paperDecorator
	 * @params locale specific locale
	 */ 
	function processRecord(&$paper,&$locale){
		$output= $this->newOutput();
		$this->addField($output,'track',$paper->getTrackTitle());
	    $this->addField($output,'title',$paper->getTitle($locale));
	    $this->addField($output,'abstract',$paper->getAbstract($locale));
		$this->maxAuthors=count($paper->getAuthors($locale))>$this->maxAuthors?count($paper->getAuthors($locale)):$this->maxAuthors;
	    $this->putAuthors($paper->getAuthors($locale),$output);
		$output= $this->endOutput($output);
		return $output;
	}
	
	/**Append the record to the export-structure
	 * @params record 
	 */
	
	function appendRecord($record){
		$this->data[]=$record;		
	}
	
	
	
	}
	












?>
