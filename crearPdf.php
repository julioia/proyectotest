<?php
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$pdf = new DOMPDF();
ob_start();
include_once "reporte.php";
$html=ob_get_clean();
$pdf->loadHtml($html);
$pdf->set_paper("A4", "landscape");
$pdf->render();
$pdf->stream('Reportes.pdf');
$pdf->load_html(utf8_decode($html));
?>