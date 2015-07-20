$(document).ready(function(){
	//alert('hi');
	
	$('input').attr('maxlength', '1');
	
	$('#cheatCode').click(function(){
		// Check if all textboxes are filled
		var empty = 0;
		   $('input[type=text]').each(function(){
		      if (this.value == "") {
			  empty++;
			  $("#error").show('slow');
		      } 
		   });
		   if( empty > 0)
		{
			alert('Incomplete Ruzzel box !')
			return false;
		}
		
		// If strong is hidden then show it & hide the input tags 
		if($('#frontpanel strong').hasClass('hidden') == true)
		{
			$('#frontpanel strong').removeClass('hidden');
			$('#frontpanel input').addClass('hidden');
			$(this).html('Edit Table');
		}
		else
		{
			$('#frontpanel strong').addClass('hidden');
			$('#frontpanel input').removeClass('hidden');
			$(this).html('Show Cheat Code');
		}

		// Ajax call
		
	var empData = $( "#ruzzle" ).serialize();
		
		
	$.ajax({
	       type: "POST",
	       url: "ajax.php",
	       data: empData,
	       success: function(response){	
			console.log(response);
		       $.each(response, function(key, val){
			       console.log(key+', '+val);
			});
		       $('#res').html(response); //Clean the textbox value after logged in         
	       }
       });//Ajax end	
	
	
       
       
       });
	// Fill values in cells
	
	$('input').on('keyup','',function(e){
			console.log(e.keyCode) // CAPS= 20 , ARROW=37-40 TAB = 9 SHIFT = 16, backspace=8, delete=46
		if((e.keyCode >64 && e.keyCode <90) || (e.keyCode >37 && e.keyCode <40) ||  e.keyCode == 9  ||  e.keyCode == 16  ||  e.keyCode == 20  ||  e.keyCode == 8   ||  e.keyCode == 46     ||  e.keyCode == 116  )
		{
			var cellno = (this.id).split('-')[2];
			//alert($('#cell-strong-'+cellno).html())
			
			$('#'+this.id).attr('value', this.value);
			$('#cell-strong-'+cellno).html('');
			$('#cell-strong-'+cellno).html(this.value);			
		}
		else
		{
			e.preventDefault();
		}
	});
	
	
});