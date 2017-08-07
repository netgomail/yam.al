<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile($_SERVER["DOCUMENT_ROOT"]."/bitrix/templates/".SITE_TEMPLATE_ID."/header.php");
use Bitrix\Main\Page\Asset;
$curPage = $APPLICATION->GetCurPage(true);
?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">

		<script type="text/javascript" async src="/local/templates/gis/app.js"></script>
		<!-- <link rel="stylesheet" href="/local/templates/gis/styles.css"> -->
		<?//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/lib/js/simple-scrollbar.min.js')?>
		<?//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/lib/js/app.js')?>
		<?$APPLICATION->ShowHeadStrings()?>
		<?$APPLICATION->ShowHeadScripts()?>
		<?//$APPLICATION->ShowHead();?>
		<title>Ямал</title>
		<?$APPLICATION->IncludeFile(SITE_DIR.'include/grid_css.php');?>
	</head>
	<body>
		<div class="online">
			<div class="online__side">
				<div class="online__local">
					<!-- online__searchBar -->
						<?
						// $APPLICATION->IncludeComponent(
						// 	"bitrix:search.title", 
						// 	"", 
						// 	array(
						// 		"CATEGORY_0" => array(
						// 			0 => "no",
						// 		),
						// 		"CATEGORY_0_TITLE" => "",
						// 		"CATEGORY_0_iblock_org" => array(
						// 			0 => "all",
						// 		),
						// 		"CHECK_DATES" => "Y",
						// 		"CONTAINER_ID" => "title-search",
						// 		"INPUT_ID" => "title-search-input",
						// 		"NUM_CATEGORIES" => "1",
						// 		"ORDER" => "date",
						// 		"PAGE" => "#SITE_DIR#search/index.php",
						// 		"SHOW_INPUT" => "Y",
						// 		"SHOW_OTHERS" => "N",
						// 		"TOP_COUNT" => "5",
						// 		"USE_LANGUAGE_GUESS" => "Y",
						// 		"COMPONENT_TEMPLATE" => "",
						// 		"PRICE_CODE" => "",
						// 		"PRICE_VAT_INCLUDE" => "N",
						// 		"PREVIEW_TRUNCATE_LEN" => "",
						// 		"SHOW_PREVIEW" => "N",
						// 		"CONVERT_CURRENCY" => "N",
						// 		"CATEGORY_0_iblock_gubkinskiy" => array(
						// 			0 => "1",
						// 		)
						// 	),
						// 	false
						// );
						?>
					<!-- end online__searchBar -->
				</div>
			</div>
			<div style="padding-top: 10rem; padding-left: 10rem">
			<?$APPLICATION->IncludeComponent(
							"lol:search", 
							"", 
							array(
								"CATEGORY_0" => array(
									0 => "no",
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
								"COMPONENT_TEMPLATE" => "",
								"PRICE_CODE" => "",
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
			<script>

			</script>
			</div>
		</div>
	</body>
</html>