<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $item
 * @var array $actualItem
 * @var array $minOffer
 * @var array $itemIds
 * @var array $price
 * @var array $measureRatio
 * @var bool $haveOffers
 * @var bool $showSubscribe
 * @var array $morePhoto
 * @var bool $showSlider
 * @var string $imgTitle
 * @var string $productTitle
 * @var string $buttonSizeClass
 * @var CatalogSectionComponent $component
 */
?>


<header class="miniCard__header">
	<!-- <div class="miniCard__icon"></div> -->
	<h3 class="miniCard__headerTitle">
		<a href="<?=$item['DETAIL_PAGE_URL']?>" title="<?=$productTitle?>" class="miniCard__headerTitleLink"><?=$productTitle . ', '. $item['DISPLAY_PROPERTIES']['TYPE_ORG']['DISPLAY_VALUE']?></a>
	</h3>
</header>
<div class="miniCard__micro">
	<?=$item['PREVIEW_TEXT']?>
</div>
<div class="miniCard__desc _address">
	<div class="miniCard__address"><?=$item['DISPLAY_PROPERTIES']['ADDRESS']['DISPLAY_VALUE']?> - <?=$item['DISPLAY_PROPERTIES']['ADDRESS']['DESCRIPTION']?></div>
</div>
<?
// echo "<pre>";
// print_r($item['DISPLAY_PROPERTIES']['ADDRESS']['DESCRIPTION']);
?>
