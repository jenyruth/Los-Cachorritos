<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Modelo_cpu extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function depar() {
        $query=$this->db->query("SELECT * FROM departamentos");
        return $query->result();
    }
    public function prov() {
        $ID=3;
        $query=$this->db->query("SELECT * from departamentos INNER JOIN provincias WHERE departamentos.IdDepartamento='$ID' AND provincias.IdDepartamento= '$ID'");
        return $query->result();
    }
    public function dist() {
        $query=$this->db->query("SELECT * FROM distritos");
        return $query->result();
    }
    public function fac() {
        $query=$this->db->query("SELECT * FROM distritos");
        return $query->result();
    }
}