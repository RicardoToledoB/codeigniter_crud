<?php

class Login_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function validar($username, $password) {
        $query = $this->db->query("select * from usuario where user='" . $username . "' and estado='activo'");
        $result = $query->result_object();
        $this->db->close();
        foreach ($result as $row) {
            if ($row->pass == $password) {
                return $result;
            } else {
                return false;
            }
        }
    }

}
