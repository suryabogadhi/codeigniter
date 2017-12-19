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
			<li><a href="<?=base_url()?>admin/index"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			<li><a href="<?=base_url()?>admin/details"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Site-Details</a></li>
			<li><a href="charts.html"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Charts</a></li>
			<li><a href="<?=base_url()?>admin/tables"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Tables</a></li>
			<li class="active"><a href="<?=base_url()?>admin/forms"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Forms</a></li>
			<li><a href="panels.html"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Alerts &amp; Panels</a></li>
			<li><a href="icons.html"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Icons</a></li>
			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Dropdown 
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 1
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 2
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 3
						</a>
					</li>
				</ul>
			</li>
			<li role="presentation" class="divider"></li>
			<li><a href="login.html"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Login Page</a></li>
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
							<form class="form-horizontal">
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Question</label>
									<div class="col-sm-10">
									    <input type="email" class="form-control" id="inputEmail3" placeholder="Question">
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Option1</label>
									<div class="col-sm-10">
									    <input type="email" class="form-control" id="inputEmail3" placeholder="Option1">
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Option2</label>
									<div class="col-sm-10">
									    <input type="email" class="form-control" id="inputEmail3" placeholder="Option2">
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Option3</label>
									<div class="col-sm-10">
									    <input type="email" class="form-control" id="inputEmail3" placeholder="Option3">
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Option4</label>
									<div class="col-sm-10">
									    <input type="email" class="form-control" id="inputEmail3" placeholder="Option4">
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Anwer</label>
									<div class="col-sm-10">
									    <input type="email" class="form-control" id="inputEmail3" placeholder="Answer">
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Image</label>
									<div class="col-sm-10">
									    <input type="file">
									</div>
								</div>
								<div class="form-group">
									
									<div class="col-sm-offset-2 col-sm-10">
									    <img src="<?=base_url()?>images/no-image.jpg">
									</div>
								</div>

							  	<div class="form-group">
							   		 <div class="col-sm-offset-2 col-sm-10">
							     		 <button type="submit" class="btn btn-primary">Update</button>
						    		</div>
							  	</div>
							</form>
						</div>
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
