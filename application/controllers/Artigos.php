<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artigos extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("blog_model");
	}

	public function index(){
		$data['posts'] = $this->blog_model->fetch_posts();
		$this->load->view('artigos',$data);
	}

}
