<?php


class Model_distrito extends CI_Model
{
    
    function __construct() {
        parent::__construct();
    }
    
    //Lista todas las provincias por id de las provincias
    public function distritoxprovincia($id_provincia = null) {
       

    	return $this->db
    	->where("IdProvincia",	$id_provincia)
    	->Order_by('Distrito')
    	->get('distritos');


    }
    //crea una sellecion de provincias en base al id de las provincias

    public function selectDistritos($id_provincia = null){
        $distritos = $this->distritoxprovincia($id_provincia);
        $opcion = "<option> selecione el distrito</option>";
        foreach ($distritos ->result() as $distrito) {
            $opcion.="<option value ='{$distrito->IdDistrito}'>$distrito->Distrito</option>".PHP_EOL;
        }
        return $opcion;
    }

}