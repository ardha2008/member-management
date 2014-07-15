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
            
    }
    
    public function index($ref=null)
    {       
        if($ref != null) {
            $check_ref=$this->member->member_exist($ref);
            
            if($check_ref==true){
                $this->session->setValue('ref',$ref);
                $this->redirect('home');
            }else{
                $this->redirect('home');
            }             
        }
        
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
                $ref_data=array(
                    'username'=>$this->request->post('username'),
                    'ref'=>$this->session->getValue('ref'),
                );
                
                $ref_check=$this->model->refferal->new_ref($ref_data);
                
                if($ref_check == false){
                    exit('error');
                }
                
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
                $this->session->setValue('id',$get[0]->id);
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
      echo $this->resources->tools->getRandomString(11,false);   
    }
}