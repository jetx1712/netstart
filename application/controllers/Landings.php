<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landings extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index() {
		$this->load->view('landings/index');
	}

	public function black_friday()
	{
		$this->load->view('landings/black_friday');
	}
	
	public function christmas()
	{
		$this->load->view('landings/christmas');
	}

	public function indicate()
	{
		$this->load->view('landings/indicate');
	}
}
