<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty("description", "Купить или заказать сантехнику в интернет-магазине СтройМаркет. Продажа сантехники в Москве: широкий ассортимент, удобный подбор, быстрая доставка, самовывоз.");
$APPLICATION->SetTitle("СтройМаркет - интернет-магазин сантехники и оборудования в Москве");
?><?\Nextype\Corporate\CCorporate::IncludeFile(SITE_DIR."include/mainpage_slider.php", Array(), Array("MODE" => "html"));?>
<? \Nextype\Corporate\CCorporate::renderHomepage(); ?>
<? require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php'); ?>