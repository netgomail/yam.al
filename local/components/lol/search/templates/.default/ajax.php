<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
// echo "<pre>";
// print_r($arResult);
if(!empty($arResult["CATEGORIES"])):?>
	<ul class="title-search-result">
		<?foreach($arResult["CATEGORIES"] as $category_id => $arCategory):?>
			
<?
// echo "<pre>";
// print_r($arCategory);
?>
			<?foreach($arCategory as $i => $arItem):?>
<li><a href="<?echo $arItem["URL_WO_PARAMS"]?>"><?echo $arItem["BODY_FORMATED"]?></a></li>
			<?endforeach;?>
		<?endforeach;?>
	</ul>
<?endif;
?>