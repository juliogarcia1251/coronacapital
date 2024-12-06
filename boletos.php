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
    <section id="boletos" class="contenedor-boletos">
        <h3>Boletos</h3>
        <div class="boletos">
            <div class="pase">
                <p class="pase-nombre">Abono General</p>
                <header class="pase-header">
                    <p>Incluye:</p>
                </header>
                <div class="pase-body">
                    <ul>
                        <li>Acceso a los dos días del festival</li>
                        <li>Más de 16 horas de música en dos escenarios</li>
                        <li>Activaciones de marcas y espacios recreativos</li>
                        <li>Zona de alimentos y bebidas</li>
                        <li>Mercadillo y tienda de souvenirs</li>
                    </ul>
                </div>
                <footer class="pase-footer">
                    <a href="https://www.ticketmaster.com.mx/abono-general-vive-latino-2025-cdmx-15-03-2025/event/14006150935509CA" target="_blank"><p>$2,800</p></a>
                </footer>
            </div>
            <div class="pase">
                <p class="pase-nombre">Abono Comfort Pass</p>
                <header class="pase-header">
                    <p>Incluye:</p>
                </header>
                <div class="pase-body">
                    <ul>
                        <li>Todos los beneficios de Abono General</li>
                        <li>Carriles de acceso exclusivos</li>
                        <li>Renta de lockers</li>
                        <li>Baños privados con aire acondicionado</li>
                    </ul>
                </div>
                <footer class="pase-footer">
                    <a href="https://www.ticketmaster.com.mx/abono-comfort-pass-vive-latino-2025-cdmx-15-03-2025/event/1400615098F50A60" target="_blank"><p>$4,000</p></a>
                </footer>
            </div>
            <div class="pase">
                <p class="pase-nombre">Abono Citibanamex Platino</p>
                <header class="pase-header">
                    <p>Incluye:</p>
                </header>
                <div class="pase-body">
                    <ul>
                        <li>Todos los beneficios de Comfort Pass</li>
                        <li>Estacionamiento preferencial</li>
                        <li>Zonas de recarga Citibanamex Cashless exclusivas</li>
                        <li>Zona de descanso con vista al escenario Corona</li>
                        <li>Acceso a pit lateral en los escenarios</li>
                    </ul>
                </div>
                <footer class="pase-footer">
                    <a href="https://www.ticketmaster.com.mx/abono-platino-vive-latino-2025-cdmx-15-03-2025/event/14006150F0512E70" target="_blank"><p>$5,400</p></a>
                </footer>
            </div>
            <div class="pase">
                <p class="pase-nombre">Abono Citibanamex Oro</p>
                <header class="pase-header">
                    <p>Incluye:</p>
                </header>
                <div class="pase-body">
                    <ul>
                        <li>Todos los beneficios de Citibanamex Platino</li>
                        <li>Wifi exclusivo y cargadores de celular</li>
                        <li>Baños de lujo</li>
                        <li>Coctelería y gastronomía especializada</li>
                        <li>Transporte personal entre escenarios</li>
                    </ul>
                </div>
                <footer class="pase-footer">
                    <a href="https://www.ticketmaster.com.mx/abono-boxes-vive-latino-2025-cdmx-15-03-2025/event/14006150B1E51AB8" target="_blank"><p>$7,000</p></a>
                </footer>
            </div>
        </div>
    </section>
    </body>
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
</html>
