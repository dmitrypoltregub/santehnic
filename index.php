<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Сантехник Маркет");
?>
<?\Nextype\Corporate\CCorporate::IncludeFile(SITE_DIR."include/mainpage_slider.php", Array(), Array("MODE" => "html"));?>
<? \Nextype\Corporate\CCorporate::renderHomepage(); ?>
<? require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php'); ?>