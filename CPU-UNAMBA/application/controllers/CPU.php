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

        // datos de distritos
        $datos = [
                'options_departamentos' => $this->Model_cpu-> selectdepartamentos()
        ];

        //datos de provincias
        $datos2 = [
                'options_provincias' => $this->Model_provincia-> selectprovincias()
        ];



        $this->load->view("admin/layouts/estudiante",$datos,$datos2);
        $this->load->view('layouts/footer');
        
    }
    
}