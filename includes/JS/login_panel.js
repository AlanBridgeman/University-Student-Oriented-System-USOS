$(document).ready (
	function() {
		//A handler for when the login link in the navigaztion bar is clicked
		$('#loginLink').click (
			function(e) {
				//Cancel the tlinks default behaviour
				e.preventDefault();
				
				//Checki if the login is shown or is visible
				if($('#login').attr('aria-hidden') === 'true') {
					$('#login').show();							//Show the login form
					
					//Set the relavent metadata for Accessible Technology
					$('#login').attr('aria-hidden','false');
				}
				else {
					$('#login').hide();							//Hide the login form
					
					//Set the relavent metadata for Accessible Technology
					$('#login').attr('aria-hidden','true');
				}
				
				$('input').on (
					'blur keyup',
					function(ev) {
						var form_data = $("#loginForm").serializeArray();
						var error_free = true;
						for(var input in form_data) {
							var element = $('#' + form_data[input]['name']);
							var regexStr = element.attr('pattern');
							if(typeof regexStr == typeof undefined || regexStr == false) {
								if(element.prop('required')) {
									regexStr = '.+';
								}
							}
							var regex = new RegExp(regexStr);
							var valid = regex.test(element.val());
							if(!valid) {
								error_free = false;
							}
						}
						
						if(error_free) {
							$('#submitButton').prop('disabled', false);
						}
						else {
							$('#submitButton').prop('disabled', true);
						}
					}
				);
				
				//A handler for when the submit button in the login form is pressed
				$('#submitButton').click(submitForm);
			}
		);
	}
);

function submitForm() {
	//Handler for when the form is submitted
	$('#loginForm').submit (
		function(e) {
			//Cancel the default behaviour (so that I can do my own)
			e.preventDefault();
		}
	);
	
	alert($('#id').val());
	alert($('#password').val());
	
	//Make a POST ajax call to load the results of the 
	$.post (
		"includes/PHP/login.form.php", 
		{
			ID: $('#id').val(),
			password: $('#password').val()
		}//,
		//"html"
	).done (
		function(msg) {
			alert(msg);
			window.location = msg;
		}
	).fail (
		function(msg) {
			console.log("Failed: " + msg);
		}
	).always (
		function(msg) {
			
		}
	);
}