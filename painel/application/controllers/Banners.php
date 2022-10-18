<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banners extends CI_Controller {
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
		$this->load->model('banners_model');
	}

	public function index()
	{
		$data['error'] 	= (isset($_SESSION['error'])? $_SESSION['error'] : '');
		$data['banners'] = $this->banners_model->fetch_banners();
		$this->load->view('banners/banner', $data);
	}

	public function register_banner(){
		if (isset($_POST['register_banner'])) {
			$posts = $this->security->xss_clean($this->input->post());

      $config['upload_path'] = 'assets/build/img/banners';
      $config['allowed_types'] = '*';
      $config['encrypt_name'] = true;

      $this->load->library('upload', $config);

			$erro = false;

			$images = array();
			if ($_FILES["img_small"]['name'] != "") {
				if ($this->upload->do_upload('img_small')){
					$info_file = $this->upload->data();
					$images['small'] = $info_file['file_name'];
				} else{
					echo $this->upload->display_errors();
					echo "Imagem não enviada";
					$erro = true;
				}
			} else {
				$erro = true;
			}

			if ($_FILES["img_medium"]['name'] != "") {
				if ($this->upload->do_upload('img_medium')){
					$info_file = $this->upload->data();
					$images['medium'] = $info_file['file_name'];
				} else{
					echo $this->upload->display_errors();
					echo "Imagem não enviada";
					$erro = true;
				}
			} else {
				$erro = true;
			}

			if ($_FILES["img_big"]['name'] != "") {
				if ($this->upload->do_upload('img_big')){
					$info_file = $this->upload->data();
					$images['big'] = $info_file['file_name'];
				} else{
					echo $this->upload->display_errors();
					echo "Imagem não enviada";
					$erro = true;
				}
			} else {
				$erro = true;
			}

			if ($erro) {
				$error = array();
				$error['error']['error_string']	= 'Não foi possível enviar a imagem.';
				$error['error']['error_type'] = 'danger'; // Warning | success | danger
				$this->session->set_flashdata($error);
			}else{
				$this->banners_model->insert($images, $posts);
				$error = array();
				$error['error']['error_string']	= 'Registrado com sucesso, registrado em '.date('d/m/Y \à\s H\h \e i\m\i\n');
				$error['error']['error_type'] = 'success'; // Warning | success | danger
				$this->session->set_flashdata($error);
			}
		}
		redirect(base_url().'banners');
	}


	public function update_banner(){
		if (isset($_POST['update_banner'])) {
			$posts = $this->security->xss_clean($this->input->post());
			//var_dump($posts); die;
      $config['upload_path'] = 'assets/build/img/banners';
      $config['allowed_types'] = 'jpg|JPG|jpeg|JPEG|png|PNG|gif|GIF|webp|WEBP';
      $config['encrypt_name'] = true;

      $this->load->library('upload', $config);

			$erro = false;
      if ($this->upload->do_upload('edit_img_banner')){
        $info_file = $this->upload->data();
        $image = $info_file['file_name'];
      } else{
				$erro = true;
        echo $this->upload->display_errors();
        echo "Imagem não enviada";
      }

			if ($erro) {
				$error = array();
				$error['error']['error_string']	= 'Não foi possível enviar a imagem.';
				$error['error']['error_type'] = 'danger'; // Warning | success | danger
				$this->session->set_flashdata($error);
			}else{
				$this->banners_model->update_banner($posts, $image);
				$error = array();
				$error['error']['error_string']	= 'Registrado com sucesso, registrado em '.date('d/m/Y \à\s H\h \e i\m\i\n');
				$error['error']['error_type'] = 'success'; // Warning | success | danger
				$this->session->set_flashdata($error);
			}
		}
		redirect(base_url().'banners');
	}
	public function delete_banner(){
		if (isset($_POST['delete_banner'])) {
			$posts = $this->security->xss_clean($this->input->post());
			$this->banners_model->delete_banner($posts);
			$error = array();
			$error['error']['error_string']	= 'Registrado com sucesso, registrado em '.date('d/m/Y \à\s H\h \e i\m\i\n');
			$error['error']['error_type'] = 'success'; // Warning | success | danger
			$this->session->set_flashdata($error);
		}
		redirect(base_url().'banners');
	}

	public function edit()
	{
		$this->load->view('banners/edit');
	}
}
