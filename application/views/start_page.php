<?php
	$this->load->view('header_page');
?>
	<div class="container mquiz-margin-top">
		<h2 class="text-center head-color"><?php echo $this->session->userdata('get_category_name');?></h2>
		<div class="mquiz-space-20"></div>
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
			<!--<img class="img-responsive ads-img" src="<?=base_url()?>images/ADS FOOTER .jpg" alt="animal_image"> -->
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
			<div class="mquiz-space-50"></div>
			<!--//*******   TIEMR  *********//--> 	
			<div class="text-center timer" >Timer <span style="color:red" id="time">00:30</span></div>

			<div class="col-sm-4 col-md-4 col-xs-12 img-right">
				<img class="img-thumbnail" src="<?=base_url()?>images/qustions-images/<?=$qus[0]['image_name']?>" alt="animal_image">
			</div>
			<div class="col-sm-8 col-md-8">
				<form action="<?=base_url()?>mquiz/result_page.html" method="post">
					<h3 class="h3-margin"><?=$qus[0]['question']?></h3>
				<div class="radio">
				  <label>
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="A">
				    <?=$qus[0]['option1']?>
				  </label>
				</div>
				<div class="radio">
				  <label>
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="B">
				    <?=$qus[0]['option2']?>
				  </label>
				</div>
				<div class="radio">
				  <label>
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="C">
				    <?=$qus[0]['option3']?>
				  </label>
				</div>
				<div class="radio">
				  <label>
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="D">
				    <?=$qus[0]['option4']?>
				  </label>
				</div>
				<input style="display:none;" type="radio" name="optionsRadios" id="optionsRadios1" value="E" checked>
				
				<input type="hidden" name="hidden_val" value="<?php echo $qus[0]['id']?>">
				<input type="hidden" name="inc_val" value="1">
				<input type="submit" id="sub_one" name="next" class="btn btn-primary" value="Next">
			   </form>	
		   </div>

		  		
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
	<script type = "text/javascript" >
	   function preventBack(){window.history.forward();}
	    setTimeout("preventBack()", 0);
	    window.onunload=function(){null};
	</script>
<?php
	$this->load->view('footer_page');
?>