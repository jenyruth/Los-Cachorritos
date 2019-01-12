<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {
   
    public function __construct() {
        parent::__construct();
        $this->load->model("Model_Inic");
    }

    public function index() {
        $this->load->view('layouts/head');
        $this->load->view('layouts/header');
        $this->load->view('layouts/carousel');
        $this->load->view('layouts/conteiner');
        $this->load->view('layouts/footer');
    }
    
   /*public funtion insertarDatos(){
 		
 	}*/

    public function login(){
        $num_rec = $this->input->post("num_rec");
	//$res= $this->Model_Inic->login(sha1($username));
        $res = $this->Model_Inic->login($num_rec);
        
        if(!$res){
            redirect(base_url());
        }else{
            $data=array(
              'num_rec'=>$res->num_rec,
              'tipo_us'=>$res->tipo_us 
            );
            $this->session->set_userdata($data);
            redirect(base_url('cpu'));
        }
        
        //$this->load->view('admin/estudiante'); 
        /*$data['depar']= $this->Model_cpu->depar();
       
        $data['prov']= $this->Model_cpu->prov();
        $data['dist']= $this->Model_cpu->dist();*/
        
        //$this->load->view('admin/login');
        
    }
}