<?php
include("db.php");
include("bootstrap.php");
?>
<link rel="stylesheet" href="css/recuperar.css">

<div class='recuperar'>
    <img src="./img/correo.png" class="nuevo">
    </a>
</div>
<br />
<div class="container col-md-4 col-md-2">
    <form action="correo.php" method='POST'>
        <input type="email" name='correo' required class="form-control" placeholder='Correo electrónico' maxlength="50"><br />
        <button type="submit" value="Recuperar" class="btn btn-primary btn-sm">Recuperar</button>
    </form>