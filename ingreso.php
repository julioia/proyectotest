<?php
include("db.php");

session_start();

if (isset($_POST['Ingresar'])){
  $usuario = $_POST['usuario'];
  $clave = $_POST['clave']; 
  $codigo = $_POST['codigo']; 
  $clave = hash('sha512', $clave);




  $verificar = sqlsrv_query($conn, "SELECT * FROM usuarios WHERE usuario = '$usuario' AND clave = '$clave' AND codigo = '$codigo'");



  if(sqlsrv_fetch_array($verificar) > 0){


    $_SESSION['usuario']=$usuario;

    echo "<script>alert('Bienvenid@: $usuario')</script>";
    echo "<script>window.open('registros.php', '_self');</script>";
  }
  else
  {
    echo "<script>alert('Clave o Usuario incorrecto intente nuevamente')</script>";
    echo "<script>window.open('login.php', '_self');</script>";
  }
  }
