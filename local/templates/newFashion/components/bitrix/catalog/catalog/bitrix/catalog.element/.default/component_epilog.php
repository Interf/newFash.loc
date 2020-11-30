<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;

/**
 * @var array $templateData
 * @var array $arParams
 * @var string $templateFolder
 * @global CMain $APPLICATION
 */

global $APPLICATION;

if(isset($_GET['skuID']) && isset($arResult['OFFER_INFO'])) {
	$skuId = intval($_GET['skuID']);




	if(in_array($skuId, $arResult['OFFER_INFO']['OFFER_ID'])) {
		$k = array_search($skuId, $arResult['OFFER_INFO']['OFFER_ID']);
		$price = $arResult['OFFER_INFO']['PRICE'][$k];
		$discount = $arResult['OFFER_INFO']['DISCOUNT'][$k];
	?>
	<script>
		let skuId = <?=json_encode($skuId);?>;
		let price = <?=json_encode($price);?>;
		let discount = <?=json_encode($discount);?>;

		$('.sku_link a').removeClass('active_sku');

		$.each($('.sku_link a'), function(index, val) {
			if(skuId == $(val).attr('id-sku')) {
				$(this).addClass('active_sku');
				$('.add_item').attr('id-prod', $(this).attr('id-sku'));
				$('.price_block').html("");
				$('.price_block').append('<p class="item_price">'+price+'</p>');
				if(discount > 0) {
					$('.price_block').append('<p class="item_discount">Скидка: -'+discount+'%</p>');
				}
			}
		});
		


		let prod_in_cart_inside = <?=json_encode($_SESSION['PROD_ID_IN_CART'])?>;
		if(prod_in_cart_inside !== null) {
			if(prod_in_cart_inside.indexOf($('.add_item').attr('id-prod')) !== -1) {
				$('.add_item').replaceWith('<a href="/personal/cart/" class="added_item">Перейти в корзину</a>');
			}
		}


			





	</script>
	<?php }








}





?>