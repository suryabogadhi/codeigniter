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
                <h2 class="text-center head-color">Privacy and Policy</h2>
                <h3>Personal information collection</h3>
               <p><span style="color:#F7308F"> MQuiz</span>, may be collect and use the following kinds of personal information: </p>
               <p> Information about your use of this website.</p>
               <p> Information that you provide for the purpose of registering with the website</p>
               <p> Including mobile number and all your given information</p>
               <p> Information about transactions carried out over this website</p>
               <p> Information that you provide for the purpose of subscribing to the website services</p>
               <p>Any other information that you send to MQuiz.</p>
               <p>Use of personal information</p>
                <!--<div class="col-sm-offset-2 col-sm-8 col-sm-offset-2">
                    <img class="img-responsive" src="<?=base_url()?>images/ADS FOOTER .jpg" alt="animal_image">
                </div>-->
                 <h3>MQuiz may use your personal information to</h3>
                  <p>Administer this website;</p> 
                  <p>Personalize the website</p>
                  <p>Enable your access to and use of the website services</p>
                  <p>Publish information about you on the website</p>
                  <p>Send to you products that you purchase</p>
                  <p>Supply to you services that you purchase</p>
                  <p>Send you statements and invoices</p>
                  <p>Collect payments from you</p>
                  <p>send you marketing communications</p>
                    <p>Where MQuiz discloses your personal information to its agents or sub-contractors for these purposes, the agent or sub-contractor in question will be obligated to use that personal information in accordance with the terms of this privacy statement.</p>
                    <p> In addition to the disclosures reasonably necessary for the purposes identified elsewhere above, MQuiz may disclose your personal information to the extent that it is required to do so by law, in connection with any legal proceedings or prospective legal proceedings, and in order to establish, exercise or defend its legal rights.</p>
                    <p> Otherwise, MQuiz protects your personal information to the reasonably best extent of its abilities </p>
                <h3>Securing data</h3>
                <p><span style="color:#F7308F">MQuiz</span> will take reasonable technical and organizational precautions to prevent the loss, misuse or alteration of your personal information.</p> 
                <p><span style="color:#F7308F">MQuiz</span> will store all the personal information you provide on its secure servers.</p> 
                <p>Information relating to electronic transactions entered into via this website will be protected by encryption technology.</p> 
               <h3>Contact us regarding Spam</h3>
                <p>Should you have any questions about this anti-spam policy, please contact MQuiz</p>
                <p><b>Using the details set out below:</b></p>
               <p><span style="color:#F7308F"> mquiz007@gmail.com</span></p>
            </div>
        </div>       
    </div>        
    <!--============  footer  ===============-->
<?php 
  $this->load->view('footer');
?>