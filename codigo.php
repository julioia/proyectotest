<?php
include 'phpqrcode/qrlib.php';

$dir = 'temp/';

if(!file_exists($dir))
    mkdir($dir);

    
$filename = $dir.'codigoqr.png';


$tamanio = 3;

$level = 'H';

$frameSize = 0;

$contenido = 'Pagina de prueba Julio Reyes,3004308155';

QRcode::png($contenido,$filename,$level,$tamanio,$frameSize);

echo '<img src="'.$filename.'" />';
