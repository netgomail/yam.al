<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";

$itemSize = count($arResult);
?>
	<script type="application/ld+json">
	{
	 "@context": "http://schema.org",
	 "@type": "BreadcrumbList",
	 "itemListElement":[
<?
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1) {
	?>
	  {
	   "@type": "ListItem",
	   "position": "<?=$index+1?>",
	   "item":
			   {
			    "@id": "<?=$arResult[$index]['LINK']?>",
			    "name": "<?=$title?>"
			    }
	  },
	<?
	}
	else {?>
			  {
	   "@type": "ListItem",
	   "position": "<?=$index+1?>",
	   "item":
			   {
			    "@id": "<?=$arResult[$index]['LINK']?>",
			    "name": "<?=$title?>"
			    }
	  }
	<?}
}
?>
	 
	]
}
	</script>