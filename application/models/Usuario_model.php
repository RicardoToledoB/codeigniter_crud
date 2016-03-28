<?php

class Usuario_model extends CI_Model{
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    function list_all() {
        $query = $this->db->query("select * from usuario where estado='activo'");
        $result = $query->result_object();
        $this->db->close();
        return $result;
    }
    
    function save($nombre,$apepat,$apemat,$ciudad_id,$user,$pass,$rol_id){
        $this->db->query("insert into Usuario(nombre,apepat,apemat,ciudad_id,user,pass,estado,rol_id) values('".$nombre."','".$apepat."','".$apemat."','".$ciudad_id."','".$user."','".$pass."','activo','".$rol_id."')");
        $this->db->close();
    }
    
    function delete($usuario_id){
        $this->db->query("update Usuario set estado='pasivo' where usuario_id='".$usuario_id."'");
        $this->db->close();
    }
    
    function edit($usuario_id,$nombre,$apepat,$apemat,$ciudad_id,$user,$pass,$rol_id){
        $this->db->query("update Usuario set nombre='".$nombre."',apepat='".$apepat."',apemat='".$apemat."',ciudad_id='".$ciudad_id."',user='".$user."',pass='".$pass."',estado='activo',rol_id='".$rol_id."' where usuario_id='".$usuario_id."'");
        $this->db->close();
    }
    function find_by_id($usuario_id){
        $query = $this->db->query("select usuario.usuario_id,usuario.nombre,usuario.apepat,usuario.apemat,ciudad.nombre as ciudad,usuario.user,usuario.pass,usuario.estado,rol.tipo,usuario.rol_id,usuario.ciudad_id from Usuario,Ciudad,Rol where Usuario.ciudad_id=Ciudad.ciudad_id and Usuario.rol_id=Rol.rol_id and usuario.estado='activo' and Usuario.usuario_id='".$usuario_id."'");
        $result = $query->result_object();
        $this->db->close();
        return $result;
        
    }
    function list_roles(){
        $query=$this->db->query("select * from roles where estado='activo'");
        $result=$query->result_object();
        $this->db->close();
        return $result;
        
    }
    
}


