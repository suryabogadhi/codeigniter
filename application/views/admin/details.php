<?php
	$this->load->view('admin/header');
?>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li><a href="<?=base_url()?>admin/home"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			<li class="active"><a href="<?=base_url()?>admin/details"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Site-Details</a></li>
			<li><a href="<?=base_url()?>admin/category"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Categories</a></li>
			<li><a href="<?=base_url()?>admin/questions"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> All Questions</a></li>
			<li><a href="<?=base_url()?>admin/newslatter"><svg class="glyph stroked email"><use xlink:href="#stroked-email"></use></svg> Newslatter</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">		
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div><!--/.row-->
									
		<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-teal panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo $this->session->userdata['no_users'];?></div>
							<div class="text-muted">Users</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-blue panel-widget ">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo $this->session->userdata['no_categories']; ?></div>
							<div class="text-muted">Categories</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-orange panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked empty-message"><use xlink:href="#stroked-empty-message"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo $this->session->userdata['no_questions']; ?></div>
							<div class="text-muted">No Of Questions</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-red panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-app-window-with-content"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">25.2k</div>
							<div class="text-muted">Page Views</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		<?php
			$id = 1;
			$get_site_details = $this->am->get_site_details($id);
			foreach ($get_site_details as $key => $value) :
		?>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading"><svg class="glyph stroked email"><use xlink:href="#stroked-email"></use></svg> Site - Details</div>
					<div class="panel-body">
						<div class="col-md-offset-2 col-md-8">
							<form role="form" class="form-horizontal" method="post" action="<?=base_url()?>admin/update" enctype="multipart/form-data">
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-3 control-label">Title</label>
									<div class="col-sm-9">
									    <input type="text" name="title" class="form-control" id="inputEmail3" placeholder="Title" value="<?php echo $value['title']?>">
									    <input type="hidden" name="hidden_id" id="inputEmail3" placeholder="Title" value="<?php echo $value['id']?>">
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-3 control-label">Logo</label>
									<div class="col-sm-9">
									    <input type="file" class="form-control" name="userfile">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-3 col-sm-9">
									    <img src="<?=base_url()?>images/<?php echo $value['logo']?>" width="168" height="80">
									    <input type="hidden" name="hidden_image" value="<?php echo $value['logo']?>">
									    <?php if(isset($error)){ echo $error;}?>
									</div>
								</div>
								
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-3 control-label">Facebook link</label>
									<div class="col-sm-9">
									    <input type="text" name="fb" class="form-control" id="inputEmail3" placeholder="Facebook link" value="<?php echo $value['fb_link']?>">
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-3 control-label">Twitter link</label>
									<div class="col-sm-9">
									    <input type="text" name="twitter" class="form-control" id="inputEmail3" placeholder="Twitter link" value="<?php echo $value['twitter_link']?>">
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-3 control-label">Parkpays link</label>
									<div class="col-sm-9">
									    <input type="text" name="parkpays" class="form-control" id="inputEmail3" placeholder="Parkpays link" value="<?php echo $value['parkpays_link']?>">
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-3 control-label">Google+ link</label>
									<div class="col-sm-9">
									    <input type="text" name="google-plus" class="form-control" id="inputEmail3" placeholder="Google+ link" value="<?php echo $value['google_link']?>">
									</div>
								</div>
							  	<div class="form-group">
							   		 <div class="col-sm-offset-3 col-sm-9">
							     		 <button type="submit" class="btn btn-primary">Update</button>
						    		</div>
							  	</div>
							</form>
						</div>
					</div>
				</div>
			</div><!--/.col-->
		</div><!--/.row-->

	<?php endforeach;?>
	</div>	<!--/.main-->
		  

	<script src="<?=base_url()?>js/js/jquery-1.11.1.min.js"></script>
	<script src="<?=base_url()?>js/js/bootstrap.min.js"></script>
	<script src="<?=base_url()?>js/js/chart.min.js"></script>
	<script src="<?=base_url()?>js/js/chart-data.js"></script>
	<script src="<?=base_url()?>js/js/easypiechart.js"></script>
	<script src="<?=base_url()?>js/js/easypiechart-data.js"></script>
	<script src="<?=base_url()?>js/js/bootstrap-datepicker.js"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
