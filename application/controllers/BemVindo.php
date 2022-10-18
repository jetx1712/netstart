<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BemVindo extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("places_model");
		$this->load->model('banners_model');
	}


	public function index(){
		
		$this->load->view('bemVindo');
	}
}