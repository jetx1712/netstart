<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
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
		$this->load->model("contact_model");
	}

	public function index(){

		$data['error'] 	= (isset($_SESSION['error'])? $_SESSION['error'] : '');
		$data['contact'] =	$this->contact_model->fetch_contacts();
		$this->load->view('contact/contact',$data);
	}

	public function register(){
		$this->load->view('contact/register');
	}

	public function detail($id)
	{
		$data['error'] 	= (isset($_SESSION['error'])? $_SESSION['error'] : '');
		$data['contact'] =	$this->contact_model->fetch_contact($id);
		$this->load->view('contact/detail',$data);
	}
	

	public function insert_contact(){
		if (isset($_POST['insert_contact'])) {
			$posts = $this->security->xss_clean($this->input->post());

			$this->contact_model->insert_contact($posts);
			$error = array();
			$error['error']['error_string']	= 'Registrado com sucesso, registrado em '.date('d/m/Y \à\s H\h \e i\m\i\n');
			$error['error']['error_type'] = 'success'; // Warning | success | danger
			$this->session->set_flashdata($error);
		}
		redirect(base_url().'contact/'.$posts['id_contact']);
	}
	
	public function update_contact(){
		if (isset($_POST['update_contact'])) {
			$posts = $this->security->xss_clean($this->input->post());

			$this->contact_model->update_contact($posts,$posts['id_contact']);
			$error = array();
			$error['error']['error_string']	= 'Registrado com sucesso, registrado em '.date('d/m/Y \à\s H\h \e i\m\i\n');
			$error['error']['error_type'] = 'success'; // Warning | success | danger
			$this->session->set_flashdata($error);
		}
		redirect(base_url().'contact/detail/'.$posts['id_contact']);
	}



}