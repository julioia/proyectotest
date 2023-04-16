<?php
include("conexion.php");
include("bootstrap.php");
include("validar.php");
?>
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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportes</title>
</head>

<body>
    <br />
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
        <?php
        $query = "SELECT * FROM normas order by id asc";
        $res = sqlsrv_query($conn, $query);

        $I = 0;

        while ($row = sqlsrv_fetch_array($res, SQLSRV_FETCH_ASSOC)) {
        ?>
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
        <?php
        }
        ?>
        </tr>
    </table>
</body>

</html>