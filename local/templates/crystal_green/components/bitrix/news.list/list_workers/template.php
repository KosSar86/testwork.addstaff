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


<?php if (!empty($arResult["ITEMS"])){ ?>
	<ol>
	<?php foreach($arResult["ITEMS"] as $arItem):
	$worker = $arItem["PROPERTIES"];
	$link = SITE_DIR."worker.php?ID=".$worker["ID_WORKER"]["VALUE"];
	?>
	<a href="<?php echo $link ?>"><li><?php echo $worker["FIRST_NAME"]["VALUE"] ?> <?php echo $worker["LAST_NAME"]["VALUE"] ?></li></a></br>
	<?php endforeach; ?>
	</ol>
<?php } else {?>
	<div id="message_IBempty">Инфоблок пуст!!</div>
<?php } ?>
	<a href="<?php echo SITE_DIR;?>"><div class="navigation_button">НАЗАД</div></a>