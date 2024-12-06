<?php
include 'php/conexion.php';

$sql = "SELECT ruta FROM imagenes WHERE nombre = 'portada.jpg' LIMIT 1";
$result = $conn->query($sql);

$rutaPortada = '';
if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $rutaPortada = $row['ruta'];
}

// Consulta para obtener las imágenes de la galería
$sql = "SELECT ruta FROM imagenes WHERE tipo = 'galeria'";
$result = $conn->query($sql);

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Festival Corona Capital</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="build/css/app.css">
</head>
<body>
    <header class="header">
        <div class="contenedor contenido-header">
            <h1><a href="index.php">Corona Capital</a></h1>

            <nav class="navegacion-principal">
                <a href="lineup.php">Line Up</a>
                <a href="boletos.php">Boletos</a>
                <a href="info.php">Info</a>
            </nav>
            
        </div>
    </header>

    <div class="video">
        <div class="overlay">
            <div class="contenedor contenido-video">
                <h2>Corona Capital</h2>
                <p>16 y 17 de Noviembre - Autódromo Hermanos Rodríguez</p>
            </div>
        </div>
        <video autoplay muted loop>
            <source src="video/corona.mp4" type="video/mp4" />
        </video>
    </div>

    <section class="sobre-festival">
        <div class="imagen">
            <!-- Aquí usamos la ruta obtenida de la base de datos -->
            <img src="<?php echo htmlspecialchars($rutaPortada); ?>" alt="Sobre Festival" />
        </div>

        <div class="contenido-festival">
            <h2>Corona Capital</h2>
            <p class="fecha">Noviembre 2024, CDMX, México</p>
            <p>El festival mexicano que manda en el mundo. Realizado por primera vez en 2010, el Festival Corona Capital se mantiene a la fecha como el principal referente de música internacional en México.</p>
        </div>
    </section>

    
<section class="galeria">
    <div class="contenedor-galeria">
        <h2>Galería</h2>
        <div class="grid-galeria">
            <?php
            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<img src="' . $row['ruta'] . '" alt="Imagen de la galería">';
                }
            } else {
                echo '<p>No hay imágenes en la galería.</p>';
            }
            ?>
        </div>
    </div>
</section>
    

    <footer class="footer">
        <p>Festival Corona Capital 2024. Todos los derechos reservados.</p>
    </footer>

    <script src="build/js/app.js"></script>
</body>
</html>
