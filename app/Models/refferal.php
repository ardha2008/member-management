<?php 

namespace Models;
use Resources;

class Refferal {
    
    function new_ref($data){
        $cek=$this->resources->database->insert('refferal',$data);
        if($cek){
            return true;
        }else{
            return false;
        }
    }
    
    function get_ref($id){
        $query=$this->resources->database->select()->from('refferal')->where('ref','=',$id)->getAll();
        return $query;
    }
}