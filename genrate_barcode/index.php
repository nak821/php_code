<?php
include_once "vendor/autoload.php";

/*$generator = new Picqer\Barcode\BarcodeGeneratorHTML();
echo $generator->getBarcode('07053253972', $generator::TYPE_CODE_128);*/

$generator = new \Picqer\Barcode\BarcodeGeneratorPNG();
echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode('07053253972', $generator::TYPE_CODE_128)) . '">';