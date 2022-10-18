<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lead extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("blog_model");
		$this->load->model('banners_model');
	}

	public function insert_lead(){
		if (isset($_POST['insert_lead'])) {
			$posts = $this->security->xss_clean($this->input->post());
			$this->blog_model->insert_lead($posts);
		}
		redirect(base_url()).'blog';
	}
	
}