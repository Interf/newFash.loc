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



<div class="blog-sec-info">
	<h2><?=$arResult['NAME'];?></h2>
	<img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" class="img-responsive" alt="">	
	<p>
		<?=$arResult['DETAIL_TEXT'];?>
	</p>

	<?php if(!empty($arResult['DISPLAY_PROPERTIES']['CATALOG_LINKS'])) : ?>

		<h3>Связанные элементы каталога:</h3>

		<?php foreach($arResult['SECTION_INFO'] as $sectId => $arSect) : ?>

			<a href="<?=$arSect['SECTION_PAGE_URL'];?>"><h3><?=$arSect['NAME']?></h3></a>
			<ul>
				<?php foreach($arResult['DISPLAY_PROPERTIES']['CATALOG_LINKS']['LINK_ELEMENT_VALUE'] as $arElem) : ?>
					<?php if($sectId == $arElem['IBLOCK_SECTION_ID']) : ?>
						<li><a href="<?=$arElem["DETAIL_PAGE_URL"]?>"><?=$arElem['NAME']?></a></li>
					<?php endif; ?>
				<?php endforeach; ?>
			</ul>
			<br>
		<?php endforeach; ?>


	<?php endif; ?>
</div>