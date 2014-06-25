<?php $this->output('header'); ?>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<h3 class="text-right">
				h3. Lorem ipsum dolor sit amet.
			</h3>
			<div class="jumbotron well">
				<h1>
					Hello, world!
				</h1>
				<p>
					This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.
				</p>
				<p>
					<a class="btn btn-primary btn-large" href="#">Learn more</a>
				</p>
			</div>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-6 column">
			<div class="row">
				<div class="col-md-12">
					<div class="thumbnail">
						<img alt="300x200" src="http://lorempixel.com/600/200/sports" />
						<div class="caption">
							<h3>
								Thumbnail label
							</h3>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
							<p>
								<a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 column">
            
            <?php if(isset($message) && $message == 'login_failed'){?>
                <div class="alert alert-danger">
                    <strong>Email dan password tidak cocok</strong>
                </div>
            <?php unset($message); } ?>
			
            <div class="tabbable" id="tabs-4825">
                <ul class="nav nav-tabs">
					<li class="active"><a href="#register" data-toggle="tab">REGISTER</a></li>
					<li><a href="#login" data-toggle="tab">LOGIN</a></li>
				</ul>
                
				<div class="tab-content">
					
                    <div class="tab-pane active" id="register">
						<p>
                            <fieldset>
                                <?php if(isset($message) && $message == 'register'){?>
                                    <div class="alert alert-success">
                                        Berhasil melakukan registrasi
                                    </div>
                                <?php unset($message); } ?>
                                
                                <p>Silahkan isi form di bawah ini dengan baik dan benar</p>
                                <hr />
                                <?php $this->output('forms/register');?>
                            </fieldset>
						</p>
					</div>
					
                    <div class="tab-pane" id="login">
						<p>
                            <fieldset>
                                <p>Silahkan masukkan email dan password anda</p>
                                <hr />
                                <?php $this->output('forms/login');?>
                            </fieldset>
						</p>
					</div>
				
                </div>
                
			</div>
			
            <h2>
				Heading
			</h2>
			<p>
				Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
			</p>
			<p>
				<a class="btn" href="#">View details »</a>
			</p> <address> <strong>Twitter, Inc.</strong><br /> 795 Folsom Ave, Suite 600<br /> San Francisco, CA 94107<br /> <abbr title="Phone">P:</abbr> (123) 456-7890</address>
			 <a id="modal-649269" href="#modal-container-649269" role="button" class="btn" data-toggle="modal">Launch demo modal</a>
			
			<div class="modal fade" id="modal-container-649269" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h4 class="modal-title" id="myModalLabel">
								Modal title
							</h4>
						</div>
						<div class="modal-body">
							...
						</div>
						<div class="modal-footer">
							 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> <button type="button" class="btn btn-primary">Save changes</button>
						</div>
					</div>
					
				</div>
				
			</div>
			
		</div>
	</div>
    <hr />
	<div class="row clearfix">
		<div class="col-md-12 column">
			 <address> <strong>Twitter, Inc.</strong><br /> 795 Folsom Ave, Suite 600<br /> San Francisco, CA 94107<br /> <abbr title="Phone">P:</abbr> (123) 456-7890</address>
		</div>
	</div>
</div>
</body>
</html>
