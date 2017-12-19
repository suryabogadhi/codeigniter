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
			<li><a href="<?=base_url()?>admin/category"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Add Category</a></li>
			<li><a href="<?=base_url()?>admin/questions"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg>All Questions</a></li>
			<li class="active"><a href="<?=base_url()?>admin/newslatter"><svg class="glyph stroked email"><use xlink:href="#stroked-email"></use></svg> Newslatter</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="<?=base_url()?>admin/index"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Send Mail</li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">send email</div>
					<div class="panel-body">
						<div class="col-md-offset-2 col-md-8">
							<form role="form" class="form-horizontal" method="post" action="<?=base_url()?>admin/sendnewsmail">
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-3 control-label">From</label>
									<div class="col-sm-9">
									    <input type="text" name="emailform" class="form-control" id="inputEmail3"  placeholder="support@mquiz.in" disabled>
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-3 control-label">To</label>
									<div class="col-sm-9">
									<?php foreach ($getEmail as $key => $value): ?>
									    <input type="text" name="to" class="form-control" id="inputEmail3"  value="<?php echo $value['email']?>">
									<?php endforeach;?>
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-3 control-label">Subject</label>
									<div class="col-sm-9">
									    <input type="text" name="subject" class="form-control" id="inputEmail3" placeholder="Subject">
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-3 control-label">Message</label>
									<div class="col-sm-9">
									    <textarea class="form-control" name="message" rows="6" placeholder="Message"></textarea>
									</div>
								</div>
							  	<div class="form-group">
							   		 <div class="col-sm-offset-3 col-sm-9">
							     		 <button type="submit" class="btn btn-primary">Send Email</button>
						    		</div>
							  	</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
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
