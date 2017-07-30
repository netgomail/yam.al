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
$this->setFrameMode(true);

$INPUT_ID = trim($arParams["~INPUT_ID"]);
if(strlen($INPUT_ID) <= 0)
	$INPUT_ID = "title-search-input";
$INPUT_ID = CUtil::JSEscape($INPUT_ID);

$CONTAINER_ID = trim($arParams["~CONTAINER_ID"]);
if(strlen($CONTAINER_ID) <= 0)
	$CONTAINER_ID = "title-search";
$CONTAINER_ID = CUtil::JSEscape($CONTAINER_ID);

if($arParams["SHOW_INPUT"] !== "N"):?>

<div class="searchBar">
<div class="searchBar__forms">
	<div class="searchBar__formsIn">
		<a class="searchBar__logo" href="/"></a>
		<form action="<?echo $arResult["FORM_ACTION"]?>" class="searchBar__form" onsubmit="return false;">
		<div class="searchBar__textfield _directory">
			<div class="suggest">
				<div class="suggest__wrapper">
					<div class="suggest__header"></div>
					<input autocomplete="off" autofocus id="<?echo $INPUT_ID?>" type="text" name="q" value="<?=htmlspecialcharsbx($_REQUEST["q"])?>" autocomplete="off" class="suggest__input _hiddenText"/>
					<div class="suggest__clone"><span class="suggest__cloneMain"></span><span class="suggest__cloneHint"></span></div>
					<span class="suggest__clearInputLink"></span>
				</div>
			</div>
		</div>
		<button class="searchBar__submit _directory" type="submit">
			<span class="preloader searchBar__preloader _scheme_submit _small"></span>
		</button>
	</form>
	</div>
</div>
<div class="searchBar__buttons">
	<a class="searchBar__button searchBar__rsBtn _lang_rus" href="/"><span class="searchBar__buttonText">Проезд</span></a>
</div>
</div>

<?endif?>
<script>
	BX.ready(function(){
		new JCTitleSearch({
			'AJAX_PAGE' : '<?echo CUtil::JSEscape(POST_FORM_ACTION_URI)?>',
			'CONTAINER_ID': '<?echo $CONTAINER_ID?>',
			'INPUT_ID': '<?echo $INPUT_ID?>',
			'MIN_QUERY_LEN': 2
		});
	});
</script>

