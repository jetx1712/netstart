<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seo extends CI_Controller {
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
		$this->load->model("seo_model");
	}

	public function index(){
		$data['seo'] = $this->seo_model->fetch_seo_pags();
		$this->load->view('seo/seo',$data);
	}

	public function register(){
		$this->load->view('seo/register');
	}

	public function detail($id){
		$data['error'] 	= (isset($_SESSION['error'])? $_SESSION['error'] : '');
		$data['seo'] = $this->seo_model->fetch_seo_pag($id);
		$this->load->view('seo/detail',$data);
	}
	
	public function insert_seo_pag(){
		if (isset($_POST['insert_seo_pag'])) {
			$posts = $this->security->xss_clean($this->input->post());
			$this->seo_model->insert_seo_pag($posts);
			$error = array();
			$error['error']['error_string']	= 'Registrado com sucesso, registrado em '.date('d/m/Y \à\s H\h \e i\m\i\n');
			$error['error']['error_type'] = 'success'; // Warning | success | danger
			$this->session->set_flashdata($error);
		}
		redirect(base_url().'seo');
	}

	public function update_seo_pag(){
		if (isset($_POST['update_seo_pag'])) {
			$posts = $this->security->xss_clean($this->input->post());
			$this->seo_model->update_seo_pag($posts,$posts['id_seo']);
			$error = array();
			$error['error']['error_string']	= 'Registrado com sucesso, registrado em '.date('d/m/Y \à\s H\h \e i\m\i\n');
			$error['error']['error_type'] = 'success'; // Warning | success | danger
			$this->session->set_flashdata($error);
		}
		redirect(base_url().'seo');
	}


}