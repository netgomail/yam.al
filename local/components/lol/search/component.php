<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

if(!IsModuleInstalled("search"))
{
	ShowError(GetMessage("CC_BST_MODULE_NOT_INSTALLED"));
	return;
}

$arResult["CATEGORIES"] = array();

$query = ltrim($_POST["q"]);
if(
	!empty($query)
	&& $_REQUEST["ajax_call"] === "y"
	&& (
		!isset($_REQUEST["INPUT_ID"])
		|| $_REQUEST["INPUT_ID"] == $arParams["INPUT_ID"]
	)
	&& CModule::IncludeModule("search")
)
{
	CUtil::decodeURIComponent($query);

	$arResult["alt_query"] = "";

	$arLang = CSearchLanguage::GuessLanguage($query);
	if(is_array($arLang) && $arLang["from"] != $arLang["to"])
		$arResult["alt_query"] = CSearchLanguage::ConvertKeyboardLayout($query, $arLang["from"], $arLang["to"]);

	$arResult["query"] = $query;
	$arResult["phrase"] = stemming_split($query, LANGUAGE_ID);

	$obSearch = new CSearch;
	$obSearch->Search(array(
		"QUERY" => $arResult["alt_query"]? $arResult["alt_query"]: $arResult["query"],
		"SITE_ID" => LANG,
		//"MODULE_ID" => $module_id,
	),
	array(),
	array(),
	false
	);
		while($ar = $obSearch->Fetch())
		{
			$arResult["CATEGORIES"]["ITEMS"][] = $ar;
		}


}









// 
$arResult["FORM_ACTION"] = htmlspecialcharsbx(str_replace("#SITE_DIR#", SITE_DIR, $arParams["PAGE"]));

if (
	$_REQUEST["ajax_call"] === "y"
	&& (
		!isset($_REQUEST["INPUT_ID"])
		|| $_REQUEST["INPUT_ID"] == $arParams["INPUT_ID"]
	)
)
{
	$APPLICATION->RestartBuffer();

	if(!empty($query))
		$this->IncludeComponentTemplate('ajax');
	CMain::FinalActions();
	die();
}
else
{
	$APPLICATION->AddHeadScript($this->GetPath().'/script.js');
	CUtil::InitJSCore(array('ajax'));
	$this->IncludeComponentTemplate();
}

