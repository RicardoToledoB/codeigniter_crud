<?php

class Usuario extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
         //$this->load->helper('form');
        $this->load->model("Usuario_model");
    }
    function index() {
        $data["usuario"] = $this->Usuario_model->list_all();
        $this->load->view("usuario_index", $data);
    }

    function nuevo() {
        $this->load->view("usuario_nuevo");
    }
    
    public function add() {
        $nombre = $this->input->post('nombre');
        $apepat = $this->input->post('apepat');
        $apemat = $this->input->post('apemat');
        $this->Usuario_model->save($nombre, $apepat, $apemat);
        redirect('usuario');
    }
    public function update() {
        $usuario_id=$this->input->post('usuario_id');
        $nombre = $this->input->post('nombre');
        $apepat = $this->input->post('apepat');
        $apemat = $this->input->post('apemat');
        $this->Usuario_model->edit($usuario_id,$nombre, $apepat, $apemat);
        redirect('usuario');
    }

    public function edit($usuario_id) {
        $data['usuario']=$this->Usuario_model->find_by_id($usuario_id);
        $this->load->view("usuario_edit",$data);
        
        
    }

    public function delete($usuario_id) {
        $this->Usuario_model->delete($usuario_id);
        redirect('usuario');
    }

    public function view($usuario_id) {
        $data['usuario']=$this->Usuario_model->find_by_id($usuario_id);
        $this->load->view("usuario_view",$data);
    }

}
