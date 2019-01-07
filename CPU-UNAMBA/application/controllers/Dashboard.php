<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		/*if (!$this->session->userdata("login")) {
			redirect(base_url());
		}*/
		
	}
	public function index()
	{
		$this->load->view("admin/layouts/header");
		$this->load->view("admin/layouts/aside");
		$this->load->view("admin/dashboard");
		$this->load->view("admin/layouts/footer");

	}

	

}
