<?php

class Ciudad extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('Ciudad_model');
        
    }
    public function index(){
        $data['ciudad']=$this->load->Ciudad_model->list_all();
        $this->load->view('ciudad/ciudad_index',$data);
        
    }
    
}
