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
        $query=$this->db->select()->from('files')->where('username','=',$username,'AND')->where('`delete`','=','0')->getAll();
        return $query;
    }
    
    function delete_file($id){
        $this->db->where('username','=',$this->resources->session->getValue('username'),'AND');
        $this->db->where('id','=',$id);
        $query=$this->db->delete('files',array('delete'=>1));
    }
}