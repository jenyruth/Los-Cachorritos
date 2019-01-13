<?php

class carreras extends CI_controller{


	public function __construct(){
		parent::__construct();
	}

	// obteniendo carreras
	public function getCarreras(){
		$facultad = $this->input->post('facultad');
		echo $this->Model_facultad->selectcarreras($facultad);
	}

}