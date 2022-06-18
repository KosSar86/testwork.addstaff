<?
 
IncludeModuleLangFile(__FILE__);
 
if (class_exists("my_add_staff"))
	return;
use \Bitrix\Main\ModuleManager;
 
Class my_add_staff extends CModule
{
 
    var $MODULE_ID = "my.add_staff";
    var $MODULE_VERSION;
    var $MODULE_VERSION_DATE;
    var $MODULE_NAME;
    var $MODULE_DESCRIPTION;
    var $errors;
 
    function __construct()
    {
        $arModuleVersion = array();
		
		include(dirname(__FILE__)."/version.php");
        $this->MODULE_VERSION = $arModuleVersion["VERSION"];
        $this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];
        $this->MODULE_NAME = "Пример модуля D7";
        $this->MODULE_DESCRIPTION = "Тестовый модуль для разработчиков, можно использовать как основу для разработки новых модулей для 1С:Битрикс";
    }
 
    function DoInstall()
    {
        $this->InstallDB();
        $this->InstallEvents();
        $this->InstallFiles();
        RegisterModule("brainkit.d7");
        return true;
    }
 
    function DoUninstall()
    {
        $this->UnInstallDB();
        $this->UnInstallEvents();
        $this->UnInstallFiles();
        UnRegisterModule("brainkit.d7");
        return true;
    }
 
    function InstallDB()
    {
        global $DB;
        $this->errors = false;
        $this->errors = $DB->RunSQLBatch($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/brainkit.d7/install/db/install.sql");
        if (!$this->errors) {
 
            return true;
        } else
            return $this->errors;
    }
 
    function UnInstallDB()
    {
        global $DB;
        $this->errors = false;
        $this->errors = $DB->RunSQLBatch($_SERVER['DOCUMENT_ROOT'] . "/local/modules/Brainkit.D7/install/db/uninstall.sql");
        if (!$this->errors) {
            return true;
        } else
            return $this->errors;
    }
 
    function InstallEvents()
    {
        return true;
    }
 
    function UnInstallEvents()
    {
        return true;
    }
 
    function InstallFiles()
    {
        return true;
    }
 
    function UnInstallFiles()
    {
        return true;
    }
}