	$(document).ready(function(){
		$('#cat_ids').on('change',function(e){
			var countryID = $(this).val();
			var url = "find/"+countryID;
			$.ajax({
             	type: "POST",
             	url: url,
             	data: $("#cat_ids").serialize(), // serializes the form's elements.
             	success: function(data){
         	       	$('#result').html(data);
                }
           });
			e.preventDefault();
		});
	});