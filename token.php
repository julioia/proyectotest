<?php
include("db.php");
include("bootstrap.php");
?>
<div class='cambios'>
    <img src="./img/token.jpg" class="token">
    </a>
</div>
<br />
<link rel="stylesheet" href="css/recuperar.css">
<div class="container col-md-4 col-md-2">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method='POST'>
        <tr>
            <input type="text" name='usuario' required class="form-control" placeholder='Usuario'>
        </tr><br />
        <input type="hidden" name='codigo' id='codigo' class="form-control" maxlength="6">
        <td><input type="submit" name="Modificar" class="btn btn-primary btn-sm" value="Generar token" id="Modificar"></td>
        <br />
    </form>

    <?php
    if (isset($_POST['Modificar'])) {
        $Modificar_usuario = $_POST['usuario'];
        $Modificar_codigo = rand(900000, 100000);
         
        $query = "UPDATE usuarios SET codigo ='$Modificar_codigo',usuario ='$Modificar_usuario'  WHERE usuario = '$Modificar_usuario'";

        $res = sqlsrv_query($conn, $query);

        include './phpqrcode/qrlib.php';

        $dir = 'Temp/';

        if (!file_exists($dir))
            mkdir($dir);


        $filename = $dir . 'codigo';

        $tamanio = 8;

        $level = 'H';

        $frameSize = 0;

        $contenido = ($Modificar_codigo);

        QRcode::png($contenido, $filename, $level, $tamanio, $frameSize);

        echo '<img src="' . $filename . '" />';
    }

    ?>
    <br />
    <br />
    <input type="button" name="cancelvalue" class="btn btn-primary btn-sm" value="Salir" onClick="self.close()">
