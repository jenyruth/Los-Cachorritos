<?php

class provincias extends CI_controller{


	public function __construct(){
		parent::__construct();
	}

//obteniendo provincias
	public function getProvincia(){
		$id_departamento = $this->input->post('id_departamento');
		echo $this->Model_provincia->selectProvincias($id_departamento);
	}

}