<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

use Bitrix\Main\Loader;
Loader::includeModule("iblock");
  
if(isset($_POST['sendFromJS'])) { 								// проверяю наличие посылки из js в POST
	if($_POST['sendFromJS'] == "deleteAll") {					// если пришло сообщение "deleteAll"
		$arEls = Array();
		$arSelect = Array("ID");
		$arFilter = Array("IBLOCK_ID" => '2');
		$res = CIBlockSection::GetList();
		while ($ob = $res->GetNext()) {							// получаю список разделов инфоблока
			$arEls[] = $ob;
		}
		foreach ($arEls as $el) {								// для каждого раздела провожу процедуру удаления, если неудачно, то выводится сообщение об ошибке
			if(!CIBlockSection::Delete($el["ID"]))
				echo "ERROR delete " . $el["ID"];
		}
		echo ("Все данные из инфоблока удалены");				// если цикл удаления прошел успешно, вывожу сообщение инфоблок очищен
	}
	else{
		$workers = $_POST['sendFromJS'];						// если из JS пришел массив
		$arEls = Array();
		$arSelect = Array("ID");
		$arFilter = Array("IBLOCK_ID" => '2');
		$res = CIBlockSection::GetList();
		while ($ob = $res->GetNext()) {							// получаю список разделов инфоблока
			$arEls[] = $ob;
		}
		foreach ($arEls as $el) {								
			if($el["NAME"] = "Страница ".$workers[$i]["page"])	// проверяю не существует ли уже раздел с таким именем в инфоблоке
			exit ("Эти данные уже были загружены в инфоблок ранее!"); // если существует прерываю выполнение
		}
		for ($i = 0, $j = 0; $i < count($workers); $i++){		// запускаю цикл перебора обьектов массива
			if ($j!=$workers[$i]["page"]){							// ставлю счетчик чтобы не создавать раздел для обьекта, если он уже был создан ранее
				$bs[$i] = new CIBlockSection;
				$arFields = Array(									// формирую массив свойств раздела для создания в инфоблоке
					"ACTIVE" => "Y",
					"ID" => $worker["page"],
					"IBLOCK_ID" => "2",
					"NAME" => "Страница ".$workers[$i]["page"],
				);
				$ID = $bs[$i]->Add($arFields);						// создаю раздел инфоблока
				$res = ($ID>0);
				$j = $workers[$i]["page"];							// если раздел создан, присваиваю счетчеку номер страницы
				if(!$res)
				echo $bs->LAST_ERROR;								// если не создан вывожу сообщение об ошибке
			}
			$res = CIBlockSection::GetList (						// после создания раздела вновь получаю список разделов, с фильтрацией по названию раздела для конкретного сотрудника
				Array("ID" => "ASC"),
				Array("IBLOCK_ID" => 2, "ACTIVE" => "Y", "NAME" => "Страница ".$workers[$i]["page"]),
				false,
				Array('ID', 'NAME', 'SECTION_PAGE_URL', 'PICTURE')
			);
			$arItem = $res->GetNext();
			
			$el = new CIBlockElement;
			$PROP = array();											//формирую массив из свойств элементов и их значений для загрузки в инфоблок
			$PROP['ID_WORKER']  = $workers[$i]["id"];
			$PROP['FIRST_NAME'] = $workers[$i]["first_name"];  
			$PROP['LAST_NAME']  = $workers[$i]["last_name"]; 
			$PROP['EMAIL']      = $workers[$i]["email"];
			$PROP['AVATAR']     = CFile::MakeFileArray($workers[$i]["avatar"]);
			
			$arLoadStaffArray = Array(									// массив загрузки в инфоблок
				"MODIFIED_BY"       => $USER->GetID(), 
				"IBLOCK_SECTION_ID" => $arItem['ID'],
				"IBLOCK_ID"         => 2,
				"PROPERTY_VALUES"   => $PROP,
				"NAME"              => $workers[$i]["last_name"],
				"ACTIVE"            => "Y",            
			);
			
			if($WORKER_ID = $el->Add($arLoadStaffArray))				// если данные загружены вывожу сообщение
				echo "загружен сотрудник с ID: ".$workers[$i]["id"]."</br>";
			else
				echo "Error: ".$el->LAST_ERROR;							// или сообщение об ощибке
		};
	};
	die();
}   
?>
