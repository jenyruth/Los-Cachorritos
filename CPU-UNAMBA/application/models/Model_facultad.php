<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_facultad extends CI_Model {
    
    function __construct() {
        parent::__construct();
    }
    
    //Lista todas las provincias
    public function facul() {
        return $this->db
        ->order_by('facultad')
        ->get('carrera');
    }
       //mostrar las provincias

    public function selectfacultad(){

        $opcion = "<option value=''>seleccione facultad</option>".PHP_EOL;
        $facultades = $this->facul();
        foreach($facultades -> result() as $facultad) {
            $opcion .= "<option value ='{$facultad->facultad}'>{$facultad->facultad}</option>".PHP_EOL;
        }
        return $opcion;

    }
}