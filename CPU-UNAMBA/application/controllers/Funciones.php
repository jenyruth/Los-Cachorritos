<?php
 defined('BASEPATH') OT exit ('no direccionar a ningun lado ');
 class Funciones extends CI_Controller
 {
			public function insertarDatos(){
				
		//Aca lo que hacemos es guardar en un array los datos que se reciben por el POST, procura que el nombre de las claves de tu array sea igual al nombre de los campos de tu tabla
		$datos=array(
				'apellidoPaterno'= $this->input->post("apellidoPaterno");
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
				'carreaProfesional'= $this->input->post("carreaProfesional")
			);

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
 
