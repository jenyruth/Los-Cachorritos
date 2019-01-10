<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_cpu extends CI_Model {
    
    function __construct() {
        parent::__construct();
    }
    
    //Lista todos los departamentos
    public function depar() {
        return $this->db
        ->order_by('Departamento')
        ->get('departamentos');
    }
       //mostrar los departamentos 

    public function selectdepartamentos(){

        $opcion = "<option value=''>seleccione el departamento</option>".PHP_EOL;
        $departamentos = $this->depar();
        foreach($departamentos -> result() as $departamento) {
            $opcion .= "<option value ='{$departamento->IdDepartamento}'>{$departamento->Departamento}</option>".PHP_EOL;
        }
        return $opcion;

    }
}