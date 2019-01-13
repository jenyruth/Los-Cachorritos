<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_carrera extends CI_Model {
    
    function __construct() {
        parent::__construct();
    }

    public function index(){}

    public function listarSistemas()
    {
        //listar los postulantes de la carrera Ing. Sistemas

        //$this->db->select('');
        $this->db->from('postulante p');
        $this->db->join('carrera c','p.idCarrera = c.idCarrera');
        $this->db->where("p.idCarrera","1" );
        $resultado = $this->db->get();

        return $resultado->result();
    }

    public function numeroPostulante()
    {
        $this->db->select('count(*) as Numero, c.nomCarrera');
        $this->db->from('postulante p');
        $this->db->join('carrera c','p.idCarrera = c.idCarrera');
        $this->db->where("p.idCarrera = '1'");

        $resultado = $this->db->get();
        return $resultado->result();
    }

}

/*select po.dni, po.nomPost, po.apePaterno, po.apeMaterno, po.telf, po.correo
from postulante po inner join carrera ca on po.idCarrera = ca.idCarrera
where nomCarrera like 'Ingenieria de Informatica y Sistemas%'*/