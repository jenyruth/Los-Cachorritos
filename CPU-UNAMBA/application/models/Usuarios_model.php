<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

	public function getUsuarios(){
		$this->db->select("u.*,r.nombre as rol");
		$this->db->from("usuarios u");
		$this->db->join("roles r","u.rol_id = r.id");
		$this->db->where("u.estado","1");
		$resultados = $this->db->get();
		return $resultados->result();
    }
    
    public function getUsuario($id){
		$this->db->select("u.*,r.nombre as rol");
		$this->db->from("usuarios u");
		$this->db->join("roles r","u.rol_id = r.id");
		$this->db->where("u.id",$id);
		$this->db->where("u.estado","1");
		$resultado = $this->db->get();
		return $resultado->row();
    }
    
    public function getRoles(){
		$resultados = $this->db->get("roles");
		return $resultados->result();
	}

