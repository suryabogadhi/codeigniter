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
				<li class="active">Tables</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Advanced Table
						<div class="pull-right">
							<a href="<?=base_url()?>admin/insert" class="btn btn-primary" role="button">Add Question</a>
						</div>
					</div>
					<div class="panel-body">
						<div class="col-sm-12" style="background-color:#ddd;padding:15px 0 15px 0">
							<label for="inputEmail3" class="col-sm-offset-3 col-sm-1 control-label" style="margin-top: 5px;font-size: 17px;">Category</label>
							<div class="col-sm-5">
								<select class="form-control" id="cat_ids">
							    		<option value="">--select--</option>
							    	<?php
							    		$category = $this->am->get_category();
							    		foreach ($category as $key => $val) :
							    	?>
							    		<option value="<?php echo $val['c_id']?>"> <?php echo $val['category_name']?></option>
							    	<?php endforeach;?>
								</select>
							</div>
						</div>
						<div class="tag">
						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-field="state" data-checkbox="true" >ID</th>
						        <th data-field="id" data-sortable="true">ID</th>
						        <th data-field="question"  data-sortable="true">Question</th>
						        <th data-field="option1" data-sortable="true">Option1</th>
						        <th data-field="option2" data-sortable="true">Option2</th>
						        <th data-field="option3" data-sortable="true">Option3</th>
						        <th data-field="option4" data-sortable="true">Option4</th>
						        <th data-field="answer" data-sortable="true">Answer</th>
						        <th data-field="image" data-sortable="true">Image</th>
						        <th data-field="edit" data-sortable="true"> Edit</th>
						        <th data-field="delete" data-sortable="true">Delete</th>
						    </tr>
						    </thead>
						    	<tbody id="result">
						    	<?php
						    		$questions = $this->am->get_questions();
						    		$i=1;
						    		foreach ($questions as $key => $val) :
						    	?>
							    <tr>
							    	<td></td>
							    	<td><?php echo $i++;?></td>
							    	<td><?php echo $val['question']?></td>
							    	<td><?php echo $val['option1']?></td>
							    	<td><?php echo $val['option2']?></td>
							    	<td><?php echo $val['option3']?></td>
							    	<td><?php echo $val['option4']?></td>
							    	<td><?php echo $val['answer']?></td>
							    	<td><img src="<?=base_url()?>images/qustions-images/<?php echo $val['image_name']?>" width=50px></td>
							    	<td><a href="<?=base_url()?>admin/edit/<?=$val['id']?>" class="btn btn-primary" role="button">Edit</a></td>
							    	<td><a href="javascript:;" onClick="confirm_delete(<?=$val['id']?>)" class="btn btn-danger" role="button">Delete</a></td>
							    </tr>
						    <?php endforeach;?>
						    </tbody>

						</table>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
	</div><!--/.main-->

	<script src="<?=base_url()?>js/js/jquery-1.11.1.min.js"></script>
	<script src="<?=base_url()?>js/js/bootstrap.min.js"></script>
	<script src="<?=base_url()?>js/js/chart.min.js"></script>
	<script src="<?=base_url()?>js/js/chart-data.js"></script>
	<script src="<?=base_url()?>js/js/easypiechart.js"></script>
	<script src="<?=base_url()?>js/js/easypiechart-data.js"></script>
	<script src="<?=base_url()?>js/js/bootstrap-datepicker.js"></script>
	<script src="<?=base_url()?>js/js/bootstrap-table.js"></script>
	<script src="<?=base_url()?>js/js/mquiz-admin.js"></script>
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

		function confirm_delete($id){
			var res = confirm('Are You sure you want to delete record');
			if(res == true){
				window.location = "<?=base_url()?>admin/delete/"+$id;
			}
		}
	</script>	
</body>

</html>
