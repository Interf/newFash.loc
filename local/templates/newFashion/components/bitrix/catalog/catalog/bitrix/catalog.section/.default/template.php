<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 *
 *  _________________________________________________________________________
 * |	Attention!
 * |	The following comments are for system use
 * |	and are required for the component to work correctly in ajax mode:
 * |	<!-- items-container -->
 * |	<!-- pagination-container -->
 * |	<!-- component-end -->
 */

$this->setFrameMode(true);

$elementEdit = CIBlock::GetArrayByID($arParams['IBLOCK_ID'], 'ELEMENT_EDIT');
$elementDelete = CIBlock::GetArrayByID($arParams['IBLOCK_ID'], 'ELEMENT_DELETE');
$elementDeleteParams = array('CONFIRM' => GetMessage('CT_BCS_TPL_ELEMENT_DELETE_CONFIRM'));
?>

<div class="col-md-12 product-model-sec">

<?php foreach($arResult['ITEMS'] as $arItem) : ?>
<?php
$uniqueId = $arItem['ID'].'_'.md5($this->randString().$component->getAction());
$bx_uniqueId = $this->GetEditAreaId($uniqueId);
$this->AddEditAction($uniqueId, $arItem['EDIT_LINK'], $elementEdit);
$this->AddDeleteAction($uniqueId, $arItem['DELETE_LINK'], $elementDelete, $elementDeleteParams);
?>


<a href="<?=$arItem['DETAIL_PAGE_URL'];?>"></a><div class="product-grid" id="<?=$bx_uniqueId?>"><a href="<?=$arItem['DETAIL_PAGE_URL'];?>">					
	<?php foreach($arItem['PRICES'] as $arPrice) : ?>
		<?php if($arPrice['DISCOUNT_DIFF_PERCENT'] > 0) : ?>
			<div class="more-product-info"><span>-<?=$arPrice['DISCOUNT_DIFF_PERCENT'];?>%</span></div>
		<?php endif; ?>
	<?php endforeach; ?>
	<!--  -->

	<div class="product-img b-link-stripe b-animate-go  thickbox">						   
		<img src="<?=$arItem["PREVIEW_PICTURE"]['SRC'];?>" class="img-responsive" alt="">
		<div class="b-wrapper">
			<h4 class="b-animate b-from-left  b-delay03">							
				<button class="btns">Подробнее</button>
			</h4>
		</div>
	</div></a>						
	<div class="product-info simpleCart_shelfItem">
		<div class="product-info-cust">
			<h4><?=$arItem['NAME']; ?></h4>

			<?php if(isset($arItem['OFFER_INFO'])) : ?>
				<p>Доступные цвета: </p>
				<div class="sku_link">
				<?php foreach($arItem['OFFER_INFO']['OFFER_COLOR_SRC'] as $k => $colorSRC) : ?>
					
					<a class="<?=($k === 0) ? 'active_sku' : ''?>" href="<?=$arItem['DETAIL_PAGE_URL']?>?skuID=<?=$arItem['OFFER_INFO']['OFFER_ID'][$k];?>">
						<img src="<?=$colorSRC?>" alt="">
					</a>
					<?php  ?>
				<?php endforeach; ?>
				</div>
			<?php endif; ?>

			<?php foreach($arItem['PRICES'] as $arPrice) : ?>
				<span class="item_price"><?=$arPrice['PRINT_DISCOUNT_VALUE'];?></span>
			
				<div class="prod_info">
					<input min="1" type="number" class="item_quantity" name="quantity" value="1">

					<input type="button" class="item_add add_item" value="ADD" id-prod="<?=$arPrice['ID'];?>">

					<!-- <a href="/personal/cart/" class="added_item">Перейти в корзину</a> -->

				</div>
			<?php endforeach; ?>

		</div>													
		<div class="clearfix"> </div>
	</div>
</div>	


<?php endforeach; ?>

</div>
<div class="clearfix"></div>

<?php if($arParams['DISPLAY_BOTTOM_PAGER']) : ?>
<div class="paginator">

<?=$arResult['NAV_STRING']?>

</div>
<?php endif; ?>
