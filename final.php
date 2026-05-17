<?php
// 1. Iniciar la sesión para poder leer los intentos acumulados antes de borrarla
session_start();

// 2. Rescatar la cantidad de intentos guardados (si no existe, por defecto es 0)
$intentos = isset($_SESSION["intentos"]) ? $_SESSION["intentos"] : 0;

// 3. Destruir la sesión para que el juego se limpie por completo para la próxima partida
session_destroy();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso Recuperado</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="contenedor final-box">
        <div class="exito-icono">✓</div>
        
        <h1>¡Acceso recuperado!</h1>
        
        <p>Has desbloqueado todos los niveles del servidor perdido.</p>
        <p>Los archivos han sido restaurados correctamente y el mainframe está fuera de peligro.</p>
        
        <div class="metricas">
            <p>Intentos realizados en total: <strong><?php echo $intentos; ?></strong></p>
        </div>
        
        <a href="index.php" class="boton boton-reiniciar">VOLVER A JUGAR</a>
    </div>
</body>
</html>