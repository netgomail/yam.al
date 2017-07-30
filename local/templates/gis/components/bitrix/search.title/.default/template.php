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
$this->setFrameMode(true);?>
<?
$INPUT_ID = trim($arParams["~INPUT_ID"]);
if(strlen($INPUT_ID) <= 0)
	$INPUT_ID = "title-search-input";
$INPUT_ID = CUtil::JSEscape($INPUT_ID);

$CONTAINER_ID = trim($arParams["~CONTAINER_ID"]);
if(strlen($CONTAINER_ID) <= 0)
	$CONTAINER_ID = "title-search";
$CONTAINER_ID = CUtil::JSEscape($CONTAINER_ID);

if($arParams["SHOW_INPUT"] !== "N"):?>
<?$APPLICATION->IncludeFile(SITE_DIR.'local/templates/gis/components/bitrix/search.title/.default/style.php');?>
<div class="online__searchBar">
	<div class="searchBar _mode_directory _rs">
	<div class="searchBar__forms">
		<div class="searchBar__formsIn">
			<a class="searchBar__logo" href="/"></a>
		<form class="searchBar__form" action="<?echo $arResult["FORM_ACTION"]?>">
			<div class="searchBar__textfield _directory">
				<div class="suggest _placeholder"  id="<?echo $CONTAINER_ID?>">
					<div class="suggest__wrapper">
						<input id="<?echo $INPUT_ID?>" class="suggest__input _hiddenText" type="text" name="q" placeholder="услуги и товары, организации, адреса" value="" size="40" maxlength="50" autocomplete="off" />
						<!-- <input name="s" type="submit" value="Кнопка" /> -->
						<div class="suggest__clone"></div>
						<div class="suggest__suggestsWrapper"></div>
					</div>
				</div>
			</div>
		</form>
		</div>
	</div>
	</div>
</div>
<?endif?>
<script>
	// document.addEventListener('DOMContentLoaded', function () {
	// 	sphinx.init()
	// })	
</script>

