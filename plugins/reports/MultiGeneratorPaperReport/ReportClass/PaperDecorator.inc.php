<?php
/*
 * Created on 04/05/2012
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

class PaperDecorator {
	private $paperDec=null;
	function __construct ($paper){
		$this->paperDec=& $paper;
		
	}
	private function getPaperDec(){
		return $this->paperDec;
		
	}
	private function setPaperDec($anObject){
			$this->paperDec=$anObject;
	}
	public function getTitle($locale = "es_ES"){
		 $paper= $this->getPaperDec();
		 $info=$paper->getTitle($locale);
		 return $info;
	}
	public function getAbstract($locale = "es_ES"){
		 $info= $this->getPaperDec()->getAbstract($locale);
		 return html_entity_decode(strip_tags($info), ENT_QUOTES);
	}
	public function getAuthors($locale = "es_ES"){
		$info= $this->getPaperDec()->getAuthors();
		return $info;	
}
	public function setTitle($title,$locale = "es_ES"){
		 $paper= $this->getPaperDec();
		 $paper->setTitle($title,$locale);
	}
	public function setAbstract($abstract,$locale = "es_ES"){
		 $paper= $this->getPaperDec();
		 $paper->setAbstract($abstract,$locale);
	}
	public function setAuthors($authors, $locale = "es_ES"){
		$paper=$this->getPaperDec();
		$paper->setAuthors($authors);
	}

	public function getTrackTitle(){
		$info= utf8_encode($this->getPaperDec()->getTrackTitle());
		return $info;	
}
	public function getTrackId(){
		$info= $this->getPaperDec()->getTrackId();
		return $info;	
}
	public function getId(){
		$info=$this->getPaperDec()->getPaperId();
		return $info;
	}
	public function getSchedConfId(){
		$info = $this->getPaperDec()->getSchedConfId();
		return $info;	
	}


}

?>
