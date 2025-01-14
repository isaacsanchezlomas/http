<?php
// Habilitar la visualización de errores para depuración
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Parámetros de conexión a la base de datos
$servidor = "localhost"; // Nombre del servidor
$usuario = "admin"; // Nombre de usuario de la base de datos
$contrasena = "12345"; // Contraseña del usuario
$nombre_bd = "estadistica"; // Nombre de la base de datos

// Crear la conexión
$conexion = new mysqli($servidor, $usuario, $contrasena, $nombre_bd);

// Verificar si hubo errores de conexión
if ($conexion->connect_error) {
    echo "Error al conectar a MySQL: " . $conexion->connect_error;
    exit();
}

// Obtener la IP del visitante
$IP = $_SERVER['REMOTE_ADDR'];

// Insertar la IP en la tabla "registro"
$sql = "INSERT INTO registro (ip) VALUES ('$IP')";

if (!$conexion->query($sql)) {
    echo "Error al insertar datos: " . $conexion->error;
}

// Contar las filas en la tabla "registro"
$resultado = $conexion->query("SELECT COUNT(*) AS total FROM registro");

if ($resultado) {
    $fila = $resultado->fetch_assoc();
    echo "Total de registros: " . $fila['total'];
} else {
    echo "Error al consultar datos: " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>
