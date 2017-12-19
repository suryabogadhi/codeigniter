<?php
  $this->load->view('header');
?>
  
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width:1140px;
	  height:300px;
      margin: auto;
  }
  </style>
    </head>
	<!--body-->
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
                  <a class="navbar-brand" href="<?=base_url()?>"><img class="img-logo" src="<?=base_url()?>images/logo.png" alt="MQuiz"></a>
                </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right one">
                        <li class="active"><a href="<?=base_url()?>">Home</a></li>
                        <li><a href="<?=base_url()?>mquiz/about.html">About</a></li>
                        <li><a href="<?=base_url()?>mquiz/categories.html">Categories</a></li>
                        <li><a href="<?=base_url()?>mquiz/contactus.html">Contact Us</a></li>
                        <li><a href="<?=base_url()?>mquiz/signin.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="<?=base_url()?>mquiz/login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
			<!--slider-->

    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="<?=base_url();?>images\image1.jpg" alt="Chania" width="460" height="345">
                </div>
                <div class="item">
                    <img src="<?=base_url();?>images\image2.jpg" alt="Chania" width="460" height="345">
                </div>
                <div class="item">
                    <img src="<?=base_url();?>images\image3.jpg" alt="Flower" width="460" height="345">
                </div>
                <div class="item">
                    <img src="<?=base_url();?>images\image4.jpg" alt="Flower" width="460" height="345">
                </div>
            </div>
                 <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            	<h2 class="text-center head-color">Terms and Conditions</h2>
                <h3>Personal information collection</h3>
               <p><span style="color:#F7308F">  MQuiz </span>has created these Anti-Spam, Copyright, Disclaimer, Privacy, & Terms & conditions of use Policies to confirm the commitment to the privacy of our visitors, to how we collect information, what information we collect, how we use it that information, to clarify the use of information, advice, tips, etc that we publish on the site, to protect the information & content contained on MQuiz website, & your responsibilities when using MQuiz</p>
              <p>Any attempt to undermine or cause harm to MQuiz service, a customer, client, affiliate or associate is strictly prohibited. This includes, but is not limited to, deformation, libel, hacking, and theft.</p>
              <p>You also confirm that you have read & agree to all MQuiz Policies.MQuiz reserves the right to amend any or all of the policies below. These policies are neither inclusive nor exclusive.If you have any questions about these policies please use to contact MQuiz <span style="color:#F7308F">(mquiz007@gmail.com)</span></p>
              <h3>MQuiz Anti-Spam Policy</h3>
              <b>MQuiz has Zero Tolerance for Spam</b>
              <p>We do not spam or condone spamming in any way at all. If you think you have been spammed by us then we ask that you contact us with the details<span style="color:#F7308F"> (mquiz007@gmail.com)</span>, please save the spam email as we will need to see it, & you can be assured we will fully investigate the matter.</p>
              <p>If you have received an email from a third party we are not responsible for that person/website & you will need to contact them or their service provider to resolve it.</p>
              <p>We advise you to make sure you have not signed up for information via a newsletter, group, third party website, opt-in email list, get paid to read emails site, etc before you contact us as we have arrangements with others who may advertise on our behalf.</p>
              <p>Please note: Contacting <span style="color:#F7308F">(mquiz007@gmail.com) </span>will not stop them.</p>
              <h3>Cookies Policy</h3>
              <b>About cookies</b>
              <p>Cookies are information packets sent by web servers to web browsers, and stored by the web browsers.
                 The information is then sent back to the server each time the browser requests a page from the server. This enables a web server to identify and track web browsers.</p>
               <p>There are two main kinds of cookies: session cookies and persistent cookies. Session cookies are deleted from your computer when you close your browser, whereas persistent cookies remain stored on your computer until deleted, or until they reach their expiry date.</p>
               <h3>Cookies on our website</h3>
                <p><span style="color:#F7308F">MQuiz</span> may use cookies on this website, for the above-referenced purposes of managing its Website and Web-based transaction</p>
                <p>MQuiz uses Analytics to analyze the use of this website. Analytics generates statistical and other information about website use by means of cookies, which are stored on users' computers. The information generated relating to our website is used to create reports about the use of the website. The Analytics provider will store and use this information in accordance with their privacy policy.</p>
               <p>MQuiz may publish interest-based advertisements on this website. These are tailored to reflect customers interests. To determine your interests, the software will track your behavior across the web using cookies</p>
            </div>
        </div>       
    </div>				
		<!--============  footer  ===============-->
<?php 
  $this->load->view('footer');
?>