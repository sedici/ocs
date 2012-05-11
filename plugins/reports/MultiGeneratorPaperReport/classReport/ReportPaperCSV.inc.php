<?php
/*
 * Created on 26/04/2012
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
import ('plugins.reports.MultiGeneratorPaperReport.classReport.ReportPaperHandler');
import ('plugins.reports.MultiGeneratorPaperReport.classReport.PaperDecorator');

class ReportPaperCSV extends ReportPaperHandler{
	var $fpointer= null;
	
	function __construct($aCollection){
		parent::__construct($aCollection);
		$this->beginReport();
	}
	protected function beginReport(){
		$this->fpointer=fopen('php://output', 'wt');	
		header('content-type: text/comma-separated-values; charset=utf-8');
		header('content-disposition: attachment; filename=report.csv');
	}
	
	public function endReport(){
		fclose($this->fpointer);
	} 
	public function dataProcess(){
		Locale::requireComponents(array(LOCALE_COMPONENT_OCS_DIRECTOR));
		import('paper.Paper'); // Bring in getStatusMap function
		$statusMap =& Paper::getStatusMap();
		$papersIterator=& $this->getPapersIterator();
		while ($row =& $papersIterator->next()) {
				$columns=null;
				$locale=Locale::getLocale();
				$this->putHeaders($columns);
				$paper= new PaperDecorator($row);
				$columns['title']= utf8_encode($paper->getTitle($locale));	
				$columns['abstract']=utf8_encode($paper->getAbstract($locale));
				$this->putAuthors($paper->getAuthors(),$columns);		
			unset($row);
			unset($columns);
		}
		
	}
	
	//@param array to put in csv
	private function putHeaders(&$columns){
		$columns = array(
			'title' =>Locale::translate('paper.title'),
			'abstract' => Locale::translate('paper.abstract'),
			'fname'  => Locale::translate('user.firstName') . " (" . Locale::translate('user.role.author') . " $a)",
			'mname'  => Locale::translate('user.middleName') . " (" . Locale::translate('user.role.author') . " $a)",
			'lname'  => Locale::translate('user.lastName') . " (" . Locale::translate('user.role.author') . " $a)",
			'affiliation'  => Locale::translate('user.affiliation') . " (" . Locale::translate('user.role.author') . " $a)",
			'email'  => Locale::translate('user.email') . " (" . Locale::translate('user.role.author') . " $a)",
			);
		String::fputcsv($this->fpointer, array_values($columns));
		
	}
	
	//@param array of authors
	//@param array to put in csv
	private function putAuthors($info,$columns){
		 //put FirstAuthor
		 $columns['fname']=$info[0]->getFirstName();
		 $columns['mname']=$info[0]->getMiddleName(); 
		 $columns['lname']=$info[0]->getLastName();
		 $columns['affiliation']=html_entity_decode(strip_tags($info[0]->getAffiliation()), ENT_QUOTES);
		 $columns['email']=$info[0]->getEmail();
		 String::fputcsv($this->fpointer, array_values($columns));
		 //reset columns
		 $columns['title']='';	
		 $columns['abstract']='';
		 //put others
		 for($i=1;$i<count($info);$i++){
		 	$columns['fname']=$info[$i]->getFirstName();
			$columns['mname']=$info[$i]->getMiddleName();
			$columns['lname']=$info[$i]->getLastName();
			$columns['affiliation']=html_entity_decode(strip_tags($info[$i]->getAffiliation()), ENT_QUOTES);
			$columns['email']=$info[$i]->getEmail();
			String::fputcsv($this->fpointer, array_values($columns));
		 }
		
	}
	
	
	
	}
	












?>
