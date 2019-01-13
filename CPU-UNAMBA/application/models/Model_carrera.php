<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_carrera extends CI_Model {
    
    function __construct() {
        parent::__construct();
    }

    public function index(){}

    public function listarSistemas()
    {
        $this->db->select('p.dni, p.nomPost, p.apePaterno, p.apeMaterno, p.telf, p.correo');
        $this->db->from('postulante p');
        $this->db->join('carrera c','p.idCarrera = c.idCarrera');
        
        //$this->db->where("nomCarrera","Ingenieria de Informatica y Sistemas" );
        $resultado = $this->db->get();

        return $resultado->result();
    }

    public function postulantes(){
        $this->db->select('idCarrera, nomCarrera');
        $this->db->from('carrera');

        $resultado = $this->db->get();
        return $resultado->result();
    }

    public function po()
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