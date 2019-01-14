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
	<!-- LISTANDO POSTULANTES-->
    public function listarPostulantes($id)
    {
        //mostrar la lista de los postulantes de Ing Sistemas
        $data['entradas'] = $this->Model_carrera->listarPostulantes($id);
        $this->load->view("admin/layouts/header");
        $this->load->view("admin/layouts/aside");
        $this->load->view('admin/mantenimiento/tabla_sistemas',$data);
        $this->load->view("admin/layouts/footer");  
    }
	<!-- CARGANDO LOS REGISTROS -->
    public function numeroPostulante()
    {
        //cargar los registros (numero de postulante , carreras)
        $resultado = $this->Model_carrera->numeroPostulante();
        echo json_encode($resultado);
    }




//falta terminar
    public function editar($id)
    {
        $data = array(
            'postulante' => $this->Model_carrera->editarpostulante($id), 
        );
        $this->load->view("admin/layouts/header");
        $this->load->view("admin/layouts/aside");
        $this->load->view('admin/mantenimiento/editar',$data);
        $this->load->view("admin/layouts/footer"); 
    }


    public function editarPostulante()
    {
        $this->load->view("admin/layouts/header");
        $this->load->view("admin/layouts/aside");
        $datos = [
                'options_departamentos' => $this->Model_cpu-> selectdepartamentos()
        ];
        $datos2 = [
                'options_provincias' => $this->Model_provincia-> selectprovincias()
        ];
        $this->load->view("admin/mantenimiento/editar",$datos,$datos2);
        $this->load->view("admin/layouts/footer"); 
        
    }

    public function update()
    {
        $idpostulante = $this->input->post("idpostulante");
        $nomPost = $this->input->post("nomPost");
        $apePaterno = $this->input->post("apePaterno");
        $apeMaterno = $this->input->post("apeMaterno");
        $dni = $this->input->post("dni");
        $telf = $this->input->post("telf");

        $data = array(
            'nomPost' => $nomPost,
            'apePaterno' => $apePaterno,
            'apeMaterno' => $apeMaterno,
            'dni'=> $dni,
            'telf'=> $telf,
        );
        if ($this->Model_carrera->update($idpostulante, $data)) 
        {
            redirect(base_url()."admin/mantenimiento/tabla_sistemas");
        } else {
            $this->session->set_flashdata("error","No se pudo actualizar la informacion");
            redirect(base_url()."admin/mantenimiento/editar".$idpostulante);
        }
        
    }


}