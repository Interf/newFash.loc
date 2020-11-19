$(document).ready(function() {
	

	let inProgress = false;
	$('.basket_container').on('change', '.item_quantity', function() {
		if(inProgress == true) return;
		inProgress = true;
		let quantity = ($(this).val() > 0) ? $(this).val() : 1;
		let prodId = $(this).parents('.cart-header').find('.close1').attr('id-prod');

		$.ajax({
			url: '/local/ajax/cartItems.php',
			type: 'POST',
			dataType: 'html',
			data: {
				CHANGE_QUAN_IN_CART: 'Y',
				prodId : prodId,
				quantity : quantity
			},
		})
		.done(function(data) {
			data = $.parseJSON(data);
			if(data.SUCCESS) {
				console.log(data);
			}
			else if(data.ERRORS) {
				alert(data.ERRORS);
			}

			$.post(window.location.pathname, {AJAX_GET_CART: 'Y'}, function(data, textStatus, xhr) {
				$('.basket_container').html(data);
			});

			$.post(window.location.pathname, {AJAX_SMALL_CART: 'Y'}, function(data, textStatus, xhr) {
				$('.sale_basket_line').html(data);
			});

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