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



$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));
// echo "<pre>";
// print_r($arResult);
?>
<div class="frame__content">
	<div class="rubricsList">
		<div class="rubricsList__scroller _scrollbar">
			<section class="rubricsList__container">
				<div class="rubricsList__headerWrapper">
					<header class="fix rubricsList__header">
						<h1 class="rubricsList__headerTitle">Справочник организаций<?=$secCount?></h1>
<!-- 						<span class="rubricsList__headerCounter">
							<span class="rubricsList__headerCounterRubrics">0</span>&nbsp;рубрик
						</span> -->
					</header>
				</div>
				<div class="rubricsList__content">
					<ul class="rubricsList__list">
					<?foreach ($arResult['SECTIONS'] as &$arSection): 
					$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
					$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
					?>
						<li class="rubricsList__listItem" id="<? echo $this->GetEditAreaId($arSection['ID']); ?>">
						<a href="<? echo $arSection['SECTION_PAGE_URL']; ?>" class="link _scheme_none rubricsList__listItemLinkTitle">
							<h3 class="rubricsList__listItemLink">
								<? echo $arSection['NAME']; ?>
							</h3>
							<span class="rubricsList__listItemDescription"><? echo $arSection['DESCRIPTION']; ?></span>
						</a>
						</li>
					<?endforeach ?>
					</ul>
				</div>
			</section>
			<div class="track">
				<div class="track__bar"></div>
			</div>
		</div>
	</div>
</div>