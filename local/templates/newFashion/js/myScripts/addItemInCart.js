$(document).ready(function() {


	let inProgress = false;
	$('.prod_info').on('click', '.add_item', function() {
		if(inProgress == true) return;
		inProgress = true;
		let idItem = $(this).attr('id-prod');
		let quantity = $(this).parents('.prod_info').find('.item_quantity').val();
		let curBtn = $(this);

		$.ajax({
			url: '/local/ajax/cartItems.php',
			type: 'POST',
			dataType: 'html',
			data: {
				ADD_ITEM_IN_CART: 'Y',
				idItem : idItem,
				quantity : quantity
			},
		})
		.done(function(data) {
			data = $.parseJSON(data);
			if(data.ERRORS) {
				alert(data.ERRORS);
			}
			else if(data.SUCCESS) {
				$.post(window.location.pathname, {AJAX_SMALL_CART: 'Y'}, function(data, textStatus, xhr) {
					$('.sale_basket_line').html(data);
				});

				curBtn.replaceWith('<a href="/personal/cart/" class="added_item">Перейти в корзину</a>');
			}
			inProgress = false;
		})
		.fail(function(data) {
			console.log(data);
		})
		
	});



});