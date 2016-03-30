<?php

class Asignatura extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Asignatura_model');
        $this->load->library('session');
        /*if ($this->session->userdata('logueado')) {
            
        } else {
            redirect(base_url() . 'index.php/login');
        }*/
         if ($this->session->userdata('logueado')) {
            if($this->session->userdata('tipo')=='administrador'){
                
            }else{
                redirect(base_url().'index.php/error403');
            }
        } else {
            redirect(base_url() . 'index.php/login');
        }
        
    }

    function index() {
        $data['id'] = $this->session->userdata('id');
        $data['nombre'] = $this->session->userdata('nombre');
        $data['tipo']=$this->session->userdata('tipo');
        $data["asignatura"] = $this->Asignatura_model->list_all();
        $this->load->view("asignatura/asignatura_index", $data);
    }

    public function nuevo() {
        $data['id'] = $this->session->userdata('id');
        $data['nombre'] = $this->session->userdata('nombre');
        $data['tipo']=$this->session->userdata('tipo');
        $this->load->view('asignatura/asignatura_nuevo',$data);
    }

    public function add() {
        $nombre = $this->input->post('nombre');
        $this->Asignatura_model->save($nombre);
        redirect('asignatura');
    }

    public function delete($asignatura_id) {
        $this->Asignatura_model->delete($asignatura_id);
        redirect('asignatura');
    }

    public function update() {
        $asignatura_id = $this->input->post('asignatura_id');
        $nombre = $this->input->post('nombre');
        $this->Asignatura_model->edit($asignatura_id, $nombre);
        redirect('asignatura');
    }

    public function edit($asignatura_id) {
        $data['id'] = $this->session->userdata('id');
        $data['nombre'] = $this->session->userdata('nombre');
        $data['tipo']=$this->session->userdata('tipo');
        $data['asignatura'] = $this->Asignatura_model->find_by_id($asignatura_id);
        $this->load->view("asignatura/asignatura_edit", $data);
    }

    public function view($asignatura_id) {
        $data['id'] = $this->session->userdata('id');
        $data['nombre'] = $this->session->userdata('nombre');
        $data['tipo']=$this->session->userdata('tipo');
        $data['asignatura'] = $this->Asignatura_model->find_by_id($asignatura_id);
        $this->load->view("asignatura/asignatura_view", $data);
    }

}
