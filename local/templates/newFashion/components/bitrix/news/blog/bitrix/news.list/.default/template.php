<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="col-md-9 fashion-blogs">
	<?php if(!empty($arResult["ITEMS"])) : ?>

		<?php foreach($arResult['ITEMS'] as $arItem) : ?>

			<?php
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>

			<div class="one_post" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				<h3> <a href="<?=$arItem['DETAIL_PAGE_URL']?>"><?=$arItem['NAME'];?></a></h3>
				<p class="post_date"><span><?=$arItem["DISPLAY_ACTIVE_FROM"]?></span> </p>
				<a href="<?=$arItem['DETAIL_PAGE_URL']?>"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="img-responsive" alt=""></a>
				<p><?=$arItem['PREVIEW_TEXT'];?></p>
				<a class="read" href="<?=$arItem['DETAIL_PAGE_URL']?>">Подробнее</a>
			</div>
		<?php endforeach; ?>

	<?php endif; ?>
</div>

<div class="clearfix"></div>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>