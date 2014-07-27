<?php 
$this->output('header'); 

    if($pages=='home'){
        $this->output('content/home');
    }
    
    if($pages=='profile/index')$this->output('content/profile/index');
    if($pages=='profile/ref')$this->output('content/profile/ref');
    
    if($pages=='profil/account')$this->output('content/profile/account');
    
    if($pages=='profil/files/list')$this->output('content/profile/file_list');
    if($pages=='profil/files/upload')$this->output('content/profile/files');
    if($pages=='profil/files/upload/edit')$this->output('content/profile/files');
    
$this->output('sidebar');

$this->output('footer'); 
 
 ?>