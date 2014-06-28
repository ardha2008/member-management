<?php $this->output('header'); ?>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<h3 class="text-right">
				Member Management. V1.1
			</h3>
			<div class="jumbotron well">
				<h1>Management Member</h1>
				<p>Management member adalah aplikasi kecil yang berguna untuk memanage member</p>
				
			</div>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-8 column">
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
		<div class="col-md-4 column">
            
            <?php if(isset($message) && $message == 'login_failed'){?>
                <div class="alert alert-danger">
                    <strong>Email dan password tidak cocok</strong>
                </div>
            <?php unset($message); } ?>
            
            <?php if(isset($message) && $message == 'register'){?>
                <div class="alert alert-success">
                    <strong>Registrasi berhasil</strong>
                </div>
            <?php unset($message); } ?>
                
                <div class="panel panel-default">
                  <div class="panel-body">
                    <a id="modal-649269" class="btn btn-primary btn-block" href="#login_f" role="button" data-toggle="modal">LOGIN</a>
                  </div>
                </div>

                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">REGISTER</h3>
                  </div>
                  <div class="panel-body">
                    <?php $this->output('forms/register') ?>
                  </div>
                </div>
			 
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">Changelog</h3>
                  </div>
                  <div class="panel-body">
                    <ol>
				<li>
					Lorem ipsum dolor sit amet
				</li>
				<li>
					Consectetur adipiscing elit
				</li>
				<li>
					Integer molestie lorem at massa
				</li>
				<li>
					Facilisis in pretium nisl aliquet
				</li>
				<li>
					Nulla volutpat aliquam velit
				</li>
				<li>
					Faucibus porta lacus fringilla vel
				</li>
				<li>
					Aenean sit amet erat nunc
				</li>
				<li>
					Eget porttitor lorem
				</li>
			</ol>
                  </div>
                </div>
			
			<div class="modal fade" id="login_f" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-sm">
					<div class="modal-content">
						<div class="modal-header">
							 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
							<h4 class="modal-title" id="myModalLabel">
								- LOGIN PANEL -
							</h4>
						</div>
						<div class="modal-body">
							<?php $this->output('forms/login') ?>
						</div>
					</div>
					
				</div>
				
			</div>
			
		</div>
	</div>
    <hr />
	<div class="row clearfix">
		<div class="col-md-12 column">
			 <footer>&COPY;2014 Lisensi bebas boleh ditukar tambah , <a href="http://facebook.com/ardha.down">Ardha Herdianto</a></footer>
		</div>
	</div>
</div>
</body>
</html>
