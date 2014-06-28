<?php $this->output('header'); ?>

<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="#">Member Management</a>
				</div>
				
                
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<?php if($this->session->getValue('level')>3){?>
                    <ul class="nav navbar-nav">
                        <li><a href="#">Manage Files</a></li>
                        <li><a href="#">Manage Member</a></li>
					</ul>
					<?php } ?>
                    
                    <ul class="nav navbar-nav navbar-right">
						<li><a href="#">@ardha</a></li>
					    <li><a href="<?php echo $this->location('home/logout') ?>">Logout</a></li>
                    </ul>
				</div>
				
			</nav>
            <?php if($this->session->getValue('level')>3){?>
                <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">Manage Files</h3>
                  </div>
                  <div class="panel-body">
                  <?php $this->output('data/files') ?>
                  </div>
                </div>
                </div>
            </div>
            <?php } ?>
            
			<div class="row clearfix">
	            
				<div class="col-md-4 column">
					<div class="list-group">
						 <a href="#" class="list-group-item active">Home</a>
						<div class="list-group-item">
							List header
						</div>
					</div>
				</div>
    
                <div class="col-md-8 column">
                    <?php $this->output('data/list_files') ?>
                </div>
                
			</div>
		</div>
	</div>
</div>