<?php
class Usuario extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model("Usuario_model");
        $this->load->model("Rol_model");
        $this->load->model("Ciudad_model");
    }
    function index() {
        $data["usuario"] = $this->Usuario_model->list_all();
        $this->load->view("usuario/usuario_index", $data);
    }
    function nuevo() {
        $data['rol']=$this->Rol_model->list_roles();
        $data['ciudad']=$this->Ciudad_model->list_ciudades();
        $this->load->view("usuario/usuario_nuevo",$data);
    }
    public function add() {
        $nombre = $this->input->post('nombre');
        $apepat = $this->input->post('apepat');
        $apemat = $this->input->post('apemat');
        $ciudad_id = $this->input->post('ciudad_id');
        $user = $this->input->post('user');
        $pass = $this->input->post('pass');
        $rol_id = $this->input->post('rol_id');
        $this->Usuario_model->save($nombre, $apepat, $apemat,$ciudad_id,$user,$pass,$rol_id);
        redirect('usuario');
    }
    public function update() {
        $usuario_id=$this->input->post('usuario_id');
        $nombre = $this->input->post('nombre');
        $apepat = $this->input->post('apepat');
        $apemat = $this->input->post('apemat');
        $ciudad_id = $this->input->post('ciudad_id');
        $user = $this->input->post('user');
        $pass = $this->input->post('pass');
        $rol_id = $this->input->post('rol_id');
        $this->Usuario_model->edit($usuario_id,$nombre, $apepat, $apemat,$ciudad_id,$user,$pass,$rol_id);
        redirect('usuario');
    }
    public function edit($usuario_id) {
        $data['usuario']=$this->Usuario_model->find_by_id($usuario_id);
        $data['rol']=$this->Rol_model->list_roles();
        $data['ciudad']=$this->Ciudad_model->list_ciudades();
        $this->load->view("usuario/usuario_edit",$data);
    }
    public function delete($usuario_id) {
        $this->Usuario_model->delete($usuario_id);
        redirect('usuario');
    }
    public function view($usuario_id) {
        $data['usuario']=$this->Usuario_model->find_by_id($usuario_id);
        $this->load->view("usuario/usuario_view",$data);
    }
}
