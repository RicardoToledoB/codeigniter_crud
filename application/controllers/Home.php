<?php
class Home extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        if ($this->session->userdata('logueado')) {
            
        } else {
            redirect(base_url() . 'index.php/login');
        }
        
    }
    
    public function index(){
        $data['id'] = $this->session->userdata('id');
        $data['nombre'] = $this->session->userdata('nombre');
        $this->load->view('home_index',$data);
        
        
    }
    
}

