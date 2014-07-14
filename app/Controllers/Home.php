<?php
namespace Controllers;
use Resources, Models, Libraries;

class Home extends Resources\Controller
{   
    
    function __construct(){
        parent::__construct();
        
        $this->request = new Resources\Request;
        $this->member = new Models\Member;
        $this->session = new Resources\Session;
        $this->hash= new Libraries\panadaHash;
        
        if(isset($_GET['ref'])) $this->session->setValue('ref',$_GET['ref']);
            
    }
    
    public function index($ref=null)
    {       
        if(isset($_POST['register'])){
            $data=array(
            'id'=>uniqid(),
            'username'=>$this->request->post('username'),
            'email'=>$this->request->post('email'),
            'password'=>$this->hash->output($this->request->post('password')),
            );
            
            if($this->request->post('password') != $this->request->post('repassword')){
                
                $data['message']='password_beda';
                
            }else{
                $register=$this->member->register($data); 
                
                if($register==true){
                    $data['message']='register';
                }   
            }
        }
        
        if(isset($_POST['login'])){
            $email=$this->request->post('email');
            $password=$this->hash->output($this->request->post('password'));
            
            $check=$this->member->login($email,$password);
            if($check==true){
                $get=$this->member->detail($email);
                
                $this->session->setValue('username',$get[0]->username);
                $this->session->setValue('email',$get[0]->email);
                $this->session->setValue('level',$get[0]->level);
                $this->session->setValue('nama',$get[0]->email);
                $this->session->setValue('login',true);
                $this->redirect('profile');
            }else{
                $data['message']='login_failed';
            }
        }
        
        $data['title'] = 'Home';
        $data['pages'] = 'home';      
        $this->output('home', $data);
    }
    
    function logout(){
        $this->session->destroy();
        $this->redirect('home');
    }   
    
    function tes(){
        
        $this->upload = new Resources\Upload;
        $data['messages'] = '';
        
        if(isset($_POST['upload'])){
            $this->upload->setOption(array(
            'folderLocation'=>'files',
            'autoRename'=>true,
            ));
            
            $file=$this->upload->now($_FILES['files']);
            if($file){
                $data['messages'] = $this->upload->getFileInfo();
            }else{
                $data['messages'] = $this->upload->getError('message');
            }
        }
        
        $this->output('tes',$data);
    }
}