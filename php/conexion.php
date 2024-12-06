<?php
// Configuración de conexión a la base de datos
$DB_HOST = 'localhost';       // Dirección del servidor de la base de datos (en XAMPP, normalmente es 'localhost')
$DB_USER = 'root';            // Usuario (por defecto, en XAMPP, es 'root')
$DB_PASS = '';                // Contraseña (por defecto, en XAMPP, no tiene contraseña)
$DB_NAME = 'festival';        // Nombre de la base de datos que creaste

// Crear la conexión
$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

// Verificar la conexión
if ($conn->connect_error) {
    die('Error de conexión: ' . $conn->connect_error);
}

// Si la conexión es exitosa, el script continuará normalmente
?>
