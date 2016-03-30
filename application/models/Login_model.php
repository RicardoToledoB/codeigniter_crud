<?php

class Login_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function validar($username, $password) {
        $query = $this->db->query("select usuario.usuario_id,usuario.user,usuario.pass,rol.tipo,usuario.estado from usuario,rol  where usuario.rol_id=rol.rol_id and usuario.user='" . $username . "' and usuario.estado='activo'");
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
