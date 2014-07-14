<?php
namespace Models;
use Resources;

class Member {

    
    public function __construct(){
        
        $this->db = new Resources\Database;
    }
    
    function register($data){
        $insert=$this->db->insert('member',$data);
        
        if($insert){
            return true;
        }else{
            return false;   
        }    
    
    }
    
    function login($email,$password){
        $query=$this->db->row("select count(*) as hasil from member where email='$email' and password='$password' or username='$email' and password='$password'");
        //$this->db->select()->from($table)->where('email','=',$email,'and')->where('password','=',$password)->getOne();
        if($query->hasil==1){
            return true;
        }else{
            return false;
        }
    }
    
    function detail($email){
        $query=$this->db->select()->from('member')->where('email','=',$email,'or')->where('username','=',$email)->getAll();
        return $query;
    }
    
    function all(){
        $query=$this->db->select()->from('member')->orderBy('id', 'DESC')->getAll();
        return $query;
    }
    
    function one($id){
        $query=$this->db->select()->from('member')->where('id','=',$id)->getAll();
        return $query;
    }
    
    function update_member($id,$data){
        $query=$this->db->update('member',$data,array('id'=>$id));
        if($query){
            return true;
        }else{
            return false;
        }
    }
    
    function delete($id){
        $query = $this->db->delete('member', array('id' => $id));
        
        if($query){
            return true;
        }else{
            return false;
        }
    }

}