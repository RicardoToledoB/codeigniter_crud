<?php

class Usuario extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model("Usuario_model");
        $this->load->model("Rol_model");
        $this->load->model("Ciudad_model");
        if ($this->session->userdata('logueado')) {
            
        } else {
            redirect(base_url() . 'index.php/login');
        }
    }

    function index() {
        $data['id'] = $this->session->userdata('id');
        $data['nombre'] = $this->session->userdata('nombre');
        $data["usuario"] = $this->Usuario_model->list_all();
        $this->load->view("usuario/usuario_index", $data);
    }

    function nuevo() {
        $data['id'] = $this->session->userdata('id');
        $data['nombre'] = $this->session->userdata('nombre');
        $data['rol'] = $this->Rol_model->list_all();
        $data['ciudad'] = $this->Ciudad_model->list_all();
        $this->load->view("usuario/usuario_nuevo", $data);
    }

    public function add() {
        $nombre = $this->input->post('nombre');
        $apepat = $this->input->post('apepat');
        $apemat = $this->input->post('apemat');
        $ciudad_id = $this->input->post('ciudad_id');
        $user = $this->input->post('user');
        $pass = $this->input->post('pass');
        $rol_id = $this->input->post('rol_id');
        $this->Usuario_model->save($nombre, $apepat, $apemat, $ciudad_id, $user, $pass, $rol_id);
        redirect('usuario');
    }

    public function update() {
        $usuario_id = $this->input->post('usuario_id');
        $nombre = $this->input->post('nombre');
        $apepat = $this->input->post('apepat');
        $apemat = $this->input->post('apemat');
        $ciudad_id = $this->input->post('ciudad_id');
        $user = $this->input->post('user');
        $pass = $this->input->post('pass');
        $rol_id = $this->input->post('rol_id');
        $this->Usuario_model->edit($usuario_id, $nombre, $apepat, $apemat, $ciudad_id, $user, $pass, $rol_id);
        redirect('usuario');
    }

    public function edit($usuario_id) {
        $data['id'] = $this->session->userdata('id');
        $data['nombre'] = $this->session->userdata('nombre');
        $data['usuario'] = $this->Usuario_model->find_by_id($usuario_id);
        $data['rol'] = $this->Rol_model->list_all();
        $data['ciudad'] = $this->Ciudad_model->list_all();
        $this->load->view("usuario/usuario_edit", $data);
    }

    public function delete($usuario_id) {
        $this->Usuario_model->delete($usuario_id);
        redirect('usuario');
    }

    public function view($usuario_id) {
        $data['id'] = $this->session->userdata('id');
        $data['nombre'] = $this->session->userdata('nombre');
        $data['usuario'] = $this->Usuario_model->find_by_id($usuario_id);
        $this->load->view("usuario/usuario_view", $data);
    }

}
