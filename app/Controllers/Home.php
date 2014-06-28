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
        $this->hash= new Libraries\Hash;
            
    }
    
    public function index()
    {       
        if(isset($_POST['register'])){
            $data=array(
            'email'=>$this->request->post('email'),
            'password'=>$this->hash->Password($this->request->post('password')),
            );
            
           $register=$this->member->register($data); 
           if($register==true){
            $data['message']='register';
           }
        }
        
        if(isset($_POST['login'])){
            $email=$this->request->post('email');
            $password=$this->hash->Password($this->request->post('password'));
            
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
    
    function tes(){
        echo base64_encode('ardha');
    }
}