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
	var $tempFileName = null; //tempfile name
	function __construct($aIterator, $plugin){
		parent::__construct($aIterator, $plugin);
		$this->plugin=& $plugin;
		$this->beginReport();
	}
	/**Start the report getting and opening the zipfile
	 * 
	 */
	protected function beginReport(){	
		$this->tempFileName = tempnam(sys_get_temp_dir(), "zip");
		$this->zip= new ZipArchive;
		$this->res = $this->zip->open($this->tempFileName, ZipArchive::OVERWRITE);
	}
	
	/**Close the report and send the specific headers
	 * 
	 */
	public function endReport(){
		header('content-disposition: attachment; filename=report.zip');
		header("Content-type: application/force-download");
		header("Content-Transfer-Encoding: Binary");
		header("Content-Type: application/zip"); 
		$this->zip->close();
		readfile($this->tempFileName);
		unlink($this->tempFileName);
	}
	
	
	
/** Create an specific record to generate the report output.
	 * @params paper object paperDecorator
	 * @params locale specific locale
	 */ 
	function processRecord(&$paper,$locale){
		$title=utf8_encode($paper->getTitle($locale));
		$paper->setTitle($title,$locale );
		//$authors= $paper->getAuthors(); //TODO:use authors to order the zip
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
		 		$Humanfilename=$this->setPdfFilename($paper->getTitle());
		 		$this->zip->addFile($filepath,$Humanfilename); //put the pdf file with a human readable name
		 	}	
	 	}
 	} 
 }
 
 /**Set the name to the pdf in an human-readable way and do a char to char check, to avoid the special chars
  *@param string $oldtitle
  *@return string an human readable title 
  */
 private function setPdfFilename($oldtitle){
 	 $oldtitle=  preg_replace('/<[^>]*>/', '', $oldtitle);
 	 for ($i=0;$i<strlen($oldtitle);$i++){
	 	 if((ord($oldtitle[$i])>=65 && ord($oldtitle[$i])<=90) || (ord($oldtitle[$i])<=122 && ord($oldtitle[$i])>=97))
		 	 $title=$title.$oldtitle[$i];	
 	 }//char to char handle for special chars
	 $title = str_replace(' ', '_', $title).'.pdf';//make the pdfname human-readable
	 $title= utf8_decode($title); //use ISO to avoid php bug
	 return $title;
 }
 	
 }







?>
