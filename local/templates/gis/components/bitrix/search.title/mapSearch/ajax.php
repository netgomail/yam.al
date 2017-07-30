<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
if (empty($arResult["CATEGORIES"]))
return;
?>
<ul class="suggest__suggests">
	<?foreach($arResult["CATEGORIES"] as $category_id => $arCategory):?>
	<?foreach($arCategory["ITEMS"] as $i => $arItem):?>
	<?//echo $arCategory["TITLE"]?>
	<?if($category_id === "all"):?>
	<?elseif(isset($arResult["ELEMENTS"][$arItem["ITEM_ID"]])):
	$arElement = $arResult["ELEMENTS"][$arItem["ITEM_ID"]];?>
	<li class="suggest__suggestsItem _count_1">
		<?if (is_array($arElement["PICTURE"])):?>
		<div class="bx_img_element">
			<div class="bx_image" style="background-image: url('<?echo $arElement["PICTURE"]["src"]?>')"></div>
		</div>
		<?endif;?>
		<div class="bx_item_element">
			<a href="<?echo $arItem["URL"]?>"><?echo $arItem["NAME"]?></a>
			<?
			foreach($arElement["PRICES"] as $code=>$arPrice)
			{
			if ($arPrice["MIN_PRICE"] != "Y")
			continue;
			if($arPrice["CAN_ACCESS"])
			{
			if($arPrice["DISCOUNT_VALUE"] < $arPrice["VALUE"]):?>
			<div class="bx_price">
				<?=$arPrice["PRINT_DISCOUNT_VALUE"]?>
				<span class="old"><?=$arPrice["PRINT_VALUE"]?></span>
			</div>
			<?else:?>
			<div class="bx_price"><?=$arPrice["PRINT_VALUE"]?></div>
			<?endif;
			}
			if ($arPrice["MIN_PRICE"] == "Y")
			break;
			}
			?>
		</div>
		
	</li>
	<?else:?>
	<li class="suggest__suggestsItem _count" data-id="<?echo $arItem["ITEM_ID"]?>">
		<div class="suggest__text">
			<div class="suggest__lineWrapper">
				<div class="suggest__tokenWrap">
					<a href="<?echo $arItem["URL"]?>"><?echo $arItem["NAME"]?></a>
				</div>
			</div>
		</div>
	</li>
	<?endif;?>
	<?endforeach;?>
	<?endforeach;?>
</ul>
