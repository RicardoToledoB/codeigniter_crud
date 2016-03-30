<?php

class Ciudad extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Ciudad_model');
        $this->load->library('session');
        if ($this->session->userdata('logueado')) {
            
        } else {
            redirect(base_url() . 'index.php/login');
        }
    }

    public function index() {
        $data['id'] = $this->session->userdata('id');
        $data['nombre'] = $this->session->userdata('nombre');
        $data['ciudad'] = $this->Ciudad_model->list_all();
        $this->load->view('ciudad/ciudad_index', $data);
    }

    public function nuevo() {
        $data['id'] = $this->session->userdata('id');
        $data['nombre'] = $this->session->userdata('nombre');
        $this->load->view('ciudad/ciudad_nuevo', $data);
    }

    public function add() {
        $nombre = $this->input->post('nombre');
        $this->Ciudad_model->save($nombre);
        redirect('ciudad');
    }

    public function delete($ciudad_id) {
        $this->Ciudad_model->delete($ciudad_id);
        redirect('ciudad');
    }

    public function update() {
        $ciudad_id = $this->input->post('ciudad_id');
        $nombre = $this->input->post('nombre');
        $this->Ciudad_model->edit($ciudad_id, $nombre);
        redirect('ciudad');
    }

    public function edit($ciudad_id) {
        $data['id'] = $this->session->userdata('id');
        $data['nombre'] = $this->session->userdata('nombre');
        $data['ciudad'] = $this->Ciudad_model->find_by_id($ciudad_id);
        $this->load->view("ciudad/ciudad_edit", $data);
    }

    public function view($ciudad_id) {
        $data['id'] = $this->session->userdata('id');
        $data['nombre'] = $this->session->userdata('nombre');
        $data['ciudad'] = $this->Ciudad_model->find_by_id($ciudad_id);
        $this->load->view("ciudad/ciudad_view", $data);
    }

}
