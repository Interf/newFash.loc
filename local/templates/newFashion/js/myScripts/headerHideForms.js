$(document).ready(function() {
	
	$('body').on('click', '.header_hide_forms', function(event) {
		event.preventDefault();
		$('.hide_container_rel').toggle("fast");
	});


	// Show auth form
	$('body').on('click', '.btn_hide_auth', function(event) {
		event.preventDefault();
		
		$('.hide_auth_container').show(100);
		$('.hide_reg_container').hide(100);

	});

	// Show reg form
	$('body').on('click', '.btn_hide_reg', function(event) {
		event.preventDefault();
		
		$('.hide_auth_container').hide(100);
		$('.hide_reg_container').show(100);

	});




	// Ajax header.auth.form
	$('body').on('submit', '.header_auth_form', function(event) {
		event.preventDefault();
		
		let USER_LOGIN = $('.input_auth_login').val();
		let USER_PASSWORD = $('.input_auth_password').val();
		let USER_REMEMBER = $('.input_auth_remember_pass').is(':checked') ? "Y" : "N";
		let AUTH_ACTION = $('.submit_auth_form').val();

		$.ajax({
			url: '/',
			type: 'POST',
			dataType: 'html',
			data: {
				USER_LOGIN: USER_LOGIN,
				USER_PASSWORD : USER_PASSWORD,
				USER_REMEMBER : USER_REMEMBER,
				AUTH_ACTION : AUTH_ACTION,
				AJAX_AUTH_FORM : "Y"
			},
		})
		.done(function(data) {
			if($(data).html() == "success") {
				window.location.href = "/";
			} else {
				$('.hide_auth_container').html(data);
			}
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
		
	});




});