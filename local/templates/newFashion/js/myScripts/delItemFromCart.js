$(document).ready(function() {
	let inProgress = false;

	$('.basket_container').on('click', '.close1', function() {
		if(inProgress == true) return;
		inProgress = true;
		let prodId = $(this).attr('id-prod');

		$.ajax({
			url: '/local/ajax/cartItems.php',
			type: 'POST',
			dataType: 'html',
			data: {
				DEL_ITEM_FROM_CART : 'Y',
				prodId : prodId
			},
		})
		.done(function(data) {
			data = $.parseJSON(data);
			if(data.SUCCESS) {
				$.post(window.location.pathname, {AJAX_GET_CART: 'Y'}, function(data, textStatus, xhr) {
					$('.basket_container').html(data);
				});

				$.post(window.location.pathname, {AJAX_SMALL_CART: 'Y'}, function(data, textStatus, xhr) {
					$('.sale_basket_line').html(data);
				});

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