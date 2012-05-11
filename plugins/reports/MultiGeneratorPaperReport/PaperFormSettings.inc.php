<?php
/*
 * Created on 07/05/2012
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
import('form.Form');
class PaperFormSettings extends Form {

	/** @var $conferenceId int */
	var $conferenceId;

	/** @var $plugin object */
	var $plugin;
	/** @var $xml to load setting*/
	var $xml;
	

	/**
	 * Constructor
	 * @param $plugin object
	 * @param $conferenceId int
	 */
	function __construct(&$plugin, $conferenceId) {
		$this->conferenceId = $conferenceId;
		$this->plugin =& $plugin;
		parent::Form($plugin->getTemplatePath().'PaperForm.tpl');
		$this->xml = $plugin->getPluginPath().'/clasesSetting.xml';
		//$this->addCheck(new FormValidator($this, 'paperType', 'required', 'plugins.reports.MultiGeneratorPaperReport.locale.paperTypeRequired'));

		//$this->addCheck(new FormValidator($this, 'htmlEmbebed', 'required', 'plugins.reports.MultiGeneratorPaperReport.locale.htmlEmbebedRequired'));
	}

	/**
	 * Initialize form data.
	 */
	function initData() {
		$conferenceId = $this->conferenceId;
		$plugin =& $this->plugin;
		$values= array();
		$names=array();
		$custom_options=$this->ParseData();
		$this->_data = array(
			'custom_options' => $custom_options
		);
	}

	/**
	 * Assign form data to user-submitted data.
	 */
	function readInputData() {
		$this->readUserVars(array('reportClass'));
	}

	/**
	 * Save settings. 
	 */
	function execute() {
		$plugin =& $this->plugin;
		$conferenceId = $this->conferenceId;
		$custom_Values= $this->getData('reportClass');
		if(($custom_Values != "ReportPaperCVS") && ($custom_Values != "ReportPaperTXT")){
			$custom_Values="ReportPaperTXT";
		}
		$plugin->updateSetting($conferenceId, 0, 'custom_Value',$custom_Values, 'string');
	}
	
	function ParseData(){
		$values=array();
		$names= array();
		$returner= array();
		if(file_exists($this->xml)){
			$data= simplexml_load_file($this->xml);
			}
		else {
			echo "el archivo xml no existe<br/>";
		}
		
		//$data = simplexml_load_string($this->xml);
		foreach (($data->xpath('//ClassName')) as $clasName){
			$values[]=$clasName;
		}
		foreach (($data->xpath('//Name'))as $name){
			$names[]=$name;
		}
		for($i=0; $i<count($values);$i++){
			$key= "$values[$i]";
			$returner[$key]="$names[$i]";	
		}
		return $returner;
	}
			
	

}

?>