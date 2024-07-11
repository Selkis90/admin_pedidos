<?php

require_once 'parametros.php';

$host = _HOST;
$user = _USER;
$password = _PASSWORD;
$bd = _BD_NAME;

$conexion = new mysqli($host, $user, $password, $bd);

if ($conexion->connect_error) {
    die("Error al conectarse a la base de datos: " . $conexion->connect_error);
}

$conexion->set_charset("utf8");

?>
