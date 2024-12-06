<?php
include 'conexion.php'; // Incluye el archivo de conexión

if ($conn) {
    echo "Conexión exitosa a la base de datos!";
} else {
    echo "Error en la conexión.";
}

$conn->close(); // Cierra la conexión
?>
