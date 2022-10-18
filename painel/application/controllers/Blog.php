<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
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
		$this->load->model("blog_model");
	}

	public function index()
	{
		$data['error'] 	= (isset($_SESSION['error'])? $_SESSION['error'] : '');
		$data['posts'] = $this->blog_model->fetch_posts();
		$data['category'] = $this->blog_model->fetch_category();
		$this->load->view('blog/blog', $data);
	}

	public function register()
	{
		$data['error'] 	= (isset($_SESSION['error'])? $_SESSION['error'] : '');
		$data['category'] = $this->blog_model->fetch_category();
		$this->load->view('blog/register', $data);
	}

	public function register_post(){
		if (isset($_POST['register_post'])) {
			$posts = $this->security->xss_clean($this->input->post());

      if ($_FILES["img_post"]['name'] == "") {
        $img = 'store-img.jpg';
      }else{
        $config['upload_path'] = 'assets/build/img/img_blog';
        $config['allowed_types'] = '*';
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);

				$erro = false;
        if ($this->upload->do_upload('img_post')){
          $info_file = $this->upload->data();
          $img = $info_file['file_name'];
        } else{
          echo $this->upload->display_errors();
          echo "Imagem não enviada";
					$erro = true;
        }
      }

			if ($erro) {
				$error = array();
				$error['error']['error_string']	= 'Não foi possível enviar a imagem.';
				$error['error']['error_type'] = 'danger'; // Warning | success | danger
				$this->session->set_flashdata($error);
			}else{
				$id_blog = $this->blog_model->insert($posts, $img);
				$error = array();
				$error['error']['error_string']	= 'Registrado com sucesso, registrado em '.date('d/m/Y \à\s H\h \e i\m\i\n');
				$error['error']['error_type'] = 'success'; // Warning | success | danger
				$this->session->set_flashdata($error);
			}
		}
		redirect(base_url().'blog');
	}

 	public function register_category(){
		if (isset($_POST['register_category'])) {
			$posts = $this->security->xss_clean($this->input->post());

			$this->blog_model->insert_category($posts);
			$error = array();
			$error['error']['error_string']	= 'Registrado com sucesso, registrado em '.date('d/m/Y \à\s H\h \e i\m\i\n');
			$error['error']['error_type'] = 'success'; // Warning | success | danger
			$this->session->set_flashdata($error);
		}
		redirect(base_url().'blog');
	}

	public function update_category(){
		if (isset($_POST['update_category'])) {
			$posts = $this->security->xss_clean($this->input->post());

			$this->blog_model->update_category($posts);
			$error = array();
			$error['error']['error_string']	= 'Registrado com sucesso, registrado em '.date('d/m/Y \à\s H\h \e i\m\i\n');
			$error['error']['error_type'] = 'success'; // Warning | success | danger
			$this->session->set_flashdata($error);
		}
		redirect(base_url().'blog');
	}

	public function edit($id)
	{
		$data['error'] 	= (isset($_SESSION['error'])? $_SESSION['error'] : '');
		$data['post'] = $this->blog_model->fetch_post($id);
		$data['category'] = $this->blog_model->fetch_category();

		$this->load->view('blog/edit', $data);
	}

	public function update_post($id){
		if (isset($_POST['update_post'])) {
			$posts = $this->security->xss_clean($this->input->post());

			$config['upload_path'] = 'assets/build/img/img_blog';
			$config['allowed_types'] = '*';
			$config['encrypt_name'] = true;

			$this->load->library('upload', $config);

			$erro = false;
			if ($this->upload->do_upload('img_post')){
				$info_file = $this->upload->data();
				$img = $info_file['file_name'];
			} else{
				echo $this->upload->display_errors();
				$erro = true;
			}

			if ($erro) {
				$error = array();
				$error['error']['error_string']	= 'Não foi possível enviar a imagem.';
				$error['error']['error_type'] = 'danger'; // Warning | success | danger
				$this->session->set_flashdata($error);
			}else{
				$id_blog = $this->blog_model->update_post($posts, $img, $id);
				$error = array();
				$error['error']['error_string']	= 'Registrado com sucesso, registrado em '.date('d/m/Y \à\s H\h \e i\m\i\n');
				$error['error']['error_type'] = 'success'; // Warning | success | danger
				$this->session->set_flashdata($error);
			}
		}
		redirect(base_url().'blog/edit/'.$id);
	}

}
