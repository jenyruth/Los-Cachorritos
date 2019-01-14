<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Estudiante extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function Estudiane($nomPost,$apePaterno,$apeMaterno,$dni,$sexo,$domicilio,$correo,$telf,$fechaNac,$idColegio,$idCarrera,$idVoucher,$idDistrito){
        $array=array(
            'nomPost'=>$nomPost,
            'apePaterno'=>$apePaterno,
            'apeMaterno'=>$apeMaterno,
            'dni'=>$dni,
            'sexo'=>$sexo,
            'domicilio'=>$domicilio,
            'correo'=>$correo,
            'telf'=>$telf,
            'fechaNac'=>$fechaNac
        );
        $this->db->insert('postulante');
    }
}