<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<ul>

<?
foreach($arResult as $arItem):
?>
		<li class="grid"><a class="color1" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>	
<?endforeach?>

</ul>
<?endif?>