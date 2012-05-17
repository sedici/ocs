<?php
/*
 * Created on 26/04/2012
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 * Clase que se encarga de realizar reportes sobre papers de cada conferencia 
 **
 *@params 
 * $unaColeccion = array(iteradores)
 */


abstract class PaperReportHandler{
	private $papersIterator;
	public function __construct($aIterator){	
		$this->setPapersIterator($aIterator);
		} 
		public function setPapersIterator($anObject){
		$this->papersIterator=$anObject;
		
	}
		public function getPapersIterator(){
		return $this->papersIterator;
	}	
	protected abstract function beginReport();
	public abstract function endReport();
	
	protected function dataProcess(){
		$papersIterator=$this->getPapersIterator();
		$locale=Locale::getLocale();
		while($item =& $papersIterator->next()){ 
			//make the output 
			$paper= new PaperDecorator($item);
			$record=null;
			$record=$this->processRecord($paper,$locale); 
			$this->appendRecord($record);
			unset($paper);
		}
	}
	
	public final function 	makeReport(){
		$this->beginReport();
		$this->dataProcess();
		$this->endReport();
		
	}
	
	
	
	
	
}







?>
