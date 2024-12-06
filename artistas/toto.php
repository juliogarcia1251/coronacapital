<?php
include '../php/conexion.php';

$sql = "SELECT imagen FROM artistas WHERE nombre = 'toto' LIMIT 1";
$result = $conn->query($sql);

$rutaPortada = '';
if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $rutaPortada = $row['imagen'];
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Toto - Festival Corona Capital</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../build/css/app.css">
    </head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="contenedor contenido-header">
            <h1><a href="../index.php">Corona Capital</a></h1>
            <nav class="navegacion-principal">
                <a href="../lineup.php">Line Up</a>
                <a href="../boletos.php">Boletos</a>
                <a href="../info.php">Info</a>
            </nav>
        </div>
    </header>
    <br>
    <!-- Main -->
    <main class="contenedor artista">
        <!-- Imagen del artista -->
        <div class="imagen-artista">
        <img src="<?php echo htmlspecialchars($rutaPortada); ?>" alt="Imagen del artista" />
        </div>
    
        <!-- Información del artista -->
        <div class="info-artista">
            <br>
            <h2>Toto</h2>
            <p>
                Toto es una banda de rock estadounidense formada en 1977, conocida por éxitos como "Hold the Line" y "Africa". Compuesta inicialmente por músicos de sesión como David Paich y Jeff Porcaro, la banda se hizo famosa con su álbum Toto IV (1982), que incluye los icónicos sencillos "Rosanna" y "Africa". A lo largo de su carrera, Toto ha experimentado cambios en su alineación, pero ha mantenido su popularidad gracias a su fusión de rock, pop, jazz y rock progresivo. En los últimos años, la banda ha disfrutado de una renovada popularidad, especialmente a través de las plataformas de streaming.  
            </p>
    
            <!-- Redes sociales -->
            <div class="redes-sociales">
                <a href="https://www.facebook.com/totoband" target="_blank"> <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                </svg></a>
                <a href="https://twitter.com/toto99com" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2"> <path d="M4 4l11.733 16h4.267l-11.733 -16z"></path> <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772"></path> </svg> 
                </a>
                <a href="https://www.instagram.com/totothemselves" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2"> <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z"></path> <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path> <path d="M16.5 7.5l0 .01"></path> </svg> 
                </a>
                <a href="https://www.youtube.com/channel/UCo0VtmTVw5B1nMlzOX8KW1A" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2"> <path d="M2 8a4 4 0 0 1 4 -4h12a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-12a4 4 0 0 1 -4 -4v-8z"></path> <path d="M10 9l5 3l-5 3z"></path> </svg> 
                </a>
                <a href="https://open.spotify.com/intl-es/artist/0PFtn5NtBbbUNbU9EAmIWF" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2"> <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path> <path d="M8 11.973c2.5 -1.473 5.5 -.973 7.5 .527"></path> <path d="M9 15c1.5 -1 4 -1 5 .5"></path> <path d="M7 9c2 -1 6 -2 10 .5"></path> </svg>  
                </a>
            </div>
        </div>
    </main>
    
    <br>
    <br>
    <br>
    <!-- Footer -->
    <footer class="footer">
        <p>Festival Corona Capital 2024. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
