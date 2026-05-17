<?php
// Iniciamos la sesión para poder guardar el progreso del jugador
session_start();

// Reiniciamos o definimos el estado inicial del juego
$_SESSION["nivel"] = 1;
$_SESSION["intentos"] = 0;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Servidor Perdido</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="contenedor">
        <div class="decoracion-terminal"></div>
        
        <h1>El Servidor Perdido</h1>
        
        <p><strong>TRANSMISIÓN ENTRANTE AÑO 2035</strong></p>
        <p>Un antiguo servidor de respaldo ha sido encontrado en una sala abandonada del datacenter.</p>
        <p>Para recuperar los archivos, debes superar una serie de pistas digitales.</p>
        <p>Cada respuesta correcta desbloqueará el siguiente nivel. Si fallas, el sistema te dará una advertencia.</p>
        <p class="alerta">¿Podrás recuperar el acceso antes de que el servidor se apague?</p>
        
        <a href="juego.php" class="boton">INICIAR SECUENCIA DE RECUPERACIÓN</a>
    </div>
</body>
</html>