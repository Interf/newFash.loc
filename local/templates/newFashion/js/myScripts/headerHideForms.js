$(document).ready(function() {
	
	// Show/Hide forms container
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


	let inProgress = false;

	// Ajax header.auth.form
	$('body').on('submit', '.header_auth_form', function(event) {
		event.preventDefault();
		if(inProgress == true) return;
		inProgress = true;

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
			data = $.trim(data);

			if(data == "success") {
				window.location.href = "/";
			} else {
				$('.hide_auth_container').html(data);
			}
			inProgress = false;
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
		
	});



	// Ajax header.reg.form
	$("body").on('submit', '.header_reg_form', function(event) {
		event.preventDefault();
		if(inProgress == true) return;
		inProgress = true;

		let register_submit_button = $('.header_reg_submit').val();
		let REGISTER = {
			LOGIN : $('.header_reg_login').val(),
			EMAIL : $('.header_reg_email').val(),
			PASSWORD : $('.header_reg_password').val(),
			CONFIRM_PASSWORD : $('.header_reg_confirm').val(),
		}

		$.ajax({
			url: '/',
			type: 'POST',
			dataType: 'html',
			data: {
				REGISTER : REGISTER,
				register_submit_button : register_submit_button,
				AJAX_REG_FORM : "Y"
			},
		})
		.done(function(data) {
			if($(data).html() == "success") {
				window.location.href = "/";
			} else {
				$('.hide_reg_container').html(data);
			}
			inProgress = false;
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
	});






});