<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Page\Asset

?>

<!DOCTYPE html>
<html>
<head>
	
     <title><?$APPLICATION->ShowTitle()?></title>
	 <meta charset="utf-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="icon" type="image/x-icon" href="<?= SITE_TEMPLATE_PATH?>/assets/favicon.png" >
	 <?php
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/style.css");
		
		Asset::getInstance()->addJS(SITE_TEMPLATE_PATH."/js/script.js");
		
	 ?>
	 <?$APPLICATION->ShowHead();?>
</head>
<body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>
<header>
<div><?= $APPLICATION->ShowTitle(false); ?></div>
</header>
