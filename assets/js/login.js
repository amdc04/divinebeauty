$(function(){
	$('#validate_login').on('click',function(e){
		var passw = $('#passwl').val(),
			email = $('#emaill').val();
			
			var validation = 0;
			
			if (passw == '') {
			    $('#passwl').css('background-color', 'red');
			    validation = validation+1;
			}else{
				$('#passwl').css('background-color', '#eee');
				
			}
			
			if (email == '') {
			    $('#emaill').css('background-color', 'red');
			    validation = validation+1;
			}else{
				$('#emaill').css('background-color', '#eee');
				
			}

			if (validation == 0) {
				
				$.ajax({
						type: 'POST',
						url: 'php/login.php',
						data:'email='+email+'&passw='+passw,
						dataType:'json',	
						encode  : true
					})
					.done(function(data){
						if (data){
							alert("Accessing the system ...");
							
							document.location.href = 'user.php';							
						}else{

							alert("Incorrect data ...");
														
						}
					});
			}
			
		e.preventDefault();
	});
});