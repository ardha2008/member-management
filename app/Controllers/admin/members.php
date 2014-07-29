<?php

namespace Controllers\admin;
use Resources, Models, Libraries;

class Members extends Resources\Controller{
    
    function __construct(){
        parent::__construct();        
        if($this->resources->session->getValue('level') != 4) $this->redirect('',302);
    }
    
    function index(){
        $data['title'] =  'Manage Member';
        $data['pages'] =  'admin/members/index';
        
        $data['seluruh']=$this->models->member->all();
        
        $this->output('home',$data);   
    }
    
    function edit($id=null){
        if($id==null) $this->redirect('admin/members');
        
        $data['title'] = "Edit $id";
        $data['pages'] = 'admin/members/edit';
        
        $this->output('home',$data);
    }
    
}