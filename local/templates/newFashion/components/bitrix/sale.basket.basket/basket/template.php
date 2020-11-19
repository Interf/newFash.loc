<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
/**
 * @var array $arParams
 * @var array $arResult
 * @var string $templateFolder
 * @var string $templateName
 * @var CMain $APPLICATION
 * @var CBitrixBasketComponent $component
 * @var CBitrixComponentTemplate $this
 * @var array $giftParameters
 */
$this->addExternalJS(SITE_TEMPLATE_PATH."/js/myScripts/delItemFromCart.js");
$this->addExternalJS(SITE_TEMPLATE_PATH."/js/myScripts/changeQuanInCart.js");
?>

<?php if (empty($arResult['ERROR_MESSAGE'])) : ?>

	



<div class="col-md-9 cart-items">

<?php if(!empty($arResult['ITEMS']['AnDelCanBuy'])) : ?>
	<h2>Корзина</h2>
	<?php foreach($arResult['ITEMS']['AnDelCanBuy'] as $arItem) : ?>
		<div class="cart-header">
			<div class="close1" id-prod="<?=$arItem['ID'];?>"> </div>
			<div class="cart-sec">
				<div class="cart-item cyc">
					<img src="<?=$arItem['PREVIEW_PICTURE_SRC'];?>">
				</div>
				<div class="cart-item-info">
					<h3><?=$arItem['NAME']?></h3>

					<h4><span>Цена: </span><?=$arItem['PRICE_FORMATED'];?></h4>
					<?php if($arItem['DISCOUNT_PRICE_PERCENT'] > 0) : ?>
					<h4><span>Скидка: </span><?=$arItem['DISCOUNT_PRICE_PERCENT_FORMATED'];?></h4>
					<?php endif; ?>
					<p class="qty">Qty ::</p>
					<input min="1" type="number" id="quantity" name="quantity" value="<?=$arItem['QUANTITY']?>" class="form-control input-small item_quantity">
				</div>
				<div class="clearfix"></div>					
			</div>
		</div>
	<?php endforeach; ?>
<?php endif; ?>



<?php if(!empty($arResult['ITEMS']['nAnCanBuy'])) : ?>
	<h2>Недоступные товары</h2>
	<?php foreach($arResult['ITEMS']['nAnCanBuy'] as $arItem) : ?>
		<div class="cart-header">
			<div class="close1" id-prod="<?=$arItem['ID'];?>"> </div>
			<div class="cart-sec">
				<div class="cart-item cyc">
					<img src="<?=$arItem['PREVIEW_PICTURE_SRC'];?>">
				</div>
				<div class="cart-item-info">
					<h3><?=$arItem['NAME']?></h3>

					<h4><span>Цена: </span><?=$arItem['PRICE_FORMATED'];?></h4>
				</div>
				<div class="clearfix"></div>					
			</div>
		</div>
	<?php endforeach; ?>
<?php endif; ?>

</div>


<div class="col-md-3 cart-total">
	<a class="continue" href="<?=$arParams['EMPTY_BASKET_HINT_PATH'];?>">Продолжить покупки</a>
	<div class="price-details">
		<h3>Цена</h3>
		<span>Полная сумма</span>
		<span class="total"><?=$arResult['PRICE_WITHOUT_DISCOUNT']?></span>
		<?php if($arResult['DISCOUNT_PRICE_ALL'] > 0)  :?>
			<span>Скидка</span>
			<span class="total">-<?=$arResult['DISCOUNT_PRICE_ALL_FORMATED'];?></span>
		<?php endif; ?>
		<div class="clearfix"></div>				 
	</div>	
	<h4 class="last-price">Итог</h4>
	<span class="total final"><?=$arResult['allSum_FORMATED']?></span>
	<div class="clearfix"></div>
	<a class="order" href="<?=$arParams['PATH_TO_ORDER'];?>">Оформить заказ</a>
</div>




<?php elseif ($arResult['EMPTY_BASKET']) : ?>
	<?php include(Bitrix\Main\Application::getDocumentRoot().$templateFolder.'/empty.php'); ?>
<?php else : ?>
	<?php ShowError($arResult['ERROR_MESSAGE']); ?>
<?php endif; ?>