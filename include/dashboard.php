<?use Bitrix\Main\Type\DateTime;?>
<style>
.online__dashboard, .online__sideOverlay {
	position: absolute;
	top: 0px;
	bottom: 0px;
	width: 0px;
}
._type_navigator.contextPromo .contextPromo__storeIcon, .dashboard {
	position: relative;
}
.dashboard {
	width: 460px;
	color: #f0f0f0;
	word-wrap: break-word;
	font: 14px/16px Helvetica, Arial, sans-serif;
}
.dashboard__close {
	position: absolute;
	top: 4px;
	right: 4px;
	width: 16px;
	height: 16px;
	z-index: 2;
	cursor: pointer;
}
.dashboard__close::before {
	background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMCIgaGVpZ2h0PSIxMCIgdmlld0JveD0iMCAwIDEwIDEwIj48cGF0aCBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZmlsbD0iIzhDODc4MiIgZD0iTTEwLDEwSDguNTg2TDUsNi40MTRMMS40MTQsMTBIMFY4LjU4NUwzLjU4Niw1TDAsMS40MTRWMGgxLjQxNAlMNSwzLjU4NUw4LjU4NiwwSDEwdjEuNDE0TDYuNDE0LDVMMTAsOC41ODVWMTB6Ii8+PC9zdmc+);
	background-repeat: no-repeat;
	position: absolute;
	top: 4px;
	left: 4px;
	width: 8px;
	height: 8px;
	background-size: 100%;
	content: "";
}
.dashboard__wrap {
	position: relative;
	overflow: hidden;
	margin: 0 0 8px;
}
.dashboard__ads {
	position: relative;
	z-index: 0;
	visibility: visible;
	overflow: hidden;
	max-width: 460px;
	border-radius: 3px;
	background: rgba(51,51,51,.9);
	-webkit-animation: dashboard__promoInit 1s;
	animation: dashboard__promoInit 1s;
}
:not(:empty).dashboard__ads {
	box-shadow: 0px 2px 0px 0px rgba(0,0,0,0.07);
}
.googleTagAds {
	position: relative;
}
._type_start.googleTagAds {
	overflow: hidden;
	border-radius: 0 0 2px 2px;
}
._citySelect.dashboard .dashboard__wrap, .dashboard__body {
	height: 100%;
}
._simpleView._citySelect.dashboard .dashboard__city, .dashboard__body {
	border-radius: 3px 3px 0 0;
	background: rgba(51,51,51,.9);
}
.dashboard__footer {
	visibility: visible;
	padding: 18px 20px;
	border-top: 1px solid rgba(255, 255, 255, .07);
	box-shadow: 0px -1px rgba(0,0,0,0.1);
	border-radius: 0 0 3px 3px;
	background-color: rgba(51,51,51,.8);
	max-height: 56px;
	box-sizing: border-box;
}
/* @media only screen and (max-height:668px) */
.dashboard__footer {
	padding: 14px 20px;
	max-height: 48px;
}
.dashboard__footerLinks {
	display: -webkit-box;
	display: -webkit-flex;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-pack: justify;
	-webkit-justify-content: space-between;
	-ms-flex-pack: justify;
	justify-content: space-between;
}
.dashboard__footerLink {
	position: relative;
	display: inline-block;
	-webkit-box-flex: 0;
	-webkit-flex: 0 1 auto;
	-ms-flex: 0 1 auto;
	flex: 0 1 auto;
	text-decoration: none;
	cursor: pointer;
	color: #ffe6aa;
	font: 12px/16px Helvetica, Arial, sans-serif;
}
.dashboard__footerLink::after {
	display: none;
	position: absolute;
	top: -7px;
	left: 12px;
	min-width: 14px;
	min-height: 14px;
	box-sizing: border-box;
	padding: 0 3px;
	background: #f05e5f;
	color: #fff;
	font: 10px/14px Helvetica, Arial, sans-serif;
	text-align: center;
	border-radius: 7px;
	content: attr(data-notifications);
}
._hasNotifications.dashboard__footerLink::after {
	display: block;
}
.icon {
	display: inline-block;
	pointer-events: none;
}
.dashboard__footerLinkIcon {
	vertical-align: middle;
	fill: #fff;
}
.dashboard__footerLinkTitle {
	vertical-align: middle;
	margin-left: 8px;
}
._type_interesting.dashboard__footerLink .dashboard__footerLinkIcon {
	width: 16px;
	height: 16px;
}
.dashboard__weather {
	position: absolute;
	top: 17px;
	right: 39px;
	z-index: 1;
}
.dashboard__city {
	position: relative;
	z-index: 0;
	padding: 10px 24px 10px 60px;
	min-height: 56px;
	border-bottom: 1px solid #222;
	border-bottom: 1px solid rgba(0, 0, 0, .1);
	box-shadow: 0px 1px rgba(255,255,255,0.1);
}
.dashboard__cityselect {
	position: absolute;
	top: 74px;
	right: 0px;
	bottom: 0px;
	left: 0px;
	visibility: hidden;
}
.dashboard__metarubrics {
	visibility: visible;
	margin: 0 -5px;
	padding: 11px 0 7px;
	border-bottom: 1px solid #222;
	border-bottom: 1px solid rgba(0, 0, 0, .1);
	box-shadow: 0px 1px rgba(255,255,255,0.1);
	list-style: none;
	white-space: nowrap;
}
.dashboard__promo {
	visibility: visible;
	position: relative;
}
/* @media only screen and (max-height:624px) */
.dashboard__promo {
	display: none;
}
.dashboard__metarubricsItem {
	position: relative;
	display: inline-block;
	box-sizing: border-box;
	padding: 54px 5px 0;
	width: 20%;
	color: #f0f0f0;
	vertical-align: top;
	text-align: center;
	text-decoration: none;
	font: 12px/14px Helvetica, Arial, sans-serif;
	cursor: pointer;
}
.dashboard__metarubricsItem::before {
	position: absolute;
	top: 0px;
	left: 50%;
	z-index: 1;
	margin: 0 0 0 -22px;
	width: 44px;
	height: 44px;
	border-radius: 26px;
	background: #fff;
	content: "";
	-webkit-transition: -webkit-transform .1s linear;
	transition: transform .1s linear;
	transition: transform .1s linear, -webkit-transform .1s linear;
}
:nth-child(1).dashboard__metarubricsItem::before {
	background: #faaa64;
}
:nth-child(2).dashboard__metarubricsItem::before {
	background: #64b4d2;
}
:nth-child(3).dashboard__metarubricsItem::before {
	background: #ec837f;
}
:nth-child(4).dashboard__metarubricsItem::before {
	background: #8cc887;
}
:nth-child(5).dashboard__metarubricsItem::before {
	background: #debd67;
}
.dashboard__metarubricsItemWrap {
	white-space: normal;
}
.dashboard__metarubricsItemWrap::before {
	position: absolute;
	top: 13px;
	left: 50%;
	z-index: 1;
	content: "";
}
._type_all.dashboard__metarubricsItem .dashboard__metarubricsItemWrap::before {
	background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyMCIgdmlld0JveD0iMCAwIDI0IDIwIj48cGF0aCBmaWxsPSIjZmZmIiBkPSJNNC44LDVMNCw3aDE2bC0wLjgtMkg0Ljh6IE0xOCwySDYuMTQzTDUuMjg1LDRIMTguOEwxOCwyeiBNMjAuNCwwSDMuNkMzLjYsMCwwLDguNzQsMCw5djEwCWMwLDAuNTUyLDAuNDQ3LDEsMSwxaDIyYzAuNTUzLDAsMS0wLjQ0OCwxLTFWOUMyNCw4Ljc0LDIwLjQsMCwyMC40LDB6IE0xNSwxM0g5Yy0wLjU1MywwLTEtMC40NDgtMS0xczAuNDQ3LTEsMS0xaDYJYzAuNTUzLDAsMSwwLjQ0OCwxLDFTMTUuNTUzLDEzLDE1LDEzeiBNMiw4bDIuOC03aDE0LjRMMjIsOEgyeiIvPjwvc3ZnPg==);
	background-repeat: no-repeat;
	width: 24px;
	height: 20px;
	top: 11px;
	margin-left: -12px;
}
._type_newlyBuilt.dashboard__metarubricsItem .dashboard__metarubricsItemWrap::before {
	background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMiIgaGVpZ2h0PSIyMiIgdmlld0JveD0iMCAwIDIyIDIyIj48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMjIsNEgxMVYwSDB2MjJoMjJWNHogTTcsMjFINHYtNmgzVjIxeiBNOSwxMUgyVjloN1YxMXogTTksOEgyVjZoN1Y4eiBNOSw1SDJWM2g3VjV6IE0xNiwxNWgtM3YtMmgzVjE1eiBNMTYsMTJoLTN2LTJoM1YxMnogTTE2LDloLTNWN2gzVjl6IE0yMCwxNWgtM3YtMmgzVjE1eiBNMjAsMTJoLTN2LTJoM1YxMnogTTIwLDloLTNWN2gzVjl6Ii8+PC9zdmc+);
	background-repeat: no-repeat;
	width: 22px;
	height: 22px;
	top: 10px;
	margin-left: -10px;
}
._type_altai.dashboard__metarubricsItem .dashboard__metarubricsItemWrap::before, ._type_recreation.dashboard__metarubricsItem .dashboard__metarubricsItemWrap::before, ._type_renovation.dashboard__metarubricsItem .dashboard__metarubricsItemWrap::before, ._type_sanatorium.dashboard__metarubricsItem .dashboard__metarubricsItemWrap::before, ._type_travels.dashboard__metarubricsItem .dashboard__metarubricsItemWrap::before {
	background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjgiIGhlaWdodD0iMjgiIHZpZXdCb3g9IjAgMCAyOCAyOCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBmaWxsPSIjZmZmIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik02LjUgN2EyLjUgMi41IDAgMSAwIC4wMDEtNSAyLjUgMi41IDAgMCAwIDAgNXpNMjUuNTggMTcuNzcxbC0zLjEwNi0zLjk5YTEuOTk4IDEuOTk4IDAgMCAwLTEuNTc4LS43NzFoLTcuNTkxYy0xLjUxOC0uNzAzLTIuNjgzLTEuOTgtMy40NjYtMy44MDFhMiAyIDAgMSAwLTMuNjc0IDEuNTgyYzEuMjU2IDIuOTE5IDMuMzI5IDUuMDIxIDUuOTk0IDYuMDc4LjIzNS4wOTMuNDg1LjE0MS43MzcuMTQxaDcuMDIzbDIuNTA1IDMuMjE5YTEuOTk3IDEuOTk3IDAgMCAwIDIuODA3LjM0OSAyIDIgMCAwIDAgLjM0OS0yLjgwN3ptLTEuODcxIDYuNTIyYS45OTkuOTk5IDAgMSAxLTEuNDE0IDEuNDE0TDE3LjU4NyAyMWgtNi45MUw4LjkzIDI1LjM3MmExLjAwMyAxLjAwMyAwIDAgMS0xLjMwMS41NTcgMS4wMDIgMS4wMDIgMCAwIDEtLjU1Ny0xLjMwMWwxLjY4NS00LjIxYy0yLjI5MS0xLjUzOC01LjcyNS01LjE2Mi02LjcwNS04LjEwMmExIDEgMCAxIDEgMS44OTgtLjYzMmMuODU4IDIuNTc0IDQuNDE4IDYuMjQ1IDYuMyA3LjMxNkgxOGMuMjY2IDAgLjUyLjEwNS43MDguMjkzbDUgNXoiLz48L3N2Zz4=);
	background-repeat: no-repeat;
	width: 28px;
	height: 28px;
	margin-left: -14px;
	margin-top: -5px;
}
._type_hotel.dashboard__metarubricsItem .dashboard__metarubricsItemWrap::before {
	background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNiIgaGVpZ2h0PSIxOCIgdmlld0JveD0iMCAwIDI2IDE4Ij48cGF0aCBmaWxsPSIjZmZmIiBkPSJNNy41MDEsNmMxLjM4MSwwLDIuNS0xLjExOSwyLjUtMi41UzguODgyLDEsNy41MDEsMWMtMS4zODEsMC0yLjUsMS4xMTktMi41LDIuNVM2LjEyLDYsNy41MDEsNnogTTE4LDMJaC01Ljk5OWMwLDIuNzYyLTIuMjM4LDUtNSw1SDVDNC40NDgsOC4wMDEsNC4wMDEsOC40NDgsNC4wMDEsOVM0LjQ0OCw5Ljk5OSw1LDEwaDIxVjhDMjYsNi43ODEsMjQuMDk0LDMsMTgsM3ogTTMsMgljMCwwLTAuMTAyLTItMS0ySDBjMCwwLDAuMDAxLDEuNzUsMC4wMDEsMS45MTJjMCwwLjA5MiwwLDE2LjA4OCwwLDE2LjA4OEgzdi00bDEtMWgxOGwxLDF2NGgzdi03SDNWMnoiLz48L3N2Zz4=);
	background-repeat: no-repeat;
	width: 26px;
	height: 18px;
	margin-left: -13px;
}
._type_cafe.dashboard__metarubricsItem .dashboard__metarubricsItemWrap::before {
	background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNSIgaGVpZ2h0PSIyOCIgdmlld0JveD0iMCAwIDE1IDI4Ij48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMTQsMC4yNWMtMC45MDUsMC00LDAuNjQ2LTQsNi45OTl2NWMwLDIsMS4zODMsMy4wMDEsMiwzLjAwMWMwLDAsMCwxMC45OTgsMCwxMS45OTljMCwxLjAwMSwzLDAuOTk5LDMsMAljMC0wLjk5OSwwLTI1LDAtMjVDMTUsMS4yNDksMTUsMC4yNSwxNCwwLjI1eiBNNiw5LjI1SDV2LTcuNUg0djcuNUgzdi03LjVIMnY3LjVIMXYtNy41SDB2OS41YzAsMSwyLDIsMiwzYzAsMCwwLDEyLDAsMTNzMywxLDMsMAlzMC0xMywwLTEzYzAtMSwyLTIsMi0zYzAtMC40MywwLTAuMzY5LDAtMnYtNy41SDZWOS4yNXoiLz48L3N2Zz4=);
	background-repeat: no-repeat;
	top: 8px;
	margin-left: -8px;
	width: 15px;
	height: 28px;
}
.dashboard__cityName {
	overflow: hidden;
	margin: 0 0 -1px;
	padding-top: 2px;
	background: 0 0;
	text-overflow: ellipsis;
	white-space: nowrap;
}
.dashboard__cityTime {
	color: #f0f0f0;
	font: 12px/14px Helvetica, Arial, sans-serif;
}
._scheme_none.link, ._scheme_none.link:hover, ._undashed.link {
	background-image: none;
}
._link.dashboard__cityNameLink, ._link.dashboard__cityTime {
	cursor: pointer;
}
.dashboard__cityNameLogo {
	position: absolute;
	top: 12px;
	left: 15px;
	width: 28px;
	height: 28px;
}
.link {
	background-image: -webkit-linear-gradient(left,#9cd,#9cd);
	background-image: linear-gradient(to right,#9cd,#9cd);
	color: #007bab;
	text-decoration: none;
	cursor: pointer;
	background-position: 0 91%;
	background-size: 10px 1px;
	background-repeat: repeat-x;
}
.link {
	background-position: 0 95%;
}
.dashboard__cityNameLink {
	-moz-osx-font-smoothing: grayscale;
	font: 700 22px/32px "SuisseCond", "Arial Narrow", Helvetica, Arial, sans-serif;
	cursor: default;
}
._scheme_dark.link {
	background-image: -webkit-linear-gradient(left,rgba(255,230,170,.3),rgba(255,230,170,.3));
	background-image: linear-gradient(to right,rgba(255,230,170,.3),rgba(255,230,170,.3));
	color: #ffe6aa;
}
.dashboard__cityNameLinkTitle {
	color: #f0f0f0;
}
.dashboard__cityNameIcon {
	display: none;
	vertical-align: middle;
	margin-left: 6px;
}
._link.dashboard__cityNameLink .dashboard__cityNameIcon {
	display: inline-block;
}
.weather {
	color: #fff;
	text-align: right;
	font: 12px/16px Helvetica, Arial, sans-serif;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}
.weather__info {
	display: inline-block;
	text-decoration: none;
	color: inherit;
}
.weather__temperature {
	display: block;
	cursor: pointer;
	font: 700 22px/24px "SuisseCond", "Arial Narrow", Helvetica, Arial, sans-serif;
	height: 24px;
	position: relative;
	fill: #fff;
	color: #fff;
}
.weather__forecast, .weather__promoLink {
	display: block;
	text-decoration: none;
	padding: 3px 0 5px;
}
.weather__forecast {
	cursor: pointer;
	position: relative;
	color: inherit;
}
.weather__forecast::after, .weather__temperatureValue::after {
	position: absolute;
	content: "˚";
	font-size: 35px;
	top: 6px;
	right: -8px;
}
.weather__forecast::after {
	font-size: 19px;
	right: -6px;
}
.weather__temperatureIcon {
	margin-right: 10px;
}
</style>
<div class="online__dashboard"><div class="dashboard" id="module-1-14" data-module="dashboard"><div class="dashboard__close"></div><div class="dashboard__wrap"><div class="dashboard__body"><div class="dashboard__weather"><div class="weather" id="module-1-14-4" data-module="weather"><a class="weather__info" href="/tyumen/weather"><span class="weather__temperature"><svg xmlns="http://www.w3.org/2000/svg" class="icon weather__temperatureIcon" viewBox="0 0 25 20" width="25" height="20"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#weather_light-rain" /></svg><span class="weather__temperatureValue">+14</span></span><span class="weather__forecast">Вечером +12</span></a></div></div><div class="dashboard__city"><h1 class="dashboard__cityName"><img class="dashboard__cityNameLogo" style="display: inline;" alt="" "><a class="link dashboard__cityNameLink _scheme_dark _undashed _link" href="/"><span class="dashboard__cityNameLinkTitle">Губкинский</span></a></h1><div class="dashboard__cityTimeWrap">
<span class="dashboard__cityTime _link">
<?
$date = new DateTime();
if(CModule::IncludeModule("iblock"))
			{ 
								echo  CIBlockFormatProperties::DateFormat('H:i, l, j F', $date->getTimestamp());
			}
?>


</span></div></div><div class="dashboard__cityselect"></div><div class="dashboard__metarubrics"><a class="dashboard__metarubricsItem _type_cafe" href="/tyumen/search/%D0%9F%D0%BE%D0%B5%D1%81%D1%82%D1%8C?queryState=zoom%2F11" data-rubric-query="Поесть"><span class="dashboard__metarubricsItemWrap">Поесть</span></a><a class="dashboard__metarubricsItem _type_hotel" href="/tyumen/search/%D0%93%D0%BE%D1%81%D1%82%D0%B8%D0%BD%D0%B8%D1%86%D1%8B?queryState=zoom%2F11" data-rubric-query="Гостиницы"><span class="dashboard__metarubricsItemWrap">Гостиницы</span></a><a class="dashboard__metarubricsItem _type_recreation" href="/tyumen/search/%D0%91%D0%B0%D0%B7%D1%8B%20%D0%BE%D1%82%D0%B4%D1%8B%D1%85%D0%B0?queryState=zoom%2F11" data-rubric-query="Базы отдыха"><span class="dashboard__metarubricsItemWrap">Базы отдыха</span></a><a class="dashboard__metarubricsItem _type_newlyBuilt" href="/tyumen/search/%D0%9D%D0%BE%D0%B2%D0%BE%D1%81%D1%82%D1%80%D0%BE%D0%B9%D0%BA%D0%B8?queryState=zoom%2F11" data-rubric-query="Новостройки"><span class="dashboard__metarubricsItemWrap">Новостройки</span></a><a class="dashboard__metarubricsItem _type_all" href="/tyumen/rubrics?queryState=zoom%2F11" "=""><span class="dashboard__metarubricsItemWrap">Все рубрики</span></a></div><div class="dashboard__promo"><div class="googleTagAds _type_teaser" id="module-1-14-2" style="display: none;" data-module="googleTagAds" data-google-query-id="CJKfu-z-9tQCFcgJGQodSY0A8Q"><div id="google_ads_iframe_/45140520/Dashboard_product_0__container__" style="border: 0pt currentColor; border-image: none;"><iframe name="google_ads_iframe_/45140520/Dashboard_product_0" width="460" height="118" title="3rd party ad content" id="google_ads_iframe_/45140520/Dashboard_product_0" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border: 0px currentColor; border-image: none; vertical-align: bottom;"></iframe></div></div><div class="dashboard__promoDotsWrapper"></div></div></div><div class="dashboard__footer"><div class="dashboard__footerLinks"><a class="dashboard__footerLink _type_whatsNew _hasNotifications" href="/tyumen/whatsNew" data-type="whatsNew" data-notifications="9+"><svg xmlns="http://www.w3.org/2000/svg" class="icon dashboard__footerLinkIcon" viewBox="0 0 16 14" width="16" height="14"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#dashboard_news" /></svg><span class="dashboard__footerLinkTitle">Новости 2ГИС</span></a><a class="dashboard__footerLink _type_interesting _hasNotifications" href="/tyumen/interesting" data-type="interesting" data-notifications="9+"><svg xmlns="http://www.w3.org/2000/svg" class="icon dashboard__footerLinkIcon" viewBox="0 0 24 24" width="24" height="24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#pin-o" /></svg><span class="dashboard__footerLinkTitle">Интересное в городе</span></a><a class="dashboard__footerLink _type_download" data-type="download"><svg xmlns="http://www.w3.org/2000/svg" class="icon dashboard__footerLinkIcon" viewBox="0 0 16 16" width="16" height="16"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#downloadEntryPoint" /></svg><span class="dashboard__footerLinkTitle">Скачать 2ГИС</span></a></div></div></div></div></div>