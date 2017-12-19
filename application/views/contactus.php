<?php 
	$this->load->view('header');
?>
	<!--body-->
	<body>
		<nav class="navbar navbar-default navbar-inverse shadow" data-spy="affix" data-offset-top="20">
            <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                  <a class="navbar-brand" href="<?=base_url()?>"><img class="img-logo" src="<?=base_url()?>images/logo.png" alt="MQuiz"></a>
                </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right one">
                        <li><a href="<?=base_url()?>">Home</a></li>
                        <li><a href="<?=base_url()?>mquiz/about.html">About</a></li>
                        <li><a href="<?=base_url()?>mquiz/categories.html">Categories</a></li>
                        <li class="active"><a href="<?=base_url()?>mquiz/contactus.html">Contact Us</a></li>
                        <li><a href="<?=base_url()?>mquiz/signin.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="<?=base_url()?>mquiz/login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    <div class="mquiz-space-20"></div>
    <div class="container">
        <div class="col-md-offset-4 col-md-4 top-space">
            <div class="mquiz-color">
                <h2 class="text-center head-color-white">Contact us</h2>
                <div class="mquiz-space-30"></div>
                <p style="color:red;" >All Fields are required.</p>
                <p style="color:red;" ><?php echo $this->session->flashdata('email_error'); ?></p>
                <p style="color:green;" ><?php echo $this->session->flashdata('email_sent'); ?></p>
                <form role="form" class="form-horizontal" method="post" action="<?=base_url()?>mquiz/contact">
                    <div class="form-group">
                      <div class="col-sm-12">
                            <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Name">
                            <span class="help-block red"><?php echo form_error('name')?></span>
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                           <input type="email" name="email" class="form-control" id="inputPassword3" placeholder="Email">
                           <span class="help-block red"><?php echo form_error('email')?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" name="phonenumber" class="form-control" id="inputPassword3" placeholder="Phone Number">
                            <span class="help-block red"><?php echo form_error('phonenumber')?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                           <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                           <span class="help-block red"><?php echo form_error('message')?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                           <button type="submit" class="btn btn-block btn-mquiz">Send Message</button>
                        </div>
                    </div>
                    <div class="mquiz-space-50"></div>
                </form>
            </div>
          <div class="mquiz-space-20"></div>
        </div>
    </div>
<?php
	$this->load->view('footer');
?>