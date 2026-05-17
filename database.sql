CREATE DATABASE IF NOT EXISTS escape_room;
USE escape_room;

CREATE TABLE IF NOT EXISTS pistas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pregunta TEXT NOT NULL,
    respuesta VARCHAR(100) NOT NULL,
    mensaje_exito TEXT NOT NULL,
    orden INT NOT NULL
);

-- Inserción de las 4 pistas reglamentarias
INSERT INTO pistas (pregunta, respuesta, mensaje_exito, orden) VALUES 
('Soy la estructura principal de una página web. Sin mí, no hay etiquetas ni contenido ordenado. ¿Quién soy?', 'HTML', '¡Correcto! Has desbloqueado la estructura base del servidor.', 1),
('Soy el lenguaje que da color, forma y estilo a una página web. ¿Quién soy?', 'CSS', '¡Excelente! Los sistemas visuales vuelven a estar operativos.', 2),
('Trabajo del lado del cliente y puedo validar formularios, mostrar alertas o cambiar elementos de la página. ¿Quién soy?', 'JavaScript', '¡Magnífico! Los scripts de respuesta rápida han sido reestablecidos.', 3),
('Vivo en el servidor, proceso formularios y puedo conectarme a una base de datos. ¿Quién soy?', 'PHP', '¡Acceso total concedido! El núcleo del servidor está respondiendo.', 4);