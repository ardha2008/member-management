<?php


namespace Controllers;
use Resources,Models, Libraries;


class MyFiles extends Resources\Controller{
    
    function __construct(){
        parent::__construct();
        
        $this->session = new Resources\Session;
        $this->request = new Resources\Request;
        $this->files = new Models\Files;
    
    }
    
    function index(){
        
        
        $data['title']='Files';
        $data['pages']='profil/files/list';
        
        $data['hasil']=$this->files->getfile();
        $this->output('home',$data);
    }
    
    function upload(){
        if(isset($_POST['upload'])){
            
            $this->upload= new Resources\Upload;
            
            $this->upload->setOption(array(
            'folderLocation'=>'files',
            'autoRename'=>true,
            ));
            
            $file=$this->upload->now($_FILES['files']);
            
            if($file){
                $result=$this->upload->getFileInfo();
                $file_name=$result['name'];
            }
            
            
            $files=array(
            'nama'=>$this->request->post('nama'),
            'deskripsi'=>$this->request->post('deskripsi'),
            'level'=>$this->request->post('level'),
            'path'=>$file_name,
            );
            
            $cek=$this->files->insert($files);
            if($cek==true){
                
            }else{
                
            }
        }
        
        $data['title']='Upload Files';
        $data['pages']='profil/files/upload';
        
        $data['hasil']=$this->files->getfile();
        $this->output('home',$data);
        
    }
    
}