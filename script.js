/**
 * Valida que el formulario de respuestas no se envíe vacío.
 * Cumple con el requisito mínimo obligatorio de validación en JavaScript.
 */
function validarFormulario() {
    // Capturamos el elemento de entrada de texto mediante su ID
    let respuestaInput = document.getElementById("respuesta");
    // Eliminamos los espacios en blanco que puedan haber en los extremos
    let valor = respuestaInput.value.trim();

    // Verificamos si el campo está vacío
    if (valor === "") {
        // Desplegamos la alerta de advertencia en el navegador
        alert("Debes ingresar una respuesta antes de continuar.");
        // Enfocamos el cursor automáticamente en el campo para comodidad del usuario
        respuestaInput.focus();
        // Retornamos false para cancelar el evento 'onsubmit' del formulario PHP
        return false;
    }
    
    // Si contiene texto, retornamos true para permitir que PHP procese la respuesta
    return true;
}