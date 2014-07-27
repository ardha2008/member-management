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
        $query=$this->db->select()->from('files')->where('username','=',$username,'AND')->where('`delete`','=','0')->orderBy('tanggal','DESC')->getAll();
        return $query;
    }
    
    function delete_file($id){
        $this->db->where('username','=',$this->resources->session->getValue('username'),'AND');
        $this->db->where('id','=',$id);
        $query=$this->db->update('files',array('`delete`'=>1));
    }
    
    function get_all_files($level){
        $query=$this->db->select()->from('files')->where('`delete`','=','0','AND')->where('level','<=',$level)->orderBy('tanggal','DESC')->getAll();
        return $query;
    }
    
    function getone($id,$username){
        $query=$this->db->select()->from('files')->where('id','=',$id,'AND')->where('username','=',$username)->getOne();
        return $query;
    }
    
    function get_detail($id){
        $query=$this->db->select()->from('files')->where('id','=',$id)->getAll();
        return $query;
    }
}