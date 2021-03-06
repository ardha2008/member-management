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
        
        $this->limit= new Libraries\Limiter;
        $check=$this->model->member->detail($this->session->getValue('email'));
        if($check[0]->nama==null || $check[0]->nama == '-' || $check[0]->alamat==null) $this->redirect('profile/account');
        
        $data['seluruh']=$this->model->files->get_all_files($this->session->getValue('level'));
        
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
        
        if(isset($_POST['change'])){
            
            $check=$this->member->detail($this->session->getValue('email'));
            
            $oldpassword=$check[0]->password;
            
            if($this->hash->output($_POST['oldpassword']) != $oldpassword) {
                $data['message']='password_lama';
            }else{
                
                if($_POST['newpassword'] != $_POST['renewpassword']){
                    $data['message']='password_beda';
                }else{
                    $data_password=array(
                    'password'=>$this->hash->output($this->request->post('newpassword')),
                    );
                    $update_password=$this->member->update_member($this->session->getValue('id'),$data_password);
                
                    if($update_password==true){
                        $data['message']='update_password';
                    }
                }
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
    
    function ref(){
        $data['title'] = 'My Refferal';
        $data['pages'] = 'profile/ref';
        
        $id=$this->session->getValue('username');
        
        $data['seluruh'] = $this->models->refferal->get_ref($id);
        $this->output('home',$data);
    }

    
}