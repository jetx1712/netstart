<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FaleConosco extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("places_model");
		$this->load->model('banners_model');
	}
	public function index()
	{
		$data['error'] 	= (isset($_SESSION['error'])? $_SESSION['error'] : '');
		$data['places'] = $this->places_model->fetch_places();
		$data['banners'] = $this->banners_model->fetch_banners_contact_us();
		$this->load->view('faleConosco',$data);
	}
}
