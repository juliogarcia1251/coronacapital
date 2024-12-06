<?php
include '../php/conexion.php';

$sql = "SELECT imagen FROM artistas WHERE nombre = 'mccartney' LIMIT 1";
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
        <title>Paul McCartney - Festival Corona Capital</title>
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
            <h2>Paul McCartney</h2>
            <p>
                Paul McCartney es uno de los músicos más influyentes de la historia, conocido por su legado como miembro de The Beatles y por su exitosa carrera como solista. Tras la disolución de la banda en 1970, continuó su carrera con el grupo Wings y luego con una destacada trayectoria en solitario. A lo largo de su carrera, ha explorado diversos géneros, desde el rock clásico hasta la música experimental. Su último trabajo relevante es One Hand Clapping, lanzado en junio de 2024, una versión remasterizada del documental de 1974 de Wings, con material inédito de la banda y la banda sonora de una sesión en vivo. Además, celebró el 50 aniversario de Band on the Run con nuevas ediciones de este álbum clásico.                
            </p>
    
            <!-- Redes sociales -->
            <div class="redes-sociales">
                <a href="https://www.facebook.com/paulmccartney" target="_blank"> <svg
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
                <a href="https://twitter.com/paulmccartney" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2"> <path d="M4 4l11.733 16h4.267l-11.733 -16z"></path> <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772"></path> </svg> 
                </a>
                <a href="https://www.instagram.com/paulmccartney" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2"> <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z"></path> <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path> <path d="M16.5 7.5l0 .01"></path> </svg> 
                </a>
                <a href="https://www.youtube.com/paulmccartney" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2"> <path d="M2 8a4 4 0 0 1 4 -4h12a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-12a4 4 0 0 1 -4 -4v-8z"></path> <path d="M10 9l5 3l-5 3z"></path> </svg> 
                </a>
                <a href="https://open.spotify.com/intl-es/artist/4STHEaNw4mPZ2tzheohgXB" target="_blank">
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
