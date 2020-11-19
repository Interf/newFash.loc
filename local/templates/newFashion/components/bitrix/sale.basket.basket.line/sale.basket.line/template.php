<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/**
 * @global string $componentPath
 * @global string $templateName
 * @var CBitrixComponentTemplate $this
 */
?>

<div class="box_1">	

	<a href="<?=$arParams['PATH_TO_BASKET'];?>"><h3>Cart: <span class="simpleCart_total"><?=$arResult['TOTAL_PRICE']?></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"><?=$arResult['QUANTITY'];?></span> items)<img src="<?=SITE_TEMPLATE_PATH?>/images/cart.png" alt=""/></h3></a>
	<?php if($arResult['NUM_PRODUCTS'] == 0) : ?>
		<p><a class="simpleCart_empty">Корзина пуста</a></p>
	<?php else : ?>
		<p><a href="<?=$arParams['PATH_TO_BASKET'];?>" class="simpleCart_empty">Перейти в корзину</a></p>
	<?php endif; ?>
	
</div>