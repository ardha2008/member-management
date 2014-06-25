<?php $this->output('header'); ?>

<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="#">Member Management</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
					</ul>
					
                    
					
                    <ul class="nav navbar-nav navbar-right">
						<li><a href="#">@ardha</a></li>
					    <li><a href="<?php echo $this->location('home/logout') ?>">Logout</a></li>
                    </ul>
				</div>
				
			</nav>
            
			<div class="row clearfix">
				<div class="col-md-9 column">
					<?php $this->output('data'); ?>
				</div>
                
				<div class="col-md-3 column">
					<div class="list-group">
						 <a href="#" class="list-group-item active">Home</a>
						<div class="list-group-item">
							List header
						</div>
						<div class="list-group-item">
							<h4 class="list-group-item-heading">
								List group item heading
							</h4>
							<p class="list-group-item-text">
								...
							</p>
						</div>
						<div class="list-group-item">
							<span class="badge">14</span>Help
						</div> <a class="list-group-item active"><span class="badge">14</span>Help</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>