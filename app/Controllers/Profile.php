<?php

namespace Controllers;
use Resources,Models;


class Profile extends Resources\Controller{
    
    function __construct(){
        parent::__construct();
        
        $secreteToken = 'JYGGdyw732626487HGhjdasgyugy786832984askdjasldjasld7623';
        $this->session= new Resources\Session;
        $this->request= new Resources\Request;
        $this->crypt = new Resources\Encryption($secreteToken);
        $this->member= new Models\Member;
        
        if($this->session->getValue('login')!=true) $this->redirect('home');

    }
    
    function delete($id=null){
        if($id==null) $this->redirect('profile');
        
        $cek=$this->member->delete($id);
        
        if($cek==true){
            $this->redirect('profile');
        }else{
            exit('error');
        }
    }
    
    public function edit($id=null){
        
        if($id==null) $this->redirect('profile');
        
        $data['edit']=$this->member->one($id);
        $data['title']='Profile';
        $data['hasil']=$this->member->all();
        
        if(isset($_POST['update'])){
            $update=array(
            'nama'=>$this->request->post('nama'),
            'email'=>$this->request->post('email'),
            'alamat'=>$this->request->post('alamat'),
            'level'=>$this->request->post('level')
            );
            
            $cek=$this->member->update_member($id,$update);
            if($cek==true){
                $this->redirect('profile/edit/'.$id);
            }
        }

        $this->output('profile',$data);

    }
    
    function index(){
        $email=$this->session->getValue('email');
        
        if(isset($_POST['simpan'])){
            $data=array(
            'nama'=>$this->request->post('nama'),
            'password'=>$this->crypt->encrypt('1234'),
            'email'=>$this->request->post('email'),
            'alamat'=>$this->request->post('alamat'),
            'level'=>$this->request->post('level')
            );
            
            $query=$this->member->register($data);
            if(!$query){
                exit('error');
            }            
        }
        
        if(isset($_POST['update'])){
            $data=array(
            'nama'=>$this->request->post('nama'),
            'email'=>$this->request->post('email'),
            'alamat'=>$this->request->post('alamat'),
            'level'=>$this->request->post('level')
            );
            
            $query=$this->member->update($data);
            if(!$query){
                exit('error');
            }            
        }
        
        
        
        $data['title']='Profile';
        $data['hasil']=$this->member->all();
        
        $this->output('profile',$data);
    
    }
    
    function tes(){
        echo $this->session->getValue('email');
    }
}