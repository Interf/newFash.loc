<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>

<div class="feedback_result">
	<?if(!empty($arResult["ERROR_MESSAGE"]))
	{
		foreach($arResult["ERROR_MESSAGE"] as $v)
			ShowError($v);
	}
	if(strlen($arResult["OK_MESSAGE"]) > 0)
	{
		?><h3 class="mf-ok-text" style="color: green;"><?=$arResult["OK_MESSAGE"]?></h3><?
	}
	?>
</div>

<form action="<?=POST_FORM_ACTION_URI?>" method="POST">
	<?=bitrix_sessid_post()?>
	<input type="text" class="text" name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>" placeholder="<?=GetMessage("MFT_NAME")?>">
	<input type="text" class="text" name="user_email" value="<?=$arResult["AUTHOR_EMAIL"]?>" placeholder="<?=GetMessage("MFT_EMAIL")?>">
	<textarea name="MESSAGE" placeholder="<?=GetMessage("MFT_MESSAGE")?>"><?=$arResult["MESSAGE"]?></textarea>	

	<?if($arParams["USE_CAPTCHA"] == "Y"):?>
	<div class="mf-captcha">
		<div class="mf-text"><?=GetMessage("MFT_CAPTCHA")?></div>
		<input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
		<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
		<div class="mf-text"><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-req">*</span></div>
		<input type="text" name="captcha_word" size="30" maxlength="50" value="">
	</div>
	<?endif;?>

	<div class="clearfix"></div>

	<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
	<input type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>">
</form>