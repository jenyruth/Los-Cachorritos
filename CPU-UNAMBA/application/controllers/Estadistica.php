<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Estadistica extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //$this->load->model('Model_cpu');
    }

    public function index()
    {
	$this->load->view('admin/pages/cuadro1');
        
        
    }
    
}