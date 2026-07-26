<?php

$server = "primary.mysql--lkg5gb9wtp9l.addon.code.run";
$user = "c7fe7d25f5a22a90";
$pass = "821c212ad130366ea9c1b35dfdc60c";
$bd = "cd6542194613";

$conexion = mysqli_init();

mysqli_ssl_set($conexion, NULL, NULL, NULL, NULL, NULL);

$conexion->real_connect(
    $server,
    $user,
    $pass,
    $bd,
    3306,
    NULL,
    MYSQLI_CLIENT_SSL
);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

?>