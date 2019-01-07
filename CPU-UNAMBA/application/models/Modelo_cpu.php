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
}