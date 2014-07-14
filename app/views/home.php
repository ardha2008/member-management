<?php 
$this->output('header'); 

    if($this->resources->session->getValue('login')==false){
        $this->output('content/home');
    }else{
        $this->output('content/profil');
    }
    
$this->output('sidebar');

$this->output('footer'); 
 
 ?>