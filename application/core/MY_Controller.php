<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
  public function __construct(){
		parent::__construct();

    $this->load->model("contact_model");
    if (!isset($_SESSION['contact'])) {
      $_SESSION['contact'] =	$this->contact_model->fetch_contacts();
    }
  }

}