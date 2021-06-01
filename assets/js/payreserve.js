$(function(){
	$('#validate_reserve').on('click',function(e){
		var type = $('#form_type').val(),
			date = $('#form_date').val();
			
			var validation = 0;
			
			if (validation == 0) {
				
				$.ajax({
						type: 'POST',
						url: 'php/payreserve.php',
						data:'date='+date+'&type='+type,
						dataType:'json',	
						encode  : true
					})
					.done(function(data){
						if (data){
							alert("Reservation made, proceed to make the purchase ...");
							
							document.location.href = 'user.php';							
						}else{

							alert("Incorrect data ...");
														
						}
					});
			}
			
		e.preventDefault();
	});
});