<?php
class Site_model extends CI_Model{

    public function login(){

    }

    public function insertProfesor(){
        $array=array(
            "nombre"=>"mat",
            "apellido"=>"mat",
            "curso"=>4
        );
        $this->db->insert("profesores",$array);
    }

    public function getProfesores(){
        $this->db->select("*");
        $this->db->from("profesores");
        //$this->db->where("id",1);
        $query=$this->db->get();
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return null;
        }
    }

    public function updateProfesor(){
        $array=array(
            "nombre"=>"rena",
            "apellido"=>"amor",
            "curso"=>1
        );
        $this->db->where("id=1");
        $this->db->update("profesores",$array);
    }
}
?>