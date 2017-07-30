<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile($_SERVER["DOCUMENT_ROOT"]."/bitrix/templates/".SITE_TEMPLATE_ID."/header.php");
use Bitrix\Main\Page\Asset;
$curPage = $APPLICATION->GetCurPage(true);
?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>" class="layout">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
		<link rel="shortcut icon" type="image/x-icon" href="<?=SITE_DIR?>favicon.ico" />
		<?$APPLICATION->ShowHead();?>
		<?
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/desktop.css');
		Asset::getInstance()->addCss('https://api.tiles.mapbox.com/mapbox-gl-js/v0.37.0/mapbox-gl.css');
		Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/jquery.min.js');
		Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/baron.min.js');
		Asset::getInstance()->addJs('https://api.tiles.mapbox.com/mapbox-gl-js/v0.37.0/mapbox-gl.js');
		Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/app.js');
		// Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/bootstrap.min.js');
		?>
	</head>
<body class="layout__body">
	<div id="panel"><?$APPLICATION->ShowPanel();?></div>

	<div class="layout__content">
		<div class="online">
			<div class="online__side">
				<div class="online__local">
					<div class="online__searchBar">
						<?$APPLICATION->IncludeComponent(
							"bitrix:search.title", 
							"mapSearch", 
							array(
								"CATEGORY_0" => array(
									0 => "iblock_gubkinskiy",
								),
								"CATEGORY_0_TITLE" => "",
								"CATEGORY_0_iblock_org" => array(
									0 => "all",
								),
								"CHECK_DATES" => "Y",
								"CONTAINER_ID" => "title-search",
								"INPUT_ID" => "title-search-input",
								"NUM_CATEGORIES" => "1",
								"ORDER" => "date",
								"PAGE" => "#SITE_DIR#search/index.php",
								"SHOW_INPUT" => "Y",
								"SHOW_OTHERS" => "N",
								"TOP_COUNT" => "5",
								"USE_LANGUAGE_GUESS" => "Y",
								"COMPONENT_TEMPLATE" => "mapSearch",
								"PRICE_CODE" => array(
								),
								"PRICE_VAT_INCLUDE" => "N",
								"PREVIEW_TRUNCATE_LEN" => "",
								"SHOW_PREVIEW" => "N",
								"CONVERT_CURRENCY" => "N",
								"CATEGORY_0_iblock_gubkinskiy" => array(
									0 => "1",
								)
							),
							false
						);?>
					</div>
					<div class="online__panels">
						<div class="online__dashboard">
							<?$APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								Array(
									"AREA_FILE_SHOW" => "file",
									"AREA_FILE_SUFFIX" => "inc",
									"EDIT_TEMPLATE" => "",
									"PATH" => "/include/dashboard.php"
								)
							);?>
						</div>
						<div class="online__dataViewer">
							<div class="dataViewer _visible">
								<div class="dataViewer__frames">