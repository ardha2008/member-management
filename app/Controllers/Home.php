<?php
namespace Controllers;
use Resources, Models;

class Home extends Resources\Controller
{   
    
    function __construct(){
        parent::__construct();
        
        $secreteToken = 'JYGGdyw732626487HGhjdasgyugy786832984askdjasldjasld7623';
        $this->crypt = new Resources\Encryption($secreteToken);
        $this->request = new Resources\Request;
        $this->member = new Models\Member;
        $this->session = new Resources\Session;
            
    }
    
    public function index()
    {       
        if(isset($_POST['register'])){
            $data=array(
            'email'=>$this->request->post('email'),
            'password'=>$this->crypt->encrypt($this->request->post('password')),
            );
            
           $register=$this->member->register($data); 
           if($register==true){
            $data['message']='register';
           }
        }
        
        if(isset($_POST['login'])){
            $email=$this->request->post('email');
            $password=$this->crypt->encrypt($this->request->post('password'));
            
            $check=$this->member->login($email,$password);
            if($check==true){
                $get=$this->member->detail($email);
                $this->session->setValue('email',$get[0]->email);
                $this->session->setValue('level',$get[0]->level);
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
}