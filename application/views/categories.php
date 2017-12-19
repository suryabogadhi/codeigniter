<?php 
	$this->load->view('header');
?>
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
                        <li class="active"><a href="<?=base_url()?>mquiz/categories.html">Categories</a></li>
                        <li><a href="<?=base_url()?>mquiz/contactus.html">Contact Us</a></li>
                        <li><a href="<?=base_url()?>mquiz/signin.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="<?=base_url()?>mquiz/login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>	

	  <div class="container">
	  	<h2 class="text-center head-color">Categories</h2>
        <div class="mquiz-space-30"></div>
            <div class="row">
                <div class="col-sm-2 img-left">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Free Mobile Recharge -->
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-5188082201348298"
                         data-ad-slot="1177379642"
                         data-ad-format="auto"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
                <div class="col-sm-8">
                <?php 
                    foreach($category as $key => $row):
                ?>
                    <div class="col-md-4 col-sm-6 col-xs-6 back-color">
                        <div class="category-image">
                            <a class="make-btn" href="<?=base_url()?>mquiz/category/<?php echo $row['c_id']?>"><img class="img-responsive" src="<?=base_url()?>images/category/<?php echo $row['image_name']?>" alt="flowers" width="285"></a>
                        </div>
                        <a href="<?=base_url()?>mquiz/category/<?php echo $row['c_id']?>" class="btn btn-info btn-block make-btn" role="button" id="<?php echo $row['category_name']?>"><?php echo $row['category_name']?> </a>
                    </div>
                 <?php endforeach;?>
                </div>
                <div class="col-sm-2 img-right">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Free Mobile Recharge -->
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-5188082201348298"
                         data-ad-slot="1177379642"
                         data-ad-format="auto"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script> 
                </div>
            </div> 
	  </div>
<?php
	$this->load->view('footer');
?>