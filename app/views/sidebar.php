<div class="col-md-4 column">
            
                
<?php 
    $this->output('forms/login') ;
    $this->output('errors/alert'); 
              
    if($this->resources->session->getValue('login')!=true){
        $this->output('forms/register') ;
    }else{
        $this->output('menu');
    }
    
    $this->output('changelog'); 
?>
		
  </div>