<?php

class distritos extends CI_controller{


	public function __construct(){
		parent::__construct();
	}

	// obteniendo distritos
	public function getDistrito(){
		$id_provincia = $this->input->post('id_provincia');
		echo $this->Model_distrito->selectDistritos($id_provincia);
	}

}