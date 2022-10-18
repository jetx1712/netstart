<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lead extends CI_Controller {
	public $user;

  public function __construct(){
		parent::__construct();

    $this->load->model("login_model", "login");
		$this->load->model("users_model");
		$logado = $this->login->checkUser();
		if (!$logado) {
			redirect('/');
			exit();
		}

		$this->user = $this->login->user();
		$this->load->model("lead_model");
	}

	public function index()
	{
		$data['error'] 	= (isset($_SESSION['error'])? $_SESSION['error'] : '');
		$data['leads'] = $this->lead_model->fetch_leads();
		$this->load->view('lead/lead', $data);
	}


}
