<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Inic extends CI_Model {
    
    public function login($num_rec) {
        $this->db->where("codVoucher",$num_rec);
        //$this->db->where("tipo_us",$username);
        $resultados= $this->db->get("voucher");
        if ($resultados->num_rows()>0) {
            return $resultados->row();
        }else{
            return false;
        }
    }
}