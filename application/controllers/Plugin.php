<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plugin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->layout->setLayout('layouts/frontend/plugin');
	}

	/**
	* HomePage
	*/
	public function index()
	{
		//Layout options
		$this->layout->setTitle("Uploadifive");
		$this->layout->setKeywords("keywords");
		$this->layout->setDescripcion("Descripción");
		$this->layout->setSocialSiteName("Name");
		$this->layout->setSocialTitle("Title");
		$this->layout->setSocialResumen("Resumen");
		$this->layout->setSocialDescripcion("Description");
		//$this->layout->css( array('/assets/css/additional.css') );
		//$this->layout->js( array('/assets/js/additional.js') );

		$data = array();
		$this->layout->view('frontend/plugin/index', $data);
	}


}