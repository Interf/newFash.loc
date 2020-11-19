$(document).ready(function() {
	
	let inProgress = false;
	$('.catalog_container').on('click', '.sku_link_a', function(event) {
		if(inProgress == true) return;
		inProgress = true;
		event.preventDefault();
		let link = $(this).attr('href');
		
		$.ajax({
			url: link,
			type: 'POST',
			dataType: 'html',
			data: {AJAX_CHANGE_SKU: 'Y'},
		})
		.done(function(data) {
			$('.catalog_container').html(data);
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