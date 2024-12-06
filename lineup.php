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
    <title>Line Up - Corona Capital</title>
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

    <main class="lineup">
        <br>
        <br>
        <h3>Line Up</h3>
        
        <p class="dia">Sábado 16</p>
        <div class="escenarios-contenedor">
            <div class="escenario bg-amarillo">
                <p class="nombre-escenario">Escenario Corona</p>
                <ul class="calendario">
                    <li>
                        24:00 | <a href="artistas/greenday.php">Green Day</a>
                    </li>
                    <li>
                        22:00 | <a href="artistas/cage.php">Cage the Elephant</a>
                    </li>
                    <li>
                        20:00 | <a href="artistas/marsvolta.php">The Mars Volta</a>
                    </li>
                    <li>
                        19:00 | <a href="artistas/clairo.php">Clairo</a>
                    </li>
                    <li>
                        18:00 | <a href="artistas/blonde.php">Blonde Redhead</a>
                    </li>
                    <li>
                        17:00 | <a href="artistas/water.php">Water From Your Eyes</a>
                    </li>
                </ul>
            </div>
            <div class="escenario bg-verde">
                <p class="nombre-escenario">Escenario Vans</p>
                <ul class="calendario">
                    <li>
                        24:00 | <a href="artistas/neworder.php">New Order</a>
                    </li>
                    <li>
                        22:00 | <a href="artistas/toto.php">Toto</a>
                    </li>
                    <li>
                        20:00 | <a href="artistas/stvincent.php">St. Vincent</a>
                    </li>
                    <li>
                        19:00 | <a href="artistas/primalscream.php">Primal Scream</a>
                    </li>
                    <li>
                        18:00 | <a href="artistas/vaccines.php">The Vaccines</a>
                    </li>
                    <li>
                        17:00 | <a href="artistas/warpaint.php">Warpaint</a>
                    </li>
                </ul>
            </div>
        </div>
        
        <p class="dia">Domingo 17</p>
        <div class="escenarios-contenedor">
            <div class="escenario bg-verde">
                <p class="nombre-escenario">Escenario Corona</p>
                <ul class="calendario">
                    <li>
                        23:30 | <a href="artistas/mccartney.php">Paul McCartney</a>
                    </li>
                    <li>
                        21:00 | <a href="artistas/jackwhite.php">Jack White</a>
                    </li>
                    <li>
                        18:50 | <a href="artistas/nothing.php">Nothing But Thieves</a>
                    </li>
                    <li>
                        17:40 | <a href="artistas/cavetown.php">Cavetown</a>
                    </li>
                    <li>
                        16:30 | <a href="artistas/crumb.php">Crumb</a>
                    </li>
                    <li>
                        14:50 | <a href="artistas/baritalia.php">Bar Italia</a>
                    </li>
                </ul>
            </div>
            <div class="escenario bg-amarillo">
                <p class="nombre-escenario">Escenario Vans</p>
                <ul class="calendario">
                    <li>
                        22:10 | <a href="artistas/empire.php">Empire of the Sun</a>
                    </li>
                    <li>
                        21:00 | <a href="artistas/beck.php">Beck</a>
                    </li>
                    <li>
                        17:50 | <a href="artistas/kimgordon.php">Kim Gordon</a>
                    </li>
                    <li>
                        16:30 | <a href="artistas/beachfossils.php">Beach Fossils</a>
                    </li>
                    <li>
                        15:30 | <a href="artistas/mannequin.php">Manequin Pussy</a>
                    </li>
                    <li>
                        14:20 | <a href="artistas/monobloc.php">Monobloc</a>
                    </li>
                </ul>
            </div>
        </div>
        <br>

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

    
    <footer class="footer">
        <p>Festival Corona Capital 2024. Todos los derechos reservados.</p>
    </footer>

    <script src="build/js/app.js"></script>
</body>
</html>
