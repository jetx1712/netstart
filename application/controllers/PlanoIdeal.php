<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PlanoIdeal extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("plans_model");
	}

	public function index(){
		$this->load->view('planoIdeal');
	}


	public function fetch_ideal_plan(){
		if(isset($_POST['id'])){
			$ideal_plan = $this->plans_model->fetch_items_recommended($_POST['id']);

			echo json_encode($ideal_plan);
		}
	}

	public function fetch_ideal_plan_qtd_persons(){
		// if(isset($_POST['id'])){
			$ideal_plan = $this->plans_model->fetch_items_recommended_persons($_POST['qtdPersons']);

			echo json_encode($ideal_plan);
		// }
	}

}
