<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if(!empty($arResult["CATEGORIES"])):?>
	<ul class="suggest__suggests">
		<?foreach($arResult["CATEGORIES"] as $category_id => $arCategory):?>
			<?foreach($arCategory["ITEMS"] as $i => $arItem):?>
			<li class="suggest__suggestsItem _count_1">
				<?echo $arItem["NAME"]?>
			</li>
			<?endforeach;?>
		<?endforeach;?>
	</ul>
<?endif;
?>