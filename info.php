<?php
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$pdf = new DOMPDF();
ob_start();
include_once "informe.php";
$html=ob_get_clean();
$pdf->loadHtml($html);
$pdf->set_paper("A4", "landscape");
$pdf->render();
$pdf->stream('Informes.pdf');
$pdf->load_html(utf8_decode($html));
