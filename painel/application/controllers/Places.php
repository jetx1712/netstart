<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Places extends CI_Controller {
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
		$this->load->model("places_model");
	}

	public function index()
	{
		$data['error'] 	= (isset($_SESSION['error'])? $_SESSION['error'] : '');
		$data['places'] = $this->places_model->fetch_places();
		$this->load->view('places/places', $data);
	}

	public function register()
	{
		$data['error'] 	= (isset($_SESSION['error'])? $_SESSION['error'] : '');
		$this->load->view('places/register');
	}

	public function register_place(){
		if (isset($_POST['register_place'])) {
			$posts = $this->security->xss_clean($this->input->post());
			$place = $this->places_model->insert($posts);

			$data = [];
      $count = count($_FILES['img_place']['name']);

      for($i=0;$i<$count;$i++){
        if(!empty($_FILES['img_place']['name'][$i])){
          $_FILES['file']['name'] = $_FILES['img_place']['name'][$i];
          $_FILES['file']['type'] = $_FILES['img_place']['type'][$i];
          $_FILES['file']['tmp_name'] = $_FILES['img_place']['tmp_name'][$i];
          $_FILES['file']['error'] = $_FILES['img_place']['error'][$i];
          $_FILES['file']['size'] = $_FILES['img_place']['size'][$i];

          $config['upload_path'] = 'assets/build/img/img_places/';
          $config['allowed_types'] = 'jpg|JPG|jpeg|JPEG|png|PNG|gif|GIF';
          $config['max_size'] = '5000';
          $config['file_name'] = $_FILES['img_place']['name'][$i];
          $config['encrypt_name'] = TRUE;

          $this->load->library('upload',$config);

          if($this->upload->do_upload('file')){
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];

            $data['totalFiles'][] = $filename;

						$this->places_model->insert_img($filename, $place);
          }else{
            $filename = 'store-img.jpg';
						$this->places_model->insert_img($filename, $place);
            echo $this->upload->display_errors();
          }
        }
      }
			$error = array();
			$error['error']['error_string']	= 'Registrado com sucesso, registrado em '.date('d/m/Y \à\s H\h \e i\m\i\n');
			$error['error']['error_type'] = 'success'; // Warning | success | danger
			$this->session->set_flashdata($error);
		}
		redirect(base_url().'places');
	}

	public function detail($id)
	{
		$data['error'] 	= (isset($_SESSION['error'])? $_SESSION['error'] : '');
		$data['place'] = $this->places_model->fetch_place($id);
		$data['gallery_places'] = $this->places_model->fetch_gallery_places($id);

		$this->load->view('places/detail', $data);
	}

	public function update_place($id){
		if (isset($_POST['update_place'])) {
			$posts = $this->security->xss_clean($this->input->post());

			$this->places_model->update_place($posts, $id);
			$error = array();
			$error['error']['error_string']	= 'Registrado com sucesso, registrado em '.date('d/m/Y \à\s H\h \e i\m\i\n');
			$error['error']['error_type'] = 'success'; // Warning | success | danger
			$this->session->set_flashdata($error);
		}
		redirect(base_url().'places/detail/'.$id);
	}





	public function update_images($id){
		if (isset($_POST['update_images'])) {
			$posts = $this->security->xss_clean($this->input->post());

			$data = [];
			$count = count($_FILES['img_place']['name']);

			for($i=0;$i<$count;$i++){
				if(!empty($_FILES['img_place']['name'][$i])){
					$_FILES['file']['name'] = $_FILES['img_place']['name'][$i];
					$_FILES['file']['type'] = $_FILES['img_place']['type'][$i];
					$_FILES['file']['tmp_name'] = $_FILES['img_place']['tmp_name'][$i];
					$_FILES['file']['error'] = $_FILES['img_place']['error'][$i];
					$_FILES['file']['size'] = $_FILES['img_place']['size'][$i];

					$config['upload_path'] = 'assets/build/img/img_places/';
					$config['allowed_types'] = 'jpg|JPG|jpeg|JPEG|png|PNG|gif|GIF';
					$config['max_size'] = '5000';
					$config['file_name'] = $_FILES['img_place']['name'][$i];
					$config['encrypt_name'] = TRUE;

					$this->load->library('upload',$config);

					if($this->upload->do_upload('file')){
						$uploadData = $this->upload->data();
						$filename = $uploadData['file_name'];

						$data['totalFiles'][] = $filename;

						$this->places_model->update_img($posts, $filename, $id, $i);
						// $this->places_model->insert_img($filename, $place);
					}else{
						$filename = 'store-img.jpg';
						$this->places_model->update_img($posts, $filename, $id, $i);
						// $this->places_model->insert_img($filename, $place);
						echo $this->upload->display_errors();
					}
				}
			}
			$error = array();
			$error['error']['error_string']	= 'Registrado com sucesso, registrado em '.date('d/m/Y \à\s H\h \e i\m\i\n');
			$error['error']['error_type'] = 'success'; // Warning | success | danger
			$this->session->set_flashdata($error);
		}
		redirect(base_url().'places/detail/'.$id);
	}

	public function adicionar_new_img($id){
		if (isset($_POST['adicionar_img'])) {
			$posts = $this->security->xss_clean($this->input->post());

			$data = [];
			$count = count($_FILES['new_img_place']['name']);

			for($i=0;$i<$count;$i++){
				if(!empty($_FILES['new_img_place']['name'][$i])){
					$_FILES['file']['name'] = $_FILES['new_img_place']['name'][$i];
					$_FILES['file']['type'] = $_FILES['new_img_place']['type'][$i];
					$_FILES['file']['tmp_name'] = $_FILES['new_img_place']['tmp_name'][$i];
					$_FILES['file']['error'] = $_FILES['new_img_place']['error'][$i];
					$_FILES['file']['size'] = $_FILES['new_img_place']['size'][$i];

					$config['upload_path'] = 'assets/build/img/img_places/';
					$config['allowed_types'] = 'jpg|JPG|jpeg|JPEG|png|PNG|gif|GIF';
					$config['max_size'] = '5000';
					$config['file_name'] = $_FILES['new_img_place']['name'][$i];
					$config['encrypt_name'] = TRUE;

					$this->load->library('upload',$config);

					if($this->upload->do_upload('file')){
						$uploadData = $this->upload->data();
						$filename = $uploadData['file_name'];

						$data['totalFiles'][] = $filename;

						// $this->places_model->update_img($posts, $filename, $id, $i);
						$this->places_model->insert_img($filename, $id);
					}else{
						$filename = 'store-img.jpg';
						// $this->places_model->update_img($posts, $filename, $id, $i);
						$this->places_model->insert_img($filename, $id);
						echo $this->upload->display_errors();
					}
				}
			}
			$error = array();
			$error['error']['error_string']	= 'Registrado com sucesso, registrado em '.date('d/m/Y \à\s H\h \e i\m\i\n');
			$error['error']['error_type'] = 'success'; // Warning | success | danger
			$this->session->set_flashdata($error);
		}
		redirect(base_url().'places');
	}

}
