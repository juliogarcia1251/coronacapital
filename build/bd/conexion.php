<?php
$host = "localhost";  // Dirección del servidor
$dbname = "corona_capital";  // Nombre de la base de datos
$username = "root";  // Usuario de MySQL (por defecto en XAMPP o MAMP es "root")
$password = "";  // Contraseña de MySQL (por defecto en XAMPP o MAMP es "")

try {
    // Crear una instancia de PDO para la conexión
    $conexion = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Configurar el modo de errores de PDO
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa";
} catch(PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>
