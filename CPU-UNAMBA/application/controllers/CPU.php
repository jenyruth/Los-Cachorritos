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
        

        //pasando datos de los combos
        $datos = [
                'options_departamentos' => $this->Model_cpu-> selectdepartamentos()
        ];

        //finisehd


        $this->load->view("admin/estudiante",$datos);
        $this->load->view('layouts/footer');
        
    }
    
}