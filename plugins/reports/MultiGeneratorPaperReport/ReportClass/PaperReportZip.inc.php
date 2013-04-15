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
import ('classes.paper.PaperFile');
import('classes.paper.PaperGalleyDAO');
import('classes.paper.PaperGalley');

 class PaperReportZip extends PaperReportHandler{
 	var $plugin= null;
	var $zip= null; //zipfile
	var $res= null; //res of zip create function 
	var $nombreArchivo;
	function __construct($aIterator, $plugin){
		parent::__construct($aIterator, $plugin);
		$this->plugin=& $plugin;
		$this->beginReport();
	}
	
	protected function beginReport(){	
		$this->nombreArchivo = tempnam(sys_get_temp_dir(), "zip");
		$this->zip= new ZipArchive;
		$this->res = $this->zip->open($this->nombreArchivo, ZipArchive::OVERWRITE);
	}
	
	public function endReport(){
		header('content-disposition: attachment; filename=report.zip');
		header("Content-type: application/force-download");
		header("Content-Transfer-Encoding: Binary");
		header("Content-Type: application/zip"); 
		$this->zip->close();
		readfile($this->nombreArchivo);
		unlink($this->nombreArchivo);
	}
	
	
	/**
	 * Get the Authors information for a specific paper and return it with the appropriate format.
	 * @param array $info
	 * @return string
	 */
	 public function formatAuthors(& $info) {
		$returner=array();
	for($i=0;$i<count($info);$i++){
			$firstName=$info[$i]->getFirstName();
			$middleName=$info[$i]->getMiddleName();
			$lastName=$info[$i]->getLastName();
			$affiliation=$info[$i]->getAffiliation();
			$email=$info[$i]->getEmail();
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
		$title=utf8_encode($paper->getTitle($locale));
		$paper->setTitle($title,$locale );
		$authors= $paper->getAuthors(); //TODO:use authors to order the zip
		//Get all the paper galleys for this paper
		$galleyDAO= new PaperGalleyDAO();
		$galleys = $galleyDAO->getGalleysByPaper($paper->getId());
		$returner= array();
		$returner['paper']=$paper;
		if (!is_null($galleys)) {
			foreach($galleys as $galley){
				if($galley->isPdfGalley()){//add only the pdf galley to the zip
					$returner['galley']=$galley;
					}
					}
			}
		return $returner;
	}
	
	/**Append the record to the file
	 * @params record 
	 */
 function appendRecord($record){
 	$paper=$record['paper'];
 	if(array_key_exists('galley',$record)){ 
 		$galley=$record['galley'];
	 	import('file.PaperFileManager');
	 	$paperFileManager = new PaperFileManager($paper->getId());
	 	$file=&$paperFileManager->getFile($galley->getFileId());
	 	//set the filename
	 	$filename=$file->getFileName();
	 	//set the filepath
	 	$schedConfId = $paper->getSchedConfId();
	 	$schedConfDao =& DAORegistry::getDAO('SchedConfDAO');
	 	$schedConf =& $schedConfDao->getSchedConf($schedConfId);
	 	$filesDir = Config::getVar('files', 'files_dir') . '/conferences/' . $schedConf->getConferenceId() . '/schedConfs/' . $schedConfId .
		 	'/papers/' . $paper->getId() . '/';
	 	$filepath=$filesDir . $file->getType() . '/' . $filename;
	 	//add file to the zip
	 	if($this->res){
		 	if(file_exists($filepath)){
		 		$Humanfilename=$this->setPdfFilename($paper->getTitle(),$paper->getId());
		 		$this->zip->addFile($filepath,$Humanfilename);
		 	}	
	 	}
 	} 
 }
 
 private function setPdfFilename($oldtitle,$id){
 	 $oldtitle=  preg_replace('/<[^>]*>/', '', $oldtitle);
 	 for ($i=0;$i<strlen($oldtitle);$i++){
	 	 if((ord($oldtitle[$i])>=65 && ord($oldtitle[$i])<=90) || (ord($oldtitle[$i])<=122 && ord($oldtitle[$i])>=97))
		 	 $title=$title.$oldtitle[$i];	
 	 }//char to char handle for special chars
	 $title = str_replace(' ', '_', $title).'.pdf';//make the pdfname human-readable
	 //handle special-chars
//	 $title = str_replace('"','',$title);
//	 $title = str_replace('“',"",$title);
//	 $title = str_replace(array('á','à','â','ã','ª','ä'),'a',$title);
//	 $title = str_replace(array('Á','À','Â','Ã','Ä'),'A',$title);
//	 $title = str_replace(array('Í','Ì','Î','Ï'),'I',$title);
//	 $title = str_replace(array('í','ì','î','ï'),'i',$title);
//	 $title = str_replace(array('é','è','ê','ë'),'e',$title);
//	 $title = str_replace(array('É','È','Ê','Ë'),'E',$title);
//	 $title = str_replace(array('ó','ò','ô','õ','ö','º'),'o',$title);
//	 $title = str_replace(array('Ó','Ò','Ô','Õ','Ö'),'O',$title);
//	 $title = str_replace(array('ú','ù','û','ü'),'u',$title);
//	 $title = str_replace(array('Ú','Ù','Û','Ü'),'U',$title);
//	 $title = str_replace(array('[','^','´','`','¨','~',']','?','¿'),"",$title);
//	 $title = str_replace('ç','c',$title);
//	 $title = str_replace('Ç','C',$title);
//	 $title = str_replace('ñ','n',$title);
//	 $title = str_replace('Ñ','N',$title);
//	 $title = str_replace('Ý','Y',$title);
//	 $title = str_replace('ý','y',$title);
	 $title= utf8_decode($title); //use ISO to avoid php bug
	 return $title;
 }
 	
 }







?>
