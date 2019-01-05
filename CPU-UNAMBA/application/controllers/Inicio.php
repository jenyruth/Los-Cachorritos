<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {
   
    public function __construct() {
        parent::__construct();
        
    }

    public function index() {
        $this->load->view('layouts/head');
        $this->load->view('layouts/header');
        $this->load->view('layouts/carousel');
        $this->load->view('layouts/conteiner');
        $this->load->view('layouts/footer');
    }
}