<?php
include("db.php");
?>
<?php
if (isset($_POST['Guardar'])) {
  $correo = $_POST['correo'];
  $usuario = $_POST['usuario'];
  $clave = $_POST['clave'];
  $codigo = $_POST['codigo'];
  $codigo = rand(900000, 100000);
  $clave = hash('sha512', $clave);

  if ($usuario == "" || $clave == "" || $correo == "") {
    echo "Los campos obligatorios";
  } else {
    $insertar = "INSERT INTO usuarios (usuario,clave,correo,codigo)
      VALUES ('$usuario','$clave','$correo','$codigo')";

    $verificar = sqlsrv_query($conn, "SELECT * FROM usuarios WHERE correo = '$correo'");

    if (sqlsrv_fetch_array($verificar) > 0) {
      echo "<script>alert('El correo ya existe en nuestros registros intenta con otro por favor')</script>";
      echo "<script>window.open('login.php', '_self');</script>";
      exit();
    }
    $ejecutar = sqlsrv_query($conn, $insertar);

    if ($ejecutar) {
      echo "<script>alert('El registro se ha guardado correctamente')</script>";
      echo "<script>alert('$usuario,tu codigo de verificacion es: $codigo')</script>";
      echo "<script>window.open('login.php', '_self');</script>";
    } else {
      echo "<script>alert('El registro no existe en la base de datos')</script>";
      echo "<script>window.open('login.php', '_self');</script>";
    }
  }
}
sqlsrv_close($conn);
?>