<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Estadistica extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Model_cpu');
    }

    public function index()
    {
        $this->load->view("admin/layouts/header");
        $this->load->view("admin/layouts/aside");
        $this->load->view('admin/graficos/cuadro2');
        $this->load->view("admin/layouts/footer");  
    }

        public function listarSistemas()
    {
        $this->load->view("admin/layouts/header");
        $this->load->view("admin/layouts/aside");
        $this->load->view('admin/mantenimiento/tabla_sistemas');
        $this->load->view("admin/layouts/footer");  
    }

    
}