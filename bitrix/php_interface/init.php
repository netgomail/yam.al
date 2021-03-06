<?
//AddEventHandler("shs.parser", "parserBeforeAddElementCatalog", Array("BeforeAdd", "parserBeforeAddElementCatalogHandler"));
AddEventHandler("shs.parser", "parserCatalogDetail", Array("AvitoImg", "parserCatalogDetailHandler"));
AddEventHandler("shs.parser", "EndPars", Array("DelFiles", "EndParsHandler"));



// class BeforeAdd

// {

//     function parserBeforeAddElementCatalogHandler(&$_this, &$el)
//     {
//         echo "<pre>";
//         print_r($el);

//     }
// }


class AvitoImg
{
    // создаем обработчик события "parserCatalogDetailHandler"
    function parserCatalogDetailHandler($ID, &$el, &$arFields)
    {
        if ($ID == '1') {
            $els = pq($el);
            preg_match("/avito\.item\.phone\s*=\s*'\K(?:[^'\\\\]+|\\\\.)*/", $els, $phone);
            preg_match("/avito\.item\.id\s*=\s*'\K(?:[^'\\\\]+|\\\\.)*/", $els, $id);
            $key = $phone[0];
            $id = $id[0];
            // Функция для получения ключа
            preg_match_all("/[\da-f]+/",$key,$pre);
            $pre = $id%2==0 ? array_reverse($pre[0]) : $pre[0];
            $mixed = join('',$pre);
            $s = strlen($mixed);
            $r='';
            for($k=0; $k<$s; ++$k) {
                if ($k%3==0) {
                    $r .= substr($mixed,$k,1);
                }
            }
            // Получаем картинку
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://www.avito.ru/items/phone/".$id."?pkey=".$r);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.24 Safari/537.36');
            curl_setopt($ch, CURLOPT_REFERER, $arFields['LINK']);
            $html = curl_exec($ch);
            curl_close($ch);
            $arr = json_decode($html);

            // Сохраняем на сервере картинку, а за тем передаем ее методу CFile::MakeFileArray
            $uniqe = $_SERVER["DOCUMENT_ROOT"] . "/upload/parser/" . uniqid() . ".png";
            copy( $arr->image64, $uniqe);

            $arImg = CFile::MakeFileArray($uniqe);
            $arFields['PROPERTY_VALUES']['AVITO_PHONE']['n0'] = array("VALUE" => $arImg, "DESCRIPTION" => 'avito');
        }
        if ($ID == '4') {
            foreach (pq('.afisha-day') as $key => $li) {
                $dates[$key]['VALUE'] = str_replace('-', '.', pq($li)->attr('data-date')) . ' 10:00:00';
                $dates[$key]['DESCRIPTION'] = pq($li)->find('.dayname')->text();
            }
            $arFields['PROPERTY_VALUES']['TIME'] = $dates;

            foreach (pq('.film-seances-item ') as $key => $li) {
                $seances[$key]['VALUE'] = pq($li)->find('.seance')->text();
                $seances[$key]['DESCRIPTION'] = pq($li)->find('.price-value')->text();
            }
            $arFields['PROPERTY_VALUES']['PRICE'] = $seances;
            $arFields['DATE_ACTIVE_FROM'] = '18.07.2017';
            //echo pq('.film-seances-item ');
            // echo "<pre>";
            // print_r($arFields);
        }
        if ($ID == '5') {
            echo pq();
            foreach (pq('.weather-forecast--detailed') as $key => $tr) {
                pq($tr)->find('.weather-forecast__item:eq(4)')->remove();
                foreach (pq($tr)->find('.weather-forecast__item') as $item => $el) {
                    $result[$key][] = pq($el)->find('.weather-forecast__value')->text();
                }
                //$result[] = pq($tr)->find('.weather-forecast__value')->text();
                // $forecast[$key]['VALUE'] = pq($tr)->find('.weather-table__temperature-day')->text();
                // $forecast[$key]['DESCRIPTION'] = pq($tr)->find('.weather-table__temperature-night')->text();
            }
            echo '<pre>';
            print_r($result);
            // $arFields['PROPERTY_VALUES']['WEATHER'] = $forecast;

        }
        if ($ID == '3') {
            sleep(8);
            define('PATERN','~<a class="person-action button button-solid button-blue button-large action-link link action-show-number
 js-action-show-number  "(.*?)phone/(.*?)".*~is');
            pq($el)->find('.js-write-message')->remove();
            $pat = pq($el)->find('.js-person-actions .clearfix')->html();
            preg_match_all(PATERN, $pat, $matches);
            $key = $matches[2][0];
            // echo "<pre>";
            // print_r($matches[2][0]);

            $link = $arFields['LINK'] . '/phone/' . $key . '?async';
            $ch = curl_init();
            curl_setopt ($ch , CURLOPT_URL , $link);
            $headers = array(
                'x-requested-with: XMLHttpRequest',
                'accept: application/json, text/javascript, */*; q=0.01',
                'accept-language: ru-RU,ru;q=0.8,en-US;q=0.6,en;q=0.4,uk;q=0.2',
                'user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.24 Safari/537.36',
                'referer: ' . str_replace(SCHEME . DOMAIN,'',$arFields['LINK']), // game of imitation :)
            );
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER , 1 );
            $content = curl_exec($ch);
            curl_close($ch);
            echo "<pre>";
            print_r(json_decode($content, true));
        }

    }
}
class DelFiles
{
    // создаем обработчик события "EndParsHandler"
    function EndParsHandler($ID)
    {
        if ($ID == '1')
            // Удаляем все картинки
            array_map('unlink', glob($_SERVER["DOCUMENT_ROOT"] . "/upload/parser/" . "*.png"));
    }
}