<?php


class Model_provincia extends CI_Model
{
    
    function __construct() {
        parent::__construct();
    }
    
    //Lista todas las provincias por id de departamento
    public function provinciaxdepartamento($id_estado = null) {
       

    	return $this->db
    	->where("IdDepartamento",	$id_estado)
    	->Order_by('Provincia')
    	->get('Provincias');


    }

}