<a href="login.php"><button class="btn"><strong>LOGIN</strong></button></a> 
<span class="li-text">
								
							</span> 
							<span class="li-social">
								<a href="#"><i class="fa fa-facebook"></i></a> 
								<a href="#"><i class="fa fa-twitter"></i></a> 
								<a href="#"><i class="fa fa-envelope"></i></a> 
								<a href="#"><i class="fa fa-skype"></i></a>
							</span>
						</li>
					</ul>
				</div>
			</div>
		</nav>
 <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>CV.OLTREMARE</strong> Modulo di Registrazione</h1>
                            <div class="description">
                            	<p>
	                            	
                            	</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    	<div class="col-sm-6 phone">
                    		<img src="<?php echo base_url("assets/img/iphone1.png");?>" alt="">
                    	</div>

                        
                        <div class="col-sm-5">
                            <?php $attributes = array("name" => "registrationform");
				echo form_open("user/register", $attributes);
                             ?>
                            
                            
                            
                        	<div class="form-top">
                        		<div class="form-top-left">
                        		<h3>Registati <strong>OLTREMARE</strong></h3>
                            		<p>Per avere pieno accesso e registrare corsi</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-pencil"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="" method="post" class="registration-form">
                                                <div class="form-group">
                                                    <label for="name">First Name</label>
                                                    <input class="form-control" name="fname" placeholder="Your First Name" type="text" value="<?php echo set_value('fname'); ?>" />
                                                    <span class="text-danger"><?php echo form_error('fname'); ?></span>
                                                </div>
			                    	<div class="form-group">
                                                    <label for="name">Last Name</label>
                                                    <input class="form-control" name="lname" placeholder="Last Name" type="text" value="<?php echo set_value('lname'); ?>" />
                                                    <span class="text-danger"><?php echo form_error('lname'); ?></span>
                                                </div>
			                       <div class="form-group">
                                                <label for="email">Email</label>
                                                    <input class="form-control" name="email" placeholder="Email-ID" type="text" value="<?php echo set_value('email'); ?>" />
                                                    <span class="text-danger"><?php echo form_error('email'); ?></span>
                                                </div>

                                                <div class="form-group">
                                                 <label for="subject">Password</label>
                                                    <input class="form-control" name="password" placeholder="Password" type="password" />
                                                    <span class="text-danger"><?php echo form_error('password'); ?></span>
                                                </div>

                                                <div class="form-group">
                                                    <label for="subject">Confirm Password</label>
                                                    <input class="form-control" name="cpassword" placeholder="Confirm Password" type="password" />
                                                    <span class="text-danger"><?php echo form_error('cpassword'); ?></span>
                                                </div>
			                        <div class="form-group">
                                                        <button name="submit" type="submit" class="btn btn-default">Signup</button>
                                                        <button name="cancel" type="reset" class="btn btn-default">Cancel</button>
                                                </div>
                                                <?php echo form_close(); ?>
                                                <?php echo '<strong>' .$this->session->flashdata('msg') .'</strong>'; ?>
			                    </form>
		                    </div>
                        </div>
                        
                    </div>
                    </div>