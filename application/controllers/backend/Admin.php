<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->layout->setLayout('layouts/backend/login');
	}

	public function index()
	{
		$this->layout->css( array('/assets/backend/css/additional.css') );
		$this->layout->js( array('/assets/backend/js/additional.js') );

		$data["info"] = "Información";

		//Layout load view
		$this->layout->view('backend/admin/index', $data);
	}

	public function panel()
	{

	}

}
