<?php

$server = "primary.mysql--lkg5gb9wtp9l.addon.code.run";
$user = "c7fe7d25f5a22a90";
$pass = "821c212ad130366ea9c1b35dfdc60c";
$bd = "cd6542194613";

$conn = mysqli_init();

mysqli_ssl_set($conn, NULL, NULL, NULL, NULL, NULL);

$conn->real_connect(
    $server,
    $user,
    $pass,
    $bd,
    3306,
    NULL,
    MYSQLI_CLIENT_SSL
);

$sql = file_get_contents("phplogin.sql");

if ($conn->multi_query($sql)) {
    echo "Base importada correctamente";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();

?>