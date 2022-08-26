<?php
require_once './vendor/autoload.php';

$detect = new Mobile_Detect;

if($detect->isMobile())
    echo 'This is mobile';
else
    echo 'This is desctop';