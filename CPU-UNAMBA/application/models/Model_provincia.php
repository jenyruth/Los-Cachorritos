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

        //crea una sellecion de provincias en base al id de los departamentos

    public function selectProvincias($id_estado = null){
        $provincias = $this->provinciaxdepartamento($id_estado);
        $opcion = "<option> selecione la provincia</option>";
        foreach ($provincias ->result() as $provincia) {
            $opcion.="<option value ='{$provincia->IdProvincia}'>$provincia->Provincia</option>".PHP_EOL;
        }
        return $opcion;
    }

}