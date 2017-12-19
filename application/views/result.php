<?php
$this->load->view('header_page');
?>
<div class="container">
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
		    <?php 
				$cate_id = $this->session->userdata('category_id');
		    	$rand_id = $this->session->userdata('rand_id'); 
		    ?>
		    <?php if ($this->session->userdata('one') == "www") { ?>
		    	<div class="mquiz-space-20"></div>
		    	<div class="col-sm-offset-1 col-sm-10 r-w-img">
					<img calss="img-responsive" src="<?=base_url()?>images/wrong.png" alt="wrong"> 
				</div>	
		    <?php } else { ?>
		    	<div class="mquiz-space-20"></div>
		    	<div class="col-sm-offset-1 col-sm-10 r-w-img">
					<img calss="img-responsive" src="<?=base_url()?>images/right.png" alt="right">
				</div>
			<?php } ?>

    <a href="<?= base_url() ?>mquiz/page/<?php echo $cate_id; ?>/<?php echo $rand_id; ?>" id="res" class="btn btn-info pull-right m-color" role="button">Next Question</a>
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