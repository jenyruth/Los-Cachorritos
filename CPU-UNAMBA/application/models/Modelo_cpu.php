<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Modelo_cpu extends CI_Model {
    
    function __construct() {
        parent::__construct();
    }
    
    //Lista todos los departamentos
    public function depar() {
        return $this->db
        ->order_by('Departamento')
        ->get('departamentos');
    }
    
}