$(function(){
	$('#validate_register').on('click',function(e){
		
		var passw = $('#passw').val(),
			name = $('#name').val(),
			email = $('#email').val();
			
			var validation = 0;
			if (passw == '') {
			    $('#passw').css('background-color', 'red');
			    validation = validation+1;
			}else{
				$('#passw').css('background-color', '#eee');
				
			}
			
			if (email == '') {
			    $('#email').css('background-color', 'red');
			    validation = validation+1;
			}else{
				$('#email').css('background-color', '#eee');
				
			}
			if (name == '') {
			    $('#name').css('background-color', 'red');
			    validation = validation+1;
			}else{
				$('#name').css('background-color', '#eee');
				
			}

			if (validation == 0) {

				$.ajax({
						type: 'POST',
						url: 'php/register.php',
						data:'email='+email+'&passw='+passw+'&name='+name,
						dataType:'json',	
						encode  : true
					})
					.done(function(datos){
						if (datos){
							alert("Accessing the system ...");
							
							document.location.href = 'index.php#login';							
						}else{

							alert("Verify user please ...");
														
						}
					});
			}
			
		e.preventDefault();
	});
});