<?php 
	$this->load->view('header_page');
?>	
	<script type="text/javascript">
		$(document).ready(function(){
			$("a#upcoming").prop("href", "#comingsoon");
		});
	</script>
	<div class="container">
		<div class="mquiz-space-20"></div>
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
                	<h1 class="text-center head-color">Categories</h1>

                	<h4 class="text-center" style="color:green;" ><?php echo $this->session->flashdata('bonus_amount'); ?></h4>
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
					<div class="mquiz-space-30"></div>
					<?php foreach($category as $key => $row):?>
						<div class="col-md-4 col-sm-6 col-xs-6 back-color">
							<div class="category-image">
								<img  src="<?=base_url()?>images/category/<?php echo $row['image_name']?>" alt="<?php echo $row['category_name']?>">
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
	$this->load->view('footer_page');
?>