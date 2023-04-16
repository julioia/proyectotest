<?php
include("db.php");
include("bootstrap.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registro</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Regístrarse</button>
                </div>
            </div>


            <div class="contenedor__login-register">

                <form method="POST" action="ingreso.php" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" name='usuario' required class="form-control" placeholder='Usuario' maxlength="50">
                    <input type="password" name='clave' required class="form-control" placeholder='Contraseña' maxlength="20">
                    <input type="password" name='codigo' required class="form-control" placeholder='Codigo de verificacion' maxlength="6">
                    <button type="submit" id="Ingresar" name="Ingresar" class="btn btn-success btn-sm" value="Ingresar">Ingresar</button>
                    <hr />
                    <a href="javascript:void(0);" onclick="window.open('clave.php', 'popup', 'top=100, left=100, width=599, height=680, toolbar=NO, resizable=NO, Location=NO, Menubar=NO, Titlebar=No, Status=NO')" rel="nofollow">¿Olvido su contraseña?</a><br></br>
                    <a href="javascript:void(0);" onclick="window.open('token.php', 'popup', 'top=100, left=100, width=599, height=680, toolbar=NO, resizable=NO, Location=NO, Menubar=NO, Titlebar=No, Status=NO')" rel="nofollow">Generador de token</a>
                </form>


                <form method="POST" action="index.php" class="formulario__register">
                    <h2>Regístrarse</h2>
                    <input type="text" name='usuario' required class="form-control" placeholder='Usuario' maxlength="50">
                    <input type="password" name='clave' required class="form-control" placeholder='Contraseña' maxlength="50">
                    <input type="email" name='correo' required class="form-control" placeholder='Correo electrónico' maxlength="50">
                    <input type="hidden" name='codigo' class="form-control" maxlength="6">
                    <button type="submit" id="Guardar" name="Guardar" class="btn btn-success btn-sm" value="Guardar">Guardar</button>
                </form>
            </div>
        </div>
    </main>
    <script src="./js/script.js"></script>

    <script>
        window.close('login.php', '_self');
    </script>

    <div class="qr">
        <?php
        include('codigo.php');
        ?>
    </div>
    
    <!--seperar-->

    <div class='tel'>
        <a href="https://wa.me/3004308155/?text=contacto" target="_blank">
            <img src="./img/whtasapp.png" class='telefonia'>
    </div>
</body>

</html>