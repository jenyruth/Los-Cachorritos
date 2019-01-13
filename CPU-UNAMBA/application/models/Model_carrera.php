<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_carrera extends CI_Model {
    
    function __construct() {
        parent::__construct();
    }

    public function index(){}

    public function listarPostulantes($id)
    {
        //listar los postulantes de la carrera Ing. Sistemas

        //$this->db->select('');
        $this->db->from('postulante p');
        $this->db->join('carrera c','p.idCarrera = c.idCarrera');
        $this->db->join('colegio co','p.idColegio = co.idColegio');
        $this->db->join('voucher v','p.idVoucher = v.idVoucher');
        $this->db->join('distritos d','p.idDistrito = d.idDistrito');
        $this->db->where("p.idCarrera","$id");
        $resultado = $this->db->get();

        return $resultado->result();
    }

    public function numeroPostulante()
    {
        $this->db->select('count(*) as Numero, c.nomCarrera');
        $this->db->from('postulante p');
        $this->db->join('carrera c','p.idCarrera = c.idCarrera');
        $this->db->group_by('p.idCarrera');
        //$this->db->where("p.idCarrera = '1'");
        $resultado = $this->db->get();
        return $resultado->result();


    }

//falta terminar
    public function editarpostulante($id)
    {
        $this->db->from('postulante');
        $this->db->where('idpostulante','$id');
        $resultado = $this->db->get();
        return $resultado->row();
    }

    public function update($id,$data)
    {
        $this->db->where('idpostulante','$id');
        return $this->db->update('postulante',$data);
    }


}