<?php
class Rol_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
   
    }
    public function list_all(){
        $query->db->query("select * from Rol where estado='activo'");
        $request->$query->get_object();
        $this->db->close();
        return $request;
   
    }
    function list_roles(){
        $query=$this->db->query("select * from rol where estado='activo'");
        $result=$query->result_object();
        $this->db->close();
        return $result;
        
    }
}

