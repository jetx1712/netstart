<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History_timeline extends CI_Controller {
	public $user;

  public function __construct(){
		parent::__construct();

    $this->load->model("login_model", "login");
		$this->load->model("users_model");
		$this->load->model("history_timeline_model");
		$logado = $this->login->checkUser();
		if (!$logado) {
			redirect('/');
			exit();
		}

		$this->user = $this->login->user();
	}

	public function index()
	{
		$data['error'] 	= (isset($_SESSION['error'])? $_SESSION['error'] : '');
		$data['years'] =	$this->history_timeline_model->fetch_years();
		$this->load->view('history_timeline/history_timeline', $data);
	}

	public function register()
	{
		$this->load->view('history_timeline/register');
	}

	public function edit($id)
	{
		$data['year'] =	$this->history_timeline_model->fetch_year($id);
		$this->load->view('history_timeline/edit',$data);
	}

	public function insert(){
		if (isset($_POST['insert'])) {
			$posts = $this->security->xss_clean($this->input->post());
			$this->history_timeline_model->insert($posts);
		}
		redirect(base_url().'history_timeline');
	}

	public function update($id){
		if (isset($_POST['update'])) {
			$posts = $this->security->xss_clean($this->input->post());

			$this->history_timeline_model->update($posts, $id);
			$error = array();
			$error['error']['error_string']	= 'Registrado com sucesso, registrado em '.date('d/m/Y \à\s H\h \e i\m\i\n');
			$error['error']['error_type'] = 'success'; // Warning | success | danger
			$this->session->set_flashdata($error);
		}
		redirect(base_url().'history_timeline/edit/'.$id);
	}

	
}
