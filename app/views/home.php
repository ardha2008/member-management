<?php 
$this->output('header'); 

    if($pages=='home'){
        $this->output('content/home');
    }
    
    if($pages=='profile/index')$this->output('content/profile/index');
    
    if($pages=='profil/account')$this->output('content/profile/account');
    
    if($pages=='profil/files/list')$this->output('content/profile/file_list');
    if($pages=='profil/files/upload')$this->output('content/profile/files');
    
$this->output('sidebar');

$this->output('footer'); 
 
 ?>