<?php
// 1. Iniciar o continuar la sesión de juego
session_start();

// 2. Incluir de manera obligatoria la conexión a la base de datos
include("conexion.php");

// Seguridad básica: Asegurar que las variables de sesión existan
if (!isset($_SESSION["nivel"])) {
    $_SESSION["nivel"] = 1;
}
if (!isset($_SESSION["intentos"])) {
    $_SESSION["intentos"] = 0;
}

$nivel = $_SESSION["nivel"];
$mensaje = "";
$clase_mensaje = ""; 

// 3. Procesar y validar la respuesta cuando el usuario envía el formulario (POST)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $respuesta_usuario = trim($_POST["respuesta"]);
    $_SESSION["intentos"]++;

    // Buscamos la pista en la base de datos para este nivel
    $sql_validar = "SELECT * FROM pistas WHERE orden = $nivel";
    $resultado_val = $conexion->query($sql_validar);

    if ($resultado_val && $resultado_val->num_rows > 0) {
        $pista_validar = $resultado_val->fetch_assoc();

        // Comparación insensible a mayúsculas/minúsculas
        if (strcasecmp($respuesta_usuario, $pista_validar["respuesta"]) == 0) {
            $mensaje = $pista_validar["mensaje_exito"];
            $clase_mensaje = "exito";
            
            // Avanzamos el nivel
            $_SESSION["nivel"]++;
            $nivel = $_SESSION["nivel"];

            // Verificar si existe un nivel siguiente
            $sql_siguiente = "SELECT * FROM pistas WHERE orden = $nivel";
            $resultado_sig = $conexion->query($sql_siguiente);

            if (!$resultado_sig || $resultado_sig->num_rows == 0) {
                header("Location: final.php");
                exit();
            }
        } else {
            $mensaje = "Respuesta incorrecta. El cortafuegos del antiguo servidor rechaza el acceso.";
            $clase_mensaje = "error";
        }
    }
}

// 4. Consultar la pista actual para mostrarla en pantalla
$sql = "SELECT * FROM pistas WHERE orden = $nivel";
$resultado = $conexion->query($sql);

if (!$resultado || $resultado->num_rows == 0) {
    header("Location: final.php");
    exit();
}

$pista = $resultado->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Servidor Perdido - Juego</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="contenedor">
        <h1>Nivel <?php echo $nivel; ?></h1> 
        
        <div class="pista">
            <h2>[ Pista Encontrada ]</h2>
            <p><?php echo htmlspecialchars($pista["pregunta"]); ?></p>
        </div>

        <?php if (!empty($mensaje)): ?>
            <div class="mensaje <?php echo $clase_mensaje; ?>">
                <?php echo htmlspecialchars($mensaje); ?>
            </div>
        <?php endif; ?>

        <form method="POST" onsubmit="return validarFormulario();">
            <input type="text" name="respuesta" id="respuesta" placeholder="Ingresa tu respuesta" autocomplete="off">
            <button type="submit">Enviar respuesta</button>
        </form>

        <div class="estado-sesion">
            <p>Intentos registrados en esta sesión: <span><?php echo $_SESSION["intentos"]; ?></span></p>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>