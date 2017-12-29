
$(document).ready(function(){
	$('#theinputfield').hide(); //hide the secret form field
	$('#js-callout-click').on('click', function(){
		window.location = '/featured-video/';
	});
});

			var $loading = $('#loadingDiv').hide();
			$(document)
			  .ajaxStart(function () {
			    $loading.show();
			    $('.form').hide();
			  })
			  .ajaxStop(function () {
			    $loading.hide();
			  });
			  $(document).ready(function(){
			  	$('#theinputfield').hide(); //hide the secret form field

			  	// Validate the form data and then send the content of the contact form to the handler with ajax
				$('.form').validate( {
					submitHandler: function(form){
						$.ajax({
							url: 'process_mail.php',
							dataType: 'text',
							type: 'post',
							contentType: 'application/x-www-form-urlencoded',
							data: $('.form').serialize(),
							success: function( data, textStatus, jQxhr ){
								$('.form')[0].reset();
								$('.message-callout, .message-callout .success-callout').fadeIn();
							},
							error: function( jqXhr, textStatus, errorThrown ){
								console.log( errorThrown );
								$('.message-callout, .message-callout .error-callout').fadeIn();
							}
						});
					}
				} ); //validate
			});