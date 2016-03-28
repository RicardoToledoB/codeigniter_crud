<?php
class Asignatura_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
        
    }
    
    public function list_all(){
        $query=$this->db->query("select * from Asignatura where estado='activo'");
        $result=$query->result_object();
        $this->db->close();
        return $result;
    }
     public function save($nombre){
        $this->db->query("insert into Asignatura(nombre,estado) values('".$nombre."','activo')");
        $this->db->close();
            
    }
    public function delete($asignatura_id){
        $this->db->query("update Asignatura set estado='pasivo' where asignatura_id='".$asignatura_id."'");
        $this->db->close();
        
    }
    public function edit($asignatura_id,$nombre){
        $this->db->query("update Asignatura set nombre='".$nombre."' where asignatura_id='".$asignatura_id."'");
        $this->db->close();
            
    }
    
    public function find_by_id($asignatura_id){
        $query=$this->db->query("select * from Asignatura where estado='activo' and asignatura_id='".$asignatura_id."'");
        $result=$query->result_object();
        $this->db->close();
        return $result;
    }
}
