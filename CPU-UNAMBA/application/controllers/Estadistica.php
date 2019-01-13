<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Estadistica extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Model_carrera");
    }

    public function index()
    {
        //mostrar la vista graficos estadisticos
        $this->load->view("admin/layouts/header");
        $this->load->view("admin/layouts/aside");
        $this->load->view('admin/graficos/cuadro2');
        $this->load->view("admin/layouts/footer");  
    }

    public function listarSistemas()
    {
        //mostrar la lista de los postulantes de Ing Sistemas
        $data['entradas'] = $this->Model_carrera->listarSistemas();
        $this->load->view("admin/layouts/header");
        $this->load->view("admin/layouts/aside");
        $this->load->view('admin/mantenimiento/tabla_sistemas',$data);
        $this->load->view("admin/layouts/footer");  
    }

    public function numeroPostulante()
    {
        //cargar los registros (numero de postulante , carreras)
        $resultado = $this->Model_carrera->numeroPostulante();
        echo json_encode($resultado);
    }


}