<?php
// Incluir el archivo de conexión
include 'conexion.php';

try {
    // Preparar y ejecutar la consulta
    $sql = "SELECT * FROM artistas_bandas";
    $stmt = $conexion->prepare($sql);
    $stmt->execute();

    // Obtener los resultados y mostrarlos
    $artistas = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo "<h2>Artistas del Festival Corona Capital</h2>";
    foreach ($artistas as $artista) {
        echo "<div>";
        echo "<h3>" . htmlspecialchars($artista['nombre']) . "</h3>";
        echo "<p>" . htmlspecialchars($artista['descripcion']) . "</p>";
        echo "<img src='" . htmlspecialchars($artista['imagen_principal']) . "' alt='Imagen de " . htmlspecialchars($artista['nombre']) . "'>";
        echo "<p><a href='" . htmlspecialchars($artista['url_escuchar']) . "' target='_blank'>Escuchar en Spotify</a></p>";
        echo "</div>";
    }
} catch(PDOException $e) {
    echo "Error en la consulta: " . $e->getMessage();
}
?>
