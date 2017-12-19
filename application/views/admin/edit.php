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
			<li class="active"><a href="<?=base_url()?>admin/questions"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> All Questions</a></li>
			<li><a href="<?=base_url()?>admin/newslatter"><svg class="glyph stroked email"><use xlink:href="#stroked-email"></use></svg> Newslatter</a></li>
		</ul>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="<?=base_url()?>admin/index"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Forms</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Edit Question</div>
					<div class="panel-body">
						<div class="col-md-offset-2 col-md-8">
						<?php
							foreach ($get_data as $key => $row) :
						?>
							<form class="form-horizontal" role="form" method="post" action="<?=base_url()?>admin/do_update" enctype="multipart/form-data">
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Category</label>
									<div class="col-sm-10">
									    <select class="form-control" name="category">
									    		<option value="">--select--</option>
									    	<?php
									    		$category = $this->am->get_category();
									    		foreach ($category as $key => $val) :
									    	?>
									    		<option value="<?php echo $val['c_id']?>" <?php if( $row['c_id'] == $val['c_id'] ){echo "selected";}?> > <?php echo $val['category_name']?></option>
									    	<?php endforeach;?>
										</select>
										<span class="help-block red"><?php echo form_error('category')?></span>
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Question</label>
									<div class="col-sm-10">
										<input type="hidden" name="hidden_id" value="<?php echo $row['id']?>">
									    <input type="text" name="question" class="form-control" id="inputEmail3" placeholder="Question" value="<?php echo $row['question']?>">
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Option1</label>
									<div class="col-sm-10">
									    <input type="text" name="option1" class="form-control" id="inputEmail3" placeholder="Option1" value="<?php echo $row['option1']?>">
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Option2</label>
									<div class="col-sm-10">
									    <input type="text" name="option2" class="form-control" id="inputEmail3" placeholder="Option2" value="<?php echo $row['option2']?>">
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Option3</label>
									<div class="col-sm-10">
									    <input type="text" name="option3" class="form-control" id="inputEmail3" placeholder="Option3" value="<?php echo $row['option3']?>">
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Option4</label>
									<div class="col-sm-10">
									    <input type="text" name="option4" class="form-control" id="inputEmail3" placeholder="Option4" value="<?php echo $row['option4']?>">
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Anwer</label>
									<div class="col-sm-10">
										<select class="form-control" name="answer">
										  	<option value="A" <?php if( $row['answer'] == "A"){echo "selected";}?>>A</option>
										  	<option value="B" <?php if( $row['answer'] == "B"){echo "selected";}?>>B</option>
										  	<option value="C" <?php if( $row['answer'] == "C"){echo "selected";}?>>C</option>
										  	<option value="D" <?php if( $row['answer'] == "D"){echo "selected";}?>>D</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Image</label>
									<div class="col-sm-10">
									    <input type="file" name="userfile">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
									    <img src="<?=base_url()?>images/qustions-images/<?php echo $row['image_name']?>" width="220" height="180">
									    <input type="hidden" name="hidden_image" value="<?php echo $row['image_name']?>">
									</div>
								</div>

							  	<div class="form-group">
							   		 <div class="col-sm-offset-2 col-sm-10">
							     		 <button type="submit" class="btn btn-primary">Update</button>
						    		</div>
							  	</div>
							</form>
						</div>
					<?php endforeach; ?>
					</div>
				</div><!-- /.col-->
			</div><!-- /.row -->
	</div><!--/.main-->


	<script src="<?=base_url()?>js//jquery-1.11.1.min.js"></script>
	<script src="<?=base_url()?>js//bootstrap.min.js"></script>
	<script src="<?=base_url()?>js//chart.min.js"></script>
	<script src="<?=base_url()?>js//chart-data.js"></script>
	<script src="<?=base_url()?>js/j<?=base_url()?>js/s/easypiechart.js"></script>
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
