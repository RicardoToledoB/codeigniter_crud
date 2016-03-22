<?php

class Usuario_model extends CI_Model{
      function __construct() {
        parent::__construct();
        $this->load->database();
    }
    function list_all() {
        $query = $this->db->query("select * from usuario");
        $result = $query->result_object();
        $this->db->close();
        return $result;
    }
    function save($nombre,$apepat,$apemat){
        $this->db->query("insert into Usuario(nombre,apepat,apemat) values('".$nombre."','".$apepat."','".$apemat."')");
        $this->db->close();
    }
    
    function delete($usuario_id){
        $this->db->query("delete from Usuario where usuario_id='".$usuario_id."'");
        $this->db->close();
    }
    
    function edit($usuario_id,$nombre,$apepat,$apemat){
        $this->db->query("update Usuario set nombre='".$nombre."',apepat='".$apepat."',apemat='".$apemat."' where usuario_id='".$usuario_id."'");
        $this->db->close();
    }
    function find_by_id($usuario_id){
        $query = $this->db->query("select * from usuario where usuario_id='".$usuario_id."'");
        $result = $query->result_object();
        $this->db->close();
        return $result;
        
    }
}


