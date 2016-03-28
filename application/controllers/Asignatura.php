<?php
class Asignatura extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Asignatura_model');
        
    }
    function index() {
        $data["asignatura"] = $this->Asignatura_model->list_all();
        $this->load->view("asignatura/asignatura_index", $data);
    }
     public function nuevo(){
        $this->load->view('asignatura/asignatura_nuevo');
    }
    public function add(){
        $nombre = $this->input->post('nombre');
        $this->Asignatura_model->save($nombre);
        redirect('asignatura');
    }
    
    public function delete($asignatura_id){
        $this->Asignatura_model->delete($asignatura_id);
        redirect('asignatura');
    }
    
    public function update(){
        $asignatura_id=$this->input->post('asignatura_id');
        $nombre = $this->input->post('nombre');
        $this->Asignatura_model->edit($asignatura_id,$nombre);
        redirect('asignatura');
        
    }
    
    public function edit($asignatura_id){
        $data['asignatura']=$this->Asignatura_model->find_by_id($asignatura_id);
        $this->load->view("asignatura/asignatura_edit",$data);
        
    }
    public function view($asignatura_id){
        $data['asignatura']=$this->Asignatura_model->find_by_id($asignatura_id);
        $this->load->view("asignatura/asignatura_view",$data);
        
    }
}

