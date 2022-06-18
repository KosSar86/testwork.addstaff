<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "данные сотрудника");
$APPLICATION->SetPageProperty("keywords", "данные сотрудника");
$APPLICATION->SetPageProperty("description", "данные сотрудника");
$APPLICATION->SetTitle("Карточка сотрудника");

use Bitrix\Main\Loader;
  Loader::includeModule("iblock");

$worker_ID = ($_GET['ID']);
$worker = [];
/*$iterator = CIBlockElement::GetPropertyValues(2, array('ACTIVE' => 'Y'), true, array('PROPERTY_ID_WORKER' => $worker_ID));
while ($row = $iterator->Fetch())
{
  $worker[] = $row;
}*/
$arOrder = array();
$arFilter = array("IBLOCK_ID" => 2, "ACTIVE" => "Y",  "PROPERTY_ID_WORKER" => $worker_ID);
$arSelectFields = array();
$res = CIBlockElement::GetList($arOrder, $arFilter, false, false, $arSelectFields);
/*while($ar_fields = $res->GetNext())
	{
		//echo $ar_fields['PREVIEW_PICTURE']." <br>";
		$img_path = CFile::GetPath($ar_fields["AVATAR"]);
		
		print_r($ar_fields);
		echo $img_path." <br>";
	}*/
$ob = $res->GetNextElement();
/*{ 
	$arProps = $ob->GetProperties();
    
    $worker[] = $arProps;
}*/
$worker = $ob->GetProperties();
$arFile = CFile::GetFileArray($worker["AVATAR"]['VALUE']);
//print_r($arFile);
?>
<body >
<div id="worker"><div class="img">
<img id="face_img" src="<?php echo $arFile['SRC'];?>" alt="фото сотрудника"/>
</div>
<div id="worker_name"><?php echo $worker['FIRST_NAME']['VALUE']." ".$worker['LAST_NAME']['VALUE'];?></div>
<table>
	<tr>
		<td>ID:</td>
		<td><?php echo $worker['ID_WORKER']['VALUE'];?></td>
	</tr>
	<tr>
		<td>e-mail:</td>
		<td><?php echo $worker['EMAIL']['VALUE'];?></td>
	</tr>
</table>
<div id="result">
	<script src="js/script.js"></script>
</div>
</div>
<a href="<?php echo SITE_DIR."list-workers.php";?>"><div class="navigation_button">НАЗАД</div></a>
</body>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>