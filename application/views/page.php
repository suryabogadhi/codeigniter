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
			<!--//*******   END TIEMR  *********//-->

			<div class="col-sm-4 col-md-4 col-xs-12 img-right">
				<img class="img-thumbnail" src="<?=base_url()?>images/qustions-images/<?=$rand_id['image_name']?>" alt="animal_image" width="220" height="180">
			</div>
			<div class="col-sm-8 col-md-8">
				<form action="<?=base_url()?>mquiz/result_page.html" method="post">
					<h3 class="h3-margin"><?=$rand_id['question']?></h3>
				<div class="radio">
				  <label>
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="A">
				    <?=$rand_id['option1']?>
				  </label>
				</div>
				<div class="radio">
				  <label>
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="B">
				    <?=$rand_id['option2']?>
				  </label>
				</div>
				<div class="radio">
				  <label>
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="C">
				    <?=$rand_id['option3']?>
				  </label>
				</div>
				<div class="radio">
				  <label>
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="D">
				    <?=$rand_id['option4']?>
				  </label>
				</div>
				<input style="display:none;" type="radio" name="optionsRadios" id="optionsRadios1" value="E" checked>
				<input type="hidden" name="hidden_val" value="<?php echo $rand_id['id']?>">
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