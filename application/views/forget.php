<?php 
	$this->load->view('header');
?>
	<body>
		<nav class="navbar navbar-default navbar-inverse shadow" data-spy="affix" data-offset-top="150">
            <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                  <a class="navbar-brand" href="<?=base_url()?>mquiz/home.html"><img class="img-logo" src="<?=base_url()?>images/logo.png" alt="MQuiz"></a>
                </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right one">
                        <li><a href="<?=base_url()?>mquiz/home.html">Home</a></li>
                        <li><a href="<?=base_url()?>mquiz/about.html">About</a></li>
                        <li><a href="<?=base_url()?>mquiz/categories.html">Categories</a></li>
                        <li><a href="<?=base_url()?>mquiz/contactus.html">Contact Us</a></li>
                        <li><a href="<?=base_url()?>mquiz/signin.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li class="active"><a href="<?=base_url()?>mquiz/login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>	
		  <div class="mquiz-space-20"></div>
		<div class="container">
			<div class="col-md-offset-2 col-md-8 top-space">
				<div class="mquiz-color">
					<h2 class="text-center head-color-white">Forget Password</h2>
					<div class="mquiz-space-30"></div>
					<form class="form-horizontal" method="post" action='<?=base_url()?>mquiz/forget'>
						<h3 class="text-center">Enter valid email address</h3>
						<div class="mquiz-space-20"></div>
					  	<div class="form-group">
							<div class="col-sm-offset-3 col-sm-6">
							  	<input type="text" class="form-control" name="forget_email" placeholder="Email address">
							  	<span class="help-block red"><?php echo form_error('forget_email')?></span>
							  	<?php if ($this->session->flashdata('success')) { ?>
									<h4 class="text-center" style="color:green;"><?php echo $this->session->flashdata('success');?></h4>
								<?php } ?>
								<?php if ($this->session->flashdata('email_sent')) { ?>
									<h4 class="text-center" style="color:green;"><?php echo $this->session->flashdata('email_sent');?></h4>
								<?php } ?>
								<?php if ($this->session->flashdata('email_error')) { ?>
									<h4 class="text-center" style="color:green;"><?php echo $this->session->flashdata('email_error');?></h4>
								<?php } ?>
							</div>
					  	</div>
					  	<div class="form-group">
							<div class="col-sm-offset-5 col-sm-8">
						  		<button type="submit" class="btn btn-mquiz btn-lg m-button">Submit</button>
							</div>
					  	</div>
					</form>
				</div>
				
				<div class="mquiz-space-20"></div>
			</div>
		</div>
				

<?php
	$this->load->view('footer');
?>