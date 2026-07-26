<?php
$server = "primary.mysql--lkg5gb9wtp9l.addon.code.run";
$user = "c7fe7d25f5a22a90";
$pass = "821c212ad130366ea9c1b35dfdc60c";
$bd = "cd6542194613";

$conn = new mysqli($server, $user, $pass, $bd);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>