<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<ul class="megamenu skyblue">

<?
foreach($arResult as $arItem):
?>
	<?if($arItem["SELECTED"]):?>
		<li class="active grid"><a class="color1" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>	
	<?else:?>
		<li class="grid"><a class="color1" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>	
	<?endif?>
	
<?endforeach?>

</ul>
<?endif?>