<?
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

$post = json_decode(file_get_contents('php://input'));
$post = (array)$post;
if ($post && CModule::IncludeModule("search")) {
	$q = $post['value'];
	$module_id = "iblock";
	//Эту строку заменяем
	//$obSearch = new CSearch($q, LANG, $module_id);
	// на следующую:
	$obSearch = new CSearch;
	$obSearch->Search(array(
		"QUERY" => $q,
		"SITE_ID" => LANG,
		"MODULE_ID" => $module_id,
	));
	if ($obSearch->errorno!=0):
		?>
		<font class="text">В поисковой фразе обнаружена ошибка:</font>
		<?echo ShowError($obSearch->error);?>
		<font class="text">Исправьте поисковую фразу и повторите поиск.</font>
		<?
	else:
		echo '<ul class="suggest__suggests">';
		while($arResult = $obSearch->GetNext())
		{
		?>
		<li class="suggest__suggestsItem _count_1">
			<a href="<?echo $arResult["URL"]?>"><?echo $arResult["TITLE_FORMATED"]?></a>
		</li>
		<?
		}
		echo "</ul>";
	endif;
} else {
	echo "nothing!";
}
//print_r($post['value']);