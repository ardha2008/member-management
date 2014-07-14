<div class="col-md-4 column">
            
                
<?php 
    $this->output('forms/login') ;
    $this->output('errors/alert'); 
              
    if($this->resources->session->getValue('login')!=true)$this->output('forms/register');
    
    $this->output('changelog'); 
?>
		
  </div>