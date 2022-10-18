<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contract extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("plans_model");
	}

	public function _remap($id){
		$this->index($id);
	}

	public function index($id){
		
		$data['plans'] = $this->plans_model->fetch_plan($id);
		$data['itens'] = $this->plans_model->fetch_itens_plans();
		$this->load->view('contract',$data);
	}


}