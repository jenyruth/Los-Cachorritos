<?php


class Model_distrito extends CI_Model
{
    
    function __construct() {
        parent::__construct();
    }
    
    //Lista todas las provincias por id de departamento
    public function distritoxprovincia($id_provincia = null) {
       

    	return $this->db
    	->where("IdProvincia",	$id_provincia)
    	->Order_by('Distrito')
    	->get('distritos');


    }

}