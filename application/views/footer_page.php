	<div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h3 class="h3-bold">About</h3>
          <p class="style"><b>MQuiz</b> is nothing but, "Mobile Quiz".MQuiz is here to give you entertainment with our puzzles/quiz and along with that we want...<a href="about.html"> >>Read more</a></p>              
        </div>
        <div class="col-md-4 center-space">
            <h3 class="h3-bold">links</h3>
            <ul class="footer-list">
                <li> 
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>  
                    <a href="<?=base_url()?>mquiz/terms_and_conditions">Terms & Conditions</a>
                </li>
                <li> 
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>  
                    <a href="<?=base_url()?>mquiz/disclaimer">Disclaimer</a>
                </li>
                <li> 
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>  
                    <a href="<?=base_url()?>mquiz/privacy_and_policy">Privacy & Policy</a>
                </li>
            </ul>
        </div>
        <div class="col-md-4">
            <h3 class="h3-bold">News Letter</h3>
            <form role="form" class="form-horizontal" id="subscribe">
                <div class="form-group">
                    <div class="col-md-9 foot-remove">
                        <input type="email" name="email" id="sub-eamil" class="form-control" placeholder="Enter email">
                        <div id="result"></div>
                    </div>
                    <div class="col-md-4 foot-remove">
                        <button type="submit" id="submit" class="btn btn-mquiz" value="sign in">Sign in</button>
                    </div>
                   
                </div>
            </form>
            <div id='result' style='display: none'> Added Successfully!</div>
          <!--<br><br>-->
          <ul class="img-style">
            <?php
                $site_details = $this->m->get_site_details();
                foreach ($site_details as $key => $val) :
            ?>
            <li><a href="<?php echo $val['fb_link']?>" target="_blank"><img src="<?=base_url()?>images/facebook.png" alt="name"></a></li>
            <li><a href="<?php echo $val['twitter_link']?>" target="_blank"><img src="<?=base_url()?>images/twitter.png" alt="name"></a></li>
            <li><a href="<?php echo $val['parkpays_link']?>" target="_blank"><img src="<?=base_url()?>images/parkpays.png" alt="name"></a></li>
            <li><a href="<?php echo $val['google_link']?>" target="_blank"><img src="<?=base_url()?>images/google-plus.png" alt="name"></a></li>
          
          </ul>
        </div>
      </div>
    </div>
    <div class="foot-color">
      <div class="container">
        <div class="row">
          <div class="copy-right">
            <p class="pull-left">Designed & Developed by <a href="<?php echo $val['parkpays_link']?>" target=_blank"">Parkpays</a></p>
            <p class="pull-right"> Copyright &copy; <?php echo date('Y')?>. All right reserved. </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php endforeach;?>
		<script src="<?=base_url()?>js/bootstrap.min.js"></script>
	</body>
</html>