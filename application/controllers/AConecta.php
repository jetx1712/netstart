<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AConecta extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("places_model");
		$this->load->model('banners_model');
		$this->load->model('history_timeline_model');
	}


	public function index(){
		
		$data['gallery_places'] = $this->places_model->fetch_gallery_places();
		$data['places'] = $this->places_model->fetch_places();
		$data['banners'] = $this->banners_model->fetch_banners_about_us();
		$data['years'] =	$this->history_timeline_model->fetch_years();
		$this->load->view('aConecta',$data);
	}
}