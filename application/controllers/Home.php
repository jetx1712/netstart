<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("places_model");
		$this->load->model("home_model");
		$this->load->model('banners_model');
		$this->load->model('plans_model');
	}
	public function index(){
		$data['plans'] = $this->plans_model->fetch_plans();
		$data['itens'] = $this->plans_model->fetch_itens_plans();
		$data['places'] = $this->places_model->fetch_places();
		$data['error'] 	= (isset($_SESSION['error'])? $_SESSION['error'] : '');
		$data['posts'] = $this->home_model->fetch_posts();
		$data['banners'] = $this->banners_model->fetch_banners_home();
		$data['gallery_places'] = $this->places_model->fetch_gallery_places();
		$this->load->view('home',$data);
	}




	// public function index()
	// {
	// 	$data['error'] 	= (isset($_SESSION['error'])? $_SESSION['error'] : '');

	// 	$this->load->view('banners/banner', $data);
	// }




}
