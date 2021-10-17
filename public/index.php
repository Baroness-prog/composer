<?php
require __DIR__ . '../vendor/autoload.php';
require __DIR__.'../src/Wcs/Hello.php';

$hello=new Wcs\Hello();
var_dump($hello);