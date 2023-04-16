<?php
include("db.php");
include("bootstrap.php");
?>
<div class='candado'>
  <img src="./img/candado.jpg" class="seguro">
  </a>
</div>
<br />
<link rel="stylesheet" href="css/recuperar.css">
<div class="container col-md-4 col-md-2">
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method='POST'>
    <tr>
      <input type="email" name='correo' required class="form-control" placeholder='Correo' maxlength="50">
    </tr><br />
    <tr>
      <input type="password" class="form-control" name='clave' required placeholder='Escriba su nueva contraseña' maxlength="20">
    </tr><br />
    <td><input type="submit" name="Actualizar" class="btn btn-primary btn-sm" value="Actualizar"></td>
  </form>
  <?php
  if (isset($_POST['Actualizar'])) {
    $actualizar_correo = $_POST['correo'];
    $actualizar_clave = $_POST['clave'];
    $actualizar_clave = hash('sha512', $actualizar_clave);


    $query = "UPDATE usuarios SET clave ='$actualizar_clave',correo ='$actualizar_correo' WHERE correo = '$actualizar_correo'";

    $res = sqlsrv_query($conn, $query);

    if ($res) {
      echo "<script>alert('$actualizar_correo tu contraseña ha sido actualizada')</script>";
      echo "<script>window.open('login.php', '_self');</script>";
    }
  }
  ?>