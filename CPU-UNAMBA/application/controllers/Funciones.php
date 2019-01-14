<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 class Funciones extends CI_Controller{
      public function __construct() {
        parent::__construct();
        //$this->load->model("Model_carrera");
    }
    public function insertarDatos(){
        $datos= $this->imput->post();
        
        if(isset($datos)){
            
            $txtnombre=$datos['txtNombres'];
            $txtapellpat=$datos['txtapellpat'];
            $txtapellmat=$datos['txtapellmat'];
            $txtsexo=$datos['txtsexo'];
            $txtdni=$datos['txtdni'];
            $txtdomicilio=$datos['txtdomicilio'];
            $txtcorreo=$datos['txtcorreo'];
            $txtcelular=$datos['txtcelular'];
            $txtfechanac=$datos['txtfechanac'];
            $txtdep=$datos['txtdep'];
            $txtprov=$datos['txtprov'];
            $txtdistri=$datos['txtdistri'];
            $txtcolegio=$datos['txtcolegio'];
            $txtlugarnac=$datos['txtlugarnac'];
            $txtdepartn=$datos['txtdepartn'];
            $txtprovn=$datos['txtprovn'];
            $txtdistrin=$datos['txtdistrin'];
            $txtanoe=$datos['txtanoe'];
            $txtfacult=$datos['txtfacult'];
            $txtcarr=$datos['txtcarr'];
            
            
        }
        //Aca lo que hacemos es guardar en un array los datos que se reciben por el POST, procura que el nombre de las claves de tu array sea igual al nombre de los campos de tu tabla
	

		/*$identificador=this->db->insert_id()
				
				'apellidoMaterno'= $this->input->post("apellidoMaterno");
				'nombres'= $this->input->post("nombre");
				'sexo'= $this->input->post("");
				'dni'= $this->input->post("numeroDocumento");
				'domicilio'= $this->input->post("domicilio");
				'edad'= $this->input->post("edad");
				'fechaNac'= $this->input->post("fechaNac");
				'departamento'= $this->input->post("departamento");
				'provincia'= $this->input->post("provincia");
				'distrito'= $this->input->post("distrito");
				'nombreColegio'= $this->input->post("");
				'departamentoColegio'= $this->input->post("departamento");
				'provinciaColegio'= $this->input->post("provincia");
				'distritoColegio'= $this->input->post("distrito");
				'anioEgreso'= $this->input->post("anioEgreso");
				'facultad'= $this->input->post("facultad");
				'carreaProfesional'= $this->input->post("carreaProfesional");
				$res = $this->Usuarios_model->login($username, 
		*/
				//if ($this -> )
		}
}
 
