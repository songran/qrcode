<?php
//include("./src/QRcode.php");
include("./vendor/autoload.php");
use Qrcode\QRcode;

$obj = new QRcode(); 
$errorCorrectionLevel = 'L'; 
$matrixPointSize = 6; 
$text = 'id='.md5(time());
$s = $obj->png($text, false, $errorCorrectionLevel, $matrixPointSize, 2);

 
