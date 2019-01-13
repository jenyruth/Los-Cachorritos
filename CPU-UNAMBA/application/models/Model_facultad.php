<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_facultad extends CI_Model {
    
    function __construct() {
        parent::__construct();
    }
    
    //Lista todas las carrerasxfacultad
    public function carrera($facultad = null) {
        return $this->db
        ->where("facultad",  $facultad)
        ->Order_by('nomCarrera')
        ->get('carrera');
    }
       //mostrar las facultades

    public function selectcarreras($facultad = null){

        $carreras = $this->carrera($facultad);
        $opcion = "<option> selecione la carrera </option>";
        foreach ($carreras ->result() as $carrera) {
            $opcion.="<option value ='{$carrera->IdCarrera}'>$carrera->nomCarrera</option>".PHP_EOL;
        }
        return $opcion;

    }
}