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
			<li><a href="<?=base_url()?>admin/category"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Categories</a></li>
			<li  class="active"><a href="<?=base_url()?>admin/questions"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> All Questions</a></li>
			<li><a href="<?=base_url()?>admin/newslatter"><svg class="glyph stroked email"><use xlink:href="#stroked-email"></use></svg> Newslatter</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="<?=base_url()?>admin/home"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Forms</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Insert Question<div class="pull-right"><a href="<?=base_url()?>admin/questions" class="btn btn-primary" role="button">Back to Questions</a></div></div>
					<div class="panel-body">

						<div class="col-md-offset-2 col-md-8">
							<?php if ($this->session->flashdata('success')) { ?>
								<h2 class="text-center" style="color:green;"><?php echo $this->session->flashdata('success');?></h2>
							<?php } ?>
							<form role="form" class="form-horizontal" method="post" action="<?=base_url()?>admin/do_insert" enctype="multipart/form-data">
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Category</label>
									<div class="col-sm-10">
									    <select class="form-control" name="category">
									    		<option value="">--select--</option>
									    	<?php
									    		foreach ($category as $key => $val) :
									    	?>
									    		<option value="<?php echo $val['c_id']?>"> <?php echo $val['category_name']?></option>
									    	<?php endforeach;?>
										</select>
										<span class="help-block red"><?php echo form_error('category')?></span>
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Question</label>
									<div class="col-sm-10">
									    <input type="text"  name="question" class="form-control" id="inputEmail3" placeholder="Question">
									    <span class="help-block red"><?php echo form_error('question')?></span>
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Option1</label>
									<div class="col-sm-10">
									    <input type="text"  name="option1" class="form-control" id="inputEmail3" placeholder="Option1">
									    <span class="help-block red"><?php echo form_error('option1')?></span>
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Option2</label>
									<div class="col-sm-10">
									    <input type="text" name="option2" class="form-control" id="inputEmail3" placeholder="Option2">
									    <span class="help-block red"><?php echo form_error('option2')?></span>
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Option3</label>
									<div class="col-sm-10">
									    <input type="text" name="option3" class="form-control" id="inputEmail3" placeholder="Option3">
									    <span class="help-block red"><?php echo form_error('option3')?></span>
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Option4</label>
									<div class="col-sm-10">
									    <input type="text" name="option4" class="form-control" id="inputEmail3" placeholder="Option4">
									    <span class="help-block red"><?php echo form_error('option4')?></span>
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Anwer</label>
									<div class="col-sm-10">
									    <select class="form-control" name="answer">
									    	<option value="">--select--</option>
										  	<option value="A">A</option>
										  	<option value="B">B</option>
										  	<option value="C">C</option>
										  	<option value="D">D</option>
										</select>
										<span class="help-block red"><?php echo form_error('answer')?></span>
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Image</label>
									<div class="col-sm-10">
									    <input type="file" name="userfile">
									    <p style="color:red"><?php if(isset($error)){echo $error;}?></p>
									    <span class="help-block red"><?php echo form_error('userfile')?></span>	
									</div>
								</div>

							  	<div class="form-group">
							   		 <div class="col-sm-offset-2 col-sm-10">
							     		 <button type="submit" class="btn btn-primary">Insert</button>
						    		</div>
							  	</div>
							</form>
						</div>
					</div>
				</div><!-- /.col-->
			</div><!-- /.row -->
	</div><!--/.main-->

	<script src="<?=base_url()?>js/js/jquery-1.11.1.min.js"></script>
	<script src="<?=base_url()?>js/js/bootstrap.min.js"></script>
	<script src="<?=base_url()?>js/js/chart.min.js"></script>
	<script src="<?=base_url()?>js/js/chart-data.js"></script>
	<script src="<?=base_url()?>js/js/easypiechart.js"></script>
	<script src="<?=base_url()?>js/js/easypiechart-data.js"></script>
	<script src="<?=base_url()?>js/js/bootstrap-datepicker.js"></script>
	<script>
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
