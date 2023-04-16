<?php
include("conexion.php");
include("bootstrap.php");
include("validar.php");


if (isset($_GET['info'])) {
  $editar_identificacion = $_GET['info'];

  $query = "SELECT * FROM normas where identificacion = '$editar_identificacion'";

  $res = sqlsrv_query($conn, $query);

  $row = sqlsrv_fetch_array($res);

  $nombres = $row['nombres'];
  $apellidos = $row['apellidos'];
  $identificacion = $row['identificacion'];
  $telefono = $row['telefono'];
  $direccion = $row['direccion'];
  $correo = $row['correo'];
  $fecha = $row['fecha'];
  $pais = $row['pais'];
  $ciudad = $row['ciudad'];
  $region = $row['region'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Informes</title>
</head>

<body>
  <br />
  <div class="container col-md-12 col-md-2">
    <form method="POST" action="">
      <table continer border='1'>
        <tr>
          <td>Nombres</td>
          <td>Apellidos</td>
          <td>Identificacion</td>
          <td>Telefono</td>
          <td>Direccion</td>
          <td>Correo</td>
          <td>Fecha</td>
          <td>pais</td>
          <td>Ciudad</td>
          <td>Region</td>
        </tr>
        <tr>
          <td><?php echo $row['nombres'] ?></td>
          <td><?php echo $row['apellidos'] ?></td>
          <td><?php echo $row['identificacion'] ?></td>
          <td><?php echo $row['telefono'] ?></td>
          <td><?php echo $row['direccion'] ?></td>
          <td><?php echo $row['correo'] ?></td>
          <td><?php echo $row['fecha'] ?></td>
          <td><?php echo $row['pais'] ?></td>
          <td><?php echo $row['ciudad'] ?></td>
          <td><?php echo $row['region'] ?></td>
        </tr>
    </form>
    <h2>Términos y Condiciones aplicables al Desarrollo Web</h2>
    <p>Esta cláusula le brindará la información que usted necesita acerca de nuestro método de trabajo, y servirán como una guía en la resolución de dudas y/o conflictos que se pudieran presentar, en éste se ennumeran los derechos y obligaciones para el cliente.</p>
</body>

</html>
Codigo de barras
<?php
include_once "barcode/src/BarcodeGenerator.php";
include_once "barcode/src/BarcodeGeneratorHTML.php";
include_once "barcode/src/BarcodeGeneratorJPG.php";
include_once "barcode/src/BarcodeGeneratorPNG.php";
include_once "barcode/src/BarcodeGeneratorSVG.php";

use Picqer\Barcode\BarcodeGeneratorHTML;

$barHTML = new BarcodeGeneratorHTML();
echo $barHTML->getBarcode("123", $barHTML::TYPE_CODE_128);

?>

Identificacion:<?php echo $row['identificacion']; ?>