<?php


namespace Controllers;
use Resources,Models, Libraries;


class MyFiles extends Resources\Controller{
    
    function __construct(){
        parent::__construct();
        
        $this->session = new Resources\Session;
        $this->request = new Resources\Request;
        $this->files = new Models\Files;
        
        if($this->session->getValue('login')!=true) $this->redirect('home');
    }
    
    function index(){
        
        $this->limiter= new Libraries\Limiter;
        
        $data['title']='Files';
        $data['pages']='profil/files/list';
        
        $username=$this->session->getValue('username');
        $data['seluruh']=$this->files->getfile($username);
        $this->output('home',$data);
    }
    
    function upload(){
        $data['message']='';
        
        if(isset($_POST['upload'])){
            
            $this->upload= new Resources\Upload;
            
            
            $this->upload->setOption(array(
            'folderLocation'=>'files/uploads/'.date('Y').'/'.date('m').'/',
            'autoRename'=>true,
            'autoCreateFolder' => true,
		    'permittedFileType' => 'pdf',
            ));
            
            $file=$this->upload->now($_FILES['files']);
            
            if($file){
                $result=$this->upload->getFileInfo();
                $file_name=$result['folder'].$result['name'];
            }
            
            
            $files=array(
            'id'=>$this->resources->tools->getRandomString(20,false),
            'username'=>$this->resources->session->getValue('username'),
            'nama'=>$this->request->post('nama'),
            'deskripsi'=>$this->request->post('deskripsi'),
            'level'=>1,
            'path'=>$file_name,
            );
            
            $cek=$this->files->insert($files);
            if($cek==true){
                $data['message']='sukses_upload';
            }else{
                exit('gagal');
            }
        }
        
        $data['title']='Upload Files';
        $data['pages']='profil/files/upload';
        
        $this->output('home',$data);
        
    }
    
    function delete($id){
        $this->models->files->delete_file($id);
        $this->redirect('myfiles');
    }
    
    function edit($id=null){
        if($id==null)$this->redirect('myfiles');
        
        $data['seluruh']=$this->models->files->getone($id,$this->resources->session->getValue('username'));
        
        $data['title']= "Edit ";
        $data['pages']= 'profil/files/upload/edit';
        $this->output('home',$data);
    }
    
    function detail($id=null){
        if($id==null)$this->redirect('home');
        
        $data['title']= "Detail ";
        $data['pages']= 'myfiles/detail';
        
        $data['seluruh']= $this->models->files->get_detail($id);
        
        $this->output('home',$data);
    }
    
}