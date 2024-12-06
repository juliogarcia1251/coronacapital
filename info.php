<?php
include 'php/conexion.php';

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
    <title>Información - Festival Corona Capital</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="build/css/app.css">
</head>
<body>
    <!-- Header con navegación -->
    <header class="header">
        <div class="contenedor contenido-header">
            <h1><a href="index.php">Corona Capital</a></h1>
            <nav class="navegacion-principal">
                <a href="lineup.php">Line Up</a>
                <a href="boletos.php">Boletos</a>
                <a href="info.php" class="activo">Info</a>
            </nav>
        </div>
    </header>

    <!-- Contenido principal -->
    <main class="info">
        <section class="contenedor informacion">
            <h2>Información del Festival</h2>
            <div class="info-secciones">
                <article>
                    <h3>Boletos</h3>
                    <p>Tus accesos para ingresar a Corona Capital 2024 serán únicamente por medio de boleto físico o digital a través del sistema Ticketmaster. Una vez que tu boleto sea escaneado no podrás reingresar.
                    </p>
                </article>
                <article>
                    <h3>Acceso</h3>
                    <p>Todos los asistentes deben de contar con boleto, personas menores de 15 años deben de ir acompañados con un adulto. Debes contar con 18 años cumplidos para comprar alcohol, el ID es requerido. </p>
                </article>
                <article>
                    <h3>Festival</h3>
                    <p>El festival Corona Capital se lleva a cabo los días 16 y 17 de noviembre del 2024. Las puertas se abren los 2 días a partir de las 14:00. No olvides llevar tu outfit más cómodo para disfrutar.</p>
                </article>
                <article>
                    <h3>Servicios</h3>
                    <p>Dentro del festival encontrarás una tienda que ofrece la mercancía oficial del festival y de las bandas invitadas. Tendremos un espacio de restaurantes, food trucks y postres.</p>
                </article>
                <article>
                    <h3>Objetos permitidos</h3>
                    <p>Celulares, cangureras, lentes de sol, maquillaje, baterías externas, tapones para oídos, sombreros, gorras, bloqueador solar, termos vacíos, cámaras no profesionales, gel antibacterial, bolsas pequeñas.</p>
                </article>
                <article>
                    <h3>Objetos prohibidos</h3>
                    <p>Mascotas, peluches, cigarros, alimentos externos, paraguas, lasers, drogas, cadenas largas, joyería con picos, aerosoles, plumones, plumas, masajeadores, cámaras profesionales, luces químicas
                    </p>
                </article>
            </div>
        </section>

        <!-- Galería -->
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
    </main>

    <!-- Footer -->
    <footer class="footer">
        <p>Festival Corona Capital 2024. Todos los derechos reservados.</p>
    </footer>

    <script src="build/js/app.js"></script>
</body>
</html>

