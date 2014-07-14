<?php

namespace Controllers;
use Resources,Models, Libraries;


class Profile extends Resources\Controller{
    
    function __construct(){
        parent::__construct();
        
        $this->session= new Resources\Session;
        $this->request= new Resources\Request;
        $this->member= new Models\Member;
        $this->hash= new Libraries\panadaHash;
        
        $this->files= new Models\Files;
        
        if($this->session->getValue('login')!=true) $this->redirect('home');

    }
    
        
    function index(){

        
        $data['pages']='profile/index';
        $data['title']='Dashboard';
        
        $check=$this->model->member->detail($this->session->getValue('email'));
        if($check[0]->nama==null || $check[0]->nama == '-' || $check[0]->alamat==null) $this->redirect('profile/account');
        
        $this->output('home',$data);
    
    }
    
    function account(){
        
        $data['message']='';
        
        if(isset($_POST['update'])){
            $update=array(
            'nama'=>$this->resources->request->post('nama',FILTER_SANITIZE_STRING),
            'alamat'=>$this->resources->request->post('alamat',FILTER_SANITIZE_STRING),
            'email'=>$this->resources->request->post('email',FILTER_SANITIZE_STRING),
            );
            
            $update_check=$this->models->member->update_member($this->session->getValue('id'),$update);
            if($update_check==true){
                $data['message']='sukses_update';
            }else{
                exit('gagal');
            }
        }
        
        $data['title']= 'Edit Account';
        $data['pages']= 'profil/account' ;
        
        $data['detail']=$this->models->member->detail($this->session->getValue('username'));
        $this->output('home',$data);
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

    
}