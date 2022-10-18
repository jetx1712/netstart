<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("blog_model");
		$this->load->model('banners_model');
	}
	public function index()
	{
		$data['posts'] = $this->blog_model->fetch_posts();
		$data['categories'] = $this->blog_model->fetch_categories();
		$data['banners'] = $this->banners_model->fetch_banners_blog();
		$this->load->view('blog/blog',$data);
	}

	public function detalhe($id){
		$data['post'] = $this->blog_model->fetch_post($id);
		$data['categories'] = $this->blog_model->fetch_categories();
		$_SESSION['post'] = $data['post'];
		$this->load->view('blog/detalhe',$data);
	}

	public function categoria($id){
		$data['posts'] = $this->blog_model->fetch_posts_category($id);
		$data['categories'] = $this->blog_model->fetch_categories();
		$data['category'] = $this->blog_model->fetch_category($id);
		$this->load->view('blog/categoria',$data);
	}


	public function insert_lead(){
		if (isset($_POST['insert_lead'])) {
			$posts = $this->security->xss_clean($this->input->post());
			$this->blog_model->insert_lead($posts);
		}
		redirect(base_url()).'blog';
	}
	
}
