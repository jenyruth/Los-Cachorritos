<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CPU extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Model_cpu');
    }

    public function index()
    {
	$this->load->view('layouts/head');
        $this->load->view('layouts/header_1');
        //$this->load->view('admin/estudiante'); 
        /*$data['depar']= $this->Model_cpu->depar();
       
        $data['prov']= $this->Model_cpu->prov();
        $data['dist']= $this->Model_cpu->dist();*/
        $this->load->view("admin/estudiante");
        $this->load->view('layouts/footer');
        
    }
    
}