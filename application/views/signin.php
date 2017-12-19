<?php 
	$this->load->view('header');
?>
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
                        <li><a href="<?=base_url()?>mquiz/contactus.html">Contact Us</a></li>
                        <li class="active"><a href="<?=base_url()?>mquiz/signin.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="<?=base_url()?>mquiz/login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>	
		<div class="mquiz-space-20"></div>
		<div class="container">

			<div class="col-md-offset-2 col-md-8 top-space">
				<?php if ($this->session->flashdata('success')) { ?>
					<script type="text/javascript">alert('<?php echo $this->session->flashdata('success');?>')</script>
				<?php } ?>
				<div class="mquiz-color">
					<h2 class="text-center head-color-white">Sign up</h2>
					<div class="mquiz-space-50"></div>
					<form role="form" class="form-horizontal" method="post" action='<?=base_url()?>mquiz/register'>
					  <div class="form-group">
						<div class="col-sm-6">
						  <input type="text" class="form-control" name="username" placeholder="User Name">
						  <span class="help-block red"><?php echo form_error('username')?></span>
						</div>
						<div class="col-sm-6">
						  <input type="email" class="form-control" name="email" placeholder="Email Address">
						  <span class="help-block red"><?php echo form_error('email')?></span>
						</div>
					  </div>
					  <div class="form-group">
						<div class="col-sm-6">
						  <input type="password" class="form-control" name="pwd" placeholder="Password">
						  <span class="help-block red"> <?php echo form_error('pwd')?></span>
						</div>
						<div class="col-sm-6">
						  <input type="password" class="form-control" name="confirm_pwd" placeholder="Confirm Password">
						  <span class="help-block red"> <?php echo form_error('confirm_pwd')?></span>
						</div>
					  </div>
					  <div class="form-group">
						<div class="col-sm-6">
						  <input type="text" class="form-control" name="address" placeholder="City">
						  <span class="help-block red"> <?php echo form_error('address')?></span>
						</div>
						<div class="col-sm-6">
						  <input type="text" class="form-control" name="number" placeholder="Mobile Number">
						  <span class="help-block red"> <?php echo form_error('number')?></span>
						</div>
					  </div>
					  <div class="form-group">
						<div class="col-sm-offset-5 col-sm-10">
						  <button type="submit" class="btn btn-mquiz">Sign in</button>
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
