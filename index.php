<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Получение данных о сотрудниках");
$APPLICATION->SetPageProperty('Title','Получение данных о сотрудниках');

CJSCore::Init(array("jquery"));
CJSCore::Init(['ajax']);

use Bitrix\Main\UI\Extension;
use \Bitrix\Main\HttpRequest;

Extension::load('ui.buttons');
?> 
<div id=menu>
	<div id="main_button"></div>
	<a href="<?php echo (SITE_DIR."list-workers.php");?>"><div class="navigation_button">ПОЛУЧИТЬ СПИСОК СОТРУДНИКОВ</div></a>
</div>
<div id ="main_button_message"></div>
<script type="text/javascript">
    let URL = '<?php echo ("../".SITE_TEMPLATE_PATH."/lib/handler.php");?>';
</script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>