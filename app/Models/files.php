<?php 

namespace Models;
use Resources;

class Files {
    
    function __construct(){
        $this->db= new Resources\Database;
    }
    
    function insert($data){
        $insert=$this->db->insert('files',$data);
        if($insert){
            return true;
        }else{
            return false;
        }
    }
    
    function getfile($username){
        $query=$this->db->select()->from('files')->where('username','=',$username)->getAll();
        return $query;
    }
}