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
                        <li><a href="<?=base_url()?>">Home</a></li>
                        <li class="active"><a href="<?=base_url()?>mquiz/about.html">About</a></li>
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
            <div class="col-sm-2">
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
                <h2 class="text-center head-color">ABOUT US</h2>
                <p><span style="color:#F7308F">MQuiz</span> is nothing but, "Mobile Quiz".</p>
                <p> MQuiz is here to give you entertainment with our puzzles/quiz and along with that we want to give recharge for every qualified user.</p>
                <p> MQuiz is absolutely free signup.</p>
                <p>Users can login in MQuiz website by using of <a href="#"><span style="color:#F7308F">www.mquiz.in</span></a> Users can register with a valid email id. No age limit for signup.Users data will not misuse in any way.</p>
                <h3> Users key guide lines: </h3>
                <p>  <span style="color:#F7308F">MQuiz</span> is an online quiz; our concept is very simple and straight. It's just play and win recharge concept.
                This website contains various categories. Every category will have 30 questions with multiple choices. 
                In each quiz/puzzle, users will have 30 questions for each and every category. Users have to answer correctly at least 25 questions.
                Among the 30 questions, If 25 questions are right. User will get 5 points in their E wallet. (Note: 1 point is equals to 1 Indian rupee) </p>
                <p> MQuiz is a time level game. User got "20 sec" time for each question.
                If user doesn't answered any question and it will skip to next question and that leaved question will be considered as wrong one.
                If user force close 'Quiz' during plays game, you have to play that category again from the first.
                will be considered as wrong answer. 
                Do not press back button during quiz play, you will not play that once again from that question. Which means that puzzle will starts from first question? 
                User can recharge, when user wallet reaches 20 points.
                Users have to remember one most important thing, i.e we are not responsible for wrong recharge. Be careful with your recharge number and select the right one.
                MQuiz is not here to entertain any wrong recharge.</p>
                <p><b> Note:</b> Important thing is, if you any queries about MQuiz terms and conditions, Disclaimers, Policies check the Pages. We are not responsible for claims under the conditions or else anything, with respective this website. As per the MQuiz company policies, Quiz questions and points may be changes at any time.
            </p>
            </div>

            <div class="col-sm-2">
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
		<!--============  footer  ===============-->
<?php 
  $this->load->view('footer');
?>