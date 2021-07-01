$(function(){
	$('#validate').on('click',function(e){
		e.preventDefault();

		var form_name = $('#form_name').val(),
			form_subject = $('#form_subject').val(),
			form_phone = $('#form_phone').val(),
			form_email = $('#form_email').val(),
			form_message = $('#form_message').val();

			var regex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
			t = "";
			var tja = "";
			var validation = 0;
			var tja1 = false;
			var tja2 = false;
			var tja8 = "";

			if ( form_subject === '' ) {
			    $('#form_subject').css('background-color', 'red');
			        validation = validation+1;
			}else{
				$('#form_subject').css('background-color', '#eee');
				
			}
			if (form_name === '') {
			    $('#form_name').css('background-color', 'red');
			        validation = validation+1;
			}else{
				$('#form_name').css('background-color', '#eee');
				
			}
			if (form_message === '') {
			    $('#form_message').css('background-color', 'red');
			        validation = validation+1;
			}else{
				$('#form_message').css('background-color', '#eee');
				
			}
			if (form_email === '' || (!regex.test(form_email))) {
			        $('#form_email').css('background-color', 'red');
			        validation = validation+1;
			}else{
				$('#form_email').css('background-color', '#eee');
				
			}

			if (form_phone === '') {
			        $('#form_phone').css('background-color', 'red');
			        validation = validation+1;
			}else{
				$('#form_phone').css('background-color', '#eee');
				
			}

			if (validation === 0) {
				$("#preloader, .preloader").fadeIn();

				var postValue =  `
					name=${encodeURI(form_name)}
					&email=${encodeURI(form_email)}
					&phone=${encodeURI(form_phone)}
					&subject=${encodeURI(form_subject)}
					&message=${encodeURI(form_message)}
				`.replace(/\s/g, '');

				$.ajax({
					type: 'POST',
					url: 'php/save.php',
					data: postValue,
					dataType: 'json',
					success: function(result){
						$("#preloader, .preloader").fadeOut();
						alert(result.message);
						document.location.href = 'index.html'
					},
					error: function(xhr, status, error) {
						$("#preloader, .preloader").fadeOut();
						var err = eval("(" + xhr.responseText + ")");
  						alert(err.Message);
					}
				});

				return false
			}
			

	});
});