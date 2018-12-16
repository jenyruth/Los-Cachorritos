<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Inic extends CI_Model {
    
    public function login($num_rec) {
        $this->db->where("num_rec",$num_rec);
        //$this->db->where("tipo_us",$username);
        $resultados= $this->db->get("tab_rec");
        if ($resultados->num_rows()>0) {
            return $resultados->row();
        }else{
            return false;
        }
    }
}