<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (!CModule::IncludeModule("socialnetwork"))
{
	ShowError(GetMessage("SONET_MODULE_NOT_INSTALL"));
	return;
}

$arParams["ID"] = intval($arParams["ID"]);
if ($arParams["ID"] <= 0)
	$arParams["ID"] = intval($USER->GetID());

$arParams["SET_NAV_CHAIN"] = ($arParams["SET_NAV_CHAIN"] == "N" ? "N" : "Y");

if ($arParams["USER_VAR"] == '')
	$arParams["USER_VAR"] = "user_id";
if ($arParams["PAGE_VAR"] == '')
	$arParams["PAGE_VAR"] = "page";
$arParams["PATH_TO_USER"] = trim($arParams["PATH_TO_USER"]);
if ($arParams["PATH_TO_USER"] == '')
	$arParams["PATH_TO_USER"] = htmlspecialcharsbx($APPLICATION->GetCurPage()."?".$arParams["PAGE_VAR"]."=user&".$arParams["USER_VAR"]."=#user_id#");

if ($arParams["NAME_TEMPLATE"] == '')
	$arParams["NAME_TEMPLATE"] = CSite::GetNameFormat();
$bUseLogin = $arParams['SHOW_LOGIN'] != "N" ? true : false;

if (!CSocNetUser::IsFriendsAllowed())
{
	$arResult["FatalError"] = GetMessage("SONET_C35_NO_FR_FUNC").". ";
}
else
{
	if (!$GLOBALS["USER"]->IsAuthorized())
	{	
		$arResult["NEED_AUTH"] = "Y";
	}
	else
	{
		$dbUser = CUser::GetByID($arParams["ID"]);
		$arResult["User"] = $dbUser->GetNext();

		if (!is_array($arResult["User"]))
		{
			$arResult["FatalError"] = GetMessage("SONET_P_USER_NO_USER").". ";
		}
		else
		{
			$arResult["CurrentUserPerms"] = CSocNetUserPerms::InitUserPerms($GLOBALS["USER"]->GetID(), $arResult["User"]["ID"], CSocNetUser::IsCurrentUserModuleAdmin());

			if (!$arResult["CurrentUserPerms"]["IsCurrentUser"])
				$arResult["CurrentUserRelation"] = CSocNetUserRelations::GetRelation($GLOBALS["USER"]->GetID(), $arResult["User"]["ID"]);

			$arResult["Urls"]["User"] = CComponentEngine::MakePathFromTemplate($arParams["PATH_TO_USER"], array("user_id" => $arResult["User"]["ID"]));

			$arResult["User"]["NAME_FORMATTED"] = CUser::FormatName($arParams['NAME_TEMPLATE'], $arResult["User"], $bUseLogin);
		
			if ($arParams["SET_TITLE"] == "Y" || $arParams["SET_NAV_CHAIN"] != "N")
			{
				$arParams["TITLE_NAME_TEMPLATE"] = str_replace(
					array("#NOBR#", "#/NOBR#"), 
					array("", ""), 
					$arParams["NAME_TEMPLATE"]
				);
				$strTitleFormatted = CUser::FormatName($arParams['TITLE_NAME_TEMPLATE'], $arResult["User"], $bUseLogin);	
			}
			
			if ($arParams["SET_TITLE"] == "Y")
				$APPLICATION->SetTitle($strTitleFormatted.": ".GetMessage("SONET_C35_PAGE_TITLE"));

			if ($arParams["SET_NAV_CHAIN"] != "N")
			{
				$APPLICATION->AddChainItem($strTitleFormatted, $arResult["Urls"]["User"]);
				$APPLICATION->AddChainItem(GetMessage("SONET_C35_PAGE_TITLE"));
			}

			if ($arResult["CurrentUserPerms"]["IsCurrentUser"])
			{
				$arResult["FatalError"] = GetMessage("SONET_C35_SELF").". ";
			}
			elseif ($arResult["CurrentUserRelation"] != SONET_RELATIONS_FRIEND)
			{
				$arResult["FatalError"] = GetMessage("SONET_C35_NOT_FRIEND").". ";
			}
			else
			{
				$arResult["ShowForm"] = "Input";
				if ($_SERVER["REQUEST_METHOD"]=="POST" && $_POST["save"] <> '' && check_bitrix_sessid())
				{
					$errorMessage = "";

					if ($errorMessage == '')
					{
						if (!CSocNetUserRelations::DeleteRelation($GLOBALS["USER"]->GetID(), $arResult["User"]["ID"]))
						{
							if ($e = $APPLICATION->GetException())
								$errorMessage .= $e->GetString();
						}
					}

					if ($errorMessage <> '')
						$arResult["ErrorMessage"] = $errorMessage;
					else
						$arResult["ShowForm"] = "Confirm";
				}
			}
		}
	}
}
$this->IncludeComponentTemplate();
?>