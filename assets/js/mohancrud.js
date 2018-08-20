$('body').on('click', '#submit', function()
					 {
					 	//alert("hiiiii");
					 	$('#saveall').val('save');
						 var formdetails = $('#formdata').serialize();
						 alert(formdetails);
							 jQuery.ajax(
									{	type: "POST",
										url : "ajax-mohancrud.php",
										data:formdetails,
										success:function(data)
										{	
											swal("Good job!", "You clicked the button!", "success");
										},
										error: function(jqXHR, textStatus, errorThrown) 
										{
											 //$('#cancel_occ').click();
											swal("Error", "unknown error occured, Please try again", "error");	 
											   
										}
									}) 
			
			 
					});



  $('body').on('click', '.del_button', function()
 {
	
	var ID = $(this).attr("id");
	var serial='col_id='+ID;
	jQuery.ajax(
				{	type: "POST",
					url : "ajax-occupant.php",
					data:serial,
					success:function(response)
					{	
						if(response.trim()=='deleted')
						{
							swal("SUCCESS","Row deleted successsfully", "success");
							
							$('.save_button').hide();
							$('.edit_button').show("slow");
							 setTimeout(function() {location.reload();},1000);
							
						}else
						{
							swal("Error", "Not Deleted, Please try again", "error");
						}
					},
					error: function(jqXHR, textStatus, errorThrown) 
					{
						 $('#cancel_occ').click();
						swal("Error", "unknown error occured, Please try again", "error");	 
						   
					}
				
				}) 
					
		
 });
 



 $('body').on('click', '.save_button1', function()
 {
	 $('#update').val('UPDATE');
	var formdetails=$(this).closest('tr').find("input").serialize();
	 jQuery.ajax(
				{	type: "POST",
					url : "ajax-occupant.php",
					data:formdetails,
					success:function(response)
					{	
						if(response.trim()=='updated')
						{
							swal("SUCCESS","values Updated.", "success");
							
							$('.save_button').hide();
							$('.edit_button').show("slow");
							setTimeout(function() {location.reload();},2000);
							
						}else
						{
							swal("Error","Not inserted, Please try again", "error");
						}
					},
					error: function(jqXHR, textStatus, errorThrown) 
					{
						 $('#cancel_occ').click();
						swal("Error", "unknown error occured, Please try again", "error");	 
						   
					}
				
				}) 
					
		
 });