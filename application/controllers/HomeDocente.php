<?php

class HomeDocente extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('session');
       
        if ($this->session->userdata('logueado')) {
            if($this->session->userdata('tipo')=='docente'){
                
            }else{
                redirect(base_url().'index.php/error403');
            }
        } else {
            redirect(base_url() . 'index.php/login');
        }
    }
    public function index(){
        $data['id'] = $this->session->userdata('id');
        $data['nombre'] = $this->session->userdata('nombre');
        $data['tipo']=$this->session->userdata('tipo');
        $this->load->view('docente/docente_index',$data);
    }
}

