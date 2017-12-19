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
			<li><a href="<?=base_url()?>admin/details"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Site-Details</a></li>
			<li class="active"><a href="<?=base_url()?>admin/category"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Categories</a></li>
			<li><a href="<?=base_url()?>admin/questions"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> All Questions</a></li>
			<li><a href="<?=base_url()?>admin/newslatter"><svg class="glyph stroked email"><use xlink:href="#stroked-email"></use></svg> Newslatter</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">		
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Add Category</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading"><svg class="glyph stroked email"><use xlink:href="#stroked-email"></use></svg> Add Category <div class="pull-right"><a href="<?=base_url()?>admin/category" class="btn btn-primary" role="button">Back to Questions</a></div></div>
					<p><span style="color:red">NOTE </span>:Empty category name will given "<strong style="color:red">upcoming</strong>"</p>
					<div class="panel-body">
						<div class="col-md-offset-2 col-md-8">
							<?php if ($this->session->flashdata('success')) { ?>
								<h2 class="text-center" style="color:green;"><?php echo $this->session->flashdata('success');?></h2>
							<?php } ?>

							<form role="form" class="form-horizontal" method="post" action="<?=base_url()?>admin/insert_category" enctype="multipart/form-data">
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-3 control-label">Category Name</label>
									<div class="col-sm-9">
									    <input type="text" name="cname" class="form-control" id="inputEmail3" placeholder="Category Name">
									    <span class="help-block red"><?php echo form_error('cname')?></span>
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-3 control-label">Category Image</label>
									<div class="col-sm-9">
									    <input type="file" class="form-control" name="userfile">
									    <span class="help-block red"><?php echo form_error('userfile')?></span>
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-3 control-label">Alias Name</label>
									<div class="col-sm-9 p-one">
									    <input type="text" name="aliasname" class="form-control" id="inputEmail3" placeholder="Category Alias Name">
									    <span class="help-block red"><?php echo form_error('aliasname')?></span>
									    <?php if(isset($error)){ echo $error;}?>
									    <p for="inputEmail3" class="col-sm-3 control-label" style="color:#f9243f">Exmple:movies,cricket</p>
									</div>
								</div>
							  	<div class="form-group">
							   		 <div class="col-sm-offset-3 col-sm-9">
							     		 <button type="submit" class="btn btn-primary">Add category</button>
						    		</div>
							  	</div>
							</form>
						</div>
					</div>
				</div>
			</div><!--/.col-->
		</div><!--/.row-->
	</div>	<!--/.main-->
	
	<script src="<?=base_url()?>js/js/jquery-1.11.1.min.js"></script>
	<script src="<?=base_url()?>js/js/bootstrap.min.js"></script>
	<script src="<?=base_url()?>js/js/chart.min.js"></script>
	<script src="<?=base_url()?>js/js/chart-data.js"></script>
	<script src="<?=base_url()?>js/js/easypiechart.js"></script>
	<script src="<?=base_url()?>js/js/easypiechart-data.js"></script>
	<script src="<?=base_url()?>js/js/bootstrap-datepicker.js"></script>
	<script src="<?=base_url()?>js/js/bootstrap-table.js"></script>
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
