<?php

/**
 * @author Ardha-PC
 * @copyright 2014
 */



?>

<div class="panel panel-default">
                  <div class="panel-body">
                    <?php if($this->resources->session->getValue('login')==true){?>   
                        Selamat datang, <?= $this->resources->session->getValue('username'); ?> , <a href="<?= $this->location('home/logout') ?>" >Logout</a>
                    <?php }else{
                        ?><a id="modal-649269" class="btn btn-primary btn-block" href="#login_f" role="button" data-toggle="modal">LOGIN</a><?php 
                    } ?>
                  
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
						  <form class="form-horizontal" role="form" method="post">
                              <div class="form-group">
                                <label class="col-sm-2 control-label"><i class="glyphicon glyphicon-user"></i></label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" name="email" id="inputEmail3" placeholder="Username atau Email"/>
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label"><i class="glyphicon glyphicon-lock"></i></label>
                                <div class="col-sm-10">
                                  <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Password"/>
                                </div>
                              </div>
                              
                              
                              
                              <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                  <button type="submit" class="btn btn-default" name="login">Login</button>
                                </div>
                              </div>
                            
                            </form>
						</div>
					</div>
					
				</div>
				
			</div>

