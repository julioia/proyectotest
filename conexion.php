<?php

$serverName = "F22IA";

$connectionInfo = array("Database" => "validar", "UID" => "sa", "PWD" => 'Maxcontrol.2024.');

$conn = sqlsrv_connect($serverName, $connectionInfo);

if ($conn) {

}
else
{

    echo "conexion no se puedo establecer";
    die(print_r(sqlsrv_errors(), true));
}
