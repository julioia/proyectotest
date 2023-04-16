<?php
include("conexion.php");
include("bootstrap.php");
include("validar.php");


if (isset($_POST['buscar'])) {
  $identificacion = $_POST['buscar'];



  $query = ("SELECT * FROM normas where identificacion = '$identificacion'");
  $res = sqlsrv_query($conn, $query);
  $verificar = sqlsrv_query($conn, "SELECT * FROM normas WHERE identificacion= '$identificacion'");

  if (sqlsrv_fetch_array($verificar) > 0) {
    echo "<script>alert('Registro encontrado en la base de datos')</script>";
  } else {

    echo "<script>alert('El registro no existe en la base de datos')</script>";
    echo "<script>window.open('registros.php', '_self');</script>";
  }


  while ($row = sqlsrv_fetch_array($res)) {


    $id = $row['id'];
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

?>


    <br />
    <div class="container col-md-8 col-md-2">
      <form method="POST" action="registros.php">
        <table width="200">
          <tbody>
            <tr>
              <input type="text" name="nombres" class="form-control" value="<?php echo $nombres; ?>" readonly><br />
            </tr>
            <tr>
              <input type="text" name="apellidos" class="form-control" value="<?php echo $apellidos; ?>" readonly><br />
            </tr>
            <tr>
              <input type="text" name="identificacion" class="form-control" placeholder='Buscar por Identificacion' value="<?php echo $identificacion; ?>" readonly><br />
            </tr>
            <tr>
              <input type="text" name="telefono" class="form-control" value="<?php echo $telefono; ?>" readonly><br />
            </tr>
            <tr>
              <input type="text" name="direccion" class="form-control" value="<?php echo $direccion; ?>" readonly><br />
            </tr>
            <tr>
              <input type="email" name="correo" class="form-control" value="<?php echo $correo; ?>" readonly><br />
            </tr>
            <tr>
              <input type="date" name="fecha" class="form-control" value="<?php echo $fecha; ?>" readonly><br />
            </tr>
            <tr>
              <input type="text" name="pais" class="form-control" value="<?php echo $pais; ?>" readonly><br />
            </tr>
            <tr>
              <input type="text" name="ciudad" class="form-control" value="<?php echo $ciudad; ?>" readonly><br />
            </tr>
            <tr>
              <input type="text" name="region" class="form-control" value="<?php echo $region; ?>" readonly><br />
            </tr>
          </tbody>
          <table>
            <div table>
          </table>
          <br />
          <p><input type="submit" class="btn btn-success btn-sm" value="Inicio"></td>

            <td><a href="editar.php?editar=<?php echo $row['identificacion']; ?>" class="btn btn-warning btn-sm">Editar</a></td>

            <td><a href="info.php?info=<?php echo $row['identificacion']; ?>" class="btn btn-primary btn-sm">Informe</a></td>

            <td><a href="registros.php?Eliminar=<?php echo $row['identificacion']; ?>" class="btn btn-danger btn-sm">Eliminar</a></td>

          <div>

      </form>

  <?php
  }
}

  ?>

  <br />
  </body>

  </html>