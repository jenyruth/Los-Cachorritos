<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 class Funciones extends CI_Controller{
      public function __construct() {
        parent::__construct();
        $this->load->model("Model_Estudiante");
    }
    public function insertarDatos(){
        $datos= $this->input->post();
        
        if(isset($datos)){
            
            $nomPost=$datos['txtNombres'];
            $apePaterno=$datos['txtapellpat'];
            $apeMaterno=$datos['txtapellmat'];
            $dni=$datos['txtdni'];
            $sexo=$datos['txtsexo'];
            $domicilio=$datos['txtdomicilio'];
            $correo=$datos['txtcorreo'];
            $telf=$datos['txtcelular'];
            $fechaNac=$datos['txtfechanac'];
            //$idColegio=$datos['txtcolegio'];
            //$txtprov=$datos['txtprov'];
           // $idCarrera=$datos['txtcarr'];
            //$idDistrito=$datos['txtdep'];
            //$txtlugarnac=$datos['txtlugarnac'];
            //$txtdepartn=$datos['txtdepartn'];
            //$txtprovn=$datos['txtprovn'];
            //$txtdistrin=$datos['txtdistrin'];
            //$txtanoe=$datos['txtanoe'];
            //$txtfacult=$datos['txtfacult'];
           // $txtcarr=$datos['txtcarr'];
           $this->Model_Estudiante->Estudiante($nomPost,$apePaterno,$apeMaterno,$dni,$sexo,$domicilio,$correo,$telf,$fechaNac);
           redirect('');
        }
        //Aca lo que hacemos es guardar en un array los datos que se reciben por el POST, procura que el nombre de las claves de tu array sea igual al nombre de los campos de tu tabla
	

		
				//if ($this -> )
		}
}
 
