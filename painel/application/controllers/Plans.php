<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plans extends CI_Controller {
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
		$this->load->model("plans_model");
	}

	public function index()
	{
		$data['error'] 	= (isset($_SESSION['error'])? $_SESSION['error'] : '');
		$data['itens'] = $this->plans_model->fetch_itens_plans();
		$data['plans'] = $this->plans_model->fetch_plans();
		$data['ideal_plans'] = $this->plans_model->fetch_ideal_plans();
		$data['how_used'] = $this->plans_model->fetch_how_use();

		$this->load->view('plans/plans', $data);
	}

	public function register()
	{
		$data['error'] 	= (isset($_SESSION['error'])? $_SESSION['error'] : '');
		$data['itens'] = $this->plans_model->fetch_itens_plans();
		$this->load->view('plans/register', $data);
	}

	public function edit($id)
	{
		$data['error'] 	= (isset($_SESSION['error'])? $_SESSION['error'] : '');
		$data['itens'] = $this->plans_model->fetch_itens_plans();
		$data['plan'] = $this->plans_model->fetch_plan($id);
		$data['itens_plans'] = $this->plans_model->fetch_itens_plan($id);

		$this->load->view('plans/edit', $data);
	}

	public function register_itens(){
		if (isset($_POST['register_itens'])) {
			$posts = $this->security->xss_clean($this->input->post());

			if ($_FILES["img_item"]['name'] != "") {
				$config['upload_path'] = 'assets/build/img/img_itens';
				$config['allowed_types'] = 'jpg|JPG|jpeg|JPEG|png|PNG|gif|GIF';
				$config['encrypt_name'] = true;

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('img_item')){
					$info_file = $this->upload->data();
					$image = $info_file['file_name'];
				} else{
					$image = 'store-img.jpg';
					echo $this->upload->display_errors();
					echo "Imagem não enviada";
				}
			} else {
				$image = 'store-img.jpg';
			}

			$this->plans_model->insert_itens($posts, $image);
			$error = array();
			$error['error']['error_string']	= 'Registrado com sucesso, registrado em '.date('d/m/Y \à\s H\h \e i\m\i\n');
			$error['error']['error_type'] = 'success'; // Warning | success | danger
			$this->session->set_flashdata($error);
		}
		redirect(base_url().'plans');
	}

	public function insert_ideal_plan(){
		if (isset($_POST['insert_ideal_plan'])) {
			$posts = $this->security->xss_clean($this->input->post());

			$id_ideal_plan = $this->plans_model->insert_ideal_plan($posts);
			$this->plans_model->insert_plans_items_recommended($id_ideal_plan, $posts);

			$error = array();
			$error['error']['error_string']	= 'Registrado com sucesso, registrado em '.date('d/m/Y \à\s H\h \e i\m\i\n');
			$error['error']['error_type'] = 'success'; // Warning | success | danger
			$this->session->set_flashdata($error);
		}
		redirect(base_url().'plans');
	}

	public function update_itens(){
		if (isset($_POST['update_itens'])) {
			$posts = $this->security->xss_clean($this->input->post());

			if ($_FILES["edit_img_item"]['name'] != "") {
				$config['upload_path'] = 'assets/build/img/img_itens';
				$config['allowed_types'] = 'jpg|JPG|jpeg|JPEG|png|PNG|gif|GIF';
				$config['encrypt_name'] = true;

				$this->load->library('upload', $config);

				if ($this->upload->do_upload("edit_img_item")){
					$info_file = $this->upload->data();
					$image = $info_file['file_name'];
				} else {
					$image = "";
					echo $this->upload->display_errors();
					echo "Imagem não enviada";
				}
			} else {
				$image = "";
			}

			$this->plans_model->update_itens($posts, $image);
			$error = array();
			$error['error']['error_string']	= 'Registrado com sucesso, registrado em '.date('d/m/Y \à\s H\h \e i\m\i\n');
			$error['error']['error_type'] = 'success'; // Warning | success | danger
			$this->session->set_flashdata($error);
		}
		redirect(base_url().'plans');
	}

	public function insert_plans(){
		if (isset($_POST['register_plans'])) {
			$posts = $this->security->xss_clean($this->input->post());

			$id_plans = $this->plans_model->insert($posts);
			$this->plans_model->insert_itens_plans($posts, $id_plans);
			$error = array();
			$error['error']['error_string']	= 'Registrado com sucesso, registrado em '.date('d/m/Y \à\s H\h \e i\m\i\n');
			$error['error']['error_type'] = 'success'; // Warning | success | danger
			$this->session->set_flashdata($error);
		}
		redirect(base_url().'plans');
	}

	public function update_plan($id){
		if (isset($_POST['update_plans'])) {
			$posts = $this->security->xss_clean($this->input->post());

			$this->plans_model->update_plan($posts, $id);
			$error = array();
			$error['error']['error_string']	= 'Registrado com sucesso, registrado em '.date('d/m/Y \à\s H\h \e i\m\i\n');
			$error['error']['error_type'] = 'success'; // Warning | success | danger
			$this->session->set_flashdata($error);
		}
		redirect(base_url().'plans/edit/'.$id);
	}

	public function add_new_item(){
		$posts = $this->security->xss_clean($this->input->post());
		$isset_item = $this->plans_model->isset_itens_plan($posts);
		if (isset($isset_item)) {
			$this->plans_model->delete_item_plan($posts, $isset_item);
		} else {
			$this->plans_model->insert_new_item_plan($posts);
		}
		// $itens = $this->plans_model->fetch_itens_plans();
		$return = $this->plans_model->fetch_itens_plan($posts['id_plans']);
		echo json_encode($return);
	}

	public function update_ideal_plan(){
		if (isset($_POST['update_ideal_plan'])) {
			$posts = $this->security->xss_clean($this->input->post());

			$this->plans_model->update_ideal_plan($posts);
			$this->plans_model->insert_plans_items_recommended($posts['id'], $posts);

			$error = array();
			$error['error']['error_string']	= 'Registrado com sucesso, registrado em '.date('d/m/Y \à\s H\h \e i\m\i\n');
			$error['error']['error_type'] = 'success'; // Warning | success | danger
			$this->session->set_flashdata($error);
		}
		redirect(base_url().'plans');
	}

	public function fetch_ideal_plan(){

		if(isset($_POST['id'])){
			$ideal_plan = $this->plans_model->fetch_ideal_plan($_POST['id']);
			$recommended = $this->plans_model->fetch_items_recommended($ideal_plan['id']);
			$return = array_merge($ideal_plan, $recommended);

			echo json_encode($return);
		}

	}

	public function delete_recommended(){
		$posts = $this->security->xss_clean($this->input->post());

		$this->plans_model->delete_recommended($posts);
	}

	public function fetch_how_used()
	{
		$return = $this->plans_model->fetch_how_use_recommended();
		echo json_encode($return);
	}

}
