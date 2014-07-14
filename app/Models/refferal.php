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
}