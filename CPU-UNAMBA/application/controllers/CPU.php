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

        // datos de departamentos
        $datos = [
                'options_departamentos' => $this->Model_cpu-> selectdepartamentos()
        ];

        //datos de provincias
        $datos2 = [
                'options_provincias' => $this->Model_provincia-> selectprovincias()
        ];

        //datos de facultades
        $datos3 = [
                'options_facultades' => $this->Model_facultad-> selectfacultad()
        ];

        //finisehd


        $this->load->view("admin/layouts/estudiante",$datos,$datos2);
        $this->load->view('layouts/footer');
        
    }
    
}