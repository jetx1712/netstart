<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NossosPlanos extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("plans_model");
		$this->load->model('banners_model');
	}

	public function index()
	{
		$data['plans'] = $this->plans_model->fetch_plans();
		$data['itens'] = $this->plans_model->fetch_itens_plans();
		//var_dump($data['itens']); die;
		$data['banners'] = $this->banners_model->fetch_banners_our_plans();
		$this->load->view('nossosPlanos',$data);
	}
}
