<?php

class Asignatura extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('Asignatura_model');
        
    }
    function index() {
        $data["asignatura"] = $this->Asignatura_model->list_all();
        $this->load->view("asignatura/asignatura_index", $data);
    }
    public function nuevo(){
        $this->load->view("asignatura/asginatura_nuevo");
    }
    public function add(){
        
    }
    public function delete(){
        
    }
    public function update(){
        
    }
    public function edit(){
        
    }
    public function view(){
        
        
    }
}

