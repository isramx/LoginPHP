<?php
include("conexion.php");

try {
    $sql = "ALTER TABLE usuarios
            ADD COLUMN tipo_usuario VARCHAR(20) NOT NULL DEFAULT 'usuario'";

    if ($conexion->query($sql)) {
        echo "Columna tipo_usuario creada.<br>";
    }
} catch (mysqli_sql_exception $e) {
    if (strpos($e->getMessage(), "Duplicate column") !== false) {
        echo "La columna tipo_usuario ya existe.<br>";
    } else {
        die("Error: " . $e->getMessage());
    }
}

$sqlAdmin = "UPDATE usuarios
             SET tipo_usuario = 'admin'
             WHERE idusuarios = 1";

if ($conexion->query($sqlAdmin)) {
    echo "Administrador actualizado correctamente.<br>";
} else {
    echo "Error al actualizar administrador: " . $conexion->error;
}

echo "<strong>Proceso terminado.</strong>";
?>