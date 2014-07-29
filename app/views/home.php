<?php 
$this->output('header'); 

    if($pages=='home'){
        $this->output('content/home');
    }
    
    if($pages=='profile/index')$this->output('content/profile/index');
    if($pages=='profile/ref')$this->output('content/profile/ref');
    if($pages=='profil/account')$this->output('content/profile/account');
    
    if($pages=='myfiles/detail')$this->output('content/myfiles/detail');
    if($pages=='myfiles/index')$this->output('content/myfiles/index');
    if($pages=='myfiles/upload')$this->output('content/myfiles/files');
    if($pages=='myfiles/edit')$this->output('content/myfiles/files');
    
    if($pages=='admin/members/index') $this->output('content/admin/members/index');
    
$this->output('sidebar');

$this->output('footer'); 
 
 ?>